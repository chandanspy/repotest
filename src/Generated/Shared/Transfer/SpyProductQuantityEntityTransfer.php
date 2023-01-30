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
class SpyProductQuantityEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_QUANTITY = 'idProductQuantity';

    /**
     * @var string
     */
    public const FK_PRODUCT = 'fkProduct';

    /**
     * @var string
     */
    public const QUANTITY_INTERVAL = 'quantityInterval';

    /**
     * @var string
     */
    public const QUANTITY_MAX = 'quantityMax';

    /**
     * @var string
     */
    public const QUANTITY_MIN = 'quantityMin';

    /**
     * @var string
     */
    public const PRODUCT = 'product';

    /**
     * @var integer|null
     */
    protected $idProductQuantity;

    /**
     * @var integer|null
     */
    protected $fkProduct;

    /**
     * @var integer|null
     */
    protected $quantityInterval;

    /**
     * @var integer|null
     */
    protected $quantityMax;

    /**
     * @var integer|null
     */
    protected $quantityMin;

    /**
     * @var \Generated\Shared\Transfer\SpyProductEntityTransfer|null
     */
    protected $product;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_quantity' => 'idProductQuantity',
        'idProductQuantity' => 'idProductQuantity',
        'IdProductQuantity' => 'idProductQuantity',
        'fk_product' => 'fkProduct',
        'fkProduct' => 'fkProduct',
        'FkProduct' => 'fkProduct',
        'quantity_interval' => 'quantityInterval',
        'quantityInterval' => 'quantityInterval',
        'QuantityInterval' => 'quantityInterval',
        'quantity_max' => 'quantityMax',
        'quantityMax' => 'quantityMax',
        'QuantityMax' => 'quantityMax',
        'quantity_min' => 'quantityMin',
        'quantityMin' => 'quantityMin',
        'QuantityMin' => 'quantityMin',
        'product' => 'product',
        'Product' => 'product',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_QUANTITY => [
            'type' => 'integer',
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
        self::FK_PRODUCT => [
            'type' => 'integer',
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
        self::QUANTITY_INTERVAL => [
            'type' => 'integer',
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
        self::QUANTITY_MAX => [
            'type' => 'integer',
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
        self::QUANTITY_MIN => [
            'type' => 'integer',
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
        self::PRODUCT => [
            'type' => 'Generated\Shared\Transfer\SpyProductEntityTransfer',
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
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\ProductQuantity\Persistence\SpyProductQuantity';


    /**
     * @module 
     *
     * @param integer|null $idProductQuantity
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdProductQuantity()
    {
        return $this->idProductQuantity;
    }

    /**
     * @module 
     *
     * @param integer|null $idProductQuantity
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdProductQuantityOrFail()
    {
        if ($this->idProductQuantity === null) {
            $this->throwNullValueException(static::ID_PRODUCT_QUANTITY);
        }

        return $this->idProductQuantity;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkProduct
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
     * @module 
     *
     * @return integer|null
     */
    public function getFkProduct()
    {
        return $this->fkProduct;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProduct
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkProductOrFail()
    {
        if ($this->fkProduct === null) {
            $this->throwNullValueException(static::FK_PRODUCT);
        }

        return $this->fkProduct;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $quantityInterval
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
     * @module 
     *
     * @return integer|null
     */
    public function getQuantityInterval()
    {
        return $this->quantityInterval;
    }

    /**
     * @module 
     *
     * @param integer|null $quantityInterval
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getQuantityIntervalOrFail()
    {
        if ($this->quantityInterval === null) {
            $this->throwNullValueException(static::QUANTITY_INTERVAL);
        }

        return $this->quantityInterval;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $quantityMax
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
     * @module 
     *
     * @return integer|null
     */
    public function getQuantityMax()
    {
        return $this->quantityMax;
    }

    /**
     * @module 
     *
     * @param integer|null $quantityMax
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getQuantityMaxOrFail()
    {
        if ($this->quantityMax === null) {
            $this->throwNullValueException(static::QUANTITY_MAX);
        }

        return $this->quantityMax;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $quantityMin
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
     * @module 
     *
     * @return integer|null
     */
    public function getQuantityMin()
    {
        return $this->quantityMin;
    }

    /**
     * @module 
     *
     * @param integer|null $quantityMin
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getQuantityMinOrFail()
    {
        if ($this->quantityMin === null) {
            $this->throwNullValueException(static::QUANTITY_MIN);
        }

        return $this->quantityMin;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductEntityTransfer|null $product
     *
     * @return $this
     */
    public function setProduct(SpyProductEntityTransfer $product = null)
    {
        $this->product = $product;
        $this->modifiedProperties[self::PRODUCT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyProductEntityTransfer|null
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductEntityTransfer $product
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductOrFail(SpyProductEntityTransfer $product)
    {
        return $this->setProduct($product);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyProductEntityTransfer
     */
    public function getProductOrFail()
    {
        if ($this->product === null) {
            $this->throwNullValueException(static::PRODUCT);
        }

        return $this->product;
    }

    /**
     * @module 
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
                case 'idProductQuantity':
                case 'fkProduct':
                case 'quantityInterval':
                case 'quantityMax':
                case 'quantityMin':
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
                case 'idProductQuantity':
                case 'fkProduct':
                case 'quantityInterval':
                case 'quantityMax':
                case 'quantityMin':
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
                case 'idProductQuantity':
                case 'fkProduct':
                case 'quantityInterval':
                case 'quantityMax':
                case 'quantityMin':
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
            'idProductQuantity' => $this->idProductQuantity,
            'fkProduct' => $this->fkProduct,
            'quantityInterval' => $this->quantityInterval,
            'quantityMax' => $this->quantityMax,
            'quantityMin' => $this->quantityMin,
            'product' => $this->product,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_quantity' => $this->idProductQuantity,
            'fk_product' => $this->fkProduct,
            'quantity_interval' => $this->quantityInterval,
            'quantity_max' => $this->quantityMax,
            'quantity_min' => $this->quantityMin,
            'product' => $this->product,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_quantity' => $this->idProductQuantity instanceof AbstractTransfer ? $this->idProductQuantity->toArray(true, false) : $this->idProductQuantity,
            'fk_product' => $this->fkProduct instanceof AbstractTransfer ? $this->fkProduct->toArray(true, false) : $this->fkProduct,
            'quantity_interval' => $this->quantityInterval instanceof AbstractTransfer ? $this->quantityInterval->toArray(true, false) : $this->quantityInterval,
            'quantity_max' => $this->quantityMax instanceof AbstractTransfer ? $this->quantityMax->toArray(true, false) : $this->quantityMax,
            'quantity_min' => $this->quantityMin instanceof AbstractTransfer ? $this->quantityMin->toArray(true, false) : $this->quantityMin,
            'product' => $this->product instanceof AbstractTransfer ? $this->product->toArray(true, false) : $this->product,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductQuantity' => $this->idProductQuantity instanceof AbstractTransfer ? $this->idProductQuantity->toArray(true, true) : $this->idProductQuantity,
            'fkProduct' => $this->fkProduct instanceof AbstractTransfer ? $this->fkProduct->toArray(true, true) : $this->fkProduct,
            'quantityInterval' => $this->quantityInterval instanceof AbstractTransfer ? $this->quantityInterval->toArray(true, true) : $this->quantityInterval,
            'quantityMax' => $this->quantityMax instanceof AbstractTransfer ? $this->quantityMax->toArray(true, true) : $this->quantityMax,
            'quantityMin' => $this->quantityMin instanceof AbstractTransfer ? $this->quantityMin->toArray(true, true) : $this->quantityMin,
            'product' => $this->product instanceof AbstractTransfer ? $this->product->toArray(true, true) : $this->product,
        ];
    }
}
