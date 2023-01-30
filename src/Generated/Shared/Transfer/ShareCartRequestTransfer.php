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
class ShareCartRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_QUOTE = 'idQuote';

    /**
     * @var string
     */
    public const ID_COMPANY_USER = 'idCompanyUser';

    /**
     * @var string
     */
    public const SHARE_DETAILS = 'shareDetails';

    /**
     * @var string
     */
    public const QUOTE_IDS = 'quoteIds';

    /**
     * @deprecated Use shareDetails param instead
     */
    public const ID_QUOTE_PERMISSION_GROUP = 'idQuotePermissionGroup';

    /**
     * @var string
     */
    public const QUOTE_UUID = 'quoteUuid';

    /**
     * @var string
     */
    public const CUSTOMER_REFERENCE = 'customerReference';

    /**
     * @var int|null
     */
    protected $idQuote;

    /**
     * @var int|null
     */
    protected $idCompanyUser;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ShareDetailTransfer[]
     */
    protected $shareDetails;

    /**
     * @var int[]
     */
    protected $quoteIds = [];

    /**
     * @var int|null
     */
    protected $idQuotePermissionGroup;

    /**
     * @var string|null
     */
    protected $quoteUuid;

    /**
     * @var string|null
     */
    protected $customerReference;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_quote' => 'idQuote',
        'idQuote' => 'idQuote',
        'IdQuote' => 'idQuote',
        'id_company_user' => 'idCompanyUser',
        'idCompanyUser' => 'idCompanyUser',
        'IdCompanyUser' => 'idCompanyUser',
        'share_details' => 'shareDetails',
        'shareDetails' => 'shareDetails',
        'ShareDetails' => 'shareDetails',
        'quote_ids' => 'quoteIds',
        'quoteIds' => 'quoteIds',
        'QuoteIds' => 'quoteIds',
        'id_quote_permission_group' => 'idQuotePermissionGroup',
        'idQuotePermissionGroup' => 'idQuotePermissionGroup',
        'IdQuotePermissionGroup' => 'idQuotePermissionGroup',
        'quote_uuid' => 'quoteUuid',
        'quoteUuid' => 'quoteUuid',
        'QuoteUuid' => 'quoteUuid',
        'customer_reference' => 'customerReference',
        'customerReference' => 'customerReference',
        'CustomerReference' => 'customerReference',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_QUOTE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_quote',
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
        self::SHARE_DETAILS => [
            'type' => 'Generated\Shared\Transfer\ShareDetailTransfer',
            'type_shim' => null,
            'name_underscore' => 'share_details',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::QUOTE_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'quote_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_QUOTE_PERMISSION_GROUP => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_quote_permission_group',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::QUOTE_UUID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'quote_uuid',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CUSTOMER_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'customer_reference',
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
     * @param int|null $idQuote
     *
     * @return $this
     */
    public function setIdQuote($idQuote)
    {
        $this->idQuote = $idQuote;
        $this->modifiedProperties[self::ID_QUOTE] = true;

        return $this;
    }

    /**
     * @module SharedCartPage|QuoteApproval|SharedCart|SharedCartsRestApi
     *
     * @return int|null
     */
    public function getIdQuote()
    {
        return $this->idQuote;
    }

    /**
     * @module SharedCartPage|QuoteApproval|SharedCart|SharedCartsRestApi
     *
     * @param int|null $idQuote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdQuoteOrFail($idQuote)
    {
        if ($idQuote === null) {
            $this->throwNullValueException(static::ID_QUOTE);
        }

        return $this->setIdQuote($idQuote);
    }

    /**
     * @module SharedCartPage|QuoteApproval|SharedCart|SharedCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdQuoteOrFail()
    {
        if ($this->idQuote === null) {
            $this->throwNullValueException(static::ID_QUOTE);
        }

        return $this->idQuote;
    }

    /**
     * @module SharedCartPage|QuoteApproval|SharedCart|SharedCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdQuote()
    {
        $this->assertPropertyIsSet(self::ID_QUOTE);

        return $this;
    }

    /**
     * @module SharedCartPage|SharedCart|SharedCartsRestApi
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
     * @module SharedCartPage|SharedCart|SharedCartsRestApi
     *
     * @return int|null
     */
    public function getIdCompanyUser()
    {
        return $this->idCompanyUser;
    }

    /**
     * @module SharedCartPage|SharedCart|SharedCartsRestApi
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
     * @module SharedCartPage|SharedCart|SharedCartsRestApi
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
     * @module SharedCartPage|SharedCart|SharedCartsRestApi
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
     * @module SharedCartPage|QuoteApproval|SharedCart|SharedCartsRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ShareDetailTransfer[] $shareDetails
     *
     * @return $this
     */
    public function setShareDetails(ArrayObject $shareDetails)
    {
        $this->shareDetails = $shareDetails;
        $this->modifiedProperties[self::SHARE_DETAILS] = true;

        return $this;
    }

    /**
     * @module SharedCartPage|QuoteApproval|SharedCart|SharedCartsRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ShareDetailTransfer[]
     */
    public function getShareDetails()
    {
        return $this->shareDetails;
    }

    /**
     * @module SharedCartPage|QuoteApproval|SharedCart|SharedCartsRestApi
     *
     * @param \Generated\Shared\Transfer\ShareDetailTransfer $shareDetail
     *
     * @return $this
     */
    public function addShareDetail(ShareDetailTransfer $shareDetail)
    {
        $this->shareDetails[] = $shareDetail;
        $this->modifiedProperties[self::SHARE_DETAILS] = true;

        return $this;
    }

    /**
     * @module SharedCartPage|QuoteApproval|SharedCart|SharedCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireShareDetails()
    {
        $this->assertCollectionPropertyIsSet(self::SHARE_DETAILS);

        return $this;
    }

    /**
     * @module SharedCart
     *
     * @param int[]|null $quoteIds
     *
     * @return $this
     */
    public function setQuoteIds(array $quoteIds = null)
    {
        if ($quoteIds === null) {
            $quoteIds = [];
        }

        $this->quoteIds = $quoteIds;
        $this->modifiedProperties[self::QUOTE_IDS] = true;

        return $this;
    }

    /**
     * @module SharedCart
     *
     * @return int[]
     */
    public function getQuoteIds()
    {
        return $this->quoteIds;
    }

    /**
     * @module SharedCart
     *
     * @param int $quoteId
     *
     * @return $this
     */
    public function addQuoteId($quoteId)
    {
        $this->quoteIds[] = $quoteId;
        $this->modifiedProperties[self::QUOTE_IDS] = true;

        return $this;
    }

    /**
     * @module SharedCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuoteIds()
    {
        $this->assertPropertyIsSet(self::QUOTE_IDS);

        return $this;
    }

    /**
     * @module SharedCart
     *
     * @deprecated Use shareDetails param instead
     *
     * @param int|null $idQuotePermissionGroup
     *
     * @return $this
     */
    public function setIdQuotePermissionGroup($idQuotePermissionGroup)
    {
        $this->idQuotePermissionGroup = $idQuotePermissionGroup;
        $this->modifiedProperties[self::ID_QUOTE_PERMISSION_GROUP] = true;

        return $this;
    }

    /**
     * @module SharedCart
     *
     * @deprecated Use shareDetails param instead
     *
     * @return int|null
     */
    public function getIdQuotePermissionGroup()
    {
        return $this->idQuotePermissionGroup;
    }

    /**
     * @module SharedCart
     *
     * @deprecated Use shareDetails param instead
     *
     * @param int|null $idQuotePermissionGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdQuotePermissionGroupOrFail($idQuotePermissionGroup)
    {
        if ($idQuotePermissionGroup === null) {
            $this->throwNullValueException(static::ID_QUOTE_PERMISSION_GROUP);
        }

        return $this->setIdQuotePermissionGroup($idQuotePermissionGroup);
    }

    /**
     * @module SharedCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use shareDetails param instead
     *
     * @return int
     */
    public function getIdQuotePermissionGroupOrFail()
    {
        if ($this->idQuotePermissionGroup === null) {
            $this->throwNullValueException(static::ID_QUOTE_PERMISSION_GROUP);
        }

        return $this->idQuotePermissionGroup;
    }

    /**
     * @module SharedCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use shareDetails param instead
     *
     * @return $this
     */
    public function requireIdQuotePermissionGroup()
    {
        $this->assertPropertyIsSet(self::ID_QUOTE_PERMISSION_GROUP);

        return $this;
    }

    /**
     * @module SharedCartsRestApi
     *
     * @param string|null $quoteUuid
     *
     * @return $this
     */
    public function setQuoteUuid($quoteUuid)
    {
        $this->quoteUuid = $quoteUuid;
        $this->modifiedProperties[self::QUOTE_UUID] = true;

        return $this;
    }

    /**
     * @module SharedCartsRestApi
     *
     * @return string|null
     */
    public function getQuoteUuid()
    {
        return $this->quoteUuid;
    }

    /**
     * @module SharedCartsRestApi
     *
     * @param string|null $quoteUuid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuoteUuidOrFail($quoteUuid)
    {
        if ($quoteUuid === null) {
            $this->throwNullValueException(static::QUOTE_UUID);
        }

        return $this->setQuoteUuid($quoteUuid);
    }

    /**
     * @module SharedCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getQuoteUuidOrFail()
    {
        if ($this->quoteUuid === null) {
            $this->throwNullValueException(static::QUOTE_UUID);
        }

        return $this->quoteUuid;
    }

    /**
     * @module SharedCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuoteUuid()
    {
        $this->assertPropertyIsSet(self::QUOTE_UUID);

        return $this;
    }

    /**
     * @module SharedCartsRestApi
     *
     * @param string|null $customerReference
     *
     * @return $this
     */
    public function setCustomerReference($customerReference)
    {
        $this->customerReference = $customerReference;
        $this->modifiedProperties[self::CUSTOMER_REFERENCE] = true;

        return $this;
    }

    /**
     * @module SharedCartsRestApi
     *
     * @return string|null
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * @module SharedCartsRestApi
     *
     * @param string|null $customerReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCustomerReferenceOrFail($customerReference)
    {
        if ($customerReference === null) {
            $this->throwNullValueException(static::CUSTOMER_REFERENCE);
        }

        return $this->setCustomerReference($customerReference);
    }

    /**
     * @module SharedCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCustomerReferenceOrFail()
    {
        if ($this->customerReference === null) {
            $this->throwNullValueException(static::CUSTOMER_REFERENCE);
        }

        return $this->customerReference;
    }

    /**
     * @module SharedCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCustomerReference()
    {
        $this->assertPropertyIsSet(self::CUSTOMER_REFERENCE);

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
                case 'idQuote':
                case 'idCompanyUser':
                case 'quoteIds':
                case 'idQuotePermissionGroup':
                case 'quoteUuid':
                case 'customerReference':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'shareDetails':
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
                case 'idQuote':
                case 'idCompanyUser':
                case 'quoteIds':
                case 'idQuotePermissionGroup':
                case 'quoteUuid':
                case 'customerReference':
                    $values[$arrayKey] = $value;

                    break;
                case 'shareDetails':
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
                case 'idQuote':
                case 'idCompanyUser':
                case 'quoteIds':
                case 'idQuotePermissionGroup':
                case 'quoteUuid':
                case 'customerReference':
                    $values[$arrayKey] = $value;

                    break;
                case 'shareDetails':
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
        $this->shareDetails = $this->shareDetails ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idQuote' => $this->idQuote,
            'idCompanyUser' => $this->idCompanyUser,
            'quoteIds' => $this->quoteIds,
            'idQuotePermissionGroup' => $this->idQuotePermissionGroup,
            'quoteUuid' => $this->quoteUuid,
            'customerReference' => $this->customerReference,
            'shareDetails' => $this->shareDetails,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_quote' => $this->idQuote,
            'id_company_user' => $this->idCompanyUser,
            'quote_ids' => $this->quoteIds,
            'id_quote_permission_group' => $this->idQuotePermissionGroup,
            'quote_uuid' => $this->quoteUuid,
            'customer_reference' => $this->customerReference,
            'share_details' => $this->shareDetails,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_quote' => $this->idQuote instanceof AbstractTransfer ? $this->idQuote->toArray(true, false) : $this->idQuote,
            'id_company_user' => $this->idCompanyUser instanceof AbstractTransfer ? $this->idCompanyUser->toArray(true, false) : $this->idCompanyUser,
            'quote_ids' => $this->quoteIds instanceof AbstractTransfer ? $this->quoteIds->toArray(true, false) : $this->quoteIds,
            'id_quote_permission_group' => $this->idQuotePermissionGroup instanceof AbstractTransfer ? $this->idQuotePermissionGroup->toArray(true, false) : $this->idQuotePermissionGroup,
            'quote_uuid' => $this->quoteUuid instanceof AbstractTransfer ? $this->quoteUuid->toArray(true, false) : $this->quoteUuid,
            'customer_reference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, false) : $this->customerReference,
            'share_details' => $this->shareDetails instanceof AbstractTransfer ? $this->shareDetails->toArray(true, false) : $this->addValuesToCollection($this->shareDetails, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idQuote' => $this->idQuote instanceof AbstractTransfer ? $this->idQuote->toArray(true, true) : $this->idQuote,
            'idCompanyUser' => $this->idCompanyUser instanceof AbstractTransfer ? $this->idCompanyUser->toArray(true, true) : $this->idCompanyUser,
            'quoteIds' => $this->quoteIds instanceof AbstractTransfer ? $this->quoteIds->toArray(true, true) : $this->quoteIds,
            'idQuotePermissionGroup' => $this->idQuotePermissionGroup instanceof AbstractTransfer ? $this->idQuotePermissionGroup->toArray(true, true) : $this->idQuotePermissionGroup,
            'quoteUuid' => $this->quoteUuid instanceof AbstractTransfer ? $this->quoteUuid->toArray(true, true) : $this->quoteUuid,
            'customerReference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, true) : $this->customerReference,
            'shareDetails' => $this->shareDetails instanceof AbstractTransfer ? $this->shareDetails->toArray(true, true) : $this->addValuesToCollection($this->shareDetails, true, true),
        ];
    }
}
