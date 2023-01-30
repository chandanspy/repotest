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
class OrderInvoiceCriteriaTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SALES_ORDER_IDS = 'salesOrderIds';

    /**
     * @var string
     */
    public const IS_EMAIL_SENT = 'isEmailSent';

    /**
     * @var string
     */
    public const EXPAND_WITH_RENDERED_INVOICE = 'expandWithRenderedInvoice';

    /**
     * @var string
     */
    public const FILTER = 'filter';

    /**
     * @var int[]
     */
    protected $salesOrderIds = [];

    /**
     * @var bool|null
     */
    protected $isEmailSent;

    /**
     * @var bool|null
     */
    protected $expandWithRenderedInvoice;

    /**
     * @var \Generated\Shared\Transfer\FilterTransfer|null
     */
    protected $filter;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'sales_order_ids' => 'salesOrderIds',
        'salesOrderIds' => 'salesOrderIds',
        'SalesOrderIds' => 'salesOrderIds',
        'is_email_sent' => 'isEmailSent',
        'isEmailSent' => 'isEmailSent',
        'IsEmailSent' => 'isEmailSent',
        'expand_with_rendered_invoice' => 'expandWithRenderedInvoice',
        'expandWithRenderedInvoice' => 'expandWithRenderedInvoice',
        'ExpandWithRenderedInvoice' => 'expandWithRenderedInvoice',
        'filter' => 'filter',
        'Filter' => 'filter',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::SALES_ORDER_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'sales_order_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_EMAIL_SENT => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_email_sent',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::EXPAND_WITH_RENDERED_INVOICE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'expand_with_rendered_invoice',
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
    ];

    /**
     * @module SalesInvoice
     *
     * @param int[]|null $salesOrderIds
     *
     * @return $this
     */
    public function setSalesOrderIds(array $salesOrderIds = null)
    {
        if ($salesOrderIds === null) {
            $salesOrderIds = [];
        }

        $this->salesOrderIds = $salesOrderIds;
        $this->modifiedProperties[self::SALES_ORDER_IDS] = true;

        return $this;
    }

    /**
     * @module SalesInvoice
     *
     * @return int[]
     */
    public function getSalesOrderIds()
    {
        return $this->salesOrderIds;
    }

    /**
     * @module SalesInvoice
     *
     * @param int $salesOrderId
     *
     * @return $this
     */
    public function addSalesOrderId($salesOrderId)
    {
        $this->salesOrderIds[] = $salesOrderId;
        $this->modifiedProperties[self::SALES_ORDER_IDS] = true;

        return $this;
    }

    /**
     * @module SalesInvoice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSalesOrderIds()
    {
        $this->assertPropertyIsSet(self::SALES_ORDER_IDS);

        return $this;
    }

    /**
     * @module SalesInvoice
     *
     * @param bool|null $isEmailSent
     *
     * @return $this
     */
    public function setIsEmailSent($isEmailSent)
    {
        $this->isEmailSent = $isEmailSent;
        $this->modifiedProperties[self::IS_EMAIL_SENT] = true;

        return $this;
    }

    /**
     * @module SalesInvoice
     *
     * @return bool|null
     */
    public function getIsEmailSent()
    {
        return $this->isEmailSent;
    }

    /**
     * @module SalesInvoice
     *
     * @param bool|null $isEmailSent
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsEmailSentOrFail($isEmailSent)
    {
        if ($isEmailSent === null) {
            $this->throwNullValueException(static::IS_EMAIL_SENT);
        }

        return $this->setIsEmailSent($isEmailSent);
    }

    /**
     * @module SalesInvoice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsEmailSentOrFail()
    {
        if ($this->isEmailSent === null) {
            $this->throwNullValueException(static::IS_EMAIL_SENT);
        }

        return $this->isEmailSent;
    }

    /**
     * @module SalesInvoice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsEmailSent()
    {
        $this->assertPropertyIsSet(self::IS_EMAIL_SENT);

        return $this;
    }

    /**
     * @module SalesInvoice
     *
     * @param bool|null $expandWithRenderedInvoice
     *
     * @return $this
     */
    public function setExpandWithRenderedInvoice($expandWithRenderedInvoice)
    {
        $this->expandWithRenderedInvoice = $expandWithRenderedInvoice;
        $this->modifiedProperties[self::EXPAND_WITH_RENDERED_INVOICE] = true;

        return $this;
    }

    /**
     * @module SalesInvoice
     *
     * @return bool|null
     */
    public function getExpandWithRenderedInvoice()
    {
        return $this->expandWithRenderedInvoice;
    }

    /**
     * @module SalesInvoice
     *
     * @param bool|null $expandWithRenderedInvoice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setExpandWithRenderedInvoiceOrFail($expandWithRenderedInvoice)
    {
        if ($expandWithRenderedInvoice === null) {
            $this->throwNullValueException(static::EXPAND_WITH_RENDERED_INVOICE);
        }

        return $this->setExpandWithRenderedInvoice($expandWithRenderedInvoice);
    }

    /**
     * @module SalesInvoice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getExpandWithRenderedInvoiceOrFail()
    {
        if ($this->expandWithRenderedInvoice === null) {
            $this->throwNullValueException(static::EXPAND_WITH_RENDERED_INVOICE);
        }

        return $this->expandWithRenderedInvoice;
    }

    /**
     * @module SalesInvoice
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireExpandWithRenderedInvoice()
    {
        $this->assertPropertyIsSet(self::EXPAND_WITH_RENDERED_INVOICE);

        return $this;
    }

    /**
     * @module SalesInvoice
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
     * @module SalesInvoice
     *
     * @return \Generated\Shared\Transfer\FilterTransfer|null
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * @module SalesInvoice
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
     * @module SalesInvoice
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
     * @module SalesInvoice
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
                case 'salesOrderIds':
                case 'isEmailSent':
                case 'expandWithRenderedInvoice':
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
                case 'salesOrderIds':
                case 'isEmailSent':
                case 'expandWithRenderedInvoice':
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
                case 'salesOrderIds':
                case 'isEmailSent':
                case 'expandWithRenderedInvoice':
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
            'salesOrderIds' => $this->salesOrderIds,
            'isEmailSent' => $this->isEmailSent,
            'expandWithRenderedInvoice' => $this->expandWithRenderedInvoice,
            'filter' => $this->filter,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'sales_order_ids' => $this->salesOrderIds,
            'is_email_sent' => $this->isEmailSent,
            'expand_with_rendered_invoice' => $this->expandWithRenderedInvoice,
            'filter' => $this->filter,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'sales_order_ids' => $this->salesOrderIds instanceof AbstractTransfer ? $this->salesOrderIds->toArray(true, false) : $this->salesOrderIds,
            'is_email_sent' => $this->isEmailSent instanceof AbstractTransfer ? $this->isEmailSent->toArray(true, false) : $this->isEmailSent,
            'expand_with_rendered_invoice' => $this->expandWithRenderedInvoice instanceof AbstractTransfer ? $this->expandWithRenderedInvoice->toArray(true, false) : $this->expandWithRenderedInvoice,
            'filter' => $this->filter instanceof AbstractTransfer ? $this->filter->toArray(true, false) : $this->filter,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'salesOrderIds' => $this->salesOrderIds instanceof AbstractTransfer ? $this->salesOrderIds->toArray(true, true) : $this->salesOrderIds,
            'isEmailSent' => $this->isEmailSent instanceof AbstractTransfer ? $this->isEmailSent->toArray(true, true) : $this->isEmailSent,
            'expandWithRenderedInvoice' => $this->expandWithRenderedInvoice instanceof AbstractTransfer ? $this->expandWithRenderedInvoice->toArray(true, true) : $this->expandWithRenderedInvoice,
            'filter' => $this->filter instanceof AbstractTransfer ? $this->filter->toArray(true, true) : $this->filter,
        ];
    }
}
