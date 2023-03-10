<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class StoreTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const AVAILABLE_CURRENCY_ISO_CODES = 'availableCurrencyIsoCodes';

    /**
     * @var string
     */
    public const COUNTRIES = 'countries';

    /**
     * @var string
     */
    public const TIMEZONE = 'timezone';

    /**
     * @var string
     */
    public const STORE_REFERENCE = 'storeReference';

    /**
     * @var string
     */
    public const ID_STORE = 'idStore';

    /**
     * @var string
     */
    public const STORES_WITH_SHARED_PERSISTENCE = 'storesWithSharedPersistence';

    /**
     * @var string
     */
    public const DEFAULT_CURRENCY_ISO_CODE = 'defaultCurrencyIsoCode';

    /**
     * @var string
     */
    public const AVAILABLE_LOCALE_ISO_CODES = 'availableLocaleIsoCodes';

    /**
     * @var string
     */
    public const SELECTED_CURRENCY_ISO_CODE = 'selectedCurrencyIsoCode';

    /**
     * @var string
     */
    public const QUEUE_POOLS = 'queuePools';

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var array
     */
    protected $availableCurrencyIsoCodes = [];

    /**
     * @var array
     */
    protected $countries = [];

    /**
     * @var string|null
     */
    protected $timezone;

    /**
     * @var string|null
     */
    protected $storeReference;

    /**
     * @var int|null
     */
    protected $idStore;

    /**
     * @var array
     */
    protected $storesWithSharedPersistence = [];

    /**
     * @var string|null
     */
    protected $defaultCurrencyIsoCode;

    /**
     * @var array
     */
    protected $availableLocaleIsoCodes = [];

    /**
     * @var string|null
     */
    protected $selectedCurrencyIsoCode;

    /**
     * @var array
     */
    protected $queuePools = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'name' => 'name',
        'Name' => 'name',
        'available_currency_iso_codes' => 'availableCurrencyIsoCodes',
        'availableCurrencyIsoCodes' => 'availableCurrencyIsoCodes',
        'AvailableCurrencyIsoCodes' => 'availableCurrencyIsoCodes',
        'countries' => 'countries',
        'Countries' => 'countries',
        'timezone' => 'timezone',
        'Timezone' => 'timezone',
        'store_reference' => 'storeReference',
        'storeReference' => 'storeReference',
        'StoreReference' => 'storeReference',
        'id_store' => 'idStore',
        'idStore' => 'idStore',
        'IdStore' => 'idStore',
        'stores_with_shared_persistence' => 'storesWithSharedPersistence',
        'storesWithSharedPersistence' => 'storesWithSharedPersistence',
        'StoresWithSharedPersistence' => 'storesWithSharedPersistence',
        'default_currency_iso_code' => 'defaultCurrencyIsoCode',
        'defaultCurrencyIsoCode' => 'defaultCurrencyIsoCode',
        'DefaultCurrencyIsoCode' => 'defaultCurrencyIsoCode',
        'available_locale_iso_codes' => 'availableLocaleIsoCodes',
        'availableLocaleIsoCodes' => 'availableLocaleIsoCodes',
        'AvailableLocaleIsoCodes' => 'availableLocaleIsoCodes',
        'selected_currency_iso_code' => 'selectedCurrencyIsoCode',
        'selectedCurrencyIsoCode' => 'selectedCurrencyIsoCode',
        'SelectedCurrencyIsoCode' => 'selectedCurrencyIsoCode',
        'queue_pools' => 'queuePools',
        'queuePools' => 'queuePools',
        'QueuePools' => 'queuePools',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AVAILABLE_CURRENCY_ISO_CODES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'available_currency_iso_codes',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COUNTRIES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'countries',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TIMEZONE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'timezone',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORE_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'store_reference',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_STORE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_store',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORES_WITH_SHARED_PERSISTENCE => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'stores_with_shared_persistence',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DEFAULT_CURRENCY_ISO_CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'default_currency_iso_code',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AVAILABLE_LOCALE_ISO_CODES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'available_locale_iso_codes',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SELECTED_CURRENCY_ISO_CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'selected_currency_iso_code',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::QUEUE_POOLS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'queue_pools',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module AssetWidget|CatalogPage|CategoryWidget|CmsBlockWidget|CompanyPage|ProductCategoryWidget|ProductLabelWidget|ProductRelationWidget|SalesReturnPage|AppCatalogGui|AssetStorage|Asset|AvailabilityCartConnector|AvailabilityGui|AvailabilityNotification|AvailabilityNotificationsRestApi|AvailabilityStorage|Availability|Calculation|CartsRestApi|CategoriesRestApi|CategoryPageSearch|CategoryStorage|CheckoutRestApi|CmsBlockGui|CmsBlockStorage|CmsGui|CmsPagesContentBannersResourceRelationship|CmsPagesContentProductAbstractListsResourceRelationship|CmsPagesRestApi|CmsSlotBlockGui|CmsSlotStoreConnector|CmsStorage|Collector|ContentProductAbstractListsRestApi|Currency|Customer|Discount|Http|MerchantGui|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|Merchant|MessageBrokerAws|MessageBroker|Money|Monitoring|Oms|Payment|PriceCartConnector|PriceProductMerchantRelationshipStorage|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProduct|ProductBundle|ProductCartConnector|ProductCategoryStorage|ProductLabelSearch|ProductLabelStorage|ProductManagement|ProductMeasurementUnitStorage|ProductMeasurementUnit|ProductOptionStorage|ProductPackagingUnit|ProductPageSearch|ProductRelationStorage|ProductSearch|ProductStorage|ProductsCategoriesResourceRelationship|ProductsRestApi|QuoteApproval|Quote|RelatedProductsRestApi|RestRequestValidator|SalesOrderThresholdGui|SalesOrderThreshold|Sales|SearchElasticsearch|Search|ShipmentDataImport|Shipment|ShoppingList|Stock|Storage|StoreGui|StoreReference|Store|StoresRestApi|UrlStorage
     *
     * @param string|null $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        $this->modifiedProperties[self::NAME] = true;

        return $this;
    }

    /**
     * @module AssetWidget|CatalogPage|CategoryWidget|CmsBlockWidget|CompanyPage|ProductCategoryWidget|ProductLabelWidget|ProductRelationWidget|SalesReturnPage|AppCatalogGui|AssetStorage|Asset|AvailabilityCartConnector|AvailabilityGui|AvailabilityNotification|AvailabilityNotificationsRestApi|AvailabilityStorage|Availability|Calculation|CartsRestApi|CategoriesRestApi|CategoryPageSearch|CategoryStorage|CheckoutRestApi|CmsBlockGui|CmsBlockStorage|CmsGui|CmsPagesContentBannersResourceRelationship|CmsPagesContentProductAbstractListsResourceRelationship|CmsPagesRestApi|CmsSlotBlockGui|CmsSlotStoreConnector|CmsStorage|Collector|ContentProductAbstractListsRestApi|Currency|Customer|Discount|Http|MerchantGui|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|Merchant|MessageBrokerAws|MessageBroker|Money|Monitoring|Oms|Payment|PriceCartConnector|PriceProductMerchantRelationshipStorage|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProduct|ProductBundle|ProductCartConnector|ProductCategoryStorage|ProductLabelSearch|ProductLabelStorage|ProductManagement|ProductMeasurementUnitStorage|ProductMeasurementUnit|ProductOptionStorage|ProductPackagingUnit|ProductPageSearch|ProductRelationStorage|ProductSearch|ProductStorage|ProductsCategoriesResourceRelationship|ProductsRestApi|QuoteApproval|Quote|RelatedProductsRestApi|RestRequestValidator|SalesOrderThresholdGui|SalesOrderThreshold|Sales|SearchElasticsearch|Search|ShipmentDataImport|Shipment|ShoppingList|Stock|Storage|StoreGui|StoreReference|Store|StoresRestApi|UrlStorage
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module AssetWidget|CatalogPage|CategoryWidget|CmsBlockWidget|CompanyPage|ProductCategoryWidget|ProductLabelWidget|ProductRelationWidget|SalesReturnPage|AppCatalogGui|AssetStorage|Asset|AvailabilityCartConnector|AvailabilityGui|AvailabilityNotification|AvailabilityNotificationsRestApi|AvailabilityStorage|Availability|Calculation|CartsRestApi|CategoriesRestApi|CategoryPageSearch|CategoryStorage|CheckoutRestApi|CmsBlockGui|CmsBlockStorage|CmsGui|CmsPagesContentBannersResourceRelationship|CmsPagesContentProductAbstractListsResourceRelationship|CmsPagesRestApi|CmsSlotBlockGui|CmsSlotStoreConnector|CmsStorage|Collector|ContentProductAbstractListsRestApi|Currency|Customer|Discount|Http|MerchantGui|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|Merchant|MessageBrokerAws|MessageBroker|Money|Monitoring|Oms|Payment|PriceCartConnector|PriceProductMerchantRelationshipStorage|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProduct|ProductBundle|ProductCartConnector|ProductCategoryStorage|ProductLabelSearch|ProductLabelStorage|ProductManagement|ProductMeasurementUnitStorage|ProductMeasurementUnit|ProductOptionStorage|ProductPackagingUnit|ProductPageSearch|ProductRelationStorage|ProductSearch|ProductStorage|ProductsCategoriesResourceRelationship|ProductsRestApi|QuoteApproval|Quote|RelatedProductsRestApi|RestRequestValidator|SalesOrderThresholdGui|SalesOrderThreshold|Sales|SearchElasticsearch|Search|ShipmentDataImport|Shipment|ShoppingList|Stock|Storage|StoreGui|StoreReference|Store|StoresRestApi|UrlStorage
     *
     * @param string|null $name
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNameOrFail($name)
    {
        if ($name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->setName($name);
    }

    /**
     * @module AssetWidget|CatalogPage|CategoryWidget|CmsBlockWidget|CompanyPage|ProductCategoryWidget|ProductLabelWidget|ProductRelationWidget|SalesReturnPage|AppCatalogGui|AssetStorage|Asset|AvailabilityCartConnector|AvailabilityGui|AvailabilityNotification|AvailabilityNotificationsRestApi|AvailabilityStorage|Availability|Calculation|CartsRestApi|CategoriesRestApi|CategoryPageSearch|CategoryStorage|CheckoutRestApi|CmsBlockGui|CmsBlockStorage|CmsGui|CmsPagesContentBannersResourceRelationship|CmsPagesContentProductAbstractListsResourceRelationship|CmsPagesRestApi|CmsSlotBlockGui|CmsSlotStoreConnector|CmsStorage|Collector|ContentProductAbstractListsRestApi|Currency|Customer|Discount|Http|MerchantGui|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|Merchant|MessageBrokerAws|MessageBroker|Money|Monitoring|Oms|Payment|PriceCartConnector|PriceProductMerchantRelationshipStorage|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProduct|ProductBundle|ProductCartConnector|ProductCategoryStorage|ProductLabelSearch|ProductLabelStorage|ProductManagement|ProductMeasurementUnitStorage|ProductMeasurementUnit|ProductOptionStorage|ProductPackagingUnit|ProductPageSearch|ProductRelationStorage|ProductSearch|ProductStorage|ProductsCategoriesResourceRelationship|ProductsRestApi|QuoteApproval|Quote|RelatedProductsRestApi|RestRequestValidator|SalesOrderThresholdGui|SalesOrderThreshold|Sales|SearchElasticsearch|Search|ShipmentDataImport|Shipment|ShoppingList|Stock|Storage|StoreGui|StoreReference|Store|StoresRestApi|UrlStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNameOrFail()
    {
        if ($this->name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->name;
    }

    /**
     * @module AssetWidget|CatalogPage|CategoryWidget|CmsBlockWidget|CompanyPage|ProductCategoryWidget|ProductLabelWidget|ProductRelationWidget|SalesReturnPage|AppCatalogGui|AssetStorage|Asset|AvailabilityCartConnector|AvailabilityGui|AvailabilityNotification|AvailabilityNotificationsRestApi|AvailabilityStorage|Availability|Calculation|CartsRestApi|CategoriesRestApi|CategoryPageSearch|CategoryStorage|CheckoutRestApi|CmsBlockGui|CmsBlockStorage|CmsGui|CmsPagesContentBannersResourceRelationship|CmsPagesContentProductAbstractListsResourceRelationship|CmsPagesRestApi|CmsSlotBlockGui|CmsSlotStoreConnector|CmsStorage|Collector|ContentProductAbstractListsRestApi|Currency|Customer|Discount|Http|MerchantGui|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|Merchant|MessageBrokerAws|MessageBroker|Money|Monitoring|Oms|Payment|PriceCartConnector|PriceProductMerchantRelationshipStorage|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProduct|ProductBundle|ProductCartConnector|ProductCategoryStorage|ProductLabelSearch|ProductLabelStorage|ProductManagement|ProductMeasurementUnitStorage|ProductMeasurementUnit|ProductOptionStorage|ProductPackagingUnit|ProductPageSearch|ProductRelationStorage|ProductSearch|ProductStorage|ProductsCategoriesResourceRelationship|ProductsRestApi|QuoteApproval|Quote|RelatedProductsRestApi|RestRequestValidator|SalesOrderThresholdGui|SalesOrderThreshold|Sales|SearchElasticsearch|Search|ShipmentDataImport|Shipment|ShoppingList|Stock|Storage|StoreGui|StoreReference|Store|StoresRestApi|UrlStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireName()
    {
        $this->assertPropertyIsSet(self::NAME);

        return $this;
    }

    /**
     * @module CompanyPage|ContentStorage|Currency|PriceProduct|ProductPricesRestApi|Store|StoresRestApi
     *
     * @param array|null $availableCurrencyIsoCodes
     *
     * @return $this
     */
    public function setAvailableCurrencyIsoCodes(array $availableCurrencyIsoCodes = null)
    {
        if ($availableCurrencyIsoCodes === null) {
            $availableCurrencyIsoCodes = [];
        }

        $this->availableCurrencyIsoCodes = $availableCurrencyIsoCodes;
        $this->modifiedProperties[self::AVAILABLE_CURRENCY_ISO_CODES] = true;

        return $this;
    }

    /**
     * @module CompanyPage|ContentStorage|Currency|PriceProduct|ProductPricesRestApi|Store|StoresRestApi
     *
     * @return array
     */
    public function getAvailableCurrencyIsoCodes()
    {
        return $this->availableCurrencyIsoCodes;
    }

    /**
     * @module CompanyPage|ContentStorage|Currency|PriceProduct|ProductPricesRestApi|Store|StoresRestApi
     *
     * @param mixed $availableCurrencyIsoCode
     *
     * @return $this
     */
    public function addAvailableCurrencyIsoCode($availableCurrencyIsoCode)
    {
        $this->availableCurrencyIsoCodes[] = $availableCurrencyIsoCode;
        $this->modifiedProperties[self::AVAILABLE_CURRENCY_ISO_CODES] = true;

        return $this;
    }

    /**
     * @module CompanyPage|ContentStorage|Currency|PriceProduct|ProductPricesRestApi|Store|StoresRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAvailableCurrencyIsoCodes()
    {
        $this->assertPropertyIsSet(self::AVAILABLE_CURRENCY_ISO_CODES);

        return $this;
    }

    /**
     * @module CustomerPage|Customer|Store|StoresRestApi
     *
     * @param array|null $countries
     *
     * @return $this
     */
    public function setCountries(array $countries = null)
    {
        if ($countries === null) {
            $countries = [];
        }

        $this->countries = $countries;
        $this->modifiedProperties[self::COUNTRIES] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Customer|Store|StoresRestApi
     *
     * @return array
     */
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     * @module CustomerPage|Customer|Store|StoresRestApi
     *
     * @param mixed $country
     *
     * @return $this
     */
    public function addCountry($country)
    {
        $this->countries[] = $country;
        $this->modifiedProperties[self::COUNTRIES] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Customer|Store|StoresRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCountries()
    {
        $this->assertPropertyIsSet(self::COUNTRIES);

        return $this;
    }

    /**
     * @module QuoteRequestAgentPage|PriceProductScheduleGui|Store|StoresRestApi
     *
     * @param string|null $timezone
     *
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;
        $this->modifiedProperties[self::TIMEZONE] = true;

        return $this;
    }

    /**
     * @module QuoteRequestAgentPage|PriceProductScheduleGui|Store|StoresRestApi
     *
     * @return string|null
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * @module QuoteRequestAgentPage|PriceProductScheduleGui|Store|StoresRestApi
     *
     * @param string|null $timezone
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTimezoneOrFail($timezone)
    {
        if ($timezone === null) {
            $this->throwNullValueException(static::TIMEZONE);
        }

        return $this->setTimezone($timezone);
    }

    /**
     * @module QuoteRequestAgentPage|PriceProductScheduleGui|Store|StoresRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTimezoneOrFail()
    {
        if ($this->timezone === null) {
            $this->throwNullValueException(static::TIMEZONE);
        }

        return $this->timezone;
    }

    /**
     * @module QuoteRequestAgentPage|PriceProductScheduleGui|Store|StoresRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTimezone()
    {
        $this->assertPropertyIsSet(self::TIMEZONE);

        return $this;
    }

    /**
     * @module AppCatalogGui|Asset|MessageBroker|Payment|StoreReference
     *
     * @param string|null $storeReference
     *
     * @return $this
     */
    public function setStoreReference($storeReference)
    {
        $this->storeReference = $storeReference;
        $this->modifiedProperties[self::STORE_REFERENCE] = true;

        return $this;
    }

    /**
     * @module AppCatalogGui|Asset|MessageBroker|Payment|StoreReference
     *
     * @return string|null
     */
    public function getStoreReference()
    {
        return $this->storeReference;
    }

    /**
     * @module AppCatalogGui|Asset|MessageBroker|Payment|StoreReference
     *
     * @param string|null $storeReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreReferenceOrFail($storeReference)
    {
        if ($storeReference === null) {
            $this->throwNullValueException(static::STORE_REFERENCE);
        }

        return $this->setStoreReference($storeReference);
    }

    /**
     * @module AppCatalogGui|Asset|MessageBroker|Payment|StoreReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStoreReferenceOrFail()
    {
        if ($this->storeReference === null) {
            $this->throwNullValueException(static::STORE_REFERENCE);
        }

        return $this->storeReference;
    }

    /**
     * @module AppCatalogGui|Asset|MessageBroker|Payment|StoreReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStoreReference()
    {
        $this->assertPropertyIsSet(self::STORE_REFERENCE);

        return $this;
    }

    /**
     * @module Asset|AvailabilityGui|AvailabilityNotification|Availability|CartsRestApi|CategoryStorage|Category|CheckoutRestApi|CmsBlock|Cms|Collector|Company|Discount|MerchantRelationshipSalesOrderThreshold|Merchant|Money|MultiCart|Oms|Payment|PersistentCart|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProductVolumeGui|PriceProduct|ProductBundle|ProductCartConnector|ProductLabel|ProductManagement|ProductMeasurementUnit|ProductOptionStorage|ProductOption|ProductPageSearch|ProductRelationGui|ProductRelation|Product|Quote|SalesOrderThreshold|SharedCart|ShipmentGui|Shipment|ShipmentsRestApi|Stock|StoreGui|Store
     *
     * @param int|null $idStore
     *
     * @return $this
     */
    public function setIdStore($idStore)
    {
        $this->idStore = $idStore;
        $this->modifiedProperties[self::ID_STORE] = true;

        return $this;
    }

    /**
     * @module Asset|AvailabilityGui|AvailabilityNotification|Availability|CartsRestApi|CategoryStorage|Category|CheckoutRestApi|CmsBlock|Cms|Collector|Company|Discount|MerchantRelationshipSalesOrderThreshold|Merchant|Money|MultiCart|Oms|Payment|PersistentCart|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProductVolumeGui|PriceProduct|ProductBundle|ProductCartConnector|ProductLabel|ProductManagement|ProductMeasurementUnit|ProductOptionStorage|ProductOption|ProductPageSearch|ProductRelationGui|ProductRelation|Product|Quote|SalesOrderThreshold|SharedCart|ShipmentGui|Shipment|ShipmentsRestApi|Stock|StoreGui|Store
     *
     * @return int|null
     */
    public function getIdStore()
    {
        return $this->idStore;
    }

    /**
     * @module Asset|AvailabilityGui|AvailabilityNotification|Availability|CartsRestApi|CategoryStorage|Category|CheckoutRestApi|CmsBlock|Cms|Collector|Company|Discount|MerchantRelationshipSalesOrderThreshold|Merchant|Money|MultiCart|Oms|Payment|PersistentCart|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProductVolumeGui|PriceProduct|ProductBundle|ProductCartConnector|ProductLabel|ProductManagement|ProductMeasurementUnit|ProductOptionStorage|ProductOption|ProductPageSearch|ProductRelationGui|ProductRelation|Product|Quote|SalesOrderThreshold|SharedCart|ShipmentGui|Shipment|ShipmentsRestApi|Stock|StoreGui|Store
     *
     * @param int|null $idStore
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdStoreOrFail($idStore)
    {
        if ($idStore === null) {
            $this->throwNullValueException(static::ID_STORE);
        }

        return $this->setIdStore($idStore);
    }

    /**
     * @module Asset|AvailabilityGui|AvailabilityNotification|Availability|CartsRestApi|CategoryStorage|Category|CheckoutRestApi|CmsBlock|Cms|Collector|Company|Discount|MerchantRelationshipSalesOrderThreshold|Merchant|Money|MultiCart|Oms|Payment|PersistentCart|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProductVolumeGui|PriceProduct|ProductBundle|ProductCartConnector|ProductLabel|ProductManagement|ProductMeasurementUnit|ProductOptionStorage|ProductOption|ProductPageSearch|ProductRelationGui|ProductRelation|Product|Quote|SalesOrderThreshold|SharedCart|ShipmentGui|Shipment|ShipmentsRestApi|Stock|StoreGui|Store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdStoreOrFail()
    {
        if ($this->idStore === null) {
            $this->throwNullValueException(static::ID_STORE);
        }

        return $this->idStore;
    }

    /**
     * @module Asset|AvailabilityGui|AvailabilityNotification|Availability|CartsRestApi|CategoryStorage|Category|CheckoutRestApi|CmsBlock|Cms|Collector|Company|Discount|MerchantRelationshipSalesOrderThreshold|Merchant|Money|MultiCart|Oms|Payment|PersistentCart|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProductVolumeGui|PriceProduct|ProductBundle|ProductCartConnector|ProductLabel|ProductManagement|ProductMeasurementUnit|ProductOptionStorage|ProductOption|ProductPageSearch|ProductRelationGui|ProductRelation|Product|Quote|SalesOrderThreshold|SharedCart|ShipmentGui|Shipment|ShipmentsRestApi|Stock|StoreGui|Store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdStore()
    {
        $this->assertPropertyIsSet(self::ID_STORE);

        return $this;
    }

    /**
     * @module Availability|CmsBlockStorage|CmsStorage|Oms|ProductBundle|ProductPackagingUnit|Stock|Store|UrlStorage
     *
     * @param array|null $storesWithSharedPersistence
     *
     * @return $this
     */
    public function setStoresWithSharedPersistence(array $storesWithSharedPersistence = null)
    {
        if ($storesWithSharedPersistence === null) {
            $storesWithSharedPersistence = [];
        }

        $this->storesWithSharedPersistence = $storesWithSharedPersistence;
        $this->modifiedProperties[self::STORES_WITH_SHARED_PERSISTENCE] = true;

        return $this;
    }

    /**
     * @module Availability|CmsBlockStorage|CmsStorage|Oms|ProductBundle|ProductPackagingUnit|Stock|Store|UrlStorage
     *
     * @return array
     */
    public function getStoresWithSharedPersistence()
    {
        return $this->storesWithSharedPersistence;
    }

    /**
     * @module Availability|CmsBlockStorage|CmsStorage|Oms|ProductBundle|ProductPackagingUnit|Stock|Store|UrlStorage
     *
     * @param mixed $storeWithSharedPersistence
     *
     * @return $this
     */
    public function addStoreWithSharedPersistence($storeWithSharedPersistence)
    {
        $this->storesWithSharedPersistence[] = $storeWithSharedPersistence;
        $this->modifiedProperties[self::STORES_WITH_SHARED_PERSISTENCE] = true;

        return $this;
    }

    /**
     * @module Availability|CmsBlockStorage|CmsStorage|Oms|ProductBundle|ProductPackagingUnit|Stock|Store|UrlStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStoresWithSharedPersistence()
    {
        $this->assertPropertyIsSet(self::STORES_WITH_SHARED_PERSISTENCE);

        return $this;
    }

    /**
     * @module CartsRestApi|ConfigurableBundleCartsRestApi|Currency|Store|StoresRestApi
     *
     * @param string|null $defaultCurrencyIsoCode
     *
     * @return $this
     */
    public function setDefaultCurrencyIsoCode($defaultCurrencyIsoCode)
    {
        $this->defaultCurrencyIsoCode = $defaultCurrencyIsoCode;
        $this->modifiedProperties[self::DEFAULT_CURRENCY_ISO_CODE] = true;

        return $this;
    }

    /**
     * @module CartsRestApi|ConfigurableBundleCartsRestApi|Currency|Store|StoresRestApi
     *
     * @return string|null
     */
    public function getDefaultCurrencyIsoCode()
    {
        return $this->defaultCurrencyIsoCode;
    }

    /**
     * @module CartsRestApi|ConfigurableBundleCartsRestApi|Currency|Store|StoresRestApi
     *
     * @param string|null $defaultCurrencyIsoCode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDefaultCurrencyIsoCodeOrFail($defaultCurrencyIsoCode)
    {
        if ($defaultCurrencyIsoCode === null) {
            $this->throwNullValueException(static::DEFAULT_CURRENCY_ISO_CODE);
        }

        return $this->setDefaultCurrencyIsoCode($defaultCurrencyIsoCode);
    }

    /**
     * @module CartsRestApi|ConfigurableBundleCartsRestApi|Currency|Store|StoresRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDefaultCurrencyIsoCodeOrFail()
    {
        if ($this->defaultCurrencyIsoCode === null) {
            $this->throwNullValueException(static::DEFAULT_CURRENCY_ISO_CODE);
        }

        return $this->defaultCurrencyIsoCode;
    }

    /**
     * @module CartsRestApi|ConfigurableBundleCartsRestApi|Currency|Store|StoresRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDefaultCurrencyIsoCode()
    {
        $this->assertPropertyIsSet(self::DEFAULT_CURRENCY_ISO_CODE);

        return $this;
    }

    /**
     * @module CategoryPageSearch|CategoryStorage|CmsBlockStorage|CmsStorage|Collector|ContentStorage|DataImport|GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication|MerchantRelationshipSalesOrderThreshold|ProductCategoryStorage|ProductLabelStorage|ProductPageSearch|ProductStorage|RabbitMq|SalesOrderThreshold|Store|StoresRestApi|UrlStorage
     *
     * @param array|null $availableLocaleIsoCodes
     *
     * @return $this
     */
    public function setAvailableLocaleIsoCodes(array $availableLocaleIsoCodes = null)
    {
        if ($availableLocaleIsoCodes === null) {
            $availableLocaleIsoCodes = [];
        }

        $this->availableLocaleIsoCodes = $availableLocaleIsoCodes;
        $this->modifiedProperties[self::AVAILABLE_LOCALE_ISO_CODES] = true;

        return $this;
    }

    /**
     * @module CategoryPageSearch|CategoryStorage|CmsBlockStorage|CmsStorage|Collector|ContentStorage|DataImport|GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication|MerchantRelationshipSalesOrderThreshold|ProductCategoryStorage|ProductLabelStorage|ProductPageSearch|ProductStorage|RabbitMq|SalesOrderThreshold|Store|StoresRestApi|UrlStorage
     *
     * @return array
     */
    public function getAvailableLocaleIsoCodes()
    {
        return $this->availableLocaleIsoCodes;
    }

    /**
     * @module CategoryPageSearch|CategoryStorage|CmsBlockStorage|CmsStorage|Collector|ContentStorage|DataImport|GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication|MerchantRelationshipSalesOrderThreshold|ProductCategoryStorage|ProductLabelStorage|ProductPageSearch|ProductStorage|RabbitMq|SalesOrderThreshold|Store|StoresRestApi|UrlStorage
     *
     * @param mixed $availableLocaleCode
     *
     * @return $this
     */
    public function addAvailableLocaleCode($availableLocaleCode)
    {
        $this->availableLocaleIsoCodes[] = $availableLocaleCode;
        $this->modifiedProperties[self::AVAILABLE_LOCALE_ISO_CODES] = true;

        return $this;
    }

    /**
     * @module CategoryPageSearch|CategoryStorage|CmsBlockStorage|CmsStorage|Collector|ContentStorage|DataImport|GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication|MerchantRelationshipSalesOrderThreshold|ProductCategoryStorage|ProductLabelStorage|ProductPageSearch|ProductStorage|RabbitMq|SalesOrderThreshold|Store|StoresRestApi|UrlStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAvailableLocaleIsoCodes()
    {
        $this->assertPropertyIsSet(self::AVAILABLE_LOCALE_ISO_CODES);

        return $this;
    }

    /**
     * @module Currency|Shipment|Store
     *
     * @param string|null $selectedCurrencyIsoCode
     *
     * @return $this
     */
    public function setSelectedCurrencyIsoCode($selectedCurrencyIsoCode)
    {
        $this->selectedCurrencyIsoCode = $selectedCurrencyIsoCode;
        $this->modifiedProperties[self::SELECTED_CURRENCY_ISO_CODE] = true;

        return $this;
    }

    /**
     * @module Currency|Shipment|Store
     *
     * @return string|null
     */
    public function getSelectedCurrencyIsoCode()
    {
        return $this->selectedCurrencyIsoCode;
    }

    /**
     * @module Currency|Shipment|Store
     *
     * @param string|null $selectedCurrencyIsoCode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSelectedCurrencyIsoCodeOrFail($selectedCurrencyIsoCode)
    {
        if ($selectedCurrencyIsoCode === null) {
            $this->throwNullValueException(static::SELECTED_CURRENCY_ISO_CODE);
        }

        return $this->setSelectedCurrencyIsoCode($selectedCurrencyIsoCode);
    }

    /**
     * @module Currency|Shipment|Store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSelectedCurrencyIsoCodeOrFail()
    {
        if ($this->selectedCurrencyIsoCode === null) {
            $this->throwNullValueException(static::SELECTED_CURRENCY_ISO_CODE);
        }

        return $this->selectedCurrencyIsoCode;
    }

    /**
     * @module Currency|Shipment|Store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSelectedCurrencyIsoCode()
    {
        $this->assertPropertyIsSet(self::SELECTED_CURRENCY_ISO_CODE);

        return $this;
    }

    /**
     * @module RabbitMq|Store
     *
     * @param array|null $queuePools
     *
     * @return $this
     */
    public function setQueuePools(array $queuePools = null)
    {
        if ($queuePools === null) {
            $queuePools = [];
        }

        $this->queuePools = $queuePools;
        $this->modifiedProperties[self::QUEUE_POOLS] = true;

        return $this;
    }

    /**
     * @module RabbitMq|Store
     *
     * @return array
     */
    public function getQueuePools()
    {
        return $this->queuePools;
    }

    /**
     * @module RabbitMq|Store
     *
     * @param mixed $queuePools
     *
     * @return $this
     */
    public function addQueuePools($queuePools)
    {
        $this->queuePools[] = $queuePools;
        $this->modifiedProperties[self::QUEUE_POOLS] = true;

        return $this;
    }

    /**
     * @module RabbitMq|Store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQueuePools()
    {
        $this->assertPropertyIsSet(self::QUEUE_POOLS);

        return $this;
    }

    /**
     * @param array<string, mixed> $data
     * @param bool $ignoreMissingProperty
     *
     * @throws \InvalidArgumentException
     *
     * @return $this
     */
    public function fromArray(array $data, $ignoreMissingProperty = false)
    {
        foreach ($data as $property => $value) {
            $normalizedPropertyName = $this->transferPropertyNameMap[$property] ?? null;

            switch ($normalizedPropertyName) {
                case 'name':
                case 'availableCurrencyIsoCodes':
                case 'countries':
                case 'timezone':
                case 'storeReference':
                case 'idStore':
                case 'storesWithSharedPersistence':
                case 'defaultCurrencyIsoCode':
                case 'availableLocaleIsoCodes':
                case 'selectedCurrencyIsoCode':
                case 'queuePools':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                default:
                    if (!$ignoreMissingProperty) {
                        throw new \InvalidArgumentException(sprintf('Missing property `%s` in `%s`', $property, static::class));
                    }
            }
        }

        return $this;
    }

    /**
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    public function modifiedToArray($isRecursive = true, $camelCasedKeys = false): array
    {
        if ($isRecursive && !$camelCasedKeys) {
            return $this->modifiedToArrayRecursiveNotCamelCased();
        }
        if ($isRecursive && $camelCasedKeys) {
            return $this->modifiedToArrayRecursiveCamelCased();
        }
        if (!$isRecursive && $camelCasedKeys) {
            return $this->modifiedToArrayNotRecursiveCamelCased();
        }
        if (!$isRecursive && !$camelCasedKeys) {
            return $this->modifiedToArrayNotRecursiveNotCamelCased();
        }
    }

    /**
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    public function toArray($isRecursive = true, $camelCasedKeys = false): array
    {
        if ($isRecursive && !$camelCasedKeys) {
            return $this->toArrayRecursiveNotCamelCased();
        }
        if ($isRecursive && $camelCasedKeys) {
            return $this->toArrayRecursiveCamelCased();
        }
        if (!$isRecursive && !$camelCasedKeys) {
            return $this->toArrayNotRecursiveNotCamelCased();
        }
        if (!$isRecursive && $camelCasedKeys) {
            return $this->toArrayNotRecursiveCamelCased();
        }
    }

    /**
     * @param array<string, mixed>|\ArrayObject<string, mixed> $value
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    protected function addValuesToCollectionModified($value, $isRecursive, $camelCasedKeys): array
    {
        $result = [];
        foreach ($value as $elementKey => $arrayElement) {
            if ($arrayElement instanceof AbstractTransfer) {
                $result[$elementKey] = $arrayElement->modifiedToArray($isRecursive, $camelCasedKeys);

                continue;
            }
            $result[$elementKey] = $arrayElement;
        }

        return $result;
    }

    /**
     * @param array<string, mixed>|\ArrayObject<string, mixed> $value
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    protected function addValuesToCollection($value, $isRecursive, $camelCasedKeys): array
    {
        $result = [];
        foreach ($value as $elementKey => $arrayElement) {
            if ($arrayElement instanceof AbstractTransfer) {
                $result[$elementKey] = $arrayElement->toArray($isRecursive, $camelCasedKeys);

                continue;
            }
            $result[$elementKey] = $arrayElement;
        }

        return $result;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayRecursiveCamelCased(): array
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $property;

            if ($value instanceof AbstractTransfer) {
                $values[$arrayKey] = $value->modifiedToArray(true, true);

                continue;
            }
            switch ($property) {
                case 'name':
                case 'availableCurrencyIsoCodes':
                case 'countries':
                case 'timezone':
                case 'storeReference':
                case 'idStore':
                case 'storesWithSharedPersistence':
                case 'defaultCurrencyIsoCode':
                case 'availableLocaleIsoCodes':
                case 'selectedCurrencyIsoCode':
                case 'queuePools':
                    $values[$arrayKey] = $value;

                    break;
            }
        }

        return $values;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayRecursiveNotCamelCased(): array
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $this->transferMetadata[$property]['name_underscore'];

            if ($value instanceof AbstractTransfer) {
                $values[$arrayKey] = $value->modifiedToArray(true, false);

                continue;
            }
            switch ($property) {
                case 'name':
                case 'availableCurrencyIsoCodes':
                case 'countries':
                case 'timezone':
                case 'storeReference':
                case 'idStore':
                case 'storesWithSharedPersistence':
                case 'defaultCurrencyIsoCode':
                case 'availableLocaleIsoCodes':
                case 'selectedCurrencyIsoCode':
                case 'queuePools':
                    $values[$arrayKey] = $value;

                    break;
            }
        }

        return $values;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayNotRecursiveNotCamelCased(): array
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $this->transferMetadata[$property]['name_underscore'];

            $values[$arrayKey] = $value;
        }

        return $values;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayNotRecursiveCamelCased(): array
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $property;

            $values[$arrayKey] = $value;
        }

        return $values;
    }

    /**
     * @return void
     */
    protected function initCollectionProperties(): void
    {
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'name' => $this->name,
            'availableCurrencyIsoCodes' => $this->availableCurrencyIsoCodes,
            'countries' => $this->countries,
            'timezone' => $this->timezone,
            'storeReference' => $this->storeReference,
            'idStore' => $this->idStore,
            'storesWithSharedPersistence' => $this->storesWithSharedPersistence,
            'defaultCurrencyIsoCode' => $this->defaultCurrencyIsoCode,
            'availableLocaleIsoCodes' => $this->availableLocaleIsoCodes,
            'selectedCurrencyIsoCode' => $this->selectedCurrencyIsoCode,
            'queuePools' => $this->queuePools,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name,
            'available_currency_iso_codes' => $this->availableCurrencyIsoCodes,
            'countries' => $this->countries,
            'timezone' => $this->timezone,
            'store_reference' => $this->storeReference,
            'id_store' => $this->idStore,
            'stores_with_shared_persistence' => $this->storesWithSharedPersistence,
            'default_currency_iso_code' => $this->defaultCurrencyIsoCode,
            'available_locale_iso_codes' => $this->availableLocaleIsoCodes,
            'selected_currency_iso_code' => $this->selectedCurrencyIsoCode,
            'queue_pools' => $this->queuePools,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'available_currency_iso_codes' => $this->availableCurrencyIsoCodes instanceof AbstractTransfer ? $this->availableCurrencyIsoCodes->toArray(true, false) : $this->availableCurrencyIsoCodes,
            'countries' => $this->countries instanceof AbstractTransfer ? $this->countries->toArray(true, false) : $this->countries,
            'timezone' => $this->timezone instanceof AbstractTransfer ? $this->timezone->toArray(true, false) : $this->timezone,
            'store_reference' => $this->storeReference instanceof AbstractTransfer ? $this->storeReference->toArray(true, false) : $this->storeReference,
            'id_store' => $this->idStore instanceof AbstractTransfer ? $this->idStore->toArray(true, false) : $this->idStore,
            'stores_with_shared_persistence' => $this->storesWithSharedPersistence instanceof AbstractTransfer ? $this->storesWithSharedPersistence->toArray(true, false) : $this->storesWithSharedPersistence,
            'default_currency_iso_code' => $this->defaultCurrencyIsoCode instanceof AbstractTransfer ? $this->defaultCurrencyIsoCode->toArray(true, false) : $this->defaultCurrencyIsoCode,
            'available_locale_iso_codes' => $this->availableLocaleIsoCodes instanceof AbstractTransfer ? $this->availableLocaleIsoCodes->toArray(true, false) : $this->availableLocaleIsoCodes,
            'selected_currency_iso_code' => $this->selectedCurrencyIsoCode instanceof AbstractTransfer ? $this->selectedCurrencyIsoCode->toArray(true, false) : $this->selectedCurrencyIsoCode,
            'queue_pools' => $this->queuePools instanceof AbstractTransfer ? $this->queuePools->toArray(true, false) : $this->queuePools,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'availableCurrencyIsoCodes' => $this->availableCurrencyIsoCodes instanceof AbstractTransfer ? $this->availableCurrencyIsoCodes->toArray(true, true) : $this->availableCurrencyIsoCodes,
            'countries' => $this->countries instanceof AbstractTransfer ? $this->countries->toArray(true, true) : $this->countries,
            'timezone' => $this->timezone instanceof AbstractTransfer ? $this->timezone->toArray(true, true) : $this->timezone,
            'storeReference' => $this->storeReference instanceof AbstractTransfer ? $this->storeReference->toArray(true, true) : $this->storeReference,
            'idStore' => $this->idStore instanceof AbstractTransfer ? $this->idStore->toArray(true, true) : $this->idStore,
            'storesWithSharedPersistence' => $this->storesWithSharedPersistence instanceof AbstractTransfer ? $this->storesWithSharedPersistence->toArray(true, true) : $this->storesWithSharedPersistence,
            'defaultCurrencyIsoCode' => $this->defaultCurrencyIsoCode instanceof AbstractTransfer ? $this->defaultCurrencyIsoCode->toArray(true, true) : $this->defaultCurrencyIsoCode,
            'availableLocaleIsoCodes' => $this->availableLocaleIsoCodes instanceof AbstractTransfer ? $this->availableLocaleIsoCodes->toArray(true, true) : $this->availableLocaleIsoCodes,
            'selectedCurrencyIsoCode' => $this->selectedCurrencyIsoCode instanceof AbstractTransfer ? $this->selectedCurrencyIsoCode->toArray(true, true) : $this->selectedCurrencyIsoCode,
            'queuePools' => $this->queuePools instanceof AbstractTransfer ? $this->queuePools->toArray(true, true) : $this->queuePools,
        ];
    }
}
