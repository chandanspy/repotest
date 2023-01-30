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
class RestCustomerTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const EMAIL = 'email';

    /**
     * @var string
     */
    public const SALUTATION = 'salutation';

    /**
     * @var string
     */
    public const FIRST_NAME = 'firstName';

    /**
     * @var string
     */
    public const LAST_NAME = 'lastName';

    /**
     * @var string
     */
    public const ID_CUSTOMER = 'idCustomer';

    /**
     * @var string
     */
    public const CUSTOMER_REFERENCE = 'customerReference';

    /**
     * @var string
     */
    public const ID_COMPANY_BUSINESS_UNIT = 'idCompanyBusinessUnit';

    /**
     * @var string
     */
    public const ID_COMPANY_USER = 'idCompanyUser';

    /**
     * @var string
     */
    public const ID_COMPANY = 'idCompany';

    /**
     * @var string
     */
    public const COMPANY_USER_TRANSFER = 'companyUserTransfer';

    /**
     * @var string|null
     */
    protected $email;

    /**
     * @var string|null
     */
    protected $salutation;

    /**
     * @var string|null
     */
    protected $firstName;

    /**
     * @var string|null
     */
    protected $lastName;

    /**
     * @var int|null
     */
    protected $idCustomer;

    /**
     * @var string|null
     */
    protected $customerReference;

    /**
     * @var int|null
     */
    protected $idCompanyBusinessUnit;

    /**
     * @var int|null
     */
    protected $idCompanyUser;

    /**
     * @var int|null
     */
    protected $idCompany;

    /**
     * @var \Generated\Shared\Transfer\CompanyUserTransfer|null
     */
    protected $companyUserTransfer;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'email' => 'email',
        'Email' => 'email',
        'salutation' => 'salutation',
        'Salutation' => 'salutation',
        'first_name' => 'firstName',
        'firstName' => 'firstName',
        'FirstName' => 'firstName',
        'last_name' => 'lastName',
        'lastName' => 'lastName',
        'LastName' => 'lastName',
        'id_customer' => 'idCustomer',
        'idCustomer' => 'idCustomer',
        'IdCustomer' => 'idCustomer',
        'customer_reference' => 'customerReference',
        'customerReference' => 'customerReference',
        'CustomerReference' => 'customerReference',
        'id_company_business_unit' => 'idCompanyBusinessUnit',
        'idCompanyBusinessUnit' => 'idCompanyBusinessUnit',
        'IdCompanyBusinessUnit' => 'idCompanyBusinessUnit',
        'id_company_user' => 'idCompanyUser',
        'idCompanyUser' => 'idCompanyUser',
        'IdCompanyUser' => 'idCompanyUser',
        'id_company' => 'idCompany',
        'idCompany' => 'idCompany',
        'IdCompany' => 'idCompany',
        'company_user_transfer' => 'companyUserTransfer',
        'companyUserTransfer' => 'companyUserTransfer',
        'CompanyUserTransfer' => 'companyUserTransfer',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::EMAIL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'email',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'yes',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SALUTATION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'salutation',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'yes',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FIRST_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'first_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'yes',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LAST_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'last_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'yes',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_CUSTOMER => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_customer',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CUSTOMER_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'customer_reference',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_COMPANY_BUSINESS_UNIT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_company_business_unit',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_COMPANY_USER => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_company_user',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_COMPANY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_company',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COMPANY_USER_TRANSFER => [
            'type' => 'Generated\Shared\Transfer\CompanyUserTransfer',
            'type_shim' => null,
            'name_underscore' => 'company_user_transfer',
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
     * @module CheckoutRestApi
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
     * @module CheckoutRestApi
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @module CheckoutRestApi
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
     * @module CheckoutRestApi
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
     * @module CheckoutRestApi
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
     * @module CheckoutRestApi
     *
     * @param string|null $salutation
     *
     * @return $this
     */
    public function setSalutation($salutation)
    {
        $this->salutation = $salutation;
        $this->modifiedProperties[self::SALUTATION] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi
     *
     * @return string|null
     */
    public function getSalutation()
    {
        return $this->salutation;
    }

    /**
     * @module CheckoutRestApi
     *
     * @param string|null $salutation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSalutationOrFail($salutation)
    {
        if ($salutation === null) {
            $this->throwNullValueException(static::SALUTATION);
        }

        return $this->setSalutation($salutation);
    }

    /**
     * @module CheckoutRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSalutationOrFail()
    {
        if ($this->salutation === null) {
            $this->throwNullValueException(static::SALUTATION);
        }

        return $this->salutation;
    }

    /**
     * @module CheckoutRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSalutation()
    {
        $this->assertPropertyIsSet(self::SALUTATION);

        return $this;
    }

    /**
     * @module CheckoutRestApi
     *
     * @param string|null $firstName
     *
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        $this->modifiedProperties[self::FIRST_NAME] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @module CheckoutRestApi
     *
     * @param string|null $firstName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFirstNameOrFail($firstName)
    {
        if ($firstName === null) {
            $this->throwNullValueException(static::FIRST_NAME);
        }

        return $this->setFirstName($firstName);
    }

    /**
     * @module CheckoutRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getFirstNameOrFail()
    {
        if ($this->firstName === null) {
            $this->throwNullValueException(static::FIRST_NAME);
        }

        return $this->firstName;
    }

    /**
     * @module CheckoutRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFirstName()
    {
        $this->assertPropertyIsSet(self::FIRST_NAME);

        return $this;
    }

    /**
     * @module CheckoutRestApi
     *
     * @param string|null $lastName
     *
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        $this->modifiedProperties[self::LAST_NAME] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @module CheckoutRestApi
     *
     * @param string|null $lastName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLastNameOrFail($lastName)
    {
        if ($lastName === null) {
            $this->throwNullValueException(static::LAST_NAME);
        }

        return $this->setLastName($lastName);
    }

    /**
     * @module CheckoutRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getLastNameOrFail()
    {
        if ($this->lastName === null) {
            $this->throwNullValueException(static::LAST_NAME);
        }

        return $this->lastName;
    }

    /**
     * @module CheckoutRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLastName()
    {
        $this->assertPropertyIsSet(self::LAST_NAME);

        return $this;
    }

    /**
     * @module CheckoutRestApi|CustomersRestApi
     *
     * @param int|null $idCustomer
     *
     * @return $this
     */
    public function setIdCustomer($idCustomer)
    {
        $this->idCustomer = $idCustomer;
        $this->modifiedProperties[self::ID_CUSTOMER] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi|CustomersRestApi
     *
     * @return int|null
     */
    public function getIdCustomer()
    {
        return $this->idCustomer;
    }

    /**
     * @module CheckoutRestApi|CustomersRestApi
     *
     * @param int|null $idCustomer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCustomerOrFail($idCustomer)
    {
        if ($idCustomer === null) {
            $this->throwNullValueException(static::ID_CUSTOMER);
        }

        return $this->setIdCustomer($idCustomer);
    }

    /**
     * @module CheckoutRestApi|CustomersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCustomerOrFail()
    {
        if ($this->idCustomer === null) {
            $this->throwNullValueException(static::ID_CUSTOMER);
        }

        return $this->idCustomer;
    }

    /**
     * @module CheckoutRestApi|CustomersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCustomer()
    {
        $this->assertPropertyIsSet(self::ID_CUSTOMER);

        return $this;
    }

    /**
     * @module CheckoutRestApi|CustomersRestApi
     *
     * @param string|null $customerReference
     *
     * @return $this
     */
    public function setCustomerReference($customerReference)
    {
        $this->customerReference = $customerReference;
        $this->modifiedProperties[self::CUSTOMER_REFERENCE] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi|CustomersRestApi
     *
     * @return string|null
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * @module CheckoutRestApi|CustomersRestApi
     *
     * @param string|null $customerReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCustomerReferenceOrFail($customerReference)
    {
        if ($customerReference === null) {
            $this->throwNullValueException(static::CUSTOMER_REFERENCE);
        }

        return $this->setCustomerReference($customerReference);
    }

    /**
     * @module CheckoutRestApi|CustomersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCustomerReferenceOrFail()
    {
        if ($this->customerReference === null) {
            $this->throwNullValueException(static::CUSTOMER_REFERENCE);
        }

        return $this->customerReference;
    }

    /**
     * @module CheckoutRestApi|CustomersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCustomerReference()
    {
        $this->assertPropertyIsSet(self::CUSTOMER_REFERENCE);

        return $this;
    }

    /**
     * @module CompanyBusinessUnitAddressesRestApi|CompanyUsersRestApi
     *
     * @param int|null $idCompanyBusinessUnit
     *
     * @return $this
     */
    public function setIdCompanyBusinessUnit($idCompanyBusinessUnit)
    {
        $this->idCompanyBusinessUnit = $idCompanyBusinessUnit;
        $this->modifiedProperties[self::ID_COMPANY_BUSINESS_UNIT] = true;

        return $this;
    }

    /**
     * @module CompanyBusinessUnitAddressesRestApi|CompanyUsersRestApi
     *
     * @return int|null
     */
    public function getIdCompanyBusinessUnit()
    {
        return $this->idCompanyBusinessUnit;
    }

    /**
     * @module CompanyBusinessUnitAddressesRestApi|CompanyUsersRestApi
     *
     * @param int|null $idCompanyBusinessUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCompanyBusinessUnitOrFail($idCompanyBusinessUnit)
    {
        if ($idCompanyBusinessUnit === null) {
            $this->throwNullValueException(static::ID_COMPANY_BUSINESS_UNIT);
        }

        return $this->setIdCompanyBusinessUnit($idCompanyBusinessUnit);
    }

    /**
     * @module CompanyBusinessUnitAddressesRestApi|CompanyUsersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCompanyBusinessUnitOrFail()
    {
        if ($this->idCompanyBusinessUnit === null) {
            $this->throwNullValueException(static::ID_COMPANY_BUSINESS_UNIT);
        }

        return $this->idCompanyBusinessUnit;
    }

    /**
     * @module CompanyBusinessUnitAddressesRestApi|CompanyUsersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCompanyBusinessUnit()
    {
        $this->assertPropertyIsSet(self::ID_COMPANY_BUSINESS_UNIT);

        return $this;
    }

    /**
     * @module CompanyUsersRestApi
     *
     * @param int|null $idCompanyUser
     *
     * @return $this
     */
    public function setIdCompanyUser($idCompanyUser)
    {
        $this->idCompanyUser = $idCompanyUser;
        $this->modifiedProperties[self::ID_COMPANY_USER] = true;

        return $this;
    }

    /**
     * @module CompanyUsersRestApi
     *
     * @return int|null
     */
    public function getIdCompanyUser()
    {
        return $this->idCompanyUser;
    }

    /**
     * @module CompanyUsersRestApi
     *
     * @param int|null $idCompanyUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCompanyUserOrFail($idCompanyUser)
    {
        if ($idCompanyUser === null) {
            $this->throwNullValueException(static::ID_COMPANY_USER);
        }

        return $this->setIdCompanyUser($idCompanyUser);
    }

    /**
     * @module CompanyUsersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCompanyUserOrFail()
    {
        if ($this->idCompanyUser === null) {
            $this->throwNullValueException(static::ID_COMPANY_USER);
        }

        return $this->idCompanyUser;
    }

    /**
     * @module CompanyUsersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCompanyUser()
    {
        $this->assertPropertyIsSet(self::ID_COMPANY_USER);

        return $this;
    }

    /**
     * @module CompanyUsersRestApi
     *
     * @param int|null $idCompany
     *
     * @return $this
     */
    public function setIdCompany($idCompany)
    {
        $this->idCompany = $idCompany;
        $this->modifiedProperties[self::ID_COMPANY] = true;

        return $this;
    }

    /**
     * @module CompanyUsersRestApi
     *
     * @return int|null
     */
    public function getIdCompany()
    {
        return $this->idCompany;
    }

    /**
     * @module CompanyUsersRestApi
     *
     * @param int|null $idCompany
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCompanyOrFail($idCompany)
    {
        if ($idCompany === null) {
            $this->throwNullValueException(static::ID_COMPANY);
        }

        return $this->setIdCompany($idCompany);
    }

    /**
     * @module CompanyUsersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCompanyOrFail()
    {
        if ($this->idCompany === null) {
            $this->throwNullValueException(static::ID_COMPANY);
        }

        return $this->idCompany;
    }

    /**
     * @module CompanyUsersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCompany()
    {
        $this->assertPropertyIsSet(self::ID_COMPANY);

        return $this;
    }

    /**
     * @module CompanyUsersRestApi
     *
     * @param \Generated\Shared\Transfer\CompanyUserTransfer|null $companyUserTransfer
     *
     * @return $this
     */
    public function setCompanyUserTransfer(CompanyUserTransfer $companyUserTransfer = null)
    {
        $this->companyUserTransfer = $companyUserTransfer;
        $this->modifiedProperties[self::COMPANY_USER_TRANSFER] = true;

        return $this;
    }

    /**
     * @module CompanyUsersRestApi
     *
     * @return \Generated\Shared\Transfer\CompanyUserTransfer|null
     */
    public function getCompanyUserTransfer()
    {
        return $this->companyUserTransfer;
    }

    /**
     * @module CompanyUsersRestApi
     *
     * @param \Generated\Shared\Transfer\CompanyUserTransfer $companyUserTransfer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCompanyUserTransferOrFail(CompanyUserTransfer $companyUserTransfer)
    {
        return $this->setCompanyUserTransfer($companyUserTransfer);
    }

    /**
     * @module CompanyUsersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CompanyUserTransfer
     */
    public function getCompanyUserTransferOrFail()
    {
        if ($this->companyUserTransfer === null) {
            $this->throwNullValueException(static::COMPANY_USER_TRANSFER);
        }

        return $this->companyUserTransfer;
    }

    /**
     * @module CompanyUsersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompanyUserTransfer()
    {
        $this->assertPropertyIsSet(self::COMPANY_USER_TRANSFER);

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
                case 'email':
                case 'salutation':
                case 'firstName':
                case 'lastName':
                case 'idCustomer':
                case 'customerReference':
                case 'idCompanyBusinessUnit':
                case 'idCompanyUser':
                case 'idCompany':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'companyUserTransfer':
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
                case 'email':
                case 'salutation':
                case 'firstName':
                case 'lastName':
                case 'idCustomer':
                case 'customerReference':
                case 'idCompanyBusinessUnit':
                case 'idCompanyUser':
                case 'idCompany':
                    $values[$arrayKey] = $value;

                    break;
                case 'companyUserTransfer':
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
                case 'email':
                case 'salutation':
                case 'firstName':
                case 'lastName':
                case 'idCustomer':
                case 'customerReference':
                case 'idCompanyBusinessUnit':
                case 'idCompanyUser':
                case 'idCompany':
                    $values[$arrayKey] = $value;

                    break;
                case 'companyUserTransfer':
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
            'email' => $this->email,
            'salutation' => $this->salutation,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'idCustomer' => $this->idCustomer,
            'customerReference' => $this->customerReference,
            'idCompanyBusinessUnit' => $this->idCompanyBusinessUnit,
            'idCompanyUser' => $this->idCompanyUser,
            'idCompany' => $this->idCompany,
            'companyUserTransfer' => $this->companyUserTransfer,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'email' => $this->email,
            'salutation' => $this->salutation,
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'id_customer' => $this->idCustomer,
            'customer_reference' => $this->customerReference,
            'id_company_business_unit' => $this->idCompanyBusinessUnit,
            'id_company_user' => $this->idCompanyUser,
            'id_company' => $this->idCompany,
            'company_user_transfer' => $this->companyUserTransfer,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'email' => $this->email instanceof AbstractTransfer ? $this->email->toArray(true, false) : $this->email,
            'salutation' => $this->salutation instanceof AbstractTransfer ? $this->salutation->toArray(true, false) : $this->salutation,
            'first_name' => $this->firstName instanceof AbstractTransfer ? $this->firstName->toArray(true, false) : $this->firstName,
            'last_name' => $this->lastName instanceof AbstractTransfer ? $this->lastName->toArray(true, false) : $this->lastName,
            'id_customer' => $this->idCustomer instanceof AbstractTransfer ? $this->idCustomer->toArray(true, false) : $this->idCustomer,
            'customer_reference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, false) : $this->customerReference,
            'id_company_business_unit' => $this->idCompanyBusinessUnit instanceof AbstractTransfer ? $this->idCompanyBusinessUnit->toArray(true, false) : $this->idCompanyBusinessUnit,
            'id_company_user' => $this->idCompanyUser instanceof AbstractTransfer ? $this->idCompanyUser->toArray(true, false) : $this->idCompanyUser,
            'id_company' => $this->idCompany instanceof AbstractTransfer ? $this->idCompany->toArray(true, false) : $this->idCompany,
            'company_user_transfer' => $this->companyUserTransfer instanceof AbstractTransfer ? $this->companyUserTransfer->toArray(true, false) : $this->companyUserTransfer,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'email' => $this->email instanceof AbstractTransfer ? $this->email->toArray(true, true) : $this->email,
            'salutation' => $this->salutation instanceof AbstractTransfer ? $this->salutation->toArray(true, true) : $this->salutation,
            'firstName' => $this->firstName instanceof AbstractTransfer ? $this->firstName->toArray(true, true) : $this->firstName,
            'lastName' => $this->lastName instanceof AbstractTransfer ? $this->lastName->toArray(true, true) : $this->lastName,
            'idCustomer' => $this->idCustomer instanceof AbstractTransfer ? $this->idCustomer->toArray(true, true) : $this->idCustomer,
            'customerReference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, true) : $this->customerReference,
            'idCompanyBusinessUnit' => $this->idCompanyBusinessUnit instanceof AbstractTransfer ? $this->idCompanyBusinessUnit->toArray(true, true) : $this->idCompanyBusinessUnit,
            'idCompanyUser' => $this->idCompanyUser instanceof AbstractTransfer ? $this->idCompanyUser->toArray(true, true) : $this->idCompanyUser,
            'idCompany' => $this->idCompany instanceof AbstractTransfer ? $this->idCompany->toArray(true, true) : $this->idCompany,
            'companyUserTransfer' => $this->companyUserTransfer instanceof AbstractTransfer ? $this->companyUserTransfer->toArray(true, true) : $this->companyUserTransfer,
        ];
    }
}
