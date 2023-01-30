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
class ReclamationTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_SALES_RECLAMATION = 'idSalesReclamation';

    /**
     * @var string
     */
    public const ORDER = 'order';

    /**
     * @var string
     */
    public const RECLAMATION_ITEMS = 'reclamationItems';

    /**
     * @var string
     */
    public const CUSTOMER_NAME = 'customerName';

    /**
     * @var string
     */
    public const CUSTOMER_REFERENCE = 'customerReference';

    /**
     * @var string
     */
    public const CUSTOMER_EMAIL = 'customerEmail';

    /**
     * @var string
     */
    public const IS_OPEN = 'isOpen';

    /**
     * @var string
     */
    public const CREATED_ORDERS = 'createdOrders';

    /**
     * @var int|null
     */
    protected $idSalesReclamation;

    /**
     * @var \Generated\Shared\Transfer\OrderTransfer|null
     */
    protected $order;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ReclamationItemTransfer[]
     */
    protected $reclamationItems;

    /**
     * @var string|null
     */
    protected $customerName;

    /**
     * @var string|null
     */
    protected $customerReference;

    /**
     * @var string|null
     */
    protected $customerEmail;

    /**
     * @var bool|null
     */
    protected $isOpen;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\OrderTransfer[]
     */
    protected $createdOrders;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_sales_reclamation' => 'idSalesReclamation',
        'idSalesReclamation' => 'idSalesReclamation',
        'IdSalesReclamation' => 'idSalesReclamation',
        'order' => 'order',
        'Order' => 'order',
        'reclamation_items' => 'reclamationItems',
        'reclamationItems' => 'reclamationItems',
        'ReclamationItems' => 'reclamationItems',
        'customer_name' => 'customerName',
        'customerName' => 'customerName',
        'CustomerName' => 'customerName',
        'customer_reference' => 'customerReference',
        'customerReference' => 'customerReference',
        'CustomerReference' => 'customerReference',
        'customer_email' => 'customerEmail',
        'customerEmail' => 'customerEmail',
        'CustomerEmail' => 'customerEmail',
        'is_open' => 'isOpen',
        'isOpen' => 'isOpen',
        'IsOpen' => 'isOpen',
        'created_orders' => 'createdOrders',
        'createdOrders' => 'createdOrders',
        'CreatedOrders' => 'createdOrders',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SALES_RECLAMATION => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_sales_reclamation',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ORDER => [
            'type' => 'Generated\Shared\Transfer\OrderTransfer',
            'type_shim' => null,
            'name_underscore' => 'order',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::RECLAMATION_ITEMS => [
            'type' => 'Generated\Shared\Transfer\ReclamationItemTransfer',
            'type_shim' => null,
            'name_underscore' => 'reclamation_items',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CUSTOMER_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'customer_name',
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
        self::CUSTOMER_EMAIL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'customer_email',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_OPEN => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_open',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CREATED_ORDERS => [
            'type' => 'Generated\Shared\Transfer\OrderTransfer',
            'type_shim' => null,
            'name_underscore' => 'created_orders',
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
     * @module SalesReclamationGui|SalesReclamation
     *
     * @param int|null $idSalesReclamation
     *
     * @return $this
     */
    public function setIdSalesReclamation($idSalesReclamation)
    {
        $this->idSalesReclamation = $idSalesReclamation;
        $this->modifiedProperties[self::ID_SALES_RECLAMATION] = true;

        return $this;
    }

    /**
     * @module SalesReclamationGui|SalesReclamation
     *
     * @return int|null
     */
    public function getIdSalesReclamation()
    {
        return $this->idSalesReclamation;
    }

    /**
     * @module SalesReclamationGui|SalesReclamation
     *
     * @param int|null $idSalesReclamation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesReclamationOrFail($idSalesReclamation)
    {
        if ($idSalesReclamation === null) {
            $this->throwNullValueException(static::ID_SALES_RECLAMATION);
        }

        return $this->setIdSalesReclamation($idSalesReclamation);
    }

    /**
     * @module SalesReclamationGui|SalesReclamation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdSalesReclamationOrFail()
    {
        if ($this->idSalesReclamation === null) {
            $this->throwNullValueException(static::ID_SALES_RECLAMATION);
        }

        return $this->idSalesReclamation;
    }

    /**
     * @module SalesReclamationGui|SalesReclamation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesReclamation()
    {
        $this->assertPropertyIsSet(self::ID_SALES_RECLAMATION);

        return $this;
    }

    /**
     * @module SalesReclamationGui|SalesReclamation
     *
     * @param \Generated\Shared\Transfer\OrderTransfer|null $order
     *
     * @return $this
     */
    public function setOrder(OrderTransfer $order = null)
    {
        $this->order = $order;
        $this->modifiedProperties[self::ORDER] = true;

        return $this;
    }

    /**
     * @module SalesReclamationGui|SalesReclamation
     *
     * @return \Generated\Shared\Transfer\OrderTransfer|null
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @module SalesReclamationGui|SalesReclamation
     *
     * @param \Generated\Shared\Transfer\OrderTransfer $order
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOrderOrFail(OrderTransfer $order)
    {
        return $this->setOrder($order);
    }

    /**
     * @module SalesReclamationGui|SalesReclamation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\OrderTransfer
     */
    public function getOrderOrFail()
    {
        if ($this->order === null) {
            $this->throwNullValueException(static::ORDER);
        }

        return $this->order;
    }

    /**
     * @module SalesReclamationGui|SalesReclamation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOrder()
    {
        $this->assertPropertyIsSet(self::ORDER);

        return $this;
    }

    /**
     * @module SalesReclamationGui|SalesReclamation
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ReclamationItemTransfer[] $reclamationItems
     *
     * @return $this
     */
    public function setReclamationItems(ArrayObject $reclamationItems)
    {
        $this->reclamationItems = $reclamationItems;
        $this->modifiedProperties[self::RECLAMATION_ITEMS] = true;

        return $this;
    }

    /**
     * @module SalesReclamationGui|SalesReclamation
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ReclamationItemTransfer[]
     */
    public function getReclamationItems()
    {
        return $this->reclamationItems;
    }

    /**
     * @module SalesReclamationGui|SalesReclamation
     *
     * @param \Generated\Shared\Transfer\ReclamationItemTransfer $reclamationItem
     *
     * @return $this
     */
    public function addReclamationItem(ReclamationItemTransfer $reclamationItem)
    {
        $this->reclamationItems[] = $reclamationItem;
        $this->modifiedProperties[self::RECLAMATION_ITEMS] = true;

        return $this;
    }

    /**
     * @module SalesReclamationGui|SalesReclamation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireReclamationItems()
    {
        $this->assertCollectionPropertyIsSet(self::RECLAMATION_ITEMS);

        return $this;
    }

    /**
     * @module SalesReclamation
     *
     * @param string|null $customerName
     *
     * @return $this
     */
    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;
        $this->modifiedProperties[self::CUSTOMER_NAME] = true;

        return $this;
    }

    /**
     * @module SalesReclamation
     *
     * @return string|null
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * @module SalesReclamation
     *
     * @param string|null $customerName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCustomerNameOrFail($customerName)
    {
        if ($customerName === null) {
            $this->throwNullValueException(static::CUSTOMER_NAME);
        }

        return $this->setCustomerName($customerName);
    }

    /**
     * @module SalesReclamation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCustomerNameOrFail()
    {
        if ($this->customerName === null) {
            $this->throwNullValueException(static::CUSTOMER_NAME);
        }

        return $this->customerName;
    }

    /**
     * @module SalesReclamation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCustomerName()
    {
        $this->assertPropertyIsSet(self::CUSTOMER_NAME);

        return $this;
    }

    /**
     * @module SalesReclamation
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
     * @module SalesReclamation
     *
     * @return string|null
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * @module SalesReclamation
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
     * @module SalesReclamation
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
     * @module SalesReclamation
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
     * @module SalesReclamation
     *
     * @param string|null $customerEmail
     *
     * @return $this
     */
    public function setCustomerEmail($customerEmail)
    {
        $this->customerEmail = $customerEmail;
        $this->modifiedProperties[self::CUSTOMER_EMAIL] = true;

        return $this;
    }

    /**
     * @module SalesReclamation
     *
     * @return string|null
     */
    public function getCustomerEmail()
    {
        return $this->customerEmail;
    }

    /**
     * @module SalesReclamation
     *
     * @param string|null $customerEmail
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCustomerEmailOrFail($customerEmail)
    {
        if ($customerEmail === null) {
            $this->throwNullValueException(static::CUSTOMER_EMAIL);
        }

        return $this->setCustomerEmail($customerEmail);
    }

    /**
     * @module SalesReclamation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCustomerEmailOrFail()
    {
        if ($this->customerEmail === null) {
            $this->throwNullValueException(static::CUSTOMER_EMAIL);
        }

        return $this->customerEmail;
    }

    /**
     * @module SalesReclamation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCustomerEmail()
    {
        $this->assertPropertyIsSet(self::CUSTOMER_EMAIL);

        return $this;
    }

    /**
     * @module SalesReclamation
     *
     * @param bool|null $isOpen
     *
     * @return $this
     */
    public function setIsOpen($isOpen)
    {
        $this->isOpen = $isOpen;
        $this->modifiedProperties[self::IS_OPEN] = true;

        return $this;
    }

    /**
     * @module SalesReclamation
     *
     * @return bool|null
     */
    public function getIsOpen()
    {
        return $this->isOpen;
    }

    /**
     * @module SalesReclamation
     *
     * @param bool|null $isOpen
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsOpenOrFail($isOpen)
    {
        if ($isOpen === null) {
            $this->throwNullValueException(static::IS_OPEN);
        }

        return $this->setIsOpen($isOpen);
    }

    /**
     * @module SalesReclamation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsOpenOrFail()
    {
        if ($this->isOpen === null) {
            $this->throwNullValueException(static::IS_OPEN);
        }

        return $this->isOpen;
    }

    /**
     * @module SalesReclamation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsOpen()
    {
        $this->assertPropertyIsSet(self::IS_OPEN);

        return $this;
    }

    /**
     * @module SalesReclamation
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\OrderTransfer[] $createdOrders
     *
     * @return $this
     */
    public function setCreatedOrders(ArrayObject $createdOrders)
    {
        $this->createdOrders = $createdOrders;
        $this->modifiedProperties[self::CREATED_ORDERS] = true;

        return $this;
    }

    /**
     * @module SalesReclamation
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\OrderTransfer[]
     */
    public function getCreatedOrders()
    {
        return $this->createdOrders;
    }

    /**
     * @module SalesReclamation
     *
     * @param \Generated\Shared\Transfer\OrderTransfer $order
     *
     * @return $this
     */
    public function addOrder(OrderTransfer $order)
    {
        $this->createdOrders[] = $order;
        $this->modifiedProperties[self::CREATED_ORDERS] = true;

        return $this;
    }

    /**
     * @module SalesReclamation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCreatedOrders()
    {
        $this->assertCollectionPropertyIsSet(self::CREATED_ORDERS);

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
                case 'idSalesReclamation':
                case 'customerName':
                case 'customerReference':
                case 'customerEmail':
                case 'isOpen':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'order':
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
                case 'reclamationItems':
                case 'createdOrders':
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
                case 'idSalesReclamation':
                case 'customerName':
                case 'customerReference':
                case 'customerEmail':
                case 'isOpen':
                    $values[$arrayKey] = $value;

                    break;
                case 'order':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'reclamationItems':
                case 'createdOrders':
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
                case 'idSalesReclamation':
                case 'customerName':
                case 'customerReference':
                case 'customerEmail':
                case 'isOpen':
                    $values[$arrayKey] = $value;

                    break;
                case 'order':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'reclamationItems':
                case 'createdOrders':
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
        $this->reclamationItems = $this->reclamationItems ?: new ArrayObject();
        $this->createdOrders = $this->createdOrders ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idSalesReclamation' => $this->idSalesReclamation,
            'customerName' => $this->customerName,
            'customerReference' => $this->customerReference,
            'customerEmail' => $this->customerEmail,
            'isOpen' => $this->isOpen,
            'order' => $this->order,
            'reclamationItems' => $this->reclamationItems,
            'createdOrders' => $this->createdOrders,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_reclamation' => $this->idSalesReclamation,
            'customer_name' => $this->customerName,
            'customer_reference' => $this->customerReference,
            'customer_email' => $this->customerEmail,
            'is_open' => $this->isOpen,
            'order' => $this->order,
            'reclamation_items' => $this->reclamationItems,
            'created_orders' => $this->createdOrders,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_reclamation' => $this->idSalesReclamation instanceof AbstractTransfer ? $this->idSalesReclamation->toArray(true, false) : $this->idSalesReclamation,
            'customer_name' => $this->customerName instanceof AbstractTransfer ? $this->customerName->toArray(true, false) : $this->customerName,
            'customer_reference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, false) : $this->customerReference,
            'customer_email' => $this->customerEmail instanceof AbstractTransfer ? $this->customerEmail->toArray(true, false) : $this->customerEmail,
            'is_open' => $this->isOpen instanceof AbstractTransfer ? $this->isOpen->toArray(true, false) : $this->isOpen,
            'order' => $this->order instanceof AbstractTransfer ? $this->order->toArray(true, false) : $this->order,
            'reclamation_items' => $this->reclamationItems instanceof AbstractTransfer ? $this->reclamationItems->toArray(true, false) : $this->addValuesToCollection($this->reclamationItems, true, false),
            'created_orders' => $this->createdOrders instanceof AbstractTransfer ? $this->createdOrders->toArray(true, false) : $this->addValuesToCollection($this->createdOrders, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idSalesReclamation' => $this->idSalesReclamation instanceof AbstractTransfer ? $this->idSalesReclamation->toArray(true, true) : $this->idSalesReclamation,
            'customerName' => $this->customerName instanceof AbstractTransfer ? $this->customerName->toArray(true, true) : $this->customerName,
            'customerReference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, true) : $this->customerReference,
            'customerEmail' => $this->customerEmail instanceof AbstractTransfer ? $this->customerEmail->toArray(true, true) : $this->customerEmail,
            'isOpen' => $this->isOpen instanceof AbstractTransfer ? $this->isOpen->toArray(true, true) : $this->isOpen,
            'order' => $this->order instanceof AbstractTransfer ? $this->order->toArray(true, true) : $this->order,
            'reclamationItems' => $this->reclamationItems instanceof AbstractTransfer ? $this->reclamationItems->toArray(true, true) : $this->addValuesToCollection($this->reclamationItems, true, true),
            'createdOrders' => $this->createdOrders instanceof AbstractTransfer ? $this->createdOrders->toArray(true, true) : $this->addValuesToCollection($this->createdOrders, true, true),
        ];
    }
}
