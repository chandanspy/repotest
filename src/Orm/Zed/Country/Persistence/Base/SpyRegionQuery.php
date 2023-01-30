<?php

namespace Orm\Zed\Country\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\CompanyUnitAddress\Persistence\SpyCompanyUnitAddress;
use Orm\Zed\Country\Persistence\SpyRegion as ChildSpyRegion;
use Orm\Zed\Country\Persistence\SpyRegionQuery as ChildSpyRegionQuery;
use Orm\Zed\Country\Persistence\Map\SpyRegionTableMap;
use Orm\Zed\Customer\Persistence\SpyCustomerAddress;
use Orm\Zed\Sales\Persistence\SpySalesOrderAddress;
use Orm\Zed\Sales\Persistence\SpySalesOrderAddressHistory;
use Orm\Zed\StockAddress\Persistence\SpyStockAddress;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;
use Spryker\Zed\PropelOrm\Business\Runtime\ActiveQuery\Criteria as SprykerCriteria;
use Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException;

/**
 * Base class that represents a query for the 'spy_region' table.
 *
 *
 *
 * @method     ChildSpyRegionQuery orderByIdRegion($order = Criteria::ASC) Order by the id_region column
 * @method     ChildSpyRegionQuery orderByFkCountry($order = Criteria::ASC) Order by the fk_country column
 * @method     ChildSpyRegionQuery orderByIso2Code($order = Criteria::ASC) Order by the iso2_code column
 * @method     ChildSpyRegionQuery orderByName($order = Criteria::ASC) Order by the name column
 *
 * @method     ChildSpyRegionQuery groupByIdRegion() Group by the id_region column
 * @method     ChildSpyRegionQuery groupByFkCountry() Group by the fk_country column
 * @method     ChildSpyRegionQuery groupByIso2Code() Group by the iso2_code column
 * @method     ChildSpyRegionQuery groupByName() Group by the name column
 *
 * @method     ChildSpyRegionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyRegionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyRegionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyRegionQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyRegionQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyRegionQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyRegionQuery leftJoinSpyCountry($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyCountry relation
 * @method     ChildSpyRegionQuery rightJoinSpyCountry($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyCountry relation
 * @method     ChildSpyRegionQuery innerJoinSpyCountry($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyCountry relation
 *
 * @method     ChildSpyRegionQuery joinWithSpyCountry($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyCountry relation
 *
 * @method     ChildSpyRegionQuery leftJoinWithSpyCountry() Adds a LEFT JOIN clause and with to the query using the SpyCountry relation
 * @method     ChildSpyRegionQuery rightJoinWithSpyCountry() Adds a RIGHT JOIN clause and with to the query using the SpyCountry relation
 * @method     ChildSpyRegionQuery innerJoinWithSpyCountry() Adds a INNER JOIN clause and with to the query using the SpyCountry relation
 *
 * @method     ChildSpyRegionQuery leftJoinCompanyUnitAddress($relationAlias = null) Adds a LEFT JOIN clause to the query using the CompanyUnitAddress relation
 * @method     ChildSpyRegionQuery rightJoinCompanyUnitAddress($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CompanyUnitAddress relation
 * @method     ChildSpyRegionQuery innerJoinCompanyUnitAddress($relationAlias = null) Adds a INNER JOIN clause to the query using the CompanyUnitAddress relation
 *
 * @method     ChildSpyRegionQuery joinWithCompanyUnitAddress($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the CompanyUnitAddress relation
 *
 * @method     ChildSpyRegionQuery leftJoinWithCompanyUnitAddress() Adds a LEFT JOIN clause and with to the query using the CompanyUnitAddress relation
 * @method     ChildSpyRegionQuery rightJoinWithCompanyUnitAddress() Adds a RIGHT JOIN clause and with to the query using the CompanyUnitAddress relation
 * @method     ChildSpyRegionQuery innerJoinWithCompanyUnitAddress() Adds a INNER JOIN clause and with to the query using the CompanyUnitAddress relation
 *
 * @method     ChildSpyRegionQuery leftJoinCustomerAddress($relationAlias = null) Adds a LEFT JOIN clause to the query using the CustomerAddress relation
 * @method     ChildSpyRegionQuery rightJoinCustomerAddress($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CustomerAddress relation
 * @method     ChildSpyRegionQuery innerJoinCustomerAddress($relationAlias = null) Adds a INNER JOIN clause to the query using the CustomerAddress relation
 *
 * @method     ChildSpyRegionQuery joinWithCustomerAddress($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the CustomerAddress relation
 *
 * @method     ChildSpyRegionQuery leftJoinWithCustomerAddress() Adds a LEFT JOIN clause and with to the query using the CustomerAddress relation
 * @method     ChildSpyRegionQuery rightJoinWithCustomerAddress() Adds a RIGHT JOIN clause and with to the query using the CustomerAddress relation
 * @method     ChildSpyRegionQuery innerJoinWithCustomerAddress() Adds a INNER JOIN clause and with to the query using the CustomerAddress relation
 *
 * @method     ChildSpyRegionQuery leftJoinSalesOrderAddress($relationAlias = null) Adds a LEFT JOIN clause to the query using the SalesOrderAddress relation
 * @method     ChildSpyRegionQuery rightJoinSalesOrderAddress($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SalesOrderAddress relation
 * @method     ChildSpyRegionQuery innerJoinSalesOrderAddress($relationAlias = null) Adds a INNER JOIN clause to the query using the SalesOrderAddress relation
 *
 * @method     ChildSpyRegionQuery joinWithSalesOrderAddress($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SalesOrderAddress relation
 *
 * @method     ChildSpyRegionQuery leftJoinWithSalesOrderAddress() Adds a LEFT JOIN clause and with to the query using the SalesOrderAddress relation
 * @method     ChildSpyRegionQuery rightJoinWithSalesOrderAddress() Adds a RIGHT JOIN clause and with to the query using the SalesOrderAddress relation
 * @method     ChildSpyRegionQuery innerJoinWithSalesOrderAddress() Adds a INNER JOIN clause and with to the query using the SalesOrderAddress relation
 *
 * @method     ChildSpyRegionQuery leftJoinSalesOrderAddressHistory($relationAlias = null) Adds a LEFT JOIN clause to the query using the SalesOrderAddressHistory relation
 * @method     ChildSpyRegionQuery rightJoinSalesOrderAddressHistory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SalesOrderAddressHistory relation
 * @method     ChildSpyRegionQuery innerJoinSalesOrderAddressHistory($relationAlias = null) Adds a INNER JOIN clause to the query using the SalesOrderAddressHistory relation
 *
 * @method     ChildSpyRegionQuery joinWithSalesOrderAddressHistory($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SalesOrderAddressHistory relation
 *
 * @method     ChildSpyRegionQuery leftJoinWithSalesOrderAddressHistory() Adds a LEFT JOIN clause and with to the query using the SalesOrderAddressHistory relation
 * @method     ChildSpyRegionQuery rightJoinWithSalesOrderAddressHistory() Adds a RIGHT JOIN clause and with to the query using the SalesOrderAddressHistory relation
 * @method     ChildSpyRegionQuery innerJoinWithSalesOrderAddressHistory() Adds a INNER JOIN clause and with to the query using the SalesOrderAddressHistory relation
 *
 * @method     ChildSpyRegionQuery leftJoinStockAddress($relationAlias = null) Adds a LEFT JOIN clause to the query using the StockAddress relation
 * @method     ChildSpyRegionQuery rightJoinStockAddress($relationAlias = null) Adds a RIGHT JOIN clause to the query using the StockAddress relation
 * @method     ChildSpyRegionQuery innerJoinStockAddress($relationAlias = null) Adds a INNER JOIN clause to the query using the StockAddress relation
 *
 * @method     ChildSpyRegionQuery joinWithStockAddress($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the StockAddress relation
 *
 * @method     ChildSpyRegionQuery leftJoinWithStockAddress() Adds a LEFT JOIN clause and with to the query using the StockAddress relation
 * @method     ChildSpyRegionQuery rightJoinWithStockAddress() Adds a RIGHT JOIN clause and with to the query using the StockAddress relation
 * @method     ChildSpyRegionQuery innerJoinWithStockAddress() Adds a INNER JOIN clause and with to the query using the StockAddress relation
 *
 * @method     \Orm\Zed\Country\Persistence\SpyCountryQuery|\Orm\Zed\CompanyUnitAddress\Persistence\SpyCompanyUnitAddressQuery|\Orm\Zed\Customer\Persistence\SpyCustomerAddressQuery|\Orm\Zed\Sales\Persistence\SpySalesOrderAddressQuery|\Orm\Zed\Sales\Persistence\SpySalesOrderAddressHistoryQuery|\Orm\Zed\StockAddress\Persistence\SpyStockAddressQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyRegion|null findOne(ConnectionInterface $con = null) Return the first ChildSpyRegion matching the query
 * @method     ChildSpyRegion findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyRegion matching the query, or a new ChildSpyRegion object populated from the query conditions when no match is found
 *
 * @method     ChildSpyRegion|null findOneByIdRegion(int $id_region) Return the first ChildSpyRegion filtered by the id_region column
 * @method     ChildSpyRegion|null findOneByFkCountry(int $fk_country) Return the first ChildSpyRegion filtered by the fk_country column
 * @method     ChildSpyRegion|null findOneByIso2Code(string $iso2_code) Return the first ChildSpyRegion filtered by the iso2_code column
 * @method     ChildSpyRegion|null findOneByName(string $name) Return the first ChildSpyRegion filtered by the name column *

 * @method     ChildSpyRegion requirePk($key, ConnectionInterface $con = null) Return the ChildSpyRegion by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyRegion requireOne(ConnectionInterface $con = null) Return the first ChildSpyRegion matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyRegion requireOneByIdRegion(int $id_region) Return the first ChildSpyRegion filtered by the id_region column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyRegion requireOneByFkCountry(int $fk_country) Return the first ChildSpyRegion filtered by the fk_country column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyRegion requireOneByIso2Code(string $iso2_code) Return the first ChildSpyRegion filtered by the iso2_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyRegion requireOneByName(string $name) Return the first ChildSpyRegion filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyRegion[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyRegion objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyRegion> find(ConnectionInterface $con = null) Return ChildSpyRegion objects based on current ModelCriteria
 * @method     ChildSpyRegion[]|ObjectCollection findByIdRegion(int $id_region) Return ChildSpyRegion objects filtered by the id_region column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyRegion> findByIdRegion(int $id_region) Return ChildSpyRegion objects filtered by the id_region column
 * @method     ChildSpyRegion[]|ObjectCollection findByFkCountry(int $fk_country) Return ChildSpyRegion objects filtered by the fk_country column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyRegion> findByFkCountry(int $fk_country) Return ChildSpyRegion objects filtered by the fk_country column
 * @method     ChildSpyRegion[]|ObjectCollection findByIso2Code(string $iso2_code) Return ChildSpyRegion objects filtered by the iso2_code column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyRegion> findByIso2Code(string $iso2_code) Return ChildSpyRegion objects filtered by the iso2_code column
 * @method     ChildSpyRegion[]|ObjectCollection findByName(string $name) Return ChildSpyRegion objects filtered by the name column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyRegion> findByName(string $name) Return ChildSpyRegion objects filtered by the name column
 * @method     ChildSpyRegion[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyRegion> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyRegionQuery extends ModelCriteria
{

    /**
     * @var bool
     */
    protected $isForUpdateEnabled = false;

    /**
     * @param bool $isForUpdateEnabled
     *
     * @return $this The primary criteria object
     */
    public function forUpdate($isForUpdateEnabled)
    {
        $this->isForUpdateEnabled = $isForUpdateEnabled;

        return $this;
    }

    /**
     * @param array $params
     *
     * @return string
     */
    public function createSelectSql(&$params)
    {
        $sql = parent::createSelectSql($params);
        if ($this->isForUpdateEnabled) {
            $sql .= ' FOR UPDATE';
        }

        return $sql;
    }

    /**
     * Clear the conditions to allow the reuse of the query object.
     * The ModelCriteria's Model and alias 'all the properties set by construct) will remain.
     *
     * @return $this The primary criteria object
     */
    public function clear()
    {
        parent::clear();

        $this->isSelfSelected = false;
        $this->forUpdate(false);

        return $this;
    }


    /**
     * Issue a SELECT query based on the current ModelCriteria
     * and format the list of results with the current formatter
     * By default, returns an array of model objects
     *
     * @param \Propel\Runtime\Connection\ConnectionInterface|null $con an optional connection object
     *
     * @return \Propel\Runtime\Collection\ObjectCollection|\Propel\Runtime\ActiveRecord\ActiveRecordInterface[]|mixed the list of results, formatted by the current formatter
     */
    public function find(?ConnectionInterface $con = null)
    {
        return parent::find($con);
    }

    /**
     * Issue a SELECT ... LIMIT 1 query based on the current ModelCriteria
     * and format the result with the current formatter
     * By default, returns a model object.
     *
     * Does not work with ->with()s containing one-to-many relations.
     *
     * @param \Propel\Runtime\Connection\ConnectionInterface|null $con an optional connection object
     *
     * @return mixed the result, formatted by the current formatter
     */
    public function findOne(?ConnectionInterface $con = null)
    {
        return parent::findOne($con);
    }

    /**
     * Issue an existence check on the current ModelCriteria
     *
     * @param \Propel\Runtime\Connection\ConnectionInterface|null $con an optional connection object
     *
     * @return bool column existence
     */
    public function exists(?ConnectionInterface $con = null)
    {
        return parent::exists($con);
    }
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Orm\Zed\Country\Persistence\Base\SpyRegionQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\Country\\Persistence\\SpyRegion', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyRegionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyRegionQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyRegionQuery) {
            return $criteria;
        }
        $query = new ChildSpyRegionQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildSpyRegion|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = SpyRegionTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
            // the object is already in the instance pool
            return $obj;
        }

        return $this->findPkSimple($key, $con);
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyRegion A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_region, fk_country, iso2_code, name FROM spy_region WHERE id_region = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildSpyRegion $obj */
            $obj = new ChildSpyRegion();
            $obj->hydrate($row);
            SpyRegionTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @return ChildSpyRegion|array|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, ConnectionInterface $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($dataFetcher);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
    {

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }

        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($dataFetcher);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildSpyRegionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyRegionTableMap::COL_ID_REGION, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyRegionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyRegionTableMap::COL_ID_REGION, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idRegion Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdRegion_Between(array $idRegion)
    {
        return $this->filterByIdRegion($idRegion, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idRegions Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdRegion_In(array $idRegions)
    {
        return $this->filterByIdRegion($idRegions, Criteria::IN);
    }

    /**
     * Filter the query on the id_region column
     *
     * Example usage:
     * <code>
     * $query->filterByIdRegion(1234); // WHERE id_region = 1234
     * $query->filterByIdRegion(array(12, 34), Criteria::IN); // WHERE id_region IN (12, 34)
     * $query->filterByIdRegion(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_region > 12
     * </code>
     *
     * @param     mixed $idRegion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdRegion($idRegion = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idRegion)) {
            $useMinMax = false;
            if (isset($idRegion['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyRegionTableMap::COL_ID_REGION, $idRegion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idRegion['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyRegionTableMap::COL_ID_REGION, $idRegion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idRegion of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyRegionTableMap::COL_ID_REGION, $idRegion, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkCountry Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkCountry_Between(array $fkCountry)
    {
        return $this->filterByFkCountry($fkCountry, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkCountrys Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkCountry_In(array $fkCountrys)
    {
        return $this->filterByFkCountry($fkCountrys, Criteria::IN);
    }

    /**
     * Filter the query on the fk_country column
     *
     * Example usage:
     * <code>
     * $query->filterByFkCountry(1234); // WHERE fk_country = 1234
     * $query->filterByFkCountry(array(12, 34), Criteria::IN); // WHERE fk_country IN (12, 34)
     * $query->filterByFkCountry(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_country > 12
     * </code>
     *
     * @see       filterBySpyCountry()
     *
     * @param     mixed $fkCountry The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkCountry($fkCountry = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkCountry)) {
            $useMinMax = false;
            if (isset($fkCountry['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyRegionTableMap::COL_FK_COUNTRY, $fkCountry['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkCountry['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyRegionTableMap::COL_FK_COUNTRY, $fkCountry['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkCountry of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyRegionTableMap::COL_FK_COUNTRY, $fkCountry, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $iso2Codes Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIso2Code_In(array $iso2Codes)
    {
        return $this->filterByIso2Code($iso2Codes, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $iso2Code Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIso2Code_Like($iso2Code)
    {
        return $this->filterByIso2Code($iso2Code, Criteria::LIKE);
    }

    /**
     * Filter the query on the iso2_code column
     *
     * Example usage:
     * <code>
     * $query->filterByIso2Code('fooValue');   // WHERE iso2_code = 'fooValue'
     * $query->filterByIso2Code('%fooValue%', Criteria::LIKE); // WHERE iso2_code LIKE '%fooValue%'
     * $query->filterByIso2Code([1, 'foo'], Criteria::IN); // WHERE iso2_code IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $iso2Code The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIso2Code($iso2Code = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $iso2Code = str_replace('*', '%', $iso2Code);
        }

        if (is_array($iso2Code) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$iso2Code of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyRegionTableMap::COL_ISO2_CODE, $iso2Code, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $names Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByName_In(array $names)
    {
        return $this->filterByName($names, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $name Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByName_Like($name)
    {
        return $this->filterByName($name, Criteria::LIKE);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%', Criteria::LIKE); // WHERE name LIKE '%fooValue%'
     * $query->filterByName([1, 'foo'], Criteria::IN); // WHERE name IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByName($name = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $name = str_replace('*', '%', $name);
        }

        if (is_array($name) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$name of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyRegionTableMap::COL_NAME, $name, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\Country\Persistence\SpyCountry object
     *
     * @param \Orm\Zed\Country\Persistence\SpyCountry|ObjectCollection $spyCountry The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyRegionQuery The current query, for fluid interface
     */
    public function filterBySpyCountry($spyCountry, $comparison = null)
    {
        if ($spyCountry instanceof \Orm\Zed\Country\Persistence\SpyCountry) {
            return $this
                ->addUsingAlias(SpyRegionTableMap::COL_FK_COUNTRY, $spyCountry->getIdCountry(), $comparison);
        } elseif ($spyCountry instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyRegionTableMap::COL_FK_COUNTRY, $spyCountry->toKeyValue('PrimaryKey', 'IdCountry'), $comparison);
        } else {
            throw new PropelException('filterBySpyCountry() only accepts arguments of type \Orm\Zed\Country\Persistence\SpyCountry or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyCountry relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyRegionQuery The current query, for fluid interface
     */
    public function joinSpyCountry($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyCountry');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'SpyCountry');
        }

        return $this;
    }

    /**
     * Use the SpyCountry relation SpyCountry object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Country\Persistence\SpyCountryQuery A secondary query class using the current class as primary query
     */
    public function useSpyCountryQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinSpyCountry($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyCountry', '\Orm\Zed\Country\Persistence\SpyCountryQuery');
    }

    /**
     * Use the SpyCountry relation SpyCountry object
     *
     * @param callable(\Orm\Zed\Country\Persistence\SpyCountryQuery):\Orm\Zed\Country\Persistence\SpyCountryQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyCountryQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useSpyCountryQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyCountry table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Country\Persistence\SpyCountryQuery The inner query object of the EXISTS statement
     */
    public function useSpyCountryExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyCountry', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyCountry table for a NOT EXISTS query.
     *
     * @see useSpyCountryExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Country\Persistence\SpyCountryQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyCountryNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyCountry', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\CompanyUnitAddress\Persistence\SpyCompanyUnitAddress object
     *
     * @param \Orm\Zed\CompanyUnitAddress\Persistence\SpyCompanyUnitAddress|ObjectCollection $spyCompanyUnitAddress the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyRegionQuery The current query, for fluid interface
     */
    public function filterByCompanyUnitAddress($spyCompanyUnitAddress, $comparison = null)
    {
        if ($spyCompanyUnitAddress instanceof \Orm\Zed\CompanyUnitAddress\Persistence\SpyCompanyUnitAddress) {
            return $this
                ->addUsingAlias(SpyRegionTableMap::COL_ID_REGION, $spyCompanyUnitAddress->getFkRegion(), $comparison);
        } elseif ($spyCompanyUnitAddress instanceof ObjectCollection) {
            return $this
                ->useCompanyUnitAddressQuery()
                ->filterByPrimaryKeys($spyCompanyUnitAddress->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCompanyUnitAddress() only accepts arguments of type \Orm\Zed\CompanyUnitAddress\Persistence\SpyCompanyUnitAddress or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CompanyUnitAddress relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyRegionQuery The current query, for fluid interface
     */
    public function joinCompanyUnitAddress($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CompanyUnitAddress');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CompanyUnitAddress');
        }

        return $this;
    }

    /**
     * Use the CompanyUnitAddress relation SpyCompanyUnitAddress object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\CompanyUnitAddress\Persistence\SpyCompanyUnitAddressQuery A secondary query class using the current class as primary query
     */
    public function useCompanyUnitAddressQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCompanyUnitAddress($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CompanyUnitAddress', '\Orm\Zed\CompanyUnitAddress\Persistence\SpyCompanyUnitAddressQuery');
    }

    /**
     * Use the CompanyUnitAddress relation SpyCompanyUnitAddress object
     *
     * @param callable(\Orm\Zed\CompanyUnitAddress\Persistence\SpyCompanyUnitAddressQuery):\Orm\Zed\CompanyUnitAddress\Persistence\SpyCompanyUnitAddressQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withCompanyUnitAddressQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useCompanyUnitAddressQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the CompanyUnitAddress relation to the SpyCompanyUnitAddress table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\CompanyUnitAddress\Persistence\SpyCompanyUnitAddressQuery The inner query object of the EXISTS statement
     */
    public function useCompanyUnitAddressExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('CompanyUnitAddress', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the CompanyUnitAddress relation to the SpyCompanyUnitAddress table for a NOT EXISTS query.
     *
     * @see useCompanyUnitAddressExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\CompanyUnitAddress\Persistence\SpyCompanyUnitAddressQuery The inner query object of the NOT EXISTS statement
     */
    public function useCompanyUnitAddressNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('CompanyUnitAddress', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Customer\Persistence\SpyCustomerAddress object
     *
     * @param \Orm\Zed\Customer\Persistence\SpyCustomerAddress|ObjectCollection $spyCustomerAddress the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyRegionQuery The current query, for fluid interface
     */
    public function filterByCustomerAddress($spyCustomerAddress, $comparison = null)
    {
        if ($spyCustomerAddress instanceof \Orm\Zed\Customer\Persistence\SpyCustomerAddress) {
            return $this
                ->addUsingAlias(SpyRegionTableMap::COL_ID_REGION, $spyCustomerAddress->getFkRegion(), $comparison);
        } elseif ($spyCustomerAddress instanceof ObjectCollection) {
            return $this
                ->useCustomerAddressQuery()
                ->filterByPrimaryKeys($spyCustomerAddress->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCustomerAddress() only accepts arguments of type \Orm\Zed\Customer\Persistence\SpyCustomerAddress or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CustomerAddress relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyRegionQuery The current query, for fluid interface
     */
    public function joinCustomerAddress($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CustomerAddress');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CustomerAddress');
        }

        return $this;
    }

    /**
     * Use the CustomerAddress relation SpyCustomerAddress object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Customer\Persistence\SpyCustomerAddressQuery A secondary query class using the current class as primary query
     */
    public function useCustomerAddressQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCustomerAddress($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CustomerAddress', '\Orm\Zed\Customer\Persistence\SpyCustomerAddressQuery');
    }

    /**
     * Use the CustomerAddress relation SpyCustomerAddress object
     *
     * @param callable(\Orm\Zed\Customer\Persistence\SpyCustomerAddressQuery):\Orm\Zed\Customer\Persistence\SpyCustomerAddressQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withCustomerAddressQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useCustomerAddressQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the CustomerAddress relation to the SpyCustomerAddress table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Customer\Persistence\SpyCustomerAddressQuery The inner query object of the EXISTS statement
     */
    public function useCustomerAddressExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('CustomerAddress', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the CustomerAddress relation to the SpyCustomerAddress table for a NOT EXISTS query.
     *
     * @see useCustomerAddressExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Customer\Persistence\SpyCustomerAddressQuery The inner query object of the NOT EXISTS statement
     */
    public function useCustomerAddressNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('CustomerAddress', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Sales\Persistence\SpySalesOrderAddress object
     *
     * @param \Orm\Zed\Sales\Persistence\SpySalesOrderAddress|ObjectCollection $spySalesOrderAddress the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyRegionQuery The current query, for fluid interface
     */
    public function filterBySalesOrderAddress($spySalesOrderAddress, $comparison = null)
    {
        if ($spySalesOrderAddress instanceof \Orm\Zed\Sales\Persistence\SpySalesOrderAddress) {
            return $this
                ->addUsingAlias(SpyRegionTableMap::COL_ID_REGION, $spySalesOrderAddress->getFkRegion(), $comparison);
        } elseif ($spySalesOrderAddress instanceof ObjectCollection) {
            return $this
                ->useSalesOrderAddressQuery()
                ->filterByPrimaryKeys($spySalesOrderAddress->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySalesOrderAddress() only accepts arguments of type \Orm\Zed\Sales\Persistence\SpySalesOrderAddress or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SalesOrderAddress relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyRegionQuery The current query, for fluid interface
     */
    public function joinSalesOrderAddress($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SalesOrderAddress');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'SalesOrderAddress');
        }

        return $this;
    }

    /**
     * Use the SalesOrderAddress relation SpySalesOrderAddress object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Sales\Persistence\SpySalesOrderAddressQuery A secondary query class using the current class as primary query
     */
    public function useSalesOrderAddressQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinSalesOrderAddress($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SalesOrderAddress', '\Orm\Zed\Sales\Persistence\SpySalesOrderAddressQuery');
    }

    /**
     * Use the SalesOrderAddress relation SpySalesOrderAddress object
     *
     * @param callable(\Orm\Zed\Sales\Persistence\SpySalesOrderAddressQuery):\Orm\Zed\Sales\Persistence\SpySalesOrderAddressQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSalesOrderAddressQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useSalesOrderAddressQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the SalesOrderAddress relation to the SpySalesOrderAddress table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Sales\Persistence\SpySalesOrderAddressQuery The inner query object of the EXISTS statement
     */
    public function useSalesOrderAddressExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SalesOrderAddress', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the SalesOrderAddress relation to the SpySalesOrderAddress table for a NOT EXISTS query.
     *
     * @see useSalesOrderAddressExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Sales\Persistence\SpySalesOrderAddressQuery The inner query object of the NOT EXISTS statement
     */
    public function useSalesOrderAddressNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SalesOrderAddress', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Sales\Persistence\SpySalesOrderAddressHistory object
     *
     * @param \Orm\Zed\Sales\Persistence\SpySalesOrderAddressHistory|ObjectCollection $spySalesOrderAddressHistory the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyRegionQuery The current query, for fluid interface
     */
    public function filterBySalesOrderAddressHistory($spySalesOrderAddressHistory, $comparison = null)
    {
        if ($spySalesOrderAddressHistory instanceof \Orm\Zed\Sales\Persistence\SpySalesOrderAddressHistory) {
            return $this
                ->addUsingAlias(SpyRegionTableMap::COL_ID_REGION, $spySalesOrderAddressHistory->getFkRegion(), $comparison);
        } elseif ($spySalesOrderAddressHistory instanceof ObjectCollection) {
            return $this
                ->useSalesOrderAddressHistoryQuery()
                ->filterByPrimaryKeys($spySalesOrderAddressHistory->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySalesOrderAddressHistory() only accepts arguments of type \Orm\Zed\Sales\Persistence\SpySalesOrderAddressHistory or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SalesOrderAddressHistory relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyRegionQuery The current query, for fluid interface
     */
    public function joinSalesOrderAddressHistory($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SalesOrderAddressHistory');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'SalesOrderAddressHistory');
        }

        return $this;
    }

    /**
     * Use the SalesOrderAddressHistory relation SpySalesOrderAddressHistory object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Sales\Persistence\SpySalesOrderAddressHistoryQuery A secondary query class using the current class as primary query
     */
    public function useSalesOrderAddressHistoryQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinSalesOrderAddressHistory($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SalesOrderAddressHistory', '\Orm\Zed\Sales\Persistence\SpySalesOrderAddressHistoryQuery');
    }

    /**
     * Use the SalesOrderAddressHistory relation SpySalesOrderAddressHistory object
     *
     * @param callable(\Orm\Zed\Sales\Persistence\SpySalesOrderAddressHistoryQuery):\Orm\Zed\Sales\Persistence\SpySalesOrderAddressHistoryQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSalesOrderAddressHistoryQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useSalesOrderAddressHistoryQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the SalesOrderAddressHistory relation to the SpySalesOrderAddressHistory table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Sales\Persistence\SpySalesOrderAddressHistoryQuery The inner query object of the EXISTS statement
     */
    public function useSalesOrderAddressHistoryExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SalesOrderAddressHistory', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the SalesOrderAddressHistory relation to the SpySalesOrderAddressHistory table for a NOT EXISTS query.
     *
     * @see useSalesOrderAddressHistoryExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Sales\Persistence\SpySalesOrderAddressHistoryQuery The inner query object of the NOT EXISTS statement
     */
    public function useSalesOrderAddressHistoryNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SalesOrderAddressHistory', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\StockAddress\Persistence\SpyStockAddress object
     *
     * @param \Orm\Zed\StockAddress\Persistence\SpyStockAddress|ObjectCollection $spyStockAddress the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyRegionQuery The current query, for fluid interface
     */
    public function filterByStockAddress($spyStockAddress, $comparison = null)
    {
        if ($spyStockAddress instanceof \Orm\Zed\StockAddress\Persistence\SpyStockAddress) {
            return $this
                ->addUsingAlias(SpyRegionTableMap::COL_ID_REGION, $spyStockAddress->getFkRegion(), $comparison);
        } elseif ($spyStockAddress instanceof ObjectCollection) {
            return $this
                ->useStockAddressQuery()
                ->filterByPrimaryKeys($spyStockAddress->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByStockAddress() only accepts arguments of type \Orm\Zed\StockAddress\Persistence\SpyStockAddress or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the StockAddress relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyRegionQuery The current query, for fluid interface
     */
    public function joinStockAddress($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('StockAddress');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'StockAddress');
        }

        return $this;
    }

    /**
     * Use the StockAddress relation SpyStockAddress object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\StockAddress\Persistence\SpyStockAddressQuery A secondary query class using the current class as primary query
     */
    public function useStockAddressQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinStockAddress($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'StockAddress', '\Orm\Zed\StockAddress\Persistence\SpyStockAddressQuery');
    }

    /**
     * Use the StockAddress relation SpyStockAddress object
     *
     * @param callable(\Orm\Zed\StockAddress\Persistence\SpyStockAddressQuery):\Orm\Zed\StockAddress\Persistence\SpyStockAddressQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withStockAddressQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useStockAddressQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the StockAddress relation to the SpyStockAddress table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\StockAddress\Persistence\SpyStockAddressQuery The inner query object of the EXISTS statement
     */
    public function useStockAddressExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('StockAddress', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the StockAddress relation to the SpyStockAddress table for a NOT EXISTS query.
     *
     * @see useStockAddressExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\StockAddress\Persistence\SpyStockAddressQuery The inner query object of the NOT EXISTS statement
     */
    public function useStockAddressNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('StockAddress', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Exclude object from result
     *
     * @param   ChildSpyRegion $spyRegion Object to remove from the list of results
     *
     * @return $this|ChildSpyRegionQuery The current query, for fluid interface
     */
    public function prune($spyRegion = null)
    {
        if ($spyRegion) {
            $this->addUsingAlias(SpyRegionTableMap::COL_ID_REGION, $spyRegion->getIdRegion(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_region table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyRegionTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyRegionTableMap::clearInstancePool();
            SpyRegionTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    /**
     * Performs a DELETE on the database based on the current ModelCriteria
     *
     * @param ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyRegionTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyRegionTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyRegionTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyRegionTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SpyRegionQuery
