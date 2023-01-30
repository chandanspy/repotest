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
class FilterTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ORDER_BY = 'orderBy';

    /**
     * @var string
     */
    public const ORDER_DIRECTION = 'orderDirection';

    /**
     * @var string
     */
    public const LIMIT = 'limit';

    /**
     * @var string
     */
    public const OFFSET = 'offset';

    /**
     * @var string|null
     */
    protected $orderBy;

    /**
     * @var string|null
     */
    protected $orderDirection;

    /**
     * @var int|null
     */
    protected $limit;

    /**
     * @var int|null
     */
    protected $offset;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'order_by' => 'orderBy',
        'orderBy' => 'orderBy',
        'OrderBy' => 'orderBy',
        'order_direction' => 'orderDirection',
        'orderDirection' => 'orderDirection',
        'OrderDirection' => 'orderDirection',
        'limit' => 'limit',
        'Limit' => 'limit',
        'offset' => 'offset',
        'Offset' => 'offset',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ORDER_BY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'order_by',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ORDER_DIRECTION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'order_direction',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
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
    ];

    /**
     * @module CompanyPage|CompanyUserInvitationPage|CustomerPage|SalesReturnPage|ShoppingListPage|CategoryPageSearch|CategoryStorage|CmsSlotBlockGui|CmsSlotBlockStorage|CmsSlotBlock|CmsSlotStorage|CmsSlot|CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyGui|CompanyRole|CompanyUnitAddress|CompanyUserInvitation|CompanyUserStorage|CompanyUser|Company|ConfigurableBundleStorage|ConfigurableBundle|CustomerAccessStorage|FileManagerStorage|GlossaryStorage|Kernel|Merchant|MultiCart|OrdersRestApi|PriceProductMerchantRelationshipStorage|ProductAttribute|ProductAttributesRestApi|ProductBundleStorage|ProductBundle|ProductCategoryStorage|ProductDiscontinuedStorage|ProductLabelStorage|ProductListStorage|ProductMeasurementUnitStorage|ProductPackagingUnitStorage|ProductPageSearch|ProductQuantityStorage|ProductRelationStorage|Propel|SalesInvoice|SalesReturn|Sales|ShoppingListStorage|ShoppingList
     *
     * @param string|null $orderBy
     *
     * @return $this
     */
    public function setOrderBy($orderBy)
    {
        $this->orderBy = $orderBy;
        $this->modifiedProperties[self::ORDER_BY] = true;

        return $this;
    }

    /**
     * @module CompanyPage|CompanyUserInvitationPage|CustomerPage|SalesReturnPage|ShoppingListPage|CategoryPageSearch|CategoryStorage|CmsSlotBlockGui|CmsSlotBlockStorage|CmsSlotBlock|CmsSlotStorage|CmsSlot|CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyGui|CompanyRole|CompanyUnitAddress|CompanyUserInvitation|CompanyUserStorage|CompanyUser|Company|ConfigurableBundleStorage|ConfigurableBundle|CustomerAccessStorage|FileManagerStorage|GlossaryStorage|Kernel|Merchant|MultiCart|OrdersRestApi|PriceProductMerchantRelationshipStorage|ProductAttribute|ProductAttributesRestApi|ProductBundleStorage|ProductBundle|ProductCategoryStorage|ProductDiscontinuedStorage|ProductLabelStorage|ProductListStorage|ProductMeasurementUnitStorage|ProductPackagingUnitStorage|ProductPageSearch|ProductQuantityStorage|ProductRelationStorage|Propel|SalesInvoice|SalesReturn|Sales|ShoppingListStorage|ShoppingList
     *
     * @return string|null
     */
    public function getOrderBy()
    {
        return $this->orderBy;
    }

    /**
     * @module CompanyPage|CompanyUserInvitationPage|CustomerPage|SalesReturnPage|ShoppingListPage|CategoryPageSearch|CategoryStorage|CmsSlotBlockGui|CmsSlotBlockStorage|CmsSlotBlock|CmsSlotStorage|CmsSlot|CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyGui|CompanyRole|CompanyUnitAddress|CompanyUserInvitation|CompanyUserStorage|CompanyUser|Company|ConfigurableBundleStorage|ConfigurableBundle|CustomerAccessStorage|FileManagerStorage|GlossaryStorage|Kernel|Merchant|MultiCart|OrdersRestApi|PriceProductMerchantRelationshipStorage|ProductAttribute|ProductAttributesRestApi|ProductBundleStorage|ProductBundle|ProductCategoryStorage|ProductDiscontinuedStorage|ProductLabelStorage|ProductListStorage|ProductMeasurementUnitStorage|ProductPackagingUnitStorage|ProductPageSearch|ProductQuantityStorage|ProductRelationStorage|Propel|SalesInvoice|SalesReturn|Sales|ShoppingListStorage|ShoppingList
     *
     * @param string|null $orderBy
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOrderByOrFail($orderBy)
    {
        if ($orderBy === null) {
            $this->throwNullValueException(static::ORDER_BY);
        }

        return $this->setOrderBy($orderBy);
    }

    /**
     * @module CompanyPage|CompanyUserInvitationPage|CustomerPage|SalesReturnPage|ShoppingListPage|CategoryPageSearch|CategoryStorage|CmsSlotBlockGui|CmsSlotBlockStorage|CmsSlotBlock|CmsSlotStorage|CmsSlot|CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyGui|CompanyRole|CompanyUnitAddress|CompanyUserInvitation|CompanyUserStorage|CompanyUser|Company|ConfigurableBundleStorage|ConfigurableBundle|CustomerAccessStorage|FileManagerStorage|GlossaryStorage|Kernel|Merchant|MultiCart|OrdersRestApi|PriceProductMerchantRelationshipStorage|ProductAttribute|ProductAttributesRestApi|ProductBundleStorage|ProductBundle|ProductCategoryStorage|ProductDiscontinuedStorage|ProductLabelStorage|ProductListStorage|ProductMeasurementUnitStorage|ProductPackagingUnitStorage|ProductPageSearch|ProductQuantityStorage|ProductRelationStorage|Propel|SalesInvoice|SalesReturn|Sales|ShoppingListStorage|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getOrderByOrFail()
    {
        if ($this->orderBy === null) {
            $this->throwNullValueException(static::ORDER_BY);
        }

        return $this->orderBy;
    }

    /**
     * @module CompanyPage|CompanyUserInvitationPage|CustomerPage|SalesReturnPage|ShoppingListPage|CategoryPageSearch|CategoryStorage|CmsSlotBlockGui|CmsSlotBlockStorage|CmsSlotBlock|CmsSlotStorage|CmsSlot|CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyGui|CompanyRole|CompanyUnitAddress|CompanyUserInvitation|CompanyUserStorage|CompanyUser|Company|ConfigurableBundleStorage|ConfigurableBundle|CustomerAccessStorage|FileManagerStorage|GlossaryStorage|Kernel|Merchant|MultiCart|OrdersRestApi|PriceProductMerchantRelationshipStorage|ProductAttribute|ProductAttributesRestApi|ProductBundleStorage|ProductBundle|ProductCategoryStorage|ProductDiscontinuedStorage|ProductLabelStorage|ProductListStorage|ProductMeasurementUnitStorage|ProductPackagingUnitStorage|ProductPageSearch|ProductQuantityStorage|ProductRelationStorage|Propel|SalesInvoice|SalesReturn|Sales|ShoppingListStorage|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOrderBy()
    {
        $this->assertPropertyIsSet(self::ORDER_BY);

        return $this;
    }

    /**
     * @module CompanyPage|CompanyUserInvitationPage|CustomerPage|SalesReturnPage|ShoppingListPage|CmsSlotBlock|CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyGui|CompanyRole|CompanyUnitAddress|CompanyUserInvitation|CompanyUser|Company|FileManagerStorage|Kernel|Merchant|MultiCart|OrdersRestApi|PriceProductMerchantRelationshipStorage|ProductAttribute|ProductAttributesRestApi|Propel|SalesInvoice|SalesReturn|Sales|ShoppingList
     *
     * @param string|null $orderDirection
     *
     * @return $this
     */
    public function setOrderDirection($orderDirection)
    {
        $this->orderDirection = $orderDirection;
        $this->modifiedProperties[self::ORDER_DIRECTION] = true;

        return $this;
    }

    /**
     * @module CompanyPage|CompanyUserInvitationPage|CustomerPage|SalesReturnPage|ShoppingListPage|CmsSlotBlock|CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyGui|CompanyRole|CompanyUnitAddress|CompanyUserInvitation|CompanyUser|Company|FileManagerStorage|Kernel|Merchant|MultiCart|OrdersRestApi|PriceProductMerchantRelationshipStorage|ProductAttribute|ProductAttributesRestApi|Propel|SalesInvoice|SalesReturn|Sales|ShoppingList
     *
     * @return string|null
     */
    public function getOrderDirection()
    {
        return $this->orderDirection;
    }

    /**
     * @module CompanyPage|CompanyUserInvitationPage|CustomerPage|SalesReturnPage|ShoppingListPage|CmsSlotBlock|CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyGui|CompanyRole|CompanyUnitAddress|CompanyUserInvitation|CompanyUser|Company|FileManagerStorage|Kernel|Merchant|MultiCart|OrdersRestApi|PriceProductMerchantRelationshipStorage|ProductAttribute|ProductAttributesRestApi|Propel|SalesInvoice|SalesReturn|Sales|ShoppingList
     *
     * @param string|null $orderDirection
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOrderDirectionOrFail($orderDirection)
    {
        if ($orderDirection === null) {
            $this->throwNullValueException(static::ORDER_DIRECTION);
        }

        return $this->setOrderDirection($orderDirection);
    }

    /**
     * @module CompanyPage|CompanyUserInvitationPage|CustomerPage|SalesReturnPage|ShoppingListPage|CmsSlotBlock|CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyGui|CompanyRole|CompanyUnitAddress|CompanyUserInvitation|CompanyUser|Company|FileManagerStorage|Kernel|Merchant|MultiCart|OrdersRestApi|PriceProductMerchantRelationshipStorage|ProductAttribute|ProductAttributesRestApi|Propel|SalesInvoice|SalesReturn|Sales|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getOrderDirectionOrFail()
    {
        if ($this->orderDirection === null) {
            $this->throwNullValueException(static::ORDER_DIRECTION);
        }

        return $this->orderDirection;
    }

    /**
     * @module CompanyPage|CompanyUserInvitationPage|CustomerPage|SalesReturnPage|ShoppingListPage|CmsSlotBlock|CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyGui|CompanyRole|CompanyUnitAddress|CompanyUserInvitation|CompanyUser|Company|FileManagerStorage|Kernel|Merchant|MultiCart|OrdersRestApi|PriceProductMerchantRelationshipStorage|ProductAttribute|ProductAttributesRestApi|Propel|SalesInvoice|SalesReturn|Sales|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOrderDirection()
    {
        $this->assertPropertyIsSet(self::ORDER_DIRECTION);

        return $this;
    }

    /**
     * @module CustomerPage|SalesReturnPage|AssetStorage|CategoryImageStorage|CategoryPageSearch|CategoryStorage|CmsSlotBlockGui|CmsSlotBlockStorage|CmsSlotBlock|CmsSlotStorage|CmsSlot|CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyGui|CompanyRole|CompanyUnitAddress|CompanyUserStorage|CompanyUser|CompanyUsersRestApi|Company|ConfigurableBundlePageSearch|ConfigurableBundleStorage|ConfigurableBundle|ContentStorage|CustomerAccessStorage|FileManagerStorage|GlossaryStorage|Kernel|Merchant|OrdersRestApi|PriceProductMerchantRelationshipStorage|PriceProductSchedule|ProductAlternativeStorage|ProductAttribute|ProductAttributesRestApi|ProductBundleStorage|ProductBundle|ProductCategoryStorage|ProductDiscontinuedStorage|ProductLabelStorage|ProductLabel|ProductListStorage|ProductMeasurementUnitStorage|ProductPackagingUnitStorage|ProductPageSearch|ProductQuantityStorage|ProductRelationStorage|ProductRelation|ProductReview|ProductReviewsRestApi|Propel|SalesInvoice|SalesReturnSearch|SalesReturn|SalesReturnsRestApi|Sales|ShoppingListStorage
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
     * @module CustomerPage|SalesReturnPage|AssetStorage|CategoryImageStorage|CategoryPageSearch|CategoryStorage|CmsSlotBlockGui|CmsSlotBlockStorage|CmsSlotBlock|CmsSlotStorage|CmsSlot|CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyGui|CompanyRole|CompanyUnitAddress|CompanyUserStorage|CompanyUser|CompanyUsersRestApi|Company|ConfigurableBundlePageSearch|ConfigurableBundleStorage|ConfigurableBundle|ContentStorage|CustomerAccessStorage|FileManagerStorage|GlossaryStorage|Kernel|Merchant|OrdersRestApi|PriceProductMerchantRelationshipStorage|PriceProductSchedule|ProductAlternativeStorage|ProductAttribute|ProductAttributesRestApi|ProductBundleStorage|ProductBundle|ProductCategoryStorage|ProductDiscontinuedStorage|ProductLabelStorage|ProductLabel|ProductListStorage|ProductMeasurementUnitStorage|ProductPackagingUnitStorage|ProductPageSearch|ProductQuantityStorage|ProductRelationStorage|ProductRelation|ProductReview|ProductReviewsRestApi|Propel|SalesInvoice|SalesReturnSearch|SalesReturn|SalesReturnsRestApi|Sales|ShoppingListStorage
     *
     * @return int|null
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @module CustomerPage|SalesReturnPage|AssetStorage|CategoryImageStorage|CategoryPageSearch|CategoryStorage|CmsSlotBlockGui|CmsSlotBlockStorage|CmsSlotBlock|CmsSlotStorage|CmsSlot|CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyGui|CompanyRole|CompanyUnitAddress|CompanyUserStorage|CompanyUser|CompanyUsersRestApi|Company|ConfigurableBundlePageSearch|ConfigurableBundleStorage|ConfigurableBundle|ContentStorage|CustomerAccessStorage|FileManagerStorage|GlossaryStorage|Kernel|Merchant|OrdersRestApi|PriceProductMerchantRelationshipStorage|PriceProductSchedule|ProductAlternativeStorage|ProductAttribute|ProductAttributesRestApi|ProductBundleStorage|ProductBundle|ProductCategoryStorage|ProductDiscontinuedStorage|ProductLabelStorage|ProductLabel|ProductListStorage|ProductMeasurementUnitStorage|ProductPackagingUnitStorage|ProductPageSearch|ProductQuantityStorage|ProductRelationStorage|ProductRelation|ProductReview|ProductReviewsRestApi|Propel|SalesInvoice|SalesReturnSearch|SalesReturn|SalesReturnsRestApi|Sales|ShoppingListStorage
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
     * @module CustomerPage|SalesReturnPage|AssetStorage|CategoryImageStorage|CategoryPageSearch|CategoryStorage|CmsSlotBlockGui|CmsSlotBlockStorage|CmsSlotBlock|CmsSlotStorage|CmsSlot|CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyGui|CompanyRole|CompanyUnitAddress|CompanyUserStorage|CompanyUser|CompanyUsersRestApi|Company|ConfigurableBundlePageSearch|ConfigurableBundleStorage|ConfigurableBundle|ContentStorage|CustomerAccessStorage|FileManagerStorage|GlossaryStorage|Kernel|Merchant|OrdersRestApi|PriceProductMerchantRelationshipStorage|PriceProductSchedule|ProductAlternativeStorage|ProductAttribute|ProductAttributesRestApi|ProductBundleStorage|ProductBundle|ProductCategoryStorage|ProductDiscontinuedStorage|ProductLabelStorage|ProductLabel|ProductListStorage|ProductMeasurementUnitStorage|ProductPackagingUnitStorage|ProductPageSearch|ProductQuantityStorage|ProductRelationStorage|ProductRelation|ProductReview|ProductReviewsRestApi|Propel|SalesInvoice|SalesReturnSearch|SalesReturn|SalesReturnsRestApi|Sales|ShoppingListStorage
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
     * @module CustomerPage|SalesReturnPage|AssetStorage|CategoryImageStorage|CategoryPageSearch|CategoryStorage|CmsSlotBlockGui|CmsSlotBlockStorage|CmsSlotBlock|CmsSlotStorage|CmsSlot|CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyGui|CompanyRole|CompanyUnitAddress|CompanyUserStorage|CompanyUser|CompanyUsersRestApi|Company|ConfigurableBundlePageSearch|ConfigurableBundleStorage|ConfigurableBundle|ContentStorage|CustomerAccessStorage|FileManagerStorage|GlossaryStorage|Kernel|Merchant|OrdersRestApi|PriceProductMerchantRelationshipStorage|PriceProductSchedule|ProductAlternativeStorage|ProductAttribute|ProductAttributesRestApi|ProductBundleStorage|ProductBundle|ProductCategoryStorage|ProductDiscontinuedStorage|ProductLabelStorage|ProductLabel|ProductListStorage|ProductMeasurementUnitStorage|ProductPackagingUnitStorage|ProductPageSearch|ProductQuantityStorage|ProductRelationStorage|ProductRelation|ProductReview|ProductReviewsRestApi|Propel|SalesInvoice|SalesReturnSearch|SalesReturn|SalesReturnsRestApi|Sales|ShoppingListStorage
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
     * @module CustomerPage|SalesReturnPage|AssetStorage|CategoryImageStorage|CategoryPageSearch|CategoryStorage|CmsSlotBlockStorage|CmsSlotBlock|CmsSlotStorage|CmsSlot|CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyGui|CompanyRole|CompanyUnitAddress|CompanyUserStorage|CompanyUser|CompanyUsersRestApi|Company|ConfigurableBundlePageSearch|ConfigurableBundleStorage|ConfigurableBundle|ContentStorage|CustomerAccessStorage|FileManagerStorage|GlossaryStorage|Kernel|Merchant|OrdersRestApi|PriceProductMerchantRelationshipStorage|ProductAlternativeStorage|ProductAttribute|ProductAttributesRestApi|ProductBundleStorage|ProductBundle|ProductCategoryStorage|ProductDiscontinuedStorage|ProductLabelStorage|ProductLabel|ProductListStorage|ProductMeasurementUnitStorage|ProductPackagingUnitStorage|ProductPageSearch|ProductQuantityStorage|ProductRelationStorage|ProductRelation|ProductReview|ProductReviewsRestApi|Propel|SalesInvoice|SalesReturnSearch|SalesReturn|SalesReturnsRestApi|Sales|ShoppingListStorage
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
     * @module CustomerPage|SalesReturnPage|AssetStorage|CategoryImageStorage|CategoryPageSearch|CategoryStorage|CmsSlotBlockStorage|CmsSlotBlock|CmsSlotStorage|CmsSlot|CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyGui|CompanyRole|CompanyUnitAddress|CompanyUserStorage|CompanyUser|CompanyUsersRestApi|Company|ConfigurableBundlePageSearch|ConfigurableBundleStorage|ConfigurableBundle|ContentStorage|CustomerAccessStorage|FileManagerStorage|GlossaryStorage|Kernel|Merchant|OrdersRestApi|PriceProductMerchantRelationshipStorage|ProductAlternativeStorage|ProductAttribute|ProductAttributesRestApi|ProductBundleStorage|ProductBundle|ProductCategoryStorage|ProductDiscontinuedStorage|ProductLabelStorage|ProductLabel|ProductListStorage|ProductMeasurementUnitStorage|ProductPackagingUnitStorage|ProductPageSearch|ProductQuantityStorage|ProductRelationStorage|ProductRelation|ProductReview|ProductReviewsRestApi|Propel|SalesInvoice|SalesReturnSearch|SalesReturn|SalesReturnsRestApi|Sales|ShoppingListStorage
     *
     * @return int|null
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @module CustomerPage|SalesReturnPage|AssetStorage|CategoryImageStorage|CategoryPageSearch|CategoryStorage|CmsSlotBlockStorage|CmsSlotBlock|CmsSlotStorage|CmsSlot|CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyGui|CompanyRole|CompanyUnitAddress|CompanyUserStorage|CompanyUser|CompanyUsersRestApi|Company|ConfigurableBundlePageSearch|ConfigurableBundleStorage|ConfigurableBundle|ContentStorage|CustomerAccessStorage|FileManagerStorage|GlossaryStorage|Kernel|Merchant|OrdersRestApi|PriceProductMerchantRelationshipStorage|ProductAlternativeStorage|ProductAttribute|ProductAttributesRestApi|ProductBundleStorage|ProductBundle|ProductCategoryStorage|ProductDiscontinuedStorage|ProductLabelStorage|ProductLabel|ProductListStorage|ProductMeasurementUnitStorage|ProductPackagingUnitStorage|ProductPageSearch|ProductQuantityStorage|ProductRelationStorage|ProductRelation|ProductReview|ProductReviewsRestApi|Propel|SalesInvoice|SalesReturnSearch|SalesReturn|SalesReturnsRestApi|Sales|ShoppingListStorage
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
     * @module CustomerPage|SalesReturnPage|AssetStorage|CategoryImageStorage|CategoryPageSearch|CategoryStorage|CmsSlotBlockStorage|CmsSlotBlock|CmsSlotStorage|CmsSlot|CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyGui|CompanyRole|CompanyUnitAddress|CompanyUserStorage|CompanyUser|CompanyUsersRestApi|Company|ConfigurableBundlePageSearch|ConfigurableBundleStorage|ConfigurableBundle|ContentStorage|CustomerAccessStorage|FileManagerStorage|GlossaryStorage|Kernel|Merchant|OrdersRestApi|PriceProductMerchantRelationshipStorage|ProductAlternativeStorage|ProductAttribute|ProductAttributesRestApi|ProductBundleStorage|ProductBundle|ProductCategoryStorage|ProductDiscontinuedStorage|ProductLabelStorage|ProductLabel|ProductListStorage|ProductMeasurementUnitStorage|ProductPackagingUnitStorage|ProductPageSearch|ProductQuantityStorage|ProductRelationStorage|ProductRelation|ProductReview|ProductReviewsRestApi|Propel|SalesInvoice|SalesReturnSearch|SalesReturn|SalesReturnsRestApi|Sales|ShoppingListStorage
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
     * @module CustomerPage|SalesReturnPage|AssetStorage|CategoryImageStorage|CategoryPageSearch|CategoryStorage|CmsSlotBlockStorage|CmsSlotBlock|CmsSlotStorage|CmsSlot|CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyGui|CompanyRole|CompanyUnitAddress|CompanyUserStorage|CompanyUser|CompanyUsersRestApi|Company|ConfigurableBundlePageSearch|ConfigurableBundleStorage|ConfigurableBundle|ContentStorage|CustomerAccessStorage|FileManagerStorage|GlossaryStorage|Kernel|Merchant|OrdersRestApi|PriceProductMerchantRelationshipStorage|ProductAlternativeStorage|ProductAttribute|ProductAttributesRestApi|ProductBundleStorage|ProductBundle|ProductCategoryStorage|ProductDiscontinuedStorage|ProductLabelStorage|ProductLabel|ProductListStorage|ProductMeasurementUnitStorage|ProductPackagingUnitStorage|ProductPageSearch|ProductQuantityStorage|ProductRelationStorage|ProductRelation|ProductReview|ProductReviewsRestApi|Propel|SalesInvoice|SalesReturnSearch|SalesReturn|SalesReturnsRestApi|Sales|ShoppingListStorage
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
                case 'orderBy':
                case 'orderDirection':
                case 'limit':
                case 'offset':
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
                case 'orderBy':
                case 'orderDirection':
                case 'limit':
                case 'offset':
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
                case 'orderBy':
                case 'orderDirection':
                case 'limit':
                case 'offset':
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
            'orderBy' => $this->orderBy,
            'orderDirection' => $this->orderDirection,
            'limit' => $this->limit,
            'offset' => $this->offset,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'order_by' => $this->orderBy,
            'order_direction' => $this->orderDirection,
            'limit' => $this->limit,
            'offset' => $this->offset,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'order_by' => $this->orderBy instanceof AbstractTransfer ? $this->orderBy->toArray(true, false) : $this->orderBy,
            'order_direction' => $this->orderDirection instanceof AbstractTransfer ? $this->orderDirection->toArray(true, false) : $this->orderDirection,
            'limit' => $this->limit instanceof AbstractTransfer ? $this->limit->toArray(true, false) : $this->limit,
            'offset' => $this->offset instanceof AbstractTransfer ? $this->offset->toArray(true, false) : $this->offset,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'orderBy' => $this->orderBy instanceof AbstractTransfer ? $this->orderBy->toArray(true, true) : $this->orderBy,
            'orderDirection' => $this->orderDirection instanceof AbstractTransfer ? $this->orderDirection->toArray(true, true) : $this->orderDirection,
            'limit' => $this->limit instanceof AbstractTransfer ? $this->limit->toArray(true, true) : $this->limit,
            'offset' => $this->offset instanceof AbstractTransfer ? $this->offset->toArray(true, true) : $this->offset,
        ];
    }
}
