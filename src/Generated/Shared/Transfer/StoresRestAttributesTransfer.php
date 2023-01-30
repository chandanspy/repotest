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
class StoresRestAttributesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const TIME_ZONE = 'timeZone';

    /**
     * @var string
     */
    public const DEFAULT_CURRENCY = 'defaultCurrency';

    /**
     * @var string
     */
    public const CURRENCIES = 'currencies';

    /**
     * @var string
     */
    public const LOCALES = 'locales';

    /**
     * @var string
     */
    public const COUNTRIES = 'countries';

    /**
     * @var string|null
     */
    protected $timeZone;

    /**
     * @var string|null
     */
    protected $defaultCurrency;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\StoreCurrencyRestAttributesTransfer[]
     */
    protected $currencies;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\StoreLocaleRestAttributesTransfer[]
     */
    protected $locales;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\StoreCountryRestAttributesTransfer[]
     */
    protected $countries;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'time_zone' => 'timeZone',
        'timeZone' => 'timeZone',
        'TimeZone' => 'timeZone',
        'default_currency' => 'defaultCurrency',
        'defaultCurrency' => 'defaultCurrency',
        'DefaultCurrency' => 'defaultCurrency',
        'currencies' => 'currencies',
        'Currencies' => 'currencies',
        'locales' => 'locales',
        'Locales' => 'locales',
        'countries' => 'countries',
        'Countries' => 'countries',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::TIME_ZONE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'time_zone',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DEFAULT_CURRENCY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'default_currency',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CURRENCIES => [
            'type' => 'Generated\Shared\Transfer\StoreCurrencyRestAttributesTransfer',
            'type_shim' => null,
            'name_underscore' => 'currencies',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LOCALES => [
            'type' => 'Generated\Shared\Transfer\StoreLocaleRestAttributesTransfer',
            'type_shim' => null,
            'name_underscore' => 'locales',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COUNTRIES => [
            'type' => 'Generated\Shared\Transfer\StoreCountryRestAttributesTransfer',
            'type_shim' => null,
            'name_underscore' => 'countries',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module StoresRestApi
     *
     * @param string|null $timeZone
     *
     * @return $this
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
        $this->modifiedProperties[self::TIME_ZONE] = true;

        return $this;
    }

    /**
     * @module StoresRestApi
     *
     * @return string|null
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }

    /**
     * @module StoresRestApi
     *
     * @param string|null $timeZone
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTimeZoneOrFail($timeZone)
    {
        if ($timeZone === null) {
            $this->throwNullValueException(static::TIME_ZONE);
        }

        return $this->setTimeZone($timeZone);
    }

    /**
     * @module StoresRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTimeZoneOrFail()
    {
        if ($this->timeZone === null) {
            $this->throwNullValueException(static::TIME_ZONE);
        }

        return $this->timeZone;
    }

    /**
     * @module StoresRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTimeZone()
    {
        $this->assertPropertyIsSet(self::TIME_ZONE);

        return $this;
    }

    /**
     * @module StoresRestApi
     *
     * @param string|null $defaultCurrency
     *
     * @return $this
     */
    public function setDefaultCurrency($defaultCurrency)
    {
        $this->defaultCurrency = $defaultCurrency;
        $this->modifiedProperties[self::DEFAULT_CURRENCY] = true;

        return $this;
    }

    /**
     * @module StoresRestApi
     *
     * @return string|null
     */
    public function getDefaultCurrency()
    {
        return $this->defaultCurrency;
    }

    /**
     * @module StoresRestApi
     *
     * @param string|null $defaultCurrency
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDefaultCurrencyOrFail($defaultCurrency)
    {
        if ($defaultCurrency === null) {
            $this->throwNullValueException(static::DEFAULT_CURRENCY);
        }

        return $this->setDefaultCurrency($defaultCurrency);
    }

    /**
     * @module StoresRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDefaultCurrencyOrFail()
    {
        if ($this->defaultCurrency === null) {
            $this->throwNullValueException(static::DEFAULT_CURRENCY);
        }

        return $this->defaultCurrency;
    }

    /**
     * @module StoresRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDefaultCurrency()
    {
        $this->assertPropertyIsSet(self::DEFAULT_CURRENCY);

        return $this;
    }

    /**
     * @module StoresRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\StoreCurrencyRestAttributesTransfer[] $currencies
     *
     * @return $this
     */
    public function setCurrencies(ArrayObject $currencies)
    {
        $this->currencies = $currencies;
        $this->modifiedProperties[self::CURRENCIES] = true;

        return $this;
    }

    /**
     * @module StoresRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\StoreCurrencyRestAttributesTransfer[]
     */
    public function getCurrencies()
    {
        return $this->currencies;
    }

    /**
     * @module StoresRestApi
     *
     * @param \Generated\Shared\Transfer\StoreCurrencyRestAttributesTransfer $currency
     *
     * @return $this
     */
    public function addCurrency(StoreCurrencyRestAttributesTransfer $currency)
    {
        $this->currencies[] = $currency;
        $this->modifiedProperties[self::CURRENCIES] = true;

        return $this;
    }

    /**
     * @module StoresRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCurrencies()
    {
        $this->assertCollectionPropertyIsSet(self::CURRENCIES);

        return $this;
    }

    /**
     * @module StoresRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\StoreLocaleRestAttributesTransfer[] $locales
     *
     * @return $this
     */
    public function setLocales(ArrayObject $locales)
    {
        $this->locales = $locales;
        $this->modifiedProperties[self::LOCALES] = true;

        return $this;
    }

    /**
     * @module StoresRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\StoreLocaleRestAttributesTransfer[]
     */
    public function getLocales()
    {
        return $this->locales;
    }

    /**
     * @module StoresRestApi
     *
     * @param \Generated\Shared\Transfer\StoreLocaleRestAttributesTransfer $locale
     *
     * @return $this
     */
    public function addLocale(StoreLocaleRestAttributesTransfer $locale)
    {
        $this->locales[] = $locale;
        $this->modifiedProperties[self::LOCALES] = true;

        return $this;
    }

    /**
     * @module StoresRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocales()
    {
        $this->assertCollectionPropertyIsSet(self::LOCALES);

        return $this;
    }

    /**
     * @module StoresRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\StoreCountryRestAttributesTransfer[] $countries
     *
     * @return $this
     */
    public function setCountries(ArrayObject $countries)
    {
        $this->countries = $countries;
        $this->modifiedProperties[self::COUNTRIES] = true;

        return $this;
    }

    /**
     * @module StoresRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\StoreCountryRestAttributesTransfer[]
     */
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     * @module StoresRestApi
     *
     * @param \Generated\Shared\Transfer\StoreCountryRestAttributesTransfer $country
     *
     * @return $this
     */
    public function addCountry(StoreCountryRestAttributesTransfer $country)
    {
        $this->countries[] = $country;
        $this->modifiedProperties[self::COUNTRIES] = true;

        return $this;
    }

    /**
     * @module StoresRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCountries()
    {
        $this->assertCollectionPropertyIsSet(self::COUNTRIES);

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
                case 'timeZone':
                case 'defaultCurrency':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'currencies':
                case 'locales':
                case 'countries':
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
                case 'timeZone':
                case 'defaultCurrency':
                    $values[$arrayKey] = $value;

                    break;
                case 'currencies':
                case 'locales':
                case 'countries':
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
                case 'timeZone':
                case 'defaultCurrency':
                    $values[$arrayKey] = $value;

                    break;
                case 'currencies':
                case 'locales':
                case 'countries':
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
        $this->currencies = $this->currencies ?: new ArrayObject();
        $this->locales = $this->locales ?: new ArrayObject();
        $this->countries = $this->countries ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'timeZone' => $this->timeZone,
            'defaultCurrency' => $this->defaultCurrency,
            'currencies' => $this->currencies,
            'locales' => $this->locales,
            'countries' => $this->countries,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'time_zone' => $this->timeZone,
            'default_currency' => $this->defaultCurrency,
            'currencies' => $this->currencies,
            'locales' => $this->locales,
            'countries' => $this->countries,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'time_zone' => $this->timeZone instanceof AbstractTransfer ? $this->timeZone->toArray(true, false) : $this->timeZone,
            'default_currency' => $this->defaultCurrency instanceof AbstractTransfer ? $this->defaultCurrency->toArray(true, false) : $this->defaultCurrency,
            'currencies' => $this->currencies instanceof AbstractTransfer ? $this->currencies->toArray(true, false) : $this->addValuesToCollection($this->currencies, true, false),
            'locales' => $this->locales instanceof AbstractTransfer ? $this->locales->toArray(true, false) : $this->addValuesToCollection($this->locales, true, false),
            'countries' => $this->countries instanceof AbstractTransfer ? $this->countries->toArray(true, false) : $this->addValuesToCollection($this->countries, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'timeZone' => $this->timeZone instanceof AbstractTransfer ? $this->timeZone->toArray(true, true) : $this->timeZone,
            'defaultCurrency' => $this->defaultCurrency instanceof AbstractTransfer ? $this->defaultCurrency->toArray(true, true) : $this->defaultCurrency,
            'currencies' => $this->currencies instanceof AbstractTransfer ? $this->currencies->toArray(true, true) : $this->addValuesToCollection($this->currencies, true, true),
            'locales' => $this->locales instanceof AbstractTransfer ? $this->locales->toArray(true, true) : $this->addValuesToCollection($this->locales, true, true),
            'countries' => $this->countries instanceof AbstractTransfer ? $this->countries->toArray(true, true) : $this->addValuesToCollection($this->countries, true, true),
        ];
    }
}
