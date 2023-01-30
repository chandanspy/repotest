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
class CompanyUserInvitationStatusTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_COMPANY_USER_INVITATION_STATUS = 'idCompanyUserInvitationStatus';

    /**
     * @var string
     */
    public const STATUS_KEY = 'statusKey';

    /**
     * @var int|null
     */
    protected $idCompanyUserInvitationStatus;

    /**
     * @var string|null
     */
    protected $statusKey;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_company_user_invitation_status' => 'idCompanyUserInvitationStatus',
        'idCompanyUserInvitationStatus' => 'idCompanyUserInvitationStatus',
        'IdCompanyUserInvitationStatus' => 'idCompanyUserInvitationStatus',
        'status_key' => 'statusKey',
        'statusKey' => 'statusKey',
        'StatusKey' => 'statusKey',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_COMPANY_USER_INVITATION_STATUS => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_company_user_invitation_status',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STATUS_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'status_key',
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
     * @module CompanyUserInvitation
     *
     * @param int|null $idCompanyUserInvitationStatus
     *
     * @return $this
     */
    public function setIdCompanyUserInvitationStatus($idCompanyUserInvitationStatus)
    {
        $this->idCompanyUserInvitationStatus = $idCompanyUserInvitationStatus;
        $this->modifiedProperties[self::ID_COMPANY_USER_INVITATION_STATUS] = true;

        return $this;
    }

    /**
     * @module CompanyUserInvitation
     *
     * @return int|null
     */
    public function getIdCompanyUserInvitationStatus()
    {
        return $this->idCompanyUserInvitationStatus;
    }

    /**
     * @module CompanyUserInvitation
     *
     * @param int|null $idCompanyUserInvitationStatus
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCompanyUserInvitationStatusOrFail($idCompanyUserInvitationStatus)
    {
        if ($idCompanyUserInvitationStatus === null) {
            $this->throwNullValueException(static::ID_COMPANY_USER_INVITATION_STATUS);
        }

        return $this->setIdCompanyUserInvitationStatus($idCompanyUserInvitationStatus);
    }

    /**
     * @module CompanyUserInvitation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCompanyUserInvitationStatusOrFail()
    {
        if ($this->idCompanyUserInvitationStatus === null) {
            $this->throwNullValueException(static::ID_COMPANY_USER_INVITATION_STATUS);
        }

        return $this->idCompanyUserInvitationStatus;
    }

    /**
     * @module CompanyUserInvitation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCompanyUserInvitationStatus()
    {
        $this->assertPropertyIsSet(self::ID_COMPANY_USER_INVITATION_STATUS);

        return $this;
    }

    /**
     * @module CompanyUserInvitation
     *
     * @param string|null $statusKey
     *
     * @return $this
     */
    public function setStatusKey($statusKey)
    {
        $this->statusKey = $statusKey;
        $this->modifiedProperties[self::STATUS_KEY] = true;

        return $this;
    }

    /**
     * @module CompanyUserInvitation
     *
     * @return string|null
     */
    public function getStatusKey()
    {
        return $this->statusKey;
    }

    /**
     * @module CompanyUserInvitation
     *
     * @param string|null $statusKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStatusKeyOrFail($statusKey)
    {
        if ($statusKey === null) {
            $this->throwNullValueException(static::STATUS_KEY);
        }

        return $this->setStatusKey($statusKey);
    }

    /**
     * @module CompanyUserInvitation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStatusKeyOrFail()
    {
        if ($this->statusKey === null) {
            $this->throwNullValueException(static::STATUS_KEY);
        }

        return $this->statusKey;
    }

    /**
     * @module CompanyUserInvitation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStatusKey()
    {
        $this->assertPropertyIsSet(self::STATUS_KEY);

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
                case 'idCompanyUserInvitationStatus':
                case 'statusKey':
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
                case 'idCompanyUserInvitationStatus':
                case 'statusKey':
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
                case 'idCompanyUserInvitationStatus':
                case 'statusKey':
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
            'idCompanyUserInvitationStatus' => $this->idCompanyUserInvitationStatus,
            'statusKey' => $this->statusKey,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_company_user_invitation_status' => $this->idCompanyUserInvitationStatus,
            'status_key' => $this->statusKey,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_company_user_invitation_status' => $this->idCompanyUserInvitationStatus instanceof AbstractTransfer ? $this->idCompanyUserInvitationStatus->toArray(true, false) : $this->idCompanyUserInvitationStatus,
            'status_key' => $this->statusKey instanceof AbstractTransfer ? $this->statusKey->toArray(true, false) : $this->statusKey,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCompanyUserInvitationStatus' => $this->idCompanyUserInvitationStatus instanceof AbstractTransfer ? $this->idCompanyUserInvitationStatus->toArray(true, true) : $this->idCompanyUserInvitationStatus,
            'statusKey' => $this->statusKey instanceof AbstractTransfer ? $this->statusKey->toArray(true, true) : $this->statusKey,
        ];
    }
}
