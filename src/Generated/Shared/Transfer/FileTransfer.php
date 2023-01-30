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
class FileTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_FILE = 'idFile';

    /**
     * @var string
     */
    public const FILE_UPLOAD = 'fileUpload';

    /**
     * @var string
     */
    public const LOCALIZED_ATTRIBUTES = 'localizedAttributes';

    /**
     * @var string
     */
    public const USE_REAL_NAME = 'useRealName';

    /**
     * @var string
     */
    public const FILE_NAME = 'fileName';

    /**
     * @var string
     */
    public const FK_FILE_DIRECTORY = 'fkFileDirectory';

    /**
     * @var string
     */
    public const FILE_INFO = 'fileInfo';

    /**
     * @var string
     */
    public const FILE_CONTENT = 'fileContent';

    /**
     * @var int|null
     */
    protected $idFile;

    /**
     * @var \Generated\Shared\Transfer\FileUploadTransfer|null
     */
    protected $fileUpload;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\FileLocalizedAttributesTransfer[]
     */
    protected $localizedAttributes;

    /**
     * @var bool|null
     */
    protected $useRealName;

    /**
     * @var string|null
     */
    protected $fileName;

    /**
     * @var int|null
     */
    protected $fkFileDirectory;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\FileInfoTransfer[]
     */
    protected $fileInfo;

    /**
     * @var string|null
     */
    protected $fileContent;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_file' => 'idFile',
        'idFile' => 'idFile',
        'IdFile' => 'idFile',
        'file_upload' => 'fileUpload',
        'fileUpload' => 'fileUpload',
        'FileUpload' => 'fileUpload',
        'localized_attributes' => 'localizedAttributes',
        'localizedAttributes' => 'localizedAttributes',
        'LocalizedAttributes' => 'localizedAttributes',
        'use_real_name' => 'useRealName',
        'useRealName' => 'useRealName',
        'UseRealName' => 'useRealName',
        'file_name' => 'fileName',
        'fileName' => 'fileName',
        'FileName' => 'fileName',
        'fk_file_directory' => 'fkFileDirectory',
        'fkFileDirectory' => 'fkFileDirectory',
        'FkFileDirectory' => 'fkFileDirectory',
        'file_info' => 'fileInfo',
        'fileInfo' => 'fileInfo',
        'FileInfo' => 'fileInfo',
        'file_content' => 'fileContent',
        'fileContent' => 'fileContent',
        'FileContent' => 'fileContent',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_FILE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_file',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FILE_UPLOAD => [
            'type' => 'Generated\Shared\Transfer\FileUploadTransfer',
            'type_shim' => null,
            'name_underscore' => 'file_upload',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LOCALIZED_ATTRIBUTES => [
            'type' => 'Generated\Shared\Transfer\FileLocalizedAttributesTransfer',
            'type_shim' => null,
            'name_underscore' => 'localized_attributes',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::USE_REAL_NAME => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'use_real_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FILE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'file_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_FILE_DIRECTORY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_file_directory',
            'is_collection' => false,
            'is_transfer' => false,
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
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FILE_CONTENT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'file_content',
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
     * @module ContentFileGui|FileManagerGui|FileManagerStorage|FileManager
     *
     * @param int|null $idFile
     *
     * @return $this
     */
    public function setIdFile($idFile)
    {
        $this->idFile = $idFile;
        $this->modifiedProperties[self::ID_FILE] = true;

        return $this;
    }

    /**
     * @module ContentFileGui|FileManagerGui|FileManagerStorage|FileManager
     *
     * @return int|null
     */
    public function getIdFile()
    {
        return $this->idFile;
    }

    /**
     * @module ContentFileGui|FileManagerGui|FileManagerStorage|FileManager
     *
     * @param int|null $idFile
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdFileOrFail($idFile)
    {
        if ($idFile === null) {
            $this->throwNullValueException(static::ID_FILE);
        }

        return $this->setIdFile($idFile);
    }

    /**
     * @module ContentFileGui|FileManagerGui|FileManagerStorage|FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdFileOrFail()
    {
        if ($this->idFile === null) {
            $this->throwNullValueException(static::ID_FILE);
        }

        return $this->idFile;
    }

    /**
     * @module ContentFileGui|FileManagerGui|FileManagerStorage|FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdFile()
    {
        $this->assertPropertyIsSet(self::ID_FILE);

        return $this;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @param \Generated\Shared\Transfer\FileUploadTransfer|null $fileUpload
     *
     * @return $this
     */
    public function setFileUpload(FileUploadTransfer $fileUpload = null)
    {
        $this->fileUpload = $fileUpload;
        $this->modifiedProperties[self::FILE_UPLOAD] = true;

        return $this;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @return \Generated\Shared\Transfer\FileUploadTransfer|null
     */
    public function getFileUpload()
    {
        return $this->fileUpload;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @param \Generated\Shared\Transfer\FileUploadTransfer $fileUpload
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFileUploadOrFail(FileUploadTransfer $fileUpload)
    {
        return $this->setFileUpload($fileUpload);
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\FileUploadTransfer
     */
    public function getFileUploadOrFail()
    {
        if ($this->fileUpload === null) {
            $this->throwNullValueException(static::FILE_UPLOAD);
        }

        return $this->fileUpload;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFileUpload()
    {
        $this->assertPropertyIsSet(self::FILE_UPLOAD);

        return $this;
    }

    /**
     * @module FileManagerGui|FileManagerStorage|FileManager
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\FileLocalizedAttributesTransfer[] $localizedAttributes
     *
     * @return $this
     */
    public function setLocalizedAttributes(ArrayObject $localizedAttributes)
    {
        $this->localizedAttributes = $localizedAttributes;
        $this->modifiedProperties[self::LOCALIZED_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module FileManagerGui|FileManagerStorage|FileManager
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\FileLocalizedAttributesTransfer[]
     */
    public function getLocalizedAttributes()
    {
        return $this->localizedAttributes;
    }

    /**
     * @module FileManagerGui|FileManagerStorage|FileManager
     *
     * @param \Generated\Shared\Transfer\FileLocalizedAttributesTransfer $localizedAttributes
     *
     * @return $this
     */
    public function addLocalizedAttributes(FileLocalizedAttributesTransfer $localizedAttributes)
    {
        $this->localizedAttributes[] = $localizedAttributes;
        $this->modifiedProperties[self::LOCALIZED_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module FileManagerGui|FileManagerStorage|FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocalizedAttributes()
    {
        $this->assertCollectionPropertyIsSet(self::LOCALIZED_ATTRIBUTES);

        return $this;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @param bool|null $useRealName
     *
     * @return $this
     */
    public function setUseRealName($useRealName)
    {
        $this->useRealName = $useRealName;
        $this->modifiedProperties[self::USE_REAL_NAME] = true;

        return $this;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @return bool|null
     */
    public function getUseRealName()
    {
        return $this->useRealName;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @param bool|null $useRealName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUseRealNameOrFail($useRealName)
    {
        if ($useRealName === null) {
            $this->throwNullValueException(static::USE_REAL_NAME);
        }

        return $this->setUseRealName($useRealName);
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getUseRealNameOrFail()
    {
        if ($this->useRealName === null) {
            $this->throwNullValueException(static::USE_REAL_NAME);
        }

        return $this->useRealName;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUseRealName()
    {
        $this->assertPropertyIsSet(self::USE_REAL_NAME);

        return $this;
    }

    /**
     * @module FileManagerGui|FileManagerStorage|FileManager
     *
     * @param string|null $fileName
     *
     * @return $this
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
        $this->modifiedProperties[self::FILE_NAME] = true;

        return $this;
    }

    /**
     * @module FileManagerGui|FileManagerStorage|FileManager
     *
     * @return string|null
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @module FileManagerGui|FileManagerStorage|FileManager
     *
     * @param string|null $fileName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFileNameOrFail($fileName)
    {
        if ($fileName === null) {
            $this->throwNullValueException(static::FILE_NAME);
        }

        return $this->setFileName($fileName);
    }

    /**
     * @module FileManagerGui|FileManagerStorage|FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getFileNameOrFail()
    {
        if ($this->fileName === null) {
            $this->throwNullValueException(static::FILE_NAME);
        }

        return $this->fileName;
    }

    /**
     * @module FileManagerGui|FileManagerStorage|FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFileName()
    {
        $this->assertPropertyIsSet(self::FILE_NAME);

        return $this;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @param int|null $fkFileDirectory
     *
     * @return $this
     */
    public function setFkFileDirectory($fkFileDirectory)
    {
        $this->fkFileDirectory = $fkFileDirectory;
        $this->modifiedProperties[self::FK_FILE_DIRECTORY] = true;

        return $this;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @return int|null
     */
    public function getFkFileDirectory()
    {
        return $this->fkFileDirectory;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @param int|null $fkFileDirectory
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkFileDirectoryOrFail($fkFileDirectory)
    {
        if ($fkFileDirectory === null) {
            $this->throwNullValueException(static::FK_FILE_DIRECTORY);
        }

        return $this->setFkFileDirectory($fkFileDirectory);
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkFileDirectoryOrFail()
    {
        if ($this->fkFileDirectory === null) {
            $this->throwNullValueException(static::FK_FILE_DIRECTORY);
        }

        return $this->fkFileDirectory;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkFileDirectory()
    {
        $this->assertPropertyIsSet(self::FK_FILE_DIRECTORY);

        return $this;
    }

    /**
     * @module FileManagerStorage|FileManager
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\FileInfoTransfer[] $fileInfo
     *
     * @return $this
     */
    public function setFileInfo(ArrayObject $fileInfo)
    {
        $this->fileInfo = $fileInfo;
        $this->modifiedProperties[self::FILE_INFO] = true;

        return $this;
    }

    /**
     * @module FileManagerStorage|FileManager
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\FileInfoTransfer[]
     */
    public function getFileInfo()
    {
        return $this->fileInfo;
    }

    /**
     * @module FileManagerStorage|FileManager
     *
     * @param \Generated\Shared\Transfer\FileInfoTransfer $fileInfo
     *
     * @return $this
     */
    public function addFileInfo(FileInfoTransfer $fileInfo)
    {
        $this->fileInfo[] = $fileInfo;
        $this->modifiedProperties[self::FILE_INFO] = true;

        return $this;
    }

    /**
     * @module FileManagerStorage|FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFileInfo()
    {
        $this->assertCollectionPropertyIsSet(self::FILE_INFO);

        return $this;
    }

    /**
     * @module FileManager
     *
     * @param string|null $fileContent
     *
     * @return $this
     */
    public function setFileContent($fileContent)
    {
        $this->fileContent = $fileContent;
        $this->modifiedProperties[self::FILE_CONTENT] = true;

        return $this;
    }

    /**
     * @module FileManager
     *
     * @return string|null
     */
    public function getFileContent()
    {
        return $this->fileContent;
    }

    /**
     * @module FileManager
     *
     * @param string|null $fileContent
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFileContentOrFail($fileContent)
    {
        if ($fileContent === null) {
            $this->throwNullValueException(static::FILE_CONTENT);
        }

        return $this->setFileContent($fileContent);
    }

    /**
     * @module FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getFileContentOrFail()
    {
        if ($this->fileContent === null) {
            $this->throwNullValueException(static::FILE_CONTENT);
        }

        return $this->fileContent;
    }

    /**
     * @module FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFileContent()
    {
        $this->assertPropertyIsSet(self::FILE_CONTENT);

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
                case 'idFile':
                case 'useRealName':
                case 'fileName':
                case 'fkFileDirectory':
                case 'fileContent':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'fileUpload':
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
                case 'localizedAttributes':
                case 'fileInfo':
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
                case 'idFile':
                case 'useRealName':
                case 'fileName':
                case 'fkFileDirectory':
                case 'fileContent':
                    $values[$arrayKey] = $value;

                    break;
                case 'fileUpload':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'localizedAttributes':
                case 'fileInfo':
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
                case 'idFile':
                case 'useRealName':
                case 'fileName':
                case 'fkFileDirectory':
                case 'fileContent':
                    $values[$arrayKey] = $value;

                    break;
                case 'fileUpload':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'localizedAttributes':
                case 'fileInfo':
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
        $this->localizedAttributes = $this->localizedAttributes ?: new ArrayObject();
        $this->fileInfo = $this->fileInfo ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idFile' => $this->idFile,
            'useRealName' => $this->useRealName,
            'fileName' => $this->fileName,
            'fkFileDirectory' => $this->fkFileDirectory,
            'fileContent' => $this->fileContent,
            'fileUpload' => $this->fileUpload,
            'localizedAttributes' => $this->localizedAttributes,
            'fileInfo' => $this->fileInfo,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_file' => $this->idFile,
            'use_real_name' => $this->useRealName,
            'file_name' => $this->fileName,
            'fk_file_directory' => $this->fkFileDirectory,
            'file_content' => $this->fileContent,
            'file_upload' => $this->fileUpload,
            'localized_attributes' => $this->localizedAttributes,
            'file_info' => $this->fileInfo,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_file' => $this->idFile instanceof AbstractTransfer ? $this->idFile->toArray(true, false) : $this->idFile,
            'use_real_name' => $this->useRealName instanceof AbstractTransfer ? $this->useRealName->toArray(true, false) : $this->useRealName,
            'file_name' => $this->fileName instanceof AbstractTransfer ? $this->fileName->toArray(true, false) : $this->fileName,
            'fk_file_directory' => $this->fkFileDirectory instanceof AbstractTransfer ? $this->fkFileDirectory->toArray(true, false) : $this->fkFileDirectory,
            'file_content' => $this->fileContent instanceof AbstractTransfer ? $this->fileContent->toArray(true, false) : $this->fileContent,
            'file_upload' => $this->fileUpload instanceof AbstractTransfer ? $this->fileUpload->toArray(true, false) : $this->fileUpload,
            'localized_attributes' => $this->localizedAttributes instanceof AbstractTransfer ? $this->localizedAttributes->toArray(true, false) : $this->addValuesToCollection($this->localizedAttributes, true, false),
            'file_info' => $this->fileInfo instanceof AbstractTransfer ? $this->fileInfo->toArray(true, false) : $this->addValuesToCollection($this->fileInfo, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idFile' => $this->idFile instanceof AbstractTransfer ? $this->idFile->toArray(true, true) : $this->idFile,
            'useRealName' => $this->useRealName instanceof AbstractTransfer ? $this->useRealName->toArray(true, true) : $this->useRealName,
            'fileName' => $this->fileName instanceof AbstractTransfer ? $this->fileName->toArray(true, true) : $this->fileName,
            'fkFileDirectory' => $this->fkFileDirectory instanceof AbstractTransfer ? $this->fkFileDirectory->toArray(true, true) : $this->fkFileDirectory,
            'fileContent' => $this->fileContent instanceof AbstractTransfer ? $this->fileContent->toArray(true, true) : $this->fileContent,
            'fileUpload' => $this->fileUpload instanceof AbstractTransfer ? $this->fileUpload->toArray(true, true) : $this->fileUpload,
            'localizedAttributes' => $this->localizedAttributes instanceof AbstractTransfer ? $this->localizedAttributes->toArray(true, true) : $this->addValuesToCollection($this->localizedAttributes, true, true),
            'fileInfo' => $this->fileInfo instanceof AbstractTransfer ? $this->fileInfo->toArray(true, true) : $this->addValuesToCollection($this->fileInfo, true, true),
        ];
    }
}
