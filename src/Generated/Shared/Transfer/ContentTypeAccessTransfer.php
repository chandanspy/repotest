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
class ContentTypeAccessTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const CONTENT_TYPE = 'contentType';

    /**
     * @var string
     */
    public const IS_RESTRICTED = 'isRestricted';

    /**
     * @var string
     */
    public const ID_UNAUTHENTICATED_CUSTOMER_ACCESS = 'idUnauthenticatedCustomerAccess';

    /**
     * @var string|null
     */
    protected $contentType;

    /**
     * @var bool|null
     */
    protected $isRestricted;

    /**
     * @var int|null
     */
    protected $idUnauthenticatedCustomerAccess;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'content_type' => 'contentType',
        'contentType' => 'contentType',
        'ContentType' => 'contentType',
        'is_restricted' => 'isRestricted',
        'isRestricted' => 'isRestricted',
        'IsRestricted' => 'isRestricted',
        'id_unauthenticated_customer_access' => 'idUnauthenticatedCustomerAccess',
        'idUnauthenticatedCustomerAccess' => 'idUnauthenticatedCustomerAccess',
        'IdUnauthenticatedCustomerAccess' => 'idUnauthenticatedCustomerAccess',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::CONTENT_TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'content_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_RESTRICTED => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_restricted',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_UNAUTHENTICATED_CUSTOMER_ACCESS => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_unauthenticated_customer_access',
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
     * @module CustomerAccessPermission|CustomerAccessRestApi|CustomerAccess
     *
     * @param string|null $contentType
     *
     * @return $this
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
        $this->modifiedProperties[self::CONTENT_TYPE] = true;

        return $this;
    }

    /**
     * @module CustomerAccessPermission|CustomerAccessRestApi|CustomerAccess
     *
     * @return string|null
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * @module CustomerAccessPermission|CustomerAccessRestApi|CustomerAccess
     *
     * @param string|null $contentType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setContentTypeOrFail($contentType)
    {
        if ($contentType === null) {
            $this->throwNullValueException(static::CONTENT_TYPE);
        }

        return $this->setContentType($contentType);
    }

    /**
     * @module CustomerAccessPermission|CustomerAccessRestApi|CustomerAccess
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getContentTypeOrFail()
    {
        if ($this->contentType === null) {
            $this->throwNullValueException(static::CONTENT_TYPE);
        }

        return $this->contentType;
    }

    /**
     * @module CustomerAccessPermission|CustomerAccessRestApi|CustomerAccess
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireContentType()
    {
        $this->assertPropertyIsSet(self::CONTENT_TYPE);

        return $this;
    }

    /**
     * @module CustomerAccessRestApi|CustomerAccessStorage|CustomerAccess
     *
     * @param bool|null $isRestricted
     *
     * @return $this
     */
    public function setIsRestricted($isRestricted)
    {
        $this->isRestricted = $isRestricted;
        $this->modifiedProperties[self::IS_RESTRICTED] = true;

        return $this;
    }

    /**
     * @module CustomerAccessRestApi|CustomerAccessStorage|CustomerAccess
     *
     * @return bool|null
     */
    public function getIsRestricted()
    {
        return $this->isRestricted;
    }

    /**
     * @module CustomerAccessRestApi|CustomerAccessStorage|CustomerAccess
     *
     * @param bool|null $isRestricted
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsRestrictedOrFail($isRestricted)
    {
        if ($isRestricted === null) {
            $this->throwNullValueException(static::IS_RESTRICTED);
        }

        return $this->setIsRestricted($isRestricted);
    }

    /**
     * @module CustomerAccessRestApi|CustomerAccessStorage|CustomerAccess
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsRestrictedOrFail()
    {
        if ($this->isRestricted === null) {
            $this->throwNullValueException(static::IS_RESTRICTED);
        }

        return $this->isRestricted;
    }

    /**
     * @module CustomerAccessRestApi|CustomerAccessStorage|CustomerAccess
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsRestricted()
    {
        $this->assertPropertyIsSet(self::IS_RESTRICTED);

        return $this;
    }

    /**
     * @module CustomerAccess
     *
     * @param int|null $idUnauthenticatedCustomerAccess
     *
     * @return $this
     */
    public function setIdUnauthenticatedCustomerAccess($idUnauthenticatedCustomerAccess)
    {
        $this->idUnauthenticatedCustomerAccess = $idUnauthenticatedCustomerAccess;
        $this->modifiedProperties[self::ID_UNAUTHENTICATED_CUSTOMER_ACCESS] = true;

        return $this;
    }

    /**
     * @module CustomerAccess
     *
     * @return int|null
     */
    public function getIdUnauthenticatedCustomerAccess()
    {
        return $this->idUnauthenticatedCustomerAccess;
    }

    /**
     * @module CustomerAccess
     *
     * @param int|null $idUnauthenticatedCustomerAccess
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdUnauthenticatedCustomerAccessOrFail($idUnauthenticatedCustomerAccess)
    {
        if ($idUnauthenticatedCustomerAccess === null) {
            $this->throwNullValueException(static::ID_UNAUTHENTICATED_CUSTOMER_ACCESS);
        }

        return $this->setIdUnauthenticatedCustomerAccess($idUnauthenticatedCustomerAccess);
    }

    /**
     * @module CustomerAccess
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdUnauthenticatedCustomerAccessOrFail()
    {
        if ($this->idUnauthenticatedCustomerAccess === null) {
            $this->throwNullValueException(static::ID_UNAUTHENTICATED_CUSTOMER_ACCESS);
        }

        return $this->idUnauthenticatedCustomerAccess;
    }

    /**
     * @module CustomerAccess
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdUnauthenticatedCustomerAccess()
    {
        $this->assertPropertyIsSet(self::ID_UNAUTHENTICATED_CUSTOMER_ACCESS);

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
                case 'contentType':
                case 'isRestricted':
                case 'idUnauthenticatedCustomerAccess':
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
                case 'contentType':
                case 'isRestricted':
                case 'idUnauthenticatedCustomerAccess':
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
                case 'contentType':
                case 'isRestricted':
                case 'idUnauthenticatedCustomerAccess':
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
            'contentType' => $this->contentType,
            'isRestricted' => $this->isRestricted,
            'idUnauthenticatedCustomerAccess' => $this->idUnauthenticatedCustomerAccess,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'content_type' => $this->contentType,
            'is_restricted' => $this->isRestricted,
            'id_unauthenticated_customer_access' => $this->idUnauthenticatedCustomerAccess,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'content_type' => $this->contentType instanceof AbstractTransfer ? $this->contentType->toArray(true, false) : $this->contentType,
            'is_restricted' => $this->isRestricted instanceof AbstractTransfer ? $this->isRestricted->toArray(true, false) : $this->isRestricted,
            'id_unauthenticated_customer_access' => $this->idUnauthenticatedCustomerAccess instanceof AbstractTransfer ? $this->idUnauthenticatedCustomerAccess->toArray(true, false) : $this->idUnauthenticatedCustomerAccess,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'contentType' => $this->contentType instanceof AbstractTransfer ? $this->contentType->toArray(true, true) : $this->contentType,
            'isRestricted' => $this->isRestricted instanceof AbstractTransfer ? $this->isRestricted->toArray(true, true) : $this->isRestricted,
            'idUnauthenticatedCustomerAccess' => $this->idUnauthenticatedCustomerAccess instanceof AbstractTransfer ? $this->idUnauthenticatedCustomerAccess->toArray(true, true) : $this->idUnauthenticatedCustomerAccess,
        ];
    }
}
