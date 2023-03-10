<?php

namespace Orm\Zed\SalesReclamation\Persistence\Map;

use Orm\Zed\SalesReclamation\Persistence\SpySalesReclamationItem;
use Orm\Zed\SalesReclamation\Persistence\SpySalesReclamationItemQuery;
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
 * This class defines the structure of the 'spy_sales_reclamation_item' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpySalesReclamationItemTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.Orm.Zed.SalesReclamation.Persistence.Map.SpySalesReclamationItemTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'spy_sales_reclamation_item';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Orm\\Zed\\SalesReclamation\\Persistence\\SpySalesReclamationItem';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'src.Orm.Zed.SalesReclamation.Persistence.SpySalesReclamationItem';

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
     * the column name for the id_sales_reclamation_item field
     */
    const COL_ID_SALES_RECLAMATION_ITEM = 'spy_sales_reclamation_item.id_sales_reclamation_item';

    /**
     * the column name for the fk_sales_order_item field
     */
    const COL_FK_SALES_ORDER_ITEM = 'spy_sales_reclamation_item.fk_sales_order_item';

    /**
     * the column name for the fk_sales_reclamation field
     */
    const COL_FK_SALES_RECLAMATION = 'spy_sales_reclamation_item.fk_sales_reclamation';

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
        self::TYPE_PHPNAME       => array('IdSalesReclamationItem', 'FkSalesOrderItem', 'FkSalesReclamation', ),
        self::TYPE_CAMELNAME     => array('idSalesReclamationItem', 'fkSalesOrderItem', 'fkSalesReclamation', ),
        self::TYPE_COLNAME       => array(SpySalesReclamationItemTableMap::COL_ID_SALES_RECLAMATION_ITEM, SpySalesReclamationItemTableMap::COL_FK_SALES_ORDER_ITEM, SpySalesReclamationItemTableMap::COL_FK_SALES_RECLAMATION, ),
        self::TYPE_FIELDNAME     => array('id_sales_reclamation_item', 'fk_sales_order_item', 'fk_sales_reclamation', ),
        self::TYPE_NUM           => array(0, 1, 2, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('IdSalesReclamationItem' => 0, 'FkSalesOrderItem' => 1, 'FkSalesReclamation' => 2, ),
        self::TYPE_CAMELNAME     => array('idSalesReclamationItem' => 0, 'fkSalesOrderItem' => 1, 'fkSalesReclamation' => 2, ),
        self::TYPE_COLNAME       => array(SpySalesReclamationItemTableMap::COL_ID_SALES_RECLAMATION_ITEM => 0, SpySalesReclamationItemTableMap::COL_FK_SALES_ORDER_ITEM => 1, SpySalesReclamationItemTableMap::COL_FK_SALES_RECLAMATION => 2, ),
        self::TYPE_FIELDNAME     => array('id_sales_reclamation_item' => 0, 'fk_sales_order_item' => 1, 'fk_sales_reclamation' => 2, ),
        self::TYPE_NUM           => array(0, 1, 2, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [
        'IdSalesReclamationItem' => 'ID_SALES_RECLAMATION_ITEM',
        'SpySalesReclamationItem.IdSalesReclamationItem' => 'ID_SALES_RECLAMATION_ITEM',
        'idSalesReclamationItem' => 'ID_SALES_RECLAMATION_ITEM',
        'spySalesReclamationItem.idSalesReclamationItem' => 'ID_SALES_RECLAMATION_ITEM',
        'SpySalesReclamationItemTableMap::COL_ID_SALES_RECLAMATION_ITEM' => 'ID_SALES_RECLAMATION_ITEM',
        'COL_ID_SALES_RECLAMATION_ITEM' => 'ID_SALES_RECLAMATION_ITEM',
        'id_sales_reclamation_item' => 'ID_SALES_RECLAMATION_ITEM',
        'spy_sales_reclamation_item.id_sales_reclamation_item' => 'ID_SALES_RECLAMATION_ITEM',
        'FkSalesOrderItem' => 'FK_SALES_ORDER_ITEM',
        'SpySalesReclamationItem.FkSalesOrderItem' => 'FK_SALES_ORDER_ITEM',
        'fkSalesOrderItem' => 'FK_SALES_ORDER_ITEM',
        'spySalesReclamationItem.fkSalesOrderItem' => 'FK_SALES_ORDER_ITEM',
        'SpySalesReclamationItemTableMap::COL_FK_SALES_ORDER_ITEM' => 'FK_SALES_ORDER_ITEM',
        'COL_FK_SALES_ORDER_ITEM' => 'FK_SALES_ORDER_ITEM',
        'fk_sales_order_item' => 'FK_SALES_ORDER_ITEM',
        'spy_sales_reclamation_item.fk_sales_order_item' => 'FK_SALES_ORDER_ITEM',
        'FkSalesReclamation' => 'FK_SALES_RECLAMATION',
        'SpySalesReclamationItem.FkSalesReclamation' => 'FK_SALES_RECLAMATION',
        'fkSalesReclamation' => 'FK_SALES_RECLAMATION',
        'spySalesReclamationItem.fkSalesReclamation' => 'FK_SALES_RECLAMATION',
        'SpySalesReclamationItemTableMap::COL_FK_SALES_RECLAMATION' => 'FK_SALES_RECLAMATION',
        'COL_FK_SALES_RECLAMATION' => 'FK_SALES_RECLAMATION',
        'fk_sales_reclamation' => 'FK_SALES_RECLAMATION',
        'spy_sales_reclamation_item.fk_sales_reclamation' => 'FK_SALES_RECLAMATION',
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
        $this->setName('spy_sales_reclamation_item');
        $this->setPhpName('SpySalesReclamationItem');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Orm\\Zed\\SalesReclamation\\Persistence\\SpySalesReclamationItem');
        $this->setPackage('src.Orm.Zed.SalesReclamation.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_sales_reclamation_item_pk_seq');
        // columns
        $this->addPrimaryKey('id_sales_reclamation_item', 'IdSalesReclamationItem', 'INTEGER', true, null, null);
        $this->addForeignKey('fk_sales_order_item', 'FkSalesOrderItem', 'INTEGER', 'spy_sales_order_item', 'id_sales_order_item', true, null, null);
        $this->addForeignKey('fk_sales_reclamation', 'FkSalesReclamation', 'INTEGER', 'spy_sales_reclamation', 'id_sales_reclamation', true, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('SpySalesReclamation', '\\Orm\\Zed\\SalesReclamation\\Persistence\\SpySalesReclamation', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_sales_reclamation',
    1 => ':id_sales_reclamation',
  ),
), null, null, null, false);
        $this->addRelation('OrderItem', '\\Orm\\Zed\\Sales\\Persistence\\SpySalesOrderItem', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_sales_order_item',
    1 => ':id_sales_order_item',
  ),
), null, null, null, false);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesReclamationItem', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesReclamationItem', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesReclamationItem', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesReclamationItem', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesReclamationItem', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesReclamationItem', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdSalesReclamationItem', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpySalesReclamationItemTableMap::CLASS_DEFAULT : SpySalesReclamationItemTableMap::OM_CLASS;
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
     * @return array           (SpySalesReclamationItem object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SpySalesReclamationItemTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpySalesReclamationItemTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpySalesReclamationItemTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpySalesReclamationItemTableMap::OM_CLASS;
            /** @var SpySalesReclamationItem $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpySalesReclamationItemTableMap::addInstanceToPool($obj, $key);
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
            $key = SpySalesReclamationItemTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpySalesReclamationItemTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpySalesReclamationItem $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpySalesReclamationItemTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpySalesReclamationItemTableMap::COL_ID_SALES_RECLAMATION_ITEM);
            $criteria->addSelectColumn(SpySalesReclamationItemTableMap::COL_FK_SALES_ORDER_ITEM);
            $criteria->addSelectColumn(SpySalesReclamationItemTableMap::COL_FK_SALES_RECLAMATION);
        } else {
            $criteria->addSelectColumn($alias . '.id_sales_reclamation_item');
            $criteria->addSelectColumn($alias . '.fk_sales_order_item');
            $criteria->addSelectColumn($alias . '.fk_sales_reclamation');
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
            $criteria->removeSelectColumn(SpySalesReclamationItemTableMap::COL_ID_SALES_RECLAMATION_ITEM);
            $criteria->removeSelectColumn(SpySalesReclamationItemTableMap::COL_FK_SALES_ORDER_ITEM);
            $criteria->removeSelectColumn(SpySalesReclamationItemTableMap::COL_FK_SALES_RECLAMATION);
        } else {
            $criteria->removeSelectColumn($alias . '.id_sales_reclamation_item');
            $criteria->removeSelectColumn($alias . '.fk_sales_order_item');
            $criteria->removeSelectColumn($alias . '.fk_sales_reclamation');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpySalesReclamationItemTableMap::DATABASE_NAME)->getTable(SpySalesReclamationItemTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpySalesReclamationItem or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SpySalesReclamationItem object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpySalesReclamationItemTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\SalesReclamation\Persistence\SpySalesReclamationItem) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpySalesReclamationItemTableMap::DATABASE_NAME);
            $criteria->add(SpySalesReclamationItemTableMap::COL_ID_SALES_RECLAMATION_ITEM, (array) $values, Criteria::IN);
        }

        $query = SpySalesReclamationItemQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpySalesReclamationItemTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpySalesReclamationItemTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_sales_reclamation_item table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SpySalesReclamationItemQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpySalesReclamationItem or Criteria object.
     *
     * @param mixed               $criteria Criteria or SpySalesReclamationItem object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpySalesReclamationItemTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpySalesReclamationItem object
        }

        if ($criteria->containsKey(SpySalesReclamationItemTableMap::COL_ID_SALES_RECLAMATION_ITEM) && $criteria->keyContainsValue(SpySalesReclamationItemTableMap::COL_ID_SALES_RECLAMATION_ITEM) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpySalesReclamationItemTableMap::COL_ID_SALES_RECLAMATION_ITEM.')');
        }


        // Set the correct dbName
        $query = SpySalesReclamationItemQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SpySalesReclamationItemTableMap
