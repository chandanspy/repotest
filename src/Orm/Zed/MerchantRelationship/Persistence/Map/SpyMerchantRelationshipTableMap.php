<?php

namespace Orm\Zed\MerchantRelationship\Persistence\Map;

use Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationship;
use Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationshipQuery;
use Orm\Zed\PriceProductMerchantRelationship\Persistence\Map\SpyPriceProductMerchantRelationshipTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'spy_merchant_relationship' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyMerchantRelationshipTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.Orm.Zed.MerchantRelationship.Persistence.Map.SpyMerchantRelationshipTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'spy_merchant_relationship';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Orm\\Zed\\MerchantRelationship\\Persistence\\SpyMerchantRelationship';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'src.Orm.Zed.MerchantRelationship.Persistence.SpyMerchantRelationship';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 6;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 6;

    /**
     * the column name for the id_merchant_relationship field
     */
    const COL_ID_MERCHANT_RELATIONSHIP = 'spy_merchant_relationship.id_merchant_relationship';

    /**
     * the column name for the fk_company_business_unit field
     */
    const COL_FK_COMPANY_BUSINESS_UNIT = 'spy_merchant_relationship.fk_company_business_unit';

    /**
     * the column name for the fk_merchant field
     */
    const COL_FK_MERCHANT = 'spy_merchant_relationship.fk_merchant';

    /**
     * the column name for the merchant_relationship_key field
     */
    const COL_MERCHANT_RELATIONSHIP_KEY = 'spy_merchant_relationship.merchant_relationship_key';

    /**
     * the column name for the created_at field
     */
    const COL_CREATED_AT = 'spy_merchant_relationship.created_at';

    /**
     * the column name for the updated_at field
     */
    const COL_UPDATED_AT = 'spy_merchant_relationship.updated_at';

    /**
     * The default string format for model objects of the related table
     */
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        self::TYPE_PHPNAME       => array('IdMerchantRelationship', 'FkCompanyBusinessUnit', 'FkMerchant', 'MerchantRelationshipKey', 'CreatedAt', 'UpdatedAt', ),
        self::TYPE_CAMELNAME     => array('idMerchantRelationship', 'fkCompanyBusinessUnit', 'fkMerchant', 'merchantRelationshipKey', 'createdAt', 'updatedAt', ),
        self::TYPE_COLNAME       => array(SpyMerchantRelationshipTableMap::COL_ID_MERCHANT_RELATIONSHIP, SpyMerchantRelationshipTableMap::COL_FK_COMPANY_BUSINESS_UNIT, SpyMerchantRelationshipTableMap::COL_FK_MERCHANT, SpyMerchantRelationshipTableMap::COL_MERCHANT_RELATIONSHIP_KEY, SpyMerchantRelationshipTableMap::COL_CREATED_AT, SpyMerchantRelationshipTableMap::COL_UPDATED_AT, ),
        self::TYPE_FIELDNAME     => array('id_merchant_relationship', 'fk_company_business_unit', 'fk_merchant', 'merchant_relationship_key', 'created_at', 'updated_at', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('IdMerchantRelationship' => 0, 'FkCompanyBusinessUnit' => 1, 'FkMerchant' => 2, 'MerchantRelationshipKey' => 3, 'CreatedAt' => 4, 'UpdatedAt' => 5, ),
        self::TYPE_CAMELNAME     => array('idMerchantRelationship' => 0, 'fkCompanyBusinessUnit' => 1, 'fkMerchant' => 2, 'merchantRelationshipKey' => 3, 'createdAt' => 4, 'updatedAt' => 5, ),
        self::TYPE_COLNAME       => array(SpyMerchantRelationshipTableMap::COL_ID_MERCHANT_RELATIONSHIP => 0, SpyMerchantRelationshipTableMap::COL_FK_COMPANY_BUSINESS_UNIT => 1, SpyMerchantRelationshipTableMap::COL_FK_MERCHANT => 2, SpyMerchantRelationshipTableMap::COL_MERCHANT_RELATIONSHIP_KEY => 3, SpyMerchantRelationshipTableMap::COL_CREATED_AT => 4, SpyMerchantRelationshipTableMap::COL_UPDATED_AT => 5, ),
        self::TYPE_FIELDNAME     => array('id_merchant_relationship' => 0, 'fk_company_business_unit' => 1, 'fk_merchant' => 2, 'merchant_relationship_key' => 3, 'created_at' => 4, 'updated_at' => 5, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [
        'IdMerchantRelationship' => 'ID_MERCHANT_RELATIONSHIP',
        'SpyMerchantRelationship.IdMerchantRelationship' => 'ID_MERCHANT_RELATIONSHIP',
        'idMerchantRelationship' => 'ID_MERCHANT_RELATIONSHIP',
        'spyMerchantRelationship.idMerchantRelationship' => 'ID_MERCHANT_RELATIONSHIP',
        'SpyMerchantRelationshipTableMap::COL_ID_MERCHANT_RELATIONSHIP' => 'ID_MERCHANT_RELATIONSHIP',
        'COL_ID_MERCHANT_RELATIONSHIP' => 'ID_MERCHANT_RELATIONSHIP',
        'id_merchant_relationship' => 'ID_MERCHANT_RELATIONSHIP',
        'spy_merchant_relationship.id_merchant_relationship' => 'ID_MERCHANT_RELATIONSHIP',
        'FkCompanyBusinessUnit' => 'FK_COMPANY_BUSINESS_UNIT',
        'SpyMerchantRelationship.FkCompanyBusinessUnit' => 'FK_COMPANY_BUSINESS_UNIT',
        'fkCompanyBusinessUnit' => 'FK_COMPANY_BUSINESS_UNIT',
        'spyMerchantRelationship.fkCompanyBusinessUnit' => 'FK_COMPANY_BUSINESS_UNIT',
        'SpyMerchantRelationshipTableMap::COL_FK_COMPANY_BUSINESS_UNIT' => 'FK_COMPANY_BUSINESS_UNIT',
        'COL_FK_COMPANY_BUSINESS_UNIT' => 'FK_COMPANY_BUSINESS_UNIT',
        'fk_company_business_unit' => 'FK_COMPANY_BUSINESS_UNIT',
        'spy_merchant_relationship.fk_company_business_unit' => 'FK_COMPANY_BUSINESS_UNIT',
        'FkMerchant' => 'FK_MERCHANT',
        'SpyMerchantRelationship.FkMerchant' => 'FK_MERCHANT',
        'fkMerchant' => 'FK_MERCHANT',
        'spyMerchantRelationship.fkMerchant' => 'FK_MERCHANT',
        'SpyMerchantRelationshipTableMap::COL_FK_MERCHANT' => 'FK_MERCHANT',
        'COL_FK_MERCHANT' => 'FK_MERCHANT',
        'fk_merchant' => 'FK_MERCHANT',
        'spy_merchant_relationship.fk_merchant' => 'FK_MERCHANT',
        'MerchantRelationshipKey' => 'MERCHANT_RELATIONSHIP_KEY',
        'SpyMerchantRelationship.MerchantRelationshipKey' => 'MERCHANT_RELATIONSHIP_KEY',
        'merchantRelationshipKey' => 'MERCHANT_RELATIONSHIP_KEY',
        'spyMerchantRelationship.merchantRelationshipKey' => 'MERCHANT_RELATIONSHIP_KEY',
        'SpyMerchantRelationshipTableMap::COL_MERCHANT_RELATIONSHIP_KEY' => 'MERCHANT_RELATIONSHIP_KEY',
        'COL_MERCHANT_RELATIONSHIP_KEY' => 'MERCHANT_RELATIONSHIP_KEY',
        'merchant_relationship_key' => 'MERCHANT_RELATIONSHIP_KEY',
        'spy_merchant_relationship.merchant_relationship_key' => 'MERCHANT_RELATIONSHIP_KEY',
        'CreatedAt' => 'CREATED_AT',
        'SpyMerchantRelationship.CreatedAt' => 'CREATED_AT',
        'createdAt' => 'CREATED_AT',
        'spyMerchantRelationship.createdAt' => 'CREATED_AT',
        'SpyMerchantRelationshipTableMap::COL_CREATED_AT' => 'CREATED_AT',
        'COL_CREATED_AT' => 'CREATED_AT',
        'created_at' => 'CREATED_AT',
        'spy_merchant_relationship.created_at' => 'CREATED_AT',
        'UpdatedAt' => 'UPDATED_AT',
        'SpyMerchantRelationship.UpdatedAt' => 'UPDATED_AT',
        'updatedAt' => 'UPDATED_AT',
        'spyMerchantRelationship.updatedAt' => 'UPDATED_AT',
        'SpyMerchantRelationshipTableMap::COL_UPDATED_AT' => 'UPDATED_AT',
        'COL_UPDATED_AT' => 'UPDATED_AT',
        'updated_at' => 'UPDATED_AT',
        'spy_merchant_relationship.updated_at' => 'UPDATED_AT',
    ];

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('spy_merchant_relationship');
        $this->setPhpName('SpyMerchantRelationship');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Orm\\Zed\\MerchantRelationship\\Persistence\\SpyMerchantRelationship');
        $this->setPackage('src.Orm.Zed.MerchantRelationship.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_merchant_relationship_pk_seq');
        // columns
        $this->addPrimaryKey('id_merchant_relationship', 'IdMerchantRelationship', 'INTEGER', true, null, null);
        $this->addForeignKey('fk_company_business_unit', 'FkCompanyBusinessUnit', 'INTEGER', 'spy_company_business_unit', 'id_company_business_unit', true, null, null);
        $this->addForeignKey('fk_merchant', 'FkMerchant', 'INTEGER', 'spy_merchant', 'id_merchant', true, null, null);
        $this->addColumn('merchant_relationship_key', 'MerchantRelationshipKey', 'VARCHAR', false, 255, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', false, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Merchant', '\\Orm\\Zed\\Merchant\\Persistence\\SpyMerchant', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_merchant',
    1 => ':id_merchant',
  ),
), 'CASCADE', null, null, false);
        $this->addRelation('CompanyBusinessUnit', '\\Orm\\Zed\\CompanyBusinessUnit\\Persistence\\SpyCompanyBusinessUnit', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_company_business_unit',
    1 => ':id_company_business_unit',
  ),
), 'CASCADE', null, null, false);
        $this->addRelation('SpyMerchantRelationshipToCompanyBusinessUnit', '\\Orm\\Zed\\MerchantRelationship\\Persistence\\SpyMerchantRelationshipToCompanyBusinessUnit', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_merchant_relationship',
    1 => ':id_merchant_relationship',
  ),
), 'CASCADE', null, 'SpyMerchantRelationshipToCompanyBusinessUnits', false);
        $this->addRelation('SpyMerchantRelationshipSalesOrderThreshold', '\\Orm\\Zed\\MerchantRelationshipSalesOrderThreshold\\Persistence\\SpyMerchantRelationshipSalesOrderThreshold', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_merchant_relationship',
    1 => ':id_merchant_relationship',
  ),
), null, null, 'SpyMerchantRelationshipSalesOrderThresholds', false);
        $this->addRelation('PriceProductMerchantRelationship', '\\Orm\\Zed\\PriceProductMerchantRelationship\\Persistence\\SpyPriceProductMerchantRelationship', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_merchant_relationship',
    1 => ':id_merchant_relationship',
  ),
), 'CASCADE', null, 'PriceProductMerchantRelationships', false);
        $this->addRelation('SpyProductList', '\\Orm\\Zed\\ProductList\\Persistence\\SpyProductList', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_merchant_relationship',
    1 => ':id_merchant_relationship',
  ),
), null, null, 'SpyProductLists', false);
    } // buildRelations()

    /**
     *
     * Gets the list of behaviors registered for this table
     *
     * @return array Associative array (name => parameters) of behaviors
     */
    public function getBehaviors()
    {
        return array(
            'timestampable' => ['create_column' => 'created_at', 'update_column' => 'updated_at', 'disable_created_at' => 'false', 'disable_updated_at' => 'false'],
        );
    } // getBehaviors()

    /**
     * Method to invalidate the instance pool of all tables related to spy_merchant_relationship     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in related instance pools,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        SpyMerchantRelationshipToCompanyBusinessUnitTableMap::clearInstancePool();
        SpyPriceProductMerchantRelationshipTableMap::clearInstancePool();
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return string The primary key hash of the row
     */
    public static function getPrimaryKeyHashFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdMerchantRelationship', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdMerchantRelationship', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdMerchantRelationship', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdMerchantRelationship', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdMerchantRelationship', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdMerchantRelationship', TableMap::TYPE_PHPNAME, $indexType)];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        return (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('IdMerchantRelationship', TableMap::TYPE_PHPNAME, $indexType)
        ];
    }

    /**
     * The class that the tableMap will make instances of.
     *
     * If $withPrefix is true, the returned path
     * uses a dot-path notation which is translated into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @param boolean $withPrefix Whether or not to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? SpyMerchantRelationshipTableMap::CLASS_DEFAULT : SpyMerchantRelationshipTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array  $row       row returned by DataFetcher->fetch().
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array           (SpyMerchantRelationship object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SpyMerchantRelationshipTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyMerchantRelationshipTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyMerchantRelationshipTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyMerchantRelationshipTableMap::OM_CLASS;
            /** @var SpyMerchantRelationship $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyMerchantRelationshipTableMap::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = SpyMerchantRelationshipTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyMerchantRelationshipTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyMerchantRelationship $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyMerchantRelationshipTableMap::addInstanceToPool($obj, $key);
            } // if key exists
        }

        return $results;
    }
    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param Criteria $criteria object containing the columns to add.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(SpyMerchantRelationshipTableMap::COL_ID_MERCHANT_RELATIONSHIP);
            $criteria->addSelectColumn(SpyMerchantRelationshipTableMap::COL_FK_COMPANY_BUSINESS_UNIT);
            $criteria->addSelectColumn(SpyMerchantRelationshipTableMap::COL_FK_MERCHANT);
            $criteria->addSelectColumn(SpyMerchantRelationshipTableMap::COL_MERCHANT_RELATIONSHIP_KEY);
            $criteria->addSelectColumn(SpyMerchantRelationshipTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(SpyMerchantRelationshipTableMap::COL_UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id_merchant_relationship');
            $criteria->addSelectColumn($alias . '.fk_company_business_unit');
            $criteria->addSelectColumn($alias . '.fk_merchant');
            $criteria->addSelectColumn($alias . '.merchant_relationship_key');
            $criteria->addSelectColumn($alias . '.created_at');
            $criteria->addSelectColumn($alias . '.updated_at');
        }
    }

    /**
     * Remove all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be removed as they are only loaded on demand.
     *
     * @param Criteria $criteria object containing the columns to remove.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function removeSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->removeSelectColumn(SpyMerchantRelationshipTableMap::COL_ID_MERCHANT_RELATIONSHIP);
            $criteria->removeSelectColumn(SpyMerchantRelationshipTableMap::COL_FK_COMPANY_BUSINESS_UNIT);
            $criteria->removeSelectColumn(SpyMerchantRelationshipTableMap::COL_FK_MERCHANT);
            $criteria->removeSelectColumn(SpyMerchantRelationshipTableMap::COL_MERCHANT_RELATIONSHIP_KEY);
            $criteria->removeSelectColumn(SpyMerchantRelationshipTableMap::COL_CREATED_AT);
            $criteria->removeSelectColumn(SpyMerchantRelationshipTableMap::COL_UPDATED_AT);
        } else {
            $criteria->removeSelectColumn($alias . '.id_merchant_relationship');
            $criteria->removeSelectColumn($alias . '.fk_company_business_unit');
            $criteria->removeSelectColumn($alias . '.fk_merchant');
            $criteria->removeSelectColumn($alias . '.merchant_relationship_key');
            $criteria->removeSelectColumn($alias . '.created_at');
            $criteria->removeSelectColumn($alias . '.updated_at');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getServiceContainer()->getDatabaseMap(SpyMerchantRelationshipTableMap::DATABASE_NAME)->getTable(SpyMerchantRelationshipTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyMerchantRelationship or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SpyMerchantRelationship object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param  ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ConnectionInterface $con = null)
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyMerchantRelationshipTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\MerchantRelationship\Persistence\SpyMerchantRelationship) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyMerchantRelationshipTableMap::DATABASE_NAME);
            $criteria->add(SpyMerchantRelationshipTableMap::COL_ID_MERCHANT_RELATIONSHIP, (array) $values, Criteria::IN);
        }

        $query = SpyMerchantRelationshipQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyMerchantRelationshipTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyMerchantRelationshipTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_merchant_relationship table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SpyMerchantRelationshipQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyMerchantRelationship or Criteria object.
     *
     * @param mixed               $criteria Criteria or SpyMerchantRelationship object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyMerchantRelationshipTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyMerchantRelationship object
        }

        if ($criteria->containsKey(SpyMerchantRelationshipTableMap::COL_ID_MERCHANT_RELATIONSHIP) && $criteria->keyContainsValue(SpyMerchantRelationshipTableMap::COL_ID_MERCHANT_RELATIONSHIP) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpyMerchantRelationshipTableMap::COL_ID_MERCHANT_RELATIONSHIP.')');
        }


        // Set the correct dbName
        $query = SpyMerchantRelationshipQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SpyMerchantRelationshipTableMap
