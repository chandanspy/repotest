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
class ProductAlternativeTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT = 'idProduct';

    /**
     * @var string
     */
    public const ID_PRODUCT_ALTERNATIVE = 'idProductAlternative';

    /**
     * @var string
     */
    public const ID_PRODUCT_CONCRETE_ALTERNATIVE = 'idProductConcreteAlternative';

    /**
     * @var string
     */
    public const ID_PRODUCT_ABSTRACT_ALTERNATIVE = 'idProductAbstractAlternative';

    /**
     * @var int|null
     */
    protected $idProduct;

    /**
     * @var int|null
     */
    protected $idProductAlternative;

    /**
     * @var int|null
     */
    protected $idProductConcreteAlternative;

    /**
     * @var int|null
     */
    protected $idProductAbstractAlternative;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product' => 'idProduct',
        'idProduct' => 'idProduct',
        'IdProduct' => 'idProduct',
        'id_product_alternative' => 'idProductAlternative',
        'idProductAlternative' => 'idProductAlternative',
        'IdProductAlternative' => 'idProductAlternative',
        'id_product_concrete_alternative' => 'idProductConcreteAlternative',
        'idProductConcreteAlternative' => 'idProductConcreteAlternative',
        'IdProductConcreteAlternative' => 'idProductConcreteAlternative',
        'id_product_abstract_alternative' => 'idProductAbstractAlternative',
        'idProductAbstractAlternative' => 'idProductAbstractAlternative',
        'IdProductAbstractAlternative' => 'idProductAbstractAlternative',
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
        self::ID_PRODUCT_ALTERNATIVE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_alternative',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_PRODUCT_CONCRETE_ALTERNATIVE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_concrete_alternative',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_PRODUCT_ABSTRACT_ALTERNATIVE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_abstract_alternative',
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
     * @module ProductAlternativeProductLabelConnector|ProductAlternative
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
     * @module ProductAlternativeProductLabelConnector|ProductAlternative
     *
     * @return int|null
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductAlternative
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
     * @module ProductAlternativeProductLabelConnector|ProductAlternative
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
     * @module ProductAlternativeProductLabelConnector|ProductAlternative
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
     * @module ProductAlternative
     *
     * @param int|null $idProductAlternative
     *
     * @return $this
     */
    public function setIdProductAlternative($idProductAlternative)
    {
        $this->idProductAlternative = $idProductAlternative;
        $this->modifiedProperties[self::ID_PRODUCT_ALTERNATIVE] = true;

        return $this;
    }

    /**
     * @module ProductAlternative
     *
     * @return int|null
     */
    public function getIdProductAlternative()
    {
        return $this->idProductAlternative;
    }

    /**
     * @module ProductAlternative
     *
     * @param int|null $idProductAlternative
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductAlternativeOrFail($idProductAlternative)
    {
        if ($idProductAlternative === null) {
            $this->throwNullValueException(static::ID_PRODUCT_ALTERNATIVE);
        }

        return $this->setIdProductAlternative($idProductAlternative);
    }

    /**
     * @module ProductAlternative
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductAlternativeOrFail()
    {
        if ($this->idProductAlternative === null) {
            $this->throwNullValueException(static::ID_PRODUCT_ALTERNATIVE);
        }

        return $this->idProductAlternative;
    }

    /**
     * @module ProductAlternative
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductAlternative()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_ALTERNATIVE);

        return $this;
    }

    /**
     * @module ProductAlternative
     *
     * @param int|null $idProductConcreteAlternative
     *
     * @return $this
     */
    public function setIdProductConcreteAlternative($idProductConcreteAlternative)
    {
        $this->idProductConcreteAlternative = $idProductConcreteAlternative;
        $this->modifiedProperties[self::ID_PRODUCT_CONCRETE_ALTERNATIVE] = true;

        return $this;
    }

    /**
     * @module ProductAlternative
     *
     * @return int|null
     */
    public function getIdProductConcreteAlternative()
    {
        return $this->idProductConcreteAlternative;
    }

    /**
     * @module ProductAlternative
     *
     * @param int|null $idProductConcreteAlternative
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductConcreteAlternativeOrFail($idProductConcreteAlternative)
    {
        if ($idProductConcreteAlternative === null) {
            $this->throwNullValueException(static::ID_PRODUCT_CONCRETE_ALTERNATIVE);
        }

        return $this->setIdProductConcreteAlternative($idProductConcreteAlternative);
    }

    /**
     * @module ProductAlternative
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductConcreteAlternativeOrFail()
    {
        if ($this->idProductConcreteAlternative === null) {
            $this->throwNullValueException(static::ID_PRODUCT_CONCRETE_ALTERNATIVE);
        }

        return $this->idProductConcreteAlternative;
    }

    /**
     * @module ProductAlternative
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductConcreteAlternative()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_CONCRETE_ALTERNATIVE);

        return $this;
    }

    /**
     * @module ProductAlternative
     *
     * @param int|null $idProductAbstractAlternative
     *
     * @return $this
     */
    public function setIdProductAbstractAlternative($idProductAbstractAlternative)
    {
        $this->idProductAbstractAlternative = $idProductAbstractAlternative;
        $this->modifiedProperties[self::ID_PRODUCT_ABSTRACT_ALTERNATIVE] = true;

        return $this;
    }

    /**
     * @module ProductAlternative
     *
     * @return int|null
     */
    public function getIdProductAbstractAlternative()
    {
        return $this->idProductAbstractAlternative;
    }

    /**
     * @module ProductAlternative
     *
     * @param int|null $idProductAbstractAlternative
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductAbstractAlternativeOrFail($idProductAbstractAlternative)
    {
        if ($idProductAbstractAlternative === null) {
            $this->throwNullValueException(static::ID_PRODUCT_ABSTRACT_ALTERNATIVE);
        }

        return $this->setIdProductAbstractAlternative($idProductAbstractAlternative);
    }

    /**
     * @module ProductAlternative
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductAbstractAlternativeOrFail()
    {
        if ($this->idProductAbstractAlternative === null) {
            $this->throwNullValueException(static::ID_PRODUCT_ABSTRACT_ALTERNATIVE);
        }

        return $this->idProductAbstractAlternative;
    }

    /**
     * @module ProductAlternative
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductAbstractAlternative()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_ABSTRACT_ALTERNATIVE);

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
                case 'idProductAlternative':
                case 'idProductConcreteAlternative':
                case 'idProductAbstractAlternative':
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
                case 'idProductAlternative':
                case 'idProductConcreteAlternative':
                case 'idProductAbstractAlternative':
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
                case 'idProduct':
                case 'idProductAlternative':
                case 'idProductConcreteAlternative':
                case 'idProductAbstractAlternative':
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
            'idProduct' => $this->idProduct,
            'idProductAlternative' => $this->idProductAlternative,
            'idProductConcreteAlternative' => $this->idProductConcreteAlternative,
            'idProductAbstractAlternative' => $this->idProductAbstractAlternative,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product' => $this->idProduct,
            'id_product_alternative' => $this->idProductAlternative,
            'id_product_concrete_alternative' => $this->idProductConcreteAlternative,
            'id_product_abstract_alternative' => $this->idProductAbstractAlternative,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product' => $this->idProduct instanceof AbstractTransfer ? $this->idProduct->toArray(true, false) : $this->idProduct,
            'id_product_alternative' => $this->idProductAlternative instanceof AbstractTransfer ? $this->idProductAlternative->toArray(true, false) : $this->idProductAlternative,
            'id_product_concrete_alternative' => $this->idProductConcreteAlternative instanceof AbstractTransfer ? $this->idProductConcreteAlternative->toArray(true, false) : $this->idProductConcreteAlternative,
            'id_product_abstract_alternative' => $this->idProductAbstractAlternative instanceof AbstractTransfer ? $this->idProductAbstractAlternative->toArray(true, false) : $this->idProductAbstractAlternative,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProduct' => $this->idProduct instanceof AbstractTransfer ? $this->idProduct->toArray(true, true) : $this->idProduct,
            'idProductAlternative' => $this->idProductAlternative instanceof AbstractTransfer ? $this->idProductAlternative->toArray(true, true) : $this->idProductAlternative,
            'idProductConcreteAlternative' => $this->idProductConcreteAlternative instanceof AbstractTransfer ? $this->idProductConcreteAlternative->toArray(true, true) : $this->idProductConcreteAlternative,
            'idProductAbstractAlternative' => $this->idProductAbstractAlternative instanceof AbstractTransfer ? $this->idProductAbstractAlternative->toArray(true, true) : $this->idProductAbstractAlternative,
        ];
    }
}
