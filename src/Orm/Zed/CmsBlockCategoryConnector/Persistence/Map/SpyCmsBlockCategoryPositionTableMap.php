<?php

namespace Orm\Zed\CmsBlockCategoryConnector\Persistence\Map;

use Orm\Zed\CmsBlockCategoryConnector\Persistence\SpyCmsBlockCategoryPosition;
use Orm\Zed\CmsBlockCategoryConnector\Persistence\SpyCmsBlockCategoryPositionQuery;
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
 * This class defines the structure of the 'spy_cms_block_category_position' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyCmsBlockCategoryPositionTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.Orm.Zed.CmsBlockCategoryConnector.Persistence.Map.SpyCmsBlockCategoryPositionTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'spy_cms_block_category_position';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Orm\\Zed\\CmsBlockCategoryConnector\\Persistence\\SpyCmsBlockCategoryPosition';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'src.Orm.Zed.CmsBlockCategoryConnector.Persistence.SpyCmsBlockCategoryPosition';

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
     * the column name for the id_cms_block_category_position field
     */
    const COL_ID_CMS_BLOCK_CATEGORY_POSITION = 'spy_cms_block_category_position.id_cms_block_category_position';

    /**
     * the column name for the name field
     */
    const COL_NAME = 'spy_cms_block_category_position.name';

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
        self::TYPE_PHPNAME       => array('IdCmsBlockCategoryPosition', 'Name', ),
        self::TYPE_CAMELNAME     => array('idCmsBlockCategoryPosition', 'name', ),
        self::TYPE_COLNAME       => array(SpyCmsBlockCategoryPositionTableMap::COL_ID_CMS_BLOCK_CATEGORY_POSITION, SpyCmsBlockCategoryPositionTableMap::COL_NAME, ),
        self::TYPE_FIELDNAME     => array('id_cms_block_category_position', 'name', ),
        self::TYPE_NUM           => array(0, 1, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('IdCmsBlockCategoryPosition' => 0, 'Name' => 1, ),
        self::TYPE_CAMELNAME     => array('idCmsBlockCategoryPosition' => 0, 'name' => 1, ),
        self::TYPE_COLNAME       => array(SpyCmsBlockCategoryPositionTableMap::COL_ID_CMS_BLOCK_CATEGORY_POSITION => 0, SpyCmsBlockCategoryPositionTableMap::COL_NAME => 1, ),
        self::TYPE_FIELDNAME     => array('id_cms_block_category_position' => 0, 'name' => 1, ),
        self::TYPE_NUM           => array(0, 1, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [
        'IdCmsBlockCategoryPosition' => 'ID_CMS_BLOCK_CATEGORY_POSITION',
        'SpyCmsBlockCategoryPosition.IdCmsBlockCategoryPosition' => 'ID_CMS_BLOCK_CATEGORY_POSITION',
        'idCmsBlockCategoryPosition' => 'ID_CMS_BLOCK_CATEGORY_POSITION',
        'spyCmsBlockCategoryPosition.idCmsBlockCategoryPosition' => 'ID_CMS_BLOCK_CATEGORY_POSITION',
        'SpyCmsBlockCategoryPositionTableMap::COL_ID_CMS_BLOCK_CATEGORY_POSITION' => 'ID_CMS_BLOCK_CATEGORY_POSITION',
        'COL_ID_CMS_BLOCK_CATEGORY_POSITION' => 'ID_CMS_BLOCK_CATEGORY_POSITION',
        'id_cms_block_category_position' => 'ID_CMS_BLOCK_CATEGORY_POSITION',
        'spy_cms_block_category_position.id_cms_block_category_position' => 'ID_CMS_BLOCK_CATEGORY_POSITION',
        'Name' => 'NAME',
        'SpyCmsBlockCategoryPosition.Name' => 'NAME',
        'name' => 'NAME',
        'spyCmsBlockCategoryPosition.name' => 'NAME',
        'SpyCmsBlockCategoryPositionTableMap::COL_NAME' => 'NAME',
        'COL_NAME' => 'NAME',
        'spy_cms_block_category_position.name' => 'NAME',
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
        $this->setName('spy_cms_block_category_position');
        $this->setPhpName('SpyCmsBlockCategoryPosition');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Orm\\Zed\\CmsBlockCategoryConnector\\Persistence\\SpyCmsBlockCategoryPosition');
        $this->setPackage('src.Orm.Zed.CmsBlockCategoryConnector.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_cms_block_category_position_pk_seq');
        // columns
        $this->addPrimaryKey('id_cms_block_category_position', 'IdCmsBlockCategoryPosition', 'INTEGER', true, null, null);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 255, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('SpyCmsBlockCategoryConnector', '\\Orm\\Zed\\CmsBlockCategoryConnector\\Persistence\\SpyCmsBlockCategoryConnector', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_cms_block_category_position',
    1 => ':id_cms_block_category_position',
  ),
), 'CASCADE', null, 'SpyCmsBlockCategoryConnectors', false);
    } // buildRelations()

    /**
     * Method to invalidate the instance pool of all tables related to spy_cms_block_category_position     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in related instance pools,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        SpyCmsBlockCategoryConnectorTableMap::clearInstancePool();
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCmsBlockCategoryPosition', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCmsBlockCategoryPosition', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCmsBlockCategoryPosition', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCmsBlockCategoryPosition', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCmsBlockCategoryPosition', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCmsBlockCategoryPosition', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdCmsBlockCategoryPosition', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyCmsBlockCategoryPositionTableMap::CLASS_DEFAULT : SpyCmsBlockCategoryPositionTableMap::OM_CLASS;
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
     * @return array           (SpyCmsBlockCategoryPosition object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SpyCmsBlockCategoryPositionTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyCmsBlockCategoryPositionTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyCmsBlockCategoryPositionTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyCmsBlockCategoryPositionTableMap::OM_CLASS;
            /** @var SpyCmsBlockCategoryPosition $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyCmsBlockCategoryPositionTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyCmsBlockCategoryPositionTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyCmsBlockCategoryPositionTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyCmsBlockCategoryPosition $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyCmsBlockCategoryPositionTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyCmsBlockCategoryPositionTableMap::COL_ID_CMS_BLOCK_CATEGORY_POSITION);
            $criteria->addSelectColumn(SpyCmsBlockCategoryPositionTableMap::COL_NAME);
        } else {
            $criteria->addSelectColumn($alias . '.id_cms_block_category_position');
            $criteria->addSelectColumn($alias . '.name');
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
            $criteria->removeSelectColumn(SpyCmsBlockCategoryPositionTableMap::COL_ID_CMS_BLOCK_CATEGORY_POSITION);
            $criteria->removeSelectColumn(SpyCmsBlockCategoryPositionTableMap::COL_NAME);
        } else {
            $criteria->removeSelectColumn($alias . '.id_cms_block_category_position');
            $criteria->removeSelectColumn($alias . '.name');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyCmsBlockCategoryPositionTableMap::DATABASE_NAME)->getTable(SpyCmsBlockCategoryPositionTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyCmsBlockCategoryPosition or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SpyCmsBlockCategoryPosition object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCmsBlockCategoryPositionTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\CmsBlockCategoryConnector\Persistence\SpyCmsBlockCategoryPosition) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyCmsBlockCategoryPositionTableMap::DATABASE_NAME);
            $criteria->add(SpyCmsBlockCategoryPositionTableMap::COL_ID_CMS_BLOCK_CATEGORY_POSITION, (array) $values, Criteria::IN);
        }

        $query = SpyCmsBlockCategoryPositionQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyCmsBlockCategoryPositionTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyCmsBlockCategoryPositionTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_cms_block_category_position table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SpyCmsBlockCategoryPositionQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyCmsBlockCategoryPosition or Criteria object.
     *
     * @param mixed               $criteria Criteria or SpyCmsBlockCategoryPosition object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCmsBlockCategoryPositionTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyCmsBlockCategoryPosition object
        }

        if ($criteria->containsKey(SpyCmsBlockCategoryPositionTableMap::COL_ID_CMS_BLOCK_CATEGORY_POSITION) && $criteria->keyContainsValue(SpyCmsBlockCategoryPositionTableMap::COL_ID_CMS_BLOCK_CATEGORY_POSITION) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpyCmsBlockCategoryPositionTableMap::COL_ID_CMS_BLOCK_CATEGORY_POSITION.')');
        }


        // Set the correct dbName
        $query = SpyCmsBlockCategoryPositionQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SpyCmsBlockCategoryPositionTableMap
