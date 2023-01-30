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
class SpyUrlEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_URL = 'idUrl';

    /**
     * @var string
     */
    public const FK_LOCALE = 'fkLocale';

    /**
     * @var string
     */
    public const FK_RESOURCE_CATEGORYNODE = 'fkResourceCategorynode';

    /**
     * @var string
     */
    public const FK_RESOURCE_MERCHANT = 'fkResourceMerchant';

    /**
     * @var string
     */
    public const FK_RESOURCE_PAGE = 'fkResourcePage';

    /**
     * @var string
     */
    public const FK_RESOURCE_PRODUCT_ABSTRACT = 'fkResourceProductAbstract';

    /**
     * @var string
     */
    public const FK_RESOURCE_PRODUCT_SET = 'fkResourceProductSet';

    /**
     * @var string
     */
    public const FK_RESOURCE_REDIRECT = 'fkResourceRedirect';

    /**
     * @var string
     */
    public const URL = 'url';

    /**
     * @var string
     */
    public const SPY_CATEGORY_NODE = 'spyCategoryNode';

    /**
     * @var string
     */
    public const CMS_PAGE = 'cmsPage';

    /**
     * @var string
     */
    public const SPY_MERCHANT = 'spyMerchant';

    /**
     * @var string
     */
    public const SPY_PRODUCT_SET = 'spyProductSet';

    /**
     * @var string
     */
    public const SPY_PRODUCT = 'spyProduct';

    /**
     * @var string
     */
    public const SPY_LOCALE = 'spyLocale';

    /**
     * @var string
     */
    public const SPY_URL_REDIRECT = 'spyUrlRedirect';

    /**
     * @var string
     */
    public const SPY_NAVIGATION_NODE_LOCALIZED_ATTRIBUTESS = 'spyNavigationNodeLocalizedAttributess';

    /**
     * @var integer|null
     */
    protected $idUrl;

    /**
     * @var integer|null
     */
    protected $fkLocale;

    /**
     * @var integer|null
     */
    protected $fkResourceCategorynode;

    /**
     * @var integer|null
     */
    protected $fkResourceMerchant;

    /**
     * @var integer|null
     */
    protected $fkResourcePage;

    /**
     * @var integer|null
     */
    protected $fkResourceProductAbstract;

    /**
     * @var integer|null
     */
    protected $fkResourceProductSet;

    /**
     * @var integer|null
     */
    protected $fkResourceRedirect;

    /**
     * @var string|null
     */
    protected $url;

    /**
     * @var \Generated\Shared\Transfer\SpyCategoryNodeEntityTransfer|null
     */
    protected $spyCategoryNode;

    /**
     * @var \Generated\Shared\Transfer\SpyCmsPageEntityTransfer|null
     */
    protected $cmsPage;

    /**
     * @var \Generated\Shared\Transfer\SpyMerchantEntityTransfer|null
     */
    protected $spyMerchant;

    /**
     * @var \Generated\Shared\Transfer\SpyProductSetEntityTransfer|null
     */
    protected $spyProductSet;

    /**
     * @var \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer|null
     */
    protected $spyProduct;

    /**
     * @var \Generated\Shared\Transfer\SpyLocaleEntityTransfer|null
     */
    protected $spyLocale;

    /**
     * @var \Generated\Shared\Transfer\SpyUrlRedirectEntityTransfer|null
     */
    protected $spyUrlRedirect;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyNavigationNodeLocalizedAttributesEntityTransfer[]
     */
    protected $spyNavigationNodeLocalizedAttributess;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_url' => 'idUrl',
        'idUrl' => 'idUrl',
        'IdUrl' => 'idUrl',
        'fk_locale' => 'fkLocale',
        'fkLocale' => 'fkLocale',
        'FkLocale' => 'fkLocale',
        'fk_resource_categorynode' => 'fkResourceCategorynode',
        'fkResourceCategorynode' => 'fkResourceCategorynode',
        'FkResourceCategorynode' => 'fkResourceCategorynode',
        'fk_resource_merchant' => 'fkResourceMerchant',
        'fkResourceMerchant' => 'fkResourceMerchant',
        'FkResourceMerchant' => 'fkResourceMerchant',
        'fk_resource_page' => 'fkResourcePage',
        'fkResourcePage' => 'fkResourcePage',
        'FkResourcePage' => 'fkResourcePage',
        'fk_resource_product_abstract' => 'fkResourceProductAbstract',
        'fkResourceProductAbstract' => 'fkResourceProductAbstract',
        'FkResourceProductAbstract' => 'fkResourceProductAbstract',
        'fk_resource_product_set' => 'fkResourceProductSet',
        'fkResourceProductSet' => 'fkResourceProductSet',
        'FkResourceProductSet' => 'fkResourceProductSet',
        'fk_resource_redirect' => 'fkResourceRedirect',
        'fkResourceRedirect' => 'fkResourceRedirect',
        'FkResourceRedirect' => 'fkResourceRedirect',
        'url' => 'url',
        'Url' => 'url',
        'spy_category_node' => 'spyCategoryNode',
        'spyCategoryNode' => 'spyCategoryNode',
        'SpyCategoryNode' => 'spyCategoryNode',
        'cms_page' => 'cmsPage',
        'cmsPage' => 'cmsPage',
        'CmsPage' => 'cmsPage',
        'spy_merchant' => 'spyMerchant',
        'spyMerchant' => 'spyMerchant',
        'SpyMerchant' => 'spyMerchant',
        'spy_product_set' => 'spyProductSet',
        'spyProductSet' => 'spyProductSet',
        'SpyProductSet' => 'spyProductSet',
        'spy_product' => 'spyProduct',
        'spyProduct' => 'spyProduct',
        'SpyProduct' => 'spyProduct',
        'spy_locale' => 'spyLocale',
        'spyLocale' => 'spyLocale',
        'SpyLocale' => 'spyLocale',
        'spy_url_redirect' => 'spyUrlRedirect',
        'spyUrlRedirect' => 'spyUrlRedirect',
        'SpyUrlRedirect' => 'spyUrlRedirect',
        'spy_navigation_node_localized_attributess' => 'spyNavigationNodeLocalizedAttributess',
        'spyNavigationNodeLocalizedAttributess' => 'spyNavigationNodeLocalizedAttributess',
        'SpyNavigationNodeLocalizedAttributess' => 'spyNavigationNodeLocalizedAttributess',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_URL => [
            'type' => 'integer',
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
        self::FK_LOCALE => [
            'type' => 'integer',
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
        self::FK_RESOURCE_CATEGORYNODE => [
            'type' => 'integer',
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
        self::FK_RESOURCE_MERCHANT => [
            'type' => 'integer',
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
        self::FK_RESOURCE_PAGE => [
            'type' => 'integer',
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
        self::FK_RESOURCE_PRODUCT_ABSTRACT => [
            'type' => 'integer',
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
            'type' => 'integer',
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
        self::FK_RESOURCE_REDIRECT => [
            'type' => 'integer',
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
        self::SPY_CATEGORY_NODE => [
            'type' => 'Generated\Shared\Transfer\SpyCategoryNodeEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_category_node',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CMS_PAGE => [
            'type' => 'Generated\Shared\Transfer\SpyCmsPageEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'cms_page',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_MERCHANT => [
            'type' => 'Generated\Shared\Transfer\SpyMerchantEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_merchant',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_SET => [
            'type' => 'Generated\Shared\Transfer\SpyProductSetEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_set',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT => [
            'type' => 'Generated\Shared\Transfer\SpyProductAbstractEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_LOCALE => [
            'type' => 'Generated\Shared\Transfer\SpyLocaleEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_locale',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_URL_REDIRECT => [
            'type' => 'Generated\Shared\Transfer\SpyUrlRedirectEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_url_redirect',
            'is_collection' => false,
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
    ];
    /**
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\Url\Persistence\SpyUrl';


    /**
     * @module 
     *
     * @param integer|null $idUrl
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdUrl()
    {
        return $this->idUrl;
    }

    /**
     * @module 
     *
     * @param integer|null $idUrl
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdUrlOrFail()
    {
        if ($this->idUrl === null) {
            $this->throwNullValueException(static::ID_URL);
        }

        return $this->idUrl;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkLocale
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
     * @module 
     *
     * @return integer|null
     */
    public function getFkLocale()
    {
        return $this->fkLocale;
    }

    /**
     * @module 
     *
     * @param integer|null $fkLocale
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkLocaleOrFail()
    {
        if ($this->fkLocale === null) {
            $this->throwNullValueException(static::FK_LOCALE);
        }

        return $this->fkLocale;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkResourceCategorynode
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
     * @module 
     *
     * @return integer|null
     */
    public function getFkResourceCategorynode()
    {
        return $this->fkResourceCategorynode;
    }

    /**
     * @module 
     *
     * @param integer|null $fkResourceCategorynode
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkResourceCategorynodeOrFail()
    {
        if ($this->fkResourceCategorynode === null) {
            $this->throwNullValueException(static::FK_RESOURCE_CATEGORYNODE);
        }

        return $this->fkResourceCategorynode;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkResourceMerchant
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
     * @module 
     *
     * @return integer|null
     */
    public function getFkResourceMerchant()
    {
        return $this->fkResourceMerchant;
    }

    /**
     * @module 
     *
     * @param integer|null $fkResourceMerchant
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkResourceMerchantOrFail()
    {
        if ($this->fkResourceMerchant === null) {
            $this->throwNullValueException(static::FK_RESOURCE_MERCHANT);
        }

        return $this->fkResourceMerchant;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkResourcePage
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
     * @module 
     *
     * @return integer|null
     */
    public function getFkResourcePage()
    {
        return $this->fkResourcePage;
    }

    /**
     * @module 
     *
     * @param integer|null $fkResourcePage
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkResourcePageOrFail()
    {
        if ($this->fkResourcePage === null) {
            $this->throwNullValueException(static::FK_RESOURCE_PAGE);
        }

        return $this->fkResourcePage;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkResourceProductAbstract
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
     * @module 
     *
     * @return integer|null
     */
    public function getFkResourceProductAbstract()
    {
        return $this->fkResourceProductAbstract;
    }

    /**
     * @module 
     *
     * @param integer|null $fkResourceProductAbstract
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkResourceProductAbstractOrFail()
    {
        if ($this->fkResourceProductAbstract === null) {
            $this->throwNullValueException(static::FK_RESOURCE_PRODUCT_ABSTRACT);
        }

        return $this->fkResourceProductAbstract;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkResourceProductSet
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
     * @module 
     *
     * @return integer|null
     */
    public function getFkResourceProductSet()
    {
        return $this->fkResourceProductSet;
    }

    /**
     * @module 
     *
     * @param integer|null $fkResourceProductSet
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkResourceProductSetOrFail()
    {
        if ($this->fkResourceProductSet === null) {
            $this->throwNullValueException(static::FK_RESOURCE_PRODUCT_SET);
        }

        return $this->fkResourceProductSet;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkResourceRedirect
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
     * @module 
     *
     * @return integer|null
     */
    public function getFkResourceRedirect()
    {
        return $this->fkResourceRedirect;
    }

    /**
     * @module 
     *
     * @param integer|null $fkResourceRedirect
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkResourceRedirectOrFail()
    {
        if ($this->fkResourceRedirect === null) {
            $this->throwNullValueException(static::FK_RESOURCE_REDIRECT);
        }

        return $this->fkResourceRedirect;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCategoryNodeEntityTransfer|null $spyCategoryNode
     *
     * @return $this
     */
    public function setSpyCategoryNode(SpyCategoryNodeEntityTransfer $spyCategoryNode = null)
    {
        $this->spyCategoryNode = $spyCategoryNode;
        $this->modifiedProperties[self::SPY_CATEGORY_NODE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCategoryNodeEntityTransfer|null
     */
    public function getSpyCategoryNode()
    {
        return $this->spyCategoryNode;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCategoryNodeEntityTransfer $spyCategoryNode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyCategoryNodeOrFail(SpyCategoryNodeEntityTransfer $spyCategoryNode)
    {
        return $this->setSpyCategoryNode($spyCategoryNode);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCategoryNodeEntityTransfer
     */
    public function getSpyCategoryNodeOrFail()
    {
        if ($this->spyCategoryNode === null) {
            $this->throwNullValueException(static::SPY_CATEGORY_NODE);
        }

        return $this->spyCategoryNode;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCategoryNode()
    {
        $this->assertPropertyIsSet(self::SPY_CATEGORY_NODE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCmsPageEntityTransfer|null $cmsPage
     *
     * @return $this
     */
    public function setCmsPage(SpyCmsPageEntityTransfer $cmsPage = null)
    {
        $this->cmsPage = $cmsPage;
        $this->modifiedProperties[self::CMS_PAGE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCmsPageEntityTransfer|null
     */
    public function getCmsPage()
    {
        return $this->cmsPage;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCmsPageEntityTransfer $cmsPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCmsPageOrFail(SpyCmsPageEntityTransfer $cmsPage)
    {
        return $this->setCmsPage($cmsPage);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCmsPageEntityTransfer
     */
    public function getCmsPageOrFail()
    {
        if ($this->cmsPage === null) {
            $this->throwNullValueException(static::CMS_PAGE);
        }

        return $this->cmsPage;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCmsPage()
    {
        $this->assertPropertyIsSet(self::CMS_PAGE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyMerchantEntityTransfer|null $spyMerchant
     *
     * @return $this
     */
    public function setSpyMerchant(SpyMerchantEntityTransfer $spyMerchant = null)
    {
        $this->spyMerchant = $spyMerchant;
        $this->modifiedProperties[self::SPY_MERCHANT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyMerchantEntityTransfer|null
     */
    public function getSpyMerchant()
    {
        return $this->spyMerchant;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyMerchantEntityTransfer $spyMerchant
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyMerchantOrFail(SpyMerchantEntityTransfer $spyMerchant)
    {
        return $this->setSpyMerchant($spyMerchant);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyMerchantEntityTransfer
     */
    public function getSpyMerchantOrFail()
    {
        if ($this->spyMerchant === null) {
            $this->throwNullValueException(static::SPY_MERCHANT);
        }

        return $this->spyMerchant;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyMerchant()
    {
        $this->assertPropertyIsSet(self::SPY_MERCHANT);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductSetEntityTransfer|null $spyProductSet
     *
     * @return $this
     */
    public function setSpyProductSet(SpyProductSetEntityTransfer $spyProductSet = null)
    {
        $this->spyProductSet = $spyProductSet;
        $this->modifiedProperties[self::SPY_PRODUCT_SET] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyProductSetEntityTransfer|null
     */
    public function getSpyProductSet()
    {
        return $this->spyProductSet;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductSetEntityTransfer $spyProductSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyProductSetOrFail(SpyProductSetEntityTransfer $spyProductSet)
    {
        return $this->setSpyProductSet($spyProductSet);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyProductSetEntityTransfer
     */
    public function getSpyProductSetOrFail()
    {
        if ($this->spyProductSet === null) {
            $this->throwNullValueException(static::SPY_PRODUCT_SET);
        }

        return $this->spyProductSet;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductSet()
    {
        $this->assertPropertyIsSet(self::SPY_PRODUCT_SET);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer|null $spyProduct
     *
     * @return $this
     */
    public function setSpyProduct(SpyProductAbstractEntityTransfer $spyProduct = null)
    {
        $this->spyProduct = $spyProduct;
        $this->modifiedProperties[self::SPY_PRODUCT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer|null
     */
    public function getSpyProduct()
    {
        return $this->spyProduct;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer $spyProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyProductOrFail(SpyProductAbstractEntityTransfer $spyProduct)
    {
        return $this->setSpyProduct($spyProduct);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer
     */
    public function getSpyProductOrFail()
    {
        if ($this->spyProduct === null) {
            $this->throwNullValueException(static::SPY_PRODUCT);
        }

        return $this->spyProduct;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProduct()
    {
        $this->assertPropertyIsSet(self::SPY_PRODUCT);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyLocaleEntityTransfer|null $spyLocale
     *
     * @return $this
     */
    public function setSpyLocale(SpyLocaleEntityTransfer $spyLocale = null)
    {
        $this->spyLocale = $spyLocale;
        $this->modifiedProperties[self::SPY_LOCALE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyLocaleEntityTransfer|null
     */
    public function getSpyLocale()
    {
        return $this->spyLocale;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyLocaleEntityTransfer $spyLocale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyLocaleOrFail(SpyLocaleEntityTransfer $spyLocale)
    {
        return $this->setSpyLocale($spyLocale);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyLocaleEntityTransfer
     */
    public function getSpyLocaleOrFail()
    {
        if ($this->spyLocale === null) {
            $this->throwNullValueException(static::SPY_LOCALE);
        }

        return $this->spyLocale;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyLocale()
    {
        $this->assertPropertyIsSet(self::SPY_LOCALE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyUrlRedirectEntityTransfer|null $spyUrlRedirect
     *
     * @return $this
     */
    public function setSpyUrlRedirect(SpyUrlRedirectEntityTransfer $spyUrlRedirect = null)
    {
        $this->spyUrlRedirect = $spyUrlRedirect;
        $this->modifiedProperties[self::SPY_URL_REDIRECT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyUrlRedirectEntityTransfer|null
     */
    public function getSpyUrlRedirect()
    {
        return $this->spyUrlRedirect;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyUrlRedirectEntityTransfer $spyUrlRedirect
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyUrlRedirectOrFail(SpyUrlRedirectEntityTransfer $spyUrlRedirect)
    {
        return $this->setSpyUrlRedirect($spyUrlRedirect);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyUrlRedirectEntityTransfer
     */
    public function getSpyUrlRedirectOrFail()
    {
        if ($this->spyUrlRedirect === null) {
            $this->throwNullValueException(static::SPY_URL_REDIRECT);
        }

        return $this->spyUrlRedirect;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyUrlRedirect()
    {
        $this->assertPropertyIsSet(self::SPY_URL_REDIRECT);

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
                case 'idUrl':
                case 'fkLocale':
                case 'fkResourceCategorynode':
                case 'fkResourceMerchant':
                case 'fkResourcePage':
                case 'fkResourceProductAbstract':
                case 'fkResourceProductSet':
                case 'fkResourceRedirect':
                case 'url':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyCategoryNode':
                case 'cmsPage':
                case 'spyMerchant':
                case 'spyProductSet':
                case 'spyProduct':
                case 'spyLocale':
                case 'spyUrlRedirect':
                    if (is_array($value)) {
                        $type = $this->transferMetadata[$normalizedPropertyName]['type'];
                        /** @var \Spryker\Shared\Kernel\Transfer\TransferInterface $value */
                        $value = (new $type())->fromArray($value, $ignoreMissingProperty);
                    }

                    if ($value !== null && $this->isPropertyStrict($normalizedPropertyName)) {
                        $this->assertInstanceOfTransfer($normalizedPropertyName, $value);
                    }
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyNavigationNodeLocalizedAttributess':
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
                case 'idUrl':
                case 'fkLocale':
                case 'fkResourceCategorynode':
                case 'fkResourceMerchant':
                case 'fkResourcePage':
                case 'fkResourceProductAbstract':
                case 'fkResourceProductSet':
                case 'fkResourceRedirect':
                case 'url':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyCategoryNode':
                case 'cmsPage':
                case 'spyMerchant':
                case 'spyProductSet':
                case 'spyProduct':
                case 'spyLocale':
                case 'spyUrlRedirect':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyNavigationNodeLocalizedAttributess':
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
                case 'idUrl':
                case 'fkLocale':
                case 'fkResourceCategorynode':
                case 'fkResourceMerchant':
                case 'fkResourcePage':
                case 'fkResourceProductAbstract':
                case 'fkResourceProductSet':
                case 'fkResourceRedirect':
                case 'url':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyCategoryNode':
                case 'cmsPage':
                case 'spyMerchant':
                case 'spyProductSet':
                case 'spyProduct':
                case 'spyLocale':
                case 'spyUrlRedirect':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyNavigationNodeLocalizedAttributess':
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
        $this->spyNavigationNodeLocalizedAttributess = $this->spyNavigationNodeLocalizedAttributess ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idUrl' => $this->idUrl,
            'fkLocale' => $this->fkLocale,
            'fkResourceCategorynode' => $this->fkResourceCategorynode,
            'fkResourceMerchant' => $this->fkResourceMerchant,
            'fkResourcePage' => $this->fkResourcePage,
            'fkResourceProductAbstract' => $this->fkResourceProductAbstract,
            'fkResourceProductSet' => $this->fkResourceProductSet,
            'fkResourceRedirect' => $this->fkResourceRedirect,
            'url' => $this->url,
            'spyCategoryNode' => $this->spyCategoryNode,
            'cmsPage' => $this->cmsPage,
            'spyMerchant' => $this->spyMerchant,
            'spyProductSet' => $this->spyProductSet,
            'spyProduct' => $this->spyProduct,
            'spyLocale' => $this->spyLocale,
            'spyUrlRedirect' => $this->spyUrlRedirect,
            'spyNavigationNodeLocalizedAttributess' => $this->spyNavigationNodeLocalizedAttributess,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_url' => $this->idUrl,
            'fk_locale' => $this->fkLocale,
            'fk_resource_categorynode' => $this->fkResourceCategorynode,
            'fk_resource_merchant' => $this->fkResourceMerchant,
            'fk_resource_page' => $this->fkResourcePage,
            'fk_resource_product_abstract' => $this->fkResourceProductAbstract,
            'fk_resource_product_set' => $this->fkResourceProductSet,
            'fk_resource_redirect' => $this->fkResourceRedirect,
            'url' => $this->url,
            'spy_category_node' => $this->spyCategoryNode,
            'cms_page' => $this->cmsPage,
            'spy_merchant' => $this->spyMerchant,
            'spy_product_set' => $this->spyProductSet,
            'spy_product' => $this->spyProduct,
            'spy_locale' => $this->spyLocale,
            'spy_url_redirect' => $this->spyUrlRedirect,
            'spy_navigation_node_localized_attributess' => $this->spyNavigationNodeLocalizedAttributess,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_url' => $this->idUrl instanceof AbstractTransfer ? $this->idUrl->toArray(true, false) : $this->idUrl,
            'fk_locale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, false) : $this->fkLocale,
            'fk_resource_categorynode' => $this->fkResourceCategorynode instanceof AbstractTransfer ? $this->fkResourceCategorynode->toArray(true, false) : $this->fkResourceCategorynode,
            'fk_resource_merchant' => $this->fkResourceMerchant instanceof AbstractTransfer ? $this->fkResourceMerchant->toArray(true, false) : $this->fkResourceMerchant,
            'fk_resource_page' => $this->fkResourcePage instanceof AbstractTransfer ? $this->fkResourcePage->toArray(true, false) : $this->fkResourcePage,
            'fk_resource_product_abstract' => $this->fkResourceProductAbstract instanceof AbstractTransfer ? $this->fkResourceProductAbstract->toArray(true, false) : $this->fkResourceProductAbstract,
            'fk_resource_product_set' => $this->fkResourceProductSet instanceof AbstractTransfer ? $this->fkResourceProductSet->toArray(true, false) : $this->fkResourceProductSet,
            'fk_resource_redirect' => $this->fkResourceRedirect instanceof AbstractTransfer ? $this->fkResourceRedirect->toArray(true, false) : $this->fkResourceRedirect,
            'url' => $this->url instanceof AbstractTransfer ? $this->url->toArray(true, false) : $this->url,
            'spy_category_node' => $this->spyCategoryNode instanceof AbstractTransfer ? $this->spyCategoryNode->toArray(true, false) : $this->spyCategoryNode,
            'cms_page' => $this->cmsPage instanceof AbstractTransfer ? $this->cmsPage->toArray(true, false) : $this->cmsPage,
            'spy_merchant' => $this->spyMerchant instanceof AbstractTransfer ? $this->spyMerchant->toArray(true, false) : $this->spyMerchant,
            'spy_product_set' => $this->spyProductSet instanceof AbstractTransfer ? $this->spyProductSet->toArray(true, false) : $this->spyProductSet,
            'spy_product' => $this->spyProduct instanceof AbstractTransfer ? $this->spyProduct->toArray(true, false) : $this->spyProduct,
            'spy_locale' => $this->spyLocale instanceof AbstractTransfer ? $this->spyLocale->toArray(true, false) : $this->spyLocale,
            'spy_url_redirect' => $this->spyUrlRedirect instanceof AbstractTransfer ? $this->spyUrlRedirect->toArray(true, false) : $this->spyUrlRedirect,
            'spy_navigation_node_localized_attributess' => $this->spyNavigationNodeLocalizedAttributess instanceof AbstractTransfer ? $this->spyNavigationNodeLocalizedAttributess->toArray(true, false) : $this->addValuesToCollection($this->spyNavigationNodeLocalizedAttributess, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idUrl' => $this->idUrl instanceof AbstractTransfer ? $this->idUrl->toArray(true, true) : $this->idUrl,
            'fkLocale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, true) : $this->fkLocale,
            'fkResourceCategorynode' => $this->fkResourceCategorynode instanceof AbstractTransfer ? $this->fkResourceCategorynode->toArray(true, true) : $this->fkResourceCategorynode,
            'fkResourceMerchant' => $this->fkResourceMerchant instanceof AbstractTransfer ? $this->fkResourceMerchant->toArray(true, true) : $this->fkResourceMerchant,
            'fkResourcePage' => $this->fkResourcePage instanceof AbstractTransfer ? $this->fkResourcePage->toArray(true, true) : $this->fkResourcePage,
            'fkResourceProductAbstract' => $this->fkResourceProductAbstract instanceof AbstractTransfer ? $this->fkResourceProductAbstract->toArray(true, true) : $this->fkResourceProductAbstract,
            'fkResourceProductSet' => $this->fkResourceProductSet instanceof AbstractTransfer ? $this->fkResourceProductSet->toArray(true, true) : $this->fkResourceProductSet,
            'fkResourceRedirect' => $this->fkResourceRedirect instanceof AbstractTransfer ? $this->fkResourceRedirect->toArray(true, true) : $this->fkResourceRedirect,
            'url' => $this->url instanceof AbstractTransfer ? $this->url->toArray(true, true) : $this->url,
            'spyCategoryNode' => $this->spyCategoryNode instanceof AbstractTransfer ? $this->spyCategoryNode->toArray(true, true) : $this->spyCategoryNode,
            'cmsPage' => $this->cmsPage instanceof AbstractTransfer ? $this->cmsPage->toArray(true, true) : $this->cmsPage,
            'spyMerchant' => $this->spyMerchant instanceof AbstractTransfer ? $this->spyMerchant->toArray(true, true) : $this->spyMerchant,
            'spyProductSet' => $this->spyProductSet instanceof AbstractTransfer ? $this->spyProductSet->toArray(true, true) : $this->spyProductSet,
            'spyProduct' => $this->spyProduct instanceof AbstractTransfer ? $this->spyProduct->toArray(true, true) : $this->spyProduct,
            'spyLocale' => $this->spyLocale instanceof AbstractTransfer ? $this->spyLocale->toArray(true, true) : $this->spyLocale,
            'spyUrlRedirect' => $this->spyUrlRedirect instanceof AbstractTransfer ? $this->spyUrlRedirect->toArray(true, true) : $this->spyUrlRedirect,
            'spyNavigationNodeLocalizedAttributess' => $this->spyNavigationNodeLocalizedAttributess instanceof AbstractTransfer ? $this->spyNavigationNodeLocalizedAttributess->toArray(true, true) : $this->addValuesToCollection($this->spyNavigationNodeLocalizedAttributess, true, true),
        ];
    }
}
