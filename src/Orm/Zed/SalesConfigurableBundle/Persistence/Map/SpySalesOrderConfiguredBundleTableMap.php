<?php

namespace Orm\Zed\SalesConfigurableBundle\Persistence\Map;

use Orm\Zed\SalesConfigurableBundle\Persistence\SpySalesOrderConfiguredBundle;
use Orm\Zed\SalesConfigurableBundle\Persistence\SpySalesOrderConfiguredBundleQuery;
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
 * This class defines the structure of the 'spy_sales_order_configured_bundle' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpySalesOrderConfiguredBundleTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.Orm.Zed.SalesConfigurableBundle.Persistence.Map.SpySalesOrderConfiguredBundleTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'spy_sales_order_configured_bundle';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Orm\\Zed\\SalesConfigurableBundle\\Persistence\\SpySalesOrderConfiguredBundle';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'src.Orm.Zed.SalesConfigurableBundle.Persistence.SpySalesOrderConfiguredBundle';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 7;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 7;

    /**
     * the column name for the id_sales_order_configured_bundle field
     */
    const COL_ID_SALES_ORDER_CONFIGURED_BUNDLE = 'spy_sales_order_configured_bundle.id_sales_order_configured_bundle';

    /**
     * the column name for the configurable_bundle_template_uuid field
     */
    const COL_CONFIGURABLE_BUNDLE_TEMPLATE_UUID = 'spy_sales_order_configured_bundle.configurable_bundle_template_uuid';

    /**
     * the column name for the name field
     */
    const COL_NAME = 'spy_sales_order_configured_bundle.name';

    /**
     * the column name for the note field
     */
    const COL_NOTE = 'spy_sales_order_configured_bundle.note';

    /**
     * the column name for the quantity field
     */
    const COL_QUANTITY = 'spy_sales_order_configured_bundle.quantity';

    /**
     * the column name for the created_at field
     */
    const COL_CREATED_AT = 'spy_sales_order_configured_bundle.created_at';

    /**
     * the column name for the updated_at field
     */
    const COL_UPDATED_AT = 'spy_sales_order_configured_bundle.updated_at';

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
        self::TYPE_PHPNAME       => array('IdSalesOrderConfiguredBundle', 'ConfigurableBundleTemplateUuid', 'Name', 'Note', 'Quantity', 'CreatedAt', 'UpdatedAt', ),
        self::TYPE_CAMELNAME     => array('idSalesOrderConfiguredBundle', 'configurableBundleTemplateUuid', 'name', 'note', 'quantity', 'createdAt', 'updatedAt', ),
        self::TYPE_COLNAME       => array(SpySalesOrderConfiguredBundleTableMap::COL_ID_SALES_ORDER_CONFIGURED_BUNDLE, SpySalesOrderConfiguredBundleTableMap::COL_CONFIGURABLE_BUNDLE_TEMPLATE_UUID, SpySalesOrderConfiguredBundleTableMap::COL_NAME, SpySalesOrderConfiguredBundleTableMap::COL_NOTE, SpySalesOrderConfiguredBundleTableMap::COL_QUANTITY, SpySalesOrderConfiguredBundleTableMap::COL_CREATED_AT, SpySalesOrderConfiguredBundleTableMap::COL_UPDATED_AT, ),
        self::TYPE_FIELDNAME     => array('id_sales_order_configured_bundle', 'configurable_bundle_template_uuid', 'name', 'note', 'quantity', 'created_at', 'updated_at', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('IdSalesOrderConfiguredBundle' => 0, 'ConfigurableBundleTemplateUuid' => 1, 'Name' => 2, 'Note' => 3, 'Quantity' => 4, 'CreatedAt' => 5, 'UpdatedAt' => 6, ),
        self::TYPE_CAMELNAME     => array('idSalesOrderConfiguredBundle' => 0, 'configurableBundleTemplateUuid' => 1, 'name' => 2, 'note' => 3, 'quantity' => 4, 'createdAt' => 5, 'updatedAt' => 6, ),
        self::TYPE_COLNAME       => array(SpySalesOrderConfiguredBundleTableMap::COL_ID_SALES_ORDER_CONFIGURED_BUNDLE => 0, SpySalesOrderConfiguredBundleTableMap::COL_CONFIGURABLE_BUNDLE_TEMPLATE_UUID => 1, SpySalesOrderConfiguredBundleTableMap::COL_NAME => 2, SpySalesOrderConfiguredBundleTableMap::COL_NOTE => 3, SpySalesOrderConfiguredBundleTableMap::COL_QUANTITY => 4, SpySalesOrderConfiguredBundleTableMap::COL_CREATED_AT => 5, SpySalesOrderConfiguredBundleTableMap::COL_UPDATED_AT => 6, ),
        self::TYPE_FIELDNAME     => array('id_sales_order_configured_bundle' => 0, 'configurable_bundle_template_uuid' => 1, 'name' => 2, 'note' => 3, 'quantity' => 4, 'created_at' => 5, 'updated_at' => 6, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [
        'IdSalesOrderConfiguredBundle' => 'ID_SALES_ORDER_CONFIGURED_BUNDLE',
        'SpySalesOrderConfiguredBundle.IdSalesOrderConfiguredBundle' => 'ID_SALES_ORDER_CONFIGURED_BUNDLE',
        'idSalesOrderConfiguredBundle' => 'ID_SALES_ORDER_CONFIGURED_BUNDLE',
        'spySalesOrderConfiguredBundle.idSalesOrderConfiguredBundle' => 'ID_SALES_ORDER_CONFIGURED_BUNDLE',
        'SpySalesOrderConfiguredBundleTableMap::COL_ID_SALES_ORDER_CONFIGURED_BUNDLE' => 'ID_SALES_ORDER_CONFIGURED_BUNDLE',
        'COL_ID_SALES_ORDER_CONFIGURED_BUNDLE' => 'ID_SALES_ORDER_CONFIGURED_BUNDLE',
        'id_sales_order_configured_bundle' => 'ID_SALES_ORDER_CONFIGURED_BUNDLE',
        'spy_sales_order_configured_bundle.id_sales_order_configured_bundle' => 'ID_SALES_ORDER_CONFIGURED_BUNDLE',
        'ConfigurableBundleTemplateUuid' => 'CONFIGURABLE_BUNDLE_TEMPLATE_UUID',
        'SpySalesOrderConfiguredBundle.ConfigurableBundleTemplateUuid' => 'CONFIGURABLE_BUNDLE_TEMPLATE_UUID',
        'configurableBundleTemplateUuid' => 'CONFIGURABLE_BUNDLE_TEMPLATE_UUID',
        'spySalesOrderConfiguredBundle.configurableBundleTemplateUuid' => 'CONFIGURABLE_BUNDLE_TEMPLATE_UUID',
        'SpySalesOrderConfiguredBundleTableMap::COL_CONFIGURABLE_BUNDLE_TEMPLATE_UUID' => 'CONFIGURABLE_BUNDLE_TEMPLATE_UUID',
        'COL_CONFIGURABLE_BUNDLE_TEMPLATE_UUID' => 'CONFIGURABLE_BUNDLE_TEMPLATE_UUID',
        'configurable_bundle_template_uuid' => 'CONFIGURABLE_BUNDLE_TEMPLATE_UUID',
        'spy_sales_order_configured_bundle.configurable_bundle_template_uuid' => 'CONFIGURABLE_BUNDLE_TEMPLATE_UUID',
        'Name' => 'NAME',
        'SpySalesOrderConfiguredBundle.Name' => 'NAME',
        'name' => 'NAME',
        'spySalesOrderConfiguredBundle.name' => 'NAME',
        'SpySalesOrderConfiguredBundleTableMap::COL_NAME' => 'NAME',
        'COL_NAME' => 'NAME',
        'spy_sales_order_configured_bundle.name' => 'NAME',
        'Note' => 'NOTE',
        'SpySalesOrderConfiguredBundle.Note' => 'NOTE',
        'note' => 'NOTE',
        'spySalesOrderConfiguredBundle.note' => 'NOTE',
        'SpySalesOrderConfiguredBundleTableMap::COL_NOTE' => 'NOTE',
        'COL_NOTE' => 'NOTE',
        'spy_sales_order_configured_bundle.note' => 'NOTE',
        'Quantity' => 'QUANTITY',
        'SpySalesOrderConfiguredBundle.Quantity' => 'QUANTITY',
        'quantity' => 'QUANTITY',
        'spySalesOrderConfiguredBundle.quantity' => 'QUANTITY',
        'SpySalesOrderConfiguredBundleTableMap::COL_QUANTITY' => 'QUANTITY',
        'COL_QUANTITY' => 'QUANTITY',
        'spy_sales_order_configured_bundle.quantity' => 'QUANTITY',
        'CreatedAt' => 'CREATED_AT',
        'SpySalesOrderConfiguredBundle.CreatedAt' => 'CREATED_AT',
        'createdAt' => 'CREATED_AT',
        'spySalesOrderConfiguredBundle.createdAt' => 'CREATED_AT',
        'SpySalesOrderConfiguredBundleTableMap::COL_CREATED_AT' => 'CREATED_AT',
        'COL_CREATED_AT' => 'CREATED_AT',
        'created_at' => 'CREATED_AT',
        'spy_sales_order_configured_bundle.created_at' => 'CREATED_AT',
        'UpdatedAt' => 'UPDATED_AT',
        'SpySalesOrderConfiguredBundle.UpdatedAt' => 'UPDATED_AT',
        'updatedAt' => 'UPDATED_AT',
        'spySalesOrderConfiguredBundle.updatedAt' => 'UPDATED_AT',
        'SpySalesOrderConfiguredBundleTableMap::COL_UPDATED_AT' => 'UPDATED_AT',
        'COL_UPDATED_AT' => 'UPDATED_AT',
        'updated_at' => 'UPDATED_AT',
        'spy_sales_order_configured_bundle.updated_at' => 'UPDATED_AT',
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
        $this->setName('spy_sales_order_configured_bundle');
        $this->setPhpName('SpySalesOrderConfiguredBundle');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Orm\\Zed\\SalesConfigurableBundle\\Persistence\\SpySalesOrderConfiguredBundle');
        $this->setPackage('src.Orm.Zed.SalesConfigurableBundle.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_sales_order_configured_bundle_pk_seq');
        // columns
        $this->addPrimaryKey('id_sales_order_configured_bundle', 'IdSalesOrderConfiguredBundle', 'INTEGER', true, null, null);
        $this->addColumn('configurable_bundle_template_uuid', 'ConfigurableBundleTemplateUuid', 'VARCHAR', true, 255, null);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 255, null);
        $this->addColumn('note', 'Note', 'VARCHAR', false, 255, null);
        $this->addColumn('quantity', 'Quantity', 'INTEGER', true, null, 1);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', false, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('SpySalesOrderConfiguredBundleItem', '\\Orm\\Zed\\SalesConfigurableBundle\\Persistence\\SpySalesOrderConfiguredBundleItem', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_sales_order_configured_bundle',
    1 => ':id_sales_order_configured_bundle',
  ),
), null, null, 'SpySalesOrderConfiguredBundleItems', false);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesOrderConfiguredBundle', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesOrderConfiguredBundle', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesOrderConfiguredBundle', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesOrderConfiguredBundle', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesOrderConfiguredBundle', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesOrderConfiguredBundle', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdSalesOrderConfiguredBundle', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpySalesOrderConfiguredBundleTableMap::CLASS_DEFAULT : SpySalesOrderConfiguredBundleTableMap::OM_CLASS;
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
     * @return array           (SpySalesOrderConfiguredBundle object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SpySalesOrderConfiguredBundleTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpySalesOrderConfiguredBundleTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpySalesOrderConfiguredBundleTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpySalesOrderConfiguredBundleTableMap::OM_CLASS;
            /** @var SpySalesOrderConfiguredBundle $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpySalesOrderConfiguredBundleTableMap::addInstanceToPool($obj, $key);
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
            $key = SpySalesOrderConfiguredBundleTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpySalesOrderConfiguredBundleTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpySalesOrderConfiguredBundle $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpySalesOrderConfiguredBundleTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpySalesOrderConfiguredBundleTableMap::COL_ID_SALES_ORDER_CONFIGURED_BUNDLE);
            $criteria->addSelectColumn(SpySalesOrderConfiguredBundleTableMap::COL_CONFIGURABLE_BUNDLE_TEMPLATE_UUID);
            $criteria->addSelectColumn(SpySalesOrderConfiguredBundleTableMap::COL_NAME);
            $criteria->addSelectColumn(SpySalesOrderConfiguredBundleTableMap::COL_NOTE);
            $criteria->addSelectColumn(SpySalesOrderConfiguredBundleTableMap::COL_QUANTITY);
            $criteria->addSelectColumn(SpySalesOrderConfiguredBundleTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(SpySalesOrderConfiguredBundleTableMap::COL_UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id_sales_order_configured_bundle');
            $criteria->addSelectColumn($alias . '.configurable_bundle_template_uuid');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.note');
            $criteria->addSelectColumn($alias . '.quantity');
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
            $criteria->removeSelectColumn(SpySalesOrderConfiguredBundleTableMap::COL_ID_SALES_ORDER_CONFIGURED_BUNDLE);
            $criteria->removeSelectColumn(SpySalesOrderConfiguredBundleTableMap::COL_CONFIGURABLE_BUNDLE_TEMPLATE_UUID);
            $criteria->removeSelectColumn(SpySalesOrderConfiguredBundleTableMap::COL_NAME);
            $criteria->removeSelectColumn(SpySalesOrderConfiguredBundleTableMap::COL_NOTE);
            $criteria->removeSelectColumn(SpySalesOrderConfiguredBundleTableMap::COL_QUANTITY);
            $criteria->removeSelectColumn(SpySalesOrderConfiguredBundleTableMap::COL_CREATED_AT);
            $criteria->removeSelectColumn(SpySalesOrderConfiguredBundleTableMap::COL_UPDATED_AT);
        } else {
            $criteria->removeSelectColumn($alias . '.id_sales_order_configured_bundle');
            $criteria->removeSelectColumn($alias . '.configurable_bundle_template_uuid');
            $criteria->removeSelectColumn($alias . '.name');
            $criteria->removeSelectColumn($alias . '.note');
            $criteria->removeSelectColumn($alias . '.quantity');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpySalesOrderConfiguredBundleTableMap::DATABASE_NAME)->getTable(SpySalesOrderConfiguredBundleTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpySalesOrderConfiguredBundle or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SpySalesOrderConfiguredBundle object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpySalesOrderConfiguredBundleTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\SalesConfigurableBundle\Persistence\SpySalesOrderConfiguredBundle) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpySalesOrderConfiguredBundleTableMap::DATABASE_NAME);
            $criteria->add(SpySalesOrderConfiguredBundleTableMap::COL_ID_SALES_ORDER_CONFIGURED_BUNDLE, (array) $values, Criteria::IN);
        }

        $query = SpySalesOrderConfiguredBundleQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpySalesOrderConfiguredBundleTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpySalesOrderConfiguredBundleTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_sales_order_configured_bundle table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SpySalesOrderConfiguredBundleQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpySalesOrderConfiguredBundle or Criteria object.
     *
     * @param mixed               $criteria Criteria or SpySalesOrderConfiguredBundle object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpySalesOrderConfiguredBundleTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpySalesOrderConfiguredBundle object
        }

        if ($criteria->containsKey(SpySalesOrderConfiguredBundleTableMap::COL_ID_SALES_ORDER_CONFIGURED_BUNDLE) && $criteria->keyContainsValue(SpySalesOrderConfiguredBundleTableMap::COL_ID_SALES_ORDER_CONFIGURED_BUNDLE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpySalesOrderConfiguredBundleTableMap::COL_ID_SALES_ORDER_CONFIGURED_BUNDLE.')');
        }


        // Set the correct dbName
        $query = SpySalesOrderConfiguredBundleQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SpySalesOrderConfiguredBundleTableMap
