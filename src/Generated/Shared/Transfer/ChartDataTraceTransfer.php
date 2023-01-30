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
class ChartDataTraceTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const TYPE = 'type';

    /**
     * @var string
     */
    public const LABELS = 'labels';

    /**
     * @var string
     */
    public const VALUES = 'values';

    /**
     * @var string
     */
    public const OPTIONS = 'options';

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $type;

    /**
     * @var string[]
     */
    protected $labels = [];

    /**
     * @var array
     */
    protected $values = [];

    /**
     * @var array
     */
    protected $options = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'name' => 'name',
        'Name' => 'name',
        'type' => 'type',
        'Type' => 'type',
        'labels' => 'labels',
        'Labels' => 'labels',
        'values' => 'values',
        'Values' => 'values',
        'options' => 'options',
        'Options' => 'options',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LABELS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'labels',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::VALUES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'values',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::OPTIONS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'options',
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
     * @module Chart
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
     * @module Chart
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module Chart
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
     * @module Chart
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
     * @module Chart
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
     * @module Chart|SalesStatistics
     *
     * @param string|null $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        $this->modifiedProperties[self::TYPE] = true;

        return $this;
    }

    /**
     * @module Chart|SalesStatistics
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @module Chart|SalesStatistics
     *
     * @param string|null $type
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTypeOrFail($type)
    {
        if ($type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->setType($type);
    }

    /**
     * @module Chart|SalesStatistics
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTypeOrFail()
    {
        if ($this->type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->type;
    }

    /**
     * @module Chart|SalesStatistics
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireType()
    {
        $this->assertPropertyIsSet(self::TYPE);

        return $this;
    }

    /**
     * @module Chart|SalesStatistics
     *
     * @param string[]|null $labels
     *
     * @return $this
     */
    public function setLabels(array $labels = null)
    {
        if ($labels === null) {
            $labels = [];
        }

        $this->labels = $labels;
        $this->modifiedProperties[self::LABELS] = true;

        return $this;
    }

    /**
     * @module Chart|SalesStatistics
     *
     * @return string[]
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * @module Chart|SalesStatistics
     *
     * @param string $label
     *
     * @return $this
     */
    public function addLabel($label)
    {
        $this->labels[] = $label;
        $this->modifiedProperties[self::LABELS] = true;

        return $this;
    }

    /**
     * @module Chart|SalesStatistics
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLabels()
    {
        $this->assertPropertyIsSet(self::LABELS);

        return $this;
    }

    /**
     * @module Chart|SalesStatistics
     *
     * @param array|null $values
     *
     * @return $this
     */
    public function setValues(array $values = null)
    {
        if ($values === null) {
            $values = [];
        }

        $this->values = $values;
        $this->modifiedProperties[self::VALUES] = true;

        return $this;
    }

    /**
     * @module Chart|SalesStatistics
     *
     * @return array
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @module Chart|SalesStatistics
     *
     * @param mixed $value
     *
     * @return $this
     */
    public function addValue($value)
    {
        $this->values[] = $value;
        $this->modifiedProperties[self::VALUES] = true;

        return $this;
    }

    /**
     * @module Chart|SalesStatistics
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireValues()
    {
        $this->assertPropertyIsSet(self::VALUES);

        return $this;
    }

    /**
     * @module Chart|SalesStatistics
     *
     * @param array|null $options
     *
     * @return $this
     */
    public function setOptions(array $options = null)
    {
        if ($options === null) {
            $options = [];
        }

        $this->options = $options;
        $this->modifiedProperties[self::OPTIONS] = true;

        return $this;
    }

    /**
     * @module Chart|SalesStatistics
     *
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @module Chart|SalesStatistics
     *
     * @param mixed $option
     *
     * @return $this
     */
    public function addOption($option)
    {
        $this->options[] = $option;
        $this->modifiedProperties[self::OPTIONS] = true;

        return $this;
    }

    /**
     * @module Chart|SalesStatistics
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOptions()
    {
        $this->assertPropertyIsSet(self::OPTIONS);

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
                case 'name':
                case 'type':
                case 'labels':
                case 'values':
                case 'options':
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
                case 'name':
                case 'type':
                case 'labels':
                case 'values':
                case 'options':
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
                case 'name':
                case 'type':
                case 'labels':
                case 'values':
                case 'options':
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
            'name' => $this->name,
            'type' => $this->type,
            'labels' => $this->labels,
            'values' => $this->values,
            'options' => $this->options,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name,
            'type' => $this->type,
            'labels' => $this->labels,
            'values' => $this->values,
            'options' => $this->options,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, false) : $this->type,
            'labels' => $this->labels instanceof AbstractTransfer ? $this->labels->toArray(true, false) : $this->labels,
            'values' => $this->values instanceof AbstractTransfer ? $this->values->toArray(true, false) : $this->values,
            'options' => $this->options instanceof AbstractTransfer ? $this->options->toArray(true, false) : $this->options,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, true) : $this->type,
            'labels' => $this->labels instanceof AbstractTransfer ? $this->labels->toArray(true, true) : $this->labels,
            'values' => $this->values instanceof AbstractTransfer ? $this->values->toArray(true, true) : $this->values,
            'options' => $this->options instanceof AbstractTransfer ? $this->options->toArray(true, true) : $this->options,
        ];
    }
}
