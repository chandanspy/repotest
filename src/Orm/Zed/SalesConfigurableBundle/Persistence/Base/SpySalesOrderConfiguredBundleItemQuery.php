<?php

namespace Orm\Zed\SalesConfigurableBundle\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\SalesConfigurableBundle\Persistence\SpySalesOrderConfiguredBundleItem as ChildSpySalesOrderConfiguredBundleItem;
use Orm\Zed\SalesConfigurableBundle\Persistence\SpySalesOrderConfiguredBundleItemQuery as ChildSpySalesOrderConfiguredBundleItemQuery;
use Orm\Zed\SalesConfigurableBundle\Persistence\Map\SpySalesOrderConfiguredBundleItemTableMap;
use Orm\Zed\Sales\Persistence\SpySalesOrderItem;
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
 * Base class that represents a query for the 'spy_sales_order_configured_bundle_item' table.
 *
 *
 *
 * @method     ChildSpySalesOrderConfiguredBundleItemQuery orderByIdSalesOrderConfiguredBundleItem($order = Criteria::ASC) Order by the id_sales_order_configured_bundle_item column
 * @method     ChildSpySalesOrderConfiguredBundleItemQuery orderByFkSalesOrderConfiguredBundle($order = Criteria::ASC) Order by the fk_sales_order_configured_bundle column
 * @method     ChildSpySalesOrderConfiguredBundleItemQuery orderByFkSalesOrderItem($order = Criteria::ASC) Order by the fk_sales_order_item column
 * @method     ChildSpySalesOrderConfiguredBundleItemQuery orderByConfigurableBundleTemplateSlotUuid($order = Criteria::ASC) Order by the configurable_bundle_template_slot_uuid column
 * @method     ChildSpySalesOrderConfiguredBundleItemQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildSpySalesOrderConfiguredBundleItemQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ChildSpySalesOrderConfiguredBundleItemQuery groupByIdSalesOrderConfiguredBundleItem() Group by the id_sales_order_configured_bundle_item column
 * @method     ChildSpySalesOrderConfiguredBundleItemQuery groupByFkSalesOrderConfiguredBundle() Group by the fk_sales_order_configured_bundle column
 * @method     ChildSpySalesOrderConfiguredBundleItemQuery groupByFkSalesOrderItem() Group by the fk_sales_order_item column
 * @method     ChildSpySalesOrderConfiguredBundleItemQuery groupByConfigurableBundleTemplateSlotUuid() Group by the configurable_bundle_template_slot_uuid column
 * @method     ChildSpySalesOrderConfiguredBundleItemQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildSpySalesOrderConfiguredBundleItemQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ChildSpySalesOrderConfiguredBundleItemQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpySalesOrderConfiguredBundleItemQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpySalesOrderConfiguredBundleItemQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpySalesOrderConfiguredBundleItemQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpySalesOrderConfiguredBundleItemQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpySalesOrderConfiguredBundleItemQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpySalesOrderConfiguredBundleItemQuery leftJoinSpySalesOrderConfiguredBundle($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpySalesOrderConfiguredBundle relation
 * @method     ChildSpySalesOrderConfiguredBundleItemQuery rightJoinSpySalesOrderConfiguredBundle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpySalesOrderConfiguredBundle relation
 * @method     ChildSpySalesOrderConfiguredBundleItemQuery innerJoinSpySalesOrderConfiguredBundle($relationAlias = null) Adds a INNER JOIN clause to the query using the SpySalesOrderConfiguredBundle relation
 *
 * @method     ChildSpySalesOrderConfiguredBundleItemQuery joinWithSpySalesOrderConfiguredBundle($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpySalesOrderConfiguredBundle relation
 *
 * @method     ChildSpySalesOrderConfiguredBundleItemQuery leftJoinWithSpySalesOrderConfiguredBundle() Adds a LEFT JOIN clause and with to the query using the SpySalesOrderConfiguredBundle relation
 * @method     ChildSpySalesOrderConfiguredBundleItemQuery rightJoinWithSpySalesOrderConfiguredBundle() Adds a RIGHT JOIN clause and with to the query using the SpySalesOrderConfiguredBundle relation
 * @method     ChildSpySalesOrderConfiguredBundleItemQuery innerJoinWithSpySalesOrderConfiguredBundle() Adds a INNER JOIN clause and with to the query using the SpySalesOrderConfiguredBundle relation
 *
 * @method     ChildSpySalesOrderConfiguredBundleItemQuery leftJoinSpySalesOrderItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpySalesOrderItem relation
 * @method     ChildSpySalesOrderConfiguredBundleItemQuery rightJoinSpySalesOrderItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpySalesOrderItem relation
 * @method     ChildSpySalesOrderConfiguredBundleItemQuery innerJoinSpySalesOrderItem($relationAlias = null) Adds a INNER JOIN clause to the query using the SpySalesOrderItem relation
 *
 * @method     ChildSpySalesOrderConfiguredBundleItemQuery joinWithSpySalesOrderItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpySalesOrderItem relation
 *
 * @method     ChildSpySalesOrderConfiguredBundleItemQuery leftJoinWithSpySalesOrderItem() Adds a LEFT JOIN clause and with to the query using the SpySalesOrderItem relation
 * @method     ChildSpySalesOrderConfiguredBundleItemQuery rightJoinWithSpySalesOrderItem() Adds a RIGHT JOIN clause and with to the query using the SpySalesOrderItem relation
 * @method     ChildSpySalesOrderConfiguredBundleItemQuery innerJoinWithSpySalesOrderItem() Adds a INNER JOIN clause and with to the query using the SpySalesOrderItem relation
 *
 * @method     \Orm\Zed\SalesConfigurableBundle\Persistence\SpySalesOrderConfiguredBundleQuery|\Orm\Zed\Sales\Persistence\SpySalesOrderItemQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpySalesOrderConfiguredBundleItem|null findOne(ConnectionInterface $con = null) Return the first ChildSpySalesOrderConfiguredBundleItem matching the query
 * @method     ChildSpySalesOrderConfiguredBundleItem findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpySalesOrderConfiguredBundleItem matching the query, or a new ChildSpySalesOrderConfiguredBundleItem object populated from the query conditions when no match is found
 *
 * @method     ChildSpySalesOrderConfiguredBundleItem|null findOneByIdSalesOrderConfiguredBundleItem(int $id_sales_order_configured_bundle_item) Return the first ChildSpySalesOrderConfiguredBundleItem filtered by the id_sales_order_configured_bundle_item column
 * @method     ChildSpySalesOrderConfiguredBundleItem|null findOneByFkSalesOrderConfiguredBundle(int $fk_sales_order_configured_bundle) Return the first ChildSpySalesOrderConfiguredBundleItem filtered by the fk_sales_order_configured_bundle column
 * @method     ChildSpySalesOrderConfiguredBundleItem|null findOneByFkSalesOrderItem(int $fk_sales_order_item) Return the first ChildSpySalesOrderConfiguredBundleItem filtered by the fk_sales_order_item column
 * @method     ChildSpySalesOrderConfiguredBundleItem|null findOneByConfigurableBundleTemplateSlotUuid(string $configurable_bundle_template_slot_uuid) Return the first ChildSpySalesOrderConfiguredBundleItem filtered by the configurable_bundle_template_slot_uuid column
 * @method     ChildSpySalesOrderConfiguredBundleItem|null findOneByCreatedAt(string $created_at) Return the first ChildSpySalesOrderConfiguredBundleItem filtered by the created_at column
 * @method     ChildSpySalesOrderConfiguredBundleItem|null findOneByUpdatedAt(string $updated_at) Return the first ChildSpySalesOrderConfiguredBundleItem filtered by the updated_at column *

 * @method     ChildSpySalesOrderConfiguredBundleItem requirePk($key, ConnectionInterface $con = null) Return the ChildSpySalesOrderConfiguredBundleItem by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesOrderConfiguredBundleItem requireOne(ConnectionInterface $con = null) Return the first ChildSpySalesOrderConfiguredBundleItem matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpySalesOrderConfiguredBundleItem requireOneByIdSalesOrderConfiguredBundleItem(int $id_sales_order_configured_bundle_item) Return the first ChildSpySalesOrderConfiguredBundleItem filtered by the id_sales_order_configured_bundle_item column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesOrderConfiguredBundleItem requireOneByFkSalesOrderConfiguredBundle(int $fk_sales_order_configured_bundle) Return the first ChildSpySalesOrderConfiguredBundleItem filtered by the fk_sales_order_configured_bundle column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesOrderConfiguredBundleItem requireOneByFkSalesOrderItem(int $fk_sales_order_item) Return the first ChildSpySalesOrderConfiguredBundleItem filtered by the fk_sales_order_item column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesOrderConfiguredBundleItem requireOneByConfigurableBundleTemplateSlotUuid(string $configurable_bundle_template_slot_uuid) Return the first ChildSpySalesOrderConfiguredBundleItem filtered by the configurable_bundle_template_slot_uuid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesOrderConfiguredBundleItem requireOneByCreatedAt(string $created_at) Return the first ChildSpySalesOrderConfiguredBundleItem filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesOrderConfiguredBundleItem requireOneByUpdatedAt(string $updated_at) Return the first ChildSpySalesOrderConfiguredBundleItem filtered by the updated_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpySalesOrderConfiguredBundleItem[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpySalesOrderConfiguredBundleItem objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpySalesOrderConfiguredBundleItem> find(ConnectionInterface $con = null) Return ChildSpySalesOrderConfiguredBundleItem objects based on current ModelCriteria
 * @method     ChildSpySalesOrderConfiguredBundleItem[]|ObjectCollection findByIdSalesOrderConfiguredBundleItem(int $id_sales_order_configured_bundle_item) Return ChildSpySalesOrderConfiguredBundleItem objects filtered by the id_sales_order_configured_bundle_item column
 * @psalm-method ObjectCollection&\Traversable<ChildSpySalesOrderConfiguredBundleItem> findByIdSalesOrderConfiguredBundleItem(int $id_sales_order_configured_bundle_item) Return ChildSpySalesOrderConfiguredBundleItem objects filtered by the id_sales_order_configured_bundle_item column
 * @method     ChildSpySalesOrderConfiguredBundleItem[]|ObjectCollection findByFkSalesOrderConfiguredBundle(int $fk_sales_order_configured_bundle) Return ChildSpySalesOrderConfiguredBundleItem objects filtered by the fk_sales_order_configured_bundle column
 * @psalm-method ObjectCollection&\Traversable<ChildSpySalesOrderConfiguredBundleItem> findByFkSalesOrderConfiguredBundle(int $fk_sales_order_configured_bundle) Return ChildSpySalesOrderConfiguredBundleItem objects filtered by the fk_sales_order_configured_bundle column
 * @method     ChildSpySalesOrderConfiguredBundleItem[]|ObjectCollection findByFkSalesOrderItem(int $fk_sales_order_item) Return ChildSpySalesOrderConfiguredBundleItem objects filtered by the fk_sales_order_item column
 * @psalm-method ObjectCollection&\Traversable<ChildSpySalesOrderConfiguredBundleItem> findByFkSalesOrderItem(int $fk_sales_order_item) Return ChildSpySalesOrderConfiguredBundleItem objects filtered by the fk_sales_order_item column
 * @method     ChildSpySalesOrderConfiguredBundleItem[]|ObjectCollection findByConfigurableBundleTemplateSlotUuid(string $configurable_bundle_template_slot_uuid) Return ChildSpySalesOrderConfiguredBundleItem objects filtered by the configurable_bundle_template_slot_uuid column
 * @psalm-method ObjectCollection&\Traversable<ChildSpySalesOrderConfiguredBundleItem> findByConfigurableBundleTemplateSlotUuid(string $configurable_bundle_template_slot_uuid) Return ChildSpySalesOrderConfiguredBundleItem objects filtered by the configurable_bundle_template_slot_uuid column
 * @method     ChildSpySalesOrderConfiguredBundleItem[]|ObjectCollection findByCreatedAt(string $created_at) Return ChildSpySalesOrderConfiguredBundleItem objects filtered by the created_at column
 * @psalm-method ObjectCollection&\Traversable<ChildSpySalesOrderConfiguredBundleItem> findByCreatedAt(string $created_at) Return ChildSpySalesOrderConfiguredBundleItem objects filtered by the created_at column
 * @method     ChildSpySalesOrderConfiguredBundleItem[]|ObjectCollection findByUpdatedAt(string $updated_at) Return ChildSpySalesOrderConfiguredBundleItem objects filtered by the updated_at column
 * @psalm-method ObjectCollection&\Traversable<ChildSpySalesOrderConfiguredBundleItem> findByUpdatedAt(string $updated_at) Return ChildSpySalesOrderConfiguredBundleItem objects filtered by the updated_at column
 * @method     ChildSpySalesOrderConfiguredBundleItem[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpySalesOrderConfiguredBundleItem> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpySalesOrderConfiguredBundleItemQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\SalesConfigurableBundle\Persistence\Base\SpySalesOrderConfiguredBundleItemQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\SalesConfigurableBundle\\Persistence\\SpySalesOrderConfiguredBundleItem', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpySalesOrderConfiguredBundleItemQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpySalesOrderConfiguredBundleItemQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpySalesOrderConfiguredBundleItemQuery) {
            return $criteria;
        }
        $query = new ChildSpySalesOrderConfiguredBundleItemQuery();
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
     * @return ChildSpySalesOrderConfiguredBundleItem|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpySalesOrderConfiguredBundleItemTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpySalesOrderConfiguredBundleItem A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_sales_order_configured_bundle_item, fk_sales_order_configured_bundle, fk_sales_order_item, configurable_bundle_template_slot_uuid, created_at, updated_at FROM spy_sales_order_configured_bundle_item WHERE id_sales_order_configured_bundle_item = :p0';
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
            /** @var ChildSpySalesOrderConfiguredBundleItem $obj */
            $obj = new ChildSpySalesOrderConfiguredBundleItem();
            $obj->hydrate($row);
            SpySalesOrderConfiguredBundleItemTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpySalesOrderConfiguredBundleItem|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpySalesOrderConfiguredBundleItemQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpySalesOrderConfiguredBundleItemTableMap::COL_ID_SALES_ORDER_CONFIGURED_BUNDLE_ITEM, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpySalesOrderConfiguredBundleItemQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpySalesOrderConfiguredBundleItemTableMap::COL_ID_SALES_ORDER_CONFIGURED_BUNDLE_ITEM, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idSalesOrderConfiguredBundleItem Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdSalesOrderConfiguredBundleItem_Between(array $idSalesOrderConfiguredBundleItem)
    {
        return $this->filterByIdSalesOrderConfiguredBundleItem($idSalesOrderConfiguredBundleItem, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idSalesOrderConfiguredBundleItems Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdSalesOrderConfiguredBundleItem_In(array $idSalesOrderConfiguredBundleItems)
    {
        return $this->filterByIdSalesOrderConfiguredBundleItem($idSalesOrderConfiguredBundleItems, Criteria::IN);
    }

    /**
     * Filter the query on the id_sales_order_configured_bundle_item column
     *
     * Example usage:
     * <code>
     * $query->filterByIdSalesOrderConfiguredBundleItem(1234); // WHERE id_sales_order_configured_bundle_item = 1234
     * $query->filterByIdSalesOrderConfiguredBundleItem(array(12, 34), Criteria::IN); // WHERE id_sales_order_configured_bundle_item IN (12, 34)
     * $query->filterByIdSalesOrderConfiguredBundleItem(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_sales_order_configured_bundle_item > 12
     * </code>
     *
     * @param     mixed $idSalesOrderConfiguredBundleItem The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdSalesOrderConfiguredBundleItem($idSalesOrderConfiguredBundleItem = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idSalesOrderConfiguredBundleItem)) {
            $useMinMax = false;
            if (isset($idSalesOrderConfiguredBundleItem['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderConfiguredBundleItemTableMap::COL_ID_SALES_ORDER_CONFIGURED_BUNDLE_ITEM, $idSalesOrderConfiguredBundleItem['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idSalesOrderConfiguredBundleItem['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderConfiguredBundleItemTableMap::COL_ID_SALES_ORDER_CONFIGURED_BUNDLE_ITEM, $idSalesOrderConfiguredBundleItem['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idSalesOrderConfiguredBundleItem of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpySalesOrderConfiguredBundleItemTableMap::COL_ID_SALES_ORDER_CONFIGURED_BUNDLE_ITEM, $idSalesOrderConfiguredBundleItem, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkSalesOrderConfiguredBundle Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkSalesOrderConfiguredBundle_Between(array $fkSalesOrderConfiguredBundle)
    {
        return $this->filterByFkSalesOrderConfiguredBundle($fkSalesOrderConfiguredBundle, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkSalesOrderConfiguredBundles Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkSalesOrderConfiguredBundle_In(array $fkSalesOrderConfiguredBundles)
    {
        return $this->filterByFkSalesOrderConfiguredBundle($fkSalesOrderConfiguredBundles, Criteria::IN);
    }

    /**
     * Filter the query on the fk_sales_order_configured_bundle column
     *
     * Example usage:
     * <code>
     * $query->filterByFkSalesOrderConfiguredBundle(1234); // WHERE fk_sales_order_configured_bundle = 1234
     * $query->filterByFkSalesOrderConfiguredBundle(array(12, 34), Criteria::IN); // WHERE fk_sales_order_configured_bundle IN (12, 34)
     * $query->filterByFkSalesOrderConfiguredBundle(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_sales_order_configured_bundle > 12
     * </code>
     *
     * @see       filterBySpySalesOrderConfiguredBundle()
     *
     * @param     mixed $fkSalesOrderConfiguredBundle The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkSalesOrderConfiguredBundle($fkSalesOrderConfiguredBundle = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkSalesOrderConfiguredBundle)) {
            $useMinMax = false;
            if (isset($fkSalesOrderConfiguredBundle['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderConfiguredBundleItemTableMap::COL_FK_SALES_ORDER_CONFIGURED_BUNDLE, $fkSalesOrderConfiguredBundle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkSalesOrderConfiguredBundle['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderConfiguredBundleItemTableMap::COL_FK_SALES_ORDER_CONFIGURED_BUNDLE, $fkSalesOrderConfiguredBundle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkSalesOrderConfiguredBundle of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpySalesOrderConfiguredBundleItemTableMap::COL_FK_SALES_ORDER_CONFIGURED_BUNDLE, $fkSalesOrderConfiguredBundle, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkSalesOrderItem Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkSalesOrderItem_Between(array $fkSalesOrderItem)
    {
        return $this->filterByFkSalesOrderItem($fkSalesOrderItem, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkSalesOrderItems Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkSalesOrderItem_In(array $fkSalesOrderItems)
    {
        return $this->filterByFkSalesOrderItem($fkSalesOrderItems, Criteria::IN);
    }

    /**
     * Filter the query on the fk_sales_order_item column
     *
     * Example usage:
     * <code>
     * $query->filterByFkSalesOrderItem(1234); // WHERE fk_sales_order_item = 1234
     * $query->filterByFkSalesOrderItem(array(12, 34), Criteria::IN); // WHERE fk_sales_order_item IN (12, 34)
     * $query->filterByFkSalesOrderItem(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_sales_order_item > 12
     * </code>
     *
     * @see       filterBySpySalesOrderItem()
     *
     * @param     mixed $fkSalesOrderItem The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkSalesOrderItem($fkSalesOrderItem = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkSalesOrderItem)) {
            $useMinMax = false;
            if (isset($fkSalesOrderItem['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderConfiguredBundleItemTableMap::COL_FK_SALES_ORDER_ITEM, $fkSalesOrderItem['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkSalesOrderItem['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderConfiguredBundleItemTableMap::COL_FK_SALES_ORDER_ITEM, $fkSalesOrderItem['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkSalesOrderItem of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpySalesOrderConfiguredBundleItemTableMap::COL_FK_SALES_ORDER_ITEM, $fkSalesOrderItem, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $configurableBundleTemplateSlotUuids Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByConfigurableBundleTemplateSlotUuid_In(array $configurableBundleTemplateSlotUuids)
    {
        return $this->filterByConfigurableBundleTemplateSlotUuid($configurableBundleTemplateSlotUuids, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $configurableBundleTemplateSlotUuid Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByConfigurableBundleTemplateSlotUuid_Like($configurableBundleTemplateSlotUuid)
    {
        return $this->filterByConfigurableBundleTemplateSlotUuid($configurableBundleTemplateSlotUuid, Criteria::LIKE);
    }

    /**
     * Filter the query on the configurable_bundle_template_slot_uuid column
     *
     * Example usage:
     * <code>
     * $query->filterByConfigurableBundleTemplateSlotUuid('fooValue');   // WHERE configurable_bundle_template_slot_uuid = 'fooValue'
     * $query->filterByConfigurableBundleTemplateSlotUuid('%fooValue%', Criteria::LIKE); // WHERE configurable_bundle_template_slot_uuid LIKE '%fooValue%'
     * $query->filterByConfigurableBundleTemplateSlotUuid([1, 'foo'], Criteria::IN); // WHERE configurable_bundle_template_slot_uuid IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $configurableBundleTemplateSlotUuid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByConfigurableBundleTemplateSlotUuid($configurableBundleTemplateSlotUuid = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $configurableBundleTemplateSlotUuid = str_replace('*', '%', $configurableBundleTemplateSlotUuid);
        }

        if (is_array($configurableBundleTemplateSlotUuid) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$configurableBundleTemplateSlotUuid of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpySalesOrderConfiguredBundleItemTableMap::COL_CONFIGURABLE_BUNDLE_TEMPLATE_SLOT_UUID, $configurableBundleTemplateSlotUuid, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $createdAt Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCreatedAt_Between(array $createdAt)
    {
        return $this->filterByCreatedAt($createdAt, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $createdAts Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCreatedAt_In(array $createdAts)
    {
        return $this->filterByCreatedAt($createdAts, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $createdAt Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCreatedAt_Like($createdAt)
    {
        return $this->filterByCreatedAt($createdAt, Criteria::LIKE);
    }

    /**
     * Filter the query on the created_at column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedAt('2011-03-14'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt('now'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt(array('max' => 'yesterday'), SprykerCriteria::BETWEEN); // WHERE created_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $createdAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByCreatedAt($createdAt = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderConfiguredBundleItemTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderConfiguredBundleItemTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$createdAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpySalesOrderConfiguredBundleItemTableMap::COL_CREATED_AT, $createdAt, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $updatedAt Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByUpdatedAt_Between(array $updatedAt)
    {
        return $this->filterByUpdatedAt($updatedAt, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $updatedAts Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByUpdatedAt_In(array $updatedAts)
    {
        return $this->filterByUpdatedAt($updatedAts, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $updatedAt Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByUpdatedAt_Like($updatedAt)
    {
        return $this->filterByUpdatedAt($updatedAt, Criteria::LIKE);
    }

    /**
     * Filter the query on the updated_at column
     *
     * Example usage:
     * <code>
     * $query->filterByUpdatedAt('2011-03-14'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt('now'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt(array('max' => 'yesterday'), SprykerCriteria::BETWEEN); // WHERE updated_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $updatedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderConfiguredBundleItemTableMap::COL_UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderConfiguredBundleItemTableMap::COL_UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$updatedAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpySalesOrderConfiguredBundleItemTableMap::COL_UPDATED_AT, $updatedAt, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\SalesConfigurableBundle\Persistence\SpySalesOrderConfiguredBundle object
     *
     * @param \Orm\Zed\SalesConfigurableBundle\Persistence\SpySalesOrderConfiguredBundle|ObjectCollection $spySalesOrderConfiguredBundle The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpySalesOrderConfiguredBundleItemQuery The current query, for fluid interface
     */
    public function filterBySpySalesOrderConfiguredBundle($spySalesOrderConfiguredBundle, $comparison = null)
    {
        if ($spySalesOrderConfiguredBundle instanceof \Orm\Zed\SalesConfigurableBundle\Persistence\SpySalesOrderConfiguredBundle) {
            return $this
                ->addUsingAlias(SpySalesOrderConfiguredBundleItemTableMap::COL_FK_SALES_ORDER_CONFIGURED_BUNDLE, $spySalesOrderConfiguredBundle->getIdSalesOrderConfiguredBundle(), $comparison);
        } elseif ($spySalesOrderConfiguredBundle instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpySalesOrderConfiguredBundleItemTableMap::COL_FK_SALES_ORDER_CONFIGURED_BUNDLE, $spySalesOrderConfiguredBundle->toKeyValue('PrimaryKey', 'IdSalesOrderConfiguredBundle'), $comparison);
        } else {
            throw new PropelException('filterBySpySalesOrderConfiguredBundle() only accepts arguments of type \Orm\Zed\SalesConfigurableBundle\Persistence\SpySalesOrderConfiguredBundle or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpySalesOrderConfiguredBundle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpySalesOrderConfiguredBundleItemQuery The current query, for fluid interface
     */
    public function joinSpySalesOrderConfiguredBundle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpySalesOrderConfiguredBundle');

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
            $this->addJoinObject($join, 'SpySalesOrderConfiguredBundle');
        }

        return $this;
    }

    /**
     * Use the SpySalesOrderConfiguredBundle relation SpySalesOrderConfiguredBundle object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\SalesConfigurableBundle\Persistence\SpySalesOrderConfiguredBundleQuery A secondary query class using the current class as primary query
     */
    public function useSpySalesOrderConfiguredBundleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpySalesOrderConfiguredBundle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpySalesOrderConfiguredBundle', '\Orm\Zed\SalesConfigurableBundle\Persistence\SpySalesOrderConfiguredBundleQuery');
    }

    /**
     * Use the SpySalesOrderConfiguredBundle relation SpySalesOrderConfiguredBundle object
     *
     * @param callable(\Orm\Zed\SalesConfigurableBundle\Persistence\SpySalesOrderConfiguredBundleQuery):\Orm\Zed\SalesConfigurableBundle\Persistence\SpySalesOrderConfiguredBundleQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpySalesOrderConfiguredBundleQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpySalesOrderConfiguredBundleQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpySalesOrderConfiguredBundle table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\SalesConfigurableBundle\Persistence\SpySalesOrderConfiguredBundleQuery The inner query object of the EXISTS statement
     */
    public function useSpySalesOrderConfiguredBundleExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpySalesOrderConfiguredBundle', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpySalesOrderConfiguredBundle table for a NOT EXISTS query.
     *
     * @see useSpySalesOrderConfiguredBundleExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\SalesConfigurableBundle\Persistence\SpySalesOrderConfiguredBundleQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpySalesOrderConfiguredBundleNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpySalesOrderConfiguredBundle', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Sales\Persistence\SpySalesOrderItem object
     *
     * @param \Orm\Zed\Sales\Persistence\SpySalesOrderItem|ObjectCollection $spySalesOrderItem The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpySalesOrderConfiguredBundleItemQuery The current query, for fluid interface
     */
    public function filterBySpySalesOrderItem($spySalesOrderItem, $comparison = null)
    {
        if ($spySalesOrderItem instanceof \Orm\Zed\Sales\Persistence\SpySalesOrderItem) {
            return $this
                ->addUsingAlias(SpySalesOrderConfiguredBundleItemTableMap::COL_FK_SALES_ORDER_ITEM, $spySalesOrderItem->getIdSalesOrderItem(), $comparison);
        } elseif ($spySalesOrderItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpySalesOrderConfiguredBundleItemTableMap::COL_FK_SALES_ORDER_ITEM, $spySalesOrderItem->toKeyValue('PrimaryKey', 'IdSalesOrderItem'), $comparison);
        } else {
            throw new PropelException('filterBySpySalesOrderItem() only accepts arguments of type \Orm\Zed\Sales\Persistence\SpySalesOrderItem or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpySalesOrderItem relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpySalesOrderConfiguredBundleItemQuery The current query, for fluid interface
     */
    public function joinSpySalesOrderItem($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpySalesOrderItem');

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
            $this->addJoinObject($join, 'SpySalesOrderItem');
        }

        return $this;
    }

    /**
     * Use the SpySalesOrderItem relation SpySalesOrderItem object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Sales\Persistence\SpySalesOrderItemQuery A secondary query class using the current class as primary query
     */
    public function useSpySalesOrderItemQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpySalesOrderItem($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpySalesOrderItem', '\Orm\Zed\Sales\Persistence\SpySalesOrderItemQuery');
    }

    /**
     * Use the SpySalesOrderItem relation SpySalesOrderItem object
     *
     * @param callable(\Orm\Zed\Sales\Persistence\SpySalesOrderItemQuery):\Orm\Zed\Sales\Persistence\SpySalesOrderItemQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpySalesOrderItemQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpySalesOrderItemQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpySalesOrderItem table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Sales\Persistence\SpySalesOrderItemQuery The inner query object of the EXISTS statement
     */
    public function useSpySalesOrderItemExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpySalesOrderItem', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpySalesOrderItem table for a NOT EXISTS query.
     *
     * @see useSpySalesOrderItemExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Sales\Persistence\SpySalesOrderItemQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpySalesOrderItemNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpySalesOrderItem', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Exclude object from result
     *
     * @param   ChildSpySalesOrderConfiguredBundleItem $spySalesOrderConfiguredBundleItem Object to remove from the list of results
     *
     * @return $this|ChildSpySalesOrderConfiguredBundleItemQuery The current query, for fluid interface
     */
    public function prune($spySalesOrderConfiguredBundleItem = null)
    {
        if ($spySalesOrderConfiguredBundleItem) {
            $this->addUsingAlias(SpySalesOrderConfiguredBundleItemTableMap::COL_ID_SALES_ORDER_CONFIGURED_BUNDLE_ITEM, $spySalesOrderConfiguredBundleItem->getIdSalesOrderConfiguredBundleItem(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_sales_order_configured_bundle_item table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpySalesOrderConfiguredBundleItemTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpySalesOrderConfiguredBundleItemTableMap::clearInstancePool();
            SpySalesOrderConfiguredBundleItemTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpySalesOrderConfiguredBundleItemTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpySalesOrderConfiguredBundleItemTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpySalesOrderConfiguredBundleItemTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpySalesOrderConfiguredBundleItemTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    // timestampable behavior

    /**
     * Filter by the latest updated
     *
     * @param      int $nbDays Maximum age of the latest update in days
     *
     * @return     $this|ChildSpySalesOrderConfiguredBundleItemQuery The current query, for fluid interface
     */
    public function recentlyUpdated($nbDays = 7)
    {
        return $this->addUsingAlias(SpySalesOrderConfiguredBundleItemTableMap::COL_UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by update date desc
     *
     * @return     $this|ChildSpySalesOrderConfiguredBundleItemQuery The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        return $this->addDescendingOrderByColumn(SpySalesOrderConfiguredBundleItemTableMap::COL_UPDATED_AT);
    }

    /**
     * Order by update date asc
     *
     * @return     $this|ChildSpySalesOrderConfiguredBundleItemQuery The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        return $this->addAscendingOrderByColumn(SpySalesOrderConfiguredBundleItemTableMap::COL_UPDATED_AT);
    }

    /**
     * Order by create date desc
     *
     * @return     $this|ChildSpySalesOrderConfiguredBundleItemQuery The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        return $this->addDescendingOrderByColumn(SpySalesOrderConfiguredBundleItemTableMap::COL_CREATED_AT);
    }

    /**
     * Filter by the latest created
     *
     * @param      int $nbDays Maximum age of in days
     *
     * @return     $this|ChildSpySalesOrderConfiguredBundleItemQuery The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        return $this->addUsingAlias(SpySalesOrderConfiguredBundleItemTableMap::COL_CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by create date asc
     *
     * @return     $this|ChildSpySalesOrderConfiguredBundleItemQuery The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        return $this->addAscendingOrderByColumn(SpySalesOrderConfiguredBundleItemTableMap::COL_CREATED_AT);
    }

} // SpySalesOrderConfiguredBundleItemQuery
