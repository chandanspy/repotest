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
class QuoteApprovalTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_QUOTE_APPROVAL = 'idQuoteApproval';

    /**
     * @var string
     */
    public const FK_QUOTE = 'fkQuote';

    /**
     * @var string
     */
    public const APPROVER_COMPANY_USER_ID = 'approverCompanyUserId';

    /**
     * @var string
     */
    public const STATUS = 'status';

    /**
     * @var string
     */
    public const CREATED_AT = 'createdAt';

    /**
     * @var string
     */
    public const UPDATED_AT = 'updatedAt';

    /**
     * @var string
     */
    public const APPROVER = 'approver';

    /**
     * @var int|null
     */
    protected $idQuoteApproval;

    /**
     * @var int|null
     */
    protected $fkQuote;

    /**
     * @var int|null
     */
    protected $approverCompanyUserId;

    /**
     * @var string|null
     */
    protected $status;

    /**
     * @var string|null
     */
    protected $createdAt;

    /**
     * @var string|null
     */
    protected $updatedAt;

    /**
     * @var \Generated\Shared\Transfer\CompanyUserTransfer|null
     */
    protected $approver;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_quote_approval' => 'idQuoteApproval',
        'idQuoteApproval' => 'idQuoteApproval',
        'IdQuoteApproval' => 'idQuoteApproval',
        'fk_quote' => 'fkQuote',
        'fkQuote' => 'fkQuote',
        'FkQuote' => 'fkQuote',
        'approver_company_user_id' => 'approverCompanyUserId',
        'approverCompanyUserId' => 'approverCompanyUserId',
        'ApproverCompanyUserId' => 'approverCompanyUserId',
        'status' => 'status',
        'Status' => 'status',
        'created_at' => 'createdAt',
        'createdAt' => 'createdAt',
        'CreatedAt' => 'createdAt',
        'updated_at' => 'updatedAt',
        'updatedAt' => 'updatedAt',
        'UpdatedAt' => 'updatedAt',
        'approver' => 'approver',
        'Approver' => 'approver',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_QUOTE_APPROVAL => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_quote_approval',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_QUOTE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_quote',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::APPROVER_COMPANY_USER_ID => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'approver_company_user_id',
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
        self::UPDATED_AT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'updated_at',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::APPROVER => [
            'type' => 'Generated\Shared\Transfer\CompanyUserTransfer',
            'type_shim' => null,
            'name_underscore' => 'approver',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module CartPage|QuoteApprovalWidget|QuoteApproval
     *
     * @param int|null $idQuoteApproval
     *
     * @return $this
     */
    public function setIdQuoteApproval($idQuoteApproval)
    {
        $this->idQuoteApproval = $idQuoteApproval;
        $this->modifiedProperties[self::ID_QUOTE_APPROVAL] = true;

        return $this;
    }

    /**
     * @module CartPage|QuoteApprovalWidget|QuoteApproval
     *
     * @return int|null
     */
    public function getIdQuoteApproval()
    {
        return $this->idQuoteApproval;
    }

    /**
     * @module CartPage|QuoteApprovalWidget|QuoteApproval
     *
     * @param int|null $idQuoteApproval
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdQuoteApprovalOrFail($idQuoteApproval)
    {
        if ($idQuoteApproval === null) {
            $this->throwNullValueException(static::ID_QUOTE_APPROVAL);
        }

        return $this->setIdQuoteApproval($idQuoteApproval);
    }

    /**
     * @module CartPage|QuoteApprovalWidget|QuoteApproval
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdQuoteApprovalOrFail()
    {
        if ($this->idQuoteApproval === null) {
            $this->throwNullValueException(static::ID_QUOTE_APPROVAL);
        }

        return $this->idQuoteApproval;
    }

    /**
     * @module CartPage|QuoteApprovalWidget|QuoteApproval
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdQuoteApproval()
    {
        $this->assertPropertyIsSet(self::ID_QUOTE_APPROVAL);

        return $this;
    }

    /**
     * @module QuoteApprovalWidget|QuoteApproval
     *
     * @param int|null $fkQuote
     *
     * @return $this
     */
    public function setFkQuote($fkQuote)
    {
        $this->fkQuote = $fkQuote;
        $this->modifiedProperties[self::FK_QUOTE] = true;

        return $this;
    }

    /**
     * @module QuoteApprovalWidget|QuoteApproval
     *
     * @return int|null
     */
    public function getFkQuote()
    {
        return $this->fkQuote;
    }

    /**
     * @module QuoteApprovalWidget|QuoteApproval
     *
     * @param int|null $fkQuote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkQuoteOrFail($fkQuote)
    {
        if ($fkQuote === null) {
            $this->throwNullValueException(static::FK_QUOTE);
        }

        return $this->setFkQuote($fkQuote);
    }

    /**
     * @module QuoteApprovalWidget|QuoteApproval
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkQuoteOrFail()
    {
        if ($this->fkQuote === null) {
            $this->throwNullValueException(static::FK_QUOTE);
        }

        return $this->fkQuote;
    }

    /**
     * @module QuoteApprovalWidget|QuoteApproval
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkQuote()
    {
        $this->assertPropertyIsSet(self::FK_QUOTE);

        return $this;
    }

    /**
     * @module QuoteApprovalWidget|QuoteApproval
     *
     * @param int|null $approverCompanyUserId
     *
     * @return $this
     */
    public function setApproverCompanyUserId($approverCompanyUserId)
    {
        $this->approverCompanyUserId = $approverCompanyUserId;
        $this->modifiedProperties[self::APPROVER_COMPANY_USER_ID] = true;

        return $this;
    }

    /**
     * @module QuoteApprovalWidget|QuoteApproval
     *
     * @return int|null
     */
    public function getApproverCompanyUserId()
    {
        return $this->approverCompanyUserId;
    }

    /**
     * @module QuoteApprovalWidget|QuoteApproval
     *
     * @param int|null $approverCompanyUserId
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setApproverCompanyUserIdOrFail($approverCompanyUserId)
    {
        if ($approverCompanyUserId === null) {
            $this->throwNullValueException(static::APPROVER_COMPANY_USER_ID);
        }

        return $this->setApproverCompanyUserId($approverCompanyUserId);
    }

    /**
     * @module QuoteApprovalWidget|QuoteApproval
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getApproverCompanyUserIdOrFail()
    {
        if ($this->approverCompanyUserId === null) {
            $this->throwNullValueException(static::APPROVER_COMPANY_USER_ID);
        }

        return $this->approverCompanyUserId;
    }

    /**
     * @module QuoteApprovalWidget|QuoteApproval
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireApproverCompanyUserId()
    {
        $this->assertPropertyIsSet(self::APPROVER_COMPANY_USER_ID);

        return $this;
    }

    /**
     * @module QuoteApprovalWidget|QuoteApproval
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
     * @module QuoteApprovalWidget|QuoteApproval
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @module QuoteApprovalWidget|QuoteApproval
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
     * @module QuoteApprovalWidget|QuoteApproval
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
     * @module QuoteApprovalWidget|QuoteApproval
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
     * @module QuoteApprovalWidget|QuoteApproval
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
     * @module QuoteApprovalWidget|QuoteApproval
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @module QuoteApprovalWidget|QuoteApproval
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
     * @module QuoteApprovalWidget|QuoteApproval
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
     * @module QuoteApprovalWidget|QuoteApproval
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
     * @module QuoteApprovalWidget|QuoteApproval
     *
     * @param string|null $updatedAt
     *
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
        $this->modifiedProperties[self::UPDATED_AT] = true;

        return $this;
    }

    /**
     * @module QuoteApprovalWidget|QuoteApproval
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @module QuoteApprovalWidget|QuoteApproval
     *
     * @param string|null $updatedAt
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUpdatedAtOrFail($updatedAt)
    {
        if ($updatedAt === null) {
            $this->throwNullValueException(static::UPDATED_AT);
        }

        return $this->setUpdatedAt($updatedAt);
    }

    /**
     * @module QuoteApprovalWidget|QuoteApproval
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUpdatedAtOrFail()
    {
        if ($this->updatedAt === null) {
            $this->throwNullValueException(static::UPDATED_AT);
        }

        return $this->updatedAt;
    }

    /**
     * @module QuoteApprovalWidget|QuoteApproval
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUpdatedAt()
    {
        $this->assertPropertyIsSet(self::UPDATED_AT);

        return $this;
    }

    /**
     * @module QuoteApproval
     *
     * @param \Generated\Shared\Transfer\CompanyUserTransfer|null $approver
     *
     * @return $this
     */
    public function setApprover(CompanyUserTransfer $approver = null)
    {
        $this->approver = $approver;
        $this->modifiedProperties[self::APPROVER] = true;

        return $this;
    }

    /**
     * @module QuoteApproval
     *
     * @return \Generated\Shared\Transfer\CompanyUserTransfer|null
     */
    public function getApprover()
    {
        return $this->approver;
    }

    /**
     * @module QuoteApproval
     *
     * @param \Generated\Shared\Transfer\CompanyUserTransfer $approver
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setApproverOrFail(CompanyUserTransfer $approver)
    {
        return $this->setApprover($approver);
    }

    /**
     * @module QuoteApproval
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CompanyUserTransfer
     */
    public function getApproverOrFail()
    {
        if ($this->approver === null) {
            $this->throwNullValueException(static::APPROVER);
        }

        return $this->approver;
    }

    /**
     * @module QuoteApproval
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireApprover()
    {
        $this->assertPropertyIsSet(self::APPROVER);

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
                case 'idQuoteApproval':
                case 'fkQuote':
                case 'approverCompanyUserId':
                case 'status':
                case 'createdAt':
                case 'updatedAt':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'approver':
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
                case 'idQuoteApproval':
                case 'fkQuote':
                case 'approverCompanyUserId':
                case 'status':
                case 'createdAt':
                case 'updatedAt':
                    $values[$arrayKey] = $value;

                    break;
                case 'approver':
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
                case 'idQuoteApproval':
                case 'fkQuote':
                case 'approverCompanyUserId':
                case 'status':
                case 'createdAt':
                case 'updatedAt':
                    $values[$arrayKey] = $value;

                    break;
                case 'approver':
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
            'idQuoteApproval' => $this->idQuoteApproval,
            'fkQuote' => $this->fkQuote,
            'approverCompanyUserId' => $this->approverCompanyUserId,
            'status' => $this->status,
            'createdAt' => $this->createdAt,
            'updatedAt' => $this->updatedAt,
            'approver' => $this->approver,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_quote_approval' => $this->idQuoteApproval,
            'fk_quote' => $this->fkQuote,
            'approver_company_user_id' => $this->approverCompanyUserId,
            'status' => $this->status,
            'created_at' => $this->createdAt,
            'updated_at' => $this->updatedAt,
            'approver' => $this->approver,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_quote_approval' => $this->idQuoteApproval instanceof AbstractTransfer ? $this->idQuoteApproval->toArray(true, false) : $this->idQuoteApproval,
            'fk_quote' => $this->fkQuote instanceof AbstractTransfer ? $this->fkQuote->toArray(true, false) : $this->fkQuote,
            'approver_company_user_id' => $this->approverCompanyUserId instanceof AbstractTransfer ? $this->approverCompanyUserId->toArray(true, false) : $this->approverCompanyUserId,
            'status' => $this->status instanceof AbstractTransfer ? $this->status->toArray(true, false) : $this->status,
            'created_at' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, false) : $this->createdAt,
            'updated_at' => $this->updatedAt instanceof AbstractTransfer ? $this->updatedAt->toArray(true, false) : $this->updatedAt,
            'approver' => $this->approver instanceof AbstractTransfer ? $this->approver->toArray(true, false) : $this->approver,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idQuoteApproval' => $this->idQuoteApproval instanceof AbstractTransfer ? $this->idQuoteApproval->toArray(true, true) : $this->idQuoteApproval,
            'fkQuote' => $this->fkQuote instanceof AbstractTransfer ? $this->fkQuote->toArray(true, true) : $this->fkQuote,
            'approverCompanyUserId' => $this->approverCompanyUserId instanceof AbstractTransfer ? $this->approverCompanyUserId->toArray(true, true) : $this->approverCompanyUserId,
            'status' => $this->status instanceof AbstractTransfer ? $this->status->toArray(true, true) : $this->status,
            'createdAt' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, true) : $this->createdAt,
            'updatedAt' => $this->updatedAt instanceof AbstractTransfer ? $this->updatedAt->toArray(true, true) : $this->updatedAt,
            'approver' => $this->approver instanceof AbstractTransfer ? $this->approver->toArray(true, true) : $this->approver,
        ];
    }
}
