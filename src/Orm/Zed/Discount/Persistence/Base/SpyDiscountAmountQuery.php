<?php

namespace Orm\Zed\Discount\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\Currency\Persistence\SpyCurrency;
use Orm\Zed\Discount\Persistence\SpyDiscountAmount as ChildSpyDiscountAmount;
use Orm\Zed\Discount\Persistence\SpyDiscountAmountQuery as ChildSpyDiscountAmountQuery;
use Orm\Zed\Discount\Persistence\Map\SpyDiscountAmountTableMap;
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
 * Base class that represents a query for the 'spy_discount_amount' table.
 *
 *
 *
 * @method     ChildSpyDiscountAmountQuery orderByIdDiscountAmount($order = Criteria::ASC) Order by the id_discount_amount column
 * @method     ChildSpyDiscountAmountQuery orderByFkCurrency($order = Criteria::ASC) Order by the fk_currency column
 * @method     ChildSpyDiscountAmountQuery orderByFkDiscount($order = Criteria::ASC) Order by the fk_discount column
 * @method     ChildSpyDiscountAmountQuery orderByGrossAmount($order = Criteria::ASC) Order by the gross_amount column
 * @method     ChildSpyDiscountAmountQuery orderByNetAmount($order = Criteria::ASC) Order by the net_amount column
 *
 * @method     ChildSpyDiscountAmountQuery groupByIdDiscountAmount() Group by the id_discount_amount column
 * @method     ChildSpyDiscountAmountQuery groupByFkCurrency() Group by the fk_currency column
 * @method     ChildSpyDiscountAmountQuery groupByFkDiscount() Group by the fk_discount column
 * @method     ChildSpyDiscountAmountQuery groupByGrossAmount() Group by the gross_amount column
 * @method     ChildSpyDiscountAmountQuery groupByNetAmount() Group by the net_amount column
 *
 * @method     ChildSpyDiscountAmountQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyDiscountAmountQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyDiscountAmountQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyDiscountAmountQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyDiscountAmountQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyDiscountAmountQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyDiscountAmountQuery leftJoinCurrency($relationAlias = null) Adds a LEFT JOIN clause to the query using the Currency relation
 * @method     ChildSpyDiscountAmountQuery rightJoinCurrency($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Currency relation
 * @method     ChildSpyDiscountAmountQuery innerJoinCurrency($relationAlias = null) Adds a INNER JOIN clause to the query using the Currency relation
 *
 * @method     ChildSpyDiscountAmountQuery joinWithCurrency($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Currency relation
 *
 * @method     ChildSpyDiscountAmountQuery leftJoinWithCurrency() Adds a LEFT JOIN clause and with to the query using the Currency relation
 * @method     ChildSpyDiscountAmountQuery rightJoinWithCurrency() Adds a RIGHT JOIN clause and with to the query using the Currency relation
 * @method     ChildSpyDiscountAmountQuery innerJoinWithCurrency() Adds a INNER JOIN clause and with to the query using the Currency relation
 *
 * @method     ChildSpyDiscountAmountQuery leftJoinDiscount($relationAlias = null) Adds a LEFT JOIN clause to the query using the Discount relation
 * @method     ChildSpyDiscountAmountQuery rightJoinDiscount($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Discount relation
 * @method     ChildSpyDiscountAmountQuery innerJoinDiscount($relationAlias = null) Adds a INNER JOIN clause to the query using the Discount relation
 *
 * @method     ChildSpyDiscountAmountQuery joinWithDiscount($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Discount relation
 *
 * @method     ChildSpyDiscountAmountQuery leftJoinWithDiscount() Adds a LEFT JOIN clause and with to the query using the Discount relation
 * @method     ChildSpyDiscountAmountQuery rightJoinWithDiscount() Adds a RIGHT JOIN clause and with to the query using the Discount relation
 * @method     ChildSpyDiscountAmountQuery innerJoinWithDiscount() Adds a INNER JOIN clause and with to the query using the Discount relation
 *
 * @method     \Orm\Zed\Currency\Persistence\SpyCurrencyQuery|\Orm\Zed\Discount\Persistence\SpyDiscountQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyDiscountAmount|null findOne(ConnectionInterface $con = null) Return the first ChildSpyDiscountAmount matching the query
 * @method     ChildSpyDiscountAmount findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyDiscountAmount matching the query, or a new ChildSpyDiscountAmount object populated from the query conditions when no match is found
 *
 * @method     ChildSpyDiscountAmount|null findOneByIdDiscountAmount(int $id_discount_amount) Return the first ChildSpyDiscountAmount filtered by the id_discount_amount column
 * @method     ChildSpyDiscountAmount|null findOneByFkCurrency(int $fk_currency) Return the first ChildSpyDiscountAmount filtered by the fk_currency column
 * @method     ChildSpyDiscountAmount|null findOneByFkDiscount(int $fk_discount) Return the first ChildSpyDiscountAmount filtered by the fk_discount column
 * @method     ChildSpyDiscountAmount|null findOneByGrossAmount(int $gross_amount) Return the first ChildSpyDiscountAmount filtered by the gross_amount column
 * @method     ChildSpyDiscountAmount|null findOneByNetAmount(int $net_amount) Return the first ChildSpyDiscountAmount filtered by the net_amount column *

 * @method     ChildSpyDiscountAmount requirePk($key, ConnectionInterface $con = null) Return the ChildSpyDiscountAmount by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyDiscountAmount requireOne(ConnectionInterface $con = null) Return the first ChildSpyDiscountAmount matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyDiscountAmount requireOneByIdDiscountAmount(int $id_discount_amount) Return the first ChildSpyDiscountAmount filtered by the id_discount_amount column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyDiscountAmount requireOneByFkCurrency(int $fk_currency) Return the first ChildSpyDiscountAmount filtered by the fk_currency column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyDiscountAmount requireOneByFkDiscount(int $fk_discount) Return the first ChildSpyDiscountAmount filtered by the fk_discount column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyDiscountAmount requireOneByGrossAmount(int $gross_amount) Return the first ChildSpyDiscountAmount filtered by the gross_amount column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyDiscountAmount requireOneByNetAmount(int $net_amount) Return the first ChildSpyDiscountAmount filtered by the net_amount column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyDiscountAmount[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyDiscountAmount objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyDiscountAmount> find(ConnectionInterface $con = null) Return ChildSpyDiscountAmount objects based on current ModelCriteria
 * @method     ChildSpyDiscountAmount[]|ObjectCollection findByIdDiscountAmount(int $id_discount_amount) Return ChildSpyDiscountAmount objects filtered by the id_discount_amount column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyDiscountAmount> findByIdDiscountAmount(int $id_discount_amount) Return ChildSpyDiscountAmount objects filtered by the id_discount_amount column
 * @method     ChildSpyDiscountAmount[]|ObjectCollection findByFkCurrency(int $fk_currency) Return ChildSpyDiscountAmount objects filtered by the fk_currency column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyDiscountAmount> findByFkCurrency(int $fk_currency) Return ChildSpyDiscountAmount objects filtered by the fk_currency column
 * @method     ChildSpyDiscountAmount[]|ObjectCollection findByFkDiscount(int $fk_discount) Return ChildSpyDiscountAmount objects filtered by the fk_discount column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyDiscountAmount> findByFkDiscount(int $fk_discount) Return ChildSpyDiscountAmount objects filtered by the fk_discount column
 * @method     ChildSpyDiscountAmount[]|ObjectCollection findByGrossAmount(int $gross_amount) Return ChildSpyDiscountAmount objects filtered by the gross_amount column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyDiscountAmount> findByGrossAmount(int $gross_amount) Return ChildSpyDiscountAmount objects filtered by the gross_amount column
 * @method     ChildSpyDiscountAmount[]|ObjectCollection findByNetAmount(int $net_amount) Return ChildSpyDiscountAmount objects filtered by the net_amount column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyDiscountAmount> findByNetAmount(int $net_amount) Return ChildSpyDiscountAmount objects filtered by the net_amount column
 * @method     ChildSpyDiscountAmount[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyDiscountAmount> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyDiscountAmountQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\Discount\Persistence\Base\SpyDiscountAmountQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\Discount\\Persistence\\SpyDiscountAmount', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyDiscountAmountQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyDiscountAmountQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyDiscountAmountQuery) {
            return $criteria;
        }
        $query = new ChildSpyDiscountAmountQuery();
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
     * @return ChildSpyDiscountAmount|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyDiscountAmountTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyDiscountAmount A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_discount_amount, fk_currency, fk_discount, gross_amount, net_amount FROM spy_discount_amount WHERE id_discount_amount = :p0';
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
            /** @var ChildSpyDiscountAmount $obj */
            $obj = new ChildSpyDiscountAmount();
            $obj->hydrate($row);
            SpyDiscountAmountTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyDiscountAmount|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyDiscountAmountQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyDiscountAmountTableMap::COL_ID_DISCOUNT_AMOUNT, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyDiscountAmountQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyDiscountAmountTableMap::COL_ID_DISCOUNT_AMOUNT, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idDiscountAmount Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdDiscountAmount_Between(array $idDiscountAmount)
    {
        return $this->filterByIdDiscountAmount($idDiscountAmount, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idDiscountAmounts Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdDiscountAmount_In(array $idDiscountAmounts)
    {
        return $this->filterByIdDiscountAmount($idDiscountAmounts, Criteria::IN);
    }

    /**
     * Filter the query on the id_discount_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDiscountAmount(1234); // WHERE id_discount_amount = 1234
     * $query->filterByIdDiscountAmount(array(12, 34), Criteria::IN); // WHERE id_discount_amount IN (12, 34)
     * $query->filterByIdDiscountAmount(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_discount_amount > 12
     * </code>
     *
     * @param     mixed $idDiscountAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdDiscountAmount($idDiscountAmount = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idDiscountAmount)) {
            $useMinMax = false;
            if (isset($idDiscountAmount['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyDiscountAmountTableMap::COL_ID_DISCOUNT_AMOUNT, $idDiscountAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDiscountAmount['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyDiscountAmountTableMap::COL_ID_DISCOUNT_AMOUNT, $idDiscountAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idDiscountAmount of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyDiscountAmountTableMap::COL_ID_DISCOUNT_AMOUNT, $idDiscountAmount, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkCurrency Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkCurrency_Between(array $fkCurrency)
    {
        return $this->filterByFkCurrency($fkCurrency, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkCurrencys Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkCurrency_In(array $fkCurrencys)
    {
        return $this->filterByFkCurrency($fkCurrencys, Criteria::IN);
    }

    /**
     * Filter the query on the fk_currency column
     *
     * Example usage:
     * <code>
     * $query->filterByFkCurrency(1234); // WHERE fk_currency = 1234
     * $query->filterByFkCurrency(array(12, 34), Criteria::IN); // WHERE fk_currency IN (12, 34)
     * $query->filterByFkCurrency(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_currency > 12
     * </code>
     *
     * @see       filterByCurrency()
     *
     * @param     mixed $fkCurrency The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkCurrency($fkCurrency = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkCurrency)) {
            $useMinMax = false;
            if (isset($fkCurrency['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyDiscountAmountTableMap::COL_FK_CURRENCY, $fkCurrency['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkCurrency['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyDiscountAmountTableMap::COL_FK_CURRENCY, $fkCurrency['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkCurrency of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyDiscountAmountTableMap::COL_FK_CURRENCY, $fkCurrency, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkDiscount Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkDiscount_Between(array $fkDiscount)
    {
        return $this->filterByFkDiscount($fkDiscount, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkDiscounts Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkDiscount_In(array $fkDiscounts)
    {
        return $this->filterByFkDiscount($fkDiscounts, Criteria::IN);
    }

    /**
     * Filter the query on the fk_discount column
     *
     * Example usage:
     * <code>
     * $query->filterByFkDiscount(1234); // WHERE fk_discount = 1234
     * $query->filterByFkDiscount(array(12, 34), Criteria::IN); // WHERE fk_discount IN (12, 34)
     * $query->filterByFkDiscount(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_discount > 12
     * </code>
     *
     * @see       filterByDiscount()
     *
     * @param     mixed $fkDiscount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkDiscount($fkDiscount = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkDiscount)) {
            $useMinMax = false;
            if (isset($fkDiscount['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyDiscountAmountTableMap::COL_FK_DISCOUNT, $fkDiscount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkDiscount['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyDiscountAmountTableMap::COL_FK_DISCOUNT, $fkDiscount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkDiscount of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyDiscountAmountTableMap::COL_FK_DISCOUNT, $fkDiscount, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $grossAmount Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGrossAmount_Between(array $grossAmount)
    {
        return $this->filterByGrossAmount($grossAmount, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $grossAmounts Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGrossAmount_In(array $grossAmounts)
    {
        return $this->filterByGrossAmount($grossAmounts, Criteria::IN);
    }

    /**
     * Filter the query on the gross_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByGrossAmount(1234); // WHERE gross_amount = 1234
     * $query->filterByGrossAmount(array(12, 34), Criteria::IN); // WHERE gross_amount IN (12, 34)
     * $query->filterByGrossAmount(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE gross_amount > 12
     * </code>
     *
     * @param     mixed $grossAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByGrossAmount($grossAmount = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($grossAmount)) {
            $useMinMax = false;
            if (isset($grossAmount['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyDiscountAmountTableMap::COL_GROSS_AMOUNT, $grossAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($grossAmount['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyDiscountAmountTableMap::COL_GROSS_AMOUNT, $grossAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$grossAmount of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyDiscountAmountTableMap::COL_GROSS_AMOUNT, $grossAmount, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $netAmount Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByNetAmount_Between(array $netAmount)
    {
        return $this->filterByNetAmount($netAmount, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $netAmounts Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByNetAmount_In(array $netAmounts)
    {
        return $this->filterByNetAmount($netAmounts, Criteria::IN);
    }

    /**
     * Filter the query on the net_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByNetAmount(1234); // WHERE net_amount = 1234
     * $query->filterByNetAmount(array(12, 34), Criteria::IN); // WHERE net_amount IN (12, 34)
     * $query->filterByNetAmount(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE net_amount > 12
     * </code>
     *
     * @param     mixed $netAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByNetAmount($netAmount = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($netAmount)) {
            $useMinMax = false;
            if (isset($netAmount['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyDiscountAmountTableMap::COL_NET_AMOUNT, $netAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($netAmount['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyDiscountAmountTableMap::COL_NET_AMOUNT, $netAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$netAmount of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyDiscountAmountTableMap::COL_NET_AMOUNT, $netAmount, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\Currency\Persistence\SpyCurrency object
     *
     * @param \Orm\Zed\Currency\Persistence\SpyCurrency|ObjectCollection $spyCurrency The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyDiscountAmountQuery The current query, for fluid interface
     */
    public function filterByCurrency($spyCurrency, $comparison = null)
    {
        if ($spyCurrency instanceof \Orm\Zed\Currency\Persistence\SpyCurrency) {
            return $this
                ->addUsingAlias(SpyDiscountAmountTableMap::COL_FK_CURRENCY, $spyCurrency->getIdCurrency(), $comparison);
        } elseif ($spyCurrency instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyDiscountAmountTableMap::COL_FK_CURRENCY, $spyCurrency->toKeyValue('PrimaryKey', 'IdCurrency'), $comparison);
        } else {
            throw new PropelException('filterByCurrency() only accepts arguments of type \Orm\Zed\Currency\Persistence\SpyCurrency or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Currency relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyDiscountAmountQuery The current query, for fluid interface
     */
    public function joinCurrency($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Currency');

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
            $this->addJoinObject($join, 'Currency');
        }

        return $this;
    }

    /**
     * Use the Currency relation SpyCurrency object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Currency\Persistence\SpyCurrencyQuery A secondary query class using the current class as primary query
     */
    public function useCurrencyQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCurrency($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Currency', '\Orm\Zed\Currency\Persistence\SpyCurrencyQuery');
    }

    /**
     * Use the Currency relation SpyCurrency object
     *
     * @param callable(\Orm\Zed\Currency\Persistence\SpyCurrencyQuery):\Orm\Zed\Currency\Persistence\SpyCurrencyQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withCurrencyQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useCurrencyQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the Currency relation to the SpyCurrency table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Currency\Persistence\SpyCurrencyQuery The inner query object of the EXISTS statement
     */
    public function useCurrencyExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('Currency', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the Currency relation to the SpyCurrency table for a NOT EXISTS query.
     *
     * @see useCurrencyExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Currency\Persistence\SpyCurrencyQuery The inner query object of the NOT EXISTS statement
     */
    public function useCurrencyNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('Currency', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Discount\Persistence\SpyDiscount object
     *
     * @param \Orm\Zed\Discount\Persistence\SpyDiscount|ObjectCollection $spyDiscount The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyDiscountAmountQuery The current query, for fluid interface
     */
    public function filterByDiscount($spyDiscount, $comparison = null)
    {
        if ($spyDiscount instanceof \Orm\Zed\Discount\Persistence\SpyDiscount) {
            return $this
                ->addUsingAlias(SpyDiscountAmountTableMap::COL_FK_DISCOUNT, $spyDiscount->getIdDiscount(), $comparison);
        } elseif ($spyDiscount instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyDiscountAmountTableMap::COL_FK_DISCOUNT, $spyDiscount->toKeyValue('PrimaryKey', 'IdDiscount'), $comparison);
        } else {
            throw new PropelException('filterByDiscount() only accepts arguments of type \Orm\Zed\Discount\Persistence\SpyDiscount or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Discount relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyDiscountAmountQuery The current query, for fluid interface
     */
    public function joinDiscount($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Discount');

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
            $this->addJoinObject($join, 'Discount');
        }

        return $this;
    }

    /**
     * Use the Discount relation SpyDiscount object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Discount\Persistence\SpyDiscountQuery A secondary query class using the current class as primary query
     */
    public function useDiscountQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinDiscount($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Discount', '\Orm\Zed\Discount\Persistence\SpyDiscountQuery');
    }

    /**
     * Use the Discount relation SpyDiscount object
     *
     * @param callable(\Orm\Zed\Discount\Persistence\SpyDiscountQuery):\Orm\Zed\Discount\Persistence\SpyDiscountQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withDiscountQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useDiscountQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the Discount relation to the SpyDiscount table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Discount\Persistence\SpyDiscountQuery The inner query object of the EXISTS statement
     */
    public function useDiscountExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('Discount', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the Discount relation to the SpyDiscount table for a NOT EXISTS query.
     *
     * @see useDiscountExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Discount\Persistence\SpyDiscountQuery The inner query object of the NOT EXISTS statement
     */
    public function useDiscountNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('Discount', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Exclude object from result
     *
     * @param   ChildSpyDiscountAmount $spyDiscountAmount Object to remove from the list of results
     *
     * @return $this|ChildSpyDiscountAmountQuery The current query, for fluid interface
     */
    public function prune($spyDiscountAmount = null)
    {
        if ($spyDiscountAmount) {
            $this->addUsingAlias(SpyDiscountAmountTableMap::COL_ID_DISCOUNT_AMOUNT, $spyDiscountAmount->getIdDiscountAmount(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_discount_amount table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyDiscountAmountTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyDiscountAmountTableMap::clearInstancePool();
            SpyDiscountAmountTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyDiscountAmountTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyDiscountAmountTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyDiscountAmountTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyDiscountAmountTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SpyDiscountAmountQuery
