<?php

namespace Orm\Zed\MerchantRelationship\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnit;
use Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationshipToCompanyBusinessUnit as ChildSpyMerchantRelationshipToCompanyBusinessUnit;
use Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationshipToCompanyBusinessUnitQuery as ChildSpyMerchantRelationshipToCompanyBusinessUnitQuery;
use Orm\Zed\MerchantRelationship\Persistence\Map\SpyMerchantRelationshipToCompanyBusinessUnitTableMap;
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
 * Base class that represents a query for the 'spy_merchant_relationship_to_company_business_unit' table.
 *
 *
 *
 * @method     ChildSpyMerchantRelationshipToCompanyBusinessUnitQuery orderByIdMerchantRelationshipToCompanyBusinessUnit($order = Criteria::ASC) Order by the id_merchant_relationship_to_company_business_unit column
 * @method     ChildSpyMerchantRelationshipToCompanyBusinessUnitQuery orderByFkCompanyBusinessUnit($order = Criteria::ASC) Order by the fk_company_business_unit column
 * @method     ChildSpyMerchantRelationshipToCompanyBusinessUnitQuery orderByFkMerchantRelationship($order = Criteria::ASC) Order by the fk_merchant_relationship column
 *
 * @method     ChildSpyMerchantRelationshipToCompanyBusinessUnitQuery groupByIdMerchantRelationshipToCompanyBusinessUnit() Group by the id_merchant_relationship_to_company_business_unit column
 * @method     ChildSpyMerchantRelationshipToCompanyBusinessUnitQuery groupByFkCompanyBusinessUnit() Group by the fk_company_business_unit column
 * @method     ChildSpyMerchantRelationshipToCompanyBusinessUnitQuery groupByFkMerchantRelationship() Group by the fk_merchant_relationship column
 *
 * @method     ChildSpyMerchantRelationshipToCompanyBusinessUnitQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyMerchantRelationshipToCompanyBusinessUnitQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyMerchantRelationshipToCompanyBusinessUnitQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyMerchantRelationshipToCompanyBusinessUnitQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyMerchantRelationshipToCompanyBusinessUnitQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyMerchantRelationshipToCompanyBusinessUnitQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyMerchantRelationshipToCompanyBusinessUnitQuery leftJoinMerchantRelationship($relationAlias = null) Adds a LEFT JOIN clause to the query using the MerchantRelationship relation
 * @method     ChildSpyMerchantRelationshipToCompanyBusinessUnitQuery rightJoinMerchantRelationship($relationAlias = null) Adds a RIGHT JOIN clause to the query using the MerchantRelationship relation
 * @method     ChildSpyMerchantRelationshipToCompanyBusinessUnitQuery innerJoinMerchantRelationship($relationAlias = null) Adds a INNER JOIN clause to the query using the MerchantRelationship relation
 *
 * @method     ChildSpyMerchantRelationshipToCompanyBusinessUnitQuery joinWithMerchantRelationship($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the MerchantRelationship relation
 *
 * @method     ChildSpyMerchantRelationshipToCompanyBusinessUnitQuery leftJoinWithMerchantRelationship() Adds a LEFT JOIN clause and with to the query using the MerchantRelationship relation
 * @method     ChildSpyMerchantRelationshipToCompanyBusinessUnitQuery rightJoinWithMerchantRelationship() Adds a RIGHT JOIN clause and with to the query using the MerchantRelationship relation
 * @method     ChildSpyMerchantRelationshipToCompanyBusinessUnitQuery innerJoinWithMerchantRelationship() Adds a INNER JOIN clause and with to the query using the MerchantRelationship relation
 *
 * @method     ChildSpyMerchantRelationshipToCompanyBusinessUnitQuery leftJoinCompanyBusinessUnit($relationAlias = null) Adds a LEFT JOIN clause to the query using the CompanyBusinessUnit relation
 * @method     ChildSpyMerchantRelationshipToCompanyBusinessUnitQuery rightJoinCompanyBusinessUnit($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CompanyBusinessUnit relation
 * @method     ChildSpyMerchantRelationshipToCompanyBusinessUnitQuery innerJoinCompanyBusinessUnit($relationAlias = null) Adds a INNER JOIN clause to the query using the CompanyBusinessUnit relation
 *
 * @method     ChildSpyMerchantRelationshipToCompanyBusinessUnitQuery joinWithCompanyBusinessUnit($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the CompanyBusinessUnit relation
 *
 * @method     ChildSpyMerchantRelationshipToCompanyBusinessUnitQuery leftJoinWithCompanyBusinessUnit() Adds a LEFT JOIN clause and with to the query using the CompanyBusinessUnit relation
 * @method     ChildSpyMerchantRelationshipToCompanyBusinessUnitQuery rightJoinWithCompanyBusinessUnit() Adds a RIGHT JOIN clause and with to the query using the CompanyBusinessUnit relation
 * @method     ChildSpyMerchantRelationshipToCompanyBusinessUnitQuery innerJoinWithCompanyBusinessUnit() Adds a INNER JOIN clause and with to the query using the CompanyBusinessUnit relation
 *
 * @method     \Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationshipQuery|\Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnitQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyMerchantRelationshipToCompanyBusinessUnit|null findOne(ConnectionInterface $con = null) Return the first ChildSpyMerchantRelationshipToCompanyBusinessUnit matching the query
 * @method     ChildSpyMerchantRelationshipToCompanyBusinessUnit findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyMerchantRelationshipToCompanyBusinessUnit matching the query, or a new ChildSpyMerchantRelationshipToCompanyBusinessUnit object populated from the query conditions when no match is found
 *
 * @method     ChildSpyMerchantRelationshipToCompanyBusinessUnit|null findOneByIdMerchantRelationshipToCompanyBusinessUnit(int $id_merchant_relationship_to_company_business_unit) Return the first ChildSpyMerchantRelationshipToCompanyBusinessUnit filtered by the id_merchant_relationship_to_company_business_unit column
 * @method     ChildSpyMerchantRelationshipToCompanyBusinessUnit|null findOneByFkCompanyBusinessUnit(int $fk_company_business_unit) Return the first ChildSpyMerchantRelationshipToCompanyBusinessUnit filtered by the fk_company_business_unit column
 * @method     ChildSpyMerchantRelationshipToCompanyBusinessUnit|null findOneByFkMerchantRelationship(int $fk_merchant_relationship) Return the first ChildSpyMerchantRelationshipToCompanyBusinessUnit filtered by the fk_merchant_relationship column *

 * @method     ChildSpyMerchantRelationshipToCompanyBusinessUnit requirePk($key, ConnectionInterface $con = null) Return the ChildSpyMerchantRelationshipToCompanyBusinessUnit by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyMerchantRelationshipToCompanyBusinessUnit requireOne(ConnectionInterface $con = null) Return the first ChildSpyMerchantRelationshipToCompanyBusinessUnit matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyMerchantRelationshipToCompanyBusinessUnit requireOneByIdMerchantRelationshipToCompanyBusinessUnit(int $id_merchant_relationship_to_company_business_unit) Return the first ChildSpyMerchantRelationshipToCompanyBusinessUnit filtered by the id_merchant_relationship_to_company_business_unit column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyMerchantRelationshipToCompanyBusinessUnit requireOneByFkCompanyBusinessUnit(int $fk_company_business_unit) Return the first ChildSpyMerchantRelationshipToCompanyBusinessUnit filtered by the fk_company_business_unit column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyMerchantRelationshipToCompanyBusinessUnit requireOneByFkMerchantRelationship(int $fk_merchant_relationship) Return the first ChildSpyMerchantRelationshipToCompanyBusinessUnit filtered by the fk_merchant_relationship column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyMerchantRelationshipToCompanyBusinessUnit[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyMerchantRelationshipToCompanyBusinessUnit objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyMerchantRelationshipToCompanyBusinessUnit> find(ConnectionInterface $con = null) Return ChildSpyMerchantRelationshipToCompanyBusinessUnit objects based on current ModelCriteria
 * @method     ChildSpyMerchantRelationshipToCompanyBusinessUnit[]|ObjectCollection findByIdMerchantRelationshipToCompanyBusinessUnit(int $id_merchant_relationship_to_company_business_unit) Return ChildSpyMerchantRelationshipToCompanyBusinessUnit objects filtered by the id_merchant_relationship_to_company_business_unit column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyMerchantRelationshipToCompanyBusinessUnit> findByIdMerchantRelationshipToCompanyBusinessUnit(int $id_merchant_relationship_to_company_business_unit) Return ChildSpyMerchantRelationshipToCompanyBusinessUnit objects filtered by the id_merchant_relationship_to_company_business_unit column
 * @method     ChildSpyMerchantRelationshipToCompanyBusinessUnit[]|ObjectCollection findByFkCompanyBusinessUnit(int $fk_company_business_unit) Return ChildSpyMerchantRelationshipToCompanyBusinessUnit objects filtered by the fk_company_business_unit column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyMerchantRelationshipToCompanyBusinessUnit> findByFkCompanyBusinessUnit(int $fk_company_business_unit) Return ChildSpyMerchantRelationshipToCompanyBusinessUnit objects filtered by the fk_company_business_unit column
 * @method     ChildSpyMerchantRelationshipToCompanyBusinessUnit[]|ObjectCollection findByFkMerchantRelationship(int $fk_merchant_relationship) Return ChildSpyMerchantRelationshipToCompanyBusinessUnit objects filtered by the fk_merchant_relationship column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyMerchantRelationshipToCompanyBusinessUnit> findByFkMerchantRelationship(int $fk_merchant_relationship) Return ChildSpyMerchantRelationshipToCompanyBusinessUnit objects filtered by the fk_merchant_relationship column
 * @method     ChildSpyMerchantRelationshipToCompanyBusinessUnit[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyMerchantRelationshipToCompanyBusinessUnit> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyMerchantRelationshipToCompanyBusinessUnitQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\MerchantRelationship\Persistence\Base\SpyMerchantRelationshipToCompanyBusinessUnitQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\MerchantRelationship\\Persistence\\SpyMerchantRelationshipToCompanyBusinessUnit', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyMerchantRelationshipToCompanyBusinessUnitQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyMerchantRelationshipToCompanyBusinessUnitQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyMerchantRelationshipToCompanyBusinessUnitQuery) {
            return $criteria;
        }
        $query = new ChildSpyMerchantRelationshipToCompanyBusinessUnitQuery();
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
     * @return ChildSpyMerchantRelationshipToCompanyBusinessUnit|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyMerchantRelationshipToCompanyBusinessUnitTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyMerchantRelationshipToCompanyBusinessUnit A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_merchant_relationship_to_company_business_unit, fk_company_business_unit, fk_merchant_relationship FROM spy_merchant_relationship_to_company_business_unit WHERE id_merchant_relationship_to_company_business_unit = :p0';
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
            /** @var ChildSpyMerchantRelationshipToCompanyBusinessUnit $obj */
            $obj = new ChildSpyMerchantRelationshipToCompanyBusinessUnit();
            $obj->hydrate($row);
            SpyMerchantRelationshipToCompanyBusinessUnitTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyMerchantRelationshipToCompanyBusinessUnit|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyMerchantRelationshipToCompanyBusinessUnitQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyMerchantRelationshipToCompanyBusinessUnitTableMap::COL_ID_MERCHANT_RELATIONSHIP_TO_COMPANY_BUSINESS_UNIT, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyMerchantRelationshipToCompanyBusinessUnitQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyMerchantRelationshipToCompanyBusinessUnitTableMap::COL_ID_MERCHANT_RELATIONSHIP_TO_COMPANY_BUSINESS_UNIT, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idMerchantRelationshipToCompanyBusinessUnit Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdMerchantRelationshipToCompanyBusinessUnit_Between(array $idMerchantRelationshipToCompanyBusinessUnit)
    {
        return $this->filterByIdMerchantRelationshipToCompanyBusinessUnit($idMerchantRelationshipToCompanyBusinessUnit, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idMerchantRelationshipToCompanyBusinessUnits Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdMerchantRelationshipToCompanyBusinessUnit_In(array $idMerchantRelationshipToCompanyBusinessUnits)
    {
        return $this->filterByIdMerchantRelationshipToCompanyBusinessUnit($idMerchantRelationshipToCompanyBusinessUnits, Criteria::IN);
    }

    /**
     * Filter the query on the id_merchant_relationship_to_company_business_unit column
     *
     * Example usage:
     * <code>
     * $query->filterByIdMerchantRelationshipToCompanyBusinessUnit(1234); // WHERE id_merchant_relationship_to_company_business_unit = 1234
     * $query->filterByIdMerchantRelationshipToCompanyBusinessUnit(array(12, 34), Criteria::IN); // WHERE id_merchant_relationship_to_company_business_unit IN (12, 34)
     * $query->filterByIdMerchantRelationshipToCompanyBusinessUnit(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_merchant_relationship_to_company_business_unit > 12
     * </code>
     *
     * @param     mixed $idMerchantRelationshipToCompanyBusinessUnit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdMerchantRelationshipToCompanyBusinessUnit($idMerchantRelationshipToCompanyBusinessUnit = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idMerchantRelationshipToCompanyBusinessUnit)) {
            $useMinMax = false;
            if (isset($idMerchantRelationshipToCompanyBusinessUnit['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyMerchantRelationshipToCompanyBusinessUnitTableMap::COL_ID_MERCHANT_RELATIONSHIP_TO_COMPANY_BUSINESS_UNIT, $idMerchantRelationshipToCompanyBusinessUnit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idMerchantRelationshipToCompanyBusinessUnit['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyMerchantRelationshipToCompanyBusinessUnitTableMap::COL_ID_MERCHANT_RELATIONSHIP_TO_COMPANY_BUSINESS_UNIT, $idMerchantRelationshipToCompanyBusinessUnit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idMerchantRelationshipToCompanyBusinessUnit of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyMerchantRelationshipToCompanyBusinessUnitTableMap::COL_ID_MERCHANT_RELATIONSHIP_TO_COMPANY_BUSINESS_UNIT, $idMerchantRelationshipToCompanyBusinessUnit, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkCompanyBusinessUnit Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkCompanyBusinessUnit_Between(array $fkCompanyBusinessUnit)
    {
        return $this->filterByFkCompanyBusinessUnit($fkCompanyBusinessUnit, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkCompanyBusinessUnits Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkCompanyBusinessUnit_In(array $fkCompanyBusinessUnits)
    {
        return $this->filterByFkCompanyBusinessUnit($fkCompanyBusinessUnits, Criteria::IN);
    }

    /**
     * Filter the query on the fk_company_business_unit column
     *
     * Example usage:
     * <code>
     * $query->filterByFkCompanyBusinessUnit(1234); // WHERE fk_company_business_unit = 1234
     * $query->filterByFkCompanyBusinessUnit(array(12, 34), Criteria::IN); // WHERE fk_company_business_unit IN (12, 34)
     * $query->filterByFkCompanyBusinessUnit(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_company_business_unit > 12
     * </code>
     *
     * @see       filterByCompanyBusinessUnit()
     *
     * @param     mixed $fkCompanyBusinessUnit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkCompanyBusinessUnit($fkCompanyBusinessUnit = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkCompanyBusinessUnit)) {
            $useMinMax = false;
            if (isset($fkCompanyBusinessUnit['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyMerchantRelationshipToCompanyBusinessUnitTableMap::COL_FK_COMPANY_BUSINESS_UNIT, $fkCompanyBusinessUnit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkCompanyBusinessUnit['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyMerchantRelationshipToCompanyBusinessUnitTableMap::COL_FK_COMPANY_BUSINESS_UNIT, $fkCompanyBusinessUnit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkCompanyBusinessUnit of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyMerchantRelationshipToCompanyBusinessUnitTableMap::COL_FK_COMPANY_BUSINESS_UNIT, $fkCompanyBusinessUnit, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkMerchantRelationship Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkMerchantRelationship_Between(array $fkMerchantRelationship)
    {
        return $this->filterByFkMerchantRelationship($fkMerchantRelationship, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkMerchantRelationships Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkMerchantRelationship_In(array $fkMerchantRelationships)
    {
        return $this->filterByFkMerchantRelationship($fkMerchantRelationships, Criteria::IN);
    }

    /**
     * Filter the query on the fk_merchant_relationship column
     *
     * Example usage:
     * <code>
     * $query->filterByFkMerchantRelationship(1234); // WHERE fk_merchant_relationship = 1234
     * $query->filterByFkMerchantRelationship(array(12, 34), Criteria::IN); // WHERE fk_merchant_relationship IN (12, 34)
     * $query->filterByFkMerchantRelationship(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_merchant_relationship > 12
     * </code>
     *
     * @see       filterByMerchantRelationship()
     *
     * @param     mixed $fkMerchantRelationship The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkMerchantRelationship($fkMerchantRelationship = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkMerchantRelationship)) {
            $useMinMax = false;
            if (isset($fkMerchantRelationship['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyMerchantRelationshipToCompanyBusinessUnitTableMap::COL_FK_MERCHANT_RELATIONSHIP, $fkMerchantRelationship['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkMerchantRelationship['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyMerchantRelationshipToCompanyBusinessUnitTableMap::COL_FK_MERCHANT_RELATIONSHIP, $fkMerchantRelationship['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkMerchantRelationship of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyMerchantRelationshipToCompanyBusinessUnitTableMap::COL_FK_MERCHANT_RELATIONSHIP, $fkMerchantRelationship, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationship object
     *
     * @param \Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationship|ObjectCollection $spyMerchantRelationship The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyMerchantRelationshipToCompanyBusinessUnitQuery The current query, for fluid interface
     */
    public function filterByMerchantRelationship($spyMerchantRelationship, $comparison = null)
    {
        if ($spyMerchantRelationship instanceof \Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationship) {
            return $this
                ->addUsingAlias(SpyMerchantRelationshipToCompanyBusinessUnitTableMap::COL_FK_MERCHANT_RELATIONSHIP, $spyMerchantRelationship->getIdMerchantRelationship(), $comparison);
        } elseif ($spyMerchantRelationship instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyMerchantRelationshipToCompanyBusinessUnitTableMap::COL_FK_MERCHANT_RELATIONSHIP, $spyMerchantRelationship->toKeyValue('PrimaryKey', 'IdMerchantRelationship'), $comparison);
        } else {
            throw new PropelException('filterByMerchantRelationship() only accepts arguments of type \Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationship or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the MerchantRelationship relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyMerchantRelationshipToCompanyBusinessUnitQuery The current query, for fluid interface
     */
    public function joinMerchantRelationship($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('MerchantRelationship');

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
            $this->addJoinObject($join, 'MerchantRelationship');
        }

        return $this;
    }

    /**
     * Use the MerchantRelationship relation SpyMerchantRelationship object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationshipQuery A secondary query class using the current class as primary query
     */
    public function useMerchantRelationshipQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinMerchantRelationship($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'MerchantRelationship', '\Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationshipQuery');
    }

    /**
     * Use the MerchantRelationship relation SpyMerchantRelationship object
     *
     * @param callable(\Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationshipQuery):\Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationshipQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withMerchantRelationshipQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useMerchantRelationshipQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the MerchantRelationship relation to the SpyMerchantRelationship table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationshipQuery The inner query object of the EXISTS statement
     */
    public function useMerchantRelationshipExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('MerchantRelationship', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the MerchantRelationship relation to the SpyMerchantRelationship table for a NOT EXISTS query.
     *
     * @see useMerchantRelationshipExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationshipQuery The inner query object of the NOT EXISTS statement
     */
    public function useMerchantRelationshipNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('MerchantRelationship', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnit object
     *
     * @param \Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnit|ObjectCollection $spyCompanyBusinessUnit The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyMerchantRelationshipToCompanyBusinessUnitQuery The current query, for fluid interface
     */
    public function filterByCompanyBusinessUnit($spyCompanyBusinessUnit, $comparison = null)
    {
        if ($spyCompanyBusinessUnit instanceof \Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnit) {
            return $this
                ->addUsingAlias(SpyMerchantRelationshipToCompanyBusinessUnitTableMap::COL_FK_COMPANY_BUSINESS_UNIT, $spyCompanyBusinessUnit->getIdCompanyBusinessUnit(), $comparison);
        } elseif ($spyCompanyBusinessUnit instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyMerchantRelationshipToCompanyBusinessUnitTableMap::COL_FK_COMPANY_BUSINESS_UNIT, $spyCompanyBusinessUnit->toKeyValue('PrimaryKey', 'IdCompanyBusinessUnit'), $comparison);
        } else {
            throw new PropelException('filterByCompanyBusinessUnit() only accepts arguments of type \Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnit or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CompanyBusinessUnit relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyMerchantRelationshipToCompanyBusinessUnitQuery The current query, for fluid interface
     */
    public function joinCompanyBusinessUnit($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CompanyBusinessUnit');

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
            $this->addJoinObject($join, 'CompanyBusinessUnit');
        }

        return $this;
    }

    /**
     * Use the CompanyBusinessUnit relation SpyCompanyBusinessUnit object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnitQuery A secondary query class using the current class as primary query
     */
    public function useCompanyBusinessUnitQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCompanyBusinessUnit($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CompanyBusinessUnit', '\Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnitQuery');
    }

    /**
     * Use the CompanyBusinessUnit relation SpyCompanyBusinessUnit object
     *
     * @param callable(\Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnitQuery):\Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnitQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withCompanyBusinessUnitQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useCompanyBusinessUnitQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the CompanyBusinessUnit relation to the SpyCompanyBusinessUnit table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnitQuery The inner query object of the EXISTS statement
     */
    public function useCompanyBusinessUnitExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('CompanyBusinessUnit', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the CompanyBusinessUnit relation to the SpyCompanyBusinessUnit table for a NOT EXISTS query.
     *
     * @see useCompanyBusinessUnitExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnitQuery The inner query object of the NOT EXISTS statement
     */
    public function useCompanyBusinessUnitNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('CompanyBusinessUnit', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Exclude object from result
     *
     * @param   ChildSpyMerchantRelationshipToCompanyBusinessUnit $spyMerchantRelationshipToCompanyBusinessUnit Object to remove from the list of results
     *
     * @return $this|ChildSpyMerchantRelationshipToCompanyBusinessUnitQuery The current query, for fluid interface
     */
    public function prune($spyMerchantRelationshipToCompanyBusinessUnit = null)
    {
        if ($spyMerchantRelationshipToCompanyBusinessUnit) {
            $this->addUsingAlias(SpyMerchantRelationshipToCompanyBusinessUnitTableMap::COL_ID_MERCHANT_RELATIONSHIP_TO_COMPANY_BUSINESS_UNIT, $spyMerchantRelationshipToCompanyBusinessUnit->getIdMerchantRelationshipToCompanyBusinessUnit(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_merchant_relationship_to_company_business_unit table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyMerchantRelationshipToCompanyBusinessUnitTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyMerchantRelationshipToCompanyBusinessUnitTableMap::clearInstancePool();
            SpyMerchantRelationshipToCompanyBusinessUnitTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyMerchantRelationshipToCompanyBusinessUnitTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyMerchantRelationshipToCompanyBusinessUnitTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyMerchantRelationshipToCompanyBusinessUnitTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyMerchantRelationshipToCompanyBusinessUnitTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SpyMerchantRelationshipToCompanyBusinessUnitQuery
