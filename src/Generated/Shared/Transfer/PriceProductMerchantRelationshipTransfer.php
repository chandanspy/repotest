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
class PriceProductMerchantRelationshipTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_PRICE_PRODUCT_MERCHANT_RELATIONSHIP = 'idPriceProductMerchantRelationship';

    /**
     * @var string
     */
    public const FK_PRICE_PRODUCT_STORE = 'fkPriceProductStore';

    /**
     * @var string
     */
    public const FK_MERCHANT_RELATIONSHIP = 'fkMerchantRelationship';

    /**
     * @var string
     */
    public const FK_PRODUCT = 'fkProduct';

    /**
     * @var string
     */
    public const FK_PRODUCT_ABSTRACT = 'fkProductAbstract';

    /**
     * @var int|null
     */
    protected $idPriceProductMerchantRelationship;

    /**
     * @var int|null
     */
    protected $fkPriceProductStore;

    /**
     * @var int|null
     */
    protected $fkMerchantRelationship;

    /**
     * @var int|null
     */
    protected $fkProduct;

    /**
     * @var int|null
     */
    protected $fkProductAbstract;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_price_product_merchant_relationship' => 'idPriceProductMerchantRelationship',
        'idPriceProductMerchantRelationship' => 'idPriceProductMerchantRelationship',
        'IdPriceProductMerchantRelationship' => 'idPriceProductMerchantRelationship',
        'fk_price_product_store' => 'fkPriceProductStore',
        'fkPriceProductStore' => 'fkPriceProductStore',
        'FkPriceProductStore' => 'fkPriceProductStore',
        'fk_merchant_relationship' => 'fkMerchantRelationship',
        'fkMerchantRelationship' => 'fkMerchantRelationship',
        'FkMerchantRelationship' => 'fkMerchantRelationship',
        'fk_product' => 'fkProduct',
        'fkProduct' => 'fkProduct',
        'FkProduct' => 'fkProduct',
        'fk_product_abstract' => 'fkProductAbstract',
        'fkProductAbstract' => 'fkProductAbstract',
        'FkProductAbstract' => 'fkProductAbstract',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRICE_PRODUCT_MERCHANT_RELATIONSHIP => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_price_product_merchant_relationship',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PRICE_PRODUCT_STORE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_price_product_store',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_MERCHANT_RELATIONSHIP => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_merchant_relationship',
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
        self::FK_PRODUCT_ABSTRACT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_product_abstract',
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
     * @module PriceProductMerchantRelationshipStorage
     *
     * @param int|null $idPriceProductMerchantRelationship
     *
     * @return $this
     */
    public function setIdPriceProductMerchantRelationship($idPriceProductMerchantRelationship)
    {
        $this->idPriceProductMerchantRelationship = $idPriceProductMerchantRelationship;
        $this->modifiedProperties[self::ID_PRICE_PRODUCT_MERCHANT_RELATIONSHIP] = true;

        return $this;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @return int|null
     */
    public function getIdPriceProductMerchantRelationship()
    {
        return $this->idPriceProductMerchantRelationship;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @param int|null $idPriceProductMerchantRelationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdPriceProductMerchantRelationshipOrFail($idPriceProductMerchantRelationship)
    {
        if ($idPriceProductMerchantRelationship === null) {
            $this->throwNullValueException(static::ID_PRICE_PRODUCT_MERCHANT_RELATIONSHIP);
        }

        return $this->setIdPriceProductMerchantRelationship($idPriceProductMerchantRelationship);
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdPriceProductMerchantRelationshipOrFail()
    {
        if ($this->idPriceProductMerchantRelationship === null) {
            $this->throwNullValueException(static::ID_PRICE_PRODUCT_MERCHANT_RELATIONSHIP);
        }

        return $this->idPriceProductMerchantRelationship;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdPriceProductMerchantRelationship()
    {
        $this->assertPropertyIsSet(self::ID_PRICE_PRODUCT_MERCHANT_RELATIONSHIP);

        return $this;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @param int|null $fkPriceProductStore
     *
     * @return $this
     */
    public function setFkPriceProductStore($fkPriceProductStore)
    {
        $this->fkPriceProductStore = $fkPriceProductStore;
        $this->modifiedProperties[self::FK_PRICE_PRODUCT_STORE] = true;

        return $this;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @return int|null
     */
    public function getFkPriceProductStore()
    {
        return $this->fkPriceProductStore;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @param int|null $fkPriceProductStore
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkPriceProductStoreOrFail($fkPriceProductStore)
    {
        if ($fkPriceProductStore === null) {
            $this->throwNullValueException(static::FK_PRICE_PRODUCT_STORE);
        }

        return $this->setFkPriceProductStore($fkPriceProductStore);
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkPriceProductStoreOrFail()
    {
        if ($this->fkPriceProductStore === null) {
            $this->throwNullValueException(static::FK_PRICE_PRODUCT_STORE);
        }

        return $this->fkPriceProductStore;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkPriceProductStore()
    {
        $this->assertPropertyIsSet(self::FK_PRICE_PRODUCT_STORE);

        return $this;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @param int|null $fkMerchantRelationship
     *
     * @return $this
     */
    public function setFkMerchantRelationship($fkMerchantRelationship)
    {
        $this->fkMerchantRelationship = $fkMerchantRelationship;
        $this->modifiedProperties[self::FK_MERCHANT_RELATIONSHIP] = true;

        return $this;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @return int|null
     */
    public function getFkMerchantRelationship()
    {
        return $this->fkMerchantRelationship;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @param int|null $fkMerchantRelationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkMerchantRelationshipOrFail($fkMerchantRelationship)
    {
        if ($fkMerchantRelationship === null) {
            $this->throwNullValueException(static::FK_MERCHANT_RELATIONSHIP);
        }

        return $this->setFkMerchantRelationship($fkMerchantRelationship);
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkMerchantRelationshipOrFail()
    {
        if ($this->fkMerchantRelationship === null) {
            $this->throwNullValueException(static::FK_MERCHANT_RELATIONSHIP);
        }

        return $this->fkMerchantRelationship;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkMerchantRelationship()
    {
        $this->assertPropertyIsSet(self::FK_MERCHANT_RELATIONSHIP);

        return $this;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
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
     * @module PriceProductMerchantRelationshipStorage
     *
     * @return int|null
     */
    public function getFkProduct()
    {
        return $this->fkProduct;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
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
     * @module PriceProductMerchantRelationshipStorage
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
     * @module PriceProductMerchantRelationshipStorage
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
     * @module PriceProductMerchantRelationshipStorage
     *
     * @param int|null $fkProductAbstract
     *
     * @return $this
     */
    public function setFkProductAbstract($fkProductAbstract)
    {
        $this->fkProductAbstract = $fkProductAbstract;
        $this->modifiedProperties[self::FK_PRODUCT_ABSTRACT] = true;

        return $this;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @return int|null
     */
    public function getFkProductAbstract()
    {
        return $this->fkProductAbstract;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @param int|null $fkProductAbstract
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkProductAbstractOrFail($fkProductAbstract)
    {
        if ($fkProductAbstract === null) {
            $this->throwNullValueException(static::FK_PRODUCT_ABSTRACT);
        }

        return $this->setFkProductAbstract($fkProductAbstract);
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkProductAbstractOrFail()
    {
        if ($this->fkProductAbstract === null) {
            $this->throwNullValueException(static::FK_PRODUCT_ABSTRACT);
        }

        return $this->fkProductAbstract;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkProductAbstract()
    {
        $this->assertPropertyIsSet(self::FK_PRODUCT_ABSTRACT);

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
                case 'idPriceProductMerchantRelationship':
                case 'fkPriceProductStore':
                case 'fkMerchantRelationship':
                case 'fkProduct':
                case 'fkProductAbstract':
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
                case 'idPriceProductMerchantRelationship':
                case 'fkPriceProductStore':
                case 'fkMerchantRelationship':
                case 'fkProduct':
                case 'fkProductAbstract':
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
                case 'idPriceProductMerchantRelationship':
                case 'fkPriceProductStore':
                case 'fkMerchantRelationship':
                case 'fkProduct':
                case 'fkProductAbstract':
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
            'idPriceProductMerchantRelationship' => $this->idPriceProductMerchantRelationship,
            'fkPriceProductStore' => $this->fkPriceProductStore,
            'fkMerchantRelationship' => $this->fkMerchantRelationship,
            'fkProduct' => $this->fkProduct,
            'fkProductAbstract' => $this->fkProductAbstract,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_price_product_merchant_relationship' => $this->idPriceProductMerchantRelationship,
            'fk_price_product_store' => $this->fkPriceProductStore,
            'fk_merchant_relationship' => $this->fkMerchantRelationship,
            'fk_product' => $this->fkProduct,
            'fk_product_abstract' => $this->fkProductAbstract,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_price_product_merchant_relationship' => $this->idPriceProductMerchantRelationship instanceof AbstractTransfer ? $this->idPriceProductMerchantRelationship->toArray(true, false) : $this->idPriceProductMerchantRelationship,
            'fk_price_product_store' => $this->fkPriceProductStore instanceof AbstractTransfer ? $this->fkPriceProductStore->toArray(true, false) : $this->fkPriceProductStore,
            'fk_merchant_relationship' => $this->fkMerchantRelationship instanceof AbstractTransfer ? $this->fkMerchantRelationship->toArray(true, false) : $this->fkMerchantRelationship,
            'fk_product' => $this->fkProduct instanceof AbstractTransfer ? $this->fkProduct->toArray(true, false) : $this->fkProduct,
            'fk_product_abstract' => $this->fkProductAbstract instanceof AbstractTransfer ? $this->fkProductAbstract->toArray(true, false) : $this->fkProductAbstract,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idPriceProductMerchantRelationship' => $this->idPriceProductMerchantRelationship instanceof AbstractTransfer ? $this->idPriceProductMerchantRelationship->toArray(true, true) : $this->idPriceProductMerchantRelationship,
            'fkPriceProductStore' => $this->fkPriceProductStore instanceof AbstractTransfer ? $this->fkPriceProductStore->toArray(true, true) : $this->fkPriceProductStore,
            'fkMerchantRelationship' => $this->fkMerchantRelationship instanceof AbstractTransfer ? $this->fkMerchantRelationship->toArray(true, true) : $this->fkMerchantRelationship,
            'fkProduct' => $this->fkProduct instanceof AbstractTransfer ? $this->fkProduct->toArray(true, true) : $this->fkProduct,
            'fkProductAbstract' => $this->fkProductAbstract instanceof AbstractTransfer ? $this->fkProductAbstract->toArray(true, true) : $this->fkProductAbstract,
        ];
    }
}
