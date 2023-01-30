<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\DecimalObject\Decimal;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyAvailabilityAbstractEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_AVAILABILITY_ABSTRACT = 'idAvailabilityAbstract';

    /**
     * @var string
     */
    public const FK_STORE = 'fkStore';

    /**
     * @var string
     */
    public const ABSTRACT_SKU = 'abstractSku';

    /**
     * @var string
     */
    public const QUANTITY = 'quantity';

    /**
     * @var string
     */
    public const STORE = 'store';

    /**
     * @var string
     */
    public const SPY_AVAILABILITIES = 'spyAvailabilities';

    /**
     * @var integer|null
     */
    protected $idAvailabilityAbstract;

    /**
     * @var integer|null
     */
    protected $fkStore;

    /**
     * @var string|null
     */
    protected $abstractSku;

    /**
     * @var \Spryker\DecimalObject\Decimal|null
     */
    protected $quantity;

    /**
     * @var \Generated\Shared\Transfer\SpyStoreEntityTransfer|null
     */
    protected $store;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyAvailabilityEntityTransfer[]
     */
    protected $spyAvailabilities;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_availability_abstract' => 'idAvailabilityAbstract',
        'idAvailabilityAbstract' => 'idAvailabilityAbstract',
        'IdAvailabilityAbstract' => 'idAvailabilityAbstract',
        'fk_store' => 'fkStore',
        'fkStore' => 'fkStore',
        'FkStore' => 'fkStore',
        'abstract_sku' => 'abstractSku',
        'abstractSku' => 'abstractSku',
        'AbstractSku' => 'abstractSku',
        'quantity' => 'quantity',
        'Quantity' => 'quantity',
        'store' => 'store',
        'Store' => 'store',
        'spy_availabilities' => 'spyAvailabilities',
        'spyAvailabilities' => 'spyAvailabilities',
        'SpyAvailabilities' => 'spyAvailabilities',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_AVAILABILITY_ABSTRACT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_availability_abstract',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_STORE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_store',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ABSTRACT_SKU => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'abstract_sku',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::QUANTITY => [
            'type' => 'Spryker\DecimalObject\Decimal',
            'type_shim' => null,
            'name_underscore' => 'quantity',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => true,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORE => [
            'type' => 'Generated\Shared\Transfer\SpyStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'store',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_AVAILABILITIES => [
            'type' => 'Generated\Shared\Transfer\SpyAvailabilityEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_availabilities',
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
    public static $entityNamespace = 'Orm\Zed\Availability\Persistence\SpyAvailabilityAbstract';


    /**
     * @module 
     *
     * @param integer|null $idAvailabilityAbstract
     *
     * @return $this
     */
    public function setIdAvailabilityAbstract($idAvailabilityAbstract)
    {
        $this->idAvailabilityAbstract = $idAvailabilityAbstract;
        $this->modifiedProperties[self::ID_AVAILABILITY_ABSTRACT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdAvailabilityAbstract()
    {
        return $this->idAvailabilityAbstract;
    }

    /**
     * @module 
     *
     * @param integer|null $idAvailabilityAbstract
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdAvailabilityAbstractOrFail($idAvailabilityAbstract)
    {
        if ($idAvailabilityAbstract === null) {
            $this->throwNullValueException(static::ID_AVAILABILITY_ABSTRACT);
        }

        return $this->setIdAvailabilityAbstract($idAvailabilityAbstract);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdAvailabilityAbstractOrFail()
    {
        if ($this->idAvailabilityAbstract === null) {
            $this->throwNullValueException(static::ID_AVAILABILITY_ABSTRACT);
        }

        return $this->idAvailabilityAbstract;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdAvailabilityAbstract()
    {
        $this->assertPropertyIsSet(self::ID_AVAILABILITY_ABSTRACT);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkStore
     *
     * @return $this
     */
    public function setFkStore($fkStore)
    {
        $this->fkStore = $fkStore;
        $this->modifiedProperties[self::FK_STORE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkStore()
    {
        return $this->fkStore;
    }

    /**
     * @module 
     *
     * @param integer|null $fkStore
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkStoreOrFail($fkStore)
    {
        if ($fkStore === null) {
            $this->throwNullValueException(static::FK_STORE);
        }

        return $this->setFkStore($fkStore);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkStoreOrFail()
    {
        if ($this->fkStore === null) {
            $this->throwNullValueException(static::FK_STORE);
        }

        return $this->fkStore;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkStore()
    {
        $this->assertPropertyIsSet(self::FK_STORE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $abstractSku
     *
     * @return $this
     */
    public function setAbstractSku($abstractSku)
    {
        $this->abstractSku = $abstractSku;
        $this->modifiedProperties[self::ABSTRACT_SKU] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getAbstractSku()
    {
        return $this->abstractSku;
    }

    /**
     * @module 
     *
     * @param string|null $abstractSku
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAbstractSkuOrFail($abstractSku)
    {
        if ($abstractSku === null) {
            $this->throwNullValueException(static::ABSTRACT_SKU);
        }

        return $this->setAbstractSku($abstractSku);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAbstractSkuOrFail()
    {
        if ($this->abstractSku === null) {
            $this->throwNullValueException(static::ABSTRACT_SKU);
        }

        return $this->abstractSku;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAbstractSku()
    {
        $this->assertPropertyIsSet(self::ABSTRACT_SKU);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal|null $quantity
     *
     * @return $this
     */
    public function setQuantity($quantity = null)
    {
        if ($quantity !== null && !$quantity instanceof Decimal) {
            $quantity = new Decimal($quantity);
        }

        $this->quantity = $quantity;
        $this->modifiedProperties[self::QUANTITY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Spryker\DecimalObject\Decimal|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @module 
     *
     * @param string|int|float|\Spryker\DecimalObject\Decimal $quantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuantityOrFail($quantity)
    {
        if ($quantity === null) {
            $this->throwNullValueException(static::QUANTITY);
        }

        return $this->setQuantity($quantity);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Spryker\DecimalObject\Decimal
     */
    public function getQuantityOrFail()
    {
        if ($this->quantity === null) {
            $this->throwNullValueException(static::QUANTITY);
        }

        return $this->quantity;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuantity()
    {
        $this->assertPropertyIsSet(self::QUANTITY);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyStoreEntityTransfer|null $store
     *
     * @return $this
     */
    public function setStore(SpyStoreEntityTransfer $store = null)
    {
        $this->store = $store;
        $this->modifiedProperties[self::STORE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyStoreEntityTransfer|null
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyStoreEntityTransfer $store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreOrFail(SpyStoreEntityTransfer $store)
    {
        return $this->setStore($store);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyStoreEntityTransfer
     */
    public function getStoreOrFail()
    {
        if ($this->store === null) {
            $this->throwNullValueException(static::STORE);
        }

        return $this->store;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStore()
    {
        $this->assertPropertyIsSet(self::STORE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyAvailabilityEntityTransfer[] $spyAvailabilities
     *
     * @return $this
     */
    public function setSpyAvailabilities(ArrayObject $spyAvailabilities)
    {
        $this->spyAvailabilities = $spyAvailabilities;
        $this->modifiedProperties[self::SPY_AVAILABILITIES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyAvailabilityEntityTransfer[]
     */
    public function getSpyAvailabilities()
    {
        return $this->spyAvailabilities;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyAvailabilityEntityTransfer $spyAvailabilities
     *
     * @return $this
     */
    public function addSpyAvailabilities(SpyAvailabilityEntityTransfer $spyAvailabilities)
    {
        $this->spyAvailabilities[] = $spyAvailabilities;
        $this->modifiedProperties[self::SPY_AVAILABILITIES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyAvailabilities()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_AVAILABILITIES);

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
                case 'idAvailabilityAbstract':
                case 'fkStore':
                case 'abstractSku':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'store':
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
                case 'spyAvailabilities':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'quantity':
                    $this->assignValueObject($normalizedPropertyName, $value);

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
                case 'idAvailabilityAbstract':
                case 'fkStore':
                case 'abstractSku':
                case 'quantity':
                    $values[$arrayKey] = $value;

                    break;
                case 'store':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyAvailabilities':
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
                case 'idAvailabilityAbstract':
                case 'fkStore':
                case 'abstractSku':
                case 'quantity':
                    $values[$arrayKey] = $value;

                    break;
                case 'store':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyAvailabilities':
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
        $this->spyAvailabilities = $this->spyAvailabilities ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idAvailabilityAbstract' => $this->idAvailabilityAbstract,
            'fkStore' => $this->fkStore,
            'abstractSku' => $this->abstractSku,
            'store' => $this->store,
            'spyAvailabilities' => $this->spyAvailabilities,
            'quantity' => $this->quantity,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_availability_abstract' => $this->idAvailabilityAbstract,
            'fk_store' => $this->fkStore,
            'abstract_sku' => $this->abstractSku,
            'store' => $this->store,
            'spy_availabilities' => $this->spyAvailabilities,
            'quantity' => $this->quantity,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_availability_abstract' => $this->idAvailabilityAbstract instanceof AbstractTransfer ? $this->idAvailabilityAbstract->toArray(true, false) : $this->idAvailabilityAbstract,
            'fk_store' => $this->fkStore instanceof AbstractTransfer ? $this->fkStore->toArray(true, false) : $this->fkStore,
            'abstract_sku' => $this->abstractSku instanceof AbstractTransfer ? $this->abstractSku->toArray(true, false) : $this->abstractSku,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, false) : $this->store,
            'spy_availabilities' => $this->spyAvailabilities instanceof AbstractTransfer ? $this->spyAvailabilities->toArray(true, false) : $this->addValuesToCollection($this->spyAvailabilities, true, false),
            'quantity' => $this->quantity,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idAvailabilityAbstract' => $this->idAvailabilityAbstract instanceof AbstractTransfer ? $this->idAvailabilityAbstract->toArray(true, true) : $this->idAvailabilityAbstract,
            'fkStore' => $this->fkStore instanceof AbstractTransfer ? $this->fkStore->toArray(true, true) : $this->fkStore,
            'abstractSku' => $this->abstractSku instanceof AbstractTransfer ? $this->abstractSku->toArray(true, true) : $this->abstractSku,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, true) : $this->store,
            'spyAvailabilities' => $this->spyAvailabilities instanceof AbstractTransfer ? $this->spyAvailabilities->toArray(true, true) : $this->addValuesToCollection($this->spyAvailabilities, true, true),
            'quantity' => $this->quantity,
        ];
    }
}
