<?php

namespace Orm\Zed\ProductSearch\Persistence\Map;

use Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttributeArchive;
use Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttributeArchiveQuery;
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
 * This class defines the structure of the 'spy_product_search_attribute_archive' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyProductSearchAttributeArchiveTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.Orm.Zed.ProductSearch.Persistence.Map.SpyProductSearchAttributeArchiveTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'spy_product_search_attribute_archive';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Orm\\Zed\\ProductSearch\\Persistence\\SpyProductSearchAttributeArchive';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'src.Orm.Zed.ProductSearch.Persistence.SpyProductSearchAttributeArchive';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 6;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 6;

    /**
     * the column name for the id_product_search_attribute field
     */
    const COL_ID_PRODUCT_SEARCH_ATTRIBUTE = 'spy_product_search_attribute_archive.id_product_search_attribute';

    /**
     * the column name for the fk_product_attribute_key field
     */
    const COL_FK_PRODUCT_ATTRIBUTE_KEY = 'spy_product_search_attribute_archive.fk_product_attribute_key';

    /**
     * the column name for the filter_type field
     */
    const COL_FILTER_TYPE = 'spy_product_search_attribute_archive.filter_type';

    /**
     * the column name for the position field
     */
    const COL_POSITION = 'spy_product_search_attribute_archive.position';

    /**
     * the column name for the synced field
     */
    const COL_SYNCED = 'spy_product_search_attribute_archive.synced';

    /**
     * the column name for the archived_at field
     */
    const COL_ARCHIVED_AT = 'spy_product_search_attribute_archive.archived_at';

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
        self::TYPE_PHPNAME       => array('IdProductSearchAttribute', 'FkProductAttributeKey', 'FilterType', 'Position', 'Synced', 'ArchivedAt', ),
        self::TYPE_CAMELNAME     => array('idProductSearchAttribute', 'fkProductAttributeKey', 'filterType', 'position', 'synced', 'archivedAt', ),
        self::TYPE_COLNAME       => array(SpyProductSearchAttributeArchiveTableMap::COL_ID_PRODUCT_SEARCH_ATTRIBUTE, SpyProductSearchAttributeArchiveTableMap::COL_FK_PRODUCT_ATTRIBUTE_KEY, SpyProductSearchAttributeArchiveTableMap::COL_FILTER_TYPE, SpyProductSearchAttributeArchiveTableMap::COL_POSITION, SpyProductSearchAttributeArchiveTableMap::COL_SYNCED, SpyProductSearchAttributeArchiveTableMap::COL_ARCHIVED_AT, ),
        self::TYPE_FIELDNAME     => array('id_product_search_attribute', 'fk_product_attribute_key', 'filter_type', 'position', 'synced', 'archived_at', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('IdProductSearchAttribute' => 0, 'FkProductAttributeKey' => 1, 'FilterType' => 2, 'Position' => 3, 'Synced' => 4, 'ArchivedAt' => 5, ),
        self::TYPE_CAMELNAME     => array('idProductSearchAttribute' => 0, 'fkProductAttributeKey' => 1, 'filterType' => 2, 'position' => 3, 'synced' => 4, 'archivedAt' => 5, ),
        self::TYPE_COLNAME       => array(SpyProductSearchAttributeArchiveTableMap::COL_ID_PRODUCT_SEARCH_ATTRIBUTE => 0, SpyProductSearchAttributeArchiveTableMap::COL_FK_PRODUCT_ATTRIBUTE_KEY => 1, SpyProductSearchAttributeArchiveTableMap::COL_FILTER_TYPE => 2, SpyProductSearchAttributeArchiveTableMap::COL_POSITION => 3, SpyProductSearchAttributeArchiveTableMap::COL_SYNCED => 4, SpyProductSearchAttributeArchiveTableMap::COL_ARCHIVED_AT => 5, ),
        self::TYPE_FIELDNAME     => array('id_product_search_attribute' => 0, 'fk_product_attribute_key' => 1, 'filter_type' => 2, 'position' => 3, 'synced' => 4, 'archived_at' => 5, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [
        'IdProductSearchAttribute' => 'ID_PRODUCT_SEARCH_ATTRIBUTE',
        'SpyProductSearchAttributeArchive.IdProductSearchAttribute' => 'ID_PRODUCT_SEARCH_ATTRIBUTE',
        'idProductSearchAttribute' => 'ID_PRODUCT_SEARCH_ATTRIBUTE',
        'spyProductSearchAttributeArchive.idProductSearchAttribute' => 'ID_PRODUCT_SEARCH_ATTRIBUTE',
        'SpyProductSearchAttributeArchiveTableMap::COL_ID_PRODUCT_SEARCH_ATTRIBUTE' => 'ID_PRODUCT_SEARCH_ATTRIBUTE',
        'COL_ID_PRODUCT_SEARCH_ATTRIBUTE' => 'ID_PRODUCT_SEARCH_ATTRIBUTE',
        'id_product_search_attribute' => 'ID_PRODUCT_SEARCH_ATTRIBUTE',
        'spy_product_search_attribute_archive.id_product_search_attribute' => 'ID_PRODUCT_SEARCH_ATTRIBUTE',
        'FkProductAttributeKey' => 'FK_PRODUCT_ATTRIBUTE_KEY',
        'SpyProductSearchAttributeArchive.FkProductAttributeKey' => 'FK_PRODUCT_ATTRIBUTE_KEY',
        'fkProductAttributeKey' => 'FK_PRODUCT_ATTRIBUTE_KEY',
        'spyProductSearchAttributeArchive.fkProductAttributeKey' => 'FK_PRODUCT_ATTRIBUTE_KEY',
        'SpyProductSearchAttributeArchiveTableMap::COL_FK_PRODUCT_ATTRIBUTE_KEY' => 'FK_PRODUCT_ATTRIBUTE_KEY',
        'COL_FK_PRODUCT_ATTRIBUTE_KEY' => 'FK_PRODUCT_ATTRIBUTE_KEY',
        'fk_product_attribute_key' => 'FK_PRODUCT_ATTRIBUTE_KEY',
        'spy_product_search_attribute_archive.fk_product_attribute_key' => 'FK_PRODUCT_ATTRIBUTE_KEY',
        'FilterType' => 'FILTER_TYPE',
        'SpyProductSearchAttributeArchive.FilterType' => 'FILTER_TYPE',
        'filterType' => 'FILTER_TYPE',
        'spyProductSearchAttributeArchive.filterType' => 'FILTER_TYPE',
        'SpyProductSearchAttributeArchiveTableMap::COL_FILTER_TYPE' => 'FILTER_TYPE',
        'COL_FILTER_TYPE' => 'FILTER_TYPE',
        'filter_type' => 'FILTER_TYPE',
        'spy_product_search_attribute_archive.filter_type' => 'FILTER_TYPE',
        'Position' => 'POSITION',
        'SpyProductSearchAttributeArchive.Position' => 'POSITION',
        'position' => 'POSITION',
        'spyProductSearchAttributeArchive.position' => 'POSITION',
        'SpyProductSearchAttributeArchiveTableMap::COL_POSITION' => 'POSITION',
        'COL_POSITION' => 'POSITION',
        'spy_product_search_attribute_archive.position' => 'POSITION',
        'Synced' => 'SYNCED',
        'SpyProductSearchAttributeArchive.Synced' => 'SYNCED',
        'synced' => 'SYNCED',
        'spyProductSearchAttributeArchive.synced' => 'SYNCED',
        'SpyProductSearchAttributeArchiveTableMap::COL_SYNCED' => 'SYNCED',
        'COL_SYNCED' => 'SYNCED',
        'spy_product_search_attribute_archive.synced' => 'SYNCED',
        'ArchivedAt' => 'ARCHIVED_AT',
        'SpyProductSearchAttributeArchive.ArchivedAt' => 'ARCHIVED_AT',
        'archivedAt' => 'ARCHIVED_AT',
        'spyProductSearchAttributeArchive.archivedAt' => 'ARCHIVED_AT',
        'SpyProductSearchAttributeArchiveTableMap::COL_ARCHIVED_AT' => 'ARCHIVED_AT',
        'COL_ARCHIVED_AT' => 'ARCHIVED_AT',
        'archived_at' => 'ARCHIVED_AT',
        'spy_product_search_attribute_archive.archived_at' => 'ARCHIVED_AT',
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
        $this->setName('spy_product_search_attribute_archive');
        $this->setPhpName('SpyProductSearchAttributeArchive');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Orm\\Zed\\ProductSearch\\Persistence\\SpyProductSearchAttributeArchive');
        $this->setPackage('src.Orm.Zed.ProductSearch.Persistence');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('id_product_search_attribute', 'IdProductSearchAttribute', 'INTEGER', true, null, null);
        $this->addColumn('fk_product_attribute_key', 'FkProductAttributeKey', 'INTEGER', true, null, null);
        $this->addColumn('filter_type', 'FilterType', 'VARCHAR', true, 255, null);
        $this->addColumn('position', 'Position', 'INTEGER', true, null, 0);
        $this->addColumn('synced', 'Synced', 'BOOLEAN', false, 1, false);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductSearchAttribute', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductSearchAttribute', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductSearchAttribute', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductSearchAttribute', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductSearchAttribute', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductSearchAttribute', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdProductSearchAttribute', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyProductSearchAttributeArchiveTableMap::CLASS_DEFAULT : SpyProductSearchAttributeArchiveTableMap::OM_CLASS;
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
     * @return array           (SpyProductSearchAttributeArchive object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SpyProductSearchAttributeArchiveTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyProductSearchAttributeArchiveTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyProductSearchAttributeArchiveTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyProductSearchAttributeArchiveTableMap::OM_CLASS;
            /** @var SpyProductSearchAttributeArchive $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyProductSearchAttributeArchiveTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyProductSearchAttributeArchiveTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyProductSearchAttributeArchiveTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyProductSearchAttributeArchive $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyProductSearchAttributeArchiveTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyProductSearchAttributeArchiveTableMap::COL_ID_PRODUCT_SEARCH_ATTRIBUTE);
            $criteria->addSelectColumn(SpyProductSearchAttributeArchiveTableMap::COL_FK_PRODUCT_ATTRIBUTE_KEY);
            $criteria->addSelectColumn(SpyProductSearchAttributeArchiveTableMap::COL_FILTER_TYPE);
            $criteria->addSelectColumn(SpyProductSearchAttributeArchiveTableMap::COL_POSITION);
            $criteria->addSelectColumn(SpyProductSearchAttributeArchiveTableMap::COL_SYNCED);
            $criteria->addSelectColumn(SpyProductSearchAttributeArchiveTableMap::COL_ARCHIVED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id_product_search_attribute');
            $criteria->addSelectColumn($alias . '.fk_product_attribute_key');
            $criteria->addSelectColumn($alias . '.filter_type');
            $criteria->addSelectColumn($alias . '.position');
            $criteria->addSelectColumn($alias . '.synced');
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
            $criteria->removeSelectColumn(SpyProductSearchAttributeArchiveTableMap::COL_ID_PRODUCT_SEARCH_ATTRIBUTE);
            $criteria->removeSelectColumn(SpyProductSearchAttributeArchiveTableMap::COL_FK_PRODUCT_ATTRIBUTE_KEY);
            $criteria->removeSelectColumn(SpyProductSearchAttributeArchiveTableMap::COL_FILTER_TYPE);
            $criteria->removeSelectColumn(SpyProductSearchAttributeArchiveTableMap::COL_POSITION);
            $criteria->removeSelectColumn(SpyProductSearchAttributeArchiveTableMap::COL_SYNCED);
            $criteria->removeSelectColumn(SpyProductSearchAttributeArchiveTableMap::COL_ARCHIVED_AT);
        } else {
            $criteria->removeSelectColumn($alias . '.id_product_search_attribute');
            $criteria->removeSelectColumn($alias . '.fk_product_attribute_key');
            $criteria->removeSelectColumn($alias . '.filter_type');
            $criteria->removeSelectColumn($alias . '.position');
            $criteria->removeSelectColumn($alias . '.synced');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyProductSearchAttributeArchiveTableMap::DATABASE_NAME)->getTable(SpyProductSearchAttributeArchiveTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyProductSearchAttributeArchive or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SpyProductSearchAttributeArchive object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductSearchAttributeArchiveTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttributeArchive) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyProductSearchAttributeArchiveTableMap::DATABASE_NAME);
            $criteria->add(SpyProductSearchAttributeArchiveTableMap::COL_ID_PRODUCT_SEARCH_ATTRIBUTE, (array) $values, Criteria::IN);
        }

        $query = SpyProductSearchAttributeArchiveQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyProductSearchAttributeArchiveTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyProductSearchAttributeArchiveTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_product_search_attribute_archive table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SpyProductSearchAttributeArchiveQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyProductSearchAttributeArchive or Criteria object.
     *
     * @param mixed               $criteria Criteria or SpyProductSearchAttributeArchive object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductSearchAttributeArchiveTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyProductSearchAttributeArchive object
        }


        // Set the correct dbName
        $query = SpyProductSearchAttributeArchiveQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SpyProductSearchAttributeArchiveTableMap
