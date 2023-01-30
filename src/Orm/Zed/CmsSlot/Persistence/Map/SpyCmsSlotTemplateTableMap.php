<?php

namespace Orm\Zed\CmsSlot\Persistence\Map;

use Orm\Zed\CmsSlot\Persistence\SpyCmsSlotTemplate;
use Orm\Zed\CmsSlot\Persistence\SpyCmsSlotTemplateQuery;
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
 * This class defines the structure of the 'spy_cms_slot_template' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyCmsSlotTemplateTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.Orm.Zed.CmsSlot.Persistence.Map.SpyCmsSlotTemplateTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'spy_cms_slot_template';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Orm\\Zed\\CmsSlot\\Persistence\\SpyCmsSlotTemplate';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'src.Orm.Zed.CmsSlot.Persistence.SpyCmsSlotTemplate';

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
     * the column name for the id_cms_slot_template field
     */
    const COL_ID_CMS_SLOT_TEMPLATE = 'spy_cms_slot_template.id_cms_slot_template';

    /**
     * the column name for the description field
     */
    const COL_DESCRIPTION = 'spy_cms_slot_template.description';

    /**
     * the column name for the name field
     */
    const COL_NAME = 'spy_cms_slot_template.name';

    /**
     * the column name for the path field
     */
    const COL_PATH = 'spy_cms_slot_template.path';

    /**
     * the column name for the path_hash field
     */
    const COL_PATH_HASH = 'spy_cms_slot_template.path_hash';

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
        self::TYPE_PHPNAME       => array('IdCmsSlotTemplate', 'Description', 'Name', 'Path', 'PathHash', ),
        self::TYPE_CAMELNAME     => array('idCmsSlotTemplate', 'description', 'name', 'path', 'pathHash', ),
        self::TYPE_COLNAME       => array(SpyCmsSlotTemplateTableMap::COL_ID_CMS_SLOT_TEMPLATE, SpyCmsSlotTemplateTableMap::COL_DESCRIPTION, SpyCmsSlotTemplateTableMap::COL_NAME, SpyCmsSlotTemplateTableMap::COL_PATH, SpyCmsSlotTemplateTableMap::COL_PATH_HASH, ),
        self::TYPE_FIELDNAME     => array('id_cms_slot_template', 'description', 'name', 'path', 'path_hash', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('IdCmsSlotTemplate' => 0, 'Description' => 1, 'Name' => 2, 'Path' => 3, 'PathHash' => 4, ),
        self::TYPE_CAMELNAME     => array('idCmsSlotTemplate' => 0, 'description' => 1, 'name' => 2, 'path' => 3, 'pathHash' => 4, ),
        self::TYPE_COLNAME       => array(SpyCmsSlotTemplateTableMap::COL_ID_CMS_SLOT_TEMPLATE => 0, SpyCmsSlotTemplateTableMap::COL_DESCRIPTION => 1, SpyCmsSlotTemplateTableMap::COL_NAME => 2, SpyCmsSlotTemplateTableMap::COL_PATH => 3, SpyCmsSlotTemplateTableMap::COL_PATH_HASH => 4, ),
        self::TYPE_FIELDNAME     => array('id_cms_slot_template' => 0, 'description' => 1, 'name' => 2, 'path' => 3, 'path_hash' => 4, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [
        'IdCmsSlotTemplate' => 'ID_CMS_SLOT_TEMPLATE',
        'SpyCmsSlotTemplate.IdCmsSlotTemplate' => 'ID_CMS_SLOT_TEMPLATE',
        'idCmsSlotTemplate' => 'ID_CMS_SLOT_TEMPLATE',
        'spyCmsSlotTemplate.idCmsSlotTemplate' => 'ID_CMS_SLOT_TEMPLATE',
        'SpyCmsSlotTemplateTableMap::COL_ID_CMS_SLOT_TEMPLATE' => 'ID_CMS_SLOT_TEMPLATE',
        'COL_ID_CMS_SLOT_TEMPLATE' => 'ID_CMS_SLOT_TEMPLATE',
        'id_cms_slot_template' => 'ID_CMS_SLOT_TEMPLATE',
        'spy_cms_slot_template.id_cms_slot_template' => 'ID_CMS_SLOT_TEMPLATE',
        'Description' => 'DESCRIPTION',
        'SpyCmsSlotTemplate.Description' => 'DESCRIPTION',
        'description' => 'DESCRIPTION',
        'spyCmsSlotTemplate.description' => 'DESCRIPTION',
        'SpyCmsSlotTemplateTableMap::COL_DESCRIPTION' => 'DESCRIPTION',
        'COL_DESCRIPTION' => 'DESCRIPTION',
        'spy_cms_slot_template.description' => 'DESCRIPTION',
        'Name' => 'NAME',
        'SpyCmsSlotTemplate.Name' => 'NAME',
        'name' => 'NAME',
        'spyCmsSlotTemplate.name' => 'NAME',
        'SpyCmsSlotTemplateTableMap::COL_NAME' => 'NAME',
        'COL_NAME' => 'NAME',
        'spy_cms_slot_template.name' => 'NAME',
        'Path' => 'PATH',
        'SpyCmsSlotTemplate.Path' => 'PATH',
        'path' => 'PATH',
        'spyCmsSlotTemplate.path' => 'PATH',
        'SpyCmsSlotTemplateTableMap::COL_PATH' => 'PATH',
        'COL_PATH' => 'PATH',
        'spy_cms_slot_template.path' => 'PATH',
        'PathHash' => 'PATH_HASH',
        'SpyCmsSlotTemplate.PathHash' => 'PATH_HASH',
        'pathHash' => 'PATH_HASH',
        'spyCmsSlotTemplate.pathHash' => 'PATH_HASH',
        'SpyCmsSlotTemplateTableMap::COL_PATH_HASH' => 'PATH_HASH',
        'COL_PATH_HASH' => 'PATH_HASH',
        'path_hash' => 'PATH_HASH',
        'spy_cms_slot_template.path_hash' => 'PATH_HASH',
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
        $this->setName('spy_cms_slot_template');
        $this->setPhpName('SpyCmsSlotTemplate');
        $this->setIdentifierQuoting(true);
        $this->setClassName('\\Orm\\Zed\\CmsSlot\\Persistence\\SpyCmsSlotTemplate');
        $this->setPackage('src.Orm.Zed.CmsSlot.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_cms_slot_template_pk_seq');
        // columns
        $this->addPrimaryKey('id_cms_slot_template', 'IdCmsSlotTemplate', 'INTEGER', true, null, null);
        $this->addColumn('description', 'Description', 'LONGVARCHAR', true, null, null);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 255, null);
        $this->addColumn('path', 'Path', 'LONGVARCHAR', true, null, null);
        $this->addColumn('path_hash', 'PathHash', 'VARCHAR', true, 32, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('SpyCmsSlotToCmsSlotTemplate', '\\Orm\\Zed\\CmsSlot\\Persistence\\SpyCmsSlotToCmsSlotTemplate', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_cms_slot_template',
    1 => ':id_cms_slot_template',
  ),
), null, null, 'SpyCmsSlotToCmsSlotTemplates', false);
        $this->addRelation('SpyCmsSlotBlock', '\\Orm\\Zed\\CmsSlotBlock\\Persistence\\SpyCmsSlotBlock', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_cms_slot_template',
    1 => ':id_cms_slot_template',
  ),
), null, null, 'SpyCmsSlotBlocks', false);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCmsSlotTemplate', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCmsSlotTemplate', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCmsSlotTemplate', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCmsSlotTemplate', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCmsSlotTemplate', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCmsSlotTemplate', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdCmsSlotTemplate', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyCmsSlotTemplateTableMap::CLASS_DEFAULT : SpyCmsSlotTemplateTableMap::OM_CLASS;
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
     * @return array           (SpyCmsSlotTemplate object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SpyCmsSlotTemplateTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyCmsSlotTemplateTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyCmsSlotTemplateTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyCmsSlotTemplateTableMap::OM_CLASS;
            /** @var SpyCmsSlotTemplate $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyCmsSlotTemplateTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyCmsSlotTemplateTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyCmsSlotTemplateTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyCmsSlotTemplate $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyCmsSlotTemplateTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyCmsSlotTemplateTableMap::COL_ID_CMS_SLOT_TEMPLATE);
            $criteria->addSelectColumn(SpyCmsSlotTemplateTableMap::COL_DESCRIPTION);
            $criteria->addSelectColumn(SpyCmsSlotTemplateTableMap::COL_NAME);
            $criteria->addSelectColumn(SpyCmsSlotTemplateTableMap::COL_PATH);
            $criteria->addSelectColumn(SpyCmsSlotTemplateTableMap::COL_PATH_HASH);
        } else {
            $criteria->addSelectColumn($alias . '.id_cms_slot_template');
            $criteria->addSelectColumn($alias . '.description');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.path');
            $criteria->addSelectColumn($alias . '.path_hash');
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
            $criteria->removeSelectColumn(SpyCmsSlotTemplateTableMap::COL_ID_CMS_SLOT_TEMPLATE);
            $criteria->removeSelectColumn(SpyCmsSlotTemplateTableMap::COL_DESCRIPTION);
            $criteria->removeSelectColumn(SpyCmsSlotTemplateTableMap::COL_NAME);
            $criteria->removeSelectColumn(SpyCmsSlotTemplateTableMap::COL_PATH);
            $criteria->removeSelectColumn(SpyCmsSlotTemplateTableMap::COL_PATH_HASH);
        } else {
            $criteria->removeSelectColumn($alias . '.id_cms_slot_template');
            $criteria->removeSelectColumn($alias . '.description');
            $criteria->removeSelectColumn($alias . '.name');
            $criteria->removeSelectColumn($alias . '.path');
            $criteria->removeSelectColumn($alias . '.path_hash');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyCmsSlotTemplateTableMap::DATABASE_NAME)->getTable(SpyCmsSlotTemplateTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyCmsSlotTemplate or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SpyCmsSlotTemplate object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCmsSlotTemplateTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\CmsSlot\Persistence\SpyCmsSlotTemplate) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyCmsSlotTemplateTableMap::DATABASE_NAME);
            $criteria->add(SpyCmsSlotTemplateTableMap::COL_ID_CMS_SLOT_TEMPLATE, (array) $values, Criteria::IN);
        }

        $query = SpyCmsSlotTemplateQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyCmsSlotTemplateTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyCmsSlotTemplateTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_cms_slot_template table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SpyCmsSlotTemplateQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyCmsSlotTemplate or Criteria object.
     *
     * @param mixed               $criteria Criteria or SpyCmsSlotTemplate object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCmsSlotTemplateTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyCmsSlotTemplate object
        }


        // Set the correct dbName
        $query = SpyCmsSlotTemplateQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SpyCmsSlotTemplateTableMap
