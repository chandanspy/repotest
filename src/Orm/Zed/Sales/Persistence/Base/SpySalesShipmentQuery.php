<?php

namespace Orm\Zed\Sales\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\Sales\Persistence\SpySalesShipment as ChildSpySalesShipment;
use Orm\Zed\Sales\Persistence\SpySalesShipmentQuery as ChildSpySalesShipmentQuery;
use Orm\Zed\Sales\Persistence\Map\SpySalesShipmentTableMap;
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
 * Base class that represents a query for the 'spy_sales_shipment' table.
 *
 *
 *
 * @method     ChildSpySalesShipmentQuery orderByIdSalesShipment($order = Criteria::ASC) Order by the id_sales_shipment column
 * @method     ChildSpySalesShipmentQuery orderByFkSalesExpense($order = Criteria::ASC) Order by the fk_sales_expense column
 * @method     ChildSpySalesShipmentQuery orderByFkSalesOrder($order = Criteria::ASC) Order by the fk_sales_order column
 * @method     ChildSpySalesShipmentQuery orderByFkSalesOrderAddress($order = Criteria::ASC) Order by the fk_sales_order_address column
 * @method     ChildSpySalesShipmentQuery orderByCarrierName($order = Criteria::ASC) Order by the carrier_name column
 * @method     ChildSpySalesShipmentQuery orderByDeliveryTime($order = Criteria::ASC) Order by the delivery_time column
 * @method     ChildSpySalesShipmentQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ChildSpySalesShipmentQuery orderByRequestedDeliveryDate($order = Criteria::ASC) Order by the requested_delivery_date column
 * @method     ChildSpySalesShipmentQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildSpySalesShipmentQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ChildSpySalesShipmentQuery groupByIdSalesShipment() Group by the id_sales_shipment column
 * @method     ChildSpySalesShipmentQuery groupByFkSalesExpense() Group by the fk_sales_expense column
 * @method     ChildSpySalesShipmentQuery groupByFkSalesOrder() Group by the fk_sales_order column
 * @method     ChildSpySalesShipmentQuery groupByFkSalesOrderAddress() Group by the fk_sales_order_address column
 * @method     ChildSpySalesShipmentQuery groupByCarrierName() Group by the carrier_name column
 * @method     ChildSpySalesShipmentQuery groupByDeliveryTime() Group by the delivery_time column
 * @method     ChildSpySalesShipmentQuery groupByName() Group by the name column
 * @method     ChildSpySalesShipmentQuery groupByRequestedDeliveryDate() Group by the requested_delivery_date column
 * @method     ChildSpySalesShipmentQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildSpySalesShipmentQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ChildSpySalesShipmentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpySalesShipmentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpySalesShipmentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpySalesShipmentQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpySalesShipmentQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpySalesShipmentQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpySalesShipmentQuery leftJoinOrder($relationAlias = null) Adds a LEFT JOIN clause to the query using the Order relation
 * @method     ChildSpySalesShipmentQuery rightJoinOrder($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Order relation
 * @method     ChildSpySalesShipmentQuery innerJoinOrder($relationAlias = null) Adds a INNER JOIN clause to the query using the Order relation
 *
 * @method     ChildSpySalesShipmentQuery joinWithOrder($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Order relation
 *
 * @method     ChildSpySalesShipmentQuery leftJoinWithOrder() Adds a LEFT JOIN clause and with to the query using the Order relation
 * @method     ChildSpySalesShipmentQuery rightJoinWithOrder() Adds a RIGHT JOIN clause and with to the query using the Order relation
 * @method     ChildSpySalesShipmentQuery innerJoinWithOrder() Adds a INNER JOIN clause and with to the query using the Order relation
 *
 * @method     ChildSpySalesShipmentQuery leftJoinExpense($relationAlias = null) Adds a LEFT JOIN clause to the query using the Expense relation
 * @method     ChildSpySalesShipmentQuery rightJoinExpense($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Expense relation
 * @method     ChildSpySalesShipmentQuery innerJoinExpense($relationAlias = null) Adds a INNER JOIN clause to the query using the Expense relation
 *
 * @method     ChildSpySalesShipmentQuery joinWithExpense($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Expense relation
 *
 * @method     ChildSpySalesShipmentQuery leftJoinWithExpense() Adds a LEFT JOIN clause and with to the query using the Expense relation
 * @method     ChildSpySalesShipmentQuery rightJoinWithExpense() Adds a RIGHT JOIN clause and with to the query using the Expense relation
 * @method     ChildSpySalesShipmentQuery innerJoinWithExpense() Adds a INNER JOIN clause and with to the query using the Expense relation
 *
 * @method     ChildSpySalesShipmentQuery leftJoinSpySalesOrderAddress($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpySalesOrderAddress relation
 * @method     ChildSpySalesShipmentQuery rightJoinSpySalesOrderAddress($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpySalesOrderAddress relation
 * @method     ChildSpySalesShipmentQuery innerJoinSpySalesOrderAddress($relationAlias = null) Adds a INNER JOIN clause to the query using the SpySalesOrderAddress relation
 *
 * @method     ChildSpySalesShipmentQuery joinWithSpySalesOrderAddress($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpySalesOrderAddress relation
 *
 * @method     ChildSpySalesShipmentQuery leftJoinWithSpySalesOrderAddress() Adds a LEFT JOIN clause and with to the query using the SpySalesOrderAddress relation
 * @method     ChildSpySalesShipmentQuery rightJoinWithSpySalesOrderAddress() Adds a RIGHT JOIN clause and with to the query using the SpySalesOrderAddress relation
 * @method     ChildSpySalesShipmentQuery innerJoinWithSpySalesOrderAddress() Adds a INNER JOIN clause and with to the query using the SpySalesOrderAddress relation
 *
 * @method     ChildSpySalesShipmentQuery leftJoinSpySalesOrderItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpySalesOrderItem relation
 * @method     ChildSpySalesShipmentQuery rightJoinSpySalesOrderItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpySalesOrderItem relation
 * @method     ChildSpySalesShipmentQuery innerJoinSpySalesOrderItem($relationAlias = null) Adds a INNER JOIN clause to the query using the SpySalesOrderItem relation
 *
 * @method     ChildSpySalesShipmentQuery joinWithSpySalesOrderItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpySalesOrderItem relation
 *
 * @method     ChildSpySalesShipmentQuery leftJoinWithSpySalesOrderItem() Adds a LEFT JOIN clause and with to the query using the SpySalesOrderItem relation
 * @method     ChildSpySalesShipmentQuery rightJoinWithSpySalesOrderItem() Adds a RIGHT JOIN clause and with to the query using the SpySalesOrderItem relation
 * @method     ChildSpySalesShipmentQuery innerJoinWithSpySalesOrderItem() Adds a INNER JOIN clause and with to the query using the SpySalesOrderItem relation
 *
 * @method     \Orm\Zed\Sales\Persistence\SpySalesOrderQuery|\Orm\Zed\Sales\Persistence\SpySalesExpenseQuery|\Orm\Zed\Sales\Persistence\SpySalesOrderAddressQuery|\Orm\Zed\Sales\Persistence\SpySalesOrderItemQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpySalesShipment|null findOne(ConnectionInterface $con = null) Return the first ChildSpySalesShipment matching the query
 * @method     ChildSpySalesShipment findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpySalesShipment matching the query, or a new ChildSpySalesShipment object populated from the query conditions when no match is found
 *
 * @method     ChildSpySalesShipment|null findOneByIdSalesShipment(int $id_sales_shipment) Return the first ChildSpySalesShipment filtered by the id_sales_shipment column
 * @method     ChildSpySalesShipment|null findOneByFkSalesExpense(int $fk_sales_expense) Return the first ChildSpySalesShipment filtered by the fk_sales_expense column
 * @method     ChildSpySalesShipment|null findOneByFkSalesOrder(int $fk_sales_order) Return the first ChildSpySalesShipment filtered by the fk_sales_order column
 * @method     ChildSpySalesShipment|null findOneByFkSalesOrderAddress(int $fk_sales_order_address) Return the first ChildSpySalesShipment filtered by the fk_sales_order_address column
 * @method     ChildSpySalesShipment|null findOneByCarrierName(string $carrier_name) Return the first ChildSpySalesShipment filtered by the carrier_name column
 * @method     ChildSpySalesShipment|null findOneByDeliveryTime(string $delivery_time) Return the first ChildSpySalesShipment filtered by the delivery_time column
 * @method     ChildSpySalesShipment|null findOneByName(string $name) Return the first ChildSpySalesShipment filtered by the name column
 * @method     ChildSpySalesShipment|null findOneByRequestedDeliveryDate(string $requested_delivery_date) Return the first ChildSpySalesShipment filtered by the requested_delivery_date column
 * @method     ChildSpySalesShipment|null findOneByCreatedAt(string $created_at) Return the first ChildSpySalesShipment filtered by the created_at column
 * @method     ChildSpySalesShipment|null findOneByUpdatedAt(string $updated_at) Return the first ChildSpySalesShipment filtered by the updated_at column *

 * @method     ChildSpySalesShipment requirePk($key, ConnectionInterface $con = null) Return the ChildSpySalesShipment by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesShipment requireOne(ConnectionInterface $con = null) Return the first ChildSpySalesShipment matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpySalesShipment requireOneByIdSalesShipment(int $id_sales_shipment) Return the first ChildSpySalesShipment filtered by the id_sales_shipment column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesShipment requireOneByFkSalesExpense(int $fk_sales_expense) Return the first ChildSpySalesShipment filtered by the fk_sales_expense column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesShipment requireOneByFkSalesOrder(int $fk_sales_order) Return the first ChildSpySalesShipment filtered by the fk_sales_order column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesShipment requireOneByFkSalesOrderAddress(int $fk_sales_order_address) Return the first ChildSpySalesShipment filtered by the fk_sales_order_address column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesShipment requireOneByCarrierName(string $carrier_name) Return the first ChildSpySalesShipment filtered by the carrier_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesShipment requireOneByDeliveryTime(string $delivery_time) Return the first ChildSpySalesShipment filtered by the delivery_time column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesShipment requireOneByName(string $name) Return the first ChildSpySalesShipment filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesShipment requireOneByRequestedDeliveryDate(string $requested_delivery_date) Return the first ChildSpySalesShipment filtered by the requested_delivery_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesShipment requireOneByCreatedAt(string $created_at) Return the first ChildSpySalesShipment filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesShipment requireOneByUpdatedAt(string $updated_at) Return the first ChildSpySalesShipment filtered by the updated_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpySalesShipment[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpySalesShipment objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpySalesShipment> find(ConnectionInterface $con = null) Return ChildSpySalesShipment objects based on current ModelCriteria
 * @method     ChildSpySalesShipment[]|ObjectCollection findByIdSalesShipment(int $id_sales_shipment) Return ChildSpySalesShipment objects filtered by the id_sales_shipment column
 * @psalm-method ObjectCollection&\Traversable<ChildSpySalesShipment> findByIdSalesShipment(int $id_sales_shipment) Return ChildSpySalesShipment objects filtered by the id_sales_shipment column
 * @method     ChildSpySalesShipment[]|ObjectCollection findByFkSalesExpense(int $fk_sales_expense) Return ChildSpySalesShipment objects filtered by the fk_sales_expense column
 * @psalm-method ObjectCollection&\Traversable<ChildSpySalesShipment> findByFkSalesExpense(int $fk_sales_expense) Return ChildSpySalesShipment objects filtered by the fk_sales_expense column
 * @method     ChildSpySalesShipment[]|ObjectCollection findByFkSalesOrder(int $fk_sales_order) Return ChildSpySalesShipment objects filtered by the fk_sales_order column
 * @psalm-method ObjectCollection&\Traversable<ChildSpySalesShipment> findByFkSalesOrder(int $fk_sales_order) Return ChildSpySalesShipment objects filtered by the fk_sales_order column
 * @method     ChildSpySalesShipment[]|ObjectCollection findByFkSalesOrderAddress(int $fk_sales_order_address) Return ChildSpySalesShipment objects filtered by the fk_sales_order_address column
 * @psalm-method ObjectCollection&\Traversable<ChildSpySalesShipment> findByFkSalesOrderAddress(int $fk_sales_order_address) Return ChildSpySalesShipment objects filtered by the fk_sales_order_address column
 * @method     ChildSpySalesShipment[]|ObjectCollection findByCarrierName(string $carrier_name) Return ChildSpySalesShipment objects filtered by the carrier_name column
 * @psalm-method ObjectCollection&\Traversable<ChildSpySalesShipment> findByCarrierName(string $carrier_name) Return ChildSpySalesShipment objects filtered by the carrier_name column
 * @method     ChildSpySalesShipment[]|ObjectCollection findByDeliveryTime(string $delivery_time) Return ChildSpySalesShipment objects filtered by the delivery_time column
 * @psalm-method ObjectCollection&\Traversable<ChildSpySalesShipment> findByDeliveryTime(string $delivery_time) Return ChildSpySalesShipment objects filtered by the delivery_time column
 * @method     ChildSpySalesShipment[]|ObjectCollection findByName(string $name) Return ChildSpySalesShipment objects filtered by the name column
 * @psalm-method ObjectCollection&\Traversable<ChildSpySalesShipment> findByName(string $name) Return ChildSpySalesShipment objects filtered by the name column
 * @method     ChildSpySalesShipment[]|ObjectCollection findByRequestedDeliveryDate(string $requested_delivery_date) Return ChildSpySalesShipment objects filtered by the requested_delivery_date column
 * @psalm-method ObjectCollection&\Traversable<ChildSpySalesShipment> findByRequestedDeliveryDate(string $requested_delivery_date) Return ChildSpySalesShipment objects filtered by the requested_delivery_date column
 * @method     ChildSpySalesShipment[]|ObjectCollection findByCreatedAt(string $created_at) Return ChildSpySalesShipment objects filtered by the created_at column
 * @psalm-method ObjectCollection&\Traversable<ChildSpySalesShipment> findByCreatedAt(string $created_at) Return ChildSpySalesShipment objects filtered by the created_at column
 * @method     ChildSpySalesShipment[]|ObjectCollection findByUpdatedAt(string $updated_at) Return ChildSpySalesShipment objects filtered by the updated_at column
 * @psalm-method ObjectCollection&\Traversable<ChildSpySalesShipment> findByUpdatedAt(string $updated_at) Return ChildSpySalesShipment objects filtered by the updated_at column
 * @method     ChildSpySalesShipment[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpySalesShipment> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpySalesShipmentQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\Sales\Persistence\Base\SpySalesShipmentQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\Sales\\Persistence\\SpySalesShipment', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpySalesShipmentQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpySalesShipmentQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpySalesShipmentQuery) {
            return $criteria;
        }
        $query = new ChildSpySalesShipmentQuery();
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
     * @return ChildSpySalesShipment|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpySalesShipmentTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpySalesShipment A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_sales_shipment, fk_sales_expense, fk_sales_order, fk_sales_order_address, carrier_name, delivery_time, name, requested_delivery_date, created_at, updated_at FROM spy_sales_shipment WHERE id_sales_shipment = :p0';
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
            /** @var ChildSpySalesShipment $obj */
            $obj = new ChildSpySalesShipment();
            $obj->hydrate($row);
            SpySalesShipmentTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpySalesShipment|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpySalesShipmentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpySalesShipmentTableMap::COL_ID_SALES_SHIPMENT, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpySalesShipmentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpySalesShipmentTableMap::COL_ID_SALES_SHIPMENT, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idSalesShipment Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdSalesShipment_Between(array $idSalesShipment)
    {
        return $this->filterByIdSalesShipment($idSalesShipment, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idSalesShipments Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdSalesShipment_In(array $idSalesShipments)
    {
        return $this->filterByIdSalesShipment($idSalesShipments, Criteria::IN);
    }

    /**
     * Filter the query on the id_sales_shipment column
     *
     * Example usage:
     * <code>
     * $query->filterByIdSalesShipment(1234); // WHERE id_sales_shipment = 1234
     * $query->filterByIdSalesShipment(array(12, 34), Criteria::IN); // WHERE id_sales_shipment IN (12, 34)
     * $query->filterByIdSalesShipment(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_sales_shipment > 12
     * </code>
     *
     * @param     mixed $idSalesShipment The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdSalesShipment($idSalesShipment = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idSalesShipment)) {
            $useMinMax = false;
            if (isset($idSalesShipment['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesShipmentTableMap::COL_ID_SALES_SHIPMENT, $idSalesShipment['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idSalesShipment['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesShipmentTableMap::COL_ID_SALES_SHIPMENT, $idSalesShipment['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idSalesShipment of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpySalesShipmentTableMap::COL_ID_SALES_SHIPMENT, $idSalesShipment, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkSalesExpense Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkSalesExpense_Between(array $fkSalesExpense)
    {
        return $this->filterByFkSalesExpense($fkSalesExpense, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkSalesExpenses Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkSalesExpense_In(array $fkSalesExpenses)
    {
        return $this->filterByFkSalesExpense($fkSalesExpenses, Criteria::IN);
    }

    /**
     * Filter the query on the fk_sales_expense column
     *
     * Example usage:
     * <code>
     * $query->filterByFkSalesExpense(1234); // WHERE fk_sales_expense = 1234
     * $query->filterByFkSalesExpense(array(12, 34), Criteria::IN); // WHERE fk_sales_expense IN (12, 34)
     * $query->filterByFkSalesExpense(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_sales_expense > 12
     * </code>
     *
     * @see       filterByExpense()
     *
     * @param     mixed $fkSalesExpense The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkSalesExpense($fkSalesExpense = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkSalesExpense)) {
            $useMinMax = false;
            if (isset($fkSalesExpense['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesShipmentTableMap::COL_FK_SALES_EXPENSE, $fkSalesExpense['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkSalesExpense['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesShipmentTableMap::COL_FK_SALES_EXPENSE, $fkSalesExpense['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkSalesExpense of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpySalesShipmentTableMap::COL_FK_SALES_EXPENSE, $fkSalesExpense, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkSalesOrder Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkSalesOrder_Between(array $fkSalesOrder)
    {
        return $this->filterByFkSalesOrder($fkSalesOrder, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkSalesOrders Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkSalesOrder_In(array $fkSalesOrders)
    {
        return $this->filterByFkSalesOrder($fkSalesOrders, Criteria::IN);
    }

    /**
     * Filter the query on the fk_sales_order column
     *
     * Example usage:
     * <code>
     * $query->filterByFkSalesOrder(1234); // WHERE fk_sales_order = 1234
     * $query->filterByFkSalesOrder(array(12, 34), Criteria::IN); // WHERE fk_sales_order IN (12, 34)
     * $query->filterByFkSalesOrder(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_sales_order > 12
     * </code>
     *
     * @see       filterByOrder()
     *
     * @param     mixed $fkSalesOrder The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkSalesOrder($fkSalesOrder = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkSalesOrder)) {
            $useMinMax = false;
            if (isset($fkSalesOrder['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesShipmentTableMap::COL_FK_SALES_ORDER, $fkSalesOrder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkSalesOrder['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesShipmentTableMap::COL_FK_SALES_ORDER, $fkSalesOrder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkSalesOrder of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpySalesShipmentTableMap::COL_FK_SALES_ORDER, $fkSalesOrder, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkSalesOrderAddress Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkSalesOrderAddress_Between(array $fkSalesOrderAddress)
    {
        return $this->filterByFkSalesOrderAddress($fkSalesOrderAddress, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkSalesOrderAddresss Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkSalesOrderAddress_In(array $fkSalesOrderAddresss)
    {
        return $this->filterByFkSalesOrderAddress($fkSalesOrderAddresss, Criteria::IN);
    }

    /**
     * Filter the query on the fk_sales_order_address column
     *
     * Example usage:
     * <code>
     * $query->filterByFkSalesOrderAddress(1234); // WHERE fk_sales_order_address = 1234
     * $query->filterByFkSalesOrderAddress(array(12, 34), Criteria::IN); // WHERE fk_sales_order_address IN (12, 34)
     * $query->filterByFkSalesOrderAddress(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_sales_order_address > 12
     * </code>
     *
     * @see       filterBySpySalesOrderAddress()
     *
     * @param     mixed $fkSalesOrderAddress The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkSalesOrderAddress($fkSalesOrderAddress = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkSalesOrderAddress)) {
            $useMinMax = false;
            if (isset($fkSalesOrderAddress['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesShipmentTableMap::COL_FK_SALES_ORDER_ADDRESS, $fkSalesOrderAddress['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkSalesOrderAddress['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesShipmentTableMap::COL_FK_SALES_ORDER_ADDRESS, $fkSalesOrderAddress['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkSalesOrderAddress of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpySalesShipmentTableMap::COL_FK_SALES_ORDER_ADDRESS, $fkSalesOrderAddress, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $carrierNames Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCarrierName_In(array $carrierNames)
    {
        return $this->filterByCarrierName($carrierNames, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $carrierName Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCarrierName_Like($carrierName)
    {
        return $this->filterByCarrierName($carrierName, Criteria::LIKE);
    }

    /**
     * Filter the query on the carrier_name column
     *
     * Example usage:
     * <code>
     * $query->filterByCarrierName('fooValue');   // WHERE carrier_name = 'fooValue'
     * $query->filterByCarrierName('%fooValue%', Criteria::LIKE); // WHERE carrier_name LIKE '%fooValue%'
     * $query->filterByCarrierName([1, 'foo'], Criteria::IN); // WHERE carrier_name IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $carrierName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByCarrierName($carrierName = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $carrierName = str_replace('*', '%', $carrierName);
        }

        if (is_array($carrierName) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$carrierName of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpySalesShipmentTableMap::COL_CARRIER_NAME, $carrierName, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $deliveryTimes Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDeliveryTime_In(array $deliveryTimes)
    {
        return $this->filterByDeliveryTime($deliveryTimes, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $deliveryTime Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDeliveryTime_Like($deliveryTime)
    {
        return $this->filterByDeliveryTime($deliveryTime, Criteria::LIKE);
    }

    /**
     * Filter the query on the delivery_time column
     *
     * Example usage:
     * <code>
     * $query->filterByDeliveryTime('fooValue');   // WHERE delivery_time = 'fooValue'
     * $query->filterByDeliveryTime('%fooValue%', Criteria::LIKE); // WHERE delivery_time LIKE '%fooValue%'
     * $query->filterByDeliveryTime([1, 'foo'], Criteria::IN); // WHERE delivery_time IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $deliveryTime The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByDeliveryTime($deliveryTime = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $deliveryTime = str_replace('*', '%', $deliveryTime);
        }

        if (is_array($deliveryTime) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$deliveryTime of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpySalesShipmentTableMap::COL_DELIVERY_TIME, $deliveryTime, $comparison);

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

        $query = $this->addUsingAlias(SpySalesShipmentTableMap::COL_NAME, $name, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $requestedDeliveryDates Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByRequestedDeliveryDate_In(array $requestedDeliveryDates)
    {
        return $this->filterByRequestedDeliveryDate($requestedDeliveryDates, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $requestedDeliveryDate Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByRequestedDeliveryDate_Like($requestedDeliveryDate)
    {
        return $this->filterByRequestedDeliveryDate($requestedDeliveryDate, Criteria::LIKE);
    }

    /**
     * Filter the query on the requested_delivery_date column
     *
     * Example usage:
     * <code>
     * $query->filterByRequestedDeliveryDate('fooValue');   // WHERE requested_delivery_date = 'fooValue'
     * $query->filterByRequestedDeliveryDate('%fooValue%', Criteria::LIKE); // WHERE requested_delivery_date LIKE '%fooValue%'
     * $query->filterByRequestedDeliveryDate([1, 'foo'], Criteria::IN); // WHERE requested_delivery_date IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $requestedDeliveryDate The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByRequestedDeliveryDate($requestedDeliveryDate = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $requestedDeliveryDate = str_replace('*', '%', $requestedDeliveryDate);
        }

        if (is_array($requestedDeliveryDate) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$requestedDeliveryDate of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpySalesShipmentTableMap::COL_REQUESTED_DELIVERY_DATE, $requestedDeliveryDate, $comparison);

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
                $this->addUsingAlias(SpySalesShipmentTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesShipmentTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$createdAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpySalesShipmentTableMap::COL_CREATED_AT, $createdAt, $comparison);

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
                $this->addUsingAlias(SpySalesShipmentTableMap::COL_UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesShipmentTableMap::COL_UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$updatedAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpySalesShipmentTableMap::COL_UPDATED_AT, $updatedAt, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\Sales\Persistence\SpySalesOrder object
     *
     * @param \Orm\Zed\Sales\Persistence\SpySalesOrder|ObjectCollection $spySalesOrder The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpySalesShipmentQuery The current query, for fluid interface
     */
    public function filterByOrder($spySalesOrder, $comparison = null)
    {
        if ($spySalesOrder instanceof \Orm\Zed\Sales\Persistence\SpySalesOrder) {
            return $this
                ->addUsingAlias(SpySalesShipmentTableMap::COL_FK_SALES_ORDER, $spySalesOrder->getIdSalesOrder(), $comparison);
        } elseif ($spySalesOrder instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpySalesShipmentTableMap::COL_FK_SALES_ORDER, $spySalesOrder->toKeyValue('PrimaryKey', 'IdSalesOrder'), $comparison);
        } else {
            throw new PropelException('filterByOrder() only accepts arguments of type \Orm\Zed\Sales\Persistence\SpySalesOrder or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Order relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpySalesShipmentQuery The current query, for fluid interface
     */
    public function joinOrder($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Order');

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
            $this->addJoinObject($join, 'Order');
        }

        return $this;
    }

    /**
     * Use the Order relation SpySalesOrder object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Sales\Persistence\SpySalesOrderQuery A secondary query class using the current class as primary query
     */
    public function useOrderQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinOrder($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Order', '\Orm\Zed\Sales\Persistence\SpySalesOrderQuery');
    }

    /**
     * Use the Order relation SpySalesOrder object
     *
     * @param callable(\Orm\Zed\Sales\Persistence\SpySalesOrderQuery):\Orm\Zed\Sales\Persistence\SpySalesOrderQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withOrderQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useOrderQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the Order relation to the SpySalesOrder table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Sales\Persistence\SpySalesOrderQuery The inner query object of the EXISTS statement
     */
    public function useOrderExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('Order', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the Order relation to the SpySalesOrder table for a NOT EXISTS query.
     *
     * @see useOrderExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Sales\Persistence\SpySalesOrderQuery The inner query object of the NOT EXISTS statement
     */
    public function useOrderNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('Order', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Sales\Persistence\SpySalesExpense object
     *
     * @param \Orm\Zed\Sales\Persistence\SpySalesExpense|ObjectCollection $spySalesExpense The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpySalesShipmentQuery The current query, for fluid interface
     */
    public function filterByExpense($spySalesExpense, $comparison = null)
    {
        if ($spySalesExpense instanceof \Orm\Zed\Sales\Persistence\SpySalesExpense) {
            return $this
                ->addUsingAlias(SpySalesShipmentTableMap::COL_FK_SALES_EXPENSE, $spySalesExpense->getIdSalesExpense(), $comparison);
        } elseif ($spySalesExpense instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpySalesShipmentTableMap::COL_FK_SALES_EXPENSE, $spySalesExpense->toKeyValue('PrimaryKey', 'IdSalesExpense'), $comparison);
        } else {
            throw new PropelException('filterByExpense() only accepts arguments of type \Orm\Zed\Sales\Persistence\SpySalesExpense or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Expense relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpySalesShipmentQuery The current query, for fluid interface
     */
    public function joinExpense($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Expense');

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
            $this->addJoinObject($join, 'Expense');
        }

        return $this;
    }

    /**
     * Use the Expense relation SpySalesExpense object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Sales\Persistence\SpySalesExpenseQuery A secondary query class using the current class as primary query
     */
    public function useExpenseQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinExpense($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Expense', '\Orm\Zed\Sales\Persistence\SpySalesExpenseQuery');
    }

    /**
     * Use the Expense relation SpySalesExpense object
     *
     * @param callable(\Orm\Zed\Sales\Persistence\SpySalesExpenseQuery):\Orm\Zed\Sales\Persistence\SpySalesExpenseQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withExpenseQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useExpenseQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the Expense relation to the SpySalesExpense table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Sales\Persistence\SpySalesExpenseQuery The inner query object of the EXISTS statement
     */
    public function useExpenseExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('Expense', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the Expense relation to the SpySalesExpense table for a NOT EXISTS query.
     *
     * @see useExpenseExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Sales\Persistence\SpySalesExpenseQuery The inner query object of the NOT EXISTS statement
     */
    public function useExpenseNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('Expense', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Sales\Persistence\SpySalesOrderAddress object
     *
     * @param \Orm\Zed\Sales\Persistence\SpySalesOrderAddress|ObjectCollection $spySalesOrderAddress The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpySalesShipmentQuery The current query, for fluid interface
     */
    public function filterBySpySalesOrderAddress($spySalesOrderAddress, $comparison = null)
    {
        if ($spySalesOrderAddress instanceof \Orm\Zed\Sales\Persistence\SpySalesOrderAddress) {
            return $this
                ->addUsingAlias(SpySalesShipmentTableMap::COL_FK_SALES_ORDER_ADDRESS, $spySalesOrderAddress->getIdSalesOrderAddress(), $comparison);
        } elseif ($spySalesOrderAddress instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpySalesShipmentTableMap::COL_FK_SALES_ORDER_ADDRESS, $spySalesOrderAddress->toKeyValue('PrimaryKey', 'IdSalesOrderAddress'), $comparison);
        } else {
            throw new PropelException('filterBySpySalesOrderAddress() only accepts arguments of type \Orm\Zed\Sales\Persistence\SpySalesOrderAddress or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpySalesOrderAddress relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpySalesShipmentQuery The current query, for fluid interface
     */
    public function joinSpySalesOrderAddress($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpySalesOrderAddress');

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
            $this->addJoinObject($join, 'SpySalesOrderAddress');
        }

        return $this;
    }

    /**
     * Use the SpySalesOrderAddress relation SpySalesOrderAddress object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Sales\Persistence\SpySalesOrderAddressQuery A secondary query class using the current class as primary query
     */
    public function useSpySalesOrderAddressQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinSpySalesOrderAddress($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpySalesOrderAddress', '\Orm\Zed\Sales\Persistence\SpySalesOrderAddressQuery');
    }

    /**
     * Use the SpySalesOrderAddress relation SpySalesOrderAddress object
     *
     * @param callable(\Orm\Zed\Sales\Persistence\SpySalesOrderAddressQuery):\Orm\Zed\Sales\Persistence\SpySalesOrderAddressQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpySalesOrderAddressQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useSpySalesOrderAddressQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpySalesOrderAddress table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Sales\Persistence\SpySalesOrderAddressQuery The inner query object of the EXISTS statement
     */
    public function useSpySalesOrderAddressExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpySalesOrderAddress', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpySalesOrderAddress table for a NOT EXISTS query.
     *
     * @see useSpySalesOrderAddressExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Sales\Persistence\SpySalesOrderAddressQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpySalesOrderAddressNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpySalesOrderAddress', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Sales\Persistence\SpySalesOrderItem object
     *
     * @param \Orm\Zed\Sales\Persistence\SpySalesOrderItem|ObjectCollection $spySalesOrderItem the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpySalesShipmentQuery The current query, for fluid interface
     */
    public function filterBySpySalesOrderItem($spySalesOrderItem, $comparison = null)
    {
        if ($spySalesOrderItem instanceof \Orm\Zed\Sales\Persistence\SpySalesOrderItem) {
            return $this
                ->addUsingAlias(SpySalesShipmentTableMap::COL_ID_SALES_SHIPMENT, $spySalesOrderItem->getFkSalesShipment(), $comparison);
        } elseif ($spySalesOrderItem instanceof ObjectCollection) {
            return $this
                ->useSpySalesOrderItemQuery()
                ->filterByPrimaryKeys($spySalesOrderItem->getPrimaryKeys())
                ->endUse();
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
     * @return $this|ChildSpySalesShipmentQuery The current query, for fluid interface
     */
    public function joinSpySalesOrderItem($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useSpySalesOrderItemQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
        ?string $joinType = Criteria::LEFT_JOIN
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
     * @param   ChildSpySalesShipment $spySalesShipment Object to remove from the list of results
     *
     * @return $this|ChildSpySalesShipmentQuery The current query, for fluid interface
     */
    public function prune($spySalesShipment = null)
    {
        if ($spySalesShipment) {
            $this->addUsingAlias(SpySalesShipmentTableMap::COL_ID_SALES_SHIPMENT, $spySalesShipment->getIdSalesShipment(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_sales_shipment table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpySalesShipmentTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpySalesShipmentTableMap::clearInstancePool();
            SpySalesShipmentTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpySalesShipmentTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpySalesShipmentTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpySalesShipmentTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpySalesShipmentTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    // timestampable behavior

    /**
     * Filter by the latest updated
     *
     * @param      int $nbDays Maximum age of the latest update in days
     *
     * @return     $this|ChildSpySalesShipmentQuery The current query, for fluid interface
     */
    public function recentlyUpdated($nbDays = 7)
    {
        return $this->addUsingAlias(SpySalesShipmentTableMap::COL_UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by update date desc
     *
     * @return     $this|ChildSpySalesShipmentQuery The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        return $this->addDescendingOrderByColumn(SpySalesShipmentTableMap::COL_UPDATED_AT);
    }

    /**
     * Order by update date asc
     *
     * @return     $this|ChildSpySalesShipmentQuery The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        return $this->addAscendingOrderByColumn(SpySalesShipmentTableMap::COL_UPDATED_AT);
    }

    /**
     * Order by create date desc
     *
     * @return     $this|ChildSpySalesShipmentQuery The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        return $this->addDescendingOrderByColumn(SpySalesShipmentTableMap::COL_CREATED_AT);
    }

    /**
     * Filter by the latest created
     *
     * @param      int $nbDays Maximum age of in days
     *
     * @return     $this|ChildSpySalesShipmentQuery The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        return $this->addUsingAlias(SpySalesShipmentTableMap::COL_CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by create date asc
     *
     * @return     $this|ChildSpySalesShipmentQuery The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        return $this->addAscendingOrderByColumn(SpySalesShipmentTableMap::COL_CREATED_AT);
    }

} // SpySalesShipmentQuery
