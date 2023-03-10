<?php

namespace Orm\Zed\Product\Persistence\Map;

use Orm\Zed\Product\Persistence\SpyProductLocalizedAttributes;
use Orm\Zed\Product\Persistence\SpyProductLocalizedAttributesQuery;
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
 * This class defines the structure of the 'spy_product_localized_attributes' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyProductLocalizedAttributesTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.Orm.Zed.Product.Persistence.Map.SpyProductLocalizedAttributesTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'spy_product_localized_attributes';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Orm\\Zed\\Product\\Persistence\\SpyProductLocalizedAttributes';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'src.Orm.Zed.Product.Persistence.SpyProductLocalizedAttributes';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 9;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 9;

    /**
     * the column name for the id_product_attributes field
     */
    const COL_ID_PRODUCT_ATTRIBUTES = 'spy_product_localized_attributes.id_product_attributes';

    /**
     * the column name for the fk_locale field
     */
    const COL_FK_LOCALE = 'spy_product_localized_attributes.fk_locale';

    /**
     * the column name for the fk_product field
     */
    const COL_FK_PRODUCT = 'spy_product_localized_attributes.fk_product';

    /**
     * the column name for the attributes field
     */
    const COL_ATTRIBUTES = 'spy_product_localized_attributes.attributes';

    /**
     * the column name for the description field
     */
    const COL_DESCRIPTION = 'spy_product_localized_attributes.description';

    /**
     * the column name for the is_complete field
     */
    const COL_IS_COMPLETE = 'spy_product_localized_attributes.is_complete';

    /**
     * the column name for the name field
     */
    const COL_NAME = 'spy_product_localized_attributes.name';

    /**
     * the column name for the created_at field
     */
    const COL_CREATED_AT = 'spy_product_localized_attributes.created_at';

    /**
     * the column name for the updated_at field
     */
    const COL_UPDATED_AT = 'spy_product_localized_attributes.updated_at';

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
        self::TYPE_PHPNAME       => array('IdProductAttributes', 'FkLocale', 'FkProduct', 'Attributes', 'Description', 'IsComplete', 'Name', 'CreatedAt', 'UpdatedAt', ),
        self::TYPE_CAMELNAME     => array('idProductAttributes', 'fkLocale', 'fkProduct', 'attributes', 'description', 'isComplete', 'name', 'createdAt', 'updatedAt', ),
        self::TYPE_COLNAME       => array(SpyProductLocalizedAttributesTableMap::COL_ID_PRODUCT_ATTRIBUTES, SpyProductLocalizedAttributesTableMap::COL_FK_LOCALE, SpyProductLocalizedAttributesTableMap::COL_FK_PRODUCT, SpyProductLocalizedAttributesTableMap::COL_ATTRIBUTES, SpyProductLocalizedAttributesTableMap::COL_DESCRIPTION, SpyProductLocalizedAttributesTableMap::COL_IS_COMPLETE, SpyProductLocalizedAttributesTableMap::COL_NAME, SpyProductLocalizedAttributesTableMap::COL_CREATED_AT, SpyProductLocalizedAttributesTableMap::COL_UPDATED_AT, ),
        self::TYPE_FIELDNAME     => array('id_product_attributes', 'fk_locale', 'fk_product', 'attributes', 'description', 'is_complete', 'name', 'created_at', 'updated_at', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('IdProductAttributes' => 0, 'FkLocale' => 1, 'FkProduct' => 2, 'Attributes' => 3, 'Description' => 4, 'IsComplete' => 5, 'Name' => 6, 'CreatedAt' => 7, 'UpdatedAt' => 8, ),
        self::TYPE_CAMELNAME     => array('idProductAttributes' => 0, 'fkLocale' => 1, 'fkProduct' => 2, 'attributes' => 3, 'description' => 4, 'isComplete' => 5, 'name' => 6, 'createdAt' => 7, 'updatedAt' => 8, ),
        self::TYPE_COLNAME       => array(SpyProductLocalizedAttributesTableMap::COL_ID_PRODUCT_ATTRIBUTES => 0, SpyProductLocalizedAttributesTableMap::COL_FK_LOCALE => 1, SpyProductLocalizedAttributesTableMap::COL_FK_PRODUCT => 2, SpyProductLocalizedAttributesTableMap::COL_ATTRIBUTES => 3, SpyProductLocalizedAttributesTableMap::COL_DESCRIPTION => 4, SpyProductLocalizedAttributesTableMap::COL_IS_COMPLETE => 5, SpyProductLocalizedAttributesTableMap::COL_NAME => 6, SpyProductLocalizedAttributesTableMap::COL_CREATED_AT => 7, SpyProductLocalizedAttributesTableMap::COL_UPDATED_AT => 8, ),
        self::TYPE_FIELDNAME     => array('id_product_attributes' => 0, 'fk_locale' => 1, 'fk_product' => 2, 'attributes' => 3, 'description' => 4, 'is_complete' => 5, 'name' => 6, 'created_at' => 7, 'updated_at' => 8, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [
        'IdProductAttributes' => 'ID_PRODUCT_ATTRIBUTES',
        'SpyProductLocalizedAttributes.IdProductAttributes' => 'ID_PRODUCT_ATTRIBUTES',
        'idProductAttributes' => 'ID_PRODUCT_ATTRIBUTES',
        'spyProductLocalizedAttributes.idProductAttributes' => 'ID_PRODUCT_ATTRIBUTES',
        'SpyProductLocalizedAttributesTableMap::COL_ID_PRODUCT_ATTRIBUTES' => 'ID_PRODUCT_ATTRIBUTES',
        'COL_ID_PRODUCT_ATTRIBUTES' => 'ID_PRODUCT_ATTRIBUTES',
        'id_product_attributes' => 'ID_PRODUCT_ATTRIBUTES',
        'spy_product_localized_attributes.id_product_attributes' => 'ID_PRODUCT_ATTRIBUTES',
        'FkLocale' => 'FK_LOCALE',
        'SpyProductLocalizedAttributes.FkLocale' => 'FK_LOCALE',
        'fkLocale' => 'FK_LOCALE',
        'spyProductLocalizedAttributes.fkLocale' => 'FK_LOCALE',
        'SpyProductLocalizedAttributesTableMap::COL_FK_LOCALE' => 'FK_LOCALE',
        'COL_FK_LOCALE' => 'FK_LOCALE',
        'fk_locale' => 'FK_LOCALE',
        'spy_product_localized_attributes.fk_locale' => 'FK_LOCALE',
        'FkProduct' => 'FK_PRODUCT',
        'SpyProductLocalizedAttributes.FkProduct' => 'FK_PRODUCT',
        'fkProduct' => 'FK_PRODUCT',
        'spyProductLocalizedAttributes.fkProduct' => 'FK_PRODUCT',
        'SpyProductLocalizedAttributesTableMap::COL_FK_PRODUCT' => 'FK_PRODUCT',
        'COL_FK_PRODUCT' => 'FK_PRODUCT',
        'fk_product' => 'FK_PRODUCT',
        'spy_product_localized_attributes.fk_product' => 'FK_PRODUCT',
        'Attributes' => 'ATTRIBUTES',
        'SpyProductLocalizedAttributes.Attributes' => 'ATTRIBUTES',
        'attributes' => 'ATTRIBUTES',
        'spyProductLocalizedAttributes.attributes' => 'ATTRIBUTES',
        'SpyProductLocalizedAttributesTableMap::COL_ATTRIBUTES' => 'ATTRIBUTES',
        'COL_ATTRIBUTES' => 'ATTRIBUTES',
        'spy_product_localized_attributes.attributes' => 'ATTRIBUTES',
        'Description' => 'DESCRIPTION',
        'SpyProductLocalizedAttributes.Description' => 'DESCRIPTION',
        'description' => 'DESCRIPTION',
        'spyProductLocalizedAttributes.description' => 'DESCRIPTION',
        'SpyProductLocalizedAttributesTableMap::COL_DESCRIPTION' => 'DESCRIPTION',
        'COL_DESCRIPTION' => 'DESCRIPTION',
        'spy_product_localized_attributes.description' => 'DESCRIPTION',
        'IsComplete' => 'IS_COMPLETE',
        'SpyProductLocalizedAttributes.IsComplete' => 'IS_COMPLETE',
        'isComplete' => 'IS_COMPLETE',
        'spyProductLocalizedAttributes.isComplete' => 'IS_COMPLETE',
        'SpyProductLocalizedAttributesTableMap::COL_IS_COMPLETE' => 'IS_COMPLETE',
        'COL_IS_COMPLETE' => 'IS_COMPLETE',
        'is_complete' => 'IS_COMPLETE',
        'spy_product_localized_attributes.is_complete' => 'IS_COMPLETE',
        'Name' => 'NAME',
        'SpyProductLocalizedAttributes.Name' => 'NAME',
        'name' => 'NAME',
        'spyProductLocalizedAttributes.name' => 'NAME',
        'SpyProductLocalizedAttributesTableMap::COL_NAME' => 'NAME',
        'COL_NAME' => 'NAME',
        'spy_product_localized_attributes.name' => 'NAME',
        'CreatedAt' => 'CREATED_AT',
        'SpyProductLocalizedAttributes.CreatedAt' => 'CREATED_AT',
        'createdAt' => 'CREATED_AT',
        'spyProductLocalizedAttributes.createdAt' => 'CREATED_AT',
        'SpyProductLocalizedAttributesTableMap::COL_CREATED_AT' => 'CREATED_AT',
        'COL_CREATED_AT' => 'CREATED_AT',
        'created_at' => 'CREATED_AT',
        'spy_product_localized_attributes.created_at' => 'CREATED_AT',
        'UpdatedAt' => 'UPDATED_AT',
        'SpyProductLocalizedAttributes.UpdatedAt' => 'UPDATED_AT',
        'updatedAt' => 'UPDATED_AT',
        'spyProductLocalizedAttributes.updatedAt' => 'UPDATED_AT',
        'SpyProductLocalizedAttributesTableMap::COL_UPDATED_AT' => 'UPDATED_AT',
        'COL_UPDATED_AT' => 'UPDATED_AT',
        'updated_at' => 'UPDATED_AT',
        'spy_product_localized_attributes.updated_at' => 'UPDATED_AT',
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
        $this->setName('spy_product_localized_attributes');
        $this->setPhpName('SpyProductLocalizedAttributes');
        $this->setIdentifierQuoting(true);
        $this->setClassName('\\Orm\\Zed\\Product\\Persistence\\SpyProductLocalizedAttributes');
        $this->setPackage('src.Orm.Zed.Product.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_product_localized_attributes_pk_seq');
        // columns
        $this->addPrimaryKey('id_product_attributes', 'IdProductAttributes', 'INTEGER', true, null, null);
        $this->addForeignKey('fk_locale', 'FkLocale', 'INTEGER', 'spy_locale', 'id_locale', true, null, null);
        $this->addForeignKey('fk_product', 'FkProduct', 'INTEGER', 'spy_product', 'id_product', true, null, null);
        $this->addColumn('attributes', 'Attributes', 'LONGVARCHAR', true, null, null);
        $this->addColumn('description', 'Description', 'LONGVARCHAR', false, null, null);
        $this->addColumn('is_complete', 'IsComplete', 'BOOLEAN', false, 1, true);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 255, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', false, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('SpyProduct', '\\Orm\\Zed\\Product\\Persistence\\SpyProduct', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_product',
    1 => ':id_product',
  ),
), 'CASCADE', 'CASCADE', null, false);
        $this->addRelation('Locale', '\\Orm\\Zed\\Locale\\Persistence\\SpyLocale', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_locale',
    1 => ':id_locale',
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
            'timestampable' => ['create_column' => 'created_at', 'update_column' => 'updated_at', 'disable_created_at' => 'false', 'disable_updated_at' => 'false'],
            'event' => ['spy_product_localized_attributes_all' => ['column' => '*']],
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductAttributes', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductAttributes', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductAttributes', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductAttributes', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductAttributes', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductAttributes', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdProductAttributes', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyProductLocalizedAttributesTableMap::CLASS_DEFAULT : SpyProductLocalizedAttributesTableMap::OM_CLASS;
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
     * @return array           (SpyProductLocalizedAttributes object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SpyProductLocalizedAttributesTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyProductLocalizedAttributesTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyProductLocalizedAttributesTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyProductLocalizedAttributesTableMap::OM_CLASS;
            /** @var SpyProductLocalizedAttributes $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyProductLocalizedAttributesTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyProductLocalizedAttributesTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyProductLocalizedAttributesTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyProductLocalizedAttributes $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyProductLocalizedAttributesTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyProductLocalizedAttributesTableMap::COL_ID_PRODUCT_ATTRIBUTES);
            $criteria->addSelectColumn(SpyProductLocalizedAttributesTableMap::COL_FK_LOCALE);
            $criteria->addSelectColumn(SpyProductLocalizedAttributesTableMap::COL_FK_PRODUCT);
            $criteria->addSelectColumn(SpyProductLocalizedAttributesTableMap::COL_ATTRIBUTES);
            $criteria->addSelectColumn(SpyProductLocalizedAttributesTableMap::COL_DESCRIPTION);
            $criteria->addSelectColumn(SpyProductLocalizedAttributesTableMap::COL_IS_COMPLETE);
            $criteria->addSelectColumn(SpyProductLocalizedAttributesTableMap::COL_NAME);
            $criteria->addSelectColumn(SpyProductLocalizedAttributesTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(SpyProductLocalizedAttributesTableMap::COL_UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id_product_attributes');
            $criteria->addSelectColumn($alias . '.fk_locale');
            $criteria->addSelectColumn($alias . '.fk_product');
            $criteria->addSelectColumn($alias . '.attributes');
            $criteria->addSelectColumn($alias . '.description');
            $criteria->addSelectColumn($alias . '.is_complete');
            $criteria->addSelectColumn($alias . '.name');
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
            $criteria->removeSelectColumn(SpyProductLocalizedAttributesTableMap::COL_ID_PRODUCT_ATTRIBUTES);
            $criteria->removeSelectColumn(SpyProductLocalizedAttributesTableMap::COL_FK_LOCALE);
            $criteria->removeSelectColumn(SpyProductLocalizedAttributesTableMap::COL_FK_PRODUCT);
            $criteria->removeSelectColumn(SpyProductLocalizedAttributesTableMap::COL_ATTRIBUTES);
            $criteria->removeSelectColumn(SpyProductLocalizedAttributesTableMap::COL_DESCRIPTION);
            $criteria->removeSelectColumn(SpyProductLocalizedAttributesTableMap::COL_IS_COMPLETE);
            $criteria->removeSelectColumn(SpyProductLocalizedAttributesTableMap::COL_NAME);
            $criteria->removeSelectColumn(SpyProductLocalizedAttributesTableMap::COL_CREATED_AT);
            $criteria->removeSelectColumn(SpyProductLocalizedAttributesTableMap::COL_UPDATED_AT);
        } else {
            $criteria->removeSelectColumn($alias . '.id_product_attributes');
            $criteria->removeSelectColumn($alias . '.fk_locale');
            $criteria->removeSelectColumn($alias . '.fk_product');
            $criteria->removeSelectColumn($alias . '.attributes');
            $criteria->removeSelectColumn($alias . '.description');
            $criteria->removeSelectColumn($alias . '.is_complete');
            $criteria->removeSelectColumn($alias . '.name');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyProductLocalizedAttributesTableMap::DATABASE_NAME)->getTable(SpyProductLocalizedAttributesTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyProductLocalizedAttributes or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SpyProductLocalizedAttributes object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductLocalizedAttributesTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\Product\Persistence\SpyProductLocalizedAttributes) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyProductLocalizedAttributesTableMap::DATABASE_NAME);
            $criteria->add(SpyProductLocalizedAttributesTableMap::COL_ID_PRODUCT_ATTRIBUTES, (array) $values, Criteria::IN);
        }

        $query = SpyProductLocalizedAttributesQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyProductLocalizedAttributesTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyProductLocalizedAttributesTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_product_localized_attributes table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SpyProductLocalizedAttributesQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyProductLocalizedAttributes or Criteria object.
     *
     * @param mixed               $criteria Criteria or SpyProductLocalizedAttributes object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductLocalizedAttributesTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyProductLocalizedAttributes object
        }


        // Set the correct dbName
        $query = SpyProductLocalizedAttributesQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SpyProductLocalizedAttributesTableMap
