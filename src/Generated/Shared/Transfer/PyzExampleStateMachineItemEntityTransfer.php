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
class PyzExampleStateMachineItemEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_EXAMPLE_STATE_MACHINE_ITEM = 'idExampleStateMachineItem';

    /**
     * @var string
     */
    public const FK_STATE_MACHINE_ITEM_STATE = 'fkStateMachineItemState';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const STATE = 'state';

    /**
     * @var integer|null
     */
    protected $idExampleStateMachineItem;

    /**
     * @var integer|null
     */
    protected $fkStateMachineItemState;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var \Generated\Shared\Transfer\SpyStateMachineItemStateEntityTransfer|null
     */
    protected $state;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_example_state_machine_item' => 'idExampleStateMachineItem',
        'idExampleStateMachineItem' => 'idExampleStateMachineItem',
        'IdExampleStateMachineItem' => 'idExampleStateMachineItem',
        'fk_state_machine_item_state' => 'fkStateMachineItemState',
        'fkStateMachineItemState' => 'fkStateMachineItemState',
        'FkStateMachineItemState' => 'fkStateMachineItemState',
        'name' => 'name',
        'Name' => 'name',
        'state' => 'state',
        'State' => 'state',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_EXAMPLE_STATE_MACHINE_ITEM => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_example_state_machine_item',
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
    ];
    /**
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\ExampleStateMachine\Persistence\PyzExampleStateMachineItem';


    /**
     * @module 
     *
     * @param integer|null $idExampleStateMachineItem
     *
     * @return $this
     */
    public function setIdExampleStateMachineItem($idExampleStateMachineItem)
    {
        $this->idExampleStateMachineItem = $idExampleStateMachineItem;
        $this->modifiedProperties[self::ID_EXAMPLE_STATE_MACHINE_ITEM] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdExampleStateMachineItem()
    {
        return $this->idExampleStateMachineItem;
    }

    /**
     * @module 
     *
     * @param integer|null $idExampleStateMachineItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdExampleStateMachineItemOrFail($idExampleStateMachineItem)
    {
        if ($idExampleStateMachineItem === null) {
            $this->throwNullValueException(static::ID_EXAMPLE_STATE_MACHINE_ITEM);
        }

        return $this->setIdExampleStateMachineItem($idExampleStateMachineItem);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdExampleStateMachineItemOrFail()
    {
        if ($this->idExampleStateMachineItem === null) {
            $this->throwNullValueException(static::ID_EXAMPLE_STATE_MACHINE_ITEM);
        }

        return $this->idExampleStateMachineItem;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdExampleStateMachineItem()
    {
        $this->assertPropertyIsSet(self::ID_EXAMPLE_STATE_MACHINE_ITEM);

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
                case 'idExampleStateMachineItem':
                case 'fkStateMachineItemState':
                case 'name':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'state':
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
                case 'idExampleStateMachineItem':
                case 'fkStateMachineItemState':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'state':
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
                case 'idExampleStateMachineItem':
                case 'fkStateMachineItemState':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'state':
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
            'idExampleStateMachineItem' => $this->idExampleStateMachineItem,
            'fkStateMachineItemState' => $this->fkStateMachineItemState,
            'name' => $this->name,
            'state' => $this->state,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_example_state_machine_item' => $this->idExampleStateMachineItem,
            'fk_state_machine_item_state' => $this->fkStateMachineItemState,
            'name' => $this->name,
            'state' => $this->state,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_example_state_machine_item' => $this->idExampleStateMachineItem instanceof AbstractTransfer ? $this->idExampleStateMachineItem->toArray(true, false) : $this->idExampleStateMachineItem,
            'fk_state_machine_item_state' => $this->fkStateMachineItemState instanceof AbstractTransfer ? $this->fkStateMachineItemState->toArray(true, false) : $this->fkStateMachineItemState,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'state' => $this->state instanceof AbstractTransfer ? $this->state->toArray(true, false) : $this->state,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idExampleStateMachineItem' => $this->idExampleStateMachineItem instanceof AbstractTransfer ? $this->idExampleStateMachineItem->toArray(true, true) : $this->idExampleStateMachineItem,
            'fkStateMachineItemState' => $this->fkStateMachineItemState instanceof AbstractTransfer ? $this->fkStateMachineItemState->toArray(true, true) : $this->fkStateMachineItemState,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'state' => $this->state instanceof AbstractTransfer ? $this->state->toArray(true, true) : $this->state,
        ];
    }
}
