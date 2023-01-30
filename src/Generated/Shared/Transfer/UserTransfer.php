<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class UserTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PASSWORD = 'password';

    /**
     * @var string
     */
    public const USERNAME = 'username';

    /**
     * @var string
     */
    public const ID_USER = 'idUser';

    /**
     * @var string
     */
    public const ACL_GROUPS = 'aclGroups';

    /**
     * @var string
     */
    public const IS_AGENT = 'isAgent';

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
    public const LAST_LOGIN = 'lastLogin';

    /**
     * @var string
     */
    public const STATUS = 'status';

    /**
     * @var string
     */
    public const IS_SYSTEM_USER = 'isSystemUser';

    /**
     * @var string
     */
    public const LOCALE_NAME = 'localeName';

    /**
     * @var string
     */
    public const FK_LOCALE = 'fkLocale';

    /**
     * @var string|null
     */
    protected $password;

    /**
     * @var string|null
     */
    protected $username;

    /**
     * @var int|null
     */
    protected $idUser;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\GroupTransfer[]
     */
    protected $aclGroups;

    /**
     * @var bool|null
     */
    protected $isAgent;

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
    protected $lastLogin;

    /**
     * @var string|null
     */
    protected $status;

    /**
     * @var bool|null
     */
    protected $isSystemUser;

    /**
     * @var string|null
     */
    protected $localeName;

    /**
     * @var int|null
     */
    protected $fkLocale;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'password' => 'password',
        'Password' => 'password',
        'username' => 'username',
        'Username' => 'username',
        'id_user' => 'idUser',
        'idUser' => 'idUser',
        'IdUser' => 'idUser',
        'acl_groups' => 'aclGroups',
        'aclGroups' => 'aclGroups',
        'AclGroups' => 'aclGroups',
        'is_agent' => 'isAgent',
        'isAgent' => 'isAgent',
        'IsAgent' => 'isAgent',
        'first_name' => 'firstName',
        'firstName' => 'firstName',
        'FirstName' => 'firstName',
        'last_name' => 'lastName',
        'lastName' => 'lastName',
        'LastName' => 'lastName',
        'last_login' => 'lastLogin',
        'lastLogin' => 'lastLogin',
        'LastLogin' => 'lastLogin',
        'status' => 'status',
        'Status' => 'status',
        'is_system_user' => 'isSystemUser',
        'isSystemUser' => 'isSystemUser',
        'IsSystemUser' => 'isSystemUser',
        'locale_name' => 'localeName',
        'localeName' => 'localeName',
        'LocaleName' => 'localeName',
        'fk_locale' => 'fkLocale',
        'fkLocale' => 'fkLocale',
        'FkLocale' => 'fkLocale',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PASSWORD => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'password',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::USERNAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'username',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_USER => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_user',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ACL_GROUPS => [
            'type' => 'Generated\Shared\Transfer\GroupTransfer',
            'type_shim' => null,
            'name_underscore' => 'acl_groups',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_AGENT => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_agent',
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
        self::LAST_LOGIN => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'last_login',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STATUS => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'status',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_SYSTEM_USER => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_system_user',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LOCALE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'locale_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_LOCALE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_locale',
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
     * @module AgentPage|OauthAgentConnector|SecurityGui|SecurityOauthUser|SecuritySystemUser|UserPasswordReset|User
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
     * @module AgentPage|OauthAgentConnector|SecurityGui|SecurityOauthUser|SecuritySystemUser|UserPasswordReset|User
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @module AgentPage|OauthAgentConnector|SecurityGui|SecurityOauthUser|SecuritySystemUser|UserPasswordReset|User
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
     * @module AgentPage|OauthAgentConnector|SecurityGui|SecurityOauthUser|SecuritySystemUser|UserPasswordReset|User
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
     * @module AgentPage|OauthAgentConnector|SecurityGui|SecurityOauthUser|SecuritySystemUser|UserPasswordReset|User
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
     * @module AgentPage|Acl|Agent|Application|Log|SecurityGui|SecurityOauthUser|SecuritySystemUser|UserPasswordResetMail|User
     *
     * @param string|null $username
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;
        $this->modifiedProperties[self::USERNAME] = true;

        return $this;
    }

    /**
     * @module AgentPage|Acl|Agent|Application|Log|SecurityGui|SecurityOauthUser|SecuritySystemUser|UserPasswordResetMail|User
     *
     * @return string|null
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @module AgentPage|Acl|Agent|Application|Log|SecurityGui|SecurityOauthUser|SecuritySystemUser|UserPasswordResetMail|User
     *
     * @param string|null $username
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUsernameOrFail($username)
    {
        if ($username === null) {
            $this->throwNullValueException(static::USERNAME);
        }

        return $this->setUsername($username);
    }

    /**
     * @module AgentPage|Acl|Agent|Application|Log|SecurityGui|SecurityOauthUser|SecuritySystemUser|UserPasswordResetMail|User
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUsernameOrFail()
    {
        if ($this->username === null) {
            $this->throwNullValueException(static::USERNAME);
        }

        return $this->username;
    }

    /**
     * @module AgentPage|Acl|Agent|Application|Log|SecurityGui|SecurityOauthUser|SecuritySystemUser|UserPasswordResetMail|User
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUsername()
    {
        $this->assertPropertyIsSet(self::USERNAME);

        return $this;
    }

    /**
     * @module Acl|CmsUserConnector|CustomerNote|CustomerUserConnectorGui|OauthAgentConnector|PriceProductSchedule|SecurityOauthUser|UserPasswordReset|User
     *
     * @param int|null $idUser
     *
     * @return $this
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
        $this->modifiedProperties[self::ID_USER] = true;

        return $this;
    }

    /**
     * @module Acl|CmsUserConnector|CustomerNote|CustomerUserConnectorGui|OauthAgentConnector|PriceProductSchedule|SecurityOauthUser|UserPasswordReset|User
     *
     * @return int|null
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @module Acl|CmsUserConnector|CustomerNote|CustomerUserConnectorGui|OauthAgentConnector|PriceProductSchedule|SecurityOauthUser|UserPasswordReset|User
     *
     * @param int|null $idUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdUserOrFail($idUser)
    {
        if ($idUser === null) {
            $this->throwNullValueException(static::ID_USER);
        }

        return $this->setIdUser($idUser);
    }

    /**
     * @module Acl|CmsUserConnector|CustomerNote|CustomerUserConnectorGui|OauthAgentConnector|PriceProductSchedule|SecurityOauthUser|UserPasswordReset|User
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdUserOrFail()
    {
        if ($this->idUser === null) {
            $this->throwNullValueException(static::ID_USER);
        }

        return $this->idUser;
    }

    /**
     * @module Acl|CmsUserConnector|CustomerNote|CustomerUserConnectorGui|OauthAgentConnector|PriceProductSchedule|SecurityOauthUser|UserPasswordReset|User
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdUser()
    {
        $this->assertPropertyIsSet(self::ID_USER);

        return $this;
    }

    /**
     * @module Acl
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\GroupTransfer[] $aclGroups
     *
     * @return $this
     */
    public function setAclGroups(ArrayObject $aclGroups)
    {
        $this->aclGroups = $aclGroups;
        $this->modifiedProperties[self::ACL_GROUPS] = true;

        return $this;
    }

    /**
     * @module Acl
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\GroupTransfer[]
     */
    public function getAclGroups()
    {
        return $this->aclGroups;
    }

    /**
     * @module Acl
     *
     * @param \Generated\Shared\Transfer\GroupTransfer $aclGroup
     *
     * @return $this
     */
    public function addAclGroup(GroupTransfer $aclGroup)
    {
        $this->aclGroups[] = $aclGroup;
        $this->modifiedProperties[self::ACL_GROUPS] = true;

        return $this;
    }

    /**
     * @module Acl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAclGroups()
    {
        $this->assertCollectionPropertyIsSet(self::ACL_GROUPS);

        return $this;
    }

    /**
     * @module Agent|OauthAgentConnector
     *
     * @param bool|null $isAgent
     *
     * @return $this
     */
    public function setIsAgent($isAgent)
    {
        $this->isAgent = $isAgent;
        $this->modifiedProperties[self::IS_AGENT] = true;

        return $this;
    }

    /**
     * @module Agent|OauthAgentConnector
     *
     * @return bool|null
     */
    public function getIsAgent()
    {
        return $this->isAgent;
    }

    /**
     * @module Agent|OauthAgentConnector
     *
     * @param bool|null $isAgent
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsAgentOrFail($isAgent)
    {
        if ($isAgent === null) {
            $this->throwNullValueException(static::IS_AGENT);
        }

        return $this->setIsAgent($isAgent);
    }

    /**
     * @module Agent|OauthAgentConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsAgentOrFail()
    {
        if ($this->isAgent === null) {
            $this->throwNullValueException(static::IS_AGENT);
        }

        return $this->isAgent;
    }

    /**
     * @module Agent|OauthAgentConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsAgent()
    {
        $this->assertPropertyIsSet(self::IS_AGENT);

        return $this;
    }

    /**
     * @module CmsUserConnector|CustomerNote|Sales|SecurityOauthUser|User
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
     * @module CmsUserConnector|CustomerNote|Sales|SecurityOauthUser|User
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @module CmsUserConnector|CustomerNote|Sales|SecurityOauthUser|User
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
     * @module CmsUserConnector|CustomerNote|Sales|SecurityOauthUser|User
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
     * @module CmsUserConnector|CustomerNote|Sales|SecurityOauthUser|User
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
     * @module CmsUserConnector|CustomerNote|Sales|SecurityOauthUser|User
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
     * @module CmsUserConnector|CustomerNote|Sales|SecurityOauthUser|User
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @module CmsUserConnector|CustomerNote|Sales|SecurityOauthUser|User
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
     * @module CmsUserConnector|CustomerNote|Sales|SecurityOauthUser|User
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
     * @module CmsUserConnector|CustomerNote|Sales|SecurityOauthUser|User
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
     * @module SecurityGui|SecuritySystemUser|User
     *
     * @param string|null $lastLogin
     *
     * @return $this
     */
    public function setLastLogin($lastLogin)
    {
        $this->lastLogin = $lastLogin;
        $this->modifiedProperties[self::LAST_LOGIN] = true;

        return $this;
    }

    /**
     * @module SecurityGui|SecuritySystemUser|User
     *
     * @return string|null
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
    }

    /**
     * @module SecurityGui|SecuritySystemUser|User
     *
     * @param string|null $lastLogin
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLastLoginOrFail($lastLogin)
    {
        if ($lastLogin === null) {
            $this->throwNullValueException(static::LAST_LOGIN);
        }

        return $this->setLastLogin($lastLogin);
    }

    /**
     * @module SecurityGui|SecuritySystemUser|User
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getLastLoginOrFail()
    {
        if ($this->lastLogin === null) {
            $this->throwNullValueException(static::LAST_LOGIN);
        }

        return $this->lastLogin;
    }

    /**
     * @module SecurityGui|SecuritySystemUser|User
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLastLogin()
    {
        $this->assertPropertyIsSet(self::LAST_LOGIN);

        return $this;
    }

    /**
     * @module SecurityOauthUser|UserPasswordReset|User
     *
     * @param string|null $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        $this->modifiedProperties[self::STATUS] = true;

        return $this;
    }

    /**
     * @module SecurityOauthUser|UserPasswordReset|User
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @module SecurityOauthUser|UserPasswordReset|User
     *
     * @param string|null $status
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStatusOrFail($status)
    {
        if ($status === null) {
            $this->throwNullValueException(static::STATUS);
        }

        return $this->setStatus($status);
    }

    /**
     * @module SecurityOauthUser|UserPasswordReset|User
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStatusOrFail()
    {
        if ($this->status === null) {
            $this->throwNullValueException(static::STATUS);
        }

        return $this->status;
    }

    /**
     * @module SecurityOauthUser|UserPasswordReset|User
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStatus()
    {
        $this->assertPropertyIsSet(self::STATUS);

        return $this;
    }

    /**
     * @module SecuritySystemUser
     *
     * @param bool|null $isSystemUser
     *
     * @return $this
     */
    public function setIsSystemUser($isSystemUser)
    {
        $this->isSystemUser = $isSystemUser;
        $this->modifiedProperties[self::IS_SYSTEM_USER] = true;

        return $this;
    }

    /**
     * @module SecuritySystemUser
     *
     * @return bool|null
     */
    public function getIsSystemUser()
    {
        return $this->isSystemUser;
    }

    /**
     * @module SecuritySystemUser
     *
     * @param bool|null $isSystemUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsSystemUserOrFail($isSystemUser)
    {
        if ($isSystemUser === null) {
            $this->throwNullValueException(static::IS_SYSTEM_USER);
        }

        return $this->setIsSystemUser($isSystemUser);
    }

    /**
     * @module SecuritySystemUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsSystemUserOrFail()
    {
        if ($this->isSystemUser === null) {
            $this->throwNullValueException(static::IS_SYSTEM_USER);
        }

        return $this->isSystemUser;
    }

    /**
     * @module SecuritySystemUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsSystemUser()
    {
        $this->assertPropertyIsSet(self::IS_SYSTEM_USER);

        return $this;
    }

    /**
     * @module UserLocale
     *
     * @param string|null $localeName
     *
     * @return $this
     */
    public function setLocaleName($localeName)
    {
        $this->localeName = $localeName;
        $this->modifiedProperties[self::LOCALE_NAME] = true;

        return $this;
    }

    /**
     * @module UserLocale
     *
     * @return string|null
     */
    public function getLocaleName()
    {
        return $this->localeName;
    }

    /**
     * @module UserLocale
     *
     * @param string|null $localeName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLocaleNameOrFail($localeName)
    {
        if ($localeName === null) {
            $this->throwNullValueException(static::LOCALE_NAME);
        }

        return $this->setLocaleName($localeName);
    }

    /**
     * @module UserLocale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getLocaleNameOrFail()
    {
        if ($this->localeName === null) {
            $this->throwNullValueException(static::LOCALE_NAME);
        }

        return $this->localeName;
    }

    /**
     * @module UserLocale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocaleName()
    {
        $this->assertPropertyIsSet(self::LOCALE_NAME);

        return $this;
    }

    /**
     * @module UserLocale
     *
     * @param int|null $fkLocale
     *
     * @return $this
     */
    public function setFkLocale($fkLocale)
    {
        $this->fkLocale = $fkLocale;
        $this->modifiedProperties[self::FK_LOCALE] = true;

        return $this;
    }

    /**
     * @module UserLocale
     *
     * @return int|null
     */
    public function getFkLocale()
    {
        return $this->fkLocale;
    }

    /**
     * @module UserLocale
     *
     * @param int|null $fkLocale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkLocaleOrFail($fkLocale)
    {
        if ($fkLocale === null) {
            $this->throwNullValueException(static::FK_LOCALE);
        }

        return $this->setFkLocale($fkLocale);
    }

    /**
     * @module UserLocale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkLocaleOrFail()
    {
        if ($this->fkLocale === null) {
            $this->throwNullValueException(static::FK_LOCALE);
        }

        return $this->fkLocale;
    }

    /**
     * @module UserLocale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkLocale()
    {
        $this->assertPropertyIsSet(self::FK_LOCALE);

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
                case 'password':
                case 'username':
                case 'idUser':
                case 'isAgent':
                case 'firstName':
                case 'lastName':
                case 'lastLogin':
                case 'status':
                case 'isSystemUser':
                case 'localeName':
                case 'fkLocale':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'aclGroups':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
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
                case 'password':
                case 'username':
                case 'idUser':
                case 'isAgent':
                case 'firstName':
                case 'lastName':
                case 'lastLogin':
                case 'status':
                case 'isSystemUser':
                case 'localeName':
                case 'fkLocale':
                    $values[$arrayKey] = $value;

                    break;
                case 'aclGroups':
                    $values[$arrayKey] = $value ? $this->addValuesToCollectionModified($value, true, true) : $value;

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
                case 'password':
                case 'username':
                case 'idUser':
                case 'isAgent':
                case 'firstName':
                case 'lastName':
                case 'lastLogin':
                case 'status':
                case 'isSystemUser':
                case 'localeName':
                case 'fkLocale':
                    $values[$arrayKey] = $value;

                    break;
                case 'aclGroups':
                    $values[$arrayKey] = $value ? $this->addValuesToCollectionModified($value, true, false) : $value;

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
        $this->aclGroups = $this->aclGroups ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'password' => $this->password,
            'username' => $this->username,
            'idUser' => $this->idUser,
            'isAgent' => $this->isAgent,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'lastLogin' => $this->lastLogin,
            'status' => $this->status,
            'isSystemUser' => $this->isSystemUser,
            'localeName' => $this->localeName,
            'fkLocale' => $this->fkLocale,
            'aclGroups' => $this->aclGroups,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'password' => $this->password,
            'username' => $this->username,
            'id_user' => $this->idUser,
            'is_agent' => $this->isAgent,
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'last_login' => $this->lastLogin,
            'status' => $this->status,
            'is_system_user' => $this->isSystemUser,
            'locale_name' => $this->localeName,
            'fk_locale' => $this->fkLocale,
            'acl_groups' => $this->aclGroups,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'password' => $this->password instanceof AbstractTransfer ? $this->password->toArray(true, false) : $this->password,
            'username' => $this->username instanceof AbstractTransfer ? $this->username->toArray(true, false) : $this->username,
            'id_user' => $this->idUser instanceof AbstractTransfer ? $this->idUser->toArray(true, false) : $this->idUser,
            'is_agent' => $this->isAgent instanceof AbstractTransfer ? $this->isAgent->toArray(true, false) : $this->isAgent,
            'first_name' => $this->firstName instanceof AbstractTransfer ? $this->firstName->toArray(true, false) : $this->firstName,
            'last_name' => $this->lastName instanceof AbstractTransfer ? $this->lastName->toArray(true, false) : $this->lastName,
            'last_login' => $this->lastLogin instanceof AbstractTransfer ? $this->lastLogin->toArray(true, false) : $this->lastLogin,
            'status' => $this->status instanceof AbstractTransfer ? $this->status->toArray(true, false) : $this->status,
            'is_system_user' => $this->isSystemUser instanceof AbstractTransfer ? $this->isSystemUser->toArray(true, false) : $this->isSystemUser,
            'locale_name' => $this->localeName instanceof AbstractTransfer ? $this->localeName->toArray(true, false) : $this->localeName,
            'fk_locale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, false) : $this->fkLocale,
            'acl_groups' => $this->aclGroups instanceof AbstractTransfer ? $this->aclGroups->toArray(true, false) : $this->addValuesToCollection($this->aclGroups, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'password' => $this->password instanceof AbstractTransfer ? $this->password->toArray(true, true) : $this->password,
            'username' => $this->username instanceof AbstractTransfer ? $this->username->toArray(true, true) : $this->username,
            'idUser' => $this->idUser instanceof AbstractTransfer ? $this->idUser->toArray(true, true) : $this->idUser,
            'isAgent' => $this->isAgent instanceof AbstractTransfer ? $this->isAgent->toArray(true, true) : $this->isAgent,
            'firstName' => $this->firstName instanceof AbstractTransfer ? $this->firstName->toArray(true, true) : $this->firstName,
            'lastName' => $this->lastName instanceof AbstractTransfer ? $this->lastName->toArray(true, true) : $this->lastName,
            'lastLogin' => $this->lastLogin instanceof AbstractTransfer ? $this->lastLogin->toArray(true, true) : $this->lastLogin,
            'status' => $this->status instanceof AbstractTransfer ? $this->status->toArray(true, true) : $this->status,
            'isSystemUser' => $this->isSystemUser instanceof AbstractTransfer ? $this->isSystemUser->toArray(true, true) : $this->isSystemUser,
            'localeName' => $this->localeName instanceof AbstractTransfer ? $this->localeName->toArray(true, true) : $this->localeName,
            'fkLocale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, true) : $this->fkLocale,
            'aclGroups' => $this->aclGroups instanceof AbstractTransfer ? $this->aclGroups->toArray(true, true) : $this->addValuesToCollection($this->aclGroups, true, true),
        ];
    }
}
