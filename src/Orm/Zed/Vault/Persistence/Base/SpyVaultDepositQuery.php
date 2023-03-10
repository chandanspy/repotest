<?php

namespace Orm\Zed\Vault\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\Vault\Persistence\SpyVaultDeposit as ChildSpyVaultDeposit;
use Orm\Zed\Vault\Persistence\SpyVaultDepositQuery as ChildSpyVaultDepositQuery;
use Orm\Zed\Vault\Persistence\Map\SpyVaultDepositTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;
use Spryker\Zed\PropelOrm\Business\Runtime\ActiveQuery\Criteria as SprykerCriteria;
use Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException;

/**
 * Base class that represents a query for the 'spy_vault_deposit' table.
 *
 *
 *
 * @method     ChildSpyVaultDepositQuery orderByIdVaultDeposit($order = Criteria::ASC) Order by the id_vault_deposit column
 * @method     ChildSpyVaultDepositQuery orderByDataType($order = Criteria::ASC) Order by the data_type column
 * @method     ChildSpyVaultDepositQuery orderByDataKey($order = Criteria::ASC) Order by the data_key column
 * @method     ChildSpyVaultDepositQuery orderByInitialVector($order = Criteria::ASC) Order by the initial_vector column
 * @method     ChildSpyVaultDepositQuery orderByCipherText($order = Criteria::ASC) Order by the cipher_text column
 * @method     ChildSpyVaultDepositQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildSpyVaultDepositQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ChildSpyVaultDepositQuery groupByIdVaultDeposit() Group by the id_vault_deposit column
 * @method     ChildSpyVaultDepositQuery groupByDataType() Group by the data_type column
 * @method     ChildSpyVaultDepositQuery groupByDataKey() Group by the data_key column
 * @method     ChildSpyVaultDepositQuery groupByInitialVector() Group by the initial_vector column
 * @method     ChildSpyVaultDepositQuery groupByCipherText() Group by the cipher_text column
 * @method     ChildSpyVaultDepositQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildSpyVaultDepositQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ChildSpyVaultDepositQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyVaultDepositQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyVaultDepositQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyVaultDepositQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyVaultDepositQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyVaultDepositQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyVaultDeposit|null findOne(ConnectionInterface $con = null) Return the first ChildSpyVaultDeposit matching the query
 * @method     ChildSpyVaultDeposit findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyVaultDeposit matching the query, or a new ChildSpyVaultDeposit object populated from the query conditions when no match is found
 *
 * @method     ChildSpyVaultDeposit|null findOneByIdVaultDeposit(int $id_vault_deposit) Return the first ChildSpyVaultDeposit filtered by the id_vault_deposit column
 * @method     ChildSpyVaultDeposit|null findOneByDataType(string $data_type) Return the first ChildSpyVaultDeposit filtered by the data_type column
 * @method     ChildSpyVaultDeposit|null findOneByDataKey(string $data_key) Return the first ChildSpyVaultDeposit filtered by the data_key column
 * @method     ChildSpyVaultDeposit|null findOneByInitialVector(string $initial_vector) Return the first ChildSpyVaultDeposit filtered by the initial_vector column
 * @method     ChildSpyVaultDeposit|null findOneByCipherText(string $cipher_text) Return the first ChildSpyVaultDeposit filtered by the cipher_text column
 * @method     ChildSpyVaultDeposit|null findOneByCreatedAt(string $created_at) Return the first ChildSpyVaultDeposit filtered by the created_at column
 * @method     ChildSpyVaultDeposit|null findOneByUpdatedAt(string $updated_at) Return the first ChildSpyVaultDeposit filtered by the updated_at column *

 * @method     ChildSpyVaultDeposit requirePk($key, ConnectionInterface $con = null) Return the ChildSpyVaultDeposit by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyVaultDeposit requireOne(ConnectionInterface $con = null) Return the first ChildSpyVaultDeposit matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyVaultDeposit requireOneByIdVaultDeposit(int $id_vault_deposit) Return the first ChildSpyVaultDeposit filtered by the id_vault_deposit column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyVaultDeposit requireOneByDataType(string $data_type) Return the first ChildSpyVaultDeposit filtered by the data_type column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyVaultDeposit requireOneByDataKey(string $data_key) Return the first ChildSpyVaultDeposit filtered by the data_key column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyVaultDeposit requireOneByInitialVector(string $initial_vector) Return the first ChildSpyVaultDeposit filtered by the initial_vector column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyVaultDeposit requireOneByCipherText(string $cipher_text) Return the first ChildSpyVaultDeposit filtered by the cipher_text column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyVaultDeposit requireOneByCreatedAt(string $created_at) Return the first ChildSpyVaultDeposit filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyVaultDeposit requireOneByUpdatedAt(string $updated_at) Return the first ChildSpyVaultDeposit filtered by the updated_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyVaultDeposit[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyVaultDeposit objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyVaultDeposit> find(ConnectionInterface $con = null) Return ChildSpyVaultDeposit objects based on current ModelCriteria
 * @method     ChildSpyVaultDeposit[]|ObjectCollection findByIdVaultDeposit(int $id_vault_deposit) Return ChildSpyVaultDeposit objects filtered by the id_vault_deposit column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyVaultDeposit> findByIdVaultDeposit(int $id_vault_deposit) Return ChildSpyVaultDeposit objects filtered by the id_vault_deposit column
 * @method     ChildSpyVaultDeposit[]|ObjectCollection findByDataType(string $data_type) Return ChildSpyVaultDeposit objects filtered by the data_type column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyVaultDeposit> findByDataType(string $data_type) Return ChildSpyVaultDeposit objects filtered by the data_type column
 * @method     ChildSpyVaultDeposit[]|ObjectCollection findByDataKey(string $data_key) Return ChildSpyVaultDeposit objects filtered by the data_key column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyVaultDeposit> findByDataKey(string $data_key) Return ChildSpyVaultDeposit objects filtered by the data_key column
 * @method     ChildSpyVaultDeposit[]|ObjectCollection findByInitialVector(string $initial_vector) Return ChildSpyVaultDeposit objects filtered by the initial_vector column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyVaultDeposit> findByInitialVector(string $initial_vector) Return ChildSpyVaultDeposit objects filtered by the initial_vector column
 * @method     ChildSpyVaultDeposit[]|ObjectCollection findByCipherText(string $cipher_text) Return ChildSpyVaultDeposit objects filtered by the cipher_text column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyVaultDeposit> findByCipherText(string $cipher_text) Return ChildSpyVaultDeposit objects filtered by the cipher_text column
 * @method     ChildSpyVaultDeposit[]|ObjectCollection findByCreatedAt(string $created_at) Return ChildSpyVaultDeposit objects filtered by the created_at column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyVaultDeposit> findByCreatedAt(string $created_at) Return ChildSpyVaultDeposit objects filtered by the created_at column
 * @method     ChildSpyVaultDeposit[]|ObjectCollection findByUpdatedAt(string $updated_at) Return ChildSpyVaultDeposit objects filtered by the updated_at column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyVaultDeposit> findByUpdatedAt(string $updated_at) Return ChildSpyVaultDeposit objects filtered by the updated_at column
 * @method     ChildSpyVaultDeposit[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyVaultDeposit> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyVaultDepositQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\Vault\Persistence\Base\SpyVaultDepositQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\Vault\\Persistence\\SpyVaultDeposit', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyVaultDepositQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyVaultDepositQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyVaultDepositQuery) {
            return $criteria;
        }
        $query = new ChildSpyVaultDepositQuery();
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
     * @return ChildSpyVaultDeposit|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyVaultDepositTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyVaultDeposit A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_vault_deposit, data_type, data_key, initial_vector, cipher_text, created_at, updated_at FROM spy_vault_deposit WHERE id_vault_deposit = :p0';
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
            /** @var ChildSpyVaultDeposit $obj */
            $obj = new ChildSpyVaultDeposit();
            $obj->hydrate($row);
            SpyVaultDepositTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyVaultDeposit|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyVaultDepositQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyVaultDepositTableMap::COL_ID_VAULT_DEPOSIT, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyVaultDepositQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyVaultDepositTableMap::COL_ID_VAULT_DEPOSIT, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idVaultDeposit Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdVaultDeposit_Between(array $idVaultDeposit)
    {
        return $this->filterByIdVaultDeposit($idVaultDeposit, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idVaultDeposits Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdVaultDeposit_In(array $idVaultDeposits)
    {
        return $this->filterByIdVaultDeposit($idVaultDeposits, Criteria::IN);
    }

    /**
     * Filter the query on the id_vault_deposit column
     *
     * Example usage:
     * <code>
     * $query->filterByIdVaultDeposit(1234); // WHERE id_vault_deposit = 1234
     * $query->filterByIdVaultDeposit(array(12, 34), Criteria::IN); // WHERE id_vault_deposit IN (12, 34)
     * $query->filterByIdVaultDeposit(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_vault_deposit > 12
     * </code>
     *
     * @param     mixed $idVaultDeposit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdVaultDeposit($idVaultDeposit = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idVaultDeposit)) {
            $useMinMax = false;
            if (isset($idVaultDeposit['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyVaultDepositTableMap::COL_ID_VAULT_DEPOSIT, $idVaultDeposit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idVaultDeposit['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyVaultDepositTableMap::COL_ID_VAULT_DEPOSIT, $idVaultDeposit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idVaultDeposit of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyVaultDepositTableMap::COL_ID_VAULT_DEPOSIT, $idVaultDeposit, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $dataTypes Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDataType_In(array $dataTypes)
    {
        return $this->filterByDataType($dataTypes, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $dataType Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDataType_Like($dataType)
    {
        return $this->filterByDataType($dataType, Criteria::LIKE);
    }

    /**
     * Filter the query on the data_type column
     *
     * Example usage:
     * <code>
     * $query->filterByDataType('fooValue');   // WHERE data_type = 'fooValue'
     * $query->filterByDataType('%fooValue%', Criteria::LIKE); // WHERE data_type LIKE '%fooValue%'
     * $query->filterByDataType([1, 'foo'], Criteria::IN); // WHERE data_type IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $dataType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByDataType($dataType = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $dataType = str_replace('*', '%', $dataType);
        }

        if (is_array($dataType) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$dataType of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyVaultDepositTableMap::COL_DATA_TYPE, $dataType, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $dataKeys Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDataKey_In(array $dataKeys)
    {
        return $this->filterByDataKey($dataKeys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $dataKey Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDataKey_Like($dataKey)
    {
        return $this->filterByDataKey($dataKey, Criteria::LIKE);
    }

    /**
     * Filter the query on the data_key column
     *
     * Example usage:
     * <code>
     * $query->filterByDataKey('fooValue');   // WHERE data_key = 'fooValue'
     * $query->filterByDataKey('%fooValue%', Criteria::LIKE); // WHERE data_key LIKE '%fooValue%'
     * $query->filterByDataKey([1, 'foo'], Criteria::IN); // WHERE data_key IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $dataKey The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByDataKey($dataKey = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $dataKey = str_replace('*', '%', $dataKey);
        }

        if (is_array($dataKey) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$dataKey of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyVaultDepositTableMap::COL_DATA_KEY, $dataKey, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $initialVectors Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitialVector_In(array $initialVectors)
    {
        return $this->filterByInitialVector($initialVectors, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $initialVector Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitialVector_Like($initialVector)
    {
        return $this->filterByInitialVector($initialVector, Criteria::LIKE);
    }

    /**
     * Filter the query on the initial_vector column
     *
     * Example usage:
     * <code>
     * $query->filterByInitialVector('fooValue');   // WHERE initial_vector = 'fooValue'
     * $query->filterByInitialVector('%fooValue%', Criteria::LIKE); // WHERE initial_vector LIKE '%fooValue%'
     * $query->filterByInitialVector([1, 'foo'], Criteria::IN); // WHERE initial_vector IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $initialVector The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByInitialVector($initialVector = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $initialVector = str_replace('*', '%', $initialVector);
        }

        if (is_array($initialVector) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$initialVector of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyVaultDepositTableMap::COL_INITIAL_VECTOR, $initialVector, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $cipherTexts Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCipherText_In(array $cipherTexts)
    {
        return $this->filterByCipherText($cipherTexts, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $cipherText Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCipherText_Like($cipherText)
    {
        return $this->filterByCipherText($cipherText, Criteria::LIKE);
    }

    /**
     * Filter the query on the cipher_text column
     *
     * Example usage:
     * <code>
     * $query->filterByCipherText('fooValue');   // WHERE cipher_text = 'fooValue'
     * $query->filterByCipherText('%fooValue%', Criteria::LIKE); // WHERE cipher_text LIKE '%fooValue%'
     * $query->filterByCipherText([1, 'foo'], Criteria::IN); // WHERE cipher_text IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $cipherText The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByCipherText($cipherText = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $cipherText = str_replace('*', '%', $cipherText);
        }

        if (is_array($cipherText) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$cipherText of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyVaultDepositTableMap::COL_CIPHER_TEXT, $cipherText, $comparison);

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
                $this->addUsingAlias(SpyVaultDepositTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyVaultDepositTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$createdAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyVaultDepositTableMap::COL_CREATED_AT, $createdAt, $comparison);

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
                $this->addUsingAlias(SpyVaultDepositTableMap::COL_UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyVaultDepositTableMap::COL_UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$updatedAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyVaultDepositTableMap::COL_UPDATED_AT, $updatedAt, $comparison);

        return $query;
    }

    /**
     * Exclude object from result
     *
     * @param   ChildSpyVaultDeposit $spyVaultDeposit Object to remove from the list of results
     *
     * @return $this|ChildSpyVaultDepositQuery The current query, for fluid interface
     */
    public function prune($spyVaultDeposit = null)
    {
        if ($spyVaultDeposit) {
            $this->addUsingAlias(SpyVaultDepositTableMap::COL_ID_VAULT_DEPOSIT, $spyVaultDeposit->getIdVaultDeposit(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_vault_deposit table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyVaultDepositTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyVaultDepositTableMap::clearInstancePool();
            SpyVaultDepositTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyVaultDepositTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyVaultDepositTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyVaultDepositTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyVaultDepositTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    // timestampable behavior

    /**
     * Filter by the latest updated
     *
     * @param      int $nbDays Maximum age of the latest update in days
     *
     * @return     $this|ChildSpyVaultDepositQuery The current query, for fluid interface
     */
    public function recentlyUpdated($nbDays = 7)
    {
        return $this->addUsingAlias(SpyVaultDepositTableMap::COL_UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by update date desc
     *
     * @return     $this|ChildSpyVaultDepositQuery The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        return $this->addDescendingOrderByColumn(SpyVaultDepositTableMap::COL_UPDATED_AT);
    }

    /**
     * Order by update date asc
     *
     * @return     $this|ChildSpyVaultDepositQuery The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        return $this->addAscendingOrderByColumn(SpyVaultDepositTableMap::COL_UPDATED_AT);
    }

    /**
     * Order by create date desc
     *
     * @return     $this|ChildSpyVaultDepositQuery The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        return $this->addDescendingOrderByColumn(SpyVaultDepositTableMap::COL_CREATED_AT);
    }

    /**
     * Filter by the latest created
     *
     * @param      int $nbDays Maximum age of in days
     *
     * @return     $this|ChildSpyVaultDepositQuery The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        return $this->addUsingAlias(SpyVaultDepositTableMap::COL_CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by create date asc
     *
     * @return     $this|ChildSpyVaultDepositQuery The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        return $this->addAscendingOrderByColumn(SpyVaultDepositTableMap::COL_CREATED_AT);
    }

} // SpyVaultDepositQuery
