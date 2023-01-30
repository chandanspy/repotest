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
class RestReturnsAttributesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const RETURN_REFERENCE = 'returnReference';

    /**
     * @var string
     */
    public const STORE = 'store';

    /**
     * @var string
     */
    public const CUSTOMER_REFERENCE = 'customerReference';

    /**
     * @var string
     */
    public const RETURN_TOTALS = 'returnTotals';

    /**
     * @var string|null
     */
    protected $returnReference;

    /**
     * @var string|null
     */
    protected $store;

    /**
     * @var string|null
     */
    protected $customerReference;

    /**
     * @var \Generated\Shared\Transfer\RestReturnTotalsAttributesTransfer|null
     */
    protected $returnTotals;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'return_reference' => 'returnReference',
        'returnReference' => 'returnReference',
        'ReturnReference' => 'returnReference',
        'store' => 'store',
        'Store' => 'store',
        'customer_reference' => 'customerReference',
        'customerReference' => 'customerReference',
        'CustomerReference' => 'customerReference',
        'return_totals' => 'returnTotals',
        'returnTotals' => 'returnTotals',
        'ReturnTotals' => 'returnTotals',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::RETURN_TOTALS => [
            'type' => 'Generated\Shared\Transfer\RestReturnTotalsAttributesTransfer',
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
    ];

    /**
     * @module SalesReturnsRestApi
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
     * @module SalesReturnsRestApi
     *
     * @return string|null
     */
    public function getReturnReference()
    {
        return $this->returnReference;
    }

    /**
     * @module SalesReturnsRestApi
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
     * @module SalesReturnsRestApi
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
     * @module SalesReturnsRestApi
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
     * @module SalesReturnsRestApi
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
     * @module SalesReturnsRestApi
     *
     * @return string|null
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * @module SalesReturnsRestApi
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
     * @module SalesReturnsRestApi
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
     * @module SalesReturnsRestApi
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
     * @module SalesReturnsRestApi
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
     * @module SalesReturnsRestApi
     *
     * @return string|null
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * @module SalesReturnsRestApi
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
     * @module SalesReturnsRestApi
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
     * @module SalesReturnsRestApi
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
     * @module SalesReturnsRestApi
     *
     * @param \Generated\Shared\Transfer\RestReturnTotalsAttributesTransfer|null $returnTotals
     *
     * @return $this
     */
    public function setReturnTotals(RestReturnTotalsAttributesTransfer $returnTotals = null)
    {
        $this->returnTotals = $returnTotals;
        $this->modifiedProperties[self::RETURN_TOTALS] = true;

        return $this;
    }

    /**
     * @module SalesReturnsRestApi
     *
     * @return \Generated\Shared\Transfer\RestReturnTotalsAttributesTransfer|null
     */
    public function getReturnTotals()
    {
        return $this->returnTotals;
    }

    /**
     * @module SalesReturnsRestApi
     *
     * @param \Generated\Shared\Transfer\RestReturnTotalsAttributesTransfer $returnTotals
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setReturnTotalsOrFail(RestReturnTotalsAttributesTransfer $returnTotals)
    {
        return $this->setReturnTotals($returnTotals);
    }

    /**
     * @module SalesReturnsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\RestReturnTotalsAttributesTransfer
     */
    public function getReturnTotalsOrFail()
    {
        if ($this->returnTotals === null) {
            $this->throwNullValueException(static::RETURN_TOTALS);
        }

        return $this->returnTotals;
    }

    /**
     * @module SalesReturnsRestApi
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
                case 'returnReference':
                case 'store':
                case 'customerReference':
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
                case 'returnReference':
                case 'store':
                case 'customerReference':
                    $values[$arrayKey] = $value;

                    break;
                case 'returnTotals':
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
                case 'returnReference':
                case 'store':
                case 'customerReference':
                    $values[$arrayKey] = $value;

                    break;
                case 'returnTotals':
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
            'returnReference' => $this->returnReference,
            'store' => $this->store,
            'customerReference' => $this->customerReference,
            'returnTotals' => $this->returnTotals,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'return_reference' => $this->returnReference,
            'store' => $this->store,
            'customer_reference' => $this->customerReference,
            'return_totals' => $this->returnTotals,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'return_reference' => $this->returnReference instanceof AbstractTransfer ? $this->returnReference->toArray(true, false) : $this->returnReference,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, false) : $this->store,
            'customer_reference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, false) : $this->customerReference,
            'return_totals' => $this->returnTotals instanceof AbstractTransfer ? $this->returnTotals->toArray(true, false) : $this->returnTotals,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'returnReference' => $this->returnReference instanceof AbstractTransfer ? $this->returnReference->toArray(true, true) : $this->returnReference,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, true) : $this->store,
            'customerReference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, true) : $this->customerReference,
            'returnTotals' => $this->returnTotals instanceof AbstractTransfer ? $this->returnTotals->toArray(true, true) : $this->returnTotals,
        ];
    }
}
