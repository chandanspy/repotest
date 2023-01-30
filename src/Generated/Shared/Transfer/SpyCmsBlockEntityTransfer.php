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
class SpyCmsBlockEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_CMS_BLOCK = 'idCmsBlock';

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
    public const KEY = 'key';

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
    public const CMS_BLOCK_TEMPLATE = 'cmsBlockTemplate';

    /**
     * @var string
     */
    public const SPY_CMS_SLOT_BLOCKS = 'spyCmsSlotBlocks';

    /**
     * @var string
     */
    public const SPY_CMS_BLOCK_GLOSSARY_KEY_MAPPINGS = 'spyCmsBlockGlossaryKeyMappings';

    /**
     * @var string
     */
    public const SPY_CMS_BLOCK_STORES = 'spyCmsBlockStores';

    /**
     * @var string
     */
    public const SPY_CMS_BLOCK_PRODUCT_CONNECTORS = 'spyCmsBlockProductConnectors';

    /**
     * @var string
     */
    public const SPY_CMS_BLOCK_CATEGORY_CONNECTORS = 'spyCmsBlockCategoryConnectors';

    /**
     * @var integer|null
     */
    protected $idCmsBlock;

    /**
     * @var integer|null
     */
    protected $fkTemplate;

    /**
     * @var boolean|null
     */
    protected $isActive;

    /**
     * @var string|null
     */
    protected $key;

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
     * @var \Generated\Shared\Transfer\SpyCmsBlockTemplateEntityTransfer|null
     */
    protected $cmsBlockTemplate;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCmsSlotBlockEntityTransfer[]
     */
    protected $spyCmsSlotBlocks;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCmsBlockGlossaryKeyMappingEntityTransfer[]
     */
    protected $spyCmsBlockGlossaryKeyMappings;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCmsBlockStoreEntityTransfer[]
     */
    protected $spyCmsBlockStores;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCmsBlockProductConnectorEntityTransfer[]
     */
    protected $spyCmsBlockProductConnectors;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCmsBlockCategoryConnectorEntityTransfer[]
     */
    protected $spyCmsBlockCategoryConnectors;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_cms_block' => 'idCmsBlock',
        'idCmsBlock' => 'idCmsBlock',
        'IdCmsBlock' => 'idCmsBlock',
        'fk_template' => 'fkTemplate',
        'fkTemplate' => 'fkTemplate',
        'FkTemplate' => 'fkTemplate',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'key' => 'key',
        'Key' => 'key',
        'name' => 'name',
        'Name' => 'name',
        'valid_from' => 'validFrom',
        'validFrom' => 'validFrom',
        'ValidFrom' => 'validFrom',
        'valid_to' => 'validTo',
        'validTo' => 'validTo',
        'ValidTo' => 'validTo',
        'cms_block_template' => 'cmsBlockTemplate',
        'cmsBlockTemplate' => 'cmsBlockTemplate',
        'CmsBlockTemplate' => 'cmsBlockTemplate',
        'spy_cms_slot_blocks' => 'spyCmsSlotBlocks',
        'spyCmsSlotBlocks' => 'spyCmsSlotBlocks',
        'SpyCmsSlotBlocks' => 'spyCmsSlotBlocks',
        'spy_cms_block_glossary_key_mappings' => 'spyCmsBlockGlossaryKeyMappings',
        'spyCmsBlockGlossaryKeyMappings' => 'spyCmsBlockGlossaryKeyMappings',
        'SpyCmsBlockGlossaryKeyMappings' => 'spyCmsBlockGlossaryKeyMappings',
        'spy_cms_block_stores' => 'spyCmsBlockStores',
        'spyCmsBlockStores' => 'spyCmsBlockStores',
        'SpyCmsBlockStores' => 'spyCmsBlockStores',
        'spy_cms_block_product_connectors' => 'spyCmsBlockProductConnectors',
        'spyCmsBlockProductConnectors' => 'spyCmsBlockProductConnectors',
        'SpyCmsBlockProductConnectors' => 'spyCmsBlockProductConnectors',
        'spy_cms_block_category_connectors' => 'spyCmsBlockCategoryConnectors',
        'spyCmsBlockCategoryConnectors' => 'spyCmsBlockCategoryConnectors',
        'SpyCmsBlockCategoryConnectors' => 'spyCmsBlockCategoryConnectors',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_CMS_BLOCK => [
            'type' => 'integer',
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
        self::CMS_BLOCK_TEMPLATE => [
            'type' => 'Generated\Shared\Transfer\SpyCmsBlockTemplateEntityTransfer',
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
        self::SPY_CMS_SLOT_BLOCKS => [
            'type' => 'Generated\Shared\Transfer\SpyCmsSlotBlockEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_cms_slot_blocks',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_CMS_BLOCK_GLOSSARY_KEY_MAPPINGS => [
            'type' => 'Generated\Shared\Transfer\SpyCmsBlockGlossaryKeyMappingEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_cms_block_glossary_key_mappings',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_CMS_BLOCK_STORES => [
            'type' => 'Generated\Shared\Transfer\SpyCmsBlockStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_cms_block_stores',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_CMS_BLOCK_PRODUCT_CONNECTORS => [
            'type' => 'Generated\Shared\Transfer\SpyCmsBlockProductConnectorEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_cms_block_product_connectors',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_CMS_BLOCK_CATEGORY_CONNECTORS => [
            'type' => 'Generated\Shared\Transfer\SpyCmsBlockCategoryConnectorEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_cms_block_category_connectors',
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
    public static $entityNamespace = 'Orm\Zed\CmsBlock\Persistence\SpyCmsBlock';


    /**
     * @module 
     *
     * @param integer|null $idCmsBlock
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdCmsBlock()
    {
        return $this->idCmsBlock;
    }

    /**
     * @module 
     *
     * @param integer|null $idCmsBlock
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdCmsBlockOrFail()
    {
        if ($this->idCmsBlock === null) {
            $this->throwNullValueException(static::ID_CMS_BLOCK);
        }

        return $this->idCmsBlock;
    }

    /**
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @param \Generated\Shared\Transfer\SpyCmsBlockTemplateEntityTransfer|null $cmsBlockTemplate
     *
     * @return $this
     */
    public function setCmsBlockTemplate(SpyCmsBlockTemplateEntityTransfer $cmsBlockTemplate = null)
    {
        $this->cmsBlockTemplate = $cmsBlockTemplate;
        $this->modifiedProperties[self::CMS_BLOCK_TEMPLATE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCmsBlockTemplateEntityTransfer|null
     */
    public function getCmsBlockTemplate()
    {
        return $this->cmsBlockTemplate;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCmsBlockTemplateEntityTransfer $cmsBlockTemplate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCmsBlockTemplateOrFail(SpyCmsBlockTemplateEntityTransfer $cmsBlockTemplate)
    {
        return $this->setCmsBlockTemplate($cmsBlockTemplate);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCmsBlockTemplateEntityTransfer
     */
    public function getCmsBlockTemplateOrFail()
    {
        if ($this->cmsBlockTemplate === null) {
            $this->throwNullValueException(static::CMS_BLOCK_TEMPLATE);
        }

        return $this->cmsBlockTemplate;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCmsSlotBlockEntityTransfer[] $spyCmsSlotBlocks
     *
     * @return $this
     */
    public function setSpyCmsSlotBlocks(ArrayObject $spyCmsSlotBlocks)
    {
        $this->spyCmsSlotBlocks = $spyCmsSlotBlocks;
        $this->modifiedProperties[self::SPY_CMS_SLOT_BLOCKS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCmsSlotBlockEntityTransfer[]
     */
    public function getSpyCmsSlotBlocks()
    {
        return $this->spyCmsSlotBlocks;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCmsSlotBlockEntityTransfer $spyCmsSlotBlocks
     *
     * @return $this
     */
    public function addSpyCmsSlotBlocks(SpyCmsSlotBlockEntityTransfer $spyCmsSlotBlocks)
    {
        $this->spyCmsSlotBlocks[] = $spyCmsSlotBlocks;
        $this->modifiedProperties[self::SPY_CMS_SLOT_BLOCKS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCmsSlotBlocks()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_CMS_SLOT_BLOCKS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCmsBlockGlossaryKeyMappingEntityTransfer[] $spyCmsBlockGlossaryKeyMappings
     *
     * @return $this
     */
    public function setSpyCmsBlockGlossaryKeyMappings(ArrayObject $spyCmsBlockGlossaryKeyMappings)
    {
        $this->spyCmsBlockGlossaryKeyMappings = $spyCmsBlockGlossaryKeyMappings;
        $this->modifiedProperties[self::SPY_CMS_BLOCK_GLOSSARY_KEY_MAPPINGS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCmsBlockGlossaryKeyMappingEntityTransfer[]
     */
    public function getSpyCmsBlockGlossaryKeyMappings()
    {
        return $this->spyCmsBlockGlossaryKeyMappings;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCmsBlockGlossaryKeyMappingEntityTransfer $spyCmsBlockGlossaryKeyMappings
     *
     * @return $this
     */
    public function addSpyCmsBlockGlossaryKeyMappings(SpyCmsBlockGlossaryKeyMappingEntityTransfer $spyCmsBlockGlossaryKeyMappings)
    {
        $this->spyCmsBlockGlossaryKeyMappings[] = $spyCmsBlockGlossaryKeyMappings;
        $this->modifiedProperties[self::SPY_CMS_BLOCK_GLOSSARY_KEY_MAPPINGS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCmsBlockGlossaryKeyMappings()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_CMS_BLOCK_GLOSSARY_KEY_MAPPINGS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCmsBlockStoreEntityTransfer[] $spyCmsBlockStores
     *
     * @return $this
     */
    public function setSpyCmsBlockStores(ArrayObject $spyCmsBlockStores)
    {
        $this->spyCmsBlockStores = $spyCmsBlockStores;
        $this->modifiedProperties[self::SPY_CMS_BLOCK_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCmsBlockStoreEntityTransfer[]
     */
    public function getSpyCmsBlockStores()
    {
        return $this->spyCmsBlockStores;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCmsBlockStoreEntityTransfer $spyCmsBlockStores
     *
     * @return $this
     */
    public function addSpyCmsBlockStores(SpyCmsBlockStoreEntityTransfer $spyCmsBlockStores)
    {
        $this->spyCmsBlockStores[] = $spyCmsBlockStores;
        $this->modifiedProperties[self::SPY_CMS_BLOCK_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCmsBlockStores()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_CMS_BLOCK_STORES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCmsBlockProductConnectorEntityTransfer[] $spyCmsBlockProductConnectors
     *
     * @return $this
     */
    public function setSpyCmsBlockProductConnectors(ArrayObject $spyCmsBlockProductConnectors)
    {
        $this->spyCmsBlockProductConnectors = $spyCmsBlockProductConnectors;
        $this->modifiedProperties[self::SPY_CMS_BLOCK_PRODUCT_CONNECTORS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCmsBlockProductConnectorEntityTransfer[]
     */
    public function getSpyCmsBlockProductConnectors()
    {
        return $this->spyCmsBlockProductConnectors;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCmsBlockProductConnectorEntityTransfer $spyCmsBlockProductConnectors
     *
     * @return $this
     */
    public function addSpyCmsBlockProductConnectors(SpyCmsBlockProductConnectorEntityTransfer $spyCmsBlockProductConnectors)
    {
        $this->spyCmsBlockProductConnectors[] = $spyCmsBlockProductConnectors;
        $this->modifiedProperties[self::SPY_CMS_BLOCK_PRODUCT_CONNECTORS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCmsBlockProductConnectors()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_CMS_BLOCK_PRODUCT_CONNECTORS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCmsBlockCategoryConnectorEntityTransfer[] $spyCmsBlockCategoryConnectors
     *
     * @return $this
     */
    public function setSpyCmsBlockCategoryConnectors(ArrayObject $spyCmsBlockCategoryConnectors)
    {
        $this->spyCmsBlockCategoryConnectors = $spyCmsBlockCategoryConnectors;
        $this->modifiedProperties[self::SPY_CMS_BLOCK_CATEGORY_CONNECTORS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCmsBlockCategoryConnectorEntityTransfer[]
     */
    public function getSpyCmsBlockCategoryConnectors()
    {
        return $this->spyCmsBlockCategoryConnectors;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCmsBlockCategoryConnectorEntityTransfer $spyCmsBlockCategoryConnectors
     *
     * @return $this
     */
    public function addSpyCmsBlockCategoryConnectors(SpyCmsBlockCategoryConnectorEntityTransfer $spyCmsBlockCategoryConnectors)
    {
        $this->spyCmsBlockCategoryConnectors[] = $spyCmsBlockCategoryConnectors;
        $this->modifiedProperties[self::SPY_CMS_BLOCK_CATEGORY_CONNECTORS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCmsBlockCategoryConnectors()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_CMS_BLOCK_CATEGORY_CONNECTORS);

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
                case 'fkTemplate':
                case 'isActive':
                case 'key':
                case 'name':
                case 'validFrom':
                case 'validTo':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'cmsBlockTemplate':
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
                case 'spyCmsSlotBlocks':
                case 'spyCmsBlockGlossaryKeyMappings':
                case 'spyCmsBlockStores':
                case 'spyCmsBlockProductConnectors':
                case 'spyCmsBlockCategoryConnectors':
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
                case 'idCmsBlock':
                case 'fkTemplate':
                case 'isActive':
                case 'key':
                case 'name':
                case 'validFrom':
                case 'validTo':
                    $values[$arrayKey] = $value;

                    break;
                case 'cmsBlockTemplate':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyCmsSlotBlocks':
                case 'spyCmsBlockGlossaryKeyMappings':
                case 'spyCmsBlockStores':
                case 'spyCmsBlockProductConnectors':
                case 'spyCmsBlockCategoryConnectors':
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
                case 'idCmsBlock':
                case 'fkTemplate':
                case 'isActive':
                case 'key':
                case 'name':
                case 'validFrom':
                case 'validTo':
                    $values[$arrayKey] = $value;

                    break;
                case 'cmsBlockTemplate':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyCmsSlotBlocks':
                case 'spyCmsBlockGlossaryKeyMappings':
                case 'spyCmsBlockStores':
                case 'spyCmsBlockProductConnectors':
                case 'spyCmsBlockCategoryConnectors':
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
        $this->spyCmsSlotBlocks = $this->spyCmsSlotBlocks ?: new ArrayObject();
        $this->spyCmsBlockGlossaryKeyMappings = $this->spyCmsBlockGlossaryKeyMappings ?: new ArrayObject();
        $this->spyCmsBlockStores = $this->spyCmsBlockStores ?: new ArrayObject();
        $this->spyCmsBlockProductConnectors = $this->spyCmsBlockProductConnectors ?: new ArrayObject();
        $this->spyCmsBlockCategoryConnectors = $this->spyCmsBlockCategoryConnectors ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idCmsBlock' => $this->idCmsBlock,
            'fkTemplate' => $this->fkTemplate,
            'isActive' => $this->isActive,
            'key' => $this->key,
            'name' => $this->name,
            'validFrom' => $this->validFrom,
            'validTo' => $this->validTo,
            'cmsBlockTemplate' => $this->cmsBlockTemplate,
            'spyCmsSlotBlocks' => $this->spyCmsSlotBlocks,
            'spyCmsBlockGlossaryKeyMappings' => $this->spyCmsBlockGlossaryKeyMappings,
            'spyCmsBlockStores' => $this->spyCmsBlockStores,
            'spyCmsBlockProductConnectors' => $this->spyCmsBlockProductConnectors,
            'spyCmsBlockCategoryConnectors' => $this->spyCmsBlockCategoryConnectors,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_cms_block' => $this->idCmsBlock,
            'fk_template' => $this->fkTemplate,
            'is_active' => $this->isActive,
            'key' => $this->key,
            'name' => $this->name,
            'valid_from' => $this->validFrom,
            'valid_to' => $this->validTo,
            'cms_block_template' => $this->cmsBlockTemplate,
            'spy_cms_slot_blocks' => $this->spyCmsSlotBlocks,
            'spy_cms_block_glossary_key_mappings' => $this->spyCmsBlockGlossaryKeyMappings,
            'spy_cms_block_stores' => $this->spyCmsBlockStores,
            'spy_cms_block_product_connectors' => $this->spyCmsBlockProductConnectors,
            'spy_cms_block_category_connectors' => $this->spyCmsBlockCategoryConnectors,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_cms_block' => $this->idCmsBlock instanceof AbstractTransfer ? $this->idCmsBlock->toArray(true, false) : $this->idCmsBlock,
            'fk_template' => $this->fkTemplate instanceof AbstractTransfer ? $this->fkTemplate->toArray(true, false) : $this->fkTemplate,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'valid_from' => $this->validFrom instanceof AbstractTransfer ? $this->validFrom->toArray(true, false) : $this->validFrom,
            'valid_to' => $this->validTo instanceof AbstractTransfer ? $this->validTo->toArray(true, false) : $this->validTo,
            'cms_block_template' => $this->cmsBlockTemplate instanceof AbstractTransfer ? $this->cmsBlockTemplate->toArray(true, false) : $this->cmsBlockTemplate,
            'spy_cms_slot_blocks' => $this->spyCmsSlotBlocks instanceof AbstractTransfer ? $this->spyCmsSlotBlocks->toArray(true, false) : $this->addValuesToCollection($this->spyCmsSlotBlocks, true, false),
            'spy_cms_block_glossary_key_mappings' => $this->spyCmsBlockGlossaryKeyMappings instanceof AbstractTransfer ? $this->spyCmsBlockGlossaryKeyMappings->toArray(true, false) : $this->addValuesToCollection($this->spyCmsBlockGlossaryKeyMappings, true, false),
            'spy_cms_block_stores' => $this->spyCmsBlockStores instanceof AbstractTransfer ? $this->spyCmsBlockStores->toArray(true, false) : $this->addValuesToCollection($this->spyCmsBlockStores, true, false),
            'spy_cms_block_product_connectors' => $this->spyCmsBlockProductConnectors instanceof AbstractTransfer ? $this->spyCmsBlockProductConnectors->toArray(true, false) : $this->addValuesToCollection($this->spyCmsBlockProductConnectors, true, false),
            'spy_cms_block_category_connectors' => $this->spyCmsBlockCategoryConnectors instanceof AbstractTransfer ? $this->spyCmsBlockCategoryConnectors->toArray(true, false) : $this->addValuesToCollection($this->spyCmsBlockCategoryConnectors, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCmsBlock' => $this->idCmsBlock instanceof AbstractTransfer ? $this->idCmsBlock->toArray(true, true) : $this->idCmsBlock,
            'fkTemplate' => $this->fkTemplate instanceof AbstractTransfer ? $this->fkTemplate->toArray(true, true) : $this->fkTemplate,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'validFrom' => $this->validFrom instanceof AbstractTransfer ? $this->validFrom->toArray(true, true) : $this->validFrom,
            'validTo' => $this->validTo instanceof AbstractTransfer ? $this->validTo->toArray(true, true) : $this->validTo,
            'cmsBlockTemplate' => $this->cmsBlockTemplate instanceof AbstractTransfer ? $this->cmsBlockTemplate->toArray(true, true) : $this->cmsBlockTemplate,
            'spyCmsSlotBlocks' => $this->spyCmsSlotBlocks instanceof AbstractTransfer ? $this->spyCmsSlotBlocks->toArray(true, true) : $this->addValuesToCollection($this->spyCmsSlotBlocks, true, true),
            'spyCmsBlockGlossaryKeyMappings' => $this->spyCmsBlockGlossaryKeyMappings instanceof AbstractTransfer ? $this->spyCmsBlockGlossaryKeyMappings->toArray(true, true) : $this->addValuesToCollection($this->spyCmsBlockGlossaryKeyMappings, true, true),
            'spyCmsBlockStores' => $this->spyCmsBlockStores instanceof AbstractTransfer ? $this->spyCmsBlockStores->toArray(true, true) : $this->addValuesToCollection($this->spyCmsBlockStores, true, true),
            'spyCmsBlockProductConnectors' => $this->spyCmsBlockProductConnectors instanceof AbstractTransfer ? $this->spyCmsBlockProductConnectors->toArray(true, true) : $this->addValuesToCollection($this->spyCmsBlockProductConnectors, true, true),
            'spyCmsBlockCategoryConnectors' => $this->spyCmsBlockCategoryConnectors instanceof AbstractTransfer ? $this->spyCmsBlockCategoryConnectors->toArray(true, true) : $this->addValuesToCollection($this->spyCmsBlockCategoryConnectors, true, true),
        ];
    }
}
