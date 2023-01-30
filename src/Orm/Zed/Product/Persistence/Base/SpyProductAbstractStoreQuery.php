<?php

namespace Orm\Zed\Product\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\Product\Persistence\SpyProductAbstractStore as ChildSpyProductAbstractStore;
use Orm\Zed\Product\Persistence\SpyProductAbstractStoreQuery as ChildSpyProductAbstractStoreQuery;
use Orm\Zed\Product\Persistence\Map\SpyProductAbstractStoreTableMap;
use Orm\Zed\Store\Persistence\SpyStore;
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
 * Base class that represents a query for the 'spy_product_abstract_store' table.
 *
 *
 *
 * @method     ChildSpyProductAbstractStoreQuery orderByIdProductAbstractStore($order = Criteria::ASC) Order by the id_product_abstract_store column
 * @method     ChildSpyProductAbstractStoreQuery orderByFkProductAbstract($order = Criteria::ASC) Order by the fk_product_abstract column
 * @method     ChildSpyProductAbstractStoreQuery orderByFkStore($order = Criteria::ASC) Order by the fk_store column
 *
 * @method     ChildSpyProductAbstractStoreQuery groupByIdProductAbstractStore() Group by the id_product_abstract_store column
 * @method     ChildSpyProductAbstractStoreQuery groupByFkProductAbstract() Group by the fk_product_abstract column
 * @method     ChildSpyProductAbstractStoreQuery groupByFkStore() Group by the fk_store column
 *
 * @method     ChildSpyProductAbstractStoreQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyProductAbstractStoreQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyProductAbstractStoreQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyProductAbstractStoreQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyProductAbstractStoreQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyProductAbstractStoreQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyProductAbstractStoreQuery leftJoinSpyProductAbstract($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyProductAbstract relation
 * @method     ChildSpyProductAbstractStoreQuery rightJoinSpyProductAbstract($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyProductAbstract relation
 * @method     ChildSpyProductAbstractStoreQuery innerJoinSpyProductAbstract($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyProductAbstract relation
 *
 * @method     ChildSpyProductAbstractStoreQuery joinWithSpyProductAbstract($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyProductAbstract relation
 *
 * @method     ChildSpyProductAbstractStoreQuery leftJoinWithSpyProductAbstract() Adds a LEFT JOIN clause and with to the query using the SpyProductAbstract relation
 * @method     ChildSpyProductAbstractStoreQuery rightJoinWithSpyProductAbstract() Adds a RIGHT JOIN clause and with to the query using the SpyProductAbstract relation
 * @method     ChildSpyProductAbstractStoreQuery innerJoinWithSpyProductAbstract() Adds a INNER JOIN clause and with to the query using the SpyProductAbstract relation
 *
 * @method     ChildSpyProductAbstractStoreQuery leftJoinSpyStore($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyStore relation
 * @method     ChildSpyProductAbstractStoreQuery rightJoinSpyStore($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyStore relation
 * @method     ChildSpyProductAbstractStoreQuery innerJoinSpyStore($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyStore relation
 *
 * @method     ChildSpyProductAbstractStoreQuery joinWithSpyStore($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyStore relation
 *
 * @method     ChildSpyProductAbstractStoreQuery leftJoinWithSpyStore() Adds a LEFT JOIN clause and with to the query using the SpyStore relation
 * @method     ChildSpyProductAbstractStoreQuery rightJoinWithSpyStore() Adds a RIGHT JOIN clause and with to the query using the SpyStore relation
 * @method     ChildSpyProductAbstractStoreQuery innerJoinWithSpyStore() Adds a INNER JOIN clause and with to the query using the SpyStore relation
 *
 * @method     \Orm\Zed\Product\Persistence\SpyProductAbstractQuery|\Orm\Zed\Store\Persistence\SpyStoreQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyProductAbstractStore|null findOne(ConnectionInterface $con = null) Return the first ChildSpyProductAbstractStore matching the query
 * @method     ChildSpyProductAbstractStore findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyProductAbstractStore matching the query, or a new ChildSpyProductAbstractStore object populated from the query conditions when no match is found
 *
 * @method     ChildSpyProductAbstractStore|null findOneByIdProductAbstractStore(int $id_product_abstract_store) Return the first ChildSpyProductAbstractStore filtered by the id_product_abstract_store column
 * @method     ChildSpyProductAbstractStore|null findOneByFkProductAbstract(int $fk_product_abstract) Return the first ChildSpyProductAbstractStore filtered by the fk_product_abstract column
 * @method     ChildSpyProductAbstractStore|null findOneByFkStore(int $fk_store) Return the first ChildSpyProductAbstractStore filtered by the fk_store column *

 * @method     ChildSpyProductAbstractStore requirePk($key, ConnectionInterface $con = null) Return the ChildSpyProductAbstractStore by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductAbstractStore requireOne(ConnectionInterface $con = null) Return the first ChildSpyProductAbstractStore matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyProductAbstractStore requireOneByIdProductAbstractStore(int $id_product_abstract_store) Return the first ChildSpyProductAbstractStore filtered by the id_product_abstract_store column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductAbstractStore requireOneByFkProductAbstract(int $fk_product_abstract) Return the first ChildSpyProductAbstractStore filtered by the fk_product_abstract column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductAbstractStore requireOneByFkStore(int $fk_store) Return the first ChildSpyProductAbstractStore filtered by the fk_store column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyProductAbstractStore[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyProductAbstractStore objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductAbstractStore> find(ConnectionInterface $con = null) Return ChildSpyProductAbstractStore objects based on current ModelCriteria
 * @method     ChildSpyProductAbstractStore[]|ObjectCollection findByIdProductAbstractStore(int $id_product_abstract_store) Return ChildSpyProductAbstractStore objects filtered by the id_product_abstract_store column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductAbstractStore> findByIdProductAbstractStore(int $id_product_abstract_store) Return ChildSpyProductAbstractStore objects filtered by the id_product_abstract_store column
 * @method     ChildSpyProductAbstractStore[]|ObjectCollection findByFkProductAbstract(int $fk_product_abstract) Return ChildSpyProductAbstractStore objects filtered by the fk_product_abstract column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductAbstractStore> findByFkProductAbstract(int $fk_product_abstract) Return ChildSpyProductAbstractStore objects filtered by the fk_product_abstract column
 * @method     ChildSpyProductAbstractStore[]|ObjectCollection findByFkStore(int $fk_store) Return ChildSpyProductAbstractStore objects filtered by the fk_store column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductAbstractStore> findByFkStore(int $fk_store) Return ChildSpyProductAbstractStore objects filtered by the fk_store column
 * @method     ChildSpyProductAbstractStore[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyProductAbstractStore> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyProductAbstractStoreQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\Product\Persistence\Base\SpyProductAbstractStoreQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\Product\\Persistence\\SpyProductAbstractStore', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyProductAbstractStoreQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyProductAbstractStoreQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyProductAbstractStoreQuery) {
            return $criteria;
        }
        $query = new ChildSpyProductAbstractStoreQuery();
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
     * @return ChildSpyProductAbstractStore|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyProductAbstractStoreTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyProductAbstractStore A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT `id_product_abstract_store`, `fk_product_abstract`, `fk_store` FROM `spy_product_abstract_store` WHERE `id_product_abstract_store` = :p0';
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
            /** @var ChildSpyProductAbstractStore $obj */
            $obj = new ChildSpyProductAbstractStore();
            $obj->hydrate($row);
            SpyProductAbstractStoreTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyProductAbstractStore|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyProductAbstractStoreQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyProductAbstractStoreTableMap::COL_ID_PRODUCT_ABSTRACT_STORE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyProductAbstractStoreQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyProductAbstractStoreTableMap::COL_ID_PRODUCT_ABSTRACT_STORE, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idProductAbstractStore Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdProductAbstractStore_Between(array $idProductAbstractStore)
    {
        return $this->filterByIdProductAbstractStore($idProductAbstractStore, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idProductAbstractStores Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdProductAbstractStore_In(array $idProductAbstractStores)
    {
        return $this->filterByIdProductAbstractStore($idProductAbstractStores, Criteria::IN);
    }

    /**
     * Filter the query on the id_product_abstract_store column
     *
     * Example usage:
     * <code>
     * $query->filterByIdProductAbstractStore(1234); // WHERE id_product_abstract_store = 1234
     * $query->filterByIdProductAbstractStore(array(12, 34), Criteria::IN); // WHERE id_product_abstract_store IN (12, 34)
     * $query->filterByIdProductAbstractStore(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_product_abstract_store > 12
     * </code>
     *
     * @param     mixed $idProductAbstractStore The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdProductAbstractStore($idProductAbstractStore = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idProductAbstractStore)) {
            $useMinMax = false;
            if (isset($idProductAbstractStore['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductAbstractStoreTableMap::COL_ID_PRODUCT_ABSTRACT_STORE, $idProductAbstractStore['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idProductAbstractStore['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductAbstractStoreTableMap::COL_ID_PRODUCT_ABSTRACT_STORE, $idProductAbstractStore['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idProductAbstractStore of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyProductAbstractStoreTableMap::COL_ID_PRODUCT_ABSTRACT_STORE, $idProductAbstractStore, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkProductAbstract Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkProductAbstract_Between(array $fkProductAbstract)
    {
        return $this->filterByFkProductAbstract($fkProductAbstract, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkProductAbstracts Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkProductAbstract_In(array $fkProductAbstracts)
    {
        return $this->filterByFkProductAbstract($fkProductAbstracts, Criteria::IN);
    }

    /**
     * Filter the query on the fk_product_abstract column
     *
     * Example usage:
     * <code>
     * $query->filterByFkProductAbstract(1234); // WHERE fk_product_abstract = 1234
     * $query->filterByFkProductAbstract(array(12, 34), Criteria::IN); // WHERE fk_product_abstract IN (12, 34)
     * $query->filterByFkProductAbstract(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_product_abstract > 12
     * </code>
     *
     * @see       filterBySpyProductAbstract()
     *
     * @param     mixed $fkProductAbstract The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkProductAbstract($fkProductAbstract = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkProductAbstract)) {
            $useMinMax = false;
            if (isset($fkProductAbstract['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductAbstractStoreTableMap::COL_FK_PRODUCT_ABSTRACT, $fkProductAbstract['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkProductAbstract['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductAbstractStoreTableMap::COL_FK_PRODUCT_ABSTRACT, $fkProductAbstract['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkProductAbstract of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyProductAbstractStoreTableMap::COL_FK_PRODUCT_ABSTRACT, $fkProductAbstract, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkStore Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkStore_Between(array $fkStore)
    {
        return $this->filterByFkStore($fkStore, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkStores Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkStore_In(array $fkStores)
    {
        return $this->filterByFkStore($fkStores, Criteria::IN);
    }

    /**
     * Filter the query on the fk_store column
     *
     * Example usage:
     * <code>
     * $query->filterByFkStore(1234); // WHERE fk_store = 1234
     * $query->filterByFkStore(array(12, 34), Criteria::IN); // WHERE fk_store IN (12, 34)
     * $query->filterByFkStore(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_store > 12
     * </code>
     *
     * @see       filterBySpyStore()
     *
     * @param     mixed $fkStore The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkStore($fkStore = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkStore)) {
            $useMinMax = false;
            if (isset($fkStore['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductAbstractStoreTableMap::COL_FK_STORE, $fkStore['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkStore['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductAbstractStoreTableMap::COL_FK_STORE, $fkStore['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkStore of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyProductAbstractStoreTableMap::COL_FK_STORE, $fkStore, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\Product\Persistence\SpyProductAbstract object
     *
     * @param \Orm\Zed\Product\Persistence\SpyProductAbstract|ObjectCollection $spyProductAbstract The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyProductAbstractStoreQuery The current query, for fluid interface
     */
    public function filterBySpyProductAbstract($spyProductAbstract, $comparison = null)
    {
        if ($spyProductAbstract instanceof \Orm\Zed\Product\Persistence\SpyProductAbstract) {
            return $this
                ->addUsingAlias(SpyProductAbstractStoreTableMap::COL_FK_PRODUCT_ABSTRACT, $spyProductAbstract->getIdProductAbstract(), $comparison);
        } elseif ($spyProductAbstract instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyProductAbstractStoreTableMap::COL_FK_PRODUCT_ABSTRACT, $spyProductAbstract->toKeyValue('PrimaryKey', 'IdProductAbstract'), $comparison);
        } else {
            throw new PropelException('filterBySpyProductAbstract() only accepts arguments of type \Orm\Zed\Product\Persistence\SpyProductAbstract or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyProductAbstract relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyProductAbstractStoreQuery The current query, for fluid interface
     */
    public function joinSpyProductAbstract($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyProductAbstract');

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
            $this->addJoinObject($join, 'SpyProductAbstract');
        }

        return $this;
    }

    /**
     * Use the SpyProductAbstract relation SpyProductAbstract object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Product\Persistence\SpyProductAbstractQuery A secondary query class using the current class as primary query
     */
    public function useSpyProductAbstractQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyProductAbstract($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyProductAbstract', '\Orm\Zed\Product\Persistence\SpyProductAbstractQuery');
    }

    /**
     * Use the SpyProductAbstract relation SpyProductAbstract object
     *
     * @param callable(\Orm\Zed\Product\Persistence\SpyProductAbstractQuery):\Orm\Zed\Product\Persistence\SpyProductAbstractQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyProductAbstractQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyProductAbstractQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyProductAbstract table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Product\Persistence\SpyProductAbstractQuery The inner query object of the EXISTS statement
     */
    public function useSpyProductAbstractExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyProductAbstract', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyProductAbstract table for a NOT EXISTS query.
     *
     * @see useSpyProductAbstractExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Product\Persistence\SpyProductAbstractQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyProductAbstractNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyProductAbstract', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Store\Persistence\SpyStore object
     *
     * @param \Orm\Zed\Store\Persistence\SpyStore|ObjectCollection $spyStore The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyProductAbstractStoreQuery The current query, for fluid interface
     */
    public function filterBySpyStore($spyStore, $comparison = null)
    {
        if ($spyStore instanceof \Orm\Zed\Store\Persistence\SpyStore) {
            return $this
                ->addUsingAlias(SpyProductAbstractStoreTableMap::COL_FK_STORE, $spyStore->getIdStore(), $comparison);
        } elseif ($spyStore instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyProductAbstractStoreTableMap::COL_FK_STORE, $spyStore->toKeyValue('PrimaryKey', 'IdStore'), $comparison);
        } else {
            throw new PropelException('filterBySpyStore() only accepts arguments of type \Orm\Zed\Store\Persistence\SpyStore or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyStore relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyProductAbstractStoreQuery The current query, for fluid interface
     */
    public function joinSpyStore($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyStore');

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
            $this->addJoinObject($join, 'SpyStore');
        }

        return $this;
    }

    /**
     * Use the SpyStore relation SpyStore object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Store\Persistence\SpyStoreQuery A secondary query class using the current class as primary query
     */
    public function useSpyStoreQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyStore($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyStore', '\Orm\Zed\Store\Persistence\SpyStoreQuery');
    }

    /**
     * Use the SpyStore relation SpyStore object
     *
     * @param callable(\Orm\Zed\Store\Persistence\SpyStoreQuery):\Orm\Zed\Store\Persistence\SpyStoreQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyStoreQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyStoreQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyStore table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Store\Persistence\SpyStoreQuery The inner query object of the EXISTS statement
     */
    public function useSpyStoreExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyStore', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyStore table for a NOT EXISTS query.
     *
     * @see useSpyStoreExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Store\Persistence\SpyStoreQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyStoreNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyStore', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Exclude object from result
     *
     * @param   ChildSpyProductAbstractStore $spyProductAbstractStore Object to remove from the list of results
     *
     * @return $this|ChildSpyProductAbstractStoreQuery The current query, for fluid interface
     */
    public function prune($spyProductAbstractStore = null)
    {
        if ($spyProductAbstractStore) {
            $this->addUsingAlias(SpyProductAbstractStoreTableMap::COL_ID_PRODUCT_ABSTRACT_STORE, $spyProductAbstractStore->getIdProductAbstractStore(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_product_abstract_store table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductAbstractStoreTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyProductAbstractStoreTableMap::clearInstancePool();
            SpyProductAbstractStoreTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductAbstractStoreTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyProductAbstractStoreTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyProductAbstractStoreTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyProductAbstractStoreTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SpyProductAbstractStoreQuery
