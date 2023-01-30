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
class ItemSplitResponseTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_SALES_ORDER_ITEM = 'idSalesOrderItem';

    /**
     * @var string
     */
    public const SUCCESS = 'success';

    /**
     * @var string
     */
    public const VALIDATION_MESSAGES = 'validationMessages';

    /**
     * @var string
     */
    public const SUCCESS_MESSAGE = 'successMessage';

    /**
     * @var int|null
     */
    protected $idSalesOrderItem;

    /**
     * @var bool|null
     */
    protected $success;

    /**
     * @var array
     */
    protected $validationMessages = [];

    /**
     * @var string|null
     */
    protected $successMessage;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_sales_order_item' => 'idSalesOrderItem',
        'idSalesOrderItem' => 'idSalesOrderItem',
        'IdSalesOrderItem' => 'idSalesOrderItem',
        'success' => 'success',
        'Success' => 'success',
        'validation_messages' => 'validationMessages',
        'validationMessages' => 'validationMessages',
        'ValidationMessages' => 'validationMessages',
        'success_message' => 'successMessage',
        'successMessage' => 'successMessage',
        'SuccessMessage' => 'successMessage',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SALES_ORDER_ITEM => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_sales_order_item',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SUCCESS => [
            'type' => 'bool',
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
        self::VALIDATION_MESSAGES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'validation_messages',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SUCCESS_MESSAGE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'success_message',
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
     * @module SalesSplit
     *
     * @param int|null $idSalesOrderItem
     *
     * @return $this
     */
    public function setIdSalesOrderItem($idSalesOrderItem)
    {
        $this->idSalesOrderItem = $idSalesOrderItem;
        $this->modifiedProperties[self::ID_SALES_ORDER_ITEM] = true;

        return $this;
    }

    /**
     * @module SalesSplit
     *
     * @return int|null
     */
    public function getIdSalesOrderItem()
    {
        return $this->idSalesOrderItem;
    }

    /**
     * @module SalesSplit
     *
     * @param int|null $idSalesOrderItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesOrderItemOrFail($idSalesOrderItem)
    {
        if ($idSalesOrderItem === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_ITEM);
        }

        return $this->setIdSalesOrderItem($idSalesOrderItem);
    }

    /**
     * @module SalesSplit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdSalesOrderItemOrFail()
    {
        if ($this->idSalesOrderItem === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER_ITEM);
        }

        return $this->idSalesOrderItem;
    }

    /**
     * @module SalesSplit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesOrderItem()
    {
        $this->assertPropertyIsSet(self::ID_SALES_ORDER_ITEM);

        return $this;
    }

    /**
     * @module SalesSplit
     *
     * @param bool|null $success
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
     * @module SalesSplit
     *
     * @return bool|null
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * @module SalesSplit
     *
     * @param bool|null $success
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
     * @module SalesSplit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getSuccessOrFail()
    {
        if ($this->success === null) {
            $this->throwNullValueException(static::SUCCESS);
        }

        return $this->success;
    }

    /**
     * @module SalesSplit
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
     * @module SalesSplit
     *
     * @param array|null $validationMessages
     *
     * @return $this
     */
    public function setValidationMessages(array $validationMessages = null)
    {
        if ($validationMessages === null) {
            $validationMessages = [];
        }

        $this->validationMessages = $validationMessages;
        $this->modifiedProperties[self::VALIDATION_MESSAGES] = true;

        return $this;
    }

    /**
     * @module SalesSplit
     *
     * @return array
     */
    public function getValidationMessages()
    {
        return $this->validationMessages;
    }

    /**
     * @module SalesSplit
     *
     * @param mixed $code
     *
     * @return $this
     */
    public function addCode($code)
    {
        $this->validationMessages[] = $code;
        $this->modifiedProperties[self::VALIDATION_MESSAGES] = true;

        return $this;
    }

    /**
     * @module SalesSplit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireValidationMessages()
    {
        $this->assertPropertyIsSet(self::VALIDATION_MESSAGES);

        return $this;
    }

    /**
     * @module SalesSplit
     *
     * @param string|null $successMessage
     *
     * @return $this
     */
    public function setSuccessMessage($successMessage)
    {
        $this->successMessage = $successMessage;
        $this->modifiedProperties[self::SUCCESS_MESSAGE] = true;

        return $this;
    }

    /**
     * @module SalesSplit
     *
     * @return string|null
     */
    public function getSuccessMessage()
    {
        return $this->successMessage;
    }

    /**
     * @module SalesSplit
     *
     * @param string|null $successMessage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSuccessMessageOrFail($successMessage)
    {
        if ($successMessage === null) {
            $this->throwNullValueException(static::SUCCESS_MESSAGE);
        }

        return $this->setSuccessMessage($successMessage);
    }

    /**
     * @module SalesSplit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSuccessMessageOrFail()
    {
        if ($this->successMessage === null) {
            $this->throwNullValueException(static::SUCCESS_MESSAGE);
        }

        return $this->successMessage;
    }

    /**
     * @module SalesSplit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSuccessMessage()
    {
        $this->assertPropertyIsSet(self::SUCCESS_MESSAGE);

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
                case 'idSalesOrderItem':
                case 'success':
                case 'validationMessages':
                case 'successMessage':
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
                case 'idSalesOrderItem':
                case 'success':
                case 'validationMessages':
                case 'successMessage':
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
                case 'idSalesOrderItem':
                case 'success':
                case 'validationMessages':
                case 'successMessage':
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
            'idSalesOrderItem' => $this->idSalesOrderItem,
            'success' => $this->success,
            'validationMessages' => $this->validationMessages,
            'successMessage' => $this->successMessage,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_order_item' => $this->idSalesOrderItem,
            'success' => $this->success,
            'validation_messages' => $this->validationMessages,
            'success_message' => $this->successMessage,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_sales_order_item' => $this->idSalesOrderItem instanceof AbstractTransfer ? $this->idSalesOrderItem->toArray(true, false) : $this->idSalesOrderItem,
            'success' => $this->success instanceof AbstractTransfer ? $this->success->toArray(true, false) : $this->success,
            'validation_messages' => $this->validationMessages instanceof AbstractTransfer ? $this->validationMessages->toArray(true, false) : $this->validationMessages,
            'success_message' => $this->successMessage instanceof AbstractTransfer ? $this->successMessage->toArray(true, false) : $this->successMessage,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idSalesOrderItem' => $this->idSalesOrderItem instanceof AbstractTransfer ? $this->idSalesOrderItem->toArray(true, true) : $this->idSalesOrderItem,
            'success' => $this->success instanceof AbstractTransfer ? $this->success->toArray(true, true) : $this->success,
            'validationMessages' => $this->validationMessages instanceof AbstractTransfer ? $this->validationMessages->toArray(true, true) : $this->validationMessages,
            'successMessage' => $this->successMessage instanceof AbstractTransfer ? $this->successMessage->toArray(true, true) : $this->successMessage,
        ];
    }
}
