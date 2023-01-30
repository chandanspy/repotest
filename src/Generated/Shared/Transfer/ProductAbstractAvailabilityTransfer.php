<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\DecimalObject\Decimal;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ProductAbstractAvailabilityTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const AVAILABILITY = 'availability';

    /**
     * @var string
     */
    public const PRODUCT_NAME = 'productName';

    /**
     * @var string
     */
    public const RESERVATION_QUANTITY = 'reservationQuantity';

    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var string
     */
    public const STOCK_QUANTITY = 'stockQuantity';

    /**
     * @var string
     */
    public const IS_NEVER_OUT_OF_STOCK = 'isNeverOutOfStock';

    /**
     * @var string
     */
    public const PRODUCT_CONCRETE_AVAILABILITIES = 'productConcreteAvailabilities';

    /**
     * @var \Spryker\DecimalObject\Decimal|null
     */
    protected $availability;

    /**
     * @var string|null
     */
    protected $productName;

    /**
     * @var \Spryker\DecimalObject\Decimal|null
     */
    protected $reservationQuantity;

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var \Spryker\DecimalObject\Decimal|null
     */
    protected $stockQuantity;

    /**
     * @var bool|null
     */
    protected $isNeverOutOfStock;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ProductConcreteAvailabilityTransfer[]
     */
    protected $productConcreteAvailabilities;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'availability' => 'availability',
        'Availability' => 'availability',
        'product_name' => 'productName',
        'productName' => 'productName',
        'ProductName' => 'productName',
        'reservation_quantity' => 'reservationQuantity',
        'reservationQuantity' => 'reservationQuantity',
        'ReservationQuantity' => 'reservationQuantity',
        'sku' => 'sku',
        'Sku' => 'sku',
        'stock_quantity' => 'stockQuantity',
        'stockQuantity' => 'stockQuantity',
        'StockQuantity' => 'stockQuantity',
        'is_never_out_of_stock' => 'isNeverOutOfStock',
        'isNeverOutOfStock' => 'isNeverOutOfStock',
        'IsNeverOutOfStock' => 'isNeverOutOfStock',
        'product_concrete_availabilities' => 'productConcreteAvailabilities',
        'productConcreteAvailabilities' => 'productConcreteAvailabilities',
        'ProductConcreteAvailabilities' => 'productConcreteAvailabilities',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::AVAILABILITY => [
            'type' => 'Spryker\DecimalObject\Decimal',
            'type_shim' => null,
            'name_underscore' => 'availability',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => true,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'product_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::RESERVATION_QUANTITY => [
            'type' => 'Spryker\DecimalObject\Decimal',
            'type_shim' => null,
            'name_underscore' => 'reservation_quantity',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => true,
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
        self::STOCK_QUANTITY => [
            'type' => 'Spryker\DecimalObject\Decimal',
            'type_shim' => null,
            'name_underscore' => 'stock_quantity',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => true,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_NEVER_OUT_OF_STOCK => [
            'type' => 'bool',
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
        self::PRODUCT_CONCRETE_AVAILABILITIES => [
            'type' => 'Generated\Shared\Transfer\ProductConcreteAvailabilityTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_concrete_availabilities',
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
     * @module AvailabilityGui|AvailabilityStorage|Availability|DiscountPromotion|ProductAvailabilitiesRestApi
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal|null $availability
     *
     * @return $this
     */
    public function setAvailability($availability = null)
    {
        if ($availability !== null && !$availability instanceof Decimal) {
            $availability = new Decimal($availability);
        }

        $this->availability = $availability;
        $this->modifiedProperties[self::AVAILABILITY] = true;

        return $this;
    }

    /**
     * @module AvailabilityGui|AvailabilityStorage|Availability|DiscountPromotion|ProductAvailabilitiesRestApi
     *
     * @return \Spryker\DecimalObject\Decimal|null
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * @module AvailabilityGui|AvailabilityStorage|Availability|DiscountPromotion|ProductAvailabilitiesRestApi
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal $availability
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAvailabilityOrFail($availability)
    {
        if ($availability === null) {
            $this->throwNullValueException(static::AVAILABILITY);
        }

        return $this->setAvailability($availability);
    }

    /**
     * @module AvailabilityGui|AvailabilityStorage|Availability|DiscountPromotion|ProductAvailabilitiesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Spryker\DecimalObject\Decimal
     */
    public function getAvailabilityOrFail()
    {
        if ($this->availability === null) {
            $this->throwNullValueException(static::AVAILABILITY);
        }

        return $this->availability;
    }

    /**
     * @module AvailabilityGui|AvailabilityStorage|Availability|DiscountPromotion|ProductAvailabilitiesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAvailability()
    {
        $this->assertPropertyIsSet(self::AVAILABILITY);

        return $this;
    }

    /**
     * @module AvailabilityGui|Availability
     *
     * @param string|null $productName
     *
     * @return $this
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
        $this->modifiedProperties[self::PRODUCT_NAME] = true;

        return $this;
    }

    /**
     * @module AvailabilityGui|Availability
     *
     * @return string|null
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @module AvailabilityGui|Availability
     *
     * @param string|null $productName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductNameOrFail($productName)
    {
        if ($productName === null) {
            $this->throwNullValueException(static::PRODUCT_NAME);
        }

        return $this->setProductName($productName);
    }

    /**
     * @module AvailabilityGui|Availability
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getProductNameOrFail()
    {
        if ($this->productName === null) {
            $this->throwNullValueException(static::PRODUCT_NAME);
        }

        return $this->productName;
    }

    /**
     * @module AvailabilityGui|Availability
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductName()
    {
        $this->assertPropertyIsSet(self::PRODUCT_NAME);

        return $this;
    }

    /**
     * @module AvailabilityGui|Availability
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal|null $reservationQuantity
     *
     * @return $this
     */
    public function setReservationQuantity($reservationQuantity = null)
    {
        if ($reservationQuantity !== null && !$reservationQuantity instanceof Decimal) {
            $reservationQuantity = new Decimal($reservationQuantity);
        }

        $this->reservationQuantity = $reservationQuantity;
        $this->modifiedProperties[self::RESERVATION_QUANTITY] = true;

        return $this;
    }

    /**
     * @module AvailabilityGui|Availability
     *
     * @return \Spryker\DecimalObject\Decimal|null
     */
    public function getReservationQuantity()
    {
        return $this->reservationQuantity;
    }

    /**
     * @module AvailabilityGui|Availability
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal $reservationQuantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setReservationQuantityOrFail($reservationQuantity)
    {
        if ($reservationQuantity === null) {
            $this->throwNullValueException(static::RESERVATION_QUANTITY);
        }

        return $this->setReservationQuantity($reservationQuantity);
    }

    /**
     * @module AvailabilityGui|Availability
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Spryker\DecimalObject\Decimal
     */
    public function getReservationQuantityOrFail()
    {
        if ($this->reservationQuantity === null) {
            $this->throwNullValueException(static::RESERVATION_QUANTITY);
        }

        return $this->reservationQuantity;
    }

    /**
     * @module AvailabilityGui|Availability
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireReservationQuantity()
    {
        $this->assertPropertyIsSet(self::RESERVATION_QUANTITY);

        return $this;
    }

    /**
     * @module AvailabilityGui|AvailabilityStorage|Availability|ProductAvailabilitiesRestApi
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
     * @module AvailabilityGui|AvailabilityStorage|Availability|ProductAvailabilitiesRestApi
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module AvailabilityGui|AvailabilityStorage|Availability|ProductAvailabilitiesRestApi
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
     * @module AvailabilityGui|AvailabilityStorage|Availability|ProductAvailabilitiesRestApi
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
     * @module AvailabilityGui|AvailabilityStorage|Availability|ProductAvailabilitiesRestApi
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
     * @module AvailabilityGui|Availability
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal|null $stockQuantity
     *
     * @return $this
     */
    public function setStockQuantity($stockQuantity = null)
    {
        if ($stockQuantity !== null && !$stockQuantity instanceof Decimal) {
            $stockQuantity = new Decimal($stockQuantity);
        }

        $this->stockQuantity = $stockQuantity;
        $this->modifiedProperties[self::STOCK_QUANTITY] = true;

        return $this;
    }

    /**
     * @module AvailabilityGui|Availability
     *
     * @return \Spryker\DecimalObject\Decimal|null
     */
    public function getStockQuantity()
    {
        return $this->stockQuantity;
    }

    /**
     * @module AvailabilityGui|Availability
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal $stockQuantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStockQuantityOrFail($stockQuantity)
    {
        if ($stockQuantity === null) {
            $this->throwNullValueException(static::STOCK_QUANTITY);
        }

        return $this->setStockQuantity($stockQuantity);
    }

    /**
     * @module AvailabilityGui|Availability
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Spryker\DecimalObject\Decimal
     */
    public function getStockQuantityOrFail()
    {
        if ($this->stockQuantity === null) {
            $this->throwNullValueException(static::STOCK_QUANTITY);
        }

        return $this->stockQuantity;
    }

    /**
     * @module AvailabilityGui|Availability
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStockQuantity()
    {
        $this->assertPropertyIsSet(self::STOCK_QUANTITY);

        return $this;
    }

    /**
     * @module AvailabilityGui|Availability|DiscountPromotion
     *
     * @param bool|null $isNeverOutOfStock
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
     * @module AvailabilityGui|Availability|DiscountPromotion
     *
     * @return bool|null
     */
    public function getIsNeverOutOfStock()
    {
        return $this->isNeverOutOfStock;
    }

    /**
     * @module AvailabilityGui|Availability|DiscountPromotion
     *
     * @param bool|null $isNeverOutOfStock
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
     * @module AvailabilityGui|Availability|DiscountPromotion
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsNeverOutOfStockOrFail()
    {
        if ($this->isNeverOutOfStock === null) {
            $this->throwNullValueException(static::IS_NEVER_OUT_OF_STOCK);
        }

        return $this->isNeverOutOfStock;
    }

    /**
     * @module AvailabilityGui|Availability|DiscountPromotion
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
     * @module AvailabilityStorage|ProductAvailabilitiesRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ProductConcreteAvailabilityTransfer[] $productConcreteAvailabilities
     *
     * @return $this
     */
    public function setProductConcreteAvailabilities(ArrayObject $productConcreteAvailabilities)
    {
        $this->productConcreteAvailabilities = $productConcreteAvailabilities;
        $this->modifiedProperties[self::PRODUCT_CONCRETE_AVAILABILITIES] = true;

        return $this;
    }

    /**
     * @module AvailabilityStorage|ProductAvailabilitiesRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ProductConcreteAvailabilityTransfer[]
     */
    public function getProductConcreteAvailabilities()
    {
        return $this->productConcreteAvailabilities;
    }

    /**
     * @module AvailabilityStorage|ProductAvailabilitiesRestApi
     *
     * @param \Generated\Shared\Transfer\ProductConcreteAvailabilityTransfer $productConcreteAvailability
     *
     * @return $this
     */
    public function addProductConcreteAvailability(ProductConcreteAvailabilityTransfer $productConcreteAvailability)
    {
        $this->productConcreteAvailabilities[] = $productConcreteAvailability;
        $this->modifiedProperties[self::PRODUCT_CONCRETE_AVAILABILITIES] = true;

        return $this;
    }

    /**
     * @module AvailabilityStorage|ProductAvailabilitiesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductConcreteAvailabilities()
    {
        $this->assertCollectionPropertyIsSet(self::PRODUCT_CONCRETE_AVAILABILITIES);

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
                case 'productName':
                case 'sku':
                case 'isNeverOutOfStock':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'productConcreteAvailabilities':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'availability':
                case 'reservationQuantity':
                case 'stockQuantity':
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
                case 'productName':
                case 'sku':
                case 'isNeverOutOfStock':
                case 'availability':
                case 'reservationQuantity':
                case 'stockQuantity':
                    $values[$arrayKey] = $value;

                    break;
                case 'productConcreteAvailabilities':
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
                case 'productName':
                case 'sku':
                case 'isNeverOutOfStock':
                case 'availability':
                case 'reservationQuantity':
                case 'stockQuantity':
                    $values[$arrayKey] = $value;

                    break;
                case 'productConcreteAvailabilities':
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
        $this->productConcreteAvailabilities = $this->productConcreteAvailabilities ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'productName' => $this->productName,
            'sku' => $this->sku,
            'isNeverOutOfStock' => $this->isNeverOutOfStock,
            'productConcreteAvailabilities' => $this->productConcreteAvailabilities,
            'availability' => $this->availability,
            'reservationQuantity' => $this->reservationQuantity,
            'stockQuantity' => $this->stockQuantity,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'product_name' => $this->productName,
            'sku' => $this->sku,
            'is_never_out_of_stock' => $this->isNeverOutOfStock,
            'product_concrete_availabilities' => $this->productConcreteAvailabilities,
            'availability' => $this->availability,
            'reservation_quantity' => $this->reservationQuantity,
            'stock_quantity' => $this->stockQuantity,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'product_name' => $this->productName instanceof AbstractTransfer ? $this->productName->toArray(true, false) : $this->productName,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'is_never_out_of_stock' => $this->isNeverOutOfStock instanceof AbstractTransfer ? $this->isNeverOutOfStock->toArray(true, false) : $this->isNeverOutOfStock,
            'product_concrete_availabilities' => $this->productConcreteAvailabilities instanceof AbstractTransfer ? $this->productConcreteAvailabilities->toArray(true, false) : $this->addValuesToCollection($this->productConcreteAvailabilities, true, false),
            'availability' => $this->availability,
            'reservation_quantity' => $this->reservationQuantity,
            'stock_quantity' => $this->stockQuantity,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'productName' => $this->productName instanceof AbstractTransfer ? $this->productName->toArray(true, true) : $this->productName,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'isNeverOutOfStock' => $this->isNeverOutOfStock instanceof AbstractTransfer ? $this->isNeverOutOfStock->toArray(true, true) : $this->isNeverOutOfStock,
            'productConcreteAvailabilities' => $this->productConcreteAvailabilities instanceof AbstractTransfer ? $this->productConcreteAvailabilities->toArray(true, true) : $this->addValuesToCollection($this->productConcreteAvailabilities, true, true),
            'availability' => $this->availability,
            'reservationQuantity' => $this->reservationQuantity,
            'stockQuantity' => $this->stockQuantity,
        ];
    }
}
