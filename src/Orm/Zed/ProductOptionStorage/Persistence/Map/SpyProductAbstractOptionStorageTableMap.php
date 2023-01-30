<?php

namespace Orm\Zed\ProductOptionStorage\Persistence\Map;

use Orm\Zed\ProductOptionStorage\Persistence\SpyProductAbstractOptionStorage;
use Orm\Zed\ProductOptionStorage\Persistence\SpyProductAbstractOptionStorageQuery;
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
 * This class defines the structure of the 'spy_product_abstract_option_storage' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyProductAbstractOptionStorageTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.Orm.Zed.ProductOptionStorage.Persistence.Map.SpyProductAbstractOptionStorageTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'spy_product_abstract_option_storage';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Orm\\Zed\\ProductOptionStorage\\Persistence\\SpyProductAbstractOptionStorage';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'src.Orm.Zed.ProductOptionStorage.Persistence.SpyProductAbstractOptionStorage';

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
     * the column name for the id_product_abstract_option_storage field
     */
    const COL_ID_PRODUCT_ABSTRACT_OPTION_STORAGE = 'spy_product_abstract_option_storage.id_product_abstract_option_storage';

    /**
     * the column name for the fk_product_abstract field
     */
    const COL_FK_PRODUCT_ABSTRACT = 'spy_product_abstract_option_storage.fk_product_abstract';

    /**
     * the column name for the data field
     */
    const COL_DATA = 'spy_product_abstract_option_storage.data';

    /**
     * the column name for the store field
     */
    const COL_STORE = 'spy_product_abstract_option_storage.store';

    /**
     * the column name for the alias_keys field
     */
    const COL_ALIAS_KEYS = 'spy_product_abstract_option_storage.alias_keys';

    /**
     * the column name for the key field
     */
    const COL_KEY = 'spy_product_abstract_option_storage.key';

    /**
     * the column name for the created_at field
     */
    const COL_CREATED_AT = 'spy_product_abstract_option_storage.created_at';

    /**
     * the column name for the updated_at field
     */
    const COL_UPDATED_AT = 'spy_product_abstract_option_storage.updated_at';

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
        self::TYPE_PHPNAME       => array('IdProductAbstractOptionStorage', 'FkProductAbstract', 'Data', 'Store', 'AliasKeys', 'Key', 'CreatedAt', 'UpdatedAt', ),
        self::TYPE_CAMELNAME     => array('idProductAbstractOptionStorage', 'fkProductAbstract', 'data', 'store', 'aliasKeys', 'key', 'createdAt', 'updatedAt', ),
        self::TYPE_COLNAME       => array(SpyProductAbstractOptionStorageTableMap::COL_ID_PRODUCT_ABSTRACT_OPTION_STORAGE, SpyProductAbstractOptionStorageTableMap::COL_FK_PRODUCT_ABSTRACT, SpyProductAbstractOptionStorageTableMap::COL_DATA, SpyProductAbstractOptionStorageTableMap::COL_STORE, SpyProductAbstractOptionStorageTableMap::COL_ALIAS_KEYS, SpyProductAbstractOptionStorageTableMap::COL_KEY, SpyProductAbstractOptionStorageTableMap::COL_CREATED_AT, SpyProductAbstractOptionStorageTableMap::COL_UPDATED_AT, ),
        self::TYPE_FIELDNAME     => array('id_product_abstract_option_storage', 'fk_product_abstract', 'data', 'store', 'alias_keys', 'key', 'created_at', 'updated_at', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('IdProductAbstractOptionStorage' => 0, 'FkProductAbstract' => 1, 'Data' => 2, 'Store' => 3, 'AliasKeys' => 4, 'Key' => 5, 'CreatedAt' => 6, 'UpdatedAt' => 7, ),
        self::TYPE_CAMELNAME     => array('idProductAbstractOptionStorage' => 0, 'fkProductAbstract' => 1, 'data' => 2, 'store' => 3, 'aliasKeys' => 4, 'key' => 5, 'createdAt' => 6, 'updatedAt' => 7, ),
        self::TYPE_COLNAME       => array(SpyProductAbstractOptionStorageTableMap::COL_ID_PRODUCT_ABSTRACT_OPTION_STORAGE => 0, SpyProductAbstractOptionStorageTableMap::COL_FK_PRODUCT_ABSTRACT => 1, SpyProductAbstractOptionStorageTableMap::COL_DATA => 2, SpyProductAbstractOptionStorageTableMap::COL_STORE => 3, SpyProductAbstractOptionStorageTableMap::COL_ALIAS_KEYS => 4, SpyProductAbstractOptionStorageTableMap::COL_KEY => 5, SpyProductAbstractOptionStorageTableMap::COL_CREATED_AT => 6, SpyProductAbstractOptionStorageTableMap::COL_UPDATED_AT => 7, ),
        self::TYPE_FIELDNAME     => array('id_product_abstract_option_storage' => 0, 'fk_product_abstract' => 1, 'data' => 2, 'store' => 3, 'alias_keys' => 4, 'key' => 5, 'created_at' => 6, 'updated_at' => 7, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [
        'IdProductAbstractOptionStorage' => 'ID_PRODUCT_ABSTRACT_OPTION_STORAGE',
        'SpyProductAbstractOptionStorage.IdProductAbstractOptionStorage' => 'ID_PRODUCT_ABSTRACT_OPTION_STORAGE',
        'idProductAbstractOptionStorage' => 'ID_PRODUCT_ABSTRACT_OPTION_STORAGE',
        'spyProductAbstractOptionStorage.idProductAbstractOptionStorage' => 'ID_PRODUCT_ABSTRACT_OPTION_STORAGE',
        'SpyProductAbstractOptionStorageTableMap::COL_ID_PRODUCT_ABSTRACT_OPTION_STORAGE' => 'ID_PRODUCT_ABSTRACT_OPTION_STORAGE',
        'COL_ID_PRODUCT_ABSTRACT_OPTION_STORAGE' => 'ID_PRODUCT_ABSTRACT_OPTION_STORAGE',
        'id_product_abstract_option_storage' => 'ID_PRODUCT_ABSTRACT_OPTION_STORAGE',
        'spy_product_abstract_option_storage.id_product_abstract_option_storage' => 'ID_PRODUCT_ABSTRACT_OPTION_STORAGE',
        'FkProductAbstract' => 'FK_PRODUCT_ABSTRACT',
        'SpyProductAbstractOptionStorage.FkProductAbstract' => 'FK_PRODUCT_ABSTRACT',
        'fkProductAbstract' => 'FK_PRODUCT_ABSTRACT',
        'spyProductAbstractOptionStorage.fkProductAbstract' => 'FK_PRODUCT_ABSTRACT',
        'SpyProductAbstractOptionStorageTableMap::COL_FK_PRODUCT_ABSTRACT' => 'FK_PRODUCT_ABSTRACT',
        'COL_FK_PRODUCT_ABSTRACT' => 'FK_PRODUCT_ABSTRACT',
        'fk_product_abstract' => 'FK_PRODUCT_ABSTRACT',
        'spy_product_abstract_option_storage.fk_product_abstract' => 'FK_PRODUCT_ABSTRACT',
        'Data' => 'DATA',
        'SpyProductAbstractOptionStorage.Data' => 'DATA',
        'data' => 'DATA',
        'spyProductAbstractOptionStorage.data' => 'DATA',
        'SpyProductAbstractOptionStorageTableMap::COL_DATA' => 'DATA',
        'COL_DATA' => 'DATA',
        'spy_product_abstract_option_storage.data' => 'DATA',
        'Store' => 'STORE',
        'SpyProductAbstractOptionStorage.Store' => 'STORE',
        'store' => 'STORE',
        'spyProductAbstractOptionStorage.store' => 'STORE',
        'SpyProductAbstractOptionStorageTableMap::COL_STORE' => 'STORE',
        'COL_STORE' => 'STORE',
        'spy_product_abstract_option_storage.store' => 'STORE',
        'AliasKeys' => 'ALIAS_KEYS',
        'SpyProductAbstractOptionStorage.AliasKeys' => 'ALIAS_KEYS',
        'aliasKeys' => 'ALIAS_KEYS',
        'spyProductAbstractOptionStorage.aliasKeys' => 'ALIAS_KEYS',
        'SpyProductAbstractOptionStorageTableMap::COL_ALIAS_KEYS' => 'ALIAS_KEYS',
        'COL_ALIAS_KEYS' => 'ALIAS_KEYS',
        'alias_keys' => 'ALIAS_KEYS',
        'spy_product_abstract_option_storage.alias_keys' => 'ALIAS_KEYS',
        'Key' => 'KEY',
        'SpyProductAbstractOptionStorage.Key' => 'KEY',
        'key' => 'KEY',
        'spyProductAbstractOptionStorage.key' => 'KEY',
        'SpyProductAbstractOptionStorageTableMap::COL_KEY' => 'KEY',
        'COL_KEY' => 'KEY',
        'spy_product_abstract_option_storage.key' => 'KEY',
        'CreatedAt' => 'CREATED_AT',
        'SpyProductAbstractOptionStorage.CreatedAt' => 'CREATED_AT',
        'createdAt' => 'CREATED_AT',
        'spyProductAbstractOptionStorage.createdAt' => 'CREATED_AT',
        'SpyProductAbstractOptionStorageTableMap::COL_CREATED_AT' => 'CREATED_AT',
        'COL_CREATED_AT' => 'CREATED_AT',
        'created_at' => 'CREATED_AT',
        'spy_product_abstract_option_storage.created_at' => 'CREATED_AT',
        'UpdatedAt' => 'UPDATED_AT',
        'SpyProductAbstractOptionStorage.UpdatedAt' => 'UPDATED_AT',
        'updatedAt' => 'UPDATED_AT',
        'spyProductAbstractOptionStorage.updatedAt' => 'UPDATED_AT',
        'SpyProductAbstractOptionStorageTableMap::COL_UPDATED_AT' => 'UPDATED_AT',
        'COL_UPDATED_AT' => 'UPDATED_AT',
        'updated_at' => 'UPDATED_AT',
        'spy_product_abstract_option_storage.updated_at' => 'UPDATED_AT',
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
        $this->setName('spy_product_abstract_option_storage');
        $this->setPhpName('SpyProductAbstractOptionStorage');
        $this->setIdentifierQuoting(true);
        $this->setClassName('\\Orm\\Zed\\ProductOptionStorage\\Persistence\\SpyProductAbstractOptionStorage');
        $this->setPackage('src.Orm.Zed.ProductOptionStorage.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_product_abstract_option_storage_pk_seq');
        // columns
        $this->addPrimaryKey('id_product_abstract_option_storage', 'IdProductAbstractOptionStorage', 'BIGINT', true, null, null);
        $this->addColumn('fk_product_abstract', 'FkProductAbstract', 'INTEGER', true, null, null);
        $this->addColumn('data', 'Data', 'CLOB', false, null, null);
        $this->addColumn('store', 'Store', 'VARCHAR', true, 128, null);
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
            'synchronization' => ['resource' => ['value' => 'product_abstract_option'], 'queue_group' => ['value' => 'sync.storage.product'], 'queue_pool' => NULL, 'store' => ['required' => 'true'], 'key_suffix_column' => ['value' => 'fk_product_abstract']],
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductAbstractOptionStorage', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductAbstractOptionStorage', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductAbstractOptionStorage', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductAbstractOptionStorage', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductAbstractOptionStorage', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductAbstractOptionStorage', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdProductAbstractOptionStorage', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyProductAbstractOptionStorageTableMap::CLASS_DEFAULT : SpyProductAbstractOptionStorageTableMap::OM_CLASS;
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
     * @return array           (SpyProductAbstractOptionStorage object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SpyProductAbstractOptionStorageTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyProductAbstractOptionStorageTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyProductAbstractOptionStorageTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyProductAbstractOptionStorageTableMap::OM_CLASS;
            /** @var SpyProductAbstractOptionStorage $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyProductAbstractOptionStorageTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyProductAbstractOptionStorageTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyProductAbstractOptionStorageTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyProductAbstractOptionStorage $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyProductAbstractOptionStorageTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyProductAbstractOptionStorageTableMap::COL_ID_PRODUCT_ABSTRACT_OPTION_STORAGE);
            $criteria->addSelectColumn(SpyProductAbstractOptionStorageTableMap::COL_FK_PRODUCT_ABSTRACT);
            $criteria->addSelectColumn(SpyProductAbstractOptionStorageTableMap::COL_DATA);
            $criteria->addSelectColumn(SpyProductAbstractOptionStorageTableMap::COL_STORE);
            $criteria->addSelectColumn(SpyProductAbstractOptionStorageTableMap::COL_ALIAS_KEYS);
            $criteria->addSelectColumn(SpyProductAbstractOptionStorageTableMap::COL_KEY);
            $criteria->addSelectColumn(SpyProductAbstractOptionStorageTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(SpyProductAbstractOptionStorageTableMap::COL_UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id_product_abstract_option_storage');
            $criteria->addSelectColumn($alias . '.fk_product_abstract');
            $criteria->addSelectColumn($alias . '.data');
            $criteria->addSelectColumn($alias . '.store');
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
            $criteria->removeSelectColumn(SpyProductAbstractOptionStorageTableMap::COL_ID_PRODUCT_ABSTRACT_OPTION_STORAGE);
            $criteria->removeSelectColumn(SpyProductAbstractOptionStorageTableMap::COL_FK_PRODUCT_ABSTRACT);
            $criteria->removeSelectColumn(SpyProductAbstractOptionStorageTableMap::COL_DATA);
            $criteria->removeSelectColumn(SpyProductAbstractOptionStorageTableMap::COL_STORE);
            $criteria->removeSelectColumn(SpyProductAbstractOptionStorageTableMap::COL_ALIAS_KEYS);
            $criteria->removeSelectColumn(SpyProductAbstractOptionStorageTableMap::COL_KEY);
            $criteria->removeSelectColumn(SpyProductAbstractOptionStorageTableMap::COL_CREATED_AT);
            $criteria->removeSelectColumn(SpyProductAbstractOptionStorageTableMap::COL_UPDATED_AT);
        } else {
            $criteria->removeSelectColumn($alias . '.id_product_abstract_option_storage');
            $criteria->removeSelectColumn($alias . '.fk_product_abstract');
            $criteria->removeSelectColumn($alias . '.data');
            $criteria->removeSelectColumn($alias . '.store');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyProductAbstractOptionStorageTableMap::DATABASE_NAME)->getTable(SpyProductAbstractOptionStorageTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyProductAbstractOptionStorage or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SpyProductAbstractOptionStorage object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductAbstractOptionStorageTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\ProductOptionStorage\Persistence\SpyProductAbstractOptionStorage) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyProductAbstractOptionStorageTableMap::DATABASE_NAME);
            $criteria->add(SpyProductAbstractOptionStorageTableMap::COL_ID_PRODUCT_ABSTRACT_OPTION_STORAGE, (array) $values, Criteria::IN);
        }

        $query = SpyProductAbstractOptionStorageQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyProductAbstractOptionStorageTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyProductAbstractOptionStorageTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_product_abstract_option_storage table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SpyProductAbstractOptionStorageQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyProductAbstractOptionStorage or Criteria object.
     *
     * @param mixed               $criteria Criteria or SpyProductAbstractOptionStorage object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductAbstractOptionStorageTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyProductAbstractOptionStorage object
        }

        if ($criteria->containsKey(SpyProductAbstractOptionStorageTableMap::COL_ID_PRODUCT_ABSTRACT_OPTION_STORAGE) && $criteria->keyContainsValue(SpyProductAbstractOptionStorageTableMap::COL_ID_PRODUCT_ABSTRACT_OPTION_STORAGE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpyProductAbstractOptionStorageTableMap::COL_ID_PRODUCT_ABSTRACT_OPTION_STORAGE.')');
        }


        // Set the correct dbName
        $query = SpyProductAbstractOptionStorageQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SpyProductAbstractOptionStorageTableMap
