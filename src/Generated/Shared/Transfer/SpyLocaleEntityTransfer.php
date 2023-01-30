<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyLocaleEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_LOCALE = 'idLocale';

    /**
     * @var string
     */
    public const LOCALE_NAME = 'localeName';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const SPY_PRODUCT_ABSTRACT_LOCALIZED_ATTRIBUTESS = 'spyProductAbstractLocalizedAttributess';

    /**
     * @var string
     */
    public const SPY_PRODUCT_LOCALIZED_ATTRIBUTESS = 'spyProductLocalizedAttributess';

    /**
     * @var string
     */
    public const SPY_AVAILABILITY_NOTIFICATION_SUBSCRIPTIONS = 'spyAvailabilityNotificationSubscriptions';

    /**
     * @var string
     */
    public const SPY_CONTENT_LOCALIZEDS = 'spyContentLocalizeds';

    /**
     * @var string
     */
    public const SPY_GLOSSARY_TRANSLATIONS = 'spyGlossaryTranslations';

    /**
     * @var string
     */
    public const SPY_CMS_PAGE_LOCALIZED_ATTRIBUTESS = 'spyCmsPageLocalizedAttributess';

    /**
     * @var string
     */
    public const SPY_TOUCH_STORAGES = 'spyTouchStorages';

    /**
     * @var string
     */
    public const SPY_TOUCH_SEARCHES = 'spyTouchSearches';

    /**
     * @var string
     */
    public const SPY_PRODUCT_DISCONTINUED_NOTES = 'spyProductDiscontinuedNotes';

    /**
     * @var string
     */
    public const SPY_NAVIGATION_NODE_LOCALIZED_ATTRIBUTESS = 'spyNavigationNodeLocalizedAttributess';

    /**
     * @var string
     */
    public const SPY_CUSTOMERS = 'spyCustomers';

    /**
     * @var string
     */
    public const SPY_CATEGORY_IMAGE_SETS = 'spyCategoryImageSets';

    /**
     * @var string
     */
    public const SPY_PRODUCT_LABEL_LOCALIZED_ATTRIBUTESS = 'spyProductLabelLocalizedAttributess';

    /**
     * @var string
     */
    public const SPY_URLS = 'spyUrls';

    /**
     * @var string
     */
    public const SPY_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE_TRANSLATIONS = 'spyProductManagementAttributeValueTranslations';

    /**
     * @var string
     */
    public const SPY_PRODUCT_REVIEWS = 'spyProductReviews';

    /**
     * @var string
     */
    public const SPY_PRODUCT_SEARCHES = 'spyProductSearches';

    /**
     * @var string
     */
    public const SPY_FILE_LOCALIZED_ATTRIBUTESS = 'spyFileLocalizedAttributess';

    /**
     * @var string
     */
    public const SPY_FILE_DIRECTORY_LOCALIZED_ATTRIBUTESS = 'spyFileDirectoryLocalizedAttributess';

    /**
     * @var string
     */
    public const SPY_PRODUCT_IMAGE_SETS = 'spyProductImageSets';

    /**
     * @var string
     */
    public const SPY_USERS = 'spyUsers';

    /**
     * @var string
     */
    public const SPY_CATEGORY_ATTRIBUTES = 'spyCategoryAttributes';

    /**
     * @var string
     */
    public const SPY_SALES_ORDERS = 'spySalesOrders';

    /**
     * @var string
     */
    public const SPY_PRODUCT_SET_DATAS = 'spyProductSetDatas';

    /**
     * @var integer|null
     */
    protected $idLocale;

    /**
     * @var string|null
     */
    protected $localeName;

    /**
     * @var boolean|null
     */
    protected $isActive;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductAbstractLocalizedAttributesEntityTransfer[]
     */
    protected $spyProductAbstractLocalizedAttributess;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductLocalizedAttributesEntityTransfer[]
     */
    protected $spyProductLocalizedAttributess;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyAvailabilityNotificationSubscriptionEntityTransfer[]
     */
    protected $spyAvailabilityNotificationSubscriptions;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyContentLocalizedEntityTransfer[]
     */
    protected $spyContentLocalizeds;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyGlossaryTranslationEntityTransfer[]
     */
    protected $spyGlossaryTranslations;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCmsPageLocalizedAttributesEntityTransfer[]
     */
    protected $spyCmsPageLocalizedAttributess;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyTouchStorageEntityTransfer[]
     */
    protected $spyTouchStorages;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyTouchSearchEntityTransfer[]
     */
    protected $spyTouchSearches;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductDiscontinuedNoteEntityTransfer[]
     */
    protected $spyProductDiscontinuedNotes;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyNavigationNodeLocalizedAttributesEntityTransfer[]
     */
    protected $spyNavigationNodeLocalizedAttributess;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCustomerEntityTransfer[]
     */
    protected $spyCustomers;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCategoryImageSetEntityTransfer[]
     */
    protected $spyCategoryImageSets;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductLabelLocalizedAttributesEntityTransfer[]
     */
    protected $spyProductLabelLocalizedAttributess;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyUrlEntityTransfer[]
     */
    protected $spyUrls;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductManagementAttributeValueTranslationEntityTransfer[]
     */
    protected $spyProductManagementAttributeValueTranslations;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductReviewEntityTransfer[]
     */
    protected $spyProductReviews;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductSearchEntityTransfer[]
     */
    protected $spyProductSearches;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyFileLocalizedAttributesEntityTransfer[]
     */
    protected $spyFileLocalizedAttributess;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyFileDirectoryLocalizedAttributesEntityTransfer[]
     */
    protected $spyFileDirectoryLocalizedAttributess;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductImageSetEntityTransfer[]
     */
    protected $spyProductImageSets;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyUserEntityTransfer[]
     */
    protected $spyUsers;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCategoryAttributeEntityTransfer[]
     */
    protected $spyCategoryAttributes;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderEntityTransfer[]
     */
    protected $spySalesOrders;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductSetDataEntityTransfer[]
     */
    protected $spyProductSetDatas;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_locale' => 'idLocale',
        'idLocale' => 'idLocale',
        'IdLocale' => 'idLocale',
        'locale_name' => 'localeName',
        'localeName' => 'localeName',
        'LocaleName' => 'localeName',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'spy_product_abstract_localized_attributess' => 'spyProductAbstractLocalizedAttributess',
        'spyProductAbstractLocalizedAttributess' => 'spyProductAbstractLocalizedAttributess',
        'SpyProductAbstractLocalizedAttributess' => 'spyProductAbstractLocalizedAttributess',
        'spy_product_localized_attributess' => 'spyProductLocalizedAttributess',
        'spyProductLocalizedAttributess' => 'spyProductLocalizedAttributess',
        'SpyProductLocalizedAttributess' => 'spyProductLocalizedAttributess',
        'spy_availability_notification_subscriptions' => 'spyAvailabilityNotificationSubscriptions',
        'spyAvailabilityNotificationSubscriptions' => 'spyAvailabilityNotificationSubscriptions',
        'SpyAvailabilityNotificationSubscriptions' => 'spyAvailabilityNotificationSubscriptions',
        'spy_content_localizeds' => 'spyContentLocalizeds',
        'spyContentLocalizeds' => 'spyContentLocalizeds',
        'SpyContentLocalizeds' => 'spyContentLocalizeds',
        'spy_glossary_translations' => 'spyGlossaryTranslations',
        'spyGlossaryTranslations' => 'spyGlossaryTranslations',
        'SpyGlossaryTranslations' => 'spyGlossaryTranslations',
        'spy_cms_page_localized_attributess' => 'spyCmsPageLocalizedAttributess',
        'spyCmsPageLocalizedAttributess' => 'spyCmsPageLocalizedAttributess',
        'SpyCmsPageLocalizedAttributess' => 'spyCmsPageLocalizedAttributess',
        'spy_touch_storages' => 'spyTouchStorages',
        'spyTouchStorages' => 'spyTouchStorages',
        'SpyTouchStorages' => 'spyTouchStorages',
        'spy_touch_searches' => 'spyTouchSearches',
        'spyTouchSearches' => 'spyTouchSearches',
        'SpyTouchSearches' => 'spyTouchSearches',
        'spy_product_discontinued_notes' => 'spyProductDiscontinuedNotes',
        'spyProductDiscontinuedNotes' => 'spyProductDiscontinuedNotes',
        'SpyProductDiscontinuedNotes' => 'spyProductDiscontinuedNotes',
        'spy_navigation_node_localized_attributess' => 'spyNavigationNodeLocalizedAttributess',
        'spyNavigationNodeLocalizedAttributess' => 'spyNavigationNodeLocalizedAttributess',
        'SpyNavigationNodeLocalizedAttributess' => 'spyNavigationNodeLocalizedAttributess',
        'spy_customers' => 'spyCustomers',
        'spyCustomers' => 'spyCustomers',
        'SpyCustomers' => 'spyCustomers',
        'spy_category_image_sets' => 'spyCategoryImageSets',
        'spyCategoryImageSets' => 'spyCategoryImageSets',
        'SpyCategoryImageSets' => 'spyCategoryImageSets',
        'spy_product_label_localized_attributess' => 'spyProductLabelLocalizedAttributess',
        'spyProductLabelLocalizedAttributess' => 'spyProductLabelLocalizedAttributess',
        'SpyProductLabelLocalizedAttributess' => 'spyProductLabelLocalizedAttributess',
        'spy_urls' => 'spyUrls',
        'spyUrls' => 'spyUrls',
        'SpyUrls' => 'spyUrls',
        'spy_product_management_attribute_value_translations' => 'spyProductManagementAttributeValueTranslations',
        'spyProductManagementAttributeValueTranslations' => 'spyProductManagementAttributeValueTranslations',
        'SpyProductManagementAttributeValueTranslations' => 'spyProductManagementAttributeValueTranslations',
        'spy_product_reviews' => 'spyProductReviews',
        'spyProductReviews' => 'spyProductReviews',
        'SpyProductReviews' => 'spyProductReviews',
        'spy_product_searches' => 'spyProductSearches',
        'spyProductSearches' => 'spyProductSearches',
        'SpyProductSearches' => 'spyProductSearches',
        'spy_file_localized_attributess' => 'spyFileLocalizedAttributess',
        'spyFileLocalizedAttributess' => 'spyFileLocalizedAttributess',
        'SpyFileLocalizedAttributess' => 'spyFileLocalizedAttributess',
        'spy_file_directory_localized_attributess' => 'spyFileDirectoryLocalizedAttributess',
        'spyFileDirectoryLocalizedAttributess' => 'spyFileDirectoryLocalizedAttributess',
        'SpyFileDirectoryLocalizedAttributess' => 'spyFileDirectoryLocalizedAttributess',
        'spy_product_image_sets' => 'spyProductImageSets',
        'spyProductImageSets' => 'spyProductImageSets',
        'SpyProductImageSets' => 'spyProductImageSets',
        'spy_users' => 'spyUsers',
        'spyUsers' => 'spyUsers',
        'SpyUsers' => 'spyUsers',
        'spy_category_attributes' => 'spyCategoryAttributes',
        'spyCategoryAttributes' => 'spyCategoryAttributes',
        'SpyCategoryAttributes' => 'spyCategoryAttributes',
        'spy_sales_orders' => 'spySalesOrders',
        'spySalesOrders' => 'spySalesOrders',
        'SpySalesOrders' => 'spySalesOrders',
        'spy_product_set_datas' => 'spyProductSetDatas',
        'spyProductSetDatas' => 'spyProductSetDatas',
        'SpyProductSetDatas' => 'spyProductSetDatas',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_LOCALE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_locale',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LOCALE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'locale_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_ACTIVE => [
            'type' => 'boolean',
            'type_shim' => null,
            'name_underscore' => 'is_active',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_ABSTRACT_LOCALIZED_ATTRIBUTESS => [
            'type' => 'Generated\Shared\Transfer\SpyProductAbstractLocalizedAttributesEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_abstract_localized_attributess',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_LOCALIZED_ATTRIBUTESS => [
            'type' => 'Generated\Shared\Transfer\SpyProductLocalizedAttributesEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_localized_attributess',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_AVAILABILITY_NOTIFICATION_SUBSCRIPTIONS => [
            'type' => 'Generated\Shared\Transfer\SpyAvailabilityNotificationSubscriptionEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_availability_notification_subscriptions',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_CONTENT_LOCALIZEDS => [
            'type' => 'Generated\Shared\Transfer\SpyContentLocalizedEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_content_localizeds',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_GLOSSARY_TRANSLATIONS => [
            'type' => 'Generated\Shared\Transfer\SpyGlossaryTranslationEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_glossary_translations',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_CMS_PAGE_LOCALIZED_ATTRIBUTESS => [
            'type' => 'Generated\Shared\Transfer\SpyCmsPageLocalizedAttributesEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_cms_page_localized_attributess',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_TOUCH_STORAGES => [
            'type' => 'Generated\Shared\Transfer\SpyTouchStorageEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_touch_storages',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_TOUCH_SEARCHES => [
            'type' => 'Generated\Shared\Transfer\SpyTouchSearchEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_touch_searches',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_DISCONTINUED_NOTES => [
            'type' => 'Generated\Shared\Transfer\SpyProductDiscontinuedNoteEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_discontinued_notes',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_NAVIGATION_NODE_LOCALIZED_ATTRIBUTESS => [
            'type' => 'Generated\Shared\Transfer\SpyNavigationNodeLocalizedAttributesEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_navigation_node_localized_attributess',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_CUSTOMERS => [
            'type' => 'Generated\Shared\Transfer\SpyCustomerEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_customers',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_CATEGORY_IMAGE_SETS => [
            'type' => 'Generated\Shared\Transfer\SpyCategoryImageSetEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_category_image_sets',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_LABEL_LOCALIZED_ATTRIBUTESS => [
            'type' => 'Generated\Shared\Transfer\SpyProductLabelLocalizedAttributesEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_label_localized_attributess',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_URLS => [
            'type' => 'Generated\Shared\Transfer\SpyUrlEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_urls',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE_TRANSLATIONS => [
            'type' => 'Generated\Shared\Transfer\SpyProductManagementAttributeValueTranslationEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_management_attribute_value_translations',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_REVIEWS => [
            'type' => 'Generated\Shared\Transfer\SpyProductReviewEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_reviews',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_SEARCHES => [
            'type' => 'Generated\Shared\Transfer\SpyProductSearchEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_searches',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_FILE_LOCALIZED_ATTRIBUTESS => [
            'type' => 'Generated\Shared\Transfer\SpyFileLocalizedAttributesEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_file_localized_attributess',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_FILE_DIRECTORY_LOCALIZED_ATTRIBUTESS => [
            'type' => 'Generated\Shared\Transfer\SpyFileDirectoryLocalizedAttributesEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_file_directory_localized_attributess',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_IMAGE_SETS => [
            'type' => 'Generated\Shared\Transfer\SpyProductImageSetEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_image_sets',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_USERS => [
            'type' => 'Generated\Shared\Transfer\SpyUserEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_users',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_CATEGORY_ATTRIBUTES => [
            'type' => 'Generated\Shared\Transfer\SpyCategoryAttributeEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_category_attributes',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SALES_ORDERS => [
            'type' => 'Generated\Shared\Transfer\SpySalesOrderEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_sales_orders',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_SET_DATAS => [
            'type' => 'Generated\Shared\Transfer\SpyProductSetDataEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_set_datas',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];
    /**
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\Locale\Persistence\SpyLocale';


    /**
     * @module 
     *
     * @param integer|null $idLocale
     *
     * @return $this
     */
    public function setIdLocale($idLocale)
    {
        $this->idLocale = $idLocale;
        $this->modifiedProperties[self::ID_LOCALE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdLocale()
    {
        return $this->idLocale;
    }

    /**
     * @module 
     *
     * @param integer|null $idLocale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdLocaleOrFail($idLocale)
    {
        if ($idLocale === null) {
            $this->throwNullValueException(static::ID_LOCALE);
        }

        return $this->setIdLocale($idLocale);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdLocaleOrFail()
    {
        if ($this->idLocale === null) {
            $this->throwNullValueException(static::ID_LOCALE);
        }

        return $this->idLocale;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdLocale()
    {
        $this->assertPropertyIsSet(self::ID_LOCALE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $localeName
     *
     * @return $this
     */
    public function setLocaleName($localeName)
    {
        $this->localeName = $localeName;
        $this->modifiedProperties[self::LOCALE_NAME] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getLocaleName()
    {
        return $this->localeName;
    }

    /**
     * @module 
     *
     * @param string|null $localeName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLocaleNameOrFail($localeName)
    {
        if ($localeName === null) {
            $this->throwNullValueException(static::LOCALE_NAME);
        }

        return $this->setLocaleName($localeName);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getLocaleNameOrFail()
    {
        if ($this->localeName === null) {
            $this->throwNullValueException(static::LOCALE_NAME);
        }

        return $this->localeName;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocaleName()
    {
        $this->assertPropertyIsSet(self::LOCALE_NAME);

        return $this;
    }

    /**
     * @module 
     *
     * @param boolean|null $isActive
     *
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        $this->modifiedProperties[self::IS_ACTIVE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return boolean|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module 
     *
     * @param boolean|null $isActive
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsActiveOrFail($isActive)
    {
        if ($isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->setIsActive($isActive);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsActiveOrFail()
    {
        if ($this->isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->isActive;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsActive()
    {
        $this->assertPropertyIsSet(self::IS_ACTIVE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductAbstractLocalizedAttributesEntityTransfer[] $spyProductAbstractLocalizedAttributess
     *
     * @return $this
     */
    public function setSpyProductAbstractLocalizedAttributess(ArrayObject $spyProductAbstractLocalizedAttributess)
    {
        $this->spyProductAbstractLocalizedAttributess = $spyProductAbstractLocalizedAttributess;
        $this->modifiedProperties[self::SPY_PRODUCT_ABSTRACT_LOCALIZED_ATTRIBUTESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductAbstractLocalizedAttributesEntityTransfer[]
     */
    public function getSpyProductAbstractLocalizedAttributess()
    {
        return $this->spyProductAbstractLocalizedAttributess;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductAbstractLocalizedAttributesEntityTransfer $spyProductAbstractLocalizedAttributess
     *
     * @return $this
     */
    public function addSpyProductAbstractLocalizedAttributess(SpyProductAbstractLocalizedAttributesEntityTransfer $spyProductAbstractLocalizedAttributess)
    {
        $this->spyProductAbstractLocalizedAttributess[] = $spyProductAbstractLocalizedAttributess;
        $this->modifiedProperties[self::SPY_PRODUCT_ABSTRACT_LOCALIZED_ATTRIBUTESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductAbstractLocalizedAttributess()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_ABSTRACT_LOCALIZED_ATTRIBUTESS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductLocalizedAttributesEntityTransfer[] $spyProductLocalizedAttributess
     *
     * @return $this
     */
    public function setSpyProductLocalizedAttributess(ArrayObject $spyProductLocalizedAttributess)
    {
        $this->spyProductLocalizedAttributess = $spyProductLocalizedAttributess;
        $this->modifiedProperties[self::SPY_PRODUCT_LOCALIZED_ATTRIBUTESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductLocalizedAttributesEntityTransfer[]
     */
    public function getSpyProductLocalizedAttributess()
    {
        return $this->spyProductLocalizedAttributess;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductLocalizedAttributesEntityTransfer $spyProductLocalizedAttributess
     *
     * @return $this
     */
    public function addSpyProductLocalizedAttributess(SpyProductLocalizedAttributesEntityTransfer $spyProductLocalizedAttributess)
    {
        $this->spyProductLocalizedAttributess[] = $spyProductLocalizedAttributess;
        $this->modifiedProperties[self::SPY_PRODUCT_LOCALIZED_ATTRIBUTESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductLocalizedAttributess()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_LOCALIZED_ATTRIBUTESS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyAvailabilityNotificationSubscriptionEntityTransfer[] $spyAvailabilityNotificationSubscriptions
     *
     * @return $this
     */
    public function setSpyAvailabilityNotificationSubscriptions(ArrayObject $spyAvailabilityNotificationSubscriptions)
    {
        $this->spyAvailabilityNotificationSubscriptions = $spyAvailabilityNotificationSubscriptions;
        $this->modifiedProperties[self::SPY_AVAILABILITY_NOTIFICATION_SUBSCRIPTIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyAvailabilityNotificationSubscriptionEntityTransfer[]
     */
    public function getSpyAvailabilityNotificationSubscriptions()
    {
        return $this->spyAvailabilityNotificationSubscriptions;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyAvailabilityNotificationSubscriptionEntityTransfer $spyAvailabilityNotificationSubscriptions
     *
     * @return $this
     */
    public function addSpyAvailabilityNotificationSubscriptions(SpyAvailabilityNotificationSubscriptionEntityTransfer $spyAvailabilityNotificationSubscriptions)
    {
        $this->spyAvailabilityNotificationSubscriptions[] = $spyAvailabilityNotificationSubscriptions;
        $this->modifiedProperties[self::SPY_AVAILABILITY_NOTIFICATION_SUBSCRIPTIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyAvailabilityNotificationSubscriptions()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_AVAILABILITY_NOTIFICATION_SUBSCRIPTIONS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyContentLocalizedEntityTransfer[] $spyContentLocalizeds
     *
     * @return $this
     */
    public function setSpyContentLocalizeds(ArrayObject $spyContentLocalizeds)
    {
        $this->spyContentLocalizeds = $spyContentLocalizeds;
        $this->modifiedProperties[self::SPY_CONTENT_LOCALIZEDS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyContentLocalizedEntityTransfer[]
     */
    public function getSpyContentLocalizeds()
    {
        return $this->spyContentLocalizeds;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyContentLocalizedEntityTransfer $spyContentLocalizeds
     *
     * @return $this
     */
    public function addSpyContentLocalizeds(SpyContentLocalizedEntityTransfer $spyContentLocalizeds)
    {
        $this->spyContentLocalizeds[] = $spyContentLocalizeds;
        $this->modifiedProperties[self::SPY_CONTENT_LOCALIZEDS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyContentLocalizeds()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_CONTENT_LOCALIZEDS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyGlossaryTranslationEntityTransfer[] $spyGlossaryTranslations
     *
     * @return $this
     */
    public function setSpyGlossaryTranslations(ArrayObject $spyGlossaryTranslations)
    {
        $this->spyGlossaryTranslations = $spyGlossaryTranslations;
        $this->modifiedProperties[self::SPY_GLOSSARY_TRANSLATIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyGlossaryTranslationEntityTransfer[]
     */
    public function getSpyGlossaryTranslations()
    {
        return $this->spyGlossaryTranslations;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyGlossaryTranslationEntityTransfer $spyGlossaryTranslations
     *
     * @return $this
     */
    public function addSpyGlossaryTranslations(SpyGlossaryTranslationEntityTransfer $spyGlossaryTranslations)
    {
        $this->spyGlossaryTranslations[] = $spyGlossaryTranslations;
        $this->modifiedProperties[self::SPY_GLOSSARY_TRANSLATIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyGlossaryTranslations()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_GLOSSARY_TRANSLATIONS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCmsPageLocalizedAttributesEntityTransfer[] $spyCmsPageLocalizedAttributess
     *
     * @return $this
     */
    public function setSpyCmsPageLocalizedAttributess(ArrayObject $spyCmsPageLocalizedAttributess)
    {
        $this->spyCmsPageLocalizedAttributess = $spyCmsPageLocalizedAttributess;
        $this->modifiedProperties[self::SPY_CMS_PAGE_LOCALIZED_ATTRIBUTESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCmsPageLocalizedAttributesEntityTransfer[]
     */
    public function getSpyCmsPageLocalizedAttributess()
    {
        return $this->spyCmsPageLocalizedAttributess;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCmsPageLocalizedAttributesEntityTransfer $spyCmsPageLocalizedAttributess
     *
     * @return $this
     */
    public function addSpyCmsPageLocalizedAttributess(SpyCmsPageLocalizedAttributesEntityTransfer $spyCmsPageLocalizedAttributess)
    {
        $this->spyCmsPageLocalizedAttributess[] = $spyCmsPageLocalizedAttributess;
        $this->modifiedProperties[self::SPY_CMS_PAGE_LOCALIZED_ATTRIBUTESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCmsPageLocalizedAttributess()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_CMS_PAGE_LOCALIZED_ATTRIBUTESS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyTouchStorageEntityTransfer[] $spyTouchStorages
     *
     * @return $this
     */
    public function setSpyTouchStorages(ArrayObject $spyTouchStorages)
    {
        $this->spyTouchStorages = $spyTouchStorages;
        $this->modifiedProperties[self::SPY_TOUCH_STORAGES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyTouchStorageEntityTransfer[]
     */
    public function getSpyTouchStorages()
    {
        return $this->spyTouchStorages;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyTouchStorageEntityTransfer $spyTouchStorages
     *
     * @return $this
     */
    public function addSpyTouchStorages(SpyTouchStorageEntityTransfer $spyTouchStorages)
    {
        $this->spyTouchStorages[] = $spyTouchStorages;
        $this->modifiedProperties[self::SPY_TOUCH_STORAGES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyTouchStorages()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_TOUCH_STORAGES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyTouchSearchEntityTransfer[] $spyTouchSearches
     *
     * @return $this
     */
    public function setSpyTouchSearches(ArrayObject $spyTouchSearches)
    {
        $this->spyTouchSearches = $spyTouchSearches;
        $this->modifiedProperties[self::SPY_TOUCH_SEARCHES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyTouchSearchEntityTransfer[]
     */
    public function getSpyTouchSearches()
    {
        return $this->spyTouchSearches;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyTouchSearchEntityTransfer $spyTouchSearches
     *
     * @return $this
     */
    public function addSpyTouchSearches(SpyTouchSearchEntityTransfer $spyTouchSearches)
    {
        $this->spyTouchSearches[] = $spyTouchSearches;
        $this->modifiedProperties[self::SPY_TOUCH_SEARCHES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyTouchSearches()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_TOUCH_SEARCHES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductDiscontinuedNoteEntityTransfer[] $spyProductDiscontinuedNotes
     *
     * @return $this
     */
    public function setSpyProductDiscontinuedNotes(ArrayObject $spyProductDiscontinuedNotes)
    {
        $this->spyProductDiscontinuedNotes = $spyProductDiscontinuedNotes;
        $this->modifiedProperties[self::SPY_PRODUCT_DISCONTINUED_NOTES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductDiscontinuedNoteEntityTransfer[]
     */
    public function getSpyProductDiscontinuedNotes()
    {
        return $this->spyProductDiscontinuedNotes;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductDiscontinuedNoteEntityTransfer $spyProductDiscontinuedNotes
     *
     * @return $this
     */
    public function addSpyProductDiscontinuedNotes(SpyProductDiscontinuedNoteEntityTransfer $spyProductDiscontinuedNotes)
    {
        $this->spyProductDiscontinuedNotes[] = $spyProductDiscontinuedNotes;
        $this->modifiedProperties[self::SPY_PRODUCT_DISCONTINUED_NOTES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductDiscontinuedNotes()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_DISCONTINUED_NOTES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyNavigationNodeLocalizedAttributesEntityTransfer[] $spyNavigationNodeLocalizedAttributess
     *
     * @return $this
     */
    public function setSpyNavigationNodeLocalizedAttributess(ArrayObject $spyNavigationNodeLocalizedAttributess)
    {
        $this->spyNavigationNodeLocalizedAttributess = $spyNavigationNodeLocalizedAttributess;
        $this->modifiedProperties[self::SPY_NAVIGATION_NODE_LOCALIZED_ATTRIBUTESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyNavigationNodeLocalizedAttributesEntityTransfer[]
     */
    public function getSpyNavigationNodeLocalizedAttributess()
    {
        return $this->spyNavigationNodeLocalizedAttributess;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyNavigationNodeLocalizedAttributesEntityTransfer $spyNavigationNodeLocalizedAttributess
     *
     * @return $this
     */
    public function addSpyNavigationNodeLocalizedAttributess(SpyNavigationNodeLocalizedAttributesEntityTransfer $spyNavigationNodeLocalizedAttributess)
    {
        $this->spyNavigationNodeLocalizedAttributess[] = $spyNavigationNodeLocalizedAttributess;
        $this->modifiedProperties[self::SPY_NAVIGATION_NODE_LOCALIZED_ATTRIBUTESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyNavigationNodeLocalizedAttributess()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_NAVIGATION_NODE_LOCALIZED_ATTRIBUTESS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCustomerEntityTransfer[] $spyCustomers
     *
     * @return $this
     */
    public function setSpyCustomers(ArrayObject $spyCustomers)
    {
        $this->spyCustomers = $spyCustomers;
        $this->modifiedProperties[self::SPY_CUSTOMERS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCustomerEntityTransfer[]
     */
    public function getSpyCustomers()
    {
        return $this->spyCustomers;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCustomerEntityTransfer $spyCustomers
     *
     * @return $this
     */
    public function addSpyCustomers(SpyCustomerEntityTransfer $spyCustomers)
    {
        $this->spyCustomers[] = $spyCustomers;
        $this->modifiedProperties[self::SPY_CUSTOMERS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCustomers()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_CUSTOMERS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCategoryImageSetEntityTransfer[] $spyCategoryImageSets
     *
     * @return $this
     */
    public function setSpyCategoryImageSets(ArrayObject $spyCategoryImageSets)
    {
        $this->spyCategoryImageSets = $spyCategoryImageSets;
        $this->modifiedProperties[self::SPY_CATEGORY_IMAGE_SETS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCategoryImageSetEntityTransfer[]
     */
    public function getSpyCategoryImageSets()
    {
        return $this->spyCategoryImageSets;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCategoryImageSetEntityTransfer $spyCategoryImageSets
     *
     * @return $this
     */
    public function addSpyCategoryImageSets(SpyCategoryImageSetEntityTransfer $spyCategoryImageSets)
    {
        $this->spyCategoryImageSets[] = $spyCategoryImageSets;
        $this->modifiedProperties[self::SPY_CATEGORY_IMAGE_SETS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCategoryImageSets()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_CATEGORY_IMAGE_SETS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductLabelLocalizedAttributesEntityTransfer[] $spyProductLabelLocalizedAttributess
     *
     * @return $this
     */
    public function setSpyProductLabelLocalizedAttributess(ArrayObject $spyProductLabelLocalizedAttributess)
    {
        $this->spyProductLabelLocalizedAttributess = $spyProductLabelLocalizedAttributess;
        $this->modifiedProperties[self::SPY_PRODUCT_LABEL_LOCALIZED_ATTRIBUTESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductLabelLocalizedAttributesEntityTransfer[]
     */
    public function getSpyProductLabelLocalizedAttributess()
    {
        return $this->spyProductLabelLocalizedAttributess;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductLabelLocalizedAttributesEntityTransfer $spyProductLabelLocalizedAttributess
     *
     * @return $this
     */
    public function addSpyProductLabelLocalizedAttributess(SpyProductLabelLocalizedAttributesEntityTransfer $spyProductLabelLocalizedAttributess)
    {
        $this->spyProductLabelLocalizedAttributess[] = $spyProductLabelLocalizedAttributess;
        $this->modifiedProperties[self::SPY_PRODUCT_LABEL_LOCALIZED_ATTRIBUTESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductLabelLocalizedAttributess()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_LABEL_LOCALIZED_ATTRIBUTESS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyUrlEntityTransfer[] $spyUrls
     *
     * @return $this
     */
    public function setSpyUrls(ArrayObject $spyUrls)
    {
        $this->spyUrls = $spyUrls;
        $this->modifiedProperties[self::SPY_URLS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyUrlEntityTransfer[]
     */
    public function getSpyUrls()
    {
        return $this->spyUrls;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyUrlEntityTransfer $spyUrls
     *
     * @return $this
     */
    public function addSpyUrls(SpyUrlEntityTransfer $spyUrls)
    {
        $this->spyUrls[] = $spyUrls;
        $this->modifiedProperties[self::SPY_URLS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyUrls()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_URLS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductManagementAttributeValueTranslationEntityTransfer[] $spyProductManagementAttributeValueTranslations
     *
     * @return $this
     */
    public function setSpyProductManagementAttributeValueTranslations(ArrayObject $spyProductManagementAttributeValueTranslations)
    {
        $this->spyProductManagementAttributeValueTranslations = $spyProductManagementAttributeValueTranslations;
        $this->modifiedProperties[self::SPY_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE_TRANSLATIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductManagementAttributeValueTranslationEntityTransfer[]
     */
    public function getSpyProductManagementAttributeValueTranslations()
    {
        return $this->spyProductManagementAttributeValueTranslations;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductManagementAttributeValueTranslationEntityTransfer $spyProductManagementAttributeValueTranslations
     *
     * @return $this
     */
    public function addSpyProductManagementAttributeValueTranslations(SpyProductManagementAttributeValueTranslationEntityTransfer $spyProductManagementAttributeValueTranslations)
    {
        $this->spyProductManagementAttributeValueTranslations[] = $spyProductManagementAttributeValueTranslations;
        $this->modifiedProperties[self::SPY_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE_TRANSLATIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductManagementAttributeValueTranslations()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_MANAGEMENT_ATTRIBUTE_VALUE_TRANSLATIONS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductReviewEntityTransfer[] $spyProductReviews
     *
     * @return $this
     */
    public function setSpyProductReviews(ArrayObject $spyProductReviews)
    {
        $this->spyProductReviews = $spyProductReviews;
        $this->modifiedProperties[self::SPY_PRODUCT_REVIEWS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductReviewEntityTransfer[]
     */
    public function getSpyProductReviews()
    {
        return $this->spyProductReviews;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductReviewEntityTransfer $spyProductReviews
     *
     * @return $this
     */
    public function addSpyProductReviews(SpyProductReviewEntityTransfer $spyProductReviews)
    {
        $this->spyProductReviews[] = $spyProductReviews;
        $this->modifiedProperties[self::SPY_PRODUCT_REVIEWS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductReviews()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_REVIEWS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductSearchEntityTransfer[] $spyProductSearches
     *
     * @return $this
     */
    public function setSpyProductSearches(ArrayObject $spyProductSearches)
    {
        $this->spyProductSearches = $spyProductSearches;
        $this->modifiedProperties[self::SPY_PRODUCT_SEARCHES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductSearchEntityTransfer[]
     */
    public function getSpyProductSearches()
    {
        return $this->spyProductSearches;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductSearchEntityTransfer $spyProductSearches
     *
     * @return $this
     */
    public function addSpyProductSearches(SpyProductSearchEntityTransfer $spyProductSearches)
    {
        $this->spyProductSearches[] = $spyProductSearches;
        $this->modifiedProperties[self::SPY_PRODUCT_SEARCHES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductSearches()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_SEARCHES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyFileLocalizedAttributesEntityTransfer[] $spyFileLocalizedAttributess
     *
     * @return $this
     */
    public function setSpyFileLocalizedAttributess(ArrayObject $spyFileLocalizedAttributess)
    {
        $this->spyFileLocalizedAttributess = $spyFileLocalizedAttributess;
        $this->modifiedProperties[self::SPY_FILE_LOCALIZED_ATTRIBUTESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyFileLocalizedAttributesEntityTransfer[]
     */
    public function getSpyFileLocalizedAttributess()
    {
        return $this->spyFileLocalizedAttributess;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyFileLocalizedAttributesEntityTransfer $spyFileLocalizedAttributess
     *
     * @return $this
     */
    public function addSpyFileLocalizedAttributess(SpyFileLocalizedAttributesEntityTransfer $spyFileLocalizedAttributess)
    {
        $this->spyFileLocalizedAttributess[] = $spyFileLocalizedAttributess;
        $this->modifiedProperties[self::SPY_FILE_LOCALIZED_ATTRIBUTESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyFileLocalizedAttributess()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_FILE_LOCALIZED_ATTRIBUTESS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyFileDirectoryLocalizedAttributesEntityTransfer[] $spyFileDirectoryLocalizedAttributess
     *
     * @return $this
     */
    public function setSpyFileDirectoryLocalizedAttributess(ArrayObject $spyFileDirectoryLocalizedAttributess)
    {
        $this->spyFileDirectoryLocalizedAttributess = $spyFileDirectoryLocalizedAttributess;
        $this->modifiedProperties[self::SPY_FILE_DIRECTORY_LOCALIZED_ATTRIBUTESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyFileDirectoryLocalizedAttributesEntityTransfer[]
     */
    public function getSpyFileDirectoryLocalizedAttributess()
    {
        return $this->spyFileDirectoryLocalizedAttributess;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyFileDirectoryLocalizedAttributesEntityTransfer $spyFileDirectoryLocalizedAttributess
     *
     * @return $this
     */
    public function addSpyFileDirectoryLocalizedAttributess(SpyFileDirectoryLocalizedAttributesEntityTransfer $spyFileDirectoryLocalizedAttributess)
    {
        $this->spyFileDirectoryLocalizedAttributess[] = $spyFileDirectoryLocalizedAttributess;
        $this->modifiedProperties[self::SPY_FILE_DIRECTORY_LOCALIZED_ATTRIBUTESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyFileDirectoryLocalizedAttributess()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_FILE_DIRECTORY_LOCALIZED_ATTRIBUTESS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductImageSetEntityTransfer[] $spyProductImageSets
     *
     * @return $this
     */
    public function setSpyProductImageSets(ArrayObject $spyProductImageSets)
    {
        $this->spyProductImageSets = $spyProductImageSets;
        $this->modifiedProperties[self::SPY_PRODUCT_IMAGE_SETS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductImageSetEntityTransfer[]
     */
    public function getSpyProductImageSets()
    {
        return $this->spyProductImageSets;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductImageSetEntityTransfer $spyProductImageSets
     *
     * @return $this
     */
    public function addSpyProductImageSets(SpyProductImageSetEntityTransfer $spyProductImageSets)
    {
        $this->spyProductImageSets[] = $spyProductImageSets;
        $this->modifiedProperties[self::SPY_PRODUCT_IMAGE_SETS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductImageSets()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_IMAGE_SETS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyUserEntityTransfer[] $spyUsers
     *
     * @return $this
     */
    public function setSpyUsers(ArrayObject $spyUsers)
    {
        $this->spyUsers = $spyUsers;
        $this->modifiedProperties[self::SPY_USERS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyUserEntityTransfer[]
     */
    public function getSpyUsers()
    {
        return $this->spyUsers;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyUserEntityTransfer $spyUsers
     *
     * @return $this
     */
    public function addSpyUsers(SpyUserEntityTransfer $spyUsers)
    {
        $this->spyUsers[] = $spyUsers;
        $this->modifiedProperties[self::SPY_USERS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyUsers()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_USERS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCategoryAttributeEntityTransfer[] $spyCategoryAttributes
     *
     * @return $this
     */
    public function setSpyCategoryAttributes(ArrayObject $spyCategoryAttributes)
    {
        $this->spyCategoryAttributes = $spyCategoryAttributes;
        $this->modifiedProperties[self::SPY_CATEGORY_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCategoryAttributeEntityTransfer[]
     */
    public function getSpyCategoryAttributes()
    {
        return $this->spyCategoryAttributes;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCategoryAttributeEntityTransfer $spyCategoryAttributes
     *
     * @return $this
     */
    public function addSpyCategoryAttributes(SpyCategoryAttributeEntityTransfer $spyCategoryAttributes)
    {
        $this->spyCategoryAttributes[] = $spyCategoryAttributes;
        $this->modifiedProperties[self::SPY_CATEGORY_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCategoryAttributes()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_CATEGORY_ATTRIBUTES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderEntityTransfer[] $spySalesOrders
     *
     * @return $this
     */
    public function setSpySalesOrders(ArrayObject $spySalesOrders)
    {
        $this->spySalesOrders = $spySalesOrders;
        $this->modifiedProperties[self::SPY_SALES_ORDERS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderEntityTransfer[]
     */
    public function getSpySalesOrders()
    {
        return $this->spySalesOrders;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderEntityTransfer $spySalesOrders
     *
     * @return $this
     */
    public function addSpySalesOrders(SpySalesOrderEntityTransfer $spySalesOrders)
    {
        $this->spySalesOrders[] = $spySalesOrders;
        $this->modifiedProperties[self::SPY_SALES_ORDERS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpySalesOrders()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SALES_ORDERS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductSetDataEntityTransfer[] $spyProductSetDatas
     *
     * @return $this
     */
    public function setSpyProductSetDatas(ArrayObject $spyProductSetDatas)
    {
        $this->spyProductSetDatas = $spyProductSetDatas;
        $this->modifiedProperties[self::SPY_PRODUCT_SET_DATAS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductSetDataEntityTransfer[]
     */
    public function getSpyProductSetDatas()
    {
        return $this->spyProductSetDatas;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductSetDataEntityTransfer $spyProductSetDatas
     *
     * @return $this
     */
    public function addSpyProductSetDatas(SpyProductSetDataEntityTransfer $spyProductSetDatas)
    {
        $this->spyProductSetDatas[] = $spyProductSetDatas;
        $this->modifiedProperties[self::SPY_PRODUCT_SET_DATAS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductSetDatas()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_SET_DATAS);

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
                case 'idLocale':
                case 'localeName':
                case 'isActive':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyProductAbstractLocalizedAttributess':
                case 'spyProductLocalizedAttributess':
                case 'spyAvailabilityNotificationSubscriptions':
                case 'spyContentLocalizeds':
                case 'spyGlossaryTranslations':
                case 'spyCmsPageLocalizedAttributess':
                case 'spyTouchStorages':
                case 'spyTouchSearches':
                case 'spyProductDiscontinuedNotes':
                case 'spyNavigationNodeLocalizedAttributess':
                case 'spyCustomers':
                case 'spyCategoryImageSets':
                case 'spyProductLabelLocalizedAttributess':
                case 'spyUrls':
                case 'spyProductManagementAttributeValueTranslations':
                case 'spyProductReviews':
                case 'spyProductSearches':
                case 'spyFileLocalizedAttributess':
                case 'spyFileDirectoryLocalizedAttributess':
                case 'spyProductImageSets':
                case 'spyUsers':
                case 'spyCategoryAttributes':
                case 'spySalesOrders':
                case 'spyProductSetDatas':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                default:
                    if (!$ignoreMissingProperty) {
                        throw new \InvalidArgumentException(sprintf('Missing property `%s` in `%s`', $property, static::class));
                    }
                    $this->virtualProperties[$property] = $value;
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
                case 'idLocale':
                case 'localeName':
                case 'isActive':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyProductAbstractLocalizedAttributess':
                case 'spyProductLocalizedAttributess':
                case 'spyAvailabilityNotificationSubscriptions':
                case 'spyContentLocalizeds':
                case 'spyGlossaryTranslations':
                case 'spyCmsPageLocalizedAttributess':
                case 'spyTouchStorages':
                case 'spyTouchSearches':
                case 'spyProductDiscontinuedNotes':
                case 'spyNavigationNodeLocalizedAttributess':
                case 'spyCustomers':
                case 'spyCategoryImageSets':
                case 'spyProductLabelLocalizedAttributess':
                case 'spyUrls':
                case 'spyProductManagementAttributeValueTranslations':
                case 'spyProductReviews':
                case 'spyProductSearches':
                case 'spyFileLocalizedAttributess':
                case 'spyFileDirectoryLocalizedAttributess':
                case 'spyProductImageSets':
                case 'spyUsers':
                case 'spyCategoryAttributes':
                case 'spySalesOrders':
                case 'spyProductSetDatas':
                    $values[$arrayKey] = $value ? $this->addValuesToCollectionModified($value, true, true) : $value;

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
                case 'idLocale':
                case 'localeName':
                case 'isActive':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyProductAbstractLocalizedAttributess':
                case 'spyProductLocalizedAttributess':
                case 'spyAvailabilityNotificationSubscriptions':
                case 'spyContentLocalizeds':
                case 'spyGlossaryTranslations':
                case 'spyCmsPageLocalizedAttributess':
                case 'spyTouchStorages':
                case 'spyTouchSearches':
                case 'spyProductDiscontinuedNotes':
                case 'spyNavigationNodeLocalizedAttributess':
                case 'spyCustomers':
                case 'spyCategoryImageSets':
                case 'spyProductLabelLocalizedAttributess':
                case 'spyUrls':
                case 'spyProductManagementAttributeValueTranslations':
                case 'spyProductReviews':
                case 'spyProductSearches':
                case 'spyFileLocalizedAttributess':
                case 'spyFileDirectoryLocalizedAttributess':
                case 'spyProductImageSets':
                case 'spyUsers':
                case 'spyCategoryAttributes':
                case 'spySalesOrders':
                case 'spyProductSetDatas':
                    $values[$arrayKey] = $value ? $this->addValuesToCollectionModified($value, true, false) : $value;

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
        $this->spyProductAbstractLocalizedAttributess = $this->spyProductAbstractLocalizedAttributess ?: new ArrayObject();
        $this->spyProductLocalizedAttributess = $this->spyProductLocalizedAttributess ?: new ArrayObject();
        $this->spyAvailabilityNotificationSubscriptions = $this->spyAvailabilityNotificationSubscriptions ?: new ArrayObject();
        $this->spyContentLocalizeds = $this->spyContentLocalizeds ?: new ArrayObject();
        $this->spyGlossaryTranslations = $this->spyGlossaryTranslations ?: new ArrayObject();
        $this->spyCmsPageLocalizedAttributess = $this->spyCmsPageLocalizedAttributess ?: new ArrayObject();
        $this->spyTouchStorages = $this->spyTouchStorages ?: new ArrayObject();
        $this->spyTouchSearches = $this->spyTouchSearches ?: new ArrayObject();
        $this->spyProductDiscontinuedNotes = $this->spyProductDiscontinuedNotes ?: new ArrayObject();
        $this->spyNavigationNodeLocalizedAttributess = $this->spyNavigationNodeLocalizedAttributess ?: new ArrayObject();
        $this->spyCustomers = $this->spyCustomers ?: new ArrayObject();
        $this->spyCategoryImageSets = $this->spyCategoryImageSets ?: new ArrayObject();
        $this->spyProductLabelLocalizedAttributess = $this->spyProductLabelLocalizedAttributess ?: new ArrayObject();
        $this->spyUrls = $this->spyUrls ?: new ArrayObject();
        $this->spyProductManagementAttributeValueTranslations = $this->spyProductManagementAttributeValueTranslations ?: new ArrayObject();
        $this->spyProductReviews = $this->spyProductReviews ?: new ArrayObject();
        $this->spyProductSearches = $this->spyProductSearches ?: new ArrayObject();
        $this->spyFileLocalizedAttributess = $this->spyFileLocalizedAttributess ?: new ArrayObject();
        $this->spyFileDirectoryLocalizedAttributess = $this->spyFileDirectoryLocalizedAttributess ?: new ArrayObject();
        $this->spyProductImageSets = $this->spyProductImageSets ?: new ArrayObject();
        $this->spyUsers = $this->spyUsers ?: new ArrayObject();
        $this->spyCategoryAttributes = $this->spyCategoryAttributes ?: new ArrayObject();
        $this->spySalesOrders = $this->spySalesOrders ?: new ArrayObject();
        $this->spyProductSetDatas = $this->spyProductSetDatas ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idLocale' => $this->idLocale,
            'localeName' => $this->localeName,
            'isActive' => $this->isActive,
            'spyProductAbstractLocalizedAttributess' => $this->spyProductAbstractLocalizedAttributess,
            'spyProductLocalizedAttributess' => $this->spyProductLocalizedAttributess,
            'spyAvailabilityNotificationSubscriptions' => $this->spyAvailabilityNotificationSubscriptions,
            'spyContentLocalizeds' => $this->spyContentLocalizeds,
            'spyGlossaryTranslations' => $this->spyGlossaryTranslations,
            'spyCmsPageLocalizedAttributess' => $this->spyCmsPageLocalizedAttributess,
            'spyTouchStorages' => $this->spyTouchStorages,
            'spyTouchSearches' => $this->spyTouchSearches,
            'spyProductDiscontinuedNotes' => $this->spyProductDiscontinuedNotes,
            'spyNavigationNodeLocalizedAttributess' => $this->spyNavigationNodeLocalizedAttributess,
            'spyCustomers' => $this->spyCustomers,
            'spyCategoryImageSets' => $this->spyCategoryImageSets,
            'spyProductLabelLocalizedAttributess' => $this->spyProductLabelLocalizedAttributess,
            'spyUrls' => $this->spyUrls,
            'spyProductManagementAttributeValueTranslations' => $this->spyProductManagementAttributeValueTranslations,
            'spyProductReviews' => $this->spyProductReviews,
            'spyProductSearches' => $this->spyProductSearches,
            'spyFileLocalizedAttributess' => $this->spyFileLocalizedAttributess,
            'spyFileDirectoryLocalizedAttributess' => $this->spyFileDirectoryLocalizedAttributess,
            'spyProductImageSets' => $this->spyProductImageSets,
            'spyUsers' => $this->spyUsers,
            'spyCategoryAttributes' => $this->spyCategoryAttributes,
            'spySalesOrders' => $this->spySalesOrders,
            'spyProductSetDatas' => $this->spyProductSetDatas,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_locale' => $this->idLocale,
            'locale_name' => $this->localeName,
            'is_active' => $this->isActive,
            'spy_product_abstract_localized_attributess' => $this->spyProductAbstractLocalizedAttributess,
            'spy_product_localized_attributess' => $this->spyProductLocalizedAttributess,
            'spy_availability_notification_subscriptions' => $this->spyAvailabilityNotificationSubscriptions,
            'spy_content_localizeds' => $this->spyContentLocalizeds,
            'spy_glossary_translations' => $this->spyGlossaryTranslations,
            'spy_cms_page_localized_attributess' => $this->spyCmsPageLocalizedAttributess,
            'spy_touch_storages' => $this->spyTouchStorages,
            'spy_touch_searches' => $this->spyTouchSearches,
            'spy_product_discontinued_notes' => $this->spyProductDiscontinuedNotes,
            'spy_navigation_node_localized_attributess' => $this->spyNavigationNodeLocalizedAttributess,
            'spy_customers' => $this->spyCustomers,
            'spy_category_image_sets' => $this->spyCategoryImageSets,
            'spy_product_label_localized_attributess' => $this->spyProductLabelLocalizedAttributess,
            'spy_urls' => $this->spyUrls,
            'spy_product_management_attribute_value_translations' => $this->spyProductManagementAttributeValueTranslations,
            'spy_product_reviews' => $this->spyProductReviews,
            'spy_product_searches' => $this->spyProductSearches,
            'spy_file_localized_attributess' => $this->spyFileLocalizedAttributess,
            'spy_file_directory_localized_attributess' => $this->spyFileDirectoryLocalizedAttributess,
            'spy_product_image_sets' => $this->spyProductImageSets,
            'spy_users' => $this->spyUsers,
            'spy_category_attributes' => $this->spyCategoryAttributes,
            'spy_sales_orders' => $this->spySalesOrders,
            'spy_product_set_datas' => $this->spyProductSetDatas,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_locale' => $this->idLocale instanceof AbstractTransfer ? $this->idLocale->toArray(true, false) : $this->idLocale,
            'locale_name' => $this->localeName instanceof AbstractTransfer ? $this->localeName->toArray(true, false) : $this->localeName,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'spy_product_abstract_localized_attributess' => $this->spyProductAbstractLocalizedAttributess instanceof AbstractTransfer ? $this->spyProductAbstractLocalizedAttributess->toArray(true, false) : $this->addValuesToCollection($this->spyProductAbstractLocalizedAttributess, true, false),
            'spy_product_localized_attributess' => $this->spyProductLocalizedAttributess instanceof AbstractTransfer ? $this->spyProductLocalizedAttributess->toArray(true, false) : $this->addValuesToCollection($this->spyProductLocalizedAttributess, true, false),
            'spy_availability_notification_subscriptions' => $this->spyAvailabilityNotificationSubscriptions instanceof AbstractTransfer ? $this->spyAvailabilityNotificationSubscriptions->toArray(true, false) : $this->addValuesToCollection($this->spyAvailabilityNotificationSubscriptions, true, false),
            'spy_content_localizeds' => $this->spyContentLocalizeds instanceof AbstractTransfer ? $this->spyContentLocalizeds->toArray(true, false) : $this->addValuesToCollection($this->spyContentLocalizeds, true, false),
            'spy_glossary_translations' => $this->spyGlossaryTranslations instanceof AbstractTransfer ? $this->spyGlossaryTranslations->toArray(true, false) : $this->addValuesToCollection($this->spyGlossaryTranslations, true, false),
            'spy_cms_page_localized_attributess' => $this->spyCmsPageLocalizedAttributess instanceof AbstractTransfer ? $this->spyCmsPageLocalizedAttributess->toArray(true, false) : $this->addValuesToCollection($this->spyCmsPageLocalizedAttributess, true, false),
            'spy_touch_storages' => $this->spyTouchStorages instanceof AbstractTransfer ? $this->spyTouchStorages->toArray(true, false) : $this->addValuesToCollection($this->spyTouchStorages, true, false),
            'spy_touch_searches' => $this->spyTouchSearches instanceof AbstractTransfer ? $this->spyTouchSearches->toArray(true, false) : $this->addValuesToCollection($this->spyTouchSearches, true, false),
            'spy_product_discontinued_notes' => $this->spyProductDiscontinuedNotes instanceof AbstractTransfer ? $this->spyProductDiscontinuedNotes->toArray(true, false) : $this->addValuesToCollection($this->spyProductDiscontinuedNotes, true, false),
            'spy_navigation_node_localized_attributess' => $this->spyNavigationNodeLocalizedAttributess instanceof AbstractTransfer ? $this->spyNavigationNodeLocalizedAttributess->toArray(true, false) : $this->addValuesToCollection($this->spyNavigationNodeLocalizedAttributess, true, false),
            'spy_customers' => $this->spyCustomers instanceof AbstractTransfer ? $this->spyCustomers->toArray(true, false) : $this->addValuesToCollection($this->spyCustomers, true, false),
            'spy_category_image_sets' => $this->spyCategoryImageSets instanceof AbstractTransfer ? $this->spyCategoryImageSets->toArray(true, false) : $this->addValuesToCollection($this->spyCategoryImageSets, true, false),
            'spy_product_label_localized_attributess' => $this->spyProductLabelLocalizedAttributess instanceof AbstractTransfer ? $this->spyProductLabelLocalizedAttributess->toArray(true, false) : $this->addValuesToCollection($this->spyProductLabelLocalizedAttributess, true, false),
            'spy_urls' => $this->spyUrls instanceof AbstractTransfer ? $this->spyUrls->toArray(true, false) : $this->addValuesToCollection($this->spyUrls, true, false),
            'spy_product_management_attribute_value_translations' => $this->spyProductManagementAttributeValueTranslations instanceof AbstractTransfer ? $this->spyProductManagementAttributeValueTranslations->toArray(true, false) : $this->addValuesToCollection($this->spyProductManagementAttributeValueTranslations, true, false),
            'spy_product_reviews' => $this->spyProductReviews instanceof AbstractTransfer ? $this->spyProductReviews->toArray(true, false) : $this->addValuesToCollection($this->spyProductReviews, true, false),
            'spy_product_searches' => $this->spyProductSearches instanceof AbstractTransfer ? $this->spyProductSearches->toArray(true, false) : $this->addValuesToCollection($this->spyProductSearches, true, false),
            'spy_file_localized_attributess' => $this->spyFileLocalizedAttributess instanceof AbstractTransfer ? $this->spyFileLocalizedAttributess->toArray(true, false) : $this->addValuesToCollection($this->spyFileLocalizedAttributess, true, false),
            'spy_file_directory_localized_attributess' => $this->spyFileDirectoryLocalizedAttributess instanceof AbstractTransfer ? $this->spyFileDirectoryLocalizedAttributess->toArray(true, false) : $this->addValuesToCollection($this->spyFileDirectoryLocalizedAttributess, true, false),
            'spy_product_image_sets' => $this->spyProductImageSets instanceof AbstractTransfer ? $this->spyProductImageSets->toArray(true, false) : $this->addValuesToCollection($this->spyProductImageSets, true, false),
            'spy_users' => $this->spyUsers instanceof AbstractTransfer ? $this->spyUsers->toArray(true, false) : $this->addValuesToCollection($this->spyUsers, true, false),
            'spy_category_attributes' => $this->spyCategoryAttributes instanceof AbstractTransfer ? $this->spyCategoryAttributes->toArray(true, false) : $this->addValuesToCollection($this->spyCategoryAttributes, true, false),
            'spy_sales_orders' => $this->spySalesOrders instanceof AbstractTransfer ? $this->spySalesOrders->toArray(true, false) : $this->addValuesToCollection($this->spySalesOrders, true, false),
            'spy_product_set_datas' => $this->spyProductSetDatas instanceof AbstractTransfer ? $this->spyProductSetDatas->toArray(true, false) : $this->addValuesToCollection($this->spyProductSetDatas, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idLocale' => $this->idLocale instanceof AbstractTransfer ? $this->idLocale->toArray(true, true) : $this->idLocale,
            'localeName' => $this->localeName instanceof AbstractTransfer ? $this->localeName->toArray(true, true) : $this->localeName,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'spyProductAbstractLocalizedAttributess' => $this->spyProductAbstractLocalizedAttributess instanceof AbstractTransfer ? $this->spyProductAbstractLocalizedAttributess->toArray(true, true) : $this->addValuesToCollection($this->spyProductAbstractLocalizedAttributess, true, true),
            'spyProductLocalizedAttributess' => $this->spyProductLocalizedAttributess instanceof AbstractTransfer ? $this->spyProductLocalizedAttributess->toArray(true, true) : $this->addValuesToCollection($this->spyProductLocalizedAttributess, true, true),
            'spyAvailabilityNotificationSubscriptions' => $this->spyAvailabilityNotificationSubscriptions instanceof AbstractTransfer ? $this->spyAvailabilityNotificationSubscriptions->toArray(true, true) : $this->addValuesToCollection($this->spyAvailabilityNotificationSubscriptions, true, true),
            'spyContentLocalizeds' => $this->spyContentLocalizeds instanceof AbstractTransfer ? $this->spyContentLocalizeds->toArray(true, true) : $this->addValuesToCollection($this->spyContentLocalizeds, true, true),
            'spyGlossaryTranslations' => $this->spyGlossaryTranslations instanceof AbstractTransfer ? $this->spyGlossaryTranslations->toArray(true, true) : $this->addValuesToCollection($this->spyGlossaryTranslations, true, true),
            'spyCmsPageLocalizedAttributess' => $this->spyCmsPageLocalizedAttributess instanceof AbstractTransfer ? $this->spyCmsPageLocalizedAttributess->toArray(true, true) : $this->addValuesToCollection($this->spyCmsPageLocalizedAttributess, true, true),
            'spyTouchStorages' => $this->spyTouchStorages instanceof AbstractTransfer ? $this->spyTouchStorages->toArray(true, true) : $this->addValuesToCollection($this->spyTouchStorages, true, true),
            'spyTouchSearches' => $this->spyTouchSearches instanceof AbstractTransfer ? $this->spyTouchSearches->toArray(true, true) : $this->addValuesToCollection($this->spyTouchSearches, true, true),
            'spyProductDiscontinuedNotes' => $this->spyProductDiscontinuedNotes instanceof AbstractTransfer ? $this->spyProductDiscontinuedNotes->toArray(true, true) : $this->addValuesToCollection($this->spyProductDiscontinuedNotes, true, true),
            'spyNavigationNodeLocalizedAttributess' => $this->spyNavigationNodeLocalizedAttributess instanceof AbstractTransfer ? $this->spyNavigationNodeLocalizedAttributess->toArray(true, true) : $this->addValuesToCollection($this->spyNavigationNodeLocalizedAttributess, true, true),
            'spyCustomers' => $this->spyCustomers instanceof AbstractTransfer ? $this->spyCustomers->toArray(true, true) : $this->addValuesToCollection($this->spyCustomers, true, true),
            'spyCategoryImageSets' => $this->spyCategoryImageSets instanceof AbstractTransfer ? $this->spyCategoryImageSets->toArray(true, true) : $this->addValuesToCollection($this->spyCategoryImageSets, true, true),
            'spyProductLabelLocalizedAttributess' => $this->spyProductLabelLocalizedAttributess instanceof AbstractTransfer ? $this->spyProductLabelLocalizedAttributess->toArray(true, true) : $this->addValuesToCollection($this->spyProductLabelLocalizedAttributess, true, true),
            'spyUrls' => $this->spyUrls instanceof AbstractTransfer ? $this->spyUrls->toArray(true, true) : $this->addValuesToCollection($this->spyUrls, true, true),
            'spyProductManagementAttributeValueTranslations' => $this->spyProductManagementAttributeValueTranslations instanceof AbstractTransfer ? $this->spyProductManagementAttributeValueTranslations->toArray(true, true) : $this->addValuesToCollection($this->spyProductManagementAttributeValueTranslations, true, true),
            'spyProductReviews' => $this->spyProductReviews instanceof AbstractTransfer ? $this->spyProductReviews->toArray(true, true) : $this->addValuesToCollection($this->spyProductReviews, true, true),
            'spyProductSearches' => $this->spyProductSearches instanceof AbstractTransfer ? $this->spyProductSearches->toArray(true, true) : $this->addValuesToCollection($this->spyProductSearches, true, true),
            'spyFileLocalizedAttributess' => $this->spyFileLocalizedAttributess instanceof AbstractTransfer ? $this->spyFileLocalizedAttributess->toArray(true, true) : $this->addValuesToCollection($this->spyFileLocalizedAttributess, true, true),
            'spyFileDirectoryLocalizedAttributess' => $this->spyFileDirectoryLocalizedAttributess instanceof AbstractTransfer ? $this->spyFileDirectoryLocalizedAttributess->toArray(true, true) : $this->addValuesToCollection($this->spyFileDirectoryLocalizedAttributess, true, true),
            'spyProductImageSets' => $this->spyProductImageSets instanceof AbstractTransfer ? $this->spyProductImageSets->toArray(true, true) : $this->addValuesToCollection($this->spyProductImageSets, true, true),
            'spyUsers' => $this->spyUsers instanceof AbstractTransfer ? $this->spyUsers->toArray(true, true) : $this->addValuesToCollection($this->spyUsers, true, true),
            'spyCategoryAttributes' => $this->spyCategoryAttributes instanceof AbstractTransfer ? $this->spyCategoryAttributes->toArray(true, true) : $this->addValuesToCollection($this->spyCategoryAttributes, true, true),
            'spySalesOrders' => $this->spySalesOrders instanceof AbstractTransfer ? $this->spySalesOrders->toArray(true, true) : $this->addValuesToCollection($this->spySalesOrders, true, true),
            'spyProductSetDatas' => $this->spyProductSetDatas instanceof AbstractTransfer ? $this->spyProductSetDatas->toArray(true, true) : $this->addValuesToCollection($this->spyProductSetDatas, true, true),
        ];
    }
}
