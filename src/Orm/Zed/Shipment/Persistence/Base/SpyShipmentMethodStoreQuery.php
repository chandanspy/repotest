<?php

namespace Orm\Zed\Shipment\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\Shipment\Persistence\SpyShipmentMethodStore as ChildSpyShipmentMethodStore;
use Orm\Zed\Shipment\Persistence\SpyShipmentMethodStoreQuery as ChildSpyShipmentMethodStoreQuery;
use Orm\Zed\Shipment\Persistence\Map\SpyShipmentMethodStoreTableMap;
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
 * Base class that represents a query for the 'spy_shipment_method_store' table.
 *
 *
 *
 * @method     ChildSpyShipmentMethodStoreQuery orderByIdShipmentMethodStore($order = Criteria::ASC) Order by the id_shipment_method_store column
 * @method     ChildSpyShipmentMethodStoreQuery orderByFkShipmentMethod($order = Criteria::ASC) Order by the fk_shipment_method column
 * @method     ChildSpyShipmentMethodStoreQuery orderByFkStore($order = Criteria::ASC) Order by the fk_store column
 *
 * @method     ChildSpyShipmentMethodStoreQuery groupByIdShipmentMethodStore() Group by the id_shipment_method_store column
 * @method     ChildSpyShipmentMethodStoreQuery groupByFkShipmentMethod() Group by the fk_shipment_method column
 * @method     ChildSpyShipmentMethodStoreQuery groupByFkStore() Group by the fk_store column
 *
 * @method     ChildSpyShipmentMethodStoreQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyShipmentMethodStoreQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyShipmentMethodStoreQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyShipmentMethodStoreQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyShipmentMethodStoreQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyShipmentMethodStoreQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyShipmentMethodStoreQuery leftJoinShipmentMethod($relationAlias = null) Adds a LEFT JOIN clause to the query using the ShipmentMethod relation
 * @method     ChildSpyShipmentMethodStoreQuery rightJoinShipmentMethod($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ShipmentMethod relation
 * @method     ChildSpyShipmentMethodStoreQuery innerJoinShipmentMethod($relationAlias = null) Adds a INNER JOIN clause to the query using the ShipmentMethod relation
 *
 * @method     ChildSpyShipmentMethodStoreQuery joinWithShipmentMethod($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ShipmentMethod relation
 *
 * @method     ChildSpyShipmentMethodStoreQuery leftJoinWithShipmentMethod() Adds a LEFT JOIN clause and with to the query using the ShipmentMethod relation
 * @method     ChildSpyShipmentMethodStoreQuery rightJoinWithShipmentMethod() Adds a RIGHT JOIN clause and with to the query using the ShipmentMethod relation
 * @method     ChildSpyShipmentMethodStoreQuery innerJoinWithShipmentMethod() Adds a INNER JOIN clause and with to the query using the ShipmentMethod relation
 *
 * @method     ChildSpyShipmentMethodStoreQuery leftJoinStore($relationAlias = null) Adds a LEFT JOIN clause to the query using the Store relation
 * @method     ChildSpyShipmentMethodStoreQuery rightJoinStore($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Store relation
 * @method     ChildSpyShipmentMethodStoreQuery innerJoinStore($relationAlias = null) Adds a INNER JOIN clause to the query using the Store relation
 *
 * @method     ChildSpyShipmentMethodStoreQuery joinWithStore($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Store relation
 *
 * @method     ChildSpyShipmentMethodStoreQuery leftJoinWithStore() Adds a LEFT JOIN clause and with to the query using the Store relation
 * @method     ChildSpyShipmentMethodStoreQuery rightJoinWithStore() Adds a RIGHT JOIN clause and with to the query using the Store relation
 * @method     ChildSpyShipmentMethodStoreQuery innerJoinWithStore() Adds a INNER JOIN clause and with to the query using the Store relation
 *
 * @method     \Orm\Zed\Shipment\Persistence\SpyShipmentMethodQuery|\Orm\Zed\Store\Persistence\SpyStoreQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyShipmentMethodStore|null findOne(ConnectionInterface $con = null) Return the first ChildSpyShipmentMethodStore matching the query
 * @method     ChildSpyShipmentMethodStore findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyShipmentMethodStore matching the query, or a new ChildSpyShipmentMethodStore object populated from the query conditions when no match is found
 *
 * @method     ChildSpyShipmentMethodStore|null findOneByIdShipmentMethodStore(int $id_shipment_method_store) Return the first ChildSpyShipmentMethodStore filtered by the id_shipment_method_store column
 * @method     ChildSpyShipmentMethodStore|null findOneByFkShipmentMethod(int $fk_shipment_method) Return the first ChildSpyShipmentMethodStore filtered by the fk_shipment_method column
 * @method     ChildSpyShipmentMethodStore|null findOneByFkStore(int $fk_store) Return the first ChildSpyShipmentMethodStore filtered by the fk_store column *

 * @method     ChildSpyShipmentMethodStore requirePk($key, ConnectionInterface $con = null) Return the ChildSpyShipmentMethodStore by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyShipmentMethodStore requireOne(ConnectionInterface $con = null) Return the first ChildSpyShipmentMethodStore matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyShipmentMethodStore requireOneByIdShipmentMethodStore(int $id_shipment_method_store) Return the first ChildSpyShipmentMethodStore filtered by the id_shipment_method_store column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyShipmentMethodStore requireOneByFkShipmentMethod(int $fk_shipment_method) Return the first ChildSpyShipmentMethodStore filtered by the fk_shipment_method column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyShipmentMethodStore requireOneByFkStore(int $fk_store) Return the first ChildSpyShipmentMethodStore filtered by the fk_store column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyShipmentMethodStore[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyShipmentMethodStore objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyShipmentMethodStore> find(ConnectionInterface $con = null) Return ChildSpyShipmentMethodStore objects based on current ModelCriteria
 * @method     ChildSpyShipmentMethodStore[]|ObjectCollection findByIdShipmentMethodStore(int $id_shipment_method_store) Return ChildSpyShipmentMethodStore objects filtered by the id_shipment_method_store column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyShipmentMethodStore> findByIdShipmentMethodStore(int $id_shipment_method_store) Return ChildSpyShipmentMethodStore objects filtered by the id_shipment_method_store column
 * @method     ChildSpyShipmentMethodStore[]|ObjectCollection findByFkShipmentMethod(int $fk_shipment_method) Return ChildSpyShipmentMethodStore objects filtered by the fk_shipment_method column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyShipmentMethodStore> findByFkShipmentMethod(int $fk_shipment_method) Return ChildSpyShipmentMethodStore objects filtered by the fk_shipment_method column
 * @method     ChildSpyShipmentMethodStore[]|ObjectCollection findByFkStore(int $fk_store) Return ChildSpyShipmentMethodStore objects filtered by the fk_store column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyShipmentMethodStore> findByFkStore(int $fk_store) Return ChildSpyShipmentMethodStore objects filtered by the fk_store column
 * @method     ChildSpyShipmentMethodStore[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyShipmentMethodStore> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyShipmentMethodStoreQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\Shipment\Persistence\Base\SpyShipmentMethodStoreQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\Shipment\\Persistence\\SpyShipmentMethodStore', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyShipmentMethodStoreQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyShipmentMethodStoreQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyShipmentMethodStoreQuery) {
            return $criteria;
        }
        $query = new ChildSpyShipmentMethodStoreQuery();
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
     * @return ChildSpyShipmentMethodStore|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyShipmentMethodStoreTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyShipmentMethodStore A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_shipment_method_store, fk_shipment_method, fk_store FROM spy_shipment_method_store WHERE id_shipment_method_store = :p0';
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
            /** @var ChildSpyShipmentMethodStore $obj */
            $obj = new ChildSpyShipmentMethodStore();
            $obj->hydrate($row);
            SpyShipmentMethodStoreTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyShipmentMethodStore|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyShipmentMethodStoreQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyShipmentMethodStoreTableMap::COL_ID_SHIPMENT_METHOD_STORE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyShipmentMethodStoreQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyShipmentMethodStoreTableMap::COL_ID_SHIPMENT_METHOD_STORE, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idShipmentMethodStore Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdShipmentMethodStore_Between(array $idShipmentMethodStore)
    {
        return $this->filterByIdShipmentMethodStore($idShipmentMethodStore, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idShipmentMethodStores Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdShipmentMethodStore_In(array $idShipmentMethodStores)
    {
        return $this->filterByIdShipmentMethodStore($idShipmentMethodStores, Criteria::IN);
    }

    /**
     * Filter the query on the id_shipment_method_store column
     *
     * Example usage:
     * <code>
     * $query->filterByIdShipmentMethodStore(1234); // WHERE id_shipment_method_store = 1234
     * $query->filterByIdShipmentMethodStore(array(12, 34), Criteria::IN); // WHERE id_shipment_method_store IN (12, 34)
     * $query->filterByIdShipmentMethodStore(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_shipment_method_store > 12
     * </code>
     *
     * @param     mixed $idShipmentMethodStore The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdShipmentMethodStore($idShipmentMethodStore = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idShipmentMethodStore)) {
            $useMinMax = false;
            if (isset($idShipmentMethodStore['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyShipmentMethodStoreTableMap::COL_ID_SHIPMENT_METHOD_STORE, $idShipmentMethodStore['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idShipmentMethodStore['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyShipmentMethodStoreTableMap::COL_ID_SHIPMENT_METHOD_STORE, $idShipmentMethodStore['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idShipmentMethodStore of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyShipmentMethodStoreTableMap::COL_ID_SHIPMENT_METHOD_STORE, $idShipmentMethodStore, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkShipmentMethod Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkShipmentMethod_Between(array $fkShipmentMethod)
    {
        return $this->filterByFkShipmentMethod($fkShipmentMethod, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkShipmentMethods Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkShipmentMethod_In(array $fkShipmentMethods)
    {
        return $this->filterByFkShipmentMethod($fkShipmentMethods, Criteria::IN);
    }

    /**
     * Filter the query on the fk_shipment_method column
     *
     * Example usage:
     * <code>
     * $query->filterByFkShipmentMethod(1234); // WHERE fk_shipment_method = 1234
     * $query->filterByFkShipmentMethod(array(12, 34), Criteria::IN); // WHERE fk_shipment_method IN (12, 34)
     * $query->filterByFkShipmentMethod(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_shipment_method > 12
     * </code>
     *
     * @see       filterByShipmentMethod()
     *
     * @param     mixed $fkShipmentMethod The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkShipmentMethod($fkShipmentMethod = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkShipmentMethod)) {
            $useMinMax = false;
            if (isset($fkShipmentMethod['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyShipmentMethodStoreTableMap::COL_FK_SHIPMENT_METHOD, $fkShipmentMethod['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkShipmentMethod['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyShipmentMethodStoreTableMap::COL_FK_SHIPMENT_METHOD, $fkShipmentMethod['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkShipmentMethod of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyShipmentMethodStoreTableMap::COL_FK_SHIPMENT_METHOD, $fkShipmentMethod, $comparison);

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
                $this->addUsingAlias(SpyShipmentMethodStoreTableMap::COL_FK_STORE, $fkStore['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkStore['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyShipmentMethodStoreTableMap::COL_FK_STORE, $fkStore['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkStore of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyShipmentMethodStoreTableMap::COL_FK_STORE, $fkStore, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\Shipment\Persistence\SpyShipmentMethod object
     *
     * @param \Orm\Zed\Shipment\Persistence\SpyShipmentMethod|ObjectCollection $spyShipmentMethod The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyShipmentMethodStoreQuery The current query, for fluid interface
     */
    public function filterByShipmentMethod($spyShipmentMethod, $comparison = null)
    {
        if ($spyShipmentMethod instanceof \Orm\Zed\Shipment\Persistence\SpyShipmentMethod) {
            return $this
                ->addUsingAlias(SpyShipmentMethodStoreTableMap::COL_FK_SHIPMENT_METHOD, $spyShipmentMethod->getIdShipmentMethod(), $comparison);
        } elseif ($spyShipmentMethod instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyShipmentMethodStoreTableMap::COL_FK_SHIPMENT_METHOD, $spyShipmentMethod->toKeyValue('PrimaryKey', 'IdShipmentMethod'), $comparison);
        } else {
            throw new PropelException('filterByShipmentMethod() only accepts arguments of type \Orm\Zed\Shipment\Persistence\SpyShipmentMethod or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ShipmentMethod relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyShipmentMethodStoreQuery The current query, for fluid interface
     */
    public function joinShipmentMethod($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ShipmentMethod');

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
            $this->addJoinObject($join, 'ShipmentMethod');
        }

        return $this;
    }

    /**
     * Use the ShipmentMethod relation SpyShipmentMethod object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Shipment\Persistence\SpyShipmentMethodQuery A secondary query class using the current class as primary query
     */
    public function useShipmentMethodQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinShipmentMethod($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ShipmentMethod', '\Orm\Zed\Shipment\Persistence\SpyShipmentMethodQuery');
    }

    /**
     * Use the ShipmentMethod relation SpyShipmentMethod object
     *
     * @param callable(\Orm\Zed\Shipment\Persistence\SpyShipmentMethodQuery):\Orm\Zed\Shipment\Persistence\SpyShipmentMethodQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withShipmentMethodQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useShipmentMethodQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the ShipmentMethod relation to the SpyShipmentMethod table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Shipment\Persistence\SpyShipmentMethodQuery The inner query object of the EXISTS statement
     */
    public function useShipmentMethodExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('ShipmentMethod', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the ShipmentMethod relation to the SpyShipmentMethod table for a NOT EXISTS query.
     *
     * @see useShipmentMethodExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Shipment\Persistence\SpyShipmentMethodQuery The inner query object of the NOT EXISTS statement
     */
    public function useShipmentMethodNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('ShipmentMethod', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Store\Persistence\SpyStore object
     *
     * @param \Orm\Zed\Store\Persistence\SpyStore|ObjectCollection $spyStore The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyShipmentMethodStoreQuery The current query, for fluid interface
     */
    public function filterByStore($spyStore, $comparison = null)
    {
        if ($spyStore instanceof \Orm\Zed\Store\Persistence\SpyStore) {
            return $this
                ->addUsingAlias(SpyShipmentMethodStoreTableMap::COL_FK_STORE, $spyStore->getIdStore(), $comparison);
        } elseif ($spyStore instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyShipmentMethodStoreTableMap::COL_FK_STORE, $spyStore->toKeyValue('PrimaryKey', 'IdStore'), $comparison);
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
     * @return $this|ChildSpyShipmentMethodStoreQuery The current query, for fluid interface
     */
    public function joinStore($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useStoreQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
        ?string $joinType = Criteria::INNER_JOIN
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
     * Exclude object from result
     *
     * @param   ChildSpyShipmentMethodStore $spyShipmentMethodStore Object to remove from the list of results
     *
     * @return $this|ChildSpyShipmentMethodStoreQuery The current query, for fluid interface
     */
    public function prune($spyShipmentMethodStore = null)
    {
        if ($spyShipmentMethodStore) {
            $this->addUsingAlias(SpyShipmentMethodStoreTableMap::COL_ID_SHIPMENT_METHOD_STORE, $spyShipmentMethodStore->getIdShipmentMethodStore(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_shipment_method_store table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyShipmentMethodStoreTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyShipmentMethodStoreTableMap::clearInstancePool();
            SpyShipmentMethodStoreTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyShipmentMethodStoreTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyShipmentMethodStoreTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyShipmentMethodStoreTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyShipmentMethodStoreTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SpyShipmentMethodStoreQuery
