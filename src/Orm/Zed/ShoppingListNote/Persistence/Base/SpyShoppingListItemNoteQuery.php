<?php

namespace Orm\Zed\ShoppingListNote\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\ShoppingListNote\Persistence\SpyShoppingListItemNote as ChildSpyShoppingListItemNote;
use Orm\Zed\ShoppingListNote\Persistence\SpyShoppingListItemNoteQuery as ChildSpyShoppingListItemNoteQuery;
use Orm\Zed\ShoppingListNote\Persistence\Map\SpyShoppingListItemNoteTableMap;
use Orm\Zed\ShoppingList\Persistence\SpyShoppingListItem;
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
 * Base class that represents a query for the 'spy_shopping_list_item_note' table.
 *
 *
 *
 * @method     ChildSpyShoppingListItemNoteQuery orderByIdShoppingListItemNote($order = Criteria::ASC) Order by the id_shopping_list_item_note column
 * @method     ChildSpyShoppingListItemNoteQuery orderByFkShoppingListItem($order = Criteria::ASC) Order by the fk_shopping_list_item column
 * @method     ChildSpyShoppingListItemNoteQuery orderByNote($order = Criteria::ASC) Order by the note column
 * @method     ChildSpyShoppingListItemNoteQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildSpyShoppingListItemNoteQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ChildSpyShoppingListItemNoteQuery groupByIdShoppingListItemNote() Group by the id_shopping_list_item_note column
 * @method     ChildSpyShoppingListItemNoteQuery groupByFkShoppingListItem() Group by the fk_shopping_list_item column
 * @method     ChildSpyShoppingListItemNoteQuery groupByNote() Group by the note column
 * @method     ChildSpyShoppingListItemNoteQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildSpyShoppingListItemNoteQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ChildSpyShoppingListItemNoteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyShoppingListItemNoteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyShoppingListItemNoteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyShoppingListItemNoteQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyShoppingListItemNoteQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyShoppingListItemNoteQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyShoppingListItemNoteQuery leftJoinSpyShoppingListItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyShoppingListItem relation
 * @method     ChildSpyShoppingListItemNoteQuery rightJoinSpyShoppingListItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyShoppingListItem relation
 * @method     ChildSpyShoppingListItemNoteQuery innerJoinSpyShoppingListItem($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyShoppingListItem relation
 *
 * @method     ChildSpyShoppingListItemNoteQuery joinWithSpyShoppingListItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyShoppingListItem relation
 *
 * @method     ChildSpyShoppingListItemNoteQuery leftJoinWithSpyShoppingListItem() Adds a LEFT JOIN clause and with to the query using the SpyShoppingListItem relation
 * @method     ChildSpyShoppingListItemNoteQuery rightJoinWithSpyShoppingListItem() Adds a RIGHT JOIN clause and with to the query using the SpyShoppingListItem relation
 * @method     ChildSpyShoppingListItemNoteQuery innerJoinWithSpyShoppingListItem() Adds a INNER JOIN clause and with to the query using the SpyShoppingListItem relation
 *
 * @method     \Orm\Zed\ShoppingList\Persistence\SpyShoppingListItemQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyShoppingListItemNote|null findOne(ConnectionInterface $con = null) Return the first ChildSpyShoppingListItemNote matching the query
 * @method     ChildSpyShoppingListItemNote findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyShoppingListItemNote matching the query, or a new ChildSpyShoppingListItemNote object populated from the query conditions when no match is found
 *
 * @method     ChildSpyShoppingListItemNote|null findOneByIdShoppingListItemNote(int $id_shopping_list_item_note) Return the first ChildSpyShoppingListItemNote filtered by the id_shopping_list_item_note column
 * @method     ChildSpyShoppingListItemNote|null findOneByFkShoppingListItem(int $fk_shopping_list_item) Return the first ChildSpyShoppingListItemNote filtered by the fk_shopping_list_item column
 * @method     ChildSpyShoppingListItemNote|null findOneByNote(string $note) Return the first ChildSpyShoppingListItemNote filtered by the note column
 * @method     ChildSpyShoppingListItemNote|null findOneByCreatedAt(string $created_at) Return the first ChildSpyShoppingListItemNote filtered by the created_at column
 * @method     ChildSpyShoppingListItemNote|null findOneByUpdatedAt(string $updated_at) Return the first ChildSpyShoppingListItemNote filtered by the updated_at column *

 * @method     ChildSpyShoppingListItemNote requirePk($key, ConnectionInterface $con = null) Return the ChildSpyShoppingListItemNote by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyShoppingListItemNote requireOne(ConnectionInterface $con = null) Return the first ChildSpyShoppingListItemNote matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyShoppingListItemNote requireOneByIdShoppingListItemNote(int $id_shopping_list_item_note) Return the first ChildSpyShoppingListItemNote filtered by the id_shopping_list_item_note column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyShoppingListItemNote requireOneByFkShoppingListItem(int $fk_shopping_list_item) Return the first ChildSpyShoppingListItemNote filtered by the fk_shopping_list_item column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyShoppingListItemNote requireOneByNote(string $note) Return the first ChildSpyShoppingListItemNote filtered by the note column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyShoppingListItemNote requireOneByCreatedAt(string $created_at) Return the first ChildSpyShoppingListItemNote filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyShoppingListItemNote requireOneByUpdatedAt(string $updated_at) Return the first ChildSpyShoppingListItemNote filtered by the updated_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyShoppingListItemNote[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyShoppingListItemNote objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyShoppingListItemNote> find(ConnectionInterface $con = null) Return ChildSpyShoppingListItemNote objects based on current ModelCriteria
 * @method     ChildSpyShoppingListItemNote[]|ObjectCollection findByIdShoppingListItemNote(int $id_shopping_list_item_note) Return ChildSpyShoppingListItemNote objects filtered by the id_shopping_list_item_note column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyShoppingListItemNote> findByIdShoppingListItemNote(int $id_shopping_list_item_note) Return ChildSpyShoppingListItemNote objects filtered by the id_shopping_list_item_note column
 * @method     ChildSpyShoppingListItemNote[]|ObjectCollection findByFkShoppingListItem(int $fk_shopping_list_item) Return ChildSpyShoppingListItemNote objects filtered by the fk_shopping_list_item column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyShoppingListItemNote> findByFkShoppingListItem(int $fk_shopping_list_item) Return ChildSpyShoppingListItemNote objects filtered by the fk_shopping_list_item column
 * @method     ChildSpyShoppingListItemNote[]|ObjectCollection findByNote(string $note) Return ChildSpyShoppingListItemNote objects filtered by the note column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyShoppingListItemNote> findByNote(string $note) Return ChildSpyShoppingListItemNote objects filtered by the note column
 * @method     ChildSpyShoppingListItemNote[]|ObjectCollection findByCreatedAt(string $created_at) Return ChildSpyShoppingListItemNote objects filtered by the created_at column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyShoppingListItemNote> findByCreatedAt(string $created_at) Return ChildSpyShoppingListItemNote objects filtered by the created_at column
 * @method     ChildSpyShoppingListItemNote[]|ObjectCollection findByUpdatedAt(string $updated_at) Return ChildSpyShoppingListItemNote objects filtered by the updated_at column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyShoppingListItemNote> findByUpdatedAt(string $updated_at) Return ChildSpyShoppingListItemNote objects filtered by the updated_at column
 * @method     ChildSpyShoppingListItemNote[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyShoppingListItemNote> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyShoppingListItemNoteQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\ShoppingListNote\Persistence\Base\SpyShoppingListItemNoteQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\ShoppingListNote\\Persistence\\SpyShoppingListItemNote', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyShoppingListItemNoteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyShoppingListItemNoteQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyShoppingListItemNoteQuery) {
            return $criteria;
        }
        $query = new ChildSpyShoppingListItemNoteQuery();
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
     * @return ChildSpyShoppingListItemNote|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyShoppingListItemNoteTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyShoppingListItemNote A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_shopping_list_item_note, fk_shopping_list_item, note, created_at, updated_at FROM spy_shopping_list_item_note WHERE id_shopping_list_item_note = :p0';
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
            /** @var ChildSpyShoppingListItemNote $obj */
            $obj = new ChildSpyShoppingListItemNote();
            $obj->hydrate($row);
            SpyShoppingListItemNoteTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyShoppingListItemNote|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyShoppingListItemNoteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyShoppingListItemNoteTableMap::COL_ID_SHOPPING_LIST_ITEM_NOTE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyShoppingListItemNoteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyShoppingListItemNoteTableMap::COL_ID_SHOPPING_LIST_ITEM_NOTE, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idShoppingListItemNote Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdShoppingListItemNote_Between(array $idShoppingListItemNote)
    {
        return $this->filterByIdShoppingListItemNote($idShoppingListItemNote, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idShoppingListItemNotes Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdShoppingListItemNote_In(array $idShoppingListItemNotes)
    {
        return $this->filterByIdShoppingListItemNote($idShoppingListItemNotes, Criteria::IN);
    }

    /**
     * Filter the query on the id_shopping_list_item_note column
     *
     * Example usage:
     * <code>
     * $query->filterByIdShoppingListItemNote(1234); // WHERE id_shopping_list_item_note = 1234
     * $query->filterByIdShoppingListItemNote(array(12, 34), Criteria::IN); // WHERE id_shopping_list_item_note IN (12, 34)
     * $query->filterByIdShoppingListItemNote(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_shopping_list_item_note > 12
     * </code>
     *
     * @param     mixed $idShoppingListItemNote The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdShoppingListItemNote($idShoppingListItemNote = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idShoppingListItemNote)) {
            $useMinMax = false;
            if (isset($idShoppingListItemNote['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyShoppingListItemNoteTableMap::COL_ID_SHOPPING_LIST_ITEM_NOTE, $idShoppingListItemNote['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idShoppingListItemNote['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyShoppingListItemNoteTableMap::COL_ID_SHOPPING_LIST_ITEM_NOTE, $idShoppingListItemNote['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idShoppingListItemNote of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyShoppingListItemNoteTableMap::COL_ID_SHOPPING_LIST_ITEM_NOTE, $idShoppingListItemNote, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkShoppingListItem Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkShoppingListItem_Between(array $fkShoppingListItem)
    {
        return $this->filterByFkShoppingListItem($fkShoppingListItem, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkShoppingListItems Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkShoppingListItem_In(array $fkShoppingListItems)
    {
        return $this->filterByFkShoppingListItem($fkShoppingListItems, Criteria::IN);
    }

    /**
     * Filter the query on the fk_shopping_list_item column
     *
     * Example usage:
     * <code>
     * $query->filterByFkShoppingListItem(1234); // WHERE fk_shopping_list_item = 1234
     * $query->filterByFkShoppingListItem(array(12, 34), Criteria::IN); // WHERE fk_shopping_list_item IN (12, 34)
     * $query->filterByFkShoppingListItem(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_shopping_list_item > 12
     * </code>
     *
     * @see       filterBySpyShoppingListItem()
     *
     * @param     mixed $fkShoppingListItem The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkShoppingListItem($fkShoppingListItem = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkShoppingListItem)) {
            $useMinMax = false;
            if (isset($fkShoppingListItem['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyShoppingListItemNoteTableMap::COL_FK_SHOPPING_LIST_ITEM, $fkShoppingListItem['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkShoppingListItem['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyShoppingListItemNoteTableMap::COL_FK_SHOPPING_LIST_ITEM, $fkShoppingListItem['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkShoppingListItem of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyShoppingListItemNoteTableMap::COL_FK_SHOPPING_LIST_ITEM, $fkShoppingListItem, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $notes Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByNote_In(array $notes)
    {
        return $this->filterByNote($notes, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $note Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByNote_Like($note)
    {
        return $this->filterByNote($note, Criteria::LIKE);
    }

    /**
     * Filter the query on the note column
     *
     * Example usage:
     * <code>
     * $query->filterByNote('fooValue');   // WHERE note = 'fooValue'
     * $query->filterByNote('%fooValue%', Criteria::LIKE); // WHERE note LIKE '%fooValue%'
     * $query->filterByNote([1, 'foo'], Criteria::IN); // WHERE note IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $note The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByNote($note = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $note = str_replace('*', '%', $note);
        }

        if (is_array($note) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$note of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyShoppingListItemNoteTableMap::COL_NOTE, $note, $comparison);

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
                $this->addUsingAlias(SpyShoppingListItemNoteTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyShoppingListItemNoteTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$createdAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyShoppingListItemNoteTableMap::COL_CREATED_AT, $createdAt, $comparison);

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
                $this->addUsingAlias(SpyShoppingListItemNoteTableMap::COL_UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyShoppingListItemNoteTableMap::COL_UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$updatedAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyShoppingListItemNoteTableMap::COL_UPDATED_AT, $updatedAt, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\ShoppingList\Persistence\SpyShoppingListItem object
     *
     * @param \Orm\Zed\ShoppingList\Persistence\SpyShoppingListItem|ObjectCollection $spyShoppingListItem The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyShoppingListItemNoteQuery The current query, for fluid interface
     */
    public function filterBySpyShoppingListItem($spyShoppingListItem, $comparison = null)
    {
        if ($spyShoppingListItem instanceof \Orm\Zed\ShoppingList\Persistence\SpyShoppingListItem) {
            return $this
                ->addUsingAlias(SpyShoppingListItemNoteTableMap::COL_FK_SHOPPING_LIST_ITEM, $spyShoppingListItem->getIdShoppingListItem(), $comparison);
        } elseif ($spyShoppingListItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyShoppingListItemNoteTableMap::COL_FK_SHOPPING_LIST_ITEM, $spyShoppingListItem->toKeyValue('PrimaryKey', 'IdShoppingListItem'), $comparison);
        } else {
            throw new PropelException('filterBySpyShoppingListItem() only accepts arguments of type \Orm\Zed\ShoppingList\Persistence\SpyShoppingListItem or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyShoppingListItem relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyShoppingListItemNoteQuery The current query, for fluid interface
     */
    public function joinSpyShoppingListItem($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyShoppingListItem');

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
            $this->addJoinObject($join, 'SpyShoppingListItem');
        }

        return $this;
    }

    /**
     * Use the SpyShoppingListItem relation SpyShoppingListItem object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\ShoppingList\Persistence\SpyShoppingListItemQuery A secondary query class using the current class as primary query
     */
    public function useSpyShoppingListItemQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyShoppingListItem($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyShoppingListItem', '\Orm\Zed\ShoppingList\Persistence\SpyShoppingListItemQuery');
    }

    /**
     * Use the SpyShoppingListItem relation SpyShoppingListItem object
     *
     * @param callable(\Orm\Zed\ShoppingList\Persistence\SpyShoppingListItemQuery):\Orm\Zed\ShoppingList\Persistence\SpyShoppingListItemQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyShoppingListItemQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyShoppingListItemQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyShoppingListItem table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\ShoppingList\Persistence\SpyShoppingListItemQuery The inner query object of the EXISTS statement
     */
    public function useSpyShoppingListItemExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyShoppingListItem', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyShoppingListItem table for a NOT EXISTS query.
     *
     * @see useSpyShoppingListItemExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\ShoppingList\Persistence\SpyShoppingListItemQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyShoppingListItemNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyShoppingListItem', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Exclude object from result
     *
     * @param   ChildSpyShoppingListItemNote $spyShoppingListItemNote Object to remove from the list of results
     *
     * @return $this|ChildSpyShoppingListItemNoteQuery The current query, for fluid interface
     */
    public function prune($spyShoppingListItemNote = null)
    {
        if ($spyShoppingListItemNote) {
            $this->addUsingAlias(SpyShoppingListItemNoteTableMap::COL_ID_SHOPPING_LIST_ITEM_NOTE, $spyShoppingListItemNote->getIdShoppingListItemNote(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_shopping_list_item_note table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyShoppingListItemNoteTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyShoppingListItemNoteTableMap::clearInstancePool();
            SpyShoppingListItemNoteTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyShoppingListItemNoteTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyShoppingListItemNoteTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyShoppingListItemNoteTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyShoppingListItemNoteTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    // timestampable behavior

    /**
     * Filter by the latest updated
     *
     * @param      int $nbDays Maximum age of the latest update in days
     *
     * @return     $this|ChildSpyShoppingListItemNoteQuery The current query, for fluid interface
     */
    public function recentlyUpdated($nbDays = 7)
    {
        return $this->addUsingAlias(SpyShoppingListItemNoteTableMap::COL_UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by update date desc
     *
     * @return     $this|ChildSpyShoppingListItemNoteQuery The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        return $this->addDescendingOrderByColumn(SpyShoppingListItemNoteTableMap::COL_UPDATED_AT);
    }

    /**
     * Order by update date asc
     *
     * @return     $this|ChildSpyShoppingListItemNoteQuery The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        return $this->addAscendingOrderByColumn(SpyShoppingListItemNoteTableMap::COL_UPDATED_AT);
    }

    /**
     * Order by create date desc
     *
     * @return     $this|ChildSpyShoppingListItemNoteQuery The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        return $this->addDescendingOrderByColumn(SpyShoppingListItemNoteTableMap::COL_CREATED_AT);
    }

    /**
     * Filter by the latest created
     *
     * @param      int $nbDays Maximum age of in days
     *
     * @return     $this|ChildSpyShoppingListItemNoteQuery The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        return $this->addUsingAlias(SpyShoppingListItemNoteTableMap::COL_CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by create date asc
     *
     * @return     $this|ChildSpyShoppingListItemNoteQuery The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        return $this->addAscendingOrderByColumn(SpyShoppingListItemNoteTableMap::COL_CREATED_AT);
    }

} // SpyShoppingListItemNoteQuery
