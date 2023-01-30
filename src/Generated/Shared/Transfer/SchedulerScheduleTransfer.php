<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SchedulerScheduleTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_SCHEDULER = 'idScheduler';

    /**
     * @var string
     */
    public const JOBS = 'jobs';

    /**
     * @var string|null
     */
    protected $idScheduler;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SchedulerJobTransfer[]
     */
    protected $jobs;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_scheduler' => 'idScheduler',
        'idScheduler' => 'idScheduler',
        'IdScheduler' => 'idScheduler',
        'jobs' => 'jobs',
        'Jobs' => 'jobs',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SCHEDULER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'id_scheduler',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::JOBS => [
            'type' => 'Generated\Shared\Transfer\SchedulerJobTransfer',
            'type_shim' => null,
            'name_underscore' => 'jobs',
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
     * @module SchedulerJenkins|Scheduler
     *
     * @param string|null $idScheduler
     *
     * @return $this
     */
    public function setIdScheduler($idScheduler)
    {
        $this->idScheduler = $idScheduler;
        $this->modifiedProperties[self::ID_SCHEDULER] = true;

        return $this;
    }

    /**
     * @module SchedulerJenkins|Scheduler
     *
     * @return string|null
     */
    public function getIdScheduler()
    {
        return $this->idScheduler;
    }

    /**
     * @module SchedulerJenkins|Scheduler
     *
     * @param string|null $idScheduler
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSchedulerOrFail($idScheduler)
    {
        if ($idScheduler === null) {
            $this->throwNullValueException(static::ID_SCHEDULER);
        }

        return $this->setIdScheduler($idScheduler);
    }

    /**
     * @module SchedulerJenkins|Scheduler
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIdSchedulerOrFail()
    {
        if ($this->idScheduler === null) {
            $this->throwNullValueException(static::ID_SCHEDULER);
        }

        return $this->idScheduler;
    }

    /**
     * @module SchedulerJenkins|Scheduler
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdScheduler()
    {
        $this->assertPropertyIsSet(self::ID_SCHEDULER);

        return $this;
    }

    /**
     * @module SchedulerJenkins|Scheduler
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SchedulerJobTransfer[] $jobs
     *
     * @return $this
     */
    public function setJobs(ArrayObject $jobs)
    {
        $this->jobs = $jobs;
        $this->modifiedProperties[self::JOBS] = true;

        return $this;
    }

    /**
     * @module SchedulerJenkins|Scheduler
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SchedulerJobTransfer[]
     */
    public function getJobs()
    {
        return $this->jobs;
    }

    /**
     * @module SchedulerJenkins|Scheduler
     *
     * @param \Generated\Shared\Transfer\SchedulerJobTransfer $job
     *
     * @return $this
     */
    public function addJob(SchedulerJobTransfer $job)
    {
        $this->jobs[] = $job;
        $this->modifiedProperties[self::JOBS] = true;

        return $this;
    }

    /**
     * @module SchedulerJenkins|Scheduler
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireJobs()
    {
        $this->assertCollectionPropertyIsSet(self::JOBS);

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
                case 'idScheduler':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'jobs':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
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
                case 'idScheduler':
                    $values[$arrayKey] = $value;

                    break;
                case 'jobs':
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
                case 'idScheduler':
                    $values[$arrayKey] = $value;

                    break;
                case 'jobs':
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
        $this->jobs = $this->jobs ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idScheduler' => $this->idScheduler,
            'jobs' => $this->jobs,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_scheduler' => $this->idScheduler,
            'jobs' => $this->jobs,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_scheduler' => $this->idScheduler instanceof AbstractTransfer ? $this->idScheduler->toArray(true, false) : $this->idScheduler,
            'jobs' => $this->jobs instanceof AbstractTransfer ? $this->jobs->toArray(true, false) : $this->addValuesToCollection($this->jobs, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idScheduler' => $this->idScheduler instanceof AbstractTransfer ? $this->idScheduler->toArray(true, true) : $this->idScheduler,
            'jobs' => $this->jobs instanceof AbstractTransfer ? $this->jobs->toArray(true, true) : $this->addValuesToCollection($this->jobs, true, true),
        ];
    }
}
