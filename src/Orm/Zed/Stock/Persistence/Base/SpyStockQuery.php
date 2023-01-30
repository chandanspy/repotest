<?php

namespace Orm\Zed\Stock\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\StockAddress\Persistence\SpyStockAddress;
use Orm\Zed\Stock\Persistence\SpyStock as ChildSpyStock;
use Orm\Zed\Stock\Persistence\SpyStockQuery as ChildSpyStockQuery;
use Orm\Zed\Stock\Persistence\Map\SpyStockTableMap;
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
 * Base class that represents a query for the 'spy_stock' table.
 *
 *
 *
 * @method     ChildSpyStockQuery orderByIdStock($order = Criteria::ASC) Order by the id_stock column
 * @method     ChildSpyStockQuery orderByIsActive($order = Criteria::ASC) Order by the is_active column
 * @method     ChildSpyStockQuery orderByName($order = Criteria::ASC) Order by the name column
 *
 * @method     ChildSpyStockQuery groupByIdStock() Group by the id_stock column
 * @method     ChildSpyStockQuery groupByIsActive() Group by the is_active column
 * @method     ChildSpyStockQuery groupByName() Group by the name column
 *
 * @method     ChildSpyStockQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyStockQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyStockQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyStockQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyStockQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyStockQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyStockQuery leftJoinStockProduct($relationAlias = null) Adds a LEFT JOIN clause to the query using the StockProduct relation
 * @method     ChildSpyStockQuery rightJoinStockProduct($relationAlias = null) Adds a RIGHT JOIN clause to the query using the StockProduct relation
 * @method     ChildSpyStockQuery innerJoinStockProduct($relationAlias = null) Adds a INNER JOIN clause to the query using the StockProduct relation
 *
 * @method     ChildSpyStockQuery joinWithStockProduct($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the StockProduct relation
 *
 * @method     ChildSpyStockQuery leftJoinWithStockProduct() Adds a LEFT JOIN clause and with to the query using the StockProduct relation
 * @method     ChildSpyStockQuery rightJoinWithStockProduct() Adds a RIGHT JOIN clause and with to the query using the StockProduct relation
 * @method     ChildSpyStockQuery innerJoinWithStockProduct() Adds a INNER JOIN clause and with to the query using the StockProduct relation
 *
 * @method     ChildSpyStockQuery leftJoinStockStore($relationAlias = null) Adds a LEFT JOIN clause to the query using the StockStore relation
 * @method     ChildSpyStockQuery rightJoinStockStore($relationAlias = null) Adds a RIGHT JOIN clause to the query using the StockStore relation
 * @method     ChildSpyStockQuery innerJoinStockStore($relationAlias = null) Adds a INNER JOIN clause to the query using the StockStore relation
 *
 * @method     ChildSpyStockQuery joinWithStockStore($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the StockStore relation
 *
 * @method     ChildSpyStockQuery leftJoinWithStockStore() Adds a LEFT JOIN clause and with to the query using the StockStore relation
 * @method     ChildSpyStockQuery rightJoinWithStockStore() Adds a RIGHT JOIN clause and with to the query using the StockStore relation
 * @method     ChildSpyStockQuery innerJoinWithStockStore() Adds a INNER JOIN clause and with to the query using the StockStore relation
 *
 * @method     ChildSpyStockQuery leftJoinStockAddress($relationAlias = null) Adds a LEFT JOIN clause to the query using the StockAddress relation
 * @method     ChildSpyStockQuery rightJoinStockAddress($relationAlias = null) Adds a RIGHT JOIN clause to the query using the StockAddress relation
 * @method     ChildSpyStockQuery innerJoinStockAddress($relationAlias = null) Adds a INNER JOIN clause to the query using the StockAddress relation
 *
 * @method     ChildSpyStockQuery joinWithStockAddress($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the StockAddress relation
 *
 * @method     ChildSpyStockQuery leftJoinWithStockAddress() Adds a LEFT JOIN clause and with to the query using the StockAddress relation
 * @method     ChildSpyStockQuery rightJoinWithStockAddress() Adds a RIGHT JOIN clause and with to the query using the StockAddress relation
 * @method     ChildSpyStockQuery innerJoinWithStockAddress() Adds a INNER JOIN clause and with to the query using the StockAddress relation
 *
 * @method     \Orm\Zed\Stock\Persistence\SpyStockProductQuery|\Orm\Zed\Stock\Persistence\SpyStockStoreQuery|\Orm\Zed\StockAddress\Persistence\SpyStockAddressQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyStock|null findOne(ConnectionInterface $con = null) Return the first ChildSpyStock matching the query
 * @method     ChildSpyStock findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyStock matching the query, or a new ChildSpyStock object populated from the query conditions when no match is found
 *
 * @method     ChildSpyStock|null findOneByIdStock(int $id_stock) Return the first ChildSpyStock filtered by the id_stock column
 * @method     ChildSpyStock|null findOneByIsActive(boolean $is_active) Return the first ChildSpyStock filtered by the is_active column
 * @method     ChildSpyStock|null findOneByName(string $name) Return the first ChildSpyStock filtered by the name column *

 * @method     ChildSpyStock requirePk($key, ConnectionInterface $con = null) Return the ChildSpyStock by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyStock requireOne(ConnectionInterface $con = null) Return the first ChildSpyStock matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyStock requireOneByIdStock(int $id_stock) Return the first ChildSpyStock filtered by the id_stock column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyStock requireOneByIsActive(boolean $is_active) Return the first ChildSpyStock filtered by the is_active column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyStock requireOneByName(string $name) Return the first ChildSpyStock filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyStock[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyStock objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyStock> find(ConnectionInterface $con = null) Return ChildSpyStock objects based on current ModelCriteria
 * @method     ChildSpyStock[]|ObjectCollection findByIdStock(int $id_stock) Return ChildSpyStock objects filtered by the id_stock column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyStock> findByIdStock(int $id_stock) Return ChildSpyStock objects filtered by the id_stock column
 * @method     ChildSpyStock[]|ObjectCollection findByIsActive(boolean $is_active) Return ChildSpyStock objects filtered by the is_active column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyStock> findByIsActive(boolean $is_active) Return ChildSpyStock objects filtered by the is_active column
 * @method     ChildSpyStock[]|ObjectCollection findByName(string $name) Return ChildSpyStock objects filtered by the name column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyStock> findByName(string $name) Return ChildSpyStock objects filtered by the name column
 * @method     ChildSpyStock[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyStock> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyStockQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\Stock\Persistence\Base\SpyStockQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\Stock\\Persistence\\SpyStock', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyStockQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyStockQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyStockQuery) {
            return $criteria;
        }
        $query = new ChildSpyStockQuery();
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
     * @return ChildSpyStock|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyStockTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyStock A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_stock, is_active, name FROM spy_stock WHERE id_stock = :p0';
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
            /** @var ChildSpyStock $obj */
            $obj = new ChildSpyStock();
            $obj->hydrate($row);
            SpyStockTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyStock|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyStockQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyStockTableMap::COL_ID_STOCK, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyStockQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyStockTableMap::COL_ID_STOCK, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idStock Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdStock_Between(array $idStock)
    {
        return $this->filterByIdStock($idStock, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idStocks Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdStock_In(array $idStocks)
    {
        return $this->filterByIdStock($idStocks, Criteria::IN);
    }

    /**
     * Filter the query on the id_stock column
     *
     * Example usage:
     * <code>
     * $query->filterByIdStock(1234); // WHERE id_stock = 1234
     * $query->filterByIdStock(array(12, 34), Criteria::IN); // WHERE id_stock IN (12, 34)
     * $query->filterByIdStock(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_stock > 12
     * </code>
     *
     * @param     mixed $idStock The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdStock($idStock = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idStock)) {
            $useMinMax = false;
            if (isset($idStock['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyStockTableMap::COL_ID_STOCK, $idStock['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idStock['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyStockTableMap::COL_ID_STOCK, $idStock['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idStock of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyStockTableMap::COL_ID_STOCK, $idStock, $comparison);

        return $query;
    }

    /**
     * Filter the query on the is_active column
     *
     * Example usage:
     * <code>
     * $query->filterByIsActive(true); // WHERE is_active = true
     * $query->filterByIsActive('yes'); // WHERE is_active = true
     * </code>
     *
     * @param     bool|string $isActive The value to use as filter.
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
    public function filterByIsActive($isActive = null, $comparison = Criteria::EQUAL)
    {
        if (is_string($isActive)) {
            $isActive = in_array(strtolower($isActive), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        $query = $this->addUsingAlias(SpyStockTableMap::COL_IS_ACTIVE, $isActive, $comparison);

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

        $query = $this->addUsingAlias(SpyStockTableMap::COL_NAME, $name, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\Stock\Persistence\SpyStockProduct object
     *
     * @param \Orm\Zed\Stock\Persistence\SpyStockProduct|ObjectCollection $spyStockProduct the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyStockQuery The current query, for fluid interface
     */
    public function filterByStockProduct($spyStockProduct, $comparison = null)
    {
        if ($spyStockProduct instanceof \Orm\Zed\Stock\Persistence\SpyStockProduct) {
            return $this
                ->addUsingAlias(SpyStockTableMap::COL_ID_STOCK, $spyStockProduct->getFkStock(), $comparison);
        } elseif ($spyStockProduct instanceof ObjectCollection) {
            return $this
                ->useStockProductQuery()
                ->filterByPrimaryKeys($spyStockProduct->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByStockProduct() only accepts arguments of type \Orm\Zed\Stock\Persistence\SpyStockProduct or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the StockProduct relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyStockQuery The current query, for fluid interface
     */
    public function joinStockProduct($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('StockProduct');

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
            $this->addJoinObject($join, 'StockProduct');
        }

        return $this;
    }

    /**
     * Use the StockProduct relation SpyStockProduct object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Stock\Persistence\SpyStockProductQuery A secondary query class using the current class as primary query
     */
    public function useStockProductQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinStockProduct($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'StockProduct', '\Orm\Zed\Stock\Persistence\SpyStockProductQuery');
    }

    /**
     * Use the StockProduct relation SpyStockProduct object
     *
     * @param callable(\Orm\Zed\Stock\Persistence\SpyStockProductQuery):\Orm\Zed\Stock\Persistence\SpyStockProductQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withStockProductQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useStockProductQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the StockProduct relation to the SpyStockProduct table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Stock\Persistence\SpyStockProductQuery The inner query object of the EXISTS statement
     */
    public function useStockProductExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('StockProduct', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the StockProduct relation to the SpyStockProduct table for a NOT EXISTS query.
     *
     * @see useStockProductExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Stock\Persistence\SpyStockProductQuery The inner query object of the NOT EXISTS statement
     */
    public function useStockProductNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('StockProduct', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Stock\Persistence\SpyStockStore object
     *
     * @param \Orm\Zed\Stock\Persistence\SpyStockStore|ObjectCollection $spyStockStore the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyStockQuery The current query, for fluid interface
     */
    public function filterByStockStore($spyStockStore, $comparison = null)
    {
        if ($spyStockStore instanceof \Orm\Zed\Stock\Persistence\SpyStockStore) {
            return $this
                ->addUsingAlias(SpyStockTableMap::COL_ID_STOCK, $spyStockStore->getFkStock(), $comparison);
        } elseif ($spyStockStore instanceof ObjectCollection) {
            return $this
                ->useStockStoreQuery()
                ->filterByPrimaryKeys($spyStockStore->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByStockStore() only accepts arguments of type \Orm\Zed\Stock\Persistence\SpyStockStore or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the StockStore relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyStockQuery The current query, for fluid interface
     */
    public function joinStockStore($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('StockStore');

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
            $this->addJoinObject($join, 'StockStore');
        }

        return $this;
    }

    /**
     * Use the StockStore relation SpyStockStore object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Stock\Persistence\SpyStockStoreQuery A secondary query class using the current class as primary query
     */
    public function useStockStoreQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinStockStore($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'StockStore', '\Orm\Zed\Stock\Persistence\SpyStockStoreQuery');
    }

    /**
     * Use the StockStore relation SpyStockStore object
     *
     * @param callable(\Orm\Zed\Stock\Persistence\SpyStockStoreQuery):\Orm\Zed\Stock\Persistence\SpyStockStoreQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withStockStoreQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useStockStoreQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the StockStore relation to the SpyStockStore table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Stock\Persistence\SpyStockStoreQuery The inner query object of the EXISTS statement
     */
    public function useStockStoreExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('StockStore', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the StockStore relation to the SpyStockStore table for a NOT EXISTS query.
     *
     * @see useStockStoreExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Stock\Persistence\SpyStockStoreQuery The inner query object of the NOT EXISTS statement
     */
    public function useStockStoreNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('StockStore', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\StockAddress\Persistence\SpyStockAddress object
     *
     * @param \Orm\Zed\StockAddress\Persistence\SpyStockAddress|ObjectCollection $spyStockAddress the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyStockQuery The current query, for fluid interface
     */
    public function filterByStockAddress($spyStockAddress, $comparison = null)
    {
        if ($spyStockAddress instanceof \Orm\Zed\StockAddress\Persistence\SpyStockAddress) {
            return $this
                ->addUsingAlias(SpyStockTableMap::COL_ID_STOCK, $spyStockAddress->getFkStock(), $comparison);
        } elseif ($spyStockAddress instanceof ObjectCollection) {
            return $this
                ->useStockAddressQuery()
                ->filterByPrimaryKeys($spyStockAddress->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByStockAddress() only accepts arguments of type \Orm\Zed\StockAddress\Persistence\SpyStockAddress or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the StockAddress relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyStockQuery The current query, for fluid interface
     */
    public function joinStockAddress($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('StockAddress');

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
            $this->addJoinObject($join, 'StockAddress');
        }

        return $this;
    }

    /**
     * Use the StockAddress relation SpyStockAddress object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\StockAddress\Persistence\SpyStockAddressQuery A secondary query class using the current class as primary query
     */
    public function useStockAddressQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinStockAddress($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'StockAddress', '\Orm\Zed\StockAddress\Persistence\SpyStockAddressQuery');
    }

    /**
     * Use the StockAddress relation SpyStockAddress object
     *
     * @param callable(\Orm\Zed\StockAddress\Persistence\SpyStockAddressQuery):\Orm\Zed\StockAddress\Persistence\SpyStockAddressQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withStockAddressQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useStockAddressQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the StockAddress relation to the SpyStockAddress table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\StockAddress\Persistence\SpyStockAddressQuery The inner query object of the EXISTS statement
     */
    public function useStockAddressExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('StockAddress', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the StockAddress relation to the SpyStockAddress table for a NOT EXISTS query.
     *
     * @see useStockAddressExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\StockAddress\Persistence\SpyStockAddressQuery The inner query object of the NOT EXISTS statement
     */
    public function useStockAddressNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('StockAddress', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Exclude object from result
     *
     * @param   ChildSpyStock $spyStock Object to remove from the list of results
     *
     * @return $this|ChildSpyStockQuery The current query, for fluid interface
     */
    public function prune($spyStock = null)
    {
        if ($spyStock) {
            $this->addUsingAlias(SpyStockTableMap::COL_ID_STOCK, $spyStock->getIdStock(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_stock table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyStockTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyStockTableMap::clearInstancePool();
            SpyStockTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyStockTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyStockTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyStockTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyStockTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SpyStockQuery
