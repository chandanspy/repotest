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
class RestUrlResolverAttributesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ENTITY_TYPE = 'entityType';

    /**
     * @var string
     */
    public const ENTITY_ID = 'entityId';

    /**
     * @var string|null
     */
    protected $entityType;

    /**
     * @var string|null
     */
    protected $entityId;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'entity_type' => 'entityType',
        'entityType' => 'entityType',
        'EntityType' => 'entityType',
        'entity_id' => 'entityId',
        'entityId' => 'entityId',
        'EntityId' => 'entityId',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ENTITY_TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'entity_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ENTITY_ID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'entity_id',
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
     * @module CategoriesRestApi|ProductsRestApi|UrlsRestApi
     *
     * @param string|null $entityType
     *
     * @return $this
     */
    public function setEntityType($entityType)
    {
        $this->entityType = $entityType;
        $this->modifiedProperties[self::ENTITY_TYPE] = true;

        return $this;
    }

    /**
     * @module CategoriesRestApi|ProductsRestApi|UrlsRestApi
     *
     * @return string|null
     */
    public function getEntityType()
    {
        return $this->entityType;
    }

    /**
     * @module CategoriesRestApi|ProductsRestApi|UrlsRestApi
     *
     * @param string|null $entityType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setEntityTypeOrFail($entityType)
    {
        if ($entityType === null) {
            $this->throwNullValueException(static::ENTITY_TYPE);
        }

        return $this->setEntityType($entityType);
    }

    /**
     * @module CategoriesRestApi|ProductsRestApi|UrlsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getEntityTypeOrFail()
    {
        if ($this->entityType === null) {
            $this->throwNullValueException(static::ENTITY_TYPE);
        }

        return $this->entityType;
    }

    /**
     * @module CategoriesRestApi|ProductsRestApi|UrlsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireEntityType()
    {
        $this->assertPropertyIsSet(self::ENTITY_TYPE);

        return $this;
    }

    /**
     * @module CategoriesRestApi|CmsPagesRestApi|ProductsRestApi|UrlsRestApi
     *
     * @param string|null $entityId
     *
     * @return $this
     */
    public function setEntityId($entityId)
    {
        $this->entityId = $entityId;
        $this->modifiedProperties[self::ENTITY_ID] = true;

        return $this;
    }

    /**
     * @module CategoriesRestApi|CmsPagesRestApi|ProductsRestApi|UrlsRestApi
     *
     * @return string|null
     */
    public function getEntityId()
    {
        return $this->entityId;
    }

    /**
     * @module CategoriesRestApi|CmsPagesRestApi|ProductsRestApi|UrlsRestApi
     *
     * @param string|null $entityId
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setEntityIdOrFail($entityId)
    {
        if ($entityId === null) {
            $this->throwNullValueException(static::ENTITY_ID);
        }

        return $this->setEntityId($entityId);
    }

    /**
     * @module CategoriesRestApi|CmsPagesRestApi|ProductsRestApi|UrlsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getEntityIdOrFail()
    {
        if ($this->entityId === null) {
            $this->throwNullValueException(static::ENTITY_ID);
        }

        return $this->entityId;
    }

    /**
     * @module CategoriesRestApi|CmsPagesRestApi|ProductsRestApi|UrlsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireEntityId()
    {
        $this->assertPropertyIsSet(self::ENTITY_ID);

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
                case 'entityType':
                case 'entityId':
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
                case 'entityType':
                case 'entityId':
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
                case 'entityType':
                case 'entityId':
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
            'entityType' => $this->entityType,
            'entityId' => $this->entityId,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'entity_type' => $this->entityType,
            'entity_id' => $this->entityId,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'entity_type' => $this->entityType instanceof AbstractTransfer ? $this->entityType->toArray(true, false) : $this->entityType,
            'entity_id' => $this->entityId instanceof AbstractTransfer ? $this->entityId->toArray(true, false) : $this->entityId,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'entityType' => $this->entityType instanceof AbstractTransfer ? $this->entityType->toArray(true, true) : $this->entityType,
            'entityId' => $this->entityId instanceof AbstractTransfer ? $this->entityId->toArray(true, true) : $this->entityId,
        ];
    }
}
