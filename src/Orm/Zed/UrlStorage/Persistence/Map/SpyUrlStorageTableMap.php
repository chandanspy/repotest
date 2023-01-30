<?php

namespace Orm\Zed\UrlStorage\Persistence\Map;

use Orm\Zed\UrlStorage\Persistence\SpyUrlStorage;
use Orm\Zed\UrlStorage\Persistence\SpyUrlStorageQuery;
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
 * This class defines the structure of the 'spy_url_storage' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyUrlStorageTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.Orm.Zed.UrlStorage.Persistence.Map.SpyUrlStorageTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'spy_url_storage';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Orm\\Zed\\UrlStorage\\Persistence\\SpyUrlStorage';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'src.Orm.Zed.UrlStorage.Persistence.SpyUrlStorage';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 13;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 13;

    /**
     * the column name for the id_url_storage field
     */
    const COL_ID_URL_STORAGE = 'spy_url_storage.id_url_storage';

    /**
     * the column name for the fk_categorynode field
     */
    const COL_FK_CATEGORYNODE = 'spy_url_storage.fk_categorynode';

    /**
     * the column name for the fk_page field
     */
    const COL_FK_PAGE = 'spy_url_storage.fk_page';

    /**
     * the column name for the fk_product_abstract field
     */
    const COL_FK_PRODUCT_ABSTRACT = 'spy_url_storage.fk_product_abstract';

    /**
     * the column name for the fk_product_set field
     */
    const COL_FK_PRODUCT_SET = 'spy_url_storage.fk_product_set';

    /**
     * the column name for the fk_redirect field
     */
    const COL_FK_REDIRECT = 'spy_url_storage.fk_redirect';

    /**
     * the column name for the fk_url field
     */
    const COL_FK_URL = 'spy_url_storage.fk_url';

    /**
     * the column name for the url field
     */
    const COL_URL = 'spy_url_storage.url';

    /**
     * the column name for the data field
     */
    const COL_DATA = 'spy_url_storage.data';

    /**
     * the column name for the alias_keys field
     */
    const COL_ALIAS_KEYS = 'spy_url_storage.alias_keys';

    /**
     * the column name for the key field
     */
    const COL_KEY = 'spy_url_storage.key';

    /**
     * the column name for the created_at field
     */
    const COL_CREATED_AT = 'spy_url_storage.created_at';

    /**
     * the column name for the updated_at field
     */
    const COL_UPDATED_AT = 'spy_url_storage.updated_at';

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
        self::TYPE_PHPNAME       => array('IdUrlStorage', 'FkCategorynode', 'FkPage', 'FkProductAbstract', 'FkProductSet', 'FkRedirect', 'FkUrl', 'Url', 'Data', 'AliasKeys', 'Key', 'CreatedAt', 'UpdatedAt', ),
        self::TYPE_CAMELNAME     => array('idUrlStorage', 'fkCategorynode', 'fkPage', 'fkProductAbstract', 'fkProductSet', 'fkRedirect', 'fkUrl', 'url', 'data', 'aliasKeys', 'key', 'createdAt', 'updatedAt', ),
        self::TYPE_COLNAME       => array(SpyUrlStorageTableMap::COL_ID_URL_STORAGE, SpyUrlStorageTableMap::COL_FK_CATEGORYNODE, SpyUrlStorageTableMap::COL_FK_PAGE, SpyUrlStorageTableMap::COL_FK_PRODUCT_ABSTRACT, SpyUrlStorageTableMap::COL_FK_PRODUCT_SET, SpyUrlStorageTableMap::COL_FK_REDIRECT, SpyUrlStorageTableMap::COL_FK_URL, SpyUrlStorageTableMap::COL_URL, SpyUrlStorageTableMap::COL_DATA, SpyUrlStorageTableMap::COL_ALIAS_KEYS, SpyUrlStorageTableMap::COL_KEY, SpyUrlStorageTableMap::COL_CREATED_AT, SpyUrlStorageTableMap::COL_UPDATED_AT, ),
        self::TYPE_FIELDNAME     => array('id_url_storage', 'fk_categorynode', 'fk_page', 'fk_product_abstract', 'fk_product_set', 'fk_redirect', 'fk_url', 'url', 'data', 'alias_keys', 'key', 'created_at', 'updated_at', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('IdUrlStorage' => 0, 'FkCategorynode' => 1, 'FkPage' => 2, 'FkProductAbstract' => 3, 'FkProductSet' => 4, 'FkRedirect' => 5, 'FkUrl' => 6, 'Url' => 7, 'Data' => 8, 'AliasKeys' => 9, 'Key' => 10, 'CreatedAt' => 11, 'UpdatedAt' => 12, ),
        self::TYPE_CAMELNAME     => array('idUrlStorage' => 0, 'fkCategorynode' => 1, 'fkPage' => 2, 'fkProductAbstract' => 3, 'fkProductSet' => 4, 'fkRedirect' => 5, 'fkUrl' => 6, 'url' => 7, 'data' => 8, 'aliasKeys' => 9, 'key' => 10, 'createdAt' => 11, 'updatedAt' => 12, ),
        self::TYPE_COLNAME       => array(SpyUrlStorageTableMap::COL_ID_URL_STORAGE => 0, SpyUrlStorageTableMap::COL_FK_CATEGORYNODE => 1, SpyUrlStorageTableMap::COL_FK_PAGE => 2, SpyUrlStorageTableMap::COL_FK_PRODUCT_ABSTRACT => 3, SpyUrlStorageTableMap::COL_FK_PRODUCT_SET => 4, SpyUrlStorageTableMap::COL_FK_REDIRECT => 5, SpyUrlStorageTableMap::COL_FK_URL => 6, SpyUrlStorageTableMap::COL_URL => 7, SpyUrlStorageTableMap::COL_DATA => 8, SpyUrlStorageTableMap::COL_ALIAS_KEYS => 9, SpyUrlStorageTableMap::COL_KEY => 10, SpyUrlStorageTableMap::COL_CREATED_AT => 11, SpyUrlStorageTableMap::COL_UPDATED_AT => 12, ),
        self::TYPE_FIELDNAME     => array('id_url_storage' => 0, 'fk_categorynode' => 1, 'fk_page' => 2, 'fk_product_abstract' => 3, 'fk_product_set' => 4, 'fk_redirect' => 5, 'fk_url' => 6, 'url' => 7, 'data' => 8, 'alias_keys' => 9, 'key' => 10, 'created_at' => 11, 'updated_at' => 12, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [
        'IdUrlStorage' => 'ID_URL_STORAGE',
        'SpyUrlStorage.IdUrlStorage' => 'ID_URL_STORAGE',
        'idUrlStorage' => 'ID_URL_STORAGE',
        'spyUrlStorage.idUrlStorage' => 'ID_URL_STORAGE',
        'SpyUrlStorageTableMap::COL_ID_URL_STORAGE' => 'ID_URL_STORAGE',
        'COL_ID_URL_STORAGE' => 'ID_URL_STORAGE',
        'id_url_storage' => 'ID_URL_STORAGE',
        'spy_url_storage.id_url_storage' => 'ID_URL_STORAGE',
        'FkCategorynode' => 'FK_CATEGORYNODE',
        'SpyUrlStorage.FkCategorynode' => 'FK_CATEGORYNODE',
        'fkCategorynode' => 'FK_CATEGORYNODE',
        'spyUrlStorage.fkCategorynode' => 'FK_CATEGORYNODE',
        'SpyUrlStorageTableMap::COL_FK_CATEGORYNODE' => 'FK_CATEGORYNODE',
        'COL_FK_CATEGORYNODE' => 'FK_CATEGORYNODE',
        'fk_categorynode' => 'FK_CATEGORYNODE',
        'spy_url_storage.fk_categorynode' => 'FK_CATEGORYNODE',
        'FkPage' => 'FK_PAGE',
        'SpyUrlStorage.FkPage' => 'FK_PAGE',
        'fkPage' => 'FK_PAGE',
        'spyUrlStorage.fkPage' => 'FK_PAGE',
        'SpyUrlStorageTableMap::COL_FK_PAGE' => 'FK_PAGE',
        'COL_FK_PAGE' => 'FK_PAGE',
        'fk_page' => 'FK_PAGE',
        'spy_url_storage.fk_page' => 'FK_PAGE',
        'FkProductAbstract' => 'FK_PRODUCT_ABSTRACT',
        'SpyUrlStorage.FkProductAbstract' => 'FK_PRODUCT_ABSTRACT',
        'fkProductAbstract' => 'FK_PRODUCT_ABSTRACT',
        'spyUrlStorage.fkProductAbstract' => 'FK_PRODUCT_ABSTRACT',
        'SpyUrlStorageTableMap::COL_FK_PRODUCT_ABSTRACT' => 'FK_PRODUCT_ABSTRACT',
        'COL_FK_PRODUCT_ABSTRACT' => 'FK_PRODUCT_ABSTRACT',
        'fk_product_abstract' => 'FK_PRODUCT_ABSTRACT',
        'spy_url_storage.fk_product_abstract' => 'FK_PRODUCT_ABSTRACT',
        'FkProductSet' => 'FK_PRODUCT_SET',
        'SpyUrlStorage.FkProductSet' => 'FK_PRODUCT_SET',
        'fkProductSet' => 'FK_PRODUCT_SET',
        'spyUrlStorage.fkProductSet' => 'FK_PRODUCT_SET',
        'SpyUrlStorageTableMap::COL_FK_PRODUCT_SET' => 'FK_PRODUCT_SET',
        'COL_FK_PRODUCT_SET' => 'FK_PRODUCT_SET',
        'fk_product_set' => 'FK_PRODUCT_SET',
        'spy_url_storage.fk_product_set' => 'FK_PRODUCT_SET',
        'FkRedirect' => 'FK_REDIRECT',
        'SpyUrlStorage.FkRedirect' => 'FK_REDIRECT',
        'fkRedirect' => 'FK_REDIRECT',
        'spyUrlStorage.fkRedirect' => 'FK_REDIRECT',
        'SpyUrlStorageTableMap::COL_FK_REDIRECT' => 'FK_REDIRECT',
        'COL_FK_REDIRECT' => 'FK_REDIRECT',
        'fk_redirect' => 'FK_REDIRECT',
        'spy_url_storage.fk_redirect' => 'FK_REDIRECT',
        'FkUrl' => 'FK_URL',
        'SpyUrlStorage.FkUrl' => 'FK_URL',
        'fkUrl' => 'FK_URL',
        'spyUrlStorage.fkUrl' => 'FK_URL',
        'SpyUrlStorageTableMap::COL_FK_URL' => 'FK_URL',
        'COL_FK_URL' => 'FK_URL',
        'fk_url' => 'FK_URL',
        'spy_url_storage.fk_url' => 'FK_URL',
        'Url' => 'URL',
        'SpyUrlStorage.Url' => 'URL',
        'url' => 'URL',
        'spyUrlStorage.url' => 'URL',
        'SpyUrlStorageTableMap::COL_URL' => 'URL',
        'COL_URL' => 'URL',
        'spy_url_storage.url' => 'URL',
        'Data' => 'DATA',
        'SpyUrlStorage.Data' => 'DATA',
        'data' => 'DATA',
        'spyUrlStorage.data' => 'DATA',
        'SpyUrlStorageTableMap::COL_DATA' => 'DATA',
        'COL_DATA' => 'DATA',
        'spy_url_storage.data' => 'DATA',
        'AliasKeys' => 'ALIAS_KEYS',
        'SpyUrlStorage.AliasKeys' => 'ALIAS_KEYS',
        'aliasKeys' => 'ALIAS_KEYS',
        'spyUrlStorage.aliasKeys' => 'ALIAS_KEYS',
        'SpyUrlStorageTableMap::COL_ALIAS_KEYS' => 'ALIAS_KEYS',
        'COL_ALIAS_KEYS' => 'ALIAS_KEYS',
        'alias_keys' => 'ALIAS_KEYS',
        'spy_url_storage.alias_keys' => 'ALIAS_KEYS',
        'Key' => 'KEY',
        'SpyUrlStorage.Key' => 'KEY',
        'key' => 'KEY',
        'spyUrlStorage.key' => 'KEY',
        'SpyUrlStorageTableMap::COL_KEY' => 'KEY',
        'COL_KEY' => 'KEY',
        'spy_url_storage.key' => 'KEY',
        'CreatedAt' => 'CREATED_AT',
        'SpyUrlStorage.CreatedAt' => 'CREATED_AT',
        'createdAt' => 'CREATED_AT',
        'spyUrlStorage.createdAt' => 'CREATED_AT',
        'SpyUrlStorageTableMap::COL_CREATED_AT' => 'CREATED_AT',
        'COL_CREATED_AT' => 'CREATED_AT',
        'created_at' => 'CREATED_AT',
        'spy_url_storage.created_at' => 'CREATED_AT',
        'UpdatedAt' => 'UPDATED_AT',
        'SpyUrlStorage.UpdatedAt' => 'UPDATED_AT',
        'updatedAt' => 'UPDATED_AT',
        'spyUrlStorage.updatedAt' => 'UPDATED_AT',
        'SpyUrlStorageTableMap::COL_UPDATED_AT' => 'UPDATED_AT',
        'COL_UPDATED_AT' => 'UPDATED_AT',
        'updated_at' => 'UPDATED_AT',
        'spy_url_storage.updated_at' => 'UPDATED_AT',
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
        $this->setName('spy_url_storage');
        $this->setPhpName('SpyUrlStorage');
        $this->setIdentifierQuoting(true);
        $this->setClassName('\\Orm\\Zed\\UrlStorage\\Persistence\\SpyUrlStorage');
        $this->setPackage('src.Orm.Zed.UrlStorage.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_url_storage_pk_seq');
        // columns
        $this->addPrimaryKey('id_url_storage', 'IdUrlStorage', 'BIGINT', true, null, null);
        $this->addColumn('fk_categorynode', 'FkCategorynode', 'INTEGER', false, null, null);
        $this->addColumn('fk_page', 'FkPage', 'INTEGER', false, null, null);
        $this->addColumn('fk_product_abstract', 'FkProductAbstract', 'INTEGER', false, null, null);
        $this->addColumn('fk_product_set', 'FkProductSet', 'INTEGER', false, null, null);
        $this->addColumn('fk_redirect', 'FkRedirect', 'INTEGER', false, null, null);
        $this->addColumn('fk_url', 'FkUrl', 'INTEGER', true, null, null);
        $this->addColumn('url', 'Url', 'VARCHAR', true, 255, null);
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
            'synchronization' => ['resource' => ['value' => 'url'], 'queue_group' => ['value' => 'sync.storage.url'], 'queue_pool' => ['value' => 'synchronizationPool'], 'key_suffix_column' => ['value' => 'url']],
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdUrlStorage', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdUrlStorage', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdUrlStorage', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdUrlStorage', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdUrlStorage', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdUrlStorage', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdUrlStorage', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyUrlStorageTableMap::CLASS_DEFAULT : SpyUrlStorageTableMap::OM_CLASS;
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
     * @return array           (SpyUrlStorage object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SpyUrlStorageTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyUrlStorageTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyUrlStorageTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyUrlStorageTableMap::OM_CLASS;
            /** @var SpyUrlStorage $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyUrlStorageTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyUrlStorageTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyUrlStorageTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyUrlStorage $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyUrlStorageTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyUrlStorageTableMap::COL_ID_URL_STORAGE);
            $criteria->addSelectColumn(SpyUrlStorageTableMap::COL_FK_CATEGORYNODE);
            $criteria->addSelectColumn(SpyUrlStorageTableMap::COL_FK_PAGE);
            $criteria->addSelectColumn(SpyUrlStorageTableMap::COL_FK_PRODUCT_ABSTRACT);
            $criteria->addSelectColumn(SpyUrlStorageTableMap::COL_FK_PRODUCT_SET);
            $criteria->addSelectColumn(SpyUrlStorageTableMap::COL_FK_REDIRECT);
            $criteria->addSelectColumn(SpyUrlStorageTableMap::COL_FK_URL);
            $criteria->addSelectColumn(SpyUrlStorageTableMap::COL_URL);
            $criteria->addSelectColumn(SpyUrlStorageTableMap::COL_DATA);
            $criteria->addSelectColumn(SpyUrlStorageTableMap::COL_ALIAS_KEYS);
            $criteria->addSelectColumn(SpyUrlStorageTableMap::COL_KEY);
            $criteria->addSelectColumn(SpyUrlStorageTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(SpyUrlStorageTableMap::COL_UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id_url_storage');
            $criteria->addSelectColumn($alias . '.fk_categorynode');
            $criteria->addSelectColumn($alias . '.fk_page');
            $criteria->addSelectColumn($alias . '.fk_product_abstract');
            $criteria->addSelectColumn($alias . '.fk_product_set');
            $criteria->addSelectColumn($alias . '.fk_redirect');
            $criteria->addSelectColumn($alias . '.fk_url');
            $criteria->addSelectColumn($alias . '.url');
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
            $criteria->removeSelectColumn(SpyUrlStorageTableMap::COL_ID_URL_STORAGE);
            $criteria->removeSelectColumn(SpyUrlStorageTableMap::COL_FK_CATEGORYNODE);
            $criteria->removeSelectColumn(SpyUrlStorageTableMap::COL_FK_PAGE);
            $criteria->removeSelectColumn(SpyUrlStorageTableMap::COL_FK_PRODUCT_ABSTRACT);
            $criteria->removeSelectColumn(SpyUrlStorageTableMap::COL_FK_PRODUCT_SET);
            $criteria->removeSelectColumn(SpyUrlStorageTableMap::COL_FK_REDIRECT);
            $criteria->removeSelectColumn(SpyUrlStorageTableMap::COL_FK_URL);
            $criteria->removeSelectColumn(SpyUrlStorageTableMap::COL_URL);
            $criteria->removeSelectColumn(SpyUrlStorageTableMap::COL_DATA);
            $criteria->removeSelectColumn(SpyUrlStorageTableMap::COL_ALIAS_KEYS);
            $criteria->removeSelectColumn(SpyUrlStorageTableMap::COL_KEY);
            $criteria->removeSelectColumn(SpyUrlStorageTableMap::COL_CREATED_AT);
            $criteria->removeSelectColumn(SpyUrlStorageTableMap::COL_UPDATED_AT);
        } else {
            $criteria->removeSelectColumn($alias . '.id_url_storage');
            $criteria->removeSelectColumn($alias . '.fk_categorynode');
            $criteria->removeSelectColumn($alias . '.fk_page');
            $criteria->removeSelectColumn($alias . '.fk_product_abstract');
            $criteria->removeSelectColumn($alias . '.fk_product_set');
            $criteria->removeSelectColumn($alias . '.fk_redirect');
            $criteria->removeSelectColumn($alias . '.fk_url');
            $criteria->removeSelectColumn($alias . '.url');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyUrlStorageTableMap::DATABASE_NAME)->getTable(SpyUrlStorageTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyUrlStorage or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SpyUrlStorage object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyUrlStorageTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\UrlStorage\Persistence\SpyUrlStorage) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyUrlStorageTableMap::DATABASE_NAME);
            $criteria->add(SpyUrlStorageTableMap::COL_ID_URL_STORAGE, (array) $values, Criteria::IN);
        }

        $query = SpyUrlStorageQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyUrlStorageTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyUrlStorageTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_url_storage table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SpyUrlStorageQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyUrlStorage or Criteria object.
     *
     * @param mixed               $criteria Criteria or SpyUrlStorage object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyUrlStorageTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyUrlStorage object
        }

        if ($criteria->containsKey(SpyUrlStorageTableMap::COL_ID_URL_STORAGE) && $criteria->keyContainsValue(SpyUrlStorageTableMap::COL_ID_URL_STORAGE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpyUrlStorageTableMap::COL_ID_URL_STORAGE.')');
        }


        // Set the correct dbName
        $query = SpyUrlStorageQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SpyUrlStorageTableMap
