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
class QuoteItemCartNoteRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_QUOTE = 'idQuote';

    /**
     * @var string
     */
    public const CUSTOMER = 'customer';

    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var string
     */
    public const GROUP_KEY = 'groupKey';

    /**
     * @var string
     */
    public const CART_NOTE = 'cartNote';

    /**
     * @var int|null
     */
    protected $idQuote;

    /**
     * @var \Generated\Shared\Transfer\CustomerTransfer|null
     */
    protected $customer;

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var string|null
     */
    protected $groupKey;

    /**
     * @var string|null
     */
    protected $cartNote;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_quote' => 'idQuote',
        'idQuote' => 'idQuote',
        'IdQuote' => 'idQuote',
        'customer' => 'customer',
        'Customer' => 'customer',
        'sku' => 'sku',
        'Sku' => 'sku',
        'group_key' => 'groupKey',
        'groupKey' => 'groupKey',
        'GroupKey' => 'groupKey',
        'cart_note' => 'cartNote',
        'cartNote' => 'cartNote',
        'CartNote' => 'cartNote',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::SKU => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'sku',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::GROUP_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'group_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CART_NOTE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'cart_note',
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
     * @module CartNote
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
     * @module CartNote
     *
     * @return int|null
     */
    public function getIdQuote()
    {
        return $this->idQuote;
    }

    /**
     * @module CartNote
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
     * @module CartNote
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
     * @module CartNote
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
     * @module CartNote
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
     * @module CartNote
     *
     * @return \Generated\Shared\Transfer\CustomerTransfer|null
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @module CartNote
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
     * @module CartNote
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
     * @module CartNote
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
     * @module CartNote
     *
     * @param string|null $sku
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
        $this->modifiedProperties[self::SKU] = true;

        return $this;
    }

    /**
     * @module CartNote
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module CartNote
     *
     * @param string|null $sku
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSkuOrFail($sku)
    {
        if ($sku === null) {
            $this->throwNullValueException(static::SKU);
        }

        return $this->setSku($sku);
    }

    /**
     * @module CartNote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSkuOrFail()
    {
        if ($this->sku === null) {
            $this->throwNullValueException(static::SKU);
        }

        return $this->sku;
    }

    /**
     * @module CartNote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSku()
    {
        $this->assertPropertyIsSet(self::SKU);

        return $this;
    }

    /**
     * @module CartNote
     *
     * @param string|null $groupKey
     *
     * @return $this
     */
    public function setGroupKey($groupKey)
    {
        $this->groupKey = $groupKey;
        $this->modifiedProperties[self::GROUP_KEY] = true;

        return $this;
    }

    /**
     * @module CartNote
     *
     * @return string|null
     */
    public function getGroupKey()
    {
        return $this->groupKey;
    }

    /**
     * @module CartNote
     *
     * @param string|null $groupKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setGroupKeyOrFail($groupKey)
    {
        if ($groupKey === null) {
            $this->throwNullValueException(static::GROUP_KEY);
        }

        return $this->setGroupKey($groupKey);
    }

    /**
     * @module CartNote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getGroupKeyOrFail()
    {
        if ($this->groupKey === null) {
            $this->throwNullValueException(static::GROUP_KEY);
        }

        return $this->groupKey;
    }

    /**
     * @module CartNote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireGroupKey()
    {
        $this->assertPropertyIsSet(self::GROUP_KEY);

        return $this;
    }

    /**
     * @module CartNote
     *
     * @param string|null $cartNote
     *
     * @return $this
     */
    public function setCartNote($cartNote)
    {
        $this->cartNote = $cartNote;
        $this->modifiedProperties[self::CART_NOTE] = true;

        return $this;
    }

    /**
     * @module CartNote
     *
     * @return string|null
     */
    public function getCartNote()
    {
        return $this->cartNote;
    }

    /**
     * @module CartNote
     *
     * @param string|null $cartNote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCartNoteOrFail($cartNote)
    {
        if ($cartNote === null) {
            $this->throwNullValueException(static::CART_NOTE);
        }

        return $this->setCartNote($cartNote);
    }

    /**
     * @module CartNote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCartNoteOrFail()
    {
        if ($this->cartNote === null) {
            $this->throwNullValueException(static::CART_NOTE);
        }

        return $this->cartNote;
    }

    /**
     * @module CartNote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCartNote()
    {
        $this->assertPropertyIsSet(self::CART_NOTE);

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
                case 'sku':
                case 'groupKey':
                case 'cartNote':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
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
                case 'sku':
                case 'groupKey':
                case 'cartNote':
                    $values[$arrayKey] = $value;

                    break;
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
                case 'sku':
                case 'groupKey':
                case 'cartNote':
                    $values[$arrayKey] = $value;

                    break;
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
            'sku' => $this->sku,
            'groupKey' => $this->groupKey,
            'cartNote' => $this->cartNote,
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
            'sku' => $this->sku,
            'group_key' => $this->groupKey,
            'cart_note' => $this->cartNote,
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
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'group_key' => $this->groupKey instanceof AbstractTransfer ? $this->groupKey->toArray(true, false) : $this->groupKey,
            'cart_note' => $this->cartNote instanceof AbstractTransfer ? $this->cartNote->toArray(true, false) : $this->cartNote,
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
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'groupKey' => $this->groupKey instanceof AbstractTransfer ? $this->groupKey->toArray(true, true) : $this->groupKey,
            'cartNote' => $this->cartNote instanceof AbstractTransfer ? $this->cartNote->toArray(true, true) : $this->cartNote,
            'customer' => $this->customer instanceof AbstractTransfer ? $this->customer->toArray(true, true) : $this->customer,
        ];
    }
}
