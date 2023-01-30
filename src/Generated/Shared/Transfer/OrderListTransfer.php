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
class OrderListTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const FILTER_FIELDS = 'filterFields';

    /**
     * @var string
     */
    public const ID_CUSTOMER = 'idCustomer';

    /**
     * @var string
     */
    public const FILTER = 'filter';

    /**
     * @var string
     */
    public const ORDERS = 'orders';

    /**
     * @var string
     */
    public const PAGINATION = 'pagination';

    /**
     * @var string
     */
    public const FORMAT = 'format';

    /**
     * @var string
     */
    public const CUSTOMER_REFERENCE = 'customerReference';

    /**
     * @var string
     */
    public const QUERY_JOINS = 'queryJoins';

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\FilterFieldTransfer[]
     */
    protected $filterFields;

    /**
     * @var int|null
     */
    protected $idCustomer;

    /**
     * @var \Generated\Shared\Transfer\FilterTransfer|null
     */
    protected $filter;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\OrderTransfer[]
     */
    protected $orders;

    /**
     * @var \Generated\Shared\Transfer\PaginationTransfer|null
     */
    protected $pagination;

    /**
     * @var \Generated\Shared\Transfer\OrderListFormatTransfer|null
     */
    protected $format;

    /**
     * @var string|null
     */
    protected $customerReference;

    /**
     * @var \Generated\Shared\Transfer\QueryJoinCollectionTransfer|null
     */
    protected $queryJoins;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'filter_fields' => 'filterFields',
        'filterFields' => 'filterFields',
        'FilterFields' => 'filterFields',
        'id_customer' => 'idCustomer',
        'idCustomer' => 'idCustomer',
        'IdCustomer' => 'idCustomer',
        'filter' => 'filter',
        'Filter' => 'filter',
        'orders' => 'orders',
        'Orders' => 'orders',
        'pagination' => 'pagination',
        'Pagination' => 'pagination',
        'format' => 'format',
        'Format' => 'format',
        'customer_reference' => 'customerReference',
        'customerReference' => 'customerReference',
        'CustomerReference' => 'customerReference',
        'query_joins' => 'queryJoins',
        'queryJoins' => 'queryJoins',
        'QueryJoins' => 'queryJoins',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::FILTER_FIELDS => [
            'type' => 'Generated\Shared\Transfer\FilterFieldTransfer',
            'type_shim' => null,
            'name_underscore' => 'filter_fields',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_CUSTOMER => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_customer',
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
        self::ORDERS => [
            'type' => 'Generated\Shared\Transfer\OrderTransfer',
            'type_shim' => null,
            'name_underscore' => 'orders',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PAGINATION => [
            'type' => 'Generated\Shared\Transfer\PaginationTransfer',
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
        self::FORMAT => [
            'type' => 'Generated\Shared\Transfer\OrderListFormatTransfer',
            'type_shim' => null,
            'name_underscore' => 'format',
            'is_collection' => false,
            'is_transfer' => true,
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
        self::QUERY_JOINS => [
            'type' => 'Generated\Shared\Transfer\QueryJoinCollectionTransfer',
            'type_shim' => null,
            'name_underscore' => 'query_joins',
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
     * @module CompanyPage|CustomerPage|Sales
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\FilterFieldTransfer[] $filterFields
     *
     * @return $this
     */
    public function setFilterFields(ArrayObject $filterFields)
    {
        $this->filterFields = $filterFields;
        $this->modifiedProperties[self::FILTER_FIELDS] = true;

        return $this;
    }

    /**
     * @module CompanyPage|CustomerPage|Sales
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\FilterFieldTransfer[]
     */
    public function getFilterFields()
    {
        return $this->filterFields;
    }

    /**
     * @module CompanyPage|CustomerPage|Sales
     *
     * @param \Generated\Shared\Transfer\FilterFieldTransfer $filterField
     *
     * @return $this
     */
    public function addFilterField(FilterFieldTransfer $filterField)
    {
        $this->filterFields[] = $filterField;
        $this->modifiedProperties[self::FILTER_FIELDS] = true;

        return $this;
    }

    /**
     * @module CompanyPage|CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFilterFields()
    {
        $this->assertCollectionPropertyIsSet(self::FILTER_FIELDS);

        return $this;
    }

    /**
     * @module CustomerPage|OrdersRestApi|Sales
     *
     * @param int|null $idCustomer
     *
     * @return $this
     */
    public function setIdCustomer($idCustomer)
    {
        $this->idCustomer = $idCustomer;
        $this->modifiedProperties[self::ID_CUSTOMER] = true;

        return $this;
    }

    /**
     * @module CustomerPage|OrdersRestApi|Sales
     *
     * @return int|null
     */
    public function getIdCustomer()
    {
        return $this->idCustomer;
    }

    /**
     * @module CustomerPage|OrdersRestApi|Sales
     *
     * @param int|null $idCustomer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCustomerOrFail($idCustomer)
    {
        if ($idCustomer === null) {
            $this->throwNullValueException(static::ID_CUSTOMER);
        }

        return $this->setIdCustomer($idCustomer);
    }

    /**
     * @module CustomerPage|OrdersRestApi|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCustomerOrFail()
    {
        if ($this->idCustomer === null) {
            $this->throwNullValueException(static::ID_CUSTOMER);
        }

        return $this->idCustomer;
    }

    /**
     * @module CustomerPage|OrdersRestApi|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCustomer()
    {
        $this->assertPropertyIsSet(self::ID_CUSTOMER);

        return $this;
    }

    /**
     * @module CustomerPage|OrdersRestApi|Sales
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
     * @module CustomerPage|OrdersRestApi|Sales
     *
     * @return \Generated\Shared\Transfer\FilterTransfer|null
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * @module CustomerPage|OrdersRestApi|Sales
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
     * @module CustomerPage|OrdersRestApi|Sales
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
     * @module CustomerPage|OrdersRestApi|Sales
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
     * @module CustomerPage|SalesReturnPage|OrdersRestApi|Sales
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\OrderTransfer[] $orders
     *
     * @return $this
     */
    public function setOrders(ArrayObject $orders)
    {
        $this->orders = $orders;
        $this->modifiedProperties[self::ORDERS] = true;

        return $this;
    }

    /**
     * @module CustomerPage|SalesReturnPage|OrdersRestApi|Sales
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\OrderTransfer[]
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * @module CustomerPage|SalesReturnPage|OrdersRestApi|Sales
     *
     * @param \Generated\Shared\Transfer\OrderTransfer $order
     *
     * @return $this
     */
    public function addOrder(OrderTransfer $order)
    {
        $this->orders[] = $order;
        $this->modifiedProperties[self::ORDERS] = true;

        return $this;
    }

    /**
     * @module CustomerPage|SalesReturnPage|OrdersRestApi|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOrders()
    {
        $this->assertCollectionPropertyIsSet(self::ORDERS);

        return $this;
    }

    /**
     * @module CustomerPage|OrdersRestApi|Sales
     *
     * @param \Generated\Shared\Transfer\PaginationTransfer|null $pagination
     *
     * @return $this
     */
    public function setPagination(PaginationTransfer $pagination = null)
    {
        $this->pagination = $pagination;
        $this->modifiedProperties[self::PAGINATION] = true;

        return $this;
    }

    /**
     * @module CustomerPage|OrdersRestApi|Sales
     *
     * @return \Generated\Shared\Transfer\PaginationTransfer|null
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    /**
     * @module CustomerPage|OrdersRestApi|Sales
     *
     * @param \Generated\Shared\Transfer\PaginationTransfer $pagination
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPaginationOrFail(PaginationTransfer $pagination)
    {
        return $this->setPagination($pagination);
    }

    /**
     * @module CustomerPage|OrdersRestApi|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PaginationTransfer
     */
    public function getPaginationOrFail()
    {
        if ($this->pagination === null) {
            $this->throwNullValueException(static::PAGINATION);
        }

        return $this->pagination;
    }

    /**
     * @module CustomerPage|OrdersRestApi|Sales
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
     * @module CustomerPage|Sales
     *
     * @param \Generated\Shared\Transfer\OrderListFormatTransfer|null $format
     *
     * @return $this
     */
    public function setFormat(OrderListFormatTransfer $format = null)
    {
        $this->format = $format;
        $this->modifiedProperties[self::FORMAT] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @return \Generated\Shared\Transfer\OrderListFormatTransfer|null
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param \Generated\Shared\Transfer\OrderListFormatTransfer $format
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFormatOrFail(OrderListFormatTransfer $format)
    {
        return $this->setFormat($format);
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\OrderListFormatTransfer
     */
    public function getFormatOrFail()
    {
        if ($this->format === null) {
            $this->throwNullValueException(static::FORMAT);
        }

        return $this->format;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFormat()
    {
        $this->assertPropertyIsSet(self::FORMAT);

        return $this;
    }

    /**
     * @module CustomerPage|Sales
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
     * @module CustomerPage|Sales
     *
     * @return string|null
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * @module CustomerPage|Sales
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
     * @module CustomerPage|Sales
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
     * @module CustomerPage|Sales
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
     * @module Sales
     *
     * @param \Generated\Shared\Transfer\QueryJoinCollectionTransfer|null $queryJoins
     *
     * @return $this
     */
    public function setQueryJoins(QueryJoinCollectionTransfer $queryJoins = null)
    {
        $this->queryJoins = $queryJoins;
        $this->modifiedProperties[self::QUERY_JOINS] = true;

        return $this;
    }

    /**
     * @module Sales
     *
     * @return \Generated\Shared\Transfer\QueryJoinCollectionTransfer|null
     */
    public function getQueryJoins()
    {
        return $this->queryJoins;
    }

    /**
     * @module Sales
     *
     * @param \Generated\Shared\Transfer\QueryJoinCollectionTransfer $queryJoins
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQueryJoinsOrFail(QueryJoinCollectionTransfer $queryJoins)
    {
        return $this->setQueryJoins($queryJoins);
    }

    /**
     * @module Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\QueryJoinCollectionTransfer
     */
    public function getQueryJoinsOrFail()
    {
        if ($this->queryJoins === null) {
            $this->throwNullValueException(static::QUERY_JOINS);
        }

        return $this->queryJoins;
    }

    /**
     * @module Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQueryJoins()
    {
        $this->assertPropertyIsSet(self::QUERY_JOINS);

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
                case 'idCustomer':
                case 'customerReference':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'filter':
                case 'pagination':
                case 'format':
                case 'queryJoins':
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
                case 'filterFields':
                case 'orders':
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
                case 'idCustomer':
                case 'customerReference':
                    $values[$arrayKey] = $value;

                    break;
                case 'filter':
                case 'pagination':
                case 'format':
                case 'queryJoins':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'filterFields':
                case 'orders':
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
                case 'idCustomer':
                case 'customerReference':
                    $values[$arrayKey] = $value;

                    break;
                case 'filter':
                case 'pagination':
                case 'format':
                case 'queryJoins':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'filterFields':
                case 'orders':
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
        $this->filterFields = $this->filterFields ?: new ArrayObject();
        $this->orders = $this->orders ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idCustomer' => $this->idCustomer,
            'customerReference' => $this->customerReference,
            'filter' => $this->filter,
            'pagination' => $this->pagination,
            'format' => $this->format,
            'queryJoins' => $this->queryJoins,
            'filterFields' => $this->filterFields,
            'orders' => $this->orders,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_customer' => $this->idCustomer,
            'customer_reference' => $this->customerReference,
            'filter' => $this->filter,
            'pagination' => $this->pagination,
            'format' => $this->format,
            'query_joins' => $this->queryJoins,
            'filter_fields' => $this->filterFields,
            'orders' => $this->orders,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_customer' => $this->idCustomer instanceof AbstractTransfer ? $this->idCustomer->toArray(true, false) : $this->idCustomer,
            'customer_reference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, false) : $this->customerReference,
            'filter' => $this->filter instanceof AbstractTransfer ? $this->filter->toArray(true, false) : $this->filter,
            'pagination' => $this->pagination instanceof AbstractTransfer ? $this->pagination->toArray(true, false) : $this->pagination,
            'format' => $this->format instanceof AbstractTransfer ? $this->format->toArray(true, false) : $this->format,
            'query_joins' => $this->queryJoins instanceof AbstractTransfer ? $this->queryJoins->toArray(true, false) : $this->queryJoins,
            'filter_fields' => $this->filterFields instanceof AbstractTransfer ? $this->filterFields->toArray(true, false) : $this->addValuesToCollection($this->filterFields, true, false),
            'orders' => $this->orders instanceof AbstractTransfer ? $this->orders->toArray(true, false) : $this->addValuesToCollection($this->orders, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCustomer' => $this->idCustomer instanceof AbstractTransfer ? $this->idCustomer->toArray(true, true) : $this->idCustomer,
            'customerReference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, true) : $this->customerReference,
            'filter' => $this->filter instanceof AbstractTransfer ? $this->filter->toArray(true, true) : $this->filter,
            'pagination' => $this->pagination instanceof AbstractTransfer ? $this->pagination->toArray(true, true) : $this->pagination,
            'format' => $this->format instanceof AbstractTransfer ? $this->format->toArray(true, true) : $this->format,
            'queryJoins' => $this->queryJoins instanceof AbstractTransfer ? $this->queryJoins->toArray(true, true) : $this->queryJoins,
            'filterFields' => $this->filterFields instanceof AbstractTransfer ? $this->filterFields->toArray(true, true) : $this->addValuesToCollection($this->filterFields, true, true),
            'orders' => $this->orders instanceof AbstractTransfer ? $this->orders->toArray(true, true) : $this->addValuesToCollection($this->orders, true, true),
        ];
    }
}
