<?php

namespace Orm\Zed\Merchant\Persistence\Map;

use Orm\Zed\MerchantRelationship\Persistence\Map\SpyMerchantRelationshipTableMap;
use Orm\Zed\Merchant\Persistence\SpyMerchant;
use Orm\Zed\Merchant\Persistence\SpyMerchantQuery;
use Orm\Zed\Url\Persistence\Map\SpyUrlTableMap;
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
 * This class defines the structure of the 'spy_merchant' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyMerchantTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.Orm.Zed.Merchant.Persistence.Map.SpyMerchantTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'spy_merchant';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Orm\\Zed\\Merchant\\Persistence\\SpyMerchant';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'src.Orm.Zed.Merchant.Persistence.SpyMerchant';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 9;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 9;

    /**
     * the column name for the id_merchant field
     */
    const COL_ID_MERCHANT = 'spy_merchant.id_merchant';

    /**
     * the column name for the email field
     */
    const COL_EMAIL = 'spy_merchant.email';

    /**
     * the column name for the is_active field
     */
    const COL_IS_ACTIVE = 'spy_merchant.is_active';

    /**
     * the column name for the merchant_reference field
     */
    const COL_MERCHANT_REFERENCE = 'spy_merchant.merchant_reference';

    /**
     * the column name for the name field
     */
    const COL_NAME = 'spy_merchant.name';

    /**
     * the column name for the registration_number field
     */
    const COL_REGISTRATION_NUMBER = 'spy_merchant.registration_number';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'spy_merchant.status';

    /**
     * the column name for the created_at field
     */
    const COL_CREATED_AT = 'spy_merchant.created_at';

    /**
     * the column name for the updated_at field
     */
    const COL_UPDATED_AT = 'spy_merchant.updated_at';

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
        self::TYPE_PHPNAME       => array('IdMerchant', 'Email', 'IsActive', 'MerchantReference', 'Name', 'RegistrationNumber', 'Status', 'CreatedAt', 'UpdatedAt', ),
        self::TYPE_CAMELNAME     => array('idMerchant', 'email', 'isActive', 'merchantReference', 'name', 'registrationNumber', 'status', 'createdAt', 'updatedAt', ),
        self::TYPE_COLNAME       => array(SpyMerchantTableMap::COL_ID_MERCHANT, SpyMerchantTableMap::COL_EMAIL, SpyMerchantTableMap::COL_IS_ACTIVE, SpyMerchantTableMap::COL_MERCHANT_REFERENCE, SpyMerchantTableMap::COL_NAME, SpyMerchantTableMap::COL_REGISTRATION_NUMBER, SpyMerchantTableMap::COL_STATUS, SpyMerchantTableMap::COL_CREATED_AT, SpyMerchantTableMap::COL_UPDATED_AT, ),
        self::TYPE_FIELDNAME     => array('id_merchant', 'email', 'is_active', 'merchant_reference', 'name', 'registration_number', 'status', 'created_at', 'updated_at', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('IdMerchant' => 0, 'Email' => 1, 'IsActive' => 2, 'MerchantReference' => 3, 'Name' => 4, 'RegistrationNumber' => 5, 'Status' => 6, 'CreatedAt' => 7, 'UpdatedAt' => 8, ),
        self::TYPE_CAMELNAME     => array('idMerchant' => 0, 'email' => 1, 'isActive' => 2, 'merchantReference' => 3, 'name' => 4, 'registrationNumber' => 5, 'status' => 6, 'createdAt' => 7, 'updatedAt' => 8, ),
        self::TYPE_COLNAME       => array(SpyMerchantTableMap::COL_ID_MERCHANT => 0, SpyMerchantTableMap::COL_EMAIL => 1, SpyMerchantTableMap::COL_IS_ACTIVE => 2, SpyMerchantTableMap::COL_MERCHANT_REFERENCE => 3, SpyMerchantTableMap::COL_NAME => 4, SpyMerchantTableMap::COL_REGISTRATION_NUMBER => 5, SpyMerchantTableMap::COL_STATUS => 6, SpyMerchantTableMap::COL_CREATED_AT => 7, SpyMerchantTableMap::COL_UPDATED_AT => 8, ),
        self::TYPE_FIELDNAME     => array('id_merchant' => 0, 'email' => 1, 'is_active' => 2, 'merchant_reference' => 3, 'name' => 4, 'registration_number' => 5, 'status' => 6, 'created_at' => 7, 'updated_at' => 8, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [
        'IdMerchant' => 'ID_MERCHANT',
        'SpyMerchant.IdMerchant' => 'ID_MERCHANT',
        'idMerchant' => 'ID_MERCHANT',
        'spyMerchant.idMerchant' => 'ID_MERCHANT',
        'SpyMerchantTableMap::COL_ID_MERCHANT' => 'ID_MERCHANT',
        'COL_ID_MERCHANT' => 'ID_MERCHANT',
        'id_merchant' => 'ID_MERCHANT',
        'spy_merchant.id_merchant' => 'ID_MERCHANT',
        'Email' => 'EMAIL',
        'SpyMerchant.Email' => 'EMAIL',
        'email' => 'EMAIL',
        'spyMerchant.email' => 'EMAIL',
        'SpyMerchantTableMap::COL_EMAIL' => 'EMAIL',
        'COL_EMAIL' => 'EMAIL',
        'spy_merchant.email' => 'EMAIL',
        'IsActive' => 'IS_ACTIVE',
        'SpyMerchant.IsActive' => 'IS_ACTIVE',
        'isActive' => 'IS_ACTIVE',
        'spyMerchant.isActive' => 'IS_ACTIVE',
        'SpyMerchantTableMap::COL_IS_ACTIVE' => 'IS_ACTIVE',
        'COL_IS_ACTIVE' => 'IS_ACTIVE',
        'is_active' => 'IS_ACTIVE',
        'spy_merchant.is_active' => 'IS_ACTIVE',
        'MerchantReference' => 'MERCHANT_REFERENCE',
        'SpyMerchant.MerchantReference' => 'MERCHANT_REFERENCE',
        'merchantReference' => 'MERCHANT_REFERENCE',
        'spyMerchant.merchantReference' => 'MERCHANT_REFERENCE',
        'SpyMerchantTableMap::COL_MERCHANT_REFERENCE' => 'MERCHANT_REFERENCE',
        'COL_MERCHANT_REFERENCE' => 'MERCHANT_REFERENCE',
        'merchant_reference' => 'MERCHANT_REFERENCE',
        'spy_merchant.merchant_reference' => 'MERCHANT_REFERENCE',
        'Name' => 'NAME',
        'SpyMerchant.Name' => 'NAME',
        'name' => 'NAME',
        'spyMerchant.name' => 'NAME',
        'SpyMerchantTableMap::COL_NAME' => 'NAME',
        'COL_NAME' => 'NAME',
        'spy_merchant.name' => 'NAME',
        'RegistrationNumber' => 'REGISTRATION_NUMBER',
        'SpyMerchant.RegistrationNumber' => 'REGISTRATION_NUMBER',
        'registrationNumber' => 'REGISTRATION_NUMBER',
        'spyMerchant.registrationNumber' => 'REGISTRATION_NUMBER',
        'SpyMerchantTableMap::COL_REGISTRATION_NUMBER' => 'REGISTRATION_NUMBER',
        'COL_REGISTRATION_NUMBER' => 'REGISTRATION_NUMBER',
        'registration_number' => 'REGISTRATION_NUMBER',
        'spy_merchant.registration_number' => 'REGISTRATION_NUMBER',
        'Status' => 'STATUS',
        'SpyMerchant.Status' => 'STATUS',
        'status' => 'STATUS',
        'spyMerchant.status' => 'STATUS',
        'SpyMerchantTableMap::COL_STATUS' => 'STATUS',
        'COL_STATUS' => 'STATUS',
        'spy_merchant.status' => 'STATUS',
        'CreatedAt' => 'CREATED_AT',
        'SpyMerchant.CreatedAt' => 'CREATED_AT',
        'createdAt' => 'CREATED_AT',
        'spyMerchant.createdAt' => 'CREATED_AT',
        'SpyMerchantTableMap::COL_CREATED_AT' => 'CREATED_AT',
        'COL_CREATED_AT' => 'CREATED_AT',
        'created_at' => 'CREATED_AT',
        'spy_merchant.created_at' => 'CREATED_AT',
        'UpdatedAt' => 'UPDATED_AT',
        'SpyMerchant.UpdatedAt' => 'UPDATED_AT',
        'updatedAt' => 'UPDATED_AT',
        'spyMerchant.updatedAt' => 'UPDATED_AT',
        'SpyMerchantTableMap::COL_UPDATED_AT' => 'UPDATED_AT',
        'COL_UPDATED_AT' => 'UPDATED_AT',
        'updated_at' => 'UPDATED_AT',
        'spy_merchant.updated_at' => 'UPDATED_AT',
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
        $this->setName('spy_merchant');
        $this->setPhpName('SpyMerchant');
        $this->setIdentifierQuoting(true);
        $this->setClassName('\\Orm\\Zed\\Merchant\\Persistence\\SpyMerchant');
        $this->setPackage('src.Orm.Zed.Merchant.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_merchant_pk_seq');
        // columns
        $this->addPrimaryKey('id_merchant', 'IdMerchant', 'INTEGER', true, null, null);
        $this->addColumn('email', 'Email', 'VARCHAR', true, 255, null);
        $this->addColumn('is_active', 'IsActive', 'BOOLEAN', false, 1, false);
        $this->addColumn('merchant_reference', 'MerchantReference', 'VARCHAR', true, 255, null);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 255, null);
        $this->addColumn('registration_number', 'RegistrationNumber', 'VARCHAR', false, 255, null);
        $this->addColumn('status', 'Status', 'VARCHAR', true, 64, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', false, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('SpyMerchantStore', '\\Orm\\Zed\\Merchant\\Persistence\\SpyMerchantStore', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_merchant',
    1 => ':id_merchant',
  ),
), null, null, 'SpyMerchantStores', false);
        $this->addRelation('SpyMerchantRelationship', '\\Orm\\Zed\\MerchantRelationship\\Persistence\\SpyMerchantRelationship', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_merchant',
    1 => ':id_merchant',
  ),
), 'CASCADE', null, 'SpyMerchantRelationships', false);
        $this->addRelation('SpyUrl', '\\Orm\\Zed\\Url\\Persistence\\SpyUrl', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_resource_merchant',
    1 => ':id_merchant',
  ),
), 'CASCADE', null, 'SpyUrls', false);
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
            'event' => ['spy_merchant-is_active' => ['column' => 'is_active']],
        );
    } // getBehaviors()

    /**
     * Method to invalidate the instance pool of all tables related to spy_merchant     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in related instance pools,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        SpyMerchantRelationshipTableMap::clearInstancePool();
        SpyUrlTableMap::clearInstancePool();
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdMerchant', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdMerchant', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdMerchant', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdMerchant', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdMerchant', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdMerchant', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdMerchant', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyMerchantTableMap::CLASS_DEFAULT : SpyMerchantTableMap::OM_CLASS;
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
     * @return array           (SpyMerchant object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SpyMerchantTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyMerchantTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyMerchantTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyMerchantTableMap::OM_CLASS;
            /** @var SpyMerchant $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyMerchantTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyMerchantTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyMerchantTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyMerchant $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyMerchantTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyMerchantTableMap::COL_ID_MERCHANT);
            $criteria->addSelectColumn(SpyMerchantTableMap::COL_EMAIL);
            $criteria->addSelectColumn(SpyMerchantTableMap::COL_IS_ACTIVE);
            $criteria->addSelectColumn(SpyMerchantTableMap::COL_MERCHANT_REFERENCE);
            $criteria->addSelectColumn(SpyMerchantTableMap::COL_NAME);
            $criteria->addSelectColumn(SpyMerchantTableMap::COL_REGISTRATION_NUMBER);
            $criteria->addSelectColumn(SpyMerchantTableMap::COL_STATUS);
            $criteria->addSelectColumn(SpyMerchantTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(SpyMerchantTableMap::COL_UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id_merchant');
            $criteria->addSelectColumn($alias . '.email');
            $criteria->addSelectColumn($alias . '.is_active');
            $criteria->addSelectColumn($alias . '.merchant_reference');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.registration_number');
            $criteria->addSelectColumn($alias . '.status');
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
            $criteria->removeSelectColumn(SpyMerchantTableMap::COL_ID_MERCHANT);
            $criteria->removeSelectColumn(SpyMerchantTableMap::COL_EMAIL);
            $criteria->removeSelectColumn(SpyMerchantTableMap::COL_IS_ACTIVE);
            $criteria->removeSelectColumn(SpyMerchantTableMap::COL_MERCHANT_REFERENCE);
            $criteria->removeSelectColumn(SpyMerchantTableMap::COL_NAME);
            $criteria->removeSelectColumn(SpyMerchantTableMap::COL_REGISTRATION_NUMBER);
            $criteria->removeSelectColumn(SpyMerchantTableMap::COL_STATUS);
            $criteria->removeSelectColumn(SpyMerchantTableMap::COL_CREATED_AT);
            $criteria->removeSelectColumn(SpyMerchantTableMap::COL_UPDATED_AT);
        } else {
            $criteria->removeSelectColumn($alias . '.id_merchant');
            $criteria->removeSelectColumn($alias . '.email');
            $criteria->removeSelectColumn($alias . '.is_active');
            $criteria->removeSelectColumn($alias . '.merchant_reference');
            $criteria->removeSelectColumn($alias . '.name');
            $criteria->removeSelectColumn($alias . '.registration_number');
            $criteria->removeSelectColumn($alias . '.status');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyMerchantTableMap::DATABASE_NAME)->getTable(SpyMerchantTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyMerchant or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SpyMerchant object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyMerchantTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\Merchant\Persistence\SpyMerchant) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyMerchantTableMap::DATABASE_NAME);
            $criteria->add(SpyMerchantTableMap::COL_ID_MERCHANT, (array) $values, Criteria::IN);
        }

        $query = SpyMerchantQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyMerchantTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyMerchantTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_merchant table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SpyMerchantQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyMerchant or Criteria object.
     *
     * @param mixed               $criteria Criteria or SpyMerchant object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyMerchantTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyMerchant object
        }

        if ($criteria->containsKey(SpyMerchantTableMap::COL_ID_MERCHANT) && $criteria->keyContainsValue(SpyMerchantTableMap::COL_ID_MERCHANT) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpyMerchantTableMap::COL_ID_MERCHANT.')');
        }


        // Set the correct dbName
        $query = SpyMerchantQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SpyMerchantTableMap
