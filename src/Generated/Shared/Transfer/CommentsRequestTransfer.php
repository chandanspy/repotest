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
class CommentsRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const OWNER_IDS = 'ownerIds';

    /**
     * @var string
     */
    public const OWNER_TYPE = 'ownerType';

    /**
     * @var string
     */
    public const COMMENTS = 'comments';

    /**
     * @var array
     */
    protected $ownerIds = [];

    /**
     * @var string|null
     */
    protected $ownerType;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\CommentTransfer[]
     */
    protected $comments;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'owner_ids' => 'ownerIds',
        'ownerIds' => 'ownerIds',
        'OwnerIds' => 'ownerIds',
        'owner_type' => 'ownerType',
        'ownerType' => 'ownerType',
        'OwnerType' => 'ownerType',
        'comments' => 'comments',
        'Comments' => 'comments',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::OWNER_IDS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'owner_ids',
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
        self::COMMENTS => [
            'type' => 'Generated\Shared\Transfer\CommentTransfer',
            'type_shim' => null,
            'name_underscore' => 'comments',
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
     * @module Comment
     *
     * @param array|null $ownerIds
     *
     * @return $this
     */
    public function setOwnerIds(array $ownerIds = null)
    {
        if ($ownerIds === null) {
            $ownerIds = [];
        }

        $this->ownerIds = $ownerIds;
        $this->modifiedProperties[self::OWNER_IDS] = true;

        return $this;
    }

    /**
     * @module Comment
     *
     * @return array
     */
    public function getOwnerIds()
    {
        return $this->ownerIds;
    }

    /**
     * @module Comment
     *
     * @param mixed $ownerId
     *
     * @return $this
     */
    public function addOwnerId($ownerId)
    {
        $this->ownerIds[] = $ownerId;
        $this->modifiedProperties[self::OWNER_IDS] = true;

        return $this;
    }

    /**
     * @module Comment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOwnerIds()
    {
        $this->assertPropertyIsSet(self::OWNER_IDS);

        return $this;
    }

    /**
     * @module Comment
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
     * @module Comment
     *
     * @return string|null
     */
    public function getOwnerType()
    {
        return $this->ownerType;
    }

    /**
     * @module Comment
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
     * @module Comment
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
     * @module Comment
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
     * @module Comment
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\CommentTransfer[] $comments
     *
     * @return $this
     */
    public function setComments(ArrayObject $comments)
    {
        $this->comments = $comments;
        $this->modifiedProperties[self::COMMENTS] = true;

        return $this;
    }

    /**
     * @module Comment
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\CommentTransfer[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @module Comment
     *
     * @param \Generated\Shared\Transfer\CommentTransfer $comment
     *
     * @return $this
     */
    public function addComment(CommentTransfer $comment)
    {
        $this->comments[] = $comment;
        $this->modifiedProperties[self::COMMENTS] = true;

        return $this;
    }

    /**
     * @module Comment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireComments()
    {
        $this->assertCollectionPropertyIsSet(self::COMMENTS);

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
                case 'ownerIds':
                case 'ownerType':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'comments':
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
                case 'ownerIds':
                case 'ownerType':
                    $values[$arrayKey] = $value;

                    break;
                case 'comments':
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
                case 'ownerIds':
                case 'ownerType':
                    $values[$arrayKey] = $value;

                    break;
                case 'comments':
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
        $this->comments = $this->comments ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'ownerIds' => $this->ownerIds,
            'ownerType' => $this->ownerType,
            'comments' => $this->comments,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'owner_ids' => $this->ownerIds,
            'owner_type' => $this->ownerType,
            'comments' => $this->comments,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'owner_ids' => $this->ownerIds instanceof AbstractTransfer ? $this->ownerIds->toArray(true, false) : $this->ownerIds,
            'owner_type' => $this->ownerType instanceof AbstractTransfer ? $this->ownerType->toArray(true, false) : $this->ownerType,
            'comments' => $this->comments instanceof AbstractTransfer ? $this->comments->toArray(true, false) : $this->addValuesToCollection($this->comments, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'ownerIds' => $this->ownerIds instanceof AbstractTransfer ? $this->ownerIds->toArray(true, true) : $this->ownerIds,
            'ownerType' => $this->ownerType instanceof AbstractTransfer ? $this->ownerType->toArray(true, true) : $this->ownerType,
            'comments' => $this->comments instanceof AbstractTransfer ? $this->comments->toArray(true, true) : $this->addValuesToCollection($this->comments, true, true),
        ];
    }
}
