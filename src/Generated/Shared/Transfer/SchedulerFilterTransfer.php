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
class SchedulerFilterTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SCHEDULERS = 'schedulers';

    /**
     * @var string
     */
    public const JOBS = 'jobs';

    /**
     * @var string
     */
    public const ROLES = 'roles';

    /**
     * @var string
     */
    public const STORE = 'store';

    /**
     * @var string[]
     */
    protected $schedulers = [];

    /**
     * @var string[]
     */
    protected $jobs = [];

    /**
     * @var string[]
     */
    protected $roles = [];

    /**
     * @var string|null
     */
    protected $store;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'schedulers' => 'schedulers',
        'Schedulers' => 'schedulers',
        'jobs' => 'jobs',
        'Jobs' => 'jobs',
        'roles' => 'roles',
        'Roles' => 'roles',
        'store' => 'store',
        'Store' => 'store',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::SCHEDULERS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'schedulers',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::JOBS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'jobs',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ROLES => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'roles',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'store',
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
     * @module Scheduler
     *
     * @param string[]|null $schedulers
     *
     * @return $this
     */
    public function setSchedulers(array $schedulers = null)
    {
        if ($schedulers === null) {
            $schedulers = [];
        }

        $this->schedulers = $schedulers;
        $this->modifiedProperties[self::SCHEDULERS] = true;

        return $this;
    }

    /**
     * @module Scheduler
     *
     * @return string[]
     */
    public function getSchedulers()
    {
        return $this->schedulers;
    }

    /**
     * @module Scheduler
     *
     * @param string $scheduler
     *
     * @return $this
     */
    public function addScheduler($scheduler)
    {
        $this->schedulers[] = $scheduler;
        $this->modifiedProperties[self::SCHEDULERS] = true;

        return $this;
    }

    /**
     * @module Scheduler
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSchedulers()
    {
        $this->assertPropertyIsSet(self::SCHEDULERS);

        return $this;
    }

    /**
     * @module Scheduler
     *
     * @param string[]|null $jobs
     *
     * @return $this
     */
    public function setJobs(array $jobs = null)
    {
        if ($jobs === null) {
            $jobs = [];
        }

        $this->jobs = $jobs;
        $this->modifiedProperties[self::JOBS] = true;

        return $this;
    }

    /**
     * @module Scheduler
     *
     * @return string[]
     */
    public function getJobs()
    {
        return $this->jobs;
    }

    /**
     * @module Scheduler
     *
     * @param string $job
     *
     * @return $this
     */
    public function addJob($job)
    {
        $this->jobs[] = $job;
        $this->modifiedProperties[self::JOBS] = true;

        return $this;
    }

    /**
     * @module Scheduler
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireJobs()
    {
        $this->assertPropertyIsSet(self::JOBS);

        return $this;
    }

    /**
     * @module Scheduler
     *
     * @param string[]|null $roles
     *
     * @return $this
     */
    public function setRoles(array $roles = null)
    {
        if ($roles === null) {
            $roles = [];
        }

        $this->roles = $roles;
        $this->modifiedProperties[self::ROLES] = true;

        return $this;
    }

    /**
     * @module Scheduler
     *
     * @return string[]
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * @module Scheduler
     *
     * @param string $role
     *
     * @return $this
     */
    public function addRole($role)
    {
        $this->roles[] = $role;
        $this->modifiedProperties[self::ROLES] = true;

        return $this;
    }

    /**
     * @module Scheduler
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRoles()
    {
        $this->assertPropertyIsSet(self::ROLES);

        return $this;
    }

    /**
     * @module Scheduler
     *
     * @param string|null $store
     *
     * @return $this
     */
    public function setStore($store)
    {
        $this->store = $store;
        $this->modifiedProperties[self::STORE] = true;

        return $this;
    }

    /**
     * @module Scheduler
     *
     * @return string|null
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * @module Scheduler
     *
     * @param string|null $store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreOrFail($store)
    {
        if ($store === null) {
            $this->throwNullValueException(static::STORE);
        }

        return $this->setStore($store);
    }

    /**
     * @module Scheduler
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStoreOrFail()
    {
        if ($this->store === null) {
            $this->throwNullValueException(static::STORE);
        }

        return $this->store;
    }

    /**
     * @module Scheduler
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStore()
    {
        $this->assertPropertyIsSet(self::STORE);

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
                case 'schedulers':
                case 'jobs':
                case 'roles':
                case 'store':
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
                case 'schedulers':
                case 'jobs':
                case 'roles':
                case 'store':
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
                case 'schedulers':
                case 'jobs':
                case 'roles':
                case 'store':
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
            'schedulers' => $this->schedulers,
            'jobs' => $this->jobs,
            'roles' => $this->roles,
            'store' => $this->store,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'schedulers' => $this->schedulers,
            'jobs' => $this->jobs,
            'roles' => $this->roles,
            'store' => $this->store,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'schedulers' => $this->schedulers instanceof AbstractTransfer ? $this->schedulers->toArray(true, false) : $this->schedulers,
            'jobs' => $this->jobs instanceof AbstractTransfer ? $this->jobs->toArray(true, false) : $this->jobs,
            'roles' => $this->roles instanceof AbstractTransfer ? $this->roles->toArray(true, false) : $this->roles,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, false) : $this->store,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'schedulers' => $this->schedulers instanceof AbstractTransfer ? $this->schedulers->toArray(true, true) : $this->schedulers,
            'jobs' => $this->jobs instanceof AbstractTransfer ? $this->jobs->toArray(true, true) : $this->jobs,
            'roles' => $this->roles instanceof AbstractTransfer ? $this->roles->toArray(true, true) : $this->roles,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, true) : $this->store,
        ];
    }
}
