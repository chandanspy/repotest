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
class SpyCompanyRoleToCompanyUserEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_COMPANY_ROLE_TO_COMPANY_USER = 'idCompanyRoleToCompanyUser';

    /**
     * @var string
     */
    public const FK_COMPANY_ROLE = 'fkCompanyRole';

    /**
     * @var string
     */
    public const FK_COMPANY_USER = 'fkCompanyUser';

    /**
     * @var string
     */
    public const COMPANY_ROLE = 'companyRole';

    /**
     * @var string
     */
    public const COMPANY_USER = 'companyUser';

    /**
     * @var integer|null
     */
    protected $idCompanyRoleToCompanyUser;

    /**
     * @var integer|null
     */
    protected $fkCompanyRole;

    /**
     * @var integer|null
     */
    protected $fkCompanyUser;

    /**
     * @var \Generated\Shared\Transfer\SpyCompanyRoleEntityTransfer|null
     */
    protected $companyRole;

    /**
     * @var \Generated\Shared\Transfer\SpyCompanyUserEntityTransfer|null
     */
    protected $companyUser;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_company_role_to_company_user' => 'idCompanyRoleToCompanyUser',
        'idCompanyRoleToCompanyUser' => 'idCompanyRoleToCompanyUser',
        'IdCompanyRoleToCompanyUser' => 'idCompanyRoleToCompanyUser',
        'fk_company_role' => 'fkCompanyRole',
        'fkCompanyRole' => 'fkCompanyRole',
        'FkCompanyRole' => 'fkCompanyRole',
        'fk_company_user' => 'fkCompanyUser',
        'fkCompanyUser' => 'fkCompanyUser',
        'FkCompanyUser' => 'fkCompanyUser',
        'company_role' => 'companyRole',
        'companyRole' => 'companyRole',
        'CompanyRole' => 'companyRole',
        'company_user' => 'companyUser',
        'companyUser' => 'companyUser',
        'CompanyUser' => 'companyUser',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_COMPANY_ROLE_TO_COMPANY_USER => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_company_role_to_company_user',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_COMPANY_ROLE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_company_role',
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
        self::COMPANY_ROLE => [
            'type' => 'Generated\Shared\Transfer\SpyCompanyRoleEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'company_role',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COMPANY_USER => [
            'type' => 'Generated\Shared\Transfer\SpyCompanyUserEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'company_user',
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
    public static $entityNamespace = 'Orm\Zed\CompanyRole\Persistence\SpyCompanyRoleToCompanyUser';


    /**
     * @module 
     *
     * @param integer|null $idCompanyRoleToCompanyUser
     *
     * @return $this
     */
    public function setIdCompanyRoleToCompanyUser($idCompanyRoleToCompanyUser)
    {
        $this->idCompanyRoleToCompanyUser = $idCompanyRoleToCompanyUser;
        $this->modifiedProperties[self::ID_COMPANY_ROLE_TO_COMPANY_USER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdCompanyRoleToCompanyUser()
    {
        return $this->idCompanyRoleToCompanyUser;
    }

    /**
     * @module 
     *
     * @param integer|null $idCompanyRoleToCompanyUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCompanyRoleToCompanyUserOrFail($idCompanyRoleToCompanyUser)
    {
        if ($idCompanyRoleToCompanyUser === null) {
            $this->throwNullValueException(static::ID_COMPANY_ROLE_TO_COMPANY_USER);
        }

        return $this->setIdCompanyRoleToCompanyUser($idCompanyRoleToCompanyUser);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdCompanyRoleToCompanyUserOrFail()
    {
        if ($this->idCompanyRoleToCompanyUser === null) {
            $this->throwNullValueException(static::ID_COMPANY_ROLE_TO_COMPANY_USER);
        }

        return $this->idCompanyRoleToCompanyUser;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCompanyRoleToCompanyUser()
    {
        $this->assertPropertyIsSet(self::ID_COMPANY_ROLE_TO_COMPANY_USER);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCompanyRole
     *
     * @return $this
     */
    public function setFkCompanyRole($fkCompanyRole)
    {
        $this->fkCompanyRole = $fkCompanyRole;
        $this->modifiedProperties[self::FK_COMPANY_ROLE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkCompanyRole()
    {
        return $this->fkCompanyRole;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCompanyRole
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCompanyRoleOrFail($fkCompanyRole)
    {
        if ($fkCompanyRole === null) {
            $this->throwNullValueException(static::FK_COMPANY_ROLE);
        }

        return $this->setFkCompanyRole($fkCompanyRole);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCompanyRoleOrFail()
    {
        if ($this->fkCompanyRole === null) {
            $this->throwNullValueException(static::FK_COMPANY_ROLE);
        }

        return $this->fkCompanyRole;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCompanyRole()
    {
        $this->assertPropertyIsSet(self::FK_COMPANY_ROLE);

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
     * @param \Generated\Shared\Transfer\SpyCompanyRoleEntityTransfer|null $companyRole
     *
     * @return $this
     */
    public function setCompanyRole(SpyCompanyRoleEntityTransfer $companyRole = null)
    {
        $this->companyRole = $companyRole;
        $this->modifiedProperties[self::COMPANY_ROLE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCompanyRoleEntityTransfer|null
     */
    public function getCompanyRole()
    {
        return $this->companyRole;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCompanyRoleEntityTransfer $companyRole
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCompanyRoleOrFail(SpyCompanyRoleEntityTransfer $companyRole)
    {
        return $this->setCompanyRole($companyRole);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCompanyRoleEntityTransfer
     */
    public function getCompanyRoleOrFail()
    {
        if ($this->companyRole === null) {
            $this->throwNullValueException(static::COMPANY_ROLE);
        }

        return $this->companyRole;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompanyRole()
    {
        $this->assertPropertyIsSet(self::COMPANY_ROLE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCompanyUserEntityTransfer|null $companyUser
     *
     * @return $this
     */
    public function setCompanyUser(SpyCompanyUserEntityTransfer $companyUser = null)
    {
        $this->companyUser = $companyUser;
        $this->modifiedProperties[self::COMPANY_USER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCompanyUserEntityTransfer|null
     */
    public function getCompanyUser()
    {
        return $this->companyUser;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCompanyUserEntityTransfer $companyUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCompanyUserOrFail(SpyCompanyUserEntityTransfer $companyUser)
    {
        return $this->setCompanyUser($companyUser);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCompanyUserEntityTransfer
     */
    public function getCompanyUserOrFail()
    {
        if ($this->companyUser === null) {
            $this->throwNullValueException(static::COMPANY_USER);
        }

        return $this->companyUser;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompanyUser()
    {
        $this->assertPropertyIsSet(self::COMPANY_USER);

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
                case 'idCompanyRoleToCompanyUser':
                case 'fkCompanyRole':
                case 'fkCompanyUser':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'companyRole':
                case 'companyUser':
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
                case 'idCompanyRoleToCompanyUser':
                case 'fkCompanyRole':
                case 'fkCompanyUser':
                    $values[$arrayKey] = $value;

                    break;
                case 'companyRole':
                case 'companyUser':
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
                case 'idCompanyRoleToCompanyUser':
                case 'fkCompanyRole':
                case 'fkCompanyUser':
                    $values[$arrayKey] = $value;

                    break;
                case 'companyRole':
                case 'companyUser':
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
            'idCompanyRoleToCompanyUser' => $this->idCompanyRoleToCompanyUser,
            'fkCompanyRole' => $this->fkCompanyRole,
            'fkCompanyUser' => $this->fkCompanyUser,
            'companyRole' => $this->companyRole,
            'companyUser' => $this->companyUser,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_company_role_to_company_user' => $this->idCompanyRoleToCompanyUser,
            'fk_company_role' => $this->fkCompanyRole,
            'fk_company_user' => $this->fkCompanyUser,
            'company_role' => $this->companyRole,
            'company_user' => $this->companyUser,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_company_role_to_company_user' => $this->idCompanyRoleToCompanyUser instanceof AbstractTransfer ? $this->idCompanyRoleToCompanyUser->toArray(true, false) : $this->idCompanyRoleToCompanyUser,
            'fk_company_role' => $this->fkCompanyRole instanceof AbstractTransfer ? $this->fkCompanyRole->toArray(true, false) : $this->fkCompanyRole,
            'fk_company_user' => $this->fkCompanyUser instanceof AbstractTransfer ? $this->fkCompanyUser->toArray(true, false) : $this->fkCompanyUser,
            'company_role' => $this->companyRole instanceof AbstractTransfer ? $this->companyRole->toArray(true, false) : $this->companyRole,
            'company_user' => $this->companyUser instanceof AbstractTransfer ? $this->companyUser->toArray(true, false) : $this->companyUser,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCompanyRoleToCompanyUser' => $this->idCompanyRoleToCompanyUser instanceof AbstractTransfer ? $this->idCompanyRoleToCompanyUser->toArray(true, true) : $this->idCompanyRoleToCompanyUser,
            'fkCompanyRole' => $this->fkCompanyRole instanceof AbstractTransfer ? $this->fkCompanyRole->toArray(true, true) : $this->fkCompanyRole,
            'fkCompanyUser' => $this->fkCompanyUser instanceof AbstractTransfer ? $this->fkCompanyUser->toArray(true, true) : $this->fkCompanyUser,
            'companyRole' => $this->companyRole instanceof AbstractTransfer ? $this->companyRole->toArray(true, true) : $this->companyRole,
            'companyUser' => $this->companyUser instanceof AbstractTransfer ? $this->companyUser->toArray(true, true) : $this->companyUser,
        ];
    }
}
