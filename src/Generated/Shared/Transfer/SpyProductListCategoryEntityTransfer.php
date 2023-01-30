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
class SpyProductListCategoryEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const FK_CATEGORY = 'fkCategory';

    /**
     * @var string
     */
    public const FK_PRODUCT_LIST = 'fkProductList';

    /**
     * @var string
     */
    public const SPY_PRODUCT_LIST = 'spyProductList';

    /**
     * @var string
     */
    public const SPY_CATEGORY = 'spyCategory';

    /**
     * @var integer|null
     */
    protected $fkCategory;

    /**
     * @var integer|null
     */
    protected $fkProductList;

    /**
     * @var \Generated\Shared\Transfer\SpyProductListEntityTransfer|null
     */
    protected $spyProductList;

    /**
     * @var \Generated\Shared\Transfer\SpyCategoryEntityTransfer|null
     */
    protected $spyCategory;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'fk_category' => 'fkCategory',
        'fkCategory' => 'fkCategory',
        'FkCategory' => 'fkCategory',
        'fk_product_list' => 'fkProductList',
        'fkProductList' => 'fkProductList',
        'FkProductList' => 'fkProductList',
        'spy_product_list' => 'spyProductList',
        'spyProductList' => 'spyProductList',
        'SpyProductList' => 'spyProductList',
        'spy_category' => 'spyCategory',
        'spyCategory' => 'spyCategory',
        'SpyCategory' => 'spyCategory',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::FK_CATEGORY => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_category',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PRODUCT_LIST => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_product_list',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_LIST => [
            'type' => 'Generated\Shared\Transfer\SpyProductListEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_list',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_CATEGORY => [
            'type' => 'Generated\Shared\Transfer\SpyCategoryEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_category',
            'is_collection' => false,
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
    public static $entityNamespace = 'Orm\Zed\ProductList\Persistence\SpyProductListCategory';


    /**
     * @module 
     *
     * @param integer|null $fkCategory
     *
     * @return $this
     */
    public function setFkCategory($fkCategory)
    {
        $this->fkCategory = $fkCategory;
        $this->modifiedProperties[self::FK_CATEGORY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkCategory()
    {
        return $this->fkCategory;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCategory
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCategoryOrFail($fkCategory)
    {
        if ($fkCategory === null) {
            $this->throwNullValueException(static::FK_CATEGORY);
        }

        return $this->setFkCategory($fkCategory);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCategoryOrFail()
    {
        if ($this->fkCategory === null) {
            $this->throwNullValueException(static::FK_CATEGORY);
        }

        return $this->fkCategory;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCategory()
    {
        $this->assertPropertyIsSet(self::FK_CATEGORY);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductList
     *
     * @return $this
     */
    public function setFkProductList($fkProductList)
    {
        $this->fkProductList = $fkProductList;
        $this->modifiedProperties[self::FK_PRODUCT_LIST] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkProductList()
    {
        return $this->fkProductList;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkProductListOrFail($fkProductList)
    {
        if ($fkProductList === null) {
            $this->throwNullValueException(static::FK_PRODUCT_LIST);
        }

        return $this->setFkProductList($fkProductList);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkProductListOrFail()
    {
        if ($this->fkProductList === null) {
            $this->throwNullValueException(static::FK_PRODUCT_LIST);
        }

        return $this->fkProductList;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkProductList()
    {
        $this->assertPropertyIsSet(self::FK_PRODUCT_LIST);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductListEntityTransfer|null $spyProductList
     *
     * @return $this
     */
    public function setSpyProductList(SpyProductListEntityTransfer $spyProductList = null)
    {
        $this->spyProductList = $spyProductList;
        $this->modifiedProperties[self::SPY_PRODUCT_LIST] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyProductListEntityTransfer|null
     */
    public function getSpyProductList()
    {
        return $this->spyProductList;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductListEntityTransfer $spyProductList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyProductListOrFail(SpyProductListEntityTransfer $spyProductList)
    {
        return $this->setSpyProductList($spyProductList);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyProductListEntityTransfer
     */
    public function getSpyProductListOrFail()
    {
        if ($this->spyProductList === null) {
            $this->throwNullValueException(static::SPY_PRODUCT_LIST);
        }

        return $this->spyProductList;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductList()
    {
        $this->assertPropertyIsSet(self::SPY_PRODUCT_LIST);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCategoryEntityTransfer|null $spyCategory
     *
     * @return $this
     */
    public function setSpyCategory(SpyCategoryEntityTransfer $spyCategory = null)
    {
        $this->spyCategory = $spyCategory;
        $this->modifiedProperties[self::SPY_CATEGORY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCategoryEntityTransfer|null
     */
    public function getSpyCategory()
    {
        return $this->spyCategory;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCategoryEntityTransfer $spyCategory
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyCategoryOrFail(SpyCategoryEntityTransfer $spyCategory)
    {
        return $this->setSpyCategory($spyCategory);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCategoryEntityTransfer
     */
    public function getSpyCategoryOrFail()
    {
        if ($this->spyCategory === null) {
            $this->throwNullValueException(static::SPY_CATEGORY);
        }

        return $this->spyCategory;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCategory()
    {
        $this->assertPropertyIsSet(self::SPY_CATEGORY);

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
                case 'fkCategory':
                case 'fkProductList':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyProductList':
                case 'spyCategory':
                    if (is_array($value)) {
                        $type = $this->transferMetadata[$normalizedPropertyName]['type'];
                        /** @var \Spryker\Shared\Kernel\Transfer\TransferInterface $value */
                        $value = (new $type())->fromArray($value, $ignoreMissingProperty);
                    }

                    if ($value !== null && $this->isPropertyStrict($normalizedPropertyName)) {
                        $this->assertInstanceOfTransfer($normalizedPropertyName, $value);
                    }
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
                case 'fkCategory':
                case 'fkProductList':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyProductList':
                case 'spyCategory':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

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
                case 'fkCategory':
                case 'fkProductList':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyProductList':
                case 'spyCategory':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

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
            'fkCategory' => $this->fkCategory,
            'fkProductList' => $this->fkProductList,
            'spyProductList' => $this->spyProductList,
            'spyCategory' => $this->spyCategory,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'fk_category' => $this->fkCategory,
            'fk_product_list' => $this->fkProductList,
            'spy_product_list' => $this->spyProductList,
            'spy_category' => $this->spyCategory,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'fk_category' => $this->fkCategory instanceof AbstractTransfer ? $this->fkCategory->toArray(true, false) : $this->fkCategory,
            'fk_product_list' => $this->fkProductList instanceof AbstractTransfer ? $this->fkProductList->toArray(true, false) : $this->fkProductList,
            'spy_product_list' => $this->spyProductList instanceof AbstractTransfer ? $this->spyProductList->toArray(true, false) : $this->spyProductList,
            'spy_category' => $this->spyCategory instanceof AbstractTransfer ? $this->spyCategory->toArray(true, false) : $this->spyCategory,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'fkCategory' => $this->fkCategory instanceof AbstractTransfer ? $this->fkCategory->toArray(true, true) : $this->fkCategory,
            'fkProductList' => $this->fkProductList instanceof AbstractTransfer ? $this->fkProductList->toArray(true, true) : $this->fkProductList,
            'spyProductList' => $this->spyProductList instanceof AbstractTransfer ? $this->spyProductList->toArray(true, true) : $this->spyProductList,
            'spyCategory' => $this->spyCategory instanceof AbstractTransfer ? $this->spyCategory->toArray(true, true) : $this->spyCategory,
        ];
    }
}
