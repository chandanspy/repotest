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
class RestCompanyBusinessUnitAttributesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const DEFAULT_BILLING_ADDRESS = 'defaultBillingAddress';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const EMAIL = 'email';

    /**
     * @var string
     */
    public const PHONE = 'phone';

    /**
     * @var string
     */
    public const EXTERNAL_URL = 'externalUrl';

    /**
     * @var string
     */
    public const BIC = 'bic';

    /**
     * @var string
     */
    public const IBAN = 'iban';

    /**
     * @var string|null
     */
    protected $defaultBillingAddress;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $email;

    /**
     * @var string|null
     */
    protected $phone;

    /**
     * @var string|null
     */
    protected $externalUrl;

    /**
     * @var string|null
     */
    protected $bic;

    /**
     * @var string|null
     */
    protected $iban;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'default_billing_address' => 'defaultBillingAddress',
        'defaultBillingAddress' => 'defaultBillingAddress',
        'DefaultBillingAddress' => 'defaultBillingAddress',
        'name' => 'name',
        'Name' => 'name',
        'email' => 'email',
        'Email' => 'email',
        'phone' => 'phone',
        'Phone' => 'phone',
        'external_url' => 'externalUrl',
        'externalUrl' => 'externalUrl',
        'ExternalUrl' => 'externalUrl',
        'bic' => 'bic',
        'Bic' => 'bic',
        'iban' => 'iban',
        'Iban' => 'iban',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::DEFAULT_BILLING_ADDRESS => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'default_billing_address',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
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
        self::EMAIL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'email',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PHONE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'phone',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::EXTERNAL_URL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'external_url',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::BIC => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'bic',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IBAN => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'iban',
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
     * @module CompanyBusinessUnitAddressesRestApi|CompanyBusinessUnitsRestApi
     *
     * @param string|null $defaultBillingAddress
     *
     * @return $this
     */
    public function setDefaultBillingAddress($defaultBillingAddress)
    {
        $this->defaultBillingAddress = $defaultBillingAddress;
        $this->modifiedProperties[self::DEFAULT_BILLING_ADDRESS] = true;

        return $this;
    }

    /**
     * @module CompanyBusinessUnitAddressesRestApi|CompanyBusinessUnitsRestApi
     *
     * @return string|null
     */
    public function getDefaultBillingAddress()
    {
        return $this->defaultBillingAddress;
    }

    /**
     * @module CompanyBusinessUnitAddressesRestApi|CompanyBusinessUnitsRestApi
     *
     * @param string|null $defaultBillingAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDefaultBillingAddressOrFail($defaultBillingAddress)
    {
        if ($defaultBillingAddress === null) {
            $this->throwNullValueException(static::DEFAULT_BILLING_ADDRESS);
        }

        return $this->setDefaultBillingAddress($defaultBillingAddress);
    }

    /**
     * @module CompanyBusinessUnitAddressesRestApi|CompanyBusinessUnitsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDefaultBillingAddressOrFail()
    {
        if ($this->defaultBillingAddress === null) {
            $this->throwNullValueException(static::DEFAULT_BILLING_ADDRESS);
        }

        return $this->defaultBillingAddress;
    }

    /**
     * @module CompanyBusinessUnitAddressesRestApi|CompanyBusinessUnitsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDefaultBillingAddress()
    {
        $this->assertPropertyIsSet(self::DEFAULT_BILLING_ADDRESS);

        return $this;
    }

    /**
     * @module CompanyBusinessUnitsRestApi
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
     * @module CompanyBusinessUnitsRestApi
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module CompanyBusinessUnitsRestApi
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
     * @module CompanyBusinessUnitsRestApi
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
     * @module CompanyBusinessUnitsRestApi
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
     * @module CompanyBusinessUnitsRestApi
     *
     * @param string|null $email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;
        $this->modifiedProperties[self::EMAIL] = true;

        return $this;
    }

    /**
     * @module CompanyBusinessUnitsRestApi
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @module CompanyBusinessUnitsRestApi
     *
     * @param string|null $email
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setEmailOrFail($email)
    {
        if ($email === null) {
            $this->throwNullValueException(static::EMAIL);
        }

        return $this->setEmail($email);
    }

    /**
     * @module CompanyBusinessUnitsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getEmailOrFail()
    {
        if ($this->email === null) {
            $this->throwNullValueException(static::EMAIL);
        }

        return $this->email;
    }

    /**
     * @module CompanyBusinessUnitsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireEmail()
    {
        $this->assertPropertyIsSet(self::EMAIL);

        return $this;
    }

    /**
     * @module CompanyBusinessUnitsRestApi
     *
     * @param string|null $phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        $this->modifiedProperties[self::PHONE] = true;

        return $this;
    }

    /**
     * @module CompanyBusinessUnitsRestApi
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @module CompanyBusinessUnitsRestApi
     *
     * @param string|null $phone
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPhoneOrFail($phone)
    {
        if ($phone === null) {
            $this->throwNullValueException(static::PHONE);
        }

        return $this->setPhone($phone);
    }

    /**
     * @module CompanyBusinessUnitsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPhoneOrFail()
    {
        if ($this->phone === null) {
            $this->throwNullValueException(static::PHONE);
        }

        return $this->phone;
    }

    /**
     * @module CompanyBusinessUnitsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePhone()
    {
        $this->assertPropertyIsSet(self::PHONE);

        return $this;
    }

    /**
     * @module CompanyBusinessUnitsRestApi
     *
     * @param string|null $externalUrl
     *
     * @return $this
     */
    public function setExternalUrl($externalUrl)
    {
        $this->externalUrl = $externalUrl;
        $this->modifiedProperties[self::EXTERNAL_URL] = true;

        return $this;
    }

    /**
     * @module CompanyBusinessUnitsRestApi
     *
     * @return string|null
     */
    public function getExternalUrl()
    {
        return $this->externalUrl;
    }

    /**
     * @module CompanyBusinessUnitsRestApi
     *
     * @param string|null $externalUrl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setExternalUrlOrFail($externalUrl)
    {
        if ($externalUrl === null) {
            $this->throwNullValueException(static::EXTERNAL_URL);
        }

        return $this->setExternalUrl($externalUrl);
    }

    /**
     * @module CompanyBusinessUnitsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getExternalUrlOrFail()
    {
        if ($this->externalUrl === null) {
            $this->throwNullValueException(static::EXTERNAL_URL);
        }

        return $this->externalUrl;
    }

    /**
     * @module CompanyBusinessUnitsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireExternalUrl()
    {
        $this->assertPropertyIsSet(self::EXTERNAL_URL);

        return $this;
    }

    /**
     * @module CompanyBusinessUnitsRestApi
     *
     * @param string|null $bic
     *
     * @return $this
     */
    public function setBic($bic)
    {
        $this->bic = $bic;
        $this->modifiedProperties[self::BIC] = true;

        return $this;
    }

    /**
     * @module CompanyBusinessUnitsRestApi
     *
     * @return string|null
     */
    public function getBic()
    {
        return $this->bic;
    }

    /**
     * @module CompanyBusinessUnitsRestApi
     *
     * @param string|null $bic
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setBicOrFail($bic)
    {
        if ($bic === null) {
            $this->throwNullValueException(static::BIC);
        }

        return $this->setBic($bic);
    }

    /**
     * @module CompanyBusinessUnitsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getBicOrFail()
    {
        if ($this->bic === null) {
            $this->throwNullValueException(static::BIC);
        }

        return $this->bic;
    }

    /**
     * @module CompanyBusinessUnitsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireBic()
    {
        $this->assertPropertyIsSet(self::BIC);

        return $this;
    }

    /**
     * @module CompanyBusinessUnitsRestApi
     *
     * @param string|null $iban
     *
     * @return $this
     */
    public function setIban($iban)
    {
        $this->iban = $iban;
        $this->modifiedProperties[self::IBAN] = true;

        return $this;
    }

    /**
     * @module CompanyBusinessUnitsRestApi
     *
     * @return string|null
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * @module CompanyBusinessUnitsRestApi
     *
     * @param string|null $iban
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIbanOrFail($iban)
    {
        if ($iban === null) {
            $this->throwNullValueException(static::IBAN);
        }

        return $this->setIban($iban);
    }

    /**
     * @module CompanyBusinessUnitsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIbanOrFail()
    {
        if ($this->iban === null) {
            $this->throwNullValueException(static::IBAN);
        }

        return $this->iban;
    }

    /**
     * @module CompanyBusinessUnitsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIban()
    {
        $this->assertPropertyIsSet(self::IBAN);

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
                case 'defaultBillingAddress':
                case 'name':
                case 'email':
                case 'phone':
                case 'externalUrl':
                case 'bic':
                case 'iban':
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
                case 'defaultBillingAddress':
                case 'name':
                case 'email':
                case 'phone':
                case 'externalUrl':
                case 'bic':
                case 'iban':
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
                case 'defaultBillingAddress':
                case 'name':
                case 'email':
                case 'phone':
                case 'externalUrl':
                case 'bic':
                case 'iban':
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
            'defaultBillingAddress' => $this->defaultBillingAddress,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'externalUrl' => $this->externalUrl,
            'bic' => $this->bic,
            'iban' => $this->iban,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'default_billing_address' => $this->defaultBillingAddress,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'external_url' => $this->externalUrl,
            'bic' => $this->bic,
            'iban' => $this->iban,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'default_billing_address' => $this->defaultBillingAddress instanceof AbstractTransfer ? $this->defaultBillingAddress->toArray(true, false) : $this->defaultBillingAddress,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'email' => $this->email instanceof AbstractTransfer ? $this->email->toArray(true, false) : $this->email,
            'phone' => $this->phone instanceof AbstractTransfer ? $this->phone->toArray(true, false) : $this->phone,
            'external_url' => $this->externalUrl instanceof AbstractTransfer ? $this->externalUrl->toArray(true, false) : $this->externalUrl,
            'bic' => $this->bic instanceof AbstractTransfer ? $this->bic->toArray(true, false) : $this->bic,
            'iban' => $this->iban instanceof AbstractTransfer ? $this->iban->toArray(true, false) : $this->iban,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'defaultBillingAddress' => $this->defaultBillingAddress instanceof AbstractTransfer ? $this->defaultBillingAddress->toArray(true, true) : $this->defaultBillingAddress,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'email' => $this->email instanceof AbstractTransfer ? $this->email->toArray(true, true) : $this->email,
            'phone' => $this->phone instanceof AbstractTransfer ? $this->phone->toArray(true, true) : $this->phone,
            'externalUrl' => $this->externalUrl instanceof AbstractTransfer ? $this->externalUrl->toArray(true, true) : $this->externalUrl,
            'bic' => $this->bic instanceof AbstractTransfer ? $this->bic->toArray(true, true) : $this->bic,
            'iban' => $this->iban instanceof AbstractTransfer ? $this->iban->toArray(true, true) : $this->iban,
        ];
    }
}
