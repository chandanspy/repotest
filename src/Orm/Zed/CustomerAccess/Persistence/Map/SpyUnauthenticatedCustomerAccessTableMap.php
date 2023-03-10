<?php

namespace Orm\Zed\CustomerAccess\Persistence\Map;

use Orm\Zed\CustomerAccess\Persistence\SpyUnauthenticatedCustomerAccess;
use Orm\Zed\CustomerAccess\Persistence\SpyUnauthenticatedCustomerAccessQuery;
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
 * This class defines the structure of the 'spy_unauthenticated_customer_access' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyUnauthenticatedCustomerAccessTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.Orm.Zed.CustomerAccess.Persistence.Map.SpyUnauthenticatedCustomerAccessTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'spy_unauthenticated_customer_access';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Orm\\Zed\\CustomerAccess\\Persistence\\SpyUnauthenticatedCustomerAccess';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'src.Orm.Zed.CustomerAccess.Persistence.SpyUnauthenticatedCustomerAccess';

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
     * the column name for the id_unauthenticated_customer_access field
     */
    const COL_ID_UNAUTHENTICATED_CUSTOMER_ACCESS = 'spy_unauthenticated_customer_access.id_unauthenticated_customer_access';

    /**
     * the column name for the content_type field
     */
    const COL_CONTENT_TYPE = 'spy_unauthenticated_customer_access.content_type';

    /**
     * the column name for the is_restricted field
     */
    const COL_IS_RESTRICTED = 'spy_unauthenticated_customer_access.is_restricted';

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
        self::TYPE_PHPNAME       => array('IdUnauthenticatedCustomerAccess', 'ContentType', 'IsRestricted', ),
        self::TYPE_CAMELNAME     => array('idUnauthenticatedCustomerAccess', 'contentType', 'isRestricted', ),
        self::TYPE_COLNAME       => array(SpyUnauthenticatedCustomerAccessTableMap::COL_ID_UNAUTHENTICATED_CUSTOMER_ACCESS, SpyUnauthenticatedCustomerAccessTableMap::COL_CONTENT_TYPE, SpyUnauthenticatedCustomerAccessTableMap::COL_IS_RESTRICTED, ),
        self::TYPE_FIELDNAME     => array('id_unauthenticated_customer_access', 'content_type', 'is_restricted', ),
        self::TYPE_NUM           => array(0, 1, 2, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('IdUnauthenticatedCustomerAccess' => 0, 'ContentType' => 1, 'IsRestricted' => 2, ),
        self::TYPE_CAMELNAME     => array('idUnauthenticatedCustomerAccess' => 0, 'contentType' => 1, 'isRestricted' => 2, ),
        self::TYPE_COLNAME       => array(SpyUnauthenticatedCustomerAccessTableMap::COL_ID_UNAUTHENTICATED_CUSTOMER_ACCESS => 0, SpyUnauthenticatedCustomerAccessTableMap::COL_CONTENT_TYPE => 1, SpyUnauthenticatedCustomerAccessTableMap::COL_IS_RESTRICTED => 2, ),
        self::TYPE_FIELDNAME     => array('id_unauthenticated_customer_access' => 0, 'content_type' => 1, 'is_restricted' => 2, ),
        self::TYPE_NUM           => array(0, 1, 2, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [
        'IdUnauthenticatedCustomerAccess' => 'ID_UNAUTHENTICATED_CUSTOMER_ACCESS',
        'SpyUnauthenticatedCustomerAccess.IdUnauthenticatedCustomerAccess' => 'ID_UNAUTHENTICATED_CUSTOMER_ACCESS',
        'idUnauthenticatedCustomerAccess' => 'ID_UNAUTHENTICATED_CUSTOMER_ACCESS',
        'spyUnauthenticatedCustomerAccess.idUnauthenticatedCustomerAccess' => 'ID_UNAUTHENTICATED_CUSTOMER_ACCESS',
        'SpyUnauthenticatedCustomerAccessTableMap::COL_ID_UNAUTHENTICATED_CUSTOMER_ACCESS' => 'ID_UNAUTHENTICATED_CUSTOMER_ACCESS',
        'COL_ID_UNAUTHENTICATED_CUSTOMER_ACCESS' => 'ID_UNAUTHENTICATED_CUSTOMER_ACCESS',
        'id_unauthenticated_customer_access' => 'ID_UNAUTHENTICATED_CUSTOMER_ACCESS',
        'spy_unauthenticated_customer_access.id_unauthenticated_customer_access' => 'ID_UNAUTHENTICATED_CUSTOMER_ACCESS',
        'ContentType' => 'CONTENT_TYPE',
        'SpyUnauthenticatedCustomerAccess.ContentType' => 'CONTENT_TYPE',
        'contentType' => 'CONTENT_TYPE',
        'spyUnauthenticatedCustomerAccess.contentType' => 'CONTENT_TYPE',
        'SpyUnauthenticatedCustomerAccessTableMap::COL_CONTENT_TYPE' => 'CONTENT_TYPE',
        'COL_CONTENT_TYPE' => 'CONTENT_TYPE',
        'content_type' => 'CONTENT_TYPE',
        'spy_unauthenticated_customer_access.content_type' => 'CONTENT_TYPE',
        'IsRestricted' => 'IS_RESTRICTED',
        'SpyUnauthenticatedCustomerAccess.IsRestricted' => 'IS_RESTRICTED',
        'isRestricted' => 'IS_RESTRICTED',
        'spyUnauthenticatedCustomerAccess.isRestricted' => 'IS_RESTRICTED',
        'SpyUnauthenticatedCustomerAccessTableMap::COL_IS_RESTRICTED' => 'IS_RESTRICTED',
        'COL_IS_RESTRICTED' => 'IS_RESTRICTED',
        'is_restricted' => 'IS_RESTRICTED',
        'spy_unauthenticated_customer_access.is_restricted' => 'IS_RESTRICTED',
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
        $this->setName('spy_unauthenticated_customer_access');
        $this->setPhpName('SpyUnauthenticatedCustomerAccess');
        $this->setIdentifierQuoting(true);
        $this->setClassName('\\Orm\\Zed\\CustomerAccess\\Persistence\\SpyUnauthenticatedCustomerAccess');
        $this->setPackage('src.Orm.Zed.CustomerAccess.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_unauthenticated_customer_access_pk_seq');
        // columns
        $this->addPrimaryKey('id_unauthenticated_customer_access', 'IdUnauthenticatedCustomerAccess', 'INTEGER', true, null, null);
        $this->addColumn('content_type', 'ContentType', 'VARCHAR', true, 100, null);
        $this->addColumn('is_restricted', 'IsRestricted', 'BOOLEAN', true, 1, null);
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
            'event' => ['spy_unauthenticated_customer_access_all' => ['column' => '*']],
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdUnauthenticatedCustomerAccess', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdUnauthenticatedCustomerAccess', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdUnauthenticatedCustomerAccess', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdUnauthenticatedCustomerAccess', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdUnauthenticatedCustomerAccess', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdUnauthenticatedCustomerAccess', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdUnauthenticatedCustomerAccess', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyUnauthenticatedCustomerAccessTableMap::CLASS_DEFAULT : SpyUnauthenticatedCustomerAccessTableMap::OM_CLASS;
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
     * @return array           (SpyUnauthenticatedCustomerAccess object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SpyUnauthenticatedCustomerAccessTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyUnauthenticatedCustomerAccessTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyUnauthenticatedCustomerAccessTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyUnauthenticatedCustomerAccessTableMap::OM_CLASS;
            /** @var SpyUnauthenticatedCustomerAccess $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyUnauthenticatedCustomerAccessTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyUnauthenticatedCustomerAccessTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyUnauthenticatedCustomerAccessTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyUnauthenticatedCustomerAccess $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyUnauthenticatedCustomerAccessTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyUnauthenticatedCustomerAccessTableMap::COL_ID_UNAUTHENTICATED_CUSTOMER_ACCESS);
            $criteria->addSelectColumn(SpyUnauthenticatedCustomerAccessTableMap::COL_CONTENT_TYPE);
            $criteria->addSelectColumn(SpyUnauthenticatedCustomerAccessTableMap::COL_IS_RESTRICTED);
        } else {
            $criteria->addSelectColumn($alias . '.id_unauthenticated_customer_access');
            $criteria->addSelectColumn($alias . '.content_type');
            $criteria->addSelectColumn($alias . '.is_restricted');
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
            $criteria->removeSelectColumn(SpyUnauthenticatedCustomerAccessTableMap::COL_ID_UNAUTHENTICATED_CUSTOMER_ACCESS);
            $criteria->removeSelectColumn(SpyUnauthenticatedCustomerAccessTableMap::COL_CONTENT_TYPE);
            $criteria->removeSelectColumn(SpyUnauthenticatedCustomerAccessTableMap::COL_IS_RESTRICTED);
        } else {
            $criteria->removeSelectColumn($alias . '.id_unauthenticated_customer_access');
            $criteria->removeSelectColumn($alias . '.content_type');
            $criteria->removeSelectColumn($alias . '.is_restricted');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyUnauthenticatedCustomerAccessTableMap::DATABASE_NAME)->getTable(SpyUnauthenticatedCustomerAccessTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyUnauthenticatedCustomerAccess or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SpyUnauthenticatedCustomerAccess object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyUnauthenticatedCustomerAccessTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\CustomerAccess\Persistence\SpyUnauthenticatedCustomerAccess) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyUnauthenticatedCustomerAccessTableMap::DATABASE_NAME);
            $criteria->add(SpyUnauthenticatedCustomerAccessTableMap::COL_ID_UNAUTHENTICATED_CUSTOMER_ACCESS, (array) $values, Criteria::IN);
        }

        $query = SpyUnauthenticatedCustomerAccessQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyUnauthenticatedCustomerAccessTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyUnauthenticatedCustomerAccessTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_unauthenticated_customer_access table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SpyUnauthenticatedCustomerAccessQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyUnauthenticatedCustomerAccess or Criteria object.
     *
     * @param mixed               $criteria Criteria or SpyUnauthenticatedCustomerAccess object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyUnauthenticatedCustomerAccessTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyUnauthenticatedCustomerAccess object
        }

        if ($criteria->containsKey(SpyUnauthenticatedCustomerAccessTableMap::COL_ID_UNAUTHENTICATED_CUSTOMER_ACCESS) && $criteria->keyContainsValue(SpyUnauthenticatedCustomerAccessTableMap::COL_ID_UNAUTHENTICATED_CUSTOMER_ACCESS) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpyUnauthenticatedCustomerAccessTableMap::COL_ID_UNAUTHENTICATED_CUSTOMER_ACCESS.')');
        }


        // Set the correct dbName
        $query = SpyUnauthenticatedCustomerAccessQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SpyUnauthenticatedCustomerAccessTableMap
