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
class CompanyBusinessUnitTreeNodeTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const CHILDREN = 'children';

    /**
     * @var string
     */
    public const LEVEL = 'level';

    /**
     * @var string
     */
    public const COMPANY_BUSINESS_UNIT = 'companyBusinessUnit';

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\CompanyBusinessUnitTreeNodeTransfer[]
     */
    protected $children;

    /**
     * @var int|null
     */
    protected $level;

    /**
     * @var \Generated\Shared\Transfer\CompanyBusinessUnitTransfer|null
     */
    protected $companyBusinessUnit;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'children' => 'children',
        'Children' => 'children',
        'level' => 'level',
        'Level' => 'level',
        'company_business_unit' => 'companyBusinessUnit',
        'companyBusinessUnit' => 'companyBusinessUnit',
        'CompanyBusinessUnit' => 'companyBusinessUnit',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::CHILDREN => [
            'type' => 'Generated\Shared\Transfer\CompanyBusinessUnitTreeNodeTransfer',
            'type_shim' => null,
            'name_underscore' => 'children',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LEVEL => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'level',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COMPANY_BUSINESS_UNIT => [
            'type' => 'Generated\Shared\Transfer\CompanyBusinessUnitTransfer',
            'type_shim' => null,
            'name_underscore' => 'company_business_unit',
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
     * @module CompanyBusinessUnit
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\CompanyBusinessUnitTreeNodeTransfer[] $children
     *
     * @return $this
     */
    public function setChildren(ArrayObject $children)
    {
        $this->children = $children;
        $this->modifiedProperties[self::CHILDREN] = true;

        return $this;
    }

    /**
     * @module CompanyBusinessUnit
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\CompanyBusinessUnitTreeNodeTransfer[]
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @module CompanyBusinessUnit
     *
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitTreeNodeTransfer $children
     *
     * @return $this
     */
    public function addChildren(CompanyBusinessUnitTreeNodeTransfer $children)
    {
        $this->children[] = $children;
        $this->modifiedProperties[self::CHILDREN] = true;

        return $this;
    }

    /**
     * @module CompanyBusinessUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireChildren()
    {
        $this->assertCollectionPropertyIsSet(self::CHILDREN);

        return $this;
    }

    /**
     * @module CompanyBusinessUnit
     *
     * @param int|null $level
     *
     * @return $this
     */
    public function setLevel($level)
    {
        $this->level = $level;
        $this->modifiedProperties[self::LEVEL] = true;

        return $this;
    }

    /**
     * @module CompanyBusinessUnit
     *
     * @return int|null
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @module CompanyBusinessUnit
     *
     * @param int|null $level
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLevelOrFail($level)
    {
        if ($level === null) {
            $this->throwNullValueException(static::LEVEL);
        }

        return $this->setLevel($level);
    }

    /**
     * @module CompanyBusinessUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getLevelOrFail()
    {
        if ($this->level === null) {
            $this->throwNullValueException(static::LEVEL);
        }

        return $this->level;
    }

    /**
     * @module CompanyBusinessUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLevel()
    {
        $this->assertPropertyIsSet(self::LEVEL);

        return $this;
    }

    /**
     * @module CompanyBusinessUnit
     *
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitTransfer|null $companyBusinessUnit
     *
     * @return $this
     */
    public function setCompanyBusinessUnit(CompanyBusinessUnitTransfer $companyBusinessUnit = null)
    {
        $this->companyBusinessUnit = $companyBusinessUnit;
        $this->modifiedProperties[self::COMPANY_BUSINESS_UNIT] = true;

        return $this;
    }

    /**
     * @module CompanyBusinessUnit
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitTransfer|null
     */
    public function getCompanyBusinessUnit()
    {
        return $this->companyBusinessUnit;
    }

    /**
     * @module CompanyBusinessUnit
     *
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitTransfer $companyBusinessUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCompanyBusinessUnitOrFail(CompanyBusinessUnitTransfer $companyBusinessUnit)
    {
        return $this->setCompanyBusinessUnit($companyBusinessUnit);
    }

    /**
     * @module CompanyBusinessUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitTransfer
     */
    public function getCompanyBusinessUnitOrFail()
    {
        if ($this->companyBusinessUnit === null) {
            $this->throwNullValueException(static::COMPANY_BUSINESS_UNIT);
        }

        return $this->companyBusinessUnit;
    }

    /**
     * @module CompanyBusinessUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompanyBusinessUnit()
    {
        $this->assertPropertyIsSet(self::COMPANY_BUSINESS_UNIT);

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
                case 'level':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'companyBusinessUnit':
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
                case 'children':
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
                case 'level':
                    $values[$arrayKey] = $value;

                    break;
                case 'companyBusinessUnit':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'children':
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
                case 'level':
                    $values[$arrayKey] = $value;

                    break;
                case 'companyBusinessUnit':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'children':
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
        $this->children = $this->children ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'level' => $this->level,
            'companyBusinessUnit' => $this->companyBusinessUnit,
            'children' => $this->children,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'level' => $this->level,
            'company_business_unit' => $this->companyBusinessUnit,
            'children' => $this->children,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'level' => $this->level instanceof AbstractTransfer ? $this->level->toArray(true, false) : $this->level,
            'company_business_unit' => $this->companyBusinessUnit instanceof AbstractTransfer ? $this->companyBusinessUnit->toArray(true, false) : $this->companyBusinessUnit,
            'children' => $this->children instanceof AbstractTransfer ? $this->children->toArray(true, false) : $this->addValuesToCollection($this->children, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'level' => $this->level instanceof AbstractTransfer ? $this->level->toArray(true, true) : $this->level,
            'companyBusinessUnit' => $this->companyBusinessUnit instanceof AbstractTransfer ? $this->companyBusinessUnit->toArray(true, true) : $this->companyBusinessUnit,
            'children' => $this->children instanceof AbstractTransfer ? $this->children->toArray(true, true) : $this->addValuesToCollection($this->children, true, true),
        ];
    }
}
