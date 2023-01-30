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
class SpyQuoteCompanyUserEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_QUOTE_COMPANY_USER = 'idQuoteCompanyUser';

    /**
     * @var string
     */
    public const FK_COMPANY_USER = 'fkCompanyUser';

    /**
     * @var string
     */
    public const FK_QUOTE = 'fkQuote';

    /**
     * @var string
     */
    public const FK_QUOTE_PERMISSION_GROUP = 'fkQuotePermissionGroup';

    /**
     * @var string
     */
    public const IS_DEFAULT = 'isDefault';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const SPY_COMPANY_USER = 'spyCompanyUser';

    /**
     * @var string
     */
    public const SPY_QUOTE = 'spyQuote';

    /**
     * @var string
     */
    public const SPY_QUOTE_PERMISSION_GROUP = 'spyQuotePermissionGroup';

    /**
     * @var integer|null
     */
    protected $idQuoteCompanyUser;

    /**
     * @var integer|null
     */
    protected $fkCompanyUser;

    /**
     * @var integer|null
     */
    protected $fkQuote;

    /**
     * @var integer|null
     */
    protected $fkQuotePermissionGroup;

    /**
     * @var boolean|null
     */
    protected $isDefault;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var \Generated\Shared\Transfer\SpyCompanyUserEntityTransfer|null
     */
    protected $spyCompanyUser;

    /**
     * @var \Generated\Shared\Transfer\SpyQuoteEntityTransfer|null
     */
    protected $spyQuote;

    /**
     * @var \Generated\Shared\Transfer\SpyQuotePermissionGroupEntityTransfer|null
     */
    protected $spyQuotePermissionGroup;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_quote_company_user' => 'idQuoteCompanyUser',
        'idQuoteCompanyUser' => 'idQuoteCompanyUser',
        'IdQuoteCompanyUser' => 'idQuoteCompanyUser',
        'fk_company_user' => 'fkCompanyUser',
        'fkCompanyUser' => 'fkCompanyUser',
        'FkCompanyUser' => 'fkCompanyUser',
        'fk_quote' => 'fkQuote',
        'fkQuote' => 'fkQuote',
        'FkQuote' => 'fkQuote',
        'fk_quote_permission_group' => 'fkQuotePermissionGroup',
        'fkQuotePermissionGroup' => 'fkQuotePermissionGroup',
        'FkQuotePermissionGroup' => 'fkQuotePermissionGroup',
        'is_default' => 'isDefault',
        'isDefault' => 'isDefault',
        'IsDefault' => 'isDefault',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'spy_company_user' => 'spyCompanyUser',
        'spyCompanyUser' => 'spyCompanyUser',
        'SpyCompanyUser' => 'spyCompanyUser',
        'spy_quote' => 'spyQuote',
        'spyQuote' => 'spyQuote',
        'SpyQuote' => 'spyQuote',
        'spy_quote_permission_group' => 'spyQuotePermissionGroup',
        'spyQuotePermissionGroup' => 'spyQuotePermissionGroup',
        'SpyQuotePermissionGroup' => 'spyQuotePermissionGroup',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_QUOTE_COMPANY_USER => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_quote_company_user',
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
        self::FK_QUOTE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_quote',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_QUOTE_PERMISSION_GROUP => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_quote_permission_group',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_DEFAULT => [
            'type' => 'boolean',
            'type_shim' => null,
            'name_underscore' => 'is_default',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::UUID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'uuid',
            'is_collection' => false,
            'is_transfer' => false,
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
        self::SPY_QUOTE => [
            'type' => 'Generated\Shared\Transfer\SpyQuoteEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_quote',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_QUOTE_PERMISSION_GROUP => [
            'type' => 'Generated\Shared\Transfer\SpyQuotePermissionGroupEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_quote_permission_group',
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
    public static $entityNamespace = 'Orm\Zed\SharedCart\Persistence\SpyQuoteCompanyUser';


    /**
     * @module 
     *
     * @param integer|null $idQuoteCompanyUser
     *
     * @return $this
     */
    public function setIdQuoteCompanyUser($idQuoteCompanyUser)
    {
        $this->idQuoteCompanyUser = $idQuoteCompanyUser;
        $this->modifiedProperties[self::ID_QUOTE_COMPANY_USER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdQuoteCompanyUser()
    {
        return $this->idQuoteCompanyUser;
    }

    /**
     * @module 
     *
     * @param integer|null $idQuoteCompanyUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdQuoteCompanyUserOrFail($idQuoteCompanyUser)
    {
        if ($idQuoteCompanyUser === null) {
            $this->throwNullValueException(static::ID_QUOTE_COMPANY_USER);
        }

        return $this->setIdQuoteCompanyUser($idQuoteCompanyUser);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdQuoteCompanyUserOrFail()
    {
        if ($this->idQuoteCompanyUser === null) {
            $this->throwNullValueException(static::ID_QUOTE_COMPANY_USER);
        }

        return $this->idQuoteCompanyUser;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdQuoteCompanyUser()
    {
        $this->assertPropertyIsSet(self::ID_QUOTE_COMPANY_USER);

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
     * @param integer|null $fkQuote
     *
     * @return $this
     */
    public function setFkQuote($fkQuote)
    {
        $this->fkQuote = $fkQuote;
        $this->modifiedProperties[self::FK_QUOTE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkQuote()
    {
        return $this->fkQuote;
    }

    /**
     * @module 
     *
     * @param integer|null $fkQuote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkQuoteOrFail($fkQuote)
    {
        if ($fkQuote === null) {
            $this->throwNullValueException(static::FK_QUOTE);
        }

        return $this->setFkQuote($fkQuote);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkQuoteOrFail()
    {
        if ($this->fkQuote === null) {
            $this->throwNullValueException(static::FK_QUOTE);
        }

        return $this->fkQuote;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkQuote()
    {
        $this->assertPropertyIsSet(self::FK_QUOTE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkQuotePermissionGroup
     *
     * @return $this
     */
    public function setFkQuotePermissionGroup($fkQuotePermissionGroup)
    {
        $this->fkQuotePermissionGroup = $fkQuotePermissionGroup;
        $this->modifiedProperties[self::FK_QUOTE_PERMISSION_GROUP] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkQuotePermissionGroup()
    {
        return $this->fkQuotePermissionGroup;
    }

    /**
     * @module 
     *
     * @param integer|null $fkQuotePermissionGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkQuotePermissionGroupOrFail($fkQuotePermissionGroup)
    {
        if ($fkQuotePermissionGroup === null) {
            $this->throwNullValueException(static::FK_QUOTE_PERMISSION_GROUP);
        }

        return $this->setFkQuotePermissionGroup($fkQuotePermissionGroup);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkQuotePermissionGroupOrFail()
    {
        if ($this->fkQuotePermissionGroup === null) {
            $this->throwNullValueException(static::FK_QUOTE_PERMISSION_GROUP);
        }

        return $this->fkQuotePermissionGroup;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkQuotePermissionGroup()
    {
        $this->assertPropertyIsSet(self::FK_QUOTE_PERMISSION_GROUP);

        return $this;
    }

    /**
     * @module 
     *
     * @param boolean|null $isDefault
     *
     * @return $this
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;
        $this->modifiedProperties[self::IS_DEFAULT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return boolean|null
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * @module 
     *
     * @param boolean|null $isDefault
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsDefaultOrFail($isDefault)
    {
        if ($isDefault === null) {
            $this->throwNullValueException(static::IS_DEFAULT);
        }

        return $this->setIsDefault($isDefault);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsDefaultOrFail()
    {
        if ($this->isDefault === null) {
            $this->throwNullValueException(static::IS_DEFAULT);
        }

        return $this->isDefault;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsDefault()
    {
        $this->assertPropertyIsSet(self::IS_DEFAULT);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        $this->modifiedProperties[self::UUID] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @module 
     *
     * @param string|null $uuid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUuidOrFail($uuid)
    {
        if ($uuid === null) {
            $this->throwNullValueException(static::UUID);
        }

        return $this->setUuid($uuid);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUuidOrFail()
    {
        if ($this->uuid === null) {
            $this->throwNullValueException(static::UUID);
        }

        return $this->uuid;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUuid()
    {
        $this->assertPropertyIsSet(self::UUID);

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
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyQuoteEntityTransfer|null $spyQuote
     *
     * @return $this
     */
    public function setSpyQuote(SpyQuoteEntityTransfer $spyQuote = null)
    {
        $this->spyQuote = $spyQuote;
        $this->modifiedProperties[self::SPY_QUOTE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyQuoteEntityTransfer|null
     */
    public function getSpyQuote()
    {
        return $this->spyQuote;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyQuoteEntityTransfer $spyQuote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyQuoteOrFail(SpyQuoteEntityTransfer $spyQuote)
    {
        return $this->setSpyQuote($spyQuote);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyQuoteEntityTransfer
     */
    public function getSpyQuoteOrFail()
    {
        if ($this->spyQuote === null) {
            $this->throwNullValueException(static::SPY_QUOTE);
        }

        return $this->spyQuote;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyQuote()
    {
        $this->assertPropertyIsSet(self::SPY_QUOTE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyQuotePermissionGroupEntityTransfer|null $spyQuotePermissionGroup
     *
     * @return $this
     */
    public function setSpyQuotePermissionGroup(SpyQuotePermissionGroupEntityTransfer $spyQuotePermissionGroup = null)
    {
        $this->spyQuotePermissionGroup = $spyQuotePermissionGroup;
        $this->modifiedProperties[self::SPY_QUOTE_PERMISSION_GROUP] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyQuotePermissionGroupEntityTransfer|null
     */
    public function getSpyQuotePermissionGroup()
    {
        return $this->spyQuotePermissionGroup;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyQuotePermissionGroupEntityTransfer $spyQuotePermissionGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyQuotePermissionGroupOrFail(SpyQuotePermissionGroupEntityTransfer $spyQuotePermissionGroup)
    {
        return $this->setSpyQuotePermissionGroup($spyQuotePermissionGroup);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyQuotePermissionGroupEntityTransfer
     */
    public function getSpyQuotePermissionGroupOrFail()
    {
        if ($this->spyQuotePermissionGroup === null) {
            $this->throwNullValueException(static::SPY_QUOTE_PERMISSION_GROUP);
        }

        return $this->spyQuotePermissionGroup;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyQuotePermissionGroup()
    {
        $this->assertPropertyIsSet(self::SPY_QUOTE_PERMISSION_GROUP);

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
                case 'idQuoteCompanyUser':
                case 'fkCompanyUser':
                case 'fkQuote':
                case 'fkQuotePermissionGroup':
                case 'isDefault':
                case 'uuid':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyCompanyUser':
                case 'spyQuote':
                case 'spyQuotePermissionGroup':
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
                case 'idQuoteCompanyUser':
                case 'fkCompanyUser':
                case 'fkQuote':
                case 'fkQuotePermissionGroup':
                case 'isDefault':
                case 'uuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyCompanyUser':
                case 'spyQuote':
                case 'spyQuotePermissionGroup':
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
                case 'idQuoteCompanyUser':
                case 'fkCompanyUser':
                case 'fkQuote':
                case 'fkQuotePermissionGroup':
                case 'isDefault':
                case 'uuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyCompanyUser':
                case 'spyQuote':
                case 'spyQuotePermissionGroup':
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
            'idQuoteCompanyUser' => $this->idQuoteCompanyUser,
            'fkCompanyUser' => $this->fkCompanyUser,
            'fkQuote' => $this->fkQuote,
            'fkQuotePermissionGroup' => $this->fkQuotePermissionGroup,
            'isDefault' => $this->isDefault,
            'uuid' => $this->uuid,
            'spyCompanyUser' => $this->spyCompanyUser,
            'spyQuote' => $this->spyQuote,
            'spyQuotePermissionGroup' => $this->spyQuotePermissionGroup,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_quote_company_user' => $this->idQuoteCompanyUser,
            'fk_company_user' => $this->fkCompanyUser,
            'fk_quote' => $this->fkQuote,
            'fk_quote_permission_group' => $this->fkQuotePermissionGroup,
            'is_default' => $this->isDefault,
            'uuid' => $this->uuid,
            'spy_company_user' => $this->spyCompanyUser,
            'spy_quote' => $this->spyQuote,
            'spy_quote_permission_group' => $this->spyQuotePermissionGroup,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_quote_company_user' => $this->idQuoteCompanyUser instanceof AbstractTransfer ? $this->idQuoteCompanyUser->toArray(true, false) : $this->idQuoteCompanyUser,
            'fk_company_user' => $this->fkCompanyUser instanceof AbstractTransfer ? $this->fkCompanyUser->toArray(true, false) : $this->fkCompanyUser,
            'fk_quote' => $this->fkQuote instanceof AbstractTransfer ? $this->fkQuote->toArray(true, false) : $this->fkQuote,
            'fk_quote_permission_group' => $this->fkQuotePermissionGroup instanceof AbstractTransfer ? $this->fkQuotePermissionGroup->toArray(true, false) : $this->fkQuotePermissionGroup,
            'is_default' => $this->isDefault instanceof AbstractTransfer ? $this->isDefault->toArray(true, false) : $this->isDefault,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'spy_company_user' => $this->spyCompanyUser instanceof AbstractTransfer ? $this->spyCompanyUser->toArray(true, false) : $this->spyCompanyUser,
            'spy_quote' => $this->spyQuote instanceof AbstractTransfer ? $this->spyQuote->toArray(true, false) : $this->spyQuote,
            'spy_quote_permission_group' => $this->spyQuotePermissionGroup instanceof AbstractTransfer ? $this->spyQuotePermissionGroup->toArray(true, false) : $this->spyQuotePermissionGroup,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idQuoteCompanyUser' => $this->idQuoteCompanyUser instanceof AbstractTransfer ? $this->idQuoteCompanyUser->toArray(true, true) : $this->idQuoteCompanyUser,
            'fkCompanyUser' => $this->fkCompanyUser instanceof AbstractTransfer ? $this->fkCompanyUser->toArray(true, true) : $this->fkCompanyUser,
            'fkQuote' => $this->fkQuote instanceof AbstractTransfer ? $this->fkQuote->toArray(true, true) : $this->fkQuote,
            'fkQuotePermissionGroup' => $this->fkQuotePermissionGroup instanceof AbstractTransfer ? $this->fkQuotePermissionGroup->toArray(true, true) : $this->fkQuotePermissionGroup,
            'isDefault' => $this->isDefault instanceof AbstractTransfer ? $this->isDefault->toArray(true, true) : $this->isDefault,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'spyCompanyUser' => $this->spyCompanyUser instanceof AbstractTransfer ? $this->spyCompanyUser->toArray(true, true) : $this->spyCompanyUser,
            'spyQuote' => $this->spyQuote instanceof AbstractTransfer ? $this->spyQuote->toArray(true, true) : $this->spyQuote,
            'spyQuotePermissionGroup' => $this->spyQuotePermissionGroup instanceof AbstractTransfer ? $this->spyQuotePermissionGroup->toArray(true, true) : $this->spyQuotePermissionGroup,
        ];
    }
}
