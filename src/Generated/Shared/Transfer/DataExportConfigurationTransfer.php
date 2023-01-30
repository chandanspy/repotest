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
class DataExportConfigurationTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const DATA_ENTITY = 'dataEntity';

    /**
     * @var string
     */
    public const DESTINATION = 'destination';

    /**
     * @var string
     */
    public const OVERWRITE = 'overwrite';

    /**
     * @var string
     */
    public const OPERATION = 'operation';

    /**
     * @var string
     */
    public const FORMAT = 'format';

    /**
     * @var string
     */
    public const FIELDS = 'fields';

    /**
     * @var string
     */
    public const FILTER_CRITERIA = 'filterCriteria';

    /**
     * @var string
     */
    public const CONNECTION = 'connection';

    /**
     * @var string
     */
    public const HOOKS = 'hooks';

    /**
     * @var string|null
     */
    protected $dataEntity;

    /**
     * @var string|null
     */
    protected $destination;

    /**
     * @var bool|null
     */
    protected $overwrite;

    /**
     * @var string|null
     */
    protected $operation;

    /**
     * @var \Generated\Shared\Transfer\DataExportFormatConfigurationTransfer|null
     */
    protected $format;

    /**
     * @var array
     */
    protected $fields = [];

    /**
     * @var array
     */
    protected $filterCriteria = [];

    /**
     * @var \Generated\Shared\Transfer\DataExportConnectionConfigurationTransfer|null
     */
    protected $connection;

    /**
     * @var array
     */
    protected $hooks = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'data_entity' => 'dataEntity',
        'dataEntity' => 'dataEntity',
        'DataEntity' => 'dataEntity',
        'destination' => 'destination',
        'Destination' => 'destination',
        'overwrite' => 'overwrite',
        'Overwrite' => 'overwrite',
        'operation' => 'operation',
        'Operation' => 'operation',
        'format' => 'format',
        'Format' => 'format',
        'fields' => 'fields',
        'Fields' => 'fields',
        'filter_criteria' => 'filterCriteria',
        'filterCriteria' => 'filterCriteria',
        'FilterCriteria' => 'filterCriteria',
        'connection' => 'connection',
        'Connection' => 'connection',
        'hooks' => 'hooks',
        'Hooks' => 'hooks',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::DATA_ENTITY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'data_entity',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DESTINATION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'destination',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::OVERWRITE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'overwrite',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::OPERATION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'operation',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FORMAT => [
            'type' => 'Generated\Shared\Transfer\DataExportFormatConfigurationTransfer',
            'type_shim' => null,
            'name_underscore' => 'format',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FIELDS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'fields',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FILTER_CRITERIA => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'filter_criteria',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => true,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONNECTION => [
            'type' => 'Generated\Shared\Transfer\DataExportConnectionConfigurationTransfer',
            'type_shim' => null,
            'name_underscore' => 'connection',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::HOOKS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'hooks',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => true,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module DataExport|SalesDataExport
     *
     * @param string|null $dataEntity
     *
     * @return $this
     */
    public function setDataEntity($dataEntity)
    {
        $this->dataEntity = $dataEntity;
        $this->modifiedProperties[self::DATA_ENTITY] = true;

        return $this;
    }

    /**
     * @module DataExport|SalesDataExport
     *
     * @return string|null
     */
    public function getDataEntity()
    {
        return $this->dataEntity;
    }

    /**
     * @module DataExport|SalesDataExport
     *
     * @param string|null $dataEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDataEntityOrFail($dataEntity)
    {
        if ($dataEntity === null) {
            $this->throwNullValueException(static::DATA_ENTITY);
        }

        return $this->setDataEntity($dataEntity);
    }

    /**
     * @module DataExport|SalesDataExport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDataEntityOrFail()
    {
        if ($this->dataEntity === null) {
            $this->throwNullValueException(static::DATA_ENTITY);
        }

        return $this->dataEntity;
    }

    /**
     * @module DataExport|SalesDataExport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDataEntity()
    {
        $this->assertPropertyIsSet(self::DATA_ENTITY);

        return $this;
    }

    /**
     * @module DataExport
     *
     * @param string|null $destination
     *
     * @return $this
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
        $this->modifiedProperties[self::DESTINATION] = true;

        return $this;
    }

    /**
     * @module DataExport
     *
     * @return string|null
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * @module DataExport
     *
     * @param string|null $destination
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDestinationOrFail($destination)
    {
        if ($destination === null) {
            $this->throwNullValueException(static::DESTINATION);
        }

        return $this->setDestination($destination);
    }

    /**
     * @module DataExport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDestinationOrFail()
    {
        if ($this->destination === null) {
            $this->throwNullValueException(static::DESTINATION);
        }

        return $this->destination;
    }

    /**
     * @module DataExport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDestination()
    {
        $this->assertPropertyIsSet(self::DESTINATION);

        return $this;
    }

    /**
     * @module DataExport
     *
     * @param bool|null $overwrite
     *
     * @return $this
     */
    public function setOverwrite($overwrite)
    {
        $this->overwrite = $overwrite;
        $this->modifiedProperties[self::OVERWRITE] = true;

        return $this;
    }

    /**
     * @module DataExport
     *
     * @return bool|null
     */
    public function getOverwrite()
    {
        return $this->overwrite;
    }

    /**
     * @module DataExport
     *
     * @param bool|null $overwrite
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOverwriteOrFail($overwrite)
    {
        if ($overwrite === null) {
            $this->throwNullValueException(static::OVERWRITE);
        }

        return $this->setOverwrite($overwrite);
    }

    /**
     * @module DataExport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getOverwriteOrFail()
    {
        if ($this->overwrite === null) {
            $this->throwNullValueException(static::OVERWRITE);
        }

        return $this->overwrite;
    }

    /**
     * @module DataExport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOverwrite()
    {
        $this->assertPropertyIsSet(self::OVERWRITE);

        return $this;
    }

    /**
     * @module DataExport
     *
     * @param string|null $operation
     *
     * @return $this
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;
        $this->modifiedProperties[self::OPERATION] = true;

        return $this;
    }

    /**
     * @module DataExport
     *
     * @return string|null
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * @module DataExport
     *
     * @param string|null $operation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOperationOrFail($operation)
    {
        if ($operation === null) {
            $this->throwNullValueException(static::OPERATION);
        }

        return $this->setOperation($operation);
    }

    /**
     * @module DataExport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getOperationOrFail()
    {
        if ($this->operation === null) {
            $this->throwNullValueException(static::OPERATION);
        }

        return $this->operation;
    }

    /**
     * @module DataExport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOperation()
    {
        $this->assertPropertyIsSet(self::OPERATION);

        return $this;
    }

    /**
     * @module DataExport|SalesDataExport
     *
     * @param \Generated\Shared\Transfer\DataExportFormatConfigurationTransfer|null $format
     *
     * @return $this
     */
    public function setFormat(DataExportFormatConfigurationTransfer $format = null)
    {
        $this->format = $format;
        $this->modifiedProperties[self::FORMAT] = true;

        return $this;
    }

    /**
     * @module DataExport|SalesDataExport
     *
     * @return \Generated\Shared\Transfer\DataExportFormatConfigurationTransfer|null
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @module DataExport|SalesDataExport
     *
     * @param \Generated\Shared\Transfer\DataExportFormatConfigurationTransfer $format
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFormatOrFail(DataExportFormatConfigurationTransfer $format)
    {
        return $this->setFormat($format);
    }

    /**
     * @module DataExport|SalesDataExport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\DataExportFormatConfigurationTransfer
     */
    public function getFormatOrFail()
    {
        if ($this->format === null) {
            $this->throwNullValueException(static::FORMAT);
        }

        return $this->format;
    }

    /**
     * @module DataExport|SalesDataExport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFormat()
    {
        $this->assertPropertyIsSet(self::FORMAT);

        return $this;
    }

    /**
     * @module DataExport|SalesDataExport
     *
     * @param array|null $fields
     *
     * @return $this
     */
    public function setFields(array $fields = null)
    {
        if ($fields === null) {
            $fields = [];
        }

        $this->fields = $fields;
        $this->modifiedProperties[self::FIELDS] = true;

        return $this;
    }

    /**
     * @module DataExport|SalesDataExport
     *
     * @return array
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * @module DataExport|SalesDataExport
     *
     * @param mixed $field
     *
     * @return $this
     */
    public function addField($field)
    {
        $this->fields[] = $field;
        $this->modifiedProperties[self::FIELDS] = true;

        return $this;
    }

    /**
     * @module DataExport|SalesDataExport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFields()
    {
        $this->assertPropertyIsSet(self::FIELDS);

        return $this;
    }

    /**
     * @module DataExport|SalesDataExport
     *
     * @param array $filterCriteria
     *
     * @return $this
     */
    public function setFilterCriteria($filterCriteria)
    {
        if ($filterCriteria === null) {
            $filterCriteria = [];
        }

        $this->filterCriteria = $filterCriteria;
        $this->modifiedProperties[self::FILTER_CRITERIA] = true;

        return $this;
    }

    /**
     * @module DataExport|SalesDataExport
     *
     * @return array
     */
    public function getFilterCriteria()
    {
        return $this->filterCriteria;
    }

    /**
     * @module DataExport|SalesDataExport
     *
     * @param string|int $filterCriterionKey
     * @param mixed $filterCriterionValue
     *
     * @return $this
     */
    public function addFilterCriterion($filterCriterionKey, $filterCriterionValue)
    {
        $this->filterCriteria[$filterCriterionKey] = $filterCriterionValue;
        $this->modifiedProperties[self::FILTER_CRITERIA] = true;

        return $this;
    }

    /**
     * @module DataExport|SalesDataExport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFilterCriteria()
    {
        $this->assertPropertyIsSet(self::FILTER_CRITERIA);

        return $this;
    }

    /**
     * @module DataExport
     *
     * @param \Generated\Shared\Transfer\DataExportConnectionConfigurationTransfer|null $connection
     *
     * @return $this
     */
    public function setConnection(DataExportConnectionConfigurationTransfer $connection = null)
    {
        $this->connection = $connection;
        $this->modifiedProperties[self::CONNECTION] = true;

        return $this;
    }

    /**
     * @module DataExport
     *
     * @return \Generated\Shared\Transfer\DataExportConnectionConfigurationTransfer|null
     */
    public function getConnection()
    {
        return $this->connection;
    }

    /**
     * @module DataExport
     *
     * @param \Generated\Shared\Transfer\DataExportConnectionConfigurationTransfer $connection
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setConnectionOrFail(DataExportConnectionConfigurationTransfer $connection)
    {
        return $this->setConnection($connection);
    }

    /**
     * @module DataExport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\DataExportConnectionConfigurationTransfer
     */
    public function getConnectionOrFail()
    {
        if ($this->connection === null) {
            $this->throwNullValueException(static::CONNECTION);
        }

        return $this->connection;
    }

    /**
     * @module DataExport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConnection()
    {
        $this->assertPropertyIsSet(self::CONNECTION);

        return $this;
    }

    /**
     * @module DataExport
     *
     * @param array $hooks
     *
     * @return $this
     */
    public function setHooks($hooks)
    {
        if ($hooks === null) {
            $hooks = [];
        }

        $this->hooks = $hooks;
        $this->modifiedProperties[self::HOOKS] = true;

        return $this;
    }

    /**
     * @module DataExport
     *
     * @return array
     */
    public function getHooks()
    {
        return $this->hooks;
    }

    /**
     * @module DataExport
     *
     * @param string|int $hookKey
     * @param mixed $hookValue
     *
     * @return $this
     */
    public function addHook($hookKey, $hookValue)
    {
        $this->hooks[$hookKey] = $hookValue;
        $this->modifiedProperties[self::HOOKS] = true;

        return $this;
    }

    /**
     * @module DataExport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireHooks()
    {
        $this->assertPropertyIsSet(self::HOOKS);

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
                case 'dataEntity':
                case 'destination':
                case 'overwrite':
                case 'operation':
                case 'fields':
                case 'filterCriteria':
                case 'hooks':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'format':
                case 'connection':
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
                case 'dataEntity':
                case 'destination':
                case 'overwrite':
                case 'operation':
                case 'fields':
                case 'filterCriteria':
                case 'hooks':
                    $values[$arrayKey] = $value;

                    break;
                case 'format':
                case 'connection':
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
                case 'dataEntity':
                case 'destination':
                case 'overwrite':
                case 'operation':
                case 'fields':
                case 'filterCriteria':
                case 'hooks':
                    $values[$arrayKey] = $value;

                    break;
                case 'format':
                case 'connection':
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
            'dataEntity' => $this->dataEntity,
            'destination' => $this->destination,
            'overwrite' => $this->overwrite,
            'operation' => $this->operation,
            'fields' => $this->fields,
            'filterCriteria' => $this->filterCriteria,
            'hooks' => $this->hooks,
            'format' => $this->format,
            'connection' => $this->connection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'data_entity' => $this->dataEntity,
            'destination' => $this->destination,
            'overwrite' => $this->overwrite,
            'operation' => $this->operation,
            'fields' => $this->fields,
            'filter_criteria' => $this->filterCriteria,
            'hooks' => $this->hooks,
            'format' => $this->format,
            'connection' => $this->connection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'data_entity' => $this->dataEntity instanceof AbstractTransfer ? $this->dataEntity->toArray(true, false) : $this->dataEntity,
            'destination' => $this->destination instanceof AbstractTransfer ? $this->destination->toArray(true, false) : $this->destination,
            'overwrite' => $this->overwrite instanceof AbstractTransfer ? $this->overwrite->toArray(true, false) : $this->overwrite,
            'operation' => $this->operation instanceof AbstractTransfer ? $this->operation->toArray(true, false) : $this->operation,
            'fields' => $this->fields instanceof AbstractTransfer ? $this->fields->toArray(true, false) : $this->fields,
            'filter_criteria' => $this->filterCriteria instanceof AbstractTransfer ? $this->filterCriteria->toArray(true, false) : $this->filterCriteria,
            'hooks' => $this->hooks instanceof AbstractTransfer ? $this->hooks->toArray(true, false) : $this->hooks,
            'format' => $this->format instanceof AbstractTransfer ? $this->format->toArray(true, false) : $this->format,
            'connection' => $this->connection instanceof AbstractTransfer ? $this->connection->toArray(true, false) : $this->connection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'dataEntity' => $this->dataEntity instanceof AbstractTransfer ? $this->dataEntity->toArray(true, true) : $this->dataEntity,
            'destination' => $this->destination instanceof AbstractTransfer ? $this->destination->toArray(true, true) : $this->destination,
            'overwrite' => $this->overwrite instanceof AbstractTransfer ? $this->overwrite->toArray(true, true) : $this->overwrite,
            'operation' => $this->operation instanceof AbstractTransfer ? $this->operation->toArray(true, true) : $this->operation,
            'fields' => $this->fields instanceof AbstractTransfer ? $this->fields->toArray(true, true) : $this->fields,
            'filterCriteria' => $this->filterCriteria instanceof AbstractTransfer ? $this->filterCriteria->toArray(true, true) : $this->filterCriteria,
            'hooks' => $this->hooks instanceof AbstractTransfer ? $this->hooks->toArray(true, true) : $this->hooks,
            'format' => $this->format instanceof AbstractTransfer ? $this->format->toArray(true, true) : $this->format,
            'connection' => $this->connection instanceof AbstractTransfer ? $this->connection->toArray(true, true) : $this->connection,
        ];
    }
}
