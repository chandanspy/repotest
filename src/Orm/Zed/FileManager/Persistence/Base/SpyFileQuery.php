<?php

namespace Orm\Zed\FileManager\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\FileManager\Persistence\SpyFile as ChildSpyFile;
use Orm\Zed\FileManager\Persistence\SpyFileQuery as ChildSpyFileQuery;
use Orm\Zed\FileManager\Persistence\Map\SpyFileTableMap;
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
 * Base class that represents a query for the 'spy_file' table.
 *
 *
 *
 * @method     ChildSpyFileQuery orderByIdFile($order = Criteria::ASC) Order by the id_file column
 * @method     ChildSpyFileQuery orderByFkFileDirectory($order = Criteria::ASC) Order by the fk_file_directory column
 * @method     ChildSpyFileQuery orderByFileName($order = Criteria::ASC) Order by the file_name column
 *
 * @method     ChildSpyFileQuery groupByIdFile() Group by the id_file column
 * @method     ChildSpyFileQuery groupByFkFileDirectory() Group by the fk_file_directory column
 * @method     ChildSpyFileQuery groupByFileName() Group by the file_name column
 *
 * @method     ChildSpyFileQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyFileQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyFileQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyFileQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyFileQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyFileQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyFileQuery leftJoinFileDirectory($relationAlias = null) Adds a LEFT JOIN clause to the query using the FileDirectory relation
 * @method     ChildSpyFileQuery rightJoinFileDirectory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the FileDirectory relation
 * @method     ChildSpyFileQuery innerJoinFileDirectory($relationAlias = null) Adds a INNER JOIN clause to the query using the FileDirectory relation
 *
 * @method     ChildSpyFileQuery joinWithFileDirectory($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the FileDirectory relation
 *
 * @method     ChildSpyFileQuery leftJoinWithFileDirectory() Adds a LEFT JOIN clause and with to the query using the FileDirectory relation
 * @method     ChildSpyFileQuery rightJoinWithFileDirectory() Adds a RIGHT JOIN clause and with to the query using the FileDirectory relation
 * @method     ChildSpyFileQuery innerJoinWithFileDirectory() Adds a INNER JOIN clause and with to the query using the FileDirectory relation
 *
 * @method     ChildSpyFileQuery leftJoinSpyFileInfo($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyFileInfo relation
 * @method     ChildSpyFileQuery rightJoinSpyFileInfo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyFileInfo relation
 * @method     ChildSpyFileQuery innerJoinSpyFileInfo($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyFileInfo relation
 *
 * @method     ChildSpyFileQuery joinWithSpyFileInfo($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyFileInfo relation
 *
 * @method     ChildSpyFileQuery leftJoinWithSpyFileInfo() Adds a LEFT JOIN clause and with to the query using the SpyFileInfo relation
 * @method     ChildSpyFileQuery rightJoinWithSpyFileInfo() Adds a RIGHT JOIN clause and with to the query using the SpyFileInfo relation
 * @method     ChildSpyFileQuery innerJoinWithSpyFileInfo() Adds a INNER JOIN clause and with to the query using the SpyFileInfo relation
 *
 * @method     ChildSpyFileQuery leftJoinSpyFileLocalizedAttributes($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyFileLocalizedAttributes relation
 * @method     ChildSpyFileQuery rightJoinSpyFileLocalizedAttributes($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyFileLocalizedAttributes relation
 * @method     ChildSpyFileQuery innerJoinSpyFileLocalizedAttributes($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyFileLocalizedAttributes relation
 *
 * @method     ChildSpyFileQuery joinWithSpyFileLocalizedAttributes($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyFileLocalizedAttributes relation
 *
 * @method     ChildSpyFileQuery leftJoinWithSpyFileLocalizedAttributes() Adds a LEFT JOIN clause and with to the query using the SpyFileLocalizedAttributes relation
 * @method     ChildSpyFileQuery rightJoinWithSpyFileLocalizedAttributes() Adds a RIGHT JOIN clause and with to the query using the SpyFileLocalizedAttributes relation
 * @method     ChildSpyFileQuery innerJoinWithSpyFileLocalizedAttributes() Adds a INNER JOIN clause and with to the query using the SpyFileLocalizedAttributes relation
 *
 * @method     \Orm\Zed\FileManager\Persistence\SpyFileDirectoryQuery|\Orm\Zed\FileManager\Persistence\SpyFileInfoQuery|\Orm\Zed\FileManager\Persistence\SpyFileLocalizedAttributesQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyFile|null findOne(ConnectionInterface $con = null) Return the first ChildSpyFile matching the query
 * @method     ChildSpyFile findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyFile matching the query, or a new ChildSpyFile object populated from the query conditions when no match is found
 *
 * @method     ChildSpyFile|null findOneByIdFile(int $id_file) Return the first ChildSpyFile filtered by the id_file column
 * @method     ChildSpyFile|null findOneByFkFileDirectory(int $fk_file_directory) Return the first ChildSpyFile filtered by the fk_file_directory column
 * @method     ChildSpyFile|null findOneByFileName(string $file_name) Return the first ChildSpyFile filtered by the file_name column *

 * @method     ChildSpyFile requirePk($key, ConnectionInterface $con = null) Return the ChildSpyFile by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyFile requireOne(ConnectionInterface $con = null) Return the first ChildSpyFile matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyFile requireOneByIdFile(int $id_file) Return the first ChildSpyFile filtered by the id_file column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyFile requireOneByFkFileDirectory(int $fk_file_directory) Return the first ChildSpyFile filtered by the fk_file_directory column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyFile requireOneByFileName(string $file_name) Return the first ChildSpyFile filtered by the file_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyFile[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyFile objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyFile> find(ConnectionInterface $con = null) Return ChildSpyFile objects based on current ModelCriteria
 * @method     ChildSpyFile[]|ObjectCollection findByIdFile(int $id_file) Return ChildSpyFile objects filtered by the id_file column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyFile> findByIdFile(int $id_file) Return ChildSpyFile objects filtered by the id_file column
 * @method     ChildSpyFile[]|ObjectCollection findByFkFileDirectory(int $fk_file_directory) Return ChildSpyFile objects filtered by the fk_file_directory column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyFile> findByFkFileDirectory(int $fk_file_directory) Return ChildSpyFile objects filtered by the fk_file_directory column
 * @method     ChildSpyFile[]|ObjectCollection findByFileName(string $file_name) Return ChildSpyFile objects filtered by the file_name column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyFile> findByFileName(string $file_name) Return ChildSpyFile objects filtered by the file_name column
 * @method     ChildSpyFile[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyFile> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyFileQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\FileManager\Persistence\Base\SpyFileQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\FileManager\\Persistence\\SpyFile', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyFileQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyFileQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyFileQuery) {
            return $criteria;
        }
        $query = new ChildSpyFileQuery();
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
     * @return ChildSpyFile|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyFileTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyFile A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_file, fk_file_directory, file_name FROM spy_file WHERE id_file = :p0';
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
            /** @var ChildSpyFile $obj */
            $obj = new ChildSpyFile();
            $obj->hydrate($row);
            SpyFileTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyFile|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyFileQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyFileTableMap::COL_ID_FILE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyFileQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyFileTableMap::COL_ID_FILE, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idFile Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdFile_Between(array $idFile)
    {
        return $this->filterByIdFile($idFile, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idFiles Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdFile_In(array $idFiles)
    {
        return $this->filterByIdFile($idFiles, Criteria::IN);
    }

    /**
     * Filter the query on the id_file column
     *
     * Example usage:
     * <code>
     * $query->filterByIdFile(1234); // WHERE id_file = 1234
     * $query->filterByIdFile(array(12, 34), Criteria::IN); // WHERE id_file IN (12, 34)
     * $query->filterByIdFile(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_file > 12
     * </code>
     *
     * @param     mixed $idFile The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdFile($idFile = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idFile)) {
            $useMinMax = false;
            if (isset($idFile['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyFileTableMap::COL_ID_FILE, $idFile['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idFile['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyFileTableMap::COL_ID_FILE, $idFile['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idFile of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyFileTableMap::COL_ID_FILE, $idFile, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkFileDirectory Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkFileDirectory_Between(array $fkFileDirectory)
    {
        return $this->filterByFkFileDirectory($fkFileDirectory, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkFileDirectorys Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkFileDirectory_In(array $fkFileDirectorys)
    {
        return $this->filterByFkFileDirectory($fkFileDirectorys, Criteria::IN);
    }

    /**
     * Filter the query on the fk_file_directory column
     *
     * Example usage:
     * <code>
     * $query->filterByFkFileDirectory(1234); // WHERE fk_file_directory = 1234
     * $query->filterByFkFileDirectory(array(12, 34), Criteria::IN); // WHERE fk_file_directory IN (12, 34)
     * $query->filterByFkFileDirectory(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_file_directory > 12
     * </code>
     *
     * @see       filterByFileDirectory()
     *
     * @param     mixed $fkFileDirectory The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkFileDirectory($fkFileDirectory = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkFileDirectory)) {
            $useMinMax = false;
            if (isset($fkFileDirectory['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyFileTableMap::COL_FK_FILE_DIRECTORY, $fkFileDirectory['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkFileDirectory['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyFileTableMap::COL_FK_FILE_DIRECTORY, $fkFileDirectory['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkFileDirectory of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyFileTableMap::COL_FK_FILE_DIRECTORY, $fkFileDirectory, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fileNames Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFileName_In(array $fileNames)
    {
        return $this->filterByFileName($fileNames, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $fileName Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFileName_Like($fileName)
    {
        return $this->filterByFileName($fileName, Criteria::LIKE);
    }

    /**
     * Filter the query on the file_name column
     *
     * Example usage:
     * <code>
     * $query->filterByFileName('fooValue');   // WHERE file_name = 'fooValue'
     * $query->filterByFileName('%fooValue%', Criteria::LIKE); // WHERE file_name LIKE '%fooValue%'
     * $query->filterByFileName([1, 'foo'], Criteria::IN); // WHERE file_name IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $fileName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFileName($fileName = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $fileName = str_replace('*', '%', $fileName);
        }

        if (is_array($fileName) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$fileName of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyFileTableMap::COL_FILE_NAME, $fileName, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\FileManager\Persistence\SpyFileDirectory object
     *
     * @param \Orm\Zed\FileManager\Persistence\SpyFileDirectory|ObjectCollection $spyFileDirectory The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyFileQuery The current query, for fluid interface
     */
    public function filterByFileDirectory($spyFileDirectory, $comparison = null)
    {
        if ($spyFileDirectory instanceof \Orm\Zed\FileManager\Persistence\SpyFileDirectory) {
            return $this
                ->addUsingAlias(SpyFileTableMap::COL_FK_FILE_DIRECTORY, $spyFileDirectory->getIdFileDirectory(), $comparison);
        } elseif ($spyFileDirectory instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyFileTableMap::COL_FK_FILE_DIRECTORY, $spyFileDirectory->toKeyValue('PrimaryKey', 'IdFileDirectory'), $comparison);
        } else {
            throw new PropelException('filterByFileDirectory() only accepts arguments of type \Orm\Zed\FileManager\Persistence\SpyFileDirectory or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the FileDirectory relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyFileQuery The current query, for fluid interface
     */
    public function joinFileDirectory($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('FileDirectory');

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
            $this->addJoinObject($join, 'FileDirectory');
        }

        return $this;
    }

    /**
     * Use the FileDirectory relation SpyFileDirectory object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\FileManager\Persistence\SpyFileDirectoryQuery A secondary query class using the current class as primary query
     */
    public function useFileDirectoryQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinFileDirectory($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'FileDirectory', '\Orm\Zed\FileManager\Persistence\SpyFileDirectoryQuery');
    }

    /**
     * Use the FileDirectory relation SpyFileDirectory object
     *
     * @param callable(\Orm\Zed\FileManager\Persistence\SpyFileDirectoryQuery):\Orm\Zed\FileManager\Persistence\SpyFileDirectoryQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withFileDirectoryQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useFileDirectoryQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the FileDirectory relation to the SpyFileDirectory table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\FileManager\Persistence\SpyFileDirectoryQuery The inner query object of the EXISTS statement
     */
    public function useFileDirectoryExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('FileDirectory', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the FileDirectory relation to the SpyFileDirectory table for a NOT EXISTS query.
     *
     * @see useFileDirectoryExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\FileManager\Persistence\SpyFileDirectoryQuery The inner query object of the NOT EXISTS statement
     */
    public function useFileDirectoryNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('FileDirectory', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\FileManager\Persistence\SpyFileInfo object
     *
     * @param \Orm\Zed\FileManager\Persistence\SpyFileInfo|ObjectCollection $spyFileInfo the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyFileQuery The current query, for fluid interface
     */
    public function filterBySpyFileInfo($spyFileInfo, $comparison = null)
    {
        if ($spyFileInfo instanceof \Orm\Zed\FileManager\Persistence\SpyFileInfo) {
            return $this
                ->addUsingAlias(SpyFileTableMap::COL_ID_FILE, $spyFileInfo->getFkFile(), $comparison);
        } elseif ($spyFileInfo instanceof ObjectCollection) {
            return $this
                ->useSpyFileInfoQuery()
                ->filterByPrimaryKeys($spyFileInfo->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyFileInfo() only accepts arguments of type \Orm\Zed\FileManager\Persistence\SpyFileInfo or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyFileInfo relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyFileQuery The current query, for fluid interface
     */
    public function joinSpyFileInfo($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyFileInfo');

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
            $this->addJoinObject($join, 'SpyFileInfo');
        }

        return $this;
    }

    /**
     * Use the SpyFileInfo relation SpyFileInfo object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\FileManager\Persistence\SpyFileInfoQuery A secondary query class using the current class as primary query
     */
    public function useSpyFileInfoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyFileInfo($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyFileInfo', '\Orm\Zed\FileManager\Persistence\SpyFileInfoQuery');
    }

    /**
     * Use the SpyFileInfo relation SpyFileInfo object
     *
     * @param callable(\Orm\Zed\FileManager\Persistence\SpyFileInfoQuery):\Orm\Zed\FileManager\Persistence\SpyFileInfoQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyFileInfoQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyFileInfoQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyFileInfo table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\FileManager\Persistence\SpyFileInfoQuery The inner query object of the EXISTS statement
     */
    public function useSpyFileInfoExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyFileInfo', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyFileInfo table for a NOT EXISTS query.
     *
     * @see useSpyFileInfoExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\FileManager\Persistence\SpyFileInfoQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyFileInfoNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyFileInfo', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\FileManager\Persistence\SpyFileLocalizedAttributes object
     *
     * @param \Orm\Zed\FileManager\Persistence\SpyFileLocalizedAttributes|ObjectCollection $spyFileLocalizedAttributes the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyFileQuery The current query, for fluid interface
     */
    public function filterBySpyFileLocalizedAttributes($spyFileLocalizedAttributes, $comparison = null)
    {
        if ($spyFileLocalizedAttributes instanceof \Orm\Zed\FileManager\Persistence\SpyFileLocalizedAttributes) {
            return $this
                ->addUsingAlias(SpyFileTableMap::COL_ID_FILE, $spyFileLocalizedAttributes->getFkFile(), $comparison);
        } elseif ($spyFileLocalizedAttributes instanceof ObjectCollection) {
            return $this
                ->useSpyFileLocalizedAttributesQuery()
                ->filterByPrimaryKeys($spyFileLocalizedAttributes->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyFileLocalizedAttributes() only accepts arguments of type \Orm\Zed\FileManager\Persistence\SpyFileLocalizedAttributes or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyFileLocalizedAttributes relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyFileQuery The current query, for fluid interface
     */
    public function joinSpyFileLocalizedAttributes($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyFileLocalizedAttributes');

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
            $this->addJoinObject($join, 'SpyFileLocalizedAttributes');
        }

        return $this;
    }

    /**
     * Use the SpyFileLocalizedAttributes relation SpyFileLocalizedAttributes object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\FileManager\Persistence\SpyFileLocalizedAttributesQuery A secondary query class using the current class as primary query
     */
    public function useSpyFileLocalizedAttributesQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyFileLocalizedAttributes($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyFileLocalizedAttributes', '\Orm\Zed\FileManager\Persistence\SpyFileLocalizedAttributesQuery');
    }

    /**
     * Use the SpyFileLocalizedAttributes relation SpyFileLocalizedAttributes object
     *
     * @param callable(\Orm\Zed\FileManager\Persistence\SpyFileLocalizedAttributesQuery):\Orm\Zed\FileManager\Persistence\SpyFileLocalizedAttributesQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyFileLocalizedAttributesQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyFileLocalizedAttributesQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyFileLocalizedAttributes table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\FileManager\Persistence\SpyFileLocalizedAttributesQuery The inner query object of the EXISTS statement
     */
    public function useSpyFileLocalizedAttributesExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyFileLocalizedAttributes', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyFileLocalizedAttributes table for a NOT EXISTS query.
     *
     * @see useSpyFileLocalizedAttributesExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\FileManager\Persistence\SpyFileLocalizedAttributesQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyFileLocalizedAttributesNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyFileLocalizedAttributes', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Exclude object from result
     *
     * @param   ChildSpyFile $spyFile Object to remove from the list of results
     *
     * @return $this|ChildSpyFileQuery The current query, for fluid interface
     */
    public function prune($spyFile = null)
    {
        if ($spyFile) {
            $this->addUsingAlias(SpyFileTableMap::COL_ID_FILE, $spyFile->getIdFile(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_file table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyFileTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyFileTableMap::clearInstancePool();
            SpyFileTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyFileTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyFileTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyFileTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyFileTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SpyFileQuery
