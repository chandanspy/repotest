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
class CompanyBusinessUnitCriteriaFilterTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_COMPANY = 'idCompany';

    /**
     * @var string
     */
    public const FILTER = 'filter';

    /**
     * @var string
     */
    public const PAGINATION = 'pagination';

    /**
     * @var string
     */
    public const WITHOUT_EXPANDERS = 'withoutExpanders';

    /**
     * @var string
     */
    public const COMPANY_BUSINESS_UNIT_IDS = 'companyBusinessUnitIds';

    /**
     * @var string
     */
    public const ID_COMPANY_USER = 'idCompanyUser';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var int|null
     */
    protected $idCompany;

    /**
     * @var \Generated\Shared\Transfer\FilterTransfer|null
     */
    protected $filter;

    /**
     * @var \Generated\Shared\Transfer\PaginationTransfer|null
     */
    protected $pagination;

    /**
     * @var bool|null
     */
    protected $withoutExpanders;

    /**
     * @var array
     */
    protected $companyBusinessUnitIds = [];

    /**
     * @var int|null
     */
    protected $idCompanyUser;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_company' => 'idCompany',
        'idCompany' => 'idCompany',
        'IdCompany' => 'idCompany',
        'filter' => 'filter',
        'Filter' => 'filter',
        'pagination' => 'pagination',
        'Pagination' => 'pagination',
        'without_expanders' => 'withoutExpanders',
        'withoutExpanders' => 'withoutExpanders',
        'WithoutExpanders' => 'withoutExpanders',
        'company_business_unit_ids' => 'companyBusinessUnitIds',
        'companyBusinessUnitIds' => 'companyBusinessUnitIds',
        'CompanyBusinessUnitIds' => 'companyBusinessUnitIds',
        'id_company_user' => 'idCompanyUser',
        'idCompanyUser' => 'idCompanyUser',
        'IdCompanyUser' => 'idCompanyUser',
        'name' => 'name',
        'Name' => 'name',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_COMPANY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_company',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FILTER => [
            'type' => 'Generated\Shared\Transfer\FilterTransfer',
            'type_shim' => null,
            'name_underscore' => 'filter',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PAGINATION => [
            'type' => 'Generated\Shared\Transfer\PaginationTransfer',
            'type_shim' => null,
            'name_underscore' => 'pagination',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::WITHOUT_EXPANDERS => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'without_expanders',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COMPANY_BUSINESS_UNIT_IDS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'company_business_unit_ids',
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
    ];

    /**
     * @module CompanyPage|ShoppingListPage|BusinessOnBehalfGui|CompanyBusinessUnitGui|CompanyBusinessUnitSalesConnector|CompanyBusinessUnit|CompanyUserInvitation|MerchantRelationshipGui|MerchantRelationship
     *
     * @param int|null $idCompany
     *
     * @return $this
     */
    public function setIdCompany($idCompany)
    {
        $this->idCompany = $idCompany;
        $this->modifiedProperties[self::ID_COMPANY] = true;

        return $this;
    }

    /**
     * @module CompanyPage|ShoppingListPage|BusinessOnBehalfGui|CompanyBusinessUnitGui|CompanyBusinessUnitSalesConnector|CompanyBusinessUnit|CompanyUserInvitation|MerchantRelationshipGui|MerchantRelationship
     *
     * @return int|null
     */
    public function getIdCompany()
    {
        return $this->idCompany;
    }

    /**
     * @module CompanyPage|ShoppingListPage|BusinessOnBehalfGui|CompanyBusinessUnitGui|CompanyBusinessUnitSalesConnector|CompanyBusinessUnit|CompanyUserInvitation|MerchantRelationshipGui|MerchantRelationship
     *
     * @param int|null $idCompany
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCompanyOrFail($idCompany)
    {
        if ($idCompany === null) {
            $this->throwNullValueException(static::ID_COMPANY);
        }

        return $this->setIdCompany($idCompany);
    }

    /**
     * @module CompanyPage|ShoppingListPage|BusinessOnBehalfGui|CompanyBusinessUnitGui|CompanyBusinessUnitSalesConnector|CompanyBusinessUnit|CompanyUserInvitation|MerchantRelationshipGui|MerchantRelationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCompanyOrFail()
    {
        if ($this->idCompany === null) {
            $this->throwNullValueException(static::ID_COMPANY);
        }

        return $this->idCompany;
    }

    /**
     * @module CompanyPage|ShoppingListPage|BusinessOnBehalfGui|CompanyBusinessUnitGui|CompanyBusinessUnitSalesConnector|CompanyBusinessUnit|CompanyUserInvitation|MerchantRelationshipGui|MerchantRelationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCompany()
    {
        $this->assertPropertyIsSet(self::ID_COMPANY);

        return $this;
    }

    /**
     * @module CompanyPage|ShoppingListPage|CompanyBusinessUnitGui|CompanyBusinessUnit
     *
     * @param \Generated\Shared\Transfer\FilterTransfer|null $filter
     *
     * @return $this
     */
    public function setFilter(FilterTransfer $filter = null)
    {
        $this->filter = $filter;
        $this->modifiedProperties[self::FILTER] = true;

        return $this;
    }

    /**
     * @module CompanyPage|ShoppingListPage|CompanyBusinessUnitGui|CompanyBusinessUnit
     *
     * @return \Generated\Shared\Transfer\FilterTransfer|null
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * @module CompanyPage|ShoppingListPage|CompanyBusinessUnitGui|CompanyBusinessUnit
     *
     * @param \Generated\Shared\Transfer\FilterTransfer $filter
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFilterOrFail(FilterTransfer $filter)
    {
        return $this->setFilter($filter);
    }

    /**
     * @module CompanyPage|ShoppingListPage|CompanyBusinessUnitGui|CompanyBusinessUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\FilterTransfer
     */
    public function getFilterOrFail()
    {
        if ($this->filter === null) {
            $this->throwNullValueException(static::FILTER);
        }

        return $this->filter;
    }

    /**
     * @module CompanyPage|ShoppingListPage|CompanyBusinessUnitGui|CompanyBusinessUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFilter()
    {
        $this->assertPropertyIsSet(self::FILTER);

        return $this;
    }

    /**
     * @module CompanyPage|CompanyBusinessUnit
     *
     * @param \Generated\Shared\Transfer\PaginationTransfer|null $pagination
     *
     * @return $this
     */
    public function setPagination(PaginationTransfer $pagination = null)
    {
        $this->pagination = $pagination;
        $this->modifiedProperties[self::PAGINATION] = true;

        return $this;
    }

    /**
     * @module CompanyPage|CompanyBusinessUnit
     *
     * @return \Generated\Shared\Transfer\PaginationTransfer|null
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    /**
     * @module CompanyPage|CompanyBusinessUnit
     *
     * @param \Generated\Shared\Transfer\PaginationTransfer $pagination
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPaginationOrFail(PaginationTransfer $pagination)
    {
        return $this->setPagination($pagination);
    }

    /**
     * @module CompanyPage|CompanyBusinessUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PaginationTransfer
     */
    public function getPaginationOrFail()
    {
        if ($this->pagination === null) {
            $this->throwNullValueException(static::PAGINATION);
        }

        return $this->pagination;
    }

    /**
     * @module CompanyPage|CompanyBusinessUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePagination()
    {
        $this->assertPropertyIsSet(self::PAGINATION);

        return $this;
    }

    /**
     * @module CompanyPage|CompanyBusinessUnitGui|CompanyBusinessUnit
     *
     * @param bool|null $withoutExpanders
     *
     * @return $this
     */
    public function setWithoutExpanders($withoutExpanders)
    {
        $this->withoutExpanders = $withoutExpanders;
        $this->modifiedProperties[self::WITHOUT_EXPANDERS] = true;

        return $this;
    }

    /**
     * @module CompanyPage|CompanyBusinessUnitGui|CompanyBusinessUnit
     *
     * @return bool|null
     */
    public function getWithoutExpanders()
    {
        return $this->withoutExpanders;
    }

    /**
     * @module CompanyPage|CompanyBusinessUnitGui|CompanyBusinessUnit
     *
     * @param bool|null $withoutExpanders
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setWithoutExpandersOrFail($withoutExpanders)
    {
        if ($withoutExpanders === null) {
            $this->throwNullValueException(static::WITHOUT_EXPANDERS);
        }

        return $this->setWithoutExpanders($withoutExpanders);
    }

    /**
     * @module CompanyPage|CompanyBusinessUnitGui|CompanyBusinessUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getWithoutExpandersOrFail()
    {
        if ($this->withoutExpanders === null) {
            $this->throwNullValueException(static::WITHOUT_EXPANDERS);
        }

        return $this->withoutExpanders;
    }

    /**
     * @module CompanyPage|CompanyBusinessUnitGui|CompanyBusinessUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWithoutExpanders()
    {
        $this->assertPropertyIsSet(self::WITHOUT_EXPANDERS);

        return $this;
    }

    /**
     * @module ShoppingListPage|CompanyBusinessUnit
     *
     * @param array|null $companyBusinessUnitIds
     *
     * @return $this
     */
    public function setCompanyBusinessUnitIds(array $companyBusinessUnitIds = null)
    {
        if ($companyBusinessUnitIds === null) {
            $companyBusinessUnitIds = [];
        }

        $this->companyBusinessUnitIds = $companyBusinessUnitIds;
        $this->modifiedProperties[self::COMPANY_BUSINESS_UNIT_IDS] = true;

        return $this;
    }

    /**
     * @module ShoppingListPage|CompanyBusinessUnit
     *
     * @return array
     */
    public function getCompanyBusinessUnitIds()
    {
        return $this->companyBusinessUnitIds;
    }

    /**
     * @module ShoppingListPage|CompanyBusinessUnit
     *
     * @param mixed $companyBusinessUnitIds
     *
     * @return $this
     */
    public function addCompanyBusinessUnitIds($companyBusinessUnitIds)
    {
        $this->companyBusinessUnitIds[] = $companyBusinessUnitIds;
        $this->modifiedProperties[self::COMPANY_BUSINESS_UNIT_IDS] = true;

        return $this;
    }

    /**
     * @module ShoppingListPage|CompanyBusinessUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompanyBusinessUnitIds()
    {
        $this->assertPropertyIsSet(self::COMPANY_BUSINESS_UNIT_IDS);

        return $this;
    }

    /**
     * @module CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyBusinessUnitsRestApi
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
     * @module CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyBusinessUnitsRestApi
     *
     * @return int|null
     */
    public function getIdCompanyUser()
    {
        return $this->idCompanyUser;
    }

    /**
     * @module CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyBusinessUnitsRestApi
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
     * @module CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyBusinessUnitsRestApi
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
     * @module CompanyBusinessUnitGui|CompanyBusinessUnit|CompanyBusinessUnitsRestApi
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
     * @module CompanyBusinessUnitGui|CompanyBusinessUnit
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
     * @module CompanyBusinessUnitGui|CompanyBusinessUnit
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module CompanyBusinessUnitGui|CompanyBusinessUnit
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
     * @module CompanyBusinessUnitGui|CompanyBusinessUnit
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
     * @module CompanyBusinessUnitGui|CompanyBusinessUnit
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
                case 'idCompany':
                case 'withoutExpanders':
                case 'companyBusinessUnitIds':
                case 'idCompanyUser':
                case 'name':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'filter':
                case 'pagination':
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
                case 'idCompany':
                case 'withoutExpanders':
                case 'companyBusinessUnitIds':
                case 'idCompanyUser':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'filter':
                case 'pagination':
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
                case 'idCompany':
                case 'withoutExpanders':
                case 'companyBusinessUnitIds':
                case 'idCompanyUser':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'filter':
                case 'pagination':
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
            'idCompany' => $this->idCompany,
            'withoutExpanders' => $this->withoutExpanders,
            'companyBusinessUnitIds' => $this->companyBusinessUnitIds,
            'idCompanyUser' => $this->idCompanyUser,
            'name' => $this->name,
            'filter' => $this->filter,
            'pagination' => $this->pagination,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_company' => $this->idCompany,
            'without_expanders' => $this->withoutExpanders,
            'company_business_unit_ids' => $this->companyBusinessUnitIds,
            'id_company_user' => $this->idCompanyUser,
            'name' => $this->name,
            'filter' => $this->filter,
            'pagination' => $this->pagination,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_company' => $this->idCompany instanceof AbstractTransfer ? $this->idCompany->toArray(true, false) : $this->idCompany,
            'without_expanders' => $this->withoutExpanders instanceof AbstractTransfer ? $this->withoutExpanders->toArray(true, false) : $this->withoutExpanders,
            'company_business_unit_ids' => $this->companyBusinessUnitIds instanceof AbstractTransfer ? $this->companyBusinessUnitIds->toArray(true, false) : $this->companyBusinessUnitIds,
            'id_company_user' => $this->idCompanyUser instanceof AbstractTransfer ? $this->idCompanyUser->toArray(true, false) : $this->idCompanyUser,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'filter' => $this->filter instanceof AbstractTransfer ? $this->filter->toArray(true, false) : $this->filter,
            'pagination' => $this->pagination instanceof AbstractTransfer ? $this->pagination->toArray(true, false) : $this->pagination,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCompany' => $this->idCompany instanceof AbstractTransfer ? $this->idCompany->toArray(true, true) : $this->idCompany,
            'withoutExpanders' => $this->withoutExpanders instanceof AbstractTransfer ? $this->withoutExpanders->toArray(true, true) : $this->withoutExpanders,
            'companyBusinessUnitIds' => $this->companyBusinessUnitIds instanceof AbstractTransfer ? $this->companyBusinessUnitIds->toArray(true, true) : $this->companyBusinessUnitIds,
            'idCompanyUser' => $this->idCompanyUser instanceof AbstractTransfer ? $this->idCompanyUser->toArray(true, true) : $this->idCompanyUser,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'filter' => $this->filter instanceof AbstractTransfer ? $this->filter->toArray(true, true) : $this->filter,
            'pagination' => $this->pagination instanceof AbstractTransfer ? $this->pagination->toArray(true, true) : $this->pagination,
        ];
    }
}
