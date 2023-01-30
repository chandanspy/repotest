<?php

namespace Orm\Zed\SalesReturn\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\SalesReturn\Persistence\SpySalesReturnReason as ChildSpySalesReturnReason;
use Orm\Zed\SalesReturn\Persistence\SpySalesReturnReasonQuery as ChildSpySalesReturnReasonQuery;
use Orm\Zed\SalesReturn\Persistence\Map\SpySalesReturnReasonTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;
use Spryker\Zed\PropelOrm\Business\Runtime\ActiveQuery\Criteria as SprykerCriteria;
use Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException;

/**
 * Base class that represents a query for the 'spy_sales_return_reason' table.
 *
 *
 *
 * @method     ChildSpySalesReturnReasonQuery orderByIdSalesReturnReason($order = Criteria::ASC) Order by the id_sales_return_reason column
 * @method     ChildSpySalesReturnReasonQuery orderByGlossaryKeyReason($order = Criteria::ASC) Order by the glossary_key_reason column
 * @method     ChildSpySalesReturnReasonQuery orderByKey($order = Criteria::ASC) Order by the key column
 *
 * @method     ChildSpySalesReturnReasonQuery groupByIdSalesReturnReason() Group by the id_sales_return_reason column
 * @method     ChildSpySalesReturnReasonQuery groupByGlossaryKeyReason() Group by the glossary_key_reason column
 * @method     ChildSpySalesReturnReasonQuery groupByKey() Group by the key column
 *
 * @method     ChildSpySalesReturnReasonQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpySalesReturnReasonQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpySalesReturnReasonQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpySalesReturnReasonQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpySalesReturnReasonQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpySalesReturnReasonQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpySalesReturnReason|null findOne(ConnectionInterface $con = null) Return the first ChildSpySalesReturnReason matching the query
 * @method     ChildSpySalesReturnReason findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpySalesReturnReason matching the query, or a new ChildSpySalesReturnReason object populated from the query conditions when no match is found
 *
 * @method     ChildSpySalesReturnReason|null findOneByIdSalesReturnReason(int $id_sales_return_reason) Return the first ChildSpySalesReturnReason filtered by the id_sales_return_reason column
 * @method     ChildSpySalesReturnReason|null findOneByGlossaryKeyReason(string $glossary_key_reason) Return the first ChildSpySalesReturnReason filtered by the glossary_key_reason column
 * @method     ChildSpySalesReturnReason|null findOneByKey(string $key) Return the first ChildSpySalesReturnReason filtered by the key column *

 * @method     ChildSpySalesReturnReason requirePk($key, ConnectionInterface $con = null) Return the ChildSpySalesReturnReason by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesReturnReason requireOne(ConnectionInterface $con = null) Return the first ChildSpySalesReturnReason matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpySalesReturnReason requireOneByIdSalesReturnReason(int $id_sales_return_reason) Return the first ChildSpySalesReturnReason filtered by the id_sales_return_reason column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesReturnReason requireOneByGlossaryKeyReason(string $glossary_key_reason) Return the first ChildSpySalesReturnReason filtered by the glossary_key_reason column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesReturnReason requireOneByKey(string $key) Return the first ChildSpySalesReturnReason filtered by the key column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpySalesReturnReason[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpySalesReturnReason objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpySalesReturnReason> find(ConnectionInterface $con = null) Return ChildSpySalesReturnReason objects based on current ModelCriteria
 * @method     ChildSpySalesReturnReason[]|ObjectCollection findByIdSalesReturnReason(int $id_sales_return_reason) Return ChildSpySalesReturnReason objects filtered by the id_sales_return_reason column
 * @psalm-method ObjectCollection&\Traversable<ChildSpySalesReturnReason> findByIdSalesReturnReason(int $id_sales_return_reason) Return ChildSpySalesReturnReason objects filtered by the id_sales_return_reason column
 * @method     ChildSpySalesReturnReason[]|ObjectCollection findByGlossaryKeyReason(string $glossary_key_reason) Return ChildSpySalesReturnReason objects filtered by the glossary_key_reason column
 * @psalm-method ObjectCollection&\Traversable<ChildSpySalesReturnReason> findByGlossaryKeyReason(string $glossary_key_reason) Return ChildSpySalesReturnReason objects filtered by the glossary_key_reason column
 * @method     ChildSpySalesReturnReason[]|ObjectCollection findByKey(string $key) Return ChildSpySalesReturnReason objects filtered by the key column
 * @psalm-method ObjectCollection&\Traversable<ChildSpySalesReturnReason> findByKey(string $key) Return ChildSpySalesReturnReason objects filtered by the key column
 * @method     ChildSpySalesReturnReason[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpySalesReturnReason> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpySalesReturnReasonQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\SalesReturn\Persistence\Base\SpySalesReturnReasonQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\SalesReturn\\Persistence\\SpySalesReturnReason', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpySalesReturnReasonQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpySalesReturnReasonQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpySalesReturnReasonQuery) {
            return $criteria;
        }
        $query = new ChildSpySalesReturnReasonQuery();
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
     * @return ChildSpySalesReturnReason|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpySalesReturnReasonTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpySalesReturnReason A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT `id_sales_return_reason`, `glossary_key_reason`, `key` FROM `spy_sales_return_reason` WHERE `id_sales_return_reason` = :p0';
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
            /** @var ChildSpySalesReturnReason $obj */
            $obj = new ChildSpySalesReturnReason();
            $obj->hydrate($row);
            SpySalesReturnReasonTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpySalesReturnReason|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpySalesReturnReasonQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpySalesReturnReasonTableMap::COL_ID_SALES_RETURN_REASON, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpySalesReturnReasonQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpySalesReturnReasonTableMap::COL_ID_SALES_RETURN_REASON, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idSalesReturnReason Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdSalesReturnReason_Between(array $idSalesReturnReason)
    {
        return $this->filterByIdSalesReturnReason($idSalesReturnReason, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idSalesReturnReasons Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdSalesReturnReason_In(array $idSalesReturnReasons)
    {
        return $this->filterByIdSalesReturnReason($idSalesReturnReasons, Criteria::IN);
    }

    /**
     * Filter the query on the id_sales_return_reason column
     *
     * Example usage:
     * <code>
     * $query->filterByIdSalesReturnReason(1234); // WHERE id_sales_return_reason = 1234
     * $query->filterByIdSalesReturnReason(array(12, 34), Criteria::IN); // WHERE id_sales_return_reason IN (12, 34)
     * $query->filterByIdSalesReturnReason(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_sales_return_reason > 12
     * </code>
     *
     * @param     mixed $idSalesReturnReason The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdSalesReturnReason($idSalesReturnReason = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idSalesReturnReason)) {
            $useMinMax = false;
            if (isset($idSalesReturnReason['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesReturnReasonTableMap::COL_ID_SALES_RETURN_REASON, $idSalesReturnReason['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idSalesReturnReason['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesReturnReasonTableMap::COL_ID_SALES_RETURN_REASON, $idSalesReturnReason['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idSalesReturnReason of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpySalesReturnReasonTableMap::COL_ID_SALES_RETURN_REASON, $idSalesReturnReason, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $glossaryKeyReasons Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGlossaryKeyReason_In(array $glossaryKeyReasons)
    {
        return $this->filterByGlossaryKeyReason($glossaryKeyReasons, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $glossaryKeyReason Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGlossaryKeyReason_Like($glossaryKeyReason)
    {
        return $this->filterByGlossaryKeyReason($glossaryKeyReason, Criteria::LIKE);
    }

    /**
     * Filter the query on the glossary_key_reason column
     *
     * Example usage:
     * <code>
     * $query->filterByGlossaryKeyReason('fooValue');   // WHERE glossary_key_reason = 'fooValue'
     * $query->filterByGlossaryKeyReason('%fooValue%', Criteria::LIKE); // WHERE glossary_key_reason LIKE '%fooValue%'
     * $query->filterByGlossaryKeyReason([1, 'foo'], Criteria::IN); // WHERE glossary_key_reason IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $glossaryKeyReason The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByGlossaryKeyReason($glossaryKeyReason = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $glossaryKeyReason = str_replace('*', '%', $glossaryKeyReason);
        }

        if (is_array($glossaryKeyReason) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$glossaryKeyReason of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpySalesReturnReasonTableMap::COL_GLOSSARY_KEY_REASON, $glossaryKeyReason, $comparison);

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

        $query = $this->addUsingAlias(SpySalesReturnReasonTableMap::COL_KEY, $key, $comparison);

        return $query;
    }

    /**
     * Exclude object from result
     *
     * @param   ChildSpySalesReturnReason $spySalesReturnReason Object to remove from the list of results
     *
     * @return $this|ChildSpySalesReturnReasonQuery The current query, for fluid interface
     */
    public function prune($spySalesReturnReason = null)
    {
        if ($spySalesReturnReason) {
            $this->addUsingAlias(SpySalesReturnReasonTableMap::COL_ID_SALES_RETURN_REASON, $spySalesReturnReason->getIdSalesReturnReason(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_sales_return_reason table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpySalesReturnReasonTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpySalesReturnReasonTableMap::clearInstancePool();
            SpySalesReturnReasonTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpySalesReturnReasonTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpySalesReturnReasonTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpySalesReturnReasonTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpySalesReturnReasonTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SpySalesReturnReasonQuery
