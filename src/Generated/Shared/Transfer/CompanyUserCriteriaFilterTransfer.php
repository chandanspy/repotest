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
class CompanyUserCriteriaFilterTransfer extends AbstractTransfer
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
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const COMPANY_USER_IDS = 'companyUserIds';

    /**
     * @var string
     */
    public const COMPANY_BUSINESS_UNIT_UUIDS = 'companyBusinessUnitUuids';

    /**
     * @var string
     */
    public const COMPANY_ROLES_UUIDS = 'companyRolesUuids';

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
    protected $isActive;

    /**
     * @var array
     */
    protected $companyUserIds = [];

    /**
     * @var string[]
     */
    protected $companyBusinessUnitUuids = [];

    /**
     * @var string[]
     */
    protected $companyRolesUuids = [];

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
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'company_user_ids' => 'companyUserIds',
        'companyUserIds' => 'companyUserIds',
        'CompanyUserIds' => 'companyUserIds',
        'company_business_unit_uuids' => 'companyBusinessUnitUuids',
        'companyBusinessUnitUuids' => 'companyBusinessUnitUuids',
        'CompanyBusinessUnitUuids' => 'companyBusinessUnitUuids',
        'company_roles_uuids' => 'companyRolesUuids',
        'companyRolesUuids' => 'companyRolesUuids',
        'CompanyRolesUuids' => 'companyRolesUuids',
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
        self::IS_ACTIVE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_active',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COMPANY_USER_IDS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'company_user_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COMPANY_BUSINESS_UNIT_UUIDS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'company_business_unit_uuids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COMPANY_ROLES_UUIDS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'company_roles_uuids',
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
     * @module CompanyPage|SharedCartPage|ShoppingListPage|CompanyUser|CompanyUsersRestApi
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
     * @module CompanyPage|SharedCartPage|ShoppingListPage|CompanyUser|CompanyUsersRestApi
     *
     * @return int|null
     */
    public function getIdCompany()
    {
        return $this->idCompany;
    }

    /**
     * @module CompanyPage|SharedCartPage|ShoppingListPage|CompanyUser|CompanyUsersRestApi
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
     * @module CompanyPage|SharedCartPage|ShoppingListPage|CompanyUser|CompanyUsersRestApi
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
     * @module CompanyPage|SharedCartPage|ShoppingListPage|CompanyUser|CompanyUsersRestApi
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
     * @module CompanyPage|CompanyUserStorage|CompanyUser|CompanyUsersRestApi
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
     * @module CompanyPage|CompanyUserStorage|CompanyUser|CompanyUsersRestApi
     *
     * @return \Generated\Shared\Transfer\FilterTransfer|null
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * @module CompanyPage|CompanyUserStorage|CompanyUser|CompanyUsersRestApi
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
     * @module CompanyPage|CompanyUserStorage|CompanyUser|CompanyUsersRestApi
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
     * @module CompanyPage|CompanyUserStorage|CompanyUser|CompanyUsersRestApi
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
     * @module CompanyPage|CompanyUser
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
     * @module CompanyPage|CompanyUser
     *
     * @return \Generated\Shared\Transfer\PaginationTransfer|null
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    /**
     * @module CompanyPage|CompanyUser
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
     * @module CompanyPage|CompanyUser
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
     * @module CompanyPage|CompanyUser
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
     * @module SharedCartPage|ShoppingListPage|CompanyUser|CompanyUsersRestApi
     *
     * @param bool|null $isActive
     *
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        $this->modifiedProperties[self::IS_ACTIVE] = true;

        return $this;
    }

    /**
     * @module SharedCartPage|ShoppingListPage|CompanyUser|CompanyUsersRestApi
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module SharedCartPage|ShoppingListPage|CompanyUser|CompanyUsersRestApi
     *
     * @param bool|null $isActive
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsActiveOrFail($isActive)
    {
        if ($isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->setIsActive($isActive);
    }

    /**
     * @module SharedCartPage|ShoppingListPage|CompanyUser|CompanyUsersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsActiveOrFail()
    {
        if ($this->isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->isActive;
    }

    /**
     * @module SharedCartPage|ShoppingListPage|CompanyUser|CompanyUsersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsActive()
    {
        $this->assertPropertyIsSet(self::IS_ACTIVE);

        return $this;
    }

    /**
     * @module ShoppingListPage|CompanyUser|CompanyUsersRestApi|QuoteApproval|QuoteRequest
     *
     * @param array|null $companyUserIds
     *
     * @return $this
     */
    public function setCompanyUserIds(array $companyUserIds = null)
    {
        if ($companyUserIds === null) {
            $companyUserIds = [];
        }

        $this->companyUserIds = $companyUserIds;
        $this->modifiedProperties[self::COMPANY_USER_IDS] = true;

        return $this;
    }

    /**
     * @module ShoppingListPage|CompanyUser|CompanyUsersRestApi|QuoteApproval|QuoteRequest
     *
     * @return array
     */
    public function getCompanyUserIds()
    {
        return $this->companyUserIds;
    }

    /**
     * @module ShoppingListPage|CompanyUser|CompanyUsersRestApi|QuoteApproval|QuoteRequest
     *
     * @param mixed $companyUserIds
     *
     * @return $this
     */
    public function addCompanyUserIds($companyUserIds)
    {
        $this->companyUserIds[] = $companyUserIds;
        $this->modifiedProperties[self::COMPANY_USER_IDS] = true;

        return $this;
    }

    /**
     * @module ShoppingListPage|CompanyUser|CompanyUsersRestApi|QuoteApproval|QuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompanyUserIds()
    {
        $this->assertPropertyIsSet(self::COMPANY_USER_IDS);

        return $this;
    }

    /**
     * @module CompanyUsersRestApi
     *
     * @param string[]|null $companyBusinessUnitUuids
     *
     * @return $this
     */
    public function setCompanyBusinessUnitUuids(array $companyBusinessUnitUuids = null)
    {
        if ($companyBusinessUnitUuids === null) {
            $companyBusinessUnitUuids = [];
        }

        $this->companyBusinessUnitUuids = $companyBusinessUnitUuids;
        $this->modifiedProperties[self::COMPANY_BUSINESS_UNIT_UUIDS] = true;

        return $this;
    }

    /**
     * @module CompanyUsersRestApi
     *
     * @return string[]
     */
    public function getCompanyBusinessUnitUuids()
    {
        return $this->companyBusinessUnitUuids;
    }

    /**
     * @module CompanyUsersRestApi
     *
     * @param string $companyBusinessUnitUuids
     *
     * @return $this
     */
    public function addCompanyBusinessUnitUuids($companyBusinessUnitUuids)
    {
        $this->companyBusinessUnitUuids[] = $companyBusinessUnitUuids;
        $this->modifiedProperties[self::COMPANY_BUSINESS_UNIT_UUIDS] = true;

        return $this;
    }

    /**
     * @module CompanyUsersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompanyBusinessUnitUuids()
    {
        $this->assertPropertyIsSet(self::COMPANY_BUSINESS_UNIT_UUIDS);

        return $this;
    }

    /**
     * @module CompanyUsersRestApi
     *
     * @param string[]|null $companyRolesUuids
     *
     * @return $this
     */
    public function setCompanyRolesUuids(array $companyRolesUuids = null)
    {
        if ($companyRolesUuids === null) {
            $companyRolesUuids = [];
        }

        $this->companyRolesUuids = $companyRolesUuids;
        $this->modifiedProperties[self::COMPANY_ROLES_UUIDS] = true;

        return $this;
    }

    /**
     * @module CompanyUsersRestApi
     *
     * @return string[]
     */
    public function getCompanyRolesUuids()
    {
        return $this->companyRolesUuids;
    }

    /**
     * @module CompanyUsersRestApi
     *
     * @param string $companyRolesUuids
     *
     * @return $this
     */
    public function addCompanyRolesUuids($companyRolesUuids)
    {
        $this->companyRolesUuids[] = $companyRolesUuids;
        $this->modifiedProperties[self::COMPANY_ROLES_UUIDS] = true;

        return $this;
    }

    /**
     * @module CompanyUsersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompanyRolesUuids()
    {
        $this->assertPropertyIsSet(self::COMPANY_ROLES_UUIDS);

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
                case 'isActive':
                case 'companyUserIds':
                case 'companyBusinessUnitUuids':
                case 'companyRolesUuids':
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
                case 'isActive':
                case 'companyUserIds':
                case 'companyBusinessUnitUuids':
                case 'companyRolesUuids':
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
                case 'isActive':
                case 'companyUserIds':
                case 'companyBusinessUnitUuids':
                case 'companyRolesUuids':
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
            'isActive' => $this->isActive,
            'companyUserIds' => $this->companyUserIds,
            'companyBusinessUnitUuids' => $this->companyBusinessUnitUuids,
            'companyRolesUuids' => $this->companyRolesUuids,
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
            'is_active' => $this->isActive,
            'company_user_ids' => $this->companyUserIds,
            'company_business_unit_uuids' => $this->companyBusinessUnitUuids,
            'company_roles_uuids' => $this->companyRolesUuids,
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
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'company_user_ids' => $this->companyUserIds instanceof AbstractTransfer ? $this->companyUserIds->toArray(true, false) : $this->companyUserIds,
            'company_business_unit_uuids' => $this->companyBusinessUnitUuids instanceof AbstractTransfer ? $this->companyBusinessUnitUuids->toArray(true, false) : $this->companyBusinessUnitUuids,
            'company_roles_uuids' => $this->companyRolesUuids instanceof AbstractTransfer ? $this->companyRolesUuids->toArray(true, false) : $this->companyRolesUuids,
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
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'companyUserIds' => $this->companyUserIds instanceof AbstractTransfer ? $this->companyUserIds->toArray(true, true) : $this->companyUserIds,
            'companyBusinessUnitUuids' => $this->companyBusinessUnitUuids instanceof AbstractTransfer ? $this->companyBusinessUnitUuids->toArray(true, true) : $this->companyBusinessUnitUuids,
            'companyRolesUuids' => $this->companyRolesUuids instanceof AbstractTransfer ? $this->companyRolesUuids->toArray(true, true) : $this->companyRolesUuids,
            'filter' => $this->filter instanceof AbstractTransfer ? $this->filter->toArray(true, true) : $this->filter,
            'pagination' => $this->pagination instanceof AbstractTransfer ? $this->pagination->toArray(true, true) : $this->pagination,
        ];
    }
}
