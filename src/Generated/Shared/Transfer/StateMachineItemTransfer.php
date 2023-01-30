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
class StateMachineItemTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const IDENTIFIER = 'identifier';

    /**
     * @var string
     */
    public const ID_STATE_MACHINE_PROCESS = 'idStateMachineProcess';

    /**
     * @var string
     */
    public const ID_ITEM_STATE = 'idItemState';

    /**
     * @var string
     */
    public const PROCESS_NAME = 'processName';

    /**
     * @var string
     */
    public const STATE_MACHINE_NAME = 'stateMachineName';

    /**
     * @var string
     */
    public const STATE_NAME = 'stateName';

    /**
     * @var string
     */
    public const EVENT_NAME = 'eventName';

    /**
     * @var string
     */
    public const CREATED_AT = 'createdAt';

    /**
     * @var int|null
     */
    protected $identifier;

    /**
     * @var int|null
     */
    protected $idStateMachineProcess;

    /**
     * @var int|null
     */
    protected $idItemState;

    /**
     * @var string|null
     */
    protected $processName;

    /**
     * @var string|null
     */
    protected $stateMachineName;

    /**
     * @var string|null
     */
    protected $stateName;

    /**
     * @var string|null
     */
    protected $eventName;

    /**
     * @var string|null
     */
    protected $createdAt;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'identifier' => 'identifier',
        'Identifier' => 'identifier',
        'id_state_machine_process' => 'idStateMachineProcess',
        'idStateMachineProcess' => 'idStateMachineProcess',
        'IdStateMachineProcess' => 'idStateMachineProcess',
        'id_item_state' => 'idItemState',
        'idItemState' => 'idItemState',
        'IdItemState' => 'idItemState',
        'process_name' => 'processName',
        'processName' => 'processName',
        'ProcessName' => 'processName',
        'state_machine_name' => 'stateMachineName',
        'stateMachineName' => 'stateMachineName',
        'StateMachineName' => 'stateMachineName',
        'state_name' => 'stateName',
        'stateName' => 'stateName',
        'StateName' => 'stateName',
        'event_name' => 'eventName',
        'eventName' => 'eventName',
        'EventName' => 'eventName',
        'created_at' => 'createdAt',
        'createdAt' => 'createdAt',
        'CreatedAt' => 'createdAt',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::IDENTIFIER => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'identifier',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_STATE_MACHINE_PROCESS => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_state_machine_process',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_ITEM_STATE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_item_state',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PROCESS_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'process_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STATE_MACHINE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'state_machine_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STATE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'state_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::EVENT_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'event_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CREATED_AT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'created_at',
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
     * @module StateMachine
     *
     * @param int|null $identifier
     *
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        $this->modifiedProperties[self::IDENTIFIER] = true;

        return $this;
    }

    /**
     * @module StateMachine
     *
     * @return int|null
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @module StateMachine
     *
     * @param int|null $identifier
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdentifierOrFail($identifier)
    {
        if ($identifier === null) {
            $this->throwNullValueException(static::IDENTIFIER);
        }

        return $this->setIdentifier($identifier);
    }

    /**
     * @module StateMachine
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdentifierOrFail()
    {
        if ($this->identifier === null) {
            $this->throwNullValueException(static::IDENTIFIER);
        }

        return $this->identifier;
    }

    /**
     * @module StateMachine
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdentifier()
    {
        $this->assertPropertyIsSet(self::IDENTIFIER);

        return $this;
    }

    /**
     * @module StateMachine
     *
     * @param int|null $idStateMachineProcess
     *
     * @return $this
     */
    public function setIdStateMachineProcess($idStateMachineProcess)
    {
        $this->idStateMachineProcess = $idStateMachineProcess;
        $this->modifiedProperties[self::ID_STATE_MACHINE_PROCESS] = true;

        return $this;
    }

    /**
     * @module StateMachine
     *
     * @return int|null
     */
    public function getIdStateMachineProcess()
    {
        return $this->idStateMachineProcess;
    }

    /**
     * @module StateMachine
     *
     * @param int|null $idStateMachineProcess
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdStateMachineProcessOrFail($idStateMachineProcess)
    {
        if ($idStateMachineProcess === null) {
            $this->throwNullValueException(static::ID_STATE_MACHINE_PROCESS);
        }

        return $this->setIdStateMachineProcess($idStateMachineProcess);
    }

    /**
     * @module StateMachine
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdStateMachineProcessOrFail()
    {
        if ($this->idStateMachineProcess === null) {
            $this->throwNullValueException(static::ID_STATE_MACHINE_PROCESS);
        }

        return $this->idStateMachineProcess;
    }

    /**
     * @module StateMachine
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdStateMachineProcess()
    {
        $this->assertPropertyIsSet(self::ID_STATE_MACHINE_PROCESS);

        return $this;
    }

    /**
     * @module StateMachine
     *
     * @param int|null $idItemState
     *
     * @return $this
     */
    public function setIdItemState($idItemState)
    {
        $this->idItemState = $idItemState;
        $this->modifiedProperties[self::ID_ITEM_STATE] = true;

        return $this;
    }

    /**
     * @module StateMachine
     *
     * @return int|null
     */
    public function getIdItemState()
    {
        return $this->idItemState;
    }

    /**
     * @module StateMachine
     *
     * @param int|null $idItemState
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdItemStateOrFail($idItemState)
    {
        if ($idItemState === null) {
            $this->throwNullValueException(static::ID_ITEM_STATE);
        }

        return $this->setIdItemState($idItemState);
    }

    /**
     * @module StateMachine
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdItemStateOrFail()
    {
        if ($this->idItemState === null) {
            $this->throwNullValueException(static::ID_ITEM_STATE);
        }

        return $this->idItemState;
    }

    /**
     * @module StateMachine
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdItemState()
    {
        $this->assertPropertyIsSet(self::ID_ITEM_STATE);

        return $this;
    }

    /**
     * @module StateMachine
     *
     * @param string|null $processName
     *
     * @return $this
     */
    public function setProcessName($processName)
    {
        $this->processName = $processName;
        $this->modifiedProperties[self::PROCESS_NAME] = true;

        return $this;
    }

    /**
     * @module StateMachine
     *
     * @return string|null
     */
    public function getProcessName()
    {
        return $this->processName;
    }

    /**
     * @module StateMachine
     *
     * @param string|null $processName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProcessNameOrFail($processName)
    {
        if ($processName === null) {
            $this->throwNullValueException(static::PROCESS_NAME);
        }

        return $this->setProcessName($processName);
    }

    /**
     * @module StateMachine
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getProcessNameOrFail()
    {
        if ($this->processName === null) {
            $this->throwNullValueException(static::PROCESS_NAME);
        }

        return $this->processName;
    }

    /**
     * @module StateMachine
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProcessName()
    {
        $this->assertPropertyIsSet(self::PROCESS_NAME);

        return $this;
    }

    /**
     * @module StateMachine
     *
     * @param string|null $stateMachineName
     *
     * @return $this
     */
    public function setStateMachineName($stateMachineName)
    {
        $this->stateMachineName = $stateMachineName;
        $this->modifiedProperties[self::STATE_MACHINE_NAME] = true;

        return $this;
    }

    /**
     * @module StateMachine
     *
     * @return string|null
     */
    public function getStateMachineName()
    {
        return $this->stateMachineName;
    }

    /**
     * @module StateMachine
     *
     * @param string|null $stateMachineName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStateMachineNameOrFail($stateMachineName)
    {
        if ($stateMachineName === null) {
            $this->throwNullValueException(static::STATE_MACHINE_NAME);
        }

        return $this->setStateMachineName($stateMachineName);
    }

    /**
     * @module StateMachine
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStateMachineNameOrFail()
    {
        if ($this->stateMachineName === null) {
            $this->throwNullValueException(static::STATE_MACHINE_NAME);
        }

        return $this->stateMachineName;
    }

    /**
     * @module StateMachine
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStateMachineName()
    {
        $this->assertPropertyIsSet(self::STATE_MACHINE_NAME);

        return $this;
    }

    /**
     * @module StateMachine
     *
     * @param string|null $stateName
     *
     * @return $this
     */
    public function setStateName($stateName)
    {
        $this->stateName = $stateName;
        $this->modifiedProperties[self::STATE_NAME] = true;

        return $this;
    }

    /**
     * @module StateMachine
     *
     * @return string|null
     */
    public function getStateName()
    {
        return $this->stateName;
    }

    /**
     * @module StateMachine
     *
     * @param string|null $stateName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStateNameOrFail($stateName)
    {
        if ($stateName === null) {
            $this->throwNullValueException(static::STATE_NAME);
        }

        return $this->setStateName($stateName);
    }

    /**
     * @module StateMachine
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStateNameOrFail()
    {
        if ($this->stateName === null) {
            $this->throwNullValueException(static::STATE_NAME);
        }

        return $this->stateName;
    }

    /**
     * @module StateMachine
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStateName()
    {
        $this->assertPropertyIsSet(self::STATE_NAME);

        return $this;
    }

    /**
     * @module StateMachine
     *
     * @param string|null $eventName
     *
     * @return $this
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;
        $this->modifiedProperties[self::EVENT_NAME] = true;

        return $this;
    }

    /**
     * @module StateMachine
     *
     * @return string|null
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * @module StateMachine
     *
     * @param string|null $eventName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setEventNameOrFail($eventName)
    {
        if ($eventName === null) {
            $this->throwNullValueException(static::EVENT_NAME);
        }

        return $this->setEventName($eventName);
    }

    /**
     * @module StateMachine
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getEventNameOrFail()
    {
        if ($this->eventName === null) {
            $this->throwNullValueException(static::EVENT_NAME);
        }

        return $this->eventName;
    }

    /**
     * @module StateMachine
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireEventName()
    {
        $this->assertPropertyIsSet(self::EVENT_NAME);

        return $this;
    }

    /**
     * @module StateMachine
     *
     * @param string|null $createdAt
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        $this->modifiedProperties[self::CREATED_AT] = true;

        return $this;
    }

    /**
     * @module StateMachine
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @module StateMachine
     *
     * @param string|null $createdAt
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCreatedAtOrFail($createdAt)
    {
        if ($createdAt === null) {
            $this->throwNullValueException(static::CREATED_AT);
        }

        return $this->setCreatedAt($createdAt);
    }

    /**
     * @module StateMachine
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCreatedAtOrFail()
    {
        if ($this->createdAt === null) {
            $this->throwNullValueException(static::CREATED_AT);
        }

        return $this->createdAt;
    }

    /**
     * @module StateMachine
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCreatedAt()
    {
        $this->assertPropertyIsSet(self::CREATED_AT);

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
                case 'identifier':
                case 'idStateMachineProcess':
                case 'idItemState':
                case 'processName':
                case 'stateMachineName':
                case 'stateName':
                case 'eventName':
                case 'createdAt':
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
                case 'identifier':
                case 'idStateMachineProcess':
                case 'idItemState':
                case 'processName':
                case 'stateMachineName':
                case 'stateName':
                case 'eventName':
                case 'createdAt':
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
                case 'identifier':
                case 'idStateMachineProcess':
                case 'idItemState':
                case 'processName':
                case 'stateMachineName':
                case 'stateName':
                case 'eventName':
                case 'createdAt':
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
            'identifier' => $this->identifier,
            'idStateMachineProcess' => $this->idStateMachineProcess,
            'idItemState' => $this->idItemState,
            'processName' => $this->processName,
            'stateMachineName' => $this->stateMachineName,
            'stateName' => $this->stateName,
            'eventName' => $this->eventName,
            'createdAt' => $this->createdAt,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'identifier' => $this->identifier,
            'id_state_machine_process' => $this->idStateMachineProcess,
            'id_item_state' => $this->idItemState,
            'process_name' => $this->processName,
            'state_machine_name' => $this->stateMachineName,
            'state_name' => $this->stateName,
            'event_name' => $this->eventName,
            'created_at' => $this->createdAt,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'identifier' => $this->identifier instanceof AbstractTransfer ? $this->identifier->toArray(true, false) : $this->identifier,
            'id_state_machine_process' => $this->idStateMachineProcess instanceof AbstractTransfer ? $this->idStateMachineProcess->toArray(true, false) : $this->idStateMachineProcess,
            'id_item_state' => $this->idItemState instanceof AbstractTransfer ? $this->idItemState->toArray(true, false) : $this->idItemState,
            'process_name' => $this->processName instanceof AbstractTransfer ? $this->processName->toArray(true, false) : $this->processName,
            'state_machine_name' => $this->stateMachineName instanceof AbstractTransfer ? $this->stateMachineName->toArray(true, false) : $this->stateMachineName,
            'state_name' => $this->stateName instanceof AbstractTransfer ? $this->stateName->toArray(true, false) : $this->stateName,
            'event_name' => $this->eventName instanceof AbstractTransfer ? $this->eventName->toArray(true, false) : $this->eventName,
            'created_at' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, false) : $this->createdAt,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'identifier' => $this->identifier instanceof AbstractTransfer ? $this->identifier->toArray(true, true) : $this->identifier,
            'idStateMachineProcess' => $this->idStateMachineProcess instanceof AbstractTransfer ? $this->idStateMachineProcess->toArray(true, true) : $this->idStateMachineProcess,
            'idItemState' => $this->idItemState instanceof AbstractTransfer ? $this->idItemState->toArray(true, true) : $this->idItemState,
            'processName' => $this->processName instanceof AbstractTransfer ? $this->processName->toArray(true, true) : $this->processName,
            'stateMachineName' => $this->stateMachineName instanceof AbstractTransfer ? $this->stateMachineName->toArray(true, true) : $this->stateMachineName,
            'stateName' => $this->stateName instanceof AbstractTransfer ? $this->stateName->toArray(true, true) : $this->stateName,
            'eventName' => $this->eventName instanceof AbstractTransfer ? $this->eventName->toArray(true, true) : $this->eventName,
            'createdAt' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, true) : $this->createdAt,
        ];
    }
}
