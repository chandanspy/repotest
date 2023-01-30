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
class SpyShoppingListCompanyUserEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_SHOPPING_LIST_COMPANY_USER = 'idShoppingListCompanyUser';

    /**
     * @var string
     */
    public const FK_COMPANY_USER = 'fkCompanyUser';

    /**
     * @var string
     */
    public const FK_SHOPPING_LIST = 'fkShoppingList';

    /**
     * @var string
     */
    public const FK_SHOPPING_LIST_PERMISSION_GROUP = 'fkShoppingListPermissionGroup';

    /**
     * @var string
     */
    public const SPY_COMPANY_USER = 'spyCompanyUser';

    /**
     * @var string
     */
    public const SPY_SHOPPING_LIST = 'spyShoppingList';

    /**
     * @var string
     */
    public const SPY_SHOPPING_LIST_PERMISSION_GROUP = 'spyShoppingListPermissionGroup';

    /**
     * @var integer|null
     */
    protected $idShoppingListCompanyUser;

    /**
     * @var integer|null
     */
    protected $fkCompanyUser;

    /**
     * @var integer|null
     */
    protected $fkShoppingList;

    /**
     * @var integer|null
     */
    protected $fkShoppingListPermissionGroup;

    /**
     * @var \Generated\Shared\Transfer\SpyCompanyUserEntityTransfer|null
     */
    protected $spyCompanyUser;

    /**
     * @var \Generated\Shared\Transfer\SpyShoppingListEntityTransfer|null
     */
    protected $spyShoppingList;

    /**
     * @var \Generated\Shared\Transfer\SpyShoppingListPermissionGroupEntityTransfer|null
     */
    protected $spyShoppingListPermissionGroup;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_shopping_list_company_user' => 'idShoppingListCompanyUser',
        'idShoppingListCompanyUser' => 'idShoppingListCompanyUser',
        'IdShoppingListCompanyUser' => 'idShoppingListCompanyUser',
        'fk_company_user' => 'fkCompanyUser',
        'fkCompanyUser' => 'fkCompanyUser',
        'FkCompanyUser' => 'fkCompanyUser',
        'fk_shopping_list' => 'fkShoppingList',
        'fkShoppingList' => 'fkShoppingList',
        'FkShoppingList' => 'fkShoppingList',
        'fk_shopping_list_permission_group' => 'fkShoppingListPermissionGroup',
        'fkShoppingListPermissionGroup' => 'fkShoppingListPermissionGroup',
        'FkShoppingListPermissionGroup' => 'fkShoppingListPermissionGroup',
        'spy_company_user' => 'spyCompanyUser',
        'spyCompanyUser' => 'spyCompanyUser',
        'SpyCompanyUser' => 'spyCompanyUser',
        'spy_shopping_list' => 'spyShoppingList',
        'spyShoppingList' => 'spyShoppingList',
        'SpyShoppingList' => 'spyShoppingList',
        'spy_shopping_list_permission_group' => 'spyShoppingListPermissionGroup',
        'spyShoppingListPermissionGroup' => 'spyShoppingListPermissionGroup',
        'SpyShoppingListPermissionGroup' => 'spyShoppingListPermissionGroup',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SHOPPING_LIST_COMPANY_USER => [
            'type' => 'integer',
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
        self::FK_SHOPPING_LIST => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_shopping_list',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_SHOPPING_LIST_PERMISSION_GROUP => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_shopping_list_permission_group',
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
        self::SPY_SHOPPING_LIST => [
            'type' => 'Generated\Shared\Transfer\SpyShoppingListEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_shopping_list',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SHOPPING_LIST_PERMISSION_GROUP => [
            'type' => 'Generated\Shared\Transfer\SpyShoppingListPermissionGroupEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_shopping_list_permission_group',
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
    public static $entityNamespace = 'Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyUser';


    /**
     * @module 
     *
     * @param integer|null $idShoppingListCompanyUser
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdShoppingListCompanyUser()
    {
        return $this->idShoppingListCompanyUser;
    }

    /**
     * @module 
     *
     * @param integer|null $idShoppingListCompanyUser
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdShoppingListCompanyUserOrFail()
    {
        if ($this->idShoppingListCompanyUser === null) {
            $this->throwNullValueException(static::ID_SHOPPING_LIST_COMPANY_USER);
        }

        return $this->idShoppingListCompanyUser;
    }

    /**
     * @module 
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
     * @param integer|null $fkShoppingList
     *
     * @return $this
     */
    public function setFkShoppingList($fkShoppingList)
    {
        $this->fkShoppingList = $fkShoppingList;
        $this->modifiedProperties[self::FK_SHOPPING_LIST] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkShoppingList()
    {
        return $this->fkShoppingList;
    }

    /**
     * @module 
     *
     * @param integer|null $fkShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkShoppingListOrFail($fkShoppingList)
    {
        if ($fkShoppingList === null) {
            $this->throwNullValueException(static::FK_SHOPPING_LIST);
        }

        return $this->setFkShoppingList($fkShoppingList);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkShoppingListOrFail()
    {
        if ($this->fkShoppingList === null) {
            $this->throwNullValueException(static::FK_SHOPPING_LIST);
        }

        return $this->fkShoppingList;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkShoppingList()
    {
        $this->assertPropertyIsSet(self::FK_SHOPPING_LIST);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkShoppingListPermissionGroup
     *
     * @return $this
     */
    public function setFkShoppingListPermissionGroup($fkShoppingListPermissionGroup)
    {
        $this->fkShoppingListPermissionGroup = $fkShoppingListPermissionGroup;
        $this->modifiedProperties[self::FK_SHOPPING_LIST_PERMISSION_GROUP] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkShoppingListPermissionGroup()
    {
        return $this->fkShoppingListPermissionGroup;
    }

    /**
     * @module 
     *
     * @param integer|null $fkShoppingListPermissionGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkShoppingListPermissionGroupOrFail($fkShoppingListPermissionGroup)
    {
        if ($fkShoppingListPermissionGroup === null) {
            $this->throwNullValueException(static::FK_SHOPPING_LIST_PERMISSION_GROUP);
        }

        return $this->setFkShoppingListPermissionGroup($fkShoppingListPermissionGroup);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkShoppingListPermissionGroupOrFail()
    {
        if ($this->fkShoppingListPermissionGroup === null) {
            $this->throwNullValueException(static::FK_SHOPPING_LIST_PERMISSION_GROUP);
        }

        return $this->fkShoppingListPermissionGroup;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkShoppingListPermissionGroup()
    {
        $this->assertPropertyIsSet(self::FK_SHOPPING_LIST_PERMISSION_GROUP);

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
     * @param \Generated\Shared\Transfer\SpyShoppingListEntityTransfer|null $spyShoppingList
     *
     * @return $this
     */
    public function setSpyShoppingList(SpyShoppingListEntityTransfer $spyShoppingList = null)
    {
        $this->spyShoppingList = $spyShoppingList;
        $this->modifiedProperties[self::SPY_SHOPPING_LIST] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyShoppingListEntityTransfer|null
     */
    public function getSpyShoppingList()
    {
        return $this->spyShoppingList;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyShoppingListEntityTransfer $spyShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyShoppingListOrFail(SpyShoppingListEntityTransfer $spyShoppingList)
    {
        return $this->setSpyShoppingList($spyShoppingList);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyShoppingListEntityTransfer
     */
    public function getSpyShoppingListOrFail()
    {
        if ($this->spyShoppingList === null) {
            $this->throwNullValueException(static::SPY_SHOPPING_LIST);
        }

        return $this->spyShoppingList;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyShoppingList()
    {
        $this->assertPropertyIsSet(self::SPY_SHOPPING_LIST);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyShoppingListPermissionGroupEntityTransfer|null $spyShoppingListPermissionGroup
     *
     * @return $this
     */
    public function setSpyShoppingListPermissionGroup(SpyShoppingListPermissionGroupEntityTransfer $spyShoppingListPermissionGroup = null)
    {
        $this->spyShoppingListPermissionGroup = $spyShoppingListPermissionGroup;
        $this->modifiedProperties[self::SPY_SHOPPING_LIST_PERMISSION_GROUP] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyShoppingListPermissionGroupEntityTransfer|null
     */
    public function getSpyShoppingListPermissionGroup()
    {
        return $this->spyShoppingListPermissionGroup;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyShoppingListPermissionGroupEntityTransfer $spyShoppingListPermissionGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyShoppingListPermissionGroupOrFail(SpyShoppingListPermissionGroupEntityTransfer $spyShoppingListPermissionGroup)
    {
        return $this->setSpyShoppingListPermissionGroup($spyShoppingListPermissionGroup);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyShoppingListPermissionGroupEntityTransfer
     */
    public function getSpyShoppingListPermissionGroupOrFail()
    {
        if ($this->spyShoppingListPermissionGroup === null) {
            $this->throwNullValueException(static::SPY_SHOPPING_LIST_PERMISSION_GROUP);
        }

        return $this->spyShoppingListPermissionGroup;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyShoppingListPermissionGroup()
    {
        $this->assertPropertyIsSet(self::SPY_SHOPPING_LIST_PERMISSION_GROUP);

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
                case 'idShoppingListCompanyUser':
                case 'fkCompanyUser':
                case 'fkShoppingList':
                case 'fkShoppingListPermissionGroup':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyCompanyUser':
                case 'spyShoppingList':
                case 'spyShoppingListPermissionGroup':
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
                case 'idShoppingListCompanyUser':
                case 'fkCompanyUser':
                case 'fkShoppingList':
                case 'fkShoppingListPermissionGroup':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyCompanyUser':
                case 'spyShoppingList':
                case 'spyShoppingListPermissionGroup':
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
                case 'idShoppingListCompanyUser':
                case 'fkCompanyUser':
                case 'fkShoppingList':
                case 'fkShoppingListPermissionGroup':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyCompanyUser':
                case 'spyShoppingList':
                case 'spyShoppingListPermissionGroup':
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
            'idShoppingListCompanyUser' => $this->idShoppingListCompanyUser,
            'fkCompanyUser' => $this->fkCompanyUser,
            'fkShoppingList' => $this->fkShoppingList,
            'fkShoppingListPermissionGroup' => $this->fkShoppingListPermissionGroup,
            'spyCompanyUser' => $this->spyCompanyUser,
            'spyShoppingList' => $this->spyShoppingList,
            'spyShoppingListPermissionGroup' => $this->spyShoppingListPermissionGroup,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_shopping_list_company_user' => $this->idShoppingListCompanyUser,
            'fk_company_user' => $this->fkCompanyUser,
            'fk_shopping_list' => $this->fkShoppingList,
            'fk_shopping_list_permission_group' => $this->fkShoppingListPermissionGroup,
            'spy_company_user' => $this->spyCompanyUser,
            'spy_shopping_list' => $this->spyShoppingList,
            'spy_shopping_list_permission_group' => $this->spyShoppingListPermissionGroup,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_shopping_list_company_user' => $this->idShoppingListCompanyUser instanceof AbstractTransfer ? $this->idShoppingListCompanyUser->toArray(true, false) : $this->idShoppingListCompanyUser,
            'fk_company_user' => $this->fkCompanyUser instanceof AbstractTransfer ? $this->fkCompanyUser->toArray(true, false) : $this->fkCompanyUser,
            'fk_shopping_list' => $this->fkShoppingList instanceof AbstractTransfer ? $this->fkShoppingList->toArray(true, false) : $this->fkShoppingList,
            'fk_shopping_list_permission_group' => $this->fkShoppingListPermissionGroup instanceof AbstractTransfer ? $this->fkShoppingListPermissionGroup->toArray(true, false) : $this->fkShoppingListPermissionGroup,
            'spy_company_user' => $this->spyCompanyUser instanceof AbstractTransfer ? $this->spyCompanyUser->toArray(true, false) : $this->spyCompanyUser,
            'spy_shopping_list' => $this->spyShoppingList instanceof AbstractTransfer ? $this->spyShoppingList->toArray(true, false) : $this->spyShoppingList,
            'spy_shopping_list_permission_group' => $this->spyShoppingListPermissionGroup instanceof AbstractTransfer ? $this->spyShoppingListPermissionGroup->toArray(true, false) : $this->spyShoppingListPermissionGroup,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idShoppingListCompanyUser' => $this->idShoppingListCompanyUser instanceof AbstractTransfer ? $this->idShoppingListCompanyUser->toArray(true, true) : $this->idShoppingListCompanyUser,
            'fkCompanyUser' => $this->fkCompanyUser instanceof AbstractTransfer ? $this->fkCompanyUser->toArray(true, true) : $this->fkCompanyUser,
            'fkShoppingList' => $this->fkShoppingList instanceof AbstractTransfer ? $this->fkShoppingList->toArray(true, true) : $this->fkShoppingList,
            'fkShoppingListPermissionGroup' => $this->fkShoppingListPermissionGroup instanceof AbstractTransfer ? $this->fkShoppingListPermissionGroup->toArray(true, true) : $this->fkShoppingListPermissionGroup,
            'spyCompanyUser' => $this->spyCompanyUser instanceof AbstractTransfer ? $this->spyCompanyUser->toArray(true, true) : $this->spyCompanyUser,
            'spyShoppingList' => $this->spyShoppingList instanceof AbstractTransfer ? $this->spyShoppingList->toArray(true, true) : $this->spyShoppingList,
            'spyShoppingListPermissionGroup' => $this->spyShoppingListPermissionGroup instanceof AbstractTransfer ? $this->spyShoppingListPermissionGroup->toArray(true, true) : $this->spyShoppingListPermissionGroup,
        ];
    }
}
