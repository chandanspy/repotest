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
class FileManagerDataTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const FILE = 'file';

    /**
     * @var string
     */
    public const FILE_INFO = 'fileInfo';

    /**
     * @var string
     */
    public const CONTENT = 'content';

    /**
     * @var string
     */
    public const FILE_LOCALIZED_ATTRIBUTES = 'fileLocalizedAttributes';

    /**
     * @var \Generated\Shared\Transfer\FileTransfer|null
     */
    protected $file;

    /**
     * @var \Generated\Shared\Transfer\FileInfoTransfer|null
     */
    protected $fileInfo;

    /**
     * @var string|null
     */
    protected $content;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\FileLocalizedAttributesTransfer[]
     */
    protected $fileLocalizedAttributes;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'file' => 'file',
        'File' => 'file',
        'file_info' => 'fileInfo',
        'fileInfo' => 'fileInfo',
        'FileInfo' => 'fileInfo',
        'content' => 'content',
        'Content' => 'content',
        'file_localized_attributes' => 'fileLocalizedAttributes',
        'fileLocalizedAttributes' => 'fileLocalizedAttributes',
        'FileLocalizedAttributes' => 'fileLocalizedAttributes',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::FILE => [
            'type' => 'Generated\Shared\Transfer\FileTransfer',
            'type_shim' => null,
            'name_underscore' => 'file',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FILE_INFO => [
            'type' => 'Generated\Shared\Transfer\FileInfoTransfer',
            'type_shim' => null,
            'name_underscore' => 'file_info',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONTENT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'content',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FILE_LOCALIZED_ATTRIBUTES => [
            'type' => 'Generated\Shared\Transfer\FileLocalizedAttributesTransfer',
            'type_shim' => null,
            'name_underscore' => 'file_localized_attributes',
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
     * @module ContentFileGui|FileManagerGui|FileManager
     *
     * @param \Generated\Shared\Transfer\FileTransfer|null $file
     *
     * @return $this
     */
    public function setFile(FileTransfer $file = null)
    {
        $this->file = $file;
        $this->modifiedProperties[self::FILE] = true;

        return $this;
    }

    /**
     * @module ContentFileGui|FileManagerGui|FileManager
     *
     * @return \Generated\Shared\Transfer\FileTransfer|null
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @module ContentFileGui|FileManagerGui|FileManager
     *
     * @param \Generated\Shared\Transfer\FileTransfer $file
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFileOrFail(FileTransfer $file)
    {
        return $this->setFile($file);
    }

    /**
     * @module ContentFileGui|FileManagerGui|FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\FileTransfer
     */
    public function getFileOrFail()
    {
        if ($this->file === null) {
            $this->throwNullValueException(static::FILE);
        }

        return $this->file;
    }

    /**
     * @module ContentFileGui|FileManagerGui|FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFile()
    {
        $this->assertPropertyIsSet(self::FILE);

        return $this;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @param \Generated\Shared\Transfer\FileInfoTransfer|null $fileInfo
     *
     * @return $this
     */
    public function setFileInfo(FileInfoTransfer $fileInfo = null)
    {
        $this->fileInfo = $fileInfo;
        $this->modifiedProperties[self::FILE_INFO] = true;

        return $this;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @return \Generated\Shared\Transfer\FileInfoTransfer|null
     */
    public function getFileInfo()
    {
        return $this->fileInfo;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @param \Generated\Shared\Transfer\FileInfoTransfer $fileInfo
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFileInfoOrFail(FileInfoTransfer $fileInfo)
    {
        return $this->setFileInfo($fileInfo);
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\FileInfoTransfer
     */
    public function getFileInfoOrFail()
    {
        if ($this->fileInfo === null) {
            $this->throwNullValueException(static::FILE_INFO);
        }

        return $this->fileInfo;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFileInfo()
    {
        $this->assertPropertyIsSet(self::FILE_INFO);

        return $this;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @param string|null $content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->content = $content;
        $this->modifiedProperties[self::CONTENT] = true;

        return $this;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @return string|null
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @param string|null $content
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setContentOrFail($content)
    {
        if ($content === null) {
            $this->throwNullValueException(static::CONTENT);
        }

        return $this->setContent($content);
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getContentOrFail()
    {
        if ($this->content === null) {
            $this->throwNullValueException(static::CONTENT);
        }

        return $this->content;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireContent()
    {
        $this->assertPropertyIsSet(self::CONTENT);

        return $this;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\FileLocalizedAttributesTransfer[] $fileLocalizedAttributes
     *
     * @return $this
     */
    public function setFileLocalizedAttributes(ArrayObject $fileLocalizedAttributes)
    {
        $this->fileLocalizedAttributes = $fileLocalizedAttributes;
        $this->modifiedProperties[self::FILE_LOCALIZED_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\FileLocalizedAttributesTransfer[]
     */
    public function getFileLocalizedAttributes()
    {
        return $this->fileLocalizedAttributes;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @param \Generated\Shared\Transfer\FileLocalizedAttributesTransfer $fileLocalizedAttributes
     *
     * @return $this
     */
    public function addFileLocalizedAttributes(FileLocalizedAttributesTransfer $fileLocalizedAttributes)
    {
        $this->fileLocalizedAttributes[] = $fileLocalizedAttributes;
        $this->modifiedProperties[self::FILE_LOCALIZED_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFileLocalizedAttributes()
    {
        $this->assertCollectionPropertyIsSet(self::FILE_LOCALIZED_ATTRIBUTES);

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
                case 'content':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'file':
                case 'fileInfo':
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
                case 'fileLocalizedAttributes':
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
                case 'content':
                    $values[$arrayKey] = $value;

                    break;
                case 'file':
                case 'fileInfo':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'fileLocalizedAttributes':
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
                case 'content':
                    $values[$arrayKey] = $value;

                    break;
                case 'file':
                case 'fileInfo':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'fileLocalizedAttributes':
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
        $this->fileLocalizedAttributes = $this->fileLocalizedAttributes ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'content' => $this->content,
            'file' => $this->file,
            'fileInfo' => $this->fileInfo,
            'fileLocalizedAttributes' => $this->fileLocalizedAttributes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'content' => $this->content,
            'file' => $this->file,
            'file_info' => $this->fileInfo,
            'file_localized_attributes' => $this->fileLocalizedAttributes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'content' => $this->content instanceof AbstractTransfer ? $this->content->toArray(true, false) : $this->content,
            'file' => $this->file instanceof AbstractTransfer ? $this->file->toArray(true, false) : $this->file,
            'file_info' => $this->fileInfo instanceof AbstractTransfer ? $this->fileInfo->toArray(true, false) : $this->fileInfo,
            'file_localized_attributes' => $this->fileLocalizedAttributes instanceof AbstractTransfer ? $this->fileLocalizedAttributes->toArray(true, false) : $this->addValuesToCollection($this->fileLocalizedAttributes, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'content' => $this->content instanceof AbstractTransfer ? $this->content->toArray(true, true) : $this->content,
            'file' => $this->file instanceof AbstractTransfer ? $this->file->toArray(true, true) : $this->file,
            'fileInfo' => $this->fileInfo instanceof AbstractTransfer ? $this->fileInfo->toArray(true, true) : $this->fileInfo,
            'fileLocalizedAttributes' => $this->fileLocalizedAttributes instanceof AbstractTransfer ? $this->fileLocalizedAttributes->toArray(true, true) : $this->addValuesToCollection($this->fileLocalizedAttributes, true, true),
        ];
    }
}
