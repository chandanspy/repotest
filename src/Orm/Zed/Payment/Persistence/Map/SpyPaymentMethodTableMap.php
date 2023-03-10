<?php

namespace Orm\Zed\Payment\Persistence\Map;

use Orm\Zed\Payment\Persistence\SpyPaymentMethod;
use Orm\Zed\Payment\Persistence\SpyPaymentMethodQuery;
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
 * This class defines the structure of the 'spy_payment_method' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyPaymentMethodTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.Orm.Zed.Payment.Persistence.Map.SpyPaymentMethodTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'spy_payment_method';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Orm\\Zed\\Payment\\Persistence\\SpyPaymentMethod';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'src.Orm.Zed.Payment.Persistence.SpyPaymentMethod';

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
     * the column name for the id_payment_method field
     */
    const COL_ID_PAYMENT_METHOD = 'spy_payment_method.id_payment_method';

    /**
     * the column name for the fk_payment_provider field
     */
    const COL_FK_PAYMENT_PROVIDER = 'spy_payment_method.fk_payment_provider';

    /**
     * the column name for the group_name field
     */
    const COL_GROUP_NAME = 'spy_payment_method.group_name';

    /**
     * the column name for the is_active field
     */
    const COL_IS_ACTIVE = 'spy_payment_method.is_active';

    /**
     * the column name for the is_hidden field
     */
    const COL_IS_HIDDEN = 'spy_payment_method.is_hidden';

    /**
     * the column name for the label_name field
     */
    const COL_LABEL_NAME = 'spy_payment_method.label_name';

    /**
     * the column name for the name field
     */
    const COL_NAME = 'spy_payment_method.name';

    /**
     * the column name for the payment_authorization_endpoint field
     */
    const COL_PAYMENT_AUTHORIZATION_ENDPOINT = 'spy_payment_method.payment_authorization_endpoint';

    /**
     * the column name for the payment_method_key field
     */
    const COL_PAYMENT_METHOD_KEY = 'spy_payment_method.payment_method_key';

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
        self::TYPE_PHPNAME       => array('IdPaymentMethod', 'FkPaymentProvider', 'GroupName', 'IsActive', 'IsHidden', 'LabelName', 'Name', 'PaymentAuthorizationEndpoint', 'PaymentMethodKey', ),
        self::TYPE_CAMELNAME     => array('idPaymentMethod', 'fkPaymentProvider', 'groupName', 'isActive', 'isHidden', 'labelName', 'name', 'paymentAuthorizationEndpoint', 'paymentMethodKey', ),
        self::TYPE_COLNAME       => array(SpyPaymentMethodTableMap::COL_ID_PAYMENT_METHOD, SpyPaymentMethodTableMap::COL_FK_PAYMENT_PROVIDER, SpyPaymentMethodTableMap::COL_GROUP_NAME, SpyPaymentMethodTableMap::COL_IS_ACTIVE, SpyPaymentMethodTableMap::COL_IS_HIDDEN, SpyPaymentMethodTableMap::COL_LABEL_NAME, SpyPaymentMethodTableMap::COL_NAME, SpyPaymentMethodTableMap::COL_PAYMENT_AUTHORIZATION_ENDPOINT, SpyPaymentMethodTableMap::COL_PAYMENT_METHOD_KEY, ),
        self::TYPE_FIELDNAME     => array('id_payment_method', 'fk_payment_provider', 'group_name', 'is_active', 'is_hidden', 'label_name', 'name', 'payment_authorization_endpoint', 'payment_method_key', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('IdPaymentMethod' => 0, 'FkPaymentProvider' => 1, 'GroupName' => 2, 'IsActive' => 3, 'IsHidden' => 4, 'LabelName' => 5, 'Name' => 6, 'PaymentAuthorizationEndpoint' => 7, 'PaymentMethodKey' => 8, ),
        self::TYPE_CAMELNAME     => array('idPaymentMethod' => 0, 'fkPaymentProvider' => 1, 'groupName' => 2, 'isActive' => 3, 'isHidden' => 4, 'labelName' => 5, 'name' => 6, 'paymentAuthorizationEndpoint' => 7, 'paymentMethodKey' => 8, ),
        self::TYPE_COLNAME       => array(SpyPaymentMethodTableMap::COL_ID_PAYMENT_METHOD => 0, SpyPaymentMethodTableMap::COL_FK_PAYMENT_PROVIDER => 1, SpyPaymentMethodTableMap::COL_GROUP_NAME => 2, SpyPaymentMethodTableMap::COL_IS_ACTIVE => 3, SpyPaymentMethodTableMap::COL_IS_HIDDEN => 4, SpyPaymentMethodTableMap::COL_LABEL_NAME => 5, SpyPaymentMethodTableMap::COL_NAME => 6, SpyPaymentMethodTableMap::COL_PAYMENT_AUTHORIZATION_ENDPOINT => 7, SpyPaymentMethodTableMap::COL_PAYMENT_METHOD_KEY => 8, ),
        self::TYPE_FIELDNAME     => array('id_payment_method' => 0, 'fk_payment_provider' => 1, 'group_name' => 2, 'is_active' => 3, 'is_hidden' => 4, 'label_name' => 5, 'name' => 6, 'payment_authorization_endpoint' => 7, 'payment_method_key' => 8, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [
        'IdPaymentMethod' => 'ID_PAYMENT_METHOD',
        'SpyPaymentMethod.IdPaymentMethod' => 'ID_PAYMENT_METHOD',
        'idPaymentMethod' => 'ID_PAYMENT_METHOD',
        'spyPaymentMethod.idPaymentMethod' => 'ID_PAYMENT_METHOD',
        'SpyPaymentMethodTableMap::COL_ID_PAYMENT_METHOD' => 'ID_PAYMENT_METHOD',
        'COL_ID_PAYMENT_METHOD' => 'ID_PAYMENT_METHOD',
        'id_payment_method' => 'ID_PAYMENT_METHOD',
        'spy_payment_method.id_payment_method' => 'ID_PAYMENT_METHOD',
        'FkPaymentProvider' => 'FK_PAYMENT_PROVIDER',
        'SpyPaymentMethod.FkPaymentProvider' => 'FK_PAYMENT_PROVIDER',
        'fkPaymentProvider' => 'FK_PAYMENT_PROVIDER',
        'spyPaymentMethod.fkPaymentProvider' => 'FK_PAYMENT_PROVIDER',
        'SpyPaymentMethodTableMap::COL_FK_PAYMENT_PROVIDER' => 'FK_PAYMENT_PROVIDER',
        'COL_FK_PAYMENT_PROVIDER' => 'FK_PAYMENT_PROVIDER',
        'fk_payment_provider' => 'FK_PAYMENT_PROVIDER',
        'spy_payment_method.fk_payment_provider' => 'FK_PAYMENT_PROVIDER',
        'GroupName' => 'GROUP_NAME',
        'SpyPaymentMethod.GroupName' => 'GROUP_NAME',
        'groupName' => 'GROUP_NAME',
        'spyPaymentMethod.groupName' => 'GROUP_NAME',
        'SpyPaymentMethodTableMap::COL_GROUP_NAME' => 'GROUP_NAME',
        'COL_GROUP_NAME' => 'GROUP_NAME',
        'group_name' => 'GROUP_NAME',
        'spy_payment_method.group_name' => 'GROUP_NAME',
        'IsActive' => 'IS_ACTIVE',
        'SpyPaymentMethod.IsActive' => 'IS_ACTIVE',
        'isActive' => 'IS_ACTIVE',
        'spyPaymentMethod.isActive' => 'IS_ACTIVE',
        'SpyPaymentMethodTableMap::COL_IS_ACTIVE' => 'IS_ACTIVE',
        'COL_IS_ACTIVE' => 'IS_ACTIVE',
        'is_active' => 'IS_ACTIVE',
        'spy_payment_method.is_active' => 'IS_ACTIVE',
        'IsHidden' => 'IS_HIDDEN',
        'SpyPaymentMethod.IsHidden' => 'IS_HIDDEN',
        'isHidden' => 'IS_HIDDEN',
        'spyPaymentMethod.isHidden' => 'IS_HIDDEN',
        'SpyPaymentMethodTableMap::COL_IS_HIDDEN' => 'IS_HIDDEN',
        'COL_IS_HIDDEN' => 'IS_HIDDEN',
        'is_hidden' => 'IS_HIDDEN',
        'spy_payment_method.is_hidden' => 'IS_HIDDEN',
        'LabelName' => 'LABEL_NAME',
        'SpyPaymentMethod.LabelName' => 'LABEL_NAME',
        'labelName' => 'LABEL_NAME',
        'spyPaymentMethod.labelName' => 'LABEL_NAME',
        'SpyPaymentMethodTableMap::COL_LABEL_NAME' => 'LABEL_NAME',
        'COL_LABEL_NAME' => 'LABEL_NAME',
        'label_name' => 'LABEL_NAME',
        'spy_payment_method.label_name' => 'LABEL_NAME',
        'Name' => 'NAME',
        'SpyPaymentMethod.Name' => 'NAME',
        'name' => 'NAME',
        'spyPaymentMethod.name' => 'NAME',
        'SpyPaymentMethodTableMap::COL_NAME' => 'NAME',
        'COL_NAME' => 'NAME',
        'spy_payment_method.name' => 'NAME',
        'PaymentAuthorizationEndpoint' => 'PAYMENT_AUTHORIZATION_ENDPOINT',
        'SpyPaymentMethod.PaymentAuthorizationEndpoint' => 'PAYMENT_AUTHORIZATION_ENDPOINT',
        'paymentAuthorizationEndpoint' => 'PAYMENT_AUTHORIZATION_ENDPOINT',
        'spyPaymentMethod.paymentAuthorizationEndpoint' => 'PAYMENT_AUTHORIZATION_ENDPOINT',
        'SpyPaymentMethodTableMap::COL_PAYMENT_AUTHORIZATION_ENDPOINT' => 'PAYMENT_AUTHORIZATION_ENDPOINT',
        'COL_PAYMENT_AUTHORIZATION_ENDPOINT' => 'PAYMENT_AUTHORIZATION_ENDPOINT',
        'payment_authorization_endpoint' => 'PAYMENT_AUTHORIZATION_ENDPOINT',
        'spy_payment_method.payment_authorization_endpoint' => 'PAYMENT_AUTHORIZATION_ENDPOINT',
        'PaymentMethodKey' => 'PAYMENT_METHOD_KEY',
        'SpyPaymentMethod.PaymentMethodKey' => 'PAYMENT_METHOD_KEY',
        'paymentMethodKey' => 'PAYMENT_METHOD_KEY',
        'spyPaymentMethod.paymentMethodKey' => 'PAYMENT_METHOD_KEY',
        'SpyPaymentMethodTableMap::COL_PAYMENT_METHOD_KEY' => 'PAYMENT_METHOD_KEY',
        'COL_PAYMENT_METHOD_KEY' => 'PAYMENT_METHOD_KEY',
        'payment_method_key' => 'PAYMENT_METHOD_KEY',
        'spy_payment_method.payment_method_key' => 'PAYMENT_METHOD_KEY',
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
        $this->setName('spy_payment_method');
        $this->setPhpName('SpyPaymentMethod');
        $this->setIdentifierQuoting(true);
        $this->setClassName('\\Orm\\Zed\\Payment\\Persistence\\SpyPaymentMethod');
        $this->setPackage('src.Orm.Zed.Payment.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_payment_method_pk_seq');
        // columns
        $this->addPrimaryKey('id_payment_method', 'IdPaymentMethod', 'INTEGER', true, null, null);
        $this->addForeignKey('fk_payment_provider', 'FkPaymentProvider', 'INTEGER', 'spy_payment_provider', 'id_payment_provider', true, null, null);
        $this->addColumn('group_name', 'GroupName', 'VARCHAR', false, 255, null);
        $this->addColumn('is_active', 'IsActive', 'BOOLEAN', true, 1, true);
        $this->addColumn('is_hidden', 'IsHidden', 'BOOLEAN', true, 1, false);
        $this->addColumn('label_name', 'LabelName', 'VARCHAR', false, 255, null);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 255, null);
        $this->addColumn('payment_authorization_endpoint', 'PaymentAuthorizationEndpoint', 'VARCHAR', false, 1000, null);
        $this->addColumn('payment_method_key', 'PaymentMethodKey', 'VARCHAR', true, 255, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('SpyPaymentProvider', '\\Orm\\Zed\\Payment\\Persistence\\SpyPaymentProvider', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_payment_provider',
    1 => ':id_payment_provider',
  ),
), null, null, null, false);
        $this->addRelation('SpyPaymentMethodStore', '\\Orm\\Zed\\Payment\\Persistence\\SpyPaymentMethodStore', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_payment_method',
    1 => ':id_payment_method',
  ),
), null, null, 'SpyPaymentMethodStores', false);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdPaymentMethod', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdPaymentMethod', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdPaymentMethod', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdPaymentMethod', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdPaymentMethod', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdPaymentMethod', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdPaymentMethod', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyPaymentMethodTableMap::CLASS_DEFAULT : SpyPaymentMethodTableMap::OM_CLASS;
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
     * @return array           (SpyPaymentMethod object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SpyPaymentMethodTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyPaymentMethodTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyPaymentMethodTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyPaymentMethodTableMap::OM_CLASS;
            /** @var SpyPaymentMethod $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyPaymentMethodTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyPaymentMethodTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyPaymentMethodTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyPaymentMethod $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyPaymentMethodTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyPaymentMethodTableMap::COL_ID_PAYMENT_METHOD);
            $criteria->addSelectColumn(SpyPaymentMethodTableMap::COL_FK_PAYMENT_PROVIDER);
            $criteria->addSelectColumn(SpyPaymentMethodTableMap::COL_GROUP_NAME);
            $criteria->addSelectColumn(SpyPaymentMethodTableMap::COL_IS_ACTIVE);
            $criteria->addSelectColumn(SpyPaymentMethodTableMap::COL_IS_HIDDEN);
            $criteria->addSelectColumn(SpyPaymentMethodTableMap::COL_LABEL_NAME);
            $criteria->addSelectColumn(SpyPaymentMethodTableMap::COL_NAME);
            $criteria->addSelectColumn(SpyPaymentMethodTableMap::COL_PAYMENT_AUTHORIZATION_ENDPOINT);
            $criteria->addSelectColumn(SpyPaymentMethodTableMap::COL_PAYMENT_METHOD_KEY);
        } else {
            $criteria->addSelectColumn($alias . '.id_payment_method');
            $criteria->addSelectColumn($alias . '.fk_payment_provider');
            $criteria->addSelectColumn($alias . '.group_name');
            $criteria->addSelectColumn($alias . '.is_active');
            $criteria->addSelectColumn($alias . '.is_hidden');
            $criteria->addSelectColumn($alias . '.label_name');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.payment_authorization_endpoint');
            $criteria->addSelectColumn($alias . '.payment_method_key');
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
            $criteria->removeSelectColumn(SpyPaymentMethodTableMap::COL_ID_PAYMENT_METHOD);
            $criteria->removeSelectColumn(SpyPaymentMethodTableMap::COL_FK_PAYMENT_PROVIDER);
            $criteria->removeSelectColumn(SpyPaymentMethodTableMap::COL_GROUP_NAME);
            $criteria->removeSelectColumn(SpyPaymentMethodTableMap::COL_IS_ACTIVE);
            $criteria->removeSelectColumn(SpyPaymentMethodTableMap::COL_IS_HIDDEN);
            $criteria->removeSelectColumn(SpyPaymentMethodTableMap::COL_LABEL_NAME);
            $criteria->removeSelectColumn(SpyPaymentMethodTableMap::COL_NAME);
            $criteria->removeSelectColumn(SpyPaymentMethodTableMap::COL_PAYMENT_AUTHORIZATION_ENDPOINT);
            $criteria->removeSelectColumn(SpyPaymentMethodTableMap::COL_PAYMENT_METHOD_KEY);
        } else {
            $criteria->removeSelectColumn($alias . '.id_payment_method');
            $criteria->removeSelectColumn($alias . '.fk_payment_provider');
            $criteria->removeSelectColumn($alias . '.group_name');
            $criteria->removeSelectColumn($alias . '.is_active');
            $criteria->removeSelectColumn($alias . '.is_hidden');
            $criteria->removeSelectColumn($alias . '.label_name');
            $criteria->removeSelectColumn($alias . '.name');
            $criteria->removeSelectColumn($alias . '.payment_authorization_endpoint');
            $criteria->removeSelectColumn($alias . '.payment_method_key');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyPaymentMethodTableMap::DATABASE_NAME)->getTable(SpyPaymentMethodTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyPaymentMethod or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SpyPaymentMethod object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyPaymentMethodTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\Payment\Persistence\SpyPaymentMethod) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyPaymentMethodTableMap::DATABASE_NAME);
            $criteria->add(SpyPaymentMethodTableMap::COL_ID_PAYMENT_METHOD, (array) $values, Criteria::IN);
        }

        $query = SpyPaymentMethodQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyPaymentMethodTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyPaymentMethodTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_payment_method table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SpyPaymentMethodQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyPaymentMethod or Criteria object.
     *
     * @param mixed               $criteria Criteria or SpyPaymentMethod object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyPaymentMethodTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyPaymentMethod object
        }

        if ($criteria->containsKey(SpyPaymentMethodTableMap::COL_ID_PAYMENT_METHOD) && $criteria->keyContainsValue(SpyPaymentMethodTableMap::COL_ID_PAYMENT_METHOD) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpyPaymentMethodTableMap::COL_ID_PAYMENT_METHOD.')');
        }


        // Set the correct dbName
        $query = SpyPaymentMethodQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SpyPaymentMethodTableMap
