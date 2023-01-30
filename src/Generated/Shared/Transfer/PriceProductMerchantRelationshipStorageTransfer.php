<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class PriceProductMerchantRelationshipStorageTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const UNGROUPED_PRICES = 'ungroupedPrices';

    /**
     * @var string
     */
    public const STORE_NAME = 'storeName';

    /**
     * @deprecated Use PriceProductMerchantRelationshipValueTransfer::idMerchantRelationship instead.
     */
    public const ID_MERCHANT_RELATIONSHIP = 'idMerchantRelationship';

    /**
     * @var string
     */
    public const ID_COMPANY_BUSINESS_UNIT = 'idCompanyBusinessUnit';

    /**
     * @var string
     */
    public const ID_PRODUCT = 'idProduct';

    /**
     * @var string
     */
    public const PRICE_KEY = 'priceKey';

    /**
     * @var string
     */
    public const PRICES = 'prices';

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\PriceProductMerchantRelationshipValueTransfer[]
     */
    protected $ungroupedPrices;

    /**
     * @var string|null
     */
    protected $storeName;

    /**
     * @var int|null
     */
    protected $idMerchantRelationship;

    /**
     * @var int|null
     */
    protected $idCompanyBusinessUnit;

    /**
     * @var int|null
     */
    protected $idProduct;

    /**
     * @var string|null
     */
    protected $priceKey;

    /**
     * @var array
     */
    protected $prices = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'ungrouped_prices' => 'ungroupedPrices',
        'ungroupedPrices' => 'ungroupedPrices',
        'UngroupedPrices' => 'ungroupedPrices',
        'store_name' => 'storeName',
        'storeName' => 'storeName',
        'StoreName' => 'storeName',
        'id_merchant_relationship' => 'idMerchantRelationship',
        'idMerchantRelationship' => 'idMerchantRelationship',
        'IdMerchantRelationship' => 'idMerchantRelationship',
        'id_company_business_unit' => 'idCompanyBusinessUnit',
        'idCompanyBusinessUnit' => 'idCompanyBusinessUnit',
        'IdCompanyBusinessUnit' => 'idCompanyBusinessUnit',
        'id_product' => 'idProduct',
        'idProduct' => 'idProduct',
        'IdProduct' => 'idProduct',
        'price_key' => 'priceKey',
        'priceKey' => 'priceKey',
        'PriceKey' => 'priceKey',
        'prices' => 'prices',
        'Prices' => 'prices',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::UNGROUPED_PRICES => [
            'type' => 'Generated\Shared\Transfer\PriceProductMerchantRelationshipValueTransfer',
            'type_shim' => null,
            'name_underscore' => 'ungrouped_prices',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'store_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_MERCHANT_RELATIONSHIP => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_merchant_relationship',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_COMPANY_BUSINESS_UNIT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_company_business_unit',
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
        self::PRICE_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'price_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRICES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'prices',
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
     * @module Merchant|PriceProductMerchantRelationshipStorage
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\PriceProductMerchantRelationshipValueTransfer[] $ungroupedPrices
     *
     * @return $this
     */
    public function setUngroupedPrices(ArrayObject $ungroupedPrices)
    {
        $this->ungroupedPrices = $ungroupedPrices;
        $this->modifiedProperties[self::UNGROUPED_PRICES] = true;

        return $this;
    }

    /**
     * @module Merchant|PriceProductMerchantRelationshipStorage
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\PriceProductMerchantRelationshipValueTransfer[]
     */
    public function getUngroupedPrices()
    {
        return $this->ungroupedPrices;
    }

    /**
     * @module Merchant|PriceProductMerchantRelationshipStorage
     *
     * @param \Generated\Shared\Transfer\PriceProductMerchantRelationshipValueTransfer $ungroupedPrice
     *
     * @return $this
     */
    public function addUngroupedPrice(PriceProductMerchantRelationshipValueTransfer $ungroupedPrice)
    {
        $this->ungroupedPrices[] = $ungroupedPrice;
        $this->modifiedProperties[self::UNGROUPED_PRICES] = true;

        return $this;
    }

    /**
     * @module Merchant|PriceProductMerchantRelationshipStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUngroupedPrices()
    {
        $this->assertCollectionPropertyIsSet(self::UNGROUPED_PRICES);

        return $this;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @param string|null $storeName
     *
     * @return $this
     */
    public function setStoreName($storeName)
    {
        $this->storeName = $storeName;
        $this->modifiedProperties[self::STORE_NAME] = true;

        return $this;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @return string|null
     */
    public function getStoreName()
    {
        return $this->storeName;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @param string|null $storeName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreNameOrFail($storeName)
    {
        if ($storeName === null) {
            $this->throwNullValueException(static::STORE_NAME);
        }

        return $this->setStoreName($storeName);
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStoreNameOrFail()
    {
        if ($this->storeName === null) {
            $this->throwNullValueException(static::STORE_NAME);
        }

        return $this->storeName;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStoreName()
    {
        $this->assertPropertyIsSet(self::STORE_NAME);

        return $this;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @deprecated Use PriceProductMerchantRelationshipValueTransfer::idMerchantRelationship instead.
     *
     * @param int|null $idMerchantRelationship
     *
     * @return $this
     */
    public function setIdMerchantRelationship($idMerchantRelationship)
    {
        $this->idMerchantRelationship = $idMerchantRelationship;
        $this->modifiedProperties[self::ID_MERCHANT_RELATIONSHIP] = true;

        return $this;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @deprecated Use PriceProductMerchantRelationshipValueTransfer::idMerchantRelationship instead.
     *
     * @return int|null
     */
    public function getIdMerchantRelationship()
    {
        return $this->idMerchantRelationship;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @deprecated Use PriceProductMerchantRelationshipValueTransfer::idMerchantRelationship instead.
     *
     * @param int|null $idMerchantRelationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdMerchantRelationshipOrFail($idMerchantRelationship)
    {
        if ($idMerchantRelationship === null) {
            $this->throwNullValueException(static::ID_MERCHANT_RELATIONSHIP);
        }

        return $this->setIdMerchantRelationship($idMerchantRelationship);
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use PriceProductMerchantRelationshipValueTransfer::idMerchantRelationship instead.
     *
     * @return int
     */
    public function getIdMerchantRelationshipOrFail()
    {
        if ($this->idMerchantRelationship === null) {
            $this->throwNullValueException(static::ID_MERCHANT_RELATIONSHIP);
        }

        return $this->idMerchantRelationship;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use PriceProductMerchantRelationshipValueTransfer::idMerchantRelationship instead.
     *
     * @return $this
     */
    public function requireIdMerchantRelationship()
    {
        $this->assertPropertyIsSet(self::ID_MERCHANT_RELATIONSHIP);

        return $this;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @param int|null $idCompanyBusinessUnit
     *
     * @return $this
     */
    public function setIdCompanyBusinessUnit($idCompanyBusinessUnit)
    {
        $this->idCompanyBusinessUnit = $idCompanyBusinessUnit;
        $this->modifiedProperties[self::ID_COMPANY_BUSINESS_UNIT] = true;

        return $this;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @return int|null
     */
    public function getIdCompanyBusinessUnit()
    {
        return $this->idCompanyBusinessUnit;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @param int|null $idCompanyBusinessUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCompanyBusinessUnitOrFail($idCompanyBusinessUnit)
    {
        if ($idCompanyBusinessUnit === null) {
            $this->throwNullValueException(static::ID_COMPANY_BUSINESS_UNIT);
        }

        return $this->setIdCompanyBusinessUnit($idCompanyBusinessUnit);
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCompanyBusinessUnitOrFail()
    {
        if ($this->idCompanyBusinessUnit === null) {
            $this->throwNullValueException(static::ID_COMPANY_BUSINESS_UNIT);
        }

        return $this->idCompanyBusinessUnit;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCompanyBusinessUnit()
    {
        $this->assertPropertyIsSet(self::ID_COMPANY_BUSINESS_UNIT);

        return $this;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
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
     * @module PriceProductMerchantRelationshipStorage
     *
     * @return int|null
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
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
     * @module PriceProductMerchantRelationshipStorage
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
     * @module PriceProductMerchantRelationshipStorage
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
     * @module PriceProductMerchantRelationshipStorage
     *
     * @param string|null $priceKey
     *
     * @return $this
     */
    public function setPriceKey($priceKey)
    {
        $this->priceKey = $priceKey;
        $this->modifiedProperties[self::PRICE_KEY] = true;

        return $this;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @return string|null
     */
    public function getPriceKey()
    {
        return $this->priceKey;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @param string|null $priceKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPriceKeyOrFail($priceKey)
    {
        if ($priceKey === null) {
            $this->throwNullValueException(static::PRICE_KEY);
        }

        return $this->setPriceKey($priceKey);
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPriceKeyOrFail()
    {
        if ($this->priceKey === null) {
            $this->throwNullValueException(static::PRICE_KEY);
        }

        return $this->priceKey;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePriceKey()
    {
        $this->assertPropertyIsSet(self::PRICE_KEY);

        return $this;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @param array|null $prices
     *
     * @return $this
     */
    public function setPrices(array $prices = null)
    {
        if ($prices === null) {
            $prices = [];
        }

        $this->prices = $prices;
        $this->modifiedProperties[self::PRICES] = true;

        return $this;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @return array
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @param mixed $prices
     *
     * @return $this
     */
    public function addPrices($prices)
    {
        $this->prices[] = $prices;
        $this->modifiedProperties[self::PRICES] = true;

        return $this;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePrices()
    {
        $this->assertPropertyIsSet(self::PRICES);

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
                case 'storeName':
                case 'idMerchantRelationship':
                case 'idCompanyBusinessUnit':
                case 'idProduct':
                case 'priceKey':
                case 'prices':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'ungroupedPrices':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
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
                case 'storeName':
                case 'idMerchantRelationship':
                case 'idCompanyBusinessUnit':
                case 'idProduct':
                case 'priceKey':
                case 'prices':
                    $values[$arrayKey] = $value;

                    break;
                case 'ungroupedPrices':
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
                case 'storeName':
                case 'idMerchantRelationship':
                case 'idCompanyBusinessUnit':
                case 'idProduct':
                case 'priceKey':
                case 'prices':
                    $values[$arrayKey] = $value;

                    break;
                case 'ungroupedPrices':
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
        $this->ungroupedPrices = $this->ungroupedPrices ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'storeName' => $this->storeName,
            'idMerchantRelationship' => $this->idMerchantRelationship,
            'idCompanyBusinessUnit' => $this->idCompanyBusinessUnit,
            'idProduct' => $this->idProduct,
            'priceKey' => $this->priceKey,
            'prices' => $this->prices,
            'ungroupedPrices' => $this->ungroupedPrices,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'store_name' => $this->storeName,
            'id_merchant_relationship' => $this->idMerchantRelationship,
            'id_company_business_unit' => $this->idCompanyBusinessUnit,
            'id_product' => $this->idProduct,
            'price_key' => $this->priceKey,
            'prices' => $this->prices,
            'ungrouped_prices' => $this->ungroupedPrices,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'store_name' => $this->storeName instanceof AbstractTransfer ? $this->storeName->toArray(true, false) : $this->storeName,
            'id_merchant_relationship' => $this->idMerchantRelationship instanceof AbstractTransfer ? $this->idMerchantRelationship->toArray(true, false) : $this->idMerchantRelationship,
            'id_company_business_unit' => $this->idCompanyBusinessUnit instanceof AbstractTransfer ? $this->idCompanyBusinessUnit->toArray(true, false) : $this->idCompanyBusinessUnit,
            'id_product' => $this->idProduct instanceof AbstractTransfer ? $this->idProduct->toArray(true, false) : $this->idProduct,
            'price_key' => $this->priceKey instanceof AbstractTransfer ? $this->priceKey->toArray(true, false) : $this->priceKey,
            'prices' => $this->prices instanceof AbstractTransfer ? $this->prices->toArray(true, false) : $this->prices,
            'ungrouped_prices' => $this->ungroupedPrices instanceof AbstractTransfer ? $this->ungroupedPrices->toArray(true, false) : $this->addValuesToCollection($this->ungroupedPrices, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'storeName' => $this->storeName instanceof AbstractTransfer ? $this->storeName->toArray(true, true) : $this->storeName,
            'idMerchantRelationship' => $this->idMerchantRelationship instanceof AbstractTransfer ? $this->idMerchantRelationship->toArray(true, true) : $this->idMerchantRelationship,
            'idCompanyBusinessUnit' => $this->idCompanyBusinessUnit instanceof AbstractTransfer ? $this->idCompanyBusinessUnit->toArray(true, true) : $this->idCompanyBusinessUnit,
            'idProduct' => $this->idProduct instanceof AbstractTransfer ? $this->idProduct->toArray(true, true) : $this->idProduct,
            'priceKey' => $this->priceKey instanceof AbstractTransfer ? $this->priceKey->toArray(true, true) : $this->priceKey,
            'prices' => $this->prices instanceof AbstractTransfer ? $this->prices->toArray(true, true) : $this->prices,
            'ungroupedPrices' => $this->ungroupedPrices instanceof AbstractTransfer ? $this->ungroupedPrices->toArray(true, true) : $this->addValuesToCollection($this->ungroupedPrices, true, true),
        ];
    }
}
