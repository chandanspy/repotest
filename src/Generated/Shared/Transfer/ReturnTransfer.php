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
class ReturnTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_SALES_RETURN = 'idSalesReturn';

    /**
     * @var string
     */
    public const RETURN_REFERENCE = 'returnReference';

    /**
     * @var string
     */
    public const CUSTOMER_REFERENCE = 'customerReference';

    /**
     * @var string
     */
    public const STORE = 'store';

    /**
     * @var string
     */
    public const RETURN_ITEMS = 'returnItems';

    /**
     * @var string
     */
    public const RETURN_TOTALS = 'returnTotals';

    /**
     * @var string
     */
    public const CREATED_AT = 'createdAt';

    /**
     * @var int|null
     */
    protected $idSalesReturn;

    /**
     * @var string|null
     */
    protected $returnReference;

    /**
     * @var string|null
     */
    protected $customerReference;

    /**
     * @var string|null
     */
    protected $store;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ReturnItemTransfer[]
     */
    protected $returnItems;

    /**
     * @var \Generated\Shared\Transfer\ReturnTotalsTransfer|null
     */
    protected $returnTotals;

    /**
     * @var string|null
     */
    protected $createdAt;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_sales_return' => 'idSalesReturn',
        'idSalesReturn' => 'idSalesReturn',
        'IdSalesReturn' => 'idSalesReturn',
        'return_reference' => 'returnReference',
        'returnReference' => 'returnReference',
        'ReturnReference' => 'returnReference',
        'customer_reference' => 'customerReference',
        'customerReference' => 'customerReference',
        'CustomerReference' => 'customerReference',
        'store' => 'store',
        'Store' => 'store',
        'return_items' => 'returnItems',
        'returnItems' => 'returnItems',
        'ReturnItems' => 'returnItems',
        'return_totals' => 'returnTotals',
        'returnTotals' => 'returnTotals',
        'ReturnTotals' => 'returnTotals',
        'created_at' => 'createdAt',
        'createdAt' => 'createdAt',
        'CreatedAt' => 'createdAt',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SALES_RETURN => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_sales_return',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::RETURN_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'return_reference',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CUSTOMER_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'customer_reference',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'store',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::RETURN_ITEMS => [
            'type' => 'Generated\Shared\Transfer\ReturnItemTransfer',
            'type_shim' => null,
            'name_underscore' => 'return_items',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::RETURN_TOTALS => [
            'type' => 'Generated\Shared\Transfer\ReturnTotalsTransfer',
            'type_shim' => null,
            'name_underscore' => 'return_totals',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CREATED_AT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'created_at',
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
     * @module SalesReturnPage|SalesReturnGui|SalesReturn
     *
     * @param int|null $idSalesReturn
     *
     * @return $this
     */
    public function setIdSalesReturn($idSalesReturn)
    {
        $this->idSalesReturn = $idSalesReturn;
        $this->modifiedProperties[self::ID_SALES_RETURN] = true;

        return $this;
    }

    /**
     * @module SalesReturnPage|SalesReturnGui|SalesReturn
     *
     * @return int|null
     */
    public function getIdSalesReturn()
    {
        return $this->idSalesReturn;
    }

    /**
     * @module SalesReturnPage|SalesReturnGui|SalesReturn
     *
     * @param int|null $idSalesReturn
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesReturnOrFail($idSalesReturn)
    {
        if ($idSalesReturn === null) {
            $this->throwNullValueException(static::ID_SALES_RETURN);
        }

        return $this->setIdSalesReturn($idSalesReturn);
    }

    /**
     * @module SalesReturnPage|SalesReturnGui|SalesReturn
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdSalesReturnOrFail()
    {
        if ($this->idSalesReturn === null) {
            $this->throwNullValueException(static::ID_SALES_RETURN);
        }

        return $this->idSalesReturn;
    }

    /**
     * @module SalesReturnPage|SalesReturnGui|SalesReturn
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesReturn()
    {
        $this->assertPropertyIsSet(self::ID_SALES_RETURN);

        return $this;
    }

    /**
     * @module SalesReturnPage|SalesReturn|SalesReturnsRestApi
     *
     * @param string|null $returnReference
     *
     * @return $this
     */
    public function setReturnReference($returnReference)
    {
        $this->returnReference = $returnReference;
        $this->modifiedProperties[self::RETURN_REFERENCE] = true;

        return $this;
    }

    /**
     * @module SalesReturnPage|SalesReturn|SalesReturnsRestApi
     *
     * @return string|null
     */
    public function getReturnReference()
    {
        return $this->returnReference;
    }

    /**
     * @module SalesReturnPage|SalesReturn|SalesReturnsRestApi
     *
     * @param string|null $returnReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setReturnReferenceOrFail($returnReference)
    {
        if ($returnReference === null) {
            $this->throwNullValueException(static::RETURN_REFERENCE);
        }

        return $this->setReturnReference($returnReference);
    }

    /**
     * @module SalesReturnPage|SalesReturn|SalesReturnsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getReturnReferenceOrFail()
    {
        if ($this->returnReference === null) {
            $this->throwNullValueException(static::RETURN_REFERENCE);
        }

        return $this->returnReference;
    }

    /**
     * @module SalesReturnPage|SalesReturn|SalesReturnsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireReturnReference()
    {
        $this->assertPropertyIsSet(self::RETURN_REFERENCE);

        return $this;
    }

    /**
     * @module SalesReturnPage|SalesReturnGui|SalesReturn
     *
     * @param string|null $customerReference
     *
     * @return $this
     */
    public function setCustomerReference($customerReference)
    {
        $this->customerReference = $customerReference;
        $this->modifiedProperties[self::CUSTOMER_REFERENCE] = true;

        return $this;
    }

    /**
     * @module SalesReturnPage|SalesReturnGui|SalesReturn
     *
     * @return string|null
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * @module SalesReturnPage|SalesReturnGui|SalesReturn
     *
     * @param string|null $customerReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCustomerReferenceOrFail($customerReference)
    {
        if ($customerReference === null) {
            $this->throwNullValueException(static::CUSTOMER_REFERENCE);
        }

        return $this->setCustomerReference($customerReference);
    }

    /**
     * @module SalesReturnPage|SalesReturnGui|SalesReturn
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCustomerReferenceOrFail()
    {
        if ($this->customerReference === null) {
            $this->throwNullValueException(static::CUSTOMER_REFERENCE);
        }

        return $this->customerReference;
    }

    /**
     * @module SalesReturnPage|SalesReturnGui|SalesReturn
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCustomerReference()
    {
        $this->assertPropertyIsSet(self::CUSTOMER_REFERENCE);

        return $this;
    }

    /**
     * @module SalesReturnPage|SalesReturn
     *
     * @param string|null $store
     *
     * @return $this
     */
    public function setStore($store)
    {
        $this->store = $store;
        $this->modifiedProperties[self::STORE] = true;

        return $this;
    }

    /**
     * @module SalesReturnPage|SalesReturn
     *
     * @return string|null
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * @module SalesReturnPage|SalesReturn
     *
     * @param string|null $store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreOrFail($store)
    {
        if ($store === null) {
            $this->throwNullValueException(static::STORE);
        }

        return $this->setStore($store);
    }

    /**
     * @module SalesReturnPage|SalesReturn
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStoreOrFail()
    {
        if ($this->store === null) {
            $this->throwNullValueException(static::STORE);
        }

        return $this->store;
    }

    /**
     * @module SalesReturnPage|SalesReturn
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStore()
    {
        $this->assertPropertyIsSet(self::STORE);

        return $this;
    }

    /**
     * @module SalesReturnPage|SalesReturnGui|SalesReturn|SalesReturnsRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ReturnItemTransfer[] $returnItems
     *
     * @return $this
     */
    public function setReturnItems(ArrayObject $returnItems)
    {
        $this->returnItems = $returnItems;
        $this->modifiedProperties[self::RETURN_ITEMS] = true;

        return $this;
    }

    /**
     * @module SalesReturnPage|SalesReturnGui|SalesReturn|SalesReturnsRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ReturnItemTransfer[]
     */
    public function getReturnItems()
    {
        return $this->returnItems;
    }

    /**
     * @module SalesReturnPage|SalesReturnGui|SalesReturn|SalesReturnsRestApi
     *
     * @param \Generated\Shared\Transfer\ReturnItemTransfer $returnItem
     *
     * @return $this
     */
    public function addReturnItem(ReturnItemTransfer $returnItem)
    {
        $this->returnItems[] = $returnItem;
        $this->modifiedProperties[self::RETURN_ITEMS] = true;

        return $this;
    }

    /**
     * @module SalesReturnPage|SalesReturnGui|SalesReturn|SalesReturnsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireReturnItems()
    {
        $this->assertCollectionPropertyIsSet(self::RETURN_ITEMS);

        return $this;
    }

    /**
     * @module SalesReturnPage|SalesReturn|SalesReturnsRestApi
     *
     * @param \Generated\Shared\Transfer\ReturnTotalsTransfer|null $returnTotals
     *
     * @return $this
     */
    public function setReturnTotals(ReturnTotalsTransfer $returnTotals = null)
    {
        $this->returnTotals = $returnTotals;
        $this->modifiedProperties[self::RETURN_TOTALS] = true;

        return $this;
    }

    /**
     * @module SalesReturnPage|SalesReturn|SalesReturnsRestApi
     *
     * @return \Generated\Shared\Transfer\ReturnTotalsTransfer|null
     */
    public function getReturnTotals()
    {
        return $this->returnTotals;
    }

    /**
     * @module SalesReturnPage|SalesReturn|SalesReturnsRestApi
     *
     * @param \Generated\Shared\Transfer\ReturnTotalsTransfer $returnTotals
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setReturnTotalsOrFail(ReturnTotalsTransfer $returnTotals)
    {
        return $this->setReturnTotals($returnTotals);
    }

    /**
     * @module SalesReturnPage|SalesReturn|SalesReturnsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ReturnTotalsTransfer
     */
    public function getReturnTotalsOrFail()
    {
        if ($this->returnTotals === null) {
            $this->throwNullValueException(static::RETURN_TOTALS);
        }

        return $this->returnTotals;
    }

    /**
     * @module SalesReturnPage|SalesReturn|SalesReturnsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireReturnTotals()
    {
        $this->assertPropertyIsSet(self::RETURN_TOTALS);

        return $this;
    }

    /**
     * @module SalesReturnPage|SalesReturnGui|SalesReturn
     *
     * @param string|null $createdAt
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        $this->modifiedProperties[self::CREATED_AT] = true;

        return $this;
    }

    /**
     * @module SalesReturnPage|SalesReturnGui|SalesReturn
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @module SalesReturnPage|SalesReturnGui|SalesReturn
     *
     * @param string|null $createdAt
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCreatedAtOrFail($createdAt)
    {
        if ($createdAt === null) {
            $this->throwNullValueException(static::CREATED_AT);
        }

        return $this->setCreatedAt($createdAt);
    }

    /**
     * @module SalesReturnPage|SalesReturnGui|SalesReturn
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCreatedAtOrFail()
    {
        if ($this->createdAt === null) {
            $this->throwNullValueException(static::CREATED_AT);
        }

        return $this->createdAt;
    }

    /**
     * @module SalesReturnPage|SalesReturnGui|SalesReturn
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCreatedAt()
    {
        $this->assertPropertyIsSet(self::CREATED_AT);

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
                case 'idSalesReturn':
                case 'returnReference':
                case 'customerReference':
                case 'store':
                case 'createdAt':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'returnTotals':
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
                case 'returnItems':
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
                case 'idSalesReturn':
                case 'returnReference':
                case 'customerReference':
                case 'store':
                case 'createdAt':
                    $values[$arrayKey] = $value;

                    break;
                case 'returnTotals':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'returnItems':
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
                case 'idSalesReturn':
                case 'returnReference':
                case 'customerReference':
                case 'store':
                case 'createdAt':
                    $values[$arrayKey] = $value;

                    break;
                case 'returnTotals':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'returnItems':
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
        $this->returnItems = $this->returnItems ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idSalesReturn' => $this->idSalesReturn,
            'returnReference' => $this->returnReference,
            'customerReference' => $this->customerReference,
            'store' => $this->store,
            'createdAt' => $this->createdAt,
            'returnTotals' => $this->returnTotals,
            'returnItems' => $this->returnItems,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_return' => $this->idSalesReturn,
            'return_reference' => $this->returnReference,
            'customer_reference' => $this->customerReference,
            'store' => $this->store,
            'created_at' => $this->createdAt,
            'return_totals' => $this->returnTotals,
            'return_items' => $this->returnItems,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_return' => $this->idSalesReturn instanceof AbstractTransfer ? $this->idSalesReturn->toArray(true, false) : $this->idSalesReturn,
            'return_reference' => $this->returnReference instanceof AbstractTransfer ? $this->returnReference->toArray(true, false) : $this->returnReference,
            'customer_reference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, false) : $this->customerReference,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, false) : $this->store,
            'created_at' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, false) : $this->createdAt,
            'return_totals' => $this->returnTotals instanceof AbstractTransfer ? $this->returnTotals->toArray(true, false) : $this->returnTotals,
            'return_items' => $this->returnItems instanceof AbstractTransfer ? $this->returnItems->toArray(true, false) : $this->addValuesToCollection($this->returnItems, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idSalesReturn' => $this->idSalesReturn instanceof AbstractTransfer ? $this->idSalesReturn->toArray(true, true) : $this->idSalesReturn,
            'returnReference' => $this->returnReference instanceof AbstractTransfer ? $this->returnReference->toArray(true, true) : $this->returnReference,
            'customerReference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, true) : $this->customerReference,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, true) : $this->store,
            'createdAt' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, true) : $this->createdAt,
            'returnTotals' => $this->returnTotals instanceof AbstractTransfer ? $this->returnTotals->toArray(true, true) : $this->returnTotals,
            'returnItems' => $this->returnItems instanceof AbstractTransfer ? $this->returnItems->toArray(true, true) : $this->addValuesToCollection($this->returnItems, true, true),
        ];
    }
}
