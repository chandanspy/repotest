<?php

namespace Orm\Zed\ShoppingList\Persistence\Map;

use Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupToPermission;
use Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupToPermissionQuery;
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
 * This class defines the structure of the 'spy_shopping_list_permission_group_to_permission' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyShoppingListPermissionGroupToPermissionTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.Orm.Zed.ShoppingList.Persistence.Map.SpyShoppingListPermissionGroupToPermissionTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'spy_shopping_list_permission_group_to_permission';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Orm\\Zed\\ShoppingList\\Persistence\\SpyShoppingListPermissionGroupToPermission';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'src.Orm.Zed.ShoppingList.Persistence.SpyShoppingListPermissionGroupToPermission';

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
     * the column name for the id_shopping_list_permission_group_to_permission field
     */
    const COL_ID_SHOPPING_LIST_PERMISSION_GROUP_TO_PERMISSION = 'spy_shopping_list_permission_group_to_permission.id_shopping_list_permission_group_to_permission';

    /**
     * the column name for the fk_permission field
     */
    const COL_FK_PERMISSION = 'spy_shopping_list_permission_group_to_permission.fk_permission';

    /**
     * the column name for the fk_shopping_list_permission_group field
     */
    const COL_FK_SHOPPING_LIST_PERMISSION_GROUP = 'spy_shopping_list_permission_group_to_permission.fk_shopping_list_permission_group';

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
        self::TYPE_PHPNAME       => array('IdShoppingListPermissionGroupToPermission', 'FkPermission', 'FkShoppingListPermissionGroup', ),
        self::TYPE_CAMELNAME     => array('idShoppingListPermissionGroupToPermission', 'fkPermission', 'fkShoppingListPermissionGroup', ),
        self::TYPE_COLNAME       => array(SpyShoppingListPermissionGroupToPermissionTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP_TO_PERMISSION, SpyShoppingListPermissionGroupToPermissionTableMap::COL_FK_PERMISSION, SpyShoppingListPermissionGroupToPermissionTableMap::COL_FK_SHOPPING_LIST_PERMISSION_GROUP, ),
        self::TYPE_FIELDNAME     => array('id_shopping_list_permission_group_to_permission', 'fk_permission', 'fk_shopping_list_permission_group', ),
        self::TYPE_NUM           => array(0, 1, 2, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('IdShoppingListPermissionGroupToPermission' => 0, 'FkPermission' => 1, 'FkShoppingListPermissionGroup' => 2, ),
        self::TYPE_CAMELNAME     => array('idShoppingListPermissionGroupToPermission' => 0, 'fkPermission' => 1, 'fkShoppingListPermissionGroup' => 2, ),
        self::TYPE_COLNAME       => array(SpyShoppingListPermissionGroupToPermissionTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP_TO_PERMISSION => 0, SpyShoppingListPermissionGroupToPermissionTableMap::COL_FK_PERMISSION => 1, SpyShoppingListPermissionGroupToPermissionTableMap::COL_FK_SHOPPING_LIST_PERMISSION_GROUP => 2, ),
        self::TYPE_FIELDNAME     => array('id_shopping_list_permission_group_to_permission' => 0, 'fk_permission' => 1, 'fk_shopping_list_permission_group' => 2, ),
        self::TYPE_NUM           => array(0, 1, 2, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [
        'IdShoppingListPermissionGroupToPermission' => 'ID_SHOPPING_LIST_PERMISSION_GROUP_TO_PERMISSION',
        'SpyShoppingListPermissionGroupToPermission.IdShoppingListPermissionGroupToPermission' => 'ID_SHOPPING_LIST_PERMISSION_GROUP_TO_PERMISSION',
        'idShoppingListPermissionGroupToPermission' => 'ID_SHOPPING_LIST_PERMISSION_GROUP_TO_PERMISSION',
        'spyShoppingListPermissionGroupToPermission.idShoppingListPermissionGroupToPermission' => 'ID_SHOPPING_LIST_PERMISSION_GROUP_TO_PERMISSION',
        'SpyShoppingListPermissionGroupToPermissionTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP_TO_PERMISSION' => 'ID_SHOPPING_LIST_PERMISSION_GROUP_TO_PERMISSION',
        'COL_ID_SHOPPING_LIST_PERMISSION_GROUP_TO_PERMISSION' => 'ID_SHOPPING_LIST_PERMISSION_GROUP_TO_PERMISSION',
        'id_shopping_list_permission_group_to_permission' => 'ID_SHOPPING_LIST_PERMISSION_GROUP_TO_PERMISSION',
        'spy_shopping_list_permission_group_to_permission.id_shopping_list_permission_group_to_permission' => 'ID_SHOPPING_LIST_PERMISSION_GROUP_TO_PERMISSION',
        'FkPermission' => 'FK_PERMISSION',
        'SpyShoppingListPermissionGroupToPermission.FkPermission' => 'FK_PERMISSION',
        'fkPermission' => 'FK_PERMISSION',
        'spyShoppingListPermissionGroupToPermission.fkPermission' => 'FK_PERMISSION',
        'SpyShoppingListPermissionGroupToPermissionTableMap::COL_FK_PERMISSION' => 'FK_PERMISSION',
        'COL_FK_PERMISSION' => 'FK_PERMISSION',
        'fk_permission' => 'FK_PERMISSION',
        'spy_shopping_list_permission_group_to_permission.fk_permission' => 'FK_PERMISSION',
        'FkShoppingListPermissionGroup' => 'FK_SHOPPING_LIST_PERMISSION_GROUP',
        'SpyShoppingListPermissionGroupToPermission.FkShoppingListPermissionGroup' => 'FK_SHOPPING_LIST_PERMISSION_GROUP',
        'fkShoppingListPermissionGroup' => 'FK_SHOPPING_LIST_PERMISSION_GROUP',
        'spyShoppingListPermissionGroupToPermission.fkShoppingListPermissionGroup' => 'FK_SHOPPING_LIST_PERMISSION_GROUP',
        'SpyShoppingListPermissionGroupToPermissionTableMap::COL_FK_SHOPPING_LIST_PERMISSION_GROUP' => 'FK_SHOPPING_LIST_PERMISSION_GROUP',
        'COL_FK_SHOPPING_LIST_PERMISSION_GROUP' => 'FK_SHOPPING_LIST_PERMISSION_GROUP',
        'fk_shopping_list_permission_group' => 'FK_SHOPPING_LIST_PERMISSION_GROUP',
        'spy_shopping_list_permission_group_to_permission.fk_shopping_list_permission_group' => 'FK_SHOPPING_LIST_PERMISSION_GROUP',
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
        $this->setName('spy_shopping_list_permission_group_to_permission');
        $this->setPhpName('SpyShoppingListPermissionGroupToPermission');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Orm\\Zed\\ShoppingList\\Persistence\\SpyShoppingListPermissionGroupToPermission');
        $this->setPackage('src.Orm.Zed.ShoppingList.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_shopping_list_permission_group_to_permission_pk_seq');
        // columns
        $this->addPrimaryKey('id_shopping_list_permission_group_to_permission', 'IdShoppingListPermissionGroupToPermission', 'INTEGER', true, null, null);
        $this->addForeignKey('fk_permission', 'FkPermission', 'INTEGER', 'spy_permission', 'id_permission', true, null, null);
        $this->addForeignKey('fk_shopping_list_permission_group', 'FkShoppingListPermissionGroup', 'INTEGER', 'spy_shopping_list_permission_group', 'id_shopping_list_permission_group', true, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('SpyShoppingListPermissionGroup', '\\Orm\\Zed\\ShoppingList\\Persistence\\SpyShoppingListPermissionGroup', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_shopping_list_permission_group',
    1 => ':id_shopping_list_permission_group',
  ),
), null, null, null, false);
        $this->addRelation('SpyPermission', '\\Orm\\Zed\\Permission\\Persistence\\SpyPermission', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_permission',
    1 => ':id_permission',
  ),
), null, null, null, false);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdShoppingListPermissionGroupToPermission', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdShoppingListPermissionGroupToPermission', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdShoppingListPermissionGroupToPermission', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdShoppingListPermissionGroupToPermission', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdShoppingListPermissionGroupToPermission', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdShoppingListPermissionGroupToPermission', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdShoppingListPermissionGroupToPermission', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyShoppingListPermissionGroupToPermissionTableMap::CLASS_DEFAULT : SpyShoppingListPermissionGroupToPermissionTableMap::OM_CLASS;
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
     * @return array           (SpyShoppingListPermissionGroupToPermission object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SpyShoppingListPermissionGroupToPermissionTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyShoppingListPermissionGroupToPermissionTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyShoppingListPermissionGroupToPermissionTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyShoppingListPermissionGroupToPermissionTableMap::OM_CLASS;
            /** @var SpyShoppingListPermissionGroupToPermission $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyShoppingListPermissionGroupToPermissionTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyShoppingListPermissionGroupToPermissionTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyShoppingListPermissionGroupToPermissionTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyShoppingListPermissionGroupToPermission $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyShoppingListPermissionGroupToPermissionTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyShoppingListPermissionGroupToPermissionTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP_TO_PERMISSION);
            $criteria->addSelectColumn(SpyShoppingListPermissionGroupToPermissionTableMap::COL_FK_PERMISSION);
            $criteria->addSelectColumn(SpyShoppingListPermissionGroupToPermissionTableMap::COL_FK_SHOPPING_LIST_PERMISSION_GROUP);
        } else {
            $criteria->addSelectColumn($alias . '.id_shopping_list_permission_group_to_permission');
            $criteria->addSelectColumn($alias . '.fk_permission');
            $criteria->addSelectColumn($alias . '.fk_shopping_list_permission_group');
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
            $criteria->removeSelectColumn(SpyShoppingListPermissionGroupToPermissionTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP_TO_PERMISSION);
            $criteria->removeSelectColumn(SpyShoppingListPermissionGroupToPermissionTableMap::COL_FK_PERMISSION);
            $criteria->removeSelectColumn(SpyShoppingListPermissionGroupToPermissionTableMap::COL_FK_SHOPPING_LIST_PERMISSION_GROUP);
        } else {
            $criteria->removeSelectColumn($alias . '.id_shopping_list_permission_group_to_permission');
            $criteria->removeSelectColumn($alias . '.fk_permission');
            $criteria->removeSelectColumn($alias . '.fk_shopping_list_permission_group');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyShoppingListPermissionGroupToPermissionTableMap::DATABASE_NAME)->getTable(SpyShoppingListPermissionGroupToPermissionTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyShoppingListPermissionGroupToPermission or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SpyShoppingListPermissionGroupToPermission object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyShoppingListPermissionGroupToPermissionTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupToPermission) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyShoppingListPermissionGroupToPermissionTableMap::DATABASE_NAME);
            $criteria->add(SpyShoppingListPermissionGroupToPermissionTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP_TO_PERMISSION, (array) $values, Criteria::IN);
        }

        $query = SpyShoppingListPermissionGroupToPermissionQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyShoppingListPermissionGroupToPermissionTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyShoppingListPermissionGroupToPermissionTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_shopping_list_permission_group_to_permission table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SpyShoppingListPermissionGroupToPermissionQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyShoppingListPermissionGroupToPermission or Criteria object.
     *
     * @param mixed               $criteria Criteria or SpyShoppingListPermissionGroupToPermission object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyShoppingListPermissionGroupToPermissionTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyShoppingListPermissionGroupToPermission object
        }

        if ($criteria->containsKey(SpyShoppingListPermissionGroupToPermissionTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP_TO_PERMISSION) && $criteria->keyContainsValue(SpyShoppingListPermissionGroupToPermissionTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP_TO_PERMISSION) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpyShoppingListPermissionGroupToPermissionTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP_TO_PERMISSION.')');
        }


        // Set the correct dbName
        $query = SpyShoppingListPermissionGroupToPermissionQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SpyShoppingListPermissionGroupToPermissionTableMap
