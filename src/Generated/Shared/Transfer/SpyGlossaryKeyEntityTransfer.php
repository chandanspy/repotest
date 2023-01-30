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
class SpyGlossaryKeyEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_GLOSSARY_KEY = 'idGlossaryKey';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const KEY = 'key';

    /**
     * @var string
     */
    public const SPY_GLOSSARY_TRANSLATIONS = 'spyGlossaryTranslations';

    /**
     * @var string
     */
    public const SPY_CMS_GLOSSARY_KEY_MAPPINGS = 'spyCmsGlossaryKeyMappings';

    /**
     * @var string
     */
    public const SPY_CMS_BLOCK_GLOSSARY_KEY_MAPPINGS = 'spyCmsBlockGlossaryKeyMappings';

    /**
     * @var integer|null
     */
    protected $idGlossaryKey;

    /**
     * @var boolean|null
     */
    protected $isActive;

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyGlossaryTranslationEntityTransfer[]
     */
    protected $spyGlossaryTranslations;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCmsGlossaryKeyMappingEntityTransfer[]
     */
    protected $spyCmsGlossaryKeyMappings;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCmsBlockGlossaryKeyMappingEntityTransfer[]
     */
    protected $spyCmsBlockGlossaryKeyMappings;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_glossary_key' => 'idGlossaryKey',
        'idGlossaryKey' => 'idGlossaryKey',
        'IdGlossaryKey' => 'idGlossaryKey',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'key' => 'key',
        'Key' => 'key',
        'spy_glossary_translations' => 'spyGlossaryTranslations',
        'spyGlossaryTranslations' => 'spyGlossaryTranslations',
        'SpyGlossaryTranslations' => 'spyGlossaryTranslations',
        'spy_cms_glossary_key_mappings' => 'spyCmsGlossaryKeyMappings',
        'spyCmsGlossaryKeyMappings' => 'spyCmsGlossaryKeyMappings',
        'SpyCmsGlossaryKeyMappings' => 'spyCmsGlossaryKeyMappings',
        'spy_cms_block_glossary_key_mappings' => 'spyCmsBlockGlossaryKeyMappings',
        'spyCmsBlockGlossaryKeyMappings' => 'spyCmsBlockGlossaryKeyMappings',
        'SpyCmsBlockGlossaryKeyMappings' => 'spyCmsBlockGlossaryKeyMappings',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_GLOSSARY_KEY => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_glossary_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_ACTIVE => [
            'type' => 'boolean',
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
        self::SPY_GLOSSARY_TRANSLATIONS => [
            'type' => 'Generated\Shared\Transfer\SpyGlossaryTranslationEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_glossary_translations',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_CMS_GLOSSARY_KEY_MAPPINGS => [
            'type' => 'Generated\Shared\Transfer\SpyCmsGlossaryKeyMappingEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_cms_glossary_key_mappings',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_CMS_BLOCK_GLOSSARY_KEY_MAPPINGS => [
            'type' => 'Generated\Shared\Transfer\SpyCmsBlockGlossaryKeyMappingEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_cms_block_glossary_key_mappings',
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
    public static $entityNamespace = 'Orm\Zed\Glossary\Persistence\SpyGlossaryKey';


    /**
     * @module 
     *
     * @param integer|null $idGlossaryKey
     *
     * @return $this
     */
    public function setIdGlossaryKey($idGlossaryKey)
    {
        $this->idGlossaryKey = $idGlossaryKey;
        $this->modifiedProperties[self::ID_GLOSSARY_KEY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdGlossaryKey()
    {
        return $this->idGlossaryKey;
    }

    /**
     * @module 
     *
     * @param integer|null $idGlossaryKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdGlossaryKeyOrFail($idGlossaryKey)
    {
        if ($idGlossaryKey === null) {
            $this->throwNullValueException(static::ID_GLOSSARY_KEY);
        }

        return $this->setIdGlossaryKey($idGlossaryKey);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdGlossaryKeyOrFail()
    {
        if ($this->idGlossaryKey === null) {
            $this->throwNullValueException(static::ID_GLOSSARY_KEY);
        }

        return $this->idGlossaryKey;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdGlossaryKey()
    {
        $this->assertPropertyIsSet(self::ID_GLOSSARY_KEY);

        return $this;
    }

    /**
     * @module 
     *
     * @param boolean|null $isActive
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
     * @module 
     *
     * @return boolean|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module 
     *
     * @param boolean|null $isActive
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsActiveOrFail()
    {
        if ($this->isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->isActive;
    }

    /**
     * @module 
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
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyGlossaryTranslationEntityTransfer[] $spyGlossaryTranslations
     *
     * @return $this
     */
    public function setSpyGlossaryTranslations(ArrayObject $spyGlossaryTranslations)
    {
        $this->spyGlossaryTranslations = $spyGlossaryTranslations;
        $this->modifiedProperties[self::SPY_GLOSSARY_TRANSLATIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyGlossaryTranslationEntityTransfer[]
     */
    public function getSpyGlossaryTranslations()
    {
        return $this->spyGlossaryTranslations;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyGlossaryTranslationEntityTransfer $spyGlossaryTranslations
     *
     * @return $this
     */
    public function addSpyGlossaryTranslations(SpyGlossaryTranslationEntityTransfer $spyGlossaryTranslations)
    {
        $this->spyGlossaryTranslations[] = $spyGlossaryTranslations;
        $this->modifiedProperties[self::SPY_GLOSSARY_TRANSLATIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyGlossaryTranslations()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_GLOSSARY_TRANSLATIONS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCmsGlossaryKeyMappingEntityTransfer[] $spyCmsGlossaryKeyMappings
     *
     * @return $this
     */
    public function setSpyCmsGlossaryKeyMappings(ArrayObject $spyCmsGlossaryKeyMappings)
    {
        $this->spyCmsGlossaryKeyMappings = $spyCmsGlossaryKeyMappings;
        $this->modifiedProperties[self::SPY_CMS_GLOSSARY_KEY_MAPPINGS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCmsGlossaryKeyMappingEntityTransfer[]
     */
    public function getSpyCmsGlossaryKeyMappings()
    {
        return $this->spyCmsGlossaryKeyMappings;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCmsGlossaryKeyMappingEntityTransfer $spyCmsGlossaryKeyMappings
     *
     * @return $this
     */
    public function addSpyCmsGlossaryKeyMappings(SpyCmsGlossaryKeyMappingEntityTransfer $spyCmsGlossaryKeyMappings)
    {
        $this->spyCmsGlossaryKeyMappings[] = $spyCmsGlossaryKeyMappings;
        $this->modifiedProperties[self::SPY_CMS_GLOSSARY_KEY_MAPPINGS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCmsGlossaryKeyMappings()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_CMS_GLOSSARY_KEY_MAPPINGS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCmsBlockGlossaryKeyMappingEntityTransfer[] $spyCmsBlockGlossaryKeyMappings
     *
     * @return $this
     */
    public function setSpyCmsBlockGlossaryKeyMappings(ArrayObject $spyCmsBlockGlossaryKeyMappings)
    {
        $this->spyCmsBlockGlossaryKeyMappings = $spyCmsBlockGlossaryKeyMappings;
        $this->modifiedProperties[self::SPY_CMS_BLOCK_GLOSSARY_KEY_MAPPINGS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCmsBlockGlossaryKeyMappingEntityTransfer[]
     */
    public function getSpyCmsBlockGlossaryKeyMappings()
    {
        return $this->spyCmsBlockGlossaryKeyMappings;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCmsBlockGlossaryKeyMappingEntityTransfer $spyCmsBlockGlossaryKeyMappings
     *
     * @return $this
     */
    public function addSpyCmsBlockGlossaryKeyMappings(SpyCmsBlockGlossaryKeyMappingEntityTransfer $spyCmsBlockGlossaryKeyMappings)
    {
        $this->spyCmsBlockGlossaryKeyMappings[] = $spyCmsBlockGlossaryKeyMappings;
        $this->modifiedProperties[self::SPY_CMS_BLOCK_GLOSSARY_KEY_MAPPINGS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCmsBlockGlossaryKeyMappings()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_CMS_BLOCK_GLOSSARY_KEY_MAPPINGS);

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
                case 'idGlossaryKey':
                case 'isActive':
                case 'key':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyGlossaryTranslations':
                case 'spyCmsGlossaryKeyMappings':
                case 'spyCmsBlockGlossaryKeyMappings':
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
                case 'idGlossaryKey':
                case 'isActive':
                case 'key':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyGlossaryTranslations':
                case 'spyCmsGlossaryKeyMappings':
                case 'spyCmsBlockGlossaryKeyMappings':
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
                case 'idGlossaryKey':
                case 'isActive':
                case 'key':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyGlossaryTranslations':
                case 'spyCmsGlossaryKeyMappings':
                case 'spyCmsBlockGlossaryKeyMappings':
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
        $this->spyGlossaryTranslations = $this->spyGlossaryTranslations ?: new ArrayObject();
        $this->spyCmsGlossaryKeyMappings = $this->spyCmsGlossaryKeyMappings ?: new ArrayObject();
        $this->spyCmsBlockGlossaryKeyMappings = $this->spyCmsBlockGlossaryKeyMappings ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idGlossaryKey' => $this->idGlossaryKey,
            'isActive' => $this->isActive,
            'key' => $this->key,
            'spyGlossaryTranslations' => $this->spyGlossaryTranslations,
            'spyCmsGlossaryKeyMappings' => $this->spyCmsGlossaryKeyMappings,
            'spyCmsBlockGlossaryKeyMappings' => $this->spyCmsBlockGlossaryKeyMappings,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_glossary_key' => $this->idGlossaryKey,
            'is_active' => $this->isActive,
            'key' => $this->key,
            'spy_glossary_translations' => $this->spyGlossaryTranslations,
            'spy_cms_glossary_key_mappings' => $this->spyCmsGlossaryKeyMappings,
            'spy_cms_block_glossary_key_mappings' => $this->spyCmsBlockGlossaryKeyMappings,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_glossary_key' => $this->idGlossaryKey instanceof AbstractTransfer ? $this->idGlossaryKey->toArray(true, false) : $this->idGlossaryKey,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
            'spy_glossary_translations' => $this->spyGlossaryTranslations instanceof AbstractTransfer ? $this->spyGlossaryTranslations->toArray(true, false) : $this->addValuesToCollection($this->spyGlossaryTranslations, true, false),
            'spy_cms_glossary_key_mappings' => $this->spyCmsGlossaryKeyMappings instanceof AbstractTransfer ? $this->spyCmsGlossaryKeyMappings->toArray(true, false) : $this->addValuesToCollection($this->spyCmsGlossaryKeyMappings, true, false),
            'spy_cms_block_glossary_key_mappings' => $this->spyCmsBlockGlossaryKeyMappings instanceof AbstractTransfer ? $this->spyCmsBlockGlossaryKeyMappings->toArray(true, false) : $this->addValuesToCollection($this->spyCmsBlockGlossaryKeyMappings, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idGlossaryKey' => $this->idGlossaryKey instanceof AbstractTransfer ? $this->idGlossaryKey->toArray(true, true) : $this->idGlossaryKey,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
            'spyGlossaryTranslations' => $this->spyGlossaryTranslations instanceof AbstractTransfer ? $this->spyGlossaryTranslations->toArray(true, true) : $this->addValuesToCollection($this->spyGlossaryTranslations, true, true),
            'spyCmsGlossaryKeyMappings' => $this->spyCmsGlossaryKeyMappings instanceof AbstractTransfer ? $this->spyCmsGlossaryKeyMappings->toArray(true, true) : $this->addValuesToCollection($this->spyCmsGlossaryKeyMappings, true, true),
            'spyCmsBlockGlossaryKeyMappings' => $this->spyCmsBlockGlossaryKeyMappings instanceof AbstractTransfer ? $this->spyCmsBlockGlossaryKeyMappings->toArray(true, true) : $this->addValuesToCollection($this->spyCmsBlockGlossaryKeyMappings, true, true),
        ];
    }
}
