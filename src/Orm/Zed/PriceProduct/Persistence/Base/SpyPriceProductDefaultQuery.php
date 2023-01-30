<?php

namespace Orm\Zed\PriceProduct\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\PriceProduct\Persistence\SpyPriceProductDefault as ChildSpyPriceProductDefault;
use Orm\Zed\PriceProduct\Persistence\SpyPriceProductDefaultQuery as ChildSpyPriceProductDefaultQuery;
use Orm\Zed\PriceProduct\Persistence\Map\SpyPriceProductDefaultTableMap;
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
 * Base class that represents a query for the 'spy_price_product_default' table.
 *
 *
 *
 * @method     ChildSpyPriceProductDefaultQuery orderByIdPriceProductDefault($order = Criteria::ASC) Order by the id_price_product_default column
 * @method     ChildSpyPriceProductDefaultQuery orderByFkPriceProductStore($order = Criteria::ASC) Order by the fk_price_product_store column
 *
 * @method     ChildSpyPriceProductDefaultQuery groupByIdPriceProductDefault() Group by the id_price_product_default column
 * @method     ChildSpyPriceProductDefaultQuery groupByFkPriceProductStore() Group by the fk_price_product_store column
 *
 * @method     ChildSpyPriceProductDefaultQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyPriceProductDefaultQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyPriceProductDefaultQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyPriceProductDefaultQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyPriceProductDefaultQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyPriceProductDefaultQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyPriceProductDefaultQuery leftJoinPriceProductStore($relationAlias = null) Adds a LEFT JOIN clause to the query using the PriceProductStore relation
 * @method     ChildSpyPriceProductDefaultQuery rightJoinPriceProductStore($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PriceProductStore relation
 * @method     ChildSpyPriceProductDefaultQuery innerJoinPriceProductStore($relationAlias = null) Adds a INNER JOIN clause to the query using the PriceProductStore relation
 *
 * @method     ChildSpyPriceProductDefaultQuery joinWithPriceProductStore($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the PriceProductStore relation
 *
 * @method     ChildSpyPriceProductDefaultQuery leftJoinWithPriceProductStore() Adds a LEFT JOIN clause and with to the query using the PriceProductStore relation
 * @method     ChildSpyPriceProductDefaultQuery rightJoinWithPriceProductStore() Adds a RIGHT JOIN clause and with to the query using the PriceProductStore relation
 * @method     ChildSpyPriceProductDefaultQuery innerJoinWithPriceProductStore() Adds a INNER JOIN clause and with to the query using the PriceProductStore relation
 *
 * @method     \Orm\Zed\PriceProduct\Persistence\SpyPriceProductStoreQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyPriceProductDefault|null findOne(ConnectionInterface $con = null) Return the first ChildSpyPriceProductDefault matching the query
 * @method     ChildSpyPriceProductDefault findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyPriceProductDefault matching the query, or a new ChildSpyPriceProductDefault object populated from the query conditions when no match is found
 *
 * @method     ChildSpyPriceProductDefault|null findOneByIdPriceProductDefault(string $id_price_product_default) Return the first ChildSpyPriceProductDefault filtered by the id_price_product_default column
 * @method     ChildSpyPriceProductDefault|null findOneByFkPriceProductStore(string $fk_price_product_store) Return the first ChildSpyPriceProductDefault filtered by the fk_price_product_store column *

 * @method     ChildSpyPriceProductDefault requirePk($key, ConnectionInterface $con = null) Return the ChildSpyPriceProductDefault by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyPriceProductDefault requireOne(ConnectionInterface $con = null) Return the first ChildSpyPriceProductDefault matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyPriceProductDefault requireOneByIdPriceProductDefault(string $id_price_product_default) Return the first ChildSpyPriceProductDefault filtered by the id_price_product_default column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyPriceProductDefault requireOneByFkPriceProductStore(string $fk_price_product_store) Return the first ChildSpyPriceProductDefault filtered by the fk_price_product_store column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyPriceProductDefault[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyPriceProductDefault objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyPriceProductDefault> find(ConnectionInterface $con = null) Return ChildSpyPriceProductDefault objects based on current ModelCriteria
 * @method     ChildSpyPriceProductDefault[]|ObjectCollection findByIdPriceProductDefault(string $id_price_product_default) Return ChildSpyPriceProductDefault objects filtered by the id_price_product_default column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyPriceProductDefault> findByIdPriceProductDefault(string $id_price_product_default) Return ChildSpyPriceProductDefault objects filtered by the id_price_product_default column
 * @method     ChildSpyPriceProductDefault[]|ObjectCollection findByFkPriceProductStore(string $fk_price_product_store) Return ChildSpyPriceProductDefault objects filtered by the fk_price_product_store column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyPriceProductDefault> findByFkPriceProductStore(string $fk_price_product_store) Return ChildSpyPriceProductDefault objects filtered by the fk_price_product_store column
 * @method     ChildSpyPriceProductDefault[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyPriceProductDefault> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyPriceProductDefaultQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\PriceProduct\Persistence\Base\SpyPriceProductDefaultQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\PriceProduct\\Persistence\\SpyPriceProductDefault', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyPriceProductDefaultQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyPriceProductDefaultQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyPriceProductDefaultQuery) {
            return $criteria;
        }
        $query = new ChildSpyPriceProductDefaultQuery();
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
     * @return ChildSpyPriceProductDefault|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyPriceProductDefaultTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyPriceProductDefault A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_price_product_default, fk_price_product_store FROM spy_price_product_default WHERE id_price_product_default = :p0';
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
            /** @var ChildSpyPriceProductDefault $obj */
            $obj = new ChildSpyPriceProductDefault();
            $obj->hydrate($row);
            SpyPriceProductDefaultTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyPriceProductDefault|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyPriceProductDefaultQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyPriceProductDefaultTableMap::COL_ID_PRICE_PRODUCT_DEFAULT, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyPriceProductDefaultQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyPriceProductDefaultTableMap::COL_ID_PRICE_PRODUCT_DEFAULT, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idPriceProductDefault Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdPriceProductDefault_Between(array $idPriceProductDefault)
    {
        return $this->filterByIdPriceProductDefault($idPriceProductDefault, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idPriceProductDefaults Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdPriceProductDefault_In(array $idPriceProductDefaults)
    {
        return $this->filterByIdPriceProductDefault($idPriceProductDefaults, Criteria::IN);
    }

    /**
     * Filter the query on the id_price_product_default column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPriceProductDefault(1234); // WHERE id_price_product_default = 1234
     * $query->filterByIdPriceProductDefault(array(12, 34), Criteria::IN); // WHERE id_price_product_default IN (12, 34)
     * $query->filterByIdPriceProductDefault(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_price_product_default > 12
     * </code>
     *
     * @param     mixed $idPriceProductDefault The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdPriceProductDefault($idPriceProductDefault = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idPriceProductDefault)) {
            $useMinMax = false;
            if (isset($idPriceProductDefault['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyPriceProductDefaultTableMap::COL_ID_PRICE_PRODUCT_DEFAULT, $idPriceProductDefault['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPriceProductDefault['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyPriceProductDefaultTableMap::COL_ID_PRICE_PRODUCT_DEFAULT, $idPriceProductDefault['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idPriceProductDefault of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyPriceProductDefaultTableMap::COL_ID_PRICE_PRODUCT_DEFAULT, $idPriceProductDefault, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkPriceProductStore Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkPriceProductStore_Between(array $fkPriceProductStore)
    {
        return $this->filterByFkPriceProductStore($fkPriceProductStore, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkPriceProductStores Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkPriceProductStore_In(array $fkPriceProductStores)
    {
        return $this->filterByFkPriceProductStore($fkPriceProductStores, Criteria::IN);
    }

    /**
     * Filter the query on the fk_price_product_store column
     *
     * Example usage:
     * <code>
     * $query->filterByFkPriceProductStore(1234); // WHERE fk_price_product_store = 1234
     * $query->filterByFkPriceProductStore(array(12, 34), Criteria::IN); // WHERE fk_price_product_store IN (12, 34)
     * $query->filterByFkPriceProductStore(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_price_product_store > 12
     * </code>
     *
     * @see       filterByPriceProductStore()
     *
     * @param     mixed $fkPriceProductStore The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkPriceProductStore($fkPriceProductStore = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkPriceProductStore)) {
            $useMinMax = false;
            if (isset($fkPriceProductStore['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyPriceProductDefaultTableMap::COL_FK_PRICE_PRODUCT_STORE, $fkPriceProductStore['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkPriceProductStore['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyPriceProductDefaultTableMap::COL_FK_PRICE_PRODUCT_STORE, $fkPriceProductStore['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkPriceProductStore of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyPriceProductDefaultTableMap::COL_FK_PRICE_PRODUCT_STORE, $fkPriceProductStore, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\PriceProduct\Persistence\SpyPriceProductStore object
     *
     * @param \Orm\Zed\PriceProduct\Persistence\SpyPriceProductStore|ObjectCollection $spyPriceProductStore The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyPriceProductDefaultQuery The current query, for fluid interface
     */
    public function filterByPriceProductStore($spyPriceProductStore, $comparison = null)
    {
        if ($spyPriceProductStore instanceof \Orm\Zed\PriceProduct\Persistence\SpyPriceProductStore) {
            return $this
                ->addUsingAlias(SpyPriceProductDefaultTableMap::COL_FK_PRICE_PRODUCT_STORE, $spyPriceProductStore->getIdPriceProductStore(), $comparison);
        } elseif ($spyPriceProductStore instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyPriceProductDefaultTableMap::COL_FK_PRICE_PRODUCT_STORE, $spyPriceProductStore->toKeyValue('PrimaryKey', 'IdPriceProductStore'), $comparison);
        } else {
            throw new PropelException('filterByPriceProductStore() only accepts arguments of type \Orm\Zed\PriceProduct\Persistence\SpyPriceProductStore or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PriceProductStore relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyPriceProductDefaultQuery The current query, for fluid interface
     */
    public function joinPriceProductStore($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PriceProductStore');

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
            $this->addJoinObject($join, 'PriceProductStore');
        }

        return $this;
    }

    /**
     * Use the PriceProductStore relation SpyPriceProductStore object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\PriceProduct\Persistence\SpyPriceProductStoreQuery A secondary query class using the current class as primary query
     */
    public function usePriceProductStoreQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPriceProductStore($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PriceProductStore', '\Orm\Zed\PriceProduct\Persistence\SpyPriceProductStoreQuery');
    }

    /**
     * Use the PriceProductStore relation SpyPriceProductStore object
     *
     * @param callable(\Orm\Zed\PriceProduct\Persistence\SpyPriceProductStoreQuery):\Orm\Zed\PriceProduct\Persistence\SpyPriceProductStoreQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withPriceProductStoreQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->usePriceProductStoreQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the PriceProductStore relation to the SpyPriceProductStore table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\PriceProduct\Persistence\SpyPriceProductStoreQuery The inner query object of the EXISTS statement
     */
    public function usePriceProductStoreExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('PriceProductStore', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the PriceProductStore relation to the SpyPriceProductStore table for a NOT EXISTS query.
     *
     * @see usePriceProductStoreExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\PriceProduct\Persistence\SpyPriceProductStoreQuery The inner query object of the NOT EXISTS statement
     */
    public function usePriceProductStoreNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('PriceProductStore', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Exclude object from result
     *
     * @param   ChildSpyPriceProductDefault $spyPriceProductDefault Object to remove from the list of results
     *
     * @return $this|ChildSpyPriceProductDefaultQuery The current query, for fluid interface
     */
    public function prune($spyPriceProductDefault = null)
    {
        if ($spyPriceProductDefault) {
            $this->addUsingAlias(SpyPriceProductDefaultTableMap::COL_ID_PRICE_PRODUCT_DEFAULT, $spyPriceProductDefault->getIdPriceProductDefault(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_price_product_default table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyPriceProductDefaultTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyPriceProductDefaultTableMap::clearInstancePool();
            SpyPriceProductDefaultTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyPriceProductDefaultTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyPriceProductDefaultTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyPriceProductDefaultTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyPriceProductDefaultTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SpyPriceProductDefaultQuery
