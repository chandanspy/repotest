<?php

namespace Orm\Zed\GoogleAnalytics\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\GoogleAnalytics\Persistence\PyzGoogleAnalytics as ChildPyzGoogleAnalytics;
use Orm\Zed\GoogleAnalytics\Persistence\PyzGoogleAnalyticsQuery as ChildPyzGoogleAnalyticsQuery;
use Orm\Zed\GoogleAnalytics\Persistence\Map\PyzGoogleAnalyticsTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;
use Spryker\Zed\PropelOrm\Business\Runtime\ActiveQuery\Criteria as SprykerCriteria;
use Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException;

/**
 * Base class that represents a query for the 'pyz_google_analytics' table.
 *
 *
 *
 * @method     ChildPyzGoogleAnalyticsQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildPyzGoogleAnalyticsQuery orderByAnalyticskey($order = Criteria::ASC) Order by the analyticskey column
 *
 * @method     ChildPyzGoogleAnalyticsQuery groupById() Group by the id column
 * @method     ChildPyzGoogleAnalyticsQuery groupByAnalyticskey() Group by the analyticskey column
 *
 * @method     ChildPyzGoogleAnalyticsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildPyzGoogleAnalyticsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildPyzGoogleAnalyticsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildPyzGoogleAnalyticsQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildPyzGoogleAnalyticsQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildPyzGoogleAnalyticsQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildPyzGoogleAnalytics|null findOne(ConnectionInterface $con = null) Return the first ChildPyzGoogleAnalytics matching the query
 * @method     ChildPyzGoogleAnalytics findOneOrCreate(ConnectionInterface $con = null) Return the first ChildPyzGoogleAnalytics matching the query, or a new ChildPyzGoogleAnalytics object populated from the query conditions when no match is found
 *
 * @method     ChildPyzGoogleAnalytics|null findOneById(int $id) Return the first ChildPyzGoogleAnalytics filtered by the id column
 * @method     ChildPyzGoogleAnalytics|null findOneByAnalyticskey(string $analyticskey) Return the first ChildPyzGoogleAnalytics filtered by the analyticskey column *

 * @method     ChildPyzGoogleAnalytics requirePk($key, ConnectionInterface $con = null) Return the ChildPyzGoogleAnalytics by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPyzGoogleAnalytics requireOne(ConnectionInterface $con = null) Return the first ChildPyzGoogleAnalytics matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildPyzGoogleAnalytics requireOneById(int $id) Return the first ChildPyzGoogleAnalytics filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPyzGoogleAnalytics requireOneByAnalyticskey(string $analyticskey) Return the first ChildPyzGoogleAnalytics filtered by the analyticskey column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildPyzGoogleAnalytics[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildPyzGoogleAnalytics objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildPyzGoogleAnalytics> find(ConnectionInterface $con = null) Return ChildPyzGoogleAnalytics objects based on current ModelCriteria
 * @method     ChildPyzGoogleAnalytics[]|ObjectCollection findById(int $id) Return ChildPyzGoogleAnalytics objects filtered by the id column
 * @psalm-method ObjectCollection&\Traversable<ChildPyzGoogleAnalytics> findById(int $id) Return ChildPyzGoogleAnalytics objects filtered by the id column
 * @method     ChildPyzGoogleAnalytics[]|ObjectCollection findByAnalyticskey(string $analyticskey) Return ChildPyzGoogleAnalytics objects filtered by the analyticskey column
 * @psalm-method ObjectCollection&\Traversable<ChildPyzGoogleAnalytics> findByAnalyticskey(string $analyticskey) Return ChildPyzGoogleAnalytics objects filtered by the analyticskey column
 * @method     ChildPyzGoogleAnalytics[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildPyzGoogleAnalytics> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class PyzGoogleAnalyticsQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\GoogleAnalytics\Persistence\Base\PyzGoogleAnalyticsQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\GoogleAnalytics\\Persistence\\PyzGoogleAnalytics', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildPyzGoogleAnalyticsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildPyzGoogleAnalyticsQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildPyzGoogleAnalyticsQuery) {
            return $criteria;
        }
        $query = new ChildPyzGoogleAnalyticsQuery();
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
     * @return ChildPyzGoogleAnalytics|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = PyzGoogleAnalyticsTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildPyzGoogleAnalytics A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, analyticskey FROM pyz_google_analytics WHERE id = :p0';
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
            /** @var ChildPyzGoogleAnalytics $obj */
            $obj = new ChildPyzGoogleAnalytics();
            $obj->hydrate($row);
            PyzGoogleAnalyticsTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildPyzGoogleAnalytics|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildPyzGoogleAnalyticsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PyzGoogleAnalyticsTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildPyzGoogleAnalyticsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PyzGoogleAnalyticsTableMap::COL_ID, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $id Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterById_Between(array $id)
    {
        return $this->filterById($id, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $ids Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterById_In(array $ids)
    {
        return $this->filterById($ids, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34), Criteria::IN); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterById($id = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(PyzGoogleAnalyticsTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(PyzGoogleAnalyticsTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$id of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(PyzGoogleAnalyticsTableMap::COL_ID, $id, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $analyticskeys Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAnalyticskey_In(array $analyticskeys)
    {
        return $this->filterByAnalyticskey($analyticskeys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $analyticskey Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAnalyticskey_Like($analyticskey)
    {
        return $this->filterByAnalyticskey($analyticskey, Criteria::LIKE);
    }

    /**
     * Filter the query on the analyticskey column
     *
     * Example usage:
     * <code>
     * $query->filterByAnalyticskey('fooValue');   // WHERE analyticskey = 'fooValue'
     * $query->filterByAnalyticskey('%fooValue%', Criteria::LIKE); // WHERE analyticskey LIKE '%fooValue%'
     * $query->filterByAnalyticskey([1, 'foo'], Criteria::IN); // WHERE analyticskey IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $analyticskey The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByAnalyticskey($analyticskey = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $analyticskey = str_replace('*', '%', $analyticskey);
        }

        if (is_array($analyticskey) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$analyticskey of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(PyzGoogleAnalyticsTableMap::COL_ANALYTICSKEY, $analyticskey, $comparison);

        return $query;
    }

    /**
     * Exclude object from result
     *
     * @param   ChildPyzGoogleAnalytics $pyzGoogleAnalytics Object to remove from the list of results
     *
     * @return $this|ChildPyzGoogleAnalyticsQuery The current query, for fluid interface
     */
    public function prune($pyzGoogleAnalytics = null)
    {
        if ($pyzGoogleAnalytics) {
            $this->addUsingAlias(PyzGoogleAnalyticsTableMap::COL_ID, $pyzGoogleAnalytics->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the pyz_google_analytics table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(PyzGoogleAnalyticsTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PyzGoogleAnalyticsTableMap::clearInstancePool();
            PyzGoogleAnalyticsTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(PyzGoogleAnalyticsTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(PyzGoogleAnalyticsTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            PyzGoogleAnalyticsTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            PyzGoogleAnalyticsTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // PyzGoogleAnalyticsQuery
