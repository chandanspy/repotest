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
class QuoteRequestFilterTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const QUOTE_REQUEST_REFERENCE = 'quoteRequestReference';

    /**
     * @var string
     */
    public const PAGINATION = 'pagination';

    /**
     * @var string
     */
    public const WITH_HIDDEN = 'withHidden';

    /**
     * @var string
     */
    public const WITH_VERSIONS = 'withVersions';

    /**
     * @var string
     */
    public const ID_COMPANY_USER = 'idCompanyUser';

    /**
     * @var string
     */
    public const COMPANY_USER = 'companyUser';

    /**
     * @var string
     */
    public const EXCLUDED_STATUSES = 'excludedStatuses';

    /**
     * @var string
     */
    public const ID_QUOTE_REQUEST = 'idQuoteRequest';

    /**
     * @var string|null
     */
    protected $quoteRequestReference;

    /**
     * @var \Generated\Shared\Transfer\PaginationTransfer|null
     */
    protected $pagination;

    /**
     * @var bool|null
     */
    protected $withHidden;

    /**
     * @var bool|null
     */
    protected $withVersions;

    /**
     * @var int|null
     */
    protected $idCompanyUser;

    /**
     * @var \Generated\Shared\Transfer\CompanyUserTransfer|null
     */
    protected $companyUser;

    /**
     * @var array
     */
    protected $excludedStatuses = [];

    /**
     * @var int|null
     */
    protected $idQuoteRequest;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'quote_request_reference' => 'quoteRequestReference',
        'quoteRequestReference' => 'quoteRequestReference',
        'QuoteRequestReference' => 'quoteRequestReference',
        'pagination' => 'pagination',
        'Pagination' => 'pagination',
        'with_hidden' => 'withHidden',
        'withHidden' => 'withHidden',
        'WithHidden' => 'withHidden',
        'with_versions' => 'withVersions',
        'withVersions' => 'withVersions',
        'WithVersions' => 'withVersions',
        'id_company_user' => 'idCompanyUser',
        'idCompanyUser' => 'idCompanyUser',
        'IdCompanyUser' => 'idCompanyUser',
        'company_user' => 'companyUser',
        'companyUser' => 'companyUser',
        'CompanyUser' => 'companyUser',
        'excluded_statuses' => 'excludedStatuses',
        'excludedStatuses' => 'excludedStatuses',
        'ExcludedStatuses' => 'excludedStatuses',
        'id_quote_request' => 'idQuoteRequest',
        'idQuoteRequest' => 'idQuoteRequest',
        'IdQuoteRequest' => 'idQuoteRequest',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::QUOTE_REQUEST_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'quote_request_reference',
            'is_collection' => false,
            'is_transfer' => false,
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
        self::WITH_HIDDEN => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'with_hidden',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::WITH_VERSIONS => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'with_versions',
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
        self::EXCLUDED_STATUSES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'excluded_statuses',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_QUOTE_REQUEST => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_quote_request',
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
     * @module QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|QuoteRequestWidget|QuoteRequestAgent|QuoteRequest
     *
     * @param string|null $quoteRequestReference
     *
     * @return $this
     */
    public function setQuoteRequestReference($quoteRequestReference)
    {
        $this->quoteRequestReference = $quoteRequestReference;
        $this->modifiedProperties[self::QUOTE_REQUEST_REFERENCE] = true;

        return $this;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|QuoteRequestWidget|QuoteRequestAgent|QuoteRequest
     *
     * @return string|null
     */
    public function getQuoteRequestReference()
    {
        return $this->quoteRequestReference;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|QuoteRequestWidget|QuoteRequestAgent|QuoteRequest
     *
     * @param string|null $quoteRequestReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuoteRequestReferenceOrFail($quoteRequestReference)
    {
        if ($quoteRequestReference === null) {
            $this->throwNullValueException(static::QUOTE_REQUEST_REFERENCE);
        }

        return $this->setQuoteRequestReference($quoteRequestReference);
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|QuoteRequestWidget|QuoteRequestAgent|QuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getQuoteRequestReferenceOrFail()
    {
        if ($this->quoteRequestReference === null) {
            $this->throwNullValueException(static::QUOTE_REQUEST_REFERENCE);
        }

        return $this->quoteRequestReference;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|QuoteRequestWidget|QuoteRequestAgent|QuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuoteRequestReference()
    {
        $this->assertPropertyIsSet(self::QUOTE_REQUEST_REFERENCE);

        return $this;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestPage|QuoteRequestAgent|QuoteRequest
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
     * @module QuoteRequestAgentPage|QuoteRequestPage|QuoteRequestAgent|QuoteRequest
     *
     * @return \Generated\Shared\Transfer\PaginationTransfer|null
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestPage|QuoteRequestAgent|QuoteRequest
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
     * @module QuoteRequestAgentPage|QuoteRequestPage|QuoteRequestAgent|QuoteRequest
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
     * @module QuoteRequestAgentPage|QuoteRequestPage|QuoteRequestAgent|QuoteRequest
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
     * @module QuoteRequestAgentPage|QuoteRequestAgent|QuoteRequest
     *
     * @param bool|null $withHidden
     *
     * @return $this
     */
    public function setWithHidden($withHidden)
    {
        $this->withHidden = $withHidden;
        $this->modifiedProperties[self::WITH_HIDDEN] = true;

        return $this;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestAgent|QuoteRequest
     *
     * @return bool|null
     */
    public function getWithHidden()
    {
        return $this->withHidden;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestAgent|QuoteRequest
     *
     * @param bool|null $withHidden
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setWithHiddenOrFail($withHidden)
    {
        if ($withHidden === null) {
            $this->throwNullValueException(static::WITH_HIDDEN);
        }

        return $this->setWithHidden($withHidden);
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestAgent|QuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getWithHiddenOrFail()
    {
        if ($this->withHidden === null) {
            $this->throwNullValueException(static::WITH_HIDDEN);
        }

        return $this->withHidden;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestAgent|QuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWithHidden()
    {
        $this->assertPropertyIsSet(self::WITH_HIDDEN);

        return $this;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestPage|QuoteRequestAgent|QuoteRequest
     *
     * @param bool|null $withVersions
     *
     * @return $this
     */
    public function setWithVersions($withVersions)
    {
        $this->withVersions = $withVersions;
        $this->modifiedProperties[self::WITH_VERSIONS] = true;

        return $this;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestPage|QuoteRequestAgent|QuoteRequest
     *
     * @return bool|null
     */
    public function getWithVersions()
    {
        return $this->withVersions;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestPage|QuoteRequestAgent|QuoteRequest
     *
     * @param bool|null $withVersions
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setWithVersionsOrFail($withVersions)
    {
        if ($withVersions === null) {
            $this->throwNullValueException(static::WITH_VERSIONS);
        }

        return $this->setWithVersions($withVersions);
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestPage|QuoteRequestAgent|QuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getWithVersionsOrFail()
    {
        if ($this->withVersions === null) {
            $this->throwNullValueException(static::WITH_VERSIONS);
        }

        return $this->withVersions;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestPage|QuoteRequestAgent|QuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWithVersions()
    {
        $this->assertPropertyIsSet(self::WITH_VERSIONS);

        return $this;
    }

    /**
     * @module QuoteRequestPage|QuoteRequestWidget|QuoteRequestAgent|QuoteRequest
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
     * @module QuoteRequestPage|QuoteRequestWidget|QuoteRequestAgent|QuoteRequest
     *
     * @return int|null
     */
    public function getIdCompanyUser()
    {
        return $this->idCompanyUser;
    }

    /**
     * @module QuoteRequestPage|QuoteRequestWidget|QuoteRequestAgent|QuoteRequest
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
     * @module QuoteRequestPage|QuoteRequestWidget|QuoteRequestAgent|QuoteRequest
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
     * @module QuoteRequestPage|QuoteRequestWidget|QuoteRequestAgent|QuoteRequest
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
     * @module QuoteRequestPage|QuoteRequest
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
     * @module QuoteRequestPage|QuoteRequest
     *
     * @return \Generated\Shared\Transfer\CompanyUserTransfer|null
     */
    public function getCompanyUser()
    {
        return $this->companyUser;
    }

    /**
     * @module QuoteRequestPage|QuoteRequest
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
     * @module QuoteRequestPage|QuoteRequest
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
     * @module QuoteRequestPage|QuoteRequest
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
     * @module QuoteRequestAgent|QuoteRequest
     *
     * @param array|null $excludedStatuses
     *
     * @return $this
     */
    public function setExcludedStatuses(array $excludedStatuses = null)
    {
        if ($excludedStatuses === null) {
            $excludedStatuses = [];
        }

        $this->excludedStatuses = $excludedStatuses;
        $this->modifiedProperties[self::EXCLUDED_STATUSES] = true;

        return $this;
    }

    /**
     * @module QuoteRequestAgent|QuoteRequest
     *
     * @return array
     */
    public function getExcludedStatuses()
    {
        return $this->excludedStatuses;
    }

    /**
     * @module QuoteRequestAgent|QuoteRequest
     *
     * @param mixed $excludedStatuses
     *
     * @return $this
     */
    public function addExcludedStatuses($excludedStatuses)
    {
        $this->excludedStatuses[] = $excludedStatuses;
        $this->modifiedProperties[self::EXCLUDED_STATUSES] = true;

        return $this;
    }

    /**
     * @module QuoteRequestAgent|QuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireExcludedStatuses()
    {
        $this->assertPropertyIsSet(self::EXCLUDED_STATUSES);

        return $this;
    }

    /**
     * @module QuoteRequest
     *
     * @param int|null $idQuoteRequest
     *
     * @return $this
     */
    public function setIdQuoteRequest($idQuoteRequest)
    {
        $this->idQuoteRequest = $idQuoteRequest;
        $this->modifiedProperties[self::ID_QUOTE_REQUEST] = true;

        return $this;
    }

    /**
     * @module QuoteRequest
     *
     * @return int|null
     */
    public function getIdQuoteRequest()
    {
        return $this->idQuoteRequest;
    }

    /**
     * @module QuoteRequest
     *
     * @param int|null $idQuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdQuoteRequestOrFail($idQuoteRequest)
    {
        if ($idQuoteRequest === null) {
            $this->throwNullValueException(static::ID_QUOTE_REQUEST);
        }

        return $this->setIdQuoteRequest($idQuoteRequest);
    }

    /**
     * @module QuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdQuoteRequestOrFail()
    {
        if ($this->idQuoteRequest === null) {
            $this->throwNullValueException(static::ID_QUOTE_REQUEST);
        }

        return $this->idQuoteRequest;
    }

    /**
     * @module QuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdQuoteRequest()
    {
        $this->assertPropertyIsSet(self::ID_QUOTE_REQUEST);

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
                case 'quoteRequestReference':
                case 'withHidden':
                case 'withVersions':
                case 'idCompanyUser':
                case 'excludedStatuses':
                case 'idQuoteRequest':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'pagination':
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
                case 'quoteRequestReference':
                case 'withHidden':
                case 'withVersions':
                case 'idCompanyUser':
                case 'excludedStatuses':
                case 'idQuoteRequest':
                    $values[$arrayKey] = $value;

                    break;
                case 'pagination':
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
                case 'quoteRequestReference':
                case 'withHidden':
                case 'withVersions':
                case 'idCompanyUser':
                case 'excludedStatuses':
                case 'idQuoteRequest':
                    $values[$arrayKey] = $value;

                    break;
                case 'pagination':
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
            'quoteRequestReference' => $this->quoteRequestReference,
            'withHidden' => $this->withHidden,
            'withVersions' => $this->withVersions,
            'idCompanyUser' => $this->idCompanyUser,
            'excludedStatuses' => $this->excludedStatuses,
            'idQuoteRequest' => $this->idQuoteRequest,
            'pagination' => $this->pagination,
            'companyUser' => $this->companyUser,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'quote_request_reference' => $this->quoteRequestReference,
            'with_hidden' => $this->withHidden,
            'with_versions' => $this->withVersions,
            'id_company_user' => $this->idCompanyUser,
            'excluded_statuses' => $this->excludedStatuses,
            'id_quote_request' => $this->idQuoteRequest,
            'pagination' => $this->pagination,
            'company_user' => $this->companyUser,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'quote_request_reference' => $this->quoteRequestReference instanceof AbstractTransfer ? $this->quoteRequestReference->toArray(true, false) : $this->quoteRequestReference,
            'with_hidden' => $this->withHidden instanceof AbstractTransfer ? $this->withHidden->toArray(true, false) : $this->withHidden,
            'with_versions' => $this->withVersions instanceof AbstractTransfer ? $this->withVersions->toArray(true, false) : $this->withVersions,
            'id_company_user' => $this->idCompanyUser instanceof AbstractTransfer ? $this->idCompanyUser->toArray(true, false) : $this->idCompanyUser,
            'excluded_statuses' => $this->excludedStatuses instanceof AbstractTransfer ? $this->excludedStatuses->toArray(true, false) : $this->excludedStatuses,
            'id_quote_request' => $this->idQuoteRequest instanceof AbstractTransfer ? $this->idQuoteRequest->toArray(true, false) : $this->idQuoteRequest,
            'pagination' => $this->pagination instanceof AbstractTransfer ? $this->pagination->toArray(true, false) : $this->pagination,
            'company_user' => $this->companyUser instanceof AbstractTransfer ? $this->companyUser->toArray(true, false) : $this->companyUser,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'quoteRequestReference' => $this->quoteRequestReference instanceof AbstractTransfer ? $this->quoteRequestReference->toArray(true, true) : $this->quoteRequestReference,
            'withHidden' => $this->withHidden instanceof AbstractTransfer ? $this->withHidden->toArray(true, true) : $this->withHidden,
            'withVersions' => $this->withVersions instanceof AbstractTransfer ? $this->withVersions->toArray(true, true) : $this->withVersions,
            'idCompanyUser' => $this->idCompanyUser instanceof AbstractTransfer ? $this->idCompanyUser->toArray(true, true) : $this->idCompanyUser,
            'excludedStatuses' => $this->excludedStatuses instanceof AbstractTransfer ? $this->excludedStatuses->toArray(true, true) : $this->excludedStatuses,
            'idQuoteRequest' => $this->idQuoteRequest instanceof AbstractTransfer ? $this->idQuoteRequest->toArray(true, true) : $this->idQuoteRequest,
            'pagination' => $this->pagination instanceof AbstractTransfer ? $this->pagination->toArray(true, true) : $this->pagination,
            'companyUser' => $this->companyUser instanceof AbstractTransfer ? $this->companyUser->toArray(true, true) : $this->companyUser,
        ];
    }
}
