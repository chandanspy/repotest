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
class RestCatalogSearchSuggestionsAttributesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const COMPLETION = 'completion';

    /**
     * @var string
     */
    public const ABSTRACT_PRODUCTS = 'abstractProducts';

    /**
     * @deprecated Use categoryCollection instead.
     */
    public const CATEGORIES = 'categories';

    /**
     * @deprecated Use cmsPageCollection instead.
     */
    public const CMS_PAGES = 'cmsPages';

    /**
     * @var string
     */
    public const CATEGORY_COLLECTION = 'categoryCollection';

    /**
     * @var string
     */
    public const CMS_PAGE_COLLECTION = 'cmsPageCollection';

    /**
     * @var string[]
     */
    protected $completion = [];

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\RestCatalogSearchSuggestionAbstractProductsTransfer[]
     */
    protected $abstractProducts;

    /**
     * @var array
     */
    protected $categories = [];

    /**
     * @var array
     */
    protected $cmsPages = [];

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\RestCatalogSearchSuggestionCategoriesTransfer[]
     */
    protected $categoryCollection;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\RestCatalogSearchSuggestionCmsPagesTransfer[]
     */
    protected $cmsPageCollection;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'completion' => 'completion',
        'Completion' => 'completion',
        'abstract_products' => 'abstractProducts',
        'abstractProducts' => 'abstractProducts',
        'AbstractProducts' => 'abstractProducts',
        'categories' => 'categories',
        'Categories' => 'categories',
        'cms_pages' => 'cmsPages',
        'cmsPages' => 'cmsPages',
        'CmsPages' => 'cmsPages',
        'category_collection' => 'categoryCollection',
        'categoryCollection' => 'categoryCollection',
        'CategoryCollection' => 'categoryCollection',
        'cms_page_collection' => 'cmsPageCollection',
        'cmsPageCollection' => 'cmsPageCollection',
        'CmsPageCollection' => 'cmsPageCollection',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::COMPLETION => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'completion',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ABSTRACT_PRODUCTS => [
            'type' => 'Generated\Shared\Transfer\RestCatalogSearchSuggestionAbstractProductsTransfer',
            'type_shim' => null,
            'name_underscore' => 'abstract_products',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CATEGORIES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'categories',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CMS_PAGES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'cms_pages',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CATEGORY_COLLECTION => [
            'type' => 'Generated\Shared\Transfer\RestCatalogSearchSuggestionCategoriesTransfer',
            'type_shim' => null,
            'name_underscore' => 'category_collection',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CMS_PAGE_COLLECTION => [
            'type' => 'Generated\Shared\Transfer\RestCatalogSearchSuggestionCmsPagesTransfer',
            'type_shim' => null,
            'name_underscore' => 'cms_page_collection',
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
     * @module CatalogSearchRestApi
     *
     * @param string[]|null $completion
     *
     * @return $this
     */
    public function setCompletion(array $completion = null)
    {
        if ($completion === null) {
            $completion = [];
        }

        $this->completion = $completion;
        $this->modifiedProperties[self::COMPLETION] = true;

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @return string[]
     */
    public function getCompletion()
    {
        return $this->completion;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @param string $completion
     *
     * @return $this
     */
    public function addCompletion($completion)
    {
        $this->completion[] = $completion;
        $this->modifiedProperties[self::COMPLETION] = true;

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompletion()
    {
        $this->assertPropertyIsSet(self::COMPLETION);

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\RestCatalogSearchSuggestionAbstractProductsTransfer[] $abstractProducts
     *
     * @return $this
     */
    public function setAbstractProducts(ArrayObject $abstractProducts)
    {
        $this->abstractProducts = $abstractProducts;
        $this->modifiedProperties[self::ABSTRACT_PRODUCTS] = true;

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\RestCatalogSearchSuggestionAbstractProductsTransfer[]
     */
    public function getAbstractProducts()
    {
        return $this->abstractProducts;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @param \Generated\Shared\Transfer\RestCatalogSearchSuggestionAbstractProductsTransfer $abstractProduct
     *
     * @return $this
     */
    public function addAbstractProduct(RestCatalogSearchSuggestionAbstractProductsTransfer $abstractProduct)
    {
        $this->abstractProducts[] = $abstractProduct;
        $this->modifiedProperties[self::ABSTRACT_PRODUCTS] = true;

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAbstractProducts()
    {
        $this->assertCollectionPropertyIsSet(self::ABSTRACT_PRODUCTS);

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @deprecated Use categoryCollection instead.
     *
     * @param array|null $categories
     *
     * @return $this
     */
    public function setCategories(array $categories = null)
    {
        if ($categories === null) {
            $categories = [];
        }

        $this->categories = $categories;
        $this->modifiedProperties[self::CATEGORIES] = true;

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @deprecated Use categoryCollection instead.
     *
     * @return array
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @deprecated Use categoryCollection instead.
     *
     * @param mixed $categories
     *
     * @return $this
     */
    public function addCategories($categories)
    {
        $this->categories[] = $categories;
        $this->modifiedProperties[self::CATEGORIES] = true;

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use categoryCollection instead.
     *
     * @return $this
     */
    public function requireCategories()
    {
        $this->assertPropertyIsSet(self::CATEGORIES);

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @deprecated Use cmsPageCollection instead.
     *
     * @param array|null $cmsPages
     *
     * @return $this
     */
    public function setCmsPages(array $cmsPages = null)
    {
        if ($cmsPages === null) {
            $cmsPages = [];
        }

        $this->cmsPages = $cmsPages;
        $this->modifiedProperties[self::CMS_PAGES] = true;

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @deprecated Use cmsPageCollection instead.
     *
     * @return array
     */
    public function getCmsPages()
    {
        return $this->cmsPages;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @deprecated Use cmsPageCollection instead.
     *
     * @param mixed $cmsPages
     *
     * @return $this
     */
    public function addCmsPages($cmsPages)
    {
        $this->cmsPages[] = $cmsPages;
        $this->modifiedProperties[self::CMS_PAGES] = true;

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use cmsPageCollection instead.
     *
     * @return $this
     */
    public function requireCmsPages()
    {
        $this->assertPropertyIsSet(self::CMS_PAGES);

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\RestCatalogSearchSuggestionCategoriesTransfer[] $categoryCollection
     *
     * @return $this
     */
    public function setCategoryCollection(ArrayObject $categoryCollection)
    {
        $this->categoryCollection = $categoryCollection;
        $this->modifiedProperties[self::CATEGORY_COLLECTION] = true;

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\RestCatalogSearchSuggestionCategoriesTransfer[]
     */
    public function getCategoryCollection()
    {
        return $this->categoryCollection;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @param \Generated\Shared\Transfer\RestCatalogSearchSuggestionCategoriesTransfer $category
     *
     * @return $this
     */
    public function addCategory(RestCatalogSearchSuggestionCategoriesTransfer $category)
    {
        $this->categoryCollection[] = $category;
        $this->modifiedProperties[self::CATEGORY_COLLECTION] = true;

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCategoryCollection()
    {
        $this->assertCollectionPropertyIsSet(self::CATEGORY_COLLECTION);

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\RestCatalogSearchSuggestionCmsPagesTransfer[] $cmsPageCollection
     *
     * @return $this
     */
    public function setCmsPageCollection(ArrayObject $cmsPageCollection)
    {
        $this->cmsPageCollection = $cmsPageCollection;
        $this->modifiedProperties[self::CMS_PAGE_COLLECTION] = true;

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\RestCatalogSearchSuggestionCmsPagesTransfer[]
     */
    public function getCmsPageCollection()
    {
        return $this->cmsPageCollection;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @param \Generated\Shared\Transfer\RestCatalogSearchSuggestionCmsPagesTransfer $cmsPage
     *
     * @return $this
     */
    public function addCmsPage(RestCatalogSearchSuggestionCmsPagesTransfer $cmsPage)
    {
        $this->cmsPageCollection[] = $cmsPage;
        $this->modifiedProperties[self::CMS_PAGE_COLLECTION] = true;

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCmsPageCollection()
    {
        $this->assertCollectionPropertyIsSet(self::CMS_PAGE_COLLECTION);

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
                case 'completion':
                case 'categories':
                case 'cmsPages':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'abstractProducts':
                case 'categoryCollection':
                case 'cmsPageCollection':
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
                case 'completion':
                case 'categories':
                case 'cmsPages':
                    $values[$arrayKey] = $value;

                    break;
                case 'abstractProducts':
                case 'categoryCollection':
                case 'cmsPageCollection':
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
                case 'completion':
                case 'categories':
                case 'cmsPages':
                    $values[$arrayKey] = $value;

                    break;
                case 'abstractProducts':
                case 'categoryCollection':
                case 'cmsPageCollection':
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
        $this->abstractProducts = $this->abstractProducts ?: new ArrayObject();
        $this->categoryCollection = $this->categoryCollection ?: new ArrayObject();
        $this->cmsPageCollection = $this->cmsPageCollection ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'completion' => $this->completion,
            'categories' => $this->categories,
            'cmsPages' => $this->cmsPages,
            'abstractProducts' => $this->abstractProducts,
            'categoryCollection' => $this->categoryCollection,
            'cmsPageCollection' => $this->cmsPageCollection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'completion' => $this->completion,
            'categories' => $this->categories,
            'cms_pages' => $this->cmsPages,
            'abstract_products' => $this->abstractProducts,
            'category_collection' => $this->categoryCollection,
            'cms_page_collection' => $this->cmsPageCollection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'completion' => $this->completion instanceof AbstractTransfer ? $this->completion->toArray(true, false) : $this->completion,
            'categories' => $this->categories instanceof AbstractTransfer ? $this->categories->toArray(true, false) : $this->categories,
            'cms_pages' => $this->cmsPages instanceof AbstractTransfer ? $this->cmsPages->toArray(true, false) : $this->cmsPages,
            'abstract_products' => $this->abstractProducts instanceof AbstractTransfer ? $this->abstractProducts->toArray(true, false) : $this->addValuesToCollection($this->abstractProducts, true, false),
            'category_collection' => $this->categoryCollection instanceof AbstractTransfer ? $this->categoryCollection->toArray(true, false) : $this->addValuesToCollection($this->categoryCollection, true, false),
            'cms_page_collection' => $this->cmsPageCollection instanceof AbstractTransfer ? $this->cmsPageCollection->toArray(true, false) : $this->addValuesToCollection($this->cmsPageCollection, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'completion' => $this->completion instanceof AbstractTransfer ? $this->completion->toArray(true, true) : $this->completion,
            'categories' => $this->categories instanceof AbstractTransfer ? $this->categories->toArray(true, true) : $this->categories,
            'cmsPages' => $this->cmsPages instanceof AbstractTransfer ? $this->cmsPages->toArray(true, true) : $this->cmsPages,
            'abstractProducts' => $this->abstractProducts instanceof AbstractTransfer ? $this->abstractProducts->toArray(true, true) : $this->addValuesToCollection($this->abstractProducts, true, true),
            'categoryCollection' => $this->categoryCollection instanceof AbstractTransfer ? $this->categoryCollection->toArray(true, true) : $this->addValuesToCollection($this->categoryCollection, true, true),
            'cmsPageCollection' => $this->cmsPageCollection instanceof AbstractTransfer ? $this->cmsPageCollection->toArray(true, true) : $this->addValuesToCollection($this->cmsPageCollection, true, true),
        ];
    }
}
