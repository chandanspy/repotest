<?php

namespace Orm\Zed\Sales\Persistence\Map;

use Orm\Zed\Sales\Persistence\SpySalesOrder;
use Orm\Zed\Sales\Persistence\SpySalesOrderQuery;
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
 * This class defines the structure of the 'spy_sales_order' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpySalesOrderTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.Orm.Zed.Sales.Persistence.Map.SpySalesOrderTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'spy_sales_order';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Orm\\Zed\\Sales\\Persistence\\SpySalesOrder';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'src.Orm.Zed.Sales.Persistence.SpySalesOrder';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 21;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 21;

    /**
     * the column name for the id_sales_order field
     */
    const COL_ID_SALES_ORDER = 'spy_sales_order.id_sales_order';

    /**
     * the column name for the fk_locale field
     */
    const COL_FK_LOCALE = 'spy_sales_order.fk_locale';

    /**
     * the column name for the fk_sales_order_address_billing field
     */
    const COL_FK_SALES_ORDER_ADDRESS_BILLING = 'spy_sales_order.fk_sales_order_address_billing';

    /**
     * the column name for the fk_sales_order_address_shipping field
     */
    const COL_FK_SALES_ORDER_ADDRESS_SHIPPING = 'spy_sales_order.fk_sales_order_address_shipping';

    /**
     * the column name for the cart_note field
     */
    const COL_CART_NOTE = 'spy_sales_order.cart_note';

    /**
     * the column name for the company_business_unit_uuid field
     */
    const COL_COMPANY_BUSINESS_UNIT_UUID = 'spy_sales_order.company_business_unit_uuid';

    /**
     * the column name for the company_uuid field
     */
    const COL_COMPANY_UUID = 'spy_sales_order.company_uuid';

    /**
     * the column name for the currency_iso_code field
     */
    const COL_CURRENCY_ISO_CODE = 'spy_sales_order.currency_iso_code';

    /**
     * the column name for the customer_reference field
     */
    const COL_CUSTOMER_REFERENCE = 'spy_sales_order.customer_reference';

    /**
     * the column name for the email field
     */
    const COL_EMAIL = 'spy_sales_order.email';

    /**
     * the column name for the first_name field
     */
    const COL_FIRST_NAME = 'spy_sales_order.first_name';

    /**
     * the column name for the is_test field
     */
    const COL_IS_TEST = 'spy_sales_order.is_test';

    /**
     * the column name for the last_name field
     */
    const COL_LAST_NAME = 'spy_sales_order.last_name';

    /**
     * the column name for the oms_processor_identifier field
     */
    const COL_OMS_PROCESSOR_IDENTIFIER = 'spy_sales_order.oms_processor_identifier';

    /**
     * the column name for the order_custom_reference field
     */
    const COL_ORDER_CUSTOM_REFERENCE = 'spy_sales_order.order_custom_reference';

    /**
     * the column name for the order_reference field
     */
    const COL_ORDER_REFERENCE = 'spy_sales_order.order_reference';

    /**
     * the column name for the price_mode field
     */
    const COL_PRICE_MODE = 'spy_sales_order.price_mode';

    /**
     * the column name for the salutation field
     */
    const COL_SALUTATION = 'spy_sales_order.salutation';

    /**
     * the column name for the store field
     */
    const COL_STORE = 'spy_sales_order.store';

    /**
     * the column name for the created_at field
     */
    const COL_CREATED_AT = 'spy_sales_order.created_at';

    /**
     * the column name for the updated_at field
     */
    const COL_UPDATED_AT = 'spy_sales_order.updated_at';

    /**
     * The default string format for model objects of the related table
     */
    const DEFAULT_STRING_FORMAT = 'YAML';

    /** The enumerated values for the price_mode field */
    const COL_PRICE_MODE_NET_MODE = 'NET_MODE';
    const COL_PRICE_MODE_GROSS_MODE = 'GROSS_MODE';

    /** The enumerated values for the salutation field */
    const COL_SALUTATION_MR = 'Mr';
    const COL_SALUTATION_MRS = 'Mrs';
    const COL_SALUTATION_DR = 'Dr';
    const COL_SALUTATION_MS = 'Ms';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        self::TYPE_PHPNAME       => array('IdSalesOrder', 'FkLocale', 'FkSalesOrderAddressBilling', 'FkSalesOrderAddressShipping', 'CartNote', 'CompanyBusinessUnitUuid', 'CompanyUuid', 'CurrencyIsoCode', 'CustomerReference', 'Email', 'FirstName', 'IsTest', 'LastName', 'OmsProcessorIdentifier', 'OrderCustomReference', 'OrderReference', 'PriceMode', 'Salutation', 'Store', 'CreatedAt', 'UpdatedAt', ),
        self::TYPE_CAMELNAME     => array('idSalesOrder', 'fkLocale', 'fkSalesOrderAddressBilling', 'fkSalesOrderAddressShipping', 'cartNote', 'companyBusinessUnitUuid', 'companyUuid', 'currencyIsoCode', 'customerReference', 'email', 'firstName', 'isTest', 'lastName', 'omsProcessorIdentifier', 'orderCustomReference', 'orderReference', 'priceMode', 'salutation', 'store', 'createdAt', 'updatedAt', ),
        self::TYPE_COLNAME       => array(SpySalesOrderTableMap::COL_ID_SALES_ORDER, SpySalesOrderTableMap::COL_FK_LOCALE, SpySalesOrderTableMap::COL_FK_SALES_ORDER_ADDRESS_BILLING, SpySalesOrderTableMap::COL_FK_SALES_ORDER_ADDRESS_SHIPPING, SpySalesOrderTableMap::COL_CART_NOTE, SpySalesOrderTableMap::COL_COMPANY_BUSINESS_UNIT_UUID, SpySalesOrderTableMap::COL_COMPANY_UUID, SpySalesOrderTableMap::COL_CURRENCY_ISO_CODE, SpySalesOrderTableMap::COL_CUSTOMER_REFERENCE, SpySalesOrderTableMap::COL_EMAIL, SpySalesOrderTableMap::COL_FIRST_NAME, SpySalesOrderTableMap::COL_IS_TEST, SpySalesOrderTableMap::COL_LAST_NAME, SpySalesOrderTableMap::COL_OMS_PROCESSOR_IDENTIFIER, SpySalesOrderTableMap::COL_ORDER_CUSTOM_REFERENCE, SpySalesOrderTableMap::COL_ORDER_REFERENCE, SpySalesOrderTableMap::COL_PRICE_MODE, SpySalesOrderTableMap::COL_SALUTATION, SpySalesOrderTableMap::COL_STORE, SpySalesOrderTableMap::COL_CREATED_AT, SpySalesOrderTableMap::COL_UPDATED_AT, ),
        self::TYPE_FIELDNAME     => array('id_sales_order', 'fk_locale', 'fk_sales_order_address_billing', 'fk_sales_order_address_shipping', 'cart_note', 'company_business_unit_uuid', 'company_uuid', 'currency_iso_code', 'customer_reference', 'email', 'first_name', 'is_test', 'last_name', 'oms_processor_identifier', 'order_custom_reference', 'order_reference', 'price_mode', 'salutation', 'store', 'created_at', 'updated_at', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('IdSalesOrder' => 0, 'FkLocale' => 1, 'FkSalesOrderAddressBilling' => 2, 'FkSalesOrderAddressShipping' => 3, 'CartNote' => 4, 'CompanyBusinessUnitUuid' => 5, 'CompanyUuid' => 6, 'CurrencyIsoCode' => 7, 'CustomerReference' => 8, 'Email' => 9, 'FirstName' => 10, 'IsTest' => 11, 'LastName' => 12, 'OmsProcessorIdentifier' => 13, 'OrderCustomReference' => 14, 'OrderReference' => 15, 'PriceMode' => 16, 'Salutation' => 17, 'Store' => 18, 'CreatedAt' => 19, 'UpdatedAt' => 20, ),
        self::TYPE_CAMELNAME     => array('idSalesOrder' => 0, 'fkLocale' => 1, 'fkSalesOrderAddressBilling' => 2, 'fkSalesOrderAddressShipping' => 3, 'cartNote' => 4, 'companyBusinessUnitUuid' => 5, 'companyUuid' => 6, 'currencyIsoCode' => 7, 'customerReference' => 8, 'email' => 9, 'firstName' => 10, 'isTest' => 11, 'lastName' => 12, 'omsProcessorIdentifier' => 13, 'orderCustomReference' => 14, 'orderReference' => 15, 'priceMode' => 16, 'salutation' => 17, 'store' => 18, 'createdAt' => 19, 'updatedAt' => 20, ),
        self::TYPE_COLNAME       => array(SpySalesOrderTableMap::COL_ID_SALES_ORDER => 0, SpySalesOrderTableMap::COL_FK_LOCALE => 1, SpySalesOrderTableMap::COL_FK_SALES_ORDER_ADDRESS_BILLING => 2, SpySalesOrderTableMap::COL_FK_SALES_ORDER_ADDRESS_SHIPPING => 3, SpySalesOrderTableMap::COL_CART_NOTE => 4, SpySalesOrderTableMap::COL_COMPANY_BUSINESS_UNIT_UUID => 5, SpySalesOrderTableMap::COL_COMPANY_UUID => 6, SpySalesOrderTableMap::COL_CURRENCY_ISO_CODE => 7, SpySalesOrderTableMap::COL_CUSTOMER_REFERENCE => 8, SpySalesOrderTableMap::COL_EMAIL => 9, SpySalesOrderTableMap::COL_FIRST_NAME => 10, SpySalesOrderTableMap::COL_IS_TEST => 11, SpySalesOrderTableMap::COL_LAST_NAME => 12, SpySalesOrderTableMap::COL_OMS_PROCESSOR_IDENTIFIER => 13, SpySalesOrderTableMap::COL_ORDER_CUSTOM_REFERENCE => 14, SpySalesOrderTableMap::COL_ORDER_REFERENCE => 15, SpySalesOrderTableMap::COL_PRICE_MODE => 16, SpySalesOrderTableMap::COL_SALUTATION => 17, SpySalesOrderTableMap::COL_STORE => 18, SpySalesOrderTableMap::COL_CREATED_AT => 19, SpySalesOrderTableMap::COL_UPDATED_AT => 20, ),
        self::TYPE_FIELDNAME     => array('id_sales_order' => 0, 'fk_locale' => 1, 'fk_sales_order_address_billing' => 2, 'fk_sales_order_address_shipping' => 3, 'cart_note' => 4, 'company_business_unit_uuid' => 5, 'company_uuid' => 6, 'currency_iso_code' => 7, 'customer_reference' => 8, 'email' => 9, 'first_name' => 10, 'is_test' => 11, 'last_name' => 12, 'oms_processor_identifier' => 13, 'order_custom_reference' => 14, 'order_reference' => 15, 'price_mode' => 16, 'salutation' => 17, 'store' => 18, 'created_at' => 19, 'updated_at' => 20, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [
        'IdSalesOrder' => 'ID_SALES_ORDER',
        'SpySalesOrder.IdSalesOrder' => 'ID_SALES_ORDER',
        'idSalesOrder' => 'ID_SALES_ORDER',
        'spySalesOrder.idSalesOrder' => 'ID_SALES_ORDER',
        'SpySalesOrderTableMap::COL_ID_SALES_ORDER' => 'ID_SALES_ORDER',
        'COL_ID_SALES_ORDER' => 'ID_SALES_ORDER',
        'id_sales_order' => 'ID_SALES_ORDER',
        'spy_sales_order.id_sales_order' => 'ID_SALES_ORDER',
        'FkLocale' => 'FK_LOCALE',
        'SpySalesOrder.FkLocale' => 'FK_LOCALE',
        'fkLocale' => 'FK_LOCALE',
        'spySalesOrder.fkLocale' => 'FK_LOCALE',
        'SpySalesOrderTableMap::COL_FK_LOCALE' => 'FK_LOCALE',
        'COL_FK_LOCALE' => 'FK_LOCALE',
        'fk_locale' => 'FK_LOCALE',
        'spy_sales_order.fk_locale' => 'FK_LOCALE',
        'FkSalesOrderAddressBilling' => 'FK_SALES_ORDER_ADDRESS_BILLING',
        'SpySalesOrder.FkSalesOrderAddressBilling' => 'FK_SALES_ORDER_ADDRESS_BILLING',
        'fkSalesOrderAddressBilling' => 'FK_SALES_ORDER_ADDRESS_BILLING',
        'spySalesOrder.fkSalesOrderAddressBilling' => 'FK_SALES_ORDER_ADDRESS_BILLING',
        'SpySalesOrderTableMap::COL_FK_SALES_ORDER_ADDRESS_BILLING' => 'FK_SALES_ORDER_ADDRESS_BILLING',
        'COL_FK_SALES_ORDER_ADDRESS_BILLING' => 'FK_SALES_ORDER_ADDRESS_BILLING',
        'fk_sales_order_address_billing' => 'FK_SALES_ORDER_ADDRESS_BILLING',
        'spy_sales_order.fk_sales_order_address_billing' => 'FK_SALES_ORDER_ADDRESS_BILLING',
        'FkSalesOrderAddressShipping' => 'FK_SALES_ORDER_ADDRESS_SHIPPING',
        'SpySalesOrder.FkSalesOrderAddressShipping' => 'FK_SALES_ORDER_ADDRESS_SHIPPING',
        'fkSalesOrderAddressShipping' => 'FK_SALES_ORDER_ADDRESS_SHIPPING',
        'spySalesOrder.fkSalesOrderAddressShipping' => 'FK_SALES_ORDER_ADDRESS_SHIPPING',
        'SpySalesOrderTableMap::COL_FK_SALES_ORDER_ADDRESS_SHIPPING' => 'FK_SALES_ORDER_ADDRESS_SHIPPING',
        'COL_FK_SALES_ORDER_ADDRESS_SHIPPING' => 'FK_SALES_ORDER_ADDRESS_SHIPPING',
        'fk_sales_order_address_shipping' => 'FK_SALES_ORDER_ADDRESS_SHIPPING',
        'spy_sales_order.fk_sales_order_address_shipping' => 'FK_SALES_ORDER_ADDRESS_SHIPPING',
        'CartNote' => 'CART_NOTE',
        'SpySalesOrder.CartNote' => 'CART_NOTE',
        'cartNote' => 'CART_NOTE',
        'spySalesOrder.cartNote' => 'CART_NOTE',
        'SpySalesOrderTableMap::COL_CART_NOTE' => 'CART_NOTE',
        'COL_CART_NOTE' => 'CART_NOTE',
        'cart_note' => 'CART_NOTE',
        'spy_sales_order.cart_note' => 'CART_NOTE',
        'CompanyBusinessUnitUuid' => 'COMPANY_BUSINESS_UNIT_UUID',
        'SpySalesOrder.CompanyBusinessUnitUuid' => 'COMPANY_BUSINESS_UNIT_UUID',
        'companyBusinessUnitUuid' => 'COMPANY_BUSINESS_UNIT_UUID',
        'spySalesOrder.companyBusinessUnitUuid' => 'COMPANY_BUSINESS_UNIT_UUID',
        'SpySalesOrderTableMap::COL_COMPANY_BUSINESS_UNIT_UUID' => 'COMPANY_BUSINESS_UNIT_UUID',
        'COL_COMPANY_BUSINESS_UNIT_UUID' => 'COMPANY_BUSINESS_UNIT_UUID',
        'company_business_unit_uuid' => 'COMPANY_BUSINESS_UNIT_UUID',
        'spy_sales_order.company_business_unit_uuid' => 'COMPANY_BUSINESS_UNIT_UUID',
        'CompanyUuid' => 'COMPANY_UUID',
        'SpySalesOrder.CompanyUuid' => 'COMPANY_UUID',
        'companyUuid' => 'COMPANY_UUID',
        'spySalesOrder.companyUuid' => 'COMPANY_UUID',
        'SpySalesOrderTableMap::COL_COMPANY_UUID' => 'COMPANY_UUID',
        'COL_COMPANY_UUID' => 'COMPANY_UUID',
        'company_uuid' => 'COMPANY_UUID',
        'spy_sales_order.company_uuid' => 'COMPANY_UUID',
        'CurrencyIsoCode' => 'CURRENCY_ISO_CODE',
        'SpySalesOrder.CurrencyIsoCode' => 'CURRENCY_ISO_CODE',
        'currencyIsoCode' => 'CURRENCY_ISO_CODE',
        'spySalesOrder.currencyIsoCode' => 'CURRENCY_ISO_CODE',
        'SpySalesOrderTableMap::COL_CURRENCY_ISO_CODE' => 'CURRENCY_ISO_CODE',
        'COL_CURRENCY_ISO_CODE' => 'CURRENCY_ISO_CODE',
        'currency_iso_code' => 'CURRENCY_ISO_CODE',
        'spy_sales_order.currency_iso_code' => 'CURRENCY_ISO_CODE',
        'CustomerReference' => 'CUSTOMER_REFERENCE',
        'SpySalesOrder.CustomerReference' => 'CUSTOMER_REFERENCE',
        'customerReference' => 'CUSTOMER_REFERENCE',
        'spySalesOrder.customerReference' => 'CUSTOMER_REFERENCE',
        'SpySalesOrderTableMap::COL_CUSTOMER_REFERENCE' => 'CUSTOMER_REFERENCE',
        'COL_CUSTOMER_REFERENCE' => 'CUSTOMER_REFERENCE',
        'customer_reference' => 'CUSTOMER_REFERENCE',
        'spy_sales_order.customer_reference' => 'CUSTOMER_REFERENCE',
        'Email' => 'EMAIL',
        'SpySalesOrder.Email' => 'EMAIL',
        'email' => 'EMAIL',
        'spySalesOrder.email' => 'EMAIL',
        'SpySalesOrderTableMap::COL_EMAIL' => 'EMAIL',
        'COL_EMAIL' => 'EMAIL',
        'spy_sales_order.email' => 'EMAIL',
        'FirstName' => 'FIRST_NAME',
        'SpySalesOrder.FirstName' => 'FIRST_NAME',
        'firstName' => 'FIRST_NAME',
        'spySalesOrder.firstName' => 'FIRST_NAME',
        'SpySalesOrderTableMap::COL_FIRST_NAME' => 'FIRST_NAME',
        'COL_FIRST_NAME' => 'FIRST_NAME',
        'first_name' => 'FIRST_NAME',
        'spy_sales_order.first_name' => 'FIRST_NAME',
        'IsTest' => 'IS_TEST',
        'SpySalesOrder.IsTest' => 'IS_TEST',
        'isTest' => 'IS_TEST',
        'spySalesOrder.isTest' => 'IS_TEST',
        'SpySalesOrderTableMap::COL_IS_TEST' => 'IS_TEST',
        'COL_IS_TEST' => 'IS_TEST',
        'is_test' => 'IS_TEST',
        'spy_sales_order.is_test' => 'IS_TEST',
        'LastName' => 'LAST_NAME',
        'SpySalesOrder.LastName' => 'LAST_NAME',
        'lastName' => 'LAST_NAME',
        'spySalesOrder.lastName' => 'LAST_NAME',
        'SpySalesOrderTableMap::COL_LAST_NAME' => 'LAST_NAME',
        'COL_LAST_NAME' => 'LAST_NAME',
        'last_name' => 'LAST_NAME',
        'spy_sales_order.last_name' => 'LAST_NAME',
        'OmsProcessorIdentifier' => 'OMS_PROCESSOR_IDENTIFIER',
        'SpySalesOrder.OmsProcessorIdentifier' => 'OMS_PROCESSOR_IDENTIFIER',
        'omsProcessorIdentifier' => 'OMS_PROCESSOR_IDENTIFIER',
        'spySalesOrder.omsProcessorIdentifier' => 'OMS_PROCESSOR_IDENTIFIER',
        'SpySalesOrderTableMap::COL_OMS_PROCESSOR_IDENTIFIER' => 'OMS_PROCESSOR_IDENTIFIER',
        'COL_OMS_PROCESSOR_IDENTIFIER' => 'OMS_PROCESSOR_IDENTIFIER',
        'oms_processor_identifier' => 'OMS_PROCESSOR_IDENTIFIER',
        'spy_sales_order.oms_processor_identifier' => 'OMS_PROCESSOR_IDENTIFIER',
        'OrderCustomReference' => 'ORDER_CUSTOM_REFERENCE',
        'SpySalesOrder.OrderCustomReference' => 'ORDER_CUSTOM_REFERENCE',
        'orderCustomReference' => 'ORDER_CUSTOM_REFERENCE',
        'spySalesOrder.orderCustomReference' => 'ORDER_CUSTOM_REFERENCE',
        'SpySalesOrderTableMap::COL_ORDER_CUSTOM_REFERENCE' => 'ORDER_CUSTOM_REFERENCE',
        'COL_ORDER_CUSTOM_REFERENCE' => 'ORDER_CUSTOM_REFERENCE',
        'order_custom_reference' => 'ORDER_CUSTOM_REFERENCE',
        'spy_sales_order.order_custom_reference' => 'ORDER_CUSTOM_REFERENCE',
        'OrderReference' => 'ORDER_REFERENCE',
        'SpySalesOrder.OrderReference' => 'ORDER_REFERENCE',
        'orderReference' => 'ORDER_REFERENCE',
        'spySalesOrder.orderReference' => 'ORDER_REFERENCE',
        'SpySalesOrderTableMap::COL_ORDER_REFERENCE' => 'ORDER_REFERENCE',
        'COL_ORDER_REFERENCE' => 'ORDER_REFERENCE',
        'order_reference' => 'ORDER_REFERENCE',
        'spy_sales_order.order_reference' => 'ORDER_REFERENCE',
        'PriceMode' => 'PRICE_MODE',
        'SpySalesOrder.PriceMode' => 'PRICE_MODE',
        'priceMode' => 'PRICE_MODE',
        'spySalesOrder.priceMode' => 'PRICE_MODE',
        'SpySalesOrderTableMap::COL_PRICE_MODE' => 'PRICE_MODE',
        'COL_PRICE_MODE' => 'PRICE_MODE',
        'price_mode' => 'PRICE_MODE',
        'spy_sales_order.price_mode' => 'PRICE_MODE',
        'Salutation' => 'SALUTATION',
        'SpySalesOrder.Salutation' => 'SALUTATION',
        'salutation' => 'SALUTATION',
        'spySalesOrder.salutation' => 'SALUTATION',
        'SpySalesOrderTableMap::COL_SALUTATION' => 'SALUTATION',
        'COL_SALUTATION' => 'SALUTATION',
        'spy_sales_order.salutation' => 'SALUTATION',
        'Store' => 'STORE',
        'SpySalesOrder.Store' => 'STORE',
        'store' => 'STORE',
        'spySalesOrder.store' => 'STORE',
        'SpySalesOrderTableMap::COL_STORE' => 'STORE',
        'COL_STORE' => 'STORE',
        'spy_sales_order.store' => 'STORE',
        'CreatedAt' => 'CREATED_AT',
        'SpySalesOrder.CreatedAt' => 'CREATED_AT',
        'createdAt' => 'CREATED_AT',
        'spySalesOrder.createdAt' => 'CREATED_AT',
        'SpySalesOrderTableMap::COL_CREATED_AT' => 'CREATED_AT',
        'COL_CREATED_AT' => 'CREATED_AT',
        'created_at' => 'CREATED_AT',
        'spy_sales_order.created_at' => 'CREATED_AT',
        'UpdatedAt' => 'UPDATED_AT',
        'SpySalesOrder.UpdatedAt' => 'UPDATED_AT',
        'updatedAt' => 'UPDATED_AT',
        'spySalesOrder.updatedAt' => 'UPDATED_AT',
        'SpySalesOrderTableMap::COL_UPDATED_AT' => 'UPDATED_AT',
        'COL_UPDATED_AT' => 'UPDATED_AT',
        'updated_at' => 'UPDATED_AT',
        'spy_sales_order.updated_at' => 'UPDATED_AT',
    ];

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
                SpySalesOrderTableMap::COL_PRICE_MODE => array(
                            self::COL_PRICE_MODE_NET_MODE,
            self::COL_PRICE_MODE_GROSS_MODE,
        ),
                SpySalesOrderTableMap::COL_SALUTATION => array(
                            self::COL_SALUTATION_MR,
            self::COL_SALUTATION_MRS,
            self::COL_SALUTATION_DR,
            self::COL_SALUTATION_MS,
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
        $this->setName('spy_sales_order');
        $this->setPhpName('SpySalesOrder');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Orm\\Zed\\Sales\\Persistence\\SpySalesOrder');
        $this->setPackage('src.Orm.Zed.Sales.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_sales_order_pk_seq');
        // columns
        $this->addPrimaryKey('id_sales_order', 'IdSalesOrder', 'INTEGER', true, null, null);
        $this->addForeignKey('fk_locale', 'FkLocale', 'INTEGER', 'spy_locale', 'id_locale', false, null, null);
        $this->addForeignKey('fk_sales_order_address_billing', 'FkSalesOrderAddressBilling', 'INTEGER', 'spy_sales_order_address', 'id_sales_order_address', true, null, null);
        $this->addForeignKey('fk_sales_order_address_shipping', 'FkSalesOrderAddressShipping', 'INTEGER', 'spy_sales_order_address', 'id_sales_order_address', false, null, null);
        $this->addColumn('cart_note', 'CartNote', 'VARCHAR', false, 255, null);
        $this->addColumn('company_business_unit_uuid', 'CompanyBusinessUnitUuid', 'VARCHAR', false, 36, null);
        $this->addColumn('company_uuid', 'CompanyUuid', 'VARCHAR', false, 36, null);
        $this->addColumn('currency_iso_code', 'CurrencyIsoCode', 'VARCHAR', false, 5, null);
        $this->addColumn('customer_reference', 'CustomerReference', 'VARCHAR', false, 255, null);
        $this->addColumn('email', 'Email', 'VARCHAR', false, 255, null);
        $this->addColumn('first_name', 'FirstName', 'VARCHAR', false, 100, null);
        $this->addColumn('is_test', 'IsTest', 'BOOLEAN', true, 1, false);
        $this->addColumn('last_name', 'LastName', 'VARCHAR', false, 100, null);
        $this->addColumn('oms_processor_identifier', 'OmsProcessorIdentifier', 'TINYINT', false, null, null);
        $this->addColumn('order_custom_reference', 'OrderCustomReference', 'VARCHAR', false, 255, null);
        $this->addColumn('order_reference', 'OrderReference', 'VARCHAR', true, 45, null);
        $this->addColumn('price_mode', 'PriceMode', 'ENUM', false, null, null);
        $this->getColumn('price_mode')->setValueSet(array (
  0 => 'NET_MODE',
  1 => 'GROSS_MODE',
));
        $this->addColumn('salutation', 'Salutation', 'ENUM', false, null, null);
        $this->getColumn('salutation')->setValueSet(array (
  0 => 'Mr',
  1 => 'Mrs',
  2 => 'Dr',
  3 => 'Ms',
));
        $this->addColumn('store', 'Store', 'VARCHAR', false, 255, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', false, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('BillingAddress', '\\Orm\\Zed\\Sales\\Persistence\\SpySalesOrderAddress', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_sales_order_address_billing',
    1 => ':id_sales_order_address',
  ),
), null, null, null, false);
        $this->addRelation('ShippingAddress', '\\Orm\\Zed\\Sales\\Persistence\\SpySalesOrderAddress', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_sales_order_address_shipping',
    1 => ':id_sales_order_address',
  ),
), null, null, null, false);
        $this->addRelation('Locale', '\\Orm\\Zed\\Locale\\Persistence\\SpyLocale', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_locale',
    1 => ':id_locale',
  ),
), null, null, null, false);
        $this->addRelation('TransitionLog', '\\Orm\\Zed\\Oms\\Persistence\\SpyOmsTransitionLog', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_sales_order',
    1 => ':id_sales_order',
  ),
), null, null, 'TransitionLogs', false);
        $this->addRelation('SpyRefund', '\\Orm\\Zed\\Refund\\Persistence\\SpyRefund', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_sales_order',
    1 => ':id_sales_order',
  ),
), null, null, 'SpyRefunds', false);
        $this->addRelation('Item', '\\Orm\\Zed\\Sales\\Persistence\\SpySalesOrderItem', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_sales_order',
    1 => ':id_sales_order',
  ),
), null, null, 'Items', false);
        $this->addRelation('Discount', '\\Orm\\Zed\\Sales\\Persistence\\SpySalesDiscount', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_sales_order',
    1 => ':id_sales_order',
  ),
), null, null, 'Discounts', false);
        $this->addRelation('OrderTotal', '\\Orm\\Zed\\Sales\\Persistence\\SpySalesOrderTotals', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_sales_order',
    1 => ':id_sales_order',
  ),
), null, null, 'OrderTotals', false);
        $this->addRelation('Note', '\\Orm\\Zed\\Sales\\Persistence\\SpySalesOrderNote', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_sales_order',
    1 => ':id_sales_order',
  ),
), null, null, 'Notes', false);
        $this->addRelation('OrderComment', '\\Orm\\Zed\\Sales\\Persistence\\SpySalesOrderComment', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_sales_order',
    1 => ':id_sales_order',
  ),
), null, null, 'OrderComments', false);
        $this->addRelation('Expense', '\\Orm\\Zed\\Sales\\Persistence\\SpySalesExpense', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_sales_order',
    1 => ':id_sales_order',
  ),
), null, null, 'Expenses', false);
        $this->addRelation('SpySalesShipment', '\\Orm\\Zed\\Sales\\Persistence\\SpySalesShipment', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_sales_order',
    1 => ':id_sales_order',
  ),
), null, null, 'SpySalesShipments', false);
        $this->addRelation('SpySalesOrderInvoice', '\\Orm\\Zed\\SalesInvoice\\Persistence\\SpySalesOrderInvoice', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_sales_order',
    1 => ':id_sales_order',
  ),
), null, null, 'SpySalesOrderInvoices', false);
        $this->addRelation('Order', '\\Orm\\Zed\\Payment\\Persistence\\SpySalesPayment', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_sales_order',
    1 => ':id_sales_order',
  ),
), null, null, 'Orders', false);
        $this->addRelation('Reclamation', '\\Orm\\Zed\\SalesReclamation\\Persistence\\SpySalesReclamation', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_sales_order',
    1 => ':id_sales_order',
  ),
), null, null, 'Reclamations', false);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesOrder', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesOrder', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesOrder', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesOrder', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesOrder', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesOrder', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdSalesOrder', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpySalesOrderTableMap::CLASS_DEFAULT : SpySalesOrderTableMap::OM_CLASS;
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
     * @return array           (SpySalesOrder object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SpySalesOrderTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpySalesOrderTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpySalesOrderTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpySalesOrderTableMap::OM_CLASS;
            /** @var SpySalesOrder $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpySalesOrderTableMap::addInstanceToPool($obj, $key);
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
            $key = SpySalesOrderTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpySalesOrderTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpySalesOrder $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpySalesOrderTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpySalesOrderTableMap::COL_ID_SALES_ORDER);
            $criteria->addSelectColumn(SpySalesOrderTableMap::COL_FK_LOCALE);
            $criteria->addSelectColumn(SpySalesOrderTableMap::COL_FK_SALES_ORDER_ADDRESS_BILLING);
            $criteria->addSelectColumn(SpySalesOrderTableMap::COL_FK_SALES_ORDER_ADDRESS_SHIPPING);
            $criteria->addSelectColumn(SpySalesOrderTableMap::COL_CART_NOTE);
            $criteria->addSelectColumn(SpySalesOrderTableMap::COL_COMPANY_BUSINESS_UNIT_UUID);
            $criteria->addSelectColumn(SpySalesOrderTableMap::COL_COMPANY_UUID);
            $criteria->addSelectColumn(SpySalesOrderTableMap::COL_CURRENCY_ISO_CODE);
            $criteria->addSelectColumn(SpySalesOrderTableMap::COL_CUSTOMER_REFERENCE);
            $criteria->addSelectColumn(SpySalesOrderTableMap::COL_EMAIL);
            $criteria->addSelectColumn(SpySalesOrderTableMap::COL_FIRST_NAME);
            $criteria->addSelectColumn(SpySalesOrderTableMap::COL_IS_TEST);
            $criteria->addSelectColumn(SpySalesOrderTableMap::COL_LAST_NAME);
            $criteria->addSelectColumn(SpySalesOrderTableMap::COL_OMS_PROCESSOR_IDENTIFIER);
            $criteria->addSelectColumn(SpySalesOrderTableMap::COL_ORDER_CUSTOM_REFERENCE);
            $criteria->addSelectColumn(SpySalesOrderTableMap::COL_ORDER_REFERENCE);
            $criteria->addSelectColumn(SpySalesOrderTableMap::COL_PRICE_MODE);
            $criteria->addSelectColumn(SpySalesOrderTableMap::COL_SALUTATION);
            $criteria->addSelectColumn(SpySalesOrderTableMap::COL_STORE);
            $criteria->addSelectColumn(SpySalesOrderTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(SpySalesOrderTableMap::COL_UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id_sales_order');
            $criteria->addSelectColumn($alias . '.fk_locale');
            $criteria->addSelectColumn($alias . '.fk_sales_order_address_billing');
            $criteria->addSelectColumn($alias . '.fk_sales_order_address_shipping');
            $criteria->addSelectColumn($alias . '.cart_note');
            $criteria->addSelectColumn($alias . '.company_business_unit_uuid');
            $criteria->addSelectColumn($alias . '.company_uuid');
            $criteria->addSelectColumn($alias . '.currency_iso_code');
            $criteria->addSelectColumn($alias . '.customer_reference');
            $criteria->addSelectColumn($alias . '.email');
            $criteria->addSelectColumn($alias . '.first_name');
            $criteria->addSelectColumn($alias . '.is_test');
            $criteria->addSelectColumn($alias . '.last_name');
            $criteria->addSelectColumn($alias . '.oms_processor_identifier');
            $criteria->addSelectColumn($alias . '.order_custom_reference');
            $criteria->addSelectColumn($alias . '.order_reference');
            $criteria->addSelectColumn($alias . '.price_mode');
            $criteria->addSelectColumn($alias . '.salutation');
            $criteria->addSelectColumn($alias . '.store');
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
            $criteria->removeSelectColumn(SpySalesOrderTableMap::COL_ID_SALES_ORDER);
            $criteria->removeSelectColumn(SpySalesOrderTableMap::COL_FK_LOCALE);
            $criteria->removeSelectColumn(SpySalesOrderTableMap::COL_FK_SALES_ORDER_ADDRESS_BILLING);
            $criteria->removeSelectColumn(SpySalesOrderTableMap::COL_FK_SALES_ORDER_ADDRESS_SHIPPING);
            $criteria->removeSelectColumn(SpySalesOrderTableMap::COL_CART_NOTE);
            $criteria->removeSelectColumn(SpySalesOrderTableMap::COL_COMPANY_BUSINESS_UNIT_UUID);
            $criteria->removeSelectColumn(SpySalesOrderTableMap::COL_COMPANY_UUID);
            $criteria->removeSelectColumn(SpySalesOrderTableMap::COL_CURRENCY_ISO_CODE);
            $criteria->removeSelectColumn(SpySalesOrderTableMap::COL_CUSTOMER_REFERENCE);
            $criteria->removeSelectColumn(SpySalesOrderTableMap::COL_EMAIL);
            $criteria->removeSelectColumn(SpySalesOrderTableMap::COL_FIRST_NAME);
            $criteria->removeSelectColumn(SpySalesOrderTableMap::COL_IS_TEST);
            $criteria->removeSelectColumn(SpySalesOrderTableMap::COL_LAST_NAME);
            $criteria->removeSelectColumn(SpySalesOrderTableMap::COL_OMS_PROCESSOR_IDENTIFIER);
            $criteria->removeSelectColumn(SpySalesOrderTableMap::COL_ORDER_CUSTOM_REFERENCE);
            $criteria->removeSelectColumn(SpySalesOrderTableMap::COL_ORDER_REFERENCE);
            $criteria->removeSelectColumn(SpySalesOrderTableMap::COL_PRICE_MODE);
            $criteria->removeSelectColumn(SpySalesOrderTableMap::COL_SALUTATION);
            $criteria->removeSelectColumn(SpySalesOrderTableMap::COL_STORE);
            $criteria->removeSelectColumn(SpySalesOrderTableMap::COL_CREATED_AT);
            $criteria->removeSelectColumn(SpySalesOrderTableMap::COL_UPDATED_AT);
        } else {
            $criteria->removeSelectColumn($alias . '.id_sales_order');
            $criteria->removeSelectColumn($alias . '.fk_locale');
            $criteria->removeSelectColumn($alias . '.fk_sales_order_address_billing');
            $criteria->removeSelectColumn($alias . '.fk_sales_order_address_shipping');
            $criteria->removeSelectColumn($alias . '.cart_note');
            $criteria->removeSelectColumn($alias . '.company_business_unit_uuid');
            $criteria->removeSelectColumn($alias . '.company_uuid');
            $criteria->removeSelectColumn($alias . '.currency_iso_code');
            $criteria->removeSelectColumn($alias . '.customer_reference');
            $criteria->removeSelectColumn($alias . '.email');
            $criteria->removeSelectColumn($alias . '.first_name');
            $criteria->removeSelectColumn($alias . '.is_test');
            $criteria->removeSelectColumn($alias . '.last_name');
            $criteria->removeSelectColumn($alias . '.oms_processor_identifier');
            $criteria->removeSelectColumn($alias . '.order_custom_reference');
            $criteria->removeSelectColumn($alias . '.order_reference');
            $criteria->removeSelectColumn($alias . '.price_mode');
            $criteria->removeSelectColumn($alias . '.salutation');
            $criteria->removeSelectColumn($alias . '.store');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpySalesOrderTableMap::DATABASE_NAME)->getTable(SpySalesOrderTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpySalesOrder or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SpySalesOrder object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpySalesOrderTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\Sales\Persistence\SpySalesOrder) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpySalesOrderTableMap::DATABASE_NAME);
            $criteria->add(SpySalesOrderTableMap::COL_ID_SALES_ORDER, (array) $values, Criteria::IN);
        }

        $query = SpySalesOrderQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpySalesOrderTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpySalesOrderTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_sales_order table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SpySalesOrderQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpySalesOrder or Criteria object.
     *
     * @param mixed               $criteria Criteria or SpySalesOrder object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpySalesOrderTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpySalesOrder object
        }

        if ($criteria->containsKey(SpySalesOrderTableMap::COL_ID_SALES_ORDER) && $criteria->keyContainsValue(SpySalesOrderTableMap::COL_ID_SALES_ORDER) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpySalesOrderTableMap::COL_ID_SALES_ORDER.')');
        }


        // Set the correct dbName
        $query = SpySalesOrderQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SpySalesOrderTableMap
