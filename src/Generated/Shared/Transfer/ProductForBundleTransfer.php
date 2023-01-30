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
class ProductForBundleTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_BUNDLE = 'idProductBundle';

    /**
     * @var string
     */
    public const ID_PRODUCT_CONCRETE = 'idProductConcrete';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const QUANTITY = 'quantity';

    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var string
     */
    public const BUNDLE_SKU = 'bundleSku';

    /**
     * @var int|null
     */
    protected $idProductBundle;

    /**
     * @var int|null
     */
    protected $idProductConcrete;

    /**
     * @var bool|null
     */
    protected $isActive;

    /**
     * @var int|null
     */
    protected $quantity;

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var string|null
     */
    protected $bundleSku;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_bundle' => 'idProductBundle',
        'idProductBundle' => 'idProductBundle',
        'IdProductBundle' => 'idProductBundle',
        'id_product_concrete' => 'idProductConcrete',
        'idProductConcrete' => 'idProductConcrete',
        'IdProductConcrete' => 'idProductConcrete',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'quantity' => 'quantity',
        'Quantity' => 'quantity',
        'sku' => 'sku',
        'Sku' => 'sku',
        'bundle_sku' => 'bundleSku',
        'bundleSku' => 'bundleSku',
        'BundleSku' => 'bundleSku',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_BUNDLE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_bundle',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_PRODUCT_CONCRETE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_concrete',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_ACTIVE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_active',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::QUANTITY => [
            'type' => 'int',
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
        self::BUNDLE_SKU => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'bundle_sku',
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
     * @module ProductBundleProductListConnector|ProductBundle
     *
     * @param int|null $idProductBundle
     *
     * @return $this
     */
    public function setIdProductBundle($idProductBundle)
    {
        $this->idProductBundle = $idProductBundle;
        $this->modifiedProperties[self::ID_PRODUCT_BUNDLE] = true;

        return $this;
    }

    /**
     * @module ProductBundleProductListConnector|ProductBundle
     *
     * @return int|null
     */
    public function getIdProductBundle()
    {
        return $this->idProductBundle;
    }

    /**
     * @module ProductBundleProductListConnector|ProductBundle
     *
     * @param int|null $idProductBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductBundleOrFail($idProductBundle)
    {
        if ($idProductBundle === null) {
            $this->throwNullValueException(static::ID_PRODUCT_BUNDLE);
        }

        return $this->setIdProductBundle($idProductBundle);
    }

    /**
     * @module ProductBundleProductListConnector|ProductBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductBundleOrFail()
    {
        if ($this->idProductBundle === null) {
            $this->throwNullValueException(static::ID_PRODUCT_BUNDLE);
        }

        return $this->idProductBundle;
    }

    /**
     * @module ProductBundleProductListConnector|ProductBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductBundle()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_BUNDLE);

        return $this;
    }

    /**
     * @module ProductBundleProductListConnector|ProductBundle|ProductDiscontinuedProductBundleConnector|ProductManagement
     *
     * @param int|null $idProductConcrete
     *
     * @return $this
     */
    public function setIdProductConcrete($idProductConcrete)
    {
        $this->idProductConcrete = $idProductConcrete;
        $this->modifiedProperties[self::ID_PRODUCT_CONCRETE] = true;

        return $this;
    }

    /**
     * @module ProductBundleProductListConnector|ProductBundle|ProductDiscontinuedProductBundleConnector|ProductManagement
     *
     * @return int|null
     */
    public function getIdProductConcrete()
    {
        return $this->idProductConcrete;
    }

    /**
     * @module ProductBundleProductListConnector|ProductBundle|ProductDiscontinuedProductBundleConnector|ProductManagement
     *
     * @param int|null $idProductConcrete
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductConcreteOrFail($idProductConcrete)
    {
        if ($idProductConcrete === null) {
            $this->throwNullValueException(static::ID_PRODUCT_CONCRETE);
        }

        return $this->setIdProductConcrete($idProductConcrete);
    }

    /**
     * @module ProductBundleProductListConnector|ProductBundle|ProductDiscontinuedProductBundleConnector|ProductManagement
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductConcreteOrFail()
    {
        if ($this->idProductConcrete === null) {
            $this->throwNullValueException(static::ID_PRODUCT_CONCRETE);
        }

        return $this->idProductConcrete;
    }

    /**
     * @module ProductBundleProductListConnector|ProductBundle|ProductDiscontinuedProductBundleConnector|ProductManagement
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductConcrete()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_CONCRETE);

        return $this;
    }

    /**
     * @module ProductBundleStorage|ProductBundle
     *
     * @param bool|null $isActive
     *
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        $this->modifiedProperties[self::IS_ACTIVE] = true;

        return $this;
    }

    /**
     * @module ProductBundleStorage|ProductBundle
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module ProductBundleStorage|ProductBundle
     *
     * @param bool|null $isActive
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsActiveOrFail($isActive)
    {
        if ($isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->setIsActive($isActive);
    }

    /**
     * @module ProductBundleStorage|ProductBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsActiveOrFail()
    {
        if ($this->isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->isActive;
    }

    /**
     * @module ProductBundleStorage|ProductBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsActive()
    {
        $this->assertPropertyIsSet(self::IS_ACTIVE);

        return $this;
    }

    /**
     * @module ProductBundle|ProductManagement
     *
     * @param int|null $quantity
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
     * @module ProductBundle|ProductManagement
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @module ProductBundle|ProductManagement
     *
     * @param int|null $quantity
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
     * @module ProductBundle|ProductManagement
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getQuantityOrFail()
    {
        if ($this->quantity === null) {
            $this->throwNullValueException(static::QUANTITY);
        }

        return $this->quantity;
    }

    /**
     * @module ProductBundle|ProductManagement
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
     * @module ProductBundle|ProductManagement
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
     * @module ProductBundle|ProductManagement
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module ProductBundle|ProductManagement
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
     * @module ProductBundle|ProductManagement
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
     * @module ProductBundle|ProductManagement
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
     * @module ProductBundle
     *
     * @param string|null $bundleSku
     *
     * @return $this
     */
    public function setBundleSku($bundleSku)
    {
        $this->bundleSku = $bundleSku;
        $this->modifiedProperties[self::BUNDLE_SKU] = true;

        return $this;
    }

    /**
     * @module ProductBundle
     *
     * @return string|null
     */
    public function getBundleSku()
    {
        return $this->bundleSku;
    }

    /**
     * @module ProductBundle
     *
     * @param string|null $bundleSku
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setBundleSkuOrFail($bundleSku)
    {
        if ($bundleSku === null) {
            $this->throwNullValueException(static::BUNDLE_SKU);
        }

        return $this->setBundleSku($bundleSku);
    }

    /**
     * @module ProductBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getBundleSkuOrFail()
    {
        if ($this->bundleSku === null) {
            $this->throwNullValueException(static::BUNDLE_SKU);
        }

        return $this->bundleSku;
    }

    /**
     * @module ProductBundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireBundleSku()
    {
        $this->assertPropertyIsSet(self::BUNDLE_SKU);

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
                case 'idProductBundle':
                case 'idProductConcrete':
                case 'isActive':
                case 'quantity':
                case 'sku':
                case 'bundleSku':
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
                case 'idProductBundle':
                case 'idProductConcrete':
                case 'isActive':
                case 'quantity':
                case 'sku':
                case 'bundleSku':
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
                case 'idProductBundle':
                case 'idProductConcrete':
                case 'isActive':
                case 'quantity':
                case 'sku':
                case 'bundleSku':
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
            'idProductBundle' => $this->idProductBundle,
            'idProductConcrete' => $this->idProductConcrete,
            'isActive' => $this->isActive,
            'quantity' => $this->quantity,
            'sku' => $this->sku,
            'bundleSku' => $this->bundleSku,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_bundle' => $this->idProductBundle,
            'id_product_concrete' => $this->idProductConcrete,
            'is_active' => $this->isActive,
            'quantity' => $this->quantity,
            'sku' => $this->sku,
            'bundle_sku' => $this->bundleSku,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_bundle' => $this->idProductBundle instanceof AbstractTransfer ? $this->idProductBundle->toArray(true, false) : $this->idProductBundle,
            'id_product_concrete' => $this->idProductConcrete instanceof AbstractTransfer ? $this->idProductConcrete->toArray(true, false) : $this->idProductConcrete,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, false) : $this->quantity,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'bundle_sku' => $this->bundleSku instanceof AbstractTransfer ? $this->bundleSku->toArray(true, false) : $this->bundleSku,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductBundle' => $this->idProductBundle instanceof AbstractTransfer ? $this->idProductBundle->toArray(true, true) : $this->idProductBundle,
            'idProductConcrete' => $this->idProductConcrete instanceof AbstractTransfer ? $this->idProductConcrete->toArray(true, true) : $this->idProductConcrete,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, true) : $this->quantity,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'bundleSku' => $this->bundleSku instanceof AbstractTransfer ? $this->bundleSku->toArray(true, true) : $this->bundleSku,
        ];
    }
}
