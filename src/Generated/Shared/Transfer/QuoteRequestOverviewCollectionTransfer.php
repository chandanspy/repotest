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
class QuoteRequestOverviewCollectionTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const QUOTE_REQUESTS = 'quoteRequests';

    /**
     * @var string
     */
    public const CURRENT_QUOTE_REQUEST = 'currentQuoteRequest';

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\QuoteRequestTransfer[]
     */
    protected $quoteRequests;

    /**
     * @var \Generated\Shared\Transfer\QuoteRequestTransfer|null
     */
    protected $currentQuoteRequest;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'quote_requests' => 'quoteRequests',
        'quoteRequests' => 'quoteRequests',
        'QuoteRequests' => 'quoteRequests',
        'current_quote_request' => 'currentQuoteRequest',
        'currentQuoteRequest' => 'currentQuoteRequest',
        'CurrentQuoteRequest' => 'currentQuoteRequest',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::QUOTE_REQUESTS => [
            'type' => 'Generated\Shared\Transfer\QuoteRequestTransfer',
            'type_shim' => null,
            'name_underscore' => 'quote_requests',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CURRENT_QUOTE_REQUEST => [
            'type' => 'Generated\Shared\Transfer\QuoteRequestTransfer',
            'type_shim' => null,
            'name_underscore' => 'current_quote_request',
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
     * @module QuoteRequestAgentWidget|QuoteRequestAgent
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\QuoteRequestTransfer[] $quoteRequests
     *
     * @return $this
     */
    public function setQuoteRequests(ArrayObject $quoteRequests)
    {
        $this->quoteRequests = $quoteRequests;
        $this->modifiedProperties[self::QUOTE_REQUESTS] = true;

        return $this;
    }

    /**
     * @module QuoteRequestAgentWidget|QuoteRequestAgent
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\QuoteRequestTransfer[]
     */
    public function getQuoteRequests()
    {
        return $this->quoteRequests;
    }

    /**
     * @module QuoteRequestAgentWidget|QuoteRequestAgent
     *
     * @param \Generated\Shared\Transfer\QuoteRequestTransfer $quoteRequest
     *
     * @return $this
     */
    public function addQuoteRequest(QuoteRequestTransfer $quoteRequest)
    {
        $this->quoteRequests[] = $quoteRequest;
        $this->modifiedProperties[self::QUOTE_REQUESTS] = true;

        return $this;
    }

    /**
     * @module QuoteRequestAgentWidget|QuoteRequestAgent
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuoteRequests()
    {
        $this->assertCollectionPropertyIsSet(self::QUOTE_REQUESTS);

        return $this;
    }

    /**
     * @module QuoteRequestAgentWidget|QuoteRequestAgent
     *
     * @param \Generated\Shared\Transfer\QuoteRequestTransfer|null $currentQuoteRequest
     *
     * @return $this
     */
    public function setCurrentQuoteRequest(QuoteRequestTransfer $currentQuoteRequest = null)
    {
        $this->currentQuoteRequest = $currentQuoteRequest;
        $this->modifiedProperties[self::CURRENT_QUOTE_REQUEST] = true;

        return $this;
    }

    /**
     * @module QuoteRequestAgentWidget|QuoteRequestAgent
     *
     * @return \Generated\Shared\Transfer\QuoteRequestTransfer|null
     */
    public function getCurrentQuoteRequest()
    {
        return $this->currentQuoteRequest;
    }

    /**
     * @module QuoteRequestAgentWidget|QuoteRequestAgent
     *
     * @param \Generated\Shared\Transfer\QuoteRequestTransfer $currentQuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCurrentQuoteRequestOrFail(QuoteRequestTransfer $currentQuoteRequest)
    {
        return $this->setCurrentQuoteRequest($currentQuoteRequest);
    }

    /**
     * @module QuoteRequestAgentWidget|QuoteRequestAgent
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\QuoteRequestTransfer
     */
    public function getCurrentQuoteRequestOrFail()
    {
        if ($this->currentQuoteRequest === null) {
            $this->throwNullValueException(static::CURRENT_QUOTE_REQUEST);
        }

        return $this->currentQuoteRequest;
    }

    /**
     * @module QuoteRequestAgentWidget|QuoteRequestAgent
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCurrentQuoteRequest()
    {
        $this->assertPropertyIsSet(self::CURRENT_QUOTE_REQUEST);

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
                case 'currentQuoteRequest':
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
                case 'quoteRequests':
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
                case 'currentQuoteRequest':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'quoteRequests':
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
                case 'currentQuoteRequest':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'quoteRequests':
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
        $this->quoteRequests = $this->quoteRequests ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'currentQuoteRequest' => $this->currentQuoteRequest,
            'quoteRequests' => $this->quoteRequests,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'current_quote_request' => $this->currentQuoteRequest,
            'quote_requests' => $this->quoteRequests,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'current_quote_request' => $this->currentQuoteRequest instanceof AbstractTransfer ? $this->currentQuoteRequest->toArray(true, false) : $this->currentQuoteRequest,
            'quote_requests' => $this->quoteRequests instanceof AbstractTransfer ? $this->quoteRequests->toArray(true, false) : $this->addValuesToCollection($this->quoteRequests, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'currentQuoteRequest' => $this->currentQuoteRequest instanceof AbstractTransfer ? $this->currentQuoteRequest->toArray(true, true) : $this->currentQuoteRequest,
            'quoteRequests' => $this->quoteRequests instanceof AbstractTransfer ? $this->quoteRequests->toArray(true, true) : $this->addValuesToCollection($this->quoteRequests, true, true),
        ];
    }
}
