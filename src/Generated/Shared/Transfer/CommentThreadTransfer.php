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
class CommentThreadTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_COMMENT_THREAD = 'idCommentThread';

    /**
     * @var string
     */
    public const OWNER_TYPE = 'ownerType';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const OWNER_ID = 'ownerId';

    /**
     * @var string
     */
    public const COMMENTS = 'comments';

    /**
     * @var int|null
     */
    protected $idCommentThread;

    /**
     * @var string|null
     */
    protected $ownerType;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var int|null
     */
    protected $ownerId;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\CommentTransfer[]
     */
    protected $comments;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_comment_thread' => 'idCommentThread',
        'idCommentThread' => 'idCommentThread',
        'IdCommentThread' => 'idCommentThread',
        'owner_type' => 'ownerType',
        'ownerType' => 'ownerType',
        'OwnerType' => 'ownerType',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'owner_id' => 'ownerId',
        'ownerId' => 'ownerId',
        'OwnerId' => 'ownerId',
        'comments' => 'comments',
        'Comments' => 'comments',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_COMMENT_THREAD => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_comment_thread',
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
        self::UUID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'uuid',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
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
     * @module CartPage|CheckoutPage|CommentWidget|CustomerPage|Comment
     *
     * @param int|null $idCommentThread
     *
     * @return $this
     */
    public function setIdCommentThread($idCommentThread)
    {
        $this->idCommentThread = $idCommentThread;
        $this->modifiedProperties[self::ID_COMMENT_THREAD] = true;

        return $this;
    }

    /**
     * @module CartPage|CheckoutPage|CommentWidget|CustomerPage|Comment
     *
     * @return int|null
     */
    public function getIdCommentThread()
    {
        return $this->idCommentThread;
    }

    /**
     * @module CartPage|CheckoutPage|CommentWidget|CustomerPage|Comment
     *
     * @param int|null $idCommentThread
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCommentThreadOrFail($idCommentThread)
    {
        if ($idCommentThread === null) {
            $this->throwNullValueException(static::ID_COMMENT_THREAD);
        }

        return $this->setIdCommentThread($idCommentThread);
    }

    /**
     * @module CartPage|CheckoutPage|CommentWidget|CustomerPage|Comment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCommentThreadOrFail()
    {
        if ($this->idCommentThread === null) {
            $this->throwNullValueException(static::ID_COMMENT_THREAD);
        }

        return $this->idCommentThread;
    }

    /**
     * @module CartPage|CheckoutPage|CommentWidget|CustomerPage|Comment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCommentThread()
    {
        $this->assertPropertyIsSet(self::ID_COMMENT_THREAD);

        return $this;
    }

    /**
     * @module CartPage|CommentWidget|CommentSalesConnector|Comment
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
     * @module CartPage|CommentWidget|CommentSalesConnector|Comment
     *
     * @return string|null
     */
    public function getOwnerType()
    {
        return $this->ownerType;
    }

    /**
     * @module CartPage|CommentWidget|CommentSalesConnector|Comment
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
     * @module CartPage|CommentWidget|CommentSalesConnector|Comment
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
     * @module CartPage|CommentWidget|CommentSalesConnector|Comment
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
     * @module CommentWidget|Comment
     *
     * @param string|null $uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        $this->modifiedProperties[self::UUID] = true;

        return $this;
    }

    /**
     * @module CommentWidget|Comment
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @module CommentWidget|Comment
     *
     * @param string|null $uuid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUuidOrFail($uuid)
    {
        if ($uuid === null) {
            $this->throwNullValueException(static::UUID);
        }

        return $this->setUuid($uuid);
    }

    /**
     * @module CommentWidget|Comment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUuidOrFail()
    {
        if ($this->uuid === null) {
            $this->throwNullValueException(static::UUID);
        }

        return $this->uuid;
    }

    /**
     * @module CommentWidget|Comment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUuid()
    {
        $this->assertPropertyIsSet(self::UUID);

        return $this;
    }

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
     * @module CommentWidget|CommentSalesConnector|Comment
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\CommentTransfer[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @module CommentWidget|CommentSalesConnector|Comment
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
     * @module CommentWidget|CommentSalesConnector|Comment
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
                case 'idCommentThread':
                case 'ownerType':
                case 'uuid':
                case 'ownerId':
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
                case 'idCommentThread':
                case 'ownerType':
                case 'uuid':
                case 'ownerId':
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
                case 'idCommentThread':
                case 'ownerType':
                case 'uuid':
                case 'ownerId':
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
            'idCommentThread' => $this->idCommentThread,
            'ownerType' => $this->ownerType,
            'uuid' => $this->uuid,
            'ownerId' => $this->ownerId,
            'comments' => $this->comments,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_comment_thread' => $this->idCommentThread,
            'owner_type' => $this->ownerType,
            'uuid' => $this->uuid,
            'owner_id' => $this->ownerId,
            'comments' => $this->comments,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_comment_thread' => $this->idCommentThread instanceof AbstractTransfer ? $this->idCommentThread->toArray(true, false) : $this->idCommentThread,
            'owner_type' => $this->ownerType instanceof AbstractTransfer ? $this->ownerType->toArray(true, false) : $this->ownerType,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'owner_id' => $this->ownerId instanceof AbstractTransfer ? $this->ownerId->toArray(true, false) : $this->ownerId,
            'comments' => $this->comments instanceof AbstractTransfer ? $this->comments->toArray(true, false) : $this->addValuesToCollection($this->comments, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCommentThread' => $this->idCommentThread instanceof AbstractTransfer ? $this->idCommentThread->toArray(true, true) : $this->idCommentThread,
            'ownerType' => $this->ownerType instanceof AbstractTransfer ? $this->ownerType->toArray(true, true) : $this->ownerType,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'ownerId' => $this->ownerId instanceof AbstractTransfer ? $this->ownerId->toArray(true, true) : $this->ownerId,
            'comments' => $this->comments instanceof AbstractTransfer ? $this->comments->toArray(true, true) : $this->addValuesToCollection($this->comments, true, true),
        ];
    }
}
