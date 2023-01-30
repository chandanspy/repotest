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
class PropelQueryBuilderSortTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const COLUMN = 'column';

    /**
     * @var string
     */
    public const SORT_DIRECTION = 'sortDirection';

    /**
     * @var \Generated\Shared\Transfer\PropelQueryBuilderColumnTransfer|null
     */
    protected $column;

    /**
     * @var string|null
     */
    protected $sortDirection;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'column' => 'column',
        'Column' => 'column',
        'sort_direction' => 'sortDirection',
        'sortDirection' => 'sortDirection',
        'SortDirection' => 'sortDirection',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::COLUMN => [
            'type' => 'Generated\Shared\Transfer\PropelQueryBuilderColumnTransfer',
            'type_shim' => null,
            'name_underscore' => 'column',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SORT_DIRECTION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'sort_direction',
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
     * @module PropelQueryBuilder
     *
     * @param \Generated\Shared\Transfer\PropelQueryBuilderColumnTransfer|null $column
     *
     * @return $this
     */
    public function setColumn(PropelQueryBuilderColumnTransfer $column = null)
    {
        $this->column = $column;
        $this->modifiedProperties[self::COLUMN] = true;

        return $this;
    }

    /**
     * @module PropelQueryBuilder
     *
     * @return \Generated\Shared\Transfer\PropelQueryBuilderColumnTransfer|null
     */
    public function getColumn()
    {
        return $this->column;
    }

    /**
     * @module PropelQueryBuilder
     *
     * @param \Generated\Shared\Transfer\PropelQueryBuilderColumnTransfer $column
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setColumnOrFail(PropelQueryBuilderColumnTransfer $column)
    {
        return $this->setColumn($column);
    }

    /**
     * @module PropelQueryBuilder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PropelQueryBuilderColumnTransfer
     */
    public function getColumnOrFail()
    {
        if ($this->column === null) {
            $this->throwNullValueException(static::COLUMN);
        }

        return $this->column;
    }

    /**
     * @module PropelQueryBuilder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireColumn()
    {
        $this->assertPropertyIsSet(self::COLUMN);

        return $this;
    }

    /**
     * @module PropelQueryBuilder
     *
     * @param string|null $sortDirection
     *
     * @return $this
     */
    public function setSortDirection($sortDirection)
    {
        $this->sortDirection = $sortDirection;
        $this->modifiedProperties[self::SORT_DIRECTION] = true;

        return $this;
    }

    /**
     * @module PropelQueryBuilder
     *
     * @return string|null
     */
    public function getSortDirection()
    {
        return $this->sortDirection;
    }

    /**
     * @module PropelQueryBuilder
     *
     * @param string|null $sortDirection
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSortDirectionOrFail($sortDirection)
    {
        if ($sortDirection === null) {
            $this->throwNullValueException(static::SORT_DIRECTION);
        }

        return $this->setSortDirection($sortDirection);
    }

    /**
     * @module PropelQueryBuilder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSortDirectionOrFail()
    {
        if ($this->sortDirection === null) {
            $this->throwNullValueException(static::SORT_DIRECTION);
        }

        return $this->sortDirection;
    }

    /**
     * @module PropelQueryBuilder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSortDirection()
    {
        $this->assertPropertyIsSet(self::SORT_DIRECTION);

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
                case 'sortDirection':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'column':
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
                case 'sortDirection':
                    $values[$arrayKey] = $value;

                    break;
                case 'column':
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
                case 'sortDirection':
                    $values[$arrayKey] = $value;

                    break;
                case 'column':
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
            'sortDirection' => $this->sortDirection,
            'column' => $this->column,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'sort_direction' => $this->sortDirection,
            'column' => $this->column,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'sort_direction' => $this->sortDirection instanceof AbstractTransfer ? $this->sortDirection->toArray(true, false) : $this->sortDirection,
            'column' => $this->column instanceof AbstractTransfer ? $this->column->toArray(true, false) : $this->column,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'sortDirection' => $this->sortDirection instanceof AbstractTransfer ? $this->sortDirection->toArray(true, true) : $this->sortDirection,
            'column' => $this->column instanceof AbstractTransfer ? $this->column->toArray(true, true) : $this->column,
        ];
    }
}
