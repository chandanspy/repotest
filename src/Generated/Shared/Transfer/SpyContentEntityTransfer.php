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
class SpyContentEntityTransfer extends AbstractEntityTransfer
{
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
    public const DESCRIPTION = 'description';

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
    public const SPY_CONTENT_LOCALIZEDS = 'spyContentLocalizeds';

    /**
     * @var integer|null
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
     * @var string|null
     */
    protected $description;

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyContentLocalizedEntityTransfer[]
     */
    protected $spyContentLocalizeds;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_content' => 'idContent',
        'idContent' => 'idContent',
        'IdContent' => 'idContent',
        'content_term_key' => 'contentTermKey',
        'contentTermKey' => 'contentTermKey',
        'ContentTermKey' => 'contentTermKey',
        'content_type_key' => 'contentTypeKey',
        'contentTypeKey' => 'contentTypeKey',
        'ContentTypeKey' => 'contentTypeKey',
        'description' => 'description',
        'Description' => 'description',
        'key' => 'key',
        'Key' => 'key',
        'name' => 'name',
        'Name' => 'name',
        'spy_content_localizeds' => 'spyContentLocalizeds',
        'spyContentLocalizeds' => 'spyContentLocalizeds',
        'SpyContentLocalizeds' => 'spyContentLocalizeds',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_CONTENT => [
            'type' => 'integer',
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
        self::SPY_CONTENT_LOCALIZEDS => [
            'type' => 'Generated\Shared\Transfer\SpyContentLocalizedEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_content_localizeds',
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
    public static $entityNamespace = 'Orm\Zed\Content\Persistence\SpyContent';


    /**
     * @module 
     *
     * @param integer|null $idContent
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdContent()
    {
        return $this->idContent;
    }

    /**
     * @module 
     *
     * @param integer|null $idContent
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdContentOrFail()
    {
        if ($this->idContent === null) {
            $this->throwNullValueException(static::ID_CONTENT);
        }

        return $this->idContent;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getContentTermKey()
    {
        return $this->contentTermKey;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getContentTypeKey()
    {
        return $this->contentTypeKey;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyContentLocalizedEntityTransfer[] $spyContentLocalizeds
     *
     * @return $this
     */
    public function setSpyContentLocalizeds(ArrayObject $spyContentLocalizeds)
    {
        $this->spyContentLocalizeds = $spyContentLocalizeds;
        $this->modifiedProperties[self::SPY_CONTENT_LOCALIZEDS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyContentLocalizedEntityTransfer[]
     */
    public function getSpyContentLocalizeds()
    {
        return $this->spyContentLocalizeds;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyContentLocalizedEntityTransfer $spyContentLocalizeds
     *
     * @return $this
     */
    public function addSpyContentLocalizeds(SpyContentLocalizedEntityTransfer $spyContentLocalizeds)
    {
        $this->spyContentLocalizeds[] = $spyContentLocalizeds;
        $this->modifiedProperties[self::SPY_CONTENT_LOCALIZEDS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyContentLocalizeds()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_CONTENT_LOCALIZEDS);

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
                case 'idContent':
                case 'contentTermKey':
                case 'contentTypeKey':
                case 'description':
                case 'key':
                case 'name':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyContentLocalizeds':
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
                case 'idContent':
                case 'contentTermKey':
                case 'contentTypeKey':
                case 'description':
                case 'key':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyContentLocalizeds':
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
                case 'idContent':
                case 'contentTermKey':
                case 'contentTypeKey':
                case 'description':
                case 'key':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyContentLocalizeds':
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
        $this->spyContentLocalizeds = $this->spyContentLocalizeds ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idContent' => $this->idContent,
            'contentTermKey' => $this->contentTermKey,
            'contentTypeKey' => $this->contentTypeKey,
            'description' => $this->description,
            'key' => $this->key,
            'name' => $this->name,
            'spyContentLocalizeds' => $this->spyContentLocalizeds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_content' => $this->idContent,
            'content_term_key' => $this->contentTermKey,
            'content_type_key' => $this->contentTypeKey,
            'description' => $this->description,
            'key' => $this->key,
            'name' => $this->name,
            'spy_content_localizeds' => $this->spyContentLocalizeds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_content' => $this->idContent instanceof AbstractTransfer ? $this->idContent->toArray(true, false) : $this->idContent,
            'content_term_key' => $this->contentTermKey instanceof AbstractTransfer ? $this->contentTermKey->toArray(true, false) : $this->contentTermKey,
            'content_type_key' => $this->contentTypeKey instanceof AbstractTransfer ? $this->contentTypeKey->toArray(true, false) : $this->contentTypeKey,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, false) : $this->description,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'spy_content_localizeds' => $this->spyContentLocalizeds instanceof AbstractTransfer ? $this->spyContentLocalizeds->toArray(true, false) : $this->addValuesToCollection($this->spyContentLocalizeds, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idContent' => $this->idContent instanceof AbstractTransfer ? $this->idContent->toArray(true, true) : $this->idContent,
            'contentTermKey' => $this->contentTermKey instanceof AbstractTransfer ? $this->contentTermKey->toArray(true, true) : $this->contentTermKey,
            'contentTypeKey' => $this->contentTypeKey instanceof AbstractTransfer ? $this->contentTypeKey->toArray(true, true) : $this->contentTypeKey,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, true) : $this->description,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'spyContentLocalizeds' => $this->spyContentLocalizeds instanceof AbstractTransfer ? $this->spyContentLocalizeds->toArray(true, true) : $this->addValuesToCollection($this->spyContentLocalizeds, true, true),
        ];
    }
}
