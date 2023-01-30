<?php

namespace Orm\Zed\ProductSearch\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttributeMapArchive as ChildSpyProductSearchAttributeMapArchive;
use Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttributeMapArchiveQuery as ChildSpyProductSearchAttributeMapArchiveQuery;
use Orm\Zed\ProductSearch\Persistence\Map\SpyProductSearchAttributeMapArchiveTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;
use Spryker\Zed\PropelOrm\Business\Runtime\ActiveQuery\Criteria as SprykerCriteria;
use Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException;

/**
 * Base class that represents a query for the 'spy_product_search_attribute_map_archive' table.
 *
 *
 *
 * @method     ChildSpyProductSearchAttributeMapArchiveQuery orderByFkProductAttributeKey($order = Criteria::ASC) Order by the fk_product_attribute_key column
 * @method     ChildSpyProductSearchAttributeMapArchiveQuery orderBySynced($order = Criteria::ASC) Order by the synced column
 * @method     ChildSpyProductSearchAttributeMapArchiveQuery orderByTargetField($order = Criteria::ASC) Order by the target_field column
 * @method     ChildSpyProductSearchAttributeMapArchiveQuery orderByArchivedAt($order = Criteria::ASC) Order by the archived_at column
 *
 * @method     ChildSpyProductSearchAttributeMapArchiveQuery groupByFkProductAttributeKey() Group by the fk_product_attribute_key column
 * @method     ChildSpyProductSearchAttributeMapArchiveQuery groupBySynced() Group by the synced column
 * @method     ChildSpyProductSearchAttributeMapArchiveQuery groupByTargetField() Group by the target_field column
 * @method     ChildSpyProductSearchAttributeMapArchiveQuery groupByArchivedAt() Group by the archived_at column
 *
 * @method     ChildSpyProductSearchAttributeMapArchiveQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyProductSearchAttributeMapArchiveQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyProductSearchAttributeMapArchiveQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyProductSearchAttributeMapArchiveQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyProductSearchAttributeMapArchiveQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyProductSearchAttributeMapArchiveQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyProductSearchAttributeMapArchive|null findOne(ConnectionInterface $con = null) Return the first ChildSpyProductSearchAttributeMapArchive matching the query
 * @method     ChildSpyProductSearchAttributeMapArchive findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyProductSearchAttributeMapArchive matching the query, or a new ChildSpyProductSearchAttributeMapArchive object populated from the query conditions when no match is found
 *
 * @method     ChildSpyProductSearchAttributeMapArchive|null findOneByFkProductAttributeKey(int $fk_product_attribute_key) Return the first ChildSpyProductSearchAttributeMapArchive filtered by the fk_product_attribute_key column
 * @method     ChildSpyProductSearchAttributeMapArchive|null findOneBySynced(boolean $synced) Return the first ChildSpyProductSearchAttributeMapArchive filtered by the synced column
 * @method     ChildSpyProductSearchAttributeMapArchive|null findOneByTargetField(string $target_field) Return the first ChildSpyProductSearchAttributeMapArchive filtered by the target_field column
 * @method     ChildSpyProductSearchAttributeMapArchive|null findOneByArchivedAt(string $archived_at) Return the first ChildSpyProductSearchAttributeMapArchive filtered by the archived_at column *

 * @method     ChildSpyProductSearchAttributeMapArchive requirePk($key, ConnectionInterface $con = null) Return the ChildSpyProductSearchAttributeMapArchive by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductSearchAttributeMapArchive requireOne(ConnectionInterface $con = null) Return the first ChildSpyProductSearchAttributeMapArchive matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyProductSearchAttributeMapArchive requireOneByFkProductAttributeKey(int $fk_product_attribute_key) Return the first ChildSpyProductSearchAttributeMapArchive filtered by the fk_product_attribute_key column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductSearchAttributeMapArchive requireOneBySynced(boolean $synced) Return the first ChildSpyProductSearchAttributeMapArchive filtered by the synced column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductSearchAttributeMapArchive requireOneByTargetField(string $target_field) Return the first ChildSpyProductSearchAttributeMapArchive filtered by the target_field column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductSearchAttributeMapArchive requireOneByArchivedAt(string $archived_at) Return the first ChildSpyProductSearchAttributeMapArchive filtered by the archived_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyProductSearchAttributeMapArchive[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyProductSearchAttributeMapArchive objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductSearchAttributeMapArchive> find(ConnectionInterface $con = null) Return ChildSpyProductSearchAttributeMapArchive objects based on current ModelCriteria
 * @method     ChildSpyProductSearchAttributeMapArchive[]|ObjectCollection findByFkProductAttributeKey(int $fk_product_attribute_key) Return ChildSpyProductSearchAttributeMapArchive objects filtered by the fk_product_attribute_key column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductSearchAttributeMapArchive> findByFkProductAttributeKey(int $fk_product_attribute_key) Return ChildSpyProductSearchAttributeMapArchive objects filtered by the fk_product_attribute_key column
 * @method     ChildSpyProductSearchAttributeMapArchive[]|ObjectCollection findBySynced(boolean $synced) Return ChildSpyProductSearchAttributeMapArchive objects filtered by the synced column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductSearchAttributeMapArchive> findBySynced(boolean $synced) Return ChildSpyProductSearchAttributeMapArchive objects filtered by the synced column
 * @method     ChildSpyProductSearchAttributeMapArchive[]|ObjectCollection findByTargetField(string $target_field) Return ChildSpyProductSearchAttributeMapArchive objects filtered by the target_field column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductSearchAttributeMapArchive> findByTargetField(string $target_field) Return ChildSpyProductSearchAttributeMapArchive objects filtered by the target_field column
 * @method     ChildSpyProductSearchAttributeMapArchive[]|ObjectCollection findByArchivedAt(string $archived_at) Return ChildSpyProductSearchAttributeMapArchive objects filtered by the archived_at column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductSearchAttributeMapArchive> findByArchivedAt(string $archived_at) Return ChildSpyProductSearchAttributeMapArchive objects filtered by the archived_at column
 * @method     ChildSpyProductSearchAttributeMapArchive[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyProductSearchAttributeMapArchive> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyProductSearchAttributeMapArchiveQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\ProductSearch\Persistence\Base\SpyProductSearchAttributeMapArchiveQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\ProductSearch\\Persistence\\SpyProductSearchAttributeMapArchive', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyProductSearchAttributeMapArchiveQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyProductSearchAttributeMapArchiveQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyProductSearchAttributeMapArchiveQuery) {
            return $criteria;
        }
        $query = new ChildSpyProductSearchAttributeMapArchiveQuery();
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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array[$fk_product_attribute_key, $target_field] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildSpyProductSearchAttributeMapArchive|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyProductSearchAttributeMapArchiveTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildSpyProductSearchAttributeMapArchive A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT fk_product_attribute_key, synced, target_field, archived_at FROM spy_product_search_attribute_map_archive WHERE fk_product_attribute_key = :p0 AND target_field = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildSpyProductSearchAttributeMapArchive $obj */
            $obj = new ChildSpyProductSearchAttributeMapArchive();
            $obj->hydrate($row);
            SpyProductSearchAttributeMapArchiveTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildSpyProductSearchAttributeMapArchive|array|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
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
     * @return $this|ChildSpyProductSearchAttributeMapArchiveQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(SpyProductSearchAttributeMapArchiveTableMap::COL_FK_PRODUCT_ATTRIBUTE_KEY, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(SpyProductSearchAttributeMapArchiveTableMap::COL_TARGET_FIELD, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyProductSearchAttributeMapArchiveQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(SpyProductSearchAttributeMapArchiveTableMap::COL_FK_PRODUCT_ATTRIBUTE_KEY, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(SpyProductSearchAttributeMapArchiveTableMap::COL_TARGET_FIELD, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkProductAttributeKey Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkProductAttributeKey_Between(array $fkProductAttributeKey)
    {
        return $this->filterByFkProductAttributeKey($fkProductAttributeKey, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkProductAttributeKeys Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkProductAttributeKey_In(array $fkProductAttributeKeys)
    {
        return $this->filterByFkProductAttributeKey($fkProductAttributeKeys, Criteria::IN);
    }

    /**
     * Filter the query on the fk_product_attribute_key column
     *
     * Example usage:
     * <code>
     * $query->filterByFkProductAttributeKey(1234); // WHERE fk_product_attribute_key = 1234
     * $query->filterByFkProductAttributeKey(array(12, 34), Criteria::IN); // WHERE fk_product_attribute_key IN (12, 34)
     * $query->filterByFkProductAttributeKey(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_product_attribute_key > 12
     * </code>
     *
     * @param     mixed $fkProductAttributeKey The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkProductAttributeKey($fkProductAttributeKey = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkProductAttributeKey)) {
            $useMinMax = false;
            if (isset($fkProductAttributeKey['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductSearchAttributeMapArchiveTableMap::COL_FK_PRODUCT_ATTRIBUTE_KEY, $fkProductAttributeKey['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkProductAttributeKey['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductSearchAttributeMapArchiveTableMap::COL_FK_PRODUCT_ATTRIBUTE_KEY, $fkProductAttributeKey['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkProductAttributeKey of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyProductSearchAttributeMapArchiveTableMap::COL_FK_PRODUCT_ATTRIBUTE_KEY, $fkProductAttributeKey, $comparison);

        return $query;
    }

    /**
     * Filter the query on the synced column
     *
     * Example usage:
     * <code>
     * $query->filterBySynced(true); // WHERE synced = true
     * $query->filterBySynced('yes'); // WHERE synced = true
     * </code>
     *
     * @param     bool|string $synced The value to use as filter.
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
    public function filterBySynced($synced = null, $comparison = Criteria::EQUAL)
    {
        if (is_string($synced)) {
            $synced = in_array(strtolower($synced), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        $query = $this->addUsingAlias(SpyProductSearchAttributeMapArchiveTableMap::COL_SYNCED, $synced, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $targetFields Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByTargetField_In(array $targetFields)
    {
        return $this->filterByTargetField($targetFields, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $targetField Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByTargetField_Like($targetField)
    {
        return $this->filterByTargetField($targetField, Criteria::LIKE);
    }

    /**
     * Filter the query on the target_field column
     *
     * Example usage:
     * <code>
     * $query->filterByTargetField('fooValue');   // WHERE target_field = 'fooValue'
     * $query->filterByTargetField('%fooValue%', Criteria::LIKE); // WHERE target_field LIKE '%fooValue%'
     * $query->filterByTargetField([1, 'foo'], Criteria::IN); // WHERE target_field IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $targetField The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByTargetField($targetField = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $targetField = str_replace('*', '%', $targetField);
        }

        if (is_array($targetField) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$targetField of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyProductSearchAttributeMapArchiveTableMap::COL_TARGET_FIELD, $targetField, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $archivedAt Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArchivedAt_Between(array $archivedAt)
    {
        return $this->filterByArchivedAt($archivedAt, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $archivedAts Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArchivedAt_In(array $archivedAts)
    {
        return $this->filterByArchivedAt($archivedAts, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $archivedAt Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArchivedAt_Like($archivedAt)
    {
        return $this->filterByArchivedAt($archivedAt, Criteria::LIKE);
    }

    /**
     * Filter the query on the archived_at column
     *
     * Example usage:
     * <code>
     * $query->filterByArchivedAt('2011-03-14'); // WHERE archived_at = '2011-03-14'
     * $query->filterByArchivedAt('now'); // WHERE archived_at = '2011-03-14'
     * $query->filterByArchivedAt(array('max' => 'yesterday'), SprykerCriteria::BETWEEN); // WHERE archived_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $archivedAt The value to use as filter.
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
    public function filterByArchivedAt($archivedAt = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($archivedAt)) {
            $useMinMax = false;
            if (isset($archivedAt['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductSearchAttributeMapArchiveTableMap::COL_ARCHIVED_AT, $archivedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($archivedAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductSearchAttributeMapArchiveTableMap::COL_ARCHIVED_AT, $archivedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$archivedAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyProductSearchAttributeMapArchiveTableMap::COL_ARCHIVED_AT, $archivedAt, $comparison);

        return $query;
    }

    /**
     * Exclude object from result
     *
     * @param   ChildSpyProductSearchAttributeMapArchive $spyProductSearchAttributeMapArchive Object to remove from the list of results
     *
     * @return $this|ChildSpyProductSearchAttributeMapArchiveQuery The current query, for fluid interface
     */
    public function prune($spyProductSearchAttributeMapArchive = null)
    {
        if ($spyProductSearchAttributeMapArchive) {
            $this->addCond('pruneCond0', $this->getAliasedColName(SpyProductSearchAttributeMapArchiveTableMap::COL_FK_PRODUCT_ATTRIBUTE_KEY), $spyProductSearchAttributeMapArchive->getFkProductAttributeKey(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(SpyProductSearchAttributeMapArchiveTableMap::COL_TARGET_FIELD), $spyProductSearchAttributeMapArchive->getTargetField(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_product_search_attribute_map_archive table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductSearchAttributeMapArchiveTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyProductSearchAttributeMapArchiveTableMap::clearInstancePool();
            SpyProductSearchAttributeMapArchiveTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductSearchAttributeMapArchiveTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyProductSearchAttributeMapArchiveTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyProductSearchAttributeMapArchiveTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyProductSearchAttributeMapArchiveTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SpyProductSearchAttributeMapArchiveQuery
