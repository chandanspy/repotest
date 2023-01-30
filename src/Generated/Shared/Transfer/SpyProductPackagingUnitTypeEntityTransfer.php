<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyProductPackagingUnitTypeEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_PACKAGING_UNIT_TYPE = 'idProductPackagingUnitType';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const SPY_PRODUCT_PACKAGING_UNITS = 'spyProductPackagingUnits';

    /**
     * @var integer|null
     */
    protected $idProductPackagingUnitType;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductPackagingUnitEntityTransfer[]
     */
    protected $spyProductPackagingUnits;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_packaging_unit_type' => 'idProductPackagingUnitType',
        'idProductPackagingUnitType' => 'idProductPackagingUnitType',
        'IdProductPackagingUnitType' => 'idProductPackagingUnitType',
        'name' => 'name',
        'Name' => 'name',
        'spy_product_packaging_units' => 'spyProductPackagingUnits',
        'spyProductPackagingUnits' => 'spyProductPackagingUnits',
        'SpyProductPackagingUnits' => 'spyProductPackagingUnits',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_PACKAGING_UNIT_TYPE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_product_packaging_unit_type',
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
        self::SPY_PRODUCT_PACKAGING_UNITS => [
            'type' => 'Generated\Shared\Transfer\SpyProductPackagingUnitEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_packaging_units',
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
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\ProductPackagingUnit\Persistence\SpyProductPackagingUnitType';


    /**
     * @module 
     *
     * @param integer|null $idProductPackagingUnitType
     *
     * @return $this
     */
    public function setIdProductPackagingUnitType($idProductPackagingUnitType)
    {
        $this->idProductPackagingUnitType = $idProductPackagingUnitType;
        $this->modifiedProperties[self::ID_PRODUCT_PACKAGING_UNIT_TYPE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdProductPackagingUnitType()
    {
        return $this->idProductPackagingUnitType;
    }

    /**
     * @module 
     *
     * @param integer|null $idProductPackagingUnitType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductPackagingUnitTypeOrFail($idProductPackagingUnitType)
    {
        if ($idProductPackagingUnitType === null) {
            $this->throwNullValueException(static::ID_PRODUCT_PACKAGING_UNIT_TYPE);
        }

        return $this->setIdProductPackagingUnitType($idProductPackagingUnitType);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdProductPackagingUnitTypeOrFail()
    {
        if ($this->idProductPackagingUnitType === null) {
            $this->throwNullValueException(static::ID_PRODUCT_PACKAGING_UNIT_TYPE);
        }

        return $this->idProductPackagingUnitType;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductPackagingUnitType()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_PACKAGING_UNIT_TYPE);

        return $this;
    }

    /**
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductPackagingUnitEntityTransfer[] $spyProductPackagingUnits
     *
     * @return $this
     */
    public function setSpyProductPackagingUnits(ArrayObject $spyProductPackagingUnits)
    {
        $this->spyProductPackagingUnits = $spyProductPackagingUnits;
        $this->modifiedProperties[self::SPY_PRODUCT_PACKAGING_UNITS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductPackagingUnitEntityTransfer[]
     */
    public function getSpyProductPackagingUnits()
    {
        return $this->spyProductPackagingUnits;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductPackagingUnitEntityTransfer $spyProductPackagingUnits
     *
     * @return $this
     */
    public function addSpyProductPackagingUnits(SpyProductPackagingUnitEntityTransfer $spyProductPackagingUnits)
    {
        $this->spyProductPackagingUnits[] = $spyProductPackagingUnits;
        $this->modifiedProperties[self::SPY_PRODUCT_PACKAGING_UNITS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductPackagingUnits()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_PACKAGING_UNITS);

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
                case 'idProductPackagingUnitType':
                case 'name':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyProductPackagingUnits':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
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
                case 'idProductPackagingUnitType':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyProductPackagingUnits':
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
                case 'idProductPackagingUnitType':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyProductPackagingUnits':
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
        $this->spyProductPackagingUnits = $this->spyProductPackagingUnits ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idProductPackagingUnitType' => $this->idProductPackagingUnitType,
            'name' => $this->name,
            'spyProductPackagingUnits' => $this->spyProductPackagingUnits,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_packaging_unit_type' => $this->idProductPackagingUnitType,
            'name' => $this->name,
            'spy_product_packaging_units' => $this->spyProductPackagingUnits,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_packaging_unit_type' => $this->idProductPackagingUnitType instanceof AbstractTransfer ? $this->idProductPackagingUnitType->toArray(true, false) : $this->idProductPackagingUnitType,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'spy_product_packaging_units' => $this->spyProductPackagingUnits instanceof AbstractTransfer ? $this->spyProductPackagingUnits->toArray(true, false) : $this->addValuesToCollection($this->spyProductPackagingUnits, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductPackagingUnitType' => $this->idProductPackagingUnitType instanceof AbstractTransfer ? $this->idProductPackagingUnitType->toArray(true, true) : $this->idProductPackagingUnitType,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'spyProductPackagingUnits' => $this->spyProductPackagingUnits instanceof AbstractTransfer ? $this->spyProductPackagingUnits->toArray(true, true) : $this->addValuesToCollection($this->spyProductPackagingUnits, true, true),
        ];
    }
}
