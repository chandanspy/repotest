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
class TaxRateTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const COUNTRY = 'country';

    /**
     * @var string
     */
    public const ID_TAX_RATE = 'idTaxRate';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const RATE = 'rate';

    /**
     * @var string
     */
    public const FK_COUNTRY = 'fkCountry';

    /**
     * @var string
     */
    public const CREATED_AT = 'createdAt';

    /**
     * @var string
     */
    public const UPDATED_AT = 'updatedAt';

    /**
     * @var \Generated\Shared\Transfer\CountryTransfer|null
     */
    protected $country;

    /**
     * @var int|null
     */
    protected $idTaxRate;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var float|null
     */
    protected $rate;

    /**
     * @var int|null
     */
    protected $fkCountry;

    /**
     * @var string|null
     */
    protected $createdAt;

    /**
     * @var string|null
     */
    protected $updatedAt;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'country' => 'country',
        'Country' => 'country',
        'id_tax_rate' => 'idTaxRate',
        'idTaxRate' => 'idTaxRate',
        'IdTaxRate' => 'idTaxRate',
        'name' => 'name',
        'Name' => 'name',
        'rate' => 'rate',
        'Rate' => 'rate',
        'fk_country' => 'fkCountry',
        'fkCountry' => 'fkCountry',
        'FkCountry' => 'fkCountry',
        'created_at' => 'createdAt',
        'createdAt' => 'createdAt',
        'CreatedAt' => 'createdAt',
        'updated_at' => 'updatedAt',
        'updatedAt' => 'updatedAt',
        'UpdatedAt' => 'updatedAt',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::COUNTRY => [
            'type' => 'Generated\Shared\Transfer\CountryTransfer',
            'type_shim' => null,
            'name_underscore' => 'country',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_TAX_RATE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_tax_rate',
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
        self::RATE => [
            'type' => 'float',
            'type_shim' => null,
            'name_underscore' => 'rate',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_COUNTRY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_country',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CREATED_AT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'created_at',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::UPDATED_AT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'updated_at',
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
     * @module TaxProductConnector|Tax
     *
     * @param \Generated\Shared\Transfer\CountryTransfer|null $country
     *
     * @return $this
     */
    public function setCountry(CountryTransfer $country = null)
    {
        $this->country = $country;
        $this->modifiedProperties[self::COUNTRY] = true;

        return $this;
    }

    /**
     * @module TaxProductConnector|Tax
     *
     * @return \Generated\Shared\Transfer\CountryTransfer|null
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @module TaxProductConnector|Tax
     *
     * @param \Generated\Shared\Transfer\CountryTransfer $country
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCountryOrFail(CountryTransfer $country)
    {
        return $this->setCountry($country);
    }

    /**
     * @module TaxProductConnector|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CountryTransfer
     */
    public function getCountryOrFail()
    {
        if ($this->country === null) {
            $this->throwNullValueException(static::COUNTRY);
        }

        return $this->country;
    }

    /**
     * @module TaxProductConnector|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCountry()
    {
        $this->assertPropertyIsSet(self::COUNTRY);

        return $this;
    }

    /**
     * @module Tax
     *
     * @param int|null $idTaxRate
     *
     * @return $this
     */
    public function setIdTaxRate($idTaxRate)
    {
        $this->idTaxRate = $idTaxRate;
        $this->modifiedProperties[self::ID_TAX_RATE] = true;

        return $this;
    }

    /**
     * @module Tax
     *
     * @return int|null
     */
    public function getIdTaxRate()
    {
        return $this->idTaxRate;
    }

    /**
     * @module Tax
     *
     * @param int|null $idTaxRate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdTaxRateOrFail($idTaxRate)
    {
        if ($idTaxRate === null) {
            $this->throwNullValueException(static::ID_TAX_RATE);
        }

        return $this->setIdTaxRate($idTaxRate);
    }

    /**
     * @module Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdTaxRateOrFail()
    {
        if ($this->idTaxRate === null) {
            $this->throwNullValueException(static::ID_TAX_RATE);
        }

        return $this->idTaxRate;
    }

    /**
     * @module Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdTaxRate()
    {
        $this->assertPropertyIsSet(self::ID_TAX_RATE);

        return $this;
    }

    /**
     * @module Tax
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
     * @module Tax
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module Tax
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
     * @module Tax
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
     * @module Tax
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
     * @module Tax
     *
     * @param float|null $rate
     *
     * @return $this
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
        $this->modifiedProperties[self::RATE] = true;

        return $this;
    }

    /**
     * @module Tax
     *
     * @return float|null
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @module Tax
     *
     * @param float|null $rate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRateOrFail($rate)
    {
        if ($rate === null) {
            $this->throwNullValueException(static::RATE);
        }

        return $this->setRate($rate);
    }

    /**
     * @module Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return float
     */
    public function getRateOrFail()
    {
        if ($this->rate === null) {
            $this->throwNullValueException(static::RATE);
        }

        return $this->rate;
    }

    /**
     * @module Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRate()
    {
        $this->assertPropertyIsSet(self::RATE);

        return $this;
    }

    /**
     * @module Tax
     *
     * @param int|null $fkCountry
     *
     * @return $this
     */
    public function setFkCountry($fkCountry)
    {
        $this->fkCountry = $fkCountry;
        $this->modifiedProperties[self::FK_COUNTRY] = true;

        return $this;
    }

    /**
     * @module Tax
     *
     * @return int|null
     */
    public function getFkCountry()
    {
        return $this->fkCountry;
    }

    /**
     * @module Tax
     *
     * @param int|null $fkCountry
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCountryOrFail($fkCountry)
    {
        if ($fkCountry === null) {
            $this->throwNullValueException(static::FK_COUNTRY);
        }

        return $this->setFkCountry($fkCountry);
    }

    /**
     * @module Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkCountryOrFail()
    {
        if ($this->fkCountry === null) {
            $this->throwNullValueException(static::FK_COUNTRY);
        }

        return $this->fkCountry;
    }

    /**
     * @module Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCountry()
    {
        $this->assertPropertyIsSet(self::FK_COUNTRY);

        return $this;
    }

    /**
     * @module Tax
     *
     * @param string|null $createdAt
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        $this->modifiedProperties[self::CREATED_AT] = true;

        return $this;
    }

    /**
     * @module Tax
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @module Tax
     *
     * @param string|null $createdAt
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCreatedAtOrFail($createdAt)
    {
        if ($createdAt === null) {
            $this->throwNullValueException(static::CREATED_AT);
        }

        return $this->setCreatedAt($createdAt);
    }

    /**
     * @module Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCreatedAtOrFail()
    {
        if ($this->createdAt === null) {
            $this->throwNullValueException(static::CREATED_AT);
        }

        return $this->createdAt;
    }

    /**
     * @module Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCreatedAt()
    {
        $this->assertPropertyIsSet(self::CREATED_AT);

        return $this;
    }

    /**
     * @module Tax
     *
     * @param string|null $updatedAt
     *
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
        $this->modifiedProperties[self::UPDATED_AT] = true;

        return $this;
    }

    /**
     * @module Tax
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @module Tax
     *
     * @param string|null $updatedAt
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUpdatedAtOrFail($updatedAt)
    {
        if ($updatedAt === null) {
            $this->throwNullValueException(static::UPDATED_AT);
        }

        return $this->setUpdatedAt($updatedAt);
    }

    /**
     * @module Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUpdatedAtOrFail()
    {
        if ($this->updatedAt === null) {
            $this->throwNullValueException(static::UPDATED_AT);
        }

        return $this->updatedAt;
    }

    /**
     * @module Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUpdatedAt()
    {
        $this->assertPropertyIsSet(self::UPDATED_AT);

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
                case 'idTaxRate':
                case 'name':
                case 'rate':
                case 'fkCountry':
                case 'createdAt':
                case 'updatedAt':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'country':
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
                case 'idTaxRate':
                case 'name':
                case 'rate':
                case 'fkCountry':
                case 'createdAt':
                case 'updatedAt':
                    $values[$arrayKey] = $value;

                    break;
                case 'country':
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
                case 'idTaxRate':
                case 'name':
                case 'rate':
                case 'fkCountry':
                case 'createdAt':
                case 'updatedAt':
                    $values[$arrayKey] = $value;

                    break;
                case 'country':
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
            'idTaxRate' => $this->idTaxRate,
            'name' => $this->name,
            'rate' => $this->rate,
            'fkCountry' => $this->fkCountry,
            'createdAt' => $this->createdAt,
            'updatedAt' => $this->updatedAt,
            'country' => $this->country,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_tax_rate' => $this->idTaxRate,
            'name' => $this->name,
            'rate' => $this->rate,
            'fk_country' => $this->fkCountry,
            'created_at' => $this->createdAt,
            'updated_at' => $this->updatedAt,
            'country' => $this->country,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_tax_rate' => $this->idTaxRate instanceof AbstractTransfer ? $this->idTaxRate->toArray(true, false) : $this->idTaxRate,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'rate' => $this->rate instanceof AbstractTransfer ? $this->rate->toArray(true, false) : $this->rate,
            'fk_country' => $this->fkCountry instanceof AbstractTransfer ? $this->fkCountry->toArray(true, false) : $this->fkCountry,
            'created_at' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, false) : $this->createdAt,
            'updated_at' => $this->updatedAt instanceof AbstractTransfer ? $this->updatedAt->toArray(true, false) : $this->updatedAt,
            'country' => $this->country instanceof AbstractTransfer ? $this->country->toArray(true, false) : $this->country,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idTaxRate' => $this->idTaxRate instanceof AbstractTransfer ? $this->idTaxRate->toArray(true, true) : $this->idTaxRate,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'rate' => $this->rate instanceof AbstractTransfer ? $this->rate->toArray(true, true) : $this->rate,
            'fkCountry' => $this->fkCountry instanceof AbstractTransfer ? $this->fkCountry->toArray(true, true) : $this->fkCountry,
            'createdAt' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, true) : $this->createdAt,
            'updatedAt' => $this->updatedAt instanceof AbstractTransfer ? $this->updatedAt->toArray(true, true) : $this->updatedAt,
            'country' => $this->country instanceof AbstractTransfer ? $this->country->toArray(true, true) : $this->country,
        ];
    }
}
