<?php

namespace Orm\Zed\SalesReturn\Persistence\Map;

use Orm\Zed\SalesReturn\Persistence\SpySalesReturnItem;
use Orm\Zed\SalesReturn\Persistence\SpySalesReturnItemQuery;
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
 * This class defines the structure of the 'spy_sales_return_item' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpySalesReturnItemTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.Orm.Zed.SalesReturn.Persistence.Map.SpySalesReturnItemTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'spy_sales_return_item';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Orm\\Zed\\SalesReturn\\Persistence\\SpySalesReturnItem';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'src.Orm.Zed.SalesReturn.Persistence.SpySalesReturnItem';

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
     * the column name for the id_sales_return_item field
     */
    const COL_ID_SALES_RETURN_ITEM = 'spy_sales_return_item.id_sales_return_item';

    /**
     * the column name for the fk_sales_order_item field
     */
    const COL_FK_SALES_ORDER_ITEM = 'spy_sales_return_item.fk_sales_order_item';

    /**
     * the column name for the fk_sales_return field
     */
    const COL_FK_SALES_RETURN = 'spy_sales_return_item.fk_sales_return';

    /**
     * the column name for the reason field
     */
    const COL_REASON = 'spy_sales_return_item.reason';

    /**
     * the column name for the uuid field
     */
    const COL_UUID = 'spy_sales_return_item.uuid';

    /**
     * the column name for the created_at field
     */
    const COL_CREATED_AT = 'spy_sales_return_item.created_at';

    /**
     * the column name for the updated_at field
     */
    const COL_UPDATED_AT = 'spy_sales_return_item.updated_at';

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
        self::TYPE_PHPNAME       => array('IdSalesReturnItem', 'FkSalesOrderItem', 'FkSalesReturn', 'Reason', 'Uuid', 'CreatedAt', 'UpdatedAt', ),
        self::TYPE_CAMELNAME     => array('idSalesReturnItem', 'fkSalesOrderItem', 'fkSalesReturn', 'reason', 'uuid', 'createdAt', 'updatedAt', ),
        self::TYPE_COLNAME       => array(SpySalesReturnItemTableMap::COL_ID_SALES_RETURN_ITEM, SpySalesReturnItemTableMap::COL_FK_SALES_ORDER_ITEM, SpySalesReturnItemTableMap::COL_FK_SALES_RETURN, SpySalesReturnItemTableMap::COL_REASON, SpySalesReturnItemTableMap::COL_UUID, SpySalesReturnItemTableMap::COL_CREATED_AT, SpySalesReturnItemTableMap::COL_UPDATED_AT, ),
        self::TYPE_FIELDNAME     => array('id_sales_return_item', 'fk_sales_order_item', 'fk_sales_return', 'reason', 'uuid', 'created_at', 'updated_at', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('IdSalesReturnItem' => 0, 'FkSalesOrderItem' => 1, 'FkSalesReturn' => 2, 'Reason' => 3, 'Uuid' => 4, 'CreatedAt' => 5, 'UpdatedAt' => 6, ),
        self::TYPE_CAMELNAME     => array('idSalesReturnItem' => 0, 'fkSalesOrderItem' => 1, 'fkSalesReturn' => 2, 'reason' => 3, 'uuid' => 4, 'createdAt' => 5, 'updatedAt' => 6, ),
        self::TYPE_COLNAME       => array(SpySalesReturnItemTableMap::COL_ID_SALES_RETURN_ITEM => 0, SpySalesReturnItemTableMap::COL_FK_SALES_ORDER_ITEM => 1, SpySalesReturnItemTableMap::COL_FK_SALES_RETURN => 2, SpySalesReturnItemTableMap::COL_REASON => 3, SpySalesReturnItemTableMap::COL_UUID => 4, SpySalesReturnItemTableMap::COL_CREATED_AT => 5, SpySalesReturnItemTableMap::COL_UPDATED_AT => 6, ),
        self::TYPE_FIELDNAME     => array('id_sales_return_item' => 0, 'fk_sales_order_item' => 1, 'fk_sales_return' => 2, 'reason' => 3, 'uuid' => 4, 'created_at' => 5, 'updated_at' => 6, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [
        'IdSalesReturnItem' => 'ID_SALES_RETURN_ITEM',
        'SpySalesReturnItem.IdSalesReturnItem' => 'ID_SALES_RETURN_ITEM',
        'idSalesReturnItem' => 'ID_SALES_RETURN_ITEM',
        'spySalesReturnItem.idSalesReturnItem' => 'ID_SALES_RETURN_ITEM',
        'SpySalesReturnItemTableMap::COL_ID_SALES_RETURN_ITEM' => 'ID_SALES_RETURN_ITEM',
        'COL_ID_SALES_RETURN_ITEM' => 'ID_SALES_RETURN_ITEM',
        'id_sales_return_item' => 'ID_SALES_RETURN_ITEM',
        'spy_sales_return_item.id_sales_return_item' => 'ID_SALES_RETURN_ITEM',
        'FkSalesOrderItem' => 'FK_SALES_ORDER_ITEM',
        'SpySalesReturnItem.FkSalesOrderItem' => 'FK_SALES_ORDER_ITEM',
        'fkSalesOrderItem' => 'FK_SALES_ORDER_ITEM',
        'spySalesReturnItem.fkSalesOrderItem' => 'FK_SALES_ORDER_ITEM',
        'SpySalesReturnItemTableMap::COL_FK_SALES_ORDER_ITEM' => 'FK_SALES_ORDER_ITEM',
        'COL_FK_SALES_ORDER_ITEM' => 'FK_SALES_ORDER_ITEM',
        'fk_sales_order_item' => 'FK_SALES_ORDER_ITEM',
        'spy_sales_return_item.fk_sales_order_item' => 'FK_SALES_ORDER_ITEM',
        'FkSalesReturn' => 'FK_SALES_RETURN',
        'SpySalesReturnItem.FkSalesReturn' => 'FK_SALES_RETURN',
        'fkSalesReturn' => 'FK_SALES_RETURN',
        'spySalesReturnItem.fkSalesReturn' => 'FK_SALES_RETURN',
        'SpySalesReturnItemTableMap::COL_FK_SALES_RETURN' => 'FK_SALES_RETURN',
        'COL_FK_SALES_RETURN' => 'FK_SALES_RETURN',
        'fk_sales_return' => 'FK_SALES_RETURN',
        'spy_sales_return_item.fk_sales_return' => 'FK_SALES_RETURN',
        'Reason' => 'REASON',
        'SpySalesReturnItem.Reason' => 'REASON',
        'reason' => 'REASON',
        'spySalesReturnItem.reason' => 'REASON',
        'SpySalesReturnItemTableMap::COL_REASON' => 'REASON',
        'COL_REASON' => 'REASON',
        'spy_sales_return_item.reason' => 'REASON',
        'Uuid' => 'UUID',
        'SpySalesReturnItem.Uuid' => 'UUID',
        'uuid' => 'UUID',
        'spySalesReturnItem.uuid' => 'UUID',
        'SpySalesReturnItemTableMap::COL_UUID' => 'UUID',
        'COL_UUID' => 'UUID',
        'spy_sales_return_item.uuid' => 'UUID',
        'CreatedAt' => 'CREATED_AT',
        'SpySalesReturnItem.CreatedAt' => 'CREATED_AT',
        'createdAt' => 'CREATED_AT',
        'spySalesReturnItem.createdAt' => 'CREATED_AT',
        'SpySalesReturnItemTableMap::COL_CREATED_AT' => 'CREATED_AT',
        'COL_CREATED_AT' => 'CREATED_AT',
        'created_at' => 'CREATED_AT',
        'spy_sales_return_item.created_at' => 'CREATED_AT',
        'UpdatedAt' => 'UPDATED_AT',
        'SpySalesReturnItem.UpdatedAt' => 'UPDATED_AT',
        'updatedAt' => 'UPDATED_AT',
        'spySalesReturnItem.updatedAt' => 'UPDATED_AT',
        'SpySalesReturnItemTableMap::COL_UPDATED_AT' => 'UPDATED_AT',
        'COL_UPDATED_AT' => 'UPDATED_AT',
        'updated_at' => 'UPDATED_AT',
        'spy_sales_return_item.updated_at' => 'UPDATED_AT',
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
        $this->setName('spy_sales_return_item');
        $this->setPhpName('SpySalesReturnItem');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Orm\\Zed\\SalesReturn\\Persistence\\SpySalesReturnItem');
        $this->setPackage('src.Orm.Zed.SalesReturn.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_sales_return_item_pk_seq');
        // columns
        $this->addPrimaryKey('id_sales_return_item', 'IdSalesReturnItem', 'INTEGER', true, null, null);
        $this->addForeignKey('fk_sales_order_item', 'FkSalesOrderItem', 'INTEGER', 'spy_sales_order_item', 'id_sales_order_item', true, null, null);
        $this->addForeignKey('fk_sales_return', 'FkSalesReturn', 'INTEGER', 'spy_sales_return', 'id_sales_return', true, null, null);
        $this->addColumn('reason', 'Reason', 'LONGVARCHAR', false, null, null);
        $this->addColumn('uuid', 'Uuid', 'VARCHAR', false, 36, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', false, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('SpySalesReturn', '\\Orm\\Zed\\SalesReturn\\Persistence\\SpySalesReturn', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_sales_return',
    1 => ':id_sales_return',
  ),
), null, null, null, false);
        $this->addRelation('SpySalesOrderItem', '\\Orm\\Zed\\Sales\\Persistence\\SpySalesOrderItem', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_sales_order_item',
    1 => ':id_sales_order_item',
  ),
), null, null, null, false);
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
            'uuid' => ['key_prefix' => NULL, 'key_columns' => 'id_sales_return_item'],
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesReturnItem', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesReturnItem', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesReturnItem', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesReturnItem', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesReturnItem', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesReturnItem', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdSalesReturnItem', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpySalesReturnItemTableMap::CLASS_DEFAULT : SpySalesReturnItemTableMap::OM_CLASS;
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
     * @return array           (SpySalesReturnItem object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SpySalesReturnItemTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpySalesReturnItemTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpySalesReturnItemTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpySalesReturnItemTableMap::OM_CLASS;
            /** @var SpySalesReturnItem $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpySalesReturnItemTableMap::addInstanceToPool($obj, $key);
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
            $key = SpySalesReturnItemTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpySalesReturnItemTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpySalesReturnItem $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpySalesReturnItemTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpySalesReturnItemTableMap::COL_ID_SALES_RETURN_ITEM);
            $criteria->addSelectColumn(SpySalesReturnItemTableMap::COL_FK_SALES_ORDER_ITEM);
            $criteria->addSelectColumn(SpySalesReturnItemTableMap::COL_FK_SALES_RETURN);
            $criteria->addSelectColumn(SpySalesReturnItemTableMap::COL_REASON);
            $criteria->addSelectColumn(SpySalesReturnItemTableMap::COL_UUID);
            $criteria->addSelectColumn(SpySalesReturnItemTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(SpySalesReturnItemTableMap::COL_UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id_sales_return_item');
            $criteria->addSelectColumn($alias . '.fk_sales_order_item');
            $criteria->addSelectColumn($alias . '.fk_sales_return');
            $criteria->addSelectColumn($alias . '.reason');
            $criteria->addSelectColumn($alias . '.uuid');
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
            $criteria->removeSelectColumn(SpySalesReturnItemTableMap::COL_ID_SALES_RETURN_ITEM);
            $criteria->removeSelectColumn(SpySalesReturnItemTableMap::COL_FK_SALES_ORDER_ITEM);
            $criteria->removeSelectColumn(SpySalesReturnItemTableMap::COL_FK_SALES_RETURN);
            $criteria->removeSelectColumn(SpySalesReturnItemTableMap::COL_REASON);
            $criteria->removeSelectColumn(SpySalesReturnItemTableMap::COL_UUID);
            $criteria->removeSelectColumn(SpySalesReturnItemTableMap::COL_CREATED_AT);
            $criteria->removeSelectColumn(SpySalesReturnItemTableMap::COL_UPDATED_AT);
        } else {
            $criteria->removeSelectColumn($alias . '.id_sales_return_item');
            $criteria->removeSelectColumn($alias . '.fk_sales_order_item');
            $criteria->removeSelectColumn($alias . '.fk_sales_return');
            $criteria->removeSelectColumn($alias . '.reason');
            $criteria->removeSelectColumn($alias . '.uuid');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpySalesReturnItemTableMap::DATABASE_NAME)->getTable(SpySalesReturnItemTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpySalesReturnItem or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SpySalesReturnItem object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpySalesReturnItemTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\SalesReturn\Persistence\SpySalesReturnItem) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpySalesReturnItemTableMap::DATABASE_NAME);
            $criteria->add(SpySalesReturnItemTableMap::COL_ID_SALES_RETURN_ITEM, (array) $values, Criteria::IN);
        }

        $query = SpySalesReturnItemQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpySalesReturnItemTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpySalesReturnItemTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_sales_return_item table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SpySalesReturnItemQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpySalesReturnItem or Criteria object.
     *
     * @param mixed               $criteria Criteria or SpySalesReturnItem object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpySalesReturnItemTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpySalesReturnItem object
        }


        // Set the correct dbName
        $query = SpySalesReturnItemQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SpySalesReturnItemTableMap
