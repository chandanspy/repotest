<?php

namespace Orm\Zed\CmsBlockProductStorage\Persistence\Map;

use Orm\Zed\CmsBlockProductStorage\Persistence\SpyCmsBlockProductStorage;
use Orm\Zed\CmsBlockProductStorage\Persistence\SpyCmsBlockProductStorageQuery;
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
 * This class defines the structure of the 'spy_cms_block_product_storage' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyCmsBlockProductStorageTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.Orm.Zed.CmsBlockProductStorage.Persistence.Map.SpyCmsBlockProductStorageTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'spy_cms_block_product_storage';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Orm\\Zed\\CmsBlockProductStorage\\Persistence\\SpyCmsBlockProductStorage';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'src.Orm.Zed.CmsBlockProductStorage.Persistence.SpyCmsBlockProductStorage';

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
     * the column name for the id_cms_block_product_storage field
     */
    const COL_ID_CMS_BLOCK_PRODUCT_STORAGE = 'spy_cms_block_product_storage.id_cms_block_product_storage';

    /**
     * the column name for the fk_product_abstract field
     */
    const COL_FK_PRODUCT_ABSTRACT = 'spy_cms_block_product_storage.fk_product_abstract';

    /**
     * the column name for the data field
     */
    const COL_DATA = 'spy_cms_block_product_storage.data';

    /**
     * the column name for the alias_keys field
     */
    const COL_ALIAS_KEYS = 'spy_cms_block_product_storage.alias_keys';

    /**
     * the column name for the key field
     */
    const COL_KEY = 'spy_cms_block_product_storage.key';

    /**
     * the column name for the created_at field
     */
    const COL_CREATED_AT = 'spy_cms_block_product_storage.created_at';

    /**
     * the column name for the updated_at field
     */
    const COL_UPDATED_AT = 'spy_cms_block_product_storage.updated_at';

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
        self::TYPE_PHPNAME       => array('IdCmsBlockProductStorage', 'FkProductAbstract', 'Data', 'AliasKeys', 'Key', 'CreatedAt', 'UpdatedAt', ),
        self::TYPE_CAMELNAME     => array('idCmsBlockProductStorage', 'fkProductAbstract', 'data', 'aliasKeys', 'key', 'createdAt', 'updatedAt', ),
        self::TYPE_COLNAME       => array(SpyCmsBlockProductStorageTableMap::COL_ID_CMS_BLOCK_PRODUCT_STORAGE, SpyCmsBlockProductStorageTableMap::COL_FK_PRODUCT_ABSTRACT, SpyCmsBlockProductStorageTableMap::COL_DATA, SpyCmsBlockProductStorageTableMap::COL_ALIAS_KEYS, SpyCmsBlockProductStorageTableMap::COL_KEY, SpyCmsBlockProductStorageTableMap::COL_CREATED_AT, SpyCmsBlockProductStorageTableMap::COL_UPDATED_AT, ),
        self::TYPE_FIELDNAME     => array('id_cms_block_product_storage', 'fk_product_abstract', 'data', 'alias_keys', 'key', 'created_at', 'updated_at', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('IdCmsBlockProductStorage' => 0, 'FkProductAbstract' => 1, 'Data' => 2, 'AliasKeys' => 3, 'Key' => 4, 'CreatedAt' => 5, 'UpdatedAt' => 6, ),
        self::TYPE_CAMELNAME     => array('idCmsBlockProductStorage' => 0, 'fkProductAbstract' => 1, 'data' => 2, 'aliasKeys' => 3, 'key' => 4, 'createdAt' => 5, 'updatedAt' => 6, ),
        self::TYPE_COLNAME       => array(SpyCmsBlockProductStorageTableMap::COL_ID_CMS_BLOCK_PRODUCT_STORAGE => 0, SpyCmsBlockProductStorageTableMap::COL_FK_PRODUCT_ABSTRACT => 1, SpyCmsBlockProductStorageTableMap::COL_DATA => 2, SpyCmsBlockProductStorageTableMap::COL_ALIAS_KEYS => 3, SpyCmsBlockProductStorageTableMap::COL_KEY => 4, SpyCmsBlockProductStorageTableMap::COL_CREATED_AT => 5, SpyCmsBlockProductStorageTableMap::COL_UPDATED_AT => 6, ),
        self::TYPE_FIELDNAME     => array('id_cms_block_product_storage' => 0, 'fk_product_abstract' => 1, 'data' => 2, 'alias_keys' => 3, 'key' => 4, 'created_at' => 5, 'updated_at' => 6, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [
        'IdCmsBlockProductStorage' => 'ID_CMS_BLOCK_PRODUCT_STORAGE',
        'SpyCmsBlockProductStorage.IdCmsBlockProductStorage' => 'ID_CMS_BLOCK_PRODUCT_STORAGE',
        'idCmsBlockProductStorage' => 'ID_CMS_BLOCK_PRODUCT_STORAGE',
        'spyCmsBlockProductStorage.idCmsBlockProductStorage' => 'ID_CMS_BLOCK_PRODUCT_STORAGE',
        'SpyCmsBlockProductStorageTableMap::COL_ID_CMS_BLOCK_PRODUCT_STORAGE' => 'ID_CMS_BLOCK_PRODUCT_STORAGE',
        'COL_ID_CMS_BLOCK_PRODUCT_STORAGE' => 'ID_CMS_BLOCK_PRODUCT_STORAGE',
        'id_cms_block_product_storage' => 'ID_CMS_BLOCK_PRODUCT_STORAGE',
        'spy_cms_block_product_storage.id_cms_block_product_storage' => 'ID_CMS_BLOCK_PRODUCT_STORAGE',
        'FkProductAbstract' => 'FK_PRODUCT_ABSTRACT',
        'SpyCmsBlockProductStorage.FkProductAbstract' => 'FK_PRODUCT_ABSTRACT',
        'fkProductAbstract' => 'FK_PRODUCT_ABSTRACT',
        'spyCmsBlockProductStorage.fkProductAbstract' => 'FK_PRODUCT_ABSTRACT',
        'SpyCmsBlockProductStorageTableMap::COL_FK_PRODUCT_ABSTRACT' => 'FK_PRODUCT_ABSTRACT',
        'COL_FK_PRODUCT_ABSTRACT' => 'FK_PRODUCT_ABSTRACT',
        'fk_product_abstract' => 'FK_PRODUCT_ABSTRACT',
        'spy_cms_block_product_storage.fk_product_abstract' => 'FK_PRODUCT_ABSTRACT',
        'Data' => 'DATA',
        'SpyCmsBlockProductStorage.Data' => 'DATA',
        'data' => 'DATA',
        'spyCmsBlockProductStorage.data' => 'DATA',
        'SpyCmsBlockProductStorageTableMap::COL_DATA' => 'DATA',
        'COL_DATA' => 'DATA',
        'spy_cms_block_product_storage.data' => 'DATA',
        'AliasKeys' => 'ALIAS_KEYS',
        'SpyCmsBlockProductStorage.AliasKeys' => 'ALIAS_KEYS',
        'aliasKeys' => 'ALIAS_KEYS',
        'spyCmsBlockProductStorage.aliasKeys' => 'ALIAS_KEYS',
        'SpyCmsBlockProductStorageTableMap::COL_ALIAS_KEYS' => 'ALIAS_KEYS',
        'COL_ALIAS_KEYS' => 'ALIAS_KEYS',
        'alias_keys' => 'ALIAS_KEYS',
        'spy_cms_block_product_storage.alias_keys' => 'ALIAS_KEYS',
        'Key' => 'KEY',
        'SpyCmsBlockProductStorage.Key' => 'KEY',
        'key' => 'KEY',
        'spyCmsBlockProductStorage.key' => 'KEY',
        'SpyCmsBlockProductStorageTableMap::COL_KEY' => 'KEY',
        'COL_KEY' => 'KEY',
        'spy_cms_block_product_storage.key' => 'KEY',
        'CreatedAt' => 'CREATED_AT',
        'SpyCmsBlockProductStorage.CreatedAt' => 'CREATED_AT',
        'createdAt' => 'CREATED_AT',
        'spyCmsBlockProductStorage.createdAt' => 'CREATED_AT',
        'SpyCmsBlockProductStorageTableMap::COL_CREATED_AT' => 'CREATED_AT',
        'COL_CREATED_AT' => 'CREATED_AT',
        'created_at' => 'CREATED_AT',
        'spy_cms_block_product_storage.created_at' => 'CREATED_AT',
        'UpdatedAt' => 'UPDATED_AT',
        'SpyCmsBlockProductStorage.UpdatedAt' => 'UPDATED_AT',
        'updatedAt' => 'UPDATED_AT',
        'spyCmsBlockProductStorage.updatedAt' => 'UPDATED_AT',
        'SpyCmsBlockProductStorageTableMap::COL_UPDATED_AT' => 'UPDATED_AT',
        'COL_UPDATED_AT' => 'UPDATED_AT',
        'updated_at' => 'UPDATED_AT',
        'spy_cms_block_product_storage.updated_at' => 'UPDATED_AT',
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
        $this->setName('spy_cms_block_product_storage');
        $this->setPhpName('SpyCmsBlockProductStorage');
        $this->setIdentifierQuoting(true);
        $this->setClassName('\\Orm\\Zed\\CmsBlockProductStorage\\Persistence\\SpyCmsBlockProductStorage');
        $this->setPackage('src.Orm.Zed.CmsBlockProductStorage.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_cms_block_product_storage_pk_seq');
        // columns
        $this->addPrimaryKey('id_cms_block_product_storage', 'IdCmsBlockProductStorage', 'BIGINT', true, null, null);
        $this->addColumn('fk_product_abstract', 'FkProductAbstract', 'INTEGER', true, null, null);
        $this->addColumn('data', 'Data', 'CLOB', false, null, null);
        $this->addColumn('alias_keys', 'AliasKeys', 'VARCHAR', false, 255, null);
        $this->addColumn('key', 'Key', 'VARCHAR', false, 255, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', false, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
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
            'synchronization' => ['resource' => ['value' => 'cms_block_product'], 'queue_group' => ['value' => 'sync.storage.cms'], 'queue_pool' => NULL, 'key_suffix_column' => ['value' => 'fk_product_abstract']],
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCmsBlockProductStorage', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCmsBlockProductStorage', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCmsBlockProductStorage', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCmsBlockProductStorage', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCmsBlockProductStorage', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCmsBlockProductStorage', TableMap::TYPE_PHPNAME, $indexType)];
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
        return (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('IdCmsBlockProductStorage', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyCmsBlockProductStorageTableMap::CLASS_DEFAULT : SpyCmsBlockProductStorageTableMap::OM_CLASS;
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
     * @return array           (SpyCmsBlockProductStorage object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SpyCmsBlockProductStorageTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyCmsBlockProductStorageTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyCmsBlockProductStorageTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyCmsBlockProductStorageTableMap::OM_CLASS;
            /** @var SpyCmsBlockProductStorage $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyCmsBlockProductStorageTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyCmsBlockProductStorageTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyCmsBlockProductStorageTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyCmsBlockProductStorage $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyCmsBlockProductStorageTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyCmsBlockProductStorageTableMap::COL_ID_CMS_BLOCK_PRODUCT_STORAGE);
            $criteria->addSelectColumn(SpyCmsBlockProductStorageTableMap::COL_FK_PRODUCT_ABSTRACT);
            $criteria->addSelectColumn(SpyCmsBlockProductStorageTableMap::COL_DATA);
            $criteria->addSelectColumn(SpyCmsBlockProductStorageTableMap::COL_ALIAS_KEYS);
            $criteria->addSelectColumn(SpyCmsBlockProductStorageTableMap::COL_KEY);
            $criteria->addSelectColumn(SpyCmsBlockProductStorageTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(SpyCmsBlockProductStorageTableMap::COL_UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id_cms_block_product_storage');
            $criteria->addSelectColumn($alias . '.fk_product_abstract');
            $criteria->addSelectColumn($alias . '.data');
            $criteria->addSelectColumn($alias . '.alias_keys');
            $criteria->addSelectColumn($alias . '.key');
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
            $criteria->removeSelectColumn(SpyCmsBlockProductStorageTableMap::COL_ID_CMS_BLOCK_PRODUCT_STORAGE);
            $criteria->removeSelectColumn(SpyCmsBlockProductStorageTableMap::COL_FK_PRODUCT_ABSTRACT);
            $criteria->removeSelectColumn(SpyCmsBlockProductStorageTableMap::COL_DATA);
            $criteria->removeSelectColumn(SpyCmsBlockProductStorageTableMap::COL_ALIAS_KEYS);
            $criteria->removeSelectColumn(SpyCmsBlockProductStorageTableMap::COL_KEY);
            $criteria->removeSelectColumn(SpyCmsBlockProductStorageTableMap::COL_CREATED_AT);
            $criteria->removeSelectColumn(SpyCmsBlockProductStorageTableMap::COL_UPDATED_AT);
        } else {
            $criteria->removeSelectColumn($alias . '.id_cms_block_product_storage');
            $criteria->removeSelectColumn($alias . '.fk_product_abstract');
            $criteria->removeSelectColumn($alias . '.data');
            $criteria->removeSelectColumn($alias . '.alias_keys');
            $criteria->removeSelectColumn($alias . '.key');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyCmsBlockProductStorageTableMap::DATABASE_NAME)->getTable(SpyCmsBlockProductStorageTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyCmsBlockProductStorage or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SpyCmsBlockProductStorage object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCmsBlockProductStorageTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\CmsBlockProductStorage\Persistence\SpyCmsBlockProductStorage) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyCmsBlockProductStorageTableMap::DATABASE_NAME);
            $criteria->add(SpyCmsBlockProductStorageTableMap::COL_ID_CMS_BLOCK_PRODUCT_STORAGE, (array) $values, Criteria::IN);
        }

        $query = SpyCmsBlockProductStorageQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyCmsBlockProductStorageTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyCmsBlockProductStorageTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_cms_block_product_storage table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SpyCmsBlockProductStorageQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyCmsBlockProductStorage or Criteria object.
     *
     * @param mixed               $criteria Criteria or SpyCmsBlockProductStorage object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCmsBlockProductStorageTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyCmsBlockProductStorage object
        }

        if ($criteria->containsKey(SpyCmsBlockProductStorageTableMap::COL_ID_CMS_BLOCK_PRODUCT_STORAGE) && $criteria->keyContainsValue(SpyCmsBlockProductStorageTableMap::COL_ID_CMS_BLOCK_PRODUCT_STORAGE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpyCmsBlockProductStorageTableMap::COL_ID_CMS_BLOCK_PRODUCT_STORAGE.')');
        }


        // Set the correct dbName
        $query = SpyCmsBlockProductStorageQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SpyCmsBlockProductStorageTableMap
