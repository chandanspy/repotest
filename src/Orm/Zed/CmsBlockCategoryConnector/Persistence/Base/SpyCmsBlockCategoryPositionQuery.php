<?php

namespace Orm\Zed\CmsBlockCategoryConnector\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\CmsBlockCategoryConnector\Persistence\SpyCmsBlockCategoryPosition as ChildSpyCmsBlockCategoryPosition;
use Orm\Zed\CmsBlockCategoryConnector\Persistence\SpyCmsBlockCategoryPositionQuery as ChildSpyCmsBlockCategoryPositionQuery;
use Orm\Zed\CmsBlockCategoryConnector\Persistence\Map\SpyCmsBlockCategoryPositionTableMap;
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
 * Base class that represents a query for the 'spy_cms_block_category_position' table.
 *
 *
 *
 * @method     ChildSpyCmsBlockCategoryPositionQuery orderByIdCmsBlockCategoryPosition($order = Criteria::ASC) Order by the id_cms_block_category_position column
 * @method     ChildSpyCmsBlockCategoryPositionQuery orderByName($order = Criteria::ASC) Order by the name column
 *
 * @method     ChildSpyCmsBlockCategoryPositionQuery groupByIdCmsBlockCategoryPosition() Group by the id_cms_block_category_position column
 * @method     ChildSpyCmsBlockCategoryPositionQuery groupByName() Group by the name column
 *
 * @method     ChildSpyCmsBlockCategoryPositionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyCmsBlockCategoryPositionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyCmsBlockCategoryPositionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyCmsBlockCategoryPositionQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyCmsBlockCategoryPositionQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyCmsBlockCategoryPositionQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyCmsBlockCategoryPositionQuery leftJoinSpyCmsBlockCategoryConnector($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyCmsBlockCategoryConnector relation
 * @method     ChildSpyCmsBlockCategoryPositionQuery rightJoinSpyCmsBlockCategoryConnector($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyCmsBlockCategoryConnector relation
 * @method     ChildSpyCmsBlockCategoryPositionQuery innerJoinSpyCmsBlockCategoryConnector($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyCmsBlockCategoryConnector relation
 *
 * @method     ChildSpyCmsBlockCategoryPositionQuery joinWithSpyCmsBlockCategoryConnector($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyCmsBlockCategoryConnector relation
 *
 * @method     ChildSpyCmsBlockCategoryPositionQuery leftJoinWithSpyCmsBlockCategoryConnector() Adds a LEFT JOIN clause and with to the query using the SpyCmsBlockCategoryConnector relation
 * @method     ChildSpyCmsBlockCategoryPositionQuery rightJoinWithSpyCmsBlockCategoryConnector() Adds a RIGHT JOIN clause and with to the query using the SpyCmsBlockCategoryConnector relation
 * @method     ChildSpyCmsBlockCategoryPositionQuery innerJoinWithSpyCmsBlockCategoryConnector() Adds a INNER JOIN clause and with to the query using the SpyCmsBlockCategoryConnector relation
 *
 * @method     \Orm\Zed\CmsBlockCategoryConnector\Persistence\SpyCmsBlockCategoryConnectorQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyCmsBlockCategoryPosition|null findOne(ConnectionInterface $con = null) Return the first ChildSpyCmsBlockCategoryPosition matching the query
 * @method     ChildSpyCmsBlockCategoryPosition findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyCmsBlockCategoryPosition matching the query, or a new ChildSpyCmsBlockCategoryPosition object populated from the query conditions when no match is found
 *
 * @method     ChildSpyCmsBlockCategoryPosition|null findOneByIdCmsBlockCategoryPosition(int $id_cms_block_category_position) Return the first ChildSpyCmsBlockCategoryPosition filtered by the id_cms_block_category_position column
 * @method     ChildSpyCmsBlockCategoryPosition|null findOneByName(string $name) Return the first ChildSpyCmsBlockCategoryPosition filtered by the name column *

 * @method     ChildSpyCmsBlockCategoryPosition requirePk($key, ConnectionInterface $con = null) Return the ChildSpyCmsBlockCategoryPosition by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCmsBlockCategoryPosition requireOne(ConnectionInterface $con = null) Return the first ChildSpyCmsBlockCategoryPosition matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyCmsBlockCategoryPosition requireOneByIdCmsBlockCategoryPosition(int $id_cms_block_category_position) Return the first ChildSpyCmsBlockCategoryPosition filtered by the id_cms_block_category_position column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCmsBlockCategoryPosition requireOneByName(string $name) Return the first ChildSpyCmsBlockCategoryPosition filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyCmsBlockCategoryPosition[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyCmsBlockCategoryPosition objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCmsBlockCategoryPosition> find(ConnectionInterface $con = null) Return ChildSpyCmsBlockCategoryPosition objects based on current ModelCriteria
 * @method     ChildSpyCmsBlockCategoryPosition[]|ObjectCollection findByIdCmsBlockCategoryPosition(int $id_cms_block_category_position) Return ChildSpyCmsBlockCategoryPosition objects filtered by the id_cms_block_category_position column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCmsBlockCategoryPosition> findByIdCmsBlockCategoryPosition(int $id_cms_block_category_position) Return ChildSpyCmsBlockCategoryPosition objects filtered by the id_cms_block_category_position column
 * @method     ChildSpyCmsBlockCategoryPosition[]|ObjectCollection findByName(string $name) Return ChildSpyCmsBlockCategoryPosition objects filtered by the name column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCmsBlockCategoryPosition> findByName(string $name) Return ChildSpyCmsBlockCategoryPosition objects filtered by the name column
 * @method     ChildSpyCmsBlockCategoryPosition[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyCmsBlockCategoryPosition> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyCmsBlockCategoryPositionQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\CmsBlockCategoryConnector\Persistence\Base\SpyCmsBlockCategoryPositionQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\CmsBlockCategoryConnector\\Persistence\\SpyCmsBlockCategoryPosition', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyCmsBlockCategoryPositionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyCmsBlockCategoryPositionQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyCmsBlockCategoryPositionQuery) {
            return $criteria;
        }
        $query = new ChildSpyCmsBlockCategoryPositionQuery();
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
     * @return ChildSpyCmsBlockCategoryPosition|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyCmsBlockCategoryPositionTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyCmsBlockCategoryPosition A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_cms_block_category_position, name FROM spy_cms_block_category_position WHERE id_cms_block_category_position = :p0';
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
            /** @var ChildSpyCmsBlockCategoryPosition $obj */
            $obj = new ChildSpyCmsBlockCategoryPosition();
            $obj->hydrate($row);
            SpyCmsBlockCategoryPositionTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyCmsBlockCategoryPosition|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyCmsBlockCategoryPositionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyCmsBlockCategoryPositionTableMap::COL_ID_CMS_BLOCK_CATEGORY_POSITION, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyCmsBlockCategoryPositionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyCmsBlockCategoryPositionTableMap::COL_ID_CMS_BLOCK_CATEGORY_POSITION, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idCmsBlockCategoryPosition Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdCmsBlockCategoryPosition_Between(array $idCmsBlockCategoryPosition)
    {
        return $this->filterByIdCmsBlockCategoryPosition($idCmsBlockCategoryPosition, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idCmsBlockCategoryPositions Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdCmsBlockCategoryPosition_In(array $idCmsBlockCategoryPositions)
    {
        return $this->filterByIdCmsBlockCategoryPosition($idCmsBlockCategoryPositions, Criteria::IN);
    }

    /**
     * Filter the query on the id_cms_block_category_position column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCmsBlockCategoryPosition(1234); // WHERE id_cms_block_category_position = 1234
     * $query->filterByIdCmsBlockCategoryPosition(array(12, 34), Criteria::IN); // WHERE id_cms_block_category_position IN (12, 34)
     * $query->filterByIdCmsBlockCategoryPosition(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_cms_block_category_position > 12
     * </code>
     *
     * @param     mixed $idCmsBlockCategoryPosition The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdCmsBlockCategoryPosition($idCmsBlockCategoryPosition = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idCmsBlockCategoryPosition)) {
            $useMinMax = false;
            if (isset($idCmsBlockCategoryPosition['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCmsBlockCategoryPositionTableMap::COL_ID_CMS_BLOCK_CATEGORY_POSITION, $idCmsBlockCategoryPosition['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCmsBlockCategoryPosition['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCmsBlockCategoryPositionTableMap::COL_ID_CMS_BLOCK_CATEGORY_POSITION, $idCmsBlockCategoryPosition['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idCmsBlockCategoryPosition of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCmsBlockCategoryPositionTableMap::COL_ID_CMS_BLOCK_CATEGORY_POSITION, $idCmsBlockCategoryPosition, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $names Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByName_In(array $names)
    {
        return $this->filterByName($names, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $name Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByName_Like($name)
    {
        return $this->filterByName($name, Criteria::LIKE);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%', Criteria::LIKE); // WHERE name LIKE '%fooValue%'
     * $query->filterByName([1, 'foo'], Criteria::IN); // WHERE name IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByName($name = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $name = str_replace('*', '%', $name);
        }

        if (is_array($name) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$name of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyCmsBlockCategoryPositionTableMap::COL_NAME, $name, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\CmsBlockCategoryConnector\Persistence\SpyCmsBlockCategoryConnector object
     *
     * @param \Orm\Zed\CmsBlockCategoryConnector\Persistence\SpyCmsBlockCategoryConnector|ObjectCollection $spyCmsBlockCategoryConnector the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyCmsBlockCategoryPositionQuery The current query, for fluid interface
     */
    public function filterBySpyCmsBlockCategoryConnector($spyCmsBlockCategoryConnector, $comparison = null)
    {
        if ($spyCmsBlockCategoryConnector instanceof \Orm\Zed\CmsBlockCategoryConnector\Persistence\SpyCmsBlockCategoryConnector) {
            return $this
                ->addUsingAlias(SpyCmsBlockCategoryPositionTableMap::COL_ID_CMS_BLOCK_CATEGORY_POSITION, $spyCmsBlockCategoryConnector->getFkCmsBlockCategoryPosition(), $comparison);
        } elseif ($spyCmsBlockCategoryConnector instanceof ObjectCollection) {
            return $this
                ->useSpyCmsBlockCategoryConnectorQuery()
                ->filterByPrimaryKeys($spyCmsBlockCategoryConnector->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyCmsBlockCategoryConnector() only accepts arguments of type \Orm\Zed\CmsBlockCategoryConnector\Persistence\SpyCmsBlockCategoryConnector or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyCmsBlockCategoryConnector relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyCmsBlockCategoryPositionQuery The current query, for fluid interface
     */
    public function joinSpyCmsBlockCategoryConnector($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyCmsBlockCategoryConnector');

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
            $this->addJoinObject($join, 'SpyCmsBlockCategoryConnector');
        }

        return $this;
    }

    /**
     * Use the SpyCmsBlockCategoryConnector relation SpyCmsBlockCategoryConnector object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\CmsBlockCategoryConnector\Persistence\SpyCmsBlockCategoryConnectorQuery A secondary query class using the current class as primary query
     */
    public function useSpyCmsBlockCategoryConnectorQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinSpyCmsBlockCategoryConnector($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyCmsBlockCategoryConnector', '\Orm\Zed\CmsBlockCategoryConnector\Persistence\SpyCmsBlockCategoryConnectorQuery');
    }

    /**
     * Use the SpyCmsBlockCategoryConnector relation SpyCmsBlockCategoryConnector object
     *
     * @param callable(\Orm\Zed\CmsBlockCategoryConnector\Persistence\SpyCmsBlockCategoryConnectorQuery):\Orm\Zed\CmsBlockCategoryConnector\Persistence\SpyCmsBlockCategoryConnectorQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyCmsBlockCategoryConnectorQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useSpyCmsBlockCategoryConnectorQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyCmsBlockCategoryConnector table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\CmsBlockCategoryConnector\Persistence\SpyCmsBlockCategoryConnectorQuery The inner query object of the EXISTS statement
     */
    public function useSpyCmsBlockCategoryConnectorExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyCmsBlockCategoryConnector', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyCmsBlockCategoryConnector table for a NOT EXISTS query.
     *
     * @see useSpyCmsBlockCategoryConnectorExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\CmsBlockCategoryConnector\Persistence\SpyCmsBlockCategoryConnectorQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyCmsBlockCategoryConnectorNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyCmsBlockCategoryConnector', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Exclude object from result
     *
     * @param   ChildSpyCmsBlockCategoryPosition $spyCmsBlockCategoryPosition Object to remove from the list of results
     *
     * @return $this|ChildSpyCmsBlockCategoryPositionQuery The current query, for fluid interface
     */
    public function prune($spyCmsBlockCategoryPosition = null)
    {
        if ($spyCmsBlockCategoryPosition) {
            $this->addUsingAlias(SpyCmsBlockCategoryPositionTableMap::COL_ID_CMS_BLOCK_CATEGORY_POSITION, $spyCmsBlockCategoryPosition->getIdCmsBlockCategoryPosition(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_cms_block_category_position table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCmsBlockCategoryPositionTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyCmsBlockCategoryPositionTableMap::clearInstancePool();
            SpyCmsBlockCategoryPositionTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCmsBlockCategoryPositionTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyCmsBlockCategoryPositionTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyCmsBlockCategoryPositionTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyCmsBlockCategoryPositionTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SpyCmsBlockCategoryPositionQuery
