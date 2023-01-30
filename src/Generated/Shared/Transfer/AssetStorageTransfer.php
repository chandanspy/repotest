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
class AssetStorageTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ASSET_CONTENT = 'assetContent';

    /**
     * @deprecated Use assetId instead.
     */
    public const ID_ASSET = 'idAsset';

    /**
     * @var string
     */
    public const ASSET_ID = 'assetId';

    /**
     * @var string
     */
    public const ASSET_UUID = 'assetUuid';

    /**
     * @deprecated Will be removed in next major.
     */
    public const STORE_NAME = 'storeName';

    /**
     * @deprecated Will be removed in next major.
     */
    public const ASSET_SLOT = 'assetSlot';

    /**
     * @var string|null
     */
    protected $assetContent;

    /**
     * @var int|null
     */
    protected $idAsset;

    /**
     * @var int|null
     */
    protected $assetId;

    /**
     * @var string|null
     */
    protected $assetUuid;

    /**
     * @var string|null
     */
    protected $storeName;

    /**
     * @var string|null
     */
    protected $assetSlot;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'asset_content' => 'assetContent',
        'assetContent' => 'assetContent',
        'AssetContent' => 'assetContent',
        'id_asset' => 'idAsset',
        'idAsset' => 'idAsset',
        'IdAsset' => 'idAsset',
        'asset_id' => 'assetId',
        'assetId' => 'assetId',
        'AssetId' => 'assetId',
        'asset_uuid' => 'assetUuid',
        'assetUuid' => 'assetUuid',
        'AssetUuid' => 'assetUuid',
        'store_name' => 'storeName',
        'storeName' => 'storeName',
        'StoreName' => 'storeName',
        'asset_slot' => 'assetSlot',
        'assetSlot' => 'assetSlot',
        'AssetSlot' => 'assetSlot',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::ASSET_ID => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'asset_id',
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
        self::STORE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'store_name',
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
    ];

    /**
     * @module AssetWidget|AssetStorage
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
     * @module AssetWidget|AssetStorage
     *
     * @return string|null
     */
    public function getAssetContent(): ?string
    {
        return $this->assetContent;
    }

    /**
     * @module AssetWidget|AssetStorage
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
     * @module AssetWidget|AssetStorage
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
     * @module AssetWidget|AssetStorage
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
     * @module AssetStorage
     *
     * @deprecated Use assetId instead.
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
     * @module AssetStorage
     *
     * @deprecated Use assetId instead.
     *
     * @return int|null
     */
    public function getIdAsset(): ?int
    {
        return $this->idAsset;
    }

    /**
     * @module AssetStorage
     *
     * @deprecated Use assetId instead.
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
     * @module AssetStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use assetId instead.
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
     * @module AssetStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use assetId instead.
     *
     * @return $this
     */
    public function requireIdAsset()
    {
        $this->assertPropertyIsSet(self::ID_ASSET);

        return $this;
    }

    /**
     * @module AssetStorage
     *
     * @param int|null $assetId
     *
     * @return $this
     */
    public function setAssetId(?int $assetId = null)
    {
        $this->assetId = $assetId;
        $this->modifiedProperties[self::ASSET_ID] = true;

        return $this;
    }

    /**
     * @module AssetStorage
     *
     * @return int|null
     */
    public function getAssetId(): ?int
    {
        return $this->assetId;
    }

    /**
     * @module AssetStorage
     *
     * @param int $assetId
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAssetIdOrFail(int $assetId)
    {
        return $this->setAssetId($assetId);
    }

    /**
     * @module AssetStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getAssetIdOrFail(): int
    {
        if ($this->assetId === null) {
            $this->throwNullValueException(static::ASSET_ID);
        }

        return $this->assetId;
    }

    /**
     * @module AssetStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAssetId()
    {
        $this->assertPropertyIsSet(self::ASSET_ID);

        return $this;
    }

    /**
     * @module AssetStorage
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
     * @module AssetStorage
     *
     * @return string|null
     */
    public function getAssetUuid(): ?string
    {
        return $this->assetUuid;
    }

    /**
     * @module AssetStorage
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
     * @module AssetStorage
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
     * @module AssetStorage
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
     * @module AssetStorage
     *
     * @deprecated Will be removed in next major.
     *
     * @param string|null $storeName
     *
     * @return $this
     */
    public function setStoreName(?string $storeName = null)
    {
        $this->storeName = $storeName;
        $this->modifiedProperties[self::STORE_NAME] = true;

        return $this;
    }

    /**
     * @module AssetStorage
     *
     * @deprecated Will be removed in next major.
     *
     * @return string|null
     */
    public function getStoreName(): ?string
    {
        return $this->storeName;
    }

    /**
     * @module AssetStorage
     *
     * @deprecated Will be removed in next major.
     *
     * @param string $storeName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreNameOrFail(string $storeName)
    {
        return $this->setStoreName($storeName);
    }

    /**
     * @module AssetStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Will be removed in next major.
     *
     * @return string
     */
    public function getStoreNameOrFail(): string
    {
        if ($this->storeName === null) {
            $this->throwNullValueException(static::STORE_NAME);
        }

        return $this->storeName;
    }

    /**
     * @module AssetStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Will be removed in next major.
     *
     * @return $this
     */
    public function requireStoreName()
    {
        $this->assertPropertyIsSet(self::STORE_NAME);

        return $this;
    }

    /**
     * @module AssetStorage
     *
     * @deprecated Will be removed in next major.
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
     * @module AssetStorage
     *
     * @deprecated Will be removed in next major.
     *
     * @return string|null
     */
    public function getAssetSlot(): ?string
    {
        return $this->assetSlot;
    }

    /**
     * @module AssetStorage
     *
     * @deprecated Will be removed in next major.
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
     * @module AssetStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Will be removed in next major.
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
     * @module AssetStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Will be removed in next major.
     *
     * @return $this
     */
    public function requireAssetSlot()
    {
        $this->assertPropertyIsSet(self::ASSET_SLOT);

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
                case 'assetContent':
                case 'idAsset':
                case 'assetId':
                case 'assetUuid':
                case 'storeName':
                case 'assetSlot':
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
                case 'assetContent':
                case 'idAsset':
                case 'assetId':
                case 'assetUuid':
                case 'storeName':
                case 'assetSlot':
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
                case 'assetContent':
                case 'idAsset':
                case 'assetId':
                case 'assetUuid':
                case 'storeName':
                case 'assetSlot':
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
            'assetContent' => $this->assetContent,
            'idAsset' => $this->idAsset,
            'assetId' => $this->assetId,
            'assetUuid' => $this->assetUuid,
            'storeName' => $this->storeName,
            'assetSlot' => $this->assetSlot,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'asset_content' => $this->assetContent,
            'id_asset' => $this->idAsset,
            'asset_id' => $this->assetId,
            'asset_uuid' => $this->assetUuid,
            'store_name' => $this->storeName,
            'asset_slot' => $this->assetSlot,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'asset_content' => $this->assetContent instanceof AbstractTransfer ? $this->assetContent->toArray(true, false) : $this->assetContent,
            'id_asset' => $this->idAsset instanceof AbstractTransfer ? $this->idAsset->toArray(true, false) : $this->idAsset,
            'asset_id' => $this->assetId instanceof AbstractTransfer ? $this->assetId->toArray(true, false) : $this->assetId,
            'asset_uuid' => $this->assetUuid instanceof AbstractTransfer ? $this->assetUuid->toArray(true, false) : $this->assetUuid,
            'store_name' => $this->storeName instanceof AbstractTransfer ? $this->storeName->toArray(true, false) : $this->storeName,
            'asset_slot' => $this->assetSlot instanceof AbstractTransfer ? $this->assetSlot->toArray(true, false) : $this->assetSlot,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'assetContent' => $this->assetContent instanceof AbstractTransfer ? $this->assetContent->toArray(true, true) : $this->assetContent,
            'idAsset' => $this->idAsset instanceof AbstractTransfer ? $this->idAsset->toArray(true, true) : $this->idAsset,
            'assetId' => $this->assetId instanceof AbstractTransfer ? $this->assetId->toArray(true, true) : $this->assetId,
            'assetUuid' => $this->assetUuid instanceof AbstractTransfer ? $this->assetUuid->toArray(true, true) : $this->assetUuid,
            'storeName' => $this->storeName instanceof AbstractTransfer ? $this->storeName->toArray(true, true) : $this->storeName,
            'assetSlot' => $this->assetSlot instanceof AbstractTransfer ? $this->assetSlot->toArray(true, true) : $this->assetSlot,
        ];
    }
}
