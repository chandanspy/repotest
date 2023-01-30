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
class SpyFileDirectoryEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_FILE_DIRECTORY = 'idFileDirectory';

    /**
     * @var string
     */
    public const FK_PARENT_FILE_DIRECTORY = 'fkParentFileDirectory';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const POSITION = 'position';

    /**
     * @var string
     */
    public const PARENT_FILE_DIRECTORY = 'parentFileDirectory';

    /**
     * @var string
     */
    public const SPY_FILES = 'spyFiles';

    /**
     * @var string
     */
    public const SPY_FILE_DIRECTORIES = 'spyFileDirectories';

    /**
     * @var string
     */
    public const SPY_FILE_DIRECTORY_LOCALIZED_ATTRIBUTESS = 'spyFileDirectoryLocalizedAttributess';

    /**
     * @var integer|null
     */
    protected $idFileDirectory;

    /**
     * @var integer|null
     */
    protected $fkParentFileDirectory;

    /**
     * @var boolean|null
     */
    protected $isActive;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var integer|null
     */
    protected $position;

    /**
     * @var \Generated\Shared\Transfer\SpyFileDirectoryEntityTransfer|null
     */
    protected $parentFileDirectory;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyFileEntityTransfer[]
     */
    protected $spyFiles;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyFileDirectoryEntityTransfer[]
     */
    protected $spyFileDirectories;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyFileDirectoryLocalizedAttributesEntityTransfer[]
     */
    protected $spyFileDirectoryLocalizedAttributess;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_file_directory' => 'idFileDirectory',
        'idFileDirectory' => 'idFileDirectory',
        'IdFileDirectory' => 'idFileDirectory',
        'fk_parent_file_directory' => 'fkParentFileDirectory',
        'fkParentFileDirectory' => 'fkParentFileDirectory',
        'FkParentFileDirectory' => 'fkParentFileDirectory',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'name' => 'name',
        'Name' => 'name',
        'position' => 'position',
        'Position' => 'position',
        'parent_file_directory' => 'parentFileDirectory',
        'parentFileDirectory' => 'parentFileDirectory',
        'ParentFileDirectory' => 'parentFileDirectory',
        'spy_files' => 'spyFiles',
        'spyFiles' => 'spyFiles',
        'SpyFiles' => 'spyFiles',
        'spy_file_directories' => 'spyFileDirectories',
        'spyFileDirectories' => 'spyFileDirectories',
        'SpyFileDirectories' => 'spyFileDirectories',
        'spy_file_directory_localized_attributess' => 'spyFileDirectoryLocalizedAttributess',
        'spyFileDirectoryLocalizedAttributess' => 'spyFileDirectoryLocalizedAttributess',
        'SpyFileDirectoryLocalizedAttributess' => 'spyFileDirectoryLocalizedAttributess',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_FILE_DIRECTORY => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_file_directory',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PARENT_FILE_DIRECTORY => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_parent_file_directory',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_ACTIVE => [
            'type' => 'boolean',
            'type_shim' => null,
            'name_underscore' => 'is_active',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::POSITION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'position',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PARENT_FILE_DIRECTORY => [
            'type' => 'Generated\Shared\Transfer\SpyFileDirectoryEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'parent_file_directory',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_FILES => [
            'type' => 'Generated\Shared\Transfer\SpyFileEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_files',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_FILE_DIRECTORIES => [
            'type' => 'Generated\Shared\Transfer\SpyFileDirectoryEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_file_directories',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_FILE_DIRECTORY_LOCALIZED_ATTRIBUTESS => [
            'type' => 'Generated\Shared\Transfer\SpyFileDirectoryLocalizedAttributesEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_file_directory_localized_attributess',
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
    public static $entityNamespace = 'Orm\Zed\FileManager\Persistence\SpyFileDirectory';


    /**
     * @module 
     *
     * @param integer|null $idFileDirectory
     *
     * @return $this
     */
    public function setIdFileDirectory($idFileDirectory)
    {
        $this->idFileDirectory = $idFileDirectory;
        $this->modifiedProperties[self::ID_FILE_DIRECTORY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdFileDirectory()
    {
        return $this->idFileDirectory;
    }

    /**
     * @module 
     *
     * @param integer|null $idFileDirectory
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdFileDirectoryOrFail($idFileDirectory)
    {
        if ($idFileDirectory === null) {
            $this->throwNullValueException(static::ID_FILE_DIRECTORY);
        }

        return $this->setIdFileDirectory($idFileDirectory);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdFileDirectoryOrFail()
    {
        if ($this->idFileDirectory === null) {
            $this->throwNullValueException(static::ID_FILE_DIRECTORY);
        }

        return $this->idFileDirectory;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdFileDirectory()
    {
        $this->assertPropertyIsSet(self::ID_FILE_DIRECTORY);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkParentFileDirectory
     *
     * @return $this
     */
    public function setFkParentFileDirectory($fkParentFileDirectory)
    {
        $this->fkParentFileDirectory = $fkParentFileDirectory;
        $this->modifiedProperties[self::FK_PARENT_FILE_DIRECTORY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkParentFileDirectory()
    {
        return $this->fkParentFileDirectory;
    }

    /**
     * @module 
     *
     * @param integer|null $fkParentFileDirectory
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkParentFileDirectoryOrFail($fkParentFileDirectory)
    {
        if ($fkParentFileDirectory === null) {
            $this->throwNullValueException(static::FK_PARENT_FILE_DIRECTORY);
        }

        return $this->setFkParentFileDirectory($fkParentFileDirectory);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkParentFileDirectoryOrFail()
    {
        if ($this->fkParentFileDirectory === null) {
            $this->throwNullValueException(static::FK_PARENT_FILE_DIRECTORY);
        }

        return $this->fkParentFileDirectory;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkParentFileDirectory()
    {
        $this->assertPropertyIsSet(self::FK_PARENT_FILE_DIRECTORY);

        return $this;
    }

    /**
     * @module 
     *
     * @param boolean|null $isActive
     *
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        $this->modifiedProperties[self::IS_ACTIVE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return boolean|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module 
     *
     * @param boolean|null $isActive
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsActiveOrFail($isActive)
    {
        if ($isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->setIsActive($isActive);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsActiveOrFail()
    {
        if ($this->isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->isActive;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsActive()
    {
        $this->assertPropertyIsSet(self::IS_ACTIVE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        $this->modifiedProperties[self::NAME] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module 
     *
     * @param string|null $name
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNameOrFail($name)
    {
        if ($name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->setName($name);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNameOrFail()
    {
        if ($this->name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->name;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireName()
    {
        $this->assertPropertyIsSet(self::NAME);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->position = $position;
        $this->modifiedProperties[self::POSITION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @module 
     *
     * @param integer|null $position
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPositionOrFail($position)
    {
        if ($position === null) {
            $this->throwNullValueException(static::POSITION);
        }

        return $this->setPosition($position);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getPositionOrFail()
    {
        if ($this->position === null) {
            $this->throwNullValueException(static::POSITION);
        }

        return $this->position;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePosition()
    {
        $this->assertPropertyIsSet(self::POSITION);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyFileDirectoryEntityTransfer|null $parentFileDirectory
     *
     * @return $this
     */
    public function setParentFileDirectory(SpyFileDirectoryEntityTransfer $parentFileDirectory = null)
    {
        $this->parentFileDirectory = $parentFileDirectory;
        $this->modifiedProperties[self::PARENT_FILE_DIRECTORY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyFileDirectoryEntityTransfer|null
     */
    public function getParentFileDirectory()
    {
        return $this->parentFileDirectory;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyFileDirectoryEntityTransfer $parentFileDirectory
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setParentFileDirectoryOrFail(SpyFileDirectoryEntityTransfer $parentFileDirectory)
    {
        return $this->setParentFileDirectory($parentFileDirectory);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyFileDirectoryEntityTransfer
     */
    public function getParentFileDirectoryOrFail()
    {
        if ($this->parentFileDirectory === null) {
            $this->throwNullValueException(static::PARENT_FILE_DIRECTORY);
        }

        return $this->parentFileDirectory;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireParentFileDirectory()
    {
        $this->assertPropertyIsSet(self::PARENT_FILE_DIRECTORY);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyFileEntityTransfer[] $spyFiles
     *
     * @return $this
     */
    public function setSpyFiles(ArrayObject $spyFiles)
    {
        $this->spyFiles = $spyFiles;
        $this->modifiedProperties[self::SPY_FILES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyFileEntityTransfer[]
     */
    public function getSpyFiles()
    {
        return $this->spyFiles;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyFileEntityTransfer $spyFiles
     *
     * @return $this
     */
    public function addSpyFiles(SpyFileEntityTransfer $spyFiles)
    {
        $this->spyFiles[] = $spyFiles;
        $this->modifiedProperties[self::SPY_FILES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyFiles()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_FILES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyFileDirectoryEntityTransfer[] $spyFileDirectories
     *
     * @return $this
     */
    public function setSpyFileDirectories(ArrayObject $spyFileDirectories)
    {
        $this->spyFileDirectories = $spyFileDirectories;
        $this->modifiedProperties[self::SPY_FILE_DIRECTORIES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyFileDirectoryEntityTransfer[]
     */
    public function getSpyFileDirectories()
    {
        return $this->spyFileDirectories;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyFileDirectoryEntityTransfer $spyFileDirectories
     *
     * @return $this
     */
    public function addSpyFileDirectories(SpyFileDirectoryEntityTransfer $spyFileDirectories)
    {
        $this->spyFileDirectories[] = $spyFileDirectories;
        $this->modifiedProperties[self::SPY_FILE_DIRECTORIES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyFileDirectories()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_FILE_DIRECTORIES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyFileDirectoryLocalizedAttributesEntityTransfer[] $spyFileDirectoryLocalizedAttributess
     *
     * @return $this
     */
    public function setSpyFileDirectoryLocalizedAttributess(ArrayObject $spyFileDirectoryLocalizedAttributess)
    {
        $this->spyFileDirectoryLocalizedAttributess = $spyFileDirectoryLocalizedAttributess;
        $this->modifiedProperties[self::SPY_FILE_DIRECTORY_LOCALIZED_ATTRIBUTESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyFileDirectoryLocalizedAttributesEntityTransfer[]
     */
    public function getSpyFileDirectoryLocalizedAttributess()
    {
        return $this->spyFileDirectoryLocalizedAttributess;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyFileDirectoryLocalizedAttributesEntityTransfer $spyFileDirectoryLocalizedAttributess
     *
     * @return $this
     */
    public function addSpyFileDirectoryLocalizedAttributess(SpyFileDirectoryLocalizedAttributesEntityTransfer $spyFileDirectoryLocalizedAttributess)
    {
        $this->spyFileDirectoryLocalizedAttributess[] = $spyFileDirectoryLocalizedAttributess;
        $this->modifiedProperties[self::SPY_FILE_DIRECTORY_LOCALIZED_ATTRIBUTESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyFileDirectoryLocalizedAttributess()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_FILE_DIRECTORY_LOCALIZED_ATTRIBUTESS);

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
                case 'idFileDirectory':
                case 'fkParentFileDirectory':
                case 'isActive':
                case 'name':
                case 'position':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'parentFileDirectory':
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
                case 'spyFiles':
                case 'spyFileDirectories':
                case 'spyFileDirectoryLocalizedAttributess':
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
                case 'idFileDirectory':
                case 'fkParentFileDirectory':
                case 'isActive':
                case 'name':
                case 'position':
                    $values[$arrayKey] = $value;

                    break;
                case 'parentFileDirectory':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyFiles':
                case 'spyFileDirectories':
                case 'spyFileDirectoryLocalizedAttributess':
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
                case 'idFileDirectory':
                case 'fkParentFileDirectory':
                case 'isActive':
                case 'name':
                case 'position':
                    $values[$arrayKey] = $value;

                    break;
                case 'parentFileDirectory':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyFiles':
                case 'spyFileDirectories':
                case 'spyFileDirectoryLocalizedAttributess':
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
        $this->spyFiles = $this->spyFiles ?: new ArrayObject();
        $this->spyFileDirectories = $this->spyFileDirectories ?: new ArrayObject();
        $this->spyFileDirectoryLocalizedAttributess = $this->spyFileDirectoryLocalizedAttributess ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idFileDirectory' => $this->idFileDirectory,
            'fkParentFileDirectory' => $this->fkParentFileDirectory,
            'isActive' => $this->isActive,
            'name' => $this->name,
            'position' => $this->position,
            'parentFileDirectory' => $this->parentFileDirectory,
            'spyFiles' => $this->spyFiles,
            'spyFileDirectories' => $this->spyFileDirectories,
            'spyFileDirectoryLocalizedAttributess' => $this->spyFileDirectoryLocalizedAttributess,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_file_directory' => $this->idFileDirectory,
            'fk_parent_file_directory' => $this->fkParentFileDirectory,
            'is_active' => $this->isActive,
            'name' => $this->name,
            'position' => $this->position,
            'parent_file_directory' => $this->parentFileDirectory,
            'spy_files' => $this->spyFiles,
            'spy_file_directories' => $this->spyFileDirectories,
            'spy_file_directory_localized_attributess' => $this->spyFileDirectoryLocalizedAttributess,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_file_directory' => $this->idFileDirectory instanceof AbstractTransfer ? $this->idFileDirectory->toArray(true, false) : $this->idFileDirectory,
            'fk_parent_file_directory' => $this->fkParentFileDirectory instanceof AbstractTransfer ? $this->fkParentFileDirectory->toArray(true, false) : $this->fkParentFileDirectory,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'position' => $this->position instanceof AbstractTransfer ? $this->position->toArray(true, false) : $this->position,
            'parent_file_directory' => $this->parentFileDirectory instanceof AbstractTransfer ? $this->parentFileDirectory->toArray(true, false) : $this->parentFileDirectory,
            'spy_files' => $this->spyFiles instanceof AbstractTransfer ? $this->spyFiles->toArray(true, false) : $this->addValuesToCollection($this->spyFiles, true, false),
            'spy_file_directories' => $this->spyFileDirectories instanceof AbstractTransfer ? $this->spyFileDirectories->toArray(true, false) : $this->addValuesToCollection($this->spyFileDirectories, true, false),
            'spy_file_directory_localized_attributess' => $this->spyFileDirectoryLocalizedAttributess instanceof AbstractTransfer ? $this->spyFileDirectoryLocalizedAttributess->toArray(true, false) : $this->addValuesToCollection($this->spyFileDirectoryLocalizedAttributess, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idFileDirectory' => $this->idFileDirectory instanceof AbstractTransfer ? $this->idFileDirectory->toArray(true, true) : $this->idFileDirectory,
            'fkParentFileDirectory' => $this->fkParentFileDirectory instanceof AbstractTransfer ? $this->fkParentFileDirectory->toArray(true, true) : $this->fkParentFileDirectory,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'position' => $this->position instanceof AbstractTransfer ? $this->position->toArray(true, true) : $this->position,
            'parentFileDirectory' => $this->parentFileDirectory instanceof AbstractTransfer ? $this->parentFileDirectory->toArray(true, true) : $this->parentFileDirectory,
            'spyFiles' => $this->spyFiles instanceof AbstractTransfer ? $this->spyFiles->toArray(true, true) : $this->addValuesToCollection($this->spyFiles, true, true),
            'spyFileDirectories' => $this->spyFileDirectories instanceof AbstractTransfer ? $this->spyFileDirectories->toArray(true, true) : $this->addValuesToCollection($this->spyFileDirectories, true, true),
            'spyFileDirectoryLocalizedAttributess' => $this->spyFileDirectoryLocalizedAttributess instanceof AbstractTransfer ? $this->spyFileDirectoryLocalizedAttributess->toArray(true, true) : $this->addValuesToCollection($this->spyFileDirectoryLocalizedAttributess, true, true),
        ];
    }
}
