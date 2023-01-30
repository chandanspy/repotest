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
class PaymentMethodDeletedTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const PROVIDER_NAME = 'providerName';

    /**
     * @var string
     */
    public const PAYMENT_AUTHORIZATION_ENDPOINT = 'paymentAuthorizationEndpoint';

    /**
     * @var string
     */
    public const MESSAGE_ATTRIBUTES = 'messageAttributes';

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $providerName;

    /**
     * @var string|null
     */
    protected $paymentAuthorizationEndpoint;

    /**
     * @var \Generated\Shared\Transfer\MessageAttributesTransfer|null
     */
    protected $messageAttributes;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'name' => 'name',
        'Name' => 'name',
        'provider_name' => 'providerName',
        'providerName' => 'providerName',
        'ProviderName' => 'providerName',
        'payment_authorization_endpoint' => 'paymentAuthorizationEndpoint',
        'paymentAuthorizationEndpoint' => 'paymentAuthorizationEndpoint',
        'PaymentAuthorizationEndpoint' => 'paymentAuthorizationEndpoint',
        'message_attributes' => 'messageAttributes',
        'messageAttributes' => 'messageAttributes',
        'MessageAttributes' => 'messageAttributes',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PROVIDER_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'provider_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PAYMENT_AUTHORIZATION_ENDPOINT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'payment_authorization_endpoint',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MESSAGE_ATTRIBUTES => [
            'type' => 'Generated\Shared\Transfer\MessageAttributesTransfer',
            'type_shim' => null,
            'name_underscore' => 'message_attributes',
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
     * @param string|null $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        $this->modifiedProperties[self::NAME] = true;

        return $this;
    }

    /**
     * @module Payment
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module Payment
     *
     * @param string|null $name
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNameOrFail($name)
    {
        if ($name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->setName($name);
    }

    /**
     * @module Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNameOrFail()
    {
        if ($this->name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->name;
    }

    /**
     * @module Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireName()
    {
        $this->assertPropertyIsSet(self::NAME);

        return $this;
    }

    /**
     * @module Payment
     *
     * @param string|null $providerName
     *
     * @return $this
     */
    public function setProviderName($providerName)
    {
        $this->providerName = $providerName;
        $this->modifiedProperties[self::PROVIDER_NAME] = true;

        return $this;
    }

    /**
     * @module Payment
     *
     * @return string|null
     */
    public function getProviderName()
    {
        return $this->providerName;
    }

    /**
     * @module Payment
     *
     * @param string|null $providerName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProviderNameOrFail($providerName)
    {
        if ($providerName === null) {
            $this->throwNullValueException(static::PROVIDER_NAME);
        }

        return $this->setProviderName($providerName);
    }

    /**
     * @module Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getProviderNameOrFail()
    {
        if ($this->providerName === null) {
            $this->throwNullValueException(static::PROVIDER_NAME);
        }

        return $this->providerName;
    }

    /**
     * @module Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProviderName()
    {
        $this->assertPropertyIsSet(self::PROVIDER_NAME);

        return $this;
    }

    /**
     * @module Payment
     *
     * @param string|null $paymentAuthorizationEndpoint
     *
     * @return $this
     */
    public function setPaymentAuthorizationEndpoint($paymentAuthorizationEndpoint)
    {
        $this->paymentAuthorizationEndpoint = $paymentAuthorizationEndpoint;
        $this->modifiedProperties[self::PAYMENT_AUTHORIZATION_ENDPOINT] = true;

        return $this;
    }

    /**
     * @module Payment
     *
     * @return string|null
     */
    public function getPaymentAuthorizationEndpoint()
    {
        return $this->paymentAuthorizationEndpoint;
    }

    /**
     * @module Payment
     *
     * @param string|null $paymentAuthorizationEndpoint
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPaymentAuthorizationEndpointOrFail($paymentAuthorizationEndpoint)
    {
        if ($paymentAuthorizationEndpoint === null) {
            $this->throwNullValueException(static::PAYMENT_AUTHORIZATION_ENDPOINT);
        }

        return $this->setPaymentAuthorizationEndpoint($paymentAuthorizationEndpoint);
    }

    /**
     * @module Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPaymentAuthorizationEndpointOrFail()
    {
        if ($this->paymentAuthorizationEndpoint === null) {
            $this->throwNullValueException(static::PAYMENT_AUTHORIZATION_ENDPOINT);
        }

        return $this->paymentAuthorizationEndpoint;
    }

    /**
     * @module Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePaymentAuthorizationEndpoint()
    {
        $this->assertPropertyIsSet(self::PAYMENT_AUTHORIZATION_ENDPOINT);

        return $this;
    }

    /**
     * @module Payment
     *
     * @param \Generated\Shared\Transfer\MessageAttributesTransfer|null $messageAttributes
     *
     * @return $this
     */
    public function setMessageAttributes(MessageAttributesTransfer $messageAttributes = null)
    {
        $this->messageAttributes = $messageAttributes;
        $this->modifiedProperties[self::MESSAGE_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module Payment
     *
     * @return \Generated\Shared\Transfer\MessageAttributesTransfer|null
     */
    public function getMessageAttributes()
    {
        return $this->messageAttributes;
    }

    /**
     * @module Payment
     *
     * @param \Generated\Shared\Transfer\MessageAttributesTransfer $messageAttributes
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMessageAttributesOrFail(MessageAttributesTransfer $messageAttributes)
    {
        return $this->setMessageAttributes($messageAttributes);
    }

    /**
     * @module Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\MessageAttributesTransfer
     */
    public function getMessageAttributesOrFail()
    {
        if ($this->messageAttributes === null) {
            $this->throwNullValueException(static::MESSAGE_ATTRIBUTES);
        }

        return $this->messageAttributes;
    }

    /**
     * @module Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMessageAttributes()
    {
        $this->assertPropertyIsSet(self::MESSAGE_ATTRIBUTES);

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
                case 'name':
                case 'providerName':
                case 'paymentAuthorizationEndpoint':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'messageAttributes':
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
                case 'name':
                case 'providerName':
                case 'paymentAuthorizationEndpoint':
                    $values[$arrayKey] = $value;

                    break;
                case 'messageAttributes':
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
                case 'name':
                case 'providerName':
                case 'paymentAuthorizationEndpoint':
                    $values[$arrayKey] = $value;

                    break;
                case 'messageAttributes':
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
            'name' => $this->name,
            'providerName' => $this->providerName,
            'paymentAuthorizationEndpoint' => $this->paymentAuthorizationEndpoint,
            'messageAttributes' => $this->messageAttributes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name,
            'provider_name' => $this->providerName,
            'payment_authorization_endpoint' => $this->paymentAuthorizationEndpoint,
            'message_attributes' => $this->messageAttributes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'provider_name' => $this->providerName instanceof AbstractTransfer ? $this->providerName->toArray(true, false) : $this->providerName,
            'payment_authorization_endpoint' => $this->paymentAuthorizationEndpoint instanceof AbstractTransfer ? $this->paymentAuthorizationEndpoint->toArray(true, false) : $this->paymentAuthorizationEndpoint,
            'message_attributes' => $this->messageAttributes instanceof AbstractTransfer ? $this->messageAttributes->toArray(true, false) : $this->messageAttributes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'providerName' => $this->providerName instanceof AbstractTransfer ? $this->providerName->toArray(true, true) : $this->providerName,
            'paymentAuthorizationEndpoint' => $this->paymentAuthorizationEndpoint instanceof AbstractTransfer ? $this->paymentAuthorizationEndpoint->toArray(true, true) : $this->paymentAuthorizationEndpoint,
            'messageAttributes' => $this->messageAttributes instanceof AbstractTransfer ? $this->messageAttributes->toArray(true, true) : $this->messageAttributes,
        ];
    }
}
