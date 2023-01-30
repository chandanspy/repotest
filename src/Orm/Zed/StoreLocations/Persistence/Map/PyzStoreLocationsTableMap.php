<?php

namespace Orm\Zed\StoreLocations\Persistence\Map;

use Orm\Zed\StoreLocations\Persistence\PyzStoreLocations;
use Orm\Zed\StoreLocations\Persistence\PyzStoreLocationsQuery;
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
 * This class defines the structure of the 'pyz_store_locations' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class PyzStoreLocationsTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.Orm.Zed.StoreLocations.Persistence.Map.PyzStoreLocationsTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'pyz_store_locations';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Orm\\Zed\\StoreLocations\\Persistence\\PyzStoreLocations';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'src.Orm.Zed.StoreLocations.Persistence.PyzStoreLocations';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 10;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 10;

    /**
     * the column name for the idstore field
     */
    const COL_IDSTORE = 'pyz_store_locations.idstore';

    /**
     * the column name for the storename field
     */
    const COL_STORENAME = 'pyz_store_locations.storename';

    /**
     * the column name for the street field
     */
    const COL_STREET = 'pyz_store_locations.street';

    /**
     * the column name for the city field
     */
    const COL_CITY = 'pyz_store_locations.city';

    /**
     * the column name for the region field
     */
    const COL_REGION = 'pyz_store_locations.region';

    /**
     * the column name for the country field
     */
    const COL_COUNTRY = 'pyz_store_locations.country';

    /**
     * the column name for the zipcode field
     */
    const COL_ZIPCODE = 'pyz_store_locations.zipcode';

    /**
     * the column name for the longitude field
     */
    const COL_LONGITUDE = 'pyz_store_locations.longitude';

    /**
     * the column name for the latitude field
     */
    const COL_LATITUDE = 'pyz_store_locations.latitude';

    /**
     * the column name for the storeimage field
     */
    const COL_STOREIMAGE = 'pyz_store_locations.storeimage';

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
        self::TYPE_PHPNAME       => array('Idstore', 'Storename', 'Street', 'City', 'Region', 'Country', 'Zipcode', 'Longitude', 'Latitude', 'Storeimage', ),
        self::TYPE_CAMELNAME     => array('idstore', 'storename', 'street', 'city', 'region', 'country', 'zipcode', 'longitude', 'latitude', 'storeimage', ),
        self::TYPE_COLNAME       => array(PyzStoreLocationsTableMap::COL_IDSTORE, PyzStoreLocationsTableMap::COL_STORENAME, PyzStoreLocationsTableMap::COL_STREET, PyzStoreLocationsTableMap::COL_CITY, PyzStoreLocationsTableMap::COL_REGION, PyzStoreLocationsTableMap::COL_COUNTRY, PyzStoreLocationsTableMap::COL_ZIPCODE, PyzStoreLocationsTableMap::COL_LONGITUDE, PyzStoreLocationsTableMap::COL_LATITUDE, PyzStoreLocationsTableMap::COL_STOREIMAGE, ),
        self::TYPE_FIELDNAME     => array('idstore', 'storename', 'street', 'city', 'region', 'country', 'zipcode', 'longitude', 'latitude', 'storeimage', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Idstore' => 0, 'Storename' => 1, 'Street' => 2, 'City' => 3, 'Region' => 4, 'Country' => 5, 'Zipcode' => 6, 'Longitude' => 7, 'Latitude' => 8, 'Storeimage' => 9, ),
        self::TYPE_CAMELNAME     => array('idstore' => 0, 'storename' => 1, 'street' => 2, 'city' => 3, 'region' => 4, 'country' => 5, 'zipcode' => 6, 'longitude' => 7, 'latitude' => 8, 'storeimage' => 9, ),
        self::TYPE_COLNAME       => array(PyzStoreLocationsTableMap::COL_IDSTORE => 0, PyzStoreLocationsTableMap::COL_STORENAME => 1, PyzStoreLocationsTableMap::COL_STREET => 2, PyzStoreLocationsTableMap::COL_CITY => 3, PyzStoreLocationsTableMap::COL_REGION => 4, PyzStoreLocationsTableMap::COL_COUNTRY => 5, PyzStoreLocationsTableMap::COL_ZIPCODE => 6, PyzStoreLocationsTableMap::COL_LONGITUDE => 7, PyzStoreLocationsTableMap::COL_LATITUDE => 8, PyzStoreLocationsTableMap::COL_STOREIMAGE => 9, ),
        self::TYPE_FIELDNAME     => array('idstore' => 0, 'storename' => 1, 'street' => 2, 'city' => 3, 'region' => 4, 'country' => 5, 'zipcode' => 6, 'longitude' => 7, 'latitude' => 8, 'storeimage' => 9, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [
        'Idstore' => 'IDSTORE',
        'PyzStoreLocations.Idstore' => 'IDSTORE',
        'idstore' => 'IDSTORE',
        'pyzStoreLocations.idstore' => 'IDSTORE',
        'PyzStoreLocationsTableMap::COL_IDSTORE' => 'IDSTORE',
        'COL_IDSTORE' => 'IDSTORE',
        'pyz_store_locations.idstore' => 'IDSTORE',
        'Storename' => 'STORENAME',
        'PyzStoreLocations.Storename' => 'STORENAME',
        'storename' => 'STORENAME',
        'pyzStoreLocations.storename' => 'STORENAME',
        'PyzStoreLocationsTableMap::COL_STORENAME' => 'STORENAME',
        'COL_STORENAME' => 'STORENAME',
        'pyz_store_locations.storename' => 'STORENAME',
        'Street' => 'STREET',
        'PyzStoreLocations.Street' => 'STREET',
        'street' => 'STREET',
        'pyzStoreLocations.street' => 'STREET',
        'PyzStoreLocationsTableMap::COL_STREET' => 'STREET',
        'COL_STREET' => 'STREET',
        'pyz_store_locations.street' => 'STREET',
        'City' => 'CITY',
        'PyzStoreLocations.City' => 'CITY',
        'city' => 'CITY',
        'pyzStoreLocations.city' => 'CITY',
        'PyzStoreLocationsTableMap::COL_CITY' => 'CITY',
        'COL_CITY' => 'CITY',
        'pyz_store_locations.city' => 'CITY',
        'Region' => 'REGION',
        'PyzStoreLocations.Region' => 'REGION',
        'region' => 'REGION',
        'pyzStoreLocations.region' => 'REGION',
        'PyzStoreLocationsTableMap::COL_REGION' => 'REGION',
        'COL_REGION' => 'REGION',
        'pyz_store_locations.region' => 'REGION',
        'Country' => 'COUNTRY',
        'PyzStoreLocations.Country' => 'COUNTRY',
        'country' => 'COUNTRY',
        'pyzStoreLocations.country' => 'COUNTRY',
        'PyzStoreLocationsTableMap::COL_COUNTRY' => 'COUNTRY',
        'COL_COUNTRY' => 'COUNTRY',
        'pyz_store_locations.country' => 'COUNTRY',
        'Zipcode' => 'ZIPCODE',
        'PyzStoreLocations.Zipcode' => 'ZIPCODE',
        'zipcode' => 'ZIPCODE',
        'pyzStoreLocations.zipcode' => 'ZIPCODE',
        'PyzStoreLocationsTableMap::COL_ZIPCODE' => 'ZIPCODE',
        'COL_ZIPCODE' => 'ZIPCODE',
        'pyz_store_locations.zipcode' => 'ZIPCODE',
        'Longitude' => 'LONGITUDE',
        'PyzStoreLocations.Longitude' => 'LONGITUDE',
        'longitude' => 'LONGITUDE',
        'pyzStoreLocations.longitude' => 'LONGITUDE',
        'PyzStoreLocationsTableMap::COL_LONGITUDE' => 'LONGITUDE',
        'COL_LONGITUDE' => 'LONGITUDE',
        'pyz_store_locations.longitude' => 'LONGITUDE',
        'Latitude' => 'LATITUDE',
        'PyzStoreLocations.Latitude' => 'LATITUDE',
        'latitude' => 'LATITUDE',
        'pyzStoreLocations.latitude' => 'LATITUDE',
        'PyzStoreLocationsTableMap::COL_LATITUDE' => 'LATITUDE',
        'COL_LATITUDE' => 'LATITUDE',
        'pyz_store_locations.latitude' => 'LATITUDE',
        'Storeimage' => 'STOREIMAGE',
        'PyzStoreLocations.Storeimage' => 'STOREIMAGE',
        'storeimage' => 'STOREIMAGE',
        'pyzStoreLocations.storeimage' => 'STOREIMAGE',
        'PyzStoreLocationsTableMap::COL_STOREIMAGE' => 'STOREIMAGE',
        'COL_STOREIMAGE' => 'STOREIMAGE',
        'pyz_store_locations.storeimage' => 'STOREIMAGE',
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
        $this->setName('pyz_store_locations');
        $this->setPhpName('PyzStoreLocations');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Orm\\Zed\\StoreLocations\\Persistence\\PyzStoreLocations');
        $this->setPackage('src.Orm.Zed.StoreLocations.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('pyz_storelocations_pk_seq');
        // columns
        $this->addPrimaryKey('idstore', 'Idstore', 'INTEGER', true, null, null);
        $this->addColumn('storename', 'Storename', 'VARCHAR', true, 255, null);
        $this->addColumn('street', 'Street', 'VARCHAR', true, 255, null);
        $this->addColumn('city', 'City', 'VARCHAR', true, 255, null);
        $this->addColumn('region', 'Region', 'VARCHAR', true, 255, null);
        $this->addColumn('country', 'Country', 'VARCHAR', true, 255, null);
        $this->addColumn('zipcode', 'Zipcode', 'VARCHAR', true, 255, null);
        $this->addColumn('longitude', 'Longitude', 'VARCHAR', true, 255, null);
        $this->addColumn('latitude', 'Latitude', 'VARCHAR', true, 255, null);
        $this->addColumn('storeimage', 'Storeimage', 'CLOB', true, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Idstore', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Idstore', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Idstore', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Idstore', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Idstore', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Idstore', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Idstore', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? PyzStoreLocationsTableMap::CLASS_DEFAULT : PyzStoreLocationsTableMap::OM_CLASS;
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
     * @return array           (PyzStoreLocations object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = PyzStoreLocationsTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = PyzStoreLocationsTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + PyzStoreLocationsTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = PyzStoreLocationsTableMap::OM_CLASS;
            /** @var PyzStoreLocations $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            PyzStoreLocationsTableMap::addInstanceToPool($obj, $key);
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
            $key = PyzStoreLocationsTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = PyzStoreLocationsTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var PyzStoreLocations $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                PyzStoreLocationsTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(PyzStoreLocationsTableMap::COL_IDSTORE);
            $criteria->addSelectColumn(PyzStoreLocationsTableMap::COL_STORENAME);
            $criteria->addSelectColumn(PyzStoreLocationsTableMap::COL_STREET);
            $criteria->addSelectColumn(PyzStoreLocationsTableMap::COL_CITY);
            $criteria->addSelectColumn(PyzStoreLocationsTableMap::COL_REGION);
            $criteria->addSelectColumn(PyzStoreLocationsTableMap::COL_COUNTRY);
            $criteria->addSelectColumn(PyzStoreLocationsTableMap::COL_ZIPCODE);
            $criteria->addSelectColumn(PyzStoreLocationsTableMap::COL_LONGITUDE);
            $criteria->addSelectColumn(PyzStoreLocationsTableMap::COL_LATITUDE);
            $criteria->addSelectColumn(PyzStoreLocationsTableMap::COL_STOREIMAGE);
        } else {
            $criteria->addSelectColumn($alias . '.idstore');
            $criteria->addSelectColumn($alias . '.storename');
            $criteria->addSelectColumn($alias . '.street');
            $criteria->addSelectColumn($alias . '.city');
            $criteria->addSelectColumn($alias . '.region');
            $criteria->addSelectColumn($alias . '.country');
            $criteria->addSelectColumn($alias . '.zipcode');
            $criteria->addSelectColumn($alias . '.longitude');
            $criteria->addSelectColumn($alias . '.latitude');
            $criteria->addSelectColumn($alias . '.storeimage');
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
            $criteria->removeSelectColumn(PyzStoreLocationsTableMap::COL_IDSTORE);
            $criteria->removeSelectColumn(PyzStoreLocationsTableMap::COL_STORENAME);
            $criteria->removeSelectColumn(PyzStoreLocationsTableMap::COL_STREET);
            $criteria->removeSelectColumn(PyzStoreLocationsTableMap::COL_CITY);
            $criteria->removeSelectColumn(PyzStoreLocationsTableMap::COL_REGION);
            $criteria->removeSelectColumn(PyzStoreLocationsTableMap::COL_COUNTRY);
            $criteria->removeSelectColumn(PyzStoreLocationsTableMap::COL_ZIPCODE);
            $criteria->removeSelectColumn(PyzStoreLocationsTableMap::COL_LONGITUDE);
            $criteria->removeSelectColumn(PyzStoreLocationsTableMap::COL_LATITUDE);
            $criteria->removeSelectColumn(PyzStoreLocationsTableMap::COL_STOREIMAGE);
        } else {
            $criteria->removeSelectColumn($alias . '.idstore');
            $criteria->removeSelectColumn($alias . '.storename');
            $criteria->removeSelectColumn($alias . '.street');
            $criteria->removeSelectColumn($alias . '.city');
            $criteria->removeSelectColumn($alias . '.region');
            $criteria->removeSelectColumn($alias . '.country');
            $criteria->removeSelectColumn($alias . '.zipcode');
            $criteria->removeSelectColumn($alias . '.longitude');
            $criteria->removeSelectColumn($alias . '.latitude');
            $criteria->removeSelectColumn($alias . '.storeimage');
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
        return Propel::getServiceContainer()->getDatabaseMap(PyzStoreLocationsTableMap::DATABASE_NAME)->getTable(PyzStoreLocationsTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a PyzStoreLocations or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or PyzStoreLocations object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(PyzStoreLocationsTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\StoreLocations\Persistence\PyzStoreLocations) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(PyzStoreLocationsTableMap::DATABASE_NAME);
            $criteria->add(PyzStoreLocationsTableMap::COL_IDSTORE, (array) $values, Criteria::IN);
        }

        $query = PyzStoreLocationsQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            PyzStoreLocationsTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                PyzStoreLocationsTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the pyz_store_locations table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return PyzStoreLocationsQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a PyzStoreLocations or Criteria object.
     *
     * @param mixed               $criteria Criteria or PyzStoreLocations object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(PyzStoreLocationsTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from PyzStoreLocations object
        }


        // Set the correct dbName
        $query = PyzStoreLocationsQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // PyzStoreLocationsTableMap
