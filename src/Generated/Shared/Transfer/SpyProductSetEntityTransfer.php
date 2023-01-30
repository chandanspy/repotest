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
class SpyProductSetEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_SET = 'idProductSet';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const PRODUCT_SET_KEY = 'productSetKey';

    /**
     * @var string
     */
    public const WEIGHT = 'weight';

    /**
     * @var string
     */
    public const SPY_URLS = 'spyUrls';

    /**
     * @var string
     */
    public const SPY_PRODUCT_IMAGE_SETS = 'spyProductImageSets';

    /**
     * @var string
     */
    public const SPY_PRODUCT_ABSTRACT_SETS = 'spyProductAbstractSets';

    /**
     * @var string
     */
    public const SPY_PRODUCT_SET_DATAS = 'spyProductSetDatas';

    /**
     * @var integer|null
     */
    protected $idProductSet;

    /**
     * @var boolean|null
     */
    protected $isActive;

    /**
     * @var string|null
     */
    protected $productSetKey;

    /**
     * @var integer|null
     */
    protected $weight;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyUrlEntityTransfer[]
     */
    protected $spyUrls;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductImageSetEntityTransfer[]
     */
    protected $spyProductImageSets;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductAbstractSetEntityTransfer[]
     */
    protected $spyProductAbstractSets;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductSetDataEntityTransfer[]
     */
    protected $spyProductSetDatas;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_set' => 'idProductSet',
        'idProductSet' => 'idProductSet',
        'IdProductSet' => 'idProductSet',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'product_set_key' => 'productSetKey',
        'productSetKey' => 'productSetKey',
        'ProductSetKey' => 'productSetKey',
        'weight' => 'weight',
        'Weight' => 'weight',
        'spy_urls' => 'spyUrls',
        'spyUrls' => 'spyUrls',
        'SpyUrls' => 'spyUrls',
        'spy_product_image_sets' => 'spyProductImageSets',
        'spyProductImageSets' => 'spyProductImageSets',
        'SpyProductImageSets' => 'spyProductImageSets',
        'spy_product_abstract_sets' => 'spyProductAbstractSets',
        'spyProductAbstractSets' => 'spyProductAbstractSets',
        'SpyProductAbstractSets' => 'spyProductAbstractSets',
        'spy_product_set_datas' => 'spyProductSetDatas',
        'spyProductSetDatas' => 'spyProductSetDatas',
        'SpyProductSetDatas' => 'spyProductSetDatas',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_SET => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_product_set',
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
        self::PRODUCT_SET_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'product_set_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::WEIGHT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'weight',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_URLS => [
            'type' => 'Generated\Shared\Transfer\SpyUrlEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_urls',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_IMAGE_SETS => [
            'type' => 'Generated\Shared\Transfer\SpyProductImageSetEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_image_sets',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_ABSTRACT_SETS => [
            'type' => 'Generated\Shared\Transfer\SpyProductAbstractSetEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_abstract_sets',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_SET_DATAS => [
            'type' => 'Generated\Shared\Transfer\SpyProductSetDataEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_set_datas',
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
    public static $entityNamespace = 'Orm\Zed\ProductSet\Persistence\SpyProductSet';


    /**
     * @module 
     *
     * @param integer|null $idProductSet
     *
     * @return $this
     */
    public function setIdProductSet($idProductSet)
    {
        $this->idProductSet = $idProductSet;
        $this->modifiedProperties[self::ID_PRODUCT_SET] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdProductSet()
    {
        return $this->idProductSet;
    }

    /**
     * @module 
     *
     * @param integer|null $idProductSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductSetOrFail($idProductSet)
    {
        if ($idProductSet === null) {
            $this->throwNullValueException(static::ID_PRODUCT_SET);
        }

        return $this->setIdProductSet($idProductSet);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdProductSetOrFail()
    {
        if ($this->idProductSet === null) {
            $this->throwNullValueException(static::ID_PRODUCT_SET);
        }

        return $this->idProductSet;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductSet()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_SET);

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
     * @param string|null $productSetKey
     *
     * @return $this
     */
    public function setProductSetKey($productSetKey)
    {
        $this->productSetKey = $productSetKey;
        $this->modifiedProperties[self::PRODUCT_SET_KEY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getProductSetKey()
    {
        return $this->productSetKey;
    }

    /**
     * @module 
     *
     * @param string|null $productSetKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductSetKeyOrFail($productSetKey)
    {
        if ($productSetKey === null) {
            $this->throwNullValueException(static::PRODUCT_SET_KEY);
        }

        return $this->setProductSetKey($productSetKey);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getProductSetKeyOrFail()
    {
        if ($this->productSetKey === null) {
            $this->throwNullValueException(static::PRODUCT_SET_KEY);
        }

        return $this->productSetKey;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductSetKey()
    {
        $this->assertPropertyIsSet(self::PRODUCT_SET_KEY);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $weight
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        $this->modifiedProperties[self::WEIGHT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @module 
     *
     * @param integer|null $weight
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setWeightOrFail($weight)
    {
        if ($weight === null) {
            $this->throwNullValueException(static::WEIGHT);
        }

        return $this->setWeight($weight);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getWeightOrFail()
    {
        if ($this->weight === null) {
            $this->throwNullValueException(static::WEIGHT);
        }

        return $this->weight;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWeight()
    {
        $this->assertPropertyIsSet(self::WEIGHT);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyUrlEntityTransfer[] $spyUrls
     *
     * @return $this
     */
    public function setSpyUrls(ArrayObject $spyUrls)
    {
        $this->spyUrls = $spyUrls;
        $this->modifiedProperties[self::SPY_URLS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyUrlEntityTransfer[]
     */
    public function getSpyUrls()
    {
        return $this->spyUrls;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyUrlEntityTransfer $spyUrls
     *
     * @return $this
     */
    public function addSpyUrls(SpyUrlEntityTransfer $spyUrls)
    {
        $this->spyUrls[] = $spyUrls;
        $this->modifiedProperties[self::SPY_URLS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyUrls()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_URLS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductImageSetEntityTransfer[] $spyProductImageSets
     *
     * @return $this
     */
    public function setSpyProductImageSets(ArrayObject $spyProductImageSets)
    {
        $this->spyProductImageSets = $spyProductImageSets;
        $this->modifiedProperties[self::SPY_PRODUCT_IMAGE_SETS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductImageSetEntityTransfer[]
     */
    public function getSpyProductImageSets()
    {
        return $this->spyProductImageSets;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductImageSetEntityTransfer $spyProductImageSets
     *
     * @return $this
     */
    public function addSpyProductImageSets(SpyProductImageSetEntityTransfer $spyProductImageSets)
    {
        $this->spyProductImageSets[] = $spyProductImageSets;
        $this->modifiedProperties[self::SPY_PRODUCT_IMAGE_SETS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductImageSets()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_IMAGE_SETS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductAbstractSetEntityTransfer[] $spyProductAbstractSets
     *
     * @return $this
     */
    public function setSpyProductAbstractSets(ArrayObject $spyProductAbstractSets)
    {
        $this->spyProductAbstractSets = $spyProductAbstractSets;
        $this->modifiedProperties[self::SPY_PRODUCT_ABSTRACT_SETS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductAbstractSetEntityTransfer[]
     */
    public function getSpyProductAbstractSets()
    {
        return $this->spyProductAbstractSets;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductAbstractSetEntityTransfer $spyProductAbstractSets
     *
     * @return $this
     */
    public function addSpyProductAbstractSets(SpyProductAbstractSetEntityTransfer $spyProductAbstractSets)
    {
        $this->spyProductAbstractSets[] = $spyProductAbstractSets;
        $this->modifiedProperties[self::SPY_PRODUCT_ABSTRACT_SETS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductAbstractSets()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_ABSTRACT_SETS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductSetDataEntityTransfer[] $spyProductSetDatas
     *
     * @return $this
     */
    public function setSpyProductSetDatas(ArrayObject $spyProductSetDatas)
    {
        $this->spyProductSetDatas = $spyProductSetDatas;
        $this->modifiedProperties[self::SPY_PRODUCT_SET_DATAS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductSetDataEntityTransfer[]
     */
    public function getSpyProductSetDatas()
    {
        return $this->spyProductSetDatas;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductSetDataEntityTransfer $spyProductSetDatas
     *
     * @return $this
     */
    public function addSpyProductSetDatas(SpyProductSetDataEntityTransfer $spyProductSetDatas)
    {
        $this->spyProductSetDatas[] = $spyProductSetDatas;
        $this->modifiedProperties[self::SPY_PRODUCT_SET_DATAS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductSetDatas()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_SET_DATAS);

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
                case 'idProductSet':
                case 'isActive':
                case 'productSetKey':
                case 'weight':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyUrls':
                case 'spyProductImageSets':
                case 'spyProductAbstractSets':
                case 'spyProductSetDatas':
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
                case 'idProductSet':
                case 'isActive':
                case 'productSetKey':
                case 'weight':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyUrls':
                case 'spyProductImageSets':
                case 'spyProductAbstractSets':
                case 'spyProductSetDatas':
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
                case 'idProductSet':
                case 'isActive':
                case 'productSetKey':
                case 'weight':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyUrls':
                case 'spyProductImageSets':
                case 'spyProductAbstractSets':
                case 'spyProductSetDatas':
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
        $this->spyUrls = $this->spyUrls ?: new ArrayObject();
        $this->spyProductImageSets = $this->spyProductImageSets ?: new ArrayObject();
        $this->spyProductAbstractSets = $this->spyProductAbstractSets ?: new ArrayObject();
        $this->spyProductSetDatas = $this->spyProductSetDatas ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idProductSet' => $this->idProductSet,
            'isActive' => $this->isActive,
            'productSetKey' => $this->productSetKey,
            'weight' => $this->weight,
            'spyUrls' => $this->spyUrls,
            'spyProductImageSets' => $this->spyProductImageSets,
            'spyProductAbstractSets' => $this->spyProductAbstractSets,
            'spyProductSetDatas' => $this->spyProductSetDatas,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_set' => $this->idProductSet,
            'is_active' => $this->isActive,
            'product_set_key' => $this->productSetKey,
            'weight' => $this->weight,
            'spy_urls' => $this->spyUrls,
            'spy_product_image_sets' => $this->spyProductImageSets,
            'spy_product_abstract_sets' => $this->spyProductAbstractSets,
            'spy_product_set_datas' => $this->spyProductSetDatas,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_set' => $this->idProductSet instanceof AbstractTransfer ? $this->idProductSet->toArray(true, false) : $this->idProductSet,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'product_set_key' => $this->productSetKey instanceof AbstractTransfer ? $this->productSetKey->toArray(true, false) : $this->productSetKey,
            'weight' => $this->weight instanceof AbstractTransfer ? $this->weight->toArray(true, false) : $this->weight,
            'spy_urls' => $this->spyUrls instanceof AbstractTransfer ? $this->spyUrls->toArray(true, false) : $this->addValuesToCollection($this->spyUrls, true, false),
            'spy_product_image_sets' => $this->spyProductImageSets instanceof AbstractTransfer ? $this->spyProductImageSets->toArray(true, false) : $this->addValuesToCollection($this->spyProductImageSets, true, false),
            'spy_product_abstract_sets' => $this->spyProductAbstractSets instanceof AbstractTransfer ? $this->spyProductAbstractSets->toArray(true, false) : $this->addValuesToCollection($this->spyProductAbstractSets, true, false),
            'spy_product_set_datas' => $this->spyProductSetDatas instanceof AbstractTransfer ? $this->spyProductSetDatas->toArray(true, false) : $this->addValuesToCollection($this->spyProductSetDatas, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductSet' => $this->idProductSet instanceof AbstractTransfer ? $this->idProductSet->toArray(true, true) : $this->idProductSet,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'productSetKey' => $this->productSetKey instanceof AbstractTransfer ? $this->productSetKey->toArray(true, true) : $this->productSetKey,
            'weight' => $this->weight instanceof AbstractTransfer ? $this->weight->toArray(true, true) : $this->weight,
            'spyUrls' => $this->spyUrls instanceof AbstractTransfer ? $this->spyUrls->toArray(true, true) : $this->addValuesToCollection($this->spyUrls, true, true),
            'spyProductImageSets' => $this->spyProductImageSets instanceof AbstractTransfer ? $this->spyProductImageSets->toArray(true, true) : $this->addValuesToCollection($this->spyProductImageSets, true, true),
            'spyProductAbstractSets' => $this->spyProductAbstractSets instanceof AbstractTransfer ? $this->spyProductAbstractSets->toArray(true, true) : $this->addValuesToCollection($this->spyProductAbstractSets, true, true),
            'spyProductSetDatas' => $this->spyProductSetDatas instanceof AbstractTransfer ? $this->spyProductSetDatas->toArray(true, true) : $this->addValuesToCollection($this->spyProductSetDatas, true, true),
        ];
    }
}
