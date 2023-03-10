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
class CompanyUserCollectionTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const COMPANY_USERS = 'companyUsers';

    /**
     * @var string
     */
    public const PAGINATION = 'pagination';

    /**
     * @var string
     */
    public const FILTER = 'filter';

    /**
     * @var string
     */
    public const TOTAL = 'total';

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\CompanyUserTransfer[]
     */
    protected $companyUsers;

    /**
     * @var \Generated\Shared\Transfer\PaginationTransfer|null
     */
    protected $pagination;

    /**
     * @var \Generated\Shared\Transfer\FilterTransfer|null
     */
    protected $filter;

    /**
     * @var int|null
     */
    protected $total;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'company_users' => 'companyUsers',
        'companyUsers' => 'companyUsers',
        'CompanyUsers' => 'companyUsers',
        'pagination' => 'pagination',
        'Pagination' => 'pagination',
        'filter' => 'filter',
        'Filter' => 'filter',
        'total' => 'total',
        'Total' => 'total',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::COMPANY_USERS => [
            'type' => 'Generated\Shared\Transfer\CompanyUserTransfer',
            'type_shim' => null,
            'name_underscore' => 'company_users',
            'is_collection' => true,
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
        self::TOTAL => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'total',
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
     * @module CompanyPage|CompanyUserAgentWidget|QuoteApprovalWidget|SharedCartPage|ShoppingListPage|BusinessOnBehalf|CompanyRole|CompanyUserAgent|CompanyUserStorage|CompanyUser|CompanyUsersRestApi|QuoteApproval|QuoteRequest
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\CompanyUserTransfer[] $companyUsers
     *
     * @return $this
     */
    public function setCompanyUsers(ArrayObject $companyUsers)
    {
        $this->companyUsers = $companyUsers;
        $this->modifiedProperties[self::COMPANY_USERS] = true;

        return $this;
    }

    /**
     * @module CompanyPage|CompanyUserAgentWidget|QuoteApprovalWidget|SharedCartPage|ShoppingListPage|BusinessOnBehalf|CompanyRole|CompanyUserAgent|CompanyUserStorage|CompanyUser|CompanyUsersRestApi|QuoteApproval|QuoteRequest
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\CompanyUserTransfer[]
     */
    public function getCompanyUsers()
    {
        return $this->companyUsers;
    }

    /**
     * @module CompanyPage|CompanyUserAgentWidget|QuoteApprovalWidget|SharedCartPage|ShoppingListPage|BusinessOnBehalf|CompanyRole|CompanyUserAgent|CompanyUserStorage|CompanyUser|CompanyUsersRestApi|QuoteApproval|QuoteRequest
     *
     * @param \Generated\Shared\Transfer\CompanyUserTransfer $companyUser
     *
     * @return $this
     */
    public function addCompanyUser(CompanyUserTransfer $companyUser)
    {
        $this->companyUsers[] = $companyUser;
        $this->modifiedProperties[self::COMPANY_USERS] = true;

        return $this;
    }

    /**
     * @module CompanyPage|CompanyUserAgentWidget|QuoteApprovalWidget|SharedCartPage|ShoppingListPage|BusinessOnBehalf|CompanyRole|CompanyUserAgent|CompanyUserStorage|CompanyUser|CompanyUsersRestApi|QuoteApproval|QuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompanyUsers()
    {
        $this->assertCollectionPropertyIsSet(self::COMPANY_USERS);

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
     * @module CompanyUsersRestApi
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
     * @module CompanyUsersRestApi
     *
     * @return \Generated\Shared\Transfer\FilterTransfer|null
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * @module CompanyUsersRestApi
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
     * @module CompanyUsersRestApi
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
     * @module CompanyUsersRestApi
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
     * @module CompanyUsersRestApi
     *
     * @param int|null $total
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->total = $total;
        $this->modifiedProperties[self::TOTAL] = true;

        return $this;
    }

    /**
     * @module CompanyUsersRestApi
     *
     * @return int|null
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @module CompanyUsersRestApi
     *
     * @param int|null $total
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTotalOrFail($total)
    {
        if ($total === null) {
            $this->throwNullValueException(static::TOTAL);
        }

        return $this->setTotal($total);
    }

    /**
     * @module CompanyUsersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getTotalOrFail()
    {
        if ($this->total === null) {
            $this->throwNullValueException(static::TOTAL);
        }

        return $this->total;
    }

    /**
     * @module CompanyUsersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTotal()
    {
        $this->assertPropertyIsSet(self::TOTAL);

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
                case 'total':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'pagination':
                case 'filter':
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
                case 'companyUsers':
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
                case 'total':
                    $values[$arrayKey] = $value;

                    break;
                case 'pagination':
                case 'filter':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'companyUsers':
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
                case 'total':
                    $values[$arrayKey] = $value;

                    break;
                case 'pagination':
                case 'filter':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'companyUsers':
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
        $this->companyUsers = $this->companyUsers ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'total' => $this->total,
            'pagination' => $this->pagination,
            'filter' => $this->filter,
            'companyUsers' => $this->companyUsers,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'total' => $this->total,
            'pagination' => $this->pagination,
            'filter' => $this->filter,
            'company_users' => $this->companyUsers,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'total' => $this->total instanceof AbstractTransfer ? $this->total->toArray(true, false) : $this->total,
            'pagination' => $this->pagination instanceof AbstractTransfer ? $this->pagination->toArray(true, false) : $this->pagination,
            'filter' => $this->filter instanceof AbstractTransfer ? $this->filter->toArray(true, false) : $this->filter,
            'company_users' => $this->companyUsers instanceof AbstractTransfer ? $this->companyUsers->toArray(true, false) : $this->addValuesToCollection($this->companyUsers, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'total' => $this->total instanceof AbstractTransfer ? $this->total->toArray(true, true) : $this->total,
            'pagination' => $this->pagination instanceof AbstractTransfer ? $this->pagination->toArray(true, true) : $this->pagination,
            'filter' => $this->filter instanceof AbstractTransfer ? $this->filter->toArray(true, true) : $this->filter,
            'companyUsers' => $this->companyUsers instanceof AbstractTransfer ? $this->companyUsers->toArray(true, true) : $this->addValuesToCollection($this->companyUsers, true, true),
        ];
    }
}
