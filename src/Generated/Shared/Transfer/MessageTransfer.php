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
class MessageTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const TYPE = 'type';

    /**
     * @var string
     */
    public const VALUE = 'value';

    /**
     * @var string
     */
    public const PARAMETERS = 'parameters';

    /**
     * @var string
     */
    public const MESSAGE = 'message';

    /**
     * @var string|null
     */
    protected $type;

    /**
     * @var string|null
     */
    protected $value;

    /**
     * @var array
     */
    protected $parameters = [];

    /**
     * @var string|null
     */
    protected $message;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'type' => 'type',
        'Type' => 'type',
        'value' => 'value',
        'Value' => 'value',
        'parameters' => 'parameters',
        'Parameters' => 'parameters',
        'message' => 'message',
        'Message' => 'message',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::VALUE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'value',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PARAMETERS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'parameters',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MESSAGE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'message',
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
     * @module CartCodeWidget|QuickOrderPage|CartCode|CartCodesRestApi|Cart|ContentProductSetDataImport|DiscountPromotion|Discount|Merchant|PriceProductStorage|ProductDiscontinuedStorage|ProductMeasurementUnit|ProductPackagingUnit|ProductQuantityStorage|ProductQuantity|QuickOrder|Stock
     *
     * @param string|null $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        $this->modifiedProperties[self::TYPE] = true;

        return $this;
    }

    /**
     * @module CartCodeWidget|QuickOrderPage|CartCode|CartCodesRestApi|Cart|ContentProductSetDataImport|DiscountPromotion|Discount|Merchant|PriceProductStorage|ProductDiscontinuedStorage|ProductMeasurementUnit|ProductPackagingUnit|ProductQuantityStorage|ProductQuantity|QuickOrder|Stock
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @module CartCodeWidget|QuickOrderPage|CartCode|CartCodesRestApi|Cart|ContentProductSetDataImport|DiscountPromotion|Discount|Merchant|PriceProductStorage|ProductDiscontinuedStorage|ProductMeasurementUnit|ProductPackagingUnit|ProductQuantityStorage|ProductQuantity|QuickOrder|Stock
     *
     * @param string|null $type
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTypeOrFail($type)
    {
        if ($type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->setType($type);
    }

    /**
     * @module CartCodeWidget|QuickOrderPage|CartCode|CartCodesRestApi|Cart|ContentProductSetDataImport|DiscountPromotion|Discount|Merchant|PriceProductStorage|ProductDiscontinuedStorage|ProductMeasurementUnit|ProductPackagingUnit|ProductQuantityStorage|ProductQuantity|QuickOrder|Stock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTypeOrFail()
    {
        if ($this->type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->type;
    }

    /**
     * @module CartCodeWidget|QuickOrderPage|CartCode|CartCodesRestApi|Cart|ContentProductSetDataImport|DiscountPromotion|Discount|Merchant|PriceProductStorage|ProductDiscontinuedStorage|ProductMeasurementUnit|ProductPackagingUnit|ProductQuantityStorage|ProductQuantity|QuickOrder|Stock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireType()
    {
        $this->assertPropertyIsSet(self::TYPE);

        return $this;
    }

    /**
     * @module CartCodeWidget|CartPage|CheckoutPage|CommentWidget|ConfigurableBundlePage|CustomerPage|DiscountWidget|OrderCancelWidget|QuickOrderPage|QuoteApprovalWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|QuoteRequestWidget|ResourceSharePage|SalesReturnPage|ShoppingListPage|AvailabilityCartConnector|CartCode|CartCodesRestApi|Cart|Checkout|CmsSlotBlock|CmsSlotDataImport|CmsSlot|Comment|CompanyUser|ConfigurableBundleCart|ConfigurableBundleGui|ConfigurableBundle|ContentBannerDataImport|ContentBannerGui|ContentBanner|ContentFileGui|ContentFile|ContentNavigationDataImport|ContentNavigationGui|ContentNavigation|ContentProductDataImport|ContentProductGui|ContentProductSetDataImport|ContentProduct|Content|Currency|Customer|DataExport|DiscountPromotion|Discount|Glossary|Kernel|MerchantRelationshipProductList|Merchant|Messenger|MultiCart|OrderCustomReferenceGui|OrderCustomReference|PaymentGui|Payment|PersistentCartShare|PersistentCart|PriceCartConnector|PriceProductStorage|ProductBundleProductListConnector|ProductBundle|ProductCartConnector|ProductCustomerPermission|ProductDiscontinuedGui|ProductDiscontinuedProductBundleConnector|ProductDiscontinuedStorage|ProductDiscontinued|ProductLabelGui|ProductLabel|ProductListGui|ProductList|ProductMeasurementUnit|ProductOptionCartConnector|ProductPackagingUnit|ProductQuantityStorage|ProductQuantity|ProductRelationGui|ProductRelation|QuickOrder|QuoteApproval|QuoteRequestAgent|QuoteRequest|ResourceShare|SalesOrderThreshold|SalesReturnGui|SalesReturn|SalesReturnsRestApi|Sales|SecurityGui|SecurityOauthUser|SecuritySystemUser|SharedCart|ShipmentCartConnector|ShoppingList|StockGui|Stock|ZedRequest
     *
     * @param string|null $value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        $this->modifiedProperties[self::VALUE] = true;

        return $this;
    }

    /**
     * @module CartCodeWidget|CartPage|CheckoutPage|CommentWidget|ConfigurableBundlePage|CustomerPage|DiscountWidget|OrderCancelWidget|QuickOrderPage|QuoteApprovalWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|QuoteRequestWidget|ResourceSharePage|SalesReturnPage|ShoppingListPage|AvailabilityCartConnector|CartCode|CartCodesRestApi|Cart|Checkout|CmsSlotBlock|CmsSlotDataImport|CmsSlot|Comment|CompanyUser|ConfigurableBundleCart|ConfigurableBundleGui|ConfigurableBundle|ContentBannerDataImport|ContentBannerGui|ContentBanner|ContentFileGui|ContentFile|ContentNavigationDataImport|ContentNavigationGui|ContentNavigation|ContentProductDataImport|ContentProductGui|ContentProductSetDataImport|ContentProduct|Content|Currency|Customer|DataExport|DiscountPromotion|Discount|Glossary|Kernel|MerchantRelationshipProductList|Merchant|Messenger|MultiCart|OrderCustomReferenceGui|OrderCustomReference|PaymentGui|Payment|PersistentCartShare|PersistentCart|PriceCartConnector|PriceProductStorage|ProductBundleProductListConnector|ProductBundle|ProductCartConnector|ProductCustomerPermission|ProductDiscontinuedGui|ProductDiscontinuedProductBundleConnector|ProductDiscontinuedStorage|ProductDiscontinued|ProductLabelGui|ProductLabel|ProductListGui|ProductList|ProductMeasurementUnit|ProductOptionCartConnector|ProductPackagingUnit|ProductQuantityStorage|ProductQuantity|ProductRelationGui|ProductRelation|QuickOrder|QuoteApproval|QuoteRequestAgent|QuoteRequest|ResourceShare|SalesOrderThreshold|SalesReturnGui|SalesReturn|SalesReturnsRestApi|Sales|SecurityGui|SecurityOauthUser|SecuritySystemUser|SharedCart|ShipmentCartConnector|ShoppingList|StockGui|Stock|ZedRequest
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @module CartCodeWidget|CartPage|CheckoutPage|CommentWidget|ConfigurableBundlePage|CustomerPage|DiscountWidget|OrderCancelWidget|QuickOrderPage|QuoteApprovalWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|QuoteRequestWidget|ResourceSharePage|SalesReturnPage|ShoppingListPage|AvailabilityCartConnector|CartCode|CartCodesRestApi|Cart|Checkout|CmsSlotBlock|CmsSlotDataImport|CmsSlot|Comment|CompanyUser|ConfigurableBundleCart|ConfigurableBundleGui|ConfigurableBundle|ContentBannerDataImport|ContentBannerGui|ContentBanner|ContentFileGui|ContentFile|ContentNavigationDataImport|ContentNavigationGui|ContentNavigation|ContentProductDataImport|ContentProductGui|ContentProductSetDataImport|ContentProduct|Content|Currency|Customer|DataExport|DiscountPromotion|Discount|Glossary|Kernel|MerchantRelationshipProductList|Merchant|Messenger|MultiCart|OrderCustomReferenceGui|OrderCustomReference|PaymentGui|Payment|PersistentCartShare|PersistentCart|PriceCartConnector|PriceProductStorage|ProductBundleProductListConnector|ProductBundle|ProductCartConnector|ProductCustomerPermission|ProductDiscontinuedGui|ProductDiscontinuedProductBundleConnector|ProductDiscontinuedStorage|ProductDiscontinued|ProductLabelGui|ProductLabel|ProductListGui|ProductList|ProductMeasurementUnit|ProductOptionCartConnector|ProductPackagingUnit|ProductQuantityStorage|ProductQuantity|ProductRelationGui|ProductRelation|QuickOrder|QuoteApproval|QuoteRequestAgent|QuoteRequest|ResourceShare|SalesOrderThreshold|SalesReturnGui|SalesReturn|SalesReturnsRestApi|Sales|SecurityGui|SecurityOauthUser|SecuritySystemUser|SharedCart|ShipmentCartConnector|ShoppingList|StockGui|Stock|ZedRequest
     *
     * @param string|null $value
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setValueOrFail($value)
    {
        if ($value === null) {
            $this->throwNullValueException(static::VALUE);
        }

        return $this->setValue($value);
    }

    /**
     * @module CartCodeWidget|CartPage|CheckoutPage|CommentWidget|ConfigurableBundlePage|CustomerPage|DiscountWidget|OrderCancelWidget|QuickOrderPage|QuoteApprovalWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|QuoteRequestWidget|ResourceSharePage|SalesReturnPage|ShoppingListPage|AvailabilityCartConnector|CartCode|CartCodesRestApi|Cart|Checkout|CmsSlotBlock|CmsSlotDataImport|CmsSlot|Comment|CompanyUser|ConfigurableBundleCart|ConfigurableBundleGui|ConfigurableBundle|ContentBannerDataImport|ContentBannerGui|ContentBanner|ContentFileGui|ContentFile|ContentNavigationDataImport|ContentNavigationGui|ContentNavigation|ContentProductDataImport|ContentProductGui|ContentProductSetDataImport|ContentProduct|Content|Currency|Customer|DataExport|DiscountPromotion|Discount|Glossary|Kernel|MerchantRelationshipProductList|Merchant|Messenger|MultiCart|OrderCustomReferenceGui|OrderCustomReference|PaymentGui|Payment|PersistentCartShare|PersistentCart|PriceCartConnector|PriceProductStorage|ProductBundleProductListConnector|ProductBundle|ProductCartConnector|ProductCustomerPermission|ProductDiscontinuedGui|ProductDiscontinuedProductBundleConnector|ProductDiscontinuedStorage|ProductDiscontinued|ProductLabelGui|ProductLabel|ProductListGui|ProductList|ProductMeasurementUnit|ProductOptionCartConnector|ProductPackagingUnit|ProductQuantityStorage|ProductQuantity|ProductRelationGui|ProductRelation|QuickOrder|QuoteApproval|QuoteRequestAgent|QuoteRequest|ResourceShare|SalesOrderThreshold|SalesReturnGui|SalesReturn|SalesReturnsRestApi|Sales|SecurityGui|SecurityOauthUser|SecuritySystemUser|SharedCart|ShipmentCartConnector|ShoppingList|StockGui|Stock|ZedRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getValueOrFail()
    {
        if ($this->value === null) {
            $this->throwNullValueException(static::VALUE);
        }

        return $this->value;
    }

    /**
     * @module CartCodeWidget|CartPage|CheckoutPage|CommentWidget|ConfigurableBundlePage|CustomerPage|DiscountWidget|OrderCancelWidget|QuickOrderPage|QuoteApprovalWidget|QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|QuoteRequestWidget|ResourceSharePage|SalesReturnPage|ShoppingListPage|AvailabilityCartConnector|CartCode|CartCodesRestApi|Cart|Checkout|CmsSlotBlock|CmsSlotDataImport|CmsSlot|Comment|CompanyUser|ConfigurableBundleCart|ConfigurableBundleGui|ConfigurableBundle|ContentBannerDataImport|ContentBannerGui|ContentBanner|ContentFileGui|ContentFile|ContentNavigationDataImport|ContentNavigationGui|ContentNavigation|ContentProductDataImport|ContentProductGui|ContentProductSetDataImport|ContentProduct|Content|Currency|Customer|DataExport|DiscountPromotion|Discount|Glossary|Kernel|MerchantRelationshipProductList|Merchant|Messenger|MultiCart|OrderCustomReferenceGui|OrderCustomReference|PaymentGui|Payment|PersistentCartShare|PersistentCart|PriceCartConnector|PriceProductStorage|ProductBundleProductListConnector|ProductBundle|ProductCartConnector|ProductCustomerPermission|ProductDiscontinuedGui|ProductDiscontinuedProductBundleConnector|ProductDiscontinuedStorage|ProductDiscontinued|ProductLabelGui|ProductLabel|ProductListGui|ProductList|ProductMeasurementUnit|ProductOptionCartConnector|ProductPackagingUnit|ProductQuantityStorage|ProductQuantity|ProductRelationGui|ProductRelation|QuickOrder|QuoteApproval|QuoteRequestAgent|QuoteRequest|ResourceShare|SalesOrderThreshold|SalesReturnGui|SalesReturn|SalesReturnsRestApi|Sales|SecurityGui|SecurityOauthUser|SecuritySystemUser|SharedCart|ShipmentCartConnector|ShoppingList|StockGui|Stock|ZedRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireValue()
    {
        $this->assertPropertyIsSet(self::VALUE);

        return $this;
    }

    /**
     * @module ConfigurableBundlePage|QuickOrderPage|QuoteApprovalWidget|SalesReturnPage|AvailabilityCartConnector|Cart|ConfigurableBundleGui|ConfigurableBundle|ContentBannerGui|ContentFileGui|ContentFile|ContentNavigationGui|ContentProductDataImport|ContentProductGui|ContentProductSetDataImport|ContentProduct|Customer|DiscountPromotion|Discount|Kernel|MerchantRelationshipProductList|Merchant|Messenger|MultiCart|PriceCartConnector|ProductBundleProductListConnector|ProductBundle|ProductCartConnector|ProductDiscontinuedGui|ProductDiscontinuedProductBundleConnector|ProductDiscontinued|ProductLabel|ProductListGui|ProductList|ProductMeasurementUnit|ProductOptionCartConnector|ProductPackagingUnit|ProductQuantityStorage|ProductQuantity|QuickOrder|QuoteApproval|SalesOrderThreshold|SalesReturnGui|SalesReturn|SharedCart|ShipmentCartConnector|ShoppingList|Stock|ZedRequest
     *
     * @param array|null $parameters
     *
     * @return $this
     */
    public function setParameters(array $parameters = null)
    {
        if ($parameters === null) {
            $parameters = [];
        }

        $this->parameters = $parameters;
        $this->modifiedProperties[self::PARAMETERS] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlePage|QuickOrderPage|QuoteApprovalWidget|SalesReturnPage|AvailabilityCartConnector|Cart|ConfigurableBundleGui|ConfigurableBundle|ContentBannerGui|ContentFileGui|ContentFile|ContentNavigationGui|ContentProductDataImport|ContentProductGui|ContentProductSetDataImport|ContentProduct|Customer|DiscountPromotion|Discount|Kernel|MerchantRelationshipProductList|Merchant|Messenger|MultiCart|PriceCartConnector|ProductBundleProductListConnector|ProductBundle|ProductCartConnector|ProductDiscontinuedGui|ProductDiscontinuedProductBundleConnector|ProductDiscontinued|ProductLabel|ProductListGui|ProductList|ProductMeasurementUnit|ProductOptionCartConnector|ProductPackagingUnit|ProductQuantityStorage|ProductQuantity|QuickOrder|QuoteApproval|SalesOrderThreshold|SalesReturnGui|SalesReturn|SharedCart|ShipmentCartConnector|ShoppingList|Stock|ZedRequest
     *
     * @return array
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @module ConfigurableBundlePage|QuickOrderPage|QuoteApprovalWidget|SalesReturnPage|AvailabilityCartConnector|Cart|ConfigurableBundleGui|ConfigurableBundle|ContentBannerGui|ContentFileGui|ContentFile|ContentNavigationGui|ContentProductDataImport|ContentProductGui|ContentProductSetDataImport|ContentProduct|Customer|DiscountPromotion|Discount|Kernel|MerchantRelationshipProductList|Merchant|Messenger|MultiCart|PriceCartConnector|ProductBundleProductListConnector|ProductBundle|ProductCartConnector|ProductDiscontinuedGui|ProductDiscontinuedProductBundleConnector|ProductDiscontinued|ProductLabel|ProductListGui|ProductList|ProductMeasurementUnit|ProductOptionCartConnector|ProductPackagingUnit|ProductQuantityStorage|ProductQuantity|QuickOrder|QuoteApproval|SalesOrderThreshold|SalesReturnGui|SalesReturn|SharedCart|ShipmentCartConnector|ShoppingList|Stock|ZedRequest
     *
     * @param mixed $parameters
     *
     * @return $this
     */
    public function addParameters($parameters)
    {
        $this->parameters[] = $parameters;
        $this->modifiedProperties[self::PARAMETERS] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlePage|QuickOrderPage|QuoteApprovalWidget|SalesReturnPage|AvailabilityCartConnector|Cart|ConfigurableBundleGui|ConfigurableBundle|ContentBannerGui|ContentFileGui|ContentFile|ContentNavigationGui|ContentProductDataImport|ContentProductGui|ContentProductSetDataImport|ContentProduct|Customer|DiscountPromotion|Discount|Kernel|MerchantRelationshipProductList|Merchant|Messenger|MultiCart|PriceCartConnector|ProductBundleProductListConnector|ProductBundle|ProductCartConnector|ProductDiscontinuedGui|ProductDiscontinuedProductBundleConnector|ProductDiscontinued|ProductLabel|ProductListGui|ProductList|ProductMeasurementUnit|ProductOptionCartConnector|ProductPackagingUnit|ProductQuantityStorage|ProductQuantity|QuickOrder|QuoteApproval|SalesOrderThreshold|SalesReturnGui|SalesReturn|SharedCart|ShipmentCartConnector|ShoppingList|Stock|ZedRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireParameters()
    {
        $this->assertPropertyIsSet(self::PARAMETERS);

        return $this;
    }

    /**
     * @module SalesOms|SalesReturnGui
     *
     * @param string|null $message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->message = $message;
        $this->modifiedProperties[self::MESSAGE] = true;

        return $this;
    }

    /**
     * @module SalesOms|SalesReturnGui
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @module SalesOms|SalesReturnGui
     *
     * @param string|null $message
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMessageOrFail($message)
    {
        if ($message === null) {
            $this->throwNullValueException(static::MESSAGE);
        }

        return $this->setMessage($message);
    }

    /**
     * @module SalesOms|SalesReturnGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getMessageOrFail()
    {
        if ($this->message === null) {
            $this->throwNullValueException(static::MESSAGE);
        }

        return $this->message;
    }

    /**
     * @module SalesOms|SalesReturnGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMessage()
    {
        $this->assertPropertyIsSet(self::MESSAGE);

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
                case 'type':
                case 'value':
                case 'parameters':
                case 'message':
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
                case 'type':
                case 'value':
                case 'parameters':
                case 'message':
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
                case 'type':
                case 'value':
                case 'parameters':
                case 'message':
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
            'type' => $this->type,
            'value' => $this->value,
            'parameters' => $this->parameters,
            'message' => $this->message,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'type' => $this->type,
            'value' => $this->value,
            'parameters' => $this->parameters,
            'message' => $this->message,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, false) : $this->type,
            'value' => $this->value instanceof AbstractTransfer ? $this->value->toArray(true, false) : $this->value,
            'parameters' => $this->parameters instanceof AbstractTransfer ? $this->parameters->toArray(true, false) : $this->parameters,
            'message' => $this->message instanceof AbstractTransfer ? $this->message->toArray(true, false) : $this->message,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, true) : $this->type,
            'value' => $this->value instanceof AbstractTransfer ? $this->value->toArray(true, true) : $this->value,
            'parameters' => $this->parameters instanceof AbstractTransfer ? $this->parameters->toArray(true, true) : $this->parameters,
            'message' => $this->message instanceof AbstractTransfer ? $this->message->toArray(true, true) : $this->message,
        ];
    }
}
