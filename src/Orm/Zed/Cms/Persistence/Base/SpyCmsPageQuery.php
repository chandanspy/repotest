<?php

namespace Orm\Zed\Cms\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\Cms\Persistence\SpyCmsPage as ChildSpyCmsPage;
use Orm\Zed\Cms\Persistence\SpyCmsPageQuery as ChildSpyCmsPageQuery;
use Orm\Zed\Cms\Persistence\Map\SpyCmsPageTableMap;
use Orm\Zed\Url\Persistence\SpyUrl;
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
 * Base class that represents a query for the 'spy_cms_page' table.
 *
 *
 *
 * @method     ChildSpyCmsPageQuery orderByIdCmsPage($order = Criteria::ASC) Order by the id_cms_page column
 * @method     ChildSpyCmsPageQuery orderByFkTemplate($order = Criteria::ASC) Order by the fk_template column
 * @method     ChildSpyCmsPageQuery orderByIsActive($order = Criteria::ASC) Order by the is_active column
 * @method     ChildSpyCmsPageQuery orderByIsSearchable($order = Criteria::ASC) Order by the is_searchable column
 * @method     ChildSpyCmsPageQuery orderByPageKey($order = Criteria::ASC) Order by the page_key column
 * @method     ChildSpyCmsPageQuery orderByUuid($order = Criteria::ASC) Order by the uuid column
 * @method     ChildSpyCmsPageQuery orderByValidFrom($order = Criteria::ASC) Order by the valid_from column
 * @method     ChildSpyCmsPageQuery orderByValidTo($order = Criteria::ASC) Order by the valid_to column
 *
 * @method     ChildSpyCmsPageQuery groupByIdCmsPage() Group by the id_cms_page column
 * @method     ChildSpyCmsPageQuery groupByFkTemplate() Group by the fk_template column
 * @method     ChildSpyCmsPageQuery groupByIsActive() Group by the is_active column
 * @method     ChildSpyCmsPageQuery groupByIsSearchable() Group by the is_searchable column
 * @method     ChildSpyCmsPageQuery groupByPageKey() Group by the page_key column
 * @method     ChildSpyCmsPageQuery groupByUuid() Group by the uuid column
 * @method     ChildSpyCmsPageQuery groupByValidFrom() Group by the valid_from column
 * @method     ChildSpyCmsPageQuery groupByValidTo() Group by the valid_to column
 *
 * @method     ChildSpyCmsPageQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyCmsPageQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyCmsPageQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyCmsPageQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyCmsPageQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyCmsPageQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyCmsPageQuery leftJoinCmsTemplate($relationAlias = null) Adds a LEFT JOIN clause to the query using the CmsTemplate relation
 * @method     ChildSpyCmsPageQuery rightJoinCmsTemplate($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CmsTemplate relation
 * @method     ChildSpyCmsPageQuery innerJoinCmsTemplate($relationAlias = null) Adds a INNER JOIN clause to the query using the CmsTemplate relation
 *
 * @method     ChildSpyCmsPageQuery joinWithCmsTemplate($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the CmsTemplate relation
 *
 * @method     ChildSpyCmsPageQuery leftJoinWithCmsTemplate() Adds a LEFT JOIN clause and with to the query using the CmsTemplate relation
 * @method     ChildSpyCmsPageQuery rightJoinWithCmsTemplate() Adds a RIGHT JOIN clause and with to the query using the CmsTemplate relation
 * @method     ChildSpyCmsPageQuery innerJoinWithCmsTemplate() Adds a INNER JOIN clause and with to the query using the CmsTemplate relation
 *
 * @method     ChildSpyCmsPageQuery leftJoinSpyCmsVersion($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyCmsVersion relation
 * @method     ChildSpyCmsPageQuery rightJoinSpyCmsVersion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyCmsVersion relation
 * @method     ChildSpyCmsPageQuery innerJoinSpyCmsVersion($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyCmsVersion relation
 *
 * @method     ChildSpyCmsPageQuery joinWithSpyCmsVersion($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyCmsVersion relation
 *
 * @method     ChildSpyCmsPageQuery leftJoinWithSpyCmsVersion() Adds a LEFT JOIN clause and with to the query using the SpyCmsVersion relation
 * @method     ChildSpyCmsPageQuery rightJoinWithSpyCmsVersion() Adds a RIGHT JOIN clause and with to the query using the SpyCmsVersion relation
 * @method     ChildSpyCmsPageQuery innerJoinWithSpyCmsVersion() Adds a INNER JOIN clause and with to the query using the SpyCmsVersion relation
 *
 * @method     ChildSpyCmsPageQuery leftJoinSpyCmsPageLocalizedAttributes($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyCmsPageLocalizedAttributes relation
 * @method     ChildSpyCmsPageQuery rightJoinSpyCmsPageLocalizedAttributes($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyCmsPageLocalizedAttributes relation
 * @method     ChildSpyCmsPageQuery innerJoinSpyCmsPageLocalizedAttributes($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyCmsPageLocalizedAttributes relation
 *
 * @method     ChildSpyCmsPageQuery joinWithSpyCmsPageLocalizedAttributes($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyCmsPageLocalizedAttributes relation
 *
 * @method     ChildSpyCmsPageQuery leftJoinWithSpyCmsPageLocalizedAttributes() Adds a LEFT JOIN clause and with to the query using the SpyCmsPageLocalizedAttributes relation
 * @method     ChildSpyCmsPageQuery rightJoinWithSpyCmsPageLocalizedAttributes() Adds a RIGHT JOIN clause and with to the query using the SpyCmsPageLocalizedAttributes relation
 * @method     ChildSpyCmsPageQuery innerJoinWithSpyCmsPageLocalizedAttributes() Adds a INNER JOIN clause and with to the query using the SpyCmsPageLocalizedAttributes relation
 *
 * @method     ChildSpyCmsPageQuery leftJoinSpyCmsGlossaryKeyMapping($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyCmsGlossaryKeyMapping relation
 * @method     ChildSpyCmsPageQuery rightJoinSpyCmsGlossaryKeyMapping($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyCmsGlossaryKeyMapping relation
 * @method     ChildSpyCmsPageQuery innerJoinSpyCmsGlossaryKeyMapping($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyCmsGlossaryKeyMapping relation
 *
 * @method     ChildSpyCmsPageQuery joinWithSpyCmsGlossaryKeyMapping($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyCmsGlossaryKeyMapping relation
 *
 * @method     ChildSpyCmsPageQuery leftJoinWithSpyCmsGlossaryKeyMapping() Adds a LEFT JOIN clause and with to the query using the SpyCmsGlossaryKeyMapping relation
 * @method     ChildSpyCmsPageQuery rightJoinWithSpyCmsGlossaryKeyMapping() Adds a RIGHT JOIN clause and with to the query using the SpyCmsGlossaryKeyMapping relation
 * @method     ChildSpyCmsPageQuery innerJoinWithSpyCmsGlossaryKeyMapping() Adds a INNER JOIN clause and with to the query using the SpyCmsGlossaryKeyMapping relation
 *
 * @method     ChildSpyCmsPageQuery leftJoinSpyCmsPageStore($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyCmsPageStore relation
 * @method     ChildSpyCmsPageQuery rightJoinSpyCmsPageStore($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyCmsPageStore relation
 * @method     ChildSpyCmsPageQuery innerJoinSpyCmsPageStore($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyCmsPageStore relation
 *
 * @method     ChildSpyCmsPageQuery joinWithSpyCmsPageStore($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyCmsPageStore relation
 *
 * @method     ChildSpyCmsPageQuery leftJoinWithSpyCmsPageStore() Adds a LEFT JOIN clause and with to the query using the SpyCmsPageStore relation
 * @method     ChildSpyCmsPageQuery rightJoinWithSpyCmsPageStore() Adds a RIGHT JOIN clause and with to the query using the SpyCmsPageStore relation
 * @method     ChildSpyCmsPageQuery innerJoinWithSpyCmsPageStore() Adds a INNER JOIN clause and with to the query using the SpyCmsPageStore relation
 *
 * @method     ChildSpyCmsPageQuery leftJoinSpyUrl($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyUrl relation
 * @method     ChildSpyCmsPageQuery rightJoinSpyUrl($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyUrl relation
 * @method     ChildSpyCmsPageQuery innerJoinSpyUrl($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyUrl relation
 *
 * @method     ChildSpyCmsPageQuery joinWithSpyUrl($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyUrl relation
 *
 * @method     ChildSpyCmsPageQuery leftJoinWithSpyUrl() Adds a LEFT JOIN clause and with to the query using the SpyUrl relation
 * @method     ChildSpyCmsPageQuery rightJoinWithSpyUrl() Adds a RIGHT JOIN clause and with to the query using the SpyUrl relation
 * @method     ChildSpyCmsPageQuery innerJoinWithSpyUrl() Adds a INNER JOIN clause and with to the query using the SpyUrl relation
 *
 * @method     \Orm\Zed\Cms\Persistence\SpyCmsTemplateQuery|\Orm\Zed\Cms\Persistence\SpyCmsVersionQuery|\Orm\Zed\Cms\Persistence\SpyCmsPageLocalizedAttributesQuery|\Orm\Zed\Cms\Persistence\SpyCmsGlossaryKeyMappingQuery|\Orm\Zed\Cms\Persistence\SpyCmsPageStoreQuery|\Orm\Zed\Url\Persistence\SpyUrlQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyCmsPage|null findOne(ConnectionInterface $con = null) Return the first ChildSpyCmsPage matching the query
 * @method     ChildSpyCmsPage findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyCmsPage matching the query, or a new ChildSpyCmsPage object populated from the query conditions when no match is found
 *
 * @method     ChildSpyCmsPage|null findOneByIdCmsPage(int $id_cms_page) Return the first ChildSpyCmsPage filtered by the id_cms_page column
 * @method     ChildSpyCmsPage|null findOneByFkTemplate(int $fk_template) Return the first ChildSpyCmsPage filtered by the fk_template column
 * @method     ChildSpyCmsPage|null findOneByIsActive(boolean $is_active) Return the first ChildSpyCmsPage filtered by the is_active column
 * @method     ChildSpyCmsPage|null findOneByIsSearchable(boolean $is_searchable) Return the first ChildSpyCmsPage filtered by the is_searchable column
 * @method     ChildSpyCmsPage|null findOneByPageKey(string $page_key) Return the first ChildSpyCmsPage filtered by the page_key column
 * @method     ChildSpyCmsPage|null findOneByUuid(string $uuid) Return the first ChildSpyCmsPage filtered by the uuid column
 * @method     ChildSpyCmsPage|null findOneByValidFrom(string $valid_from) Return the first ChildSpyCmsPage filtered by the valid_from column
 * @method     ChildSpyCmsPage|null findOneByValidTo(string $valid_to) Return the first ChildSpyCmsPage filtered by the valid_to column *

 * @method     ChildSpyCmsPage requirePk($key, ConnectionInterface $con = null) Return the ChildSpyCmsPage by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCmsPage requireOne(ConnectionInterface $con = null) Return the first ChildSpyCmsPage matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyCmsPage requireOneByIdCmsPage(int $id_cms_page) Return the first ChildSpyCmsPage filtered by the id_cms_page column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCmsPage requireOneByFkTemplate(int $fk_template) Return the first ChildSpyCmsPage filtered by the fk_template column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCmsPage requireOneByIsActive(boolean $is_active) Return the first ChildSpyCmsPage filtered by the is_active column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCmsPage requireOneByIsSearchable(boolean $is_searchable) Return the first ChildSpyCmsPage filtered by the is_searchable column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCmsPage requireOneByPageKey(string $page_key) Return the first ChildSpyCmsPage filtered by the page_key column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCmsPage requireOneByUuid(string $uuid) Return the first ChildSpyCmsPage filtered by the uuid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCmsPage requireOneByValidFrom(string $valid_from) Return the first ChildSpyCmsPage filtered by the valid_from column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCmsPage requireOneByValidTo(string $valid_to) Return the first ChildSpyCmsPage filtered by the valid_to column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyCmsPage[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyCmsPage objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCmsPage> find(ConnectionInterface $con = null) Return ChildSpyCmsPage objects based on current ModelCriteria
 * @method     ChildSpyCmsPage[]|ObjectCollection findByIdCmsPage(int $id_cms_page) Return ChildSpyCmsPage objects filtered by the id_cms_page column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCmsPage> findByIdCmsPage(int $id_cms_page) Return ChildSpyCmsPage objects filtered by the id_cms_page column
 * @method     ChildSpyCmsPage[]|ObjectCollection findByFkTemplate(int $fk_template) Return ChildSpyCmsPage objects filtered by the fk_template column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCmsPage> findByFkTemplate(int $fk_template) Return ChildSpyCmsPage objects filtered by the fk_template column
 * @method     ChildSpyCmsPage[]|ObjectCollection findByIsActive(boolean $is_active) Return ChildSpyCmsPage objects filtered by the is_active column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCmsPage> findByIsActive(boolean $is_active) Return ChildSpyCmsPage objects filtered by the is_active column
 * @method     ChildSpyCmsPage[]|ObjectCollection findByIsSearchable(boolean $is_searchable) Return ChildSpyCmsPage objects filtered by the is_searchable column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCmsPage> findByIsSearchable(boolean $is_searchable) Return ChildSpyCmsPage objects filtered by the is_searchable column
 * @method     ChildSpyCmsPage[]|ObjectCollection findByPageKey(string $page_key) Return ChildSpyCmsPage objects filtered by the page_key column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCmsPage> findByPageKey(string $page_key) Return ChildSpyCmsPage objects filtered by the page_key column
 * @method     ChildSpyCmsPage[]|ObjectCollection findByUuid(string $uuid) Return ChildSpyCmsPage objects filtered by the uuid column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCmsPage> findByUuid(string $uuid) Return ChildSpyCmsPage objects filtered by the uuid column
 * @method     ChildSpyCmsPage[]|ObjectCollection findByValidFrom(string $valid_from) Return ChildSpyCmsPage objects filtered by the valid_from column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCmsPage> findByValidFrom(string $valid_from) Return ChildSpyCmsPage objects filtered by the valid_from column
 * @method     ChildSpyCmsPage[]|ObjectCollection findByValidTo(string $valid_to) Return ChildSpyCmsPage objects filtered by the valid_to column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCmsPage> findByValidTo(string $valid_to) Return ChildSpyCmsPage objects filtered by the valid_to column
 * @method     ChildSpyCmsPage[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyCmsPage> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyCmsPageQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\Cms\Persistence\Base\SpyCmsPageQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\Cms\\Persistence\\SpyCmsPage', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyCmsPageQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyCmsPageQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyCmsPageQuery) {
            return $criteria;
        }
        $query = new ChildSpyCmsPageQuery();
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
     * @return ChildSpyCmsPage|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyCmsPageTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyCmsPage A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_cms_page, fk_template, is_active, is_searchable, page_key, uuid, valid_from, valid_to FROM spy_cms_page WHERE id_cms_page = :p0';
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
            /** @var ChildSpyCmsPage $obj */
            $obj = new ChildSpyCmsPage();
            $obj->hydrate($row);
            SpyCmsPageTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyCmsPage|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyCmsPageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyCmsPageTableMap::COL_ID_CMS_PAGE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyCmsPageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyCmsPageTableMap::COL_ID_CMS_PAGE, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idCmsPage Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdCmsPage_Between(array $idCmsPage)
    {
        return $this->filterByIdCmsPage($idCmsPage, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idCmsPages Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdCmsPage_In(array $idCmsPages)
    {
        return $this->filterByIdCmsPage($idCmsPages, Criteria::IN);
    }

    /**
     * Filter the query on the id_cms_page column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCmsPage(1234); // WHERE id_cms_page = 1234
     * $query->filterByIdCmsPage(array(12, 34), Criteria::IN); // WHERE id_cms_page IN (12, 34)
     * $query->filterByIdCmsPage(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_cms_page > 12
     * </code>
     *
     * @param     mixed $idCmsPage The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdCmsPage($idCmsPage = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idCmsPage)) {
            $useMinMax = false;
            if (isset($idCmsPage['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCmsPageTableMap::COL_ID_CMS_PAGE, $idCmsPage['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCmsPage['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCmsPageTableMap::COL_ID_CMS_PAGE, $idCmsPage['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idCmsPage of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCmsPageTableMap::COL_ID_CMS_PAGE, $idCmsPage, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkTemplate Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkTemplate_Between(array $fkTemplate)
    {
        return $this->filterByFkTemplate($fkTemplate, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkTemplates Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkTemplate_In(array $fkTemplates)
    {
        return $this->filterByFkTemplate($fkTemplates, Criteria::IN);
    }

    /**
     * Filter the query on the fk_template column
     *
     * Example usage:
     * <code>
     * $query->filterByFkTemplate(1234); // WHERE fk_template = 1234
     * $query->filterByFkTemplate(array(12, 34), Criteria::IN); // WHERE fk_template IN (12, 34)
     * $query->filterByFkTemplate(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_template > 12
     * </code>
     *
     * @see       filterByCmsTemplate()
     *
     * @param     mixed $fkTemplate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkTemplate($fkTemplate = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkTemplate)) {
            $useMinMax = false;
            if (isset($fkTemplate['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCmsPageTableMap::COL_FK_TEMPLATE, $fkTemplate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkTemplate['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCmsPageTableMap::COL_FK_TEMPLATE, $fkTemplate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkTemplate of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCmsPageTableMap::COL_FK_TEMPLATE, $fkTemplate, $comparison);

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

        $query = $this->addUsingAlias(SpyCmsPageTableMap::COL_IS_ACTIVE, $isActive, $comparison);

        return $query;
    }

    /**
     * Filter the query on the is_searchable column
     *
     * Example usage:
     * <code>
     * $query->filterByIsSearchable(true); // WHERE is_searchable = true
     * $query->filterByIsSearchable('yes'); // WHERE is_searchable = true
     * </code>
     *
     * @param     bool|string $isSearchable The value to use as filter.
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
    public function filterByIsSearchable($isSearchable = null, $comparison = Criteria::EQUAL)
    {
        if (is_string($isSearchable)) {
            $isSearchable = in_array(strtolower($isSearchable), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        $query = $this->addUsingAlias(SpyCmsPageTableMap::COL_IS_SEARCHABLE, $isSearchable, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $pageKeys Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPageKey_In(array $pageKeys)
    {
        return $this->filterByPageKey($pageKeys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $pageKey Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPageKey_Like($pageKey)
    {
        return $this->filterByPageKey($pageKey, Criteria::LIKE);
    }

    /**
     * Filter the query on the page_key column
     *
     * Example usage:
     * <code>
     * $query->filterByPageKey('fooValue');   // WHERE page_key = 'fooValue'
     * $query->filterByPageKey('%fooValue%', Criteria::LIKE); // WHERE page_key LIKE '%fooValue%'
     * $query->filterByPageKey([1, 'foo'], Criteria::IN); // WHERE page_key IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $pageKey The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByPageKey($pageKey = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $pageKey = str_replace('*', '%', $pageKey);
        }

        if (is_array($pageKey) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$pageKey of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyCmsPageTableMap::COL_PAGE_KEY, $pageKey, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $uuids Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByUuid_In(array $uuids)
    {
        return $this->filterByUuid($uuids, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $uuid Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByUuid_Like($uuid)
    {
        return $this->filterByUuid($uuid, Criteria::LIKE);
    }

    /**
     * Filter the query on the uuid column
     *
     * Example usage:
     * <code>
     * $query->filterByUuid('fooValue');   // WHERE uuid = 'fooValue'
     * $query->filterByUuid('%fooValue%', Criteria::LIKE); // WHERE uuid LIKE '%fooValue%'
     * $query->filterByUuid([1, 'foo'], Criteria::IN); // WHERE uuid IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $uuid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByUuid($uuid = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $uuid = str_replace('*', '%', $uuid);
        }

        if (is_array($uuid) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$uuid of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyCmsPageTableMap::COL_UUID, $uuid, $comparison);

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
                $this->addUsingAlias(SpyCmsPageTableMap::COL_VALID_FROM, $validFrom['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($validFrom['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCmsPageTableMap::COL_VALID_FROM, $validFrom['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$validFrom of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCmsPageTableMap::COL_VALID_FROM, $validFrom, $comparison);

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
                $this->addUsingAlias(SpyCmsPageTableMap::COL_VALID_TO, $validTo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($validTo['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCmsPageTableMap::COL_VALID_TO, $validTo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$validTo of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCmsPageTableMap::COL_VALID_TO, $validTo, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\Cms\Persistence\SpyCmsTemplate object
     *
     * @param \Orm\Zed\Cms\Persistence\SpyCmsTemplate|ObjectCollection $spyCmsTemplate The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyCmsPageQuery The current query, for fluid interface
     */
    public function filterByCmsTemplate($spyCmsTemplate, $comparison = null)
    {
        if ($spyCmsTemplate instanceof \Orm\Zed\Cms\Persistence\SpyCmsTemplate) {
            return $this
                ->addUsingAlias(SpyCmsPageTableMap::COL_FK_TEMPLATE, $spyCmsTemplate->getIdCmsTemplate(), $comparison);
        } elseif ($spyCmsTemplate instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyCmsPageTableMap::COL_FK_TEMPLATE, $spyCmsTemplate->toKeyValue('PrimaryKey', 'IdCmsTemplate'), $comparison);
        } else {
            throw new PropelException('filterByCmsTemplate() only accepts arguments of type \Orm\Zed\Cms\Persistence\SpyCmsTemplate or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CmsTemplate relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyCmsPageQuery The current query, for fluid interface
     */
    public function joinCmsTemplate($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CmsTemplate');

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
            $this->addJoinObject($join, 'CmsTemplate');
        }

        return $this;
    }

    /**
     * Use the CmsTemplate relation SpyCmsTemplate object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Cms\Persistence\SpyCmsTemplateQuery A secondary query class using the current class as primary query
     */
    public function useCmsTemplateQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCmsTemplate($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CmsTemplate', '\Orm\Zed\Cms\Persistence\SpyCmsTemplateQuery');
    }

    /**
     * Use the CmsTemplate relation SpyCmsTemplate object
     *
     * @param callable(\Orm\Zed\Cms\Persistence\SpyCmsTemplateQuery):\Orm\Zed\Cms\Persistence\SpyCmsTemplateQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withCmsTemplateQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useCmsTemplateQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the CmsTemplate relation to the SpyCmsTemplate table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Cms\Persistence\SpyCmsTemplateQuery The inner query object of the EXISTS statement
     */
    public function useCmsTemplateExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('CmsTemplate', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the CmsTemplate relation to the SpyCmsTemplate table for a NOT EXISTS query.
     *
     * @see useCmsTemplateExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Cms\Persistence\SpyCmsTemplateQuery The inner query object of the NOT EXISTS statement
     */
    public function useCmsTemplateNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('CmsTemplate', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Cms\Persistence\SpyCmsVersion object
     *
     * @param \Orm\Zed\Cms\Persistence\SpyCmsVersion|ObjectCollection $spyCmsVersion the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyCmsPageQuery The current query, for fluid interface
     */
    public function filterBySpyCmsVersion($spyCmsVersion, $comparison = null)
    {
        if ($spyCmsVersion instanceof \Orm\Zed\Cms\Persistence\SpyCmsVersion) {
            return $this
                ->addUsingAlias(SpyCmsPageTableMap::COL_ID_CMS_PAGE, $spyCmsVersion->getFkCmsPage(), $comparison);
        } elseif ($spyCmsVersion instanceof ObjectCollection) {
            return $this
                ->useSpyCmsVersionQuery()
                ->filterByPrimaryKeys($spyCmsVersion->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyCmsVersion() only accepts arguments of type \Orm\Zed\Cms\Persistence\SpyCmsVersion or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyCmsVersion relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyCmsPageQuery The current query, for fluid interface
     */
    public function joinSpyCmsVersion($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyCmsVersion');

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
            $this->addJoinObject($join, 'SpyCmsVersion');
        }

        return $this;
    }

    /**
     * Use the SpyCmsVersion relation SpyCmsVersion object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Cms\Persistence\SpyCmsVersionQuery A secondary query class using the current class as primary query
     */
    public function useSpyCmsVersionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyCmsVersion($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyCmsVersion', '\Orm\Zed\Cms\Persistence\SpyCmsVersionQuery');
    }

    /**
     * Use the SpyCmsVersion relation SpyCmsVersion object
     *
     * @param callable(\Orm\Zed\Cms\Persistence\SpyCmsVersionQuery):\Orm\Zed\Cms\Persistence\SpyCmsVersionQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyCmsVersionQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyCmsVersionQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyCmsVersion table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Cms\Persistence\SpyCmsVersionQuery The inner query object of the EXISTS statement
     */
    public function useSpyCmsVersionExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyCmsVersion', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyCmsVersion table for a NOT EXISTS query.
     *
     * @see useSpyCmsVersionExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Cms\Persistence\SpyCmsVersionQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyCmsVersionNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyCmsVersion', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Cms\Persistence\SpyCmsPageLocalizedAttributes object
     *
     * @param \Orm\Zed\Cms\Persistence\SpyCmsPageLocalizedAttributes|ObjectCollection $spyCmsPageLocalizedAttributes the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyCmsPageQuery The current query, for fluid interface
     */
    public function filterBySpyCmsPageLocalizedAttributes($spyCmsPageLocalizedAttributes, $comparison = null)
    {
        if ($spyCmsPageLocalizedAttributes instanceof \Orm\Zed\Cms\Persistence\SpyCmsPageLocalizedAttributes) {
            return $this
                ->addUsingAlias(SpyCmsPageTableMap::COL_ID_CMS_PAGE, $spyCmsPageLocalizedAttributes->getFkCmsPage(), $comparison);
        } elseif ($spyCmsPageLocalizedAttributes instanceof ObjectCollection) {
            return $this
                ->useSpyCmsPageLocalizedAttributesQuery()
                ->filterByPrimaryKeys($spyCmsPageLocalizedAttributes->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyCmsPageLocalizedAttributes() only accepts arguments of type \Orm\Zed\Cms\Persistence\SpyCmsPageLocalizedAttributes or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyCmsPageLocalizedAttributes relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyCmsPageQuery The current query, for fluid interface
     */
    public function joinSpyCmsPageLocalizedAttributes($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyCmsPageLocalizedAttributes');

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
            $this->addJoinObject($join, 'SpyCmsPageLocalizedAttributes');
        }

        return $this;
    }

    /**
     * Use the SpyCmsPageLocalizedAttributes relation SpyCmsPageLocalizedAttributes object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Cms\Persistence\SpyCmsPageLocalizedAttributesQuery A secondary query class using the current class as primary query
     */
    public function useSpyCmsPageLocalizedAttributesQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyCmsPageLocalizedAttributes($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyCmsPageLocalizedAttributes', '\Orm\Zed\Cms\Persistence\SpyCmsPageLocalizedAttributesQuery');
    }

    /**
     * Use the SpyCmsPageLocalizedAttributes relation SpyCmsPageLocalizedAttributes object
     *
     * @param callable(\Orm\Zed\Cms\Persistence\SpyCmsPageLocalizedAttributesQuery):\Orm\Zed\Cms\Persistence\SpyCmsPageLocalizedAttributesQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyCmsPageLocalizedAttributesQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyCmsPageLocalizedAttributesQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyCmsPageLocalizedAttributes table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Cms\Persistence\SpyCmsPageLocalizedAttributesQuery The inner query object of the EXISTS statement
     */
    public function useSpyCmsPageLocalizedAttributesExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyCmsPageLocalizedAttributes', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyCmsPageLocalizedAttributes table for a NOT EXISTS query.
     *
     * @see useSpyCmsPageLocalizedAttributesExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Cms\Persistence\SpyCmsPageLocalizedAttributesQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyCmsPageLocalizedAttributesNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyCmsPageLocalizedAttributes', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Cms\Persistence\SpyCmsGlossaryKeyMapping object
     *
     * @param \Orm\Zed\Cms\Persistence\SpyCmsGlossaryKeyMapping|ObjectCollection $spyCmsGlossaryKeyMapping the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyCmsPageQuery The current query, for fluid interface
     */
    public function filterBySpyCmsGlossaryKeyMapping($spyCmsGlossaryKeyMapping, $comparison = null)
    {
        if ($spyCmsGlossaryKeyMapping instanceof \Orm\Zed\Cms\Persistence\SpyCmsGlossaryKeyMapping) {
            return $this
                ->addUsingAlias(SpyCmsPageTableMap::COL_ID_CMS_PAGE, $spyCmsGlossaryKeyMapping->getFkPage(), $comparison);
        } elseif ($spyCmsGlossaryKeyMapping instanceof ObjectCollection) {
            return $this
                ->useSpyCmsGlossaryKeyMappingQuery()
                ->filterByPrimaryKeys($spyCmsGlossaryKeyMapping->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyCmsGlossaryKeyMapping() only accepts arguments of type \Orm\Zed\Cms\Persistence\SpyCmsGlossaryKeyMapping or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyCmsGlossaryKeyMapping relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyCmsPageQuery The current query, for fluid interface
     */
    public function joinSpyCmsGlossaryKeyMapping($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyCmsGlossaryKeyMapping');

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
            $this->addJoinObject($join, 'SpyCmsGlossaryKeyMapping');
        }

        return $this;
    }

    /**
     * Use the SpyCmsGlossaryKeyMapping relation SpyCmsGlossaryKeyMapping object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Cms\Persistence\SpyCmsGlossaryKeyMappingQuery A secondary query class using the current class as primary query
     */
    public function useSpyCmsGlossaryKeyMappingQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyCmsGlossaryKeyMapping($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyCmsGlossaryKeyMapping', '\Orm\Zed\Cms\Persistence\SpyCmsGlossaryKeyMappingQuery');
    }

    /**
     * Use the SpyCmsGlossaryKeyMapping relation SpyCmsGlossaryKeyMapping object
     *
     * @param callable(\Orm\Zed\Cms\Persistence\SpyCmsGlossaryKeyMappingQuery):\Orm\Zed\Cms\Persistence\SpyCmsGlossaryKeyMappingQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyCmsGlossaryKeyMappingQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyCmsGlossaryKeyMappingQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyCmsGlossaryKeyMapping table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Cms\Persistence\SpyCmsGlossaryKeyMappingQuery The inner query object of the EXISTS statement
     */
    public function useSpyCmsGlossaryKeyMappingExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyCmsGlossaryKeyMapping', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyCmsGlossaryKeyMapping table for a NOT EXISTS query.
     *
     * @see useSpyCmsGlossaryKeyMappingExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Cms\Persistence\SpyCmsGlossaryKeyMappingQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyCmsGlossaryKeyMappingNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyCmsGlossaryKeyMapping', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Cms\Persistence\SpyCmsPageStore object
     *
     * @param \Orm\Zed\Cms\Persistence\SpyCmsPageStore|ObjectCollection $spyCmsPageStore the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyCmsPageQuery The current query, for fluid interface
     */
    public function filterBySpyCmsPageStore($spyCmsPageStore, $comparison = null)
    {
        if ($spyCmsPageStore instanceof \Orm\Zed\Cms\Persistence\SpyCmsPageStore) {
            return $this
                ->addUsingAlias(SpyCmsPageTableMap::COL_ID_CMS_PAGE, $spyCmsPageStore->getFkCmsPage(), $comparison);
        } elseif ($spyCmsPageStore instanceof ObjectCollection) {
            return $this
                ->useSpyCmsPageStoreQuery()
                ->filterByPrimaryKeys($spyCmsPageStore->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyCmsPageStore() only accepts arguments of type \Orm\Zed\Cms\Persistence\SpyCmsPageStore or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyCmsPageStore relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyCmsPageQuery The current query, for fluid interface
     */
    public function joinSpyCmsPageStore($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyCmsPageStore');

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
            $this->addJoinObject($join, 'SpyCmsPageStore');
        }

        return $this;
    }

    /**
     * Use the SpyCmsPageStore relation SpyCmsPageStore object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Cms\Persistence\SpyCmsPageStoreQuery A secondary query class using the current class as primary query
     */
    public function useSpyCmsPageStoreQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyCmsPageStore($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyCmsPageStore', '\Orm\Zed\Cms\Persistence\SpyCmsPageStoreQuery');
    }

    /**
     * Use the SpyCmsPageStore relation SpyCmsPageStore object
     *
     * @param callable(\Orm\Zed\Cms\Persistence\SpyCmsPageStoreQuery):\Orm\Zed\Cms\Persistence\SpyCmsPageStoreQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyCmsPageStoreQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyCmsPageStoreQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyCmsPageStore table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Cms\Persistence\SpyCmsPageStoreQuery The inner query object of the EXISTS statement
     */
    public function useSpyCmsPageStoreExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyCmsPageStore', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyCmsPageStore table for a NOT EXISTS query.
     *
     * @see useSpyCmsPageStoreExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Cms\Persistence\SpyCmsPageStoreQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyCmsPageStoreNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyCmsPageStore', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Url\Persistence\SpyUrl object
     *
     * @param \Orm\Zed\Url\Persistence\SpyUrl|ObjectCollection $spyUrl the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyCmsPageQuery The current query, for fluid interface
     */
    public function filterBySpyUrl($spyUrl, $comparison = null)
    {
        if ($spyUrl instanceof \Orm\Zed\Url\Persistence\SpyUrl) {
            return $this
                ->addUsingAlias(SpyCmsPageTableMap::COL_ID_CMS_PAGE, $spyUrl->getFkResourcePage(), $comparison);
        } elseif ($spyUrl instanceof ObjectCollection) {
            return $this
                ->useSpyUrlQuery()
                ->filterByPrimaryKeys($spyUrl->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyUrl() only accepts arguments of type \Orm\Zed\Url\Persistence\SpyUrl or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyUrl relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyCmsPageQuery The current query, for fluid interface
     */
    public function joinSpyUrl($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyUrl');

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
            $this->addJoinObject($join, 'SpyUrl');
        }

        return $this;
    }

    /**
     * Use the SpyUrl relation SpyUrl object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Url\Persistence\SpyUrlQuery A secondary query class using the current class as primary query
     */
    public function useSpyUrlQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinSpyUrl($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyUrl', '\Orm\Zed\Url\Persistence\SpyUrlQuery');
    }

    /**
     * Use the SpyUrl relation SpyUrl object
     *
     * @param callable(\Orm\Zed\Url\Persistence\SpyUrlQuery):\Orm\Zed\Url\Persistence\SpyUrlQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyUrlQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useSpyUrlQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyUrl table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Url\Persistence\SpyUrlQuery The inner query object of the EXISTS statement
     */
    public function useSpyUrlExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyUrl', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyUrl table for a NOT EXISTS query.
     *
     * @see useSpyUrlExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Url\Persistence\SpyUrlQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyUrlNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyUrl', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Exclude object from result
     *
     * @param   ChildSpyCmsPage $spyCmsPage Object to remove from the list of results
     *
     * @return $this|ChildSpyCmsPageQuery The current query, for fluid interface
     */
    public function prune($spyCmsPage = null)
    {
        if ($spyCmsPage) {
            $this->addUsingAlias(SpyCmsPageTableMap::COL_ID_CMS_PAGE, $spyCmsPage->getIdCmsPage(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_cms_page table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCmsPageTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyCmsPageTableMap::clearInstancePool();
            SpyCmsPageTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCmsPageTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyCmsPageTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyCmsPageTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyCmsPageTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SpyCmsPageQuery
