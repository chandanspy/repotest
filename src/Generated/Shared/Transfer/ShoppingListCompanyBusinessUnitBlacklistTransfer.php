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
class ShoppingListCompanyBusinessUnitBlacklistTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_SHOPPING_LIST_COMPANY_BUSINESS_UNIT_BLACKLIST = 'idShoppingListCompanyBusinessUnitBlacklist';

    /**
     * @var string
     */
    public const FK_SHOPPING_LIST_COMPANY_BUSINESS_UNIT = 'fkShoppingListCompanyBusinessUnit';

    /**
     * @var string
     */
    public const FK_COMPANY_USER = 'fkCompanyUser';

    /**
     * @var int|null
     */
    protected $idShoppingListCompanyBusinessUnitBlacklist;

    /**
     * @var int|null
     */
    protected $fkShoppingListCompanyBusinessUnit;

    /**
     * @var int|null
     */
    protected $fkCompanyUser;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_shopping_list_company_business_unit_blacklist' => 'idShoppingListCompanyBusinessUnitBlacklist',
        'idShoppingListCompanyBusinessUnitBlacklist' => 'idShoppingListCompanyBusinessUnitBlacklist',
        'IdShoppingListCompanyBusinessUnitBlacklist' => 'idShoppingListCompanyBusinessUnitBlacklist',
        'fk_shopping_list_company_business_unit' => 'fkShoppingListCompanyBusinessUnit',
        'fkShoppingListCompanyBusinessUnit' => 'fkShoppingListCompanyBusinessUnit',
        'FkShoppingListCompanyBusinessUnit' => 'fkShoppingListCompanyBusinessUnit',
        'fk_company_user' => 'fkCompanyUser',
        'fkCompanyUser' => 'fkCompanyUser',
        'FkCompanyUser' => 'fkCompanyUser',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SHOPPING_LIST_COMPANY_BUSINESS_UNIT_BLACKLIST => [
            'type' => 'int',
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
        self::FK_SHOPPING_LIST_COMPANY_BUSINESS_UNIT => [
            'type' => 'int',
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
        self::FK_COMPANY_USER => [
            'type' => 'int',
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
    ];

    /**
     * @module ShoppingList
     *
     * @param int|null $idShoppingListCompanyBusinessUnitBlacklist
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
     * @module ShoppingList
     *
     * @return int|null
     */
    public function getIdShoppingListCompanyBusinessUnitBlacklist()
    {
        return $this->idShoppingListCompanyBusinessUnitBlacklist;
    }

    /**
     * @module ShoppingList
     *
     * @param int|null $idShoppingListCompanyBusinessUnitBlacklist
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
     * @module ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdShoppingListCompanyBusinessUnitBlacklistOrFail()
    {
        if ($this->idShoppingListCompanyBusinessUnitBlacklist === null) {
            $this->throwNullValueException(static::ID_SHOPPING_LIST_COMPANY_BUSINESS_UNIT_BLACKLIST);
        }

        return $this->idShoppingListCompanyBusinessUnitBlacklist;
    }

    /**
     * @module ShoppingList
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
     * @module ShoppingList
     *
     * @param int|null $fkShoppingListCompanyBusinessUnit
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
     * @module ShoppingList
     *
     * @return int|null
     */
    public function getFkShoppingListCompanyBusinessUnit()
    {
        return $this->fkShoppingListCompanyBusinessUnit;
    }

    /**
     * @module ShoppingList
     *
     * @param int|null $fkShoppingListCompanyBusinessUnit
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
     * @module ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkShoppingListCompanyBusinessUnitOrFail()
    {
        if ($this->fkShoppingListCompanyBusinessUnit === null) {
            $this->throwNullValueException(static::FK_SHOPPING_LIST_COMPANY_BUSINESS_UNIT);
        }

        return $this->fkShoppingListCompanyBusinessUnit;
    }

    /**
     * @module ShoppingList
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
     * @module ShoppingList
     *
     * @param int|null $fkCompanyUser
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
     * @module ShoppingList
     *
     * @return int|null
     */
    public function getFkCompanyUser()
    {
        return $this->fkCompanyUser;
    }

    /**
     * @module ShoppingList
     *
     * @param int|null $fkCompanyUser
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
     * @module ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkCompanyUserOrFail()
    {
        if ($this->fkCompanyUser === null) {
            $this->throwNullValueException(static::FK_COMPANY_USER);
        }

        return $this->fkCompanyUser;
    }

    /**
     * @module ShoppingList
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
                case 'fkShoppingListCompanyBusinessUnit':
                case 'fkCompanyUser':
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
                case 'idShoppingListCompanyBusinessUnitBlacklist':
                case 'fkShoppingListCompanyBusinessUnit':
                case 'fkCompanyUser':
                    $values[$arrayKey] = $value;

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
                case 'fkShoppingListCompanyBusinessUnit':
                case 'fkCompanyUser':
                    $values[$arrayKey] = $value;

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
            'fkShoppingListCompanyBusinessUnit' => $this->fkShoppingListCompanyBusinessUnit,
            'fkCompanyUser' => $this->fkCompanyUser,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_shopping_list_company_business_unit_blacklist' => $this->idShoppingListCompanyBusinessUnitBlacklist,
            'fk_shopping_list_company_business_unit' => $this->fkShoppingListCompanyBusinessUnit,
            'fk_company_user' => $this->fkCompanyUser,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_shopping_list_company_business_unit_blacklist' => $this->idShoppingListCompanyBusinessUnitBlacklist instanceof AbstractTransfer ? $this->idShoppingListCompanyBusinessUnitBlacklist->toArray(true, false) : $this->idShoppingListCompanyBusinessUnitBlacklist,
            'fk_shopping_list_company_business_unit' => $this->fkShoppingListCompanyBusinessUnit instanceof AbstractTransfer ? $this->fkShoppingListCompanyBusinessUnit->toArray(true, false) : $this->fkShoppingListCompanyBusinessUnit,
            'fk_company_user' => $this->fkCompanyUser instanceof AbstractTransfer ? $this->fkCompanyUser->toArray(true, false) : $this->fkCompanyUser,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idShoppingListCompanyBusinessUnitBlacklist' => $this->idShoppingListCompanyBusinessUnitBlacklist instanceof AbstractTransfer ? $this->idShoppingListCompanyBusinessUnitBlacklist->toArray(true, true) : $this->idShoppingListCompanyBusinessUnitBlacklist,
            'fkShoppingListCompanyBusinessUnit' => $this->fkShoppingListCompanyBusinessUnit instanceof AbstractTransfer ? $this->fkShoppingListCompanyBusinessUnit->toArray(true, true) : $this->fkShoppingListCompanyBusinessUnit,
            'fkCompanyUser' => $this->fkCompanyUser instanceof AbstractTransfer ? $this->fkCompanyUser->toArray(true, true) : $this->fkCompanyUser,
        ];
    }
}
