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
class RestCustomersAttributesTransfer extends AbstractTransfer
{
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
    public const GENDER = 'gender';

    /**
     * @var string
     */
    public const DATE_OF_BIRTH = 'dateOfBirth';

    /**
     * @var string
     */
    public const SALUTATION = 'salutation';

    /**
     * @var string
     */
    public const CREATED_AT = 'createdAt';

    /**
     * @var string
     */
    public const UPDATED_AT = 'updatedAt';

    /**
     * @var string
     */
    public const EMAIL = 'email';

    /**
     * @var string
     */
    public const PASSWORD = 'password';

    /**
     * @var string
     */
    public const CONFIRM_PASSWORD = 'confirmPassword';

    /**
     * @var string
     */
    public const ACCEPTED_TERMS = 'acceptedTerms';

    /**
     * @var string|null
     */
    protected $firstName;

    /**
     * @var string|null
     */
    protected $lastName;

    /**
     * @var string|null
     */
    protected $gender;

    /**
     * @var string|null
     */
    protected $dateOfBirth;

    /**
     * @var string|null
     */
    protected $salutation;

    /**
     * @var string|null
     */
    protected $createdAt;

    /**
     * @var string|null
     */
    protected $updatedAt;

    /**
     * @var string|null
     */
    protected $email;

    /**
     * @var string|null
     */
    protected $password;

    /**
     * @var string|null
     */
    protected $confirmPassword;

    /**
     * @var bool|null
     */
    protected $acceptedTerms;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'first_name' => 'firstName',
        'firstName' => 'firstName',
        'FirstName' => 'firstName',
        'last_name' => 'lastName',
        'lastName' => 'lastName',
        'LastName' => 'lastName',
        'gender' => 'gender',
        'Gender' => 'gender',
        'date_of_birth' => 'dateOfBirth',
        'dateOfBirth' => 'dateOfBirth',
        'DateOfBirth' => 'dateOfBirth',
        'salutation' => 'salutation',
        'Salutation' => 'salutation',
        'created_at' => 'createdAt',
        'createdAt' => 'createdAt',
        'CreatedAt' => 'createdAt',
        'updated_at' => 'updatedAt',
        'updatedAt' => 'updatedAt',
        'UpdatedAt' => 'updatedAt',
        'email' => 'email',
        'Email' => 'email',
        'password' => 'password',
        'Password' => 'password',
        'confirm_password' => 'confirmPassword',
        'confirmPassword' => 'confirmPassword',
        'ConfirmPassword' => 'confirmPassword',
        'accepted_terms' => 'acceptedTerms',
        'acceptedTerms' => 'acceptedTerms',
        'AcceptedTerms' => 'acceptedTerms',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::FIRST_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'first_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'required',
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
            'rest_request_parameter' => 'required',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::GENDER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'gender',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'required',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
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
        self::SALUTATION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'salutation',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'required',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CREATED_AT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'created_at',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::UPDATED_AT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'updated_at',
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
            'rest_request_parameter' => 'required',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PASSWORD => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'password',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'required',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONFIRM_PASSWORD => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'confirm_password',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'required',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ACCEPTED_TERMS => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'accepted_terms',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'required',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module CustomersRestApi
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
     * @module CustomersRestApi
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
     *
     * @param string|null $gender
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
        $this->modifiedProperties[self::GENDER] = true;

