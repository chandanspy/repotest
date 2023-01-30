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
class SpySalesOrderNoteEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_SALES_ORDER_NOTE = 'idSalesOrderNote';

    /**
     * @var string
     */
    public const FK_SALES_ORDER = 'fkSalesOrder';

    /**
     * @var string
     */
    public const COMMAND = 'command';

    /**
     * @var string
     */
    public const MESSAGE = 'message';

    /**
     * @var string
     */
    public const SUCCESS = 'success';

    /**
     * @var string
     */
    public const ORDER = 'order';

    /**
     * @var integer|null
     */
    protected $idSalesOrderNote;

    /**
     * @var integer|null
     */
    protected $fkSalesOrder;

    /**
     * @var string|null
     */
    protected $command;

    /**
     * @var string|null
     */
    protected $message;

    /**
     * @var boolean|null
     */
    protected $success;

    /**
     * @var \Generated\Shared\Transfer\SpySalesOrderEntityTransfer|null
     */
    protected $order;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_sales_order_note' => 'idSalesOrderNote',
        'idSalesOrderNote' => 'idSalesOrderNote',
        'IdSalesOrderNote' => 'idSalesOrderNote',
        'fk_sales_order' => 'fkSalesOrder',
        'fkSalesOrder' => 'fkSalesOrder',
        'FkSalesOrder' => 'fkSalesOrder',
        'command' => 'command',
        'Command' => 'command',
        'message' => 'message',
        'Message' => 'message',
        'success' => 'success',
        'Success' => 'success',
        'order' => 'order',
        'Order' => 'order',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SALES_ORDER_NOTE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_sales_order_note',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_SALES_ORDER => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_sales_order',
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
        self::MESSAGE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'message',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SUCCESS => [
            'type' => 'boolean',
            'type_shim' => null,
            'name_underscore' => 'success',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ORDER => [
            'type' => 'Generated\Shared\Transfer\SpySalesOrderEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'order',
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
    public static $entityNamespace = 'Orm\Zed\Sales\Persistence\SpySalesOrderNote';


    /**
     * @module 
     *
     * @param integer|null $idSalesOrderNote
     *
     * @return $this
     */
    public function setIdSalesOrderNote($idSalesOrderNote)
    {
        $this->idSalesOrderNote = $idSalesOrderNote;
        $this->modifiedProperties[self::ID_SALES_ORDER_NOTE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdSalesOrderNote()
    {
        return $this->idSalesOrderNote;
    }

    /**
     * @module 
     *
     * @param integer|null $idSalesOrderNote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesOrderNoteOrFail($idSalesOrderNote)
    {
        if ($idSalesOrderNote === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_NOTE);
        }

        return $this->setIdSalesOrderNote($idSalesOrderNote);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdSalesOrderNoteOrFail()
    {
        if ($this->idSalesOrderNote === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_NOTE);
        }

        return $this->idSalesOrderNote;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesOrderNote()
    {
        $this->assertPropertyIsSet(self::ID_SALES_ORDER_NOTE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkSalesOrder
     *
     * @return $this
     */
    public function setFkSalesOrder($fkSalesOrder)
    {
        $this->fkSalesOrder = $fkSalesOrder;
        $this->modifiedProperties[self::FK_SALES_ORDER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkSalesOrder()
    {
        return $this->fkSalesOrder;
    }

    /**
     * @module 
     *
     * @param integer|null $fkSalesOrder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkSalesOrderOrFail($fkSalesOrder)
    {
        if ($fkSalesOrder === null) {
            $this->throwNullValueException(static::FK_SALES_ORDER);
        }

        return $this->setFkSalesOrder($fkSalesOrder);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkSalesOrderOrFail()
    {
        if ($this->fkSalesOrder === null) {
            $this->throwNullValueException(static::FK_SALES_ORDER);
        }

        return $this->fkSalesOrder;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkSalesOrder()
    {
        $this->assertPropertyIsSet(self::FK_SALES_ORDER);

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
     * @param string|null $message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->message = $message;
        $this->modifiedProperties[self::MESSAGE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @module 
     *
     * @param string|null $message
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMessageOrFail($message)
    {
        if ($message === null) {
            $this->throwNullValueException(static::MESSAGE);
        }

        return $this->setMessage($message);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getMessageOrFail()
    {
        if ($this->message === null) {
            $this->throwNullValueException(static::MESSAGE);
        }

        return $this->message;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMessage()
    {
        $this->assertPropertyIsSet(self::MESSAGE);

        return $this;
    }

    /**
     * @module 
     *
     * @param boolean|null $success
     *
     * @return $this
     */
    public function setSuccess($success)
    {
        $this->success = $success;
        $this->modifiedProperties[self::SUCCESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return boolean|null
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * @module 
     *
     * @param boolean|null $success
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSuccessOrFail($success)
    {
        if ($success === null) {
            $this->throwNullValueException(static::SUCCESS);
        }

        return $this->setSuccess($success);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getSuccessOrFail()
    {
        if ($this->success === null) {
            $this->throwNullValueException(static::SUCCESS);
        }

        return $this->success;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSuccess()
    {
        $this->assertPropertyIsSet(self::SUCCESS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderEntityTransfer|null $order
     *
     * @return $this
     */
    public function setOrder(SpySalesOrderEntityTransfer $order = null)
    {
        $this->order = $order;
        $this->modifiedProperties[self::ORDER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderEntityTransfer|null
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderEntityTransfer $order
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOrderOrFail(SpySalesOrderEntityTransfer $order)
    {
        return $this->setOrder($order);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderEntityTransfer
     */
    public function getOrderOrFail()
    {
        if ($this->order === null) {
            $this->throwNullValueException(static::ORDER);
        }

        return $this->order;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOrder()
    {
        $this->assertPropertyIsSet(self::ORDER);

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
                case 'idSalesOrderNote':
                case 'fkSalesOrder':
                case 'command':
                case 'message':
                case 'success':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'order':
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
                case 'idSalesOrderNote':
                case 'fkSalesOrder':
                case 'command':
                case 'message':
                case 'success':
                    $values[$arrayKey] = $value;

                    break;
                case 'order':
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
                case 'idSalesOrderNote':
                case 'fkSalesOrder':
                case 'command':
                case 'message':
                case 'success':
                    $values[$arrayKey] = $value;

                    break;
                case 'order':
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
            'idSalesOrderNote' => $this->idSalesOrderNote,
            'fkSalesOrder' => $this->fkSalesOrder,
            'command' => $this->command,
            'message' => $this->message,
            'success' => $this->success,
            'order' => $this->order,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_order_note' => $this->idSalesOrderNote,
            'fk_sales_order' => $this->fkSalesOrder,
            'command' => $this->command,
            'message' => $this->message,
            'success' => $this->success,
            'order' => $this->order,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_order_note' => $this->idSalesOrderNote instanceof AbstractTransfer ? $this->idSalesOrderNote->toArray(true, false) : $this->idSalesOrderNote,
            'fk_sales_order' => $this->fkSalesOrder instanceof AbstractTransfer ? $this->fkSalesOrder->toArray(true, false) : $this->fkSalesOrder,
            'command' => $this->command instanceof AbstractTransfer ? $this->command->toArray(true, false) : $this->command,
            'message' => $this->message instanceof AbstractTransfer ? $this->message->toArray(true, false) : $this->message,
            'success' => $this->success instanceof AbstractTransfer ? $this->success->toArray(true, false) : $this->success,
            'order' => $this->order instanceof AbstractTransfer ? $this->order->toArray(true, false) : $this->order,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idSalesOrderNote' => $this->idSalesOrderNote instanceof AbstractTransfer ? $this->idSalesOrderNote->toArray(true, true) : $this->idSalesOrderNote,
            'fkSalesOrder' => $this->fkSalesOrder instanceof AbstractTransfer ? $this->fkSalesOrder->toArray(true, true) : $this->fkSalesOrder,
            'command' => $this->command instanceof AbstractTransfer ? $this->command->toArray(true, true) : $this->command,
            'message' => $this->message instanceof AbstractTransfer ? $this->message->toArray(true, true) : $this->message,
            'success' => $this->success instanceof AbstractTransfer ? $this->success->toArray(true, true) : $this->success,
            'order' => $this->order instanceof AbstractTransfer ? $this->order->toArray(true, true) : $this->order,
        ];
    }
}
