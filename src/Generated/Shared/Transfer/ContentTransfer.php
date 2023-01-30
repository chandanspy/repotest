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
class ContentTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const KEY = 'key';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const DESCRIPTION = 'description';

    /**
     * @var string
     */
    public const ID_CONTENT = 'idContent';

    /**
     * @var string
     */
    public const CONTENT_TERM_KEY = 'contentTermKey';

    /**
     * @var string
     */
    public const CONTENT_TYPE_KEY = 'contentTypeKey';

    /**
     * @var string
     */
    public const LOCALIZED_CONTENTS = 'localizedContents';

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var int|null
     */
    protected $idContent;

    /**
     * @var string|null
     */
    protected $contentTermKey;

    /**
     * @var string|null
     */
    protected $contentTypeKey;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\LocalizedContentTransfer[]
     */
    protected $localizedContents;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'key' => 'key',
        'Key' => 'key',
        'name' => 'name',
        'Name' => 'name',
        'description' => 'description',
        'Description' => 'description',
        'id_content' => 'idContent',
        'idContent' => 'idContent',
        'IdContent' => 'idContent',
        'content_term_key' => 'contentTermKey',
        'contentTermKey' => 'contentTermKey',
        'ContentTermKey' => 'contentTermKey',
        'content_type_key' => 'contentTypeKey',
        'contentTypeKey' => 'contentTypeKey',
        'ContentTypeKey' => 'contentTypeKey',
        'localized_contents' => 'localizedContents',
        'localizedContents' => 'localizedContents',
        'LocalizedContents' => 'localizedContents',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::DESCRIPTION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'description',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_CONTENT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_content',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONTENT_TERM_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'content_term_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONTENT_TYPE_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'content_type_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LOCALIZED_CONTENTS => [
            'type' => 'Generated\Shared\Transfer\LocalizedContentTransfer',
            'type_shim' => null,
            'name_underscore' => 'localized_contents',
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
     * @module CmsContentWidgetContentItemConnector|ContentBannerDataImport|ContentGui|ContentNavigationDataImport|ContentProductDataImport|ContentProductSetDataImport|ContentStorage|Content
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
     * @module CmsContentWidgetContentItemConnector|ContentBannerDataImport|ContentGui|ContentNavigationDataImport|ContentProductDataImport|ContentProductSetDataImport|ContentStorage|Content
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @module CmsContentWidgetContentItemConnector|ContentBannerDataImport|ContentGui|ContentNavigationDataImport|ContentProductDataImport|ContentProductSetDataImport|ContentStorage|Content
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
     * @module CmsContentWidgetContentItemConnector|ContentBannerDataImport|ContentGui|ContentNavigationDataImport|ContentProductDataImport|ContentProductSetDataImport|ContentStorage|Content
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
     * @module CmsContentWidgetContentItemConnector|ContentBannerDataImport|ContentGui|ContentNavigationDataImport|ContentProductDataImport|ContentProductSetDataImport|ContentStorage|Content
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
     * @module ContentBannerDataImport|ContentGui|ContentNavigationDataImport|ContentProductDataImport|ContentProductSetDataImport|ContentStorage|Content
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
     * @module ContentBannerDataImport|ContentGui|ContentNavigationDataImport|ContentProductDataImport|ContentProductSetDataImport|ContentStorage|Content
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module ContentBannerDataImport|ContentGui|ContentNavigationDataImport|ContentProductDataImport|ContentProductSetDataImport|ContentStorage|Content
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
     * @module ContentBannerDataImport|ContentGui|ContentNavigationDataImport|ContentProductDataImport|ContentProductSetDataImport|ContentStorage|Content
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
     * @module ContentBannerDataImport|ContentGui|ContentNavigationDataImport|ContentProductDataImport|ContentProductSetDataImport|ContentStorage|Content
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
     * @module ContentBannerDataImport|ContentGui|ContentNavigationDataImport|ContentProductDataImport|ContentProductSetDataImport|ContentStorage|Content
     *
     * @param string|null $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        $this->modifiedProperties[self::DESCRIPTION] = true;

        return $this;
    }

    /**
     * @module ContentBannerDataImport|ContentGui|ContentNavigationDataImport|ContentProductDataImport|ContentProductSetDataImport|ContentStorage|Content
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @module ContentBannerDataImport|ContentGui|ContentNavigationDataImport|ContentProductDataImport|ContentProductSetDataImport|ContentStorage|Content
     *
     * @param string|null $description
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDescriptionOrFail($description)
    {
        if ($description === null) {
            $this->throwNullValueException(static::DESCRIPTION);
        }

        return $this->setDescription($description);
    }

    /**
     * @module ContentBannerDataImport|ContentGui|ContentNavigationDataImport|ContentProductDataImport|ContentProductSetDataImport|ContentStorage|Content
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDescriptionOrFail()
    {
        if ($this->description === null) {
            $this->throwNullValueException(static::DESCRIPTION);
        }

        return $this->description;
    }

    /**
     * @module ContentBannerDataImport|ContentGui|ContentNavigationDataImport|ContentProductDataImport|ContentProductSetDataImport|ContentStorage|Content
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDescription()
    {
        $this->assertPropertyIsSet(self::DESCRIPTION);

        return $this;
    }

    /**
     * @module ContentGui|ContentStorage|Content
     *
     * @param int|null $idContent
     *
     * @return $this
     */
    public function setIdContent($idContent)
    {
        $this->idContent = $idContent;
        $this->modifiedProperties[self::ID_CONTENT] = true;

        return $this;
    }

    /**
     * @module ContentGui|ContentStorage|Content
     *
     * @return int|null
     */
    public function getIdContent()
    {
        return $this->idContent;
    }

    /**
     * @module ContentGui|ContentStorage|Content
     *
     * @param int|null $idContent
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdContentOrFail($idContent)
    {
        if ($idContent === null) {
            $this->throwNullValueException(static::ID_CONTENT);
        }

        return $this->setIdContent($idContent);
    }

    /**
     * @module ContentGui|ContentStorage|Content
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdContentOrFail()
    {
        if ($this->idContent === null) {
            $this->throwNullValueException(static::ID_CONTENT);
        }

        return $this->idContent;
    }

    /**
     * @module ContentGui|ContentStorage|Content
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdContent()
    {
        $this->assertPropertyIsSet(self::ID_CONTENT);

        return $this;
    }

    /**
     * @module ContentGui|ContentStorage|Content
     *
     * @param string|null $contentTermKey
     *
     * @return $this
     */
    public function setContentTermKey($contentTermKey)
    {
        $this->contentTermKey = $contentTermKey;
        $this->modifiedProperties[self::CONTENT_TERM_KEY] = true;

        return $this;
    }

    /**
     * @module ContentGui|ContentStorage|Content
     *
     * @return string|null
     */
    public function getContentTermKey()
    {
        return $this->contentTermKey;
    }

    /**
     * @module ContentGui|ContentStorage|Content
     *
     * @param string|null $contentTermKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setContentTermKeyOrFail($contentTermKey)
    {
        if ($contentTermKey === null) {
            $this->throwNullValueException(static::CONTENT_TERM_KEY);
        }

        return $this->setContentTermKey($contentTermKey);
    }

    /**
     * @module ContentGui|ContentStorage|Content
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getContentTermKeyOrFail()
    {
        if ($this->contentTermKey === null) {
            $this->throwNullValueException(static::CONTENT_TERM_KEY);
        }

        return $this->contentTermKey;
    }

    /**
     * @module ContentGui|ContentStorage|Content
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireContentTermKey()
    {
        $this->assertPropertyIsSet(self::CONTENT_TERM_KEY);

        return $this;
    }

    /**
     * @module ContentGui|ContentStorage|Content
     *
     * @param string|null $contentTypeKey
     *
     * @return $this
     */
    public function setContentTypeKey($contentTypeKey)
    {
        $this->contentTypeKey = $contentTypeKey;
        $this->modifiedProperties[self::CONTENT_TYPE_KEY] = true;

        return $this;
    }

    /**
     * @module ContentGui|ContentStorage|Content
     *
     * @return string|null
     */
    public function getContentTypeKey()
    {
        return $this->contentTypeKey;
    }

    /**
     * @module ContentGui|ContentStorage|Content
     *
     * @param string|null $contentTypeKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setContentTypeKeyOrFail($contentTypeKey)
    {
        if ($contentTypeKey === null) {
            $this->throwNullValueException(static::CONTENT_TYPE_KEY);
        }

        return $this->setContentTypeKey($contentTypeKey);
    }

    /**
     * @module ContentGui|ContentStorage|Content
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getContentTypeKeyOrFail()
    {
        if ($this->contentTypeKey === null) {
            $this->throwNullValueException(static::CONTENT_TYPE_KEY);
        }

        return $this->contentTypeKey;
    }

    /**
     * @module ContentGui|ContentStorage|Content
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireContentTypeKey()
    {
        $this->assertPropertyIsSet(self::CONTENT_TYPE_KEY);

        return $this;
    }

    /**
     * @module ContentGui|ContentStorage|Content
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\LocalizedContentTransfer[] $localizedContents
     *
     * @return $this
     */
    public function setLocalizedContents(ArrayObject $localizedContents)
    {
        $this->localizedContents = $localizedContents;
        $this->modifiedProperties[self::LOCALIZED_CONTENTS] = true;

        return $this;
    }

    /**
     * @module ContentGui|ContentStorage|Content
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\LocalizedContentTransfer[]
     */
    public function getLocalizedContents()
    {
        return $this->localizedContents;
    }

    /**
     * @module ContentGui|ContentStorage|Content
     *
     * @param \Generated\Shared\Transfer\LocalizedContentTransfer $localizedContent
     *
     * @return $this
     */
    public function addLocalizedContent(LocalizedContentTransfer $localizedContent)
    {
        $this->localizedContents[] = $localizedContent;
        $this->modifiedProperties[self::LOCALIZED_CONTENTS] = true;

        return $this;
    }

    /**
     * @module ContentGui|ContentStorage|Content
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocalizedContents()
    {
        $this->assertCollectionPropertyIsSet(self::LOCALIZED_CONTENTS);

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
                case 'key':
                case 'name':
                case 'description':
                case 'idContent':
                case 'contentTermKey':
                case 'contentTypeKey':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'localizedContents':
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
                case 'key':
                case 'name':
                case 'description':
                case 'idContent':
                case 'contentTermKey':
                case 'contentTypeKey':
                    $values[$arrayKey] = $value;

                    break;
                case 'localizedContents':
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
                case 'key':
                case 'name':
                case 'description':
                case 'idContent':
                case 'contentTermKey':
                case 'contentTypeKey':
                    $values[$arrayKey] = $value;

                    break;
                case 'localizedContents':
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
        $this->localizedContents = $this->localizedContents ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'key' => $this->key,
            'name' => $this->name,
            'description' => $this->description,
            'idContent' => $this->idContent,
            'contentTermKey' => $this->contentTermKey,
            'contentTypeKey' => $this->contentTypeKey,
            'localizedContents' => $this->localizedContents,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'key' => $this->key,
            'name' => $this->name,
            'description' => $this->description,
            'id_content' => $this->idContent,
            'content_term_key' => $this->contentTermKey,
            'content_type_key' => $this->contentTypeKey,
            'localized_contents' => $this->localizedContents,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, false) : $this->description,
            'id_content' => $this->idContent instanceof AbstractTransfer ? $this->idContent->toArray(true, false) : $this->idContent,
            'content_term_key' => $this->contentTermKey instanceof AbstractTransfer ? $this->contentTermKey->toArray(true, false) : $this->contentTermKey,
            'content_type_key' => $this->contentTypeKey instanceof AbstractTransfer ? $this->contentTypeKey->toArray(true, false) : $this->contentTypeKey,
            'localized_contents' => $this->localizedContents instanceof AbstractTransfer ? $this->localizedContents->toArray(true, false) : $this->addValuesToCollection($this->localizedContents, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, true) : $this->description,
            'idContent' => $this->idContent instanceof AbstractTransfer ? $this->idContent->toArray(true, true) : $this->idContent,
            'contentTermKey' => $this->contentTermKey instanceof AbstractTransfer ? $this->contentTermKey->toArray(true, true) : $this->contentTermKey,
            'contentTypeKey' => $this->contentTypeKey instanceof AbstractTransfer ? $this->contentTypeKey->toArray(true, true) : $this->contentTypeKey,
            'localizedContents' => $this->localizedContents instanceof AbstractTransfer ? $this->localizedContents->toArray(true, true) : $this->addValuesToCollection($this->localizedContents, true, true),
        ];
    }
}
