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
class SpyProductAttributeKeyEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_ATTRIBUTE_KEY = 'idProductAttributeKey';

    /**
     * @var string
     */
    public const IS_SUPER = 'isSuper';

    /**
     * @var string
     */
    public const KEY = 'key';

    /**
     * @var string
     */
    public const SPY_PRODUCT_MANAGEMENT_ATTRIBUTES = 'spyProductManagementAttributes';

    /**
     * @var string
     */
    public const SPY_PRODUCT_SEARCH_ATTRIBUTE_MAPS = 'spyProductSearchAttributeMaps';

    /**
     * @var string
     */
    public const SPY_PRODUCT_SEARCH_ATTRIBUTES = 'spyProductSearchAttributes';

    /**
     * @var integer|null
     */
    protected $idProductAttributeKey;

    /**
     * @var boolean|null
     */
    protected $isSuper;

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductManagementAttributeEntityTransfer[]
     */
    protected $spyProductManagementAttributes;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductSearchAttributeMapEntityTransfer[]
     */
    protected $spyProductSearchAttributeMaps;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductSearchAttributeEntityTransfer[]
     */
    protected $spyProductSearchAttributes;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_attribute_key' => 'idProductAttributeKey',
        'idProductAttributeKey' => 'idProductAttributeKey',
        'IdProductAttributeKey' => 'idProductAttributeKey',
        'is_super' => 'isSuper',
        'isSuper' => 'isSuper',
        'IsSuper' => 'isSuper',
        'key' => 'key',
        'Key' => 'key',
        'spy_product_management_attributes' => 'spyProductManagementAttributes',
        'spyProductManagementAttributes' => 'spyProductManagementAttributes',
        'SpyProductManagementAttributes' => 'spyProductManagementAttributes',
        'spy_product_search_attribute_maps' => 'spyProductSearchAttributeMaps',
        'spyProductSearchAttributeMaps' => 'spyProductSearchAttributeMaps',
        'SpyProductSearchAttributeMaps' => 'spyProductSearchAttributeMaps',
        'spy_product_search_attributes' => 'spyProductSearchAttributes',
        'spyProductSearchAttributes' => 'spyProductSearchAttributes',
        'SpyProductSearchAttributes' => 'spyProductSearchAttributes',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_ATTRIBUTE_KEY => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_product_attribute_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_SUPER => [
            'type' => 'boolean',
            'type_shim' => null,
            'name_underscore' => 'is_super',
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
        self::SPY_PRODUCT_MANAGEMENT_ATTRIBUTES => [
            'type' => 'Generated\Shared\Transfer\SpyProductManagementAttributeEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_management_attributes',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_SEARCH_ATTRIBUTE_MAPS => [
            'type' => 'Generated\Shared\Transfer\SpyProductSearchAttributeMapEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_search_attribute_maps',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_SEARCH_ATTRIBUTES => [
            'type' => 'Generated\Shared\Transfer\SpyProductSearchAttributeEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_search_attributes',
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
    public static $entityNamespace = 'Orm\Zed\Product\Persistence\SpyProductAttributeKey';


    /**
     * @module 
     *
     * @param integer|null $idProductAttributeKey
     *
     * @return $this
     */
    public function setIdProductAttributeKey($idProductAttributeKey)
    {
        $this->idProductAttributeKey = $idProductAttributeKey;
        $this->modifiedProperties[self::ID_PRODUCT_ATTRIBUTE_KEY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdProductAttributeKey()
    {
        return $this->idProductAttributeKey;
    }

    /**
     * @module 
     *
     * @param integer|null $idProductAttributeKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductAttributeKeyOrFail($idProductAttributeKey)
    {
        if ($idProductAttributeKey === null) {
            $this->throwNullValueException(static::ID_PRODUCT_ATTRIBUTE_KEY);
        }

        return $this->setIdProductAttributeKey($idProductAttributeKey);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdProductAttributeKeyOrFail()
    {
        if ($this->idProductAttributeKey === null) {
            $this->throwNullValueException(static::ID_PRODUCT_ATTRIBUTE_KEY);
        }

        return $this->idProductAttributeKey;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductAttributeKey()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_ATTRIBUTE_KEY);

        return $this;
    }

    /**
     * @module 
     *
     * @param boolean|null $isSuper
     *
     * @return $this
     */
    public function setIsSuper($isSuper)
    {
        $this->isSuper = $isSuper;
        $this->modifiedProperties[self::IS_SUPER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return boolean|null
     */
    public function getIsSuper()
    {
        return $this->isSuper;
    }

    /**
     * @module 
     *
     * @param boolean|null $isSuper
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsSuperOrFail($isSuper)
    {
        if ($isSuper === null) {
            $this->throwNullValueException(static::IS_SUPER);
        }

        return $this->setIsSuper($isSuper);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsSuperOrFail()
    {
        if ($this->isSuper === null) {
            $this->throwNullValueException(static::IS_SUPER);
        }

        return $this->isSuper;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsSuper()
    {
        $this->assertPropertyIsSet(self::IS_SUPER);

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
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductManagementAttributeEntityTransfer[] $spyProductManagementAttributes
     *
     * @return $this
     */
    public function setSpyProductManagementAttributes(ArrayObject $spyProductManagementAttributes)
    {
        $this->spyProductManagementAttributes = $spyProductManagementAttributes;
        $this->modifiedProperties[self::SPY_PRODUCT_MANAGEMENT_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductManagementAttributeEntityTransfer[]
     */
    public function getSpyProductManagementAttributes()
    {
        return $this->spyProductManagementAttributes;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductManagementAttributeEntityTransfer $spyProductManagementAttributes
     *
     * @return $this
     */
    public function addSpyProductManagementAttributes(SpyProductManagementAttributeEntityTransfer $spyProductManagementAttributes)
    {
        $this->spyProductManagementAttributes[] = $spyProductManagementAttributes;
        $this->modifiedProperties[self::SPY_PRODUCT_MANAGEMENT_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductManagementAttributes()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_MANAGEMENT_ATTRIBUTES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductSearchAttributeMapEntityTransfer[] $spyProductSearchAttributeMaps
     *
     * @return $this
     */
    public function setSpyProductSearchAttributeMaps(ArrayObject $spyProductSearchAttributeMaps)
    {
        $this->spyProductSearchAttributeMaps = $spyProductSearchAttributeMaps;
        $this->modifiedProperties[self::SPY_PRODUCT_SEARCH_ATTRIBUTE_MAPS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductSearchAttributeMapEntityTransfer[]
     */
    public function getSpyProductSearchAttributeMaps()
    {
        return $this->spyProductSearchAttributeMaps;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductSearchAttributeMapEntityTransfer $spyProductSearchAttributeMaps
     *
     * @return $this
     */
    public function addSpyProductSearchAttributeMaps(SpyProductSearchAttributeMapEntityTransfer $spyProductSearchAttributeMaps)
    {
        $this->spyProductSearchAttributeMaps[] = $spyProductSearchAttributeMaps;
        $this->modifiedProperties[self::SPY_PRODUCT_SEARCH_ATTRIBUTE_MAPS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductSearchAttributeMaps()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_SEARCH_ATTRIBUTE_MAPS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductSearchAttributeEntityTransfer[] $spyProductSearchAttributes
     *
     * @return $this
     */
    public function setSpyProductSearchAttributes(ArrayObject $spyProductSearchAttributes)
    {
        $this->spyProductSearchAttributes = $spyProductSearchAttributes;
        $this->modifiedProperties[self::SPY_PRODUCT_SEARCH_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductSearchAttributeEntityTransfer[]
     */
    public function getSpyProductSearchAttributes()
    {
        return $this->spyProductSearchAttributes;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductSearchAttributeEntityTransfer $spyProductSearchAttributes
     *
     * @return $this
     */
    public function addSpyProductSearchAttributes(SpyProductSearchAttributeEntityTransfer $spyProductSearchAttributes)
    {
        $this->spyProductSearchAttributes[] = $spyProductSearchAttributes;
        $this->modifiedProperties[self::SPY_PRODUCT_SEARCH_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductSearchAttributes()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_SEARCH_ATTRIBUTES);

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
                case 'idProductAttributeKey':
                case 'isSuper':
                case 'key':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyProductManagementAttributes':
                case 'spyProductSearchAttributeMaps':
                case 'spyProductSearchAttributes':
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
                case 'idProductAttributeKey':
                case 'isSuper':
                case 'key':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyProductManagementAttributes':
                case 'spyProductSearchAttributeMaps':
                case 'spyProductSearchAttributes':
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
                case 'idProductAttributeKey':
                case 'isSuper':
                case 'key':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyProductManagementAttributes':
                case 'spyProductSearchAttributeMaps':
                case 'spyProductSearchAttributes':
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
        $this->spyProductManagementAttributes = $this->spyProductManagementAttributes ?: new ArrayObject();
        $this->spyProductSearchAttributeMaps = $this->spyProductSearchAttributeMaps ?: new ArrayObject();
        $this->spyProductSearchAttributes = $this->spyProductSearchAttributes ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idProductAttributeKey' => $this->idProductAttributeKey,
            'isSuper' => $this->isSuper,
            'key' => $this->key,
            'spyProductManagementAttributes' => $this->spyProductManagementAttributes,
            'spyProductSearchAttributeMaps' => $this->spyProductSearchAttributeMaps,
            'spyProductSearchAttributes' => $this->spyProductSearchAttributes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_attribute_key' => $this->idProductAttributeKey,
            'is_super' => $this->isSuper,
            'key' => $this->key,
            'spy_product_management_attributes' => $this->spyProductManagementAttributes,
            'spy_product_search_attribute_maps' => $this->spyProductSearchAttributeMaps,
            'spy_product_search_attributes' => $this->spyProductSearchAttributes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_attribute_key' => $this->idProductAttributeKey instanceof AbstractTransfer ? $this->idProductAttributeKey->toArray(true, false) : $this->idProductAttributeKey,
            'is_super' => $this->isSuper instanceof AbstractTransfer ? $this->isSuper->toArray(true, false) : $this->isSuper,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
            'spy_product_management_attributes' => $this->spyProductManagementAttributes instanceof AbstractTransfer ? $this->spyProductManagementAttributes->toArray(true, false) : $this->addValuesToCollection($this->spyProductManagementAttributes, true, false),
            'spy_product_search_attribute_maps' => $this->spyProductSearchAttributeMaps instanceof AbstractTransfer ? $this->spyProductSearchAttributeMaps->toArray(true, false) : $this->addValuesToCollection($this->spyProductSearchAttributeMaps, true, false),
            'spy_product_search_attributes' => $this->spyProductSearchAttributes instanceof AbstractTransfer ? $this->spyProductSearchAttributes->toArray(true, false) : $this->addValuesToCollection($this->spyProductSearchAttributes, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductAttributeKey' => $this->idProductAttributeKey instanceof AbstractTransfer ? $this->idProductAttributeKey->toArray(true, true) : $this->idProductAttributeKey,
            'isSuper' => $this->isSuper instanceof AbstractTransfer ? $this->isSuper->toArray(true, true) : $this->isSuper,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
            'spyProductManagementAttributes' => $this->spyProductManagementAttributes instanceof AbstractTransfer ? $this->spyProductManagementAttributes->toArray(true, true) : $this->addValuesToCollection($this->spyProductManagementAttributes, true, true),
            'spyProductSearchAttributeMaps' => $this->spyProductSearchAttributeMaps instanceof AbstractTransfer ? $this->spyProductSearchAttributeMaps->toArray(true, true) : $this->addValuesToCollection($this->spyProductSearchAttributeMaps, true, true),
            'spyProductSearchAttributes' => $this->spyProductSearchAttributes instanceof AbstractTransfer ? $this->spyProductSearchAttributes->toArray(true, true) : $this->addValuesToCollection($this->spyProductSearchAttributes, true, true),
        ];
    }
}
