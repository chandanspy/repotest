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
class FileSystemCreateDirectoryTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const FILE_SYSTEM_NAME = 'fileSystemName';

    /**
     * @var string
     */
    public const PATH = 'path';

    /**
     * @var string
     */
    public const CONFIG = 'config';

    /**
     * @var string|null
     */
    protected $fileSystemName;

    /**
     * @var string|null
     */
    protected $path;

    /**
     * @var array
     */
    protected $config = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'file_system_name' => 'fileSystemName',
        'fileSystemName' => 'fileSystemName',
        'FileSystemName' => 'fileSystemName',
        'path' => 'path',
        'Path' => 'path',
        'config' => 'config',
        'Config' => 'config',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::FILE_SYSTEM_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'file_system_name',
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
        self::CONFIG => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'config',
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
     * @module FileSystem|Flysystem
     *
     * @param string|null $fileSystemName
     *
     * @return $this
     */
    public function setFileSystemName($fileSystemName)
    {
        $this->fileSystemName = $fileSystemName;
        $this->modifiedProperties[self::FILE_SYSTEM_NAME] = true;

        return $this;
    }

    /**
     * @module FileSystem|Flysystem
     *
     * @return string|null
     */
    public function getFileSystemName()
    {
        return $this->fileSystemName;
    }

    /**
     * @module FileSystem|Flysystem
     *
     * @param string|null $fileSystemName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFileSystemNameOrFail($fileSystemName)
    {
        if ($fileSystemName === null) {
            $this->throwNullValueException(static::FILE_SYSTEM_NAME);
        }

        return $this->setFileSystemName($fileSystemName);
    }

    /**
     * @module FileSystem|Flysystem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getFileSystemNameOrFail()
    {
        if ($this->fileSystemName === null) {
            $this->throwNullValueException(static::FILE_SYSTEM_NAME);
        }

        return $this->fileSystemName;
    }

    /**
     * @module FileSystem|Flysystem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFileSystemName()
    {
        $this->assertPropertyIsSet(self::FILE_SYSTEM_NAME);

        return $this;
    }

    /**
     * @module FileSystem|Flysystem
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
     * @module FileSystem|Flysystem
     *
     * @return string|null
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @module FileSystem|Flysystem
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
     * @module FileSystem|Flysystem
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
     * @module FileSystem|Flysystem
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
     * @module FileSystem|Flysystem
     *
     * @param array|null $config
     *
     * @return $this
     */
    public function setConfig(array $config = null)
    {
        if ($config === null) {
            $config = [];
        }

        $this->config = $config;
        $this->modifiedProperties[self::CONFIG] = true;

        return $this;
    }

    /**
     * @module FileSystem|Flysystem
     *
     * @return array
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * @module FileSystem|Flysystem
     *
     * @param mixed $config
     *
     * @return $this
     */
    public function addConfig($config)
    {
        $this->config[] = $config;
        $this->modifiedProperties[self::CONFIG] = true;

        return $this;
    }

    /**
     * @module FileSystem|Flysystem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConfig()
    {
        $this->assertPropertyIsSet(self::CONFIG);

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
                case 'fileSystemName':
                case 'path':
                case 'config':
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
                case 'fileSystemName':
                case 'path':
                case 'config':
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
                case 'fileSystemName':
                case 'path':
                case 'config':
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
            'fileSystemName' => $this->fileSystemName,
            'path' => $this->path,
            'config' => $this->config,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'file_system_name' => $this->fileSystemName,
            'path' => $this->path,
            'config' => $this->config,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'file_system_name' => $this->fileSystemName instanceof AbstractTransfer ? $this->fileSystemName->toArray(true, false) : $this->fileSystemName,
            'path' => $this->path instanceof AbstractTransfer ? $this->path->toArray(true, false) : $this->path,
            'config' => $this->config instanceof AbstractTransfer ? $this->config->toArray(true, false) : $this->config,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'fileSystemName' => $this->fileSystemName instanceof AbstractTransfer ? $this->fileSystemName->toArray(true, true) : $this->fileSystemName,
            'path' => $this->path instanceof AbstractTransfer ? $this->path->toArray(true, true) : $this->path,
            'config' => $this->config instanceof AbstractTransfer ? $this->config->toArray(true, true) : $this->config,
        ];
    }
}
