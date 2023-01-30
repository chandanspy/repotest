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
class ConfiguratorStateTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SLOT_STATE_FORMS_DATA = 'slotStateFormsData';

    /**
     * @var string
     */
    public const CONFIGURABLE_BUNDLE_TEMPLATE_STORAGE = 'configurableBundleTemplateStorage';

    /**
     * @var string
     */
    public const PRODUCTS = 'products';

    /**
     * @var string
     */
    public const IS_STATE_MODIFIED = 'isStateModified';

    /**
     * @var string
     */
    public const MESSAGES = 'messages';

    /**
     * @var array
     */
    protected $slotStateFormsData = [];

    /**
     * @var \Generated\Shared\Transfer\ConfigurableBundleTemplateStorageTransfer|null
     */
    protected $configurableBundleTemplateStorage;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ProductViewTransfer[]
     */
    protected $products;

    /**
     * @var bool|null
     */
    protected $isStateModified;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\MessageTransfer[]
     */
    protected $messages;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'slot_state_forms_data' => 'slotStateFormsData',
        'slotStateFormsData' => 'slotStateFormsData',
        'SlotStateFormsData' => 'slotStateFormsData',
        'configurable_bundle_template_storage' => 'configurableBundleTemplateStorage',
        'configurableBundleTemplateStorage' => 'configurableBundleTemplateStorage',
        'ConfigurableBundleTemplateStorage' => 'configurableBundleTemplateStorage',
        'products' => 'products',
        'Products' => 'products',
        'is_state_modified' => 'isStateModified',
        'isStateModified' => 'isStateModified',
        'IsStateModified' => 'isStateModified',
        'messages' => 'messages',
        'Messages' => 'messages',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::SLOT_STATE_FORMS_DATA => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'slot_state_forms_data',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONFIGURABLE_BUNDLE_TEMPLATE_STORAGE => [
            'type' => 'Generated\Shared\Transfer\ConfigurableBundleTemplateStorageTransfer',
            'type_shim' => null,
            'name_underscore' => 'configurable_bundle_template_storage',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCTS => [
            'type' => 'Generated\Shared\Transfer\ProductViewTransfer',
            'type_shim' => null,
            'name_underscore' => 'products',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_STATE_MODIFIED => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_state_modified',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MESSAGES => [
            'type' => 'Generated\Shared\Transfer\MessageTransfer',
            'type_shim' => null,
            'name_underscore' => 'messages',
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
     * @module ConfigurableBundlePage
     *
     * @param array|null $slotStateFormsData
     *
     * @return $this
     */
    public function setSlotStateFormsData(array $slotStateFormsData = null)
    {
        if ($slotStateFormsData === null) {
            $slotStateFormsData = [];
        }

        $this->slotStateFormsData = $slotStateFormsData;
        $this->modifiedProperties[self::SLOT_STATE_FORMS_DATA] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlePage
     *
     * @return array
     */
    public function getSlotStateFormsData()
    {
        return $this->slotStateFormsData;
    }

    /**
     * @module ConfigurableBundlePage
     *
     * @param mixed $slotStateFormsData
     *
     * @return $this
     */
    public function addSlotStateFormsData($slotStateFormsData)
    {
        $this->slotStateFormsData[] = $slotStateFormsData;
        $this->modifiedProperties[self::SLOT_STATE_FORMS_DATA] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlePage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSlotStateFormsData()
    {
        $this->assertPropertyIsSet(self::SLOT_STATE_FORMS_DATA);

        return $this;
    }

    /**
     * @module ConfigurableBundlePage
     *
     * @param \Generated\Shared\Transfer\ConfigurableBundleTemplateStorageTransfer|null $configurableBundleTemplateStorage
     *
     * @return $this
     */
    public function setConfigurableBundleTemplateStorage(ConfigurableBundleTemplateStorageTransfer $configurableBundleTemplateStorage = null)
    {
        $this->configurableBundleTemplateStorage = $configurableBundleTemplateStorage;
        $this->modifiedProperties[self::CONFIGURABLE_BUNDLE_TEMPLATE_STORAGE] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlePage
     *
     * @return \Generated\Shared\Transfer\ConfigurableBundleTemplateStorageTransfer|null
     */
    public function getConfigurableBundleTemplateStorage()
    {
        return $this->configurableBundleTemplateStorage;
    }

    /**
     * @module ConfigurableBundlePage
     *
     * @param \Generated\Shared\Transfer\ConfigurableBundleTemplateStorageTransfer $configurableBundleTemplateStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setConfigurableBundleTemplateStorageOrFail(ConfigurableBundleTemplateStorageTransfer $configurableBundleTemplateStorage)
    {
        return $this->setConfigurableBundleTemplateStorage($configurableBundleTemplateStorage);
    }

    /**
     * @module ConfigurableBundlePage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ConfigurableBundleTemplateStorageTransfer
     */
    public function getConfigurableBundleTemplateStorageOrFail()
    {
        if ($this->configurableBundleTemplateStorage === null) {
            $this->throwNullValueException(static::CONFIGURABLE_BUNDLE_TEMPLATE_STORAGE);
        }

        return $this->configurableBundleTemplateStorage;
    }

    /**
     * @module ConfigurableBundlePage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConfigurableBundleTemplateStorage()
    {
        $this->assertPropertyIsSet(self::CONFIGURABLE_BUNDLE_TEMPLATE_STORAGE);

        return $this;
    }

    /**
     * @module ConfigurableBundlePage
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ProductViewTransfer[] $products
     *
     * @return $this
     */
    public function setProducts(ArrayObject $products)
    {
        $this->products = $products;
        $this->modifiedProperties[self::PRODUCTS] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlePage
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ProductViewTransfer[]
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @module ConfigurableBundlePage
     *
     * @param \Generated\Shared\Transfer\ProductViewTransfer $product
     *
     * @return $this
     */
    public function addProduct(ProductViewTransfer $product)
    {
        $this->products[] = $product;
        $this->modifiedProperties[self::PRODUCTS] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlePage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProducts()
    {
        $this->assertCollectionPropertyIsSet(self::PRODUCTS);

        return $this;
    }

    /**
     * @module ConfigurableBundlePage
     *
     * @param bool|null $isStateModified
     *
     * @return $this
     */
    public function setIsStateModified($isStateModified)
    {
        $this->isStateModified = $isStateModified;
        $this->modifiedProperties[self::IS_STATE_MODIFIED] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlePage
     *
     * @return bool|null
     */
    public function getIsStateModified()
    {
        return $this->isStateModified;
    }

    /**
     * @module ConfigurableBundlePage
     *
     * @param bool|null $isStateModified
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsStateModifiedOrFail($isStateModified)
    {
        if ($isStateModified === null) {
            $this->throwNullValueException(static::IS_STATE_MODIFIED);
        }

        return $this->setIsStateModified($isStateModified);
    }

    /**
     * @module ConfigurableBundlePage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsStateModifiedOrFail()
    {
        if ($this->isStateModified === null) {
            $this->throwNullValueException(static::IS_STATE_MODIFIED);
        }

        return $this->isStateModified;
    }

    /**
     * @module ConfigurableBundlePage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsStateModified()
    {
        $this->assertPropertyIsSet(self::IS_STATE_MODIFIED);

        return $this;
    }

    /**
     * @module ConfigurableBundlePage
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\MessageTransfer[] $messages
     *
     * @return $this
     */
    public function setMessages(ArrayObject $messages)
    {
        $this->messages = $messages;
        $this->modifiedProperties[self::MESSAGES] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlePage
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\MessageTransfer[]
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * @module ConfigurableBundlePage
     *
     * @param \Generated\Shared\Transfer\MessageTransfer $message
     *
     * @return $this
     */
    public function addMessage(MessageTransfer $message)
    {
        $this->messages[] = $message;
        $this->modifiedProperties[self::MESSAGES] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlePage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMessages()
    {
        $this->assertCollectionPropertyIsSet(self::MESSAGES);

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
                case 'slotStateFormsData':
                case 'isStateModified':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'configurableBundleTemplateStorage':
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
                case 'products':
                case 'messages':
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
                case 'slotStateFormsData':
                case 'isStateModified':
                    $values[$arrayKey] = $value;

                    break;
                case 'configurableBundleTemplateStorage':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'products':
                case 'messages':
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
                case 'slotStateFormsData':
                case 'isStateModified':
                    $values[$arrayKey] = $value;

                    break;
                case 'configurableBundleTemplateStorage':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'products':
                case 'messages':
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
        $this->products = $this->products ?: new ArrayObject();
        $this->messages = $this->messages ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'slotStateFormsData' => $this->slotStateFormsData,
            'isStateModified' => $this->isStateModified,
            'configurableBundleTemplateStorage' => $this->configurableBundleTemplateStorage,
            'products' => $this->products,
            'messages' => $this->messages,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'slot_state_forms_data' => $this->slotStateFormsData,
            'is_state_modified' => $this->isStateModified,
            'configurable_bundle_template_storage' => $this->configurableBundleTemplateStorage,
            'products' => $this->products,
            'messages' => $this->messages,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'slot_state_forms_data' => $this->slotStateFormsData instanceof AbstractTransfer ? $this->slotStateFormsData->toArray(true, false) : $this->slotStateFormsData,
            'is_state_modified' => $this->isStateModified instanceof AbstractTransfer ? $this->isStateModified->toArray(true, false) : $this->isStateModified,
            'configurable_bundle_template_storage' => $this->configurableBundleTemplateStorage instanceof AbstractTransfer ? $this->configurableBundleTemplateStorage->toArray(true, false) : $this->configurableBundleTemplateStorage,
            'products' => $this->products instanceof AbstractTransfer ? $this->products->toArray(true, false) : $this->addValuesToCollection($this->products, true, false),
            'messages' => $this->messages instanceof AbstractTransfer ? $this->messages->toArray(true, false) : $this->addValuesToCollection($this->messages, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'slotStateFormsData' => $this->slotStateFormsData instanceof AbstractTransfer ? $this->slotStateFormsData->toArray(true, true) : $this->slotStateFormsData,
            'isStateModified' => $this->isStateModified instanceof AbstractTransfer ? $this->isStateModified->toArray(true, true) : $this->isStateModified,
            'configurableBundleTemplateStorage' => $this->configurableBundleTemplateStorage instanceof AbstractTransfer ? $this->configurableBundleTemplateStorage->toArray(true, true) : $this->configurableBundleTemplateStorage,
            'products' => $this->products instanceof AbstractTransfer ? $this->products->toArray(true, true) : $this->addValuesToCollection($this->products, true, true),
            'messages' => $this->messages instanceof AbstractTransfer ? $this->messages->toArray(true, true) : $this->addValuesToCollection($this->messages, true, true),
        ];
    }
}
