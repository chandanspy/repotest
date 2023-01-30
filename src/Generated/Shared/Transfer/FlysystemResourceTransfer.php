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
class FlysystemResourceTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const TYPE = 'type';

    /**
     * @var string
     */
    public const PATH = 'path';

    /**
     * @var string
     */
    public const TIMESTAMP = 'timestamp';

    /**
     * @var string
     */
    public const SIZE = 'size';

    /**
     * @var string
     */
    public const DIRNAME = 'dirname';

    /**
     * @var string
     */
    public const BASENAME = 'basename';

    /**
     * @var string
     */
    public const EXTENSION = 'extension';

    /**
     * @var string
     */
    public const FILENAME = 'filename';

    /**
     * @var string
     */
    public const IS_FILE = 'isFile';

    /**
     * @var string|null
     */
    protected $type;

    /**
     * @var string|null
     */
    protected $path;

    /**
     * @var int|null
     */
    protected $timestamp;

    /**
     * @var int|null
     */
    protected $size;

    /**
     * @var string|null
     */
    protected $dirname;

    /**
     * @var string|null
     */
    protected $basename;

    /**
     * @var string|null
     */
    protected $extension;

    /**
     * @var string|null
     */
    protected $filename;

    /**
     * @var bool|null
     */
    protected $isFile;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'type' => 'type',
        'Type' => 'type',
        'path' => 'path',
        'Path' => 'path',
        'timestamp' => 'timestamp',
        'Timestamp' => 'timestamp',
        'size' => 'size',
        'Size' => 'size',
        'dirname' => 'dirname',
        'Dirname' => 'dirname',
        'basename' => 'basename',
        'Basename' => 'basename',
        'extension' => 'extension',
        'Extension' => 'extension',
        'filename' => 'filename',
        'Filename' => 'filename',
        'is_file' => 'isFile',
        'isFile' => 'isFile',
        'IsFile' => 'isFile',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PATH => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'path',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TIMESTAMP => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'timestamp',
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
        self::DIRNAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'dirname',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::BASENAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'basename',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::EXTENSION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'extension',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FILENAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'filename',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_FILE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_file',
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
     * @module Flysystem
     *
     * @param string|null $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        $this->modifiedProperties[self::TYPE] = true;

        return $this;
    }

    /**
     * @module Flysystem
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @module Flysystem
     *
     * @param string|null $type
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTypeOrFail($type)
    {
        if ($type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->setType($type);
    }

    /**
     * @module Flysystem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTypeOrFail()
    {
        if ($this->type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->type;
    }

    /**
     * @module Flysystem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireType()
    {
        $this->assertPropertyIsSet(self::TYPE);

        return $this;
    }

    /**
     * @module Flysystem
     *
     * @param string|null $path
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->path = $path;
        $this->modifiedProperties[self::PATH] = true;

        return $this;
    }

    /**
     * @module Flysystem
     *
     * @return string|null
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @module Flysystem
     *
     * @param string|null $path
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPathOrFail($path)
    {
        if ($path === null) {
            $this->throwNullValueException(static::PATH);
        }

        return $this->setPath($path);
    }

    /**
     * @module Flysystem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPathOrFail()
    {
        if ($this->path === null) {
            $this->throwNullValueException(static::PATH);
        }

        return $this->path;
    }

    /**
     * @module Flysystem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePath()
    {
        $this->assertPropertyIsSet(self::PATH);

        return $this;
    }

    /**
     * @module Flysystem
     *
     * @param int|null $timestamp
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
        $this->modifiedProperties[self::TIMESTAMP] = true;

        return $this;
    }

    /**
     * @module Flysystem
     *
     * @return int|null
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @module Flysystem
     *
     * @param int|null $timestamp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTimestampOrFail($timestamp)
    {
        if ($timestamp === null) {
            $this->throwNullValueException(static::TIMESTAMP);
        }

        return $this->setTimestamp($timestamp);
    }

    /**
     * @module Flysystem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getTimestampOrFail()
    {
        if ($this->timestamp === null) {
            $this->throwNullValueException(static::TIMESTAMP);
        }

        return $this->timestamp;
    }

    /**
     * @module Flysystem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTimestamp()
    {
        $this->assertPropertyIsSet(self::TIMESTAMP);

        return $this;
    }

    /**
     * @module Flysystem
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
     * @module Flysystem
     *
     * @return int|null
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @module Flysystem
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
     * @module Flysystem
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
     * @module Flysystem
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
     * @module Flysystem
     *
     * @param string|null $dirname
     *
     * @return $this
     */
    public function setDirname($dirname)
    {
        $this->dirname = $dirname;
        $this->modifiedProperties[self::DIRNAME] = true;

        return $this;
    }

    /**
     * @module Flysystem
     *
     * @return string|null
     */
    public function getDirname()
    {
        return $this->dirname;
    }

    /**
     * @module Flysystem
     *
     * @param string|null $dirname
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDirnameOrFail($dirname)
    {
        if ($dirname === null) {
            $this->throwNullValueException(static::DIRNAME);
        }

        return $this->setDirname($dirname);
    }

    /**
     * @module Flysystem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDirnameOrFail()
    {
        if ($this->dirname === null) {
            $this->throwNullValueException(static::DIRNAME);
        }

        return $this->dirname;
    }

    /**
     * @module Flysystem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDirname()
    {
        $this->assertPropertyIsSet(self::DIRNAME);

        return $this;
    }

    /**
     * @module Flysystem
     *
     * @param string|null $basename
     *
     * @return $this
     */
    public function setBasename($basename)
    {
        $this->basename = $basename;
        $this->modifiedProperties[self::BASENAME] = true;

        return $this;
    }

    /**
     * @module Flysystem
     *
     * @return string|null
     */
    public function getBasename()
    {
        return $this->basename;
    }

    /**
     * @module Flysystem
     *
     * @param string|null $basename
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setBasenameOrFail($basename)
    {
        if ($basename === null) {
            $this->throwNullValueException(static::BASENAME);
        }

        return $this->setBasename($basename);
    }

    /**
     * @module Flysystem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getBasenameOrFail()
    {
        if ($this->basename === null) {
            $this->throwNullValueException(static::BASENAME);
        }

        return $this->basename;
    }

    /**
     * @module Flysystem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireBasename()
    {
        $this->assertPropertyIsSet(self::BASENAME);

        return $this;
    }

    /**
     * @module Flysystem
     *
     * @param string|null $extension
     *
     * @return $this
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;
        $this->modifiedProperties[self::EXTENSION] = true;

        return $this;
    }

    /**
     * @module Flysystem
     *
     * @return string|null
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * @module Flysystem
     *
     * @param string|null $extension
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setExtensionOrFail($extension)
    {
        if ($extension === null) {
            $this->throwNullValueException(static::EXTENSION);
        }

        return $this->setExtension($extension);
    }

    /**
     * @module Flysystem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getExtensionOrFail()
    {
        if ($this->extension === null) {
            $this->throwNullValueException(static::EXTENSION);
        }

        return $this->extension;
    }

    /**
     * @module Flysystem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireExtension()
    {
        $this->assertPropertyIsSet(self::EXTENSION);

        return $this;
    }

    /**
     * @module Flysystem
     *
     * @param string|null $filename
     *
     * @return $this
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;
        $this->modifiedProperties[self::FILENAME] = true;

        return $this;
    }

    /**
     * @module Flysystem
     *
     * @return string|null
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * @module Flysystem
     *
     * @param string|null $filename
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFilenameOrFail($filename)
    {
        if ($filename === null) {
            $this->throwNullValueException(static::FILENAME);
        }

        return $this->setFilename($filename);
    }

    /**
     * @module Flysystem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getFilenameOrFail()
    {
        if ($this->filename === null) {
            $this->throwNullValueException(static::FILENAME);
        }

        return $this->filename;
    }

    /**
     * @module Flysystem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFilename()
    {
        $this->assertPropertyIsSet(self::FILENAME);

        return $this;
    }

    /**
     * @module Flysystem
     *
     * @param bool|null $isFile
     *
     * @return $this
     */
    public function setIsFile($isFile)
    {
        $this->isFile = $isFile;
        $this->modifiedProperties[self::IS_FILE] = true;

        return $this;
    }

    /**
     * @module Flysystem
     *
     * @return bool|null
     */
    public function getIsFile()
    {
        return $this->isFile;
    }

    /**
     * @module Flysystem
     *
     * @param bool|null $isFile
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsFileOrFail($isFile)
    {
        if ($isFile === null) {
            $this->throwNullValueException(static::IS_FILE);
        }

        return $this->setIsFile($isFile);
    }

    /**
     * @module Flysystem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsFileOrFail()
    {
        if ($this->isFile === null) {
            $this->throwNullValueException(static::IS_FILE);
        }

        return $this->isFile;
    }

    /**
     * @module Flysystem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsFile()
    {
        $this->assertPropertyIsSet(self::IS_FILE);

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
                case 'type':
                case 'path':
                case 'timestamp':
                case 'size':
                case 'dirname':
                case 'basename':
                case 'extension':
                case 'filename':
                case 'isFile':
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
                case 'type':
                case 'path':
                case 'timestamp':
                case 'size':
                case 'dirname':
                case 'basename':
                case 'extension':
                case 'filename':
                case 'isFile':
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
                case 'type':
                case 'path':
                case 'timestamp':
                case 'size':
                case 'dirname':
                case 'basename':
                case 'extension':
                case 'filename':
                case 'isFile':
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
            'type' => $this->type,
            'path' => $this->path,
            'timestamp' => $this->timestamp,
            'size' => $this->size,
            'dirname' => $this->dirname,
            'basename' => $this->basename,
            'extension' => $this->extension,
            'filename' => $this->filename,
            'isFile' => $this->isFile,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'type' => $this->type,
            'path' => $this->path,
            'timestamp' => $this->timestamp,
            'size' => $this->size,
            'dirname' => $this->dirname,
            'basename' => $this->basename,
            'extension' => $this->extension,
            'filename' => $this->filename,
            'is_file' => $this->isFile,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, false) : $this->type,
            'path' => $this->path instanceof AbstractTransfer ? $this->path->toArray(true, false) : $this->path,
            'timestamp' => $this->timestamp instanceof AbstractTransfer ? $this->timestamp->toArray(true, false) : $this->timestamp,
            'size' => $this->size instanceof AbstractTransfer ? $this->size->toArray(true, false) : $this->size,
            'dirname' => $this->dirname instanceof AbstractTransfer ? $this->dirname->toArray(true, false) : $this->dirname,
            'basename' => $this->basename instanceof AbstractTransfer ? $this->basename->toArray(true, false) : $this->basename,
            'extension' => $this->extension instanceof AbstractTransfer ? $this->extension->toArray(true, false) : $this->extension,
            'filename' => $this->filename instanceof AbstractTransfer ? $this->filename->toArray(true, false) : $this->filename,
            'is_file' => $this->isFile instanceof AbstractTransfer ? $this->isFile->toArray(true, false) : $this->isFile,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, true) : $this->type,
            'path' => $this->path instanceof AbstractTransfer ? $this->path->toArray(true, true) : $this->path,
            'timestamp' => $this->timestamp instanceof AbstractTransfer ? $this->timestamp->toArray(true, true) : $this->timestamp,
            'size' => $this->size instanceof AbstractTransfer ? $this->size->toArray(true, true) : $this->size,
            'dirname' => $this->dirname instanceof AbstractTransfer ? $this->dirname->toArray(true, true) : $this->dirname,
            'basename' => $this->basename instanceof AbstractTransfer ? $this->basename->toArray(true, true) : $this->basename,
            'extension' => $this->extension instanceof AbstractTransfer ? $this->extension->toArray(true, true) : $this->extension,
            'filename' => $this->filename instanceof AbstractTransfer ? $this->filename->toArray(true, true) : $this->filename,
            'isFile' => $this->isFile instanceof AbstractTransfer ? $this->isFile->toArray(true, true) : $this->isFile,
        ];
    }
}
