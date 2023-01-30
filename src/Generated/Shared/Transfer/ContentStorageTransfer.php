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
class ContentStorageTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_CONTENT_STORAGE = 'idContentStorage';

    /**
     * @var string
     */
    public const FK_CONTENT = 'fkContent';

    /**
     * @var string
     */
    public const CONTENT_KEY = 'contentKey';

    /**
     * @var string
     */
    public const DATA = 'data';

    /**
     * @var string
     */
    public const LOCALE = 'locale';

    /**
     * @var string
     */
    public const KEY = 'key';

    /**
     * @var int|null
     */
    protected $idContentStorage;

    /**
     * @var int|null
     */
    protected $fkContent;

    /**
     * @var string|null
     */
    protected $contentKey;

    /**
     * @var string|null
     */
    protected $data;

    /**
     * @var string|null
     */
    protected $locale;

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_content_storage' => 'idContentStorage',
        'idContentStorage' => 'idContentStorage',
        'IdContentStorage' => 'idContentStorage',
        'fk_content' => 'fkContent',
        'fkContent' => 'fkContent',
        'FkContent' => 'fkContent',
        'content_key' => 'contentKey',
        'contentKey' => 'contentKey',
        'ContentKey' => 'contentKey',
        'data' => 'data',
        'Data' => 'data',
        'locale' => 'locale',
        'Locale' => 'locale',
        'key' => 'key',
        'Key' => 'key',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_CONTENT_STORAGE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_content_storage',
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
        self::CONTENT_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'content_key',
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
    ];

    /**
     * @module ContentStorage
     *
     * @param int|null $idContentStorage
     *
     * @return $this
     */
    public function setIdContentStorage($idContentStorage)
    {
        $this->idContentStorage = $idContentStorage;
        $this->modifiedProperties[self::ID_CONTENT_STORAGE] = true;

        return $this;
    }

    /**
     * @module ContentStorage
     *
     * @return int|null
     */
    public function getIdContentStorage()
    {
        return $this->idContentStorage;
    }

    /**
     * @module ContentStorage
     *
     * @param int|null $idContentStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdContentStorageOrFail($idContentStorage)
    {
        if ($idContentStorage === null) {
            $this->throwNullValueException(static::ID_CONTENT_STORAGE);
        }

        return $this->setIdContentStorage($idContentStorage);
    }

    /**
     * @module ContentStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdContentStorageOrFail()
    {
        if ($this->idContentStorage === null) {
            $this->throwNullValueException(static::ID_CONTENT_STORAGE);
        }

        return $this->idContentStorage;
    }

    /**
     * @module ContentStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdContentStorage()
    {
        $this->assertPropertyIsSet(self::ID_CONTENT_STORAGE);

        return $this;
    }

    /**
     * @module ContentStorage
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
     * @module ContentStorage
     *
     * @return int|null
     */
    public function getFkContent()
    {
        return $this->fkContent;
    }

    /**
     * @module ContentStorage
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
     * @module ContentStorage
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
     * @module ContentStorage
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
     * @module ContentStorage
     *
     * @param string|null $contentKey
     *
     * @return $this
     */
    public function setContentKey($contentKey)
    {
        $this->contentKey = $contentKey;
        $this->modifiedProperties[self::CONTENT_KEY] = true;

        return $this;
    }

    /**
     * @module ContentStorage
     *
     * @return string|null
     */
    public function getContentKey()
    {
        return $this->contentKey;
    }

    /**
     * @module ContentStorage
     *
     * @param string|null $contentKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setContentKeyOrFail($contentKey)
    {
        if ($contentKey === null) {
            $this->throwNullValueException(static::CONTENT_KEY);
        }

        return $this->setContentKey($contentKey);
    }

    /**
     * @module ContentStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getContentKeyOrFail()
    {
        if ($this->contentKey === null) {
            $this->throwNullValueException(static::CONTENT_KEY);
        }

        return $this->contentKey;
    }

    /**
     * @module ContentStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireContentKey()
    {
        $this->assertPropertyIsSet(self::CONTENT_KEY);

        return $this;
    }

    /**
     * @module ContentStorage
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
     * @module ContentStorage
     *
     * @return string|null
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @module ContentStorage
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
     * @module ContentStorage
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
     * @module ContentStorage
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
     * @module ContentStorage
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
     * @module ContentStorage
     *
     * @return string|null
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @module ContentStorage
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
     * @module ContentStorage
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
     * @module ContentStorage
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
     * @module ContentStorage
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
     * @module ContentStorage
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @module ContentStorage
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
     * @module ContentStorage
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
     * @module ContentStorage
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
                case 'idContentStorage':
                case 'fkContent':
                case 'contentKey':
                case 'data':
                case 'locale':
                case 'key':
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
                case 'idContentStorage':
                case 'fkContent':
                case 'contentKey':
                case 'data':
                case 'locale':
                case 'key':
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
                case 'idContentStorage':
                case 'fkContent':
                case 'contentKey':
                case 'data':
                case 'locale':
                case 'key':
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
            'idContentStorage' => $this->idContentStorage,
            'fkContent' => $this->fkContent,
            'contentKey' => $this->contentKey,
            'data' => $this->data,
            'locale' => $this->locale,
            'key' => $this->key,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_content_storage' => $this->idContentStorage,
            'fk_content' => $this->fkContent,
            'content_key' => $this->contentKey,
            'data' => $this->data,
            'locale' => $this->locale,
            'key' => $this->key,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_content_storage' => $this->idContentStorage instanceof AbstractTransfer ? $this->idContentStorage->toArray(true, false) : $this->idContentStorage,
            'fk_content' => $this->fkContent instanceof AbstractTransfer ? $this->fkContent->toArray(true, false) : $this->fkContent,
            'content_key' => $this->contentKey instanceof AbstractTransfer ? $this->contentKey->toArray(true, false) : $this->contentKey,
            'data' => $this->data instanceof AbstractTransfer ? $this->data->toArray(true, false) : $this->data,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, false) : $this->locale,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idContentStorage' => $this->idContentStorage instanceof AbstractTransfer ? $this->idContentStorage->toArray(true, true) : $this->idContentStorage,
            'fkContent' => $this->fkContent instanceof AbstractTransfer ? $this->fkContent->toArray(true, true) : $this->fkContent,
            'contentKey' => $this->contentKey instanceof AbstractTransfer ? $this->contentKey->toArray(true, true) : $this->contentKey,
            'data' => $this->data instanceof AbstractTransfer ? $this->data->toArray(true, true) : $this->data,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, true) : $this->locale,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
        ];
    }
}
