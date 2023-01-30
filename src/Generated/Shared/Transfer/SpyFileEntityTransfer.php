<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyFileEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_FILE = 'idFile';

    /**
     * @var string
     */
    public const FK_FILE_DIRECTORY = 'fkFileDirectory';

    /**
     * @var string
     */
    public const FILE_NAME = 'fileName';

    /**
     * @var string
     */
    public const FILE_DIRECTORY = 'fileDirectory';

    /**
     * @var string
     */
    public const SPY_FILE_INFOS = 'spyFileInfos';

    /**
     * @var string
     */
    public const SPY_FILE_LOCALIZED_ATTRIBUTESS = 'spyFileLocalizedAttributess';

    /**
     * @var integer|null
     */
    protected $idFile;

    /**
     * @var integer|null
     */
    protected $fkFileDirectory;

    /**
     * @var string|null
     */
    protected $fileName;

    /**
     * @var \Generated\Shared\Transfer\SpyFileDirectoryEntityTransfer|null
     */
    protected $fileDirectory;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyFileInfoEntityTransfer[]
     */
    protected $spyFileInfos;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyFileLocalizedAttributesEntityTransfer[]
     */
    protected $spyFileLocalizedAttributess;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_file' => 'idFile',
        'idFile' => 'idFile',
        'IdFile' => 'idFile',
        'fk_file_directory' => 'fkFileDirectory',
        'fkFileDirectory' => 'fkFileDirectory',
        'FkFileDirectory' => 'fkFileDirectory',
        'file_name' => 'fileName',
        'fileName' => 'fileName',
        'FileName' => 'fileName',
        'file_directory' => 'fileDirectory',
        'fileDirectory' => 'fileDirectory',
        'FileDirectory' => 'fileDirectory',
        'spy_file_infos' => 'spyFileInfos',
        'spyFileInfos' => 'spyFileInfos',
        'SpyFileInfos' => 'spyFileInfos',
        'spy_file_localized_attributess' => 'spyFileLocalizedAttributess',
        'spyFileLocalizedAttributess' => 'spyFileLocalizedAttributess',
        'SpyFileLocalizedAttributess' => 'spyFileLocalizedAttributess',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_FILE => [
            'type' => 'integer',
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
        self::FK_FILE_DIRECTORY => [
            'type' => 'integer',
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
        self::FILE_DIRECTORY => [
            'type' => 'Generated\Shared\Transfer\SpyFileDirectoryEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'file_directory',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_FILE_INFOS => [
            'type' => 'Generated\Shared\Transfer\SpyFileInfoEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_file_infos',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_FILE_LOCALIZED_ATTRIBUTESS => [
            'type' => 'Generated\Shared\Transfer\SpyFileLocalizedAttributesEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_file_localized_attributess',
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
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\FileManager\Persistence\SpyFile';


    /**
     * @module 
     *
     * @param integer|null $idFile
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdFile()
    {
        return $this->idFile;
    }

    /**
     * @module 
     *
     * @param integer|null $idFile
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdFileOrFail()
    {
        if ($this->idFile === null) {
            $this->throwNullValueException(static::ID_FILE);
        }

        return $this->idFile;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkFileDirectory
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
     * @module 
     *
     * @return integer|null
     */
    public function getFkFileDirectory()
    {
        return $this->fkFileDirectory;
    }

    /**
     * @module 
     *
     * @param integer|null $fkFileDirectory
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkFileDirectoryOrFail()
    {
        if ($this->fkFileDirectory === null) {
            $this->throwNullValueException(static::FK_FILE_DIRECTORY);
        }

        return $this->fkFileDirectory;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyFileDirectoryEntityTransfer|null $fileDirectory
     *
     * @return $this
     */
    public function setFileDirectory(SpyFileDirectoryEntityTransfer $fileDirectory = null)
    {
        $this->fileDirectory = $fileDirectory;
        $this->modifiedProperties[self::FILE_DIRECTORY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyFileDirectoryEntityTransfer|null
     */
    public function getFileDirectory()
    {
        return $this->fileDirectory;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyFileDirectoryEntityTransfer $fileDirectory
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFileDirectoryOrFail(SpyFileDirectoryEntityTransfer $fileDirectory)
    {
        return $this->setFileDirectory($fileDirectory);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyFileDirectoryEntityTransfer
     */
    public function getFileDirectoryOrFail()
    {
        if ($this->fileDirectory === null) {
            $this->throwNullValueException(static::FILE_DIRECTORY);
        }

        return $this->fileDirectory;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFileDirectory()
    {
        $this->assertPropertyIsSet(self::FILE_DIRECTORY);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyFileInfoEntityTransfer[] $spyFileInfos
     *
     * @return $this
     */
    public function setSpyFileInfos(ArrayObject $spyFileInfos)
    {
        $this->spyFileInfos = $spyFileInfos;
        $this->modifiedProperties[self::SPY_FILE_INFOS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyFileInfoEntityTransfer[]
     */
    public function getSpyFileInfos()
    {
        return $this->spyFileInfos;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyFileInfoEntityTransfer $spyFileInfos
     *
     * @return $this
     */
    public function addSpyFileInfos(SpyFileInfoEntityTransfer $spyFileInfos)
    {
        $this->spyFileInfos[] = $spyFileInfos;
        $this->modifiedProperties[self::SPY_FILE_INFOS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyFileInfos()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_FILE_INFOS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyFileLocalizedAttributesEntityTransfer[] $spyFileLocalizedAttributess
     *
     * @return $this
     */
    public function setSpyFileLocalizedAttributess(ArrayObject $spyFileLocalizedAttributess)
    {
        $this->spyFileLocalizedAttributess = $spyFileLocalizedAttributess;
        $this->modifiedProperties[self::SPY_FILE_LOCALIZED_ATTRIBUTESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyFileLocalizedAttributesEntityTransfer[]
     */
    public function getSpyFileLocalizedAttributess()
    {
        return $this->spyFileLocalizedAttributess;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyFileLocalizedAttributesEntityTransfer $spyFileLocalizedAttributess
     *
     * @return $this
     */
    public function addSpyFileLocalizedAttributess(SpyFileLocalizedAttributesEntityTransfer $spyFileLocalizedAttributess)
    {
        $this->spyFileLocalizedAttributess[] = $spyFileLocalizedAttributess;
        $this->modifiedProperties[self::SPY_FILE_LOCALIZED_ATTRIBUTESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyFileLocalizedAttributess()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_FILE_LOCALIZED_ATTRIBUTESS);

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
                case 'fkFileDirectory':
                case 'fileName':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'fileDirectory':
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
                case 'spyFileInfos':
                case 'spyFileLocalizedAttributess':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
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
                case 'idFile':
                case 'fkFileDirectory':
                case 'fileName':
                    $values[$arrayKey] = $value;

                    break;
                case 'fileDirectory':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyFileInfos':
                case 'spyFileLocalizedAttributess':
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
                case 'fkFileDirectory':
                case 'fileName':
                    $values[$arrayKey] = $value;

                    break;
                case 'fileDirectory':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyFileInfos':
                case 'spyFileLocalizedAttributess':
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
        $this->spyFileInfos = $this->spyFileInfos ?: new ArrayObject();
        $this->spyFileLocalizedAttributess = $this->spyFileLocalizedAttributess ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idFile' => $this->idFile,
            'fkFileDirectory' => $this->fkFileDirectory,
            'fileName' => $this->fileName,
            'fileDirectory' => $this->fileDirectory,
            'spyFileInfos' => $this->spyFileInfos,
            'spyFileLocalizedAttributess' => $this->spyFileLocalizedAttributess,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_file' => $this->idFile,
            'fk_file_directory' => $this->fkFileDirectory,
            'file_name' => $this->fileName,
            'file_directory' => $this->fileDirectory,
            'spy_file_infos' => $this->spyFileInfos,
            'spy_file_localized_attributess' => $this->spyFileLocalizedAttributess,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_file' => $this->idFile instanceof AbstractTransfer ? $this->idFile->toArray(true, false) : $this->idFile,
            'fk_file_directory' => $this->fkFileDirectory instanceof AbstractTransfer ? $this->fkFileDirectory->toArray(true, false) : $this->fkFileDirectory,
            'file_name' => $this->fileName instanceof AbstractTransfer ? $this->fileName->toArray(true, false) : $this->fileName,
            'file_directory' => $this->fileDirectory instanceof AbstractTransfer ? $this->fileDirectory->toArray(true, false) : $this->fileDirectory,
            'spy_file_infos' => $this->spyFileInfos instanceof AbstractTransfer ? $this->spyFileInfos->toArray(true, false) : $this->addValuesToCollection($this->spyFileInfos, true, false),
            'spy_file_localized_attributess' => $this->spyFileLocalizedAttributess instanceof AbstractTransfer ? $this->spyFileLocalizedAttributess->toArray(true, false) : $this->addValuesToCollection($this->spyFileLocalizedAttributess, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idFile' => $this->idFile instanceof AbstractTransfer ? $this->idFile->toArray(true, true) : $this->idFile,
            'fkFileDirectory' => $this->fkFileDirectory instanceof AbstractTransfer ? $this->fkFileDirectory->toArray(true, true) : $this->fkFileDirectory,
            'fileName' => $this->fileName instanceof AbstractTransfer ? $this->fileName->toArray(true, true) : $this->fileName,
            'fileDirectory' => $this->fileDirectory instanceof AbstractTransfer ? $this->fileDirectory->toArray(true, true) : $this->fileDirectory,
            'spyFileInfos' => $this->spyFileInfos instanceof AbstractTransfer ? $this->spyFileInfos->toArray(true, true) : $this->addValuesToCollection($this->spyFileInfos, true, true),
            'spyFileLocalizedAttributess' => $this->spyFileLocalizedAttributess instanceof AbstractTransfer ? $this->spyFileLocalizedAttributess->toArray(true, true) : $this->addValuesToCollection($this->spyFileLocalizedAttributess, true, true),
        ];
    }
}
