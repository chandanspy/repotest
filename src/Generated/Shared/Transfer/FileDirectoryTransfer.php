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
class FileDirectoryTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const FILE_DIRECTORY_LOCALIZED_ATTRIBUTES = 'fileDirectoryLocalizedAttributes';

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
    public const NAME = 'name';

    /**
     * @var string
     */
    public const POSITION = 'position';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\FileDirectoryLocalizedAttributesTransfer[]
     */
    protected $fileDirectoryLocalizedAttributes;

    /**
     * @var int|null
     */
    protected $idFileDirectory;

    /**
     * @var int|null
     */
    protected $fkParentFileDirectory;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var int|null
     */
    protected $position;

    /**
     * @var bool|null
     */
    protected $isActive;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'file_directory_localized_attributes' => 'fileDirectoryLocalizedAttributes',
        'fileDirectoryLocalizedAttributes' => 'fileDirectoryLocalizedAttributes',
        'FileDirectoryLocalizedAttributes' => 'fileDirectoryLocalizedAttributes',
        'id_file_directory' => 'idFileDirectory',
        'idFileDirectory' => 'idFileDirectory',
        'IdFileDirectory' => 'idFileDirectory',
        'fk_parent_file_directory' => 'fkParentFileDirectory',
        'fkParentFileDirectory' => 'fkParentFileDirectory',
        'FkParentFileDirectory' => 'fkParentFileDirectory',
        'name' => 'name',
        'Name' => 'name',
        'position' => 'position',
        'Position' => 'position',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::FILE_DIRECTORY_LOCALIZED_ATTRIBUTES => [
            'type' => 'Generated\Shared\Transfer\FileDirectoryLocalizedAttributesTransfer',
            'type_shim' => null,
            'name_underscore' => 'file_directory_localized_attributes',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_FILE_DIRECTORY => [
            'type' => 'int',
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
            'type' => 'int',
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
            'type' => 'int',
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
        self::IS_ACTIVE => [
            'type' => 'bool',
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
    ];

    /**
     * @module FileManagerGui|FileManager
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\FileDirectoryLocalizedAttributesTransfer[] $fileDirectoryLocalizedAttributes
     *
     * @return $this
     */
    public function setFileDirectoryLocalizedAttributes(ArrayObject $fileDirectoryLocalizedAttributes)
    {
        $this->fileDirectoryLocalizedAttributes = $fileDirectoryLocalizedAttributes;
        $this->modifiedProperties[self::FILE_DIRECTORY_LOCALIZED_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\FileDirectoryLocalizedAttributesTransfer[]
     */
    public function getFileDirectoryLocalizedAttributes()
    {
        return $this->fileDirectoryLocalizedAttributes;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @param \Generated\Shared\Transfer\FileDirectoryLocalizedAttributesTransfer $fileDirectoryLocalizedAttribute
     *
     * @return $this
     */
    public function addFileDirectoryLocalizedAttribute(FileDirectoryLocalizedAttributesTransfer $fileDirectoryLocalizedAttribute)
    {
        $this->fileDirectoryLocalizedAttributes[] = $fileDirectoryLocalizedAttribute;
        $this->modifiedProperties[self::FILE_DIRECTORY_LOCALIZED_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFileDirectoryLocalizedAttributes()
    {
        $this->assertCollectionPropertyIsSet(self::FILE_DIRECTORY_LOCALIZED_ATTRIBUTES);

        return $this;
    }

    /**
     * @module FileManager
     *
     * @param int|null $idFileDirectory
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
     * @module FileManager
     *
     * @return int|null
     */
    public function getIdFileDirectory()
    {
        return $this->idFileDirectory;
    }

    /**
     * @module FileManager
     *
     * @param int|null $idFileDirectory
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
     * @module FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdFileDirectoryOrFail()
    {
        if ($this->idFileDirectory === null) {
            $this->throwNullValueException(static::ID_FILE_DIRECTORY);
        }

        return $this->idFileDirectory;
    }

    /**
     * @module FileManager
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
     * @module FileManager
     *
     * @param int|null $fkParentFileDirectory
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
     * @module FileManager
     *
     * @return int|null
     */
    public function getFkParentFileDirectory()
    {
        return $this->fkParentFileDirectory;
    }

    /**
     * @module FileManager
     *
     * @param int|null $fkParentFileDirectory
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
     * @module FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkParentFileDirectoryOrFail()
    {
        if ($this->fkParentFileDirectory === null) {
            $this->throwNullValueException(static::FK_PARENT_FILE_DIRECTORY);
        }

        return $this->fkParentFileDirectory;
    }

    /**
     * @module FileManager
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
     * @module FileManager
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
     * @module FileManager
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module FileManager
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
     * @module FileManager
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
     * @module FileManager
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
     * @module FileManager
     *
     * @param int|null $position
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
     * @module FileManager
     *
     * @return int|null
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @module FileManager
     *
     * @param int|null $position
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
     * @module FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getPositionOrFail()
    {
        if ($this->position === null) {
            $this->throwNullValueException(static::POSITION);
        }

        return $this->position;
    }

    /**
     * @module FileManager
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
     * @module FileManager
     *
     * @param bool|null $isActive
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
     * @module FileManager
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module FileManager
     *
     * @param bool|null $isActive
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
     * @module FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsActiveOrFail()
    {
        if ($this->isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->isActive;
    }

    /**
     * @module FileManager
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
                case 'name':
                case 'position':
                case 'isActive':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'fileDirectoryLocalizedAttributes':
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
                case 'idFileDirectory':
                case 'fkParentFileDirectory':
                case 'name':
                case 'position':
                case 'isActive':
                    $values[$arrayKey] = $value;

                    break;
                case 'fileDirectoryLocalizedAttributes':
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
                case 'name':
                case 'position':
                case 'isActive':
                    $values[$arrayKey] = $value;

                    break;
                case 'fileDirectoryLocalizedAttributes':
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
        $this->fileDirectoryLocalizedAttributes = $this->fileDirectoryLocalizedAttributes ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idFileDirectory' => $this->idFileDirectory,
            'fkParentFileDirectory' => $this->fkParentFileDirectory,
            'name' => $this->name,
            'position' => $this->position,
            'isActive' => $this->isActive,
            'fileDirectoryLocalizedAttributes' => $this->fileDirectoryLocalizedAttributes,
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
            'name' => $this->name,
            'position' => $this->position,
            'is_active' => $this->isActive,
            'file_directory_localized_attributes' => $this->fileDirectoryLocalizedAttributes,
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
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'position' => $this->position instanceof AbstractTransfer ? $this->position->toArray(true, false) : $this->position,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'file_directory_localized_attributes' => $this->fileDirectoryLocalizedAttributes instanceof AbstractTransfer ? $this->fileDirectoryLocalizedAttributes->toArray(true, false) : $this->addValuesToCollection($this->fileDirectoryLocalizedAttributes, true, false),
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
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'position' => $this->position instanceof AbstractTransfer ? $this->position->toArray(true, true) : $this->position,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'fileDirectoryLocalizedAttributes' => $this->fileDirectoryLocalizedAttributes instanceof AbstractTransfer ? $this->fileDirectoryLocalizedAttributes->toArray(true, true) : $this->addValuesToCollection($this->fileDirectoryLocalizedAttributes, true, true),
        ];
    }
}
