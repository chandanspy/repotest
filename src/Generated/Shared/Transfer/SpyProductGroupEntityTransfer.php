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
class SpyProductGroupEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_GROUP = 'idProductGroup';

    /**
     * @var string
     */
    public const PRODUCT_GROUP_KEY = 'productGroupKey';

    /**
     * @var string
     */
    public const SPY_PRODUCT_ABSTRACT_GROUPS = 'spyProductAbstractGroups';

    /**
     * @var integer|null
     */
    protected $idProductGroup;

    /**
     * @var string|null
     */
    protected $productGroupKey;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductAbstractGroupEntityTransfer[]
     */
    protected $spyProductAbstractGroups;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_group' => 'idProductGroup',
        'idProductGroup' => 'idProductGroup',
        'IdProductGroup' => 'idProductGroup',
        'product_group_key' => 'productGroupKey',
        'productGroupKey' => 'productGroupKey',
        'ProductGroupKey' => 'productGroupKey',
        'spy_product_abstract_groups' => 'spyProductAbstractGroups',
        'spyProductAbstractGroups' => 'spyProductAbstractGroups',
        'SpyProductAbstractGroups' => 'spyProductAbstractGroups',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_GROUP => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_product_group',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_GROUP_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'product_group_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_ABSTRACT_GROUPS => [
            'type' => 'Generated\Shared\Transfer\SpyProductAbstractGroupEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_abstract_groups',
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
    public static $entityNamespace = 'Orm\Zed\ProductGroup\Persistence\SpyProductGroup';


    /**
     * @module 
     *
     * @param integer|null $idProductGroup
     *
     * @return $this
     */
    public function setIdProductGroup($idProductGroup)
    {
        $this->idProductGroup = $idProductGroup;
        $this->modifiedProperties[self::ID_PRODUCT_GROUP] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdProductGroup()
    {
        return $this->idProductGroup;
    }

    /**
     * @module 
     *
     * @param integer|null $idProductGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductGroupOrFail($idProductGroup)
    {
        if ($idProductGroup === null) {
            $this->throwNullValueException(static::ID_PRODUCT_GROUP);
        }

        return $this->setIdProductGroup($idProductGroup);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdProductGroupOrFail()
    {
        if ($this->idProductGroup === null) {
            $this->throwNullValueException(static::ID_PRODUCT_GROUP);
        }

        return $this->idProductGroup;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductGroup()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_GROUP);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $productGroupKey
     *
     * @return $this
     */
    public function setProductGroupKey($productGroupKey)
    {
        $this->productGroupKey = $productGroupKey;
        $this->modifiedProperties[self::PRODUCT_GROUP_KEY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getProductGroupKey()
    {
        return $this->productGroupKey;
    }

    /**
     * @module 
     *
     * @param string|null $productGroupKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductGroupKeyOrFail($productGroupKey)
    {
        if ($productGroupKey === null) {
            $this->throwNullValueException(static::PRODUCT_GROUP_KEY);
        }

        return $this->setProductGroupKey($productGroupKey);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getProductGroupKeyOrFail()
    {
        if ($this->productGroupKey === null) {
            $this->throwNullValueException(static::PRODUCT_GROUP_KEY);
        }

        return $this->productGroupKey;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductGroupKey()
    {
        $this->assertPropertyIsSet(self::PRODUCT_GROUP_KEY);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductAbstractGroupEntityTransfer[] $spyProductAbstractGroups
     *
     * @return $this
     */
    public function setSpyProductAbstractGroups(ArrayObject $spyProductAbstractGroups)
    {
        $this->spyProductAbstractGroups = $spyProductAbstractGroups;
        $this->modifiedProperties[self::SPY_PRODUCT_ABSTRACT_GROUPS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductAbstractGroupEntityTransfer[]
     */
    public function getSpyProductAbstractGroups()
    {
        return $this->spyProductAbstractGroups;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductAbstractGroupEntityTransfer $spyProductAbstractGroups
     *
     * @return $this
     */
    public function addSpyProductAbstractGroups(SpyProductAbstractGroupEntityTransfer $spyProductAbstractGroups)
    {
        $this->spyProductAbstractGroups[] = $spyProductAbstractGroups;
        $this->modifiedProperties[self::SPY_PRODUCT_ABSTRACT_GROUPS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductAbstractGroups()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_ABSTRACT_GROUPS);

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
                case 'idProductGroup':
                case 'productGroupKey':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyProductAbstractGroups':
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
                case 'idProductGroup':
                case 'productGroupKey':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyProductAbstractGroups':
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
                case 'idProductGroup':
                case 'productGroupKey':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyProductAbstractGroups':
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
        $this->spyProductAbstractGroups = $this->spyProductAbstractGroups ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idProductGroup' => $this->idProductGroup,
            'productGroupKey' => $this->productGroupKey,
            'spyProductAbstractGroups' => $this->spyProductAbstractGroups,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_group' => $this->idProductGroup,
            'product_group_key' => $this->productGroupKey,
            'spy_product_abstract_groups' => $this->spyProductAbstractGroups,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_group' => $this->idProductGroup instanceof AbstractTransfer ? $this->idProductGroup->toArray(true, false) : $this->idProductGroup,
            'product_group_key' => $this->productGroupKey instanceof AbstractTransfer ? $this->productGroupKey->toArray(true, false) : $this->productGroupKey,
            'spy_product_abstract_groups' => $this->spyProductAbstractGroups instanceof AbstractTransfer ? $this->spyProductAbstractGroups->toArray(true, false) : $this->addValuesToCollection($this->spyProductAbstractGroups, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductGroup' => $this->idProductGroup instanceof AbstractTransfer ? $this->idProductGroup->toArray(true, true) : $this->idProductGroup,
            'productGroupKey' => $this->productGroupKey instanceof AbstractTransfer ? $this->productGroupKey->toArray(true, true) : $this->productGroupKey,
            'spyProductAbstractGroups' => $this->spyProductAbstractGroups instanceof AbstractTransfer ? $this->spyProductAbstractGroups->toArray(true, true) : $this->addValuesToCollection($this->spyProductAbstractGroups, true, true),
        ];
    }
}
