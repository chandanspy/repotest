<?php

namespace Orm\Zed\CategoryStorage\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\CategoryStorage\Persistence\SpyCategoryNodeStorage as ChildSpyCategoryNodeStorage;
use Orm\Zed\CategoryStorage\Persistence\SpyCategoryNodeStorageQuery as ChildSpyCategoryNodeStorageQuery;
use Orm\Zed\CategoryStorage\Persistence\Map\SpyCategoryNodeStorageTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;
use Spryker\Zed\PropelOrm\Business\Runtime\ActiveQuery\Criteria as SprykerCriteria;
use Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException;

/**
 * Base class that represents a query for the 'spy_category_node_storage' table.
 *
 *
 *
 * @method     ChildSpyCategoryNodeStorageQuery orderByIdCategoryNodeStorage($order = Criteria::ASC) Order by the id_category_node_storage column
 * @method     ChildSpyCategoryNodeStorageQuery orderByFkCategoryNode($order = Criteria::ASC) Order by the fk_category_node column
 * @method     ChildSpyCategoryNodeStorageQuery orderByData($order = Criteria::ASC) Order by the data column
 * @method     ChildSpyCategoryNodeStorageQuery orderByStore($order = Criteria::ASC) Order by the store column
 * @method     ChildSpyCategoryNodeStorageQuery orderByLocale($order = Criteria::ASC) Order by the locale column
 * @method     ChildSpyCategoryNodeStorageQuery orderByAliasKeys($order = Criteria::ASC) Order by the alias_keys column
 * @method     ChildSpyCategoryNodeStorageQuery orderByKey($order = Criteria::ASC) Order by the key column
 * @method     ChildSpyCategoryNodeStorageQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildSpyCategoryNodeStorageQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ChildSpyCategoryNodeStorageQuery groupByIdCategoryNodeStorage() Group by the id_category_node_storage column
 * @method     ChildSpyCategoryNodeStorageQuery groupByFkCategoryNode() Group by the fk_category_node column
 * @method     ChildSpyCategoryNodeStorageQuery groupByData() Group by the data column
 * @method     ChildSpyCategoryNodeStorageQuery groupByStore() Group by the store column
 * @method     ChildSpyCategoryNodeStorageQuery groupByLocale() Group by the locale column
 * @method     ChildSpyCategoryNodeStorageQuery groupByAliasKeys() Group by the alias_keys column
 * @method     ChildSpyCategoryNodeStorageQuery groupByKey() Group by the key column
 * @method     ChildSpyCategoryNodeStorageQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildSpyCategoryNodeStorageQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ChildSpyCategoryNodeStorageQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyCategoryNodeStorageQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyCategoryNodeStorageQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyCategoryNodeStorageQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyCategoryNodeStorageQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyCategoryNodeStorageQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyCategoryNodeStorage|null findOne(ConnectionInterface $con = null) Return the first ChildSpyCategoryNodeStorage matching the query
 * @method     ChildSpyCategoryNodeStorage findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyCategoryNodeStorage matching the query, or a new ChildSpyCategoryNodeStorage object populated from the query conditions when no match is found
 *
 * @method     ChildSpyCategoryNodeStorage|null findOneByIdCategoryNodeStorage(string $id_category_node_storage) Return the first ChildSpyCategoryNodeStorage filtered by the id_category_node_storage column
 * @method     ChildSpyCategoryNodeStorage|null findOneByFkCategoryNode(int $fk_category_node) Return the first ChildSpyCategoryNodeStorage filtered by the fk_category_node column
 * @method     ChildSpyCategoryNodeStorage|null findOneByData(string $data) Return the first ChildSpyCategoryNodeStorage filtered by the data column
 * @method     ChildSpyCategoryNodeStorage|null findOneByStore(string $store) Return the first ChildSpyCategoryNodeStorage filtered by the store column
 * @method     ChildSpyCategoryNodeStorage|null findOneByLocale(string $locale) Return the first ChildSpyCategoryNodeStorage filtered by the locale column
 * @method     ChildSpyCategoryNodeStorage|null findOneByAliasKeys(string $alias_keys) Return the first ChildSpyCategoryNodeStorage filtered by the alias_keys column
 * @method     ChildSpyCategoryNodeStorage|null findOneByKey(string $key) Return the first ChildSpyCategoryNodeStorage filtered by the key column
 * @method     ChildSpyCategoryNodeStorage|null findOneByCreatedAt(string $created_at) Return the first ChildSpyCategoryNodeStorage filtered by the created_at column
 * @method     ChildSpyCategoryNodeStorage|null findOneByUpdatedAt(string $updated_at) Return the first ChildSpyCategoryNodeStorage filtered by the updated_at column *

 * @method     ChildSpyCategoryNodeStorage requirePk($key, ConnectionInterface $con = null) Return the ChildSpyCategoryNodeStorage by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCategoryNodeStorage requireOne(ConnectionInterface $con = null) Return the first ChildSpyCategoryNodeStorage matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyCategoryNodeStorage requireOneByIdCategoryNodeStorage(string $id_category_node_storage) Return the first ChildSpyCategoryNodeStorage filtered by the id_category_node_storage column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCategoryNodeStorage requireOneByFkCategoryNode(int $fk_category_node) Return the first ChildSpyCategoryNodeStorage filtered by the fk_category_node column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCategoryNodeStorage requireOneByData(string $data) Return the first ChildSpyCategoryNodeStorage filtered by the data column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCategoryNodeStorage requireOneByStore(string $store) Return the first ChildSpyCategoryNodeStorage filtered by the store column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCategoryNodeStorage requireOneByLocale(string $locale) Return the first ChildSpyCategoryNodeStorage filtered by the locale column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCategoryNodeStorage requireOneByAliasKeys(string $alias_keys) Return the first ChildSpyCategoryNodeStorage filtered by the alias_keys column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCategoryNodeStorage requireOneByKey(string $key) Return the first ChildSpyCategoryNodeStorage filtered by the key column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCategoryNodeStorage requireOneByCreatedAt(string $created_at) Return the first ChildSpyCategoryNodeStorage filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCategoryNodeStorage requireOneByUpdatedAt(string $updated_at) Return the first ChildSpyCategoryNodeStorage filtered by the updated_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyCategoryNodeStorage[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyCategoryNodeStorage objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCategoryNodeStorage> find(ConnectionInterface $con = null) Return ChildSpyCategoryNodeStorage objects based on current ModelCriteria
 * @method     ChildSpyCategoryNodeStorage[]|ObjectCollection findByIdCategoryNodeStorage(string $id_category_node_storage) Return ChildSpyCategoryNodeStorage objects filtered by the id_category_node_storage column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCategoryNodeStorage> findByIdCategoryNodeStorage(string $id_category_node_storage) Return ChildSpyCategoryNodeStorage objects filtered by the id_category_node_storage column
 * @method     ChildSpyCategoryNodeStorage[]|ObjectCollection findByFkCategoryNode(int $fk_category_node) Return ChildSpyCategoryNodeStorage objects filtered by the fk_category_node column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCategoryNodeStorage> findByFkCategoryNode(int $fk_category_node) Return ChildSpyCategoryNodeStorage objects filtered by the fk_category_node column
 * @method     ChildSpyCategoryNodeStorage[]|ObjectCollection findByData(string $data) Return ChildSpyCategoryNodeStorage objects filtered by the data column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCategoryNodeStorage> findByData(string $data) Return ChildSpyCategoryNodeStorage objects filtered by the data column
 * @method     ChildSpyCategoryNodeStorage[]|ObjectCollection findByStore(string $store) Return ChildSpyCategoryNodeStorage objects filtered by the store column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCategoryNodeStorage> findByStore(string $store) Return ChildSpyCategoryNodeStorage objects filtered by the store column
 * @method     ChildSpyCategoryNodeStorage[]|ObjectCollection findByLocale(string $locale) Return ChildSpyCategoryNodeStorage objects filtered by the locale column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCategoryNodeStorage> findByLocale(string $locale) Return ChildSpyCategoryNodeStorage objects filtered by the locale column
 * @method     ChildSpyCategoryNodeStorage[]|ObjectCollection findByAliasKeys(string $alias_keys) Return ChildSpyCategoryNodeStorage objects filtered by the alias_keys column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCategoryNodeStorage> findByAliasKeys(string $alias_keys) Return ChildSpyCategoryNodeStorage objects filtered by the alias_keys column
 * @method     ChildSpyCategoryNodeStorage[]|ObjectCollection findByKey(string $key) Return ChildSpyCategoryNodeStorage objects filtered by the key column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCategoryNodeStorage> findByKey(string $key) Return ChildSpyCategoryNodeStorage objects filtered by the key column
 * @method     ChildSpyCategoryNodeStorage[]|ObjectCollection findByCreatedAt(string $created_at) Return ChildSpyCategoryNodeStorage objects filtered by the created_at column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCategoryNodeStorage> findByCreatedAt(string $created_at) Return ChildSpyCategoryNodeStorage objects filtered by the created_at column
 * @method     ChildSpyCategoryNodeStorage[]|ObjectCollection findByUpdatedAt(string $updated_at) Return ChildSpyCategoryNodeStorage objects filtered by the updated_at column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCategoryNodeStorage> findByUpdatedAt(string $updated_at) Return ChildSpyCategoryNodeStorage objects filtered by the updated_at column
 * @method     ChildSpyCategoryNodeStorage[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyCategoryNodeStorage> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyCategoryNodeStorageQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\CategoryStorage\Persistence\Base\SpyCategoryNodeStorageQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\CategoryStorage\\Persistence\\SpyCategoryNodeStorage', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyCategoryNodeStorageQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyCategoryNodeStorageQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyCategoryNodeStorageQuery) {
            return $criteria;
        }
        $query = new ChildSpyCategoryNodeStorageQuery();
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
     * @return ChildSpyCategoryNodeStorage|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyCategoryNodeStorageTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyCategoryNodeStorage A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT `id_category_node_storage`, `fk_category_node`, `data`, `store`, `locale`, `alias_keys`, `key`, `created_at`, `updated_at` FROM `spy_category_node_storage` WHERE `id_category_node_storage` = :p0';
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
            /** @var ChildSpyCategoryNodeStorage $obj */
            $obj = new ChildSpyCategoryNodeStorage();
            $obj->hydrate($row);
            SpyCategoryNodeStorageTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyCategoryNodeStorage|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyCategoryNodeStorageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyCategoryNodeStorageTableMap::COL_ID_CATEGORY_NODE_STORAGE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyCategoryNodeStorageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyCategoryNodeStorageTableMap::COL_ID_CATEGORY_NODE_STORAGE, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idCategoryNodeStorage Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdCategoryNodeStorage_Between(array $idCategoryNodeStorage)
    {
        return $this->filterByIdCategoryNodeStorage($idCategoryNodeStorage, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idCategoryNodeStorages Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdCategoryNodeStorage_In(array $idCategoryNodeStorages)
    {
        return $this->filterByIdCategoryNodeStorage($idCategoryNodeStorages, Criteria::IN);
    }

    /**
     * Filter the query on the id_category_node_storage column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCategoryNodeStorage(1234); // WHERE id_category_node_storage = 1234
     * $query->filterByIdCategoryNodeStorage(array(12, 34), Criteria::IN); // WHERE id_category_node_storage IN (12, 34)
     * $query->filterByIdCategoryNodeStorage(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_category_node_storage > 12
     * </code>
     *
     * @param     mixed $idCategoryNodeStorage The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdCategoryNodeStorage($idCategoryNodeStorage = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idCategoryNodeStorage)) {
            $useMinMax = false;
            if (isset($idCategoryNodeStorage['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCategoryNodeStorageTableMap::COL_ID_CATEGORY_NODE_STORAGE, $idCategoryNodeStorage['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCategoryNodeStorage['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCategoryNodeStorageTableMap::COL_ID_CATEGORY_NODE_STORAGE, $idCategoryNodeStorage['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idCategoryNodeStorage of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCategoryNodeStorageTableMap::COL_ID_CATEGORY_NODE_STORAGE, $idCategoryNodeStorage, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkCategoryNode Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkCategoryNode_Between(array $fkCategoryNode)
    {
        return $this->filterByFkCategoryNode($fkCategoryNode, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkCategoryNodes Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkCategoryNode_In(array $fkCategoryNodes)
    {
        return $this->filterByFkCategoryNode($fkCategoryNodes, Criteria::IN);
    }

    /**
     * Filter the query on the fk_category_node column
     *
     * Example usage:
     * <code>
     * $query->filterByFkCategoryNode(1234); // WHERE fk_category_node = 1234
     * $query->filterByFkCategoryNode(array(12, 34), Criteria::IN); // WHERE fk_category_node IN (12, 34)
     * $query->filterByFkCategoryNode(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_category_node > 12
     * </code>
     *
     * @param     mixed $fkCategoryNode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkCategoryNode($fkCategoryNode = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkCategoryNode)) {
            $useMinMax = false;
            if (isset($fkCategoryNode['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCategoryNodeStorageTableMap::COL_FK_CATEGORY_NODE, $fkCategoryNode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkCategoryNode['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCategoryNodeStorageTableMap::COL_FK_CATEGORY_NODE, $fkCategoryNode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkCategoryNode of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCategoryNodeStorageTableMap::COL_FK_CATEGORY_NODE, $fkCategoryNode, $comparison);

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

        $query = $this->addUsingAlias(SpyCategoryNodeStorageTableMap::COL_DATA, $data, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $stores Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByStore_In(array $stores)
    {
        return $this->filterByStore($stores, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $store Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByStore_Like($store)
    {
        return $this->filterByStore($store, Criteria::LIKE);
    }

    /**
     * Filter the query on the store column
     *
     * Example usage:
     * <code>
     * $query->filterByStore('fooValue');   // WHERE store = 'fooValue'
     * $query->filterByStore('%fooValue%', Criteria::LIKE); // WHERE store LIKE '%fooValue%'
     * $query->filterByStore([1, 'foo'], Criteria::IN); // WHERE store IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $store The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByStore($store = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $store = str_replace('*', '%', $store);
        }

        if (is_array($store) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$store of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyCategoryNodeStorageTableMap::COL_STORE, $store, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $locales Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLocale_In(array $locales)
    {
        return $this->filterByLocale($locales, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $locale Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLocale_Like($locale)
    {
        return $this->filterByLocale($locale, Criteria::LIKE);
    }

    /**
     * Filter the query on the locale column
     *
     * Example usage:
     * <code>
     * $query->filterByLocale('fooValue');   // WHERE locale = 'fooValue'
     * $query->filterByLocale('%fooValue%', Criteria::LIKE); // WHERE locale LIKE '%fooValue%'
     * $query->filterByLocale([1, 'foo'], Criteria::IN); // WHERE locale IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $locale The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByLocale($locale = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $locale = str_replace('*', '%', $locale);
        }

        if (is_array($locale) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$locale of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyCategoryNodeStorageTableMap::COL_LOCALE, $locale, $comparison);

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

        $query = $this->addUsingAlias(SpyCategoryNodeStorageTableMap::COL_ALIAS_KEYS, $aliasKeys, $comparison);

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

        $query = $this->addUsingAlias(SpyCategoryNodeStorageTableMap::COL_KEY, $key, $comparison);

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
                $this->addUsingAlias(SpyCategoryNodeStorageTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCategoryNodeStorageTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$createdAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCategoryNodeStorageTableMap::COL_CREATED_AT, $createdAt, $comparison);

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
                $this->addUsingAlias(SpyCategoryNodeStorageTableMap::COL_UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCategoryNodeStorageTableMap::COL_UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$updatedAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCategoryNodeStorageTableMap::COL_UPDATED_AT, $updatedAt, $comparison);

        return $query;
    }

    /**
     * Exclude object from result
     *
     * @param   ChildSpyCategoryNodeStorage $spyCategoryNodeStorage Object to remove from the list of results
     *
     * @return $this|ChildSpyCategoryNodeStorageQuery The current query, for fluid interface
     */
    public function prune($spyCategoryNodeStorage = null)
    {
        if ($spyCategoryNodeStorage) {
            $this->addUsingAlias(SpyCategoryNodeStorageTableMap::COL_ID_CATEGORY_NODE_STORAGE, $spyCategoryNodeStorage->getIdCategoryNodeStorage(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_category_node_storage table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCategoryNodeStorageTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyCategoryNodeStorageTableMap::clearInstancePool();
            SpyCategoryNodeStorageTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCategoryNodeStorageTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyCategoryNodeStorageTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyCategoryNodeStorageTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyCategoryNodeStorageTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    // timestampable behavior

    /**
     * Filter by the latest updated
     *
     * @param      int $nbDays Maximum age of the latest update in days
     *
     * @return     $this|ChildSpyCategoryNodeStorageQuery The current query, for fluid interface
     */
    public function recentlyUpdated($nbDays = 7)
    {
        return $this->addUsingAlias(SpyCategoryNodeStorageTableMap::COL_UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by update date desc
     *
     * @return     $this|ChildSpyCategoryNodeStorageQuery The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        return $this->addDescendingOrderByColumn(SpyCategoryNodeStorageTableMap::COL_UPDATED_AT);
    }

    /**
     * Order by update date asc
     *
     * @return     $this|ChildSpyCategoryNodeStorageQuery The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        return $this->addAscendingOrderByColumn(SpyCategoryNodeStorageTableMap::COL_UPDATED_AT);
    }

    /**
     * Order by create date desc
     *
     * @return     $this|ChildSpyCategoryNodeStorageQuery The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        return $this->addDescendingOrderByColumn(SpyCategoryNodeStorageTableMap::COL_CREATED_AT);
    }

    /**
     * Filter by the latest created
     *
     * @param      int $nbDays Maximum age of in days
     *
     * @return     $this|ChildSpyCategoryNodeStorageQuery The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        return $this->addUsingAlias(SpyCategoryNodeStorageTableMap::COL_CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by create date asc
     *
     * @return     $this|ChildSpyCategoryNodeStorageQuery The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        return $this->addAscendingOrderByColumn(SpyCategoryNodeStorageTableMap::COL_CREATED_AT);
    }

} // SpyCategoryNodeStorageQuery
