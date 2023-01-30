<?php

namespace Orm\Zed\ProductSearch\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttribute as ChildSpyProductSearchAttribute;
use Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttributeArchive as ChildSpyProductSearchAttributeArchive;
use Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttributeQuery as ChildSpyProductSearchAttributeQuery;
use Orm\Zed\ProductSearch\Persistence\Map\SpyProductSearchAttributeTableMap;
use Orm\Zed\Product\Persistence\SpyProductAttributeKey;
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
 * Base class that represents a query for the 'spy_product_search_attribute' table.
 *
 *
 *
 * @method     ChildSpyProductSearchAttributeQuery orderByIdProductSearchAttribute($order = Criteria::ASC) Order by the id_product_search_attribute column
 * @method     ChildSpyProductSearchAttributeQuery orderByFkProductAttributeKey($order = Criteria::ASC) Order by the fk_product_attribute_key column
 * @method     ChildSpyProductSearchAttributeQuery orderByFilterType($order = Criteria::ASC) Order by the filter_type column
 * @method     ChildSpyProductSearchAttributeQuery orderByPosition($order = Criteria::ASC) Order by the position column
 * @method     ChildSpyProductSearchAttributeQuery orderBySynced($order = Criteria::ASC) Order by the synced column
 *
 * @method     ChildSpyProductSearchAttributeQuery groupByIdProductSearchAttribute() Group by the id_product_search_attribute column
 * @method     ChildSpyProductSearchAttributeQuery groupByFkProductAttributeKey() Group by the fk_product_attribute_key column
 * @method     ChildSpyProductSearchAttributeQuery groupByFilterType() Group by the filter_type column
 * @method     ChildSpyProductSearchAttributeQuery groupByPosition() Group by the position column
 * @method     ChildSpyProductSearchAttributeQuery groupBySynced() Group by the synced column
 *
 * @method     ChildSpyProductSearchAttributeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyProductSearchAttributeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyProductSearchAttributeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyProductSearchAttributeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyProductSearchAttributeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyProductSearchAttributeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyProductSearchAttributeQuery leftJoinSpyProductAttributeKey($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyProductAttributeKey relation
 * @method     ChildSpyProductSearchAttributeQuery rightJoinSpyProductAttributeKey($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyProductAttributeKey relation
 * @method     ChildSpyProductSearchAttributeQuery innerJoinSpyProductAttributeKey($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyProductAttributeKey relation
 *
 * @method     ChildSpyProductSearchAttributeQuery joinWithSpyProductAttributeKey($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyProductAttributeKey relation
 *
 * @method     ChildSpyProductSearchAttributeQuery leftJoinWithSpyProductAttributeKey() Adds a LEFT JOIN clause and with to the query using the SpyProductAttributeKey relation
 * @method     ChildSpyProductSearchAttributeQuery rightJoinWithSpyProductAttributeKey() Adds a RIGHT JOIN clause and with to the query using the SpyProductAttributeKey relation
 * @method     ChildSpyProductSearchAttributeQuery innerJoinWithSpyProductAttributeKey() Adds a INNER JOIN clause and with to the query using the SpyProductAttributeKey relation
 *
 * @method     \Orm\Zed\Product\Persistence\SpyProductAttributeKeyQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyProductSearchAttribute|null findOne(ConnectionInterface $con = null) Return the first ChildSpyProductSearchAttribute matching the query
 * @method     ChildSpyProductSearchAttribute findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyProductSearchAttribute matching the query, or a new ChildSpyProductSearchAttribute object populated from the query conditions when no match is found
 *
 * @method     ChildSpyProductSearchAttribute|null findOneByIdProductSearchAttribute(int $id_product_search_attribute) Return the first ChildSpyProductSearchAttribute filtered by the id_product_search_attribute column
 * @method     ChildSpyProductSearchAttribute|null findOneByFkProductAttributeKey(int $fk_product_attribute_key) Return the first ChildSpyProductSearchAttribute filtered by the fk_product_attribute_key column
 * @method     ChildSpyProductSearchAttribute|null findOneByFilterType(string $filter_type) Return the first ChildSpyProductSearchAttribute filtered by the filter_type column
 * @method     ChildSpyProductSearchAttribute|null findOneByPosition(int $position) Return the first ChildSpyProductSearchAttribute filtered by the position column
 * @method     ChildSpyProductSearchAttribute|null findOneBySynced(boolean $synced) Return the first ChildSpyProductSearchAttribute filtered by the synced column *

 * @method     ChildSpyProductSearchAttribute requirePk($key, ConnectionInterface $con = null) Return the ChildSpyProductSearchAttribute by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductSearchAttribute requireOne(ConnectionInterface $con = null) Return the first ChildSpyProductSearchAttribute matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyProductSearchAttribute requireOneByIdProductSearchAttribute(int $id_product_search_attribute) Return the first ChildSpyProductSearchAttribute filtered by the id_product_search_attribute column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductSearchAttribute requireOneByFkProductAttributeKey(int $fk_product_attribute_key) Return the first ChildSpyProductSearchAttribute filtered by the fk_product_attribute_key column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductSearchAttribute requireOneByFilterType(string $filter_type) Return the first ChildSpyProductSearchAttribute filtered by the filter_type column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductSearchAttribute requireOneByPosition(int $position) Return the first ChildSpyProductSearchAttribute filtered by the position column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductSearchAttribute requireOneBySynced(boolean $synced) Return the first ChildSpyProductSearchAttribute filtered by the synced column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyProductSearchAttribute[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyProductSearchAttribute objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductSearchAttribute> find(ConnectionInterface $con = null) Return ChildSpyProductSearchAttribute objects based on current ModelCriteria
 * @method     ChildSpyProductSearchAttribute[]|ObjectCollection findByIdProductSearchAttribute(int $id_product_search_attribute) Return ChildSpyProductSearchAttribute objects filtered by the id_product_search_attribute column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductSearchAttribute> findByIdProductSearchAttribute(int $id_product_search_attribute) Return ChildSpyProductSearchAttribute objects filtered by the id_product_search_attribute column
 * @method     ChildSpyProductSearchAttribute[]|ObjectCollection findByFkProductAttributeKey(int $fk_product_attribute_key) Return ChildSpyProductSearchAttribute objects filtered by the fk_product_attribute_key column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductSearchAttribute> findByFkProductAttributeKey(int $fk_product_attribute_key) Return ChildSpyProductSearchAttribute objects filtered by the fk_product_attribute_key column
 * @method     ChildSpyProductSearchAttribute[]|ObjectCollection findByFilterType(string $filter_type) Return ChildSpyProductSearchAttribute objects filtered by the filter_type column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductSearchAttribute> findByFilterType(string $filter_type) Return ChildSpyProductSearchAttribute objects filtered by the filter_type column
 * @method     ChildSpyProductSearchAttribute[]|ObjectCollection findByPosition(int $position) Return ChildSpyProductSearchAttribute objects filtered by the position column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductSearchAttribute> findByPosition(int $position) Return ChildSpyProductSearchAttribute objects filtered by the position column
 * @method     ChildSpyProductSearchAttribute[]|ObjectCollection findBySynced(boolean $synced) Return ChildSpyProductSearchAttribute objects filtered by the synced column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductSearchAttribute> findBySynced(boolean $synced) Return ChildSpyProductSearchAttribute objects filtered by the synced column
 * @method     ChildSpyProductSearchAttribute[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyProductSearchAttribute> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyProductSearchAttributeQuery extends ModelCriteria
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

    // archivable behavior
    protected $archiveOnDelete = true;
protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Orm\Zed\ProductSearch\Persistence\Base\SpyProductSearchAttributeQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\ProductSearch\\Persistence\\SpyProductSearchAttribute', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyProductSearchAttributeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyProductSearchAttributeQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyProductSearchAttributeQuery) {
            return $criteria;
        }
        $query = new ChildSpyProductSearchAttributeQuery();
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
     * @return ChildSpyProductSearchAttribute|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyProductSearchAttributeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyProductSearchAttribute A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_product_search_attribute, fk_product_attribute_key, filter_type, position, synced FROM spy_product_search_attribute WHERE id_product_search_attribute = :p0';
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
            /** @var ChildSpyProductSearchAttribute $obj */
            $obj = new ChildSpyProductSearchAttribute();
            $obj->hydrate($row);
            SpyProductSearchAttributeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyProductSearchAttribute|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyProductSearchAttributeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyProductSearchAttributeTableMap::COL_ID_PRODUCT_SEARCH_ATTRIBUTE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyProductSearchAttributeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyProductSearchAttributeTableMap::COL_ID_PRODUCT_SEARCH_ATTRIBUTE, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idProductSearchAttribute Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdProductSearchAttribute_Between(array $idProductSearchAttribute)
    {
        return $this->filterByIdProductSearchAttribute($idProductSearchAttribute, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idProductSearchAttributes Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdProductSearchAttribute_In(array $idProductSearchAttributes)
    {
        return $this->filterByIdProductSearchAttribute($idProductSearchAttributes, Criteria::IN);
    }

    /**
     * Filter the query on the id_product_search_attribute column
     *
     * Example usage:
     * <code>
     * $query->filterByIdProductSearchAttribute(1234); // WHERE id_product_search_attribute = 1234
     * $query->filterByIdProductSearchAttribute(array(12, 34), Criteria::IN); // WHERE id_product_search_attribute IN (12, 34)
     * $query->filterByIdProductSearchAttribute(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_product_search_attribute > 12
     * </code>
     *
     * @param     mixed $idProductSearchAttribute The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdProductSearchAttribute($idProductSearchAttribute = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idProductSearchAttribute)) {
            $useMinMax = false;
            if (isset($idProductSearchAttribute['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductSearchAttributeTableMap::COL_ID_PRODUCT_SEARCH_ATTRIBUTE, $idProductSearchAttribute['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idProductSearchAttribute['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductSearchAttributeTableMap::COL_ID_PRODUCT_SEARCH_ATTRIBUTE, $idProductSearchAttribute['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idProductSearchAttribute of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyProductSearchAttributeTableMap::COL_ID_PRODUCT_SEARCH_ATTRIBUTE, $idProductSearchAttribute, $comparison);

        return $query;
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
     * @see       filterBySpyProductAttributeKey()
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
                $this->addUsingAlias(SpyProductSearchAttributeTableMap::COL_FK_PRODUCT_ATTRIBUTE_KEY, $fkProductAttributeKey['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkProductAttributeKey['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductSearchAttributeTableMap::COL_FK_PRODUCT_ATTRIBUTE_KEY, $fkProductAttributeKey['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkProductAttributeKey of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyProductSearchAttributeTableMap::COL_FK_PRODUCT_ATTRIBUTE_KEY, $fkProductAttributeKey, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $filterTypes Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFilterType_In(array $filterTypes)
    {
        return $this->filterByFilterType($filterTypes, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $filterType Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFilterType_Like($filterType)
    {
        return $this->filterByFilterType($filterType, Criteria::LIKE);
    }

    /**
     * Filter the query on the filter_type column
     *
     * Example usage:
     * <code>
     * $query->filterByFilterType('fooValue');   // WHERE filter_type = 'fooValue'
     * $query->filterByFilterType('%fooValue%', Criteria::LIKE); // WHERE filter_type LIKE '%fooValue%'
     * $query->filterByFilterType([1, 'foo'], Criteria::IN); // WHERE filter_type IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $filterType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFilterType($filterType = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $filterType = str_replace('*', '%', $filterType);
        }

        if (is_array($filterType) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$filterType of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyProductSearchAttributeTableMap::COL_FILTER_TYPE, $filterType, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $position Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPosition_Between(array $position)
    {
        return $this->filterByPosition($position, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $positions Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPosition_In(array $positions)
    {
        return $this->filterByPosition($positions, Criteria::IN);
    }

    /**
     * Filter the query on the position column
     *
     * Example usage:
     * <code>
     * $query->filterByPosition(1234); // WHERE position = 1234
     * $query->filterByPosition(array(12, 34), Criteria::IN); // WHERE position IN (12, 34)
     * $query->filterByPosition(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE position > 12
     * </code>
     *
     * @param     mixed $position The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByPosition($position = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($position)) {
            $useMinMax = false;
            if (isset($position['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductSearchAttributeTableMap::COL_POSITION, $position['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($position['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductSearchAttributeTableMap::COL_POSITION, $position['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$position of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyProductSearchAttributeTableMap::COL_POSITION, $position, $comparison);

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

        $query = $this->addUsingAlias(SpyProductSearchAttributeTableMap::COL_SYNCED, $synced, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\Product\Persistence\SpyProductAttributeKey object
     *
     * @param \Orm\Zed\Product\Persistence\SpyProductAttributeKey|ObjectCollection $spyProductAttributeKey The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyProductSearchAttributeQuery The current query, for fluid interface
     */
    public function filterBySpyProductAttributeKey($spyProductAttributeKey, $comparison = null)
    {
        if ($spyProductAttributeKey instanceof \Orm\Zed\Product\Persistence\SpyProductAttributeKey) {
            return $this
                ->addUsingAlias(SpyProductSearchAttributeTableMap::COL_FK_PRODUCT_ATTRIBUTE_KEY, $spyProductAttributeKey->getIdProductAttributeKey(), $comparison);
        } elseif ($spyProductAttributeKey instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyProductSearchAttributeTableMap::COL_FK_PRODUCT_ATTRIBUTE_KEY, $spyProductAttributeKey->toKeyValue('PrimaryKey', 'IdProductAttributeKey'), $comparison);
        } else {
            throw new PropelException('filterBySpyProductAttributeKey() only accepts arguments of type \Orm\Zed\Product\Persistence\SpyProductAttributeKey or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyProductAttributeKey relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyProductSearchAttributeQuery The current query, for fluid interface
     */
    public function joinSpyProductAttributeKey($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyProductAttributeKey');

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
            $this->addJoinObject($join, 'SpyProductAttributeKey');
        }

        return $this;
    }

    /**
     * Use the SpyProductAttributeKey relation SpyProductAttributeKey object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Product\Persistence\SpyProductAttributeKeyQuery A secondary query class using the current class as primary query
     */
    public function useSpyProductAttributeKeyQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyProductAttributeKey($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyProductAttributeKey', '\Orm\Zed\Product\Persistence\SpyProductAttributeKeyQuery');
    }

    /**
     * Use the SpyProductAttributeKey relation SpyProductAttributeKey object
     *
     * @param callable(\Orm\Zed\Product\Persistence\SpyProductAttributeKeyQuery):\Orm\Zed\Product\Persistence\SpyProductAttributeKeyQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyProductAttributeKeyQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyProductAttributeKeyQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyProductAttributeKey table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Product\Persistence\SpyProductAttributeKeyQuery The inner query object of the EXISTS statement
     */
    public function useSpyProductAttributeKeyExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyProductAttributeKey', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyProductAttributeKey table for a NOT EXISTS query.
     *
     * @see useSpyProductAttributeKeyExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Product\Persistence\SpyProductAttributeKeyQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyProductAttributeKeyNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyProductAttributeKey', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Exclude object from result
     *
     * @param   ChildSpyProductSearchAttribute $spyProductSearchAttribute Object to remove from the list of results
     *
     * @return $this|ChildSpyProductSearchAttributeQuery The current query, for fluid interface
     */
    public function prune($spyProductSearchAttribute = null)
    {
        if ($spyProductSearchAttribute) {
            $this->addUsingAlias(SpyProductSearchAttributeTableMap::COL_ID_PRODUCT_SEARCH_ATTRIBUTE, $spyProductSearchAttribute->getIdProductSearchAttribute(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Code to execute before every DELETE statement
     *
     * @param     ConnectionInterface $con The connection object used by the query
     */
    protected function basePreDelete(ConnectionInterface $con)
    {
        // archivable behavior

        if ($this->archiveOnDelete) {
            $this->archive($con);
        } else {
            $this->archiveOnDelete = true;
        }


        return $this->preDelete($con);
    }

    /**
     * Deletes all rows from the spy_product_search_attribute table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductSearchAttributeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyProductSearchAttributeTableMap::clearInstancePool();
            SpyProductSearchAttributeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductSearchAttributeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyProductSearchAttributeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyProductSearchAttributeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyProductSearchAttributeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    // archivable behavior

    /**
     * Copy the data of the objects satisfying the query into ChildSpyProductSearchAttributeArchive archive objects.
     * The archived objects are then saved.
     * If any of the objects has already been archived, the archived object
     * is updated and not duplicated.
     * Warning: This termination methods issues 2n+1 queries.
     *
     * @param      ConnectionInterface $con    Connection to use.
     * @param      Boolean $useLittleMemory    Whether or not to use OnDemandFormatter to retrieve objects.
     *               Set to false if the identity map matters.
     *               Set to true (default) to use less memory.
     *
     * @return     int the number of archived objects
     */
    public function archive($con = null, $useLittleMemory = true)
    {
        $criteria = clone $this;
        // prepare the query
        $criteria->setWith(array());
        if ($useLittleMemory) {
            $criteria->setFormatter(ModelCriteria::FORMAT_ON_DEMAND);
        }
        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductSearchAttributeTableMap::DATABASE_NAME);
        }

        return $con->transaction(function () use ($con, $criteria) {
            $totalArchivedObjects = 0;

            // archive all results one by one
            foreach ($criteria->find($con) as $object) {
                $object->archive($con);
                $totalArchivedObjects++;
            }

            return $totalArchivedObjects;
        });
    }

    /**
     * Enable/disable auto-archiving on delete for the next query.
     *
     * @param boolean True if the query must archive deleted objects, false otherwise.
     */
    public function setArchiveOnDelete($archiveOnDelete)
    {
        $this->archiveOnDelete = $archiveOnDelete;
    }

    /**
     * Delete records matching the current query without archiving them.
     *
     * @param      ConnectionInterface $con    Connection to use.
     *
     * @return integer the number of deleted rows
     */
    public function deleteWithoutArchive($con = null)
    {
        $this->archiveOnDelete = false;

        return $this->delete($con);
    }

    /**
     * Delete all records without archiving them.
     *
     * @param      ConnectionInterface $con    Connection to use.
     *
     * @return integer the number of deleted rows
     */
    public function deleteAllWithoutArchive($con = null)
    {
        $this->archiveOnDelete = false;

        return $this->deleteAll($con);
    }

} // SpyProductSearchAttributeQuery
