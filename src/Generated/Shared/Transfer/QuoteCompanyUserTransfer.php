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
class QuoteCompanyUserTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_QUOTE_COMPANY_USER = 'idQuoteCompanyUser';

    /**
     * @var string
     */
    public const FK_COMPANY_USER = 'fkCompanyUser';

    /**
     * @var string
     */
    public const FK_QUOTE_PERMISSION_GROUP = 'fkQuotePermissionGroup';

    /**
     * @var string
     */
    public const FK_QUOTE = 'fkQuote';

    /**
     * @var string
     */
    public const QUOTE = 'quote';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var int|null
     */
    protected $idQuoteCompanyUser;

    /**
     * @var int|null
     */
    protected $fkCompanyUser;

    /**
     * @var int|null
     */
    protected $fkQuotePermissionGroup;

    /**
     * @var int|null
     */
    protected $fkQuote;

    /**
     * @var \Generated\Shared\Transfer\QuoteTransfer|null
     */
    protected $quote;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_quote_company_user' => 'idQuoteCompanyUser',
        'idQuoteCompanyUser' => 'idQuoteCompanyUser',
        'IdQuoteCompanyUser' => 'idQuoteCompanyUser',
        'fk_company_user' => 'fkCompanyUser',
        'fkCompanyUser' => 'fkCompanyUser',
        'FkCompanyUser' => 'fkCompanyUser',
        'fk_quote_permission_group' => 'fkQuotePermissionGroup',
        'fkQuotePermissionGroup' => 'fkQuotePermissionGroup',
        'FkQuotePermissionGroup' => 'fkQuotePermissionGroup',
        'fk_quote' => 'fkQuote',
        'fkQuote' => 'fkQuote',
        'FkQuote' => 'fkQuote',
        'quote' => 'quote',
        'Quote' => 'quote',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::FK_QUOTE_PERMISSION_GROUP => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_quote_permission_group',
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
     * @module SharedCart|SharedCartsRestApi
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
     * @module SharedCart|SharedCartsRestApi
     *
     * @return int|null
     */
    public function getFkCompanyUser()
    {
        return $this->fkCompanyUser;
    }

    /**
     * @module SharedCart|SharedCartsRestApi
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
     * @module SharedCart|SharedCartsRestApi
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
     * @module SharedCart|SharedCartsRestApi
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
     * @module SharedCart|SharedCartsRestApi
     *
     * @param int|null $fkQuotePermissionGroup
     *
     * @return $this
     */
    public function setFkQuotePermissionGroup($fkQuotePermissionGroup)
    {
        $this->fkQuotePermissionGroup = $fkQuotePermissionGroup;
        $this->modifiedProperties[self::FK_QUOTE_PERMISSION_GROUP] = true;

        return $this;
    }

    /**
     * @module SharedCart|SharedCartsRestApi
     *
     * @return int|null
     */
    public function getFkQuotePermissionGroup()
    {
        return $this->fkQuotePermissionGroup;
    }

    /**
     * @module SharedCart|SharedCartsRestApi
     *
     * @param int|null $fkQuotePermissionGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkQuotePermissionGroupOrFail($fkQuotePermissionGroup)
    {
        if ($fkQuotePermissionGroup === null) {
            $this->throwNullValueException(static::FK_QUOTE_PERMISSION_GROUP);
        }

        return $this->setFkQuotePermissionGroup($fkQuotePermissionGroup);
    }

    /**
     * @module SharedCart|SharedCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkQuotePermissionGroupOrFail()
    {
        if ($this->fkQuotePermissionGroup === null) {
            $this->throwNullValueException(static::FK_QUOTE_PERMISSION_GROUP);
        }

        return $this->fkQuotePermissionGroup;
    }

    /**
     * @module SharedCart|SharedCartsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkQuotePermissionGroup()
    {
        $this->assertPropertyIsSet(self::FK_QUOTE_PERMISSION_GROUP);

        return $this;
    }

    /**
     * @module SharedCart|SharedCartsRestApi
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
     * @module SharedCart|SharedCartsRestApi
     *
     * @return int|null
     */
    public function getFkQuote()
    {
        return $this->fkQuote;
    }

    /**
     * @module SharedCart|SharedCartsRestApi
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
     * @module SharedCart|SharedCartsRestApi
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
     * @module SharedCart|SharedCartsRestApi
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
     * @module SharedCart|SharedCartsRestApi
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
     * @module SharedCart|SharedCartsRestApi
     *
     * @return \Generated\Shared\Transfer\QuoteTransfer|null
     */
    public function getQuote()
    {
        return $this->quote;
    }

    /**
     * @module SharedCart|SharedCartsRestApi
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
     * @module SharedCart|SharedCartsRestApi
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
     * @module SharedCart|SharedCartsRestApi
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
     * @module SharedCart|SharedCartsRestApi
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
     * @module SharedCart|SharedCartsRestApi
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @module SharedCart|SharedCartsRestApi
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
     * @module SharedCart|SharedCartsRestApi
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
     * @module SharedCart|SharedCartsRestApi
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
                case 'idQuoteCompanyUser':
                case 'fkCompanyUser':
                case 'fkQuotePermissionGroup':
                case 'fkQuote':
                case 'uuid':
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
                case 'idQuoteCompanyUser':
                case 'fkCompanyUser':
                case 'fkQuotePermissionGroup':
                case 'fkQuote':
                case 'uuid':
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
                case 'idQuoteCompanyUser':
                case 'fkCompanyUser':
                case 'fkQuotePermissionGroup':
                case 'fkQuote':
                case 'uuid':
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
            'idQuoteCompanyUser' => $this->idQuoteCompanyUser,
            'fkCompanyUser' => $this->fkCompanyUser,
            'fkQuotePermissionGroup' => $this->fkQuotePermissionGroup,
            'fkQuote' => $this->fkQuote,
            'uuid' => $this->uuid,
            'quote' => $this->quote,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_quote_company_user' => $this->idQuoteCompanyUser,
            'fk_company_user' => $this->fkCompanyUser,
            'fk_quote_permission_group' => $this->fkQuotePermissionGroup,
            'fk_quote' => $this->fkQuote,
            'uuid' => $this->uuid,
            'quote' => $this->quote,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_quote_company_user' => $this->idQuoteCompanyUser instanceof AbstractTransfer ? $this->idQuoteCompanyUser->toArray(true, false) : $this->idQuoteCompanyUser,
            'fk_company_user' => $this->fkCompanyUser instanceof AbstractTransfer ? $this->fkCompanyUser->toArray(true, false) : $this->fkCompanyUser,
            'fk_quote_permission_group' => $this->fkQuotePermissionGroup instanceof AbstractTransfer ? $this->fkQuotePermissionGroup->toArray(true, false) : $this->fkQuotePermissionGroup,
            'fk_quote' => $this->fkQuote instanceof AbstractTransfer ? $this->fkQuote->toArray(true, false) : $this->fkQuote,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'quote' => $this->quote instanceof AbstractTransfer ? $this->quote->toArray(true, false) : $this->quote,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idQuoteCompanyUser' => $this->idQuoteCompanyUser instanceof AbstractTransfer ? $this->idQuoteCompanyUser->toArray(true, true) : $this->idQuoteCompanyUser,
            'fkCompanyUser' => $this->fkCompanyUser instanceof AbstractTransfer ? $this->fkCompanyUser->toArray(true, true) : $this->fkCompanyUser,
            'fkQuotePermissionGroup' => $this->fkQuotePermissionGroup instanceof AbstractTransfer ? $this->fkQuotePermissionGroup->toArray(true, true) : $this->fkQuotePermissionGroup,
            'fkQuote' => $this->fkQuote instanceof AbstractTransfer ? $this->fkQuote->toArray(true, true) : $this->fkQuote,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'quote' => $this->quote instanceof AbstractTransfer ? $this->quote->toArray(true, true) : $this->quote,
        ];
    }
}
