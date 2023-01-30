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
class SpyContentStorageEntityTransfer extends AbstractEntityTransfer
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
     * @var integer|null
     */
    protected $idContentStorage;

    /**
     * @var integer|null
     */
    protected $fkContent;

    /**
     * @var string|null
     */
    protected $contentKey;

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
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_CONTENT_STORAGE => [
            'type' => 'integer',
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
            'type' => 'integer',
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
    ];
    /**
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\ContentStorage\Persistence\SpyContentStorage';


    /**
     * @module 
     *
     * @param integer|null $idContentStorage
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdContentStorage()
    {
        return $this->idContentStorage;
    }

    /**
     * @module 
     *
     * @param integer|null $idContentStorage
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdContentStorageOrFail()
    {
        if ($this->idContentStorage === null) {
            $this->throwNullValueException(static::ID_CONTENT_STORAGE);
        }

        return $this->idContentStorage;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkContent
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
     * @module 
     *
     * @return integer|null
     */
    public function getFkContent()
    {
        return $this->fkContent;
    }

    /**
     * @module 
     *
     * @param integer|null $fkContent
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkContentOrFail()
    {
        if ($this->fkContent === null) {
            $this->throwNullValueException(static::FK_CONTENT);
        }

        return $this->fkContent;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getContentKey()
    {
        return $this->contentKey;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
                case 'idContentStorage':
                case 'fkContent':
                case 'contentKey':
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
        ];
    }
}
