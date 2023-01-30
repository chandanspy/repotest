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
class CompanyUserInvitationCriteriaFilterTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const FK_COMPANY_USER = 'fkCompanyUser';

    /**
     * @var string
     */
    public const FK_COMPANY = 'fkCompany';

    /**
     * @var string
     */
    public const COMPANY_USER_INVITATION_STATUS_KEY_NOT_IN = 'companyUserInvitationStatusKeyNotIn';

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
    public const COMPANY_USER_INVITATION_STATUS_KEY_IN = 'companyUserInvitationStatusKeyIn';

    /**
     * @var int|null
     */
    protected $fkCompanyUser;

    /**
     * @var int|null
     */
    protected $fkCompany;

    /**
     * @var array
     */
    protected $companyUserInvitationStatusKeyNotIn = [];

    /**
     * @var \Generated\Shared\Transfer\FilterTransfer|null
     */
    protected $filter;

    /**
     * @var \Generated\Shared\Transfer\PaginationTransfer|null
     */
    protected $pagination;

    /**
     * @var array
     */
    protected $companyUserInvitationStatusKeyIn = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'fk_company_user' => 'fkCompanyUser',
        'fkCompanyUser' => 'fkCompanyUser',
        'FkCompanyUser' => 'fkCompanyUser',
        'fk_company' => 'fkCompany',
        'fkCompany' => 'fkCompany',
        'FkCompany' => 'fkCompany',
        'company_user_invitation_status_key_not_in' => 'companyUserInvitationStatusKeyNotIn',
        'companyUserInvitationStatusKeyNotIn' => 'companyUserInvitationStatusKeyNotIn',
        'CompanyUserInvitationStatusKeyNotIn' => 'companyUserInvitationStatusKeyNotIn',
        'filter' => 'filter',
        'Filter' => 'filter',
        'pagination' => 'pagination',
        'Pagination' => 'pagination',
        'company_user_invitation_status_key_in' => 'companyUserInvitationStatusKeyIn',
        'companyUserInvitationStatusKeyIn' => 'companyUserInvitationStatusKeyIn',
        'CompanyUserInvitationStatusKeyIn' => 'companyUserInvitationStatusKeyIn',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::FK_COMPANY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_company',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COMPANY_USER_INVITATION_STATUS_KEY_NOT_IN => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'company_user_invitation_status_key_not_in',
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
        self::COMPANY_USER_INVITATION_STATUS_KEY_IN => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'company_user_invitation_status_key_in',
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
     * @module CompanyUserInvitationPage|CompanyUserInvitation
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
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @return int|null
     */
    public function getFkCompanyUser()
    {
        return $this->fkCompanyUser;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
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
     * @module CompanyUserInvitationPage|CompanyUserInvitation
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
     * @module CompanyUserInvitationPage|CompanyUserInvitation
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
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @param int|null $fkCompany
     *
     * @return $this
     */
    public function setFkCompany($fkCompany)
    {
        $this->fkCompany = $fkCompany;
        $this->modifiedProperties[self::FK_COMPANY] = true;

        return $this;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @return int|null
     */
    public function getFkCompany()
    {
        return $this->fkCompany;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @param int|null $fkCompany
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCompanyOrFail($fkCompany)
    {
        if ($fkCompany === null) {
            $this->throwNullValueException(static::FK_COMPANY);
        }

        return $this->setFkCompany($fkCompany);
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkCompanyOrFail()
    {
        if ($this->fkCompany === null) {
            $this->throwNullValueException(static::FK_COMPANY);
        }

        return $this->fkCompany;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCompany()
    {
        $this->assertPropertyIsSet(self::FK_COMPANY);

        return $this;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @param array|null $companyUserInvitationStatusKeyNotIn
     *
     * @return $this
     */
    public function setCompanyUserInvitationStatusKeyNotIn(array $companyUserInvitationStatusKeyNotIn = null)
    {
        if ($companyUserInvitationStatusKeyNotIn === null) {
            $companyUserInvitationStatusKeyNotIn = [];
        }

        $this->companyUserInvitationStatusKeyNotIn = $companyUserInvitationStatusKeyNotIn;
        $this->modifiedProperties[self::COMPANY_USER_INVITATION_STATUS_KEY_NOT_IN] = true;

        return $this;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @return array
     */
    public function getCompanyUserInvitationStatusKeyNotIn()
    {
        return $this->companyUserInvitationStatusKeyNotIn;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @param mixed $companyUserInvitationStatusKeyNotIn
     *
     * @return $this
     */
    public function addCompanyUserInvitationStatusKeyNotIn($companyUserInvitationStatusKeyNotIn)
    {
        $this->companyUserInvitationStatusKeyNotIn[] = $companyUserInvitationStatusKeyNotIn;
        $this->modifiedProperties[self::COMPANY_USER_INVITATION_STATUS_KEY_NOT_IN] = true;

        return $this;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompanyUserInvitationStatusKeyNotIn()
    {
        $this->assertPropertyIsSet(self::COMPANY_USER_INVITATION_STATUS_KEY_NOT_IN);

        return $this;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
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
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @return \Generated\Shared\Transfer\FilterTransfer|null
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
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
     * @module CompanyUserInvitationPage|CompanyUserInvitation
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
     * @module CompanyUserInvitationPage|CompanyUserInvitation
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
     * @module CompanyUserInvitationPage|CompanyUserInvitation
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
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @return \Generated\Shared\Transfer\PaginationTransfer|null
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
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
     * @module CompanyUserInvitationPage|CompanyUserInvitation
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
     * @module CompanyUserInvitationPage|CompanyUserInvitation
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
     * @module CompanyUserInvitation
     *
     * @param array|null $companyUserInvitationStatusKeyIn
     *
     * @return $this
     */
    public function setCompanyUserInvitationStatusKeyIn(array $companyUserInvitationStatusKeyIn = null)
    {
        if ($companyUserInvitationStatusKeyIn === null) {
            $companyUserInvitationStatusKeyIn = [];
        }

        $this->companyUserInvitationStatusKeyIn = $companyUserInvitationStatusKeyIn;
        $this->modifiedProperties[self::COMPANY_USER_INVITATION_STATUS_KEY_IN] = true;

        return $this;
    }

    /**
     * @module CompanyUserInvitation
     *
     * @return array
     */
    public function getCompanyUserInvitationStatusKeyIn()
    {
        return $this->companyUserInvitationStatusKeyIn;
    }

    /**
     * @module CompanyUserInvitation
     *
     * @param mixed $companyUserInvitationStatusKeyIn
     *
     * @return $this
     */
    public function addCompanyUserInvitationStatusKeyIn($companyUserInvitationStatusKeyIn)
    {
        $this->companyUserInvitationStatusKeyIn[] = $companyUserInvitationStatusKeyIn;
        $this->modifiedProperties[self::COMPANY_USER_INVITATION_STATUS_KEY_IN] = true;

        return $this;
    }

    /**
     * @module CompanyUserInvitation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompanyUserInvitationStatusKeyIn()
    {
        $this->assertPropertyIsSet(self::COMPANY_USER_INVITATION_STATUS_KEY_IN);

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
                case 'fkCompanyUser':
                case 'fkCompany':
                case 'companyUserInvitationStatusKeyNotIn':
                case 'companyUserInvitationStatusKeyIn':
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
                case 'fkCompanyUser':
                case 'fkCompany':
                case 'companyUserInvitationStatusKeyNotIn':
                case 'companyUserInvitationStatusKeyIn':
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
                case 'fkCompanyUser':
                case 'fkCompany':
                case 'companyUserInvitationStatusKeyNotIn':
                case 'companyUserInvitationStatusKeyIn':
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
            'fkCompanyUser' => $this->fkCompanyUser,
            'fkCompany' => $this->fkCompany,
            'companyUserInvitationStatusKeyNotIn' => $this->companyUserInvitationStatusKeyNotIn,
            'companyUserInvitationStatusKeyIn' => $this->companyUserInvitationStatusKeyIn,
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
            'fk_company_user' => $this->fkCompanyUser,
            'fk_company' => $this->fkCompany,
            'company_user_invitation_status_key_not_in' => $this->companyUserInvitationStatusKeyNotIn,
            'company_user_invitation_status_key_in' => $this->companyUserInvitationStatusKeyIn,
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
            'fk_company_user' => $this->fkCompanyUser instanceof AbstractTransfer ? $this->fkCompanyUser->toArray(true, false) : $this->fkCompanyUser,
            'fk_company' => $this->fkCompany instanceof AbstractTransfer ? $this->fkCompany->toArray(true, false) : $this->fkCompany,
            'company_user_invitation_status_key_not_in' => $this->companyUserInvitationStatusKeyNotIn instanceof AbstractTransfer ? $this->companyUserInvitationStatusKeyNotIn->toArray(true, false) : $this->companyUserInvitationStatusKeyNotIn,
            'company_user_invitation_status_key_in' => $this->companyUserInvitationStatusKeyIn instanceof AbstractTransfer ? $this->companyUserInvitationStatusKeyIn->toArray(true, false) : $this->companyUserInvitationStatusKeyIn,
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
            'fkCompanyUser' => $this->fkCompanyUser instanceof AbstractTransfer ? $this->fkCompanyUser->toArray(true, true) : $this->fkCompanyUser,
            'fkCompany' => $this->fkCompany instanceof AbstractTransfer ? $this->fkCompany->toArray(true, true) : $this->fkCompany,
            'companyUserInvitationStatusKeyNotIn' => $this->companyUserInvitationStatusKeyNotIn instanceof AbstractTransfer ? $this->companyUserInvitationStatusKeyNotIn->toArray(true, true) : $this->companyUserInvitationStatusKeyNotIn,
            'companyUserInvitationStatusKeyIn' => $this->companyUserInvitationStatusKeyIn instanceof AbstractTransfer ? $this->companyUserInvitationStatusKeyIn->toArray(true, true) : $this->companyUserInvitationStatusKeyIn,
            'filter' => $this->filter instanceof AbstractTransfer ? $this->filter->toArray(true, true) : $this->filter,
            'pagination' => $this->pagination instanceof AbstractTransfer ? $this->pagination->toArray(true, true) : $this->pagination,
        ];
    }
}
