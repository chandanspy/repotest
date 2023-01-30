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
class CmsSlotBlockConditionTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ALL = 'all';

    /**
     * @var string
     */
    public const CATEGORY_IDS = 'categoryIds';

    /**
     * @var string
     */
    public const CMS_PAGE_IDS = 'cmsPageIds';

    /**
     * @var string
     */
    public const PRODUCT_IDS = 'productIds';

    /**
     * @var bool|null
     */
    protected $all;

    /**
     * @var int[]
     */
    protected $categoryIds = [];

    /**
     * @var int[]
     */
    protected $cmsPageIds = [];

    /**
     * @var int[]
     */
    protected $productIds = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'all' => 'all',
        'All' => 'all',
        'category_ids' => 'categoryIds',
        'categoryIds' => 'categoryIds',
        'CategoryIds' => 'categoryIds',
        'cms_page_ids' => 'cmsPageIds',
        'cmsPageIds' => 'cmsPageIds',
        'CmsPageIds' => 'cmsPageIds',
        'product_ids' => 'productIds',
        'productIds' => 'productIds',
        'ProductIds' => 'productIds',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ALL => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'all',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CATEGORY_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'category_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CMS_PAGE_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'cms_page_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'product_ids',
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
     * @module CmsSlotBlockCategoryConnector|CmsSlotBlockCategoryGui|CmsSlotBlockCmsConnector|CmsSlotBlockCmsGui|CmsSlotBlockProductCategoryConnector|CmsSlotBlockProductCategoryGui
     *
     * @param bool|null $all
     *
     * @return $this
     */
    public function setAll($all)
    {
        $this->all = $all;
        $this->modifiedProperties[self::ALL] = true;

        return $this;
    }

    /**
     * @module CmsSlotBlockCategoryConnector|CmsSlotBlockCategoryGui|CmsSlotBlockCmsConnector|CmsSlotBlockCmsGui|CmsSlotBlockProductCategoryConnector|CmsSlotBlockProductCategoryGui
     *
     * @return bool|null
     */
    public function getAll()
    {
        return $this->all;
    }

    /**
     * @module CmsSlotBlockCategoryConnector|CmsSlotBlockCategoryGui|CmsSlotBlockCmsConnector|CmsSlotBlockCmsGui|CmsSlotBlockProductCategoryConnector|CmsSlotBlockProductCategoryGui
     *
     * @param bool|null $all
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAllOrFail($all)
    {
        if ($all === null) {
            $this->throwNullValueException(static::ALL);
        }

        return $this->setAll($all);
    }

    /**
     * @module CmsSlotBlockCategoryConnector|CmsSlotBlockCategoryGui|CmsSlotBlockCmsConnector|CmsSlotBlockCmsGui|CmsSlotBlockProductCategoryConnector|CmsSlotBlockProductCategoryGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getAllOrFail()
    {
        if ($this->all === null) {
            $this->throwNullValueException(static::ALL);
        }

        return $this->all;
    }

    /**
     * @module CmsSlotBlockCategoryConnector|CmsSlotBlockCategoryGui|CmsSlotBlockCmsConnector|CmsSlotBlockCmsGui|CmsSlotBlockProductCategoryConnector|CmsSlotBlockProductCategoryGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAll()
    {
        $this->assertPropertyIsSet(self::ALL);

        return $this;
    }

    /**
     * @module CmsSlotBlockCategoryConnector|CmsSlotBlockCategoryGui|CmsSlotBlockProductCategoryConnector|CmsSlotBlockProductCategoryGui
     *
     * @param int[]|null $categoryIds
     *
     * @return $this
     */
    public function setCategoryIds(array $categoryIds = null)
    {
        if ($categoryIds === null) {
            $categoryIds = [];
        }

        $this->categoryIds = $categoryIds;
        $this->modifiedProperties[self::CATEGORY_IDS] = true;

        return $this;
    }

    /**
     * @module CmsSlotBlockCategoryConnector|CmsSlotBlockCategoryGui|CmsSlotBlockProductCategoryConnector|CmsSlotBlockProductCategoryGui
     *
     * @return int[]
     */
    public function getCategoryIds()
    {
        return $this->categoryIds;
    }

    /**
     * @module CmsSlotBlockCategoryConnector|CmsSlotBlockCategoryGui|CmsSlotBlockProductCategoryConnector|CmsSlotBlockProductCategoryGui
     *
     * @param int $idCategory
     *
     * @return $this
     */
    public function addIdCategory($idCategory)
    {
        $this->categoryIds[] = $idCategory;
        $this->modifiedProperties[self::CATEGORY_IDS] = true;

        return $this;
    }

    /**
     * @module CmsSlotBlockCategoryConnector|CmsSlotBlockCategoryGui|CmsSlotBlockProductCategoryConnector|CmsSlotBlockProductCategoryGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCategoryIds()
    {
        $this->assertPropertyIsSet(self::CATEGORY_IDS);

        return $this;
    }

    /**
     * @module CmsSlotBlockCmsConnector|CmsSlotBlockCmsGui
     *
     * @param int[]|null $cmsPageIds
     *
     * @return $this
     */
    public function setCmsPageIds(array $cmsPageIds = null)
    {
        if ($cmsPageIds === null) {
            $cmsPageIds = [];
        }

        $this->cmsPageIds = $cmsPageIds;
        $this->modifiedProperties[self::CMS_PAGE_IDS] = true;

        return $this;
    }

    /**
     * @module CmsSlotBlockCmsConnector|CmsSlotBlockCmsGui
     *
     * @return int[]
     */
    public function getCmsPageIds()
    {
        return $this->cmsPageIds;
    }

    /**
     * @module CmsSlotBlockCmsConnector|CmsSlotBlockCmsGui
     *
     * @param int $idCmsPage
     *
     * @return $this
     */
    public function addIdCmsPage($idCmsPage)
    {
        $this->cmsPageIds[] = $idCmsPage;
        $this->modifiedProperties[self::CMS_PAGE_IDS] = true;

        return $this;
    }

    /**
     * @module CmsSlotBlockCmsConnector|CmsSlotBlockCmsGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCmsPageIds()
    {
        $this->assertPropertyIsSet(self::CMS_PAGE_IDS);

        return $this;
    }

    /**
     * @module CmsSlotBlockProductCategoryConnector|CmsSlotBlockProductCategoryGui
     *
     * @param int[]|null $productIds
     *
     * @return $this
     */
    public function setProductIds(array $productIds = null)
    {
        if ($productIds === null) {
            $productIds = [];
        }

        $this->productIds = $productIds;
        $this->modifiedProperties[self::PRODUCT_IDS] = true;

        return $this;
    }

    /**
     * @module CmsSlotBlockProductCategoryConnector|CmsSlotBlockProductCategoryGui
     *
     * @return int[]
     */
    public function getProductIds()
    {
        return $this->productIds;
    }

    /**
     * @module CmsSlotBlockProductCategoryConnector|CmsSlotBlockProductCategoryGui
     *
     * @param int $idProduct
     *
     * @return $this
     */
    public function addIdProduct($idProduct)
    {
        $this->productIds[] = $idProduct;
        $this->modifiedProperties[self::PRODUCT_IDS] = true;

        return $this;
    }

    /**
     * @module CmsSlotBlockProductCategoryConnector|CmsSlotBlockProductCategoryGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductIds()
    {
        $this->assertPropertyIsSet(self::PRODUCT_IDS);

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
                case 'all':
                case 'categoryIds':
                case 'cmsPageIds':
                case 'productIds':
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
                case 'all':
                case 'categoryIds':
                case 'cmsPageIds':
                case 'productIds':
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
                case 'all':
                case 'categoryIds':
                case 'cmsPageIds':
                case 'productIds':
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
            'all' => $this->all,
            'categoryIds' => $this->categoryIds,
            'cmsPageIds' => $this->cmsPageIds,
            'productIds' => $this->productIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'all' => $this->all,
            'category_ids' => $this->categoryIds,
            'cms_page_ids' => $this->cmsPageIds,
            'product_ids' => $this->productIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'all' => $this->all instanceof AbstractTransfer ? $this->all->toArray(true, false) : $this->all,
            'category_ids' => $this->categoryIds instanceof AbstractTransfer ? $this->categoryIds->toArray(true, false) : $this->categoryIds,
            'cms_page_ids' => $this->cmsPageIds instanceof AbstractTransfer ? $this->cmsPageIds->toArray(true, false) : $this->cmsPageIds,
            'product_ids' => $this->productIds instanceof AbstractTransfer ? $this->productIds->toArray(true, false) : $this->productIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'all' => $this->all instanceof AbstractTransfer ? $this->all->toArray(true, true) : $this->all,
            'categoryIds' => $this->categoryIds instanceof AbstractTransfer ? $this->categoryIds->toArray(true, true) : $this->categoryIds,
            'cmsPageIds' => $this->cmsPageIds instanceof AbstractTransfer ? $this->cmsPageIds->toArray(true, true) : $this->cmsPageIds,
            'productIds' => $this->productIds instanceof AbstractTransfer ? $this->productIds->toArray(true, true) : $this->productIds,
        ];
    }
}
