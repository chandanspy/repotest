<?php

namespace Orm\Zed\Currency\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\Currency\Persistence\SpyCurrency as ChildSpyCurrency;
use Orm\Zed\Currency\Persistence\SpyCurrencyQuery as ChildSpyCurrencyQuery;
use Orm\Zed\Currency\Persistence\Map\SpyCurrencyTableMap;
use Orm\Zed\Discount\Persistence\SpyDiscountAmount;
use Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThreshold;
use Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductSchedule;
use Orm\Zed\PriceProduct\Persistence\SpyPriceProductStore;
use Orm\Zed\ProductOption\Persistence\SpyProductOptionValuePrice;
use Orm\Zed\SalesOrderThreshold\Persistence\SpySalesOrderThreshold;
use Orm\Zed\Shipment\Persistence\SpyShipmentMethodPrice;
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
 * Base class that represents a query for the 'spy_currency' table.
 *
 *
 *
 * @method     ChildSpyCurrencyQuery orderByIdCurrency($order = Criteria::ASC) Order by the id_currency column
 * @method     ChildSpyCurrencyQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ChildSpyCurrencyQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method     ChildSpyCurrencyQuery orderBySymbol($order = Criteria::ASC) Order by the symbol column
 *
 * @method     ChildSpyCurrencyQuery groupByIdCurrency() Group by the id_currency column
 * @method     ChildSpyCurrencyQuery groupByName() Group by the name column
 * @method     ChildSpyCurrencyQuery groupByCode() Group by the code column
 * @method     ChildSpyCurrencyQuery groupBySymbol() Group by the symbol column
 *
 * @method     ChildSpyCurrencyQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyCurrencyQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyCurrencyQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyCurrencyQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyCurrencyQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyCurrencyQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyCurrencyQuery leftJoinDiscountAmount($relationAlias = null) Adds a LEFT JOIN clause to the query using the DiscountAmount relation
 * @method     ChildSpyCurrencyQuery rightJoinDiscountAmount($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DiscountAmount relation
 * @method     ChildSpyCurrencyQuery innerJoinDiscountAmount($relationAlias = null) Adds a INNER JOIN clause to the query using the DiscountAmount relation
 *
 * @method     ChildSpyCurrencyQuery joinWithDiscountAmount($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the DiscountAmount relation
 *
 * @method     ChildSpyCurrencyQuery leftJoinWithDiscountAmount() Adds a LEFT JOIN clause and with to the query using the DiscountAmount relation
 * @method     ChildSpyCurrencyQuery rightJoinWithDiscountAmount() Adds a RIGHT JOIN clause and with to the query using the DiscountAmount relation
 * @method     ChildSpyCurrencyQuery innerJoinWithDiscountAmount() Adds a INNER JOIN clause and with to the query using the DiscountAmount relation
 *
 * @method     ChildSpyCurrencyQuery leftJoinSpyMerchantRelationshipSalesOrderThreshold($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyMerchantRelationshipSalesOrderThreshold relation
 * @method     ChildSpyCurrencyQuery rightJoinSpyMerchantRelationshipSalesOrderThreshold($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyMerchantRelationshipSalesOrderThreshold relation
 * @method     ChildSpyCurrencyQuery innerJoinSpyMerchantRelationshipSalesOrderThreshold($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyMerchantRelationshipSalesOrderThreshold relation
 *
 * @method     ChildSpyCurrencyQuery joinWithSpyMerchantRelationshipSalesOrderThreshold($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyMerchantRelationshipSalesOrderThreshold relation
 *
 * @method     ChildSpyCurrencyQuery leftJoinWithSpyMerchantRelationshipSalesOrderThreshold() Adds a LEFT JOIN clause and with to the query using the SpyMerchantRelationshipSalesOrderThreshold relation
 * @method     ChildSpyCurrencyQuery rightJoinWithSpyMerchantRelationshipSalesOrderThreshold() Adds a RIGHT JOIN clause and with to the query using the SpyMerchantRelationshipSalesOrderThreshold relation
 * @method     ChildSpyCurrencyQuery innerJoinWithSpyMerchantRelationshipSalesOrderThreshold() Adds a INNER JOIN clause and with to the query using the SpyMerchantRelationshipSalesOrderThreshold relation
 *
 * @method     ChildSpyCurrencyQuery leftJoinPriceProductStore($relationAlias = null) Adds a LEFT JOIN clause to the query using the PriceProductStore relation
 * @method     ChildSpyCurrencyQuery rightJoinPriceProductStore($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PriceProductStore relation
 * @method     ChildSpyCurrencyQuery innerJoinPriceProductStore($relationAlias = null) Adds a INNER JOIN clause to the query using the PriceProductStore relation
 *
 * @method     ChildSpyCurrencyQuery joinWithPriceProductStore($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the PriceProductStore relation
 *
 * @method     ChildSpyCurrencyQuery leftJoinWithPriceProductStore() Adds a LEFT JOIN clause and with to the query using the PriceProductStore relation
 * @method     ChildSpyCurrencyQuery rightJoinWithPriceProductStore() Adds a RIGHT JOIN clause and with to the query using the PriceProductStore relation
 * @method     ChildSpyCurrencyQuery innerJoinWithPriceProductStore() Adds a INNER JOIN clause and with to the query using the PriceProductStore relation
 *
 * @method     ChildSpyCurrencyQuery leftJoinPriceProductSchedule($relationAlias = null) Adds a LEFT JOIN clause to the query using the PriceProductSchedule relation
 * @method     ChildSpyCurrencyQuery rightJoinPriceProductSchedule($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PriceProductSchedule relation
 * @method     ChildSpyCurrencyQuery innerJoinPriceProductSchedule($relationAlias = null) Adds a INNER JOIN clause to the query using the PriceProductSchedule relation
 *
 * @method     ChildSpyCurrencyQuery joinWithPriceProductSchedule($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the PriceProductSchedule relation
 *
 * @method     ChildSpyCurrencyQuery leftJoinWithPriceProductSchedule() Adds a LEFT JOIN clause and with to the query using the PriceProductSchedule relation
 * @method     ChildSpyCurrencyQuery rightJoinWithPriceProductSchedule() Adds a RIGHT JOIN clause and with to the query using the PriceProductSchedule relation
 * @method     ChildSpyCurrencyQuery innerJoinWithPriceProductSchedule() Adds a INNER JOIN clause and with to the query using the PriceProductSchedule relation
 *
 * @method     ChildSpyCurrencyQuery leftJoinProductOptionValuePrice($relationAlias = null) Adds a LEFT JOIN clause to the query using the ProductOptionValuePrice relation
 * @method     ChildSpyCurrencyQuery rightJoinProductOptionValuePrice($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ProductOptionValuePrice relation
 * @method     ChildSpyCurrencyQuery innerJoinProductOptionValuePrice($relationAlias = null) Adds a INNER JOIN clause to the query using the ProductOptionValuePrice relation
 *
 * @method     ChildSpyCurrencyQuery joinWithProductOptionValuePrice($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ProductOptionValuePrice relation
 *
 * @method     ChildSpyCurrencyQuery leftJoinWithProductOptionValuePrice() Adds a LEFT JOIN clause and with to the query using the ProductOptionValuePrice relation
 * @method     ChildSpyCurrencyQuery rightJoinWithProductOptionValuePrice() Adds a RIGHT JOIN clause and with to the query using the ProductOptionValuePrice relation
 * @method     ChildSpyCurrencyQuery innerJoinWithProductOptionValuePrice() Adds a INNER JOIN clause and with to the query using the ProductOptionValuePrice relation
 *
 * @method     ChildSpyCurrencyQuery leftJoinSpySalesOrderThreshold($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpySalesOrderThreshold relation
 * @method     ChildSpyCurrencyQuery rightJoinSpySalesOrderThreshold($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpySalesOrderThreshold relation
 * @method     ChildSpyCurrencyQuery innerJoinSpySalesOrderThreshold($relationAlias = null) Adds a INNER JOIN clause to the query using the SpySalesOrderThreshold relation
 *
 * @method     ChildSpyCurrencyQuery joinWithSpySalesOrderThreshold($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpySalesOrderThreshold relation
 *
 * @method     ChildSpyCurrencyQuery leftJoinWithSpySalesOrderThreshold() Adds a LEFT JOIN clause and with to the query using the SpySalesOrderThreshold relation
 * @method     ChildSpyCurrencyQuery rightJoinWithSpySalesOrderThreshold() Adds a RIGHT JOIN clause and with to the query using the SpySalesOrderThreshold relation
 * @method     ChildSpyCurrencyQuery innerJoinWithSpySalesOrderThreshold() Adds a INNER JOIN clause and with to the query using the SpySalesOrderThreshold relation
 *
 * @method     ChildSpyCurrencyQuery leftJoinShipmentMethodPrice($relationAlias = null) Adds a LEFT JOIN clause to the query using the ShipmentMethodPrice relation
 * @method     ChildSpyCurrencyQuery rightJoinShipmentMethodPrice($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ShipmentMethodPrice relation
 * @method     ChildSpyCurrencyQuery innerJoinShipmentMethodPrice($relationAlias = null) Adds a INNER JOIN clause to the query using the ShipmentMethodPrice relation
 *
 * @method     ChildSpyCurrencyQuery joinWithShipmentMethodPrice($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ShipmentMethodPrice relation
 *
 * @method     ChildSpyCurrencyQuery leftJoinWithShipmentMethodPrice() Adds a LEFT JOIN clause and with to the query using the ShipmentMethodPrice relation
 * @method     ChildSpyCurrencyQuery rightJoinWithShipmentMethodPrice() Adds a RIGHT JOIN clause and with to the query using the ShipmentMethodPrice relation
 * @method     ChildSpyCurrencyQuery innerJoinWithShipmentMethodPrice() Adds a INNER JOIN clause and with to the query using the ShipmentMethodPrice relation
 *
 * @method     \Orm\Zed\Discount\Persistence\SpyDiscountAmountQuery|\Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThresholdQuery|\Orm\Zed\PriceProduct\Persistence\SpyPriceProductStoreQuery|\Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductScheduleQuery|\Orm\Zed\ProductOption\Persistence\SpyProductOptionValuePriceQuery|\Orm\Zed\SalesOrderThreshold\Persistence\SpySalesOrderThresholdQuery|\Orm\Zed\Shipment\Persistence\SpyShipmentMethodPriceQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyCurrency|null findOne(ConnectionInterface $con = null) Return the first ChildSpyCurrency matching the query
 * @method     ChildSpyCurrency findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyCurrency matching the query, or a new ChildSpyCurrency object populated from the query conditions when no match is found
 *
 * @method     ChildSpyCurrency|null findOneByIdCurrency(int $id_currency) Return the first ChildSpyCurrency filtered by the id_currency column
 * @method     ChildSpyCurrency|null findOneByName(string $name) Return the first ChildSpyCurrency filtered by the name column
 * @method     ChildSpyCurrency|null findOneByCode(string $code) Return the first ChildSpyCurrency filtered by the code column
 * @method     ChildSpyCurrency|null findOneBySymbol(string $symbol) Return the first ChildSpyCurrency filtered by the symbol column *

 * @method     ChildSpyCurrency requirePk($key, ConnectionInterface $con = null) Return the ChildSpyCurrency by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCurrency requireOne(ConnectionInterface $con = null) Return the first ChildSpyCurrency matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyCurrency requireOneByIdCurrency(int $id_currency) Return the first ChildSpyCurrency filtered by the id_currency column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCurrency requireOneByName(string $name) Return the first ChildSpyCurrency filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCurrency requireOneByCode(string $code) Return the first ChildSpyCurrency filtered by the code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCurrency requireOneBySymbol(string $symbol) Return the first ChildSpyCurrency filtered by the symbol column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyCurrency[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyCurrency objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCurrency> find(ConnectionInterface $con = null) Return ChildSpyCurrency objects based on current ModelCriteria
 * @method     ChildSpyCurrency[]|ObjectCollection findByIdCurrency(int $id_currency) Return ChildSpyCurrency objects filtered by the id_currency column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCurrency> findByIdCurrency(int $id_currency) Return ChildSpyCurrency objects filtered by the id_currency column
 * @method     ChildSpyCurrency[]|ObjectCollection findByName(string $name) Return ChildSpyCurrency objects filtered by the name column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCurrency> findByName(string $name) Return ChildSpyCurrency objects filtered by the name column
 * @method     ChildSpyCurrency[]|ObjectCollection findByCode(string $code) Return ChildSpyCurrency objects filtered by the code column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCurrency> findByCode(string $code) Return ChildSpyCurrency objects filtered by the code column
 * @method     ChildSpyCurrency[]|ObjectCollection findBySymbol(string $symbol) Return ChildSpyCurrency objects filtered by the symbol column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCurrency> findBySymbol(string $symbol) Return ChildSpyCurrency objects filtered by the symbol column
 * @method     ChildSpyCurrency[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyCurrency> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyCurrencyQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\Currency\Persistence\Base\SpyCurrencyQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\Currency\\Persistence\\SpyCurrency', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyCurrencyQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyCurrencyQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyCurrencyQuery) {
            return $criteria;
        }
        $query = new ChildSpyCurrencyQuery();
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
     * @return ChildSpyCurrency|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyCurrencyTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyCurrency A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_currency, name, code, symbol FROM spy_currency WHERE id_currency = :p0';
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
            /** @var ChildSpyCurrency $obj */
            $obj = new ChildSpyCurrency();
            $obj->hydrate($row);
            SpyCurrencyTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyCurrency|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyCurrencyQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyCurrencyTableMap::COL_ID_CURRENCY, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyCurrencyQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyCurrencyTableMap::COL_ID_CURRENCY, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idCurrency Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdCurrency_Between(array $idCurrency)
    {
        return $this->filterByIdCurrency($idCurrency, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idCurrencys Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdCurrency_In(array $idCurrencys)
    {
        return $this->filterByIdCurrency($idCurrencys, Criteria::IN);
    }

    /**
     * Filter the query on the id_currency column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCurrency(1234); // WHERE id_currency = 1234
     * $query->filterByIdCurrency(array(12, 34), Criteria::IN); // WHERE id_currency IN (12, 34)
     * $query->filterByIdCurrency(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_currency > 12
     * </code>
     *
     * @param     mixed $idCurrency The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdCurrency($idCurrency = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idCurrency)) {
            $useMinMax = false;
            if (isset($idCurrency['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCurrencyTableMap::COL_ID_CURRENCY, $idCurrency['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCurrency['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCurrencyTableMap::COL_ID_CURRENCY, $idCurrency['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idCurrency of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCurrencyTableMap::COL_ID_CURRENCY, $idCurrency, $comparison);

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

        $query = $this->addUsingAlias(SpyCurrencyTableMap::COL_NAME, $name, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $codes Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCode_In(array $codes)
    {
        return $this->filterByCode($codes, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $code Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCode_Like($code)
    {
        return $this->filterByCode($code, Criteria::LIKE);
    }

    /**
     * Filter the query on the code column
     *
     * Example usage:
     * <code>
     * $query->filterByCode('fooValue');   // WHERE code = 'fooValue'
     * $query->filterByCode('%fooValue%', Criteria::LIKE); // WHERE code LIKE '%fooValue%'
     * $query->filterByCode([1, 'foo'], Criteria::IN); // WHERE code IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $code The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByCode($code = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $code = str_replace('*', '%', $code);
        }

        if (is_array($code) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$code of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyCurrencyTableMap::COL_CODE, $code, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $symbols Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySymbol_In(array $symbols)
    {
        return $this->filterBySymbol($symbols, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $symbol Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySymbol_Like($symbol)
    {
        return $this->filterBySymbol($symbol, Criteria::LIKE);
    }

    /**
     * Filter the query on the symbol column
     *
     * Example usage:
     * <code>
     * $query->filterBySymbol('fooValue');   // WHERE symbol = 'fooValue'
     * $query->filterBySymbol('%fooValue%', Criteria::LIKE); // WHERE symbol LIKE '%fooValue%'
     * $query->filterBySymbol([1, 'foo'], Criteria::IN); // WHERE symbol IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $symbol The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterBySymbol($symbol = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $symbol = str_replace('*', '%', $symbol);
        }

        if (is_array($symbol) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$symbol of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyCurrencyTableMap::COL_SYMBOL, $symbol, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\Discount\Persistence\SpyDiscountAmount object
     *
     * @param \Orm\Zed\Discount\Persistence\SpyDiscountAmount|ObjectCollection $spyDiscountAmount the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyCurrencyQuery The current query, for fluid interface
     */
    public function filterByDiscountAmount($spyDiscountAmount, $comparison = null)
    {
        if ($spyDiscountAmount instanceof \Orm\Zed\Discount\Persistence\SpyDiscountAmount) {
            return $this
                ->addUsingAlias(SpyCurrencyTableMap::COL_ID_CURRENCY, $spyDiscountAmount->getFkCurrency(), $comparison);
        } elseif ($spyDiscountAmount instanceof ObjectCollection) {
            return $this
                ->useDiscountAmountQuery()
                ->filterByPrimaryKeys($spyDiscountAmount->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByDiscountAmount() only accepts arguments of type \Orm\Zed\Discount\Persistence\SpyDiscountAmount or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the DiscountAmount relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyCurrencyQuery The current query, for fluid interface
     */
    public function joinDiscountAmount($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('DiscountAmount');

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
            $this->addJoinObject($join, 'DiscountAmount');
        }

        return $this;
    }

    /**
     * Use the DiscountAmount relation SpyDiscountAmount object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Discount\Persistence\SpyDiscountAmountQuery A secondary query class using the current class as primary query
     */
    public function useDiscountAmountQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinDiscountAmount($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'DiscountAmount', '\Orm\Zed\Discount\Persistence\SpyDiscountAmountQuery');
    }

    /**
     * Use the DiscountAmount relation SpyDiscountAmount object
     *
     * @param callable(\Orm\Zed\Discount\Persistence\SpyDiscountAmountQuery):\Orm\Zed\Discount\Persistence\SpyDiscountAmountQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withDiscountAmountQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useDiscountAmountQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the DiscountAmount relation to the SpyDiscountAmount table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Discount\Persistence\SpyDiscountAmountQuery The inner query object of the EXISTS statement
     */
    public function useDiscountAmountExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('DiscountAmount', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the DiscountAmount relation to the SpyDiscountAmount table for a NOT EXISTS query.
     *
     * @see useDiscountAmountExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Discount\Persistence\SpyDiscountAmountQuery The inner query object of the NOT EXISTS statement
     */
    public function useDiscountAmountNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('DiscountAmount', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThreshold object
     *
     * @param \Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThreshold|ObjectCollection $spyMerchantRelationshipSalesOrderThreshold the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyCurrencyQuery The current query, for fluid interface
     */
    public function filterBySpyMerchantRelationshipSalesOrderThreshold($spyMerchantRelationshipSalesOrderThreshold, $comparison = null)
    {
        if ($spyMerchantRelationshipSalesOrderThreshold instanceof \Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThreshold) {
            return $this
                ->addUsingAlias(SpyCurrencyTableMap::COL_ID_CURRENCY, $spyMerchantRelationshipSalesOrderThreshold->getFkCurrency(), $comparison);
        } elseif ($spyMerchantRelationshipSalesOrderThreshold instanceof ObjectCollection) {
            return $this
                ->useSpyMerchantRelationshipSalesOrderThresholdQuery()
                ->filterByPrimaryKeys($spyMerchantRelationshipSalesOrderThreshold->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyMerchantRelationshipSalesOrderThreshold() only accepts arguments of type \Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThreshold or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyMerchantRelationshipSalesOrderThreshold relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyCurrencyQuery The current query, for fluid interface
     */
    public function joinSpyMerchantRelationshipSalesOrderThreshold($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyMerchantRelationshipSalesOrderThreshold');

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
            $this->addJoinObject($join, 'SpyMerchantRelationshipSalesOrderThreshold');
        }

        return $this;
    }

    /**
     * Use the SpyMerchantRelationshipSalesOrderThreshold relation SpyMerchantRelationshipSalesOrderThreshold object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThresholdQuery A secondary query class using the current class as primary query
     */
    public function useSpyMerchantRelationshipSalesOrderThresholdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyMerchantRelationshipSalesOrderThreshold($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyMerchantRelationshipSalesOrderThreshold', '\Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThresholdQuery');
    }

    /**
     * Use the SpyMerchantRelationshipSalesOrderThreshold relation SpyMerchantRelationshipSalesOrderThreshold object
     *
     * @param callable(\Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThresholdQuery):\Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThresholdQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyMerchantRelationshipSalesOrderThresholdQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyMerchantRelationshipSalesOrderThresholdQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyMerchantRelationshipSalesOrderThreshold table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThresholdQuery The inner query object of the EXISTS statement
     */
    public function useSpyMerchantRelationshipSalesOrderThresholdExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyMerchantRelationshipSalesOrderThreshold', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyMerchantRelationshipSalesOrderThreshold table for a NOT EXISTS query.
     *
     * @see useSpyMerchantRelationshipSalesOrderThresholdExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThresholdQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyMerchantRelationshipSalesOrderThresholdNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyMerchantRelationshipSalesOrderThreshold', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\PriceProduct\Persistence\SpyPriceProductStore object
     *
     * @param \Orm\Zed\PriceProduct\Persistence\SpyPriceProductStore|ObjectCollection $spyPriceProductStore the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyCurrencyQuery The current query, for fluid interface
     */
    public function filterByPriceProductStore($spyPriceProductStore, $comparison = null)
    {
        if ($spyPriceProductStore instanceof \Orm\Zed\PriceProduct\Persistence\SpyPriceProductStore) {
            return $this
                ->addUsingAlias(SpyCurrencyTableMap::COL_ID_CURRENCY, $spyPriceProductStore->getFkCurrency(), $comparison);
        } elseif ($spyPriceProductStore instanceof ObjectCollection) {
            return $this
                ->usePriceProductStoreQuery()
                ->filterByPrimaryKeys($spyPriceProductStore->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPriceProductStore() only accepts arguments of type \Orm\Zed\PriceProduct\Persistence\SpyPriceProductStore or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PriceProductStore relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyCurrencyQuery The current query, for fluid interface
     */
    public function joinPriceProductStore($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PriceProductStore');

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
            $this->addJoinObject($join, 'PriceProductStore');
        }

        return $this;
    }

    /**
     * Use the PriceProductStore relation SpyPriceProductStore object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\PriceProduct\Persistence\SpyPriceProductStoreQuery A secondary query class using the current class as primary query
     */
    public function usePriceProductStoreQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPriceProductStore($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PriceProductStore', '\Orm\Zed\PriceProduct\Persistence\SpyPriceProductStoreQuery');
    }

    /**
     * Use the PriceProductStore relation SpyPriceProductStore object
     *
     * @param callable(\Orm\Zed\PriceProduct\Persistence\SpyPriceProductStoreQuery):\Orm\Zed\PriceProduct\Persistence\SpyPriceProductStoreQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withPriceProductStoreQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->usePriceProductStoreQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the PriceProductStore relation to the SpyPriceProductStore table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\PriceProduct\Persistence\SpyPriceProductStoreQuery The inner query object of the EXISTS statement
     */
    public function usePriceProductStoreExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('PriceProductStore', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the PriceProductStore relation to the SpyPriceProductStore table for a NOT EXISTS query.
     *
     * @see usePriceProductStoreExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\PriceProduct\Persistence\SpyPriceProductStoreQuery The inner query object of the NOT EXISTS statement
     */
    public function usePriceProductStoreNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('PriceProductStore', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductSchedule object
     *
     * @param \Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductSchedule|ObjectCollection $spyPriceProductSchedule the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyCurrencyQuery The current query, for fluid interface
     */
    public function filterByPriceProductSchedule($spyPriceProductSchedule, $comparison = null)
    {
        if ($spyPriceProductSchedule instanceof \Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductSchedule) {
            return $this
                ->addUsingAlias(SpyCurrencyTableMap::COL_ID_CURRENCY, $spyPriceProductSchedule->getFkCurrency(), $comparison);
        } elseif ($spyPriceProductSchedule instanceof ObjectCollection) {
            return $this
                ->usePriceProductScheduleQuery()
                ->filterByPrimaryKeys($spyPriceProductSchedule->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPriceProductSchedule() only accepts arguments of type \Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductSchedule or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PriceProductSchedule relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyCurrencyQuery The current query, for fluid interface
     */
    public function joinPriceProductSchedule($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PriceProductSchedule');

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
            $this->addJoinObject($join, 'PriceProductSchedule');
        }

        return $this;
    }

    /**
     * Use the PriceProductSchedule relation SpyPriceProductSchedule object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductScheduleQuery A secondary query class using the current class as primary query
     */
    public function usePriceProductScheduleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPriceProductSchedule($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PriceProductSchedule', '\Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductScheduleQuery');
    }

    /**
     * Use the PriceProductSchedule relation SpyPriceProductSchedule object
     *
     * @param callable(\Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductScheduleQuery):\Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductScheduleQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withPriceProductScheduleQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->usePriceProductScheduleQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the PriceProductSchedule relation to the SpyPriceProductSchedule table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductScheduleQuery The inner query object of the EXISTS statement
     */
    public function usePriceProductScheduleExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('PriceProductSchedule', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the PriceProductSchedule relation to the SpyPriceProductSchedule table for a NOT EXISTS query.
     *
     * @see usePriceProductScheduleExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductScheduleQuery The inner query object of the NOT EXISTS statement
     */
    public function usePriceProductScheduleNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('PriceProductSchedule', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\ProductOption\Persistence\SpyProductOptionValuePrice object
     *
     * @param \Orm\Zed\ProductOption\Persistence\SpyProductOptionValuePrice|ObjectCollection $spyProductOptionValuePrice the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyCurrencyQuery The current query, for fluid interface
     */
    public function filterByProductOptionValuePrice($spyProductOptionValuePrice, $comparison = null)
    {
        if ($spyProductOptionValuePrice instanceof \Orm\Zed\ProductOption\Persistence\SpyProductOptionValuePrice) {
            return $this
                ->addUsingAlias(SpyCurrencyTableMap::COL_ID_CURRENCY, $spyProductOptionValuePrice->getFkCurrency(), $comparison);
        } elseif ($spyProductOptionValuePrice instanceof ObjectCollection) {
            return $this
                ->useProductOptionValuePriceQuery()
                ->filterByPrimaryKeys($spyProductOptionValuePrice->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByProductOptionValuePrice() only accepts arguments of type \Orm\Zed\ProductOption\Persistence\SpyProductOptionValuePrice or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ProductOptionValuePrice relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyCurrencyQuery The current query, for fluid interface
     */
    public function joinProductOptionValuePrice($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ProductOptionValuePrice');

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
            $this->addJoinObject($join, 'ProductOptionValuePrice');
        }

        return $this;
    }

    /**
     * Use the ProductOptionValuePrice relation SpyProductOptionValuePrice object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\ProductOption\Persistence\SpyProductOptionValuePriceQuery A secondary query class using the current class as primary query
     */
    public function useProductOptionValuePriceQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProductOptionValuePrice($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ProductOptionValuePrice', '\Orm\Zed\ProductOption\Persistence\SpyProductOptionValuePriceQuery');
    }

    /**
     * Use the ProductOptionValuePrice relation SpyProductOptionValuePrice object
     *
     * @param callable(\Orm\Zed\ProductOption\Persistence\SpyProductOptionValuePriceQuery):\Orm\Zed\ProductOption\Persistence\SpyProductOptionValuePriceQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withProductOptionValuePriceQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useProductOptionValuePriceQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the ProductOptionValuePrice relation to the SpyProductOptionValuePrice table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\ProductOption\Persistence\SpyProductOptionValuePriceQuery The inner query object of the EXISTS statement
     */
    public function useProductOptionValuePriceExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('ProductOptionValuePrice', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the ProductOptionValuePrice relation to the SpyProductOptionValuePrice table for a NOT EXISTS query.
     *
     * @see useProductOptionValuePriceExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\ProductOption\Persistence\SpyProductOptionValuePriceQuery The inner query object of the NOT EXISTS statement
     */
    public function useProductOptionValuePriceNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('ProductOptionValuePrice', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\SalesOrderThreshold\Persistence\SpySalesOrderThreshold object
     *
     * @param \Orm\Zed\SalesOrderThreshold\Persistence\SpySalesOrderThreshold|ObjectCollection $spySalesOrderThreshold the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyCurrencyQuery The current query, for fluid interface
     */
    public function filterBySpySalesOrderThreshold($spySalesOrderThreshold, $comparison = null)
    {
        if ($spySalesOrderThreshold instanceof \Orm\Zed\SalesOrderThreshold\Persistence\SpySalesOrderThreshold) {
            return $this
                ->addUsingAlias(SpyCurrencyTableMap::COL_ID_CURRENCY, $spySalesOrderThreshold->getFkCurrency(), $comparison);
        } elseif ($spySalesOrderThreshold instanceof ObjectCollection) {
            return $this
                ->useSpySalesOrderThresholdQuery()
                ->filterByPrimaryKeys($spySalesOrderThreshold->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpySalesOrderThreshold() only accepts arguments of type \Orm\Zed\SalesOrderThreshold\Persistence\SpySalesOrderThreshold or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpySalesOrderThreshold relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyCurrencyQuery The current query, for fluid interface
     */
    public function joinSpySalesOrderThreshold($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpySalesOrderThreshold');

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
            $this->addJoinObject($join, 'SpySalesOrderThreshold');
        }

        return $this;
    }

    /**
     * Use the SpySalesOrderThreshold relation SpySalesOrderThreshold object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\SalesOrderThreshold\Persistence\SpySalesOrderThresholdQuery A secondary query class using the current class as primary query
     */
    public function useSpySalesOrderThresholdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpySalesOrderThreshold($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpySalesOrderThreshold', '\Orm\Zed\SalesOrderThreshold\Persistence\SpySalesOrderThresholdQuery');
    }

    /**
     * Use the SpySalesOrderThreshold relation SpySalesOrderThreshold object
     *
     * @param callable(\Orm\Zed\SalesOrderThreshold\Persistence\SpySalesOrderThresholdQuery):\Orm\Zed\SalesOrderThreshold\Persistence\SpySalesOrderThresholdQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpySalesOrderThresholdQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpySalesOrderThresholdQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpySalesOrderThreshold table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\SalesOrderThreshold\Persistence\SpySalesOrderThresholdQuery The inner query object of the EXISTS statement
     */
    public function useSpySalesOrderThresholdExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpySalesOrderThreshold', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpySalesOrderThreshold table for a NOT EXISTS query.
     *
     * @see useSpySalesOrderThresholdExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\SalesOrderThreshold\Persistence\SpySalesOrderThresholdQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpySalesOrderThresholdNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpySalesOrderThreshold', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Shipment\Persistence\SpyShipmentMethodPrice object
     *
     * @param \Orm\Zed\Shipment\Persistence\SpyShipmentMethodPrice|ObjectCollection $spyShipmentMethodPrice the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyCurrencyQuery The current query, for fluid interface
     */
    public function filterByShipmentMethodPrice($spyShipmentMethodPrice, $comparison = null)
    {
        if ($spyShipmentMethodPrice instanceof \Orm\Zed\Shipment\Persistence\SpyShipmentMethodPrice) {
            return $this
                ->addUsingAlias(SpyCurrencyTableMap::COL_ID_CURRENCY, $spyShipmentMethodPrice->getFkCurrency(), $comparison);
        } elseif ($spyShipmentMethodPrice instanceof ObjectCollection) {
            return $this
                ->useShipmentMethodPriceQuery()
                ->filterByPrimaryKeys($spyShipmentMethodPrice->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByShipmentMethodPrice() only accepts arguments of type \Orm\Zed\Shipment\Persistence\SpyShipmentMethodPrice or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ShipmentMethodPrice relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyCurrencyQuery The current query, for fluid interface
     */
    public function joinShipmentMethodPrice($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ShipmentMethodPrice');

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
            $this->addJoinObject($join, 'ShipmentMethodPrice');
        }

        return $this;
    }

    /**
     * Use the ShipmentMethodPrice relation SpyShipmentMethodPrice object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Shipment\Persistence\SpyShipmentMethodPriceQuery A secondary query class using the current class as primary query
     */
    public function useShipmentMethodPriceQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinShipmentMethodPrice($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ShipmentMethodPrice', '\Orm\Zed\Shipment\Persistence\SpyShipmentMethodPriceQuery');
    }

    /**
     * Use the ShipmentMethodPrice relation SpyShipmentMethodPrice object
     *
     * @param callable(\Orm\Zed\Shipment\Persistence\SpyShipmentMethodPriceQuery):\Orm\Zed\Shipment\Persistence\SpyShipmentMethodPriceQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withShipmentMethodPriceQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useShipmentMethodPriceQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the ShipmentMethodPrice relation to the SpyShipmentMethodPrice table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Shipment\Persistence\SpyShipmentMethodPriceQuery The inner query object of the EXISTS statement
     */
    public function useShipmentMethodPriceExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('ShipmentMethodPrice', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the ShipmentMethodPrice relation to the SpyShipmentMethodPrice table for a NOT EXISTS query.
     *
     * @see useShipmentMethodPriceExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Shipment\Persistence\SpyShipmentMethodPriceQuery The inner query object of the NOT EXISTS statement
     */
    public function useShipmentMethodPriceNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('ShipmentMethodPrice', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Exclude object from result
     *
     * @param   ChildSpyCurrency $spyCurrency Object to remove from the list of results
     *
     * @return $this|ChildSpyCurrencyQuery The current query, for fluid interface
     */
    public function prune($spyCurrency = null)
    {
        if ($spyCurrency) {
            $this->addUsingAlias(SpyCurrencyTableMap::COL_ID_CURRENCY, $spyCurrency->getIdCurrency(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_currency table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCurrencyTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyCurrencyTableMap::clearInstancePool();
            SpyCurrencyTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCurrencyTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyCurrencyTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyCurrencyTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyCurrencyTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SpyCurrencyQuery
