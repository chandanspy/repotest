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
class StoreCountryRestAttributesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ISO2_CODE = 'iso2Code';

    /**
     * @var string
     */
    public const ISO3_CODE = 'iso3Code';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const POSTAL_CODE_MANDATORY = 'postalCodeMandatory';

    /**
     * @var string
     */
    public const POSTAL_CODE_REGEX = 'postalCodeRegex';

    /**
     * @var string
     */
    public const REGIONS = 'regions';

    /**
     * @var string|null
     */
    protected $iso2Code;

    /**
     * @var string|null
     */
    protected $iso3Code;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var bool|null
     */
    protected $postalCodeMandatory;

    /**
     * @var string|null
     */
    protected $postalCodeRegex;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\StoreRegionRestAttributesTransfer[]
     */
    protected $regions;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'iso2_code' => 'iso2Code',
        'iso2Code' => 'iso2Code',
        'Iso2Code' => 'iso2Code',
        'iso3_code' => 'iso3Code',
        'iso3Code' => 'iso3Code',
        'Iso3Code' => 'iso3Code',
        'name' => 'name',
        'Name' => 'name',
        'postal_code_mandatory' => 'postalCodeMandatory',
        'postalCodeMandatory' => 'postalCodeMandatory',
        'PostalCodeMandatory' => 'postalCodeMandatory',
        'postal_code_regex' => 'postalCodeRegex',
        'postalCodeRegex' => 'postalCodeRegex',
        'PostalCodeRegex' => 'postalCodeRegex',
        'regions' => 'regions',
        'Regions' => 'regions',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ISO2_CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'iso2_code',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ISO3_CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'iso3_code',
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
        self::POSTAL_CODE_MANDATORY => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'postal_code_mandatory',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::POSTAL_CODE_REGEX => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'postal_code_regex',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REGIONS => [
            'type' => 'Generated\Shared\Transfer\StoreRegionRestAttributesTransfer',
            'type_shim' => null,
            'name_underscore' => 'regions',
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
     * @param string|null $iso2Code
     *
     * @return $this
     */
    public function setIso2Code($iso2Code)
    {
        $this->iso2Code = $iso2Code;
        $this->modifiedProperties[self::ISO2_CODE] = true;

        return $this;
    }

    /**
     * @module StoresRestApi
     *
     * @return string|null
     */
    public function getIso2Code()
    {
        return $this->iso2Code;
    }

    /**
     * @module StoresRestApi
     *
     * @param string|null $iso2Code
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIso2CodeOrFail($iso2Code)
    {
        if ($iso2Code === null) {
            $this->throwNullValueException(static::ISO2_CODE);
        }

        return $this->setIso2Code($iso2Code);
    }

    /**
     * @module StoresRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIso2CodeOrFail()
    {
        if ($this->iso2Code === null) {
            $this->throwNullValueException(static::ISO2_CODE);
        }

        return $this->iso2Code;
    }

    /**
     * @module StoresRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIso2Code()
    {
        $this->assertPropertyIsSet(self::ISO2_CODE);

        return $this;
    }

    /**
     * @module StoresRestApi
     *
     * @param string|null $iso3Code
     *
     * @return $this
     */
    public function setIso3Code($iso3Code)
    {
        $this->iso3Code = $iso3Code;
        $this->modifiedProperties[self::ISO3_CODE] = true;

        return $this;
    }

    /**
     * @module StoresRestApi
     *
     * @return string|null
     */
    public function getIso3Code()
    {
        return $this->iso3Code;
    }

    /**
     * @module StoresRestApi
     *
     * @param string|null $iso3Code
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIso3CodeOrFail($iso3Code)
    {
        if ($iso3Code === null) {
            $this->throwNullValueException(static::ISO3_CODE);
        }

        return $this->setIso3Code($iso3Code);
    }

    /**
     * @module StoresRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIso3CodeOrFail()
    {
        if ($this->iso3Code === null) {
            $this->throwNullValueException(static::ISO3_CODE);
        }

        return $this->iso3Code;
    }

    /**
     * @module StoresRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIso3Code()
    {
        $this->assertPropertyIsSet(self::ISO3_CODE);

        return $this;
    }

    /**
     * @module StoresRestApi
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
     * @module StoresRestApi
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module StoresRestApi
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
     * @module StoresRestApi
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
     * @module StoresRestApi
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
     * @module StoresRestApi
     *
     * @param bool|null $postalCodeMandatory
     *
     * @return $this
     */
    public function setPostalCodeMandatory($postalCodeMandatory)
    {
        $this->postalCodeMandatory = $postalCodeMandatory;
        $this->modifiedProperties[self::POSTAL_CODE_MANDATORY] = true;

        return $this;
    }

    /**
     * @module StoresRestApi
     *
     * @return bool|null
     */
    public function getPostalCodeMandatory()
    {
        return $this->postalCodeMandatory;
    }

    /**
     * @module StoresRestApi
     *
     * @param bool|null $postalCodeMandatory
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPostalCodeMandatoryOrFail($postalCodeMandatory)
    {
        if ($postalCodeMandatory === null) {
            $this->throwNullValueException(static::POSTAL_CODE_MANDATORY);
        }

        return $this->setPostalCodeMandatory($postalCodeMandatory);
    }

    /**
     * @module StoresRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getPostalCodeMandatoryOrFail()
    {
        if ($this->postalCodeMandatory === null) {
            $this->throwNullValueException(static::POSTAL_CODE_MANDATORY);
        }

        return $this->postalCodeMandatory;
    }

    /**
     * @module StoresRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePostalCodeMandatory()
    {
        $this->assertPropertyIsSet(self::POSTAL_CODE_MANDATORY);

        return $this;
    }

    /**
     * @module StoresRestApi
     *
     * @param string|null $postalCodeRegex
     *
     * @return $this
     */
    public function setPostalCodeRegex($postalCodeRegex)
    {
        $this->postalCodeRegex = $postalCodeRegex;
        $this->modifiedProperties[self::POSTAL_CODE_REGEX] = true;

        return $this;
    }

    /**
     * @module StoresRestApi
     *
     * @return string|null
     */
    public function getPostalCodeRegex()
    {
        return $this->postalCodeRegex;
    }

    /**
     * @module StoresRestApi
     *
     * @param string|null $postalCodeRegex
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPostalCodeRegexOrFail($postalCodeRegex)
    {
        if ($postalCodeRegex === null) {
            $this->throwNullValueException(static::POSTAL_CODE_REGEX);
        }

        return $this->setPostalCodeRegex($postalCodeRegex);
    }

    /**
     * @module StoresRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPostalCodeRegexOrFail()
    {
        if ($this->postalCodeRegex === null) {
            $this->throwNullValueException(static::POSTAL_CODE_REGEX);
        }

        return $this->postalCodeRegex;
    }

    /**
     * @module StoresRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePostalCodeRegex()
    {
        $this->assertPropertyIsSet(self::POSTAL_CODE_REGEX);

        return $this;
    }

    /**
     * @module StoresRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\StoreRegionRestAttributesTransfer[] $regions
     *
     * @return $this
     */
    public function setRegions(ArrayObject $regions)
    {
        $this->regions = $regions;
        $this->modifiedProperties[self::REGIONS] = true;

        return $this;
    }

    /**
     * @module StoresRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\StoreRegionRestAttributesTransfer[]
     */
    public function getRegions()
    {
        return $this->regions;
    }

    /**
     * @module StoresRestApi
     *
     * @param \Generated\Shared\Transfer\StoreRegionRestAttributesTransfer $region
     *
     * @return $this
     */
    public function addRegion(StoreRegionRestAttributesTransfer $region)
    {
        $this->regions[] = $region;
        $this->modifiedProperties[self::REGIONS] = true;

        return $this;
    }

    /**
     * @module StoresRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRegions()
    {
        $this->assertCollectionPropertyIsSet(self::REGIONS);

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
                case 'iso2Code':
                case 'iso3Code':
                case 'name':
                case 'postalCodeMandatory':
                case 'postalCodeRegex':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'regions':
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
                case 'iso2Code':
                case 'iso3Code':
                case 'name':
                case 'postalCodeMandatory':
                case 'postalCodeRegex':
                    $values[$arrayKey] = $value;

                    break;
                case 'regions':
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
                case 'iso2Code':
                case 'iso3Code':
                case 'name':
                case 'postalCodeMandatory':
                case 'postalCodeRegex':
                    $values[$arrayKey] = $value;

                    break;
                case 'regions':
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
        $this->regions = $this->regions ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'iso2Code' => $this->iso2Code,
            'iso3Code' => $this->iso3Code,
            'name' => $this->name,
            'postalCodeMandatory' => $this->postalCodeMandatory,
            'postalCodeRegex' => $this->postalCodeRegex,
            'regions' => $this->regions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'iso2_code' => $this->iso2Code,
            'iso3_code' => $this->iso3Code,
            'name' => $this->name,
            'postal_code_mandatory' => $this->postalCodeMandatory,
            'postal_code_regex' => $this->postalCodeRegex,
            'regions' => $this->regions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'iso2_code' => $this->iso2Code instanceof AbstractTransfer ? $this->iso2Code->toArray(true, false) : $this->iso2Code,
            'iso3_code' => $this->iso3Code instanceof AbstractTransfer ? $this->iso3Code->toArray(true, false) : $this->iso3Code,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'postal_code_mandatory' => $this->postalCodeMandatory instanceof AbstractTransfer ? $this->postalCodeMandatory->toArray(true, false) : $this->postalCodeMandatory,
            'postal_code_regex' => $this->postalCodeRegex instanceof AbstractTransfer ? $this->postalCodeRegex->toArray(true, false) : $this->postalCodeRegex,
            'regions' => $this->regions instanceof AbstractTransfer ? $this->regions->toArray(true, false) : $this->addValuesToCollection($this->regions, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'iso2Code' => $this->iso2Code instanceof AbstractTransfer ? $this->iso2Code->toArray(true, true) : $this->iso2Code,
            'iso3Code' => $this->iso3Code instanceof AbstractTransfer ? $this->iso3Code->toArray(true, true) : $this->iso3Code,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'postalCodeMandatory' => $this->postalCodeMandatory instanceof AbstractTransfer ? $this->postalCodeMandatory->toArray(true, true) : $this->postalCodeMandatory,
            'postalCodeRegex' => $this->postalCodeRegex instanceof AbstractTransfer ? $this->postalCodeRegex->toArray(true, true) : $this->postalCodeRegex,
            'regions' => $this->regions instanceof AbstractTransfer ? $this->regions->toArray(true, true) : $this->addValuesToCollection($this->regions, true, true),
        ];
    }
}
