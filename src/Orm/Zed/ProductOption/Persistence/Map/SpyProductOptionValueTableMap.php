<?php

namespace Orm\Zed\ProductOption\Persistence\Map;

use Orm\Zed\ProductOption\Persistence\SpyProductOptionValue;
use Orm\Zed\ProductOption\Persistence\SpyProductOptionValueQuery;
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
 * This class defines the structure of the 'spy_product_option_value' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyProductOptionValueTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.Orm.Zed.ProductOption.Persistence.Map.SpyProductOptionValueTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'spy_product_option_value';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Orm\\Zed\\ProductOption\\Persistence\\SpyProductOptionValue';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'src.Orm.Zed.ProductOption.Persistence.SpyProductOptionValue';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 7;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 7;

    /**
     * the column name for the id_product_option_value field
     */
    const COL_ID_PRODUCT_OPTION_VALUE = 'spy_product_option_value.id_product_option_value';

    /**
     * the column name for the fk_product_option_group field
     */
    const COL_FK_PRODUCT_OPTION_GROUP = 'spy_product_option_value.fk_product_option_group';

    /**
     * the column name for the price field
     */
    const COL_PRICE = 'spy_product_option_value.price';

    /**
     * the column name for the sku field
     */
    const COL_SKU = 'spy_product_option_value.sku';

    /**
     * the column name for the value field
     */
    const COL_VALUE = 'spy_product_option_value.value';

    /**
     * the column name for the created_at field
     */
    const COL_CREATED_AT = 'spy_product_option_value.created_at';

    /**
     * the column name for the updated_at field
     */
    const COL_UPDATED_AT = 'spy_product_option_value.updated_at';

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
        self::TYPE_PHPNAME       => array('IdProductOptionValue', 'FkProductOptionGroup', 'Price', 'Sku', 'Value', 'CreatedAt', 'UpdatedAt', ),
        self::TYPE_CAMELNAME     => array('idProductOptionValue', 'fkProductOptionGroup', 'price', 'sku', 'value', 'createdAt', 'updatedAt', ),
        self::TYPE_COLNAME       => array(SpyProductOptionValueTableMap::COL_ID_PRODUCT_OPTION_VALUE, SpyProductOptionValueTableMap::COL_FK_PRODUCT_OPTION_GROUP, SpyProductOptionValueTableMap::COL_PRICE, SpyProductOptionValueTableMap::COL_SKU, SpyProductOptionValueTableMap::COL_VALUE, SpyProductOptionValueTableMap::COL_CREATED_AT, SpyProductOptionValueTableMap::COL_UPDATED_AT, ),
        self::TYPE_FIELDNAME     => array('id_product_option_value', 'fk_product_option_group', 'price', 'sku', 'value', 'created_at', 'updated_at', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('IdProductOptionValue' => 0, 'FkProductOptionGroup' => 1, 'Price' => 2, 'Sku' => 3, 'Value' => 4, 'CreatedAt' => 5, 'UpdatedAt' => 6, ),
        self::TYPE_CAMELNAME     => array('idProductOptionValue' => 0, 'fkProductOptionGroup' => 1, 'price' => 2, 'sku' => 3, 'value' => 4, 'createdAt' => 5, 'updatedAt' => 6, ),
        self::TYPE_COLNAME       => array(SpyProductOptionValueTableMap::COL_ID_PRODUCT_OPTION_VALUE => 0, SpyProductOptionValueTableMap::COL_FK_PRODUCT_OPTION_GROUP => 1, SpyProductOptionValueTableMap::COL_PRICE => 2, SpyProductOptionValueTableMap::COL_SKU => 3, SpyProductOptionValueTableMap::COL_VALUE => 4, SpyProductOptionValueTableMap::COL_CREATED_AT => 5, SpyProductOptionValueTableMap::COL_UPDATED_AT => 6, ),
        self::TYPE_FIELDNAME     => array('id_product_option_value' => 0, 'fk_product_option_group' => 1, 'price' => 2, 'sku' => 3, 'value' => 4, 'created_at' => 5, 'updated_at' => 6, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [
        'IdProductOptionValue' => 'ID_PRODUCT_OPTION_VALUE',
        'SpyProductOptionValue.IdProductOptionValue' => 'ID_PRODUCT_OPTION_VALUE',
        'idProductOptionValue' => 'ID_PRODUCT_OPTION_VALUE',
        'spyProductOptionValue.idProductOptionValue' => 'ID_PRODUCT_OPTION_VALUE',
        'SpyProductOptionValueTableMap::COL_ID_PRODUCT_OPTION_VALUE' => 'ID_PRODUCT_OPTION_VALUE',
        'COL_ID_PRODUCT_OPTION_VALUE' => 'ID_PRODUCT_OPTION_VALUE',
        'id_product_option_value' => 'ID_PRODUCT_OPTION_VALUE',
        'spy_product_option_value.id_product_option_value' => 'ID_PRODUCT_OPTION_VALUE',
        'FkProductOptionGroup' => 'FK_PRODUCT_OPTION_GROUP',
        'SpyProductOptionValue.FkProductOptionGroup' => 'FK_PRODUCT_OPTION_GROUP',
        'fkProductOptionGroup' => 'FK_PRODUCT_OPTION_GROUP',
        'spyProductOptionValue.fkProductOptionGroup' => 'FK_PRODUCT_OPTION_GROUP',
        'SpyProductOptionValueTableMap::COL_FK_PRODUCT_OPTION_GROUP' => 'FK_PRODUCT_OPTION_GROUP',
        'COL_FK_PRODUCT_OPTION_GROUP' => 'FK_PRODUCT_OPTION_GROUP',
        'fk_product_option_group' => 'FK_PRODUCT_OPTION_GROUP',
        'spy_product_option_value.fk_product_option_group' => 'FK_PRODUCT_OPTION_GROUP',
        'Price' => 'PRICE',
        'SpyProductOptionValue.Price' => 'PRICE',
        'price' => 'PRICE',
        'spyProductOptionValue.price' => 'PRICE',
        'SpyProductOptionValueTableMap::COL_PRICE' => 'PRICE',
        'COL_PRICE' => 'PRICE',
        'spy_product_option_value.price' => 'PRICE',
        'Sku' => 'SKU',
        'SpyProductOptionValue.Sku' => 'SKU',
        'sku' => 'SKU',
        'spyProductOptionValue.sku' => 'SKU',
        'SpyProductOptionValueTableMap::COL_SKU' => 'SKU',
        'COL_SKU' => 'SKU',
        'spy_product_option_value.sku' => 'SKU',
        'Value' => 'VALUE',
        'SpyProductOptionValue.Value' => 'VALUE',
        'value' => 'VALUE',
        'spyProductOptionValue.value' => 'VALUE',
        'SpyProductOptionValueTableMap::COL_VALUE' => 'VALUE',
        'COL_VALUE' => 'VALUE',
        'spy_product_option_value.value' => 'VALUE',
        'CreatedAt' => 'CREATED_AT',
        'SpyProductOptionValue.CreatedAt' => 'CREATED_AT',
        'createdAt' => 'CREATED_AT',
        'spyProductOptionValue.createdAt' => 'CREATED_AT',
        'SpyProductOptionValueTableMap::COL_CREATED_AT' => 'CREATED_AT',
        'COL_CREATED_AT' => 'CREATED_AT',
        'created_at' => 'CREATED_AT',
        'spy_product_option_value.created_at' => 'CREATED_AT',
        'UpdatedAt' => 'UPDATED_AT',
        'SpyProductOptionValue.UpdatedAt' => 'UPDATED_AT',
        'updatedAt' => 'UPDATED_AT',
        'spyProductOptionValue.updatedAt' => 'UPDATED_AT',
        'SpyProductOptionValueTableMap::COL_UPDATED_AT' => 'UPDATED_AT',
        'COL_UPDATED_AT' => 'UPDATED_AT',
        'updated_at' => 'UPDATED_AT',
        'spy_product_option_value.updated_at' => 'UPDATED_AT',
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
        $this->setName('spy_product_option_value');
        $this->setPhpName('SpyProductOptionValue');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Orm\\Zed\\ProductOption\\Persistence\\SpyProductOptionValue');
        $this->setPackage('src.Orm.Zed.ProductOption.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_product_option_value_pk_seq');
        // columns
        $this->addPrimaryKey('id_product_option_value', 'IdProductOptionValue', 'INTEGER', true, null, null);
        $this->addForeignKey('fk_product_option_group', 'FkProductOptionGroup', 'INTEGER', 'spy_product_option_group', 'id_product_option_group', true, null, null);
        $this->addColumn('price', 'Price', 'INTEGER', false, null, null);
        $this->addColumn('sku', 'Sku', 'VARCHAR', true, 255, null);
        $this->addColumn('value', 'Value', 'VARCHAR', true, 255, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', false, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('SpyProductOptionGroup', '\\Orm\\Zed\\ProductOption\\Persistence\\SpyProductOptionGroup', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_product_option_group',
    1 => ':id_product_option_group',
  ),
), null, null, null, false);
        $this->addRelation('ProductOptionValuePrice', '\\Orm\\Zed\\ProductOption\\Persistence\\SpyProductOptionValuePrice', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_product_option_value',
    1 => ':id_product_option_value',
  ),
), 'CASCADE', null, 'ProductOptionValuePrices', false);
        $this->addRelation('SpyShoppingListProductOption', '\\Orm\\Zed\\ShoppingListProductOptionConnector\\Persistence\\SpyShoppingListProductOption', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_product_option_value',
    1 => ':id_product_option_value',
  ),
), null, null, 'SpyShoppingListProductOptions', false);
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
            'event' => ['spy_product_option_value_all' => ['column' => '*']],
        );
    } // getBehaviors()

    /**
     * Method to invalidate the instance pool of all tables related to spy_product_option_value     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in related instance pools,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        SpyProductOptionValuePriceTableMap::clearInstancePool();
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductOptionValue', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductOptionValue', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductOptionValue', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductOptionValue', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductOptionValue', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductOptionValue', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdProductOptionValue', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyProductOptionValueTableMap::CLASS_DEFAULT : SpyProductOptionValueTableMap::OM_CLASS;
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
     * @return array           (SpyProductOptionValue object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SpyProductOptionValueTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyProductOptionValueTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyProductOptionValueTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyProductOptionValueTableMap::OM_CLASS;
            /** @var SpyProductOptionValue $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyProductOptionValueTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyProductOptionValueTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyProductOptionValueTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyProductOptionValue $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyProductOptionValueTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyProductOptionValueTableMap::COL_ID_PRODUCT_OPTION_VALUE);
            $criteria->addSelectColumn(SpyProductOptionValueTableMap::COL_FK_PRODUCT_OPTION_GROUP);
            $criteria->addSelectColumn(SpyProductOptionValueTableMap::COL_PRICE);
            $criteria->addSelectColumn(SpyProductOptionValueTableMap::COL_SKU);
            $criteria->addSelectColumn(SpyProductOptionValueTableMap::COL_VALUE);
            $criteria->addSelectColumn(SpyProductOptionValueTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(SpyProductOptionValueTableMap::COL_UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id_product_option_value');
            $criteria->addSelectColumn($alias . '.fk_product_option_group');
            $criteria->addSelectColumn($alias . '.price');
            $criteria->addSelectColumn($alias . '.sku');
            $criteria->addSelectColumn($alias . '.value');
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
            $criteria->removeSelectColumn(SpyProductOptionValueTableMap::COL_ID_PRODUCT_OPTION_VALUE);
            $criteria->removeSelectColumn(SpyProductOptionValueTableMap::COL_FK_PRODUCT_OPTION_GROUP);
            $criteria->removeSelectColumn(SpyProductOptionValueTableMap::COL_PRICE);
            $criteria->removeSelectColumn(SpyProductOptionValueTableMap::COL_SKU);
            $criteria->removeSelectColumn(SpyProductOptionValueTableMap::COL_VALUE);
            $criteria->removeSelectColumn(SpyProductOptionValueTableMap::COL_CREATED_AT);
            $criteria->removeSelectColumn(SpyProductOptionValueTableMap::COL_UPDATED_AT);
        } else {
            $criteria->removeSelectColumn($alias . '.id_product_option_value');
            $criteria->removeSelectColumn($alias . '.fk_product_option_group');
            $criteria->removeSelectColumn($alias . '.price');
            $criteria->removeSelectColumn($alias . '.sku');
            $criteria->removeSelectColumn($alias . '.value');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyProductOptionValueTableMap::DATABASE_NAME)->getTable(SpyProductOptionValueTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyProductOptionValue or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SpyProductOptionValue object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductOptionValueTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\ProductOption\Persistence\SpyProductOptionValue) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyProductOptionValueTableMap::DATABASE_NAME);
            $criteria->add(SpyProductOptionValueTableMap::COL_ID_PRODUCT_OPTION_VALUE, (array) $values, Criteria::IN);
        }

        $query = SpyProductOptionValueQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyProductOptionValueTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyProductOptionValueTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_product_option_value table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SpyProductOptionValueQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyProductOptionValue or Criteria object.
     *
     * @param mixed               $criteria Criteria or SpyProductOptionValue object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductOptionValueTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyProductOptionValue object
        }


        // Set the correct dbName
        $query = SpyProductOptionValueQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SpyProductOptionValueTableMap
