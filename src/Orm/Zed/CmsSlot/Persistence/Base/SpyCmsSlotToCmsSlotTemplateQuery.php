<?php

namespace Orm\Zed\CmsSlot\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\CmsSlot\Persistence\SpyCmsSlotToCmsSlotTemplate as ChildSpyCmsSlotToCmsSlotTemplate;
use Orm\Zed\CmsSlot\Persistence\SpyCmsSlotToCmsSlotTemplateQuery as ChildSpyCmsSlotToCmsSlotTemplateQuery;
use Orm\Zed\CmsSlot\Persistence\Map\SpyCmsSlotToCmsSlotTemplateTableMap;
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
 * Base class that represents a query for the 'spy_cms_slot_to_cms_slot_template' table.
 *
 *
 *
 * @method     ChildSpyCmsSlotToCmsSlotTemplateQuery orderByIdCmsSlotToCmsSlotTemplate($order = Criteria::ASC) Order by the id_cms_slot_to_cms_slot_template column
 * @method     ChildSpyCmsSlotToCmsSlotTemplateQuery orderByFkCmsSlot($order = Criteria::ASC) Order by the fk_cms_slot column
 * @method     ChildSpyCmsSlotToCmsSlotTemplateQuery orderByFkCmsSlotTemplate($order = Criteria::ASC) Order by the fk_cms_slot_template column
 *
 * @method     ChildSpyCmsSlotToCmsSlotTemplateQuery groupByIdCmsSlotToCmsSlotTemplate() Group by the id_cms_slot_to_cms_slot_template column
 * @method     ChildSpyCmsSlotToCmsSlotTemplateQuery groupByFkCmsSlot() Group by the fk_cms_slot column
 * @method     ChildSpyCmsSlotToCmsSlotTemplateQuery groupByFkCmsSlotTemplate() Group by the fk_cms_slot_template column
 *
 * @method     ChildSpyCmsSlotToCmsSlotTemplateQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyCmsSlotToCmsSlotTemplateQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyCmsSlotToCmsSlotTemplateQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyCmsSlotToCmsSlotTemplateQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyCmsSlotToCmsSlotTemplateQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyCmsSlotToCmsSlotTemplateQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyCmsSlotToCmsSlotTemplateQuery leftJoinCmsSlotTemplate($relationAlias = null) Adds a LEFT JOIN clause to the query using the CmsSlotTemplate relation
 * @method     ChildSpyCmsSlotToCmsSlotTemplateQuery rightJoinCmsSlotTemplate($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CmsSlotTemplate relation
 * @method     ChildSpyCmsSlotToCmsSlotTemplateQuery innerJoinCmsSlotTemplate($relationAlias = null) Adds a INNER JOIN clause to the query using the CmsSlotTemplate relation
 *
 * @method     ChildSpyCmsSlotToCmsSlotTemplateQuery joinWithCmsSlotTemplate($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the CmsSlotTemplate relation
 *
 * @method     ChildSpyCmsSlotToCmsSlotTemplateQuery leftJoinWithCmsSlotTemplate() Adds a LEFT JOIN clause and with to the query using the CmsSlotTemplate relation
 * @method     ChildSpyCmsSlotToCmsSlotTemplateQuery rightJoinWithCmsSlotTemplate() Adds a RIGHT JOIN clause and with to the query using the CmsSlotTemplate relation
 * @method     ChildSpyCmsSlotToCmsSlotTemplateQuery innerJoinWithCmsSlotTemplate() Adds a INNER JOIN clause and with to the query using the CmsSlotTemplate relation
 *
 * @method     ChildSpyCmsSlotToCmsSlotTemplateQuery leftJoinCmsSlot($relationAlias = null) Adds a LEFT JOIN clause to the query using the CmsSlot relation
 * @method     ChildSpyCmsSlotToCmsSlotTemplateQuery rightJoinCmsSlot($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CmsSlot relation
 * @method     ChildSpyCmsSlotToCmsSlotTemplateQuery innerJoinCmsSlot($relationAlias = null) Adds a INNER JOIN clause to the query using the CmsSlot relation
 *
 * @method     ChildSpyCmsSlotToCmsSlotTemplateQuery joinWithCmsSlot($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the CmsSlot relation
 *
 * @method     ChildSpyCmsSlotToCmsSlotTemplateQuery leftJoinWithCmsSlot() Adds a LEFT JOIN clause and with to the query using the CmsSlot relation
 * @method     ChildSpyCmsSlotToCmsSlotTemplateQuery rightJoinWithCmsSlot() Adds a RIGHT JOIN clause and with to the query using the CmsSlot relation
 * @method     ChildSpyCmsSlotToCmsSlotTemplateQuery innerJoinWithCmsSlot() Adds a INNER JOIN clause and with to the query using the CmsSlot relation
 *
 * @method     \Orm\Zed\CmsSlot\Persistence\SpyCmsSlotTemplateQuery|\Orm\Zed\CmsSlot\Persistence\SpyCmsSlotQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyCmsSlotToCmsSlotTemplate|null findOne(ConnectionInterface $con = null) Return the first ChildSpyCmsSlotToCmsSlotTemplate matching the query
 * @method     ChildSpyCmsSlotToCmsSlotTemplate findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyCmsSlotToCmsSlotTemplate matching the query, or a new ChildSpyCmsSlotToCmsSlotTemplate object populated from the query conditions when no match is found
 *
 * @method     ChildSpyCmsSlotToCmsSlotTemplate|null findOneByIdCmsSlotToCmsSlotTemplate(int $id_cms_slot_to_cms_slot_template) Return the first ChildSpyCmsSlotToCmsSlotTemplate filtered by the id_cms_slot_to_cms_slot_template column
 * @method     ChildSpyCmsSlotToCmsSlotTemplate|null findOneByFkCmsSlot(int $fk_cms_slot) Return the first ChildSpyCmsSlotToCmsSlotTemplate filtered by the fk_cms_slot column
 * @method     ChildSpyCmsSlotToCmsSlotTemplate|null findOneByFkCmsSlotTemplate(int $fk_cms_slot_template) Return the first ChildSpyCmsSlotToCmsSlotTemplate filtered by the fk_cms_slot_template column *

 * @method     ChildSpyCmsSlotToCmsSlotTemplate requirePk($key, ConnectionInterface $con = null) Return the ChildSpyCmsSlotToCmsSlotTemplate by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCmsSlotToCmsSlotTemplate requireOne(ConnectionInterface $con = null) Return the first ChildSpyCmsSlotToCmsSlotTemplate matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyCmsSlotToCmsSlotTemplate requireOneByIdCmsSlotToCmsSlotTemplate(int $id_cms_slot_to_cms_slot_template) Return the first ChildSpyCmsSlotToCmsSlotTemplate filtered by the id_cms_slot_to_cms_slot_template column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCmsSlotToCmsSlotTemplate requireOneByFkCmsSlot(int $fk_cms_slot) Return the first ChildSpyCmsSlotToCmsSlotTemplate filtered by the fk_cms_slot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCmsSlotToCmsSlotTemplate requireOneByFkCmsSlotTemplate(int $fk_cms_slot_template) Return the first ChildSpyCmsSlotToCmsSlotTemplate filtered by the fk_cms_slot_template column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyCmsSlotToCmsSlotTemplate[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyCmsSlotToCmsSlotTemplate objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCmsSlotToCmsSlotTemplate> find(ConnectionInterface $con = null) Return ChildSpyCmsSlotToCmsSlotTemplate objects based on current ModelCriteria
 * @method     ChildSpyCmsSlotToCmsSlotTemplate[]|ObjectCollection findByIdCmsSlotToCmsSlotTemplate(int $id_cms_slot_to_cms_slot_template) Return ChildSpyCmsSlotToCmsSlotTemplate objects filtered by the id_cms_slot_to_cms_slot_template column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCmsSlotToCmsSlotTemplate> findByIdCmsSlotToCmsSlotTemplate(int $id_cms_slot_to_cms_slot_template) Return ChildSpyCmsSlotToCmsSlotTemplate objects filtered by the id_cms_slot_to_cms_slot_template column
 * @method     ChildSpyCmsSlotToCmsSlotTemplate[]|ObjectCollection findByFkCmsSlot(int $fk_cms_slot) Return ChildSpyCmsSlotToCmsSlotTemplate objects filtered by the fk_cms_slot column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCmsSlotToCmsSlotTemplate> findByFkCmsSlot(int $fk_cms_slot) Return ChildSpyCmsSlotToCmsSlotTemplate objects filtered by the fk_cms_slot column
 * @method     ChildSpyCmsSlotToCmsSlotTemplate[]|ObjectCollection findByFkCmsSlotTemplate(int $fk_cms_slot_template) Return ChildSpyCmsSlotToCmsSlotTemplate objects filtered by the fk_cms_slot_template column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCmsSlotToCmsSlotTemplate> findByFkCmsSlotTemplate(int $fk_cms_slot_template) Return ChildSpyCmsSlotToCmsSlotTemplate objects filtered by the fk_cms_slot_template column
 * @method     ChildSpyCmsSlotToCmsSlotTemplate[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyCmsSlotToCmsSlotTemplate> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyCmsSlotToCmsSlotTemplateQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\CmsSlot\Persistence\Base\SpyCmsSlotToCmsSlotTemplateQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\CmsSlot\\Persistence\\SpyCmsSlotToCmsSlotTemplate', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyCmsSlotToCmsSlotTemplateQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyCmsSlotToCmsSlotTemplateQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyCmsSlotToCmsSlotTemplateQuery) {
            return $criteria;
        }
        $query = new ChildSpyCmsSlotToCmsSlotTemplateQuery();
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
     * @return ChildSpyCmsSlotToCmsSlotTemplate|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyCmsSlotToCmsSlotTemplateTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyCmsSlotToCmsSlotTemplate A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_cms_slot_to_cms_slot_template, fk_cms_slot, fk_cms_slot_template FROM spy_cms_slot_to_cms_slot_template WHERE id_cms_slot_to_cms_slot_template = :p0';
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
            /** @var ChildSpyCmsSlotToCmsSlotTemplate $obj */
            $obj = new ChildSpyCmsSlotToCmsSlotTemplate();
            $obj->hydrate($row);
            SpyCmsSlotToCmsSlotTemplateTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyCmsSlotToCmsSlotTemplate|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyCmsSlotToCmsSlotTemplateQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyCmsSlotToCmsSlotTemplateTableMap::COL_ID_CMS_SLOT_TO_CMS_SLOT_TEMPLATE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyCmsSlotToCmsSlotTemplateQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyCmsSlotToCmsSlotTemplateTableMap::COL_ID_CMS_SLOT_TO_CMS_SLOT_TEMPLATE, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idCmsSlotToCmsSlotTemplate Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdCmsSlotToCmsSlotTemplate_Between(array $idCmsSlotToCmsSlotTemplate)
    {
        return $this->filterByIdCmsSlotToCmsSlotTemplate($idCmsSlotToCmsSlotTemplate, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idCmsSlotToCmsSlotTemplates Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdCmsSlotToCmsSlotTemplate_In(array $idCmsSlotToCmsSlotTemplates)
    {
        return $this->filterByIdCmsSlotToCmsSlotTemplate($idCmsSlotToCmsSlotTemplates, Criteria::IN);
    }

    /**
     * Filter the query on the id_cms_slot_to_cms_slot_template column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCmsSlotToCmsSlotTemplate(1234); // WHERE id_cms_slot_to_cms_slot_template = 1234
     * $query->filterByIdCmsSlotToCmsSlotTemplate(array(12, 34), Criteria::IN); // WHERE id_cms_slot_to_cms_slot_template IN (12, 34)
     * $query->filterByIdCmsSlotToCmsSlotTemplate(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_cms_slot_to_cms_slot_template > 12
     * </code>
     *
     * @param     mixed $idCmsSlotToCmsSlotTemplate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdCmsSlotToCmsSlotTemplate($idCmsSlotToCmsSlotTemplate = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idCmsSlotToCmsSlotTemplate)) {
            $useMinMax = false;
            if (isset($idCmsSlotToCmsSlotTemplate['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCmsSlotToCmsSlotTemplateTableMap::COL_ID_CMS_SLOT_TO_CMS_SLOT_TEMPLATE, $idCmsSlotToCmsSlotTemplate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCmsSlotToCmsSlotTemplate['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCmsSlotToCmsSlotTemplateTableMap::COL_ID_CMS_SLOT_TO_CMS_SLOT_TEMPLATE, $idCmsSlotToCmsSlotTemplate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idCmsSlotToCmsSlotTemplate of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCmsSlotToCmsSlotTemplateTableMap::COL_ID_CMS_SLOT_TO_CMS_SLOT_TEMPLATE, $idCmsSlotToCmsSlotTemplate, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkCmsSlot Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkCmsSlot_Between(array $fkCmsSlot)
    {
        return $this->filterByFkCmsSlot($fkCmsSlot, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkCmsSlots Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkCmsSlot_In(array $fkCmsSlots)
    {
        return $this->filterByFkCmsSlot($fkCmsSlots, Criteria::IN);
    }

    /**
     * Filter the query on the fk_cms_slot column
     *
     * Example usage:
     * <code>
     * $query->filterByFkCmsSlot(1234); // WHERE fk_cms_slot = 1234
     * $query->filterByFkCmsSlot(array(12, 34), Criteria::IN); // WHERE fk_cms_slot IN (12, 34)
     * $query->filterByFkCmsSlot(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_cms_slot > 12
     * </code>
     *
     * @see       filterByCmsSlot()
     *
     * @param     mixed $fkCmsSlot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkCmsSlot($fkCmsSlot = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkCmsSlot)) {
            $useMinMax = false;
            if (isset($fkCmsSlot['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCmsSlotToCmsSlotTemplateTableMap::COL_FK_CMS_SLOT, $fkCmsSlot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkCmsSlot['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCmsSlotToCmsSlotTemplateTableMap::COL_FK_CMS_SLOT, $fkCmsSlot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkCmsSlot of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCmsSlotToCmsSlotTemplateTableMap::COL_FK_CMS_SLOT, $fkCmsSlot, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkCmsSlotTemplate Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkCmsSlotTemplate_Between(array $fkCmsSlotTemplate)
    {
        return $this->filterByFkCmsSlotTemplate($fkCmsSlotTemplate, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkCmsSlotTemplates Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkCmsSlotTemplate_In(array $fkCmsSlotTemplates)
    {
        return $this->filterByFkCmsSlotTemplate($fkCmsSlotTemplates, Criteria::IN);
    }

    /**
     * Filter the query on the fk_cms_slot_template column
     *
     * Example usage:
     * <code>
     * $query->filterByFkCmsSlotTemplate(1234); // WHERE fk_cms_slot_template = 1234
     * $query->filterByFkCmsSlotTemplate(array(12, 34), Criteria::IN); // WHERE fk_cms_slot_template IN (12, 34)
     * $query->filterByFkCmsSlotTemplate(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_cms_slot_template > 12
     * </code>
     *
     * @see       filterByCmsSlotTemplate()
     *
     * @param     mixed $fkCmsSlotTemplate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkCmsSlotTemplate($fkCmsSlotTemplate = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkCmsSlotTemplate)) {
            $useMinMax = false;
            if (isset($fkCmsSlotTemplate['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCmsSlotToCmsSlotTemplateTableMap::COL_FK_CMS_SLOT_TEMPLATE, $fkCmsSlotTemplate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkCmsSlotTemplate['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCmsSlotToCmsSlotTemplateTableMap::COL_FK_CMS_SLOT_TEMPLATE, $fkCmsSlotTemplate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkCmsSlotTemplate of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCmsSlotToCmsSlotTemplateTableMap::COL_FK_CMS_SLOT_TEMPLATE, $fkCmsSlotTemplate, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\CmsSlot\Persistence\SpyCmsSlotTemplate object
     *
     * @param \Orm\Zed\CmsSlot\Persistence\SpyCmsSlotTemplate|ObjectCollection $spyCmsSlotTemplate The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyCmsSlotToCmsSlotTemplateQuery The current query, for fluid interface
     */
    public function filterByCmsSlotTemplate($spyCmsSlotTemplate, $comparison = null)
    {
        if ($spyCmsSlotTemplate instanceof \Orm\Zed\CmsSlot\Persistence\SpyCmsSlotTemplate) {
            return $this
                ->addUsingAlias(SpyCmsSlotToCmsSlotTemplateTableMap::COL_FK_CMS_SLOT_TEMPLATE, $spyCmsSlotTemplate->getIdCmsSlotTemplate(), $comparison);
        } elseif ($spyCmsSlotTemplate instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyCmsSlotToCmsSlotTemplateTableMap::COL_FK_CMS_SLOT_TEMPLATE, $spyCmsSlotTemplate->toKeyValue('PrimaryKey', 'IdCmsSlotTemplate'), $comparison);
        } else {
            throw new PropelException('filterByCmsSlotTemplate() only accepts arguments of type \Orm\Zed\CmsSlot\Persistence\SpyCmsSlotTemplate or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CmsSlotTemplate relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyCmsSlotToCmsSlotTemplateQuery The current query, for fluid interface
     */
    public function joinCmsSlotTemplate($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CmsSlotTemplate');

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
            $this->addJoinObject($join, 'CmsSlotTemplate');
        }

        return $this;
    }

    /**
     * Use the CmsSlotTemplate relation SpyCmsSlotTemplate object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\CmsSlot\Persistence\SpyCmsSlotTemplateQuery A secondary query class using the current class as primary query
     */
    public function useCmsSlotTemplateQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCmsSlotTemplate($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CmsSlotTemplate', '\Orm\Zed\CmsSlot\Persistence\SpyCmsSlotTemplateQuery');
    }

    /**
     * Use the CmsSlotTemplate relation SpyCmsSlotTemplate object
     *
     * @param callable(\Orm\Zed\CmsSlot\Persistence\SpyCmsSlotTemplateQuery):\Orm\Zed\CmsSlot\Persistence\SpyCmsSlotTemplateQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withCmsSlotTemplateQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useCmsSlotTemplateQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the CmsSlotTemplate relation to the SpyCmsSlotTemplate table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\CmsSlot\Persistence\SpyCmsSlotTemplateQuery The inner query object of the EXISTS statement
     */
    public function useCmsSlotTemplateExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('CmsSlotTemplate', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the CmsSlotTemplate relation to the SpyCmsSlotTemplate table for a NOT EXISTS query.
     *
     * @see useCmsSlotTemplateExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\CmsSlot\Persistence\SpyCmsSlotTemplateQuery The inner query object of the NOT EXISTS statement
     */
    public function useCmsSlotTemplateNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('CmsSlotTemplate', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\CmsSlot\Persistence\SpyCmsSlot object
     *
     * @param \Orm\Zed\CmsSlot\Persistence\SpyCmsSlot|ObjectCollection $spyCmsSlot The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyCmsSlotToCmsSlotTemplateQuery The current query, for fluid interface
     */
    public function filterByCmsSlot($spyCmsSlot, $comparison = null)
    {
        if ($spyCmsSlot instanceof \Orm\Zed\CmsSlot\Persistence\SpyCmsSlot) {
            return $this
                ->addUsingAlias(SpyCmsSlotToCmsSlotTemplateTableMap::COL_FK_CMS_SLOT, $spyCmsSlot->getIdCmsSlot(), $comparison);
        } elseif ($spyCmsSlot instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyCmsSlotToCmsSlotTemplateTableMap::COL_FK_CMS_SLOT, $spyCmsSlot->toKeyValue('PrimaryKey', 'IdCmsSlot'), $comparison);
        } else {
            throw new PropelException('filterByCmsSlot() only accepts arguments of type \Orm\Zed\CmsSlot\Persistence\SpyCmsSlot or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CmsSlot relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyCmsSlotToCmsSlotTemplateQuery The current query, for fluid interface
     */
    public function joinCmsSlot($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CmsSlot');

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
            $this->addJoinObject($join, 'CmsSlot');
        }

        return $this;
    }

    /**
     * Use the CmsSlot relation SpyCmsSlot object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\CmsSlot\Persistence\SpyCmsSlotQuery A secondary query class using the current class as primary query
     */
    public function useCmsSlotQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCmsSlot($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CmsSlot', '\Orm\Zed\CmsSlot\Persistence\SpyCmsSlotQuery');
    }

    /**
     * Use the CmsSlot relation SpyCmsSlot object
     *
     * @param callable(\Orm\Zed\CmsSlot\Persistence\SpyCmsSlotQuery):\Orm\Zed\CmsSlot\Persistence\SpyCmsSlotQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withCmsSlotQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useCmsSlotQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the CmsSlot relation to the SpyCmsSlot table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\CmsSlot\Persistence\SpyCmsSlotQuery The inner query object of the EXISTS statement
     */
    public function useCmsSlotExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('CmsSlot', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the CmsSlot relation to the SpyCmsSlot table for a NOT EXISTS query.
     *
     * @see useCmsSlotExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\CmsSlot\Persistence\SpyCmsSlotQuery The inner query object of the NOT EXISTS statement
     */
    public function useCmsSlotNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('CmsSlot', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Exclude object from result
     *
     * @param   ChildSpyCmsSlotToCmsSlotTemplate $spyCmsSlotToCmsSlotTemplate Object to remove from the list of results
     *
     * @return $this|ChildSpyCmsSlotToCmsSlotTemplateQuery The current query, for fluid interface
     */
    public function prune($spyCmsSlotToCmsSlotTemplate = null)
    {
        if ($spyCmsSlotToCmsSlotTemplate) {
            $this->addUsingAlias(SpyCmsSlotToCmsSlotTemplateTableMap::COL_ID_CMS_SLOT_TO_CMS_SLOT_TEMPLATE, $spyCmsSlotToCmsSlotTemplate->getIdCmsSlotToCmsSlotTemplate(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_cms_slot_to_cms_slot_template table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCmsSlotToCmsSlotTemplateTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyCmsSlotToCmsSlotTemplateTableMap::clearInstancePool();
            SpyCmsSlotToCmsSlotTemplateTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCmsSlotToCmsSlotTemplateTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyCmsSlotToCmsSlotTemplateTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyCmsSlotToCmsSlotTemplateTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyCmsSlotToCmsSlotTemplateTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SpyCmsSlotToCmsSlotTemplateQuery
