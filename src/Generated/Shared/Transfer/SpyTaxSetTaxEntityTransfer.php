<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyTaxSetTaxEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const FK_TAX_RATE = 'fkTaxRate';

    /**
     * @var string
     */
    public const FK_TAX_SET = 'fkTaxSet';

    /**
     * @var string
     */
    public const SPY_TAX_SET = 'spyTaxSet';

    /**
     * @var string
     */
    public const SPY_TAX_RATE = 'spyTaxRate';

    /**
     * @var integer|null
     */
    protected $fkTaxRate;

    /**
     * @var integer|null
     */
    protected $fkTaxSet;

    /**
     * @var \Generated\Shared\Transfer\SpyTaxSetEntityTransfer|null
     */
    protected $spyTaxSet;

    /**
     * @var \Generated\Shared\Transfer\SpyTaxRateEntityTransfer|null
     */
    protected $spyTaxRate;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'fk_tax_rate' => 'fkTaxRate',
        'fkTaxRate' => 'fkTaxRate',
        'FkTaxRate' => 'fkTaxRate',
        'fk_tax_set' => 'fkTaxSet',
        'fkTaxSet' => 'fkTaxSet',
        'FkTaxSet' => 'fkTaxSet',
        'spy_tax_set' => 'spyTaxSet',
        'spyTaxSet' => 'spyTaxSet',
        'SpyTaxSet' => 'spyTaxSet',
        'spy_tax_rate' => 'spyTaxRate',
        'spyTaxRate' => 'spyTaxRate',
        'SpyTaxRate' => 'spyTaxRate',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::FK_TAX_RATE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_tax_rate',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_TAX_SET => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_tax_set',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_TAX_SET => [
            'type' => 'Generated\Shared\Transfer\SpyTaxSetEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_tax_set',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_TAX_RATE => [
            'type' => 'Generated\Shared\Transfer\SpyTaxRateEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_tax_rate',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];
    /**
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\Tax\Persistence\SpyTaxSetTax';


    /**
     * @module 
     *
     * @param integer|null $fkTaxRate
     *
     * @return $this
     */
    public function setFkTaxRate($fkTaxRate)
    {
        $this->fkTaxRate = $fkTaxRate;
        $this->modifiedProperties[self::FK_TAX_RATE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkTaxRate()
    {
        return $this->fkTaxRate;
    }

    /**
     * @module 
     *
     * @param integer|null $fkTaxRate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkTaxRateOrFail($fkTaxRate)
    {
        if ($fkTaxRate === null) {
            $this->throwNullValueException(static::FK_TAX_RATE);
        }

        return $this->setFkTaxRate($fkTaxRate);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkTaxRateOrFail()
    {
        if ($this->fkTaxRate === null) {
            $this->throwNullValueException(static::FK_TAX_RATE);
        }

        return $this->fkTaxRate;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkTaxRate()
    {
        $this->assertPropertyIsSet(self::FK_TAX_RATE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkTaxSet
     *
     * @return $this
     */
    public function setFkTaxSet($fkTaxSet)
    {
        $this->fkTaxSet = $fkTaxSet;
        $this->modifiedProperties[self::FK_TAX_SET] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkTaxSet()
    {
        return $this->fkTaxSet;
    }

    /**
     * @module 
     *
     * @param integer|null $fkTaxSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkTaxSetOrFail($fkTaxSet)
    {
        if ($fkTaxSet === null) {
            $this->throwNullValueException(static::FK_TAX_SET);
        }

        return $this->setFkTaxSet($fkTaxSet);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkTaxSetOrFail()
    {
        if ($this->fkTaxSet === null) {
            $this->throwNullValueException(static::FK_TAX_SET);
        }

        return $this->fkTaxSet;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkTaxSet()
    {
        $this->assertPropertyIsSet(self::FK_TAX_SET);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyTaxSetEntityTransfer|null $spyTaxSet
     *
     * @return $this
     */
    public function setSpyTaxSet(SpyTaxSetEntityTransfer $spyTaxSet = null)
    {
        $this->spyTaxSet = $spyTaxSet;
        $this->modifiedProperties[self::SPY_TAX_SET] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyTaxSetEntityTransfer|null
     */
    public function getSpyTaxSet()
    {
        return $this->spyTaxSet;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyTaxSetEntityTransfer $spyTaxSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyTaxSetOrFail(SpyTaxSetEntityTransfer $spyTaxSet)
    {
        return $this->setSpyTaxSet($spyTaxSet);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyTaxSetEntityTransfer
     */
    public function getSpyTaxSetOrFail()
    {
        if ($this->spyTaxSet === null) {
            $this->throwNullValueException(static::SPY_TAX_SET);
        }

        return $this->spyTaxSet;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyTaxSet()
    {
        $this->assertPropertyIsSet(self::SPY_TAX_SET);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyTaxRateEntityTransfer|null $spyTaxRate
     *
     * @return $this
     */
    public function setSpyTaxRate(SpyTaxRateEntityTransfer $spyTaxRate = null)
    {
        $this->spyTaxRate = $spyTaxRate;
        $this->modifiedProperties[self::SPY_TAX_RATE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyTaxRateEntityTransfer|null
     */
    public function getSpyTaxRate()
    {
        return $this->spyTaxRate;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyTaxRateEntityTransfer $spyTaxRate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyTaxRateOrFail(SpyTaxRateEntityTransfer $spyTaxRate)
    {
        return $this->setSpyTaxRate($spyTaxRate);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyTaxRateEntityTransfer
     */
    public function getSpyTaxRateOrFail()
    {
        if ($this->spyTaxRate === null) {
            $this->throwNullValueException(static::SPY_TAX_RATE);
        }

        return $this->spyTaxRate;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyTaxRate()
    {
        $this->assertPropertyIsSet(self::SPY_TAX_RATE);

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
                case 'fkTaxRate':
                case 'fkTaxSet':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyTaxSet':
                case 'spyTaxRate':
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
                    $this->virtualProperties[$property] = $value;
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
                case 'fkTaxRate':
                case 'fkTaxSet':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyTaxSet':
                case 'spyTaxRate':
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
                case 'fkTaxRate':
                case 'fkTaxSet':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyTaxSet':
                case 'spyTaxRate':
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
            'fkTaxRate' => $this->fkTaxRate,
            'fkTaxSet' => $this->fkTaxSet,
            'spyTaxSet' => $this->spyTaxSet,
            'spyTaxRate' => $this->spyTaxRate,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'fk_tax_rate' => $this->fkTaxRate,
            'fk_tax_set' => $this->fkTaxSet,
            'spy_tax_set' => $this->spyTaxSet,
            'spy_tax_rate' => $this->spyTaxRate,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'fk_tax_rate' => $this->fkTaxRate instanceof AbstractTransfer ? $this->fkTaxRate->toArray(true, false) : $this->fkTaxRate,
            'fk_tax_set' => $this->fkTaxSet instanceof AbstractTransfer ? $this->fkTaxSet->toArray(true, false) : $this->fkTaxSet,
            'spy_tax_set' => $this->spyTaxSet instanceof AbstractTransfer ? $this->spyTaxSet->toArray(true, false) : $this->spyTaxSet,
            'spy_tax_rate' => $this->spyTaxRate instanceof AbstractTransfer ? $this->spyTaxRate->toArray(true, false) : $this->spyTaxRate,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'fkTaxRate' => $this->fkTaxRate instanceof AbstractTransfer ? $this->fkTaxRate->toArray(true, true) : $this->fkTaxRate,
            'fkTaxSet' => $this->fkTaxSet instanceof AbstractTransfer ? $this->fkTaxSet->toArray(true, true) : $this->fkTaxSet,
            'spyTaxSet' => $this->spyTaxSet instanceof AbstractTransfer ? $this->spyTaxSet->toArray(true, true) : $this->spyTaxSet,
            'spyTaxRate' => $this->spyTaxRate instanceof AbstractTransfer ? $this->spyTaxRate->toArray(true, true) : $this->spyTaxRate,
        ];
    }
}
