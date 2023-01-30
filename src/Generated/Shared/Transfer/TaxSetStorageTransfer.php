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
class TaxSetStorageTransfer extends AbstractTransfer
{
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
    public const ID_TAX_SET = 'idTaxSet';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\TaxRateStorageTransfer[]
     */
    protected $taxRates;

    /**
     * @var int|null
     */
    protected $idTaxSet;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'tax_rates' => 'taxRates',
        'taxRates' => 'taxRates',
        'TaxRates' => 'taxRates',
        'id_tax_set' => 'idTaxSet',
        'idTaxSet' => 'idTaxSet',
        'IdTaxSet' => 'idTaxSet',
        'name' => 'name',
        'Name' => 'name',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
            'type' => 'Generated\Shared\Transfer\TaxRateStorageTransfer',
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
    ];

    /**
     * @module ProductTaxSetsRestApi|TaxStorage
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
     * @module ProductTaxSetsRestApi|TaxStorage
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @module ProductTaxSetsRestApi|TaxStorage
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
     * @module ProductTaxSetsRestApi|TaxStorage
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
     * @module ProductTaxSetsRestApi|TaxStorage
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
     * @module ProductTaxSetsRestApi|TaxStorage
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\TaxRateStorageTransfer[] $taxRates
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
     * @module ProductTaxSetsRestApi|TaxStorage
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\TaxRateStorageTransfer[]
     */
    public function getTaxRates()
    {
        return $this->taxRates;
    }

    /**
     * @module ProductTaxSetsRestApi|TaxStorage
     *
     * @param \Generated\Shared\Transfer\TaxRateStorageTransfer $taxRate
     *
     * @return $this
     */
    public function addTaxRate(TaxRateStorageTransfer $taxRate)
    {
        $this->taxRates[] = $taxRate;
        $this->modifiedProperties[self::TAX_RATES] = true;

        return $this;
    }

    /**
     * @module ProductTaxSetsRestApi|TaxStorage
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
     * @module TaxStorage
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
     * @module TaxStorage
     *
     * @return int|null
     */
    public function getIdTaxSet()
    {
        return $this->idTaxSet;
    }

    /**
     * @module TaxStorage
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
     * @module TaxStorage
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
     * @module TaxStorage
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
     * @module TaxStorage
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
     * @module TaxStorage
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module TaxStorage
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
     * @module TaxStorage
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
     * @module TaxStorage
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
                case 'uuid':
                case 'idTaxSet':
                case 'name':
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
                case 'uuid':
                case 'idTaxSet':
                case 'name':
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
                case 'uuid':
                case 'idTaxSet':
                case 'name':
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
            'uuid' => $this->uuid,
            'idTaxSet' => $this->idTaxSet,
            'name' => $this->name,
            'taxRates' => $this->taxRates,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'uuid' => $this->uuid,
            'id_tax_set' => $this->idTaxSet,
            'name' => $this->name,
            'tax_rates' => $this->taxRates,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'id_tax_set' => $this->idTaxSet instanceof AbstractTransfer ? $this->idTaxSet->toArray(true, false) : $this->idTaxSet,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'tax_rates' => $this->taxRates instanceof AbstractTransfer ? $this->taxRates->toArray(true, false) : $this->addValuesToCollection($this->taxRates, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'idTaxSet' => $this->idTaxSet instanceof AbstractTransfer ? $this->idTaxSet->toArray(true, true) : $this->idTaxSet,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'taxRates' => $this->taxRates instanceof AbstractTransfer ? $this->taxRates->toArray(true, true) : $this->addValuesToCollection($this->taxRates, true, true),
        ];
    }
}
