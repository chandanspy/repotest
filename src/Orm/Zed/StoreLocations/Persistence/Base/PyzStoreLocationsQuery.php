<?php

namespace Orm\Zed\StoreLocations\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\StoreLocations\Persistence\PyzStoreLocations as ChildPyzStoreLocations;
use Orm\Zed\StoreLocations\Persistence\PyzStoreLocationsQuery as ChildPyzStoreLocationsQuery;
use Orm\Zed\StoreLocations\Persistence\Map\PyzStoreLocationsTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;
use Spryker\Zed\PropelOrm\Business\Runtime\ActiveQuery\Criteria as SprykerCriteria;
use Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException;

/**
 * Base class that represents a query for the 'pyz_store_locations' table.
 *
 *
 *
 * @method     ChildPyzStoreLocationsQuery orderByIdstore($order = Criteria::ASC) Order by the idstore column
 * @method     ChildPyzStoreLocationsQuery orderByStorename($order = Criteria::ASC) Order by the storename column
 * @method     ChildPyzStoreLocationsQuery orderByStreet($order = Criteria::ASC) Order by the street column
 * @method     ChildPyzStoreLocationsQuery orderByCity($order = Criteria::ASC) Order by the city column
 * @method     ChildPyzStoreLocationsQuery orderByRegion($order = Criteria::ASC) Order by the region column
 * @method     ChildPyzStoreLocationsQuery orderByCountry($order = Criteria::ASC) Order by the country column
 * @method     ChildPyzStoreLocationsQuery orderByZipcode($order = Criteria::ASC) Order by the zipcode column
 * @method     ChildPyzStoreLocationsQuery orderByLongitude($order = Criteria::ASC) Order by the longitude column
 * @method     ChildPyzStoreLocationsQuery orderByLatitude($order = Criteria::ASC) Order by the latitude column
 * @method     ChildPyzStoreLocationsQuery orderByStoreimage($order = Criteria::ASC) Order by the storeimage column
 *
 * @method     ChildPyzStoreLocationsQuery groupByIdstore() Group by the idstore column
 * @method     ChildPyzStoreLocationsQuery groupByStorename() Group by the storename column
 * @method     ChildPyzStoreLocationsQuery groupByStreet() Group by the street column
 * @method     ChildPyzStoreLocationsQuery groupByCity() Group by the city column
 * @method     ChildPyzStoreLocationsQuery groupByRegion() Group by the region column
 * @method     ChildPyzStoreLocationsQuery groupByCountry() Group by the country column
 * @method     ChildPyzStoreLocationsQuery groupByZipcode() Group by the zipcode column
 * @method     ChildPyzStoreLocationsQuery groupByLongitude() Group by the longitude column
 * @method     ChildPyzStoreLocationsQuery groupByLatitude() Group by the latitude column
 * @method     ChildPyzStoreLocationsQuery groupByStoreimage() Group by the storeimage column
 *
 * @method     ChildPyzStoreLocationsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildPyzStoreLocationsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildPyzStoreLocationsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildPyzStoreLocationsQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildPyzStoreLocationsQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildPyzStoreLocationsQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildPyzStoreLocations|null findOne(ConnectionInterface $con = null) Return the first ChildPyzStoreLocations matching the query
 * @method     ChildPyzStoreLocations findOneOrCreate(ConnectionInterface $con = null) Return the first ChildPyzStoreLocations matching the query, or a new ChildPyzStoreLocations object populated from the query conditions when no match is found
 *
 * @method     ChildPyzStoreLocations|null findOneByIdstore(int $idstore) Return the first ChildPyzStoreLocations filtered by the idstore column
 * @method     ChildPyzStoreLocations|null findOneByStorename(string $storename) Return the first ChildPyzStoreLocations filtered by the storename column
 * @method     ChildPyzStoreLocations|null findOneByStreet(string $street) Return the first ChildPyzStoreLocations filtered by the street column
 * @method     ChildPyzStoreLocations|null findOneByCity(string $city) Return the first ChildPyzStoreLocations filtered by the city column
 * @method     ChildPyzStoreLocations|null findOneByRegion(string $region) Return the first ChildPyzStoreLocations filtered by the region column
 * @method     ChildPyzStoreLocations|null findOneByCountry(string $country) Return the first ChildPyzStoreLocations filtered by the country column
 * @method     ChildPyzStoreLocations|null findOneByZipcode(string $zipcode) Return the first ChildPyzStoreLocations filtered by the zipcode column
 * @method     ChildPyzStoreLocations|null findOneByLongitude(string $longitude) Return the first ChildPyzStoreLocations filtered by the longitude column
 * @method     ChildPyzStoreLocations|null findOneByLatitude(string $latitude) Return the first ChildPyzStoreLocations filtered by the latitude column
 * @method     ChildPyzStoreLocations|null findOneByStoreimage(string $storeimage) Return the first ChildPyzStoreLocations filtered by the storeimage column *

 * @method     ChildPyzStoreLocations requirePk($key, ConnectionInterface $con = null) Return the ChildPyzStoreLocations by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPyzStoreLocations requireOne(ConnectionInterface $con = null) Return the first ChildPyzStoreLocations matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildPyzStoreLocations requireOneByIdstore(int $idstore) Return the first ChildPyzStoreLocations filtered by the idstore column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPyzStoreLocations requireOneByStorename(string $storename) Return the first ChildPyzStoreLocations filtered by the storename column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPyzStoreLocations requireOneByStreet(string $street) Return the first ChildPyzStoreLocations filtered by the street column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPyzStoreLocations requireOneByCity(string $city) Return the first ChildPyzStoreLocations filtered by the city column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPyzStoreLocations requireOneByRegion(string $region) Return the first ChildPyzStoreLocations filtered by the region column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPyzStoreLocations requireOneByCountry(string $country) Return the first ChildPyzStoreLocations filtered by the country column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPyzStoreLocations requireOneByZipcode(string $zipcode) Return the first ChildPyzStoreLocations filtered by the zipcode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPyzStoreLocations requireOneByLongitude(string $longitude) Return the first ChildPyzStoreLocations filtered by the longitude column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPyzStoreLocations requireOneByLatitude(string $latitude) Return the first ChildPyzStoreLocations filtered by the latitude column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildPyzStoreLocations requireOneByStoreimage(string $storeimage) Return the first ChildPyzStoreLocations filtered by the storeimage column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildPyzStoreLocations[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildPyzStoreLocations objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildPyzStoreLocations> find(ConnectionInterface $con = null) Return ChildPyzStoreLocations objects based on current ModelCriteria
 * @method     ChildPyzStoreLocations[]|ObjectCollection findByIdstore(int $idstore) Return ChildPyzStoreLocations objects filtered by the idstore column
 * @psalm-method ObjectCollection&\Traversable<ChildPyzStoreLocations> findByIdstore(int $idstore) Return ChildPyzStoreLocations objects filtered by the idstore column
 * @method     ChildPyzStoreLocations[]|ObjectCollection findByStorename(string $storename) Return ChildPyzStoreLocations objects filtered by the storename column
 * @psalm-method ObjectCollection&\Traversable<ChildPyzStoreLocations> findByStorename(string $storename) Return ChildPyzStoreLocations objects filtered by the storename column
 * @method     ChildPyzStoreLocations[]|ObjectCollection findByStreet(string $street) Return ChildPyzStoreLocations objects filtered by the street column
 * @psalm-method ObjectCollection&\Traversable<ChildPyzStoreLocations> findByStreet(string $street) Return ChildPyzStoreLocations objects filtered by the street column
 * @method     ChildPyzStoreLocations[]|ObjectCollection findByCity(string $city) Return ChildPyzStoreLocations objects filtered by the city column
 * @psalm-method ObjectCollection&\Traversable<ChildPyzStoreLocations> findByCity(string $city) Return ChildPyzStoreLocations objects filtered by the city column
 * @method     ChildPyzStoreLocations[]|ObjectCollection findByRegion(string $region) Return ChildPyzStoreLocations objects filtered by the region column
 * @psalm-method ObjectCollection&\Traversable<ChildPyzStoreLocations> findByRegion(string $region) Return ChildPyzStoreLocations objects filtered by the region column
 * @method     ChildPyzStoreLocations[]|ObjectCollection findByCountry(string $country) Return ChildPyzStoreLocations objects filtered by the country column
 * @psalm-method ObjectCollection&\Traversable<ChildPyzStoreLocations> findByCountry(string $country) Return ChildPyzStoreLocations objects filtered by the country column
 * @method     ChildPyzStoreLocations[]|ObjectCollection findByZipcode(string $zipcode) Return ChildPyzStoreLocations objects filtered by the zipcode column
 * @psalm-method ObjectCollection&\Traversable<ChildPyzStoreLocations> findByZipcode(string $zipcode) Return ChildPyzStoreLocations objects filtered by the zipcode column
 * @method     ChildPyzStoreLocations[]|ObjectCollection findByLongitude(string $longitude) Return ChildPyzStoreLocations objects filtered by the longitude column
 * @psalm-method ObjectCollection&\Traversable<ChildPyzStoreLocations> findByLongitude(string $longitude) Return ChildPyzStoreLocations objects filtered by the longitude column
 * @method     ChildPyzStoreLocations[]|ObjectCollection findByLatitude(string $latitude) Return ChildPyzStoreLocations objects filtered by the latitude column
 * @psalm-method ObjectCollection&\Traversable<ChildPyzStoreLocations> findByLatitude(string $latitude) Return ChildPyzStoreLocations objects filtered by the latitude column
 * @method     ChildPyzStoreLocations[]|ObjectCollection findByStoreimage(string $storeimage) Return ChildPyzStoreLocations objects filtered by the storeimage column
 * @psalm-method ObjectCollection&\Traversable<ChildPyzStoreLocations> findByStoreimage(string $storeimage) Return ChildPyzStoreLocations objects filtered by the storeimage column
 * @method     ChildPyzStoreLocations[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildPyzStoreLocations> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class PyzStoreLocationsQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\StoreLocations\Persistence\Base\PyzStoreLocationsQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\StoreLocations\\Persistence\\PyzStoreLocations', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildPyzStoreLocationsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildPyzStoreLocationsQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildPyzStoreLocationsQuery) {
            return $criteria;
        }
        $query = new ChildPyzStoreLocationsQuery();
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
     * @return ChildPyzStoreLocations|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = PyzStoreLocationsTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildPyzStoreLocations A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT idstore, storename, street, city, region, country, zipcode, longitude, latitude, storeimage FROM pyz_store_locations WHERE idstore = :p0';
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
            /** @var ChildPyzStoreLocations $obj */
            $obj = new ChildPyzStoreLocations();
            $obj->hydrate($row);
            PyzStoreLocationsTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildPyzStoreLocations|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildPyzStoreLocationsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PyzStoreLocationsTableMap::COL_IDSTORE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildPyzStoreLocationsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PyzStoreLocationsTableMap::COL_IDSTORE, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idstore Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdstore_Between(array $idstore)
    {
        return $this->filterByIdstore($idstore, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idstores Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdstore_In(array $idstores)
    {
        return $this->filterByIdstore($idstores, Criteria::IN);
    }

    /**
     * Filter the query on the idstore column
     *
     * Example usage:
     * <code>
     * $query->filterByIdstore(1234); // WHERE idstore = 1234
     * $query->filterByIdstore(array(12, 34), Criteria::IN); // WHERE idstore IN (12, 34)
     * $query->filterByIdstore(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE idstore > 12
     * </code>
     *
     * @param     mixed $idstore The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdstore($idstore = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idstore)) {
            $useMinMax = false;
            if (isset($idstore['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(PyzStoreLocationsTableMap::COL_IDSTORE, $idstore['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idstore['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(PyzStoreLocationsTableMap::COL_IDSTORE, $idstore['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idstore of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(PyzStoreLocationsTableMap::COL_IDSTORE, $idstore, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $storenames Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByStorename_In(array $storenames)
    {
        return $this->filterByStorename($storenames, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $storename Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByStorename_Like($storename)
    {
        return $this->filterByStorename($storename, Criteria::LIKE);
    }

    /**
     * Filter the query on the storename column
     *
     * Example usage:
     * <code>
     * $query->filterByStorename('fooValue');   // WHERE storename = 'fooValue'
     * $query->filterByStorename('%fooValue%', Criteria::LIKE); // WHERE storename LIKE '%fooValue%'
     * $query->filterByStorename([1, 'foo'], Criteria::IN); // WHERE storename IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $storename The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByStorename($storename = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $storename = str_replace('*', '%', $storename);
        }

        if (is_array($storename) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$storename of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(PyzStoreLocationsTableMap::COL_STORENAME, $storename, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $streets Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByStreet_In(array $streets)
    {
        return $this->filterByStreet($streets, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $street Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByStreet_Like($street)
    {
        return $this->filterByStreet($street, Criteria::LIKE);
    }

    /**
     * Filter the query on the street column
     *
     * Example usage:
     * <code>
     * $query->filterByStreet('fooValue');   // WHERE street = 'fooValue'
     * $query->filterByStreet('%fooValue%', Criteria::LIKE); // WHERE street LIKE '%fooValue%'
     * $query->filterByStreet([1, 'foo'], Criteria::IN); // WHERE street IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $street The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByStreet($street = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $street = str_replace('*', '%', $street);
        }

        if (is_array($street) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$street of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(PyzStoreLocationsTableMap::COL_STREET, $street, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $citys Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCity_In(array $citys)
    {
        return $this->filterByCity($citys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $city Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCity_Like($city)
    {
        return $this->filterByCity($city, Criteria::LIKE);
    }

    /**
     * Filter the query on the city column
     *
     * Example usage:
     * <code>
     * $query->filterByCity('fooValue');   // WHERE city = 'fooValue'
     * $query->filterByCity('%fooValue%', Criteria::LIKE); // WHERE city LIKE '%fooValue%'
     * $query->filterByCity([1, 'foo'], Criteria::IN); // WHERE city IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $city The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByCity($city = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $city = str_replace('*', '%', $city);
        }

        if (is_array($city) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$city of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(PyzStoreLocationsTableMap::COL_CITY, $city, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $regions Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByRegion_In(array $regions)
    {
        return $this->filterByRegion($regions, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $region Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByRegion_Like($region)
    {
        return $this->filterByRegion($region, Criteria::LIKE);
    }

    /**
     * Filter the query on the region column
     *
     * Example usage:
     * <code>
     * $query->filterByRegion('fooValue');   // WHERE region = 'fooValue'
     * $query->filterByRegion('%fooValue%', Criteria::LIKE); // WHERE region LIKE '%fooValue%'
     * $query->filterByRegion([1, 'foo'], Criteria::IN); // WHERE region IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $region The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByRegion($region = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $region = str_replace('*', '%', $region);
        }

        if (is_array($region) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$region of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(PyzStoreLocationsTableMap::COL_REGION, $region, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $countrys Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCountry_In(array $countrys)
    {
        return $this->filterByCountry($countrys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $country Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCountry_Like($country)
    {
        return $this->filterByCountry($country, Criteria::LIKE);
    }

    /**
     * Filter the query on the country column
     *
     * Example usage:
     * <code>
     * $query->filterByCountry('fooValue');   // WHERE country = 'fooValue'
     * $query->filterByCountry('%fooValue%', Criteria::LIKE); // WHERE country LIKE '%fooValue%'
     * $query->filterByCountry([1, 'foo'], Criteria::IN); // WHERE country IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $country The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByCountry($country = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $country = str_replace('*', '%', $country);
        }

        if (is_array($country) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$country of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(PyzStoreLocationsTableMap::COL_COUNTRY, $country, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $zipcodes Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByZipcode_In(array $zipcodes)
    {
        return $this->filterByZipcode($zipcodes, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $zipcode Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByZipcode_Like($zipcode)
    {
        return $this->filterByZipcode($zipcode, Criteria::LIKE);
    }

    /**
     * Filter the query on the zipcode column
     *
     * Example usage:
     * <code>
     * $query->filterByZipcode('fooValue');   // WHERE zipcode = 'fooValue'
     * $query->filterByZipcode('%fooValue%', Criteria::LIKE); // WHERE zipcode LIKE '%fooValue%'
     * $query->filterByZipcode([1, 'foo'], Criteria::IN); // WHERE zipcode IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $zipcode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByZipcode($zipcode = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $zipcode = str_replace('*', '%', $zipcode);
        }

        if (is_array($zipcode) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$zipcode of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(PyzStoreLocationsTableMap::COL_ZIPCODE, $zipcode, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $longitudes Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLongitude_In(array $longitudes)
    {
        return $this->filterByLongitude($longitudes, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $longitude Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLongitude_Like($longitude)
    {
        return $this->filterByLongitude($longitude, Criteria::LIKE);
    }

    /**
     * Filter the query on the longitude column
     *
     * Example usage:
     * <code>
     * $query->filterByLongitude('fooValue');   // WHERE longitude = 'fooValue'
     * $query->filterByLongitude('%fooValue%', Criteria::LIKE); // WHERE longitude LIKE '%fooValue%'
     * $query->filterByLongitude([1, 'foo'], Criteria::IN); // WHERE longitude IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $longitude The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByLongitude($longitude = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $longitude = str_replace('*', '%', $longitude);
        }

        if (is_array($longitude) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$longitude of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(PyzStoreLocationsTableMap::COL_LONGITUDE, $longitude, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $latitudes Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLatitude_In(array $latitudes)
    {
        return $this->filterByLatitude($latitudes, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $latitude Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLatitude_Like($latitude)
    {
        return $this->filterByLatitude($latitude, Criteria::LIKE);
    }

    /**
     * Filter the query on the latitude column
     *
     * Example usage:
     * <code>
     * $query->filterByLatitude('fooValue');   // WHERE latitude = 'fooValue'
     * $query->filterByLatitude('%fooValue%', Criteria::LIKE); // WHERE latitude LIKE '%fooValue%'
     * $query->filterByLatitude([1, 'foo'], Criteria::IN); // WHERE latitude IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $latitude The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByLatitude($latitude = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $latitude = str_replace('*', '%', $latitude);
        }

        if (is_array($latitude) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$latitude of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(PyzStoreLocationsTableMap::COL_LATITUDE, $latitude, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $storeimages Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByStoreimage_In(array $storeimages)
    {
        return $this->filterByStoreimage($storeimages, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $storeimage Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByStoreimage_Like($storeimage)
    {
        return $this->filterByStoreimage($storeimage, Criteria::LIKE);
    }

    /**
     * Filter the query on the storeimage column
     *
     * Example usage:
     * <code>
     * $query->filterByStoreimage('fooValue');   // WHERE storeimage = 'fooValue'
     * $query->filterByStoreimage('%fooValue%', Criteria::LIKE); // WHERE storeimage LIKE '%fooValue%'
     * $query->filterByStoreimage([1, 'foo'], Criteria::IN); // WHERE storeimage IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $storeimage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByStoreimage($storeimage = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $storeimage = str_replace('*', '%', $storeimage);
        }

        if (is_array($storeimage) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$storeimage of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(PyzStoreLocationsTableMap::COL_STOREIMAGE, $storeimage, $comparison);

        return $query;
    }

    /**
     * Exclude object from result
     *
     * @param   ChildPyzStoreLocations $pyzStoreLocations Object to remove from the list of results
     *
     * @return $this|ChildPyzStoreLocationsQuery The current query, for fluid interface
     */
    public function prune($pyzStoreLocations = null)
    {
        if ($pyzStoreLocations) {
            $this->addUsingAlias(PyzStoreLocationsTableMap::COL_IDSTORE, $pyzStoreLocations->getIdstore(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the pyz_store_locations table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(PyzStoreLocationsTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PyzStoreLocationsTableMap::clearInstancePool();
            PyzStoreLocationsTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(PyzStoreLocationsTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(PyzStoreLocationsTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            PyzStoreLocationsTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            PyzStoreLocationsTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // PyzStoreLocationsQuery
