<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class UrlStorageTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const LOCALE_URLS = 'localeUrls';

    /**
     * @var string
     */
    public const LOCALE_NAME = 'localeName';

    /**
     * @var string
     */
    public const URL = 'url';

    /**
     * @var string
     */
    public const FK_RESOURCE_CATEGORYNODE = 'fkResourceCategorynode';

    /**
     * @var string
     */
    public const FK_LOCALE = 'fkLocale';

    /**
     * @var string
     */
    public const FK_RESOURCE_PAGE = 'fkResourcePage';

    /**
     * @var string
     */
    public const FK_RESOURCE_PRODUCT_SET = 'fkResourceProductSet';

    /**
     * @var string
     */
    public const FK_RESOURCE_PRODUCT_ABSTRACT = 'fkResourceProductAbstract';

    /**
     * @var string
     */
    public const ID_URL = 'idUrl';

    /**
     * @var string
     */
    public const FK_RESOURCE_REDIRECT = 'fkResourceRedirect';

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\UrlStorageTransfer[]
     */
    protected $localeUrls;

    /**
     * @var string|null
     */
    protected $localeName;

    /**
     * @var string|null
     */
    protected $url;

    /**
     * @var int|null
     */
    protected $fkResourceCategorynode;

    /**
     * @var int|null
     */
    protected $fkLocale;

    /**
     * @var int|null
     */
    protected $fkResourcePage;

    /**
     * @var int|null
     */
    protected $fkResourceProductSet;

    /**
     * @var int|null
     */
    protected $fkResourceProductAbstract;

    /**
     * @var int|null
     */
    protected $idUrl;

    /**
     * @var int|null
     */
    protected $fkResourceRedirect;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'locale_urls' => 'localeUrls',
        'localeUrls' => 'localeUrls',
        'LocaleUrls' => 'localeUrls',
        'locale_name' => 'localeName',
        'localeName' => 'localeName',
        'LocaleName' => 'localeName',
        'url' => 'url',
        'Url' => 'url',
        'fk_resource_categorynode' => 'fkResourceCategorynode',
        'fkResourceCategorynode' => 'fkResourceCategorynode',
        'FkResourceCategorynode' => 'fkResourceCategorynode',
        'fk_locale' => 'fkLocale',
        'fkLocale' => 'fkLocale',
        'FkLocale' => 'fkLocale',
        'fk_resource_page' => 'fkResourcePage',
        'fkResourcePage' => 'fkResourcePage',
        'FkResourcePage' => 'fkResourcePage',
        'fk_resource_product_set' => 'fkResourceProductSet',
        'fkResourceProductSet' => 'fkResourceProductSet',
        'FkResourceProductSet' => 'fkResourceProductSet',
        'fk_resource_product_abstract' => 'fkResourceProductAbstract',
        'fkResourceProductAbstract' => 'fkResourceProductAbstract',
        'FkResourceProductAbstract' => 'fkResourceProductAbstract',
        'id_url' => 'idUrl',
        'idUrl' => 'idUrl',
        'IdUrl' => 'idUrl',
        'fk_resource_redirect' => 'fkResourceRedirect',
        'fkResourceRedirect' => 'fkResourceRedirect',
        'FkResourceRedirect' => 'fkResourceRedirect',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::LOCALE_URLS => [
            'type' => 'Generated\Shared\Transfer\UrlStorageTransfer',
            'type_shim' => null,
            'name_underscore' => 'locale_urls',
            'is_collection' => true,
            'is_transfer' => true,
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
    ];

    /**
     * @module LanguageSwitcherWidget|CategoriesRestApi|CmsPagesRestApi|ProductsRestApi|UrlStorage
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\UrlStorageTransfer[] $localeUrls
     *
     * @return $this
     */
    public function setLocaleUrls(ArrayObject $localeUrls)
    {
        $this->localeUrls = $localeUrls;
        $this->modifiedProperties[self::LOCALE_URLS] = true;

        return $this;
    }

    /**
     * @module LanguageSwitcherWidget|CategoriesRestApi|CmsPagesRestApi|ProductsRestApi|UrlStorage
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\UrlStorageTransfer[]
     */
    public function getLocaleUrls()
    {
        return $this->localeUrls;
    }

    /**
     * @module LanguageSwitcherWidget|CategoriesRestApi|CmsPagesRestApi|ProductsRestApi|UrlStorage
     *
     * @param \Generated\Shared\Transfer\UrlStorageTransfer $urlStorage
     *
     * @return $this
     */
    public function addUrlStorage(UrlStorageTransfer $urlStorage)
    {
        $this->localeUrls[] = $urlStorage;
        $this->modifiedProperties[self::LOCALE_URLS] = true;

        return $this;
    }

    /**
     * @module LanguageSwitcherWidget|CategoriesRestApi|CmsPagesRestApi|ProductsRestApi|UrlStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocaleUrls()
    {
        $this->assertCollectionPropertyIsSet(self::LOCALE_URLS);

        return $this;
    }

    /**
     * @module LanguageSwitcherWidget|CategoriesRestApi|CmsPagesRestApi|ProductsRestApi|UrlStorage
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
     * @module LanguageSwitcherWidget|CategoriesRestApi|CmsPagesRestApi|ProductsRestApi|UrlStorage
     *
     * @return string|null
     */
    public function getLocaleName()
    {
        return $this->localeName;
    }

    /**
     * @module LanguageSwitcherWidget|CategoriesRestApi|CmsPagesRestApi|ProductsRestApi|UrlStorage
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
     * @module LanguageSwitcherWidget|CategoriesRestApi|CmsPagesRestApi|ProductsRestApi|UrlStorage
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
     * @module LanguageSwitcherWidget|CategoriesRestApi|CmsPagesRestApi|ProductsRestApi|UrlStorage
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
     * @module LanguageSwitcherWidget|UrlStorage
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
     * @module LanguageSwitcherWidget|UrlStorage
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @module LanguageSwitcherWidget|UrlStorage
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
     * @module LanguageSwitcherWidget|UrlStorage
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
     * @module LanguageSwitcherWidget|UrlStorage
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
     * @module CategoriesRestApi|CategoryStorage|UrlStorage
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
     * @module CategoriesRestApi|CategoryStorage|UrlStorage
     *
     * @return int|null
     */
    public function getFkResourceCategorynode()
    {
        return $this->fkResourceCategorynode;
    }

    /**
     * @module CategoriesRestApi|CategoryStorage|UrlStorage
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
     * @module CategoriesRestApi|CategoryStorage|UrlStorage
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
     * @module CategoriesRestApi|CategoryStorage|UrlStorage
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
     * @module CategoriesRestApi|CmsPagesRestApi|ProductsRestApi|UrlStorage
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
     * @module CategoriesRestApi|CmsPagesRestApi|ProductsRestApi|UrlStorage
     *
     * @return int|null
     */
    public function getFkLocale()
    {
        return $this->fkLocale;
    }

    /**
     * @module CategoriesRestApi|CmsPagesRestApi|ProductsRestApi|UrlStorage
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
     * @module CategoriesRestApi|CmsPagesRestApi|ProductsRestApi|UrlStorage
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
     * @module CategoriesRestApi|CmsPagesRestApi|ProductsRestApi|UrlStorage
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
     * @module CmsPagesRestApi|CmsStorage|UrlStorage
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
     * @module CmsPagesRestApi|CmsStorage|UrlStorage
     *
     * @return int|null
     */
    public function getFkResourcePage()
    {
        return $this->fkResourcePage;
    }

    /**
     * @module CmsPagesRestApi|CmsStorage|UrlStorage
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
     * @module CmsPagesRestApi|CmsStorage|UrlStorage
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
     * @module CmsPagesRestApi|CmsStorage|UrlStorage
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
     * @module ProductSetStorage|UrlStorage
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
     * @module ProductSetStorage|UrlStorage
     *
     * @return int|null
     */
    public function getFkResourceProductSet()
    {
        return $this->fkResourceProductSet;
    }

    /**
     * @module ProductSetStorage|UrlStorage
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
     * @module ProductSetStorage|UrlStorage
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
     * @module ProductSetStorage|UrlStorage
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
     * @module ProductStorage|ProductsRestApi|UrlStorage
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
     * @module ProductStorage|ProductsRestApi|UrlStorage
     *
     * @return int|null
     */
    public function getFkResourceProductAbstract()
    {
        return $this->fkResourceProductAbstract;
    }

    /**
     * @module ProductStorage|ProductsRestApi|UrlStorage
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
     * @module ProductStorage|ProductsRestApi|UrlStorage
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
     * @module ProductStorage|ProductsRestApi|UrlStorage
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
     * @module UrlStorage
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
     * @module UrlStorage
     *
     * @return int|null
     */
    public function getIdUrl()
    {
        return $this->idUrl;
    }

    /**
     * @module UrlStorage
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
     * @module UrlStorage
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
     * @module UrlStorage
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
     * @module UrlStorage|UrlsRestApi
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
     * @module UrlStorage|UrlsRestApi
     *
     * @return int|null
     */
    public function getFkResourceRedirect()
    {
        return $this->fkResourceRedirect;
    }

    /**
     * @module UrlStorage|UrlsRestApi
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
     * @module UrlStorage|UrlsRestApi
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
     * @module UrlStorage|UrlsRestApi
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
                case 'localeName':
                case 'url':
                case 'fkResourceCategorynode':
                case 'fkLocale':
                case 'fkResourcePage':
                case 'fkResourceProductSet':
                case 'fkResourceProductAbstract':
                case 'idUrl':
                case 'fkResourceRedirect':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'localeUrls':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
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
                case 'localeName':
                case 'url':
                case 'fkResourceCategorynode':
                case 'fkLocale':
                case 'fkResourcePage':
                case 'fkResourceProductSet':
                case 'fkResourceProductAbstract':
                case 'idUrl':
                case 'fkResourceRedirect':
                    $values[$arrayKey] = $value;

                    break;
                case 'localeUrls':
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
                case 'localeName':
                case 'url':
                case 'fkResourceCategorynode':
                case 'fkLocale':
                case 'fkResourcePage':
                case 'fkResourceProductSet':
                case 'fkResourceProductAbstract':
                case 'idUrl':
                case 'fkResourceRedirect':
                    $values[$arrayKey] = $value;

                    break;
                case 'localeUrls':
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
        $this->localeUrls = $this->localeUrls ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'localeName' => $this->localeName,
            'url' => $this->url,
            'fkResourceCategorynode' => $this->fkResourceCategorynode,
            'fkLocale' => $this->fkLocale,
            'fkResourcePage' => $this->fkResourcePage,
            'fkResourceProductSet' => $this->fkResourceProductSet,
            'fkResourceProductAbstract' => $this->fkResourceProductAbstract,
            'idUrl' => $this->idUrl,
            'fkResourceRedirect' => $this->fkResourceRedirect,
            'localeUrls' => $this->localeUrls,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'locale_name' => $this->localeName,
            'url' => $this->url,
            'fk_resource_categorynode' => $this->fkResourceCategorynode,
            'fk_locale' => $this->fkLocale,
            'fk_resource_page' => $this->fkResourcePage,
            'fk_resource_product_set' => $this->fkResourceProductSet,
            'fk_resource_product_abstract' => $this->fkResourceProductAbstract,
            'id_url' => $this->idUrl,
            'fk_resource_redirect' => $this->fkResourceRedirect,
            'locale_urls' => $this->localeUrls,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'locale_name' => $this->localeName instanceof AbstractTransfer ? $this->localeName->toArray(true, false) : $this->localeName,
            'url' => $this->url instanceof AbstractTransfer ? $this->url->toArray(true, false) : $this->url,
            'fk_resource_categorynode' => $this->fkResourceCategorynode instanceof AbstractTransfer ? $this->fkResourceCategorynode->toArray(true, false) : $this->fkResourceCategorynode,
            'fk_locale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, false) : $this->fkLocale,
            'fk_resource_page' => $this->fkResourcePage instanceof AbstractTransfer ? $this->fkResourcePage->toArray(true, false) : $this->fkResourcePage,
            'fk_resource_product_set' => $this->fkResourceProductSet instanceof AbstractTransfer ? $this->fkResourceProductSet->toArray(true, false) : $this->fkResourceProductSet,
            'fk_resource_product_abstract' => $this->fkResourceProductAbstract instanceof AbstractTransfer ? $this->fkResourceProductAbstract->toArray(true, false) : $this->fkResourceProductAbstract,
            'id_url' => $this->idUrl instanceof AbstractTransfer ? $this->idUrl->toArray(true, false) : $this->idUrl,
            'fk_resource_redirect' => $this->fkResourceRedirect instanceof AbstractTransfer ? $this->fkResourceRedirect->toArray(true, false) : $this->fkResourceRedirect,
            'locale_urls' => $this->localeUrls instanceof AbstractTransfer ? $this->localeUrls->toArray(true, false) : $this->addValuesToCollection($this->localeUrls, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'localeName' => $this->localeName instanceof AbstractTransfer ? $this->localeName->toArray(true, true) : $this->localeName,
            'url' => $this->url instanceof AbstractTransfer ? $this->url->toArray(true, true) : $this->url,
            'fkResourceCategorynode' => $this->fkResourceCategorynode instanceof AbstractTransfer ? $this->fkResourceCategorynode->toArray(true, true) : $this->fkResourceCategorynode,
            'fkLocale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, true) : $this->fkLocale,
            'fkResourcePage' => $this->fkResourcePage instanceof AbstractTransfer ? $this->fkResourcePage->toArray(true, true) : $this->fkResourcePage,
            'fkResourceProductSet' => $this->fkResourceProductSet instanceof AbstractTransfer ? $this->fkResourceProductSet->toArray(true, true) : $this->fkResourceProductSet,
            'fkResourceProductAbstract' => $this->fkResourceProductAbstract instanceof AbstractTransfer ? $this->fkResourceProductAbstract->toArray(true, true) : $this->fkResourceProductAbstract,
            'idUrl' => $this->idUrl instanceof AbstractTransfer ? $this->idUrl->toArray(true, true) : $this->idUrl,
            'fkResourceRedirect' => $this->fkResourceRedirect instanceof AbstractTransfer ? $this->fkResourceRedirect->toArray(true, true) : $this->fkResourceRedirect,
            'localeUrls' => $this->localeUrls instanceof AbstractTransfer ? $this->localeUrls->toArray(true, true) : $this->addValuesToCollection($this->localeUrls, true, true),
        ];
    }
}
