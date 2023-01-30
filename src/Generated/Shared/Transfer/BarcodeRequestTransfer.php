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
class BarcodeRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const TEXT = 'text';

    /**
     * @var string
     */
    public const BARCODE_TYPE = 'barcodeType';

    /**
     * @var string
     */
    public const RENDERER = 'renderer';

    /**
     * @var string
     */
    public const BARCODE_OPTIONS = 'barcodeOptions';

    /**
     * @var string|null
     */
    protected $text;

    /**
     * @var string|null
     */
    protected $barcodeType;

    /**
     * @var string|null
     */
    protected $renderer;

    /**
     * @var array
     */
    protected $barcodeOptions = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'text' => 'text',
        'Text' => 'text',
        'barcode_type' => 'barcodeType',
        'barcodeType' => 'barcodeType',
        'BarcodeType' => 'barcodeType',
        'renderer' => 'renderer',
        'Renderer' => 'renderer',
        'barcode_options' => 'barcodeOptions',
        'barcodeOptions' => 'barcodeOptions',
        'BarcodeOptions' => 'barcodeOptions',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::TEXT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'text',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::BARCODE_TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'barcode_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::RENDERER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'renderer',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::BARCODE_OPTIONS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'barcode_options',
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
     * @module BarcodeLaminas
     *
     * @param string|null $text
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->text = $text;
        $this->modifiedProperties[self::TEXT] = true;

        return $this;
    }

    /**
     * @module BarcodeLaminas
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @module BarcodeLaminas
     *
     * @param string|null $text
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTextOrFail($text)
    {
        if ($text === null) {
            $this->throwNullValueException(static::TEXT);
        }

        return $this->setText($text);
    }

    /**
     * @module BarcodeLaminas
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTextOrFail()
    {
        if ($this->text === null) {
            $this->throwNullValueException(static::TEXT);
        }

        return $this->text;
    }

    /**
     * @module BarcodeLaminas
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireText()
    {
        $this->assertPropertyIsSet(self::TEXT);

        return $this;
    }

    /**
     * @module BarcodeLaminas
     *
     * @param string|null $barcodeType
     *
     * @return $this
     */
    public function setBarcodeType($barcodeType)
    {
        $this->barcodeType = $barcodeType;
        $this->modifiedProperties[self::BARCODE_TYPE] = true;

        return $this;
    }

    /**
     * @module BarcodeLaminas
     *
     * @return string|null
     */
    public function getBarcodeType()
    {
        return $this->barcodeType;
    }

    /**
     * @module BarcodeLaminas
     *
     * @param string|null $barcodeType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setBarcodeTypeOrFail($barcodeType)
    {
        if ($barcodeType === null) {
            $this->throwNullValueException(static::BARCODE_TYPE);
        }

        return $this->setBarcodeType($barcodeType);
    }

    /**
     * @module BarcodeLaminas
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getBarcodeTypeOrFail()
    {
        if ($this->barcodeType === null) {
            $this->throwNullValueException(static::BARCODE_TYPE);
        }

        return $this->barcodeType;
    }

    /**
     * @module BarcodeLaminas
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireBarcodeType()
    {
        $this->assertPropertyIsSet(self::BARCODE_TYPE);

        return $this;
    }

    /**
     * @module BarcodeLaminas
     *
     * @param string|null $renderer
     *
     * @return $this
     */
    public function setRenderer($renderer)
    {
        $this->renderer = $renderer;
        $this->modifiedProperties[self::RENDERER] = true;

        return $this;
    }

    /**
     * @module BarcodeLaminas
     *
     * @return string|null
     */
    public function getRenderer()
    {
        return $this->renderer;
    }

    /**
     * @module BarcodeLaminas
     *
     * @param string|null $renderer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRendererOrFail($renderer)
    {
        if ($renderer === null) {
            $this->throwNullValueException(static::RENDERER);
        }

        return $this->setRenderer($renderer);
    }

    /**
     * @module BarcodeLaminas
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRendererOrFail()
    {
        if ($this->renderer === null) {
            $this->throwNullValueException(static::RENDERER);
        }

        return $this->renderer;
    }

    /**
     * @module BarcodeLaminas
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRenderer()
    {
        $this->assertPropertyIsSet(self::RENDERER);

        return $this;
    }

    /**
     * @module BarcodeLaminas
     *
     * @param array|null $barcodeOptions
     *
     * @return $this
     */
    public function setBarcodeOptions(array $barcodeOptions = null)
    {
        if ($barcodeOptions === null) {
            $barcodeOptions = [];
        }

        $this->barcodeOptions = $barcodeOptions;
        $this->modifiedProperties[self::BARCODE_OPTIONS] = true;

        return $this;
    }

    /**
     * @module BarcodeLaminas
     *
     * @return array
     */
    public function getBarcodeOptions()
    {
        return $this->barcodeOptions;
    }

    /**
     * @module BarcodeLaminas
     *
     * @param mixed $barcodeOption
     *
     * @return $this
     */
    public function addBarcodeOption($barcodeOption)
    {
        $this->barcodeOptions[] = $barcodeOption;
        $this->modifiedProperties[self::BARCODE_OPTIONS] = true;

        return $this;
    }

    /**
     * @module BarcodeLaminas
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireBarcodeOptions()
    {
        $this->assertPropertyIsSet(self::BARCODE_OPTIONS);

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
                case 'text':
                case 'barcodeType':
                case 'renderer':
                case 'barcodeOptions':
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
                case 'text':
                case 'barcodeType':
                case 'renderer':
                case 'barcodeOptions':
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
                case 'text':
                case 'barcodeType':
                case 'renderer':
                case 'barcodeOptions':
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
            'text' => $this->text,
            'barcodeType' => $this->barcodeType,
            'renderer' => $this->renderer,
            'barcodeOptions' => $this->barcodeOptions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'text' => $this->text,
            'barcode_type' => $this->barcodeType,
            'renderer' => $this->renderer,
            'barcode_options' => $this->barcodeOptions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'text' => $this->text instanceof AbstractTransfer ? $this->text->toArray(true, false) : $this->text,
            'barcode_type' => $this->barcodeType instanceof AbstractTransfer ? $this->barcodeType->toArray(true, false) : $this->barcodeType,
            'renderer' => $this->renderer instanceof AbstractTransfer ? $this->renderer->toArray(true, false) : $this->renderer,
            'barcode_options' => $this->barcodeOptions instanceof AbstractTransfer ? $this->barcodeOptions->toArray(true, false) : $this->barcodeOptions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'text' => $this->text instanceof AbstractTransfer ? $this->text->toArray(true, true) : $this->text,
            'barcodeType' => $this->barcodeType instanceof AbstractTransfer ? $this->barcodeType->toArray(true, true) : $this->barcodeType,
            'renderer' => $this->renderer instanceof AbstractTransfer ? $this->renderer->toArray(true, true) : $this->renderer,
            'barcodeOptions' => $this->barcodeOptions instanceof AbstractTransfer ? $this->barcodeOptions->toArray(true, true) : $this->barcodeOptions,
        ];
    }
}
