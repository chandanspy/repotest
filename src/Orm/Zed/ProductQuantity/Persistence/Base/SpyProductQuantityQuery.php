<?php

namespace Orm\Zed\ProductQuantity\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\ProductQuantity\Persistence\SpyProductQuantity as ChildSpyProductQuantity;
use Orm\Zed\ProductQuantity\Persistence\SpyProductQuantityQuery as ChildSpyProductQuantityQuery;
use Orm\Zed\ProductQuantity\Persistence\Map\SpyProductQuantityTableMap;
use Orm\Zed\Product\Persistence\SpyProduct;
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
 * Base class that represents a query for the 'spy_product_quantity' table.
 *
 *
 *
 * @method     ChildSpyProductQuantityQuery orderByIdProductQuantity($order = Criteria::ASC) Order by the id_product_quantity column
 * @method     ChildSpyProductQuantityQuery orderByFkProduct($order = Criteria::ASC) Order by the fk_product column
 * @method     ChildSpyProductQuantityQuery orderByQuantityInterval($order = Criteria::ASC) Order by the quantity_interval column
 * @method     ChildSpyProductQuantityQuery orderByQuantityMax($order = Criteria::ASC) Order by the quantity_max column
 * @method     ChildSpyProductQuantityQuery orderByQuantityMin($order = Criteria::ASC) Order by the quantity_min column
 * @method     ChildSpyProductQuantityQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildSpyProductQuantityQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ChildSpyProductQuantityQuery groupByIdProductQuantity() Group by the id_product_quantity column
 * @method     ChildSpyProductQuantityQuery groupByFkProduct() Group by the fk_product column
 * @method     ChildSpyProductQuantityQuery groupByQuantityInterval() Group by the quantity_interval column
 * @method     ChildSpyProductQuantityQuery groupByQuantityMax() Group by the quantity_max column
 * @method     ChildSpyProductQuantityQuery groupByQuantityMin() Group by the quantity_min column
 * @method     ChildSpyProductQuantityQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildSpyProductQuantityQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ChildSpyProductQuantityQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyProductQuantityQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyProductQuantityQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyProductQuantityQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyProductQuantityQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyProductQuantityQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyProductQuantityQuery leftJoinProduct($relationAlias = null) Adds a LEFT JOIN clause to the query using the Product relation
 * @method     ChildSpyProductQuantityQuery rightJoinProduct($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Product relation
 * @method     ChildSpyProductQuantityQuery innerJoinProduct($relationAlias = null) Adds a INNER JOIN clause to the query using the Product relation
 *
 * @method     ChildSpyProductQuantityQuery joinWithProduct($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Product relation
 *
 * @method     ChildSpyProductQuantityQuery leftJoinWithProduct() Adds a LEFT JOIN clause and with to the query using the Product relation
 * @method     ChildSpyProductQuantityQuery rightJoinWithProduct() Adds a RIGHT JOIN clause and with to the query using the Product relation
 * @method     ChildSpyProductQuantityQuery innerJoinWithProduct() Adds a INNER JOIN clause and with to the query using the Product relation
 *
 * @method     \Orm\Zed\Product\Persistence\SpyProductQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyProductQuantity|null findOne(ConnectionInterface $con = null) Return the first ChildSpyProductQuantity matching the query
 * @method     ChildSpyProductQuantity findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyProductQuantity matching the query, or a new ChildSpyProductQuantity object populated from the query conditions when no match is found
 *
 * @method     ChildSpyProductQuantity|null findOneByIdProductQuantity(int $id_product_quantity) Return the first ChildSpyProductQuantity filtered by the id_product_quantity column
 * @method     ChildSpyProductQuantity|null findOneByFkProduct(int $fk_product) Return the first ChildSpyProductQuantity filtered by the fk_product column
 * @method     ChildSpyProductQuantity|null findOneByQuantityInterval(int $quantity_interval) Return the first ChildSpyProductQuantity filtered by the quantity_interval column
 * @method     ChildSpyProductQuantity|null findOneByQuantityMax(int $quantity_max) Return the first ChildSpyProductQuantity filtered by the quantity_max column
 * @method     ChildSpyProductQuantity|null findOneByQuantityMin(int $quantity_min) Return the first ChildSpyProductQuantity filtered by the quantity_min column
 * @method     ChildSpyProductQuantity|null findOneByCreatedAt(string $created_at) Return the first ChildSpyProductQuantity filtered by the created_at column
 * @method     ChildSpyProductQuantity|null findOneByUpdatedAt(string $updated_at) Return the first ChildSpyProductQuantity filtered by the updated_at column *

 * @method     ChildSpyProductQuantity requirePk($key, ConnectionInterface $con = null) Return the ChildSpyProductQuantity by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductQuantity requireOne(ConnectionInterface $con = null) Return the first ChildSpyProductQuantity matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyProductQuantity requireOneByIdProductQuantity(int $id_product_quantity) Return the first ChildSpyProductQuantity filtered by the id_product_quantity column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductQuantity requireOneByFkProduct(int $fk_product) Return the first ChildSpyProductQuantity filtered by the fk_product column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductQuantity requireOneByQuantityInterval(int $quantity_interval) Return the first ChildSpyProductQuantity filtered by the quantity_interval column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductQuantity requireOneByQuantityMax(int $quantity_max) Return the first ChildSpyProductQuantity filtered by the quantity_max column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductQuantity requireOneByQuantityMin(int $quantity_min) Return the first ChildSpyProductQuantity filtered by the quantity_min column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductQuantity requireOneByCreatedAt(string $created_at) Return the first ChildSpyProductQuantity filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductQuantity requireOneByUpdatedAt(string $updated_at) Return the first ChildSpyProductQuantity filtered by the updated_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyProductQuantity[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyProductQuantity objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductQuantity> find(ConnectionInterface $con = null) Return ChildSpyProductQuantity objects based on current ModelCriteria
 * @method     ChildSpyProductQuantity[]|ObjectCollection findByIdProductQuantity(int $id_product_quantity) Return ChildSpyProductQuantity objects filtered by the id_product_quantity column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductQuantity> findByIdProductQuantity(int $id_product_quantity) Return ChildSpyProductQuantity objects filtered by the id_product_quantity column
 * @method     ChildSpyProductQuantity[]|ObjectCollection findByFkProduct(int $fk_product) Return ChildSpyProductQuantity objects filtered by the fk_product column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductQuantity> findByFkProduct(int $fk_product) Return ChildSpyProductQuantity objects filtered by the fk_product column
 * @method     ChildSpyProductQuantity[]|ObjectCollection findByQuantityInterval(int $quantity_interval) Return ChildSpyProductQuantity objects filtered by the quantity_interval column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductQuantity> findByQuantityInterval(int $quantity_interval) Return ChildSpyProductQuantity objects filtered by the quantity_interval column
 * @method     ChildSpyProductQuantity[]|ObjectCollection findByQuantityMax(int $quantity_max) Return ChildSpyProductQuantity objects filtered by the quantity_max column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductQuantity> findByQuantityMax(int $quantity_max) Return ChildSpyProductQuantity objects filtered by the quantity_max column
 * @method     ChildSpyProductQuantity[]|ObjectCollection findByQuantityMin(int $quantity_min) Return ChildSpyProductQuantity objects filtered by the quantity_min column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductQuantity> findByQuantityMin(int $quantity_min) Return ChildSpyProductQuantity objects filtered by the quantity_min column
 * @method     ChildSpyProductQuantity[]|ObjectCollection findByCreatedAt(string $created_at) Return ChildSpyProductQuantity objects filtered by the created_at column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductQuantity> findByCreatedAt(string $created_at) Return ChildSpyProductQuantity objects filtered by the created_at column
 * @method     ChildSpyProductQuantity[]|ObjectCollection findByUpdatedAt(string $updated_at) Return ChildSpyProductQuantity objects filtered by the updated_at column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductQuantity> findByUpdatedAt(string $updated_at) Return ChildSpyProductQuantity objects filtered by the updated_at column
 * @method     ChildSpyProductQuantity[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyProductQuantity> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyProductQuantityQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\ProductQuantity\Persistence\Base\SpyProductQuantityQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\ProductQuantity\\Persistence\\SpyProductQuantity', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyProductQuantityQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyProductQuantityQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyProductQuantityQuery) {
            return $criteria;
        }
        $query = new ChildSpyProductQuantityQuery();
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
     * @return ChildSpyProductQuantity|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyProductQuantityTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyProductQuantity A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_product_quantity, fk_product, quantity_interval, quantity_max, quantity_min, created_at, updated_at FROM spy_product_quantity WHERE id_product_quantity = :p0';
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
            /** @var ChildSpyProductQuantity $obj */
            $obj = new ChildSpyProductQuantity();
            $obj->hydrate($row);
            SpyProductQuantityTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyProductQuantity|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyProductQuantityQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyProductQuantityTableMap::COL_ID_PRODUCT_QUANTITY, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyProductQuantityQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyProductQuantityTableMap::COL_ID_PRODUCT_QUANTITY, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idProductQuantity Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdProductQuantity_Between(array $idProductQuantity)
    {
        return $this->filterByIdProductQuantity($idProductQuantity, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idProductQuantitys Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdProductQuantity_In(array $idProductQuantitys)
    {
        return $this->filterByIdProductQuantity($idProductQuantitys, Criteria::IN);
    }

    /**
     * Filter the query on the id_product_quantity column
     *
     * Example usage:
     * <code>
     * $query->filterByIdProductQuantity(1234); // WHERE id_product_quantity = 1234
     * $query->filterByIdProductQuantity(array(12, 34), Criteria::IN); // WHERE id_product_quantity IN (12, 34)
     * $query->filterByIdProductQuantity(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_product_quantity > 12
     * </code>
     *
     * @param     mixed $idProductQuantity The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdProductQuantity($idProductQuantity = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idProductQuantity)) {
            $useMinMax = false;
            if (isset($idProductQuantity['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductQuantityTableMap::COL_ID_PRODUCT_QUANTITY, $idProductQuantity['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idProductQuantity['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductQuantityTableMap::COL_ID_PRODUCT_QUANTITY, $idProductQuantity['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idProductQuantity of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyProductQuantityTableMap::COL_ID_PRODUCT_QUANTITY, $idProductQuantity, $comparison);

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
     * @see       filterByProduct()
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
                $this->addUsingAlias(SpyProductQuantityTableMap::COL_FK_PRODUCT, $fkProduct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkProduct['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductQuantityTableMap::COL_FK_PRODUCT, $fkProduct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkProduct of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyProductQuantityTableMap::COL_FK_PRODUCT, $fkProduct, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $quantityInterval Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQuantityInterval_Between(array $quantityInterval)
    {
        return $this->filterByQuantityInterval($quantityInterval, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $quantityIntervals Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQuantityInterval_In(array $quantityIntervals)
    {
        return $this->filterByQuantityInterval($quantityIntervals, Criteria::IN);
    }

    /**
     * Filter the query on the quantity_interval column
     *
     * Example usage:
     * <code>
     * $query->filterByQuantityInterval(1234); // WHERE quantity_interval = 1234
     * $query->filterByQuantityInterval(array(12, 34), Criteria::IN); // WHERE quantity_interval IN (12, 34)
     * $query->filterByQuantityInterval(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE quantity_interval > 12
     * </code>
     *
     * @param     mixed $quantityInterval The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByQuantityInterval($quantityInterval = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($quantityInterval)) {
            $useMinMax = false;
            if (isset($quantityInterval['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductQuantityTableMap::COL_QUANTITY_INTERVAL, $quantityInterval['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($quantityInterval['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductQuantityTableMap::COL_QUANTITY_INTERVAL, $quantityInterval['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$quantityInterval of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyProductQuantityTableMap::COL_QUANTITY_INTERVAL, $quantityInterval, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $quantityMax Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQuantityMax_Between(array $quantityMax)
    {
        return $this->filterByQuantityMax($quantityMax, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $quantityMaxs Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQuantityMax_In(array $quantityMaxs)
    {
        return $this->filterByQuantityMax($quantityMaxs, Criteria::IN);
    }

    /**
     * Filter the query on the quantity_max column
     *
     * Example usage:
     * <code>
     * $query->filterByQuantityMax(1234); // WHERE quantity_max = 1234
     * $query->filterByQuantityMax(array(12, 34), Criteria::IN); // WHERE quantity_max IN (12, 34)
     * $query->filterByQuantityMax(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE quantity_max > 12
     * </code>
     *
     * @param     mixed $quantityMax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByQuantityMax($quantityMax = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($quantityMax)) {
            $useMinMax = false;
            if (isset($quantityMax['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductQuantityTableMap::COL_QUANTITY_MAX, $quantityMax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($quantityMax['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductQuantityTableMap::COL_QUANTITY_MAX, $quantityMax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$quantityMax of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyProductQuantityTableMap::COL_QUANTITY_MAX, $quantityMax, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $quantityMin Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQuantityMin_Between(array $quantityMin)
    {
        return $this->filterByQuantityMin($quantityMin, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $quantityMins Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQuantityMin_In(array $quantityMins)
    {
        return $this->filterByQuantityMin($quantityMins, Criteria::IN);
    }

    /**
     * Filter the query on the quantity_min column
     *
     * Example usage:
     * <code>
     * $query->filterByQuantityMin(1234); // WHERE quantity_min = 1234
     * $query->filterByQuantityMin(array(12, 34), Criteria::IN); // WHERE quantity_min IN (12, 34)
     * $query->filterByQuantityMin(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE quantity_min > 12
     * </code>
     *
     * @param     mixed $quantityMin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByQuantityMin($quantityMin = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($quantityMin)) {
            $useMinMax = false;
            if (isset($quantityMin['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductQuantityTableMap::COL_QUANTITY_MIN, $quantityMin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($quantityMin['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductQuantityTableMap::COL_QUANTITY_MIN, $quantityMin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$quantityMin of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyProductQuantityTableMap::COL_QUANTITY_MIN, $quantityMin, $comparison);

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
                $this->addUsingAlias(SpyProductQuantityTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductQuantityTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$createdAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyProductQuantityTableMap::COL_CREATED_AT, $createdAt, $comparison);

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
                $this->addUsingAlias(SpyProductQuantityTableMap::COL_UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductQuantityTableMap::COL_UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$updatedAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyProductQuantityTableMap::COL_UPDATED_AT, $updatedAt, $comparison);

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
     * @return ChildSpyProductQuantityQuery The current query, for fluid interface
     */
    public function filterByProduct($spyProduct, $comparison = null)
    {
        if ($spyProduct instanceof \Orm\Zed\Product\Persistence\SpyProduct) {
            return $this
                ->addUsingAlias(SpyProductQuantityTableMap::COL_FK_PRODUCT, $spyProduct->getIdProduct(), $comparison);
        } elseif ($spyProduct instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyProductQuantityTableMap::COL_FK_PRODUCT, $spyProduct->toKeyValue('PrimaryKey', 'IdProduct'), $comparison);
        } else {
            throw new PropelException('filterByProduct() only accepts arguments of type \Orm\Zed\Product\Persistence\SpyProduct or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Product relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyProductQuantityQuery The current query, for fluid interface
     */
    public function joinProduct($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Product');

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
            $this->addJoinObject($join, 'Product');
        }

        return $this;
    }

    /**
     * Use the Product relation SpyProduct object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Product\Persistence\SpyProductQuery A secondary query class using the current class as primary query
     */
    public function useProductQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProduct($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Product', '\Orm\Zed\Product\Persistence\SpyProductQuery');
    }

    /**
     * Use the Product relation SpyProduct object
     *
     * @param callable(\Orm\Zed\Product\Persistence\SpyProductQuery):\Orm\Zed\Product\Persistence\SpyProductQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withProductQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useProductQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the Product relation to the SpyProduct table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Product\Persistence\SpyProductQuery The inner query object of the EXISTS statement
     */
    public function useProductExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('Product', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the Product relation to the SpyProduct table for a NOT EXISTS query.
     *
     * @see useProductExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Product\Persistence\SpyProductQuery The inner query object of the NOT EXISTS statement
     */
    public function useProductNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('Product', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Exclude object from result
     *
     * @param   ChildSpyProductQuantity $spyProductQuantity Object to remove from the list of results
     *
     * @return $this|ChildSpyProductQuantityQuery The current query, for fluid interface
     */
    public function prune($spyProductQuantity = null)
    {
        if ($spyProductQuantity) {
            $this->addUsingAlias(SpyProductQuantityTableMap::COL_ID_PRODUCT_QUANTITY, $spyProductQuantity->getIdProductQuantity(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_product_quantity table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductQuantityTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyProductQuantityTableMap::clearInstancePool();
            SpyProductQuantityTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductQuantityTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyProductQuantityTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyProductQuantityTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyProductQuantityTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    // timestampable behavior

    /**
     * Filter by the latest updated
     *
     * @param      int $nbDays Maximum age of the latest update in days
     *
     * @return     $this|ChildSpyProductQuantityQuery The current query, for fluid interface
     */
    public function recentlyUpdated($nbDays = 7)
    {
        return $this->addUsingAlias(SpyProductQuantityTableMap::COL_UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by update date desc
     *
     * @return     $this|ChildSpyProductQuantityQuery The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        return $this->addDescendingOrderByColumn(SpyProductQuantityTableMap::COL_UPDATED_AT);
    }

    /**
     * Order by update date asc
     *
     * @return     $this|ChildSpyProductQuantityQuery The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        return $this->addAscendingOrderByColumn(SpyProductQuantityTableMap::COL_UPDATED_AT);
    }

    /**
     * Order by create date desc
     *
     * @return     $this|ChildSpyProductQuantityQuery The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        return $this->addDescendingOrderByColumn(SpyProductQuantityTableMap::COL_CREATED_AT);
    }

    /**
     * Filter by the latest created
     *
     * @param      int $nbDays Maximum age of in days
     *
     * @return     $this|ChildSpyProductQuantityQuery The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        return $this->addUsingAlias(SpyProductQuantityTableMap::COL_CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by create date asc
     *
     * @return     $this|ChildSpyProductQuantityQuery The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        return $this->addAscendingOrderByColumn(SpyProductQuantityTableMap::COL_CREATED_AT);
    }

} // SpyProductQuantityQuery
