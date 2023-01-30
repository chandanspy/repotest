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
class StockTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_STOCK = 'idStock';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const ADDRESS = 'address';

    /**
     * @var string
     */
    public const STORE_RELATION = 'storeRelation';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var int|null
     */
    protected $idStock;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var \Generated\Shared\Transfer\StockAddressTransfer|null
     */
    protected $address;

    /**
     * @var \Generated\Shared\Transfer\StoreRelationTransfer|null
     */
    protected $storeRelation;

    /**
     * @var bool|null
     */
    protected $isActive;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_stock' => 'idStock',
        'idStock' => 'idStock',
        'IdStock' => 'idStock',
        'name' => 'name',
        'Name' => 'name',
        'address' => 'address',
        'Address' => 'address',
        'store_relation' => 'storeRelation',
        'storeRelation' => 'storeRelation',
        'StoreRelation' => 'storeRelation',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_STOCK => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_stock',
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
        self::ADDRESS => [
            'type' => 'Generated\Shared\Transfer\StockAddressTransfer',
            'type_shim' => null,
            'name_underscore' => 'address',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORE_RELATION => [
            'type' => 'Generated\Shared\Transfer\StoreRelationTransfer',
            'type_shim' => null,
            'name_underscore' => 'store_relation',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_ACTIVE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_active',
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
     * @module AvailabilityGui|StockAddress|StockGui|Stock
     *
     * @param int|null $idStock
     *
     * @return $this
     */
    public function setIdStock($idStock)
    {
        $this->idStock = $idStock;
        $this->modifiedProperties[self::ID_STOCK] = true;

        return $this;
    }

    /**
     * @module AvailabilityGui|StockAddress|StockGui|Stock
     *
     * @return int|null
     */
    public function getIdStock()
    {
        return $this->idStock;
    }

    /**
     * @module AvailabilityGui|StockAddress|StockGui|Stock
     *
     * @param int|null $idStock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdStockOrFail($idStock)
    {
        if ($idStock === null) {
            $this->throwNullValueException(static::ID_STOCK);
        }

        return $this->setIdStock($idStock);
    }

    /**
     * @module AvailabilityGui|StockAddress|StockGui|Stock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdStockOrFail()
    {
        if ($this->idStock === null) {
            $this->throwNullValueException(static::ID_STOCK);
        }

        return $this->idStock;
    }

    /**
     * @module AvailabilityGui|StockAddress|StockGui|Stock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdStock()
    {
        $this->assertPropertyIsSet(self::ID_STOCK);

        return $this;
    }

    /**
     * @module AvailabilityGui|Stock
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
     * @module AvailabilityGui|Stock
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module AvailabilityGui|Stock
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
     * @module AvailabilityGui|Stock
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
     * @module AvailabilityGui|Stock
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
     * @module StockAddress
     *
     * @param \Generated\Shared\Transfer\StockAddressTransfer|null $address
     *
     * @return $this
     */
    public function setAddress(StockAddressTransfer $address = null)
    {
        $this->address = $address;
        $this->modifiedProperties[self::ADDRESS] = true;

        return $this;
    }

    /**
     * @module StockAddress
     *
     * @return \Generated\Shared\Transfer\StockAddressTransfer|null
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @module StockAddress
     *
     * @param \Generated\Shared\Transfer\StockAddressTransfer $address
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAddressOrFail(StockAddressTransfer $address)
    {
        return $this->setAddress($address);
    }

    /**
     * @module StockAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\StockAddressTransfer
     */
    public function getAddressOrFail()
    {
        if ($this->address === null) {
            $this->throwNullValueException(static::ADDRESS);
        }

        return $this->address;
    }

    /**
     * @module StockAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAddress()
    {
        $this->assertPropertyIsSet(self::ADDRESS);

        return $this;
    }

    /**
     * @module StockGui|Stock
     *
     * @param \Generated\Shared\Transfer\StoreRelationTransfer|null $storeRelation
     *
     * @return $this
     */
    public function setStoreRelation(StoreRelationTransfer $storeRelation = null)
    {
        $this->storeRelation = $storeRelation;
        $this->modifiedProperties[self::STORE_RELATION] = true;

        return $this;
    }

    /**
     * @module StockGui|Stock
     *
     * @return \Generated\Shared\Transfer\StoreRelationTransfer|null
     */
    public function getStoreRelation()
    {
        return $this->storeRelation;
    }

    /**
     * @module StockGui|Stock
     *
     * @param \Generated\Shared\Transfer\StoreRelationTransfer $storeRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreRelationOrFail(StoreRelationTransfer $storeRelation)
    {
        return $this->setStoreRelation($storeRelation);
    }

    /**
     * @module StockGui|Stock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\StoreRelationTransfer
     */
    public function getStoreRelationOrFail()
    {
        if ($this->storeRelation === null) {
            $this->throwNullValueException(static::STORE_RELATION);
        }

        return $this->storeRelation;
    }

    /**
     * @module StockGui|Stock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStoreRelation()
    {
        $this->assertPropertyIsSet(self::STORE_RELATION);

        return $this;
    }

    /**
     * @module Stock
     *
     * @param bool|null $isActive
     *
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        $this->modifiedProperties[self::IS_ACTIVE] = true;

        return $this;
    }

    /**
     * @module Stock
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module Stock
     *
     * @param bool|null $isActive
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsActiveOrFail($isActive)
    {
        if ($isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->setIsActive($isActive);
    }

    /**
     * @module Stock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsActiveOrFail()
    {
        if ($this->isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->isActive;
    }

    /**
     * @module Stock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsActive()
    {
        $this->assertPropertyIsSet(self::IS_ACTIVE);

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
                case 'idStock':
                case 'name':
                case 'isActive':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'address':
                case 'storeRelation':
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
                case 'idStock':
                case 'name':
                case 'isActive':
                    $values[$arrayKey] = $value;

                    break;
                case 'address':
                case 'storeRelation':
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
                case 'idStock':
                case 'name':
                case 'isActive':
                    $values[$arrayKey] = $value;

                    break;
                case 'address':
                case 'storeRelation':
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
            'idStock' => $this->idStock,
            'name' => $this->name,
            'isActive' => $this->isActive,
            'address' => $this->address,
            'storeRelation' => $this->storeRelation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_stock' => $this->idStock,
            'name' => $this->name,
            'is_active' => $this->isActive,
            'address' => $this->address,
            'store_relation' => $this->storeRelation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_stock' => $this->idStock instanceof AbstractTransfer ? $this->idStock->toArray(true, false) : $this->idStock,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'address' => $this->address instanceof AbstractTransfer ? $this->address->toArray(true, false) : $this->address,
            'store_relation' => $this->storeRelation instanceof AbstractTransfer ? $this->storeRelation->toArray(true, false) : $this->storeRelation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idStock' => $this->idStock instanceof AbstractTransfer ? $this->idStock->toArray(true, true) : $this->idStock,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'address' => $this->address instanceof AbstractTransfer ? $this->address->toArray(true, true) : $this->address,
            'storeRelation' => $this->storeRelation instanceof AbstractTransfer ? $this->storeRelation->toArray(true, true) : $this->storeRelation,
        ];
    }
}
