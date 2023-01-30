<?php

namespace Orm\Zed\ShoppingList\Persistence\Map;

use Orm\Zed\ShoppingList\Persistence\SpyShoppingListItem;
use Orm\Zed\ShoppingList\Persistence\SpyShoppingListItemQuery;
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
 * This class defines the structure of the 'spy_shopping_list_item' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyShoppingListItemTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.Orm.Zed.ShoppingList.Persistence.Map.SpyShoppingListItemTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'spy_shopping_list_item';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Orm\\Zed\\ShoppingList\\Persistence\\SpyShoppingListItem';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'src.Orm.Zed.ShoppingList.Persistence.SpyShoppingListItem';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 8;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 8;

    /**
     * the column name for the id_shopping_list_item field
     */
    const COL_ID_SHOPPING_LIST_ITEM = 'spy_shopping_list_item.id_shopping_list_item';

    /**
     * the column name for the fk_shopping_list field
     */
    const COL_FK_SHOPPING_LIST = 'spy_shopping_list_item.fk_shopping_list';

    /**
     * the column name for the key field
     */
    const COL_KEY = 'spy_shopping_list_item.key';

    /**
     * the column name for the quantity field
     */
    const COL_QUANTITY = 'spy_shopping_list_item.quantity';

    /**
     * the column name for the sku field
     */
    const COL_SKU = 'spy_shopping_list_item.sku';

    /**
     * the column name for the uuid field
     */
    const COL_UUID = 'spy_shopping_list_item.uuid';

    /**
     * the column name for the created_at field
     */
    const COL_CREATED_AT = 'spy_shopping_list_item.created_at';

    /**
     * the column name for the updated_at field
     */
    const COL_UPDATED_AT = 'spy_shopping_list_item.updated_at';

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
        self::TYPE_PHPNAME       => array('IdShoppingListItem', 'FkShoppingList', 'Key', 'Quantity', 'Sku', 'Uuid', 'CreatedAt', 'UpdatedAt', ),
        self::TYPE_CAMELNAME     => array('idShoppingListItem', 'fkShoppingList', 'key', 'quantity', 'sku', 'uuid', 'createdAt', 'updatedAt', ),
        self::TYPE_COLNAME       => array(SpyShoppingListItemTableMap::COL_ID_SHOPPING_LIST_ITEM, SpyShoppingListItemTableMap::COL_FK_SHOPPING_LIST, SpyShoppingListItemTableMap::COL_KEY, SpyShoppingListItemTableMap::COL_QUANTITY, SpyShoppingListItemTableMap::COL_SKU, SpyShoppingListItemTableMap::COL_UUID, SpyShoppingListItemTableMap::COL_CREATED_AT, SpyShoppingListItemTableMap::COL_UPDATED_AT, ),
        self::TYPE_FIELDNAME     => array('id_shopping_list_item', 'fk_shopping_list', 'key', 'quantity', 'sku', 'uuid', 'created_at', 'updated_at', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('IdShoppingListItem' => 0, 'FkShoppingList' => 1, 'Key' => 2, 'Quantity' => 3, 'Sku' => 4, 'Uuid' => 5, 'CreatedAt' => 6, 'UpdatedAt' => 7, ),
        self::TYPE_CAMELNAME     => array('idShoppingListItem' => 0, 'fkShoppingList' => 1, 'key' => 2, 'quantity' => 3, 'sku' => 4, 'uuid' => 5, 'createdAt' => 6, 'updatedAt' => 7, ),
        self::TYPE_COLNAME       => array(SpyShoppingListItemTableMap::COL_ID_SHOPPING_LIST_ITEM => 0, SpyShoppingListItemTableMap::COL_FK_SHOPPING_LIST => 1, SpyShoppingListItemTableMap::COL_KEY => 2, SpyShoppingListItemTableMap::COL_QUANTITY => 3, SpyShoppingListItemTableMap::COL_SKU => 4, SpyShoppingListItemTableMap::COL_UUID => 5, SpyShoppingListItemTableMap::COL_CREATED_AT => 6, SpyShoppingListItemTableMap::COL_UPDATED_AT => 7, ),
        self::TYPE_FIELDNAME     => array('id_shopping_list_item' => 0, 'fk_shopping_list' => 1, 'key' => 2, 'quantity' => 3, 'sku' => 4, 'uuid' => 5, 'created_at' => 6, 'updated_at' => 7, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [
        'IdShoppingListItem' => 'ID_SHOPPING_LIST_ITEM',
        'SpyShoppingListItem.IdShoppingListItem' => 'ID_SHOPPING_LIST_ITEM',
        'idShoppingListItem' => 'ID_SHOPPING_LIST_ITEM',
        'spyShoppingListItem.idShoppingListItem' => 'ID_SHOPPING_LIST_ITEM',
        'SpyShoppingListItemTableMap::COL_ID_SHOPPING_LIST_ITEM' => 'ID_SHOPPING_LIST_ITEM',
        'COL_ID_SHOPPING_LIST_ITEM' => 'ID_SHOPPING_LIST_ITEM',
        'id_shopping_list_item' => 'ID_SHOPPING_LIST_ITEM',
        'spy_shopping_list_item.id_shopping_list_item' => 'ID_SHOPPING_LIST_ITEM',
        'FkShoppingList' => 'FK_SHOPPING_LIST',
        'SpyShoppingListItem.FkShoppingList' => 'FK_SHOPPING_LIST',
        'fkShoppingList' => 'FK_SHOPPING_LIST',
        'spyShoppingListItem.fkShoppingList' => 'FK_SHOPPING_LIST',
        'SpyShoppingListItemTableMap::COL_FK_SHOPPING_LIST' => 'FK_SHOPPING_LIST',
        'COL_FK_SHOPPING_LIST' => 'FK_SHOPPING_LIST',
        'fk_shopping_list' => 'FK_SHOPPING_LIST',
        'spy_shopping_list_item.fk_shopping_list' => 'FK_SHOPPING_LIST',
        'Key' => 'KEY',
        'SpyShoppingListItem.Key' => 'KEY',
        'key' => 'KEY',
        'spyShoppingListItem.key' => 'KEY',
        'SpyShoppingListItemTableMap::COL_KEY' => 'KEY',
        'COL_KEY' => 'KEY',
        'spy_shopping_list_item.key' => 'KEY',
        'Quantity' => 'QUANTITY',
        'SpyShoppingListItem.Quantity' => 'QUANTITY',
        'quantity' => 'QUANTITY',
        'spyShoppingListItem.quantity' => 'QUANTITY',
        'SpyShoppingListItemTableMap::COL_QUANTITY' => 'QUANTITY',
        'COL_QUANTITY' => 'QUANTITY',
        'spy_shopping_list_item.quantity' => 'QUANTITY',
        'Sku' => 'SKU',
        'SpyShoppingListItem.Sku' => 'SKU',
        'sku' => 'SKU',
        'spyShoppingListItem.sku' => 'SKU',
        'SpyShoppingListItemTableMap::COL_SKU' => 'SKU',
        'COL_SKU' => 'SKU',
        'spy_shopping_list_item.sku' => 'SKU',
        'Uuid' => 'UUID',
        'SpyShoppingListItem.Uuid' => 'UUID',
        'uuid' => 'UUID',
        'spyShoppingListItem.uuid' => 'UUID',
        'SpyShoppingListItemTableMap::COL_UUID' => 'UUID',
        'COL_UUID' => 'UUID',
        'spy_shopping_list_item.uuid' => 'UUID',
        'CreatedAt' => 'CREATED_AT',
        'SpyShoppingListItem.CreatedAt' => 'CREATED_AT',
        'createdAt' => 'CREATED_AT',
        'spyShoppingListItem.createdAt' => 'CREATED_AT',
        'SpyShoppingListItemTableMap::COL_CREATED_AT' => 'CREATED_AT',
        'COL_CREATED_AT' => 'CREATED_AT',
        'created_at' => 'CREATED_AT',
        'spy_shopping_list_item.created_at' => 'CREATED_AT',
        'UpdatedAt' => 'UPDATED_AT',
        'SpyShoppingListItem.UpdatedAt' => 'UPDATED_AT',
        'updatedAt' => 'UPDATED_AT',
        'spyShoppingListItem.updatedAt' => 'UPDATED_AT',
        'SpyShoppingListItemTableMap::COL_UPDATED_AT' => 'UPDATED_AT',
        'COL_UPDATED_AT' => 'UPDATED_AT',
        'updated_at' => 'UPDATED_AT',
        'spy_shopping_list_item.updated_at' => 'UPDATED_AT',
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
        $this->setName('spy_shopping_list_item');
        $this->setPhpName('SpyShoppingListItem');
        $this->setIdentifierQuoting(true);
        $this->setClassName('\\Orm\\Zed\\ShoppingList\\Persistence\\SpyShoppingListItem');
        $this->setPackage('src.Orm.Zed.ShoppingList.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_shopping_list_item_pk_seq');
        // columns
        $this->addPrimaryKey('id_shopping_list_item', 'IdShoppingListItem', 'INTEGER', true, null, null);
        $this->addForeignKey('fk_shopping_list', 'FkShoppingList', 'INTEGER', 'spy_shopping_list', 'id_shopping_list', true, null, null);
        $this->addColumn('key', 'Key', 'VARCHAR', false, 255, null);
        $this->addColumn('quantity', 'Quantity', 'INTEGER', true, null, 1);
        $this->addColumn('sku', 'Sku', 'VARCHAR', false, 255, null);
        $this->addColumn('uuid', 'Uuid', 'VARCHAR', false, 36, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', false, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('SpyShoppingList', '\\Orm\\Zed\\ShoppingList\\Persistence\\SpyShoppingList', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_shopping_list',
    1 => ':id_shopping_list',
  ),
), null, null, null, false);
        $this->addRelation('SpyShoppingListItemNote', '\\Orm\\Zed\\ShoppingListNote\\Persistence\\SpyShoppingListItemNote', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_shopping_list_item',
    1 => ':id_shopping_list_item',
  ),
), null, null, 'SpyShoppingListItemNotes', false);
        $this->addRelation('SpyShoppingListProductOption', '\\Orm\\Zed\\ShoppingListProductOptionConnector\\Persistence\\SpyShoppingListProductOption', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_shopping_list_item',
    1 => ':id_shopping_list_item',
  ),
), null, null, 'SpyShoppingListProductOptions', false);
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
            'uuid' => ['key_prefix' => NULL, 'key_columns' => 'id_shopping_list_item.fk_shopping_list'],
            'event' => ['spy_shopping_list_item_all' => ['column' => '*']],
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdShoppingListItem', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdShoppingListItem', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdShoppingListItem', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdShoppingListItem', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdShoppingListItem', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdShoppingListItem', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdShoppingListItem', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyShoppingListItemTableMap::CLASS_DEFAULT : SpyShoppingListItemTableMap::OM_CLASS;
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
     * @return array           (SpyShoppingListItem object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SpyShoppingListItemTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyShoppingListItemTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyShoppingListItemTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyShoppingListItemTableMap::OM_CLASS;
            /** @var SpyShoppingListItem $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyShoppingListItemTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyShoppingListItemTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyShoppingListItemTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyShoppingListItem $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyShoppingListItemTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyShoppingListItemTableMap::COL_ID_SHOPPING_LIST_ITEM);
            $criteria->addSelectColumn(SpyShoppingListItemTableMap::COL_FK_SHOPPING_LIST);
            $criteria->addSelectColumn(SpyShoppingListItemTableMap::COL_KEY);
            $criteria->addSelectColumn(SpyShoppingListItemTableMap::COL_QUANTITY);
            $criteria->addSelectColumn(SpyShoppingListItemTableMap::COL_SKU);
            $criteria->addSelectColumn(SpyShoppingListItemTableMap::COL_UUID);
            $criteria->addSelectColumn(SpyShoppingListItemTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(SpyShoppingListItemTableMap::COL_UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id_shopping_list_item');
            $criteria->addSelectColumn($alias . '.fk_shopping_list');
            $criteria->addSelectColumn($alias . '.key');
            $criteria->addSelectColumn($alias . '.quantity');
            $criteria->addSelectColumn($alias . '.sku');
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
            $criteria->removeSelectColumn(SpyShoppingListItemTableMap::COL_ID_SHOPPING_LIST_ITEM);
            $criteria->removeSelectColumn(SpyShoppingListItemTableMap::COL_FK_SHOPPING_LIST);
            $criteria->removeSelectColumn(SpyShoppingListItemTableMap::COL_KEY);
            $criteria->removeSelectColumn(SpyShoppingListItemTableMap::COL_QUANTITY);
            $criteria->removeSelectColumn(SpyShoppingListItemTableMap::COL_SKU);
            $criteria->removeSelectColumn(SpyShoppingListItemTableMap::COL_UUID);
            $criteria->removeSelectColumn(SpyShoppingListItemTableMap::COL_CREATED_AT);
            $criteria->removeSelectColumn(SpyShoppingListItemTableMap::COL_UPDATED_AT);
        } else {
            $criteria->removeSelectColumn($alias . '.id_shopping_list_item');
            $criteria->removeSelectColumn($alias . '.fk_shopping_list');
            $criteria->removeSelectColumn($alias . '.key');
            $criteria->removeSelectColumn($alias . '.quantity');
            $criteria->removeSelectColumn($alias . '.sku');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyShoppingListItemTableMap::DATABASE_NAME)->getTable(SpyShoppingListItemTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyShoppingListItem or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SpyShoppingListItem object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyShoppingListItemTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\ShoppingList\Persistence\SpyShoppingListItem) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyShoppingListItemTableMap::DATABASE_NAME);
            $criteria->add(SpyShoppingListItemTableMap::COL_ID_SHOPPING_LIST_ITEM, (array) $values, Criteria::IN);
        }

        $query = SpyShoppingListItemQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyShoppingListItemTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyShoppingListItemTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_shopping_list_item table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SpyShoppingListItemQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyShoppingListItem or Criteria object.
     *
     * @param mixed               $criteria Criteria or SpyShoppingListItem object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyShoppingListItemTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyShoppingListItem object
        }

        if ($criteria->containsKey(SpyShoppingListItemTableMap::COL_ID_SHOPPING_LIST_ITEM) && $criteria->keyContainsValue(SpyShoppingListItemTableMap::COL_ID_SHOPPING_LIST_ITEM) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpyShoppingListItemTableMap::COL_ID_SHOPPING_LIST_ITEM.')');
        }


        // Set the correct dbName
        $query = SpyShoppingListItemQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SpyShoppingListItemTableMap
