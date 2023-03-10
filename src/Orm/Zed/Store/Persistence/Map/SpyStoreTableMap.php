<?php

namespace Orm\Zed\Store\Persistence\Map;

use Orm\Zed\Category\Persistence\Map\SpyCategoryStoreTableMap;
use Orm\Zed\Store\Persistence\SpyStore;
use Orm\Zed\Store\Persistence\SpyStoreQuery;
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
 * This class defines the structure of the 'spy_store' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyStoreTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.Orm.Zed.Store.Persistence.Map.SpyStoreTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'spy_store';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Orm\\Zed\\Store\\Persistence\\SpyStore';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'src.Orm.Zed.Store.Persistence.SpyStore';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 3;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 3;

    /**
     * the column name for the id_store field
     */
    const COL_ID_STORE = 'spy_store.id_store';

    /**
     * the column name for the name field
     */
    const COL_NAME = 'spy_store.name';

    /**
     * the column name for the store_reference field
     */
    const COL_STORE_REFERENCE = 'spy_store.store_reference';

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
        self::TYPE_PHPNAME       => array('IdStore', 'Name', 'StoreReference', ),
        self::TYPE_CAMELNAME     => array('idStore', 'name', 'storeReference', ),
        self::TYPE_COLNAME       => array(SpyStoreTableMap::COL_ID_STORE, SpyStoreTableMap::COL_NAME, SpyStoreTableMap::COL_STORE_REFERENCE, ),
        self::TYPE_FIELDNAME     => array('id_store', 'name', 'store_reference', ),
        self::TYPE_NUM           => array(0, 1, 2, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('IdStore' => 0, 'Name' => 1, 'StoreReference' => 2, ),
        self::TYPE_CAMELNAME     => array('idStore' => 0, 'name' => 1, 'storeReference' => 2, ),
        self::TYPE_COLNAME       => array(SpyStoreTableMap::COL_ID_STORE => 0, SpyStoreTableMap::COL_NAME => 1, SpyStoreTableMap::COL_STORE_REFERENCE => 2, ),
        self::TYPE_FIELDNAME     => array('id_store' => 0, 'name' => 1, 'store_reference' => 2, ),
        self::TYPE_NUM           => array(0, 1, 2, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [
        'IdStore' => 'ID_STORE',
        'SpyStore.IdStore' => 'ID_STORE',
        'idStore' => 'ID_STORE',
        'spyStore.idStore' => 'ID_STORE',
        'SpyStoreTableMap::COL_ID_STORE' => 'ID_STORE',
        'COL_ID_STORE' => 'ID_STORE',
        'id_store' => 'ID_STORE',
        'spy_store.id_store' => 'ID_STORE',
        'Name' => 'NAME',
        'SpyStore.Name' => 'NAME',
        'name' => 'NAME',
        'spyStore.name' => 'NAME',
        'SpyStoreTableMap::COL_NAME' => 'NAME',
        'COL_NAME' => 'NAME',
        'spy_store.name' => 'NAME',
        'StoreReference' => 'STORE_REFERENCE',
        'SpyStore.StoreReference' => 'STORE_REFERENCE',
        'storeReference' => 'STORE_REFERENCE',
        'spyStore.storeReference' => 'STORE_REFERENCE',
        'SpyStoreTableMap::COL_STORE_REFERENCE' => 'STORE_REFERENCE',
        'COL_STORE_REFERENCE' => 'STORE_REFERENCE',
        'store_reference' => 'STORE_REFERENCE',
        'spy_store.store_reference' => 'STORE_REFERENCE',
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
        $this->setName('spy_store');
        $this->setPhpName('SpyStore');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Orm\\Zed\\Store\\Persistence\\SpyStore');
        $this->setPackage('src.Orm.Zed.Store.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_store_pk_seq');
        // columns
        $this->addPrimaryKey('id_store', 'IdStore', 'INTEGER', true, null, null);
        $this->addColumn('name', 'Name', 'VARCHAR', false, 255, null);
        $this->addColumn('store_reference', 'StoreReference', 'VARCHAR', false, 255, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('SpyAssetStore', '\\Orm\\Zed\\Asset\\Persistence\\SpyAssetStore', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_store',
    1 => ':id_store',
  ),
), null, null, 'SpyAssetStores', false);
        $this->addRelation('AvailabilityAbstract', '\\Orm\\Zed\\Availability\\Persistence\\SpyAvailabilityAbstract', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_store',
    1 => ':id_store',
  ),
), null, null, 'AvailabilityAbstracts', false);
        $this->addRelation('Availability', '\\Orm\\Zed\\Availability\\Persistence\\SpyAvailability', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_store',
    1 => ':id_store',
  ),
), null, null, 'Availabilities', false);
        $this->addRelation('SpyAvailabilityNotificationSubscription', '\\Orm\\Zed\\AvailabilityNotification\\Persistence\\SpyAvailabilityNotificationSubscription', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_store',
    1 => ':id_store',
  ),
), null, null, 'SpyAvailabilityNotificationSubscriptions', false);
        $this->addRelation('SpyCategoryStore', '\\Orm\\Zed\\Category\\Persistence\\SpyCategoryStore', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_store',
    1 => ':id_store',
  ),
), 'CASCADE', null, 'SpyCategoryStores', false);
        $this->addRelation('SpyCmsPageStore', '\\Orm\\Zed\\Cms\\Persistence\\SpyCmsPageStore', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_store',
    1 => ':id_store',
  ),
), null, null, 'SpyCmsPageStores', false);
        $this->addRelation('SpyCmsBlockStore', '\\Orm\\Zed\\CmsBlock\\Persistence\\SpyCmsBlockStore', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_store',
    1 => ':id_store',
  ),
), null, null, 'SpyCmsBlockStores', false);
        $this->addRelation('SpyCompanyStore', '\\Orm\\Zed\\Company\\Persistence\\SpyCompanyStore', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_store',
    1 => ':id_store',
  ),
), null, null, 'SpyCompanyStores', false);
        $this->addRelation('Discount', '\\Orm\\Zed\\Discount\\Persistence\\SpyDiscount', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_store',
    1 => ':id_store',
  ),
), null, null, 'Discounts', false);
        $this->addRelation('SpyDiscountStore', '\\Orm\\Zed\\Discount\\Persistence\\SpyDiscountStore', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_store',
    1 => ':id_store',
  ),
), null, null, 'SpyDiscountStores', false);
        $this->addRelation('SpyMerchantStore', '\\Orm\\Zed\\Merchant\\Persistence\\SpyMerchantStore', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_store',
    1 => ':id_store',
  ),
), null, null, 'SpyMerchantStores', false);
        $this->addRelation('SpyMerchantRelationshipSalesOrderThreshold', '\\Orm\\Zed\\MerchantRelationshipSalesOrderThreshold\\Persistence\\SpyMerchantRelationshipSalesOrderThreshold', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_store',
    1 => ':id_store',
  ),
), null, null, 'SpyMerchantRelationshipSalesOrderThresholds', false);
        $this->addRelation('OmsProductReservation', '\\Orm\\Zed\\Oms\\Persistence\\SpyOmsProductReservation', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_store',
    1 => ':id_store',
  ),
), null, null, 'OmsProductReservations', false);
        $this->addRelation('SpyPaymentMethodStore', '\\Orm\\Zed\\Payment\\Persistence\\SpyPaymentMethodStore', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_store',
    1 => ':id_store',
  ),
), null, null, 'SpyPaymentMethodStores', false);
        $this->addRelation('PriceProductStore', '\\Orm\\Zed\\PriceProduct\\Persistence\\SpyPriceProductStore', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_store',
    1 => ':id_store',
  ),
), null, null, 'PriceProductStores', false);
        $this->addRelation('PriceProductSchedule', '\\Orm\\Zed\\PriceProductSchedule\\Persistence\\SpyPriceProductSchedule', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_store',
    1 => ':id_store',
  ),
), null, null, 'PriceProductSchedules', false);
        $this->addRelation('SpyProductAbstractStore', '\\Orm\\Zed\\Product\\Persistence\\SpyProductAbstractStore', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_store',
    1 => ':id_store',
  ),
), null, null, 'SpyProductAbstractStores', false);
        $this->addRelation('ProductLabelStore', '\\Orm\\Zed\\ProductLabel\\Persistence\\SpyProductLabelStore', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_store',
    1 => ':id_store',
  ),
), null, null, 'ProductLabelStores', false);
        $this->addRelation('SpyProductMeasurementSalesUnitStore', '\\Orm\\Zed\\ProductMeasurementUnit\\Persistence\\SpyProductMeasurementSalesUnitStore', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_store',
    1 => ':id_store',
  ),
), null, null, 'SpyProductMeasurementSalesUnitStores', false);
        $this->addRelation('ProductOptionValuePrice', '\\Orm\\Zed\\ProductOption\\Persistence\\SpyProductOptionValuePrice', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_store',
    1 => ':id_store',
  ),
), null, null, 'ProductOptionValuePrices', false);
        $this->addRelation('ProductRelationStore', '\\Orm\\Zed\\ProductRelation\\Persistence\\SpyProductRelationStore', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_store',
    1 => ':id_store',
  ),
), null, null, 'ProductRelationStores', false);
        $this->addRelation('SpyQuote', '\\Orm\\Zed\\Quote\\Persistence\\SpyQuote', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_store',
    1 => ':id_store',
  ),
), null, null, 'SpyQuotes', false);
        $this->addRelation('SpySalesOrderThreshold', '\\Orm\\Zed\\SalesOrderThreshold\\Persistence\\SpySalesOrderThreshold', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_store',
    1 => ':id_store',
  ),
), null, null, 'SpySalesOrderThresholds', false);
        $this->addRelation('ShipmentMethodPrice', '\\Orm\\Zed\\Shipment\\Persistence\\SpyShipmentMethodPrice', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_store',
    1 => ':id_store',
  ),
), null, null, 'ShipmentMethodPrices', false);
        $this->addRelation('ShipmentMethodStore', '\\Orm\\Zed\\Shipment\\Persistence\\SpyShipmentMethodStore', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_store',
    1 => ':id_store',
  ),
), null, null, 'ShipmentMethodStores', false);
        $this->addRelation('StockStore', '\\Orm\\Zed\\Stock\\Persistence\\SpyStockStore', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_store',
    1 => ':id_store',
  ),
), null, null, 'StockStores', false);
        $this->addRelation('TouchStorage', '\\Orm\\Zed\\Touch\\Persistence\\SpyTouchStorage', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_store',
    1 => ':id_store',
  ),
), null, null, 'TouchStorages', false);
        $this->addRelation('TouchSearch', '\\Orm\\Zed\\Touch\\Persistence\\SpyTouchSearch', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_store',
    1 => ':id_store',
  ),
), null, null, 'TouchSearches', false);
    } // buildRelations()

    /**
     * Method to invalidate the instance pool of all tables related to spy_store     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in related instance pools,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        SpyCategoryStoreTableMap::clearInstancePool();
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdStore', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdStore', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdStore', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdStore', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdStore', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdStore', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdStore', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyStoreTableMap::CLASS_DEFAULT : SpyStoreTableMap::OM_CLASS;
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
     * @return array           (SpyStore object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SpyStoreTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyStoreTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyStoreTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyStoreTableMap::OM_CLASS;
            /** @var SpyStore $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyStoreTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyStoreTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyStoreTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyStore $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyStoreTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyStoreTableMap::COL_ID_STORE);
            $criteria->addSelectColumn(SpyStoreTableMap::COL_NAME);
            $criteria->addSelectColumn(SpyStoreTableMap::COL_STORE_REFERENCE);
        } else {
            $criteria->addSelectColumn($alias . '.id_store');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.store_reference');
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
            $criteria->removeSelectColumn(SpyStoreTableMap::COL_ID_STORE);
            $criteria->removeSelectColumn(SpyStoreTableMap::COL_NAME);
            $criteria->removeSelectColumn(SpyStoreTableMap::COL_STORE_REFERENCE);
        } else {
            $criteria->removeSelectColumn($alias . '.id_store');
            $criteria->removeSelectColumn($alias . '.name');
            $criteria->removeSelectColumn($alias . '.store_reference');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyStoreTableMap::DATABASE_NAME)->getTable(SpyStoreTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyStore or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SpyStore object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyStoreTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\Store\Persistence\SpyStore) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyStoreTableMap::DATABASE_NAME);
            $criteria->add(SpyStoreTableMap::COL_ID_STORE, (array) $values, Criteria::IN);
        }

        $query = SpyStoreQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyStoreTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyStoreTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_store table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SpyStoreQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyStore or Criteria object.
     *
     * @param mixed               $criteria Criteria or SpyStore object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyStoreTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyStore object
        }

        if ($criteria->containsKey(SpyStoreTableMap::COL_ID_STORE) && $criteria->keyContainsValue(SpyStoreTableMap::COL_ID_STORE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpyStoreTableMap::COL_ID_STORE.')');
        }


        // Set the correct dbName
        $query = SpyStoreQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SpyStoreTableMap
