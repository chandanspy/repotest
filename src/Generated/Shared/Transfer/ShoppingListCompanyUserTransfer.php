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
class ShoppingListCompanyUserTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_COMPANY_USER = 'idCompanyUser';

    /**
     * @var string
     */
    public const ID_SHOPPING_LIST = 'idShoppingList';

    /**
     * @var string
     */
    public const COMPANY_USER = 'companyUser';

    /**
     * @var string
     */
    public const ID_SHOPPING_LIST_COMPANY_USER = 'idShoppingListCompanyUser';

    /**
     * @var string
     */
    public const ID_SHOPPING_LIST_PERMISSION_GROUP = 'idShoppingListPermissionGroup';

    /**
     * @var int|null
     */
    protected $idCompanyUser;

    /**
     * @var int|null
     */
    protected $idShoppingList;

    /**
     * @var \Generated\Shared\Transfer\CompanyUserTransfer|null
     */
    protected $companyUser;

    /**
     * @var int|null
     */
    protected $idShoppingListCompanyUser;

    /**
     * @var int|null
     */
    protected $idShoppingListPermissionGroup;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_company_user' => 'idCompanyUser',
        'idCompanyUser' => 'idCompanyUser',
        'IdCompanyUser' => 'idCompanyUser',
        'id_shopping_list' => 'idShoppingList',
        'idShoppingList' => 'idShoppingList',
        'IdShoppingList' => 'idShoppingList',
        'company_user' => 'companyUser',
        'companyUser' => 'companyUser',
        'CompanyUser' => 'companyUser',
        'id_shopping_list_company_user' => 'idShoppingListCompanyUser',
        'idShoppingListCompanyUser' => 'idShoppingListCompanyUser',
        'IdShoppingListCompanyUser' => 'idShoppingListCompanyUser',
        'id_shopping_list_permission_group' => 'idShoppingListPermissionGroup',
        'idShoppingListPermissionGroup' => 'idShoppingListPermissionGroup',
        'IdShoppingListPermissionGroup' => 'idShoppingListPermissionGroup',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::ID_SHOPPING_LIST => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_shopping_list',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COMPANY_USER => [
            'type' => 'Generated\Shared\Transfer\CompanyUserTransfer',
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
        self::ID_SHOPPING_LIST_COMPANY_USER => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_shopping_list_company_user',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_SHOPPING_LIST_PERMISSION_GROUP => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_shopping_list_permission_group',
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
     * @module ShoppingListPage|ShoppingList
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
     * @module ShoppingListPage|ShoppingList
     *
     * @return int|null
     */
    public function getIdCompanyUser()
    {
        return $this->idCompanyUser;
    }

    /**
     * @module ShoppingListPage|ShoppingList
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
     * @module ShoppingListPage|ShoppingList
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
     * @module ShoppingListPage|ShoppingList
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
     * @module ShoppingListPage|ShoppingList
     *
     * @param int|null $idShoppingList
     *
     * @return $this
     */
    public function setIdShoppingList($idShoppingList)
    {
        $this->idShoppingList = $idShoppingList;
        $this->modifiedProperties[self::ID_SHOPPING_LIST] = true;

        return $this;
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @return int|null
     */
    public function getIdShoppingList()
    {
        return $this->idShoppingList;
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @param int|null $idShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdShoppingListOrFail($idShoppingList)
    {
        if ($idShoppingList === null) {
            $this->throwNullValueException(static::ID_SHOPPING_LIST);
        }

        return $this->setIdShoppingList($idShoppingList);
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdShoppingListOrFail()
    {
        if ($this->idShoppingList === null) {
            $this->throwNullValueException(static::ID_SHOPPING_LIST);
        }

        return $this->idShoppingList;
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdShoppingList()
    {
        $this->assertPropertyIsSet(self::ID_SHOPPING_LIST);

        return $this;
    }

    /**
     * @module ShoppingListPage
     *
     * @param \Generated\Shared\Transfer\CompanyUserTransfer|null $companyUser
     *
     * @return $this
     */
    public function setCompanyUser(CompanyUserTransfer $companyUser = null)
    {
        $this->companyUser = $companyUser;
        $this->modifiedProperties[self::COMPANY_USER] = true;

        return $this;
    }

    /**
     * @module ShoppingListPage
     *
     * @return \Generated\Shared\Transfer\CompanyUserTransfer|null
     */
    public function getCompanyUser()
    {
        return $this->companyUser;
    }

    /**
     * @module ShoppingListPage
     *
     * @param \Generated\Shared\Transfer\CompanyUserTransfer $companyUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCompanyUserOrFail(CompanyUserTransfer $companyUser)
    {
        return $this->setCompanyUser($companyUser);
    }

    /**
     * @module ShoppingListPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CompanyUserTransfer
     */
    public function getCompanyUserOrFail()
    {
        if ($this->companyUser === null) {
            $this->throwNullValueException(static::COMPANY_USER);
        }

        return $this->companyUser;
    }

    /**
     * @module ShoppingListPage
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
     * @module ShoppingList
     *
     * @param int|null $idShoppingListCompanyUser
     *
     * @return $this
     */
    public function setIdShoppingListCompanyUser($idShoppingListCompanyUser)
    {
        $this->idShoppingListCompanyUser = $idShoppingListCompanyUser;
        $this->modifiedProperties[self::ID_SHOPPING_LIST_COMPANY_USER] = true;

        return $this;
    }

    /**
     * @module ShoppingList
     *
     * @return int|null
     */
    public function getIdShoppingListCompanyUser()
    {
        return $this->idShoppingListCompanyUser;
    }

    /**
     * @module ShoppingList
     *
     * @param int|null $idShoppingListCompanyUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdShoppingListCompanyUserOrFail($idShoppingListCompanyUser)
    {
        if ($idShoppingListCompanyUser === null) {
            $this->throwNullValueException(static::ID_SHOPPING_LIST_COMPANY_USER);
        }

        return $this->setIdShoppingListCompanyUser($idShoppingListCompanyUser);
    }

    /**
     * @module ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdShoppingListCompanyUserOrFail()
    {
        if ($this->idShoppingListCompanyUser === null) {
            $this->throwNullValueException(static::ID_SHOPPING_LIST_COMPANY_USER);
        }

        return $this->idShoppingListCompanyUser;
    }

    /**
     * @module ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdShoppingListCompanyUser()
    {
        $this->assertPropertyIsSet(self::ID_SHOPPING_LIST_COMPANY_USER);

        return $this;
    }

    /**
     * @module ShoppingList
     *
     * @param int|null $idShoppingListPermissionGroup
     *
     * @return $this
     */
    public function setIdShoppingListPermissionGroup($idShoppingListPermissionGroup)
    {
        $this->idShoppingListPermissionGroup = $idShoppingListPermissionGroup;
        $this->modifiedProperties[self::ID_SHOPPING_LIST_PERMISSION_GROUP] = true;

        return $this;
    }

    /**
     * @module ShoppingList
     *
     * @return int|null
     */
    public function getIdShoppingListPermissionGroup()
    {
        return $this->idShoppingListPermissionGroup;
    }

    /**
     * @module ShoppingList
     *
     * @param int|null $idShoppingListPermissionGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdShoppingListPermissionGroupOrFail($idShoppingListPermissionGroup)
    {
        if ($idShoppingListPermissionGroup === null) {
            $this->throwNullValueException(static::ID_SHOPPING_LIST_PERMISSION_GROUP);
        }

        return $this->setIdShoppingListPermissionGroup($idShoppingListPermissionGroup);
    }

    /**
     * @module ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdShoppingListPermissionGroupOrFail()
    {
        if ($this->idShoppingListPermissionGroup === null) {
            $this->throwNullValueException(static::ID_SHOPPING_LIST_PERMISSION_GROUP);
        }

        return $this->idShoppingListPermissionGroup;
    }

    /**
     * @module ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdShoppingListPermissionGroup()
    {
        $this->assertPropertyIsSet(self::ID_SHOPPING_LIST_PERMISSION_GROUP);

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
                case 'idCompanyUser':
                case 'idShoppingList':
                case 'idShoppingListCompanyUser':
                case 'idShoppingListPermissionGroup':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
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
                case 'idCompanyUser':
                case 'idShoppingList':
                case 'idShoppingListCompanyUser':
                case 'idShoppingListPermissionGroup':
                    $values[$arrayKey] = $value;

                    break;
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
                case 'idCompanyUser':
                case 'idShoppingList':
                case 'idShoppingListCompanyUser':
                case 'idShoppingListPermissionGroup':
                    $values[$arrayKey] = $value;

                    break;
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
            'idCompanyUser' => $this->idCompanyUser,
            'idShoppingList' => $this->idShoppingList,
            'idShoppingListCompanyUser' => $this->idShoppingListCompanyUser,
            'idShoppingListPermissionGroup' => $this->idShoppingListPermissionGroup,
            'companyUser' => $this->companyUser,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_company_user' => $this->idCompanyUser,
            'id_shopping_list' => $this->idShoppingList,
            'id_shopping_list_company_user' => $this->idShoppingListCompanyUser,
            'id_shopping_list_permission_group' => $this->idShoppingListPermissionGroup,
            'company_user' => $this->companyUser,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_company_user' => $this->idCompanyUser instanceof AbstractTransfer ? $this->idCompanyUser->toArray(true, false) : $this->idCompanyUser,
            'id_shopping_list' => $this->idShoppingList instanceof AbstractTransfer ? $this->idShoppingList->toArray(true, false) : $this->idShoppingList,
            'id_shopping_list_company_user' => $this->idShoppingListCompanyUser instanceof AbstractTransfer ? $this->idShoppingListCompanyUser->toArray(true, false) : $this->idShoppingListCompanyUser,
            'id_shopping_list_permission_group' => $this->idShoppingListPermissionGroup instanceof AbstractTransfer ? $this->idShoppingListPermissionGroup->toArray(true, false) : $this->idShoppingListPermissionGroup,
            'company_user' => $this->companyUser instanceof AbstractTransfer ? $this->companyUser->toArray(true, false) : $this->companyUser,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCompanyUser' => $this->idCompanyUser instanceof AbstractTransfer ? $this->idCompanyUser->toArray(true, true) : $this->idCompanyUser,
            'idShoppingList' => $this->idShoppingList instanceof AbstractTransfer ? $this->idShoppingList->toArray(true, true) : $this->idShoppingList,
            'idShoppingListCompanyUser' => $this->idShoppingListCompanyUser instanceof AbstractTransfer ? $this->idShoppingListCompanyUser->toArray(true, true) : $this->idShoppingListCompanyUser,
            'idShoppingListPermissionGroup' => $this->idShoppingListPermissionGroup instanceof AbstractTransfer ? $this->idShoppingListPermissionGroup->toArray(true, true) : $this->idShoppingListPermissionGroup,
            'companyUser' => $this->companyUser instanceof AbstractTransfer ? $this->companyUser->toArray(true, true) : $this->companyUser,
        ];
    }
}
