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
class AssetTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_ASSET = 'idAsset';

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
    public const ASSET_SLOT = 'assetSlot';

    /**
     * @var string
     */
    public const ASSET_CONTENT = 'assetContent';

    /**
     * @var string
     */
    public const STORES = 'stores';

    /**
     * @var int|null
     */
    protected $idAsset;

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
    protected $assetSlot;

    /**
     * @var string|null
     */
    protected $assetContent;

    /**
     * @var string[]
     */
    protected $stores = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_asset' => 'idAsset',
        'idAsset' => 'idAsset',
        'IdAsset' => 'idAsset',
        'asset_uuid' => 'assetUuid',
        'assetUuid' => 'assetUuid',
        'AssetUuid' => 'assetUuid',
        'asset_name' => 'assetName',
        'assetName' => 'assetName',
        'AssetName' => 'assetName',
        'asset_slot' => 'assetSlot',
        'assetSlot' => 'assetSlot',
        'AssetSlot' => 'assetSlot',
        'asset_content' => 'assetContent',
        'assetContent' => 'assetContent',
        'AssetContent' => 'assetContent',
        'stores' => 'stores',
        'Stores' => 'stores',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_ASSET => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_asset',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
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
            'is_strict' => true,
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
            'is_strict' => true,
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
            'is_strict' => true,
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
            'is_strict' => true,
        ],
        self::STORES => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'stores',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
    ];

    /**
     * @module AssetStorage|Asset
     *
     * @param int|null $idAsset
     *
     * @return $this
     */
    public function setIdAsset(?int $idAsset = null)
    {
        $this->idAsset = $idAsset;
        $this->modifiedProperties[self::ID_ASSET] = true;

        return $this;
    }

    /**
     * @module AssetStorage|Asset
     *
     * @return int|null
     */
    public function getIdAsset(): ?int
    {
        return $this->idAsset;
    }

    /**
     * @module AssetStorage|Asset
     *
     * @param int $idAsset
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdAssetOrFail(int $idAsset)
    {
        return $this->setIdAsset($idAsset);
    }

    /**
     * @module AssetStorage|Asset
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdAssetOrFail(): int
    {
        if ($this->idAsset === null) {
            $this->throwNullValueException(static::ID_ASSET);
        }

        return $this->idAsset;
    }

    /**
     * @module AssetStorage|Asset
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
     * @module AssetStorage|Asset
     *
     * @param string|null $assetUuid
     *
     * @return $this
     */
    public function setAssetUuid(?string $assetUuid = null)
    {
        $this->assetUuid = $assetUuid;
        $this->modifiedProperties[self::ASSET_UUID] = true;

        return $this;
    }

    /**
     * @module AssetStorage|Asset
     *
     * @return string|null
     */
    public function getAssetUuid(): ?string
    {
        return $this->assetUuid;
    }

    /**
     * @module AssetStorage|Asset
     *
     * @param string $assetUuid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAssetUuidOrFail(string $assetUuid)
    {
        return $this->setAssetUuid($assetUuid);
    }

    /**
     * @module AssetStorage|Asset
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAssetUuidOrFail(): string
    {
        if ($this->assetUuid === null) {
            $this->throwNullValueException(static::ASSET_UUID);
        }

        return $this->assetUuid;
    }

    /**
     * @module AssetStorage|Asset
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
     * @module AssetStorage|Asset
     *
     * @param string|null $assetName
     *
     * @return $this
     */
    public function setAssetName(?string $assetName = null)
    {
        $this->assetName = $assetName;
        $this->modifiedProperties[self::ASSET_NAME] = true;

        return $this;
    }

    /**
     * @module AssetStorage|Asset
     *
     * @return string|null
     */
    public function getAssetName(): ?string
    {
        return $this->assetName;
    }

    /**
     * @module AssetStorage|Asset
     *
     * @param string $assetName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAssetNameOrFail(string $assetName)
    {
        return $this->setAssetName($assetName);
    }

    /**
     * @module AssetStorage|Asset
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAssetNameOrFail(): string
    {
        if ($this->assetName === null) {
            $this->throwNullValueException(static::ASSET_NAME);
        }

        return $this->assetName;
    }

    /**
     * @module AssetStorage|Asset
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
     * @module AssetStorage|Asset
     *
     * @param string|null $assetSlot
     *
     * @return $this
     */
    public function setAssetSlot(?string $assetSlot = null)
    {
        $this->assetSlot = $assetSlot;
        $this->modifiedProperties[self::ASSET_SLOT] = true;

        return $this;
    }

    /**
     * @module AssetStorage|Asset
     *
     * @return string|null
     */
    public function getAssetSlot(): ?string
    {
        return $this->assetSlot;
    }

    /**
     * @module AssetStorage|Asset
     *
     * @param string $assetSlot
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAssetSlotOrFail(string $assetSlot)
    {
        return $this->setAssetSlot($assetSlot);
    }

    /**
     * @module AssetStorage|Asset
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAssetSlotOrFail(): string
    {
        if ($this->assetSlot === null) {
            $this->throwNullValueException(static::ASSET_SLOT);
        }

        return $this->assetSlot;
    }

    /**
     * @module AssetStorage|Asset
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
     * @module AssetStorage|Asset
     *
     * @param string|null $assetContent
     *
     * @return $this
     */
    public function setAssetContent(?string $assetContent = null)
    {
        $this->assetContent = $assetContent;
        $this->modifiedProperties[self::ASSET_CONTENT] = true;

        return $this;
    }

    /**
     * @module AssetStorage|Asset
     *
     * @return string|null
     */
    public function getAssetContent(): ?string
    {
        return $this->assetContent;
    }

    /**
     * @module AssetStorage|Asset
     *
     * @param string $assetContent
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAssetContentOrFail(string $assetContent)
    {
        return $this->setAssetContent($assetContent);
    }

    /**
     * @module AssetStorage|Asset
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAssetContentOrFail(): string
    {
        if ($this->assetContent === null) {
            $this->throwNullValueException(static::ASSET_CONTENT);
        }

        return $this->assetContent;
    }

    /**
     * @module AssetStorage|Asset
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
     * @module AssetStorage|Asset
     *
     * @param string[]|null $stores
     *
     * @return $this
     */
    public function setStores(array $stores = null)
    {
        if ($stores === null) {
            $stores = [];
        }

        $this->stores = [];

        foreach ($stores as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::STORES]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addStore(...$args);
        }

        $this->modifiedProperties[self::STORES] = true;

        return $this;
    }

    /**
     * @module AssetStorage|Asset
     *
     * @return string[]
     */
    public function getStores(): array
    {
        return $this->stores;
    }

    /**
     * @module AssetStorage|Asset
     *
     * @param string $store
     *
     * @return $this
     */
    public function addStore(string $store)
    {
        $this->stores[] = $store;
        $this->modifiedProperties[self::STORES] = true;

        return $this;
    }

    /**
     * @module AssetStorage|Asset
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStores()
    {
        $this->assertPropertyIsSet(self::STORES);

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
                case 'assetUuid':
                case 'assetName':
                case 'assetSlot':
                case 'assetContent':
                case 'stores':
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
                case 'idAsset':
                case 'assetUuid':
                case 'assetName':
                case 'assetSlot':
                case 'assetContent':
                case 'stores':
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
                case 'idAsset':
                case 'assetUuid':
                case 'assetName':
                case 'assetSlot':
                case 'assetContent':
                case 'stores':
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
            'idAsset' => $this->idAsset,
            'assetUuid' => $this->assetUuid,
            'assetName' => $this->assetName,
            'assetSlot' => $this->assetSlot,
            'assetContent' => $this->assetContent,
            'stores' => $this->stores,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_asset' => $this->idAsset,
            'asset_uuid' => $this->assetUuid,
            'asset_name' => $this->assetName,
            'asset_slot' => $this->assetSlot,
            'asset_content' => $this->assetContent,
            'stores' => $this->stores,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_asset' => $this->idAsset instanceof AbstractTransfer ? $this->idAsset->toArray(true, false) : $this->idAsset,
            'asset_uuid' => $this->assetUuid instanceof AbstractTransfer ? $this->assetUuid->toArray(true, false) : $this->assetUuid,
            'asset_name' => $this->assetName instanceof AbstractTransfer ? $this->assetName->toArray(true, false) : $this->assetName,
            'asset_slot' => $this->assetSlot instanceof AbstractTransfer ? $this->assetSlot->toArray(true, false) : $this->assetSlot,
            'asset_content' => $this->assetContent instanceof AbstractTransfer ? $this->assetContent->toArray(true, false) : $this->assetContent,
            'stores' => $this->stores instanceof AbstractTransfer ? $this->stores->toArray(true, false) : $this->stores,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idAsset' => $this->idAsset instanceof AbstractTransfer ? $this->idAsset->toArray(true, true) : $this->idAsset,
            'assetUuid' => $this->assetUuid instanceof AbstractTransfer ? $this->assetUuid->toArray(true, true) : $this->assetUuid,
            'assetName' => $this->assetName instanceof AbstractTransfer ? $this->assetName->toArray(true, true) : $this->assetName,
            'assetSlot' => $this->assetSlot instanceof AbstractTransfer ? $this->assetSlot->toArray(true, true) : $this->assetSlot,
            'assetContent' => $this->assetContent instanceof AbstractTransfer ? $this->assetContent->toArray(true, true) : $this->assetContent,
            'stores' => $this->stores instanceof AbstractTransfer ? $this->stores->toArray(true, true) : $this->stores,
        ];
    }
}