        return $this;
    }

    /**
     * @module CustomersRestApi
     *
     * @return string|null
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @module CustomersRestApi
     *
     * @param string|null $gender
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setGenderOrFail($gender)
    {
        if ($gender === null) {
            $this->throwNullValueException(static::GENDER);
        }

        return $this->setGender($gender);
    }

    /**
     * @module CustomersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getGenderOrFail()
    {
        if ($this->gender === null) {
            $this->throwNullValueException(static::GENDER);
        }

        return $this->gender;
    }

    /**
     * @module CustomersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireGender()
    {
        $this->assertPropertyIsSet(self::GENDER);

        return $this;
    }

    /**
     * @module CustomersRestApi
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
     * @module CustomersRestApi
     *
     * @return string|null
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
     *
     * @return string|null
     */
    public function getSalutation()
    {
        return $this->salutation;
    }

    /**
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
     *
     * @param string|null $createdAt
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        $this->modifiedProperties[self::CREATED_AT] = true;

        return $this;
    }

    /**
     * @module CustomersRestApi
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @module CustomersRestApi
     *
     * @param string|null $createdAt
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCreatedAtOrFail($createdAt)
    {
        if ($createdAt === null) {
            $this->throwNullValueException(static::CREATED_AT);
        }

        return $this->setCreatedAt($createdAt);
    }

    /**
     * @module CustomersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCreatedAtOrFail()
    {
        if ($this->createdAt === null) {
            $this->throwNullValueException(static::CREATED_AT);
        }

        return $this->createdAt;
    }

    /**
     * @module CustomersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCreatedAt()
    {
        $this->assertPropertyIsSet(self::CREATED_AT);

        return $this;
    }

    /**
     * @module CustomersRestApi
     *
     * @param string|null $updatedAt
     *
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
        $this->modifiedProperties[self::UPDATED_AT] = true;

        return $this;
    }

    /**
     * @module CustomersRestApi
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @module CustomersRestApi
     *
     * @param string|null $updatedAt
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUpdatedAtOrFail($updatedAt)
    {
        if ($updatedAt === null) {
            $this->throwNullValueException(static::UPDATED_AT);
        }

        return $this->setUpdatedAt($updatedAt);
    }

    /**
     * @module CustomersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUpdatedAtOrFail()
    {
        if ($this->updatedAt === null) {
            $this->throwNullValueException(static::UPDATED_AT);
        }

        return $this->updatedAt;
    }

    /**
     * @module CustomersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUpdatedAt()
    {
        $this->assertPropertyIsSet(self::UPDATED_AT);

        return $this;
    }

    /**
     * @module CustomersRestApi
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
     * @module CustomersRestApi
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
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
     * @module CustomersRestApi
     *
     * @param string|null $password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;
        $this->modifiedProperties[self::PASSWORD] = true;

        return $this;
    }

    /**
     * @module CustomersRestApi
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @module CustomersRestApi
     *
     * @param string|null $password
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPasswordOrFail($password)
    {
        if ($password === null) {
            $this->throwNullValueException(static::PASSWORD);
        }

        return $this->setPassword($password);
    }

    /**
     * @module CustomersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPasswordOrFail()
    {
        if ($this->password === null) {
            $this->throwNullValueException(static::PASSWORD);
        }

        return $this->password;
    }

    /**
     * @module CustomersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePassword()
    {
        $this->assertPropertyIsSet(self::PASSWORD);

        return $this;
    }

    /**
     * @module CustomersRestApi
     *
     * @param string|null $confirmPassword
     *
     * @return $this
     */
    public function setConfirmPassword($confirmPassword)
    {
        $this->confirmPassword = $confirmPassword;
        $this->modifiedProperties[self::CONFIRM_PASSWORD] = true;

        return $this;
    }

    /**
     * @module CustomersRestApi
     *
     * @return string|null
     */
    public function getConfirmPassword()
    {
        return $this->confirmPassword;
    }

    /**
     * @module CustomersRestApi
     *
     * @param string|null $confirmPassword
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setConfirmPasswordOrFail($confirmPassword)
    {
        if ($confirmPassword === null) {
            $this->throwNullValueException(static::CONFIRM_PASSWORD);
        }

        return $this->setConfirmPassword($confirmPassword);
    }

    /**
     * @module CustomersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getConfirmPasswordOrFail()
    {
        if ($this->confirmPassword === null) {
            $this->throwNullValueException(static::CONFIRM_PASSWORD);
        }

        return $this->confirmPassword;
    }

    /**
     * @module CustomersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConfirmPassword()
    {
        $this->assertPropertyIsSet(self::CONFIRM_PASSWORD);

        return $this;
    }

    /**
     * @module CustomersRestApi
     *
     * @param bool|null $acceptedTerms
     *
     * @return $this
     */
    public function setAcceptedTerms($acceptedTerms)
    {
        $this->acceptedTerms = $acceptedTerms;
        $this->modifiedProperties[self::ACCEPTED_TERMS] = true;

        return $this;
    }

    /**
     * @module CustomersRestApi
     *
     * @return bool|null
     */
    public function getAcceptedTerms()
    {
        return $this->acceptedTerms;
    }

    /**
     * @module CustomersRestApi
     *
     * @param bool|null $acceptedTerms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAcceptedTermsOrFail($acceptedTerms)
    {
        if ($acceptedTerms === null) {
            $this->throwNullValueException(static::ACCEPTED_TERMS);
        }

        return $this->setAcceptedTerms($acceptedTerms);
    }

    /**
     * @module CustomersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getAcceptedTermsOrFail()
    {
        if ($this->acceptedTerms === null) {
            $this->throwNullValueException(static::ACCEPTED_TERMS);
        }

        return $this->acceptedTerms;
    }

    /**
     * @module CustomersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAcceptedTerms()
    {
        $this->assertPropertyIsSet(self::ACCEPTED_TERMS);

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
                case 'firstName':
                case 'lastName':
                case 'gender':
                case 'dateOfBirth':
                case 'salutation':
                case 'createdAt':
                case 'updatedAt':
                case 'email':
                case 'password':
                case 'confirmPassword':
                case 'acceptedTerms':
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
                case 'firstName':
                case 'lastName':
                case 'gender':
                case 'dateOfBirth':
                case 'salutation':
                case 'createdAt':
                case 'updatedAt':
                case 'email':
                case 'password':
                case 'confirmPassword':
                case 'acceptedTerms':
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
                case 'firstName':
                case 'lastName':
                case 'gender':
                case 'dateOfBirth':
                case 'salutation':
                case 'createdAt':
                case 'updatedAt':
                case 'email':
                case 'password':
                case 'confirmPassword':
                case 'acceptedTerms':
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
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'gender' => $this->gender,
            'dateOfBirth' => $this->dateOfBirth,
            'salutation' => $this->salutation,
            'createdAt' => $this->createdAt,
            'updatedAt' => $this->updatedAt,
            'email' => $this->email,
            'password' => $this->password,
            'confirmPassword' => $this->confirmPassword,
            'acceptedTerms' => $this->acceptedTerms,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'gender' => $this->gender,
            'date_of_birth' => $this->dateOfBirth,
            'salutation' => $this->salutation,
            'created_at' => $this->createdAt,
            'updated_at' => $this->updatedAt,
            'email' => $this->email,
            'password' => $this->password,
            'confirm_password' => $this->confirmPassword,
            'accepted_terms' => $this->acceptedTerms,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'first_name' => $this->firstName instanceof AbstractTransfer ? $this->firstName->toArray(true, false) : $this->firstName,
            'last_name' => $this->lastName instanceof AbstractTransfer ? $this->lastName->toArray(true, false) : $this->lastName,
            'gender' => $this->gender instanceof AbstractTransfer ? $this->gender->toArray(true, false) : $this->gender,
            'date_of_birth' => $this->dateOfBirth instanceof AbstractTransfer ? $this->dateOfBirth->toArray(true, false) : $this->dateOfBirth,
            'salutation' => $this->salutation instanceof AbstractTransfer ? $this->salutation->toArray(true, false) : $this->salutation,
            'created_at' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, false) : $this->createdAt,
            'updated_at' => $this->updatedAt instanceof AbstractTransfer ? $this->updatedAt->toArray(true, false) : $this->updatedAt,
            'email' => $this->email instanceof AbstractTransfer ? $this->email->toArray(true, false) : $this->email,
            'password' => $this->password instanceof AbstractTransfer ? $this->password->toArray(true, false) : $this->password,
            'confirm_password' => $this->confirmPassword instanceof AbstractTransfer ? $this->confirmPassword->toArray(true, false) : $this->confirmPassword,
            'accepted_terms' => $this->acceptedTerms instanceof AbstractTransfer ? $this->acceptedTerms->toArray(true, false) : $this->acceptedTerms,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'firstName' => $this->firstName instanceof AbstractTransfer ? $this->firstName->toArray(true, true) : $this->firstName,
            'lastName' => $this->lastName instanceof AbstractTransfer ? $this->lastName->toArray(true, true) : $this->lastName,
            'gender' => $this->gender instanceof AbstractTransfer ? $this->gender->toArray(true, true) : $this->gender,
            'dateOfBirth' => $this->dateOfBirth instanceof AbstractTransfer ? $this->dateOfBirth->toArray(true, true) : $this->dateOfBirth,
            'salutation' => $this->salutation instanceof AbstractTransfer ? $this->salutation->toArray(true, true) : $this->salutation,
            'createdAt' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, true) : $this->createdAt,
            'updatedAt' => $this->updatedAt instanceof AbstractTransfer ? $this->updatedAt->toArray(true, true) : $this->updatedAt,
            'email' => $this->email instanceof AbstractTransfer ? $this->email->toArray(true, true) : $this->email,
            'password' => $this->password instanceof AbstractTransfer ? $this->password->toArray(true, true) : $this->password,
            'confirmPassword' => $this->confirmPassword instanceof AbstractTransfer ? $this->confirmPassword->toArray(true, true) : $this->confirmPassword,
            'acceptedTerms' => $this->acceptedTerms instanceof AbstractTransfer ? $this->acceptedTerms->toArray(true, true) : $this->acceptedTerms,
        ];
    }
}
