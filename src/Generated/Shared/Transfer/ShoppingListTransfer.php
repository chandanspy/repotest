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
class ShoppingListTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ITEMS = 'items';

    /**
     * @var string
     */
    public const ID_SHOPPING_LIST = 'idShoppingList';

    /**
     * @var string
     */
    public const ID_COMPANY_USER = 'idCompanyUser';

    /**
     * @var string
     */
    public const CREATED_AT = 'createdAt';

    /**
     * @var string
     */
    public const NUMBER_OF_ITEMS = 'numberOfItems';

    /**
     * @var string
     */
    public const OWNER = 'owner';

    /**
     * @var string
     */
    public const SHARED_COMPANY_USERS = 'sharedCompanyUsers';

    /**
     * @var string
     */
    public const SHARED_COMPANY_BUSINESS_UNITS = 'sharedCompanyBusinessUnits';

    /**
     * @var string
     */
    public const CUSTOMER_REFERENCE = 'customerReference';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const KEY = 'key';

    /**
     * @var string
     */
    public const DESCRIPTION = 'description';

    /**
     * @var string
     */
    public const UPDATED_AT = 'updatedAt';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const COMPANY_USER_ID = 'companyUserId';

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ShoppingListItemTransfer[]
     */
    protected $items;

    /**
     * @var int|null
     */
    protected $idShoppingList;

    /**
     * @var int|null
     */
    protected $idCompanyUser;

    /**
     * @var string|null
     */
    protected $createdAt;

    /**
     * @var int|null
     */
    protected $numberOfItems;

    /**
     * @var string|null
     */
    protected $owner;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ShoppingListCompanyUserTransfer[]
     */
    protected $sharedCompanyUsers;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ShoppingListCompanyBusinessUnitTransfer[]
     */
    protected $sharedCompanyBusinessUnits;

    /**
     * @var string|null
     */
    protected $customerReference;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var string|null
     */
    protected $updatedAt;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var int|null
     */
    protected $companyUserId;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'items' => 'items',
        'Items' => 'items',
        'id_shopping_list' => 'idShoppingList',
        'idShoppingList' => 'idShoppingList',
        'IdShoppingList' => 'idShoppingList',
        'id_company_user' => 'idCompanyUser',
        'idCompanyUser' => 'idCompanyUser',
        'IdCompanyUser' => 'idCompanyUser',
        'created_at' => 'createdAt',
        'createdAt' => 'createdAt',
        'CreatedAt' => 'createdAt',
        'number_of_items' => 'numberOfItems',
        'numberOfItems' => 'numberOfItems',
        'NumberOfItems' => 'numberOfItems',
        'owner' => 'owner',
        'Owner' => 'owner',
        'shared_company_users' => 'sharedCompanyUsers',
        'sharedCompanyUsers' => 'sharedCompanyUsers',
        'SharedCompanyUsers' => 'sharedCompanyUsers',
        'shared_company_business_units' => 'sharedCompanyBusinessUnits',
        'sharedCompanyBusinessUnits' => 'sharedCompanyBusinessUnits',
        'SharedCompanyBusinessUnits' => 'sharedCompanyBusinessUnits',
        'customer_reference' => 'customerReference',
        'customerReference' => 'customerReference',
        'CustomerReference' => 'customerReference',
        'name' => 'name',
        'Name' => 'name',
        'key' => 'key',
        'Key' => 'key',
        'description' => 'description',
        'Description' => 'description',
        'updated_at' => 'updatedAt',
        'updatedAt' => 'updatedAt',
        'UpdatedAt' => 'updatedAt',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'company_user_id' => 'companyUserId',
        'companyUserId' => 'companyUserId',
        'CompanyUserId' => 'companyUserId',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ITEMS => [
            'type' => 'Generated\Shared\Transfer\ShoppingListItemTransfer',
            'type_shim' => null,
            'name_underscore' => 'items',
            'is_collection' => true,
            'is_transfer' => true,
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
        self::NUMBER_OF_ITEMS => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'number_of_items',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::OWNER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'owner',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SHARED_COMPANY_USERS => [
            'type' => 'Generated\Shared\Transfer\ShoppingListCompanyUserTransfer',
            'type_shim' => null,
            'name_underscore' => 'shared_company_users',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SHARED_COMPANY_BUSINESS_UNITS => [
            'type' => 'Generated\Shared\Transfer\ShoppingListCompanyBusinessUnitTransfer',
            'type_shim' => null,
            'name_underscore' => 'shared_company_business_units',
            'is_collection' => true,
            'is_transfer' => true,
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
        self::KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DESCRIPTION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'description',
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
        self::COMPANY_USER_ID => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'company_user_id',
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
     * @module ProductOptionWidget|ShoppingListPage|ShoppingListWidget|ShoppingList|ShoppingListsRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ShoppingListItemTransfer[] $items
     *
     * @return $this
     */
    public function setItems(ArrayObject $items)
    {
        $this->items = $items;
        $this->modifiedProperties[self::ITEMS] = true;

        return $this;
    }

    /**
     * @module ProductOptionWidget|ShoppingListPage|ShoppingListWidget|ShoppingList|ShoppingListsRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ShoppingListItemTransfer[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @module ProductOptionWidget|ShoppingListPage|ShoppingListWidget|ShoppingList|ShoppingListsRestApi
     *
     * @param \Generated\Shared\Transfer\ShoppingListItemTransfer $item
     *
     * @return $this
     */
    public function addItem(ShoppingListItemTransfer $item)
    {
        $this->items[] = $item;
        $this->modifiedProperties[self::ITEMS] = true;

        return $this;
    }

    /**
     * @module ProductOptionWidget|ShoppingListPage|ShoppingListWidget|ShoppingList|ShoppingListsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireItems()
    {
        $this->assertCollectionPropertyIsSet(self::ITEMS);

        return $this;
    }

    /**
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList|ShoppingListsRestApi
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
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList|ShoppingListsRestApi
     *
     * @return int|null
     */
    public function getIdShoppingList()
    {
        return $this->idShoppingList;
    }

    /**
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList|ShoppingListsRestApi
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
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList|ShoppingListsRestApi
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
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList|ShoppingListsRestApi
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
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList|ShoppingListsRestApi
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
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList|ShoppingListsRestApi
     *
     * @return int|null
     */
    public function getIdCompanyUser()
    {
        return $this->idCompanyUser;
    }

    /**
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList|ShoppingListsRestApi
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
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList|ShoppingListsRestApi
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
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList|ShoppingListsRestApi
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
     * @module ShoppingListPage|ShoppingList
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @module ShoppingListPage|ShoppingList
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
     * @module ShoppingListPage|ShoppingList
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
     * @module ShoppingListPage|ShoppingList
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
     * @module ShoppingListPage|ShoppingList
     *
     * @param int|null $numberOfItems
     *
     * @return $this
     */
    public function setNumberOfItems($numberOfItems)
    {
        $this->numberOfItems = $numberOfItems;
        $this->modifiedProperties[self::NUMBER_OF_ITEMS] = true;

        return $this;
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @return int|null
     */
    public function getNumberOfItems()
    {
        return $this->numberOfItems;
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @param int|null $numberOfItems
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNumberOfItemsOrFail($numberOfItems)
    {
        if ($numberOfItems === null) {
            $this->throwNullValueException(static::NUMBER_OF_ITEMS);
        }

        return $this->setNumberOfItems($numberOfItems);
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getNumberOfItemsOrFail()
    {
        if ($this->numberOfItems === null) {
            $this->throwNullValueException(static::NUMBER_OF_ITEMS);
        }

        return $this->numberOfItems;
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNumberOfItems()
    {
        $this->assertPropertyIsSet(self::NUMBER_OF_ITEMS);

        return $this;
    }

    /**
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList
     *
     * @param string|null $owner
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
        $this->modifiedProperties[self::OWNER] = true;

        return $this;
    }

    /**
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList
     *
     * @return string|null
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList
     *
     * @param string|null $owner
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOwnerOrFail($owner)
    {
        if ($owner === null) {
            $this->throwNullValueException(static::OWNER);
        }

        return $this->setOwner($owner);
    }

    /**
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getOwnerOrFail()
    {
        if ($this->owner === null) {
            $this->throwNullValueException(static::OWNER);
        }

        return $this->owner;
    }

    /**
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOwner()
    {
        $this->assertPropertyIsSet(self::OWNER);

        return $this;
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ShoppingListCompanyUserTransfer[] $sharedCompanyUsers
     *
     * @return $this
     */
    public function setSharedCompanyUsers(ArrayObject $sharedCompanyUsers)
    {
        $this->sharedCompanyUsers = $sharedCompanyUsers;
        $this->modifiedProperties[self::SHARED_COMPANY_USERS] = true;

        return $this;
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ShoppingListCompanyUserTransfer[]
     */
    public function getSharedCompanyUsers()
    {
        return $this->sharedCompanyUsers;
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @param \Generated\Shared\Transfer\ShoppingListCompanyUserTransfer $sharedCompanyUsers
     *
     * @return $this
     */
    public function addSharedCompanyUsers(ShoppingListCompanyUserTransfer $sharedCompanyUsers)
    {
        $this->sharedCompanyUsers[] = $sharedCompanyUsers;
        $this->modifiedProperties[self::SHARED_COMPANY_USERS] = true;

        return $this;
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSharedCompanyUsers()
    {
        $this->assertCollectionPropertyIsSet(self::SHARED_COMPANY_USERS);

        return $this;
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ShoppingListCompanyBusinessUnitTransfer[] $sharedCompanyBusinessUnits
     *
     * @return $this
     */
    public function setSharedCompanyBusinessUnits(ArrayObject $sharedCompanyBusinessUnits)
    {
        $this->sharedCompanyBusinessUnits = $sharedCompanyBusinessUnits;
        $this->modifiedProperties[self::SHARED_COMPANY_BUSINESS_UNITS] = true;

        return $this;
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ShoppingListCompanyBusinessUnitTransfer[]
     */
    public function getSharedCompanyBusinessUnits()
    {
        return $this->sharedCompanyBusinessUnits;
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @param \Generated\Shared\Transfer\ShoppingListCompanyBusinessUnitTransfer $sharedCompanyBusinessUnits
     *
     * @return $this
     */
    public function addSharedCompanyBusinessUnits(ShoppingListCompanyBusinessUnitTransfer $sharedCompanyBusinessUnits)
    {
        $this->sharedCompanyBusinessUnits[] = $sharedCompanyBusinessUnits;
        $this->modifiedProperties[self::SHARED_COMPANY_BUSINESS_UNITS] = true;

        return $this;
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSharedCompanyBusinessUnits()
    {
        $this->assertCollectionPropertyIsSet(self::SHARED_COMPANY_BUSINESS_UNITS);

        return $this;
    }

    /**
     * @module ShoppingListPage|ShoppingListWidget|ShoppingListStorage|ShoppingList|ShoppingListsRestApi
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
     * @module ShoppingListPage|ShoppingListWidget|ShoppingListStorage|ShoppingList|ShoppingListsRestApi
     *
     * @return string|null
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * @module ShoppingListPage|ShoppingListWidget|ShoppingListStorage|ShoppingList|ShoppingListsRestApi
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
     * @module ShoppingListPage|ShoppingListWidget|ShoppingListStorage|ShoppingList|ShoppingListsRestApi
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
     * @module ShoppingListPage|ShoppingListWidget|ShoppingListStorage|ShoppingList|ShoppingListsRestApi
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
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList
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
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList
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
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList
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
     * @module ShoppingListPage|ShoppingListWidget|ShoppingList
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
     * @module ShoppingListDataImport
     *
     * @param string|null $key
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->key = $key;
        $this->modifiedProperties[self::KEY] = true;

        return $this;
    }

    /**
     * @module ShoppingListDataImport
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @module ShoppingListDataImport
     *
     * @param string|null $key
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setKeyOrFail($key)
    {
        if ($key === null) {
            $this->throwNullValueException(static::KEY);
        }

        return $this->setKey($key);
    }

    /**
     * @module ShoppingListDataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getKeyOrFail()
    {
        if ($this->key === null) {
            $this->throwNullValueException(static::KEY);
        }

        return $this->key;
    }

    /**
     * @module ShoppingListDataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireKey()
    {
        $this->assertPropertyIsSet(self::KEY);

        return $this;
    }

    /**
     * @module ShoppingList
     *
     * @param string|null $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        $this->modifiedProperties[self::DESCRIPTION] = true;

        return $this;
    }

    /**
     * @module ShoppingList
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @module ShoppingList
     *
     * @param string|null $description
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDescriptionOrFail($description)
    {
        if ($description === null) {
            $this->throwNullValueException(static::DESCRIPTION);
        }

        return $this->setDescription($description);
    }

    /**
     * @module ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDescriptionOrFail()
    {
        if ($this->description === null) {
            $this->throwNullValueException(static::DESCRIPTION);
        }

        return $this->description;
    }

    /**
     * @module ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDescription()
    {
        $this->assertPropertyIsSet(self::DESCRIPTION);

        return $this;
    }

    /**
     * @module ShoppingList
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
     * @module ShoppingList
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @module ShoppingList
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
     * @module ShoppingList
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
     * @module ShoppingList
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
     * @module ShoppingList|ShoppingListsRestApi
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
     * @module ShoppingList|ShoppingListsRestApi
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @module ShoppingList|ShoppingListsRestApi
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
     * @module ShoppingList|ShoppingListsRestApi
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
     * @module ShoppingList|ShoppingListsRestApi
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
     * @module ShoppingListsRestApi
     *
     * @param int|null $companyUserId
     *
     * @return $this
     */
    public function setCompanyUserId($companyUserId)
    {
        $this->companyUserId = $companyUserId;
        $this->modifiedProperties[self::COMPANY_USER_ID] = true;

        return $this;
    }

    /**
     * @module ShoppingListsRestApi
     *
     * @return int|null
     */
    public function getCompanyUserId()
    {
        return $this->companyUserId;
    }

    /**
     * @module ShoppingListsRestApi
     *
     * @param int|null $companyUserId
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCompanyUserIdOrFail($companyUserId)
    {
        if ($companyUserId === null) {
            $this->throwNullValueException(static::COMPANY_USER_ID);
        }

        return $this->setCompanyUserId($companyUserId);
    }

    /**
     * @module ShoppingListsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getCompanyUserIdOrFail()
    {
        if ($this->companyUserId === null) {
            $this->throwNullValueException(static::COMPANY_USER_ID);
        }

        return $this->companyUserId;
    }

    /**
     * @module ShoppingListsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompanyUserId()
    {
        $this->assertPropertyIsSet(self::COMPANY_USER_ID);

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
                case 'idShoppingList':
                case 'idCompanyUser':
                case 'createdAt':
                case 'numberOfItems':
                case 'owner':
                case 'customerReference':
                case 'name':
                case 'key':
                case 'description':
                case 'updatedAt':
                case 'uuid':
                case 'companyUserId':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'items':
                case 'sharedCompanyUsers':
                case 'sharedCompanyBusinessUnits':
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
                case 'idShoppingList':
                case 'idCompanyUser':
                case 'createdAt':
                case 'numberOfItems':
                case 'owner':
                case 'customerReference':
                case 'name':
                case 'key':
                case 'description':
                case 'updatedAt':
                case 'uuid':
                case 'companyUserId':
                    $values[$arrayKey] = $value;

                    break;
                case 'items':
                case 'sharedCompanyUsers':
                case 'sharedCompanyBusinessUnits':
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
                case 'idShoppingList':
                case 'idCompanyUser':
                case 'createdAt':
                case 'numberOfItems':
                case 'owner':
                case 'customerReference':
                case 'name':
                case 'key':
                case 'description':
                case 'updatedAt':
                case 'uuid':
                case 'companyUserId':
                    $values[$arrayKey] = $value;

                    break;
                case 'items':
                case 'sharedCompanyUsers':
                case 'sharedCompanyBusinessUnits':
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
        $this->items = $this->items ?: new ArrayObject();
        $this->sharedCompanyUsers = $this->sharedCompanyUsers ?: new ArrayObject();
        $this->sharedCompanyBusinessUnits = $this->sharedCompanyBusinessUnits ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idShoppingList' => $this->idShoppingList,
            'idCompanyUser' => $this->idCompanyUser,
            'createdAt' => $this->createdAt,
            'numberOfItems' => $this->numberOfItems,
            'owner' => $this->owner,
            'customerReference' => $this->customerReference,
            'name' => $this->name,
            'key' => $this->key,
            'description' => $this->description,
            'updatedAt' => $this->updatedAt,
            'uuid' => $this->uuid,
            'companyUserId' => $this->companyUserId,
            'items' => $this->items,
            'sharedCompanyUsers' => $this->sharedCompanyUsers,
            'sharedCompanyBusinessUnits' => $this->sharedCompanyBusinessUnits,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_shopping_list' => $this->idShoppingList,
            'id_company_user' => $this->idCompanyUser,
            'created_at' => $this->createdAt,
            'number_of_items' => $this->numberOfItems,
            'owner' => $this->owner,
            'customer_reference' => $this->customerReference,
            'name' => $this->name,
            'key' => $this->key,
            'description' => $this->description,
            'updated_at' => $this->updatedAt,
            'uuid' => $this->uuid,
            'company_user_id' => $this->companyUserId,
            'items' => $this->items,
            'shared_company_users' => $this->sharedCompanyUsers,
            'shared_company_business_units' => $this->sharedCompanyBusinessUnits,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_shopping_list' => $this->idShoppingList instanceof AbstractTransfer ? $this->idShoppingList->toArray(true, false) : $this->idShoppingList,
            'id_company_user' => $this->idCompanyUser instanceof AbstractTransfer ? $this->idCompanyUser->toArray(true, false) : $this->idCompanyUser,
            'created_at' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, false) : $this->createdAt,
            'number_of_items' => $this->numberOfItems instanceof AbstractTransfer ? $this->numberOfItems->toArray(true, false) : $this->numberOfItems,
            'owner' => $this->owner instanceof AbstractTransfer ? $this->owner->toArray(true, false) : $this->owner,
            'customer_reference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, false) : $this->customerReference,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, false) : $this->description,
            'updated_at' => $this->updatedAt instanceof AbstractTransfer ? $this->updatedAt->toArray(true, false) : $this->updatedAt,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'company_user_id' => $this->companyUserId instanceof AbstractTransfer ? $this->companyUserId->toArray(true, false) : $this->companyUserId,
            'items' => $this->items instanceof AbstractTransfer ? $this->items->toArray(true, false) : $this->addValuesToCollection($this->items, true, false),
            'shared_company_users' => $this->sharedCompanyUsers instanceof AbstractTransfer ? $this->sharedCompanyUsers->toArray(true, false) : $this->addValuesToCollection($this->sharedCompanyUsers, true, false),
            'shared_company_business_units' => $this->sharedCompanyBusinessUnits instanceof AbstractTransfer ? $this->sharedCompanyBusinessUnits->toArray(true, false) : $this->addValuesToCollection($this->sharedCompanyBusinessUnits, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idShoppingList' => $this->idShoppingList instanceof AbstractTransfer ? $this->idShoppingList->toArray(true, true) : $this->idShoppingList,
            'idCompanyUser' => $this->idCompanyUser instanceof AbstractTransfer ? $this->idCompanyUser->toArray(true, true) : $this->idCompanyUser,
            'createdAt' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, true) : $this->createdAt,
            'numberOfItems' => $this->numberOfItems instanceof AbstractTransfer ? $this->numberOfItems->toArray(true, true) : $this->numberOfItems,
            'owner' => $this->owner instanceof AbstractTransfer ? $this->owner->toArray(true, true) : $this->owner,
            'customerReference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, true) : $this->customerReference,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, true) : $this->description,
            'updatedAt' => $this->updatedAt instanceof AbstractTransfer ? $this->updatedAt->toArray(true, true) : $this->updatedAt,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'companyUserId' => $this->companyUserId instanceof AbstractTransfer ? $this->companyUserId->toArray(true, true) : $this->companyUserId,
            'items' => $this->items instanceof AbstractTransfer ? $this->items->toArray(true, true) : $this->addValuesToCollection($this->items, true, true),
            'sharedCompanyUsers' => $this->sharedCompanyUsers instanceof AbstractTransfer ? $this->sharedCompanyUsers->toArray(true, true) : $this->addValuesToCollection($this->sharedCompanyUsers, true, true),
            'sharedCompanyBusinessUnits' => $this->sharedCompanyBusinessUnits instanceof AbstractTransfer ? $this->sharedCompanyBusinessUnits->toArray(true, true) : $this->addValuesToCollection($this->sharedCompanyBusinessUnits, true, true),
        ];
    }
}
