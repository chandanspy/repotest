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
class CmsSlotBlockTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const CMS_BLOCK_KEY = 'cmsBlockKey';

    /**
     * @var string
     */
    public const CONDITIONS = 'conditions';

    /**
     * @var string
     */
    public const ID_SLOT_TEMPLATE = 'idSlotTemplate';

    /**
     * @var string
     */
    public const ID_SLOT = 'idSlot';

    /**
     * @var string
     */
    public const ID_CMS_SLOT_BLOCK = 'idCmsSlotBlock';

    /**
     * @var string
     */
    public const ID_CMS_BLOCK = 'idCmsBlock';

    /**
     * @var string
     */
    public const POSITION = 'position';

    /**
     * @var string|null
     */
    protected $cmsBlockKey;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\CmsSlotBlockConditionTransfer[]
     */
    protected $conditions;

    /**
     * @var int|null
     */
    protected $idSlotTemplate;

    /**
     * @var int|null
     */
    protected $idSlot;

    /**
     * @var string|null
     */
    protected $idCmsSlotBlock;

    /**
     * @var int|null
     */
    protected $idCmsBlock;

    /**
     * @var int|null
     */
    protected $position;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'cms_block_key' => 'cmsBlockKey',
        'cmsBlockKey' => 'cmsBlockKey',
        'CmsBlockKey' => 'cmsBlockKey',
        'conditions' => 'conditions',
        'Conditions' => 'conditions',
        'id_slot_template' => 'idSlotTemplate',
        'idSlotTemplate' => 'idSlotTemplate',
        'IdSlotTemplate' => 'idSlotTemplate',
        'id_slot' => 'idSlot',
        'idSlot' => 'idSlot',
        'IdSlot' => 'idSlot',
        'id_cms_slot_block' => 'idCmsSlotBlock',
        'idCmsSlotBlock' => 'idCmsSlotBlock',
        'IdCmsSlotBlock' => 'idCmsSlotBlock',
        'id_cms_block' => 'idCmsBlock',
        'idCmsBlock' => 'idCmsBlock',
        'IdCmsBlock' => 'idCmsBlock',
        'position' => 'position',
        'Position' => 'position',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::CMS_BLOCK_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'cms_block_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONDITIONS => [
            'type' => 'Generated\Shared\Transfer\CmsSlotBlockConditionTransfer',
            'type_shim' => null,
            'name_underscore' => 'conditions',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => true,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_SLOT_TEMPLATE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_slot_template',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_SLOT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_slot',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_CMS_SLOT_BLOCK => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'id_cms_slot_block',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
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
        self::POSITION => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'position',
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
     * @module CmsSlotBlockWidget|CmsSlotBlockStorage
     *
     * @param string|null $cmsBlockKey
     *
     * @return $this
     */
    public function setCmsBlockKey($cmsBlockKey)
    {
        $this->cmsBlockKey = $cmsBlockKey;
        $this->modifiedProperties[self::CMS_BLOCK_KEY] = true;

        return $this;
    }

    /**
     * @module CmsSlotBlockWidget|CmsSlotBlockStorage
     *
     * @return string|null
     */
    public function getCmsBlockKey()
    {
        return $this->cmsBlockKey;
    }

    /**
     * @module CmsSlotBlockWidget|CmsSlotBlockStorage
     *
     * @param string|null $cmsBlockKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCmsBlockKeyOrFail($cmsBlockKey)
    {
        if ($cmsBlockKey === null) {
            $this->throwNullValueException(static::CMS_BLOCK_KEY);
        }

        return $this->setCmsBlockKey($cmsBlockKey);
    }

    /**
     * @module CmsSlotBlockWidget|CmsSlotBlockStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCmsBlockKeyOrFail()
    {
        if ($this->cmsBlockKey === null) {
            $this->throwNullValueException(static::CMS_BLOCK_KEY);
        }

        return $this->cmsBlockKey;
    }

    /**
     * @module CmsSlotBlockWidget|CmsSlotBlockStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCmsBlockKey()
    {
        $this->assertPropertyIsSet(self::CMS_BLOCK_KEY);

        return $this;
    }

    /**
     * @module CmsSlotBlockWidget|CmsSlotBlockCategoryConnector|CmsSlotBlockCmsConnector|CmsSlotBlockGui|CmsSlotBlockProductCategoryConnector|CmsSlotBlockStorage|CmsSlotBlock
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\CmsSlotBlockConditionTransfer[] $conditions
     *
     * @return $this
     */
    public function setConditions(ArrayObject $conditions)
    {
        $this->conditions = $conditions;
        $this->modifiedProperties[self::CONDITIONS] = true;

        return $this;
    }

    /**
     * @module CmsSlotBlockWidget|CmsSlotBlockCategoryConnector|CmsSlotBlockCmsConnector|CmsSlotBlockGui|CmsSlotBlockProductCategoryConnector|CmsSlotBlockStorage|CmsSlotBlock
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\CmsSlotBlockConditionTransfer[]
     */
    public function getConditions()
    {
        return $this->conditions;
    }

    /**
     * @module CmsSlotBlockWidget|CmsSlotBlockCategoryConnector|CmsSlotBlockCmsConnector|CmsSlotBlockGui|CmsSlotBlockProductCategoryConnector|CmsSlotBlockStorage|CmsSlotBlock
     *
     * @param string|int $conditionKey
     * @param \Generated\Shared\Transfer\CmsSlotBlockConditionTransfer $conditionValue
     *
     * @return $this
     */
    public function addCondition($conditionKey, CmsSlotBlockConditionTransfer $conditionValue)
    {
        $this->conditions[$conditionKey] = $conditionValue;
        $this->modifiedProperties[self::CONDITIONS] = true;

        return $this;
    }

    /**
     * @module CmsSlotBlockWidget|CmsSlotBlockCategoryConnector|CmsSlotBlockCmsConnector|CmsSlotBlockGui|CmsSlotBlockProductCategoryConnector|CmsSlotBlockStorage|CmsSlotBlock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConditions()
    {
        $this->assertCollectionPropertyIsSet(self::CONDITIONS);

        return $this;
    }

    /**
     * @module CmsSlotBlockGui|CmsSlotBlockStorage|CmsSlotBlock
     *
     * @param int|null $idSlotTemplate
     *
     * @return $this
     */
    public function setIdSlotTemplate($idSlotTemplate)
    {
        $this->idSlotTemplate = $idSlotTemplate;
        $this->modifiedProperties[self::ID_SLOT_TEMPLATE] = true;

        return $this;
    }

    /**
     * @module CmsSlotBlockGui|CmsSlotBlockStorage|CmsSlotBlock
     *
     * @return int|null
     */
    public function getIdSlotTemplate()
    {
        return $this->idSlotTemplate;
    }

    /**
     * @module CmsSlotBlockGui|CmsSlotBlockStorage|CmsSlotBlock
     *
     * @param int|null $idSlotTemplate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSlotTemplateOrFail($idSlotTemplate)
    {
        if ($idSlotTemplate === null) {
            $this->throwNullValueException(static::ID_SLOT_TEMPLATE);
        }

        return $this->setIdSlotTemplate($idSlotTemplate);
    }

    /**
     * @module CmsSlotBlockGui|CmsSlotBlockStorage|CmsSlotBlock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdSlotTemplateOrFail()
    {
        if ($this->idSlotTemplate === null) {
            $this->throwNullValueException(static::ID_SLOT_TEMPLATE);
        }

        return $this->idSlotTemplate;
    }

    /**
     * @module CmsSlotBlockGui|CmsSlotBlockStorage|CmsSlotBlock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSlotTemplate()
    {
        $this->assertPropertyIsSet(self::ID_SLOT_TEMPLATE);

        return $this;
    }

    /**
     * @module CmsSlotBlockGui|CmsSlotBlockStorage|CmsSlotBlock
     *
     * @param int|null $idSlot
     *
     * @return $this
     */
    public function setIdSlot($idSlot)
    {
        $this->idSlot = $idSlot;
        $this->modifiedProperties[self::ID_SLOT] = true;

        return $this;
    }

    /**
     * @module CmsSlotBlockGui|CmsSlotBlockStorage|CmsSlotBlock
     *
     * @return int|null
     */
    public function getIdSlot()
    {
        return $this->idSlot;
    }

    /**
     * @module CmsSlotBlockGui|CmsSlotBlockStorage|CmsSlotBlock
     *
     * @param int|null $idSlot
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSlotOrFail($idSlot)
    {
        if ($idSlot === null) {
            $this->throwNullValueException(static::ID_SLOT);
        }

        return $this->setIdSlot($idSlot);
    }

    /**
     * @module CmsSlotBlockGui|CmsSlotBlockStorage|CmsSlotBlock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdSlotOrFail()
    {
        if ($this->idSlot === null) {
            $this->throwNullValueException(static::ID_SLOT);
        }

        return $this->idSlot;
    }

    /**
     * @module CmsSlotBlockGui|CmsSlotBlockStorage|CmsSlotBlock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSlot()
    {
        $this->assertPropertyIsSet(self::ID_SLOT);

        return $this;
    }

    /**
     * @module CmsSlotBlockStorage|CmsSlotBlock
     *
     * @param string|null $idCmsSlotBlock
     *
     * @return $this
     */
    public function setIdCmsSlotBlock($idCmsSlotBlock)
    {
        $this->idCmsSlotBlock = $idCmsSlotBlock;
        $this->modifiedProperties[self::ID_CMS_SLOT_BLOCK] = true;

        return $this;
    }

    /**
     * @module CmsSlotBlockStorage|CmsSlotBlock
     *
     * @return string|null
     */
    public function getIdCmsSlotBlock()
    {
        return $this->idCmsSlotBlock;
    }

    /**
     * @module CmsSlotBlockStorage|CmsSlotBlock
     *
     * @param string|null $idCmsSlotBlock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCmsSlotBlockOrFail($idCmsSlotBlock)
    {
        if ($idCmsSlotBlock === null) {
            $this->throwNullValueException(static::ID_CMS_SLOT_BLOCK);
        }

        return $this->setIdCmsSlotBlock($idCmsSlotBlock);
    }

    /**
     * @module CmsSlotBlockStorage|CmsSlotBlock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIdCmsSlotBlockOrFail()
    {
        if ($this->idCmsSlotBlock === null) {
            $this->throwNullValueException(static::ID_CMS_SLOT_BLOCK);
        }

        return $this->idCmsSlotBlock;
    }

    /**
     * @module CmsSlotBlockStorage|CmsSlotBlock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCmsSlotBlock()
    {
        $this->assertPropertyIsSet(self::ID_CMS_SLOT_BLOCK);

        return $this;
    }

    /**
     * @module CmsSlotBlock
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
     * @module CmsSlotBlock
     *
     * @return int|null
     */
    public function getIdCmsBlock()
    {
        return $this->idCmsBlock;
    }

    /**
     * @module CmsSlotBlock
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
     * @module CmsSlotBlock
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
     * @module CmsSlotBlock
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
     * @module CmsSlotBlock
     *
     * @param int|null $position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->position = $position;
        $this->modifiedProperties[self::POSITION] = true;

        return $this;
    }

    /**
     * @module CmsSlotBlock
     *
     * @return int|null
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @module CmsSlotBlock
     *
     * @param int|null $position
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPositionOrFail($position)
    {
        if ($position === null) {
            $this->throwNullValueException(static::POSITION);
        }

        return $this->setPosition($position);
    }

    /**
     * @module CmsSlotBlock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getPositionOrFail()
    {
        if ($this->position === null) {
            $this->throwNullValueException(static::POSITION);
        }

        return $this->position;
    }

    /**
     * @module CmsSlotBlock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePosition()
    {
        $this->assertPropertyIsSet(self::POSITION);

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
                case 'cmsBlockKey':
                case 'idSlotTemplate':
                case 'idSlot':
                case 'idCmsSlotBlock':
                case 'idCmsBlock':
                case 'position':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'conditions':
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
                case 'cmsBlockKey':
                case 'idSlotTemplate':
                case 'idSlot':
                case 'idCmsSlotBlock':
                case 'idCmsBlock':
                case 'position':
                    $values[$arrayKey] = $value;

                    break;
                case 'conditions':
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
                case 'cmsBlockKey':
                case 'idSlotTemplate':
                case 'idSlot':
                case 'idCmsSlotBlock':
                case 'idCmsBlock':
                case 'position':
                    $values[$arrayKey] = $value;

                    break;
                case 'conditions':
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
        $this->conditions = $this->conditions ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'cmsBlockKey' => $this->cmsBlockKey,
            'idSlotTemplate' => $this->idSlotTemplate,
            'idSlot' => $this->idSlot,
            'idCmsSlotBlock' => $this->idCmsSlotBlock,
            'idCmsBlock' => $this->idCmsBlock,
            'position' => $this->position,
            'conditions' => $this->conditions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'cms_block_key' => $this->cmsBlockKey,
            'id_slot_template' => $this->idSlotTemplate,
            'id_slot' => $this->idSlot,
            'id_cms_slot_block' => $this->idCmsSlotBlock,
            'id_cms_block' => $this->idCmsBlock,
            'position' => $this->position,
            'conditions' => $this->conditions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'cms_block_key' => $this->cmsBlockKey instanceof AbstractTransfer ? $this->cmsBlockKey->toArray(true, false) : $this->cmsBlockKey,
            'id_slot_template' => $this->idSlotTemplate instanceof AbstractTransfer ? $this->idSlotTemplate->toArray(true, false) : $this->idSlotTemplate,
            'id_slot' => $this->idSlot instanceof AbstractTransfer ? $this->idSlot->toArray(true, false) : $this->idSlot,
            'id_cms_slot_block' => $this->idCmsSlotBlock instanceof AbstractTransfer ? $this->idCmsSlotBlock->toArray(true, false) : $this->idCmsSlotBlock,
            'id_cms_block' => $this->idCmsBlock instanceof AbstractTransfer ? $this->idCmsBlock->toArray(true, false) : $this->idCmsBlock,
            'position' => $this->position instanceof AbstractTransfer ? $this->position->toArray(true, false) : $this->position,
            'conditions' => $this->conditions instanceof AbstractTransfer ? $this->conditions->toArray(true, false) : $this->addValuesToCollection($this->conditions, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'cmsBlockKey' => $this->cmsBlockKey instanceof AbstractTransfer ? $this->cmsBlockKey->toArray(true, true) : $this->cmsBlockKey,
            'idSlotTemplate' => $this->idSlotTemplate instanceof AbstractTransfer ? $this->idSlotTemplate->toArray(true, true) : $this->idSlotTemplate,
            'idSlot' => $this->idSlot instanceof AbstractTransfer ? $this->idSlot->toArray(true, true) : $this->idSlot,
            'idCmsSlotBlock' => $this->idCmsSlotBlock instanceof AbstractTransfer ? $this->idCmsSlotBlock->toArray(true, true) : $this->idCmsSlotBlock,
            'idCmsBlock' => $this->idCmsBlock instanceof AbstractTransfer ? $this->idCmsBlock->toArray(true, true) : $this->idCmsBlock,
            'position' => $this->position instanceof AbstractTransfer ? $this->position->toArray(true, true) : $this->position,
            'conditions' => $this->conditions instanceof AbstractTransfer ? $this->conditions->toArray(true, true) : $this->addValuesToCollection($this->conditions, true, true),
        ];
    }
}
