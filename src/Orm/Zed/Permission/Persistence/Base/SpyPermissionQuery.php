<?php

namespace Orm\Zed\Permission\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\CompanyRole\Persistence\SpyCompanyRoleToPermission;
use Orm\Zed\Permission\Persistence\SpyPermission as ChildSpyPermission;
use Orm\Zed\Permission\Persistence\SpyPermissionQuery as ChildSpyPermissionQuery;
use Orm\Zed\Permission\Persistence\Map\SpyPermissionTableMap;
use Orm\Zed\SharedCart\Persistence\SpyQuotePermissionGroupToPermission;
use Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupToPermission;
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
 * Base class that represents a query for the 'spy_permission' table.
 *
 *
 *
 * @method     ChildSpyPermissionQuery orderByIdPermission($order = Criteria::ASC) Order by the id_permission column
 * @method     ChildSpyPermissionQuery orderByKey($order = Criteria::ASC) Order by the key column
 * @method     ChildSpyPermissionQuery orderByConfigurationSignature($order = Criteria::ASC) Order by the configuration_signature column
 *
 * @method     ChildSpyPermissionQuery groupByIdPermission() Group by the id_permission column
 * @method     ChildSpyPermissionQuery groupByKey() Group by the key column
 * @method     ChildSpyPermissionQuery groupByConfigurationSignature() Group by the configuration_signature column
 *
 * @method     ChildSpyPermissionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyPermissionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyPermissionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyPermissionQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyPermissionQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyPermissionQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyPermissionQuery leftJoinSpyCompanyRoleToPermission($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyCompanyRoleToPermission relation
 * @method     ChildSpyPermissionQuery rightJoinSpyCompanyRoleToPermission($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyCompanyRoleToPermission relation
 * @method     ChildSpyPermissionQuery innerJoinSpyCompanyRoleToPermission($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyCompanyRoleToPermission relation
 *
 * @method     ChildSpyPermissionQuery joinWithSpyCompanyRoleToPermission($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyCompanyRoleToPermission relation
 *
 * @method     ChildSpyPermissionQuery leftJoinWithSpyCompanyRoleToPermission() Adds a LEFT JOIN clause and with to the query using the SpyCompanyRoleToPermission relation
 * @method     ChildSpyPermissionQuery rightJoinWithSpyCompanyRoleToPermission() Adds a RIGHT JOIN clause and with to the query using the SpyCompanyRoleToPermission relation
 * @method     ChildSpyPermissionQuery innerJoinWithSpyCompanyRoleToPermission() Adds a INNER JOIN clause and with to the query using the SpyCompanyRoleToPermission relation
 *
 * @method     ChildSpyPermissionQuery leftJoinSpyQuotePermissionGroupToPermission($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyQuotePermissionGroupToPermission relation
 * @method     ChildSpyPermissionQuery rightJoinSpyQuotePermissionGroupToPermission($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyQuotePermissionGroupToPermission relation
 * @method     ChildSpyPermissionQuery innerJoinSpyQuotePermissionGroupToPermission($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyQuotePermissionGroupToPermission relation
 *
 * @method     ChildSpyPermissionQuery joinWithSpyQuotePermissionGroupToPermission($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyQuotePermissionGroupToPermission relation
 *
 * @method     ChildSpyPermissionQuery leftJoinWithSpyQuotePermissionGroupToPermission() Adds a LEFT JOIN clause and with to the query using the SpyQuotePermissionGroupToPermission relation
 * @method     ChildSpyPermissionQuery rightJoinWithSpyQuotePermissionGroupToPermission() Adds a RIGHT JOIN clause and with to the query using the SpyQuotePermissionGroupToPermission relation
 * @method     ChildSpyPermissionQuery innerJoinWithSpyQuotePermissionGroupToPermission() Adds a INNER JOIN clause and with to the query using the SpyQuotePermissionGroupToPermission relation
 *
 * @method     ChildSpyPermissionQuery leftJoinSpyShoppingListPermissionGroupToPermission($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyShoppingListPermissionGroupToPermission relation
 * @method     ChildSpyPermissionQuery rightJoinSpyShoppingListPermissionGroupToPermission($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyShoppingListPermissionGroupToPermission relation
 * @method     ChildSpyPermissionQuery innerJoinSpyShoppingListPermissionGroupToPermission($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyShoppingListPermissionGroupToPermission relation
 *
 * @method     ChildSpyPermissionQuery joinWithSpyShoppingListPermissionGroupToPermission($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyShoppingListPermissionGroupToPermission relation
 *
 * @method     ChildSpyPermissionQuery leftJoinWithSpyShoppingListPermissionGroupToPermission() Adds a LEFT JOIN clause and with to the query using the SpyShoppingListPermissionGroupToPermission relation
 * @method     ChildSpyPermissionQuery rightJoinWithSpyShoppingListPermissionGroupToPermission() Adds a RIGHT JOIN clause and with to the query using the SpyShoppingListPermissionGroupToPermission relation
 * @method     ChildSpyPermissionQuery innerJoinWithSpyShoppingListPermissionGroupToPermission() Adds a INNER JOIN clause and with to the query using the SpyShoppingListPermissionGroupToPermission relation
 *
 * @method     \Orm\Zed\CompanyRole\Persistence\SpyCompanyRoleToPermissionQuery|\Orm\Zed\SharedCart\Persistence\SpyQuotePermissionGroupToPermissionQuery|\Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupToPermissionQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyPermission|null findOne(ConnectionInterface $con = null) Return the first ChildSpyPermission matching the query
 * @method     ChildSpyPermission findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyPermission matching the query, or a new ChildSpyPermission object populated from the query conditions when no match is found
 *
 * @method     ChildSpyPermission|null findOneByIdPermission(int $id_permission) Return the first ChildSpyPermission filtered by the id_permission column
 * @method     ChildSpyPermission|null findOneByKey(string $key) Return the first ChildSpyPermission filtered by the key column
 * @method     ChildSpyPermission|null findOneByConfigurationSignature(string $configuration_signature) Return the first ChildSpyPermission filtered by the configuration_signature column *

 * @method     ChildSpyPermission requirePk($key, ConnectionInterface $con = null) Return the ChildSpyPermission by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyPermission requireOne(ConnectionInterface $con = null) Return the first ChildSpyPermission matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyPermission requireOneByIdPermission(int $id_permission) Return the first ChildSpyPermission filtered by the id_permission column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyPermission requireOneByKey(string $key) Return the first ChildSpyPermission filtered by the key column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyPermission requireOneByConfigurationSignature(string $configuration_signature) Return the first ChildSpyPermission filtered by the configuration_signature column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyPermission[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyPermission objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyPermission> find(ConnectionInterface $con = null) Return ChildSpyPermission objects based on current ModelCriteria
 * @method     ChildSpyPermission[]|ObjectCollection findByIdPermission(int $id_permission) Return ChildSpyPermission objects filtered by the id_permission column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyPermission> findByIdPermission(int $id_permission) Return ChildSpyPermission objects filtered by the id_permission column
 * @method     ChildSpyPermission[]|ObjectCollection findByKey(string $key) Return ChildSpyPermission objects filtered by the key column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyPermission> findByKey(string $key) Return ChildSpyPermission objects filtered by the key column
 * @method     ChildSpyPermission[]|ObjectCollection findByConfigurationSignature(string $configuration_signature) Return ChildSpyPermission objects filtered by the configuration_signature column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyPermission> findByConfigurationSignature(string $configuration_signature) Return ChildSpyPermission objects filtered by the configuration_signature column
 * @method     ChildSpyPermission[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyPermission> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyPermissionQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\Permission\Persistence\Base\SpyPermissionQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\Permission\\Persistence\\SpyPermission', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyPermissionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyPermissionQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyPermissionQuery) {
            return $criteria;
        }
        $query = new ChildSpyPermissionQuery();
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
     * @return ChildSpyPermission|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyPermissionTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyPermission A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT `id_permission`, `key`, `configuration_signature` FROM `spy_permission` WHERE `id_permission` = :p0';
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
            /** @var ChildSpyPermission $obj */
            $obj = new ChildSpyPermission();
            $obj->hydrate($row);
            SpyPermissionTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyPermission|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyPermissionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyPermissionTableMap::COL_ID_PERMISSION, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyPermissionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyPermissionTableMap::COL_ID_PERMISSION, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idPermission Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdPermission_Between(array $idPermission)
    {
        return $this->filterByIdPermission($idPermission, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idPermissions Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdPermission_In(array $idPermissions)
    {
        return $this->filterByIdPermission($idPermissions, Criteria::IN);
    }

    /**
     * Filter the query on the id_permission column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPermission(1234); // WHERE id_permission = 1234
     * $query->filterByIdPermission(array(12, 34), Criteria::IN); // WHERE id_permission IN (12, 34)
     * $query->filterByIdPermission(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_permission > 12
     * </code>
     *
     * @param     mixed $idPermission The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdPermission($idPermission = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idPermission)) {
            $useMinMax = false;
            if (isset($idPermission['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyPermissionTableMap::COL_ID_PERMISSION, $idPermission['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPermission['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyPermissionTableMap::COL_ID_PERMISSION, $idPermission['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idPermission of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyPermissionTableMap::COL_ID_PERMISSION, $idPermission, $comparison);

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

        $query = $this->addUsingAlias(SpyPermissionTableMap::COL_KEY, $key, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $configurationSignatures Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByConfigurationSignature_In(array $configurationSignatures)
    {
        return $this->filterByConfigurationSignature($configurationSignatures, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $configurationSignature Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByConfigurationSignature_Like($configurationSignature)
    {
        return $this->filterByConfigurationSignature($configurationSignature, Criteria::LIKE);
    }

    /**
     * Filter the query on the configuration_signature column
     *
     * Example usage:
     * <code>
     * $query->filterByConfigurationSignature('fooValue');   // WHERE configuration_signature = 'fooValue'
     * $query->filterByConfigurationSignature('%fooValue%', Criteria::LIKE); // WHERE configuration_signature LIKE '%fooValue%'
     * $query->filterByConfigurationSignature([1, 'foo'], Criteria::IN); // WHERE configuration_signature IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $configurationSignature The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByConfigurationSignature($configurationSignature = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $configurationSignature = str_replace('*', '%', $configurationSignature);
        }

        if (is_array($configurationSignature) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$configurationSignature of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyPermissionTableMap::COL_CONFIGURATION_SIGNATURE, $configurationSignature, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\CompanyRole\Persistence\SpyCompanyRoleToPermission object
     *
     * @param \Orm\Zed\CompanyRole\Persistence\SpyCompanyRoleToPermission|ObjectCollection $spyCompanyRoleToPermission the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyPermissionQuery The current query, for fluid interface
     */
    public function filterBySpyCompanyRoleToPermission($spyCompanyRoleToPermission, $comparison = null)
    {
        if ($spyCompanyRoleToPermission instanceof \Orm\Zed\CompanyRole\Persistence\SpyCompanyRoleToPermission) {
            return $this
                ->addUsingAlias(SpyPermissionTableMap::COL_ID_PERMISSION, $spyCompanyRoleToPermission->getFkPermission(), $comparison);
        } elseif ($spyCompanyRoleToPermission instanceof ObjectCollection) {
            return $this
                ->useSpyCompanyRoleToPermissionQuery()
                ->filterByPrimaryKeys($spyCompanyRoleToPermission->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyCompanyRoleToPermission() only accepts arguments of type \Orm\Zed\CompanyRole\Persistence\SpyCompanyRoleToPermission or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyCompanyRoleToPermission relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyPermissionQuery The current query, for fluid interface
     */
    public function joinSpyCompanyRoleToPermission($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyCompanyRoleToPermission');

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
            $this->addJoinObject($join, 'SpyCompanyRoleToPermission');
        }

        return $this;
    }

    /**
     * Use the SpyCompanyRoleToPermission relation SpyCompanyRoleToPermission object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\CompanyRole\Persistence\SpyCompanyRoleToPermissionQuery A secondary query class using the current class as primary query
     */
    public function useSpyCompanyRoleToPermissionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyCompanyRoleToPermission($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyCompanyRoleToPermission', '\Orm\Zed\CompanyRole\Persistence\SpyCompanyRoleToPermissionQuery');
    }

    /**
     * Use the SpyCompanyRoleToPermission relation SpyCompanyRoleToPermission object
     *
     * @param callable(\Orm\Zed\CompanyRole\Persistence\SpyCompanyRoleToPermissionQuery):\Orm\Zed\CompanyRole\Persistence\SpyCompanyRoleToPermissionQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyCompanyRoleToPermissionQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyCompanyRoleToPermissionQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyCompanyRoleToPermission table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\CompanyRole\Persistence\SpyCompanyRoleToPermissionQuery The inner query object of the EXISTS statement
     */
    public function useSpyCompanyRoleToPermissionExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyCompanyRoleToPermission', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyCompanyRoleToPermission table for a NOT EXISTS query.
     *
     * @see useSpyCompanyRoleToPermissionExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\CompanyRole\Persistence\SpyCompanyRoleToPermissionQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyCompanyRoleToPermissionNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyCompanyRoleToPermission', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\SharedCart\Persistence\SpyQuotePermissionGroupToPermission object
     *
     * @param \Orm\Zed\SharedCart\Persistence\SpyQuotePermissionGroupToPermission|ObjectCollection $spyQuotePermissionGroupToPermission the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyPermissionQuery The current query, for fluid interface
     */
    public function filterBySpyQuotePermissionGroupToPermission($spyQuotePermissionGroupToPermission, $comparison = null)
    {
        if ($spyQuotePermissionGroupToPermission instanceof \Orm\Zed\SharedCart\Persistence\SpyQuotePermissionGroupToPermission) {
            return $this
                ->addUsingAlias(SpyPermissionTableMap::COL_ID_PERMISSION, $spyQuotePermissionGroupToPermission->getFkPermission(), $comparison);
        } elseif ($spyQuotePermissionGroupToPermission instanceof ObjectCollection) {
            return $this
                ->useSpyQuotePermissionGroupToPermissionQuery()
                ->filterByPrimaryKeys($spyQuotePermissionGroupToPermission->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyQuotePermissionGroupToPermission() only accepts arguments of type \Orm\Zed\SharedCart\Persistence\SpyQuotePermissionGroupToPermission or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyQuotePermissionGroupToPermission relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyPermissionQuery The current query, for fluid interface
     */
    public function joinSpyQuotePermissionGroupToPermission($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyQuotePermissionGroupToPermission');

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
            $this->addJoinObject($join, 'SpyQuotePermissionGroupToPermission');
        }

        return $this;
    }

    /**
     * Use the SpyQuotePermissionGroupToPermission relation SpyQuotePermissionGroupToPermission object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\SharedCart\Persistence\SpyQuotePermissionGroupToPermissionQuery A secondary query class using the current class as primary query
     */
    public function useSpyQuotePermissionGroupToPermissionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyQuotePermissionGroupToPermission($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyQuotePermissionGroupToPermission', '\Orm\Zed\SharedCart\Persistence\SpyQuotePermissionGroupToPermissionQuery');
    }

    /**
     * Use the SpyQuotePermissionGroupToPermission relation SpyQuotePermissionGroupToPermission object
     *
     * @param callable(\Orm\Zed\SharedCart\Persistence\SpyQuotePermissionGroupToPermissionQuery):\Orm\Zed\SharedCart\Persistence\SpyQuotePermissionGroupToPermissionQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyQuotePermissionGroupToPermissionQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyQuotePermissionGroupToPermissionQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyQuotePermissionGroupToPermission table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\SharedCart\Persistence\SpyQuotePermissionGroupToPermissionQuery The inner query object of the EXISTS statement
     */
    public function useSpyQuotePermissionGroupToPermissionExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyQuotePermissionGroupToPermission', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyQuotePermissionGroupToPermission table for a NOT EXISTS query.
     *
     * @see useSpyQuotePermissionGroupToPermissionExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\SharedCart\Persistence\SpyQuotePermissionGroupToPermissionQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyQuotePermissionGroupToPermissionNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyQuotePermissionGroupToPermission', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupToPermission object
     *
     * @param \Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupToPermission|ObjectCollection $spyShoppingListPermissionGroupToPermission the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyPermissionQuery The current query, for fluid interface
     */
    public function filterBySpyShoppingListPermissionGroupToPermission($spyShoppingListPermissionGroupToPermission, $comparison = null)
    {
        if ($spyShoppingListPermissionGroupToPermission instanceof \Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupToPermission) {
            return $this
                ->addUsingAlias(SpyPermissionTableMap::COL_ID_PERMISSION, $spyShoppingListPermissionGroupToPermission->getFkPermission(), $comparison);
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
     * @return $this|ChildSpyPermissionQuery The current query, for fluid interface
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
     * Filter the query by a related SpyCompanyRole object
     * using the spy_company_role_to_permission table as cross reference
     *
     * @param SpyCompanyRole $spyCompanyRole the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyPermissionQuery The current query, for fluid interface
     */
    public function filterByCompanyRole($spyCompanyRole, $comparison = Criteria::EQUAL)
    {
        return $this
            ->useSpyCompanyRoleToPermissionQuery()
            ->filterByCompanyRole($spyCompanyRole, $comparison)
            ->endUse();
    }

    /**
     * Exclude object from result
     *
     * @param   ChildSpyPermission $spyPermission Object to remove from the list of results
     *
     * @return $this|ChildSpyPermissionQuery The current query, for fluid interface
     */
    public function prune($spyPermission = null)
    {
        if ($spyPermission) {
            $this->addUsingAlias(SpyPermissionTableMap::COL_ID_PERMISSION, $spyPermission->getIdPermission(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_permission table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyPermissionTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyPermissionTableMap::clearInstancePool();
            SpyPermissionTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyPermissionTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyPermissionTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyPermissionTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyPermissionTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SpyPermissionQuery
