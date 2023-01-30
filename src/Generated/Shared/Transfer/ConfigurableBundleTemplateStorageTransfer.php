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
class ConfigurableBundleTemplateStorageTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SLOTS = 'slots';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const ID_CONFIGURABLE_BUNDLE_TEMPLATE = 'idConfigurableBundleTemplate';

    /**
     * @var string
     */
    public const IMAGE_SETS = 'imageSets';

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ConfigurableBundleTemplateSlotStorageTransfer[]
     */
    protected $slots;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var int|null
     */
    protected $idConfigurableBundleTemplate;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ProductImageSetStorageTransfer[]
     */
    protected $imageSets;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'slots' => 'slots',
        'Slots' => 'slots',
        'name' => 'name',
        'Name' => 'name',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'id_configurable_bundle_template' => 'idConfigurableBundleTemplate',
        'idConfigurableBundleTemplate' => 'idConfigurableBundleTemplate',
        'IdConfigurableBundleTemplate' => 'idConfigurableBundleTemplate',
        'image_sets' => 'imageSets',
        'imageSets' => 'imageSets',
        'ImageSets' => 'imageSets',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::SLOTS => [
            'type' => 'Generated\Shared\Transfer\ConfigurableBundleTemplateSlotStorageTransfer',
            'type_shim' => null,
            'name_underscore' => 'slots',
            'is_collection' => true,
            'is_transfer' => true,
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
        self::ID_CONFIGURABLE_BUNDLE_TEMPLATE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_configurable_bundle_template',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IMAGE_SETS => [
            'type' => 'Generated\Shared\Transfer\ProductImageSetStorageTransfer',
            'type_shim' => null,
            'name_underscore' => 'image_sets',
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
     * @module ConfigurableBundlePage|ConfigurableBundleStorage|ConfigurableBundlesRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ConfigurableBundleTemplateSlotStorageTransfer[] $slots
     *
     * @return $this
     */
    public function setSlots(ArrayObject $slots)
    {
        $this->slots = $slots;
        $this->modifiedProperties[self::SLOTS] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleStorage|ConfigurableBundlesRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ConfigurableBundleTemplateSlotStorageTransfer[]
     */
    public function getSlots()
    {
        return $this->slots;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleStorage|ConfigurableBundlesRestApi
     *
     * @param \Generated\Shared\Transfer\ConfigurableBundleTemplateSlotStorageTransfer $slot
     *
     * @return $this
     */
    public function addSlot(ConfigurableBundleTemplateSlotStorageTransfer $slot)
    {
        $this->slots[] = $slot;
        $this->modifiedProperties[self::SLOTS] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleStorage|ConfigurableBundlesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSlots()
    {
        $this->assertCollectionPropertyIsSet(self::SLOTS);

        return $this;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleStorage|ConfigurableBundlesRestApi
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
     * @module ConfigurableBundlePage|ConfigurableBundleStorage|ConfigurableBundlesRestApi
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleStorage|ConfigurableBundlesRestApi
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
     * @module ConfigurableBundlePage|ConfigurableBundleStorage|ConfigurableBundlesRestApi
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
     * @module ConfigurableBundlePage|ConfigurableBundleStorage|ConfigurableBundlesRestApi
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
     * @module ConfigurableBundlePage|ConfigurableBundleStorage|ConfigurableBundlesRestApi
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
     * @module ConfigurableBundlePage|ConfigurableBundleStorage|ConfigurableBundlesRestApi
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleStorage|ConfigurableBundlesRestApi
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
     * @module ConfigurableBundlePage|ConfigurableBundleStorage|ConfigurableBundlesRestApi
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
     * @module ConfigurableBundlePage|ConfigurableBundleStorage|ConfigurableBundlesRestApi
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
     * @module ConfigurableBundlePage|ConfigurableBundleStorage
     *
     * @param int|null $idConfigurableBundleTemplate
     *
     * @return $this
     */
    public function setIdConfigurableBundleTemplate($idConfigurableBundleTemplate)
    {
        $this->idConfigurableBundleTemplate = $idConfigurableBundleTemplate;
        $this->modifiedProperties[self::ID_CONFIGURABLE_BUNDLE_TEMPLATE] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleStorage
     *
     * @return int|null
     */
    public function getIdConfigurableBundleTemplate()
    {
        return $this->idConfigurableBundleTemplate;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleStorage
     *
     * @param int|null $idConfigurableBundleTemplate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdConfigurableBundleTemplateOrFail($idConfigurableBundleTemplate)
    {
        if ($idConfigurableBundleTemplate === null) {
            $this->throwNullValueException(static::ID_CONFIGURABLE_BUNDLE_TEMPLATE);
        }

        return $this->setIdConfigurableBundleTemplate($idConfigurableBundleTemplate);
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdConfigurableBundleTemplateOrFail()
    {
        if ($this->idConfigurableBundleTemplate === null) {
            $this->throwNullValueException(static::ID_CONFIGURABLE_BUNDLE_TEMPLATE);
        }

        return $this->idConfigurableBundleTemplate;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdConfigurableBundleTemplate()
    {
        $this->assertPropertyIsSet(self::ID_CONFIGURABLE_BUNDLE_TEMPLATE);

        return $this;
    }

    /**
     * @module ConfigurableBundleStorage|ConfigurableBundlesRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ProductImageSetStorageTransfer[] $imageSets
     *
     * @return $this
     */
    public function setImageSets(ArrayObject $imageSets)
    {
        $this->imageSets = $imageSets;
        $this->modifiedProperties[self::IMAGE_SETS] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundleStorage|ConfigurableBundlesRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ProductImageSetStorageTransfer[]
     */
    public function getImageSets()
    {
        return $this->imageSets;
    }

    /**
     * @module ConfigurableBundleStorage|ConfigurableBundlesRestApi
     *
     * @param \Generated\Shared\Transfer\ProductImageSetStorageTransfer $imageSet
     *
     * @return $this
     */
    public function addImageSet(ProductImageSetStorageTransfer $imageSet)
    {
        $this->imageSets[] = $imageSet;
        $this->modifiedProperties[self::IMAGE_SETS] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundleStorage|ConfigurableBundlesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireImageSets()
    {
        $this->assertCollectionPropertyIsSet(self::IMAGE_SETS);

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
                case 'name':
                case 'uuid':
                case 'idConfigurableBundleTemplate':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'slots':
                case 'imageSets':
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
                case 'name':
                case 'uuid':
                case 'idConfigurableBundleTemplate':
                    $values[$arrayKey] = $value;

                    break;
                case 'slots':
                case 'imageSets':
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
                case 'name':
                case 'uuid':
                case 'idConfigurableBundleTemplate':
                    $values[$arrayKey] = $value;

                    break;
                case 'slots':
                case 'imageSets':
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
        $this->slots = $this->slots ?: new ArrayObject();
        $this->imageSets = $this->imageSets ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'name' => $this->name,
            'uuid' => $this->uuid,
            'idConfigurableBundleTemplate' => $this->idConfigurableBundleTemplate,
            'slots' => $this->slots,
            'imageSets' => $this->imageSets,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name,
            'uuid' => $this->uuid,
            'id_configurable_bundle_template' => $this->idConfigurableBundleTemplate,
            'slots' => $this->slots,
            'image_sets' => $this->imageSets,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'id_configurable_bundle_template' => $this->idConfigurableBundleTemplate instanceof AbstractTransfer ? $this->idConfigurableBundleTemplate->toArray(true, false) : $this->idConfigurableBundleTemplate,
            'slots' => $this->slots instanceof AbstractTransfer ? $this->slots->toArray(true, false) : $this->addValuesToCollection($this->slots, true, false),
            'image_sets' => $this->imageSets instanceof AbstractTransfer ? $this->imageSets->toArray(true, false) : $this->addValuesToCollection($this->imageSets, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'idConfigurableBundleTemplate' => $this->idConfigurableBundleTemplate instanceof AbstractTransfer ? $this->idConfigurableBundleTemplate->toArray(true, true) : $this->idConfigurableBundleTemplate,
            'slots' => $this->slots instanceof AbstractTransfer ? $this->slots->toArray(true, true) : $this->addValuesToCollection($this->slots, true, true),
            'imageSets' => $this->imageSets instanceof AbstractTransfer ? $this->imageSets->toArray(true, true) : $this->addValuesToCollection($this->imageSets, true, true),
        ];
    }
}
