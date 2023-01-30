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
class SpySalesOrderConfiguredBundleEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_SALES_ORDER_CONFIGURED_BUNDLE = 'idSalesOrderConfiguredBundle';

    /**
     * @var string
     */
    public const CONFIGURABLE_BUNDLE_TEMPLATE_UUID = 'configurableBundleTemplateUuid';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const NOTE = 'note';

    /**
     * @var string
     */
    public const QUANTITY = 'quantity';

    /**
     * @var string
     */
    public const SPY_SALES_ORDER_CONFIGURED_BUNDLE_ITEMS = 'spySalesOrderConfiguredBundleItems';

    /**
     * @var integer|null
     */
    protected $idSalesOrderConfiguredBundle;

    /**
     * @var string|null
     */
    protected $configurableBundleTemplateUuid;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $note;

    /**
     * @var integer|null
     */
    protected $quantity;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderConfiguredBundleItemEntityTransfer[]
     */
    protected $spySalesOrderConfiguredBundleItems;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_sales_order_configured_bundle' => 'idSalesOrderConfiguredBundle',
        'idSalesOrderConfiguredBundle' => 'idSalesOrderConfiguredBundle',
        'IdSalesOrderConfiguredBundle' => 'idSalesOrderConfiguredBundle',
        'configurable_bundle_template_uuid' => 'configurableBundleTemplateUuid',
        'configurableBundleTemplateUuid' => 'configurableBundleTemplateUuid',
        'ConfigurableBundleTemplateUuid' => 'configurableBundleTemplateUuid',
        'name' => 'name',
        'Name' => 'name',
        'note' => 'note',
        'Note' => 'note',
        'quantity' => 'quantity',
        'Quantity' => 'quantity',
        'spy_sales_order_configured_bundle_items' => 'spySalesOrderConfiguredBundleItems',
        'spySalesOrderConfiguredBundleItems' => 'spySalesOrderConfiguredBundleItems',
        'SpySalesOrderConfiguredBundleItems' => 'spySalesOrderConfiguredBundleItems',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SALES_ORDER_CONFIGURED_BUNDLE => [
            'type' => 'integer',
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
        self::QUANTITY => [
            'type' => 'integer',
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
        self::SPY_SALES_ORDER_CONFIGURED_BUNDLE_ITEMS => [
            'type' => 'Generated\Shared\Transfer\SpySalesOrderConfiguredBundleItemEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_sales_order_configured_bundle_items',
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
    public static $entityNamespace = 'Orm\Zed\SalesConfigurableBundle\Persistence\SpySalesOrderConfiguredBundle';


    /**
     * @module 
     *
     * @param integer|null $idSalesOrderConfiguredBundle
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdSalesOrderConfiguredBundle()
    {
        return $this->idSalesOrderConfiguredBundle;
    }

    /**
     * @module 
     *
     * @param integer|null $idSalesOrderConfiguredBundle
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdSalesOrderConfiguredBundleOrFail()
    {
        if ($this->idSalesOrderConfiguredBundle === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_CONFIGURED_BUNDLE);
        }

        return $this->idSalesOrderConfiguredBundle;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getConfigurableBundleTemplateUuid()
    {
        return $this->configurableBundleTemplateUuid;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param integer|null $quantity
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
     * @module 
     *
     * @return integer|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @module 
     *
     * @param integer|null $quantity
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getQuantityOrFail()
    {
        if ($this->quantity === null) {
            $this->throwNullValueException(static::QUANTITY);
        }

        return $this->quantity;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderConfiguredBundleItemEntityTransfer[] $spySalesOrderConfiguredBundleItems
     *
     * @return $this
     */
    public function setSpySalesOrderConfiguredBundleItems(ArrayObject $spySalesOrderConfiguredBundleItems)
    {
        $this->spySalesOrderConfiguredBundleItems = $spySalesOrderConfiguredBundleItems;
        $this->modifiedProperties[self::SPY_SALES_ORDER_CONFIGURED_BUNDLE_ITEMS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderConfiguredBundleItemEntityTransfer[]
     */
    public function getSpySalesOrderConfiguredBundleItems()
    {
        return $this->spySalesOrderConfiguredBundleItems;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderConfiguredBundleItemEntityTransfer $spySalesOrderConfiguredBundleItems
     *
     * @return $this
     */
    public function addSpySalesOrderConfiguredBundleItems(SpySalesOrderConfiguredBundleItemEntityTransfer $spySalesOrderConfiguredBundleItems)
    {
        $this->spySalesOrderConfiguredBundleItems[] = $spySalesOrderConfiguredBundleItems;
        $this->modifiedProperties[self::SPY_SALES_ORDER_CONFIGURED_BUNDLE_ITEMS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpySalesOrderConfiguredBundleItems()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SALES_ORDER_CONFIGURED_BUNDLE_ITEMS);

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
                case 'idSalesOrderConfiguredBundle':
                case 'configurableBundleTemplateUuid':
                case 'name':
                case 'note':
                case 'quantity':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spySalesOrderConfiguredBundleItems':
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
                case 'idSalesOrderConfiguredBundle':
                case 'configurableBundleTemplateUuid':
                case 'name':
                case 'note':
                case 'quantity':
                    $values[$arrayKey] = $value;

                    break;
                case 'spySalesOrderConfiguredBundleItems':
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
                case 'idSalesOrderConfiguredBundle':
                case 'configurableBundleTemplateUuid':
                case 'name':
                case 'note':
                case 'quantity':
                    $values[$arrayKey] = $value;

                    break;
                case 'spySalesOrderConfiguredBundleItems':
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
        $this->spySalesOrderConfiguredBundleItems = $this->spySalesOrderConfiguredBundleItems ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idSalesOrderConfiguredBundle' => $this->idSalesOrderConfiguredBundle,
            'configurableBundleTemplateUuid' => $this->configurableBundleTemplateUuid,
            'name' => $this->name,
            'note' => $this->note,
            'quantity' => $this->quantity,
            'spySalesOrderConfiguredBundleItems' => $this->spySalesOrderConfiguredBundleItems,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_order_configured_bundle' => $this->idSalesOrderConfiguredBundle,
            'configurable_bundle_template_uuid' => $this->configurableBundleTemplateUuid,
            'name' => $this->name,
            'note' => $this->note,
            'quantity' => $this->quantity,
            'spy_sales_order_configured_bundle_items' => $this->spySalesOrderConfiguredBundleItems,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_order_configured_bundle' => $this->idSalesOrderConfiguredBundle instanceof AbstractTransfer ? $this->idSalesOrderConfiguredBundle->toArray(true, false) : $this->idSalesOrderConfiguredBundle,
            'configurable_bundle_template_uuid' => $this->configurableBundleTemplateUuid instanceof AbstractTransfer ? $this->configurableBundleTemplateUuid->toArray(true, false) : $this->configurableBundleTemplateUuid,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'note' => $this->note instanceof AbstractTransfer ? $this->note->toArray(true, false) : $this->note,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, false) : $this->quantity,
            'spy_sales_order_configured_bundle_items' => $this->spySalesOrderConfiguredBundleItems instanceof AbstractTransfer ? $this->spySalesOrderConfiguredBundleItems->toArray(true, false) : $this->addValuesToCollection($this->spySalesOrderConfiguredBundleItems, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idSalesOrderConfiguredBundle' => $this->idSalesOrderConfiguredBundle instanceof AbstractTransfer ? $this->idSalesOrderConfiguredBundle->toArray(true, true) : $this->idSalesOrderConfiguredBundle,
            'configurableBundleTemplateUuid' => $this->configurableBundleTemplateUuid instanceof AbstractTransfer ? $this->configurableBundleTemplateUuid->toArray(true, true) : $this->configurableBundleTemplateUuid,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'note' => $this->note instanceof AbstractTransfer ? $this->note->toArray(true, true) : $this->note,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, true) : $this->quantity,
            'spySalesOrderConfiguredBundleItems' => $this->spySalesOrderConfiguredBundleItems instanceof AbstractTransfer ? $this->spySalesOrderConfiguredBundleItems->toArray(true, true) : $this->addValuesToCollection($this->spySalesOrderConfiguredBundleItems, true, true),
        ];
    }
}
