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
class DataImporterReportTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const DATA_IMPORTER_REPORTS = 'dataImporterReports';

    /**
     * @var string
     */
    public const MESSAGES = 'messages';

    /**
     * @var string
     */
    public const IS_SUCCESS = 'isSuccess';

    /**
     * @var string
     */
    public const IS_READER_COUNTABLE = 'isReaderCountable';

    /**
     * @var string
     */
    public const EXPECTED_IMPORTABLE_DATA_SET_COUNT = 'expectedImportableDataSetCount';

    /**
     * @var string
     */
    public const IMPORTED_DATA_SET_COUNT = 'importedDataSetCount';

    /**
     * @var string
     */
    public const IMPORT_TIME = 'importTime';

    /**
     * @var string
     */
    public const IMPORT_TYPE = 'importType';

    /**
     * @var string
     */
    public const SOURCE = 'source';

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\DataImporterReportTransfer[]
     */
    protected $dataImporterReports;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\DataImporterReportMessageTransfer[]
     */
    protected $messages;

    /**
     * @var bool|null
     */
    protected $isSuccess;

    /**
     * @var bool|null
     */
    protected $isReaderCountable;

    /**
     * @var int|null
     */
    protected $expectedImportableDataSetCount;

    /**
     * @var int|null
     */
    protected $importedDataSetCount;

    /**
     * @var float|null
     */
    protected $importTime;

    /**
     * @var string|null
     */
    protected $importType;

    /**
     * @var string|null
     */
    protected $source;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'data_importer_reports' => 'dataImporterReports',
        'dataImporterReports' => 'dataImporterReports',
        'DataImporterReports' => 'dataImporterReports',
        'messages' => 'messages',
        'Messages' => 'messages',
        'is_success' => 'isSuccess',
        'isSuccess' => 'isSuccess',
        'IsSuccess' => 'isSuccess',
        'is_reader_countable' => 'isReaderCountable',
        'isReaderCountable' => 'isReaderCountable',
        'IsReaderCountable' => 'isReaderCountable',
        'expected_importable_data_set_count' => 'expectedImportableDataSetCount',
        'expectedImportableDataSetCount' => 'expectedImportableDataSetCount',
        'ExpectedImportableDataSetCount' => 'expectedImportableDataSetCount',
        'imported_data_set_count' => 'importedDataSetCount',
        'importedDataSetCount' => 'importedDataSetCount',
        'ImportedDataSetCount' => 'importedDataSetCount',
        'import_time' => 'importTime',
        'importTime' => 'importTime',
        'ImportTime' => 'importTime',
        'import_type' => 'importType',
        'importType' => 'importType',
        'ImportType' => 'importType',
        'source' => 'source',
        'Source' => 'source',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::DATA_IMPORTER_REPORTS => [
            'type' => 'Generated\Shared\Transfer\DataImporterReportTransfer',
            'type_shim' => null,
            'name_underscore' => 'data_importer_reports',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MESSAGES => [
            'type' => 'Generated\Shared\Transfer\DataImporterReportMessageTransfer',
            'type_shim' => null,
            'name_underscore' => 'messages',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_SUCCESS => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_success',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_READER_COUNTABLE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_reader_countable',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::EXPECTED_IMPORTABLE_DATA_SET_COUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'expected_importable_data_set_count',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IMPORTED_DATA_SET_COUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'imported_data_set_count',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IMPORT_TIME => [
            'type' => 'float',
            'type_shim' => null,
            'name_underscore' => 'import_time',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IMPORT_TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'import_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SOURCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'source',
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
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\DataImporterReportTransfer[] $dataImporterReports
     *
     * @return $this
     */
    public function setDataImporterReports(ArrayObject $dataImporterReports)
    {
        $this->dataImporterReports = $dataImporterReports;
        $this->modifiedProperties[self::DATA_IMPORTER_REPORTS] = true;

        return $this;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\DataImporterReportTransfer[]
     */
    public function getDataImporterReports()
    {
        return $this->dataImporterReports;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @param \Generated\Shared\Transfer\DataImporterReportTransfer $dataImporterReport
     *
     * @return $this
     */
    public function addDataImporterReport(DataImporterReportTransfer $dataImporterReport)
    {
        $this->dataImporterReports[] = $dataImporterReport;
        $this->modifiedProperties[self::DATA_IMPORTER_REPORTS] = true;

        return $this;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDataImporterReports()
    {
        $this->assertCollectionPropertyIsSet(self::DATA_IMPORTER_REPORTS);

        return $this;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\DataImporterReportMessageTransfer[] $messages
     *
     * @return $this
     */
    public function setMessages(ArrayObject $messages)
    {
        $this->messages = $messages;
        $this->modifiedProperties[self::MESSAGES] = true;

        return $this;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\DataImporterReportMessageTransfer[]
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @param \Generated\Shared\Transfer\DataImporterReportMessageTransfer $message
     *
     * @return $this
     */
    public function addMessage(DataImporterReportMessageTransfer $message)
    {
        $this->messages[] = $message;
        $this->modifiedProperties[self::MESSAGES] = true;

        return $this;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMessages()
    {
        $this->assertCollectionPropertyIsSet(self::MESSAGES);

        return $this;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @param bool|null $isSuccess
     *
     * @return $this
     */
    public function setIsSuccess($isSuccess)
    {
        $this->isSuccess = $isSuccess;
        $this->modifiedProperties[self::IS_SUCCESS] = true;

        return $this;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @return bool|null
     */
    public function getIsSuccess()
    {
        return $this->isSuccess;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @param bool|null $isSuccess
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsSuccessOrFail($isSuccess)
    {
        if ($isSuccess === null) {
            $this->throwNullValueException(static::IS_SUCCESS);
        }

        return $this->setIsSuccess($isSuccess);
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsSuccessOrFail()
    {
        if ($this->isSuccess === null) {
            $this->throwNullValueException(static::IS_SUCCESS);
        }

        return $this->isSuccess;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsSuccess()
    {
        $this->assertPropertyIsSet(self::IS_SUCCESS);

        return $this;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @param bool|null $isReaderCountable
     *
     * @return $this
     */
    public function setIsReaderCountable($isReaderCountable)
    {
        $this->isReaderCountable = $isReaderCountable;
        $this->modifiedProperties[self::IS_READER_COUNTABLE] = true;

        return $this;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @return bool|null
     */
    public function getIsReaderCountable()
    {
        return $this->isReaderCountable;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @param bool|null $isReaderCountable
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsReaderCountableOrFail($isReaderCountable)
    {
        if ($isReaderCountable === null) {
            $this->throwNullValueException(static::IS_READER_COUNTABLE);
        }

        return $this->setIsReaderCountable($isReaderCountable);
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsReaderCountableOrFail()
    {
        if ($this->isReaderCountable === null) {
            $this->throwNullValueException(static::IS_READER_COUNTABLE);
        }

        return $this->isReaderCountable;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsReaderCountable()
    {
        $this->assertPropertyIsSet(self::IS_READER_COUNTABLE);

        return $this;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @param int|null $expectedImportableDataSetCount
     *
     * @return $this
     */
    public function setExpectedImportableDataSetCount($expectedImportableDataSetCount)
    {
        $this->expectedImportableDataSetCount = $expectedImportableDataSetCount;
        $this->modifiedProperties[self::EXPECTED_IMPORTABLE_DATA_SET_COUNT] = true;

        return $this;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @return int|null
     */
    public function getExpectedImportableDataSetCount()
    {
        return $this->expectedImportableDataSetCount;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @param int|null $expectedImportableDataSetCount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setExpectedImportableDataSetCountOrFail($expectedImportableDataSetCount)
    {
        if ($expectedImportableDataSetCount === null) {
            $this->throwNullValueException(static::EXPECTED_IMPORTABLE_DATA_SET_COUNT);
        }

        return $this->setExpectedImportableDataSetCount($expectedImportableDataSetCount);
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getExpectedImportableDataSetCountOrFail()
    {
        if ($this->expectedImportableDataSetCount === null) {
            $this->throwNullValueException(static::EXPECTED_IMPORTABLE_DATA_SET_COUNT);
        }

        return $this->expectedImportableDataSetCount;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireExpectedImportableDataSetCount()
    {
        $this->assertPropertyIsSet(self::EXPECTED_IMPORTABLE_DATA_SET_COUNT);

        return $this;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @param int|null $importedDataSetCount
     *
     * @return $this
     */
    public function setImportedDataSetCount($importedDataSetCount)
    {
        $this->importedDataSetCount = $importedDataSetCount;
        $this->modifiedProperties[self::IMPORTED_DATA_SET_COUNT] = true;

        return $this;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @return int|null
     */
    public function getImportedDataSetCount()
    {
        return $this->importedDataSetCount;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @param int|null $importedDataSetCount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setImportedDataSetCountOrFail($importedDataSetCount)
    {
        if ($importedDataSetCount === null) {
            $this->throwNullValueException(static::IMPORTED_DATA_SET_COUNT);
        }

        return $this->setImportedDataSetCount($importedDataSetCount);
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getImportedDataSetCountOrFail()
    {
        if ($this->importedDataSetCount === null) {
            $this->throwNullValueException(static::IMPORTED_DATA_SET_COUNT);
        }

        return $this->importedDataSetCount;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireImportedDataSetCount()
    {
        $this->assertPropertyIsSet(self::IMPORTED_DATA_SET_COUNT);

        return $this;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @param float|null $importTime
     *
     * @return $this
     */
    public function setImportTime($importTime)
    {
        $this->importTime = $importTime;
        $this->modifiedProperties[self::IMPORT_TIME] = true;

        return $this;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @return float|null
     */
    public function getImportTime()
    {
        return $this->importTime;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @param float|null $importTime
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setImportTimeOrFail($importTime)
    {
        if ($importTime === null) {
            $this->throwNullValueException(static::IMPORT_TIME);
        }

        return $this->setImportTime($importTime);
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return float
     */
    public function getImportTimeOrFail()
    {
        if ($this->importTime === null) {
            $this->throwNullValueException(static::IMPORT_TIME);
        }

        return $this->importTime;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireImportTime()
    {
        $this->assertPropertyIsSet(self::IMPORT_TIME);

        return $this;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @param string|null $importType
     *
     * @return $this
     */
    public function setImportType($importType)
    {
        $this->importType = $importType;
        $this->modifiedProperties[self::IMPORT_TYPE] = true;

        return $this;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @return string|null
     */
    public function getImportType()
    {
        return $this->importType;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @param string|null $importType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setImportTypeOrFail($importType)
    {
        if ($importType === null) {
            $this->throwNullValueException(static::IMPORT_TYPE);
        }

        return $this->setImportType($importType);
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getImportTypeOrFail()
    {
        if ($this->importType === null) {
            $this->throwNullValueException(static::IMPORT_TYPE);
        }

        return $this->importType;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireImportType()
    {
        $this->assertPropertyIsSet(self::IMPORT_TYPE);

        return $this;
    }

    /**
     * @module DataImport
     *
     * @param string|null $source
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->source = $source;
        $this->modifiedProperties[self::SOURCE] = true;

        return $this;
    }

    /**
     * @module DataImport
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @module DataImport
     *
     * @param string|null $source
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSourceOrFail($source)
    {
        if ($source === null) {
            $this->throwNullValueException(static::SOURCE);
        }

        return $this->setSource($source);
    }

    /**
     * @module DataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSourceOrFail()
    {
        if ($this->source === null) {
            $this->throwNullValueException(static::SOURCE);
        }

        return $this->source;
    }

    /**
     * @module DataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSource()
    {
        $this->assertPropertyIsSet(self::SOURCE);

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
                case 'isSuccess':
                case 'isReaderCountable':
                case 'expectedImportableDataSetCount':
                case 'importedDataSetCount':
                case 'importTime':
                case 'importType':
                case 'source':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'dataImporterReports':
                case 'messages':
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
                case 'isSuccess':
                case 'isReaderCountable':
                case 'expectedImportableDataSetCount':
                case 'importedDataSetCount':
                case 'importTime':
                case 'importType':
                case 'source':
                    $values[$arrayKey] = $value;

                    break;
                case 'dataImporterReports':
                case 'messages':
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
                case 'isSuccess':
                case 'isReaderCountable':
                case 'expectedImportableDataSetCount':
                case 'importedDataSetCount':
                case 'importTime':
                case 'importType':
                case 'source':
                    $values[$arrayKey] = $value;

                    break;
                case 'dataImporterReports':
                case 'messages':
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
        $this->dataImporterReports = $this->dataImporterReports ?: new ArrayObject();
        $this->messages = $this->messages ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'isSuccess' => $this->isSuccess,
            'isReaderCountable' => $this->isReaderCountable,
            'expectedImportableDataSetCount' => $this->expectedImportableDataSetCount,
            'importedDataSetCount' => $this->importedDataSetCount,
            'importTime' => $this->importTime,
            'importType' => $this->importType,
            'source' => $this->source,
            'dataImporterReports' => $this->dataImporterReports,
            'messages' => $this->messages,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'is_success' => $this->isSuccess,
            'is_reader_countable' => $this->isReaderCountable,
            'expected_importable_data_set_count' => $this->expectedImportableDataSetCount,
            'imported_data_set_count' => $this->importedDataSetCount,
            'import_time' => $this->importTime,
            'import_type' => $this->importType,
            'source' => $this->source,
            'data_importer_reports' => $this->dataImporterReports,
            'messages' => $this->messages,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'is_success' => $this->isSuccess instanceof AbstractTransfer ? $this->isSuccess->toArray(true, false) : $this->isSuccess,
            'is_reader_countable' => $this->isReaderCountable instanceof AbstractTransfer ? $this->isReaderCountable->toArray(true, false) : $this->isReaderCountable,
            'expected_importable_data_set_count' => $this->expectedImportableDataSetCount instanceof AbstractTransfer ? $this->expectedImportableDataSetCount->toArray(true, false) : $this->expectedImportableDataSetCount,
            'imported_data_set_count' => $this->importedDataSetCount instanceof AbstractTransfer ? $this->importedDataSetCount->toArray(true, false) : $this->importedDataSetCount,
            'import_time' => $this->importTime instanceof AbstractTransfer ? $this->importTime->toArray(true, false) : $this->importTime,
            'import_type' => $this->importType instanceof AbstractTransfer ? $this->importType->toArray(true, false) : $this->importType,
            'source' => $this->source instanceof AbstractTransfer ? $this->source->toArray(true, false) : $this->source,
            'data_importer_reports' => $this->dataImporterReports instanceof AbstractTransfer ? $this->dataImporterReports->toArray(true, false) : $this->addValuesToCollection($this->dataImporterReports, true, false),
            'messages' => $this->messages instanceof AbstractTransfer ? $this->messages->toArray(true, false) : $this->addValuesToCollection($this->messages, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'isSuccess' => $this->isSuccess instanceof AbstractTransfer ? $this->isSuccess->toArray(true, true) : $this->isSuccess,
            'isReaderCountable' => $this->isReaderCountable instanceof AbstractTransfer ? $this->isReaderCountable->toArray(true, true) : $this->isReaderCountable,
            'expectedImportableDataSetCount' => $this->expectedImportableDataSetCount instanceof AbstractTransfer ? $this->expectedImportableDataSetCount->toArray(true, true) : $this->expectedImportableDataSetCount,
            'importedDataSetCount' => $this->importedDataSetCount instanceof AbstractTransfer ? $this->importedDataSetCount->toArray(true, true) : $this->importedDataSetCount,
            'importTime' => $this->importTime instanceof AbstractTransfer ? $this->importTime->toArray(true, true) : $this->importTime,
            'importType' => $this->importType instanceof AbstractTransfer ? $this->importType->toArray(true, true) : $this->importType,
            'source' => $this->source instanceof AbstractTransfer ? $this->source->toArray(true, true) : $this->source,
            'dataImporterReports' => $this->dataImporterReports instanceof AbstractTransfer ? $this->dataImporterReports->toArray(true, true) : $this->addValuesToCollection($this->dataImporterReports, true, true),
            'messages' => $this->messages instanceof AbstractTransfer ? $this->messages->toArray(true, true) : $this->addValuesToCollection($this->messages, true, true),
        ];
    }
}
