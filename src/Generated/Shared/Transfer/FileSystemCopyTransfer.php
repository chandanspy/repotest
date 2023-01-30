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
class FileSystemCopyTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const FILE_SYSTEM_NAME = 'fileSystemName';

    /**
     * @var string
     */
    public const SOURCE_PATH = 'sourcePath';

    /**
     * @var string
     */
    public const DESTINATION_PATH = 'destinationPath';

    /**
     * @var string|null
     */
    protected $fileSystemName;

    /**
     * @var string|null
     */
    protected $sourcePath;

    /**
     * @var string|null
     */
    protected $destinationPath;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'file_system_name' => 'fileSystemName',
        'fileSystemName' => 'fileSystemName',
        'FileSystemName' => 'fileSystemName',
        'source_path' => 'sourcePath',
        'sourcePath' => 'sourcePath',
        'SourcePath' => 'sourcePath',
        'destination_path' => 'destinationPath',
        'destinationPath' => 'destinationPath',
        'DestinationPath' => 'destinationPath',
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
        self::SOURCE_PATH => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'source_path',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DESTINATION_PATH => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'destination_path',
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
     * @param string|null $sourcePath
     *
     * @return $this
     */
    public function setSourcePath($sourcePath)
    {
        $this->sourcePath = $sourcePath;
        $this->modifiedProperties[self::SOURCE_PATH] = true;

        return $this;
    }

    /**
     * @module FileSystem|Flysystem
     *
     * @return string|null
     */
    public function getSourcePath()
    {
        return $this->sourcePath;
    }

    /**
     * @module FileSystem|Flysystem
     *
     * @param string|null $sourcePath
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSourcePathOrFail($sourcePath)
    {
        if ($sourcePath === null) {
            $this->throwNullValueException(static::SOURCE_PATH);
        }

        return $this->setSourcePath($sourcePath);
    }

    /**
     * @module FileSystem|Flysystem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSourcePathOrFail()
    {
        if ($this->sourcePath === null) {
            $this->throwNullValueException(static::SOURCE_PATH);
        }

        return $this->sourcePath;
    }

    /**
     * @module FileSystem|Flysystem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSourcePath()
    {
        $this->assertPropertyIsSet(self::SOURCE_PATH);

        return $this;
    }

    /**
     * @module FileSystem|Flysystem
     *
     * @param string|null $destinationPath
     *
     * @return $this
     */
    public function setDestinationPath($destinationPath)
    {
        $this->destinationPath = $destinationPath;
        $this->modifiedProperties[self::DESTINATION_PATH] = true;

        return $this;
    }

    /**
     * @module FileSystem|Flysystem
     *
     * @return string|null
     */
    public function getDestinationPath()
    {
        return $this->destinationPath;
    }

    /**
     * @module FileSystem|Flysystem
     *
     * @param string|null $destinationPath
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDestinationPathOrFail($destinationPath)
    {
        if ($destinationPath === null) {
            $this->throwNullValueException(static::DESTINATION_PATH);
        }

        return $this->setDestinationPath($destinationPath);
    }

    /**
     * @module FileSystem|Flysystem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDestinationPathOrFail()
    {
        if ($this->destinationPath === null) {
            $this->throwNullValueException(static::DESTINATION_PATH);
        }

        return $this->destinationPath;
    }

    /**
     * @module FileSystem|Flysystem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDestinationPath()
    {
        $this->assertPropertyIsSet(self::DESTINATION_PATH);

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
                case 'sourcePath':
                case 'destinationPath':
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
                case 'sourcePath':
                case 'destinationPath':
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
                case 'sourcePath':
                case 'destinationPath':
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
            'sourcePath' => $this->sourcePath,
            'destinationPath' => $this->destinationPath,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'file_system_name' => $this->fileSystemName,
            'source_path' => $this->sourcePath,
            'destination_path' => $this->destinationPath,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'file_system_name' => $this->fileSystemName instanceof AbstractTransfer ? $this->fileSystemName->toArray(true, false) : $this->fileSystemName,
            'source_path' => $this->sourcePath instanceof AbstractTransfer ? $this->sourcePath->toArray(true, false) : $this->sourcePath,
            'destination_path' => $this->destinationPath instanceof AbstractTransfer ? $this->destinationPath->toArray(true, false) : $this->destinationPath,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'fileSystemName' => $this->fileSystemName instanceof AbstractTransfer ? $this->fileSystemName->toArray(true, true) : $this->fileSystemName,
            'sourcePath' => $this->sourcePath instanceof AbstractTransfer ? $this->sourcePath->toArray(true, true) : $this->sourcePath,
            'destinationPath' => $this->destinationPath instanceof AbstractTransfer ? $this->destinationPath->toArray(true, true) : $this->destinationPath,
        ];
    }
}
