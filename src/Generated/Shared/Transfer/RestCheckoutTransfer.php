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
class RestCheckoutTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PAYMENT_PROVIDERS = 'paymentProviders';

    /**
     * @var string
     */
    public const AVAILABLE_PAYMENT_METHODS = 'availablePaymentMethods';

    /**
     * @var \Generated\Shared\Transfer\PaymentProviderCollectionTransfer|null
     */
    protected $paymentProviders;

    /**
     * @var \Generated\Shared\Transfer\PaymentMethodsTransfer|null
     */
    protected $availablePaymentMethods;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'payment_providers' => 'paymentProviders',
        'paymentProviders' => 'paymentProviders',
        'PaymentProviders' => 'paymentProviders',
        'available_payment_methods' => 'availablePaymentMethods',
        'availablePaymentMethods' => 'availablePaymentMethods',
        'AvailablePaymentMethods' => 'availablePaymentMethods',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PAYMENT_PROVIDERS => [
            'type' => 'Generated\Shared\Transfer\PaymentProviderCollectionTransfer',
            'type_shim' => null,
            'name_underscore' => 'payment_providers',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AVAILABLE_PAYMENT_METHODS => [
            'type' => 'Generated\Shared\Transfer\PaymentMethodsTransfer',
            'type_shim' => null,
            'name_underscore' => 'available_payment_methods',
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
     * @module PaymentsRestApi
     *
     * @param \Generated\Shared\Transfer\PaymentProviderCollectionTransfer|null $paymentProviders
     *
     * @return $this
     */
    public function setPaymentProviders(PaymentProviderCollectionTransfer $paymentProviders = null)
    {
        $this->paymentProviders = $paymentProviders;
        $this->modifiedProperties[self::PAYMENT_PROVIDERS] = true;

        return $this;
    }

    /**
     * @module PaymentsRestApi
     *
     * @return \Generated\Shared\Transfer\PaymentProviderCollectionTransfer|null
     */
    public function getPaymentProviders()
    {
        return $this->paymentProviders;
    }

    /**
     * @module PaymentsRestApi
     *
     * @param \Generated\Shared\Transfer\PaymentProviderCollectionTransfer $paymentProviders
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPaymentProvidersOrFail(PaymentProviderCollectionTransfer $paymentProviders)
    {
        return $this->setPaymentProviders($paymentProviders);
    }

    /**
     * @module PaymentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PaymentProviderCollectionTransfer
     */
    public function getPaymentProvidersOrFail()
    {
        if ($this->paymentProviders === null) {
            $this->throwNullValueException(static::PAYMENT_PROVIDERS);
        }

        return $this->paymentProviders;
    }

    /**
     * @module PaymentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePaymentProviders()
    {
        $this->assertPropertyIsSet(self::PAYMENT_PROVIDERS);

        return $this;
    }

    /**
     * @module PaymentsRestApi
     *
     * @param \Generated\Shared\Transfer\PaymentMethodsTransfer|null $availablePaymentMethods
     *
     * @return $this
     */
    public function setAvailablePaymentMethods(PaymentMethodsTransfer $availablePaymentMethods = null)
    {
        $this->availablePaymentMethods = $availablePaymentMethods;
        $this->modifiedProperties[self::AVAILABLE_PAYMENT_METHODS] = true;

        return $this;
    }

    /**
     * @module PaymentsRestApi
     *
     * @return \Generated\Shared\Transfer\PaymentMethodsTransfer|null
     */
    public function getAvailablePaymentMethods()
    {
        return $this->availablePaymentMethods;
    }

    /**
     * @module PaymentsRestApi
     *
     * @param \Generated\Shared\Transfer\PaymentMethodsTransfer $availablePaymentMethods
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAvailablePaymentMethodsOrFail(PaymentMethodsTransfer $availablePaymentMethods)
    {
        return $this->setAvailablePaymentMethods($availablePaymentMethods);
    }

    /**
     * @module PaymentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PaymentMethodsTransfer
     */
    public function getAvailablePaymentMethodsOrFail()
    {
        if ($this->availablePaymentMethods === null) {
            $this->throwNullValueException(static::AVAILABLE_PAYMENT_METHODS);
        }

        return $this->availablePaymentMethods;
    }

    /**
     * @module PaymentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAvailablePaymentMethods()
    {
        $this->assertPropertyIsSet(self::AVAILABLE_PAYMENT_METHODS);

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
                case 'paymentProviders':
                case 'availablePaymentMethods':
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
                case 'paymentProviders':
                case 'availablePaymentMethods':
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
                case 'paymentProviders':
                case 'availablePaymentMethods':
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
            'paymentProviders' => $this->paymentProviders,
            'availablePaymentMethods' => $this->availablePaymentMethods,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'payment_providers' => $this->paymentProviders,
            'available_payment_methods' => $this->availablePaymentMethods,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'payment_providers' => $this->paymentProviders instanceof AbstractTransfer ? $this->paymentProviders->toArray(true, false) : $this->paymentProviders,
            'available_payment_methods' => $this->availablePaymentMethods instanceof AbstractTransfer ? $this->availablePaymentMethods->toArray(true, false) : $this->availablePaymentMethods,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'paymentProviders' => $this->paymentProviders instanceof AbstractTransfer ? $this->paymentProviders->toArray(true, true) : $this->paymentProviders,
            'availablePaymentMethods' => $this->availablePaymentMethods instanceof AbstractTransfer ? $this->availablePaymentMethods->toArray(true, true) : $this->availablePaymentMethods,
        ];
    }
}
