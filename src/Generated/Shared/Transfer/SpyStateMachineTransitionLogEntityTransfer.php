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
class SpyStateMachineTransitionLogEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_STATE_MACHINE_TRANSITION_LOG = 'idStateMachineTransitionLog';

    /**
     * @var string
     */
    public const FK_STATE_MACHINE_PROCESS = 'fkStateMachineProcess';

    /**
     * @var string
     */
    public const COMMAND = 'command';

    /**
     * @var string
     */
    public const CONDITION = 'condition';

    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'errorMessage';

    /**
     * @var string
     */
    public const EVENT = 'event';

    /**
     * @var string
     */
    public const HOSTNAME = 'hostname';

    /**
     * @var string
     */
    public const IDENTIFIER = 'identifier';

    /**
     * @var string
     */
    public const IS_ERROR = 'isError';

    /**
     * @var string
     */
    public const LOCKED = 'locked';

    /**
     * @var string
     */
    public const PARAMS = 'params';

    /**
     * @var string
     */
    public const PATH = 'path';

    /**
     * @var string
     */
    public const SOURCE_STATE = 'sourceState';

    /**
     * @var string
     */
    public const TARGET_STATE = 'targetState';

    /**
     * @var string
     */
    public const PROCESS = 'process';

    /**
     * @var integer|null
     */
    protected $idStateMachineTransitionLog;

    /**
     * @var integer|null
     */
    protected $fkStateMachineProcess;

    /**
     * @var string|null
     */
    protected $command;

    /**
     * @var string|null
     */
    protected $condition;

    /**
     * @var string|null
     */
    protected $errorMessage;

    /**
     * @var string|null
     */
    protected $event;

    /**
     * @var string|null
     */
    protected $hostname;

    /**
     * @var integer|null
     */
    protected $identifier;

    /**
     * @var boolean|null
     */
    protected $isError;

    /**
     * @var boolean|null
     */
    protected $locked;

    /**
     * @var array
     */
    protected $params = [];

    /**
     * @var string|null
     */
    protected $path;

    /**
     * @var string|null
     */
    protected $sourceState;

    /**
     * @var string|null
     */
    protected $targetState;

    /**
     * @var \Generated\Shared\Transfer\SpyStateMachineProcessEntityTransfer|null
     */
    protected $process;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_state_machine_transition_log' => 'idStateMachineTransitionLog',
        'idStateMachineTransitionLog' => 'idStateMachineTransitionLog',
        'IdStateMachineTransitionLog' => 'idStateMachineTransitionLog',
        'fk_state_machine_process' => 'fkStateMachineProcess',
        'fkStateMachineProcess' => 'fkStateMachineProcess',
        'FkStateMachineProcess' => 'fkStateMachineProcess',
        'command' => 'command',
        'Command' => 'command',
        'condition' => 'condition',
        'Condition' => 'condition',
        'error_message' => 'errorMessage',
        'errorMessage' => 'errorMessage',
        'ErrorMessage' => 'errorMessage',
        'event' => 'event',
        'Event' => 'event',
        'hostname' => 'hostname',
        'Hostname' => 'hostname',
        'identifier' => 'identifier',
        'Identifier' => 'identifier',
        'is_error' => 'isError',
        'isError' => 'isError',
        'IsError' => 'isError',
        'locked' => 'locked',
        'Locked' => 'locked',
        'params' => 'params',
        'Params' => 'params',
        'path' => 'path',
        'Path' => 'path',
        'source_state' => 'sourceState',
        'sourceState' => 'sourceState',
        'SourceState' => 'sourceState',
        'target_state' => 'targetState',
        'targetState' => 'targetState',
        'TargetState' => 'targetState',
        'process' => 'process',
        'Process' => 'process',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_STATE_MACHINE_TRANSITION_LOG => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_state_machine_transition_log',
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
        self::CONDITION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'condition',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ERROR_MESSAGE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'error_message',
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
        self::HOSTNAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'hostname',
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
        self::IS_ERROR => [
            'type' => 'boolean',
            'type_shim' => null,
            'name_underscore' => 'is_error',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LOCKED => [
            'type' => 'boolean',
            'type_shim' => null,
            'name_underscore' => 'locked',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PARAMS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'params',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PATH => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'path',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SOURCE_STATE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'source_state',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TARGET_STATE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'target_state',
            'is_collection' => false,
            'is_transfer' => false,
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
    public static $entityNamespace = 'Orm\Zed\StateMachine\Persistence\SpyStateMachineTransitionLog';


    /**
     * @module 
     *
     * @param integer|null $idStateMachineTransitionLog
     *
     * @return $this
     */
    public function setIdStateMachineTransitionLog($idStateMachineTransitionLog)
    {
        $this->idStateMachineTransitionLog = $idStateMachineTransitionLog;
        $this->modifiedProperties[self::ID_STATE_MACHINE_TRANSITION_LOG] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdStateMachineTransitionLog()
    {
        return $this->idStateMachineTransitionLog;
    }

    /**
     * @module 
     *
     * @param integer|null $idStateMachineTransitionLog
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdStateMachineTransitionLogOrFail($idStateMachineTransitionLog)
    {
        if ($idStateMachineTransitionLog === null) {
            $this->throwNullValueException(static::ID_STATE_MACHINE_TRANSITION_LOG);
        }

        return $this->setIdStateMachineTransitionLog($idStateMachineTransitionLog);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdStateMachineTransitionLogOrFail()
    {
        if ($this->idStateMachineTransitionLog === null) {
            $this->throwNullValueException(static::ID_STATE_MACHINE_TRANSITION_LOG);
        }

        return $this->idStateMachineTransitionLog;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdStateMachineTransitionLog()
    {
        $this->assertPropertyIsSet(self::ID_STATE_MACHINE_TRANSITION_LOG);

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
     * @module 
     *
     * @return string|null
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param string|null $condition
     *
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;
        $this->modifiedProperties[self::CONDITION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * @module 
     *
     * @param string|null $condition
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setConditionOrFail($condition)
    {
        if ($condition === null) {
            $this->throwNullValueException(static::CONDITION);
        }

        return $this->setCondition($condition);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getConditionOrFail()
    {
        if ($this->condition === null) {
            $this->throwNullValueException(static::CONDITION);
        }

        return $this->condition;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCondition()
    {
        $this->assertPropertyIsSet(self::CONDITION);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $errorMessage
     *
     * @return $this
     */
    public function setErrorMessage($errorMessage)
    {
        $this->errorMessage = $errorMessage;
        $this->modifiedProperties[self::ERROR_MESSAGE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * @module 
     *
     * @param string|null $errorMessage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setErrorMessageOrFail($errorMessage)
    {
        if ($errorMessage === null) {
            $this->throwNullValueException(static::ERROR_MESSAGE);
        }

        return $this->setErrorMessage($errorMessage);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getErrorMessageOrFail()
    {
        if ($this->errorMessage === null) {
            $this->throwNullValueException(static::ERROR_MESSAGE);
        }

        return $this->errorMessage;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireErrorMessage()
    {
        $this->assertPropertyIsSet(self::ERROR_MESSAGE);

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
     * @param string|null $hostname
     *
     * @return $this
     */
    public function setHostname($hostname)
    {
        $this->hostname = $hostname;
        $this->modifiedProperties[self::HOSTNAME] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getHostname()
    {
        return $this->hostname;
    }

    /**
     * @module 
     *
     * @param string|null $hostname
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setHostnameOrFail($hostname)
    {
        if ($hostname === null) {
            $this->throwNullValueException(static::HOSTNAME);
        }

        return $this->setHostname($hostname);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getHostnameOrFail()
    {
        if ($this->hostname === null) {
            $this->throwNullValueException(static::HOSTNAME);
        }

        return $this->hostname;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireHostname()
    {
        $this->assertPropertyIsSet(self::HOSTNAME);

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
     * @param boolean|null $isError
     *
     * @return $this
     */
    public function setIsError($isError)
    {
        $this->isError = $isError;
        $this->modifiedProperties[self::IS_ERROR] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return boolean|null
     */
    public function getIsError()
    {
        return $this->isError;
    }

    /**
     * @module 
     *
     * @param boolean|null $isError
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsErrorOrFail($isError)
    {
        if ($isError === null) {
            $this->throwNullValueException(static::IS_ERROR);
        }

        return $this->setIsError($isError);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsErrorOrFail()
    {
        if ($this->isError === null) {
            $this->throwNullValueException(static::IS_ERROR);
        }

        return $this->isError;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsError()
    {
        $this->assertPropertyIsSet(self::IS_ERROR);

        return $this;
    }

    /**
     * @module 
     *
     * @param boolean|null $locked
     *
     * @return $this
     */
    public function setLocked($locked)
    {
        $this->locked = $locked;
        $this->modifiedProperties[self::LOCKED] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return boolean|null
     */
    public function getLocked()
    {
        return $this->locked;
    }

    /**
     * @module 
     *
     * @param boolean|null $locked
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLockedOrFail($locked)
    {
        if ($locked === null) {
            $this->throwNullValueException(static::LOCKED);
        }

        return $this->setLocked($locked);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getLockedOrFail()
    {
        if ($this->locked === null) {
            $this->throwNullValueException(static::LOCKED);
        }

        return $this->locked;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocked()
    {
        $this->assertPropertyIsSet(self::LOCKED);

        return $this;
    }

    /**
     * @module 
     *
     * @param array|null $params
     *
     * @return $this
     */
    public function setParams(array $params = null)
    {
        if ($params === null) {
            $params = [];
        }

        $this->params = $params;
        $this->modifiedProperties[self::PARAMS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return array
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * @module 
     *
     * @param mixed $params
     *
     * @return $this
     */
    public function addParams($params)
    {
        $this->params[] = $params;
        $this->modifiedProperties[self::PARAMS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireParams()
    {
        $this->assertPropertyIsSet(self::PARAMS);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $path
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->path = $path;
        $this->modifiedProperties[self::PATH] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @module 
     *
     * @param string|null $path
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPathOrFail($path)
    {
        if ($path === null) {
            $this->throwNullValueException(static::PATH);
        }

        return $this->setPath($path);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPathOrFail()
    {
        if ($this->path === null) {
            $this->throwNullValueException(static::PATH);
        }

        return $this->path;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePath()
    {
        $this->assertPropertyIsSet(self::PATH);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $sourceState
     *
     * @return $this
     */
    public function setSourceState($sourceState)
    {
        $this->sourceState = $sourceState;
        $this->modifiedProperties[self::SOURCE_STATE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getSourceState()
    {
        return $this->sourceState;
    }

    /**
     * @module 
     *
     * @param string|null $sourceState
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSourceStateOrFail($sourceState)
    {
        if ($sourceState === null) {
            $this->throwNullValueException(static::SOURCE_STATE);
        }

        return $this->setSourceState($sourceState);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSourceStateOrFail()
    {
        if ($this->sourceState === null) {
            $this->throwNullValueException(static::SOURCE_STATE);
        }

        return $this->sourceState;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSourceState()
    {
        $this->assertPropertyIsSet(self::SOURCE_STATE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $targetState
     *
     * @return $this
     */
    public function setTargetState($targetState)
    {
        $this->targetState = $targetState;
        $this->modifiedProperties[self::TARGET_STATE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getTargetState()
    {
        return $this->targetState;
    }

    /**
     * @module 
     *
     * @param string|null $targetState
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTargetStateOrFail($targetState)
    {
        if ($targetState === null) {
            $this->throwNullValueException(static::TARGET_STATE);
        }

        return $this->setTargetState($targetState);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTargetStateOrFail()
    {
        if ($this->targetState === null) {
            $this->throwNullValueException(static::TARGET_STATE);
        }

        return $this->targetState;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTargetState()
    {
        $this->assertPropertyIsSet(self::TARGET_STATE);

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
                case 'idStateMachineTransitionLog':
                case 'fkStateMachineProcess':
                case 'command':
                case 'condition':
                case 'errorMessage':
                case 'event':
                case 'hostname':
                case 'identifier':
                case 'isError':
                case 'locked':
                case 'params':
                case 'path':
                case 'sourceState':
                case 'targetState':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
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
                case 'idStateMachineTransitionLog':
                case 'fkStateMachineProcess':
                case 'command':
                case 'condition':
                case 'errorMessage':
                case 'event':
                case 'hostname':
                case 'identifier':
                case 'isError':
                case 'locked':
                case 'params':
                case 'path':
                case 'sourceState':
                case 'targetState':
                    $values[$arrayKey] = $value;

                    break;
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
                case 'idStateMachineTransitionLog':
                case 'fkStateMachineProcess':
                case 'command':
                case 'condition':
                case 'errorMessage':
                case 'event':
                case 'hostname':
                case 'identifier':
                case 'isError':
                case 'locked':
                case 'params':
                case 'path':
                case 'sourceState':
                case 'targetState':
                    $values[$arrayKey] = $value;

                    break;
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
            'idStateMachineTransitionLog' => $this->idStateMachineTransitionLog,
            'fkStateMachineProcess' => $this->fkStateMachineProcess,
            'command' => $this->command,
            'condition' => $this->condition,
            'errorMessage' => $this->errorMessage,
            'event' => $this->event,
            'hostname' => $this->hostname,
            'identifier' => $this->identifier,
            'isError' => $this->isError,
            'locked' => $this->locked,
            'params' => $this->params,
            'path' => $this->path,
            'sourceState' => $this->sourceState,
            'targetState' => $this->targetState,
            'process' => $this->process,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_state_machine_transition_log' => $this->idStateMachineTransitionLog,
            'fk_state_machine_process' => $this->fkStateMachineProcess,
            'command' => $this->command,
            'condition' => $this->condition,
            'error_message' => $this->errorMessage,
            'event' => $this->event,
            'hostname' => $this->hostname,
            'identifier' => $this->identifier,
            'is_error' => $this->isError,
            'locked' => $this->locked,
            'params' => $this->params,
            'path' => $this->path,
            'source_state' => $this->sourceState,
            'target_state' => $this->targetState,
            'process' => $this->process,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_state_machine_transition_log' => $this->idStateMachineTransitionLog instanceof AbstractTransfer ? $this->idStateMachineTransitionLog->toArray(true, false) : $this->idStateMachineTransitionLog,
            'fk_state_machine_process' => $this->fkStateMachineProcess instanceof AbstractTransfer ? $this->fkStateMachineProcess->toArray(true, false) : $this->fkStateMachineProcess,
            'command' => $this->command instanceof AbstractTransfer ? $this->command->toArray(true, false) : $this->command,
            'condition' => $this->condition instanceof AbstractTransfer ? $this->condition->toArray(true, false) : $this->condition,
            'error_message' => $this->errorMessage instanceof AbstractTransfer ? $this->errorMessage->toArray(true, false) : $this->errorMessage,
            'event' => $this->event instanceof AbstractTransfer ? $this->event->toArray(true, false) : $this->event,
            'hostname' => $this->hostname instanceof AbstractTransfer ? $this->hostname->toArray(true, false) : $this->hostname,
            'identifier' => $this->identifier instanceof AbstractTransfer ? $this->identifier->toArray(true, false) : $this->identifier,
            'is_error' => $this->isError instanceof AbstractTransfer ? $this->isError->toArray(true, false) : $this->isError,
            'locked' => $this->locked instanceof AbstractTransfer ? $this->locked->toArray(true, false) : $this->locked,
            'params' => $this->params instanceof AbstractTransfer ? $this->params->toArray(true, false) : $this->params,
            'path' => $this->path instanceof AbstractTransfer ? $this->path->toArray(true, false) : $this->path,
            'source_state' => $this->sourceState instanceof AbstractTransfer ? $this->sourceState->toArray(true, false) : $this->sourceState,
            'target_state' => $this->targetState instanceof AbstractTransfer ? $this->targetState->toArray(true, false) : $this->targetState,
            'process' => $this->process instanceof AbstractTransfer ? $this->process->toArray(true, false) : $this->process,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idStateMachineTransitionLog' => $this->idStateMachineTransitionLog instanceof AbstractTransfer ? $this->idStateMachineTransitionLog->toArray(true, true) : $this->idStateMachineTransitionLog,
            'fkStateMachineProcess' => $this->fkStateMachineProcess instanceof AbstractTransfer ? $this->fkStateMachineProcess->toArray(true, true) : $this->fkStateMachineProcess,
            'command' => $this->command instanceof AbstractTransfer ? $this->command->toArray(true, true) : $this->command,
            'condition' => $this->condition instanceof AbstractTransfer ? $this->condition->toArray(true, true) : $this->condition,
            'errorMessage' => $this->errorMessage instanceof AbstractTransfer ? $this->errorMessage->toArray(true, true) : $this->errorMessage,
            'event' => $this->event instanceof AbstractTransfer ? $this->event->toArray(true, true) : $this->event,
            'hostname' => $this->hostname instanceof AbstractTransfer ? $this->hostname->toArray(true, true) : $this->hostname,
            'identifier' => $this->identifier instanceof AbstractTransfer ? $this->identifier->toArray(true, true) : $this->identifier,
            'isError' => $this->isError instanceof AbstractTransfer ? $this->isError->toArray(true, true) : $this->isError,
            'locked' => $this->locked instanceof AbstractTransfer ? $this->locked->toArray(true, true) : $this->locked,
            'params' => $this->params instanceof AbstractTransfer ? $this->params->toArray(true, true) : $this->params,
            'path' => $this->path instanceof AbstractTransfer ? $this->path->toArray(true, true) : $this->path,
            'sourceState' => $this->sourceState instanceof AbstractTransfer ? $this->sourceState->toArray(true, true) : $this->sourceState,
            'targetState' => $this->targetState instanceof AbstractTransfer ? $this->targetState->toArray(true, true) : $this->targetState,
            'process' => $this->process instanceof AbstractTransfer ? $this->process->toArray(true, true) : $this->process,
        ];
    }
}
