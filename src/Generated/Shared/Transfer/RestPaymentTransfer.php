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
class RestPaymentTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PAYMENT_PROVIDER_NAME = 'paymentProviderName';

    /**
     * @var string
     */
    public const PAYMENT_METHOD_NAME = 'paymentMethodName';

    /**
     * @var string
     */
    public const PAYMENT_SELECTION = 'paymentSelection';

    /**
     * @var string|null
     */
    protected $paymentProviderName;

    /**
     * @var string|null
     */
    protected $paymentMethodName;

    /**
     * @var string|null
     */
    protected $paymentSelection;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'payment_provider_name' => 'paymentProviderName',
        'paymentProviderName' => 'paymentProviderName',
        'PaymentProviderName' => 'paymentProviderName',
        'payment_method_name' => 'paymentMethodName',
        'paymentMethodName' => 'paymentMethodName',
        'PaymentMethodName' => 'paymentMethodName',
        'payment_selection' => 'paymentSelection',
        'paymentSelection' => 'paymentSelection',
        'PaymentSelection' => 'paymentSelection',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PAYMENT_PROVIDER_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'payment_provider_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'required',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PAYMENT_METHOD_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'payment_method_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'required',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PAYMENT_SELECTION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'payment_selection',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'yes',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module CheckoutRestApi|PaymentsRestApi
     *
     * @param string|null $paymentProviderName
     *
     * @return $this
     */
    public function setPaymentProviderName($paymentProviderName)
    {
        $this->paymentProviderName = $paymentProviderName;
        $this->modifiedProperties[self::PAYMENT_PROVIDER_NAME] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi|PaymentsRestApi
     *
     * @return string|null
     */
    public function getPaymentProviderName()
    {
        return $this->paymentProviderName;
    }

    /**
     * @module CheckoutRestApi|PaymentsRestApi
     *
     * @param string|null $paymentProviderName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPaymentProviderNameOrFail($paymentProviderName)
    {
        if ($paymentProviderName === null) {
            $this->throwNullValueException(static::PAYMENT_PROVIDER_NAME);
        }

        return $this->setPaymentProviderName($paymentProviderName);
    }

    /**
     * @module CheckoutRestApi|PaymentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPaymentProviderNameOrFail()
    {
        if ($this->paymentProviderName === null) {
            $this->throwNullValueException(static::PAYMENT_PROVIDER_NAME);
        }

        return $this->paymentProviderName;
    }

    /**
     * @module CheckoutRestApi|PaymentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePaymentProviderName()
    {
        $this->assertPropertyIsSet(self::PAYMENT_PROVIDER_NAME);

        return $this;
    }

    /**
     * @module CheckoutRestApi|PaymentsRestApi
     *
     * @param string|null $paymentMethodName
     *
     * @return $this
     */
    public function setPaymentMethodName($paymentMethodName)
    {
        $this->paymentMethodName = $paymentMethodName;
        $this->modifiedProperties[self::PAYMENT_METHOD_NAME] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi|PaymentsRestApi
     *
     * @return string|null
     */
    public function getPaymentMethodName()
    {
        return $this->paymentMethodName;
    }

    /**
     * @module CheckoutRestApi|PaymentsRestApi
     *
     * @param string|null $paymentMethodName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPaymentMethodNameOrFail($paymentMethodName)
    {
        if ($paymentMethodName === null) {
            $this->throwNullValueException(static::PAYMENT_METHOD_NAME);
        }

        return $this->setPaymentMethodName($paymentMethodName);
    }

    /**
     * @module CheckoutRestApi|PaymentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPaymentMethodNameOrFail()
    {
        if ($this->paymentMethodName === null) {
            $this->throwNullValueException(static::PAYMENT_METHOD_NAME);
        }

        return $this->paymentMethodName;
    }

    /**
     * @module CheckoutRestApi|PaymentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePaymentMethodName()
    {
        $this->assertPropertyIsSet(self::PAYMENT_METHOD_NAME);

        return $this;
    }

    /**
     * @module CheckoutRestApi
     *
     * @param string|null $paymentSelection
     *
     * @return $this
     */
    public function setPaymentSelection($paymentSelection)
    {
        $this->paymentSelection = $paymentSelection;
        $this->modifiedProperties[self::PAYMENT_SELECTION] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi
     *
     * @return string|null
     */
    public function getPaymentSelection()
    {
        return $this->paymentSelection;
    }

    /**
     * @module CheckoutRestApi
     *
     * @param string|null $paymentSelection
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPaymentSelectionOrFail($paymentSelection)
    {
        if ($paymentSelection === null) {
            $this->throwNullValueException(static::PAYMENT_SELECTION);
        }

        return $this->setPaymentSelection($paymentSelection);
    }

    /**
     * @module CheckoutRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPaymentSelectionOrFail()
    {
        if ($this->paymentSelection === null) {
            $this->throwNullValueException(static::PAYMENT_SELECTION);
        }

        return $this->paymentSelection;
    }

    /**
     * @module CheckoutRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePaymentSelection()
    {
        $this->assertPropertyIsSet(self::PAYMENT_SELECTION);

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
                case 'paymentProviderName':
                case 'paymentMethodName':
                case 'paymentSelection':
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
                case 'paymentProviderName':
                case 'paymentMethodName':
                case 'paymentSelection':
                    $values[$arrayKey] = $value;

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
                case 'paymentProviderName':
                case 'paymentMethodName':
                case 'paymentSelection':
                    $values[$arrayKey] = $value;

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
            'paymentProviderName' => $this->paymentProviderName,
            'paymentMethodName' => $this->paymentMethodName,
            'paymentSelection' => $this->paymentSelection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'payment_provider_name' => $this->paymentProviderName,
            'payment_method_name' => $this->paymentMethodName,
            'payment_selection' => $this->paymentSelection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'payment_provider_name' => $this->paymentProviderName instanceof AbstractTransfer ? $this->paymentProviderName->toArray(true, false) : $this->paymentProviderName,
            'payment_method_name' => $this->paymentMethodName instanceof AbstractTransfer ? $this->paymentMethodName->toArray(true, false) : $this->paymentMethodName,
            'payment_selection' => $this->paymentSelection instanceof AbstractTransfer ? $this->paymentSelection->toArray(true, false) : $this->paymentSelection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'paymentProviderName' => $this->paymentProviderName instanceof AbstractTransfer ? $this->paymentProviderName->toArray(true, true) : $this->paymentProviderName,
            'paymentMethodName' => $this->paymentMethodName instanceof AbstractTransfer ? $this->paymentMethodName->toArray(true, true) : $this->paymentMethodName,
            'paymentSelection' => $this->paymentSelection instanceof AbstractTransfer ? $this->paymentSelection->toArray(true, true) : $this->paymentSelection,
        ];
    }
}
