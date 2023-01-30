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
class PublishAndSynchronizeHealthCheckTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_PUBLISH_AND_SYNCHRONIZE_HEALTH_CHECK = 'idPublishAndSynchronizeHealthCheck';

    /**
     * @var string
     */
    public const HEALTH_CHECK_KEY = 'healthCheckKey';

    /**
     * @var string
     */
    public const UPDATED_AT = 'updatedAt';

    /**
     * @var string
     */
    public const HEALTH_CHECK_DATA = 'healthCheckData';

    /**
     * @var int|null
     */
    protected $idPublishAndSynchronizeHealthCheck;

    /**
     * @var string|null
     */
    protected $healthCheckKey;

    /**
     * @var string|null
     */
    protected $updatedAt;

    /**
     * @var string|null
     */
    protected $healthCheckData;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_publish_and_synchronize_health_check' => 'idPublishAndSynchronizeHealthCheck',
        'idPublishAndSynchronizeHealthCheck' => 'idPublishAndSynchronizeHealthCheck',
        'IdPublishAndSynchronizeHealthCheck' => 'idPublishAndSynchronizeHealthCheck',
        'health_check_key' => 'healthCheckKey',
        'healthCheckKey' => 'healthCheckKey',
        'HealthCheckKey' => 'healthCheckKey',
        'updated_at' => 'updatedAt',
        'updatedAt' => 'updatedAt',
        'UpdatedAt' => 'updatedAt',
        'health_check_data' => 'healthCheckData',
        'healthCheckData' => 'healthCheckData',
        'HealthCheckData' => 'healthCheckData',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PUBLISH_AND_SYNCHRONIZE_HEALTH_CHECK => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_publish_and_synchronize_health_check',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::HEALTH_CHECK_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'health_check_key',
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
        self::HEALTH_CHECK_DATA => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'health_check_data',
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
     * @module PublishAndSynchronizeHealthCheckSearch|PublishAndSynchronizeHealthCheckStorage|PublishAndSynchronizeHealthCheck
     *
     * @param int|null $idPublishAndSynchronizeHealthCheck
     *
     * @return $this
     */
    public function setIdPublishAndSynchronizeHealthCheck($idPublishAndSynchronizeHealthCheck)
    {
        $this->idPublishAndSynchronizeHealthCheck = $idPublishAndSynchronizeHealthCheck;
        $this->modifiedProperties[self::ID_PUBLISH_AND_SYNCHRONIZE_HEALTH_CHECK] = true;

        return $this;
    }

    /**
     * @module PublishAndSynchronizeHealthCheckSearch|PublishAndSynchronizeHealthCheckStorage|PublishAndSynchronizeHealthCheck
     *
     * @return int|null
     */
    public function getIdPublishAndSynchronizeHealthCheck()
    {
        return $this->idPublishAndSynchronizeHealthCheck;
    }

    /**
     * @module PublishAndSynchronizeHealthCheckSearch|PublishAndSynchronizeHealthCheckStorage|PublishAndSynchronizeHealthCheck
     *
     * @param int|null $idPublishAndSynchronizeHealthCheck
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdPublishAndSynchronizeHealthCheckOrFail($idPublishAndSynchronizeHealthCheck)
    {
        if ($idPublishAndSynchronizeHealthCheck === null) {
            $this->throwNullValueException(static::ID_PUBLISH_AND_SYNCHRONIZE_HEALTH_CHECK);
        }

        return $this->setIdPublishAndSynchronizeHealthCheck($idPublishAndSynchronizeHealthCheck);
    }

    /**
     * @module PublishAndSynchronizeHealthCheckSearch|PublishAndSynchronizeHealthCheckStorage|PublishAndSynchronizeHealthCheck
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdPublishAndSynchronizeHealthCheckOrFail()
    {
        if ($this->idPublishAndSynchronizeHealthCheck === null) {
            $this->throwNullValueException(static::ID_PUBLISH_AND_SYNCHRONIZE_HEALTH_CHECK);
        }

        return $this->idPublishAndSynchronizeHealthCheck;
    }

    /**
     * @module PublishAndSynchronizeHealthCheckSearch|PublishAndSynchronizeHealthCheckStorage|PublishAndSynchronizeHealthCheck
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdPublishAndSynchronizeHealthCheck()
    {
        $this->assertPropertyIsSet(self::ID_PUBLISH_AND_SYNCHRONIZE_HEALTH_CHECK);

        return $this;
    }

    /**
     * @module PublishAndSynchronizeHealthCheckSearch|PublishAndSynchronizeHealthCheckStorage|PublishAndSynchronizeHealthCheck
     *
     * @param string|null $healthCheckKey
     *
     * @return $this
     */
    public function setHealthCheckKey($healthCheckKey)
    {
        $this->healthCheckKey = $healthCheckKey;
        $this->modifiedProperties[self::HEALTH_CHECK_KEY] = true;

        return $this;
    }

    /**
     * @module PublishAndSynchronizeHealthCheckSearch|PublishAndSynchronizeHealthCheckStorage|PublishAndSynchronizeHealthCheck
     *
     * @return string|null
     */
    public function getHealthCheckKey()
    {
        return $this->healthCheckKey;
    }

    /**
     * @module PublishAndSynchronizeHealthCheckSearch|PublishAndSynchronizeHealthCheckStorage|PublishAndSynchronizeHealthCheck
     *
     * @param string|null $healthCheckKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setHealthCheckKeyOrFail($healthCheckKey)
    {
        if ($healthCheckKey === null) {
            $this->throwNullValueException(static::HEALTH_CHECK_KEY);
        }

        return $this->setHealthCheckKey($healthCheckKey);
    }

    /**
     * @module PublishAndSynchronizeHealthCheckSearch|PublishAndSynchronizeHealthCheckStorage|PublishAndSynchronizeHealthCheck
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getHealthCheckKeyOrFail()
    {
        if ($this->healthCheckKey === null) {
            $this->throwNullValueException(static::HEALTH_CHECK_KEY);
        }

        return $this->healthCheckKey;
    }

    /**
     * @module PublishAndSynchronizeHealthCheckSearch|PublishAndSynchronizeHealthCheckStorage|PublishAndSynchronizeHealthCheck
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireHealthCheckKey()
    {
        $this->assertPropertyIsSet(self::HEALTH_CHECK_KEY);

        return $this;
    }

    /**
     * @module PublishAndSynchronizeHealthCheckSearch|PublishAndSynchronizeHealthCheckStorage|PublishAndSynchronizeHealthCheck
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
     * @module PublishAndSynchronizeHealthCheckSearch|PublishAndSynchronizeHealthCheckStorage|PublishAndSynchronizeHealthCheck
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @module PublishAndSynchronizeHealthCheckSearch|PublishAndSynchronizeHealthCheckStorage|PublishAndSynchronizeHealthCheck
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
     * @module PublishAndSynchronizeHealthCheckSearch|PublishAndSynchronizeHealthCheckStorage|PublishAndSynchronizeHealthCheck
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
     * @module PublishAndSynchronizeHealthCheckSearch|PublishAndSynchronizeHealthCheckStorage|PublishAndSynchronizeHealthCheck
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
     * @module PublishAndSynchronizeHealthCheckSearch|PublishAndSynchronizeHealthCheckStorage|PublishAndSynchronizeHealthCheck
     *
     * @param string|null $healthCheckData
     *
     * @return $this
     */
    public function setHealthCheckData($healthCheckData)
    {
        $this->healthCheckData = $healthCheckData;
        $this->modifiedProperties[self::HEALTH_CHECK_DATA] = true;

        return $this;
    }

    /**
     * @module PublishAndSynchronizeHealthCheckSearch|PublishAndSynchronizeHealthCheckStorage|PublishAndSynchronizeHealthCheck
     *
     * @return string|null
     */
    public function getHealthCheckData()
    {
        return $this->healthCheckData;
    }

    /**
     * @module PublishAndSynchronizeHealthCheckSearch|PublishAndSynchronizeHealthCheckStorage|PublishAndSynchronizeHealthCheck
     *
     * @param string|null $healthCheckData
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setHealthCheckDataOrFail($healthCheckData)
    {
        if ($healthCheckData === null) {
            $this->throwNullValueException(static::HEALTH_CHECK_DATA);
        }

        return $this->setHealthCheckData($healthCheckData);
    }

    /**
     * @module PublishAndSynchronizeHealthCheckSearch|PublishAndSynchronizeHealthCheckStorage|PublishAndSynchronizeHealthCheck
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getHealthCheckDataOrFail()
    {
        if ($this->healthCheckData === null) {
            $this->throwNullValueException(static::HEALTH_CHECK_DATA);
        }

        return $this->healthCheckData;
    }

    /**
     * @module PublishAndSynchronizeHealthCheckSearch|PublishAndSynchronizeHealthCheckStorage|PublishAndSynchronizeHealthCheck
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireHealthCheckData()
    {
        $this->assertPropertyIsSet(self::HEALTH_CHECK_DATA);

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
                case 'idPublishAndSynchronizeHealthCheck':
                case 'healthCheckKey':
                case 'updatedAt':
                case 'healthCheckData':
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
                case 'idPublishAndSynchronizeHealthCheck':
                case 'healthCheckKey':
                case 'updatedAt':
                case 'healthCheckData':
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
                case 'idPublishAndSynchronizeHealthCheck':
                case 'healthCheckKey':
                case 'updatedAt':
                case 'healthCheckData':
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
            'idPublishAndSynchronizeHealthCheck' => $this->idPublishAndSynchronizeHealthCheck,
            'healthCheckKey' => $this->healthCheckKey,
            'updatedAt' => $this->updatedAt,
            'healthCheckData' => $this->healthCheckData,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_publish_and_synchronize_health_check' => $this->idPublishAndSynchronizeHealthCheck,
            'health_check_key' => $this->healthCheckKey,
            'updated_at' => $this->updatedAt,
            'health_check_data' => $this->healthCheckData,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_publish_and_synchronize_health_check' => $this->idPublishAndSynchronizeHealthCheck instanceof AbstractTransfer ? $this->idPublishAndSynchronizeHealthCheck->toArray(true, false) : $this->idPublishAndSynchronizeHealthCheck,
            'health_check_key' => $this->healthCheckKey instanceof AbstractTransfer ? $this->healthCheckKey->toArray(true, false) : $this->healthCheckKey,
            'updated_at' => $this->updatedAt instanceof AbstractTransfer ? $this->updatedAt->toArray(true, false) : $this->updatedAt,
            'health_check_data' => $this->healthCheckData instanceof AbstractTransfer ? $this->healthCheckData->toArray(true, false) : $this->healthCheckData,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idPublishAndSynchronizeHealthCheck' => $this->idPublishAndSynchronizeHealthCheck instanceof AbstractTransfer ? $this->idPublishAndSynchronizeHealthCheck->toArray(true, true) : $this->idPublishAndSynchronizeHealthCheck,
            'healthCheckKey' => $this->healthCheckKey instanceof AbstractTransfer ? $this->healthCheckKey->toArray(true, true) : $this->healthCheckKey,
            'updatedAt' => $this->updatedAt instanceof AbstractTransfer ? $this->updatedAt->toArray(true, true) : $this->updatedAt,
            'healthCheckData' => $this->healthCheckData instanceof AbstractTransfer ? $this->healthCheckData->toArray(true, true) : $this->healthCheckData,
        ];
    }
}
