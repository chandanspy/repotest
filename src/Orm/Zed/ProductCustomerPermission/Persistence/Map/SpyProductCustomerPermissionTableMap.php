<?php

namespace Orm\Zed\ProductCustomerPermission\Persistence\Map;

use Orm\Zed\ProductCustomerPermission\Persistence\SpyProductCustomerPermission;
use Orm\Zed\ProductCustomerPermission\Persistence\SpyProductCustomerPermissionQuery;
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
 * This class defines the structure of the 'spy_product_customer_permission' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyProductCustomerPermissionTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.Orm.Zed.ProductCustomerPermission.Persistence.Map.SpyProductCustomerPermissionTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'spy_product_customer_permission';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Orm\\Zed\\ProductCustomerPermission\\Persistence\\SpyProductCustomerPermission';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'src.Orm.Zed.ProductCustomerPermission.Persistence.SpyProductCustomerPermission';

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
     * the column name for the id_product_customer_permission field
     */
    const COL_ID_PRODUCT_CUSTOMER_PERMISSION = 'spy_product_customer_permission.id_product_customer_permission';

    /**
     * the column name for the fk_customer field
     */
    const COL_FK_CUSTOMER = 'spy_product_customer_permission.fk_customer';

    /**
     * the column name for the fk_product_abstract field
     */
    const COL_FK_PRODUCT_ABSTRACT = 'spy_product_customer_permission.fk_product_abstract';

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
        self::TYPE_PHPNAME       => array('IdProductCustomerPermission', 'FkCustomer', 'FkProductAbstract', ),
        self::TYPE_CAMELNAME     => array('idProductCustomerPermission', 'fkCustomer', 'fkProductAbstract', ),
        self::TYPE_COLNAME       => array(SpyProductCustomerPermissionTableMap::COL_ID_PRODUCT_CUSTOMER_PERMISSION, SpyProductCustomerPermissionTableMap::COL_FK_CUSTOMER, SpyProductCustomerPermissionTableMap::COL_FK_PRODUCT_ABSTRACT, ),
        self::TYPE_FIELDNAME     => array('id_product_customer_permission', 'fk_customer', 'fk_product_abstract', ),
        self::TYPE_NUM           => array(0, 1, 2, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('IdProductCustomerPermission' => 0, 'FkCustomer' => 1, 'FkProductAbstract' => 2, ),
        self::TYPE_CAMELNAME     => array('idProductCustomerPermission' => 0, 'fkCustomer' => 1, 'fkProductAbstract' => 2, ),
        self::TYPE_COLNAME       => array(SpyProductCustomerPermissionTableMap::COL_ID_PRODUCT_CUSTOMER_PERMISSION => 0, SpyProductCustomerPermissionTableMap::COL_FK_CUSTOMER => 1, SpyProductCustomerPermissionTableMap::COL_FK_PRODUCT_ABSTRACT => 2, ),
        self::TYPE_FIELDNAME     => array('id_product_customer_permission' => 0, 'fk_customer' => 1, 'fk_product_abstract' => 2, ),
        self::TYPE_NUM           => array(0, 1, 2, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [
        'IdProductCustomerPermission' => 'ID_PRODUCT_CUSTOMER_PERMISSION',
        'SpyProductCustomerPermission.IdProductCustomerPermission' => 'ID_PRODUCT_CUSTOMER_PERMISSION',
        'idProductCustomerPermission' => 'ID_PRODUCT_CUSTOMER_PERMISSION',
        'spyProductCustomerPermission.idProductCustomerPermission' => 'ID_PRODUCT_CUSTOMER_PERMISSION',
        'SpyProductCustomerPermissionTableMap::COL_ID_PRODUCT_CUSTOMER_PERMISSION' => 'ID_PRODUCT_CUSTOMER_PERMISSION',
        'COL_ID_PRODUCT_CUSTOMER_PERMISSION' => 'ID_PRODUCT_CUSTOMER_PERMISSION',
        'id_product_customer_permission' => 'ID_PRODUCT_CUSTOMER_PERMISSION',
        'spy_product_customer_permission.id_product_customer_permission' => 'ID_PRODUCT_CUSTOMER_PERMISSION',
        'FkCustomer' => 'FK_CUSTOMER',
        'SpyProductCustomerPermission.FkCustomer' => 'FK_CUSTOMER',
        'fkCustomer' => 'FK_CUSTOMER',
        'spyProductCustomerPermission.fkCustomer' => 'FK_CUSTOMER',
        'SpyProductCustomerPermissionTableMap::COL_FK_CUSTOMER' => 'FK_CUSTOMER',
        'COL_FK_CUSTOMER' => 'FK_CUSTOMER',
        'fk_customer' => 'FK_CUSTOMER',
        'spy_product_customer_permission.fk_customer' => 'FK_CUSTOMER',
        'FkProductAbstract' => 'FK_PRODUCT_ABSTRACT',
        'SpyProductCustomerPermission.FkProductAbstract' => 'FK_PRODUCT_ABSTRACT',
        'fkProductAbstract' => 'FK_PRODUCT_ABSTRACT',
        'spyProductCustomerPermission.fkProductAbstract' => 'FK_PRODUCT_ABSTRACT',
        'SpyProductCustomerPermissionTableMap::COL_FK_PRODUCT_ABSTRACT' => 'FK_PRODUCT_ABSTRACT',
        'COL_FK_PRODUCT_ABSTRACT' => 'FK_PRODUCT_ABSTRACT',
        'fk_product_abstract' => 'FK_PRODUCT_ABSTRACT',
        'spy_product_customer_permission.fk_product_abstract' => 'FK_PRODUCT_ABSTRACT',
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
        $this->setName('spy_product_customer_permission');
        $this->setPhpName('SpyProductCustomerPermission');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Orm\\Zed\\ProductCustomerPermission\\Persistence\\SpyProductCustomerPermission');
        $this->setPackage('src.Orm.Zed.ProductCustomerPermission.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_product_customer_permission_pk_seq');
        // columns
        $this->addPrimaryKey('id_product_customer_permission', 'IdProductCustomerPermission', 'INTEGER', true, null, null);
        $this->addForeignKey('fk_customer', 'FkCustomer', 'INTEGER', 'spy_customer', 'id_customer', true, null, null);
        $this->addForeignKey('fk_product_abstract', 'FkProductAbstract', 'INTEGER', 'spy_product_abstract', 'id_product_abstract', true, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Customer', '\\Orm\\Zed\\Customer\\Persistence\\SpyCustomer', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_customer',
    1 => ':id_customer',
  ),
), 'CASCADE', null, null, false);
        $this->addRelation('ProductAbstract', '\\Orm\\Zed\\Product\\Persistence\\SpyProductAbstract', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_product_abstract',
    1 => ':id_product_abstract',
  ),
), 'CASCADE', null, null, false);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductCustomerPermission', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductCustomerPermission', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductCustomerPermission', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductCustomerPermission', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductCustomerPermission', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductCustomerPermission', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdProductCustomerPermission', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyProductCustomerPermissionTableMap::CLASS_DEFAULT : SpyProductCustomerPermissionTableMap::OM_CLASS;
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
     * @return array           (SpyProductCustomerPermission object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SpyProductCustomerPermissionTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyProductCustomerPermissionTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyProductCustomerPermissionTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyProductCustomerPermissionTableMap::OM_CLASS;
            /** @var SpyProductCustomerPermission $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyProductCustomerPermissionTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyProductCustomerPermissionTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyProductCustomerPermissionTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyProductCustomerPermission $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyProductCustomerPermissionTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyProductCustomerPermissionTableMap::COL_ID_PRODUCT_CUSTOMER_PERMISSION);
            $criteria->addSelectColumn(SpyProductCustomerPermissionTableMap::COL_FK_CUSTOMER);
            $criteria->addSelectColumn(SpyProductCustomerPermissionTableMap::COL_FK_PRODUCT_ABSTRACT);
        } else {
            $criteria->addSelectColumn($alias . '.id_product_customer_permission');
            $criteria->addSelectColumn($alias . '.fk_customer');
            $criteria->addSelectColumn($alias . '.fk_product_abstract');
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
            $criteria->removeSelectColumn(SpyProductCustomerPermissionTableMap::COL_ID_PRODUCT_CUSTOMER_PERMISSION);
            $criteria->removeSelectColumn(SpyProductCustomerPermissionTableMap::COL_FK_CUSTOMER);
            $criteria->removeSelectColumn(SpyProductCustomerPermissionTableMap::COL_FK_PRODUCT_ABSTRACT);
        } else {
            $criteria->removeSelectColumn($alias . '.id_product_customer_permission');
            $criteria->removeSelectColumn($alias . '.fk_customer');
            $criteria->removeSelectColumn($alias . '.fk_product_abstract');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyProductCustomerPermissionTableMap::DATABASE_NAME)->getTable(SpyProductCustomerPermissionTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyProductCustomerPermission or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SpyProductCustomerPermission object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductCustomerPermissionTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\ProductCustomerPermission\Persistence\SpyProductCustomerPermission) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyProductCustomerPermissionTableMap::DATABASE_NAME);
            $criteria->add(SpyProductCustomerPermissionTableMap::COL_ID_PRODUCT_CUSTOMER_PERMISSION, (array) $values, Criteria::IN);
        }

        $query = SpyProductCustomerPermissionQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyProductCustomerPermissionTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyProductCustomerPermissionTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_product_customer_permission table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SpyProductCustomerPermissionQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyProductCustomerPermission or Criteria object.
     *
     * @param mixed               $criteria Criteria or SpyProductCustomerPermission object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductCustomerPermissionTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyProductCustomerPermission object
        }

        if ($criteria->containsKey(SpyProductCustomerPermissionTableMap::COL_ID_PRODUCT_CUSTOMER_PERMISSION) && $criteria->keyContainsValue(SpyProductCustomerPermissionTableMap::COL_ID_PRODUCT_CUSTOMER_PERMISSION) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpyProductCustomerPermissionTableMap::COL_ID_PRODUCT_CUSTOMER_PERMISSION.')');
        }


        // Set the correct dbName
        $query = SpyProductCustomerPermissionQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SpyProductCustomerPermissionTableMap
