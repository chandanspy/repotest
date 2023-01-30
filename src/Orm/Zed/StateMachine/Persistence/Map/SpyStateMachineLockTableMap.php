<?php

namespace Orm\Zed\StateMachine\Persistence\Map;

use Orm\Zed\StateMachine\Persistence\SpyStateMachineLock;
use Orm\Zed\StateMachine\Persistence\SpyStateMachineLockQuery;
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
 * This class defines the structure of the 'spy_state_machine_lock' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyStateMachineLockTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.Orm.Zed.StateMachine.Persistence.Map.SpyStateMachineLockTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'spy_state_machine_lock';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Orm\\Zed\\StateMachine\\Persistence\\SpyStateMachineLock';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'src.Orm.Zed.StateMachine.Persistence.SpyStateMachineLock';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 5;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 5;

    /**
     * the column name for the id_state_machine_lock field
     */
    const COL_ID_STATE_MACHINE_LOCK = 'spy_state_machine_lock.id_state_machine_lock';

    /**
     * the column name for the expires field
     */
    const COL_EXPIRES = 'spy_state_machine_lock.expires';

    /**
     * the column name for the identifier field
     */
    const COL_IDENTIFIER = 'spy_state_machine_lock.identifier';

    /**
     * the column name for the created_at field
     */
    const COL_CREATED_AT = 'spy_state_machine_lock.created_at';

    /**
     * the column name for the updated_at field
     */
    const COL_UPDATED_AT = 'spy_state_machine_lock.updated_at';

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
        self::TYPE_PHPNAME       => array('IdStateMachineLock', 'Expires', 'Identifier', 'CreatedAt', 'UpdatedAt', ),
        self::TYPE_CAMELNAME     => array('idStateMachineLock', 'expires', 'identifier', 'createdAt', 'updatedAt', ),
        self::TYPE_COLNAME       => array(SpyStateMachineLockTableMap::COL_ID_STATE_MACHINE_LOCK, SpyStateMachineLockTableMap::COL_EXPIRES, SpyStateMachineLockTableMap::COL_IDENTIFIER, SpyStateMachineLockTableMap::COL_CREATED_AT, SpyStateMachineLockTableMap::COL_UPDATED_AT, ),
        self::TYPE_FIELDNAME     => array('id_state_machine_lock', 'expires', 'identifier', 'created_at', 'updated_at', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('IdStateMachineLock' => 0, 'Expires' => 1, 'Identifier' => 2, 'CreatedAt' => 3, 'UpdatedAt' => 4, ),
        self::TYPE_CAMELNAME     => array('idStateMachineLock' => 0, 'expires' => 1, 'identifier' => 2, 'createdAt' => 3, 'updatedAt' => 4, ),
        self::TYPE_COLNAME       => array(SpyStateMachineLockTableMap::COL_ID_STATE_MACHINE_LOCK => 0, SpyStateMachineLockTableMap::COL_EXPIRES => 1, SpyStateMachineLockTableMap::COL_IDENTIFIER => 2, SpyStateMachineLockTableMap::COL_CREATED_AT => 3, SpyStateMachineLockTableMap::COL_UPDATED_AT => 4, ),
        self::TYPE_FIELDNAME     => array('id_state_machine_lock' => 0, 'expires' => 1, 'identifier' => 2, 'created_at' => 3, 'updated_at' => 4, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [
        'IdStateMachineLock' => 'ID_STATE_MACHINE_LOCK',
        'SpyStateMachineLock.IdStateMachineLock' => 'ID_STATE_MACHINE_LOCK',
        'idStateMachineLock' => 'ID_STATE_MACHINE_LOCK',
        'spyStateMachineLock.idStateMachineLock' => 'ID_STATE_MACHINE_LOCK',
        'SpyStateMachineLockTableMap::COL_ID_STATE_MACHINE_LOCK' => 'ID_STATE_MACHINE_LOCK',
        'COL_ID_STATE_MACHINE_LOCK' => 'ID_STATE_MACHINE_LOCK',
        'id_state_machine_lock' => 'ID_STATE_MACHINE_LOCK',
        'spy_state_machine_lock.id_state_machine_lock' => 'ID_STATE_MACHINE_LOCK',
        'Expires' => 'EXPIRES',
        'SpyStateMachineLock.Expires' => 'EXPIRES',
        'expires' => 'EXPIRES',
        'spyStateMachineLock.expires' => 'EXPIRES',
        'SpyStateMachineLockTableMap::COL_EXPIRES' => 'EXPIRES',
        'COL_EXPIRES' => 'EXPIRES',
        'spy_state_machine_lock.expires' => 'EXPIRES',
        'Identifier' => 'IDENTIFIER',
        'SpyStateMachineLock.Identifier' => 'IDENTIFIER',
        'identifier' => 'IDENTIFIER',
        'spyStateMachineLock.identifier' => 'IDENTIFIER',
        'SpyStateMachineLockTableMap::COL_IDENTIFIER' => 'IDENTIFIER',
        'COL_IDENTIFIER' => 'IDENTIFIER',
        'spy_state_machine_lock.identifier' => 'IDENTIFIER',
        'CreatedAt' => 'CREATED_AT',
        'SpyStateMachineLock.CreatedAt' => 'CREATED_AT',
        'createdAt' => 'CREATED_AT',
        'spyStateMachineLock.createdAt' => 'CREATED_AT',
        'SpyStateMachineLockTableMap::COL_CREATED_AT' => 'CREATED_AT',
        'COL_CREATED_AT' => 'CREATED_AT',
        'created_at' => 'CREATED_AT',
        'spy_state_machine_lock.created_at' => 'CREATED_AT',
        'UpdatedAt' => 'UPDATED_AT',
        'SpyStateMachineLock.UpdatedAt' => 'UPDATED_AT',
        'updatedAt' => 'UPDATED_AT',
        'spyStateMachineLock.updatedAt' => 'UPDATED_AT',
        'SpyStateMachineLockTableMap::COL_UPDATED_AT' => 'UPDATED_AT',
        'COL_UPDATED_AT' => 'UPDATED_AT',
        'updated_at' => 'UPDATED_AT',
        'spy_state_machine_lock.updated_at' => 'UPDATED_AT',
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
        $this->setName('spy_state_machine_lock');
        $this->setPhpName('SpyStateMachineLock');
        $this->setIdentifierQuoting(true);
        $this->setClassName('\\Orm\\Zed\\StateMachine\\Persistence\\SpyStateMachineLock');
        $this->setPackage('src.Orm.Zed.StateMachine.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_state_machine_lock_pk_seq');
        // columns
        $this->addPrimaryKey('id_state_machine_lock', 'IdStateMachineLock', 'INTEGER', true, null, null);
        $this->addColumn('expires', 'Expires', 'TIMESTAMP', true, null, null);
        $this->addColumn('identifier', 'Identifier', 'VARCHAR', true, 255, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', false, null, null);
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
            'timestampable' => ['create_column' => 'created_at', 'update_column' => 'updated_at', 'disable_created_at' => 'false', 'disable_updated_at' => 'false'],
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdStateMachineLock', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdStateMachineLock', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdStateMachineLock', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdStateMachineLock', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdStateMachineLock', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdStateMachineLock', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdStateMachineLock', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyStateMachineLockTableMap::CLASS_DEFAULT : SpyStateMachineLockTableMap::OM_CLASS;
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
     * @return array           (SpyStateMachineLock object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SpyStateMachineLockTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyStateMachineLockTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyStateMachineLockTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyStateMachineLockTableMap::OM_CLASS;
            /** @var SpyStateMachineLock $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyStateMachineLockTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyStateMachineLockTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyStateMachineLockTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyStateMachineLock $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyStateMachineLockTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyStateMachineLockTableMap::COL_ID_STATE_MACHINE_LOCK);
            $criteria->addSelectColumn(SpyStateMachineLockTableMap::COL_EXPIRES);
            $criteria->addSelectColumn(SpyStateMachineLockTableMap::COL_IDENTIFIER);
            $criteria->addSelectColumn(SpyStateMachineLockTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(SpyStateMachineLockTableMap::COL_UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id_state_machine_lock');
            $criteria->addSelectColumn($alias . '.expires');
            $criteria->addSelectColumn($alias . '.identifier');
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
            $criteria->removeSelectColumn(SpyStateMachineLockTableMap::COL_ID_STATE_MACHINE_LOCK);
            $criteria->removeSelectColumn(SpyStateMachineLockTableMap::COL_EXPIRES);
            $criteria->removeSelectColumn(SpyStateMachineLockTableMap::COL_IDENTIFIER);
            $criteria->removeSelectColumn(SpyStateMachineLockTableMap::COL_CREATED_AT);
            $criteria->removeSelectColumn(SpyStateMachineLockTableMap::COL_UPDATED_AT);
        } else {
            $criteria->removeSelectColumn($alias . '.id_state_machine_lock');
            $criteria->removeSelectColumn($alias . '.expires');
            $criteria->removeSelectColumn($alias . '.identifier');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyStateMachineLockTableMap::DATABASE_NAME)->getTable(SpyStateMachineLockTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyStateMachineLock or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SpyStateMachineLock object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyStateMachineLockTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\StateMachine\Persistence\SpyStateMachineLock) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyStateMachineLockTableMap::DATABASE_NAME);
            $criteria->add(SpyStateMachineLockTableMap::COL_ID_STATE_MACHINE_LOCK, (array) $values, Criteria::IN);
        }

        $query = SpyStateMachineLockQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyStateMachineLockTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyStateMachineLockTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_state_machine_lock table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SpyStateMachineLockQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyStateMachineLock or Criteria object.
     *
     * @param mixed               $criteria Criteria or SpyStateMachineLock object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyStateMachineLockTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyStateMachineLock object
        }

        if ($criteria->containsKey(SpyStateMachineLockTableMap::COL_ID_STATE_MACHINE_LOCK) && $criteria->keyContainsValue(SpyStateMachineLockTableMap::COL_ID_STATE_MACHINE_LOCK) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpyStateMachineLockTableMap::COL_ID_STATE_MACHINE_LOCK.')');
        }


        // Set the correct dbName
        $query = SpyStateMachineLockQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SpyStateMachineLockTableMap
