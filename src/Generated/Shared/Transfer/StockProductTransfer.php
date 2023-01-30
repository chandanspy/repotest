<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\DecimalObject\Decimal;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class StockProductTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_STOCK_PRODUCT = 'idStockProduct';

    /**
     * @var string
     */
    public const IS_NEVER_OUT_OF_STOCK = 'isNeverOutOfStock';

    /**
     * @var string
     */
    public const QUANTITY = 'quantity';

    /**
     * @var string
     */
    public const STOCK_TYPE = 'stockType';

    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var string
     */
    public const FK_STOCK = 'fkStock';

    /**
     * @var int|null
     */
    protected $idStockProduct;

    /**
     * @var string|null
     */
    protected $isNeverOutOfStock;

    /**
     * @var \Spryker\DecimalObject\Decimal|null
     */
    protected $quantity;

    /**
     * @var string|null
     */
    protected $stockType;

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var int|null
     */
    protected $fkStock;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_stock_product' => 'idStockProduct',
        'idStockProduct' => 'idStockProduct',
        'IdStockProduct' => 'idStockProduct',
        'is_never_out_of_stock' => 'isNeverOutOfStock',
        'isNeverOutOfStock' => 'isNeverOutOfStock',
        'IsNeverOutOfStock' => 'isNeverOutOfStock',
        'quantity' => 'quantity',
        'Quantity' => 'quantity',
        'stock_type' => 'stockType',
        'stockType' => 'stockType',
        'StockType' => 'stockType',
        'sku' => 'sku',
        'Sku' => 'sku',
        'fk_stock' => 'fkStock',
        'fkStock' => 'fkStock',
        'FkStock' => 'fkStock',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_STOCK_PRODUCT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_stock_product',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_NEVER_OUT_OF_STOCK => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'is_never_out_of_stock',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::QUANTITY => [
            'type' => 'Spryker\DecimalObject\Decimal',
            'type_shim' => null,
            'name_underscore' => 'quantity',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => true,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STOCK_TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'stock_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SKU => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'sku',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_STOCK => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_stock',
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
     * @module AvailabilityGui|ProductManagement|Stock
     *
     * @param int|null $idStockProduct
     *
     * @return $this
     */
    public function setIdStockProduct($idStockProduct)
    {
        $this->idStockProduct = $idStockProduct;
        $this->modifiedProperties[self::ID_STOCK_PRODUCT] = true;

        return $this;
    }

    /**
     * @module AvailabilityGui|ProductManagement|Stock
     *
     * @return int|null
     */
    public function getIdStockProduct()
    {
        return $this->idStockProduct;
    }

    /**
     * @module AvailabilityGui|ProductManagement|Stock
     *
     * @param int|null $idStockProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdStockProductOrFail($idStockProduct)
    {
        if ($idStockProduct === null) {
            $this->throwNullValueException(static::ID_STOCK_PRODUCT);
        }

        return $this->setIdStockProduct($idStockProduct);
    }

    /**
     * @module AvailabilityGui|ProductManagement|Stock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdStockProductOrFail()
    {
        if ($this->idStockProduct === null) {
            $this->throwNullValueException(static::ID_STOCK_PRODUCT);
        }

        return $this->idStockProduct;
    }

    /**
     * @module AvailabilityGui|ProductManagement|Stock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdStockProduct()
    {
        $this->assertPropertyIsSet(self::ID_STOCK_PRODUCT);

        return $this;
    }

    /**
     * @module AvailabilityGui|ProductManagement|Stock
     *
     * @param string|null $isNeverOutOfStock
     *
     * @return $this
     */
    public function setIsNeverOutOfStock($isNeverOutOfStock)
    {
        $this->isNeverOutOfStock = $isNeverOutOfStock;
        $this->modifiedProperties[self::IS_NEVER_OUT_OF_STOCK] = true;

        return $this;
    }

    /**
     * @module AvailabilityGui|ProductManagement|Stock
     *
     * @return string|null
     */
    public function getIsNeverOutOfStock()
    {
        return $this->isNeverOutOfStock;
    }

    /**
     * @module AvailabilityGui|ProductManagement|Stock
     *
     * @param string|null $isNeverOutOfStock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsNeverOutOfStockOrFail($isNeverOutOfStock)
    {
        if ($isNeverOutOfStock === null) {
            $this->throwNullValueException(static::IS_NEVER_OUT_OF_STOCK);
        }

        return $this->setIsNeverOutOfStock($isNeverOutOfStock);
    }

    /**
     * @module AvailabilityGui|ProductManagement|Stock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIsNeverOutOfStockOrFail()
    {
        if ($this->isNeverOutOfStock === null) {
            $this->throwNullValueException(static::IS_NEVER_OUT_OF_STOCK);
        }

        return $this->isNeverOutOfStock;
    }

    /**
     * @module AvailabilityGui|ProductManagement|Stock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsNeverOutOfStock()
    {
        $this->assertPropertyIsSet(self::IS_NEVER_OUT_OF_STOCK);

        return $this;
    }

    /**
     * @module AvailabilityGui|ProductManagement|Stock
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal|null $quantity
     *
     * @return $this
     */
    public function setQuantity($quantity = null)
    {
        if ($quantity !== null && !$quantity instanceof Decimal) {
            $quantity = new Decimal($quantity);
        }

        $this->quantity = $quantity;
        $this->modifiedProperties[self::QUANTITY] = true;

        return $this;
    }

    /**
     * @module AvailabilityGui|ProductManagement|Stock
     *
     * @return \Spryker\DecimalObject\Decimal|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @module AvailabilityGui|ProductManagement|Stock
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal $quantity
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
     * @module AvailabilityGui|ProductManagement|Stock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Spryker\DecimalObject\Decimal
     */
    public function getQuantityOrFail()
    {
        if ($this->quantity === null) {
            $this->throwNullValueException(static::QUANTITY);
        }

        return $this->quantity;
    }

    /**
     * @module AvailabilityGui|ProductManagement|Stock
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
     * @module AvailabilityGui|ProductBundle|ProductManagement|Stock
     *
     * @param string|null $stockType
     *
     * @return $this
     */
    public function setStockType($stockType)
    {
        $this->stockType = $stockType;
        $this->modifiedProperties[self::STOCK_TYPE] = true;

        return $this;
    }

    /**
     * @module AvailabilityGui|ProductBundle|ProductManagement|Stock
     *
     * @return string|null
     */
    public function getStockType()
    {
        return $this->stockType;
    }

    /**
     * @module AvailabilityGui|ProductBundle|ProductManagement|Stock
     *
     * @param string|null $stockType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStockTypeOrFail($stockType)
    {
        if ($stockType === null) {
            $this->throwNullValueException(static::STOCK_TYPE);
        }

        return $this->setStockType($stockType);
    }

    /**
     * @module AvailabilityGui|ProductBundle|ProductManagement|Stock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStockTypeOrFail()
    {
        if ($this->stockType === null) {
            $this->throwNullValueException(static::STOCK_TYPE);
        }

        return $this->stockType;
    }

    /**
     * @module AvailabilityGui|ProductBundle|ProductManagement|Stock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStockType()
    {
        $this->assertPropertyIsSet(self::STOCK_TYPE);

        return $this;
    }

    /**
     * @module AvailabilityGui|Availability|ProductBundle|ProductManagement|Stock
     *
     * @param string|null $sku
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
        $this->modifiedProperties[self::SKU] = true;

        return $this;
    }

    /**
     * @module AvailabilityGui|Availability|ProductBundle|ProductManagement|Stock
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module AvailabilityGui|Availability|ProductBundle|ProductManagement|Stock
     *
     * @param string|null $sku
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSkuOrFail($sku)
    {
        if ($sku === null) {
            $this->throwNullValueException(static::SKU);
        }

        return $this->setSku($sku);
    }

    /**
     * @module AvailabilityGui|Availability|ProductBundle|ProductManagement|Stock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSkuOrFail()
    {
        if ($this->sku === null) {
            $this->throwNullValueException(static::SKU);
        }

        return $this->sku;
    }

    /**
     * @module AvailabilityGui|Availability|ProductBundle|ProductManagement|Stock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSku()
    {
        $this->assertPropertyIsSet(self::SKU);

        return $this;
    }

    /**
     * @module ProductManagement|Stock
     *
     * @param int|null $fkStock
     *
     * @return $this
     */
    public function setFkStock($fkStock)
    {
        $this->fkStock = $fkStock;
        $this->modifiedProperties[self::FK_STOCK] = true;

        return $this;
    }

    /**
     * @module ProductManagement|Stock
     *
     * @return int|null
     */
    public function getFkStock()
    {
        return $this->fkStock;
    }

    /**
     * @module ProductManagement|Stock
     *
     * @param int|null $fkStock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkStockOrFail($fkStock)
    {
        if ($fkStock === null) {
            $this->throwNullValueException(static::FK_STOCK);
        }

        return $this->setFkStock($fkStock);
    }

    /**
     * @module ProductManagement|Stock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkStockOrFail()
    {
        if ($this->fkStock === null) {
            $this->throwNullValueException(static::FK_STOCK);
        }

        return $this->fkStock;
    }

    /**
     * @module ProductManagement|Stock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkStock()
    {
        $this->assertPropertyIsSet(self::FK_STOCK);

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
                case 'idStockProduct':
                case 'isNeverOutOfStock':
                case 'stockType':
                case 'sku':
                case 'fkStock':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'quantity':
                    $this->assignValueObject($normalizedPropertyName, $value);

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
                case 'idStockProduct':
                case 'isNeverOutOfStock':
                case 'stockType':
                case 'sku':
                case 'fkStock':
                case 'quantity':
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
                case 'idStockProduct':
                case 'isNeverOutOfStock':
                case 'stockType':
                case 'sku':
                case 'fkStock':
                case 'quantity':
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
            'idStockProduct' => $this->idStockProduct,
            'isNeverOutOfStock' => $this->isNeverOutOfStock,
            'stockType' => $this->stockType,
            'sku' => $this->sku,
            'fkStock' => $this->fkStock,
            'quantity' => $this->quantity,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_stock_product' => $this->idStockProduct,
            'is_never_out_of_stock' => $this->isNeverOutOfStock,
            'stock_type' => $this->stockType,
            'sku' => $this->sku,
            'fk_stock' => $this->fkStock,
            'quantity' => $this->quantity,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_stock_product' => $this->idStockProduct instanceof AbstractTransfer ? $this->idStockProduct->toArray(true, false) : $this->idStockProduct,
            'is_never_out_of_stock' => $this->isNeverOutOfStock instanceof AbstractTransfer ? $this->isNeverOutOfStock->toArray(true, false) : $this->isNeverOutOfStock,
            'stock_type' => $this->stockType instanceof AbstractTransfer ? $this->stockType->toArray(true, false) : $this->stockType,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'fk_stock' => $this->fkStock instanceof AbstractTransfer ? $this->fkStock->toArray(true, false) : $this->fkStock,
            'quantity' => $this->quantity,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idStockProduct' => $this->idStockProduct instanceof AbstractTransfer ? $this->idStockProduct->toArray(true, true) : $this->idStockProduct,
            'isNeverOutOfStock' => $this->isNeverOutOfStock instanceof AbstractTransfer ? $this->isNeverOutOfStock->toArray(true, true) : $this->isNeverOutOfStock,
            'stockType' => $this->stockType instanceof AbstractTransfer ? $this->stockType->toArray(true, true) : $this->stockType,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'fkStock' => $this->fkStock instanceof AbstractTransfer ? $this->fkStock->toArray(true, true) : $this->fkStock,
            'quantity' => $this->quantity,
        ];
    }
}
