<?php

namespace Orm\Zed\Content\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\Content\Persistence\SpyContentLocalized as ChildSpyContentLocalized;
use Orm\Zed\Content\Persistence\SpyContentLocalizedQuery as ChildSpyContentLocalizedQuery;
use Orm\Zed\Content\Persistence\Map\SpyContentLocalizedTableMap;
use Orm\Zed\Locale\Persistence\SpyLocale;
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
 * Base class that represents a query for the 'spy_content_localized' table.
 *
 *
 *
 * @method     ChildSpyContentLocalizedQuery orderByIdContentLocalized($order = Criteria::ASC) Order by the id_content_localized column
 * @method     ChildSpyContentLocalizedQuery orderByFkContent($order = Criteria::ASC) Order by the fk_content column
 * @method     ChildSpyContentLocalizedQuery orderByFkLocale($order = Criteria::ASC) Order by the fk_locale column
 * @method     ChildSpyContentLocalizedQuery orderByParameters($order = Criteria::ASC) Order by the parameters column
 * @method     ChildSpyContentLocalizedQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildSpyContentLocalizedQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ChildSpyContentLocalizedQuery groupByIdContentLocalized() Group by the id_content_localized column
 * @method     ChildSpyContentLocalizedQuery groupByFkContent() Group by the fk_content column
 * @method     ChildSpyContentLocalizedQuery groupByFkLocale() Group by the fk_locale column
 * @method     ChildSpyContentLocalizedQuery groupByParameters() Group by the parameters column
 * @method     ChildSpyContentLocalizedQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildSpyContentLocalizedQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ChildSpyContentLocalizedQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyContentLocalizedQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyContentLocalizedQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyContentLocalizedQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyContentLocalizedQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyContentLocalizedQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyContentLocalizedQuery leftJoinSpyContent($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyContent relation
 * @method     ChildSpyContentLocalizedQuery rightJoinSpyContent($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyContent relation
 * @method     ChildSpyContentLocalizedQuery innerJoinSpyContent($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyContent relation
 *
 * @method     ChildSpyContentLocalizedQuery joinWithSpyContent($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyContent relation
 *
 * @method     ChildSpyContentLocalizedQuery leftJoinWithSpyContent() Adds a LEFT JOIN clause and with to the query using the SpyContent relation
 * @method     ChildSpyContentLocalizedQuery rightJoinWithSpyContent() Adds a RIGHT JOIN clause and with to the query using the SpyContent relation
 * @method     ChildSpyContentLocalizedQuery innerJoinWithSpyContent() Adds a INNER JOIN clause and with to the query using the SpyContent relation
 *
 * @method     ChildSpyContentLocalizedQuery leftJoinSpyLocale($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyLocale relation
 * @method     ChildSpyContentLocalizedQuery rightJoinSpyLocale($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyLocale relation
 * @method     ChildSpyContentLocalizedQuery innerJoinSpyLocale($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyLocale relation
 *
 * @method     ChildSpyContentLocalizedQuery joinWithSpyLocale($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyLocale relation
 *
 * @method     ChildSpyContentLocalizedQuery leftJoinWithSpyLocale() Adds a LEFT JOIN clause and with to the query using the SpyLocale relation
 * @method     ChildSpyContentLocalizedQuery rightJoinWithSpyLocale() Adds a RIGHT JOIN clause and with to the query using the SpyLocale relation
 * @method     ChildSpyContentLocalizedQuery innerJoinWithSpyLocale() Adds a INNER JOIN clause and with to the query using the SpyLocale relation
 *
 * @method     \Orm\Zed\Content\Persistence\SpyContentQuery|\Orm\Zed\Locale\Persistence\SpyLocaleQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyContentLocalized|null findOne(ConnectionInterface $con = null) Return the first ChildSpyContentLocalized matching the query
 * @method     ChildSpyContentLocalized findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyContentLocalized matching the query, or a new ChildSpyContentLocalized object populated from the query conditions when no match is found
 *
 * @method     ChildSpyContentLocalized|null findOneByIdContentLocalized(int $id_content_localized) Return the first ChildSpyContentLocalized filtered by the id_content_localized column
 * @method     ChildSpyContentLocalized|null findOneByFkContent(int $fk_content) Return the first ChildSpyContentLocalized filtered by the fk_content column
 * @method     ChildSpyContentLocalized|null findOneByFkLocale(int $fk_locale) Return the first ChildSpyContentLocalized filtered by the fk_locale column
 * @method     ChildSpyContentLocalized|null findOneByParameters(string $parameters) Return the first ChildSpyContentLocalized filtered by the parameters column
 * @method     ChildSpyContentLocalized|null findOneByCreatedAt(string $created_at) Return the first ChildSpyContentLocalized filtered by the created_at column
 * @method     ChildSpyContentLocalized|null findOneByUpdatedAt(string $updated_at) Return the first ChildSpyContentLocalized filtered by the updated_at column *

 * @method     ChildSpyContentLocalized requirePk($key, ConnectionInterface $con = null) Return the ChildSpyContentLocalized by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyContentLocalized requireOne(ConnectionInterface $con = null) Return the first ChildSpyContentLocalized matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyContentLocalized requireOneByIdContentLocalized(int $id_content_localized) Return the first ChildSpyContentLocalized filtered by the id_content_localized column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyContentLocalized requireOneByFkContent(int $fk_content) Return the first ChildSpyContentLocalized filtered by the fk_content column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyContentLocalized requireOneByFkLocale(int $fk_locale) Return the first ChildSpyContentLocalized filtered by the fk_locale column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyContentLocalized requireOneByParameters(string $parameters) Return the first ChildSpyContentLocalized filtered by the parameters column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyContentLocalized requireOneByCreatedAt(string $created_at) Return the first ChildSpyContentLocalized filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyContentLocalized requireOneByUpdatedAt(string $updated_at) Return the first ChildSpyContentLocalized filtered by the updated_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyContentLocalized[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyContentLocalized objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyContentLocalized> find(ConnectionInterface $con = null) Return ChildSpyContentLocalized objects based on current ModelCriteria
 * @method     ChildSpyContentLocalized[]|ObjectCollection findByIdContentLocalized(int $id_content_localized) Return ChildSpyContentLocalized objects filtered by the id_content_localized column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyContentLocalized> findByIdContentLocalized(int $id_content_localized) Return ChildSpyContentLocalized objects filtered by the id_content_localized column
 * @method     ChildSpyContentLocalized[]|ObjectCollection findByFkContent(int $fk_content) Return ChildSpyContentLocalized objects filtered by the fk_content column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyContentLocalized> findByFkContent(int $fk_content) Return ChildSpyContentLocalized objects filtered by the fk_content column
 * @method     ChildSpyContentLocalized[]|ObjectCollection findByFkLocale(int $fk_locale) Return ChildSpyContentLocalized objects filtered by the fk_locale column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyContentLocalized> findByFkLocale(int $fk_locale) Return ChildSpyContentLocalized objects filtered by the fk_locale column
 * @method     ChildSpyContentLocalized[]|ObjectCollection findByParameters(string $parameters) Return ChildSpyContentLocalized objects filtered by the parameters column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyContentLocalized> findByParameters(string $parameters) Return ChildSpyContentLocalized objects filtered by the parameters column
 * @method     ChildSpyContentLocalized[]|ObjectCollection findByCreatedAt(string $created_at) Return ChildSpyContentLocalized objects filtered by the created_at column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyContentLocalized> findByCreatedAt(string $created_at) Return ChildSpyContentLocalized objects filtered by the created_at column
 * @method     ChildSpyContentLocalized[]|ObjectCollection findByUpdatedAt(string $updated_at) Return ChildSpyContentLocalized objects filtered by the updated_at column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyContentLocalized> findByUpdatedAt(string $updated_at) Return ChildSpyContentLocalized objects filtered by the updated_at column
 * @method     ChildSpyContentLocalized[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyContentLocalized> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyContentLocalizedQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\Content\Persistence\Base\SpyContentLocalizedQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\Content\\Persistence\\SpyContentLocalized', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyContentLocalizedQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyContentLocalizedQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyContentLocalizedQuery) {
            return $criteria;
        }
        $query = new ChildSpyContentLocalizedQuery();
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
     * @return ChildSpyContentLocalized|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyContentLocalizedTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyContentLocalized A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_content_localized, fk_content, fk_locale, parameters, created_at, updated_at FROM spy_content_localized WHERE id_content_localized = :p0';
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
            /** @var ChildSpyContentLocalized $obj */
            $obj = new ChildSpyContentLocalized();
            $obj->hydrate($row);
            SpyContentLocalizedTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyContentLocalized|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyContentLocalizedQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyContentLocalizedTableMap::COL_ID_CONTENT_LOCALIZED, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyContentLocalizedQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyContentLocalizedTableMap::COL_ID_CONTENT_LOCALIZED, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idContentLocalized Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdContentLocalized_Between(array $idContentLocalized)
    {
        return $this->filterByIdContentLocalized($idContentLocalized, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idContentLocalizeds Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdContentLocalized_In(array $idContentLocalizeds)
    {
        return $this->filterByIdContentLocalized($idContentLocalizeds, Criteria::IN);
    }

    /**
     * Filter the query on the id_content_localized column
     *
     * Example usage:
     * <code>
     * $query->filterByIdContentLocalized(1234); // WHERE id_content_localized = 1234
     * $query->filterByIdContentLocalized(array(12, 34), Criteria::IN); // WHERE id_content_localized IN (12, 34)
     * $query->filterByIdContentLocalized(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_content_localized > 12
     * </code>
     *
     * @param     mixed $idContentLocalized The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdContentLocalized($idContentLocalized = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idContentLocalized)) {
            $useMinMax = false;
            if (isset($idContentLocalized['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyContentLocalizedTableMap::COL_ID_CONTENT_LOCALIZED, $idContentLocalized['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idContentLocalized['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyContentLocalizedTableMap::COL_ID_CONTENT_LOCALIZED, $idContentLocalized['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idContentLocalized of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyContentLocalizedTableMap::COL_ID_CONTENT_LOCALIZED, $idContentLocalized, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkContent Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkContent_Between(array $fkContent)
    {
        return $this->filterByFkContent($fkContent, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkContents Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkContent_In(array $fkContents)
    {
        return $this->filterByFkContent($fkContents, Criteria::IN);
    }

    /**
     * Filter the query on the fk_content column
     *
     * Example usage:
     * <code>
     * $query->filterByFkContent(1234); // WHERE fk_content = 1234
     * $query->filterByFkContent(array(12, 34), Criteria::IN); // WHERE fk_content IN (12, 34)
     * $query->filterByFkContent(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_content > 12
     * </code>
     *
     * @see       filterBySpyContent()
     *
     * @param     mixed $fkContent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkContent($fkContent = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkContent)) {
            $useMinMax = false;
            if (isset($fkContent['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyContentLocalizedTableMap::COL_FK_CONTENT, $fkContent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkContent['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyContentLocalizedTableMap::COL_FK_CONTENT, $fkContent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkContent of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyContentLocalizedTableMap::COL_FK_CONTENT, $fkContent, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkLocale Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkLocale_Between(array $fkLocale)
    {
        return $this->filterByFkLocale($fkLocale, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkLocales Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkLocale_In(array $fkLocales)
    {
        return $this->filterByFkLocale($fkLocales, Criteria::IN);
    }

    /**
     * Filter the query on the fk_locale column
     *
     * Example usage:
     * <code>
     * $query->filterByFkLocale(1234); // WHERE fk_locale = 1234
     * $query->filterByFkLocale(array(12, 34), Criteria::IN); // WHERE fk_locale IN (12, 34)
     * $query->filterByFkLocale(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_locale > 12
     * </code>
     *
     * @see       filterBySpyLocale()
     *
     * @param     mixed $fkLocale The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkLocale($fkLocale = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkLocale)) {
            $useMinMax = false;
            if (isset($fkLocale['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyContentLocalizedTableMap::COL_FK_LOCALE, $fkLocale['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkLocale['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyContentLocalizedTableMap::COL_FK_LOCALE, $fkLocale['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkLocale of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyContentLocalizedTableMap::COL_FK_LOCALE, $fkLocale, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $parameterss Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByParameters_In(array $parameterss)
    {
        return $this->filterByParameters($parameterss, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $parameters Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByParameters_Like($parameters)
    {
        return $this->filterByParameters($parameters, Criteria::LIKE);
    }

    /**
     * Filter the query on the parameters column
     *
     * Example usage:
     * <code>
     * $query->filterByParameters('fooValue');   // WHERE parameters = 'fooValue'
     * $query->filterByParameters('%fooValue%', Criteria::LIKE); // WHERE parameters LIKE '%fooValue%'
     * $query->filterByParameters([1, 'foo'], Criteria::IN); // WHERE parameters IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $parameters The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByParameters($parameters = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $parameters = str_replace('*', '%', $parameters);
        }

        if (is_array($parameters) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$parameters of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyContentLocalizedTableMap::COL_PARAMETERS, $parameters, $comparison);

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
                $this->addUsingAlias(SpyContentLocalizedTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyContentLocalizedTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$createdAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyContentLocalizedTableMap::COL_CREATED_AT, $createdAt, $comparison);

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
                $this->addUsingAlias(SpyContentLocalizedTableMap::COL_UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyContentLocalizedTableMap::COL_UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$updatedAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyContentLocalizedTableMap::COL_UPDATED_AT, $updatedAt, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\Content\Persistence\SpyContent object
     *
     * @param \Orm\Zed\Content\Persistence\SpyContent|ObjectCollection $spyContent The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyContentLocalizedQuery The current query, for fluid interface
     */
    public function filterBySpyContent($spyContent, $comparison = null)
    {
        if ($spyContent instanceof \Orm\Zed\Content\Persistence\SpyContent) {
            return $this
                ->addUsingAlias(SpyContentLocalizedTableMap::COL_FK_CONTENT, $spyContent->getIdContent(), $comparison);
        } elseif ($spyContent instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyContentLocalizedTableMap::COL_FK_CONTENT, $spyContent->toKeyValue('PrimaryKey', 'IdContent'), $comparison);
        } else {
            throw new PropelException('filterBySpyContent() only accepts arguments of type \Orm\Zed\Content\Persistence\SpyContent or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyContent relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyContentLocalizedQuery The current query, for fluid interface
     */
    public function joinSpyContent($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyContent');

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
            $this->addJoinObject($join, 'SpyContent');
        }

        return $this;
    }

    /**
     * Use the SpyContent relation SpyContent object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Content\Persistence\SpyContentQuery A secondary query class using the current class as primary query
     */
    public function useSpyContentQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyContent($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyContent', '\Orm\Zed\Content\Persistence\SpyContentQuery');
    }

    /**
     * Use the SpyContent relation SpyContent object
     *
     * @param callable(\Orm\Zed\Content\Persistence\SpyContentQuery):\Orm\Zed\Content\Persistence\SpyContentQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyContentQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyContentQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyContent table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Content\Persistence\SpyContentQuery The inner query object of the EXISTS statement
     */
    public function useSpyContentExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyContent', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyContent table for a NOT EXISTS query.
     *
     * @see useSpyContentExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Content\Persistence\SpyContentQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyContentNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyContent', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Locale\Persistence\SpyLocale object
     *
     * @param \Orm\Zed\Locale\Persistence\SpyLocale|ObjectCollection $spyLocale The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyContentLocalizedQuery The current query, for fluid interface
     */
    public function filterBySpyLocale($spyLocale, $comparison = null)
    {
        if ($spyLocale instanceof \Orm\Zed\Locale\Persistence\SpyLocale) {
            return $this
                ->addUsingAlias(SpyContentLocalizedTableMap::COL_FK_LOCALE, $spyLocale->getIdLocale(), $comparison);
        } elseif ($spyLocale instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyContentLocalizedTableMap::COL_FK_LOCALE, $spyLocale->toKeyValue('PrimaryKey', 'IdLocale'), $comparison);
        } else {
            throw new PropelException('filterBySpyLocale() only accepts arguments of type \Orm\Zed\Locale\Persistence\SpyLocale or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyLocale relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyContentLocalizedQuery The current query, for fluid interface
     */
    public function joinSpyLocale($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyLocale');

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
            $this->addJoinObject($join, 'SpyLocale');
        }

        return $this;
    }

    /**
     * Use the SpyLocale relation SpyLocale object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Locale\Persistence\SpyLocaleQuery A secondary query class using the current class as primary query
     */
    public function useSpyLocaleQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinSpyLocale($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyLocale', '\Orm\Zed\Locale\Persistence\SpyLocaleQuery');
    }

    /**
     * Use the SpyLocale relation SpyLocale object
     *
     * @param callable(\Orm\Zed\Locale\Persistence\SpyLocaleQuery):\Orm\Zed\Locale\Persistence\SpyLocaleQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyLocaleQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useSpyLocaleQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyLocale table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Locale\Persistence\SpyLocaleQuery The inner query object of the EXISTS statement
     */
    public function useSpyLocaleExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyLocale', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyLocale table for a NOT EXISTS query.
     *
     * @see useSpyLocaleExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Locale\Persistence\SpyLocaleQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyLocaleNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyLocale', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Exclude object from result
     *
     * @param   ChildSpyContentLocalized $spyContentLocalized Object to remove from the list of results
     *
     * @return $this|ChildSpyContentLocalizedQuery The current query, for fluid interface
     */
    public function prune($spyContentLocalized = null)
    {
        if ($spyContentLocalized) {
            $this->addUsingAlias(SpyContentLocalizedTableMap::COL_ID_CONTENT_LOCALIZED, $spyContentLocalized->getIdContentLocalized(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_content_localized table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyContentLocalizedTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyContentLocalizedTableMap::clearInstancePool();
            SpyContentLocalizedTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyContentLocalizedTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyContentLocalizedTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyContentLocalizedTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyContentLocalizedTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    // timestampable behavior

    /**
     * Filter by the latest updated
     *
     * @param      int $nbDays Maximum age of the latest update in days
     *
     * @return     $this|ChildSpyContentLocalizedQuery The current query, for fluid interface
     */
    public function recentlyUpdated($nbDays = 7)
    {
        return $this->addUsingAlias(SpyContentLocalizedTableMap::COL_UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by update date desc
     *
     * @return     $this|ChildSpyContentLocalizedQuery The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        return $this->addDescendingOrderByColumn(SpyContentLocalizedTableMap::COL_UPDATED_AT);
    }

    /**
     * Order by update date asc
     *
     * @return     $this|ChildSpyContentLocalizedQuery The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        return $this->addAscendingOrderByColumn(SpyContentLocalizedTableMap::COL_UPDATED_AT);
    }

    /**
     * Order by create date desc
     *
     * @return     $this|ChildSpyContentLocalizedQuery The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        return $this->addDescendingOrderByColumn(SpyContentLocalizedTableMap::COL_CREATED_AT);
    }

    /**
     * Filter by the latest created
     *
     * @param      int $nbDays Maximum age of in days
     *
     * @return     $this|ChildSpyContentLocalizedQuery The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        return $this->addUsingAlias(SpyContentLocalizedTableMap::COL_CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by create date asc
     *
     * @return     $this|ChildSpyContentLocalizedQuery The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        return $this->addAscendingOrderByColumn(SpyContentLocalizedTableMap::COL_CREATED_AT);
    }

} // SpyContentLocalizedQuery
