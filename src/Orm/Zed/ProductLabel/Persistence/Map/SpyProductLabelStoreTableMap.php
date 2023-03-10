<?php

namespace Orm\Zed\ProductLabel\Persistence\Map;

use Orm\Zed\ProductLabel\Persistence\SpyProductLabelStore;
use Orm\Zed\ProductLabel\Persistence\SpyProductLabelStoreQuery;
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
 * This class defines the structure of the 'spy_product_label_store' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyProductLabelStoreTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.Orm.Zed.ProductLabel.Persistence.Map.SpyProductLabelStoreTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'spy_product_label_store';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Orm\\Zed\\ProductLabel\\Persistence\\SpyProductLabelStore';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'src.Orm.Zed.ProductLabel.Persistence.SpyProductLabelStore';

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
     * the column name for the id_product_label_store field
     */
    const COL_ID_PRODUCT_LABEL_STORE = 'spy_product_label_store.id_product_label_store';

    /**
     * the column name for the fk_product_label field
     */
    const COL_FK_PRODUCT_LABEL = 'spy_product_label_store.fk_product_label';

    /**
     * the column name for the fk_store field
     */
    const COL_FK_STORE = 'spy_product_label_store.fk_store';

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
        self::TYPE_PHPNAME       => array('IdProductLabelStore', 'FkProductLabel', 'FkStore', ),
        self::TYPE_CAMELNAME     => array('idProductLabelStore', 'fkProductLabel', 'fkStore', ),
        self::TYPE_COLNAME       => array(SpyProductLabelStoreTableMap::COL_ID_PRODUCT_LABEL_STORE, SpyProductLabelStoreTableMap::COL_FK_PRODUCT_LABEL, SpyProductLabelStoreTableMap::COL_FK_STORE, ),
        self::TYPE_FIELDNAME     => array('id_product_label_store', 'fk_product_label', 'fk_store', ),
        self::TYPE_NUM           => array(0, 1, 2, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('IdProductLabelStore' => 0, 'FkProductLabel' => 1, 'FkStore' => 2, ),
        self::TYPE_CAMELNAME     => array('idProductLabelStore' => 0, 'fkProductLabel' => 1, 'fkStore' => 2, ),
        self::TYPE_COLNAME       => array(SpyProductLabelStoreTableMap::COL_ID_PRODUCT_LABEL_STORE => 0, SpyProductLabelStoreTableMap::COL_FK_PRODUCT_LABEL => 1, SpyProductLabelStoreTableMap::COL_FK_STORE => 2, ),
        self::TYPE_FIELDNAME     => array('id_product_label_store' => 0, 'fk_product_label' => 1, 'fk_store' => 2, ),
        self::TYPE_NUM           => array(0, 1, 2, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [
        'IdProductLabelStore' => 'ID_PRODUCT_LABEL_STORE',
        'SpyProductLabelStore.IdProductLabelStore' => 'ID_PRODUCT_LABEL_STORE',
        'idProductLabelStore' => 'ID_PRODUCT_LABEL_STORE',
        'spyProductLabelStore.idProductLabelStore' => 'ID_PRODUCT_LABEL_STORE',
        'SpyProductLabelStoreTableMap::COL_ID_PRODUCT_LABEL_STORE' => 'ID_PRODUCT_LABEL_STORE',
        'COL_ID_PRODUCT_LABEL_STORE' => 'ID_PRODUCT_LABEL_STORE',
        'id_product_label_store' => 'ID_PRODUCT_LABEL_STORE',
        'spy_product_label_store.id_product_label_store' => 'ID_PRODUCT_LABEL_STORE',
        'FkProductLabel' => 'FK_PRODUCT_LABEL',
        'SpyProductLabelStore.FkProductLabel' => 'FK_PRODUCT_LABEL',
        'fkProductLabel' => 'FK_PRODUCT_LABEL',
        'spyProductLabelStore.fkProductLabel' => 'FK_PRODUCT_LABEL',
        'SpyProductLabelStoreTableMap::COL_FK_PRODUCT_LABEL' => 'FK_PRODUCT_LABEL',
        'COL_FK_PRODUCT_LABEL' => 'FK_PRODUCT_LABEL',
        'fk_product_label' => 'FK_PRODUCT_LABEL',
        'spy_product_label_store.fk_product_label' => 'FK_PRODUCT_LABEL',
        'FkStore' => 'FK_STORE',
        'SpyProductLabelStore.FkStore' => 'FK_STORE',
        'fkStore' => 'FK_STORE',
        'spyProductLabelStore.fkStore' => 'FK_STORE',
        'SpyProductLabelStoreTableMap::COL_FK_STORE' => 'FK_STORE',
        'COL_FK_STORE' => 'FK_STORE',
        'fk_store' => 'FK_STORE',
        'spy_product_label_store.fk_store' => 'FK_STORE',
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
        $this->setName('spy_product_label_store');
        $this->setPhpName('SpyProductLabelStore');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Orm\\Zed\\ProductLabel\\Persistence\\SpyProductLabelStore');
        $this->setPackage('src.Orm.Zed.ProductLabel.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_product_label_store_pk_seq');
        // columns
        $this->addPrimaryKey('id_product_label_store', 'IdProductLabelStore', 'INTEGER', true, null, null);
        $this->addForeignKey('fk_product_label', 'FkProductLabel', 'INTEGER', 'spy_product_label', 'id_product_label', true, null, null);
        $this->addForeignKey('fk_store', 'FkStore', 'INTEGER', 'spy_store', 'id_store', true, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('ProductLabel', '\\Orm\\Zed\\ProductLabel\\Persistence\\SpyProductLabel', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_product_label',
    1 => ':id_product_label',
  ),
), null, null, null, false);
        $this->addRelation('Store', '\\Orm\\Zed\\Store\\Persistence\\SpyStore', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_store',
    1 => ':id_store',
  ),
), null, null, null, false);
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
            'event' => ['spy_product_label_store_all' => ['column' => '*']],
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductLabelStore', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductLabelStore', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductLabelStore', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductLabelStore', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductLabelStore', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductLabelStore', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdProductLabelStore', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyProductLabelStoreTableMap::CLASS_DEFAULT : SpyProductLabelStoreTableMap::OM_CLASS;
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
     * @return array           (SpyProductLabelStore object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SpyProductLabelStoreTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyProductLabelStoreTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyProductLabelStoreTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyProductLabelStoreTableMap::OM_CLASS;
            /** @var SpyProductLabelStore $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyProductLabelStoreTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyProductLabelStoreTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyProductLabelStoreTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyProductLabelStore $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyProductLabelStoreTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyProductLabelStoreTableMap::COL_ID_PRODUCT_LABEL_STORE);
            $criteria->addSelectColumn(SpyProductLabelStoreTableMap::COL_FK_PRODUCT_LABEL);
            $criteria->addSelectColumn(SpyProductLabelStoreTableMap::COL_FK_STORE);
        } else {
            $criteria->addSelectColumn($alias . '.id_product_label_store');
            $criteria->addSelectColumn($alias . '.fk_product_label');
            $criteria->addSelectColumn($alias . '.fk_store');
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
            $criteria->removeSelectColumn(SpyProductLabelStoreTableMap::COL_ID_PRODUCT_LABEL_STORE);
            $criteria->removeSelectColumn(SpyProductLabelStoreTableMap::COL_FK_PRODUCT_LABEL);
            $criteria->removeSelectColumn(SpyProductLabelStoreTableMap::COL_FK_STORE);
        } else {
            $criteria->removeSelectColumn($alias . '.id_product_label_store');
            $criteria->removeSelectColumn($alias . '.fk_product_label');
            $criteria->removeSelectColumn($alias . '.fk_store');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyProductLabelStoreTableMap::DATABASE_NAME)->getTable(SpyProductLabelStoreTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyProductLabelStore or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SpyProductLabelStore object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductLabelStoreTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\ProductLabel\Persistence\SpyProductLabelStore) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyProductLabelStoreTableMap::DATABASE_NAME);
            $criteria->add(SpyProductLabelStoreTableMap::COL_ID_PRODUCT_LABEL_STORE, (array) $values, Criteria::IN);
        }

        $query = SpyProductLabelStoreQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyProductLabelStoreTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyProductLabelStoreTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_product_label_store table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SpyProductLabelStoreQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyProductLabelStore or Criteria object.
     *
     * @param mixed               $criteria Criteria or SpyProductLabelStore object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductLabelStoreTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyProductLabelStore object
        }

        if ($criteria->containsKey(SpyProductLabelStoreTableMap::COL_ID_PRODUCT_LABEL_STORE) && $criteria->keyContainsValue(SpyProductLabelStoreTableMap::COL_ID_PRODUCT_LABEL_STORE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpyProductLabelStoreTableMap::COL_ID_PRODUCT_LABEL_STORE.')');
        }


        // Set the correct dbName
        $query = SpyProductLabelStoreQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SpyProductLabelStoreTableMap
