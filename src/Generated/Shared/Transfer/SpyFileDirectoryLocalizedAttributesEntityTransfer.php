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
class SpyFileDirectoryLocalizedAttributesEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_FILE_DIRECTORY_LOCALIZED_ATTRIBUTES = 'idFileDirectoryLocalizedAttributes';

    /**
     * @var string
     */
    public const FK_FILE_DIRECTORY = 'fkFileDirectory';

    /**
     * @var string
     */
    public const FK_LOCALE = 'fkLocale';

    /**
     * @var string
     */
    public const TITLE = 'title';

    /**
     * @var string
     */
    public const SPY_FILE_DIRECTORY = 'spyFileDirectory';

    /**
     * @var string
     */
    public const SPY_LOCALE = 'spyLocale';

    /**
     * @var integer|null
     */
    protected $idFileDirectoryLocalizedAttributes;

    /**
     * @var integer|null
     */
    protected $fkFileDirectory;

    /**
     * @var integer|null
     */
    protected $fkLocale;

    /**
     * @var string|null
     */
    protected $title;

    /**
     * @var \Generated\Shared\Transfer\SpyFileDirectoryEntityTransfer|null
     */
    protected $spyFileDirectory;

    /**
     * @var \Generated\Shared\Transfer\SpyLocaleEntityTransfer|null
     */
    protected $spyLocale;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_file_directory_localized_attributes' => 'idFileDirectoryLocalizedAttributes',
        'idFileDirectoryLocalizedAttributes' => 'idFileDirectoryLocalizedAttributes',
        'IdFileDirectoryLocalizedAttributes' => 'idFileDirectoryLocalizedAttributes',
        'fk_file_directory' => 'fkFileDirectory',
        'fkFileDirectory' => 'fkFileDirectory',
        'FkFileDirectory' => 'fkFileDirectory',
        'fk_locale' => 'fkLocale',
        'fkLocale' => 'fkLocale',
        'FkLocale' => 'fkLocale',
        'title' => 'title',
        'Title' => 'title',
        'spy_file_directory' => 'spyFileDirectory',
        'spyFileDirectory' => 'spyFileDirectory',
        'SpyFileDirectory' => 'spyFileDirectory',
        'spy_locale' => 'spyLocale',
        'spyLocale' => 'spyLocale',
        'SpyLocale' => 'spyLocale',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_FILE_DIRECTORY_LOCALIZED_ATTRIBUTES => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_file_directory_localized_attributes',
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
        self::FK_LOCALE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_locale',
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
        self::SPY_FILE_DIRECTORY => [
            'type' => 'Generated\Shared\Transfer\SpyFileDirectoryEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_file_directory',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_LOCALE => [
            'type' => 'Generated\Shared\Transfer\SpyLocaleEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_locale',
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
    public static $entityNamespace = 'Orm\Zed\FileManager\Persistence\SpyFileDirectoryLocalizedAttributes';


    /**
     * @module 
     *
     * @param integer|null $idFileDirectoryLocalizedAttributes
     *
     * @return $this
     */
    public function setIdFileDirectoryLocalizedAttributes($idFileDirectoryLocalizedAttributes)
    {
        $this->idFileDirectoryLocalizedAttributes = $idFileDirectoryLocalizedAttributes;
        $this->modifiedProperties[self::ID_FILE_DIRECTORY_LOCALIZED_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdFileDirectoryLocalizedAttributes()
    {
        return $this->idFileDirectoryLocalizedAttributes;
    }

    /**
     * @module 
     *
     * @param integer|null $idFileDirectoryLocalizedAttributes
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdFileDirectoryLocalizedAttributesOrFail($idFileDirectoryLocalizedAttributes)
    {
        if ($idFileDirectoryLocalizedAttributes === null) {
            $this->throwNullValueException(static::ID_FILE_DIRECTORY_LOCALIZED_ATTRIBUTES);
        }

        return $this->setIdFileDirectoryLocalizedAttributes($idFileDirectoryLocalizedAttributes);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdFileDirectoryLocalizedAttributesOrFail()
    {
        if ($this->idFileDirectoryLocalizedAttributes === null) {
            $this->throwNullValueException(static::ID_FILE_DIRECTORY_LOCALIZED_ATTRIBUTES);
        }

        return $this->idFileDirectoryLocalizedAttributes;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdFileDirectoryLocalizedAttributes()
    {
        $this->assertPropertyIsSet(self::ID_FILE_DIRECTORY_LOCALIZED_ATTRIBUTES);

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
     * @param integer|null $fkLocale
     *
     * @return $this
     */
    public function setFkLocale($fkLocale)
    {
        $this->fkLocale = $fkLocale;
        $this->modifiedProperties[self::FK_LOCALE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkLocale()
    {
        return $this->fkLocale;
    }

    /**
     * @module 
     *
     * @param integer|null $fkLocale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkLocaleOrFail($fkLocale)
    {
        if ($fkLocale === null) {
            $this->throwNullValueException(static::FK_LOCALE);
        }

        return $this->setFkLocale($fkLocale);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkLocaleOrFail()
    {
        if ($this->fkLocale === null) {
            $this->throwNullValueException(static::FK_LOCALE);
        }

        return $this->fkLocale;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkLocale()
    {
        $this->assertPropertyIsSet(self::FK_LOCALE);

        return $this;
    }

    /**
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyFileDirectoryEntityTransfer|null $spyFileDirectory
     *
     * @return $this
     */
    public function setSpyFileDirectory(SpyFileDirectoryEntityTransfer $spyFileDirectory = null)
    {
        $this->spyFileDirectory = $spyFileDirectory;
        $this->modifiedProperties[self::SPY_FILE_DIRECTORY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyFileDirectoryEntityTransfer|null
     */
    public function getSpyFileDirectory()
    {
        return $this->spyFileDirectory;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyFileDirectoryEntityTransfer $spyFileDirectory
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyFileDirectoryOrFail(SpyFileDirectoryEntityTransfer $spyFileDirectory)
    {
        return $this->setSpyFileDirectory($spyFileDirectory);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyFileDirectoryEntityTransfer
     */
    public function getSpyFileDirectoryOrFail()
    {
        if ($this->spyFileDirectory === null) {
            $this->throwNullValueException(static::SPY_FILE_DIRECTORY);
        }

        return $this->spyFileDirectory;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyFileDirectory()
    {
        $this->assertPropertyIsSet(self::SPY_FILE_DIRECTORY);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyLocaleEntityTransfer|null $spyLocale
     *
     * @return $this
     */
    public function setSpyLocale(SpyLocaleEntityTransfer $spyLocale = null)
    {
        $this->spyLocale = $spyLocale;
        $this->modifiedProperties[self::SPY_LOCALE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyLocaleEntityTransfer|null
     */
    public function getSpyLocale()
    {
        return $this->spyLocale;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyLocaleEntityTransfer $spyLocale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyLocaleOrFail(SpyLocaleEntityTransfer $spyLocale)
    {
        return $this->setSpyLocale($spyLocale);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyLocaleEntityTransfer
     */
    public function getSpyLocaleOrFail()
    {
        if ($this->spyLocale === null) {
            $this->throwNullValueException(static::SPY_LOCALE);
        }

        return $this->spyLocale;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyLocale()
    {
        $this->assertPropertyIsSet(self::SPY_LOCALE);

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
                case 'idFileDirectoryLocalizedAttributes':
                case 'fkFileDirectory':
                case 'fkLocale':
                case 'title':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyFileDirectory':
                case 'spyLocale':
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
                case 'idFileDirectoryLocalizedAttributes':
                case 'fkFileDirectory':
                case 'fkLocale':
                case 'title':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyFileDirectory':
                case 'spyLocale':
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
                case 'idFileDirectoryLocalizedAttributes':
                case 'fkFileDirectory':
                case 'fkLocale':
                case 'title':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyFileDirectory':
                case 'spyLocale':
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
            'idFileDirectoryLocalizedAttributes' => $this->idFileDirectoryLocalizedAttributes,
            'fkFileDirectory' => $this->fkFileDirectory,
            'fkLocale' => $this->fkLocale,
            'title' => $this->title,
            'spyFileDirectory' => $this->spyFileDirectory,
            'spyLocale' => $this->spyLocale,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_file_directory_localized_attributes' => $this->idFileDirectoryLocalizedAttributes,
            'fk_file_directory' => $this->fkFileDirectory,
            'fk_locale' => $this->fkLocale,
            'title' => $this->title,
            'spy_file_directory' => $this->spyFileDirectory,
            'spy_locale' => $this->spyLocale,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_file_directory_localized_attributes' => $this->idFileDirectoryLocalizedAttributes instanceof AbstractTransfer ? $this->idFileDirectoryLocalizedAttributes->toArray(true, false) : $this->idFileDirectoryLocalizedAttributes,
            'fk_file_directory' => $this->fkFileDirectory instanceof AbstractTransfer ? $this->fkFileDirectory->toArray(true, false) : $this->fkFileDirectory,
            'fk_locale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, false) : $this->fkLocale,
            'title' => $this->title instanceof AbstractTransfer ? $this->title->toArray(true, false) : $this->title,
            'spy_file_directory' => $this->spyFileDirectory instanceof AbstractTransfer ? $this->spyFileDirectory->toArray(true, false) : $this->spyFileDirectory,
            'spy_locale' => $this->spyLocale instanceof AbstractTransfer ? $this->spyLocale->toArray(true, false) : $this->spyLocale,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idFileDirectoryLocalizedAttributes' => $this->idFileDirectoryLocalizedAttributes instanceof AbstractTransfer ? $this->idFileDirectoryLocalizedAttributes->toArray(true, true) : $this->idFileDirectoryLocalizedAttributes,
            'fkFileDirectory' => $this->fkFileDirectory instanceof AbstractTransfer ? $this->fkFileDirectory->toArray(true, true) : $this->fkFileDirectory,
            'fkLocale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, true) : $this->fkLocale,
            'title' => $this->title instanceof AbstractTransfer ? $this->title->toArray(true, true) : $this->title,
            'spyFileDirectory' => $this->spyFileDirectory instanceof AbstractTransfer ? $this->spyFileDirectory->toArray(true, true) : $this->spyFileDirectory,
            'spyLocale' => $this->spyLocale instanceof AbstractTransfer ? $this->spyLocale->toArray(true, true) : $this->spyLocale,
        ];
    }
}
