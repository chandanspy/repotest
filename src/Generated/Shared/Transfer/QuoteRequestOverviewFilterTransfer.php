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
class QuoteRequestOverviewFilterTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const QUOTE_REQUEST_REFERENCE = 'quoteRequestReference';

    /**
     * @var string
     */
    public const PAGINATION = 'pagination';

    /**
     * @var string
     */
    public const EXCLUDED_STATUSES = 'excludedStatuses';

    /**
     * @var string|null
     */
    protected $quoteRequestReference;

    /**
     * @var \Generated\Shared\Transfer\PaginationTransfer|null
     */
    protected $pagination;

    /**
     * @var array
     */
    protected $excludedStatuses = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'quote_request_reference' => 'quoteRequestReference',
        'quoteRequestReference' => 'quoteRequestReference',
        'QuoteRequestReference' => 'quoteRequestReference',
        'pagination' => 'pagination',
        'Pagination' => 'pagination',
        'excluded_statuses' => 'excludedStatuses',
        'excludedStatuses' => 'excludedStatuses',
        'ExcludedStatuses' => 'excludedStatuses',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::QUOTE_REQUEST_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'quote_request_reference',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PAGINATION => [
            'type' => 'Generated\Shared\Transfer\PaginationTransfer',
            'type_shim' => null,
            'name_underscore' => 'pagination',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::EXCLUDED_STATUSES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'excluded_statuses',
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
     * @module QuoteRequestAgentWidget|QuoteRequestAgent
     *
     * @param string|null $quoteRequestReference
     *
     * @return $this
     */
    public function setQuoteRequestReference($quoteRequestReference)
    {
        $this->quoteRequestReference = $quoteRequestReference;
        $this->modifiedProperties[self::QUOTE_REQUEST_REFERENCE] = true;

        return $this;
    }

    /**
     * @module QuoteRequestAgentWidget|QuoteRequestAgent
     *
     * @return string|null
     */
    public function getQuoteRequestReference()
    {
        return $this->quoteRequestReference;
    }

    /**
     * @module QuoteRequestAgentWidget|QuoteRequestAgent
     *
     * @param string|null $quoteRequestReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuoteRequestReferenceOrFail($quoteRequestReference)
    {
        if ($quoteRequestReference === null) {
            $this->throwNullValueException(static::QUOTE_REQUEST_REFERENCE);
        }

        return $this->setQuoteRequestReference($quoteRequestReference);
    }

    /**
     * @module QuoteRequestAgentWidget|QuoteRequestAgent
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getQuoteRequestReferenceOrFail()
    {
        if ($this->quoteRequestReference === null) {
            $this->throwNullValueException(static::QUOTE_REQUEST_REFERENCE);
        }

        return $this->quoteRequestReference;
    }

    /**
     * @module QuoteRequestAgentWidget|QuoteRequestAgent
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuoteRequestReference()
    {
        $this->assertPropertyIsSet(self::QUOTE_REQUEST_REFERENCE);

        return $this;
    }

    /**
     * @module QuoteRequestAgentWidget|QuoteRequestAgent
     *
     * @param \Generated\Shared\Transfer\PaginationTransfer|null $pagination
     *
     * @return $this
     */
    public function setPagination(PaginationTransfer $pagination = null)
    {
        $this->pagination = $pagination;
        $this->modifiedProperties[self::PAGINATION] = true;

        return $this;
    }

    /**
     * @module QuoteRequestAgentWidget|QuoteRequestAgent
     *
     * @return \Generated\Shared\Transfer\PaginationTransfer|null
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    /**
     * @module QuoteRequestAgentWidget|QuoteRequestAgent
     *
     * @param \Generated\Shared\Transfer\PaginationTransfer $pagination
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPaginationOrFail(PaginationTransfer $pagination)
    {
        return $this->setPagination($pagination);
    }

    /**
     * @module QuoteRequestAgentWidget|QuoteRequestAgent
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PaginationTransfer
     */
    public function getPaginationOrFail()
    {
        if ($this->pagination === null) {
            $this->throwNullValueException(static::PAGINATION);
        }

        return $this->pagination;
    }

    /**
     * @module QuoteRequestAgentWidget|QuoteRequestAgent
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePagination()
    {
        $this->assertPropertyIsSet(self::PAGINATION);

        return $this;
    }

    /**
     * @module QuoteRequestAgentWidget|QuoteRequestAgent
     *
     * @param array|null $excludedStatuses
     *
     * @return $this
     */
    public function setExcludedStatuses(array $excludedStatuses = null)
    {
        if ($excludedStatuses === null) {
            $excludedStatuses = [];
        }

        $this->excludedStatuses = $excludedStatuses;
        $this->modifiedProperties[self::EXCLUDED_STATUSES] = true;

        return $this;
    }

    /**
     * @module QuoteRequestAgentWidget|QuoteRequestAgent
     *
     * @return array
     */
    public function getExcludedStatuses()
    {
        return $this->excludedStatuses;
    }

    /**
     * @module QuoteRequestAgentWidget|QuoteRequestAgent
     *
     * @param mixed $excludedStatuses
     *
     * @return $this
     */
    public function addExcludedStatuses($excludedStatuses)
    {
        $this->excludedStatuses[] = $excludedStatuses;
        $this->modifiedProperties[self::EXCLUDED_STATUSES] = true;

        return $this;
    }

    /**
     * @module QuoteRequestAgentWidget|QuoteRequestAgent
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireExcludedStatuses()
    {
        $this->assertPropertyIsSet(self::EXCLUDED_STATUSES);

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
                case 'quoteRequestReference':
                case 'excludedStatuses':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'pagination':
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
                case 'quoteRequestReference':
                case 'excludedStatuses':
                    $values[$arrayKey] = $value;

                    break;
                case 'pagination':
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
                case 'quoteRequestReference':
                case 'excludedStatuses':
                    $values[$arrayKey] = $value;

                    break;
                case 'pagination':
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
            'quoteRequestReference' => $this->quoteRequestReference,
            'excludedStatuses' => $this->excludedStatuses,
            'pagination' => $this->pagination,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'quote_request_reference' => $this->quoteRequestReference,
            'excluded_statuses' => $this->excludedStatuses,
            'pagination' => $this->pagination,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'quote_request_reference' => $this->quoteRequestReference instanceof AbstractTransfer ? $this->quoteRequestReference->toArray(true, false) : $this->quoteRequestReference,
            'excluded_statuses' => $this->excludedStatuses instanceof AbstractTransfer ? $this->excludedStatuses->toArray(true, false) : $this->excludedStatuses,
            'pagination' => $this->pagination instanceof AbstractTransfer ? $this->pagination->toArray(true, false) : $this->pagination,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'quoteRequestReference' => $this->quoteRequestReference instanceof AbstractTransfer ? $this->quoteRequestReference->toArray(true, true) : $this->quoteRequestReference,
            'excludedStatuses' => $this->excludedStatuses instanceof AbstractTransfer ? $this->excludedStatuses->toArray(true, true) : $this->excludedStatuses,
            'pagination' => $this->pagination instanceof AbstractTransfer ? $this->pagination->toArray(true, true) : $this->pagination,
        ];
    }
}
