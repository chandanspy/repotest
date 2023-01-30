<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyPublishAndSynchronizeHealthCheckSearchEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_PUBLISH_AND_SYNCHRONIZE_HEALTH_CHECK_SEARCH = 'idPublishAndSynchronizeHealthCheckSearch';

    /**
     * @var string
     */
    public const FK_PUBLISH_AND_SYNCHRONIZE_HEALTH_CHECK = 'fkPublishAndSynchronizeHealthCheck';

    /**
     * @var string
     */
    public const HEALTH_CHECK_KEY = 'healthCheckKey';

    /**
     * @var string|null
     */
    protected $idPublishAndSynchronizeHealthCheckSearch;

    /**
     * @var integer|null
     */
    protected $fkPublishAndSynchronizeHealthCheck;

    /**
     * @var string|null
     */
    protected $healthCheckKey;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_publish_and_synchronize_health_check_search' => 'idPublishAndSynchronizeHealthCheckSearch',
        'idPublishAndSynchronizeHealthCheckSearch' => 'idPublishAndSynchronizeHealthCheckSearch',
        'IdPublishAndSynchronizeHealthCheckSearch' => 'idPublishAndSynchronizeHealthCheckSearch',
        'fk_publish_and_synchronize_health_check' => 'fkPublishAndSynchronizeHealthCheck',
        'fkPublishAndSynchronizeHealthCheck' => 'fkPublishAndSynchronizeHealthCheck',
        'FkPublishAndSynchronizeHealthCheck' => 'fkPublishAndSynchronizeHealthCheck',
        'health_check_key' => 'healthCheckKey',
        'healthCheckKey' => 'healthCheckKey',
        'HealthCheckKey' => 'healthCheckKey',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PUBLISH_AND_SYNCHRONIZE_HEALTH_CHECK_SEARCH => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'id_publish_and_synchronize_health_check_search',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PUBLISH_AND_SYNCHRONIZE_HEALTH_CHECK => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_publish_and_synchronize_health_check',
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
    ];
    /**
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\PublishAndSynchronizeHealthCheckSearch\Persistence\SpyPublishAndSynchronizeHealthCheckSearch';


    /**
     * @module 
     *
     * @param string|null $idPublishAndSynchronizeHealthCheckSearch
     *
     * @return $this
     */
    public function setIdPublishAndSynchronizeHealthCheckSearch($idPublishAndSynchronizeHealthCheckSearch)
    {
        $this->idPublishAndSynchronizeHealthCheckSearch = $idPublishAndSynchronizeHealthCheckSearch;
        $this->modifiedProperties[self::ID_PUBLISH_AND_SYNCHRONIZE_HEALTH_CHECK_SEARCH] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getIdPublishAndSynchronizeHealthCheckSearch()
    {
        return $this->idPublishAndSynchronizeHealthCheckSearch;
    }

    /**
     * @module 
     *
     * @param string|null $idPublishAndSynchronizeHealthCheckSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdPublishAndSynchronizeHealthCheckSearchOrFail($idPublishAndSynchronizeHealthCheckSearch)
    {
        if ($idPublishAndSynchronizeHealthCheckSearch === null) {
            $this->throwNullValueException(static::ID_PUBLISH_AND_SYNCHRONIZE_HEALTH_CHECK_SEARCH);
        }

        return $this->setIdPublishAndSynchronizeHealthCheckSearch($idPublishAndSynchronizeHealthCheckSearch);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIdPublishAndSynchronizeHealthCheckSearchOrFail()
    {
        if ($this->idPublishAndSynchronizeHealthCheckSearch === null) {
            $this->throwNullValueException(static::ID_PUBLISH_AND_SYNCHRONIZE_HEALTH_CHECK_SEARCH);
        }

        return $this->idPublishAndSynchronizeHealthCheckSearch;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdPublishAndSynchronizeHealthCheckSearch()
    {
        $this->assertPropertyIsSet(self::ID_PUBLISH_AND_SYNCHRONIZE_HEALTH_CHECK_SEARCH);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkPublishAndSynchronizeHealthCheck
     *
     * @return $this
     */
    public function setFkPublishAndSynchronizeHealthCheck($fkPublishAndSynchronizeHealthCheck)
    {
        $this->fkPublishAndSynchronizeHealthCheck = $fkPublishAndSynchronizeHealthCheck;
        $this->modifiedProperties[self::FK_PUBLISH_AND_SYNCHRONIZE_HEALTH_CHECK] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkPublishAndSynchronizeHealthCheck()
    {
        return $this->fkPublishAndSynchronizeHealthCheck;
    }

    /**
     * @module 
     *
     * @param integer|null $fkPublishAndSynchronizeHealthCheck
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkPublishAndSynchronizeHealthCheckOrFail($fkPublishAndSynchronizeHealthCheck)
    {
        if ($fkPublishAndSynchronizeHealthCheck === null) {
            $this->throwNullValueException(static::FK_PUBLISH_AND_SYNCHRONIZE_HEALTH_CHECK);
        }

        return $this->setFkPublishAndSynchronizeHealthCheck($fkPublishAndSynchronizeHealthCheck);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkPublishAndSynchronizeHealthCheckOrFail()
    {
        if ($this->fkPublishAndSynchronizeHealthCheck === null) {
            $this->throwNullValueException(static::FK_PUBLISH_AND_SYNCHRONIZE_HEALTH_CHECK);
        }

        return $this->fkPublishAndSynchronizeHealthCheck;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkPublishAndSynchronizeHealthCheck()
    {
        $this->assertPropertyIsSet(self::FK_PUBLISH_AND_SYNCHRONIZE_HEALTH_CHECK);

        return $this;
    }

    /**
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getHealthCheckKey()
    {
        return $this->healthCheckKey;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
                case 'idPublishAndSynchronizeHealthCheckSearch':
                case 'fkPublishAndSynchronizeHealthCheck':
                case 'healthCheckKey':
                    $this->$normalizedPropertyName = $value;
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
                case 'idPublishAndSynchronizeHealthCheckSearch':
                case 'fkPublishAndSynchronizeHealthCheck':
                case 'healthCheckKey':
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
                case 'idPublishAndSynchronizeHealthCheckSearch':
                case 'fkPublishAndSynchronizeHealthCheck':
                case 'healthCheckKey':
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
            'idPublishAndSynchronizeHealthCheckSearch' => $this->idPublishAndSynchronizeHealthCheckSearch,
            'fkPublishAndSynchronizeHealthCheck' => $this->fkPublishAndSynchronizeHealthCheck,
            'healthCheckKey' => $this->healthCheckKey,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_publish_and_synchronize_health_check_search' => $this->idPublishAndSynchronizeHealthCheckSearch,
            'fk_publish_and_synchronize_health_check' => $this->fkPublishAndSynchronizeHealthCheck,
            'health_check_key' => $this->healthCheckKey,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_publish_and_synchronize_health_check_search' => $this->idPublishAndSynchronizeHealthCheckSearch instanceof AbstractTransfer ? $this->idPublishAndSynchronizeHealthCheckSearch->toArray(true, false) : $this->idPublishAndSynchronizeHealthCheckSearch,
            'fk_publish_and_synchronize_health_check' => $this->fkPublishAndSynchronizeHealthCheck instanceof AbstractTransfer ? $this->fkPublishAndSynchronizeHealthCheck->toArray(true, false) : $this->fkPublishAndSynchronizeHealthCheck,
            'health_check_key' => $this->healthCheckKey instanceof AbstractTransfer ? $this->healthCheckKey->toArray(true, false) : $this->healthCheckKey,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idPublishAndSynchronizeHealthCheckSearch' => $this->idPublishAndSynchronizeHealthCheckSearch instanceof AbstractTransfer ? $this->idPublishAndSynchronizeHealthCheckSearch->toArray(true, true) : $this->idPublishAndSynchronizeHealthCheckSearch,
            'fkPublishAndSynchronizeHealthCheck' => $this->fkPublishAndSynchronizeHealthCheck instanceof AbstractTransfer ? $this->fkPublishAndSynchronizeHealthCheck->toArray(true, true) : $this->fkPublishAndSynchronizeHealthCheck,
            'healthCheckKey' => $this->healthCheckKey instanceof AbstractTransfer ? $this->healthCheckKey->toArray(true, true) : $this->healthCheckKey,
        ];
    }
}
