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
class QuoteRequestVersionFilterTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const QUOTE_REQUEST = 'quoteRequest';

    /**
     * @var string
     */
    public const QUOTE_REQUEST_VERSION_REFERENCE = 'quoteRequestVersionReference';

    /**
     * @var \Generated\Shared\Transfer\QuoteRequestTransfer|null
     */
    protected $quoteRequest;

    /**
     * @var string|null
     */
    protected $quoteRequestVersionReference;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'quote_request' => 'quoteRequest',
        'quoteRequest' => 'quoteRequest',
        'QuoteRequest' => 'quoteRequest',
        'quote_request_version_reference' => 'quoteRequestVersionReference',
        'quoteRequestVersionReference' => 'quoteRequestVersionReference',
        'QuoteRequestVersionReference' => 'quoteRequestVersionReference',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::QUOTE_REQUEST => [
            'type' => 'Generated\Shared\Transfer\QuoteRequestTransfer',
            'type_shim' => null,
            'name_underscore' => 'quote_request',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::QUOTE_REQUEST_VERSION_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'quote_request_version_reference',
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
     * @module QuoteRequestAgentPage|QuoteRequestPage|QuoteRequest
     *
     * @param \Generated\Shared\Transfer\QuoteRequestTransfer|null $quoteRequest
     *
     * @return $this
     */
    public function setQuoteRequest(QuoteRequestTransfer $quoteRequest = null)
    {
        $this->quoteRequest = $quoteRequest;
        $this->modifiedProperties[self::QUOTE_REQUEST] = true;

        return $this;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestPage|QuoteRequest
     *
     * @return \Generated\Shared\Transfer\QuoteRequestTransfer|null
     */
    public function getQuoteRequest()
    {
        return $this->quoteRequest;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestPage|QuoteRequest
     *
     * @param \Generated\Shared\Transfer\QuoteRequestTransfer $quoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuoteRequestOrFail(QuoteRequestTransfer $quoteRequest)
    {
        return $this->setQuoteRequest($quoteRequest);
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestPage|QuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\QuoteRequestTransfer
     */
    public function getQuoteRequestOrFail()
    {
        if ($this->quoteRequest === null) {
            $this->throwNullValueException(static::QUOTE_REQUEST);
        }

        return $this->quoteRequest;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestPage|QuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuoteRequest()
    {
        $this->assertPropertyIsSet(self::QUOTE_REQUEST);

        return $this;
    }

    /**
     * @module QuoteRequest
     *
     * @param string|null $quoteRequestVersionReference
     *
     * @return $this
     */
    public function setQuoteRequestVersionReference($quoteRequestVersionReference)
    {
        $this->quoteRequestVersionReference = $quoteRequestVersionReference;
        $this->modifiedProperties[self::QUOTE_REQUEST_VERSION_REFERENCE] = true;

        return $this;
    }

    /**
     * @module QuoteRequest
     *
     * @return string|null
     */
    public function getQuoteRequestVersionReference()
    {
        return $this->quoteRequestVersionReference;
    }

    /**
     * @module QuoteRequest
     *
     * @param string|null $quoteRequestVersionReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuoteRequestVersionReferenceOrFail($quoteRequestVersionReference)
    {
        if ($quoteRequestVersionReference === null) {
            $this->throwNullValueException(static::QUOTE_REQUEST_VERSION_REFERENCE);
        }

        return $this->setQuoteRequestVersionReference($quoteRequestVersionReference);
    }

    /**
     * @module QuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getQuoteRequestVersionReferenceOrFail()
    {
        if ($this->quoteRequestVersionReference === null) {
            $this->throwNullValueException(static::QUOTE_REQUEST_VERSION_REFERENCE);
        }

        return $this->quoteRequestVersionReference;
    }

    /**
     * @module QuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuoteRequestVersionReference()
    {
        $this->assertPropertyIsSet(self::QUOTE_REQUEST_VERSION_REFERENCE);

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
                case 'quoteRequestVersionReference':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'quoteRequest':
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
                case 'quoteRequestVersionReference':
                    $values[$arrayKey] = $value;

                    break;
                case 'quoteRequest':
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
                case 'quoteRequestVersionReference':
                    $values[$arrayKey] = $value;

                    break;
                case 'quoteRequest':
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
            'quoteRequestVersionReference' => $this->quoteRequestVersionReference,
            'quoteRequest' => $this->quoteRequest,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'quote_request_version_reference' => $this->quoteRequestVersionReference,
            'quote_request' => $this->quoteRequest,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'quote_request_version_reference' => $this->quoteRequestVersionReference instanceof AbstractTransfer ? $this->quoteRequestVersionReference->toArray(true, false) : $this->quoteRequestVersionReference,
            'quote_request' => $this->quoteRequest instanceof AbstractTransfer ? $this->quoteRequest->toArray(true, false) : $this->quoteRequest,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'quoteRequestVersionReference' => $this->quoteRequestVersionReference instanceof AbstractTransfer ? $this->quoteRequestVersionReference->toArray(true, true) : $this->quoteRequestVersionReference,
            'quoteRequest' => $this->quoteRequest instanceof AbstractTransfer ? $this->quoteRequest->toArray(true, true) : $this->quoteRequest,
        ];
    }
}
