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
class SpyCmsSlotEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_CMS_SLOT = 'idCmsSlot';

    /**
     * @var string
     */
    public const CONTENT_PROVIDER_TYPE = 'contentProviderType';

    /**
     * @var string
     */
    public const DESCRIPTION = 'description';

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
    public const SPY_CMS_SLOT_BLOCKS = 'spyCmsSlotBlocks';

    /**
     * @var string
     */
    public const SPY_CMS_SLOT_TO_CMS_SLOT_TEMPLATES = 'spyCmsSlotToCmsSlotTemplates';

    /**
     * @var integer|null
     */
    protected $idCmsSlot;

    /**
     * @var string|null
     */
    protected $contentProviderType;

    /**
     * @var string|null
     */
    protected $description;

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
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCmsSlotBlockEntityTransfer[]
     */
    protected $spyCmsSlotBlocks;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCmsSlotToCmsSlotTemplateEntityTransfer[]
     */
    protected $spyCmsSlotToCmsSlotTemplates;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_cms_slot' => 'idCmsSlot',
        'idCmsSlot' => 'idCmsSlot',
        'IdCmsSlot' => 'idCmsSlot',
        'content_provider_type' => 'contentProviderType',
        'contentProviderType' => 'contentProviderType',
        'ContentProviderType' => 'contentProviderType',
        'description' => 'description',
        'Description' => 'description',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'key' => 'key',
        'Key' => 'key',
        'name' => 'name',
        'Name' => 'name',
        'spy_cms_slot_blocks' => 'spyCmsSlotBlocks',
        'spyCmsSlotBlocks' => 'spyCmsSlotBlocks',
        'SpyCmsSlotBlocks' => 'spyCmsSlotBlocks',
        'spy_cms_slot_to_cms_slot_templates' => 'spyCmsSlotToCmsSlotTemplates',
        'spyCmsSlotToCmsSlotTemplates' => 'spyCmsSlotToCmsSlotTemplates',
        'SpyCmsSlotToCmsSlotTemplates' => 'spyCmsSlotToCmsSlotTemplates',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_CMS_SLOT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_cms_slot',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONTENT_PROVIDER_TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'content_provider_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DESCRIPTION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'description',
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
        self::SPY_CMS_SLOT_TO_CMS_SLOT_TEMPLATES => [
            'type' => 'Generated\Shared\Transfer\SpyCmsSlotToCmsSlotTemplateEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_cms_slot_to_cms_slot_templates',
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
    public static $entityNamespace = 'Orm\Zed\CmsSlot\Persistence\SpyCmsSlot';


    /**
     * @module 
     *
     * @param integer|null $idCmsSlot
     *
     * @return $this
     */
    public function setIdCmsSlot($idCmsSlot)
    {
        $this->idCmsSlot = $idCmsSlot;
        $this->modifiedProperties[self::ID_CMS_SLOT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdCmsSlot()
    {
        return $this->idCmsSlot;
    }

    /**
     * @module 
     *
     * @param integer|null $idCmsSlot
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCmsSlotOrFail($idCmsSlot)
    {
        if ($idCmsSlot === null) {
            $this->throwNullValueException(static::ID_CMS_SLOT);
        }

        return $this->setIdCmsSlot($idCmsSlot);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdCmsSlotOrFail()
    {
        if ($this->idCmsSlot === null) {
            $this->throwNullValueException(static::ID_CMS_SLOT);
        }

        return $this->idCmsSlot;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCmsSlot()
    {
        $this->assertPropertyIsSet(self::ID_CMS_SLOT);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $contentProviderType
     *
     * @return $this
     */
    public function setContentProviderType($contentProviderType)
    {
        $this->contentProviderType = $contentProviderType;
        $this->modifiedProperties[self::CONTENT_PROVIDER_TYPE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getContentProviderType()
    {
        return $this->contentProviderType;
    }

    /**
     * @module 
     *
     * @param string|null $contentProviderType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setContentProviderTypeOrFail($contentProviderType)
    {
        if ($contentProviderType === null) {
            $this->throwNullValueException(static::CONTENT_PROVIDER_TYPE);
        }

        return $this->setContentProviderType($contentProviderType);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getContentProviderTypeOrFail()
    {
        if ($this->contentProviderType === null) {
            $this->throwNullValueException(static::CONTENT_PROVIDER_TYPE);
        }

        return $this->contentProviderType;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireContentProviderType()
    {
        $this->assertPropertyIsSet(self::CONTENT_PROVIDER_TYPE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        $this->modifiedProperties[self::DESCRIPTION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @module 
     *
     * @param string|null $description
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDescriptionOrFail($description)
    {
        if ($description === null) {
            $this->throwNullValueException(static::DESCRIPTION);
        }

        return $this->setDescription($description);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDescriptionOrFail()
    {
        if ($this->description === null) {
            $this->throwNullValueException(static::DESCRIPTION);
        }

        return $this->description;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDescription()
    {
        $this->assertPropertyIsSet(self::DESCRIPTION);

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
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCmsSlotToCmsSlotTemplateEntityTransfer[] $spyCmsSlotToCmsSlotTemplates
     *
     * @return $this
     */
    public function setSpyCmsSlotToCmsSlotTemplates(ArrayObject $spyCmsSlotToCmsSlotTemplates)
    {
        $this->spyCmsSlotToCmsSlotTemplates = $spyCmsSlotToCmsSlotTemplates;
        $this->modifiedProperties[self::SPY_CMS_SLOT_TO_CMS_SLOT_TEMPLATES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCmsSlotToCmsSlotTemplateEntityTransfer[]
     */
    public function getSpyCmsSlotToCmsSlotTemplates()
    {
        return $this->spyCmsSlotToCmsSlotTemplates;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCmsSlotToCmsSlotTemplateEntityTransfer $spyCmsSlotToCmsSlotTemplates
     *
     * @return $this
     */
    public function addSpyCmsSlotToCmsSlotTemplates(SpyCmsSlotToCmsSlotTemplateEntityTransfer $spyCmsSlotToCmsSlotTemplates)
    {
        $this->spyCmsSlotToCmsSlotTemplates[] = $spyCmsSlotToCmsSlotTemplates;
        $this->modifiedProperties[self::SPY_CMS_SLOT_TO_CMS_SLOT_TEMPLATES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCmsSlotToCmsSlotTemplates()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_CMS_SLOT_TO_CMS_SLOT_TEMPLATES);

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
                case 'idCmsSlot':
                case 'contentProviderType':
                case 'description':
                case 'isActive':
                case 'key':
                case 'name':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyCmsSlotBlocks':
                case 'spyCmsSlotToCmsSlotTemplates':
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
                case 'idCmsSlot':
                case 'contentProviderType':
                case 'description':
                case 'isActive':
                case 'key':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyCmsSlotBlocks':
                case 'spyCmsSlotToCmsSlotTemplates':
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
                case 'idCmsSlot':
                case 'contentProviderType':
                case 'description':
                case 'isActive':
                case 'key':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyCmsSlotBlocks':
                case 'spyCmsSlotToCmsSlotTemplates':
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
        $this->spyCmsSlotToCmsSlotTemplates = $this->spyCmsSlotToCmsSlotTemplates ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idCmsSlot' => $this->idCmsSlot,
            'contentProviderType' => $this->contentProviderType,
            'description' => $this->description,
            'isActive' => $this->isActive,
            'key' => $this->key,
            'name' => $this->name,
            'spyCmsSlotBlocks' => $this->spyCmsSlotBlocks,
            'spyCmsSlotToCmsSlotTemplates' => $this->spyCmsSlotToCmsSlotTemplates,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_cms_slot' => $this->idCmsSlot,
            'content_provider_type' => $this->contentProviderType,
            'description' => $this->description,
            'is_active' => $this->isActive,
            'key' => $this->key,
            'name' => $this->name,
            'spy_cms_slot_blocks' => $this->spyCmsSlotBlocks,
            'spy_cms_slot_to_cms_slot_templates' => $this->spyCmsSlotToCmsSlotTemplates,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_cms_slot' => $this->idCmsSlot instanceof AbstractTransfer ? $this->idCmsSlot->toArray(true, false) : $this->idCmsSlot,
            'content_provider_type' => $this->contentProviderType instanceof AbstractTransfer ? $this->contentProviderType->toArray(true, false) : $this->contentProviderType,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, false) : $this->description,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'spy_cms_slot_blocks' => $this->spyCmsSlotBlocks instanceof AbstractTransfer ? $this->spyCmsSlotBlocks->toArray(true, false) : $this->addValuesToCollection($this->spyCmsSlotBlocks, true, false),
            'spy_cms_slot_to_cms_slot_templates' => $this->spyCmsSlotToCmsSlotTemplates instanceof AbstractTransfer ? $this->spyCmsSlotToCmsSlotTemplates->toArray(true, false) : $this->addValuesToCollection($this->spyCmsSlotToCmsSlotTemplates, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCmsSlot' => $this->idCmsSlot instanceof AbstractTransfer ? $this->idCmsSlot->toArray(true, true) : $this->idCmsSlot,
            'contentProviderType' => $this->contentProviderType instanceof AbstractTransfer ? $this->contentProviderType->toArray(true, true) : $this->contentProviderType,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, true) : $this->description,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'spyCmsSlotBlocks' => $this->spyCmsSlotBlocks instanceof AbstractTransfer ? $this->spyCmsSlotBlocks->toArray(true, true) : $this->addValuesToCollection($this->spyCmsSlotBlocks, true, true),
            'spyCmsSlotToCmsSlotTemplates' => $this->spyCmsSlotToCmsSlotTemplates instanceof AbstractTransfer ? $this->spyCmsSlotToCmsSlotTemplates->toArray(true, true) : $this->addValuesToCollection($this->spyCmsSlotToCmsSlotTemplates, true, true),
        ];
    }
}
