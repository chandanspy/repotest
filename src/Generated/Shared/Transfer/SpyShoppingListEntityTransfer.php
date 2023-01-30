<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyShoppingListEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_SHOPPING_LIST = 'idShoppingList';

    /**
     * @var string
     */
    public const CUSTOMER_REFERENCE = 'customerReference';

    /**
     * @var string
     */
    public const DESCRIPTION = 'description';

    /**
     * @var string
     */
    public const KEY = 'key';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const SPY_SHOPPING_LIST_ITEMS = 'spyShoppingListItems';

    /**
     * @var string
     */
    public const SPY_SHOPPING_LIST_COMPANY_USERS = 'spyShoppingListCompanyUsers';

    /**
     * @var string
     */
    public const SPY_SHOPPING_LIST_COMPANY_BUSINESS_UNITS = 'spyShoppingListCompanyBusinessUnits';

    /**
     * @var integer|null
     */
    protected $idShoppingList;

    /**
     * @var string|null
     */
    protected $customerReference;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyShoppingListItemEntityTransfer[]
     */
    protected $spyShoppingListItems;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyShoppingListCompanyUserEntityTransfer[]
     */
    protected $spyShoppingListCompanyUsers;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyShoppingListCompanyBusinessUnitEntityTransfer[]
     */
    protected $spyShoppingListCompanyBusinessUnits;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_shopping_list' => 'idShoppingList',
        'idShoppingList' => 'idShoppingList',
        'IdShoppingList' => 'idShoppingList',
        'customer_reference' => 'customerReference',
        'customerReference' => 'customerReference',
        'CustomerReference' => 'customerReference',
        'description' => 'description',
        'Description' => 'description',
        'key' => 'key',
        'Key' => 'key',
        'name' => 'name',
        'Name' => 'name',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'spy_shopping_list_items' => 'spyShoppingListItems',
        'spyShoppingListItems' => 'spyShoppingListItems',
        'SpyShoppingListItems' => 'spyShoppingListItems',
        'spy_shopping_list_company_users' => 'spyShoppingListCompanyUsers',
        'spyShoppingListCompanyUsers' => 'spyShoppingListCompanyUsers',
        'SpyShoppingListCompanyUsers' => 'spyShoppingListCompanyUsers',
        'spy_shopping_list_company_business_units' => 'spyShoppingListCompanyBusinessUnits',
        'spyShoppingListCompanyBusinessUnits' => 'spyShoppingListCompanyBusinessUnits',
        'SpyShoppingListCompanyBusinessUnits' => 'spyShoppingListCompanyBusinessUnits',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SHOPPING_LIST => [
            'type' => 'integer',
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
        self::SPY_SHOPPING_LIST_ITEMS => [
            'type' => 'Generated\Shared\Transfer\SpyShoppingListItemEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_shopping_list_items',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SHOPPING_LIST_COMPANY_USERS => [
            'type' => 'Generated\Shared\Transfer\SpyShoppingListCompanyUserEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_shopping_list_company_users',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SHOPPING_LIST_COMPANY_BUSINESS_UNITS => [
            'type' => 'Generated\Shared\Transfer\SpyShoppingListCompanyBusinessUnitEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_shopping_list_company_business_units',
            'is_collection' => true,
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
    public static $entityNamespace = 'Orm\Zed\ShoppingList\Persistence\SpyShoppingList';


    /**
     * @module 
     *
     * @param integer|null $idShoppingList
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdShoppingList()
    {
        return $this->idShoppingList;
    }

    /**
     * @module 
     *
     * @param integer|null $idShoppingList
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdShoppingListOrFail()
    {
        if ($this->idShoppingList === null) {
            $this->throwNullValueException(static::ID_SHOPPING_LIST);
        }

        return $this->idShoppingList;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyShoppingListItemEntityTransfer[] $spyShoppingListItems
     *
     * @return $this
     */
    public function setSpyShoppingListItems(ArrayObject $spyShoppingListItems)
    {
        $this->spyShoppingListItems = $spyShoppingListItems;
        $this->modifiedProperties[self::SPY_SHOPPING_LIST_ITEMS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyShoppingListItemEntityTransfer[]
     */
    public function getSpyShoppingListItems()
    {
        return $this->spyShoppingListItems;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyShoppingListItemEntityTransfer $spyShoppingListItems
     *
     * @return $this
     */
    public function addSpyShoppingListItems(SpyShoppingListItemEntityTransfer $spyShoppingListItems)
    {
        $this->spyShoppingListItems[] = $spyShoppingListItems;
        $this->modifiedProperties[self::SPY_SHOPPING_LIST_ITEMS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyShoppingListItems()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SHOPPING_LIST_ITEMS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyShoppingListCompanyUserEntityTransfer[] $spyShoppingListCompanyUsers
     *
     * @return $this
     */
    public function setSpyShoppingListCompanyUsers(ArrayObject $spyShoppingListCompanyUsers)
    {
        $this->spyShoppingListCompanyUsers = $spyShoppingListCompanyUsers;
        $this->modifiedProperties[self::SPY_SHOPPING_LIST_COMPANY_USERS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyShoppingListCompanyUserEntityTransfer[]
     */
    public function getSpyShoppingListCompanyUsers()
    {
        return $this->spyShoppingListCompanyUsers;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyShoppingListCompanyUserEntityTransfer $spyShoppingListCompanyUsers
     *
     * @return $this
     */
    public function addSpyShoppingListCompanyUsers(SpyShoppingListCompanyUserEntityTransfer $spyShoppingListCompanyUsers)
    {
        $this->spyShoppingListCompanyUsers[] = $spyShoppingListCompanyUsers;
        $this->modifiedProperties[self::SPY_SHOPPING_LIST_COMPANY_USERS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyShoppingListCompanyUsers()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SHOPPING_LIST_COMPANY_USERS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyShoppingListCompanyBusinessUnitEntityTransfer[] $spyShoppingListCompanyBusinessUnits
     *
     * @return $this
     */
    public function setSpyShoppingListCompanyBusinessUnits(ArrayObject $spyShoppingListCompanyBusinessUnits)
    {
        $this->spyShoppingListCompanyBusinessUnits = $spyShoppingListCompanyBusinessUnits;
        $this->modifiedProperties[self::SPY_SHOPPING_LIST_COMPANY_BUSINESS_UNITS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyShoppingListCompanyBusinessUnitEntityTransfer[]
     */
    public function getSpyShoppingListCompanyBusinessUnits()
    {
        return $this->spyShoppingListCompanyBusinessUnits;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyShoppingListCompanyBusinessUnitEntityTransfer $spyShoppingListCompanyBusinessUnits
     *
     * @return $this
     */
    public function addSpyShoppingListCompanyBusinessUnits(SpyShoppingListCompanyBusinessUnitEntityTransfer $spyShoppingListCompanyBusinessUnits)
    {
        $this->spyShoppingListCompanyBusinessUnits[] = $spyShoppingListCompanyBusinessUnits;
        $this->modifiedProperties[self::SPY_SHOPPING_LIST_COMPANY_BUSINESS_UNITS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyShoppingListCompanyBusinessUnits()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SHOPPING_LIST_COMPANY_BUSINESS_UNITS);

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
                case 'customerReference':
                case 'description':
                case 'key':
                case 'name':
                case 'uuid':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyShoppingListItems':
                case 'spyShoppingListCompanyUsers':
                case 'spyShoppingListCompanyBusinessUnits':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
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
                case 'idShoppingList':
                case 'customerReference':
                case 'description':
                case 'key':
                case 'name':
                case 'uuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyShoppingListItems':
                case 'spyShoppingListCompanyUsers':
                case 'spyShoppingListCompanyBusinessUnits':
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
                case 'customerReference':
                case 'description':
                case 'key':
                case 'name':
                case 'uuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyShoppingListItems':
                case 'spyShoppingListCompanyUsers':
                case 'spyShoppingListCompanyBusinessUnits':
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
        $this->spyShoppingListItems = $this->spyShoppingListItems ?: new ArrayObject();
        $this->spyShoppingListCompanyUsers = $this->spyShoppingListCompanyUsers ?: new ArrayObject();
        $this->spyShoppingListCompanyBusinessUnits = $this->spyShoppingListCompanyBusinessUnits ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idShoppingList' => $this->idShoppingList,
            'customerReference' => $this->customerReference,
            'description' => $this->description,
            'key' => $this->key,
            'name' => $this->name,
            'uuid' => $this->uuid,
            'spyShoppingListItems' => $this->spyShoppingListItems,
            'spyShoppingListCompanyUsers' => $this->spyShoppingListCompanyUsers,
            'spyShoppingListCompanyBusinessUnits' => $this->spyShoppingListCompanyBusinessUnits,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_shopping_list' => $this->idShoppingList,
            'customer_reference' => $this->customerReference,
            'description' => $this->description,
            'key' => $this->key,
            'name' => $this->name,
            'uuid' => $this->uuid,
            'spy_shopping_list_items' => $this->spyShoppingListItems,
            'spy_shopping_list_company_users' => $this->spyShoppingListCompanyUsers,
            'spy_shopping_list_company_business_units' => $this->spyShoppingListCompanyBusinessUnits,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_shopping_list' => $this->idShoppingList instanceof AbstractTransfer ? $this->idShoppingList->toArray(true, false) : $this->idShoppingList,
            'customer_reference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, false) : $this->customerReference,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, false) : $this->description,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'spy_shopping_list_items' => $this->spyShoppingListItems instanceof AbstractTransfer ? $this->spyShoppingListItems->toArray(true, false) : $this->addValuesToCollection($this->spyShoppingListItems, true, false),
            'spy_shopping_list_company_users' => $this->spyShoppingListCompanyUsers instanceof AbstractTransfer ? $this->spyShoppingListCompanyUsers->toArray(true, false) : $this->addValuesToCollection($this->spyShoppingListCompanyUsers, true, false),
            'spy_shopping_list_company_business_units' => $this->spyShoppingListCompanyBusinessUnits instanceof AbstractTransfer ? $this->spyShoppingListCompanyBusinessUnits->toArray(true, false) : $this->addValuesToCollection($this->spyShoppingListCompanyBusinessUnits, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idShoppingList' => $this->idShoppingList instanceof AbstractTransfer ? $this->idShoppingList->toArray(true, true) : $this->idShoppingList,
            'customerReference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, true) : $this->customerReference,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, true) : $this->description,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'spyShoppingListItems' => $this->spyShoppingListItems instanceof AbstractTransfer ? $this->spyShoppingListItems->toArray(true, true) : $this->addValuesToCollection($this->spyShoppingListItems, true, true),
            'spyShoppingListCompanyUsers' => $this->spyShoppingListCompanyUsers instanceof AbstractTransfer ? $this->spyShoppingListCompanyUsers->toArray(true, true) : $this->addValuesToCollection($this->spyShoppingListCompanyUsers, true, true),
            'spyShoppingListCompanyBusinessUnits' => $this->spyShoppingListCompanyBusinessUnits instanceof AbstractTransfer ? $this->spyShoppingListCompanyBusinessUnits->toArray(true, true) : $this->addValuesToCollection($this->spyShoppingListCompanyBusinessUnits, true, true),
        ];
    }
}
