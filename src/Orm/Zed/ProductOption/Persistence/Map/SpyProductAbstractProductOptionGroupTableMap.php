<?php

namespace Orm\Zed\ProductOption\Persistence\Map;

use Orm\Zed\ProductOption\Persistence\SpyProductAbstractProductOptionGroup;
use Orm\Zed\ProductOption\Persistence\SpyProductAbstractProductOptionGroupQuery;
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
 * This class defines the structure of the 'spy_product_abstract_product_option_group' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyProductAbstractProductOptionGroupTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.Orm.Zed.ProductOption.Persistence.Map.SpyProductAbstractProductOptionGroupTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'spy_product_abstract_product_option_group';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Orm\\Zed\\ProductOption\\Persistence\\SpyProductAbstractProductOptionGroup';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'src.Orm.Zed.ProductOption.Persistence.SpyProductAbstractProductOptionGroup';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 2;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 2;

    /**
     * the column name for the fk_product_abstract field
     */
    const COL_FK_PRODUCT_ABSTRACT = 'spy_product_abstract_product_option_group.fk_product_abstract';

    /**
     * the column name for the fk_product_option_group field
     */
    const COL_FK_PRODUCT_OPTION_GROUP = 'spy_product_abstract_product_option_group.fk_product_option_group';

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
        self::TYPE_PHPNAME       => array('FkProductAbstract', 'FkProductOptionGroup', ),
        self::TYPE_CAMELNAME     => array('fkProductAbstract', 'fkProductOptionGroup', ),
        self::TYPE_COLNAME       => array(SpyProductAbstractProductOptionGroupTableMap::COL_FK_PRODUCT_ABSTRACT, SpyProductAbstractProductOptionGroupTableMap::COL_FK_PRODUCT_OPTION_GROUP, ),
        self::TYPE_FIELDNAME     => array('fk_product_abstract', 'fk_product_option_group', ),
        self::TYPE_NUM           => array(0, 1, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('FkProductAbstract' => 0, 'FkProductOptionGroup' => 1, ),
        self::TYPE_CAMELNAME     => array('fkProductAbstract' => 0, 'fkProductOptionGroup' => 1, ),
        self::TYPE_COLNAME       => array(SpyProductAbstractProductOptionGroupTableMap::COL_FK_PRODUCT_ABSTRACT => 0, SpyProductAbstractProductOptionGroupTableMap::COL_FK_PRODUCT_OPTION_GROUP => 1, ),
        self::TYPE_FIELDNAME     => array('fk_product_abstract' => 0, 'fk_product_option_group' => 1, ),
        self::TYPE_NUM           => array(0, 1, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [
        'FkProductAbstract' => 'FK_PRODUCT_ABSTRACT',
        'SpyProductAbstractProductOptionGroup.FkProductAbstract' => 'FK_PRODUCT_ABSTRACT',
        'fkProductAbstract' => 'FK_PRODUCT_ABSTRACT',
        'spyProductAbstractProductOptionGroup.fkProductAbstract' => 'FK_PRODUCT_ABSTRACT',
        'SpyProductAbstractProductOptionGroupTableMap::COL_FK_PRODUCT_ABSTRACT' => 'FK_PRODUCT_ABSTRACT',
        'COL_FK_PRODUCT_ABSTRACT' => 'FK_PRODUCT_ABSTRACT',
        'fk_product_abstract' => 'FK_PRODUCT_ABSTRACT',
        'spy_product_abstract_product_option_group.fk_product_abstract' => 'FK_PRODUCT_ABSTRACT',
        'FkProductOptionGroup' => 'FK_PRODUCT_OPTION_GROUP',
        'SpyProductAbstractProductOptionGroup.FkProductOptionGroup' => 'FK_PRODUCT_OPTION_GROUP',
        'fkProductOptionGroup' => 'FK_PRODUCT_OPTION_GROUP',
        'spyProductAbstractProductOptionGroup.fkProductOptionGroup' => 'FK_PRODUCT_OPTION_GROUP',
        'SpyProductAbstractProductOptionGroupTableMap::COL_FK_PRODUCT_OPTION_GROUP' => 'FK_PRODUCT_OPTION_GROUP',
        'COL_FK_PRODUCT_OPTION_GROUP' => 'FK_PRODUCT_OPTION_GROUP',
        'fk_product_option_group' => 'FK_PRODUCT_OPTION_GROUP',
        'spy_product_abstract_product_option_group.fk_product_option_group' => 'FK_PRODUCT_OPTION_GROUP',
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
        $this->setName('spy_product_abstract_product_option_group');
        $this->setPhpName('SpyProductAbstractProductOptionGroup');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Orm\\Zed\\ProductOption\\Persistence\\SpyProductAbstractProductOptionGroup');
        $this->setPackage('src.Orm.Zed.ProductOption.Persistence');
        $this->setUseIdGenerator(false);
        $this->setIsCrossRef(true);
        // columns
        $this->addForeignPrimaryKey('fk_product_abstract', 'FkProductAbstract', 'INTEGER' , 'spy_product_abstract', 'id_product_abstract', true, null, null);
        $this->addForeignPrimaryKey('fk_product_option_group', 'FkProductOptionGroup', 'INTEGER' , 'spy_product_option_group', 'id_product_option_group', true, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('SpyProductAbstract', '\\Orm\\Zed\\Product\\Persistence\\SpyProductAbstract', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_product_abstract',
    1 => ':id_product_abstract',
  ),
), null, null, null, false);
        $this->addRelation('SpyProductOptionGroup', '\\Orm\\Zed\\ProductOption\\Persistence\\SpyProductOptionGroup', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_product_option_group',
    1 => ':id_product_option_group',
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
            'event' => ['spy_product_abstract_product_option_group_all' => ['column' => '*']],
        );
    } // getBehaviors()

    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \Orm\Zed\ProductOption\Persistence\SpyProductAbstractProductOptionGroup $obj A \Orm\Zed\ProductOption\Persistence\SpyProductAbstractProductOptionGroup object.
     * @param string $key             (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getFkProductAbstract() || is_scalar($obj->getFkProductAbstract()) || is_callable([$obj->getFkProductAbstract(), '__toString']) ? (string) $obj->getFkProductAbstract() : $obj->getFkProductAbstract()), (null === $obj->getFkProductOptionGroup() || is_scalar($obj->getFkProductOptionGroup()) || is_callable([$obj->getFkProductOptionGroup(), '__toString']) ? (string) $obj->getFkProductOptionGroup() : $obj->getFkProductOptionGroup())]);
            } // if key === null
            self::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param mixed $value A \Orm\Zed\ProductOption\Persistence\SpyProductAbstractProductOptionGroup object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \Orm\Zed\ProductOption\Persistence\SpyProductAbstractProductOptionGroup) {
                $key = serialize([(null === $value->getFkProductAbstract() || is_scalar($value->getFkProductAbstract()) || is_callable([$value->getFkProductAbstract(), '__toString']) ? (string) $value->getFkProductAbstract() : $value->getFkProductAbstract()), (null === $value->getFkProductOptionGroup() || is_scalar($value->getFkProductOptionGroup()) || is_callable([$value->getFkProductOptionGroup(), '__toString']) ? (string) $value->getFkProductOptionGroup() : $value->getFkProductOptionGroup())]);

            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \Orm\Zed\ProductOption\Persistence\SpyProductAbstractProductOptionGroup object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
                throw $e;
            }

            unset(self::$instances[$key]);
        }
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('FkProductAbstract', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('FkProductOptionGroup', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('FkProductAbstract', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('FkProductAbstract', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('FkProductAbstract', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('FkProductAbstract', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('FkProductAbstract', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('FkProductOptionGroup', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('FkProductOptionGroup', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('FkProductOptionGroup', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('FkProductOptionGroup', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('FkProductOptionGroup', TableMap::TYPE_PHPNAME, $indexType)])]);
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
            $pks = [];

        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('FkProductAbstract', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('FkProductOptionGroup', TableMap::TYPE_PHPNAME, $indexType)
        ];

        return $pks;
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
        return $withPrefix ? SpyProductAbstractProductOptionGroupTableMap::CLASS_DEFAULT : SpyProductAbstractProductOptionGroupTableMap::OM_CLASS;
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
     * @return array           (SpyProductAbstractProductOptionGroup object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SpyProductAbstractProductOptionGroupTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyProductAbstractProductOptionGroupTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyProductAbstractProductOptionGroupTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyProductAbstractProductOptionGroupTableMap::OM_CLASS;
            /** @var SpyProductAbstractProductOptionGroup $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyProductAbstractProductOptionGroupTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyProductAbstractProductOptionGroupTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyProductAbstractProductOptionGroupTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyProductAbstractProductOptionGroup $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyProductAbstractProductOptionGroupTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyProductAbstractProductOptionGroupTableMap::COL_FK_PRODUCT_ABSTRACT);
            $criteria->addSelectColumn(SpyProductAbstractProductOptionGroupTableMap::COL_FK_PRODUCT_OPTION_GROUP);
        } else {
            $criteria->addSelectColumn($alias . '.fk_product_abstract');
            $criteria->addSelectColumn($alias . '.fk_product_option_group');
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
            $criteria->removeSelectColumn(SpyProductAbstractProductOptionGroupTableMap::COL_FK_PRODUCT_ABSTRACT);
            $criteria->removeSelectColumn(SpyProductAbstractProductOptionGroupTableMap::COL_FK_PRODUCT_OPTION_GROUP);
        } else {
            $criteria->removeSelectColumn($alias . '.fk_product_abstract');
            $criteria->removeSelectColumn($alias . '.fk_product_option_group');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyProductAbstractProductOptionGroupTableMap::DATABASE_NAME)->getTable(SpyProductAbstractProductOptionGroupTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyProductAbstractProductOptionGroup or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SpyProductAbstractProductOptionGroup object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductAbstractProductOptionGroupTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\ProductOption\Persistence\SpyProductAbstractProductOptionGroup) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyProductAbstractProductOptionGroupTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(SpyProductAbstractProductOptionGroupTableMap::COL_FK_PRODUCT_ABSTRACT, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(SpyProductAbstractProductOptionGroupTableMap::COL_FK_PRODUCT_OPTION_GROUP, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        $query = SpyProductAbstractProductOptionGroupQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyProductAbstractProductOptionGroupTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyProductAbstractProductOptionGroupTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_product_abstract_product_option_group table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SpyProductAbstractProductOptionGroupQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyProductAbstractProductOptionGroup or Criteria object.
     *
     * @param mixed               $criteria Criteria or SpyProductAbstractProductOptionGroup object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductAbstractProductOptionGroupTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyProductAbstractProductOptionGroup object
        }


        // Set the correct dbName
        $query = SpyProductAbstractProductOptionGroupQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SpyProductAbstractProductOptionGroupTableMap
