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
class ProductSetTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const LOCALIZED_DATA = 'localizedData';

    /**
     * @var string
     */
    public const ID_PRODUCT_SET = 'idProductSet';

    /**
     * @var string
     */
    public const ID_PRODUCT_ABSTRACTS = 'idProductAbstracts';

    /**
     * @var string
     */
    public const IMAGE_SETS = 'imageSets';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const WEIGHT = 'weight';

    /**
     * @var string
     */
    public const PRODUCT_SET_KEY = 'productSetKey';

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\LocalizedProductSetTransfer[]
     */
    protected $localizedData;

    /**
     * @var int|null
     */
    protected $idProductSet;

    /**
     * @var array
     */
    protected $idProductAbstracts = [];

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ProductImageSetTransfer[]
     */
    protected $imageSets;

    /**
     * @var bool|null
     */
    protected $isActive;

    /**
     * @var int|null
     */
    protected $weight;

    /**
     * @var string|null
     */
    protected $productSetKey;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'localized_data' => 'localizedData',
        'localizedData' => 'localizedData',
        'LocalizedData' => 'localizedData',
        'id_product_set' => 'idProductSet',
        'idProductSet' => 'idProductSet',
        'IdProductSet' => 'idProductSet',
        'id_product_abstracts' => 'idProductAbstracts',
        'idProductAbstracts' => 'idProductAbstracts',
        'IdProductAbstracts' => 'idProductAbstracts',
        'image_sets' => 'imageSets',
        'imageSets' => 'imageSets',
        'ImageSets' => 'imageSets',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'weight' => 'weight',
        'Weight' => 'weight',
        'product_set_key' => 'productSetKey',
        'productSetKey' => 'productSetKey',
        'ProductSetKey' => 'productSetKey',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::LOCALIZED_DATA => [
            'type' => 'Generated\Shared\Transfer\LocalizedProductSetTransfer',
            'type_shim' => null,
            'name_underscore' => 'localized_data',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_PRODUCT_SET => [
            'type' => 'int',
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
        self::ID_PRODUCT_ABSTRACTS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'id_product_abstracts',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IMAGE_SETS => [
            'type' => 'Generated\Shared\Transfer\ProductImageSetTransfer',
            'type_shim' => null,
            'name_underscore' => 'image_sets',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_ACTIVE => [
            'type' => 'bool',
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
        self::WEIGHT => [
            'type' => 'int',
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
    ];

    /**
     * @module ProductSetGui|ProductSet
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\LocalizedProductSetTransfer[] $localizedData
     *
     * @return $this
     */
    public function setLocalizedData(ArrayObject $localizedData)
    {
        $this->localizedData = $localizedData;
        $this->modifiedProperties[self::LOCALIZED_DATA] = true;

        return $this;
    }

    /**
     * @module ProductSetGui|ProductSet
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\LocalizedProductSetTransfer[]
     */
    public function getLocalizedData()
    {
        return $this->localizedData;
    }

    /**
     * @module ProductSetGui|ProductSet
     *
     * @param \Generated\Shared\Transfer\LocalizedProductSetTransfer $localizedData
     *
     * @return $this
     */
    public function addLocalizedData(LocalizedProductSetTransfer $localizedData)
    {
        $this->localizedData[] = $localizedData;
        $this->modifiedProperties[self::LOCALIZED_DATA] = true;

        return $this;
    }

    /**
     * @module ProductSetGui|ProductSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocalizedData()
    {
        $this->assertCollectionPropertyIsSet(self::LOCALIZED_DATA);

        return $this;
    }

    /**
     * @module ProductSetGui|ProductSet
     *
     * @param int|null $idProductSet
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
     * @module ProductSetGui|ProductSet
     *
     * @return int|null
     */
    public function getIdProductSet()
    {
        return $this->idProductSet;
    }

    /**
     * @module ProductSetGui|ProductSet
     *
     * @param int|null $idProductSet
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
     * @module ProductSetGui|ProductSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductSetOrFail()
    {
        if ($this->idProductSet === null) {
            $this->throwNullValueException(static::ID_PRODUCT_SET);
        }

        return $this->idProductSet;
    }

    /**
     * @module ProductSetGui|ProductSet
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
     * @module ProductSetGui|ProductSet
     *
     * @param array|null $idProductAbstracts
     *
     * @return $this
     */
    public function setIdProductAbstracts(array $idProductAbstracts = null)
    {
        if ($idProductAbstracts === null) {
            $idProductAbstracts = [];
        }

        $this->idProductAbstracts = $idProductAbstracts;
        $this->modifiedProperties[self::ID_PRODUCT_ABSTRACTS] = true;

        return $this;
    }

    /**
     * @module ProductSetGui|ProductSet
     *
     * @return array
     */
    public function getIdProductAbstracts()
    {
        return $this->idProductAbstracts;
    }

    /**
     * @module ProductSetGui|ProductSet
     *
     * @param mixed $idProductAbstract
     *
     * @return $this
     */
    public function addIdProductAbstract($idProductAbstract)
    {
        $this->idProductAbstracts[] = $idProductAbstract;
        $this->modifiedProperties[self::ID_PRODUCT_ABSTRACTS] = true;

        return $this;
    }

    /**
     * @module ProductSetGui|ProductSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductAbstracts()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_ABSTRACTS);

        return $this;
    }

    /**
     * @module ProductSetGui|ProductSet
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ProductImageSetTransfer[] $imageSets
     *
     * @return $this
     */
    public function setImageSets(ArrayObject $imageSets)
    {
        $this->imageSets = $imageSets;
        $this->modifiedProperties[self::IMAGE_SETS] = true;

        return $this;
    }

    /**
     * @module ProductSetGui|ProductSet
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ProductImageSetTransfer[]
     */
    public function getImageSets()
    {
        return $this->imageSets;
    }

    /**
     * @module ProductSetGui|ProductSet
     *
     * @param \Generated\Shared\Transfer\ProductImageSetTransfer $imageSet
     *
     * @return $this
     */
    public function addImageSet(ProductImageSetTransfer $imageSet)
    {
        $this->imageSets[] = $imageSet;
        $this->modifiedProperties[self::IMAGE_SETS] = true;

        return $this;
    }

    /**
     * @module ProductSetGui|ProductSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireImageSets()
    {
        $this->assertCollectionPropertyIsSet(self::IMAGE_SETS);

        return $this;
    }

    /**
     * @module ProductSetGui|ProductSet
     *
     * @param bool|null $isActive
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
     * @module ProductSetGui|ProductSet
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module ProductSetGui|ProductSet
     *
     * @param bool|null $isActive
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
     * @module ProductSetGui|ProductSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsActiveOrFail()
    {
        if ($this->isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->isActive;
    }

    /**
     * @module ProductSetGui|ProductSet
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
     * @module ProductSetGui|ProductSet
     *
     * @param int|null $weight
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
     * @module ProductSetGui|ProductSet
     *
     * @return int|null
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @module ProductSetGui|ProductSet
     *
     * @param int|null $weight
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
     * @module ProductSetGui|ProductSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getWeightOrFail()
    {
        if ($this->weight === null) {
            $this->throwNullValueException(static::WEIGHT);
        }

        return $this->weight;
    }

    /**
     * @module ProductSetGui|ProductSet
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
     * @module ProductSetGui|ProductSet
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
     * @module ProductSetGui|ProductSet
     *
     * @return string|null
     */
    public function getProductSetKey()
    {
        return $this->productSetKey;
    }

    /**
     * @module ProductSetGui|ProductSet
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
     * @module ProductSetGui|ProductSet
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
     * @module ProductSetGui|ProductSet
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
                case 'idProductAbstracts':
                case 'isActive':
                case 'weight':
                case 'productSetKey':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'localizedData':
                case 'imageSets':
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
                case 'idProductSet':
                case 'idProductAbstracts':
                case 'isActive':
                case 'weight':
                case 'productSetKey':
                    $values[$arrayKey] = $value;

                    break;
                case 'localizedData':
                case 'imageSets':
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
                case 'idProductAbstracts':
                case 'isActive':
                case 'weight':
                case 'productSetKey':
                    $values[$arrayKey] = $value;

                    break;
                case 'localizedData':
                case 'imageSets':
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
        $this->localizedData = $this->localizedData ?: new ArrayObject();
        $this->imageSets = $this->imageSets ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idProductSet' => $this->idProductSet,
            'idProductAbstracts' => $this->idProductAbstracts,
            'isActive' => $this->isActive,
            'weight' => $this->weight,
            'productSetKey' => $this->productSetKey,
            'localizedData' => $this->localizedData,
            'imageSets' => $this->imageSets,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_set' => $this->idProductSet,
            'id_product_abstracts' => $this->idProductAbstracts,
            'is_active' => $this->isActive,
            'weight' => $this->weight,
            'product_set_key' => $this->productSetKey,
            'localized_data' => $this->localizedData,
            'image_sets' => $this->imageSets,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_set' => $this->idProductSet instanceof AbstractTransfer ? $this->idProductSet->toArray(true, false) : $this->idProductSet,
            'id_product_abstracts' => $this->idProductAbstracts instanceof AbstractTransfer ? $this->idProductAbstracts->toArray(true, false) : $this->idProductAbstracts,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'weight' => $this->weight instanceof AbstractTransfer ? $this->weight->toArray(true, false) : $this->weight,
            'product_set_key' => $this->productSetKey instanceof AbstractTransfer ? $this->productSetKey->toArray(true, false) : $this->productSetKey,
            'localized_data' => $this->localizedData instanceof AbstractTransfer ? $this->localizedData->toArray(true, false) : $this->addValuesToCollection($this->localizedData, true, false),
            'image_sets' => $this->imageSets instanceof AbstractTransfer ? $this->imageSets->toArray(true, false) : $this->addValuesToCollection($this->imageSets, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductSet' => $this->idProductSet instanceof AbstractTransfer ? $this->idProductSet->toArray(true, true) : $this->idProductSet,
            'idProductAbstracts' => $this->idProductAbstracts instanceof AbstractTransfer ? $this->idProductAbstracts->toArray(true, true) : $this->idProductAbstracts,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'weight' => $this->weight instanceof AbstractTransfer ? $this->weight->toArray(true, true) : $this->weight,
            'productSetKey' => $this->productSetKey instanceof AbstractTransfer ? $this->productSetKey->toArray(true, true) : $this->productSetKey,
            'localizedData' => $this->localizedData instanceof AbstractTransfer ? $this->localizedData->toArray(true, true) : $this->addValuesToCollection($this->localizedData, true, true),
            'imageSets' => $this->imageSets instanceof AbstractTransfer ? $this->imageSets->toArray(true, true) : $this->addValuesToCollection($this->imageSets, true, true),
        ];
    }
}
