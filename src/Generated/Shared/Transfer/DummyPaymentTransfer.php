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
class DummyPaymentTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const DATE_OF_BIRTH = 'dateOfBirth';

    /**
     * @var string
     */
    public const CARD_SECURITY_CODE = 'cardSecurityCode';

    /**
     * @var string
     */
    public const CARD_EXPIRES_YEAR = 'cardExpiresYear';

    /**
     * @var string
     */
    public const CARD_EXPIRES_MONTH = 'cardExpiresMonth';

    /**
     * @var string
     */
    public const NAME_ON_CARD = 'nameOnCard';

    /**
     * @var string
     */
    public const CARD_NUMBER = 'cardNumber';

    /**
     * @var string
     */
    public const CARD_TYPE = 'cardType';

    /**
     * @var string|null
     */
    protected $dateOfBirth;

    /**
     * @var int|null
     */
    protected $cardSecurityCode;

    /**
     * @var int|null
     */
    protected $cardExpiresYear;

    /**
     * @var int|null
     */
    protected $cardExpiresMonth;

    /**
     * @var string|null
     */
    protected $nameOnCard;

    /**
     * @var int|null
     */
    protected $cardNumber;

    /**
     * @var string|null
     */
    protected $cardType;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'date_of_birth' => 'dateOfBirth',
        'dateOfBirth' => 'dateOfBirth',
        'DateOfBirth' => 'dateOfBirth',
        'card_security_code' => 'cardSecurityCode',
        'cardSecurityCode' => 'cardSecurityCode',
        'CardSecurityCode' => 'cardSecurityCode',
        'card_expires_year' => 'cardExpiresYear',
        'cardExpiresYear' => 'cardExpiresYear',
        'CardExpiresYear' => 'cardExpiresYear',
        'card_expires_month' => 'cardExpiresMonth',
        'cardExpiresMonth' => 'cardExpiresMonth',
        'CardExpiresMonth' => 'cardExpiresMonth',
        'name_on_card' => 'nameOnCard',
        'nameOnCard' => 'nameOnCard',
        'NameOnCard' => 'nameOnCard',
        'card_number' => 'cardNumber',
        'cardNumber' => 'cardNumber',
        'CardNumber' => 'cardNumber',
        'card_type' => 'cardType',
        'cardType' => 'cardType',
        'CardType' => 'cardType',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::DATE_OF_BIRTH => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'date_of_birth',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CARD_SECURITY_CODE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'card_security_code',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CARD_EXPIRES_YEAR => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'card_expires_year',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CARD_EXPIRES_MONTH => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'card_expires_month',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NAME_ON_CARD => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'name_on_card',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CARD_NUMBER => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'card_number',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CARD_TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'card_type',
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
     * @module DummyPayment
     *
     * @param string|null $dateOfBirth
     *
     * @return $this
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
        $this->modifiedProperties[self::DATE_OF_BIRTH] = true;

        return $this;
    }

    /**
     * @module DummyPayment
     *
     * @return string|null
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @module DummyPayment
     *
     * @param string|null $dateOfBirth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDateOfBirthOrFail($dateOfBirth)
    {
        if ($dateOfBirth === null) {
            $this->throwNullValueException(static::DATE_OF_BIRTH);
        }

        return $this->setDateOfBirth($dateOfBirth);
    }

    /**
     * @module DummyPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDateOfBirthOrFail()
    {
        if ($this->dateOfBirth === null) {
            $this->throwNullValueException(static::DATE_OF_BIRTH);
        }

        return $this->dateOfBirth;
    }

    /**
     * @module DummyPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDateOfBirth()
    {
        $this->assertPropertyIsSet(self::DATE_OF_BIRTH);

        return $this;
    }

    /**
     * @module DummyPayment
     *
     * @param int|null $cardSecurityCode
     *
     * @return $this
     */
    public function setCardSecurityCode($cardSecurityCode)
    {
        $this->cardSecurityCode = $cardSecurityCode;
        $this->modifiedProperties[self::CARD_SECURITY_CODE] = true;

        return $this;
    }

    /**
     * @module DummyPayment
     *
     * @return int|null
     */
    public function getCardSecurityCode()
    {
        return $this->cardSecurityCode;
    }

    /**
     * @module DummyPayment
     *
     * @param int|null $cardSecurityCode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCardSecurityCodeOrFail($cardSecurityCode)
    {
        if ($cardSecurityCode === null) {
            $this->throwNullValueException(static::CARD_SECURITY_CODE);
        }

        return $this->setCardSecurityCode($cardSecurityCode);
    }

    /**
     * @module DummyPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getCardSecurityCodeOrFail()
    {
        if ($this->cardSecurityCode === null) {
            $this->throwNullValueException(static::CARD_SECURITY_CODE);
        }

        return $this->cardSecurityCode;
    }

    /**
     * @module DummyPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCardSecurityCode()
    {
        $this->assertPropertyIsSet(self::CARD_SECURITY_CODE);

        return $this;
    }

    /**
     * @module DummyPayment
     *
     * @param int|null $cardExpiresYear
     *
     * @return $this
     */
    public function setCardExpiresYear($cardExpiresYear)
    {
        $this->cardExpiresYear = $cardExpiresYear;
        $this->modifiedProperties[self::CARD_EXPIRES_YEAR] = true;

        return $this;
    }

    /**
     * @module DummyPayment
     *
     * @return int|null
     */
    public function getCardExpiresYear()
    {
        return $this->cardExpiresYear;
    }

    /**
     * @module DummyPayment
     *
     * @param int|null $cardExpiresYear
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCardExpiresYearOrFail($cardExpiresYear)
    {
        if ($cardExpiresYear === null) {
            $this->throwNullValueException(static::CARD_EXPIRES_YEAR);
        }

        return $this->setCardExpiresYear($cardExpiresYear);
    }

    /**
     * @module DummyPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getCardExpiresYearOrFail()
    {
        if ($this->cardExpiresYear === null) {
            $this->throwNullValueException(static::CARD_EXPIRES_YEAR);
        }

        return $this->cardExpiresYear;
    }

    /**
     * @module DummyPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCardExpiresYear()
    {
        $this->assertPropertyIsSet(self::CARD_EXPIRES_YEAR);

        return $this;
    }

    /**
     * @module DummyPayment
     *
     * @param int|null $cardExpiresMonth
     *
     * @return $this
     */
    public function setCardExpiresMonth($cardExpiresMonth)
    {
        $this->cardExpiresMonth = $cardExpiresMonth;
        $this->modifiedProperties[self::CARD_EXPIRES_MONTH] = true;

        return $this;
    }

    /**
     * @module DummyPayment
     *
     * @return int|null
     */
    public function getCardExpiresMonth()
    {
        return $this->cardExpiresMonth;
    }

    /**
     * @module DummyPayment
     *
     * @param int|null $cardExpiresMonth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCardExpiresMonthOrFail($cardExpiresMonth)
    {
        if ($cardExpiresMonth === null) {
            $this->throwNullValueException(static::CARD_EXPIRES_MONTH);
        }

        return $this->setCardExpiresMonth($cardExpiresMonth);
    }

    /**
     * @module DummyPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getCardExpiresMonthOrFail()
    {
        if ($this->cardExpiresMonth === null) {
            $this->throwNullValueException(static::CARD_EXPIRES_MONTH);
        }

        return $this->cardExpiresMonth;
    }

    /**
     * @module DummyPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCardExpiresMonth()
    {
        $this->assertPropertyIsSet(self::CARD_EXPIRES_MONTH);

        return $this;
    }

    /**
     * @module DummyPayment
     *
     * @param string|null $nameOnCard
     *
     * @return $this
     */
    public function setNameOnCard($nameOnCard)
    {
        $this->nameOnCard = $nameOnCard;
        $this->modifiedProperties[self::NAME_ON_CARD] = true;

        return $this;
    }

    /**
     * @module DummyPayment
     *
     * @return string|null
     */
    public function getNameOnCard()
    {
        return $this->nameOnCard;
    }

    /**
     * @module DummyPayment
     *
     * @param string|null $nameOnCard
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNameOnCardOrFail($nameOnCard)
    {
        if ($nameOnCard === null) {
            $this->throwNullValueException(static::NAME_ON_CARD);
        }

        return $this->setNameOnCard($nameOnCard);
    }

    /**
     * @module DummyPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNameOnCardOrFail()
    {
        if ($this->nameOnCard === null) {
            $this->throwNullValueException(static::NAME_ON_CARD);
        }

        return $this->nameOnCard;
    }

    /**
     * @module DummyPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNameOnCard()
    {
        $this->assertPropertyIsSet(self::NAME_ON_CARD);

        return $this;
    }

    /**
     * @module DummyPayment
     *
     * @param int|null $cardNumber
     *
     * @return $this
     */
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;
        $this->modifiedProperties[self::CARD_NUMBER] = true;

        return $this;
    }

    /**
     * @module DummyPayment
     *
     * @return int|null
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * @module DummyPayment
     *
     * @param int|null $cardNumber
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCardNumberOrFail($cardNumber)
    {
        if ($cardNumber === null) {
            $this->throwNullValueException(static::CARD_NUMBER);
        }

        return $this->setCardNumber($cardNumber);
    }

    /**
     * @module DummyPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getCardNumberOrFail()
    {
        if ($this->cardNumber === null) {
            $this->throwNullValueException(static::CARD_NUMBER);
        }

        return $this->cardNumber;
    }

    /**
     * @module DummyPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCardNumber()
    {
        $this->assertPropertyIsSet(self::CARD_NUMBER);

        return $this;
    }

    /**
     * @module DummyPayment
     *
     * @param string|null $cardType
     *
     * @return $this
     */
    public function setCardType($cardType)
    {
        $this->cardType = $cardType;
        $this->modifiedProperties[self::CARD_TYPE] = true;

        return $this;
    }

    /**
     * @module DummyPayment
     *
     * @return string|null
     */
    public function getCardType()
    {
        return $this->cardType;
    }

    /**
     * @module DummyPayment
     *
     * @param string|null $cardType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCardTypeOrFail($cardType)
    {
        if ($cardType === null) {
            $this->throwNullValueException(static::CARD_TYPE);
        }

        return $this->setCardType($cardType);
    }

    /**
     * @module DummyPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCardTypeOrFail()
    {
        if ($this->cardType === null) {
            $this->throwNullValueException(static::CARD_TYPE);
        }

        return $this->cardType;
    }

    /**
     * @module DummyPayment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCardType()
    {
        $this->assertPropertyIsSet(self::CARD_TYPE);

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
                case 'dateOfBirth':
                case 'cardSecurityCode':
                case 'cardExpiresYear':
                case 'cardExpiresMonth':
                case 'nameOnCard':
                case 'cardNumber':
                case 'cardType':
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
                case 'dateOfBirth':
                case 'cardSecurityCode':
                case 'cardExpiresYear':
                case 'cardExpiresMonth':
                case 'nameOnCard':
                case 'cardNumber':
                case 'cardType':
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
                case 'dateOfBirth':
                case 'cardSecurityCode':
                case 'cardExpiresYear':
                case 'cardExpiresMonth':
                case 'nameOnCard':
                case 'cardNumber':
                case 'cardType':
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
            'dateOfBirth' => $this->dateOfBirth,
            'cardSecurityCode' => $this->cardSecurityCode,
            'cardExpiresYear' => $this->cardExpiresYear,
            'cardExpiresMonth' => $this->cardExpiresMonth,
            'nameOnCard' => $this->nameOnCard,
            'cardNumber' => $this->cardNumber,
            'cardType' => $this->cardType,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'date_of_birth' => $this->dateOfBirth,
            'card_security_code' => $this->cardSecurityCode,
            'card_expires_year' => $this->cardExpiresYear,
            'card_expires_month' => $this->cardExpiresMonth,
            'name_on_card' => $this->nameOnCard,
            'card_number' => $this->cardNumber,
            'card_type' => $this->cardType,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'date_of_birth' => $this->dateOfBirth instanceof AbstractTransfer ? $this->dateOfBirth->toArray(true, false) : $this->dateOfBirth,
            'card_security_code' => $this->cardSecurityCode instanceof AbstractTransfer ? $this->cardSecurityCode->toArray(true, false) : $this->cardSecurityCode,
            'card_expires_year' => $this->cardExpiresYear instanceof AbstractTransfer ? $this->cardExpiresYear->toArray(true, false) : $this->cardExpiresYear,
            'card_expires_month' => $this->cardExpiresMonth instanceof AbstractTransfer ? $this->cardExpiresMonth->toArray(true, false) : $this->cardExpiresMonth,
            'name_on_card' => $this->nameOnCard instanceof AbstractTransfer ? $this->nameOnCard->toArray(true, false) : $this->nameOnCard,
            'card_number' => $this->cardNumber instanceof AbstractTransfer ? $this->cardNumber->toArray(true, false) : $this->cardNumber,
            'card_type' => $this->cardType instanceof AbstractTransfer ? $this->cardType->toArray(true, false) : $this->cardType,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'dateOfBirth' => $this->dateOfBirth instanceof AbstractTransfer ? $this->dateOfBirth->toArray(true, true) : $this->dateOfBirth,
            'cardSecurityCode' => $this->cardSecurityCode instanceof AbstractTransfer ? $this->cardSecurityCode->toArray(true, true) : $this->cardSecurityCode,
            'cardExpiresYear' => $this->cardExpiresYear instanceof AbstractTransfer ? $this->cardExpiresYear->toArray(true, true) : $this->cardExpiresYear,
            'cardExpiresMonth' => $this->cardExpiresMonth instanceof AbstractTransfer ? $this->cardExpiresMonth->toArray(true, true) : $this->cardExpiresMonth,
            'nameOnCard' => $this->nameOnCard instanceof AbstractTransfer ? $this->nameOnCard->toArray(true, true) : $this->nameOnCard,
            'cardNumber' => $this->cardNumber instanceof AbstractTransfer ? $this->cardNumber->toArray(true, true) : $this->cardNumber,
            'cardType' => $this->cardType instanceof AbstractTransfer ? $this->cardType->toArray(true, true) : $this->cardType,
        ];
    }
}
