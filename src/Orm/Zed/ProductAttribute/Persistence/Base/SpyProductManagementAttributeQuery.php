<?php

namespace Orm\Zed\ProductAttribute\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttribute as ChildSpyProductManagementAttribute;
use Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeQuery as ChildSpyProductManagementAttributeQuery;
use Orm\Zed\ProductAttribute\Persistence\Map\SpyProductManagementAttributeTableMap;
use Orm\Zed\Product\Persistence\SpyProductAttributeKey;
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
 * Base class that represents a query for the 'spy_product_management_attribute' table.
 *
 *
 *
 * @method     ChildSpyProductManagementAttributeQuery orderByIdProductManagementAttribute($order = Criteria::ASC) Order by the id_product_management_attribute column
 * @method     ChildSpyProductManagementAttributeQuery orderByFkProductAttributeKey($order = Criteria::ASC) Order by the fk_product_attribute_key column
 * @method     ChildSpyProductManagementAttributeQuery orderByAllowInput($order = Criteria::ASC) Order by the allow_input column
 * @method     ChildSpyProductManagementAttributeQuery orderByInputType($order = Criteria::ASC) Order by the input_type column
 *
 * @method     ChildSpyProductManagementAttributeQuery groupByIdProductManagementAttribute() Group by the id_product_management_attribute column
 * @method     ChildSpyProductManagementAttributeQuery groupByFkProductAttributeKey() Group by the fk_product_attribute_key column
 * @method     ChildSpyProductManagementAttributeQuery groupByAllowInput() Group by the allow_input column
 * @method     ChildSpyProductManagementAttributeQuery groupByInputType() Group by the input_type column
 *
 * @method     ChildSpyProductManagementAttributeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyProductManagementAttributeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyProductManagementAttributeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyProductManagementAttributeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyProductManagementAttributeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyProductManagementAttributeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyProductManagementAttributeQuery leftJoinSpyProductAttributeKey($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyProductAttributeKey relation
 * @method     ChildSpyProductManagementAttributeQuery rightJoinSpyProductAttributeKey($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyProductAttributeKey relation
 * @method     ChildSpyProductManagementAttributeQuery innerJoinSpyProductAttributeKey($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyProductAttributeKey relation
 *
 * @method     ChildSpyProductManagementAttributeQuery joinWithSpyProductAttributeKey($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyProductAttributeKey relation
 *
 * @method     ChildSpyProductManagementAttributeQuery leftJoinWithSpyProductAttributeKey() Adds a LEFT JOIN clause and with to the query using the SpyProductAttributeKey relation
 * @method     ChildSpyProductManagementAttributeQuery rightJoinWithSpyProductAttributeKey() Adds a RIGHT JOIN clause and with to the query using the SpyProductAttributeKey relation
 * @method     ChildSpyProductManagementAttributeQuery innerJoinWithSpyProductAttributeKey() Adds a INNER JOIN clause and with to the query using the SpyProductAttributeKey relation
 *
 * @method     ChildSpyProductManagementAttributeQuery leftJoinSpyProductManagementAttributeValue($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyProductManagementAttributeValue relation
 * @method     ChildSpyProductManagementAttributeQuery rightJoinSpyProductManagementAttributeValue($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyProductManagementAttributeValue relation
 * @method     ChildSpyProductManagementAttributeQuery innerJoinSpyProductManagementAttributeValue($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyProductManagementAttributeValue relation
 *
 * @method     ChildSpyProductManagementAttributeQuery joinWithSpyProductManagementAttributeValue($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyProductManagementAttributeValue relation
 *
 * @method     ChildSpyProductManagementAttributeQuery leftJoinWithSpyProductManagementAttributeValue() Adds a LEFT JOIN clause and with to the query using the SpyProductManagementAttributeValue relation
 * @method     ChildSpyProductManagementAttributeQuery rightJoinWithSpyProductManagementAttributeValue() Adds a RIGHT JOIN clause and with to the query using the SpyProductManagementAttributeValue relation
 * @method     ChildSpyProductManagementAttributeQuery innerJoinWithSpyProductManagementAttributeValue() Adds a INNER JOIN clause and with to the query using the SpyProductManagementAttributeValue relation
 *
 * @method     \Orm\Zed\Product\Persistence\SpyProductAttributeKeyQuery|\Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeValueQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyProductManagementAttribute|null findOne(ConnectionInterface $con = null) Return the first ChildSpyProductManagementAttribute matching the query
 * @method     ChildSpyProductManagementAttribute findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyProductManagementAttribute matching the query, or a new ChildSpyProductManagementAttribute object populated from the query conditions when no match is found
 *
 * @method     ChildSpyProductManagementAttribute|null findOneByIdProductManagementAttribute(int $id_product_management_attribute) Return the first ChildSpyProductManagementAttribute filtered by the id_product_management_attribute column
 * @method     ChildSpyProductManagementAttribute|null findOneByFkProductAttributeKey(int $fk_product_attribute_key) Return the first ChildSpyProductManagementAttribute filtered by the fk_product_attribute_key column
 * @method     ChildSpyProductManagementAttribute|null findOneByAllowInput(boolean $allow_input) Return the first ChildSpyProductManagementAttribute filtered by the allow_input column
 * @method     ChildSpyProductManagementAttribute|null findOneByInputType(string $input_type) Return the first ChildSpyProductManagementAttribute filtered by the input_type column *

 * @method     ChildSpyProductManagementAttribute requirePk($key, ConnectionInterface $con = null) Return the ChildSpyProductManagementAttribute by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductManagementAttribute requireOne(ConnectionInterface $con = null) Return the first ChildSpyProductManagementAttribute matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyProductManagementAttribute requireOneByIdProductManagementAttribute(int $id_product_management_attribute) Return the first ChildSpyProductManagementAttribute filtered by the id_product_management_attribute column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductManagementAttribute requireOneByFkProductAttributeKey(int $fk_product_attribute_key) Return the first ChildSpyProductManagementAttribute filtered by the fk_product_attribute_key column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductManagementAttribute requireOneByAllowInput(boolean $allow_input) Return the first ChildSpyProductManagementAttribute filtered by the allow_input column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductManagementAttribute requireOneByInputType(string $input_type) Return the first ChildSpyProductManagementAttribute filtered by the input_type column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyProductManagementAttribute[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyProductManagementAttribute objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductManagementAttribute> find(ConnectionInterface $con = null) Return ChildSpyProductManagementAttribute objects based on current ModelCriteria
 * @method     ChildSpyProductManagementAttribute[]|ObjectCollection findByIdProductManagementAttribute(int $id_product_management_attribute) Return ChildSpyProductManagementAttribute objects filtered by the id_product_management_attribute column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductManagementAttribute> findByIdProductManagementAttribute(int $id_product_management_attribute) Return ChildSpyProductManagementAttribute objects filtered by the id_product_management_attribute column
 * @method     ChildSpyProductManagementAttribute[]|ObjectCollection findByFkProductAttributeKey(int $fk_product_attribute_key) Return ChildSpyProductManagementAttribute objects filtered by the fk_product_attribute_key column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductManagementAttribute> findByFkProductAttributeKey(int $fk_product_attribute_key) Return ChildSpyProductManagementAttribute objects filtered by the fk_product_attribute_key column
 * @method     ChildSpyProductManagementAttribute[]|ObjectCollection findByAllowInput(boolean $allow_input) Return ChildSpyProductManagementAttribute objects filtered by the allow_input column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductManagementAttribute> findByAllowInput(boolean $allow_input) Return ChildSpyProductManagementAttribute objects filtered by the allow_input column
 * @method     ChildSpyProductManagementAttribute[]|ObjectCollection findByInputType(string $input_type) Return ChildSpyProductManagementAttribute objects filtered by the input_type column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductManagementAttribute> findByInputType(string $input_type) Return ChildSpyProductManagementAttribute objects filtered by the input_type column
 * @method     ChildSpyProductManagementAttribute[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyProductManagementAttribute> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyProductManagementAttributeQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\ProductAttribute\Persistence\Base\SpyProductManagementAttributeQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\ProductAttribute\\Persistence\\SpyProductManagementAttribute', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyProductManagementAttributeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyProductManagementAttributeQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyProductManagementAttributeQuery) {
            return $criteria;
        }
        $query = new ChildSpyProductManagementAttributeQuery();
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
     * @return ChildSpyProductManagementAttribute|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyProductManagementAttributeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyProductManagementAttribute A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_product_management_attribute, fk_product_attribute_key, allow_input, input_type FROM spy_product_management_attribute WHERE id_product_management_attribute = :p0';
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
            /** @var ChildSpyProductManagementAttribute $obj */
            $obj = new ChildSpyProductManagementAttribute();
            $obj->hydrate($row);
            SpyProductManagementAttributeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyProductManagementAttribute|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyProductManagementAttributeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyProductManagementAttributeTableMap::COL_ID_PRODUCT_MANAGEMENT_ATTRIBUTE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyProductManagementAttributeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyProductManagementAttributeTableMap::COL_ID_PRODUCT_MANAGEMENT_ATTRIBUTE, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idProductManagementAttribute Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdProductManagementAttribute_Between(array $idProductManagementAttribute)
    {
        return $this->filterByIdProductManagementAttribute($idProductManagementAttribute, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idProductManagementAttributes Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdProductManagementAttribute_In(array $idProductManagementAttributes)
    {
        return $this->filterByIdProductManagementAttribute($idProductManagementAttributes, Criteria::IN);
    }

    /**
     * Filter the query on the id_product_management_attribute column
     *
     * Example usage:
     * <code>
     * $query->filterByIdProductManagementAttribute(1234); // WHERE id_product_management_attribute = 1234
     * $query->filterByIdProductManagementAttribute(array(12, 34), Criteria::IN); // WHERE id_product_management_attribute IN (12, 34)
     * $query->filterByIdProductManagementAttribute(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_product_management_attribute > 12
     * </code>
     *
     * @param     mixed $idProductManagementAttribute The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdProductManagementAttribute($idProductManagementAttribute = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idProductManagementAttribute)) {
            $useMinMax = false;
            if (isset($idProductManagementAttribute['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductManagementAttributeTableMap::COL_ID_PRODUCT_MANAGEMENT_ATTRIBUTE, $idProductManagementAttribute['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idProductManagementAttribute['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductManagementAttributeTableMap::COL_ID_PRODUCT_MANAGEMENT_ATTRIBUTE, $idProductManagementAttribute['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idProductManagementAttribute of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyProductManagementAttributeTableMap::COL_ID_PRODUCT_MANAGEMENT_ATTRIBUTE, $idProductManagementAttribute, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkProductAttributeKey Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkProductAttributeKey_Between(array $fkProductAttributeKey)
    {
        return $this->filterByFkProductAttributeKey($fkProductAttributeKey, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkProductAttributeKeys Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkProductAttributeKey_In(array $fkProductAttributeKeys)
    {
        return $this->filterByFkProductAttributeKey($fkProductAttributeKeys, Criteria::IN);
    }

    /**
     * Filter the query on the fk_product_attribute_key column
     *
     * Example usage:
     * <code>
     * $query->filterByFkProductAttributeKey(1234); // WHERE fk_product_attribute_key = 1234
     * $query->filterByFkProductAttributeKey(array(12, 34), Criteria::IN); // WHERE fk_product_attribute_key IN (12, 34)
     * $query->filterByFkProductAttributeKey(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_product_attribute_key > 12
     * </code>
     *
     * @see       filterBySpyProductAttributeKey()
     *
     * @param     mixed $fkProductAttributeKey The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkProductAttributeKey($fkProductAttributeKey = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkProductAttributeKey)) {
            $useMinMax = false;
            if (isset($fkProductAttributeKey['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductManagementAttributeTableMap::COL_FK_PRODUCT_ATTRIBUTE_KEY, $fkProductAttributeKey['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkProductAttributeKey['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductManagementAttributeTableMap::COL_FK_PRODUCT_ATTRIBUTE_KEY, $fkProductAttributeKey['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkProductAttributeKey of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyProductManagementAttributeTableMap::COL_FK_PRODUCT_ATTRIBUTE_KEY, $fkProductAttributeKey, $comparison);

        return $query;
    }

    /**
     * Filter the query on the allow_input column
     *
     * Example usage:
     * <code>
     * $query->filterByAllowInput(true); // WHERE allow_input = true
     * $query->filterByAllowInput('yes'); // WHERE allow_input = true
     * </code>
     *
     * @param     bool|string $allowInput The value to use as filter.
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
    public function filterByAllowInput($allowInput = null, $comparison = Criteria::EQUAL)
    {
        if (is_string($allowInput)) {
            $allowInput = in_array(strtolower($allowInput), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        $query = $this->addUsingAlias(SpyProductManagementAttributeTableMap::COL_ALLOW_INPUT, $allowInput, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $inputTypes Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInputType_In(array $inputTypes)
    {
        return $this->filterByInputType($inputTypes, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $inputType Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInputType_Like($inputType)
    {
        return $this->filterByInputType($inputType, Criteria::LIKE);
    }

    /**
     * Filter the query on the input_type column
     *
     * Example usage:
     * <code>
     * $query->filterByInputType('fooValue');   // WHERE input_type = 'fooValue'
     * $query->filterByInputType('%fooValue%', Criteria::LIKE); // WHERE input_type LIKE '%fooValue%'
     * $query->filterByInputType([1, 'foo'], Criteria::IN); // WHERE input_type IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $inputType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByInputType($inputType = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $inputType = str_replace('*', '%', $inputType);
        }

        if (is_array($inputType) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$inputType of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyProductManagementAttributeTableMap::COL_INPUT_TYPE, $inputType, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\Product\Persistence\SpyProductAttributeKey object
     *
     * @param \Orm\Zed\Product\Persistence\SpyProductAttributeKey|ObjectCollection $spyProductAttributeKey The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyProductManagementAttributeQuery The current query, for fluid interface
     */
    public function filterBySpyProductAttributeKey($spyProductAttributeKey, $comparison = null)
    {
        if ($spyProductAttributeKey instanceof \Orm\Zed\Product\Persistence\SpyProductAttributeKey) {
            return $this
                ->addUsingAlias(SpyProductManagementAttributeTableMap::COL_FK_PRODUCT_ATTRIBUTE_KEY, $spyProductAttributeKey->getIdProductAttributeKey(), $comparison);
        } elseif ($spyProductAttributeKey instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyProductManagementAttributeTableMap::COL_FK_PRODUCT_ATTRIBUTE_KEY, $spyProductAttributeKey->toKeyValue('PrimaryKey', 'IdProductAttributeKey'), $comparison);
        } else {
            throw new PropelException('filterBySpyProductAttributeKey() only accepts arguments of type \Orm\Zed\Product\Persistence\SpyProductAttributeKey or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyProductAttributeKey relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyProductManagementAttributeQuery The current query, for fluid interface
     */
    public function joinSpyProductAttributeKey($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyProductAttributeKey');

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
            $this->addJoinObject($join, 'SpyProductAttributeKey');
        }

        return $this;
    }

    /**
     * Use the SpyProductAttributeKey relation SpyProductAttributeKey object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Product\Persistence\SpyProductAttributeKeyQuery A secondary query class using the current class as primary query
     */
    public function useSpyProductAttributeKeyQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyProductAttributeKey($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyProductAttributeKey', '\Orm\Zed\Product\Persistence\SpyProductAttributeKeyQuery');
    }

    /**
     * Use the SpyProductAttributeKey relation SpyProductAttributeKey object
     *
     * @param callable(\Orm\Zed\Product\Persistence\SpyProductAttributeKeyQuery):\Orm\Zed\Product\Persistence\SpyProductAttributeKeyQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyProductAttributeKeyQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyProductAttributeKeyQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyProductAttributeKey table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Product\Persistence\SpyProductAttributeKeyQuery The inner query object of the EXISTS statement
     */
    public function useSpyProductAttributeKeyExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyProductAttributeKey', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyProductAttributeKey table for a NOT EXISTS query.
     *
     * @see useSpyProductAttributeKeyExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Product\Persistence\SpyProductAttributeKeyQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyProductAttributeKeyNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyProductAttributeKey', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeValue object
     *
     * @param \Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeValue|ObjectCollection $spyProductManagementAttributeValue the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyProductManagementAttributeQuery The current query, for fluid interface
     */
    public function filterBySpyProductManagementAttributeValue($spyProductManagementAttributeValue, $comparison = null)
    {
        if ($spyProductManagementAttributeValue instanceof \Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeValue) {
            return $this
                ->addUsingAlias(SpyProductManagementAttributeTableMap::COL_ID_PRODUCT_MANAGEMENT_ATTRIBUTE, $spyProductManagementAttributeValue->getFkProductManagementAttribute(), $comparison);
        } elseif ($spyProductManagementAttributeValue instanceof ObjectCollection) {
            return $this
                ->useSpyProductManagementAttributeValueQuery()
                ->filterByPrimaryKeys($spyProductManagementAttributeValue->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyProductManagementAttributeValue() only accepts arguments of type \Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeValue or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyProductManagementAttributeValue relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyProductManagementAttributeQuery The current query, for fluid interface
     */
    public function joinSpyProductManagementAttributeValue($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyProductManagementAttributeValue');

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
            $this->addJoinObject($join, 'SpyProductManagementAttributeValue');
        }

        return $this;
    }

    /**
     * Use the SpyProductManagementAttributeValue relation SpyProductManagementAttributeValue object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeValueQuery A secondary query class using the current class as primary query
     */
    public function useSpyProductManagementAttributeValueQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyProductManagementAttributeValue($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyProductManagementAttributeValue', '\Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeValueQuery');
    }

    /**
     * Use the SpyProductManagementAttributeValue relation SpyProductManagementAttributeValue object
     *
     * @param callable(\Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeValueQuery):\Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeValueQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyProductManagementAttributeValueQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyProductManagementAttributeValueQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyProductManagementAttributeValue table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeValueQuery The inner query object of the EXISTS statement
     */
    public function useSpyProductManagementAttributeValueExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyProductManagementAttributeValue', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyProductManagementAttributeValue table for a NOT EXISTS query.
     *
     * @see useSpyProductManagementAttributeValueExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeValueQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyProductManagementAttributeValueNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyProductManagementAttributeValue', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Exclude object from result
     *
     * @param   ChildSpyProductManagementAttribute $spyProductManagementAttribute Object to remove from the list of results
     *
     * @return $this|ChildSpyProductManagementAttributeQuery The current query, for fluid interface
     */
    public function prune($spyProductManagementAttribute = null)
    {
        if ($spyProductManagementAttribute) {
            $this->addUsingAlias(SpyProductManagementAttributeTableMap::COL_ID_PRODUCT_MANAGEMENT_ATTRIBUTE, $spyProductManagementAttribute->getIdProductManagementAttribute(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_product_management_attribute table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductManagementAttributeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyProductManagementAttributeTableMap::clearInstancePool();
            SpyProductManagementAttributeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductManagementAttributeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyProductManagementAttributeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyProductManagementAttributeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyProductManagementAttributeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SpyProductManagementAttributeQuery
