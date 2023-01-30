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
class SpySalesOrderCommentEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_SALES_ORDER_COMMENT = 'idSalesOrderComment';

    /**
     * @var string
     */
    public const FK_SALES_ORDER = 'fkSalesOrder';

    /**
     * @var string
     */
    public const MESSAGE = 'message';

    /**
     * @var string
     */
    public const USERNAME = 'username';

    /**
     * @var string
     */
    public const ORDER = 'order';

    /**
     * @var integer|null
     */
    protected $idSalesOrderComment;

    /**
     * @var integer|null
     */
    protected $fkSalesOrder;

    /**
     * @var string|null
     */
    protected $message;

    /**
     * @var string|null
     */
    protected $username;

    /**
     * @var \Generated\Shared\Transfer\SpySalesOrderEntityTransfer|null
     */
    protected $order;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_sales_order_comment' => 'idSalesOrderComment',
        'idSalesOrderComment' => 'idSalesOrderComment',
        'IdSalesOrderComment' => 'idSalesOrderComment',
        'fk_sales_order' => 'fkSalesOrder',
        'fkSalesOrder' => 'fkSalesOrder',
        'FkSalesOrder' => 'fkSalesOrder',
        'message' => 'message',
        'Message' => 'message',
        'username' => 'username',
        'Username' => 'username',
        'order' => 'order',
        'Order' => 'order',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SALES_ORDER_COMMENT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_sales_order_comment',
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
        self::USERNAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'username',
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
    public static $entityNamespace = 'Orm\Zed\Sales\Persistence\SpySalesOrderComment';


    /**
     * @module 
     *
     * @param integer|null $idSalesOrderComment
     *
     * @return $this
     */
    public function setIdSalesOrderComment($idSalesOrderComment)
    {
        $this->idSalesOrderComment = $idSalesOrderComment;
        $this->modifiedProperties[self::ID_SALES_ORDER_COMMENT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdSalesOrderComment()
    {
        return $this->idSalesOrderComment;
    }

    /**
     * @module 
     *
     * @param integer|null $idSalesOrderComment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesOrderCommentOrFail($idSalesOrderComment)
    {
        if ($idSalesOrderComment === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_COMMENT);
        }

        return $this->setIdSalesOrderComment($idSalesOrderComment);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdSalesOrderCommentOrFail()
    {
        if ($this->idSalesOrderComment === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_COMMENT);
        }

        return $this->idSalesOrderComment;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesOrderComment()
    {
        $this->assertPropertyIsSet(self::ID_SALES_ORDER_COMMENT);

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
     * @param string|null $username
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;
        $this->modifiedProperties[self::USERNAME] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @module 
     *
     * @param string|null $username
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUsernameOrFail($username)
    {
        if ($username === null) {
            $this->throwNullValueException(static::USERNAME);
        }

        return $this->setUsername($username);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUsernameOrFail()
    {
        if ($this->username === null) {
            $this->throwNullValueException(static::USERNAME);
        }

        return $this->username;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUsername()
    {
        $this->assertPropertyIsSet(self::USERNAME);

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
                case 'idSalesOrderComment':
                case 'fkSalesOrder':
                case 'message':
                case 'username':
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
                case 'idSalesOrderComment':
                case 'fkSalesOrder':
                case 'message':
                case 'username':
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
                case 'idSalesOrderComment':
                case 'fkSalesOrder':
                case 'message':
                case 'username':
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
            'idSalesOrderComment' => $this->idSalesOrderComment,
            'fkSalesOrder' => $this->fkSalesOrder,
            'message' => $this->message,
            'username' => $this->username,
            'order' => $this->order,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_order_comment' => $this->idSalesOrderComment,
            'fk_sales_order' => $this->fkSalesOrder,
            'message' => $this->message,
            'username' => $this->username,
            'order' => $this->order,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_order_comment' => $this->idSalesOrderComment instanceof AbstractTransfer ? $this->idSalesOrderComment->toArray(true, false) : $this->idSalesOrderComment,
            'fk_sales_order' => $this->fkSalesOrder instanceof AbstractTransfer ? $this->fkSalesOrder->toArray(true, false) : $this->fkSalesOrder,
            'message' => $this->message instanceof AbstractTransfer ? $this->message->toArray(true, false) : $this->message,
            'username' => $this->username instanceof AbstractTransfer ? $this->username->toArray(true, false) : $this->username,
            'order' => $this->order instanceof AbstractTransfer ? $this->order->toArray(true, false) : $this->order,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idSalesOrderComment' => $this->idSalesOrderComment instanceof AbstractTransfer ? $this->idSalesOrderComment->toArray(true, true) : $this->idSalesOrderComment,
            'fkSalesOrder' => $this->fkSalesOrder instanceof AbstractTransfer ? $this->fkSalesOrder->toArray(true, true) : $this->fkSalesOrder,
            'message' => $this->message instanceof AbstractTransfer ? $this->message->toArray(true, true) : $this->message,
            'username' => $this->username instanceof AbstractTransfer ? $this->username->toArray(true, true) : $this->username,
            'order' => $this->order instanceof AbstractTransfer ? $this->order->toArray(true, true) : $this->order,
        ];
    }
}
