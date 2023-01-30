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
class CommentFilterTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const OWNER_ID = 'ownerId';

    /**
     * @var string
     */
    public const OWNER_TYPE = 'ownerType';

    /**
     * @var string
     */
    public const TAGS = 'tags';

    /**
     * @var int|null
     */
    protected $ownerId;

    /**
     * @var string|null
     */
    protected $ownerType;

    /**
     * @var array
     */
    protected $tags = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'owner_id' => 'ownerId',
        'ownerId' => 'ownerId',
        'OwnerId' => 'ownerId',
        'owner_type' => 'ownerType',
        'ownerType' => 'ownerType',
        'OwnerType' => 'ownerType',
        'tags' => 'tags',
        'Tags' => 'tags',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::OWNER_ID => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'owner_id',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::OWNER_TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'owner_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TAGS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'tags',
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
     * @module CommentSalesConnector|Comment
     *
     * @param int|null $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;
        $this->modifiedProperties[self::OWNER_ID] = true;

        return $this;
    }

    /**
     * @module CommentSalesConnector|Comment
     *
     * @return int|null
     */
    public function getOwnerId()
    {
        return $this->ownerId;
    }

    /**
     * @module CommentSalesConnector|Comment
     *
     * @param int|null $ownerId
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOwnerIdOrFail($ownerId)
    {
        if ($ownerId === null) {
            $this->throwNullValueException(static::OWNER_ID);
        }

        return $this->setOwnerId($ownerId);
    }

    /**
     * @module CommentSalesConnector|Comment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getOwnerIdOrFail()
    {
        if ($this->ownerId === null) {
            $this->throwNullValueException(static::OWNER_ID);
        }

        return $this->ownerId;
    }

    /**
     * @module CommentSalesConnector|Comment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOwnerId()
    {
        $this->assertPropertyIsSet(self::OWNER_ID);

        return $this;
    }

    /**
     * @module CommentSalesConnector|Comment
     *
     * @param string|null $ownerType
     *
     * @return $this
     */
    public function setOwnerType($ownerType)
    {
        $this->ownerType = $ownerType;
        $this->modifiedProperties[self::OWNER_TYPE] = true;

        return $this;
    }

    /**
     * @module CommentSalesConnector|Comment
     *
     * @return string|null
     */
    public function getOwnerType()
    {
        return $this->ownerType;
    }

    /**
     * @module CommentSalesConnector|Comment
     *
     * @param string|null $ownerType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOwnerTypeOrFail($ownerType)
    {
        if ($ownerType === null) {
            $this->throwNullValueException(static::OWNER_TYPE);
        }

        return $this->setOwnerType($ownerType);
    }

    /**
     * @module CommentSalesConnector|Comment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getOwnerTypeOrFail()
    {
        if ($this->ownerType === null) {
            $this->throwNullValueException(static::OWNER_TYPE);
        }

        return $this->ownerType;
    }

    /**
     * @module CommentSalesConnector|Comment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOwnerType()
    {
        $this->assertPropertyIsSet(self::OWNER_TYPE);

        return $this;
    }

    /**
     * @module CommentSalesConnector
     *
     * @param array|null $tags
     *
     * @return $this
     */
    public function setTags(array $tags = null)
    {
        if ($tags === null) {
            $tags = [];
        }

        $this->tags = $tags;
        $this->modifiedProperties[self::TAGS] = true;

        return $this;
    }

    /**
     * @module CommentSalesConnector
     *
     * @return array
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @module CommentSalesConnector
     *
     * @param mixed $tags
     *
     * @return $this
     */
    public function addTags($tags)
    {
        $this->tags[] = $tags;
        $this->modifiedProperties[self::TAGS] = true;

        return $this;
    }

    /**
     * @module CommentSalesConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTags()
    {
        $this->assertPropertyIsSet(self::TAGS);

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
                case 'ownerId':
                case 'ownerType':
                case 'tags':
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
                case 'ownerId':
                case 'ownerType':
                case 'tags':
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
                case 'ownerId':
                case 'ownerType':
                case 'tags':
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
            'ownerId' => $this->ownerId,
            'ownerType' => $this->ownerType,
            'tags' => $this->tags,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'owner_id' => $this->ownerId,
            'owner_type' => $this->ownerType,
            'tags' => $this->tags,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'owner_id' => $this->ownerId instanceof AbstractTransfer ? $this->ownerId->toArray(true, false) : $this->ownerId,
            'owner_type' => $this->ownerType instanceof AbstractTransfer ? $this->ownerType->toArray(true, false) : $this->ownerType,
            'tags' => $this->tags instanceof AbstractTransfer ? $this->tags->toArray(true, false) : $this->tags,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'ownerId' => $this->ownerId instanceof AbstractTransfer ? $this->ownerId->toArray(true, true) : $this->ownerId,
            'ownerType' => $this->ownerType instanceof AbstractTransfer ? $this->ownerType->toArray(true, true) : $this->ownerType,
            'tags' => $this->tags instanceof AbstractTransfer ? $this->tags->toArray(true, true) : $this->tags,
        ];
    }
}
