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
class QuoteApprovalRequestTransfer extends AbstractTransfer
{
    /**
     * @deprecated Use quote property instead.
     */
    public const ID_QUOTE = 'idQuote';

    /**
     * @var string
     */
    public const QUOTE = 'quote';

    /**
     * @var string
     */
    public const APPROVER_COMPANY_USER_ID = 'approverCompanyUserId';

    /**
     * @var string
     */
    public const REQUESTER_COMPANY_USER_ID = 'requesterCompanyUserId';

    /**
     * @var string
     */
    public const ID_QUOTE_APPROVAL = 'idQuoteApproval';

    /**
     * @var string
     */
    public const QUOTE_IDS = 'quoteIds';

    /**
     * @var int|null
     */
    protected $idQuote;

    /**
     * @var \Generated\Shared\Transfer\QuoteTransfer|null
     */
    protected $quote;

    /**
     * @var int|null
     */
    protected $approverCompanyUserId;

    /**
     * @var int|null
     */
    protected $requesterCompanyUserId;

    /**
     * @var int|null
     */
    protected $idQuoteApproval;

    /**
     * @var int[]
     */
    protected $quoteIds = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_quote' => 'idQuote',
        'idQuote' => 'idQuote',
        'IdQuote' => 'idQuote',
        'quote' => 'quote',
        'Quote' => 'quote',
        'approver_company_user_id' => 'approverCompanyUserId',
        'approverCompanyUserId' => 'approverCompanyUserId',
        'ApproverCompanyUserId' => 'approverCompanyUserId',
        'requester_company_user_id' => 'requesterCompanyUserId',
        'requesterCompanyUserId' => 'requesterCompanyUserId',
        'RequesterCompanyUserId' => 'requesterCompanyUserId',
        'id_quote_approval' => 'idQuoteApproval',
        'idQuoteApproval' => 'idQuoteApproval',
        'IdQuoteApproval' => 'idQuoteApproval',
        'quote_ids' => 'quoteIds',
        'quoteIds' => 'quoteIds',
        'QuoteIds' => 'quoteIds',
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
        self::QUOTE => [
            'type' => 'Generated\Shared\Transfer\QuoteTransfer',
            'type_shim' => null,
            'name_underscore' => 'quote',
            'is_collection' => false,
            'is_transfer' => true,
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
        self::REQUESTER_COMPANY_USER_ID => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'requester_company_user_id',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
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
    ];

    /**
     * @module QuoteApprovalWidget|QuoteApproval
     *
     * @deprecated Use quote property instead.
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
     * @module QuoteApprovalWidget|QuoteApproval
     *
     * @deprecated Use quote property instead.
     *
     * @return int|null
     */
    public function getIdQuote()
    {
        return $this->idQuote;
    }

    /**
     * @module QuoteApprovalWidget|QuoteApproval
     *
     * @deprecated Use quote property instead.
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
     * @module QuoteApprovalWidget|QuoteApproval
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use quote property instead.
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
     * @module QuoteApprovalWidget|QuoteApproval
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use quote property instead.
     *
     * @return $this
     */
    public function requireIdQuote()
    {
        $this->assertPropertyIsSet(self::ID_QUOTE);

        return $this;
    }

    /**
     * @module QuoteApprovalWidget|QuoteApproval
     *
     * @param \Generated\Shared\Transfer\QuoteTransfer|null $quote
     *
     * @return $this
     */
    public function setQuote(QuoteTransfer $quote = null)
    {
        $this->quote = $quote;
        $this->modifiedProperties[self::QUOTE] = true;

        return $this;
    }

    /**
     * @module QuoteApprovalWidget|QuoteApproval
     *
     * @return \Generated\Shared\Transfer\QuoteTransfer|null
     */
    public function getQuote()
    {
        return $this->quote;
    }

    /**
     * @module QuoteApprovalWidget|QuoteApproval
     *
     * @param \Generated\Shared\Transfer\QuoteTransfer $quote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuoteOrFail(QuoteTransfer $quote)
    {
        return $this->setQuote($quote);
    }

    /**
     * @module QuoteApprovalWidget|QuoteApproval
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\QuoteTransfer
     */
    public function getQuoteOrFail()
    {
        if ($this->quote === null) {
            $this->throwNullValueException(static::QUOTE);
        }

        return $this->quote;
    }

    /**
     * @module QuoteApprovalWidget|QuoteApproval
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuote()
    {
        $this->assertPropertyIsSet(self::QUOTE);

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
     * @param int|null $requesterCompanyUserId
     *
     * @return $this
     */
    public function setRequesterCompanyUserId($requesterCompanyUserId)
    {
        $this->requesterCompanyUserId = $requesterCompanyUserId;
        $this->modifiedProperties[self::REQUESTER_COMPANY_USER_ID] = true;

        return $this;
    }

    /**
     * @module QuoteApprovalWidget|QuoteApproval
     *
     * @return int|null
     */
    public function getRequesterCompanyUserId()
    {
        return $this->requesterCompanyUserId;
    }

