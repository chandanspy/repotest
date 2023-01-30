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
class RestCheckoutRequestAttributesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const CUSTOMER = 'customer';

    /**
     * @var string
     */
    public const ID_CART = 'idCart';

    /**
     * @var string
     */
    public const BILLING_ADDRESS = 'billingAddress';

    /**
     * @var string
     */
    public const SHIPPING_ADDRESS = 'shippingAddress';

    /**
     * @var string
     */
    public const PAYMENTS = 'payments';

    /**
     * @var string
     */
    public const SHIPMENT = 'shipment';

    /**
     * @var string
     */
    public const SHIPMENTS = 'shipments';

    /**
     * @var \Generated\Shared\Transfer\RestCustomerTransfer|null
     */
    protected $customer;

    /**
     * @var string|null
     */
    protected $idCart;

    /**
     * @var \Generated\Shared\Transfer\RestAddressTransfer|null
     */
    protected $billingAddress;

    /**
     * @var \Generated\Shared\Transfer\RestAddressTransfer|null
     */
    protected $shippingAddress;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\RestPaymentTransfer[]
     */
    protected $payments;

    /**
     * @var \Generated\Shared\Transfer\RestShipmentTransfer|null
     */
    protected $shipment;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\RestShipmentsTransfer[]
     */
    protected $shipments;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'customer' => 'customer',
        'Customer' => 'customer',
        'id_cart' => 'idCart',
        'idCart' => 'idCart',
        'IdCart' => 'idCart',
        'billing_address' => 'billingAddress',
        'billingAddress' => 'billingAddress',
        'BillingAddress' => 'billingAddress',
        'shipping_address' => 'shippingAddress',
        'shippingAddress' => 'shippingAddress',
        'ShippingAddress' => 'shippingAddress',
        'payments' => 'payments',
        'Payments' => 'payments',
        'shipment' => 'shipment',
        'Shipment' => 'shipment',
        'shipments' => 'shipments',
        'Shipments' => 'shipments',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::CUSTOMER => [
            'type' => 'Generated\Shared\Transfer\RestCustomerTransfer',
            'type_shim' => null,
            'name_underscore' => 'customer',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'yes',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_CART => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'id_cart',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'required',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::BILLING_ADDRESS => [
            'type' => 'Generated\Shared\Transfer\RestAddressTransfer',
            'type_shim' => null,
            'name_underscore' => 'billing_address',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'yes',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SHIPPING_ADDRESS => [
            'type' => 'Generated\Shared\Transfer\RestAddressTransfer',
            'type_shim' => null,
            'name_underscore' => 'shipping_address',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'yes',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PAYMENTS => [
            'type' => 'Generated\Shared\Transfer\RestPaymentTransfer',
            'type_shim' => null,
            'name_underscore' => 'payments',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'yes',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SHIPMENT => [
            'type' => 'Generated\Shared\Transfer\RestShipmentTransfer',
            'type_shim' => null,
            'name_underscore' => 'shipment',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'yes',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SHIPMENTS => [
            'type' => 'Generated\Shared\Transfer\RestShipmentsTransfer',
            'type_shim' => null,
            'name_underscore' => 'shipments',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'yes',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module CheckoutRestApi|CompanyBusinessUnitAddressesRestApi|CompanyUsersRestApi|CustomersRestApi
     *
     * @param \Generated\Shared\Transfer\RestCustomerTransfer|null $customer
     *
     * @return $this
     */
    public function setCustomer(RestCustomerTransfer $customer = null)
    {
        $this->customer = $customer;
        $this->modifiedProperties[self::CUSTOMER] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi|CompanyBusinessUnitAddressesRestApi|CompanyUsersRestApi|CustomersRestApi
     *
     * @return \Generated\Shared\Transfer\RestCustomerTransfer|null
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @module CheckoutRestApi|CompanyBusinessUnitAddressesRestApi|CompanyUsersRestApi|CustomersRestApi
     *
     * @param \Generated\Shared\Transfer\RestCustomerTransfer $customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCustomerOrFail(RestCustomerTransfer $customer)
    {
        return $this->setCustomer($customer);
    }

    /**
     * @module CheckoutRestApi|CompanyBusinessUnitAddressesRestApi|CompanyUsersRestApi|CustomersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\RestCustomerTransfer
     */
    public function getCustomerOrFail()
    {
        if ($this->customer === null) {
            $this->throwNullValueException(static::CUSTOMER);
        }

        return $this->customer;
    }

    /**
     * @module CheckoutRestApi|CompanyBusinessUnitAddressesRestApi|CompanyUsersRestApi|CustomersRestApi
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
     * @module CheckoutRestApi
     *
     * @param string|null $idCart
     *
     * @return $this
     */
    public function setIdCart($idCart)
    {
        $this->idCart = $idCart;
        $this->modifiedProperties[self::ID_CART] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi
     *
     * @return string|null
     */
    public function getIdCart()
    {
        return $this->idCart;
    }

    /**
     * @module CheckoutRestApi
     *
     * @param string|null $idCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCartOrFail($idCart)
    {
        if ($idCart === null) {
            $this->throwNullValueException(static::ID_CART);
        }

        return $this->setIdCart($idCart);
    }

    /**
     * @module CheckoutRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIdCartOrFail()
    {
        if ($this->idCart === null) {
            $this->throwNullValueException(static::ID_CART);
        }

        return $this->idCart;
    }

    /**
     * @module CheckoutRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCart()
    {
        $this->assertPropertyIsSet(self::ID_CART);

        return $this;
    }

    /**
     * @module CheckoutRestApi|CompanyBusinessUnitAddressesRestApi|CustomersRestApi
     *
     * @param \Generated\Shared\Transfer\RestAddressTransfer|null $billingAddress
     *
     * @return $this
     */
    public function setBillingAddress(RestAddressTransfer $billingAddress = null)
    {
        $this->billingAddress = $billingAddress;
        $this->modifiedProperties[self::BILLING_ADDRESS] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi|CompanyBusinessUnitAddressesRestApi|CustomersRestApi
     *
     * @return \Generated\Shared\Transfer\RestAddressTransfer|null
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * @module CheckoutRestApi|CompanyBusinessUnitAddressesRestApi|CustomersRestApi
     *
     * @param \Generated\Shared\Transfer\RestAddressTransfer $billingAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setBillingAddressOrFail(RestAddressTransfer $billingAddress)
    {
        return $this->setBillingAddress($billingAddress);
    }

    /**
     * @module CheckoutRestApi|CompanyBusinessUnitAddressesRestApi|CustomersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\RestAddressTransfer
     */
    public function getBillingAddressOrFail()
    {
        if ($this->billingAddress === null) {
            $this->throwNullValueException(static::BILLING_ADDRESS);
        }

        return $this->billingAddress;
    }

    /**
     * @module CheckoutRestApi|CompanyBusinessUnitAddressesRestApi|CustomersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireBillingAddress()
    {
        $this->assertPropertyIsSet(self::BILLING_ADDRESS);

        return $this;
    }

    /**
     * @module CheckoutRestApi|CompanyBusinessUnitAddressesRestApi|CustomersRestApi|ShipmentsRestApi
     *
     * @param \Generated\Shared\Transfer\RestAddressTransfer|null $shippingAddress
     *
     * @return $this
     */
    public function setShippingAddress(RestAddressTransfer $shippingAddress = null)
    {
        $this->shippingAddress = $shippingAddress;
        $this->modifiedProperties[self::SHIPPING_ADDRESS] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi|CompanyBusinessUnitAddressesRestApi|CustomersRestApi|ShipmentsRestApi
     *
     * @return \Generated\Shared\Transfer\RestAddressTransfer|null
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * @module CheckoutRestApi|CompanyBusinessUnitAddressesRestApi|CustomersRestApi|ShipmentsRestApi
     *
     * @param \Generated\Shared\Transfer\RestAddressTransfer $shippingAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setShippingAddressOrFail(RestAddressTransfer $shippingAddress)
    {
        return $this->setShippingAddress($shippingAddress);
    }

    /**
     * @module CheckoutRestApi|CompanyBusinessUnitAddressesRestApi|CustomersRestApi|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\RestAddressTransfer
     */
    public function getShippingAddressOrFail()
    {
        if ($this->shippingAddress === null) {
            $this->throwNullValueException(static::SHIPPING_ADDRESS);
        }

        return $this->shippingAddress;
    }

    /**
     * @module CheckoutRestApi|CompanyBusinessUnitAddressesRestApi|CustomersRestApi|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireShippingAddress()
    {
        $this->assertPropertyIsSet(self::SHIPPING_ADDRESS);

        return $this;
    }

    /**
     * @module CheckoutRestApi|PaymentsRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\RestPaymentTransfer[] $payments
     *
     * @return $this
     */
    public function setPayments(ArrayObject $payments)
    {
        $this->payments = $payments;
        $this->modifiedProperties[self::PAYMENTS] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi|PaymentsRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\RestPaymentTransfer[]
     */
    public function getPayments()
    {
        return $this->payments;
    }

    /**
     * @module CheckoutRestApi|PaymentsRestApi
     *
     * @param \Generated\Shared\Transfer\RestPaymentTransfer $payment
     *
     * @return $this
     */
    public function addPayment(RestPaymentTransfer $payment)
    {
        $this->payments[] = $payment;
        $this->modifiedProperties[self::PAYMENTS] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi|PaymentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePayments()
    {
        $this->assertCollectionPropertyIsSet(self::PAYMENTS);

        return $this;
    }

    /**
     * @module CheckoutRestApi|ShipmentsRestApi
     *
     * @param \Generated\Shared\Transfer\RestShipmentTransfer|null $shipment
     *
     * @return $this
     */
    public function setShipment(RestShipmentTransfer $shipment = null)
    {
        $this->shipment = $shipment;
        $this->modifiedProperties[self::SHIPMENT] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi|ShipmentsRestApi
     *
     * @return \Generated\Shared\Transfer\RestShipmentTransfer|null
     */
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * @module CheckoutRestApi|ShipmentsRestApi
     *
     * @param \Generated\Shared\Transfer\RestShipmentTransfer $shipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setShipmentOrFail(RestShipmentTransfer $shipment)
    {
        return $this->setShipment($shipment);
    }

    /**
     * @module CheckoutRestApi|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\RestShipmentTransfer
     */
    public function getShipmentOrFail()
    {
        if ($this->shipment === null) {
            $this->throwNullValueException(static::SHIPMENT);
        }

        return $this->shipment;
    }

    /**
     * @module CheckoutRestApi|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireShipment()
    {
        $this->assertPropertyIsSet(self::SHIPMENT);

        return $this;
    }

    /**
     * @module ShipmentsRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\RestShipmentsTransfer[] $shipments
     *
     * @return $this
     */
    public function setShipments(ArrayObject $shipments)
    {
        $this->shipments = $shipments;
        $this->modifiedProperties[self::SHIPMENTS] = true;

        return $this;
    }

    /**
     * @module ShipmentsRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\RestShipmentsTransfer[]
     */
    public function getShipments()
    {
        return $this->shipments;
    }

    /**
     * @module ShipmentsRestApi
     *
     * @param \Generated\Shared\Transfer\RestShipmentsTransfer $shipment
     *
     * @return $this
     */
    public function addShipment(RestShipmentsTransfer $shipment)
    {
        $this->shipments[] = $shipment;
        $this->modifiedProperties[self::SHIPMENTS] = true;

        return $this;
    }

    /**
     * @module ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireShipments()
    {
        $this->assertCollectionPropertyIsSet(self::SHIPMENTS);

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
                case 'idCart':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'customer':
                case 'billingAddress':
                case 'shippingAddress':
                case 'shipment':
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
                case 'payments':
                case 'shipments':
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
                case 'idCart':
                    $values[$arrayKey] = $value;

                    break;
                case 'customer':
                case 'billingAddress':
                case 'shippingAddress':
                case 'shipment':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'payments':
                case 'shipments':
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
                case 'idCart':
                    $values[$arrayKey] = $value;

                    break;
                case 'customer':
                case 'billingAddress':
                case 'shippingAddress':
                case 'shipment':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'payments':
                case 'shipments':
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
        $this->payments = $this->payments ?: new ArrayObject();
        $this->shipments = $this->shipments ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idCart' => $this->idCart,
            'customer' => $this->customer,
            'billingAddress' => $this->billingAddress,
            'shippingAddress' => $this->shippingAddress,
            'shipment' => $this->shipment,
            'payments' => $this->payments,
            'shipments' => $this->shipments,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_cart' => $this->idCart,
            'customer' => $this->customer,
            'billing_address' => $this->billingAddress,
            'shipping_address' => $this->shippingAddress,
            'shipment' => $this->shipment,
            'payments' => $this->payments,
            'shipments' => $this->shipments,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_cart' => $this->idCart instanceof AbstractTransfer ? $this->idCart->toArray(true, false) : $this->idCart,
            'customer' => $this->customer instanceof AbstractTransfer ? $this->customer->toArray(true, false) : $this->customer,
            'billing_address' => $this->billingAddress instanceof AbstractTransfer ? $this->billingAddress->toArray(true, false) : $this->billingAddress,
            'shipping_address' => $this->shippingAddress instanceof AbstractTransfer ? $this->shippingAddress->toArray(true, false) : $this->shippingAddress,
            'shipment' => $this->shipment instanceof AbstractTransfer ? $this->shipment->toArray(true, false) : $this->shipment,
            'payments' => $this->payments instanceof AbstractTransfer ? $this->payments->toArray(true, false) : $this->addValuesToCollection($this->payments, true, false),
            'shipments' => $this->shipments instanceof AbstractTransfer ? $this->shipments->toArray(true, false) : $this->addValuesToCollection($this->shipments, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCart' => $this->idCart instanceof AbstractTransfer ? $this->idCart->toArray(true, true) : $this->idCart,
            'customer' => $this->customer instanceof AbstractTransfer ? $this->customer->toArray(true, true) : $this->customer,
            'billingAddress' => $this->billingAddress instanceof AbstractTransfer ? $this->billingAddress->toArray(true, true) : $this->billingAddress,
            'shippingAddress' => $this->shippingAddress instanceof AbstractTransfer ? $this->shippingAddress->toArray(true, true) : $this->shippingAddress,
            'shipment' => $this->shipment instanceof AbstractTransfer ? $this->shipment->toArray(true, true) : $this->shipment,
            'payments' => $this->payments instanceof AbstractTransfer ? $this->payments->toArray(true, true) : $this->addValuesToCollection($this->payments, true, true),
            'shipments' => $this->shipments instanceof AbstractTransfer ? $this->shipments->toArray(true, true) : $this->addValuesToCollection($this->shipments, true, true),
        ];
    }
}
