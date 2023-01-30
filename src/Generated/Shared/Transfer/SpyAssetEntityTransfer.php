<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyAssetEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_ASSET = 'idAsset';

    /**
     * @var string
     */
    public const ASSET_SLOT = 'assetSlot';

    /**
     * @var string
     */
    public const ASSET_UUID = 'assetUuid';

    /**
     * @var string
     */
    public const ASSET_NAME = 'assetName';

    /**
     * @var string
     */
    public const ASSET_CONTENT = 'assetContent';

    /**
     * @var string
     */
    public const SPY_ASSET_STORES = 'spyAssetStores';

    /**
     * @var integer|null
     */
    protected $idAsset;

    /**
     * @var string|null
     */
    protected $assetSlot;

    /**
     * @var string|null
     */
    protected $assetUuid;

    /**
     * @var string|null
     */
    protected $assetName;

    /**
     * @var string|null
     */
    protected $assetContent;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyAssetStoreEntityTransfer[]
     */
    protected $spyAssetStores;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_asset' => 'idAsset',
        'idAsset' => 'idAsset',
        'IdAsset' => 'idAsset',
        'asset_slot' => 'assetSlot',
        'assetSlot' => 'assetSlot',
        'AssetSlot' => 'assetSlot',
        'asset_uuid' => 'assetUuid',
        'assetUuid' => 'assetUuid',
        'AssetUuid' => 'assetUuid',
        'asset_name' => 'assetName',
        'assetName' => 'assetName',
        'AssetName' => 'assetName',
        'asset_content' => 'assetContent',
        'assetContent' => 'assetContent',
        'AssetContent' => 'assetContent',
        'spy_asset_stores' => 'spyAssetStores',
        'spyAssetStores' => 'spyAssetStores',
        'SpyAssetStores' => 'spyAssetStores',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_ASSET => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_asset',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ASSET_SLOT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'asset_slot',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ASSET_UUID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'asset_uuid',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ASSET_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'asset_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ASSET_CONTENT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'asset_content',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_ASSET_STORES => [
            'type' => 'Generated\Shared\Transfer\SpyAssetStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_asset_stores',
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
    public static $entityNamespace = 'Orm\Zed\Asset\Persistence\SpyAsset';


    /**
     * @module 
     *
     * @param integer|null $idAsset
     *
     * @return $this
     */
    public function setIdAsset($idAsset)
    {
        $this->idAsset = $idAsset;
        $this->modifiedProperties[self::ID_ASSET] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdAsset()
    {
        return $this->idAsset;
    }

    /**
     * @module 
     *
     * @param integer|null $idAsset
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdAssetOrFail($idAsset)
    {
        if ($idAsset === null) {
            $this->throwNullValueException(static::ID_ASSET);
        }

        return $this->setIdAsset($idAsset);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdAssetOrFail()
    {
        if ($this->idAsset === null) {
            $this->throwNullValueException(static::ID_ASSET);
        }

        return $this->idAsset;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdAsset()
    {
        $this->assertPropertyIsSet(self::ID_ASSET);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $assetSlot
     *
     * @return $this
     */
    public function setAssetSlot($assetSlot)
    {
        $this->assetSlot = $assetSlot;
        $this->modifiedProperties[self::ASSET_SLOT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getAssetSlot()
    {
        return $this->assetSlot;
    }

    /**
     * @module 
     *
     * @param string|null $assetSlot
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAssetSlotOrFail($assetSlot)
    {
        if ($assetSlot === null) {
            $this->throwNullValueException(static::ASSET_SLOT);
        }

        return $this->setAssetSlot($assetSlot);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAssetSlotOrFail()
    {
        if ($this->assetSlot === null) {
            $this->throwNullValueException(static::ASSET_SLOT);
        }

        return $this->assetSlot;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAssetSlot()
    {
        $this->assertPropertyIsSet(self::ASSET_SLOT);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $assetUuid
     *
     * @return $this
     */
    public function setAssetUuid($assetUuid)
    {
        $this->assetUuid = $assetUuid;
        $this->modifiedProperties[self::ASSET_UUID] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getAssetUuid()
    {
        return $this->assetUuid;
    }

    /**
     * @module 
     *
     * @param string|null $assetUuid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAssetUuidOrFail($assetUuid)
    {
        if ($assetUuid === null) {
            $this->throwNullValueException(static::ASSET_UUID);
        }

        return $this->setAssetUuid($assetUuid);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAssetUuidOrFail()
    {
        if ($this->assetUuid === null) {
            $this->throwNullValueException(static::ASSET_UUID);
        }

        return $this->assetUuid;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAssetUuid()
    {
        $this->assertPropertyIsSet(self::ASSET_UUID);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $assetName
     *
     * @return $this
     */
    public function setAssetName($assetName)
    {
        $this->assetName = $assetName;
        $this->modifiedProperties[self::ASSET_NAME] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getAssetName()
    {
        return $this->assetName;
    }

    /**
     * @module 
     *
     * @param string|null $assetName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAssetNameOrFail($assetName)
    {
        if ($assetName === null) {
            $this->throwNullValueException(static::ASSET_NAME);
        }

        return $this->setAssetName($assetName);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAssetNameOrFail()
    {
        if ($this->assetName === null) {
            $this->throwNullValueException(static::ASSET_NAME);
        }

        return $this->assetName;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAssetName()
    {
        $this->assertPropertyIsSet(self::ASSET_NAME);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $assetContent
     *
     * @return $this
     */
    public function setAssetContent($assetContent)
    {
        $this->assetContent = $assetContent;
        $this->modifiedProperties[self::ASSET_CONTENT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getAssetContent()
    {
        return $this->assetContent;
    }

    /**
     * @module 
     *
     * @param string|null $assetContent
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAssetContentOrFail($assetContent)
    {
        if ($assetContent === null) {
            $this->throwNullValueException(static::ASSET_CONTENT);
        }

        return $this->setAssetContent($assetContent);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAssetContentOrFail()
    {
        if ($this->assetContent === null) {
            $this->throwNullValueException(static::ASSET_CONTENT);
        }

        return $this->assetContent;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAssetContent()
    {
        $this->assertPropertyIsSet(self::ASSET_CONTENT);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyAssetStoreEntityTransfer[] $spyAssetStores
     *
     * @return $this
     */
    public function setSpyAssetStores(ArrayObject $spyAssetStores)
    {
        $this->spyAssetStores = $spyAssetStores;
        $this->modifiedProperties[self::SPY_ASSET_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyAssetStoreEntityTransfer[]
     */
    public function getSpyAssetStores()
    {
        return $this->spyAssetStores;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyAssetStoreEntityTransfer $spyAssetStores
     *
     * @return $this
     */
    public function addSpyAssetStores(SpyAssetStoreEntityTransfer $spyAssetStores)
    {
        $this->spyAssetStores[] = $spyAssetStores;
        $this->modifiedProperties[self::SPY_ASSET_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyAssetStores()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_ASSET_STORES);

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
                case 'idAsset':
                case 'assetSlot':
                case 'assetUuid':
                case 'assetName':
                case 'assetContent':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyAssetStores':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
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
                case 'idAsset':
                case 'assetSlot':
                case 'assetUuid':
                case 'assetName':
                case 'assetContent':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyAssetStores':
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
                case 'idAsset':
                case 'assetSlot':
                case 'assetUuid':
                case 'assetName':
                case 'assetContent':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyAssetStores':
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
        $this->spyAssetStores = $this->spyAssetStores ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idAsset' => $this->idAsset,
            'assetSlot' => $this->assetSlot,
            'assetUuid' => $this->assetUuid,
            'assetName' => $this->assetName,
            'assetContent' => $this->assetContent,
            'spyAssetStores' => $this->spyAssetStores,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_asset' => $this->idAsset,
            'asset_slot' => $this->assetSlot,
            'asset_uuid' => $this->assetUuid,
            'asset_name' => $this->assetName,
            'asset_content' => $this->assetContent,
            'spy_asset_stores' => $this->spyAssetStores,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_asset' => $this->idAsset instanceof AbstractTransfer ? $this->idAsset->toArray(true, false) : $this->idAsset,
            'asset_slot' => $this->assetSlot instanceof AbstractTransfer ? $this->assetSlot->toArray(true, false) : $this->assetSlot,
            'asset_uuid' => $this->assetUuid instanceof AbstractTransfer ? $this->assetUuid->toArray(true, false) : $this->assetUuid,
            'asset_name' => $this->assetName instanceof AbstractTransfer ? $this->assetName->toArray(true, false) : $this->assetName,
            'asset_content' => $this->assetContent instanceof AbstractTransfer ? $this->assetContent->toArray(true, false) : $this->assetContent,
            'spy_asset_stores' => $this->spyAssetStores instanceof AbstractTransfer ? $this->spyAssetStores->toArray(true, false) : $this->addValuesToCollection($this->spyAssetStores, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idAsset' => $this->idAsset instanceof AbstractTransfer ? $this->idAsset->toArray(true, true) : $this->idAsset,
            'assetSlot' => $this->assetSlot instanceof AbstractTransfer ? $this->assetSlot->toArray(true, true) : $this->assetSlot,
            'assetUuid' => $this->assetUuid instanceof AbstractTransfer ? $this->assetUuid->toArray(true, true) : $this->assetUuid,
            'assetName' => $this->assetName instanceof AbstractTransfer ? $this->assetName->toArray(true, true) : $this->assetName,
            'assetContent' => $this->assetContent instanceof AbstractTransfer ? $this->assetContent->toArray(true, true) : $this->assetContent,
            'spyAssetStores' => $this->spyAssetStores instanceof AbstractTransfer ? $this->spyAssetStores->toArray(true, true) : $this->addValuesToCollection($this->spyAssetStores, true, true),
        ];
    }
}
