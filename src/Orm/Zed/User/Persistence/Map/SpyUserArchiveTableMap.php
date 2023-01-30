<?php

namespace Orm\Zed\User\Persistence\Map;

use Orm\Zed\User\Persistence\SpyUserArchive;
use Orm\Zed\User\Persistence\SpyUserArchiveQuery;
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
 * This class defines the structure of the 'spy_user_archive' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyUserArchiveTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.Orm.Zed.User.Persistence.Map.SpyUserArchiveTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'spy_user_archive';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Orm\\Zed\\User\\Persistence\\SpyUserArchive';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'src.Orm.Zed.User.Persistence.SpyUserArchive';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 12;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 12;

    /**
     * the column name for the id_user field
     */
    const COL_ID_USER = 'spy_user_archive.id_user';

    /**
     * the column name for the fk_locale field
     */
    const COL_FK_LOCALE = 'spy_user_archive.fk_locale';

    /**
     * the column name for the first_name field
     */
    const COL_FIRST_NAME = 'spy_user_archive.first_name';

    /**
     * the column name for the is_agent field
     */
    const COL_IS_AGENT = 'spy_user_archive.is_agent';

    /**
     * the column name for the last_login field
     */
    const COL_LAST_LOGIN = 'spy_user_archive.last_login';

    /**
     * the column name for the last_name field
     */
    const COL_LAST_NAME = 'spy_user_archive.last_name';

    /**
     * the column name for the password field
     */
    const COL_PASSWORD = 'spy_user_archive.password';

    /**
     * the column name for the status field
     */
    const COL_STATUS = 'spy_user_archive.status';

    /**
     * the column name for the username field
     */
    const COL_USERNAME = 'spy_user_archive.username';

    /**
     * the column name for the created_at field
     */
    const COL_CREATED_AT = 'spy_user_archive.created_at';

    /**
     * the column name for the updated_at field
     */
    const COL_UPDATED_AT = 'spy_user_archive.updated_at';

    /**
     * the column name for the archived_at field
     */
    const COL_ARCHIVED_AT = 'spy_user_archive.archived_at';

    /**
     * The default string format for model objects of the related table
     */
    const DEFAULT_STRING_FORMAT = 'YAML';

    /** The enumerated values for the status field */
    const COL_STATUS_ACTIVE = 'active';
    const COL_STATUS_BLOCKED = 'blocked';
    const COL_STATUS_DELETED = 'deleted';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        self::TYPE_PHPNAME       => array('IdUser', 'FkLocale', 'FirstName', 'IsAgent', 'LastLogin', 'LastName', 'Password', 'Status', 'Username', 'CreatedAt', 'UpdatedAt', 'ArchivedAt', ),
        self::TYPE_CAMELNAME     => array('idUser', 'fkLocale', 'firstName', 'isAgent', 'lastLogin', 'lastName', 'password', 'status', 'username', 'createdAt', 'updatedAt', 'archivedAt', ),
        self::TYPE_COLNAME       => array(SpyUserArchiveTableMap::COL_ID_USER, SpyUserArchiveTableMap::COL_FK_LOCALE, SpyUserArchiveTableMap::COL_FIRST_NAME, SpyUserArchiveTableMap::COL_IS_AGENT, SpyUserArchiveTableMap::COL_LAST_LOGIN, SpyUserArchiveTableMap::COL_LAST_NAME, SpyUserArchiveTableMap::COL_PASSWORD, SpyUserArchiveTableMap::COL_STATUS, SpyUserArchiveTableMap::COL_USERNAME, SpyUserArchiveTableMap::COL_CREATED_AT, SpyUserArchiveTableMap::COL_UPDATED_AT, SpyUserArchiveTableMap::COL_ARCHIVED_AT, ),
        self::TYPE_FIELDNAME     => array('id_user', 'fk_locale', 'first_name', 'is_agent', 'last_login', 'last_name', 'password', 'status', 'username', 'created_at', 'updated_at', 'archived_at', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('IdUser' => 0, 'FkLocale' => 1, 'FirstName' => 2, 'IsAgent' => 3, 'LastLogin' => 4, 'LastName' => 5, 'Password' => 6, 'Status' => 7, 'Username' => 8, 'CreatedAt' => 9, 'UpdatedAt' => 10, 'ArchivedAt' => 11, ),
        self::TYPE_CAMELNAME     => array('idUser' => 0, 'fkLocale' => 1, 'firstName' => 2, 'isAgent' => 3, 'lastLogin' => 4, 'lastName' => 5, 'password' => 6, 'status' => 7, 'username' => 8, 'createdAt' => 9, 'updatedAt' => 10, 'archivedAt' => 11, ),
        self::TYPE_COLNAME       => array(SpyUserArchiveTableMap::COL_ID_USER => 0, SpyUserArchiveTableMap::COL_FK_LOCALE => 1, SpyUserArchiveTableMap::COL_FIRST_NAME => 2, SpyUserArchiveTableMap::COL_IS_AGENT => 3, SpyUserArchiveTableMap::COL_LAST_LOGIN => 4, SpyUserArchiveTableMap::COL_LAST_NAME => 5, SpyUserArchiveTableMap::COL_PASSWORD => 6, SpyUserArchiveTableMap::COL_STATUS => 7, SpyUserArchiveTableMap::COL_USERNAME => 8, SpyUserArchiveTableMap::COL_CREATED_AT => 9, SpyUserArchiveTableMap::COL_UPDATED_AT => 10, SpyUserArchiveTableMap::COL_ARCHIVED_AT => 11, ),
        self::TYPE_FIELDNAME     => array('id_user' => 0, 'fk_locale' => 1, 'first_name' => 2, 'is_agent' => 3, 'last_login' => 4, 'last_name' => 5, 'password' => 6, 'status' => 7, 'username' => 8, 'created_at' => 9, 'updated_at' => 10, 'archived_at' => 11, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [
        'IdUser' => 'ID_USER',
        'SpyUserArchive.IdUser' => 'ID_USER',
        'idUser' => 'ID_USER',
        'spyUserArchive.idUser' => 'ID_USER',
        'SpyUserArchiveTableMap::COL_ID_USER' => 'ID_USER',
        'COL_ID_USER' => 'ID_USER',
        'id_user' => 'ID_USER',
        'spy_user_archive.id_user' => 'ID_USER',
        'FkLocale' => 'FK_LOCALE',
        'SpyUserArchive.FkLocale' => 'FK_LOCALE',
        'fkLocale' => 'FK_LOCALE',
        'spyUserArchive.fkLocale' => 'FK_LOCALE',
        'SpyUserArchiveTableMap::COL_FK_LOCALE' => 'FK_LOCALE',
        'COL_FK_LOCALE' => 'FK_LOCALE',
        'fk_locale' => 'FK_LOCALE',
        'spy_user_archive.fk_locale' => 'FK_LOCALE',
        'FirstName' => 'FIRST_NAME',
        'SpyUserArchive.FirstName' => 'FIRST_NAME',
        'firstName' => 'FIRST_NAME',
        'spyUserArchive.firstName' => 'FIRST_NAME',
        'SpyUserArchiveTableMap::COL_FIRST_NAME' => 'FIRST_NAME',
        'COL_FIRST_NAME' => 'FIRST_NAME',
        'first_name' => 'FIRST_NAME',
        'spy_user_archive.first_name' => 'FIRST_NAME',
        'IsAgent' => 'IS_AGENT',
        'SpyUserArchive.IsAgent' => 'IS_AGENT',
        'isAgent' => 'IS_AGENT',
        'spyUserArchive.isAgent' => 'IS_AGENT',
        'SpyUserArchiveTableMap::COL_IS_AGENT' => 'IS_AGENT',
        'COL_IS_AGENT' => 'IS_AGENT',
        'is_agent' => 'IS_AGENT',
        'spy_user_archive.is_agent' => 'IS_AGENT',
        'LastLogin' => 'LAST_LOGIN',
        'SpyUserArchive.LastLogin' => 'LAST_LOGIN',
        'lastLogin' => 'LAST_LOGIN',
        'spyUserArchive.lastLogin' => 'LAST_LOGIN',
        'SpyUserArchiveTableMap::COL_LAST_LOGIN' => 'LAST_LOGIN',
        'COL_LAST_LOGIN' => 'LAST_LOGIN',
        'last_login' => 'LAST_LOGIN',
        'spy_user_archive.last_login' => 'LAST_LOGIN',
        'LastName' => 'LAST_NAME',
        'SpyUserArchive.LastName' => 'LAST_NAME',
        'lastName' => 'LAST_NAME',
        'spyUserArchive.lastName' => 'LAST_NAME',
        'SpyUserArchiveTableMap::COL_LAST_NAME' => 'LAST_NAME',
        'COL_LAST_NAME' => 'LAST_NAME',
        'last_name' => 'LAST_NAME',
        'spy_user_archive.last_name' => 'LAST_NAME',
        'Password' => 'PASSWORD',
        'SpyUserArchive.Password' => 'PASSWORD',
        'password' => 'PASSWORD',
        'spyUserArchive.password' => 'PASSWORD',
        'SpyUserArchiveTableMap::COL_PASSWORD' => 'PASSWORD',
        'COL_PASSWORD' => 'PASSWORD',
        'spy_user_archive.password' => 'PASSWORD',
        'Status' => 'STATUS',
        'SpyUserArchive.Status' => 'STATUS',
        'status' => 'STATUS',
        'spyUserArchive.status' => 'STATUS',
        'SpyUserArchiveTableMap::COL_STATUS' => 'STATUS',
        'COL_STATUS' => 'STATUS',
        'spy_user_archive.status' => 'STATUS',
        'Username' => 'USERNAME',
        'SpyUserArchive.Username' => 'USERNAME',
        'username' => 'USERNAME',
        'spyUserArchive.username' => 'USERNAME',
        'SpyUserArchiveTableMap::COL_USERNAME' => 'USERNAME',
        'COL_USERNAME' => 'USERNAME',
        'spy_user_archive.username' => 'USERNAME',
        'CreatedAt' => 'CREATED_AT',
        'SpyUserArchive.CreatedAt' => 'CREATED_AT',
        'createdAt' => 'CREATED_AT',
        'spyUserArchive.createdAt' => 'CREATED_AT',
        'SpyUserArchiveTableMap::COL_CREATED_AT' => 'CREATED_AT',
        'COL_CREATED_AT' => 'CREATED_AT',
        'created_at' => 'CREATED_AT',
        'spy_user_archive.created_at' => 'CREATED_AT',
        'UpdatedAt' => 'UPDATED_AT',
        'SpyUserArchive.UpdatedAt' => 'UPDATED_AT',
        'updatedAt' => 'UPDATED_AT',
        'spyUserArchive.updatedAt' => 'UPDATED_AT',
        'SpyUserArchiveTableMap::COL_UPDATED_AT' => 'UPDATED_AT',
        'COL_UPDATED_AT' => 'UPDATED_AT',
        'updated_at' => 'UPDATED_AT',
        'spy_user_archive.updated_at' => 'UPDATED_AT',
        'ArchivedAt' => 'ARCHIVED_AT',
        'SpyUserArchive.ArchivedAt' => 'ARCHIVED_AT',
        'archivedAt' => 'ARCHIVED_AT',
        'spyUserArchive.archivedAt' => 'ARCHIVED_AT',
        'SpyUserArchiveTableMap::COL_ARCHIVED_AT' => 'ARCHIVED_AT',
        'COL_ARCHIVED_AT' => 'ARCHIVED_AT',
        'archived_at' => 'ARCHIVED_AT',
        'spy_user_archive.archived_at' => 'ARCHIVED_AT',
    ];

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
                SpyUserArchiveTableMap::COL_STATUS => array(
                            self::COL_STATUS_ACTIVE,
            self::COL_STATUS_BLOCKED,
            self::COL_STATUS_DELETED,
        ),
    );

    /**
     * Gets the list of values for all ENUM and SET columns
     * @return array
     */
    public static function getValueSets()
    {
      return static::$enumValueSets;
    }

    /**
     * Gets the list of values for an ENUM or SET column
     * @param string $colname
     * @return array list of possible values for the column
     */
    public static function getValueSet($colname)
    {
        $valueSets = self::getValueSets();

        return $valueSets[$colname];
    }

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
        $this->setName('spy_user_archive');
        $this->setPhpName('SpyUserArchive');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Orm\\Zed\\User\\Persistence\\SpyUserArchive');
        $this->setPackage('src.Orm.Zed.User.Persistence');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('id_user', 'IdUser', 'INTEGER', true, null, null);
        $this->addColumn('fk_locale', 'FkLocale', 'INTEGER', false, null, null);
        $this->addColumn('first_name', 'FirstName', 'VARCHAR', true, 45, null);
        $this->addColumn('is_agent', 'IsAgent', 'BOOLEAN', false, 1, null);
        $this->addColumn('last_login', 'LastLogin', 'TIMESTAMP', false, null, null);
        $this->addColumn('last_name', 'LastName', 'VARCHAR', true, 255, null);
        $this->addColumn('password', 'Password', 'VARCHAR', true, 255, null);
        $this->addColumn('status', 'Status', 'ENUM', true, 10, 'active');
        $this->getColumn('status')->setValueSet(array (
  0 => 'active',
  1 => 'blocked',
  2 => 'deleted',
));
        $this->addColumn('username', 'Username', 'VARCHAR', true, 45, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('archived_at', 'ArchivedAt', 'TIMESTAMP', false, null, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdUser', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdUser', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdUser', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdUser', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdUser', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdUser', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdUser', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyUserArchiveTableMap::CLASS_DEFAULT : SpyUserArchiveTableMap::OM_CLASS;
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
     * @return array           (SpyUserArchive object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SpyUserArchiveTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyUserArchiveTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyUserArchiveTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyUserArchiveTableMap::OM_CLASS;
            /** @var SpyUserArchive $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyUserArchiveTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyUserArchiveTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyUserArchiveTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyUserArchive $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyUserArchiveTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyUserArchiveTableMap::COL_ID_USER);
            $criteria->addSelectColumn(SpyUserArchiveTableMap::COL_FK_LOCALE);
            $criteria->addSelectColumn(SpyUserArchiveTableMap::COL_FIRST_NAME);
            $criteria->addSelectColumn(SpyUserArchiveTableMap::COL_IS_AGENT);
            $criteria->addSelectColumn(SpyUserArchiveTableMap::COL_LAST_LOGIN);
            $criteria->addSelectColumn(SpyUserArchiveTableMap::COL_LAST_NAME);
            $criteria->addSelectColumn(SpyUserArchiveTableMap::COL_PASSWORD);
            $criteria->addSelectColumn(SpyUserArchiveTableMap::COL_STATUS);
            $criteria->addSelectColumn(SpyUserArchiveTableMap::COL_USERNAME);
            $criteria->addSelectColumn(SpyUserArchiveTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(SpyUserArchiveTableMap::COL_UPDATED_AT);
            $criteria->addSelectColumn(SpyUserArchiveTableMap::COL_ARCHIVED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id_user');
            $criteria->addSelectColumn($alias . '.fk_locale');
            $criteria->addSelectColumn($alias . '.first_name');
            $criteria->addSelectColumn($alias . '.is_agent');
            $criteria->addSelectColumn($alias . '.last_login');
            $criteria->addSelectColumn($alias . '.last_name');
            $criteria->addSelectColumn($alias . '.password');
            $criteria->addSelectColumn($alias . '.status');
            $criteria->addSelectColumn($alias . '.username');
            $criteria->addSelectColumn($alias . '.created_at');
            $criteria->addSelectColumn($alias . '.updated_at');
            $criteria->addSelectColumn($alias . '.archived_at');
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
            $criteria->removeSelectColumn(SpyUserArchiveTableMap::COL_ID_USER);
            $criteria->removeSelectColumn(SpyUserArchiveTableMap::COL_FK_LOCALE);
            $criteria->removeSelectColumn(SpyUserArchiveTableMap::COL_FIRST_NAME);
            $criteria->removeSelectColumn(SpyUserArchiveTableMap::COL_IS_AGENT);
            $criteria->removeSelectColumn(SpyUserArchiveTableMap::COL_LAST_LOGIN);
            $criteria->removeSelectColumn(SpyUserArchiveTableMap::COL_LAST_NAME);
            $criteria->removeSelectColumn(SpyUserArchiveTableMap::COL_PASSWORD);
            $criteria->removeSelectColumn(SpyUserArchiveTableMap::COL_STATUS);
            $criteria->removeSelectColumn(SpyUserArchiveTableMap::COL_USERNAME);
            $criteria->removeSelectColumn(SpyUserArchiveTableMap::COL_CREATED_AT);
            $criteria->removeSelectColumn(SpyUserArchiveTableMap::COL_UPDATED_AT);
            $criteria->removeSelectColumn(SpyUserArchiveTableMap::COL_ARCHIVED_AT);
        } else {
            $criteria->removeSelectColumn($alias . '.id_user');
            $criteria->removeSelectColumn($alias . '.fk_locale');
            $criteria->removeSelectColumn($alias . '.first_name');
            $criteria->removeSelectColumn($alias . '.is_agent');
            $criteria->removeSelectColumn($alias . '.last_login');
            $criteria->removeSelectColumn($alias . '.last_name');
            $criteria->removeSelectColumn($alias . '.password');
            $criteria->removeSelectColumn($alias . '.status');
            $criteria->removeSelectColumn($alias . '.username');
            $criteria->removeSelectColumn($alias . '.created_at');
            $criteria->removeSelectColumn($alias . '.updated_at');
            $criteria->removeSelectColumn($alias . '.archived_at');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyUserArchiveTableMap::DATABASE_NAME)->getTable(SpyUserArchiveTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyUserArchive or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SpyUserArchive object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyUserArchiveTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\User\Persistence\SpyUserArchive) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyUserArchiveTableMap::DATABASE_NAME);
            $criteria->add(SpyUserArchiveTableMap::COL_ID_USER, (array) $values, Criteria::IN);
        }

        $query = SpyUserArchiveQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyUserArchiveTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyUserArchiveTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_user_archive table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SpyUserArchiveQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyUserArchive or Criteria object.
     *
     * @param mixed               $criteria Criteria or SpyUserArchive object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyUserArchiveTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyUserArchive object
        }


        // Set the correct dbName
        $query = SpyUserArchiveQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SpyUserArchiveTableMap
