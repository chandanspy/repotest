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
class ShoppingListCompanyBusinessUnitTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_COMPANY_BUSINESS_UNIT = 'idCompanyBusinessUnit';

    /**
     * @var string
     */
    public const ID_SHOPPING_LIST = 'idShoppingList';

    /**
     * @var string
     */
    public const COMPANY_BUSINESS_UNIT = 'companyBusinessUnit';

    /**
     * @var string
     */
    public const ID_SHOPPING_LIST_COMPANY_BUSINESS_UNIT = 'idShoppingListCompanyBusinessUnit';

    /**
     * @var string
     */
    public const ID_SHOPPING_LIST_PERMISSION_GROUP = 'idShoppingListPermissionGroup';

    /**
     * @var int|null
     */
    protected $idCompanyBusinessUnit;

    /**
     * @var int|null
     */
    protected $idShoppingList;

    /**
     * @var \Generated\Shared\Transfer\CompanyBusinessUnitTransfer|null
     */
    protected $companyBusinessUnit;

    /**
     * @var int|null
     */
    protected $idShoppingListCompanyBusinessUnit;

    /**
     * @var int|null
     */
    protected $idShoppingListPermissionGroup;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_company_business_unit' => 'idCompanyBusinessUnit',
        'idCompanyBusinessUnit' => 'idCompanyBusinessUnit',
        'IdCompanyBusinessUnit' => 'idCompanyBusinessUnit',
        'id_shopping_list' => 'idShoppingList',
        'idShoppingList' => 'idShoppingList',
        'IdShoppingList' => 'idShoppingList',
        'company_business_unit' => 'companyBusinessUnit',
        'companyBusinessUnit' => 'companyBusinessUnit',
        'CompanyBusinessUnit' => 'companyBusinessUnit',
        'id_shopping_list_company_business_unit' => 'idShoppingListCompanyBusinessUnit',
        'idShoppingListCompanyBusinessUnit' => 'idShoppingListCompanyBusinessUnit',
        'IdShoppingListCompanyBusinessUnit' => 'idShoppingListCompanyBusinessUnit',
        'id_shopping_list_permission_group' => 'idShoppingListPermissionGroup',
        'idShoppingListPermissionGroup' => 'idShoppingListPermissionGroup',
        'IdShoppingListPermissionGroup' => 'idShoppingListPermissionGroup',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_COMPANY_BUSINESS_UNIT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_company_business_unit',
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
        self::COMPANY_BUSINESS_UNIT => [
            'type' => 'Generated\Shared\Transfer\CompanyBusinessUnitTransfer',
            'type_shim' => null,
            'name_underscore' => 'company_business_unit',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_SHOPPING_LIST_COMPANY_BUSINESS_UNIT => [
            'type' => 'int',
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
     * @param int|null $idCompanyBusinessUnit
     *
     * @return $this
     */
    public function setIdCompanyBusinessUnit($idCompanyBusinessUnit)
    {
        $this->idCompanyBusinessUnit = $idCompanyBusinessUnit;
        $this->modifiedProperties[self::ID_COMPANY_BUSINESS_UNIT] = true;

        return $this;
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @return int|null
     */
    public function getIdCompanyBusinessUnit()
    {
        return $this->idCompanyBusinessUnit;
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @param int|null $idCompanyBusinessUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCompanyBusinessUnitOrFail($idCompanyBusinessUnit)
    {
        if ($idCompanyBusinessUnit === null) {
            $this->throwNullValueException(static::ID_COMPANY_BUSINESS_UNIT);
        }

        return $this->setIdCompanyBusinessUnit($idCompanyBusinessUnit);
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCompanyBusinessUnitOrFail()
    {
        if ($this->idCompanyBusinessUnit === null) {
            $this->throwNullValueException(static::ID_COMPANY_BUSINESS_UNIT);
        }

        return $this->idCompanyBusinessUnit;
    }

    /**
     * @module ShoppingListPage|ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCompanyBusinessUnit()
    {
        $this->assertPropertyIsSet(self::ID_COMPANY_BUSINESS_UNIT);

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
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitTransfer|null $companyBusinessUnit
     *
     * @return $this
     */
    public function setCompanyBusinessUnit(CompanyBusinessUnitTransfer $companyBusinessUnit = null)
    {
        $this->companyBusinessUnit = $companyBusinessUnit;
        $this->modifiedProperties[self::COMPANY_BUSINESS_UNIT] = true;

        return $this;
    }

    /**
     * @module ShoppingListPage
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitTransfer|null
     */
    public function getCompanyBusinessUnit()
    {
        return $this->companyBusinessUnit;
    }

    /**
     * @module ShoppingListPage
     *
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitTransfer $companyBusinessUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCompanyBusinessUnitOrFail(CompanyBusinessUnitTransfer $companyBusinessUnit)
    {
        return $this->setCompanyBusinessUnit($companyBusinessUnit);
    }

    /**
     * @module ShoppingListPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitTransfer
     */
    public function getCompanyBusinessUnitOrFail()
    {
        if ($this->companyBusinessUnit === null) {
            $this->throwNullValueException(static::COMPANY_BUSINESS_UNIT);
        }

        return $this->companyBusinessUnit;
    }

    /**
     * @module ShoppingListPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompanyBusinessUnit()
    {
        $this->assertPropertyIsSet(self::COMPANY_BUSINESS_UNIT);

        return $this;
    }

    /**
     * @module ShoppingList
     *
     * @param int|null $idShoppingListCompanyBusinessUnit
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
     * @module ShoppingList
     *
     * @return int|null
     */
    public function getIdShoppingListCompanyBusinessUnit()
    {
        return $this->idShoppingListCompanyBusinessUnit;
    }

    /**
     * @module ShoppingList
     *
     * @param int|null $idShoppingListCompanyBusinessUnit
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
     * @module ShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdShoppingListCompanyBusinessUnitOrFail()
    {
        if ($this->idShoppingListCompanyBusinessUnit === null) {
            $this->throwNullValueException(static::ID_SHOPPING_LIST_COMPANY_BUSINESS_UNIT);
        }

        return $this->idShoppingListCompanyBusinessUnit;
    }

    /**
     * @module ShoppingList
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
                case 'idCompanyBusinessUnit':
                case 'idShoppingList':
                case 'idShoppingListCompanyBusinessUnit':
                case 'idShoppingListPermissionGroup':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'companyBusinessUnit':
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
                case 'idCompanyBusinessUnit':
                case 'idShoppingList':
                case 'idShoppingListCompanyBusinessUnit':
                case 'idShoppingListPermissionGroup':
                    $values[$arrayKey] = $value;

                    break;
                case 'companyBusinessUnit':
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
                case 'idCompanyBusinessUnit':
                case 'idShoppingList':
                case 'idShoppingListCompanyBusinessUnit':
                case 'idShoppingListPermissionGroup':
                    $values[$arrayKey] = $value;

                    break;
                case 'companyBusinessUnit':
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
            'idCompanyBusinessUnit' => $this->idCompanyBusinessUnit,
            'idShoppingList' => $this->idShoppingList,
            'idShoppingListCompanyBusinessUnit' => $this->idShoppingListCompanyBusinessUnit,
            'idShoppingListPermissionGroup' => $this->idShoppingListPermissionGroup,
            'companyBusinessUnit' => $this->companyBusinessUnit,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_company_business_unit' => $this->idCompanyBusinessUnit,
            'id_shopping_list' => $this->idShoppingList,
            'id_shopping_list_company_business_unit' => $this->idShoppingListCompanyBusinessUnit,
            'id_shopping_list_permission_group' => $this->idShoppingListPermissionGroup,
            'company_business_unit' => $this->companyBusinessUnit,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_company_business_unit' => $this->idCompanyBusinessUnit instanceof AbstractTransfer ? $this->idCompanyBusinessUnit->toArray(true, false) : $this->idCompanyBusinessUnit,
            'id_shopping_list' => $this->idShoppingList instanceof AbstractTransfer ? $this->idShoppingList->toArray(true, false) : $this->idShoppingList,
            'id_shopping_list_company_business_unit' => $this->idShoppingListCompanyBusinessUnit instanceof AbstractTransfer ? $this->idShoppingListCompanyBusinessUnit->toArray(true, false) : $this->idShoppingListCompanyBusinessUnit,
            'id_shopping_list_permission_group' => $this->idShoppingListPermissionGroup instanceof AbstractTransfer ? $this->idShoppingListPermissionGroup->toArray(true, false) : $this->idShoppingListPermissionGroup,
            'company_business_unit' => $this->companyBusinessUnit instanceof AbstractTransfer ? $this->companyBusinessUnit->toArray(true, false) : $this->companyBusinessUnit,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCompanyBusinessUnit' => $this->idCompanyBusinessUnit instanceof AbstractTransfer ? $this->idCompanyBusinessUnit->toArray(true, true) : $this->idCompanyBusinessUnit,
            'idShoppingList' => $this->idShoppingList instanceof AbstractTransfer ? $this->idShoppingList->toArray(true, true) : $this->idShoppingList,
            'idShoppingListCompanyBusinessUnit' => $this->idShoppingListCompanyBusinessUnit instanceof AbstractTransfer ? $this->idShoppingListCompanyBusinessUnit->toArray(true, true) : $this->idShoppingListCompanyBusinessUnit,
            'idShoppingListPermissionGroup' => $this->idShoppingListPermissionGroup instanceof AbstractTransfer ? $this->idShoppingListPermissionGroup->toArray(true, true) : $this->idShoppingListPermissionGroup,
            'companyBusinessUnit' => $this->companyBusinessUnit instanceof AbstractTransfer ? $this->companyBusinessUnit->toArray(true, true) : $this->companyBusinessUnit,
        ];
    }
}
