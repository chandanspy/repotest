<?php

namespace Orm\Zed\Acl\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\Acl\Persistence\SpyAclGroupsHasRoles as ChildSpyAclGroupsHasRoles;
use Orm\Zed\Acl\Persistence\SpyAclGroupsHasRolesQuery as ChildSpyAclGroupsHasRolesQuery;
use Orm\Zed\Acl\Persistence\Map\SpyAclGroupsHasRolesTableMap;
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
 * Base class that represents a query for the 'spy_acl_groups_has_roles' table.
 *
 *
 *
 * @method     ChildSpyAclGroupsHasRolesQuery orderByFkAclRole($order = Criteria::ASC) Order by the fk_acl_role column
 * @method     ChildSpyAclGroupsHasRolesQuery orderByFkAclGroup($order = Criteria::ASC) Order by the fk_acl_group column
 *
 * @method     ChildSpyAclGroupsHasRolesQuery groupByFkAclRole() Group by the fk_acl_role column
 * @method     ChildSpyAclGroupsHasRolesQuery groupByFkAclGroup() Group by the fk_acl_group column
 *
 * @method     ChildSpyAclGroupsHasRolesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyAclGroupsHasRolesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyAclGroupsHasRolesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyAclGroupsHasRolesQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyAclGroupsHasRolesQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyAclGroupsHasRolesQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyAclGroupsHasRolesQuery leftJoinSpyAclRole($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyAclRole relation
 * @method     ChildSpyAclGroupsHasRolesQuery rightJoinSpyAclRole($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyAclRole relation
 * @method     ChildSpyAclGroupsHasRolesQuery innerJoinSpyAclRole($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyAclRole relation
 *
 * @method     ChildSpyAclGroupsHasRolesQuery joinWithSpyAclRole($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyAclRole relation
 *
 * @method     ChildSpyAclGroupsHasRolesQuery leftJoinWithSpyAclRole() Adds a LEFT JOIN clause and with to the query using the SpyAclRole relation
 * @method     ChildSpyAclGroupsHasRolesQuery rightJoinWithSpyAclRole() Adds a RIGHT JOIN clause and with to the query using the SpyAclRole relation
 * @method     ChildSpyAclGroupsHasRolesQuery innerJoinWithSpyAclRole() Adds a INNER JOIN clause and with to the query using the SpyAclRole relation
 *
 * @method     ChildSpyAclGroupsHasRolesQuery leftJoinSpyAclGroup($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyAclGroup relation
 * @method     ChildSpyAclGroupsHasRolesQuery rightJoinSpyAclGroup($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyAclGroup relation
 * @method     ChildSpyAclGroupsHasRolesQuery innerJoinSpyAclGroup($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyAclGroup relation
 *
 * @method     ChildSpyAclGroupsHasRolesQuery joinWithSpyAclGroup($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyAclGroup relation
 *
 * @method     ChildSpyAclGroupsHasRolesQuery leftJoinWithSpyAclGroup() Adds a LEFT JOIN clause and with to the query using the SpyAclGroup relation
 * @method     ChildSpyAclGroupsHasRolesQuery rightJoinWithSpyAclGroup() Adds a RIGHT JOIN clause and with to the query using the SpyAclGroup relation
 * @method     ChildSpyAclGroupsHasRolesQuery innerJoinWithSpyAclGroup() Adds a INNER JOIN clause and with to the query using the SpyAclGroup relation
 *
 * @method     \Orm\Zed\Acl\Persistence\SpyAclRoleQuery|\Orm\Zed\Acl\Persistence\SpyAclGroupQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyAclGroupsHasRoles|null findOne(ConnectionInterface $con = null) Return the first ChildSpyAclGroupsHasRoles matching the query
 * @method     ChildSpyAclGroupsHasRoles findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyAclGroupsHasRoles matching the query, or a new ChildSpyAclGroupsHasRoles object populated from the query conditions when no match is found
 *
 * @method     ChildSpyAclGroupsHasRoles|null findOneByFkAclRole(int $fk_acl_role) Return the first ChildSpyAclGroupsHasRoles filtered by the fk_acl_role column
 * @method     ChildSpyAclGroupsHasRoles|null findOneByFkAclGroup(int $fk_acl_group) Return the first ChildSpyAclGroupsHasRoles filtered by the fk_acl_group column *

 * @method     ChildSpyAclGroupsHasRoles requirePk($key, ConnectionInterface $con = null) Return the ChildSpyAclGroupsHasRoles by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyAclGroupsHasRoles requireOne(ConnectionInterface $con = null) Return the first ChildSpyAclGroupsHasRoles matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyAclGroupsHasRoles requireOneByFkAclRole(int $fk_acl_role) Return the first ChildSpyAclGroupsHasRoles filtered by the fk_acl_role column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyAclGroupsHasRoles requireOneByFkAclGroup(int $fk_acl_group) Return the first ChildSpyAclGroupsHasRoles filtered by the fk_acl_group column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyAclGroupsHasRoles[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyAclGroupsHasRoles objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyAclGroupsHasRoles> find(ConnectionInterface $con = null) Return ChildSpyAclGroupsHasRoles objects based on current ModelCriteria
 * @method     ChildSpyAclGroupsHasRoles[]|ObjectCollection findByFkAclRole(int $fk_acl_role) Return ChildSpyAclGroupsHasRoles objects filtered by the fk_acl_role column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyAclGroupsHasRoles> findByFkAclRole(int $fk_acl_role) Return ChildSpyAclGroupsHasRoles objects filtered by the fk_acl_role column
 * @method     ChildSpyAclGroupsHasRoles[]|ObjectCollection findByFkAclGroup(int $fk_acl_group) Return ChildSpyAclGroupsHasRoles objects filtered by the fk_acl_group column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyAclGroupsHasRoles> findByFkAclGroup(int $fk_acl_group) Return ChildSpyAclGroupsHasRoles objects filtered by the fk_acl_group column
 * @method     ChildSpyAclGroupsHasRoles[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyAclGroupsHasRoles> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyAclGroupsHasRolesQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\Acl\Persistence\Base\SpyAclGroupsHasRolesQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\Acl\\Persistence\\SpyAclGroupsHasRoles', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyAclGroupsHasRolesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyAclGroupsHasRolesQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyAclGroupsHasRolesQuery) {
            return $criteria;
        }
        $query = new ChildSpyAclGroupsHasRolesQuery();
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
     * @param array[$fk_acl_role, $fk_acl_group] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildSpyAclGroupsHasRoles|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyAclGroupsHasRolesTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildSpyAclGroupsHasRoles A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT fk_acl_role, fk_acl_group FROM spy_acl_groups_has_roles WHERE fk_acl_role = :p0 AND fk_acl_group = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildSpyAclGroupsHasRoles $obj */
            $obj = new ChildSpyAclGroupsHasRoles();
            $obj->hydrate($row);
            SpyAclGroupsHasRolesTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildSpyAclGroupsHasRoles|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyAclGroupsHasRolesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(SpyAclGroupsHasRolesTableMap::COL_FK_ACL_ROLE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(SpyAclGroupsHasRolesTableMap::COL_FK_ACL_GROUP, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyAclGroupsHasRolesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(SpyAclGroupsHasRolesTableMap::COL_FK_ACL_ROLE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(SpyAclGroupsHasRolesTableMap::COL_FK_ACL_GROUP, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkAclRole Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkAclRole_Between(array $fkAclRole)
    {
        return $this->filterByFkAclRole($fkAclRole, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkAclRoles Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkAclRole_In(array $fkAclRoles)
    {
        return $this->filterByFkAclRole($fkAclRoles, Criteria::IN);
    }

    /**
     * Filter the query on the fk_acl_role column
     *
     * Example usage:
     * <code>
     * $query->filterByFkAclRole(1234); // WHERE fk_acl_role = 1234
     * $query->filterByFkAclRole(array(12, 34), Criteria::IN); // WHERE fk_acl_role IN (12, 34)
     * $query->filterByFkAclRole(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_acl_role > 12
     * </code>
     *
     * @see       filterBySpyAclRole()
     *
     * @param     mixed $fkAclRole The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkAclRole($fkAclRole = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkAclRole)) {
            $useMinMax = false;
            if (isset($fkAclRole['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyAclGroupsHasRolesTableMap::COL_FK_ACL_ROLE, $fkAclRole['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkAclRole['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyAclGroupsHasRolesTableMap::COL_FK_ACL_ROLE, $fkAclRole['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkAclRole of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyAclGroupsHasRolesTableMap::COL_FK_ACL_ROLE, $fkAclRole, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkAclGroup Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkAclGroup_Between(array $fkAclGroup)
    {
        return $this->filterByFkAclGroup($fkAclGroup, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkAclGroups Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkAclGroup_In(array $fkAclGroups)
    {
        return $this->filterByFkAclGroup($fkAclGroups, Criteria::IN);
    }

    /**
     * Filter the query on the fk_acl_group column
     *
     * Example usage:
     * <code>
     * $query->filterByFkAclGroup(1234); // WHERE fk_acl_group = 1234
     * $query->filterByFkAclGroup(array(12, 34), Criteria::IN); // WHERE fk_acl_group IN (12, 34)
     * $query->filterByFkAclGroup(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_acl_group > 12
     * </code>
     *
     * @see       filterBySpyAclGroup()
     *
     * @param     mixed $fkAclGroup The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkAclGroup($fkAclGroup = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkAclGroup)) {
            $useMinMax = false;
            if (isset($fkAclGroup['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyAclGroupsHasRolesTableMap::COL_FK_ACL_GROUP, $fkAclGroup['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkAclGroup['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyAclGroupsHasRolesTableMap::COL_FK_ACL_GROUP, $fkAclGroup['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkAclGroup of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyAclGroupsHasRolesTableMap::COL_FK_ACL_GROUP, $fkAclGroup, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\Acl\Persistence\SpyAclRole object
     *
     * @param \Orm\Zed\Acl\Persistence\SpyAclRole|ObjectCollection $spyAclRole The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyAclGroupsHasRolesQuery The current query, for fluid interface
     */
    public function filterBySpyAclRole($spyAclRole, $comparison = null)
    {
        if ($spyAclRole instanceof \Orm\Zed\Acl\Persistence\SpyAclRole) {
            return $this
                ->addUsingAlias(SpyAclGroupsHasRolesTableMap::COL_FK_ACL_ROLE, $spyAclRole->getIdAclRole(), $comparison);
        } elseif ($spyAclRole instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyAclGroupsHasRolesTableMap::COL_FK_ACL_ROLE, $spyAclRole->toKeyValue('PrimaryKey', 'IdAclRole'), $comparison);
        } else {
            throw new PropelException('filterBySpyAclRole() only accepts arguments of type \Orm\Zed\Acl\Persistence\SpyAclRole or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyAclRole relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyAclGroupsHasRolesQuery The current query, for fluid interface
     */
    public function joinSpyAclRole($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyAclRole');

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
            $this->addJoinObject($join, 'SpyAclRole');
        }

        return $this;
    }

    /**
     * Use the SpyAclRole relation SpyAclRole object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Acl\Persistence\SpyAclRoleQuery A secondary query class using the current class as primary query
     */
    public function useSpyAclRoleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyAclRole($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyAclRole', '\Orm\Zed\Acl\Persistence\SpyAclRoleQuery');
    }

    /**
     * Use the SpyAclRole relation SpyAclRole object
     *
     * @param callable(\Orm\Zed\Acl\Persistence\SpyAclRoleQuery):\Orm\Zed\Acl\Persistence\SpyAclRoleQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyAclRoleQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyAclRoleQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyAclRole table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Acl\Persistence\SpyAclRoleQuery The inner query object of the EXISTS statement
     */
    public function useSpyAclRoleExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyAclRole', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyAclRole table for a NOT EXISTS query.
     *
     * @see useSpyAclRoleExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Acl\Persistence\SpyAclRoleQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyAclRoleNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyAclRole', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Acl\Persistence\SpyAclGroup object
     *
     * @param \Orm\Zed\Acl\Persistence\SpyAclGroup|ObjectCollection $spyAclGroup The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyAclGroupsHasRolesQuery The current query, for fluid interface
     */
    public function filterBySpyAclGroup($spyAclGroup, $comparison = null)
    {
        if ($spyAclGroup instanceof \Orm\Zed\Acl\Persistence\SpyAclGroup) {
            return $this
                ->addUsingAlias(SpyAclGroupsHasRolesTableMap::COL_FK_ACL_GROUP, $spyAclGroup->getIdAclGroup(), $comparison);
        } elseif ($spyAclGroup instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyAclGroupsHasRolesTableMap::COL_FK_ACL_GROUP, $spyAclGroup->toKeyValue('PrimaryKey', 'IdAclGroup'), $comparison);
        } else {
            throw new PropelException('filterBySpyAclGroup() only accepts arguments of type \Orm\Zed\Acl\Persistence\SpyAclGroup or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyAclGroup relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyAclGroupsHasRolesQuery The current query, for fluid interface
     */
    public function joinSpyAclGroup($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyAclGroup');

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
            $this->addJoinObject($join, 'SpyAclGroup');
        }

        return $this;
    }

    /**
     * Use the SpyAclGroup relation SpyAclGroup object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Acl\Persistence\SpyAclGroupQuery A secondary query class using the current class as primary query
     */
    public function useSpyAclGroupQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyAclGroup($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyAclGroup', '\Orm\Zed\Acl\Persistence\SpyAclGroupQuery');
    }

    /**
     * Use the SpyAclGroup relation SpyAclGroup object
     *
     * @param callable(\Orm\Zed\Acl\Persistence\SpyAclGroupQuery):\Orm\Zed\Acl\Persistence\SpyAclGroupQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyAclGroupQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyAclGroupQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyAclGroup table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Acl\Persistence\SpyAclGroupQuery The inner query object of the EXISTS statement
     */
    public function useSpyAclGroupExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyAclGroup', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyAclGroup table for a NOT EXISTS query.
     *
     * @see useSpyAclGroupExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Acl\Persistence\SpyAclGroupQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyAclGroupNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyAclGroup', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Exclude object from result
     *
     * @param   ChildSpyAclGroupsHasRoles $spyAclGroupsHasRoles Object to remove from the list of results
     *
     * @return $this|ChildSpyAclGroupsHasRolesQuery The current query, for fluid interface
     */
    public function prune($spyAclGroupsHasRoles = null)
    {
        if ($spyAclGroupsHasRoles) {
            $this->addCond('pruneCond0', $this->getAliasedColName(SpyAclGroupsHasRolesTableMap::COL_FK_ACL_ROLE), $spyAclGroupsHasRoles->getFkAclRole(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(SpyAclGroupsHasRolesTableMap::COL_FK_ACL_GROUP), $spyAclGroupsHasRoles->getFkAclGroup(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_acl_groups_has_roles table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyAclGroupsHasRolesTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyAclGroupsHasRolesTableMap::clearInstancePool();
            SpyAclGroupsHasRolesTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyAclGroupsHasRolesTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyAclGroupsHasRolesTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyAclGroupsHasRolesTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyAclGroupsHasRolesTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SpyAclGroupsHasRolesQuery
