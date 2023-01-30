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
class FileUploadTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const REAL_PATH = 'realPath';

    /**
     * @var string
     */
    public const CLIENT_ORIGINAL_NAME = 'clientOriginalName';

    /**
     * @var string
     */
    public const MIME_TYPE_NAME = 'mimeTypeName';

    /**
     * @var string
     */
    public const CLIENT_ORIGINAL_EXTENSION = 'clientOriginalExtension';

    /**
     * @var string
     */
    public const SIZE = 'size';

    /**
     * @var string|null
     */
    protected $realPath;

    /**
     * @var string|null
     */
    protected $clientOriginalName;

    /**
     * @var string|null
     */
    protected $mimeTypeName;

    /**
     * @var string|null
     */
    protected $clientOriginalExtension;

    /**
     * @var int|null
     */
    protected $size;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'real_path' => 'realPath',
        'realPath' => 'realPath',
        'RealPath' => 'realPath',
        'client_original_name' => 'clientOriginalName',
        'clientOriginalName' => 'clientOriginalName',
        'ClientOriginalName' => 'clientOriginalName',
        'mime_type_name' => 'mimeTypeName',
        'mimeTypeName' => 'mimeTypeName',
        'MimeTypeName' => 'mimeTypeName',
        'client_original_extension' => 'clientOriginalExtension',
        'clientOriginalExtension' => 'clientOriginalExtension',
        'ClientOriginalExtension' => 'clientOriginalExtension',
        'size' => 'size',
        'Size' => 'size',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::REAL_PATH => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'real_path',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CLIENT_ORIGINAL_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'client_original_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MIME_TYPE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'mime_type_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CLIENT_ORIGINAL_EXTENSION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'client_original_extension',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SIZE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'size',
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
     * @param string|null $realPath
     *
     * @return $this
     */
    public function setRealPath($realPath)
    {
        $this->realPath = $realPath;
        $this->modifiedProperties[self::REAL_PATH] = true;

        return $this;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @return string|null
     */
    public function getRealPath()
    {
        return $this->realPath;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @param string|null $realPath
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRealPathOrFail($realPath)
    {
        if ($realPath === null) {
            $this->throwNullValueException(static::REAL_PATH);
        }

        return $this->setRealPath($realPath);
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRealPathOrFail()
    {
        if ($this->realPath === null) {
            $this->throwNullValueException(static::REAL_PATH);
        }

        return $this->realPath;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRealPath()
    {
        $this->assertPropertyIsSet(self::REAL_PATH);

        return $this;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @param string|null $clientOriginalName
     *
     * @return $this
     */
    public function setClientOriginalName($clientOriginalName)
    {
        $this->clientOriginalName = $clientOriginalName;
        $this->modifiedProperties[self::CLIENT_ORIGINAL_NAME] = true;

        return $this;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @return string|null
     */
    public function getClientOriginalName()
    {
        return $this->clientOriginalName;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @param string|null $clientOriginalName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setClientOriginalNameOrFail($clientOriginalName)
    {
        if ($clientOriginalName === null) {
            $this->throwNullValueException(static::CLIENT_ORIGINAL_NAME);
        }

        return $this->setClientOriginalName($clientOriginalName);
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getClientOriginalNameOrFail()
    {
        if ($this->clientOriginalName === null) {
            $this->throwNullValueException(static::CLIENT_ORIGINAL_NAME);
        }

        return $this->clientOriginalName;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireClientOriginalName()
    {
        $this->assertPropertyIsSet(self::CLIENT_ORIGINAL_NAME);

        return $this;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @param string|null $mimeTypeName
     *
     * @return $this
     */
    public function setMimeTypeName($mimeTypeName)
    {
        $this->mimeTypeName = $mimeTypeName;
        $this->modifiedProperties[self::MIME_TYPE_NAME] = true;

        return $this;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @return string|null
     */
    public function getMimeTypeName()
    {
        return $this->mimeTypeName;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @param string|null $mimeTypeName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMimeTypeNameOrFail($mimeTypeName)
    {
        if ($mimeTypeName === null) {
            $this->throwNullValueException(static::MIME_TYPE_NAME);
        }

        return $this->setMimeTypeName($mimeTypeName);
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getMimeTypeNameOrFail()
    {
        if ($this->mimeTypeName === null) {
            $this->throwNullValueException(static::MIME_TYPE_NAME);
        }

        return $this->mimeTypeName;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMimeTypeName()
    {
        $this->assertPropertyIsSet(self::MIME_TYPE_NAME);

        return $this;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @param string|null $clientOriginalExtension
     *
     * @return $this
     */
    public function setClientOriginalExtension($clientOriginalExtension)
    {
        $this->clientOriginalExtension = $clientOriginalExtension;
        $this->modifiedProperties[self::CLIENT_ORIGINAL_EXTENSION] = true;

        return $this;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @return string|null
     */
    public function getClientOriginalExtension()
    {
        return $this->clientOriginalExtension;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @param string|null $clientOriginalExtension
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setClientOriginalExtensionOrFail($clientOriginalExtension)
    {
        if ($clientOriginalExtension === null) {
            $this->throwNullValueException(static::CLIENT_ORIGINAL_EXTENSION);
        }

        return $this->setClientOriginalExtension($clientOriginalExtension);
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getClientOriginalExtensionOrFail()
    {
        if ($this->clientOriginalExtension === null) {
            $this->throwNullValueException(static::CLIENT_ORIGINAL_EXTENSION);
        }

        return $this->clientOriginalExtension;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireClientOriginalExtension()
    {
        $this->assertPropertyIsSet(self::CLIENT_ORIGINAL_EXTENSION);

        return $this;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @param int|null $size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->size = $size;
        $this->modifiedProperties[self::SIZE] = true;

        return $this;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @return int|null
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @param int|null $size
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSizeOrFail($size)
    {
        if ($size === null) {
            $this->throwNullValueException(static::SIZE);
        }

        return $this->setSize($size);
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getSizeOrFail()
    {
        if ($this->size === null) {
            $this->throwNullValueException(static::SIZE);
        }

        return $this->size;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSize()
    {
        $this->assertPropertyIsSet(self::SIZE);

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
                case 'realPath':
                case 'clientOriginalName':
                case 'mimeTypeName':
                case 'clientOriginalExtension':
                case 'size':
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
                case 'realPath':
                case 'clientOriginalName':
                case 'mimeTypeName':
                case 'clientOriginalExtension':
                case 'size':
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
                case 'realPath':
                case 'clientOriginalName':
                case 'mimeTypeName':
                case 'clientOriginalExtension':
                case 'size':
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
            'realPath' => $this->realPath,
            'clientOriginalName' => $this->clientOriginalName,
            'mimeTypeName' => $this->mimeTypeName,
            'clientOriginalExtension' => $this->clientOriginalExtension,
            'size' => $this->size,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'real_path' => $this->realPath,
            'client_original_name' => $this->clientOriginalName,
            'mime_type_name' => $this->mimeTypeName,
            'client_original_extension' => $this->clientOriginalExtension,
            'size' => $this->size,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'real_path' => $this->realPath instanceof AbstractTransfer ? $this->realPath->toArray(true, false) : $this->realPath,
            'client_original_name' => $this->clientOriginalName instanceof AbstractTransfer ? $this->clientOriginalName->toArray(true, false) : $this->clientOriginalName,
            'mime_type_name' => $this->mimeTypeName instanceof AbstractTransfer ? $this->mimeTypeName->toArray(true, false) : $this->mimeTypeName,
            'client_original_extension' => $this->clientOriginalExtension instanceof AbstractTransfer ? $this->clientOriginalExtension->toArray(true, false) : $this->clientOriginalExtension,
            'size' => $this->size instanceof AbstractTransfer ? $this->size->toArray(true, false) : $this->size,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'realPath' => $this->realPath instanceof AbstractTransfer ? $this->realPath->toArray(true, true) : $this->realPath,
            'clientOriginalName' => $this->clientOriginalName instanceof AbstractTransfer ? $this->clientOriginalName->toArray(true, true) : $this->clientOriginalName,
            'mimeTypeName' => $this->mimeTypeName instanceof AbstractTransfer ? $this->mimeTypeName->toArray(true, true) : $this->mimeTypeName,
            'clientOriginalExtension' => $this->clientOriginalExtension instanceof AbstractTransfer ? $this->clientOriginalExtension->toArray(true, true) : $this->clientOriginalExtension,
            'size' => $this->size instanceof AbstractTransfer ? $this->size->toArray(true, true) : $this->size,
        ];
    }
}
