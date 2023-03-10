<?php

namespace Orm\Zed\CompanyRole\Persistence\Map;

use Orm\Zed\CompanyRole\Persistence\SpyCompanyRole;
use Orm\Zed\CompanyRole\Persistence\SpyCompanyRoleQuery;
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
 * This class defines the structure of the 'spy_company_role' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyCompanyRoleTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.Orm.Zed.CompanyRole.Persistence.Map.SpyCompanyRoleTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'spy_company_role';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Orm\\Zed\\CompanyRole\\Persistence\\SpyCompanyRole';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'src.Orm.Zed.CompanyRole.Persistence.SpyCompanyRole';

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
     * the column name for the id_company_role field
     */
    const COL_ID_COMPANY_ROLE = 'spy_company_role.id_company_role';

    /**
     * the column name for the fk_company field
     */
    const COL_FK_COMPANY = 'spy_company_role.fk_company';

    /**
     * the column name for the is_default field
     */
    const COL_IS_DEFAULT = 'spy_company_role.is_default';

    /**
     * the column name for the key field
     */
    const COL_KEY = 'spy_company_role.key';

    /**
     * the column name for the name field
     */
    const COL_NAME = 'spy_company_role.name';

    /**
     * the column name for the uuid field
     */
    const COL_UUID = 'spy_company_role.uuid';

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
        self::TYPE_PHPNAME       => array('IdCompanyRole', 'FkCompany', 'IsDefault', 'Key', 'Name', 'Uuid', ),
        self::TYPE_CAMELNAME     => array('idCompanyRole', 'fkCompany', 'isDefault', 'key', 'name', 'uuid', ),
        self::TYPE_COLNAME       => array(SpyCompanyRoleTableMap::COL_ID_COMPANY_ROLE, SpyCompanyRoleTableMap::COL_FK_COMPANY, SpyCompanyRoleTableMap::COL_IS_DEFAULT, SpyCompanyRoleTableMap::COL_KEY, SpyCompanyRoleTableMap::COL_NAME, SpyCompanyRoleTableMap::COL_UUID, ),
        self::TYPE_FIELDNAME     => array('id_company_role', 'fk_company', 'is_default', 'key', 'name', 'uuid', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('IdCompanyRole' => 0, 'FkCompany' => 1, 'IsDefault' => 2, 'Key' => 3, 'Name' => 4, 'Uuid' => 5, ),
        self::TYPE_CAMELNAME     => array('idCompanyRole' => 0, 'fkCompany' => 1, 'isDefault' => 2, 'key' => 3, 'name' => 4, 'uuid' => 5, ),
        self::TYPE_COLNAME       => array(SpyCompanyRoleTableMap::COL_ID_COMPANY_ROLE => 0, SpyCompanyRoleTableMap::COL_FK_COMPANY => 1, SpyCompanyRoleTableMap::COL_IS_DEFAULT => 2, SpyCompanyRoleTableMap::COL_KEY => 3, SpyCompanyRoleTableMap::COL_NAME => 4, SpyCompanyRoleTableMap::COL_UUID => 5, ),
        self::TYPE_FIELDNAME     => array('id_company_role' => 0, 'fk_company' => 1, 'is_default' => 2, 'key' => 3, 'name' => 4, 'uuid' => 5, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [
        'IdCompanyRole' => 'ID_COMPANY_ROLE',
        'SpyCompanyRole.IdCompanyRole' => 'ID_COMPANY_ROLE',
        'idCompanyRole' => 'ID_COMPANY_ROLE',
        'spyCompanyRole.idCompanyRole' => 'ID_COMPANY_ROLE',
        'SpyCompanyRoleTableMap::COL_ID_COMPANY_ROLE' => 'ID_COMPANY_ROLE',
        'COL_ID_COMPANY_ROLE' => 'ID_COMPANY_ROLE',
        'id_company_role' => 'ID_COMPANY_ROLE',
        'spy_company_role.id_company_role' => 'ID_COMPANY_ROLE',
        'FkCompany' => 'FK_COMPANY',
        'SpyCompanyRole.FkCompany' => 'FK_COMPANY',
        'fkCompany' => 'FK_COMPANY',
        'spyCompanyRole.fkCompany' => 'FK_COMPANY',
        'SpyCompanyRoleTableMap::COL_FK_COMPANY' => 'FK_COMPANY',
        'COL_FK_COMPANY' => 'FK_COMPANY',
        'fk_company' => 'FK_COMPANY',
        'spy_company_role.fk_company' => 'FK_COMPANY',
        'IsDefault' => 'IS_DEFAULT',
        'SpyCompanyRole.IsDefault' => 'IS_DEFAULT',
        'isDefault' => 'IS_DEFAULT',
        'spyCompanyRole.isDefault' => 'IS_DEFAULT',
        'SpyCompanyRoleTableMap::COL_IS_DEFAULT' => 'IS_DEFAULT',
        'COL_IS_DEFAULT' => 'IS_DEFAULT',
        'is_default' => 'IS_DEFAULT',
        'spy_company_role.is_default' => 'IS_DEFAULT',
        'Key' => 'KEY',
        'SpyCompanyRole.Key' => 'KEY',
        'key' => 'KEY',
        'spyCompanyRole.key' => 'KEY',
        'SpyCompanyRoleTableMap::COL_KEY' => 'KEY',
        'COL_KEY' => 'KEY',
        'spy_company_role.key' => 'KEY',
        'Name' => 'NAME',
        'SpyCompanyRole.Name' => 'NAME',
        'name' => 'NAME',
        'spyCompanyRole.name' => 'NAME',
        'SpyCompanyRoleTableMap::COL_NAME' => 'NAME',
        'COL_NAME' => 'NAME',
        'spy_company_role.name' => 'NAME',
        'Uuid' => 'UUID',
        'SpyCompanyRole.Uuid' => 'UUID',
        'uuid' => 'UUID',
        'spyCompanyRole.uuid' => 'UUID',
        'SpyCompanyRoleTableMap::COL_UUID' => 'UUID',
        'COL_UUID' => 'UUID',
        'spy_company_role.uuid' => 'UUID',
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
        $this->setName('spy_company_role');
        $this->setPhpName('SpyCompanyRole');
        $this->setIdentifierQuoting(true);
        $this->setClassName('\\Orm\\Zed\\CompanyRole\\Persistence\\SpyCompanyRole');
        $this->setPackage('src.Orm.Zed.CompanyRole.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_company_role_pk_seq');
        // columns
        $this->addPrimaryKey('id_company_role', 'IdCompanyRole', 'INTEGER', true, null, null);
        $this->addForeignKey('fk_company', 'FkCompany', 'INTEGER', 'spy_company', 'id_company', true, null, null);
        $this->addColumn('is_default', 'IsDefault', 'BOOLEAN', true, 1, false);
        $this->addColumn('key', 'Key', 'VARCHAR', false, 255, null);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 255, null);
        $this->addColumn('uuid', 'Uuid', 'VARCHAR', false, 36, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Company', '\\Orm\\Zed\\Company\\Persistence\\SpyCompany', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_company',
    1 => ':id_company',
  ),
), null, null, null, false);
        $this->addRelation('SpyCompanyRoleToPermission', '\\Orm\\Zed\\CompanyRole\\Persistence\\SpyCompanyRoleToPermission', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_company_role',
    1 => ':id_company_role',
  ),
), 'CASCADE', null, 'SpyCompanyRoleToPermissions', false);
        $this->addRelation('SpyCompanyRoleToCompanyUser', '\\Orm\\Zed\\CompanyRole\\Persistence\\SpyCompanyRoleToCompanyUser', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_company_role',
    1 => ':id_company_role',
  ),
), 'CASCADE', null, 'SpyCompanyRoleToCompanyUsers', false);
        $this->addRelation('Permission', '\\Orm\\Zed\\Permission\\Persistence\\SpyPermission', RelationMap::MANY_TO_MANY, array(), 'CASCADE', null, 'Permissions');
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
            'uuid' => ['key_prefix' => NULL, 'key_columns' => 'id_company_role.fk_company'],
        );
    } // getBehaviors()

    /**
     * Method to invalidate the instance pool of all tables related to spy_company_role     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in related instance pools,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        SpyCompanyRoleToPermissionTableMap::clearInstancePool();
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCompanyRole', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCompanyRole', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCompanyRole', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCompanyRole', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCompanyRole', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCompanyRole', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdCompanyRole', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyCompanyRoleTableMap::CLASS_DEFAULT : SpyCompanyRoleTableMap::OM_CLASS;
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
     * @return array           (SpyCompanyRole object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SpyCompanyRoleTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyCompanyRoleTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyCompanyRoleTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyCompanyRoleTableMap::OM_CLASS;
            /** @var SpyCompanyRole $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyCompanyRoleTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyCompanyRoleTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyCompanyRoleTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyCompanyRole $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyCompanyRoleTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyCompanyRoleTableMap::COL_ID_COMPANY_ROLE);
            $criteria->addSelectColumn(SpyCompanyRoleTableMap::COL_FK_COMPANY);
            $criteria->addSelectColumn(SpyCompanyRoleTableMap::COL_IS_DEFAULT);
            $criteria->addSelectColumn(SpyCompanyRoleTableMap::COL_KEY);
            $criteria->addSelectColumn(SpyCompanyRoleTableMap::COL_NAME);
            $criteria->addSelectColumn(SpyCompanyRoleTableMap::COL_UUID);
        } else {
            $criteria->addSelectColumn($alias . '.id_company_role');
            $criteria->addSelectColumn($alias . '.fk_company');
            $criteria->addSelectColumn($alias . '.is_default');
            $criteria->addSelectColumn($alias . '.key');
            $criteria->addSelectColumn($alias . '.name');
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
            $criteria->removeSelectColumn(SpyCompanyRoleTableMap::COL_ID_COMPANY_ROLE);
            $criteria->removeSelectColumn(SpyCompanyRoleTableMap::COL_FK_COMPANY);
            $criteria->removeSelectColumn(SpyCompanyRoleTableMap::COL_IS_DEFAULT);
            $criteria->removeSelectColumn(SpyCompanyRoleTableMap::COL_KEY);
            $criteria->removeSelectColumn(SpyCompanyRoleTableMap::COL_NAME);
            $criteria->removeSelectColumn(SpyCompanyRoleTableMap::COL_UUID);
        } else {
            $criteria->removeSelectColumn($alias . '.id_company_role');
            $criteria->removeSelectColumn($alias . '.fk_company');
            $criteria->removeSelectColumn($alias . '.is_default');
            $criteria->removeSelectColumn($alias . '.key');
            $criteria->removeSelectColumn($alias . '.name');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyCompanyRoleTableMap::DATABASE_NAME)->getTable(SpyCompanyRoleTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyCompanyRole or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SpyCompanyRole object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCompanyRoleTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\CompanyRole\Persistence\SpyCompanyRole) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyCompanyRoleTableMap::DATABASE_NAME);
            $criteria->add(SpyCompanyRoleTableMap::COL_ID_COMPANY_ROLE, (array) $values, Criteria::IN);
        }

        $query = SpyCompanyRoleQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyCompanyRoleTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyCompanyRoleTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_company_role table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SpyCompanyRoleQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyCompanyRole or Criteria object.
     *
     * @param mixed               $criteria Criteria or SpyCompanyRole object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCompanyRoleTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyCompanyRole object
        }


        // Set the correct dbName
        $query = SpyCompanyRoleQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SpyCompanyRoleTableMap
