<?php

namespace Orm\Zed\ProductValidity\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\ProductValidity\Persistence\SpyProductValidity as ChildSpyProductValidity;
use Orm\Zed\ProductValidity\Persistence\SpyProductValidityQuery as ChildSpyProductValidityQuery;
use Orm\Zed\ProductValidity\Persistence\Map\SpyProductValidityTableMap;
use Orm\Zed\Product\Persistence\SpyProduct;
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
 * Base class that represents a query for the 'spy_product_validity' table.
 *
 *
 *
 * @method     ChildSpyProductValidityQuery orderByIdProductValidity($order = Criteria::ASC) Order by the id_product_validity column
 * @method     ChildSpyProductValidityQuery orderByFkProduct($order = Criteria::ASC) Order by the fk_product column
 * @method     ChildSpyProductValidityQuery orderByValidFrom($order = Criteria::ASC) Order by the valid_from column
 * @method     ChildSpyProductValidityQuery orderByValidTo($order = Criteria::ASC) Order by the valid_to column
 *
 * @method     ChildSpyProductValidityQuery groupByIdProductValidity() Group by the id_product_validity column
 * @method     ChildSpyProductValidityQuery groupByFkProduct() Group by the fk_product column
 * @method     ChildSpyProductValidityQuery groupByValidFrom() Group by the valid_from column
 * @method     ChildSpyProductValidityQuery groupByValidTo() Group by the valid_to column
 *
 * @method     ChildSpyProductValidityQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyProductValidityQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyProductValidityQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyProductValidityQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyProductValidityQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyProductValidityQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyProductValidityQuery leftJoinSpyProduct($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyProduct relation
 * @method     ChildSpyProductValidityQuery rightJoinSpyProduct($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyProduct relation
 * @method     ChildSpyProductValidityQuery innerJoinSpyProduct($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyProduct relation
 *
 * @method     ChildSpyProductValidityQuery joinWithSpyProduct($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyProduct relation
 *
 * @method     ChildSpyProductValidityQuery leftJoinWithSpyProduct() Adds a LEFT JOIN clause and with to the query using the SpyProduct relation
 * @method     ChildSpyProductValidityQuery rightJoinWithSpyProduct() Adds a RIGHT JOIN clause and with to the query using the SpyProduct relation
 * @method     ChildSpyProductValidityQuery innerJoinWithSpyProduct() Adds a INNER JOIN clause and with to the query using the SpyProduct relation
 *
 * @method     \Orm\Zed\Product\Persistence\SpyProductQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyProductValidity|null findOne(ConnectionInterface $con = null) Return the first ChildSpyProductValidity matching the query
 * @method     ChildSpyProductValidity findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyProductValidity matching the query, or a new ChildSpyProductValidity object populated from the query conditions when no match is found
 *
 * @method     ChildSpyProductValidity|null findOneByIdProductValidity(int $id_product_validity) Return the first ChildSpyProductValidity filtered by the id_product_validity column
 * @method     ChildSpyProductValidity|null findOneByFkProduct(int $fk_product) Return the first ChildSpyProductValidity filtered by the fk_product column
 * @method     ChildSpyProductValidity|null findOneByValidFrom(string $valid_from) Return the first ChildSpyProductValidity filtered by the valid_from column
 * @method     ChildSpyProductValidity|null findOneByValidTo(string $valid_to) Return the first ChildSpyProductValidity filtered by the valid_to column *

 * @method     ChildSpyProductValidity requirePk($key, ConnectionInterface $con = null) Return the ChildSpyProductValidity by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductValidity requireOne(ConnectionInterface $con = null) Return the first ChildSpyProductValidity matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyProductValidity requireOneByIdProductValidity(int $id_product_validity) Return the first ChildSpyProductValidity filtered by the id_product_validity column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductValidity requireOneByFkProduct(int $fk_product) Return the first ChildSpyProductValidity filtered by the fk_product column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductValidity requireOneByValidFrom(string $valid_from) Return the first ChildSpyProductValidity filtered by the valid_from column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductValidity requireOneByValidTo(string $valid_to) Return the first ChildSpyProductValidity filtered by the valid_to column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyProductValidity[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyProductValidity objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductValidity> find(ConnectionInterface $con = null) Return ChildSpyProductValidity objects based on current ModelCriteria
 * @method     ChildSpyProductValidity[]|ObjectCollection findByIdProductValidity(int $id_product_validity) Return ChildSpyProductValidity objects filtered by the id_product_validity column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductValidity> findByIdProductValidity(int $id_product_validity) Return ChildSpyProductValidity objects filtered by the id_product_validity column
 * @method     ChildSpyProductValidity[]|ObjectCollection findByFkProduct(int $fk_product) Return ChildSpyProductValidity objects filtered by the fk_product column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductValidity> findByFkProduct(int $fk_product) Return ChildSpyProductValidity objects filtered by the fk_product column
 * @method     ChildSpyProductValidity[]|ObjectCollection findByValidFrom(string $valid_from) Return ChildSpyProductValidity objects filtered by the valid_from column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductValidity> findByValidFrom(string $valid_from) Return ChildSpyProductValidity objects filtered by the valid_from column
 * @method     ChildSpyProductValidity[]|ObjectCollection findByValidTo(string $valid_to) Return ChildSpyProductValidity objects filtered by the valid_to column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductValidity> findByValidTo(string $valid_to) Return ChildSpyProductValidity objects filtered by the valid_to column
 * @method     ChildSpyProductValidity[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyProductValidity> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyProductValidityQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\ProductValidity\Persistence\Base\SpyProductValidityQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\ProductValidity\\Persistence\\SpyProductValidity', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyProductValidityQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyProductValidityQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyProductValidityQuery) {
            return $criteria;
        }
        $query = new ChildSpyProductValidityQuery();
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
     * @return ChildSpyProductValidity|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyProductValidityTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyProductValidity A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT `id_product_validity`, `fk_product`, `valid_from`, `valid_to` FROM `spy_product_validity` WHERE `id_product_validity` = :p0';
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
            /** @var ChildSpyProductValidity $obj */
            $obj = new ChildSpyProductValidity();
            $obj->hydrate($row);
            SpyProductValidityTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyProductValidity|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyProductValidityQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyProductValidityTableMap::COL_ID_PRODUCT_VALIDITY, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyProductValidityQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyProductValidityTableMap::COL_ID_PRODUCT_VALIDITY, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idProductValidity Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdProductValidity_Between(array $idProductValidity)
    {
        return $this->filterByIdProductValidity($idProductValidity, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idProductValiditys Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdProductValidity_In(array $idProductValiditys)
    {
        return $this->filterByIdProductValidity($idProductValiditys, Criteria::IN);
    }

    /**
     * Filter the query on the id_product_validity column
     *
     * Example usage:
     * <code>
     * $query->filterByIdProductValidity(1234); // WHERE id_product_validity = 1234
     * $query->filterByIdProductValidity(array(12, 34), Criteria::IN); // WHERE id_product_validity IN (12, 34)
     * $query->filterByIdProductValidity(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_product_validity > 12
     * </code>
     *
     * @param     mixed $idProductValidity The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdProductValidity($idProductValidity = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idProductValidity)) {
            $useMinMax = false;
            if (isset($idProductValidity['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductValidityTableMap::COL_ID_PRODUCT_VALIDITY, $idProductValidity['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idProductValidity['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductValidityTableMap::COL_ID_PRODUCT_VALIDITY, $idProductValidity['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idProductValidity of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyProductValidityTableMap::COL_ID_PRODUCT_VALIDITY, $idProductValidity, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkProduct Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkProduct_Between(array $fkProduct)
    {
        return $this->filterByFkProduct($fkProduct, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkProducts Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkProduct_In(array $fkProducts)
    {
        return $this->filterByFkProduct($fkProducts, Criteria::IN);
    }

    /**
     * Filter the query on the fk_product column
     *
     * Example usage:
     * <code>
     * $query->filterByFkProduct(1234); // WHERE fk_product = 1234
     * $query->filterByFkProduct(array(12, 34), Criteria::IN); // WHERE fk_product IN (12, 34)
     * $query->filterByFkProduct(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_product > 12
     * </code>
     *
     * @see       filterBySpyProduct()
     *
     * @param     mixed $fkProduct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkProduct($fkProduct = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkProduct)) {
            $useMinMax = false;
            if (isset($fkProduct['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductValidityTableMap::COL_FK_PRODUCT, $fkProduct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkProduct['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductValidityTableMap::COL_FK_PRODUCT, $fkProduct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkProduct of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyProductValidityTableMap::COL_FK_PRODUCT, $fkProduct, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $validFrom Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByValidFrom_Between(array $validFrom)
    {
        return $this->filterByValidFrom($validFrom, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $validFroms Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByValidFrom_In(array $validFroms)
    {
        return $this->filterByValidFrom($validFroms, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $validFrom Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByValidFrom_Like($validFrom)
    {
        return $this->filterByValidFrom($validFrom, Criteria::LIKE);
    }

    /**
     * Filter the query on the valid_from column
     *
     * Example usage:
     * <code>
     * $query->filterByValidFrom('2011-03-14'); // WHERE valid_from = '2011-03-14'
     * $query->filterByValidFrom('now'); // WHERE valid_from = '2011-03-14'
     * $query->filterByValidFrom(array('max' => 'yesterday'), SprykerCriteria::BETWEEN); // WHERE valid_from > '2011-03-13'
     * </code>
     *
     * @param     mixed $validFrom The value to use as filter.
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
    public function filterByValidFrom($validFrom = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($validFrom)) {
            $useMinMax = false;
            if (isset($validFrom['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductValidityTableMap::COL_VALID_FROM, $validFrom['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($validFrom['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductValidityTableMap::COL_VALID_FROM, $validFrom['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$validFrom of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyProductValidityTableMap::COL_VALID_FROM, $validFrom, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $validTo Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByValidTo_Between(array $validTo)
    {
        return $this->filterByValidTo($validTo, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $validTos Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByValidTo_In(array $validTos)
    {
        return $this->filterByValidTo($validTos, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $validTo Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByValidTo_Like($validTo)
    {
        return $this->filterByValidTo($validTo, Criteria::LIKE);
    }

    /**
     * Filter the query on the valid_to column
     *
     * Example usage:
     * <code>
     * $query->filterByValidTo('2011-03-14'); // WHERE valid_to = '2011-03-14'
     * $query->filterByValidTo('now'); // WHERE valid_to = '2011-03-14'
     * $query->filterByValidTo(array('max' => 'yesterday'), SprykerCriteria::BETWEEN); // WHERE valid_to > '2011-03-13'
     * </code>
     *
     * @param     mixed $validTo The value to use as filter.
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
    public function filterByValidTo($validTo = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($validTo)) {
            $useMinMax = false;
            if (isset($validTo['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductValidityTableMap::COL_VALID_TO, $validTo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($validTo['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductValidityTableMap::COL_VALID_TO, $validTo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$validTo of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyProductValidityTableMap::COL_VALID_TO, $validTo, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\Product\Persistence\SpyProduct object
     *
     * @param \Orm\Zed\Product\Persistence\SpyProduct|ObjectCollection $spyProduct The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyProductValidityQuery The current query, for fluid interface
     */
    public function filterBySpyProduct($spyProduct, $comparison = null)
    {
        if ($spyProduct instanceof \Orm\Zed\Product\Persistence\SpyProduct) {
            return $this
                ->addUsingAlias(SpyProductValidityTableMap::COL_FK_PRODUCT, $spyProduct->getIdProduct(), $comparison);
        } elseif ($spyProduct instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyProductValidityTableMap::COL_FK_PRODUCT, $spyProduct->toKeyValue('PrimaryKey', 'IdProduct'), $comparison);
        } else {
            throw new PropelException('filterBySpyProduct() only accepts arguments of type \Orm\Zed\Product\Persistence\SpyProduct or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyProduct relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyProductValidityQuery The current query, for fluid interface
     */
    public function joinSpyProduct($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyProduct');

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
            $this->addJoinObject($join, 'SpyProduct');
        }

        return $this;
    }

    /**
     * Use the SpyProduct relation SpyProduct object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Product\Persistence\SpyProductQuery A secondary query class using the current class as primary query
     */
    public function useSpyProductQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyProduct($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyProduct', '\Orm\Zed\Product\Persistence\SpyProductQuery');
    }

    /**
     * Use the SpyProduct relation SpyProduct object
     *
     * @param callable(\Orm\Zed\Product\Persistence\SpyProductQuery):\Orm\Zed\Product\Persistence\SpyProductQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyProductQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyProductQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyProduct table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Product\Persistence\SpyProductQuery The inner query object of the EXISTS statement
     */
    public function useSpyProductExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyProduct', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyProduct table for a NOT EXISTS query.
     *
     * @see useSpyProductExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Product\Persistence\SpyProductQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyProductNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyProduct', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Exclude object from result
     *
     * @param   ChildSpyProductValidity $spyProductValidity Object to remove from the list of results
     *
     * @return $this|ChildSpyProductValidityQuery The current query, for fluid interface
     */
    public function prune($spyProductValidity = null)
    {
        if ($spyProductValidity) {
            $this->addUsingAlias(SpyProductValidityTableMap::COL_ID_PRODUCT_VALIDITY, $spyProductValidity->getIdProductValidity(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_product_validity table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductValidityTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyProductValidityTableMap::clearInstancePool();
            SpyProductValidityTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductValidityTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyProductValidityTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyProductValidityTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyProductValidityTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SpyProductValidityQuery
