<?php

namespace Orm\Zed\ShoppingList\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroup as ChildSpyShoppingListPermissionGroup;
use Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupQuery as ChildSpyShoppingListPermissionGroupQuery;
use Orm\Zed\ShoppingList\Persistence\Map\SpyShoppingListPermissionGroupTableMap;
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
 * Base class that represents a query for the 'spy_shopping_list_permission_group' table.
 *
 *
 *
 * @method     ChildSpyShoppingListPermissionGroupQuery orderByIdShoppingListPermissionGroup($order = Criteria::ASC) Order by the id_shopping_list_permission_group column
 * @method     ChildSpyShoppingListPermissionGroupQuery orderByName($order = Criteria::ASC) Order by the name column
 *
 * @method     ChildSpyShoppingListPermissionGroupQuery groupByIdShoppingListPermissionGroup() Group by the id_shopping_list_permission_group column
 * @method     ChildSpyShoppingListPermissionGroupQuery groupByName() Group by the name column
 *
 * @method     ChildSpyShoppingListPermissionGroupQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyShoppingListPermissionGroupQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyShoppingListPermissionGroupQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyShoppingListPermissionGroupQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyShoppingListPermissionGroupQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyShoppingListPermissionGroupQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyShoppingListPermissionGroupQuery leftJoinSpyShoppingListCompanyUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyShoppingListCompanyUser relation
 * @method     ChildSpyShoppingListPermissionGroupQuery rightJoinSpyShoppingListCompanyUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyShoppingListCompanyUser relation
 * @method     ChildSpyShoppingListPermissionGroupQuery innerJoinSpyShoppingListCompanyUser($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyShoppingListCompanyUser relation
 *
 * @method     ChildSpyShoppingListPermissionGroupQuery joinWithSpyShoppingListCompanyUser($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyShoppingListCompanyUser relation
 *
 * @method     ChildSpyShoppingListPermissionGroupQuery leftJoinWithSpyShoppingListCompanyUser() Adds a LEFT JOIN clause and with to the query using the SpyShoppingListCompanyUser relation
 * @method     ChildSpyShoppingListPermissionGroupQuery rightJoinWithSpyShoppingListCompanyUser() Adds a RIGHT JOIN clause and with to the query using the SpyShoppingListCompanyUser relation
 * @method     ChildSpyShoppingListPermissionGroupQuery innerJoinWithSpyShoppingListCompanyUser() Adds a INNER JOIN clause and with to the query using the SpyShoppingListCompanyUser relation
 *
 * @method     ChildSpyShoppingListPermissionGroupQuery leftJoinSpyShoppingListCompanyBusinessUnit($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyShoppingListCompanyBusinessUnit relation
 * @method     ChildSpyShoppingListPermissionGroupQuery rightJoinSpyShoppingListCompanyBusinessUnit($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyShoppingListCompanyBusinessUnit relation
 * @method     ChildSpyShoppingListPermissionGroupQuery innerJoinSpyShoppingListCompanyBusinessUnit($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyShoppingListCompanyBusinessUnit relation
 *
 * @method     ChildSpyShoppingListPermissionGroupQuery joinWithSpyShoppingListCompanyBusinessUnit($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyShoppingListCompanyBusinessUnit relation
 *
 * @method     ChildSpyShoppingListPermissionGroupQuery leftJoinWithSpyShoppingListCompanyBusinessUnit() Adds a LEFT JOIN clause and with to the query using the SpyShoppingListCompanyBusinessUnit relation
 * @method     ChildSpyShoppingListPermissionGroupQuery rightJoinWithSpyShoppingListCompanyBusinessUnit() Adds a RIGHT JOIN clause and with to the query using the SpyShoppingListCompanyBusinessUnit relation
 * @method     ChildSpyShoppingListPermissionGroupQuery innerJoinWithSpyShoppingListCompanyBusinessUnit() Adds a INNER JOIN clause and with to the query using the SpyShoppingListCompanyBusinessUnit relation
 *
 * @method     ChildSpyShoppingListPermissionGroupQuery leftJoinSpyShoppingListPermissionGroupToPermission($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyShoppingListPermissionGroupToPermission relation
 * @method     ChildSpyShoppingListPermissionGroupQuery rightJoinSpyShoppingListPermissionGroupToPermission($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyShoppingListPermissionGroupToPermission relation
 * @method     ChildSpyShoppingListPermissionGroupQuery innerJoinSpyShoppingListPermissionGroupToPermission($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyShoppingListPermissionGroupToPermission relation
 *
 * @method     ChildSpyShoppingListPermissionGroupQuery joinWithSpyShoppingListPermissionGroupToPermission($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyShoppingListPermissionGroupToPermission relation
 *
 * @method     ChildSpyShoppingListPermissionGroupQuery leftJoinWithSpyShoppingListPermissionGroupToPermission() Adds a LEFT JOIN clause and with to the query using the SpyShoppingListPermissionGroupToPermission relation
 * @method     ChildSpyShoppingListPermissionGroupQuery rightJoinWithSpyShoppingListPermissionGroupToPermission() Adds a RIGHT JOIN clause and with to the query using the SpyShoppingListPermissionGroupToPermission relation
 * @method     ChildSpyShoppingListPermissionGroupQuery innerJoinWithSpyShoppingListPermissionGroupToPermission() Adds a INNER JOIN clause and with to the query using the SpyShoppingListPermissionGroupToPermission relation
 *
 * @method     \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyUserQuery|\Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnitQuery|\Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupToPermissionQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyShoppingListPermissionGroup|null findOne(ConnectionInterface $con = null) Return the first ChildSpyShoppingListPermissionGroup matching the query
 * @method     ChildSpyShoppingListPermissionGroup findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyShoppingListPermissionGroup matching the query, or a new ChildSpyShoppingListPermissionGroup object populated from the query conditions when no match is found
 *
 * @method     ChildSpyShoppingListPermissionGroup|null findOneByIdShoppingListPermissionGroup(int $id_shopping_list_permission_group) Return the first ChildSpyShoppingListPermissionGroup filtered by the id_shopping_list_permission_group column
 * @method     ChildSpyShoppingListPermissionGroup|null findOneByName(string $name) Return the first ChildSpyShoppingListPermissionGroup filtered by the name column *

 * @method     ChildSpyShoppingListPermissionGroup requirePk($key, ConnectionInterface $con = null) Return the ChildSpyShoppingListPermissionGroup by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyShoppingListPermissionGroup requireOne(ConnectionInterface $con = null) Return the first ChildSpyShoppingListPermissionGroup matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyShoppingListPermissionGroup requireOneByIdShoppingListPermissionGroup(int $id_shopping_list_permission_group) Return the first ChildSpyShoppingListPermissionGroup filtered by the id_shopping_list_permission_group column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyShoppingListPermissionGroup requireOneByName(string $name) Return the first ChildSpyShoppingListPermissionGroup filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyShoppingListPermissionGroup[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyShoppingListPermissionGroup objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyShoppingListPermissionGroup> find(ConnectionInterface $con = null) Return ChildSpyShoppingListPermissionGroup objects based on current ModelCriteria
 * @method     ChildSpyShoppingListPermissionGroup[]|ObjectCollection findByIdShoppingListPermissionGroup(int $id_shopping_list_permission_group) Return ChildSpyShoppingListPermissionGroup objects filtered by the id_shopping_list_permission_group column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyShoppingListPermissionGroup> findByIdShoppingListPermissionGroup(int $id_shopping_list_permission_group) Return ChildSpyShoppingListPermissionGroup objects filtered by the id_shopping_list_permission_group column
 * @method     ChildSpyShoppingListPermissionGroup[]|ObjectCollection findByName(string $name) Return ChildSpyShoppingListPermissionGroup objects filtered by the name column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyShoppingListPermissionGroup> findByName(string $name) Return ChildSpyShoppingListPermissionGroup objects filtered by the name column
 * @method     ChildSpyShoppingListPermissionGroup[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyShoppingListPermissionGroup> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyShoppingListPermissionGroupQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\ShoppingList\Persistence\Base\SpyShoppingListPermissionGroupQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\ShoppingList\\Persistence\\SpyShoppingListPermissionGroup', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyShoppingListPermissionGroupQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyShoppingListPermissionGroupQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyShoppingListPermissionGroupQuery) {
            return $criteria;
        }
        $query = new ChildSpyShoppingListPermissionGroupQuery();
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
     * @return ChildSpyShoppingListPermissionGroup|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyShoppingListPermissionGroupTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyShoppingListPermissionGroup A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_shopping_list_permission_group, name FROM spy_shopping_list_permission_group WHERE id_shopping_list_permission_group = :p0';
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
            /** @var ChildSpyShoppingListPermissionGroup $obj */
            $obj = new ChildSpyShoppingListPermissionGroup();
            $obj->hydrate($row);
            SpyShoppingListPermissionGroupTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyShoppingListPermissionGroup|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyShoppingListPermissionGroupQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyShoppingListPermissionGroupTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyShoppingListPermissionGroupQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyShoppingListPermissionGroupTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idShoppingListPermissionGroup Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdShoppingListPermissionGroup_Between(array $idShoppingListPermissionGroup)
    {
        return $this->filterByIdShoppingListPermissionGroup($idShoppingListPermissionGroup, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idShoppingListPermissionGroups Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdShoppingListPermissionGroup_In(array $idShoppingListPermissionGroups)
    {
        return $this->filterByIdShoppingListPermissionGroup($idShoppingListPermissionGroups, Criteria::IN);
    }

    /**
     * Filter the query on the id_shopping_list_permission_group column
     *
     * Example usage:
     * <code>
     * $query->filterByIdShoppingListPermissionGroup(1234); // WHERE id_shopping_list_permission_group = 1234
     * $query->filterByIdShoppingListPermissionGroup(array(12, 34), Criteria::IN); // WHERE id_shopping_list_permission_group IN (12, 34)
     * $query->filterByIdShoppingListPermissionGroup(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_shopping_list_permission_group > 12
     * </code>
     *
     * @param     mixed $idShoppingListPermissionGroup The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdShoppingListPermissionGroup($idShoppingListPermissionGroup = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idShoppingListPermissionGroup)) {
            $useMinMax = false;
            if (isset($idShoppingListPermissionGroup['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyShoppingListPermissionGroupTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP, $idShoppingListPermissionGroup['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idShoppingListPermissionGroup['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyShoppingListPermissionGroupTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP, $idShoppingListPermissionGroup['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idShoppingListPermissionGroup of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyShoppingListPermissionGroupTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP, $idShoppingListPermissionGroup, $comparison);

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

        $query = $this->addUsingAlias(SpyShoppingListPermissionGroupTableMap::COL_NAME, $name, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyUser object
     *
     * @param \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyUser|ObjectCollection $spyShoppingListCompanyUser the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyShoppingListPermissionGroupQuery The current query, for fluid interface
     */
    public function filterBySpyShoppingListCompanyUser($spyShoppingListCompanyUser, $comparison = null)
    {
        if ($spyShoppingListCompanyUser instanceof \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyUser) {
            return $this
                ->addUsingAlias(SpyShoppingListPermissionGroupTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP, $spyShoppingListCompanyUser->getFkShoppingListPermissionGroup(), $comparison);
        } elseif ($spyShoppingListCompanyUser instanceof ObjectCollection) {
            return $this
                ->useSpyShoppingListCompanyUserQuery()
                ->filterByPrimaryKeys($spyShoppingListCompanyUser->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyShoppingListCompanyUser() only accepts arguments of type \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyUser or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyShoppingListCompanyUser relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyShoppingListPermissionGroupQuery The current query, for fluid interface
     */
    public function joinSpyShoppingListCompanyUser($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyShoppingListCompanyUser');

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
            $this->addJoinObject($join, 'SpyShoppingListCompanyUser');
        }

        return $this;
    }

    /**
     * Use the SpyShoppingListCompanyUser relation SpyShoppingListCompanyUser object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyUserQuery A secondary query class using the current class as primary query
     */
    public function useSpyShoppingListCompanyUserQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyShoppingListCompanyUser($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyShoppingListCompanyUser', '\Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyUserQuery');
    }

    /**
     * Use the SpyShoppingListCompanyUser relation SpyShoppingListCompanyUser object
     *
     * @param callable(\Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyUserQuery):\Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyUserQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyShoppingListCompanyUserQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyShoppingListCompanyUserQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyShoppingListCompanyUser table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyUserQuery The inner query object of the EXISTS statement
     */
    public function useSpyShoppingListCompanyUserExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyShoppingListCompanyUser', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyShoppingListCompanyUser table for a NOT EXISTS query.
     *
     * @see useSpyShoppingListCompanyUserExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyUserQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyShoppingListCompanyUserNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyShoppingListCompanyUser', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnit object
     *
     * @param \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnit|ObjectCollection $spyShoppingListCompanyBusinessUnit the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyShoppingListPermissionGroupQuery The current query, for fluid interface
     */
    public function filterBySpyShoppingListCompanyBusinessUnit($spyShoppingListCompanyBusinessUnit, $comparison = null)
    {
        if ($spyShoppingListCompanyBusinessUnit instanceof \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnit) {
            return $this
                ->addUsingAlias(SpyShoppingListPermissionGroupTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP, $spyShoppingListCompanyBusinessUnit->getFkShoppingListPermissionGroup(), $comparison);
        } elseif ($spyShoppingListCompanyBusinessUnit instanceof ObjectCollection) {
            return $this
                ->useSpyShoppingListCompanyBusinessUnitQuery()
                ->filterByPrimaryKeys($spyShoppingListCompanyBusinessUnit->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyShoppingListCompanyBusinessUnit() only accepts arguments of type \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnit or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyShoppingListCompanyBusinessUnit relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyShoppingListPermissionGroupQuery The current query, for fluid interface
     */
    public function joinSpyShoppingListCompanyBusinessUnit($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyShoppingListCompanyBusinessUnit');

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
            $this->addJoinObject($join, 'SpyShoppingListCompanyBusinessUnit');
        }

        return $this;
    }

    /**
     * Use the SpyShoppingListCompanyBusinessUnit relation SpyShoppingListCompanyBusinessUnit object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnitQuery A secondary query class using the current class as primary query
     */
    public function useSpyShoppingListCompanyBusinessUnitQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyShoppingListCompanyBusinessUnit($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyShoppingListCompanyBusinessUnit', '\Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnitQuery');
    }

    /**
     * Use the SpyShoppingListCompanyBusinessUnit relation SpyShoppingListCompanyBusinessUnit object
     *
     * @param callable(\Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnitQuery):\Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnitQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyShoppingListCompanyBusinessUnitQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyShoppingListCompanyBusinessUnitQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyShoppingListCompanyBusinessUnit table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnitQuery The inner query object of the EXISTS statement
     */
    public function useSpyShoppingListCompanyBusinessUnitExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyShoppingListCompanyBusinessUnit', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyShoppingListCompanyBusinessUnit table for a NOT EXISTS query.
     *
     * @see useSpyShoppingListCompanyBusinessUnitExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnitQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyShoppingListCompanyBusinessUnitNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyShoppingListCompanyBusinessUnit', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupToPermission object
     *
     * @param \Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupToPermission|ObjectCollection $spyShoppingListPermissionGroupToPermission the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyShoppingListPermissionGroupQuery The current query, for fluid interface
     */
    public function filterBySpyShoppingListPermissionGroupToPermission($spyShoppingListPermissionGroupToPermission, $comparison = null)
    {
        if ($spyShoppingListPermissionGroupToPermission instanceof \Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupToPermission) {
            return $this
                ->addUsingAlias(SpyShoppingListPermissionGroupTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP, $spyShoppingListPermissionGroupToPermission->getFkShoppingListPermissionGroup(), $comparison);
        } elseif ($spyShoppingListPermissionGroupToPermission instanceof ObjectCollection) {
            return $this
                ->useSpyShoppingListPermissionGroupToPermissionQuery()
                ->filterByPrimaryKeys($spyShoppingListPermissionGroupToPermission->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyShoppingListPermissionGroupToPermission() only accepts arguments of type \Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupToPermission or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyShoppingListPermissionGroupToPermission relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyShoppingListPermissionGroupQuery The current query, for fluid interface
     */
    public function joinSpyShoppingListPermissionGroupToPermission($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyShoppingListPermissionGroupToPermission');

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
            $this->addJoinObject($join, 'SpyShoppingListPermissionGroupToPermission');
        }

        return $this;
    }

    /**
     * Use the SpyShoppingListPermissionGroupToPermission relation SpyShoppingListPermissionGroupToPermission object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupToPermissionQuery A secondary query class using the current class as primary query
     */
    public function useSpyShoppingListPermissionGroupToPermissionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyShoppingListPermissionGroupToPermission($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyShoppingListPermissionGroupToPermission', '\Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupToPermissionQuery');
    }

    /**
     * Use the SpyShoppingListPermissionGroupToPermission relation SpyShoppingListPermissionGroupToPermission object
     *
     * @param callable(\Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupToPermissionQuery):\Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupToPermissionQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyShoppingListPermissionGroupToPermissionQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyShoppingListPermissionGroupToPermissionQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyShoppingListPermissionGroupToPermission table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupToPermissionQuery The inner query object of the EXISTS statement
     */
    public function useSpyShoppingListPermissionGroupToPermissionExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyShoppingListPermissionGroupToPermission', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyShoppingListPermissionGroupToPermission table for a NOT EXISTS query.
     *
     * @see useSpyShoppingListPermissionGroupToPermissionExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupToPermissionQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyShoppingListPermissionGroupToPermissionNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyShoppingListPermissionGroupToPermission', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Exclude object from result
     *
     * @param   ChildSpyShoppingListPermissionGroup $spyShoppingListPermissionGroup Object to remove from the list of results
     *
     * @return $this|ChildSpyShoppingListPermissionGroupQuery The current query, for fluid interface
     */
    public function prune($spyShoppingListPermissionGroup = null)
    {
        if ($spyShoppingListPermissionGroup) {
            $this->addUsingAlias(SpyShoppingListPermissionGroupTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP, $spyShoppingListPermissionGroup->getIdShoppingListPermissionGroup(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_shopping_list_permission_group table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyShoppingListPermissionGroupTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyShoppingListPermissionGroupTableMap::clearInstancePool();
            SpyShoppingListPermissionGroupTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyShoppingListPermissionGroupTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyShoppingListPermissionGroupTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyShoppingListPermissionGroupTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyShoppingListPermissionGroupTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SpyShoppingListPermissionGroupQuery
