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
class CompanyUserInvitationTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const HASH = 'hash';

    /**
     * @var string
     */
    public const ID_COMPANY_USER_INVITATION = 'idCompanyUserInvitation';

    /**
     * @var string
     */
    public const COMPANY_USER_INVITATION_STATUS_KEY = 'companyUserInvitationStatusKey';

    /**
     * @var string
     */
    public const FK_COMPANY_USER = 'fkCompanyUser';

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
    public const EMAIL = 'email';

    /**
     * @var string
     */
    public const COMPANY_BUSINESS_UNIT_NAME = 'companyBusinessUnitName';

    /**
     * @var string
     */
    public const FK_COMPANY_BUSINESS_UNIT = 'fkCompanyBusinessUnit';

    /**
     * @var string
     */
    public const FK_COMPANY_USER_INVITATION_STATUS = 'fkCompanyUserInvitationStatus';

    /**
     * @var string
     */
    public const COMPANY_ID = 'companyId';

    /**
     * @var string|null
     */
    protected $hash;

    /**
     * @var int|null
     */
    protected $idCompanyUserInvitation;

    /**
     * @var string|null
     */
    protected $companyUserInvitationStatusKey;

    /**
     * @var int|null
     */
    protected $fkCompanyUser;

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
    protected $email;

    /**
     * @var string|null
     */
    protected $companyBusinessUnitName;

    /**
     * @var int|null
     */
    protected $fkCompanyBusinessUnit;

    /**
     * @var int|null
     */
    protected $fkCompanyUserInvitationStatus;

    /**
     * @var int|null
     */
    protected $companyId;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'hash' => 'hash',
        'Hash' => 'hash',
        'id_company_user_invitation' => 'idCompanyUserInvitation',
        'idCompanyUserInvitation' => 'idCompanyUserInvitation',
        'IdCompanyUserInvitation' => 'idCompanyUserInvitation',
        'company_user_invitation_status_key' => 'companyUserInvitationStatusKey',
        'companyUserInvitationStatusKey' => 'companyUserInvitationStatusKey',
        'CompanyUserInvitationStatusKey' => 'companyUserInvitationStatusKey',
        'fk_company_user' => 'fkCompanyUser',
        'fkCompanyUser' => 'fkCompanyUser',
        'FkCompanyUser' => 'fkCompanyUser',
        'first_name' => 'firstName',
        'firstName' => 'firstName',
        'FirstName' => 'firstName',
        'last_name' => 'lastName',
        'lastName' => 'lastName',
        'LastName' => 'lastName',
        'email' => 'email',
        'Email' => 'email',
        'company_business_unit_name' => 'companyBusinessUnitName',
        'companyBusinessUnitName' => 'companyBusinessUnitName',
        'CompanyBusinessUnitName' => 'companyBusinessUnitName',
        'fk_company_business_unit' => 'fkCompanyBusinessUnit',
        'fkCompanyBusinessUnit' => 'fkCompanyBusinessUnit',
        'FkCompanyBusinessUnit' => 'fkCompanyBusinessUnit',
        'fk_company_user_invitation_status' => 'fkCompanyUserInvitationStatus',
        'fkCompanyUserInvitationStatus' => 'fkCompanyUserInvitationStatus',
        'FkCompanyUserInvitationStatus' => 'fkCompanyUserInvitationStatus',
        'company_id' => 'companyId',
        'companyId' => 'companyId',
        'CompanyId' => 'companyId',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::HASH => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'hash',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_COMPANY_USER_INVITATION => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_company_user_invitation',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COMPANY_USER_INVITATION_STATUS_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'company_user_invitation_status_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_COMPANY_USER => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_company_user',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
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
            'rest_request_parameter' => 'no',
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
        self::COMPANY_BUSINESS_UNIT_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'company_business_unit_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_COMPANY_BUSINESS_UNIT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_company_business_unit',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_COMPANY_USER_INVITATION_STATUS => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_company_user_invitation_status',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COMPANY_ID => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'company_id',
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
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @param string|null $hash
     *
     * @return $this
     */
    public function setHash($hash)
    {
        $this->hash = $hash;
        $this->modifiedProperties[self::HASH] = true;

        return $this;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @return string|null
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @param string|null $hash
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setHashOrFail($hash)
    {
        if ($hash === null) {
            $this->throwNullValueException(static::HASH);
        }

        return $this->setHash($hash);
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getHashOrFail()
    {
        if ($this->hash === null) {
            $this->throwNullValueException(static::HASH);
        }

        return $this->hash;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireHash()
    {
        $this->assertPropertyIsSet(self::HASH);

        return $this;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @param int|null $idCompanyUserInvitation
     *
     * @return $this
     */
    public function setIdCompanyUserInvitation($idCompanyUserInvitation)
    {
        $this->idCompanyUserInvitation = $idCompanyUserInvitation;
        $this->modifiedProperties[self::ID_COMPANY_USER_INVITATION] = true;

        return $this;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @return int|null
     */
    public function getIdCompanyUserInvitation()
    {
        return $this->idCompanyUserInvitation;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @param int|null $idCompanyUserInvitation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCompanyUserInvitationOrFail($idCompanyUserInvitation)
    {
        if ($idCompanyUserInvitation === null) {
            $this->throwNullValueException(static::ID_COMPANY_USER_INVITATION);
        }

        return $this->setIdCompanyUserInvitation($idCompanyUserInvitation);
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCompanyUserInvitationOrFail()
    {
        if ($this->idCompanyUserInvitation === null) {
            $this->throwNullValueException(static::ID_COMPANY_USER_INVITATION);
        }

        return $this->idCompanyUserInvitation;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCompanyUserInvitation()
    {
        $this->assertPropertyIsSet(self::ID_COMPANY_USER_INVITATION);

        return $this;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @param string|null $companyUserInvitationStatusKey
     *
     * @return $this
     */
    public function setCompanyUserInvitationStatusKey($companyUserInvitationStatusKey)
    {
        $this->companyUserInvitationStatusKey = $companyUserInvitationStatusKey;
        $this->modifiedProperties[self::COMPANY_USER_INVITATION_STATUS_KEY] = true;

        return $this;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @return string|null
     */
    public function getCompanyUserInvitationStatusKey()
    {
        return $this->companyUserInvitationStatusKey;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @param string|null $companyUserInvitationStatusKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCompanyUserInvitationStatusKeyOrFail($companyUserInvitationStatusKey)
    {
        if ($companyUserInvitationStatusKey === null) {
            $this->throwNullValueException(static::COMPANY_USER_INVITATION_STATUS_KEY);
        }

        return $this->setCompanyUserInvitationStatusKey($companyUserInvitationStatusKey);
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCompanyUserInvitationStatusKeyOrFail()
    {
        if ($this->companyUserInvitationStatusKey === null) {
            $this->throwNullValueException(static::COMPANY_USER_INVITATION_STATUS_KEY);
        }

        return $this->companyUserInvitationStatusKey;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompanyUserInvitationStatusKey()
    {
        $this->assertPropertyIsSet(self::COMPANY_USER_INVITATION_STATUS_KEY);

        return $this;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @param int|null $fkCompanyUser
     *
     * @return $this
     */
    public function setFkCompanyUser($fkCompanyUser)
    {
        $this->fkCompanyUser = $fkCompanyUser;
        $this->modifiedProperties[self::FK_COMPANY_USER] = true;

        return $this;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @return int|null
     */
    public function getFkCompanyUser()
    {
        return $this->fkCompanyUser;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @param int|null $fkCompanyUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCompanyUserOrFail($fkCompanyUser)
    {
        if ($fkCompanyUser === null) {
            $this->throwNullValueException(static::FK_COMPANY_USER);
        }

        return $this->setFkCompanyUser($fkCompanyUser);
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkCompanyUserOrFail()
    {
        if ($this->fkCompanyUser === null) {
            $this->throwNullValueException(static::FK_COMPANY_USER);
        }

        return $this->fkCompanyUser;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCompanyUser()
    {
        $this->assertPropertyIsSet(self::FK_COMPANY_USER);

        return $this;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
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
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
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
     * @module CompanyUserInvitationPage|CompanyUserInvitation
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
     * @module CompanyUserInvitationPage|CompanyUserInvitation
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
     * @module CompanyUserInvitationPage|CompanyUserInvitation
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
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
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
     * @module CompanyUserInvitationPage|CompanyUserInvitation
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
     * @module CompanyUserInvitationPage|CompanyUserInvitation
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
     * @module CompanyUserInvitationPage|CompanyUserInvitation
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
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
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
     * @module CompanyUserInvitationPage|CompanyUserInvitation
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
     * @module CompanyUserInvitationPage|CompanyUserInvitation
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
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @param string|null $companyBusinessUnitName
     *
     * @return $this
     */
    public function setCompanyBusinessUnitName($companyBusinessUnitName)
    {
        $this->companyBusinessUnitName = $companyBusinessUnitName;
        $this->modifiedProperties[self::COMPANY_BUSINESS_UNIT_NAME] = true;

        return $this;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @return string|null
     */
    public function getCompanyBusinessUnitName()
    {
        return $this->companyBusinessUnitName;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @param string|null $companyBusinessUnitName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCompanyBusinessUnitNameOrFail($companyBusinessUnitName)
    {
        if ($companyBusinessUnitName === null) {
            $this->throwNullValueException(static::COMPANY_BUSINESS_UNIT_NAME);
        }

        return $this->setCompanyBusinessUnitName($companyBusinessUnitName);
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCompanyBusinessUnitNameOrFail()
    {
        if ($this->companyBusinessUnitName === null) {
            $this->throwNullValueException(static::COMPANY_BUSINESS_UNIT_NAME);
        }

        return $this->companyBusinessUnitName;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompanyBusinessUnitName()
    {
        $this->assertPropertyIsSet(self::COMPANY_BUSINESS_UNIT_NAME);

        return $this;
    }

    /**
     * @module CompanyUserInvitation
     *
     * @param int|null $fkCompanyBusinessUnit
     *
     * @return $this
     */
    public function setFkCompanyBusinessUnit($fkCompanyBusinessUnit)
    {
        $this->fkCompanyBusinessUnit = $fkCompanyBusinessUnit;
        $this->modifiedProperties[self::FK_COMPANY_BUSINESS_UNIT] = true;

        return $this;
    }

    /**
     * @module CompanyUserInvitation
     *
     * @return int|null
     */
    public function getFkCompanyBusinessUnit()
    {
        return $this->fkCompanyBusinessUnit;
    }

    /**
     * @module CompanyUserInvitation
     *
     * @param int|null $fkCompanyBusinessUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCompanyBusinessUnitOrFail($fkCompanyBusinessUnit)
    {
        if ($fkCompanyBusinessUnit === null) {
            $this->throwNullValueException(static::FK_COMPANY_BUSINESS_UNIT);
        }

        return $this->setFkCompanyBusinessUnit($fkCompanyBusinessUnit);
    }

    /**
     * @module CompanyUserInvitation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkCompanyBusinessUnitOrFail()
    {
        if ($this->fkCompanyBusinessUnit === null) {
            $this->throwNullValueException(static::FK_COMPANY_BUSINESS_UNIT);
        }

        return $this->fkCompanyBusinessUnit;
    }

    /**
     * @module CompanyUserInvitation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCompanyBusinessUnit()
    {
        $this->assertPropertyIsSet(self::FK_COMPANY_BUSINESS_UNIT);

        return $this;
    }

    /**
     * @module CompanyUserInvitation
     *
     * @param int|null $fkCompanyUserInvitationStatus
     *
     * @return $this
     */
    public function setFkCompanyUserInvitationStatus($fkCompanyUserInvitationStatus)
    {
        $this->fkCompanyUserInvitationStatus = $fkCompanyUserInvitationStatus;
        $this->modifiedProperties[self::FK_COMPANY_USER_INVITATION_STATUS] = true;

        return $this;
    }

    /**
     * @module CompanyUserInvitation
     *
     * @return int|null
     */
    public function getFkCompanyUserInvitationStatus()
    {
        return $this->fkCompanyUserInvitationStatus;
    }

    /**
     * @module CompanyUserInvitation
     *
     * @param int|null $fkCompanyUserInvitationStatus
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCompanyUserInvitationStatusOrFail($fkCompanyUserInvitationStatus)
    {
        if ($fkCompanyUserInvitationStatus === null) {
            $this->throwNullValueException(static::FK_COMPANY_USER_INVITATION_STATUS);
        }

        return $this->setFkCompanyUserInvitationStatus($fkCompanyUserInvitationStatus);
    }

    /**
     * @module CompanyUserInvitation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkCompanyUserInvitationStatusOrFail()
    {
        if ($this->fkCompanyUserInvitationStatus === null) {
            $this->throwNullValueException(static::FK_COMPANY_USER_INVITATION_STATUS);
        }

        return $this->fkCompanyUserInvitationStatus;
    }

    /**
     * @module CompanyUserInvitation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCompanyUserInvitationStatus()
    {
        $this->assertPropertyIsSet(self::FK_COMPANY_USER_INVITATION_STATUS);

        return $this;
    }

    /**
     * @module CompanyUserInvitation
     *
     * @param int|null $companyId
     *
     * @return $this
     */
    public function setCompanyId($companyId)
    {
        $this->companyId = $companyId;
        $this->modifiedProperties[self::COMPANY_ID] = true;

        return $this;
    }

    /**
     * @module CompanyUserInvitation
     *
     * @return int|null
     */
    public function getCompanyId()
    {
        return $this->companyId;
    }

    /**
     * @module CompanyUserInvitation
     *
     * @param int|null $companyId
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCompanyIdOrFail($companyId)
    {
        if ($companyId === null) {
            $this->throwNullValueException(static::COMPANY_ID);
        }

        return $this->setCompanyId($companyId);
    }

    /**
     * @module CompanyUserInvitation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getCompanyIdOrFail()
    {
        if ($this->companyId === null) {
            $this->throwNullValueException(static::COMPANY_ID);
        }

        return $this->companyId;
    }

    /**
     * @module CompanyUserInvitation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompanyId()
    {
        $this->assertPropertyIsSet(self::COMPANY_ID);

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
                case 'hash':
                case 'idCompanyUserInvitation':
                case 'companyUserInvitationStatusKey':
                case 'fkCompanyUser':
                case 'firstName':
                case 'lastName':
                case 'email':
                case 'companyBusinessUnitName':
                case 'fkCompanyBusinessUnit':
                case 'fkCompanyUserInvitationStatus':
                case 'companyId':
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
                case 'hash':
                case 'idCompanyUserInvitation':
                case 'companyUserInvitationStatusKey':
                case 'fkCompanyUser':
                case 'firstName':
                case 'lastName':
                case 'email':
                case 'companyBusinessUnitName':
                case 'fkCompanyBusinessUnit':
                case 'fkCompanyUserInvitationStatus':
                case 'companyId':
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
                case 'hash':
                case 'idCompanyUserInvitation':
                case 'companyUserInvitationStatusKey':
                case 'fkCompanyUser':
                case 'firstName':
                case 'lastName':
                case 'email':
                case 'companyBusinessUnitName':
                case 'fkCompanyBusinessUnit':
                case 'fkCompanyUserInvitationStatus':
                case 'companyId':
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
            'hash' => $this->hash,
            'idCompanyUserInvitation' => $this->idCompanyUserInvitation,
            'companyUserInvitationStatusKey' => $this->companyUserInvitationStatusKey,
            'fkCompanyUser' => $this->fkCompanyUser,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'email' => $this->email,
            'companyBusinessUnitName' => $this->companyBusinessUnitName,
            'fkCompanyBusinessUnit' => $this->fkCompanyBusinessUnit,
            'fkCompanyUserInvitationStatus' => $this->fkCompanyUserInvitationStatus,
            'companyId' => $this->companyId,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'hash' => $this->hash,
            'id_company_user_invitation' => $this->idCompanyUserInvitation,
            'company_user_invitation_status_key' => $this->companyUserInvitationStatusKey,
            'fk_company_user' => $this->fkCompanyUser,
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'email' => $this->email,
            'company_business_unit_name' => $this->companyBusinessUnitName,
            'fk_company_business_unit' => $this->fkCompanyBusinessUnit,
            'fk_company_user_invitation_status' => $this->fkCompanyUserInvitationStatus,
            'company_id' => $this->companyId,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'hash' => $this->hash instanceof AbstractTransfer ? $this->hash->toArray(true, false) : $this->hash,
            'id_company_user_invitation' => $this->idCompanyUserInvitation instanceof AbstractTransfer ? $this->idCompanyUserInvitation->toArray(true, false) : $this->idCompanyUserInvitation,
            'company_user_invitation_status_key' => $this->companyUserInvitationStatusKey instanceof AbstractTransfer ? $this->companyUserInvitationStatusKey->toArray(true, false) : $this->companyUserInvitationStatusKey,
            'fk_company_user' => $this->fkCompanyUser instanceof AbstractTransfer ? $this->fkCompanyUser->toArray(true, false) : $this->fkCompanyUser,
            'first_name' => $this->firstName instanceof AbstractTransfer ? $this->firstName->toArray(true, false) : $this->firstName,
            'last_name' => $this->lastName instanceof AbstractTransfer ? $this->lastName->toArray(true, false) : $this->lastName,
            'email' => $this->email instanceof AbstractTransfer ? $this->email->toArray(true, false) : $this->email,
            'company_business_unit_name' => $this->companyBusinessUnitName instanceof AbstractTransfer ? $this->companyBusinessUnitName->toArray(true, false) : $this->companyBusinessUnitName,
            'fk_company_business_unit' => $this->fkCompanyBusinessUnit instanceof AbstractTransfer ? $this->fkCompanyBusinessUnit->toArray(true, false) : $this->fkCompanyBusinessUnit,
            'fk_company_user_invitation_status' => $this->fkCompanyUserInvitationStatus instanceof AbstractTransfer ? $this->fkCompanyUserInvitationStatus->toArray(true, false) : $this->fkCompanyUserInvitationStatus,
            'company_id' => $this->companyId instanceof AbstractTransfer ? $this->companyId->toArray(true, false) : $this->companyId,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'hash' => $this->hash instanceof AbstractTransfer ? $this->hash->toArray(true, true) : $this->hash,
            'idCompanyUserInvitation' => $this->idCompanyUserInvitation instanceof AbstractTransfer ? $this->idCompanyUserInvitation->toArray(true, true) : $this->idCompanyUserInvitation,
            'companyUserInvitationStatusKey' => $this->companyUserInvitationStatusKey instanceof AbstractTransfer ? $this->companyUserInvitationStatusKey->toArray(true, true) : $this->companyUserInvitationStatusKey,
            'fkCompanyUser' => $this->fkCompanyUser instanceof AbstractTransfer ? $this->fkCompanyUser->toArray(true, true) : $this->fkCompanyUser,
            'firstName' => $this->firstName instanceof AbstractTransfer ? $this->firstName->toArray(true, true) : $this->firstName,
            'lastName' => $this->lastName instanceof AbstractTransfer ? $this->lastName->toArray(true, true) : $this->lastName,
            'email' => $this->email instanceof AbstractTransfer ? $this->email->toArray(true, true) : $this->email,
            'companyBusinessUnitName' => $this->companyBusinessUnitName instanceof AbstractTransfer ? $this->companyBusinessUnitName->toArray(true, true) : $this->companyBusinessUnitName,
            'fkCompanyBusinessUnit' => $this->fkCompanyBusinessUnit instanceof AbstractTransfer ? $this->fkCompanyBusinessUnit->toArray(true, true) : $this->fkCompanyBusinessUnit,
            'fkCompanyUserInvitationStatus' => $this->fkCompanyUserInvitationStatus instanceof AbstractTransfer ? $this->fkCompanyUserInvitationStatus->toArray(true, true) : $this->fkCompanyUserInvitationStatus,
            'companyId' => $this->companyId instanceof AbstractTransfer ? $this->companyId->toArray(true, true) : $this->companyId,
        ];
    }
}
