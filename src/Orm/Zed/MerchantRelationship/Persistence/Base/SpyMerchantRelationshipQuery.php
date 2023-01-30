<?php

namespace Orm\Zed\MerchantRelationship\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnit;
use Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThreshold;
use Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationship as ChildSpyMerchantRelationship;
use Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationshipQuery as ChildSpyMerchantRelationshipQuery;
use Orm\Zed\MerchantRelationship\Persistence\Map\SpyMerchantRelationshipTableMap;
use Orm\Zed\Merchant\Persistence\SpyMerchant;
use Orm\Zed\PriceProductMerchantRelationship\Persistence\SpyPriceProductMerchantRelationship;
use Orm\Zed\ProductList\Persistence\SpyProductList;
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
 * Base class that represents a query for the 'spy_merchant_relationship' table.
 *
 *
 *
 * @method     ChildSpyMerchantRelationshipQuery orderByIdMerchantRelationship($order = Criteria::ASC) Order by the id_merchant_relationship column
 * @method     ChildSpyMerchantRelationshipQuery orderByFkCompanyBusinessUnit($order = Criteria::ASC) Order by the fk_company_business_unit column
 * @method     ChildSpyMerchantRelationshipQuery orderByFkMerchant($order = Criteria::ASC) Order by the fk_merchant column
 * @method     ChildSpyMerchantRelationshipQuery orderByMerchantRelationshipKey($order = Criteria::ASC) Order by the merchant_relationship_key column
 * @method     ChildSpyMerchantRelationshipQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildSpyMerchantRelationshipQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ChildSpyMerchantRelationshipQuery groupByIdMerchantRelationship() Group by the id_merchant_relationship column
 * @method     ChildSpyMerchantRelationshipQuery groupByFkCompanyBusinessUnit() Group by the fk_company_business_unit column
 * @method     ChildSpyMerchantRelationshipQuery groupByFkMerchant() Group by the fk_merchant column
 * @method     ChildSpyMerchantRelationshipQuery groupByMerchantRelationshipKey() Group by the merchant_relationship_key column
 * @method     ChildSpyMerchantRelationshipQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildSpyMerchantRelationshipQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ChildSpyMerchantRelationshipQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyMerchantRelationshipQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyMerchantRelationshipQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyMerchantRelationshipQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyMerchantRelationshipQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyMerchantRelationshipQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyMerchantRelationshipQuery leftJoinMerchant($relationAlias = null) Adds a LEFT JOIN clause to the query using the Merchant relation
 * @method     ChildSpyMerchantRelationshipQuery rightJoinMerchant($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Merchant relation
 * @method     ChildSpyMerchantRelationshipQuery innerJoinMerchant($relationAlias = null) Adds a INNER JOIN clause to the query using the Merchant relation
 *
 * @method     ChildSpyMerchantRelationshipQuery joinWithMerchant($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Merchant relation
 *
 * @method     ChildSpyMerchantRelationshipQuery leftJoinWithMerchant() Adds a LEFT JOIN clause and with to the query using the Merchant relation
 * @method     ChildSpyMerchantRelationshipQuery rightJoinWithMerchant() Adds a RIGHT JOIN clause and with to the query using the Merchant relation
 * @method     ChildSpyMerchantRelationshipQuery innerJoinWithMerchant() Adds a INNER JOIN clause and with to the query using the Merchant relation
 *
 * @method     ChildSpyMerchantRelationshipQuery leftJoinCompanyBusinessUnit($relationAlias = null) Adds a LEFT JOIN clause to the query using the CompanyBusinessUnit relation
 * @method     ChildSpyMerchantRelationshipQuery rightJoinCompanyBusinessUnit($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CompanyBusinessUnit relation
 * @method     ChildSpyMerchantRelationshipQuery innerJoinCompanyBusinessUnit($relationAlias = null) Adds a INNER JOIN clause to the query using the CompanyBusinessUnit relation
 *
 * @method     ChildSpyMerchantRelationshipQuery joinWithCompanyBusinessUnit($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the CompanyBusinessUnit relation
 *
 * @method     ChildSpyMerchantRelationshipQuery leftJoinWithCompanyBusinessUnit() Adds a LEFT JOIN clause and with to the query using the CompanyBusinessUnit relation
 * @method     ChildSpyMerchantRelationshipQuery rightJoinWithCompanyBusinessUnit() Adds a RIGHT JOIN clause and with to the query using the CompanyBusinessUnit relation
 * @method     ChildSpyMerchantRelationshipQuery innerJoinWithCompanyBusinessUnit() Adds a INNER JOIN clause and with to the query using the CompanyBusinessUnit relation
 *
 * @method     ChildSpyMerchantRelationshipQuery leftJoinSpyMerchantRelationshipToCompanyBusinessUnit($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyMerchantRelationshipToCompanyBusinessUnit relation
 * @method     ChildSpyMerchantRelationshipQuery rightJoinSpyMerchantRelationshipToCompanyBusinessUnit($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyMerchantRelationshipToCompanyBusinessUnit relation
 * @method     ChildSpyMerchantRelationshipQuery innerJoinSpyMerchantRelationshipToCompanyBusinessUnit($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyMerchantRelationshipToCompanyBusinessUnit relation
 *
 * @method     ChildSpyMerchantRelationshipQuery joinWithSpyMerchantRelationshipToCompanyBusinessUnit($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyMerchantRelationshipToCompanyBusinessUnit relation
 *
 * @method     ChildSpyMerchantRelationshipQuery leftJoinWithSpyMerchantRelationshipToCompanyBusinessUnit() Adds a LEFT JOIN clause and with to the query using the SpyMerchantRelationshipToCompanyBusinessUnit relation
 * @method     ChildSpyMerchantRelationshipQuery rightJoinWithSpyMerchantRelationshipToCompanyBusinessUnit() Adds a RIGHT JOIN clause and with to the query using the SpyMerchantRelationshipToCompanyBusinessUnit relation
 * @method     ChildSpyMerchantRelationshipQuery innerJoinWithSpyMerchantRelationshipToCompanyBusinessUnit() Adds a INNER JOIN clause and with to the query using the SpyMerchantRelationshipToCompanyBusinessUnit relation
 *
 * @method     ChildSpyMerchantRelationshipQuery leftJoinSpyMerchantRelationshipSalesOrderThreshold($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyMerchantRelationshipSalesOrderThreshold relation
 * @method     ChildSpyMerchantRelationshipQuery rightJoinSpyMerchantRelationshipSalesOrderThreshold($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyMerchantRelationshipSalesOrderThreshold relation
 * @method     ChildSpyMerchantRelationshipQuery innerJoinSpyMerchantRelationshipSalesOrderThreshold($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyMerchantRelationshipSalesOrderThreshold relation
 *
 * @method     ChildSpyMerchantRelationshipQuery joinWithSpyMerchantRelationshipSalesOrderThreshold($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyMerchantRelationshipSalesOrderThreshold relation
 *
 * @method     ChildSpyMerchantRelationshipQuery leftJoinWithSpyMerchantRelationshipSalesOrderThreshold() Adds a LEFT JOIN clause and with to the query using the SpyMerchantRelationshipSalesOrderThreshold relation
 * @method     ChildSpyMerchantRelationshipQuery rightJoinWithSpyMerchantRelationshipSalesOrderThreshold() Adds a RIGHT JOIN clause and with to the query using the SpyMerchantRelationshipSalesOrderThreshold relation
 * @method     ChildSpyMerchantRelationshipQuery innerJoinWithSpyMerchantRelationshipSalesOrderThreshold() Adds a INNER JOIN clause and with to the query using the SpyMerchantRelationshipSalesOrderThreshold relation
 *
 * @method     ChildSpyMerchantRelationshipQuery leftJoinPriceProductMerchantRelationship($relationAlias = null) Adds a LEFT JOIN clause to the query using the PriceProductMerchantRelationship relation
 * @method     ChildSpyMerchantRelationshipQuery rightJoinPriceProductMerchantRelationship($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PriceProductMerchantRelationship relation
 * @method     ChildSpyMerchantRelationshipQuery innerJoinPriceProductMerchantRelationship($relationAlias = null) Adds a INNER JOIN clause to the query using the PriceProductMerchantRelationship relation
 *
 * @method     ChildSpyMerchantRelationshipQuery joinWithPriceProductMerchantRelationship($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the PriceProductMerchantRelationship relation
 *
 * @method     ChildSpyMerchantRelationshipQuery leftJoinWithPriceProductMerchantRelationship() Adds a LEFT JOIN clause and with to the query using the PriceProductMerchantRelationship relation
 * @method     ChildSpyMerchantRelationshipQuery rightJoinWithPriceProductMerchantRelationship() Adds a RIGHT JOIN clause and with to the query using the PriceProductMerchantRelationship relation
 * @method     ChildSpyMerchantRelationshipQuery innerJoinWithPriceProductMerchantRelationship() Adds a INNER JOIN clause and with to the query using the PriceProductMerchantRelationship relation
 *
 * @method     ChildSpyMerchantRelationshipQuery leftJoinSpyProductList($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyProductList relation
 * @method     ChildSpyMerchantRelationshipQuery rightJoinSpyProductList($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyProductList relation
 * @method     ChildSpyMerchantRelationshipQuery innerJoinSpyProductList($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyProductList relation
 *
 * @method     ChildSpyMerchantRelationshipQuery joinWithSpyProductList($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyProductList relation
 *
 * @method     ChildSpyMerchantRelationshipQuery leftJoinWithSpyProductList() Adds a LEFT JOIN clause and with to the query using the SpyProductList relation
 * @method     ChildSpyMerchantRelationshipQuery rightJoinWithSpyProductList() Adds a RIGHT JOIN clause and with to the query using the SpyProductList relation
 * @method     ChildSpyMerchantRelationshipQuery innerJoinWithSpyProductList() Adds a INNER JOIN clause and with to the query using the SpyProductList relation
 *
 * @method     \Orm\Zed\Merchant\Persistence\SpyMerchantQuery|\Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnitQuery|\Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationshipToCompanyBusinessUnitQuery|\Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThresholdQuery|\Orm\Zed\PriceProductMerchantRelationship\Persistence\SpyPriceProductMerchantRelationshipQuery|\Orm\Zed\ProductList\Persistence\SpyProductListQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyMerchantRelationship|null findOne(ConnectionInterface $con = null) Return the first ChildSpyMerchantRelationship matching the query
 * @method     ChildSpyMerchantRelationship findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyMerchantRelationship matching the query, or a new ChildSpyMerchantRelationship object populated from the query conditions when no match is found
 *
 * @method     ChildSpyMerchantRelationship|null findOneByIdMerchantRelationship(int $id_merchant_relationship) Return the first ChildSpyMerchantRelationship filtered by the id_merchant_relationship column
 * @method     ChildSpyMerchantRelationship|null findOneByFkCompanyBusinessUnit(int $fk_company_business_unit) Return the first ChildSpyMerchantRelationship filtered by the fk_company_business_unit column
 * @method     ChildSpyMerchantRelationship|null findOneByFkMerchant(int $fk_merchant) Return the first ChildSpyMerchantRelationship filtered by the fk_merchant column
 * @method     ChildSpyMerchantRelationship|null findOneByMerchantRelationshipKey(string $merchant_relationship_key) Return the first ChildSpyMerchantRelationship filtered by the merchant_relationship_key column
 * @method     ChildSpyMerchantRelationship|null findOneByCreatedAt(string $created_at) Return the first ChildSpyMerchantRelationship filtered by the created_at column
 * @method     ChildSpyMerchantRelationship|null findOneByUpdatedAt(string $updated_at) Return the first ChildSpyMerchantRelationship filtered by the updated_at column *

 * @method     ChildSpyMerchantRelationship requirePk($key, ConnectionInterface $con = null) Return the ChildSpyMerchantRelationship by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyMerchantRelationship requireOne(ConnectionInterface $con = null) Return the first ChildSpyMerchantRelationship matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyMerchantRelationship requireOneByIdMerchantRelationship(int $id_merchant_relationship) Return the first ChildSpyMerchantRelationship filtered by the id_merchant_relationship column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyMerchantRelationship requireOneByFkCompanyBusinessUnit(int $fk_company_business_unit) Return the first ChildSpyMerchantRelationship filtered by the fk_company_business_unit column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyMerchantRelationship requireOneByFkMerchant(int $fk_merchant) Return the first ChildSpyMerchantRelationship filtered by the fk_merchant column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyMerchantRelationship requireOneByMerchantRelationshipKey(string $merchant_relationship_key) Return the first ChildSpyMerchantRelationship filtered by the merchant_relationship_key column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyMerchantRelationship requireOneByCreatedAt(string $created_at) Return the first ChildSpyMerchantRelationship filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyMerchantRelationship requireOneByUpdatedAt(string $updated_at) Return the first ChildSpyMerchantRelationship filtered by the updated_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyMerchantRelationship[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyMerchantRelationship objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyMerchantRelationship> find(ConnectionInterface $con = null) Return ChildSpyMerchantRelationship objects based on current ModelCriteria
 * @method     ChildSpyMerchantRelationship[]|ObjectCollection findByIdMerchantRelationship(int $id_merchant_relationship) Return ChildSpyMerchantRelationship objects filtered by the id_merchant_relationship column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyMerchantRelationship> findByIdMerchantRelationship(int $id_merchant_relationship) Return ChildSpyMerchantRelationship objects filtered by the id_merchant_relationship column
 * @method     ChildSpyMerchantRelationship[]|ObjectCollection findByFkCompanyBusinessUnit(int $fk_company_business_unit) Return ChildSpyMerchantRelationship objects filtered by the fk_company_business_unit column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyMerchantRelationship> findByFkCompanyBusinessUnit(int $fk_company_business_unit) Return ChildSpyMerchantRelationship objects filtered by the fk_company_business_unit column
 * @method     ChildSpyMerchantRelationship[]|ObjectCollection findByFkMerchant(int $fk_merchant) Return ChildSpyMerchantRelationship objects filtered by the fk_merchant column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyMerchantRelationship> findByFkMerchant(int $fk_merchant) Return ChildSpyMerchantRelationship objects filtered by the fk_merchant column
 * @method     ChildSpyMerchantRelationship[]|ObjectCollection findByMerchantRelationshipKey(string $merchant_relationship_key) Return ChildSpyMerchantRelationship objects filtered by the merchant_relationship_key column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyMerchantRelationship> findByMerchantRelationshipKey(string $merchant_relationship_key) Return ChildSpyMerchantRelationship objects filtered by the merchant_relationship_key column
 * @method     ChildSpyMerchantRelationship[]|ObjectCollection findByCreatedAt(string $created_at) Return ChildSpyMerchantRelationship objects filtered by the created_at column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyMerchantRelationship> findByCreatedAt(string $created_at) Return ChildSpyMerchantRelationship objects filtered by the created_at column
 * @method     ChildSpyMerchantRelationship[]|ObjectCollection findByUpdatedAt(string $updated_at) Return ChildSpyMerchantRelationship objects filtered by the updated_at column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyMerchantRelationship> findByUpdatedAt(string $updated_at) Return ChildSpyMerchantRelationship objects filtered by the updated_at column
 * @method     ChildSpyMerchantRelationship[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyMerchantRelationship> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyMerchantRelationshipQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\MerchantRelationship\Persistence\Base\SpyMerchantRelationshipQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\MerchantRelationship\\Persistence\\SpyMerchantRelationship', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyMerchantRelationshipQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyMerchantRelationshipQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyMerchantRelationshipQuery) {
            return $criteria;
        }
        $query = new ChildSpyMerchantRelationshipQuery();
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
     * @return ChildSpyMerchantRelationship|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyMerchantRelationshipTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyMerchantRelationship A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_merchant_relationship, fk_company_business_unit, fk_merchant, merchant_relationship_key, created_at, updated_at FROM spy_merchant_relationship WHERE id_merchant_relationship = :p0';
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
            /** @var ChildSpyMerchantRelationship $obj */
            $obj = new ChildSpyMerchantRelationship();
            $obj->hydrate($row);
            SpyMerchantRelationshipTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyMerchantRelationship|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyMerchantRelationshipQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyMerchantRelationshipTableMap::COL_ID_MERCHANT_RELATIONSHIP, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyMerchantRelationshipQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyMerchantRelationshipTableMap::COL_ID_MERCHANT_RELATIONSHIP, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idMerchantRelationship Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdMerchantRelationship_Between(array $idMerchantRelationship)
    {
        return $this->filterByIdMerchantRelationship($idMerchantRelationship, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idMerchantRelationships Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdMerchantRelationship_In(array $idMerchantRelationships)
    {
        return $this->filterByIdMerchantRelationship($idMerchantRelationships, Criteria::IN);
    }

    /**
     * Filter the query on the id_merchant_relationship column
     *
     * Example usage:
     * <code>
     * $query->filterByIdMerchantRelationship(1234); // WHERE id_merchant_relationship = 1234
     * $query->filterByIdMerchantRelationship(array(12, 34), Criteria::IN); // WHERE id_merchant_relationship IN (12, 34)
     * $query->filterByIdMerchantRelationship(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_merchant_relationship > 12
     * </code>
     *
     * @param     mixed $idMerchantRelationship The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdMerchantRelationship($idMerchantRelationship = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idMerchantRelationship)) {
            $useMinMax = false;
            if (isset($idMerchantRelationship['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyMerchantRelationshipTableMap::COL_ID_MERCHANT_RELATIONSHIP, $idMerchantRelationship['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idMerchantRelationship['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyMerchantRelationshipTableMap::COL_ID_MERCHANT_RELATIONSHIP, $idMerchantRelationship['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idMerchantRelationship of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyMerchantRelationshipTableMap::COL_ID_MERCHANT_RELATIONSHIP, $idMerchantRelationship, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkCompanyBusinessUnit Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkCompanyBusinessUnit_Between(array $fkCompanyBusinessUnit)
    {
        return $this->filterByFkCompanyBusinessUnit($fkCompanyBusinessUnit, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkCompanyBusinessUnits Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkCompanyBusinessUnit_In(array $fkCompanyBusinessUnits)
    {
        return $this->filterByFkCompanyBusinessUnit($fkCompanyBusinessUnits, Criteria::IN);
    }

    /**
     * Filter the query on the fk_company_business_unit column
     *
     * Example usage:
     * <code>
     * $query->filterByFkCompanyBusinessUnit(1234); // WHERE fk_company_business_unit = 1234
     * $query->filterByFkCompanyBusinessUnit(array(12, 34), Criteria::IN); // WHERE fk_company_business_unit IN (12, 34)
     * $query->filterByFkCompanyBusinessUnit(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_company_business_unit > 12
     * </code>
     *
     * @see       filterByCompanyBusinessUnit()
     *
     * @param     mixed $fkCompanyBusinessUnit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkCompanyBusinessUnit($fkCompanyBusinessUnit = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkCompanyBusinessUnit)) {
            $useMinMax = false;
            if (isset($fkCompanyBusinessUnit['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyMerchantRelationshipTableMap::COL_FK_COMPANY_BUSINESS_UNIT, $fkCompanyBusinessUnit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkCompanyBusinessUnit['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyMerchantRelationshipTableMap::COL_FK_COMPANY_BUSINESS_UNIT, $fkCompanyBusinessUnit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkCompanyBusinessUnit of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyMerchantRelationshipTableMap::COL_FK_COMPANY_BUSINESS_UNIT, $fkCompanyBusinessUnit, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkMerchant Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkMerchant_Between(array $fkMerchant)
    {
        return $this->filterByFkMerchant($fkMerchant, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkMerchants Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkMerchant_In(array $fkMerchants)
    {
        return $this->filterByFkMerchant($fkMerchants, Criteria::IN);
    }

    /**
     * Filter the query on the fk_merchant column
     *
     * Example usage:
     * <code>
     * $query->filterByFkMerchant(1234); // WHERE fk_merchant = 1234
     * $query->filterByFkMerchant(array(12, 34), Criteria::IN); // WHERE fk_merchant IN (12, 34)
     * $query->filterByFkMerchant(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_merchant > 12
     * </code>
     *
     * @see       filterByMerchant()
     *
     * @param     mixed $fkMerchant The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkMerchant($fkMerchant = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkMerchant)) {
            $useMinMax = false;
            if (isset($fkMerchant['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyMerchantRelationshipTableMap::COL_FK_MERCHANT, $fkMerchant['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkMerchant['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyMerchantRelationshipTableMap::COL_FK_MERCHANT, $fkMerchant['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkMerchant of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyMerchantRelationshipTableMap::COL_FK_MERCHANT, $fkMerchant, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $merchantRelationshipKeys Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByMerchantRelationshipKey_In(array $merchantRelationshipKeys)
    {
        return $this->filterByMerchantRelationshipKey($merchantRelationshipKeys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $merchantRelationshipKey Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByMerchantRelationshipKey_Like($merchantRelationshipKey)
    {
        return $this->filterByMerchantRelationshipKey($merchantRelationshipKey, Criteria::LIKE);
    }

    /**
     * Filter the query on the merchant_relationship_key column
     *
     * Example usage:
     * <code>
     * $query->filterByMerchantRelationshipKey('fooValue');   // WHERE merchant_relationship_key = 'fooValue'
     * $query->filterByMerchantRelationshipKey('%fooValue%', Criteria::LIKE); // WHERE merchant_relationship_key LIKE '%fooValue%'
     * $query->filterByMerchantRelationshipKey([1, 'foo'], Criteria::IN); // WHERE merchant_relationship_key IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $merchantRelationshipKey The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByMerchantRelationshipKey($merchantRelationshipKey = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $merchantRelationshipKey = str_replace('*', '%', $merchantRelationshipKey);
        }

        if (is_array($merchantRelationshipKey) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$merchantRelationshipKey of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyMerchantRelationshipTableMap::COL_MERCHANT_RELATIONSHIP_KEY, $merchantRelationshipKey, $comparison);

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
                $this->addUsingAlias(SpyMerchantRelationshipTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyMerchantRelationshipTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$createdAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyMerchantRelationshipTableMap::COL_CREATED_AT, $createdAt, $comparison);

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
                $this->addUsingAlias(SpyMerchantRelationshipTableMap::COL_UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyMerchantRelationshipTableMap::COL_UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$updatedAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyMerchantRelationshipTableMap::COL_UPDATED_AT, $updatedAt, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\Merchant\Persistence\SpyMerchant object
     *
     * @param \Orm\Zed\Merchant\Persistence\SpyMerchant|ObjectCollection $spyMerchant The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyMerchantRelationshipQuery The current query, for fluid interface
     */
    public function filterByMerchant($spyMerchant, $comparison = null)
    {
        if ($spyMerchant instanceof \Orm\Zed\Merchant\Persistence\SpyMerchant) {
            return $this
                ->addUsingAlias(SpyMerchantRelationshipTableMap::COL_FK_MERCHANT, $spyMerchant->getIdMerchant(), $comparison);
        } elseif ($spyMerchant instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyMerchantRelationshipTableMap::COL_FK_MERCHANT, $spyMerchant->toKeyValue('PrimaryKey', 'IdMerchant'), $comparison);
        } else {
            throw new PropelException('filterByMerchant() only accepts arguments of type \Orm\Zed\Merchant\Persistence\SpyMerchant or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Merchant relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyMerchantRelationshipQuery The current query, for fluid interface
     */
    public function joinMerchant($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Merchant');

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
            $this->addJoinObject($join, 'Merchant');
        }

        return $this;
    }

    /**
     * Use the Merchant relation SpyMerchant object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Merchant\Persistence\SpyMerchantQuery A secondary query class using the current class as primary query
     */
    public function useMerchantQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinMerchant($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Merchant', '\Orm\Zed\Merchant\Persistence\SpyMerchantQuery');
    }

    /**
     * Use the Merchant relation SpyMerchant object
     *
     * @param callable(\Orm\Zed\Merchant\Persistence\SpyMerchantQuery):\Orm\Zed\Merchant\Persistence\SpyMerchantQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withMerchantQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useMerchantQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the Merchant relation to the SpyMerchant table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Merchant\Persistence\SpyMerchantQuery The inner query object of the EXISTS statement
     */
    public function useMerchantExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('Merchant', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the Merchant relation to the SpyMerchant table for a NOT EXISTS query.
     *
     * @see useMerchantExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Merchant\Persistence\SpyMerchantQuery The inner query object of the NOT EXISTS statement
     */
    public function useMerchantNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('Merchant', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnit object
     *
     * @param \Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnit|ObjectCollection $spyCompanyBusinessUnit The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyMerchantRelationshipQuery The current query, for fluid interface
     */
    public function filterByCompanyBusinessUnit($spyCompanyBusinessUnit, $comparison = null)
    {
        if ($spyCompanyBusinessUnit instanceof \Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnit) {
            return $this
                ->addUsingAlias(SpyMerchantRelationshipTableMap::COL_FK_COMPANY_BUSINESS_UNIT, $spyCompanyBusinessUnit->getIdCompanyBusinessUnit(), $comparison);
        } elseif ($spyCompanyBusinessUnit instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyMerchantRelationshipTableMap::COL_FK_COMPANY_BUSINESS_UNIT, $spyCompanyBusinessUnit->toKeyValue('PrimaryKey', 'IdCompanyBusinessUnit'), $comparison);
        } else {
            throw new PropelException('filterByCompanyBusinessUnit() only accepts arguments of type \Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnit or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CompanyBusinessUnit relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyMerchantRelationshipQuery The current query, for fluid interface
     */
    public function joinCompanyBusinessUnit($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CompanyBusinessUnit');

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
            $this->addJoinObject($join, 'CompanyBusinessUnit');
        }

        return $this;
    }

    /**
     * Use the CompanyBusinessUnit relation SpyCompanyBusinessUnit object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnitQuery A secondary query class using the current class as primary query
     */
    public function useCompanyBusinessUnitQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCompanyBusinessUnit($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CompanyBusinessUnit', '\Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnitQuery');
    }

    /**
     * Use the CompanyBusinessUnit relation SpyCompanyBusinessUnit object
     *
     * @param callable(\Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnitQuery):\Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnitQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withCompanyBusinessUnitQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useCompanyBusinessUnitQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the CompanyBusinessUnit relation to the SpyCompanyBusinessUnit table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnitQuery The inner query object of the EXISTS statement
     */
    public function useCompanyBusinessUnitExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('CompanyBusinessUnit', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the CompanyBusinessUnit relation to the SpyCompanyBusinessUnit table for a NOT EXISTS query.
     *
     * @see useCompanyBusinessUnitExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\CompanyBusinessUnit\Persistence\SpyCompanyBusinessUnitQuery The inner query object of the NOT EXISTS statement
     */
    public function useCompanyBusinessUnitNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('CompanyBusinessUnit', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationshipToCompanyBusinessUnit object
     *
     * @param \Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationshipToCompanyBusinessUnit|ObjectCollection $spyMerchantRelationshipToCompanyBusinessUnit the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyMerchantRelationshipQuery The current query, for fluid interface
     */
    public function filterBySpyMerchantRelationshipToCompanyBusinessUnit($spyMerchantRelationshipToCompanyBusinessUnit, $comparison = null)
    {
        if ($spyMerchantRelationshipToCompanyBusinessUnit instanceof \Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationshipToCompanyBusinessUnit) {
            return $this
                ->addUsingAlias(SpyMerchantRelationshipTableMap::COL_ID_MERCHANT_RELATIONSHIP, $spyMerchantRelationshipToCompanyBusinessUnit->getFkMerchantRelationship(), $comparison);
        } elseif ($spyMerchantRelationshipToCompanyBusinessUnit instanceof ObjectCollection) {
            return $this
                ->useSpyMerchantRelationshipToCompanyBusinessUnitQuery()
                ->filterByPrimaryKeys($spyMerchantRelationshipToCompanyBusinessUnit->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyMerchantRelationshipToCompanyBusinessUnit() only accepts arguments of type \Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationshipToCompanyBusinessUnit or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyMerchantRelationshipToCompanyBusinessUnit relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyMerchantRelationshipQuery The current query, for fluid interface
     */
    public function joinSpyMerchantRelationshipToCompanyBusinessUnit($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyMerchantRelationshipToCompanyBusinessUnit');

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
            $this->addJoinObject($join, 'SpyMerchantRelationshipToCompanyBusinessUnit');
        }

        return $this;
    }

    /**
     * Use the SpyMerchantRelationshipToCompanyBusinessUnit relation SpyMerchantRelationshipToCompanyBusinessUnit object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationshipToCompanyBusinessUnitQuery A secondary query class using the current class as primary query
     */
    public function useSpyMerchantRelationshipToCompanyBusinessUnitQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyMerchantRelationshipToCompanyBusinessUnit($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyMerchantRelationshipToCompanyBusinessUnit', '\Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationshipToCompanyBusinessUnitQuery');
    }

    /**
     * Use the SpyMerchantRelationshipToCompanyBusinessUnit relation SpyMerchantRelationshipToCompanyBusinessUnit object
     *
     * @param callable(\Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationshipToCompanyBusinessUnitQuery):\Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationshipToCompanyBusinessUnitQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyMerchantRelationshipToCompanyBusinessUnitQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyMerchantRelationshipToCompanyBusinessUnitQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyMerchantRelationshipToCompanyBusinessUnit table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationshipToCompanyBusinessUnitQuery The inner query object of the EXISTS statement
     */
    public function useSpyMerchantRelationshipToCompanyBusinessUnitExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyMerchantRelationshipToCompanyBusinessUnit', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyMerchantRelationshipToCompanyBusinessUnit table for a NOT EXISTS query.
     *
     * @see useSpyMerchantRelationshipToCompanyBusinessUnitExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationshipToCompanyBusinessUnitQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyMerchantRelationshipToCompanyBusinessUnitNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyMerchantRelationshipToCompanyBusinessUnit', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThreshold object
     *
     * @param \Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThreshold|ObjectCollection $spyMerchantRelationshipSalesOrderThreshold the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyMerchantRelationshipQuery The current query, for fluid interface
     */
    public function filterBySpyMerchantRelationshipSalesOrderThreshold($spyMerchantRelationshipSalesOrderThreshold, $comparison = null)
    {
        if ($spyMerchantRelationshipSalesOrderThreshold instanceof \Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThreshold) {
            return $this
                ->addUsingAlias(SpyMerchantRelationshipTableMap::COL_ID_MERCHANT_RELATIONSHIP, $spyMerchantRelationshipSalesOrderThreshold->getFkMerchantRelationship(), $comparison);
        } elseif ($spyMerchantRelationshipSalesOrderThreshold instanceof ObjectCollection) {
            return $this
                ->useSpyMerchantRelationshipSalesOrderThresholdQuery()
                ->filterByPrimaryKeys($spyMerchantRelationshipSalesOrderThreshold->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyMerchantRelationshipSalesOrderThreshold() only accepts arguments of type \Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThreshold or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyMerchantRelationshipSalesOrderThreshold relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyMerchantRelationshipQuery The current query, for fluid interface
     */
    public function joinSpyMerchantRelationshipSalesOrderThreshold($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyMerchantRelationshipSalesOrderThreshold');

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
            $this->addJoinObject($join, 'SpyMerchantRelationshipSalesOrderThreshold');
        }

        return $this;
    }

    /**
     * Use the SpyMerchantRelationshipSalesOrderThreshold relation SpyMerchantRelationshipSalesOrderThreshold object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThresholdQuery A secondary query class using the current class as primary query
     */
    public function useSpyMerchantRelationshipSalesOrderThresholdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyMerchantRelationshipSalesOrderThreshold($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyMerchantRelationshipSalesOrderThreshold', '\Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThresholdQuery');
    }

    /**
     * Use the SpyMerchantRelationshipSalesOrderThreshold relation SpyMerchantRelationshipSalesOrderThreshold object
     *
     * @param callable(\Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThresholdQuery):\Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThresholdQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyMerchantRelationshipSalesOrderThresholdQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyMerchantRelationshipSalesOrderThresholdQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyMerchantRelationshipSalesOrderThreshold table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThresholdQuery The inner query object of the EXISTS statement
     */
    public function useSpyMerchantRelationshipSalesOrderThresholdExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyMerchantRelationshipSalesOrderThreshold', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyMerchantRelationshipSalesOrderThreshold table for a NOT EXISTS query.
     *
     * @see useSpyMerchantRelationshipSalesOrderThresholdExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThresholdQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyMerchantRelationshipSalesOrderThresholdNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyMerchantRelationshipSalesOrderThreshold', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\PriceProductMerchantRelationship\Persistence\SpyPriceProductMerchantRelationship object
     *
     * @param \Orm\Zed\PriceProductMerchantRelationship\Persistence\SpyPriceProductMerchantRelationship|ObjectCollection $spyPriceProductMerchantRelationship the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyMerchantRelationshipQuery The current query, for fluid interface
     */
    public function filterByPriceProductMerchantRelationship($spyPriceProductMerchantRelationship, $comparison = null)
    {
        if ($spyPriceProductMerchantRelationship instanceof \Orm\Zed\PriceProductMerchantRelationship\Persistence\SpyPriceProductMerchantRelationship) {
            return $this
                ->addUsingAlias(SpyMerchantRelationshipTableMap::COL_ID_MERCHANT_RELATIONSHIP, $spyPriceProductMerchantRelationship->getFkMerchantRelationship(), $comparison);
        } elseif ($spyPriceProductMerchantRelationship instanceof ObjectCollection) {
            return $this
                ->usePriceProductMerchantRelationshipQuery()
                ->filterByPrimaryKeys($spyPriceProductMerchantRelationship->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPriceProductMerchantRelationship() only accepts arguments of type \Orm\Zed\PriceProductMerchantRelationship\Persistence\SpyPriceProductMerchantRelationship or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PriceProductMerchantRelationship relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyMerchantRelationshipQuery The current query, for fluid interface
     */
    public function joinPriceProductMerchantRelationship($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PriceProductMerchantRelationship');

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
            $this->addJoinObject($join, 'PriceProductMerchantRelationship');
        }

        return $this;
    }

    /**
     * Use the PriceProductMerchantRelationship relation SpyPriceProductMerchantRelationship object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\PriceProductMerchantRelationship\Persistence\SpyPriceProductMerchantRelationshipQuery A secondary query class using the current class as primary query
     */
    public function usePriceProductMerchantRelationshipQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPriceProductMerchantRelationship($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PriceProductMerchantRelationship', '\Orm\Zed\PriceProductMerchantRelationship\Persistence\SpyPriceProductMerchantRelationshipQuery');
    }

    /**
     * Use the PriceProductMerchantRelationship relation SpyPriceProductMerchantRelationship object
     *
     * @param callable(\Orm\Zed\PriceProductMerchantRelationship\Persistence\SpyPriceProductMerchantRelationshipQuery):\Orm\Zed\PriceProductMerchantRelationship\Persistence\SpyPriceProductMerchantRelationshipQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withPriceProductMerchantRelationshipQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->usePriceProductMerchantRelationshipQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the PriceProductMerchantRelationship relation to the SpyPriceProductMerchantRelationship table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\PriceProductMerchantRelationship\Persistence\SpyPriceProductMerchantRelationshipQuery The inner query object of the EXISTS statement
     */
    public function usePriceProductMerchantRelationshipExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('PriceProductMerchantRelationship', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the PriceProductMerchantRelationship relation to the SpyPriceProductMerchantRelationship table for a NOT EXISTS query.
     *
     * @see usePriceProductMerchantRelationshipExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\PriceProductMerchantRelationship\Persistence\SpyPriceProductMerchantRelationshipQuery The inner query object of the NOT EXISTS statement
     */
    public function usePriceProductMerchantRelationshipNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('PriceProductMerchantRelationship', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\ProductList\Persistence\SpyProductList object
     *
     * @param \Orm\Zed\ProductList\Persistence\SpyProductList|ObjectCollection $spyProductList the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyMerchantRelationshipQuery The current query, for fluid interface
     */
    public function filterBySpyProductList($spyProductList, $comparison = null)
    {
        if ($spyProductList instanceof \Orm\Zed\ProductList\Persistence\SpyProductList) {
            return $this
                ->addUsingAlias(SpyMerchantRelationshipTableMap::COL_ID_MERCHANT_RELATIONSHIP, $spyProductList->getFkMerchantRelationship(), $comparison);
        } elseif ($spyProductList instanceof ObjectCollection) {
            return $this
                ->useSpyProductListQuery()
                ->filterByPrimaryKeys($spyProductList->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyProductList() only accepts arguments of type \Orm\Zed\ProductList\Persistence\SpyProductList or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyProductList relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyMerchantRelationshipQuery The current query, for fluid interface
     */
    public function joinSpyProductList($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyProductList');

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
            $this->addJoinObject($join, 'SpyProductList');
        }

        return $this;
    }

    /**
     * Use the SpyProductList relation SpyProductList object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\ProductList\Persistence\SpyProductListQuery A secondary query class using the current class as primary query
     */
    public function useSpyProductListQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinSpyProductList($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyProductList', '\Orm\Zed\ProductList\Persistence\SpyProductListQuery');
    }

    /**
     * Use the SpyProductList relation SpyProductList object
     *
     * @param callable(\Orm\Zed\ProductList\Persistence\SpyProductListQuery):\Orm\Zed\ProductList\Persistence\SpyProductListQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyProductListQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useSpyProductListQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyProductList table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\ProductList\Persistence\SpyProductListQuery The inner query object of the EXISTS statement
     */
    public function useSpyProductListExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyProductList', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyProductList table for a NOT EXISTS query.
     *
     * @see useSpyProductListExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\ProductList\Persistence\SpyProductListQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyProductListNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyProductList', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Exclude object from result
     *
     * @param   ChildSpyMerchantRelationship $spyMerchantRelationship Object to remove from the list of results
     *
     * @return $this|ChildSpyMerchantRelationshipQuery The current query, for fluid interface
     */
    public function prune($spyMerchantRelationship = null)
    {
        if ($spyMerchantRelationship) {
            $this->addUsingAlias(SpyMerchantRelationshipTableMap::COL_ID_MERCHANT_RELATIONSHIP, $spyMerchantRelationship->getIdMerchantRelationship(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_merchant_relationship table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyMerchantRelationshipTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyMerchantRelationshipTableMap::clearInstancePool();
            SpyMerchantRelationshipTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyMerchantRelationshipTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyMerchantRelationshipTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyMerchantRelationshipTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyMerchantRelationshipTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    // timestampable behavior

    /**
     * Filter by the latest updated
     *
     * @param      int $nbDays Maximum age of the latest update in days
     *
     * @return     $this|ChildSpyMerchantRelationshipQuery The current query, for fluid interface
     */
    public function recentlyUpdated($nbDays = 7)
    {
        return $this->addUsingAlias(SpyMerchantRelationshipTableMap::COL_UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by update date desc
     *
     * @return     $this|ChildSpyMerchantRelationshipQuery The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        return $this->addDescendingOrderByColumn(SpyMerchantRelationshipTableMap::COL_UPDATED_AT);
    }

    /**
     * Order by update date asc
     *
     * @return     $this|ChildSpyMerchantRelationshipQuery The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        return $this->addAscendingOrderByColumn(SpyMerchantRelationshipTableMap::COL_UPDATED_AT);
    }

    /**
     * Order by create date desc
     *
     * @return     $this|ChildSpyMerchantRelationshipQuery The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        return $this->addDescendingOrderByColumn(SpyMerchantRelationshipTableMap::COL_CREATED_AT);
    }

    /**
     * Filter by the latest created
     *
     * @param      int $nbDays Maximum age of in days
     *
     * @return     $this|ChildSpyMerchantRelationshipQuery The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        return $this->addUsingAlias(SpyMerchantRelationshipTableMap::COL_CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by create date asc
     *
     * @return     $this|ChildSpyMerchantRelationshipQuery The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        return $this->addAscendingOrderByColumn(SpyMerchantRelationshipTableMap::COL_CREATED_AT);
    }

} // SpyMerchantRelationshipQuery
