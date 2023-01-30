<?php

namespace Orm\Zed\ProductMeasurementUnit\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementUnit as ChildSpyProductMeasurementUnit;
use Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementUnitQuery as ChildSpyProductMeasurementUnitQuery;
use Orm\Zed\ProductMeasurementUnit\Persistence\Map\SpyProductMeasurementUnitTableMap;
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
 * Base class that represents a query for the 'spy_product_measurement_unit' table.
 *
 *
 *
 * @method     ChildSpyProductMeasurementUnitQuery orderByIdProductMeasurementUnit($order = Criteria::ASC) Order by the id_product_measurement_unit column
 * @method     ChildSpyProductMeasurementUnitQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method     ChildSpyProductMeasurementUnitQuery orderByDefaultPrecision($order = Criteria::ASC) Order by the default_precision column
 * @method     ChildSpyProductMeasurementUnitQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ChildSpyProductMeasurementUnitQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildSpyProductMeasurementUnitQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ChildSpyProductMeasurementUnitQuery groupByIdProductMeasurementUnit() Group by the id_product_measurement_unit column
 * @method     ChildSpyProductMeasurementUnitQuery groupByCode() Group by the code column
 * @method     ChildSpyProductMeasurementUnitQuery groupByDefaultPrecision() Group by the default_precision column
 * @method     ChildSpyProductMeasurementUnitQuery groupByName() Group by the name column
 * @method     ChildSpyProductMeasurementUnitQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildSpyProductMeasurementUnitQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ChildSpyProductMeasurementUnitQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyProductMeasurementUnitQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyProductMeasurementUnitQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyProductMeasurementUnitQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyProductMeasurementUnitQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyProductMeasurementUnitQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyProductMeasurementUnitQuery leftJoinSpyProductMeasurementBaseUnit($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyProductMeasurementBaseUnit relation
 * @method     ChildSpyProductMeasurementUnitQuery rightJoinSpyProductMeasurementBaseUnit($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyProductMeasurementBaseUnit relation
 * @method     ChildSpyProductMeasurementUnitQuery innerJoinSpyProductMeasurementBaseUnit($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyProductMeasurementBaseUnit relation
 *
 * @method     ChildSpyProductMeasurementUnitQuery joinWithSpyProductMeasurementBaseUnit($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyProductMeasurementBaseUnit relation
 *
 * @method     ChildSpyProductMeasurementUnitQuery leftJoinWithSpyProductMeasurementBaseUnit() Adds a LEFT JOIN clause and with to the query using the SpyProductMeasurementBaseUnit relation
 * @method     ChildSpyProductMeasurementUnitQuery rightJoinWithSpyProductMeasurementBaseUnit() Adds a RIGHT JOIN clause and with to the query using the SpyProductMeasurementBaseUnit relation
 * @method     ChildSpyProductMeasurementUnitQuery innerJoinWithSpyProductMeasurementBaseUnit() Adds a INNER JOIN clause and with to the query using the SpyProductMeasurementBaseUnit relation
 *
 * @method     ChildSpyProductMeasurementUnitQuery leftJoinSpyProductMeasurementSalesUnit($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyProductMeasurementSalesUnit relation
 * @method     ChildSpyProductMeasurementUnitQuery rightJoinSpyProductMeasurementSalesUnit($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyProductMeasurementSalesUnit relation
 * @method     ChildSpyProductMeasurementUnitQuery innerJoinSpyProductMeasurementSalesUnit($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyProductMeasurementSalesUnit relation
 *
 * @method     ChildSpyProductMeasurementUnitQuery joinWithSpyProductMeasurementSalesUnit($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyProductMeasurementSalesUnit relation
 *
 * @method     ChildSpyProductMeasurementUnitQuery leftJoinWithSpyProductMeasurementSalesUnit() Adds a LEFT JOIN clause and with to the query using the SpyProductMeasurementSalesUnit relation
 * @method     ChildSpyProductMeasurementUnitQuery rightJoinWithSpyProductMeasurementSalesUnit() Adds a RIGHT JOIN clause and with to the query using the SpyProductMeasurementSalesUnit relation
 * @method     ChildSpyProductMeasurementUnitQuery innerJoinWithSpyProductMeasurementSalesUnit() Adds a INNER JOIN clause and with to the query using the SpyProductMeasurementSalesUnit relation
 *
 * @method     \Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementBaseUnitQuery|\Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementSalesUnitQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyProductMeasurementUnit|null findOne(ConnectionInterface $con = null) Return the first ChildSpyProductMeasurementUnit matching the query
 * @method     ChildSpyProductMeasurementUnit findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyProductMeasurementUnit matching the query, or a new ChildSpyProductMeasurementUnit object populated from the query conditions when no match is found
 *
 * @method     ChildSpyProductMeasurementUnit|null findOneByIdProductMeasurementUnit(int $id_product_measurement_unit) Return the first ChildSpyProductMeasurementUnit filtered by the id_product_measurement_unit column
 * @method     ChildSpyProductMeasurementUnit|null findOneByCode(string $code) Return the first ChildSpyProductMeasurementUnit filtered by the code column
 * @method     ChildSpyProductMeasurementUnit|null findOneByDefaultPrecision(int $default_precision) Return the first ChildSpyProductMeasurementUnit filtered by the default_precision column
 * @method     ChildSpyProductMeasurementUnit|null findOneByName(string $name) Return the first ChildSpyProductMeasurementUnit filtered by the name column
 * @method     ChildSpyProductMeasurementUnit|null findOneByCreatedAt(string $created_at) Return the first ChildSpyProductMeasurementUnit filtered by the created_at column
 * @method     ChildSpyProductMeasurementUnit|null findOneByUpdatedAt(string $updated_at) Return the first ChildSpyProductMeasurementUnit filtered by the updated_at column *

 * @method     ChildSpyProductMeasurementUnit requirePk($key, ConnectionInterface $con = null) Return the ChildSpyProductMeasurementUnit by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductMeasurementUnit requireOne(ConnectionInterface $con = null) Return the first ChildSpyProductMeasurementUnit matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyProductMeasurementUnit requireOneByIdProductMeasurementUnit(int $id_product_measurement_unit) Return the first ChildSpyProductMeasurementUnit filtered by the id_product_measurement_unit column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductMeasurementUnit requireOneByCode(string $code) Return the first ChildSpyProductMeasurementUnit filtered by the code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductMeasurementUnit requireOneByDefaultPrecision(int $default_precision) Return the first ChildSpyProductMeasurementUnit filtered by the default_precision column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductMeasurementUnit requireOneByName(string $name) Return the first ChildSpyProductMeasurementUnit filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductMeasurementUnit requireOneByCreatedAt(string $created_at) Return the first ChildSpyProductMeasurementUnit filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductMeasurementUnit requireOneByUpdatedAt(string $updated_at) Return the first ChildSpyProductMeasurementUnit filtered by the updated_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyProductMeasurementUnit[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyProductMeasurementUnit objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductMeasurementUnit> find(ConnectionInterface $con = null) Return ChildSpyProductMeasurementUnit objects based on current ModelCriteria
 * @method     ChildSpyProductMeasurementUnit[]|ObjectCollection findByIdProductMeasurementUnit(int $id_product_measurement_unit) Return ChildSpyProductMeasurementUnit objects filtered by the id_product_measurement_unit column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductMeasurementUnit> findByIdProductMeasurementUnit(int $id_product_measurement_unit) Return ChildSpyProductMeasurementUnit objects filtered by the id_product_measurement_unit column
 * @method     ChildSpyProductMeasurementUnit[]|ObjectCollection findByCode(string $code) Return ChildSpyProductMeasurementUnit objects filtered by the code column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductMeasurementUnit> findByCode(string $code) Return ChildSpyProductMeasurementUnit objects filtered by the code column
 * @method     ChildSpyProductMeasurementUnit[]|ObjectCollection findByDefaultPrecision(int $default_precision) Return ChildSpyProductMeasurementUnit objects filtered by the default_precision column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductMeasurementUnit> findByDefaultPrecision(int $default_precision) Return ChildSpyProductMeasurementUnit objects filtered by the default_precision column
 * @method     ChildSpyProductMeasurementUnit[]|ObjectCollection findByName(string $name) Return ChildSpyProductMeasurementUnit objects filtered by the name column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductMeasurementUnit> findByName(string $name) Return ChildSpyProductMeasurementUnit objects filtered by the name column
 * @method     ChildSpyProductMeasurementUnit[]|ObjectCollection findByCreatedAt(string $created_at) Return ChildSpyProductMeasurementUnit objects filtered by the created_at column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductMeasurementUnit> findByCreatedAt(string $created_at) Return ChildSpyProductMeasurementUnit objects filtered by the created_at column
 * @method     ChildSpyProductMeasurementUnit[]|ObjectCollection findByUpdatedAt(string $updated_at) Return ChildSpyProductMeasurementUnit objects filtered by the updated_at column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductMeasurementUnit> findByUpdatedAt(string $updated_at) Return ChildSpyProductMeasurementUnit objects filtered by the updated_at column
 * @method     ChildSpyProductMeasurementUnit[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyProductMeasurementUnit> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyProductMeasurementUnitQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\ProductMeasurementUnit\Persistence\Base\SpyProductMeasurementUnitQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\ProductMeasurementUnit\\Persistence\\SpyProductMeasurementUnit', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyProductMeasurementUnitQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyProductMeasurementUnitQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyProductMeasurementUnitQuery) {
            return $criteria;
        }
        $query = new ChildSpyProductMeasurementUnitQuery();
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
     * @return ChildSpyProductMeasurementUnit|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyProductMeasurementUnitTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyProductMeasurementUnit A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_product_measurement_unit, code, default_precision, name, created_at, updated_at FROM spy_product_measurement_unit WHERE id_product_measurement_unit = :p0';
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
            /** @var ChildSpyProductMeasurementUnit $obj */
            $obj = new ChildSpyProductMeasurementUnit();
            $obj->hydrate($row);
            SpyProductMeasurementUnitTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyProductMeasurementUnit|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyProductMeasurementUnitQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyProductMeasurementUnitTableMap::COL_ID_PRODUCT_MEASUREMENT_UNIT, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyProductMeasurementUnitQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyProductMeasurementUnitTableMap::COL_ID_PRODUCT_MEASUREMENT_UNIT, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idProductMeasurementUnit Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdProductMeasurementUnit_Between(array $idProductMeasurementUnit)
    {
        return $this->filterByIdProductMeasurementUnit($idProductMeasurementUnit, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idProductMeasurementUnits Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdProductMeasurementUnit_In(array $idProductMeasurementUnits)
    {
        return $this->filterByIdProductMeasurementUnit($idProductMeasurementUnits, Criteria::IN);
    }

    /**
     * Filter the query on the id_product_measurement_unit column
     *
     * Example usage:
     * <code>
     * $query->filterByIdProductMeasurementUnit(1234); // WHERE id_product_measurement_unit = 1234
     * $query->filterByIdProductMeasurementUnit(array(12, 34), Criteria::IN); // WHERE id_product_measurement_unit IN (12, 34)
     * $query->filterByIdProductMeasurementUnit(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_product_measurement_unit > 12
     * </code>
     *
     * @param     mixed $idProductMeasurementUnit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdProductMeasurementUnit($idProductMeasurementUnit = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idProductMeasurementUnit)) {
            $useMinMax = false;
            if (isset($idProductMeasurementUnit['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductMeasurementUnitTableMap::COL_ID_PRODUCT_MEASUREMENT_UNIT, $idProductMeasurementUnit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idProductMeasurementUnit['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductMeasurementUnitTableMap::COL_ID_PRODUCT_MEASUREMENT_UNIT, $idProductMeasurementUnit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idProductMeasurementUnit of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyProductMeasurementUnitTableMap::COL_ID_PRODUCT_MEASUREMENT_UNIT, $idProductMeasurementUnit, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $codes Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCode_In(array $codes)
    {
        return $this->filterByCode($codes, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $code Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCode_Like($code)
    {
        return $this->filterByCode($code, Criteria::LIKE);
    }

    /**
     * Filter the query on the code column
     *
     * Example usage:
     * <code>
     * $query->filterByCode('fooValue');   // WHERE code = 'fooValue'
     * $query->filterByCode('%fooValue%', Criteria::LIKE); // WHERE code LIKE '%fooValue%'
     * $query->filterByCode([1, 'foo'], Criteria::IN); // WHERE code IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $code The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByCode($code = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $code = str_replace('*', '%', $code);
        }

        if (is_array($code) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$code of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyProductMeasurementUnitTableMap::COL_CODE, $code, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $defaultPrecision Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDefaultPrecision_Between(array $defaultPrecision)
    {
        return $this->filterByDefaultPrecision($defaultPrecision, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $defaultPrecisions Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDefaultPrecision_In(array $defaultPrecisions)
    {
        return $this->filterByDefaultPrecision($defaultPrecisions, Criteria::IN);
    }

    /**
     * Filter the query on the default_precision column
     *
     * Example usage:
     * <code>
     * $query->filterByDefaultPrecision(1234); // WHERE default_precision = 1234
     * $query->filterByDefaultPrecision(array(12, 34), Criteria::IN); // WHERE default_precision IN (12, 34)
     * $query->filterByDefaultPrecision(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE default_precision > 12
     * </code>
     *
     * @param     mixed $defaultPrecision The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByDefaultPrecision($defaultPrecision = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($defaultPrecision)) {
            $useMinMax = false;
            if (isset($defaultPrecision['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductMeasurementUnitTableMap::COL_DEFAULT_PRECISION, $defaultPrecision['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($defaultPrecision['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductMeasurementUnitTableMap::COL_DEFAULT_PRECISION, $defaultPrecision['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$defaultPrecision of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyProductMeasurementUnitTableMap::COL_DEFAULT_PRECISION, $defaultPrecision, $comparison);

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

        $query = $this->addUsingAlias(SpyProductMeasurementUnitTableMap::COL_NAME, $name, $comparison);

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
                $this->addUsingAlias(SpyProductMeasurementUnitTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductMeasurementUnitTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$createdAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyProductMeasurementUnitTableMap::COL_CREATED_AT, $createdAt, $comparison);

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
                $this->addUsingAlias(SpyProductMeasurementUnitTableMap::COL_UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductMeasurementUnitTableMap::COL_UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$updatedAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyProductMeasurementUnitTableMap::COL_UPDATED_AT, $updatedAt, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementBaseUnit object
     *
     * @param \Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementBaseUnit|ObjectCollection $spyProductMeasurementBaseUnit the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyProductMeasurementUnitQuery The current query, for fluid interface
     */
    public function filterBySpyProductMeasurementBaseUnit($spyProductMeasurementBaseUnit, $comparison = null)
    {
        if ($spyProductMeasurementBaseUnit instanceof \Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementBaseUnit) {
            return $this
                ->addUsingAlias(SpyProductMeasurementUnitTableMap::COL_ID_PRODUCT_MEASUREMENT_UNIT, $spyProductMeasurementBaseUnit->getFkProductMeasurementUnit(), $comparison);
        } elseif ($spyProductMeasurementBaseUnit instanceof ObjectCollection) {
            return $this
                ->useSpyProductMeasurementBaseUnitQuery()
                ->filterByPrimaryKeys($spyProductMeasurementBaseUnit->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyProductMeasurementBaseUnit() only accepts arguments of type \Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementBaseUnit or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyProductMeasurementBaseUnit relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyProductMeasurementUnitQuery The current query, for fluid interface
     */
    public function joinSpyProductMeasurementBaseUnit($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyProductMeasurementBaseUnit');

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
            $this->addJoinObject($join, 'SpyProductMeasurementBaseUnit');
        }

        return $this;
    }

    /**
     * Use the SpyProductMeasurementBaseUnit relation SpyProductMeasurementBaseUnit object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementBaseUnitQuery A secondary query class using the current class as primary query
     */
    public function useSpyProductMeasurementBaseUnitQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyProductMeasurementBaseUnit($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyProductMeasurementBaseUnit', '\Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementBaseUnitQuery');
    }

    /**
     * Use the SpyProductMeasurementBaseUnit relation SpyProductMeasurementBaseUnit object
     *
     * @param callable(\Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementBaseUnitQuery):\Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementBaseUnitQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyProductMeasurementBaseUnitQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyProductMeasurementBaseUnitQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyProductMeasurementBaseUnit table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementBaseUnitQuery The inner query object of the EXISTS statement
     */
    public function useSpyProductMeasurementBaseUnitExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyProductMeasurementBaseUnit', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyProductMeasurementBaseUnit table for a NOT EXISTS query.
     *
     * @see useSpyProductMeasurementBaseUnitExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementBaseUnitQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyProductMeasurementBaseUnitNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyProductMeasurementBaseUnit', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementSalesUnit object
     *
     * @param \Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementSalesUnit|ObjectCollection $spyProductMeasurementSalesUnit the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyProductMeasurementUnitQuery The current query, for fluid interface
     */
    public function filterBySpyProductMeasurementSalesUnit($spyProductMeasurementSalesUnit, $comparison = null)
    {
        if ($spyProductMeasurementSalesUnit instanceof \Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementSalesUnit) {
            return $this
                ->addUsingAlias(SpyProductMeasurementUnitTableMap::COL_ID_PRODUCT_MEASUREMENT_UNIT, $spyProductMeasurementSalesUnit->getFkProductMeasurementUnit(), $comparison);
        } elseif ($spyProductMeasurementSalesUnit instanceof ObjectCollection) {
            return $this
                ->useSpyProductMeasurementSalesUnitQuery()
                ->filterByPrimaryKeys($spyProductMeasurementSalesUnit->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyProductMeasurementSalesUnit() only accepts arguments of type \Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementSalesUnit or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyProductMeasurementSalesUnit relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyProductMeasurementUnitQuery The current query, for fluid interface
     */
    public function joinSpyProductMeasurementSalesUnit($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyProductMeasurementSalesUnit');

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
            $this->addJoinObject($join, 'SpyProductMeasurementSalesUnit');
        }

        return $this;
    }

    /**
     * Use the SpyProductMeasurementSalesUnit relation SpyProductMeasurementSalesUnit object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementSalesUnitQuery A secondary query class using the current class as primary query
     */
    public function useSpyProductMeasurementSalesUnitQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyProductMeasurementSalesUnit($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyProductMeasurementSalesUnit', '\Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementSalesUnitQuery');
    }

    /**
     * Use the SpyProductMeasurementSalesUnit relation SpyProductMeasurementSalesUnit object
     *
     * @param callable(\Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementSalesUnitQuery):\Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementSalesUnitQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyProductMeasurementSalesUnitQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyProductMeasurementSalesUnitQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyProductMeasurementSalesUnit table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementSalesUnitQuery The inner query object of the EXISTS statement
     */
    public function useSpyProductMeasurementSalesUnitExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyProductMeasurementSalesUnit', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyProductMeasurementSalesUnit table for a NOT EXISTS query.
     *
     * @see useSpyProductMeasurementSalesUnitExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementSalesUnitQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyProductMeasurementSalesUnitNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyProductMeasurementSalesUnit', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Exclude object from result
     *
     * @param   ChildSpyProductMeasurementUnit $spyProductMeasurementUnit Object to remove from the list of results
     *
     * @return $this|ChildSpyProductMeasurementUnitQuery The current query, for fluid interface
     */
    public function prune($spyProductMeasurementUnit = null)
    {
        if ($spyProductMeasurementUnit) {
            $this->addUsingAlias(SpyProductMeasurementUnitTableMap::COL_ID_PRODUCT_MEASUREMENT_UNIT, $spyProductMeasurementUnit->getIdProductMeasurementUnit(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_product_measurement_unit table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductMeasurementUnitTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyProductMeasurementUnitTableMap::clearInstancePool();
            SpyProductMeasurementUnitTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductMeasurementUnitTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyProductMeasurementUnitTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyProductMeasurementUnitTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyProductMeasurementUnitTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    // timestampable behavior

    /**
     * Filter by the latest updated
     *
     * @param      int $nbDays Maximum age of the latest update in days
     *
     * @return     $this|ChildSpyProductMeasurementUnitQuery The current query, for fluid interface
     */
    public function recentlyUpdated($nbDays = 7)
    {
        return $this->addUsingAlias(SpyProductMeasurementUnitTableMap::COL_UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by update date desc
     *
     * @return     $this|ChildSpyProductMeasurementUnitQuery The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        return $this->addDescendingOrderByColumn(SpyProductMeasurementUnitTableMap::COL_UPDATED_AT);
    }

    /**
     * Order by update date asc
     *
     * @return     $this|ChildSpyProductMeasurementUnitQuery The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        return $this->addAscendingOrderByColumn(SpyProductMeasurementUnitTableMap::COL_UPDATED_AT);
    }

    /**
     * Order by create date desc
     *
     * @return     $this|ChildSpyProductMeasurementUnitQuery The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        return $this->addDescendingOrderByColumn(SpyProductMeasurementUnitTableMap::COL_CREATED_AT);
    }

    /**
     * Filter by the latest created
     *
     * @param      int $nbDays Maximum age of in days
     *
     * @return     $this|ChildSpyProductMeasurementUnitQuery The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        return $this->addUsingAlias(SpyProductMeasurementUnitTableMap::COL_CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by create date asc
     *
     * @return     $this|ChildSpyProductMeasurementUnitQuery The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        return $this->addAscendingOrderByColumn(SpyProductMeasurementUnitTableMap::COL_CREATED_AT);
    }

} // SpyProductMeasurementUnitQuery
