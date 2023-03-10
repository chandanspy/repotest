<?php

namespace Orm\Zed\Stock\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\Product\Persistence\SpyProduct;
use Orm\Zed\Stock\Persistence\SpyStockProduct as ChildSpyStockProduct;
use Orm\Zed\Stock\Persistence\SpyStockProductQuery as ChildSpyStockProductQuery;
use Orm\Zed\Stock\Persistence\Map\SpyStockProductTableMap;
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
 * Base class that represents a query for the 'spy_stock_product' table.
 *
 *
 *
 * @method     ChildSpyStockProductQuery orderByIdStockProduct($order = Criteria::ASC) Order by the id_stock_product column
 * @method     ChildSpyStockProductQuery orderByFkProduct($order = Criteria::ASC) Order by the fk_product column
 * @method     ChildSpyStockProductQuery orderByFkStock($order = Criteria::ASC) Order by the fk_stock column
 * @method     ChildSpyStockProductQuery orderByIsNeverOutOfStock($order = Criteria::ASC) Order by the is_never_out_of_stock column
 * @method     ChildSpyStockProductQuery orderByQuantity($order = Criteria::ASC) Order by the quantity column
 *
 * @method     ChildSpyStockProductQuery groupByIdStockProduct() Group by the id_stock_product column
 * @method     ChildSpyStockProductQuery groupByFkProduct() Group by the fk_product column
 * @method     ChildSpyStockProductQuery groupByFkStock() Group by the fk_stock column
 * @method     ChildSpyStockProductQuery groupByIsNeverOutOfStock() Group by the is_never_out_of_stock column
 * @method     ChildSpyStockProductQuery groupByQuantity() Group by the quantity column
 *
 * @method     ChildSpyStockProductQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyStockProductQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyStockProductQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyStockProductQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyStockProductQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyStockProductQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyStockProductQuery leftJoinSpyProduct($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyProduct relation
 * @method     ChildSpyStockProductQuery rightJoinSpyProduct($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyProduct relation
 * @method     ChildSpyStockProductQuery innerJoinSpyProduct($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyProduct relation
 *
 * @method     ChildSpyStockProductQuery joinWithSpyProduct($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyProduct relation
 *
 * @method     ChildSpyStockProductQuery leftJoinWithSpyProduct() Adds a LEFT JOIN clause and with to the query using the SpyProduct relation
 * @method     ChildSpyStockProductQuery rightJoinWithSpyProduct() Adds a RIGHT JOIN clause and with to the query using the SpyProduct relation
 * @method     ChildSpyStockProductQuery innerJoinWithSpyProduct() Adds a INNER JOIN clause and with to the query using the SpyProduct relation
 *
 * @method     ChildSpyStockProductQuery leftJoinStock($relationAlias = null) Adds a LEFT JOIN clause to the query using the Stock relation
 * @method     ChildSpyStockProductQuery rightJoinStock($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Stock relation
 * @method     ChildSpyStockProductQuery innerJoinStock($relationAlias = null) Adds a INNER JOIN clause to the query using the Stock relation
 *
 * @method     ChildSpyStockProductQuery joinWithStock($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Stock relation
 *
 * @method     ChildSpyStockProductQuery leftJoinWithStock() Adds a LEFT JOIN clause and with to the query using the Stock relation
 * @method     ChildSpyStockProductQuery rightJoinWithStock() Adds a RIGHT JOIN clause and with to the query using the Stock relation
 * @method     ChildSpyStockProductQuery innerJoinWithStock() Adds a INNER JOIN clause and with to the query using the Stock relation
 *
 * @method     \Orm\Zed\Product\Persistence\SpyProductQuery|\Orm\Zed\Stock\Persistence\SpyStockQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyStockProduct|null findOne(ConnectionInterface $con = null) Return the first ChildSpyStockProduct matching the query
 * @method     ChildSpyStockProduct findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyStockProduct matching the query, or a new ChildSpyStockProduct object populated from the query conditions when no match is found
 *
 * @method     ChildSpyStockProduct|null findOneByIdStockProduct(int $id_stock_product) Return the first ChildSpyStockProduct filtered by the id_stock_product column
 * @method     ChildSpyStockProduct|null findOneByFkProduct(int $fk_product) Return the first ChildSpyStockProduct filtered by the fk_product column
 * @method     ChildSpyStockProduct|null findOneByFkStock(int $fk_stock) Return the first ChildSpyStockProduct filtered by the fk_stock column
 * @method     ChildSpyStockProduct|null findOneByIsNeverOutOfStock(boolean $is_never_out_of_stock) Return the first ChildSpyStockProduct filtered by the is_never_out_of_stock column
 * @method     ChildSpyStockProduct|null findOneByQuantity(string $quantity) Return the first ChildSpyStockProduct filtered by the quantity column *

 * @method     ChildSpyStockProduct requirePk($key, ConnectionInterface $con = null) Return the ChildSpyStockProduct by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyStockProduct requireOne(ConnectionInterface $con = null) Return the first ChildSpyStockProduct matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyStockProduct requireOneByIdStockProduct(int $id_stock_product) Return the first ChildSpyStockProduct filtered by the id_stock_product column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyStockProduct requireOneByFkProduct(int $fk_product) Return the first ChildSpyStockProduct filtered by the fk_product column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyStockProduct requireOneByFkStock(int $fk_stock) Return the first ChildSpyStockProduct filtered by the fk_stock column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyStockProduct requireOneByIsNeverOutOfStock(boolean $is_never_out_of_stock) Return the first ChildSpyStockProduct filtered by the is_never_out_of_stock column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyStockProduct requireOneByQuantity(string $quantity) Return the first ChildSpyStockProduct filtered by the quantity column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyStockProduct[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyStockProduct objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyStockProduct> find(ConnectionInterface $con = null) Return ChildSpyStockProduct objects based on current ModelCriteria
 * @method     ChildSpyStockProduct[]|ObjectCollection findByIdStockProduct(int $id_stock_product) Return ChildSpyStockProduct objects filtered by the id_stock_product column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyStockProduct> findByIdStockProduct(int $id_stock_product) Return ChildSpyStockProduct objects filtered by the id_stock_product column
 * @method     ChildSpyStockProduct[]|ObjectCollection findByFkProduct(int $fk_product) Return ChildSpyStockProduct objects filtered by the fk_product column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyStockProduct> findByFkProduct(int $fk_product) Return ChildSpyStockProduct objects filtered by the fk_product column
 * @method     ChildSpyStockProduct[]|ObjectCollection findByFkStock(int $fk_stock) Return ChildSpyStockProduct objects filtered by the fk_stock column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyStockProduct> findByFkStock(int $fk_stock) Return ChildSpyStockProduct objects filtered by the fk_stock column
 * @method     ChildSpyStockProduct[]|ObjectCollection findByIsNeverOutOfStock(boolean $is_never_out_of_stock) Return ChildSpyStockProduct objects filtered by the is_never_out_of_stock column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyStockProduct> findByIsNeverOutOfStock(boolean $is_never_out_of_stock) Return ChildSpyStockProduct objects filtered by the is_never_out_of_stock column
 * @method     ChildSpyStockProduct[]|ObjectCollection findByQuantity(string $quantity) Return ChildSpyStockProduct objects filtered by the quantity column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyStockProduct> findByQuantity(string $quantity) Return ChildSpyStockProduct objects filtered by the quantity column
 * @method     ChildSpyStockProduct[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyStockProduct> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyStockProductQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\Stock\Persistence\Base\SpyStockProductQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\Stock\\Persistence\\SpyStockProduct', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyStockProductQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyStockProductQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyStockProductQuery) {
            return $criteria;
        }
        $query = new ChildSpyStockProductQuery();
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
     * @return ChildSpyStockProduct|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyStockProductTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyStockProduct A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_stock_product, fk_product, fk_stock, is_never_out_of_stock, quantity FROM spy_stock_product WHERE id_stock_product = :p0';
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
            /** @var ChildSpyStockProduct $obj */
            $obj = new ChildSpyStockProduct();
            $obj->hydrate($row);
            SpyStockProductTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyStockProduct|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyStockProductQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyStockProductTableMap::COL_ID_STOCK_PRODUCT, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyStockProductQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyStockProductTableMap::COL_ID_STOCK_PRODUCT, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idStockProduct Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdStockProduct_Between(array $idStockProduct)
    {
        return $this->filterByIdStockProduct($idStockProduct, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idStockProducts Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdStockProduct_In(array $idStockProducts)
    {
        return $this->filterByIdStockProduct($idStockProducts, Criteria::IN);
    }

    /**
     * Filter the query on the id_stock_product column
     *
     * Example usage:
     * <code>
     * $query->filterByIdStockProduct(1234); // WHERE id_stock_product = 1234
     * $query->filterByIdStockProduct(array(12, 34), Criteria::IN); // WHERE id_stock_product IN (12, 34)
     * $query->filterByIdStockProduct(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_stock_product > 12
     * </code>
     *
     * @param     mixed $idStockProduct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdStockProduct($idStockProduct = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idStockProduct)) {
            $useMinMax = false;
            if (isset($idStockProduct['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyStockProductTableMap::COL_ID_STOCK_PRODUCT, $idStockProduct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idStockProduct['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyStockProductTableMap::COL_ID_STOCK_PRODUCT, $idStockProduct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idStockProduct of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyStockProductTableMap::COL_ID_STOCK_PRODUCT, $idStockProduct, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkProduct Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkProduct_Between(array $fkProduct)
    {
        return $this->filterByFkProduct($fkProduct, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkProducts Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkProduct_In(array $fkProducts)
    {
        return $this->filterByFkProduct($fkProducts, Criteria::IN);
    }

    /**
     * Filter the query on the fk_product column
     *
     * Example usage:
     * <code>
     * $query->filterByFkProduct(1234); // WHERE fk_product = 1234
     * $query->filterByFkProduct(array(12, 34), Criteria::IN); // WHERE fk_product IN (12, 34)
     * $query->filterByFkProduct(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_product > 12
     * </code>
     *
     * @see       filterBySpyProduct()
     *
     * @param     mixed $fkProduct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkProduct($fkProduct = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkProduct)) {
            $useMinMax = false;
            if (isset($fkProduct['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyStockProductTableMap::COL_FK_PRODUCT, $fkProduct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkProduct['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyStockProductTableMap::COL_FK_PRODUCT, $fkProduct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkProduct of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyStockProductTableMap::COL_FK_PRODUCT, $fkProduct, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkStock Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkStock_Between(array $fkStock)
    {
        return $this->filterByFkStock($fkStock, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkStocks Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkStock_In(array $fkStocks)
    {
        return $this->filterByFkStock($fkStocks, Criteria::IN);
    }

    /**
     * Filter the query on the fk_stock column
     *
     * Example usage:
     * <code>
     * $query->filterByFkStock(1234); // WHERE fk_stock = 1234
     * $query->filterByFkStock(array(12, 34), Criteria::IN); // WHERE fk_stock IN (12, 34)
     * $query->filterByFkStock(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_stock > 12
     * </code>
     *
     * @see       filterByStock()
     *
     * @param     mixed $fkStock The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkStock($fkStock = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkStock)) {
            $useMinMax = false;
            if (isset($fkStock['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyStockProductTableMap::COL_FK_STOCK, $fkStock['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkStock['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyStockProductTableMap::COL_FK_STOCK, $fkStock['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkStock of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyStockProductTableMap::COL_FK_STOCK, $fkStock, $comparison);

        return $query;
    }

    /**
     * Filter the query on the is_never_out_of_stock column
     *
     * Example usage:
     * <code>
     * $query->filterByIsNeverOutOfStock(true); // WHERE is_never_out_of_stock = true
     * $query->filterByIsNeverOutOfStock('yes'); // WHERE is_never_out_of_stock = true
     * </code>
     *
     * @param     bool|string $isNeverOutOfStock The value to use as filter.
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
    public function filterByIsNeverOutOfStock($isNeverOutOfStock = null, $comparison = Criteria::EQUAL)
    {
        if (is_string($isNeverOutOfStock)) {
            $isNeverOutOfStock = in_array(strtolower($isNeverOutOfStock), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        $query = $this->addUsingAlias(SpyStockProductTableMap::COL_IS_NEVER_OUT_OF_STOCK, $isNeverOutOfStock, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $quantity Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQuantity_Between(array $quantity)
    {
        return $this->filterByQuantity($quantity, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $quantitys Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQuantity_In(array $quantitys)
    {
        return $this->filterByQuantity($quantitys, Criteria::IN);
    }

    /**
     * Filter the query on the quantity column
     *
     * Example usage:
     * <code>
     * $query->filterByQuantity(1234); // WHERE quantity = 1234
     * $query->filterByQuantity(array(12, 34), Criteria::IN); // WHERE quantity IN (12, 34)
     * $query->filterByQuantity(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE quantity > 12
     * </code>
     *
     * @param     mixed $quantity The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByQuantity($quantity = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($quantity)) {
            $useMinMax = false;
            if (isset($quantity['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyStockProductTableMap::COL_QUANTITY, $quantity['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($quantity['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyStockProductTableMap::COL_QUANTITY, $quantity['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$quantity of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyStockProductTableMap::COL_QUANTITY, $quantity, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\Product\Persistence\SpyProduct object
     *
     * @param \Orm\Zed\Product\Persistence\SpyProduct|ObjectCollection $spyProduct The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyStockProductQuery The current query, for fluid interface
     */
    public function filterBySpyProduct($spyProduct, $comparison = null)
    {
        if ($spyProduct instanceof \Orm\Zed\Product\Persistence\SpyProduct) {
            return $this
                ->addUsingAlias(SpyStockProductTableMap::COL_FK_PRODUCT, $spyProduct->getIdProduct(), $comparison);
        } elseif ($spyProduct instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyStockProductTableMap::COL_FK_PRODUCT, $spyProduct->toKeyValue('PrimaryKey', 'IdProduct'), $comparison);
        } else {
            throw new PropelException('filterBySpyProduct() only accepts arguments of type \Orm\Zed\Product\Persistence\SpyProduct or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyProduct relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyStockProductQuery The current query, for fluid interface
     */
    public function joinSpyProduct($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyProduct');

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
            $this->addJoinObject($join, 'SpyProduct');
        }

        return $this;
    }

    /**
     * Use the SpyProduct relation SpyProduct object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Product\Persistence\SpyProductQuery A secondary query class using the current class as primary query
     */
    public function useSpyProductQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyProduct($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyProduct', '\Orm\Zed\Product\Persistence\SpyProductQuery');
    }

    /**
     * Use the SpyProduct relation SpyProduct object
     *
     * @param callable(\Orm\Zed\Product\Persistence\SpyProductQuery):\Orm\Zed\Product\Persistence\SpyProductQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyProductQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyProductQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyProduct table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Product\Persistence\SpyProductQuery The inner query object of the EXISTS statement
     */
    public function useSpyProductExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyProduct', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyProduct table for a NOT EXISTS query.
     *
     * @see useSpyProductExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Product\Persistence\SpyProductQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyProductNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyProduct', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Stock\Persistence\SpyStock object
     *
     * @param \Orm\Zed\Stock\Persistence\SpyStock|ObjectCollection $spyStock The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyStockProductQuery The current query, for fluid interface
     */
    public function filterByStock($spyStock, $comparison = null)
    {
        if ($spyStock instanceof \Orm\Zed\Stock\Persistence\SpyStock) {
            return $this
                ->addUsingAlias(SpyStockProductTableMap::COL_FK_STOCK, $spyStock->getIdStock(), $comparison);
        } elseif ($spyStock instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyStockProductTableMap::COL_FK_STOCK, $spyStock->toKeyValue('PrimaryKey', 'IdStock'), $comparison);
        } else {
            throw new PropelException('filterByStock() only accepts arguments of type \Orm\Zed\Stock\Persistence\SpyStock or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Stock relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyStockProductQuery The current query, for fluid interface
     */
    public function joinStock($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Stock');

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
            $this->addJoinObject($join, 'Stock');
        }

        return $this;
    }

    /**
     * Use the Stock relation SpyStock object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Stock\Persistence\SpyStockQuery A secondary query class using the current class as primary query
     */
    public function useStockQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinStock($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Stock', '\Orm\Zed\Stock\Persistence\SpyStockQuery');
    }

    /**
     * Use the Stock relation SpyStock object
     *
     * @param callable(\Orm\Zed\Stock\Persistence\SpyStockQuery):\Orm\Zed\Stock\Persistence\SpyStockQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withStockQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useStockQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the Stock relation to the SpyStock table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Stock\Persistence\SpyStockQuery The inner query object of the EXISTS statement
     */
    public function useStockExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('Stock', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the Stock relation to the SpyStock table for a NOT EXISTS query.
     *
     * @see useStockExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Stock\Persistence\SpyStockQuery The inner query object of the NOT EXISTS statement
     */
    public function useStockNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('Stock', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Exclude object from result
     *
     * @param   ChildSpyStockProduct $spyStockProduct Object to remove from the list of results
     *
     * @return $this|ChildSpyStockProductQuery The current query, for fluid interface
     */
    public function prune($spyStockProduct = null)
    {
        if ($spyStockProduct) {
            $this->addUsingAlias(SpyStockProductTableMap::COL_ID_STOCK_PRODUCT, $spyStockProduct->getIdStockProduct(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_stock_product table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyStockProductTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyStockProductTableMap::clearInstancePool();
            SpyStockProductTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyStockProductTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyStockProductTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyStockProductTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyStockProductTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SpyStockProductQuery
