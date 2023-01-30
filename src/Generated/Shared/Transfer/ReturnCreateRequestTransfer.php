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
class ReturnCreateRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const RETURN_ITEMS = 'returnItems';

    /**
     * @var string
     */
    public const STORE = 'store';

    /**
     * @var string
     */
    public const CUSTOMER = 'customer';

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ReturnItemTransfer[]
     */
    protected $returnItems;

    /**
     * @var string|null
     */
    protected $store;

    /**
     * @var \Generated\Shared\Transfer\CustomerTransfer|null
     */
    protected $customer;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'return_items' => 'returnItems',
        'returnItems' => 'returnItems',
        'ReturnItems' => 'returnItems',
        'store' => 'store',
        'Store' => 'store',
        'customer' => 'customer',
        'Customer' => 'customer',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::CUSTOMER => [
            'type' => 'Generated\Shared\Transfer\CustomerTransfer',
            'type_shim' => null,
            'name_underscore' => 'customer',
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
     * @module SalesProductBundleWidget|SalesReturnPage|ProductBundle|SalesReturnGui|SalesReturn|SalesReturnsRestApi
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
     * @module SalesProductBundleWidget|SalesReturnPage|ProductBundle|SalesReturnGui|SalesReturn|SalesReturnsRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ReturnItemTransfer[]
     */
    public function getReturnItems()
    {
        return $this->returnItems;
    }

    /**
     * @module SalesProductBundleWidget|SalesReturnPage|ProductBundle|SalesReturnGui|SalesReturn|SalesReturnsRestApi
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
     * @module SalesProductBundleWidget|SalesReturnPage|ProductBundle|SalesReturnGui|SalesReturn|SalesReturnsRestApi
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
     * @module SalesReturnPage|SalesReturnGui|SalesReturn|SalesReturnsRestApi
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
     * @module SalesReturnPage|SalesReturnGui|SalesReturn|SalesReturnsRestApi
     *
     * @return string|null
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * @module SalesReturnPage|SalesReturnGui|SalesReturn|SalesReturnsRestApi
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
     * @module SalesReturnPage|SalesReturnGui|SalesReturn|SalesReturnsRestApi
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
     * @module SalesReturnPage|SalesReturnGui|SalesReturn|SalesReturnsRestApi
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
     * @param \Generated\Shared\Transfer\CustomerTransfer|null $customer
     *
     * @return $this
     */
    public function setCustomer(CustomerTransfer $customer = null)
    {
        $this->customer = $customer;
        $this->modifiedProperties[self::CUSTOMER] = true;

        return $this;
    }

    /**
     * @module SalesReturnPage|SalesReturnGui|SalesReturn|SalesReturnsRestApi
     *
     * @return \Generated\Shared\Transfer\CustomerTransfer|null
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @module SalesReturnPage|SalesReturnGui|SalesReturn|SalesReturnsRestApi
     *
     * @param \Generated\Shared\Transfer\CustomerTransfer $customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCustomerOrFail(CustomerTransfer $customer)
    {
        return $this->setCustomer($customer);
    }

    /**
     * @module SalesReturnPage|SalesReturnGui|SalesReturn|SalesReturnsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CustomerTransfer
     */
    public function getCustomerOrFail()
    {
        if ($this->customer === null) {
            $this->throwNullValueException(static::CUSTOMER);
        }

        return $this->customer;
    }

    /**
     * @module SalesReturnPage|SalesReturnGui|SalesReturn|SalesReturnsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCustomer()
    {
        $this->assertPropertyIsSet(self::CUSTOMER);

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
                case 'store':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'customer':
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
                case 'store':
                    $values[$arrayKey] = $value;

                    break;
                case 'customer':
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
                case 'store':
                    $values[$arrayKey] = $value;

                    break;
                case 'customer':
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
            'store' => $this->store,
            'customer' => $this->customer,
            'returnItems' => $this->returnItems,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'store' => $this->store,
            'customer' => $this->customer,
            'return_items' => $this->returnItems,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, false) : $this->store,
            'customer' => $this->customer instanceof AbstractTransfer ? $this->customer->toArray(true, false) : $this->customer,
            'return_items' => $this->returnItems instanceof AbstractTransfer ? $this->returnItems->toArray(true, false) : $this->addValuesToCollection($this->returnItems, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, true) : $this->store,
            'customer' => $this->customer instanceof AbstractTransfer ? $this->customer->toArray(true, true) : $this->customer,
            'returnItems' => $this->returnItems instanceof AbstractTransfer ? $this->returnItems->toArray(true, true) : $this->addValuesToCollection($this->returnItems, true, true),
        ];
    }
}
