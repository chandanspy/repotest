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
class ResourceShareDataTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SHARE_OPTION = 'shareOption';

    /**
     * @var string
     */
    public const ID_QUOTE = 'idQuote';

    /**
     * @var string
     */
    public const OWNER_COMPANY_USER_ID = 'ownerCompanyUserId';

    /**
     * @var string
     */
    public const OWNER_COMPANY_BUSINESS_UNIT_ID = 'ownerCompanyBusinessUnitId';

    /**
     * @var string|null
     */
    protected $shareOption;

    /**
     * @var int|null
     */
    protected $idQuote;

    /**
     * @var int|null
     */
    protected $ownerCompanyUserId;

    /**
     * @var int|null
     */
    protected $ownerCompanyBusinessUnitId;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'share_option' => 'shareOption',
        'shareOption' => 'shareOption',
        'ShareOption' => 'shareOption',
        'id_quote' => 'idQuote',
        'idQuote' => 'idQuote',
        'IdQuote' => 'idQuote',
        'owner_company_user_id' => 'ownerCompanyUserId',
        'ownerCompanyUserId' => 'ownerCompanyUserId',
        'OwnerCompanyUserId' => 'ownerCompanyUserId',
        'owner_company_business_unit_id' => 'ownerCompanyBusinessUnitId',
        'ownerCompanyBusinessUnitId' => 'ownerCompanyBusinessUnitId',
        'OwnerCompanyBusinessUnitId' => 'ownerCompanyBusinessUnitId',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::SHARE_OPTION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'share_option',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
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
        self::OWNER_COMPANY_USER_ID => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'owner_company_user_id',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::OWNER_COMPANY_BUSINESS_UNIT_ID => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'owner_company_business_unit_id',
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
     * @module PersistentCartSharePage|PersistentCartShareWidget|SharedCartPage|PersistentCartShare|ResourceShare|SharedCart
     *
     * @param string|null $shareOption
     *
     * @return $this
     */
    public function setShareOption($shareOption)
    {
        $this->shareOption = $shareOption;
        $this->modifiedProperties[self::SHARE_OPTION] = true;

        return $this;
    }

    /**
     * @module PersistentCartSharePage|PersistentCartShareWidget|SharedCartPage|PersistentCartShare|ResourceShare|SharedCart
     *
     * @return string|null
     */
    public function getShareOption()
    {
        return $this->shareOption;
    }

    /**
     * @module PersistentCartSharePage|PersistentCartShareWidget|SharedCartPage|PersistentCartShare|ResourceShare|SharedCart
     *
     * @param string|null $shareOption
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setShareOptionOrFail($shareOption)
    {
        if ($shareOption === null) {
            $this->throwNullValueException(static::SHARE_OPTION);
        }

        return $this->setShareOption($shareOption);
    }

    /**
     * @module PersistentCartSharePage|PersistentCartShareWidget|SharedCartPage|PersistentCartShare|ResourceShare|SharedCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getShareOptionOrFail()
    {
        if ($this->shareOption === null) {
            $this->throwNullValueException(static::SHARE_OPTION);
        }

        return $this->shareOption;
    }

    /**
     * @module PersistentCartSharePage|PersistentCartShareWidget|SharedCartPage|PersistentCartShare|ResourceShare|SharedCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireShareOption()
    {
        $this->assertPropertyIsSet(self::SHARE_OPTION);

        return $this;
    }

    /**
     * @module PersistentCartShareWidget|PersistentCartShare|SharedCart
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
     * @module PersistentCartShareWidget|PersistentCartShare|SharedCart
     *
     * @return int|null
     */
    public function getIdQuote()
    {
        return $this->idQuote;
    }

    /**
     * @module PersistentCartShareWidget|PersistentCartShare|SharedCart
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
     * @module PersistentCartShareWidget|PersistentCartShare|SharedCart
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
     * @module PersistentCartShareWidget|PersistentCartShare|SharedCart
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
     * @module PersistentCartShareWidget|PersistentCartShare|SharedCart
     *
     * @param int|null $ownerCompanyUserId
     *
     * @return $this
     */
    public function setOwnerCompanyUserId($ownerCompanyUserId)
    {
        $this->ownerCompanyUserId = $ownerCompanyUserId;
        $this->modifiedProperties[self::OWNER_COMPANY_USER_ID] = true;

        return $this;
    }

    /**
     * @module PersistentCartShareWidget|PersistentCartShare|SharedCart
     *
     * @return int|null
     */
    public function getOwnerCompanyUserId()
    {
        return $this->ownerCompanyUserId;
    }

    /**
     * @module PersistentCartShareWidget|PersistentCartShare|SharedCart
     *
     * @param int|null $ownerCompanyUserId
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOwnerCompanyUserIdOrFail($ownerCompanyUserId)
    {
        if ($ownerCompanyUserId === null) {
            $this->throwNullValueException(static::OWNER_COMPANY_USER_ID);
        }

        return $this->setOwnerCompanyUserId($ownerCompanyUserId);
    }

    /**
     * @module PersistentCartShareWidget|PersistentCartShare|SharedCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getOwnerCompanyUserIdOrFail()
    {
        if ($this->ownerCompanyUserId === null) {
            $this->throwNullValueException(static::OWNER_COMPANY_USER_ID);
        }

        return $this->ownerCompanyUserId;
    }

    /**
     * @module PersistentCartShareWidget|PersistentCartShare|SharedCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOwnerCompanyUserId()
    {
        $this->assertPropertyIsSet(self::OWNER_COMPANY_USER_ID);

        return $this;
    }

    /**
     * @module PersistentCartShareWidget|PersistentCartShare|SharedCart
     *
     * @param int|null $ownerCompanyBusinessUnitId
     *
     * @return $this
     */
    public function setOwnerCompanyBusinessUnitId($ownerCompanyBusinessUnitId)
    {
        $this->ownerCompanyBusinessUnitId = $ownerCompanyBusinessUnitId;
        $this->modifiedProperties[self::OWNER_COMPANY_BUSINESS_UNIT_ID] = true;

        return $this;
    }

    /**
     * @module PersistentCartShareWidget|PersistentCartShare|SharedCart
     *
     * @return int|null
     */
    public function getOwnerCompanyBusinessUnitId()
    {
        return $this->ownerCompanyBusinessUnitId;
    }

    /**
     * @module PersistentCartShareWidget|PersistentCartShare|SharedCart
     *
     * @param int|null $ownerCompanyBusinessUnitId
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOwnerCompanyBusinessUnitIdOrFail($ownerCompanyBusinessUnitId)
    {
        if ($ownerCompanyBusinessUnitId === null) {
            $this->throwNullValueException(static::OWNER_COMPANY_BUSINESS_UNIT_ID);
        }

        return $this->setOwnerCompanyBusinessUnitId($ownerCompanyBusinessUnitId);
    }

    /**
     * @module PersistentCartShareWidget|PersistentCartShare|SharedCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getOwnerCompanyBusinessUnitIdOrFail()
    {
        if ($this->ownerCompanyBusinessUnitId === null) {
            $this->throwNullValueException(static::OWNER_COMPANY_BUSINESS_UNIT_ID);
        }

        return $this->ownerCompanyBusinessUnitId;
    }

    /**
     * @module PersistentCartShareWidget|PersistentCartShare|SharedCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOwnerCompanyBusinessUnitId()
    {
        $this->assertPropertyIsSet(self::OWNER_COMPANY_BUSINESS_UNIT_ID);

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
                case 'shareOption':
                case 'idQuote':
                case 'ownerCompanyUserId':
                case 'ownerCompanyBusinessUnitId':
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
                case 'shareOption':
                case 'idQuote':
                case 'ownerCompanyUserId':
                case 'ownerCompanyBusinessUnitId':
                    $values[$arrayKey] = $value;

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
                case 'shareOption':
                case 'idQuote':
                case 'ownerCompanyUserId':
                case 'ownerCompanyBusinessUnitId':
                    $values[$arrayKey] = $value;

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
            'shareOption' => $this->shareOption,
            'idQuote' => $this->idQuote,
            'ownerCompanyUserId' => $this->ownerCompanyUserId,
            'ownerCompanyBusinessUnitId' => $this->ownerCompanyBusinessUnitId,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'share_option' => $this->shareOption,
            'id_quote' => $this->idQuote,
            'owner_company_user_id' => $this->ownerCompanyUserId,
            'owner_company_business_unit_id' => $this->ownerCompanyBusinessUnitId,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'share_option' => $this->shareOption instanceof AbstractTransfer ? $this->shareOption->toArray(true, false) : $this->shareOption,
            'id_quote' => $this->idQuote instanceof AbstractTransfer ? $this->idQuote->toArray(true, false) : $this->idQuote,
            'owner_company_user_id' => $this->ownerCompanyUserId instanceof AbstractTransfer ? $this->ownerCompanyUserId->toArray(true, false) : $this->ownerCompanyUserId,
            'owner_company_business_unit_id' => $this->ownerCompanyBusinessUnitId instanceof AbstractTransfer ? $this->ownerCompanyBusinessUnitId->toArray(true, false) : $this->ownerCompanyBusinessUnitId,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'shareOption' => $this->shareOption instanceof AbstractTransfer ? $this->shareOption->toArray(true, true) : $this->shareOption,
            'idQuote' => $this->idQuote instanceof AbstractTransfer ? $this->idQuote->toArray(true, true) : $this->idQuote,
            'ownerCompanyUserId' => $this->ownerCompanyUserId instanceof AbstractTransfer ? $this->ownerCompanyUserId->toArray(true, true) : $this->ownerCompanyUserId,
            'ownerCompanyBusinessUnitId' => $this->ownerCompanyBusinessUnitId instanceof AbstractTransfer ? $this->ownerCompanyBusinessUnitId->toArray(true, true) : $this->ownerCompanyBusinessUnitId,
        ];
    }
}
