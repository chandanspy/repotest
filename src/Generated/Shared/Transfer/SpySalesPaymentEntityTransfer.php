<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpySalesPaymentEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_SALES_PAYMENT = 'idSalesPayment';

    /**
     * @var string
     */
    public const FK_SALES_ORDER = 'fkSalesOrder';

    /**
     * @var string
     */
    public const FK_SALES_PAYMENT_METHOD_TYPE = 'fkSalesPaymentMethodType';

    /**
     * @var string
     */
    public const AMOUNT = 'amount';

    /**
     * @var string
     */
    public const SALES_ORDER = 'salesOrder';

    /**
     * @var string
     */
    public const SALES_PAYMENT_METHOD_TYPE = 'salesPaymentMethodType';

    /**
     * @var integer|null
     */
    protected $idSalesPayment;

    /**
     * @var integer|null
     */
    protected $fkSalesOrder;

    /**
     * @var integer|null
     */
    protected $fkSalesPaymentMethodType;

    /**
     * @var integer|null
     */
    protected $amount;

    /**
     * @var \Generated\Shared\Transfer\SpySalesOrderEntityTransfer|null
     */
    protected $salesOrder;

    /**
     * @var \Generated\Shared\Transfer\SpySalesPaymentMethodTypeEntityTransfer|null
     */
    protected $salesPaymentMethodType;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_sales_payment' => 'idSalesPayment',
        'idSalesPayment' => 'idSalesPayment',
        'IdSalesPayment' => 'idSalesPayment',
        'fk_sales_order' => 'fkSalesOrder',
        'fkSalesOrder' => 'fkSalesOrder',
        'FkSalesOrder' => 'fkSalesOrder',
        'fk_sales_payment_method_type' => 'fkSalesPaymentMethodType',
        'fkSalesPaymentMethodType' => 'fkSalesPaymentMethodType',
        'FkSalesPaymentMethodType' => 'fkSalesPaymentMethodType',
        'amount' => 'amount',
        'Amount' => 'amount',
        'sales_order' => 'salesOrder',
        'salesOrder' => 'salesOrder',
        'SalesOrder' => 'salesOrder',
        'sales_payment_method_type' => 'salesPaymentMethodType',
        'salesPaymentMethodType' => 'salesPaymentMethodType',
        'SalesPaymentMethodType' => 'salesPaymentMethodType',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SALES_PAYMENT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_sales_payment',
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
        self::FK_SALES_PAYMENT_METHOD_TYPE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_sales_payment_method_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AMOUNT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'amount',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SALES_ORDER => [
            'type' => 'Generated\Shared\Transfer\SpySalesOrderEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'sales_order',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SALES_PAYMENT_METHOD_TYPE => [
            'type' => 'Generated\Shared\Transfer\SpySalesPaymentMethodTypeEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'sales_payment_method_type',
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
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\Payment\Persistence\SpySalesPayment';


    /**
     * @module 
     *
     * @param integer|null $idSalesPayment
     *
     * @return $this
     */
    public function setIdSalesPayment($idSalesPayment)
    {
        $this->idSalesPayment = $idSalesPayment;
        $this->modifiedProperties[self::ID_SALES_PAYMENT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdSalesPayment()
    {
        return $this->idSalesPayment;
    }

    /**
     * @module 
     *
     * @param integer|null $idSalesPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesPaymentOrFail($idSalesPayment)
    {
        if ($idSalesPayment === null) {
            $this->throwNullValueException(static::ID_SALES_PAYMENT);
        }

        return $this->setIdSalesPayment($idSalesPayment);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdSalesPaymentOrFail()
    {
        if ($this->idSalesPayment === null) {
            $this->throwNullValueException(static::ID_SALES_PAYMENT);
        }

        return $this->idSalesPayment;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesPayment()
    {
        $this->assertPropertyIsSet(self::ID_SALES_PAYMENT);

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
     * @param integer|null $fkSalesPaymentMethodType
     *
     * @return $this
     */
    public function setFkSalesPaymentMethodType($fkSalesPaymentMethodType)
    {
        $this->fkSalesPaymentMethodType = $fkSalesPaymentMethodType;
        $this->modifiedProperties[self::FK_SALES_PAYMENT_METHOD_TYPE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkSalesPaymentMethodType()
    {
        return $this->fkSalesPaymentMethodType;
    }

    /**
     * @module 
     *
     * @param integer|null $fkSalesPaymentMethodType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkSalesPaymentMethodTypeOrFail($fkSalesPaymentMethodType)
    {
        if ($fkSalesPaymentMethodType === null) {
            $this->throwNullValueException(static::FK_SALES_PAYMENT_METHOD_TYPE);
        }

        return $this->setFkSalesPaymentMethodType($fkSalesPaymentMethodType);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkSalesPaymentMethodTypeOrFail()
    {
        if ($this->fkSalesPaymentMethodType === null) {
            $this->throwNullValueException(static::FK_SALES_PAYMENT_METHOD_TYPE);
        }

        return $this->fkSalesPaymentMethodType;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkSalesPaymentMethodType()
    {
        $this->assertPropertyIsSet(self::FK_SALES_PAYMENT_METHOD_TYPE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        $this->modifiedProperties[self::AMOUNT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @module 
     *
     * @param integer|null $amount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAmountOrFail($amount)
    {
        if ($amount === null) {
            $this->throwNullValueException(static::AMOUNT);
        }

        return $this->setAmount($amount);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getAmountOrFail()
    {
        if ($this->amount === null) {
            $this->throwNullValueException(static::AMOUNT);
        }

        return $this->amount;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAmount()
    {
        $this->assertPropertyIsSet(self::AMOUNT);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderEntityTransfer|null $salesOrder
     *
     * @return $this
     */
    public function setSalesOrder(SpySalesOrderEntityTransfer $salesOrder = null)
    {
        $this->salesOrder = $salesOrder;
        $this->modifiedProperties[self::SALES_ORDER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderEntityTransfer|null
     */
    public function getSalesOrder()
    {
        return $this->salesOrder;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderEntityTransfer $salesOrder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSalesOrderOrFail(SpySalesOrderEntityTransfer $salesOrder)
    {
        return $this->setSalesOrder($salesOrder);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderEntityTransfer
     */
    public function getSalesOrderOrFail()
    {
        if ($this->salesOrder === null) {
            $this->throwNullValueException(static::SALES_ORDER);
        }

        return $this->salesOrder;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSalesOrder()
    {
        $this->assertPropertyIsSet(self::SALES_ORDER);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesPaymentMethodTypeEntityTransfer|null $salesPaymentMethodType
     *
     * @return $this
     */
    public function setSalesPaymentMethodType(SpySalesPaymentMethodTypeEntityTransfer $salesPaymentMethodType = null)
    {
        $this->salesPaymentMethodType = $salesPaymentMethodType;
        $this->modifiedProperties[self::SALES_PAYMENT_METHOD_TYPE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpySalesPaymentMethodTypeEntityTransfer|null
     */
    public function getSalesPaymentMethodType()
    {
        return $this->salesPaymentMethodType;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesPaymentMethodTypeEntityTransfer $salesPaymentMethodType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSalesPaymentMethodTypeOrFail(SpySalesPaymentMethodTypeEntityTransfer $salesPaymentMethodType)
    {
        return $this->setSalesPaymentMethodType($salesPaymentMethodType);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpySalesPaymentMethodTypeEntityTransfer
     */
    public function getSalesPaymentMethodTypeOrFail()
    {
        if ($this->salesPaymentMethodType === null) {
            $this->throwNullValueException(static::SALES_PAYMENT_METHOD_TYPE);
        }

        return $this->salesPaymentMethodType;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSalesPaymentMethodType()
    {
        $this->assertPropertyIsSet(self::SALES_PAYMENT_METHOD_TYPE);

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
                case 'idSalesPayment':
                case 'fkSalesOrder':
                case 'fkSalesPaymentMethodType':
                case 'amount':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'salesOrder':
                case 'salesPaymentMethodType':
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
                case 'idSalesPayment':
                case 'fkSalesOrder':
                case 'fkSalesPaymentMethodType':
                case 'amount':
                    $values[$arrayKey] = $value;

                    break;
                case 'salesOrder':
                case 'salesPaymentMethodType':
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
                case 'idSalesPayment':
                case 'fkSalesOrder':
                case 'fkSalesPaymentMethodType':
                case 'amount':
                    $values[$arrayKey] = $value;

                    break;
                case 'salesOrder':
                case 'salesPaymentMethodType':
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
            'idSalesPayment' => $this->idSalesPayment,
            'fkSalesOrder' => $this->fkSalesOrder,
            'fkSalesPaymentMethodType' => $this->fkSalesPaymentMethodType,
            'amount' => $this->amount,
            'salesOrder' => $this->salesOrder,
            'salesPaymentMethodType' => $this->salesPaymentMethodType,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_payment' => $this->idSalesPayment,
            'fk_sales_order' => $this->fkSalesOrder,
            'fk_sales_payment_method_type' => $this->fkSalesPaymentMethodType,
            'amount' => $this->amount,
            'sales_order' => $this->salesOrder,
            'sales_payment_method_type' => $this->salesPaymentMethodType,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_payment' => $this->idSalesPayment instanceof AbstractTransfer ? $this->idSalesPayment->toArray(true, false) : $this->idSalesPayment,
            'fk_sales_order' => $this->fkSalesOrder instanceof AbstractTransfer ? $this->fkSalesOrder->toArray(true, false) : $this->fkSalesOrder,
            'fk_sales_payment_method_type' => $this->fkSalesPaymentMethodType instanceof AbstractTransfer ? $this->fkSalesPaymentMethodType->toArray(true, false) : $this->fkSalesPaymentMethodType,
            'amount' => $this->amount instanceof AbstractTransfer ? $this->amount->toArray(true, false) : $this->amount,
            'sales_order' => $this->salesOrder instanceof AbstractTransfer ? $this->salesOrder->toArray(true, false) : $this->salesOrder,
            'sales_payment_method_type' => $this->salesPaymentMethodType instanceof AbstractTransfer ? $this->salesPaymentMethodType->toArray(true, false) : $this->salesPaymentMethodType,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idSalesPayment' => $this->idSalesPayment instanceof AbstractTransfer ? $this->idSalesPayment->toArray(true, true) : $this->idSalesPayment,
            'fkSalesOrder' => $this->fkSalesOrder instanceof AbstractTransfer ? $this->fkSalesOrder->toArray(true, true) : $this->fkSalesOrder,
            'fkSalesPaymentMethodType' => $this->fkSalesPaymentMethodType instanceof AbstractTransfer ? $this->fkSalesPaymentMethodType->toArray(true, true) : $this->fkSalesPaymentMethodType,
            'amount' => $this->amount instanceof AbstractTransfer ? $this->amount->toArray(true, true) : $this->amount,
            'salesOrder' => $this->salesOrder instanceof AbstractTransfer ? $this->salesOrder->toArray(true, true) : $this->salesOrder,
            'salesPaymentMethodType' => $this->salesPaymentMethodType instanceof AbstractTransfer ? $this->salesPaymentMethodType->toArray(true, true) : $this->salesPaymentMethodType,
        ];
    }
}
