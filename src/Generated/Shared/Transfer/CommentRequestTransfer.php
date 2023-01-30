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
class CommentRequestTransfer extends AbstractTransfer
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
    public const COMMENT = 'comment';

    /**
     * @var int|null
     */
    protected $ownerId;

    /**
     * @var string|null
     */
    protected $ownerType;

    /**
     * @var \Generated\Shared\Transfer\CommentTransfer|null
     */
    protected $comment;

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
        'comment' => 'comment',
        'Comment' => 'comment',
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
        self::COMMENT => [
            'type' => 'Generated\Shared\Transfer\CommentTransfer',
            'type_shim' => null,
            'name_underscore' => 'comment',
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
     * @module CommentWidget|CommentSalesConnector|Comment
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
     * @module CommentWidget|CommentSalesConnector|Comment
     *
     * @return int|null
     */
    public function getOwnerId()
    {
        return $this->ownerId;
    }

    /**
     * @module CommentWidget|CommentSalesConnector|Comment
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
     * @module CommentWidget|CommentSalesConnector|Comment
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
     * @module CommentWidget|CommentSalesConnector|Comment
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
     * @module CommentWidget|CommentSalesConnector|Comment
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
     * @module CommentWidget|CommentSalesConnector|Comment
     *
     * @return string|null
     */
    public function getOwnerType()
    {
        return $this->ownerType;
    }

    /**
     * @module CommentWidget|CommentSalesConnector|Comment
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
     * @module CommentWidget|CommentSalesConnector|Comment
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
     * @module CommentWidget|CommentSalesConnector|Comment
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
     * @module CommentWidget|CommentSalesConnector|Comment
     *
     * @param \Generated\Shared\Transfer\CommentTransfer|null $comment
     *
     * @return $this
     */
    public function setComment(CommentTransfer $comment = null)
    {
        $this->comment = $comment;
        $this->modifiedProperties[self::COMMENT] = true;

        return $this;
    }

    /**
     * @module CommentWidget|CommentSalesConnector|Comment
     *
     * @return \Generated\Shared\Transfer\CommentTransfer|null
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @module CommentWidget|CommentSalesConnector|Comment
     *
     * @param \Generated\Shared\Transfer\CommentTransfer $comment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCommentOrFail(CommentTransfer $comment)
    {
        return $this->setComment($comment);
    }

    /**
     * @module CommentWidget|CommentSalesConnector|Comment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CommentTransfer
     */
    public function getCommentOrFail()
    {
        if ($this->comment === null) {
            $this->throwNullValueException(static::COMMENT);
        }

        return $this->comment;
    }

    /**
     * @module CommentWidget|CommentSalesConnector|Comment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireComment()
    {
        $this->assertPropertyIsSet(self::COMMENT);

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
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'comment':
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
                case 'ownerId':
                case 'ownerType':
                    $values[$arrayKey] = $value;

                    break;
                case 'comment':
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
                case 'ownerId':
                case 'ownerType':
                    $values[$arrayKey] = $value;

                    break;
                case 'comment':
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
            'ownerId' => $this->ownerId,
            'ownerType' => $this->ownerType,
            'comment' => $this->comment,
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
            'comment' => $this->comment,
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
            'comment' => $this->comment instanceof AbstractTransfer ? $this->comment->toArray(true, false) : $this->comment,
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
            'comment' => $this->comment instanceof AbstractTransfer ? $this->comment->toArray(true, true) : $this->comment,
        ];
    }
}
