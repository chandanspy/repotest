<?php

namespace Orm\Zed\CompanyUnitAddressLabel\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\CompanyUnitAddressLabel\Persistence\SpyCompanyUnitAddressLabelToCompanyUnitAddress as ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress;
use Orm\Zed\CompanyUnitAddressLabel\Persistence\SpyCompanyUnitAddressLabelToCompanyUnitAddressQuery as ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery;
use Orm\Zed\CompanyUnitAddressLabel\Persistence\Map\SpyCompanyUnitAddressLabelToCompanyUnitAddressTableMap;
use Orm\Zed\CompanyUnitAddress\Persistence\SpyCompanyUnitAddress;
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
 * Base class that represents a query for the 'spy_company_unit_address_label_to_company_unit_address' table.
 *
 *
 *
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery orderByIdCompanyUnitAddressLabelToCompanyUnitAddress($order = Criteria::ASC) Order by the id_company_unit_address_label_to_company_unit_address column
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery orderByFkCompanyUnitAddress($order = Criteria::ASC) Order by the fk_company_unit_address column
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery orderByFkCompanyUnitAddressLabel($order = Criteria::ASC) Order by the fk_company_unit_address_label column
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery groupByIdCompanyUnitAddressLabelToCompanyUnitAddress() Group by the id_company_unit_address_label_to_company_unit_address column
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery groupByFkCompanyUnitAddress() Group by the fk_company_unit_address column
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery groupByFkCompanyUnitAddressLabel() Group by the fk_company_unit_address_label column
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery leftJoinCompanyUnitAddress($relationAlias = null) Adds a LEFT JOIN clause to the query using the CompanyUnitAddress relation
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery rightJoinCompanyUnitAddress($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CompanyUnitAddress relation
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery innerJoinCompanyUnitAddress($relationAlias = null) Adds a INNER JOIN clause to the query using the CompanyUnitAddress relation
 *
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery joinWithCompanyUnitAddress($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the CompanyUnitAddress relation
 *
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery leftJoinWithCompanyUnitAddress() Adds a LEFT JOIN clause and with to the query using the CompanyUnitAddress relation
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery rightJoinWithCompanyUnitAddress() Adds a RIGHT JOIN clause and with to the query using the CompanyUnitAddress relation
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery innerJoinWithCompanyUnitAddress() Adds a INNER JOIN clause and with to the query using the CompanyUnitAddress relation
 *
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery leftJoinCompanyUnitAddressLabel($relationAlias = null) Adds a LEFT JOIN clause to the query using the CompanyUnitAddressLabel relation
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery rightJoinCompanyUnitAddressLabel($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CompanyUnitAddressLabel relation
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery innerJoinCompanyUnitAddressLabel($relationAlias = null) Adds a INNER JOIN clause to the query using the CompanyUnitAddressLabel relation
 *
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery joinWithCompanyUnitAddressLabel($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the CompanyUnitAddressLabel relation
 *
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery leftJoinWithCompanyUnitAddressLabel() Adds a LEFT JOIN clause and with to the query using the CompanyUnitAddressLabel relation
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery rightJoinWithCompanyUnitAddressLabel() Adds a RIGHT JOIN clause and with to the query using the CompanyUnitAddressLabel relation
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery innerJoinWithCompanyUnitAddressLabel() Adds a INNER JOIN clause and with to the query using the CompanyUnitAddressLabel relation
 *
 * @method     \Orm\Zed\CompanyUnitAddress\Persistence\SpyCompanyUnitAddressQuery|\Orm\Zed\CompanyUnitAddressLabel\Persistence\SpyCompanyUnitAddressLabelQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress|null findOne(ConnectionInterface $con = null) Return the first ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress matching the query
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress matching the query, or a new ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress object populated from the query conditions when no match is found
 *
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress|null findOneByIdCompanyUnitAddressLabelToCompanyUnitAddress(int $id_company_unit_address_label_to_company_unit_address) Return the first ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress filtered by the id_company_unit_address_label_to_company_unit_address column
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress|null findOneByFkCompanyUnitAddress(int $fk_company_unit_address) Return the first ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress filtered by the fk_company_unit_address column
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress|null findOneByFkCompanyUnitAddressLabel(int $fk_company_unit_address_label) Return the first ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress filtered by the fk_company_unit_address_label column
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress|null findOneByCreatedAt(string $created_at) Return the first ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress filtered by the created_at column
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress|null findOneByUpdatedAt(string $updated_at) Return the first ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress filtered by the updated_at column *

 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress requirePk($key, ConnectionInterface $con = null) Return the ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress requireOne(ConnectionInterface $con = null) Return the first ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress requireOneByIdCompanyUnitAddressLabelToCompanyUnitAddress(int $id_company_unit_address_label_to_company_unit_address) Return the first ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress filtered by the id_company_unit_address_label_to_company_unit_address column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress requireOneByFkCompanyUnitAddress(int $fk_company_unit_address) Return the first ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress filtered by the fk_company_unit_address column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress requireOneByFkCompanyUnitAddressLabel(int $fk_company_unit_address_label) Return the first ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress filtered by the fk_company_unit_address_label column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress requireOneByCreatedAt(string $created_at) Return the first ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress requireOneByUpdatedAt(string $updated_at) Return the first ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress filtered by the updated_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress> find(ConnectionInterface $con = null) Return ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress objects based on current ModelCriteria
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress[]|ObjectCollection findByIdCompanyUnitAddressLabelToCompanyUnitAddress(int $id_company_unit_address_label_to_company_unit_address) Return ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress objects filtered by the id_company_unit_address_label_to_company_unit_address column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress> findByIdCompanyUnitAddressLabelToCompanyUnitAddress(int $id_company_unit_address_label_to_company_unit_address) Return ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress objects filtered by the id_company_unit_address_label_to_company_unit_address column
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress[]|ObjectCollection findByFkCompanyUnitAddress(int $fk_company_unit_address) Return ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress objects filtered by the fk_company_unit_address column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress> findByFkCompanyUnitAddress(int $fk_company_unit_address) Return ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress objects filtered by the fk_company_unit_address column
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress[]|ObjectCollection findByFkCompanyUnitAddressLabel(int $fk_company_unit_address_label) Return ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress objects filtered by the fk_company_unit_address_label column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress> findByFkCompanyUnitAddressLabel(int $fk_company_unit_address_label) Return ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress objects filtered by the fk_company_unit_address_label column
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress[]|ObjectCollection findByCreatedAt(string $created_at) Return ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress objects filtered by the created_at column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress> findByCreatedAt(string $created_at) Return ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress objects filtered by the created_at column
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress[]|ObjectCollection findByUpdatedAt(string $updated_at) Return ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress objects filtered by the updated_at column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress> findByUpdatedAt(string $updated_at) Return ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress objects filtered by the updated_at column
 * @method     ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyCompanyUnitAddressLabelToCompanyUnitAddressQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\CompanyUnitAddressLabel\Persistence\Base\SpyCompanyUnitAddressLabelToCompanyUnitAddressQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\CompanyUnitAddressLabel\\Persistence\\SpyCompanyUnitAddressLabelToCompanyUnitAddress', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery) {
            return $criteria;
        }
        $query = new ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery();
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
     * @return ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyCompanyUnitAddressLabelToCompanyUnitAddressTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_company_unit_address_label_to_company_unit_address, fk_company_unit_address, fk_company_unit_address_label, created_at, updated_at FROM spy_company_unit_address_label_to_company_unit_address WHERE id_company_unit_address_label_to_company_unit_address = :p0';
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
            /** @var ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress $obj */
            $obj = new ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress();
            $obj->hydrate($row);
            SpyCompanyUnitAddressLabelToCompanyUnitAddressTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyCompanyUnitAddressLabelToCompanyUnitAddressTableMap::COL_ID_COMPANY_UNIT_ADDRESS_LABEL_TO_COMPANY_UNIT_ADDRESS, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyCompanyUnitAddressLabelToCompanyUnitAddressTableMap::COL_ID_COMPANY_UNIT_ADDRESS_LABEL_TO_COMPANY_UNIT_ADDRESS, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idCompanyUnitAddressLabelToCompanyUnitAddress Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdCompanyUnitAddressLabelToCompanyUnitAddress_Between(array $idCompanyUnitAddressLabelToCompanyUnitAddress)
    {
        return $this->filterByIdCompanyUnitAddressLabelToCompanyUnitAddress($idCompanyUnitAddressLabelToCompanyUnitAddress, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idCompanyUnitAddressLabelToCompanyUnitAddresss Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdCompanyUnitAddressLabelToCompanyUnitAddress_In(array $idCompanyUnitAddressLabelToCompanyUnitAddresss)
    {
        return $this->filterByIdCompanyUnitAddressLabelToCompanyUnitAddress($idCompanyUnitAddressLabelToCompanyUnitAddresss, Criteria::IN);
    }

    /**
     * Filter the query on the id_company_unit_address_label_to_company_unit_address column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCompanyUnitAddressLabelToCompanyUnitAddress(1234); // WHERE id_company_unit_address_label_to_company_unit_address = 1234
     * $query->filterByIdCompanyUnitAddressLabelToCompanyUnitAddress(array(12, 34), Criteria::IN); // WHERE id_company_unit_address_label_to_company_unit_address IN (12, 34)
     * $query->filterByIdCompanyUnitAddressLabelToCompanyUnitAddress(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_company_unit_address_label_to_company_unit_address > 12
     * </code>
     *
     * @param     mixed $idCompanyUnitAddressLabelToCompanyUnitAddress The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdCompanyUnitAddressLabelToCompanyUnitAddress($idCompanyUnitAddressLabelToCompanyUnitAddress = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idCompanyUnitAddressLabelToCompanyUnitAddress)) {
            $useMinMax = false;
            if (isset($idCompanyUnitAddressLabelToCompanyUnitAddress['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCompanyUnitAddressLabelToCompanyUnitAddressTableMap::COL_ID_COMPANY_UNIT_ADDRESS_LABEL_TO_COMPANY_UNIT_ADDRESS, $idCompanyUnitAddressLabelToCompanyUnitAddress['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCompanyUnitAddressLabelToCompanyUnitAddress['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCompanyUnitAddressLabelToCompanyUnitAddressTableMap::COL_ID_COMPANY_UNIT_ADDRESS_LABEL_TO_COMPANY_UNIT_ADDRESS, $idCompanyUnitAddressLabelToCompanyUnitAddress['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idCompanyUnitAddressLabelToCompanyUnitAddress of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCompanyUnitAddressLabelToCompanyUnitAddressTableMap::COL_ID_COMPANY_UNIT_ADDRESS_LABEL_TO_COMPANY_UNIT_ADDRESS, $idCompanyUnitAddressLabelToCompanyUnitAddress, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkCompanyUnitAddress Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkCompanyUnitAddress_Between(array $fkCompanyUnitAddress)
    {
        return $this->filterByFkCompanyUnitAddress($fkCompanyUnitAddress, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkCompanyUnitAddresss Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkCompanyUnitAddress_In(array $fkCompanyUnitAddresss)
    {
        return $this->filterByFkCompanyUnitAddress($fkCompanyUnitAddresss, Criteria::IN);
    }

    /**
     * Filter the query on the fk_company_unit_address column
     *
     * Example usage:
     * <code>
     * $query->filterByFkCompanyUnitAddress(1234); // WHERE fk_company_unit_address = 1234
     * $query->filterByFkCompanyUnitAddress(array(12, 34), Criteria::IN); // WHERE fk_company_unit_address IN (12, 34)
     * $query->filterByFkCompanyUnitAddress(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_company_unit_address > 12
     * </code>
     *
     * @see       filterByCompanyUnitAddress()
     *
     * @param     mixed $fkCompanyUnitAddress The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkCompanyUnitAddress($fkCompanyUnitAddress = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkCompanyUnitAddress)) {
            $useMinMax = false;
            if (isset($fkCompanyUnitAddress['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCompanyUnitAddressLabelToCompanyUnitAddressTableMap::COL_FK_COMPANY_UNIT_ADDRESS, $fkCompanyUnitAddress['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkCompanyUnitAddress['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCompanyUnitAddressLabelToCompanyUnitAddressTableMap::COL_FK_COMPANY_UNIT_ADDRESS, $fkCompanyUnitAddress['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkCompanyUnitAddress of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCompanyUnitAddressLabelToCompanyUnitAddressTableMap::COL_FK_COMPANY_UNIT_ADDRESS, $fkCompanyUnitAddress, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkCompanyUnitAddressLabel Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkCompanyUnitAddressLabel_Between(array $fkCompanyUnitAddressLabel)
    {
        return $this->filterByFkCompanyUnitAddressLabel($fkCompanyUnitAddressLabel, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkCompanyUnitAddressLabels Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkCompanyUnitAddressLabel_In(array $fkCompanyUnitAddressLabels)
    {
        return $this->filterByFkCompanyUnitAddressLabel($fkCompanyUnitAddressLabels, Criteria::IN);
    }

    /**
     * Filter the query on the fk_company_unit_address_label column
     *
     * Example usage:
     * <code>
     * $query->filterByFkCompanyUnitAddressLabel(1234); // WHERE fk_company_unit_address_label = 1234
     * $query->filterByFkCompanyUnitAddressLabel(array(12, 34), Criteria::IN); // WHERE fk_company_unit_address_label IN (12, 34)
     * $query->filterByFkCompanyUnitAddressLabel(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_company_unit_address_label > 12
     * </code>
     *
     * @see       filterByCompanyUnitAddressLabel()
     *
     * @param     mixed $fkCompanyUnitAddressLabel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkCompanyUnitAddressLabel($fkCompanyUnitAddressLabel = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkCompanyUnitAddressLabel)) {
            $useMinMax = false;
            if (isset($fkCompanyUnitAddressLabel['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCompanyUnitAddressLabelToCompanyUnitAddressTableMap::COL_FK_COMPANY_UNIT_ADDRESS_LABEL, $fkCompanyUnitAddressLabel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkCompanyUnitAddressLabel['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCompanyUnitAddressLabelToCompanyUnitAddressTableMap::COL_FK_COMPANY_UNIT_ADDRESS_LABEL, $fkCompanyUnitAddressLabel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkCompanyUnitAddressLabel of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCompanyUnitAddressLabelToCompanyUnitAddressTableMap::COL_FK_COMPANY_UNIT_ADDRESS_LABEL, $fkCompanyUnitAddressLabel, $comparison);

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
                $this->addUsingAlias(SpyCompanyUnitAddressLabelToCompanyUnitAddressTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCompanyUnitAddressLabelToCompanyUnitAddressTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$createdAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCompanyUnitAddressLabelToCompanyUnitAddressTableMap::COL_CREATED_AT, $createdAt, $comparison);

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
                $this->addUsingAlias(SpyCompanyUnitAddressLabelToCompanyUnitAddressTableMap::COL_UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCompanyUnitAddressLabelToCompanyUnitAddressTableMap::COL_UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$updatedAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCompanyUnitAddressLabelToCompanyUnitAddressTableMap::COL_UPDATED_AT, $updatedAt, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\CompanyUnitAddress\Persistence\SpyCompanyUnitAddress object
     *
     * @param \Orm\Zed\CompanyUnitAddress\Persistence\SpyCompanyUnitAddress|ObjectCollection $spyCompanyUnitAddress The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery The current query, for fluid interface
     */
    public function filterByCompanyUnitAddress($spyCompanyUnitAddress, $comparison = null)
    {
        if ($spyCompanyUnitAddress instanceof \Orm\Zed\CompanyUnitAddress\Persistence\SpyCompanyUnitAddress) {
            return $this
                ->addUsingAlias(SpyCompanyUnitAddressLabelToCompanyUnitAddressTableMap::COL_FK_COMPANY_UNIT_ADDRESS, $spyCompanyUnitAddress->getIdCompanyUnitAddress(), $comparison);
        } elseif ($spyCompanyUnitAddress instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyCompanyUnitAddressLabelToCompanyUnitAddressTableMap::COL_FK_COMPANY_UNIT_ADDRESS, $spyCompanyUnitAddress->toKeyValue('PrimaryKey', 'IdCompanyUnitAddress'), $comparison);
        } else {
            throw new PropelException('filterByCompanyUnitAddress() only accepts arguments of type \Orm\Zed\CompanyUnitAddress\Persistence\SpyCompanyUnitAddress or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CompanyUnitAddress relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery The current query, for fluid interface
     */
    public function joinCompanyUnitAddress($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CompanyUnitAddress');

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
            $this->addJoinObject($join, 'CompanyUnitAddress');
        }

        return $this;
    }

    /**
     * Use the CompanyUnitAddress relation SpyCompanyUnitAddress object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\CompanyUnitAddress\Persistence\SpyCompanyUnitAddressQuery A secondary query class using the current class as primary query
     */
    public function useCompanyUnitAddressQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCompanyUnitAddress($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CompanyUnitAddress', '\Orm\Zed\CompanyUnitAddress\Persistence\SpyCompanyUnitAddressQuery');
    }

    /**
     * Use the CompanyUnitAddress relation SpyCompanyUnitAddress object
     *
     * @param callable(\Orm\Zed\CompanyUnitAddress\Persistence\SpyCompanyUnitAddressQuery):\Orm\Zed\CompanyUnitAddress\Persistence\SpyCompanyUnitAddressQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withCompanyUnitAddressQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useCompanyUnitAddressQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the CompanyUnitAddress relation to the SpyCompanyUnitAddress table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\CompanyUnitAddress\Persistence\SpyCompanyUnitAddressQuery The inner query object of the EXISTS statement
     */
    public function useCompanyUnitAddressExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('CompanyUnitAddress', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the CompanyUnitAddress relation to the SpyCompanyUnitAddress table for a NOT EXISTS query.
     *
     * @see useCompanyUnitAddressExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\CompanyUnitAddress\Persistence\SpyCompanyUnitAddressQuery The inner query object of the NOT EXISTS statement
     */
    public function useCompanyUnitAddressNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('CompanyUnitAddress', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\CompanyUnitAddressLabel\Persistence\SpyCompanyUnitAddressLabel object
     *
     * @param \Orm\Zed\CompanyUnitAddressLabel\Persistence\SpyCompanyUnitAddressLabel|ObjectCollection $spyCompanyUnitAddressLabel The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery The current query, for fluid interface
     */
    public function filterByCompanyUnitAddressLabel($spyCompanyUnitAddressLabel, $comparison = null)
    {
        if ($spyCompanyUnitAddressLabel instanceof \Orm\Zed\CompanyUnitAddressLabel\Persistence\SpyCompanyUnitAddressLabel) {
            return $this
                ->addUsingAlias(SpyCompanyUnitAddressLabelToCompanyUnitAddressTableMap::COL_FK_COMPANY_UNIT_ADDRESS_LABEL, $spyCompanyUnitAddressLabel->getIdCompanyUnitAddressLabel(), $comparison);
        } elseif ($spyCompanyUnitAddressLabel instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyCompanyUnitAddressLabelToCompanyUnitAddressTableMap::COL_FK_COMPANY_UNIT_ADDRESS_LABEL, $spyCompanyUnitAddressLabel->toKeyValue('PrimaryKey', 'IdCompanyUnitAddressLabel'), $comparison);
        } else {
            throw new PropelException('filterByCompanyUnitAddressLabel() only accepts arguments of type \Orm\Zed\CompanyUnitAddressLabel\Persistence\SpyCompanyUnitAddressLabel or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CompanyUnitAddressLabel relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery The current query, for fluid interface
     */
    public function joinCompanyUnitAddressLabel($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CompanyUnitAddressLabel');

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
            $this->addJoinObject($join, 'CompanyUnitAddressLabel');
        }

        return $this;
    }

    /**
     * Use the CompanyUnitAddressLabel relation SpyCompanyUnitAddressLabel object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\CompanyUnitAddressLabel\Persistence\SpyCompanyUnitAddressLabelQuery A secondary query class using the current class as primary query
     */
    public function useCompanyUnitAddressLabelQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCompanyUnitAddressLabel($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CompanyUnitAddressLabel', '\Orm\Zed\CompanyUnitAddressLabel\Persistence\SpyCompanyUnitAddressLabelQuery');
    }

    /**
     * Use the CompanyUnitAddressLabel relation SpyCompanyUnitAddressLabel object
     *
     * @param callable(\Orm\Zed\CompanyUnitAddressLabel\Persistence\SpyCompanyUnitAddressLabelQuery):\Orm\Zed\CompanyUnitAddressLabel\Persistence\SpyCompanyUnitAddressLabelQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withCompanyUnitAddressLabelQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useCompanyUnitAddressLabelQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the CompanyUnitAddressLabel relation to the SpyCompanyUnitAddressLabel table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\CompanyUnitAddressLabel\Persistence\SpyCompanyUnitAddressLabelQuery The inner query object of the EXISTS statement
     */
    public function useCompanyUnitAddressLabelExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('CompanyUnitAddressLabel', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the CompanyUnitAddressLabel relation to the SpyCompanyUnitAddressLabel table for a NOT EXISTS query.
     *
     * @see useCompanyUnitAddressLabelExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\CompanyUnitAddressLabel\Persistence\SpyCompanyUnitAddressLabelQuery The inner query object of the NOT EXISTS statement
     */
    public function useCompanyUnitAddressLabelNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('CompanyUnitAddressLabel', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Exclude object from result
     *
     * @param   ChildSpyCompanyUnitAddressLabelToCompanyUnitAddress $spyCompanyUnitAddressLabelToCompanyUnitAddress Object to remove from the list of results
     *
     * @return $this|ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery The current query, for fluid interface
     */
    public function prune($spyCompanyUnitAddressLabelToCompanyUnitAddress = null)
    {
        if ($spyCompanyUnitAddressLabelToCompanyUnitAddress) {
            $this->addUsingAlias(SpyCompanyUnitAddressLabelToCompanyUnitAddressTableMap::COL_ID_COMPANY_UNIT_ADDRESS_LABEL_TO_COMPANY_UNIT_ADDRESS, $spyCompanyUnitAddressLabelToCompanyUnitAddress->getIdCompanyUnitAddressLabelToCompanyUnitAddress(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_company_unit_address_label_to_company_unit_address table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCompanyUnitAddressLabelToCompanyUnitAddressTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyCompanyUnitAddressLabelToCompanyUnitAddressTableMap::clearInstancePool();
            SpyCompanyUnitAddressLabelToCompanyUnitAddressTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCompanyUnitAddressLabelToCompanyUnitAddressTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyCompanyUnitAddressLabelToCompanyUnitAddressTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyCompanyUnitAddressLabelToCompanyUnitAddressTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyCompanyUnitAddressLabelToCompanyUnitAddressTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    // timestampable behavior

    /**
     * Filter by the latest updated
     *
     * @param      int $nbDays Maximum age of the latest update in days
     *
     * @return     $this|ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery The current query, for fluid interface
     */
    public function recentlyUpdated($nbDays = 7)
    {
        return $this->addUsingAlias(SpyCompanyUnitAddressLabelToCompanyUnitAddressTableMap::COL_UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by update date desc
     *
     * @return     $this|ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        return $this->addDescendingOrderByColumn(SpyCompanyUnitAddressLabelToCompanyUnitAddressTableMap::COL_UPDATED_AT);
    }

    /**
     * Order by update date asc
     *
     * @return     $this|ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        return $this->addAscendingOrderByColumn(SpyCompanyUnitAddressLabelToCompanyUnitAddressTableMap::COL_UPDATED_AT);
    }

    /**
     * Order by create date desc
     *
     * @return     $this|ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        return $this->addDescendingOrderByColumn(SpyCompanyUnitAddressLabelToCompanyUnitAddressTableMap::COL_CREATED_AT);
    }

    /**
     * Filter by the latest created
     *
     * @param      int $nbDays Maximum age of in days
     *
     * @return     $this|ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        return $this->addUsingAlias(SpyCompanyUnitAddressLabelToCompanyUnitAddressTableMap::COL_CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by create date asc
     *
     * @return     $this|ChildSpyCompanyUnitAddressLabelToCompanyUnitAddressQuery The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        return $this->addAscendingOrderByColumn(SpyCompanyUnitAddressLabelToCompanyUnitAddressTableMap::COL_CREATED_AT);
    }

} // SpyCompanyUnitAddressLabelToCompanyUnitAddressQuery
