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
class CurrencyTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const CODE = 'code';

    /**
     * @var string
     */
    public const SYMBOL = 'symbol';

    /**
     * @var string
     */
    public const ID_CURRENCY = 'idCurrency';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const IS_DEFAULT = 'isDefault';

    /**
     * @var string
     */
    public const FRACTION_DIGITS = 'fractionDigits';

    /**
     * @var string|null
     */
    protected $code;

    /**
     * @var string|null
     */
    protected $symbol;

    /**
     * @var int|null
     */
    protected $idCurrency;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var bool|null
     */
    protected $isDefault;

    /**
     * @var int|null
     */
    protected $fractionDigits;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'code' => 'code',
        'Code' => 'code',
        'symbol' => 'symbol',
        'Symbol' => 'symbol',
        'id_currency' => 'idCurrency',
        'idCurrency' => 'idCurrency',
        'IdCurrency' => 'idCurrency',
        'name' => 'name',
        'Name' => 'name',
        'is_default' => 'isDefault',
        'isDefault' => 'isDefault',
        'IsDefault' => 'isDefault',
        'fraction_digits' => 'fractionDigits',
        'fractionDigits' => 'fractionDigits',
        'FractionDigits' => 'fractionDigits',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'code',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SYMBOL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'symbol',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_CURRENCY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_currency',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_DEFAULT => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_default',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FRACTION_DIGITS => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fraction_digits',
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
     * @module CurrencyWidget|MoneyWidget|PriceProductVolumeWidget|QuoteApprovalWidget|ShoppingListPage|CartCurrencyConnector|CartsRestApi|CatalogPriceProductConnector|CheckoutRestApi|ConfigurableBundleCartsRestApi|Currency|Discount|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|Money|Payment|PriceCartConnector|PriceProductMerchantRelationshipStorage|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProduct|ProductBundle|ProductManagement|ProductOptionCartConnector|ProductOptionStorage|ProductOption|ProductOptionsRestApi|QuoteApproval|Quote|SalesOrderThresholdGui|SalesOrderThreshold|Sales|ShipmentCartConnector|Shipment|ShipmentsRestApi|ZedRequest
     *
     * @param string|null $code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        $this->modifiedProperties[self::CODE] = true;

        return $this;
    }

    /**
     * @module CurrencyWidget|MoneyWidget|PriceProductVolumeWidget|QuoteApprovalWidget|ShoppingListPage|CartCurrencyConnector|CartsRestApi|CatalogPriceProductConnector|CheckoutRestApi|ConfigurableBundleCartsRestApi|Currency|Discount|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|Money|Payment|PriceCartConnector|PriceProductMerchantRelationshipStorage|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProduct|ProductBundle|ProductManagement|ProductOptionCartConnector|ProductOptionStorage|ProductOption|ProductOptionsRestApi|QuoteApproval|Quote|SalesOrderThresholdGui|SalesOrderThreshold|Sales|ShipmentCartConnector|Shipment|ShipmentsRestApi|ZedRequest
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @module CurrencyWidget|MoneyWidget|PriceProductVolumeWidget|QuoteApprovalWidget|ShoppingListPage|CartCurrencyConnector|CartsRestApi|CatalogPriceProductConnector|CheckoutRestApi|ConfigurableBundleCartsRestApi|Currency|Discount|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|Money|Payment|PriceCartConnector|PriceProductMerchantRelationshipStorage|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProduct|ProductBundle|ProductManagement|ProductOptionCartConnector|ProductOptionStorage|ProductOption|ProductOptionsRestApi|QuoteApproval|Quote|SalesOrderThresholdGui|SalesOrderThreshold|Sales|ShipmentCartConnector|Shipment|ShipmentsRestApi|ZedRequest
     *
     * @param string|null $code
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCodeOrFail($code)
    {
        if ($code === null) {
            $this->throwNullValueException(static::CODE);
        }

        return $this->setCode($code);
    }

    /**
     * @module CurrencyWidget|MoneyWidget|PriceProductVolumeWidget|QuoteApprovalWidget|ShoppingListPage|CartCurrencyConnector|CartsRestApi|CatalogPriceProductConnector|CheckoutRestApi|ConfigurableBundleCartsRestApi|Currency|Discount|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|Money|Payment|PriceCartConnector|PriceProductMerchantRelationshipStorage|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProduct|ProductBundle|ProductManagement|ProductOptionCartConnector|ProductOptionStorage|ProductOption|ProductOptionsRestApi|QuoteApproval|Quote|SalesOrderThresholdGui|SalesOrderThreshold|Sales|ShipmentCartConnector|Shipment|ShipmentsRestApi|ZedRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCodeOrFail()
    {
        if ($this->code === null) {
            $this->throwNullValueException(static::CODE);
        }

        return $this->code;
    }

    /**
     * @module CurrencyWidget|MoneyWidget|PriceProductVolumeWidget|QuoteApprovalWidget|ShoppingListPage|CartCurrencyConnector|CartsRestApi|CatalogPriceProductConnector|CheckoutRestApi|ConfigurableBundleCartsRestApi|Currency|Discount|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|Money|Payment|PriceCartConnector|PriceProductMerchantRelationshipStorage|PriceProductScheduleGui|PriceProductSchedule|PriceProductStorage|PriceProduct|ProductBundle|ProductManagement|ProductOptionCartConnector|ProductOptionStorage|ProductOption|ProductOptionsRestApi|QuoteApproval|Quote|SalesOrderThresholdGui|SalesOrderThreshold|Sales|ShipmentCartConnector|Shipment|ShipmentsRestApi|ZedRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCode()
    {
        $this->assertPropertyIsSet(self::CODE);

        return $this;
    }

    /**
     * @module MoneyWidget|Currency|Money|QuoteApproval
     *
     * @param string|null $symbol
     *
     * @return $this
     */
    public function setSymbol($symbol)
    {
        $this->symbol = $symbol;
        $this->modifiedProperties[self::SYMBOL] = true;

        return $this;
    }

    /**
     * @module MoneyWidget|Currency|Money|QuoteApproval
     *
     * @return string|null
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * @module MoneyWidget|Currency|Money|QuoteApproval
     *
     * @param string|null $symbol
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSymbolOrFail($symbol)
    {
        if ($symbol === null) {
            $this->throwNullValueException(static::SYMBOL);
        }

        return $this->setSymbol($symbol);
    }

    /**
     * @module MoneyWidget|Currency|Money|QuoteApproval
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSymbolOrFail()
    {
        if ($this->symbol === null) {
            $this->throwNullValueException(static::SYMBOL);
        }

        return $this->symbol;
    }

    /**
     * @module MoneyWidget|Currency|Money|QuoteApproval
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSymbol()
    {
        $this->assertPropertyIsSet(self::SYMBOL);

        return $this;
    }

    /**
     * @module Currency|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|Money|PriceProductScheduleGui|PriceProductSchedule|PriceProductVolumeGui|PriceProduct|ProductManagement|ProductOption|SalesOrderThresholdGui|SalesOrderThreshold|Shipment
     *
     * @param int|null $idCurrency
     *
     * @return $this
     */
    public function setIdCurrency($idCurrency)
    {
        $this->idCurrency = $idCurrency;
        $this->modifiedProperties[self::ID_CURRENCY] = true;

        return $this;
    }

    /**
     * @module Currency|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|Money|PriceProductScheduleGui|PriceProductSchedule|PriceProductVolumeGui|PriceProduct|ProductManagement|ProductOption|SalesOrderThresholdGui|SalesOrderThreshold|Shipment
     *
     * @return int|null
     */
    public function getIdCurrency()
    {
        return $this->idCurrency;
    }

    /**
     * @module Currency|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|Money|PriceProductScheduleGui|PriceProductSchedule|PriceProductVolumeGui|PriceProduct|ProductManagement|ProductOption|SalesOrderThresholdGui|SalesOrderThreshold|Shipment
     *
     * @param int|null $idCurrency
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCurrencyOrFail($idCurrency)
    {
        if ($idCurrency === null) {
            $this->throwNullValueException(static::ID_CURRENCY);
        }

        return $this->setIdCurrency($idCurrency);
    }

    /**
     * @module Currency|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|Money|PriceProductScheduleGui|PriceProductSchedule|PriceProductVolumeGui|PriceProduct|ProductManagement|ProductOption|SalesOrderThresholdGui|SalesOrderThreshold|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCurrencyOrFail()
    {
        if ($this->idCurrency === null) {
            $this->throwNullValueException(static::ID_CURRENCY);
        }

        return $this->idCurrency;
    }

    /**
     * @module Currency|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold|Money|PriceProductScheduleGui|PriceProductSchedule|PriceProductVolumeGui|PriceProduct|ProductManagement|ProductOption|SalesOrderThresholdGui|SalesOrderThreshold|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCurrency()
    {
        $this->assertPropertyIsSet(self::ID_CURRENCY);

        return $this;
    }

    /**
     * @module Currency|Discount|MerchantRelationshipSalesOrderThresholdGui|PriceProduct|SalesOrderThresholdGui
     *
     * @param string|null $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        $this->modifiedProperties[self::NAME] = true;

        return $this;
    }

    /**
     * @module Currency|Discount|MerchantRelationshipSalesOrderThresholdGui|PriceProduct|SalesOrderThresholdGui
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module Currency|Discount|MerchantRelationshipSalesOrderThresholdGui|PriceProduct|SalesOrderThresholdGui
     *
     * @param string|null $name
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNameOrFail($name)
    {
        if ($name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->setName($name);
    }

    /**
     * @module Currency|Discount|MerchantRelationshipSalesOrderThresholdGui|PriceProduct|SalesOrderThresholdGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNameOrFail()
    {
        if ($this->name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->name;
    }

    /**
     * @module Currency|Discount|MerchantRelationshipSalesOrderThresholdGui|PriceProduct|SalesOrderThresholdGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireName()
    {
        $this->assertPropertyIsSet(self::NAME);

        return $this;
    }

    /**
     * @module Currency
     *
     * @param bool|null $isDefault
     *
     * @return $this
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;
        $this->modifiedProperties[self::IS_DEFAULT] = true;

        return $this;
    }

    /**
     * @module Currency
     *
     * @return bool|null
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * @module Currency
     *
     * @param bool|null $isDefault
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsDefaultOrFail($isDefault)
    {
        if ($isDefault === null) {
            $this->throwNullValueException(static::IS_DEFAULT);
        }

        return $this->setIsDefault($isDefault);
    }

    /**
     * @module Currency
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsDefaultOrFail()
    {
        if ($this->isDefault === null) {
            $this->throwNullValueException(static::IS_DEFAULT);
        }

        return $this->isDefault;
    }

    /**
     * @module Currency
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsDefault()
    {
        $this->assertPropertyIsSet(self::IS_DEFAULT);

        return $this;
    }

    /**
     * @module Currency|Money|PriceProductVolumeGui|ProductManagement
     *
     * @param int|null $fractionDigits
     *
     * @return $this
     */
    public function setFractionDigits($fractionDigits)
    {
        $this->fractionDigits = $fractionDigits;
        $this->modifiedProperties[self::FRACTION_DIGITS] = true;

        return $this;
    }

    /**
     * @module Currency|Money|PriceProductVolumeGui|ProductManagement
     *
     * @return int|null
     */
    public function getFractionDigits()
    {
        return $this->fractionDigits;
    }

    /**
     * @module Currency|Money|PriceProductVolumeGui|ProductManagement
     *
     * @param int|null $fractionDigits
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFractionDigitsOrFail($fractionDigits)
    {
        if ($fractionDigits === null) {
            $this->throwNullValueException(static::FRACTION_DIGITS);
        }

        return $this->setFractionDigits($fractionDigits);
    }

    /**
     * @module Currency|Money|PriceProductVolumeGui|ProductManagement
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFractionDigitsOrFail()
    {
        if ($this->fractionDigits === null) {
            $this->throwNullValueException(static::FRACTION_DIGITS);
        }

        return $this->fractionDigits;
    }

    /**
     * @module Currency|Money|PriceProductVolumeGui|ProductManagement
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFractionDigits()
    {
        $this->assertPropertyIsSet(self::FRACTION_DIGITS);

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
                case 'code':
                case 'symbol':
                case 'idCurrency':
                case 'name':
                case 'isDefault':
                case 'fractionDigits':
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
                case 'code':
                case 'symbol':
                case 'idCurrency':
                case 'name':
                case 'isDefault':
                case 'fractionDigits':
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
                case 'code':
                case 'symbol':
                case 'idCurrency':
                case 'name':
                case 'isDefault':
                case 'fractionDigits':
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
            'code' => $this->code,
            'symbol' => $this->symbol,
            'idCurrency' => $this->idCurrency,
            'name' => $this->name,
            'isDefault' => $this->isDefault,
            'fractionDigits' => $this->fractionDigits,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'code' => $this->code,
            'symbol' => $this->symbol,
            'id_currency' => $this->idCurrency,
            'name' => $this->name,
            'is_default' => $this->isDefault,
            'fraction_digits' => $this->fractionDigits,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'code' => $this->code instanceof AbstractTransfer ? $this->code->toArray(true, false) : $this->code,
            'symbol' => $this->symbol instanceof AbstractTransfer ? $this->symbol->toArray(true, false) : $this->symbol,
            'id_currency' => $this->idCurrency instanceof AbstractTransfer ? $this->idCurrency->toArray(true, false) : $this->idCurrency,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'is_default' => $this->isDefault instanceof AbstractTransfer ? $this->isDefault->toArray(true, false) : $this->isDefault,
            'fraction_digits' => $this->fractionDigits instanceof AbstractTransfer ? $this->fractionDigits->toArray(true, false) : $this->fractionDigits,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'code' => $this->code instanceof AbstractTransfer ? $this->code->toArray(true, true) : $this->code,
            'symbol' => $this->symbol instanceof AbstractTransfer ? $this->symbol->toArray(true, true) : $this->symbol,
            'idCurrency' => $this->idCurrency instanceof AbstractTransfer ? $this->idCurrency->toArray(true, true) : $this->idCurrency,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'isDefault' => $this->isDefault instanceof AbstractTransfer ? $this->isDefault->toArray(true, true) : $this->isDefault,
            'fractionDigits' => $this->fractionDigits instanceof AbstractTransfer ? $this->fractionDigits->toArray(true, true) : $this->fractionDigits,
        ];
    }
}
