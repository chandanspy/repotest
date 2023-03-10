<?php

namespace Orm\Zed\SalesInvoice\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\SalesInvoice\Persistence\SpySalesOrderInvoice as ChildSpySalesOrderInvoice;
use Orm\Zed\SalesInvoice\Persistence\SpySalesOrderInvoiceQuery as ChildSpySalesOrderInvoiceQuery;
use Orm\Zed\SalesInvoice\Persistence\Map\SpySalesOrderInvoiceTableMap;
use Orm\Zed\Sales\Persistence\SpySalesOrder;
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
 * Base class that represents a query for the 'spy_sales_order_invoice' table.
 *
 *
 *
 * @method     ChildSpySalesOrderInvoiceQuery orderByIdSalesOrderInvoice($order = Criteria::ASC) Order by the id_sales_order_invoice column
 * @method     ChildSpySalesOrderInvoiceQuery orderByFkSalesOrder($order = Criteria::ASC) Order by the fk_sales_order column
 * @method     ChildSpySalesOrderInvoiceQuery orderByReference($order = Criteria::ASC) Order by the reference column
 * @method     ChildSpySalesOrderInvoiceQuery orderByIssueDate($order = Criteria::ASC) Order by the issue_date column
 * @method     ChildSpySalesOrderInvoiceQuery orderByTemplatePath($order = Criteria::ASC) Order by the template_path column
 * @method     ChildSpySalesOrderInvoiceQuery orderByEmailSent($order = Criteria::ASC) Order by the email_sent column
 * @method     ChildSpySalesOrderInvoiceQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildSpySalesOrderInvoiceQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ChildSpySalesOrderInvoiceQuery groupByIdSalesOrderInvoice() Group by the id_sales_order_invoice column
 * @method     ChildSpySalesOrderInvoiceQuery groupByFkSalesOrder() Group by the fk_sales_order column
 * @method     ChildSpySalesOrderInvoiceQuery groupByReference() Group by the reference column
 * @method     ChildSpySalesOrderInvoiceQuery groupByIssueDate() Group by the issue_date column
 * @method     ChildSpySalesOrderInvoiceQuery groupByTemplatePath() Group by the template_path column
 * @method     ChildSpySalesOrderInvoiceQuery groupByEmailSent() Group by the email_sent column
 * @method     ChildSpySalesOrderInvoiceQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildSpySalesOrderInvoiceQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ChildSpySalesOrderInvoiceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpySalesOrderInvoiceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpySalesOrderInvoiceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpySalesOrderInvoiceQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpySalesOrderInvoiceQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpySalesOrderInvoiceQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpySalesOrderInvoiceQuery leftJoinSpySalesOrder($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpySalesOrder relation
 * @method     ChildSpySalesOrderInvoiceQuery rightJoinSpySalesOrder($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpySalesOrder relation
 * @method     ChildSpySalesOrderInvoiceQuery innerJoinSpySalesOrder($relationAlias = null) Adds a INNER JOIN clause to the query using the SpySalesOrder relation
 *
 * @method     ChildSpySalesOrderInvoiceQuery joinWithSpySalesOrder($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpySalesOrder relation
 *
 * @method     ChildSpySalesOrderInvoiceQuery leftJoinWithSpySalesOrder() Adds a LEFT JOIN clause and with to the query using the SpySalesOrder relation
 * @method     ChildSpySalesOrderInvoiceQuery rightJoinWithSpySalesOrder() Adds a RIGHT JOIN clause and with to the query using the SpySalesOrder relation
 * @method     ChildSpySalesOrderInvoiceQuery innerJoinWithSpySalesOrder() Adds a INNER JOIN clause and with to the query using the SpySalesOrder relation
 *
 * @method     \Orm\Zed\Sales\Persistence\SpySalesOrderQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpySalesOrderInvoice|null findOne(ConnectionInterface $con = null) Return the first ChildSpySalesOrderInvoice matching the query
 * @method     ChildSpySalesOrderInvoice findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpySalesOrderInvoice matching the query, or a new ChildSpySalesOrderInvoice object populated from the query conditions when no match is found
 *
 * @method     ChildSpySalesOrderInvoice|null findOneByIdSalesOrderInvoice(int $id_sales_order_invoice) Return the first ChildSpySalesOrderInvoice filtered by the id_sales_order_invoice column
 * @method     ChildSpySalesOrderInvoice|null findOneByFkSalesOrder(int $fk_sales_order) Return the first ChildSpySalesOrderInvoice filtered by the fk_sales_order column
 * @method     ChildSpySalesOrderInvoice|null findOneByReference(string $reference) Return the first ChildSpySalesOrderInvoice filtered by the reference column
 * @method     ChildSpySalesOrderInvoice|null findOneByIssueDate(string $issue_date) Return the first ChildSpySalesOrderInvoice filtered by the issue_date column
 * @method     ChildSpySalesOrderInvoice|null findOneByTemplatePath(string $template_path) Return the first ChildSpySalesOrderInvoice filtered by the template_path column
 * @method     ChildSpySalesOrderInvoice|null findOneByEmailSent(boolean $email_sent) Return the first ChildSpySalesOrderInvoice filtered by the email_sent column
 * @method     ChildSpySalesOrderInvoice|null findOneByCreatedAt(string $created_at) Return the first ChildSpySalesOrderInvoice filtered by the created_at column
 * @method     ChildSpySalesOrderInvoice|null findOneByUpdatedAt(string $updated_at) Return the first ChildSpySalesOrderInvoice filtered by the updated_at column *

 * @method     ChildSpySalesOrderInvoice requirePk($key, ConnectionInterface $con = null) Return the ChildSpySalesOrderInvoice by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesOrderInvoice requireOne(ConnectionInterface $con = null) Return the first ChildSpySalesOrderInvoice matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpySalesOrderInvoice requireOneByIdSalesOrderInvoice(int $id_sales_order_invoice) Return the first ChildSpySalesOrderInvoice filtered by the id_sales_order_invoice column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesOrderInvoice requireOneByFkSalesOrder(int $fk_sales_order) Return the first ChildSpySalesOrderInvoice filtered by the fk_sales_order column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesOrderInvoice requireOneByReference(string $reference) Return the first ChildSpySalesOrderInvoice filtered by the reference column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesOrderInvoice requireOneByIssueDate(string $issue_date) Return the first ChildSpySalesOrderInvoice filtered by the issue_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesOrderInvoice requireOneByTemplatePath(string $template_path) Return the first ChildSpySalesOrderInvoice filtered by the template_path column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesOrderInvoice requireOneByEmailSent(boolean $email_sent) Return the first ChildSpySalesOrderInvoice filtered by the email_sent column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesOrderInvoice requireOneByCreatedAt(string $created_at) Return the first ChildSpySalesOrderInvoice filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesOrderInvoice requireOneByUpdatedAt(string $updated_at) Return the first ChildSpySalesOrderInvoice filtered by the updated_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpySalesOrderInvoice[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpySalesOrderInvoice objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpySalesOrderInvoice> find(ConnectionInterface $con = null) Return ChildSpySalesOrderInvoice objects based on current ModelCriteria
 * @method     ChildSpySalesOrderInvoice[]|ObjectCollection findByIdSalesOrderInvoice(int $id_sales_order_invoice) Return ChildSpySalesOrderInvoice objects filtered by the id_sales_order_invoice column
 * @psalm-method ObjectCollection&\Traversable<ChildSpySalesOrderInvoice> findByIdSalesOrderInvoice(int $id_sales_order_invoice) Return ChildSpySalesOrderInvoice objects filtered by the id_sales_order_invoice column
 * @method     ChildSpySalesOrderInvoice[]|ObjectCollection findByFkSalesOrder(int $fk_sales_order) Return ChildSpySalesOrderInvoice objects filtered by the fk_sales_order column
 * @psalm-method ObjectCollection&\Traversable<ChildSpySalesOrderInvoice> findByFkSalesOrder(int $fk_sales_order) Return ChildSpySalesOrderInvoice objects filtered by the fk_sales_order column
 * @method     ChildSpySalesOrderInvoice[]|ObjectCollection findByReference(string $reference) Return ChildSpySalesOrderInvoice objects filtered by the reference column
 * @psalm-method ObjectCollection&\Traversable<ChildSpySalesOrderInvoice> findByReference(string $reference) Return ChildSpySalesOrderInvoice objects filtered by the reference column
 * @method     ChildSpySalesOrderInvoice[]|ObjectCollection findByIssueDate(string $issue_date) Return ChildSpySalesOrderInvoice objects filtered by the issue_date column
 * @psalm-method ObjectCollection&\Traversable<ChildSpySalesOrderInvoice> findByIssueDate(string $issue_date) Return ChildSpySalesOrderInvoice objects filtered by the issue_date column
 * @method     ChildSpySalesOrderInvoice[]|ObjectCollection findByTemplatePath(string $template_path) Return ChildSpySalesOrderInvoice objects filtered by the template_path column
 * @psalm-method ObjectCollection&\Traversable<ChildSpySalesOrderInvoice> findByTemplatePath(string $template_path) Return ChildSpySalesOrderInvoice objects filtered by the template_path column
 * @method     ChildSpySalesOrderInvoice[]|ObjectCollection findByEmailSent(boolean $email_sent) Return ChildSpySalesOrderInvoice objects filtered by the email_sent column
 * @psalm-method ObjectCollection&\Traversable<ChildSpySalesOrderInvoice> findByEmailSent(boolean $email_sent) Return ChildSpySalesOrderInvoice objects filtered by the email_sent column
 * @method     ChildSpySalesOrderInvoice[]|ObjectCollection findByCreatedAt(string $created_at) Return ChildSpySalesOrderInvoice objects filtered by the created_at column
 * @psalm-method ObjectCollection&\Traversable<ChildSpySalesOrderInvoice> findByCreatedAt(string $created_at) Return ChildSpySalesOrderInvoice objects filtered by the created_at column
 * @method     ChildSpySalesOrderInvoice[]|ObjectCollection findByUpdatedAt(string $updated_at) Return ChildSpySalesOrderInvoice objects filtered by the updated_at column
 * @psalm-method ObjectCollection&\Traversable<ChildSpySalesOrderInvoice> findByUpdatedAt(string $updated_at) Return ChildSpySalesOrderInvoice objects filtered by the updated_at column
 * @method     ChildSpySalesOrderInvoice[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpySalesOrderInvoice> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpySalesOrderInvoiceQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\SalesInvoice\Persistence\Base\SpySalesOrderInvoiceQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\SalesInvoice\\Persistence\\SpySalesOrderInvoice', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpySalesOrderInvoiceQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpySalesOrderInvoiceQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpySalesOrderInvoiceQuery) {
            return $criteria;
        }
        $query = new ChildSpySalesOrderInvoiceQuery();
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
     * @return ChildSpySalesOrderInvoice|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpySalesOrderInvoiceTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpySalesOrderInvoice A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_sales_order_invoice, fk_sales_order, reference, issue_date, template_path, email_sent, created_at, updated_at FROM spy_sales_order_invoice WHERE id_sales_order_invoice = :p0';
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
            /** @var ChildSpySalesOrderInvoice $obj */
            $obj = new ChildSpySalesOrderInvoice();
            $obj->hydrate($row);
            SpySalesOrderInvoiceTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpySalesOrderInvoice|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpySalesOrderInvoiceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpySalesOrderInvoiceTableMap::COL_ID_SALES_ORDER_INVOICE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpySalesOrderInvoiceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpySalesOrderInvoiceTableMap::COL_ID_SALES_ORDER_INVOICE, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idSalesOrderInvoice Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdSalesOrderInvoice_Between(array $idSalesOrderInvoice)
    {
        return $this->filterByIdSalesOrderInvoice($idSalesOrderInvoice, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idSalesOrderInvoices Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdSalesOrderInvoice_In(array $idSalesOrderInvoices)
    {
        return $this->filterByIdSalesOrderInvoice($idSalesOrderInvoices, Criteria::IN);
    }

    /**
     * Filter the query on the id_sales_order_invoice column
     *
     * Example usage:
     * <code>
     * $query->filterByIdSalesOrderInvoice(1234); // WHERE id_sales_order_invoice = 1234
     * $query->filterByIdSalesOrderInvoice(array(12, 34), Criteria::IN); // WHERE id_sales_order_invoice IN (12, 34)
     * $query->filterByIdSalesOrderInvoice(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_sales_order_invoice > 12
     * </code>
     *
     * @param     mixed $idSalesOrderInvoice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdSalesOrderInvoice($idSalesOrderInvoice = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idSalesOrderInvoice)) {
            $useMinMax = false;
            if (isset($idSalesOrderInvoice['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderInvoiceTableMap::COL_ID_SALES_ORDER_INVOICE, $idSalesOrderInvoice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idSalesOrderInvoice['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderInvoiceTableMap::COL_ID_SALES_ORDER_INVOICE, $idSalesOrderInvoice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idSalesOrderInvoice of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpySalesOrderInvoiceTableMap::COL_ID_SALES_ORDER_INVOICE, $idSalesOrderInvoice, $comparison);

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
     * @see       filterBySpySalesOrder()
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
                $this->addUsingAlias(SpySalesOrderInvoiceTableMap::COL_FK_SALES_ORDER, $fkSalesOrder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkSalesOrder['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderInvoiceTableMap::COL_FK_SALES_ORDER, $fkSalesOrder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkSalesOrder of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpySalesOrderInvoiceTableMap::COL_FK_SALES_ORDER, $fkSalesOrder, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $references Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByReference_In(array $references)
    {
        return $this->filterByReference($references, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $reference Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByReference_Like($reference)
    {
        return $this->filterByReference($reference, Criteria::LIKE);
    }

    /**
     * Filter the query on the reference column
     *
     * Example usage:
     * <code>
     * $query->filterByReference('fooValue');   // WHERE reference = 'fooValue'
     * $query->filterByReference('%fooValue%', Criteria::LIKE); // WHERE reference LIKE '%fooValue%'
     * $query->filterByReference([1, 'foo'], Criteria::IN); // WHERE reference IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $reference The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByReference($reference = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $reference = str_replace('*', '%', $reference);
        }

        if (is_array($reference) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$reference of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpySalesOrderInvoiceTableMap::COL_REFERENCE, $reference, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $issueDate Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIssueDate_Between(array $issueDate)
    {
        return $this->filterByIssueDate($issueDate, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $issueDates Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIssueDate_In(array $issueDates)
    {
        return $this->filterByIssueDate($issueDates, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $issueDate Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIssueDate_Like($issueDate)
    {
        return $this->filterByIssueDate($issueDate, Criteria::LIKE);
    }

    /**
     * Filter the query on the issue_date column
     *
     * Example usage:
     * <code>
     * $query->filterByIssueDate('2011-03-14'); // WHERE issue_date = '2011-03-14'
     * $query->filterByIssueDate('now'); // WHERE issue_date = '2011-03-14'
     * $query->filterByIssueDate(array('max' => 'yesterday'), SprykerCriteria::BETWEEN); // WHERE issue_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $issueDate The value to use as filter.
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
    public function filterByIssueDate($issueDate = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($issueDate)) {
            $useMinMax = false;
            if (isset($issueDate['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderInvoiceTableMap::COL_ISSUE_DATE, $issueDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($issueDate['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderInvoiceTableMap::COL_ISSUE_DATE, $issueDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$issueDate of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpySalesOrderInvoiceTableMap::COL_ISSUE_DATE, $issueDate, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $templatePaths Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByTemplatePath_In(array $templatePaths)
    {
        return $this->filterByTemplatePath($templatePaths, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $templatePath Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByTemplatePath_Like($templatePath)
    {
        return $this->filterByTemplatePath($templatePath, Criteria::LIKE);
    }

    /**
     * Filter the query on the template_path column
     *
     * Example usage:
     * <code>
     * $query->filterByTemplatePath('fooValue');   // WHERE template_path = 'fooValue'
     * $query->filterByTemplatePath('%fooValue%', Criteria::LIKE); // WHERE template_path LIKE '%fooValue%'
     * $query->filterByTemplatePath([1, 'foo'], Criteria::IN); // WHERE template_path IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $templatePath The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByTemplatePath($templatePath = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $templatePath = str_replace('*', '%', $templatePath);
        }

        if (is_array($templatePath) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$templatePath of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpySalesOrderInvoiceTableMap::COL_TEMPLATE_PATH, $templatePath, $comparison);

        return $query;
    }

    /**
     * Filter the query on the email_sent column
     *
     * Example usage:
     * <code>
     * $query->filterByEmailSent(true); // WHERE email_sent = true
     * $query->filterByEmailSent('yes'); // WHERE email_sent = true
     * </code>
     *
     * @param     bool|string $emailSent The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByEmailSent($emailSent = null, $comparison = Criteria::EQUAL)
    {
        if (is_string($emailSent)) {
            $emailSent = in_array(strtolower($emailSent), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        $query = $this->addUsingAlias(SpySalesOrderInvoiceTableMap::COL_EMAIL_SENT, $emailSent, $comparison);

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
                $this->addUsingAlias(SpySalesOrderInvoiceTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderInvoiceTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$createdAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpySalesOrderInvoiceTableMap::COL_CREATED_AT, $createdAt, $comparison);

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
                $this->addUsingAlias(SpySalesOrderInvoiceTableMap::COL_UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderInvoiceTableMap::COL_UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$updatedAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpySalesOrderInvoiceTableMap::COL_UPDATED_AT, $updatedAt, $comparison);

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
     * @return ChildSpySalesOrderInvoiceQuery The current query, for fluid interface
     */
    public function filterBySpySalesOrder($spySalesOrder, $comparison = null)
    {
        if ($spySalesOrder instanceof \Orm\Zed\Sales\Persistence\SpySalesOrder) {
            return $this
                ->addUsingAlias(SpySalesOrderInvoiceTableMap::COL_FK_SALES_ORDER, $spySalesOrder->getIdSalesOrder(), $comparison);
        } elseif ($spySalesOrder instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpySalesOrderInvoiceTableMap::COL_FK_SALES_ORDER, $spySalesOrder->toKeyValue('PrimaryKey', 'IdSalesOrder'), $comparison);
        } else {
            throw new PropelException('filterBySpySalesOrder() only accepts arguments of type \Orm\Zed\Sales\Persistence\SpySalesOrder or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpySalesOrder relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpySalesOrderInvoiceQuery The current query, for fluid interface
     */
    public function joinSpySalesOrder($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpySalesOrder');

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
            $this->addJoinObject($join, 'SpySalesOrder');
        }

        return $this;
    }

    /**
     * Use the SpySalesOrder relation SpySalesOrder object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Sales\Persistence\SpySalesOrderQuery A secondary query class using the current class as primary query
     */
    public function useSpySalesOrderQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpySalesOrder($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpySalesOrder', '\Orm\Zed\Sales\Persistence\SpySalesOrderQuery');
    }

    /**
     * Use the SpySalesOrder relation SpySalesOrder object
     *
     * @param callable(\Orm\Zed\Sales\Persistence\SpySalesOrderQuery):\Orm\Zed\Sales\Persistence\SpySalesOrderQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpySalesOrderQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpySalesOrderQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpySalesOrder table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Sales\Persistence\SpySalesOrderQuery The inner query object of the EXISTS statement
     */
    public function useSpySalesOrderExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpySalesOrder', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpySalesOrder table for a NOT EXISTS query.
     *
     * @see useSpySalesOrderExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Sales\Persistence\SpySalesOrderQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpySalesOrderNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpySalesOrder', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Exclude object from result
     *
     * @param   ChildSpySalesOrderInvoice $spySalesOrderInvoice Object to remove from the list of results
     *
     * @return $this|ChildSpySalesOrderInvoiceQuery The current query, for fluid interface
     */
    public function prune($spySalesOrderInvoice = null)
    {
        if ($spySalesOrderInvoice) {
            $this->addUsingAlias(SpySalesOrderInvoiceTableMap::COL_ID_SALES_ORDER_INVOICE, $spySalesOrderInvoice->getIdSalesOrderInvoice(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_sales_order_invoice table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpySalesOrderInvoiceTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpySalesOrderInvoiceTableMap::clearInstancePool();
            SpySalesOrderInvoiceTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpySalesOrderInvoiceTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpySalesOrderInvoiceTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpySalesOrderInvoiceTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpySalesOrderInvoiceTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    // timestampable behavior

    /**
     * Filter by the latest updated
     *
     * @param      int $nbDays Maximum age of the latest update in days
     *
     * @return     $this|ChildSpySalesOrderInvoiceQuery The current query, for fluid interface
     */
    public function recentlyUpdated($nbDays = 7)
    {
        return $this->addUsingAlias(SpySalesOrderInvoiceTableMap::COL_UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by update date desc
     *
     * @return     $this|ChildSpySalesOrderInvoiceQuery The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        return $this->addDescendingOrderByColumn(SpySalesOrderInvoiceTableMap::COL_UPDATED_AT);
    }

    /**
     * Order by update date asc
     *
     * @return     $this|ChildSpySalesOrderInvoiceQuery The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        return $this->addAscendingOrderByColumn(SpySalesOrderInvoiceTableMap::COL_UPDATED_AT);
    }

    /**
     * Order by create date desc
     *
     * @return     $this|ChildSpySalesOrderInvoiceQuery The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        return $this->addDescendingOrderByColumn(SpySalesOrderInvoiceTableMap::COL_CREATED_AT);
    }

    /**
     * Filter by the latest created
     *
     * @param      int $nbDays Maximum age of in days
     *
     * @return     $this|ChildSpySalesOrderInvoiceQuery The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        return $this->addUsingAlias(SpySalesOrderInvoiceTableMap::COL_CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by create date asc
     *
     * @return     $this|ChildSpySalesOrderInvoiceQuery The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        return $this->addAscendingOrderByColumn(SpySalesOrderInvoiceTableMap::COL_CREATED_AT);
    }

} // SpySalesOrderInvoiceQuery
