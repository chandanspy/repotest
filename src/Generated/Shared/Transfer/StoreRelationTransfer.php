<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class StoreRelationTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_STORES = 'idStores';

    /**
     * @var string
     */
    public const STORES = 'stores';

    /**
     * @var string
     */
    public const ID_ENTITY = 'idEntity';

    /**
     * @var int[]
     */
    protected $idStores = [];

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\StoreTransfer[]
     */
    protected $stores;

    /**
     * @var int|null
     */
    protected $idEntity;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_stores' => 'idStores',
        'idStores' => 'idStores',
        'IdStores' => 'idStores',
        'stores' => 'stores',
        'Stores' => 'stores',
        'id_entity' => 'idEntity',
        'idEntity' => 'idEntity',
        'IdEntity' => 'idEntity',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_STORES => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'id_stores',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORES => [
            'type' => 'Generated\Shared\Transfer\StoreTransfer',
            'type_shim' => null,
            'name_underscore' => 'stores',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_ENTITY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_entity',
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
     * @module CategoryDataImport|CategoryStorage|Category|CmsBlock|Cms|Company|Discount|Merchant|Payment|ProductLabel|ProductManagement|ProductMeasurementUnit|ProductRelationGui|ProductRelation|Product|ShipmentGui|Shipment|Stock|StoreGui|Store
     *
     * @param int[]|null $idStores
     *
     * @return $this
     */
    public function setIdStores(array $idStores = null)
    {
        if ($idStores === null) {
            $idStores = [];
        }

        $this->idStores = $idStores;
        $this->modifiedProperties[self::ID_STORES] = true;

        return $this;
    }

    /**
     * @module CategoryDataImport|CategoryStorage|Category|CmsBlock|Cms|Company|Discount|Merchant|Payment|ProductLabel|ProductManagement|ProductMeasurementUnit|ProductRelationGui|ProductRelation|Product|ShipmentGui|Shipment|Stock|StoreGui|Store
     *
     * @return int[]
     */
    public function getIdStores()
    {
        return $this->idStores;
    }

    /**
     * @module CategoryDataImport|CategoryStorage|Category|CmsBlock|Cms|Company|Discount|Merchant|Payment|ProductLabel|ProductManagement|ProductMeasurementUnit|ProductRelationGui|ProductRelation|Product|ShipmentGui|Shipment|Stock|StoreGui|Store
     *
     * @param int $idStores
     *
     * @return $this
     */
    public function addIdStores($idStores)
    {
        $this->idStores[] = $idStores;
        $this->modifiedProperties[self::ID_STORES] = true;

        return $this;
    }

    /**
     * @module CategoryDataImport|CategoryStorage|Category|CmsBlock|Cms|Company|Discount|Merchant|Payment|ProductLabel|ProductManagement|ProductMeasurementUnit|ProductRelationGui|ProductRelation|Product|ShipmentGui|Shipment|Stock|StoreGui|Store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdStores()
    {
        $this->assertPropertyIsSet(self::ID_STORES);

        return $this;
    }

    /**
     * @module CategoryPageSearch|CategoryStorage|Category|CmsBlockGui|CmsBlock|CmsGui|CmsSlotBlockGui|Cms|Company|Discount|MerchantGui|Merchant|Payment|ProductLabelSearch|ProductLabelStorage|ProductLabel|ProductManagement|ProductMeasurementUnitStorage|ProductMeasurementUnit|ProductRelationGui|ProductRelationStorage|ProductRelation|Product|ShipmentGui|Shipment|ShoppingList|Stock
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\StoreTransfer[] $stores
     *
     * @return $this
     */
    public function setStores(ArrayObject $stores)
    {
        $this->stores = $stores;
        $this->modifiedProperties[self::STORES] = true;

        return $this;
    }

    /**
     * @module CategoryPageSearch|CategoryStorage|Category|CmsBlockGui|CmsBlock|CmsGui|CmsSlotBlockGui|Cms|Company|Discount|MerchantGui|Merchant|Payment|ProductLabelSearch|ProductLabelStorage|ProductLabel|ProductManagement|ProductMeasurementUnitStorage|ProductMeasurementUnit|ProductRelationGui|ProductRelationStorage|ProductRelation|Product|ShipmentGui|Shipment|ShoppingList|Stock
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\StoreTransfer[]
     */
    public function getStores()
    {
        return $this->stores;
    }

    /**
     * @module CategoryPageSearch|CategoryStorage|Category|CmsBlockGui|CmsBlock|CmsGui|CmsSlotBlockGui|Cms|Company|Discount|MerchantGui|Merchant|Payment|ProductLabelSearch|ProductLabelStorage|ProductLabel|ProductManagement|ProductMeasurementUnitStorage|ProductMeasurementUnit|ProductRelationGui|ProductRelationStorage|ProductRelation|Product|ShipmentGui|Shipment|ShoppingList|Stock
     *
     * @param \Generated\Shared\Transfer\StoreTransfer $stores
     *
     * @return $this
     */
    public function addStores(StoreTransfer $stores)
    {
        $this->stores[] = $stores;
        $this->modifiedProperties[self::STORES] = true;

        return $this;
    }

    /**
     * @module CategoryPageSearch|CategoryStorage|Category|CmsBlockGui|CmsBlock|CmsGui|CmsSlotBlockGui|Cms|Company|Discount|MerchantGui|Merchant|Payment|ProductLabelSearch|ProductLabelStorage|ProductLabel|ProductManagement|ProductMeasurementUnitStorage|ProductMeasurementUnit|ProductRelationGui|ProductRelationStorage|ProductRelation|Product|ShipmentGui|Shipment|ShoppingList|Stock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStores()
    {
        $this->assertCollectionPropertyIsSet(self::STORES);

        return $this;
    }

    /**
     * @module CategoryStorage|Category|CmsBlock|Cms|Company|Discount|Merchant|Payment|ProductLabel|ProductManagement|ProductMeasurementUnit|ProductRelationGui|ProductRelation|Product|ShipmentGui|Shipment|Stock|Store
     *
     * @param int|null $idEntity
     *
     * @return $this
     */
    public function setIdEntity($idEntity)
    {
        $this->idEntity = $idEntity;
        $this->modifiedProperties[self::ID_ENTITY] = true;

        return $this;
    }

    /**
     * @module CategoryStorage|Category|CmsBlock|Cms|Company|Discount|Merchant|Payment|ProductLabel|ProductManagement|ProductMeasurementUnit|ProductRelationGui|ProductRelation|Product|ShipmentGui|Shipment|Stock|Store
     *
     * @return int|null
     */
    public function getIdEntity()
    {
        return $this->idEntity;
    }

    /**
     * @module CategoryStorage|Category|CmsBlock|Cms|Company|Discount|Merchant|Payment|ProductLabel|ProductManagement|ProductMeasurementUnit|ProductRelationGui|ProductRelation|Product|ShipmentGui|Shipment|Stock|Store
     *
     * @param int|null $idEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdEntityOrFail($idEntity)
    {
        if ($idEntity === null) {
            $this->throwNullValueException(static::ID_ENTITY);
        }

        return $this->setIdEntity($idEntity);
    }

    /**
     * @module CategoryStorage|Category|CmsBlock|Cms|Company|Discount|Merchant|Payment|ProductLabel|ProductManagement|ProductMeasurementUnit|ProductRelationGui|ProductRelation|Product|ShipmentGui|Shipment|Stock|Store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdEntityOrFail()
    {
        if ($this->idEntity === null) {
            $this->throwNullValueException(static::ID_ENTITY);
        }

        return $this->idEntity;
    }

    /**
     * @module CategoryStorage|Category|CmsBlock|Cms|Company|Discount|Merchant|Payment|ProductLabel|ProductManagement|ProductMeasurementUnit|ProductRelationGui|ProductRelation|Product|ShipmentGui|Shipment|Stock|Store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdEntity()
    {
        $this->assertPropertyIsSet(self::ID_ENTITY);

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
                case 'idStores':
                case 'idEntity':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'stores':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
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
                case 'idStores':
                case 'idEntity':
                    $values[$arrayKey] = $value;

                    break;
                case 'stores':
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
                case 'idStores':
                case 'idEntity':
                    $values[$arrayKey] = $value;

                    break;
                case 'stores':
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
        $this->stores = $this->stores ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idStores' => $this->idStores,
            'idEntity' => $this->idEntity,
            'stores' => $this->stores,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_stores' => $this->idStores,
            'id_entity' => $this->idEntity,
            'stores' => $this->stores,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_stores' => $this->idStores instanceof AbstractTransfer ? $this->idStores->toArray(true, false) : $this->idStores,
            'id_entity' => $this->idEntity instanceof AbstractTransfer ? $this->idEntity->toArray(true, false) : $this->idEntity,
            'stores' => $this->stores instanceof AbstractTransfer ? $this->stores->toArray(true, false) : $this->addValuesToCollection($this->stores, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idStores' => $this->idStores instanceof AbstractTransfer ? $this->idStores->toArray(true, true) : $this->idStores,
            'idEntity' => $this->idEntity instanceof AbstractTransfer ? $this->idEntity->toArray(true, true) : $this->idEntity,
            'stores' => $this->stores instanceof AbstractTransfer ? $this->stores->toArray(true, true) : $this->addValuesToCollection($this->stores, true, true),
        ];
    }
}
