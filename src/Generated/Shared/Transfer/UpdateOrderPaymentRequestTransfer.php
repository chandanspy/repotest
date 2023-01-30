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
class UpdateOrderPaymentRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PAYMENT_IDENTIFIER = 'paymentIdentifier';

    /**
     * @var string
     */
    public const DATA_PAYLOAD = 'dataPayload';

    /**
     * @var string|null
     */
    protected $paymentIdentifier;

    /**
     * @var array
     */
    protected $dataPayload = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'payment_identifier' => 'paymentIdentifier',
        'paymentIdentifier' => 'paymentIdentifier',
        'PaymentIdentifier' => 'paymentIdentifier',
        'data_payload' => 'dataPayload',
        'dataPayload' => 'dataPayload',
        'DataPayload' => 'dataPayload',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PAYMENT_IDENTIFIER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'payment_identifier',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DATA_PAYLOAD => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'data_payload',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module OrderPaymentsRestApi
     *
     * @param string|null $paymentIdentifier
     *
     * @return $this
     */
    public function setPaymentIdentifier($paymentIdentifier)
    {
        $this->paymentIdentifier = $paymentIdentifier;
        $this->modifiedProperties[self::PAYMENT_IDENTIFIER] = true;

        return $this;
    }

    /**
     * @module OrderPaymentsRestApi
     *
     * @return string|null
     */
    public function getPaymentIdentifier()
    {
        return $this->paymentIdentifier;
    }

    /**
     * @module OrderPaymentsRestApi
     *
     * @param string|null $paymentIdentifier
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPaymentIdentifierOrFail($paymentIdentifier)
    {
        if ($paymentIdentifier === null) {
            $this->throwNullValueException(static::PAYMENT_IDENTIFIER);
        }

        return $this->setPaymentIdentifier($paymentIdentifier);
    }

    /**
     * @module OrderPaymentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPaymentIdentifierOrFail()
    {
        if ($this->paymentIdentifier === null) {
            $this->throwNullValueException(static::PAYMENT_IDENTIFIER);
        }

        return $this->paymentIdentifier;
    }

    /**
     * @module OrderPaymentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePaymentIdentifier()
    {
        $this->assertPropertyIsSet(self::PAYMENT_IDENTIFIER);

        return $this;
    }

    /**
     * @module OrderPaymentsRestApi
     *
     * @param array|null $dataPayload
     *
     * @return $this
     */
    public function setDataPayload(array $dataPayload = null)
    {
        if ($dataPayload === null) {
            $dataPayload = [];
        }

        $this->dataPayload = $dataPayload;
        $this->modifiedProperties[self::DATA_PAYLOAD] = true;

        return $this;
    }

    /**
     * @module OrderPaymentsRestApi
     *
     * @return array
     */
    public function getDataPayload()
    {
        return $this->dataPayload;
    }

    /**
     * @module OrderPaymentsRestApi
     *
     * @param mixed $dataPayload
     *
     * @return $this
     */
    public function addDataPayload($dataPayload)
    {
        $this->dataPayload[] = $dataPayload;
        $this->modifiedProperties[self::DATA_PAYLOAD] = true;

        return $this;
    }

    /**
     * @module OrderPaymentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDataPayload()
    {
        $this->assertPropertyIsSet(self::DATA_PAYLOAD);

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
                case 'paymentIdentifier':
                case 'dataPayload':
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
                case 'paymentIdentifier':
                case 'dataPayload':
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
                case 'paymentIdentifier':
                case 'dataPayload':
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
            'paymentIdentifier' => $this->paymentIdentifier,
            'dataPayload' => $this->dataPayload,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'payment_identifier' => $this->paymentIdentifier,
            'data_payload' => $this->dataPayload,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'payment_identifier' => $this->paymentIdentifier instanceof AbstractTransfer ? $this->paymentIdentifier->toArray(true, false) : $this->paymentIdentifier,
            'data_payload' => $this->dataPayload instanceof AbstractTransfer ? $this->dataPayload->toArray(true, false) : $this->dataPayload,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'paymentIdentifier' => $this->paymentIdentifier instanceof AbstractTransfer ? $this->paymentIdentifier->toArray(true, true) : $this->paymentIdentifier,
            'dataPayload' => $this->dataPayload instanceof AbstractTransfer ? $this->dataPayload->toArray(true, true) : $this->dataPayload,
        ];
    }
}
