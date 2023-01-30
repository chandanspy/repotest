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
class SpyStateMachineEventTimeoutEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_STATE_MACHINE_EVENT_TIMEOUT = 'idStateMachineEventTimeout';

    /**
     * @var string
     */
    public const FK_STATE_MACHINE_ITEM_STATE = 'fkStateMachineItemState';

    /**
     * @var string
     */
    public const FK_STATE_MACHINE_PROCESS = 'fkStateMachineProcess';

    /**
     * @var string
     */
    public const EVENT = 'event';

    /**
     * @var string
     */
    public const IDENTIFIER = 'identifier';

    /**
     * @var string
     */
    public const TIMEOUT = 'timeout';

    /**
     * @var string
     */
    public const STATE = 'state';

    /**
     * @var string
     */
    public const PROCESS = 'process';

    /**
     * @var integer|null
     */
    protected $idStateMachineEventTimeout;

    /**
     * @var integer|null
     */
    protected $fkStateMachineItemState;

    /**
     * @var integer|null
     */
    protected $fkStateMachineProcess;

    /**
     * @var string|null
     */
    protected $event;

    /**
     * @var integer|null
     */
    protected $identifier;

    /**
     * @var string|null
     */
    protected $timeout;

    /**
     * @var \Generated\Shared\Transfer\SpyStateMachineItemStateEntityTransfer|null
     */
    protected $state;

    /**
     * @var \Generated\Shared\Transfer\SpyStateMachineProcessEntityTransfer|null
     */
    protected $process;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_state_machine_event_timeout' => 'idStateMachineEventTimeout',
        'idStateMachineEventTimeout' => 'idStateMachineEventTimeout',
        'IdStateMachineEventTimeout' => 'idStateMachineEventTimeout',
        'fk_state_machine_item_state' => 'fkStateMachineItemState',
        'fkStateMachineItemState' => 'fkStateMachineItemState',
        'FkStateMachineItemState' => 'fkStateMachineItemState',
        'fk_state_machine_process' => 'fkStateMachineProcess',
        'fkStateMachineProcess' => 'fkStateMachineProcess',
        'FkStateMachineProcess' => 'fkStateMachineProcess',
        'event' => 'event',
        'Event' => 'event',
        'identifier' => 'identifier',
        'Identifier' => 'identifier',
        'timeout' => 'timeout',
        'Timeout' => 'timeout',
        'state' => 'state',
        'State' => 'state',
        'process' => 'process',
        'Process' => 'process',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_STATE_MACHINE_EVENT_TIMEOUT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_state_machine_event_timeout',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_STATE_MACHINE_ITEM_STATE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_state_machine_item_state',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_STATE_MACHINE_PROCESS => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_state_machine_process',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::EVENT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'event',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IDENTIFIER => [
            'type' => 'integer',
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
        self::TIMEOUT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'timeout',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STATE => [
            'type' => 'Generated\Shared\Transfer\SpyStateMachineItemStateEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'state',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PROCESS => [
            'type' => 'Generated\Shared\Transfer\SpyStateMachineProcessEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'process',
            'is_collection' => false,
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
    public static $entityNamespace = 'Orm\Zed\StateMachine\Persistence\SpyStateMachineEventTimeout';


    /**
     * @module 
     *
     * @param integer|null $idStateMachineEventTimeout
     *
     * @return $this
     */
    public function setIdStateMachineEventTimeout($idStateMachineEventTimeout)
    {
        $this->idStateMachineEventTimeout = $idStateMachineEventTimeout;
        $this->modifiedProperties[self::ID_STATE_MACHINE_EVENT_TIMEOUT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdStateMachineEventTimeout()
    {
        return $this->idStateMachineEventTimeout;
    }

    /**
     * @module 
     *
     * @param integer|null $idStateMachineEventTimeout
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdStateMachineEventTimeoutOrFail($idStateMachineEventTimeout)
    {
        if ($idStateMachineEventTimeout === null) {
            $this->throwNullValueException(static::ID_STATE_MACHINE_EVENT_TIMEOUT);
        }

        return $this->setIdStateMachineEventTimeout($idStateMachineEventTimeout);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdStateMachineEventTimeoutOrFail()
    {
        if ($this->idStateMachineEventTimeout === null) {
            $this->throwNullValueException(static::ID_STATE_MACHINE_EVENT_TIMEOUT);
        }

        return $this->idStateMachineEventTimeout;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdStateMachineEventTimeout()
    {
        $this->assertPropertyIsSet(self::ID_STATE_MACHINE_EVENT_TIMEOUT);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkStateMachineItemState
     *
     * @return $this
     */
    public function setFkStateMachineItemState($fkStateMachineItemState)
    {
        $this->fkStateMachineItemState = $fkStateMachineItemState;
        $this->modifiedProperties[self::FK_STATE_MACHINE_ITEM_STATE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkStateMachineItemState()
    {
        return $this->fkStateMachineItemState;
    }

    /**
     * @module 
     *
     * @param integer|null $fkStateMachineItemState
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkStateMachineItemStateOrFail($fkStateMachineItemState)
    {
        if ($fkStateMachineItemState === null) {
            $this->throwNullValueException(static::FK_STATE_MACHINE_ITEM_STATE);
        }

        return $this->setFkStateMachineItemState($fkStateMachineItemState);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkStateMachineItemStateOrFail()
    {
        if ($this->fkStateMachineItemState === null) {
            $this->throwNullValueException(static::FK_STATE_MACHINE_ITEM_STATE);
        }

        return $this->fkStateMachineItemState;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkStateMachineItemState()
    {
        $this->assertPropertyIsSet(self::FK_STATE_MACHINE_ITEM_STATE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkStateMachineProcess
     *
     * @return $this
     */
    public function setFkStateMachineProcess($fkStateMachineProcess)
    {
        $this->fkStateMachineProcess = $fkStateMachineProcess;
        $this->modifiedProperties[self::FK_STATE_MACHINE_PROCESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkStateMachineProcess()
    {
        return $this->fkStateMachineProcess;
    }

    /**
     * @module 
     *
     * @param integer|null $fkStateMachineProcess
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkStateMachineProcessOrFail($fkStateMachineProcess)
    {
        if ($fkStateMachineProcess === null) {
            $this->throwNullValueException(static::FK_STATE_MACHINE_PROCESS);
        }

        return $this->setFkStateMachineProcess($fkStateMachineProcess);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkStateMachineProcessOrFail()
    {
        if ($this->fkStateMachineProcess === null) {
            $this->throwNullValueException(static::FK_STATE_MACHINE_PROCESS);
        }

        return $this->fkStateMachineProcess;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkStateMachineProcess()
    {
        $this->assertPropertyIsSet(self::FK_STATE_MACHINE_PROCESS);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $event
     *
     * @return $this
     */
    public function setEvent($event)
    {
        $this->event = $event;
        $this->modifiedProperties[self::EVENT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @module 
     *
     * @param string|null $event
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setEventOrFail($event)
    {
        if ($event === null) {
            $this->throwNullValueException(static::EVENT);
        }

        return $this->setEvent($event);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getEventOrFail()
    {
        if ($this->event === null) {
            $this->throwNullValueException(static::EVENT);
        }

        return $this->event;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireEvent()
    {
        $this->assertPropertyIsSet(self::EVENT);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $identifier
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @module 
     *
     * @param integer|null $identifier
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdentifierOrFail()
    {
        if ($this->identifier === null) {
            $this->throwNullValueException(static::IDENTIFIER);
        }

        return $this->identifier;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param string|null $timeout
     *
     * @return $this
     */
    public function setTimeout($timeout)
    {
        $this->timeout = $timeout;
        $this->modifiedProperties[self::TIMEOUT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    /**
     * @module 
     *
     * @param string|null $timeout
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTimeoutOrFail($timeout)
    {
        if ($timeout === null) {
            $this->throwNullValueException(static::TIMEOUT);
        }

        return $this->setTimeout($timeout);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTimeoutOrFail()
    {
        if ($this->timeout === null) {
            $this->throwNullValueException(static::TIMEOUT);
        }

        return $this->timeout;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTimeout()
    {
        $this->assertPropertyIsSet(self::TIMEOUT);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyStateMachineItemStateEntityTransfer|null $state
     *
     * @return $this
     */
    public function setState(SpyStateMachineItemStateEntityTransfer $state = null)
    {
        $this->state = $state;
        $this->modifiedProperties[self::STATE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyStateMachineItemStateEntityTransfer|null
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyStateMachineItemStateEntityTransfer $state
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStateOrFail(SpyStateMachineItemStateEntityTransfer $state)
    {
        return $this->setState($state);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyStateMachineItemStateEntityTransfer
     */
    public function getStateOrFail()
    {
        if ($this->state === null) {
            $this->throwNullValueException(static::STATE);
        }

        return $this->state;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireState()
    {
        $this->assertPropertyIsSet(self::STATE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyStateMachineProcessEntityTransfer|null $process
     *
     * @return $this
     */
    public function setProcess(SpyStateMachineProcessEntityTransfer $process = null)
    {
        $this->process = $process;
        $this->modifiedProperties[self::PROCESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyStateMachineProcessEntityTransfer|null
     */
    public function getProcess()
    {
        return $this->process;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyStateMachineProcessEntityTransfer $process
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProcessOrFail(SpyStateMachineProcessEntityTransfer $process)
    {
        return $this->setProcess($process);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyStateMachineProcessEntityTransfer
     */
    public function getProcessOrFail()
    {
        if ($this->process === null) {
            $this->throwNullValueException(static::PROCESS);
        }

        return $this->process;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProcess()
    {
        $this->assertPropertyIsSet(self::PROCESS);

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
                case 'idStateMachineEventTimeout':
                case 'fkStateMachineItemState':
                case 'fkStateMachineProcess':
                case 'event':
                case 'identifier':
                case 'timeout':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'state':
                case 'process':
                    if (is_array($value)) {
                        $type = $this->transferMetadata[$normalizedPropertyName]['type'];
                        /** @var \Spryker\Shared\Kernel\Transfer\TransferInterface $value */
                        $value = (new $type())->fromArray($value, $ignoreMissingProperty);
                    }

                    if ($value !== null && $this->isPropertyStrict($normalizedPropertyName)) {
                        $this->assertInstanceOfTransfer($normalizedPropertyName, $value);
                    }
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
                case 'idStateMachineEventTimeout':
                case 'fkStateMachineItemState':
                case 'fkStateMachineProcess':
                case 'event':
                case 'identifier':
                case 'timeout':
                    $values[$arrayKey] = $value;

                    break;
                case 'state':
                case 'process':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

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
                case 'idStateMachineEventTimeout':
                case 'fkStateMachineItemState':
                case 'fkStateMachineProcess':
                case 'event':
                case 'identifier':
                case 'timeout':
                    $values[$arrayKey] = $value;

                    break;
                case 'state':
                case 'process':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

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
            'idStateMachineEventTimeout' => $this->idStateMachineEventTimeout,
            'fkStateMachineItemState' => $this->fkStateMachineItemState,
            'fkStateMachineProcess' => $this->fkStateMachineProcess,
            'event' => $this->event,
            'identifier' => $this->identifier,
            'timeout' => $this->timeout,
            'state' => $this->state,
            'process' => $this->process,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_state_machine_event_timeout' => $this->idStateMachineEventTimeout,
            'fk_state_machine_item_state' => $this->fkStateMachineItemState,
            'fk_state_machine_process' => $this->fkStateMachineProcess,
            'event' => $this->event,
            'identifier' => $this->identifier,
            'timeout' => $this->timeout,
            'state' => $this->state,
            'process' => $this->process,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_state_machine_event_timeout' => $this->idStateMachineEventTimeout instanceof AbstractTransfer ? $this->idStateMachineEventTimeout->toArray(true, false) : $this->idStateMachineEventTimeout,
            'fk_state_machine_item_state' => $this->fkStateMachineItemState instanceof AbstractTransfer ? $this->fkStateMachineItemState->toArray(true, false) : $this->fkStateMachineItemState,
            'fk_state_machine_process' => $this->fkStateMachineProcess instanceof AbstractTransfer ? $this->fkStateMachineProcess->toArray(true, false) : $this->fkStateMachineProcess,
            'event' => $this->event instanceof AbstractTransfer ? $this->event->toArray(true, false) : $this->event,
            'identifier' => $this->identifier instanceof AbstractTransfer ? $this->identifier->toArray(true, false) : $this->identifier,
            'timeout' => $this->timeout instanceof AbstractTransfer ? $this->timeout->toArray(true, false) : $this->timeout,
            'state' => $this->state instanceof AbstractTransfer ? $this->state->toArray(true, false) : $this->state,
            'process' => $this->process instanceof AbstractTransfer ? $this->process->toArray(true, false) : $this->process,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idStateMachineEventTimeout' => $this->idStateMachineEventTimeout instanceof AbstractTransfer ? $this->idStateMachineEventTimeout->toArray(true, true) : $this->idStateMachineEventTimeout,
            'fkStateMachineItemState' => $this->fkStateMachineItemState instanceof AbstractTransfer ? $this->fkStateMachineItemState->toArray(true, true) : $this->fkStateMachineItemState,
            'fkStateMachineProcess' => $this->fkStateMachineProcess instanceof AbstractTransfer ? $this->fkStateMachineProcess->toArray(true, true) : $this->fkStateMachineProcess,
            'event' => $this->event instanceof AbstractTransfer ? $this->event->toArray(true, true) : $this->event,
            'identifier' => $this->identifier instanceof AbstractTransfer ? $this->identifier->toArray(true, true) : $this->identifier,
            'timeout' => $this->timeout instanceof AbstractTransfer ? $this->timeout->toArray(true, true) : $this->timeout,
            'state' => $this->state instanceof AbstractTransfer ? $this->state->toArray(true, true) : $this->state,
            'process' => $this->process instanceof AbstractTransfer ? $this->process->toArray(true, true) : $this->process,
        ];
    }
}
