<?php

namespace Orm\Zed\CmsSlotStorage\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\CmsSlotStorage\Persistence\SpyCmsSlotStorage as ChildSpyCmsSlotStorage;
use Orm\Zed\CmsSlotStorage\Persistence\SpyCmsSlotStorageQuery as ChildSpyCmsSlotStorageQuery;
use Orm\Zed\CmsSlotStorage\Persistence\Map\SpyCmsSlotStorageTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;
use Spryker\Zed\PropelOrm\Business\Runtime\ActiveQuery\Criteria as SprykerCriteria;
use Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException;

/**
 * Base class that represents a query for the 'spy_cms_slot_storage' table.
 *
 *
 *
 * @method     ChildSpyCmsSlotStorageQuery orderByIdCmsSlotStorage($order = Criteria::ASC) Order by the id_cms_slot_storage column
 * @method     ChildSpyCmsSlotStorageQuery orderByCmsSlotKey($order = Criteria::ASC) Order by the cms_slot_key column
 * @method     ChildSpyCmsSlotStorageQuery orderByData($order = Criteria::ASC) Order by the data column
 * @method     ChildSpyCmsSlotStorageQuery orderByKey($order = Criteria::ASC) Order by the key column
 * @method     ChildSpyCmsSlotStorageQuery orderByAliasKeys($order = Criteria::ASC) Order by the alias_keys column
 *
 * @method     ChildSpyCmsSlotStorageQuery groupByIdCmsSlotStorage() Group by the id_cms_slot_storage column
 * @method     ChildSpyCmsSlotStorageQuery groupByCmsSlotKey() Group by the cms_slot_key column
 * @method     ChildSpyCmsSlotStorageQuery groupByData() Group by the data column
 * @method     ChildSpyCmsSlotStorageQuery groupByKey() Group by the key column
 * @method     ChildSpyCmsSlotStorageQuery groupByAliasKeys() Group by the alias_keys column
 *
 * @method     ChildSpyCmsSlotStorageQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyCmsSlotStorageQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyCmsSlotStorageQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyCmsSlotStorageQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyCmsSlotStorageQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyCmsSlotStorageQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyCmsSlotStorage|null findOne(ConnectionInterface $con = null) Return the first ChildSpyCmsSlotStorage matching the query
 * @method     ChildSpyCmsSlotStorage findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyCmsSlotStorage matching the query, or a new ChildSpyCmsSlotStorage object populated from the query conditions when no match is found
 *
 * @method     ChildSpyCmsSlotStorage|null findOneByIdCmsSlotStorage(int $id_cms_slot_storage) Return the first ChildSpyCmsSlotStorage filtered by the id_cms_slot_storage column
 * @method     ChildSpyCmsSlotStorage|null findOneByCmsSlotKey(string $cms_slot_key) Return the first ChildSpyCmsSlotStorage filtered by the cms_slot_key column
 * @method     ChildSpyCmsSlotStorage|null findOneByData(string $data) Return the first ChildSpyCmsSlotStorage filtered by the data column
 * @method     ChildSpyCmsSlotStorage|null findOneByKey(string $key) Return the first ChildSpyCmsSlotStorage filtered by the key column
 * @method     ChildSpyCmsSlotStorage|null findOneByAliasKeys(string $alias_keys) Return the first ChildSpyCmsSlotStorage filtered by the alias_keys column *

 * @method     ChildSpyCmsSlotStorage requirePk($key, ConnectionInterface $con = null) Return the ChildSpyCmsSlotStorage by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCmsSlotStorage requireOne(ConnectionInterface $con = null) Return the first ChildSpyCmsSlotStorage matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyCmsSlotStorage requireOneByIdCmsSlotStorage(int $id_cms_slot_storage) Return the first ChildSpyCmsSlotStorage filtered by the id_cms_slot_storage column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCmsSlotStorage requireOneByCmsSlotKey(string $cms_slot_key) Return the first ChildSpyCmsSlotStorage filtered by the cms_slot_key column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCmsSlotStorage requireOneByData(string $data) Return the first ChildSpyCmsSlotStorage filtered by the data column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCmsSlotStorage requireOneByKey(string $key) Return the first ChildSpyCmsSlotStorage filtered by the key column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCmsSlotStorage requireOneByAliasKeys(string $alias_keys) Return the first ChildSpyCmsSlotStorage filtered by the alias_keys column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyCmsSlotStorage[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyCmsSlotStorage objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCmsSlotStorage> find(ConnectionInterface $con = null) Return ChildSpyCmsSlotStorage objects based on current ModelCriteria
 * @method     ChildSpyCmsSlotStorage[]|ObjectCollection findByIdCmsSlotStorage(int $id_cms_slot_storage) Return ChildSpyCmsSlotStorage objects filtered by the id_cms_slot_storage column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCmsSlotStorage> findByIdCmsSlotStorage(int $id_cms_slot_storage) Return ChildSpyCmsSlotStorage objects filtered by the id_cms_slot_storage column
 * @method     ChildSpyCmsSlotStorage[]|ObjectCollection findByCmsSlotKey(string $cms_slot_key) Return ChildSpyCmsSlotStorage objects filtered by the cms_slot_key column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCmsSlotStorage> findByCmsSlotKey(string $cms_slot_key) Return ChildSpyCmsSlotStorage objects filtered by the cms_slot_key column
 * @method     ChildSpyCmsSlotStorage[]|ObjectCollection findByData(string $data) Return ChildSpyCmsSlotStorage objects filtered by the data column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCmsSlotStorage> findByData(string $data) Return ChildSpyCmsSlotStorage objects filtered by the data column
 * @method     ChildSpyCmsSlotStorage[]|ObjectCollection findByKey(string $key) Return ChildSpyCmsSlotStorage objects filtered by the key column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCmsSlotStorage> findByKey(string $key) Return ChildSpyCmsSlotStorage objects filtered by the key column
 * @method     ChildSpyCmsSlotStorage[]|ObjectCollection findByAliasKeys(string $alias_keys) Return ChildSpyCmsSlotStorage objects filtered by the alias_keys column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCmsSlotStorage> findByAliasKeys(string $alias_keys) Return ChildSpyCmsSlotStorage objects filtered by the alias_keys column
 * @method     ChildSpyCmsSlotStorage[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyCmsSlotStorage> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyCmsSlotStorageQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\CmsSlotStorage\Persistence\Base\SpyCmsSlotStorageQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\CmsSlotStorage\\Persistence\\SpyCmsSlotStorage', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyCmsSlotStorageQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyCmsSlotStorageQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyCmsSlotStorageQuery) {
            return $criteria;
        }
        $query = new ChildSpyCmsSlotStorageQuery();
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
     * @return ChildSpyCmsSlotStorage|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyCmsSlotStorageTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyCmsSlotStorage A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT `id_cms_slot_storage`, `cms_slot_key`, `data`, `key`, `alias_keys` FROM `spy_cms_slot_storage` WHERE `id_cms_slot_storage` = :p0';
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
            /** @var ChildSpyCmsSlotStorage $obj */
            $obj = new ChildSpyCmsSlotStorage();
            $obj->hydrate($row);
            SpyCmsSlotStorageTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyCmsSlotStorage|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyCmsSlotStorageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyCmsSlotStorageTableMap::COL_ID_CMS_SLOT_STORAGE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyCmsSlotStorageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyCmsSlotStorageTableMap::COL_ID_CMS_SLOT_STORAGE, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idCmsSlotStorage Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdCmsSlotStorage_Between(array $idCmsSlotStorage)
    {
        return $this->filterByIdCmsSlotStorage($idCmsSlotStorage, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idCmsSlotStorages Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdCmsSlotStorage_In(array $idCmsSlotStorages)
    {
        return $this->filterByIdCmsSlotStorage($idCmsSlotStorages, Criteria::IN);
    }

    /**
     * Filter the query on the id_cms_slot_storage column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCmsSlotStorage(1234); // WHERE id_cms_slot_storage = 1234
     * $query->filterByIdCmsSlotStorage(array(12, 34), Criteria::IN); // WHERE id_cms_slot_storage IN (12, 34)
     * $query->filterByIdCmsSlotStorage(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_cms_slot_storage > 12
     * </code>
     *
     * @param     mixed $idCmsSlotStorage The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdCmsSlotStorage($idCmsSlotStorage = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idCmsSlotStorage)) {
            $useMinMax = false;
            if (isset($idCmsSlotStorage['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCmsSlotStorageTableMap::COL_ID_CMS_SLOT_STORAGE, $idCmsSlotStorage['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCmsSlotStorage['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCmsSlotStorageTableMap::COL_ID_CMS_SLOT_STORAGE, $idCmsSlotStorage['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idCmsSlotStorage of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCmsSlotStorageTableMap::COL_ID_CMS_SLOT_STORAGE, $idCmsSlotStorage, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $cmsSlotKeys Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCmsSlotKey_In(array $cmsSlotKeys)
    {
        return $this->filterByCmsSlotKey($cmsSlotKeys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $cmsSlotKey Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCmsSlotKey_Like($cmsSlotKey)
    {
        return $this->filterByCmsSlotKey($cmsSlotKey, Criteria::LIKE);
    }

    /**
     * Filter the query on the cms_slot_key column
     *
     * Example usage:
     * <code>
     * $query->filterByCmsSlotKey('fooValue');   // WHERE cms_slot_key = 'fooValue'
     * $query->filterByCmsSlotKey('%fooValue%', Criteria::LIKE); // WHERE cms_slot_key LIKE '%fooValue%'
     * $query->filterByCmsSlotKey([1, 'foo'], Criteria::IN); // WHERE cms_slot_key IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $cmsSlotKey The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByCmsSlotKey($cmsSlotKey = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $cmsSlotKey = str_replace('*', '%', $cmsSlotKey);
        }

        if (is_array($cmsSlotKey) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$cmsSlotKey of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyCmsSlotStorageTableMap::COL_CMS_SLOT_KEY, $cmsSlotKey, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $datas Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByData_In(array $datas)
    {
        return $this->filterByData($datas, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $data Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByData_Like($data)
    {
        return $this->filterByData($data, Criteria::LIKE);
    }

    /**
     * Filter the query on the data column
     *
     * Example usage:
     * <code>
     * $query->filterByData('fooValue');   // WHERE data = 'fooValue'
     * $query->filterByData('%fooValue%', Criteria::LIKE); // WHERE data LIKE '%fooValue%'
     * $query->filterByData([1, 'foo'], Criteria::IN); // WHERE data IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $data The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByData($data = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $data = str_replace('*', '%', $data);
        }

        if (is_array($data) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$data of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyCmsSlotStorageTableMap::COL_DATA, $data, $comparison);

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

        $query = $this->addUsingAlias(SpyCmsSlotStorageTableMap::COL_KEY, $key, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $aliasKeyss Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAliasKeys_In(array $aliasKeyss)
    {
        return $this->filterByAliasKeys($aliasKeyss, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $aliasKeys Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAliasKeys_Like($aliasKeys)
    {
        return $this->filterByAliasKeys($aliasKeys, Criteria::LIKE);
    }

    /**
     * Filter the query on the alias_keys column
     *
     * Example usage:
     * <code>
     * $query->filterByAliasKeys('fooValue');   // WHERE alias_keys = 'fooValue'
     * $query->filterByAliasKeys('%fooValue%', Criteria::LIKE); // WHERE alias_keys LIKE '%fooValue%'
     * $query->filterByAliasKeys([1, 'foo'], Criteria::IN); // WHERE alias_keys IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $aliasKeys The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByAliasKeys($aliasKeys = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $aliasKeys = str_replace('*', '%', $aliasKeys);
        }

        if (is_array($aliasKeys) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$aliasKeys of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyCmsSlotStorageTableMap::COL_ALIAS_KEYS, $aliasKeys, $comparison);

        return $query;
    }

    /**
     * Exclude object from result
     *
     * @param   ChildSpyCmsSlotStorage $spyCmsSlotStorage Object to remove from the list of results
     *
     * @return $this|ChildSpyCmsSlotStorageQuery The current query, for fluid interface
     */
    public function prune($spyCmsSlotStorage = null)
    {
        if ($spyCmsSlotStorage) {
            $this->addUsingAlias(SpyCmsSlotStorageTableMap::COL_ID_CMS_SLOT_STORAGE, $spyCmsSlotStorage->getIdCmsSlotStorage(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_cms_slot_storage table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCmsSlotStorageTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyCmsSlotStorageTableMap::clearInstancePool();
            SpyCmsSlotStorageTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCmsSlotStorageTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyCmsSlotStorageTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyCmsSlotStorageTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyCmsSlotStorageTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SpyCmsSlotStorageQuery
