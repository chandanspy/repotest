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
class ConfigurableBundleTemplatePageSearchTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const FK_CONFIGURABLE_BUNDLE_TEMPLATE = 'fkConfigurableBundleTemplate';

    /**
     * @var string
     */
    public const IMAGES = 'images';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const ID_CONFIGURABLE_BUNDLE_TEMPLATE_PAGE_SEARCH = 'idConfigurableBundleTemplatePageSearch';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const LOCALE = 'locale';

    /**
     * @var string
     */
    public const TYPE = 'type';

    /**
     * @var string
     */
    public const KEY = 'key';

    /**
     * @var string
     */
    public const DATA = 'data';

    /**
     * @var string
     */
    public const STRUCTURED_DATA = 'structuredData';

    /**
     * @var int|null
     */
    protected $fkConfigurableBundleTemplate;

    /**
     * @var array
     */
    protected $images = [];

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $idConfigurableBundleTemplatePageSearch;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var string|null
     */
    protected $locale;

    /**
     * @var string|null
     */
    protected $type;

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var string|null
     */
    protected $data;

    /**
     * @var string|null
     */
    protected $structuredData;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'fk_configurable_bundle_template' => 'fkConfigurableBundleTemplate',
        'fkConfigurableBundleTemplate' => 'fkConfigurableBundleTemplate',
        'FkConfigurableBundleTemplate' => 'fkConfigurableBundleTemplate',
        'images' => 'images',
        'Images' => 'images',
        'name' => 'name',
        'Name' => 'name',
        'id_configurable_bundle_template_page_search' => 'idConfigurableBundleTemplatePageSearch',
        'idConfigurableBundleTemplatePageSearch' => 'idConfigurableBundleTemplatePageSearch',
        'IdConfigurableBundleTemplatePageSearch' => 'idConfigurableBundleTemplatePageSearch',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'locale' => 'locale',
        'Locale' => 'locale',
        'type' => 'type',
        'Type' => 'type',
        'key' => 'key',
        'Key' => 'key',
        'data' => 'data',
        'Data' => 'data',
        'structured_data' => 'structuredData',
        'structuredData' => 'structuredData',
        'StructuredData' => 'structuredData',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::FK_CONFIGURABLE_BUNDLE_TEMPLATE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_configurable_bundle_template',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IMAGES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'images',
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
        self::ID_CONFIGURABLE_BUNDLE_TEMPLATE_PAGE_SEARCH => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'id_configurable_bundle_template_page_search',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::UUID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'uuid',
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
        self::KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DATA => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'data',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STRUCTURED_DATA => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'structured_data',
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
     * @module ConfigurableBundlePage|ConfigurableBundlePageSearch|ConfigurableBundlesRestApi
     *
     * @param int|null $fkConfigurableBundleTemplate
     *
     * @return $this
     */
    public function setFkConfigurableBundleTemplate($fkConfigurableBundleTemplate)
    {
        $this->fkConfigurableBundleTemplate = $fkConfigurableBundleTemplate;
        $this->modifiedProperties[self::FK_CONFIGURABLE_BUNDLE_TEMPLATE] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundlePageSearch|ConfigurableBundlesRestApi
     *
     * @return int|null
     */
    public function getFkConfigurableBundleTemplate()
    {
        return $this->fkConfigurableBundleTemplate;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundlePageSearch|ConfigurableBundlesRestApi
     *
     * @param int|null $fkConfigurableBundleTemplate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkConfigurableBundleTemplateOrFail($fkConfigurableBundleTemplate)
    {
        if ($fkConfigurableBundleTemplate === null) {
            $this->throwNullValueException(static::FK_CONFIGURABLE_BUNDLE_TEMPLATE);
        }

        return $this->setFkConfigurableBundleTemplate($fkConfigurableBundleTemplate);
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundlePageSearch|ConfigurableBundlesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkConfigurableBundleTemplateOrFail()
    {
        if ($this->fkConfigurableBundleTemplate === null) {
            $this->throwNullValueException(static::FK_CONFIGURABLE_BUNDLE_TEMPLATE);
        }

        return $this->fkConfigurableBundleTemplate;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundlePageSearch|ConfigurableBundlesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkConfigurableBundleTemplate()
    {
        $this->assertPropertyIsSet(self::FK_CONFIGURABLE_BUNDLE_TEMPLATE);

        return $this;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundlePageSearch
     *
     * @param array|null $images
     *
     * @return $this
     */
    public function setImages(array $images = null)
    {
        if ($images === null) {
            $images = [];
        }

        $this->images = $images;
        $this->modifiedProperties[self::IMAGES] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundlePageSearch
     *
     * @return array
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundlePageSearch
     *
     * @param mixed $image
     *
     * @return $this
     */
    public function addImage($image)
    {
        $this->images[] = $image;
        $this->modifiedProperties[self::IMAGES] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundlePageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireImages()
    {
        $this->assertPropertyIsSet(self::IMAGES);

        return $this;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundlePageSearch
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
     * @module ConfigurableBundlePage|ConfigurableBundlePageSearch
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundlePageSearch
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
     * @module ConfigurableBundlePage|ConfigurableBundlePageSearch
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
     * @module ConfigurableBundlePage|ConfigurableBundlePageSearch
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
     * @module ConfigurableBundlePageSearch
     *
     * @param string|null $idConfigurableBundleTemplatePageSearch
     *
     * @return $this
     */
    public function setIdConfigurableBundleTemplatePageSearch($idConfigurableBundleTemplatePageSearch)
    {
        $this->idConfigurableBundleTemplatePageSearch = $idConfigurableBundleTemplatePageSearch;
        $this->modifiedProperties[self::ID_CONFIGURABLE_BUNDLE_TEMPLATE_PAGE_SEARCH] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlePageSearch
     *
     * @return string|null
     */
    public function getIdConfigurableBundleTemplatePageSearch()
    {
        return $this->idConfigurableBundleTemplatePageSearch;
    }

    /**
     * @module ConfigurableBundlePageSearch
     *
     * @param string|null $idConfigurableBundleTemplatePageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdConfigurableBundleTemplatePageSearchOrFail($idConfigurableBundleTemplatePageSearch)
    {
        if ($idConfigurableBundleTemplatePageSearch === null) {
            $this->throwNullValueException(static::ID_CONFIGURABLE_BUNDLE_TEMPLATE_PAGE_SEARCH);
        }

        return $this->setIdConfigurableBundleTemplatePageSearch($idConfigurableBundleTemplatePageSearch);
    }

    /**
     * @module ConfigurableBundlePageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIdConfigurableBundleTemplatePageSearchOrFail()
    {
        if ($this->idConfigurableBundleTemplatePageSearch === null) {
            $this->throwNullValueException(static::ID_CONFIGURABLE_BUNDLE_TEMPLATE_PAGE_SEARCH);
        }

        return $this->idConfigurableBundleTemplatePageSearch;
    }

    /**
     * @module ConfigurableBundlePageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdConfigurableBundleTemplatePageSearch()
    {
        $this->assertPropertyIsSet(self::ID_CONFIGURABLE_BUNDLE_TEMPLATE_PAGE_SEARCH);

        return $this;
    }

    /**
     * @module ConfigurableBundlePageSearch
     *
     * @param string|null $uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        $this->modifiedProperties[self::UUID] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlePageSearch
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @module ConfigurableBundlePageSearch
     *
     * @param string|null $uuid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUuidOrFail($uuid)
    {
        if ($uuid === null) {
            $this->throwNullValueException(static::UUID);
        }

        return $this->setUuid($uuid);
    }

    /**
     * @module ConfigurableBundlePageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUuidOrFail()
    {
        if ($this->uuid === null) {
            $this->throwNullValueException(static::UUID);
        }

        return $this->uuid;
    }

    /**
     * @module ConfigurableBundlePageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUuid()
    {
        $this->assertPropertyIsSet(self::UUID);

        return $this;
    }

    /**
     * @module ConfigurableBundlePageSearch
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
     * @module ConfigurableBundlePageSearch
     *
     * @return string|null
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @module ConfigurableBundlePageSearch
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
     * @module ConfigurableBundlePageSearch
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
     * @module ConfigurableBundlePageSearch
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
     * @module ConfigurableBundlePageSearch
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
     * @module ConfigurableBundlePageSearch
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @module ConfigurableBundlePageSearch
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
     * @module ConfigurableBundlePageSearch
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
     * @module ConfigurableBundlePageSearch
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
     * @module ConfigurableBundlePageSearch
     *
     * @param string|null $key
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->key = $key;
        $this->modifiedProperties[self::KEY] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlePageSearch
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @module ConfigurableBundlePageSearch
     *
     * @param string|null $key
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setKeyOrFail($key)
    {
        if ($key === null) {
            $this->throwNullValueException(static::KEY);
        }

        return $this->setKey($key);
    }

    /**
     * @module ConfigurableBundlePageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getKeyOrFail()
    {
        if ($this->key === null) {
            $this->throwNullValueException(static::KEY);
        }

        return $this->key;
    }

    /**
     * @module ConfigurableBundlePageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireKey()
    {
        $this->assertPropertyIsSet(self::KEY);

        return $this;
    }

    /**
     * @module ConfigurableBundlePageSearch
     *
     * @param string|null $data
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;
        $this->modifiedProperties[self::DATA] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlePageSearch
     *
     * @return string|null
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @module ConfigurableBundlePageSearch
     *
     * @param string|null $data
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDataOrFail($data)
    {
        if ($data === null) {
            $this->throwNullValueException(static::DATA);
        }

        return $this->setData($data);
    }

    /**
     * @module ConfigurableBundlePageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDataOrFail()
    {
        if ($this->data === null) {
            $this->throwNullValueException(static::DATA);
        }

        return $this->data;
    }

    /**
     * @module ConfigurableBundlePageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireData()
    {
        $this->assertPropertyIsSet(self::DATA);

        return $this;
    }

    /**
     * @module ConfigurableBundlePageSearch
     *
     * @param string|null $structuredData
     *
     * @return $this
     */
    public function setStructuredData($structuredData)
    {
        $this->structuredData = $structuredData;
        $this->modifiedProperties[self::STRUCTURED_DATA] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlePageSearch
     *
     * @return string|null
     */
    public function getStructuredData()
    {
        return $this->structuredData;
    }

    /**
     * @module ConfigurableBundlePageSearch
     *
     * @param string|null $structuredData
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStructuredDataOrFail($structuredData)
    {
        if ($structuredData === null) {
            $this->throwNullValueException(static::STRUCTURED_DATA);
        }

        return $this->setStructuredData($structuredData);
    }

    /**
     * @module ConfigurableBundlePageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStructuredDataOrFail()
    {
        if ($this->structuredData === null) {
            $this->throwNullValueException(static::STRUCTURED_DATA);
        }

        return $this->structuredData;
    }

    /**
     * @module ConfigurableBundlePageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStructuredData()
    {
        $this->assertPropertyIsSet(self::STRUCTURED_DATA);

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
                case 'fkConfigurableBundleTemplate':
                case 'images':
                case 'name':
                case 'idConfigurableBundleTemplatePageSearch':
                case 'uuid':
                case 'locale':
                case 'type':
                case 'key':
                case 'data':
                case 'structuredData':
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
                case 'fkConfigurableBundleTemplate':
                case 'images':
                case 'name':
                case 'idConfigurableBundleTemplatePageSearch':
                case 'uuid':
                case 'locale':
                case 'type':
                case 'key':
                case 'data':
                case 'structuredData':
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
                case 'fkConfigurableBundleTemplate':
                case 'images':
                case 'name':
                case 'idConfigurableBundleTemplatePageSearch':
                case 'uuid':
                case 'locale':
                case 'type':
                case 'key':
                case 'data':
                case 'structuredData':
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
            'fkConfigurableBundleTemplate' => $this->fkConfigurableBundleTemplate,
            'images' => $this->images,
            'name' => $this->name,
            'idConfigurableBundleTemplatePageSearch' => $this->idConfigurableBundleTemplatePageSearch,
            'uuid' => $this->uuid,
            'locale' => $this->locale,
            'type' => $this->type,
            'key' => $this->key,
            'data' => $this->data,
            'structuredData' => $this->structuredData,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'fk_configurable_bundle_template' => $this->fkConfigurableBundleTemplate,
            'images' => $this->images,
            'name' => $this->name,
            'id_configurable_bundle_template_page_search' => $this->idConfigurableBundleTemplatePageSearch,
            'uuid' => $this->uuid,
            'locale' => $this->locale,
            'type' => $this->type,
            'key' => $this->key,
            'data' => $this->data,
            'structured_data' => $this->structuredData,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'fk_configurable_bundle_template' => $this->fkConfigurableBundleTemplate instanceof AbstractTransfer ? $this->fkConfigurableBundleTemplate->toArray(true, false) : $this->fkConfigurableBundleTemplate,
            'images' => $this->images instanceof AbstractTransfer ? $this->images->toArray(true, false) : $this->images,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'id_configurable_bundle_template_page_search' => $this->idConfigurableBundleTemplatePageSearch instanceof AbstractTransfer ? $this->idConfigurableBundleTemplatePageSearch->toArray(true, false) : $this->idConfigurableBundleTemplatePageSearch,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, false) : $this->locale,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, false) : $this->type,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
            'data' => $this->data instanceof AbstractTransfer ? $this->data->toArray(true, false) : $this->data,
            'structured_data' => $this->structuredData instanceof AbstractTransfer ? $this->structuredData->toArray(true, false) : $this->structuredData,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'fkConfigurableBundleTemplate' => $this->fkConfigurableBundleTemplate instanceof AbstractTransfer ? $this->fkConfigurableBundleTemplate->toArray(true, true) : $this->fkConfigurableBundleTemplate,
            'images' => $this->images instanceof AbstractTransfer ? $this->images->toArray(true, true) : $this->images,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'idConfigurableBundleTemplatePageSearch' => $this->idConfigurableBundleTemplatePageSearch instanceof AbstractTransfer ? $this->idConfigurableBundleTemplatePageSearch->toArray(true, true) : $this->idConfigurableBundleTemplatePageSearch,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, true) : $this->locale,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, true) : $this->type,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
            'data' => $this->data instanceof AbstractTransfer ? $this->data->toArray(true, true) : $this->data,
            'structuredData' => $this->structuredData instanceof AbstractTransfer ? $this->structuredData->toArray(true, true) : $this->structuredData,
        ];
    }
}
