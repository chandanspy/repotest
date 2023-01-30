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
class FileDirectoryLocalizedAttributesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const LOCALE = 'locale';

    /**
     * @var string
     */
    public const FK_LOCALE = 'fkLocale';

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
    public const TITLE = 'title';

    /**
     * @var \Generated\Shared\Transfer\LocaleTransfer|null
     */
    protected $locale;

    /**
     * @var int|null
     */
    protected $fkLocale;

    /**
     * @var int|null
     */
    protected $idFileDirectoryLocalizedAttributes;

    /**
     * @var int|null
     */
    protected $fkFileDirectory;

    /**
     * @var string|null
     */
    protected $title;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'locale' => 'locale',
        'Locale' => 'locale',
        'fk_locale' => 'fkLocale',
        'fkLocale' => 'fkLocale',
        'FkLocale' => 'fkLocale',
        'id_file_directory_localized_attributes' => 'idFileDirectoryLocalizedAttributes',
        'idFileDirectoryLocalizedAttributes' => 'idFileDirectoryLocalizedAttributes',
        'IdFileDirectoryLocalizedAttributes' => 'idFileDirectoryLocalizedAttributes',
        'fk_file_directory' => 'fkFileDirectory',
        'fkFileDirectory' => 'fkFileDirectory',
        'FkFileDirectory' => 'fkFileDirectory',
        'title' => 'title',
        'Title' => 'title',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::LOCALE => [
            'type' => 'Generated\Shared\Transfer\LocaleTransfer',
            'type_shim' => null,
            'name_underscore' => 'locale',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_LOCALE => [
            'type' => 'int',
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
        self::ID_FILE_DIRECTORY_LOCALIZED_ATTRIBUTES => [
            'type' => 'int',
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
    ];

    /**
     * @module FileManagerGui|FileManager
     *
     * @param \Generated\Shared\Transfer\LocaleTransfer|null $locale
     *
     * @return $this
     */
    public function setLocale(LocaleTransfer $locale = null)
    {
        $this->locale = $locale;
        $this->modifiedProperties[self::LOCALE] = true;

        return $this;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @return \Generated\Shared\Transfer\LocaleTransfer|null
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @param \Generated\Shared\Transfer\LocaleTransfer $locale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLocaleOrFail(LocaleTransfer $locale)
    {
        return $this->setLocale($locale);
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\LocaleTransfer
     */
    public function getLocaleOrFail()
    {
        if ($this->locale === null) {
            $this->throwNullValueException(static::LOCALE);
        }

        return $this->locale;
    }

    /**
     * @module FileManagerGui|FileManager
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
     * @module FileManagerGui|FileManager
     *
     * @param int|null $fkLocale
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
     * @module FileManagerGui|FileManager
     *
     * @return int|null
     */
    public function getFkLocale()
    {
        return $this->fkLocale;
    }

    /**
     * @module FileManagerGui|FileManager
     *
     * @param int|null $fkLocale
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
     * @module FileManagerGui|FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkLocaleOrFail()
    {
        if ($this->fkLocale === null) {
            $this->throwNullValueException(static::FK_LOCALE);
        }

        return $this->fkLocale;
    }

    /**
     * @module FileManagerGui|FileManager
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
     * @module FileManager
     *
     * @param int|null $idFileDirectoryLocalizedAttributes
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
     * @module FileManager
     *
     * @return int|null
     */
    public function getIdFileDirectoryLocalizedAttributes()
    {
        return $this->idFileDirectoryLocalizedAttributes;
    }

    /**
     * @module FileManager
     *
     * @param int|null $idFileDirectoryLocalizedAttributes
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
     * @module FileManager
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdFileDirectoryLocalizedAttributesOrFail()
    {
        if ($this->idFileDirectoryLocalizedAttributes === null) {
            $this->throwNullValueException(static::ID_FILE_DIRECTORY_LOCALIZED_ATTRIBUTES);
        }

        return $this->idFileDirectoryLocalizedAttributes;
    }

    /**
     * @module FileManager
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
     * @module FileManager
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
     * @module FileManager
     *
     * @return int|null
     */
    public function getFkFileDirectory()
    {
        return $this->fkFileDirectory;
    }

    /**
     * @module FileManager
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
     * @module FileManager
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
     * @module FileManager
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
     * @module FileManager
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
     * @module FileManager
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @module FileManager
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
     * @module FileManager
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
     * @module FileManager
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
                case 'fkLocale':
                case 'idFileDirectoryLocalizedAttributes':
                case 'fkFileDirectory':
                case 'title':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'locale':
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
                case 'fkLocale':
                case 'idFileDirectoryLocalizedAttributes':
                case 'fkFileDirectory':
                case 'title':
                    $values[$arrayKey] = $value;

                    break;
                case 'locale':
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
                case 'fkLocale':
                case 'idFileDirectoryLocalizedAttributes':
                case 'fkFileDirectory':
                case 'title':
                    $values[$arrayKey] = $value;

                    break;
                case 'locale':
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
            'fkLocale' => $this->fkLocale,
            'idFileDirectoryLocalizedAttributes' => $this->idFileDirectoryLocalizedAttributes,
            'fkFileDirectory' => $this->fkFileDirectory,
            'title' => $this->title,
            'locale' => $this->locale,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'fk_locale' => $this->fkLocale,
            'id_file_directory_localized_attributes' => $this->idFileDirectoryLocalizedAttributes,
            'fk_file_directory' => $this->fkFileDirectory,
            'title' => $this->title,
            'locale' => $this->locale,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'fk_locale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, false) : $this->fkLocale,
            'id_file_directory_localized_attributes' => $this->idFileDirectoryLocalizedAttributes instanceof AbstractTransfer ? $this->idFileDirectoryLocalizedAttributes->toArray(true, false) : $this->idFileDirectoryLocalizedAttributes,
            'fk_file_directory' => $this->fkFileDirectory instanceof AbstractTransfer ? $this->fkFileDirectory->toArray(true, false) : $this->fkFileDirectory,
            'title' => $this->title instanceof AbstractTransfer ? $this->title->toArray(true, false) : $this->title,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, false) : $this->locale,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'fkLocale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, true) : $this->fkLocale,
            'idFileDirectoryLocalizedAttributes' => $this->idFileDirectoryLocalizedAttributes instanceof AbstractTransfer ? $this->idFileDirectoryLocalizedAttributes->toArray(true, true) : $this->idFileDirectoryLocalizedAttributes,
            'fkFileDirectory' => $this->fkFileDirectory instanceof AbstractTransfer ? $this->fkFileDirectory->toArray(true, true) : $this->fkFileDirectory,
            'title' => $this->title instanceof AbstractTransfer ? $this->title->toArray(true, true) : $this->title,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, true) : $this->locale,
        ];
    }
}
