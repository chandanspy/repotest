<?php

namespace Orm\Zed\Locale\Persistence\Map;

use Orm\Zed\Glossary\Persistence\Map\SpyGlossaryTranslationTableMap;
use Orm\Zed\Locale\Persistence\SpyLocale;
use Orm\Zed\Locale\Persistence\SpyLocaleQuery;
use Orm\Zed\Url\Persistence\Map\SpyUrlTableMap;
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
 * This class defines the structure of the 'spy_locale' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyLocaleTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.Orm.Zed.Locale.Persistence.Map.SpyLocaleTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'spy_locale';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Orm\\Zed\\Locale\\Persistence\\SpyLocale';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'src.Orm.Zed.Locale.Persistence.SpyLocale';

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
     * the column name for the id_locale field
     */
    const COL_ID_LOCALE = 'spy_locale.id_locale';

    /**
     * the column name for the locale_name field
     */
    const COL_LOCALE_NAME = 'spy_locale.locale_name';

    /**
     * the column name for the is_active field
     */
    const COL_IS_ACTIVE = 'spy_locale.is_active';

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
        self::TYPE_PHPNAME       => array('IdLocale', 'LocaleName', 'IsActive', ),
        self::TYPE_CAMELNAME     => array('idLocale', 'localeName', 'isActive', ),
        self::TYPE_COLNAME       => array(SpyLocaleTableMap::COL_ID_LOCALE, SpyLocaleTableMap::COL_LOCALE_NAME, SpyLocaleTableMap::COL_IS_ACTIVE, ),
        self::TYPE_FIELDNAME     => array('id_locale', 'locale_name', 'is_active', ),
        self::TYPE_NUM           => array(0, 1, 2, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('IdLocale' => 0, 'LocaleName' => 1, 'IsActive' => 2, ),
        self::TYPE_CAMELNAME     => array('idLocale' => 0, 'localeName' => 1, 'isActive' => 2, ),
        self::TYPE_COLNAME       => array(SpyLocaleTableMap::COL_ID_LOCALE => 0, SpyLocaleTableMap::COL_LOCALE_NAME => 1, SpyLocaleTableMap::COL_IS_ACTIVE => 2, ),
        self::TYPE_FIELDNAME     => array('id_locale' => 0, 'locale_name' => 1, 'is_active' => 2, ),
        self::TYPE_NUM           => array(0, 1, 2, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [
        'IdLocale' => 'ID_LOCALE',
        'SpyLocale.IdLocale' => 'ID_LOCALE',
        'idLocale' => 'ID_LOCALE',
        'spyLocale.idLocale' => 'ID_LOCALE',
        'SpyLocaleTableMap::COL_ID_LOCALE' => 'ID_LOCALE',
        'COL_ID_LOCALE' => 'ID_LOCALE',
        'id_locale' => 'ID_LOCALE',
        'spy_locale.id_locale' => 'ID_LOCALE',
        'LocaleName' => 'LOCALE_NAME',
        'SpyLocale.LocaleName' => 'LOCALE_NAME',
        'localeName' => 'LOCALE_NAME',
        'spyLocale.localeName' => 'LOCALE_NAME',
        'SpyLocaleTableMap::COL_LOCALE_NAME' => 'LOCALE_NAME',
        'COL_LOCALE_NAME' => 'LOCALE_NAME',
        'locale_name' => 'LOCALE_NAME',
        'spy_locale.locale_name' => 'LOCALE_NAME',
        'IsActive' => 'IS_ACTIVE',
        'SpyLocale.IsActive' => 'IS_ACTIVE',
        'isActive' => 'IS_ACTIVE',
        'spyLocale.isActive' => 'IS_ACTIVE',
        'SpyLocaleTableMap::COL_IS_ACTIVE' => 'IS_ACTIVE',
        'COL_IS_ACTIVE' => 'IS_ACTIVE',
        'is_active' => 'IS_ACTIVE',
        'spy_locale.is_active' => 'IS_ACTIVE',
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
        $this->setName('spy_locale');
        $this->setPhpName('SpyLocale');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Orm\\Zed\\Locale\\Persistence\\SpyLocale');
        $this->setPackage('src.Orm.Zed.Locale.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_locale_pk_seq');
        // columns
        $this->addPrimaryKey('id_locale', 'IdLocale', 'INTEGER', true, null, null);
        $this->addColumn('locale_name', 'LocaleName', 'VARCHAR', true, 5, null);
        $this->addColumn('is_active', 'IsActive', 'BOOLEAN', true, 1, true);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('SpyAvailabilityNotificationSubscription', '\\Orm\\Zed\\AvailabilityNotification\\Persistence\\SpyAvailabilityNotificationSubscription', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_locale',
    1 => ':id_locale',
  ),
), null, null, 'SpyAvailabilityNotificationSubscriptions', false);
        $this->addRelation('SpyCategoryAttribute', '\\Orm\\Zed\\Category\\Persistence\\SpyCategoryAttribute', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_locale',
    1 => ':id_locale',
  ),
), null, null, 'SpyCategoryAttributes', false);
        $this->addRelation('SpyCategoryImageSet', '\\Orm\\Zed\\CategoryImage\\Persistence\\SpyCategoryImageSet', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_locale',
    1 => ':id_locale',
  ),
), null, null, 'SpyCategoryImageSets', false);
        $this->addRelation('SpyCmsPageLocalizedAttributes', '\\Orm\\Zed\\Cms\\Persistence\\SpyCmsPageLocalizedAttributes', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_locale',
    1 => ':id_locale',
  ),
), null, null, 'SpyCmsPageLocalizedAttributess', false);
        $this->addRelation('SpyContentLocalized', '\\Orm\\Zed\\Content\\Persistence\\SpyContentLocalized', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_locale',
    1 => ':id_locale',
  ),
), null, null, 'SpyContentLocalizeds', false);
        $this->addRelation('SpyCustomer', '\\Orm\\Zed\\Customer\\Persistence\\SpyCustomer', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_locale',
    1 => ':id_locale',
  ),
), null, null, 'SpyCustomers', false);
        $this->addRelation('SpyFileLocalizedAttributes', '\\Orm\\Zed\\FileManager\\Persistence\\SpyFileLocalizedAttributes', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_locale',
    1 => ':id_locale',
  ),
), null, null, 'SpyFileLocalizedAttributess', false);
        $this->addRelation('SpyFileDirectoryLocalizedAttributes', '\\Orm\\Zed\\FileManager\\Persistence\\SpyFileDirectoryLocalizedAttributes', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_locale',
    1 => ':id_locale',
  ),
), null, null, 'SpyFileDirectoryLocalizedAttributess', false);
        $this->addRelation('SpyGlossaryTranslation', '\\Orm\\Zed\\Glossary\\Persistence\\SpyGlossaryTranslation', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_locale',
    1 => ':id_locale',
  ),
), 'CASCADE', null, 'SpyGlossaryTranslations', false);
        $this->addRelation('SpyNavigationNodeLocalizedAttributes', '\\Orm\\Zed\\Navigation\\Persistence\\SpyNavigationNodeLocalizedAttributes', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_locale',
    1 => ':id_locale',
  ),
), null, null, 'SpyNavigationNodeLocalizedAttributess', false);
        $this->addRelation('SpyProductAbstractLocalizedAttributes', '\\Orm\\Zed\\Product\\Persistence\\SpyProductAbstractLocalizedAttributes', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_locale',
    1 => ':id_locale',
  ),
), null, null, 'SpyProductAbstractLocalizedAttributess', false);
        $this->addRelation('SpyProductLocalizedAttributes', '\\Orm\\Zed\\Product\\Persistence\\SpyProductLocalizedAttributes', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_locale',
    1 => ':id_locale',
  ),
), null, null, 'SpyProductLocalizedAttributess', false);
        $this->addRelation('SpyProductManagementAttributeValueTranslation', '\\Orm\\Zed\\ProductAttribute\\Persistence\\SpyProductManagementAttributeValueTranslation', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_locale',
    1 => ':id_locale',
  ),
), null, null, 'SpyProductManagementAttributeValueTranslations', false);
        $this->addRelation('SpyProductDiscontinuedNote', '\\Orm\\Zed\\ProductDiscontinued\\Persistence\\SpyProductDiscontinuedNote', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_locale',
    1 => ':id_locale',
  ),
), null, null, 'SpyProductDiscontinuedNotes', false);
        $this->addRelation('SpyProductImageSet', '\\Orm\\Zed\\ProductImage\\Persistence\\SpyProductImageSet', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_locale',
    1 => ':id_locale',
  ),
), null, null, 'SpyProductImageSets', false);
        $this->addRelation('SpyProductLabelLocalizedAttributes', '\\Orm\\Zed\\ProductLabel\\Persistence\\SpyProductLabelLocalizedAttributes', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_locale',
    1 => ':id_locale',
  ),
), null, null, 'SpyProductLabelLocalizedAttributess', false);
        $this->addRelation('SpyProductReview', '\\Orm\\Zed\\ProductReview\\Persistence\\SpyProductReview', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_locale',
    1 => ':id_locale',
  ),
), null, null, 'SpyProductReviews', false);
        $this->addRelation('SpyProductSearch', '\\Orm\\Zed\\ProductSearch\\Persistence\\SpyProductSearch', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_locale',
    1 => ':id_locale',
  ),
), null, null, 'SpyProductSearches', false);
        $this->addRelation('SpyProductSetData', '\\Orm\\Zed\\ProductSet\\Persistence\\SpyProductSetData', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_locale',
    1 => ':id_locale',
  ),
), null, null, 'SpyProductSetDatas', false);
        $this->addRelation('SpySalesOrder', '\\Orm\\Zed\\Sales\\Persistence\\SpySalesOrder', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_locale',
    1 => ':id_locale',
  ),
), null, null, 'SpySalesOrders', false);
        $this->addRelation('TouchStorage', '\\Orm\\Zed\\Touch\\Persistence\\SpyTouchStorage', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_locale',
    1 => ':id_locale',
  ),
), null, null, 'TouchStorages', false);
        $this->addRelation('TouchSearch', '\\Orm\\Zed\\Touch\\Persistence\\SpyTouchSearch', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_locale',
    1 => ':id_locale',
  ),
), null, null, 'TouchSearches', false);
        $this->addRelation('SpyUrl', '\\Orm\\Zed\\Url\\Persistence\\SpyUrl', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_locale',
    1 => ':id_locale',
  ),
), 'CASCADE', null, 'SpyUrls', false);
        $this->addRelation('SpyUser', '\\Orm\\Zed\\User\\Persistence\\SpyUser', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_locale',
    1 => ':id_locale',
  ),
), null, null, 'SpyUsers', false);
    } // buildRelations()

    /**
     * Method to invalidate the instance pool of all tables related to spy_locale     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in related instance pools,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        SpyGlossaryTranslationTableMap::clearInstancePool();
        SpyUrlTableMap::clearInstancePool();
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdLocale', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdLocale', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdLocale', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdLocale', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdLocale', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdLocale', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdLocale', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyLocaleTableMap::CLASS_DEFAULT : SpyLocaleTableMap::OM_CLASS;
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
     * @return array           (SpyLocale object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SpyLocaleTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyLocaleTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyLocaleTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyLocaleTableMap::OM_CLASS;
            /** @var SpyLocale $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyLocaleTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyLocaleTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyLocaleTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyLocale $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyLocaleTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyLocaleTableMap::COL_ID_LOCALE);
            $criteria->addSelectColumn(SpyLocaleTableMap::COL_LOCALE_NAME);
            $criteria->addSelectColumn(SpyLocaleTableMap::COL_IS_ACTIVE);
        } else {
            $criteria->addSelectColumn($alias . '.id_locale');
            $criteria->addSelectColumn($alias . '.locale_name');
            $criteria->addSelectColumn($alias . '.is_active');
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
            $criteria->removeSelectColumn(SpyLocaleTableMap::COL_ID_LOCALE);
            $criteria->removeSelectColumn(SpyLocaleTableMap::COL_LOCALE_NAME);
            $criteria->removeSelectColumn(SpyLocaleTableMap::COL_IS_ACTIVE);
        } else {
            $criteria->removeSelectColumn($alias . '.id_locale');
            $criteria->removeSelectColumn($alias . '.locale_name');
            $criteria->removeSelectColumn($alias . '.is_active');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyLocaleTableMap::DATABASE_NAME)->getTable(SpyLocaleTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyLocale or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SpyLocale object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyLocaleTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\Locale\Persistence\SpyLocale) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyLocaleTableMap::DATABASE_NAME);
            $criteria->add(SpyLocaleTableMap::COL_ID_LOCALE, (array) $values, Criteria::IN);
        }

        $query = SpyLocaleQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyLocaleTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyLocaleTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_locale table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SpyLocaleQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyLocale or Criteria object.
     *
     * @param mixed               $criteria Criteria or SpyLocale object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyLocaleTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyLocale object
        }

        if ($criteria->containsKey(SpyLocaleTableMap::COL_ID_LOCALE) && $criteria->keyContainsValue(SpyLocaleTableMap::COL_ID_LOCALE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpyLocaleTableMap::COL_ID_LOCALE.')');
        }


        // Set the correct dbName
        $query = SpyLocaleQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SpyLocaleTableMap
