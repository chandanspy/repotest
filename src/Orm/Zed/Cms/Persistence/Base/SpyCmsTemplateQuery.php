<?php

namespace Orm\Zed\Cms\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\Cms\Persistence\SpyCmsTemplate as ChildSpyCmsTemplate;
use Orm\Zed\Cms\Persistence\SpyCmsTemplateQuery as ChildSpyCmsTemplateQuery;
use Orm\Zed\Cms\Persistence\Map\SpyCmsTemplateTableMap;
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
 * Base class that represents a query for the 'spy_cms_template' table.
 *
 *
 *
 * @method     ChildSpyCmsTemplateQuery orderByIdCmsTemplate($order = Criteria::ASC) Order by the id_cms_template column
 * @method     ChildSpyCmsTemplateQuery orderByTemplateName($order = Criteria::ASC) Order by the template_name column
 * @method     ChildSpyCmsTemplateQuery orderByTemplatePath($order = Criteria::ASC) Order by the template_path column
 *
 * @method     ChildSpyCmsTemplateQuery groupByIdCmsTemplate() Group by the id_cms_template column
 * @method     ChildSpyCmsTemplateQuery groupByTemplateName() Group by the template_name column
 * @method     ChildSpyCmsTemplateQuery groupByTemplatePath() Group by the template_path column
 *
 * @method     ChildSpyCmsTemplateQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyCmsTemplateQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyCmsTemplateQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyCmsTemplateQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyCmsTemplateQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyCmsTemplateQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyCmsTemplateQuery leftJoinSpyCmsPage($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyCmsPage relation
 * @method     ChildSpyCmsTemplateQuery rightJoinSpyCmsPage($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyCmsPage relation
 * @method     ChildSpyCmsTemplateQuery innerJoinSpyCmsPage($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyCmsPage relation
 *
 * @method     ChildSpyCmsTemplateQuery joinWithSpyCmsPage($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyCmsPage relation
 *
 * @method     ChildSpyCmsTemplateQuery leftJoinWithSpyCmsPage() Adds a LEFT JOIN clause and with to the query using the SpyCmsPage relation
 * @method     ChildSpyCmsTemplateQuery rightJoinWithSpyCmsPage() Adds a RIGHT JOIN clause and with to the query using the SpyCmsPage relation
 * @method     ChildSpyCmsTemplateQuery innerJoinWithSpyCmsPage() Adds a INNER JOIN clause and with to the query using the SpyCmsPage relation
 *
 * @method     \Orm\Zed\Cms\Persistence\SpyCmsPageQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyCmsTemplate|null findOne(ConnectionInterface $con = null) Return the first ChildSpyCmsTemplate matching the query
 * @method     ChildSpyCmsTemplate findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyCmsTemplate matching the query, or a new ChildSpyCmsTemplate object populated from the query conditions when no match is found
 *
 * @method     ChildSpyCmsTemplate|null findOneByIdCmsTemplate(int $id_cms_template) Return the first ChildSpyCmsTemplate filtered by the id_cms_template column
 * @method     ChildSpyCmsTemplate|null findOneByTemplateName(string $template_name) Return the first ChildSpyCmsTemplate filtered by the template_name column
 * @method     ChildSpyCmsTemplate|null findOneByTemplatePath(string $template_path) Return the first ChildSpyCmsTemplate filtered by the template_path column *

 * @method     ChildSpyCmsTemplate requirePk($key, ConnectionInterface $con = null) Return the ChildSpyCmsTemplate by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCmsTemplate requireOne(ConnectionInterface $con = null) Return the first ChildSpyCmsTemplate matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyCmsTemplate requireOneByIdCmsTemplate(int $id_cms_template) Return the first ChildSpyCmsTemplate filtered by the id_cms_template column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCmsTemplate requireOneByTemplateName(string $template_name) Return the first ChildSpyCmsTemplate filtered by the template_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCmsTemplate requireOneByTemplatePath(string $template_path) Return the first ChildSpyCmsTemplate filtered by the template_path column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyCmsTemplate[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyCmsTemplate objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCmsTemplate> find(ConnectionInterface $con = null) Return ChildSpyCmsTemplate objects based on current ModelCriteria
 * @method     ChildSpyCmsTemplate[]|ObjectCollection findByIdCmsTemplate(int $id_cms_template) Return ChildSpyCmsTemplate objects filtered by the id_cms_template column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCmsTemplate> findByIdCmsTemplate(int $id_cms_template) Return ChildSpyCmsTemplate objects filtered by the id_cms_template column
 * @method     ChildSpyCmsTemplate[]|ObjectCollection findByTemplateName(string $template_name) Return ChildSpyCmsTemplate objects filtered by the template_name column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCmsTemplate> findByTemplateName(string $template_name) Return ChildSpyCmsTemplate objects filtered by the template_name column
 * @method     ChildSpyCmsTemplate[]|ObjectCollection findByTemplatePath(string $template_path) Return ChildSpyCmsTemplate objects filtered by the template_path column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCmsTemplate> findByTemplatePath(string $template_path) Return ChildSpyCmsTemplate objects filtered by the template_path column
 * @method     ChildSpyCmsTemplate[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyCmsTemplate> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyCmsTemplateQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\Cms\Persistence\Base\SpyCmsTemplateQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\Cms\\Persistence\\SpyCmsTemplate', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyCmsTemplateQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyCmsTemplateQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyCmsTemplateQuery) {
            return $criteria;
        }
        $query = new ChildSpyCmsTemplateQuery();
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
     * @return ChildSpyCmsTemplate|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyCmsTemplateTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyCmsTemplate A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_cms_template, template_name, template_path FROM spy_cms_template WHERE id_cms_template = :p0';
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
            /** @var ChildSpyCmsTemplate $obj */
            $obj = new ChildSpyCmsTemplate();
            $obj->hydrate($row);
            SpyCmsTemplateTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyCmsTemplate|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyCmsTemplateQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyCmsTemplateTableMap::COL_ID_CMS_TEMPLATE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyCmsTemplateQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyCmsTemplateTableMap::COL_ID_CMS_TEMPLATE, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idCmsTemplate Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdCmsTemplate_Between(array $idCmsTemplate)
    {
        return $this->filterByIdCmsTemplate($idCmsTemplate, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idCmsTemplates Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdCmsTemplate_In(array $idCmsTemplates)
    {
        return $this->filterByIdCmsTemplate($idCmsTemplates, Criteria::IN);
    }

    /**
     * Filter the query on the id_cms_template column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCmsTemplate(1234); // WHERE id_cms_template = 1234
     * $query->filterByIdCmsTemplate(array(12, 34), Criteria::IN); // WHERE id_cms_template IN (12, 34)
     * $query->filterByIdCmsTemplate(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_cms_template > 12
     * </code>
     *
     * @param     mixed $idCmsTemplate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdCmsTemplate($idCmsTemplate = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idCmsTemplate)) {
            $useMinMax = false;
            if (isset($idCmsTemplate['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCmsTemplateTableMap::COL_ID_CMS_TEMPLATE, $idCmsTemplate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCmsTemplate['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCmsTemplateTableMap::COL_ID_CMS_TEMPLATE, $idCmsTemplate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idCmsTemplate of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCmsTemplateTableMap::COL_ID_CMS_TEMPLATE, $idCmsTemplate, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $templateNames Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByTemplateName_In(array $templateNames)
    {
        return $this->filterByTemplateName($templateNames, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $templateName Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByTemplateName_Like($templateName)
    {
        return $this->filterByTemplateName($templateName, Criteria::LIKE);
    }

    /**
     * Filter the query on the template_name column
     *
     * Example usage:
     * <code>
     * $query->filterByTemplateName('fooValue');   // WHERE template_name = 'fooValue'
     * $query->filterByTemplateName('%fooValue%', Criteria::LIKE); // WHERE template_name LIKE '%fooValue%'
     * $query->filterByTemplateName([1, 'foo'], Criteria::IN); // WHERE template_name IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $templateName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByTemplateName($templateName = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $templateName = str_replace('*', '%', $templateName);
        }

        if (is_array($templateName) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$templateName of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyCmsTemplateTableMap::COL_TEMPLATE_NAME, $templateName, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $templatePaths Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByTemplatePath_In(array $templatePaths)
    {
        return $this->filterByTemplatePath($templatePaths, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $templatePath Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByTemplatePath_Like($templatePath)
    {
        return $this->filterByTemplatePath($templatePath, Criteria::LIKE);
    }

    /**
     * Filter the query on the template_path column
     *
     * Example usage:
     * <code>
     * $query->filterByTemplatePath('fooValue');   // WHERE template_path = 'fooValue'
     * $query->filterByTemplatePath('%fooValue%', Criteria::LIKE); // WHERE template_path LIKE '%fooValue%'
     * $query->filterByTemplatePath([1, 'foo'], Criteria::IN); // WHERE template_path IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $templatePath The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByTemplatePath($templatePath = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $templatePath = str_replace('*', '%', $templatePath);
        }

        if (is_array($templatePath) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$templatePath of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyCmsTemplateTableMap::COL_TEMPLATE_PATH, $templatePath, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\Cms\Persistence\SpyCmsPage object
     *
     * @param \Orm\Zed\Cms\Persistence\SpyCmsPage|ObjectCollection $spyCmsPage the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyCmsTemplateQuery The current query, for fluid interface
     */
    public function filterBySpyCmsPage($spyCmsPage, $comparison = null)
    {
        if ($spyCmsPage instanceof \Orm\Zed\Cms\Persistence\SpyCmsPage) {
            return $this
                ->addUsingAlias(SpyCmsTemplateTableMap::COL_ID_CMS_TEMPLATE, $spyCmsPage->getFkTemplate(), $comparison);
        } elseif ($spyCmsPage instanceof ObjectCollection) {
            return $this
                ->useSpyCmsPageQuery()
                ->filterByPrimaryKeys($spyCmsPage->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyCmsPage() only accepts arguments of type \Orm\Zed\Cms\Persistence\SpyCmsPage or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyCmsPage relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyCmsTemplateQuery The current query, for fluid interface
     */
    public function joinSpyCmsPage($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyCmsPage');

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
            $this->addJoinObject($join, 'SpyCmsPage');
        }

        return $this;
    }

    /**
     * Use the SpyCmsPage relation SpyCmsPage object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Cms\Persistence\SpyCmsPageQuery A secondary query class using the current class as primary query
     */
    public function useSpyCmsPageQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyCmsPage($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyCmsPage', '\Orm\Zed\Cms\Persistence\SpyCmsPageQuery');
    }

    /**
     * Use the SpyCmsPage relation SpyCmsPage object
     *
     * @param callable(\Orm\Zed\Cms\Persistence\SpyCmsPageQuery):\Orm\Zed\Cms\Persistence\SpyCmsPageQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyCmsPageQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyCmsPageQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyCmsPage table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Cms\Persistence\SpyCmsPageQuery The inner query object of the EXISTS statement
     */
    public function useSpyCmsPageExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyCmsPage', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyCmsPage table for a NOT EXISTS query.
     *
     * @see useSpyCmsPageExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Cms\Persistence\SpyCmsPageQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyCmsPageNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyCmsPage', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Exclude object from result
     *
     * @param   ChildSpyCmsTemplate $spyCmsTemplate Object to remove from the list of results
     *
     * @return $this|ChildSpyCmsTemplateQuery The current query, for fluid interface
     */
    public function prune($spyCmsTemplate = null)
    {
        if ($spyCmsTemplate) {
            $this->addUsingAlias(SpyCmsTemplateTableMap::COL_ID_CMS_TEMPLATE, $spyCmsTemplate->getIdCmsTemplate(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_cms_template table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCmsTemplateTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyCmsTemplateTableMap::clearInstancePool();
            SpyCmsTemplateTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCmsTemplateTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyCmsTemplateTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyCmsTemplateTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyCmsTemplateTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SpyCmsTemplateQuery
