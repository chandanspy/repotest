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
class ProductSearchAttributeMapTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ATTRIBUTE_NAME = 'attributeName';

    /**
     * @var string
     */
    public const TARGET_FIELDS = 'targetFields';

    /**
     * @var string|null
     */
    protected $attributeName;

    /**
     * @var array
     */
    protected $targetFields = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'attribute_name' => 'attributeName',
        'attributeName' => 'attributeName',
        'AttributeName' => 'attributeName',
        'target_fields' => 'targetFields',
        'targetFields' => 'targetFields',
        'TargetFields' => 'targetFields',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ATTRIBUTE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'attribute_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TARGET_FIELDS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'target_fields',
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
     * @module ProductSearch
     *
     * @param string|null $attributeName
     *
     * @return $this
     */
    public function setAttributeName($attributeName)
    {
        $this->attributeName = $attributeName;
        $this->modifiedProperties[self::ATTRIBUTE_NAME] = true;

        return $this;
    }

    /**
     * @module ProductSearch
     *
     * @return string|null
     */
    public function getAttributeName()
    {
        return $this->attributeName;
    }

    /**
     * @module ProductSearch
     *
     * @param string|null $attributeName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAttributeNameOrFail($attributeName)
    {
        if ($attributeName === null) {
            $this->throwNullValueException(static::ATTRIBUTE_NAME);
        }

        return $this->setAttributeName($attributeName);
    }

    /**
     * @module ProductSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAttributeNameOrFail()
    {
        if ($this->attributeName === null) {
            $this->throwNullValueException(static::ATTRIBUTE_NAME);
        }

        return $this->attributeName;
    }

    /**
     * @module ProductSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAttributeName()
    {
        $this->assertPropertyIsSet(self::ATTRIBUTE_NAME);

        return $this;
    }

    /**
     * @module ProductSearch
     *
     * @param array|null $targetFields
     *
     * @return $this
     */
    public function setTargetFields(array $targetFields = null)
    {
        if ($targetFields === null) {
            $targetFields = [];
        }

        $this->targetFields = $targetFields;
        $this->modifiedProperties[self::TARGET_FIELDS] = true;

        return $this;
    }

    /**
     * @module ProductSearch
     *
     * @return array
     */
    public function getTargetFields()
    {
        return $this->targetFields;
    }

    /**
     * @module ProductSearch
     *
     * @param mixed $targetFields
     *
     * @return $this
     */
    public function addTargetFields($targetFields)
    {
        $this->targetFields[] = $targetFields;
        $this->modifiedProperties[self::TARGET_FIELDS] = true;

        return $this;
    }

    /**
     * @module ProductSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTargetFields()
    {
        $this->assertPropertyIsSet(self::TARGET_FIELDS);

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
                case 'attributeName':
                case 'targetFields':
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
                case 'attributeName':
                case 'targetFields':
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
                case 'attributeName':
                case 'targetFields':
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
            'attributeName' => $this->attributeName,
            'targetFields' => $this->targetFields,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'attribute_name' => $this->attributeName,
            'target_fields' => $this->targetFields,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'attribute_name' => $this->attributeName instanceof AbstractTransfer ? $this->attributeName->toArray(true, false) : $this->attributeName,
            'target_fields' => $this->targetFields instanceof AbstractTransfer ? $this->targetFields->toArray(true, false) : $this->targetFields,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'attributeName' => $this->attributeName instanceof AbstractTransfer ? $this->attributeName->toArray(true, true) : $this->attributeName,
            'targetFields' => $this->targetFields instanceof AbstractTransfer ? $this->targetFields->toArray(true, true) : $this->targetFields,
        ];
    }
}
