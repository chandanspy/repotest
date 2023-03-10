<?php

namespace Orm\Zed\CompanyUser\Persistence\Map;

use Orm\Zed\CompanyRole\Persistence\Map\SpyCompanyRoleToCompanyUserTableMap;
use Orm\Zed\CompanyUser\Persistence\SpyCompanyUser;
use Orm\Zed\CompanyUser\Persistence\SpyCompanyUserQuery;
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
 * This class defines the structure of the 'spy_company_user' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyCompanyUserTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.Orm.Zed.CompanyUser.Persistence.Map.SpyCompanyUserTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'spy_company_user';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Orm\\Zed\\CompanyUser\\Persistence\\SpyCompanyUser';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'src.Orm.Zed.CompanyUser.Persistence.SpyCompanyUser';

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
     * the column name for the id_company_user field
     */
    const COL_ID_COMPANY_USER = 'spy_company_user.id_company_user';

    /**
     * the column name for the fk_company field
     */
    const COL_FK_COMPANY = 'spy_company_user.fk_company';

    /**
     * the column name for the fk_company_business_unit field
     */
    const COL_FK_COMPANY_BUSINESS_UNIT = 'spy_company_user.fk_company_business_unit';

    /**
     * the column name for the fk_customer field
     */
    const COL_FK_CUSTOMER = 'spy_company_user.fk_customer';

    /**
     * the column name for the is_active field
     */
    const COL_IS_ACTIVE = 'spy_company_user.is_active';

    /**
     * the column name for the is_default field
     */
    const COL_IS_DEFAULT = 'spy_company_user.is_default';

    /**
     * the column name for the key field
     */
    const COL_KEY = 'spy_company_user.key';

    /**
     * the column name for the uuid field
     */
    const COL_UUID = 'spy_company_user.uuid';

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
        self::TYPE_PHPNAME       => array('IdCompanyUser', 'FkCompany', 'FkCompanyBusinessUnit', 'FkCustomer', 'IsActive', 'IsDefault', 'Key', 'Uuid', ),
        self::TYPE_CAMELNAME     => array('idCompanyUser', 'fkCompany', 'fkCompanyBusinessUnit', 'fkCustomer', 'isActive', 'isDefault', 'key', 'uuid', ),
        self::TYPE_COLNAME       => array(SpyCompanyUserTableMap::COL_ID_COMPANY_USER, SpyCompanyUserTableMap::COL_FK_COMPANY, SpyCompanyUserTableMap::COL_FK_COMPANY_BUSINESS_UNIT, SpyCompanyUserTableMap::COL_FK_CUSTOMER, SpyCompanyUserTableMap::COL_IS_ACTIVE, SpyCompanyUserTableMap::COL_IS_DEFAULT, SpyCompanyUserTableMap::COL_KEY, SpyCompanyUserTableMap::COL_UUID, ),
        self::TYPE_FIELDNAME     => array('id_company_user', 'fk_company', 'fk_company_business_unit', 'fk_customer', 'is_active', 'is_default', 'key', 'uuid', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('IdCompanyUser' => 0, 'FkCompany' => 1, 'FkCompanyBusinessUnit' => 2, 'FkCustomer' => 3, 'IsActive' => 4, 'IsDefault' => 5, 'Key' => 6, 'Uuid' => 7, ),
        self::TYPE_CAMELNAME     => array('idCompanyUser' => 0, 'fkCompany' => 1, 'fkCompanyBusinessUnit' => 2, 'fkCustomer' => 3, 'isActive' => 4, 'isDefault' => 5, 'key' => 6, 'uuid' => 7, ),
        self::TYPE_COLNAME       => array(SpyCompanyUserTableMap::COL_ID_COMPANY_USER => 0, SpyCompanyUserTableMap::COL_FK_COMPANY => 1, SpyCompanyUserTableMap::COL_FK_COMPANY_BUSINESS_UNIT => 2, SpyCompanyUserTableMap::COL_FK_CUSTOMER => 3, SpyCompanyUserTableMap::COL_IS_ACTIVE => 4, SpyCompanyUserTableMap::COL_IS_DEFAULT => 5, SpyCompanyUserTableMap::COL_KEY => 6, SpyCompanyUserTableMap::COL_UUID => 7, ),
        self::TYPE_FIELDNAME     => array('id_company_user' => 0, 'fk_company' => 1, 'fk_company_business_unit' => 2, 'fk_customer' => 3, 'is_active' => 4, 'is_default' => 5, 'key' => 6, 'uuid' => 7, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [
        'IdCompanyUser' => 'ID_COMPANY_USER',
        'SpyCompanyUser.IdCompanyUser' => 'ID_COMPANY_USER',
        'idCompanyUser' => 'ID_COMPANY_USER',
        'spyCompanyUser.idCompanyUser' => 'ID_COMPANY_USER',
        'SpyCompanyUserTableMap::COL_ID_COMPANY_USER' => 'ID_COMPANY_USER',
        'COL_ID_COMPANY_USER' => 'ID_COMPANY_USER',
        'id_company_user' => 'ID_COMPANY_USER',
        'spy_company_user.id_company_user' => 'ID_COMPANY_USER',
        'FkCompany' => 'FK_COMPANY',
        'SpyCompanyUser.FkCompany' => 'FK_COMPANY',
        'fkCompany' => 'FK_COMPANY',
        'spyCompanyUser.fkCompany' => 'FK_COMPANY',
        'SpyCompanyUserTableMap::COL_FK_COMPANY' => 'FK_COMPANY',
        'COL_FK_COMPANY' => 'FK_COMPANY',
        'fk_company' => 'FK_COMPANY',
        'spy_company_user.fk_company' => 'FK_COMPANY',
        'FkCompanyBusinessUnit' => 'FK_COMPANY_BUSINESS_UNIT',
        'SpyCompanyUser.FkCompanyBusinessUnit' => 'FK_COMPANY_BUSINESS_UNIT',
        'fkCompanyBusinessUnit' => 'FK_COMPANY_BUSINESS_UNIT',
        'spyCompanyUser.fkCompanyBusinessUnit' => 'FK_COMPANY_BUSINESS_UNIT',
        'SpyCompanyUserTableMap::COL_FK_COMPANY_BUSINESS_UNIT' => 'FK_COMPANY_BUSINESS_UNIT',
        'COL_FK_COMPANY_BUSINESS_UNIT' => 'FK_COMPANY_BUSINESS_UNIT',
        'fk_company_business_unit' => 'FK_COMPANY_BUSINESS_UNIT',
        'spy_company_user.fk_company_business_unit' => 'FK_COMPANY_BUSINESS_UNIT',
        'FkCustomer' => 'FK_CUSTOMER',
        'SpyCompanyUser.FkCustomer' => 'FK_CUSTOMER',
        'fkCustomer' => 'FK_CUSTOMER',
        'spyCompanyUser.fkCustomer' => 'FK_CUSTOMER',
        'SpyCompanyUserTableMap::COL_FK_CUSTOMER' => 'FK_CUSTOMER',
        'COL_FK_CUSTOMER' => 'FK_CUSTOMER',
        'fk_customer' => 'FK_CUSTOMER',
        'spy_company_user.fk_customer' => 'FK_CUSTOMER',
        'IsActive' => 'IS_ACTIVE',
        'SpyCompanyUser.IsActive' => 'IS_ACTIVE',
        'isActive' => 'IS_ACTIVE',
        'spyCompanyUser.isActive' => 'IS_ACTIVE',
        'SpyCompanyUserTableMap::COL_IS_ACTIVE' => 'IS_ACTIVE',
        'COL_IS_ACTIVE' => 'IS_ACTIVE',
        'is_active' => 'IS_ACTIVE',
        'spy_company_user.is_active' => 'IS_ACTIVE',
        'IsDefault' => 'IS_DEFAULT',
        'SpyCompanyUser.IsDefault' => 'IS_DEFAULT',
        'isDefault' => 'IS_DEFAULT',
        'spyCompanyUser.isDefault' => 'IS_DEFAULT',
        'SpyCompanyUserTableMap::COL_IS_DEFAULT' => 'IS_DEFAULT',
        'COL_IS_DEFAULT' => 'IS_DEFAULT',
        'is_default' => 'IS_DEFAULT',
        'spy_company_user.is_default' => 'IS_DEFAULT',
        'Key' => 'KEY',
        'SpyCompanyUser.Key' => 'KEY',
        'key' => 'KEY',
        'spyCompanyUser.key' => 'KEY',
        'SpyCompanyUserTableMap::COL_KEY' => 'KEY',
        'COL_KEY' => 'KEY',
        'spy_company_user.key' => 'KEY',
        'Uuid' => 'UUID',
        'SpyCompanyUser.Uuid' => 'UUID',
        'uuid' => 'UUID',
        'spyCompanyUser.uuid' => 'UUID',
        'SpyCompanyUserTableMap::COL_UUID' => 'UUID',
        'COL_UUID' => 'UUID',
        'spy_company_user.uuid' => 'UUID',
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
        $this->setName('spy_company_user');
        $this->setPhpName('SpyCompanyUser');
        $this->setIdentifierQuoting(true);
        $this->setClassName('\\Orm\\Zed\\CompanyUser\\Persistence\\SpyCompanyUser');
        $this->setPackage('src.Orm.Zed.CompanyUser.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_company_user_pk_seq');
        // columns
        $this->addPrimaryKey('id_company_user', 'IdCompanyUser', 'INTEGER', true, null, null);
        $this->addForeignKey('fk_company', 'FkCompany', 'INTEGER', 'spy_company', 'id_company', true, null, null);
        $this->addForeignKey('fk_company_business_unit', 'FkCompanyBusinessUnit', 'INTEGER', 'spy_company_business_unit', 'id_company_business_unit', false, null, null);
        $this->addForeignKey('fk_customer', 'FkCustomer', 'INTEGER', 'spy_customer', 'id_customer', true, null, null);
        $this->addColumn('is_active', 'IsActive', 'BOOLEAN', true, 1, true);
        $this->addColumn('is_default', 'IsDefault', 'BOOLEAN', true, 1, false);
        $this->addColumn('key', 'Key', 'VARCHAR', false, 255, null);
        $this->addColumn('uuid', 'Uuid', 'VARCHAR', false, 36, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CompanyBusinessUnit', '\\Orm\\Zed\\CompanyBusinessUnit\\Persistence\\SpyCompanyBusinessUnit', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_company_business_unit',
    1 => ':id_company_business_unit',
  ),
), 'SET NULL', null, null, false);
        $this->addRelation('Company', '\\Orm\\Zed\\Company\\Persistence\\SpyCompany', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_company',
    1 => ':id_company',
  ),
), null, null, null, false);
        $this->addRelation('Customer', '\\Orm\\Zed\\Customer\\Persistence\\SpyCustomer', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_customer',
    1 => ':id_customer',
  ),
), null, null, null, false);
        $this->addRelation('SpyCompanyRoleToCompanyUser', '\\Orm\\Zed\\CompanyRole\\Persistence\\SpyCompanyRoleToCompanyUser', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_company_user',
    1 => ':id_company_user',
  ),
), 'CASCADE', null, 'SpyCompanyRoleToCompanyUsers', false);
        $this->addRelation('SpyCompanyUserInvitation', '\\Orm\\Zed\\CompanyUserInvitation\\Persistence\\SpyCompanyUserInvitation', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_company_user',
    1 => ':id_company_user',
  ),
), null, null, 'SpyCompanyUserInvitations', false);
        $this->addRelation('SpyQuoteCompanyUser', '\\Orm\\Zed\\SharedCart\\Persistence\\SpyQuoteCompanyUser', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_company_user',
    1 => ':id_company_user',
  ),
), null, null, 'SpyQuoteCompanyUsers', false);
        $this->addRelation('SpyQuoteApproval', '\\Orm\\Zed\\QuoteApproval\\Persistence\\SpyQuoteApproval', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_company_user',
    1 => ':id_company_user',
  ),
), null, null, 'SpyQuoteApprovals', false);
        $this->addRelation('SpyQuoteRequest', '\\Orm\\Zed\\QuoteRequest\\Persistence\\SpyQuoteRequest', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_company_user',
    1 => ':id_company_user',
  ),
), null, null, 'SpyQuoteRequests', false);
        $this->addRelation('SpyShoppingListCompanyUser', '\\Orm\\Zed\\ShoppingList\\Persistence\\SpyShoppingListCompanyUser', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_company_user',
    1 => ':id_company_user',
  ),
), null, null, 'SpyShoppingListCompanyUsers', false);
        $this->addRelation('SpyShoppingListCompanyBusinessUnitBlacklist', '\\Orm\\Zed\\ShoppingList\\Persistence\\SpyShoppingListCompanyBusinessUnitBlacklist', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_company_user',
    1 => ':id_company_user',
  ),
), null, null, 'SpyShoppingListCompanyBusinessUnitBlacklists', false);
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
            'uuid' => ['key_prefix' => NULL, 'key_columns' => 'id_company_user.fk_customer'],
            'event' => ['spy_company_user_all' => ['column' => '*']],
        );
    } // getBehaviors()

    /**
     * Method to invalidate the instance pool of all tables related to spy_company_user     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in related instance pools,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        SpyCompanyRoleToCompanyUserTableMap::clearInstancePool();
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCompanyUser', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCompanyUser', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCompanyUser', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCompanyUser', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCompanyUser', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCompanyUser', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdCompanyUser', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyCompanyUserTableMap::CLASS_DEFAULT : SpyCompanyUserTableMap::OM_CLASS;
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
     * @return array           (SpyCompanyUser object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SpyCompanyUserTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyCompanyUserTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyCompanyUserTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyCompanyUserTableMap::OM_CLASS;
            /** @var SpyCompanyUser $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyCompanyUserTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyCompanyUserTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyCompanyUserTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyCompanyUser $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyCompanyUserTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyCompanyUserTableMap::COL_ID_COMPANY_USER);
            $criteria->addSelectColumn(SpyCompanyUserTableMap::COL_FK_COMPANY);
            $criteria->addSelectColumn(SpyCompanyUserTableMap::COL_FK_COMPANY_BUSINESS_UNIT);
            $criteria->addSelectColumn(SpyCompanyUserTableMap::COL_FK_CUSTOMER);
            $criteria->addSelectColumn(SpyCompanyUserTableMap::COL_IS_ACTIVE);
            $criteria->addSelectColumn(SpyCompanyUserTableMap::COL_IS_DEFAULT);
            $criteria->addSelectColumn(SpyCompanyUserTableMap::COL_KEY);
            $criteria->addSelectColumn(SpyCompanyUserTableMap::COL_UUID);
        } else {
            $criteria->addSelectColumn($alias . '.id_company_user');
            $criteria->addSelectColumn($alias . '.fk_company');
            $criteria->addSelectColumn($alias . '.fk_company_business_unit');
            $criteria->addSelectColumn($alias . '.fk_customer');
            $criteria->addSelectColumn($alias . '.is_active');
            $criteria->addSelectColumn($alias . '.is_default');
            $criteria->addSelectColumn($alias . '.key');
            $criteria->addSelectColumn($alias . '.uuid');
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
            $criteria->removeSelectColumn(SpyCompanyUserTableMap::COL_ID_COMPANY_USER);
            $criteria->removeSelectColumn(SpyCompanyUserTableMap::COL_FK_COMPANY);
            $criteria->removeSelectColumn(SpyCompanyUserTableMap::COL_FK_COMPANY_BUSINESS_UNIT);
            $criteria->removeSelectColumn(SpyCompanyUserTableMap::COL_FK_CUSTOMER);
            $criteria->removeSelectColumn(SpyCompanyUserTableMap::COL_IS_ACTIVE);
            $criteria->removeSelectColumn(SpyCompanyUserTableMap::COL_IS_DEFAULT);
            $criteria->removeSelectColumn(SpyCompanyUserTableMap::COL_KEY);
            $criteria->removeSelectColumn(SpyCompanyUserTableMap::COL_UUID);
        } else {
            $criteria->removeSelectColumn($alias . '.id_company_user');
            $criteria->removeSelectColumn($alias . '.fk_company');
            $criteria->removeSelectColumn($alias . '.fk_company_business_unit');
            $criteria->removeSelectColumn($alias . '.fk_customer');
            $criteria->removeSelectColumn($alias . '.is_active');
            $criteria->removeSelectColumn($alias . '.is_default');
            $criteria->removeSelectColumn($alias . '.key');
            $criteria->removeSelectColumn($alias . '.uuid');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyCompanyUserTableMap::DATABASE_NAME)->getTable(SpyCompanyUserTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyCompanyUser or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SpyCompanyUser object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCompanyUserTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\CompanyUser\Persistence\SpyCompanyUser) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyCompanyUserTableMap::DATABASE_NAME);
            $criteria->add(SpyCompanyUserTableMap::COL_ID_COMPANY_USER, (array) $values, Criteria::IN);
        }

        $query = SpyCompanyUserQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyCompanyUserTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyCompanyUserTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_company_user table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SpyCompanyUserQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyCompanyUser or Criteria object.
     *
     * @param mixed               $criteria Criteria or SpyCompanyUser object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCompanyUserTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyCompanyUser object
        }


        // Set the correct dbName
        $query = SpyCompanyUserQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SpyCompanyUserTableMap
