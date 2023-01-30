<?php

namespace Orm\Zed\StateMachine\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\ExampleStateMachine\Persistence\PyzExampleStateMachineItem;
use Orm\Zed\StateMachine\Persistence\SpyStateMachineItemState as ChildSpyStateMachineItemState;
use Orm\Zed\StateMachine\Persistence\SpyStateMachineItemStateQuery as ChildSpyStateMachineItemStateQuery;
use Orm\Zed\StateMachine\Persistence\Map\SpyStateMachineItemStateTableMap;
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
 * Base class that represents a query for the 'spy_state_machine_item_state' table.
 *
 *
 *
 * @method     ChildSpyStateMachineItemStateQuery orderByIdStateMachineItemState($order = Criteria::ASC) Order by the id_state_machine_item_state column
 * @method     ChildSpyStateMachineItemStateQuery orderByFkStateMachineProcess($order = Criteria::ASC) Order by the fk_state_machine_process column
 * @method     ChildSpyStateMachineItemStateQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     ChildSpyStateMachineItemStateQuery orderByName($order = Criteria::ASC) Order by the name column
 *
 * @method     ChildSpyStateMachineItemStateQuery groupByIdStateMachineItemState() Group by the id_state_machine_item_state column
 * @method     ChildSpyStateMachineItemStateQuery groupByFkStateMachineProcess() Group by the fk_state_machine_process column
 * @method     ChildSpyStateMachineItemStateQuery groupByDescription() Group by the description column
 * @method     ChildSpyStateMachineItemStateQuery groupByName() Group by the name column
 *
 * @method     ChildSpyStateMachineItemStateQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyStateMachineItemStateQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyStateMachineItemStateQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyStateMachineItemStateQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyStateMachineItemStateQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyStateMachineItemStateQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyStateMachineItemStateQuery leftJoinProcess($relationAlias = null) Adds a LEFT JOIN clause to the query using the Process relation
 * @method     ChildSpyStateMachineItemStateQuery rightJoinProcess($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Process relation
 * @method     ChildSpyStateMachineItemStateQuery innerJoinProcess($relationAlias = null) Adds a INNER JOIN clause to the query using the Process relation
 *
 * @method     ChildSpyStateMachineItemStateQuery joinWithProcess($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Process relation
 *
 * @method     ChildSpyStateMachineItemStateQuery leftJoinWithProcess() Adds a LEFT JOIN clause and with to the query using the Process relation
 * @method     ChildSpyStateMachineItemStateQuery rightJoinWithProcess() Adds a RIGHT JOIN clause and with to the query using the Process relation
 * @method     ChildSpyStateMachineItemStateQuery innerJoinWithProcess() Adds a INNER JOIN clause and with to the query using the Process relation
 *
 * @method     ChildSpyStateMachineItemStateQuery leftJoinStateMachineItemState($relationAlias = null) Adds a LEFT JOIN clause to the query using the StateMachineItemState relation
 * @method     ChildSpyStateMachineItemStateQuery rightJoinStateMachineItemState($relationAlias = null) Adds a RIGHT JOIN clause to the query using the StateMachineItemState relation
 * @method     ChildSpyStateMachineItemStateQuery innerJoinStateMachineItemState($relationAlias = null) Adds a INNER JOIN clause to the query using the StateMachineItemState relation
 *
 * @method     ChildSpyStateMachineItemStateQuery joinWithStateMachineItemState($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the StateMachineItemState relation
 *
 * @method     ChildSpyStateMachineItemStateQuery leftJoinWithStateMachineItemState() Adds a LEFT JOIN clause and with to the query using the StateMachineItemState relation
 * @method     ChildSpyStateMachineItemStateQuery rightJoinWithStateMachineItemState() Adds a RIGHT JOIN clause and with to the query using the StateMachineItemState relation
 * @method     ChildSpyStateMachineItemStateQuery innerJoinWithStateMachineItemState() Adds a INNER JOIN clause and with to the query using the StateMachineItemState relation
 *
 * @method     ChildSpyStateMachineItemStateQuery leftJoinStateHistory($relationAlias = null) Adds a LEFT JOIN clause to the query using the StateHistory relation
 * @method     ChildSpyStateMachineItemStateQuery rightJoinStateHistory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the StateHistory relation
 * @method     ChildSpyStateMachineItemStateQuery innerJoinStateHistory($relationAlias = null) Adds a INNER JOIN clause to the query using the StateHistory relation
 *
 * @method     ChildSpyStateMachineItemStateQuery joinWithStateHistory($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the StateHistory relation
 *
 * @method     ChildSpyStateMachineItemStateQuery leftJoinWithStateHistory() Adds a LEFT JOIN clause and with to the query using the StateHistory relation
 * @method     ChildSpyStateMachineItemStateQuery rightJoinWithStateHistory() Adds a RIGHT JOIN clause and with to the query using the StateHistory relation
 * @method     ChildSpyStateMachineItemStateQuery innerJoinWithStateHistory() Adds a INNER JOIN clause and with to the query using the StateHistory relation
 *
 * @method     ChildSpyStateMachineItemStateQuery leftJoinEventTimeout($relationAlias = null) Adds a LEFT JOIN clause to the query using the EventTimeout relation
 * @method     ChildSpyStateMachineItemStateQuery rightJoinEventTimeout($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EventTimeout relation
 * @method     ChildSpyStateMachineItemStateQuery innerJoinEventTimeout($relationAlias = null) Adds a INNER JOIN clause to the query using the EventTimeout relation
 *
 * @method     ChildSpyStateMachineItemStateQuery joinWithEventTimeout($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the EventTimeout relation
 *
 * @method     ChildSpyStateMachineItemStateQuery leftJoinWithEventTimeout() Adds a LEFT JOIN clause and with to the query using the EventTimeout relation
 * @method     ChildSpyStateMachineItemStateQuery rightJoinWithEventTimeout() Adds a RIGHT JOIN clause and with to the query using the EventTimeout relation
 * @method     ChildSpyStateMachineItemStateQuery innerJoinWithEventTimeout() Adds a INNER JOIN clause and with to the query using the EventTimeout relation
 *
 * @method     \Orm\Zed\StateMachine\Persistence\SpyStateMachineProcessQuery|\Orm\Zed\ExampleStateMachine\Persistence\PyzExampleStateMachineItemQuery|\Orm\Zed\StateMachine\Persistence\SpyStateMachineItemStateHistoryQuery|\Orm\Zed\StateMachine\Persistence\SpyStateMachineEventTimeoutQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyStateMachineItemState|null findOne(ConnectionInterface $con = null) Return the first ChildSpyStateMachineItemState matching the query
 * @method     ChildSpyStateMachineItemState findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyStateMachineItemState matching the query, or a new ChildSpyStateMachineItemState object populated from the query conditions when no match is found
 *
 * @method     ChildSpyStateMachineItemState|null findOneByIdStateMachineItemState(int $id_state_machine_item_state) Return the first ChildSpyStateMachineItemState filtered by the id_state_machine_item_state column
 * @method     ChildSpyStateMachineItemState|null findOneByFkStateMachineProcess(int $fk_state_machine_process) Return the first ChildSpyStateMachineItemState filtered by the fk_state_machine_process column
 * @method     ChildSpyStateMachineItemState|null findOneByDescription(string $description) Return the first ChildSpyStateMachineItemState filtered by the description column
 * @method     ChildSpyStateMachineItemState|null findOneByName(string $name) Return the first ChildSpyStateMachineItemState filtered by the name column *

 * @method     ChildSpyStateMachineItemState requirePk($key, ConnectionInterface $con = null) Return the ChildSpyStateMachineItemState by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyStateMachineItemState requireOne(ConnectionInterface $con = null) Return the first ChildSpyStateMachineItemState matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyStateMachineItemState requireOneByIdStateMachineItemState(int $id_state_machine_item_state) Return the first ChildSpyStateMachineItemState filtered by the id_state_machine_item_state column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyStateMachineItemState requireOneByFkStateMachineProcess(int $fk_state_machine_process) Return the first ChildSpyStateMachineItemState filtered by the fk_state_machine_process column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyStateMachineItemState requireOneByDescription(string $description) Return the first ChildSpyStateMachineItemState filtered by the description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyStateMachineItemState requireOneByName(string $name) Return the first ChildSpyStateMachineItemState filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyStateMachineItemState[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyStateMachineItemState objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyStateMachineItemState> find(ConnectionInterface $con = null) Return ChildSpyStateMachineItemState objects based on current ModelCriteria
 * @method     ChildSpyStateMachineItemState[]|ObjectCollection findByIdStateMachineItemState(int $id_state_machine_item_state) Return ChildSpyStateMachineItemState objects filtered by the id_state_machine_item_state column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyStateMachineItemState> findByIdStateMachineItemState(int $id_state_machine_item_state) Return ChildSpyStateMachineItemState objects filtered by the id_state_machine_item_state column
 * @method     ChildSpyStateMachineItemState[]|ObjectCollection findByFkStateMachineProcess(int $fk_state_machine_process) Return ChildSpyStateMachineItemState objects filtered by the fk_state_machine_process column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyStateMachineItemState> findByFkStateMachineProcess(int $fk_state_machine_process) Return ChildSpyStateMachineItemState objects filtered by the fk_state_machine_process column
 * @method     ChildSpyStateMachineItemState[]|ObjectCollection findByDescription(string $description) Return ChildSpyStateMachineItemState objects filtered by the description column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyStateMachineItemState> findByDescription(string $description) Return ChildSpyStateMachineItemState objects filtered by the description column
 * @method     ChildSpyStateMachineItemState[]|ObjectCollection findByName(string $name) Return ChildSpyStateMachineItemState objects filtered by the name column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyStateMachineItemState> findByName(string $name) Return ChildSpyStateMachineItemState objects filtered by the name column
 * @method     ChildSpyStateMachineItemState[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyStateMachineItemState> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyStateMachineItemStateQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\StateMachine\Persistence\Base\SpyStateMachineItemStateQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\StateMachine\\Persistence\\SpyStateMachineItemState', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyStateMachineItemStateQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyStateMachineItemStateQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyStateMachineItemStateQuery) {
            return $criteria;
        }
        $query = new ChildSpyStateMachineItemStateQuery();
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
     * @return ChildSpyStateMachineItemState|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyStateMachineItemStateTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyStateMachineItemState A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT `id_state_machine_item_state`, `fk_state_machine_process`, `description`, `name` FROM `spy_state_machine_item_state` WHERE `id_state_machine_item_state` = :p0';
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
            /** @var ChildSpyStateMachineItemState $obj */
            $obj = new ChildSpyStateMachineItemState();
            $obj->hydrate($row);
            SpyStateMachineItemStateTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyStateMachineItemState|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyStateMachineItemStateQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyStateMachineItemStateTableMap::COL_ID_STATE_MACHINE_ITEM_STATE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyStateMachineItemStateQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyStateMachineItemStateTableMap::COL_ID_STATE_MACHINE_ITEM_STATE, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idStateMachineItemState Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdStateMachineItemState_Between(array $idStateMachineItemState)
    {
        return $this->filterByIdStateMachineItemState($idStateMachineItemState, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idStateMachineItemStates Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdStateMachineItemState_In(array $idStateMachineItemStates)
    {
        return $this->filterByIdStateMachineItemState($idStateMachineItemStates, Criteria::IN);
    }

    /**
     * Filter the query on the id_state_machine_item_state column
     *
     * Example usage:
     * <code>
     * $query->filterByIdStateMachineItemState(1234); // WHERE id_state_machine_item_state = 1234
     * $query->filterByIdStateMachineItemState(array(12, 34), Criteria::IN); // WHERE id_state_machine_item_state IN (12, 34)
     * $query->filterByIdStateMachineItemState(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_state_machine_item_state > 12
     * </code>
     *
     * @param     mixed $idStateMachineItemState The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdStateMachineItemState($idStateMachineItemState = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idStateMachineItemState)) {
            $useMinMax = false;
            if (isset($idStateMachineItemState['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyStateMachineItemStateTableMap::COL_ID_STATE_MACHINE_ITEM_STATE, $idStateMachineItemState['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idStateMachineItemState['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyStateMachineItemStateTableMap::COL_ID_STATE_MACHINE_ITEM_STATE, $idStateMachineItemState['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idStateMachineItemState of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyStateMachineItemStateTableMap::COL_ID_STATE_MACHINE_ITEM_STATE, $idStateMachineItemState, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkStateMachineProcess Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkStateMachineProcess_Between(array $fkStateMachineProcess)
    {
        return $this->filterByFkStateMachineProcess($fkStateMachineProcess, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkStateMachineProcesss Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkStateMachineProcess_In(array $fkStateMachineProcesss)
    {
        return $this->filterByFkStateMachineProcess($fkStateMachineProcesss, Criteria::IN);
    }

    /**
     * Filter the query on the fk_state_machine_process column
     *
     * Example usage:
     * <code>
     * $query->filterByFkStateMachineProcess(1234); // WHERE fk_state_machine_process = 1234
     * $query->filterByFkStateMachineProcess(array(12, 34), Criteria::IN); // WHERE fk_state_machine_process IN (12, 34)
     * $query->filterByFkStateMachineProcess(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_state_machine_process > 12
     * </code>
     *
     * @see       filterByProcess()
     *
     * @param     mixed $fkStateMachineProcess The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkStateMachineProcess($fkStateMachineProcess = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkStateMachineProcess)) {
            $useMinMax = false;
            if (isset($fkStateMachineProcess['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyStateMachineItemStateTableMap::COL_FK_STATE_MACHINE_PROCESS, $fkStateMachineProcess['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkStateMachineProcess['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyStateMachineItemStateTableMap::COL_FK_STATE_MACHINE_PROCESS, $fkStateMachineProcess['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkStateMachineProcess of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyStateMachineItemStateTableMap::COL_FK_STATE_MACHINE_PROCESS, $fkStateMachineProcess, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $descriptions Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDescription_In(array $descriptions)
    {
        return $this->filterByDescription($descriptions, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $description Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDescription_Like($description)
    {
        return $this->filterByDescription($description, Criteria::LIKE);
    }

    /**
     * Filter the query on the description column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
     * $query->filterByDescription('%fooValue%', Criteria::LIKE); // WHERE description LIKE '%fooValue%'
     * $query->filterByDescription([1, 'foo'], Criteria::IN); // WHERE description IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $description The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByDescription($description = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $description = str_replace('*', '%', $description);
        }

        if (is_array($description) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$description of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyStateMachineItemStateTableMap::COL_DESCRIPTION, $description, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $names Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByName_In(array $names)
    {
        return $this->filterByName($names, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $name Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByName_Like($name)
    {
        return $this->filterByName($name, Criteria::LIKE);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%', Criteria::LIKE); // WHERE name LIKE '%fooValue%'
     * $query->filterByName([1, 'foo'], Criteria::IN); // WHERE name IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByName($name = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $name = str_replace('*', '%', $name);
        }

        if (is_array($name) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$name of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyStateMachineItemStateTableMap::COL_NAME, $name, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\StateMachine\Persistence\SpyStateMachineProcess object
     *
     * @param \Orm\Zed\StateMachine\Persistence\SpyStateMachineProcess|ObjectCollection $spyStateMachineProcess The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyStateMachineItemStateQuery The current query, for fluid interface
     */
    public function filterByProcess($spyStateMachineProcess, $comparison = null)
    {
        if ($spyStateMachineProcess instanceof \Orm\Zed\StateMachine\Persistence\SpyStateMachineProcess) {
            return $this
                ->addUsingAlias(SpyStateMachineItemStateTableMap::COL_FK_STATE_MACHINE_PROCESS, $spyStateMachineProcess->getIdStateMachineProcess(), $comparison);
        } elseif ($spyStateMachineProcess instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyStateMachineItemStateTableMap::COL_FK_STATE_MACHINE_PROCESS, $spyStateMachineProcess->toKeyValue('PrimaryKey', 'IdStateMachineProcess'), $comparison);
        } else {
            throw new PropelException('filterByProcess() only accepts arguments of type \Orm\Zed\StateMachine\Persistence\SpyStateMachineProcess or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Process relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyStateMachineItemStateQuery The current query, for fluid interface
     */
    public function joinProcess($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Process');

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
            $this->addJoinObject($join, 'Process');
        }

        return $this;
    }

    /**
     * Use the Process relation SpyStateMachineProcess object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\StateMachine\Persistence\SpyStateMachineProcessQuery A secondary query class using the current class as primary query
     */
    public function useProcessQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProcess($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Process', '\Orm\Zed\StateMachine\Persistence\SpyStateMachineProcessQuery');
    }

    /**
     * Use the Process relation SpyStateMachineProcess object
     *
     * @param callable(\Orm\Zed\StateMachine\Persistence\SpyStateMachineProcessQuery):\Orm\Zed\StateMachine\Persistence\SpyStateMachineProcessQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withProcessQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useProcessQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the Process relation to the SpyStateMachineProcess table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\StateMachine\Persistence\SpyStateMachineProcessQuery The inner query object of the EXISTS statement
     */
    public function useProcessExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('Process', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the Process relation to the SpyStateMachineProcess table for a NOT EXISTS query.
     *
     * @see useProcessExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\StateMachine\Persistence\SpyStateMachineProcessQuery The inner query object of the NOT EXISTS statement
     */
    public function useProcessNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('Process', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\ExampleStateMachine\Persistence\PyzExampleStateMachineItem object
     *
     * @param \Orm\Zed\ExampleStateMachine\Persistence\PyzExampleStateMachineItem|ObjectCollection $pyzExampleStateMachineItem the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyStateMachineItemStateQuery The current query, for fluid interface
     */
    public function filterByStateMachineItemState($pyzExampleStateMachineItem, $comparison = null)
    {
        if ($pyzExampleStateMachineItem instanceof \Orm\Zed\ExampleStateMachine\Persistence\PyzExampleStateMachineItem) {
            return $this
                ->addUsingAlias(SpyStateMachineItemStateTableMap::COL_ID_STATE_MACHINE_ITEM_STATE, $pyzExampleStateMachineItem->getFkStateMachineItemState(), $comparison);
        } elseif ($pyzExampleStateMachineItem instanceof ObjectCollection) {
            return $this
                ->useStateMachineItemStateQuery()
                ->filterByPrimaryKeys($pyzExampleStateMachineItem->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByStateMachineItemState() only accepts arguments of type \Orm\Zed\ExampleStateMachine\Persistence\PyzExampleStateMachineItem or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the StateMachineItemState relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyStateMachineItemStateQuery The current query, for fluid interface
     */
    public function joinStateMachineItemState($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('StateMachineItemState');

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
            $this->addJoinObject($join, 'StateMachineItemState');
        }

        return $this;
    }

    /**
     * Use the StateMachineItemState relation PyzExampleStateMachineItem object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\ExampleStateMachine\Persistence\PyzExampleStateMachineItemQuery A secondary query class using the current class as primary query
     */
    public function useStateMachineItemStateQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinStateMachineItemState($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'StateMachineItemState', '\Orm\Zed\ExampleStateMachine\Persistence\PyzExampleStateMachineItemQuery');
    }

    /**
     * Use the StateMachineItemState relation PyzExampleStateMachineItem object
     *
     * @param callable(\Orm\Zed\ExampleStateMachine\Persistence\PyzExampleStateMachineItemQuery):\Orm\Zed\ExampleStateMachine\Persistence\PyzExampleStateMachineItemQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withStateMachineItemStateQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useStateMachineItemStateQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the StateMachineItemState relation to the PyzExampleStateMachineItem table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\ExampleStateMachine\Persistence\PyzExampleStateMachineItemQuery The inner query object of the EXISTS statement
     */
    public function useStateMachineItemStateExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('StateMachineItemState', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the StateMachineItemState relation to the PyzExampleStateMachineItem table for a NOT EXISTS query.
     *
     * @see useStateMachineItemStateExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\ExampleStateMachine\Persistence\PyzExampleStateMachineItemQuery The inner query object of the NOT EXISTS statement
     */
    public function useStateMachineItemStateNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('StateMachineItemState', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\StateMachine\Persistence\SpyStateMachineItemStateHistory object
     *
     * @param \Orm\Zed\StateMachine\Persistence\SpyStateMachineItemStateHistory|ObjectCollection $spyStateMachineItemStateHistory the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyStateMachineItemStateQuery The current query, for fluid interface
     */
    public function filterByStateHistory($spyStateMachineItemStateHistory, $comparison = null)
    {
        if ($spyStateMachineItemStateHistory instanceof \Orm\Zed\StateMachine\Persistence\SpyStateMachineItemStateHistory) {
            return $this
                ->addUsingAlias(SpyStateMachineItemStateTableMap::COL_ID_STATE_MACHINE_ITEM_STATE, $spyStateMachineItemStateHistory->getFkStateMachineItemState(), $comparison);
        } elseif ($spyStateMachineItemStateHistory instanceof ObjectCollection) {
            return $this
                ->useStateHistoryQuery()
                ->filterByPrimaryKeys($spyStateMachineItemStateHistory->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByStateHistory() only accepts arguments of type \Orm\Zed\StateMachine\Persistence\SpyStateMachineItemStateHistory or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the StateHistory relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyStateMachineItemStateQuery The current query, for fluid interface
     */
    public function joinStateHistory($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('StateHistory');

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
            $this->addJoinObject($join, 'StateHistory');
        }

        return $this;
    }

    /**
     * Use the StateHistory relation SpyStateMachineItemStateHistory object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\StateMachine\Persistence\SpyStateMachineItemStateHistoryQuery A secondary query class using the current class as primary query
     */
    public function useStateHistoryQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinStateHistory($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'StateHistory', '\Orm\Zed\StateMachine\Persistence\SpyStateMachineItemStateHistoryQuery');
    }

    /**
     * Use the StateHistory relation SpyStateMachineItemStateHistory object
     *
     * @param callable(\Orm\Zed\StateMachine\Persistence\SpyStateMachineItemStateHistoryQuery):\Orm\Zed\StateMachine\Persistence\SpyStateMachineItemStateHistoryQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withStateHistoryQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useStateHistoryQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the StateHistory relation to the SpyStateMachineItemStateHistory table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\StateMachine\Persistence\SpyStateMachineItemStateHistoryQuery The inner query object of the EXISTS statement
     */
    public function useStateHistoryExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('StateHistory', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the StateHistory relation to the SpyStateMachineItemStateHistory table for a NOT EXISTS query.
     *
     * @see useStateHistoryExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\StateMachine\Persistence\SpyStateMachineItemStateHistoryQuery The inner query object of the NOT EXISTS statement
     */
    public function useStateHistoryNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('StateHistory', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\StateMachine\Persistence\SpyStateMachineEventTimeout object
     *
     * @param \Orm\Zed\StateMachine\Persistence\SpyStateMachineEventTimeout|ObjectCollection $spyStateMachineEventTimeout the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyStateMachineItemStateQuery The current query, for fluid interface
     */
    public function filterByEventTimeout($spyStateMachineEventTimeout, $comparison = null)
    {
        if ($spyStateMachineEventTimeout instanceof \Orm\Zed\StateMachine\Persistence\SpyStateMachineEventTimeout) {
            return $this
                ->addUsingAlias(SpyStateMachineItemStateTableMap::COL_ID_STATE_MACHINE_ITEM_STATE, $spyStateMachineEventTimeout->getFkStateMachineItemState(), $comparison);
        } elseif ($spyStateMachineEventTimeout instanceof ObjectCollection) {
            return $this
                ->useEventTimeoutQuery()
                ->filterByPrimaryKeys($spyStateMachineEventTimeout->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByEventTimeout() only accepts arguments of type \Orm\Zed\StateMachine\Persistence\SpyStateMachineEventTimeout or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the EventTimeout relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyStateMachineItemStateQuery The current query, for fluid interface
     */
    public function joinEventTimeout($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('EventTimeout');

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
            $this->addJoinObject($join, 'EventTimeout');
        }

        return $this;
    }

    /**
     * Use the EventTimeout relation SpyStateMachineEventTimeout object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\StateMachine\Persistence\SpyStateMachineEventTimeoutQuery A secondary query class using the current class as primary query
     */
    public function useEventTimeoutQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEventTimeout($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'EventTimeout', '\Orm\Zed\StateMachine\Persistence\SpyStateMachineEventTimeoutQuery');
    }

    /**
     * Use the EventTimeout relation SpyStateMachineEventTimeout object
     *
     * @param callable(\Orm\Zed\StateMachine\Persistence\SpyStateMachineEventTimeoutQuery):\Orm\Zed\StateMachine\Persistence\SpyStateMachineEventTimeoutQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withEventTimeoutQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useEventTimeoutQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the EventTimeout relation to the SpyStateMachineEventTimeout table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\StateMachine\Persistence\SpyStateMachineEventTimeoutQuery The inner query object of the EXISTS statement
     */
    public function useEventTimeoutExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('EventTimeout', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the EventTimeout relation to the SpyStateMachineEventTimeout table for a NOT EXISTS query.
     *
     * @see useEventTimeoutExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\StateMachine\Persistence\SpyStateMachineEventTimeoutQuery The inner query object of the NOT EXISTS statement
     */
    public function useEventTimeoutNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('EventTimeout', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Exclude object from result
     *
     * @param   ChildSpyStateMachineItemState $spyStateMachineItemState Object to remove from the list of results
     *
     * @return $this|ChildSpyStateMachineItemStateQuery The current query, for fluid interface
     */
    public function prune($spyStateMachineItemState = null)
    {
        if ($spyStateMachineItemState) {
            $this->addUsingAlias(SpyStateMachineItemStateTableMap::COL_ID_STATE_MACHINE_ITEM_STATE, $spyStateMachineItemState->getIdStateMachineItemState(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_state_machine_item_state table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyStateMachineItemStateTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyStateMachineItemStateTableMap::clearInstancePool();
            SpyStateMachineItemStateTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyStateMachineItemStateTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyStateMachineItemStateTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyStateMachineItemStateTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyStateMachineItemStateTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SpyStateMachineItemStateQuery
