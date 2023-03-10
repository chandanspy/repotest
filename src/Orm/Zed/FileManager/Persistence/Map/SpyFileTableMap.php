<?php

namespace Orm\Zed\FileManager\Persistence\Map;

use Orm\Zed\FileManager\Persistence\SpyFile;
use Orm\Zed\FileManager\Persistence\SpyFileQuery;
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
 * This class defines the structure of the 'spy_file' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyFileTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.Orm.Zed.FileManager.Persistence.Map.SpyFileTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'spy_file';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Orm\\Zed\\FileManager\\Persistence\\SpyFile';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'src.Orm.Zed.FileManager.Persistence.SpyFile';

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
     * the column name for the id_file field
     */
    const COL_ID_FILE = 'spy_file.id_file';

    /**
     * the column name for the fk_file_directory field
     */
    const COL_FK_FILE_DIRECTORY = 'spy_file.fk_file_directory';

    /**
     * the column name for the file_name field
     */
    const COL_FILE_NAME = 'spy_file.file_name';

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
        self::TYPE_PHPNAME       => array('IdFile', 'FkFileDirectory', 'FileName', ),
        self::TYPE_CAMELNAME     => array('idFile', 'fkFileDirectory', 'fileName', ),
        self::TYPE_COLNAME       => array(SpyFileTableMap::COL_ID_FILE, SpyFileTableMap::COL_FK_FILE_DIRECTORY, SpyFileTableMap::COL_FILE_NAME, ),
        self::TYPE_FIELDNAME     => array('id_file', 'fk_file_directory', 'file_name', ),
        self::TYPE_NUM           => array(0, 1, 2, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('IdFile' => 0, 'FkFileDirectory' => 1, 'FileName' => 2, ),
        self::TYPE_CAMELNAME     => array('idFile' => 0, 'fkFileDirectory' => 1, 'fileName' => 2, ),
        self::TYPE_COLNAME       => array(SpyFileTableMap::COL_ID_FILE => 0, SpyFileTableMap::COL_FK_FILE_DIRECTORY => 1, SpyFileTableMap::COL_FILE_NAME => 2, ),
        self::TYPE_FIELDNAME     => array('id_file' => 0, 'fk_file_directory' => 1, 'file_name' => 2, ),
        self::TYPE_NUM           => array(0, 1, 2, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [
        'IdFile' => 'ID_FILE',
        'SpyFile.IdFile' => 'ID_FILE',
        'idFile' => 'ID_FILE',
        'spyFile.idFile' => 'ID_FILE',
        'SpyFileTableMap::COL_ID_FILE' => 'ID_FILE',
        'COL_ID_FILE' => 'ID_FILE',
        'id_file' => 'ID_FILE',
        'spy_file.id_file' => 'ID_FILE',
        'FkFileDirectory' => 'FK_FILE_DIRECTORY',
        'SpyFile.FkFileDirectory' => 'FK_FILE_DIRECTORY',
        'fkFileDirectory' => 'FK_FILE_DIRECTORY',
        'spyFile.fkFileDirectory' => 'FK_FILE_DIRECTORY',
        'SpyFileTableMap::COL_FK_FILE_DIRECTORY' => 'FK_FILE_DIRECTORY',
        'COL_FK_FILE_DIRECTORY' => 'FK_FILE_DIRECTORY',
        'fk_file_directory' => 'FK_FILE_DIRECTORY',
        'spy_file.fk_file_directory' => 'FK_FILE_DIRECTORY',
        'FileName' => 'FILE_NAME',
        'SpyFile.FileName' => 'FILE_NAME',
        'fileName' => 'FILE_NAME',
        'spyFile.fileName' => 'FILE_NAME',
        'SpyFileTableMap::COL_FILE_NAME' => 'FILE_NAME',
        'COL_FILE_NAME' => 'FILE_NAME',
        'file_name' => 'FILE_NAME',
        'spy_file.file_name' => 'FILE_NAME',
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
        $this->setName('spy_file');
        $this->setPhpName('SpyFile');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Orm\\Zed\\FileManager\\Persistence\\SpyFile');
        $this->setPackage('src.Orm.Zed.FileManager.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_file_pk_seq');
        // columns
        $this->addPrimaryKey('id_file', 'IdFile', 'INTEGER', true, null, null);
        $this->addForeignKey('fk_file_directory', 'FkFileDirectory', 'INTEGER', 'spy_file_directory', 'id_file_directory', false, null, null);
        $this->addColumn('file_name', 'FileName', 'VARCHAR', true, 500, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('FileDirectory', '\\Orm\\Zed\\FileManager\\Persistence\\SpyFileDirectory', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_file_directory',
    1 => ':id_file_directory',
  ),
), null, null, null, false);
        $this->addRelation('SpyFileInfo', '\\Orm\\Zed\\FileManager\\Persistence\\SpyFileInfo', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_file',
    1 => ':id_file',
  ),
), 'CASCADE', null, 'SpyFileInfos', false);
        $this->addRelation('SpyFileLocalizedAttributes', '\\Orm\\Zed\\FileManager\\Persistence\\SpyFileLocalizedAttributes', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_file',
    1 => ':id_file',
  ),
), 'CASCADE', 'CASCADE', 'SpyFileLocalizedAttributess', false);
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
            'event' => ['spy_file_all' => ['column' => '*']],
        );
    } // getBehaviors()

    /**
     * Method to invalidate the instance pool of all tables related to spy_file     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in related instance pools,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        SpyFileInfoTableMap::clearInstancePool();
        SpyFileLocalizedAttributesTableMap::clearInstancePool();
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdFile', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdFile', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdFile', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdFile', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdFile', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdFile', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdFile', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyFileTableMap::CLASS_DEFAULT : SpyFileTableMap::OM_CLASS;
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
     * @return array           (SpyFile object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SpyFileTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyFileTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyFileTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyFileTableMap::OM_CLASS;
            /** @var SpyFile $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyFileTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyFileTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyFileTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyFile $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyFileTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyFileTableMap::COL_ID_FILE);
            $criteria->addSelectColumn(SpyFileTableMap::COL_FK_FILE_DIRECTORY);
            $criteria->addSelectColumn(SpyFileTableMap::COL_FILE_NAME);
        } else {
            $criteria->addSelectColumn($alias . '.id_file');
            $criteria->addSelectColumn($alias . '.fk_file_directory');
            $criteria->addSelectColumn($alias . '.file_name');
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
            $criteria->removeSelectColumn(SpyFileTableMap::COL_ID_FILE);
            $criteria->removeSelectColumn(SpyFileTableMap::COL_FK_FILE_DIRECTORY);
            $criteria->removeSelectColumn(SpyFileTableMap::COL_FILE_NAME);
        } else {
            $criteria->removeSelectColumn($alias . '.id_file');
            $criteria->removeSelectColumn($alias . '.fk_file_directory');
            $criteria->removeSelectColumn($alias . '.file_name');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyFileTableMap::DATABASE_NAME)->getTable(SpyFileTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyFile or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SpyFile object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyFileTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\FileManager\Persistence\SpyFile) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyFileTableMap::DATABASE_NAME);
            $criteria->add(SpyFileTableMap::COL_ID_FILE, (array) $values, Criteria::IN);
        }

        $query = SpyFileQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyFileTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyFileTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_file table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SpyFileQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyFile or Criteria object.
     *
     * @param mixed               $criteria Criteria or SpyFile object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyFileTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyFile object
        }

        if ($criteria->containsKey(SpyFileTableMap::COL_ID_FILE) && $criteria->keyContainsValue(SpyFileTableMap::COL_ID_FILE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpyFileTableMap::COL_ID_FILE.')');
        }


        // Set the correct dbName
        $query = SpyFileQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SpyFileTableMap
