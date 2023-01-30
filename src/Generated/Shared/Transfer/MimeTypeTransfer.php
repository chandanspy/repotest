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
class MimeTypeTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_MIME_TYPE = 'idMimeType';

    /**
     * @var string
     */
    public const IS_ALLOWED = 'isAllowed';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const COMMENT = 'comment';

    /**
     * @var int|null
     */
    protected $idMimeType;

    /**
     * @var bool|null
     */
    protected $isAllowed;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $comment;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_mime_type' => 'idMimeType',
        'idMimeType' => 'idMimeType',
        'IdMimeType' => 'idMimeType',
        'is_allowed' => 'isAllowed',
        'isAllowed' => 'isAllowed',
        'IsAllowed' => 'isAllowed',
        'name' => 'name',
        'Name' => 'name',
        'comment' => 'comment',
        'Comment' => 'comment',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_MIME_TYPE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_mime_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_ALLOWED => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_allowed',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COMMENT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'comment',
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
     * @module FileManagerGui|FileManager
     *
     * @param int|null $idMimeType
     *
     * @return $this
     */
    public function setIdMimeType($idMimeType)
    {
        $this->idMimeType = $idMimeType;
        $this->modifiedProperties[self::ID_MIME_TYPE] = true;

        return $this;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @return int|null
     */
    public function getIdMimeType()
    {
        return $this->idMimeType;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @param int|null $idMimeType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdMimeTypeOrFail($idMimeType)
    {
        if ($idMimeType === null) {
            $this->throwNullValueException(static::ID_MIME_TYPE);
        }

        return $this->setIdMimeType($idMimeType);
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdMimeTypeOrFail()
    {
        if ($this->idMimeType === null) {
            $this->throwNullValueException(static::ID_MIME_TYPE);
        }

        return $this->idMimeType;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdMimeType()
    {
        $this->assertPropertyIsSet(self::ID_MIME_TYPE);

        return $this;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @param bool|null $isAllowed
     *
     * @return $this
     */
    public function setIsAllowed($isAllowed)
    {
        $this->isAllowed = $isAllowed;
        $this->modifiedProperties[self::IS_ALLOWED] = true;

        return $this;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @return bool|null
     */
    public function getIsAllowed()
    {
        return $this->isAllowed;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @param bool|null $isAllowed
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsAllowedOrFail($isAllowed)
    {
        if ($isAllowed === null) {
            $this->throwNullValueException(static::IS_ALLOWED);
        }

        return $this->setIsAllowed($isAllowed);
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsAllowedOrFail()
    {
        if ($this->isAllowed === null) {
            $this->throwNullValueException(static::IS_ALLOWED);
        }

        return $this->isAllowed;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsAllowed()
    {
        $this->assertPropertyIsSet(self::IS_ALLOWED);

        return $this;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @param string|null $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        $this->modifiedProperties[self::NAME] = true;

        return $this;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @param string|null $name
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNameOrFail($name)
    {
        if ($name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->setName($name);
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNameOrFail()
    {
        if ($this->name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->name;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireName()
    {
        $this->assertPropertyIsSet(self::NAME);

        return $this;
    }

    /**
     * @module FileManager
     *
     * @param string|null $comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        $this->modifiedProperties[self::COMMENT] = true;

        return $this;
    }

    /**
     * @module FileManager
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @module FileManager
     *
     * @param string|null $comment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCommentOrFail($comment)
    {
        if ($comment === null) {
            $this->throwNullValueException(static::COMMENT);
        }

        return $this->setComment($comment);
    }

    /**
     * @module FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCommentOrFail()
    {
        if ($this->comment === null) {
            $this->throwNullValueException(static::COMMENT);
        }

        return $this->comment;
    }

    /**
     * @module FileManager
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
                case 'idMimeType':
                case 'isAllowed':
                case 'name':
                case 'comment':
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
                case 'idMimeType':
                case 'isAllowed':
                case 'name':
                case 'comment':
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
                case 'idMimeType':
                case 'isAllowed':
                case 'name':
                case 'comment':
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
            'idMimeType' => $this->idMimeType,
            'isAllowed' => $this->isAllowed,
            'name' => $this->name,
            'comment' => $this->comment,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_mime_type' => $this->idMimeType,
            'is_allowed' => $this->isAllowed,
            'name' => $this->name,
            'comment' => $this->comment,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_mime_type' => $this->idMimeType instanceof AbstractTransfer ? $this->idMimeType->toArray(true, false) : $this->idMimeType,
            'is_allowed' => $this->isAllowed instanceof AbstractTransfer ? $this->isAllowed->toArray(true, false) : $this->isAllowed,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'comment' => $this->comment instanceof AbstractTransfer ? $this->comment->toArray(true, false) : $this->comment,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idMimeType' => $this->idMimeType instanceof AbstractTransfer ? $this->idMimeType->toArray(true, true) : $this->idMimeType,
            'isAllowed' => $this->isAllowed instanceof AbstractTransfer ? $this->isAllowed->toArray(true, true) : $this->isAllowed,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'comment' => $this->comment instanceof AbstractTransfer ? $this->comment->toArray(true, true) : $this->comment,
        ];
    }
}
