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
class SpyShoppingListCompanyBusinessUnitBlacklistEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_SHOPPING_LIST_COMPANY_BUSINESS_UNIT_BLACKLIST = 'idShoppingListCompanyBusinessUnitBlacklist';

    /**
     * @var string
     */
    public const FK_COMPANY_USER = 'fkCompanyUser';

    /**
     * @var string
     */
    public const FK_SHOPPING_LIST_COMPANY_BUSINESS_UNIT = 'fkShoppingListCompanyBusinessUnit';

    /**
     * @var string
     */
    public const SPY_SHOPPING_LIST_COMPANY_BUSINESS_UNIT = 'spyShoppingListCompanyBusinessUnit';

    /**
     * @var string
     */
    public const SPY_COMPANY_USER = 'spyCompanyUser';

    /**
     * @var integer|null
     */
    protected $idShoppingListCompanyBusinessUnitBlacklist;

    /**
     * @var integer|null
     */
    protected $fkCompanyUser;

    /**
     * @var integer|null
     */
    protected $fkShoppingListCompanyBusinessUnit;

    /**
     * @var \Generated\Shared\Transfer\SpyShoppingListCompanyBusinessUnitEntityTransfer|null
     */
    protected $spyShoppingListCompanyBusinessUnit;

    /**
     * @var \Generated\Shared\Transfer\SpyCompanyUserEntityTransfer|null
     */
    protected $spyCompanyUser;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_shopping_list_company_business_unit_blacklist' => 'idShoppingListCompanyBusinessUnitBlacklist',
        'idShoppingListCompanyBusinessUnitBlacklist' => 'idShoppingListCompanyBusinessUnitBlacklist',
        'IdShoppingListCompanyBusinessUnitBlacklist' => 'idShoppingListCompanyBusinessUnitBlacklist',
        'fk_company_user' => 'fkCompanyUser',
        'fkCompanyUser' => 'fkCompanyUser',
        'FkCompanyUser' => 'fkCompanyUser',
        'fk_shopping_list_company_business_unit' => 'fkShoppingListCompanyBusinessUnit',
        'fkShoppingListCompanyBusinessUnit' => 'fkShoppingListCompanyBusinessUnit',
        'FkShoppingListCompanyBusinessUnit' => 'fkShoppingListCompanyBusinessUnit',
        'spy_shopping_list_company_business_unit' => 'spyShoppingListCompanyBusinessUnit',
        'spyShoppingListCompanyBusinessUnit' => 'spyShoppingListCompanyBusinessUnit',
        'SpyShoppingListCompanyBusinessUnit' => 'spyShoppingListCompanyBusinessUnit',
        'spy_company_user' => 'spyCompanyUser',
        'spyCompanyUser' => 'spyCompanyUser',
        'SpyCompanyUser' => 'spyCompanyUser',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SHOPPING_LIST_COMPANY_BUSINESS_UNIT_BLACKLIST => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_shopping_list_company_business_unit_blacklist',
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
        self::FK_SHOPPING_LIST_COMPANY_BUSINESS_UNIT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_shopping_list_company_business_unit',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SHOPPING_LIST_COMPANY_BUSINESS_UNIT => [
            'type' => 'Generated\Shared\Transfer\SpyShoppingListCompanyBusinessUnitEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_shopping_list_company_business_unit',
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
    public static $entityNamespace = 'Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnitBlacklist';


    /**
     * @module 
     *
     * @param integer|null $idShoppingListCompanyBusinessUnitBlacklist
     *
     * @return $this
     */
    public function setIdShoppingListCompanyBusinessUnitBlacklist($idShoppingListCompanyBusinessUnitBlacklist)
    {
        $this->idShoppingListCompanyBusinessUnitBlacklist = $idShoppingListCompanyBusinessUnitBlacklist;
        $this->modifiedProperties[self::ID_SHOPPING_LIST_COMPANY_BUSINESS_UNIT_BLACKLIST] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdShoppingListCompanyBusinessUnitBlacklist()
    {
        return $this->idShoppingListCompanyBusinessUnitBlacklist;
    }

    /**
     * @module 
     *
     * @param integer|null $idShoppingListCompanyBusinessUnitBlacklist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdShoppingListCompanyBusinessUnitBlacklistOrFail($idShoppingListCompanyBusinessUnitBlacklist)
    {
        if ($idShoppingListCompanyBusinessUnitBlacklist === null) {
            $this->throwNullValueException(static::ID_SHOPPING_LIST_COMPANY_BUSINESS_UNIT_BLACKLIST);
        }

        return $this->setIdShoppingListCompanyBusinessUnitBlacklist($idShoppingListCompanyBusinessUnitBlacklist);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdShoppingListCompanyBusinessUnitBlacklistOrFail()
    {
        if ($this->idShoppingListCompanyBusinessUnitBlacklist === null) {
            $this->throwNullValueException(static::ID_SHOPPING_LIST_COMPANY_BUSINESS_UNIT_BLACKLIST);
        }

        return $this->idShoppingListCompanyBusinessUnitBlacklist;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdShoppingListCompanyBusinessUnitBlacklist()
    {
        $this->assertPropertyIsSet(self::ID_SHOPPING_LIST_COMPANY_BUSINESS_UNIT_BLACKLIST);

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
     * @param integer|null $fkShoppingListCompanyBusinessUnit
     *
     * @return $this
     */
    public function setFkShoppingListCompanyBusinessUnit($fkShoppingListCompanyBusinessUnit)
    {
        $this->fkShoppingListCompanyBusinessUnit = $fkShoppingListCompanyBusinessUnit;
        $this->modifiedProperties[self::FK_SHOPPING_LIST_COMPANY_BUSINESS_UNIT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkShoppingListCompanyBusinessUnit()
    {
        return $this->fkShoppingListCompanyBusinessUnit;
    }

    /**
     * @module 
     *
     * @param integer|null $fkShoppingListCompanyBusinessUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkShoppingListCompanyBusinessUnitOrFail($fkShoppingListCompanyBusinessUnit)
    {
        if ($fkShoppingListCompanyBusinessUnit === null) {
            $this->throwNullValueException(static::FK_SHOPPING_LIST_COMPANY_BUSINESS_UNIT);
        }

        return $this->setFkShoppingListCompanyBusinessUnit($fkShoppingListCompanyBusinessUnit);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkShoppingListCompanyBusinessUnitOrFail()
    {
        if ($this->fkShoppingListCompanyBusinessUnit === null) {
            $this->throwNullValueException(static::FK_SHOPPING_LIST_COMPANY_BUSINESS_UNIT);
        }

        return $this->fkShoppingListCompanyBusinessUnit;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkShoppingListCompanyBusinessUnit()
    {
        $this->assertPropertyIsSet(self::FK_SHOPPING_LIST_COMPANY_BUSINESS_UNIT);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyShoppingListCompanyBusinessUnitEntityTransfer|null $spyShoppingListCompanyBusinessUnit
     *
     * @return $this
     */
    public function setSpyShoppingListCompanyBusinessUnit(SpyShoppingListCompanyBusinessUnitEntityTransfer $spyShoppingListCompanyBusinessUnit = null)
    {
        $this->spyShoppingListCompanyBusinessUnit = $spyShoppingListCompanyBusinessUnit;
        $this->modifiedProperties[self::SPY_SHOPPING_LIST_COMPANY_BUSINESS_UNIT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyShoppingListCompanyBusinessUnitEntityTransfer|null
     */
    public function getSpyShoppingListCompanyBusinessUnit()
    {
        return $this->spyShoppingListCompanyBusinessUnit;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyShoppingListCompanyBusinessUnitEntityTransfer $spyShoppingListCompanyBusinessUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyShoppingListCompanyBusinessUnitOrFail(SpyShoppingListCompanyBusinessUnitEntityTransfer $spyShoppingListCompanyBusinessUnit)
    {
        return $this->setSpyShoppingListCompanyBusinessUnit($spyShoppingListCompanyBusinessUnit);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyShoppingListCompanyBusinessUnitEntityTransfer
     */
    public function getSpyShoppingListCompanyBusinessUnitOrFail()
    {
        if ($this->spyShoppingListCompanyBusinessUnit === null) {
            $this->throwNullValueException(static::SPY_SHOPPING_LIST_COMPANY_BUSINESS_UNIT);
        }

        return $this->spyShoppingListCompanyBusinessUnit;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyShoppingListCompanyBusinessUnit()
    {
        $this->assertPropertyIsSet(self::SPY_SHOPPING_LIST_COMPANY_BUSINESS_UNIT);

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
                case 'idShoppingListCompanyBusinessUnitBlacklist':
                case 'fkCompanyUser':
                case 'fkShoppingListCompanyBusinessUnit':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyShoppingListCompanyBusinessUnit':
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
                case 'idShoppingListCompanyBusinessUnitBlacklist':
                case 'fkCompanyUser':
                case 'fkShoppingListCompanyBusinessUnit':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyShoppingListCompanyBusinessUnit':
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
                case 'idShoppingListCompanyBusinessUnitBlacklist':
                case 'fkCompanyUser':
                case 'fkShoppingListCompanyBusinessUnit':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyShoppingListCompanyBusinessUnit':
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
            'idShoppingListCompanyBusinessUnitBlacklist' => $this->idShoppingListCompanyBusinessUnitBlacklist,
            'fkCompanyUser' => $this->fkCompanyUser,
            'fkShoppingListCompanyBusinessUnit' => $this->fkShoppingListCompanyBusinessUnit,
            'spyShoppingListCompanyBusinessUnit' => $this->spyShoppingListCompanyBusinessUnit,
            'spyCompanyUser' => $this->spyCompanyUser,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_shopping_list_company_business_unit_blacklist' => $this->idShoppingListCompanyBusinessUnitBlacklist,
            'fk_company_user' => $this->fkCompanyUser,
            'fk_shopping_list_company_business_unit' => $this->fkShoppingListCompanyBusinessUnit,
            'spy_shopping_list_company_business_unit' => $this->spyShoppingListCompanyBusinessUnit,
            'spy_company_user' => $this->spyCompanyUser,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_shopping_list_company_business_unit_blacklist' => $this->idShoppingListCompanyBusinessUnitBlacklist instanceof AbstractTransfer ? $this->idShoppingListCompanyBusinessUnitBlacklist->toArray(true, false) : $this->idShoppingListCompanyBusinessUnitBlacklist,
            'fk_company_user' => $this->fkCompanyUser instanceof AbstractTransfer ? $this->fkCompanyUser->toArray(true, false) : $this->fkCompanyUser,
            'fk_shopping_list_company_business_unit' => $this->fkShoppingListCompanyBusinessUnit instanceof AbstractTransfer ? $this->fkShoppingListCompanyBusinessUnit->toArray(true, false) : $this->fkShoppingListCompanyBusinessUnit,
            'spy_shopping_list_company_business_unit' => $this->spyShoppingListCompanyBusinessUnit instanceof AbstractTransfer ? $this->spyShoppingListCompanyBusinessUnit->toArray(true, false) : $this->spyShoppingListCompanyBusinessUnit,
            'spy_company_user' => $this->spyCompanyUser instanceof AbstractTransfer ? $this->spyCompanyUser->toArray(true, false) : $this->spyCompanyUser,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idShoppingListCompanyBusinessUnitBlacklist' => $this->idShoppingListCompanyBusinessUnitBlacklist instanceof AbstractTransfer ? $this->idShoppingListCompanyBusinessUnitBlacklist->toArray(true, true) : $this->idShoppingListCompanyBusinessUnitBlacklist,
            'fkCompanyUser' => $this->fkCompanyUser instanceof AbstractTransfer ? $this->fkCompanyUser->toArray(true, true) : $this->fkCompanyUser,
            'fkShoppingListCompanyBusinessUnit' => $this->fkShoppingListCompanyBusinessUnit instanceof AbstractTransfer ? $this->fkShoppingListCompanyBusinessUnit->toArray(true, true) : $this->fkShoppingListCompanyBusinessUnit,
            'spyShoppingListCompanyBusinessUnit' => $this->spyShoppingListCompanyBusinessUnit instanceof AbstractTransfer ? $this->spyShoppingListCompanyBusinessUnit->toArray(true, true) : $this->spyShoppingListCompanyBusinessUnit,
            'spyCompanyUser' => $this->spyCompanyUser instanceof AbstractTransfer ? $this->spyCompanyUser->toArray(true, true) : $this->spyCompanyUser,
        ];
    }
}
