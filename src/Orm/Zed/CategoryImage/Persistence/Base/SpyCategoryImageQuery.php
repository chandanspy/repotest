<?php

namespace Orm\Zed\CategoryImage\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\CategoryImage\Persistence\SpyCategoryImage as ChildSpyCategoryImage;
use Orm\Zed\CategoryImage\Persistence\SpyCategoryImageQuery as ChildSpyCategoryImageQuery;
use Orm\Zed\CategoryImage\Persistence\Map\SpyCategoryImageTableMap;
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
 * Base class that represents a query for the 'spy_category_image' table.
 *
 *
 *
 * @method     ChildSpyCategoryImageQuery orderByIdCategoryImage($order = Criteria::ASC) Order by the id_category_image column
 * @method     ChildSpyCategoryImageQuery orderByExternalUrlLarge($order = Criteria::ASC) Order by the external_url_large column
 * @method     ChildSpyCategoryImageQuery orderByExternalUrlSmall($order = Criteria::ASC) Order by the external_url_small column
 * @method     ChildSpyCategoryImageQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildSpyCategoryImageQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ChildSpyCategoryImageQuery groupByIdCategoryImage() Group by the id_category_image column
 * @method     ChildSpyCategoryImageQuery groupByExternalUrlLarge() Group by the external_url_large column
 * @method     ChildSpyCategoryImageQuery groupByExternalUrlSmall() Group by the external_url_small column
 * @method     ChildSpyCategoryImageQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildSpyCategoryImageQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ChildSpyCategoryImageQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyCategoryImageQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyCategoryImageQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyCategoryImageQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyCategoryImageQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyCategoryImageQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyCategoryImageQuery leftJoinSpyCategoryImageSetToCategoryImage($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyCategoryImageSetToCategoryImage relation
 * @method     ChildSpyCategoryImageQuery rightJoinSpyCategoryImageSetToCategoryImage($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyCategoryImageSetToCategoryImage relation
 * @method     ChildSpyCategoryImageQuery innerJoinSpyCategoryImageSetToCategoryImage($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyCategoryImageSetToCategoryImage relation
 *
 * @method     ChildSpyCategoryImageQuery joinWithSpyCategoryImageSetToCategoryImage($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyCategoryImageSetToCategoryImage relation
 *
 * @method     ChildSpyCategoryImageQuery leftJoinWithSpyCategoryImageSetToCategoryImage() Adds a LEFT JOIN clause and with to the query using the SpyCategoryImageSetToCategoryImage relation
 * @method     ChildSpyCategoryImageQuery rightJoinWithSpyCategoryImageSetToCategoryImage() Adds a RIGHT JOIN clause and with to the query using the SpyCategoryImageSetToCategoryImage relation
 * @method     ChildSpyCategoryImageQuery innerJoinWithSpyCategoryImageSetToCategoryImage() Adds a INNER JOIN clause and with to the query using the SpyCategoryImageSetToCategoryImage relation
 *
 * @method     \Orm\Zed\CategoryImage\Persistence\SpyCategoryImageSetToCategoryImageQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyCategoryImage|null findOne(ConnectionInterface $con = null) Return the first ChildSpyCategoryImage matching the query
 * @method     ChildSpyCategoryImage findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyCategoryImage matching the query, or a new ChildSpyCategoryImage object populated from the query conditions when no match is found
 *
 * @method     ChildSpyCategoryImage|null findOneByIdCategoryImage(int $id_category_image) Return the first ChildSpyCategoryImage filtered by the id_category_image column
 * @method     ChildSpyCategoryImage|null findOneByExternalUrlLarge(string $external_url_large) Return the first ChildSpyCategoryImage filtered by the external_url_large column
 * @method     ChildSpyCategoryImage|null findOneByExternalUrlSmall(string $external_url_small) Return the first ChildSpyCategoryImage filtered by the external_url_small column
 * @method     ChildSpyCategoryImage|null findOneByCreatedAt(string $created_at) Return the first ChildSpyCategoryImage filtered by the created_at column
 * @method     ChildSpyCategoryImage|null findOneByUpdatedAt(string $updated_at) Return the first ChildSpyCategoryImage filtered by the updated_at column *

 * @method     ChildSpyCategoryImage requirePk($key, ConnectionInterface $con = null) Return the ChildSpyCategoryImage by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCategoryImage requireOne(ConnectionInterface $con = null) Return the first ChildSpyCategoryImage matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyCategoryImage requireOneByIdCategoryImage(int $id_category_image) Return the first ChildSpyCategoryImage filtered by the id_category_image column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCategoryImage requireOneByExternalUrlLarge(string $external_url_large) Return the first ChildSpyCategoryImage filtered by the external_url_large column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCategoryImage requireOneByExternalUrlSmall(string $external_url_small) Return the first ChildSpyCategoryImage filtered by the external_url_small column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCategoryImage requireOneByCreatedAt(string $created_at) Return the first ChildSpyCategoryImage filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCategoryImage requireOneByUpdatedAt(string $updated_at) Return the first ChildSpyCategoryImage filtered by the updated_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyCategoryImage[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyCategoryImage objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCategoryImage> find(ConnectionInterface $con = null) Return ChildSpyCategoryImage objects based on current ModelCriteria
 * @method     ChildSpyCategoryImage[]|ObjectCollection findByIdCategoryImage(int $id_category_image) Return ChildSpyCategoryImage objects filtered by the id_category_image column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCategoryImage> findByIdCategoryImage(int $id_category_image) Return ChildSpyCategoryImage objects filtered by the id_category_image column
 * @method     ChildSpyCategoryImage[]|ObjectCollection findByExternalUrlLarge(string $external_url_large) Return ChildSpyCategoryImage objects filtered by the external_url_large column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCategoryImage> findByExternalUrlLarge(string $external_url_large) Return ChildSpyCategoryImage objects filtered by the external_url_large column
 * @method     ChildSpyCategoryImage[]|ObjectCollection findByExternalUrlSmall(string $external_url_small) Return ChildSpyCategoryImage objects filtered by the external_url_small column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCategoryImage> findByExternalUrlSmall(string $external_url_small) Return ChildSpyCategoryImage objects filtered by the external_url_small column
 * @method     ChildSpyCategoryImage[]|ObjectCollection findByCreatedAt(string $created_at) Return ChildSpyCategoryImage objects filtered by the created_at column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCategoryImage> findByCreatedAt(string $created_at) Return ChildSpyCategoryImage objects filtered by the created_at column
 * @method     ChildSpyCategoryImage[]|ObjectCollection findByUpdatedAt(string $updated_at) Return ChildSpyCategoryImage objects filtered by the updated_at column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCategoryImage> findByUpdatedAt(string $updated_at) Return ChildSpyCategoryImage objects filtered by the updated_at column
 * @method     ChildSpyCategoryImage[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyCategoryImage> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyCategoryImageQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\CategoryImage\Persistence\Base\SpyCategoryImageQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\CategoryImage\\Persistence\\SpyCategoryImage', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyCategoryImageQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyCategoryImageQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyCategoryImageQuery) {
            return $criteria;
        }
        $query = new ChildSpyCategoryImageQuery();
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
     * @return ChildSpyCategoryImage|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyCategoryImageTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyCategoryImage A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_category_image, external_url_large, external_url_small, created_at, updated_at FROM spy_category_image WHERE id_category_image = :p0';
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
            /** @var ChildSpyCategoryImage $obj */
            $obj = new ChildSpyCategoryImage();
            $obj->hydrate($row);
            SpyCategoryImageTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyCategoryImage|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyCategoryImageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyCategoryImageTableMap::COL_ID_CATEGORY_IMAGE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyCategoryImageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyCategoryImageTableMap::COL_ID_CATEGORY_IMAGE, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idCategoryImage Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdCategoryImage_Between(array $idCategoryImage)
    {
        return $this->filterByIdCategoryImage($idCategoryImage, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idCategoryImages Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdCategoryImage_In(array $idCategoryImages)
    {
        return $this->filterByIdCategoryImage($idCategoryImages, Criteria::IN);
    }

    /**
     * Filter the query on the id_category_image column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCategoryImage(1234); // WHERE id_category_image = 1234
     * $query->filterByIdCategoryImage(array(12, 34), Criteria::IN); // WHERE id_category_image IN (12, 34)
     * $query->filterByIdCategoryImage(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_category_image > 12
     * </code>
     *
     * @param     mixed $idCategoryImage The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdCategoryImage($idCategoryImage = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idCategoryImage)) {
            $useMinMax = false;
            if (isset($idCategoryImage['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCategoryImageTableMap::COL_ID_CATEGORY_IMAGE, $idCategoryImage['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCategoryImage['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCategoryImageTableMap::COL_ID_CATEGORY_IMAGE, $idCategoryImage['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idCategoryImage of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCategoryImageTableMap::COL_ID_CATEGORY_IMAGE, $idCategoryImage, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $externalUrlLarges Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByExternalUrlLarge_In(array $externalUrlLarges)
    {
        return $this->filterByExternalUrlLarge($externalUrlLarges, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $externalUrlLarge Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByExternalUrlLarge_Like($externalUrlLarge)
    {
        return $this->filterByExternalUrlLarge($externalUrlLarge, Criteria::LIKE);
    }

    /**
     * Filter the query on the external_url_large column
     *
     * Example usage:
     * <code>
     * $query->filterByExternalUrlLarge('fooValue');   // WHERE external_url_large = 'fooValue'
     * $query->filterByExternalUrlLarge('%fooValue%', Criteria::LIKE); // WHERE external_url_large LIKE '%fooValue%'
     * $query->filterByExternalUrlLarge([1, 'foo'], Criteria::IN); // WHERE external_url_large IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $externalUrlLarge The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByExternalUrlLarge($externalUrlLarge = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $externalUrlLarge = str_replace('*', '%', $externalUrlLarge);
        }

        if (is_array($externalUrlLarge) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$externalUrlLarge of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyCategoryImageTableMap::COL_EXTERNAL_URL_LARGE, $externalUrlLarge, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $externalUrlSmalls Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByExternalUrlSmall_In(array $externalUrlSmalls)
    {
        return $this->filterByExternalUrlSmall($externalUrlSmalls, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $externalUrlSmall Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByExternalUrlSmall_Like($externalUrlSmall)
    {
        return $this->filterByExternalUrlSmall($externalUrlSmall, Criteria::LIKE);
    }

    /**
     * Filter the query on the external_url_small column
     *
     * Example usage:
     * <code>
     * $query->filterByExternalUrlSmall('fooValue');   // WHERE external_url_small = 'fooValue'
     * $query->filterByExternalUrlSmall('%fooValue%', Criteria::LIKE); // WHERE external_url_small LIKE '%fooValue%'
     * $query->filterByExternalUrlSmall([1, 'foo'], Criteria::IN); // WHERE external_url_small IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $externalUrlSmall The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByExternalUrlSmall($externalUrlSmall = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $externalUrlSmall = str_replace('*', '%', $externalUrlSmall);
        }

        if (is_array($externalUrlSmall) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$externalUrlSmall of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyCategoryImageTableMap::COL_EXTERNAL_URL_SMALL, $externalUrlSmall, $comparison);

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
                $this->addUsingAlias(SpyCategoryImageTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCategoryImageTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$createdAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCategoryImageTableMap::COL_CREATED_AT, $createdAt, $comparison);

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
                $this->addUsingAlias(SpyCategoryImageTableMap::COL_UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCategoryImageTableMap::COL_UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$updatedAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCategoryImageTableMap::COL_UPDATED_AT, $updatedAt, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\CategoryImage\Persistence\SpyCategoryImageSetToCategoryImage object
     *
     * @param \Orm\Zed\CategoryImage\Persistence\SpyCategoryImageSetToCategoryImage|ObjectCollection $spyCategoryImageSetToCategoryImage the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyCategoryImageQuery The current query, for fluid interface
     */
    public function filterBySpyCategoryImageSetToCategoryImage($spyCategoryImageSetToCategoryImage, $comparison = null)
    {
        if ($spyCategoryImageSetToCategoryImage instanceof \Orm\Zed\CategoryImage\Persistence\SpyCategoryImageSetToCategoryImage) {
            return $this
                ->addUsingAlias(SpyCategoryImageTableMap::COL_ID_CATEGORY_IMAGE, $spyCategoryImageSetToCategoryImage->getFkCategoryImage(), $comparison);
        } elseif ($spyCategoryImageSetToCategoryImage instanceof ObjectCollection) {
            return $this
                ->useSpyCategoryImageSetToCategoryImageQuery()
                ->filterByPrimaryKeys($spyCategoryImageSetToCategoryImage->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyCategoryImageSetToCategoryImage() only accepts arguments of type \Orm\Zed\CategoryImage\Persistence\SpyCategoryImageSetToCategoryImage or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyCategoryImageSetToCategoryImage relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyCategoryImageQuery The current query, for fluid interface
     */
    public function joinSpyCategoryImageSetToCategoryImage($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyCategoryImageSetToCategoryImage');

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
            $this->addJoinObject($join, 'SpyCategoryImageSetToCategoryImage');
        }

        return $this;
    }

    /**
     * Use the SpyCategoryImageSetToCategoryImage relation SpyCategoryImageSetToCategoryImage object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\CategoryImage\Persistence\SpyCategoryImageSetToCategoryImageQuery A secondary query class using the current class as primary query
     */
    public function useSpyCategoryImageSetToCategoryImageQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyCategoryImageSetToCategoryImage($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyCategoryImageSetToCategoryImage', '\Orm\Zed\CategoryImage\Persistence\SpyCategoryImageSetToCategoryImageQuery');
    }

    /**
     * Use the SpyCategoryImageSetToCategoryImage relation SpyCategoryImageSetToCategoryImage object
     *
     * @param callable(\Orm\Zed\CategoryImage\Persistence\SpyCategoryImageSetToCategoryImageQuery):\Orm\Zed\CategoryImage\Persistence\SpyCategoryImageSetToCategoryImageQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyCategoryImageSetToCategoryImageQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyCategoryImageSetToCategoryImageQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyCategoryImageSetToCategoryImage table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\CategoryImage\Persistence\SpyCategoryImageSetToCategoryImageQuery The inner query object of the EXISTS statement
     */
    public function useSpyCategoryImageSetToCategoryImageExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyCategoryImageSetToCategoryImage', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyCategoryImageSetToCategoryImage table for a NOT EXISTS query.
     *
     * @see useSpyCategoryImageSetToCategoryImageExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\CategoryImage\Persistence\SpyCategoryImageSetToCategoryImageQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyCategoryImageSetToCategoryImageNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyCategoryImageSetToCategoryImage', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Exclude object from result
     *
     * @param   ChildSpyCategoryImage $spyCategoryImage Object to remove from the list of results
     *
     * @return $this|ChildSpyCategoryImageQuery The current query, for fluid interface
     */
    public function prune($spyCategoryImage = null)
    {
        if ($spyCategoryImage) {
            $this->addUsingAlias(SpyCategoryImageTableMap::COL_ID_CATEGORY_IMAGE, $spyCategoryImage->getIdCategoryImage(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_category_image table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCategoryImageTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyCategoryImageTableMap::clearInstancePool();
            SpyCategoryImageTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCategoryImageTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyCategoryImageTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyCategoryImageTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyCategoryImageTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    // timestampable behavior

    /**
     * Filter by the latest updated
     *
     * @param      int $nbDays Maximum age of the latest update in days
     *
     * @return     $this|ChildSpyCategoryImageQuery The current query, for fluid interface
     */
    public function recentlyUpdated($nbDays = 7)
    {
        return $this->addUsingAlias(SpyCategoryImageTableMap::COL_UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by update date desc
     *
     * @return     $this|ChildSpyCategoryImageQuery The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        return $this->addDescendingOrderByColumn(SpyCategoryImageTableMap::COL_UPDATED_AT);
    }

    /**
     * Order by update date asc
     *
     * @return     $this|ChildSpyCategoryImageQuery The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        return $this->addAscendingOrderByColumn(SpyCategoryImageTableMap::COL_UPDATED_AT);
    }

    /**
     * Order by create date desc
     *
     * @return     $this|ChildSpyCategoryImageQuery The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        return $this->addDescendingOrderByColumn(SpyCategoryImageTableMap::COL_CREATED_AT);
    }

    /**
     * Filter by the latest created
     *
     * @param      int $nbDays Maximum age of in days
     *
     * @return     $this|ChildSpyCategoryImageQuery The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        return $this->addUsingAlias(SpyCategoryImageTableMap::COL_CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by create date asc
     *
     * @return     $this|ChildSpyCategoryImageQuery The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        return $this->addAscendingOrderByColumn(SpyCategoryImageTableMap::COL_CREATED_AT);
    }

} // SpyCategoryImageQuery
