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
class SpyCmsPageEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_CMS_PAGE = 'idCmsPage';

    /**
     * @var string
     */
    public const FK_TEMPLATE = 'fkTemplate';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const IS_SEARCHABLE = 'isSearchable';

    /**
     * @var string
     */
    public const PAGE_KEY = 'pageKey';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const VALID_FROM = 'validFrom';

    /**
     * @var string
     */
    public const VALID_TO = 'validTo';

    /**
     * @var string
     */
    public const CMS_TEMPLATE = 'cmsTemplate';

    /**
     * @var string
     */
    public const SPY_CMS_VERSIONS = 'spyCmsVersions';

    /**
     * @var string
     */
    public const SPY_CMS_PAGE_LOCALIZED_ATTRIBUTESS = 'spyCmsPageLocalizedAttributess';

    /**
     * @var string
     */
    public const SPY_CMS_GLOSSARY_KEY_MAPPINGS = 'spyCmsGlossaryKeyMappings';

    /**
     * @var string
     */
    public const SPY_CMS_PAGE_STORES = 'spyCmsPageStores';

    /**
     * @var string
     */
    public const SPY_URLS = 'spyUrls';

    /**
     * @var integer|null
     */
    protected $idCmsPage;

    /**
     * @var integer|null
     */
    protected $fkTemplate;

    /**
     * @var boolean|null
     */
    protected $isActive;

    /**
     * @var boolean|null
     */
    protected $isSearchable;

    /**
     * @var string|null
     */
    protected $pageKey;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var string|null
     */
    protected $validFrom;

    /**
     * @var string|null
     */
    protected $validTo;

    /**
     * @var \Generated\Shared\Transfer\SpyCmsTemplateEntityTransfer|null
     */
    protected $cmsTemplate;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCmsVersionEntityTransfer[]
     */
    protected $spyCmsVersions;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCmsPageLocalizedAttributesEntityTransfer[]
     */
    protected $spyCmsPageLocalizedAttributess;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCmsGlossaryKeyMappingEntityTransfer[]
     */
    protected $spyCmsGlossaryKeyMappings;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCmsPageStoreEntityTransfer[]
     */
    protected $spyCmsPageStores;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyUrlEntityTransfer[]
     */
    protected $spyUrls;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_cms_page' => 'idCmsPage',
        'idCmsPage' => 'idCmsPage',
        'IdCmsPage' => 'idCmsPage',
        'fk_template' => 'fkTemplate',
        'fkTemplate' => 'fkTemplate',
        'FkTemplate' => 'fkTemplate',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'is_searchable' => 'isSearchable',
        'isSearchable' => 'isSearchable',
        'IsSearchable' => 'isSearchable',
        'page_key' => 'pageKey',
        'pageKey' => 'pageKey',
        'PageKey' => 'pageKey',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'valid_from' => 'validFrom',
        'validFrom' => 'validFrom',
        'ValidFrom' => 'validFrom',
        'valid_to' => 'validTo',
        'validTo' => 'validTo',
        'ValidTo' => 'validTo',
        'cms_template' => 'cmsTemplate',
        'cmsTemplate' => 'cmsTemplate',
        'CmsTemplate' => 'cmsTemplate',
        'spy_cms_versions' => 'spyCmsVersions',
        'spyCmsVersions' => 'spyCmsVersions',
        'SpyCmsVersions' => 'spyCmsVersions',
        'spy_cms_page_localized_attributess' => 'spyCmsPageLocalizedAttributess',
        'spyCmsPageLocalizedAttributess' => 'spyCmsPageLocalizedAttributess',
        'SpyCmsPageLocalizedAttributess' => 'spyCmsPageLocalizedAttributess',
        'spy_cms_glossary_key_mappings' => 'spyCmsGlossaryKeyMappings',
        'spyCmsGlossaryKeyMappings' => 'spyCmsGlossaryKeyMappings',
        'SpyCmsGlossaryKeyMappings' => 'spyCmsGlossaryKeyMappings',
        'spy_cms_page_stores' => 'spyCmsPageStores',
        'spyCmsPageStores' => 'spyCmsPageStores',
        'SpyCmsPageStores' => 'spyCmsPageStores',
        'spy_urls' => 'spyUrls',
        'spyUrls' => 'spyUrls',
        'SpyUrls' => 'spyUrls',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_CMS_PAGE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_cms_page',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_TEMPLATE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_template',
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
        self::IS_SEARCHABLE => [
            'type' => 'boolean',
            'type_shim' => null,
            'name_underscore' => 'is_searchable',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PAGE_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'page_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::UUID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'uuid',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::VALID_FROM => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'valid_from',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::VALID_TO => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'valid_to',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CMS_TEMPLATE => [
            'type' => 'Generated\Shared\Transfer\SpyCmsTemplateEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'cms_template',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_CMS_VERSIONS => [
            'type' => 'Generated\Shared\Transfer\SpyCmsVersionEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_cms_versions',
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
        self::SPY_CMS_GLOSSARY_KEY_MAPPINGS => [
            'type' => 'Generated\Shared\Transfer\SpyCmsGlossaryKeyMappingEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_cms_glossary_key_mappings',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_CMS_PAGE_STORES => [
            'type' => 'Generated\Shared\Transfer\SpyCmsPageStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_cms_page_stores',
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
    ];
    /**
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\Cms\Persistence\SpyCmsPage';


    /**
     * @module 
     *
     * @param integer|null $idCmsPage
     *
     * @return $this
     */
    public function setIdCmsPage($idCmsPage)
    {
        $this->idCmsPage = $idCmsPage;
        $this->modifiedProperties[self::ID_CMS_PAGE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdCmsPage()
    {
        return $this->idCmsPage;
    }

    /**
     * @module 
     *
     * @param integer|null $idCmsPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCmsPageOrFail($idCmsPage)
    {
        if ($idCmsPage === null) {
            $this->throwNullValueException(static::ID_CMS_PAGE);
        }

        return $this->setIdCmsPage($idCmsPage);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdCmsPageOrFail()
    {
        if ($this->idCmsPage === null) {
            $this->throwNullValueException(static::ID_CMS_PAGE);
        }

        return $this->idCmsPage;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCmsPage()
    {
        $this->assertPropertyIsSet(self::ID_CMS_PAGE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkTemplate
     *
     * @return $this
     */
    public function setFkTemplate($fkTemplate)
    {
        $this->fkTemplate = $fkTemplate;
        $this->modifiedProperties[self::FK_TEMPLATE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkTemplate()
    {
        return $this->fkTemplate;
    }

    /**
     * @module 
     *
     * @param integer|null $fkTemplate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkTemplateOrFail($fkTemplate)
    {
        if ($fkTemplate === null) {
            $this->throwNullValueException(static::FK_TEMPLATE);
        }

        return $this->setFkTemplate($fkTemplate);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkTemplateOrFail()
    {
        if ($this->fkTemplate === null) {
            $this->throwNullValueException(static::FK_TEMPLATE);
        }

        return $this->fkTemplate;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkTemplate()
    {
        $this->assertPropertyIsSet(self::FK_TEMPLATE);

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
     * @param boolean|null $isSearchable
     *
     * @return $this
     */
    public function setIsSearchable($isSearchable)
    {
        $this->isSearchable = $isSearchable;
        $this->modifiedProperties[self::IS_SEARCHABLE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return boolean|null
     */
    public function getIsSearchable()
    {
        return $this->isSearchable;
    }

    /**
     * @module 
     *
     * @param boolean|null $isSearchable
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsSearchableOrFail($isSearchable)
    {
        if ($isSearchable === null) {
            $this->throwNullValueException(static::IS_SEARCHABLE);
        }

        return $this->setIsSearchable($isSearchable);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsSearchableOrFail()
    {
        if ($this->isSearchable === null) {
            $this->throwNullValueException(static::IS_SEARCHABLE);
        }

        return $this->isSearchable;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsSearchable()
    {
        $this->assertPropertyIsSet(self::IS_SEARCHABLE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $pageKey
     *
     * @return $this
     */
    public function setPageKey($pageKey)
    {
        $this->pageKey = $pageKey;
        $this->modifiedProperties[self::PAGE_KEY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getPageKey()
    {
        return $this->pageKey;
    }

    /**
     * @module 
     *
     * @param string|null $pageKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPageKeyOrFail($pageKey)
    {
        if ($pageKey === null) {
            $this->throwNullValueException(static::PAGE_KEY);
        }

        return $this->setPageKey($pageKey);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPageKeyOrFail()
    {
        if ($this->pageKey === null) {
            $this->throwNullValueException(static::PAGE_KEY);
        }

        return $this->pageKey;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePageKey()
    {
        $this->assertPropertyIsSet(self::PAGE_KEY);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        $this->modifiedProperties[self::UUID] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @module 
     *
     * @param string|null $uuid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUuidOrFail($uuid)
    {
        if ($uuid === null) {
            $this->throwNullValueException(static::UUID);
        }

        return $this->setUuid($uuid);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUuidOrFail()
    {
        if ($this->uuid === null) {
            $this->throwNullValueException(static::UUID);
        }

        return $this->uuid;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUuid()
    {
        $this->assertPropertyIsSet(self::UUID);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $validFrom
     *
     * @return $this
     */
    public function setValidFrom($validFrom)
    {
        $this->validFrom = $validFrom;
        $this->modifiedProperties[self::VALID_FROM] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * @module 
     *
     * @param string|null $validFrom
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setValidFromOrFail($validFrom)
    {
        if ($validFrom === null) {
            $this->throwNullValueException(static::VALID_FROM);
        }

        return $this->setValidFrom($validFrom);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getValidFromOrFail()
    {
        if ($this->validFrom === null) {
            $this->throwNullValueException(static::VALID_FROM);
        }

        return $this->validFrom;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireValidFrom()
    {
        $this->assertPropertyIsSet(self::VALID_FROM);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $validTo
     *
     * @return $this
     */
    public function setValidTo($validTo)
    {
        $this->validTo = $validTo;
        $this->modifiedProperties[self::VALID_TO] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getValidTo()
    {
        return $this->validTo;
    }

    /**
     * @module 
     *
     * @param string|null $validTo
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setValidToOrFail($validTo)
    {
        if ($validTo === null) {
            $this->throwNullValueException(static::VALID_TO);
        }

        return $this->setValidTo($validTo);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getValidToOrFail()
    {
        if ($this->validTo === null) {
            $this->throwNullValueException(static::VALID_TO);
        }

        return $this->validTo;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireValidTo()
    {
        $this->assertPropertyIsSet(self::VALID_TO);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCmsTemplateEntityTransfer|null $cmsTemplate
     *
     * @return $this
     */
    public function setCmsTemplate(SpyCmsTemplateEntityTransfer $cmsTemplate = null)
    {
        $this->cmsTemplate = $cmsTemplate;
        $this->modifiedProperties[self::CMS_TEMPLATE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCmsTemplateEntityTransfer|null
     */
    public function getCmsTemplate()
    {
        return $this->cmsTemplate;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCmsTemplateEntityTransfer $cmsTemplate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCmsTemplateOrFail(SpyCmsTemplateEntityTransfer $cmsTemplate)
    {
        return $this->setCmsTemplate($cmsTemplate);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCmsTemplateEntityTransfer
     */
    public function getCmsTemplateOrFail()
    {
        if ($this->cmsTemplate === null) {
            $this->throwNullValueException(static::CMS_TEMPLATE);
        }

        return $this->cmsTemplate;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCmsTemplate()
    {
        $this->assertPropertyIsSet(self::CMS_TEMPLATE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCmsVersionEntityTransfer[] $spyCmsVersions
     *
     * @return $this
     */
    public function setSpyCmsVersions(ArrayObject $spyCmsVersions)
    {
        $this->spyCmsVersions = $spyCmsVersions;
        $this->modifiedProperties[self::SPY_CMS_VERSIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCmsVersionEntityTransfer[]
     */
    public function getSpyCmsVersions()
    {
        return $this->spyCmsVersions;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCmsVersionEntityTransfer $spyCmsVersions
     *
     * @return $this
     */
    public function addSpyCmsVersions(SpyCmsVersionEntityTransfer $spyCmsVersions)
    {
        $this->spyCmsVersions[] = $spyCmsVersions;
        $this->modifiedProperties[self::SPY_CMS_VERSIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCmsVersions()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_CMS_VERSIONS);

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
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCmsGlossaryKeyMappingEntityTransfer[] $spyCmsGlossaryKeyMappings
     *
     * @return $this
     */
    public function setSpyCmsGlossaryKeyMappings(ArrayObject $spyCmsGlossaryKeyMappings)
    {
        $this->spyCmsGlossaryKeyMappings = $spyCmsGlossaryKeyMappings;
        $this->modifiedProperties[self::SPY_CMS_GLOSSARY_KEY_MAPPINGS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCmsGlossaryKeyMappingEntityTransfer[]
     */
    public function getSpyCmsGlossaryKeyMappings()
    {
        return $this->spyCmsGlossaryKeyMappings;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCmsGlossaryKeyMappingEntityTransfer $spyCmsGlossaryKeyMappings
     *
     * @return $this
     */
    public function addSpyCmsGlossaryKeyMappings(SpyCmsGlossaryKeyMappingEntityTransfer $spyCmsGlossaryKeyMappings)
    {
        $this->spyCmsGlossaryKeyMappings[] = $spyCmsGlossaryKeyMappings;
        $this->modifiedProperties[self::SPY_CMS_GLOSSARY_KEY_MAPPINGS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCmsGlossaryKeyMappings()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_CMS_GLOSSARY_KEY_MAPPINGS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCmsPageStoreEntityTransfer[] $spyCmsPageStores
     *
     * @return $this
     */
    public function setSpyCmsPageStores(ArrayObject $spyCmsPageStores)
    {
        $this->spyCmsPageStores = $spyCmsPageStores;
        $this->modifiedProperties[self::SPY_CMS_PAGE_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCmsPageStoreEntityTransfer[]
     */
    public function getSpyCmsPageStores()
    {
        return $this->spyCmsPageStores;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCmsPageStoreEntityTransfer $spyCmsPageStores
     *
     * @return $this
     */
    public function addSpyCmsPageStores(SpyCmsPageStoreEntityTransfer $spyCmsPageStores)
    {
        $this->spyCmsPageStores[] = $spyCmsPageStores;
        $this->modifiedProperties[self::SPY_CMS_PAGE_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCmsPageStores()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_CMS_PAGE_STORES);

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
                case 'idCmsPage':
                case 'fkTemplate':
                case 'isActive':
                case 'isSearchable':
                case 'pageKey':
                case 'uuid':
                case 'validFrom':
                case 'validTo':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'cmsTemplate':
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
                case 'spyCmsVersions':
                case 'spyCmsPageLocalizedAttributess':
                case 'spyCmsGlossaryKeyMappings':
                case 'spyCmsPageStores':
                case 'spyUrls':
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
                case 'idCmsPage':
                case 'fkTemplate':
                case 'isActive':
                case 'isSearchable':
                case 'pageKey':
                case 'uuid':
                case 'validFrom':
                case 'validTo':
                    $values[$arrayKey] = $value;

                    break;
                case 'cmsTemplate':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyCmsVersions':
                case 'spyCmsPageLocalizedAttributess':
                case 'spyCmsGlossaryKeyMappings':
                case 'spyCmsPageStores':
                case 'spyUrls':
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
                case 'idCmsPage':
                case 'fkTemplate':
                case 'isActive':
                case 'isSearchable':
                case 'pageKey':
                case 'uuid':
                case 'validFrom':
                case 'validTo':
                    $values[$arrayKey] = $value;

                    break;
                case 'cmsTemplate':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyCmsVersions':
                case 'spyCmsPageLocalizedAttributess':
                case 'spyCmsGlossaryKeyMappings':
                case 'spyCmsPageStores':
                case 'spyUrls':
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
        $this->spyCmsVersions = $this->spyCmsVersions ?: new ArrayObject();
        $this->spyCmsPageLocalizedAttributess = $this->spyCmsPageLocalizedAttributess ?: new ArrayObject();
        $this->spyCmsGlossaryKeyMappings = $this->spyCmsGlossaryKeyMappings ?: new ArrayObject();
        $this->spyCmsPageStores = $this->spyCmsPageStores ?: new ArrayObject();
        $this->spyUrls = $this->spyUrls ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idCmsPage' => $this->idCmsPage,
            'fkTemplate' => $this->fkTemplate,
            'isActive' => $this->isActive,
            'isSearchable' => $this->isSearchable,
            'pageKey' => $this->pageKey,
            'uuid' => $this->uuid,
            'validFrom' => $this->validFrom,
            'validTo' => $this->validTo,
            'cmsTemplate' => $this->cmsTemplate,
            'spyCmsVersions' => $this->spyCmsVersions,
            'spyCmsPageLocalizedAttributess' => $this->spyCmsPageLocalizedAttributess,
            'spyCmsGlossaryKeyMappings' => $this->spyCmsGlossaryKeyMappings,
            'spyCmsPageStores' => $this->spyCmsPageStores,
            'spyUrls' => $this->spyUrls,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_cms_page' => $this->idCmsPage,
            'fk_template' => $this->fkTemplate,
            'is_active' => $this->isActive,
            'is_searchable' => $this->isSearchable,
            'page_key' => $this->pageKey,
            'uuid' => $this->uuid,
            'valid_from' => $this->validFrom,
            'valid_to' => $this->validTo,
            'cms_template' => $this->cmsTemplate,
            'spy_cms_versions' => $this->spyCmsVersions,
            'spy_cms_page_localized_attributess' => $this->spyCmsPageLocalizedAttributess,
            'spy_cms_glossary_key_mappings' => $this->spyCmsGlossaryKeyMappings,
            'spy_cms_page_stores' => $this->spyCmsPageStores,
            'spy_urls' => $this->spyUrls,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_cms_page' => $this->idCmsPage instanceof AbstractTransfer ? $this->idCmsPage->toArray(true, false) : $this->idCmsPage,
            'fk_template' => $this->fkTemplate instanceof AbstractTransfer ? $this->fkTemplate->toArray(true, false) : $this->fkTemplate,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'is_searchable' => $this->isSearchable instanceof AbstractTransfer ? $this->isSearchable->toArray(true, false) : $this->isSearchable,
            'page_key' => $this->pageKey instanceof AbstractTransfer ? $this->pageKey->toArray(true, false) : $this->pageKey,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'valid_from' => $this->validFrom instanceof AbstractTransfer ? $this->validFrom->toArray(true, false) : $this->validFrom,
            'valid_to' => $this->validTo instanceof AbstractTransfer ? $this->validTo->toArray(true, false) : $this->validTo,
            'cms_template' => $this->cmsTemplate instanceof AbstractTransfer ? $this->cmsTemplate->toArray(true, false) : $this->cmsTemplate,
            'spy_cms_versions' => $this->spyCmsVersions instanceof AbstractTransfer ? $this->spyCmsVersions->toArray(true, false) : $this->addValuesToCollection($this->spyCmsVersions, true, false),
            'spy_cms_page_localized_attributess' => $this->spyCmsPageLocalizedAttributess instanceof AbstractTransfer ? $this->spyCmsPageLocalizedAttributess->toArray(true, false) : $this->addValuesToCollection($this->spyCmsPageLocalizedAttributess, true, false),
            'spy_cms_glossary_key_mappings' => $this->spyCmsGlossaryKeyMappings instanceof AbstractTransfer ? $this->spyCmsGlossaryKeyMappings->toArray(true, false) : $this->addValuesToCollection($this->spyCmsGlossaryKeyMappings, true, false),
            'spy_cms_page_stores' => $this->spyCmsPageStores instanceof AbstractTransfer ? $this->spyCmsPageStores->toArray(true, false) : $this->addValuesToCollection($this->spyCmsPageStores, true, false),
            'spy_urls' => $this->spyUrls instanceof AbstractTransfer ? $this->spyUrls->toArray(true, false) : $this->addValuesToCollection($this->spyUrls, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCmsPage' => $this->idCmsPage instanceof AbstractTransfer ? $this->idCmsPage->toArray(true, true) : $this->idCmsPage,
            'fkTemplate' => $this->fkTemplate instanceof AbstractTransfer ? $this->fkTemplate->toArray(true, true) : $this->fkTemplate,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'isSearchable' => $this->isSearchable instanceof AbstractTransfer ? $this->isSearchable->toArray(true, true) : $this->isSearchable,
            'pageKey' => $this->pageKey instanceof AbstractTransfer ? $this->pageKey->toArray(true, true) : $this->pageKey,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'validFrom' => $this->validFrom instanceof AbstractTransfer ? $this->validFrom->toArray(true, true) : $this->validFrom,
            'validTo' => $this->validTo instanceof AbstractTransfer ? $this->validTo->toArray(true, true) : $this->validTo,
            'cmsTemplate' => $this->cmsTemplate instanceof AbstractTransfer ? $this->cmsTemplate->toArray(true, true) : $this->cmsTemplate,
            'spyCmsVersions' => $this->spyCmsVersions instanceof AbstractTransfer ? $this->spyCmsVersions->toArray(true, true) : $this->addValuesToCollection($this->spyCmsVersions, true, true),
            'spyCmsPageLocalizedAttributess' => $this->spyCmsPageLocalizedAttributess instanceof AbstractTransfer ? $this->spyCmsPageLocalizedAttributess->toArray(true, true) : $this->addValuesToCollection($this->spyCmsPageLocalizedAttributess, true, true),
            'spyCmsGlossaryKeyMappings' => $this->spyCmsGlossaryKeyMappings instanceof AbstractTransfer ? $this->spyCmsGlossaryKeyMappings->toArray(true, true) : $this->addValuesToCollection($this->spyCmsGlossaryKeyMappings, true, true),
            'spyCmsPageStores' => $this->spyCmsPageStores instanceof AbstractTransfer ? $this->spyCmsPageStores->toArray(true, true) : $this->addValuesToCollection($this->spyCmsPageStores, true, true),
            'spyUrls' => $this->spyUrls instanceof AbstractTransfer ? $this->spyUrls->toArray(true, true) : $this->addValuesToCollection($this->spyUrls, true, true),
        ];
    }
}
