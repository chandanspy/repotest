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
class DataExportConfigurationsTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const VERSION = 'version';

    /**
     * @var string
     */
    public const DEFAULTS = 'defaults';

    /**
     * @var string
     */
    public const ACTIONS = 'actions';

    /**
     * @var int|null
     */
    protected $version;

    /**
     * @var \Generated\Shared\Transfer\DataExportConfigurationTransfer|null
     */
    protected $defaults;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\DataExportConfigurationTransfer[]
     */
    protected $actions;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'version' => 'version',
        'Version' => 'version',
        'defaults' => 'defaults',
        'Defaults' => 'defaults',
        'actions' => 'actions',
        'Actions' => 'actions',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::VERSION => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'version',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DEFAULTS => [
            'type' => 'Generated\Shared\Transfer\DataExportConfigurationTransfer',
            'type_shim' => null,
            'name_underscore' => 'defaults',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ACTIONS => [
            'type' => 'Generated\Shared\Transfer\DataExportConfigurationTransfer',
            'type_shim' => null,
            'name_underscore' => 'actions',
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
     * @module DataExport
     *
     * @param int|null $version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        $this->modifiedProperties[self::VERSION] = true;

        return $this;
    }

    /**
     * @module DataExport
     *
     * @return int|null
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @module DataExport
     *
     * @param int|null $version
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setVersionOrFail($version)
    {
        if ($version === null) {
            $this->throwNullValueException(static::VERSION);
        }

        return $this->setVersion($version);
    }

    /**
     * @module DataExport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getVersionOrFail()
    {
        if ($this->version === null) {
            $this->throwNullValueException(static::VERSION);
        }

        return $this->version;
    }

    /**
     * @module DataExport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireVersion()
    {
        $this->assertPropertyIsSet(self::VERSION);

        return $this;
    }

    /**
     * @module DataExport|SalesDataExport
     *
     * @param \Generated\Shared\Transfer\DataExportConfigurationTransfer|null $defaults
     *
     * @return $this
     */
    public function setDefaults(DataExportConfigurationTransfer $defaults = null)
    {
        $this->defaults = $defaults;
        $this->modifiedProperties[self::DEFAULTS] = true;

        return $this;
    }

    /**
     * @module DataExport|SalesDataExport
     *
     * @return \Generated\Shared\Transfer\DataExportConfigurationTransfer|null
     */
    public function getDefaults()
    {
        return $this->defaults;
    }

    /**
     * @module DataExport|SalesDataExport
     *
     * @param \Generated\Shared\Transfer\DataExportConfigurationTransfer $defaults
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDefaultsOrFail(DataExportConfigurationTransfer $defaults)
    {
        return $this->setDefaults($defaults);
    }

    /**
     * @module DataExport|SalesDataExport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\DataExportConfigurationTransfer
     */
    public function getDefaultsOrFail()
    {
        if ($this->defaults === null) {
            $this->throwNullValueException(static::DEFAULTS);
        }

        return $this->defaults;
    }

    /**
     * @module DataExport|SalesDataExport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDefaults()
    {
        $this->assertPropertyIsSet(self::DEFAULTS);

        return $this;
    }

    /**
     * @module DataExport|SalesDataExport
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\DataExportConfigurationTransfer[] $actions
     *
     * @return $this
     */
    public function setActions(ArrayObject $actions)
    {
        $this->actions = $actions;
        $this->modifiedProperties[self::ACTIONS] = true;

        return $this;
    }

    /**
     * @module DataExport|SalesDataExport
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\DataExportConfigurationTransfer[]
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * @module DataExport|SalesDataExport
     *
     * @param \Generated\Shared\Transfer\DataExportConfigurationTransfer $action
     *
     * @return $this
     */
    public function addAction(DataExportConfigurationTransfer $action)
    {
        $this->actions[] = $action;
        $this->modifiedProperties[self::ACTIONS] = true;

        return $this;
    }

    /**
     * @module DataExport|SalesDataExport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireActions()
    {
        $this->assertCollectionPropertyIsSet(self::ACTIONS);

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
                case 'version':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'defaults':
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
                case 'actions':
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
                case 'version':
                    $values[$arrayKey] = $value;

                    break;
                case 'defaults':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'actions':
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
                case 'version':
                    $values[$arrayKey] = $value;

                    break;
                case 'defaults':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'actions':
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
        $this->actions = $this->actions ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'version' => $this->version,
            'defaults' => $this->defaults,
            'actions' => $this->actions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'version' => $this->version,
            'defaults' => $this->defaults,
            'actions' => $this->actions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'version' => $this->version instanceof AbstractTransfer ? $this->version->toArray(true, false) : $this->version,
            'defaults' => $this->defaults instanceof AbstractTransfer ? $this->defaults->toArray(true, false) : $this->defaults,
            'actions' => $this->actions instanceof AbstractTransfer ? $this->actions->toArray(true, false) : $this->addValuesToCollection($this->actions, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'version' => $this->version instanceof AbstractTransfer ? $this->version->toArray(true, true) : $this->version,
            'defaults' => $this->defaults instanceof AbstractTransfer ? $this->defaults->toArray(true, true) : $this->defaults,
            'actions' => $this->actions instanceof AbstractTransfer ? $this->actions->toArray(true, true) : $this->addValuesToCollection($this->actions, true, true),
        ];
    }
}
