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
class FileInfoTransfer extends AbstractTransfer
{
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
    public const TYPE = 'type';

    /**
     * @var string
     */
    public const FK_FILE = 'fkFile';

    /**
     * @var string
     */
    public const VERSION = 'version';

    /**
     * @var string
     */
    public const STORAGE_NAME = 'storageName';

    /**
     * @var string
     */
    public const STORAGE_FILE_NAME = 'storageFileName';

    /**
     * @var string
     */
    public const ID_FILE_INFO = 'idFileInfo';

    /**
     * @var string
     */
    public const VERSION_NAME = 'versionName';

    /**
     * @var string
     */
    public const CREATED_AT = 'createdAt';

    /**
     * @var string
     */
    public const UPDATED_AT = 'updatedAt';

    /**
     * @var string
     */
    public const LOCALIZED_ATTRIBUTES = 'localizedAttributes';

    /**
     * @var string|null
     */
    protected $extension;

    /**
     * @var int|null
     */
    protected $size;

    /**
     * @var string|null
     */
    protected $type;

    /**
     * @var int|null
     */
    protected $fkFile;

    /**
     * @var int|null
     */
    protected $version;

    /**
     * @var string|null
     */
    protected $storageName;

    /**
     * @var string|null
     */
    protected $storageFileName;

    /**
     * @var int|null
     */
    protected $idFileInfo;

    /**
     * @var string|null
     */
    protected $versionName;

    /**
     * @var string|null
     */
    protected $createdAt;

