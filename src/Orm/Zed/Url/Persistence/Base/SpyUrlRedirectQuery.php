<?php

namespace Orm\Zed\Url\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\Url\Persistence\SpyUrlRedirect as ChildSpyUrlRedirect;
use Orm\Zed\Url\Persistence\SpyUrlRedirectQuery as ChildSpyUrlRedirectQuery;
use Orm\Zed\Url\Persistence\Map\SpyUrlRedirectTableMap;
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
 * Base class that represents a query for the 'spy_url_redirect' table.
 *
 *
 *
 * @method     ChildSpyUrlRedirectQuery orderByIdUrlRedirect($order = Criteria::ASC) Order by the id_url_redirect column
 * @method     ChildSpyUrlRedirectQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ChildSpyUrlRedirectQuery orderByToUrl($order = Criteria::ASC) Order by the to_url column
 *
 * @method     ChildSpyUrlRedirectQuery groupByIdUrlRedirect() Group by the id_url_redirect column
 * @method     ChildSpyUrlRedirectQuery groupByStatus() Group by the status column
 * @method     ChildSpyUrlRedirectQuery groupByToUrl() Group by the to_url column
 *
 * @method     ChildSpyUrlRedirectQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyUrlRedirectQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyUrlRedirectQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyUrlRedirectQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyUrlRedirectQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyUrlRedirectQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyUrlRedirectQuery leftJoinSpyUrl($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyUrl relation
 * @method     ChildSpyUrlRedirectQuery rightJoinSpyUrl($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyUrl relation
 * @method     ChildSpyUrlRedirectQuery innerJoinSpyUrl($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyUrl relation
 *
 * @method     ChildSpyUrlRedirectQuery joinWithSpyUrl($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyUrl relation
 *
 * @method     ChildSpyUrlRedirectQuery leftJoinWithSpyUrl() Adds a LEFT JOIN clause and with to the query using the SpyUrl relation
 * @method     ChildSpyUrlRedirectQuery rightJoinWithSpyUrl() Adds a RIGHT JOIN clause and with to the query using the SpyUrl relation
 * @method     ChildSpyUrlRedirectQuery innerJoinWithSpyUrl() Adds a INNER JOIN clause and with to the query using the SpyUrl relation
 *
 * @method     \Orm\Zed\Url\Persistence\SpyUrlQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyUrlRedirect|null findOne(ConnectionInterface $con = null) Return the first ChildSpyUrlRedirect matching the query
 * @method     ChildSpyUrlRedirect findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyUrlRedirect matching the query, or a new ChildSpyUrlRedirect object populated from the query conditions when no match is found
 *
 * @method     ChildSpyUrlRedirect|null findOneByIdUrlRedirect(int $id_url_redirect) Return the first ChildSpyUrlRedirect filtered by the id_url_redirect column
 * @method     ChildSpyUrlRedirect|null findOneByStatus(int $status) Return the first ChildSpyUrlRedirect filtered by the status column
 * @method     ChildSpyUrlRedirect|null findOneByToUrl(string $to_url) Return the first ChildSpyUrlRedirect filtered by the to_url column *

 * @method     ChildSpyUrlRedirect requirePk($key, ConnectionInterface $con = null) Return the ChildSpyUrlRedirect by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyUrlRedirect requireOne(ConnectionInterface $con = null) Return the first ChildSpyUrlRedirect matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyUrlRedirect requireOneByIdUrlRedirect(int $id_url_redirect) Return the first ChildSpyUrlRedirect filtered by the id_url_redirect column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyUrlRedirect requireOneByStatus(int $status) Return the first ChildSpyUrlRedirect filtered by the status column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyUrlRedirect requireOneByToUrl(string $to_url) Return the first ChildSpyUrlRedirect filtered by the to_url column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyUrlRedirect[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyUrlRedirect objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyUrlRedirect> find(ConnectionInterface $con = null) Return ChildSpyUrlRedirect objects based on current ModelCriteria
 * @method     ChildSpyUrlRedirect[]|ObjectCollection findByIdUrlRedirect(int $id_url_redirect) Return ChildSpyUrlRedirect objects filtered by the id_url_redirect column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyUrlRedirect> findByIdUrlRedirect(int $id_url_redirect) Return ChildSpyUrlRedirect objects filtered by the id_url_redirect column
 * @method     ChildSpyUrlRedirect[]|ObjectCollection findByStatus(int $status) Return ChildSpyUrlRedirect objects filtered by the status column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyUrlRedirect> findByStatus(int $status) Return ChildSpyUrlRedirect objects filtered by the status column
 * @method     ChildSpyUrlRedirect[]|ObjectCollection findByToUrl(string $to_url) Return ChildSpyUrlRedirect objects filtered by the to_url column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyUrlRedirect> findByToUrl(string $to_url) Return ChildSpyUrlRedirect objects filtered by the to_url column
 * @method     ChildSpyUrlRedirect[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyUrlRedirect> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyUrlRedirectQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\Url\Persistence\Base\SpyUrlRedirectQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\Url\\Persistence\\SpyUrlRedirect', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyUrlRedirectQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyUrlRedirectQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyUrlRedirectQuery) {
            return $criteria;
        }
        $query = new ChildSpyUrlRedirectQuery();
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
     * @return ChildSpyUrlRedirect|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyUrlRedirectTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyUrlRedirect A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_url_redirect, status, to_url FROM spy_url_redirect WHERE id_url_redirect = :p0';
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
            /** @var ChildSpyUrlRedirect $obj */
            $obj = new ChildSpyUrlRedirect();
            $obj->hydrate($row);
            SpyUrlRedirectTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyUrlRedirect|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyUrlRedirectQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyUrlRedirectTableMap::COL_ID_URL_REDIRECT, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyUrlRedirectQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyUrlRedirectTableMap::COL_ID_URL_REDIRECT, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idUrlRedirect Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdUrlRedirect_Between(array $idUrlRedirect)
    {
        return $this->filterByIdUrlRedirect($idUrlRedirect, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idUrlRedirects Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdUrlRedirect_In(array $idUrlRedirects)
    {
        return $this->filterByIdUrlRedirect($idUrlRedirects, Criteria::IN);
    }

    /**
     * Filter the query on the id_url_redirect column
     *
     * Example usage:
     * <code>
     * $query->filterByIdUrlRedirect(1234); // WHERE id_url_redirect = 1234
     * $query->filterByIdUrlRedirect(array(12, 34), Criteria::IN); // WHERE id_url_redirect IN (12, 34)
     * $query->filterByIdUrlRedirect(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_url_redirect > 12
     * </code>
     *
     * @param     mixed $idUrlRedirect The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdUrlRedirect($idUrlRedirect = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idUrlRedirect)) {
            $useMinMax = false;
            if (isset($idUrlRedirect['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyUrlRedirectTableMap::COL_ID_URL_REDIRECT, $idUrlRedirect['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idUrlRedirect['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyUrlRedirectTableMap::COL_ID_URL_REDIRECT, $idUrlRedirect['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idUrlRedirect of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyUrlRedirectTableMap::COL_ID_URL_REDIRECT, $idUrlRedirect, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $status Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByStatus_Between(array $status)
    {
        return $this->filterByStatus($status, SprykerCriteria::BETWEEN);
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
     * Example usage:
     * <code>
     * $query->filterByStatus(1234); // WHERE status = 1234
     * $query->filterByStatus(array(12, 34), Criteria::IN); // WHERE status IN (12, 34)
     * $query->filterByStatus(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE status > 12
     * </code>
     *
     * @param     mixed $status The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByStatus($status = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($status)) {
            $useMinMax = false;
            if (isset($status['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyUrlRedirectTableMap::COL_STATUS, $status['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($status['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyUrlRedirectTableMap::COL_STATUS, $status['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$status of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyUrlRedirectTableMap::COL_STATUS, $status, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $toUrls Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByToUrl_In(array $toUrls)
    {
        return $this->filterByToUrl($toUrls, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $toUrl Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByToUrl_Like($toUrl)
    {
        return $this->filterByToUrl($toUrl, Criteria::LIKE);
    }

    /**
     * Filter the query on the to_url column
     *
     * Example usage:
     * <code>
     * $query->filterByToUrl('fooValue');   // WHERE to_url = 'fooValue'
     * $query->filterByToUrl('%fooValue%', Criteria::LIKE); // WHERE to_url LIKE '%fooValue%'
     * $query->filterByToUrl([1, 'foo'], Criteria::IN); // WHERE to_url IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $toUrl The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByToUrl($toUrl = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $toUrl = str_replace('*', '%', $toUrl);
        }

        if (is_array($toUrl) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$toUrl of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyUrlRedirectTableMap::COL_TO_URL, $toUrl, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\Url\Persistence\SpyUrl object
     *
     * @param \Orm\Zed\Url\Persistence\SpyUrl|ObjectCollection $spyUrl the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyUrlRedirectQuery The current query, for fluid interface
     */
    public function filterBySpyUrl($spyUrl, $comparison = null)
    {
        if ($spyUrl instanceof \Orm\Zed\Url\Persistence\SpyUrl) {
            return $this
                ->addUsingAlias(SpyUrlRedirectTableMap::COL_ID_URL_REDIRECT, $spyUrl->getFkResourceRedirect(), $comparison);
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
     * @return $this|ChildSpyUrlRedirectQuery The current query, for fluid interface
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
     * @param   ChildSpyUrlRedirect $spyUrlRedirect Object to remove from the list of results
     *
     * @return $this|ChildSpyUrlRedirectQuery The current query, for fluid interface
     */
    public function prune($spyUrlRedirect = null)
    {
        if ($spyUrlRedirect) {
            $this->addUsingAlias(SpyUrlRedirectTableMap::COL_ID_URL_REDIRECT, $spyUrlRedirect->getIdUrlRedirect(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_url_redirect table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyUrlRedirectTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyUrlRedirectTableMap::clearInstancePool();
            SpyUrlRedirectTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyUrlRedirectTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyUrlRedirectTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyUrlRedirectTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyUrlRedirectTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SpyUrlRedirectQuery
