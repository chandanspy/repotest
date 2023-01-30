<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyCmsSlotBlockStorageEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_CMS_SLOT_BLOCK_STORAGE = 'idCmsSlotBlockStorage';

    /**
     * @var string
     */
    public const FK_CMS_SLOT = 'fkCmsSlot';

    /**
     * @var string
     */
    public const FK_CMS_SLOT_TEMPLATE = 'fkCmsSlotTemplate';

    /**
     * @var string
     */
    public const DATA = 'data';

    /**
     * @var string
     */
    public const KEY = 'key';

    /**
     * @var string
     */
    public const SLOT_TEMPLATE_KEY = 'slotTemplateKey';

    /**
     * @var integer|null
     */
    protected $idCmsSlotBlockStorage;

    /**
     * @var integer|null
     */
    protected $fkCmsSlot;

    /**
     * @var integer|null
     */
    protected $fkCmsSlotTemplate;

    /**
     * @var string|null
     */
    protected $data;

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var string|null
     */
    protected $slotTemplateKey;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_cms_slot_block_storage' => 'idCmsSlotBlockStorage',
        'idCmsSlotBlockStorage' => 'idCmsSlotBlockStorage',
        'IdCmsSlotBlockStorage' => 'idCmsSlotBlockStorage',
        'fk_cms_slot' => 'fkCmsSlot',
        'fkCmsSlot' => 'fkCmsSlot',
        'FkCmsSlot' => 'fkCmsSlot',
        'fk_cms_slot_template' => 'fkCmsSlotTemplate',
        'fkCmsSlotTemplate' => 'fkCmsSlotTemplate',
        'FkCmsSlotTemplate' => 'fkCmsSlotTemplate',
        'data' => 'data',
        'Data' => 'data',
        'key' => 'key',
        'Key' => 'key',
        'slot_template_key' => 'slotTemplateKey',
        'slotTemplateKey' => 'slotTemplateKey',
        'SlotTemplateKey' => 'slotTemplateKey',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_CMS_SLOT_BLOCK_STORAGE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_cms_slot_block_storage',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_CMS_SLOT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_cms_slot',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_CMS_SLOT_TEMPLATE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_cms_slot_template',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DATA => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'data',
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
        self::SLOT_TEMPLATE_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'slot_template_key',
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
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\CmsSlotBlockStorage\Persistence\SpyCmsSlotBlockStorage';


    /**
     * @module 
     *
     * @param integer|null $idCmsSlotBlockStorage
     *
     * @return $this
     */
    public function setIdCmsSlotBlockStorage($idCmsSlotBlockStorage)
    {
        $this->idCmsSlotBlockStorage = $idCmsSlotBlockStorage;
        $this->modifiedProperties[self::ID_CMS_SLOT_BLOCK_STORAGE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdCmsSlotBlockStorage()
    {
        return $this->idCmsSlotBlockStorage;
    }

    /**
     * @module 
     *
     * @param integer|null $idCmsSlotBlockStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCmsSlotBlockStorageOrFail($idCmsSlotBlockStorage)
    {
        if ($idCmsSlotBlockStorage === null) {
            $this->throwNullValueException(static::ID_CMS_SLOT_BLOCK_STORAGE);
        }

        return $this->setIdCmsSlotBlockStorage($idCmsSlotBlockStorage);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdCmsSlotBlockStorageOrFail()
    {
        if ($this->idCmsSlotBlockStorage === null) {
            $this->throwNullValueException(static::ID_CMS_SLOT_BLOCK_STORAGE);
        }

        return $this->idCmsSlotBlockStorage;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCmsSlotBlockStorage()
    {
        $this->assertPropertyIsSet(self::ID_CMS_SLOT_BLOCK_STORAGE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCmsSlot
     *
     * @return $this
     */
    public function setFkCmsSlot($fkCmsSlot)
    {
        $this->fkCmsSlot = $fkCmsSlot;
        $this->modifiedProperties[self::FK_CMS_SLOT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkCmsSlot()
    {
        return $this->fkCmsSlot;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCmsSlot
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCmsSlotOrFail($fkCmsSlot)
    {
        if ($fkCmsSlot === null) {
            $this->throwNullValueException(static::FK_CMS_SLOT);
        }

        return $this->setFkCmsSlot($fkCmsSlot);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCmsSlotOrFail()
    {
        if ($this->fkCmsSlot === null) {
            $this->throwNullValueException(static::FK_CMS_SLOT);
        }

        return $this->fkCmsSlot;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCmsSlot()
    {
        $this->assertPropertyIsSet(self::FK_CMS_SLOT);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCmsSlotTemplate
     *
     * @return $this
     */
    public function setFkCmsSlotTemplate($fkCmsSlotTemplate)
    {
        $this->fkCmsSlotTemplate = $fkCmsSlotTemplate;
        $this->modifiedProperties[self::FK_CMS_SLOT_TEMPLATE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkCmsSlotTemplate()
    {
        return $this->fkCmsSlotTemplate;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCmsSlotTemplate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCmsSlotTemplateOrFail($fkCmsSlotTemplate)
    {
        if ($fkCmsSlotTemplate === null) {
            $this->throwNullValueException(static::FK_CMS_SLOT_TEMPLATE);
        }

        return $this->setFkCmsSlotTemplate($fkCmsSlotTemplate);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCmsSlotTemplateOrFail()
    {
        if ($this->fkCmsSlotTemplate === null) {
            $this->throwNullValueException(static::FK_CMS_SLOT_TEMPLATE);
        }

        return $this->fkCmsSlotTemplate;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCmsSlotTemplate()
    {
        $this->assertPropertyIsSet(self::FK_CMS_SLOT_TEMPLATE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $data
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;
        $this->modifiedProperties[self::DATA] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @module 
     *
     * @param string|null $data
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDataOrFail($data)
    {
        if ($data === null) {
            $this->throwNullValueException(static::DATA);
        }

        return $this->setData($data);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDataOrFail()
    {
        if ($this->data === null) {
            $this->throwNullValueException(static::DATA);
        }

        return $this->data;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireData()
    {
        $this->assertPropertyIsSet(self::DATA);

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
     * @param string|null $slotTemplateKey
     *
     * @return $this
     */
    public function setSlotTemplateKey($slotTemplateKey)
    {
        $this->slotTemplateKey = $slotTemplateKey;
        $this->modifiedProperties[self::SLOT_TEMPLATE_KEY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getSlotTemplateKey()
    {
        return $this->slotTemplateKey;
    }

    /**
     * @module 
     *
     * @param string|null $slotTemplateKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSlotTemplateKeyOrFail($slotTemplateKey)
    {
        if ($slotTemplateKey === null) {
            $this->throwNullValueException(static::SLOT_TEMPLATE_KEY);
        }

        return $this->setSlotTemplateKey($slotTemplateKey);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSlotTemplateKeyOrFail()
    {
        if ($this->slotTemplateKey === null) {
            $this->throwNullValueException(static::SLOT_TEMPLATE_KEY);
        }

        return $this->slotTemplateKey;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSlotTemplateKey()
    {
        $this->assertPropertyIsSet(self::SLOT_TEMPLATE_KEY);

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
                case 'idCmsSlotBlockStorage':
                case 'fkCmsSlot':
                case 'fkCmsSlotTemplate':
                case 'data':
                case 'key':
                case 'slotTemplateKey':
                    $this->$normalizedPropertyName = $value;
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
                case 'idCmsSlotBlockStorage':
                case 'fkCmsSlot':
                case 'fkCmsSlotTemplate':
                case 'data':
                case 'key':
                case 'slotTemplateKey':
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
                case 'idCmsSlotBlockStorage':
                case 'fkCmsSlot':
                case 'fkCmsSlotTemplate':
                case 'data':
                case 'key':
                case 'slotTemplateKey':
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
            'idCmsSlotBlockStorage' => $this->idCmsSlotBlockStorage,
            'fkCmsSlot' => $this->fkCmsSlot,
            'fkCmsSlotTemplate' => $this->fkCmsSlotTemplate,
            'data' => $this->data,
            'key' => $this->key,
            'slotTemplateKey' => $this->slotTemplateKey,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_cms_slot_block_storage' => $this->idCmsSlotBlockStorage,
            'fk_cms_slot' => $this->fkCmsSlot,
            'fk_cms_slot_template' => $this->fkCmsSlotTemplate,
            'data' => $this->data,
            'key' => $this->key,
            'slot_template_key' => $this->slotTemplateKey,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_cms_slot_block_storage' => $this->idCmsSlotBlockStorage instanceof AbstractTransfer ? $this->idCmsSlotBlockStorage->toArray(true, false) : $this->idCmsSlotBlockStorage,
            'fk_cms_slot' => $this->fkCmsSlot instanceof AbstractTransfer ? $this->fkCmsSlot->toArray(true, false) : $this->fkCmsSlot,
            'fk_cms_slot_template' => $this->fkCmsSlotTemplate instanceof AbstractTransfer ? $this->fkCmsSlotTemplate->toArray(true, false) : $this->fkCmsSlotTemplate,
            'data' => $this->data instanceof AbstractTransfer ? $this->data->toArray(true, false) : $this->data,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
            'slot_template_key' => $this->slotTemplateKey instanceof AbstractTransfer ? $this->slotTemplateKey->toArray(true, false) : $this->slotTemplateKey,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCmsSlotBlockStorage' => $this->idCmsSlotBlockStorage instanceof AbstractTransfer ? $this->idCmsSlotBlockStorage->toArray(true, true) : $this->idCmsSlotBlockStorage,
            'fkCmsSlot' => $this->fkCmsSlot instanceof AbstractTransfer ? $this->fkCmsSlot->toArray(true, true) : $this->fkCmsSlot,
            'fkCmsSlotTemplate' => $this->fkCmsSlotTemplate instanceof AbstractTransfer ? $this->fkCmsSlotTemplate->toArray(true, true) : $this->fkCmsSlotTemplate,
            'data' => $this->data instanceof AbstractTransfer ? $this->data->toArray(true, true) : $this->data,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
            'slotTemplateKey' => $this->slotTemplateKey instanceof AbstractTransfer ? $this->slotTemplateKey->toArray(true, true) : $this->slotTemplateKey,
        ];
    }
}
