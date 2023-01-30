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
class AssetUpdatedTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ASSET_IDENTIFIER = 'assetIdentifier';

    /**
     * @var string
     */
    public const ASSET_NAME = 'assetName';

    /**
     * @var string
     */
    public const ASSET_VIEW = 'assetView';

    /**
     * @var string
     */
    public const ASSET_SLOT = 'assetSlot';

    /**
     * @var string
     */
    public const MESSAGE_ATTRIBUTES = 'messageAttributes';

    /**
     * @var string|null
     */
    protected $assetIdentifier;

    /**
     * @var string|null
     */
    protected $assetName;

    /**
     * @var string|null
     */
    protected $assetView;

    /**
     * @var string|null
     */
    protected $assetSlot;

    /**
     * @var \Generated\Shared\Transfer\MessageAttributesTransfer|null
     */
    protected $messageAttributes;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'asset_identifier' => 'assetIdentifier',
        'assetIdentifier' => 'assetIdentifier',
        'AssetIdentifier' => 'assetIdentifier',
        'asset_name' => 'assetName',
        'assetName' => 'assetName',
        'AssetName' => 'assetName',
        'asset_view' => 'assetView',
        'assetView' => 'assetView',
        'AssetView' => 'assetView',
        'asset_slot' => 'assetSlot',
        'assetSlot' => 'assetSlot',
        'AssetSlot' => 'assetSlot',
        'message_attributes' => 'messageAttributes',
        'messageAttributes' => 'messageAttributes',
        'MessageAttributes' => 'messageAttributes',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ASSET_IDENTIFIER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'asset_identifier',
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
        self::ASSET_VIEW => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'asset_view',
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
        self::MESSAGE_ATTRIBUTES => [
            'type' => 'Generated\Shared\Transfer\MessageAttributesTransfer',
            'type_shim' => null,
            'name_underscore' => 'message_attributes',
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
     * @module Asset
     *
     * @param string|null $assetIdentifier
     *
     * @return $this
     */
    public function setAssetIdentifier($assetIdentifier)
    {
        $this->assetIdentifier = $assetIdentifier;
        $this->modifiedProperties[self::ASSET_IDENTIFIER] = true;

        return $this;
    }

    /**
     * @module Asset
     *
     * @return string|null
     */
    public function getAssetIdentifier()
    {
        return $this->assetIdentifier;
    }

    /**
     * @module Asset
     *
     * @param string|null $assetIdentifier
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAssetIdentifierOrFail($assetIdentifier)
    {
        if ($assetIdentifier === null) {
            $this->throwNullValueException(static::ASSET_IDENTIFIER);
        }

        return $this->setAssetIdentifier($assetIdentifier);
    }

    /**
     * @module Asset
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAssetIdentifierOrFail()
    {
        if ($this->assetIdentifier === null) {
            $this->throwNullValueException(static::ASSET_IDENTIFIER);
        }

        return $this->assetIdentifier;
    }

    /**
     * @module Asset
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAssetIdentifier()
    {
        $this->assertPropertyIsSet(self::ASSET_IDENTIFIER);

        return $this;
    }

    /**
     * @module Asset
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
     * @module Asset
     *
     * @return string|null
     */
    public function getAssetName()
    {
        return $this->assetName;
    }

    /**
     * @module Asset
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
     * @module Asset
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
     * @module Asset
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
     * @module Asset
     *
     * @param string|null $assetView
     *
     * @return $this
     */
    public function setAssetView($assetView)
    {
        $this->assetView = $assetView;
        $this->modifiedProperties[self::ASSET_VIEW] = true;

        return $this;
    }

    /**
     * @module Asset
     *
     * @return string|null
     */
    public function getAssetView()
    {
        return $this->assetView;
    }

    /**
     * @module Asset
     *
     * @param string|null $assetView
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAssetViewOrFail($assetView)
    {
        if ($assetView === null) {
            $this->throwNullValueException(static::ASSET_VIEW);
        }

        return $this->setAssetView($assetView);
    }

    /**
     * @module Asset
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAssetViewOrFail()
    {
        if ($this->assetView === null) {
            $this->throwNullValueException(static::ASSET_VIEW);
        }

        return $this->assetView;
    }

    /**
     * @module Asset
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAssetView()
    {
        $this->assertPropertyIsSet(self::ASSET_VIEW);

        return $this;
    }

    /**
     * @module Asset
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
     * @module Asset
     *
     * @return string|null
     */
    public function getAssetSlot()
    {
        return $this->assetSlot;
    }

    /**
     * @module Asset
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
     * @module Asset
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
     * @module Asset
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
     * @module Asset
     *
     * @param \Generated\Shared\Transfer\MessageAttributesTransfer|null $messageAttributes
     *
     * @return $this
     */
    public function setMessageAttributes(MessageAttributesTransfer $messageAttributes = null)
    {
        $this->messageAttributes = $messageAttributes;
        $this->modifiedProperties[self::MESSAGE_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module Asset
     *
     * @return \Generated\Shared\Transfer\MessageAttributesTransfer|null
     */
    public function getMessageAttributes()
    {
        return $this->messageAttributes;
    }

    /**
     * @module Asset
     *
     * @param \Generated\Shared\Transfer\MessageAttributesTransfer $messageAttributes
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMessageAttributesOrFail(MessageAttributesTransfer $messageAttributes)
    {
        return $this->setMessageAttributes($messageAttributes);
    }

    /**
     * @module Asset
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\MessageAttributesTransfer
     */
    public function getMessageAttributesOrFail()
    {
        if ($this->messageAttributes === null) {
            $this->throwNullValueException(static::MESSAGE_ATTRIBUTES);
        }

        return $this->messageAttributes;
    }

    /**
     * @module Asset
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMessageAttributes()
    {
        $this->assertPropertyIsSet(self::MESSAGE_ATTRIBUTES);

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
                case 'assetIdentifier':
                case 'assetName':
                case 'assetView':
                case 'assetSlot':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'messageAttributes':
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
                case 'assetIdentifier':
                case 'assetName':
                case 'assetView':
                case 'assetSlot':
                    $values[$arrayKey] = $value;

                    break;
                case 'messageAttributes':
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
                case 'assetIdentifier':
                case 'assetName':
                case 'assetView':
                case 'assetSlot':
                    $values[$arrayKey] = $value;

                    break;
                case 'messageAttributes':
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
            'assetIdentifier' => $this->assetIdentifier,
            'assetName' => $this->assetName,
            'assetView' => $this->assetView,
            'assetSlot' => $this->assetSlot,
            'messageAttributes' => $this->messageAttributes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'asset_identifier' => $this->assetIdentifier,
            'asset_name' => $this->assetName,
            'asset_view' => $this->assetView,
            'asset_slot' => $this->assetSlot,
            'message_attributes' => $this->messageAttributes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'asset_identifier' => $this->assetIdentifier instanceof AbstractTransfer ? $this->assetIdentifier->toArray(true, false) : $this->assetIdentifier,
            'asset_name' => $this->assetName instanceof AbstractTransfer ? $this->assetName->toArray(true, false) : $this->assetName,
            'asset_view' => $this->assetView instanceof AbstractTransfer ? $this->assetView->toArray(true, false) : $this->assetView,
            'asset_slot' => $this->assetSlot instanceof AbstractTransfer ? $this->assetSlot->toArray(true, false) : $this->assetSlot,
            'message_attributes' => $this->messageAttributes instanceof AbstractTransfer ? $this->messageAttributes->toArray(true, false) : $this->messageAttributes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'assetIdentifier' => $this->assetIdentifier instanceof AbstractTransfer ? $this->assetIdentifier->toArray(true, true) : $this->assetIdentifier,
            'assetName' => $this->assetName instanceof AbstractTransfer ? $this->assetName->toArray(true, true) : $this->assetName,
            'assetView' => $this->assetView instanceof AbstractTransfer ? $this->assetView->toArray(true, true) : $this->assetView,
            'assetSlot' => $this->assetSlot instanceof AbstractTransfer ? $this->assetSlot->toArray(true, true) : $this->assetSlot,
            'messageAttributes' => $this->messageAttributes instanceof AbstractTransfer ? $this->messageAttributes->toArray(true, true) : $this->messageAttributes,
        ];
    }
}
