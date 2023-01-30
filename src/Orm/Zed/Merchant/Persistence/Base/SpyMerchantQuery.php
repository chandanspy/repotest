<?php

namespace Orm\Zed\Merchant\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationship;
use Orm\Zed\Merchant\Persistence\SpyMerchant as ChildSpyMerchant;
use Orm\Zed\Merchant\Persistence\SpyMerchantQuery as ChildSpyMerchantQuery;
use Orm\Zed\Merchant\Persistence\Map\SpyMerchantTableMap;
use Orm\Zed\Url\Persistence\SpyUrl;
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
 * Base class that represents a query for the 'spy_merchant' table.
 *
 *
 *
 * @method     ChildSpyMerchantQuery orderByIdMerchant($order = Criteria::ASC) Order by the id_merchant column
 * @method     ChildSpyMerchantQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     ChildSpyMerchantQuery orderByIsActive($order = Criteria::ASC) Order by the is_active column
 * @method     ChildSpyMerchantQuery orderByMerchantReference($order = Criteria::ASC) Order by the merchant_reference column
 * @method     ChildSpyMerchantQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ChildSpyMerchantQuery orderByRegistrationNumber($order = Criteria::ASC) Order by the registration_number column
 * @method     ChildSpyMerchantQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildSpyMerchantQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildSpyMerchantQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ChildSpyMerchantQuery groupByIdMerchant() Group by the id_merchant column
 * @method     ChildSpyMerchantQuery groupByEmail() Group by the email column
 * @method     ChildSpyMerchantQuery groupByIsActive() Group by the is_active column
 * @method     ChildSpyMerchantQuery groupByMerchantReference() Group by the merchant_reference column
 * @method     ChildSpyMerchantQuery groupByName() Group by the name column
 * @method     ChildSpyMerchantQuery groupByRegistrationNumber() Group by the registration_number column
 * @method     ChildSpyMerchantQuery groupByStatus() Group by the status column
 * @method     ChildSpyMerchantQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildSpyMerchantQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ChildSpyMerchantQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyMerchantQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyMerchantQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyMerchantQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyMerchantQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyMerchantQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyMerchantQuery leftJoinSpyMerchantStore($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyMerchantStore relation
 * @method     ChildSpyMerchantQuery rightJoinSpyMerchantStore($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyMerchantStore relation
 * @method     ChildSpyMerchantQuery innerJoinSpyMerchantStore($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyMerchantStore relation
 *
 * @method     ChildSpyMerchantQuery joinWithSpyMerchantStore($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyMerchantStore relation
 *
 * @method     ChildSpyMerchantQuery leftJoinWithSpyMerchantStore() Adds a LEFT JOIN clause and with to the query using the SpyMerchantStore relation
 * @method     ChildSpyMerchantQuery rightJoinWithSpyMerchantStore() Adds a RIGHT JOIN clause and with to the query using the SpyMerchantStore relation
 * @method     ChildSpyMerchantQuery innerJoinWithSpyMerchantStore() Adds a INNER JOIN clause and with to the query using the SpyMerchantStore relation
 *
 * @method     ChildSpyMerchantQuery leftJoinSpyMerchantRelationship($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyMerchantRelationship relation
 * @method     ChildSpyMerchantQuery rightJoinSpyMerchantRelationship($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyMerchantRelationship relation
 * @method     ChildSpyMerchantQuery innerJoinSpyMerchantRelationship($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyMerchantRelationship relation
 *
 * @method     ChildSpyMerchantQuery joinWithSpyMerchantRelationship($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyMerchantRelationship relation
 *
 * @method     ChildSpyMerchantQuery leftJoinWithSpyMerchantRelationship() Adds a LEFT JOIN clause and with to the query using the SpyMerchantRelationship relation
 * @method     ChildSpyMerchantQuery rightJoinWithSpyMerchantRelationship() Adds a RIGHT JOIN clause and with to the query using the SpyMerchantRelationship relation
 * @method     ChildSpyMerchantQuery innerJoinWithSpyMerchantRelationship() Adds a INNER JOIN clause and with to the query using the SpyMerchantRelationship relation
 *
 * @method     ChildSpyMerchantQuery leftJoinSpyUrl($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyUrl relation
 * @method     ChildSpyMerchantQuery rightJoinSpyUrl($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyUrl relation
 * @method     ChildSpyMerchantQuery innerJoinSpyUrl($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyUrl relation
 *
 * @method     ChildSpyMerchantQuery joinWithSpyUrl($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyUrl relation
 *
 * @method     ChildSpyMerchantQuery leftJoinWithSpyUrl() Adds a LEFT JOIN clause and with to the query using the SpyUrl relation
 * @method     ChildSpyMerchantQuery rightJoinWithSpyUrl() Adds a RIGHT JOIN clause and with to the query using the SpyUrl relation
 * @method     ChildSpyMerchantQuery innerJoinWithSpyUrl() Adds a INNER JOIN clause and with to the query using the SpyUrl relation
 *
 * @method     \Orm\Zed\Merchant\Persistence\SpyMerchantStoreQuery|\Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationshipQuery|\Orm\Zed\Url\Persistence\SpyUrlQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyMerchant|null findOne(ConnectionInterface $con = null) Return the first ChildSpyMerchant matching the query
 * @method     ChildSpyMerchant findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyMerchant matching the query, or a new ChildSpyMerchant object populated from the query conditions when no match is found
 *
 * @method     ChildSpyMerchant|null findOneByIdMerchant(int $id_merchant) Return the first ChildSpyMerchant filtered by the id_merchant column
 * @method     ChildSpyMerchant|null findOneByEmail(string $email) Return the first ChildSpyMerchant filtered by the email column
 * @method     ChildSpyMerchant|null findOneByIsActive(boolean $is_active) Return the first ChildSpyMerchant filtered by the is_active column
 * @method     ChildSpyMerchant|null findOneByMerchantReference(string $merchant_reference) Return the first ChildSpyMerchant filtered by the merchant_reference column
 * @method     ChildSpyMerchant|null findOneByName(string $name) Return the first ChildSpyMerchant filtered by the name column
 * @method     ChildSpyMerchant|null findOneByRegistrationNumber(string $registration_number) Return the first ChildSpyMerchant filtered by the registration_number column
 * @method     ChildSpyMerchant|null findOneByStatus(string $status) Return the first ChildSpyMerchant filtered by the status column
 * @method     ChildSpyMerchant|null findOneByCreatedAt(string $created_at) Return the first ChildSpyMerchant filtered by the created_at column
 * @method     ChildSpyMerchant|null findOneByUpdatedAt(string $updated_at) Return the first ChildSpyMerchant filtered by the updated_at column *

 * @method     ChildSpyMerchant requirePk($key, ConnectionInterface $con = null) Return the ChildSpyMerchant by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyMerchant requireOne(ConnectionInterface $con = null) Return the first ChildSpyMerchant matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyMerchant requireOneByIdMerchant(int $id_merchant) Return the first ChildSpyMerchant filtered by the id_merchant column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyMerchant requireOneByEmail(string $email) Return the first ChildSpyMerchant filtered by the email column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyMerchant requireOneByIsActive(boolean $is_active) Return the first ChildSpyMerchant filtered by the is_active column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyMerchant requireOneByMerchantReference(string $merchant_reference) Return the first ChildSpyMerchant filtered by the merchant_reference column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyMerchant requireOneByName(string $name) Return the first ChildSpyMerchant filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyMerchant requireOneByRegistrationNumber(string $registration_number) Return the first ChildSpyMerchant filtered by the registration_number column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyMerchant requireOneByStatus(string $status) Return the first ChildSpyMerchant filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyMerchant requireOneByCreatedAt(string $created_at) Return the first ChildSpyMerchant filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyMerchant requireOneByUpdatedAt(string $updated_at) Return the first ChildSpyMerchant filtered by the updated_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyMerchant[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyMerchant objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyMerchant> find(ConnectionInterface $con = null) Return ChildSpyMerchant objects based on current ModelCriteria
 * @method     ChildSpyMerchant[]|ObjectCollection findByIdMerchant(int $id_merchant) Return ChildSpyMerchant objects filtered by the id_merchant column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyMerchant> findByIdMerchant(int $id_merchant) Return ChildSpyMerchant objects filtered by the id_merchant column
 * @method     ChildSpyMerchant[]|ObjectCollection findByEmail(string $email) Return ChildSpyMerchant objects filtered by the email column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyMerchant> findByEmail(string $email) Return ChildSpyMerchant objects filtered by the email column
 * @method     ChildSpyMerchant[]|ObjectCollection findByIsActive(boolean $is_active) Return ChildSpyMerchant objects filtered by the is_active column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyMerchant> findByIsActive(boolean $is_active) Return ChildSpyMerchant objects filtered by the is_active column
 * @method     ChildSpyMerchant[]|ObjectCollection findByMerchantReference(string $merchant_reference) Return ChildSpyMerchant objects filtered by the merchant_reference column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyMerchant> findByMerchantReference(string $merchant_reference) Return ChildSpyMerchant objects filtered by the merchant_reference column
 * @method     ChildSpyMerchant[]|ObjectCollection findByName(string $name) Return ChildSpyMerchant objects filtered by the name column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyMerchant> findByName(string $name) Return ChildSpyMerchant objects filtered by the name column
 * @method     ChildSpyMerchant[]|ObjectCollection findByRegistrationNumber(string $registration_number) Return ChildSpyMerchant objects filtered by the registration_number column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyMerchant> findByRegistrationNumber(string $registration_number) Return ChildSpyMerchant objects filtered by the registration_number column
 * @method     ChildSpyMerchant[]|ObjectCollection findByStatus(string $status) Return ChildSpyMerchant objects filtered by the status column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyMerchant> findByStatus(string $status) Return ChildSpyMerchant objects filtered by the status column
 * @method     ChildSpyMerchant[]|ObjectCollection findByCreatedAt(string $created_at) Return ChildSpyMerchant objects filtered by the created_at column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyMerchant> findByCreatedAt(string $created_at) Return ChildSpyMerchant objects filtered by the created_at column
 * @method     ChildSpyMerchant[]|ObjectCollection findByUpdatedAt(string $updated_at) Return ChildSpyMerchant objects filtered by the updated_at column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyMerchant> findByUpdatedAt(string $updated_at) Return ChildSpyMerchant objects filtered by the updated_at column
 * @method     ChildSpyMerchant[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyMerchant> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyMerchantQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\Merchant\Persistence\Base\SpyMerchantQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\Merchant\\Persistence\\SpyMerchant', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyMerchantQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyMerchantQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyMerchantQuery) {
            return $criteria;
        }
        $query = new ChildSpyMerchantQuery();
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
     * @return ChildSpyMerchant|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyMerchantTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyMerchant A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT `id_merchant`, `email`, `is_active`, `merchant_reference`, `name`, `registration_number`, `status`, `created_at`, `updated_at` FROM `spy_merchant` WHERE `id_merchant` = :p0';
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
            /** @var ChildSpyMerchant $obj */
            $obj = new ChildSpyMerchant();
            $obj->hydrate($row);
            SpyMerchantTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyMerchant|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyMerchantQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyMerchantTableMap::COL_ID_MERCHANT, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyMerchantQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyMerchantTableMap::COL_ID_MERCHANT, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idMerchant Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdMerchant_Between(array $idMerchant)
    {
        return $this->filterByIdMerchant($idMerchant, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idMerchants Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdMerchant_In(array $idMerchants)
    {
        return $this->filterByIdMerchant($idMerchants, Criteria::IN);
    }

    /**
     * Filter the query on the id_merchant column
     *
     * Example usage:
     * <code>
     * $query->filterByIdMerchant(1234); // WHERE id_merchant = 1234
     * $query->filterByIdMerchant(array(12, 34), Criteria::IN); // WHERE id_merchant IN (12, 34)
     * $query->filterByIdMerchant(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_merchant > 12
     * </code>
     *
     * @param     mixed $idMerchant The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdMerchant($idMerchant = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idMerchant)) {
            $useMinMax = false;
            if (isset($idMerchant['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyMerchantTableMap::COL_ID_MERCHANT, $idMerchant['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idMerchant['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyMerchantTableMap::COL_ID_MERCHANT, $idMerchant['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idMerchant of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyMerchantTableMap::COL_ID_MERCHANT, $idMerchant, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $emails Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByEmail_In(array $emails)
    {
        return $this->filterByEmail($emails, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $email Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByEmail_Like($email)
    {
        return $this->filterByEmail($email, Criteria::LIKE);
    }

    /**
     * Filter the query on the email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
     * $query->filterByEmail('%fooValue%', Criteria::LIKE); // WHERE email LIKE '%fooValue%'
     * $query->filterByEmail([1, 'foo'], Criteria::IN); // WHERE email IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByEmail($email = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $email = str_replace('*', '%', $email);
        }

        if (is_array($email) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$email of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyMerchantTableMap::COL_EMAIL, $email, $comparison);

        return $query;
    }

    /**
     * Filter the query on the is_active column
     *
     * Example usage:
     * <code>
     * $query->filterByIsActive(true); // WHERE is_active = true
     * $query->filterByIsActive('yes'); // WHERE is_active = true
     * </code>
     *
     * @param     bool|string $isActive The value to use as filter.
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
    public function filterByIsActive($isActive = null, $comparison = Criteria::EQUAL)
    {
        if (is_string($isActive)) {
            $isActive = in_array(strtolower($isActive), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        $query = $this->addUsingAlias(SpyMerchantTableMap::COL_IS_ACTIVE, $isActive, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $merchantReferences Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByMerchantReference_In(array $merchantReferences)
    {
        return $this->filterByMerchantReference($merchantReferences, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $merchantReference Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByMerchantReference_Like($merchantReference)
    {
        return $this->filterByMerchantReference($merchantReference, Criteria::LIKE);
    }

    /**
     * Filter the query on the merchant_reference column
     *
     * Example usage:
     * <code>
     * $query->filterByMerchantReference('fooValue');   // WHERE merchant_reference = 'fooValue'
     * $query->filterByMerchantReference('%fooValue%', Criteria::LIKE); // WHERE merchant_reference LIKE '%fooValue%'
     * $query->filterByMerchantReference([1, 'foo'], Criteria::IN); // WHERE merchant_reference IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $merchantReference The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByMerchantReference($merchantReference = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $merchantReference = str_replace('*', '%', $merchantReference);
        }

        if (is_array($merchantReference) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$merchantReference of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyMerchantTableMap::COL_MERCHANT_REFERENCE, $merchantReference, $comparison);

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

        $query = $this->addUsingAlias(SpyMerchantTableMap::COL_NAME, $name, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $registrationNumbers Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByRegistrationNumber_In(array $registrationNumbers)
    {
        return $this->filterByRegistrationNumber($registrationNumbers, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $registrationNumber Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByRegistrationNumber_Like($registrationNumber)
    {
        return $this->filterByRegistrationNumber($registrationNumber, Criteria::LIKE);
    }

    /**
     * Filter the query on the registration_number column
     *
     * Example usage:
     * <code>
     * $query->filterByRegistrationNumber('fooValue');   // WHERE registration_number = 'fooValue'
     * $query->filterByRegistrationNumber('%fooValue%', Criteria::LIKE); // WHERE registration_number LIKE '%fooValue%'
     * $query->filterByRegistrationNumber([1, 'foo'], Criteria::IN); // WHERE registration_number IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $registrationNumber The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByRegistrationNumber($registrationNumber = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $registrationNumber = str_replace('*', '%', $registrationNumber);
        }

        if (is_array($registrationNumber) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$registrationNumber of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyMerchantTableMap::COL_REGISTRATION_NUMBER, $registrationNumber, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $statuss Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByStatus_In(array $statuss)
    {
        return $this->filterByStatus($statuss, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $status Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByStatus_Like($status)
    {
        return $this->filterByStatus($status, Criteria::LIKE);
    }

    /**
     * Filter the query on the status column
     *
     * Example usage:
     * <code>
     * $query->filterByStatus('fooValue');   // WHERE status = 'fooValue'
     * $query->filterByStatus('%fooValue%', Criteria::LIKE); // WHERE status LIKE '%fooValue%'
     * $query->filterByStatus([1, 'foo'], Criteria::IN); // WHERE status IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $status The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByStatus($status = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $status = str_replace('*', '%', $status);
        }

        if (is_array($status) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$status of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyMerchantTableMap::COL_STATUS, $status, $comparison);

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
                $this->addUsingAlias(SpyMerchantTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyMerchantTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$createdAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyMerchantTableMap::COL_CREATED_AT, $createdAt, $comparison);

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
                $this->addUsingAlias(SpyMerchantTableMap::COL_UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyMerchantTableMap::COL_UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$updatedAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyMerchantTableMap::COL_UPDATED_AT, $updatedAt, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\Merchant\Persistence\SpyMerchantStore object
     *
     * @param \Orm\Zed\Merchant\Persistence\SpyMerchantStore|ObjectCollection $spyMerchantStore the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyMerchantQuery The current query, for fluid interface
     */
    public function filterBySpyMerchantStore($spyMerchantStore, $comparison = null)
    {
        if ($spyMerchantStore instanceof \Orm\Zed\Merchant\Persistence\SpyMerchantStore) {
            return $this
                ->addUsingAlias(SpyMerchantTableMap::COL_ID_MERCHANT, $spyMerchantStore->getFkMerchant(), $comparison);
        } elseif ($spyMerchantStore instanceof ObjectCollection) {
            return $this
                ->useSpyMerchantStoreQuery()
                ->filterByPrimaryKeys($spyMerchantStore->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyMerchantStore() only accepts arguments of type \Orm\Zed\Merchant\Persistence\SpyMerchantStore or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyMerchantStore relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyMerchantQuery The current query, for fluid interface
     */
    public function joinSpyMerchantStore($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyMerchantStore');

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
            $this->addJoinObject($join, 'SpyMerchantStore');
        }

        return $this;
    }

    /**
     * Use the SpyMerchantStore relation SpyMerchantStore object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Merchant\Persistence\SpyMerchantStoreQuery A secondary query class using the current class as primary query
     */
    public function useSpyMerchantStoreQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyMerchantStore($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyMerchantStore', '\Orm\Zed\Merchant\Persistence\SpyMerchantStoreQuery');
    }

    /**
     * Use the SpyMerchantStore relation SpyMerchantStore object
     *
     * @param callable(\Orm\Zed\Merchant\Persistence\SpyMerchantStoreQuery):\Orm\Zed\Merchant\Persistence\SpyMerchantStoreQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyMerchantStoreQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyMerchantStoreQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyMerchantStore table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Merchant\Persistence\SpyMerchantStoreQuery The inner query object of the EXISTS statement
     */
    public function useSpyMerchantStoreExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyMerchantStore', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyMerchantStore table for a NOT EXISTS query.
     *
     * @see useSpyMerchantStoreExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Merchant\Persistence\SpyMerchantStoreQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyMerchantStoreNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyMerchantStore', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationship object
     *
     * @param \Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationship|ObjectCollection $spyMerchantRelationship the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyMerchantQuery The current query, for fluid interface
     */
    public function filterBySpyMerchantRelationship($spyMerchantRelationship, $comparison = null)
    {
        if ($spyMerchantRelationship instanceof \Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationship) {
            return $this
                ->addUsingAlias(SpyMerchantTableMap::COL_ID_MERCHANT, $spyMerchantRelationship->getFkMerchant(), $comparison);
        } elseif ($spyMerchantRelationship instanceof ObjectCollection) {
            return $this
                ->useSpyMerchantRelationshipQuery()
                ->filterByPrimaryKeys($spyMerchantRelationship->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyMerchantRelationship() only accepts arguments of type \Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationship or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyMerchantRelationship relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyMerchantQuery The current query, for fluid interface
     */
    public function joinSpyMerchantRelationship($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyMerchantRelationship');

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
            $this->addJoinObject($join, 'SpyMerchantRelationship');
        }

        return $this;
    }

    /**
     * Use the SpyMerchantRelationship relation SpyMerchantRelationship object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationshipQuery A secondary query class using the current class as primary query
     */
    public function useSpyMerchantRelationshipQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyMerchantRelationship($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyMerchantRelationship', '\Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationshipQuery');
    }

    /**
     * Use the SpyMerchantRelationship relation SpyMerchantRelationship object
     *
     * @param callable(\Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationshipQuery):\Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationshipQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyMerchantRelationshipQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyMerchantRelationshipQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyMerchantRelationship table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationshipQuery The inner query object of the EXISTS statement
     */
    public function useSpyMerchantRelationshipExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyMerchantRelationship', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyMerchantRelationship table for a NOT EXISTS query.
     *
     * @see useSpyMerchantRelationshipExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationshipQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyMerchantRelationshipNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyMerchantRelationship', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Url\Persistence\SpyUrl object
     *
     * @param \Orm\Zed\Url\Persistence\SpyUrl|ObjectCollection $spyUrl the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyMerchantQuery The current query, for fluid interface
     */
    public function filterBySpyUrl($spyUrl, $comparison = null)
    {
        if ($spyUrl instanceof \Orm\Zed\Url\Persistence\SpyUrl) {
            return $this
                ->addUsingAlias(SpyMerchantTableMap::COL_ID_MERCHANT, $spyUrl->getFkResourceMerchant(), $comparison);
        } elseif ($spyUrl instanceof ObjectCollection) {
            return $this
                ->useSpyUrlQuery()
                ->filterByPrimaryKeys($spyUrl->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyUrl() only accepts arguments of type \Orm\Zed\Url\Persistence\SpyUrl or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyUrl relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyMerchantQuery The current query, for fluid interface
     */
    public function joinSpyUrl($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyUrl');

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
            $this->addJoinObject($join, 'SpyUrl');
        }

        return $this;
    }

    /**
     * Use the SpyUrl relation SpyUrl object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Url\Persistence\SpyUrlQuery A secondary query class using the current class as primary query
     */
    public function useSpyUrlQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinSpyUrl($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyUrl', '\Orm\Zed\Url\Persistence\SpyUrlQuery');
    }

    /**
     * Use the SpyUrl relation SpyUrl object
     *
     * @param callable(\Orm\Zed\Url\Persistence\SpyUrlQuery):\Orm\Zed\Url\Persistence\SpyUrlQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyUrlQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useSpyUrlQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyUrl table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Url\Persistence\SpyUrlQuery The inner query object of the EXISTS statement
     */
    public function useSpyUrlExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyUrl', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyUrl table for a NOT EXISTS query.
     *
     * @see useSpyUrlExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Url\Persistence\SpyUrlQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyUrlNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyUrl', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Exclude object from result
     *
     * @param   ChildSpyMerchant $spyMerchant Object to remove from the list of results
     *
     * @return $this|ChildSpyMerchantQuery The current query, for fluid interface
     */
    public function prune($spyMerchant = null)
    {
        if ($spyMerchant) {
            $this->addUsingAlias(SpyMerchantTableMap::COL_ID_MERCHANT, $spyMerchant->getIdMerchant(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_merchant table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyMerchantTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyMerchantTableMap::clearInstancePool();
            SpyMerchantTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyMerchantTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyMerchantTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyMerchantTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyMerchantTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    // timestampable behavior

    /**
     * Filter by the latest updated
     *
     * @param      int $nbDays Maximum age of the latest update in days
     *
     * @return     $this|ChildSpyMerchantQuery The current query, for fluid interface
     */
    public function recentlyUpdated($nbDays = 7)
    {
        return $this->addUsingAlias(SpyMerchantTableMap::COL_UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by update date desc
     *
     * @return     $this|ChildSpyMerchantQuery The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        return $this->addDescendingOrderByColumn(SpyMerchantTableMap::COL_UPDATED_AT);
    }

    /**
     * Order by update date asc
     *
     * @return     $this|ChildSpyMerchantQuery The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        return $this->addAscendingOrderByColumn(SpyMerchantTableMap::COL_UPDATED_AT);
    }

    /**
     * Order by create date desc
     *
     * @return     $this|ChildSpyMerchantQuery The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        return $this->addDescendingOrderByColumn(SpyMerchantTableMap::COL_CREATED_AT);
    }

    /**
     * Filter by the latest created
     *
     * @param      int $nbDays Maximum age of in days
     *
     * @return     $this|ChildSpyMerchantQuery The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        return $this->addUsingAlias(SpyMerchantTableMap::COL_CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by create date asc
     *
     * @return     $this|ChildSpyMerchantQuery The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        return $this->addAscendingOrderByColumn(SpyMerchantTableMap::COL_CREATED_AT);
    }

} // SpyMerchantQuery
