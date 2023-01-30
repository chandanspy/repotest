<?php

namespace Orm\Zed\CompanyUserInvitation\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\CompanyUserInvitation\Persistence\SpyCompanyUserInvitationStatus as ChildSpyCompanyUserInvitationStatus;
use Orm\Zed\CompanyUserInvitation\Persistence\SpyCompanyUserInvitationStatusQuery as ChildSpyCompanyUserInvitationStatusQuery;
use Orm\Zed\CompanyUserInvitation\Persistence\Map\SpyCompanyUserInvitationStatusTableMap;
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
 * Base class that represents a query for the 'spy_company_user_invitation_status' table.
 *
 *
 *
 * @method     ChildSpyCompanyUserInvitationStatusQuery orderByIdCompanyUserInvitationStatus($order = Criteria::ASC) Order by the id_company_user_invitation_status column
 * @method     ChildSpyCompanyUserInvitationStatusQuery orderByStatusKey($order = Criteria::ASC) Order by the status_key column
 *
 * @method     ChildSpyCompanyUserInvitationStatusQuery groupByIdCompanyUserInvitationStatus() Group by the id_company_user_invitation_status column
 * @method     ChildSpyCompanyUserInvitationStatusQuery groupByStatusKey() Group by the status_key column
 *
 * @method     ChildSpyCompanyUserInvitationStatusQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyCompanyUserInvitationStatusQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyCompanyUserInvitationStatusQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyCompanyUserInvitationStatusQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyCompanyUserInvitationStatusQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyCompanyUserInvitationStatusQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyCompanyUserInvitationStatusQuery leftJoinSpyCompanyUserInvitation($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyCompanyUserInvitation relation
 * @method     ChildSpyCompanyUserInvitationStatusQuery rightJoinSpyCompanyUserInvitation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyCompanyUserInvitation relation
 * @method     ChildSpyCompanyUserInvitationStatusQuery innerJoinSpyCompanyUserInvitation($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyCompanyUserInvitation relation
 *
 * @method     ChildSpyCompanyUserInvitationStatusQuery joinWithSpyCompanyUserInvitation($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyCompanyUserInvitation relation
 *
 * @method     ChildSpyCompanyUserInvitationStatusQuery leftJoinWithSpyCompanyUserInvitation() Adds a LEFT JOIN clause and with to the query using the SpyCompanyUserInvitation relation
 * @method     ChildSpyCompanyUserInvitationStatusQuery rightJoinWithSpyCompanyUserInvitation() Adds a RIGHT JOIN clause and with to the query using the SpyCompanyUserInvitation relation
 * @method     ChildSpyCompanyUserInvitationStatusQuery innerJoinWithSpyCompanyUserInvitation() Adds a INNER JOIN clause and with to the query using the SpyCompanyUserInvitation relation
 *
 * @method     \Orm\Zed\CompanyUserInvitation\Persistence\SpyCompanyUserInvitationQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyCompanyUserInvitationStatus|null findOne(ConnectionInterface $con = null) Return the first ChildSpyCompanyUserInvitationStatus matching the query
 * @method     ChildSpyCompanyUserInvitationStatus findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyCompanyUserInvitationStatus matching the query, or a new ChildSpyCompanyUserInvitationStatus object populated from the query conditions when no match is found
 *
 * @method     ChildSpyCompanyUserInvitationStatus|null findOneByIdCompanyUserInvitationStatus(int $id_company_user_invitation_status) Return the first ChildSpyCompanyUserInvitationStatus filtered by the id_company_user_invitation_status column
 * @method     ChildSpyCompanyUserInvitationStatus|null findOneByStatusKey(string $status_key) Return the first ChildSpyCompanyUserInvitationStatus filtered by the status_key column *

 * @method     ChildSpyCompanyUserInvitationStatus requirePk($key, ConnectionInterface $con = null) Return the ChildSpyCompanyUserInvitationStatus by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCompanyUserInvitationStatus requireOne(ConnectionInterface $con = null) Return the first ChildSpyCompanyUserInvitationStatus matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyCompanyUserInvitationStatus requireOneByIdCompanyUserInvitationStatus(int $id_company_user_invitation_status) Return the first ChildSpyCompanyUserInvitationStatus filtered by the id_company_user_invitation_status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCompanyUserInvitationStatus requireOneByStatusKey(string $status_key) Return the first ChildSpyCompanyUserInvitationStatus filtered by the status_key column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyCompanyUserInvitationStatus[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyCompanyUserInvitationStatus objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCompanyUserInvitationStatus> find(ConnectionInterface $con = null) Return ChildSpyCompanyUserInvitationStatus objects based on current ModelCriteria
 * @method     ChildSpyCompanyUserInvitationStatus[]|ObjectCollection findByIdCompanyUserInvitationStatus(int $id_company_user_invitation_status) Return ChildSpyCompanyUserInvitationStatus objects filtered by the id_company_user_invitation_status column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCompanyUserInvitationStatus> findByIdCompanyUserInvitationStatus(int $id_company_user_invitation_status) Return ChildSpyCompanyUserInvitationStatus objects filtered by the id_company_user_invitation_status column
 * @method     ChildSpyCompanyUserInvitationStatus[]|ObjectCollection findByStatusKey(string $status_key) Return ChildSpyCompanyUserInvitationStatus objects filtered by the status_key column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCompanyUserInvitationStatus> findByStatusKey(string $status_key) Return ChildSpyCompanyUserInvitationStatus objects filtered by the status_key column
 * @method     ChildSpyCompanyUserInvitationStatus[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyCompanyUserInvitationStatus> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyCompanyUserInvitationStatusQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\CompanyUserInvitation\Persistence\Base\SpyCompanyUserInvitationStatusQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\CompanyUserInvitation\\Persistence\\SpyCompanyUserInvitationStatus', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyCompanyUserInvitationStatusQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyCompanyUserInvitationStatusQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyCompanyUserInvitationStatusQuery) {
            return $criteria;
        }
        $query = new ChildSpyCompanyUserInvitationStatusQuery();
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
     * @return ChildSpyCompanyUserInvitationStatus|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyCompanyUserInvitationStatusTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyCompanyUserInvitationStatus A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_company_user_invitation_status, status_key FROM spy_company_user_invitation_status WHERE id_company_user_invitation_status = :p0';
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
            /** @var ChildSpyCompanyUserInvitationStatus $obj */
            $obj = new ChildSpyCompanyUserInvitationStatus();
            $obj->hydrate($row);
            SpyCompanyUserInvitationStatusTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyCompanyUserInvitationStatus|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyCompanyUserInvitationStatusQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyCompanyUserInvitationStatusTableMap::COL_ID_COMPANY_USER_INVITATION_STATUS, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyCompanyUserInvitationStatusQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyCompanyUserInvitationStatusTableMap::COL_ID_COMPANY_USER_INVITATION_STATUS, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idCompanyUserInvitationStatus Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdCompanyUserInvitationStatus_Between(array $idCompanyUserInvitationStatus)
    {
        return $this->filterByIdCompanyUserInvitationStatus($idCompanyUserInvitationStatus, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idCompanyUserInvitationStatuss Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdCompanyUserInvitationStatus_In(array $idCompanyUserInvitationStatuss)
    {
        return $this->filterByIdCompanyUserInvitationStatus($idCompanyUserInvitationStatuss, Criteria::IN);
    }

    /**
     * Filter the query on the id_company_user_invitation_status column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCompanyUserInvitationStatus(1234); // WHERE id_company_user_invitation_status = 1234
     * $query->filterByIdCompanyUserInvitationStatus(array(12, 34), Criteria::IN); // WHERE id_company_user_invitation_status IN (12, 34)
     * $query->filterByIdCompanyUserInvitationStatus(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_company_user_invitation_status > 12
     * </code>
     *
     * @param     mixed $idCompanyUserInvitationStatus The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdCompanyUserInvitationStatus($idCompanyUserInvitationStatus = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idCompanyUserInvitationStatus)) {
            $useMinMax = false;
            if (isset($idCompanyUserInvitationStatus['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCompanyUserInvitationStatusTableMap::COL_ID_COMPANY_USER_INVITATION_STATUS, $idCompanyUserInvitationStatus['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCompanyUserInvitationStatus['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCompanyUserInvitationStatusTableMap::COL_ID_COMPANY_USER_INVITATION_STATUS, $idCompanyUserInvitationStatus['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idCompanyUserInvitationStatus of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCompanyUserInvitationStatusTableMap::COL_ID_COMPANY_USER_INVITATION_STATUS, $idCompanyUserInvitationStatus, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $statusKeys Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByStatusKey_In(array $statusKeys)
    {
        return $this->filterByStatusKey($statusKeys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $statusKey Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByStatusKey_Like($statusKey)
    {
        return $this->filterByStatusKey($statusKey, Criteria::LIKE);
    }

    /**
     * Filter the query on the status_key column
     *
     * Example usage:
     * <code>
     * $query->filterByStatusKey('fooValue');   // WHERE status_key = 'fooValue'
     * $query->filterByStatusKey('%fooValue%', Criteria::LIKE); // WHERE status_key LIKE '%fooValue%'
     * $query->filterByStatusKey([1, 'foo'], Criteria::IN); // WHERE status_key IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $statusKey The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByStatusKey($statusKey = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $statusKey = str_replace('*', '%', $statusKey);
        }

        if (is_array($statusKey) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$statusKey of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyCompanyUserInvitationStatusTableMap::COL_STATUS_KEY, $statusKey, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\CompanyUserInvitation\Persistence\SpyCompanyUserInvitation object
     *
     * @param \Orm\Zed\CompanyUserInvitation\Persistence\SpyCompanyUserInvitation|ObjectCollection $spyCompanyUserInvitation the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyCompanyUserInvitationStatusQuery The current query, for fluid interface
     */
    public function filterBySpyCompanyUserInvitation($spyCompanyUserInvitation, $comparison = null)
    {
        if ($spyCompanyUserInvitation instanceof \Orm\Zed\CompanyUserInvitation\Persistence\SpyCompanyUserInvitation) {
            return $this
                ->addUsingAlias(SpyCompanyUserInvitationStatusTableMap::COL_ID_COMPANY_USER_INVITATION_STATUS, $spyCompanyUserInvitation->getFkCompanyUserInvitationStatus(), $comparison);
        } elseif ($spyCompanyUserInvitation instanceof ObjectCollection) {
            return $this
                ->useSpyCompanyUserInvitationQuery()
                ->filterByPrimaryKeys($spyCompanyUserInvitation->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyCompanyUserInvitation() only accepts arguments of type \Orm\Zed\CompanyUserInvitation\Persistence\SpyCompanyUserInvitation or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyCompanyUserInvitation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyCompanyUserInvitationStatusQuery The current query, for fluid interface
     */
    public function joinSpyCompanyUserInvitation($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyCompanyUserInvitation');

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
            $this->addJoinObject($join, 'SpyCompanyUserInvitation');
        }

        return $this;
    }

    /**
     * Use the SpyCompanyUserInvitation relation SpyCompanyUserInvitation object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\CompanyUserInvitation\Persistence\SpyCompanyUserInvitationQuery A secondary query class using the current class as primary query
     */
    public function useSpyCompanyUserInvitationQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyCompanyUserInvitation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyCompanyUserInvitation', '\Orm\Zed\CompanyUserInvitation\Persistence\SpyCompanyUserInvitationQuery');
    }

    /**
     * Use the SpyCompanyUserInvitation relation SpyCompanyUserInvitation object
     *
     * @param callable(\Orm\Zed\CompanyUserInvitation\Persistence\SpyCompanyUserInvitationQuery):\Orm\Zed\CompanyUserInvitation\Persistence\SpyCompanyUserInvitationQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyCompanyUserInvitationQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyCompanyUserInvitationQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyCompanyUserInvitation table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\CompanyUserInvitation\Persistence\SpyCompanyUserInvitationQuery The inner query object of the EXISTS statement
     */
    public function useSpyCompanyUserInvitationExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyCompanyUserInvitation', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyCompanyUserInvitation table for a NOT EXISTS query.
     *
     * @see useSpyCompanyUserInvitationExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\CompanyUserInvitation\Persistence\SpyCompanyUserInvitationQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyCompanyUserInvitationNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyCompanyUserInvitation', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Exclude object from result
     *
     * @param   ChildSpyCompanyUserInvitationStatus $spyCompanyUserInvitationStatus Object to remove from the list of results
     *
     * @return $this|ChildSpyCompanyUserInvitationStatusQuery The current query, for fluid interface
     */
    public function prune($spyCompanyUserInvitationStatus = null)
    {
        if ($spyCompanyUserInvitationStatus) {
            $this->addUsingAlias(SpyCompanyUserInvitationStatusTableMap::COL_ID_COMPANY_USER_INVITATION_STATUS, $spyCompanyUserInvitationStatus->getIdCompanyUserInvitationStatus(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_company_user_invitation_status table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCompanyUserInvitationStatusTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyCompanyUserInvitationStatusTableMap::clearInstancePool();
            SpyCompanyUserInvitationStatusTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCompanyUserInvitationStatusTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyCompanyUserInvitationStatusTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyCompanyUserInvitationStatusTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyCompanyUserInvitationStatusTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SpyCompanyUserInvitationStatusQuery
