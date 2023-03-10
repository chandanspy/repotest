<?php

namespace Orm\Zed\ProductAttribute\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeValue as ChildSpyProductManagementAttributeValue;
use Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeValueQuery as ChildSpyProductManagementAttributeValueQuery;
use Orm\Zed\ProductAttribute\Persistence\Map\SpyProductManagementAttributeValueTableMap;
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
 * Base class that represents a query for the 'spy_product_management_attribute_value' table.
 *
 *
 *
 * @method     ChildSpyProductManagementAttributeValueQuery orderByIdProductManagementAttributeValue($order = Criteria::ASC) Order by the id_product_management_attribute_value column
 * @method     ChildSpyProductManagementAttributeValueQuery orderByFkProductManagementAttribute($order = Criteria::ASC) Order by the fk_product_management_attribute column
 * @method     ChildSpyProductManagementAttributeValueQuery orderByValue($order = Criteria::ASC) Order by the value column
 *
 * @method     ChildSpyProductManagementAttributeValueQuery groupByIdProductManagementAttributeValue() Group by the id_product_management_attribute_value column
 * @method     ChildSpyProductManagementAttributeValueQuery groupByFkProductManagementAttribute() Group by the fk_product_management_attribute column
 * @method     ChildSpyProductManagementAttributeValueQuery groupByValue() Group by the value column
 *
 * @method     ChildSpyProductManagementAttributeValueQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyProductManagementAttributeValueQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyProductManagementAttributeValueQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyProductManagementAttributeValueQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyProductManagementAttributeValueQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyProductManagementAttributeValueQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyProductManagementAttributeValueQuery leftJoinSpyProductManagementAttribute($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyProductManagementAttribute relation
 * @method     ChildSpyProductManagementAttributeValueQuery rightJoinSpyProductManagementAttribute($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyProductManagementAttribute relation
 * @method     ChildSpyProductManagementAttributeValueQuery innerJoinSpyProductManagementAttribute($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyProductManagementAttribute relation
 *
 * @method     ChildSpyProductManagementAttributeValueQuery joinWithSpyProductManagementAttribute($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyProductManagementAttribute relation
 *
 * @method     ChildSpyProductManagementAttributeValueQuery leftJoinWithSpyProductManagementAttribute() Adds a LEFT JOIN clause and with to the query using the SpyProductManagementAttribute relation
 * @method     ChildSpyProductManagementAttributeValueQuery rightJoinWithSpyProductManagementAttribute() Adds a RIGHT JOIN clause and with to the query using the SpyProductManagementAttribute relation
 * @method     ChildSpyProductManagementAttributeValueQuery innerJoinWithSpyProductManagementAttribute() Adds a INNER JOIN clause and with to the query using the SpyProductManagementAttribute relation
 *
 * @method     ChildSpyProductManagementAttributeValueQuery leftJoinSpyProductManagementAttributeValueTranslation($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyProductManagementAttributeValueTranslation relation
 * @method     ChildSpyProductManagementAttributeValueQuery rightJoinSpyProductManagementAttributeValueTranslation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyProductManagementAttributeValueTranslation relation
 * @method     ChildSpyProductManagementAttributeValueQuery innerJoinSpyProductManagementAttributeValueTranslation($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyProductManagementAttributeValueTranslation relation
 *
 * @method     ChildSpyProductManagementAttributeValueQuery joinWithSpyProductManagementAttributeValueTranslation($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyProductManagementAttributeValueTranslation relation
 *
 * @method     ChildSpyProductManagementAttributeValueQuery leftJoinWithSpyProductManagementAttributeValueTranslation() Adds a LEFT JOIN clause and with to the query using the SpyProductManagementAttributeValueTranslation relation
 * @method     ChildSpyProductManagementAttributeValueQuery rightJoinWithSpyProductManagementAttributeValueTranslation() Adds a RIGHT JOIN clause and with to the query using the SpyProductManagementAttributeValueTranslation relation
 * @method     ChildSpyProductManagementAttributeValueQuery innerJoinWithSpyProductManagementAttributeValueTranslation() Adds a INNER JOIN clause and with to the query using the SpyProductManagementAttributeValueTranslation relation
 *
 * @method     \Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeQuery|\Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeValueTranslationQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyProductManagementAttributeValue|null findOne(ConnectionInterface $con = null) Return the first ChildSpyProductManagementAttributeValue matching the query
 * @method     ChildSpyProductManagementAttributeValue findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyProductManagementAttributeValue matching the query, or a new ChildSpyProductManagementAttributeValue object populated from the query conditions when no match is found
 *
 * @method     ChildSpyProductManagementAttributeValue|null findOneByIdProductManagementAttributeValue(int $id_product_management_attribute_value) Return the first ChildSpyProductManagementAttributeValue filtered by the id_product_management_attribute_value column
 * @method     ChildSpyProductManagementAttributeValue|null findOneByFkProductManagementAttribute(int $fk_product_management_attribute) Return the first ChildSpyProductManagementAttributeValue filtered by the fk_product_management_attribute column
 * @method     ChildSpyProductManagementAttributeValue|null findOneByValue(string $value) Return the first ChildSpyProductManagementAttributeValue filtered by the value column *

 * @method     ChildSpyProductManagementAttributeValue requirePk($key, ConnectionInterface $con = null) Return the ChildSpyProductManagementAttributeValue by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductManagementAttributeValue requireOne(ConnectionInterface $con = null) Return the first ChildSpyProductManagementAttributeValue matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyProductManagementAttributeValue requireOneByIdProductManagementAttributeValue(int $id_product_management_attribute_value) Return the first ChildSpyProductManagementAttributeValue filtered by the id_product_management_attribute_value column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductManagementAttributeValue requireOneByFkProductManagementAttribute(int $fk_product_management_attribute) Return the first ChildSpyProductManagementAttributeValue filtered by the fk_product_management_attribute column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductManagementAttributeValue requireOneByValue(string $value) Return the first ChildSpyProductManagementAttributeValue filtered by the value column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyProductManagementAttributeValue[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyProductManagementAttributeValue objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductManagementAttributeValue> find(ConnectionInterface $con = null) Return ChildSpyProductManagementAttributeValue objects based on current ModelCriteria
 * @method     ChildSpyProductManagementAttributeValue[]|ObjectCollection findByIdProductManagementAttributeValue(int $id_product_management_attribute_value) Return ChildSpyProductManagementAttributeValue objects filtered by the id_product_management_attribute_value column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductManagementAttributeValue> findByIdProductManagementAttributeValue(int $id_product_management_attribute_value) Return ChildSpyProductManagementAttributeValue objects filtered by the id_product_management_attribute_value column
 * @method     ChildSpyProductManagementAttributeValue[]|ObjectCollection findByFkProductManagementAttribute(int $fk_product_management_attribute) Return ChildSpyProductManagementAttributeValue objects filtered by the fk_product_management_attribute column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductManagementAttributeValue> findByFkProductManagementAttribute(int $fk_product_management_attribute) Return ChildSpyProductManagementAttributeValue objects filtered by the fk_product_management_attribute column
 * @method     ChildSpyProductManagementAttributeValue[]|ObjectCollection findByValue(string $value) Return ChildSpyProductManagementAttributeValue objects filtered by the value column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductManagementAttributeValue> findByValue(string $value) Return ChildSpyProductManagementAttributeValue objects filtered by the value column
 * @method     ChildSpyProductManagementAttributeValue[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyProductManagementAttributeValue> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyProductManagementAttributeValueQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\ProductAttribute\Persistence\Base\SpyProductManagementAttributeValueQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\ProductAttribute\\Persistence\\SpyProductManagementAttributeValue', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyProductManagementAttributeValueQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyProductManagementAttributeValueQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyProductManagementAttributeValueQuery) {
            return $criteria;
        }
        $query = new ChildSpyProductManagementAttributeValueQuery();
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
     * @return ChildSpyProductManagementAttributeValue|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyProductManagementAttributeValueTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyProductManagementAttributeValue A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_product_management_attribute_value, fk_product_management_attribute, value FROM spy_product_management_attribute_value WHERE id_product_management_attribute_value = :p0';
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
            /** @var ChildSpyProductManagementAttributeValue $obj */
            $obj = new ChildSpyProductManagementAttributeValue();
            $obj->hydrate($row);
            SpyProductManagementAttributeValueTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyProductManagementAttributeValue|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyProductManagementAttributeValueQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyProductManagementAttributeValueTableMap::COL_ID_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyProductManagementAttributeValueQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyProductManagementAttributeValueTableMap::COL_ID_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idProductManagementAttributeValue Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdProductManagementAttributeValue_Between(array $idProductManagementAttributeValue)
    {
        return $this->filterByIdProductManagementAttributeValue($idProductManagementAttributeValue, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idProductManagementAttributeValues Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdProductManagementAttributeValue_In(array $idProductManagementAttributeValues)
    {
        return $this->filterByIdProductManagementAttributeValue($idProductManagementAttributeValues, Criteria::IN);
    }

    /**
     * Filter the query on the id_product_management_attribute_value column
     *
     * Example usage:
     * <code>
     * $query->filterByIdProductManagementAttributeValue(1234); // WHERE id_product_management_attribute_value = 1234
     * $query->filterByIdProductManagementAttributeValue(array(12, 34), Criteria::IN); // WHERE id_product_management_attribute_value IN (12, 34)
     * $query->filterByIdProductManagementAttributeValue(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_product_management_attribute_value > 12
     * </code>
     *
     * @param     mixed $idProductManagementAttributeValue The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdProductManagementAttributeValue($idProductManagementAttributeValue = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idProductManagementAttributeValue)) {
            $useMinMax = false;
            if (isset($idProductManagementAttributeValue['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductManagementAttributeValueTableMap::COL_ID_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE, $idProductManagementAttributeValue['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idProductManagementAttributeValue['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductManagementAttributeValueTableMap::COL_ID_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE, $idProductManagementAttributeValue['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idProductManagementAttributeValue of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyProductManagementAttributeValueTableMap::COL_ID_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE, $idProductManagementAttributeValue, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkProductManagementAttribute Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkProductManagementAttribute_Between(array $fkProductManagementAttribute)
    {
        return $this->filterByFkProductManagementAttribute($fkProductManagementAttribute, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkProductManagementAttributes Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkProductManagementAttribute_In(array $fkProductManagementAttributes)
    {
        return $this->filterByFkProductManagementAttribute($fkProductManagementAttributes, Criteria::IN);
    }

    /**
     * Filter the query on the fk_product_management_attribute column
     *
     * Example usage:
     * <code>
     * $query->filterByFkProductManagementAttribute(1234); // WHERE fk_product_management_attribute = 1234
     * $query->filterByFkProductManagementAttribute(array(12, 34), Criteria::IN); // WHERE fk_product_management_attribute IN (12, 34)
     * $query->filterByFkProductManagementAttribute(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_product_management_attribute > 12
     * </code>
     *
     * @see       filterBySpyProductManagementAttribute()
     *
     * @param     mixed $fkProductManagementAttribute The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkProductManagementAttribute($fkProductManagementAttribute = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkProductManagementAttribute)) {
            $useMinMax = false;
            if (isset($fkProductManagementAttribute['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductManagementAttributeValueTableMap::COL_FK_PRODUCT_MANAGEMENT_ATTRIBUTE, $fkProductManagementAttribute['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkProductManagementAttribute['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductManagementAttributeValueTableMap::COL_FK_PRODUCT_MANAGEMENT_ATTRIBUTE, $fkProductManagementAttribute['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkProductManagementAttribute of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyProductManagementAttributeValueTableMap::COL_FK_PRODUCT_MANAGEMENT_ATTRIBUTE, $fkProductManagementAttribute, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $values Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByValue_In(array $values)
    {
        return $this->filterByValue($values, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $value Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByValue_Like($value)
    {
        return $this->filterByValue($value, Criteria::LIKE);
    }

    /**
     * Filter the query on the value column
     *
     * Example usage:
     * <code>
     * $query->filterByValue('fooValue');   // WHERE value = 'fooValue'
     * $query->filterByValue('%fooValue%', Criteria::LIKE); // WHERE value LIKE '%fooValue%'
     * $query->filterByValue([1, 'foo'], Criteria::IN); // WHERE value IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $value The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByValue($value = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $value = str_replace('*', '%', $value);
        }

        if (is_array($value) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$value of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyProductManagementAttributeValueTableMap::COL_VALUE, $value, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttribute object
     *
     * @param \Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttribute|ObjectCollection $spyProductManagementAttribute The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyProductManagementAttributeValueQuery The current query, for fluid interface
     */
    public function filterBySpyProductManagementAttribute($spyProductManagementAttribute, $comparison = null)
    {
        if ($spyProductManagementAttribute instanceof \Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttribute) {
            return $this
                ->addUsingAlias(SpyProductManagementAttributeValueTableMap::COL_FK_PRODUCT_MANAGEMENT_ATTRIBUTE, $spyProductManagementAttribute->getIdProductManagementAttribute(), $comparison);
        } elseif ($spyProductManagementAttribute instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyProductManagementAttributeValueTableMap::COL_FK_PRODUCT_MANAGEMENT_ATTRIBUTE, $spyProductManagementAttribute->toKeyValue('PrimaryKey', 'IdProductManagementAttribute'), $comparison);
        } else {
            throw new PropelException('filterBySpyProductManagementAttribute() only accepts arguments of type \Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttribute or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyProductManagementAttribute relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyProductManagementAttributeValueQuery The current query, for fluid interface
     */
    public function joinSpyProductManagementAttribute($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyProductManagementAttribute');

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
            $this->addJoinObject($join, 'SpyProductManagementAttribute');
        }

        return $this;
    }

    /**
     * Use the SpyProductManagementAttribute relation SpyProductManagementAttribute object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeQuery A secondary query class using the current class as primary query
     */
    public function useSpyProductManagementAttributeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyProductManagementAttribute($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyProductManagementAttribute', '\Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeQuery');
    }

    /**
     * Use the SpyProductManagementAttribute relation SpyProductManagementAttribute object
     *
     * @param callable(\Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeQuery):\Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyProductManagementAttributeQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyProductManagementAttributeQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyProductManagementAttribute table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeQuery The inner query object of the EXISTS statement
     */
    public function useSpyProductManagementAttributeExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyProductManagementAttribute', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyProductManagementAttribute table for a NOT EXISTS query.
     *
     * @see useSpyProductManagementAttributeExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyProductManagementAttributeNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyProductManagementAttribute', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeValueTranslation object
     *
     * @param \Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeValueTranslation|ObjectCollection $spyProductManagementAttributeValueTranslation the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyProductManagementAttributeValueQuery The current query, for fluid interface
     */
    public function filterBySpyProductManagementAttributeValueTranslation($spyProductManagementAttributeValueTranslation, $comparison = null)
    {
        if ($spyProductManagementAttributeValueTranslation instanceof \Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeValueTranslation) {
            return $this
                ->addUsingAlias(SpyProductManagementAttributeValueTableMap::COL_ID_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE, $spyProductManagementAttributeValueTranslation->getFkProductManagementAttributeValue(), $comparison);
        } elseif ($spyProductManagementAttributeValueTranslation instanceof ObjectCollection) {
            return $this
                ->useSpyProductManagementAttributeValueTranslationQuery()
                ->filterByPrimaryKeys($spyProductManagementAttributeValueTranslation->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyProductManagementAttributeValueTranslation() only accepts arguments of type \Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeValueTranslation or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyProductManagementAttributeValueTranslation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyProductManagementAttributeValueQuery The current query, for fluid interface
     */
    public function joinSpyProductManagementAttributeValueTranslation($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyProductManagementAttributeValueTranslation');

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
            $this->addJoinObject($join, 'SpyProductManagementAttributeValueTranslation');
        }

        return $this;
    }

    /**
     * Use the SpyProductManagementAttributeValueTranslation relation SpyProductManagementAttributeValueTranslation object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeValueTranslationQuery A secondary query class using the current class as primary query
     */
    public function useSpyProductManagementAttributeValueTranslationQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyProductManagementAttributeValueTranslation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyProductManagementAttributeValueTranslation', '\Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeValueTranslationQuery');
    }

    /**
     * Use the SpyProductManagementAttributeValueTranslation relation SpyProductManagementAttributeValueTranslation object
     *
     * @param callable(\Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeValueTranslationQuery):\Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeValueTranslationQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyProductManagementAttributeValueTranslationQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyProductManagementAttributeValueTranslationQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyProductManagementAttributeValueTranslation table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeValueTranslationQuery The inner query object of the EXISTS statement
     */
    public function useSpyProductManagementAttributeValueTranslationExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyProductManagementAttributeValueTranslation', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyProductManagementAttributeValueTranslation table for a NOT EXISTS query.
     *
     * @see useSpyProductManagementAttributeValueTranslationExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeValueTranslationQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyProductManagementAttributeValueTranslationNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyProductManagementAttributeValueTranslation', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Exclude object from result
     *
     * @param   ChildSpyProductManagementAttributeValue $spyProductManagementAttributeValue Object to remove from the list of results
     *
     * @return $this|ChildSpyProductManagementAttributeValueQuery The current query, for fluid interface
     */
    public function prune($spyProductManagementAttributeValue = null)
    {
        if ($spyProductManagementAttributeValue) {
            $this->addUsingAlias(SpyProductManagementAttributeValueTableMap::COL_ID_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE, $spyProductManagementAttributeValue->getIdProductManagementAttributeValue(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_product_management_attribute_value table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductManagementAttributeValueTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyProductManagementAttributeValueTableMap::clearInstancePool();
            SpyProductManagementAttributeValueTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductManagementAttributeValueTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyProductManagementAttributeValueTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyProductManagementAttributeValueTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyProductManagementAttributeValueTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SpyProductManagementAttributeValueQuery
