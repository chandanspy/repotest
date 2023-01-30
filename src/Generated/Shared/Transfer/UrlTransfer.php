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
class UrlTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const URL = 'url';

    /**
     * @deprecated Use appropriate fkResourceXYZ attribute instead.
     */
    public const RESOURCE_TYPE = 'resourceType';

    /**
     * @deprecated Use appropriate fkResourceXYZ attribute instead.
     */
    public const RESOURCE_ID = 'resourceId';

    /**
     * @var string
     */
    public const FK_LOCALE = 'fkLocale';

    /**
     * @var string
     */
    public const ID_URL = 'idUrl';

    /**
     * @var string
     */
    public const FK_RESOURCE_CATEGORYNODE = 'fkResourceCategorynode';

    /**
     * @var string
     */
    public const FK_RESOURCE_PAGE = 'fkResourcePage';

    /**
     * @var string
     */
    public const FK_RESOURCE_REDIRECT = 'fkResourceRedirect';

    /**
     * @deprecated Use fkResourceRedirect instead.
     */
    public const FK_REDIRECT = 'fkRedirect';

    /**
     * @var string
     */
    public const URL_PREFIX = 'urlPrefix';

    /**
     * @var string
     */
    public const FK_RESOURCE_MERCHANT = 'fkResourceMerchant';

    /**
     * @var string
     */
    public const LOCALE_NAME = 'localeName';

    /**
     * @var string
     */
    public const FK_RESOURCE_PRODUCT_ABSTRACT = 'fkResourceProductAbstract';

    /**
     * @var string
     */
    public const FK_RESOURCE_PRODUCT_SET = 'fkResourceProductSet';

    /**
     * @deprecated Use appropriate fkResourceXYZ attribute instead.
     */
    public const ITEM_TYPE = 'itemType';

    /**
     * @deprecated Use appropriate fkResourceXYZ attribute instead.
     */
    public const ITEM_ID = 'itemId';

    /**
     * @deprecated Use fkResourceProductAbstract instead defined by Product bundle.
     */
    public const FK_PRODUCT_ABSTRACT = 'fkProductAbstract';

    /**
     * @deprecated Use fkResourceCategoryNode instead defined by Category bundle.
     */
    public const FK_CATEGORYNODE = 'fkCategorynode';

    /**
     * @deprecated Use fkResourcePage instead defined by Cms bundle.
     */
    public const FK_PAGE = 'fkPage';

    /**
     * @var string|null
     */
    protected $url;

    /**
     * @var string|null
     */
    protected $resourceType;

    /**
     * @var int|null
     */
    protected $resourceId;

    /**
     * @var int|null
     */
    protected $fkLocale;

    /**
     * @var int|null
     */
    protected $idUrl;

    /**
     * @var int|null
     */
    protected $fkResourceCategorynode;

    /**
     * @var int|null
     */
    protected $fkResourcePage;

    /**
     * @var int|null
     */
    protected $fkResourceRedirect;

    /**
     * @var int|null
     */
    protected $fkRedirect;

    /**
     * @var string|null
     */
    protected $urlPrefix;

    /**
     * @var int|null
     */
    protected $fkResourceMerchant;

    /**
     * @var string|null
     */
    protected $localeName;

    /**
     * @var int|null
     */
    protected $fkResourceProductAbstract;

    /**
     * @var int|null
     */
    protected $fkResourceProductSet;

    /**
     * @var string|null
     */
    protected $itemType;

    /**
     * @var string|null
     */
    protected $itemId;

    /**
     * @var int|null
     */
    protected $fkProductAbstract;

    /**
     * @var int|null
     */
    protected $fkCategorynode;

    /**
     * @var int|null
     */
    protected $fkPage;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'url' => 'url',
        'Url' => 'url',
        'resource_type' => 'resourceType',
        'resourceType' => 'resourceType',
        'ResourceType' => 'resourceType',
        'resource_id' => 'resourceId',
        'resourceId' => 'resourceId',
        'ResourceId' => 'resourceId',
        'fk_locale' => 'fkLocale',
        'fkLocale' => 'fkLocale',
        'FkLocale' => 'fkLocale',
        'id_url' => 'idUrl',
        'idUrl' => 'idUrl',
        'IdUrl' => 'idUrl',
        'fk_resource_categorynode' => 'fkResourceCategorynode',
        'fkResourceCategorynode' => 'fkResourceCategorynode',
        'FkResourceCategorynode' => 'fkResourceCategorynode',
        'fk_resource_page' => 'fkResourcePage',
        'fkResourcePage' => 'fkResourcePage',
        'FkResourcePage' => 'fkResourcePage',
        'fk_resource_redirect' => 'fkResourceRedirect',
        'fkResourceRedirect' => 'fkResourceRedirect',
        'FkResourceRedirect' => 'fkResourceRedirect',
        'fk_redirect' => 'fkRedirect',
        'fkRedirect' => 'fkRedirect',
        'FkRedirect' => 'fkRedirect',
        'url_prefix' => 'urlPrefix',
        'urlPrefix' => 'urlPrefix',
        'UrlPrefix' => 'urlPrefix',
        'fk_resource_merchant' => 'fkResourceMerchant',
        'fkResourceMerchant' => 'fkResourceMerchant',
        'FkResourceMerchant' => 'fkResourceMerchant',
        'locale_name' => 'localeName',
        'localeName' => 'localeName',
        'LocaleName' => 'localeName',
        'fk_resource_product_abstract' => 'fkResourceProductAbstract',
        'fkResourceProductAbstract' => 'fkResourceProductAbstract',
        'FkResourceProductAbstract' => 'fkResourceProductAbstract',
        'fk_resource_product_set' => 'fkResourceProductSet',
        'fkResourceProductSet' => 'fkResourceProductSet',
        'FkResourceProductSet' => 'fkResourceProductSet',
        'item_type' => 'itemType',
        'itemType' => 'itemType',
        'ItemType' => 'itemType',
        'item_id' => 'itemId',
        'itemId' => 'itemId',
        'ItemId' => 'itemId',
        'fk_product_abstract' => 'fkProductAbstract',
        'fkProductAbstract' => 'fkProductAbstract',
        'FkProductAbstract' => 'fkProductAbstract',
        'fk_categorynode' => 'fkCategorynode',
        'fkCategorynode' => 'fkCategorynode',
        'FkCategorynode' => 'fkCategorynode',
        'fk_page' => 'fkPage',
        'fkPage' => 'fkPage',
        'FkPage' => 'fkPage',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::URL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'url',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::RESOURCE_TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'resource_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::RESOURCE_ID => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'resource_id',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_LOCALE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_locale',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_URL => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_url',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_RESOURCE_CATEGORYNODE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_resource_categorynode',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_RESOURCE_PAGE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_resource_page',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_RESOURCE_REDIRECT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_resource_redirect',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_REDIRECT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_redirect',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::URL_PREFIX => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'url_prefix',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_RESOURCE_MERCHANT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_resource_merchant',
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
        self::FK_RESOURCE_PRODUCT_ABSTRACT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_resource_product_abstract',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_RESOURCE_PRODUCT_SET => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_resource_product_set',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ITEM_TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'item_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ITEM_ID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'item_id',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PRODUCT_ABSTRACT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_product_abstract',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_CATEGORYNODE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_categorynode',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PAGE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_page',
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
     * @module CategoryGui|Category|CmsGui|Cms|MerchantGui|NavigationGui|ProductCartConnector|ProductSetGui|ProductSet|Product|Url
     *
     * @param string|null $url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        $this->modifiedProperties[self::URL] = true;

        return $this;
    }

    /**
     * @module CategoryGui|Category|CmsGui|Cms|MerchantGui|NavigationGui|ProductCartConnector|ProductSetGui|ProductSet|Product|Url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @module CategoryGui|Category|CmsGui|Cms|MerchantGui|NavigationGui|ProductCartConnector|ProductSetGui|ProductSet|Product|Url
     *
     * @param string|null $url
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUrlOrFail($url)
    {
        if ($url === null) {
            $this->throwNullValueException(static::URL);
        }

        return $this->setUrl($url);
    }

    /**
     * @module CategoryGui|Category|CmsGui|Cms|MerchantGui|NavigationGui|ProductCartConnector|ProductSetGui|ProductSet|Product|Url
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUrlOrFail()
    {
        if ($this->url === null) {
            $this->throwNullValueException(static::URL);
        }

        return $this->url;
    }

    /**
     * @module CategoryGui|Category|CmsGui|Cms|MerchantGui|NavigationGui|ProductCartConnector|ProductSetGui|ProductSet|Product|Url
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUrl()
    {
        $this->assertPropertyIsSet(self::URL);

        return $this;
    }

    /**
     * @module Category|Cms|Url
     *
     * @deprecated Use appropriate fkResourceXYZ attribute instead.
     *
     * @param string|null $resourceType
     *
     * @return $this
     */
    public function setResourceType($resourceType)
    {
        $this->resourceType = $resourceType;
        $this->modifiedProperties[self::RESOURCE_TYPE] = true;

        return $this;
    }

    /**
     * @module Category|Cms|Url
     *
     * @deprecated Use appropriate fkResourceXYZ attribute instead.
     *
     * @return string|null
     */
    public function getResourceType()
    {
        return $this->resourceType;
    }

    /**
     * @module Category|Cms|Url
     *
     * @deprecated Use appropriate fkResourceXYZ attribute instead.
     *
     * @param string|null $resourceType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setResourceTypeOrFail($resourceType)
    {
        if ($resourceType === null) {
            $this->throwNullValueException(static::RESOURCE_TYPE);
        }

        return $this->setResourceType($resourceType);
    }

    /**
     * @module Category|Cms|Url
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use appropriate fkResourceXYZ attribute instead.
     *
     * @return string
     */
    public function getResourceTypeOrFail()
    {
        if ($this->resourceType === null) {
            $this->throwNullValueException(static::RESOURCE_TYPE);
        }

        return $this->resourceType;
    }

    /**
     * @module Category|Cms|Url
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use appropriate fkResourceXYZ attribute instead.
     *
     * @return $this
     */
    public function requireResourceType()
    {
        $this->assertPropertyIsSet(self::RESOURCE_TYPE);

        return $this;
    }

    /**
     * @module Category|Cms|Url
     *
     * @deprecated Use appropriate fkResourceXYZ attribute instead.
     *
     * @param int|null $resourceId
     *
     * @return $this
     */
    public function setResourceId($resourceId)
    {
        $this->resourceId = $resourceId;
        $this->modifiedProperties[self::RESOURCE_ID] = true;

        return $this;
    }

    /**
     * @module Category|Cms|Url
     *
     * @deprecated Use appropriate fkResourceXYZ attribute instead.
     *
     * @return int|null
     */
    public function getResourceId()
    {
        return $this->resourceId;
    }

    /**
     * @module Category|Cms|Url
     *
     * @deprecated Use appropriate fkResourceXYZ attribute instead.
     *
     * @param int|null $resourceId
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setResourceIdOrFail($resourceId)
    {
        if ($resourceId === null) {
            $this->throwNullValueException(static::RESOURCE_ID);
        }

        return $this->setResourceId($resourceId);
    }

    /**
     * @module Category|Cms|Url
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use appropriate fkResourceXYZ attribute instead.
     *
     * @return int
     */
    public function getResourceIdOrFail()
    {
        if ($this->resourceId === null) {
            $this->throwNullValueException(static::RESOURCE_ID);
        }

        return $this->resourceId;
    }

    /**
     * @module Category|Cms|Url
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use appropriate fkResourceXYZ attribute instead.
     *
     * @return $this
     */
    public function requireResourceId()
    {
        $this->assertPropertyIsSet(self::RESOURCE_ID);

        return $this;
    }

    /**
     * @module Category|Cms|MerchantGui|NavigationGui|ProductSet|Product|Url
     *
     * @param int|null $fkLocale
     *
     * @return $this
     */
    public function setFkLocale($fkLocale)
    {
        $this->fkLocale = $fkLocale;
        $this->modifiedProperties[self::FK_LOCALE] = true;

        return $this;
    }

    /**
     * @module Category|Cms|MerchantGui|NavigationGui|ProductSet|Product|Url
     *
     * @return int|null
     */
    public function getFkLocale()
    {
        return $this->fkLocale;
    }

    /**
     * @module Category|Cms|MerchantGui|NavigationGui|ProductSet|Product|Url
     *
     * @param int|null $fkLocale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkLocaleOrFail($fkLocale)
    {
        if ($fkLocale === null) {
            $this->throwNullValueException(static::FK_LOCALE);
        }

        return $this->setFkLocale($fkLocale);
    }

    /**
     * @module Category|Cms|MerchantGui|NavigationGui|ProductSet|Product|Url
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkLocaleOrFail()
    {
        if ($this->fkLocale === null) {
            $this->throwNullValueException(static::FK_LOCALE);
        }

        return $this->fkLocale;
    }

    /**
     * @module Category|Cms|MerchantGui|NavigationGui|ProductSet|Product|Url
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkLocale()
    {
        $this->assertPropertyIsSet(self::FK_LOCALE);

        return $this;
    }

    /**
     * @module Category|Cms|MerchantGui|Merchant|NavigationGui|Navigation|ProductSet|Product|Url
     *
     * @param int|null $idUrl
     *
     * @return $this
     */
    public function setIdUrl($idUrl)
    {
        $this->idUrl = $idUrl;
        $this->modifiedProperties[self::ID_URL] = true;

        return $this;
    }

    /**
     * @module Category|Cms|MerchantGui|Merchant|NavigationGui|Navigation|ProductSet|Product|Url
     *
     * @return int|null
     */
    public function getIdUrl()
    {
        return $this->idUrl;
    }

    /**
     * @module Category|Cms|MerchantGui|Merchant|NavigationGui|Navigation|ProductSet|Product|Url
     *
     * @param int|null $idUrl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdUrlOrFail($idUrl)
    {
        if ($idUrl === null) {
            $this->throwNullValueException(static::ID_URL);
        }

        return $this->setIdUrl($idUrl);
    }

    /**
     * @module Category|Cms|MerchantGui|Merchant|NavigationGui|Navigation|ProductSet|Product|Url
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdUrlOrFail()
    {
        if ($this->idUrl === null) {
            $this->throwNullValueException(static::ID_URL);
        }

        return $this->idUrl;
    }

    /**
     * @module Category|Cms|MerchantGui|Merchant|NavigationGui|Navigation|ProductSet|Product|Url
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdUrl()
    {
        $this->assertPropertyIsSet(self::ID_URL);

        return $this;
    }

    /**
     * @module Category|NavigationGui
     *
     * @param int|null $fkResourceCategorynode
     *
     * @return $this
     */
    public function setFkResourceCategorynode($fkResourceCategorynode)
    {
        $this->fkResourceCategorynode = $fkResourceCategorynode;
        $this->modifiedProperties[self::FK_RESOURCE_CATEGORYNODE] = true;

        return $this;
    }

    /**
     * @module Category|NavigationGui
     *
     * @return int|null
     */
    public function getFkResourceCategorynode()
    {
        return $this->fkResourceCategorynode;
    }

    /**
     * @module Category|NavigationGui
     *
     * @param int|null $fkResourceCategorynode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkResourceCategorynodeOrFail($fkResourceCategorynode)
    {
        if ($fkResourceCategorynode === null) {
            $this->throwNullValueException(static::FK_RESOURCE_CATEGORYNODE);
        }

        return $this->setFkResourceCategorynode($fkResourceCategorynode);
    }

    /**
     * @module Category|NavigationGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkResourceCategorynodeOrFail()
    {
        if ($this->fkResourceCategorynode === null) {
            $this->throwNullValueException(static::FK_RESOURCE_CATEGORYNODE);
        }

        return $this->fkResourceCategorynode;
    }

    /**
     * @module Category|NavigationGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkResourceCategorynode()
    {
        $this->assertPropertyIsSet(self::FK_RESOURCE_CATEGORYNODE);

        return $this;
    }

    /**
     * @module CmsGui|Cms|NavigationGui
     *
     * @param int|null $fkResourcePage
     *
     * @return $this
     */
    public function setFkResourcePage($fkResourcePage)
    {
        $this->fkResourcePage = $fkResourcePage;
        $this->modifiedProperties[self::FK_RESOURCE_PAGE] = true;

        return $this;
    }

    /**
     * @module CmsGui|Cms|NavigationGui
     *
     * @return int|null
     */
    public function getFkResourcePage()
    {
        return $this->fkResourcePage;
    }

    /**
     * @module CmsGui|Cms|NavigationGui
     *
     * @param int|null $fkResourcePage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkResourcePageOrFail($fkResourcePage)
    {
        if ($fkResourcePage === null) {
            $this->throwNullValueException(static::FK_RESOURCE_PAGE);
        }

        return $this->setFkResourcePage($fkResourcePage);
    }

    /**
     * @module CmsGui|Cms|NavigationGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkResourcePageOrFail()
    {
        if ($this->fkResourcePage === null) {
            $this->throwNullValueException(static::FK_RESOURCE_PAGE);
        }

        return $this->fkResourcePage;
    }

    /**
     * @module CmsGui|Cms|NavigationGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkResourcePage()
    {
        $this->assertPropertyIsSet(self::FK_RESOURCE_PAGE);

        return $this;
    }

    /**
     * @module CmsGui|Url
     *
     * @param int|null $fkResourceRedirect
     *
     * @return $this
     */
    public function setFkResourceRedirect($fkResourceRedirect)
    {
        $this->fkResourceRedirect = $fkResourceRedirect;
        $this->modifiedProperties[self::FK_RESOURCE_REDIRECT] = true;

        return $this;
    }

    /**
     * @module CmsGui|Url
     *
     * @return int|null
     */
    public function getFkResourceRedirect()
    {
        return $this->fkResourceRedirect;
    }

    /**
     * @module CmsGui|Url
     *
     * @param int|null $fkResourceRedirect
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkResourceRedirectOrFail($fkResourceRedirect)
    {
        if ($fkResourceRedirect === null) {
            $this->throwNullValueException(static::FK_RESOURCE_REDIRECT);
        }

        return $this->setFkResourceRedirect($fkResourceRedirect);
    }

    /**
     * @module CmsGui|Url
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkResourceRedirectOrFail()
    {
        if ($this->fkResourceRedirect === null) {
            $this->throwNullValueException(static::FK_RESOURCE_REDIRECT);
        }

        return $this->fkResourceRedirect;
    }

    /**
     * @module CmsGui|Url
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkResourceRedirect()
    {
        $this->assertPropertyIsSet(self::FK_RESOURCE_REDIRECT);

        return $this;
    }

    /**
     * @module Cms|Url
     *
     * @deprecated Use fkResourceRedirect instead.
     *
     * @param int|null $fkRedirect
     *
     * @return $this
     */
    public function setFkRedirect($fkRedirect)
    {
        $this->fkRedirect = $fkRedirect;
        $this->modifiedProperties[self::FK_REDIRECT] = true;

        return $this;
    }

    /**
     * @module Cms|Url
     *
     * @deprecated Use fkResourceRedirect instead.
     *
     * @return int|null
     */
    public function getFkRedirect()
    {
        return $this->fkRedirect;
    }

    /**
     * @module Cms|Url
     *
     * @deprecated Use fkResourceRedirect instead.
     *
     * @param int|null $fkRedirect
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkRedirectOrFail($fkRedirect)
    {
        if ($fkRedirect === null) {
            $this->throwNullValueException(static::FK_REDIRECT);
        }

        return $this->setFkRedirect($fkRedirect);
    }

    /**
     * @module Cms|Url
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use fkResourceRedirect instead.
     *
     * @return int
     */
    public function getFkRedirectOrFail()
    {
        if ($this->fkRedirect === null) {
            $this->throwNullValueException(static::FK_REDIRECT);
        }

        return $this->fkRedirect;
    }

    /**
     * @module Cms|Url
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use fkResourceRedirect instead.
     *
     * @return $this
     */
    public function requireFkRedirect()
    {
        $this->assertPropertyIsSet(self::FK_REDIRECT);

        return $this;
    }

    /**
     * @module MerchantGui|Merchant
     *
     * @param string|null $urlPrefix
     *
     * @return $this
     */
    public function setUrlPrefix($urlPrefix)
    {
        $this->urlPrefix = $urlPrefix;
        $this->modifiedProperties[self::URL_PREFIX] = true;

        return $this;
    }

    /**
     * @module MerchantGui|Merchant
     *
     * @return string|null
     */
    public function getUrlPrefix()
    {
        return $this->urlPrefix;
    }

    /**
     * @module MerchantGui|Merchant
     *
     * @param string|null $urlPrefix
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUrlPrefixOrFail($urlPrefix)
    {
        if ($urlPrefix === null) {
            $this->throwNullValueException(static::URL_PREFIX);
        }

        return $this->setUrlPrefix($urlPrefix);
    }

    /**
     * @module MerchantGui|Merchant
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUrlPrefixOrFail()
    {
        if ($this->urlPrefix === null) {
            $this->throwNullValueException(static::URL_PREFIX);
        }

        return $this->urlPrefix;
    }

    /**
     * @module MerchantGui|Merchant
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUrlPrefix()
    {
        $this->assertPropertyIsSet(self::URL_PREFIX);

        return $this;
    }

    /**
     * @module MerchantGui|Merchant
     *
     * @param int|null $fkResourceMerchant
     *
     * @return $this
     */
    public function setFkResourceMerchant($fkResourceMerchant)
    {
        $this->fkResourceMerchant = $fkResourceMerchant;
        $this->modifiedProperties[self::FK_RESOURCE_MERCHANT] = true;

        return $this;
    }

    /**
     * @module MerchantGui|Merchant
     *
     * @return int|null
     */
    public function getFkResourceMerchant()
    {
        return $this->fkResourceMerchant;
    }

    /**
     * @module MerchantGui|Merchant
     *
     * @param int|null $fkResourceMerchant
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkResourceMerchantOrFail($fkResourceMerchant)
    {
        if ($fkResourceMerchant === null) {
            $this->throwNullValueException(static::FK_RESOURCE_MERCHANT);
        }

        return $this->setFkResourceMerchant($fkResourceMerchant);
    }

    /**
     * @module MerchantGui|Merchant
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkResourceMerchantOrFail()
    {
        if ($this->fkResourceMerchant === null) {
            $this->throwNullValueException(static::FK_RESOURCE_MERCHANT);
        }

        return $this->fkResourceMerchant;
    }

    /**
     * @module MerchantGui|Merchant
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkResourceMerchant()
    {
        $this->assertPropertyIsSet(self::FK_RESOURCE_MERCHANT);

        return $this;
    }

    /**
     * @module Merchant
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
     * @module Merchant
     *
     * @return string|null
     */
    public function getLocaleName()
    {
        return $this->localeName;
    }

    /**
     * @module Merchant
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
     * @module Merchant
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
     * @module Merchant
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
     * @module ProductCartConnector|Product
     *
     * @param int|null $fkResourceProductAbstract
     *
     * @return $this
     */
    public function setFkResourceProductAbstract($fkResourceProductAbstract)
    {
        $this->fkResourceProductAbstract = $fkResourceProductAbstract;
        $this->modifiedProperties[self::FK_RESOURCE_PRODUCT_ABSTRACT] = true;

        return $this;
    }

    /**
     * @module ProductCartConnector|Product
     *
     * @return int|null
     */
    public function getFkResourceProductAbstract()
    {
        return $this->fkResourceProductAbstract;
    }

    /**
     * @module ProductCartConnector|Product
     *
     * @param int|null $fkResourceProductAbstract
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkResourceProductAbstractOrFail($fkResourceProductAbstract)
    {
        if ($fkResourceProductAbstract === null) {
            $this->throwNullValueException(static::FK_RESOURCE_PRODUCT_ABSTRACT);
        }

        return $this->setFkResourceProductAbstract($fkResourceProductAbstract);
    }

    /**
     * @module ProductCartConnector|Product
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkResourceProductAbstractOrFail()
    {
        if ($this->fkResourceProductAbstract === null) {
            $this->throwNullValueException(static::FK_RESOURCE_PRODUCT_ABSTRACT);
        }

        return $this->fkResourceProductAbstract;
    }

    /**
     * @module ProductCartConnector|Product
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkResourceProductAbstract()
    {
        $this->assertPropertyIsSet(self::FK_RESOURCE_PRODUCT_ABSTRACT);

        return $this;
    }

    /**
     * @module ProductSet
     *
     * @param int|null $fkResourceProductSet
     *
     * @return $this
     */
    public function setFkResourceProductSet($fkResourceProductSet)
    {
        $this->fkResourceProductSet = $fkResourceProductSet;
        $this->modifiedProperties[self::FK_RESOURCE_PRODUCT_SET] = true;

        return $this;
    }

    /**
     * @module ProductSet
     *
     * @return int|null
     */
    public function getFkResourceProductSet()
    {
        return $this->fkResourceProductSet;
    }

    /**
     * @module ProductSet
     *
     * @param int|null $fkResourceProductSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkResourceProductSetOrFail($fkResourceProductSet)
    {
        if ($fkResourceProductSet === null) {
            $this->throwNullValueException(static::FK_RESOURCE_PRODUCT_SET);
        }

        return $this->setFkResourceProductSet($fkResourceProductSet);
    }

    /**
     * @module ProductSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkResourceProductSetOrFail()
    {
        if ($this->fkResourceProductSet === null) {
            $this->throwNullValueException(static::FK_RESOURCE_PRODUCT_SET);
        }

        return $this->fkResourceProductSet;
    }

    /**
     * @module ProductSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkResourceProductSet()
    {
        $this->assertPropertyIsSet(self::FK_RESOURCE_PRODUCT_SET);

        return $this;
    }

    /**
     * @module Url
     *
     * @deprecated Use appropriate fkResourceXYZ attribute instead.
     *
     * @param string|null $itemType
     *
     * @return $this
     */
    public function setItemType($itemType)
    {
        $this->itemType = $itemType;
        $this->modifiedProperties[self::ITEM_TYPE] = true;

        return $this;
    }

    /**
     * @module Url
     *
     * @deprecated Use appropriate fkResourceXYZ attribute instead.
     *
     * @return string|null
     */
    public function getItemType()
    {
        return $this->itemType;
    }

    /**
     * @module Url
     *
     * @deprecated Use appropriate fkResourceXYZ attribute instead.
     *
     * @param string|null $itemType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setItemTypeOrFail($itemType)
    {
        if ($itemType === null) {
            $this->throwNullValueException(static::ITEM_TYPE);
        }

        return $this->setItemType($itemType);
    }

    /**
     * @module Url
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use appropriate fkResourceXYZ attribute instead.
     *
     * @return string
     */
    public function getItemTypeOrFail()
    {
        if ($this->itemType === null) {
            $this->throwNullValueException(static::ITEM_TYPE);
        }

        return $this->itemType;
    }

    /**
     * @module Url
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use appropriate fkResourceXYZ attribute instead.
     *
     * @return $this
     */
    public function requireItemType()
    {
        $this->assertPropertyIsSet(self::ITEM_TYPE);

        return $this;
    }

    /**
     * @module Url
     *
     * @deprecated Use appropriate fkResourceXYZ attribute instead.
     *
     * @param string|null $itemId
     *
     * @return $this
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        $this->modifiedProperties[self::ITEM_ID] = true;

        return $this;
    }

    /**
     * @module Url
     *
     * @deprecated Use appropriate fkResourceXYZ attribute instead.
     *
     * @return string|null
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @module Url
     *
     * @deprecated Use appropriate fkResourceXYZ attribute instead.
     *
     * @param string|null $itemId
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setItemIdOrFail($itemId)
    {
        if ($itemId === null) {
            $this->throwNullValueException(static::ITEM_ID);
        }

        return $this->setItemId($itemId);
    }

    /**
     * @module Url
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use appropriate fkResourceXYZ attribute instead.
     *
     * @return string
     */
    public function getItemIdOrFail()
    {
        if ($this->itemId === null) {
            $this->throwNullValueException(static::ITEM_ID);
        }

        return $this->itemId;
    }

    /**
     * @module Url
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use appropriate fkResourceXYZ attribute instead.
     *
     * @return $this
     */
    public function requireItemId()
    {
        $this->assertPropertyIsSet(self::ITEM_ID);

        return $this;
    }

    /**
     * @module Url
     *
     * @deprecated Use fkResourceProductAbstract instead defined by Product bundle.
     *
     * @param int|null $fkProductAbstract
     *
     * @return $this
     */
    public function setFkProductAbstract($fkProductAbstract)
    {
        $this->fkProductAbstract = $fkProductAbstract;
        $this->modifiedProperties[self::FK_PRODUCT_ABSTRACT] = true;

        return $this;
    }

    /**
     * @module Url
     *
     * @deprecated Use fkResourceProductAbstract instead defined by Product bundle.
     *
     * @return int|null
     */
    public function getFkProductAbstract()
    {
        return $this->fkProductAbstract;
    }

    /**
     * @module Url
     *
     * @deprecated Use fkResourceProductAbstract instead defined by Product bundle.
     *
     * @param int|null $fkProductAbstract
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkProductAbstractOrFail($fkProductAbstract)
    {
        if ($fkProductAbstract === null) {
            $this->throwNullValueException(static::FK_PRODUCT_ABSTRACT);
        }

        return $this->setFkProductAbstract($fkProductAbstract);
    }

    /**
     * @module Url
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use fkResourceProductAbstract instead defined by Product bundle.
     *
     * @return int
     */
    public function getFkProductAbstractOrFail()
    {
        if ($this->fkProductAbstract === null) {
            $this->throwNullValueException(static::FK_PRODUCT_ABSTRACT);
        }

        return $this->fkProductAbstract;
    }

    /**
     * @module Url
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use fkResourceProductAbstract instead defined by Product bundle.
     *
     * @return $this
     */
    public function requireFkProductAbstract()
    {
        $this->assertPropertyIsSet(self::FK_PRODUCT_ABSTRACT);

        return $this;
    }

    /**
     * @module Url
     *
     * @deprecated Use fkResourceCategoryNode instead defined by Category bundle.
     *
     * @param int|null $fkCategorynode
     *
     * @return $this
     */
    public function setFkCategorynode($fkCategorynode)
    {
        $this->fkCategorynode = $fkCategorynode;
        $this->modifiedProperties[self::FK_CATEGORYNODE] = true;

        return $this;
    }

    /**
     * @module Url
     *
     * @deprecated Use fkResourceCategoryNode instead defined by Category bundle.
     *
     * @return int|null
     */
    public function getFkCategorynode()
    {
        return $this->fkCategorynode;
    }

    /**
     * @module Url
     *
     * @deprecated Use fkResourceCategoryNode instead defined by Category bundle.
     *
     * @param int|null $fkCategorynode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCategorynodeOrFail($fkCategorynode)
    {
        if ($fkCategorynode === null) {
            $this->throwNullValueException(static::FK_CATEGORYNODE);
        }

        return $this->setFkCategorynode($fkCategorynode);
    }

    /**
     * @module Url
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use fkResourceCategoryNode instead defined by Category bundle.
     *
     * @return int
     */
    public function getFkCategorynodeOrFail()
    {
        if ($this->fkCategorynode === null) {
            $this->throwNullValueException(static::FK_CATEGORYNODE);
        }

        return $this->fkCategorynode;
    }

    /**
     * @module Url
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use fkResourceCategoryNode instead defined by Category bundle.
     *
     * @return $this
     */
    public function requireFkCategorynode()
    {
        $this->assertPropertyIsSet(self::FK_CATEGORYNODE);

        return $this;
    }

    /**
     * @module Url
     *
     * @deprecated Use fkResourcePage instead defined by Cms bundle.
     *
     * @param int|null $fkPage
     *
     * @return $this
     */
    public function setFkPage($fkPage)
    {
        $this->fkPage = $fkPage;
        $this->modifiedProperties[self::FK_PAGE] = true;

        return $this;
    }

    /**
     * @module Url
     *
     * @deprecated Use fkResourcePage instead defined by Cms bundle.
     *
     * @return int|null
     */
    public function getFkPage()
    {
        return $this->fkPage;
    }

    /**
     * @module Url
     *
     * @deprecated Use fkResourcePage instead defined by Cms bundle.
     *
     * @param int|null $fkPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkPageOrFail($fkPage)
    {
        if ($fkPage === null) {
            $this->throwNullValueException(static::FK_PAGE);
        }

        return $this->setFkPage($fkPage);
    }

    /**
     * @module Url
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use fkResourcePage instead defined by Cms bundle.
     *
     * @return int
     */
    public function getFkPageOrFail()
    {
        if ($this->fkPage === null) {
            $this->throwNullValueException(static::FK_PAGE);
        }

        return $this->fkPage;
    }

    /**
     * @module Url
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use fkResourcePage instead defined by Cms bundle.
     *
     * @return $this
     */
    public function requireFkPage()
    {
        $this->assertPropertyIsSet(self::FK_PAGE);

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
                case 'url':
                case 'resourceType':
                case 'resourceId':
                case 'fkLocale':
                case 'idUrl':
                case 'fkResourceCategorynode':
                case 'fkResourcePage':
                case 'fkResourceRedirect':
                case 'fkRedirect':
                case 'urlPrefix':
                case 'fkResourceMerchant':
                case 'localeName':
                case 'fkResourceProductAbstract':
                case 'fkResourceProductSet':
                case 'itemType':
                case 'itemId':
                case 'fkProductAbstract':
                case 'fkCategorynode':
                case 'fkPage':
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
                case 'url':
                case 'resourceType':
                case 'resourceId':
                case 'fkLocale':
                case 'idUrl':
                case 'fkResourceCategorynode':
                case 'fkResourcePage':
                case 'fkResourceRedirect':
                case 'fkRedirect':
                case 'urlPrefix':
                case 'fkResourceMerchant':
                case 'localeName':
                case 'fkResourceProductAbstract':
                case 'fkResourceProductSet':
                case 'itemType':
                case 'itemId':
                case 'fkProductAbstract':
                case 'fkCategorynode':
                case 'fkPage':
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
                case 'url':
                case 'resourceType':
                case 'resourceId':
                case 'fkLocale':
                case 'idUrl':
                case 'fkResourceCategorynode':
                case 'fkResourcePage':
                case 'fkResourceRedirect':
                case 'fkRedirect':
                case 'urlPrefix':
                case 'fkResourceMerchant':
                case 'localeName':
                case 'fkResourceProductAbstract':
                case 'fkResourceProductSet':
                case 'itemType':
                case 'itemId':
                case 'fkProductAbstract':
                case 'fkCategorynode':
                case 'fkPage':
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
            'url' => $this->url,
            'resourceType' => $this->resourceType,
            'resourceId' => $this->resourceId,
            'fkLocale' => $this->fkLocale,
            'idUrl' => $this->idUrl,
            'fkResourceCategorynode' => $this->fkResourceCategorynode,
            'fkResourcePage' => $this->fkResourcePage,
            'fkResourceRedirect' => $this->fkResourceRedirect,
            'fkRedirect' => $this->fkRedirect,
            'urlPrefix' => $this->urlPrefix,
            'fkResourceMerchant' => $this->fkResourceMerchant,
            'localeName' => $this->localeName,
            'fkResourceProductAbstract' => $this->fkResourceProductAbstract,
            'fkResourceProductSet' => $this->fkResourceProductSet,
            'itemType' => $this->itemType,
            'itemId' => $this->itemId,
            'fkProductAbstract' => $this->fkProductAbstract,
            'fkCategorynode' => $this->fkCategorynode,
            'fkPage' => $this->fkPage,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'url' => $this->url,
            'resource_type' => $this->resourceType,
            'resource_id' => $this->resourceId,
            'fk_locale' => $this->fkLocale,
            'id_url' => $this->idUrl,
            'fk_resource_categorynode' => $this->fkResourceCategorynode,
            'fk_resource_page' => $this->fkResourcePage,
            'fk_resource_redirect' => $this->fkResourceRedirect,
            'fk_redirect' => $this->fkRedirect,
            'url_prefix' => $this->urlPrefix,
            'fk_resource_merchant' => $this->fkResourceMerchant,
            'locale_name' => $this->localeName,
            'fk_resource_product_abstract' => $this->fkResourceProductAbstract,
            'fk_resource_product_set' => $this->fkResourceProductSet,
            'item_type' => $this->itemType,
            'item_id' => $this->itemId,
            'fk_product_abstract' => $this->fkProductAbstract,
            'fk_categorynode' => $this->fkCategorynode,
            'fk_page' => $this->fkPage,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'url' => $this->url instanceof AbstractTransfer ? $this->url->toArray(true, false) : $this->url,
            'resource_type' => $this->resourceType instanceof AbstractTransfer ? $this->resourceType->toArray(true, false) : $this->resourceType,
            'resource_id' => $this->resourceId instanceof AbstractTransfer ? $this->resourceId->toArray(true, false) : $this->resourceId,
            'fk_locale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, false) : $this->fkLocale,
            'id_url' => $this->idUrl instanceof AbstractTransfer ? $this->idUrl->toArray(true, false) : $this->idUrl,
            'fk_resource_categorynode' => $this->fkResourceCategorynode instanceof AbstractTransfer ? $this->fkResourceCategorynode->toArray(true, false) : $this->fkResourceCategorynode,
            'fk_resource_page' => $this->fkResourcePage instanceof AbstractTransfer ? $this->fkResourcePage->toArray(true, false) : $this->fkResourcePage,
            'fk_resource_redirect' => $this->fkResourceRedirect instanceof AbstractTransfer ? $this->fkResourceRedirect->toArray(true, false) : $this->fkResourceRedirect,
            'fk_redirect' => $this->fkRedirect instanceof AbstractTransfer ? $this->fkRedirect->toArray(true, false) : $this->fkRedirect,
            'url_prefix' => $this->urlPrefix instanceof AbstractTransfer ? $this->urlPrefix->toArray(true, false) : $this->urlPrefix,
            'fk_resource_merchant' => $this->fkResourceMerchant instanceof AbstractTransfer ? $this->fkResourceMerchant->toArray(true, false) : $this->fkResourceMerchant,
            'locale_name' => $this->localeName instanceof AbstractTransfer ? $this->localeName->toArray(true, false) : $this->localeName,
            'fk_resource_product_abstract' => $this->fkResourceProductAbstract instanceof AbstractTransfer ? $this->fkResourceProductAbstract->toArray(true, false) : $this->fkResourceProductAbstract,
            'fk_resource_product_set' => $this->fkResourceProductSet instanceof AbstractTransfer ? $this->fkResourceProductSet->toArray(true, false) : $this->fkResourceProductSet,
            'item_type' => $this->itemType instanceof AbstractTransfer ? $this->itemType->toArray(true, false) : $this->itemType,
            'item_id' => $this->itemId instanceof AbstractTransfer ? $this->itemId->toArray(true, false) : $this->itemId,
            'fk_product_abstract' => $this->fkProductAbstract instanceof AbstractTransfer ? $this->fkProductAbstract->toArray(true, false) : $this->fkProductAbstract,
            'fk_categorynode' => $this->fkCategorynode instanceof AbstractTransfer ? $this->fkCategorynode->toArray(true, false) : $this->fkCategorynode,
            'fk_page' => $this->fkPage instanceof AbstractTransfer ? $this->fkPage->toArray(true, false) : $this->fkPage,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'url' => $this->url instanceof AbstractTransfer ? $this->url->toArray(true, true) : $this->url,
            'resourceType' => $this->resourceType instanceof AbstractTransfer ? $this->resourceType->toArray(true, true) : $this->resourceType,
            'resourceId' => $this->resourceId instanceof AbstractTransfer ? $this->resourceId->toArray(true, true) : $this->resourceId,
            'fkLocale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, true) : $this->fkLocale,
            'idUrl' => $this->idUrl instanceof AbstractTransfer ? $this->idUrl->toArray(true, true) : $this->idUrl,
            'fkResourceCategorynode' => $this->fkResourceCategorynode instanceof AbstractTransfer ? $this->fkResourceCategorynode->toArray(true, true) : $this->fkResourceCategorynode,
            'fkResourcePage' => $this->fkResourcePage instanceof AbstractTransfer ? $this->fkResourcePage->toArray(true, true) : $this->fkResourcePage,
            'fkResourceRedirect' => $this->fkResourceRedirect instanceof AbstractTransfer ? $this->fkResourceRedirect->toArray(true, true) : $this->fkResourceRedirect,
            'fkRedirect' => $this->fkRedirect instanceof AbstractTransfer ? $this->fkRedirect->toArray(true, true) : $this->fkRedirect,
            'urlPrefix' => $this->urlPrefix instanceof AbstractTransfer ? $this->urlPrefix->toArray(true, true) : $this->urlPrefix,
            'fkResourceMerchant' => $this->fkResourceMerchant instanceof AbstractTransfer ? $this->fkResourceMerchant->toArray(true, true) : $this->fkResourceMerchant,
            'localeName' => $this->localeName instanceof AbstractTransfer ? $this->localeName->toArray(true, true) : $this->localeName,
            'fkResourceProductAbstract' => $this->fkResourceProductAbstract instanceof AbstractTransfer ? $this->fkResourceProductAbstract->toArray(true, true) : $this->fkResourceProductAbstract,
            'fkResourceProductSet' => $this->fkResourceProductSet instanceof AbstractTransfer ? $this->fkResourceProductSet->toArray(true, true) : $this->fkResourceProductSet,
            'itemType' => $this->itemType instanceof AbstractTransfer ? $this->itemType->toArray(true, true) : $this->itemType,
            'itemId' => $this->itemId instanceof AbstractTransfer ? $this->itemId->toArray(true, true) : $this->itemId,
            'fkProductAbstract' => $this->fkProductAbstract instanceof AbstractTransfer ? $this->fkProductAbstract->toArray(true, true) : $this->fkProductAbstract,
            'fkCategorynode' => $this->fkCategorynode instanceof AbstractTransfer ? $this->fkCategorynode->toArray(true, true) : $this->fkCategorynode,
            'fkPage' => $this->fkPage instanceof AbstractTransfer ? $this->fkPage->toArray(true, true) : $this->fkPage,
        ];
    }
}
