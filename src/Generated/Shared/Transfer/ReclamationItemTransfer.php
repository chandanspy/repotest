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
class ReclamationItemTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ORDER_ITEM = 'orderItem';

    /**
     * @var string
     */
    public const ID_SALES_RECLAMATION_ITEM = 'idSalesReclamationItem';

    /**
     * @var string
     */
    public const FK_SALES_RECLAMATION = 'fkSalesReclamation';

    /**
     * @var \Generated\Shared\Transfer\ItemTransfer|null
     */
    protected $orderItem;

    /**
     * @var int|null
     */
    protected $idSalesReclamationItem;

    /**
     * @var int|null
     */
    protected $fkSalesReclamation;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'order_item' => 'orderItem',
        'orderItem' => 'orderItem',
        'OrderItem' => 'orderItem',
        'id_sales_reclamation_item' => 'idSalesReclamationItem',
        'idSalesReclamationItem' => 'idSalesReclamationItem',
        'IdSalesReclamationItem' => 'idSalesReclamationItem',
        'fk_sales_reclamation' => 'fkSalesReclamation',
        'fkSalesReclamation' => 'fkSalesReclamation',
        'FkSalesReclamation' => 'fkSalesReclamation',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ORDER_ITEM => [
            'type' => 'Generated\Shared\Transfer\ItemTransfer',
            'type_shim' => null,
            'name_underscore' => 'order_item',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_SALES_RECLAMATION_ITEM => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_sales_reclamation_item',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_SALES_RECLAMATION => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_sales_reclamation',
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
     * @module SalesReclamationGui|SalesReclamation
     *
     * @param \Generated\Shared\Transfer\ItemTransfer|null $orderItem
     *
     * @return $this
     */
    public function setOrderItem(ItemTransfer $orderItem = null)
    {
        $this->orderItem = $orderItem;
        $this->modifiedProperties[self::ORDER_ITEM] = true;

        return $this;
    }

    /**
     * @module SalesReclamationGui|SalesReclamation
     *
     * @return \Generated\Shared\Transfer\ItemTransfer|null
     */
    public function getOrderItem()
    {
        return $this->orderItem;
    }

    /**
     * @module SalesReclamationGui|SalesReclamation
     *
     * @param \Generated\Shared\Transfer\ItemTransfer $orderItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOrderItemOrFail(ItemTransfer $orderItem)
    {
        return $this->setOrderItem($orderItem);
    }

    /**
     * @module SalesReclamationGui|SalesReclamation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ItemTransfer
     */
    public function getOrderItemOrFail()
    {
        if ($this->orderItem === null) {
            $this->throwNullValueException(static::ORDER_ITEM);
        }

        return $this->orderItem;
    }

    /**
     * @module SalesReclamationGui|SalesReclamation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOrderItem()
    {
        $this->assertPropertyIsSet(self::ORDER_ITEM);

        return $this;
    }

    /**
     * @module SalesReclamation
     *
     * @param int|null $idSalesReclamationItem
     *
     * @return $this
     */
    public function setIdSalesReclamationItem($idSalesReclamationItem)
    {
        $this->idSalesReclamationItem = $idSalesReclamationItem;
        $this->modifiedProperties[self::ID_SALES_RECLAMATION_ITEM] = true;

        return $this;
    }

    /**
     * @module SalesReclamation
     *
     * @return int|null
     */
    public function getIdSalesReclamationItem()
    {
        return $this->idSalesReclamationItem;
    }

    /**
     * @module SalesReclamation
     *
     * @param int|null $idSalesReclamationItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesReclamationItemOrFail($idSalesReclamationItem)
    {
        if ($idSalesReclamationItem === null) {
            $this->throwNullValueException(static::ID_SALES_RECLAMATION_ITEM);
        }

        return $this->setIdSalesReclamationItem($idSalesReclamationItem);
    }

    /**
     * @module SalesReclamation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdSalesReclamationItemOrFail()
    {
        if ($this->idSalesReclamationItem === null) {
            $this->throwNullValueException(static::ID_SALES_RECLAMATION_ITEM);
        }

        return $this->idSalesReclamationItem;
    }

    /**
     * @module SalesReclamation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesReclamationItem()
    {
        $this->assertPropertyIsSet(self::ID_SALES_RECLAMATION_ITEM);

        return $this;
    }

    /**
     * @module SalesReclamation
     *
     * @param int|null $fkSalesReclamation
     *
     * @return $this
     */
    public function setFkSalesReclamation($fkSalesReclamation)
    {
        $this->fkSalesReclamation = $fkSalesReclamation;
        $this->modifiedProperties[self::FK_SALES_RECLAMATION] = true;

        return $this;
    }

    /**
     * @module SalesReclamation
     *
     * @return int|null
     */
    public function getFkSalesReclamation()
    {
        return $this->fkSalesReclamation;
    }

    /**
     * @module SalesReclamation
     *
     * @param int|null $fkSalesReclamation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkSalesReclamationOrFail($fkSalesReclamation)
    {
        if ($fkSalesReclamation === null) {
            $this->throwNullValueException(static::FK_SALES_RECLAMATION);
        }

        return $this->setFkSalesReclamation($fkSalesReclamation);
    }

    /**
     * @module SalesReclamation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkSalesReclamationOrFail()
    {
        if ($this->fkSalesReclamation === null) {
            $this->throwNullValueException(static::FK_SALES_RECLAMATION);
        }

        return $this->fkSalesReclamation;
    }

    /**
     * @module SalesReclamation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkSalesReclamation()
    {
        $this->assertPropertyIsSet(self::FK_SALES_RECLAMATION);

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
                case 'idSalesReclamationItem':
                case 'fkSalesReclamation':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'orderItem':
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
                case 'idSalesReclamationItem':
                case 'fkSalesReclamation':
                    $values[$arrayKey] = $value;

                    break;
                case 'orderItem':
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
                case 'idSalesReclamationItem':
                case 'fkSalesReclamation':
                    $values[$arrayKey] = $value;

                    break;
                case 'orderItem':
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
            'idSalesReclamationItem' => $this->idSalesReclamationItem,
            'fkSalesReclamation' => $this->fkSalesReclamation,
            'orderItem' => $this->orderItem,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_reclamation_item' => $this->idSalesReclamationItem,
            'fk_sales_reclamation' => $this->fkSalesReclamation,
            'order_item' => $this->orderItem,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_reclamation_item' => $this->idSalesReclamationItem instanceof AbstractTransfer ? $this->idSalesReclamationItem->toArray(true, false) : $this->idSalesReclamationItem,
            'fk_sales_reclamation' => $this->fkSalesReclamation instanceof AbstractTransfer ? $this->fkSalesReclamation->toArray(true, false) : $this->fkSalesReclamation,
            'order_item' => $this->orderItem instanceof AbstractTransfer ? $this->orderItem->toArray(true, false) : $this->orderItem,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idSalesReclamationItem' => $this->idSalesReclamationItem instanceof AbstractTransfer ? $this->idSalesReclamationItem->toArray(true, true) : $this->idSalesReclamationItem,
            'fkSalesReclamation' => $this->fkSalesReclamation instanceof AbstractTransfer ? $this->fkSalesReclamation->toArray(true, true) : $this->fkSalesReclamation,
            'orderItem' => $this->orderItem instanceof AbstractTransfer ? $this->orderItem->toArray(true, true) : $this->orderItem,
        ];
    }
}
