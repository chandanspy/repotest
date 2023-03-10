<?php

namespace Orm\Zed\Availability\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\Availability\Persistence\SpyAvailabilityAbstract as ChildSpyAvailabilityAbstract;
use Orm\Zed\Availability\Persistence\SpyAvailabilityAbstractQuery as ChildSpyAvailabilityAbstractQuery;
use Orm\Zed\Availability\Persistence\Map\SpyAvailabilityAbstractTableMap;
use Orm\Zed\Store\Persistence\SpyStore;
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
 * Base class that represents a query for the 'spy_availability_abstract' table.
 *
 *
 *
 * @method     ChildSpyAvailabilityAbstractQuery orderByIdAvailabilityAbstract($order = Criteria::ASC) Order by the id_availability_abstract column
 * @method     ChildSpyAvailabilityAbstractQuery orderByFkStore($order = Criteria::ASC) Order by the fk_store column
 * @method     ChildSpyAvailabilityAbstractQuery orderByAbstractSku($order = Criteria::ASC) Order by the abstract_sku column
 * @method     ChildSpyAvailabilityAbstractQuery orderByQuantity($order = Criteria::ASC) Order by the quantity column
 *
 * @method     ChildSpyAvailabilityAbstractQuery groupByIdAvailabilityAbstract() Group by the id_availability_abstract column
 * @method     ChildSpyAvailabilityAbstractQuery groupByFkStore() Group by the fk_store column
 * @method     ChildSpyAvailabilityAbstractQuery groupByAbstractSku() Group by the abstract_sku column
 * @method     ChildSpyAvailabilityAbstractQuery groupByQuantity() Group by the quantity column
 *
 * @method     ChildSpyAvailabilityAbstractQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyAvailabilityAbstractQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyAvailabilityAbstractQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyAvailabilityAbstractQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyAvailabilityAbstractQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyAvailabilityAbstractQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyAvailabilityAbstractQuery leftJoinStore($relationAlias = null) Adds a LEFT JOIN clause to the query using the Store relation
 * @method     ChildSpyAvailabilityAbstractQuery rightJoinStore($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Store relation
 * @method     ChildSpyAvailabilityAbstractQuery innerJoinStore($relationAlias = null) Adds a INNER JOIN clause to the query using the Store relation
 *
 * @method     ChildSpyAvailabilityAbstractQuery joinWithStore($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Store relation
 *
 * @method     ChildSpyAvailabilityAbstractQuery leftJoinWithStore() Adds a LEFT JOIN clause and with to the query using the Store relation
 * @method     ChildSpyAvailabilityAbstractQuery rightJoinWithStore() Adds a RIGHT JOIN clause and with to the query using the Store relation
 * @method     ChildSpyAvailabilityAbstractQuery innerJoinWithStore() Adds a INNER JOIN clause and with to the query using the Store relation
 *
 * @method     ChildSpyAvailabilityAbstractQuery leftJoinSpyAvailability($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyAvailability relation
 * @method     ChildSpyAvailabilityAbstractQuery rightJoinSpyAvailability($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyAvailability relation
 * @method     ChildSpyAvailabilityAbstractQuery innerJoinSpyAvailability($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyAvailability relation
 *
 * @method     ChildSpyAvailabilityAbstractQuery joinWithSpyAvailability($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyAvailability relation
 *
 * @method     ChildSpyAvailabilityAbstractQuery leftJoinWithSpyAvailability() Adds a LEFT JOIN clause and with to the query using the SpyAvailability relation
 * @method     ChildSpyAvailabilityAbstractQuery rightJoinWithSpyAvailability() Adds a RIGHT JOIN clause and with to the query using the SpyAvailability relation
 * @method     ChildSpyAvailabilityAbstractQuery innerJoinWithSpyAvailability() Adds a INNER JOIN clause and with to the query using the SpyAvailability relation
 *
 * @method     \Orm\Zed\Store\Persistence\SpyStoreQuery|\Orm\Zed\Availability\Persistence\SpyAvailabilityQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyAvailabilityAbstract|null findOne(ConnectionInterface $con = null) Return the first ChildSpyAvailabilityAbstract matching the query
 * @method     ChildSpyAvailabilityAbstract findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyAvailabilityAbstract matching the query, or a new ChildSpyAvailabilityAbstract object populated from the query conditions when no match is found
 *
 * @method     ChildSpyAvailabilityAbstract|null findOneByIdAvailabilityAbstract(int $id_availability_abstract) Return the first ChildSpyAvailabilityAbstract filtered by the id_availability_abstract column
 * @method     ChildSpyAvailabilityAbstract|null findOneByFkStore(int $fk_store) Return the first ChildSpyAvailabilityAbstract filtered by the fk_store column
 * @method     ChildSpyAvailabilityAbstract|null findOneByAbstractSku(string $abstract_sku) Return the first ChildSpyAvailabilityAbstract filtered by the abstract_sku column
 * @method     ChildSpyAvailabilityAbstract|null findOneByQuantity(string $quantity) Return the first ChildSpyAvailabilityAbstract filtered by the quantity column *

 * @method     ChildSpyAvailabilityAbstract requirePk($key, ConnectionInterface $con = null) Return the ChildSpyAvailabilityAbstract by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyAvailabilityAbstract requireOne(ConnectionInterface $con = null) Return the first ChildSpyAvailabilityAbstract matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyAvailabilityAbstract requireOneByIdAvailabilityAbstract(int $id_availability_abstract) Return the first ChildSpyAvailabilityAbstract filtered by the id_availability_abstract column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyAvailabilityAbstract requireOneByFkStore(int $fk_store) Return the first ChildSpyAvailabilityAbstract filtered by the fk_store column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyAvailabilityAbstract requireOneByAbstractSku(string $abstract_sku) Return the first ChildSpyAvailabilityAbstract filtered by the abstract_sku column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyAvailabilityAbstract requireOneByQuantity(string $quantity) Return the first ChildSpyAvailabilityAbstract filtered by the quantity column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyAvailabilityAbstract[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyAvailabilityAbstract objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyAvailabilityAbstract> find(ConnectionInterface $con = null) Return ChildSpyAvailabilityAbstract objects based on current ModelCriteria
 * @method     ChildSpyAvailabilityAbstract[]|ObjectCollection findByIdAvailabilityAbstract(int $id_availability_abstract) Return ChildSpyAvailabilityAbstract objects filtered by the id_availability_abstract column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyAvailabilityAbstract> findByIdAvailabilityAbstract(int $id_availability_abstract) Return ChildSpyAvailabilityAbstract objects filtered by the id_availability_abstract column
 * @method     ChildSpyAvailabilityAbstract[]|ObjectCollection findByFkStore(int $fk_store) Return ChildSpyAvailabilityAbstract objects filtered by the fk_store column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyAvailabilityAbstract> findByFkStore(int $fk_store) Return ChildSpyAvailabilityAbstract objects filtered by the fk_store column
 * @method     ChildSpyAvailabilityAbstract[]|ObjectCollection findByAbstractSku(string $abstract_sku) Return ChildSpyAvailabilityAbstract objects filtered by the abstract_sku column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyAvailabilityAbstract> findByAbstractSku(string $abstract_sku) Return ChildSpyAvailabilityAbstract objects filtered by the abstract_sku column
 * @method     ChildSpyAvailabilityAbstract[]|ObjectCollection findByQuantity(string $quantity) Return ChildSpyAvailabilityAbstract objects filtered by the quantity column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyAvailabilityAbstract> findByQuantity(string $quantity) Return ChildSpyAvailabilityAbstract objects filtered by the quantity column
 * @method     ChildSpyAvailabilityAbstract[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyAvailabilityAbstract> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyAvailabilityAbstractQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\Availability\Persistence\Base\SpyAvailabilityAbstractQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\Availability\\Persistence\\SpyAvailabilityAbstract', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyAvailabilityAbstractQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyAvailabilityAbstractQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyAvailabilityAbstractQuery) {
            return $criteria;
        }
        $query = new ChildSpyAvailabilityAbstractQuery();
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
     * @return ChildSpyAvailabilityAbstract|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyAvailabilityAbstractTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyAvailabilityAbstract A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_availability_abstract, fk_store, abstract_sku, quantity FROM spy_availability_abstract WHERE id_availability_abstract = :p0';
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
            /** @var ChildSpyAvailabilityAbstract $obj */
            $obj = new ChildSpyAvailabilityAbstract();
            $obj->hydrate($row);
            SpyAvailabilityAbstractTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyAvailabilityAbstract|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyAvailabilityAbstractQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyAvailabilityAbstractTableMap::COL_ID_AVAILABILITY_ABSTRACT, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyAvailabilityAbstractQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyAvailabilityAbstractTableMap::COL_ID_AVAILABILITY_ABSTRACT, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idAvailabilityAbstract Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdAvailabilityAbstract_Between(array $idAvailabilityAbstract)
    {
        return $this->filterByIdAvailabilityAbstract($idAvailabilityAbstract, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idAvailabilityAbstracts Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdAvailabilityAbstract_In(array $idAvailabilityAbstracts)
    {
        return $this->filterByIdAvailabilityAbstract($idAvailabilityAbstracts, Criteria::IN);
    }

    /**
     * Filter the query on the id_availability_abstract column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAvailabilityAbstract(1234); // WHERE id_availability_abstract = 1234
     * $query->filterByIdAvailabilityAbstract(array(12, 34), Criteria::IN); // WHERE id_availability_abstract IN (12, 34)
     * $query->filterByIdAvailabilityAbstract(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_availability_abstract > 12
     * </code>
     *
     * @param     mixed $idAvailabilityAbstract The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdAvailabilityAbstract($idAvailabilityAbstract = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idAvailabilityAbstract)) {
            $useMinMax = false;
            if (isset($idAvailabilityAbstract['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyAvailabilityAbstractTableMap::COL_ID_AVAILABILITY_ABSTRACT, $idAvailabilityAbstract['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAvailabilityAbstract['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyAvailabilityAbstractTableMap::COL_ID_AVAILABILITY_ABSTRACT, $idAvailabilityAbstract['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idAvailabilityAbstract of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyAvailabilityAbstractTableMap::COL_ID_AVAILABILITY_ABSTRACT, $idAvailabilityAbstract, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkStore Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkStore_Between(array $fkStore)
    {
        return $this->filterByFkStore($fkStore, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkStores Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkStore_In(array $fkStores)
    {
        return $this->filterByFkStore($fkStores, Criteria::IN);
    }

    /**
     * Filter the query on the fk_store column
     *
     * Example usage:
     * <code>
     * $query->filterByFkStore(1234); // WHERE fk_store = 1234
     * $query->filterByFkStore(array(12, 34), Criteria::IN); // WHERE fk_store IN (12, 34)
     * $query->filterByFkStore(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_store > 12
     * </code>
     *
     * @see       filterByStore()
     *
     * @param     mixed $fkStore The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkStore($fkStore = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkStore)) {
            $useMinMax = false;
            if (isset($fkStore['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyAvailabilityAbstractTableMap::COL_FK_STORE, $fkStore['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkStore['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyAvailabilityAbstractTableMap::COL_FK_STORE, $fkStore['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkStore of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyAvailabilityAbstractTableMap::COL_FK_STORE, $fkStore, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $abstractSkus Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAbstractSku_In(array $abstractSkus)
    {
        return $this->filterByAbstractSku($abstractSkus, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $abstractSku Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAbstractSku_Like($abstractSku)
    {
        return $this->filterByAbstractSku($abstractSku, Criteria::LIKE);
    }

    /**
     * Filter the query on the abstract_sku column
     *
     * Example usage:
     * <code>
     * $query->filterByAbstractSku('fooValue');   // WHERE abstract_sku = 'fooValue'
     * $query->filterByAbstractSku('%fooValue%', Criteria::LIKE); // WHERE abstract_sku LIKE '%fooValue%'
     * $query->filterByAbstractSku([1, 'foo'], Criteria::IN); // WHERE abstract_sku IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $abstractSku The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByAbstractSku($abstractSku = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $abstractSku = str_replace('*', '%', $abstractSku);
        }

        if (is_array($abstractSku) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$abstractSku of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyAvailabilityAbstractTableMap::COL_ABSTRACT_SKU, $abstractSku, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $quantity Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQuantity_Between(array $quantity)
    {
        return $this->filterByQuantity($quantity, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $quantitys Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQuantity_In(array $quantitys)
    {
        return $this->filterByQuantity($quantitys, Criteria::IN);
    }

    /**
     * Filter the query on the quantity column
     *
     * Example usage:
     * <code>
     * $query->filterByQuantity(1234); // WHERE quantity = 1234
     * $query->filterByQuantity(array(12, 34), Criteria::IN); // WHERE quantity IN (12, 34)
     * $query->filterByQuantity(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE quantity > 12
     * </code>
     *
     * @param     mixed $quantity The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByQuantity($quantity = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($quantity)) {
            $useMinMax = false;
            if (isset($quantity['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyAvailabilityAbstractTableMap::COL_QUANTITY, $quantity['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($quantity['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyAvailabilityAbstractTableMap::COL_QUANTITY, $quantity['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$quantity of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyAvailabilityAbstractTableMap::COL_QUANTITY, $quantity, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\Store\Persistence\SpyStore object
     *
     * @param \Orm\Zed\Store\Persistence\SpyStore|ObjectCollection $spyStore The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyAvailabilityAbstractQuery The current query, for fluid interface
     */
    public function filterByStore($spyStore, $comparison = null)
    {
        if ($spyStore instanceof \Orm\Zed\Store\Persistence\SpyStore) {
            return $this
                ->addUsingAlias(SpyAvailabilityAbstractTableMap::COL_FK_STORE, $spyStore->getIdStore(), $comparison);
        } elseif ($spyStore instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyAvailabilityAbstractTableMap::COL_FK_STORE, $spyStore->toKeyValue('PrimaryKey', 'IdStore'), $comparison);
        } else {
            throw new PropelException('filterByStore() only accepts arguments of type \Orm\Zed\Store\Persistence\SpyStore or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Store relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyAvailabilityAbstractQuery The current query, for fluid interface
     */
    public function joinStore($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Store');

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
            $this->addJoinObject($join, 'Store');
        }

        return $this;
    }

    /**
     * Use the Store relation SpyStore object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Store\Persistence\SpyStoreQuery A secondary query class using the current class as primary query
     */
    public function useStoreQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinStore($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Store', '\Orm\Zed\Store\Persistence\SpyStoreQuery');
    }

    /**
     * Use the Store relation SpyStore object
     *
     * @param callable(\Orm\Zed\Store\Persistence\SpyStoreQuery):\Orm\Zed\Store\Persistence\SpyStoreQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withStoreQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useStoreQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the Store relation to the SpyStore table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Store\Persistence\SpyStoreQuery The inner query object of the EXISTS statement
     */
    public function useStoreExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('Store', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the Store relation to the SpyStore table for a NOT EXISTS query.
     *
     * @see useStoreExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Store\Persistence\SpyStoreQuery The inner query object of the NOT EXISTS statement
     */
    public function useStoreNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('Store', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Availability\Persistence\SpyAvailability object
     *
     * @param \Orm\Zed\Availability\Persistence\SpyAvailability|ObjectCollection $spyAvailability the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyAvailabilityAbstractQuery The current query, for fluid interface
     */
    public function filterBySpyAvailability($spyAvailability, $comparison = null)
    {
        if ($spyAvailability instanceof \Orm\Zed\Availability\Persistence\SpyAvailability) {
            return $this
                ->addUsingAlias(SpyAvailabilityAbstractTableMap::COL_ID_AVAILABILITY_ABSTRACT, $spyAvailability->getFkAvailabilityAbstract(), $comparison);
        } elseif ($spyAvailability instanceof ObjectCollection) {
            return $this
                ->useSpyAvailabilityQuery()
                ->filterByPrimaryKeys($spyAvailability->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyAvailability() only accepts arguments of type \Orm\Zed\Availability\Persistence\SpyAvailability or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyAvailability relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyAvailabilityAbstractQuery The current query, for fluid interface
     */
    public function joinSpyAvailability($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyAvailability');

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
            $this->addJoinObject($join, 'SpyAvailability');
        }

        return $this;
    }

    /**
     * Use the SpyAvailability relation SpyAvailability object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Availability\Persistence\SpyAvailabilityQuery A secondary query class using the current class as primary query
     */
    public function useSpyAvailabilityQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyAvailability($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyAvailability', '\Orm\Zed\Availability\Persistence\SpyAvailabilityQuery');
    }

    /**
     * Use the SpyAvailability relation SpyAvailability object
     *
     * @param callable(\Orm\Zed\Availability\Persistence\SpyAvailabilityQuery):\Orm\Zed\Availability\Persistence\SpyAvailabilityQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyAvailabilityQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyAvailabilityQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyAvailability table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Availability\Persistence\SpyAvailabilityQuery The inner query object of the EXISTS statement
     */
    public function useSpyAvailabilityExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyAvailability', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyAvailability table for a NOT EXISTS query.
     *
     * @see useSpyAvailabilityExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Availability\Persistence\SpyAvailabilityQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyAvailabilityNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyAvailability', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Exclude object from result
     *
     * @param   ChildSpyAvailabilityAbstract $spyAvailabilityAbstract Object to remove from the list of results
     *
     * @return $this|ChildSpyAvailabilityAbstractQuery The current query, for fluid interface
     */
    public function prune($spyAvailabilityAbstract = null)
    {
        if ($spyAvailabilityAbstract) {
            $this->addUsingAlias(SpyAvailabilityAbstractTableMap::COL_ID_AVAILABILITY_ABSTRACT, $spyAvailabilityAbstract->getIdAvailabilityAbstract(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_availability_abstract table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyAvailabilityAbstractTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyAvailabilityAbstractTableMap::clearInstancePool();
            SpyAvailabilityAbstractTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyAvailabilityAbstractTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyAvailabilityAbstractTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyAvailabilityAbstractTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyAvailabilityAbstractTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SpyAvailabilityAbstractQuery
