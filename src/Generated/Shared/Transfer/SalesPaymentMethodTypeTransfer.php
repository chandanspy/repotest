<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 *
 * @deprecated Will be removed without replacement.
 */
class SalesPaymentMethodTypeTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_SALES_PAYMENT_METHOD_TYPE = 'idSalesPaymentMethodType';

    /**
     * @var string
     */
    public const PAYMENT_PROVIDER = 'paymentProvider';

    /**
     * @var string
     */
    public const PAYMENT_METHOD = 'paymentMethod';

    /**
     * @var int|null
     */
    protected $idSalesPaymentMethodType;

    /**
     * @var \Generated\Shared\Transfer\PaymentProviderTransfer|null
     */
    protected $paymentProvider;

    /**
     * @var \Generated\Shared\Transfer\PaymentMethodTransfer|null
     */
    protected $paymentMethod;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_sales_payment_method_type' => 'idSalesPaymentMethodType',
        'idSalesPaymentMethodType' => 'idSalesPaymentMethodType',
        'IdSalesPaymentMethodType' => 'idSalesPaymentMethodType',
        'payment_provider' => 'paymentProvider',
        'paymentProvider' => 'paymentProvider',
        'PaymentProvider' => 'paymentProvider',
        'payment_method' => 'paymentMethod',
        'paymentMethod' => 'paymentMethod',
        'PaymentMethod' => 'paymentMethod',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SALES_PAYMENT_METHOD_TYPE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_sales_payment_method_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PAYMENT_PROVIDER => [
            'type' => 'Generated\Shared\Transfer\PaymentProviderTransfer',
            'type_shim' => null,
            'name_underscore' => 'payment_provider',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PAYMENT_METHOD => [
            'type' => 'Generated\Shared\Transfer\PaymentMethodTransfer',
            'type_shim' => null,
            'name_underscore' => 'payment_method',
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
     * @module Payment
     *
     * @param int|null $idSalesPaymentMethodType
     *
     * @return $this
     */
    public function setIdSalesPaymentMethodType($idSalesPaymentMethodType)
    {
        $this->idSalesPaymentMethodType = $idSalesPaymentMethodType;
        $this->modifiedProperties[self::ID_SALES_PAYMENT_METHOD_TYPE] = true;

        return $this;
    }

    /**
     * @module Payment
     *
     * @return int|null
     */
    public function getIdSalesPaymentMethodType()
    {
        return $this->idSalesPaymentMethodType;
    }

    /**
     * @module Payment
     *
     * @param int|null $idSalesPaymentMethodType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesPaymentMethodTypeOrFail($idSalesPaymentMethodType)
    {
        if ($idSalesPaymentMethodType === null) {
            $this->throwNullValueException(static::ID_SALES_PAYMENT_METHOD_TYPE);
        }

        return $this->setIdSalesPaymentMethodType($idSalesPaymentMethodType);
    }

    /**
     * @module Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdSalesPaymentMethodTypeOrFail()
    {
        if ($this->idSalesPaymentMethodType === null) {
            $this->throwNullValueException(static::ID_SALES_PAYMENT_METHOD_TYPE);
        }

        return $this->idSalesPaymentMethodType;
    }

    /**
     * @module Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesPaymentMethodType()
    {
        $this->assertPropertyIsSet(self::ID_SALES_PAYMENT_METHOD_TYPE);

        return $this;
    }

    /**
     * @module Payment
     *
     * @param \Generated\Shared\Transfer\PaymentProviderTransfer|null $paymentProvider
     *
     * @return $this
     */
    public function setPaymentProvider(PaymentProviderTransfer $paymentProvider = null)
    {
        $this->paymentProvider = $paymentProvider;
        $this->modifiedProperties[self::PAYMENT_PROVIDER] = true;

        return $this;
    }

    /**
     * @module Payment
     *
     * @return \Generated\Shared\Transfer\PaymentProviderTransfer|null
     */
    public function getPaymentProvider()
    {
        return $this->paymentProvider;
    }

    /**
     * @module Payment
     *
     * @param \Generated\Shared\Transfer\PaymentProviderTransfer $paymentProvider
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPaymentProviderOrFail(PaymentProviderTransfer $paymentProvider)
    {
        return $this->setPaymentProvider($paymentProvider);
    }

    /**
     * @module Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PaymentProviderTransfer
     */
    public function getPaymentProviderOrFail()
    {
        if ($this->paymentProvider === null) {
            $this->throwNullValueException(static::PAYMENT_PROVIDER);
        }

        return $this->paymentProvider;
    }

    /**
     * @module Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePaymentProvider()
    {
        $this->assertPropertyIsSet(self::PAYMENT_PROVIDER);

        return $this;
    }

    /**
     * @module Payment
     *
     * @param \Generated\Shared\Transfer\PaymentMethodTransfer|null $paymentMethod
     *
     * @return $this
     */
    public function setPaymentMethod(PaymentMethodTransfer $paymentMethod = null)
    {
        $this->paymentMethod = $paymentMethod;
        $this->modifiedProperties[self::PAYMENT_METHOD] = true;

        return $this;
    }

    /**
     * @module Payment
     *
     * @return \Generated\Shared\Transfer\PaymentMethodTransfer|null
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * @module Payment
     *
     * @param \Generated\Shared\Transfer\PaymentMethodTransfer $paymentMethod
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPaymentMethodOrFail(PaymentMethodTransfer $paymentMethod)
    {
        return $this->setPaymentMethod($paymentMethod);
    }

    /**
     * @module Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PaymentMethodTransfer
     */
    public function getPaymentMethodOrFail()
    {
        if ($this->paymentMethod === null) {
            $this->throwNullValueException(static::PAYMENT_METHOD);
        }

        return $this->paymentMethod;
    }

    /**
     * @module Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePaymentMethod()
    {
        $this->assertPropertyIsSet(self::PAYMENT_METHOD);

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
                case 'idSalesPaymentMethodType':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'paymentProvider':
                case 'paymentMethod':
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
                case 'idSalesPaymentMethodType':
                    $values[$arrayKey] = $value;

                    break;
                case 'paymentProvider':
                case 'paymentMethod':
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
                case 'idSalesPaymentMethodType':
                    $values[$arrayKey] = $value;

                    break;
                case 'paymentProvider':
                case 'paymentMethod':
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
            'idSalesPaymentMethodType' => $this->idSalesPaymentMethodType,
            'paymentProvider' => $this->paymentProvider,
            'paymentMethod' => $this->paymentMethod,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_payment_method_type' => $this->idSalesPaymentMethodType,
            'payment_provider' => $this->paymentProvider,
            'payment_method' => $this->paymentMethod,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_payment_method_type' => $this->idSalesPaymentMethodType instanceof AbstractTransfer ? $this->idSalesPaymentMethodType->toArray(true, false) : $this->idSalesPaymentMethodType,
            'payment_provider' => $this->paymentProvider instanceof AbstractTransfer ? $this->paymentProvider->toArray(true, false) : $this->paymentProvider,
            'payment_method' => $this->paymentMethod instanceof AbstractTransfer ? $this->paymentMethod->toArray(true, false) : $this->paymentMethod,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idSalesPaymentMethodType' => $this->idSalesPaymentMethodType instanceof AbstractTransfer ? $this->idSalesPaymentMethodType->toArray(true, true) : $this->idSalesPaymentMethodType,
            'paymentProvider' => $this->paymentProvider instanceof AbstractTransfer ? $this->paymentProvider->toArray(true, true) : $this->paymentProvider,
            'paymentMethod' => $this->paymentMethod instanceof AbstractTransfer ? $this->paymentMethod->toArray(true, true) : $this->paymentMethod,
        ];
    }
}
