<?php

namespace Orm\Zed\Comment\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\Comment\Persistence\SpyCommentToCommentTag as ChildSpyCommentToCommentTag;
use Orm\Zed\Comment\Persistence\SpyCommentToCommentTagQuery as ChildSpyCommentToCommentTagQuery;
use Orm\Zed\Comment\Persistence\Map\SpyCommentToCommentTagTableMap;
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
 * Base class that represents a query for the 'spy_comment_to_comment_tag' table.
 *
 *
 *
 * @method     ChildSpyCommentToCommentTagQuery orderByFkComment($order = Criteria::ASC) Order by the fk_comment column
 * @method     ChildSpyCommentToCommentTagQuery orderByFkCommentTag($order = Criteria::ASC) Order by the fk_comment_tag column
 *
 * @method     ChildSpyCommentToCommentTagQuery groupByFkComment() Group by the fk_comment column
 * @method     ChildSpyCommentToCommentTagQuery groupByFkCommentTag() Group by the fk_comment_tag column
 *
 * @method     ChildSpyCommentToCommentTagQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyCommentToCommentTagQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyCommentToCommentTagQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyCommentToCommentTagQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyCommentToCommentTagQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyCommentToCommentTagQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyCommentToCommentTagQuery leftJoinSpyComment($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyComment relation
 * @method     ChildSpyCommentToCommentTagQuery rightJoinSpyComment($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyComment relation
 * @method     ChildSpyCommentToCommentTagQuery innerJoinSpyComment($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyComment relation
 *
 * @method     ChildSpyCommentToCommentTagQuery joinWithSpyComment($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyComment relation
 *
 * @method     ChildSpyCommentToCommentTagQuery leftJoinWithSpyComment() Adds a LEFT JOIN clause and with to the query using the SpyComment relation
 * @method     ChildSpyCommentToCommentTagQuery rightJoinWithSpyComment() Adds a RIGHT JOIN clause and with to the query using the SpyComment relation
 * @method     ChildSpyCommentToCommentTagQuery innerJoinWithSpyComment() Adds a INNER JOIN clause and with to the query using the SpyComment relation
 *
 * @method     ChildSpyCommentToCommentTagQuery leftJoinSpyCommentTag($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyCommentTag relation
 * @method     ChildSpyCommentToCommentTagQuery rightJoinSpyCommentTag($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyCommentTag relation
 * @method     ChildSpyCommentToCommentTagQuery innerJoinSpyCommentTag($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyCommentTag relation
 *
 * @method     ChildSpyCommentToCommentTagQuery joinWithSpyCommentTag($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyCommentTag relation
 *
 * @method     ChildSpyCommentToCommentTagQuery leftJoinWithSpyCommentTag() Adds a LEFT JOIN clause and with to the query using the SpyCommentTag relation
 * @method     ChildSpyCommentToCommentTagQuery rightJoinWithSpyCommentTag() Adds a RIGHT JOIN clause and with to the query using the SpyCommentTag relation
 * @method     ChildSpyCommentToCommentTagQuery innerJoinWithSpyCommentTag() Adds a INNER JOIN clause and with to the query using the SpyCommentTag relation
 *
 * @method     \Orm\Zed\Comment\Persistence\SpyCommentQuery|\Orm\Zed\Comment\Persistence\SpyCommentTagQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyCommentToCommentTag|null findOne(ConnectionInterface $con = null) Return the first ChildSpyCommentToCommentTag matching the query
 * @method     ChildSpyCommentToCommentTag findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyCommentToCommentTag matching the query, or a new ChildSpyCommentToCommentTag object populated from the query conditions when no match is found
 *
 * @method     ChildSpyCommentToCommentTag|null findOneByFkComment(int $fk_comment) Return the first ChildSpyCommentToCommentTag filtered by the fk_comment column
 * @method     ChildSpyCommentToCommentTag|null findOneByFkCommentTag(int $fk_comment_tag) Return the first ChildSpyCommentToCommentTag filtered by the fk_comment_tag column *

 * @method     ChildSpyCommentToCommentTag requirePk($key, ConnectionInterface $con = null) Return the ChildSpyCommentToCommentTag by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCommentToCommentTag requireOne(ConnectionInterface $con = null) Return the first ChildSpyCommentToCommentTag matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyCommentToCommentTag requireOneByFkComment(int $fk_comment) Return the first ChildSpyCommentToCommentTag filtered by the fk_comment column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCommentToCommentTag requireOneByFkCommentTag(int $fk_comment_tag) Return the first ChildSpyCommentToCommentTag filtered by the fk_comment_tag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyCommentToCommentTag[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyCommentToCommentTag objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCommentToCommentTag> find(ConnectionInterface $con = null) Return ChildSpyCommentToCommentTag objects based on current ModelCriteria
 * @method     ChildSpyCommentToCommentTag[]|ObjectCollection findByFkComment(int $fk_comment) Return ChildSpyCommentToCommentTag objects filtered by the fk_comment column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCommentToCommentTag> findByFkComment(int $fk_comment) Return ChildSpyCommentToCommentTag objects filtered by the fk_comment column
 * @method     ChildSpyCommentToCommentTag[]|ObjectCollection findByFkCommentTag(int $fk_comment_tag) Return ChildSpyCommentToCommentTag objects filtered by the fk_comment_tag column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCommentToCommentTag> findByFkCommentTag(int $fk_comment_tag) Return ChildSpyCommentToCommentTag objects filtered by the fk_comment_tag column
 * @method     ChildSpyCommentToCommentTag[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyCommentToCommentTag> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyCommentToCommentTagQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\Comment\Persistence\Base\SpyCommentToCommentTagQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\Comment\\Persistence\\SpyCommentToCommentTag', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyCommentToCommentTagQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyCommentToCommentTagQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyCommentToCommentTagQuery) {
            return $criteria;
        }
        $query = new ChildSpyCommentToCommentTagQuery();
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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array[$fk_comment, $fk_comment_tag] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildSpyCommentToCommentTag|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyCommentToCommentTagTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildSpyCommentToCommentTag A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT fk_comment, fk_comment_tag FROM spy_comment_to_comment_tag WHERE fk_comment = :p0 AND fk_comment_tag = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildSpyCommentToCommentTag $obj */
            $obj = new ChildSpyCommentToCommentTag();
            $obj->hydrate($row);
            SpyCommentToCommentTagTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildSpyCommentToCommentTag|array|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
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
     * @return $this|ChildSpyCommentToCommentTagQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(SpyCommentToCommentTagTableMap::COL_FK_COMMENT, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(SpyCommentToCommentTagTableMap::COL_FK_COMMENT_TAG, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyCommentToCommentTagQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(SpyCommentToCommentTagTableMap::COL_FK_COMMENT, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(SpyCommentToCommentTagTableMap::COL_FK_COMMENT_TAG, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkComment Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkComment_Between(array $fkComment)
    {
        return $this->filterByFkComment($fkComment, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkComments Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkComment_In(array $fkComments)
    {
        return $this->filterByFkComment($fkComments, Criteria::IN);
    }

    /**
     * Filter the query on the fk_comment column
     *
     * Example usage:
     * <code>
     * $query->filterByFkComment(1234); // WHERE fk_comment = 1234
     * $query->filterByFkComment(array(12, 34), Criteria::IN); // WHERE fk_comment IN (12, 34)
     * $query->filterByFkComment(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_comment > 12
     * </code>
     *
     * @see       filterBySpyComment()
     *
     * @param     mixed $fkComment The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkComment($fkComment = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkComment)) {
            $useMinMax = false;
            if (isset($fkComment['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCommentToCommentTagTableMap::COL_FK_COMMENT, $fkComment['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkComment['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCommentToCommentTagTableMap::COL_FK_COMMENT, $fkComment['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkComment of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCommentToCommentTagTableMap::COL_FK_COMMENT, $fkComment, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkCommentTag Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkCommentTag_Between(array $fkCommentTag)
    {
        return $this->filterByFkCommentTag($fkCommentTag, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkCommentTags Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkCommentTag_In(array $fkCommentTags)
    {
        return $this->filterByFkCommentTag($fkCommentTags, Criteria::IN);
    }

    /**
     * Filter the query on the fk_comment_tag column
     *
     * Example usage:
     * <code>
     * $query->filterByFkCommentTag(1234); // WHERE fk_comment_tag = 1234
     * $query->filterByFkCommentTag(array(12, 34), Criteria::IN); // WHERE fk_comment_tag IN (12, 34)
     * $query->filterByFkCommentTag(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_comment_tag > 12
     * </code>
     *
     * @see       filterBySpyCommentTag()
     *
     * @param     mixed $fkCommentTag The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkCommentTag($fkCommentTag = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkCommentTag)) {
            $useMinMax = false;
            if (isset($fkCommentTag['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCommentToCommentTagTableMap::COL_FK_COMMENT_TAG, $fkCommentTag['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkCommentTag['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCommentToCommentTagTableMap::COL_FK_COMMENT_TAG, $fkCommentTag['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkCommentTag of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCommentToCommentTagTableMap::COL_FK_COMMENT_TAG, $fkCommentTag, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\Comment\Persistence\SpyComment object
     *
     * @param \Orm\Zed\Comment\Persistence\SpyComment|ObjectCollection $spyComment The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyCommentToCommentTagQuery The current query, for fluid interface
     */
    public function filterBySpyComment($spyComment, $comparison = null)
    {
        if ($spyComment instanceof \Orm\Zed\Comment\Persistence\SpyComment) {
            return $this
                ->addUsingAlias(SpyCommentToCommentTagTableMap::COL_FK_COMMENT, $spyComment->getIdComment(), $comparison);
        } elseif ($spyComment instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyCommentToCommentTagTableMap::COL_FK_COMMENT, $spyComment->toKeyValue('PrimaryKey', 'IdComment'), $comparison);
        } else {
            throw new PropelException('filterBySpyComment() only accepts arguments of type \Orm\Zed\Comment\Persistence\SpyComment or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyComment relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyCommentToCommentTagQuery The current query, for fluid interface
     */
    public function joinSpyComment($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyComment');

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
            $this->addJoinObject($join, 'SpyComment');
        }

        return $this;
    }

    /**
     * Use the SpyComment relation SpyComment object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Comment\Persistence\SpyCommentQuery A secondary query class using the current class as primary query
     */
    public function useSpyCommentQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyComment($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyComment', '\Orm\Zed\Comment\Persistence\SpyCommentQuery');
    }

    /**
     * Use the SpyComment relation SpyComment object
     *
     * @param callable(\Orm\Zed\Comment\Persistence\SpyCommentQuery):\Orm\Zed\Comment\Persistence\SpyCommentQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyCommentQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyCommentQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyComment table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Comment\Persistence\SpyCommentQuery The inner query object of the EXISTS statement
     */
    public function useSpyCommentExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyComment', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyComment table for a NOT EXISTS query.
     *
     * @see useSpyCommentExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Comment\Persistence\SpyCommentQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyCommentNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyComment', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Comment\Persistence\SpyCommentTag object
     *
     * @param \Orm\Zed\Comment\Persistence\SpyCommentTag|ObjectCollection $spyCommentTag The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyCommentToCommentTagQuery The current query, for fluid interface
     */
    public function filterBySpyCommentTag($spyCommentTag, $comparison = null)
    {
        if ($spyCommentTag instanceof \Orm\Zed\Comment\Persistence\SpyCommentTag) {
            return $this
                ->addUsingAlias(SpyCommentToCommentTagTableMap::COL_FK_COMMENT_TAG, $spyCommentTag->getIdCommentTag(), $comparison);
        } elseif ($spyCommentTag instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyCommentToCommentTagTableMap::COL_FK_COMMENT_TAG, $spyCommentTag->toKeyValue('PrimaryKey', 'IdCommentTag'), $comparison);
        } else {
            throw new PropelException('filterBySpyCommentTag() only accepts arguments of type \Orm\Zed\Comment\Persistence\SpyCommentTag or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyCommentTag relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyCommentToCommentTagQuery The current query, for fluid interface
     */
    public function joinSpyCommentTag($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyCommentTag');

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
            $this->addJoinObject($join, 'SpyCommentTag');
        }

        return $this;
    }

    /**
     * Use the SpyCommentTag relation SpyCommentTag object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Comment\Persistence\SpyCommentTagQuery A secondary query class using the current class as primary query
     */
    public function useSpyCommentTagQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyCommentTag($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyCommentTag', '\Orm\Zed\Comment\Persistence\SpyCommentTagQuery');
    }

    /**
     * Use the SpyCommentTag relation SpyCommentTag object
     *
     * @param callable(\Orm\Zed\Comment\Persistence\SpyCommentTagQuery):\Orm\Zed\Comment\Persistence\SpyCommentTagQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyCommentTagQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyCommentTagQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyCommentTag table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Comment\Persistence\SpyCommentTagQuery The inner query object of the EXISTS statement
     */
    public function useSpyCommentTagExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyCommentTag', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyCommentTag table for a NOT EXISTS query.
     *
     * @see useSpyCommentTagExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Comment\Persistence\SpyCommentTagQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyCommentTagNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyCommentTag', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Exclude object from result
     *
     * @param   ChildSpyCommentToCommentTag $spyCommentToCommentTag Object to remove from the list of results
     *
     * @return $this|ChildSpyCommentToCommentTagQuery The current query, for fluid interface
     */
    public function prune($spyCommentToCommentTag = null)
    {
        if ($spyCommentToCommentTag) {
            $this->addCond('pruneCond0', $this->getAliasedColName(SpyCommentToCommentTagTableMap::COL_FK_COMMENT), $spyCommentToCommentTag->getFkComment(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(SpyCommentToCommentTagTableMap::COL_FK_COMMENT_TAG), $spyCommentToCommentTag->getFkCommentTag(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_comment_to_comment_tag table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCommentToCommentTagTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyCommentToCommentTagTableMap::clearInstancePool();
            SpyCommentToCommentTagTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCommentToCommentTagTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyCommentToCommentTagTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyCommentToCommentTagTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyCommentToCommentTagTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SpyCommentToCommentTagQuery
