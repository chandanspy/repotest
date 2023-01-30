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
class ProductQuantityTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT = 'idProduct';

    /**
     * @var string
     */
    public const FK_PRODUCT = 'fkProduct';

    /**
     * @var string
     */
    public const ID_PRODUCT_QUANTITY = 'idProductQuantity';

    /**
     * @var string
     */
    public const QUANTITY_MIN = 'quantityMin';

    /**
     * @var string
     */
    public const QUANTITY_MAX = 'quantityMax';

    /**
     * @var string
     */
    public const QUANTITY_INTERVAL = 'quantityInterval';

    /**
     * @var string
     */
    public const PRODUCT = 'product';

    /**
     * @var int|null
     */
    protected $idProduct;

    /**
     * @var int|null
     */
    protected $fkProduct;

    /**
     * @var int|null
     */
    protected $idProductQuantity;

    /**
     * @var int|null
     */
    protected $quantityMin;

    /**
     * @var int|null
     */
    protected $quantityMax;

    /**
     * @var int|null
     */
    protected $quantityInterval;

    /**
     * @var \Generated\Shared\Transfer\ProductConcreteTransfer|null
     */
    protected $product;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product' => 'idProduct',
        'idProduct' => 'idProduct',
        'IdProduct' => 'idProduct',
        'fk_product' => 'fkProduct',
        'fkProduct' => 'fkProduct',
        'FkProduct' => 'fkProduct',
        'id_product_quantity' => 'idProductQuantity',
        'idProductQuantity' => 'idProductQuantity',
        'IdProductQuantity' => 'idProductQuantity',
        'quantity_min' => 'quantityMin',
        'quantityMin' => 'quantityMin',
        'QuantityMin' => 'quantityMin',
        'quantity_max' => 'quantityMax',
        'quantityMax' => 'quantityMax',
        'QuantityMax' => 'quantityMax',
        'quantity_interval' => 'quantityInterval',
        'quantityInterval' => 'quantityInterval',
        'QuantityInterval' => 'quantityInterval',
        'product' => 'product',
        'Product' => 'product',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PRODUCT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_product',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_PRODUCT_QUANTITY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_quantity',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::QUANTITY_MIN => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'quantity_min',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::QUANTITY_MAX => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'quantity_max',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::QUANTITY_INTERVAL => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'quantity_interval',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT => [
            'type' => 'Generated\Shared\Transfer\ProductConcreteTransfer',
            'type_shim' => null,
            'name_underscore' => 'product',
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
     * @module ProductQuantityStorage
     *
     * @param int|null $idProduct
     *
     * @return $this
     */
    public function setIdProduct($idProduct)
    {
        $this->idProduct = $idProduct;
        $this->modifiedProperties[self::ID_PRODUCT] = true;

        return $this;
    }

    /**
     * @module ProductQuantityStorage
     *
     * @return int|null
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }

    /**
     * @module ProductQuantityStorage
     *
     * @param int|null $idProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductOrFail($idProduct)
    {
        if ($idProduct === null) {
            $this->throwNullValueException(static::ID_PRODUCT);
        }

        return $this->setIdProduct($idProduct);
    }

    /**
     * @module ProductQuantityStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductOrFail()
    {
        if ($this->idProduct === null) {
            $this->throwNullValueException(static::ID_PRODUCT);
        }

        return $this->idProduct;
    }

    /**
     * @module ProductQuantityStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProduct()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT);

        return $this;
    }

    /**
     * @module ProductQuantityStorage|ProductQuantity
     *
     * @param int|null $fkProduct
     *
     * @return $this
     */
    public function setFkProduct($fkProduct)
    {
        $this->fkProduct = $fkProduct;
        $this->modifiedProperties[self::FK_PRODUCT] = true;

        return $this;
    }

    /**
     * @module ProductQuantityStorage|ProductQuantity
     *
     * @return int|null
     */
    public function getFkProduct()
    {
        return $this->fkProduct;
    }

    /**
     * @module ProductQuantityStorage|ProductQuantity
     *
     * @param int|null $fkProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkProductOrFail($fkProduct)
    {
        if ($fkProduct === null) {
            $this->throwNullValueException(static::FK_PRODUCT);
        }

        return $this->setFkProduct($fkProduct);
    }

    /**
     * @module ProductQuantityStorage|ProductQuantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkProductOrFail()
    {
        if ($this->fkProduct === null) {
            $this->throwNullValueException(static::FK_PRODUCT);
        }

        return $this->fkProduct;
    }

    /**
     * @module ProductQuantityStorage|ProductQuantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkProduct()
    {
        $this->assertPropertyIsSet(self::FK_PRODUCT);

        return $this;
    }

    /**
     * @module ProductQuantity
     *
     * @param int|null $idProductQuantity
     *
     * @return $this
     */
    public function setIdProductQuantity($idProductQuantity)
    {
        $this->idProductQuantity = $idProductQuantity;
        $this->modifiedProperties[self::ID_PRODUCT_QUANTITY] = true;

        return $this;
    }

    /**
     * @module ProductQuantity
     *
     * @return int|null
     */
    public function getIdProductQuantity()
    {
        return $this->idProductQuantity;
    }

    /**
     * @module ProductQuantity
     *
     * @param int|null $idProductQuantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductQuantityOrFail($idProductQuantity)
    {
        if ($idProductQuantity === null) {
            $this->throwNullValueException(static::ID_PRODUCT_QUANTITY);
        }

        return $this->setIdProductQuantity($idProductQuantity);
    }

    /**
     * @module ProductQuantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductQuantityOrFail()
    {
        if ($this->idProductQuantity === null) {
            $this->throwNullValueException(static::ID_PRODUCT_QUANTITY);
        }

        return $this->idProductQuantity;
    }

    /**
     * @module ProductQuantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductQuantity()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_QUANTITY);

        return $this;
    }

    /**
     * @module ProductQuantity
     *
     * @param int|null $quantityMin
     *
     * @return $this
     */
    public function setQuantityMin($quantityMin)
    {
        $this->quantityMin = $quantityMin;
        $this->modifiedProperties[self::QUANTITY_MIN] = true;

        return $this;
    }

    /**
     * @module ProductQuantity
     *
     * @return int|null
     */
    public function getQuantityMin()
    {
        return $this->quantityMin;
    }

    /**
     * @module ProductQuantity
     *
     * @param int|null $quantityMin
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuantityMinOrFail($quantityMin)
    {
        if ($quantityMin === null) {
            $this->throwNullValueException(static::QUANTITY_MIN);
        }

        return $this->setQuantityMin($quantityMin);
    }

    /**
     * @module ProductQuantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getQuantityMinOrFail()
    {
        if ($this->quantityMin === null) {
            $this->throwNullValueException(static::QUANTITY_MIN);
        }

        return $this->quantityMin;
    }

    /**
     * @module ProductQuantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuantityMin()
    {
        $this->assertPropertyIsSet(self::QUANTITY_MIN);

        return $this;
    }

    /**
     * @module ProductQuantity
     *
     * @param int|null $quantityMax
     *
     * @return $this
     */
    public function setQuantityMax($quantityMax)
    {
        $this->quantityMax = $quantityMax;
        $this->modifiedProperties[self::QUANTITY_MAX] = true;

        return $this;
    }

    /**
     * @module ProductQuantity
     *
     * @return int|null
     */
    public function getQuantityMax()
    {
        return $this->quantityMax;
    }

    /**
     * @module ProductQuantity
     *
     * @param int|null $quantityMax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuantityMaxOrFail($quantityMax)
    {
        if ($quantityMax === null) {
            $this->throwNullValueException(static::QUANTITY_MAX);
        }

        return $this->setQuantityMax($quantityMax);
    }

    /**
     * @module ProductQuantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getQuantityMaxOrFail()
    {
        if ($this->quantityMax === null) {
            $this->throwNullValueException(static::QUANTITY_MAX);
        }

        return $this->quantityMax;
    }

    /**
     * @module ProductQuantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuantityMax()
    {
        $this->assertPropertyIsSet(self::QUANTITY_MAX);

        return $this;
    }

    /**
     * @module ProductQuantity
     *
     * @param int|null $quantityInterval
     *
     * @return $this
     */
    public function setQuantityInterval($quantityInterval)
    {
        $this->quantityInterval = $quantityInterval;
        $this->modifiedProperties[self::QUANTITY_INTERVAL] = true;

        return $this;
    }

    /**
     * @module ProductQuantity
     *
     * @return int|null
     */
    public function getQuantityInterval()
    {
        return $this->quantityInterval;
    }

    /**
     * @module ProductQuantity
     *
     * @param int|null $quantityInterval
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuantityIntervalOrFail($quantityInterval)
    {
        if ($quantityInterval === null) {
            $this->throwNullValueException(static::QUANTITY_INTERVAL);
        }

        return $this->setQuantityInterval($quantityInterval);
    }

    /**
     * @module ProductQuantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getQuantityIntervalOrFail()
    {
        if ($this->quantityInterval === null) {
            $this->throwNullValueException(static::QUANTITY_INTERVAL);
        }

        return $this->quantityInterval;
    }

    /**
     * @module ProductQuantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuantityInterval()
    {
        $this->assertPropertyIsSet(self::QUANTITY_INTERVAL);

        return $this;
    }

    /**
     * @module ProductQuantity
     *
     * @param \Generated\Shared\Transfer\ProductConcreteTransfer|null $product
     *
     * @return $this
     */
    public function setProduct(ProductConcreteTransfer $product = null)
    {
        $this->product = $product;
        $this->modifiedProperties[self::PRODUCT] = true;

        return $this;
    }

    /**
     * @module ProductQuantity
     *
     * @return \Generated\Shared\Transfer\ProductConcreteTransfer|null
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @module ProductQuantity
     *
     * @param \Generated\Shared\Transfer\ProductConcreteTransfer $product
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductOrFail(ProductConcreteTransfer $product)
    {
        return $this->setProduct($product);
    }

    /**
     * @module ProductQuantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ProductConcreteTransfer
     */
    public function getProductOrFail()
    {
        if ($this->product === null) {
            $this->throwNullValueException(static::PRODUCT);
        }

        return $this->product;
    }

    /**
     * @module ProductQuantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProduct()
    {
        $this->assertPropertyIsSet(self::PRODUCT);

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
                case 'idProduct':
                case 'fkProduct':
                case 'idProductQuantity':
                case 'quantityMin':
                case 'quantityMax':
                case 'quantityInterval':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'product':
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
                case 'idProduct':
                case 'fkProduct':
                case 'idProductQuantity':
                case 'quantityMin':
                case 'quantityMax':
                case 'quantityInterval':
                    $values[$arrayKey] = $value;

                    break;
                case 'product':
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
                case 'idProduct':
                case 'fkProduct':
                case 'idProductQuantity':
                case 'quantityMin':
                case 'quantityMax':
                case 'quantityInterval':
                    $values[$arrayKey] = $value;

                    break;
                case 'product':
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
            'idProduct' => $this->idProduct,
            'fkProduct' => $this->fkProduct,
            'idProductQuantity' => $this->idProductQuantity,
            'quantityMin' => $this->quantityMin,
            'quantityMax' => $this->quantityMax,
            'quantityInterval' => $this->quantityInterval,
            'product' => $this->product,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product' => $this->idProduct,
            'fk_product' => $this->fkProduct,
            'id_product_quantity' => $this->idProductQuantity,
            'quantity_min' => $this->quantityMin,
            'quantity_max' => $this->quantityMax,
            'quantity_interval' => $this->quantityInterval,
            'product' => $this->product,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product' => $this->idProduct instanceof AbstractTransfer ? $this->idProduct->toArray(true, false) : $this->idProduct,
            'fk_product' => $this->fkProduct instanceof AbstractTransfer ? $this->fkProduct->toArray(true, false) : $this->fkProduct,
            'id_product_quantity' => $this->idProductQuantity instanceof AbstractTransfer ? $this->idProductQuantity->toArray(true, false) : $this->idProductQuantity,
            'quantity_min' => $this->quantityMin instanceof AbstractTransfer ? $this->quantityMin->toArray(true, false) : $this->quantityMin,
            'quantity_max' => $this->quantityMax instanceof AbstractTransfer ? $this->quantityMax->toArray(true, false) : $this->quantityMax,
            'quantity_interval' => $this->quantityInterval instanceof AbstractTransfer ? $this->quantityInterval->toArray(true, false) : $this->quantityInterval,
            'product' => $this->product instanceof AbstractTransfer ? $this->product->toArray(true, false) : $this->product,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProduct' => $this->idProduct instanceof AbstractTransfer ? $this->idProduct->toArray(true, true) : $this->idProduct,
            'fkProduct' => $this->fkProduct instanceof AbstractTransfer ? $this->fkProduct->toArray(true, true) : $this->fkProduct,
            'idProductQuantity' => $this->idProductQuantity instanceof AbstractTransfer ? $this->idProductQuantity->toArray(true, true) : $this->idProductQuantity,
            'quantityMin' => $this->quantityMin instanceof AbstractTransfer ? $this->quantityMin->toArray(true, true) : $this->quantityMin,
            'quantityMax' => $this->quantityMax instanceof AbstractTransfer ? $this->quantityMax->toArray(true, true) : $this->quantityMax,
            'quantityInterval' => $this->quantityInterval instanceof AbstractTransfer ? $this->quantityInterval->toArray(true, true) : $this->quantityInterval,
            'product' => $this->product instanceof AbstractTransfer ? $this->product->toArray(true, true) : $this->product,
        ];
    }
}
