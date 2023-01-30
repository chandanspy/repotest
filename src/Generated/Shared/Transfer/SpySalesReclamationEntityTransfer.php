<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpySalesReclamationEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_SALES_RECLAMATION = 'idSalesReclamation';

    /**
     * @var string
     */
    public const FK_SALES_ORDER = 'fkSalesOrder';

    /**
     * @var string
     */
    public const CUSTOMER_EMAIL = 'customerEmail';

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
    public const IS_OPEN = 'isOpen';

    /**
     * @var string
     */
    public const ORDER = 'order';

    /**
     * @var string
     */
    public const SPY_SALES_RECLAMATION_ITEMS = 'spySalesReclamationItems';

    /**
     * @var integer|null
     */
    protected $idSalesReclamation;

    /**
     * @var integer|null
     */
    protected $fkSalesOrder;

    /**
     * @var string|null
     */
    protected $customerEmail;

    /**
     * @var string|null
     */
    protected $customerName;

    /**
     * @var string|null
     */
    protected $customerReference;

    /**
     * @var boolean|null
     */
    protected $isOpen;

    /**
     * @var \Generated\Shared\Transfer\SpySalesOrderEntityTransfer|null
     */
    protected $order;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpySalesReclamationItemEntityTransfer[]
     */
    protected $spySalesReclamationItems;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_sales_reclamation' => 'idSalesReclamation',
        'idSalesReclamation' => 'idSalesReclamation',
        'IdSalesReclamation' => 'idSalesReclamation',
        'fk_sales_order' => 'fkSalesOrder',
        'fkSalesOrder' => 'fkSalesOrder',
        'FkSalesOrder' => 'fkSalesOrder',
        'customer_email' => 'customerEmail',
        'customerEmail' => 'customerEmail',
        'CustomerEmail' => 'customerEmail',
        'customer_name' => 'customerName',
        'customerName' => 'customerName',
        'CustomerName' => 'customerName',
        'customer_reference' => 'customerReference',
        'customerReference' => 'customerReference',
        'CustomerReference' => 'customerReference',
        'is_open' => 'isOpen',
        'isOpen' => 'isOpen',
        'IsOpen' => 'isOpen',
        'order' => 'order',
        'Order' => 'order',
        'spy_sales_reclamation_items' => 'spySalesReclamationItems',
        'spySalesReclamationItems' => 'spySalesReclamationItems',
        'SpySalesReclamationItems' => 'spySalesReclamationItems',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SALES_RECLAMATION => [
            'type' => 'integer',
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
        self::FK_SALES_ORDER => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_sales_order',
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
        self::IS_OPEN => [
            'type' => 'boolean',
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
        self::ORDER => [
            'type' => 'Generated\Shared\Transfer\SpySalesOrderEntityTransfer',
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
        self::SPY_SALES_RECLAMATION_ITEMS => [
            'type' => 'Generated\Shared\Transfer\SpySalesReclamationItemEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_sales_reclamation_items',
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
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\SalesReclamation\Persistence\SpySalesReclamation';


    /**
     * @module 
     *
     * @param integer|null $idSalesReclamation
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdSalesReclamation()
    {
        return $this->idSalesReclamation;
    }

    /**
     * @module 
     *
     * @param integer|null $idSalesReclamation
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdSalesReclamationOrFail()
    {
        if ($this->idSalesReclamation === null) {
            $this->throwNullValueException(static::ID_SALES_RECLAMATION);
        }

        return $this->idSalesReclamation;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkSalesOrder
     *
     * @return $this
     */
    public function setFkSalesOrder($fkSalesOrder)
    {
        $this->fkSalesOrder = $fkSalesOrder;
        $this->modifiedProperties[self::FK_SALES_ORDER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkSalesOrder()
    {
        return $this->fkSalesOrder;
    }

    /**
     * @module 
     *
     * @param integer|null $fkSalesOrder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkSalesOrderOrFail($fkSalesOrder)
    {
        if ($fkSalesOrder === null) {
            $this->throwNullValueException(static::FK_SALES_ORDER);
        }

        return $this->setFkSalesOrder($fkSalesOrder);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkSalesOrderOrFail()
    {
        if ($this->fkSalesOrder === null) {
            $this->throwNullValueException(static::FK_SALES_ORDER);
        }

        return $this->fkSalesOrder;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkSalesOrder()
    {
        $this->assertPropertyIsSet(self::FK_SALES_ORDER);

        return $this;
    }

    /**
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getCustomerEmail()
    {
        return $this->customerEmail;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param boolean|null $isOpen
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
     * @module 
     *
     * @return boolean|null
     */
    public function getIsOpen()
    {
        return $this->isOpen;
    }

    /**
     * @module 
     *
     * @param boolean|null $isOpen
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsOpenOrFail()
    {
        if ($this->isOpen === null) {
            $this->throwNullValueException(static::IS_OPEN);
        }

        return $this->isOpen;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderEntityTransfer|null $order
     *
     * @return $this
     */
    public function setOrder(SpySalesOrderEntityTransfer $order = null)
    {
        $this->order = $order;
        $this->modifiedProperties[self::ORDER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderEntityTransfer|null
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderEntityTransfer $order
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOrderOrFail(SpySalesOrderEntityTransfer $order)
    {
        return $this->setOrder($order);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderEntityTransfer
     */
    public function getOrderOrFail()
    {
        if ($this->order === null) {
            $this->throwNullValueException(static::ORDER);
        }

        return $this->order;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpySalesReclamationItemEntityTransfer[] $spySalesReclamationItems
     *
     * @return $this
     */
    public function setSpySalesReclamationItems(ArrayObject $spySalesReclamationItems)
    {
        $this->spySalesReclamationItems = $spySalesReclamationItems;
        $this->modifiedProperties[self::SPY_SALES_RECLAMATION_ITEMS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpySalesReclamationItemEntityTransfer[]
     */
    public function getSpySalesReclamationItems()
    {
        return $this->spySalesReclamationItems;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesReclamationItemEntityTransfer $spySalesReclamationItems
     *
     * @return $this
     */
    public function addSpySalesReclamationItems(SpySalesReclamationItemEntityTransfer $spySalesReclamationItems)
    {
        $this->spySalesReclamationItems[] = $spySalesReclamationItems;
        $this->modifiedProperties[self::SPY_SALES_RECLAMATION_ITEMS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpySalesReclamationItems()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SALES_RECLAMATION_ITEMS);

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
                case 'fkSalesOrder':
                case 'customerEmail':
                case 'customerName':
                case 'customerReference':
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
                case 'spySalesReclamationItems':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                default:
                    if (!$ignoreMissingProperty) {
                        throw new \InvalidArgumentException(sprintf('Missing property `%s` in `%s`', $property, static::class));
                    }
                    $this->virtualProperties[$property] = $value;
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
                case 'fkSalesOrder':
                case 'customerEmail':
                case 'customerName':
                case 'customerReference':
                case 'isOpen':
                    $values[$arrayKey] = $value;

                    break;
                case 'order':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spySalesReclamationItems':
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
                case 'fkSalesOrder':
                case 'customerEmail':
                case 'customerName':
                case 'customerReference':
                case 'isOpen':
                    $values[$arrayKey] = $value;

                    break;
                case 'order':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spySalesReclamationItems':
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
        $this->spySalesReclamationItems = $this->spySalesReclamationItems ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idSalesReclamation' => $this->idSalesReclamation,
            'fkSalesOrder' => $this->fkSalesOrder,
            'customerEmail' => $this->customerEmail,
            'customerName' => $this->customerName,
            'customerReference' => $this->customerReference,
            'isOpen' => $this->isOpen,
            'order' => $this->order,
            'spySalesReclamationItems' => $this->spySalesReclamationItems,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_reclamation' => $this->idSalesReclamation,
            'fk_sales_order' => $this->fkSalesOrder,
            'customer_email' => $this->customerEmail,
            'customer_name' => $this->customerName,
            'customer_reference' => $this->customerReference,
            'is_open' => $this->isOpen,
            'order' => $this->order,
            'spy_sales_reclamation_items' => $this->spySalesReclamationItems,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_reclamation' => $this->idSalesReclamation instanceof AbstractTransfer ? $this->idSalesReclamation->toArray(true, false) : $this->idSalesReclamation,
            'fk_sales_order' => $this->fkSalesOrder instanceof AbstractTransfer ? $this->fkSalesOrder->toArray(true, false) : $this->fkSalesOrder,
            'customer_email' => $this->customerEmail instanceof AbstractTransfer ? $this->customerEmail->toArray(true, false) : $this->customerEmail,
            'customer_name' => $this->customerName instanceof AbstractTransfer ? $this->customerName->toArray(true, false) : $this->customerName,
            'customer_reference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, false) : $this->customerReference,
            'is_open' => $this->isOpen instanceof AbstractTransfer ? $this->isOpen->toArray(true, false) : $this->isOpen,
            'order' => $this->order instanceof AbstractTransfer ? $this->order->toArray(true, false) : $this->order,
            'spy_sales_reclamation_items' => $this->spySalesReclamationItems instanceof AbstractTransfer ? $this->spySalesReclamationItems->toArray(true, false) : $this->addValuesToCollection($this->spySalesReclamationItems, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idSalesReclamation' => $this->idSalesReclamation instanceof AbstractTransfer ? $this->idSalesReclamation->toArray(true, true) : $this->idSalesReclamation,
            'fkSalesOrder' => $this->fkSalesOrder instanceof AbstractTransfer ? $this->fkSalesOrder->toArray(true, true) : $this->fkSalesOrder,
            'customerEmail' => $this->customerEmail instanceof AbstractTransfer ? $this->customerEmail->toArray(true, true) : $this->customerEmail,
            'customerName' => $this->customerName instanceof AbstractTransfer ? $this->customerName->toArray(true, true) : $this->customerName,
            'customerReference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, true) : $this->customerReference,
            'isOpen' => $this->isOpen instanceof AbstractTransfer ? $this->isOpen->toArray(true, true) : $this->isOpen,
            'order' => $this->order instanceof AbstractTransfer ? $this->order->toArray(true, true) : $this->order,
            'spySalesReclamationItems' => $this->spySalesReclamationItems instanceof AbstractTransfer ? $this->spySalesReclamationItems->toArray(true, true) : $this->addValuesToCollection($this->spySalesReclamationItems, true, true),
        ];
    }
}
