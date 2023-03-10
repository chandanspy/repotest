<?php

namespace Orm\Zed\Touch\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\Locale\Persistence\SpyLocale;
use Orm\Zed\Store\Persistence\SpyStore;
use Orm\Zed\Touch\Persistence\SpyTouchStorage as ChildSpyTouchStorage;
use Orm\Zed\Touch\Persistence\SpyTouchStorageQuery as ChildSpyTouchStorageQuery;
use Orm\Zed\Touch\Persistence\Map\SpyTouchStorageTableMap;
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
 * Base class that represents a query for the 'spy_touch_storage' table.
 *
 *
 *
 * @method     ChildSpyTouchStorageQuery orderByIdTouchStorage($order = Criteria::ASC) Order by the id_touch_storage column
 * @method     ChildSpyTouchStorageQuery orderByFkLocale($order = Criteria::ASC) Order by the fk_locale column
 * @method     ChildSpyTouchStorageQuery orderByFkStore($order = Criteria::ASC) Order by the fk_store column
 * @method     ChildSpyTouchStorageQuery orderByFkTouch($order = Criteria::ASC) Order by the fk_touch column
 * @method     ChildSpyTouchStorageQuery orderByKey($order = Criteria::ASC) Order by the key column
 *
 * @method     ChildSpyTouchStorageQuery groupByIdTouchStorage() Group by the id_touch_storage column
 * @method     ChildSpyTouchStorageQuery groupByFkLocale() Group by the fk_locale column
 * @method     ChildSpyTouchStorageQuery groupByFkStore() Group by the fk_store column
 * @method     ChildSpyTouchStorageQuery groupByFkTouch() Group by the fk_touch column
 * @method     ChildSpyTouchStorageQuery groupByKey() Group by the key column
 *
 * @method     ChildSpyTouchStorageQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyTouchStorageQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyTouchStorageQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyTouchStorageQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyTouchStorageQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyTouchStorageQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyTouchStorageQuery leftJoinTouch($relationAlias = null) Adds a LEFT JOIN clause to the query using the Touch relation
 * @method     ChildSpyTouchStorageQuery rightJoinTouch($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Touch relation
 * @method     ChildSpyTouchStorageQuery innerJoinTouch($relationAlias = null) Adds a INNER JOIN clause to the query using the Touch relation
 *
 * @method     ChildSpyTouchStorageQuery joinWithTouch($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Touch relation
 *
 * @method     ChildSpyTouchStorageQuery leftJoinWithTouch() Adds a LEFT JOIN clause and with to the query using the Touch relation
 * @method     ChildSpyTouchStorageQuery rightJoinWithTouch() Adds a RIGHT JOIN clause and with to the query using the Touch relation
 * @method     ChildSpyTouchStorageQuery innerJoinWithTouch() Adds a INNER JOIN clause and with to the query using the Touch relation
 *
 * @method     ChildSpyTouchStorageQuery leftJoinStore($relationAlias = null) Adds a LEFT JOIN clause to the query using the Store relation
 * @method     ChildSpyTouchStorageQuery rightJoinStore($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Store relation
 * @method     ChildSpyTouchStorageQuery innerJoinStore($relationAlias = null) Adds a INNER JOIN clause to the query using the Store relation
 *
 * @method     ChildSpyTouchStorageQuery joinWithStore($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Store relation
 *
 * @method     ChildSpyTouchStorageQuery leftJoinWithStore() Adds a LEFT JOIN clause and with to the query using the Store relation
 * @method     ChildSpyTouchStorageQuery rightJoinWithStore() Adds a RIGHT JOIN clause and with to the query using the Store relation
 * @method     ChildSpyTouchStorageQuery innerJoinWithStore() Adds a INNER JOIN clause and with to the query using the Store relation
 *
 * @method     ChildSpyTouchStorageQuery leftJoinLocale($relationAlias = null) Adds a LEFT JOIN clause to the query using the Locale relation
 * @method     ChildSpyTouchStorageQuery rightJoinLocale($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Locale relation
 * @method     ChildSpyTouchStorageQuery innerJoinLocale($relationAlias = null) Adds a INNER JOIN clause to the query using the Locale relation
 *
 * @method     ChildSpyTouchStorageQuery joinWithLocale($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Locale relation
 *
 * @method     ChildSpyTouchStorageQuery leftJoinWithLocale() Adds a LEFT JOIN clause and with to the query using the Locale relation
 * @method     ChildSpyTouchStorageQuery rightJoinWithLocale() Adds a RIGHT JOIN clause and with to the query using the Locale relation
 * @method     ChildSpyTouchStorageQuery innerJoinWithLocale() Adds a INNER JOIN clause and with to the query using the Locale relation
 *
 * @method     \Orm\Zed\Touch\Persistence\SpyTouchQuery|\Orm\Zed\Store\Persistence\SpyStoreQuery|\Orm\Zed\Locale\Persistence\SpyLocaleQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyTouchStorage|null findOne(ConnectionInterface $con = null) Return the first ChildSpyTouchStorage matching the query
 * @method     ChildSpyTouchStorage findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyTouchStorage matching the query, or a new ChildSpyTouchStorage object populated from the query conditions when no match is found
 *
 * @method     ChildSpyTouchStorage|null findOneByIdTouchStorage(int $id_touch_storage) Return the first ChildSpyTouchStorage filtered by the id_touch_storage column
 * @method     ChildSpyTouchStorage|null findOneByFkLocale(int $fk_locale) Return the first ChildSpyTouchStorage filtered by the fk_locale column
 * @method     ChildSpyTouchStorage|null findOneByFkStore(int $fk_store) Return the first ChildSpyTouchStorage filtered by the fk_store column
 * @method     ChildSpyTouchStorage|null findOneByFkTouch(int $fk_touch) Return the first ChildSpyTouchStorage filtered by the fk_touch column
 * @method     ChildSpyTouchStorage|null findOneByKey(string $key) Return the first ChildSpyTouchStorage filtered by the key column *

 * @method     ChildSpyTouchStorage requirePk($key, ConnectionInterface $con = null) Return the ChildSpyTouchStorage by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyTouchStorage requireOne(ConnectionInterface $con = null) Return the first ChildSpyTouchStorage matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyTouchStorage requireOneByIdTouchStorage(int $id_touch_storage) Return the first ChildSpyTouchStorage filtered by the id_touch_storage column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyTouchStorage requireOneByFkLocale(int $fk_locale) Return the first ChildSpyTouchStorage filtered by the fk_locale column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyTouchStorage requireOneByFkStore(int $fk_store) Return the first ChildSpyTouchStorage filtered by the fk_store column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyTouchStorage requireOneByFkTouch(int $fk_touch) Return the first ChildSpyTouchStorage filtered by the fk_touch column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyTouchStorage requireOneByKey(string $key) Return the first ChildSpyTouchStorage filtered by the key column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyTouchStorage[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyTouchStorage objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyTouchStorage> find(ConnectionInterface $con = null) Return ChildSpyTouchStorage objects based on current ModelCriteria
 * @method     ChildSpyTouchStorage[]|ObjectCollection findByIdTouchStorage(int $id_touch_storage) Return ChildSpyTouchStorage objects filtered by the id_touch_storage column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyTouchStorage> findByIdTouchStorage(int $id_touch_storage) Return ChildSpyTouchStorage objects filtered by the id_touch_storage column
 * @method     ChildSpyTouchStorage[]|ObjectCollection findByFkLocale(int $fk_locale) Return ChildSpyTouchStorage objects filtered by the fk_locale column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyTouchStorage> findByFkLocale(int $fk_locale) Return ChildSpyTouchStorage objects filtered by the fk_locale column
 * @method     ChildSpyTouchStorage[]|ObjectCollection findByFkStore(int $fk_store) Return ChildSpyTouchStorage objects filtered by the fk_store column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyTouchStorage> findByFkStore(int $fk_store) Return ChildSpyTouchStorage objects filtered by the fk_store column
 * @method     ChildSpyTouchStorage[]|ObjectCollection findByFkTouch(int $fk_touch) Return ChildSpyTouchStorage objects filtered by the fk_touch column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyTouchStorage> findByFkTouch(int $fk_touch) Return ChildSpyTouchStorage objects filtered by the fk_touch column
 * @method     ChildSpyTouchStorage[]|ObjectCollection findByKey(string $key) Return ChildSpyTouchStorage objects filtered by the key column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyTouchStorage> findByKey(string $key) Return ChildSpyTouchStorage objects filtered by the key column
 * @method     ChildSpyTouchStorage[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyTouchStorage> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyTouchStorageQuery extends ModelCriteria
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

    // query_cache behavior
    protected $queryKey = '';
    protected static $cacheBackend;
                protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Orm\Zed\Touch\Persistence\Base\SpyTouchStorageQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\Touch\\Persistence\\SpyTouchStorage', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyTouchStorageQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyTouchStorageQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyTouchStorageQuery) {
            return $criteria;
        }
        $query = new ChildSpyTouchStorageQuery();
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
     * @return ChildSpyTouchStorage|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyTouchStorageTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyTouchStorage A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT `id_touch_storage`, `fk_locale`, `fk_store`, `fk_touch`, `key` FROM `spy_touch_storage` WHERE `id_touch_storage` = :p0';
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
            /** @var ChildSpyTouchStorage $obj */
            $obj = new ChildSpyTouchStorage();
            $obj->hydrate($row);
            SpyTouchStorageTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyTouchStorage|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyTouchStorageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyTouchStorageTableMap::COL_ID_TOUCH_STORAGE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyTouchStorageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyTouchStorageTableMap::COL_ID_TOUCH_STORAGE, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idTouchStorage Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdTouchStorage_Between(array $idTouchStorage)
    {
        return $this->filterByIdTouchStorage($idTouchStorage, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idTouchStorages Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdTouchStorage_In(array $idTouchStorages)
    {
        return $this->filterByIdTouchStorage($idTouchStorages, Criteria::IN);
    }

    /**
     * Filter the query on the id_touch_storage column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTouchStorage(1234); // WHERE id_touch_storage = 1234
     * $query->filterByIdTouchStorage(array(12, 34), Criteria::IN); // WHERE id_touch_storage IN (12, 34)
     * $query->filterByIdTouchStorage(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_touch_storage > 12
     * </code>
     *
     * @param     mixed $idTouchStorage The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdTouchStorage($idTouchStorage = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idTouchStorage)) {
            $useMinMax = false;
            if (isset($idTouchStorage['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyTouchStorageTableMap::COL_ID_TOUCH_STORAGE, $idTouchStorage['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTouchStorage['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyTouchStorageTableMap::COL_ID_TOUCH_STORAGE, $idTouchStorage['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idTouchStorage of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyTouchStorageTableMap::COL_ID_TOUCH_STORAGE, $idTouchStorage, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkLocale Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkLocale_Between(array $fkLocale)
    {
        return $this->filterByFkLocale($fkLocale, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkLocales Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkLocale_In(array $fkLocales)
    {
        return $this->filterByFkLocale($fkLocales, Criteria::IN);
    }

    /**
     * Filter the query on the fk_locale column
     *
     * Example usage:
     * <code>
     * $query->filterByFkLocale(1234); // WHERE fk_locale = 1234
     * $query->filterByFkLocale(array(12, 34), Criteria::IN); // WHERE fk_locale IN (12, 34)
     * $query->filterByFkLocale(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_locale > 12
     * </code>
     *
     * @see       filterByLocale()
     *
     * @param     mixed $fkLocale The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkLocale($fkLocale = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkLocale)) {
            $useMinMax = false;
            if (isset($fkLocale['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyTouchStorageTableMap::COL_FK_LOCALE, $fkLocale['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkLocale['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyTouchStorageTableMap::COL_FK_LOCALE, $fkLocale['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkLocale of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyTouchStorageTableMap::COL_FK_LOCALE, $fkLocale, $comparison);

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
     * @see       filterByStore()
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
                $this->addUsingAlias(SpyTouchStorageTableMap::COL_FK_STORE, $fkStore['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkStore['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyTouchStorageTableMap::COL_FK_STORE, $fkStore['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkStore of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyTouchStorageTableMap::COL_FK_STORE, $fkStore, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkTouch Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkTouch_Between(array $fkTouch)
    {
        return $this->filterByFkTouch($fkTouch, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkTouchs Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkTouch_In(array $fkTouchs)
    {
        return $this->filterByFkTouch($fkTouchs, Criteria::IN);
    }

    /**
     * Filter the query on the fk_touch column
     *
     * Example usage:
     * <code>
     * $query->filterByFkTouch(1234); // WHERE fk_touch = 1234
     * $query->filterByFkTouch(array(12, 34), Criteria::IN); // WHERE fk_touch IN (12, 34)
     * $query->filterByFkTouch(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_touch > 12
     * </code>
     *
     * @see       filterByTouch()
     *
     * @param     mixed $fkTouch The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkTouch($fkTouch = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkTouch)) {
            $useMinMax = false;
            if (isset($fkTouch['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyTouchStorageTableMap::COL_FK_TOUCH, $fkTouch['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkTouch['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyTouchStorageTableMap::COL_FK_TOUCH, $fkTouch['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkTouch of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyTouchStorageTableMap::COL_FK_TOUCH, $fkTouch, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $keys Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByKey_In(array $keys)
    {
        return $this->filterByKey($keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $key Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByKey_Like($key)
    {
        return $this->filterByKey($key, Criteria::LIKE);
    }

    /**
     * Filter the query on the key column
     *
     * Example usage:
     * <code>
     * $query->filterByKey('fooValue');   // WHERE key = 'fooValue'
     * $query->filterByKey('%fooValue%', Criteria::LIKE); // WHERE key LIKE '%fooValue%'
     * $query->filterByKey([1, 'foo'], Criteria::IN); // WHERE key IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $key The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByKey($key = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $key = str_replace('*', '%', $key);
        }

        if (is_array($key) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$key of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyTouchStorageTableMap::COL_KEY, $key, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\Touch\Persistence\SpyTouch object
     *
     * @param \Orm\Zed\Touch\Persistence\SpyTouch|ObjectCollection $spyTouch The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyTouchStorageQuery The current query, for fluid interface
     */
    public function filterByTouch($spyTouch, $comparison = null)
    {
        if ($spyTouch instanceof \Orm\Zed\Touch\Persistence\SpyTouch) {
            return $this
                ->addUsingAlias(SpyTouchStorageTableMap::COL_FK_TOUCH, $spyTouch->getIdTouch(), $comparison);
        } elseif ($spyTouch instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyTouchStorageTableMap::COL_FK_TOUCH, $spyTouch->toKeyValue('PrimaryKey', 'IdTouch'), $comparison);
        } else {
            throw new PropelException('filterByTouch() only accepts arguments of type \Orm\Zed\Touch\Persistence\SpyTouch or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Touch relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyTouchStorageQuery The current query, for fluid interface
     */
    public function joinTouch($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Touch');

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
            $this->addJoinObject($join, 'Touch');
        }

        return $this;
    }

    /**
     * Use the Touch relation SpyTouch object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Touch\Persistence\SpyTouchQuery A secondary query class using the current class as primary query
     */
    public function useTouchQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTouch($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Touch', '\Orm\Zed\Touch\Persistence\SpyTouchQuery');
    }

    /**
     * Use the Touch relation SpyTouch object
     *
     * @param callable(\Orm\Zed\Touch\Persistence\SpyTouchQuery):\Orm\Zed\Touch\Persistence\SpyTouchQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withTouchQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useTouchQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the Touch relation to the SpyTouch table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Touch\Persistence\SpyTouchQuery The inner query object of the EXISTS statement
     */
    public function useTouchExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('Touch', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the Touch relation to the SpyTouch table for a NOT EXISTS query.
     *
     * @see useTouchExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Touch\Persistence\SpyTouchQuery The inner query object of the NOT EXISTS statement
     */
    public function useTouchNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('Touch', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Store\Persistence\SpyStore object
     *
     * @param \Orm\Zed\Store\Persistence\SpyStore|ObjectCollection $spyStore The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyTouchStorageQuery The current query, for fluid interface
     */
    public function filterByStore($spyStore, $comparison = null)
    {
        if ($spyStore instanceof \Orm\Zed\Store\Persistence\SpyStore) {
            return $this
                ->addUsingAlias(SpyTouchStorageTableMap::COL_FK_STORE, $spyStore->getIdStore(), $comparison);
        } elseif ($spyStore instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyTouchStorageTableMap::COL_FK_STORE, $spyStore->toKeyValue('PrimaryKey', 'IdStore'), $comparison);
        } else {
            throw new PropelException('filterByStore() only accepts arguments of type \Orm\Zed\Store\Persistence\SpyStore or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Store relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyTouchStorageQuery The current query, for fluid interface
     */
    public function joinStore($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Store');

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
            $this->addJoinObject($join, 'Store');
        }

        return $this;
    }

    /**
     * Use the Store relation SpyStore object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Store\Persistence\SpyStoreQuery A secondary query class using the current class as primary query
     */
    public function useStoreQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinStore($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Store', '\Orm\Zed\Store\Persistence\SpyStoreQuery');
    }

    /**
     * Use the Store relation SpyStore object
     *
     * @param callable(\Orm\Zed\Store\Persistence\SpyStoreQuery):\Orm\Zed\Store\Persistence\SpyStoreQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withStoreQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useStoreQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the Store relation to the SpyStore table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Store\Persistence\SpyStoreQuery The inner query object of the EXISTS statement
     */
    public function useStoreExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('Store', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the Store relation to the SpyStore table for a NOT EXISTS query.
     *
     * @see useStoreExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Store\Persistence\SpyStoreQuery The inner query object of the NOT EXISTS statement
     */
    public function useStoreNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('Store', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Locale\Persistence\SpyLocale object
     *
     * @param \Orm\Zed\Locale\Persistence\SpyLocale|ObjectCollection $spyLocale The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyTouchStorageQuery The current query, for fluid interface
     */
    public function filterByLocale($spyLocale, $comparison = null)
    {
        if ($spyLocale instanceof \Orm\Zed\Locale\Persistence\SpyLocale) {
            return $this
                ->addUsingAlias(SpyTouchStorageTableMap::COL_FK_LOCALE, $spyLocale->getIdLocale(), $comparison);
        } elseif ($spyLocale instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyTouchStorageTableMap::COL_FK_LOCALE, $spyLocale->toKeyValue('PrimaryKey', 'IdLocale'), $comparison);
        } else {
            throw new PropelException('filterByLocale() only accepts arguments of type \Orm\Zed\Locale\Persistence\SpyLocale or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Locale relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyTouchStorageQuery The current query, for fluid interface
     */
    public function joinLocale($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Locale');

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
            $this->addJoinObject($join, 'Locale');
        }

        return $this;
    }

    /**
     * Use the Locale relation SpyLocale object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Locale\Persistence\SpyLocaleQuery A secondary query class using the current class as primary query
     */
    public function useLocaleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinLocale($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Locale', '\Orm\Zed\Locale\Persistence\SpyLocaleQuery');
    }

    /**
     * Use the Locale relation SpyLocale object
     *
     * @param callable(\Orm\Zed\Locale\Persistence\SpyLocaleQuery):\Orm\Zed\Locale\Persistence\SpyLocaleQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withLocaleQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useLocaleQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the Locale relation to the SpyLocale table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Locale\Persistence\SpyLocaleQuery The inner query object of the EXISTS statement
     */
    public function useLocaleExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('Locale', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the Locale relation to the SpyLocale table for a NOT EXISTS query.
     *
     * @see useLocaleExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Locale\Persistence\SpyLocaleQuery The inner query object of the NOT EXISTS statement
     */
    public function useLocaleNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('Locale', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Exclude object from result
     *
     * @param   ChildSpyTouchStorage $spyTouchStorage Object to remove from the list of results
     *
     * @return $this|ChildSpyTouchStorageQuery The current query, for fluid interface
     */
    public function prune($spyTouchStorage = null)
    {
        if ($spyTouchStorage) {
            $this->addUsingAlias(SpyTouchStorageTableMap::COL_ID_TOUCH_STORAGE, $spyTouchStorage->getIdTouchStorage(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_touch_storage table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyTouchStorageTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyTouchStorageTableMap::clearInstancePool();
            SpyTouchStorageTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyTouchStorageTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyTouchStorageTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyTouchStorageTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyTouchStorageTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    // query_cache behavior

    public function setQueryKey($key)
    {
        $this->queryKey = $key;

        return $this;
    }

    public function getQueryKey()
    {
        return $this->queryKey;
    }

    public function cacheContains($key)
    {
        throw new PropelException('You must override the cacheContains(), cacheStore(), and cacheFetch() methods to enable query cache');
    }

    public function cacheFetch($key)
    {
        throw new PropelException('You must override the cacheContains(), cacheStore(), and cacheFetch() methods to enable query cache');
    }

    public function cacheStore($key, $value, $lifetime = 3600)
    {
        throw new PropelException('You must override the cacheContains(), cacheStore(), and cacheFetch() methods to enable query cache');
    }

    public function doSelect(ConnectionInterface $con = null)
    {
        // check that the columns of the main class are already added (if this is the primary ModelCriteria)
        if (!$this->hasSelectClause() && !$this->getPrimaryCriteria()) {
            $this->addSelfSelectColumns();
        }
        $this->configureSelectColumns();

        $dbMap = Propel::getServiceContainer()->getDatabaseMap(SpyTouchStorageTableMap::DATABASE_NAME);
        $db = Propel::getServiceContainer()->getAdapter(SpyTouchStorageTableMap::DATABASE_NAME);

        $key = $this->getQueryKey();
        if ($key && $this->cacheContains($key)) {
            $params = $this->getParams();
            $sql = $this->cacheFetch($key);
        } else {
            $params = array();
            $sql = $this->createSelectSql($params);
        }

        try {
            $stmt = $con->prepare($sql);
            $db->bindValues($stmt, $params, $dbMap);
            $stmt->execute();
            } catch (Exception $e) {
                Propel::log($e->getMessage(), Propel::LOG_ERR);
                throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
            }

        if ($key && !$this->cacheContains($key)) {
                $this->cacheStore($key, $sql);
        }

        return $con->getDataFetcher($stmt);
    }

    public function doCount(ConnectionInterface $con = null)
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap($this->getDbName());
        $db = Propel::getServiceContainer()->getAdapter($this->getDbName());

        $key = $this->getQueryKey();
        if ($key && $this->cacheContains($key)) {
            $params = $this->getParams();
            $sql = $this->cacheFetch($key);
        } else {
            // check that the columns of the main class are already added (if this is the primary ModelCriteria)
            if (!$this->hasSelectClause() && !$this->getPrimaryCriteria()) {
                $this->addSelfSelectColumns();
            }

            $this->configureSelectColumns();

            $needsComplexCount = $this->getGroupByColumns()
                || $this->getOffset()
                || $this->getLimit() >= 0
                || $this->getHaving()
                || in_array(Criteria::DISTINCT, $this->getSelectModifiers())
                || count($this->selectQueries) > 0
            ;

            $params = array();
            if ($needsComplexCount) {
                if ($this->needsSelectAliases()) {
                    if ($this->getHaving()) {
                        throw new PropelException('Propel cannot create a COUNT query when using HAVING and  duplicate column names in the SELECT part');
                    }
                    $db->turnSelectColumnsToAliases($this);
                }
                $selectSql = $this->createSelectSql($params);
                $sql = 'SELECT COUNT(*) FROM (' . $selectSql . ') propelmatch4cnt';
            } else {
                // Replace SELECT columns with COUNT(*)
                $this->clearSelectColumns()->addSelectColumn('COUNT(*)');
                $sql = $this->createSelectSql($params);
            }
        }

        try {
            $stmt = $con->prepare($sql);
            $db->bindValues($stmt, $params, $dbMap);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute COUNT statement [%s]', $sql), 0, $e);
        }

        if ($key && !$this->cacheContains($key)) {
                $this->cacheStore($key, $sql);
        }

        return $con->getDataFetcher($stmt);
    }

} // SpyTouchStorageQuery
