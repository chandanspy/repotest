<?php

namespace Orm\Zed\Oms\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\Oms\Persistence\SpyOmsOrderItemStateHistory as ChildSpyOmsOrderItemStateHistory;
use Orm\Zed\Oms\Persistence\SpyOmsOrderItemStateHistoryQuery as ChildSpyOmsOrderItemStateHistoryQuery;
use Orm\Zed\Oms\Persistence\Map\SpyOmsOrderItemStateHistoryTableMap;
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
 * Base class that represents a query for the 'spy_oms_order_item_state_history' table.
 *
 *
 *
 * @method     ChildSpyOmsOrderItemStateHistoryQuery orderByIdOmsOrderItemStateHistory($order = Criteria::ASC) Order by the id_oms_order_item_state_history column
 * @method     ChildSpyOmsOrderItemStateHistoryQuery orderByFkOmsOrderItemState($order = Criteria::ASC) Order by the fk_oms_order_item_state column
 * @method     ChildSpyOmsOrderItemStateHistoryQuery orderByFkSalesOrderItem($order = Criteria::ASC) Order by the fk_sales_order_item column
 * @method     ChildSpyOmsOrderItemStateHistoryQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method     ChildSpyOmsOrderItemStateHistoryQuery groupByIdOmsOrderItemStateHistory() Group by the id_oms_order_item_state_history column
 * @method     ChildSpyOmsOrderItemStateHistoryQuery groupByFkOmsOrderItemState() Group by the fk_oms_order_item_state column
 * @method     ChildSpyOmsOrderItemStateHistoryQuery groupByFkSalesOrderItem() Group by the fk_sales_order_item column
 * @method     ChildSpyOmsOrderItemStateHistoryQuery groupByCreatedAt() Group by the created_at column
 *
 * @method     ChildSpyOmsOrderItemStateHistoryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyOmsOrderItemStateHistoryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyOmsOrderItemStateHistoryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyOmsOrderItemStateHistoryQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyOmsOrderItemStateHistoryQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyOmsOrderItemStateHistoryQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyOmsOrderItemStateHistoryQuery leftJoinOrderItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the OrderItem relation
 * @method     ChildSpyOmsOrderItemStateHistoryQuery rightJoinOrderItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OrderItem relation
 * @method     ChildSpyOmsOrderItemStateHistoryQuery innerJoinOrderItem($relationAlias = null) Adds a INNER JOIN clause to the query using the OrderItem relation
 *
 * @method     ChildSpyOmsOrderItemStateHistoryQuery joinWithOrderItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the OrderItem relation
 *
 * @method     ChildSpyOmsOrderItemStateHistoryQuery leftJoinWithOrderItem() Adds a LEFT JOIN clause and with to the query using the OrderItem relation
 * @method     ChildSpyOmsOrderItemStateHistoryQuery rightJoinWithOrderItem() Adds a RIGHT JOIN clause and with to the query using the OrderItem relation
 * @method     ChildSpyOmsOrderItemStateHistoryQuery innerJoinWithOrderItem() Adds a INNER JOIN clause and with to the query using the OrderItem relation
 *
 * @method     ChildSpyOmsOrderItemStateHistoryQuery leftJoinState($relationAlias = null) Adds a LEFT JOIN clause to the query using the State relation
 * @method     ChildSpyOmsOrderItemStateHistoryQuery rightJoinState($relationAlias = null) Adds a RIGHT JOIN clause to the query using the State relation
 * @method     ChildSpyOmsOrderItemStateHistoryQuery innerJoinState($relationAlias = null) Adds a INNER JOIN clause to the query using the State relation
 *
 * @method     ChildSpyOmsOrderItemStateHistoryQuery joinWithState($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the State relation
 *
 * @method     ChildSpyOmsOrderItemStateHistoryQuery leftJoinWithState() Adds a LEFT JOIN clause and with to the query using the State relation
 * @method     ChildSpyOmsOrderItemStateHistoryQuery rightJoinWithState() Adds a RIGHT JOIN clause and with to the query using the State relation
 * @method     ChildSpyOmsOrderItemStateHistoryQuery innerJoinWithState() Adds a INNER JOIN clause and with to the query using the State relation
 *
 * @method     \Orm\Zed\Sales\Persistence\SpySalesOrderItemQuery|\Orm\Zed\Oms\Persistence\SpyOmsOrderItemStateQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyOmsOrderItemStateHistory|null findOne(ConnectionInterface $con = null) Return the first ChildSpyOmsOrderItemStateHistory matching the query
 * @method     ChildSpyOmsOrderItemStateHistory findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyOmsOrderItemStateHistory matching the query, or a new ChildSpyOmsOrderItemStateHistory object populated from the query conditions when no match is found
 *
 * @method     ChildSpyOmsOrderItemStateHistory|null findOneByIdOmsOrderItemStateHistory(int $id_oms_order_item_state_history) Return the first ChildSpyOmsOrderItemStateHistory filtered by the id_oms_order_item_state_history column
 * @method     ChildSpyOmsOrderItemStateHistory|null findOneByFkOmsOrderItemState(int $fk_oms_order_item_state) Return the first ChildSpyOmsOrderItemStateHistory filtered by the fk_oms_order_item_state column
 * @method     ChildSpyOmsOrderItemStateHistory|null findOneByFkSalesOrderItem(int $fk_sales_order_item) Return the first ChildSpyOmsOrderItemStateHistory filtered by the fk_sales_order_item column
 * @method     ChildSpyOmsOrderItemStateHistory|null findOneByCreatedAt(string $created_at) Return the first ChildSpyOmsOrderItemStateHistory filtered by the created_at column *

 * @method     ChildSpyOmsOrderItemStateHistory requirePk($key, ConnectionInterface $con = null) Return the ChildSpyOmsOrderItemStateHistory by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyOmsOrderItemStateHistory requireOne(ConnectionInterface $con = null) Return the first ChildSpyOmsOrderItemStateHistory matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyOmsOrderItemStateHistory requireOneByIdOmsOrderItemStateHistory(int $id_oms_order_item_state_history) Return the first ChildSpyOmsOrderItemStateHistory filtered by the id_oms_order_item_state_history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyOmsOrderItemStateHistory requireOneByFkOmsOrderItemState(int $fk_oms_order_item_state) Return the first ChildSpyOmsOrderItemStateHistory filtered by the fk_oms_order_item_state column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyOmsOrderItemStateHistory requireOneByFkSalesOrderItem(int $fk_sales_order_item) Return the first ChildSpyOmsOrderItemStateHistory filtered by the fk_sales_order_item column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyOmsOrderItemStateHistory requireOneByCreatedAt(string $created_at) Return the first ChildSpyOmsOrderItemStateHistory filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyOmsOrderItemStateHistory[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyOmsOrderItemStateHistory objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyOmsOrderItemStateHistory> find(ConnectionInterface $con = null) Return ChildSpyOmsOrderItemStateHistory objects based on current ModelCriteria
 * @method     ChildSpyOmsOrderItemStateHistory[]|ObjectCollection findByIdOmsOrderItemStateHistory(int $id_oms_order_item_state_history) Return ChildSpyOmsOrderItemStateHistory objects filtered by the id_oms_order_item_state_history column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyOmsOrderItemStateHistory> findByIdOmsOrderItemStateHistory(int $id_oms_order_item_state_history) Return ChildSpyOmsOrderItemStateHistory objects filtered by the id_oms_order_item_state_history column
 * @method     ChildSpyOmsOrderItemStateHistory[]|ObjectCollection findByFkOmsOrderItemState(int $fk_oms_order_item_state) Return ChildSpyOmsOrderItemStateHistory objects filtered by the fk_oms_order_item_state column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyOmsOrderItemStateHistory> findByFkOmsOrderItemState(int $fk_oms_order_item_state) Return ChildSpyOmsOrderItemStateHistory objects filtered by the fk_oms_order_item_state column
 * @method     ChildSpyOmsOrderItemStateHistory[]|ObjectCollection findByFkSalesOrderItem(int $fk_sales_order_item) Return ChildSpyOmsOrderItemStateHistory objects filtered by the fk_sales_order_item column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyOmsOrderItemStateHistory> findByFkSalesOrderItem(int $fk_sales_order_item) Return ChildSpyOmsOrderItemStateHistory objects filtered by the fk_sales_order_item column
 * @method     ChildSpyOmsOrderItemStateHistory[]|ObjectCollection findByCreatedAt(string $created_at) Return ChildSpyOmsOrderItemStateHistory objects filtered by the created_at column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyOmsOrderItemStateHistory> findByCreatedAt(string $created_at) Return ChildSpyOmsOrderItemStateHistory objects filtered by the created_at column
 * @method     ChildSpyOmsOrderItemStateHistory[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyOmsOrderItemStateHistory> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyOmsOrderItemStateHistoryQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\Oms\Persistence\Base\SpyOmsOrderItemStateHistoryQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\Oms\\Persistence\\SpyOmsOrderItemStateHistory', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyOmsOrderItemStateHistoryQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyOmsOrderItemStateHistoryQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyOmsOrderItemStateHistoryQuery) {
            return $criteria;
        }
        $query = new ChildSpyOmsOrderItemStateHistoryQuery();
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
     * @return ChildSpyOmsOrderItemStateHistory|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyOmsOrderItemStateHistoryTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyOmsOrderItemStateHistory A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT `id_oms_order_item_state_history`, `fk_oms_order_item_state`, `fk_sales_order_item`, `created_at` FROM `spy_oms_order_item_state_history` WHERE `id_oms_order_item_state_history` = :p0';
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
            /** @var ChildSpyOmsOrderItemStateHistory $obj */
            $obj = new ChildSpyOmsOrderItemStateHistory();
            $obj->hydrate($row);
            SpyOmsOrderItemStateHistoryTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyOmsOrderItemStateHistory|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyOmsOrderItemStateHistoryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyOmsOrderItemStateHistoryTableMap::COL_ID_OMS_ORDER_ITEM_STATE_HISTORY, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyOmsOrderItemStateHistoryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyOmsOrderItemStateHistoryTableMap::COL_ID_OMS_ORDER_ITEM_STATE_HISTORY, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idOmsOrderItemStateHistory Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdOmsOrderItemStateHistory_Between(array $idOmsOrderItemStateHistory)
    {
        return $this->filterByIdOmsOrderItemStateHistory($idOmsOrderItemStateHistory, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idOmsOrderItemStateHistorys Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdOmsOrderItemStateHistory_In(array $idOmsOrderItemStateHistorys)
    {
        return $this->filterByIdOmsOrderItemStateHistory($idOmsOrderItemStateHistorys, Criteria::IN);
    }

    /**
     * Filter the query on the id_oms_order_item_state_history column
     *
     * Example usage:
     * <code>
     * $query->filterByIdOmsOrderItemStateHistory(1234); // WHERE id_oms_order_item_state_history = 1234
     * $query->filterByIdOmsOrderItemStateHistory(array(12, 34), Criteria::IN); // WHERE id_oms_order_item_state_history IN (12, 34)
     * $query->filterByIdOmsOrderItemStateHistory(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_oms_order_item_state_history > 12
     * </code>
     *
     * @param     mixed $idOmsOrderItemStateHistory The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdOmsOrderItemStateHistory($idOmsOrderItemStateHistory = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idOmsOrderItemStateHistory)) {
            $useMinMax = false;
            if (isset($idOmsOrderItemStateHistory['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyOmsOrderItemStateHistoryTableMap::COL_ID_OMS_ORDER_ITEM_STATE_HISTORY, $idOmsOrderItemStateHistory['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idOmsOrderItemStateHistory['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyOmsOrderItemStateHistoryTableMap::COL_ID_OMS_ORDER_ITEM_STATE_HISTORY, $idOmsOrderItemStateHistory['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idOmsOrderItemStateHistory of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyOmsOrderItemStateHistoryTableMap::COL_ID_OMS_ORDER_ITEM_STATE_HISTORY, $idOmsOrderItemStateHistory, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkOmsOrderItemState Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkOmsOrderItemState_Between(array $fkOmsOrderItemState)
    {
        return $this->filterByFkOmsOrderItemState($fkOmsOrderItemState, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkOmsOrderItemStates Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkOmsOrderItemState_In(array $fkOmsOrderItemStates)
    {
        return $this->filterByFkOmsOrderItemState($fkOmsOrderItemStates, Criteria::IN);
    }

    /**
     * Filter the query on the fk_oms_order_item_state column
     *
     * Example usage:
     * <code>
     * $query->filterByFkOmsOrderItemState(1234); // WHERE fk_oms_order_item_state = 1234
     * $query->filterByFkOmsOrderItemState(array(12, 34), Criteria::IN); // WHERE fk_oms_order_item_state IN (12, 34)
     * $query->filterByFkOmsOrderItemState(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_oms_order_item_state > 12
     * </code>
     *
     * @see       filterByState()
     *
     * @param     mixed $fkOmsOrderItemState The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkOmsOrderItemState($fkOmsOrderItemState = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkOmsOrderItemState)) {
            $useMinMax = false;
            if (isset($fkOmsOrderItemState['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyOmsOrderItemStateHistoryTableMap::COL_FK_OMS_ORDER_ITEM_STATE, $fkOmsOrderItemState['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkOmsOrderItemState['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyOmsOrderItemStateHistoryTableMap::COL_FK_OMS_ORDER_ITEM_STATE, $fkOmsOrderItemState['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkOmsOrderItemState of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyOmsOrderItemStateHistoryTableMap::COL_FK_OMS_ORDER_ITEM_STATE, $fkOmsOrderItemState, $comparison);

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
     * @see       filterByOrderItem()
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
                $this->addUsingAlias(SpyOmsOrderItemStateHistoryTableMap::COL_FK_SALES_ORDER_ITEM, $fkSalesOrderItem['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkSalesOrderItem['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyOmsOrderItemStateHistoryTableMap::COL_FK_SALES_ORDER_ITEM, $fkSalesOrderItem['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkSalesOrderItem of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyOmsOrderItemStateHistoryTableMap::COL_FK_SALES_ORDER_ITEM, $fkSalesOrderItem, $comparison);

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
                $this->addUsingAlias(SpyOmsOrderItemStateHistoryTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyOmsOrderItemStateHistoryTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$createdAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyOmsOrderItemStateHistoryTableMap::COL_CREATED_AT, $createdAt, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\Sales\Persistence\SpySalesOrderItem object
     *
     * @param \Orm\Zed\Sales\Persistence\SpySalesOrderItem|ObjectCollection $spySalesOrderItem The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyOmsOrderItemStateHistoryQuery The current query, for fluid interface
     */
    public function filterByOrderItem($spySalesOrderItem, $comparison = null)
    {
        if ($spySalesOrderItem instanceof \Orm\Zed\Sales\Persistence\SpySalesOrderItem) {
            return $this
                ->addUsingAlias(SpyOmsOrderItemStateHistoryTableMap::COL_FK_SALES_ORDER_ITEM, $spySalesOrderItem->getIdSalesOrderItem(), $comparison);
        } elseif ($spySalesOrderItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyOmsOrderItemStateHistoryTableMap::COL_FK_SALES_ORDER_ITEM, $spySalesOrderItem->toKeyValue('PrimaryKey', 'IdSalesOrderItem'), $comparison);
        } else {
            throw new PropelException('filterByOrderItem() only accepts arguments of type \Orm\Zed\Sales\Persistence\SpySalesOrderItem or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OrderItem relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyOmsOrderItemStateHistoryQuery The current query, for fluid interface
     */
    public function joinOrderItem($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OrderItem');

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
            $this->addJoinObject($join, 'OrderItem');
        }

        return $this;
    }

    /**
     * Use the OrderItem relation SpySalesOrderItem object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Sales\Persistence\SpySalesOrderItemQuery A secondary query class using the current class as primary query
     */
    public function useOrderItemQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinOrderItem($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OrderItem', '\Orm\Zed\Sales\Persistence\SpySalesOrderItemQuery');
    }

    /**
     * Use the OrderItem relation SpySalesOrderItem object
     *
     * @param callable(\Orm\Zed\Sales\Persistence\SpySalesOrderItemQuery):\Orm\Zed\Sales\Persistence\SpySalesOrderItemQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withOrderItemQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useOrderItemQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the OrderItem relation to the SpySalesOrderItem table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Sales\Persistence\SpySalesOrderItemQuery The inner query object of the EXISTS statement
     */
    public function useOrderItemExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('OrderItem', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the OrderItem relation to the SpySalesOrderItem table for a NOT EXISTS query.
     *
     * @see useOrderItemExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Sales\Persistence\SpySalesOrderItemQuery The inner query object of the NOT EXISTS statement
     */
    public function useOrderItemNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('OrderItem', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Oms\Persistence\SpyOmsOrderItemState object
     *
     * @param \Orm\Zed\Oms\Persistence\SpyOmsOrderItemState|ObjectCollection $spyOmsOrderItemState The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyOmsOrderItemStateHistoryQuery The current query, for fluid interface
     */
    public function filterByState($spyOmsOrderItemState, $comparison = null)
    {
        if ($spyOmsOrderItemState instanceof \Orm\Zed\Oms\Persistence\SpyOmsOrderItemState) {
            return $this
                ->addUsingAlias(SpyOmsOrderItemStateHistoryTableMap::COL_FK_OMS_ORDER_ITEM_STATE, $spyOmsOrderItemState->getIdOmsOrderItemState(), $comparison);
        } elseif ($spyOmsOrderItemState instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyOmsOrderItemStateHistoryTableMap::COL_FK_OMS_ORDER_ITEM_STATE, $spyOmsOrderItemState->toKeyValue('PrimaryKey', 'IdOmsOrderItemState'), $comparison);
        } else {
            throw new PropelException('filterByState() only accepts arguments of type \Orm\Zed\Oms\Persistence\SpyOmsOrderItemState or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the State relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyOmsOrderItemStateHistoryQuery The current query, for fluid interface
     */
    public function joinState($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('State');

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
            $this->addJoinObject($join, 'State');
        }

        return $this;
    }

    /**
     * Use the State relation SpyOmsOrderItemState object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Oms\Persistence\SpyOmsOrderItemStateQuery A secondary query class using the current class as primary query
     */
    public function useStateQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinState($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'State', '\Orm\Zed\Oms\Persistence\SpyOmsOrderItemStateQuery');
    }

    /**
     * Use the State relation SpyOmsOrderItemState object
     *
     * @param callable(\Orm\Zed\Oms\Persistence\SpyOmsOrderItemStateQuery):\Orm\Zed\Oms\Persistence\SpyOmsOrderItemStateQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withStateQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useStateQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the State relation to the SpyOmsOrderItemState table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Oms\Persistence\SpyOmsOrderItemStateQuery The inner query object of the EXISTS statement
     */
    public function useStateExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('State', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the State relation to the SpyOmsOrderItemState table for a NOT EXISTS query.
     *
     * @see useStateExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Oms\Persistence\SpyOmsOrderItemStateQuery The inner query object of the NOT EXISTS statement
     */
    public function useStateNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('State', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Exclude object from result
     *
     * @param   ChildSpyOmsOrderItemStateHistory $spyOmsOrderItemStateHistory Object to remove from the list of results
     *
     * @return $this|ChildSpyOmsOrderItemStateHistoryQuery The current query, for fluid interface
     */
    public function prune($spyOmsOrderItemStateHistory = null)
    {
        if ($spyOmsOrderItemStateHistory) {
            $this->addUsingAlias(SpyOmsOrderItemStateHistoryTableMap::COL_ID_OMS_ORDER_ITEM_STATE_HISTORY, $spyOmsOrderItemStateHistory->getIdOmsOrderItemStateHistory(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_oms_order_item_state_history table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyOmsOrderItemStateHistoryTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyOmsOrderItemStateHistoryTableMap::clearInstancePool();
            SpyOmsOrderItemStateHistoryTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyOmsOrderItemStateHistoryTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyOmsOrderItemStateHistoryTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyOmsOrderItemStateHistoryTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyOmsOrderItemStateHistoryTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    // timestampable behavior

    /**
     * Order by create date desc
     *
     * @return     $this|ChildSpyOmsOrderItemStateHistoryQuery The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        return $this->addDescendingOrderByColumn(SpyOmsOrderItemStateHistoryTableMap::COL_CREATED_AT);
    }

    /**
     * Filter by the latest created
     *
     * @param      int $nbDays Maximum age of in days
     *
     * @return     $this|ChildSpyOmsOrderItemStateHistoryQuery The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        return $this->addUsingAlias(SpyOmsOrderItemStateHistoryTableMap::COL_CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by create date asc
     *
     * @return     $this|ChildSpyOmsOrderItemStateHistoryQuery The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        return $this->addAscendingOrderByColumn(SpyOmsOrderItemStateHistoryTableMap::COL_CREATED_AT);
    }

} // SpyOmsOrderItemStateHistoryQuery
