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
class StateMachineItemStateTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const DESCRIPTION = 'description';

    /**
     * @var string
     */
    public const FK_STATE_MACHINE_PROCESS = 'fkStateMachineProcess';

    /**
     * @var string
     */
    public const ID_STATE_MACHINE_ITEM_STATE = 'idStateMachineItemState';

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var string|null
     */
    protected $fkStateMachineProcess;

    /**
     * @var string|null
     */
    protected $idStateMachineItemState;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'name' => 'name',
        'Name' => 'name',
        'description' => 'description',
        'Description' => 'description',
        'fk_state_machine_process' => 'fkStateMachineProcess',
        'fkStateMachineProcess' => 'fkStateMachineProcess',
        'FkStateMachineProcess' => 'fkStateMachineProcess',
        'id_state_machine_item_state' => 'idStateMachineItemState',
        'idStateMachineItemState' => 'idStateMachineItemState',
        'IdStateMachineItemState' => 'idStateMachineItemState',
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
        self::FK_STATE_MACHINE_PROCESS => [
            'type' => 'string',
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
        self::ID_STATE_MACHINE_ITEM_STATE => [
            'type' => 'string',
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
    ];

    /**
     * @module StateMachine
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
     * @module StateMachine
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module StateMachine
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
     * @module StateMachine
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
     * @module StateMachine
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
     * @module StateMachine
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
     * @module StateMachine
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @module StateMachine
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
     * @module StateMachine
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
     * @module StateMachine
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
     * @module StateMachine
     *
     * @param string|null $fkStateMachineProcess
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
     * @module StateMachine
     *
     * @return string|null
     */
    public function getFkStateMachineProcess()
    {
        return $this->fkStateMachineProcess;
    }

    /**
     * @module StateMachine
     *
     * @param string|null $fkStateMachineProcess
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
     * @module StateMachine
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getFkStateMachineProcessOrFail()
    {
        if ($this->fkStateMachineProcess === null) {
            $this->throwNullValueException(static::FK_STATE_MACHINE_PROCESS);
        }

        return $this->fkStateMachineProcess;
    }

    /**
     * @module StateMachine
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
     * @module StateMachine
     *
     * @param string|null $idStateMachineItemState
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
     * @module StateMachine
     *
     * @return string|null
     */
    public function getIdStateMachineItemState()
    {
        return $this->idStateMachineItemState;
    }

    /**
     * @module StateMachine
     *
     * @param string|null $idStateMachineItemState
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
     * @module StateMachine
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIdStateMachineItemStateOrFail()
    {
        if ($this->idStateMachineItemState === null) {
            $this->throwNullValueException(static::ID_STATE_MACHINE_ITEM_STATE);
        }

        return $this->idStateMachineItemState;
    }

    /**
     * @module StateMachine
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
                case 'description':
                case 'fkStateMachineProcess':
                case 'idStateMachineItemState':
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
                case 'description':
                case 'fkStateMachineProcess':
                case 'idStateMachineItemState':
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
                case 'description':
                case 'fkStateMachineProcess':
                case 'idStateMachineItemState':
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
            'description' => $this->description,
            'fkStateMachineProcess' => $this->fkStateMachineProcess,
            'idStateMachineItemState' => $this->idStateMachineItemState,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name,
            'description' => $this->description,
            'fk_state_machine_process' => $this->fkStateMachineProcess,
            'id_state_machine_item_state' => $this->idStateMachineItemState,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, false) : $this->description,
            'fk_state_machine_process' => $this->fkStateMachineProcess instanceof AbstractTransfer ? $this->fkStateMachineProcess->toArray(true, false) : $this->fkStateMachineProcess,
            'id_state_machine_item_state' => $this->idStateMachineItemState instanceof AbstractTransfer ? $this->idStateMachineItemState->toArray(true, false) : $this->idStateMachineItemState,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, true) : $this->description,
            'fkStateMachineProcess' => $this->fkStateMachineProcess instanceof AbstractTransfer ? $this->fkStateMachineProcess->toArray(true, true) : $this->fkStateMachineProcess,
            'idStateMachineItemState' => $this->idStateMachineItemState instanceof AbstractTransfer ? $this->idStateMachineItemState->toArray(true, true) : $this->idStateMachineItemState,
        ];
    }
}
