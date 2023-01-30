<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyCompanyUserInvitationEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_COMPANY_USER_INVITATION = 'idCompanyUserInvitation';

    /**
     * @var string
     */
    public const FK_COMPANY_BUSINESS_UNIT = 'fkCompanyBusinessUnit';

    /**
     * @var string
     */
    public const FK_COMPANY_USER = 'fkCompanyUser';

    /**
     * @var string
     */
    public const FK_COMPANY_USER_INVITATION_STATUS = 'fkCompanyUserInvitationStatus';

    /**
     * @var string
     */
    public const EMAIL = 'email';

    /**
     * @var string
     */
    public const FIRST_NAME = 'firstName';

    /**
     * @var string
     */
    public const HASH = 'hash';

    /**
     * @var string
     */
    public const LAST_NAME = 'lastName';

    /**
     * @var string
     */
    public const SPY_COMPANY_BUSINESS_UNIT = 'spyCompanyBusinessUnit';

    /**
     * @var string
     */
    public const SPY_COMPANY_USER_INVITATION_STATUS = 'spyCompanyUserInvitationStatus';

    /**
     * @var string
     */
    public const SPY_COMPANY_USER = 'spyCompanyUser';

    /**
     * @var integer|null
     */
    protected $idCompanyUserInvitation;

    /**
     * @var integer|null
     */
    protected $fkCompanyBusinessUnit;

    /**
     * @var integer|null
     */
    protected $fkCompanyUser;

    /**
     * @var integer|null
     */
    protected $fkCompanyUserInvitationStatus;

    /**
     * @var string|null
     */
    protected $email;

    /**
     * @var string|null
     */
    protected $firstName;

    /**
     * @var string|null
     */
    protected $hash;

    /**
     * @var string|null
     */
    protected $lastName;

    /**
     * @var \Generated\Shared\Transfer\SpyCompanyBusinessUnitEntityTransfer|null
     */
    protected $spyCompanyBusinessUnit;

    /**
     * @var \Generated\Shared\Transfer\SpyCompanyUserInvitationStatusEntityTransfer|null
     */
    protected $spyCompanyUserInvitationStatus;

    /**
     * @var \Generated\Shared\Transfer\SpyCompanyUserEntityTransfer|null
     */
    protected $spyCompanyUser;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_company_user_invitation' => 'idCompanyUserInvitation',
        'idCompanyUserInvitation' => 'idCompanyUserInvitation',
        'IdCompanyUserInvitation' => 'idCompanyUserInvitation',
        'fk_company_business_unit' => 'fkCompanyBusinessUnit',
        'fkCompanyBusinessUnit' => 'fkCompanyBusinessUnit',
        'FkCompanyBusinessUnit' => 'fkCompanyBusinessUnit',
        'fk_company_user' => 'fkCompanyUser',
        'fkCompanyUser' => 'fkCompanyUser',
        'FkCompanyUser' => 'fkCompanyUser',
        'fk_company_user_invitation_status' => 'fkCompanyUserInvitationStatus',
        'fkCompanyUserInvitationStatus' => 'fkCompanyUserInvitationStatus',
        'FkCompanyUserInvitationStatus' => 'fkCompanyUserInvitationStatus',
        'email' => 'email',
        'Email' => 'email',
        'first_name' => 'firstName',
        'firstName' => 'firstName',
        'FirstName' => 'firstName',
        'hash' => 'hash',
        'Hash' => 'hash',
        'last_name' => 'lastName',
        'lastName' => 'lastName',
        'LastName' => 'lastName',
        'spy_company_business_unit' => 'spyCompanyBusinessUnit',
        'spyCompanyBusinessUnit' => 'spyCompanyBusinessUnit',
        'SpyCompanyBusinessUnit' => 'spyCompanyBusinessUnit',
        'spy_company_user_invitation_status' => 'spyCompanyUserInvitationStatus',
        'spyCompanyUserInvitationStatus' => 'spyCompanyUserInvitationStatus',
        'SpyCompanyUserInvitationStatus' => 'spyCompanyUserInvitationStatus',
        'spy_company_user' => 'spyCompanyUser',
        'spyCompanyUser' => 'spyCompanyUser',
        'SpyCompanyUser' => 'spyCompanyUser',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_COMPANY_USER_INVITATION => [
            'type' => 'integer',
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
        self::FK_COMPANY_BUSINESS_UNIT => [
            'type' => 'integer',
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
        self::FK_COMPANY_USER => [
            'type' => 'integer',
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
        self::FK_COMPANY_USER_INVITATION_STATUS => [
            'type' => 'integer',
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
        self::SPY_COMPANY_BUSINESS_UNIT => [
            'type' => 'Generated\Shared\Transfer\SpyCompanyBusinessUnitEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_company_business_unit',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_COMPANY_USER_INVITATION_STATUS => [
            'type' => 'Generated\Shared\Transfer\SpyCompanyUserInvitationStatusEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_company_user_invitation_status',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_COMPANY_USER => [
            'type' => 'Generated\Shared\Transfer\SpyCompanyUserEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_company_user',
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
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\CompanyUserInvitation\Persistence\SpyCompanyUserInvitation';


    /**
     * @module 
     *
     * @param integer|null $idCompanyUserInvitation
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdCompanyUserInvitation()
    {
        return $this->idCompanyUserInvitation;
    }

    /**
     * @module 
     *
     * @param integer|null $idCompanyUserInvitation
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdCompanyUserInvitationOrFail()
    {
        if ($this->idCompanyUserInvitation === null) {
            $this->throwNullValueException(static::ID_COMPANY_USER_INVITATION);
        }

        return $this->idCompanyUserInvitation;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkCompanyBusinessUnit
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
     * @module 
     *
     * @return integer|null
     */
    public function getFkCompanyBusinessUnit()
    {
        return $this->fkCompanyBusinessUnit;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCompanyBusinessUnit
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCompanyBusinessUnitOrFail()
    {
        if ($this->fkCompanyBusinessUnit === null) {
            $this->throwNullValueException(static::FK_COMPANY_BUSINESS_UNIT);
        }

        return $this->fkCompanyBusinessUnit;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkCompanyUser
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
     * @module 
     *
     * @return integer|null
     */
    public function getFkCompanyUser()
    {
        return $this->fkCompanyUser;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCompanyUser
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCompanyUserOrFail()
    {
        if ($this->fkCompanyUser === null) {
            $this->throwNullValueException(static::FK_COMPANY_USER);
        }

        return $this->fkCompanyUser;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkCompanyUserInvitationStatus
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
     * @module 
     *
     * @return integer|null
     */
    public function getFkCompanyUserInvitationStatus()
    {
        return $this->fkCompanyUserInvitationStatus;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCompanyUserInvitationStatus
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCompanyUserInvitationStatusOrFail()
    {
        if ($this->fkCompanyUserInvitationStatus === null) {
            $this->throwNullValueException(static::FK_COMPANY_USER_INVITATION_STATUS);
        }

        return $this->fkCompanyUserInvitationStatus;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCompanyBusinessUnitEntityTransfer|null $spyCompanyBusinessUnit
     *
     * @return $this
     */
    public function setSpyCompanyBusinessUnit(SpyCompanyBusinessUnitEntityTransfer $spyCompanyBusinessUnit = null)
    {
        $this->spyCompanyBusinessUnit = $spyCompanyBusinessUnit;
        $this->modifiedProperties[self::SPY_COMPANY_BUSINESS_UNIT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCompanyBusinessUnitEntityTransfer|null
     */
    public function getSpyCompanyBusinessUnit()
    {
        return $this->spyCompanyBusinessUnit;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCompanyBusinessUnitEntityTransfer $spyCompanyBusinessUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyCompanyBusinessUnitOrFail(SpyCompanyBusinessUnitEntityTransfer $spyCompanyBusinessUnit)
    {
        return $this->setSpyCompanyBusinessUnit($spyCompanyBusinessUnit);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCompanyBusinessUnitEntityTransfer
     */
    public function getSpyCompanyBusinessUnitOrFail()
    {
        if ($this->spyCompanyBusinessUnit === null) {
            $this->throwNullValueException(static::SPY_COMPANY_BUSINESS_UNIT);
        }

        return $this->spyCompanyBusinessUnit;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCompanyBusinessUnit()
    {
        $this->assertPropertyIsSet(self::SPY_COMPANY_BUSINESS_UNIT);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCompanyUserInvitationStatusEntityTransfer|null $spyCompanyUserInvitationStatus
     *
     * @return $this
     */
    public function setSpyCompanyUserInvitationStatus(SpyCompanyUserInvitationStatusEntityTransfer $spyCompanyUserInvitationStatus = null)
    {
        $this->spyCompanyUserInvitationStatus = $spyCompanyUserInvitationStatus;
        $this->modifiedProperties[self::SPY_COMPANY_USER_INVITATION_STATUS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCompanyUserInvitationStatusEntityTransfer|null
     */
    public function getSpyCompanyUserInvitationStatus()
    {
        return $this->spyCompanyUserInvitationStatus;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCompanyUserInvitationStatusEntityTransfer $spyCompanyUserInvitationStatus
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyCompanyUserInvitationStatusOrFail(SpyCompanyUserInvitationStatusEntityTransfer $spyCompanyUserInvitationStatus)
    {
        return $this->setSpyCompanyUserInvitationStatus($spyCompanyUserInvitationStatus);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCompanyUserInvitationStatusEntityTransfer
     */
    public function getSpyCompanyUserInvitationStatusOrFail()
    {
        if ($this->spyCompanyUserInvitationStatus === null) {
            $this->throwNullValueException(static::SPY_COMPANY_USER_INVITATION_STATUS);
        }

        return $this->spyCompanyUserInvitationStatus;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCompanyUserInvitationStatus()
    {
        $this->assertPropertyIsSet(self::SPY_COMPANY_USER_INVITATION_STATUS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCompanyUserEntityTransfer|null $spyCompanyUser
     *
     * @return $this
     */
    public function setSpyCompanyUser(SpyCompanyUserEntityTransfer $spyCompanyUser = null)
    {
        $this->spyCompanyUser = $spyCompanyUser;
        $this->modifiedProperties[self::SPY_COMPANY_USER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCompanyUserEntityTransfer|null
     */
    public function getSpyCompanyUser()
    {
        return $this->spyCompanyUser;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCompanyUserEntityTransfer $spyCompanyUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyCompanyUserOrFail(SpyCompanyUserEntityTransfer $spyCompanyUser)
    {
        return $this->setSpyCompanyUser($spyCompanyUser);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCompanyUserEntityTransfer
     */
    public function getSpyCompanyUserOrFail()
    {
        if ($this->spyCompanyUser === null) {
            $this->throwNullValueException(static::SPY_COMPANY_USER);
        }

        return $this->spyCompanyUser;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCompanyUser()
    {
        $this->assertPropertyIsSet(self::SPY_COMPANY_USER);

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
                case 'idCompanyUserInvitation':
                case 'fkCompanyBusinessUnit':
                case 'fkCompanyUser':
                case 'fkCompanyUserInvitationStatus':
                case 'email':
                case 'firstName':
                case 'hash':
                case 'lastName':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyCompanyBusinessUnit':
                case 'spyCompanyUserInvitationStatus':
                case 'spyCompanyUser':
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
                    $this->virtualProperties[$property] = $value;
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
                case 'idCompanyUserInvitation':
                case 'fkCompanyBusinessUnit':
                case 'fkCompanyUser':
                case 'fkCompanyUserInvitationStatus':
                case 'email':
                case 'firstName':
                case 'hash':
                case 'lastName':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyCompanyBusinessUnit':
                case 'spyCompanyUserInvitationStatus':
                case 'spyCompanyUser':
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
                case 'idCompanyUserInvitation':
                case 'fkCompanyBusinessUnit':
                case 'fkCompanyUser':
                case 'fkCompanyUserInvitationStatus':
                case 'email':
                case 'firstName':
                case 'hash':
                case 'lastName':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyCompanyBusinessUnit':
                case 'spyCompanyUserInvitationStatus':
                case 'spyCompanyUser':
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
            'idCompanyUserInvitation' => $this->idCompanyUserInvitation,
            'fkCompanyBusinessUnit' => $this->fkCompanyBusinessUnit,
            'fkCompanyUser' => $this->fkCompanyUser,
            'fkCompanyUserInvitationStatus' => $this->fkCompanyUserInvitationStatus,
            'email' => $this->email,
            'firstName' => $this->firstName,
            'hash' => $this->hash,
            'lastName' => $this->lastName,
            'spyCompanyBusinessUnit' => $this->spyCompanyBusinessUnit,
            'spyCompanyUserInvitationStatus' => $this->spyCompanyUserInvitationStatus,
            'spyCompanyUser' => $this->spyCompanyUser,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_company_user_invitation' => $this->idCompanyUserInvitation,
            'fk_company_business_unit' => $this->fkCompanyBusinessUnit,
            'fk_company_user' => $this->fkCompanyUser,
            'fk_company_user_invitation_status' => $this->fkCompanyUserInvitationStatus,
            'email' => $this->email,
            'first_name' => $this->firstName,
            'hash' => $this->hash,
            'last_name' => $this->lastName,
            'spy_company_business_unit' => $this->spyCompanyBusinessUnit,
            'spy_company_user_invitation_status' => $this->spyCompanyUserInvitationStatus,
            'spy_company_user' => $this->spyCompanyUser,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_company_user_invitation' => $this->idCompanyUserInvitation instanceof AbstractTransfer ? $this->idCompanyUserInvitation->toArray(true, false) : $this->idCompanyUserInvitation,
            'fk_company_business_unit' => $this->fkCompanyBusinessUnit instanceof AbstractTransfer ? $this->fkCompanyBusinessUnit->toArray(true, false) : $this->fkCompanyBusinessUnit,
            'fk_company_user' => $this->fkCompanyUser instanceof AbstractTransfer ? $this->fkCompanyUser->toArray(true, false) : $this->fkCompanyUser,
            'fk_company_user_invitation_status' => $this->fkCompanyUserInvitationStatus instanceof AbstractTransfer ? $this->fkCompanyUserInvitationStatus->toArray(true, false) : $this->fkCompanyUserInvitationStatus,
            'email' => $this->email instanceof AbstractTransfer ? $this->email->toArray(true, false) : $this->email,
            'first_name' => $this->firstName instanceof AbstractTransfer ? $this->firstName->toArray(true, false) : $this->firstName,
            'hash' => $this->hash instanceof AbstractTransfer ? $this->hash->toArray(true, false) : $this->hash,
            'last_name' => $this->lastName instanceof AbstractTransfer ? $this->lastName->toArray(true, false) : $this->lastName,
            'spy_company_business_unit' => $this->spyCompanyBusinessUnit instanceof AbstractTransfer ? $this->spyCompanyBusinessUnit->toArray(true, false) : $this->spyCompanyBusinessUnit,
            'spy_company_user_invitation_status' => $this->spyCompanyUserInvitationStatus instanceof AbstractTransfer ? $this->spyCompanyUserInvitationStatus->toArray(true, false) : $this->spyCompanyUserInvitationStatus,
            'spy_company_user' => $this->spyCompanyUser instanceof AbstractTransfer ? $this->spyCompanyUser->toArray(true, false) : $this->spyCompanyUser,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCompanyUserInvitation' => $this->idCompanyUserInvitation instanceof AbstractTransfer ? $this->idCompanyUserInvitation->toArray(true, true) : $this->idCompanyUserInvitation,
            'fkCompanyBusinessUnit' => $this->fkCompanyBusinessUnit instanceof AbstractTransfer ? $this->fkCompanyBusinessUnit->toArray(true, true) : $this->fkCompanyBusinessUnit,
            'fkCompanyUser' => $this->fkCompanyUser instanceof AbstractTransfer ? $this->fkCompanyUser->toArray(true, true) : $this->fkCompanyUser,
            'fkCompanyUserInvitationStatus' => $this->fkCompanyUserInvitationStatus instanceof AbstractTransfer ? $this->fkCompanyUserInvitationStatus->toArray(true, true) : $this->fkCompanyUserInvitationStatus,
            'email' => $this->email instanceof AbstractTransfer ? $this->email->toArray(true, true) : $this->email,
            'firstName' => $this->firstName instanceof AbstractTransfer ? $this->firstName->toArray(true, true) : $this->firstName,
            'hash' => $this->hash instanceof AbstractTransfer ? $this->hash->toArray(true, true) : $this->hash,
            'lastName' => $this->lastName instanceof AbstractTransfer ? $this->lastName->toArray(true, true) : $this->lastName,
            'spyCompanyBusinessUnit' => $this->spyCompanyBusinessUnit instanceof AbstractTransfer ? $this->spyCompanyBusinessUnit->toArray(true, true) : $this->spyCompanyBusinessUnit,
            'spyCompanyUserInvitationStatus' => $this->spyCompanyUserInvitationStatus instanceof AbstractTransfer ? $this->spyCompanyUserInvitationStatus->toArray(true, true) : $this->spyCompanyUserInvitationStatus,
            'spyCompanyUser' => $this->spyCompanyUser instanceof AbstractTransfer ? $this->spyCompanyUser->toArray(true, true) : $this->spyCompanyUser,
        ];
    }
}
