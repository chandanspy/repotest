<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyFileInfoEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_FILE_INFO = 'idFileInfo';

    /**
     * @var string
     */
    public const FK_FILE = 'fkFile';

    /**
     * @var string
     */
    public const EXTENSION = 'extension';

    /**
     * @var string
     */
    public const SIZE = 'size';

    /**
     * @var string
     */
    public const STORAGE_FILE_NAME = 'storageFileName';

    /**
     * @var string
     */
    public const STORAGE_NAME = 'storageName';

    /**
     * @var string
     */
    public const TYPE = 'type';

    /**
     * @var string
     */
    public const VERSION = 'version';

    /**
     * @var string
     */
    public const VERSION_NAME = 'versionName';

    /**
     * @var string
     */
    public const FILE = 'file';

    /**
     * @var integer|null
     */
    protected $idFileInfo;

    /**
     * @var integer|null
     */
    protected $fkFile;

    /**
     * @var string|null
     */
    protected $extension;

    /**
     * @var integer|null
     */
    protected $size;

    /**
     * @var string|null
     */
    protected $storageFileName;

    /**
     * @var string|null
     */
    protected $storageName;

    /**
     * @var string|null
     */
    protected $type;

    /**
     * @var integer|null
     */
    protected $version;

    /**
     * @var string|null
     */
    protected $versionName;

    /**
     * @var \Generated\Shared\Transfer\SpyFileEntityTransfer|null
     */
    protected $file;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_file_info' => 'idFileInfo',
        'idFileInfo' => 'idFileInfo',
        'IdFileInfo' => 'idFileInfo',
        'fk_file' => 'fkFile',
        'fkFile' => 'fkFile',
        'FkFile' => 'fkFile',
        'extension' => 'extension',
        'Extension' => 'extension',
        'size' => 'size',
        'Size' => 'size',
        'storage_file_name' => 'storageFileName',
        'storageFileName' => 'storageFileName',
        'StorageFileName' => 'storageFileName',
        'storage_name' => 'storageName',
        'storageName' => 'storageName',
        'StorageName' => 'storageName',
        'type' => 'type',
        'Type' => 'type',
        'version' => 'version',
        'Version' => 'version',
        'version_name' => 'versionName',
        'versionName' => 'versionName',
        'VersionName' => 'versionName',
        'file' => 'file',
        'File' => 'file',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_FILE_INFO => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_file_info',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_FILE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_file',
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
        self::SIZE => [
            'type' => 'integer',
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
        self::STORAGE_FILE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'storage_file_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORAGE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'storage_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
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
        self::VERSION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'version',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::VERSION_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'version_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FILE => [
            'type' => 'Generated\Shared\Transfer\SpyFileEntityTransfer',
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
    ];
    /**
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\FileManager\Persistence\SpyFileInfo';


    /**
     * @module 
     *
     * @param integer|null $idFileInfo
     *
     * @return $this
     */
    public function setIdFileInfo($idFileInfo)
    {
        $this->idFileInfo = $idFileInfo;
        $this->modifiedProperties[self::ID_FILE_INFO] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdFileInfo()
    {
        return $this->idFileInfo;
    }

    /**
     * @module 
     *
     * @param integer|null $idFileInfo
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdFileInfoOrFail($idFileInfo)
    {
        if ($idFileInfo === null) {
            $this->throwNullValueException(static::ID_FILE_INFO);
        }

        return $this->setIdFileInfo($idFileInfo);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdFileInfoOrFail()
    {
        if ($this->idFileInfo === null) {
            $this->throwNullValueException(static::ID_FILE_INFO);
        }

        return $this->idFileInfo;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdFileInfo()
    {
        $this->assertPropertyIsSet(self::ID_FILE_INFO);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkFile
     *
     * @return $this
     */
    public function setFkFile($fkFile)
    {
        $this->fkFile = $fkFile;
        $this->modifiedProperties[self::FK_FILE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkFile()
    {
        return $this->fkFile;
    }

    /**
     * @module 
     *
     * @param integer|null $fkFile
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkFileOrFail($fkFile)
    {
        if ($fkFile === null) {
            $this->throwNullValueException(static::FK_FILE);
        }

        return $this->setFkFile($fkFile);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkFileOrFail()
    {
        if ($this->fkFile === null) {
            $this->throwNullValueException(static::FK_FILE);
        }

        return $this->fkFile;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkFile()
    {
        $this->assertPropertyIsSet(self::FK_FILE);

        return $this;
    }

    /**
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param integer|null $size
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
     * @module 
     *
     * @return integer|null
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @module 
     *
     * @param integer|null $size
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getSizeOrFail()
    {
        if ($this->size === null) {
            $this->throwNullValueException(static::SIZE);
        }

        return $this->size;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param string|null $storageFileName
     *
     * @return $this
     */
    public function setStorageFileName($storageFileName)
    {
        $this->storageFileName = $storageFileName;
        $this->modifiedProperties[self::STORAGE_FILE_NAME] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getStorageFileName()
    {
        return $this->storageFileName;
    }

    /**
     * @module 
     *
     * @param string|null $storageFileName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStorageFileNameOrFail($storageFileName)
    {
        if ($storageFileName === null) {
            $this->throwNullValueException(static::STORAGE_FILE_NAME);
        }

        return $this->setStorageFileName($storageFileName);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStorageFileNameOrFail()
    {
        if ($this->storageFileName === null) {
            $this->throwNullValueException(static::STORAGE_FILE_NAME);
        }

        return $this->storageFileName;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStorageFileName()
    {
        $this->assertPropertyIsSet(self::STORAGE_FILE_NAME);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $storageName
     *
     * @return $this
     */
    public function setStorageName($storageName)
    {
        $this->storageName = $storageName;
        $this->modifiedProperties[self::STORAGE_NAME] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getStorageName()
    {
        return $this->storageName;
    }

    /**
     * @module 
     *
     * @param string|null $storageName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStorageNameOrFail($storageName)
    {
        if ($storageName === null) {
            $this->throwNullValueException(static::STORAGE_NAME);
        }

        return $this->setStorageName($storageName);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStorageNameOrFail()
    {
        if ($this->storageName === null) {
            $this->throwNullValueException(static::STORAGE_NAME);
        }

        return $this->storageName;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStorageName()
    {
        $this->assertPropertyIsSet(self::STORAGE_NAME);

        return $this;
    }

    /**
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param integer|null $version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        $this->modifiedProperties[self::VERSION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @module 
     *
     * @param integer|null $version
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setVersionOrFail($version)
    {
        if ($version === null) {
            $this->throwNullValueException(static::VERSION);
        }

        return $this->setVersion($version);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getVersionOrFail()
    {
        if ($this->version === null) {
            $this->throwNullValueException(static::VERSION);
        }

        return $this->version;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireVersion()
    {
        $this->assertPropertyIsSet(self::VERSION);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $versionName
     *
     * @return $this
     */
    public function setVersionName($versionName)
    {
        $this->versionName = $versionName;
        $this->modifiedProperties[self::VERSION_NAME] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getVersionName()
    {
        return $this->versionName;
    }

    /**
     * @module 
     *
     * @param string|null $versionName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setVersionNameOrFail($versionName)
    {
        if ($versionName === null) {
            $this->throwNullValueException(static::VERSION_NAME);
        }

        return $this->setVersionName($versionName);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getVersionNameOrFail()
    {
        if ($this->versionName === null) {
            $this->throwNullValueException(static::VERSION_NAME);
        }

        return $this->versionName;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireVersionName()
    {
        $this->assertPropertyIsSet(self::VERSION_NAME);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyFileEntityTransfer|null $file
     *
     * @return $this
     */
    public function setFile(SpyFileEntityTransfer $file = null)
    {
        $this->file = $file;
        $this->modifiedProperties[self::FILE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyFileEntityTransfer|null
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyFileEntityTransfer $file
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFileOrFail(SpyFileEntityTransfer $file)
    {
        return $this->setFile($file);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyFileEntityTransfer
     */
    public function getFileOrFail()
    {
        if ($this->file === null) {
            $this->throwNullValueException(static::FILE);
        }

        return $this->file;
    }

    /**
     * @module 
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
                case 'idFileInfo':
                case 'fkFile':
                case 'extension':
                case 'size':
                case 'storageFileName':
                case 'storageName':
                case 'type':
                case 'version':
                case 'versionName':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'file':
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
                case 'idFileInfo':
                case 'fkFile':
                case 'extension':
                case 'size':
                case 'storageFileName':
                case 'storageName':
                case 'type':
                case 'version':
                case 'versionName':
                    $values[$arrayKey] = $value;

                    break;
                case 'file':
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
                case 'idFileInfo':
                case 'fkFile':
                case 'extension':
                case 'size':
                case 'storageFileName':
                case 'storageName':
                case 'type':
                case 'version':
                case 'versionName':
                    $values[$arrayKey] = $value;

                    break;
                case 'file':
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
            'idFileInfo' => $this->idFileInfo,
            'fkFile' => $this->fkFile,
            'extension' => $this->extension,
            'size' => $this->size,
            'storageFileName' => $this->storageFileName,
            'storageName' => $this->storageName,
            'type' => $this->type,
            'version' => $this->version,
            'versionName' => $this->versionName,
            'file' => $this->file,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_file_info' => $this->idFileInfo,
            'fk_file' => $this->fkFile,
            'extension' => $this->extension,
            'size' => $this->size,
            'storage_file_name' => $this->storageFileName,
            'storage_name' => $this->storageName,
            'type' => $this->type,
            'version' => $this->version,
            'version_name' => $this->versionName,
            'file' => $this->file,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_file_info' => $this->idFileInfo instanceof AbstractTransfer ? $this->idFileInfo->toArray(true, false) : $this->idFileInfo,
            'fk_file' => $this->fkFile instanceof AbstractTransfer ? $this->fkFile->toArray(true, false) : $this->fkFile,
            'extension' => $this->extension instanceof AbstractTransfer ? $this->extension->toArray(true, false) : $this->extension,
            'size' => $this->size instanceof AbstractTransfer ? $this->size->toArray(true, false) : $this->size,
            'storage_file_name' => $this->storageFileName instanceof AbstractTransfer ? $this->storageFileName->toArray(true, false) : $this->storageFileName,
            'storage_name' => $this->storageName instanceof AbstractTransfer ? $this->storageName->toArray(true, false) : $this->storageName,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, false) : $this->type,
            'version' => $this->version instanceof AbstractTransfer ? $this->version->toArray(true, false) : $this->version,
            'version_name' => $this->versionName instanceof AbstractTransfer ? $this->versionName->toArray(true, false) : $this->versionName,
            'file' => $this->file instanceof AbstractTransfer ? $this->file->toArray(true, false) : $this->file,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idFileInfo' => $this->idFileInfo instanceof AbstractTransfer ? $this->idFileInfo->toArray(true, true) : $this->idFileInfo,
            'fkFile' => $this->fkFile instanceof AbstractTransfer ? $this->fkFile->toArray(true, true) : $this->fkFile,
            'extension' => $this->extension instanceof AbstractTransfer ? $this->extension->toArray(true, true) : $this->extension,
            'size' => $this->size instanceof AbstractTransfer ? $this->size->toArray(true, true) : $this->size,
            'storageFileName' => $this->storageFileName instanceof AbstractTransfer ? $this->storageFileName->toArray(true, true) : $this->storageFileName,
            'storageName' => $this->storageName instanceof AbstractTransfer ? $this->storageName->toArray(true, true) : $this->storageName,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, true) : $this->type,
            'version' => $this->version instanceof AbstractTransfer ? $this->version->toArray(true, true) : $this->version,
            'versionName' => $this->versionName instanceof AbstractTransfer ? $this->versionName->toArray(true, true) : $this->versionName,
            'file' => $this->file instanceof AbstractTransfer ? $this->file->toArray(true, true) : $this->file,
        ];
    }
}
