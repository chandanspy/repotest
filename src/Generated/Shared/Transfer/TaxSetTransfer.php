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
class TaxSetTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const EFFECTIVE_RATE = 'effectiveRate';

    /**
     * @var string
     */
    public const AMOUNT = 'amount';

    /**
     * @var string
     */
    public const ID_TAX_SET = 'idTaxSet';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const TAX_RATES = 'taxRates';

    /**
     * @var string
     */
    public const CREATED_AT = 'createdAt';

    /**
     * @var string
     */
    public const UPDATED_AT = 'updatedAt';

    /**
     * @var float|null
     */
    protected $effectiveRate;

    /**
     * @var int|null
     */
    protected $amount;

    /**
     * @var int|null
     */
    protected $idTaxSet;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\TaxRateTransfer[]
     */
    protected $taxRates;

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
        'effective_rate' => 'effectiveRate',
        'effectiveRate' => 'effectiveRate',
        'EffectiveRate' => 'effectiveRate',
        'amount' => 'amount',
        'Amount' => 'amount',
        'id_tax_set' => 'idTaxSet',
        'idTaxSet' => 'idTaxSet',
        'IdTaxSet' => 'idTaxSet',
        'name' => 'name',
        'Name' => 'name',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'tax_rates' => 'taxRates',
        'taxRates' => 'taxRates',
        'TaxRates' => 'taxRates',
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
        self::EFFECTIVE_RATE => [
            'type' => 'float',
            'type_shim' => null,
            'name_underscore' => 'effective_rate',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AMOUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'amount',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_TAX_SET => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_tax_set',
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
        self::UUID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'uuid',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TAX_RATES => [
            'type' => 'Generated\Shared\Transfer\TaxRateTransfer',
            'type_shim' => null,
            'name_underscore' => 'tax_rates',
            'is_collection' => true,
            'is_transfer' => true,
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
     * @module CustomerPage|Sales|Shipment
     *
     * @param float|null $effectiveRate
     *
     * @return $this
     */
    public function setEffectiveRate($effectiveRate)
    {
        $this->effectiveRate = $effectiveRate;
        $this->modifiedProperties[self::EFFECTIVE_RATE] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Sales|Shipment
     *
     * @return float|null
     */
    public function getEffectiveRate()
    {
        return $this->effectiveRate;
    }

    /**
     * @module CustomerPage|Sales|Shipment
     *
     * @param float|null $effectiveRate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setEffectiveRateOrFail($effectiveRate)
    {
        if ($effectiveRate === null) {
            $this->throwNullValueException(static::EFFECTIVE_RATE);
        }

        return $this->setEffectiveRate($effectiveRate);
    }

    /**
     * @module CustomerPage|Sales|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return float
     */
    public function getEffectiveRateOrFail()
    {
        if ($this->effectiveRate === null) {
            $this->throwNullValueException(static::EFFECTIVE_RATE);
        }

        return $this->effectiveRate;
    }

    /**
     * @module CustomerPage|Sales|Shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireEffectiveRate()
    {
        $this->assertPropertyIsSet(self::EFFECTIVE_RATE);

        return $this;
    }

    /**
     * @module CustomerPage|Sales|ShipmentGui|Tax
     *
     * @param int|null $amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        $this->modifiedProperties[self::AMOUNT] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Sales|ShipmentGui|Tax
     *
     * @return int|null
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @module CustomerPage|Sales|ShipmentGui|Tax
     *
     * @param int|null $amount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAmountOrFail($amount)
    {
        if ($amount === null) {
            $this->throwNullValueException(static::AMOUNT);
        }

        return $this->setAmount($amount);
    }

    /**
     * @module CustomerPage|Sales|ShipmentGui|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getAmountOrFail()
    {
        if ($this->amount === null) {
            $this->throwNullValueException(static::AMOUNT);
        }

        return $this->amount;
    }

    /**
     * @module CustomerPage|Sales|ShipmentGui|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAmount()
    {
        $this->assertPropertyIsSet(self::AMOUNT);

        return $this;
    }

    /**
     * @module ProductManagement|ProductOption|SalesOrderThresholdGui|ShipmentGui|Shipment|Tax
     *
     * @param int|null $idTaxSet
     *
     * @return $this
     */
    public function setIdTaxSet($idTaxSet)
    {
        $this->idTaxSet = $idTaxSet;
        $this->modifiedProperties[self::ID_TAX_SET] = true;

        return $this;
    }

    /**
     * @module ProductManagement|ProductOption|SalesOrderThresholdGui|ShipmentGui|Shipment|Tax
     *
     * @return int|null
     */
    public function getIdTaxSet()
    {
        return $this->idTaxSet;
    }

    /**
     * @module ProductManagement|ProductOption|SalesOrderThresholdGui|ShipmentGui|Shipment|Tax
     *
     * @param int|null $idTaxSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdTaxSetOrFail($idTaxSet)
    {
        if ($idTaxSet === null) {
            $this->throwNullValueException(static::ID_TAX_SET);
        }

        return $this->setIdTaxSet($idTaxSet);
    }

    /**
     * @module ProductManagement|ProductOption|SalesOrderThresholdGui|ShipmentGui|Shipment|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdTaxSetOrFail()
    {
        if ($this->idTaxSet === null) {
            $this->throwNullValueException(static::ID_TAX_SET);
        }

        return $this->idTaxSet;
    }

    /**
     * @module ProductManagement|ProductOption|SalesOrderThresholdGui|ShipmentGui|Shipment|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdTaxSet()
    {
        $this->assertPropertyIsSet(self::ID_TAX_SET);

        return $this;
    }

    /**
     * @module ProductManagement|ProductOption|SalesOrderThresholdGui|ShipmentGui|Shipment|Tax
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
     * @module ProductManagement|ProductOption|SalesOrderThresholdGui|ShipmentGui|Shipment|Tax
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module ProductManagement|ProductOption|SalesOrderThresholdGui|ShipmentGui|Shipment|Tax
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
     * @module ProductManagement|ProductOption|SalesOrderThresholdGui|ShipmentGui|Shipment|Tax
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
     * @module ProductManagement|ProductOption|SalesOrderThresholdGui|ShipmentGui|Shipment|Tax
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
     * @module ProductTaxSetsRestApi
     *
     * @param string|null $uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        $this->modifiedProperties[self::UUID] = true;

        return $this;
    }

    /**
     * @module ProductTaxSetsRestApi
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @module ProductTaxSetsRestApi
     *
     * @param string|null $uuid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUuidOrFail($uuid)
    {
        if ($uuid === null) {
            $this->throwNullValueException(static::UUID);
        }

        return $this->setUuid($uuid);
    }

    /**
     * @module ProductTaxSetsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUuidOrFail()
    {
        if ($this->uuid === null) {
            $this->throwNullValueException(static::UUID);
        }

        return $this->uuid;
    }

    /**
     * @module ProductTaxSetsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUuid()
    {
        $this->assertPropertyIsSet(self::UUID);

        return $this;
    }

    /**
     * @module ShipmentGui|TaxProductConnector|Tax
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\TaxRateTransfer[] $taxRates
     *
     * @return $this
     */
    public function setTaxRates(ArrayObject $taxRates)
    {
        $this->taxRates = $taxRates;
        $this->modifiedProperties[self::TAX_RATES] = true;

        return $this;
    }

    /**
     * @module ShipmentGui|TaxProductConnector|Tax
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\TaxRateTransfer[]
     */
    public function getTaxRates()
    {
        return $this->taxRates;
    }

    /**
     * @module ShipmentGui|TaxProductConnector|Tax
     *
     * @param \Generated\Shared\Transfer\TaxRateTransfer $taxRate
     *
     * @return $this
     */
    public function addTaxRate(TaxRateTransfer $taxRate)
    {
        $this->taxRates[] = $taxRate;
        $this->modifiedProperties[self::TAX_RATES] = true;

        return $this;
    }

    /**
     * @module ShipmentGui|TaxProductConnector|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTaxRates()
    {
        $this->assertCollectionPropertyIsSet(self::TAX_RATES);

        return $this;
    }

    /**
     * @module ShipmentGui|Tax
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
     * @module ShipmentGui|Tax
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @module ShipmentGui|Tax
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
     * @module ShipmentGui|Tax
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
     * @module ShipmentGui|Tax
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
     * @module ShipmentGui|Tax
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
     * @module ShipmentGui|Tax
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @module ShipmentGui|Tax
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
     * @module ShipmentGui|Tax
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
     * @module ShipmentGui|Tax
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
                case 'effectiveRate':
                case 'amount':
                case 'idTaxSet':
                case 'name':
                case 'uuid':
                case 'createdAt':
                case 'updatedAt':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'taxRates':
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
                case 'effectiveRate':
                case 'amount':
                case 'idTaxSet':
                case 'name':
                case 'uuid':
                case 'createdAt':
                case 'updatedAt':
                    $values[$arrayKey] = $value;

                    break;
                case 'taxRates':
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
                case 'effectiveRate':
                case 'amount':
                case 'idTaxSet':
                case 'name':
                case 'uuid':
                case 'createdAt':
                case 'updatedAt':
                    $values[$arrayKey] = $value;

                    break;
                case 'taxRates':
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
        $this->taxRates = $this->taxRates ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'effectiveRate' => $this->effectiveRate,
            'amount' => $this->amount,
            'idTaxSet' => $this->idTaxSet,
            'name' => $this->name,
            'uuid' => $this->uuid,
            'createdAt' => $this->createdAt,
            'updatedAt' => $this->updatedAt,
            'taxRates' => $this->taxRates,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'effective_rate' => $this->effectiveRate,
            'amount' => $this->amount,
            'id_tax_set' => $this->idTaxSet,
            'name' => $this->name,
            'uuid' => $this->uuid,
            'created_at' => $this->createdAt,
            'updated_at' => $this->updatedAt,
            'tax_rates' => $this->taxRates,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'effective_rate' => $this->effectiveRate instanceof AbstractTransfer ? $this->effectiveRate->toArray(true, false) : $this->effectiveRate,
            'amount' => $this->amount instanceof AbstractTransfer ? $this->amount->toArray(true, false) : $this->amount,
            'id_tax_set' => $this->idTaxSet instanceof AbstractTransfer ? $this->idTaxSet->toArray(true, false) : $this->idTaxSet,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'created_at' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, false) : $this->createdAt,
            'updated_at' => $this->updatedAt instanceof AbstractTransfer ? $this->updatedAt->toArray(true, false) : $this->updatedAt,
            'tax_rates' => $this->taxRates instanceof AbstractTransfer ? $this->taxRates->toArray(true, false) : $this->addValuesToCollection($this->taxRates, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'effectiveRate' => $this->effectiveRate instanceof AbstractTransfer ? $this->effectiveRate->toArray(true, true) : $this->effectiveRate,
            'amount' => $this->amount instanceof AbstractTransfer ? $this->amount->toArray(true, true) : $this->amount,
            'idTaxSet' => $this->idTaxSet instanceof AbstractTransfer ? $this->idTaxSet->toArray(true, true) : $this->idTaxSet,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'createdAt' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, true) : $this->createdAt,
            'updatedAt' => $this->updatedAt instanceof AbstractTransfer ? $this->updatedAt->toArray(true, true) : $this->updatedAt,
            'taxRates' => $this->taxRates instanceof AbstractTransfer ? $this->taxRates->toArray(true, true) : $this->addValuesToCollection($this->taxRates, true, true),
        ];
    }
}
