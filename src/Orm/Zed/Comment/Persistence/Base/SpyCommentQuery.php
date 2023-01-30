<?php

namespace Orm\Zed\Comment\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\Comment\Persistence\SpyComment as ChildSpyComment;
use Orm\Zed\Comment\Persistence\SpyCommentQuery as ChildSpyCommentQuery;
use Orm\Zed\Comment\Persistence\Map\SpyCommentTableMap;
use Orm\Zed\Customer\Persistence\SpyCustomer;
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
 * Base class that represents a query for the 'spy_comment' table.
 *
 *
 *
 * @method     ChildSpyCommentQuery orderByIdComment($order = Criteria::ASC) Order by the id_comment column
 * @method     ChildSpyCommentQuery orderByFkCommentThread($order = Criteria::ASC) Order by the fk_comment_thread column
 * @method     ChildSpyCommentQuery orderByFkCustomer($order = Criteria::ASC) Order by the fk_customer column
 * @method     ChildSpyCommentQuery orderByIsDeleted($order = Criteria::ASC) Order by the is_deleted column
 * @method     ChildSpyCommentQuery orderByIsUpdated($order = Criteria::ASC) Order by the is_updated column
 * @method     ChildSpyCommentQuery orderByKey($order = Criteria::ASC) Order by the key column
 * @method     ChildSpyCommentQuery orderByMessage($order = Criteria::ASC) Order by the message column
 * @method     ChildSpyCommentQuery orderByUuid($order = Criteria::ASC) Order by the uuid column
 * @method     ChildSpyCommentQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildSpyCommentQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ChildSpyCommentQuery groupByIdComment() Group by the id_comment column
 * @method     ChildSpyCommentQuery groupByFkCommentThread() Group by the fk_comment_thread column
 * @method     ChildSpyCommentQuery groupByFkCustomer() Group by the fk_customer column
 * @method     ChildSpyCommentQuery groupByIsDeleted() Group by the is_deleted column
 * @method     ChildSpyCommentQuery groupByIsUpdated() Group by the is_updated column
 * @method     ChildSpyCommentQuery groupByKey() Group by the key column
 * @method     ChildSpyCommentQuery groupByMessage() Group by the message column
 * @method     ChildSpyCommentQuery groupByUuid() Group by the uuid column
 * @method     ChildSpyCommentQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildSpyCommentQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ChildSpyCommentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyCommentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyCommentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyCommentQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyCommentQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyCommentQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyCommentQuery leftJoinSpyCustomer($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyCustomer relation
 * @method     ChildSpyCommentQuery rightJoinSpyCustomer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyCustomer relation
 * @method     ChildSpyCommentQuery innerJoinSpyCustomer($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyCustomer relation
 *
 * @method     ChildSpyCommentQuery joinWithSpyCustomer($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyCustomer relation
 *
 * @method     ChildSpyCommentQuery leftJoinWithSpyCustomer() Adds a LEFT JOIN clause and with to the query using the SpyCustomer relation
 * @method     ChildSpyCommentQuery rightJoinWithSpyCustomer() Adds a RIGHT JOIN clause and with to the query using the SpyCustomer relation
 * @method     ChildSpyCommentQuery innerJoinWithSpyCustomer() Adds a INNER JOIN clause and with to the query using the SpyCustomer relation
 *
 * @method     ChildSpyCommentQuery leftJoinSpyCommentThread($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyCommentThread relation
 * @method     ChildSpyCommentQuery rightJoinSpyCommentThread($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyCommentThread relation
 * @method     ChildSpyCommentQuery innerJoinSpyCommentThread($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyCommentThread relation
 *
 * @method     ChildSpyCommentQuery joinWithSpyCommentThread($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyCommentThread relation
 *
 * @method     ChildSpyCommentQuery leftJoinWithSpyCommentThread() Adds a LEFT JOIN clause and with to the query using the SpyCommentThread relation
 * @method     ChildSpyCommentQuery rightJoinWithSpyCommentThread() Adds a RIGHT JOIN clause and with to the query using the SpyCommentThread relation
 * @method     ChildSpyCommentQuery innerJoinWithSpyCommentThread() Adds a INNER JOIN clause and with to the query using the SpyCommentThread relation
 *
 * @method     ChildSpyCommentQuery leftJoinSpyCommentToCommentTag($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyCommentToCommentTag relation
 * @method     ChildSpyCommentQuery rightJoinSpyCommentToCommentTag($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyCommentToCommentTag relation
 * @method     ChildSpyCommentQuery innerJoinSpyCommentToCommentTag($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyCommentToCommentTag relation
 *
 * @method     ChildSpyCommentQuery joinWithSpyCommentToCommentTag($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyCommentToCommentTag relation
 *
 * @method     ChildSpyCommentQuery leftJoinWithSpyCommentToCommentTag() Adds a LEFT JOIN clause and with to the query using the SpyCommentToCommentTag relation
 * @method     ChildSpyCommentQuery rightJoinWithSpyCommentToCommentTag() Adds a RIGHT JOIN clause and with to the query using the SpyCommentToCommentTag relation
 * @method     ChildSpyCommentQuery innerJoinWithSpyCommentToCommentTag() Adds a INNER JOIN clause and with to the query using the SpyCommentToCommentTag relation
 *
 * @method     \Orm\Zed\Customer\Persistence\SpyCustomerQuery|\Orm\Zed\Comment\Persistence\SpyCommentThreadQuery|\Orm\Zed\Comment\Persistence\SpyCommentToCommentTagQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyComment|null findOne(ConnectionInterface $con = null) Return the first ChildSpyComment matching the query
 * @method     ChildSpyComment findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyComment matching the query, or a new ChildSpyComment object populated from the query conditions when no match is found
 *
 * @method     ChildSpyComment|null findOneByIdComment(int $id_comment) Return the first ChildSpyComment filtered by the id_comment column
 * @method     ChildSpyComment|null findOneByFkCommentThread(int $fk_comment_thread) Return the first ChildSpyComment filtered by the fk_comment_thread column
 * @method     ChildSpyComment|null findOneByFkCustomer(int $fk_customer) Return the first ChildSpyComment filtered by the fk_customer column
 * @method     ChildSpyComment|null findOneByIsDeleted(boolean $is_deleted) Return the first ChildSpyComment filtered by the is_deleted column
 * @method     ChildSpyComment|null findOneByIsUpdated(boolean $is_updated) Return the first ChildSpyComment filtered by the is_updated column
 * @method     ChildSpyComment|null findOneByKey(string $key) Return the first ChildSpyComment filtered by the key column
 * @method     ChildSpyComment|null findOneByMessage(string $message) Return the first ChildSpyComment filtered by the message column
 * @method     ChildSpyComment|null findOneByUuid(string $uuid) Return the first ChildSpyComment filtered by the uuid column
 * @method     ChildSpyComment|null findOneByCreatedAt(string $created_at) Return the first ChildSpyComment filtered by the created_at column
 * @method     ChildSpyComment|null findOneByUpdatedAt(string $updated_at) Return the first ChildSpyComment filtered by the updated_at column *

 * @method     ChildSpyComment requirePk($key, ConnectionInterface $con = null) Return the ChildSpyComment by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyComment requireOne(ConnectionInterface $con = null) Return the first ChildSpyComment matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyComment requireOneByIdComment(int $id_comment) Return the first ChildSpyComment filtered by the id_comment column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyComment requireOneByFkCommentThread(int $fk_comment_thread) Return the first ChildSpyComment filtered by the fk_comment_thread column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyComment requireOneByFkCustomer(int $fk_customer) Return the first ChildSpyComment filtered by the fk_customer column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyComment requireOneByIsDeleted(boolean $is_deleted) Return the first ChildSpyComment filtered by the is_deleted column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyComment requireOneByIsUpdated(boolean $is_updated) Return the first ChildSpyComment filtered by the is_updated column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyComment requireOneByKey(string $key) Return the first ChildSpyComment filtered by the key column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyComment requireOneByMessage(string $message) Return the first ChildSpyComment filtered by the message column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyComment requireOneByUuid(string $uuid) Return the first ChildSpyComment filtered by the uuid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyComment requireOneByCreatedAt(string $created_at) Return the first ChildSpyComment filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyComment requireOneByUpdatedAt(string $updated_at) Return the first ChildSpyComment filtered by the updated_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyComment[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyComment objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyComment> find(ConnectionInterface $con = null) Return ChildSpyComment objects based on current ModelCriteria
 * @method     ChildSpyComment[]|ObjectCollection findByIdComment(int $id_comment) Return ChildSpyComment objects filtered by the id_comment column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyComment> findByIdComment(int $id_comment) Return ChildSpyComment objects filtered by the id_comment column
 * @method     ChildSpyComment[]|ObjectCollection findByFkCommentThread(int $fk_comment_thread) Return ChildSpyComment objects filtered by the fk_comment_thread column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyComment> findByFkCommentThread(int $fk_comment_thread) Return ChildSpyComment objects filtered by the fk_comment_thread column
 * @method     ChildSpyComment[]|ObjectCollection findByFkCustomer(int $fk_customer) Return ChildSpyComment objects filtered by the fk_customer column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyComment> findByFkCustomer(int $fk_customer) Return ChildSpyComment objects filtered by the fk_customer column
 * @method     ChildSpyComment[]|ObjectCollection findByIsDeleted(boolean $is_deleted) Return ChildSpyComment objects filtered by the is_deleted column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyComment> findByIsDeleted(boolean $is_deleted) Return ChildSpyComment objects filtered by the is_deleted column
 * @method     ChildSpyComment[]|ObjectCollection findByIsUpdated(boolean $is_updated) Return ChildSpyComment objects filtered by the is_updated column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyComment> findByIsUpdated(boolean $is_updated) Return ChildSpyComment objects filtered by the is_updated column
 * @method     ChildSpyComment[]|ObjectCollection findByKey(string $key) Return ChildSpyComment objects filtered by the key column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyComment> findByKey(string $key) Return ChildSpyComment objects filtered by the key column
 * @method     ChildSpyComment[]|ObjectCollection findByMessage(string $message) Return ChildSpyComment objects filtered by the message column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyComment> findByMessage(string $message) Return ChildSpyComment objects filtered by the message column
 * @method     ChildSpyComment[]|ObjectCollection findByUuid(string $uuid) Return ChildSpyComment objects filtered by the uuid column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyComment> findByUuid(string $uuid) Return ChildSpyComment objects filtered by the uuid column
 * @method     ChildSpyComment[]|ObjectCollection findByCreatedAt(string $created_at) Return ChildSpyComment objects filtered by the created_at column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyComment> findByCreatedAt(string $created_at) Return ChildSpyComment objects filtered by the created_at column
 * @method     ChildSpyComment[]|ObjectCollection findByUpdatedAt(string $updated_at) Return ChildSpyComment objects filtered by the updated_at column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyComment> findByUpdatedAt(string $updated_at) Return ChildSpyComment objects filtered by the updated_at column
 * @method     ChildSpyComment[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyComment> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyCommentQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\Comment\Persistence\Base\SpyCommentQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\Comment\\Persistence\\SpyComment', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyCommentQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyCommentQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyCommentQuery) {
            return $criteria;
        }
        $query = new ChildSpyCommentQuery();
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
     * @return ChildSpyComment|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyCommentTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyComment A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT `id_comment`, `fk_comment_thread`, `fk_customer`, `is_deleted`, `is_updated`, `key`, `message`, `uuid`, `created_at`, `updated_at` FROM `spy_comment` WHERE `id_comment` = :p0';
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
            /** @var ChildSpyComment $obj */
            $obj = new ChildSpyComment();
            $obj->hydrate($row);
            SpyCommentTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyComment|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyCommentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyCommentTableMap::COL_ID_COMMENT, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyCommentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyCommentTableMap::COL_ID_COMMENT, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idComment Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdComment_Between(array $idComment)
    {
        return $this->filterByIdComment($idComment, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idComments Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdComment_In(array $idComments)
    {
        return $this->filterByIdComment($idComments, Criteria::IN);
    }

    /**
     * Filter the query on the id_comment column
     *
     * Example usage:
     * <code>
     * $query->filterByIdComment(1234); // WHERE id_comment = 1234
     * $query->filterByIdComment(array(12, 34), Criteria::IN); // WHERE id_comment IN (12, 34)
     * $query->filterByIdComment(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_comment > 12
     * </code>
     *
     * @param     mixed $idComment The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdComment($idComment = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idComment)) {
            $useMinMax = false;
            if (isset($idComment['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCommentTableMap::COL_ID_COMMENT, $idComment['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idComment['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCommentTableMap::COL_ID_COMMENT, $idComment['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idComment of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCommentTableMap::COL_ID_COMMENT, $idComment, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkCommentThread Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkCommentThread_Between(array $fkCommentThread)
    {
        return $this->filterByFkCommentThread($fkCommentThread, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkCommentThreads Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkCommentThread_In(array $fkCommentThreads)
    {
        return $this->filterByFkCommentThread($fkCommentThreads, Criteria::IN);
    }

    /**
     * Filter the query on the fk_comment_thread column
     *
     * Example usage:
     * <code>
     * $query->filterByFkCommentThread(1234); // WHERE fk_comment_thread = 1234
     * $query->filterByFkCommentThread(array(12, 34), Criteria::IN); // WHERE fk_comment_thread IN (12, 34)
     * $query->filterByFkCommentThread(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_comment_thread > 12
     * </code>
     *
     * @see       filterBySpyCommentThread()
     *
     * @param     mixed $fkCommentThread The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkCommentThread($fkCommentThread = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkCommentThread)) {
            $useMinMax = false;
            if (isset($fkCommentThread['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCommentTableMap::COL_FK_COMMENT_THREAD, $fkCommentThread['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkCommentThread['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCommentTableMap::COL_FK_COMMENT_THREAD, $fkCommentThread['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkCommentThread of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCommentTableMap::COL_FK_COMMENT_THREAD, $fkCommentThread, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkCustomer Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkCustomer_Between(array $fkCustomer)
    {
        return $this->filterByFkCustomer($fkCustomer, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkCustomers Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkCustomer_In(array $fkCustomers)
    {
        return $this->filterByFkCustomer($fkCustomers, Criteria::IN);
    }

    /**
     * Filter the query on the fk_customer column
     *
     * Example usage:
     * <code>
     * $query->filterByFkCustomer(1234); // WHERE fk_customer = 1234
     * $query->filterByFkCustomer(array(12, 34), Criteria::IN); // WHERE fk_customer IN (12, 34)
     * $query->filterByFkCustomer(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_customer > 12
     * </code>
     *
     * @see       filterBySpyCustomer()
     *
     * @param     mixed $fkCustomer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkCustomer($fkCustomer = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkCustomer)) {
            $useMinMax = false;
            if (isset($fkCustomer['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCommentTableMap::COL_FK_CUSTOMER, $fkCustomer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkCustomer['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCommentTableMap::COL_FK_CUSTOMER, $fkCustomer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkCustomer of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCommentTableMap::COL_FK_CUSTOMER, $fkCustomer, $comparison);

        return $query;
    }

    /**
     * Filter the query on the is_deleted column
     *
     * Example usage:
     * <code>
     * $query->filterByIsDeleted(true); // WHERE is_deleted = true
     * $query->filterByIsDeleted('yes'); // WHERE is_deleted = true
     * </code>
     *
     * @param     bool|string $isDeleted The value to use as filter.
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
    public function filterByIsDeleted($isDeleted = null, $comparison = Criteria::EQUAL)
    {
        if (is_string($isDeleted)) {
            $isDeleted = in_array(strtolower($isDeleted), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        $query = $this->addUsingAlias(SpyCommentTableMap::COL_IS_DELETED, $isDeleted, $comparison);

        return $query;
    }

    /**
     * Filter the query on the is_updated column
     *
     * Example usage:
     * <code>
     * $query->filterByIsUpdated(true); // WHERE is_updated = true
     * $query->filterByIsUpdated('yes'); // WHERE is_updated = true
     * </code>
     *
     * @param     bool|string $isUpdated The value to use as filter.
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
    public function filterByIsUpdated($isUpdated = null, $comparison = Criteria::EQUAL)
    {
        if (is_string($isUpdated)) {
            $isUpdated = in_array(strtolower($isUpdated), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        $query = $this->addUsingAlias(SpyCommentTableMap::COL_IS_UPDATED, $isUpdated, $comparison);

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

        $query = $this->addUsingAlias(SpyCommentTableMap::COL_KEY, $key, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $messages Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByMessage_In(array $messages)
    {
        return $this->filterByMessage($messages, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $message Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByMessage_Like($message)
    {
        return $this->filterByMessage($message, Criteria::LIKE);
    }

    /**
     * Filter the query on the message column
     *
     * Example usage:
     * <code>
     * $query->filterByMessage('fooValue');   // WHERE message = 'fooValue'
     * $query->filterByMessage('%fooValue%', Criteria::LIKE); // WHERE message LIKE '%fooValue%'
     * $query->filterByMessage([1, 'foo'], Criteria::IN); // WHERE message IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $message The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByMessage($message = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $message = str_replace('*', '%', $message);
        }

        if (is_array($message) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$message of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyCommentTableMap::COL_MESSAGE, $message, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $uuids Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByUuid_In(array $uuids)
    {
        return $this->filterByUuid($uuids, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $uuid Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByUuid_Like($uuid)
    {
        return $this->filterByUuid($uuid, Criteria::LIKE);
    }

    /**
     * Filter the query on the uuid column
     *
     * Example usage:
     * <code>
     * $query->filterByUuid('fooValue');   // WHERE uuid = 'fooValue'
     * $query->filterByUuid('%fooValue%', Criteria::LIKE); // WHERE uuid LIKE '%fooValue%'
     * $query->filterByUuid([1, 'foo'], Criteria::IN); // WHERE uuid IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $uuid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByUuid($uuid = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $uuid = str_replace('*', '%', $uuid);
        }

        if (is_array($uuid) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$uuid of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyCommentTableMap::COL_UUID, $uuid, $comparison);

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
                $this->addUsingAlias(SpyCommentTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCommentTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$createdAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCommentTableMap::COL_CREATED_AT, $createdAt, $comparison);

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
                $this->addUsingAlias(SpyCommentTableMap::COL_UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCommentTableMap::COL_UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$updatedAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCommentTableMap::COL_UPDATED_AT, $updatedAt, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\Customer\Persistence\SpyCustomer object
     *
     * @param \Orm\Zed\Customer\Persistence\SpyCustomer|ObjectCollection $spyCustomer The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyCommentQuery The current query, for fluid interface
     */
    public function filterBySpyCustomer($spyCustomer, $comparison = null)
    {
        if ($spyCustomer instanceof \Orm\Zed\Customer\Persistence\SpyCustomer) {
            return $this
                ->addUsingAlias(SpyCommentTableMap::COL_FK_CUSTOMER, $spyCustomer->getIdCustomer(), $comparison);
        } elseif ($spyCustomer instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyCommentTableMap::COL_FK_CUSTOMER, $spyCustomer->toKeyValue('PrimaryKey', 'IdCustomer'), $comparison);
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
     * @return $this|ChildSpyCommentQuery The current query, for fluid interface
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
     * Filter the query by a related \Orm\Zed\Comment\Persistence\SpyCommentThread object
     *
     * @param \Orm\Zed\Comment\Persistence\SpyCommentThread|ObjectCollection $spyCommentThread The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyCommentQuery The current query, for fluid interface
     */
    public function filterBySpyCommentThread($spyCommentThread, $comparison = null)
    {
        if ($spyCommentThread instanceof \Orm\Zed\Comment\Persistence\SpyCommentThread) {
            return $this
                ->addUsingAlias(SpyCommentTableMap::COL_FK_COMMENT_THREAD, $spyCommentThread->getIdCommentThread(), $comparison);
        } elseif ($spyCommentThread instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyCommentTableMap::COL_FK_COMMENT_THREAD, $spyCommentThread->toKeyValue('PrimaryKey', 'IdCommentThread'), $comparison);
        } else {
            throw new PropelException('filterBySpyCommentThread() only accepts arguments of type \Orm\Zed\Comment\Persistence\SpyCommentThread or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyCommentThread relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyCommentQuery The current query, for fluid interface
     */
    public function joinSpyCommentThread($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyCommentThread');

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
            $this->addJoinObject($join, 'SpyCommentThread');
        }

        return $this;
    }

    /**
     * Use the SpyCommentThread relation SpyCommentThread object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Comment\Persistence\SpyCommentThreadQuery A secondary query class using the current class as primary query
     */
    public function useSpyCommentThreadQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyCommentThread($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyCommentThread', '\Orm\Zed\Comment\Persistence\SpyCommentThreadQuery');
    }

    /**
     * Use the SpyCommentThread relation SpyCommentThread object
     *
     * @param callable(\Orm\Zed\Comment\Persistence\SpyCommentThreadQuery):\Orm\Zed\Comment\Persistence\SpyCommentThreadQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyCommentThreadQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyCommentThreadQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyCommentThread table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Comment\Persistence\SpyCommentThreadQuery The inner query object of the EXISTS statement
     */
    public function useSpyCommentThreadExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyCommentThread', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyCommentThread table for a NOT EXISTS query.
     *
     * @see useSpyCommentThreadExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Comment\Persistence\SpyCommentThreadQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyCommentThreadNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyCommentThread', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Comment\Persistence\SpyCommentToCommentTag object
     *
     * @param \Orm\Zed\Comment\Persistence\SpyCommentToCommentTag|ObjectCollection $spyCommentToCommentTag the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyCommentQuery The current query, for fluid interface
     */
    public function filterBySpyCommentToCommentTag($spyCommentToCommentTag, $comparison = null)
    {
        if ($spyCommentToCommentTag instanceof \Orm\Zed\Comment\Persistence\SpyCommentToCommentTag) {
            return $this
                ->addUsingAlias(SpyCommentTableMap::COL_ID_COMMENT, $spyCommentToCommentTag->getFkComment(), $comparison);
        } elseif ($spyCommentToCommentTag instanceof ObjectCollection) {
            return $this
                ->useSpyCommentToCommentTagQuery()
                ->filterByPrimaryKeys($spyCommentToCommentTag->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyCommentToCommentTag() only accepts arguments of type \Orm\Zed\Comment\Persistence\SpyCommentToCommentTag or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyCommentToCommentTag relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyCommentQuery The current query, for fluid interface
     */
    public function joinSpyCommentToCommentTag($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyCommentToCommentTag');

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
            $this->addJoinObject($join, 'SpyCommentToCommentTag');
        }

        return $this;
    }

    /**
     * Use the SpyCommentToCommentTag relation SpyCommentToCommentTag object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Comment\Persistence\SpyCommentToCommentTagQuery A secondary query class using the current class as primary query
     */
    public function useSpyCommentToCommentTagQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyCommentToCommentTag($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyCommentToCommentTag', '\Orm\Zed\Comment\Persistence\SpyCommentToCommentTagQuery');
    }

    /**
     * Use the SpyCommentToCommentTag relation SpyCommentToCommentTag object
     *
     * @param callable(\Orm\Zed\Comment\Persistence\SpyCommentToCommentTagQuery):\Orm\Zed\Comment\Persistence\SpyCommentToCommentTagQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyCommentToCommentTagQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyCommentToCommentTagQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyCommentToCommentTag table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Comment\Persistence\SpyCommentToCommentTagQuery The inner query object of the EXISTS statement
     */
    public function useSpyCommentToCommentTagExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyCommentToCommentTag', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyCommentToCommentTag table for a NOT EXISTS query.
     *
     * @see useSpyCommentToCommentTagExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Comment\Persistence\SpyCommentToCommentTagQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyCommentToCommentTagNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyCommentToCommentTag', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related SpyCommentTag object
     * using the spy_comment_to_comment_tag table as cross reference
     *
     * @param SpyCommentTag $spyCommentTag the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyCommentQuery The current query, for fluid interface
     */
    public function filterBySpyCommentTag($spyCommentTag, $comparison = Criteria::EQUAL)
    {
        return $this
            ->useSpyCommentToCommentTagQuery()
            ->filterBySpyCommentTag($spyCommentTag, $comparison)
            ->endUse();
    }

    /**
     * Exclude object from result
     *
     * @param   ChildSpyComment $spyComment Object to remove from the list of results
     *
     * @return $this|ChildSpyCommentQuery The current query, for fluid interface
     */
    public function prune($spyComment = null)
    {
        if ($spyComment) {
            $this->addUsingAlias(SpyCommentTableMap::COL_ID_COMMENT, $spyComment->getIdComment(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_comment table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCommentTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyCommentTableMap::clearInstancePool();
            SpyCommentTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCommentTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyCommentTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyCommentTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyCommentTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    // timestampable behavior

    /**
     * Filter by the latest updated
     *
     * @param      int $nbDays Maximum age of the latest update in days
     *
     * @return     $this|ChildSpyCommentQuery The current query, for fluid interface
     */
    public function recentlyUpdated($nbDays = 7)
    {
        return $this->addUsingAlias(SpyCommentTableMap::COL_UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by update date desc
     *
     * @return     $this|ChildSpyCommentQuery The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        return $this->addDescendingOrderByColumn(SpyCommentTableMap::COL_UPDATED_AT);
    }

    /**
     * Order by update date asc
     *
     * @return     $this|ChildSpyCommentQuery The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        return $this->addAscendingOrderByColumn(SpyCommentTableMap::COL_UPDATED_AT);
    }

    /**
     * Order by create date desc
     *
     * @return     $this|ChildSpyCommentQuery The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        return $this->addDescendingOrderByColumn(SpyCommentTableMap::COL_CREATED_AT);
    }

    /**
     * Filter by the latest created
     *
     * @param      int $nbDays Maximum age of in days
     *
     * @return     $this|ChildSpyCommentQuery The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        return $this->addUsingAlias(SpyCommentTableMap::COL_CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by create date asc
     *
     * @return     $this|ChildSpyCommentQuery The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        return $this->addAscendingOrderByColumn(SpyCommentTableMap::COL_CREATED_AT);
    }

} // SpyCommentQuery
