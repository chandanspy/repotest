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
class SpySalesOrderConfiguredBundleItemEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_SALES_ORDER_CONFIGURED_BUNDLE_ITEM = 'idSalesOrderConfiguredBundleItem';

    /**
     * @var string
     */
    public const FK_SALES_ORDER_CONFIGURED_BUNDLE = 'fkSalesOrderConfiguredBundle';

    /**
     * @var string
     */
    public const FK_SALES_ORDER_ITEM = 'fkSalesOrderItem';

    /**
     * @var string
     */
    public const CONFIGURABLE_BUNDLE_TEMPLATE_SLOT_UUID = 'configurableBundleTemplateSlotUuid';

    /**
     * @var string
     */
    public const SPY_SALES_ORDER_CONFIGURED_BUNDLE = 'spySalesOrderConfiguredBundle';

    /**
     * @var string
     */
    public const SPY_SALES_ORDER_ITEM = 'spySalesOrderItem';

    /**
     * @var integer|null
     */
    protected $idSalesOrderConfiguredBundleItem;

    /**
     * @var integer|null
     */
    protected $fkSalesOrderConfiguredBundle;

    /**
     * @var integer|null
     */
    protected $fkSalesOrderItem;

    /**
     * @var string|null
     */
    protected $configurableBundleTemplateSlotUuid;

    /**
     * @var \Generated\Shared\Transfer\SpySalesOrderConfiguredBundleEntityTransfer|null
     */
    protected $spySalesOrderConfiguredBundle;

    /**
     * @var \Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer|null
     */
    protected $spySalesOrderItem;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_sales_order_configured_bundle_item' => 'idSalesOrderConfiguredBundleItem',
        'idSalesOrderConfiguredBundleItem' => 'idSalesOrderConfiguredBundleItem',
        'IdSalesOrderConfiguredBundleItem' => 'idSalesOrderConfiguredBundleItem',
        'fk_sales_order_configured_bundle' => 'fkSalesOrderConfiguredBundle',
        'fkSalesOrderConfiguredBundle' => 'fkSalesOrderConfiguredBundle',
        'FkSalesOrderConfiguredBundle' => 'fkSalesOrderConfiguredBundle',
        'fk_sales_order_item' => 'fkSalesOrderItem',
        'fkSalesOrderItem' => 'fkSalesOrderItem',
        'FkSalesOrderItem' => 'fkSalesOrderItem',
        'configurable_bundle_template_slot_uuid' => 'configurableBundleTemplateSlotUuid',
        'configurableBundleTemplateSlotUuid' => 'configurableBundleTemplateSlotUuid',
        'ConfigurableBundleTemplateSlotUuid' => 'configurableBundleTemplateSlotUuid',
        'spy_sales_order_configured_bundle' => 'spySalesOrderConfiguredBundle',
        'spySalesOrderConfiguredBundle' => 'spySalesOrderConfiguredBundle',
        'SpySalesOrderConfiguredBundle' => 'spySalesOrderConfiguredBundle',
        'spy_sales_order_item' => 'spySalesOrderItem',
        'spySalesOrderItem' => 'spySalesOrderItem',
        'SpySalesOrderItem' => 'spySalesOrderItem',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SALES_ORDER_CONFIGURED_BUNDLE_ITEM => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_sales_order_configured_bundle_item',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_SALES_ORDER_CONFIGURED_BUNDLE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_sales_order_configured_bundle',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_SALES_ORDER_ITEM => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_sales_order_item',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONFIGURABLE_BUNDLE_TEMPLATE_SLOT_UUID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'configurable_bundle_template_slot_uuid',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SALES_ORDER_CONFIGURED_BUNDLE => [
            'type' => 'Generated\Shared\Transfer\SpySalesOrderConfiguredBundleEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_sales_order_configured_bundle',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SALES_ORDER_ITEM => [
            'type' => 'Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_sales_order_item',
            'is_collection' => false,
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
    public static $entityNamespace = 'Orm\Zed\SalesConfigurableBundle\Persistence\SpySalesOrderConfiguredBundleItem';


    /**
     * @module 
     *
     * @param integer|null $idSalesOrderConfiguredBundleItem
     *
     * @return $this
     */
    public function setIdSalesOrderConfiguredBundleItem($idSalesOrderConfiguredBundleItem)
    {
        $this->idSalesOrderConfiguredBundleItem = $idSalesOrderConfiguredBundleItem;
        $this->modifiedProperties[self::ID_SALES_ORDER_CONFIGURED_BUNDLE_ITEM] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdSalesOrderConfiguredBundleItem()
    {
        return $this->idSalesOrderConfiguredBundleItem;
    }

    /**
     * @module 
     *
     * @param integer|null $idSalesOrderConfiguredBundleItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesOrderConfiguredBundleItemOrFail($idSalesOrderConfiguredBundleItem)
    {
        if ($idSalesOrderConfiguredBundleItem === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_CONFIGURED_BUNDLE_ITEM);
        }

        return $this->setIdSalesOrderConfiguredBundleItem($idSalesOrderConfiguredBundleItem);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdSalesOrderConfiguredBundleItemOrFail()
    {
        if ($this->idSalesOrderConfiguredBundleItem === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_CONFIGURED_BUNDLE_ITEM);
        }

        return $this->idSalesOrderConfiguredBundleItem;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesOrderConfiguredBundleItem()
    {
        $this->assertPropertyIsSet(self::ID_SALES_ORDER_CONFIGURED_BUNDLE_ITEM);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkSalesOrderConfiguredBundle
     *
     * @return $this
     */
    public function setFkSalesOrderConfiguredBundle($fkSalesOrderConfiguredBundle)
    {
        $this->fkSalesOrderConfiguredBundle = $fkSalesOrderConfiguredBundle;
        $this->modifiedProperties[self::FK_SALES_ORDER_CONFIGURED_BUNDLE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkSalesOrderConfiguredBundle()
    {
        return $this->fkSalesOrderConfiguredBundle;
    }

    /**
     * @module 
     *
     * @param integer|null $fkSalesOrderConfiguredBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkSalesOrderConfiguredBundleOrFail($fkSalesOrderConfiguredBundle)
    {
        if ($fkSalesOrderConfiguredBundle === null) {
            $this->throwNullValueException(static::FK_SALES_ORDER_CONFIGURED_BUNDLE);
        }

        return $this->setFkSalesOrderConfiguredBundle($fkSalesOrderConfiguredBundle);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkSalesOrderConfiguredBundleOrFail()
    {
        if ($this->fkSalesOrderConfiguredBundle === null) {
            $this->throwNullValueException(static::FK_SALES_ORDER_CONFIGURED_BUNDLE);
        }

        return $this->fkSalesOrderConfiguredBundle;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkSalesOrderConfiguredBundle()
    {
        $this->assertPropertyIsSet(self::FK_SALES_ORDER_CONFIGURED_BUNDLE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkSalesOrderItem
     *
     * @return $this
     */
    public function setFkSalesOrderItem($fkSalesOrderItem)
    {
        $this->fkSalesOrderItem = $fkSalesOrderItem;
        $this->modifiedProperties[self::FK_SALES_ORDER_ITEM] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkSalesOrderItem()
    {
        return $this->fkSalesOrderItem;
    }

    /**
     * @module 
     *
     * @param integer|null $fkSalesOrderItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkSalesOrderItemOrFail($fkSalesOrderItem)
    {
        if ($fkSalesOrderItem === null) {
            $this->throwNullValueException(static::FK_SALES_ORDER_ITEM);
        }

        return $this->setFkSalesOrderItem($fkSalesOrderItem);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkSalesOrderItemOrFail()
    {
        if ($this->fkSalesOrderItem === null) {
            $this->throwNullValueException(static::FK_SALES_ORDER_ITEM);
        }

        return $this->fkSalesOrderItem;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkSalesOrderItem()
    {
        $this->assertPropertyIsSet(self::FK_SALES_ORDER_ITEM);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $configurableBundleTemplateSlotUuid
     *
     * @return $this
     */
    public function setConfigurableBundleTemplateSlotUuid($configurableBundleTemplateSlotUuid)
    {
        $this->configurableBundleTemplateSlotUuid = $configurableBundleTemplateSlotUuid;
        $this->modifiedProperties[self::CONFIGURABLE_BUNDLE_TEMPLATE_SLOT_UUID] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getConfigurableBundleTemplateSlotUuid()
    {
        return $this->configurableBundleTemplateSlotUuid;
    }

    /**
     * @module 
     *
     * @param string|null $configurableBundleTemplateSlotUuid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setConfigurableBundleTemplateSlotUuidOrFail($configurableBundleTemplateSlotUuid)
    {
        if ($configurableBundleTemplateSlotUuid === null) {
            $this->throwNullValueException(static::CONFIGURABLE_BUNDLE_TEMPLATE_SLOT_UUID);
        }

        return $this->setConfigurableBundleTemplateSlotUuid($configurableBundleTemplateSlotUuid);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getConfigurableBundleTemplateSlotUuidOrFail()
    {
        if ($this->configurableBundleTemplateSlotUuid === null) {
            $this->throwNullValueException(static::CONFIGURABLE_BUNDLE_TEMPLATE_SLOT_UUID);
        }

        return $this->configurableBundleTemplateSlotUuid;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConfigurableBundleTemplateSlotUuid()
    {
        $this->assertPropertyIsSet(self::CONFIGURABLE_BUNDLE_TEMPLATE_SLOT_UUID);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderConfiguredBundleEntityTransfer|null $spySalesOrderConfiguredBundle
     *
     * @return $this
     */
    public function setSpySalesOrderConfiguredBundle(SpySalesOrderConfiguredBundleEntityTransfer $spySalesOrderConfiguredBundle = null)
    {
        $this->spySalesOrderConfiguredBundle = $spySalesOrderConfiguredBundle;
        $this->modifiedProperties[self::SPY_SALES_ORDER_CONFIGURED_BUNDLE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderConfiguredBundleEntityTransfer|null
     */
    public function getSpySalesOrderConfiguredBundle()
    {
        return $this->spySalesOrderConfiguredBundle;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderConfiguredBundleEntityTransfer $spySalesOrderConfiguredBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpySalesOrderConfiguredBundleOrFail(SpySalesOrderConfiguredBundleEntityTransfer $spySalesOrderConfiguredBundle)
    {
        return $this->setSpySalesOrderConfiguredBundle($spySalesOrderConfiguredBundle);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderConfiguredBundleEntityTransfer
     */
    public function getSpySalesOrderConfiguredBundleOrFail()
    {
        if ($this->spySalesOrderConfiguredBundle === null) {
            $this->throwNullValueException(static::SPY_SALES_ORDER_CONFIGURED_BUNDLE);
        }

        return $this->spySalesOrderConfiguredBundle;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpySalesOrderConfiguredBundle()
    {
        $this->assertPropertyIsSet(self::SPY_SALES_ORDER_CONFIGURED_BUNDLE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer|null $spySalesOrderItem
     *
     * @return $this
     */
    public function setSpySalesOrderItem(SpySalesOrderItemEntityTransfer $spySalesOrderItem = null)
    {
        $this->spySalesOrderItem = $spySalesOrderItem;
        $this->modifiedProperties[self::SPY_SALES_ORDER_ITEM] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer|null
     */
    public function getSpySalesOrderItem()
    {
        return $this->spySalesOrderItem;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer $spySalesOrderItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpySalesOrderItemOrFail(SpySalesOrderItemEntityTransfer $spySalesOrderItem)
    {
        return $this->setSpySalesOrderItem($spySalesOrderItem);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer
     */
    public function getSpySalesOrderItemOrFail()
    {
        if ($this->spySalesOrderItem === null) {
            $this->throwNullValueException(static::SPY_SALES_ORDER_ITEM);
        }

        return $this->spySalesOrderItem;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpySalesOrderItem()
    {
        $this->assertPropertyIsSet(self::SPY_SALES_ORDER_ITEM);

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
                case 'idSalesOrderConfiguredBundleItem':
                case 'fkSalesOrderConfiguredBundle':
                case 'fkSalesOrderItem':
                case 'configurableBundleTemplateSlotUuid':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spySalesOrderConfiguredBundle':
                case 'spySalesOrderItem':
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
                case 'idSalesOrderConfiguredBundleItem':
                case 'fkSalesOrderConfiguredBundle':
                case 'fkSalesOrderItem':
                case 'configurableBundleTemplateSlotUuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'spySalesOrderConfiguredBundle':
                case 'spySalesOrderItem':
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
                case 'idSalesOrderConfiguredBundleItem':
                case 'fkSalesOrderConfiguredBundle':
                case 'fkSalesOrderItem':
                case 'configurableBundleTemplateSlotUuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'spySalesOrderConfiguredBundle':
                case 'spySalesOrderItem':
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
            'idSalesOrderConfiguredBundleItem' => $this->idSalesOrderConfiguredBundleItem,
            'fkSalesOrderConfiguredBundle' => $this->fkSalesOrderConfiguredBundle,
            'fkSalesOrderItem' => $this->fkSalesOrderItem,
            'configurableBundleTemplateSlotUuid' => $this->configurableBundleTemplateSlotUuid,
            'spySalesOrderConfiguredBundle' => $this->spySalesOrderConfiguredBundle,
            'spySalesOrderItem' => $this->spySalesOrderItem,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_order_configured_bundle_item' => $this->idSalesOrderConfiguredBundleItem,
            'fk_sales_order_configured_bundle' => $this->fkSalesOrderConfiguredBundle,
            'fk_sales_order_item' => $this->fkSalesOrderItem,
            'configurable_bundle_template_slot_uuid' => $this->configurableBundleTemplateSlotUuid,
            'spy_sales_order_configured_bundle' => $this->spySalesOrderConfiguredBundle,
            'spy_sales_order_item' => $this->spySalesOrderItem,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_order_configured_bundle_item' => $this->idSalesOrderConfiguredBundleItem instanceof AbstractTransfer ? $this->idSalesOrderConfiguredBundleItem->toArray(true, false) : $this->idSalesOrderConfiguredBundleItem,
            'fk_sales_order_configured_bundle' => $this->fkSalesOrderConfiguredBundle instanceof AbstractTransfer ? $this->fkSalesOrderConfiguredBundle->toArray(true, false) : $this->fkSalesOrderConfiguredBundle,
            'fk_sales_order_item' => $this->fkSalesOrderItem instanceof AbstractTransfer ? $this->fkSalesOrderItem->toArray(true, false) : $this->fkSalesOrderItem,
            'configurable_bundle_template_slot_uuid' => $this->configurableBundleTemplateSlotUuid instanceof AbstractTransfer ? $this->configurableBundleTemplateSlotUuid->toArray(true, false) : $this->configurableBundleTemplateSlotUuid,
            'spy_sales_order_configured_bundle' => $this->spySalesOrderConfiguredBundle instanceof AbstractTransfer ? $this->spySalesOrderConfiguredBundle->toArray(true, false) : $this->spySalesOrderConfiguredBundle,
            'spy_sales_order_item' => $this->spySalesOrderItem instanceof AbstractTransfer ? $this->spySalesOrderItem->toArray(true, false) : $this->spySalesOrderItem,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idSalesOrderConfiguredBundleItem' => $this->idSalesOrderConfiguredBundleItem instanceof AbstractTransfer ? $this->idSalesOrderConfiguredBundleItem->toArray(true, true) : $this->idSalesOrderConfiguredBundleItem,
            'fkSalesOrderConfiguredBundle' => $this->fkSalesOrderConfiguredBundle instanceof AbstractTransfer ? $this->fkSalesOrderConfiguredBundle->toArray(true, true) : $this->fkSalesOrderConfiguredBundle,
            'fkSalesOrderItem' => $this->fkSalesOrderItem instanceof AbstractTransfer ? $this->fkSalesOrderItem->toArray(true, true) : $this->fkSalesOrderItem,
            'configurableBundleTemplateSlotUuid' => $this->configurableBundleTemplateSlotUuid instanceof AbstractTransfer ? $this->configurableBundleTemplateSlotUuid->toArray(true, true) : $this->configurableBundleTemplateSlotUuid,
            'spySalesOrderConfiguredBundle' => $this->spySalesOrderConfiguredBundle instanceof AbstractTransfer ? $this->spySalesOrderConfiguredBundle->toArray(true, true) : $this->spySalesOrderConfiguredBundle,
            'spySalesOrderItem' => $this->spySalesOrderItem instanceof AbstractTransfer ? $this->spySalesOrderItem->toArray(true, true) : $this->spySalesOrderItem,
        ];
    }
}
