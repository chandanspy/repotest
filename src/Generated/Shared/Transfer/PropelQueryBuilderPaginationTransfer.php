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
class PropelQueryBuilderPaginationTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const LIMIT = 'limit';

    /**
     * @var string
     */
    public const OFFSET = 'offset';

    /**
     * @deprecated Use limit/offset instead.
     */
    public const PAGE = 'page';

    /**
     * @deprecated Use limit/offset instead.
     */
    public const ITEMS_PER_PAGE = 'itemsPerPage';

    /**
     * @deprecated Not in use anymore.
     */
    public const TOTAL = 'total';

    /**
     * @var string
     */
    public const SORT_ITEMS = 'sortItems';

    /**
     * @var int|null
     */
    protected $limit;

    /**
     * @var int|null
     */
    protected $offset;

    /**
     * @var int|null
     */
    protected $page;

    /**
     * @var int|null
     */
    protected $itemsPerPage;

    /**
     * @var int|null
     */
    protected $total;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\PropelQueryBuilderSortTransfer[]
     */
    protected $sortItems;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'limit' => 'limit',
        'Limit' => 'limit',
        'offset' => 'offset',
        'Offset' => 'offset',
        'page' => 'page',
        'Page' => 'page',
        'items_per_page' => 'itemsPerPage',
        'itemsPerPage' => 'itemsPerPage',
        'ItemsPerPage' => 'itemsPerPage',
        'total' => 'total',
        'Total' => 'total',
        'sort_items' => 'sortItems',
        'sortItems' => 'sortItems',
        'SortItems' => 'sortItems',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::LIMIT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'limit',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::OFFSET => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'offset',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PAGE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'page',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ITEMS_PER_PAGE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'items_per_page',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TOTAL => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'total',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SORT_ITEMS => [
            'type' => 'Generated\Shared\Transfer\PropelQueryBuilderSortTransfer',
            'type_shim' => null,
            'name_underscore' => 'sort_items',
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
     * @module PropelQueryBuilder
     *
     * @param int|null $limit
     *
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
        $this->modifiedProperties[self::LIMIT] = true;

        return $this;
    }

    /**
     * @module PropelQueryBuilder
     *
     * @return int|null
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @module PropelQueryBuilder
     *
     * @param int|null $limit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLimitOrFail($limit)
    {
        if ($limit === null) {
            $this->throwNullValueException(static::LIMIT);
        }

        return $this->setLimit($limit);
    }

    /**
     * @module PropelQueryBuilder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getLimitOrFail()
    {
        if ($this->limit === null) {
            $this->throwNullValueException(static::LIMIT);
        }

        return $this->limit;
    }

    /**
     * @module PropelQueryBuilder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLimit()
    {
        $this->assertPropertyIsSet(self::LIMIT);

        return $this;
    }

    /**
     * @module PropelQueryBuilder
     *
     * @param int|null $offset
     *
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
        $this->modifiedProperties[self::OFFSET] = true;

        return $this;
    }

    /**
     * @module PropelQueryBuilder
     *
     * @return int|null
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @module PropelQueryBuilder
     *
     * @param int|null $offset
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOffsetOrFail($offset)
    {
        if ($offset === null) {
            $this->throwNullValueException(static::OFFSET);
        }

        return $this->setOffset($offset);
    }

    /**
     * @module PropelQueryBuilder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getOffsetOrFail()
    {
        if ($this->offset === null) {
            $this->throwNullValueException(static::OFFSET);
        }

        return $this->offset;
    }

    /**
     * @module PropelQueryBuilder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOffset()
    {
        $this->assertPropertyIsSet(self::OFFSET);

        return $this;
    }

    /**
     * @module PropelQueryBuilder
     *
     * @deprecated Use limit/offset instead.
     *
     * @param int|null $page
     *
     * @return $this
     */
    public function setPage($page)
    {
        $this->page = $page;
        $this->modifiedProperties[self::PAGE] = true;

        return $this;
    }

    /**
     * @module PropelQueryBuilder
     *
     * @deprecated Use limit/offset instead.
     *
     * @return int|null
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @module PropelQueryBuilder
     *
     * @deprecated Use limit/offset instead.
     *
     * @param int|null $page
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPageOrFail($page)
    {
        if ($page === null) {
            $this->throwNullValueException(static::PAGE);
        }

        return $this->setPage($page);
    }

    /**
     * @module PropelQueryBuilder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use limit/offset instead.
     *
     * @return int
     */
    public function getPageOrFail()
    {
        if ($this->page === null) {
            $this->throwNullValueException(static::PAGE);
        }

        return $this->page;
    }

    /**
     * @module PropelQueryBuilder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use limit/offset instead.
     *
     * @return $this
     */
    public function requirePage()
    {
        $this->assertPropertyIsSet(self::PAGE);

        return $this;
    }

    /**
     * @module PropelQueryBuilder
     *
     * @deprecated Use limit/offset instead.
     *
     * @param int|null $itemsPerPage
     *
     * @return $this
     */
    public function setItemsPerPage($itemsPerPage)
    {
        $this->itemsPerPage = $itemsPerPage;
        $this->modifiedProperties[self::ITEMS_PER_PAGE] = true;

        return $this;
    }

    /**
     * @module PropelQueryBuilder
     *
     * @deprecated Use limit/offset instead.
     *
     * @return int|null
     */
    public function getItemsPerPage()
    {
        return $this->itemsPerPage;
    }

    /**
     * @module PropelQueryBuilder
     *
     * @deprecated Use limit/offset instead.
     *
     * @param int|null $itemsPerPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setItemsPerPageOrFail($itemsPerPage)
    {
        if ($itemsPerPage === null) {
            $this->throwNullValueException(static::ITEMS_PER_PAGE);
        }

        return $this->setItemsPerPage($itemsPerPage);
    }

    /**
     * @module PropelQueryBuilder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use limit/offset instead.
     *
     * @return int
     */
    public function getItemsPerPageOrFail()
    {
        if ($this->itemsPerPage === null) {
            $this->throwNullValueException(static::ITEMS_PER_PAGE);
        }

        return $this->itemsPerPage;
    }

    /**
     * @module PropelQueryBuilder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use limit/offset instead.
     *
     * @return $this
     */
    public function requireItemsPerPage()
    {
        $this->assertPropertyIsSet(self::ITEMS_PER_PAGE);

        return $this;
    }

    /**
     * @module PropelQueryBuilder
     *
     * @deprecated Not in use anymore.
     *
     * @param int|null $total
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->total = $total;
        $this->modifiedProperties[self::TOTAL] = true;

        return $this;
    }

    /**
     * @module PropelQueryBuilder
     *
     * @deprecated Not in use anymore.
     *
     * @return int|null
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @module PropelQueryBuilder
     *
     * @deprecated Not in use anymore.
     *
     * @param int|null $total
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTotalOrFail($total)
    {
        if ($total === null) {
            $this->throwNullValueException(static::TOTAL);
        }

        return $this->setTotal($total);
    }

    /**
     * @module PropelQueryBuilder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Not in use anymore.
     *
     * @return int
     */
    public function getTotalOrFail()
    {
        if ($this->total === null) {
            $this->throwNullValueException(static::TOTAL);
        }

        return $this->total;
    }

    /**
     * @module PropelQueryBuilder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Not in use anymore.
     *
     * @return $this
     */
    public function requireTotal()
    {
        $this->assertPropertyIsSet(self::TOTAL);

        return $this;
    }

    /**
     * @module PropelQueryBuilder
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\PropelQueryBuilderSortTransfer[] $sortItems
     *
     * @return $this
     */
    public function setSortItems(ArrayObject $sortItems)
    {
        $this->sortItems = $sortItems;
        $this->modifiedProperties[self::SORT_ITEMS] = true;

        return $this;
    }

    /**
     * @module PropelQueryBuilder
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\PropelQueryBuilderSortTransfer[]
     */
    public function getSortItems()
    {
        return $this->sortItems;
    }

    /**
     * @module PropelQueryBuilder
     *
     * @param \Generated\Shared\Transfer\PropelQueryBuilderSortTransfer $sortItem
     *
     * @return $this
     */
    public function addSortItem(PropelQueryBuilderSortTransfer $sortItem)
    {
        $this->sortItems[] = $sortItem;
        $this->modifiedProperties[self::SORT_ITEMS] = true;

        return $this;
    }

    /**
     * @module PropelQueryBuilder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSortItems()
    {
        $this->assertCollectionPropertyIsSet(self::SORT_ITEMS);

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
                case 'limit':
                case 'offset':
                case 'page':
                case 'itemsPerPage':
                case 'total':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'sortItems':
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
                case 'limit':
                case 'offset':
                case 'page':
                case 'itemsPerPage':
                case 'total':
                    $values[$arrayKey] = $value;

                    break;
                case 'sortItems':
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
                case 'limit':
                case 'offset':
                case 'page':
                case 'itemsPerPage':
                case 'total':
                    $values[$arrayKey] = $value;

                    break;
                case 'sortItems':
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
        $this->sortItems = $this->sortItems ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'limit' => $this->limit,
            'offset' => $this->offset,
            'page' => $this->page,
            'itemsPerPage' => $this->itemsPerPage,
            'total' => $this->total,
            'sortItems' => $this->sortItems,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'limit' => $this->limit,
            'offset' => $this->offset,
            'page' => $this->page,
            'items_per_page' => $this->itemsPerPage,
            'total' => $this->total,
            'sort_items' => $this->sortItems,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'limit' => $this->limit instanceof AbstractTransfer ? $this->limit->toArray(true, false) : $this->limit,
            'offset' => $this->offset instanceof AbstractTransfer ? $this->offset->toArray(true, false) : $this->offset,
            'page' => $this->page instanceof AbstractTransfer ? $this->page->toArray(true, false) : $this->page,
            'items_per_page' => $this->itemsPerPage instanceof AbstractTransfer ? $this->itemsPerPage->toArray(true, false) : $this->itemsPerPage,
            'total' => $this->total instanceof AbstractTransfer ? $this->total->toArray(true, false) : $this->total,
            'sort_items' => $this->sortItems instanceof AbstractTransfer ? $this->sortItems->toArray(true, false) : $this->addValuesToCollection($this->sortItems, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'limit' => $this->limit instanceof AbstractTransfer ? $this->limit->toArray(true, true) : $this->limit,
            'offset' => $this->offset instanceof AbstractTransfer ? $this->offset->toArray(true, true) : $this->offset,
            'page' => $this->page instanceof AbstractTransfer ? $this->page->toArray(true, true) : $this->page,
            'itemsPerPage' => $this->itemsPerPage instanceof AbstractTransfer ? $this->itemsPerPage->toArray(true, true) : $this->itemsPerPage,
            'total' => $this->total instanceof AbstractTransfer ? $this->total->toArray(true, true) : $this->total,
            'sortItems' => $this->sortItems instanceof AbstractTransfer ? $this->sortItems->toArray(true, true) : $this->addValuesToCollection($this->sortItems, true, true),
        ];
    }
}
