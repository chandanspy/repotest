<?php

namespace Orm\Zed\Permission\Persistence\Map;

use Orm\Zed\CompanyRole\Persistence\Map\SpyCompanyRoleToPermissionTableMap;
use Orm\Zed\Permission\Persistence\SpyPermission;
use Orm\Zed\Permission\Persistence\SpyPermissionQuery;
use Orm\Zed\SharedCart\Persistence\Map\SpyQuotePermissionGroupToPermissionTableMap;
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
 * This class defines the structure of the 'spy_permission' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyPermissionTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.Orm.Zed.Permission.Persistence.Map.SpyPermissionTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'spy_permission';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Orm\\Zed\\Permission\\Persistence\\SpyPermission';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'src.Orm.Zed.Permission.Persistence.SpyPermission';

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
     * the column name for the id_permission field
     */
    const COL_ID_PERMISSION = 'spy_permission.id_permission';

    /**
     * the column name for the key field
     */
    const COL_KEY = 'spy_permission.key';

    /**
     * the column name for the configuration_signature field
     */
    const COL_CONFIGURATION_SIGNATURE = 'spy_permission.configuration_signature';

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
        self::TYPE_PHPNAME       => array('IdPermission', 'Key', 'ConfigurationSignature', ),
        self::TYPE_CAMELNAME     => array('idPermission', 'key', 'configurationSignature', ),
        self::TYPE_COLNAME       => array(SpyPermissionTableMap::COL_ID_PERMISSION, SpyPermissionTableMap::COL_KEY, SpyPermissionTableMap::COL_CONFIGURATION_SIGNATURE, ),
        self::TYPE_FIELDNAME     => array('id_permission', 'key', 'configuration_signature', ),
        self::TYPE_NUM           => array(0, 1, 2, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('IdPermission' => 0, 'Key' => 1, 'ConfigurationSignature' => 2, ),
        self::TYPE_CAMELNAME     => array('idPermission' => 0, 'key' => 1, 'configurationSignature' => 2, ),
        self::TYPE_COLNAME       => array(SpyPermissionTableMap::COL_ID_PERMISSION => 0, SpyPermissionTableMap::COL_KEY => 1, SpyPermissionTableMap::COL_CONFIGURATION_SIGNATURE => 2, ),
        self::TYPE_FIELDNAME     => array('id_permission' => 0, 'key' => 1, 'configuration_signature' => 2, ),
        self::TYPE_NUM           => array(0, 1, 2, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [
        'IdPermission' => 'ID_PERMISSION',
        'SpyPermission.IdPermission' => 'ID_PERMISSION',
        'idPermission' => 'ID_PERMISSION',
        'spyPermission.idPermission' => 'ID_PERMISSION',
        'SpyPermissionTableMap::COL_ID_PERMISSION' => 'ID_PERMISSION',
        'COL_ID_PERMISSION' => 'ID_PERMISSION',
        'id_permission' => 'ID_PERMISSION',
        'spy_permission.id_permission' => 'ID_PERMISSION',
        'Key' => 'KEY',
        'SpyPermission.Key' => 'KEY',
        'key' => 'KEY',
        'spyPermission.key' => 'KEY',
        'SpyPermissionTableMap::COL_KEY' => 'KEY',
        'COL_KEY' => 'KEY',
        'spy_permission.key' => 'KEY',
        'ConfigurationSignature' => 'CONFIGURATION_SIGNATURE',
        'SpyPermission.ConfigurationSignature' => 'CONFIGURATION_SIGNATURE',
        'configurationSignature' => 'CONFIGURATION_SIGNATURE',
        'spyPermission.configurationSignature' => 'CONFIGURATION_SIGNATURE',
        'SpyPermissionTableMap::COL_CONFIGURATION_SIGNATURE' => 'CONFIGURATION_SIGNATURE',
        'COL_CONFIGURATION_SIGNATURE' => 'CONFIGURATION_SIGNATURE',
        'configuration_signature' => 'CONFIGURATION_SIGNATURE',
        'spy_permission.configuration_signature' => 'CONFIGURATION_SIGNATURE',
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
        $this->setName('spy_permission');
        $this->setPhpName('SpyPermission');
        $this->setIdentifierQuoting(true);
        $this->setClassName('\\Orm\\Zed\\Permission\\Persistence\\SpyPermission');
        $this->setPackage('src.Orm.Zed.Permission.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_permission_pk_seq');
        // columns
        $this->addPrimaryKey('id_permission', 'IdPermission', 'INTEGER', true, null, null);
        $this->addColumn('key', 'Key', 'VARCHAR', true, 255, null);
        $this->addColumn('configuration_signature', 'ConfigurationSignature', 'LONGVARCHAR', false, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('SpyCompanyRoleToPermission', '\\Orm\\Zed\\CompanyRole\\Persistence\\SpyCompanyRoleToPermission', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_permission',
    1 => ':id_permission',
  ),
), 'CASCADE', null, 'SpyCompanyRoleToPermissions', false);
        $this->addRelation('SpyQuotePermissionGroupToPermission', '\\Orm\\Zed\\SharedCart\\Persistence\\SpyQuotePermissionGroupToPermission', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_permission',
    1 => ':id_permission',
  ),
), 'CASCADE', null, 'SpyQuotePermissionGroupToPermissions', false);
        $this->addRelation('SpyShoppingListPermissionGroupToPermission', '\\Orm\\Zed\\ShoppingList\\Persistence\\SpyShoppingListPermissionGroupToPermission', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_permission',
    1 => ':id_permission',
  ),
), null, null, 'SpyShoppingListPermissionGroupToPermissions', false);
        $this->addRelation('CompanyRole', '\\Orm\\Zed\\CompanyRole\\Persistence\\SpyCompanyRole', RelationMap::MANY_TO_MANY, array(), 'CASCADE', null, 'CompanyRoles');
    } // buildRelations()

    /**
     * Method to invalidate the instance pool of all tables related to spy_permission     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in related instance pools,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        SpyCompanyRoleToPermissionTableMap::clearInstancePool();
        SpyQuotePermissionGroupToPermissionTableMap::clearInstancePool();
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdPermission', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdPermission', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdPermission', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdPermission', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdPermission', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdPermission', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdPermission', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyPermissionTableMap::CLASS_DEFAULT : SpyPermissionTableMap::OM_CLASS;
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
     * @return array           (SpyPermission object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SpyPermissionTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyPermissionTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyPermissionTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyPermissionTableMap::OM_CLASS;
            /** @var SpyPermission $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyPermissionTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyPermissionTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyPermissionTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyPermission $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyPermissionTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyPermissionTableMap::COL_ID_PERMISSION);
            $criteria->addSelectColumn(SpyPermissionTableMap::COL_KEY);
            $criteria->addSelectColumn(SpyPermissionTableMap::COL_CONFIGURATION_SIGNATURE);
        } else {
            $criteria->addSelectColumn($alias . '.id_permission');
            $criteria->addSelectColumn($alias . '.key');
            $criteria->addSelectColumn($alias . '.configuration_signature');
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
            $criteria->removeSelectColumn(SpyPermissionTableMap::COL_ID_PERMISSION);
            $criteria->removeSelectColumn(SpyPermissionTableMap::COL_KEY);
            $criteria->removeSelectColumn(SpyPermissionTableMap::COL_CONFIGURATION_SIGNATURE);
        } else {
            $criteria->removeSelectColumn($alias . '.id_permission');
            $criteria->removeSelectColumn($alias . '.key');
            $criteria->removeSelectColumn($alias . '.configuration_signature');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyPermissionTableMap::DATABASE_NAME)->getTable(SpyPermissionTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyPermission or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SpyPermission object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyPermissionTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\Permission\Persistence\SpyPermission) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyPermissionTableMap::DATABASE_NAME);
            $criteria->add(SpyPermissionTableMap::COL_ID_PERMISSION, (array) $values, Criteria::IN);
        }

        $query = SpyPermissionQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyPermissionTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyPermissionTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_permission table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SpyPermissionQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyPermission or Criteria object.
     *
     * @param mixed               $criteria Criteria or SpyPermission object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyPermissionTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyPermission object
        }


        // Set the correct dbName
        $query = SpyPermissionQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SpyPermissionTableMap
