<?php

namespace Orm\Zed\User\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\Acl\Persistence\SpyAclUserHasGroup;
use Orm\Zed\Cms\Persistence\SpyCmsVersion;
use Orm\Zed\CustomerNote\Persistence\SpyCustomerNote;
use Orm\Zed\Customer\Persistence\SpyCustomer;
use Orm\Zed\Locale\Persistence\SpyLocale;
use Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductScheduleList;
use Orm\Zed\UserPasswordReset\Persistence\SpyResetPassword;
use Orm\Zed\User\Persistence\SpyUser as ChildSpyUser;
use Orm\Zed\User\Persistence\SpyUserArchive as ChildSpyUserArchive;
use Orm\Zed\User\Persistence\SpyUserQuery as ChildSpyUserQuery;
use Orm\Zed\User\Persistence\Map\SpyUserTableMap;
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
 * Base class that represents a query for the 'spy_user' table.
 *
 *
 *
 * @method     ChildSpyUserQuery orderByIdUser($order = Criteria::ASC) Order by the id_user column
 * @method     ChildSpyUserQuery orderByFkLocale($order = Criteria::ASC) Order by the fk_locale column
 * @method     ChildSpyUserQuery orderByFirstName($order = Criteria::ASC) Order by the first_name column
 * @method     ChildSpyUserQuery orderByIsAgent($order = Criteria::ASC) Order by the is_agent column
 * @method     ChildSpyUserQuery orderByLastLogin($order = Criteria::ASC) Order by the last_login column
 * @method     ChildSpyUserQuery orderByLastName($order = Criteria::ASC) Order by the last_name column
 * @method     ChildSpyUserQuery orderByPassword($order = Criteria::ASC) Order by the password column
 * @method     ChildSpyUserQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildSpyUserQuery orderByUsername($order = Criteria::ASC) Order by the username column
 * @method     ChildSpyUserQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildSpyUserQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ChildSpyUserQuery groupByIdUser() Group by the id_user column
 * @method     ChildSpyUserQuery groupByFkLocale() Group by the fk_locale column
 * @method     ChildSpyUserQuery groupByFirstName() Group by the first_name column
 * @method     ChildSpyUserQuery groupByIsAgent() Group by the is_agent column
 * @method     ChildSpyUserQuery groupByLastLogin() Group by the last_login column
 * @method     ChildSpyUserQuery groupByLastName() Group by the last_name column
 * @method     ChildSpyUserQuery groupByPassword() Group by the password column
 * @method     ChildSpyUserQuery groupByStatus() Group by the status column
 * @method     ChildSpyUserQuery groupByUsername() Group by the username column
 * @method     ChildSpyUserQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildSpyUserQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ChildSpyUserQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyUserQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyUserQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyUserQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyUserQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyUserQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyUserQuery leftJoinSpyLocale($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyLocale relation
 * @method     ChildSpyUserQuery rightJoinSpyLocale($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyLocale relation
 * @method     ChildSpyUserQuery innerJoinSpyLocale($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyLocale relation
 *
 * @method     ChildSpyUserQuery joinWithSpyLocale($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyLocale relation
 *
 * @method     ChildSpyUserQuery leftJoinWithSpyLocale() Adds a LEFT JOIN clause and with to the query using the SpyLocale relation
 * @method     ChildSpyUserQuery rightJoinWithSpyLocale() Adds a RIGHT JOIN clause and with to the query using the SpyLocale relation
 * @method     ChildSpyUserQuery innerJoinWithSpyLocale() Adds a INNER JOIN clause and with to the query using the SpyLocale relation
 *
 * @method     ChildSpyUserQuery leftJoinSpyAclUserHasGroup($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyAclUserHasGroup relation
 * @method     ChildSpyUserQuery rightJoinSpyAclUserHasGroup($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyAclUserHasGroup relation
 * @method     ChildSpyUserQuery innerJoinSpyAclUserHasGroup($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyAclUserHasGroup relation
 *
 * @method     ChildSpyUserQuery joinWithSpyAclUserHasGroup($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyAclUserHasGroup relation
 *
 * @method     ChildSpyUserQuery leftJoinWithSpyAclUserHasGroup() Adds a LEFT JOIN clause and with to the query using the SpyAclUserHasGroup relation
 * @method     ChildSpyUserQuery rightJoinWithSpyAclUserHasGroup() Adds a RIGHT JOIN clause and with to the query using the SpyAclUserHasGroup relation
 * @method     ChildSpyUserQuery innerJoinWithSpyAclUserHasGroup() Adds a INNER JOIN clause and with to the query using the SpyAclUserHasGroup relation
 *
 * @method     ChildSpyUserQuery leftJoinSpyCmsVersion($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyCmsVersion relation
 * @method     ChildSpyUserQuery rightJoinSpyCmsVersion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyCmsVersion relation
 * @method     ChildSpyUserQuery innerJoinSpyCmsVersion($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyCmsVersion relation
 *
 * @method     ChildSpyUserQuery joinWithSpyCmsVersion($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyCmsVersion relation
 *
 * @method     ChildSpyUserQuery leftJoinWithSpyCmsVersion() Adds a LEFT JOIN clause and with to the query using the SpyCmsVersion relation
 * @method     ChildSpyUserQuery rightJoinWithSpyCmsVersion() Adds a RIGHT JOIN clause and with to the query using the SpyCmsVersion relation
 * @method     ChildSpyUserQuery innerJoinWithSpyCmsVersion() Adds a INNER JOIN clause and with to the query using the SpyCmsVersion relation
 *
 * @method     ChildSpyUserQuery leftJoinSpyCustomer($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyCustomer relation
 * @method     ChildSpyUserQuery rightJoinSpyCustomer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyCustomer relation
 * @method     ChildSpyUserQuery innerJoinSpyCustomer($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyCustomer relation
 *
 * @method     ChildSpyUserQuery joinWithSpyCustomer($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyCustomer relation
 *
 * @method     ChildSpyUserQuery leftJoinWithSpyCustomer() Adds a LEFT JOIN clause and with to the query using the SpyCustomer relation
 * @method     ChildSpyUserQuery rightJoinWithSpyCustomer() Adds a RIGHT JOIN clause and with to the query using the SpyCustomer relation
 * @method     ChildSpyUserQuery innerJoinWithSpyCustomer() Adds a INNER JOIN clause and with to the query using the SpyCustomer relation
 *
 * @method     ChildSpyUserQuery leftJoinCustomerNote($relationAlias = null) Adds a LEFT JOIN clause to the query using the CustomerNote relation
 * @method     ChildSpyUserQuery rightJoinCustomerNote($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CustomerNote relation
 * @method     ChildSpyUserQuery innerJoinCustomerNote($relationAlias = null) Adds a INNER JOIN clause to the query using the CustomerNote relation
 *
 * @method     ChildSpyUserQuery joinWithCustomerNote($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the CustomerNote relation
 *
 * @method     ChildSpyUserQuery leftJoinWithCustomerNote() Adds a LEFT JOIN clause and with to the query using the CustomerNote relation
 * @method     ChildSpyUserQuery rightJoinWithCustomerNote() Adds a RIGHT JOIN clause and with to the query using the CustomerNote relation
 * @method     ChildSpyUserQuery innerJoinWithCustomerNote() Adds a INNER JOIN clause and with to the query using the CustomerNote relation
 *
 * @method     ChildSpyUserQuery leftJoinPriceProductScheduleList($relationAlias = null) Adds a LEFT JOIN clause to the query using the PriceProductScheduleList relation
 * @method     ChildSpyUserQuery rightJoinPriceProductScheduleList($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PriceProductScheduleList relation
 * @method     ChildSpyUserQuery innerJoinPriceProductScheduleList($relationAlias = null) Adds a INNER JOIN clause to the query using the PriceProductScheduleList relation
 *
 * @method     ChildSpyUserQuery joinWithPriceProductScheduleList($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the PriceProductScheduleList relation
 *
 * @method     ChildSpyUserQuery leftJoinWithPriceProductScheduleList() Adds a LEFT JOIN clause and with to the query using the PriceProductScheduleList relation
 * @method     ChildSpyUserQuery rightJoinWithPriceProductScheduleList() Adds a RIGHT JOIN clause and with to the query using the PriceProductScheduleList relation
 * @method     ChildSpyUserQuery innerJoinWithPriceProductScheduleList() Adds a INNER JOIN clause and with to the query using the PriceProductScheduleList relation
 *
 * @method     ChildSpyUserQuery leftJoinUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the User relation
 * @method     ChildSpyUserQuery rightJoinUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the User relation
 * @method     ChildSpyUserQuery innerJoinUser($relationAlias = null) Adds a INNER JOIN clause to the query using the User relation
 *
 * @method     ChildSpyUserQuery joinWithUser($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the User relation
 *
 * @method     ChildSpyUserQuery leftJoinWithUser() Adds a LEFT JOIN clause and with to the query using the User relation
 * @method     ChildSpyUserQuery rightJoinWithUser() Adds a RIGHT JOIN clause and with to the query using the User relation
 * @method     ChildSpyUserQuery innerJoinWithUser() Adds a INNER JOIN clause and with to the query using the User relation
 *
 * @method     \Orm\Zed\Locale\Persistence\SpyLocaleQuery|\Orm\Zed\Acl\Persistence\SpyAclUserHasGroupQuery|\Orm\Zed\Cms\Persistence\SpyCmsVersionQuery|\Orm\Zed\Customer\Persistence\SpyCustomerQuery|\Orm\Zed\CustomerNote\Persistence\SpyCustomerNoteQuery|\Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductScheduleListQuery|\Orm\Zed\UserPasswordReset\Persistence\SpyResetPasswordQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyUser|null findOne(ConnectionInterface $con = null) Return the first ChildSpyUser matching the query
 * @method     ChildSpyUser findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyUser matching the query, or a new ChildSpyUser object populated from the query conditions when no match is found
 *
 * @method     ChildSpyUser|null findOneByIdUser(int $id_user) Return the first ChildSpyUser filtered by the id_user column
 * @method     ChildSpyUser|null findOneByFkLocale(int $fk_locale) Return the first ChildSpyUser filtered by the fk_locale column
 * @method     ChildSpyUser|null findOneByFirstName(string $first_name) Return the first ChildSpyUser filtered by the first_name column
 * @method     ChildSpyUser|null findOneByIsAgent(boolean $is_agent) Return the first ChildSpyUser filtered by the is_agent column
 * @method     ChildSpyUser|null findOneByLastLogin(string $last_login) Return the first ChildSpyUser filtered by the last_login column
 * @method     ChildSpyUser|null findOneByLastName(string $last_name) Return the first ChildSpyUser filtered by the last_name column
 * @method     ChildSpyUser|null findOneByPassword(string $password) Return the first ChildSpyUser filtered by the password column
 * @method     ChildSpyUser|null findOneByStatus(int $status) Return the first ChildSpyUser filtered by the status column
 * @method     ChildSpyUser|null findOneByUsername(string $username) Return the first ChildSpyUser filtered by the username column
 * @method     ChildSpyUser|null findOneByCreatedAt(string $created_at) Return the first ChildSpyUser filtered by the created_at column
 * @method     ChildSpyUser|null findOneByUpdatedAt(string $updated_at) Return the first ChildSpyUser filtered by the updated_at column *

 * @method     ChildSpyUser requirePk($key, ConnectionInterface $con = null) Return the ChildSpyUser by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyUser requireOne(ConnectionInterface $con = null) Return the first ChildSpyUser matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyUser requireOneByIdUser(int $id_user) Return the first ChildSpyUser filtered by the id_user column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyUser requireOneByFkLocale(int $fk_locale) Return the first ChildSpyUser filtered by the fk_locale column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyUser requireOneByFirstName(string $first_name) Return the first ChildSpyUser filtered by the first_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyUser requireOneByIsAgent(boolean $is_agent) Return the first ChildSpyUser filtered by the is_agent column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyUser requireOneByLastLogin(string $last_login) Return the first ChildSpyUser filtered by the last_login column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyUser requireOneByLastName(string $last_name) Return the first ChildSpyUser filtered by the last_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyUser requireOneByPassword(string $password) Return the first ChildSpyUser filtered by the password column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyUser requireOneByStatus(int $status) Return the first ChildSpyUser filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyUser requireOneByUsername(string $username) Return the first ChildSpyUser filtered by the username column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyUser requireOneByCreatedAt(string $created_at) Return the first ChildSpyUser filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyUser requireOneByUpdatedAt(string $updated_at) Return the first ChildSpyUser filtered by the updated_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyUser[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyUser objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyUser> find(ConnectionInterface $con = null) Return ChildSpyUser objects based on current ModelCriteria
 * @method     ChildSpyUser[]|ObjectCollection findByIdUser(int $id_user) Return ChildSpyUser objects filtered by the id_user column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyUser> findByIdUser(int $id_user) Return ChildSpyUser objects filtered by the id_user column
 * @method     ChildSpyUser[]|ObjectCollection findByFkLocale(int $fk_locale) Return ChildSpyUser objects filtered by the fk_locale column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyUser> findByFkLocale(int $fk_locale) Return ChildSpyUser objects filtered by the fk_locale column
 * @method     ChildSpyUser[]|ObjectCollection findByFirstName(string $first_name) Return ChildSpyUser objects filtered by the first_name column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyUser> findByFirstName(string $first_name) Return ChildSpyUser objects filtered by the first_name column
 * @method     ChildSpyUser[]|ObjectCollection findByIsAgent(boolean $is_agent) Return ChildSpyUser objects filtered by the is_agent column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyUser> findByIsAgent(boolean $is_agent) Return ChildSpyUser objects filtered by the is_agent column
 * @method     ChildSpyUser[]|ObjectCollection findByLastLogin(string $last_login) Return ChildSpyUser objects filtered by the last_login column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyUser> findByLastLogin(string $last_login) Return ChildSpyUser objects filtered by the last_login column
 * @method     ChildSpyUser[]|ObjectCollection findByLastName(string $last_name) Return ChildSpyUser objects filtered by the last_name column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyUser> findByLastName(string $last_name) Return ChildSpyUser objects filtered by the last_name column
 * @method     ChildSpyUser[]|ObjectCollection findByPassword(string $password) Return ChildSpyUser objects filtered by the password column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyUser> findByPassword(string $password) Return ChildSpyUser objects filtered by the password column
 * @method     ChildSpyUser[]|ObjectCollection findByStatus(int $status) Return ChildSpyUser objects filtered by the status column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyUser> findByStatus(int $status) Return ChildSpyUser objects filtered by the status column
 * @method     ChildSpyUser[]|ObjectCollection findByUsername(string $username) Return ChildSpyUser objects filtered by the username column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyUser> findByUsername(string $username) Return ChildSpyUser objects filtered by the username column
 * @method     ChildSpyUser[]|ObjectCollection findByCreatedAt(string $created_at) Return ChildSpyUser objects filtered by the created_at column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyUser> findByCreatedAt(string $created_at) Return ChildSpyUser objects filtered by the created_at column
 * @method     ChildSpyUser[]|ObjectCollection findByUpdatedAt(string $updated_at) Return ChildSpyUser objects filtered by the updated_at column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyUser> findByUpdatedAt(string $updated_at) Return ChildSpyUser objects filtered by the updated_at column
 * @method     ChildSpyUser[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyUser> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyUserQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\User\Persistence\Base\SpyUserQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\User\\Persistence\\SpyUser', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyUserQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyUserQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyUserQuery) {
            return $criteria;
        }
        $query = new ChildSpyUserQuery();
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
     * @return ChildSpyUser|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyUserTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyUser A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_user, fk_locale, first_name, is_agent, last_login, last_name, password, status, username, created_at, updated_at FROM spy_user WHERE id_user = :p0';
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
            /** @var ChildSpyUser $obj */
            $obj = new ChildSpyUser();
            $obj->hydrate($row);
            SpyUserTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyUser|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyUserQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyUserTableMap::COL_ID_USER, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyUserQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyUserTableMap::COL_ID_USER, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idUser Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdUser_Between(array $idUser)
    {
        return $this->filterByIdUser($idUser, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idUsers Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdUser_In(array $idUsers)
    {
        return $this->filterByIdUser($idUsers, Criteria::IN);
    }

    /**
     * Filter the query on the id_user column
     *
     * Example usage:
     * <code>
     * $query->filterByIdUser(1234); // WHERE id_user = 1234
     * $query->filterByIdUser(array(12, 34), Criteria::IN); // WHERE id_user IN (12, 34)
     * $query->filterByIdUser(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_user > 12
     * </code>
     *
     * @param     mixed $idUser The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdUser($idUser = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idUser)) {
            $useMinMax = false;
            if (isset($idUser['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyUserTableMap::COL_ID_USER, $idUser['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idUser['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyUserTableMap::COL_ID_USER, $idUser['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idUser of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyUserTableMap::COL_ID_USER, $idUser, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkLocale Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkLocale_Between(array $fkLocale)
    {
        return $this->filterByFkLocale($fkLocale, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkLocales Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkLocale_In(array $fkLocales)
    {
        return $this->filterByFkLocale($fkLocales, Criteria::IN);
    }

    /**
     * Filter the query on the fk_locale column
     *
     * Example usage:
     * <code>
     * $query->filterByFkLocale(1234); // WHERE fk_locale = 1234
     * $query->filterByFkLocale(array(12, 34), Criteria::IN); // WHERE fk_locale IN (12, 34)
     * $query->filterByFkLocale(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_locale > 12
     * </code>
     *
     * @see       filterBySpyLocale()
     *
     * @param     mixed $fkLocale The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkLocale($fkLocale = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkLocale)) {
            $useMinMax = false;
            if (isset($fkLocale['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyUserTableMap::COL_FK_LOCALE, $fkLocale['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkLocale['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyUserTableMap::COL_FK_LOCALE, $fkLocale['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkLocale of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyUserTableMap::COL_FK_LOCALE, $fkLocale, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $firstNames Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFirstName_In(array $firstNames)
    {
        return $this->filterByFirstName($firstNames, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $firstName Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFirstName_Like($firstName)
    {
        return $this->filterByFirstName($firstName, Criteria::LIKE);
    }

    /**
     * Filter the query on the first_name column
     *
     * Example usage:
     * <code>
     * $query->filterByFirstName('fooValue');   // WHERE first_name = 'fooValue'
     * $query->filterByFirstName('%fooValue%', Criteria::LIKE); // WHERE first_name LIKE '%fooValue%'
     * $query->filterByFirstName([1, 'foo'], Criteria::IN); // WHERE first_name IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $firstName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFirstName($firstName = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $firstName = str_replace('*', '%', $firstName);
        }

        if (is_array($firstName) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$firstName of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyUserTableMap::COL_FIRST_NAME, $firstName, $comparison);

        return $query;
    }

    /**
     * Filter the query on the is_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByIsAgent(true); // WHERE is_agent = true
     * $query->filterByIsAgent('yes'); // WHERE is_agent = true
     * </code>
     *
     * @param     bool|string $isAgent The value to use as filter.
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
    public function filterByIsAgent($isAgent = null, $comparison = Criteria::EQUAL)
    {
        if (is_string($isAgent)) {
            $isAgent = in_array(strtolower($isAgent), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        $query = $this->addUsingAlias(SpyUserTableMap::COL_IS_AGENT, $isAgent, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $lastLogin Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLastLogin_Between(array $lastLogin)
    {
        return $this->filterByLastLogin($lastLogin, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $lastLogins Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLastLogin_In(array $lastLogins)
    {
        return $this->filterByLastLogin($lastLogins, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $lastLogin Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLastLogin_Like($lastLogin)
    {
        return $this->filterByLastLogin($lastLogin, Criteria::LIKE);
    }

    /**
     * Filter the query on the last_login column
     *
     * Example usage:
     * <code>
     * $query->filterByLastLogin('2011-03-14'); // WHERE last_login = '2011-03-14'
     * $query->filterByLastLogin('now'); // WHERE last_login = '2011-03-14'
     * $query->filterByLastLogin(array('max' => 'yesterday'), SprykerCriteria::BETWEEN); // WHERE last_login > '2011-03-13'
     * </code>
     *
     * @param     mixed $lastLogin The value to use as filter.
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
    public function filterByLastLogin($lastLogin = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($lastLogin)) {
            $useMinMax = false;
            if (isset($lastLogin['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyUserTableMap::COL_LAST_LOGIN, $lastLogin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lastLogin['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyUserTableMap::COL_LAST_LOGIN, $lastLogin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$lastLogin of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyUserTableMap::COL_LAST_LOGIN, $lastLogin, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $lastNames Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLastName_In(array $lastNames)
    {
        return $this->filterByLastName($lastNames, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $lastName Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLastName_Like($lastName)
    {
        return $this->filterByLastName($lastName, Criteria::LIKE);
    }

    /**
     * Filter the query on the last_name column
     *
     * Example usage:
     * <code>
     * $query->filterByLastName('fooValue');   // WHERE last_name = 'fooValue'
     * $query->filterByLastName('%fooValue%', Criteria::LIKE); // WHERE last_name LIKE '%fooValue%'
     * $query->filterByLastName([1, 'foo'], Criteria::IN); // WHERE last_name IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $lastName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByLastName($lastName = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $lastName = str_replace('*', '%', $lastName);
        }

        if (is_array($lastName) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$lastName of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyUserTableMap::COL_LAST_NAME, $lastName, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $passwords Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPassword_In(array $passwords)
    {
        return $this->filterByPassword($passwords, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $password Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPassword_Like($password)
    {
        return $this->filterByPassword($password, Criteria::LIKE);
    }

    /**
     * Filter the query on the password column
     *
     * Example usage:
     * <code>
     * $query->filterByPassword('fooValue');   // WHERE password = 'fooValue'
     * $query->filterByPassword('%fooValue%', Criteria::LIKE); // WHERE password LIKE '%fooValue%'
     * $query->filterByPassword([1, 'foo'], Criteria::IN); // WHERE password IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $password The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByPassword($password = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $password = str_replace('*', '%', $password);
        }

        if (is_array($password) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$password of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyUserTableMap::COL_PASSWORD, $password, $comparison);

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
     * Filter the query on the status column
     *
     * @param     mixed $status The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByStatus($status = null, $comparison = Criteria::EQUAL)
    {
        $valueSet = SpyUserTableMap::getValueSet(SpyUserTableMap::COL_STATUS);
        if (is_scalar($status)) {
            if (!in_array($status, $valueSet)) {
                throw new PropelException(sprintf('Value "%s" is not accepted in this enumerated column', $status));
            }
            $status = array_search($status, $valueSet);
        } elseif (is_array($status)) {
            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
            $convertedValues = array();
            foreach ($status as $value) {
                if (!in_array($value, $valueSet)) {
                    throw new PropelException(sprintf('Value "%s" is not accepted in this enumerated column', $value));
                }
                $convertedValues []= array_search($value, $valueSet);
            }
            $status = $convertedValues;
        }

        $query = $this->addUsingAlias(SpyUserTableMap::COL_STATUS, $status, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $usernames Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByUsername_In(array $usernames)
    {
        return $this->filterByUsername($usernames, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $username Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByUsername_Like($username)
    {
        return $this->filterByUsername($username, Criteria::LIKE);
    }

    /**
     * Filter the query on the username column
     *
     * Example usage:
     * <code>
     * $query->filterByUsername('fooValue');   // WHERE username = 'fooValue'
     * $query->filterByUsername('%fooValue%', Criteria::LIKE); // WHERE username LIKE '%fooValue%'
     * $query->filterByUsername([1, 'foo'], Criteria::IN); // WHERE username IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $username The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByUsername($username = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $username = str_replace('*', '%', $username);
        }

        if (is_array($username) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$username of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyUserTableMap::COL_USERNAME, $username, $comparison);

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
                $this->addUsingAlias(SpyUserTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyUserTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$createdAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyUserTableMap::COL_CREATED_AT, $createdAt, $comparison);

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
                $this->addUsingAlias(SpyUserTableMap::COL_UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyUserTableMap::COL_UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$updatedAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyUserTableMap::COL_UPDATED_AT, $updatedAt, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\Locale\Persistence\SpyLocale object
     *
     * @param \Orm\Zed\Locale\Persistence\SpyLocale|ObjectCollection $spyLocale The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyUserQuery The current query, for fluid interface
     */
    public function filterBySpyLocale($spyLocale, $comparison = null)
    {
        if ($spyLocale instanceof \Orm\Zed\Locale\Persistence\SpyLocale) {
            return $this
                ->addUsingAlias(SpyUserTableMap::COL_FK_LOCALE, $spyLocale->getIdLocale(), $comparison);
        } elseif ($spyLocale instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyUserTableMap::COL_FK_LOCALE, $spyLocale->toKeyValue('PrimaryKey', 'IdLocale'), $comparison);
        } else {
            throw new PropelException('filterBySpyLocale() only accepts arguments of type \Orm\Zed\Locale\Persistence\SpyLocale or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyLocale relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyUserQuery The current query, for fluid interface
     */
    public function joinSpyLocale($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyLocale');

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
            $this->addJoinObject($join, 'SpyLocale');
        }

        return $this;
    }

    /**
     * Use the SpyLocale relation SpyLocale object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Locale\Persistence\SpyLocaleQuery A secondary query class using the current class as primary query
     */
    public function useSpyLocaleQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinSpyLocale($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyLocale', '\Orm\Zed\Locale\Persistence\SpyLocaleQuery');
    }

    /**
     * Use the SpyLocale relation SpyLocale object
     *
     * @param callable(\Orm\Zed\Locale\Persistence\SpyLocaleQuery):\Orm\Zed\Locale\Persistence\SpyLocaleQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyLocaleQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useSpyLocaleQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyLocale table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Locale\Persistence\SpyLocaleQuery The inner query object of the EXISTS statement
     */
    public function useSpyLocaleExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyLocale', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyLocale table for a NOT EXISTS query.
     *
     * @see useSpyLocaleExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Locale\Persistence\SpyLocaleQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyLocaleNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyLocale', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Acl\Persistence\SpyAclUserHasGroup object
     *
     * @param \Orm\Zed\Acl\Persistence\SpyAclUserHasGroup|ObjectCollection $spyAclUserHasGroup the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyUserQuery The current query, for fluid interface
     */
    public function filterBySpyAclUserHasGroup($spyAclUserHasGroup, $comparison = null)
    {
        if ($spyAclUserHasGroup instanceof \Orm\Zed\Acl\Persistence\SpyAclUserHasGroup) {
            return $this
                ->addUsingAlias(SpyUserTableMap::COL_ID_USER, $spyAclUserHasGroup->getFkUser(), $comparison);
        } elseif ($spyAclUserHasGroup instanceof ObjectCollection) {
            return $this
                ->useSpyAclUserHasGroupQuery()
                ->filterByPrimaryKeys($spyAclUserHasGroup->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyAclUserHasGroup() only accepts arguments of type \Orm\Zed\Acl\Persistence\SpyAclUserHasGroup or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyAclUserHasGroup relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyUserQuery The current query, for fluid interface
     */
    public function joinSpyAclUserHasGroup($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyAclUserHasGroup');

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
            $this->addJoinObject($join, 'SpyAclUserHasGroup');
        }

        return $this;
    }

    /**
     * Use the SpyAclUserHasGroup relation SpyAclUserHasGroup object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Acl\Persistence\SpyAclUserHasGroupQuery A secondary query class using the current class as primary query
     */
    public function useSpyAclUserHasGroupQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyAclUserHasGroup($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyAclUserHasGroup', '\Orm\Zed\Acl\Persistence\SpyAclUserHasGroupQuery');
    }

    /**
     * Use the SpyAclUserHasGroup relation SpyAclUserHasGroup object
     *
     * @param callable(\Orm\Zed\Acl\Persistence\SpyAclUserHasGroupQuery):\Orm\Zed\Acl\Persistence\SpyAclUserHasGroupQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyAclUserHasGroupQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyAclUserHasGroupQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyAclUserHasGroup table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Acl\Persistence\SpyAclUserHasGroupQuery The inner query object of the EXISTS statement
     */
    public function useSpyAclUserHasGroupExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyAclUserHasGroup', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyAclUserHasGroup table for a NOT EXISTS query.
     *
     * @see useSpyAclUserHasGroupExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Acl\Persistence\SpyAclUserHasGroupQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyAclUserHasGroupNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyAclUserHasGroup', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Cms\Persistence\SpyCmsVersion object
     *
     * @param \Orm\Zed\Cms\Persistence\SpyCmsVersion|ObjectCollection $spyCmsVersion the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyUserQuery The current query, for fluid interface
     */
    public function filterBySpyCmsVersion($spyCmsVersion, $comparison = null)
    {
        if ($spyCmsVersion instanceof \Orm\Zed\Cms\Persistence\SpyCmsVersion) {
            return $this
                ->addUsingAlias(SpyUserTableMap::COL_ID_USER, $spyCmsVersion->getFkUser(), $comparison);
        } elseif ($spyCmsVersion instanceof ObjectCollection) {
            return $this
                ->useSpyCmsVersionQuery()
                ->filterByPrimaryKeys($spyCmsVersion->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyCmsVersion() only accepts arguments of type \Orm\Zed\Cms\Persistence\SpyCmsVersion or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyCmsVersion relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyUserQuery The current query, for fluid interface
     */
    public function joinSpyCmsVersion($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyCmsVersion');

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
            $this->addJoinObject($join, 'SpyCmsVersion');
        }

        return $this;
    }

    /**
     * Use the SpyCmsVersion relation SpyCmsVersion object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Cms\Persistence\SpyCmsVersionQuery A secondary query class using the current class as primary query
     */
    public function useSpyCmsVersionQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinSpyCmsVersion($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyCmsVersion', '\Orm\Zed\Cms\Persistence\SpyCmsVersionQuery');
    }

    /**
     * Use the SpyCmsVersion relation SpyCmsVersion object
     *
     * @param callable(\Orm\Zed\Cms\Persistence\SpyCmsVersionQuery):\Orm\Zed\Cms\Persistence\SpyCmsVersionQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyCmsVersionQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useSpyCmsVersionQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyCmsVersion table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Cms\Persistence\SpyCmsVersionQuery The inner query object of the EXISTS statement
     */
    public function useSpyCmsVersionExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyCmsVersion', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyCmsVersion table for a NOT EXISTS query.
     *
     * @see useSpyCmsVersionExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Cms\Persistence\SpyCmsVersionQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyCmsVersionNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyCmsVersion', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Customer\Persistence\SpyCustomer object
     *
     * @param \Orm\Zed\Customer\Persistence\SpyCustomer|ObjectCollection $spyCustomer the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyUserQuery The current query, for fluid interface
     */
    public function filterBySpyCustomer($spyCustomer, $comparison = null)
    {
        if ($spyCustomer instanceof \Orm\Zed\Customer\Persistence\SpyCustomer) {
            return $this
                ->addUsingAlias(SpyUserTableMap::COL_ID_USER, $spyCustomer->getFkUser(), $comparison);
        } elseif ($spyCustomer instanceof ObjectCollection) {
            return $this
                ->useSpyCustomerQuery()
                ->filterByPrimaryKeys($spyCustomer->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyCustomer() only accepts arguments of type \Orm\Zed\Customer\Persistence\SpyCustomer or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyCustomer relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyUserQuery The current query, for fluid interface
     */
    public function joinSpyCustomer($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyCustomer');

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
            $this->addJoinObject($join, 'SpyCustomer');
        }

        return $this;
    }

    /**
     * Use the SpyCustomer relation SpyCustomer object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Customer\Persistence\SpyCustomerQuery A secondary query class using the current class as primary query
     */
    public function useSpyCustomerQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinSpyCustomer($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyCustomer', '\Orm\Zed\Customer\Persistence\SpyCustomerQuery');
    }

    /**
     * Use the SpyCustomer relation SpyCustomer object
     *
     * @param callable(\Orm\Zed\Customer\Persistence\SpyCustomerQuery):\Orm\Zed\Customer\Persistence\SpyCustomerQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyCustomerQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useSpyCustomerQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyCustomer table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Customer\Persistence\SpyCustomerQuery The inner query object of the EXISTS statement
     */
    public function useSpyCustomerExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyCustomer', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyCustomer table for a NOT EXISTS query.
     *
     * @see useSpyCustomerExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Customer\Persistence\SpyCustomerQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyCustomerNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyCustomer', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\CustomerNote\Persistence\SpyCustomerNote object
     *
     * @param \Orm\Zed\CustomerNote\Persistence\SpyCustomerNote|ObjectCollection $spyCustomerNote the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyUserQuery The current query, for fluid interface
     */
    public function filterByCustomerNote($spyCustomerNote, $comparison = null)
    {
        if ($spyCustomerNote instanceof \Orm\Zed\CustomerNote\Persistence\SpyCustomerNote) {
            return $this
                ->addUsingAlias(SpyUserTableMap::COL_ID_USER, $spyCustomerNote->getFkUser(), $comparison);
        } elseif ($spyCustomerNote instanceof ObjectCollection) {
            return $this
                ->useCustomerNoteQuery()
                ->filterByPrimaryKeys($spyCustomerNote->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCustomerNote() only accepts arguments of type \Orm\Zed\CustomerNote\Persistence\SpyCustomerNote or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CustomerNote relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyUserQuery The current query, for fluid interface
     */
    public function joinCustomerNote($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CustomerNote');

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
            $this->addJoinObject($join, 'CustomerNote');
        }

        return $this;
    }

    /**
     * Use the CustomerNote relation SpyCustomerNote object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\CustomerNote\Persistence\SpyCustomerNoteQuery A secondary query class using the current class as primary query
     */
    public function useCustomerNoteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCustomerNote($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CustomerNote', '\Orm\Zed\CustomerNote\Persistence\SpyCustomerNoteQuery');
    }

    /**
     * Use the CustomerNote relation SpyCustomerNote object
     *
     * @param callable(\Orm\Zed\CustomerNote\Persistence\SpyCustomerNoteQuery):\Orm\Zed\CustomerNote\Persistence\SpyCustomerNoteQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withCustomerNoteQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useCustomerNoteQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the CustomerNote relation to the SpyCustomerNote table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\CustomerNote\Persistence\SpyCustomerNoteQuery The inner query object of the EXISTS statement
     */
    public function useCustomerNoteExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('CustomerNote', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the CustomerNote relation to the SpyCustomerNote table for a NOT EXISTS query.
     *
     * @see useCustomerNoteExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\CustomerNote\Persistence\SpyCustomerNoteQuery The inner query object of the NOT EXISTS statement
     */
    public function useCustomerNoteNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('CustomerNote', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductScheduleList object
     *
     * @param \Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductScheduleList|ObjectCollection $spyPriceProductScheduleList the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyUserQuery The current query, for fluid interface
     */
    public function filterByPriceProductScheduleList($spyPriceProductScheduleList, $comparison = null)
    {
        if ($spyPriceProductScheduleList instanceof \Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductScheduleList) {
            return $this
                ->addUsingAlias(SpyUserTableMap::COL_ID_USER, $spyPriceProductScheduleList->getFkUser(), $comparison);
        } elseif ($spyPriceProductScheduleList instanceof ObjectCollection) {
            return $this
                ->usePriceProductScheduleListQuery()
                ->filterByPrimaryKeys($spyPriceProductScheduleList->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPriceProductScheduleList() only accepts arguments of type \Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductScheduleList or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PriceProductScheduleList relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyUserQuery The current query, for fluid interface
     */
    public function joinPriceProductScheduleList($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PriceProductScheduleList');

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
            $this->addJoinObject($join, 'PriceProductScheduleList');
        }

        return $this;
    }

    /**
     * Use the PriceProductScheduleList relation SpyPriceProductScheduleList object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductScheduleListQuery A secondary query class using the current class as primary query
     */
    public function usePriceProductScheduleListQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinPriceProductScheduleList($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PriceProductScheduleList', '\Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductScheduleListQuery');
    }

    /**
     * Use the PriceProductScheduleList relation SpyPriceProductScheduleList object
     *
     * @param callable(\Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductScheduleListQuery):\Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductScheduleListQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withPriceProductScheduleListQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->usePriceProductScheduleListQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the PriceProductScheduleList relation to the SpyPriceProductScheduleList table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductScheduleListQuery The inner query object of the EXISTS statement
     */
    public function usePriceProductScheduleListExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('PriceProductScheduleList', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the PriceProductScheduleList relation to the SpyPriceProductScheduleList table for a NOT EXISTS query.
     *
     * @see usePriceProductScheduleListExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductScheduleListQuery The inner query object of the NOT EXISTS statement
     */
    public function usePriceProductScheduleListNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('PriceProductScheduleList', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\UserPasswordReset\Persistence\SpyResetPassword object
     *
     * @param \Orm\Zed\UserPasswordReset\Persistence\SpyResetPassword|ObjectCollection $spyResetPassword the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyUserQuery The current query, for fluid interface
     */
    public function filterByUser($spyResetPassword, $comparison = null)
    {
        if ($spyResetPassword instanceof \Orm\Zed\UserPasswordReset\Persistence\SpyResetPassword) {
            return $this
                ->addUsingAlias(SpyUserTableMap::COL_ID_USER, $spyResetPassword->getFkUser(), $comparison);
        } elseif ($spyResetPassword instanceof ObjectCollection) {
            return $this
                ->useUserQuery()
                ->filterByPrimaryKeys($spyResetPassword->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByUser() only accepts arguments of type \Orm\Zed\UserPasswordReset\Persistence\SpyResetPassword or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the User relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyUserQuery The current query, for fluid interface
     */
    public function joinUser($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('User');

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
            $this->addJoinObject($join, 'User');
        }

        return $this;
    }

    /**
     * Use the User relation SpyResetPassword object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\UserPasswordReset\Persistence\SpyResetPasswordQuery A secondary query class using the current class as primary query
     */
    public function useUserQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUser($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'User', '\Orm\Zed\UserPasswordReset\Persistence\SpyResetPasswordQuery');
    }

    /**
     * Use the User relation SpyResetPassword object
     *
     * @param callable(\Orm\Zed\UserPasswordReset\Persistence\SpyResetPasswordQuery):\Orm\Zed\UserPasswordReset\Persistence\SpyResetPasswordQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withUserQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useUserQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the User relation to the SpyResetPassword table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\UserPasswordReset\Persistence\SpyResetPasswordQuery The inner query object of the EXISTS statement
     */
    public function useUserExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('User', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the User relation to the SpyResetPassword table for a NOT EXISTS query.
     *
     * @see useUserExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\UserPasswordReset\Persistence\SpyResetPasswordQuery The inner query object of the NOT EXISTS statement
     */
    public function useUserNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('User', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related SpyAclGroup object
     * using the spy_acl_user_has_group table as cross reference
     *
     * @param SpyAclGroup $spyAclGroup the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyUserQuery The current query, for fluid interface
     */
    public function filterBySpyAclGroup($spyAclGroup, $comparison = Criteria::EQUAL)
    {
        return $this
            ->useSpyAclUserHasGroupQuery()
            ->filterBySpyAclGroup($spyAclGroup, $comparison)
            ->endUse();
    }

    /**
     * Exclude object from result
     *
     * @param   ChildSpyUser $spyUser Object to remove from the list of results
     *
     * @return $this|ChildSpyUserQuery The current query, for fluid interface
     */
    public function prune($spyUser = null)
    {
        if ($spyUser) {
            $this->addUsingAlias(SpyUserTableMap::COL_ID_USER, $spyUser->getIdUser(), Criteria::NOT_EQUAL);
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
     * Deletes all rows from the spy_user table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyUserTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyUserTableMap::clearInstancePool();
            SpyUserTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyUserTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyUserTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyUserTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyUserTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    // timestampable behavior

    /**
     * Filter by the latest updated
     *
     * @param      int $nbDays Maximum age of the latest update in days
     *
     * @return     $this|ChildSpyUserQuery The current query, for fluid interface
     */
    public function recentlyUpdated($nbDays = 7)
    {
        return $this->addUsingAlias(SpyUserTableMap::COL_UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by update date desc
     *
     * @return     $this|ChildSpyUserQuery The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        return $this->addDescendingOrderByColumn(SpyUserTableMap::COL_UPDATED_AT);
    }

    /**
     * Order by update date asc
     *
     * @return     $this|ChildSpyUserQuery The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        return $this->addAscendingOrderByColumn(SpyUserTableMap::COL_UPDATED_AT);
    }

    /**
     * Order by create date desc
     *
     * @return     $this|ChildSpyUserQuery The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        return $this->addDescendingOrderByColumn(SpyUserTableMap::COL_CREATED_AT);
    }

    /**
     * Filter by the latest created
     *
     * @param      int $nbDays Maximum age of in days
     *
     * @return     $this|ChildSpyUserQuery The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        return $this->addUsingAlias(SpyUserTableMap::COL_CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by create date asc
     *
     * @return     $this|ChildSpyUserQuery The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        return $this->addAscendingOrderByColumn(SpyUserTableMap::COL_CREATED_AT);
    }

    // archivable behavior

    /**
     * Copy the data of the objects satisfying the query into ChildSpyUserArchive archive objects.
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyUserTableMap::DATABASE_NAME);
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

} // SpyUserQuery
