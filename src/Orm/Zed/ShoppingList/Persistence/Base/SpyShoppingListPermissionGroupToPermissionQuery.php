<?php

namespace Orm\Zed\ShoppingList\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\Permission\Persistence\SpyPermission;
use Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupToPermission as ChildSpyShoppingListPermissionGroupToPermission;
use Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupToPermissionQuery as ChildSpyShoppingListPermissionGroupToPermissionQuery;
use Orm\Zed\ShoppingList\Persistence\Map\SpyShoppingListPermissionGroupToPermissionTableMap;
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
 * Base class that represents a query for the 'spy_shopping_list_permission_group_to_permission' table.
 *
 *
 *
 * @method     ChildSpyShoppingListPermissionGroupToPermissionQuery orderByIdShoppingListPermissionGroupToPermission($order = Criteria::ASC) Order by the id_shopping_list_permission_group_to_permission column
 * @method     ChildSpyShoppingListPermissionGroupToPermissionQuery orderByFkPermission($order = Criteria::ASC) Order by the fk_permission column
 * @method     ChildSpyShoppingListPermissionGroupToPermissionQuery orderByFkShoppingListPermissionGroup($order = Criteria::ASC) Order by the fk_shopping_list_permission_group column
 *
 * @method     ChildSpyShoppingListPermissionGroupToPermissionQuery groupByIdShoppingListPermissionGroupToPermission() Group by the id_shopping_list_permission_group_to_permission column
 * @method     ChildSpyShoppingListPermissionGroupToPermissionQuery groupByFkPermission() Group by the fk_permission column
 * @method     ChildSpyShoppingListPermissionGroupToPermissionQuery groupByFkShoppingListPermissionGroup() Group by the fk_shopping_list_permission_group column
 *
 * @method     ChildSpyShoppingListPermissionGroupToPermissionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyShoppingListPermissionGroupToPermissionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyShoppingListPermissionGroupToPermissionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyShoppingListPermissionGroupToPermissionQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyShoppingListPermissionGroupToPermissionQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyShoppingListPermissionGroupToPermissionQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyShoppingListPermissionGroupToPermissionQuery leftJoinSpyShoppingListPermissionGroup($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyShoppingListPermissionGroup relation
 * @method     ChildSpyShoppingListPermissionGroupToPermissionQuery rightJoinSpyShoppingListPermissionGroup($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyShoppingListPermissionGroup relation
 * @method     ChildSpyShoppingListPermissionGroupToPermissionQuery innerJoinSpyShoppingListPermissionGroup($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyShoppingListPermissionGroup relation
 *
 * @method     ChildSpyShoppingListPermissionGroupToPermissionQuery joinWithSpyShoppingListPermissionGroup($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyShoppingListPermissionGroup relation
 *
 * @method     ChildSpyShoppingListPermissionGroupToPermissionQuery leftJoinWithSpyShoppingListPermissionGroup() Adds a LEFT JOIN clause and with to the query using the SpyShoppingListPermissionGroup relation
 * @method     ChildSpyShoppingListPermissionGroupToPermissionQuery rightJoinWithSpyShoppingListPermissionGroup() Adds a RIGHT JOIN clause and with to the query using the SpyShoppingListPermissionGroup relation
 * @method     ChildSpyShoppingListPermissionGroupToPermissionQuery innerJoinWithSpyShoppingListPermissionGroup() Adds a INNER JOIN clause and with to the query using the SpyShoppingListPermissionGroup relation
 *
 * @method     ChildSpyShoppingListPermissionGroupToPermissionQuery leftJoinSpyPermission($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyPermission relation
 * @method     ChildSpyShoppingListPermissionGroupToPermissionQuery rightJoinSpyPermission($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyPermission relation
 * @method     ChildSpyShoppingListPermissionGroupToPermissionQuery innerJoinSpyPermission($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyPermission relation
 *
 * @method     ChildSpyShoppingListPermissionGroupToPermissionQuery joinWithSpyPermission($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyPermission relation
 *
 * @method     ChildSpyShoppingListPermissionGroupToPermissionQuery leftJoinWithSpyPermission() Adds a LEFT JOIN clause and with to the query using the SpyPermission relation
 * @method     ChildSpyShoppingListPermissionGroupToPermissionQuery rightJoinWithSpyPermission() Adds a RIGHT JOIN clause and with to the query using the SpyPermission relation
 * @method     ChildSpyShoppingListPermissionGroupToPermissionQuery innerJoinWithSpyPermission() Adds a INNER JOIN clause and with to the query using the SpyPermission relation
 *
 * @method     \Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupQuery|\Orm\Zed\Permission\Persistence\SpyPermissionQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyShoppingListPermissionGroupToPermission|null findOne(ConnectionInterface $con = null) Return the first ChildSpyShoppingListPermissionGroupToPermission matching the query
 * @method     ChildSpyShoppingListPermissionGroupToPermission findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyShoppingListPermissionGroupToPermission matching the query, or a new ChildSpyShoppingListPermissionGroupToPermission object populated from the query conditions when no match is found
 *
 * @method     ChildSpyShoppingListPermissionGroupToPermission|null findOneByIdShoppingListPermissionGroupToPermission(int $id_shopping_list_permission_group_to_permission) Return the first ChildSpyShoppingListPermissionGroupToPermission filtered by the id_shopping_list_permission_group_to_permission column
 * @method     ChildSpyShoppingListPermissionGroupToPermission|null findOneByFkPermission(int $fk_permission) Return the first ChildSpyShoppingListPermissionGroupToPermission filtered by the fk_permission column
 * @method     ChildSpyShoppingListPermissionGroupToPermission|null findOneByFkShoppingListPermissionGroup(int $fk_shopping_list_permission_group) Return the first ChildSpyShoppingListPermissionGroupToPermission filtered by the fk_shopping_list_permission_group column *

 * @method     ChildSpyShoppingListPermissionGroupToPermission requirePk($key, ConnectionInterface $con = null) Return the ChildSpyShoppingListPermissionGroupToPermission by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyShoppingListPermissionGroupToPermission requireOne(ConnectionInterface $con = null) Return the first ChildSpyShoppingListPermissionGroupToPermission matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyShoppingListPermissionGroupToPermission requireOneByIdShoppingListPermissionGroupToPermission(int $id_shopping_list_permission_group_to_permission) Return the first ChildSpyShoppingListPermissionGroupToPermission filtered by the id_shopping_list_permission_group_to_permission column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyShoppingListPermissionGroupToPermission requireOneByFkPermission(int $fk_permission) Return the first ChildSpyShoppingListPermissionGroupToPermission filtered by the fk_permission column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyShoppingListPermissionGroupToPermission requireOneByFkShoppingListPermissionGroup(int $fk_shopping_list_permission_group) Return the first ChildSpyShoppingListPermissionGroupToPermission filtered by the fk_shopping_list_permission_group column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyShoppingListPermissionGroupToPermission[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyShoppingListPermissionGroupToPermission objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyShoppingListPermissionGroupToPermission> find(ConnectionInterface $con = null) Return ChildSpyShoppingListPermissionGroupToPermission objects based on current ModelCriteria
 * @method     ChildSpyShoppingListPermissionGroupToPermission[]|ObjectCollection findByIdShoppingListPermissionGroupToPermission(int $id_shopping_list_permission_group_to_permission) Return ChildSpyShoppingListPermissionGroupToPermission objects filtered by the id_shopping_list_permission_group_to_permission column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyShoppingListPermissionGroupToPermission> findByIdShoppingListPermissionGroupToPermission(int $id_shopping_list_permission_group_to_permission) Return ChildSpyShoppingListPermissionGroupToPermission objects filtered by the id_shopping_list_permission_group_to_permission column
 * @method     ChildSpyShoppingListPermissionGroupToPermission[]|ObjectCollection findByFkPermission(int $fk_permission) Return ChildSpyShoppingListPermissionGroupToPermission objects filtered by the fk_permission column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyShoppingListPermissionGroupToPermission> findByFkPermission(int $fk_permission) Return ChildSpyShoppingListPermissionGroupToPermission objects filtered by the fk_permission column
 * @method     ChildSpyShoppingListPermissionGroupToPermission[]|ObjectCollection findByFkShoppingListPermissionGroup(int $fk_shopping_list_permission_group) Return ChildSpyShoppingListPermissionGroupToPermission objects filtered by the fk_shopping_list_permission_group column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyShoppingListPermissionGroupToPermission> findByFkShoppingListPermissionGroup(int $fk_shopping_list_permission_group) Return ChildSpyShoppingListPermissionGroupToPermission objects filtered by the fk_shopping_list_permission_group column
 * @method     ChildSpyShoppingListPermissionGroupToPermission[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyShoppingListPermissionGroupToPermission> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyShoppingListPermissionGroupToPermissionQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\ShoppingList\Persistence\Base\SpyShoppingListPermissionGroupToPermissionQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\ShoppingList\\Persistence\\SpyShoppingListPermissionGroupToPermission', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyShoppingListPermissionGroupToPermissionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyShoppingListPermissionGroupToPermissionQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyShoppingListPermissionGroupToPermissionQuery) {
            return $criteria;
        }
        $query = new ChildSpyShoppingListPermissionGroupToPermissionQuery();
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
     * @return ChildSpyShoppingListPermissionGroupToPermission|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyShoppingListPermissionGroupToPermissionTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyShoppingListPermissionGroupToPermission A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_shopping_list_permission_group_to_permission, fk_permission, fk_shopping_list_permission_group FROM spy_shopping_list_permission_group_to_permission WHERE id_shopping_list_permission_group_to_permission = :p0';
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
            /** @var ChildSpyShoppingListPermissionGroupToPermission $obj */
            $obj = new ChildSpyShoppingListPermissionGroupToPermission();
            $obj->hydrate($row);
            SpyShoppingListPermissionGroupToPermissionTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyShoppingListPermissionGroupToPermission|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyShoppingListPermissionGroupToPermissionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyShoppingListPermissionGroupToPermissionTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP_TO_PERMISSION, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyShoppingListPermissionGroupToPermissionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyShoppingListPermissionGroupToPermissionTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP_TO_PERMISSION, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idShoppingListPermissionGroupToPermission Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdShoppingListPermissionGroupToPermission_Between(array $idShoppingListPermissionGroupToPermission)
    {
        return $this->filterByIdShoppingListPermissionGroupToPermission($idShoppingListPermissionGroupToPermission, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idShoppingListPermissionGroupToPermissions Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdShoppingListPermissionGroupToPermission_In(array $idShoppingListPermissionGroupToPermissions)
    {
        return $this->filterByIdShoppingListPermissionGroupToPermission($idShoppingListPermissionGroupToPermissions, Criteria::IN);
    }

    /**
     * Filter the query on the id_shopping_list_permission_group_to_permission column
     *
     * Example usage:
     * <code>
     * $query->filterByIdShoppingListPermissionGroupToPermission(1234); // WHERE id_shopping_list_permission_group_to_permission = 1234
     * $query->filterByIdShoppingListPermissionGroupToPermission(array(12, 34), Criteria::IN); // WHERE id_shopping_list_permission_group_to_permission IN (12, 34)
     * $query->filterByIdShoppingListPermissionGroupToPermission(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_shopping_list_permission_group_to_permission > 12
     * </code>
     *
     * @param     mixed $idShoppingListPermissionGroupToPermission The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdShoppingListPermissionGroupToPermission($idShoppingListPermissionGroupToPermission = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idShoppingListPermissionGroupToPermission)) {
            $useMinMax = false;
            if (isset($idShoppingListPermissionGroupToPermission['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyShoppingListPermissionGroupToPermissionTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP_TO_PERMISSION, $idShoppingListPermissionGroupToPermission['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idShoppingListPermissionGroupToPermission['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyShoppingListPermissionGroupToPermissionTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP_TO_PERMISSION, $idShoppingListPermissionGroupToPermission['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idShoppingListPermissionGroupToPermission of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyShoppingListPermissionGroupToPermissionTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP_TO_PERMISSION, $idShoppingListPermissionGroupToPermission, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkPermission Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkPermission_Between(array $fkPermission)
    {
        return $this->filterByFkPermission($fkPermission, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkPermissions Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkPermission_In(array $fkPermissions)
    {
        return $this->filterByFkPermission($fkPermissions, Criteria::IN);
    }

    /**
     * Filter the query on the fk_permission column
     *
     * Example usage:
     * <code>
     * $query->filterByFkPermission(1234); // WHERE fk_permission = 1234
     * $query->filterByFkPermission(array(12, 34), Criteria::IN); // WHERE fk_permission IN (12, 34)
     * $query->filterByFkPermission(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_permission > 12
     * </code>
     *
     * @see       filterBySpyPermission()
     *
     * @param     mixed $fkPermission The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkPermission($fkPermission = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkPermission)) {
            $useMinMax = false;
            if (isset($fkPermission['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyShoppingListPermissionGroupToPermissionTableMap::COL_FK_PERMISSION, $fkPermission['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkPermission['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyShoppingListPermissionGroupToPermissionTableMap::COL_FK_PERMISSION, $fkPermission['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkPermission of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyShoppingListPermissionGroupToPermissionTableMap::COL_FK_PERMISSION, $fkPermission, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkShoppingListPermissionGroup Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkShoppingListPermissionGroup_Between(array $fkShoppingListPermissionGroup)
    {
        return $this->filterByFkShoppingListPermissionGroup($fkShoppingListPermissionGroup, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkShoppingListPermissionGroups Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkShoppingListPermissionGroup_In(array $fkShoppingListPermissionGroups)
    {
        return $this->filterByFkShoppingListPermissionGroup($fkShoppingListPermissionGroups, Criteria::IN);
    }

    /**
     * Filter the query on the fk_shopping_list_permission_group column
     *
     * Example usage:
     * <code>
     * $query->filterByFkShoppingListPermissionGroup(1234); // WHERE fk_shopping_list_permission_group = 1234
     * $query->filterByFkShoppingListPermissionGroup(array(12, 34), Criteria::IN); // WHERE fk_shopping_list_permission_group IN (12, 34)
     * $query->filterByFkShoppingListPermissionGroup(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_shopping_list_permission_group > 12
     * </code>
     *
     * @see       filterBySpyShoppingListPermissionGroup()
     *
     * @param     mixed $fkShoppingListPermissionGroup The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkShoppingListPermissionGroup($fkShoppingListPermissionGroup = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkShoppingListPermissionGroup)) {
            $useMinMax = false;
            if (isset($fkShoppingListPermissionGroup['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyShoppingListPermissionGroupToPermissionTableMap::COL_FK_SHOPPING_LIST_PERMISSION_GROUP, $fkShoppingListPermissionGroup['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkShoppingListPermissionGroup['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyShoppingListPermissionGroupToPermissionTableMap::COL_FK_SHOPPING_LIST_PERMISSION_GROUP, $fkShoppingListPermissionGroup['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkShoppingListPermissionGroup of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyShoppingListPermissionGroupToPermissionTableMap::COL_FK_SHOPPING_LIST_PERMISSION_GROUP, $fkShoppingListPermissionGroup, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroup object
     *
     * @param \Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroup|ObjectCollection $spyShoppingListPermissionGroup The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyShoppingListPermissionGroupToPermissionQuery The current query, for fluid interface
     */
    public function filterBySpyShoppingListPermissionGroup($spyShoppingListPermissionGroup, $comparison = null)
    {
        if ($spyShoppingListPermissionGroup instanceof \Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroup) {
            return $this
                ->addUsingAlias(SpyShoppingListPermissionGroupToPermissionTableMap::COL_FK_SHOPPING_LIST_PERMISSION_GROUP, $spyShoppingListPermissionGroup->getIdShoppingListPermissionGroup(), $comparison);
        } elseif ($spyShoppingListPermissionGroup instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyShoppingListPermissionGroupToPermissionTableMap::COL_FK_SHOPPING_LIST_PERMISSION_GROUP, $spyShoppingListPermissionGroup->toKeyValue('PrimaryKey', 'IdShoppingListPermissionGroup'), $comparison);
        } else {
            throw new PropelException('filterBySpyShoppingListPermissionGroup() only accepts arguments of type \Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroup or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyShoppingListPermissionGroup relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyShoppingListPermissionGroupToPermissionQuery The current query, for fluid interface
     */
    public function joinSpyShoppingListPermissionGroup($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyShoppingListPermissionGroup');

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
            $this->addJoinObject($join, 'SpyShoppingListPermissionGroup');
        }

        return $this;
    }

    /**
     * Use the SpyShoppingListPermissionGroup relation SpyShoppingListPermissionGroup object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupQuery A secondary query class using the current class as primary query
     */
    public function useSpyShoppingListPermissionGroupQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyShoppingListPermissionGroup($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyShoppingListPermissionGroup', '\Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupQuery');
    }

    /**
     * Use the SpyShoppingListPermissionGroup relation SpyShoppingListPermissionGroup object
     *
     * @param callable(\Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupQuery):\Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyShoppingListPermissionGroupQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyShoppingListPermissionGroupQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyShoppingListPermissionGroup table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupQuery The inner query object of the EXISTS statement
     */
    public function useSpyShoppingListPermissionGroupExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyShoppingListPermissionGroup', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyShoppingListPermissionGroup table for a NOT EXISTS query.
     *
     * @see useSpyShoppingListPermissionGroupExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyShoppingListPermissionGroupNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyShoppingListPermissionGroup', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Permission\Persistence\SpyPermission object
     *
     * @param \Orm\Zed\Permission\Persistence\SpyPermission|ObjectCollection $spyPermission The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyShoppingListPermissionGroupToPermissionQuery The current query, for fluid interface
     */
    public function filterBySpyPermission($spyPermission, $comparison = null)
    {
        if ($spyPermission instanceof \Orm\Zed\Permission\Persistence\SpyPermission) {
            return $this
                ->addUsingAlias(SpyShoppingListPermissionGroupToPermissionTableMap::COL_FK_PERMISSION, $spyPermission->getIdPermission(), $comparison);
        } elseif ($spyPermission instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyShoppingListPermissionGroupToPermissionTableMap::COL_FK_PERMISSION, $spyPermission->toKeyValue('PrimaryKey', 'IdPermission'), $comparison);
        } else {
            throw new PropelException('filterBySpyPermission() only accepts arguments of type \Orm\Zed\Permission\Persistence\SpyPermission or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyPermission relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyShoppingListPermissionGroupToPermissionQuery The current query, for fluid interface
     */
    public function joinSpyPermission($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyPermission');

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
            $this->addJoinObject($join, 'SpyPermission');
        }

        return $this;
    }

    /**
     * Use the SpyPermission relation SpyPermission object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Permission\Persistence\SpyPermissionQuery A secondary query class using the current class as primary query
     */
    public function useSpyPermissionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyPermission($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyPermission', '\Orm\Zed\Permission\Persistence\SpyPermissionQuery');
    }

    /**
     * Use the SpyPermission relation SpyPermission object
     *
     * @param callable(\Orm\Zed\Permission\Persistence\SpyPermissionQuery):\Orm\Zed\Permission\Persistence\SpyPermissionQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyPermissionQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyPermissionQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyPermission table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Permission\Persistence\SpyPermissionQuery The inner query object of the EXISTS statement
     */
    public function useSpyPermissionExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyPermission', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyPermission table for a NOT EXISTS query.
     *
     * @see useSpyPermissionExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Permission\Persistence\SpyPermissionQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyPermissionNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyPermission', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Exclude object from result
     *
     * @param   ChildSpyShoppingListPermissionGroupToPermission $spyShoppingListPermissionGroupToPermission Object to remove from the list of results
     *
     * @return $this|ChildSpyShoppingListPermissionGroupToPermissionQuery The current query, for fluid interface
     */
    public function prune($spyShoppingListPermissionGroupToPermission = null)
    {
        if ($spyShoppingListPermissionGroupToPermission) {
            $this->addUsingAlias(SpyShoppingListPermissionGroupToPermissionTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP_TO_PERMISSION, $spyShoppingListPermissionGroupToPermission->getIdShoppingListPermissionGroupToPermission(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_shopping_list_permission_group_to_permission table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyShoppingListPermissionGroupToPermissionTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyShoppingListPermissionGroupToPermissionTableMap::clearInstancePool();
            SpyShoppingListPermissionGroupToPermissionTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyShoppingListPermissionGroupToPermissionTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyShoppingListPermissionGroupToPermissionTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyShoppingListPermissionGroupToPermissionTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyShoppingListPermissionGroupToPermissionTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SpyShoppingListPermissionGroupToPermissionQuery
