<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyCommentThreadEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_COMMENT_THREAD = 'idCommentThread';

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
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const SPY_COMMENTS = 'spyComments';

    /**
     * @var integer|null
     */
    protected $idCommentThread;

    /**
     * @var integer|null
     */
    protected $ownerId;

    /**
     * @var string|null
     */
    protected $ownerType;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCommentEntityTransfer[]
     */
    protected $spyComments;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_comment_thread' => 'idCommentThread',
        'idCommentThread' => 'idCommentThread',
        'IdCommentThread' => 'idCommentThread',
        'owner_id' => 'ownerId',
        'ownerId' => 'ownerId',
        'OwnerId' => 'ownerId',
        'owner_type' => 'ownerType',
        'ownerType' => 'ownerType',
        'OwnerType' => 'ownerType',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'spy_comments' => 'spyComments',
        'spyComments' => 'spyComments',
        'SpyComments' => 'spyComments',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_COMMENT_THREAD => [
            'type' => 'integer',
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
        self::OWNER_ID => [
            'type' => 'integer',
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
        self::SPY_COMMENTS => [
            'type' => 'Generated\Shared\Transfer\SpyCommentEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_comments',
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
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\Comment\Persistence\SpyCommentThread';


    /**
     * @module 
     *
     * @param integer|null $idCommentThread
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdCommentThread()
    {
        return $this->idCommentThread;
    }

    /**
     * @module 
     *
     * @param integer|null $idCommentThread
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdCommentThreadOrFail()
    {
        if ($this->idCommentThread === null) {
            $this->throwNullValueException(static::ID_COMMENT_THREAD);
        }

        return $this->idCommentThread;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $ownerId
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
     * @module 
     *
     * @return integer|null
     */
    public function getOwnerId()
    {
        return $this->ownerId;
    }

    /**
     * @module 
     *
     * @param integer|null $ownerId
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getOwnerIdOrFail()
    {
        if ($this->ownerId === null) {
            $this->throwNullValueException(static::OWNER_ID);
        }

        return $this->ownerId;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getOwnerType()
    {
        return $this->ownerType;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCommentEntityTransfer[] $spyComments
     *
     * @return $this
     */
    public function setSpyComments(ArrayObject $spyComments)
    {
        $this->spyComments = $spyComments;
        $this->modifiedProperties[self::SPY_COMMENTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCommentEntityTransfer[]
     */
    public function getSpyComments()
    {
        return $this->spyComments;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCommentEntityTransfer $spyComments
     *
     * @return $this
     */
    public function addSpyComments(SpyCommentEntityTransfer $spyComments)
    {
        $this->spyComments[] = $spyComments;
        $this->modifiedProperties[self::SPY_COMMENTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyComments()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_COMMENTS);

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
                case 'ownerId':
                case 'ownerType':
                case 'uuid':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyComments':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                default:
                    if (!$ignoreMissingProperty) {
                        throw new \InvalidArgumentException(sprintf('Missing property `%s` in `%s`', $property, static::class));
                    }
                    $this->virtualProperties[$property] = $value;
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
                case 'ownerId':
                case 'ownerType':
                case 'uuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyComments':
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
                case 'ownerId':
                case 'ownerType':
                case 'uuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyComments':
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
        $this->spyComments = $this->spyComments ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idCommentThread' => $this->idCommentThread,
            'ownerId' => $this->ownerId,
            'ownerType' => $this->ownerType,
            'uuid' => $this->uuid,
            'spyComments' => $this->spyComments,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_comment_thread' => $this->idCommentThread,
            'owner_id' => $this->ownerId,
            'owner_type' => $this->ownerType,
            'uuid' => $this->uuid,
            'spy_comments' => $this->spyComments,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_comment_thread' => $this->idCommentThread instanceof AbstractTransfer ? $this->idCommentThread->toArray(true, false) : $this->idCommentThread,
            'owner_id' => $this->ownerId instanceof AbstractTransfer ? $this->ownerId->toArray(true, false) : $this->ownerId,
            'owner_type' => $this->ownerType instanceof AbstractTransfer ? $this->ownerType->toArray(true, false) : $this->ownerType,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'spy_comments' => $this->spyComments instanceof AbstractTransfer ? $this->spyComments->toArray(true, false) : $this->addValuesToCollection($this->spyComments, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCommentThread' => $this->idCommentThread instanceof AbstractTransfer ? $this->idCommentThread->toArray(true, true) : $this->idCommentThread,
            'ownerId' => $this->ownerId instanceof AbstractTransfer ? $this->ownerId->toArray(true, true) : $this->ownerId,
            'ownerType' => $this->ownerType instanceof AbstractTransfer ? $this->ownerType->toArray(true, true) : $this->ownerType,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'spyComments' => $this->spyComments instanceof AbstractTransfer ? $this->spyComments->toArray(true, true) : $this->addValuesToCollection($this->spyComments, true, true),
        ];
    }
}
