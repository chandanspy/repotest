<?php

namespace Orm\Zed\Cms\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\Cms\Persistence\SpyCmsGlossaryKeyMapping as ChildSpyCmsGlossaryKeyMapping;
use Orm\Zed\Cms\Persistence\SpyCmsGlossaryKeyMappingQuery as ChildSpyCmsGlossaryKeyMappingQuery;
use Orm\Zed\Cms\Persistence\Map\SpyCmsGlossaryKeyMappingTableMap;
use Orm\Zed\Glossary\Persistence\SpyGlossaryKey;
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
 * Base class that represents a query for the 'spy_cms_glossary_key_mapping' table.
 *
 *
 *
 * @method     ChildSpyCmsGlossaryKeyMappingQuery orderByIdCmsGlossaryKeyMapping($order = Criteria::ASC) Order by the id_cms_glossary_key_mapping column
 * @method     ChildSpyCmsGlossaryKeyMappingQuery orderByFkGlossaryKey($order = Criteria::ASC) Order by the fk_glossary_key column
 * @method     ChildSpyCmsGlossaryKeyMappingQuery orderByFkPage($order = Criteria::ASC) Order by the fk_page column
 * @method     ChildSpyCmsGlossaryKeyMappingQuery orderByPlaceholder($order = Criteria::ASC) Order by the placeholder column
 *
 * @method     ChildSpyCmsGlossaryKeyMappingQuery groupByIdCmsGlossaryKeyMapping() Group by the id_cms_glossary_key_mapping column
 * @method     ChildSpyCmsGlossaryKeyMappingQuery groupByFkGlossaryKey() Group by the fk_glossary_key column
 * @method     ChildSpyCmsGlossaryKeyMappingQuery groupByFkPage() Group by the fk_page column
 * @method     ChildSpyCmsGlossaryKeyMappingQuery groupByPlaceholder() Group by the placeholder column
 *
 * @method     ChildSpyCmsGlossaryKeyMappingQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyCmsGlossaryKeyMappingQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyCmsGlossaryKeyMappingQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyCmsGlossaryKeyMappingQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyCmsGlossaryKeyMappingQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyCmsGlossaryKeyMappingQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyCmsGlossaryKeyMappingQuery leftJoinCmsPage($relationAlias = null) Adds a LEFT JOIN clause to the query using the CmsPage relation
 * @method     ChildSpyCmsGlossaryKeyMappingQuery rightJoinCmsPage($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CmsPage relation
 * @method     ChildSpyCmsGlossaryKeyMappingQuery innerJoinCmsPage($relationAlias = null) Adds a INNER JOIN clause to the query using the CmsPage relation
 *
 * @method     ChildSpyCmsGlossaryKeyMappingQuery joinWithCmsPage($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the CmsPage relation
 *
 * @method     ChildSpyCmsGlossaryKeyMappingQuery leftJoinWithCmsPage() Adds a LEFT JOIN clause and with to the query using the CmsPage relation
 * @method     ChildSpyCmsGlossaryKeyMappingQuery rightJoinWithCmsPage() Adds a RIGHT JOIN clause and with to the query using the CmsPage relation
 * @method     ChildSpyCmsGlossaryKeyMappingQuery innerJoinWithCmsPage() Adds a INNER JOIN clause and with to the query using the CmsPage relation
 *
 * @method     ChildSpyCmsGlossaryKeyMappingQuery leftJoinGlossaryKey($relationAlias = null) Adds a LEFT JOIN clause to the query using the GlossaryKey relation
 * @method     ChildSpyCmsGlossaryKeyMappingQuery rightJoinGlossaryKey($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GlossaryKey relation
 * @method     ChildSpyCmsGlossaryKeyMappingQuery innerJoinGlossaryKey($relationAlias = null) Adds a INNER JOIN clause to the query using the GlossaryKey relation
 *
 * @method     ChildSpyCmsGlossaryKeyMappingQuery joinWithGlossaryKey($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the GlossaryKey relation
 *
 * @method     ChildSpyCmsGlossaryKeyMappingQuery leftJoinWithGlossaryKey() Adds a LEFT JOIN clause and with to the query using the GlossaryKey relation
 * @method     ChildSpyCmsGlossaryKeyMappingQuery rightJoinWithGlossaryKey() Adds a RIGHT JOIN clause and with to the query using the GlossaryKey relation
 * @method     ChildSpyCmsGlossaryKeyMappingQuery innerJoinWithGlossaryKey() Adds a INNER JOIN clause and with to the query using the GlossaryKey relation
 *
 * @method     \Orm\Zed\Cms\Persistence\SpyCmsPageQuery|\Orm\Zed\Glossary\Persistence\SpyGlossaryKeyQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyCmsGlossaryKeyMapping|null findOne(ConnectionInterface $con = null) Return the first ChildSpyCmsGlossaryKeyMapping matching the query
 * @method     ChildSpyCmsGlossaryKeyMapping findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyCmsGlossaryKeyMapping matching the query, or a new ChildSpyCmsGlossaryKeyMapping object populated from the query conditions when no match is found
 *
 * @method     ChildSpyCmsGlossaryKeyMapping|null findOneByIdCmsGlossaryKeyMapping(int $id_cms_glossary_key_mapping) Return the first ChildSpyCmsGlossaryKeyMapping filtered by the id_cms_glossary_key_mapping column
 * @method     ChildSpyCmsGlossaryKeyMapping|null findOneByFkGlossaryKey(int $fk_glossary_key) Return the first ChildSpyCmsGlossaryKeyMapping filtered by the fk_glossary_key column
 * @method     ChildSpyCmsGlossaryKeyMapping|null findOneByFkPage(int $fk_page) Return the first ChildSpyCmsGlossaryKeyMapping filtered by the fk_page column
 * @method     ChildSpyCmsGlossaryKeyMapping|null findOneByPlaceholder(string $placeholder) Return the first ChildSpyCmsGlossaryKeyMapping filtered by the placeholder column *

 * @method     ChildSpyCmsGlossaryKeyMapping requirePk($key, ConnectionInterface $con = null) Return the ChildSpyCmsGlossaryKeyMapping by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCmsGlossaryKeyMapping requireOne(ConnectionInterface $con = null) Return the first ChildSpyCmsGlossaryKeyMapping matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyCmsGlossaryKeyMapping requireOneByIdCmsGlossaryKeyMapping(int $id_cms_glossary_key_mapping) Return the first ChildSpyCmsGlossaryKeyMapping filtered by the id_cms_glossary_key_mapping column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCmsGlossaryKeyMapping requireOneByFkGlossaryKey(int $fk_glossary_key) Return the first ChildSpyCmsGlossaryKeyMapping filtered by the fk_glossary_key column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCmsGlossaryKeyMapping requireOneByFkPage(int $fk_page) Return the first ChildSpyCmsGlossaryKeyMapping filtered by the fk_page column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCmsGlossaryKeyMapping requireOneByPlaceholder(string $placeholder) Return the first ChildSpyCmsGlossaryKeyMapping filtered by the placeholder column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyCmsGlossaryKeyMapping[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyCmsGlossaryKeyMapping objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCmsGlossaryKeyMapping> find(ConnectionInterface $con = null) Return ChildSpyCmsGlossaryKeyMapping objects based on current ModelCriteria
 * @method     ChildSpyCmsGlossaryKeyMapping[]|ObjectCollection findByIdCmsGlossaryKeyMapping(int $id_cms_glossary_key_mapping) Return ChildSpyCmsGlossaryKeyMapping objects filtered by the id_cms_glossary_key_mapping column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCmsGlossaryKeyMapping> findByIdCmsGlossaryKeyMapping(int $id_cms_glossary_key_mapping) Return ChildSpyCmsGlossaryKeyMapping objects filtered by the id_cms_glossary_key_mapping column
 * @method     ChildSpyCmsGlossaryKeyMapping[]|ObjectCollection findByFkGlossaryKey(int $fk_glossary_key) Return ChildSpyCmsGlossaryKeyMapping objects filtered by the fk_glossary_key column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCmsGlossaryKeyMapping> findByFkGlossaryKey(int $fk_glossary_key) Return ChildSpyCmsGlossaryKeyMapping objects filtered by the fk_glossary_key column
 * @method     ChildSpyCmsGlossaryKeyMapping[]|ObjectCollection findByFkPage(int $fk_page) Return ChildSpyCmsGlossaryKeyMapping objects filtered by the fk_page column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCmsGlossaryKeyMapping> findByFkPage(int $fk_page) Return ChildSpyCmsGlossaryKeyMapping objects filtered by the fk_page column
 * @method     ChildSpyCmsGlossaryKeyMapping[]|ObjectCollection findByPlaceholder(string $placeholder) Return ChildSpyCmsGlossaryKeyMapping objects filtered by the placeholder column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCmsGlossaryKeyMapping> findByPlaceholder(string $placeholder) Return ChildSpyCmsGlossaryKeyMapping objects filtered by the placeholder column
 * @method     ChildSpyCmsGlossaryKeyMapping[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyCmsGlossaryKeyMapping> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyCmsGlossaryKeyMappingQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\Cms\Persistence\Base\SpyCmsGlossaryKeyMappingQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\Cms\\Persistence\\SpyCmsGlossaryKeyMapping', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyCmsGlossaryKeyMappingQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyCmsGlossaryKeyMappingQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyCmsGlossaryKeyMappingQuery) {
            return $criteria;
        }
        $query = new ChildSpyCmsGlossaryKeyMappingQuery();
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
     * @return ChildSpyCmsGlossaryKeyMapping|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyCmsGlossaryKeyMappingTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyCmsGlossaryKeyMapping A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_cms_glossary_key_mapping, fk_glossary_key, fk_page, placeholder FROM spy_cms_glossary_key_mapping WHERE id_cms_glossary_key_mapping = :p0';
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
            /** @var ChildSpyCmsGlossaryKeyMapping $obj */
            $obj = new ChildSpyCmsGlossaryKeyMapping();
            $obj->hydrate($row);
            SpyCmsGlossaryKeyMappingTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyCmsGlossaryKeyMapping|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyCmsGlossaryKeyMappingQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyCmsGlossaryKeyMappingTableMap::COL_ID_CMS_GLOSSARY_KEY_MAPPING, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyCmsGlossaryKeyMappingQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyCmsGlossaryKeyMappingTableMap::COL_ID_CMS_GLOSSARY_KEY_MAPPING, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idCmsGlossaryKeyMapping Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdCmsGlossaryKeyMapping_Between(array $idCmsGlossaryKeyMapping)
    {
        return $this->filterByIdCmsGlossaryKeyMapping($idCmsGlossaryKeyMapping, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idCmsGlossaryKeyMappings Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdCmsGlossaryKeyMapping_In(array $idCmsGlossaryKeyMappings)
    {
        return $this->filterByIdCmsGlossaryKeyMapping($idCmsGlossaryKeyMappings, Criteria::IN);
    }

    /**
     * Filter the query on the id_cms_glossary_key_mapping column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCmsGlossaryKeyMapping(1234); // WHERE id_cms_glossary_key_mapping = 1234
     * $query->filterByIdCmsGlossaryKeyMapping(array(12, 34), Criteria::IN); // WHERE id_cms_glossary_key_mapping IN (12, 34)
     * $query->filterByIdCmsGlossaryKeyMapping(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_cms_glossary_key_mapping > 12
     * </code>
     *
     * @param     mixed $idCmsGlossaryKeyMapping The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdCmsGlossaryKeyMapping($idCmsGlossaryKeyMapping = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idCmsGlossaryKeyMapping)) {
            $useMinMax = false;
            if (isset($idCmsGlossaryKeyMapping['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCmsGlossaryKeyMappingTableMap::COL_ID_CMS_GLOSSARY_KEY_MAPPING, $idCmsGlossaryKeyMapping['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCmsGlossaryKeyMapping['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCmsGlossaryKeyMappingTableMap::COL_ID_CMS_GLOSSARY_KEY_MAPPING, $idCmsGlossaryKeyMapping['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idCmsGlossaryKeyMapping of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCmsGlossaryKeyMappingTableMap::COL_ID_CMS_GLOSSARY_KEY_MAPPING, $idCmsGlossaryKeyMapping, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkGlossaryKey Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkGlossaryKey_Between(array $fkGlossaryKey)
    {
        return $this->filterByFkGlossaryKey($fkGlossaryKey, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkGlossaryKeys Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkGlossaryKey_In(array $fkGlossaryKeys)
    {
        return $this->filterByFkGlossaryKey($fkGlossaryKeys, Criteria::IN);
    }

    /**
     * Filter the query on the fk_glossary_key column
     *
     * Example usage:
     * <code>
     * $query->filterByFkGlossaryKey(1234); // WHERE fk_glossary_key = 1234
     * $query->filterByFkGlossaryKey(array(12, 34), Criteria::IN); // WHERE fk_glossary_key IN (12, 34)
     * $query->filterByFkGlossaryKey(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_glossary_key > 12
     * </code>
     *
     * @see       filterByGlossaryKey()
     *
     * @param     mixed $fkGlossaryKey The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkGlossaryKey($fkGlossaryKey = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkGlossaryKey)) {
            $useMinMax = false;
            if (isset($fkGlossaryKey['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCmsGlossaryKeyMappingTableMap::COL_FK_GLOSSARY_KEY, $fkGlossaryKey['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkGlossaryKey['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCmsGlossaryKeyMappingTableMap::COL_FK_GLOSSARY_KEY, $fkGlossaryKey['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkGlossaryKey of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCmsGlossaryKeyMappingTableMap::COL_FK_GLOSSARY_KEY, $fkGlossaryKey, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkPage Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkPage_Between(array $fkPage)
    {
        return $this->filterByFkPage($fkPage, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkPages Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkPage_In(array $fkPages)
    {
        return $this->filterByFkPage($fkPages, Criteria::IN);
    }

    /**
     * Filter the query on the fk_page column
     *
     * Example usage:
     * <code>
     * $query->filterByFkPage(1234); // WHERE fk_page = 1234
     * $query->filterByFkPage(array(12, 34), Criteria::IN); // WHERE fk_page IN (12, 34)
     * $query->filterByFkPage(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_page > 12
     * </code>
     *
     * @see       filterByCmsPage()
     *
     * @param     mixed $fkPage The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkPage($fkPage = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkPage)) {
            $useMinMax = false;
            if (isset($fkPage['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCmsGlossaryKeyMappingTableMap::COL_FK_PAGE, $fkPage['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkPage['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCmsGlossaryKeyMappingTableMap::COL_FK_PAGE, $fkPage['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkPage of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCmsGlossaryKeyMappingTableMap::COL_FK_PAGE, $fkPage, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $placeholders Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPlaceholder_In(array $placeholders)
    {
        return $this->filterByPlaceholder($placeholders, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $placeholder Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPlaceholder_Like($placeholder)
    {
        return $this->filterByPlaceholder($placeholder, Criteria::LIKE);
    }

    /**
     * Filter the query on the placeholder column
     *
     * Example usage:
     * <code>
     * $query->filterByPlaceholder('fooValue');   // WHERE placeholder = 'fooValue'
     * $query->filterByPlaceholder('%fooValue%', Criteria::LIKE); // WHERE placeholder LIKE '%fooValue%'
     * $query->filterByPlaceholder([1, 'foo'], Criteria::IN); // WHERE placeholder IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $placeholder The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByPlaceholder($placeholder = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $placeholder = str_replace('*', '%', $placeholder);
        }

        if (is_array($placeholder) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$placeholder of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyCmsGlossaryKeyMappingTableMap::COL_PLACEHOLDER, $placeholder, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\Cms\Persistence\SpyCmsPage object
     *
     * @param \Orm\Zed\Cms\Persistence\SpyCmsPage|ObjectCollection $spyCmsPage The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyCmsGlossaryKeyMappingQuery The current query, for fluid interface
     */
    public function filterByCmsPage($spyCmsPage, $comparison = null)
    {
        if ($spyCmsPage instanceof \Orm\Zed\Cms\Persistence\SpyCmsPage) {
            return $this
                ->addUsingAlias(SpyCmsGlossaryKeyMappingTableMap::COL_FK_PAGE, $spyCmsPage->getIdCmsPage(), $comparison);
        } elseif ($spyCmsPage instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyCmsGlossaryKeyMappingTableMap::COL_FK_PAGE, $spyCmsPage->toKeyValue('PrimaryKey', 'IdCmsPage'), $comparison);
        } else {
            throw new PropelException('filterByCmsPage() only accepts arguments of type \Orm\Zed\Cms\Persistence\SpyCmsPage or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CmsPage relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyCmsGlossaryKeyMappingQuery The current query, for fluid interface
     */
    public function joinCmsPage($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CmsPage');

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
            $this->addJoinObject($join, 'CmsPage');
        }

        return $this;
    }

    /**
     * Use the CmsPage relation SpyCmsPage object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Cms\Persistence\SpyCmsPageQuery A secondary query class using the current class as primary query
     */
    public function useCmsPageQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCmsPage($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CmsPage', '\Orm\Zed\Cms\Persistence\SpyCmsPageQuery');
    }

    /**
     * Use the CmsPage relation SpyCmsPage object
     *
     * @param callable(\Orm\Zed\Cms\Persistence\SpyCmsPageQuery):\Orm\Zed\Cms\Persistence\SpyCmsPageQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withCmsPageQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useCmsPageQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the CmsPage relation to the SpyCmsPage table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Cms\Persistence\SpyCmsPageQuery The inner query object of the EXISTS statement
     */
    public function useCmsPageExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('CmsPage', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the CmsPage relation to the SpyCmsPage table for a NOT EXISTS query.
     *
     * @see useCmsPageExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Cms\Persistence\SpyCmsPageQuery The inner query object of the NOT EXISTS statement
     */
    public function useCmsPageNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('CmsPage', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Glossary\Persistence\SpyGlossaryKey object
     *
     * @param \Orm\Zed\Glossary\Persistence\SpyGlossaryKey|ObjectCollection $spyGlossaryKey The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyCmsGlossaryKeyMappingQuery The current query, for fluid interface
     */
    public function filterByGlossaryKey($spyGlossaryKey, $comparison = null)
    {
        if ($spyGlossaryKey instanceof \Orm\Zed\Glossary\Persistence\SpyGlossaryKey) {
            return $this
                ->addUsingAlias(SpyCmsGlossaryKeyMappingTableMap::COL_FK_GLOSSARY_KEY, $spyGlossaryKey->getIdGlossaryKey(), $comparison);
        } elseif ($spyGlossaryKey instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyCmsGlossaryKeyMappingTableMap::COL_FK_GLOSSARY_KEY, $spyGlossaryKey->toKeyValue('PrimaryKey', 'IdGlossaryKey'), $comparison);
        } else {
            throw new PropelException('filterByGlossaryKey() only accepts arguments of type \Orm\Zed\Glossary\Persistence\SpyGlossaryKey or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GlossaryKey relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyCmsGlossaryKeyMappingQuery The current query, for fluid interface
     */
    public function joinGlossaryKey($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GlossaryKey');

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
            $this->addJoinObject($join, 'GlossaryKey');
        }

        return $this;
    }

    /**
     * Use the GlossaryKey relation SpyGlossaryKey object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Glossary\Persistence\SpyGlossaryKeyQuery A secondary query class using the current class as primary query
     */
    public function useGlossaryKeyQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinGlossaryKey($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GlossaryKey', '\Orm\Zed\Glossary\Persistence\SpyGlossaryKeyQuery');
    }

    /**
     * Use the GlossaryKey relation SpyGlossaryKey object
     *
     * @param callable(\Orm\Zed\Glossary\Persistence\SpyGlossaryKeyQuery):\Orm\Zed\Glossary\Persistence\SpyGlossaryKeyQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withGlossaryKeyQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useGlossaryKeyQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the GlossaryKey relation to the SpyGlossaryKey table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Glossary\Persistence\SpyGlossaryKeyQuery The inner query object of the EXISTS statement
     */
    public function useGlossaryKeyExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('GlossaryKey', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the GlossaryKey relation to the SpyGlossaryKey table for a NOT EXISTS query.
     *
     * @see useGlossaryKeyExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Glossary\Persistence\SpyGlossaryKeyQuery The inner query object of the NOT EXISTS statement
     */
    public function useGlossaryKeyNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('GlossaryKey', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Exclude object from result
     *
     * @param   ChildSpyCmsGlossaryKeyMapping $spyCmsGlossaryKeyMapping Object to remove from the list of results
     *
     * @return $this|ChildSpyCmsGlossaryKeyMappingQuery The current query, for fluid interface
     */
    public function prune($spyCmsGlossaryKeyMapping = null)
    {
        if ($spyCmsGlossaryKeyMapping) {
            $this->addUsingAlias(SpyCmsGlossaryKeyMappingTableMap::COL_ID_CMS_GLOSSARY_KEY_MAPPING, $spyCmsGlossaryKeyMapping->getIdCmsGlossaryKeyMapping(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_cms_glossary_key_mapping table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCmsGlossaryKeyMappingTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyCmsGlossaryKeyMappingTableMap::clearInstancePool();
            SpyCmsGlossaryKeyMappingTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCmsGlossaryKeyMappingTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyCmsGlossaryKeyMappingTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyCmsGlossaryKeyMappingTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyCmsGlossaryKeyMappingTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SpyCmsGlossaryKeyMappingQuery
