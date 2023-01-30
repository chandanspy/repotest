<?php

namespace Orm\Zed\Shipment\Persistence\Map;

use Orm\Zed\Shipment\Persistence\SpyShipmentMethod;
use Orm\Zed\Shipment\Persistence\SpyShipmentMethodQuery;
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
 * This class defines the structure of the 'spy_shipment_method' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyShipmentMethodTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.Orm.Zed.Shipment.Persistence.Map.SpyShipmentMethodTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'spy_shipment_method';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Orm\\Zed\\Shipment\\Persistence\\SpyShipmentMethod';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'src.Orm.Zed.Shipment.Persistence.SpyShipmentMethod';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 10;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 10;

    /**
     * the column name for the id_shipment_method field
     */
    const COL_ID_SHIPMENT_METHOD = 'spy_shipment_method.id_shipment_method';

    /**
     * the column name for the fk_shipment_carrier field
     */
    const COL_FK_SHIPMENT_CARRIER = 'spy_shipment_method.fk_shipment_carrier';

    /**
     * the column name for the fk_tax_set field
     */
    const COL_FK_TAX_SET = 'spy_shipment_method.fk_tax_set';

    /**
     * the column name for the availability_plugin field
     */
    const COL_AVAILABILITY_PLUGIN = 'spy_shipment_method.availability_plugin';

    /**
     * the column name for the default_price field
     */
    const COL_DEFAULT_PRICE = 'spy_shipment_method.default_price';

    /**
     * the column name for the delivery_time_plugin field
     */
    const COL_DELIVERY_TIME_PLUGIN = 'spy_shipment_method.delivery_time_plugin';

    /**
     * the column name for the is_active field
     */
    const COL_IS_ACTIVE = 'spy_shipment_method.is_active';

    /**
     * the column name for the name field
     */
    const COL_NAME = 'spy_shipment_method.name';

    /**
     * the column name for the price_plugin field
     */
    const COL_PRICE_PLUGIN = 'spy_shipment_method.price_plugin';

    /**
     * the column name for the shipment_method_key field
     */
    const COL_SHIPMENT_METHOD_KEY = 'spy_shipment_method.shipment_method_key';

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
        self::TYPE_PHPNAME       => array('IdShipmentMethod', 'FkShipmentCarrier', 'FkTaxSet', 'AvailabilityPlugin', 'DefaultPrice', 'DeliveryTimePlugin', 'IsActive', 'Name', 'PricePlugin', 'ShipmentMethodKey', ),
        self::TYPE_CAMELNAME     => array('idShipmentMethod', 'fkShipmentCarrier', 'fkTaxSet', 'availabilityPlugin', 'defaultPrice', 'deliveryTimePlugin', 'isActive', 'name', 'pricePlugin', 'shipmentMethodKey', ),
        self::TYPE_COLNAME       => array(SpyShipmentMethodTableMap::COL_ID_SHIPMENT_METHOD, SpyShipmentMethodTableMap::COL_FK_SHIPMENT_CARRIER, SpyShipmentMethodTableMap::COL_FK_TAX_SET, SpyShipmentMethodTableMap::COL_AVAILABILITY_PLUGIN, SpyShipmentMethodTableMap::COL_DEFAULT_PRICE, SpyShipmentMethodTableMap::COL_DELIVERY_TIME_PLUGIN, SpyShipmentMethodTableMap::COL_IS_ACTIVE, SpyShipmentMethodTableMap::COL_NAME, SpyShipmentMethodTableMap::COL_PRICE_PLUGIN, SpyShipmentMethodTableMap::COL_SHIPMENT_METHOD_KEY, ),
        self::TYPE_FIELDNAME     => array('id_shipment_method', 'fk_shipment_carrier', 'fk_tax_set', 'availability_plugin', 'default_price', 'delivery_time_plugin', 'is_active', 'name', 'price_plugin', 'shipment_method_key', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('IdShipmentMethod' => 0, 'FkShipmentCarrier' => 1, 'FkTaxSet' => 2, 'AvailabilityPlugin' => 3, 'DefaultPrice' => 4, 'DeliveryTimePlugin' => 5, 'IsActive' => 6, 'Name' => 7, 'PricePlugin' => 8, 'ShipmentMethodKey' => 9, ),
        self::TYPE_CAMELNAME     => array('idShipmentMethod' => 0, 'fkShipmentCarrier' => 1, 'fkTaxSet' => 2, 'availabilityPlugin' => 3, 'defaultPrice' => 4, 'deliveryTimePlugin' => 5, 'isActive' => 6, 'name' => 7, 'pricePlugin' => 8, 'shipmentMethodKey' => 9, ),
        self::TYPE_COLNAME       => array(SpyShipmentMethodTableMap::COL_ID_SHIPMENT_METHOD => 0, SpyShipmentMethodTableMap::COL_FK_SHIPMENT_CARRIER => 1, SpyShipmentMethodTableMap::COL_FK_TAX_SET => 2, SpyShipmentMethodTableMap::COL_AVAILABILITY_PLUGIN => 3, SpyShipmentMethodTableMap::COL_DEFAULT_PRICE => 4, SpyShipmentMethodTableMap::COL_DELIVERY_TIME_PLUGIN => 5, SpyShipmentMethodTableMap::COL_IS_ACTIVE => 6, SpyShipmentMethodTableMap::COL_NAME => 7, SpyShipmentMethodTableMap::COL_PRICE_PLUGIN => 8, SpyShipmentMethodTableMap::COL_SHIPMENT_METHOD_KEY => 9, ),
        self::TYPE_FIELDNAME     => array('id_shipment_method' => 0, 'fk_shipment_carrier' => 1, 'fk_tax_set' => 2, 'availability_plugin' => 3, 'default_price' => 4, 'delivery_time_plugin' => 5, 'is_active' => 6, 'name' => 7, 'price_plugin' => 8, 'shipment_method_key' => 9, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [
        'IdShipmentMethod' => 'ID_SHIPMENT_METHOD',
        'SpyShipmentMethod.IdShipmentMethod' => 'ID_SHIPMENT_METHOD',
        'idShipmentMethod' => 'ID_SHIPMENT_METHOD',
        'spyShipmentMethod.idShipmentMethod' => 'ID_SHIPMENT_METHOD',
        'SpyShipmentMethodTableMap::COL_ID_SHIPMENT_METHOD' => 'ID_SHIPMENT_METHOD',
        'COL_ID_SHIPMENT_METHOD' => 'ID_SHIPMENT_METHOD',
        'id_shipment_method' => 'ID_SHIPMENT_METHOD',
        'spy_shipment_method.id_shipment_method' => 'ID_SHIPMENT_METHOD',
        'FkShipmentCarrier' => 'FK_SHIPMENT_CARRIER',
        'SpyShipmentMethod.FkShipmentCarrier' => 'FK_SHIPMENT_CARRIER',
        'fkShipmentCarrier' => 'FK_SHIPMENT_CARRIER',
        'spyShipmentMethod.fkShipmentCarrier' => 'FK_SHIPMENT_CARRIER',
        'SpyShipmentMethodTableMap::COL_FK_SHIPMENT_CARRIER' => 'FK_SHIPMENT_CARRIER',
        'COL_FK_SHIPMENT_CARRIER' => 'FK_SHIPMENT_CARRIER',
        'fk_shipment_carrier' => 'FK_SHIPMENT_CARRIER',
        'spy_shipment_method.fk_shipment_carrier' => 'FK_SHIPMENT_CARRIER',
        'FkTaxSet' => 'FK_TAX_SET',
        'SpyShipmentMethod.FkTaxSet' => 'FK_TAX_SET',
        'fkTaxSet' => 'FK_TAX_SET',
        'spyShipmentMethod.fkTaxSet' => 'FK_TAX_SET',
        'SpyShipmentMethodTableMap::COL_FK_TAX_SET' => 'FK_TAX_SET',
        'COL_FK_TAX_SET' => 'FK_TAX_SET',
        'fk_tax_set' => 'FK_TAX_SET',
        'spy_shipment_method.fk_tax_set' => 'FK_TAX_SET',
        'AvailabilityPlugin' => 'AVAILABILITY_PLUGIN',
        'SpyShipmentMethod.AvailabilityPlugin' => 'AVAILABILITY_PLUGIN',
        'availabilityPlugin' => 'AVAILABILITY_PLUGIN',
        'spyShipmentMethod.availabilityPlugin' => 'AVAILABILITY_PLUGIN',
        'SpyShipmentMethodTableMap::COL_AVAILABILITY_PLUGIN' => 'AVAILABILITY_PLUGIN',
        'COL_AVAILABILITY_PLUGIN' => 'AVAILABILITY_PLUGIN',
        'availability_plugin' => 'AVAILABILITY_PLUGIN',
        'spy_shipment_method.availability_plugin' => 'AVAILABILITY_PLUGIN',
        'DefaultPrice' => 'DEFAULT_PRICE',
        'SpyShipmentMethod.DefaultPrice' => 'DEFAULT_PRICE',
        'defaultPrice' => 'DEFAULT_PRICE',
        'spyShipmentMethod.defaultPrice' => 'DEFAULT_PRICE',
        'SpyShipmentMethodTableMap::COL_DEFAULT_PRICE' => 'DEFAULT_PRICE',
        'COL_DEFAULT_PRICE' => 'DEFAULT_PRICE',
        'default_price' => 'DEFAULT_PRICE',
        'spy_shipment_method.default_price' => 'DEFAULT_PRICE',
        'DeliveryTimePlugin' => 'DELIVERY_TIME_PLUGIN',
        'SpyShipmentMethod.DeliveryTimePlugin' => 'DELIVERY_TIME_PLUGIN',
        'deliveryTimePlugin' => 'DELIVERY_TIME_PLUGIN',
        'spyShipmentMethod.deliveryTimePlugin' => 'DELIVERY_TIME_PLUGIN',
        'SpyShipmentMethodTableMap::COL_DELIVERY_TIME_PLUGIN' => 'DELIVERY_TIME_PLUGIN',
        'COL_DELIVERY_TIME_PLUGIN' => 'DELIVERY_TIME_PLUGIN',
        'delivery_time_plugin' => 'DELIVERY_TIME_PLUGIN',
        'spy_shipment_method.delivery_time_plugin' => 'DELIVERY_TIME_PLUGIN',
        'IsActive' => 'IS_ACTIVE',
        'SpyShipmentMethod.IsActive' => 'IS_ACTIVE',
        'isActive' => 'IS_ACTIVE',
        'spyShipmentMethod.isActive' => 'IS_ACTIVE',
        'SpyShipmentMethodTableMap::COL_IS_ACTIVE' => 'IS_ACTIVE',
        'COL_IS_ACTIVE' => 'IS_ACTIVE',
        'is_active' => 'IS_ACTIVE',
        'spy_shipment_method.is_active' => 'IS_ACTIVE',
        'Name' => 'NAME',
        'SpyShipmentMethod.Name' => 'NAME',
        'name' => 'NAME',
        'spyShipmentMethod.name' => 'NAME',
        'SpyShipmentMethodTableMap::COL_NAME' => 'NAME',
        'COL_NAME' => 'NAME',
        'spy_shipment_method.name' => 'NAME',
        'PricePlugin' => 'PRICE_PLUGIN',
        'SpyShipmentMethod.PricePlugin' => 'PRICE_PLUGIN',
        'pricePlugin' => 'PRICE_PLUGIN',
        'spyShipmentMethod.pricePlugin' => 'PRICE_PLUGIN',
        'SpyShipmentMethodTableMap::COL_PRICE_PLUGIN' => 'PRICE_PLUGIN',
        'COL_PRICE_PLUGIN' => 'PRICE_PLUGIN',
        'price_plugin' => 'PRICE_PLUGIN',
        'spy_shipment_method.price_plugin' => 'PRICE_PLUGIN',
        'ShipmentMethodKey' => 'SHIPMENT_METHOD_KEY',
        'SpyShipmentMethod.ShipmentMethodKey' => 'SHIPMENT_METHOD_KEY',
        'shipmentMethodKey' => 'SHIPMENT_METHOD_KEY',
        'spyShipmentMethod.shipmentMethodKey' => 'SHIPMENT_METHOD_KEY',
        'SpyShipmentMethodTableMap::COL_SHIPMENT_METHOD_KEY' => 'SHIPMENT_METHOD_KEY',
        'COL_SHIPMENT_METHOD_KEY' => 'SHIPMENT_METHOD_KEY',
        'shipment_method_key' => 'SHIPMENT_METHOD_KEY',
        'spy_shipment_method.shipment_method_key' => 'SHIPMENT_METHOD_KEY',
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
        $this->setName('spy_shipment_method');
        $this->setPhpName('SpyShipmentMethod');
        $this->setIdentifierQuoting(true);
        $this->setClassName('\\Orm\\Zed\\Shipment\\Persistence\\SpyShipmentMethod');
        $this->setPackage('src.Orm.Zed.Shipment.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_shipment_method_pk_seq');
        // columns
        $this->addPrimaryKey('id_shipment_method', 'IdShipmentMethod', 'INTEGER', true, null, null);
        $this->addForeignKey('fk_shipment_carrier', 'FkShipmentCarrier', 'INTEGER', 'spy_shipment_carrier', 'id_shipment_carrier', true, null, null);
        $this->addForeignKey('fk_tax_set', 'FkTaxSet', 'INTEGER', 'spy_tax_set', 'id_tax_set', false, null, null);
        $this->addColumn('availability_plugin', 'AvailabilityPlugin', 'VARCHAR', false, 255, null);
        $this->addColumn('default_price', 'DefaultPrice', 'INTEGER', false, null, null);
        $this->addColumn('delivery_time_plugin', 'DeliveryTimePlugin', 'VARCHAR', false, 255, null);
        $this->addColumn('is_active', 'IsActive', 'BOOLEAN', true, 1, true);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 255, null);
        $this->addColumn('price_plugin', 'PricePlugin', 'VARCHAR', false, 255, null);
        $this->addColumn('shipment_method_key', 'ShipmentMethodKey', 'VARCHAR', false, 255, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('ShipmentCarrier', '\\Orm\\Zed\\Shipment\\Persistence\\SpyShipmentCarrier', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_shipment_carrier',
    1 => ':id_shipment_carrier',
  ),
), null, null, null, false);
        $this->addRelation('TaxSet', '\\Orm\\Zed\\Tax\\Persistence\\SpyTaxSet', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_tax_set',
    1 => ':id_tax_set',
  ),
), null, null, null, false);
        $this->addRelation('ShipmentMethodPrice', '\\Orm\\Zed\\Shipment\\Persistence\\SpyShipmentMethodPrice', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_shipment_method',
    1 => ':id_shipment_method',
  ),
), null, null, 'ShipmentMethodPrices', false);
        $this->addRelation('ShipmentMethodStore', '\\Orm\\Zed\\Shipment\\Persistence\\SpyShipmentMethodStore', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_shipment_method',
    1 => ':id_shipment_method',
  ),
), null, null, 'ShipmentMethodStores', false);
    } // buildRelations()

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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdShipmentMethod', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdShipmentMethod', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdShipmentMethod', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdShipmentMethod', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdShipmentMethod', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdShipmentMethod', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdShipmentMethod', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyShipmentMethodTableMap::CLASS_DEFAULT : SpyShipmentMethodTableMap::OM_CLASS;
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
     * @return array           (SpyShipmentMethod object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SpyShipmentMethodTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyShipmentMethodTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyShipmentMethodTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyShipmentMethodTableMap::OM_CLASS;
            /** @var SpyShipmentMethod $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyShipmentMethodTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyShipmentMethodTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyShipmentMethodTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyShipmentMethod $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyShipmentMethodTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyShipmentMethodTableMap::COL_ID_SHIPMENT_METHOD);
            $criteria->addSelectColumn(SpyShipmentMethodTableMap::COL_FK_SHIPMENT_CARRIER);
            $criteria->addSelectColumn(SpyShipmentMethodTableMap::COL_FK_TAX_SET);
            $criteria->addSelectColumn(SpyShipmentMethodTableMap::COL_AVAILABILITY_PLUGIN);
            $criteria->addSelectColumn(SpyShipmentMethodTableMap::COL_DEFAULT_PRICE);
            $criteria->addSelectColumn(SpyShipmentMethodTableMap::COL_DELIVERY_TIME_PLUGIN);
            $criteria->addSelectColumn(SpyShipmentMethodTableMap::COL_IS_ACTIVE);
            $criteria->addSelectColumn(SpyShipmentMethodTableMap::COL_NAME);
            $criteria->addSelectColumn(SpyShipmentMethodTableMap::COL_PRICE_PLUGIN);
            $criteria->addSelectColumn(SpyShipmentMethodTableMap::COL_SHIPMENT_METHOD_KEY);
        } else {
            $criteria->addSelectColumn($alias . '.id_shipment_method');
            $criteria->addSelectColumn($alias . '.fk_shipment_carrier');
            $criteria->addSelectColumn($alias . '.fk_tax_set');
            $criteria->addSelectColumn($alias . '.availability_plugin');
            $criteria->addSelectColumn($alias . '.default_price');
            $criteria->addSelectColumn($alias . '.delivery_time_plugin');
            $criteria->addSelectColumn($alias . '.is_active');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.price_plugin');
            $criteria->addSelectColumn($alias . '.shipment_method_key');
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
            $criteria->removeSelectColumn(SpyShipmentMethodTableMap::COL_ID_SHIPMENT_METHOD);
            $criteria->removeSelectColumn(SpyShipmentMethodTableMap::COL_FK_SHIPMENT_CARRIER);
            $criteria->removeSelectColumn(SpyShipmentMethodTableMap::COL_FK_TAX_SET);
            $criteria->removeSelectColumn(SpyShipmentMethodTableMap::COL_AVAILABILITY_PLUGIN);
            $criteria->removeSelectColumn(SpyShipmentMethodTableMap::COL_DEFAULT_PRICE);
            $criteria->removeSelectColumn(SpyShipmentMethodTableMap::COL_DELIVERY_TIME_PLUGIN);
            $criteria->removeSelectColumn(SpyShipmentMethodTableMap::COL_IS_ACTIVE);
            $criteria->removeSelectColumn(SpyShipmentMethodTableMap::COL_NAME);
            $criteria->removeSelectColumn(SpyShipmentMethodTableMap::COL_PRICE_PLUGIN);
            $criteria->removeSelectColumn(SpyShipmentMethodTableMap::COL_SHIPMENT_METHOD_KEY);
        } else {
            $criteria->removeSelectColumn($alias . '.id_shipment_method');
            $criteria->removeSelectColumn($alias . '.fk_shipment_carrier');
            $criteria->removeSelectColumn($alias . '.fk_tax_set');
            $criteria->removeSelectColumn($alias . '.availability_plugin');
            $criteria->removeSelectColumn($alias . '.default_price');
            $criteria->removeSelectColumn($alias . '.delivery_time_plugin');
            $criteria->removeSelectColumn($alias . '.is_active');
            $criteria->removeSelectColumn($alias . '.name');
            $criteria->removeSelectColumn($alias . '.price_plugin');
            $criteria->removeSelectColumn($alias . '.shipment_method_key');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyShipmentMethodTableMap::DATABASE_NAME)->getTable(SpyShipmentMethodTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyShipmentMethod or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SpyShipmentMethod object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyShipmentMethodTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\Shipment\Persistence\SpyShipmentMethod) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyShipmentMethodTableMap::DATABASE_NAME);
            $criteria->add(SpyShipmentMethodTableMap::COL_ID_SHIPMENT_METHOD, (array) $values, Criteria::IN);
        }

        $query = SpyShipmentMethodQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyShipmentMethodTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyShipmentMethodTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_shipment_method table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SpyShipmentMethodQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyShipmentMethod or Criteria object.
     *
     * @param mixed               $criteria Criteria or SpyShipmentMethod object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyShipmentMethodTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyShipmentMethod object
        }

        if ($criteria->containsKey(SpyShipmentMethodTableMap::COL_ID_SHIPMENT_METHOD) && $criteria->keyContainsValue(SpyShipmentMethodTableMap::COL_ID_SHIPMENT_METHOD) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpyShipmentMethodTableMap::COL_ID_SHIPMENT_METHOD.')');
        }


        // Set the correct dbName
        $query = SpyShipmentMethodQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SpyShipmentMethodTableMap
