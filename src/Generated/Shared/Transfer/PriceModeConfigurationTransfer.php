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
class PriceModeConfigurationTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const CURRENT_PRICE_MODE = 'currentPriceMode';

    /**
     * @var string
     */
    public const GROSS_MODE_IDENTIFIER = 'grossModeIdentifier';

    /**
     * @var string
     */
    public const NET_MODE_IDENTIFIER = 'netModeIdentifier';

    /**
     * @var string|null
     */
    protected $currentPriceMode;

    /**
     * @var string|null
     */
    protected $grossModeIdentifier;

    /**
     * @var string|null
     */
    protected $netModeIdentifier;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'current_price_mode' => 'currentPriceMode',
        'currentPriceMode' => 'currentPriceMode',
        'CurrentPriceMode' => 'currentPriceMode',
        'gross_mode_identifier' => 'grossModeIdentifier',
        'grossModeIdentifier' => 'grossModeIdentifier',
        'GrossModeIdentifier' => 'grossModeIdentifier',
        'net_mode_identifier' => 'netModeIdentifier',
        'netModeIdentifier' => 'netModeIdentifier',
        'NetModeIdentifier' => 'netModeIdentifier',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::CURRENT_PRICE_MODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'current_price_mode',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::GROSS_MODE_IDENTIFIER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'gross_mode_identifier',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NET_MODE_IDENTIFIER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'net_mode_identifier',
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
     * @module CatalogSearchRestApi
     *
     * @param string|null $currentPriceMode
     *
     * @return $this
     */
    public function setCurrentPriceMode($currentPriceMode)
    {
        $this->currentPriceMode = $currentPriceMode;
        $this->modifiedProperties[self::CURRENT_PRICE_MODE] = true;

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @return string|null
     */
    public function getCurrentPriceMode()
    {
        return $this->currentPriceMode;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @param string|null $currentPriceMode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCurrentPriceModeOrFail($currentPriceMode)
    {
        if ($currentPriceMode === null) {
            $this->throwNullValueException(static::CURRENT_PRICE_MODE);
        }

        return $this->setCurrentPriceMode($currentPriceMode);
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCurrentPriceModeOrFail()
    {
        if ($this->currentPriceMode === null) {
            $this->throwNullValueException(static::CURRENT_PRICE_MODE);
        }

        return $this->currentPriceMode;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCurrentPriceMode()
    {
        $this->assertPropertyIsSet(self::CURRENT_PRICE_MODE);

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @param string|null $grossModeIdentifier
     *
     * @return $this
     */
    public function setGrossModeIdentifier($grossModeIdentifier)
    {
        $this->grossModeIdentifier = $grossModeIdentifier;
        $this->modifiedProperties[self::GROSS_MODE_IDENTIFIER] = true;

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @return string|null
     */
    public function getGrossModeIdentifier()
    {
        return $this->grossModeIdentifier;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @param string|null $grossModeIdentifier
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setGrossModeIdentifierOrFail($grossModeIdentifier)
    {
        if ($grossModeIdentifier === null) {
            $this->throwNullValueException(static::GROSS_MODE_IDENTIFIER);
        }

        return $this->setGrossModeIdentifier($grossModeIdentifier);
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getGrossModeIdentifierOrFail()
    {
        if ($this->grossModeIdentifier === null) {
            $this->throwNullValueException(static::GROSS_MODE_IDENTIFIER);
        }

        return $this->grossModeIdentifier;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireGrossModeIdentifier()
    {
        $this->assertPropertyIsSet(self::GROSS_MODE_IDENTIFIER);

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @param string|null $netModeIdentifier
     *
     * @return $this
     */
    public function setNetModeIdentifier($netModeIdentifier)
    {
        $this->netModeIdentifier = $netModeIdentifier;
        $this->modifiedProperties[self::NET_MODE_IDENTIFIER] = true;

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @return string|null
     */
    public function getNetModeIdentifier()
    {
        return $this->netModeIdentifier;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @param string|null $netModeIdentifier
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNetModeIdentifierOrFail($netModeIdentifier)
    {
        if ($netModeIdentifier === null) {
            $this->throwNullValueException(static::NET_MODE_IDENTIFIER);
        }

        return $this->setNetModeIdentifier($netModeIdentifier);
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNetModeIdentifierOrFail()
    {
        if ($this->netModeIdentifier === null) {
            $this->throwNullValueException(static::NET_MODE_IDENTIFIER);
        }

        return $this->netModeIdentifier;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNetModeIdentifier()
    {
        $this->assertPropertyIsSet(self::NET_MODE_IDENTIFIER);

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
                case 'currentPriceMode':
                case 'grossModeIdentifier':
                case 'netModeIdentifier':
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
                case 'currentPriceMode':
                case 'grossModeIdentifier':
                case 'netModeIdentifier':
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
                case 'currentPriceMode':
                case 'grossModeIdentifier':
                case 'netModeIdentifier':
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
            'currentPriceMode' => $this->currentPriceMode,
            'grossModeIdentifier' => $this->grossModeIdentifier,
            'netModeIdentifier' => $this->netModeIdentifier,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'current_price_mode' => $this->currentPriceMode,
            'gross_mode_identifier' => $this->grossModeIdentifier,
            'net_mode_identifier' => $this->netModeIdentifier,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'current_price_mode' => $this->currentPriceMode instanceof AbstractTransfer ? $this->currentPriceMode->toArray(true, false) : $this->currentPriceMode,
            'gross_mode_identifier' => $this->grossModeIdentifier instanceof AbstractTransfer ? $this->grossModeIdentifier->toArray(true, false) : $this->grossModeIdentifier,
            'net_mode_identifier' => $this->netModeIdentifier instanceof AbstractTransfer ? $this->netModeIdentifier->toArray(true, false) : $this->netModeIdentifier,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'currentPriceMode' => $this->currentPriceMode instanceof AbstractTransfer ? $this->currentPriceMode->toArray(true, true) : $this->currentPriceMode,
            'grossModeIdentifier' => $this->grossModeIdentifier instanceof AbstractTransfer ? $this->grossModeIdentifier->toArray(true, true) : $this->grossModeIdentifier,
            'netModeIdentifier' => $this->netModeIdentifier instanceof AbstractTransfer ? $this->netModeIdentifier->toArray(true, true) : $this->netModeIdentifier,
        ];
    }
}
