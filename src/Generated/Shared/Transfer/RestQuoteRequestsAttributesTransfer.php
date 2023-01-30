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
class RestQuoteRequestsAttributesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SHOWN_VERSION = 'shownVersion';

    /**
     * @var string
     */
    public const QUOTE_REQUEST_REFERENCE = 'quoteRequestReference';

    /**
     * @var \Generated\Shared\Transfer\RestQuoteRequestVersionTransfer|null
     */
    protected $shownVersion;

    /**
     * @var string|null
     */
    protected $quoteRequestReference;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'shown_version' => 'shownVersion',
        'shownVersion' => 'shownVersion',
        'ShownVersion' => 'shownVersion',
        'quote_request_reference' => 'quoteRequestReference',
        'quoteRequestReference' => 'quoteRequestReference',
        'QuoteRequestReference' => 'quoteRequestReference',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::SHOWN_VERSION => [
            'type' => 'Generated\Shared\Transfer\RestQuoteRequestVersionTransfer',
            'type_shim' => null,
            'name_underscore' => 'shown_version',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
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
    ];

    /**
     * @module ConfigurableBundlesRestApi|ProductMeasurementUnitsRestApi|ProductOptionsRestApi|ProductsRestApi|ShipmentsRestApi
     *
     * @param \Generated\Shared\Transfer\RestQuoteRequestVersionTransfer|null $shownVersion
     *
     * @return $this
     */
    public function setShownVersion(RestQuoteRequestVersionTransfer $shownVersion = null)
    {
        $this->shownVersion = $shownVersion;
        $this->modifiedProperties[self::SHOWN_VERSION] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlesRestApi|ProductMeasurementUnitsRestApi|ProductOptionsRestApi|ProductsRestApi|ShipmentsRestApi
     *
     * @return \Generated\Shared\Transfer\RestQuoteRequestVersionTransfer|null
     */
    public function getShownVersion()
    {
        return $this->shownVersion;
    }

    /**
     * @module ConfigurableBundlesRestApi|ProductMeasurementUnitsRestApi|ProductOptionsRestApi|ProductsRestApi|ShipmentsRestApi
     *
     * @param \Generated\Shared\Transfer\RestQuoteRequestVersionTransfer $shownVersion
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setShownVersionOrFail(RestQuoteRequestVersionTransfer $shownVersion)
    {
        return $this->setShownVersion($shownVersion);
    }

    /**
     * @module ConfigurableBundlesRestApi|ProductMeasurementUnitsRestApi|ProductOptionsRestApi|ProductsRestApi|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\RestQuoteRequestVersionTransfer
     */
    public function getShownVersionOrFail()
    {
        if ($this->shownVersion === null) {
            $this->throwNullValueException(static::SHOWN_VERSION);
        }

        return $this->shownVersion;
    }

    /**
     * @module ConfigurableBundlesRestApi|ProductMeasurementUnitsRestApi|ProductOptionsRestApi|ProductsRestApi|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireShownVersion()
    {
        $this->assertPropertyIsSet(self::SHOWN_VERSION);

        return $this;
    }

    /**
     * @module ConfigurableBundlesRestApi|ProductMeasurementUnitsRestApi|ProductOptionsRestApi|ShipmentsRestApi
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
     * @module ConfigurableBundlesRestApi|ProductMeasurementUnitsRestApi|ProductOptionsRestApi|ShipmentsRestApi
     *
     * @return string|null
     */
    public function getQuoteRequestReference()
    {
        return $this->quoteRequestReference;
    }

    /**
     * @module ConfigurableBundlesRestApi|ProductMeasurementUnitsRestApi|ProductOptionsRestApi|ShipmentsRestApi
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
     * @module ConfigurableBundlesRestApi|ProductMeasurementUnitsRestApi|ProductOptionsRestApi|ShipmentsRestApi
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
     * @module ConfigurableBundlesRestApi|ProductMeasurementUnitsRestApi|ProductOptionsRestApi|ShipmentsRestApi
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
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'shownVersion':
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
                    $values[$arrayKey] = $value;

                    break;
                case 'shownVersion':
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
                    $values[$arrayKey] = $value;

                    break;
                case 'shownVersion':
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
            'shownVersion' => $this->shownVersion,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'quote_request_reference' => $this->quoteRequestReference,
            'shown_version' => $this->shownVersion,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'quote_request_reference' => $this->quoteRequestReference instanceof AbstractTransfer ? $this->quoteRequestReference->toArray(true, false) : $this->quoteRequestReference,
            'shown_version' => $this->shownVersion instanceof AbstractTransfer ? $this->shownVersion->toArray(true, false) : $this->shownVersion,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'quoteRequestReference' => $this->quoteRequestReference instanceof AbstractTransfer ? $this->quoteRequestReference->toArray(true, true) : $this->quoteRequestReference,
            'shownVersion' => $this->shownVersion instanceof AbstractTransfer ? $this->shownVersion->toArray(true, true) : $this->shownVersion,
        ];
    }
}
