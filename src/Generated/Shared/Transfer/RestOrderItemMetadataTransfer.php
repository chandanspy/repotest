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
class RestOrderItemMetadataTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SUPER_ATTRIBUTES = 'superAttributes';

    /**
     * @var string
     */
    public const IMAGE = 'image';

    /**
     * @var array
     */
    protected $superAttributes = [];

    /**
     * @var string|null
     */
    protected $image;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'super_attributes' => 'superAttributes',
        'superAttributes' => 'superAttributes',
        'SuperAttributes' => 'superAttributes',
        'image' => 'image',
        'Image' => 'image',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::SUPER_ATTRIBUTES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'super_attributes',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IMAGE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'image',
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
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @param array|null $superAttributes
     *
     * @return $this
     */
    public function setSuperAttributes(array $superAttributes = null)
    {
        if ($superAttributes === null) {
            $superAttributes = [];
        }

        $this->superAttributes = $superAttributes;
        $this->modifiedProperties[self::SUPER_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @return array
     */
    public function getSuperAttributes()
    {
        return $this->superAttributes;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @param mixed $superAttribute
     *
     * @return $this
     */
    public function addSuperAttribute($superAttribute)
    {
        $this->superAttributes[] = $superAttribute;
        $this->modifiedProperties[self::SUPER_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSuperAttributes()
    {
        $this->assertPropertyIsSet(self::SUPER_ATTRIBUTES);

        return $this;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @param string|null $image
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->image = $image;
        $this->modifiedProperties[self::IMAGE] = true;

        return $this;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @return string|null
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @param string|null $image
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setImageOrFail($image)
    {
        if ($image === null) {
            $this->throwNullValueException(static::IMAGE);
        }

        return $this->setImage($image);
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getImageOrFail()
    {
        if ($this->image === null) {
            $this->throwNullValueException(static::IMAGE);
        }

        return $this->image;
    }

    /**
     * @module OrdersRestApi|ProductBundlesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireImage()
    {
        $this->assertPropertyIsSet(self::IMAGE);

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
                case 'superAttributes':
                case 'image':
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
                case 'superAttributes':
                case 'image':
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
                case 'superAttributes':
                case 'image':
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
            'superAttributes' => $this->superAttributes,
            'image' => $this->image,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'super_attributes' => $this->superAttributes,
            'image' => $this->image,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'super_attributes' => $this->superAttributes instanceof AbstractTransfer ? $this->superAttributes->toArray(true, false) : $this->superAttributes,
            'image' => $this->image instanceof AbstractTransfer ? $this->image->toArray(true, false) : $this->image,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'superAttributes' => $this->superAttributes instanceof AbstractTransfer ? $this->superAttributes->toArray(true, true) : $this->superAttributes,
            'image' => $this->image instanceof AbstractTransfer ? $this->image->toArray(true, true) : $this->image,
        ];
    }
}
