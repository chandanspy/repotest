<?php

namespace Orm\Zed\Sales\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\Sales\Persistence\SpySalesOrderTotals as ChildSpySalesOrderTotals;
use Orm\Zed\Sales\Persistence\SpySalesOrderTotalsQuery as ChildSpySalesOrderTotalsQuery;
use Orm\Zed\Sales\Persistence\Map\SpySalesOrderTotalsTableMap;
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
 * Base class that represents a query for the 'spy_sales_order_totals' table.
 *
 *
 *
 * @method     ChildSpySalesOrderTotalsQuery orderByIdSalesOrderTotals($order = Criteria::ASC) Order by the id_sales_order_totals column
 * @method     ChildSpySalesOrderTotalsQuery orderByFkSalesOrder($order = Criteria::ASC) Order by the fk_sales_order column
 * @method     ChildSpySalesOrderTotalsQuery orderByCanceledTotal($order = Criteria::ASC) Order by the canceled_total column
 * @method     ChildSpySalesOrderTotalsQuery orderByDiscountTotal($order = Criteria::ASC) Order by the discount_total column
 * @method     ChildSpySalesOrderTotalsQuery orderByGrandTotal($order = Criteria::ASC) Order by the grand_total column
 * @method     ChildSpySalesOrderTotalsQuery orderByOrderExpenseTotal($order = Criteria::ASC) Order by the order_expense_total column
 * @method     ChildSpySalesOrderTotalsQuery orderByRefundTotal($order = Criteria::ASC) Order by the refund_total column
 * @method     ChildSpySalesOrderTotalsQuery orderBySubtotal($order = Criteria::ASC) Order by the subtotal column
 * @method     ChildSpySalesOrderTotalsQuery orderByTaxTotal($order = Criteria::ASC) Order by the tax_total column
 * @method     ChildSpySalesOrderTotalsQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildSpySalesOrderTotalsQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ChildSpySalesOrderTotalsQuery groupByIdSalesOrderTotals() Group by the id_sales_order_totals column
 * @method     ChildSpySalesOrderTotalsQuery groupByFkSalesOrder() Group by the fk_sales_order column
 * @method     ChildSpySalesOrderTotalsQuery groupByCanceledTotal() Group by the canceled_total column
 * @method     ChildSpySalesOrderTotalsQuery groupByDiscountTotal() Group by the discount_total column
 * @method     ChildSpySalesOrderTotalsQuery groupByGrandTotal() Group by the grand_total column
 * @method     ChildSpySalesOrderTotalsQuery groupByOrderExpenseTotal() Group by the order_expense_total column
 * @method     ChildSpySalesOrderTotalsQuery groupByRefundTotal() Group by the refund_total column
 * @method     ChildSpySalesOrderTotalsQuery groupBySubtotal() Group by the subtotal column
 * @method     ChildSpySalesOrderTotalsQuery groupByTaxTotal() Group by the tax_total column
 * @method     ChildSpySalesOrderTotalsQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildSpySalesOrderTotalsQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ChildSpySalesOrderTotalsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpySalesOrderTotalsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpySalesOrderTotalsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpySalesOrderTotalsQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpySalesOrderTotalsQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpySalesOrderTotalsQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpySalesOrderTotalsQuery leftJoinOrder($relationAlias = null) Adds a LEFT JOIN clause to the query using the Order relation
 * @method     ChildSpySalesOrderTotalsQuery rightJoinOrder($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Order relation
 * @method     ChildSpySalesOrderTotalsQuery innerJoinOrder($relationAlias = null) Adds a INNER JOIN clause to the query using the Order relation
 *
 * @method     ChildSpySalesOrderTotalsQuery joinWithOrder($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Order relation
 *
 * @method     ChildSpySalesOrderTotalsQuery leftJoinWithOrder() Adds a LEFT JOIN clause and with to the query using the Order relation
 * @method     ChildSpySalesOrderTotalsQuery rightJoinWithOrder() Adds a RIGHT JOIN clause and with to the query using the Order relation
 * @method     ChildSpySalesOrderTotalsQuery innerJoinWithOrder() Adds a INNER JOIN clause and with to the query using the Order relation
 *
 * @method     \Orm\Zed\Sales\Persistence\SpySalesOrderQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpySalesOrderTotals|null findOne(ConnectionInterface $con = null) Return the first ChildSpySalesOrderTotals matching the query
 * @method     ChildSpySalesOrderTotals findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpySalesOrderTotals matching the query, or a new ChildSpySalesOrderTotals object populated from the query conditions when no match is found
 *
 * @method     ChildSpySalesOrderTotals|null findOneByIdSalesOrderTotals(int $id_sales_order_totals) Return the first ChildSpySalesOrderTotals filtered by the id_sales_order_totals column
 * @method     ChildSpySalesOrderTotals|null findOneByFkSalesOrder(int $fk_sales_order) Return the first ChildSpySalesOrderTotals filtered by the fk_sales_order column
 * @method     ChildSpySalesOrderTotals|null findOneByCanceledTotal(int $canceled_total) Return the first ChildSpySalesOrderTotals filtered by the canceled_total column
 * @method     ChildSpySalesOrderTotals|null findOneByDiscountTotal(int $discount_total) Return the first ChildSpySalesOrderTotals filtered by the discount_total column
 * @method     ChildSpySalesOrderTotals|null findOneByGrandTotal(int $grand_total) Return the first ChildSpySalesOrderTotals filtered by the grand_total column
 * @method     ChildSpySalesOrderTotals|null findOneByOrderExpenseTotal(int $order_expense_total) Return the first ChildSpySalesOrderTotals filtered by the order_expense_total column
 * @method     ChildSpySalesOrderTotals|null findOneByRefundTotal(int $refund_total) Return the first ChildSpySalesOrderTotals filtered by the refund_total column
 * @method     ChildSpySalesOrderTotals|null findOneBySubtotal(int $subtotal) Return the first ChildSpySalesOrderTotals filtered by the subtotal column
 * @method     ChildSpySalesOrderTotals|null findOneByTaxTotal(int $tax_total) Return the first ChildSpySalesOrderTotals filtered by the tax_total column
 * @method     ChildSpySalesOrderTotals|null findOneByCreatedAt(string $created_at) Return the first ChildSpySalesOrderTotals filtered by the created_at column
 * @method     ChildSpySalesOrderTotals|null findOneByUpdatedAt(string $updated_at) Return the first ChildSpySalesOrderTotals filtered by the updated_at column *

 * @method     ChildSpySalesOrderTotals requirePk($key, ConnectionInterface $con = null) Return the ChildSpySalesOrderTotals by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesOrderTotals requireOne(ConnectionInterface $con = null) Return the first ChildSpySalesOrderTotals matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpySalesOrderTotals requireOneByIdSalesOrderTotals(int $id_sales_order_totals) Return the first ChildSpySalesOrderTotals filtered by the id_sales_order_totals column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesOrderTotals requireOneByFkSalesOrder(int $fk_sales_order) Return the first ChildSpySalesOrderTotals filtered by the fk_sales_order column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesOrderTotals requireOneByCanceledTotal(int $canceled_total) Return the first ChildSpySalesOrderTotals filtered by the canceled_total column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesOrderTotals requireOneByDiscountTotal(int $discount_total) Return the first ChildSpySalesOrderTotals filtered by the discount_total column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesOrderTotals requireOneByGrandTotal(int $grand_total) Return the first ChildSpySalesOrderTotals filtered by the grand_total column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesOrderTotals requireOneByOrderExpenseTotal(int $order_expense_total) Return the first ChildSpySalesOrderTotals filtered by the order_expense_total column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesOrderTotals requireOneByRefundTotal(int $refund_total) Return the first ChildSpySalesOrderTotals filtered by the refund_total column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesOrderTotals requireOneBySubtotal(int $subtotal) Return the first ChildSpySalesOrderTotals filtered by the subtotal column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesOrderTotals requireOneByTaxTotal(int $tax_total) Return the first ChildSpySalesOrderTotals filtered by the tax_total column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesOrderTotals requireOneByCreatedAt(string $created_at) Return the first ChildSpySalesOrderTotals filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesOrderTotals requireOneByUpdatedAt(string $updated_at) Return the first ChildSpySalesOrderTotals filtered by the updated_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpySalesOrderTotals[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpySalesOrderTotals objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpySalesOrderTotals> find(ConnectionInterface $con = null) Return ChildSpySalesOrderTotals objects based on current ModelCriteria
 * @method     ChildSpySalesOrderTotals[]|ObjectCollection findByIdSalesOrderTotals(int $id_sales_order_totals) Return ChildSpySalesOrderTotals objects filtered by the id_sales_order_totals column
 * @psalm-method ObjectCollection&\Traversable<ChildSpySalesOrderTotals> findByIdSalesOrderTotals(int $id_sales_order_totals) Return ChildSpySalesOrderTotals objects filtered by the id_sales_order_totals column
 * @method     ChildSpySalesOrderTotals[]|ObjectCollection findByFkSalesOrder(int $fk_sales_order) Return ChildSpySalesOrderTotals objects filtered by the fk_sales_order column
 * @psalm-method ObjectCollection&\Traversable<ChildSpySalesOrderTotals> findByFkSalesOrder(int $fk_sales_order) Return ChildSpySalesOrderTotals objects filtered by the fk_sales_order column
 * @method     ChildSpySalesOrderTotals[]|ObjectCollection findByCanceledTotal(int $canceled_total) Return ChildSpySalesOrderTotals objects filtered by the canceled_total column
 * @psalm-method ObjectCollection&\Traversable<ChildSpySalesOrderTotals> findByCanceledTotal(int $canceled_total) Return ChildSpySalesOrderTotals objects filtered by the canceled_total column
 * @method     ChildSpySalesOrderTotals[]|ObjectCollection findByDiscountTotal(int $discount_total) Return ChildSpySalesOrderTotals objects filtered by the discount_total column
 * @psalm-method ObjectCollection&\Traversable<ChildSpySalesOrderTotals> findByDiscountTotal(int $discount_total) Return ChildSpySalesOrderTotals objects filtered by the discount_total column
 * @method     ChildSpySalesOrderTotals[]|ObjectCollection findByGrandTotal(int $grand_total) Return ChildSpySalesOrderTotals objects filtered by the grand_total column
 * @psalm-method ObjectCollection&\Traversable<ChildSpySalesOrderTotals> findByGrandTotal(int $grand_total) Return ChildSpySalesOrderTotals objects filtered by the grand_total column
 * @method     ChildSpySalesOrderTotals[]|ObjectCollection findByOrderExpenseTotal(int $order_expense_total) Return ChildSpySalesOrderTotals objects filtered by the order_expense_total column
 * @psalm-method ObjectCollection&\Traversable<ChildSpySalesOrderTotals> findByOrderExpenseTotal(int $order_expense_total) Return ChildSpySalesOrderTotals objects filtered by the order_expense_total column
 * @method     ChildSpySalesOrderTotals[]|ObjectCollection findByRefundTotal(int $refund_total) Return ChildSpySalesOrderTotals objects filtered by the refund_total column
 * @psalm-method ObjectCollection&\Traversable<ChildSpySalesOrderTotals> findByRefundTotal(int $refund_total) Return ChildSpySalesOrderTotals objects filtered by the refund_total column
 * @method     ChildSpySalesOrderTotals[]|ObjectCollection findBySubtotal(int $subtotal) Return ChildSpySalesOrderTotals objects filtered by the subtotal column
 * @psalm-method ObjectCollection&\Traversable<ChildSpySalesOrderTotals> findBySubtotal(int $subtotal) Return ChildSpySalesOrderTotals objects filtered by the subtotal column
 * @method     ChildSpySalesOrderTotals[]|ObjectCollection findByTaxTotal(int $tax_total) Return ChildSpySalesOrderTotals objects filtered by the tax_total column
 * @psalm-method ObjectCollection&\Traversable<ChildSpySalesOrderTotals> findByTaxTotal(int $tax_total) Return ChildSpySalesOrderTotals objects filtered by the tax_total column
 * @method     ChildSpySalesOrderTotals[]|ObjectCollection findByCreatedAt(string $created_at) Return ChildSpySalesOrderTotals objects filtered by the created_at column
 * @psalm-method ObjectCollection&\Traversable<ChildSpySalesOrderTotals> findByCreatedAt(string $created_at) Return ChildSpySalesOrderTotals objects filtered by the created_at column
 * @method     ChildSpySalesOrderTotals[]|ObjectCollection findByUpdatedAt(string $updated_at) Return ChildSpySalesOrderTotals objects filtered by the updated_at column
 * @psalm-method ObjectCollection&\Traversable<ChildSpySalesOrderTotals> findByUpdatedAt(string $updated_at) Return ChildSpySalesOrderTotals objects filtered by the updated_at column
 * @method     ChildSpySalesOrderTotals[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpySalesOrderTotals> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpySalesOrderTotalsQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\Sales\Persistence\Base\SpySalesOrderTotalsQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\Sales\\Persistence\\SpySalesOrderTotals', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpySalesOrderTotalsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpySalesOrderTotalsQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpySalesOrderTotalsQuery) {
            return $criteria;
        }
        $query = new ChildSpySalesOrderTotalsQuery();
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
     * @return ChildSpySalesOrderTotals|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpySalesOrderTotalsTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpySalesOrderTotals A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_sales_order_totals, fk_sales_order, canceled_total, discount_total, grand_total, order_expense_total, refund_total, subtotal, tax_total, created_at, updated_at FROM spy_sales_order_totals WHERE id_sales_order_totals = :p0';
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
            /** @var ChildSpySalesOrderTotals $obj */
            $obj = new ChildSpySalesOrderTotals();
            $obj->hydrate($row);
            SpySalesOrderTotalsTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpySalesOrderTotals|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpySalesOrderTotalsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpySalesOrderTotalsTableMap::COL_ID_SALES_ORDER_TOTALS, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpySalesOrderTotalsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpySalesOrderTotalsTableMap::COL_ID_SALES_ORDER_TOTALS, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idSalesOrderTotals Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdSalesOrderTotals_Between(array $idSalesOrderTotals)
    {
        return $this->filterByIdSalesOrderTotals($idSalesOrderTotals, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idSalesOrderTotalss Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdSalesOrderTotals_In(array $idSalesOrderTotalss)
    {
        return $this->filterByIdSalesOrderTotals($idSalesOrderTotalss, Criteria::IN);
    }

    /**
     * Filter the query on the id_sales_order_totals column
     *
     * Example usage:
     * <code>
     * $query->filterByIdSalesOrderTotals(1234); // WHERE id_sales_order_totals = 1234
     * $query->filterByIdSalesOrderTotals(array(12, 34), Criteria::IN); // WHERE id_sales_order_totals IN (12, 34)
     * $query->filterByIdSalesOrderTotals(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_sales_order_totals > 12
     * </code>
     *
     * @param     mixed $idSalesOrderTotals The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdSalesOrderTotals($idSalesOrderTotals = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idSalesOrderTotals)) {
            $useMinMax = false;
            if (isset($idSalesOrderTotals['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderTotalsTableMap::COL_ID_SALES_ORDER_TOTALS, $idSalesOrderTotals['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idSalesOrderTotals['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderTotalsTableMap::COL_ID_SALES_ORDER_TOTALS, $idSalesOrderTotals['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idSalesOrderTotals of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpySalesOrderTotalsTableMap::COL_ID_SALES_ORDER_TOTALS, $idSalesOrderTotals, $comparison);

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
                $this->addUsingAlias(SpySalesOrderTotalsTableMap::COL_FK_SALES_ORDER, $fkSalesOrder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkSalesOrder['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderTotalsTableMap::COL_FK_SALES_ORDER, $fkSalesOrder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkSalesOrder of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpySalesOrderTotalsTableMap::COL_FK_SALES_ORDER, $fkSalesOrder, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $canceledTotal Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCanceledTotal_Between(array $canceledTotal)
    {
        return $this->filterByCanceledTotal($canceledTotal, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $canceledTotals Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCanceledTotal_In(array $canceledTotals)
    {
        return $this->filterByCanceledTotal($canceledTotals, Criteria::IN);
    }

    /**
     * Filter the query on the canceled_total column
     *
     * Example usage:
     * <code>
     * $query->filterByCanceledTotal(1234); // WHERE canceled_total = 1234
     * $query->filterByCanceledTotal(array(12, 34), Criteria::IN); // WHERE canceled_total IN (12, 34)
     * $query->filterByCanceledTotal(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE canceled_total > 12
     * </code>
     *
     * @param     mixed $canceledTotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByCanceledTotal($canceledTotal = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($canceledTotal)) {
            $useMinMax = false;
            if (isset($canceledTotal['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderTotalsTableMap::COL_CANCELED_TOTAL, $canceledTotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($canceledTotal['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderTotalsTableMap::COL_CANCELED_TOTAL, $canceledTotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$canceledTotal of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpySalesOrderTotalsTableMap::COL_CANCELED_TOTAL, $canceledTotal, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $discountTotal Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDiscountTotal_Between(array $discountTotal)
    {
        return $this->filterByDiscountTotal($discountTotal, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $discountTotals Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDiscountTotal_In(array $discountTotals)
    {
        return $this->filterByDiscountTotal($discountTotals, Criteria::IN);
    }

    /**
     * Filter the query on the discount_total column
     *
     * Example usage:
     * <code>
     * $query->filterByDiscountTotal(1234); // WHERE discount_total = 1234
     * $query->filterByDiscountTotal(array(12, 34), Criteria::IN); // WHERE discount_total IN (12, 34)
     * $query->filterByDiscountTotal(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE discount_total > 12
     * </code>
     *
     * @param     mixed $discountTotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByDiscountTotal($discountTotal = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($discountTotal)) {
            $useMinMax = false;
            if (isset($discountTotal['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderTotalsTableMap::COL_DISCOUNT_TOTAL, $discountTotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($discountTotal['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderTotalsTableMap::COL_DISCOUNT_TOTAL, $discountTotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$discountTotal of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpySalesOrderTotalsTableMap::COL_DISCOUNT_TOTAL, $discountTotal, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $grandTotal Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGrandTotal_Between(array $grandTotal)
    {
        return $this->filterByGrandTotal($grandTotal, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $grandTotals Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGrandTotal_In(array $grandTotals)
    {
        return $this->filterByGrandTotal($grandTotals, Criteria::IN);
    }

    /**
     * Filter the query on the grand_total column
     *
     * Example usage:
     * <code>
     * $query->filterByGrandTotal(1234); // WHERE grand_total = 1234
     * $query->filterByGrandTotal(array(12, 34), Criteria::IN); // WHERE grand_total IN (12, 34)
     * $query->filterByGrandTotal(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE grand_total > 12
     * </code>
     *
     * @param     mixed $grandTotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByGrandTotal($grandTotal = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($grandTotal)) {
            $useMinMax = false;
            if (isset($grandTotal['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderTotalsTableMap::COL_GRAND_TOTAL, $grandTotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($grandTotal['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderTotalsTableMap::COL_GRAND_TOTAL, $grandTotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$grandTotal of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpySalesOrderTotalsTableMap::COL_GRAND_TOTAL, $grandTotal, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $orderExpenseTotal Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOrderExpenseTotal_Between(array $orderExpenseTotal)
    {
        return $this->filterByOrderExpenseTotal($orderExpenseTotal, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $orderExpenseTotals Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOrderExpenseTotal_In(array $orderExpenseTotals)
    {
        return $this->filterByOrderExpenseTotal($orderExpenseTotals, Criteria::IN);
    }

    /**
     * Filter the query on the order_expense_total column
     *
     * Example usage:
     * <code>
     * $query->filterByOrderExpenseTotal(1234); // WHERE order_expense_total = 1234
     * $query->filterByOrderExpenseTotal(array(12, 34), Criteria::IN); // WHERE order_expense_total IN (12, 34)
     * $query->filterByOrderExpenseTotal(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE order_expense_total > 12
     * </code>
     *
     * @param     mixed $orderExpenseTotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByOrderExpenseTotal($orderExpenseTotal = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($orderExpenseTotal)) {
            $useMinMax = false;
            if (isset($orderExpenseTotal['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderTotalsTableMap::COL_ORDER_EXPENSE_TOTAL, $orderExpenseTotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($orderExpenseTotal['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderTotalsTableMap::COL_ORDER_EXPENSE_TOTAL, $orderExpenseTotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$orderExpenseTotal of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpySalesOrderTotalsTableMap::COL_ORDER_EXPENSE_TOTAL, $orderExpenseTotal, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $refundTotal Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByRefundTotal_Between(array $refundTotal)
    {
        return $this->filterByRefundTotal($refundTotal, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $refundTotals Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByRefundTotal_In(array $refundTotals)
    {
        return $this->filterByRefundTotal($refundTotals, Criteria::IN);
    }

    /**
     * Filter the query on the refund_total column
     *
     * Example usage:
     * <code>
     * $query->filterByRefundTotal(1234); // WHERE refund_total = 1234
     * $query->filterByRefundTotal(array(12, 34), Criteria::IN); // WHERE refund_total IN (12, 34)
     * $query->filterByRefundTotal(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE refund_total > 12
     * </code>
     *
     * @param     mixed $refundTotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByRefundTotal($refundTotal = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($refundTotal)) {
            $useMinMax = false;
            if (isset($refundTotal['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderTotalsTableMap::COL_REFUND_TOTAL, $refundTotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refundTotal['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderTotalsTableMap::COL_REFUND_TOTAL, $refundTotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$refundTotal of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpySalesOrderTotalsTableMap::COL_REFUND_TOTAL, $refundTotal, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $subtotal Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySubtotal_Between(array $subtotal)
    {
        return $this->filterBySubtotal($subtotal, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $subtotals Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySubtotal_In(array $subtotals)
    {
        return $this->filterBySubtotal($subtotals, Criteria::IN);
    }

    /**
     * Filter the query on the subtotal column
     *
     * Example usage:
     * <code>
     * $query->filterBySubtotal(1234); // WHERE subtotal = 1234
     * $query->filterBySubtotal(array(12, 34), Criteria::IN); // WHERE subtotal IN (12, 34)
     * $query->filterBySubtotal(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE subtotal > 12
     * </code>
     *
     * @param     mixed $subtotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterBySubtotal($subtotal = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($subtotal)) {
            $useMinMax = false;
            if (isset($subtotal['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderTotalsTableMap::COL_SUBTOTAL, $subtotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($subtotal['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderTotalsTableMap::COL_SUBTOTAL, $subtotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$subtotal of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpySalesOrderTotalsTableMap::COL_SUBTOTAL, $subtotal, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $taxTotal Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByTaxTotal_Between(array $taxTotal)
    {
        return $this->filterByTaxTotal($taxTotal, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $taxTotals Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByTaxTotal_In(array $taxTotals)
    {
        return $this->filterByTaxTotal($taxTotals, Criteria::IN);
    }

    /**
     * Filter the query on the tax_total column
     *
     * Example usage:
     * <code>
     * $query->filterByTaxTotal(1234); // WHERE tax_total = 1234
     * $query->filterByTaxTotal(array(12, 34), Criteria::IN); // WHERE tax_total IN (12, 34)
     * $query->filterByTaxTotal(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE tax_total > 12
     * </code>
     *
     * @param     mixed $taxTotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByTaxTotal($taxTotal = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($taxTotal)) {
            $useMinMax = false;
            if (isset($taxTotal['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderTotalsTableMap::COL_TAX_TOTAL, $taxTotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($taxTotal['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderTotalsTableMap::COL_TAX_TOTAL, $taxTotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$taxTotal of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpySalesOrderTotalsTableMap::COL_TAX_TOTAL, $taxTotal, $comparison);

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
                $this->addUsingAlias(SpySalesOrderTotalsTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderTotalsTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$createdAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpySalesOrderTotalsTableMap::COL_CREATED_AT, $createdAt, $comparison);

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
                $this->addUsingAlias(SpySalesOrderTotalsTableMap::COL_UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderTotalsTableMap::COL_UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$updatedAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpySalesOrderTotalsTableMap::COL_UPDATED_AT, $updatedAt, $comparison);

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
     * @return ChildSpySalesOrderTotalsQuery The current query, for fluid interface
     */
    public function filterByOrder($spySalesOrder, $comparison = null)
    {
        if ($spySalesOrder instanceof \Orm\Zed\Sales\Persistence\SpySalesOrder) {
            return $this
                ->addUsingAlias(SpySalesOrderTotalsTableMap::COL_FK_SALES_ORDER, $spySalesOrder->getIdSalesOrder(), $comparison);
        } elseif ($spySalesOrder instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpySalesOrderTotalsTableMap::COL_FK_SALES_ORDER, $spySalesOrder->toKeyValue('PrimaryKey', 'IdSalesOrder'), $comparison);
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
     * @return $this|ChildSpySalesOrderTotalsQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   ChildSpySalesOrderTotals $spySalesOrderTotals Object to remove from the list of results
     *
     * @return $this|ChildSpySalesOrderTotalsQuery The current query, for fluid interface
     */
    public function prune($spySalesOrderTotals = null)
    {
        if ($spySalesOrderTotals) {
            $this->addUsingAlias(SpySalesOrderTotalsTableMap::COL_ID_SALES_ORDER_TOTALS, $spySalesOrderTotals->getIdSalesOrderTotals(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_sales_order_totals table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpySalesOrderTotalsTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpySalesOrderTotalsTableMap::clearInstancePool();
            SpySalesOrderTotalsTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpySalesOrderTotalsTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpySalesOrderTotalsTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpySalesOrderTotalsTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpySalesOrderTotalsTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    // timestampable behavior

    /**
     * Filter by the latest updated
     *
     * @param      int $nbDays Maximum age of the latest update in days
     *
     * @return     $this|ChildSpySalesOrderTotalsQuery The current query, for fluid interface
     */
    public function recentlyUpdated($nbDays = 7)
    {
        return $this->addUsingAlias(SpySalesOrderTotalsTableMap::COL_UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by update date desc
     *
     * @return     $this|ChildSpySalesOrderTotalsQuery The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        return $this->addDescendingOrderByColumn(SpySalesOrderTotalsTableMap::COL_UPDATED_AT);
    }

    /**
     * Order by update date asc
     *
     * @return     $this|ChildSpySalesOrderTotalsQuery The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        return $this->addAscendingOrderByColumn(SpySalesOrderTotalsTableMap::COL_UPDATED_AT);
    }

    /**
     * Order by create date desc
     *
     * @return     $this|ChildSpySalesOrderTotalsQuery The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        return $this->addDescendingOrderByColumn(SpySalesOrderTotalsTableMap::COL_CREATED_AT);
    }

    /**
     * Filter by the latest created
     *
     * @param      int $nbDays Maximum age of in days
     *
     * @return     $this|ChildSpySalesOrderTotalsQuery The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        return $this->addUsingAlias(SpySalesOrderTotalsTableMap::COL_CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by create date asc
     *
     * @return     $this|ChildSpySalesOrderTotalsQuery The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        return $this->addAscendingOrderByColumn(SpySalesOrderTotalsTableMap::COL_CREATED_AT);
    }

} // SpySalesOrderTotalsQuery
