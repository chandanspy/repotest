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
class ReturnFilterTransfer extends AbstractTransfer
{
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
    public const FILTER = 'filter';

    /**
     * @var string
     */
    public const RETURN_IDS = 'returnIds';

    /**
     * @var string|null
     */
    protected $returnReference;

    /**
     * @var string|null
     */
    protected $customerReference;

    /**
     * @var \Generated\Shared\Transfer\FilterTransfer|null
     */
    protected $filter;

    /**
     * @var int[]
     */
    protected $returnIds = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'return_reference' => 'returnReference',
        'returnReference' => 'returnReference',
        'ReturnReference' => 'returnReference',
        'customer_reference' => 'customerReference',
        'customerReference' => 'customerReference',
        'CustomerReference' => 'customerReference',
        'filter' => 'filter',
        'Filter' => 'filter',
        'return_ids' => 'returnIds',
        'returnIds' => 'returnIds',
        'ReturnIds' => 'returnIds',
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
        self::FILTER => [
            'type' => 'Generated\Shared\Transfer\FilterTransfer',
            'type_shim' => null,
            'name_underscore' => 'filter',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::RETURN_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'return_ids',
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
     * @module SalesReturnPage|SalesReturn|SalesReturnsRestApi
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
     * @module SalesReturnPage|SalesReturn|SalesReturnsRestApi
     *
     * @return string|null
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * @module SalesReturnPage|SalesReturn|SalesReturnsRestApi
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
     * @module SalesReturnPage|SalesReturn|SalesReturnsRestApi
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
     * @module SalesReturnPage|SalesReturn|SalesReturnsRestApi
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
     * @module SalesReturnPage|SalesReturn|SalesReturnsRestApi
     *
     * @param \Generated\Shared\Transfer\FilterTransfer|null $filter
     *
     * @return $this
     */
    public function setFilter(FilterTransfer $filter = null)
    {
        $this->filter = $filter;
        $this->modifiedProperties[self::FILTER] = true;

        return $this;
    }

    /**
     * @module SalesReturnPage|SalesReturn|SalesReturnsRestApi
     *
     * @return \Generated\Shared\Transfer\FilterTransfer|null
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * @module SalesReturnPage|SalesReturn|SalesReturnsRestApi
     *
     * @param \Generated\Shared\Transfer\FilterTransfer $filter
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFilterOrFail(FilterTransfer $filter)
    {
        return $this->setFilter($filter);
    }

    /**
     * @module SalesReturnPage|SalesReturn|SalesReturnsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\FilterTransfer
     */
    public function getFilterOrFail()
    {
        if ($this->filter === null) {
            $this->throwNullValueException(static::FILTER);
        }

        return $this->filter;
    }

    /**
     * @module SalesReturnPage|SalesReturn|SalesReturnsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFilter()
    {
        $this->assertPropertyIsSet(self::FILTER);

        return $this;
    }

    /**
     * @module SalesReturnGui|SalesReturn
     *
     * @param int[]|null $returnIds
     *
     * @return $this
     */
    public function setReturnIds(array $returnIds = null)
    {
        if ($returnIds === null) {
            $returnIds = [];
        }

        $this->returnIds = $returnIds;
        $this->modifiedProperties[self::RETURN_IDS] = true;

        return $this;
    }

    /**
     * @module SalesReturnGui|SalesReturn
     *
     * @return int[]
     */
    public function getReturnIds()
    {
        return $this->returnIds;
    }

    /**
     * @module SalesReturnGui|SalesReturn
     *
     * @param int $idReturn
     *
     * @return $this
     */
    public function addIdReturn($idReturn)
    {
        $this->returnIds[] = $idReturn;
        $this->modifiedProperties[self::RETURN_IDS] = true;

        return $this;
    }

    /**
     * @module SalesReturnGui|SalesReturn
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireReturnIds()
    {
        $this->assertPropertyIsSet(self::RETURN_IDS);

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
                case 'customerReference':
                case 'returnIds':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'filter':
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
                case 'customerReference':
                case 'returnIds':
                    $values[$arrayKey] = $value;

                    break;
                case 'filter':
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
                case 'customerReference':
                case 'returnIds':
                    $values[$arrayKey] = $value;

                    break;
                case 'filter':
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
            'customerReference' => $this->customerReference,
            'returnIds' => $this->returnIds,
            'filter' => $this->filter,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'return_reference' => $this->returnReference,
            'customer_reference' => $this->customerReference,
            'return_ids' => $this->returnIds,
            'filter' => $this->filter,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'return_reference' => $this->returnReference instanceof AbstractTransfer ? $this->returnReference->toArray(true, false) : $this->returnReference,
            'customer_reference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, false) : $this->customerReference,
            'return_ids' => $this->returnIds instanceof AbstractTransfer ? $this->returnIds->toArray(true, false) : $this->returnIds,
            'filter' => $this->filter instanceof AbstractTransfer ? $this->filter->toArray(true, false) : $this->filter,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'returnReference' => $this->returnReference instanceof AbstractTransfer ? $this->returnReference->toArray(true, true) : $this->returnReference,
            'customerReference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, true) : $this->customerReference,
            'returnIds' => $this->returnIds instanceof AbstractTransfer ? $this->returnIds->toArray(true, true) : $this->returnIds,
            'filter' => $this->filter instanceof AbstractTransfer ? $this->filter->toArray(true, true) : $this->filter,
        ];
    }
}
