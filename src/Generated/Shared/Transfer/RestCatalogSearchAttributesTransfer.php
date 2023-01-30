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
class RestCatalogSearchAttributesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SORT = 'sort';

    /**
     * @var string
     */
    public const PAGINATION = 'pagination';

    /**
     * @var string
     */
    public const ABSTRACT_PRODUCTS = 'abstractProducts';

    /**
     * @var string
     */
    public const VALUE_FACETS = 'valueFacets';

    /**
     * @var string
     */
    public const RANGE_FACETS = 'rangeFacets';

    /**
     * @var string
     */
    public const CATEGORY_TREE_FILTER = 'categoryTreeFilter';

    /**
     * @var string
     */
    public const SPELLING_SUGGESTION = 'spellingSuggestion';

    /**
     * @var \Generated\Shared\Transfer\RestCatalogSearchSortTransfer|null
     */
    protected $sort;

    /**
     * @var \Generated\Shared\Transfer\RestCatalogSearchPaginationTransfer|null
     */
    protected $pagination;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\RestCatalogSearchAbstractProductsTransfer[]
     */
    protected $abstractProducts;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\RestFacetSearchResultTransfer[]
     */
    protected $valueFacets;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\RestRangeSearchResultTransfer[]
     */
    protected $rangeFacets;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\RestCategoryNodeSearchResultAttributesTransfer[]
     */
    protected $categoryTreeFilter;

    /**
     * @var string|null
     */
    protected $spellingSuggestion;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'sort' => 'sort',
        'Sort' => 'sort',
        'pagination' => 'pagination',
        'Pagination' => 'pagination',
        'abstract_products' => 'abstractProducts',
        'abstractProducts' => 'abstractProducts',
        'AbstractProducts' => 'abstractProducts',
        'value_facets' => 'valueFacets',
        'valueFacets' => 'valueFacets',
        'ValueFacets' => 'valueFacets',
        'range_facets' => 'rangeFacets',
        'rangeFacets' => 'rangeFacets',
        'RangeFacets' => 'rangeFacets',
        'category_tree_filter' => 'categoryTreeFilter',
        'categoryTreeFilter' => 'categoryTreeFilter',
        'CategoryTreeFilter' => 'categoryTreeFilter',
        'spelling_suggestion' => 'spellingSuggestion',
        'spellingSuggestion' => 'spellingSuggestion',
        'SpellingSuggestion' => 'spellingSuggestion',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::SORT => [
            'type' => 'Generated\Shared\Transfer\RestCatalogSearchSortTransfer',
            'type_shim' => null,
            'name_underscore' => 'sort',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PAGINATION => [
            'type' => 'Generated\Shared\Transfer\RestCatalogSearchPaginationTransfer',
            'type_shim' => null,
            'name_underscore' => 'pagination',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ABSTRACT_PRODUCTS => [
            'type' => 'Generated\Shared\Transfer\RestCatalogSearchAbstractProductsTransfer',
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
        self::VALUE_FACETS => [
            'type' => 'Generated\Shared\Transfer\RestFacetSearchResultTransfer',
            'type_shim' => null,
            'name_underscore' => 'value_facets',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::RANGE_FACETS => [
            'type' => 'Generated\Shared\Transfer\RestRangeSearchResultTransfer',
            'type_shim' => null,
            'name_underscore' => 'range_facets',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CATEGORY_TREE_FILTER => [
            'type' => 'Generated\Shared\Transfer\RestCategoryNodeSearchResultAttributesTransfer',
            'type_shim' => null,
            'name_underscore' => 'category_tree_filter',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPELLING_SUGGESTION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'spelling_suggestion',
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
     * @module CatalogSearchRestApi
     *
     * @param \Generated\Shared\Transfer\RestCatalogSearchSortTransfer|null $sort
     *
     * @return $this
     */
    public function setSort(RestCatalogSearchSortTransfer $sort = null)
    {
        $this->sort = $sort;
        $this->modifiedProperties[self::SORT] = true;

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @return \Generated\Shared\Transfer\RestCatalogSearchSortTransfer|null
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @param \Generated\Shared\Transfer\RestCatalogSearchSortTransfer $sort
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSortOrFail(RestCatalogSearchSortTransfer $sort)
    {
        return $this->setSort($sort);
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\RestCatalogSearchSortTransfer
     */
    public function getSortOrFail()
    {
        if ($this->sort === null) {
            $this->throwNullValueException(static::SORT);
        }

        return $this->sort;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSort()
    {
        $this->assertPropertyIsSet(self::SORT);

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @param \Generated\Shared\Transfer\RestCatalogSearchPaginationTransfer|null $pagination
     *
     * @return $this
     */
    public function setPagination(RestCatalogSearchPaginationTransfer $pagination = null)
    {
        $this->pagination = $pagination;
        $this->modifiedProperties[self::PAGINATION] = true;

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @return \Generated\Shared\Transfer\RestCatalogSearchPaginationTransfer|null
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @param \Generated\Shared\Transfer\RestCatalogSearchPaginationTransfer $pagination
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPaginationOrFail(RestCatalogSearchPaginationTransfer $pagination)
    {
        return $this->setPagination($pagination);
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\RestCatalogSearchPaginationTransfer
     */
    public function getPaginationOrFail()
    {
        if ($this->pagination === null) {
            $this->throwNullValueException(static::PAGINATION);
        }

        return $this->pagination;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePagination()
    {
        $this->assertPropertyIsSet(self::PAGINATION);

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\RestCatalogSearchAbstractProductsTransfer[] $abstractProducts
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
     * @return \ArrayObject|\Generated\Shared\Transfer\RestCatalogSearchAbstractProductsTransfer[]
     */
    public function getAbstractProducts()
    {
        return $this->abstractProducts;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @param \Generated\Shared\Transfer\RestCatalogSearchAbstractProductsTransfer $abstractProduct
     *
     * @return $this
     */
    public function addAbstractProduct(RestCatalogSearchAbstractProductsTransfer $abstractProduct)
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
     * @param \ArrayObject|\Generated\Shared\Transfer\RestFacetSearchResultTransfer[] $valueFacets
     *
     * @return $this
     */
    public function setValueFacets(ArrayObject $valueFacets)
    {
        $this->valueFacets = $valueFacets;
        $this->modifiedProperties[self::VALUE_FACETS] = true;

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\RestFacetSearchResultTransfer[]
     */
    public function getValueFacets()
    {
        return $this->valueFacets;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @param \Generated\Shared\Transfer\RestFacetSearchResultTransfer $valueFacet
     *
     * @return $this
     */
    public function addValueFacet(RestFacetSearchResultTransfer $valueFacet)
    {
        $this->valueFacets[] = $valueFacet;
        $this->modifiedProperties[self::VALUE_FACETS] = true;

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireValueFacets()
    {
        $this->assertCollectionPropertyIsSet(self::VALUE_FACETS);

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\RestRangeSearchResultTransfer[] $rangeFacets
     *
     * @return $this
     */
    public function setRangeFacets(ArrayObject $rangeFacets)
    {
        $this->rangeFacets = $rangeFacets;
        $this->modifiedProperties[self::RANGE_FACETS] = true;

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\RestRangeSearchResultTransfer[]
     */
    public function getRangeFacets()
    {
        return $this->rangeFacets;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @param \Generated\Shared\Transfer\RestRangeSearchResultTransfer $rangeFacet
     *
     * @return $this
     */
    public function addRangeFacet(RestRangeSearchResultTransfer $rangeFacet)
    {
        $this->rangeFacets[] = $rangeFacet;
        $this->modifiedProperties[self::RANGE_FACETS] = true;

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRangeFacets()
    {
        $this->assertCollectionPropertyIsSet(self::RANGE_FACETS);

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\RestCategoryNodeSearchResultAttributesTransfer[] $categoryTreeFilter
     *
     * @return $this
     */
    public function setCategoryTreeFilter(ArrayObject $categoryTreeFilter)
    {
        $this->categoryTreeFilter = $categoryTreeFilter;
        $this->modifiedProperties[self::CATEGORY_TREE_FILTER] = true;

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\RestCategoryNodeSearchResultAttributesTransfer[]
     */
    public function getCategoryTreeFilter()
    {
        return $this->categoryTreeFilter;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @param \Generated\Shared\Transfer\RestCategoryNodeSearchResultAttributesTransfer $categoryTreeFilter
     *
     * @return $this
     */
    public function addCategoryTreeFilter(RestCategoryNodeSearchResultAttributesTransfer $categoryTreeFilter)
    {
        $this->categoryTreeFilter[] = $categoryTreeFilter;
        $this->modifiedProperties[self::CATEGORY_TREE_FILTER] = true;

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCategoryTreeFilter()
    {
        $this->assertCollectionPropertyIsSet(self::CATEGORY_TREE_FILTER);

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @param string|null $spellingSuggestion
     *
     * @return $this
     */
    public function setSpellingSuggestion($spellingSuggestion)
    {
        $this->spellingSuggestion = $spellingSuggestion;
        $this->modifiedProperties[self::SPELLING_SUGGESTION] = true;

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @return string|null
     */
    public function getSpellingSuggestion()
    {
        return $this->spellingSuggestion;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @param string|null $spellingSuggestion
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpellingSuggestionOrFail($spellingSuggestion)
    {
        if ($spellingSuggestion === null) {
            $this->throwNullValueException(static::SPELLING_SUGGESTION);
        }

        return $this->setSpellingSuggestion($spellingSuggestion);
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSpellingSuggestionOrFail()
    {
        if ($this->spellingSuggestion === null) {
            $this->throwNullValueException(static::SPELLING_SUGGESTION);
        }

        return $this->spellingSuggestion;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpellingSuggestion()
    {
        $this->assertPropertyIsSet(self::SPELLING_SUGGESTION);

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
                case 'spellingSuggestion':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'sort':
                case 'pagination':
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
                case 'abstractProducts':
                case 'valueFacets':
                case 'rangeFacets':
                case 'categoryTreeFilter':
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
                case 'spellingSuggestion':
                    $values[$arrayKey] = $value;

                    break;
                case 'sort':
                case 'pagination':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'abstractProducts':
                case 'valueFacets':
                case 'rangeFacets':
                case 'categoryTreeFilter':
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
                case 'spellingSuggestion':
                    $values[$arrayKey] = $value;

                    break;
                case 'sort':
                case 'pagination':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'abstractProducts':
                case 'valueFacets':
                case 'rangeFacets':
                case 'categoryTreeFilter':
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
        $this->valueFacets = $this->valueFacets ?: new ArrayObject();
        $this->rangeFacets = $this->rangeFacets ?: new ArrayObject();
        $this->categoryTreeFilter = $this->categoryTreeFilter ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'spellingSuggestion' => $this->spellingSuggestion,
            'sort' => $this->sort,
            'pagination' => $this->pagination,
            'abstractProducts' => $this->abstractProducts,
            'valueFacets' => $this->valueFacets,
            'rangeFacets' => $this->rangeFacets,
            'categoryTreeFilter' => $this->categoryTreeFilter,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'spelling_suggestion' => $this->spellingSuggestion,
            'sort' => $this->sort,
            'pagination' => $this->pagination,
            'abstract_products' => $this->abstractProducts,
            'value_facets' => $this->valueFacets,
            'range_facets' => $this->rangeFacets,
            'category_tree_filter' => $this->categoryTreeFilter,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'spelling_suggestion' => $this->spellingSuggestion instanceof AbstractTransfer ? $this->spellingSuggestion->toArray(true, false) : $this->spellingSuggestion,
            'sort' => $this->sort instanceof AbstractTransfer ? $this->sort->toArray(true, false) : $this->sort,
            'pagination' => $this->pagination instanceof AbstractTransfer ? $this->pagination->toArray(true, false) : $this->pagination,
            'abstract_products' => $this->abstractProducts instanceof AbstractTransfer ? $this->abstractProducts->toArray(true, false) : $this->addValuesToCollection($this->abstractProducts, true, false),
            'value_facets' => $this->valueFacets instanceof AbstractTransfer ? $this->valueFacets->toArray(true, false) : $this->addValuesToCollection($this->valueFacets, true, false),
            'range_facets' => $this->rangeFacets instanceof AbstractTransfer ? $this->rangeFacets->toArray(true, false) : $this->addValuesToCollection($this->rangeFacets, true, false),
            'category_tree_filter' => $this->categoryTreeFilter instanceof AbstractTransfer ? $this->categoryTreeFilter->toArray(true, false) : $this->addValuesToCollection($this->categoryTreeFilter, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'spellingSuggestion' => $this->spellingSuggestion instanceof AbstractTransfer ? $this->spellingSuggestion->toArray(true, true) : $this->spellingSuggestion,
            'sort' => $this->sort instanceof AbstractTransfer ? $this->sort->toArray(true, true) : $this->sort,
            'pagination' => $this->pagination instanceof AbstractTransfer ? $this->pagination->toArray(true, true) : $this->pagination,
            'abstractProducts' => $this->abstractProducts instanceof AbstractTransfer ? $this->abstractProducts->toArray(true, true) : $this->addValuesToCollection($this->abstractProducts, true, true),
            'valueFacets' => $this->valueFacets instanceof AbstractTransfer ? $this->valueFacets->toArray(true, true) : $this->addValuesToCollection($this->valueFacets, true, true),
            'rangeFacets' => $this->rangeFacets instanceof AbstractTransfer ? $this->rangeFacets->toArray(true, true) : $this->addValuesToCollection($this->rangeFacets, true, true),
            'categoryTreeFilter' => $this->categoryTreeFilter instanceof AbstractTransfer ? $this->categoryTreeFilter->toArray(true, true) : $this->addValuesToCollection($this->categoryTreeFilter, true, true),
        ];
    }
}
