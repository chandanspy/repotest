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
class CmsBlockTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_CMS_BLOCK = 'idCmsBlock';

    /**
     * @var string
     */
    public const NAME = 'name';

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
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const CMS_BLOCK_TEMPLATE = 'cmsBlockTemplate';

    /**
     * @var string
     */
    public const GLOSSARY = 'glossary';

    /**
     * @var string
     */
    public const ID_CATEGORIES = 'idCategories';

    /**
     * @var string
     */
    public const KEY = 'key';

    /**
     * @var string
     */
    public const STORE_RELATION = 'storeRelation';

    /**
     * @var string
     */
    public const FK_TEMPLATE = 'fkTemplate';

    /**
     * @var string
     */
    public const ID_PRODUCT_ABSTRACTS = 'idProductAbstracts';

    /**
     * @var string
     */
    public const TEMPLATE_NAME = 'templateName';

    /**
     * @var string
     */
    public const STORE_NAMES = 'storeNames';

    /**
     * @var string
     */
    public const IS_ASSIGNED_TO_SLOT_AND_TEMPLATE = 'isAssignedToSlotAndTemplate';

    /**
     * @var string
     */
    public const CMS_SLOT_BLOCK_COLLECTION = 'cmsSlotBlockCollection';

    /**
     * @var string
     */
    public const FK_PAGE = 'fkPage';

    /**
     * @var string
     */
    public const LOCALE = 'locale';

    /**
     * @var string
     */
    public const TYPE = 'type';

    /**
     * @var string
     */
    public const VALUE = 'value';

    /**
     * @var int|null
     */
    protected $idCmsBlock;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $validFrom;

    /**
     * @var string|null
     */
    protected $validTo;

    /**
     * @var bool|null
     */
    protected $isActive;

    /**
     * @var \Generated\Shared\Transfer\CmsBlockTemplateTransfer|null
     */
    protected $cmsBlockTemplate;

    /**
     * @var \Generated\Shared\Transfer\CmsBlockGlossaryTransfer|null
     */
    protected $glossary;

    /**
     * @var array
     */
    protected $idCategories = [];

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var \Generated\Shared\Transfer\StoreRelationTransfer|null
     */
    protected $storeRelation;

    /**
     * @var int|null
     */
    protected $fkTemplate;

    /**
     * @var array
     */
    protected $idProductAbstracts = [];

    /**
     * @var string|null
     */
    protected $templateName;

    /**
     * @var string|null
     */
    protected $storeNames;

    /**
     * @var bool|null
     */
    protected $isAssignedToSlotAndTemplate;

    /**
     * @var \Generated\Shared\Transfer\CmsSlotBlockCollectionTransfer|null
     */
    protected $cmsSlotBlockCollection;

    /**
     * @var int|null
     */
    protected $fkPage;

    /**
     * @var \Generated\Shared\Transfer\LocaleTransfer|null
     */
    protected $locale;

    /**
     * @var string|null
     */
    protected $type;

    /**
     * @var int|null
     */
    protected $value;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_cms_block' => 'idCmsBlock',
        'idCmsBlock' => 'idCmsBlock',
        'IdCmsBlock' => 'idCmsBlock',
        'name' => 'name',
        'Name' => 'name',
        'valid_from' => 'validFrom',
        'validFrom' => 'validFrom',
        'ValidFrom' => 'validFrom',
        'valid_to' => 'validTo',
        'validTo' => 'validTo',
        'ValidTo' => 'validTo',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'cms_block_template' => 'cmsBlockTemplate',
        'cmsBlockTemplate' => 'cmsBlockTemplate',
        'CmsBlockTemplate' => 'cmsBlockTemplate',
        'glossary' => 'glossary',
        'Glossary' => 'glossary',
        'id_categories' => 'idCategories',
        'idCategories' => 'idCategories',
        'IdCategories' => 'idCategories',
        'key' => 'key',
        'Key' => 'key',
        'store_relation' => 'storeRelation',
        'storeRelation' => 'storeRelation',
        'StoreRelation' => 'storeRelation',
        'fk_template' => 'fkTemplate',
        'fkTemplate' => 'fkTemplate',
        'FkTemplate' => 'fkTemplate',
        'id_product_abstracts' => 'idProductAbstracts',
        'idProductAbstracts' => 'idProductAbstracts',
        'IdProductAbstracts' => 'idProductAbstracts',
        'template_name' => 'templateName',
        'templateName' => 'templateName',
        'TemplateName' => 'templateName',
        'store_names' => 'storeNames',
        'storeNames' => 'storeNames',
        'StoreNames' => 'storeNames',
        'is_assigned_to_slot_and_template' => 'isAssignedToSlotAndTemplate',
        'isAssignedToSlotAndTemplate' => 'isAssignedToSlotAndTemplate',
        'IsAssignedToSlotAndTemplate' => 'isAssignedToSlotAndTemplate',
        'cms_slot_block_collection' => 'cmsSlotBlockCollection',
        'cmsSlotBlockCollection' => 'cmsSlotBlockCollection',
        'CmsSlotBlockCollection' => 'cmsSlotBlockCollection',
        'fk_page' => 'fkPage',
        'fkPage' => 'fkPage',
        'FkPage' => 'fkPage',
        'locale' => 'locale',
        'Locale' => 'locale',
        'type' => 'type',
        'Type' => 'type',
        'value' => 'value',
        'Value' => 'value',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_CMS_BLOCK => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_cms_block',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
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
        self::IS_ACTIVE => [
            'type' => 'bool',
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
        self::CMS_BLOCK_TEMPLATE => [
            'type' => 'Generated\Shared\Transfer\CmsBlockTemplateTransfer',
            'type_shim' => null,
            'name_underscore' => 'cms_block_template',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::GLOSSARY => [
            'type' => 'Generated\Shared\Transfer\CmsBlockGlossaryTransfer',
            'type_shim' => null,
            'name_underscore' => 'glossary',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_CATEGORIES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'id_categories',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORE_RELATION => [
            'type' => 'Generated\Shared\Transfer\StoreRelationTransfer',
            'type_shim' => null,
            'name_underscore' => 'store_relation',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_TEMPLATE => [
            'type' => 'int',
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
        self::ID_PRODUCT_ABSTRACTS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'id_product_abstracts',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TEMPLATE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'template_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORE_NAMES => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'store_names',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_ASSIGNED_TO_SLOT_AND_TEMPLATE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_assigned_to_slot_and_template',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CMS_SLOT_BLOCK_COLLECTION => [
            'type' => 'Generated\Shared\Transfer\CmsSlotBlockCollectionTransfer',
            'type_shim' => null,
            'name_underscore' => 'cms_slot_block_collection',
            'is_collection' => false,
            'is_transfer' => true,
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
        self::LOCALE => [
            'type' => 'Generated\Shared\Transfer\LocaleTransfer',
            'type_shim' => null,
            'name_underscore' => 'locale',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::VALUE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'value',
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
     * @module CmsBlockWidget|CmsBlockCategoryConnector|CmsBlockGui|CmsBlockProductConnector|CmsBlock|CmsSlotBlockGui|Cms
     *
     * @param int|null $idCmsBlock
     *
     * @return $this
     */
    public function setIdCmsBlock($idCmsBlock)
    {
        $this->idCmsBlock = $idCmsBlock;
        $this->modifiedProperties[self::ID_CMS_BLOCK] = true;

        return $this;
    }

    /**
     * @module CmsBlockWidget|CmsBlockCategoryConnector|CmsBlockGui|CmsBlockProductConnector|CmsBlock|CmsSlotBlockGui|Cms
     *
     * @return int|null
     */
    public function getIdCmsBlock()
    {
        return $this->idCmsBlock;
    }

    /**
     * @module CmsBlockWidget|CmsBlockCategoryConnector|CmsBlockGui|CmsBlockProductConnector|CmsBlock|CmsSlotBlockGui|Cms
     *
     * @param int|null $idCmsBlock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCmsBlockOrFail($idCmsBlock)
    {
        if ($idCmsBlock === null) {
            $this->throwNullValueException(static::ID_CMS_BLOCK);
        }

        return $this->setIdCmsBlock($idCmsBlock);
    }

    /**
     * @module CmsBlockWidget|CmsBlockCategoryConnector|CmsBlockGui|CmsBlockProductConnector|CmsBlock|CmsSlotBlockGui|Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCmsBlockOrFail()
    {
        if ($this->idCmsBlock === null) {
            $this->throwNullValueException(static::ID_CMS_BLOCK);
        }

        return $this->idCmsBlock;
    }

    /**
     * @module CmsBlockWidget|CmsBlockCategoryConnector|CmsBlockGui|CmsBlockProductConnector|CmsBlock|CmsSlotBlockGui|Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCmsBlock()
    {
        $this->assertPropertyIsSet(self::ID_CMS_BLOCK);

        return $this;
    }

    /**
     * @module CmsBlockWidget|CmsBlockCategoryConnector|CmsBlock|CmsSlotBlockGui|Cms
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
     * @module CmsBlockWidget|CmsBlockCategoryConnector|CmsBlock|CmsSlotBlockGui|Cms
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module CmsBlockWidget|CmsBlockCategoryConnector|CmsBlock|CmsSlotBlockGui|Cms
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
     * @module CmsBlockWidget|CmsBlockCategoryConnector|CmsBlock|CmsSlotBlockGui|Cms
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
     * @module CmsBlockWidget|CmsBlockCategoryConnector|CmsBlock|CmsSlotBlockGui|Cms
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
     * @module CmsBlockWidget|CmsBlockGui|CmsBlock|CmsContentWidgetCmsBlockConnector|CmsSlotBlockGui
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
     * @module CmsBlockWidget|CmsBlockGui|CmsBlock|CmsContentWidgetCmsBlockConnector|CmsSlotBlockGui
     *
     * @return string|null
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * @module CmsBlockWidget|CmsBlockGui|CmsBlock|CmsContentWidgetCmsBlockConnector|CmsSlotBlockGui
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
     * @module CmsBlockWidget|CmsBlockGui|CmsBlock|CmsContentWidgetCmsBlockConnector|CmsSlotBlockGui
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
     * @module CmsBlockWidget|CmsBlockGui|CmsBlock|CmsContentWidgetCmsBlockConnector|CmsSlotBlockGui
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
     * @module CmsBlockWidget|CmsBlockGui|CmsBlock|CmsContentWidgetCmsBlockConnector|CmsSlotBlockGui
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
     * @module CmsBlockWidget|CmsBlockGui|CmsBlock|CmsContentWidgetCmsBlockConnector|CmsSlotBlockGui
     *
     * @return string|null
     */
    public function getValidTo()
    {
        return $this->validTo;
    }

    /**
     * @module CmsBlockWidget|CmsBlockGui|CmsBlock|CmsContentWidgetCmsBlockConnector|CmsSlotBlockGui
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
     * @module CmsBlockWidget|CmsBlockGui|CmsBlock|CmsContentWidgetCmsBlockConnector|CmsSlotBlockGui
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
     * @module CmsBlockWidget|CmsBlockGui|CmsBlock|CmsContentWidgetCmsBlockConnector|CmsSlotBlockGui
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
     * @module CmsBlockWidget|CmsBlockGui|CmsBlock|CmsSlotBlockGui
     *
     * @param bool|null $isActive
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
     * @module CmsBlockWidget|CmsBlockGui|CmsBlock|CmsSlotBlockGui
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module CmsBlockWidget|CmsBlockGui|CmsBlock|CmsSlotBlockGui
     *
     * @param bool|null $isActive
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
     * @module CmsBlockWidget|CmsBlockGui|CmsBlock|CmsSlotBlockGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsActiveOrFail()
    {
        if ($this->isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->isActive;
    }

    /**
     * @module CmsBlockWidget|CmsBlockGui|CmsBlock|CmsSlotBlockGui
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
     * @module CmsBlockWidget|CmsBlock|CmsContentWidgetCmsBlockConnector
     *
     * @param \Generated\Shared\Transfer\CmsBlockTemplateTransfer|null $cmsBlockTemplate
     *
     * @return $this
     */
    public function setCmsBlockTemplate(CmsBlockTemplateTransfer $cmsBlockTemplate = null)
    {
        $this->cmsBlockTemplate = $cmsBlockTemplate;
        $this->modifiedProperties[self::CMS_BLOCK_TEMPLATE] = true;

        return $this;
    }

    /**
     * @module CmsBlockWidget|CmsBlock|CmsContentWidgetCmsBlockConnector
     *
     * @return \Generated\Shared\Transfer\CmsBlockTemplateTransfer|null
     */
    public function getCmsBlockTemplate()
    {
        return $this->cmsBlockTemplate;
    }

    /**
     * @module CmsBlockWidget|CmsBlock|CmsContentWidgetCmsBlockConnector
     *
     * @param \Generated\Shared\Transfer\CmsBlockTemplateTransfer $cmsBlockTemplate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCmsBlockTemplateOrFail(CmsBlockTemplateTransfer $cmsBlockTemplate)
    {
        return $this->setCmsBlockTemplate($cmsBlockTemplate);
    }

    /**
     * @module CmsBlockWidget|CmsBlock|CmsContentWidgetCmsBlockConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CmsBlockTemplateTransfer
     */
    public function getCmsBlockTemplateOrFail()
    {
        if ($this->cmsBlockTemplate === null) {
            $this->throwNullValueException(static::CMS_BLOCK_TEMPLATE);
        }

        return $this->cmsBlockTemplate;
    }

    /**
     * @module CmsBlockWidget|CmsBlock|CmsContentWidgetCmsBlockConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCmsBlockTemplate()
    {
        $this->assertPropertyIsSet(self::CMS_BLOCK_TEMPLATE);

        return $this;
    }

    /**
     * @module CmsBlockWidget|CmsBlock|CmsContentWidgetCmsBlockConnector
     *
     * @param \Generated\Shared\Transfer\CmsBlockGlossaryTransfer|null $glossary
     *
     * @return $this
     */
    public function setGlossary(CmsBlockGlossaryTransfer $glossary = null)
    {
        $this->glossary = $glossary;
        $this->modifiedProperties[self::GLOSSARY] = true;

        return $this;
    }

    /**
     * @module CmsBlockWidget|CmsBlock|CmsContentWidgetCmsBlockConnector
     *
     * @return \Generated\Shared\Transfer\CmsBlockGlossaryTransfer|null
     */
    public function getGlossary()
    {
        return $this->glossary;
    }

    /**
     * @module CmsBlockWidget|CmsBlock|CmsContentWidgetCmsBlockConnector
     *
     * @param \Generated\Shared\Transfer\CmsBlockGlossaryTransfer $glossary
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setGlossaryOrFail(CmsBlockGlossaryTransfer $glossary)
    {
        return $this->setGlossary($glossary);
    }

    /**
     * @module CmsBlockWidget|CmsBlock|CmsContentWidgetCmsBlockConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CmsBlockGlossaryTransfer
     */
    public function getGlossaryOrFail()
    {
        if ($this->glossary === null) {
            $this->throwNullValueException(static::GLOSSARY);
        }

        return $this->glossary;
    }

    /**
     * @module CmsBlockWidget|CmsBlock|CmsContentWidgetCmsBlockConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireGlossary()
    {
        $this->assertPropertyIsSet(self::GLOSSARY);

        return $this;
    }

    /**
     * @module CmsBlockCategoryConnector
     *
     * @param array|null $idCategories
     *
     * @return $this
     */
    public function setIdCategories(array $idCategories = null)
    {
        if ($idCategories === null) {
            $idCategories = [];
        }

        $this->idCategories = $idCategories;
        $this->modifiedProperties[self::ID_CATEGORIES] = true;

        return $this;
    }

    /**
     * @module CmsBlockCategoryConnector
     *
     * @return array
     */
    public function getIdCategories()
    {
        return $this->idCategories;
    }

    /**
     * @module CmsBlockCategoryConnector
     *
     * @param mixed $idCategories
     *
     * @return $this
     */
    public function addIdCategories($idCategories)
    {
        $this->idCategories[] = $idCategories;
        $this->modifiedProperties[self::ID_CATEGORIES] = true;

        return $this;
    }

    /**
     * @module CmsBlockCategoryConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCategories()
    {
        $this->assertPropertyIsSet(self::ID_CATEGORIES);

        return $this;
    }

    /**
     * @module CmsBlockCategoryStorage|CmsBlockProductStorage|CmsBlockStorage|CmsBlock
     *
     * @param string|null $key
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->key = $key;
        $this->modifiedProperties[self::KEY] = true;

        return $this;
    }

    /**
     * @module CmsBlockCategoryStorage|CmsBlockProductStorage|CmsBlockStorage|CmsBlock
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @module CmsBlockCategoryStorage|CmsBlockProductStorage|CmsBlockStorage|CmsBlock
     *
     * @param string|null $key
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setKeyOrFail($key)
    {
        if ($key === null) {
            $this->throwNullValueException(static::KEY);
        }

        return $this->setKey($key);
    }

    /**
     * @module CmsBlockCategoryStorage|CmsBlockProductStorage|CmsBlockStorage|CmsBlock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getKeyOrFail()
    {
        if ($this->key === null) {
            $this->throwNullValueException(static::KEY);
        }

        return $this->key;
    }

    /**
     * @module CmsBlockCategoryStorage|CmsBlockProductStorage|CmsBlockStorage|CmsBlock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireKey()
    {
        $this->assertPropertyIsSet(self::KEY);

        return $this;
    }

    /**
     * @module CmsBlockGui|CmsBlock|CmsSlotBlockGui
     *
     * @param \Generated\Shared\Transfer\StoreRelationTransfer|null $storeRelation
     *
     * @return $this
     */
    public function setStoreRelation(StoreRelationTransfer $storeRelation = null)
    {
        $this->storeRelation = $storeRelation;
        $this->modifiedProperties[self::STORE_RELATION] = true;

        return $this;
    }

    /**
     * @module CmsBlockGui|CmsBlock|CmsSlotBlockGui
     *
     * @return \Generated\Shared\Transfer\StoreRelationTransfer|null
     */
    public function getStoreRelation()
    {
        return $this->storeRelation;
    }

    /**
     * @module CmsBlockGui|CmsBlock|CmsSlotBlockGui
     *
     * @param \Generated\Shared\Transfer\StoreRelationTransfer $storeRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreRelationOrFail(StoreRelationTransfer $storeRelation)
    {
        return $this->setStoreRelation($storeRelation);
    }

    /**
     * @module CmsBlockGui|CmsBlock|CmsSlotBlockGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\StoreRelationTransfer
     */
    public function getStoreRelationOrFail()
    {
        if ($this->storeRelation === null) {
            $this->throwNullValueException(static::STORE_RELATION);
        }

        return $this->storeRelation;
    }

    /**
     * @module CmsBlockGui|CmsBlock|CmsSlotBlockGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStoreRelation()
    {
        $this->assertPropertyIsSet(self::STORE_RELATION);

        return $this;
    }

    /**
     * @module CmsBlockGui|CmsBlock
     *
     * @param int|null $fkTemplate
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
     * @module CmsBlockGui|CmsBlock
     *
     * @return int|null
     */
    public function getFkTemplate()
    {
        return $this->fkTemplate;
    }

    /**
     * @module CmsBlockGui|CmsBlock
     *
     * @param int|null $fkTemplate
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
     * @module CmsBlockGui|CmsBlock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkTemplateOrFail()
    {
        if ($this->fkTemplate === null) {
            $this->throwNullValueException(static::FK_TEMPLATE);
        }

        return $this->fkTemplate;
    }

    /**
     * @module CmsBlockGui|CmsBlock
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
     * @module CmsBlockProductConnector
     *
     * @param array|null $idProductAbstracts
     *
     * @return $this
     */
    public function setIdProductAbstracts(array $idProductAbstracts = null)
    {
        if ($idProductAbstracts === null) {
            $idProductAbstracts = [];
        }

        $this->idProductAbstracts = $idProductAbstracts;
        $this->modifiedProperties[self::ID_PRODUCT_ABSTRACTS] = true;

        return $this;
    }

    /**
     * @module CmsBlockProductConnector
     *
     * @return array
     */
    public function getIdProductAbstracts()
    {
        return $this->idProductAbstracts;
    }

    /**
     * @module CmsBlockProductConnector
     *
     * @param mixed $idProductAbstracts
     *
     * @return $this
     */
    public function addIdProductAbstracts($idProductAbstracts)
    {
        $this->idProductAbstracts[] = $idProductAbstracts;
        $this->modifiedProperties[self::ID_PRODUCT_ABSTRACTS] = true;

        return $this;
    }

    /**
     * @module CmsBlockProductConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductAbstracts()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_ABSTRACTS);

        return $this;
    }

    /**
     * @module CmsBlock
     *
     * @param string|null $templateName
     *
     * @return $this
     */
    public function setTemplateName($templateName)
    {
        $this->templateName = $templateName;
        $this->modifiedProperties[self::TEMPLATE_NAME] = true;

        return $this;
    }

    /**
     * @module CmsBlock
     *
     * @return string|null
     */
    public function getTemplateName()
    {
        return $this->templateName;
    }

    /**
     * @module CmsBlock
     *
     * @param string|null $templateName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTemplateNameOrFail($templateName)
    {
        if ($templateName === null) {
            $this->throwNullValueException(static::TEMPLATE_NAME);
        }

        return $this->setTemplateName($templateName);
    }

    /**
     * @module CmsBlock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTemplateNameOrFail()
    {
        if ($this->templateName === null) {
            $this->throwNullValueException(static::TEMPLATE_NAME);
        }

        return $this->templateName;
    }

    /**
     * @module CmsBlock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTemplateName()
    {
        $this->assertPropertyIsSet(self::TEMPLATE_NAME);

        return $this;
    }

    /**
     * @module CmsSlotBlockGui|CmsSlotBlock
     *
     * @param string|null $storeNames
     *
     * @return $this
     */
    public function setStoreNames($storeNames)
    {
        $this->storeNames = $storeNames;
        $this->modifiedProperties[self::STORE_NAMES] = true;

        return $this;
    }

    /**
     * @module CmsSlotBlockGui|CmsSlotBlock
     *
     * @return string|null
     */
    public function getStoreNames()
    {
        return $this->storeNames;
    }

    /**
     * @module CmsSlotBlockGui|CmsSlotBlock
     *
     * @param string|null $storeNames
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreNamesOrFail($storeNames)
    {
        if ($storeNames === null) {
            $this->throwNullValueException(static::STORE_NAMES);
        }

        return $this->setStoreNames($storeNames);
    }

    /**
     * @module CmsSlotBlockGui|CmsSlotBlock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStoreNamesOrFail()
    {
        if ($this->storeNames === null) {
            $this->throwNullValueException(static::STORE_NAMES);
        }

        return $this->storeNames;
    }

    /**
     * @module CmsSlotBlockGui|CmsSlotBlock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStoreNames()
    {
        $this->assertPropertyIsSet(self::STORE_NAMES);

        return $this;
    }

    /**
     * @module CmsSlotBlockGui
     *
     * @param bool|null $isAssignedToSlotAndTemplate
     *
     * @return $this
     */
    public function setIsAssignedToSlotAndTemplate($isAssignedToSlotAndTemplate)
    {
        $this->isAssignedToSlotAndTemplate = $isAssignedToSlotAndTemplate;
        $this->modifiedProperties[self::IS_ASSIGNED_TO_SLOT_AND_TEMPLATE] = true;

        return $this;
    }

    /**
     * @module CmsSlotBlockGui
     *
     * @return bool|null
     */
    public function getIsAssignedToSlotAndTemplate()
    {
        return $this->isAssignedToSlotAndTemplate;
    }

    /**
     * @module CmsSlotBlockGui
     *
     * @param bool|null $isAssignedToSlotAndTemplate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsAssignedToSlotAndTemplateOrFail($isAssignedToSlotAndTemplate)
    {
        if ($isAssignedToSlotAndTemplate === null) {
            $this->throwNullValueException(static::IS_ASSIGNED_TO_SLOT_AND_TEMPLATE);
        }

        return $this->setIsAssignedToSlotAndTemplate($isAssignedToSlotAndTemplate);
    }

    /**
     * @module CmsSlotBlockGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsAssignedToSlotAndTemplateOrFail()
    {
        if ($this->isAssignedToSlotAndTemplate === null) {
            $this->throwNullValueException(static::IS_ASSIGNED_TO_SLOT_AND_TEMPLATE);
        }

        return $this->isAssignedToSlotAndTemplate;
    }

    /**
     * @module CmsSlotBlockGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsAssignedToSlotAndTemplate()
    {
        $this->assertPropertyIsSet(self::IS_ASSIGNED_TO_SLOT_AND_TEMPLATE);

        return $this;
    }

    /**
     * @module CmsSlotBlockGui|CmsSlotBlock
     *
     * @param \Generated\Shared\Transfer\CmsSlotBlockCollectionTransfer|null $cmsSlotBlockCollection
     *
     * @return $this
     */
    public function setCmsSlotBlockCollection(CmsSlotBlockCollectionTransfer $cmsSlotBlockCollection = null)
    {
        $this->cmsSlotBlockCollection = $cmsSlotBlockCollection;
        $this->modifiedProperties[self::CMS_SLOT_BLOCK_COLLECTION] = true;

        return $this;
    }

    /**
     * @module CmsSlotBlockGui|CmsSlotBlock
     *
     * @return \Generated\Shared\Transfer\CmsSlotBlockCollectionTransfer|null
     */
    public function getCmsSlotBlockCollection()
    {
        return $this->cmsSlotBlockCollection;
    }

    /**
     * @module CmsSlotBlockGui|CmsSlotBlock
     *
     * @param \Generated\Shared\Transfer\CmsSlotBlockCollectionTransfer $cmsSlotBlockCollection
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCmsSlotBlockCollectionOrFail(CmsSlotBlockCollectionTransfer $cmsSlotBlockCollection)
    {
        return $this->setCmsSlotBlockCollection($cmsSlotBlockCollection);
    }

    /**
     * @module CmsSlotBlockGui|CmsSlotBlock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CmsSlotBlockCollectionTransfer
     */
    public function getCmsSlotBlockCollectionOrFail()
    {
        if ($this->cmsSlotBlockCollection === null) {
            $this->throwNullValueException(static::CMS_SLOT_BLOCK_COLLECTION);
        }

        return $this->cmsSlotBlockCollection;
    }

    /**
     * @module CmsSlotBlockGui|CmsSlotBlock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCmsSlotBlockCollection()
    {
        $this->assertPropertyIsSet(self::CMS_SLOT_BLOCK_COLLECTION);

        return $this;
    }

    /**
     * @module Cms
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
     * @module Cms
     *
     * @return int|null
     */
    public function getFkPage()
    {
        return $this->fkPage;
    }

    /**
     * @module Cms
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
     * @module Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
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
     * @module Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkPage()
    {
        $this->assertPropertyIsSet(self::FK_PAGE);

        return $this;
    }

    /**
     * @module Cms
     *
     * @param \Generated\Shared\Transfer\LocaleTransfer|null $locale
     *
     * @return $this
     */
    public function setLocale(LocaleTransfer $locale = null)
    {
        $this->locale = $locale;
        $this->modifiedProperties[self::LOCALE] = true;

        return $this;
    }

    /**
     * @module Cms
     *
     * @return \Generated\Shared\Transfer\LocaleTransfer|null
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @module Cms
     *
     * @param \Generated\Shared\Transfer\LocaleTransfer $locale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLocaleOrFail(LocaleTransfer $locale)
    {
        return $this->setLocale($locale);
    }

    /**
     * @module Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\LocaleTransfer
     */
    public function getLocaleOrFail()
    {
        if ($this->locale === null) {
            $this->throwNullValueException(static::LOCALE);
        }

        return $this->locale;
    }

    /**
     * @module Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocale()
    {
        $this->assertPropertyIsSet(self::LOCALE);

        return $this;
    }

    /**
     * @module Cms
     *
     * @param string|null $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        $this->modifiedProperties[self::TYPE] = true;

        return $this;
    }

    /**
     * @module Cms
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @module Cms
     *
     * @param string|null $type
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTypeOrFail($type)
    {
        if ($type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->setType($type);
    }

    /**
     * @module Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTypeOrFail()
    {
        if ($this->type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->type;
    }

    /**
     * @module Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireType()
    {
        $this->assertPropertyIsSet(self::TYPE);

        return $this;
    }

    /**
     * @module Cms
     *
     * @param int|null $value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        $this->modifiedProperties[self::VALUE] = true;

        return $this;
    }

    /**
     * @module Cms
     *
     * @return int|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @module Cms
     *
     * @param int|null $value
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setValueOrFail($value)
    {
        if ($value === null) {
            $this->throwNullValueException(static::VALUE);
        }

        return $this->setValue($value);
    }

    /**
     * @module Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getValueOrFail()
    {
        if ($this->value === null) {
            $this->throwNullValueException(static::VALUE);
        }

        return $this->value;
    }

    /**
     * @module Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireValue()
    {
        $this->assertPropertyIsSet(self::VALUE);

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
                case 'idCmsBlock':
                case 'name':
                case 'validFrom':
                case 'validTo':
                case 'isActive':
                case 'idCategories':
                case 'key':
                case 'fkTemplate':
                case 'idProductAbstracts':
                case 'templateName':
                case 'storeNames':
                case 'isAssignedToSlotAndTemplate':
                case 'fkPage':
                case 'type':
                case 'value':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'cmsBlockTemplate':
                case 'glossary':
                case 'storeRelation':
                case 'cmsSlotBlockCollection':
                case 'locale':
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
                case 'idCmsBlock':
                case 'name':
                case 'validFrom':
                case 'validTo':
                case 'isActive':
                case 'idCategories':
                case 'key':
                case 'fkTemplate':
                case 'idProductAbstracts':
                case 'templateName':
                case 'storeNames':
                case 'isAssignedToSlotAndTemplate':
                case 'fkPage':
                case 'type':
                case 'value':
                    $values[$arrayKey] = $value;

                    break;
                case 'cmsBlockTemplate':
                case 'glossary':
                case 'storeRelation':
                case 'cmsSlotBlockCollection':
                case 'locale':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

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
                case 'idCmsBlock':
                case 'name':
                case 'validFrom':
                case 'validTo':
                case 'isActive':
                case 'idCategories':
                case 'key':
                case 'fkTemplate':
                case 'idProductAbstracts':
                case 'templateName':
                case 'storeNames':
                case 'isAssignedToSlotAndTemplate':
                case 'fkPage':
                case 'type':
                case 'value':
                    $values[$arrayKey] = $value;

                    break;
                case 'cmsBlockTemplate':
                case 'glossary':
                case 'storeRelation':
                case 'cmsSlotBlockCollection':
                case 'locale':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

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
            'idCmsBlock' => $this->idCmsBlock,
            'name' => $this->name,
            'validFrom' => $this->validFrom,
            'validTo' => $this->validTo,
            'isActive' => $this->isActive,
            'idCategories' => $this->idCategories,
            'key' => $this->key,
            'fkTemplate' => $this->fkTemplate,
            'idProductAbstracts' => $this->idProductAbstracts,
            'templateName' => $this->templateName,
            'storeNames' => $this->storeNames,
            'isAssignedToSlotAndTemplate' => $this->isAssignedToSlotAndTemplate,
            'fkPage' => $this->fkPage,
            'type' => $this->type,
            'value' => $this->value,
            'cmsBlockTemplate' => $this->cmsBlockTemplate,
            'glossary' => $this->glossary,
            'storeRelation' => $this->storeRelation,
            'cmsSlotBlockCollection' => $this->cmsSlotBlockCollection,
            'locale' => $this->locale,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_cms_block' => $this->idCmsBlock,
            'name' => $this->name,
            'valid_from' => $this->validFrom,
            'valid_to' => $this->validTo,
            'is_active' => $this->isActive,
            'id_categories' => $this->idCategories,
            'key' => $this->key,
            'fk_template' => $this->fkTemplate,
            'id_product_abstracts' => $this->idProductAbstracts,
            'template_name' => $this->templateName,
            'store_names' => $this->storeNames,
            'is_assigned_to_slot_and_template' => $this->isAssignedToSlotAndTemplate,
            'fk_page' => $this->fkPage,
            'type' => $this->type,
            'value' => $this->value,
            'cms_block_template' => $this->cmsBlockTemplate,
            'glossary' => $this->glossary,
            'store_relation' => $this->storeRelation,
            'cms_slot_block_collection' => $this->cmsSlotBlockCollection,
            'locale' => $this->locale,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_cms_block' => $this->idCmsBlock instanceof AbstractTransfer ? $this->idCmsBlock->toArray(true, false) : $this->idCmsBlock,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'valid_from' => $this->validFrom instanceof AbstractTransfer ? $this->validFrom->toArray(true, false) : $this->validFrom,
            'valid_to' => $this->validTo instanceof AbstractTransfer ? $this->validTo->toArray(true, false) : $this->validTo,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'id_categories' => $this->idCategories instanceof AbstractTransfer ? $this->idCategories->toArray(true, false) : $this->idCategories,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
            'fk_template' => $this->fkTemplate instanceof AbstractTransfer ? $this->fkTemplate->toArray(true, false) : $this->fkTemplate,
            'id_product_abstracts' => $this->idProductAbstracts instanceof AbstractTransfer ? $this->idProductAbstracts->toArray(true, false) : $this->idProductAbstracts,
            'template_name' => $this->templateName instanceof AbstractTransfer ? $this->templateName->toArray(true, false) : $this->templateName,
            'store_names' => $this->storeNames instanceof AbstractTransfer ? $this->storeNames->toArray(true, false) : $this->storeNames,
            'is_assigned_to_slot_and_template' => $this->isAssignedToSlotAndTemplate instanceof AbstractTransfer ? $this->isAssignedToSlotAndTemplate->toArray(true, false) : $this->isAssignedToSlotAndTemplate,
            'fk_page' => $this->fkPage instanceof AbstractTransfer ? $this->fkPage->toArray(true, false) : $this->fkPage,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, false) : $this->type,
            'value' => $this->value instanceof AbstractTransfer ? $this->value->toArray(true, false) : $this->value,
            'cms_block_template' => $this->cmsBlockTemplate instanceof AbstractTransfer ? $this->cmsBlockTemplate->toArray(true, false) : $this->cmsBlockTemplate,
            'glossary' => $this->glossary instanceof AbstractTransfer ? $this->glossary->toArray(true, false) : $this->glossary,
            'store_relation' => $this->storeRelation instanceof AbstractTransfer ? $this->storeRelation->toArray(true, false) : $this->storeRelation,
            'cms_slot_block_collection' => $this->cmsSlotBlockCollection instanceof AbstractTransfer ? $this->cmsSlotBlockCollection->toArray(true, false) : $this->cmsSlotBlockCollection,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, false) : $this->locale,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCmsBlock' => $this->idCmsBlock instanceof AbstractTransfer ? $this->idCmsBlock->toArray(true, true) : $this->idCmsBlock,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'validFrom' => $this->validFrom instanceof AbstractTransfer ? $this->validFrom->toArray(true, true) : $this->validFrom,
            'validTo' => $this->validTo instanceof AbstractTransfer ? $this->validTo->toArray(true, true) : $this->validTo,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'idCategories' => $this->idCategories instanceof AbstractTransfer ? $this->idCategories->toArray(true, true) : $this->idCategories,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
            'fkTemplate' => $this->fkTemplate instanceof AbstractTransfer ? $this->fkTemplate->toArray(true, true) : $this->fkTemplate,
            'idProductAbstracts' => $this->idProductAbstracts instanceof AbstractTransfer ? $this->idProductAbstracts->toArray(true, true) : $this->idProductAbstracts,
            'templateName' => $this->templateName instanceof AbstractTransfer ? $this->templateName->toArray(true, true) : $this->templateName,
            'storeNames' => $this->storeNames instanceof AbstractTransfer ? $this->storeNames->toArray(true, true) : $this->storeNames,
            'isAssignedToSlotAndTemplate' => $this->isAssignedToSlotAndTemplate instanceof AbstractTransfer ? $this->isAssignedToSlotAndTemplate->toArray(true, true) : $this->isAssignedToSlotAndTemplate,
            'fkPage' => $this->fkPage instanceof AbstractTransfer ? $this->fkPage->toArray(true, true) : $this->fkPage,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, true) : $this->type,
            'value' => $this->value instanceof AbstractTransfer ? $this->value->toArray(true, true) : $this->value,
            'cmsBlockTemplate' => $this->cmsBlockTemplate instanceof AbstractTransfer ? $this->cmsBlockTemplate->toArray(true, true) : $this->cmsBlockTemplate,
            'glossary' => $this->glossary instanceof AbstractTransfer ? $this->glossary->toArray(true, true) : $this->glossary,
            'storeRelation' => $this->storeRelation instanceof AbstractTransfer ? $this->storeRelation->toArray(true, true) : $this->storeRelation,
            'cmsSlotBlockCollection' => $this->cmsSlotBlockCollection instanceof AbstractTransfer ? $this->cmsSlotBlockCollection->toArray(true, true) : $this->cmsSlotBlockCollection,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, true) : $this->locale,
        ];
    }
}
