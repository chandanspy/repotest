<?php

namespace Orm\Zed\Acl\Persistence\Map;

use Orm\Zed\Acl\Persistence\SpyAclRoleArchive;
use Orm\Zed\Acl\Persistence\SpyAclRoleArchiveQuery;
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
 * This class defines the structure of the 'spy_acl_role_archive' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyAclRoleArchiveTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.Orm.Zed.Acl.Persistence.Map.SpyAclRoleArchiveTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'spy_acl_role_archive';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Orm\\Zed\\Acl\\Persistence\\SpyAclRoleArchive';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'src.Orm.Zed.Acl.Persistence.SpyAclRoleArchive';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 5;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 5;

    /**
     * the column name for the id_acl_role field
     */
    const COL_ID_ACL_ROLE = 'spy_acl_role_archive.id_acl_role';

    /**
     * the column name for the name field
     */
    const COL_NAME = 'spy_acl_role_archive.name';

    /**
     * the column name for the created_at field
     */
    const COL_CREATED_AT = 'spy_acl_role_archive.created_at';

    /**
     * the column name for the updated_at field
     */
    const COL_UPDATED_AT = 'spy_acl_role_archive.updated_at';

    /**
     * the column name for the archived_at field
     */
    const COL_ARCHIVED_AT = 'spy_acl_role_archive.archived_at';

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
        self::TYPE_PHPNAME       => array('IdAclRole', 'Name', 'CreatedAt', 'UpdatedAt', 'ArchivedAt', ),
        self::TYPE_CAMELNAME     => array('idAclRole', 'name', 'createdAt', 'updatedAt', 'archivedAt', ),
        self::TYPE_COLNAME       => array(SpyAclRoleArchiveTableMap::COL_ID_ACL_ROLE, SpyAclRoleArchiveTableMap::COL_NAME, SpyAclRoleArchiveTableMap::COL_CREATED_AT, SpyAclRoleArchiveTableMap::COL_UPDATED_AT, SpyAclRoleArchiveTableMap::COL_ARCHIVED_AT, ),
        self::TYPE_FIELDNAME     => array('id_acl_role', 'name', 'created_at', 'updated_at', 'archived_at', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('IdAclRole' => 0, 'Name' => 1, 'CreatedAt' => 2, 'UpdatedAt' => 3, 'ArchivedAt' => 4, ),
        self::TYPE_CAMELNAME     => array('idAclRole' => 0, 'name' => 1, 'createdAt' => 2, 'updatedAt' => 3, 'archivedAt' => 4, ),
        self::TYPE_COLNAME       => array(SpyAclRoleArchiveTableMap::COL_ID_ACL_ROLE => 0, SpyAclRoleArchiveTableMap::COL_NAME => 1, SpyAclRoleArchiveTableMap::COL_CREATED_AT => 2, SpyAclRoleArchiveTableMap::COL_UPDATED_AT => 3, SpyAclRoleArchiveTableMap::COL_ARCHIVED_AT => 4, ),
        self::TYPE_FIELDNAME     => array('id_acl_role' => 0, 'name' => 1, 'created_at' => 2, 'updated_at' => 3, 'archived_at' => 4, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [
        'IdAclRole' => 'ID_ACL_ROLE',
        'SpyAclRoleArchive.IdAclRole' => 'ID_ACL_ROLE',
        'idAclRole' => 'ID_ACL_ROLE',
        'spyAclRoleArchive.idAclRole' => 'ID_ACL_ROLE',
        'SpyAclRoleArchiveTableMap::COL_ID_ACL_ROLE' => 'ID_ACL_ROLE',
        'COL_ID_ACL_ROLE' => 'ID_ACL_ROLE',
        'id_acl_role' => 'ID_ACL_ROLE',
        'spy_acl_role_archive.id_acl_role' => 'ID_ACL_ROLE',
        'Name' => 'NAME',
        'SpyAclRoleArchive.Name' => 'NAME',
        'name' => 'NAME',
        'spyAclRoleArchive.name' => 'NAME',
        'SpyAclRoleArchiveTableMap::COL_NAME' => 'NAME',
        'COL_NAME' => 'NAME',
        'spy_acl_role_archive.name' => 'NAME',
        'CreatedAt' => 'CREATED_AT',
        'SpyAclRoleArchive.CreatedAt' => 'CREATED_AT',
        'createdAt' => 'CREATED_AT',
        'spyAclRoleArchive.createdAt' => 'CREATED_AT',
        'SpyAclRoleArchiveTableMap::COL_CREATED_AT' => 'CREATED_AT',
        'COL_CREATED_AT' => 'CREATED_AT',
        'created_at' => 'CREATED_AT',
        'spy_acl_role_archive.created_at' => 'CREATED_AT',
        'UpdatedAt' => 'UPDATED_AT',
        'SpyAclRoleArchive.UpdatedAt' => 'UPDATED_AT',
        'updatedAt' => 'UPDATED_AT',
        'spyAclRoleArchive.updatedAt' => 'UPDATED_AT',
        'SpyAclRoleArchiveTableMap::COL_UPDATED_AT' => 'UPDATED_AT',
        'COL_UPDATED_AT' => 'UPDATED_AT',
        'updated_at' => 'UPDATED_AT',
        'spy_acl_role_archive.updated_at' => 'UPDATED_AT',
        'ArchivedAt' => 'ARCHIVED_AT',
        'SpyAclRoleArchive.ArchivedAt' => 'ARCHIVED_AT',
        'archivedAt' => 'ARCHIVED_AT',
        'spyAclRoleArchive.archivedAt' => 'ARCHIVED_AT',
        'SpyAclRoleArchiveTableMap::COL_ARCHIVED_AT' => 'ARCHIVED_AT',
        'COL_ARCHIVED_AT' => 'ARCHIVED_AT',
        'archived_at' => 'ARCHIVED_AT',
        'spy_acl_role_archive.archived_at' => 'ARCHIVED_AT',
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
        $this->setName('spy_acl_role_archive');
        $this->setPhpName('SpyAclRoleArchive');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Orm\\Zed\\Acl\\Persistence\\SpyAclRoleArchive');
        $this->setPackage('src.Orm.Zed.Acl.Persistence');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('id_acl_role', 'IdAclRole', 'INTEGER', true, null, null);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 255, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('archived_at', 'ArchivedAt', 'TIMESTAMP', false, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdAclRole', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdAclRole', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdAclRole', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdAclRole', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdAclRole', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdAclRole', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdAclRole', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyAclRoleArchiveTableMap::CLASS_DEFAULT : SpyAclRoleArchiveTableMap::OM_CLASS;
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
     * @return array           (SpyAclRoleArchive object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SpyAclRoleArchiveTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyAclRoleArchiveTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyAclRoleArchiveTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyAclRoleArchiveTableMap::OM_CLASS;
            /** @var SpyAclRoleArchive $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyAclRoleArchiveTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyAclRoleArchiveTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyAclRoleArchiveTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyAclRoleArchive $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyAclRoleArchiveTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyAclRoleArchiveTableMap::COL_ID_ACL_ROLE);
            $criteria->addSelectColumn(SpyAclRoleArchiveTableMap::COL_NAME);
            $criteria->addSelectColumn(SpyAclRoleArchiveTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(SpyAclRoleArchiveTableMap::COL_UPDATED_AT);
            $criteria->addSelectColumn(SpyAclRoleArchiveTableMap::COL_ARCHIVED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id_acl_role');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.created_at');
            $criteria->addSelectColumn($alias . '.updated_at');
            $criteria->addSelectColumn($alias . '.archived_at');
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
            $criteria->removeSelectColumn(SpyAclRoleArchiveTableMap::COL_ID_ACL_ROLE);
            $criteria->removeSelectColumn(SpyAclRoleArchiveTableMap::COL_NAME);
            $criteria->removeSelectColumn(SpyAclRoleArchiveTableMap::COL_CREATED_AT);
            $criteria->removeSelectColumn(SpyAclRoleArchiveTableMap::COL_UPDATED_AT);
            $criteria->removeSelectColumn(SpyAclRoleArchiveTableMap::COL_ARCHIVED_AT);
        } else {
            $criteria->removeSelectColumn($alias . '.id_acl_role');
            $criteria->removeSelectColumn($alias . '.name');
            $criteria->removeSelectColumn($alias . '.created_at');
            $criteria->removeSelectColumn($alias . '.updated_at');
            $criteria->removeSelectColumn($alias . '.archived_at');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyAclRoleArchiveTableMap::DATABASE_NAME)->getTable(SpyAclRoleArchiveTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyAclRoleArchive or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SpyAclRoleArchive object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyAclRoleArchiveTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\Acl\Persistence\SpyAclRoleArchive) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyAclRoleArchiveTableMap::DATABASE_NAME);
            $criteria->add(SpyAclRoleArchiveTableMap::COL_ID_ACL_ROLE, (array) $values, Criteria::IN);
        }

        $query = SpyAclRoleArchiveQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyAclRoleArchiveTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyAclRoleArchiveTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_acl_role_archive table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SpyAclRoleArchiveQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyAclRoleArchive or Criteria object.
     *
     * @param mixed               $criteria Criteria or SpyAclRoleArchive object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyAclRoleArchiveTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyAclRoleArchive object
        }


        // Set the correct dbName
        $query = SpyAclRoleArchiveQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SpyAclRoleArchiveTableMap
