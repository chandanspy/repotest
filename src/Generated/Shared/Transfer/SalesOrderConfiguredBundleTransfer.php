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
class SalesOrderConfiguredBundleTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const QUANTITY = 'quantity';

    /**
     * @var string
     */
    public const SALES_ORDER_CONFIGURED_BUNDLE_ITEMS = 'salesOrderConfiguredBundleItems';

    /**
     * @var string
     */
    public const ID_SALES_ORDER_CONFIGURED_BUNDLE = 'idSalesOrderConfiguredBundle';

    /**
     * @var string
     */
    public const NOTE = 'note';

    /**
     * @var string
     */
    public const TRANSLATIONS = 'translations';

    /**
     * @var string
     */
    public const CONFIGURABLE_BUNDLE_TEMPLATE_UUID = 'configurableBundleTemplateUuid';

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var int|null
     */
    protected $quantity;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SalesOrderConfiguredBundleItemTransfer[]
     */
    protected $salesOrderConfiguredBundleItems;

    /**
     * @var int|null
     */
    protected $idSalesOrderConfiguredBundle;

    /**
     * @var string|null
     */
    protected $note;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SalesOrderConfiguredBundleTranslationTransfer[]
     */
    protected $translations;

    /**
     * @var string|null
     */
    protected $configurableBundleTemplateUuid;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'name' => 'name',
        'Name' => 'name',
        'quantity' => 'quantity',
        'Quantity' => 'quantity',
        'sales_order_configured_bundle_items' => 'salesOrderConfiguredBundleItems',
        'salesOrderConfiguredBundleItems' => 'salesOrderConfiguredBundleItems',
        'SalesOrderConfiguredBundleItems' => 'salesOrderConfiguredBundleItems',
        'id_sales_order_configured_bundle' => 'idSalesOrderConfiguredBundle',
        'idSalesOrderConfiguredBundle' => 'idSalesOrderConfiguredBundle',
        'IdSalesOrderConfiguredBundle' => 'idSalesOrderConfiguredBundle',
        'note' => 'note',
        'Note' => 'note',
        'translations' => 'translations',
        'Translations' => 'translations',
        'configurable_bundle_template_uuid' => 'configurableBundleTemplateUuid',
        'configurableBundleTemplateUuid' => 'configurableBundleTemplateUuid',
        'ConfigurableBundleTemplateUuid' => 'configurableBundleTemplateUuid',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::QUANTITY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'quantity',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SALES_ORDER_CONFIGURED_BUNDLE_ITEMS => [
            'type' => 'Generated\Shared\Transfer\SalesOrderConfiguredBundleItemTransfer',
            'type_shim' => null,
            'name_underscore' => 'sales_order_configured_bundle_items',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_SALES_ORDER_CONFIGURED_BUNDLE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_sales_order_configured_bundle',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NOTE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'note',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TRANSLATIONS => [
            'type' => 'Generated\Shared\Transfer\SalesOrderConfiguredBundleTranslationTransfer',
            'type_shim' => null,
            'name_underscore' => 'translations',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONFIGURABLE_BUNDLE_TEMPLATE_UUID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'configurable_bundle_template_uuid',
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
     * @module SalesConfigurableBundleWidget|SalesConfigurableBundle|Sales
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
     * @module SalesConfigurableBundleWidget|SalesConfigurableBundle|Sales
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module SalesConfigurableBundleWidget|SalesConfigurableBundle|Sales
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
     * @module SalesConfigurableBundleWidget|SalesConfigurableBundle|Sales
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
     * @module SalesConfigurableBundleWidget|SalesConfigurableBundle|Sales
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
     * @module SalesConfigurableBundleWidget|SalesConfigurableBundle
     *
     * @param int|null $quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        $this->modifiedProperties[self::QUANTITY] = true;

        return $this;
    }

    /**
     * @module SalesConfigurableBundleWidget|SalesConfigurableBundle
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @module SalesConfigurableBundleWidget|SalesConfigurableBundle
     *
     * @param int|null $quantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuantityOrFail($quantity)
    {
        if ($quantity === null) {
            $this->throwNullValueException(static::QUANTITY);
        }

        return $this->setQuantity($quantity);
    }

    /**
     * @module SalesConfigurableBundleWidget|SalesConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getQuantityOrFail()
    {
        if ($this->quantity === null) {
            $this->throwNullValueException(static::QUANTITY);
        }

        return $this->quantity;
    }

    /**
     * @module SalesConfigurableBundleWidget|SalesConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuantity()
    {
        $this->assertPropertyIsSet(self::QUANTITY);

        return $this;
    }

    /**
     * @module SalesConfigurableBundleWidget|SalesConfigurableBundle
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SalesOrderConfiguredBundleItemTransfer[] $salesOrderConfiguredBundleItems
     *
     * @return $this
     */
    public function setSalesOrderConfiguredBundleItems(ArrayObject $salesOrderConfiguredBundleItems)
    {
        $this->salesOrderConfiguredBundleItems = $salesOrderConfiguredBundleItems;
        $this->modifiedProperties[self::SALES_ORDER_CONFIGURED_BUNDLE_ITEMS] = true;

        return $this;
    }

    /**
     * @module SalesConfigurableBundleWidget|SalesConfigurableBundle
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SalesOrderConfiguredBundleItemTransfer[]
     */
    public function getSalesOrderConfiguredBundleItems()
    {
        return $this->salesOrderConfiguredBundleItems;
    }

    /**
     * @module SalesConfigurableBundleWidget|SalesConfigurableBundle
     *
     * @param \Generated\Shared\Transfer\SalesOrderConfiguredBundleItemTransfer $salesOrderConfiguredBundleItem
     *
     * @return $this
     */
    public function addSalesOrderConfiguredBundleItem(SalesOrderConfiguredBundleItemTransfer $salesOrderConfiguredBundleItem)
    {
        $this->salesOrderConfiguredBundleItems[] = $salesOrderConfiguredBundleItem;
        $this->modifiedProperties[self::SALES_ORDER_CONFIGURED_BUNDLE_ITEMS] = true;

        return $this;
    }

    /**
     * @module SalesConfigurableBundleWidget|SalesConfigurableBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSalesOrderConfiguredBundleItems()
    {
        $this->assertCollectionPropertyIsSet(self::SALES_ORDER_CONFIGURED_BUNDLE_ITEMS);

        return $this;
    }

    /**
     * @module SalesConfigurableBundleWidget|SalesConfigurableBundle|Sales
     *
     * @param int|null $idSalesOrderConfiguredBundle
     *
     * @return $this
     */
    public function setIdSalesOrderConfiguredBundle($idSalesOrderConfiguredBundle)
    {
        $this->idSalesOrderConfiguredBundle = $idSalesOrderConfiguredBundle;
        $this->modifiedProperties[self::ID_SALES_ORDER_CONFIGURED_BUNDLE] = true;

        return $this;
    }

    /**
     * @module SalesConfigurableBundleWidget|SalesConfigurableBundle|Sales
     *
     * @return int|null
     */
    public function getIdSalesOrderConfiguredBundle()
    {
        return $this->idSalesOrderConfiguredBundle;
    }

    /**
     * @module SalesConfigurableBundleWidget|SalesConfigurableBundle|Sales
     *
     * @param int|null $idSalesOrderConfiguredBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesOrderConfiguredBundleOrFail($idSalesOrderConfiguredBundle)
    {
        if ($idSalesOrderConfiguredBundle === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_CONFIGURED_BUNDLE);
        }

        return $this->setIdSalesOrderConfiguredBundle($idSalesOrderConfiguredBundle);
    }

    /**
     * @module SalesConfigurableBundleWidget|SalesConfigurableBundle|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdSalesOrderConfiguredBundleOrFail()
    {
        if ($this->idSalesOrderConfiguredBundle === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_CONFIGURED_BUNDLE);
        }

        return $this->idSalesOrderConfiguredBundle;
    }

    /**
     * @module SalesConfigurableBundleWidget|SalesConfigurableBundle|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesOrderConfiguredBundle()
    {
        $this->assertPropertyIsSet(self::ID_SALES_ORDER_CONFIGURED_BUNDLE);

        return $this;
    }

    /**
     * @module ConfigurableBundleNote|Sales
     *
     * @param string|null $note
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->note = $note;
        $this->modifiedProperties[self::NOTE] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundleNote|Sales
     *
     * @return string|null
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @module ConfigurableBundleNote|Sales
     *
     * @param string|null $note
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNoteOrFail($note)
    {
        if ($note === null) {
            $this->throwNullValueException(static::NOTE);
        }

        return $this->setNote($note);
    }

    /**
     * @module ConfigurableBundleNote|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNoteOrFail()
    {
        if ($this->note === null) {
            $this->throwNullValueException(static::NOTE);
        }

        return $this->note;
    }

    /**
     * @module ConfigurableBundleNote|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNote()
    {
        $this->assertPropertyIsSet(self::NOTE);

        return $this;
    }

    /**
     * @module ConfigurableBundlesRestApi|SalesConfigurableBundle|Sales
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SalesOrderConfiguredBundleTranslationTransfer[] $translations
     *
     * @return $this
     */
    public function setTranslations(ArrayObject $translations)
    {
        $this->translations = $translations;
        $this->modifiedProperties[self::TRANSLATIONS] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlesRestApi|SalesConfigurableBundle|Sales
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SalesOrderConfiguredBundleTranslationTransfer[]
     */
    public function getTranslations()
    {
        return $this->translations;
    }

    /**
     * @module ConfigurableBundlesRestApi|SalesConfigurableBundle|Sales
     *
     * @param \Generated\Shared\Transfer\SalesOrderConfiguredBundleTranslationTransfer $translation
     *
     * @return $this
     */
    public function addTranslation(SalesOrderConfiguredBundleTranslationTransfer $translation)
    {
        $this->translations[] = $translation;
        $this->modifiedProperties[self::TRANSLATIONS] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlesRestApi|SalesConfigurableBundle|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTranslations()
    {
        $this->assertCollectionPropertyIsSet(self::TRANSLATIONS);

        return $this;
    }

    /**
     * @module SalesConfigurableBundle|Sales
     *
     * @param string|null $configurableBundleTemplateUuid
     *
     * @return $this
     */
    public function setConfigurableBundleTemplateUuid($configurableBundleTemplateUuid)
    {
        $this->configurableBundleTemplateUuid = $configurableBundleTemplateUuid;
        $this->modifiedProperties[self::CONFIGURABLE_BUNDLE_TEMPLATE_UUID] = true;

        return $this;
    }

    /**
     * @module SalesConfigurableBundle|Sales
     *
     * @return string|null
     */
    public function getConfigurableBundleTemplateUuid()
    {
        return $this->configurableBundleTemplateUuid;
    }

    /**
     * @module SalesConfigurableBundle|Sales
     *
     * @param string|null $configurableBundleTemplateUuid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setConfigurableBundleTemplateUuidOrFail($configurableBundleTemplateUuid)
    {
        if ($configurableBundleTemplateUuid === null) {
            $this->throwNullValueException(static::CONFIGURABLE_BUNDLE_TEMPLATE_UUID);
        }

        return $this->setConfigurableBundleTemplateUuid($configurableBundleTemplateUuid);
    }

    /**
     * @module SalesConfigurableBundle|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getConfigurableBundleTemplateUuidOrFail()
    {
        if ($this->configurableBundleTemplateUuid === null) {
            $this->throwNullValueException(static::CONFIGURABLE_BUNDLE_TEMPLATE_UUID);
        }

        return $this->configurableBundleTemplateUuid;
    }

    /**
     * @module SalesConfigurableBundle|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConfigurableBundleTemplateUuid()
    {
        $this->assertPropertyIsSet(self::CONFIGURABLE_BUNDLE_TEMPLATE_UUID);

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
                case 'quantity':
                case 'idSalesOrderConfiguredBundle':
                case 'note':
                case 'configurableBundleTemplateUuid':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'salesOrderConfiguredBundleItems':
                case 'translations':
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
                case 'quantity':
                case 'idSalesOrderConfiguredBundle':
                case 'note':
                case 'configurableBundleTemplateUuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'salesOrderConfiguredBundleItems':
                case 'translations':
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
                case 'quantity':
                case 'idSalesOrderConfiguredBundle':
                case 'note':
                case 'configurableBundleTemplateUuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'salesOrderConfiguredBundleItems':
                case 'translations':
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
        $this->salesOrderConfiguredBundleItems = $this->salesOrderConfiguredBundleItems ?: new ArrayObject();
        $this->translations = $this->translations ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'name' => $this->name,
            'quantity' => $this->quantity,
            'idSalesOrderConfiguredBundle' => $this->idSalesOrderConfiguredBundle,
            'note' => $this->note,
            'configurableBundleTemplateUuid' => $this->configurableBundleTemplateUuid,
            'salesOrderConfiguredBundleItems' => $this->salesOrderConfiguredBundleItems,
            'translations' => $this->translations,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name,
            'quantity' => $this->quantity,
            'id_sales_order_configured_bundle' => $this->idSalesOrderConfiguredBundle,
            'note' => $this->note,
            'configurable_bundle_template_uuid' => $this->configurableBundleTemplateUuid,
            'sales_order_configured_bundle_items' => $this->salesOrderConfiguredBundleItems,
            'translations' => $this->translations,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, false) : $this->quantity,
            'id_sales_order_configured_bundle' => $this->idSalesOrderConfiguredBundle instanceof AbstractTransfer ? $this->idSalesOrderConfiguredBundle->toArray(true, false) : $this->idSalesOrderConfiguredBundle,
            'note' => $this->note instanceof AbstractTransfer ? $this->note->toArray(true, false) : $this->note,
            'configurable_bundle_template_uuid' => $this->configurableBundleTemplateUuid instanceof AbstractTransfer ? $this->configurableBundleTemplateUuid->toArray(true, false) : $this->configurableBundleTemplateUuid,
            'sales_order_configured_bundle_items' => $this->salesOrderConfiguredBundleItems instanceof AbstractTransfer ? $this->salesOrderConfiguredBundleItems->toArray(true, false) : $this->addValuesToCollection($this->salesOrderConfiguredBundleItems, true, false),
            'translations' => $this->translations instanceof AbstractTransfer ? $this->translations->toArray(true, false) : $this->addValuesToCollection($this->translations, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, true) : $this->quantity,
            'idSalesOrderConfiguredBundle' => $this->idSalesOrderConfiguredBundle instanceof AbstractTransfer ? $this->idSalesOrderConfiguredBundle->toArray(true, true) : $this->idSalesOrderConfiguredBundle,
            'note' => $this->note instanceof AbstractTransfer ? $this->note->toArray(true, true) : $this->note,
            'configurableBundleTemplateUuid' => $this->configurableBundleTemplateUuid instanceof AbstractTransfer ? $this->configurableBundleTemplateUuid->toArray(true, true) : $this->configurableBundleTemplateUuid,
            'salesOrderConfiguredBundleItems' => $this->salesOrderConfiguredBundleItems instanceof AbstractTransfer ? $this->salesOrderConfiguredBundleItems->toArray(true, true) : $this->addValuesToCollection($this->salesOrderConfiguredBundleItems, true, true),
            'translations' => $this->translations instanceof AbstractTransfer ? $this->translations->toArray(true, true) : $this->addValuesToCollection($this->translations, true, true),
        ];
    }
}
