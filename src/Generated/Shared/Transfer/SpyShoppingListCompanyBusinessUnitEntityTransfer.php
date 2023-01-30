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
class SpyShoppingListCompanyBusinessUnitEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_SHOPPING_LIST_COMPANY_BUSINESS_UNIT = 'idShoppingListCompanyBusinessUnit';

    /**
     * @var string
     */
    public const FK_COMPANY_BUSINESS_UNIT = 'fkCompanyBusinessUnit';

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
    public const SPY_COMPANY_BUSINESS_UNIT = 'spyCompanyBusinessUnit';

    /**
     * @var string
     */
    public const SPY_SHOPPING_LIST = 'spyShoppingList';

    /**
     * @var string
     */
    public const SPY_SHOPPING_LIST_PERMISSION_GROUP = 'spyShoppingListPermissionGroup';

    /**
     * @var string
     */
    public const SPY_SHOPPING_LIST_COMPANY_BUSINESS_UNIT_BLACKLISTS = 'spyShoppingListCompanyBusinessUnitBlacklists';

    /**
     * @var integer|null
     */
    protected $idShoppingListCompanyBusinessUnit;

    /**
     * @var integer|null
     */
    protected $fkCompanyBusinessUnit;

    /**
     * @var integer|null
     */
    protected $fkShoppingList;

    /**
     * @var integer|null
     */
    protected $fkShoppingListPermissionGroup;

    /**
     * @var \Generated\Shared\Transfer\SpyCompanyBusinessUnitEntityTransfer|null
     */
    protected $spyCompanyBusinessUnit;

    /**
     * @var \Generated\Shared\Transfer\SpyShoppingListEntityTransfer|null
     */
    protected $spyShoppingList;

    /**
     * @var \Generated\Shared\Transfer\SpyShoppingListPermissionGroupEntityTransfer|null
     */
    protected $spyShoppingListPermissionGroup;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyShoppingListCompanyBusinessUnitBlacklistEntityTransfer[]
     */
    protected $spyShoppingListCompanyBusinessUnitBlacklists;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_shopping_list_company_business_unit' => 'idShoppingListCompanyBusinessUnit',
        'idShoppingListCompanyBusinessUnit' => 'idShoppingListCompanyBusinessUnit',
        'IdShoppingListCompanyBusinessUnit' => 'idShoppingListCompanyBusinessUnit',
        'fk_company_business_unit' => 'fkCompanyBusinessUnit',
        'fkCompanyBusinessUnit' => 'fkCompanyBusinessUnit',
        'FkCompanyBusinessUnit' => 'fkCompanyBusinessUnit',
        'fk_shopping_list' => 'fkShoppingList',
        'fkShoppingList' => 'fkShoppingList',
        'FkShoppingList' => 'fkShoppingList',
        'fk_shopping_list_permission_group' => 'fkShoppingListPermissionGroup',
        'fkShoppingListPermissionGroup' => 'fkShoppingListPermissionGroup',
        'FkShoppingListPermissionGroup' => 'fkShoppingListPermissionGroup',
        'spy_company_business_unit' => 'spyCompanyBusinessUnit',
        'spyCompanyBusinessUnit' => 'spyCompanyBusinessUnit',
        'SpyCompanyBusinessUnit' => 'spyCompanyBusinessUnit',
        'spy_shopping_list' => 'spyShoppingList',
        'spyShoppingList' => 'spyShoppingList',
        'SpyShoppingList' => 'spyShoppingList',
        'spy_shopping_list_permission_group' => 'spyShoppingListPermissionGroup',
        'spyShoppingListPermissionGroup' => 'spyShoppingListPermissionGroup',
        'SpyShoppingListPermissionGroup' => 'spyShoppingListPermissionGroup',
        'spy_shopping_list_company_business_unit_blacklists' => 'spyShoppingListCompanyBusinessUnitBlacklists',
        'spyShoppingListCompanyBusinessUnitBlacklists' => 'spyShoppingListCompanyBusinessUnitBlacklists',
        'SpyShoppingListCompanyBusinessUnitBlacklists' => 'spyShoppingListCompanyBusinessUnitBlacklists',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SHOPPING_LIST_COMPANY_BUSINESS_UNIT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_shopping_list_company_business_unit',
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
        self::SPY_SHOPPING_LIST_COMPANY_BUSINESS_UNIT_BLACKLISTS => [
            'type' => 'Generated\Shared\Transfer\SpyShoppingListCompanyBusinessUnitBlacklistEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_shopping_list_company_business_unit_blacklists',
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
    public static $entityNamespace = 'Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnit';


    /**
     * @module 
     *
     * @param integer|null $idShoppingListCompanyBusinessUnit
     *
     * @return $this
     */
    public function setIdShoppingListCompanyBusinessUnit($idShoppingListCompanyBusinessUnit)
    {
        $this->idShoppingListCompanyBusinessUnit = $idShoppingListCompanyBusinessUnit;
        $this->modifiedProperties[self::ID_SHOPPING_LIST_COMPANY_BUSINESS_UNIT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdShoppingListCompanyBusinessUnit()
    {
        return $this->idShoppingListCompanyBusinessUnit;
    }

    /**
     * @module 
     *
     * @param integer|null $idShoppingListCompanyBusinessUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdShoppingListCompanyBusinessUnitOrFail($idShoppingListCompanyBusinessUnit)
    {
        if ($idShoppingListCompanyBusinessUnit === null) {
            $this->throwNullValueException(static::ID_SHOPPING_LIST_COMPANY_BUSINESS_UNIT);
        }

        return $this->setIdShoppingListCompanyBusinessUnit($idShoppingListCompanyBusinessUnit);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdShoppingListCompanyBusinessUnitOrFail()
    {
        if ($this->idShoppingListCompanyBusinessUnit === null) {
            $this->throwNullValueException(static::ID_SHOPPING_LIST_COMPANY_BUSINESS_UNIT);
        }

        return $this->idShoppingListCompanyBusinessUnit;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdShoppingListCompanyBusinessUnit()
    {
        $this->assertPropertyIsSet(self::ID_SHOPPING_LIST_COMPANY_BUSINESS_UNIT);

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
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyShoppingListCompanyBusinessUnitBlacklistEntityTransfer[] $spyShoppingListCompanyBusinessUnitBlacklists
     *
     * @return $this
     */
    public function setSpyShoppingListCompanyBusinessUnitBlacklists(ArrayObject $spyShoppingListCompanyBusinessUnitBlacklists)
    {
        $this->spyShoppingListCompanyBusinessUnitBlacklists = $spyShoppingListCompanyBusinessUnitBlacklists;
        $this->modifiedProperties[self::SPY_SHOPPING_LIST_COMPANY_BUSINESS_UNIT_BLACKLISTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyShoppingListCompanyBusinessUnitBlacklistEntityTransfer[]
     */
    public function getSpyShoppingListCompanyBusinessUnitBlacklists()
    {
        return $this->spyShoppingListCompanyBusinessUnitBlacklists;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyShoppingListCompanyBusinessUnitBlacklistEntityTransfer $spyShoppingListCompanyBusinessUnitBlacklists
     *
     * @return $this
     */
    public function addSpyShoppingListCompanyBusinessUnitBlacklists(SpyShoppingListCompanyBusinessUnitBlacklistEntityTransfer $spyShoppingListCompanyBusinessUnitBlacklists)
    {
        $this->spyShoppingListCompanyBusinessUnitBlacklists[] = $spyShoppingListCompanyBusinessUnitBlacklists;
        $this->modifiedProperties[self::SPY_SHOPPING_LIST_COMPANY_BUSINESS_UNIT_BLACKLISTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyShoppingListCompanyBusinessUnitBlacklists()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SHOPPING_LIST_COMPANY_BUSINESS_UNIT_BLACKLISTS);

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
                case 'idShoppingListCompanyBusinessUnit':
                case 'fkCompanyBusinessUnit':
                case 'fkShoppingList':
                case 'fkShoppingListPermissionGroup':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyCompanyBusinessUnit':
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
                case 'spyShoppingListCompanyBusinessUnitBlacklists':
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
                case 'idShoppingListCompanyBusinessUnit':
                case 'fkCompanyBusinessUnit':
                case 'fkShoppingList':
                case 'fkShoppingListPermissionGroup':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyCompanyBusinessUnit':
                case 'spyShoppingList':
                case 'spyShoppingListPermissionGroup':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyShoppingListCompanyBusinessUnitBlacklists':
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
                case 'idShoppingListCompanyBusinessUnit':
                case 'fkCompanyBusinessUnit':
                case 'fkShoppingList':
                case 'fkShoppingListPermissionGroup':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyCompanyBusinessUnit':
                case 'spyShoppingList':
                case 'spyShoppingListPermissionGroup':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyShoppingListCompanyBusinessUnitBlacklists':
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
        $this->spyShoppingListCompanyBusinessUnitBlacklists = $this->spyShoppingListCompanyBusinessUnitBlacklists ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idShoppingListCompanyBusinessUnit' => $this->idShoppingListCompanyBusinessUnit,
            'fkCompanyBusinessUnit' => $this->fkCompanyBusinessUnit,
            'fkShoppingList' => $this->fkShoppingList,
            'fkShoppingListPermissionGroup' => $this->fkShoppingListPermissionGroup,
            'spyCompanyBusinessUnit' => $this->spyCompanyBusinessUnit,
            'spyShoppingList' => $this->spyShoppingList,
            'spyShoppingListPermissionGroup' => $this->spyShoppingListPermissionGroup,
            'spyShoppingListCompanyBusinessUnitBlacklists' => $this->spyShoppingListCompanyBusinessUnitBlacklists,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_shopping_list_company_business_unit' => $this->idShoppingListCompanyBusinessUnit,
            'fk_company_business_unit' => $this->fkCompanyBusinessUnit,
            'fk_shopping_list' => $this->fkShoppingList,
            'fk_shopping_list_permission_group' => $this->fkShoppingListPermissionGroup,
            'spy_company_business_unit' => $this->spyCompanyBusinessUnit,
            'spy_shopping_list' => $this->spyShoppingList,
            'spy_shopping_list_permission_group' => $this->spyShoppingListPermissionGroup,
            'spy_shopping_list_company_business_unit_blacklists' => $this->spyShoppingListCompanyBusinessUnitBlacklists,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_shopping_list_company_business_unit' => $this->idShoppingListCompanyBusinessUnit instanceof AbstractTransfer ? $this->idShoppingListCompanyBusinessUnit->toArray(true, false) : $this->idShoppingListCompanyBusinessUnit,
            'fk_company_business_unit' => $this->fkCompanyBusinessUnit instanceof AbstractTransfer ? $this->fkCompanyBusinessUnit->toArray(true, false) : $this->fkCompanyBusinessUnit,
            'fk_shopping_list' => $this->fkShoppingList instanceof AbstractTransfer ? $this->fkShoppingList->toArray(true, false) : $this->fkShoppingList,
            'fk_shopping_list_permission_group' => $this->fkShoppingListPermissionGroup instanceof AbstractTransfer ? $this->fkShoppingListPermissionGroup->toArray(true, false) : $this->fkShoppingListPermissionGroup,
            'spy_company_business_unit' => $this->spyCompanyBusinessUnit instanceof AbstractTransfer ? $this->spyCompanyBusinessUnit->toArray(true, false) : $this->spyCompanyBusinessUnit,
            'spy_shopping_list' => $this->spyShoppingList instanceof AbstractTransfer ? $this->spyShoppingList->toArray(true, false) : $this->spyShoppingList,
            'spy_shopping_list_permission_group' => $this->spyShoppingListPermissionGroup instanceof AbstractTransfer ? $this->spyShoppingListPermissionGroup->toArray(true, false) : $this->spyShoppingListPermissionGroup,
            'spy_shopping_list_company_business_unit_blacklists' => $this->spyShoppingListCompanyBusinessUnitBlacklists instanceof AbstractTransfer ? $this->spyShoppingListCompanyBusinessUnitBlacklists->toArray(true, false) : $this->addValuesToCollection($this->spyShoppingListCompanyBusinessUnitBlacklists, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idShoppingListCompanyBusinessUnit' => $this->idShoppingListCompanyBusinessUnit instanceof AbstractTransfer ? $this->idShoppingListCompanyBusinessUnit->toArray(true, true) : $this->idShoppingListCompanyBusinessUnit,
            'fkCompanyBusinessUnit' => $this->fkCompanyBusinessUnit instanceof AbstractTransfer ? $this->fkCompanyBusinessUnit->toArray(true, true) : $this->fkCompanyBusinessUnit,
            'fkShoppingList' => $this->fkShoppingList instanceof AbstractTransfer ? $this->fkShoppingList->toArray(true, true) : $this->fkShoppingList,
            'fkShoppingListPermissionGroup' => $this->fkShoppingListPermissionGroup instanceof AbstractTransfer ? $this->fkShoppingListPermissionGroup->toArray(true, true) : $this->fkShoppingListPermissionGroup,
            'spyCompanyBusinessUnit' => $this->spyCompanyBusinessUnit instanceof AbstractTransfer ? $this->spyCompanyBusinessUnit->toArray(true, true) : $this->spyCompanyBusinessUnit,
            'spyShoppingList' => $this->spyShoppingList instanceof AbstractTransfer ? $this->spyShoppingList->toArray(true, true) : $this->spyShoppingList,
            'spyShoppingListPermissionGroup' => $this->spyShoppingListPermissionGroup instanceof AbstractTransfer ? $this->spyShoppingListPermissionGroup->toArray(true, true) : $this->spyShoppingListPermissionGroup,
            'spyShoppingListCompanyBusinessUnitBlacklists' => $this->spyShoppingListCompanyBusinessUnitBlacklists instanceof AbstractTransfer ? $this->spyShoppingListCompanyBusinessUnitBlacklists->toArray(true, true) : $this->addValuesToCollection($this->spyShoppingListCompanyBusinessUnitBlacklists, true, true),
        ];
    }
}
