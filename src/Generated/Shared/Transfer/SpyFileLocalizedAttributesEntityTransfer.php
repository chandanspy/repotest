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
class SpyFileLocalizedAttributesEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_FILE_LOCALIZED_ATTRIBUTES = 'idFileLocalizedAttributes';

    /**
     * @var string
     */
    public const FK_FILE = 'fkFile';

    /**
     * @var string
     */
    public const FK_LOCALE = 'fkLocale';

    /**
     * @var string
     */
    public const ALT = 'alt';

    /**
     * @var string
     */
    public const TITLE = 'title';

    /**
     * @var string
     */
    public const SPY_FILE = 'spyFile';

    /**
     * @var string
     */
    public const LOCALE = 'locale';

    /**
     * @var integer|null
     */
    protected $idFileLocalizedAttributes;

    /**
     * @var integer|null
     */
    protected $fkFile;

    /**
     * @var integer|null
     */
    protected $fkLocale;

    /**
     * @var string|null
     */
    protected $alt;

    /**
     * @var string|null
     */
    protected $title;

    /**
     * @var \Generated\Shared\Transfer\SpyFileEntityTransfer|null
     */
    protected $spyFile;

    /**
     * @var \Generated\Shared\Transfer\SpyLocaleEntityTransfer|null
     */
    protected $locale;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_file_localized_attributes' => 'idFileLocalizedAttributes',
        'idFileLocalizedAttributes' => 'idFileLocalizedAttributes',
        'IdFileLocalizedAttributes' => 'idFileLocalizedAttributes',
        'fk_file' => 'fkFile',
        'fkFile' => 'fkFile',
        'FkFile' => 'fkFile',
        'fk_locale' => 'fkLocale',
        'fkLocale' => 'fkLocale',
        'FkLocale' => 'fkLocale',
        'alt' => 'alt',
        'Alt' => 'alt',
        'title' => 'title',
        'Title' => 'title',
        'spy_file' => 'spyFile',
        'spyFile' => 'spyFile',
        'SpyFile' => 'spyFile',
        'locale' => 'locale',
        'Locale' => 'locale',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_FILE_LOCALIZED_ATTRIBUTES => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_file_localized_attributes',
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
        self::SPY_FILE => [
            'type' => 'Generated\Shared\Transfer\SpyFileEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_file',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LOCALE => [
            'type' => 'Generated\Shared\Transfer\SpyLocaleEntityTransfer',
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
    ];
    /**
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\FileManager\Persistence\SpyFileLocalizedAttributes';


    /**
     * @module 
     *
     * @param integer|null $idFileLocalizedAttributes
     *
     * @return $this
     */
    public function setIdFileLocalizedAttributes($idFileLocalizedAttributes)
    {
        $this->idFileLocalizedAttributes = $idFileLocalizedAttributes;
        $this->modifiedProperties[self::ID_FILE_LOCALIZED_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdFileLocalizedAttributes()
    {
        return $this->idFileLocalizedAttributes;
    }

    /**
     * @module 
     *
     * @param integer|null $idFileLocalizedAttributes
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdFileLocalizedAttributesOrFail($idFileLocalizedAttributes)
    {
        if ($idFileLocalizedAttributes === null) {
            $this->throwNullValueException(static::ID_FILE_LOCALIZED_ATTRIBUTES);
        }

        return $this->setIdFileLocalizedAttributes($idFileLocalizedAttributes);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdFileLocalizedAttributesOrFail()
    {
        if ($this->idFileLocalizedAttributes === null) {
            $this->throwNullValueException(static::ID_FILE_LOCALIZED_ATTRIBUTES);
        }

        return $this->idFileLocalizedAttributes;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdFileLocalizedAttributes()
    {
        $this->assertPropertyIsSet(self::ID_FILE_LOCALIZED_ATTRIBUTES);

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
     * @module 
     *
     * @return string|null
     */
    public function getAlt()
    {
        return $this->alt;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @param \Generated\Shared\Transfer\SpyFileEntityTransfer|null $spyFile
     *
     * @return $this
     */
    public function setSpyFile(SpyFileEntityTransfer $spyFile = null)
    {
        $this->spyFile = $spyFile;
        $this->modifiedProperties[self::SPY_FILE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyFileEntityTransfer|null
     */
    public function getSpyFile()
    {
        return $this->spyFile;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyFileEntityTransfer $spyFile
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyFileOrFail(SpyFileEntityTransfer $spyFile)
    {
        return $this->setSpyFile($spyFile);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyFileEntityTransfer
     */
    public function getSpyFileOrFail()
    {
        if ($this->spyFile === null) {
            $this->throwNullValueException(static::SPY_FILE);
        }

        return $this->spyFile;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyFile()
    {
        $this->assertPropertyIsSet(self::SPY_FILE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyLocaleEntityTransfer|null $locale
     *
     * @return $this
     */
    public function setLocale(SpyLocaleEntityTransfer $locale = null)
    {
        $this->locale = $locale;
        $this->modifiedProperties[self::LOCALE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyLocaleEntityTransfer|null
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyLocaleEntityTransfer $locale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLocaleOrFail(SpyLocaleEntityTransfer $locale)
    {
        return $this->setLocale($locale);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyLocaleEntityTransfer
     */
    public function getLocaleOrFail()
    {
        if ($this->locale === null) {
            $this->throwNullValueException(static::LOCALE);
        }

        return $this->locale;
    }

    /**
     * @module 
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
                case 'idFileLocalizedAttributes':
                case 'fkFile':
                case 'fkLocale':
                case 'alt':
                case 'title':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyFile':
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
                case 'idFileLocalizedAttributes':
                case 'fkFile':
                case 'fkLocale':
                case 'alt':
                case 'title':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyFile':
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
                case 'idFileLocalizedAttributes':
                case 'fkFile':
                case 'fkLocale':
                case 'alt':
                case 'title':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyFile':
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
            'idFileLocalizedAttributes' => $this->idFileLocalizedAttributes,
            'fkFile' => $this->fkFile,
            'fkLocale' => $this->fkLocale,
            'alt' => $this->alt,
            'title' => $this->title,
            'spyFile' => $this->spyFile,
            'locale' => $this->locale,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_file_localized_attributes' => $this->idFileLocalizedAttributes,
            'fk_file' => $this->fkFile,
            'fk_locale' => $this->fkLocale,
            'alt' => $this->alt,
            'title' => $this->title,
            'spy_file' => $this->spyFile,
            'locale' => $this->locale,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_file_localized_attributes' => $this->idFileLocalizedAttributes instanceof AbstractTransfer ? $this->idFileLocalizedAttributes->toArray(true, false) : $this->idFileLocalizedAttributes,
            'fk_file' => $this->fkFile instanceof AbstractTransfer ? $this->fkFile->toArray(true, false) : $this->fkFile,
            'fk_locale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, false) : $this->fkLocale,
            'alt' => $this->alt instanceof AbstractTransfer ? $this->alt->toArray(true, false) : $this->alt,
            'title' => $this->title instanceof AbstractTransfer ? $this->title->toArray(true, false) : $this->title,
            'spy_file' => $this->spyFile instanceof AbstractTransfer ? $this->spyFile->toArray(true, false) : $this->spyFile,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, false) : $this->locale,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idFileLocalizedAttributes' => $this->idFileLocalizedAttributes instanceof AbstractTransfer ? $this->idFileLocalizedAttributes->toArray(true, true) : $this->idFileLocalizedAttributes,
            'fkFile' => $this->fkFile instanceof AbstractTransfer ? $this->fkFile->toArray(true, true) : $this->fkFile,
            'fkLocale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, true) : $this->fkLocale,
            'alt' => $this->alt instanceof AbstractTransfer ? $this->alt->toArray(true, true) : $this->alt,
            'title' => $this->title instanceof AbstractTransfer ? $this->title->toArray(true, true) : $this->title,
            'spyFile' => $this->spyFile instanceof AbstractTransfer ? $this->spyFile->toArray(true, true) : $this->spyFile,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, true) : $this->locale,
        ];
    }
}
