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
class FileStorageDataTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const TYPE = 'type';

    /**
     * @var string
     */
    public const SIZE = 'size';

    /**
     * @var string
     */
    public const ICON_NAME = 'iconName';

    /**
     * @var string
     */
    public const FILE_NAME = 'fileName';

    /**
     * @var string
     */
    public const STORAGE_FILE_NAME = 'storageFileName';

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
    public const VERSIONS = 'versions';

    /**
     * @var string
     */
    public const STORAGE_NAME = 'storageName';

    /**
     * @var string
     */
    public const TITLE = 'title';

    /**
     * @var string
     */
    public const ALT = 'alt';

    /**
     * @var string
     */
    public const LOCALE = 'locale';

    /**
     * @var string
     */
    public const UPDATED_AT = 'updatedAt';

    /**
     * @var string
     */
    public const CREATED_AT = 'createdAt';

    /**
     * @var string|null
     */
    protected $type;

    /**
     * @var int|null
     */
    protected $size;

    /**
     * @var string|null
     */
    protected $iconName;

    /**
     * @var string|null
     */
    protected $fileName;

    /**
     * @var string|null
     */
    protected $storageFileName;

    /**
     * @var int|null
     */
    protected $fkFile;

    /**
     * @var int|null
     */
    protected $version;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\FileInfoTransfer[]
     */
    protected $versions;

    /**
     * @var string|null
     */
    protected $storageName;

    /**
     * @var string|null
     */
    protected $title;

    /**
     * @var string|null
     */
    protected $alt;

    /**
     * @var string|null
     */
    protected $locale;

    /**
     * @var string|null
     */
    protected $updatedAt;

    /**
     * @var string|null
     */
    protected $createdAt;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'type' => 'type',
        'Type' => 'type',
        'size' => 'size',
        'Size' => 'size',
        'icon_name' => 'iconName',
        'iconName' => 'iconName',
        'IconName' => 'iconName',
        'file_name' => 'fileName',
        'fileName' => 'fileName',
        'FileName' => 'fileName',
        'storage_file_name' => 'storageFileName',
        'storageFileName' => 'storageFileName',
        'StorageFileName' => 'storageFileName',
        'fk_file' => 'fkFile',
        'fkFile' => 'fkFile',
        'FkFile' => 'fkFile',
        'version' => 'version',
        'Version' => 'version',
        'versions' => 'versions',
        'Versions' => 'versions',
        'storage_name' => 'storageName',
        'storageName' => 'storageName',
        'StorageName' => 'storageName',
        'title' => 'title',
        'Title' => 'title',
        'alt' => 'alt',
        'Alt' => 'alt',
        'locale' => 'locale',
        'Locale' => 'locale',
        'updated_at' => 'updatedAt',
        'updatedAt' => 'updatedAt',
        'UpdatedAt' => 'updatedAt',
        'created_at' => 'createdAt',
        'createdAt' => 'createdAt',
        'CreatedAt' => 'createdAt',
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
        self::ICON_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'icon_name',
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
        self::VERSIONS => [
            'type' => 'Generated\Shared\Transfer\FileInfoTransfer',
            'type_shim' => null,
            'name_underscore' => 'versions',
            'is_collection' => true,
            'is_transfer' => true,
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
        self::TITLE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'title',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ALT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'alt',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LOCALE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'locale',
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
    ];

    /**
     * @module ContentFileWidget|FileManagerWidget|FileManagerStorage
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
     * @module ContentFileWidget|FileManagerWidget|FileManagerStorage
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @module ContentFileWidget|FileManagerWidget|FileManagerStorage
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
     * @module ContentFileWidget|FileManagerWidget|FileManagerStorage
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
     * @module ContentFileWidget|FileManagerWidget|FileManagerStorage
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
     * @module ContentFileWidget|FileManagerStorage
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
     * @module ContentFileWidget|FileManagerStorage
     *
     * @return int|null
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @module ContentFileWidget|FileManagerStorage
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
     * @module ContentFileWidget|FileManagerStorage
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
     * @module ContentFileWidget|FileManagerStorage
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
     * @module ContentFileWidget
     *
     * @param string|null $iconName
     *
     * @return $this
     */
    public function setIconName($iconName)
    {
        $this->iconName = $iconName;
        $this->modifiedProperties[self::ICON_NAME] = true;

        return $this;
    }

    /**
     * @module ContentFileWidget
     *
     * @return string|null
     */
    public function getIconName()
    {
        return $this->iconName;
    }

    /**
     * @module ContentFileWidget
     *
     * @param string|null $iconName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIconNameOrFail($iconName)
    {
        if ($iconName === null) {
            $this->throwNullValueException(static::ICON_NAME);
        }

        return $this->setIconName($iconName);
    }

    /**
     * @module ContentFileWidget
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIconNameOrFail()
    {
        if ($this->iconName === null) {
            $this->throwNullValueException(static::ICON_NAME);
        }

        return $this->iconName;
    }

    /**
     * @module ContentFileWidget
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIconName()
    {
        $this->assertPropertyIsSet(self::ICON_NAME);

        return $this;
    }

    /**
     * @module ContentFileWidget|FileManagerStorage
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
     * @module ContentFileWidget|FileManagerStorage
     *
     * @return string|null
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @module ContentFileWidget|FileManagerStorage
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
     * @module ContentFileWidget|FileManagerStorage
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
     * @module ContentFileWidget|FileManagerStorage
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
     * @module FileManagerWidget|FileManagerStorage
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
     * @module FileManagerWidget|FileManagerStorage
     *
     * @return string|null
     */
    public function getStorageFileName()
    {
        return $this->storageFileName;
    }

    /**
     * @module FileManagerWidget|FileManagerStorage
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
     * @module FileManagerWidget|FileManagerStorage
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
     * @module FileManagerWidget|FileManagerStorage
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
     * @module FileManagerStorage
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
     * @module FileManagerStorage
     *
     * @return int|null
     */
    public function getFkFile()
    {
        return $this->fkFile;
    }

    /**
     * @module FileManagerStorage
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
     * @module FileManagerStorage
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
     * @module FileManagerStorage
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
     * @module FileManagerStorage
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
     * @module FileManagerStorage
     *
     * @return int|null
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @module FileManagerStorage
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
     * @module FileManagerStorage
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
     * @module FileManagerStorage
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
     * @module FileManagerStorage
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\FileInfoTransfer[] $versions
     *
     * @return $this
     */
    public function setVersions(ArrayObject $versions)
    {
        $this->versions = $versions;
        $this->modifiedProperties[self::VERSIONS] = true;

        return $this;
    }

    /**
     * @module FileManagerStorage
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\FileInfoTransfer[]
     */
    public function getVersions()
    {
        return $this->versions;
    }

    /**
     * @module FileManagerStorage
     *
     * @param \Generated\Shared\Transfer\FileInfoTransfer $versions
     *
     * @return $this
     */
    public function addVersions(FileInfoTransfer $versions)
    {
        $this->versions[] = $versions;
        $this->modifiedProperties[self::VERSIONS] = true;

        return $this;
    }

    /**
     * @module FileManagerStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireVersions()
    {
        $this->assertCollectionPropertyIsSet(self::VERSIONS);

        return $this;
    }

    /**
     * @module FileManagerStorage
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
     * @module FileManagerStorage
     *
     * @return string|null
     */
    public function getStorageName()
    {
        return $this->storageName;
    }

    /**
     * @module FileManagerStorage
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
     * @module FileManagerStorage
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
     * @module FileManagerStorage
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
     * @module FileManagerStorage
     *
     * @param string|null $title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        $this->modifiedProperties[self::TITLE] = true;

        return $this;
    }

    /**
     * @module FileManagerStorage
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @module FileManagerStorage
     *
     * @param string|null $title
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTitleOrFail($title)
    {
        if ($title === null) {
            $this->throwNullValueException(static::TITLE);
        }

        return $this->setTitle($title);
    }

    /**
     * @module FileManagerStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTitleOrFail()
    {
        if ($this->title === null) {
            $this->throwNullValueException(static::TITLE);
        }

        return $this->title;
    }

    /**
     * @module FileManagerStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTitle()
    {
        $this->assertPropertyIsSet(self::TITLE);

        return $this;
    }

    /**
     * @module FileManagerStorage
     *
     * @param string|null $alt
     *
     * @return $this
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;
        $this->modifiedProperties[self::ALT] = true;

        return $this;
    }

    /**
     * @module FileManagerStorage
     *
     * @return string|null
     */
    public function getAlt()
    {
        return $this->alt;
    }

    /**
     * @module FileManagerStorage
     *
     * @param string|null $alt
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAltOrFail($alt)
    {
        if ($alt === null) {
            $this->throwNullValueException(static::ALT);
        }

        return $this->setAlt($alt);
    }

    /**
     * @module FileManagerStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAltOrFail()
    {
        if ($this->alt === null) {
            $this->throwNullValueException(static::ALT);
        }

        return $this->alt;
    }

    /**
     * @module FileManagerStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAlt()
    {
        $this->assertPropertyIsSet(self::ALT);

        return $this;
    }

    /**
     * @module FileManagerStorage
     *
     * @param string|null $locale
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
        $this->modifiedProperties[self::LOCALE] = true;

        return $this;
    }

    /**
     * @module FileManagerStorage
     *
     * @return string|null
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @module FileManagerStorage
     *
     * @param string|null $locale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLocaleOrFail($locale)
    {
        if ($locale === null) {
            $this->throwNullValueException(static::LOCALE);
        }

        return $this->setLocale($locale);
    }

    /**
     * @module FileManagerStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getLocaleOrFail()
    {
        if ($this->locale === null) {
            $this->throwNullValueException(static::LOCALE);
        }

        return $this->locale;
    }

    /**
     * @module FileManagerStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocale()
    {
        $this->assertPropertyIsSet(self::LOCALE);

        return $this;
    }

    /**
     * @module FileManagerStorage
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
     * @module FileManagerStorage
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @module FileManagerStorage
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
     * @module FileManagerStorage
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
     * @module FileManagerStorage
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
     * @module FileManagerStorage
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
     * @module FileManagerStorage
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @module FileManagerStorage
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
     * @module FileManagerStorage
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
     * @module FileManagerStorage
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
                case 'size':
                case 'iconName':
                case 'fileName':
                case 'storageFileName':
                case 'fkFile':
                case 'version':
                case 'storageName':
                case 'title':
                case 'alt':
                case 'locale':
                case 'updatedAt':
                case 'createdAt':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'versions':
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
                case 'type':
                case 'size':
                case 'iconName':
                case 'fileName':
                case 'storageFileName':
                case 'fkFile':
                case 'version':
                case 'storageName':
                case 'title':
                case 'alt':
                case 'locale':
                case 'updatedAt':
                case 'createdAt':
                    $values[$arrayKey] = $value;

                    break;
                case 'versions':
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
                case 'type':
                case 'size':
                case 'iconName':
                case 'fileName':
                case 'storageFileName':
                case 'fkFile':
                case 'version':
                case 'storageName':
                case 'title':
                case 'alt':
                case 'locale':
                case 'updatedAt':
                case 'createdAt':
                    $values[$arrayKey] = $value;

                    break;
                case 'versions':
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
        $this->versions = $this->versions ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'type' => $this->type,
            'size' => $this->size,
            'iconName' => $this->iconName,
            'fileName' => $this->fileName,
            'storageFileName' => $this->storageFileName,
            'fkFile' => $this->fkFile,
            'version' => $this->version,
            'storageName' => $this->storageName,
            'title' => $this->title,
            'alt' => $this->alt,
            'locale' => $this->locale,
            'updatedAt' => $this->updatedAt,
            'createdAt' => $this->createdAt,
            'versions' => $this->versions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'type' => $this->type,
            'size' => $this->size,
            'icon_name' => $this->iconName,
            'file_name' => $this->fileName,
            'storage_file_name' => $this->storageFileName,
            'fk_file' => $this->fkFile,
            'version' => $this->version,
            'storage_name' => $this->storageName,
            'title' => $this->title,
            'alt' => $this->alt,
            'locale' => $this->locale,
            'updated_at' => $this->updatedAt,
            'created_at' => $this->createdAt,
            'versions' => $this->versions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, false) : $this->type,
            'size' => $this->size instanceof AbstractTransfer ? $this->size->toArray(true, false) : $this->size,
            'icon_name' => $this->iconName instanceof AbstractTransfer ? $this->iconName->toArray(true, false) : $this->iconName,
            'file_name' => $this->fileName instanceof AbstractTransfer ? $this->fileName->toArray(true, false) : $this->fileName,
            'storage_file_name' => $this->storageFileName instanceof AbstractTransfer ? $this->storageFileName->toArray(true, false) : $this->storageFileName,
            'fk_file' => $this->fkFile instanceof AbstractTransfer ? $this->fkFile->toArray(true, false) : $this->fkFile,
            'version' => $this->version instanceof AbstractTransfer ? $this->version->toArray(true, false) : $this->version,
            'storage_name' => $this->storageName instanceof AbstractTransfer ? $this->storageName->toArray(true, false) : $this->storageName,
            'title' => $this->title instanceof AbstractTransfer ? $this->title->toArray(true, false) : $this->title,
            'alt' => $this->alt instanceof AbstractTransfer ? $this->alt->toArray(true, false) : $this->alt,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, false) : $this->locale,
            'updated_at' => $this->updatedAt instanceof AbstractTransfer ? $this->updatedAt->toArray(true, false) : $this->updatedAt,
            'created_at' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, false) : $this->createdAt,
            'versions' => $this->versions instanceof AbstractTransfer ? $this->versions->toArray(true, false) : $this->addValuesToCollection($this->versions, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, true) : $this->type,
            'size' => $this->size instanceof AbstractTransfer ? $this->size->toArray(true, true) : $this->size,
            'iconName' => $this->iconName instanceof AbstractTransfer ? $this->iconName->toArray(true, true) : $this->iconName,
            'fileName' => $this->fileName instanceof AbstractTransfer ? $this->fileName->toArray(true, true) : $this->fileName,
            'storageFileName' => $this->storageFileName instanceof AbstractTransfer ? $this->storageFileName->toArray(true, true) : $this->storageFileName,
            'fkFile' => $this->fkFile instanceof AbstractTransfer ? $this->fkFile->toArray(true, true) : $this->fkFile,
            'version' => $this->version instanceof AbstractTransfer ? $this->version->toArray(true, true) : $this->version,
            'storageName' => $this->storageName instanceof AbstractTransfer ? $this->storageName->toArray(true, true) : $this->storageName,
            'title' => $this->title instanceof AbstractTransfer ? $this->title->toArray(true, true) : $this->title,
            'alt' => $this->alt instanceof AbstractTransfer ? $this->alt->toArray(true, true) : $this->alt,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, true) : $this->locale,
            'updatedAt' => $this->updatedAt instanceof AbstractTransfer ? $this->updatedAt->toArray(true, true) : $this->updatedAt,
            'createdAt' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, true) : $this->createdAt,
            'versions' => $this->versions instanceof AbstractTransfer ? $this->versions->toArray(true, true) : $this->addValuesToCollection($this->versions, true, true),
        ];
    }
}
