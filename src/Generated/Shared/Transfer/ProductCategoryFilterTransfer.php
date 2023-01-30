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
class ProductCategoryFilterTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_CATEGORY_FILTER = 'idProductCategoryFilter';

    /**
     * @var string
     */
    public const FILTERS = 'filters';

    /**
     * @var string
     */
    public const FILTER_DATA_ARRAY = 'filterDataArray';

    /**
     * @var string
     */
    public const FK_CATEGORY = 'fkCategory';

    /**
     * @var string
     */
    public const FILTER_DATA = 'filterData';

    /**
     * @var int|null
     */
    protected $idProductCategoryFilter;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ProductCategoryFilterItemTransfer[]
     */
    protected $filters;

    /**
     * @var array
     */
    protected $filterDataArray = [];

    /**
     * @var int|null
     */
    protected $fkCategory;

    /**
     * @var string|null
     */
    protected $filterData;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_category_filter' => 'idProductCategoryFilter',
        'idProductCategoryFilter' => 'idProductCategoryFilter',
        'IdProductCategoryFilter' => 'idProductCategoryFilter',
        'filters' => 'filters',
        'Filters' => 'filters',
        'filter_data_array' => 'filterDataArray',
        'filterDataArray' => 'filterDataArray',
        'FilterDataArray' => 'filterDataArray',
        'fk_category' => 'fkCategory',
        'fkCategory' => 'fkCategory',
        'FkCategory' => 'fkCategory',
        'filter_data' => 'filterData',
        'filterData' => 'filterData',
        'FilterData' => 'filterData',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_CATEGORY_FILTER => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_category_filter',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FILTERS => [
            'type' => 'Generated\Shared\Transfer\ProductCategoryFilterItemTransfer',
            'type_shim' => null,
            'name_underscore' => 'filters',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FILTER_DATA_ARRAY => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'filter_data_array',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_CATEGORY => [
            'type' => 'int',
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
        self::FILTER_DATA => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'filter_data',
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
     * @module ProductCategoryFilterGui|ProductCategoryFilter
     *
     * @param int|null $idProductCategoryFilter
     *
     * @return $this
     */
    public function setIdProductCategoryFilter($idProductCategoryFilter)
    {
        $this->idProductCategoryFilter = $idProductCategoryFilter;
        $this->modifiedProperties[self::ID_PRODUCT_CATEGORY_FILTER] = true;

        return $this;
    }

    /**
     * @module ProductCategoryFilterGui|ProductCategoryFilter
     *
     * @return int|null
     */
    public function getIdProductCategoryFilter()
    {
        return $this->idProductCategoryFilter;
    }

    /**
     * @module ProductCategoryFilterGui|ProductCategoryFilter
     *
     * @param int|null $idProductCategoryFilter
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductCategoryFilterOrFail($idProductCategoryFilter)
    {
        if ($idProductCategoryFilter === null) {
            $this->throwNullValueException(static::ID_PRODUCT_CATEGORY_FILTER);
        }

        return $this->setIdProductCategoryFilter($idProductCategoryFilter);
    }

    /**
     * @module ProductCategoryFilterGui|ProductCategoryFilter
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductCategoryFilterOrFail()
    {
        if ($this->idProductCategoryFilter === null) {
            $this->throwNullValueException(static::ID_PRODUCT_CATEGORY_FILTER);
        }

        return $this->idProductCategoryFilter;
    }

    /**
     * @module ProductCategoryFilterGui|ProductCategoryFilter
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductCategoryFilter()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_CATEGORY_FILTER);

        return $this;
    }

    /**
     * @module ProductCategoryFilterGui|ProductCategoryFilter
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ProductCategoryFilterItemTransfer[] $filters
     *
     * @return $this
     */
    public function setFilters(ArrayObject $filters)
    {
        $this->filters = $filters;
        $this->modifiedProperties[self::FILTERS] = true;

        return $this;
    }

    /**
     * @module ProductCategoryFilterGui|ProductCategoryFilter
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ProductCategoryFilterItemTransfer[]
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * @module ProductCategoryFilterGui|ProductCategoryFilter
     *
     * @param \Generated\Shared\Transfer\ProductCategoryFilterItemTransfer $productCategoryFilterItem
     *
     * @return $this
     */
    public function addProductCategoryFilterItem(ProductCategoryFilterItemTransfer $productCategoryFilterItem)
    {
        $this->filters[] = $productCategoryFilterItem;
        $this->modifiedProperties[self::FILTERS] = true;

        return $this;
    }

    /**
     * @module ProductCategoryFilterGui|ProductCategoryFilter
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFilters()
    {
        $this->assertCollectionPropertyIsSet(self::FILTERS);

        return $this;
    }

    /**
     * @module ProductCategoryFilterGui|ProductCategoryFilter
     *
     * @param array|null $filterDataArray
     *
     * @return $this
     */
    public function setFilterDataArray(array $filterDataArray = null)
    {
        if ($filterDataArray === null) {
            $filterDataArray = [];
        }

        $this->filterDataArray = $filterDataArray;
        $this->modifiedProperties[self::FILTER_DATA_ARRAY] = true;

        return $this;
    }

    /**
     * @module ProductCategoryFilterGui|ProductCategoryFilter
     *
     * @return array
     */
    public function getFilterDataArray()
    {
        return $this->filterDataArray;
    }

    /**
     * @module ProductCategoryFilterGui|ProductCategoryFilter
     *
     * @param mixed $filterDataArray
     *
     * @return $this
     */
    public function addFilterDataArray($filterDataArray)
    {
        $this->filterDataArray[] = $filterDataArray;
        $this->modifiedProperties[self::FILTER_DATA_ARRAY] = true;

        return $this;
    }

    /**
     * @module ProductCategoryFilterGui|ProductCategoryFilter
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFilterDataArray()
    {
        $this->assertPropertyIsSet(self::FILTER_DATA_ARRAY);

        return $this;
    }

    /**
     * @module ProductCategoryFilterGui|ProductCategoryFilter
     *
     * @param int|null $fkCategory
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
     * @module ProductCategoryFilterGui|ProductCategoryFilter
     *
     * @return int|null
     */
    public function getFkCategory()
    {
        return $this->fkCategory;
    }

    /**
     * @module ProductCategoryFilterGui|ProductCategoryFilter
     *
     * @param int|null $fkCategory
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
     * @module ProductCategoryFilterGui|ProductCategoryFilter
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkCategoryOrFail()
    {
        if ($this->fkCategory === null) {
            $this->throwNullValueException(static::FK_CATEGORY);
        }

        return $this->fkCategory;
    }

    /**
     * @module ProductCategoryFilterGui|ProductCategoryFilter
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
     * @module ProductCategoryFilterGui|ProductCategoryFilter
     *
     * @param string|null $filterData
     *
     * @return $this
     */
    public function setFilterData($filterData)
    {
        $this->filterData = $filterData;
        $this->modifiedProperties[self::FILTER_DATA] = true;

        return $this;
    }

    /**
     * @module ProductCategoryFilterGui|ProductCategoryFilter
     *
     * @return string|null
     */
    public function getFilterData()
    {
        return $this->filterData;
    }

    /**
     * @module ProductCategoryFilterGui|ProductCategoryFilter
     *
     * @param string|null $filterData
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFilterDataOrFail($filterData)
    {
        if ($filterData === null) {
            $this->throwNullValueException(static::FILTER_DATA);
        }

        return $this->setFilterData($filterData);
    }

    /**
     * @module ProductCategoryFilterGui|ProductCategoryFilter
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getFilterDataOrFail()
    {
        if ($this->filterData === null) {
            $this->throwNullValueException(static::FILTER_DATA);
        }

        return $this->filterData;
    }

    /**
     * @module ProductCategoryFilterGui|ProductCategoryFilter
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFilterData()
    {
        $this->assertPropertyIsSet(self::FILTER_DATA);

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
                case 'idProductCategoryFilter':
                case 'filterDataArray':
                case 'fkCategory':
                case 'filterData':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'filters':
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
                case 'idProductCategoryFilter':
                case 'filterDataArray':
                case 'fkCategory':
                case 'filterData':
                    $values[$arrayKey] = $value;

                    break;
                case 'filters':
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
                case 'idProductCategoryFilter':
                case 'filterDataArray':
                case 'fkCategory':
                case 'filterData':
                    $values[$arrayKey] = $value;

                    break;
                case 'filters':
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
        $this->filters = $this->filters ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idProductCategoryFilter' => $this->idProductCategoryFilter,
            'filterDataArray' => $this->filterDataArray,
            'fkCategory' => $this->fkCategory,
            'filterData' => $this->filterData,
            'filters' => $this->filters,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_category_filter' => $this->idProductCategoryFilter,
            'filter_data_array' => $this->filterDataArray,
            'fk_category' => $this->fkCategory,
            'filter_data' => $this->filterData,
            'filters' => $this->filters,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_category_filter' => $this->idProductCategoryFilter instanceof AbstractTransfer ? $this->idProductCategoryFilter->toArray(true, false) : $this->idProductCategoryFilter,
            'filter_data_array' => $this->filterDataArray instanceof AbstractTransfer ? $this->filterDataArray->toArray(true, false) : $this->filterDataArray,
            'fk_category' => $this->fkCategory instanceof AbstractTransfer ? $this->fkCategory->toArray(true, false) : $this->fkCategory,
            'filter_data' => $this->filterData instanceof AbstractTransfer ? $this->filterData->toArray(true, false) : $this->filterData,
            'filters' => $this->filters instanceof AbstractTransfer ? $this->filters->toArray(true, false) : $this->addValuesToCollection($this->filters, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductCategoryFilter' => $this->idProductCategoryFilter instanceof AbstractTransfer ? $this->idProductCategoryFilter->toArray(true, true) : $this->idProductCategoryFilter,
            'filterDataArray' => $this->filterDataArray instanceof AbstractTransfer ? $this->filterDataArray->toArray(true, true) : $this->filterDataArray,
            'fkCategory' => $this->fkCategory instanceof AbstractTransfer ? $this->fkCategory->toArray(true, true) : $this->fkCategory,
            'filterData' => $this->filterData instanceof AbstractTransfer ? $this->filterData->toArray(true, true) : $this->filterData,
            'filters' => $this->filters instanceof AbstractTransfer ? $this->filters->toArray(true, true) : $this->addValuesToCollection($this->filters, true, true),
        ];
    }
}