    /**
     * @var string|null
     */
    protected $updatedAt;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\FileInfoLocalizedAttributesTransfer[]
     */
    protected $localizedAttributes;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'extension' => 'extension',
        'Extension' => 'extension',
        'size' => 'size',
        'Size' => 'size',
        'type' => 'type',
        'Type' => 'type',
        'fk_file' => 'fkFile',
        'fkFile' => 'fkFile',
        'FkFile' => 'fkFile',
        'version' => 'version',
        'Version' => 'version',
        'storage_name' => 'storageName',
        'storageName' => 'storageName',
        'StorageName' => 'storageName',
        'storage_file_name' => 'storageFileName',
        'storageFileName' => 'storageFileName',
        'StorageFileName' => 'storageFileName',
        'id_file_info' => 'idFileInfo',
        'idFileInfo' => 'idFileInfo',
        'IdFileInfo' => 'idFileInfo',
        'version_name' => 'versionName',
        'versionName' => 'versionName',
        'VersionName' => 'versionName',
        'created_at' => 'createdAt',
        'createdAt' => 'createdAt',
        'CreatedAt' => 'createdAt',
        'updated_at' => 'updatedAt',
        'updatedAt' => 'updatedAt',
        'UpdatedAt' => 'updatedAt',
        'localized_attributes' => 'localizedAttributes',
        'localizedAttributes' => 'localizedAttributes',
        'LocalizedAttributes' => 'localizedAttributes',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::FK_FILE => [
            'type' => 'int',
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
        self::VERSION => [
            'type' => 'int',
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
        self::ID_FILE_INFO => [
            'type' => 'int',
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
        self::CREATED_AT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'created_at',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::UPDATED_AT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'updated_at',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LOCALIZED_ATTRIBUTES => [
            'type' => 'Generated\Shared\Transfer\FileInfoLocalizedAttributesTransfer',
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
    ];

    /**
     * @module FileManagerGui|FileManager
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
     * @module FileManagerGui|FileManager
     *
     * @return string|null
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * @module FileManagerGui|FileManager
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
     * @module FileManagerGui|FileManager
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
     * @module FileManagerGui|FileManager
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
     * @module FileManagerGui|FileManagerStorage|FileManager
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
     * @module FileManagerGui|FileManagerStorage|FileManager
     *
     * @return int|null
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @module FileManagerGui|FileManagerStorage|FileManager
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
     * @module FileManagerGui|FileManagerStorage|FileManager
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
     * @module FileManagerGui|FileManagerStorage|FileManager
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
     * @module FileManagerGui|FileManagerStorage|FileManager
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
     * @module FileManagerGui|FileManagerStorage|FileManager
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @module FileManagerGui|FileManagerStorage|FileManager
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
     * @module FileManagerGui|FileManagerStorage|FileManager
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
     * @module FileManagerGui|FileManagerStorage|FileManager
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
     * @module FileManagerGui|FileManager
     *
     * @param int|null $fkFile
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
     * @module FileManagerGui|FileManager
     *
     * @return int|null
     */
    public function getFkFile()
    {
        return $this->fkFile;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @param int|null $fkFile
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
     * @module FileManagerGui|FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkFileOrFail()
    {
        if ($this->fkFile === null) {
            $this->throwNullValueException(static::FK_FILE);
        }

        return $this->fkFile;
    }

    /**
     * @module FileManagerGui|FileManager
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
     * @module FileManagerStorage|FileManager
     *
     * @param int|null $version
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
     * @module FileManagerStorage|FileManager
     *
     * @return int|null
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @module FileManagerStorage|FileManager
     *
     * @param int|null $version
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
     * @module FileManagerStorage|FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getVersionOrFail()
    {
        if ($this->version === null) {
            $this->throwNullValueException(static::VERSION);
        }

        return $this->version;
    }

    /**
     * @module FileManagerStorage|FileManager
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
     * @module FileManagerStorage|FileManager
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
     * @module FileManagerStorage|FileManager
     *
     * @return string|null
     */
    public function getStorageName()
    {
        return $this->storageName;
    }

    /**
     * @module FileManagerStorage|FileManager
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
     * @module FileManagerStorage|FileManager
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
     * @module FileManagerStorage|FileManager
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
     * @module FileManagerStorage|FileManager
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
     * @module FileManagerStorage|FileManager
     *
     * @return string|null
     */
    public function getStorageFileName()
    {
        return $this->storageFileName;
    }

    /**
     * @module FileManagerStorage|FileManager
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
     * @module FileManagerStorage|FileManager
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
     * @module FileManagerStorage|FileManager
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
     * @module FileManager
     *
     * @param int|null $idFileInfo
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
     * @module FileManager
     *
     * @return int|null
     */
    public function getIdFileInfo()
    {
        return $this->idFileInfo;
    }

    /**
     * @module FileManager
     *
     * @param int|null $idFileInfo
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
     * @module FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdFileInfoOrFail()
    {
        if ($this->idFileInfo === null) {
            $this->throwNullValueException(static::ID_FILE_INFO);
        }

        return $this->idFileInfo;
    }

    /**
     * @module FileManager
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
     * @module FileManager
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
     * @module FileManager
     *
     * @return string|null
     */
    public function getVersionName()
    {
        return $this->versionName;
    }

    /**
     * @module FileManager
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
     * @module FileManager
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
     * @module FileManager
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
     * @module FileManager
     *
     * @param string|null $createdAt
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        $this->modifiedProperties[self::CREATED_AT] = true;

        return $this;
    }

    /**
     * @module FileManager
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @module FileManager
     *
     * @param string|null $createdAt
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCreatedAtOrFail($createdAt)
    {
        if ($createdAt === null) {
            $this->throwNullValueException(static::CREATED_AT);
        }

        return $this->setCreatedAt($createdAt);
    }

    /**
     * @module FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCreatedAtOrFail()
    {
        if ($this->createdAt === null) {
            $this->throwNullValueException(static::CREATED_AT);
        }

        return $this->createdAt;
    }

    /**
     * @module FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCreatedAt()
    {
        $this->assertPropertyIsSet(self::CREATED_AT);

        return $this;
    }

    /**
     * @module FileManager
     *
     * @param string|null $updatedAt
     *
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
        $this->modifiedProperties[self::UPDATED_AT] = true;

        return $this;
    }

    /**
     * @module FileManager
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @module FileManager
     *
     * @param string|null $updatedAt
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUpdatedAtOrFail($updatedAt)
    {
        if ($updatedAt === null) {
            $this->throwNullValueException(static::UPDATED_AT);
        }

        return $this->setUpdatedAt($updatedAt);
    }

    /**
     * @module FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUpdatedAtOrFail()
    {
        if ($this->updatedAt === null) {
            $this->throwNullValueException(static::UPDATED_AT);
        }

        return $this->updatedAt;
    }

    /**
     * @module FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUpdatedAt()
    {
        $this->assertPropertyIsSet(self::UPDATED_AT);

        return $this;
    }

    /**
     * @module FileManager
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\FileInfoLocalizedAttributesTransfer[] $localizedAttributes
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
     * @module FileManager
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\FileInfoLocalizedAttributesTransfer[]
     */
    public function getLocalizedAttributes()
    {
        return $this->localizedAttributes;
    }

    /**
     * @module FileManager
     *
     * @param \Generated\Shared\Transfer\FileInfoLocalizedAttributesTransfer $localizedAttributes
     *
     * @return $this
     */
    public function addLocalizedAttributes(FileInfoLocalizedAttributesTransfer $localizedAttributes)
    {
        $this->localizedAttributes[] = $localizedAttributes;
        $this->modifiedProperties[self::LOCALIZED_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module FileManager
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
                case 'extension':
                case 'size':
                case 'type':
                case 'fkFile':
                case 'version':
                case 'storageName':
                case 'storageFileName':
                case 'idFileInfo':
                case 'versionName':
                case 'createdAt':
                case 'updatedAt':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'localizedAttributes':
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
                case 'extension':
                case 'size':
                case 'type':
                case 'fkFile':
                case 'version':
                case 'storageName':
                case 'storageFileName':
                case 'idFileInfo':
                case 'versionName':
                case 'createdAt':
                case 'updatedAt':
                    $values[$arrayKey] = $value;

                    break;
                case 'localizedAttributes':
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
                case 'extension':
                case 'size':
                case 'type':
                case 'fkFile':
                case 'version':
                case 'storageName':
                case 'storageFileName':
                case 'idFileInfo':
                case 'versionName':
                case 'createdAt':
                case 'updatedAt':
                    $values[$arrayKey] = $value;

                    break;
                case 'localizedAttributes':
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
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'extension' => $this->extension,
            'size' => $this->size,
            'type' => $this->type,
            'fkFile' => $this->fkFile,
            'version' => $this->version,
            'storageName' => $this->storageName,
            'storageFileName' => $this->storageFileName,
            'idFileInfo' => $this->idFileInfo,
            'versionName' => $this->versionName,
            'createdAt' => $this->createdAt,
            'updatedAt' => $this->updatedAt,
            'localizedAttributes' => $this->localizedAttributes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'extension' => $this->extension,
            'size' => $this->size,
            'type' => $this->type,
            'fk_file' => $this->fkFile,
            'version' => $this->version,
            'storage_name' => $this->storageName,
            'storage_file_name' => $this->storageFileName,
            'id_file_info' => $this->idFileInfo,
            'version_name' => $this->versionName,
            'created_at' => $this->createdAt,
            'updated_at' => $this->updatedAt,
            'localized_attributes' => $this->localizedAttributes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'extension' => $this->extension instanceof AbstractTransfer ? $this->extension->toArray(true, false) : $this->extension,
            'size' => $this->size instanceof AbstractTransfer ? $this->size->toArray(true, false) : $this->size,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, false) : $this->type,
            'fk_file' => $this->fkFile instanceof AbstractTransfer ? $this->fkFile->toArray(true, false) : $this->fkFile,
            'version' => $this->version instanceof AbstractTransfer ? $this->version->toArray(true, false) : $this->version,
            'storage_name' => $this->storageName instanceof AbstractTransfer ? $this->storageName->toArray(true, false) : $this->storageName,
            'storage_file_name' => $this->storageFileName instanceof AbstractTransfer ? $this->storageFileName->toArray(true, false) : $this->storageFileName,
            'id_file_info' => $this->idFileInfo instanceof AbstractTransfer ? $this->idFileInfo->toArray(true, false) : $this->idFileInfo,
            'version_name' => $this->versionName instanceof AbstractTransfer ? $this->versionName->toArray(true, false) : $this->versionName,
            'created_at' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, false) : $this->createdAt,
            'updated_at' => $this->updatedAt instanceof AbstractTransfer ? $this->updatedAt->toArray(true, false) : $this->updatedAt,
            'localized_attributes' => $this->localizedAttributes instanceof AbstractTransfer ? $this->localizedAttributes->toArray(true, false) : $this->addValuesToCollection($this->localizedAttributes, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'extension' => $this->extension instanceof AbstractTransfer ? $this->extension->toArray(true, true) : $this->extension,
            'size' => $this->size instanceof AbstractTransfer ? $this->size->toArray(true, true) : $this->size,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, true) : $this->type,
            'fkFile' => $this->fkFile instanceof AbstractTransfer ? $this->fkFile->toArray(true, true) : $this->fkFile,
            'version' => $this->version instanceof AbstractTransfer ? $this->version->toArray(true, true) : $this->version,
            'storageName' => $this->storageName instanceof AbstractTransfer ? $this->storageName->toArray(true, true) : $this->storageName,
            'storageFileName' => $this->storageFileName instanceof AbstractTransfer ? $this->storageFileName->toArray(true, true) : $this->storageFileName,
            'idFileInfo' => $this->idFileInfo instanceof AbstractTransfer ? $this->idFileInfo->toArray(true, true) : $this->idFileInfo,
            'versionName' => $this->versionName instanceof AbstractTransfer ? $this->versionName->toArray(true, true) : $this->versionName,
            'createdAt' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, true) : $this->createdAt,
            'updatedAt' => $this->updatedAt instanceof AbstractTransfer ? $this->updatedAt->toArray(true, true) : $this->updatedAt,
            'localizedAttributes' => $this->localizedAttributes instanceof AbstractTransfer ? $this->localizedAttributes->toArray(true, true) : $this->addValuesToCollection($this->localizedAttributes, true, true),
        ];
    }
}
