<?php

namespace Orm\Zed\ProductImage\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\ProductImage\Persistence\SpyProductImageSetToProductImage as ChildSpyProductImageSetToProductImage;
use Orm\Zed\ProductImage\Persistence\SpyProductImageSetToProductImageQuery as ChildSpyProductImageSetToProductImageQuery;
use Orm\Zed\ProductImage\Persistence\Map\SpyProductImageSetToProductImageTableMap;
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
 * Base class that represents a query for the 'spy_product_image_set_to_product_image' table.
 *
 *
 *
 * @method     ChildSpyProductImageSetToProductImageQuery orderByIdProductImageSetToProductImage($order = Criteria::ASC) Order by the id_product_image_set_to_product_image column
 * @method     ChildSpyProductImageSetToProductImageQuery orderByFkProductImage($order = Criteria::ASC) Order by the fk_product_image column
 * @method     ChildSpyProductImageSetToProductImageQuery orderByFkProductImageSet($order = Criteria::ASC) Order by the fk_product_image_set column
 * @method     ChildSpyProductImageSetToProductImageQuery orderBySortOrder($order = Criteria::ASC) Order by the sort_order column
 *
 * @method     ChildSpyProductImageSetToProductImageQuery groupByIdProductImageSetToProductImage() Group by the id_product_image_set_to_product_image column
 * @method     ChildSpyProductImageSetToProductImageQuery groupByFkProductImage() Group by the fk_product_image column
 * @method     ChildSpyProductImageSetToProductImageQuery groupByFkProductImageSet() Group by the fk_product_image_set column
 * @method     ChildSpyProductImageSetToProductImageQuery groupBySortOrder() Group by the sort_order column
 *
 * @method     ChildSpyProductImageSetToProductImageQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyProductImageSetToProductImageQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyProductImageSetToProductImageQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyProductImageSetToProductImageQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyProductImageSetToProductImageQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyProductImageSetToProductImageQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyProductImageSetToProductImageQuery leftJoinSpyProductImageSet($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyProductImageSet relation
 * @method     ChildSpyProductImageSetToProductImageQuery rightJoinSpyProductImageSet($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyProductImageSet relation
 * @method     ChildSpyProductImageSetToProductImageQuery innerJoinSpyProductImageSet($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyProductImageSet relation
 *
 * @method     ChildSpyProductImageSetToProductImageQuery joinWithSpyProductImageSet($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyProductImageSet relation
 *
 * @method     ChildSpyProductImageSetToProductImageQuery leftJoinWithSpyProductImageSet() Adds a LEFT JOIN clause and with to the query using the SpyProductImageSet relation
 * @method     ChildSpyProductImageSetToProductImageQuery rightJoinWithSpyProductImageSet() Adds a RIGHT JOIN clause and with to the query using the SpyProductImageSet relation
 * @method     ChildSpyProductImageSetToProductImageQuery innerJoinWithSpyProductImageSet() Adds a INNER JOIN clause and with to the query using the SpyProductImageSet relation
 *
 * @method     ChildSpyProductImageSetToProductImageQuery leftJoinSpyProductImage($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyProductImage relation
 * @method     ChildSpyProductImageSetToProductImageQuery rightJoinSpyProductImage($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyProductImage relation
 * @method     ChildSpyProductImageSetToProductImageQuery innerJoinSpyProductImage($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyProductImage relation
 *
 * @method     ChildSpyProductImageSetToProductImageQuery joinWithSpyProductImage($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyProductImage relation
 *
 * @method     ChildSpyProductImageSetToProductImageQuery leftJoinWithSpyProductImage() Adds a LEFT JOIN clause and with to the query using the SpyProductImage relation
 * @method     ChildSpyProductImageSetToProductImageQuery rightJoinWithSpyProductImage() Adds a RIGHT JOIN clause and with to the query using the SpyProductImage relation
 * @method     ChildSpyProductImageSetToProductImageQuery innerJoinWithSpyProductImage() Adds a INNER JOIN clause and with to the query using the SpyProductImage relation
 *
 * @method     \Orm\Zed\ProductImage\Persistence\SpyProductImageSetQuery|\Orm\Zed\ProductImage\Persistence\SpyProductImageQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyProductImageSetToProductImage|null findOne(ConnectionInterface $con = null) Return the first ChildSpyProductImageSetToProductImage matching the query
 * @method     ChildSpyProductImageSetToProductImage findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyProductImageSetToProductImage matching the query, or a new ChildSpyProductImageSetToProductImage object populated from the query conditions when no match is found
 *
 * @method     ChildSpyProductImageSetToProductImage|null findOneByIdProductImageSetToProductImage(int $id_product_image_set_to_product_image) Return the first ChildSpyProductImageSetToProductImage filtered by the id_product_image_set_to_product_image column
 * @method     ChildSpyProductImageSetToProductImage|null findOneByFkProductImage(int $fk_product_image) Return the first ChildSpyProductImageSetToProductImage filtered by the fk_product_image column
 * @method     ChildSpyProductImageSetToProductImage|null findOneByFkProductImageSet(int $fk_product_image_set) Return the first ChildSpyProductImageSetToProductImage filtered by the fk_product_image_set column
 * @method     ChildSpyProductImageSetToProductImage|null findOneBySortOrder(int $sort_order) Return the first ChildSpyProductImageSetToProductImage filtered by the sort_order column *

 * @method     ChildSpyProductImageSetToProductImage requirePk($key, ConnectionInterface $con = null) Return the ChildSpyProductImageSetToProductImage by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductImageSetToProductImage requireOne(ConnectionInterface $con = null) Return the first ChildSpyProductImageSetToProductImage matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyProductImageSetToProductImage requireOneByIdProductImageSetToProductImage(int $id_product_image_set_to_product_image) Return the first ChildSpyProductImageSetToProductImage filtered by the id_product_image_set_to_product_image column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductImageSetToProductImage requireOneByFkProductImage(int $fk_product_image) Return the first ChildSpyProductImageSetToProductImage filtered by the fk_product_image column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductImageSetToProductImage requireOneByFkProductImageSet(int $fk_product_image_set) Return the first ChildSpyProductImageSetToProductImage filtered by the fk_product_image_set column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductImageSetToProductImage requireOneBySortOrder(int $sort_order) Return the first ChildSpyProductImageSetToProductImage filtered by the sort_order column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyProductImageSetToProductImage[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyProductImageSetToProductImage objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductImageSetToProductImage> find(ConnectionInterface $con = null) Return ChildSpyProductImageSetToProductImage objects based on current ModelCriteria
 * @method     ChildSpyProductImageSetToProductImage[]|ObjectCollection findByIdProductImageSetToProductImage(int $id_product_image_set_to_product_image) Return ChildSpyProductImageSetToProductImage objects filtered by the id_product_image_set_to_product_image column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductImageSetToProductImage> findByIdProductImageSetToProductImage(int $id_product_image_set_to_product_image) Return ChildSpyProductImageSetToProductImage objects filtered by the id_product_image_set_to_product_image column
 * @method     ChildSpyProductImageSetToProductImage[]|ObjectCollection findByFkProductImage(int $fk_product_image) Return ChildSpyProductImageSetToProductImage objects filtered by the fk_product_image column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductImageSetToProductImage> findByFkProductImage(int $fk_product_image) Return ChildSpyProductImageSetToProductImage objects filtered by the fk_product_image column
 * @method     ChildSpyProductImageSetToProductImage[]|ObjectCollection findByFkProductImageSet(int $fk_product_image_set) Return ChildSpyProductImageSetToProductImage objects filtered by the fk_product_image_set column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductImageSetToProductImage> findByFkProductImageSet(int $fk_product_image_set) Return ChildSpyProductImageSetToProductImage objects filtered by the fk_product_image_set column
 * @method     ChildSpyProductImageSetToProductImage[]|ObjectCollection findBySortOrder(int $sort_order) Return ChildSpyProductImageSetToProductImage objects filtered by the sort_order column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductImageSetToProductImage> findBySortOrder(int $sort_order) Return ChildSpyProductImageSetToProductImage objects filtered by the sort_order column
 * @method     ChildSpyProductImageSetToProductImage[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyProductImageSetToProductImage> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyProductImageSetToProductImageQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\ProductImage\Persistence\Base\SpyProductImageSetToProductImageQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\ProductImage\\Persistence\\SpyProductImageSetToProductImage', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyProductImageSetToProductImageQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyProductImageSetToProductImageQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyProductImageSetToProductImageQuery) {
            return $criteria;
        }
        $query = new ChildSpyProductImageSetToProductImageQuery();
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
     * @return ChildSpyProductImageSetToProductImage|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyProductImageSetToProductImageTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyProductImageSetToProductImage A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_product_image_set_to_product_image, fk_product_image, fk_product_image_set, sort_order FROM spy_product_image_set_to_product_image WHERE id_product_image_set_to_product_image = :p0';
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
            /** @var ChildSpyProductImageSetToProductImage $obj */
            $obj = new ChildSpyProductImageSetToProductImage();
            $obj->hydrate($row);
            SpyProductImageSetToProductImageTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyProductImageSetToProductImage|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyProductImageSetToProductImageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyProductImageSetToProductImageTableMap::COL_ID_PRODUCT_IMAGE_SET_TO_PRODUCT_IMAGE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyProductImageSetToProductImageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyProductImageSetToProductImageTableMap::COL_ID_PRODUCT_IMAGE_SET_TO_PRODUCT_IMAGE, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idProductImageSetToProductImage Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdProductImageSetToProductImage_Between(array $idProductImageSetToProductImage)
    {
        return $this->filterByIdProductImageSetToProductImage($idProductImageSetToProductImage, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idProductImageSetToProductImages Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdProductImageSetToProductImage_In(array $idProductImageSetToProductImages)
    {
        return $this->filterByIdProductImageSetToProductImage($idProductImageSetToProductImages, Criteria::IN);
    }

    /**
     * Filter the query on the id_product_image_set_to_product_image column
     *
     * Example usage:
     * <code>
     * $query->filterByIdProductImageSetToProductImage(1234); // WHERE id_product_image_set_to_product_image = 1234
     * $query->filterByIdProductImageSetToProductImage(array(12, 34), Criteria::IN); // WHERE id_product_image_set_to_product_image IN (12, 34)
     * $query->filterByIdProductImageSetToProductImage(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_product_image_set_to_product_image > 12
     * </code>
     *
     * @param     mixed $idProductImageSetToProductImage The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdProductImageSetToProductImage($idProductImageSetToProductImage = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idProductImageSetToProductImage)) {
            $useMinMax = false;
            if (isset($idProductImageSetToProductImage['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductImageSetToProductImageTableMap::COL_ID_PRODUCT_IMAGE_SET_TO_PRODUCT_IMAGE, $idProductImageSetToProductImage['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idProductImageSetToProductImage['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductImageSetToProductImageTableMap::COL_ID_PRODUCT_IMAGE_SET_TO_PRODUCT_IMAGE, $idProductImageSetToProductImage['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idProductImageSetToProductImage of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyProductImageSetToProductImageTableMap::COL_ID_PRODUCT_IMAGE_SET_TO_PRODUCT_IMAGE, $idProductImageSetToProductImage, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkProductImage Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkProductImage_Between(array $fkProductImage)
    {
        return $this->filterByFkProductImage($fkProductImage, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkProductImages Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkProductImage_In(array $fkProductImages)
    {
        return $this->filterByFkProductImage($fkProductImages, Criteria::IN);
    }

    /**
     * Filter the query on the fk_product_image column
     *
     * Example usage:
     * <code>
     * $query->filterByFkProductImage(1234); // WHERE fk_product_image = 1234
     * $query->filterByFkProductImage(array(12, 34), Criteria::IN); // WHERE fk_product_image IN (12, 34)
     * $query->filterByFkProductImage(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_product_image > 12
     * </code>
     *
     * @see       filterBySpyProductImage()
     *
     * @param     mixed $fkProductImage The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkProductImage($fkProductImage = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkProductImage)) {
            $useMinMax = false;
            if (isset($fkProductImage['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductImageSetToProductImageTableMap::COL_FK_PRODUCT_IMAGE, $fkProductImage['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkProductImage['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductImageSetToProductImageTableMap::COL_FK_PRODUCT_IMAGE, $fkProductImage['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkProductImage of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyProductImageSetToProductImageTableMap::COL_FK_PRODUCT_IMAGE, $fkProductImage, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkProductImageSet Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkProductImageSet_Between(array $fkProductImageSet)
    {
        return $this->filterByFkProductImageSet($fkProductImageSet, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkProductImageSets Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkProductImageSet_In(array $fkProductImageSets)
    {
        return $this->filterByFkProductImageSet($fkProductImageSets, Criteria::IN);
    }

    /**
     * Filter the query on the fk_product_image_set column
     *
     * Example usage:
     * <code>
     * $query->filterByFkProductImageSet(1234); // WHERE fk_product_image_set = 1234
     * $query->filterByFkProductImageSet(array(12, 34), Criteria::IN); // WHERE fk_product_image_set IN (12, 34)
     * $query->filterByFkProductImageSet(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_product_image_set > 12
     * </code>
     *
     * @see       filterBySpyProductImageSet()
     *
     * @param     mixed $fkProductImageSet The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkProductImageSet($fkProductImageSet = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkProductImageSet)) {
            $useMinMax = false;
            if (isset($fkProductImageSet['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductImageSetToProductImageTableMap::COL_FK_PRODUCT_IMAGE_SET, $fkProductImageSet['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkProductImageSet['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductImageSetToProductImageTableMap::COL_FK_PRODUCT_IMAGE_SET, $fkProductImageSet['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkProductImageSet of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyProductImageSetToProductImageTableMap::COL_FK_PRODUCT_IMAGE_SET, $fkProductImageSet, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $sortOrder Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySortOrder_Between(array $sortOrder)
    {
        return $this->filterBySortOrder($sortOrder, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $sortOrders Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySortOrder_In(array $sortOrders)
    {
        return $this->filterBySortOrder($sortOrders, Criteria::IN);
    }

    /**
     * Filter the query on the sort_order column
     *
     * Example usage:
     * <code>
     * $query->filterBySortOrder(1234); // WHERE sort_order = 1234
     * $query->filterBySortOrder(array(12, 34), Criteria::IN); // WHERE sort_order IN (12, 34)
     * $query->filterBySortOrder(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE sort_order > 12
     * </code>
     *
     * @param     mixed $sortOrder The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterBySortOrder($sortOrder = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($sortOrder)) {
            $useMinMax = false;
            if (isset($sortOrder['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductImageSetToProductImageTableMap::COL_SORT_ORDER, $sortOrder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sortOrder['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductImageSetToProductImageTableMap::COL_SORT_ORDER, $sortOrder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$sortOrder of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyProductImageSetToProductImageTableMap::COL_SORT_ORDER, $sortOrder, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\ProductImage\Persistence\SpyProductImageSet object
     *
     * @param \Orm\Zed\ProductImage\Persistence\SpyProductImageSet|ObjectCollection $spyProductImageSet The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyProductImageSetToProductImageQuery The current query, for fluid interface
     */
    public function filterBySpyProductImageSet($spyProductImageSet, $comparison = null)
    {
        if ($spyProductImageSet instanceof \Orm\Zed\ProductImage\Persistence\SpyProductImageSet) {
            return $this
                ->addUsingAlias(SpyProductImageSetToProductImageTableMap::COL_FK_PRODUCT_IMAGE_SET, $spyProductImageSet->getIdProductImageSet(), $comparison);
        } elseif ($spyProductImageSet instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyProductImageSetToProductImageTableMap::COL_FK_PRODUCT_IMAGE_SET, $spyProductImageSet->toKeyValue('PrimaryKey', 'IdProductImageSet'), $comparison);
        } else {
            throw new PropelException('filterBySpyProductImageSet() only accepts arguments of type \Orm\Zed\ProductImage\Persistence\SpyProductImageSet or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyProductImageSet relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyProductImageSetToProductImageQuery The current query, for fluid interface
     */
    public function joinSpyProductImageSet($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyProductImageSet');

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
            $this->addJoinObject($join, 'SpyProductImageSet');
        }

        return $this;
    }

    /**
     * Use the SpyProductImageSet relation SpyProductImageSet object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\ProductImage\Persistence\SpyProductImageSetQuery A secondary query class using the current class as primary query
     */
    public function useSpyProductImageSetQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyProductImageSet($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyProductImageSet', '\Orm\Zed\ProductImage\Persistence\SpyProductImageSetQuery');
    }

    /**
     * Use the SpyProductImageSet relation SpyProductImageSet object
     *
     * @param callable(\Orm\Zed\ProductImage\Persistence\SpyProductImageSetQuery):\Orm\Zed\ProductImage\Persistence\SpyProductImageSetQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyProductImageSetQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyProductImageSetQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyProductImageSet table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\ProductImage\Persistence\SpyProductImageSetQuery The inner query object of the EXISTS statement
     */
    public function useSpyProductImageSetExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyProductImageSet', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyProductImageSet table for a NOT EXISTS query.
     *
     * @see useSpyProductImageSetExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\ProductImage\Persistence\SpyProductImageSetQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyProductImageSetNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyProductImageSet', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\ProductImage\Persistence\SpyProductImage object
     *
     * @param \Orm\Zed\ProductImage\Persistence\SpyProductImage|ObjectCollection $spyProductImage The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyProductImageSetToProductImageQuery The current query, for fluid interface
     */
    public function filterBySpyProductImage($spyProductImage, $comparison = null)
    {
        if ($spyProductImage instanceof \Orm\Zed\ProductImage\Persistence\SpyProductImage) {
            return $this
                ->addUsingAlias(SpyProductImageSetToProductImageTableMap::COL_FK_PRODUCT_IMAGE, $spyProductImage->getIdProductImage(), $comparison);
        } elseif ($spyProductImage instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyProductImageSetToProductImageTableMap::COL_FK_PRODUCT_IMAGE, $spyProductImage->toKeyValue('PrimaryKey', 'IdProductImage'), $comparison);
        } else {
            throw new PropelException('filterBySpyProductImage() only accepts arguments of type \Orm\Zed\ProductImage\Persistence\SpyProductImage or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyProductImage relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyProductImageSetToProductImageQuery The current query, for fluid interface
     */
    public function joinSpyProductImage($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyProductImage');

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
            $this->addJoinObject($join, 'SpyProductImage');
        }

        return $this;
    }

    /**
     * Use the SpyProductImage relation SpyProductImage object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\ProductImage\Persistence\SpyProductImageQuery A secondary query class using the current class as primary query
     */
    public function useSpyProductImageQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyProductImage($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyProductImage', '\Orm\Zed\ProductImage\Persistence\SpyProductImageQuery');
    }

    /**
     * Use the SpyProductImage relation SpyProductImage object
     *
     * @param callable(\Orm\Zed\ProductImage\Persistence\SpyProductImageQuery):\Orm\Zed\ProductImage\Persistence\SpyProductImageQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyProductImageQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyProductImageQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyProductImage table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\ProductImage\Persistence\SpyProductImageQuery The inner query object of the EXISTS statement
     */
    public function useSpyProductImageExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyProductImage', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyProductImage table for a NOT EXISTS query.
     *
     * @see useSpyProductImageExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\ProductImage\Persistence\SpyProductImageQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyProductImageNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyProductImage', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Exclude object from result
     *
     * @param   ChildSpyProductImageSetToProductImage $spyProductImageSetToProductImage Object to remove from the list of results
     *
     * @return $this|ChildSpyProductImageSetToProductImageQuery The current query, for fluid interface
     */
    public function prune($spyProductImageSetToProductImage = null)
    {
        if ($spyProductImageSetToProductImage) {
            $this->addUsingAlias(SpyProductImageSetToProductImageTableMap::COL_ID_PRODUCT_IMAGE_SET_TO_PRODUCT_IMAGE, $spyProductImageSetToProductImage->getIdProductImageSetToProductImage(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_product_image_set_to_product_image table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductImageSetToProductImageTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyProductImageSetToProductImageTableMap::clearInstancePool();
            SpyProductImageSetToProductImageTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductImageSetToProductImageTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyProductImageSetToProductImageTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyProductImageSetToProductImageTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyProductImageSetToProductImageTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SpyProductImageSetToProductImageQuery
