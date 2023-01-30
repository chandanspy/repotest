<?php

namespace Orm\Zed\ProductLabel\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\Locale\Persistence\SpyLocale;
use Orm\Zed\ProductLabel\Persistence\SpyProductLabelLocalizedAttributes as ChildSpyProductLabelLocalizedAttributes;
use Orm\Zed\ProductLabel\Persistence\SpyProductLabelLocalizedAttributesQuery as ChildSpyProductLabelLocalizedAttributesQuery;
use Orm\Zed\ProductLabel\Persistence\Map\SpyProductLabelLocalizedAttributesTableMap;
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
 * Base class that represents a query for the 'spy_product_label_localized_attributes' table.
 *
 *
 *
 * @method     ChildSpyProductLabelLocalizedAttributesQuery orderByIdProductLabelLocalizedAttributes($order = Criteria::ASC) Order by the id_product_label_localized_attributes column
 * @method     ChildSpyProductLabelLocalizedAttributesQuery orderByFkLocale($order = Criteria::ASC) Order by the fk_locale column
 * @method     ChildSpyProductLabelLocalizedAttributesQuery orderByFkProductLabel($order = Criteria::ASC) Order by the fk_product_label column
 * @method     ChildSpyProductLabelLocalizedAttributesQuery orderByName($order = Criteria::ASC) Order by the name column
 *
 * @method     ChildSpyProductLabelLocalizedAttributesQuery groupByIdProductLabelLocalizedAttributes() Group by the id_product_label_localized_attributes column
 * @method     ChildSpyProductLabelLocalizedAttributesQuery groupByFkLocale() Group by the fk_locale column
 * @method     ChildSpyProductLabelLocalizedAttributesQuery groupByFkProductLabel() Group by the fk_product_label column
 * @method     ChildSpyProductLabelLocalizedAttributesQuery groupByName() Group by the name column
 *
 * @method     ChildSpyProductLabelLocalizedAttributesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyProductLabelLocalizedAttributesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyProductLabelLocalizedAttributesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyProductLabelLocalizedAttributesQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyProductLabelLocalizedAttributesQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyProductLabelLocalizedAttributesQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyProductLabelLocalizedAttributesQuery leftJoinSpyProductLabel($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyProductLabel relation
 * @method     ChildSpyProductLabelLocalizedAttributesQuery rightJoinSpyProductLabel($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyProductLabel relation
 * @method     ChildSpyProductLabelLocalizedAttributesQuery innerJoinSpyProductLabel($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyProductLabel relation
 *
 * @method     ChildSpyProductLabelLocalizedAttributesQuery joinWithSpyProductLabel($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyProductLabel relation
 *
 * @method     ChildSpyProductLabelLocalizedAttributesQuery leftJoinWithSpyProductLabel() Adds a LEFT JOIN clause and with to the query using the SpyProductLabel relation
 * @method     ChildSpyProductLabelLocalizedAttributesQuery rightJoinWithSpyProductLabel() Adds a RIGHT JOIN clause and with to the query using the SpyProductLabel relation
 * @method     ChildSpyProductLabelLocalizedAttributesQuery innerJoinWithSpyProductLabel() Adds a INNER JOIN clause and with to the query using the SpyProductLabel relation
 *
 * @method     ChildSpyProductLabelLocalizedAttributesQuery leftJoinSpyLocale($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyLocale relation
 * @method     ChildSpyProductLabelLocalizedAttributesQuery rightJoinSpyLocale($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyLocale relation
 * @method     ChildSpyProductLabelLocalizedAttributesQuery innerJoinSpyLocale($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyLocale relation
 *
 * @method     ChildSpyProductLabelLocalizedAttributesQuery joinWithSpyLocale($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyLocale relation
 *
 * @method     ChildSpyProductLabelLocalizedAttributesQuery leftJoinWithSpyLocale() Adds a LEFT JOIN clause and with to the query using the SpyLocale relation
 * @method     ChildSpyProductLabelLocalizedAttributesQuery rightJoinWithSpyLocale() Adds a RIGHT JOIN clause and with to the query using the SpyLocale relation
 * @method     ChildSpyProductLabelLocalizedAttributesQuery innerJoinWithSpyLocale() Adds a INNER JOIN clause and with to the query using the SpyLocale relation
 *
 * @method     \Orm\Zed\ProductLabel\Persistence\SpyProductLabelQuery|\Orm\Zed\Locale\Persistence\SpyLocaleQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyProductLabelLocalizedAttributes|null findOne(ConnectionInterface $con = null) Return the first ChildSpyProductLabelLocalizedAttributes matching the query
 * @method     ChildSpyProductLabelLocalizedAttributes findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyProductLabelLocalizedAttributes matching the query, or a new ChildSpyProductLabelLocalizedAttributes object populated from the query conditions when no match is found
 *
 * @method     ChildSpyProductLabelLocalizedAttributes|null findOneByIdProductLabelLocalizedAttributes(int $id_product_label_localized_attributes) Return the first ChildSpyProductLabelLocalizedAttributes filtered by the id_product_label_localized_attributes column
 * @method     ChildSpyProductLabelLocalizedAttributes|null findOneByFkLocale(int $fk_locale) Return the first ChildSpyProductLabelLocalizedAttributes filtered by the fk_locale column
 * @method     ChildSpyProductLabelLocalizedAttributes|null findOneByFkProductLabel(int $fk_product_label) Return the first ChildSpyProductLabelLocalizedAttributes filtered by the fk_product_label column
 * @method     ChildSpyProductLabelLocalizedAttributes|null findOneByName(string $name) Return the first ChildSpyProductLabelLocalizedAttributes filtered by the name column *

 * @method     ChildSpyProductLabelLocalizedAttributes requirePk($key, ConnectionInterface $con = null) Return the ChildSpyProductLabelLocalizedAttributes by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductLabelLocalizedAttributes requireOne(ConnectionInterface $con = null) Return the first ChildSpyProductLabelLocalizedAttributes matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyProductLabelLocalizedAttributes requireOneByIdProductLabelLocalizedAttributes(int $id_product_label_localized_attributes) Return the first ChildSpyProductLabelLocalizedAttributes filtered by the id_product_label_localized_attributes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductLabelLocalizedAttributes requireOneByFkLocale(int $fk_locale) Return the first ChildSpyProductLabelLocalizedAttributes filtered by the fk_locale column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductLabelLocalizedAttributes requireOneByFkProductLabel(int $fk_product_label) Return the first ChildSpyProductLabelLocalizedAttributes filtered by the fk_product_label column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductLabelLocalizedAttributes requireOneByName(string $name) Return the first ChildSpyProductLabelLocalizedAttributes filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyProductLabelLocalizedAttributes[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyProductLabelLocalizedAttributes objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductLabelLocalizedAttributes> find(ConnectionInterface $con = null) Return ChildSpyProductLabelLocalizedAttributes objects based on current ModelCriteria
 * @method     ChildSpyProductLabelLocalizedAttributes[]|ObjectCollection findByIdProductLabelLocalizedAttributes(int $id_product_label_localized_attributes) Return ChildSpyProductLabelLocalizedAttributes objects filtered by the id_product_label_localized_attributes column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductLabelLocalizedAttributes> findByIdProductLabelLocalizedAttributes(int $id_product_label_localized_attributes) Return ChildSpyProductLabelLocalizedAttributes objects filtered by the id_product_label_localized_attributes column
 * @method     ChildSpyProductLabelLocalizedAttributes[]|ObjectCollection findByFkLocale(int $fk_locale) Return ChildSpyProductLabelLocalizedAttributes objects filtered by the fk_locale column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductLabelLocalizedAttributes> findByFkLocale(int $fk_locale) Return ChildSpyProductLabelLocalizedAttributes objects filtered by the fk_locale column
 * @method     ChildSpyProductLabelLocalizedAttributes[]|ObjectCollection findByFkProductLabel(int $fk_product_label) Return ChildSpyProductLabelLocalizedAttributes objects filtered by the fk_product_label column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductLabelLocalizedAttributes> findByFkProductLabel(int $fk_product_label) Return ChildSpyProductLabelLocalizedAttributes objects filtered by the fk_product_label column
 * @method     ChildSpyProductLabelLocalizedAttributes[]|ObjectCollection findByName(string $name) Return ChildSpyProductLabelLocalizedAttributes objects filtered by the name column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyProductLabelLocalizedAttributes> findByName(string $name) Return ChildSpyProductLabelLocalizedAttributes objects filtered by the name column
 * @method     ChildSpyProductLabelLocalizedAttributes[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyProductLabelLocalizedAttributes> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyProductLabelLocalizedAttributesQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\ProductLabel\Persistence\Base\SpyProductLabelLocalizedAttributesQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\ProductLabel\\Persistence\\SpyProductLabelLocalizedAttributes', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyProductLabelLocalizedAttributesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyProductLabelLocalizedAttributesQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyProductLabelLocalizedAttributesQuery) {
            return $criteria;
        }
        $query = new ChildSpyProductLabelLocalizedAttributesQuery();
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
     * @return ChildSpyProductLabelLocalizedAttributes|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyProductLabelLocalizedAttributesTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyProductLabelLocalizedAttributes A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT `id_product_label_localized_attributes`, `fk_locale`, `fk_product_label`, `name` FROM `spy_product_label_localized_attributes` WHERE `id_product_label_localized_attributes` = :p0';
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
            /** @var ChildSpyProductLabelLocalizedAttributes $obj */
            $obj = new ChildSpyProductLabelLocalizedAttributes();
            $obj->hydrate($row);
            SpyProductLabelLocalizedAttributesTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyProductLabelLocalizedAttributes|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyProductLabelLocalizedAttributesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyProductLabelLocalizedAttributesTableMap::COL_ID_PRODUCT_LABEL_LOCALIZED_ATTRIBUTES, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyProductLabelLocalizedAttributesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyProductLabelLocalizedAttributesTableMap::COL_ID_PRODUCT_LABEL_LOCALIZED_ATTRIBUTES, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idProductLabelLocalizedAttributes Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdProductLabelLocalizedAttributes_Between(array $idProductLabelLocalizedAttributes)
    {
        return $this->filterByIdProductLabelLocalizedAttributes($idProductLabelLocalizedAttributes, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idProductLabelLocalizedAttributess Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdProductLabelLocalizedAttributes_In(array $idProductLabelLocalizedAttributess)
    {
        return $this->filterByIdProductLabelLocalizedAttributes($idProductLabelLocalizedAttributess, Criteria::IN);
    }

    /**
     * Filter the query on the id_product_label_localized_attributes column
     *
     * Example usage:
     * <code>
     * $query->filterByIdProductLabelLocalizedAttributes(1234); // WHERE id_product_label_localized_attributes = 1234
     * $query->filterByIdProductLabelLocalizedAttributes(array(12, 34), Criteria::IN); // WHERE id_product_label_localized_attributes IN (12, 34)
     * $query->filterByIdProductLabelLocalizedAttributes(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_product_label_localized_attributes > 12
     * </code>
     *
     * @param     mixed $idProductLabelLocalizedAttributes The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdProductLabelLocalizedAttributes($idProductLabelLocalizedAttributes = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idProductLabelLocalizedAttributes)) {
            $useMinMax = false;
            if (isset($idProductLabelLocalizedAttributes['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductLabelLocalizedAttributesTableMap::COL_ID_PRODUCT_LABEL_LOCALIZED_ATTRIBUTES, $idProductLabelLocalizedAttributes['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idProductLabelLocalizedAttributes['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductLabelLocalizedAttributesTableMap::COL_ID_PRODUCT_LABEL_LOCALIZED_ATTRIBUTES, $idProductLabelLocalizedAttributes['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idProductLabelLocalizedAttributes of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyProductLabelLocalizedAttributesTableMap::COL_ID_PRODUCT_LABEL_LOCALIZED_ATTRIBUTES, $idProductLabelLocalizedAttributes, $comparison);

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
                $this->addUsingAlias(SpyProductLabelLocalizedAttributesTableMap::COL_FK_LOCALE, $fkLocale['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkLocale['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductLabelLocalizedAttributesTableMap::COL_FK_LOCALE, $fkLocale['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkLocale of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyProductLabelLocalizedAttributesTableMap::COL_FK_LOCALE, $fkLocale, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkProductLabel Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkProductLabel_Between(array $fkProductLabel)
    {
        return $this->filterByFkProductLabel($fkProductLabel, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkProductLabels Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkProductLabel_In(array $fkProductLabels)
    {
        return $this->filterByFkProductLabel($fkProductLabels, Criteria::IN);
    }

    /**
     * Filter the query on the fk_product_label column
     *
     * Example usage:
     * <code>
     * $query->filterByFkProductLabel(1234); // WHERE fk_product_label = 1234
     * $query->filterByFkProductLabel(array(12, 34), Criteria::IN); // WHERE fk_product_label IN (12, 34)
     * $query->filterByFkProductLabel(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_product_label > 12
     * </code>
     *
     * @see       filterBySpyProductLabel()
     *
     * @param     mixed $fkProductLabel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkProductLabel($fkProductLabel = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkProductLabel)) {
            $useMinMax = false;
            if (isset($fkProductLabel['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductLabelLocalizedAttributesTableMap::COL_FK_PRODUCT_LABEL, $fkProductLabel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkProductLabel['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductLabelLocalizedAttributesTableMap::COL_FK_PRODUCT_LABEL, $fkProductLabel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkProductLabel of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyProductLabelLocalizedAttributesTableMap::COL_FK_PRODUCT_LABEL, $fkProductLabel, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $names Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByName_In(array $names)
    {
        return $this->filterByName($names, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $name Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByName_Like($name)
    {
        return $this->filterByName($name, Criteria::LIKE);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%', Criteria::LIKE); // WHERE name LIKE '%fooValue%'
     * $query->filterByName([1, 'foo'], Criteria::IN); // WHERE name IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByName($name = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $name = str_replace('*', '%', $name);
        }

        if (is_array($name) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$name of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyProductLabelLocalizedAttributesTableMap::COL_NAME, $name, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\ProductLabel\Persistence\SpyProductLabel object
     *
     * @param \Orm\Zed\ProductLabel\Persistence\SpyProductLabel|ObjectCollection $spyProductLabel The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyProductLabelLocalizedAttributesQuery The current query, for fluid interface
     */
    public function filterBySpyProductLabel($spyProductLabel, $comparison = null)
    {
        if ($spyProductLabel instanceof \Orm\Zed\ProductLabel\Persistence\SpyProductLabel) {
            return $this
                ->addUsingAlias(SpyProductLabelLocalizedAttributesTableMap::COL_FK_PRODUCT_LABEL, $spyProductLabel->getIdProductLabel(), $comparison);
        } elseif ($spyProductLabel instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyProductLabelLocalizedAttributesTableMap::COL_FK_PRODUCT_LABEL, $spyProductLabel->toKeyValue('PrimaryKey', 'IdProductLabel'), $comparison);
        } else {
            throw new PropelException('filterBySpyProductLabel() only accepts arguments of type \Orm\Zed\ProductLabel\Persistence\SpyProductLabel or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyProductLabel relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyProductLabelLocalizedAttributesQuery The current query, for fluid interface
     */
    public function joinSpyProductLabel($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyProductLabel');

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
            $this->addJoinObject($join, 'SpyProductLabel');
        }

        return $this;
    }

    /**
     * Use the SpyProductLabel relation SpyProductLabel object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\ProductLabel\Persistence\SpyProductLabelQuery A secondary query class using the current class as primary query
     */
    public function useSpyProductLabelQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyProductLabel($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyProductLabel', '\Orm\Zed\ProductLabel\Persistence\SpyProductLabelQuery');
    }

    /**
     * Use the SpyProductLabel relation SpyProductLabel object
     *
     * @param callable(\Orm\Zed\ProductLabel\Persistence\SpyProductLabelQuery):\Orm\Zed\ProductLabel\Persistence\SpyProductLabelQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyProductLabelQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyProductLabelQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyProductLabel table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\ProductLabel\Persistence\SpyProductLabelQuery The inner query object of the EXISTS statement
     */
    public function useSpyProductLabelExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyProductLabel', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyProductLabel table for a NOT EXISTS query.
     *
     * @see useSpyProductLabelExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\ProductLabel\Persistence\SpyProductLabelQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyProductLabelNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyProductLabel', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Locale\Persistence\SpyLocale object
     *
     * @param \Orm\Zed\Locale\Persistence\SpyLocale|ObjectCollection $spyLocale The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyProductLabelLocalizedAttributesQuery The current query, for fluid interface
     */
    public function filterBySpyLocale($spyLocale, $comparison = null)
    {
        if ($spyLocale instanceof \Orm\Zed\Locale\Persistence\SpyLocale) {
            return $this
                ->addUsingAlias(SpyProductLabelLocalizedAttributesTableMap::COL_FK_LOCALE, $spyLocale->getIdLocale(), $comparison);
        } elseif ($spyLocale instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyProductLabelLocalizedAttributesTableMap::COL_FK_LOCALE, $spyLocale->toKeyValue('PrimaryKey', 'IdLocale'), $comparison);
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
     * @return $this|ChildSpyProductLabelLocalizedAttributesQuery The current query, for fluid interface
     */
    public function joinSpyLocale($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useSpyLocaleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
        ?string $joinType = Criteria::INNER_JOIN
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
     * @param   ChildSpyProductLabelLocalizedAttributes $spyProductLabelLocalizedAttributes Object to remove from the list of results
     *
     * @return $this|ChildSpyProductLabelLocalizedAttributesQuery The current query, for fluid interface
     */
    public function prune($spyProductLabelLocalizedAttributes = null)
    {
        if ($spyProductLabelLocalizedAttributes) {
            $this->addUsingAlias(SpyProductLabelLocalizedAttributesTableMap::COL_ID_PRODUCT_LABEL_LOCALIZED_ATTRIBUTES, $spyProductLabelLocalizedAttributes->getIdProductLabelLocalizedAttributes(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_product_label_localized_attributes table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductLabelLocalizedAttributesTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyProductLabelLocalizedAttributesTableMap::clearInstancePool();
            SpyProductLabelLocalizedAttributesTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductLabelLocalizedAttributesTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyProductLabelLocalizedAttributesTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyProductLabelLocalizedAttributesTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyProductLabelLocalizedAttributesTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SpyProductLabelLocalizedAttributesQuery