    /**
     * @module QuoteApprovalWidget|QuoteApproval
     *
     * @param int|null $requesterCompanyUserId
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRequesterCompanyUserIdOrFail($requesterCompanyUserId)
    {
        if ($requesterCompanyUserId === null) {
            $this->throwNullValueException(static::REQUESTER_COMPANY_USER_ID);
        }

        return $this->setRequesterCompanyUserId($requesterCompanyUserId);
    }

    /**
     * @module QuoteApprovalWidget|QuoteApproval
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getRequesterCompanyUserIdOrFail()
    {
        if ($this->requesterCompanyUserId === null) {
            $this->throwNullValueException(static::REQUESTER_COMPANY_USER_ID);
        }

        return $this->requesterCompanyUserId;
    }

    /**
     * @module QuoteApprovalWidget|QuoteApproval
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRequesterCompanyUserId()
    {
        $this->assertPropertyIsSet(self::REQUESTER_COMPANY_USER_ID);

        return $this;
    }

    /**
     * @module QuoteApprovalWidget|QuoteApproval
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
     * @module QuoteApprovalWidget|QuoteApproval
     *
     * @return int|null
     */
    public function getIdQuoteApproval()
    {
        return $this->idQuoteApproval;
    }

    /**
     * @module QuoteApprovalWidget|QuoteApproval
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
     * @module QuoteApprovalWidget|QuoteApproval
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
     * @module QuoteApprovalWidget|QuoteApproval
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
     * @module QuoteApproval
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
     * @module QuoteApproval
     *
     * @return int[]
     */
    public function getQuoteIds()
    {
        return $this->quoteIds;
    }

    /**
     * @module QuoteApproval
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
     * @module QuoteApproval
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
                case 'approverCompanyUserId':
                case 'requesterCompanyUserId':
                case 'idQuoteApproval':
                case 'quoteIds':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'quote':
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
                case 'idQuote':
                case 'approverCompanyUserId':
                case 'requesterCompanyUserId':
                case 'idQuoteApproval':
                case 'quoteIds':
                    $values[$arrayKey] = $value;

                    break;
                case 'quote':
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
                case 'idQuote':
                case 'approverCompanyUserId':
                case 'requesterCompanyUserId':
                case 'idQuoteApproval':
                case 'quoteIds':
                    $values[$arrayKey] = $value;

                    break;
                case 'quote':
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
            'idQuote' => $this->idQuote,
            'approverCompanyUserId' => $this->approverCompanyUserId,
            'requesterCompanyUserId' => $this->requesterCompanyUserId,
            'idQuoteApproval' => $this->idQuoteApproval,
            'quoteIds' => $this->quoteIds,
            'quote' => $this->quote,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_quote' => $this->idQuote,
            'approver_company_user_id' => $this->approverCompanyUserId,
            'requester_company_user_id' => $this->requesterCompanyUserId,
            'id_quote_approval' => $this->idQuoteApproval,
            'quote_ids' => $this->quoteIds,
            'quote' => $this->quote,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_quote' => $this->idQuote instanceof AbstractTransfer ? $this->idQuote->toArray(true, false) : $this->idQuote,
            'approver_company_user_id' => $this->approverCompanyUserId instanceof AbstractTransfer ? $this->approverCompanyUserId->toArray(true, false) : $this->approverCompanyUserId,
            'requester_company_user_id' => $this->requesterCompanyUserId instanceof AbstractTransfer ? $this->requesterCompanyUserId->toArray(true, false) : $this->requesterCompanyUserId,
            'id_quote_approval' => $this->idQuoteApproval instanceof AbstractTransfer ? $this->idQuoteApproval->toArray(true, false) : $this->idQuoteApproval,
            'quote_ids' => $this->quoteIds instanceof AbstractTransfer ? $this->quoteIds->toArray(true, false) : $this->quoteIds,
            'quote' => $this->quote instanceof AbstractTransfer ? $this->quote->toArray(true, false) : $this->quote,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idQuote' => $this->idQuote instanceof AbstractTransfer ? $this->idQuote->toArray(true, true) : $this->idQuote,
            'approverCompanyUserId' => $this->approverCompanyUserId instanceof AbstractTransfer ? $this->approverCompanyUserId->toArray(true, true) : $this->approverCompanyUserId,
            'requesterCompanyUserId' => $this->requesterCompanyUserId instanceof AbstractTransfer ? $this->requesterCompanyUserId->toArray(true, true) : $this->requesterCompanyUserId,
            'idQuoteApproval' => $this->idQuoteApproval instanceof AbstractTransfer ? $this->idQuoteApproval->toArray(true, true) : $this->idQuoteApproval,
            'quoteIds' => $this->quoteIds instanceof AbstractTransfer ? $this->quoteIds->toArray(true, true) : $this->quoteIds,
            'quote' => $this->quote instanceof AbstractTransfer ? $this->quote->toArray(true, true) : $this->quote,
        ];
    }
}
