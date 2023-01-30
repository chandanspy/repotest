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
class RawProductAttributesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ABSTRACT_ATTRIBUTES = 'abstractAttributes';

    /**
     * @var string
     */
    public const ABSTRACT_LOCALIZED_ATTRIBUTES = 'abstractLocalizedAttributes';

    /**
     * @var string
     */
    public const CONCRETE_ATTRIBUTES = 'concreteAttributes';

    /**
     * @var string
     */
    public const CONCRETE_LOCALIZED_ATTRIBUTES = 'concreteLocalizedAttributes';

    /**
     * @var array
     */
    protected $abstractAttributes = [];

    /**
     * @var array
     */
    protected $abstractLocalizedAttributes = [];

    /**
     * @var array
     */
    protected $concreteAttributes = [];

    /**
     * @var array
     */
    protected $concreteLocalizedAttributes = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'abstract_attributes' => 'abstractAttributes',
        'abstractAttributes' => 'abstractAttributes',
        'AbstractAttributes' => 'abstractAttributes',
        'abstract_localized_attributes' => 'abstractLocalizedAttributes',
        'abstractLocalizedAttributes' => 'abstractLocalizedAttributes',
        'AbstractLocalizedAttributes' => 'abstractLocalizedAttributes',
        'concrete_attributes' => 'concreteAttributes',
        'concreteAttributes' => 'concreteAttributes',
        'ConcreteAttributes' => 'concreteAttributes',
        'concrete_localized_attributes' => 'concreteLocalizedAttributes',
        'concreteLocalizedAttributes' => 'concreteLocalizedAttributes',
        'ConcreteLocalizedAttributes' => 'concreteLocalizedAttributes',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ABSTRACT_ATTRIBUTES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'abstract_attributes',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ABSTRACT_LOCALIZED_ATTRIBUTES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'abstract_localized_attributes',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONCRETE_ATTRIBUTES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'concrete_attributes',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONCRETE_LOCALIZED_ATTRIBUTES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'concrete_localized_attributes',
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
     * @module ProductPageSearch|ProductStorage|Product
     *
     * @param array|null $abstractAttributes
     *
     * @return $this
     */
    public function setAbstractAttributes(array $abstractAttributes = null)
    {
        if ($abstractAttributes === null) {
            $abstractAttributes = [];
        }

        $this->abstractAttributes = $abstractAttributes;
        $this->modifiedProperties[self::ABSTRACT_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module ProductPageSearch|ProductStorage|Product
     *
     * @return array
     */
    public function getAbstractAttributes()
    {
        return $this->abstractAttributes;
    }

    /**
     * @module ProductPageSearch|ProductStorage|Product
     *
     * @param mixed $abstractAttribute
     *
     * @return $this
     */
    public function addAbstractAttribute($abstractAttribute)
    {
        $this->abstractAttributes[] = $abstractAttribute;
        $this->modifiedProperties[self::ABSTRACT_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module ProductPageSearch|ProductStorage|Product
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAbstractAttributes()
    {
        $this->assertPropertyIsSet(self::ABSTRACT_ATTRIBUTES);

        return $this;
    }

    /**
     * @module ProductPageSearch|ProductStorage|Product
     *
     * @param array|null $abstractLocalizedAttributes
     *
     * @return $this
     */
    public function setAbstractLocalizedAttributes(array $abstractLocalizedAttributes = null)
    {
        if ($abstractLocalizedAttributes === null) {
            $abstractLocalizedAttributes = [];
        }

        $this->abstractLocalizedAttributes = $abstractLocalizedAttributes;
        $this->modifiedProperties[self::ABSTRACT_LOCALIZED_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module ProductPageSearch|ProductStorage|Product
     *
     * @return array
     */
    public function getAbstractLocalizedAttributes()
    {
        return $this->abstractLocalizedAttributes;
    }

    /**
     * @module ProductPageSearch|ProductStorage|Product
     *
     * @param mixed $abstractLocalizedAttribute
     *
     * @return $this
     */
    public function addAbstractLocalizedAttribute($abstractLocalizedAttribute)
    {
        $this->abstractLocalizedAttributes[] = $abstractLocalizedAttribute;
        $this->modifiedProperties[self::ABSTRACT_LOCALIZED_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module ProductPageSearch|ProductStorage|Product
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAbstractLocalizedAttributes()
    {
        $this->assertPropertyIsSet(self::ABSTRACT_LOCALIZED_ATTRIBUTES);

        return $this;
    }

    /**
     * @module ProductPageSearch|ProductStorage|Product
     *
     * @param array|null $concreteAttributes
     *
     * @return $this
     */
    public function setConcreteAttributes(array $concreteAttributes = null)
    {
        if ($concreteAttributes === null) {
            $concreteAttributes = [];
        }

        $this->concreteAttributes = $concreteAttributes;
        $this->modifiedProperties[self::CONCRETE_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module ProductPageSearch|ProductStorage|Product
     *
     * @return array
     */
    public function getConcreteAttributes()
    {
        return $this->concreteAttributes;
    }

    /**
     * @module ProductPageSearch|ProductStorage|Product
     *
     * @param mixed $concreteAttribute
     *
     * @return $this
     */
    public function addConcreteAttribute($concreteAttribute)
    {
        $this->concreteAttributes[] = $concreteAttribute;
        $this->modifiedProperties[self::CONCRETE_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module ProductPageSearch|ProductStorage|Product
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConcreteAttributes()
    {
        $this->assertPropertyIsSet(self::CONCRETE_ATTRIBUTES);

        return $this;
    }

    /**
     * @module ProductPageSearch|ProductStorage|Product
     *
     * @param array|null $concreteLocalizedAttributes
     *
     * @return $this
     */
    public function setConcreteLocalizedAttributes(array $concreteLocalizedAttributes = null)
    {
        if ($concreteLocalizedAttributes === null) {
            $concreteLocalizedAttributes = [];
        }

        $this->concreteLocalizedAttributes = $concreteLocalizedAttributes;
        $this->modifiedProperties[self::CONCRETE_LOCALIZED_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module ProductPageSearch|ProductStorage|Product
     *
     * @return array
     */
    public function getConcreteLocalizedAttributes()
    {
        return $this->concreteLocalizedAttributes;
    }

    /**
     * @module ProductPageSearch|ProductStorage|Product
     *
     * @param mixed $concreteLocalizedAttribute
     *
     * @return $this
     */
    public function addConcreteLocalizedAttribute($concreteLocalizedAttribute)
    {
        $this->concreteLocalizedAttributes[] = $concreteLocalizedAttribute;
        $this->modifiedProperties[self::CONCRETE_LOCALIZED_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module ProductPageSearch|ProductStorage|Product
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConcreteLocalizedAttributes()
    {
        $this->assertPropertyIsSet(self::CONCRETE_LOCALIZED_ATTRIBUTES);

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
                case 'abstractAttributes':
                case 'abstractLocalizedAttributes':
                case 'concreteAttributes':
                case 'concreteLocalizedAttributes':
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
                case 'abstractAttributes':
                case 'abstractLocalizedAttributes':
                case 'concreteAttributes':
                case 'concreteLocalizedAttributes':
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
                case 'abstractAttributes':
                case 'abstractLocalizedAttributes':
                case 'concreteAttributes':
                case 'concreteLocalizedAttributes':
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
            'abstractAttributes' => $this->abstractAttributes,
            'abstractLocalizedAttributes' => $this->abstractLocalizedAttributes,
            'concreteAttributes' => $this->concreteAttributes,
            'concreteLocalizedAttributes' => $this->concreteLocalizedAttributes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'abstract_attributes' => $this->abstractAttributes,
            'abstract_localized_attributes' => $this->abstractLocalizedAttributes,
            'concrete_attributes' => $this->concreteAttributes,
            'concrete_localized_attributes' => $this->concreteLocalizedAttributes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'abstract_attributes' => $this->abstractAttributes instanceof AbstractTransfer ? $this->abstractAttributes->toArray(true, false) : $this->abstractAttributes,
            'abstract_localized_attributes' => $this->abstractLocalizedAttributes instanceof AbstractTransfer ? $this->abstractLocalizedAttributes->toArray(true, false) : $this->abstractLocalizedAttributes,
            'concrete_attributes' => $this->concreteAttributes instanceof AbstractTransfer ? $this->concreteAttributes->toArray(true, false) : $this->concreteAttributes,
            'concrete_localized_attributes' => $this->concreteLocalizedAttributes instanceof AbstractTransfer ? $this->concreteLocalizedAttributes->toArray(true, false) : $this->concreteLocalizedAttributes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'abstractAttributes' => $this->abstractAttributes instanceof AbstractTransfer ? $this->abstractAttributes->toArray(true, true) : $this->abstractAttributes,
            'abstractLocalizedAttributes' => $this->abstractLocalizedAttributes instanceof AbstractTransfer ? $this->abstractLocalizedAttributes->toArray(true, true) : $this->abstractLocalizedAttributes,
            'concreteAttributes' => $this->concreteAttributes instanceof AbstractTransfer ? $this->concreteAttributes->toArray(true, true) : $this->concreteAttributes,
            'concreteLocalizedAttributes' => $this->concreteLocalizedAttributes instanceof AbstractTransfer ? $this->concreteLocalizedAttributes->toArray(true, true) : $this->concreteLocalizedAttributes,
        ];
    }
}
