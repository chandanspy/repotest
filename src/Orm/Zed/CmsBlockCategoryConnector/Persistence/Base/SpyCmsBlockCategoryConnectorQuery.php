<?php

namespace Orm\Zed\CmsBlockCategoryConnector\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\Category\Persistence\SpyCategory;
use Orm\Zed\Category\Persistence\SpyCategoryTemplate;
use Orm\Zed\CmsBlockCategoryConnector\Persistence\SpyCmsBlockCategoryConnector as ChildSpyCmsBlockCategoryConnector;
use Orm\Zed\CmsBlockCategoryConnector\Persistence\SpyCmsBlockCategoryConnectorQuery as ChildSpyCmsBlockCategoryConnectorQuery;
use Orm\Zed\CmsBlockCategoryConnector\Persistence\Map\SpyCmsBlockCategoryConnectorTableMap;
use Orm\Zed\CmsBlock\Persistence\SpyCmsBlock;
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
 * Base class that represents a query for the 'spy_cms_block_category_connector' table.
 *
 *
 *
 * @method     ChildSpyCmsBlockCategoryConnectorQuery orderByIdCmsBlockCategoryConnector($order = Criteria::ASC) Order by the id_cms_block_category_connector column
 * @method     ChildSpyCmsBlockCategoryConnectorQuery orderByFkCategory($order = Criteria::ASC) Order by the fk_category column
 * @method     ChildSpyCmsBlockCategoryConnectorQuery orderByFkCategoryTemplate($order = Criteria::ASC) Order by the fk_category_template column
 * @method     ChildSpyCmsBlockCategoryConnectorQuery orderByFkCmsBlock($order = Criteria::ASC) Order by the fk_cms_block column
 * @method     ChildSpyCmsBlockCategoryConnectorQuery orderByFkCmsBlockCategoryPosition($order = Criteria::ASC) Order by the fk_cms_block_category_position column
 *
 * @method     ChildSpyCmsBlockCategoryConnectorQuery groupByIdCmsBlockCategoryConnector() Group by the id_cms_block_category_connector column
 * @method     ChildSpyCmsBlockCategoryConnectorQuery groupByFkCategory() Group by the fk_category column
 * @method     ChildSpyCmsBlockCategoryConnectorQuery groupByFkCategoryTemplate() Group by the fk_category_template column
 * @method     ChildSpyCmsBlockCategoryConnectorQuery groupByFkCmsBlock() Group by the fk_cms_block column
 * @method     ChildSpyCmsBlockCategoryConnectorQuery groupByFkCmsBlockCategoryPosition() Group by the fk_cms_block_category_position column
 *
 * @method     ChildSpyCmsBlockCategoryConnectorQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyCmsBlockCategoryConnectorQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyCmsBlockCategoryConnectorQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyCmsBlockCategoryConnectorQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyCmsBlockCategoryConnectorQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyCmsBlockCategoryConnectorQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyCmsBlockCategoryConnectorQuery leftJoinCmsBlock($relationAlias = null) Adds a LEFT JOIN clause to the query using the CmsBlock relation
 * @method     ChildSpyCmsBlockCategoryConnectorQuery rightJoinCmsBlock($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CmsBlock relation
 * @method     ChildSpyCmsBlockCategoryConnectorQuery innerJoinCmsBlock($relationAlias = null) Adds a INNER JOIN clause to the query using the CmsBlock relation
 *
 * @method     ChildSpyCmsBlockCategoryConnectorQuery joinWithCmsBlock($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the CmsBlock relation
 *
 * @method     ChildSpyCmsBlockCategoryConnectorQuery leftJoinWithCmsBlock() Adds a LEFT JOIN clause and with to the query using the CmsBlock relation
 * @method     ChildSpyCmsBlockCategoryConnectorQuery rightJoinWithCmsBlock() Adds a RIGHT JOIN clause and with to the query using the CmsBlock relation
 * @method     ChildSpyCmsBlockCategoryConnectorQuery innerJoinWithCmsBlock() Adds a INNER JOIN clause and with to the query using the CmsBlock relation
 *
 * @method     ChildSpyCmsBlockCategoryConnectorQuery leftJoinCategory($relationAlias = null) Adds a LEFT JOIN clause to the query using the Category relation
 * @method     ChildSpyCmsBlockCategoryConnectorQuery rightJoinCategory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Category relation
 * @method     ChildSpyCmsBlockCategoryConnectorQuery innerJoinCategory($relationAlias = null) Adds a INNER JOIN clause to the query using the Category relation
 *
 * @method     ChildSpyCmsBlockCategoryConnectorQuery joinWithCategory($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Category relation
 *
 * @method     ChildSpyCmsBlockCategoryConnectorQuery leftJoinWithCategory() Adds a LEFT JOIN clause and with to the query using the Category relation
 * @method     ChildSpyCmsBlockCategoryConnectorQuery rightJoinWithCategory() Adds a RIGHT JOIN clause and with to the query using the Category relation
 * @method     ChildSpyCmsBlockCategoryConnectorQuery innerJoinWithCategory() Adds a INNER JOIN clause and with to the query using the Category relation
 *
 * @method     ChildSpyCmsBlockCategoryConnectorQuery leftJoinCategoryTemplate($relationAlias = null) Adds a LEFT JOIN clause to the query using the CategoryTemplate relation
 * @method     ChildSpyCmsBlockCategoryConnectorQuery rightJoinCategoryTemplate($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CategoryTemplate relation
 * @method     ChildSpyCmsBlockCategoryConnectorQuery innerJoinCategoryTemplate($relationAlias = null) Adds a INNER JOIN clause to the query using the CategoryTemplate relation
 *
 * @method     ChildSpyCmsBlockCategoryConnectorQuery joinWithCategoryTemplate($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the CategoryTemplate relation
 *
 * @method     ChildSpyCmsBlockCategoryConnectorQuery leftJoinWithCategoryTemplate() Adds a LEFT JOIN clause and with to the query using the CategoryTemplate relation
 * @method     ChildSpyCmsBlockCategoryConnectorQuery rightJoinWithCategoryTemplate() Adds a RIGHT JOIN clause and with to the query using the CategoryTemplate relation
 * @method     ChildSpyCmsBlockCategoryConnectorQuery innerJoinWithCategoryTemplate() Adds a INNER JOIN clause and with to the query using the CategoryTemplate relation
 *
 * @method     ChildSpyCmsBlockCategoryConnectorQuery leftJoinCmsBlockCategoryPosition($relationAlias = null) Adds a LEFT JOIN clause to the query using the CmsBlockCategoryPosition relation
 * @method     ChildSpyCmsBlockCategoryConnectorQuery rightJoinCmsBlockCategoryPosition($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CmsBlockCategoryPosition relation
 * @method     ChildSpyCmsBlockCategoryConnectorQuery innerJoinCmsBlockCategoryPosition($relationAlias = null) Adds a INNER JOIN clause to the query using the CmsBlockCategoryPosition relation
 *
 * @method     ChildSpyCmsBlockCategoryConnectorQuery joinWithCmsBlockCategoryPosition($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the CmsBlockCategoryPosition relation
 *
 * @method     ChildSpyCmsBlockCategoryConnectorQuery leftJoinWithCmsBlockCategoryPosition() Adds a LEFT JOIN clause and with to the query using the CmsBlockCategoryPosition relation
 * @method     ChildSpyCmsBlockCategoryConnectorQuery rightJoinWithCmsBlockCategoryPosition() Adds a RIGHT JOIN clause and with to the query using the CmsBlockCategoryPosition relation
 * @method     ChildSpyCmsBlockCategoryConnectorQuery innerJoinWithCmsBlockCategoryPosition() Adds a INNER JOIN clause and with to the query using the CmsBlockCategoryPosition relation
 *
 * @method     \Orm\Zed\CmsBlock\Persistence\SpyCmsBlockQuery|\Orm\Zed\Category\Persistence\SpyCategoryQuery|\Orm\Zed\Category\Persistence\SpyCategoryTemplateQuery|\Orm\Zed\CmsBlockCategoryConnector\Persistence\SpyCmsBlockCategoryPositionQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyCmsBlockCategoryConnector|null findOne(ConnectionInterface $con = null) Return the first ChildSpyCmsBlockCategoryConnector matching the query
 * @method     ChildSpyCmsBlockCategoryConnector findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyCmsBlockCategoryConnector matching the query, or a new ChildSpyCmsBlockCategoryConnector object populated from the query conditions when no match is found
 *
 * @method     ChildSpyCmsBlockCategoryConnector|null findOneByIdCmsBlockCategoryConnector(int $id_cms_block_category_connector) Return the first ChildSpyCmsBlockCategoryConnector filtered by the id_cms_block_category_connector column
 * @method     ChildSpyCmsBlockCategoryConnector|null findOneByFkCategory(int $fk_category) Return the first ChildSpyCmsBlockCategoryConnector filtered by the fk_category column
 * @method     ChildSpyCmsBlockCategoryConnector|null findOneByFkCategoryTemplate(int $fk_category_template) Return the first ChildSpyCmsBlockCategoryConnector filtered by the fk_category_template column
 * @method     ChildSpyCmsBlockCategoryConnector|null findOneByFkCmsBlock(int $fk_cms_block) Return the first ChildSpyCmsBlockCategoryConnector filtered by the fk_cms_block column
 * @method     ChildSpyCmsBlockCategoryConnector|null findOneByFkCmsBlockCategoryPosition(int $fk_cms_block_category_position) Return the first ChildSpyCmsBlockCategoryConnector filtered by the fk_cms_block_category_position column *

 * @method     ChildSpyCmsBlockCategoryConnector requirePk($key, ConnectionInterface $con = null) Return the ChildSpyCmsBlockCategoryConnector by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCmsBlockCategoryConnector requireOne(ConnectionInterface $con = null) Return the first ChildSpyCmsBlockCategoryConnector matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyCmsBlockCategoryConnector requireOneByIdCmsBlockCategoryConnector(int $id_cms_block_category_connector) Return the first ChildSpyCmsBlockCategoryConnector filtered by the id_cms_block_category_connector column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCmsBlockCategoryConnector requireOneByFkCategory(int $fk_category) Return the first ChildSpyCmsBlockCategoryConnector filtered by the fk_category column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCmsBlockCategoryConnector requireOneByFkCategoryTemplate(int $fk_category_template) Return the first ChildSpyCmsBlockCategoryConnector filtered by the fk_category_template column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCmsBlockCategoryConnector requireOneByFkCmsBlock(int $fk_cms_block) Return the first ChildSpyCmsBlockCategoryConnector filtered by the fk_cms_block column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCmsBlockCategoryConnector requireOneByFkCmsBlockCategoryPosition(int $fk_cms_block_category_position) Return the first ChildSpyCmsBlockCategoryConnector filtered by the fk_cms_block_category_position column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyCmsBlockCategoryConnector[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyCmsBlockCategoryConnector objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCmsBlockCategoryConnector> find(ConnectionInterface $con = null) Return ChildSpyCmsBlockCategoryConnector objects based on current ModelCriteria
 * @method     ChildSpyCmsBlockCategoryConnector[]|ObjectCollection findByIdCmsBlockCategoryConnector(int $id_cms_block_category_connector) Return ChildSpyCmsBlockCategoryConnector objects filtered by the id_cms_block_category_connector column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCmsBlockCategoryConnector> findByIdCmsBlockCategoryConnector(int $id_cms_block_category_connector) Return ChildSpyCmsBlockCategoryConnector objects filtered by the id_cms_block_category_connector column
 * @method     ChildSpyCmsBlockCategoryConnector[]|ObjectCollection findByFkCategory(int $fk_category) Return ChildSpyCmsBlockCategoryConnector objects filtered by the fk_category column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCmsBlockCategoryConnector> findByFkCategory(int $fk_category) Return ChildSpyCmsBlockCategoryConnector objects filtered by the fk_category column
 * @method     ChildSpyCmsBlockCategoryConnector[]|ObjectCollection findByFkCategoryTemplate(int $fk_category_template) Return ChildSpyCmsBlockCategoryConnector objects filtered by the fk_category_template column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCmsBlockCategoryConnector> findByFkCategoryTemplate(int $fk_category_template) Return ChildSpyCmsBlockCategoryConnector objects filtered by the fk_category_template column
 * @method     ChildSpyCmsBlockCategoryConnector[]|ObjectCollection findByFkCmsBlock(int $fk_cms_block) Return ChildSpyCmsBlockCategoryConnector objects filtered by the fk_cms_block column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCmsBlockCategoryConnector> findByFkCmsBlock(int $fk_cms_block) Return ChildSpyCmsBlockCategoryConnector objects filtered by the fk_cms_block column
 * @method     ChildSpyCmsBlockCategoryConnector[]|ObjectCollection findByFkCmsBlockCategoryPosition(int $fk_cms_block_category_position) Return ChildSpyCmsBlockCategoryConnector objects filtered by the fk_cms_block_category_position column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCmsBlockCategoryConnector> findByFkCmsBlockCategoryPosition(int $fk_cms_block_category_position) Return ChildSpyCmsBlockCategoryConnector objects filtered by the fk_cms_block_category_position column
 * @method     ChildSpyCmsBlockCategoryConnector[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyCmsBlockCategoryConnector> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyCmsBlockCategoryConnectorQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\CmsBlockCategoryConnector\Persistence\Base\SpyCmsBlockCategoryConnectorQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\CmsBlockCategoryConnector\\Persistence\\SpyCmsBlockCategoryConnector', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyCmsBlockCategoryConnectorQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyCmsBlockCategoryConnectorQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyCmsBlockCategoryConnectorQuery) {
            return $criteria;
        }
        $query = new ChildSpyCmsBlockCategoryConnectorQuery();
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
     * @return ChildSpyCmsBlockCategoryConnector|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyCmsBlockCategoryConnectorTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyCmsBlockCategoryConnector A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_cms_block_category_connector, fk_category, fk_category_template, fk_cms_block, fk_cms_block_category_position FROM spy_cms_block_category_connector WHERE id_cms_block_category_connector = :p0';
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
            /** @var ChildSpyCmsBlockCategoryConnector $obj */
            $obj = new ChildSpyCmsBlockCategoryConnector();
            $obj->hydrate($row);
            SpyCmsBlockCategoryConnectorTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyCmsBlockCategoryConnector|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyCmsBlockCategoryConnectorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyCmsBlockCategoryConnectorTableMap::COL_ID_CMS_BLOCK_CATEGORY_CONNECTOR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyCmsBlockCategoryConnectorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyCmsBlockCategoryConnectorTableMap::COL_ID_CMS_BLOCK_CATEGORY_CONNECTOR, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idCmsBlockCategoryConnector Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdCmsBlockCategoryConnector_Between(array $idCmsBlockCategoryConnector)
    {
        return $this->filterByIdCmsBlockCategoryConnector($idCmsBlockCategoryConnector, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idCmsBlockCategoryConnectors Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdCmsBlockCategoryConnector_In(array $idCmsBlockCategoryConnectors)
    {
        return $this->filterByIdCmsBlockCategoryConnector($idCmsBlockCategoryConnectors, Criteria::IN);
    }

    /**
     * Filter the query on the id_cms_block_category_connector column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCmsBlockCategoryConnector(1234); // WHERE id_cms_block_category_connector = 1234
     * $query->filterByIdCmsBlockCategoryConnector(array(12, 34), Criteria::IN); // WHERE id_cms_block_category_connector IN (12, 34)
     * $query->filterByIdCmsBlockCategoryConnector(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_cms_block_category_connector > 12
     * </code>
     *
     * @param     mixed $idCmsBlockCategoryConnector The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdCmsBlockCategoryConnector($idCmsBlockCategoryConnector = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idCmsBlockCategoryConnector)) {
            $useMinMax = false;
            if (isset($idCmsBlockCategoryConnector['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCmsBlockCategoryConnectorTableMap::COL_ID_CMS_BLOCK_CATEGORY_CONNECTOR, $idCmsBlockCategoryConnector['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCmsBlockCategoryConnector['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCmsBlockCategoryConnectorTableMap::COL_ID_CMS_BLOCK_CATEGORY_CONNECTOR, $idCmsBlockCategoryConnector['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idCmsBlockCategoryConnector of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCmsBlockCategoryConnectorTableMap::COL_ID_CMS_BLOCK_CATEGORY_CONNECTOR, $idCmsBlockCategoryConnector, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkCategory Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkCategory_Between(array $fkCategory)
    {
        return $this->filterByFkCategory($fkCategory, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkCategorys Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkCategory_In(array $fkCategorys)
    {
        return $this->filterByFkCategory($fkCategorys, Criteria::IN);
    }

    /**
     * Filter the query on the fk_category column
     *
     * Example usage:
     * <code>
     * $query->filterByFkCategory(1234); // WHERE fk_category = 1234
     * $query->filterByFkCategory(array(12, 34), Criteria::IN); // WHERE fk_category IN (12, 34)
     * $query->filterByFkCategory(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_category > 12
     * </code>
     *
     * @see       filterByCategory()
     *
     * @param     mixed $fkCategory The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkCategory($fkCategory = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkCategory)) {
            $useMinMax = false;
            if (isset($fkCategory['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCmsBlockCategoryConnectorTableMap::COL_FK_CATEGORY, $fkCategory['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkCategory['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCmsBlockCategoryConnectorTableMap::COL_FK_CATEGORY, $fkCategory['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkCategory of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCmsBlockCategoryConnectorTableMap::COL_FK_CATEGORY, $fkCategory, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkCategoryTemplate Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkCategoryTemplate_Between(array $fkCategoryTemplate)
    {
        return $this->filterByFkCategoryTemplate($fkCategoryTemplate, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkCategoryTemplates Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkCategoryTemplate_In(array $fkCategoryTemplates)
    {
        return $this->filterByFkCategoryTemplate($fkCategoryTemplates, Criteria::IN);
    }

    /**
     * Filter the query on the fk_category_template column
     *
     * Example usage:
     * <code>
     * $query->filterByFkCategoryTemplate(1234); // WHERE fk_category_template = 1234
     * $query->filterByFkCategoryTemplate(array(12, 34), Criteria::IN); // WHERE fk_category_template IN (12, 34)
     * $query->filterByFkCategoryTemplate(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_category_template > 12
     * </code>
     *
     * @see       filterByCategoryTemplate()
     *
     * @param     mixed $fkCategoryTemplate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkCategoryTemplate($fkCategoryTemplate = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkCategoryTemplate)) {
            $useMinMax = false;
            if (isset($fkCategoryTemplate['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCmsBlockCategoryConnectorTableMap::COL_FK_CATEGORY_TEMPLATE, $fkCategoryTemplate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkCategoryTemplate['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCmsBlockCategoryConnectorTableMap::COL_FK_CATEGORY_TEMPLATE, $fkCategoryTemplate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkCategoryTemplate of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCmsBlockCategoryConnectorTableMap::COL_FK_CATEGORY_TEMPLATE, $fkCategoryTemplate, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkCmsBlock Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkCmsBlock_Between(array $fkCmsBlock)
    {
        return $this->filterByFkCmsBlock($fkCmsBlock, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkCmsBlocks Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkCmsBlock_In(array $fkCmsBlocks)
    {
        return $this->filterByFkCmsBlock($fkCmsBlocks, Criteria::IN);
    }

    /**
     * Filter the query on the fk_cms_block column
     *
     * Example usage:
     * <code>
     * $query->filterByFkCmsBlock(1234); // WHERE fk_cms_block = 1234
     * $query->filterByFkCmsBlock(array(12, 34), Criteria::IN); // WHERE fk_cms_block IN (12, 34)
     * $query->filterByFkCmsBlock(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_cms_block > 12
     * </code>
     *
     * @see       filterByCmsBlock()
     *
     * @param     mixed $fkCmsBlock The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkCmsBlock($fkCmsBlock = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkCmsBlock)) {
            $useMinMax = false;
            if (isset($fkCmsBlock['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCmsBlockCategoryConnectorTableMap::COL_FK_CMS_BLOCK, $fkCmsBlock['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkCmsBlock['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCmsBlockCategoryConnectorTableMap::COL_FK_CMS_BLOCK, $fkCmsBlock['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkCmsBlock of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCmsBlockCategoryConnectorTableMap::COL_FK_CMS_BLOCK, $fkCmsBlock, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkCmsBlockCategoryPosition Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkCmsBlockCategoryPosition_Between(array $fkCmsBlockCategoryPosition)
    {
        return $this->filterByFkCmsBlockCategoryPosition($fkCmsBlockCategoryPosition, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkCmsBlockCategoryPositions Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkCmsBlockCategoryPosition_In(array $fkCmsBlockCategoryPositions)
    {
        return $this->filterByFkCmsBlockCategoryPosition($fkCmsBlockCategoryPositions, Criteria::IN);
    }

    /**
     * Filter the query on the fk_cms_block_category_position column
     *
     * Example usage:
     * <code>
     * $query->filterByFkCmsBlockCategoryPosition(1234); // WHERE fk_cms_block_category_position = 1234
     * $query->filterByFkCmsBlockCategoryPosition(array(12, 34), Criteria::IN); // WHERE fk_cms_block_category_position IN (12, 34)
     * $query->filterByFkCmsBlockCategoryPosition(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_cms_block_category_position > 12
     * </code>
     *
     * @see       filterByCmsBlockCategoryPosition()
     *
     * @param     mixed $fkCmsBlockCategoryPosition The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkCmsBlockCategoryPosition($fkCmsBlockCategoryPosition = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkCmsBlockCategoryPosition)) {
            $useMinMax = false;
            if (isset($fkCmsBlockCategoryPosition['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCmsBlockCategoryConnectorTableMap::COL_FK_CMS_BLOCK_CATEGORY_POSITION, $fkCmsBlockCategoryPosition['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkCmsBlockCategoryPosition['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCmsBlockCategoryConnectorTableMap::COL_FK_CMS_BLOCK_CATEGORY_POSITION, $fkCmsBlockCategoryPosition['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkCmsBlockCategoryPosition of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCmsBlockCategoryConnectorTableMap::COL_FK_CMS_BLOCK_CATEGORY_POSITION, $fkCmsBlockCategoryPosition, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\CmsBlock\Persistence\SpyCmsBlock object
     *
     * @param \Orm\Zed\CmsBlock\Persistence\SpyCmsBlock|ObjectCollection $spyCmsBlock The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyCmsBlockCategoryConnectorQuery The current query, for fluid interface
     */
    public function filterByCmsBlock($spyCmsBlock, $comparison = null)
    {
        if ($spyCmsBlock instanceof \Orm\Zed\CmsBlock\Persistence\SpyCmsBlock) {
            return $this
                ->addUsingAlias(SpyCmsBlockCategoryConnectorTableMap::COL_FK_CMS_BLOCK, $spyCmsBlock->getIdCmsBlock(), $comparison);
        } elseif ($spyCmsBlock instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyCmsBlockCategoryConnectorTableMap::COL_FK_CMS_BLOCK, $spyCmsBlock->toKeyValue('PrimaryKey', 'IdCmsBlock'), $comparison);
        } else {
            throw new PropelException('filterByCmsBlock() only accepts arguments of type \Orm\Zed\CmsBlock\Persistence\SpyCmsBlock or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CmsBlock relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyCmsBlockCategoryConnectorQuery The current query, for fluid interface
     */
    public function joinCmsBlock($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CmsBlock');

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
            $this->addJoinObject($join, 'CmsBlock');
        }

        return $this;
    }

    /**
     * Use the CmsBlock relation SpyCmsBlock object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\CmsBlock\Persistence\SpyCmsBlockQuery A secondary query class using the current class as primary query
     */
    public function useCmsBlockQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCmsBlock($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CmsBlock', '\Orm\Zed\CmsBlock\Persistence\SpyCmsBlockQuery');
    }

    /**
     * Use the CmsBlock relation SpyCmsBlock object
     *
     * @param callable(\Orm\Zed\CmsBlock\Persistence\SpyCmsBlockQuery):\Orm\Zed\CmsBlock\Persistence\SpyCmsBlockQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withCmsBlockQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useCmsBlockQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the CmsBlock relation to the SpyCmsBlock table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\CmsBlock\Persistence\SpyCmsBlockQuery The inner query object of the EXISTS statement
     */
    public function useCmsBlockExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('CmsBlock', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the CmsBlock relation to the SpyCmsBlock table for a NOT EXISTS query.
     *
     * @see useCmsBlockExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\CmsBlock\Persistence\SpyCmsBlockQuery The inner query object of the NOT EXISTS statement
     */
    public function useCmsBlockNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('CmsBlock', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Category\Persistence\SpyCategory object
     *
     * @param \Orm\Zed\Category\Persistence\SpyCategory|ObjectCollection $spyCategory The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyCmsBlockCategoryConnectorQuery The current query, for fluid interface
     */
    public function filterByCategory($spyCategory, $comparison = null)
    {
        if ($spyCategory instanceof \Orm\Zed\Category\Persistence\SpyCategory) {
            return $this
                ->addUsingAlias(SpyCmsBlockCategoryConnectorTableMap::COL_FK_CATEGORY, $spyCategory->getIdCategory(), $comparison);
        } elseif ($spyCategory instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyCmsBlockCategoryConnectorTableMap::COL_FK_CATEGORY, $spyCategory->toKeyValue('PrimaryKey', 'IdCategory'), $comparison);
        } else {
            throw new PropelException('filterByCategory() only accepts arguments of type \Orm\Zed\Category\Persistence\SpyCategory or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Category relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyCmsBlockCategoryConnectorQuery The current query, for fluid interface
     */
    public function joinCategory($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Category');

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
            $this->addJoinObject($join, 'Category');
        }

        return $this;
    }

    /**
     * Use the Category relation SpyCategory object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Category\Persistence\SpyCategoryQuery A secondary query class using the current class as primary query
     */
    public function useCategoryQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCategory($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Category', '\Orm\Zed\Category\Persistence\SpyCategoryQuery');
    }

    /**
     * Use the Category relation SpyCategory object
     *
     * @param callable(\Orm\Zed\Category\Persistence\SpyCategoryQuery):\Orm\Zed\Category\Persistence\SpyCategoryQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withCategoryQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useCategoryQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the Category relation to the SpyCategory table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Category\Persistence\SpyCategoryQuery The inner query object of the EXISTS statement
     */
    public function useCategoryExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('Category', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the Category relation to the SpyCategory table for a NOT EXISTS query.
     *
     * @see useCategoryExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Category\Persistence\SpyCategoryQuery The inner query object of the NOT EXISTS statement
     */
    public function useCategoryNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('Category', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Category\Persistence\SpyCategoryTemplate object
     *
     * @param \Orm\Zed\Category\Persistence\SpyCategoryTemplate|ObjectCollection $spyCategoryTemplate The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyCmsBlockCategoryConnectorQuery The current query, for fluid interface
     */
    public function filterByCategoryTemplate($spyCategoryTemplate, $comparison = null)
    {
        if ($spyCategoryTemplate instanceof \Orm\Zed\Category\Persistence\SpyCategoryTemplate) {
            return $this
                ->addUsingAlias(SpyCmsBlockCategoryConnectorTableMap::COL_FK_CATEGORY_TEMPLATE, $spyCategoryTemplate->getIdCategoryTemplate(), $comparison);
        } elseif ($spyCategoryTemplate instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyCmsBlockCategoryConnectorTableMap::COL_FK_CATEGORY_TEMPLATE, $spyCategoryTemplate->toKeyValue('PrimaryKey', 'IdCategoryTemplate'), $comparison);
        } else {
            throw new PropelException('filterByCategoryTemplate() only accepts arguments of type \Orm\Zed\Category\Persistence\SpyCategoryTemplate or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CategoryTemplate relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyCmsBlockCategoryConnectorQuery The current query, for fluid interface
     */
    public function joinCategoryTemplate($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CategoryTemplate');

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
            $this->addJoinObject($join, 'CategoryTemplate');
        }

        return $this;
    }

    /**
     * Use the CategoryTemplate relation SpyCategoryTemplate object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Category\Persistence\SpyCategoryTemplateQuery A secondary query class using the current class as primary query
     */
    public function useCategoryTemplateQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCategoryTemplate($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CategoryTemplate', '\Orm\Zed\Category\Persistence\SpyCategoryTemplateQuery');
    }

    /**
     * Use the CategoryTemplate relation SpyCategoryTemplate object
     *
     * @param callable(\Orm\Zed\Category\Persistence\SpyCategoryTemplateQuery):\Orm\Zed\Category\Persistence\SpyCategoryTemplateQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withCategoryTemplateQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useCategoryTemplateQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the CategoryTemplate relation to the SpyCategoryTemplate table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Category\Persistence\SpyCategoryTemplateQuery The inner query object of the EXISTS statement
     */
    public function useCategoryTemplateExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('CategoryTemplate', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the CategoryTemplate relation to the SpyCategoryTemplate table for a NOT EXISTS query.
     *
     * @see useCategoryTemplateExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Category\Persistence\SpyCategoryTemplateQuery The inner query object of the NOT EXISTS statement
     */
    public function useCategoryTemplateNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('CategoryTemplate', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\CmsBlockCategoryConnector\Persistence\SpyCmsBlockCategoryPosition object
     *
     * @param \Orm\Zed\CmsBlockCategoryConnector\Persistence\SpyCmsBlockCategoryPosition|ObjectCollection $spyCmsBlockCategoryPosition The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyCmsBlockCategoryConnectorQuery The current query, for fluid interface
     */
    public function filterByCmsBlockCategoryPosition($spyCmsBlockCategoryPosition, $comparison = null)
    {
        if ($spyCmsBlockCategoryPosition instanceof \Orm\Zed\CmsBlockCategoryConnector\Persistence\SpyCmsBlockCategoryPosition) {
            return $this
                ->addUsingAlias(SpyCmsBlockCategoryConnectorTableMap::COL_FK_CMS_BLOCK_CATEGORY_POSITION, $spyCmsBlockCategoryPosition->getIdCmsBlockCategoryPosition(), $comparison);
        } elseif ($spyCmsBlockCategoryPosition instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyCmsBlockCategoryConnectorTableMap::COL_FK_CMS_BLOCK_CATEGORY_POSITION, $spyCmsBlockCategoryPosition->toKeyValue('PrimaryKey', 'IdCmsBlockCategoryPosition'), $comparison);
        } else {
            throw new PropelException('filterByCmsBlockCategoryPosition() only accepts arguments of type \Orm\Zed\CmsBlockCategoryConnector\Persistence\SpyCmsBlockCategoryPosition or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CmsBlockCategoryPosition relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyCmsBlockCategoryConnectorQuery The current query, for fluid interface
     */
    public function joinCmsBlockCategoryPosition($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CmsBlockCategoryPosition');

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
            $this->addJoinObject($join, 'CmsBlockCategoryPosition');
        }

        return $this;
    }

    /**
     * Use the CmsBlockCategoryPosition relation SpyCmsBlockCategoryPosition object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\CmsBlockCategoryConnector\Persistence\SpyCmsBlockCategoryPositionQuery A secondary query class using the current class as primary query
     */
    public function useCmsBlockCategoryPositionQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCmsBlockCategoryPosition($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CmsBlockCategoryPosition', '\Orm\Zed\CmsBlockCategoryConnector\Persistence\SpyCmsBlockCategoryPositionQuery');
    }

    /**
     * Use the CmsBlockCategoryPosition relation SpyCmsBlockCategoryPosition object
     *
     * @param callable(\Orm\Zed\CmsBlockCategoryConnector\Persistence\SpyCmsBlockCategoryPositionQuery):\Orm\Zed\CmsBlockCategoryConnector\Persistence\SpyCmsBlockCategoryPositionQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withCmsBlockCategoryPositionQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useCmsBlockCategoryPositionQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the CmsBlockCategoryPosition relation to the SpyCmsBlockCategoryPosition table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\CmsBlockCategoryConnector\Persistence\SpyCmsBlockCategoryPositionQuery The inner query object of the EXISTS statement
     */
    public function useCmsBlockCategoryPositionExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('CmsBlockCategoryPosition', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the CmsBlockCategoryPosition relation to the SpyCmsBlockCategoryPosition table for a NOT EXISTS query.
     *
     * @see useCmsBlockCategoryPositionExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\CmsBlockCategoryConnector\Persistence\SpyCmsBlockCategoryPositionQuery The inner query object of the NOT EXISTS statement
     */
    public function useCmsBlockCategoryPositionNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('CmsBlockCategoryPosition', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Exclude object from result
     *
     * @param   ChildSpyCmsBlockCategoryConnector $spyCmsBlockCategoryConnector Object to remove from the list of results
     *
     * @return $this|ChildSpyCmsBlockCategoryConnectorQuery The current query, for fluid interface
     */
    public function prune($spyCmsBlockCategoryConnector = null)
    {
        if ($spyCmsBlockCategoryConnector) {
            $this->addUsingAlias(SpyCmsBlockCategoryConnectorTableMap::COL_ID_CMS_BLOCK_CATEGORY_CONNECTOR, $spyCmsBlockCategoryConnector->getIdCmsBlockCategoryConnector(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_cms_block_category_connector table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCmsBlockCategoryConnectorTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyCmsBlockCategoryConnectorTableMap::clearInstancePool();
            SpyCmsBlockCategoryConnectorTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCmsBlockCategoryConnectorTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyCmsBlockCategoryConnectorTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyCmsBlockCategoryConnectorTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyCmsBlockCategoryConnectorTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SpyCmsBlockCategoryConnectorQuery
