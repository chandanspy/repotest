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
class SpyAssetStoreEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_ASSET_STORE = 'idAssetStore';

    /**
     * @var string
     */
    public const FK_ASSET = 'fkAsset';

    /**
     * @var string
     */
    public const FK_STORE = 'fkStore';

    /**
     * @var string
     */
    public const SPY_ASSET = 'spyAsset';

    /**
     * @var string
     */
    public const SPY_STORE = 'spyStore';

    /**
     * @var integer|null
     */
    protected $idAssetStore;

    /**
     * @var integer|null
     */
    protected $fkAsset;

    /**
     * @var integer|null
     */
    protected $fkStore;

    /**
     * @var \Generated\Shared\Transfer\SpyAssetEntityTransfer|null
     */
    protected $spyAsset;

    /**
     * @var \Generated\Shared\Transfer\SpyStoreEntityTransfer|null
     */
    protected $spyStore;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_asset_store' => 'idAssetStore',
        'idAssetStore' => 'idAssetStore',
        'IdAssetStore' => 'idAssetStore',
        'fk_asset' => 'fkAsset',
        'fkAsset' => 'fkAsset',
        'FkAsset' => 'fkAsset',
        'fk_store' => 'fkStore',
        'fkStore' => 'fkStore',
        'FkStore' => 'fkStore',
        'spy_asset' => 'spyAsset',
        'spyAsset' => 'spyAsset',
        'SpyAsset' => 'spyAsset',
        'spy_store' => 'spyStore',
        'spyStore' => 'spyStore',
        'SpyStore' => 'spyStore',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_ASSET_STORE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_asset_store',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_ASSET => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_asset',
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
        self::SPY_ASSET => [
            'type' => 'Generated\Shared\Transfer\SpyAssetEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_asset',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_STORE => [
            'type' => 'Generated\Shared\Transfer\SpyStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_store',
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
    public static $entityNamespace = 'Orm\Zed\Asset\Persistence\SpyAssetStore';


    /**
     * @module 
     *
     * @param integer|null $idAssetStore
     *
     * @return $this
     */
    public function setIdAssetStore($idAssetStore)
    {
        $this->idAssetStore = $idAssetStore;
        $this->modifiedProperties[self::ID_ASSET_STORE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdAssetStore()
    {
        return $this->idAssetStore;
    }

    /**
     * @module 
     *
     * @param integer|null $idAssetStore
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdAssetStoreOrFail($idAssetStore)
    {
        if ($idAssetStore === null) {
            $this->throwNullValueException(static::ID_ASSET_STORE);
        }

        return $this->setIdAssetStore($idAssetStore);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdAssetStoreOrFail()
    {
        if ($this->idAssetStore === null) {
            $this->throwNullValueException(static::ID_ASSET_STORE);
        }

        return $this->idAssetStore;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdAssetStore()
    {
        $this->assertPropertyIsSet(self::ID_ASSET_STORE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkAsset
     *
     * @return $this
     */
    public function setFkAsset($fkAsset)
    {
        $this->fkAsset = $fkAsset;
        $this->modifiedProperties[self::FK_ASSET] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkAsset()
    {
        return $this->fkAsset;
    }

    /**
     * @module 
     *
     * @param integer|null $fkAsset
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkAssetOrFail($fkAsset)
    {
        if ($fkAsset === null) {
            $this->throwNullValueException(static::FK_ASSET);
        }

        return $this->setFkAsset($fkAsset);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkAssetOrFail()
    {
        if ($this->fkAsset === null) {
            $this->throwNullValueException(static::FK_ASSET);
        }

        return $this->fkAsset;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkAsset()
    {
        $this->assertPropertyIsSet(self::FK_ASSET);

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
     * @param \Generated\Shared\Transfer\SpyAssetEntityTransfer|null $spyAsset
     *
     * @return $this
     */
    public function setSpyAsset(SpyAssetEntityTransfer $spyAsset = null)
    {
        $this->spyAsset = $spyAsset;
        $this->modifiedProperties[self::SPY_ASSET] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyAssetEntityTransfer|null
     */
    public function getSpyAsset()
    {
        return $this->spyAsset;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyAssetEntityTransfer $spyAsset
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyAssetOrFail(SpyAssetEntityTransfer $spyAsset)
    {
        return $this->setSpyAsset($spyAsset);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyAssetEntityTransfer
     */
    public function getSpyAssetOrFail()
    {
        if ($this->spyAsset === null) {
            $this->throwNullValueException(static::SPY_ASSET);
        }

        return $this->spyAsset;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyAsset()
    {
        $this->assertPropertyIsSet(self::SPY_ASSET);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyStoreEntityTransfer|null $spyStore
     *
     * @return $this
     */
    public function setSpyStore(SpyStoreEntityTransfer $spyStore = null)
    {
        $this->spyStore = $spyStore;
        $this->modifiedProperties[self::SPY_STORE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyStoreEntityTransfer|null
     */
    public function getSpyStore()
    {
        return $this->spyStore;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyStoreEntityTransfer $spyStore
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyStoreOrFail(SpyStoreEntityTransfer $spyStore)
    {
        return $this->setSpyStore($spyStore);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyStoreEntityTransfer
     */
    public function getSpyStoreOrFail()
    {
        if ($this->spyStore === null) {
            $this->throwNullValueException(static::SPY_STORE);
        }

        return $this->spyStore;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyStore()
    {
        $this->assertPropertyIsSet(self::SPY_STORE);

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
                case 'idAssetStore':
                case 'fkAsset':
                case 'fkStore':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyAsset':
                case 'spyStore':
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
                case 'idAssetStore':
                case 'fkAsset':
                case 'fkStore':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyAsset':
                case 'spyStore':
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
                case 'idAssetStore':
                case 'fkAsset':
                case 'fkStore':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyAsset':
                case 'spyStore':
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
            'idAssetStore' => $this->idAssetStore,
            'fkAsset' => $this->fkAsset,
            'fkStore' => $this->fkStore,
            'spyAsset' => $this->spyAsset,
            'spyStore' => $this->spyStore,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_asset_store' => $this->idAssetStore,
            'fk_asset' => $this->fkAsset,
            'fk_store' => $this->fkStore,
            'spy_asset' => $this->spyAsset,
            'spy_store' => $this->spyStore,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_asset_store' => $this->idAssetStore instanceof AbstractTransfer ? $this->idAssetStore->toArray(true, false) : $this->idAssetStore,
            'fk_asset' => $this->fkAsset instanceof AbstractTransfer ? $this->fkAsset->toArray(true, false) : $this->fkAsset,
            'fk_store' => $this->fkStore instanceof AbstractTransfer ? $this->fkStore->toArray(true, false) : $this->fkStore,
            'spy_asset' => $this->spyAsset instanceof AbstractTransfer ? $this->spyAsset->toArray(true, false) : $this->spyAsset,
            'spy_store' => $this->spyStore instanceof AbstractTransfer ? $this->spyStore->toArray(true, false) : $this->spyStore,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idAssetStore' => $this->idAssetStore instanceof AbstractTransfer ? $this->idAssetStore->toArray(true, true) : $this->idAssetStore,
            'fkAsset' => $this->fkAsset instanceof AbstractTransfer ? $this->fkAsset->toArray(true, true) : $this->fkAsset,
            'fkStore' => $this->fkStore instanceof AbstractTransfer ? $this->fkStore->toArray(true, true) : $this->fkStore,
            'spyAsset' => $this->spyAsset instanceof AbstractTransfer ? $this->spyAsset->toArray(true, true) : $this->spyAsset,
            'spyStore' => $this->spyStore instanceof AbstractTransfer ? $this->spyStore->toArray(true, true) : $this->spyStore,
        ];
    }
}
