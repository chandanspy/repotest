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
class ShareDetailTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_COMPANY_USER = 'idCompanyUser';

    /**
     * @var string
     */
    public const CUSTOMER_NAME = 'customerName';

    /**
     * @var string
     */
    public const QUOTE_PERMISSION_GROUP = 'quotePermissionGroup';

    /**
     * @var string
     */
    public const COMPANY_USER = 'companyUser';

    /**
     * @var string
     */
    public const ID_QUOTE_COMPANY_USER = 'idQuoteCompanyUser';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var int|null
     */
    protected $idCompanyUser;

    /**
     * @var string|null
     */
    protected $customerName;

    /**
     * @var \Generated\Shared\Transfer\QuotePermissionGroupTransfer|null
     */
    protected $quotePermissionGroup;

    /**
     * @var \Generated\Shared\Transfer\CompanyUserTransfer|null
     */
    protected $companyUser;

    /**
     * @var int|null
     */
    protected $idQuoteCompanyUser;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_company_user' => 'idCompanyUser',
        'idCompanyUser' => 'idCompanyUser',
        'IdCompanyUser' => 'idCompanyUser',
        'customer_name' => 'customerName',
        'customerName' => 'customerName',
        'CustomerName' => 'customerName',
        'quote_permission_group' => 'quotePermissionGroup',
        'quotePermissionGroup' => 'quotePermissionGroup',
        'QuotePermissionGroup' => 'quotePermissionGroup',
        'company_user' => 'companyUser',
        'companyUser' => 'companyUser',
        'CompanyUser' => 'companyUser',
        'id_quote_company_user' => 'idQuoteCompanyUser',
        'idQuoteCompanyUser' => 'idQuoteCompanyUser',
        'IdQuoteCompanyUser' => 'idQuoteCompanyUser',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::CUSTOMER_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'customer_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::QUOTE_PERMISSION_GROUP => [
            'type' => 'Generated\Shared\Transfer\QuotePermissionGroupTransfer',
            'type_shim' => null,
            'name_underscore' => 'quote_permission_group',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COMPANY_USER => [
            'type' => 'Generated\Shared\Transfer\CompanyUserTransfer',
            'type_shim' => null,
            'name_underscore' => 'company_user',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_QUOTE_COMPANY_USER => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_quote_company_user',
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
    ];

    /**
     * @module SharedCartPage|QuoteApproval|SharedCart|SharedCartsRestApi
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
     * @module SharedCartPage|QuoteApproval|SharedCart|SharedCartsRestApi
     *
     * @return int|null
     */
    public function getIdCompanyUser()
    {
        return $this->idCompanyUser;
    }

    /**
     * @module SharedCartPage|QuoteApproval|SharedCart|SharedCartsRestApi
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
     * @module SharedCartPage|QuoteApproval|SharedCart|SharedCartsRestApi
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
     * @module SharedCartPage|QuoteApproval|SharedCart|SharedCartsRestApi
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
     * @module SharedCartPage|SharedCart
     *
     * @param string|null $customerName
     *
     * @return $this
     */
    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;
        $this->modifiedProperties[self::CUSTOMER_NAME] = true;

        return $this;
    }

    /**
     * @module SharedCartPage|SharedCart
     *
     * @return string|null
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * @module SharedCartPage|SharedCart
     *
     * @param string|null $customerName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCustomerNameOrFail($customerName)
    {
        if ($customerName === null) {
            $this->throwNullValueException(static::CUSTOMER_NAME);
        }

        return $this->setCustomerName($customerName);
    }

    /**
     * @module SharedCartPage|SharedCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCustomerNameOrFail()
    {
        if ($this->customerName === null) {
            $this->throwNullValueException(static::CUSTOMER_NAME);
        }

        return $this->customerName;
    }

    /**
     * @module SharedCartPage|SharedCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCustomerName()
    {
        $this->assertPropertyIsSet(self::CUSTOMER_NAME);

        return $this;
    }

    /**
     * @module CartPermissionGroupsRestApi|QuoteApproval|SharedCart|SharedCartsRestApi
     *
     * @param \Generated\Shared\Transfer\QuotePermissionGroupTransfer|null $quotePermissionGroup
     *
     * @return $this
     */
    public function setQuotePermissionGroup(QuotePermissionGroupTransfer $quotePermissionGroup = null)
    {
        $this->quotePermissionGroup = $quotePermissionGroup;
        $this->modifiedProperties[self::QUOTE_PERMISSION_GROUP] = true;

        return $this;
    }

    /**
     * @module CartPermissionGroupsRestApi|QuoteApproval|SharedCart|SharedCartsRestApi
     *
     * @return \Generated\Shared\Transfer\QuotePermissionGroupTransfer|null
     */
    public function getQuotePermissionGroup()
    {
        return $this->quotePermissionGroup;
    }

    /**
     * @module CartPermissionGroupsRestApi|QuoteApproval|SharedCart|SharedCartsRestApi
     *
     * @param \Generated\Shared\Transfer\QuotePermissionGroupTransfer $quotePermissionGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuotePermissionGroupOrFail(QuotePermissionGroupTransfer $quotePermissionGroup)
    {
        return $this->setQuotePermissionGroup($quotePermissionGroup);
    }

    /**
     * @module CartPermissionGroupsRestApi|QuoteApproval|SharedCart|SharedCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\QuotePermissionGroupTransfer
     */
    public function getQuotePermissionGroupOrFail()
    {
        if ($this->quotePermissionGroup === null) {
            $this->throwNullValueException(static::QUOTE_PERMISSION_GROUP);
        }

        return $this->quotePermissionGroup;
    }

    /**
     * @module CartPermissionGroupsRestApi|QuoteApproval|SharedCart|SharedCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuotePermissionGroup()
    {
        $this->assertPropertyIsSet(self::QUOTE_PERMISSION_GROUP);

        return $this;
    }

    /**
     * @module CompanyUsersRestApi|SharedCart|SharedCartsRestApi
     *
     * @param \Generated\Shared\Transfer\CompanyUserTransfer|null $companyUser
     *
     * @return $this
     */
    public function setCompanyUser(CompanyUserTransfer $companyUser = null)
    {
        $this->companyUser = $companyUser;
        $this->modifiedProperties[self::COMPANY_USER] = true;

        return $this;
    }

    /**
     * @module CompanyUsersRestApi|SharedCart|SharedCartsRestApi
     *
     * @return \Generated\Shared\Transfer\CompanyUserTransfer|null
     */
    public function getCompanyUser()
    {
        return $this->companyUser;
    }

    /**
     * @module CompanyUsersRestApi|SharedCart|SharedCartsRestApi
     *
     * @param \Generated\Shared\Transfer\CompanyUserTransfer $companyUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCompanyUserOrFail(CompanyUserTransfer $companyUser)
    {
        return $this->setCompanyUser($companyUser);
    }

    /**
     * @module CompanyUsersRestApi|SharedCart|SharedCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CompanyUserTransfer
     */
    public function getCompanyUserOrFail()
    {
        if ($this->companyUser === null) {
            $this->throwNullValueException(static::COMPANY_USER);
        }

        return $this->companyUser;
    }

    /**
     * @module CompanyUsersRestApi|SharedCart|SharedCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompanyUser()
    {
        $this->assertPropertyIsSet(self::COMPANY_USER);

        return $this;
    }

    /**
     * @module SharedCart|SharedCartsRestApi
     *
     * @param int|null $idQuoteCompanyUser
     *
     * @return $this
     */
    public function setIdQuoteCompanyUser($idQuoteCompanyUser)
    {
        $this->idQuoteCompanyUser = $idQuoteCompanyUser;
        $this->modifiedProperties[self::ID_QUOTE_COMPANY_USER] = true;

        return $this;
    }

    /**
     * @module SharedCart|SharedCartsRestApi
     *
     * @return int|null
     */
    public function getIdQuoteCompanyUser()
    {
        return $this->idQuoteCompanyUser;
    }

    /**
     * @module SharedCart|SharedCartsRestApi
     *
     * @param int|null $idQuoteCompanyUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdQuoteCompanyUserOrFail($idQuoteCompanyUser)
    {
        if ($idQuoteCompanyUser === null) {
            $this->throwNullValueException(static::ID_QUOTE_COMPANY_USER);
        }

        return $this->setIdQuoteCompanyUser($idQuoteCompanyUser);
    }

    /**
     * @module SharedCart|SharedCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdQuoteCompanyUserOrFail()
    {
        if ($this->idQuoteCompanyUser === null) {
            $this->throwNullValueException(static::ID_QUOTE_COMPANY_USER);
        }

        return $this->idQuoteCompanyUser;
    }

    /**
     * @module SharedCart|SharedCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdQuoteCompanyUser()
    {
        $this->assertPropertyIsSet(self::ID_QUOTE_COMPANY_USER);

        return $this;
    }

    /**
     * @module SharedCartsRestApi
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
     * @module SharedCartsRestApi
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @module SharedCartsRestApi
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
     * @module SharedCartsRestApi
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
     * @module SharedCartsRestApi
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
                case 'idCompanyUser':
                case 'customerName':
                case 'idQuoteCompanyUser':
                case 'uuid':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'quotePermissionGroup':
                case 'companyUser':
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
                case 'idCompanyUser':
                case 'customerName':
                case 'idQuoteCompanyUser':
                case 'uuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'quotePermissionGroup':
                case 'companyUser':
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
                case 'idCompanyUser':
                case 'customerName':
                case 'idQuoteCompanyUser':
                case 'uuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'quotePermissionGroup':
                case 'companyUser':
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
            'idCompanyUser' => $this->idCompanyUser,
            'customerName' => $this->customerName,
            'idQuoteCompanyUser' => $this->idQuoteCompanyUser,
            'uuid' => $this->uuid,
            'quotePermissionGroup' => $this->quotePermissionGroup,
            'companyUser' => $this->companyUser,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_company_user' => $this->idCompanyUser,
            'customer_name' => $this->customerName,
            'id_quote_company_user' => $this->idQuoteCompanyUser,
            'uuid' => $this->uuid,
            'quote_permission_group' => $this->quotePermissionGroup,
            'company_user' => $this->companyUser,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_company_user' => $this->idCompanyUser instanceof AbstractTransfer ? $this->idCompanyUser->toArray(true, false) : $this->idCompanyUser,
            'customer_name' => $this->customerName instanceof AbstractTransfer ? $this->customerName->toArray(true, false) : $this->customerName,
            'id_quote_company_user' => $this->idQuoteCompanyUser instanceof AbstractTransfer ? $this->idQuoteCompanyUser->toArray(true, false) : $this->idQuoteCompanyUser,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'quote_permission_group' => $this->quotePermissionGroup instanceof AbstractTransfer ? $this->quotePermissionGroup->toArray(true, false) : $this->quotePermissionGroup,
            'company_user' => $this->companyUser instanceof AbstractTransfer ? $this->companyUser->toArray(true, false) : $this->companyUser,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCompanyUser' => $this->idCompanyUser instanceof AbstractTransfer ? $this->idCompanyUser->toArray(true, true) : $this->idCompanyUser,
            'customerName' => $this->customerName instanceof AbstractTransfer ? $this->customerName->toArray(true, true) : $this->customerName,
            'idQuoteCompanyUser' => $this->idQuoteCompanyUser instanceof AbstractTransfer ? $this->idQuoteCompanyUser->toArray(true, true) : $this->idQuoteCompanyUser,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'quotePermissionGroup' => $this->quotePermissionGroup instanceof AbstractTransfer ? $this->quotePermissionGroup->toArray(true, true) : $this->quotePermissionGroup,
            'companyUser' => $this->companyUser instanceof AbstractTransfer ? $this->companyUser->toArray(true, true) : $this->companyUser,
        ];
    }
}
