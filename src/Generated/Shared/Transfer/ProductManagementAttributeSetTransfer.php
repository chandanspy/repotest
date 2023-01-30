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
class ProductManagementAttributeSetTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_ABSTRACT = 'idProductAbstract';

    /**
     * @var string
     */
    public const ABSTRACT_ATTRIBUTES = 'abstractAttributes';

    /**
     * @var string
     */
    public const ATTRIBUTES = 'attributes';

    /**
     * @var string
     */
    public const LOCALIZED_ATTRIBUTES = 'localizedAttributes';

    /**
     * @var string
     */
    public const ABSTRACT_LOCALIZED_ATTRIBUTES = 'abstractLocalizedAttributes';

    /**
     * @var int|null
     */
    protected $idProductAbstract;

    /**
     * @var array
     */
    protected $abstractAttributes = [];

    /**
     * @var array
     */
    protected $attributes = [];

    /**
     * @var array
     */
    protected $localizedAttributes = [];

    /**
     * @var array
     */
    protected $abstractLocalizedAttributes = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_abstract' => 'idProductAbstract',
        'idProductAbstract' => 'idProductAbstract',
        'IdProductAbstract' => 'idProductAbstract',
        'abstract_attributes' => 'abstractAttributes',
        'abstractAttributes' => 'abstractAttributes',
        'AbstractAttributes' => 'abstractAttributes',
        'attributes' => 'attributes',
        'Attributes' => 'attributes',
        'localized_attributes' => 'localizedAttributes',
        'localizedAttributes' => 'localizedAttributes',
        'LocalizedAttributes' => 'localizedAttributes',
        'abstract_localized_attributes' => 'abstractLocalizedAttributes',
        'abstractLocalizedAttributes' => 'abstractLocalizedAttributes',
        'AbstractLocalizedAttributes' => 'abstractLocalizedAttributes',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_ABSTRACT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_abstract',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
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
        self::ATTRIBUTES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'attributes',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LOCALIZED_ATTRIBUTES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'localized_attributes',
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
    ];

    /**
     * @module ProductAttribute
     *
     * @param int|null $idProductAbstract
     *
     * @return $this
     */
    public function setIdProductAbstract($idProductAbstract)
    {
        $this->idProductAbstract = $idProductAbstract;
        $this->modifiedProperties[self::ID_PRODUCT_ABSTRACT] = true;

        return $this;
    }

    /**
     * @module ProductAttribute
     *
     * @return int|null
     */
    public function getIdProductAbstract()
    {
        return $this->idProductAbstract;
    }

    /**
     * @module ProductAttribute
     *
     * @param int|null $idProductAbstract
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductAbstractOrFail($idProductAbstract)
    {
        if ($idProductAbstract === null) {
            $this->throwNullValueException(static::ID_PRODUCT_ABSTRACT);
        }

        return $this->setIdProductAbstract($idProductAbstract);
    }

    /**
     * @module ProductAttribute
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductAbstractOrFail()
    {
        if ($this->idProductAbstract === null) {
            $this->throwNullValueException(static::ID_PRODUCT_ABSTRACT);
        }

        return $this->idProductAbstract;
    }

    /**
     * @module ProductAttribute
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductAbstract()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_ABSTRACT);

        return $this;
    }

    /**
     * @module ProductAttribute
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
     * @module ProductAttribute
     *
     * @return array
     */
    public function getAbstractAttributes()
    {
        return $this->abstractAttributes;
    }

    /**
     * @module ProductAttribute
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
     * @module ProductAttribute
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
     * @module ProductAttribute
     *
     * @param array|null $attributes
     *
     * @return $this
     */
    public function setAttributes(array $attributes = null)
    {
        if ($attributes === null) {
            $attributes = [];
        }

        $this->attributes = $attributes;
        $this->modifiedProperties[self::ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module ProductAttribute
     *
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @module ProductAttribute
     *
     * @param mixed $attribute
     *
     * @return $this
     */
    public function addAttribute($attribute)
    {
        $this->attributes[] = $attribute;
        $this->modifiedProperties[self::ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module ProductAttribute
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAttributes()
    {
        $this->assertPropertyIsSet(self::ATTRIBUTES);

        return $this;
    }

    /**
     * @module ProductAttribute
     *
     * @param array|null $localizedAttributes
     *
     * @return $this
     */
    public function setLocalizedAttributes(array $localizedAttributes = null)
    {
        if ($localizedAttributes === null) {
            $localizedAttributes = [];
        }

        $this->localizedAttributes = $localizedAttributes;
        $this->modifiedProperties[self::LOCALIZED_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module ProductAttribute
     *
     * @return array
     */
    public function getLocalizedAttributes()
    {
        return $this->localizedAttributes;
    }

    /**
     * @module ProductAttribute
     *
     * @param mixed $concreteLocalizedAttribute
     *
     * @return $this
     */
    public function addConcreteLocalizedAttribute($concreteLocalizedAttribute)
    {
        $this->localizedAttributes[] = $concreteLocalizedAttribute;
        $this->modifiedProperties[self::LOCALIZED_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module ProductAttribute
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocalizedAttributes()
    {
        $this->assertPropertyIsSet(self::LOCALIZED_ATTRIBUTES);

        return $this;
    }

    /**
     * @module ProductAttribute
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
     * @module ProductAttribute
     *
     * @return array
     */
    public function getAbstractLocalizedAttributes()
    {
        return $this->abstractLocalizedAttributes;
    }

    /**
     * @module ProductAttribute
     *
     * @param mixed $localizedAttribute
     *
     * @return $this
     */
    public function addLocalizedAttribute($localizedAttribute)
    {
        $this->abstractLocalizedAttributes[] = $localizedAttribute;
        $this->modifiedProperties[self::ABSTRACT_LOCALIZED_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module ProductAttribute
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
                case 'idProductAbstract':
                case 'abstractAttributes':
                case 'attributes':
                case 'localizedAttributes':
                case 'abstractLocalizedAttributes':
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
                case 'idProductAbstract':
                case 'abstractAttributes':
                case 'attributes':
                case 'localizedAttributes':
                case 'abstractLocalizedAttributes':
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
                case 'idProductAbstract':
                case 'abstractAttributes':
                case 'attributes':
                case 'localizedAttributes':
                case 'abstractLocalizedAttributes':
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
            'idProductAbstract' => $this->idProductAbstract,
            'abstractAttributes' => $this->abstractAttributes,
            'attributes' => $this->attributes,
            'localizedAttributes' => $this->localizedAttributes,
            'abstractLocalizedAttributes' => $this->abstractLocalizedAttributes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_abstract' => $this->idProductAbstract,
            'abstract_attributes' => $this->abstractAttributes,
            'attributes' => $this->attributes,
            'localized_attributes' => $this->localizedAttributes,
            'abstract_localized_attributes' => $this->abstractLocalizedAttributes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_abstract' => $this->idProductAbstract instanceof AbstractTransfer ? $this->idProductAbstract->toArray(true, false) : $this->idProductAbstract,
            'abstract_attributes' => $this->abstractAttributes instanceof AbstractTransfer ? $this->abstractAttributes->toArray(true, false) : $this->abstractAttributes,
            'attributes' => $this->attributes instanceof AbstractTransfer ? $this->attributes->toArray(true, false) : $this->attributes,
            'localized_attributes' => $this->localizedAttributes instanceof AbstractTransfer ? $this->localizedAttributes->toArray(true, false) : $this->localizedAttributes,
            'abstract_localized_attributes' => $this->abstractLocalizedAttributes instanceof AbstractTransfer ? $this->abstractLocalizedAttributes->toArray(true, false) : $this->abstractLocalizedAttributes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductAbstract' => $this->idProductAbstract instanceof AbstractTransfer ? $this->idProductAbstract->toArray(true, true) : $this->idProductAbstract,
            'abstractAttributes' => $this->abstractAttributes instanceof AbstractTransfer ? $this->abstractAttributes->toArray(true, true) : $this->abstractAttributes,
            'attributes' => $this->attributes instanceof AbstractTransfer ? $this->attributes->toArray(true, true) : $this->attributes,
            'localizedAttributes' => $this->localizedAttributes instanceof AbstractTransfer ? $this->localizedAttributes->toArray(true, true) : $this->localizedAttributes,
            'abstractLocalizedAttributes' => $this->abstractLocalizedAttributes instanceof AbstractTransfer ? $this->abstractLocalizedAttributes->toArray(true, true) : $this->abstractLocalizedAttributes,
        ];
    }
}
