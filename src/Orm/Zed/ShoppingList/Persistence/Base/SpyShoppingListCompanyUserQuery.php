<?php

namespace Orm\Zed\ShoppingList\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\CompanyUser\Persistence\SpyCompanyUser;
use Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyUser as ChildSpyShoppingListCompanyUser;
use Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyUserQuery as ChildSpyShoppingListCompanyUserQuery;
use Orm\Zed\ShoppingList\Persistence\Map\SpyShoppingListCompanyUserTableMap;
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
 * Base class that represents a query for the 'spy_shopping_list_company_user' table.
 *
 *
 *
 * @method     ChildSpyShoppingListCompanyUserQuery orderByIdShoppingListCompanyUser($order = Criteria::ASC) Order by the id_shopping_list_company_user column
 * @method     ChildSpyShoppingListCompanyUserQuery orderByFkCompanyUser($order = Criteria::ASC) Order by the fk_company_user column
 * @method     ChildSpyShoppingListCompanyUserQuery orderByFkShoppingList($order = Criteria::ASC) Order by the fk_shopping_list column
 * @method     ChildSpyShoppingListCompanyUserQuery orderByFkShoppingListPermissionGroup($order = Criteria::ASC) Order by the fk_shopping_list_permission_group column
 *
 * @method     ChildSpyShoppingListCompanyUserQuery groupByIdShoppingListCompanyUser() Group by the id_shopping_list_company_user column
 * @method     ChildSpyShoppingListCompanyUserQuery groupByFkCompanyUser() Group by the fk_company_user column
 * @method     ChildSpyShoppingListCompanyUserQuery groupByFkShoppingList() Group by the fk_shopping_list column
 * @method     ChildSpyShoppingListCompanyUserQuery groupByFkShoppingListPermissionGroup() Group by the fk_shopping_list_permission_group column
 *
 * @method     ChildSpyShoppingListCompanyUserQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyShoppingListCompanyUserQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyShoppingListCompanyUserQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyShoppingListCompanyUserQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyShoppingListCompanyUserQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyShoppingListCompanyUserQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyShoppingListCompanyUserQuery leftJoinSpyCompanyUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyCompanyUser relation
 * @method     ChildSpyShoppingListCompanyUserQuery rightJoinSpyCompanyUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyCompanyUser relation
 * @method     ChildSpyShoppingListCompanyUserQuery innerJoinSpyCompanyUser($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyCompanyUser relation
 *
 * @method     ChildSpyShoppingListCompanyUserQuery joinWithSpyCompanyUser($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyCompanyUser relation
 *
 * @method     ChildSpyShoppingListCompanyUserQuery leftJoinWithSpyCompanyUser() Adds a LEFT JOIN clause and with to the query using the SpyCompanyUser relation
 * @method     ChildSpyShoppingListCompanyUserQuery rightJoinWithSpyCompanyUser() Adds a RIGHT JOIN clause and with to the query using the SpyCompanyUser relation
 * @method     ChildSpyShoppingListCompanyUserQuery innerJoinWithSpyCompanyUser() Adds a INNER JOIN clause and with to the query using the SpyCompanyUser relation
 *
 * @method     ChildSpyShoppingListCompanyUserQuery leftJoinSpyShoppingList($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyShoppingList relation
 * @method     ChildSpyShoppingListCompanyUserQuery rightJoinSpyShoppingList($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyShoppingList relation
 * @method     ChildSpyShoppingListCompanyUserQuery innerJoinSpyShoppingList($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyShoppingList relation
 *
 * @method     ChildSpyShoppingListCompanyUserQuery joinWithSpyShoppingList($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyShoppingList relation
 *
 * @method     ChildSpyShoppingListCompanyUserQuery leftJoinWithSpyShoppingList() Adds a LEFT JOIN clause and with to the query using the SpyShoppingList relation
 * @method     ChildSpyShoppingListCompanyUserQuery rightJoinWithSpyShoppingList() Adds a RIGHT JOIN clause and with to the query using the SpyShoppingList relation
 * @method     ChildSpyShoppingListCompanyUserQuery innerJoinWithSpyShoppingList() Adds a INNER JOIN clause and with to the query using the SpyShoppingList relation
 *
 * @method     ChildSpyShoppingListCompanyUserQuery leftJoinSpyShoppingListPermissionGroup($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyShoppingListPermissionGroup relation
 * @method     ChildSpyShoppingListCompanyUserQuery rightJoinSpyShoppingListPermissionGroup($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyShoppingListPermissionGroup relation
 * @method     ChildSpyShoppingListCompanyUserQuery innerJoinSpyShoppingListPermissionGroup($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyShoppingListPermissionGroup relation
 *
 * @method     ChildSpyShoppingListCompanyUserQuery joinWithSpyShoppingListPermissionGroup($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyShoppingListPermissionGroup relation
 *
 * @method     ChildSpyShoppingListCompanyUserQuery leftJoinWithSpyShoppingListPermissionGroup() Adds a LEFT JOIN clause and with to the query using the SpyShoppingListPermissionGroup relation
 * @method     ChildSpyShoppingListCompanyUserQuery rightJoinWithSpyShoppingListPermissionGroup() Adds a RIGHT JOIN clause and with to the query using the SpyShoppingListPermissionGroup relation
 * @method     ChildSpyShoppingListCompanyUserQuery innerJoinWithSpyShoppingListPermissionGroup() Adds a INNER JOIN clause and with to the query using the SpyShoppingListPermissionGroup relation
 *
 * @method     \Orm\Zed\CompanyUser\Persistence\SpyCompanyUserQuery|\Orm\Zed\ShoppingList\Persistence\SpyShoppingListQuery|\Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyShoppingListCompanyUser|null findOne(ConnectionInterface $con = null) Return the first ChildSpyShoppingListCompanyUser matching the query
 * @method     ChildSpyShoppingListCompanyUser findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyShoppingListCompanyUser matching the query, or a new ChildSpyShoppingListCompanyUser object populated from the query conditions when no match is found
 *
 * @method     ChildSpyShoppingListCompanyUser|null findOneByIdShoppingListCompanyUser(int $id_shopping_list_company_user) Return the first ChildSpyShoppingListCompanyUser filtered by the id_shopping_list_company_user column
 * @method     ChildSpyShoppingListCompanyUser|null findOneByFkCompanyUser(int $fk_company_user) Return the first ChildSpyShoppingListCompanyUser filtered by the fk_company_user column
 * @method     ChildSpyShoppingListCompanyUser|null findOneByFkShoppingList(int $fk_shopping_list) Return the first ChildSpyShoppingListCompanyUser filtered by the fk_shopping_list column
 * @method     ChildSpyShoppingListCompanyUser|null findOneByFkShoppingListPermissionGroup(int $fk_shopping_list_permission_group) Return the first ChildSpyShoppingListCompanyUser filtered by the fk_shopping_list_permission_group column *

 * @method     ChildSpyShoppingListCompanyUser requirePk($key, ConnectionInterface $con = null) Return the ChildSpyShoppingListCompanyUser by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyShoppingListCompanyUser requireOne(ConnectionInterface $con = null) Return the first ChildSpyShoppingListCompanyUser matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyShoppingListCompanyUser requireOneByIdShoppingListCompanyUser(int $id_shopping_list_company_user) Return the first ChildSpyShoppingListCompanyUser filtered by the id_shopping_list_company_user column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyShoppingListCompanyUser requireOneByFkCompanyUser(int $fk_company_user) Return the first ChildSpyShoppingListCompanyUser filtered by the fk_company_user column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyShoppingListCompanyUser requireOneByFkShoppingList(int $fk_shopping_list) Return the first ChildSpyShoppingListCompanyUser filtered by the fk_shopping_list column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyShoppingListCompanyUser requireOneByFkShoppingListPermissionGroup(int $fk_shopping_list_permission_group) Return the first ChildSpyShoppingListCompanyUser filtered by the fk_shopping_list_permission_group column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyShoppingListCompanyUser[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyShoppingListCompanyUser objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyShoppingListCompanyUser> find(ConnectionInterface $con = null) Return ChildSpyShoppingListCompanyUser objects based on current ModelCriteria
 * @method     ChildSpyShoppingListCompanyUser[]|ObjectCollection findByIdShoppingListCompanyUser(int $id_shopping_list_company_user) Return ChildSpyShoppingListCompanyUser objects filtered by the id_shopping_list_company_user column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyShoppingListCompanyUser> findByIdShoppingListCompanyUser(int $id_shopping_list_company_user) Return ChildSpyShoppingListCompanyUser objects filtered by the id_shopping_list_company_user column
 * @method     ChildSpyShoppingListCompanyUser[]|ObjectCollection findByFkCompanyUser(int $fk_company_user) Return ChildSpyShoppingListCompanyUser objects filtered by the fk_company_user column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyShoppingListCompanyUser> findByFkCompanyUser(int $fk_company_user) Return ChildSpyShoppingListCompanyUser objects filtered by the fk_company_user column
 * @method     ChildSpyShoppingListCompanyUser[]|ObjectCollection findByFkShoppingList(int $fk_shopping_list) Return ChildSpyShoppingListCompanyUser objects filtered by the fk_shopping_list column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyShoppingListCompanyUser> findByFkShoppingList(int $fk_shopping_list) Return ChildSpyShoppingListCompanyUser objects filtered by the fk_shopping_list column
 * @method     ChildSpyShoppingListCompanyUser[]|ObjectCollection findByFkShoppingListPermissionGroup(int $fk_shopping_list_permission_group) Return ChildSpyShoppingListCompanyUser objects filtered by the fk_shopping_list_permission_group column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyShoppingListCompanyUser> findByFkShoppingListPermissionGroup(int $fk_shopping_list_permission_group) Return ChildSpyShoppingListCompanyUser objects filtered by the fk_shopping_list_permission_group column
 * @method     ChildSpyShoppingListCompanyUser[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyShoppingListCompanyUser> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyShoppingListCompanyUserQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\ShoppingList\Persistence\Base\SpyShoppingListCompanyUserQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\ShoppingList\\Persistence\\SpyShoppingListCompanyUser', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyShoppingListCompanyUserQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyShoppingListCompanyUserQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyShoppingListCompanyUserQuery) {
            return $criteria;
        }
        $query = new ChildSpyShoppingListCompanyUserQuery();
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
     * @return ChildSpyShoppingListCompanyUser|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyShoppingListCompanyUserTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyShoppingListCompanyUser A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_shopping_list_company_user, fk_company_user, fk_shopping_list, fk_shopping_list_permission_group FROM spy_shopping_list_company_user WHERE id_shopping_list_company_user = :p0';
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
            /** @var ChildSpyShoppingListCompanyUser $obj */
            $obj = new ChildSpyShoppingListCompanyUser();
            $obj->hydrate($row);
            SpyShoppingListCompanyUserTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyShoppingListCompanyUser|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyShoppingListCompanyUserQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyShoppingListCompanyUserTableMap::COL_ID_SHOPPING_LIST_COMPANY_USER, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyShoppingListCompanyUserQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyShoppingListCompanyUserTableMap::COL_ID_SHOPPING_LIST_COMPANY_USER, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idShoppingListCompanyUser Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdShoppingListCompanyUser_Between(array $idShoppingListCompanyUser)
    {
        return $this->filterByIdShoppingListCompanyUser($idShoppingListCompanyUser, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idShoppingListCompanyUsers Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdShoppingListCompanyUser_In(array $idShoppingListCompanyUsers)
    {
        return $this->filterByIdShoppingListCompanyUser($idShoppingListCompanyUsers, Criteria::IN);
    }

    /**
     * Filter the query on the id_shopping_list_company_user column
     *
     * Example usage:
     * <code>
     * $query->filterByIdShoppingListCompanyUser(1234); // WHERE id_shopping_list_company_user = 1234
     * $query->filterByIdShoppingListCompanyUser(array(12, 34), Criteria::IN); // WHERE id_shopping_list_company_user IN (12, 34)
     * $query->filterByIdShoppingListCompanyUser(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_shopping_list_company_user > 12
     * </code>
     *
     * @param     mixed $idShoppingListCompanyUser The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdShoppingListCompanyUser($idShoppingListCompanyUser = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idShoppingListCompanyUser)) {
            $useMinMax = false;
            if (isset($idShoppingListCompanyUser['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyShoppingListCompanyUserTableMap::COL_ID_SHOPPING_LIST_COMPANY_USER, $idShoppingListCompanyUser['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idShoppingListCompanyUser['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyShoppingListCompanyUserTableMap::COL_ID_SHOPPING_LIST_COMPANY_USER, $idShoppingListCompanyUser['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idShoppingListCompanyUser of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyShoppingListCompanyUserTableMap::COL_ID_SHOPPING_LIST_COMPANY_USER, $idShoppingListCompanyUser, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkCompanyUser Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkCompanyUser_Between(array $fkCompanyUser)
    {
        return $this->filterByFkCompanyUser($fkCompanyUser, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkCompanyUsers Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkCompanyUser_In(array $fkCompanyUsers)
    {
        return $this->filterByFkCompanyUser($fkCompanyUsers, Criteria::IN);
    }

    /**
     * Filter the query on the fk_company_user column
     *
     * Example usage:
     * <code>
     * $query->filterByFkCompanyUser(1234); // WHERE fk_company_user = 1234
     * $query->filterByFkCompanyUser(array(12, 34), Criteria::IN); // WHERE fk_company_user IN (12, 34)
     * $query->filterByFkCompanyUser(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_company_user > 12
     * </code>
     *
     * @see       filterBySpyCompanyUser()
     *
     * @param     mixed $fkCompanyUser The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkCompanyUser($fkCompanyUser = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkCompanyUser)) {
            $useMinMax = false;
            if (isset($fkCompanyUser['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyShoppingListCompanyUserTableMap::COL_FK_COMPANY_USER, $fkCompanyUser['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkCompanyUser['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyShoppingListCompanyUserTableMap::COL_FK_COMPANY_USER, $fkCompanyUser['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkCompanyUser of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyShoppingListCompanyUserTableMap::COL_FK_COMPANY_USER, $fkCompanyUser, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkShoppingList Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkShoppingList_Between(array $fkShoppingList)
    {
        return $this->filterByFkShoppingList($fkShoppingList, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkShoppingLists Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkShoppingList_In(array $fkShoppingLists)
    {
        return $this->filterByFkShoppingList($fkShoppingLists, Criteria::IN);
    }

    /**
     * Filter the query on the fk_shopping_list column
     *
     * Example usage:
     * <code>
     * $query->filterByFkShoppingList(1234); // WHERE fk_shopping_list = 1234
     * $query->filterByFkShoppingList(array(12, 34), Criteria::IN); // WHERE fk_shopping_list IN (12, 34)
     * $query->filterByFkShoppingList(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_shopping_list > 12
     * </code>
     *
     * @see       filterBySpyShoppingList()
     *
     * @param     mixed $fkShoppingList The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkShoppingList($fkShoppingList = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkShoppingList)) {
            $useMinMax = false;
            if (isset($fkShoppingList['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyShoppingListCompanyUserTableMap::COL_FK_SHOPPING_LIST, $fkShoppingList['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkShoppingList['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyShoppingListCompanyUserTableMap::COL_FK_SHOPPING_LIST, $fkShoppingList['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkShoppingList of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyShoppingListCompanyUserTableMap::COL_FK_SHOPPING_LIST, $fkShoppingList, $comparison);

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
                $this->addUsingAlias(SpyShoppingListCompanyUserTableMap::COL_FK_SHOPPING_LIST_PERMISSION_GROUP, $fkShoppingListPermissionGroup['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkShoppingListPermissionGroup['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyShoppingListCompanyUserTableMap::COL_FK_SHOPPING_LIST_PERMISSION_GROUP, $fkShoppingListPermissionGroup['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkShoppingListPermissionGroup of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyShoppingListCompanyUserTableMap::COL_FK_SHOPPING_LIST_PERMISSION_GROUP, $fkShoppingListPermissionGroup, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\CompanyUser\Persistence\SpyCompanyUser object
     *
     * @param \Orm\Zed\CompanyUser\Persistence\SpyCompanyUser|ObjectCollection $spyCompanyUser The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyShoppingListCompanyUserQuery The current query, for fluid interface
     */
    public function filterBySpyCompanyUser($spyCompanyUser, $comparison = null)
    {
        if ($spyCompanyUser instanceof \Orm\Zed\CompanyUser\Persistence\SpyCompanyUser) {
            return $this
                ->addUsingAlias(SpyShoppingListCompanyUserTableMap::COL_FK_COMPANY_USER, $spyCompanyUser->getIdCompanyUser(), $comparison);
        } elseif ($spyCompanyUser instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyShoppingListCompanyUserTableMap::COL_FK_COMPANY_USER, $spyCompanyUser->toKeyValue('PrimaryKey', 'IdCompanyUser'), $comparison);
        } else {
            throw new PropelException('filterBySpyCompanyUser() only accepts arguments of type \Orm\Zed\CompanyUser\Persistence\SpyCompanyUser or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyCompanyUser relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyShoppingListCompanyUserQuery The current query, for fluid interface
     */
    public function joinSpyCompanyUser($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyCompanyUser');

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
            $this->addJoinObject($join, 'SpyCompanyUser');
        }

        return $this;
    }

    /**
     * Use the SpyCompanyUser relation SpyCompanyUser object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\CompanyUser\Persistence\SpyCompanyUserQuery A secondary query class using the current class as primary query
     */
    public function useSpyCompanyUserQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyCompanyUser($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyCompanyUser', '\Orm\Zed\CompanyUser\Persistence\SpyCompanyUserQuery');
    }

    /**
     * Use the SpyCompanyUser relation SpyCompanyUser object
     *
     * @param callable(\Orm\Zed\CompanyUser\Persistence\SpyCompanyUserQuery):\Orm\Zed\CompanyUser\Persistence\SpyCompanyUserQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyCompanyUserQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyCompanyUserQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyCompanyUser table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\CompanyUser\Persistence\SpyCompanyUserQuery The inner query object of the EXISTS statement
     */
    public function useSpyCompanyUserExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyCompanyUser', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyCompanyUser table for a NOT EXISTS query.
     *
     * @see useSpyCompanyUserExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\CompanyUser\Persistence\SpyCompanyUserQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyCompanyUserNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyCompanyUser', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\ShoppingList\Persistence\SpyShoppingList object
     *
     * @param \Orm\Zed\ShoppingList\Persistence\SpyShoppingList|ObjectCollection $spyShoppingList The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyShoppingListCompanyUserQuery The current query, for fluid interface
     */
    public function filterBySpyShoppingList($spyShoppingList, $comparison = null)
    {
        if ($spyShoppingList instanceof \Orm\Zed\ShoppingList\Persistence\SpyShoppingList) {
            return $this
                ->addUsingAlias(SpyShoppingListCompanyUserTableMap::COL_FK_SHOPPING_LIST, $spyShoppingList->getIdShoppingList(), $comparison);
        } elseif ($spyShoppingList instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyShoppingListCompanyUserTableMap::COL_FK_SHOPPING_LIST, $spyShoppingList->toKeyValue('PrimaryKey', 'IdShoppingList'), $comparison);
        } else {
            throw new PropelException('filterBySpyShoppingList() only accepts arguments of type \Orm\Zed\ShoppingList\Persistence\SpyShoppingList or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyShoppingList relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyShoppingListCompanyUserQuery The current query, for fluid interface
     */
    public function joinSpyShoppingList($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyShoppingList');

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
            $this->addJoinObject($join, 'SpyShoppingList');
        }

        return $this;
    }

    /**
     * Use the SpyShoppingList relation SpyShoppingList object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\ShoppingList\Persistence\SpyShoppingListQuery A secondary query class using the current class as primary query
     */
    public function useSpyShoppingListQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinSpyShoppingList($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyShoppingList', '\Orm\Zed\ShoppingList\Persistence\SpyShoppingListQuery');
    }

    /**
     * Use the SpyShoppingList relation SpyShoppingList object
     *
     * @param callable(\Orm\Zed\ShoppingList\Persistence\SpyShoppingListQuery):\Orm\Zed\ShoppingList\Persistence\SpyShoppingListQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyShoppingListQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useSpyShoppingListQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyShoppingList table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\ShoppingList\Persistence\SpyShoppingListQuery The inner query object of the EXISTS statement
     */
    public function useSpyShoppingListExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyShoppingList', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyShoppingList table for a NOT EXISTS query.
     *
     * @see useSpyShoppingListExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\ShoppingList\Persistence\SpyShoppingListQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyShoppingListNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyShoppingList', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroup object
     *
     * @param \Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroup|ObjectCollection $spyShoppingListPermissionGroup The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyShoppingListCompanyUserQuery The current query, for fluid interface
     */
    public function filterBySpyShoppingListPermissionGroup($spyShoppingListPermissionGroup, $comparison = null)
    {
        if ($spyShoppingListPermissionGroup instanceof \Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroup) {
            return $this
                ->addUsingAlias(SpyShoppingListCompanyUserTableMap::COL_FK_SHOPPING_LIST_PERMISSION_GROUP, $spyShoppingListPermissionGroup->getIdShoppingListPermissionGroup(), $comparison);
        } elseif ($spyShoppingListPermissionGroup instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyShoppingListCompanyUserTableMap::COL_FK_SHOPPING_LIST_PERMISSION_GROUP, $spyShoppingListPermissionGroup->toKeyValue('PrimaryKey', 'IdShoppingListPermissionGroup'), $comparison);
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
     * @return $this|ChildSpyShoppingListCompanyUserQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   ChildSpyShoppingListCompanyUser $spyShoppingListCompanyUser Object to remove from the list of results
     *
     * @return $this|ChildSpyShoppingListCompanyUserQuery The current query, for fluid interface
     */
    public function prune($spyShoppingListCompanyUser = null)
    {
        if ($spyShoppingListCompanyUser) {
            $this->addUsingAlias(SpyShoppingListCompanyUserTableMap::COL_ID_SHOPPING_LIST_COMPANY_USER, $spyShoppingListCompanyUser->getIdShoppingListCompanyUser(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_shopping_list_company_user table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyShoppingListCompanyUserTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyShoppingListCompanyUserTableMap::clearInstancePool();
            SpyShoppingListCompanyUserTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyShoppingListCompanyUserTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyShoppingListCompanyUserTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyShoppingListCompanyUserTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyShoppingListCompanyUserTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SpyShoppingListCompanyUserQuery
