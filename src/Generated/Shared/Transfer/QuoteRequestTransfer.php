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
class QuoteRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const COMPANY_USER = 'companyUser';

    /**
     * @var string
     */
    public const QUOTE_REQUEST_REFERENCE = 'quoteRequestReference';

    /**
     * @var string
     */
    public const STATUS = 'status';

    /**
     * @var string
     */
    public const IS_LATEST_VERSION_VISIBLE = 'isLatestVersionVisible';

    /**
     * @var string
     */
    public const QUOTE_REQUEST_VERSIONS = 'quoteRequestVersions';

    /**
     * @var string
     */
    public const VALID_UNTIL = 'validUntil';

    /**
     * @var string
     */
    public const CREATED_AT = 'createdAt';

    /**
     * @var string
     */
    public const LATEST_VERSION = 'latestVersion';

    /**
     * @var string
     */
    public const LATEST_VISIBLE_VERSION = 'latestVisibleVersion';

    /**
     * @var string
     */
    public const ID_QUOTE_REQUEST = 'idQuoteRequest';

    /**
     * @var \Generated\Shared\Transfer\CompanyUserTransfer|null
     */
    protected $companyUser;

    /**
     * @var string|null
     */
    protected $quoteRequestReference;

    /**
     * @var string|null
     */
    protected $status;

    /**
     * @var bool|null
     */
    protected $isLatestVersionVisible;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\QuoteRequestVersionTransfer[]
     */
    protected $quoteRequestVersions;

    /**
     * @var string|null
     */
    protected $validUntil;

    /**
     * @var string|null
     */
    protected $createdAt;

    /**
     * @var \Generated\Shared\Transfer\QuoteRequestVersionTransfer|null
     */
    protected $latestVersion;

    /**
     * @var \Generated\Shared\Transfer\QuoteRequestVersionTransfer|null
     */
    protected $latestVisibleVersion;

    /**
     * @var int|null
     */
    protected $idQuoteRequest;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'company_user' => 'companyUser',
        'companyUser' => 'companyUser',
        'CompanyUser' => 'companyUser',
        'quote_request_reference' => 'quoteRequestReference',
        'quoteRequestReference' => 'quoteRequestReference',
        'QuoteRequestReference' => 'quoteRequestReference',
        'status' => 'status',
        'Status' => 'status',
        'is_latest_version_visible' => 'isLatestVersionVisible',
        'isLatestVersionVisible' => 'isLatestVersionVisible',
        'IsLatestVersionVisible' => 'isLatestVersionVisible',
        'quote_request_versions' => 'quoteRequestVersions',
        'quoteRequestVersions' => 'quoteRequestVersions',
        'QuoteRequestVersions' => 'quoteRequestVersions',
        'valid_until' => 'validUntil',
        'validUntil' => 'validUntil',
        'ValidUntil' => 'validUntil',
        'created_at' => 'createdAt',
        'createdAt' => 'createdAt',
        'CreatedAt' => 'createdAt',
        'latest_version' => 'latestVersion',
        'latestVersion' => 'latestVersion',
        'LatestVersion' => 'latestVersion',
        'latest_visible_version' => 'latestVisibleVersion',
        'latestVisibleVersion' => 'latestVisibleVersion',
        'LatestVisibleVersion' => 'latestVisibleVersion',
        'id_quote_request' => 'idQuoteRequest',
        'idQuoteRequest' => 'idQuoteRequest',
        'IdQuoteRequest' => 'idQuoteRequest',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::STATUS => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'status',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_LATEST_VERSION_VISIBLE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_latest_version_visible',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::QUOTE_REQUEST_VERSIONS => [
            'type' => 'Generated\Shared\Transfer\QuoteRequestVersionTransfer',
            'type_shim' => null,
            'name_underscore' => 'quote_request_versions',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::VALID_UNTIL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'valid_until',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CREATED_AT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'created_at',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LATEST_VERSION => [
            'type' => 'Generated\Shared\Transfer\QuoteRequestVersionTransfer',
            'type_shim' => null,
            'name_underscore' => 'latest_version',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LATEST_VISIBLE_VERSION => [
            'type' => 'Generated\Shared\Transfer\QuoteRequestVersionTransfer',
            'type_shim' => null,
            'name_underscore' => 'latest_visible_version',
            'is_collection' => false,
            'is_transfer' => true,
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
     * @module QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|CompaniesRestApi|CompanyBusinessUnitsRestApi|CompanyUsersRestApi|QuoteRequest
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
     * @module QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|CompaniesRestApi|CompanyBusinessUnitsRestApi|CompanyUsersRestApi|QuoteRequest
     *
     * @return \Generated\Shared\Transfer\CompanyUserTransfer|null
     */
    public function getCompanyUser()
    {
        return $this->companyUser;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|CompaniesRestApi|CompanyBusinessUnitsRestApi|CompanyUsersRestApi|QuoteRequest
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
     * @module QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|CompaniesRestApi|CompanyBusinessUnitsRestApi|CompanyUsersRestApi|QuoteRequest
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
     * @module QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|CompaniesRestApi|CompanyBusinessUnitsRestApi|CompanyUsersRestApi|QuoteRequest
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
     * @module QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|QuoteRequestWidget|ConfigurableBundlesRestApi|ProductMeasurementUnitsRestApi|ProductOptionsRestApi|QuoteRequestAgent|QuoteRequest|ShipmentsRestApi
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
     * @module QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|QuoteRequestWidget|ConfigurableBundlesRestApi|ProductMeasurementUnitsRestApi|ProductOptionsRestApi|QuoteRequestAgent|QuoteRequest|ShipmentsRestApi
     *
     * @return string|null
     */
    public function getQuoteRequestReference()
    {
        return $this->quoteRequestReference;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|QuoteRequestWidget|ConfigurableBundlesRestApi|ProductMeasurementUnitsRestApi|ProductOptionsRestApi|QuoteRequestAgent|QuoteRequest|ShipmentsRestApi
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
     * @module QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|QuoteRequestWidget|ConfigurableBundlesRestApi|ProductMeasurementUnitsRestApi|ProductOptionsRestApi|QuoteRequestAgent|QuoteRequest|ShipmentsRestApi
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
     * @module QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|QuoteRequestWidget|ConfigurableBundlesRestApi|ProductMeasurementUnitsRestApi|ProductOptionsRestApi|QuoteRequestAgent|QuoteRequest|ShipmentsRestApi
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
     * @module QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|QuoteRequestAgent|QuoteRequest
     *
     * @param string|null $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        $this->modifiedProperties[self::STATUS] = true;

        return $this;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|QuoteRequestAgent|QuoteRequest
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|QuoteRequestAgent|QuoteRequest
     *
     * @param string|null $status
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStatusOrFail($status)
    {
        if ($status === null) {
            $this->throwNullValueException(static::STATUS);
        }

        return $this->setStatus($status);
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|QuoteRequestAgent|QuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStatusOrFail()
    {
        if ($this->status === null) {
            $this->throwNullValueException(static::STATUS);
        }

        return $this->status;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|QuoteRequestAgent|QuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStatus()
    {
        $this->assertPropertyIsSet(self::STATUS);

        return $this;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestPage|QuoteRequest
     *
     * @param bool|null $isLatestVersionVisible
     *
     * @return $this
     */
    public function setIsLatestVersionVisible($isLatestVersionVisible)
    {
        $this->isLatestVersionVisible = $isLatestVersionVisible;
        $this->modifiedProperties[self::IS_LATEST_VERSION_VISIBLE] = true;

        return $this;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestPage|QuoteRequest
     *
     * @return bool|null
     */
    public function getIsLatestVersionVisible()
    {
        return $this->isLatestVersionVisible;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestPage|QuoteRequest
     *
     * @param bool|null $isLatestVersionVisible
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsLatestVersionVisibleOrFail($isLatestVersionVisible)
    {
        if ($isLatestVersionVisible === null) {
            $this->throwNullValueException(static::IS_LATEST_VERSION_VISIBLE);
        }

        return $this->setIsLatestVersionVisible($isLatestVersionVisible);
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestPage|QuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsLatestVersionVisibleOrFail()
    {
        if ($this->isLatestVersionVisible === null) {
            $this->throwNullValueException(static::IS_LATEST_VERSION_VISIBLE);
        }

        return $this->isLatestVersionVisible;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestPage|QuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsLatestVersionVisible()
    {
        $this->assertPropertyIsSet(self::IS_LATEST_VERSION_VISIBLE);

        return $this;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestPage|QuoteRequest
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\QuoteRequestVersionTransfer[] $quoteRequestVersions
     *
     * @return $this
     */
    public function setQuoteRequestVersions(ArrayObject $quoteRequestVersions)
    {
        $this->quoteRequestVersions = $quoteRequestVersions;
        $this->modifiedProperties[self::QUOTE_REQUEST_VERSIONS] = true;

        return $this;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestPage|QuoteRequest
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\QuoteRequestVersionTransfer[]
     */
    public function getQuoteRequestVersions()
    {
        return $this->quoteRequestVersions;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestPage|QuoteRequest
     *
     * @param \Generated\Shared\Transfer\QuoteRequestVersionTransfer $quoteRequestVersion
     *
     * @return $this
     */
    public function addQuoteRequestVersion(QuoteRequestVersionTransfer $quoteRequestVersion)
    {
        $this->quoteRequestVersions[] = $quoteRequestVersion;
        $this->modifiedProperties[self::QUOTE_REQUEST_VERSIONS] = true;

        return $this;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestPage|QuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuoteRequestVersions()
    {
        $this->assertCollectionPropertyIsSet(self::QUOTE_REQUEST_VERSIONS);

        return $this;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestPage|QuoteRequest
     *
     * @param string|null $validUntil
     *
     * @return $this
     */
    public function setValidUntil($validUntil)
    {
        $this->validUntil = $validUntil;
        $this->modifiedProperties[self::VALID_UNTIL] = true;

        return $this;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestPage|QuoteRequest
     *
     * @return string|null
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestPage|QuoteRequest
     *
     * @param string|null $validUntil
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setValidUntilOrFail($validUntil)
    {
        if ($validUntil === null) {
            $this->throwNullValueException(static::VALID_UNTIL);
        }

        return $this->setValidUntil($validUntil);
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestPage|QuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getValidUntilOrFail()
    {
        if ($this->validUntil === null) {
            $this->throwNullValueException(static::VALID_UNTIL);
        }

        return $this->validUntil;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestPage|QuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireValidUntil()
    {
        $this->assertPropertyIsSet(self::VALID_UNTIL);

        return $this;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestPage|QuoteRequest
     *
     * @param string|null $createdAt
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        $this->modifiedProperties[self::CREATED_AT] = true;

        return $this;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestPage|QuoteRequest
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestPage|QuoteRequest
     *
     * @param string|null $createdAt
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCreatedAtOrFail($createdAt)
    {
        if ($createdAt === null) {
            $this->throwNullValueException(static::CREATED_AT);
        }

        return $this->setCreatedAt($createdAt);
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestPage|QuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCreatedAtOrFail()
    {
        if ($this->createdAt === null) {
            $this->throwNullValueException(static::CREATED_AT);
        }

        return $this->createdAt;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestPage|QuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCreatedAt()
    {
        $this->assertPropertyIsSet(self::CREATED_AT);

        return $this;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|QuoteRequestWidget|ConfigurableBundlesRestApi|ProductMeasurementUnitsRestApi|ProductOptionsRestApi|QuoteApproval|QuoteRequestAgent|QuoteRequest|ShipmentsRestApi
     *
     * @param \Generated\Shared\Transfer\QuoteRequestVersionTransfer|null $latestVersion
     *
     * @return $this
     */
    public function setLatestVersion(QuoteRequestVersionTransfer $latestVersion = null)
    {
        $this->latestVersion = $latestVersion;
        $this->modifiedProperties[self::LATEST_VERSION] = true;

        return $this;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|QuoteRequestWidget|ConfigurableBundlesRestApi|ProductMeasurementUnitsRestApi|ProductOptionsRestApi|QuoteApproval|QuoteRequestAgent|QuoteRequest|ShipmentsRestApi
     *
     * @return \Generated\Shared\Transfer\QuoteRequestVersionTransfer|null
     */
    public function getLatestVersion()
    {
        return $this->latestVersion;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|QuoteRequestWidget|ConfigurableBundlesRestApi|ProductMeasurementUnitsRestApi|ProductOptionsRestApi|QuoteApproval|QuoteRequestAgent|QuoteRequest|ShipmentsRestApi
     *
     * @param \Generated\Shared\Transfer\QuoteRequestVersionTransfer $latestVersion
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLatestVersionOrFail(QuoteRequestVersionTransfer $latestVersion)
    {
        return $this->setLatestVersion($latestVersion);
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|QuoteRequestWidget|ConfigurableBundlesRestApi|ProductMeasurementUnitsRestApi|ProductOptionsRestApi|QuoteApproval|QuoteRequestAgent|QuoteRequest|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\QuoteRequestVersionTransfer
     */
    public function getLatestVersionOrFail()
    {
        if ($this->latestVersion === null) {
            $this->throwNullValueException(static::LATEST_VERSION);
        }

        return $this->latestVersion;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|QuoteRequestWidget|ConfigurableBundlesRestApi|ProductMeasurementUnitsRestApi|ProductOptionsRestApi|QuoteApproval|QuoteRequestAgent|QuoteRequest|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLatestVersion()
    {
        $this->assertPropertyIsSet(self::LATEST_VERSION);

        return $this;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|QuoteRequestAgent|QuoteRequest
     *
     * @param \Generated\Shared\Transfer\QuoteRequestVersionTransfer|null $latestVisibleVersion
     *
     * @return $this
     */
    public function setLatestVisibleVersion(QuoteRequestVersionTransfer $latestVisibleVersion = null)
    {
        $this->latestVisibleVersion = $latestVisibleVersion;
        $this->modifiedProperties[self::LATEST_VISIBLE_VERSION] = true;

        return $this;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|QuoteRequestAgent|QuoteRequest
     *
     * @return \Generated\Shared\Transfer\QuoteRequestVersionTransfer|null
     */
    public function getLatestVisibleVersion()
    {
        return $this->latestVisibleVersion;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|QuoteRequestAgent|QuoteRequest
     *
     * @param \Generated\Shared\Transfer\QuoteRequestVersionTransfer $latestVisibleVersion
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLatestVisibleVersionOrFail(QuoteRequestVersionTransfer $latestVisibleVersion)
    {
        return $this->setLatestVisibleVersion($latestVisibleVersion);
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|QuoteRequestAgent|QuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\QuoteRequestVersionTransfer
     */
    public function getLatestVisibleVersionOrFail()
    {
        if ($this->latestVisibleVersion === null) {
            $this->throwNullValueException(static::LATEST_VISIBLE_VERSION);
        }

        return $this->latestVisibleVersion;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|QuoteRequestAgent|QuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLatestVisibleVersion()
    {
        $this->assertPropertyIsSet(self::LATEST_VISIBLE_VERSION);

        return $this;
    }

    /**
     * @module QuoteRequestAgent|QuoteRequest
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
     * @module QuoteRequestAgent|QuoteRequest
     *
     * @return int|null
     */
    public function getIdQuoteRequest()
    {
        return $this->idQuoteRequest;
    }

    /**
     * @module QuoteRequestAgent|QuoteRequest
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
     * @module QuoteRequestAgent|QuoteRequest
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
     * @module QuoteRequestAgent|QuoteRequest
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
                case 'status':
                case 'isLatestVersionVisible':
                case 'validUntil':
                case 'createdAt':
                case 'idQuoteRequest':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'companyUser':
                case 'latestVersion':
                case 'latestVisibleVersion':
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
                case 'quoteRequestVersions':
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
                case 'quoteRequestReference':
                case 'status':
                case 'isLatestVersionVisible':
                case 'validUntil':
                case 'createdAt':
                case 'idQuoteRequest':
                    $values[$arrayKey] = $value;

                    break;
                case 'companyUser':
                case 'latestVersion':
                case 'latestVisibleVersion':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'quoteRequestVersions':
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
                case 'quoteRequestReference':
                case 'status':
                case 'isLatestVersionVisible':
                case 'validUntil':
                case 'createdAt':
                case 'idQuoteRequest':
                    $values[$arrayKey] = $value;

                    break;
                case 'companyUser':
                case 'latestVersion':
                case 'latestVisibleVersion':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'quoteRequestVersions':
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
        $this->quoteRequestVersions = $this->quoteRequestVersions ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'quoteRequestReference' => $this->quoteRequestReference,
            'status' => $this->status,
            'isLatestVersionVisible' => $this->isLatestVersionVisible,
            'validUntil' => $this->validUntil,
            'createdAt' => $this->createdAt,
            'idQuoteRequest' => $this->idQuoteRequest,
            'companyUser' => $this->companyUser,
            'latestVersion' => $this->latestVersion,
            'latestVisibleVersion' => $this->latestVisibleVersion,
            'quoteRequestVersions' => $this->quoteRequestVersions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'quote_request_reference' => $this->quoteRequestReference,
            'status' => $this->status,
            'is_latest_version_visible' => $this->isLatestVersionVisible,
            'valid_until' => $this->validUntil,
            'created_at' => $this->createdAt,
            'id_quote_request' => $this->idQuoteRequest,
            'company_user' => $this->companyUser,
            'latest_version' => $this->latestVersion,
            'latest_visible_version' => $this->latestVisibleVersion,
            'quote_request_versions' => $this->quoteRequestVersions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'quote_request_reference' => $this->quoteRequestReference instanceof AbstractTransfer ? $this->quoteRequestReference->toArray(true, false) : $this->quoteRequestReference,
            'status' => $this->status instanceof AbstractTransfer ? $this->status->toArray(true, false) : $this->status,
            'is_latest_version_visible' => $this->isLatestVersionVisible instanceof AbstractTransfer ? $this->isLatestVersionVisible->toArray(true, false) : $this->isLatestVersionVisible,
            'valid_until' => $this->validUntil instanceof AbstractTransfer ? $this->validUntil->toArray(true, false) : $this->validUntil,
            'created_at' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, false) : $this->createdAt,
            'id_quote_request' => $this->idQuoteRequest instanceof AbstractTransfer ? $this->idQuoteRequest->toArray(true, false) : $this->idQuoteRequest,
            'company_user' => $this->companyUser instanceof AbstractTransfer ? $this->companyUser->toArray(true, false) : $this->companyUser,
            'latest_version' => $this->latestVersion instanceof AbstractTransfer ? $this->latestVersion->toArray(true, false) : $this->latestVersion,
            'latest_visible_version' => $this->latestVisibleVersion instanceof AbstractTransfer ? $this->latestVisibleVersion->toArray(true, false) : $this->latestVisibleVersion,
            'quote_request_versions' => $this->quoteRequestVersions instanceof AbstractTransfer ? $this->quoteRequestVersions->toArray(true, false) : $this->addValuesToCollection($this->quoteRequestVersions, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'quoteRequestReference' => $this->quoteRequestReference instanceof AbstractTransfer ? $this->quoteRequestReference->toArray(true, true) : $this->quoteRequestReference,
            'status' => $this->status instanceof AbstractTransfer ? $this->status->toArray(true, true) : $this->status,
            'isLatestVersionVisible' => $this->isLatestVersionVisible instanceof AbstractTransfer ? $this->isLatestVersionVisible->toArray(true, true) : $this->isLatestVersionVisible,
            'validUntil' => $this->validUntil instanceof AbstractTransfer ? $this->validUntil->toArray(true, true) : $this->validUntil,
            'createdAt' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, true) : $this->createdAt,
            'idQuoteRequest' => $this->idQuoteRequest instanceof AbstractTransfer ? $this->idQuoteRequest->toArray(true, true) : $this->idQuoteRequest,
            'companyUser' => $this->companyUser instanceof AbstractTransfer ? $this->companyUser->toArray(true, true) : $this->companyUser,
            'latestVersion' => $this->latestVersion instanceof AbstractTransfer ? $this->latestVersion->toArray(true, true) : $this->latestVersion,
            'latestVisibleVersion' => $this->latestVisibleVersion instanceof AbstractTransfer ? $this->latestVisibleVersion->toArray(true, true) : $this->latestVisibleVersion,
            'quoteRequestVersions' => $this->quoteRequestVersions instanceof AbstractTransfer ? $this->quoteRequestVersions->toArray(true, true) : $this->addValuesToCollection($this->quoteRequestVersions, true, true),
        ];
    }
}
