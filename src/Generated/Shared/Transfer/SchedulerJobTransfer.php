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
class SchedulerJobTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const ENABLE = 'enable';

    /**
     * @var string
     */
    public const COMMAND = 'command';

    /**
     * @var string
     */
    public const REPEAT_PATTERN = 'repeatPattern';

    /**
     * @var string
     */
    public const STORE = 'store';

    /**
     * @var string
     */
    public const PAYLOAD = 'payload';

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var bool|null
     */
    protected $enable;

    /**
     * @var string|null
     */
    protected $command;

    /**
     * @var string|null
     */
    protected $repeatPattern;

    /**
     * @var string|null
     */
    protected $store;

    /**
     * @var array
     */
    protected $payload = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'name' => 'name',
        'Name' => 'name',
        'enable' => 'enable',
        'Enable' => 'enable',
        'command' => 'command',
        'Command' => 'command',
        'repeat_pattern' => 'repeatPattern',
        'repeatPattern' => 'repeatPattern',
        'RepeatPattern' => 'repeatPattern',
        'store' => 'store',
        'Store' => 'store',
        'payload' => 'payload',
        'Payload' => 'payload',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ENABLE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'enable',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COMMAND => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'command',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REPEAT_PATTERN => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'repeat_pattern',
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
        self::PAYLOAD => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'payload',
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
     * @module SchedulerJenkins|Scheduler
     *
     * @param string|null $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        $this->modifiedProperties[self::NAME] = true;

        return $this;
    }

    /**
     * @module SchedulerJenkins|Scheduler
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module SchedulerJenkins|Scheduler
     *
     * @param string|null $name
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNameOrFail($name)
    {
        if ($name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->setName($name);
    }

    /**
     * @module SchedulerJenkins|Scheduler
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNameOrFail()
    {
        if ($this->name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->name;
    }

    /**
     * @module SchedulerJenkins|Scheduler
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireName()
    {
        $this->assertPropertyIsSet(self::NAME);

        return $this;
    }

    /**
     * @module SchedulerJenkins|Scheduler
     *
     * @param bool|null $enable
     *
     * @return $this
     */
    public function setEnable($enable)
    {
        $this->enable = $enable;
        $this->modifiedProperties[self::ENABLE] = true;

        return $this;
    }

    /**
     * @module SchedulerJenkins|Scheduler
     *
     * @return bool|null
     */
    public function getEnable()
    {
        return $this->enable;
    }

    /**
     * @module SchedulerJenkins|Scheduler
     *
     * @param bool|null $enable
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setEnableOrFail($enable)
    {
        if ($enable === null) {
            $this->throwNullValueException(static::ENABLE);
        }

        return $this->setEnable($enable);
    }

    /**
     * @module SchedulerJenkins|Scheduler
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getEnableOrFail()
    {
        if ($this->enable === null) {
            $this->throwNullValueException(static::ENABLE);
        }

        return $this->enable;
    }

    /**
     * @module SchedulerJenkins|Scheduler
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireEnable()
    {
        $this->assertPropertyIsSet(self::ENABLE);

        return $this;
    }

    /**
     * @module SchedulerJenkins|Scheduler
     *
     * @param string|null $command
     *
     * @return $this
     */
    public function setCommand($command)
    {
        $this->command = $command;
        $this->modifiedProperties[self::COMMAND] = true;

        return $this;
    }

    /**
     * @module SchedulerJenkins|Scheduler
     *
     * @return string|null
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * @module SchedulerJenkins|Scheduler
     *
     * @param string|null $command
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCommandOrFail($command)
    {
        if ($command === null) {
            $this->throwNullValueException(static::COMMAND);
        }

        return $this->setCommand($command);
    }

    /**
     * @module SchedulerJenkins|Scheduler
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCommandOrFail()
    {
        if ($this->command === null) {
            $this->throwNullValueException(static::COMMAND);
        }

        return $this->command;
    }

    /**
     * @module SchedulerJenkins|Scheduler
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCommand()
    {
        $this->assertPropertyIsSet(self::COMMAND);

        return $this;
    }

    /**
     * @module SchedulerJenkins|Scheduler
     *
     * @param string|null $repeatPattern
     *
     * @return $this
     */
    public function setRepeatPattern($repeatPattern)
    {
        $this->repeatPattern = $repeatPattern;
        $this->modifiedProperties[self::REPEAT_PATTERN] = true;

        return $this;
    }

    /**
     * @module SchedulerJenkins|Scheduler
     *
     * @return string|null
     */
    public function getRepeatPattern()
    {
        return $this->repeatPattern;
    }

    /**
     * @module SchedulerJenkins|Scheduler
     *
     * @param string|null $repeatPattern
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRepeatPatternOrFail($repeatPattern)
    {
        if ($repeatPattern === null) {
            $this->throwNullValueException(static::REPEAT_PATTERN);
        }

        return $this->setRepeatPattern($repeatPattern);
    }

    /**
     * @module SchedulerJenkins|Scheduler
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRepeatPatternOrFail()
    {
        if ($this->repeatPattern === null) {
            $this->throwNullValueException(static::REPEAT_PATTERN);
        }

        return $this->repeatPattern;
    }

    /**
     * @module SchedulerJenkins|Scheduler
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRepeatPattern()
    {
        $this->assertPropertyIsSet(self::REPEAT_PATTERN);

        return $this;
    }

    /**
     * @module SchedulerJenkins|Scheduler
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
     * @module SchedulerJenkins|Scheduler
     *
     * @return string|null
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * @module SchedulerJenkins|Scheduler
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
     * @module SchedulerJenkins|Scheduler
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
     * @module SchedulerJenkins|Scheduler
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
     * @module SchedulerJenkins|Scheduler
     *
     * @param array|null $payload
     *
     * @return $this
     */
    public function setPayload(array $payload = null)
    {
        if ($payload === null) {
            $payload = [];
        }

        $this->payload = $payload;
        $this->modifiedProperties[self::PAYLOAD] = true;

        return $this;
    }

    /**
     * @module SchedulerJenkins|Scheduler
     *
     * @return array
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * @module SchedulerJenkins|Scheduler
     *
     * @param mixed $payload
     *
     * @return $this
     */
    public function addPayload($payload)
    {
        $this->payload[] = $payload;
        $this->modifiedProperties[self::PAYLOAD] = true;

        return $this;
    }

    /**
     * @module SchedulerJenkins|Scheduler
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePayload()
    {
        $this->assertPropertyIsSet(self::PAYLOAD);

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
                case 'name':
                case 'enable':
                case 'command':
                case 'repeatPattern':
                case 'store':
                case 'payload':
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
                case 'name':
                case 'enable':
                case 'command':
                case 'repeatPattern':
                case 'store':
                case 'payload':
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
                case 'name':
                case 'enable':
                case 'command':
                case 'repeatPattern':
                case 'store':
                case 'payload':
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
            'name' => $this->name,
            'enable' => $this->enable,
            'command' => $this->command,
            'repeatPattern' => $this->repeatPattern,
            'store' => $this->store,
            'payload' => $this->payload,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name,
            'enable' => $this->enable,
            'command' => $this->command,
            'repeat_pattern' => $this->repeatPattern,
            'store' => $this->store,
            'payload' => $this->payload,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'enable' => $this->enable instanceof AbstractTransfer ? $this->enable->toArray(true, false) : $this->enable,
            'command' => $this->command instanceof AbstractTransfer ? $this->command->toArray(true, false) : $this->command,
            'repeat_pattern' => $this->repeatPattern instanceof AbstractTransfer ? $this->repeatPattern->toArray(true, false) : $this->repeatPattern,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, false) : $this->store,
            'payload' => $this->payload instanceof AbstractTransfer ? $this->payload->toArray(true, false) : $this->payload,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'enable' => $this->enable instanceof AbstractTransfer ? $this->enable->toArray(true, true) : $this->enable,
            'command' => $this->command instanceof AbstractTransfer ? $this->command->toArray(true, true) : $this->command,
            'repeatPattern' => $this->repeatPattern instanceof AbstractTransfer ? $this->repeatPattern->toArray(true, true) : $this->repeatPattern,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, true) : $this->store,
            'payload' => $this->payload instanceof AbstractTransfer ? $this->payload->toArray(true, true) : $this->payload,
        ];
    }
}
