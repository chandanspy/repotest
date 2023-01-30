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
class RestPaymentProviderTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PAYMENT_PROVIDER_NAME = 'paymentProviderName';

    /**
     * @var string
     */
    public const PAYMENT_METHODS = 'paymentMethods';

    /**
     * @var string|null
     */
    protected $paymentProviderName;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\RestPaymentMethodTransfer[]
     */
    protected $paymentMethods;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'payment_provider_name' => 'paymentProviderName',
        'paymentProviderName' => 'paymentProviderName',
        'PaymentProviderName' => 'paymentProviderName',
        'payment_methods' => 'paymentMethods',
        'paymentMethods' => 'paymentMethods',
        'PaymentMethods' => 'paymentMethods',
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
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PAYMENT_METHODS => [
            'type' => 'Generated\Shared\Transfer\RestPaymentMethodTransfer',
            'type_shim' => null,
            'name_underscore' => 'payment_methods',
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
     * @module CheckoutRestApi
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
     * @module CheckoutRestApi
     *
     * @return string|null
     */
    public function getPaymentProviderName()
    {
        return $this->paymentProviderName;
    }

    /**
     * @module CheckoutRestApi
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
     * @module CheckoutRestApi
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
     * @module CheckoutRestApi
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
     * @module CheckoutRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\RestPaymentMethodTransfer[] $paymentMethods
     *
     * @return $this
     */
    public function setPaymentMethods(ArrayObject $paymentMethods)
    {
        $this->paymentMethods = $paymentMethods;
        $this->modifiedProperties[self::PAYMENT_METHODS] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\RestPaymentMethodTransfer[]
     */
    public function getPaymentMethods()
    {
        return $this->paymentMethods;
    }

    /**
     * @module CheckoutRestApi
     *
     * @param \Generated\Shared\Transfer\RestPaymentMethodTransfer $paymentMethod
     *
     * @return $this
     */
    public function addPaymentMethod(RestPaymentMethodTransfer $paymentMethod)
    {
        $this->paymentMethods[] = $paymentMethod;
        $this->modifiedProperties[self::PAYMENT_METHODS] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePaymentMethods()
    {
        $this->assertCollectionPropertyIsSet(self::PAYMENT_METHODS);

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
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'paymentMethods':
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
                case 'paymentProviderName':
                    $values[$arrayKey] = $value;

                    break;
                case 'paymentMethods':
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
                case 'paymentProviderName':
                    $values[$arrayKey] = $value;

                    break;
                case 'paymentMethods':
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
        $this->paymentMethods = $this->paymentMethods ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'paymentProviderName' => $this->paymentProviderName,
            'paymentMethods' => $this->paymentMethods,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'payment_provider_name' => $this->paymentProviderName,
            'payment_methods' => $this->paymentMethods,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'payment_provider_name' => $this->paymentProviderName instanceof AbstractTransfer ? $this->paymentProviderName->toArray(true, false) : $this->paymentProviderName,
            'payment_methods' => $this->paymentMethods instanceof AbstractTransfer ? $this->paymentMethods->toArray(true, false) : $this->addValuesToCollection($this->paymentMethods, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'paymentProviderName' => $this->paymentProviderName instanceof AbstractTransfer ? $this->paymentProviderName->toArray(true, true) : $this->paymentProviderName,
            'paymentMethods' => $this->paymentMethods instanceof AbstractTransfer ? $this->paymentMethods->toArray(true, true) : $this->addValuesToCollection($this->paymentMethods, true, true),
        ];
    }
}
