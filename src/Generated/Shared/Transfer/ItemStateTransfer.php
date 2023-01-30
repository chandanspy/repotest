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
class ItemStateTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const DISPLAY_NAME = 'displayName';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const ID_SALES_ORDER = 'idSalesOrder';

    /**
     * @var string
     */
    public const CREATED_AT = 'createdAt';

    /**
     * @var string
     */
    public const ID_SALES_ORDER_ITEM = 'idSalesOrderItem';

    /**
     * @var string|null
     */
    protected $displayName;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var int|null
     */
    protected $idSalesOrder;

    /**
     * @var string|null
     */
    protected $createdAt;

    /**
     * @var int|null
     */
    protected $idSalesOrderItem;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'display_name' => 'displayName',
        'displayName' => 'displayName',
        'DisplayName' => 'displayName',
        'name' => 'name',
        'Name' => 'name',
        'id_sales_order' => 'idSalesOrder',
        'idSalesOrder' => 'idSalesOrder',
        'IdSalesOrder' => 'idSalesOrder',
        'created_at' => 'createdAt',
        'createdAt' => 'createdAt',
        'CreatedAt' => 'createdAt',
        'id_sales_order_item' => 'idSalesOrderItem',
        'idSalesOrderItem' => 'idSalesOrderItem',
        'IdSalesOrderItem' => 'idSalesOrderItem',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::DISPLAY_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'display_name',
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
        self::ID_SALES_ORDER => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_sales_order',
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
    ];

    /**
     * @module CustomerPage|Oms
     *
     * @param string|null $displayName
     *
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
        $this->modifiedProperties[self::DISPLAY_NAME] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Oms
     *
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @module CustomerPage|Oms
     *
     * @param string|null $displayName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDisplayNameOrFail($displayName)
    {
        if ($displayName === null) {
            $this->throwNullValueException(static::DISPLAY_NAME);
        }

        return $this->setDisplayName($displayName);
    }

    /**
     * @module CustomerPage|Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDisplayNameOrFail()
    {
        if ($this->displayName === null) {
            $this->throwNullValueException(static::DISPLAY_NAME);
        }

        return $this->displayName;
    }

    /**
     * @module CustomerPage|Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDisplayName()
    {
        $this->assertPropertyIsSet(self::DISPLAY_NAME);

        return $this;
    }

    /**
     * @module CustomerPage|SalesProductBundleWidget|SalesReturnPage|Oms|SalesReturnGui|SalesReturn|Sales
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
     * @module CustomerPage|SalesProductBundleWidget|SalesReturnPage|Oms|SalesReturnGui|SalesReturn|Sales
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module CustomerPage|SalesProductBundleWidget|SalesReturnPage|Oms|SalesReturnGui|SalesReturn|Sales
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
     * @module CustomerPage|SalesProductBundleWidget|SalesReturnPage|Oms|SalesReturnGui|SalesReturn|Sales
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
     * @module CustomerPage|SalesProductBundleWidget|SalesReturnPage|Oms|SalesReturnGui|SalesReturn|Sales
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
     * @module Oms|Sales
     *
     * @param int|null $idSalesOrder
     *
     * @return $this
     */
    public function setIdSalesOrder($idSalesOrder)
    {
        $this->idSalesOrder = $idSalesOrder;
        $this->modifiedProperties[self::ID_SALES_ORDER] = true;

        return $this;
    }

    /**
     * @module Oms|Sales
     *
     * @return int|null
     */
    public function getIdSalesOrder()
    {
        return $this->idSalesOrder;
    }

    /**
     * @module Oms|Sales
     *
     * @param int|null $idSalesOrder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesOrderOrFail($idSalesOrder)
    {
        if ($idSalesOrder === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER);
        }

        return $this->setIdSalesOrder($idSalesOrder);
    }

    /**
     * @module Oms|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdSalesOrderOrFail()
    {
        if ($this->idSalesOrder === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER);
        }

        return $this->idSalesOrder;
    }

    /**
     * @module Oms|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesOrder()
    {
        $this->assertPropertyIsSet(self::ID_SALES_ORDER);

        return $this;
    }

    /**
     * @module Oms|Sales
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
     * @module Oms|Sales
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @module Oms|Sales
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
     * @module Oms|Sales
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
     * @module Oms|Sales
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
     * @module Oms
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
     * @module Oms
     *
     * @return int|null
     */
    public function getIdSalesOrderItem()
    {
        return $this->idSalesOrderItem;
    }

    /**
     * @module Oms
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
     * @module Oms
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
     * @module Oms
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
                case 'displayName':
                case 'name':
                case 'idSalesOrder':
                case 'createdAt':
                case 'idSalesOrderItem':
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
                case 'displayName':
                case 'name':
                case 'idSalesOrder':
                case 'createdAt':
                case 'idSalesOrderItem':
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
                case 'displayName':
                case 'name':
                case 'idSalesOrder':
                case 'createdAt':
                case 'idSalesOrderItem':
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
            'displayName' => $this->displayName,
            'name' => $this->name,
            'idSalesOrder' => $this->idSalesOrder,
            'createdAt' => $this->createdAt,
            'idSalesOrderItem' => $this->idSalesOrderItem,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'display_name' => $this->displayName,
            'name' => $this->name,
            'id_sales_order' => $this->idSalesOrder,
            'created_at' => $this->createdAt,
            'id_sales_order_item' => $this->idSalesOrderItem,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'display_name' => $this->displayName instanceof AbstractTransfer ? $this->displayName->toArray(true, false) : $this->displayName,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'id_sales_order' => $this->idSalesOrder instanceof AbstractTransfer ? $this->idSalesOrder->toArray(true, false) : $this->idSalesOrder,
            'created_at' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, false) : $this->createdAt,
            'id_sales_order_item' => $this->idSalesOrderItem instanceof AbstractTransfer ? $this->idSalesOrderItem->toArray(true, false) : $this->idSalesOrderItem,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'displayName' => $this->displayName instanceof AbstractTransfer ? $this->displayName->toArray(true, true) : $this->displayName,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'idSalesOrder' => $this->idSalesOrder instanceof AbstractTransfer ? $this->idSalesOrder->toArray(true, true) : $this->idSalesOrder,
            'createdAt' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, true) : $this->createdAt,
            'idSalesOrderItem' => $this->idSalesOrderItem instanceof AbstractTransfer ? $this->idSalesOrderItem->toArray(true, true) : $this->idSalesOrderItem,
        ];
    }
}
