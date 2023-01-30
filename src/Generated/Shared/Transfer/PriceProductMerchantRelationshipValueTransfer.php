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
class PriceProductMerchantRelationshipValueTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const FK_MERCHANT = 'fkMerchant';

    /**
     * @var string
     */
    public const GROSS_PRICE = 'grossPrice';

    /**
     * @var string
     */
    public const NET_PRICE = 'netPrice';

    /**
     * @var string
     */
    public const ID_MERCHANT_RELATIONSHIP = 'idMerchantRelationship';

    /**
     * @var string
     */
    public const PRICE_TYPE = 'priceType';

    /**
     * @var string
     */
    public const PRICE_DATA = 'priceData';

    /**
     * @var string
     */
    public const CURRENCY_CODE = 'currencyCode';

    /**
     * @var int|null
     */
    protected $fkMerchant;

    /**
     * @var int|null
     */
    protected $grossPrice;

    /**
     * @var int|null
     */
    protected $netPrice;

    /**
     * @var int|null
     */
    protected $idMerchantRelationship;

    /**
     * @var string|null
     */
    protected $priceType;

    /**
     * @var string|null
     */
    protected $priceData;

    /**
     * @var string|null
     */
    protected $currencyCode;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'fk_merchant' => 'fkMerchant',
        'fkMerchant' => 'fkMerchant',
        'FkMerchant' => 'fkMerchant',
        'gross_price' => 'grossPrice',
        'grossPrice' => 'grossPrice',
        'GrossPrice' => 'grossPrice',
        'net_price' => 'netPrice',
        'netPrice' => 'netPrice',
        'NetPrice' => 'netPrice',
        'id_merchant_relationship' => 'idMerchantRelationship',
        'idMerchantRelationship' => 'idMerchantRelationship',
        'IdMerchantRelationship' => 'idMerchantRelationship',
        'price_type' => 'priceType',
        'priceType' => 'priceType',
        'PriceType' => 'priceType',
        'price_data' => 'priceData',
        'priceData' => 'priceData',
        'PriceData' => 'priceData',
        'currency_code' => 'currencyCode',
        'currencyCode' => 'currencyCode',
        'CurrencyCode' => 'currencyCode',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::FK_MERCHANT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_merchant',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::GROSS_PRICE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'gross_price',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NET_PRICE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'net_price',
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
        self::PRICE_TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'price_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRICE_DATA => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'price_data',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CURRENCY_CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'currency_code',
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
     * @param int|null $fkMerchant
     *
     * @return $this
     */
    public function setFkMerchant($fkMerchant)
    {
        $this->fkMerchant = $fkMerchant;
        $this->modifiedProperties[self::FK_MERCHANT] = true;

        return $this;
    }

    /**
     * @module Merchant|PriceProductMerchantRelationshipStorage
     *
     * @return int|null
     */
    public function getFkMerchant()
    {
        return $this->fkMerchant;
    }

    /**
     * @module Merchant|PriceProductMerchantRelationshipStorage
     *
     * @param int|null $fkMerchant
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkMerchantOrFail($fkMerchant)
    {
        if ($fkMerchant === null) {
            $this->throwNullValueException(static::FK_MERCHANT);
        }

        return $this->setFkMerchant($fkMerchant);
    }

    /**
     * @module Merchant|PriceProductMerchantRelationshipStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkMerchantOrFail()
    {
        if ($this->fkMerchant === null) {
            $this->throwNullValueException(static::FK_MERCHANT);
        }

        return $this->fkMerchant;
    }

    /**
     * @module Merchant|PriceProductMerchantRelationshipStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkMerchant()
    {
        $this->assertPropertyIsSet(self::FK_MERCHANT);

        return $this;
    }

    /**
     * @module Merchant|PriceProductMerchantRelationshipStorage
     *
     * @param int|null $grossPrice
     *
     * @return $this
     */
    public function setGrossPrice($grossPrice)
    {
        $this->grossPrice = $grossPrice;
        $this->modifiedProperties[self::GROSS_PRICE] = true;

        return $this;
    }

    /**
     * @module Merchant|PriceProductMerchantRelationshipStorage
     *
     * @return int|null
     */
    public function getGrossPrice()
    {
        return $this->grossPrice;
    }

    /**
     * @module Merchant|PriceProductMerchantRelationshipStorage
     *
     * @param int|null $grossPrice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setGrossPriceOrFail($grossPrice)
    {
        if ($grossPrice === null) {
            $this->throwNullValueException(static::GROSS_PRICE);
        }

        return $this->setGrossPrice($grossPrice);
    }

    /**
     * @module Merchant|PriceProductMerchantRelationshipStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getGrossPriceOrFail()
    {
        if ($this->grossPrice === null) {
            $this->throwNullValueException(static::GROSS_PRICE);
        }

        return $this->grossPrice;
    }

    /**
     * @module Merchant|PriceProductMerchantRelationshipStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireGrossPrice()
    {
        $this->assertPropertyIsSet(self::GROSS_PRICE);

        return $this;
    }

    /**
     * @module Merchant|PriceProductMerchantRelationshipStorage
     *
     * @param int|null $netPrice
     *
     * @return $this
     */
    public function setNetPrice($netPrice)
    {
        $this->netPrice = $netPrice;
        $this->modifiedProperties[self::NET_PRICE] = true;

        return $this;
    }

    /**
     * @module Merchant|PriceProductMerchantRelationshipStorage
     *
     * @return int|null
     */
    public function getNetPrice()
    {
        return $this->netPrice;
    }

    /**
     * @module Merchant|PriceProductMerchantRelationshipStorage
     *
     * @param int|null $netPrice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNetPriceOrFail($netPrice)
    {
        if ($netPrice === null) {
            $this->throwNullValueException(static::NET_PRICE);
        }

        return $this->setNetPrice($netPrice);
    }

    /**
     * @module Merchant|PriceProductMerchantRelationshipStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getNetPriceOrFail()
    {
        if ($this->netPrice === null) {
            $this->throwNullValueException(static::NET_PRICE);
        }

        return $this->netPrice;
    }

    /**
     * @module Merchant|PriceProductMerchantRelationshipStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNetPrice()
    {
        $this->assertPropertyIsSet(self::NET_PRICE);

        return $this;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
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
     * @return int|null
     */
    public function getIdMerchantRelationship()
    {
        return $this->idMerchantRelationship;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
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
     * @param string|null $priceType
     *
     * @return $this
     */
    public function setPriceType($priceType)
    {
        $this->priceType = $priceType;
        $this->modifiedProperties[self::PRICE_TYPE] = true;

        return $this;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @return string|null
     */
    public function getPriceType()
    {
        return $this->priceType;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @param string|null $priceType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPriceTypeOrFail($priceType)
    {
        if ($priceType === null) {
            $this->throwNullValueException(static::PRICE_TYPE);
        }

        return $this->setPriceType($priceType);
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPriceTypeOrFail()
    {
        if ($this->priceType === null) {
            $this->throwNullValueException(static::PRICE_TYPE);
        }

        return $this->priceType;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePriceType()
    {
        $this->assertPropertyIsSet(self::PRICE_TYPE);

        return $this;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @param string|null $priceData
     *
     * @return $this
     */
    public function setPriceData($priceData)
    {
        $this->priceData = $priceData;
        $this->modifiedProperties[self::PRICE_DATA] = true;

        return $this;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @return string|null
     */
    public function getPriceData()
    {
        return $this->priceData;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @param string|null $priceData
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPriceDataOrFail($priceData)
    {
        if ($priceData === null) {
            $this->throwNullValueException(static::PRICE_DATA);
        }

        return $this->setPriceData($priceData);
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPriceDataOrFail()
    {
        if ($this->priceData === null) {
            $this->throwNullValueException(static::PRICE_DATA);
        }

        return $this->priceData;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePriceData()
    {
        $this->assertPropertyIsSet(self::PRICE_DATA);

        return $this;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @param string|null $currencyCode
     *
     * @return $this
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        $this->modifiedProperties[self::CURRENCY_CODE] = true;

        return $this;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @param string|null $currencyCode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCurrencyCodeOrFail($currencyCode)
    {
        if ($currencyCode === null) {
            $this->throwNullValueException(static::CURRENCY_CODE);
        }

        return $this->setCurrencyCode($currencyCode);
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCurrencyCodeOrFail()
    {
        if ($this->currencyCode === null) {
            $this->throwNullValueException(static::CURRENCY_CODE);
        }

        return $this->currencyCode;
    }

    /**
     * @module PriceProductMerchantRelationshipStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCurrencyCode()
    {
        $this->assertPropertyIsSet(self::CURRENCY_CODE);

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
                case 'fkMerchant':
                case 'grossPrice':
                case 'netPrice':
                case 'idMerchantRelationship':
                case 'priceType':
                case 'priceData':
                case 'currencyCode':
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
                case 'fkMerchant':
                case 'grossPrice':
                case 'netPrice':
                case 'idMerchantRelationship':
                case 'priceType':
                case 'priceData':
                case 'currencyCode':
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
                case 'fkMerchant':
                case 'grossPrice':
                case 'netPrice':
                case 'idMerchantRelationship':
                case 'priceType':
                case 'priceData':
                case 'currencyCode':
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
            'fkMerchant' => $this->fkMerchant,
            'grossPrice' => $this->grossPrice,
            'netPrice' => $this->netPrice,
            'idMerchantRelationship' => $this->idMerchantRelationship,
            'priceType' => $this->priceType,
            'priceData' => $this->priceData,
            'currencyCode' => $this->currencyCode,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'fk_merchant' => $this->fkMerchant,
            'gross_price' => $this->grossPrice,
            'net_price' => $this->netPrice,
            'id_merchant_relationship' => $this->idMerchantRelationship,
            'price_type' => $this->priceType,
            'price_data' => $this->priceData,
            'currency_code' => $this->currencyCode,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'fk_merchant' => $this->fkMerchant instanceof AbstractTransfer ? $this->fkMerchant->toArray(true, false) : $this->fkMerchant,
            'gross_price' => $this->grossPrice instanceof AbstractTransfer ? $this->grossPrice->toArray(true, false) : $this->grossPrice,
            'net_price' => $this->netPrice instanceof AbstractTransfer ? $this->netPrice->toArray(true, false) : $this->netPrice,
            'id_merchant_relationship' => $this->idMerchantRelationship instanceof AbstractTransfer ? $this->idMerchantRelationship->toArray(true, false) : $this->idMerchantRelationship,
            'price_type' => $this->priceType instanceof AbstractTransfer ? $this->priceType->toArray(true, false) : $this->priceType,
            'price_data' => $this->priceData instanceof AbstractTransfer ? $this->priceData->toArray(true, false) : $this->priceData,
            'currency_code' => $this->currencyCode instanceof AbstractTransfer ? $this->currencyCode->toArray(true, false) : $this->currencyCode,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'fkMerchant' => $this->fkMerchant instanceof AbstractTransfer ? $this->fkMerchant->toArray(true, true) : $this->fkMerchant,
            'grossPrice' => $this->grossPrice instanceof AbstractTransfer ? $this->grossPrice->toArray(true, true) : $this->grossPrice,
            'netPrice' => $this->netPrice instanceof AbstractTransfer ? $this->netPrice->toArray(true, true) : $this->netPrice,
            'idMerchantRelationship' => $this->idMerchantRelationship instanceof AbstractTransfer ? $this->idMerchantRelationship->toArray(true, true) : $this->idMerchantRelationship,
            'priceType' => $this->priceType instanceof AbstractTransfer ? $this->priceType->toArray(true, true) : $this->priceType,
            'priceData' => $this->priceData instanceof AbstractTransfer ? $this->priceData->toArray(true, true) : $this->priceData,
            'currencyCode' => $this->currencyCode instanceof AbstractTransfer ? $this->currencyCode->toArray(true, true) : $this->currencyCode,
        ];
    }
}
