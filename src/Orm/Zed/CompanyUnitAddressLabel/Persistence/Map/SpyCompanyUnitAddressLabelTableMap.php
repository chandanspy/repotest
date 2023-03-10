<?php

namespace Orm\Zed\CompanyUnitAddressLabel\Persistence\Map;

use Orm\Zed\CompanyUnitAddressLabel\Persistence\SpyCompanyUnitAddressLabel;
use Orm\Zed\CompanyUnitAddressLabel\Persistence\SpyCompanyUnitAddressLabelQuery;
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
 * This class defines the structure of the 'spy_company_unit_address_label' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyCompanyUnitAddressLabelTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.Orm.Zed.CompanyUnitAddressLabel.Persistence.Map.SpyCompanyUnitAddressLabelTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'spy_company_unit_address_label';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Orm\\Zed\\CompanyUnitAddressLabel\\Persistence\\SpyCompanyUnitAddressLabel';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'src.Orm.Zed.CompanyUnitAddressLabel.Persistence.SpyCompanyUnitAddressLabel';

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
     * the column name for the id_company_unit_address_label field
     */
    const COL_ID_COMPANY_UNIT_ADDRESS_LABEL = 'spy_company_unit_address_label.id_company_unit_address_label';

    /**
     * the column name for the name field
     */
    const COL_NAME = 'spy_company_unit_address_label.name';

    /**
     * the column name for the created_at field
     */
    const COL_CREATED_AT = 'spy_company_unit_address_label.created_at';

    /**
     * the column name for the updated_at field
     */
    const COL_UPDATED_AT = 'spy_company_unit_address_label.updated_at';

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
        self::TYPE_PHPNAME       => array('IdCompanyUnitAddressLabel', 'Name', 'CreatedAt', 'UpdatedAt', ),
        self::TYPE_CAMELNAME     => array('idCompanyUnitAddressLabel', 'name', 'createdAt', 'updatedAt', ),
        self::TYPE_COLNAME       => array(SpyCompanyUnitAddressLabelTableMap::COL_ID_COMPANY_UNIT_ADDRESS_LABEL, SpyCompanyUnitAddressLabelTableMap::COL_NAME, SpyCompanyUnitAddressLabelTableMap::COL_CREATED_AT, SpyCompanyUnitAddressLabelTableMap::COL_UPDATED_AT, ),
        self::TYPE_FIELDNAME     => array('id_company_unit_address_label', 'name', 'created_at', 'updated_at', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('IdCompanyUnitAddressLabel' => 0, 'Name' => 1, 'CreatedAt' => 2, 'UpdatedAt' => 3, ),
        self::TYPE_CAMELNAME     => array('idCompanyUnitAddressLabel' => 0, 'name' => 1, 'createdAt' => 2, 'updatedAt' => 3, ),
        self::TYPE_COLNAME       => array(SpyCompanyUnitAddressLabelTableMap::COL_ID_COMPANY_UNIT_ADDRESS_LABEL => 0, SpyCompanyUnitAddressLabelTableMap::COL_NAME => 1, SpyCompanyUnitAddressLabelTableMap::COL_CREATED_AT => 2, SpyCompanyUnitAddressLabelTableMap::COL_UPDATED_AT => 3, ),
        self::TYPE_FIELDNAME     => array('id_company_unit_address_label' => 0, 'name' => 1, 'created_at' => 2, 'updated_at' => 3, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [
        'IdCompanyUnitAddressLabel' => 'ID_COMPANY_UNIT_ADDRESS_LABEL',
        'SpyCompanyUnitAddressLabel.IdCompanyUnitAddressLabel' => 'ID_COMPANY_UNIT_ADDRESS_LABEL',
        'idCompanyUnitAddressLabel' => 'ID_COMPANY_UNIT_ADDRESS_LABEL',
        'spyCompanyUnitAddressLabel.idCompanyUnitAddressLabel' => 'ID_COMPANY_UNIT_ADDRESS_LABEL',
        'SpyCompanyUnitAddressLabelTableMap::COL_ID_COMPANY_UNIT_ADDRESS_LABEL' => 'ID_COMPANY_UNIT_ADDRESS_LABEL',
        'COL_ID_COMPANY_UNIT_ADDRESS_LABEL' => 'ID_COMPANY_UNIT_ADDRESS_LABEL',
        'id_company_unit_address_label' => 'ID_COMPANY_UNIT_ADDRESS_LABEL',
        'spy_company_unit_address_label.id_company_unit_address_label' => 'ID_COMPANY_UNIT_ADDRESS_LABEL',
        'Name' => 'NAME',
        'SpyCompanyUnitAddressLabel.Name' => 'NAME',
        'name' => 'NAME',
        'spyCompanyUnitAddressLabel.name' => 'NAME',
        'SpyCompanyUnitAddressLabelTableMap::COL_NAME' => 'NAME',
        'COL_NAME' => 'NAME',
        'spy_company_unit_address_label.name' => 'NAME',
        'CreatedAt' => 'CREATED_AT',
        'SpyCompanyUnitAddressLabel.CreatedAt' => 'CREATED_AT',
        'createdAt' => 'CREATED_AT',
        'spyCompanyUnitAddressLabel.createdAt' => 'CREATED_AT',
        'SpyCompanyUnitAddressLabelTableMap::COL_CREATED_AT' => 'CREATED_AT',
        'COL_CREATED_AT' => 'CREATED_AT',
        'created_at' => 'CREATED_AT',
        'spy_company_unit_address_label.created_at' => 'CREATED_AT',
        'UpdatedAt' => 'UPDATED_AT',
        'SpyCompanyUnitAddressLabel.UpdatedAt' => 'UPDATED_AT',
        'updatedAt' => 'UPDATED_AT',
        'spyCompanyUnitAddressLabel.updatedAt' => 'UPDATED_AT',
        'SpyCompanyUnitAddressLabelTableMap::COL_UPDATED_AT' => 'UPDATED_AT',
        'COL_UPDATED_AT' => 'UPDATED_AT',
        'updated_at' => 'UPDATED_AT',
        'spy_company_unit_address_label.updated_at' => 'UPDATED_AT',
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
        $this->setName('spy_company_unit_address_label');
        $this->setPhpName('SpyCompanyUnitAddressLabel');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Orm\\Zed\\CompanyUnitAddressLabel\\Persistence\\SpyCompanyUnitAddressLabel');
        $this->setPackage('src.Orm.Zed.CompanyUnitAddressLabel.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_company_unit_address_label_pk_seq');
        // columns
        $this->addPrimaryKey('id_company_unit_address_label', 'IdCompanyUnitAddressLabel', 'INTEGER', true, null, null);
        $this->addColumn('name', 'Name', 'VARCHAR', false, 255, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', false, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('SpyCompanyUnitAddressLabelToCompanyUnitAddress', '\\Orm\\Zed\\CompanyUnitAddressLabel\\Persistence\\SpyCompanyUnitAddressLabelToCompanyUnitAddress', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_company_unit_address_label',
    1 => ':id_company_unit_address_label',
  ),
), 'CASCADE', null, 'SpyCompanyUnitAddressLabelToCompanyUnitAddresses', false);
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
        );
    } // getBehaviors()

    /**
     * Method to invalidate the instance pool of all tables related to spy_company_unit_address_label     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in related instance pools,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        SpyCompanyUnitAddressLabelToCompanyUnitAddressTableMap::clearInstancePool();
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCompanyUnitAddressLabel', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCompanyUnitAddressLabel', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCompanyUnitAddressLabel', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCompanyUnitAddressLabel', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCompanyUnitAddressLabel', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCompanyUnitAddressLabel', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdCompanyUnitAddressLabel', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyCompanyUnitAddressLabelTableMap::CLASS_DEFAULT : SpyCompanyUnitAddressLabelTableMap::OM_CLASS;
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
     * @return array           (SpyCompanyUnitAddressLabel object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SpyCompanyUnitAddressLabelTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyCompanyUnitAddressLabelTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyCompanyUnitAddressLabelTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyCompanyUnitAddressLabelTableMap::OM_CLASS;
            /** @var SpyCompanyUnitAddressLabel $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyCompanyUnitAddressLabelTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyCompanyUnitAddressLabelTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyCompanyUnitAddressLabelTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyCompanyUnitAddressLabel $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyCompanyUnitAddressLabelTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyCompanyUnitAddressLabelTableMap::COL_ID_COMPANY_UNIT_ADDRESS_LABEL);
            $criteria->addSelectColumn(SpyCompanyUnitAddressLabelTableMap::COL_NAME);
            $criteria->addSelectColumn(SpyCompanyUnitAddressLabelTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(SpyCompanyUnitAddressLabelTableMap::COL_UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id_company_unit_address_label');
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
            $criteria->removeSelectColumn(SpyCompanyUnitAddressLabelTableMap::COL_ID_COMPANY_UNIT_ADDRESS_LABEL);
            $criteria->removeSelectColumn(SpyCompanyUnitAddressLabelTableMap::COL_NAME);
            $criteria->removeSelectColumn(SpyCompanyUnitAddressLabelTableMap::COL_CREATED_AT);
            $criteria->removeSelectColumn(SpyCompanyUnitAddressLabelTableMap::COL_UPDATED_AT);
        } else {
            $criteria->removeSelectColumn($alias . '.id_company_unit_address_label');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyCompanyUnitAddressLabelTableMap::DATABASE_NAME)->getTable(SpyCompanyUnitAddressLabelTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyCompanyUnitAddressLabel or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SpyCompanyUnitAddressLabel object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCompanyUnitAddressLabelTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\CompanyUnitAddressLabel\Persistence\SpyCompanyUnitAddressLabel) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyCompanyUnitAddressLabelTableMap::DATABASE_NAME);
            $criteria->add(SpyCompanyUnitAddressLabelTableMap::COL_ID_COMPANY_UNIT_ADDRESS_LABEL, (array) $values, Criteria::IN);
        }

        $query = SpyCompanyUnitAddressLabelQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyCompanyUnitAddressLabelTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyCompanyUnitAddressLabelTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_company_unit_address_label table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SpyCompanyUnitAddressLabelQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyCompanyUnitAddressLabel or Criteria object.
     *
     * @param mixed               $criteria Criteria or SpyCompanyUnitAddressLabel object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCompanyUnitAddressLabelTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyCompanyUnitAddressLabel object
        }


        // Set the correct dbName
        $query = SpyCompanyUnitAddressLabelQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SpyCompanyUnitAddressLabelTableMap
