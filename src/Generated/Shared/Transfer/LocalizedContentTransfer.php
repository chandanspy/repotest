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
class LocalizedContentTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const FK_LOCALE = 'fkLocale';

    /**
     * @var string
     */
    public const PARAMETERS = 'parameters';

    /**
     * @var string
     */
    public const ID_CONTENT_LOCALIZED = 'idContentLocalized';

    /**
     * @var string
     */
    public const LOCALE_NAME = 'localeName';

    /**
     * @var string
     */
    public const FK_CONTENT = 'fkContent';

    /**
     * @var int|null
     */
    protected $fkLocale;

    /**
     * @var string|null
     */
    protected $parameters;

    /**
     * @var int|null
     */
    protected $idContentLocalized;

    /**
     * @var string|null
     */
    protected $localeName;

    /**
     * @var int|null
     */
    protected $fkContent;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'fk_locale' => 'fkLocale',
        'fkLocale' => 'fkLocale',
        'FkLocale' => 'fkLocale',
        'parameters' => 'parameters',
        'Parameters' => 'parameters',
        'id_content_localized' => 'idContentLocalized',
        'idContentLocalized' => 'idContentLocalized',
        'IdContentLocalized' => 'idContentLocalized',
        'locale_name' => 'localeName',
        'localeName' => 'localeName',
        'LocaleName' => 'localeName',
        'fk_content' => 'fkContent',
        'fkContent' => 'fkContent',
        'FkContent' => 'fkContent',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::PARAMETERS => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'parameters',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_CONTENT_LOCALIZED => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_content_localized',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LOCALE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'locale_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_CONTENT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_content',
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
     * @module ContentBannerGui|ContentFileGui|ContentGui|ContentNavigationGui|ContentProductGui|ContentProductSetGui|ContentStorage|Content
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
     * @module ContentBannerGui|ContentFileGui|ContentGui|ContentNavigationGui|ContentProductGui|ContentProductSetGui|ContentStorage|Content
     *
     * @return int|null
     */
    public function getFkLocale()
    {
        return $this->fkLocale;
    }

    /**
     * @module ContentBannerGui|ContentFileGui|ContentGui|ContentNavigationGui|ContentProductGui|ContentProductSetGui|ContentStorage|Content
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
     * @module ContentBannerGui|ContentFileGui|ContentGui|ContentNavigationGui|ContentProductGui|ContentProductSetGui|ContentStorage|Content
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
     * @module ContentBannerGui|ContentFileGui|ContentGui|ContentNavigationGui|ContentProductGui|ContentProductSetGui|ContentStorage|Content
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
     * @module ContentBannerGui|ContentGui|ContentStorage|Content
     *
     * @param string|null $parameters
     *
     * @return $this
     */
    public function setParameters($parameters)
    {
        $this->parameters = $parameters;
        $this->modifiedProperties[self::PARAMETERS] = true;

        return $this;
    }

    /**
     * @module ContentBannerGui|ContentGui|ContentStorage|Content
     *
     * @return string|null
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @module ContentBannerGui|ContentGui|ContentStorage|Content
     *
     * @param string|null $parameters
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setParametersOrFail($parameters)
    {
        if ($parameters === null) {
            $this->throwNullValueException(static::PARAMETERS);
        }

        return $this->setParameters($parameters);
    }

    /**
     * @module ContentBannerGui|ContentGui|ContentStorage|Content
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getParametersOrFail()
    {
        if ($this->parameters === null) {
            $this->throwNullValueException(static::PARAMETERS);
        }

        return $this->parameters;
    }

    /**
     * @module ContentBannerGui|ContentGui|ContentStorage|Content
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireParameters()
    {
        $this->assertPropertyIsSet(self::PARAMETERS);

        return $this;
    }

    /**
     * @module ContentGui|ContentStorage|Content
     *
     * @param int|null $idContentLocalized
     *
     * @return $this
     */
    public function setIdContentLocalized($idContentLocalized)
    {
        $this->idContentLocalized = $idContentLocalized;
        $this->modifiedProperties[self::ID_CONTENT_LOCALIZED] = true;

        return $this;
    }

    /**
     * @module ContentGui|ContentStorage|Content
     *
     * @return int|null
     */
    public function getIdContentLocalized()
    {
        return $this->idContentLocalized;
    }

    /**
     * @module ContentGui|ContentStorage|Content
     *
     * @param int|null $idContentLocalized
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdContentLocalizedOrFail($idContentLocalized)
    {
        if ($idContentLocalized === null) {
            $this->throwNullValueException(static::ID_CONTENT_LOCALIZED);
        }

        return $this->setIdContentLocalized($idContentLocalized);
    }

    /**
     * @module ContentGui|ContentStorage|Content
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdContentLocalizedOrFail()
    {
        if ($this->idContentLocalized === null) {
            $this->throwNullValueException(static::ID_CONTENT_LOCALIZED);
        }

        return $this->idContentLocalized;
    }

    /**
     * @module ContentGui|ContentStorage|Content
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdContentLocalized()
    {
        $this->assertPropertyIsSet(self::ID_CONTENT_LOCALIZED);

        return $this;
    }

    /**
     * @module ContentGui|ContentStorage|Content
     *
     * @param string|null $localeName
     *
     * @return $this
     */
    public function setLocaleName($localeName)
    {
        $this->localeName = $localeName;
        $this->modifiedProperties[self::LOCALE_NAME] = true;

        return $this;
    }

    /**
     * @module ContentGui|ContentStorage|Content
     *
     * @return string|null
     */
    public function getLocaleName()
    {
        return $this->localeName;
    }

    /**
     * @module ContentGui|ContentStorage|Content
     *
     * @param string|null $localeName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLocaleNameOrFail($localeName)
    {
        if ($localeName === null) {
            $this->throwNullValueException(static::LOCALE_NAME);
        }

        return $this->setLocaleName($localeName);
    }

    /**
     * @module ContentGui|ContentStorage|Content
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getLocaleNameOrFail()
    {
        if ($this->localeName === null) {
            $this->throwNullValueException(static::LOCALE_NAME);
        }

        return $this->localeName;
    }

    /**
     * @module ContentGui|ContentStorage|Content
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocaleName()
    {
        $this->assertPropertyIsSet(self::LOCALE_NAME);

        return $this;
    }

    /**
     * @module ContentGui|ContentStorage|Content
     *
     * @param int|null $fkContent
     *
     * @return $this
     */
    public function setFkContent($fkContent)
    {
        $this->fkContent = $fkContent;
        $this->modifiedProperties[self::FK_CONTENT] = true;

        return $this;
    }

    /**
     * @module ContentGui|ContentStorage|Content
     *
     * @return int|null
     */
    public function getFkContent()
    {
        return $this->fkContent;
    }

    /**
     * @module ContentGui|ContentStorage|Content
     *
     * @param int|null $fkContent
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkContentOrFail($fkContent)
    {
        if ($fkContent === null) {
            $this->throwNullValueException(static::FK_CONTENT);
        }

        return $this->setFkContent($fkContent);
    }

    /**
     * @module ContentGui|ContentStorage|Content
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkContentOrFail()
    {
        if ($this->fkContent === null) {
            $this->throwNullValueException(static::FK_CONTENT);
        }

        return $this->fkContent;
    }

    /**
     * @module ContentGui|ContentStorage|Content
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkContent()
    {
        $this->assertPropertyIsSet(self::FK_CONTENT);

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
                case 'parameters':
                case 'idContentLocalized':
                case 'localeName':
                case 'fkContent':
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
                case 'parameters':
                case 'idContentLocalized':
                case 'localeName':
                case 'fkContent':
                    $values[$arrayKey] = $value;

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
                case 'parameters':
                case 'idContentLocalized':
                case 'localeName':
                case 'fkContent':
                    $values[$arrayKey] = $value;

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
            'parameters' => $this->parameters,
            'idContentLocalized' => $this->idContentLocalized,
            'localeName' => $this->localeName,
            'fkContent' => $this->fkContent,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'fk_locale' => $this->fkLocale,
            'parameters' => $this->parameters,
            'id_content_localized' => $this->idContentLocalized,
            'locale_name' => $this->localeName,
            'fk_content' => $this->fkContent,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'fk_locale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, false) : $this->fkLocale,
            'parameters' => $this->parameters instanceof AbstractTransfer ? $this->parameters->toArray(true, false) : $this->parameters,
            'id_content_localized' => $this->idContentLocalized instanceof AbstractTransfer ? $this->idContentLocalized->toArray(true, false) : $this->idContentLocalized,
            'locale_name' => $this->localeName instanceof AbstractTransfer ? $this->localeName->toArray(true, false) : $this->localeName,
            'fk_content' => $this->fkContent instanceof AbstractTransfer ? $this->fkContent->toArray(true, false) : $this->fkContent,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'fkLocale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, true) : $this->fkLocale,
            'parameters' => $this->parameters instanceof AbstractTransfer ? $this->parameters->toArray(true, true) : $this->parameters,
            'idContentLocalized' => $this->idContentLocalized instanceof AbstractTransfer ? $this->idContentLocalized->toArray(true, true) : $this->idContentLocalized,
            'localeName' => $this->localeName instanceof AbstractTransfer ? $this->localeName->toArray(true, true) : $this->localeName,
            'fkContent' => $this->fkContent instanceof AbstractTransfer ? $this->fkContent->toArray(true, true) : $this->fkContent,
        ];
    }
}
