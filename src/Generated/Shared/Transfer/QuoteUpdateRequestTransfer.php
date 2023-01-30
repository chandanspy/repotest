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
class QuoteUpdateRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const QUOTE_UPDATE_REQUEST_ATTRIBUTES = 'quoteUpdateRequestAttributes';

    /**
     * @var string
     */
    public const ID_QUOTE = 'idQuote';

    /**
     * @var string
     */
    public const CUSTOMER = 'customer';

    /**
     * @var \Generated\Shared\Transfer\QuoteUpdateRequestAttributesTransfer|null
     */
    protected $quoteUpdateRequestAttributes;

    /**
     * @var int|null
     */
    protected $idQuote;

    /**
     * @var \Generated\Shared\Transfer\CustomerTransfer|null
     */
    protected $customer;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'quote_update_request_attributes' => 'quoteUpdateRequestAttributes',
        'quoteUpdateRequestAttributes' => 'quoteUpdateRequestAttributes',
        'QuoteUpdateRequestAttributes' => 'quoteUpdateRequestAttributes',
        'id_quote' => 'idQuote',
        'idQuote' => 'idQuote',
        'IdQuote' => 'idQuote',
        'customer' => 'customer',
        'Customer' => 'customer',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::QUOTE_UPDATE_REQUEST_ATTRIBUTES => [
            'type' => 'Generated\Shared\Transfer\QuoteUpdateRequestAttributesTransfer',
            'type_shim' => null,
            'name_underscore' => 'quote_update_request_attributes',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_QUOTE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_quote',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CUSTOMER => [
            'type' => 'Generated\Shared\Transfer\CustomerTransfer',
            'type_shim' => null,
            'name_underscore' => 'customer',
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
     * @module CartsRestApi|MultiCart|OrderCustomReference|PersistentCart|SharedCart
     *
     * @param \Generated\Shared\Transfer\QuoteUpdateRequestAttributesTransfer|null $quoteUpdateRequestAttributes
     *
     * @return $this
     */
    public function setQuoteUpdateRequestAttributes(QuoteUpdateRequestAttributesTransfer $quoteUpdateRequestAttributes = null)
    {
        $this->quoteUpdateRequestAttributes = $quoteUpdateRequestAttributes;
        $this->modifiedProperties[self::QUOTE_UPDATE_REQUEST_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module CartsRestApi|MultiCart|OrderCustomReference|PersistentCart|SharedCart
     *
     * @return \Generated\Shared\Transfer\QuoteUpdateRequestAttributesTransfer|null
     */
    public function getQuoteUpdateRequestAttributes()
    {
        return $this->quoteUpdateRequestAttributes;
    }

    /**
     * @module CartsRestApi|MultiCart|OrderCustomReference|PersistentCart|SharedCart
     *
     * @param \Generated\Shared\Transfer\QuoteUpdateRequestAttributesTransfer $quoteUpdateRequestAttributes
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuoteUpdateRequestAttributesOrFail(QuoteUpdateRequestAttributesTransfer $quoteUpdateRequestAttributes)
    {
        return $this->setQuoteUpdateRequestAttributes($quoteUpdateRequestAttributes);
    }

    /**
     * @module CartsRestApi|MultiCart|OrderCustomReference|PersistentCart|SharedCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\QuoteUpdateRequestAttributesTransfer
     */
    public function getQuoteUpdateRequestAttributesOrFail()
    {
        if ($this->quoteUpdateRequestAttributes === null) {
            $this->throwNullValueException(static::QUOTE_UPDATE_REQUEST_ATTRIBUTES);
        }

        return $this->quoteUpdateRequestAttributes;
    }

    /**
     * @module CartsRestApi|MultiCart|OrderCustomReference|PersistentCart|SharedCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuoteUpdateRequestAttributes()
    {
        $this->assertPropertyIsSet(self::QUOTE_UPDATE_REQUEST_ATTRIBUTES);

        return $this;
    }

    /**
     * @module MultiCart|OrderCustomReference|PersistentCart|SharedCart
     *
     * @param int|null $idQuote
     *
     * @return $this
     */
    public function setIdQuote($idQuote)
    {
        $this->idQuote = $idQuote;
        $this->modifiedProperties[self::ID_QUOTE] = true;

        return $this;
    }

    /**
     * @module MultiCart|OrderCustomReference|PersistentCart|SharedCart
     *
     * @return int|null
     */
    public function getIdQuote()
    {
        return $this->idQuote;
    }

    /**
     * @module MultiCart|OrderCustomReference|PersistentCart|SharedCart
     *
     * @param int|null $idQuote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdQuoteOrFail($idQuote)
    {
        if ($idQuote === null) {
            $this->throwNullValueException(static::ID_QUOTE);
        }

        return $this->setIdQuote($idQuote);
    }

    /**
     * @module MultiCart|OrderCustomReference|PersistentCart|SharedCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdQuoteOrFail()
    {
        if ($this->idQuote === null) {
            $this->throwNullValueException(static::ID_QUOTE);
        }

        return $this->idQuote;
    }

    /**
     * @module MultiCart|OrderCustomReference|PersistentCart|SharedCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdQuote()
    {
        $this->assertPropertyIsSet(self::ID_QUOTE);

        return $this;
    }

    /**
     * @module MultiCart|OrderCustomReference|PersistentCart|SharedCart
     *
     * @param \Generated\Shared\Transfer\CustomerTransfer|null $customer
     *
     * @return $this
     */
    public function setCustomer(CustomerTransfer $customer = null)
    {
        $this->customer = $customer;
        $this->modifiedProperties[self::CUSTOMER] = true;

        return $this;
    }

    /**
     * @module MultiCart|OrderCustomReference|PersistentCart|SharedCart
     *
     * @return \Generated\Shared\Transfer\CustomerTransfer|null
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @module MultiCart|OrderCustomReference|PersistentCart|SharedCart
     *
     * @param \Generated\Shared\Transfer\CustomerTransfer $customer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCustomerOrFail(CustomerTransfer $customer)
    {
        return $this->setCustomer($customer);
    }

    /**
     * @module MultiCart|OrderCustomReference|PersistentCart|SharedCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CustomerTransfer
     */
    public function getCustomerOrFail()
    {
        if ($this->customer === null) {
            $this->throwNullValueException(static::CUSTOMER);
        }

        return $this->customer;
    }

    /**
     * @module MultiCart|OrderCustomReference|PersistentCart|SharedCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCustomer()
    {
        $this->assertPropertyIsSet(self::CUSTOMER);

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
                case 'idQuote':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'quoteUpdateRequestAttributes':
                case 'customer':
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
                case 'idQuote':
                    $values[$arrayKey] = $value;

                    break;
                case 'quoteUpdateRequestAttributes':
                case 'customer':
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
                case 'idQuote':
                    $values[$arrayKey] = $value;

                    break;
                case 'quoteUpdateRequestAttributes':
                case 'customer':
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
            'idQuote' => $this->idQuote,
            'quoteUpdateRequestAttributes' => $this->quoteUpdateRequestAttributes,
            'customer' => $this->customer,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_quote' => $this->idQuote,
            'quote_update_request_attributes' => $this->quoteUpdateRequestAttributes,
            'customer' => $this->customer,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_quote' => $this->idQuote instanceof AbstractTransfer ? $this->idQuote->toArray(true, false) : $this->idQuote,
            'quote_update_request_attributes' => $this->quoteUpdateRequestAttributes instanceof AbstractTransfer ? $this->quoteUpdateRequestAttributes->toArray(true, false) : $this->quoteUpdateRequestAttributes,
            'customer' => $this->customer instanceof AbstractTransfer ? $this->customer->toArray(true, false) : $this->customer,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idQuote' => $this->idQuote instanceof AbstractTransfer ? $this->idQuote->toArray(true, true) : $this->idQuote,
            'quoteUpdateRequestAttributes' => $this->quoteUpdateRequestAttributes instanceof AbstractTransfer ? $this->quoteUpdateRequestAttributes->toArray(true, true) : $this->quoteUpdateRequestAttributes,
            'customer' => $this->customer instanceof AbstractTransfer ? $this->customer->toArray(true, true) : $this->customer,
        ];
    }
}
