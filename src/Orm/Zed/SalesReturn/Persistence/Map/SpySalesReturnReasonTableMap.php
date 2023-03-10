<?php

namespace Orm\Zed\SalesReturn\Persistence\Map;

use Orm\Zed\SalesReturn\Persistence\SpySalesReturnReason;
use Orm\Zed\SalesReturn\Persistence\SpySalesReturnReasonQuery;
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
 * This class defines the structure of the 'spy_sales_return_reason' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpySalesReturnReasonTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.Orm.Zed.SalesReturn.Persistence.Map.SpySalesReturnReasonTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'spy_sales_return_reason';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Orm\\Zed\\SalesReturn\\Persistence\\SpySalesReturnReason';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'src.Orm.Zed.SalesReturn.Persistence.SpySalesReturnReason';

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
     * the column name for the id_sales_return_reason field
     */
    const COL_ID_SALES_RETURN_REASON = 'spy_sales_return_reason.id_sales_return_reason';

    /**
     * the column name for the glossary_key_reason field
     */
    const COL_GLOSSARY_KEY_REASON = 'spy_sales_return_reason.glossary_key_reason';

    /**
     * the column name for the key field
     */
    const COL_KEY = 'spy_sales_return_reason.key';

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
        self::TYPE_PHPNAME       => array('IdSalesReturnReason', 'GlossaryKeyReason', 'Key', ),
        self::TYPE_CAMELNAME     => array('idSalesReturnReason', 'glossaryKeyReason', 'key', ),
        self::TYPE_COLNAME       => array(SpySalesReturnReasonTableMap::COL_ID_SALES_RETURN_REASON, SpySalesReturnReasonTableMap::COL_GLOSSARY_KEY_REASON, SpySalesReturnReasonTableMap::COL_KEY, ),
        self::TYPE_FIELDNAME     => array('id_sales_return_reason', 'glossary_key_reason', 'key', ),
        self::TYPE_NUM           => array(0, 1, 2, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('IdSalesReturnReason' => 0, 'GlossaryKeyReason' => 1, 'Key' => 2, ),
        self::TYPE_CAMELNAME     => array('idSalesReturnReason' => 0, 'glossaryKeyReason' => 1, 'key' => 2, ),
        self::TYPE_COLNAME       => array(SpySalesReturnReasonTableMap::COL_ID_SALES_RETURN_REASON => 0, SpySalesReturnReasonTableMap::COL_GLOSSARY_KEY_REASON => 1, SpySalesReturnReasonTableMap::COL_KEY => 2, ),
        self::TYPE_FIELDNAME     => array('id_sales_return_reason' => 0, 'glossary_key_reason' => 1, 'key' => 2, ),
        self::TYPE_NUM           => array(0, 1, 2, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [
        'IdSalesReturnReason' => 'ID_SALES_RETURN_REASON',
        'SpySalesReturnReason.IdSalesReturnReason' => 'ID_SALES_RETURN_REASON',
        'idSalesReturnReason' => 'ID_SALES_RETURN_REASON',
        'spySalesReturnReason.idSalesReturnReason' => 'ID_SALES_RETURN_REASON',
        'SpySalesReturnReasonTableMap::COL_ID_SALES_RETURN_REASON' => 'ID_SALES_RETURN_REASON',
        'COL_ID_SALES_RETURN_REASON' => 'ID_SALES_RETURN_REASON',
        'id_sales_return_reason' => 'ID_SALES_RETURN_REASON',
        'spy_sales_return_reason.id_sales_return_reason' => 'ID_SALES_RETURN_REASON',
        'GlossaryKeyReason' => 'GLOSSARY_KEY_REASON',
        'SpySalesReturnReason.GlossaryKeyReason' => 'GLOSSARY_KEY_REASON',
        'glossaryKeyReason' => 'GLOSSARY_KEY_REASON',
        'spySalesReturnReason.glossaryKeyReason' => 'GLOSSARY_KEY_REASON',
        'SpySalesReturnReasonTableMap::COL_GLOSSARY_KEY_REASON' => 'GLOSSARY_KEY_REASON',
        'COL_GLOSSARY_KEY_REASON' => 'GLOSSARY_KEY_REASON',
        'glossary_key_reason' => 'GLOSSARY_KEY_REASON',
        'spy_sales_return_reason.glossary_key_reason' => 'GLOSSARY_KEY_REASON',
        'Key' => 'KEY',
        'SpySalesReturnReason.Key' => 'KEY',
        'key' => 'KEY',
        'spySalesReturnReason.key' => 'KEY',
        'SpySalesReturnReasonTableMap::COL_KEY' => 'KEY',
        'COL_KEY' => 'KEY',
        'spy_sales_return_reason.key' => 'KEY',
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
        $this->setName('spy_sales_return_reason');
        $this->setPhpName('SpySalesReturnReason');
        $this->setIdentifierQuoting(true);
        $this->setClassName('\\Orm\\Zed\\SalesReturn\\Persistence\\SpySalesReturnReason');
        $this->setPackage('src.Orm.Zed.SalesReturn.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_sales_return_reason_pk_seq');
        // columns
        $this->addPrimaryKey('id_sales_return_reason', 'IdSalesReturnReason', 'INTEGER', true, null, null);
        $this->addColumn('glossary_key_reason', 'GlossaryKeyReason', 'VARCHAR', true, 255, null);
        $this->addColumn('key', 'Key', 'VARCHAR', false, 255, null);
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
            'event' => ['spy_sales_return_reason_all' => ['column' => '*']],
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesReturnReason', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesReturnReason', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesReturnReason', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesReturnReason', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesReturnReason', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesReturnReason', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdSalesReturnReason', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpySalesReturnReasonTableMap::CLASS_DEFAULT : SpySalesReturnReasonTableMap::OM_CLASS;
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
     * @return array           (SpySalesReturnReason object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SpySalesReturnReasonTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpySalesReturnReasonTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpySalesReturnReasonTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpySalesReturnReasonTableMap::OM_CLASS;
            /** @var SpySalesReturnReason $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpySalesReturnReasonTableMap::addInstanceToPool($obj, $key);
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
            $key = SpySalesReturnReasonTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpySalesReturnReasonTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpySalesReturnReason $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpySalesReturnReasonTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpySalesReturnReasonTableMap::COL_ID_SALES_RETURN_REASON);
            $criteria->addSelectColumn(SpySalesReturnReasonTableMap::COL_GLOSSARY_KEY_REASON);
            $criteria->addSelectColumn(SpySalesReturnReasonTableMap::COL_KEY);
        } else {
            $criteria->addSelectColumn($alias . '.id_sales_return_reason');
            $criteria->addSelectColumn($alias . '.glossary_key_reason');
            $criteria->addSelectColumn($alias . '.key');
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
            $criteria->removeSelectColumn(SpySalesReturnReasonTableMap::COL_ID_SALES_RETURN_REASON);
            $criteria->removeSelectColumn(SpySalesReturnReasonTableMap::COL_GLOSSARY_KEY_REASON);
            $criteria->removeSelectColumn(SpySalesReturnReasonTableMap::COL_KEY);
        } else {
            $criteria->removeSelectColumn($alias . '.id_sales_return_reason');
            $criteria->removeSelectColumn($alias . '.glossary_key_reason');
            $criteria->removeSelectColumn($alias . '.key');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpySalesReturnReasonTableMap::DATABASE_NAME)->getTable(SpySalesReturnReasonTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpySalesReturnReason or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SpySalesReturnReason object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpySalesReturnReasonTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\SalesReturn\Persistence\SpySalesReturnReason) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpySalesReturnReasonTableMap::DATABASE_NAME);
            $criteria->add(SpySalesReturnReasonTableMap::COL_ID_SALES_RETURN_REASON, (array) $values, Criteria::IN);
        }

        $query = SpySalesReturnReasonQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpySalesReturnReasonTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpySalesReturnReasonTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_sales_return_reason table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SpySalesReturnReasonQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpySalesReturnReason or Criteria object.
     *
     * @param mixed               $criteria Criteria or SpySalesReturnReason object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpySalesReturnReasonTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpySalesReturnReason object
        }


        // Set the correct dbName
        $query = SpySalesReturnReasonQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SpySalesReturnReasonTableMap
