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
class SpyStateMachineProcessEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_STATE_MACHINE_PROCESS = 'idStateMachineProcess';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const STATE_MACHINE_NAME = 'stateMachineName';

    /**
     * @var string
     */
    public const SPY_STATE_MACHINE_TRANSITION_LOGS = 'spyStateMachineTransitionLogs';

    /**
     * @var string
     */
    public const SPY_STATE_MACHINE_ITEM_STATES = 'spyStateMachineItemStates';

    /**
     * @var string
     */
    public const SPY_STATE_MACHINE_EVENT_TIMEOUTS = 'spyStateMachineEventTimeouts';

    /**
     * @var integer|null
     */
    protected $idStateMachineProcess;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $stateMachineName;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyStateMachineTransitionLogEntityTransfer[]
     */
    protected $spyStateMachineTransitionLogs;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyStateMachineItemStateEntityTransfer[]
     */
    protected $spyStateMachineItemStates;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyStateMachineEventTimeoutEntityTransfer[]
     */
    protected $spyStateMachineEventTimeouts;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_state_machine_process' => 'idStateMachineProcess',
        'idStateMachineProcess' => 'idStateMachineProcess',
        'IdStateMachineProcess' => 'idStateMachineProcess',
        'name' => 'name',
        'Name' => 'name',
        'state_machine_name' => 'stateMachineName',
        'stateMachineName' => 'stateMachineName',
        'StateMachineName' => 'stateMachineName',
        'spy_state_machine_transition_logs' => 'spyStateMachineTransitionLogs',
        'spyStateMachineTransitionLogs' => 'spyStateMachineTransitionLogs',
        'SpyStateMachineTransitionLogs' => 'spyStateMachineTransitionLogs',
        'spy_state_machine_item_states' => 'spyStateMachineItemStates',
        'spyStateMachineItemStates' => 'spyStateMachineItemStates',
        'SpyStateMachineItemStates' => 'spyStateMachineItemStates',
        'spy_state_machine_event_timeouts' => 'spyStateMachineEventTimeouts',
        'spyStateMachineEventTimeouts' => 'spyStateMachineEventTimeouts',
        'SpyStateMachineEventTimeouts' => 'spyStateMachineEventTimeouts',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_STATE_MACHINE_PROCESS => [
            'type' => 'integer',
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
        self::SPY_STATE_MACHINE_TRANSITION_LOGS => [
            'type' => 'Generated\Shared\Transfer\SpyStateMachineTransitionLogEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_state_machine_transition_logs',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_STATE_MACHINE_ITEM_STATES => [
            'type' => 'Generated\Shared\Transfer\SpyStateMachineItemStateEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_state_machine_item_states',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_STATE_MACHINE_EVENT_TIMEOUTS => [
            'type' => 'Generated\Shared\Transfer\SpyStateMachineEventTimeoutEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_state_machine_event_timeouts',
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
    public static $entityNamespace = 'Orm\Zed\StateMachine\Persistence\SpyStateMachineProcess';


    /**
     * @module 
     *
     * @param integer|null $idStateMachineProcess
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdStateMachineProcess()
    {
        return $this->idStateMachineProcess;
    }

    /**
     * @module 
     *
     * @param integer|null $idStateMachineProcess
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdStateMachineProcessOrFail()
    {
        if ($this->idStateMachineProcess === null) {
            $this->throwNullValueException(static::ID_STATE_MACHINE_PROCESS);
        }

        return $this->idStateMachineProcess;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getStateMachineName()
    {
        return $this->stateMachineName;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyStateMachineTransitionLogEntityTransfer[] $spyStateMachineTransitionLogs
     *
     * @return $this
     */
    public function setSpyStateMachineTransitionLogs(ArrayObject $spyStateMachineTransitionLogs)
    {
        $this->spyStateMachineTransitionLogs = $spyStateMachineTransitionLogs;
        $this->modifiedProperties[self::SPY_STATE_MACHINE_TRANSITION_LOGS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyStateMachineTransitionLogEntityTransfer[]
     */
    public function getSpyStateMachineTransitionLogs()
    {
        return $this->spyStateMachineTransitionLogs;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyStateMachineTransitionLogEntityTransfer $spyStateMachineTransitionLogs
     *
     * @return $this
     */
    public function addSpyStateMachineTransitionLogs(SpyStateMachineTransitionLogEntityTransfer $spyStateMachineTransitionLogs)
    {
        $this->spyStateMachineTransitionLogs[] = $spyStateMachineTransitionLogs;
        $this->modifiedProperties[self::SPY_STATE_MACHINE_TRANSITION_LOGS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyStateMachineTransitionLogs()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_STATE_MACHINE_TRANSITION_LOGS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyStateMachineItemStateEntityTransfer[] $spyStateMachineItemStates
     *
     * @return $this
     */
    public function setSpyStateMachineItemStates(ArrayObject $spyStateMachineItemStates)
    {
        $this->spyStateMachineItemStates = $spyStateMachineItemStates;
        $this->modifiedProperties[self::SPY_STATE_MACHINE_ITEM_STATES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyStateMachineItemStateEntityTransfer[]
     */
    public function getSpyStateMachineItemStates()
    {
        return $this->spyStateMachineItemStates;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyStateMachineItemStateEntityTransfer $spyStateMachineItemStates
     *
     * @return $this
     */
    public function addSpyStateMachineItemStates(SpyStateMachineItemStateEntityTransfer $spyStateMachineItemStates)
    {
        $this->spyStateMachineItemStates[] = $spyStateMachineItemStates;
        $this->modifiedProperties[self::SPY_STATE_MACHINE_ITEM_STATES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyStateMachineItemStates()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_STATE_MACHINE_ITEM_STATES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyStateMachineEventTimeoutEntityTransfer[] $spyStateMachineEventTimeouts
     *
     * @return $this
     */
    public function setSpyStateMachineEventTimeouts(ArrayObject $spyStateMachineEventTimeouts)
    {
        $this->spyStateMachineEventTimeouts = $spyStateMachineEventTimeouts;
        $this->modifiedProperties[self::SPY_STATE_MACHINE_EVENT_TIMEOUTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyStateMachineEventTimeoutEntityTransfer[]
     */
    public function getSpyStateMachineEventTimeouts()
    {
        return $this->spyStateMachineEventTimeouts;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyStateMachineEventTimeoutEntityTransfer $spyStateMachineEventTimeouts
     *
     * @return $this
     */
    public function addSpyStateMachineEventTimeouts(SpyStateMachineEventTimeoutEntityTransfer $spyStateMachineEventTimeouts)
    {
        $this->spyStateMachineEventTimeouts[] = $spyStateMachineEventTimeouts;
        $this->modifiedProperties[self::SPY_STATE_MACHINE_EVENT_TIMEOUTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyStateMachineEventTimeouts()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_STATE_MACHINE_EVENT_TIMEOUTS);

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
                case 'idStateMachineProcess':
                case 'name':
                case 'stateMachineName':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyStateMachineTransitionLogs':
                case 'spyStateMachineItemStates':
                case 'spyStateMachineEventTimeouts':
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
                case 'idStateMachineProcess':
                case 'name':
                case 'stateMachineName':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyStateMachineTransitionLogs':
                case 'spyStateMachineItemStates':
                case 'spyStateMachineEventTimeouts':
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
                case 'idStateMachineProcess':
                case 'name':
                case 'stateMachineName':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyStateMachineTransitionLogs':
                case 'spyStateMachineItemStates':
                case 'spyStateMachineEventTimeouts':
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
        $this->spyStateMachineTransitionLogs = $this->spyStateMachineTransitionLogs ?: new ArrayObject();
        $this->spyStateMachineItemStates = $this->spyStateMachineItemStates ?: new ArrayObject();
        $this->spyStateMachineEventTimeouts = $this->spyStateMachineEventTimeouts ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idStateMachineProcess' => $this->idStateMachineProcess,
            'name' => $this->name,
            'stateMachineName' => $this->stateMachineName,
            'spyStateMachineTransitionLogs' => $this->spyStateMachineTransitionLogs,
            'spyStateMachineItemStates' => $this->spyStateMachineItemStates,
            'spyStateMachineEventTimeouts' => $this->spyStateMachineEventTimeouts,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_state_machine_process' => $this->idStateMachineProcess,
            'name' => $this->name,
            'state_machine_name' => $this->stateMachineName,
            'spy_state_machine_transition_logs' => $this->spyStateMachineTransitionLogs,
            'spy_state_machine_item_states' => $this->spyStateMachineItemStates,
            'spy_state_machine_event_timeouts' => $this->spyStateMachineEventTimeouts,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_state_machine_process' => $this->idStateMachineProcess instanceof AbstractTransfer ? $this->idStateMachineProcess->toArray(true, false) : $this->idStateMachineProcess,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'state_machine_name' => $this->stateMachineName instanceof AbstractTransfer ? $this->stateMachineName->toArray(true, false) : $this->stateMachineName,
            'spy_state_machine_transition_logs' => $this->spyStateMachineTransitionLogs instanceof AbstractTransfer ? $this->spyStateMachineTransitionLogs->toArray(true, false) : $this->addValuesToCollection($this->spyStateMachineTransitionLogs, true, false),
            'spy_state_machine_item_states' => $this->spyStateMachineItemStates instanceof AbstractTransfer ? $this->spyStateMachineItemStates->toArray(true, false) : $this->addValuesToCollection($this->spyStateMachineItemStates, true, false),
            'spy_state_machine_event_timeouts' => $this->spyStateMachineEventTimeouts instanceof AbstractTransfer ? $this->spyStateMachineEventTimeouts->toArray(true, false) : $this->addValuesToCollection($this->spyStateMachineEventTimeouts, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idStateMachineProcess' => $this->idStateMachineProcess instanceof AbstractTransfer ? $this->idStateMachineProcess->toArray(true, true) : $this->idStateMachineProcess,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'stateMachineName' => $this->stateMachineName instanceof AbstractTransfer ? $this->stateMachineName->toArray(true, true) : $this->stateMachineName,
            'spyStateMachineTransitionLogs' => $this->spyStateMachineTransitionLogs instanceof AbstractTransfer ? $this->spyStateMachineTransitionLogs->toArray(true, true) : $this->addValuesToCollection($this->spyStateMachineTransitionLogs, true, true),
            'spyStateMachineItemStates' => $this->spyStateMachineItemStates instanceof AbstractTransfer ? $this->spyStateMachineItemStates->toArray(true, true) : $this->addValuesToCollection($this->spyStateMachineItemStates, true, true),
            'spyStateMachineEventTimeouts' => $this->spyStateMachineEventTimeouts instanceof AbstractTransfer ? $this->spyStateMachineEventTimeouts->toArray(true, true) : $this->addValuesToCollection($this->spyStateMachineEventTimeouts, true, true),
        ];
    }
}
