<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyCompanyUserInvitationStatusEntityTransfer extends AbstractEntityTransfer
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
     * @var string
     */
    public const SPY_COMPANY_USER_INVITATIONS = 'spyCompanyUserInvitations';

    /**
     * @var integer|null
     */
    protected $idCompanyUserInvitationStatus;

    /**
     * @var string|null
     */
    protected $statusKey;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCompanyUserInvitationEntityTransfer[]
     */
    protected $spyCompanyUserInvitations;

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
        'spy_company_user_invitations' => 'spyCompanyUserInvitations',
        'spyCompanyUserInvitations' => 'spyCompanyUserInvitations',
        'SpyCompanyUserInvitations' => 'spyCompanyUserInvitations',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_COMPANY_USER_INVITATION_STATUS => [
            'type' => 'integer',
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
        self::SPY_COMPANY_USER_INVITATIONS => [
            'type' => 'Generated\Shared\Transfer\SpyCompanyUserInvitationEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_company_user_invitations',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];
    /**
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\CompanyUserInvitation\Persistence\SpyCompanyUserInvitationStatus';


    /**
     * @module 
     *
     * @param integer|null $idCompanyUserInvitationStatus
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdCompanyUserInvitationStatus()
    {
        return $this->idCompanyUserInvitationStatus;
    }

    /**
     * @module 
     *
     * @param integer|null $idCompanyUserInvitationStatus
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdCompanyUserInvitationStatusOrFail()
    {
        if ($this->idCompanyUserInvitationStatus === null) {
            $this->throwNullValueException(static::ID_COMPANY_USER_INVITATION_STATUS);
        }

        return $this->idCompanyUserInvitationStatus;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getStatusKey()
    {
        return $this->statusKey;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCompanyUserInvitationEntityTransfer[] $spyCompanyUserInvitations
     *
     * @return $this
     */
    public function setSpyCompanyUserInvitations(ArrayObject $spyCompanyUserInvitations)
    {
        $this->spyCompanyUserInvitations = $spyCompanyUserInvitations;
        $this->modifiedProperties[self::SPY_COMPANY_USER_INVITATIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCompanyUserInvitationEntityTransfer[]
     */
    public function getSpyCompanyUserInvitations()
    {
        return $this->spyCompanyUserInvitations;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCompanyUserInvitationEntityTransfer $spyCompanyUserInvitations
     *
     * @return $this
     */
    public function addSpyCompanyUserInvitations(SpyCompanyUserInvitationEntityTransfer $spyCompanyUserInvitations)
    {
        $this->spyCompanyUserInvitations[] = $spyCompanyUserInvitations;
        $this->modifiedProperties[self::SPY_COMPANY_USER_INVITATIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCompanyUserInvitations()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_COMPANY_USER_INVITATIONS);

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
                case 'spyCompanyUserInvitations':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                default:
                    if (!$ignoreMissingProperty) {
                        throw new \InvalidArgumentException(sprintf('Missing property `%s` in `%s`', $property, static::class));
                    }
                    $this->virtualProperties[$property] = $value;
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
                case 'spyCompanyUserInvitations':
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
                case 'idCompanyUserInvitationStatus':
                case 'statusKey':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyCompanyUserInvitations':
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
        $this->spyCompanyUserInvitations = $this->spyCompanyUserInvitations ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idCompanyUserInvitationStatus' => $this->idCompanyUserInvitationStatus,
            'statusKey' => $this->statusKey,
            'spyCompanyUserInvitations' => $this->spyCompanyUserInvitations,
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
            'spy_company_user_invitations' => $this->spyCompanyUserInvitations,
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
            'spy_company_user_invitations' => $this->spyCompanyUserInvitations instanceof AbstractTransfer ? $this->spyCompanyUserInvitations->toArray(true, false) : $this->addValuesToCollection($this->spyCompanyUserInvitations, true, false),
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
            'spyCompanyUserInvitations' => $this->spyCompanyUserInvitations instanceof AbstractTransfer ? $this->spyCompanyUserInvitations->toArray(true, true) : $this->addValuesToCollection($this->spyCompanyUserInvitations, true, true),
        ];
    }
}
