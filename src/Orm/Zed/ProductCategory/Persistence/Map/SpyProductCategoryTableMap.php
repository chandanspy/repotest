<?php

namespace Orm\Zed\ProductCategory\Persistence\Map;

use Orm\Zed\ProductCategory\Persistence\SpyProductCategory;
use Orm\Zed\ProductCategory\Persistence\SpyProductCategoryQuery;
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
 * This class defines the structure of the 'spy_product_category' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyProductCategoryTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.Orm.Zed.ProductCategory.Persistence.Map.SpyProductCategoryTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'spy_product_category';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Orm\\Zed\\ProductCategory\\Persistence\\SpyProductCategory';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'src.Orm.Zed.ProductCategory.Persistence.SpyProductCategory';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 4;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 4;

    /**
     * the column name for the id_product_category field
     */
    const COL_ID_PRODUCT_CATEGORY = 'spy_product_category.id_product_category';

    /**
     * the column name for the fk_category field
     */
    const COL_FK_CATEGORY = 'spy_product_category.fk_category';

    /**
     * the column name for the fk_product_abstract field
     */
    const COL_FK_PRODUCT_ABSTRACT = 'spy_product_category.fk_product_abstract';

    /**
     * the column name for the product_order field
     */
    const COL_PRODUCT_ORDER = 'spy_product_category.product_order';

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
        self::TYPE_PHPNAME       => array('IdProductCategory', 'FkCategory', 'FkProductAbstract', 'ProductOrder', ),
        self::TYPE_CAMELNAME     => array('idProductCategory', 'fkCategory', 'fkProductAbstract', 'productOrder', ),
        self::TYPE_COLNAME       => array(SpyProductCategoryTableMap::COL_ID_PRODUCT_CATEGORY, SpyProductCategoryTableMap::COL_FK_CATEGORY, SpyProductCategoryTableMap::COL_FK_PRODUCT_ABSTRACT, SpyProductCategoryTableMap::COL_PRODUCT_ORDER, ),
        self::TYPE_FIELDNAME     => array('id_product_category', 'fk_category', 'fk_product_abstract', 'product_order', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('IdProductCategory' => 0, 'FkCategory' => 1, 'FkProductAbstract' => 2, 'ProductOrder' => 3, ),
        self::TYPE_CAMELNAME     => array('idProductCategory' => 0, 'fkCategory' => 1, 'fkProductAbstract' => 2, 'productOrder' => 3, ),
        self::TYPE_COLNAME       => array(SpyProductCategoryTableMap::COL_ID_PRODUCT_CATEGORY => 0, SpyProductCategoryTableMap::COL_FK_CATEGORY => 1, SpyProductCategoryTableMap::COL_FK_PRODUCT_ABSTRACT => 2, SpyProductCategoryTableMap::COL_PRODUCT_ORDER => 3, ),
        self::TYPE_FIELDNAME     => array('id_product_category' => 0, 'fk_category' => 1, 'fk_product_abstract' => 2, 'product_order' => 3, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [
        'IdProductCategory' => 'ID_PRODUCT_CATEGORY',
        'SpyProductCategory.IdProductCategory' => 'ID_PRODUCT_CATEGORY',
        'idProductCategory' => 'ID_PRODUCT_CATEGORY',
        'spyProductCategory.idProductCategory' => 'ID_PRODUCT_CATEGORY',
        'SpyProductCategoryTableMap::COL_ID_PRODUCT_CATEGORY' => 'ID_PRODUCT_CATEGORY',
        'COL_ID_PRODUCT_CATEGORY' => 'ID_PRODUCT_CATEGORY',
        'id_product_category' => 'ID_PRODUCT_CATEGORY',
        'spy_product_category.id_product_category' => 'ID_PRODUCT_CATEGORY',
        'FkCategory' => 'FK_CATEGORY',
        'SpyProductCategory.FkCategory' => 'FK_CATEGORY',
        'fkCategory' => 'FK_CATEGORY',
        'spyProductCategory.fkCategory' => 'FK_CATEGORY',
        'SpyProductCategoryTableMap::COL_FK_CATEGORY' => 'FK_CATEGORY',
        'COL_FK_CATEGORY' => 'FK_CATEGORY',
        'fk_category' => 'FK_CATEGORY',
        'spy_product_category.fk_category' => 'FK_CATEGORY',
        'FkProductAbstract' => 'FK_PRODUCT_ABSTRACT',
        'SpyProductCategory.FkProductAbstract' => 'FK_PRODUCT_ABSTRACT',
        'fkProductAbstract' => 'FK_PRODUCT_ABSTRACT',
        'spyProductCategory.fkProductAbstract' => 'FK_PRODUCT_ABSTRACT',
        'SpyProductCategoryTableMap::COL_FK_PRODUCT_ABSTRACT' => 'FK_PRODUCT_ABSTRACT',
        'COL_FK_PRODUCT_ABSTRACT' => 'FK_PRODUCT_ABSTRACT',
        'fk_product_abstract' => 'FK_PRODUCT_ABSTRACT',
        'spy_product_category.fk_product_abstract' => 'FK_PRODUCT_ABSTRACT',
        'ProductOrder' => 'PRODUCT_ORDER',
        'SpyProductCategory.ProductOrder' => 'PRODUCT_ORDER',
        'productOrder' => 'PRODUCT_ORDER',
        'spyProductCategory.productOrder' => 'PRODUCT_ORDER',
        'SpyProductCategoryTableMap::COL_PRODUCT_ORDER' => 'PRODUCT_ORDER',
        'COL_PRODUCT_ORDER' => 'PRODUCT_ORDER',
        'product_order' => 'PRODUCT_ORDER',
        'spy_product_category.product_order' => 'PRODUCT_ORDER',
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
        $this->setName('spy_product_category');
        $this->setPhpName('SpyProductCategory');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Orm\\Zed\\ProductCategory\\Persistence\\SpyProductCategory');
        $this->setPackage('src.Orm.Zed.ProductCategory.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_product_category_pk_seq');
        // columns
        $this->addPrimaryKey('id_product_category', 'IdProductCategory', 'INTEGER', true, null, null);
        $this->addForeignKey('fk_category', 'FkCategory', 'INTEGER', 'spy_category', 'id_category', true, null, null);
        $this->addForeignKey('fk_product_abstract', 'FkProductAbstract', 'INTEGER', 'spy_product_abstract', 'id_product_abstract', true, null, null);
        $this->addColumn('product_order', 'ProductOrder', 'INTEGER', false, null, 0);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('SpyCategory', '\\Orm\\Zed\\Category\\Persistence\\SpyCategory', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_category',
    1 => ':id_category',
  ),
), null, null, null, false);
        $this->addRelation('SpyProductAbstract', '\\Orm\\Zed\\Product\\Persistence\\SpyProductAbstract', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_product_abstract',
    1 => ':id_product_abstract',
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
            'event' => ['spy_product_category_all' => ['column' => '*']],
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductCategory', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductCategory', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductCategory', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductCategory', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductCategory', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductCategory', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdProductCategory', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyProductCategoryTableMap::CLASS_DEFAULT : SpyProductCategoryTableMap::OM_CLASS;
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
     * @return array           (SpyProductCategory object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SpyProductCategoryTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyProductCategoryTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyProductCategoryTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyProductCategoryTableMap::OM_CLASS;
            /** @var SpyProductCategory $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyProductCategoryTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyProductCategoryTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyProductCategoryTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyProductCategory $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyProductCategoryTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyProductCategoryTableMap::COL_ID_PRODUCT_CATEGORY);
            $criteria->addSelectColumn(SpyProductCategoryTableMap::COL_FK_CATEGORY);
            $criteria->addSelectColumn(SpyProductCategoryTableMap::COL_FK_PRODUCT_ABSTRACT);
            $criteria->addSelectColumn(SpyProductCategoryTableMap::COL_PRODUCT_ORDER);
        } else {
            $criteria->addSelectColumn($alias . '.id_product_category');
            $criteria->addSelectColumn($alias . '.fk_category');
            $criteria->addSelectColumn($alias . '.fk_product_abstract');
            $criteria->addSelectColumn($alias . '.product_order');
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
            $criteria->removeSelectColumn(SpyProductCategoryTableMap::COL_ID_PRODUCT_CATEGORY);
            $criteria->removeSelectColumn(SpyProductCategoryTableMap::COL_FK_CATEGORY);
            $criteria->removeSelectColumn(SpyProductCategoryTableMap::COL_FK_PRODUCT_ABSTRACT);
            $criteria->removeSelectColumn(SpyProductCategoryTableMap::COL_PRODUCT_ORDER);
        } else {
            $criteria->removeSelectColumn($alias . '.id_product_category');
            $criteria->removeSelectColumn($alias . '.fk_category');
            $criteria->removeSelectColumn($alias . '.fk_product_abstract');
            $criteria->removeSelectColumn($alias . '.product_order');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyProductCategoryTableMap::DATABASE_NAME)->getTable(SpyProductCategoryTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyProductCategory or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SpyProductCategory object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductCategoryTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\ProductCategory\Persistence\SpyProductCategory) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyProductCategoryTableMap::DATABASE_NAME);
            $criteria->add(SpyProductCategoryTableMap::COL_ID_PRODUCT_CATEGORY, (array) $values, Criteria::IN);
        }

        $query = SpyProductCategoryQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyProductCategoryTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyProductCategoryTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_product_category table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SpyProductCategoryQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyProductCategory or Criteria object.
     *
     * @param mixed               $criteria Criteria or SpyProductCategory object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductCategoryTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyProductCategory object
        }

        if ($criteria->containsKey(SpyProductCategoryTableMap::COL_ID_PRODUCT_CATEGORY) && $criteria->keyContainsValue(SpyProductCategoryTableMap::COL_ID_PRODUCT_CATEGORY) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpyProductCategoryTableMap::COL_ID_PRODUCT_CATEGORY.')');
        }


        // Set the correct dbName
        $query = SpyProductCategoryQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SpyProductCategoryTableMap
