<?php

namespace Orm\Zed\Glossary\Persistence\Map;

use Orm\Zed\CmsBlock\Persistence\Map\SpyCmsBlockGlossaryKeyMappingTableMap;
use Orm\Zed\Cms\Persistence\Map\SpyCmsGlossaryKeyMappingTableMap;
use Orm\Zed\Glossary\Persistence\SpyGlossaryKey;
use Orm\Zed\Glossary\Persistence\SpyGlossaryKeyQuery;
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
 * This class defines the structure of the 'spy_glossary_key' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyGlossaryKeyTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.Orm.Zed.Glossary.Persistence.Map.SpyGlossaryKeyTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'spy_glossary_key';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Orm\\Zed\\Glossary\\Persistence\\SpyGlossaryKey';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'src.Orm.Zed.Glossary.Persistence.SpyGlossaryKey';

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
     * the column name for the id_glossary_key field
     */
    const COL_ID_GLOSSARY_KEY = 'spy_glossary_key.id_glossary_key';

    /**
     * the column name for the is_active field
     */
    const COL_IS_ACTIVE = 'spy_glossary_key.is_active';

    /**
     * the column name for the key field
     */
    const COL_KEY = 'spy_glossary_key.key';

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
        self::TYPE_PHPNAME       => array('IdGlossaryKey', 'IsActive', 'Key', ),
        self::TYPE_CAMELNAME     => array('idGlossaryKey', 'isActive', 'key', ),
        self::TYPE_COLNAME       => array(SpyGlossaryKeyTableMap::COL_ID_GLOSSARY_KEY, SpyGlossaryKeyTableMap::COL_IS_ACTIVE, SpyGlossaryKeyTableMap::COL_KEY, ),
        self::TYPE_FIELDNAME     => array('id_glossary_key', 'is_active', 'key', ),
        self::TYPE_NUM           => array(0, 1, 2, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('IdGlossaryKey' => 0, 'IsActive' => 1, 'Key' => 2, ),
        self::TYPE_CAMELNAME     => array('idGlossaryKey' => 0, 'isActive' => 1, 'key' => 2, ),
        self::TYPE_COLNAME       => array(SpyGlossaryKeyTableMap::COL_ID_GLOSSARY_KEY => 0, SpyGlossaryKeyTableMap::COL_IS_ACTIVE => 1, SpyGlossaryKeyTableMap::COL_KEY => 2, ),
        self::TYPE_FIELDNAME     => array('id_glossary_key' => 0, 'is_active' => 1, 'key' => 2, ),
        self::TYPE_NUM           => array(0, 1, 2, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [
        'IdGlossaryKey' => 'ID_GLOSSARY_KEY',
        'SpyGlossaryKey.IdGlossaryKey' => 'ID_GLOSSARY_KEY',
        'idGlossaryKey' => 'ID_GLOSSARY_KEY',
        'spyGlossaryKey.idGlossaryKey' => 'ID_GLOSSARY_KEY',
        'SpyGlossaryKeyTableMap::COL_ID_GLOSSARY_KEY' => 'ID_GLOSSARY_KEY',
        'COL_ID_GLOSSARY_KEY' => 'ID_GLOSSARY_KEY',
        'id_glossary_key' => 'ID_GLOSSARY_KEY',
        'spy_glossary_key.id_glossary_key' => 'ID_GLOSSARY_KEY',
        'IsActive' => 'IS_ACTIVE',
        'SpyGlossaryKey.IsActive' => 'IS_ACTIVE',
        'isActive' => 'IS_ACTIVE',
        'spyGlossaryKey.isActive' => 'IS_ACTIVE',
        'SpyGlossaryKeyTableMap::COL_IS_ACTIVE' => 'IS_ACTIVE',
        'COL_IS_ACTIVE' => 'IS_ACTIVE',
        'is_active' => 'IS_ACTIVE',
        'spy_glossary_key.is_active' => 'IS_ACTIVE',
        'Key' => 'KEY',
        'SpyGlossaryKey.Key' => 'KEY',
        'key' => 'KEY',
        'spyGlossaryKey.key' => 'KEY',
        'SpyGlossaryKeyTableMap::COL_KEY' => 'KEY',
        'COL_KEY' => 'KEY',
        'spy_glossary_key.key' => 'KEY',
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
        $this->setName('spy_glossary_key');
        $this->setPhpName('SpyGlossaryKey');
        $this->setIdentifierQuoting(true);
        $this->setClassName('\\Orm\\Zed\\Glossary\\Persistence\\SpyGlossaryKey');
        $this->setPackage('src.Orm.Zed.Glossary.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_glossary_key_pk_seq');
        // columns
        $this->addPrimaryKey('id_glossary_key', 'IdGlossaryKey', 'INTEGER', true, null, null);
        $this->addColumn('is_active', 'IsActive', 'BOOLEAN', true, 1, true);
        $this->addColumn('key', 'Key', 'VARCHAR', true, 255, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('SpyCmsGlossaryKeyMapping', '\\Orm\\Zed\\Cms\\Persistence\\SpyCmsGlossaryKeyMapping', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_glossary_key',
    1 => ':id_glossary_key',
  ),
), 'CASCADE', null, 'SpyCmsGlossaryKeyMappings', false);
        $this->addRelation('SpyCmsBlockGlossaryKeyMapping', '\\Orm\\Zed\\CmsBlock\\Persistence\\SpyCmsBlockGlossaryKeyMapping', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_glossary_key',
    1 => ':id_glossary_key',
  ),
), 'CASCADE', null, 'SpyCmsBlockGlossaryKeyMappings', false);
        $this->addRelation('SpyGlossaryTranslation', '\\Orm\\Zed\\Glossary\\Persistence\\SpyGlossaryTranslation', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_glossary_key',
    1 => ':id_glossary_key',
  ),
), 'CASCADE', null, 'SpyGlossaryTranslations', false);
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
            'event' => ['spy_glossary_key-key' => ['column' => 'key'], 'spy_glossary_key-is_active' => ['column' => 'is_active']],
        );
    } // getBehaviors()

    /**
     * Method to invalidate the instance pool of all tables related to spy_glossary_key     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in related instance pools,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        SpyCmsGlossaryKeyMappingTableMap::clearInstancePool();
        SpyCmsBlockGlossaryKeyMappingTableMap::clearInstancePool();
        SpyGlossaryTranslationTableMap::clearInstancePool();
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdGlossaryKey', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdGlossaryKey', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdGlossaryKey', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdGlossaryKey', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdGlossaryKey', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdGlossaryKey', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdGlossaryKey', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyGlossaryKeyTableMap::CLASS_DEFAULT : SpyGlossaryKeyTableMap::OM_CLASS;
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
     * @return array           (SpyGlossaryKey object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SpyGlossaryKeyTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyGlossaryKeyTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyGlossaryKeyTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyGlossaryKeyTableMap::OM_CLASS;
            /** @var SpyGlossaryKey $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyGlossaryKeyTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyGlossaryKeyTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyGlossaryKeyTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyGlossaryKey $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyGlossaryKeyTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyGlossaryKeyTableMap::COL_ID_GLOSSARY_KEY);
            $criteria->addSelectColumn(SpyGlossaryKeyTableMap::COL_IS_ACTIVE);
            $criteria->addSelectColumn(SpyGlossaryKeyTableMap::COL_KEY);
        } else {
            $criteria->addSelectColumn($alias . '.id_glossary_key');
            $criteria->addSelectColumn($alias . '.is_active');
            $criteria->addSelectColumn($alias . '.key');
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
            $criteria->removeSelectColumn(SpyGlossaryKeyTableMap::COL_ID_GLOSSARY_KEY);
            $criteria->removeSelectColumn(SpyGlossaryKeyTableMap::COL_IS_ACTIVE);
            $criteria->removeSelectColumn(SpyGlossaryKeyTableMap::COL_KEY);
        } else {
            $criteria->removeSelectColumn($alias . '.id_glossary_key');
            $criteria->removeSelectColumn($alias . '.is_active');
            $criteria->removeSelectColumn($alias . '.key');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyGlossaryKeyTableMap::DATABASE_NAME)->getTable(SpyGlossaryKeyTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyGlossaryKey or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SpyGlossaryKey object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyGlossaryKeyTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\Glossary\Persistence\SpyGlossaryKey) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyGlossaryKeyTableMap::DATABASE_NAME);
            $criteria->add(SpyGlossaryKeyTableMap::COL_ID_GLOSSARY_KEY, (array) $values, Criteria::IN);
        }

        $query = SpyGlossaryKeyQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyGlossaryKeyTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyGlossaryKeyTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_glossary_key table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SpyGlossaryKeyQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyGlossaryKey or Criteria object.
     *
     * @param mixed               $criteria Criteria or SpyGlossaryKey object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyGlossaryKeyTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyGlossaryKey object
        }

        if ($criteria->containsKey(SpyGlossaryKeyTableMap::COL_ID_GLOSSARY_KEY) && $criteria->keyContainsValue(SpyGlossaryKeyTableMap::COL_ID_GLOSSARY_KEY) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpyGlossaryKeyTableMap::COL_ID_GLOSSARY_KEY.')');
        }


        // Set the correct dbName
        $query = SpyGlossaryKeyQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SpyGlossaryKeyTableMap
