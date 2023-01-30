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
class SpyStateMachineItemStateEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_STATE_MACHINE_ITEM_STATE = 'idStateMachineItemState';

    /**
     * @var string
     */
    public const FK_STATE_MACHINE_PROCESS = 'fkStateMachineProcess';

    /**
     * @var string
     */
    public const DESCRIPTION = 'description';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const PROCESS = 'process';

    /**
     * @var string
     */
    public const PYZ_EXAMPLE_STATE_MACHINE_ITEMS = 'pyzExampleStateMachineItems';

    /**
     * @var string
     */
    public const SPY_STATE_MACHINE_ITEM_STATE_HISTORIES = 'spyStateMachineItemStateHistories';

    /**
     * @var string
     */
    public const SPY_STATE_MACHINE_EVENT_TIMEOUTS = 'spyStateMachineEventTimeouts';

    /**
     * @var integer|null
     */
    protected $idStateMachineItemState;

    /**
     * @var integer|null
     */
    protected $fkStateMachineProcess;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var \Generated\Shared\Transfer\SpyStateMachineProcessEntityTransfer|null
     */
    protected $process;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\PyzExampleStateMachineItemEntityTransfer[]
     */
    protected $pyzExampleStateMachineItems;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyStateMachineItemStateHistoryEntityTransfer[]
     */
    protected $spyStateMachineItemStateHistories;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyStateMachineEventTimeoutEntityTransfer[]
     */
    protected $spyStateMachineEventTimeouts;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_state_machine_item_state' => 'idStateMachineItemState',
        'idStateMachineItemState' => 'idStateMachineItemState',
        'IdStateMachineItemState' => 'idStateMachineItemState',
        'fk_state_machine_process' => 'fkStateMachineProcess',
        'fkStateMachineProcess' => 'fkStateMachineProcess',
        'FkStateMachineProcess' => 'fkStateMachineProcess',
        'description' => 'description',
        'Description' => 'description',
        'name' => 'name',
        'Name' => 'name',
        'process' => 'process',
        'Process' => 'process',
        'pyz_example_state_machine_items' => 'pyzExampleStateMachineItems',
        'pyzExampleStateMachineItems' => 'pyzExampleStateMachineItems',
        'PyzExampleStateMachineItems' => 'pyzExampleStateMachineItems',
        'spy_state_machine_item_state_histories' => 'spyStateMachineItemStateHistories',
        'spyStateMachineItemStateHistories' => 'spyStateMachineItemStateHistories',
        'SpyStateMachineItemStateHistories' => 'spyStateMachineItemStateHistories',
        'spy_state_machine_event_timeouts' => 'spyStateMachineEventTimeouts',
        'spyStateMachineEventTimeouts' => 'spyStateMachineEventTimeouts',
        'SpyStateMachineEventTimeouts' => 'spyStateMachineEventTimeouts',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_STATE_MACHINE_ITEM_STATE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_state_machine_item_state',
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
        self::DESCRIPTION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'description',
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
        self::PYZ_EXAMPLE_STATE_MACHINE_ITEMS => [
            'type' => 'Generated\Shared\Transfer\PyzExampleStateMachineItemEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'pyz_example_state_machine_items',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_STATE_MACHINE_ITEM_STATE_HISTORIES => [
            'type' => 'Generated\Shared\Transfer\SpyStateMachineItemStateHistoryEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_state_machine_item_state_histories',
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
    public static $entityNamespace = 'Orm\Zed\StateMachine\Persistence\SpyStateMachineItemState';


    /**
     * @module 
     *
     * @param integer|null $idStateMachineItemState
     *
     * @return $this
     */
    public function setIdStateMachineItemState($idStateMachineItemState)
    {
        $this->idStateMachineItemState = $idStateMachineItemState;
        $this->modifiedProperties[self::ID_STATE_MACHINE_ITEM_STATE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdStateMachineItemState()
    {
        return $this->idStateMachineItemState;
    }

    /**
     * @module 
     *
     * @param integer|null $idStateMachineItemState
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdStateMachineItemStateOrFail($idStateMachineItemState)
    {
        if ($idStateMachineItemState === null) {
            $this->throwNullValueException(static::ID_STATE_MACHINE_ITEM_STATE);
        }

        return $this->setIdStateMachineItemState($idStateMachineItemState);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdStateMachineItemStateOrFail()
    {
        if ($this->idStateMachineItemState === null) {
            $this->throwNullValueException(static::ID_STATE_MACHINE_ITEM_STATE);
        }

        return $this->idStateMachineItemState;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdStateMachineItemState()
    {
        $this->assertPropertyIsSet(self::ID_STATE_MACHINE_ITEM_STATE);

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
     * @param string|null $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        $this->modifiedProperties[self::DESCRIPTION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @module 
     *
     * @param string|null $description
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDescriptionOrFail($description)
    {
        if ($description === null) {
            $this->throwNullValueException(static::DESCRIPTION);
        }

        return $this->setDescription($description);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDescriptionOrFail()
    {
        if ($this->description === null) {
            $this->throwNullValueException(static::DESCRIPTION);
        }

        return $this->description;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDescription()
    {
        $this->assertPropertyIsSet(self::DESCRIPTION);

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
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\PyzExampleStateMachineItemEntityTransfer[] $pyzExampleStateMachineItems
     *
     * @return $this
     */
    public function setPyzExampleStateMachineItems(ArrayObject $pyzExampleStateMachineItems)
    {
        $this->pyzExampleStateMachineItems = $pyzExampleStateMachineItems;
        $this->modifiedProperties[self::PYZ_EXAMPLE_STATE_MACHINE_ITEMS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\PyzExampleStateMachineItemEntityTransfer[]
     */
    public function getPyzExampleStateMachineItems()
    {
        return $this->pyzExampleStateMachineItems;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\PyzExampleStateMachineItemEntityTransfer $pyzExampleStateMachineItems
     *
     * @return $this
     */
    public function addPyzExampleStateMachineItems(PyzExampleStateMachineItemEntityTransfer $pyzExampleStateMachineItems)
    {
        $this->pyzExampleStateMachineItems[] = $pyzExampleStateMachineItems;
        $this->modifiedProperties[self::PYZ_EXAMPLE_STATE_MACHINE_ITEMS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePyzExampleStateMachineItems()
    {
        $this->assertCollectionPropertyIsSet(self::PYZ_EXAMPLE_STATE_MACHINE_ITEMS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyStateMachineItemStateHistoryEntityTransfer[] $spyStateMachineItemStateHistories
     *
     * @return $this
     */
    public function setSpyStateMachineItemStateHistories(ArrayObject $spyStateMachineItemStateHistories)
    {
        $this->spyStateMachineItemStateHistories = $spyStateMachineItemStateHistories;
        $this->modifiedProperties[self::SPY_STATE_MACHINE_ITEM_STATE_HISTORIES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyStateMachineItemStateHistoryEntityTransfer[]
     */
    public function getSpyStateMachineItemStateHistories()
    {
        return $this->spyStateMachineItemStateHistories;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyStateMachineItemStateHistoryEntityTransfer $spyStateMachineItemStateHistories
     *
     * @return $this
     */
    public function addSpyStateMachineItemStateHistories(SpyStateMachineItemStateHistoryEntityTransfer $spyStateMachineItemStateHistories)
    {
        $this->spyStateMachineItemStateHistories[] = $spyStateMachineItemStateHistories;
        $this->modifiedProperties[self::SPY_STATE_MACHINE_ITEM_STATE_HISTORIES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyStateMachineItemStateHistories()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_STATE_MACHINE_ITEM_STATE_HISTORIES);

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
                case 'idStateMachineItemState':
                case 'fkStateMachineProcess':
                case 'description':
                case 'name':
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
                case 'pyzExampleStateMachineItems':
                case 'spyStateMachineItemStateHistories':
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
                case 'idStateMachineItemState':
                case 'fkStateMachineProcess':
                case 'description':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'process':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'pyzExampleStateMachineItems':
                case 'spyStateMachineItemStateHistories':
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
                case 'idStateMachineItemState':
                case 'fkStateMachineProcess':
                case 'description':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'process':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'pyzExampleStateMachineItems':
                case 'spyStateMachineItemStateHistories':
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
        $this->pyzExampleStateMachineItems = $this->pyzExampleStateMachineItems ?: new ArrayObject();
        $this->spyStateMachineItemStateHistories = $this->spyStateMachineItemStateHistories ?: new ArrayObject();
        $this->spyStateMachineEventTimeouts = $this->spyStateMachineEventTimeouts ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idStateMachineItemState' => $this->idStateMachineItemState,
            'fkStateMachineProcess' => $this->fkStateMachineProcess,
            'description' => $this->description,
            'name' => $this->name,
            'process' => $this->process,
            'pyzExampleStateMachineItems' => $this->pyzExampleStateMachineItems,
            'spyStateMachineItemStateHistories' => $this->spyStateMachineItemStateHistories,
            'spyStateMachineEventTimeouts' => $this->spyStateMachineEventTimeouts,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_state_machine_item_state' => $this->idStateMachineItemState,
            'fk_state_machine_process' => $this->fkStateMachineProcess,
            'description' => $this->description,
            'name' => $this->name,
            'process' => $this->process,
            'pyz_example_state_machine_items' => $this->pyzExampleStateMachineItems,
            'spy_state_machine_item_state_histories' => $this->spyStateMachineItemStateHistories,
            'spy_state_machine_event_timeouts' => $this->spyStateMachineEventTimeouts,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_state_machine_item_state' => $this->idStateMachineItemState instanceof AbstractTransfer ? $this->idStateMachineItemState->toArray(true, false) : $this->idStateMachineItemState,
            'fk_state_machine_process' => $this->fkStateMachineProcess instanceof AbstractTransfer ? $this->fkStateMachineProcess->toArray(true, false) : $this->fkStateMachineProcess,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, false) : $this->description,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'process' => $this->process instanceof AbstractTransfer ? $this->process->toArray(true, false) : $this->process,
            'pyz_example_state_machine_items' => $this->pyzExampleStateMachineItems instanceof AbstractTransfer ? $this->pyzExampleStateMachineItems->toArray(true, false) : $this->addValuesToCollection($this->pyzExampleStateMachineItems, true, false),
            'spy_state_machine_item_state_histories' => $this->spyStateMachineItemStateHistories instanceof AbstractTransfer ? $this->spyStateMachineItemStateHistories->toArray(true, false) : $this->addValuesToCollection($this->spyStateMachineItemStateHistories, true, false),
            'spy_state_machine_event_timeouts' => $this->spyStateMachineEventTimeouts instanceof AbstractTransfer ? $this->spyStateMachineEventTimeouts->toArray(true, false) : $this->addValuesToCollection($this->spyStateMachineEventTimeouts, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idStateMachineItemState' => $this->idStateMachineItemState instanceof AbstractTransfer ? $this->idStateMachineItemState->toArray(true, true) : $this->idStateMachineItemState,
            'fkStateMachineProcess' => $this->fkStateMachineProcess instanceof AbstractTransfer ? $this->fkStateMachineProcess->toArray(true, true) : $this->fkStateMachineProcess,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, true) : $this->description,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'process' => $this->process instanceof AbstractTransfer ? $this->process->toArray(true, true) : $this->process,
            'pyzExampleStateMachineItems' => $this->pyzExampleStateMachineItems instanceof AbstractTransfer ? $this->pyzExampleStateMachineItems->toArray(true, true) : $this->addValuesToCollection($this->pyzExampleStateMachineItems, true, true),
            'spyStateMachineItemStateHistories' => $this->spyStateMachineItemStateHistories instanceof AbstractTransfer ? $this->spyStateMachineItemStateHistories->toArray(true, true) : $this->addValuesToCollection($this->spyStateMachineItemStateHistories, true, true),
            'spyStateMachineEventTimeouts' => $this->spyStateMachineEventTimeouts instanceof AbstractTransfer ? $this->spyStateMachineEventTimeouts->toArray(true, true) : $this->addValuesToCollection($this->spyStateMachineEventTimeouts, true, true),
        ];
    }
}
