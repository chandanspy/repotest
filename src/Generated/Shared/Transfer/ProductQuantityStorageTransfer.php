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
class ProductQuantityStorageTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const QUANTITY_MIN = 'quantityMin';

    /**
     * @var string
     */
    public const ID_PRODUCT = 'idProduct';

    /**
     * @var string
     */
    public const QUANTITY_MAX = 'quantityMax';

    /**
     * @var string
     */
    public const QUANTITY_INTERVAL = 'quantityInterval';

    /**
     * @var int|null
     */
    protected $quantityMin;

    /**
     * @var int|null
     */
    protected $idProduct;

    /**
     * @var int|null
     */
    protected $quantityMax;

    /**
     * @var int|null
     */
    protected $quantityInterval;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'quantity_min' => 'quantityMin',
        'quantityMin' => 'quantityMin',
        'QuantityMin' => 'quantityMin',
        'id_product' => 'idProduct',
        'idProduct' => 'idProduct',
        'IdProduct' => 'idProduct',
        'quantity_max' => 'quantityMax',
        'quantityMax' => 'quantityMax',
        'QuantityMax' => 'quantityMax',
        'quantity_interval' => 'quantityInterval',
        'quantityInterval' => 'quantityInterval',
        'QuantityInterval' => 'quantityInterval',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
    ];

    /**
     * @module ProductMeasurementUnitWidget|ProductPackagingUnitWidget|ProductQuantityStorage
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
     * @module ProductMeasurementUnitWidget|ProductPackagingUnitWidget|ProductQuantityStorage
     *
     * @return int|null
     */
    public function getQuantityMin()
    {
        return $this->quantityMin;
    }

    /**
     * @module ProductMeasurementUnitWidget|ProductPackagingUnitWidget|ProductQuantityStorage
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
     * @module ProductMeasurementUnitWidget|ProductPackagingUnitWidget|ProductQuantityStorage
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
     * @module ProductMeasurementUnitWidget|ProductPackagingUnitWidget|ProductQuantityStorage
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
     * @module ProductQuantityStorage
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
     * @module ProductQuantityStorage
     *
     * @return int|null
     */
    public function getQuantityMax()
    {
        return $this->quantityMax;
    }

    /**
     * @module ProductQuantityStorage
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
     * @module ProductQuantityStorage
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
     * @module ProductQuantityStorage
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
     * @module ProductQuantityStorage
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
     * @module ProductQuantityStorage
     *
     * @return int|null
     */
    public function getQuantityInterval()
    {
        return $this->quantityInterval;
    }

    /**
     * @module ProductQuantityStorage
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
     * @module ProductQuantityStorage
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
     * @module ProductQuantityStorage
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
                case 'quantityMin':
                case 'idProduct':
                case 'quantityMax':
                case 'quantityInterval':
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
                case 'quantityMin':
                case 'idProduct':
                case 'quantityMax':
                case 'quantityInterval':
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
                case 'quantityMin':
                case 'idProduct':
                case 'quantityMax':
                case 'quantityInterval':
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
            'quantityMin' => $this->quantityMin,
            'idProduct' => $this->idProduct,
            'quantityMax' => $this->quantityMax,
            'quantityInterval' => $this->quantityInterval,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'quantity_min' => $this->quantityMin,
            'id_product' => $this->idProduct,
            'quantity_max' => $this->quantityMax,
            'quantity_interval' => $this->quantityInterval,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'quantity_min' => $this->quantityMin instanceof AbstractTransfer ? $this->quantityMin->toArray(true, false) : $this->quantityMin,
            'id_product' => $this->idProduct instanceof AbstractTransfer ? $this->idProduct->toArray(true, false) : $this->idProduct,
            'quantity_max' => $this->quantityMax instanceof AbstractTransfer ? $this->quantityMax->toArray(true, false) : $this->quantityMax,
            'quantity_interval' => $this->quantityInterval instanceof AbstractTransfer ? $this->quantityInterval->toArray(true, false) : $this->quantityInterval,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'quantityMin' => $this->quantityMin instanceof AbstractTransfer ? $this->quantityMin->toArray(true, true) : $this->quantityMin,
            'idProduct' => $this->idProduct instanceof AbstractTransfer ? $this->idProduct->toArray(true, true) : $this->idProduct,
            'quantityMax' => $this->quantityMax instanceof AbstractTransfer ? $this->quantityMax->toArray(true, true) : $this->quantityMax,
            'quantityInterval' => $this->quantityInterval instanceof AbstractTransfer ? $this->quantityInterval->toArray(true, true) : $this->quantityInterval,
        ];
    }
}
