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
class SpyProductAlternativeEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_ALTERNATIVE = 'idProductAlternative';

    /**
     * @var string
     */
    public const FK_PRODUCT = 'fkProduct';

    /**
     * @var string
     */
    public const FK_PRODUCT_ABSTRACT_ALTERNATIVE = 'fkProductAbstractAlternative';

    /**
     * @var string
     */
    public const FK_PRODUCT_CONCRETE_ALTERNATIVE = 'fkProductConcreteAlternative';

    /**
     * @var string
     */
    public const PRODUCT_CONCRETE = 'productConcrete';

    /**
     * @var string
     */
    public const PRODUCT_ABSTRACT_ALTERNATIVE = 'productAbstractAlternative';

    /**
     * @var string
     */
    public const PRODUCT_CONCRETE_ALTERNATIVE = 'productConcreteAlternative';

    /**
     * @var integer|null
     */
    protected $idProductAlternative;

    /**
     * @var integer|null
     */
    protected $fkProduct;

    /**
     * @var integer|null
     */
    protected $fkProductAbstractAlternative;

    /**
     * @var integer|null
     */
    protected $fkProductConcreteAlternative;

    /**
     * @var \Generated\Shared\Transfer\SpyProductEntityTransfer|null
     */
    protected $productConcrete;

    /**
     * @var \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer|null
     */
    protected $productAbstractAlternative;

    /**
     * @var \Generated\Shared\Transfer\SpyProductEntityTransfer|null
     */
    protected $productConcreteAlternative;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_alternative' => 'idProductAlternative',
        'idProductAlternative' => 'idProductAlternative',
        'IdProductAlternative' => 'idProductAlternative',
        'fk_product' => 'fkProduct',
        'fkProduct' => 'fkProduct',
        'FkProduct' => 'fkProduct',
        'fk_product_abstract_alternative' => 'fkProductAbstractAlternative',
        'fkProductAbstractAlternative' => 'fkProductAbstractAlternative',
        'FkProductAbstractAlternative' => 'fkProductAbstractAlternative',
        'fk_product_concrete_alternative' => 'fkProductConcreteAlternative',
        'fkProductConcreteAlternative' => 'fkProductConcreteAlternative',
        'FkProductConcreteAlternative' => 'fkProductConcreteAlternative',
        'product_concrete' => 'productConcrete',
        'productConcrete' => 'productConcrete',
        'ProductConcrete' => 'productConcrete',
        'product_abstract_alternative' => 'productAbstractAlternative',
        'productAbstractAlternative' => 'productAbstractAlternative',
        'ProductAbstractAlternative' => 'productAbstractAlternative',
        'product_concrete_alternative' => 'productConcreteAlternative',
        'productConcreteAlternative' => 'productConcreteAlternative',
        'ProductConcreteAlternative' => 'productConcreteAlternative',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_ALTERNATIVE => [
            'type' => 'integer',
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
        self::FK_PRODUCT_ABSTRACT_ALTERNATIVE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_product_abstract_alternative',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PRODUCT_CONCRETE_ALTERNATIVE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_product_concrete_alternative',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_CONCRETE => [
            'type' => 'Generated\Shared\Transfer\SpyProductEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_concrete',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_ABSTRACT_ALTERNATIVE => [
            'type' => 'Generated\Shared\Transfer\SpyProductAbstractEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_abstract_alternative',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_CONCRETE_ALTERNATIVE => [
            'type' => 'Generated\Shared\Transfer\SpyProductEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_concrete_alternative',
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
    public static $entityNamespace = 'Orm\Zed\ProductAlternative\Persistence\SpyProductAlternative';


    /**
     * @module 
     *
     * @param integer|null $idProductAlternative
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdProductAlternative()
    {
        return $this->idProductAlternative;
    }

    /**
     * @module 
     *
     * @param integer|null $idProductAlternative
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdProductAlternativeOrFail()
    {
        if ($this->idProductAlternative === null) {
            $this->throwNullValueException(static::ID_PRODUCT_ALTERNATIVE);
        }

        return $this->idProductAlternative;
    }

    /**
     * @module 
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
     * @param integer|null $fkProductAbstractAlternative
     *
     * @return $this
     */
    public function setFkProductAbstractAlternative($fkProductAbstractAlternative)
    {
        $this->fkProductAbstractAlternative = $fkProductAbstractAlternative;
        $this->modifiedProperties[self::FK_PRODUCT_ABSTRACT_ALTERNATIVE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkProductAbstractAlternative()
    {
        return $this->fkProductAbstractAlternative;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductAbstractAlternative
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkProductAbstractAlternativeOrFail($fkProductAbstractAlternative)
    {
        if ($fkProductAbstractAlternative === null) {
            $this->throwNullValueException(static::FK_PRODUCT_ABSTRACT_ALTERNATIVE);
        }

        return $this->setFkProductAbstractAlternative($fkProductAbstractAlternative);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkProductAbstractAlternativeOrFail()
    {
        if ($this->fkProductAbstractAlternative === null) {
            $this->throwNullValueException(static::FK_PRODUCT_ABSTRACT_ALTERNATIVE);
        }

        return $this->fkProductAbstractAlternative;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkProductAbstractAlternative()
    {
        $this->assertPropertyIsSet(self::FK_PRODUCT_ABSTRACT_ALTERNATIVE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductConcreteAlternative
     *
     * @return $this
     */
    public function setFkProductConcreteAlternative($fkProductConcreteAlternative)
    {
        $this->fkProductConcreteAlternative = $fkProductConcreteAlternative;
        $this->modifiedProperties[self::FK_PRODUCT_CONCRETE_ALTERNATIVE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkProductConcreteAlternative()
    {
        return $this->fkProductConcreteAlternative;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductConcreteAlternative
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkProductConcreteAlternativeOrFail($fkProductConcreteAlternative)
    {
        if ($fkProductConcreteAlternative === null) {
            $this->throwNullValueException(static::FK_PRODUCT_CONCRETE_ALTERNATIVE);
        }

        return $this->setFkProductConcreteAlternative($fkProductConcreteAlternative);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkProductConcreteAlternativeOrFail()
    {
        if ($this->fkProductConcreteAlternative === null) {
            $this->throwNullValueException(static::FK_PRODUCT_CONCRETE_ALTERNATIVE);
        }

        return $this->fkProductConcreteAlternative;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkProductConcreteAlternative()
    {
        $this->assertPropertyIsSet(self::FK_PRODUCT_CONCRETE_ALTERNATIVE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductEntityTransfer|null $productConcrete
     *
     * @return $this
     */
    public function setProductConcrete(SpyProductEntityTransfer $productConcrete = null)
    {
        $this->productConcrete = $productConcrete;
        $this->modifiedProperties[self::PRODUCT_CONCRETE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyProductEntityTransfer|null
     */
    public function getProductConcrete()
    {
        return $this->productConcrete;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductEntityTransfer $productConcrete
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductConcreteOrFail(SpyProductEntityTransfer $productConcrete)
    {
        return $this->setProductConcrete($productConcrete);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyProductEntityTransfer
     */
    public function getProductConcreteOrFail()
    {
        if ($this->productConcrete === null) {
            $this->throwNullValueException(static::PRODUCT_CONCRETE);
        }

        return $this->productConcrete;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductConcrete()
    {
        $this->assertPropertyIsSet(self::PRODUCT_CONCRETE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer|null $productAbstractAlternative
     *
     * @return $this
     */
    public function setProductAbstractAlternative(SpyProductAbstractEntityTransfer $productAbstractAlternative = null)
    {
        $this->productAbstractAlternative = $productAbstractAlternative;
        $this->modifiedProperties[self::PRODUCT_ABSTRACT_ALTERNATIVE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer|null
     */
    public function getProductAbstractAlternative()
    {
        return $this->productAbstractAlternative;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer $productAbstractAlternative
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductAbstractAlternativeOrFail(SpyProductAbstractEntityTransfer $productAbstractAlternative)
    {
        return $this->setProductAbstractAlternative($productAbstractAlternative);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer
     */
    public function getProductAbstractAlternativeOrFail()
    {
        if ($this->productAbstractAlternative === null) {
            $this->throwNullValueException(static::PRODUCT_ABSTRACT_ALTERNATIVE);
        }

        return $this->productAbstractAlternative;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductAbstractAlternative()
    {
        $this->assertPropertyIsSet(self::PRODUCT_ABSTRACT_ALTERNATIVE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductEntityTransfer|null $productConcreteAlternative
     *
     * @return $this
     */
    public function setProductConcreteAlternative(SpyProductEntityTransfer $productConcreteAlternative = null)
    {
        $this->productConcreteAlternative = $productConcreteAlternative;
        $this->modifiedProperties[self::PRODUCT_CONCRETE_ALTERNATIVE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyProductEntityTransfer|null
     */
    public function getProductConcreteAlternative()
    {
        return $this->productConcreteAlternative;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductEntityTransfer $productConcreteAlternative
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductConcreteAlternativeOrFail(SpyProductEntityTransfer $productConcreteAlternative)
    {
        return $this->setProductConcreteAlternative($productConcreteAlternative);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyProductEntityTransfer
     */
    public function getProductConcreteAlternativeOrFail()
    {
        if ($this->productConcreteAlternative === null) {
            $this->throwNullValueException(static::PRODUCT_CONCRETE_ALTERNATIVE);
        }

        return $this->productConcreteAlternative;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductConcreteAlternative()
    {
        $this->assertPropertyIsSet(self::PRODUCT_CONCRETE_ALTERNATIVE);

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
                case 'idProductAlternative':
                case 'fkProduct':
                case 'fkProductAbstractAlternative':
                case 'fkProductConcreteAlternative':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'productConcrete':
                case 'productAbstractAlternative':
                case 'productConcreteAlternative':
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
                case 'idProductAlternative':
                case 'fkProduct':
                case 'fkProductAbstractAlternative':
                case 'fkProductConcreteAlternative':
                    $values[$arrayKey] = $value;

                    break;
                case 'productConcrete':
                case 'productAbstractAlternative':
                case 'productConcreteAlternative':
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
                case 'idProductAlternative':
                case 'fkProduct':
                case 'fkProductAbstractAlternative':
                case 'fkProductConcreteAlternative':
                    $values[$arrayKey] = $value;

                    break;
                case 'productConcrete':
                case 'productAbstractAlternative':
                case 'productConcreteAlternative':
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
            'idProductAlternative' => $this->idProductAlternative,
            'fkProduct' => $this->fkProduct,
            'fkProductAbstractAlternative' => $this->fkProductAbstractAlternative,
            'fkProductConcreteAlternative' => $this->fkProductConcreteAlternative,
            'productConcrete' => $this->productConcrete,
            'productAbstractAlternative' => $this->productAbstractAlternative,
            'productConcreteAlternative' => $this->productConcreteAlternative,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_alternative' => $this->idProductAlternative,
            'fk_product' => $this->fkProduct,
            'fk_product_abstract_alternative' => $this->fkProductAbstractAlternative,
            'fk_product_concrete_alternative' => $this->fkProductConcreteAlternative,
            'product_concrete' => $this->productConcrete,
            'product_abstract_alternative' => $this->productAbstractAlternative,
            'product_concrete_alternative' => $this->productConcreteAlternative,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_alternative' => $this->idProductAlternative instanceof AbstractTransfer ? $this->idProductAlternative->toArray(true, false) : $this->idProductAlternative,
            'fk_product' => $this->fkProduct instanceof AbstractTransfer ? $this->fkProduct->toArray(true, false) : $this->fkProduct,
            'fk_product_abstract_alternative' => $this->fkProductAbstractAlternative instanceof AbstractTransfer ? $this->fkProductAbstractAlternative->toArray(true, false) : $this->fkProductAbstractAlternative,
            'fk_product_concrete_alternative' => $this->fkProductConcreteAlternative instanceof AbstractTransfer ? $this->fkProductConcreteAlternative->toArray(true, false) : $this->fkProductConcreteAlternative,
            'product_concrete' => $this->productConcrete instanceof AbstractTransfer ? $this->productConcrete->toArray(true, false) : $this->productConcrete,
            'product_abstract_alternative' => $this->productAbstractAlternative instanceof AbstractTransfer ? $this->productAbstractAlternative->toArray(true, false) : $this->productAbstractAlternative,
            'product_concrete_alternative' => $this->productConcreteAlternative instanceof AbstractTransfer ? $this->productConcreteAlternative->toArray(true, false) : $this->productConcreteAlternative,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductAlternative' => $this->idProductAlternative instanceof AbstractTransfer ? $this->idProductAlternative->toArray(true, true) : $this->idProductAlternative,
            'fkProduct' => $this->fkProduct instanceof AbstractTransfer ? $this->fkProduct->toArray(true, true) : $this->fkProduct,
            'fkProductAbstractAlternative' => $this->fkProductAbstractAlternative instanceof AbstractTransfer ? $this->fkProductAbstractAlternative->toArray(true, true) : $this->fkProductAbstractAlternative,
            'fkProductConcreteAlternative' => $this->fkProductConcreteAlternative instanceof AbstractTransfer ? $this->fkProductConcreteAlternative->toArray(true, true) : $this->fkProductConcreteAlternative,
            'productConcrete' => $this->productConcrete instanceof AbstractTransfer ? $this->productConcrete->toArray(true, true) : $this->productConcrete,
            'productAbstractAlternative' => $this->productAbstractAlternative instanceof AbstractTransfer ? $this->productAbstractAlternative->toArray(true, true) : $this->productAbstractAlternative,
            'productConcreteAlternative' => $this->productConcreteAlternative instanceof AbstractTransfer ? $this->productConcreteAlternative->toArray(true, true) : $this->productConcreteAlternative,
        ];
    }
}
