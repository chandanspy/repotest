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
class DataImporterReaderConfigurationTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const CSV_HAS_HEADER = 'csvHasHeader';

    /**
     * @var string
     */
    public const CSV_FLAGS = 'csvFlags';

    /**
     * @var string
     */
    public const CSV_ESCAPE = 'csvEscape';

    /**
     * @var string
     */
    public const CSV_ENCLOSURE = 'csvEnclosure';

    /**
     * @var string
     */
    public const CSV_DELIMITER = 'csvDelimiter';

    /**
     * @var string
     */
    public const LIMIT = 'limit';

    /**
     * @var string
     */
    public const OFFSET = 'offset';

    /**
     * @var string
     */
    public const DIRECTORIES = 'directories';

    /**
     * @var string
     */
    public const FILE_ENCODING = 'fileEncoding';

    /**
     * @var string
     */
    public const FILE_NAME = 'fileName';

    /**
     * @var bool|null
     */
    protected $csvHasHeader;

    /**
     * @var int|null
     */
    protected $csvFlags;

    /**
     * @var string|null
     */
    protected $csvEscape;

    /**
     * @var string|null
     */
    protected $csvEnclosure;

    /**
     * @var string|null
     */
    protected $csvDelimiter;

    /**
     * @var int|null
     */
    protected $limit;

    /**
     * @var int|null
     */
    protected $offset;

    /**
     * @var array
     */
    protected $directories = [];

    /**
     * @var string|null
     */
    protected $fileEncoding;

    /**
     * @var string|null
     */
    protected $fileName;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'csv_has_header' => 'csvHasHeader',
        'csvHasHeader' => 'csvHasHeader',
        'CsvHasHeader' => 'csvHasHeader',
        'csv_flags' => 'csvFlags',
        'csvFlags' => 'csvFlags',
        'CsvFlags' => 'csvFlags',
        'csv_escape' => 'csvEscape',
        'csvEscape' => 'csvEscape',
        'CsvEscape' => 'csvEscape',
        'csv_enclosure' => 'csvEnclosure',
        'csvEnclosure' => 'csvEnclosure',
        'CsvEnclosure' => 'csvEnclosure',
        'csv_delimiter' => 'csvDelimiter',
        'csvDelimiter' => 'csvDelimiter',
        'CsvDelimiter' => 'csvDelimiter',
        'limit' => 'limit',
        'Limit' => 'limit',
        'offset' => 'offset',
        'Offset' => 'offset',
        'directories' => 'directories',
        'Directories' => 'directories',
        'file_encoding' => 'fileEncoding',
        'fileEncoding' => 'fileEncoding',
        'FileEncoding' => 'fileEncoding',
        'file_name' => 'fileName',
        'fileName' => 'fileName',
        'FileName' => 'fileName',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::CSV_HAS_HEADER => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'csv_has_header',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CSV_FLAGS => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'csv_flags',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CSV_ESCAPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'csv_escape',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CSV_ENCLOSURE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'csv_enclosure',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CSV_DELIMITER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'csv_delimiter',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LIMIT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'limit',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::OFFSET => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'offset',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DIRECTORIES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'directories',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FILE_ENCODING => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'file_encoding',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FILE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'file_name',
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
     * @param bool|null $csvHasHeader
     *
     * @return $this
     */
    public function setCsvHasHeader($csvHasHeader)
    {
        $this->csvHasHeader = $csvHasHeader;
        $this->modifiedProperties[self::CSV_HAS_HEADER] = true;

        return $this;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @return bool|null
     */
    public function getCsvHasHeader()
    {
        return $this->csvHasHeader;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @param bool|null $csvHasHeader
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCsvHasHeaderOrFail($csvHasHeader)
    {
        if ($csvHasHeader === null) {
            $this->throwNullValueException(static::CSV_HAS_HEADER);
        }

        return $this->setCsvHasHeader($csvHasHeader);
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getCsvHasHeaderOrFail()
    {
        if ($this->csvHasHeader === null) {
            $this->throwNullValueException(static::CSV_HAS_HEADER);
        }

        return $this->csvHasHeader;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCsvHasHeader()
    {
        $this->assertPropertyIsSet(self::CSV_HAS_HEADER);

        return $this;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @param int|null $csvFlags
     *
     * @return $this
     */
    public function setCsvFlags($csvFlags)
    {
        $this->csvFlags = $csvFlags;
        $this->modifiedProperties[self::CSV_FLAGS] = true;

        return $this;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @return int|null
     */
    public function getCsvFlags()
    {
        return $this->csvFlags;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @param int|null $csvFlags
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCsvFlagsOrFail($csvFlags)
    {
        if ($csvFlags === null) {
            $this->throwNullValueException(static::CSV_FLAGS);
        }

        return $this->setCsvFlags($csvFlags);
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getCsvFlagsOrFail()
    {
        if ($this->csvFlags === null) {
            $this->throwNullValueException(static::CSV_FLAGS);
        }

        return $this->csvFlags;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCsvFlags()
    {
        $this->assertPropertyIsSet(self::CSV_FLAGS);

        return $this;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @param string|null $csvEscape
     *
     * @return $this
     */
    public function setCsvEscape($csvEscape)
    {
        $this->csvEscape = $csvEscape;
        $this->modifiedProperties[self::CSV_ESCAPE] = true;

        return $this;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @return string|null
     */
    public function getCsvEscape()
    {
        return $this->csvEscape;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @param string|null $csvEscape
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCsvEscapeOrFail($csvEscape)
    {
        if ($csvEscape === null) {
            $this->throwNullValueException(static::CSV_ESCAPE);
        }

        return $this->setCsvEscape($csvEscape);
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCsvEscapeOrFail()
    {
        if ($this->csvEscape === null) {
            $this->throwNullValueException(static::CSV_ESCAPE);
        }

        return $this->csvEscape;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCsvEscape()
    {
        $this->assertPropertyIsSet(self::CSV_ESCAPE);

        return $this;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @param string|null $csvEnclosure
     *
     * @return $this
     */
    public function setCsvEnclosure($csvEnclosure)
    {
        $this->csvEnclosure = $csvEnclosure;
        $this->modifiedProperties[self::CSV_ENCLOSURE] = true;

        return $this;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @return string|null
     */
    public function getCsvEnclosure()
    {
        return $this->csvEnclosure;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @param string|null $csvEnclosure
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCsvEnclosureOrFail($csvEnclosure)
    {
        if ($csvEnclosure === null) {
            $this->throwNullValueException(static::CSV_ENCLOSURE);
        }

        return $this->setCsvEnclosure($csvEnclosure);
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCsvEnclosureOrFail()
    {
        if ($this->csvEnclosure === null) {
            $this->throwNullValueException(static::CSV_ENCLOSURE);
        }

        return $this->csvEnclosure;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCsvEnclosure()
    {
        $this->assertPropertyIsSet(self::CSV_ENCLOSURE);

        return $this;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @param string|null $csvDelimiter
     *
     * @return $this
     */
    public function setCsvDelimiter($csvDelimiter)
    {
        $this->csvDelimiter = $csvDelimiter;
        $this->modifiedProperties[self::CSV_DELIMITER] = true;

        return $this;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @return string|null
     */
    public function getCsvDelimiter()
    {
        return $this->csvDelimiter;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @param string|null $csvDelimiter
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCsvDelimiterOrFail($csvDelimiter)
    {
        if ($csvDelimiter === null) {
            $this->throwNullValueException(static::CSV_DELIMITER);
        }

        return $this->setCsvDelimiter($csvDelimiter);
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCsvDelimiterOrFail()
    {
        if ($this->csvDelimiter === null) {
            $this->throwNullValueException(static::CSV_DELIMITER);
        }

        return $this->csvDelimiter;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCsvDelimiter()
    {
        $this->assertPropertyIsSet(self::CSV_DELIMITER);

        return $this;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @param int|null $limit
     *
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
        $this->modifiedProperties[self::LIMIT] = true;

        return $this;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @return int|null
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @param int|null $limit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLimitOrFail($limit)
    {
        if ($limit === null) {
            $this->throwNullValueException(static::LIMIT);
        }

        return $this->setLimit($limit);
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getLimitOrFail()
    {
        if ($this->limit === null) {
            $this->throwNullValueException(static::LIMIT);
        }

        return $this->limit;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLimit()
    {
        $this->assertPropertyIsSet(self::LIMIT);

        return $this;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @param int|null $offset
     *
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
        $this->modifiedProperties[self::OFFSET] = true;

        return $this;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @return int|null
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @param int|null $offset
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOffsetOrFail($offset)
    {
        if ($offset === null) {
            $this->throwNullValueException(static::OFFSET);
        }

        return $this->setOffset($offset);
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getOffsetOrFail()
    {
        if ($this->offset === null) {
            $this->throwNullValueException(static::OFFSET);
        }

        return $this->offset;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOffset()
    {
        $this->assertPropertyIsSet(self::OFFSET);

        return $this;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @param array|null $directories
     *
     * @return $this
     */
    public function setDirectories(array $directories = null)
    {
        if ($directories === null) {
            $directories = [];
        }

        $this->directories = $directories;
        $this->modifiedProperties[self::DIRECTORIES] = true;

        return $this;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @return array
     */
    public function getDirectories()
    {
        return $this->directories;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @param mixed $directory
     *
     * @return $this
     */
    public function addDirectory($directory)
    {
        $this->directories[] = $directory;
        $this->modifiedProperties[self::DIRECTORIES] = true;

        return $this;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDirectories()
    {
        $this->assertPropertyIsSet(self::DIRECTORIES);

        return $this;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @param string|null $fileEncoding
     *
     * @return $this
     */
    public function setFileEncoding($fileEncoding)
    {
        $this->fileEncoding = $fileEncoding;
        $this->modifiedProperties[self::FILE_ENCODING] = true;

        return $this;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @return string|null
     */
    public function getFileEncoding()
    {
        return $this->fileEncoding;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @param string|null $fileEncoding
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFileEncodingOrFail($fileEncoding)
    {
        if ($fileEncoding === null) {
            $this->throwNullValueException(static::FILE_ENCODING);
        }

        return $this->setFileEncoding($fileEncoding);
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getFileEncodingOrFail()
    {
        if ($this->fileEncoding === null) {
            $this->throwNullValueException(static::FILE_ENCODING);
        }

        return $this->fileEncoding;
    }

    /**
     * @module DataImport|PaymentDataImport|ShipmentDataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFileEncoding()
    {
        $this->assertPropertyIsSet(self::FILE_ENCODING);

        return $this;
    }

    /**
     * @module DataImport|MerchantDataImport|PaymentDataImport|ShipmentDataImport
     *
     * @param string|null $fileName
     *
     * @return $this
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
        $this->modifiedProperties[self::FILE_NAME] = true;

        return $this;
    }

    /**
     * @module DataImport|MerchantDataImport|PaymentDataImport|ShipmentDataImport
     *
     * @return string|null
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @module DataImport|MerchantDataImport|PaymentDataImport|ShipmentDataImport
     *
     * @param string|null $fileName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFileNameOrFail($fileName)
    {
        if ($fileName === null) {
            $this->throwNullValueException(static::FILE_NAME);
        }

        return $this->setFileName($fileName);
    }

    /**
     * @module DataImport|MerchantDataImport|PaymentDataImport|ShipmentDataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getFileNameOrFail()
    {
        if ($this->fileName === null) {
            $this->throwNullValueException(static::FILE_NAME);
        }

        return $this->fileName;
    }

    /**
     * @module DataImport|MerchantDataImport|PaymentDataImport|ShipmentDataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFileName()
    {
        $this->assertPropertyIsSet(self::FILE_NAME);

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
                case 'csvHasHeader':
                case 'csvFlags':
                case 'csvEscape':
                case 'csvEnclosure':
                case 'csvDelimiter':
                case 'limit':
                case 'offset':
                case 'directories':
                case 'fileEncoding':
                case 'fileName':
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
                case 'csvHasHeader':
                case 'csvFlags':
                case 'csvEscape':
                case 'csvEnclosure':
                case 'csvDelimiter':
                case 'limit':
                case 'offset':
                case 'directories':
                case 'fileEncoding':
                case 'fileName':
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
                case 'csvHasHeader':
                case 'csvFlags':
                case 'csvEscape':
                case 'csvEnclosure':
                case 'csvDelimiter':
                case 'limit':
                case 'offset':
                case 'directories':
                case 'fileEncoding':
                case 'fileName':
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
            'csvHasHeader' => $this->csvHasHeader,
            'csvFlags' => $this->csvFlags,
            'csvEscape' => $this->csvEscape,
            'csvEnclosure' => $this->csvEnclosure,
            'csvDelimiter' => $this->csvDelimiter,
            'limit' => $this->limit,
            'offset' => $this->offset,
            'directories' => $this->directories,
            'fileEncoding' => $this->fileEncoding,
            'fileName' => $this->fileName,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'csv_has_header' => $this->csvHasHeader,
            'csv_flags' => $this->csvFlags,
            'csv_escape' => $this->csvEscape,
            'csv_enclosure' => $this->csvEnclosure,
            'csv_delimiter' => $this->csvDelimiter,
            'limit' => $this->limit,
            'offset' => $this->offset,
            'directories' => $this->directories,
            'file_encoding' => $this->fileEncoding,
            'file_name' => $this->fileName,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'csv_has_header' => $this->csvHasHeader instanceof AbstractTransfer ? $this->csvHasHeader->toArray(true, false) : $this->csvHasHeader,
            'csv_flags' => $this->csvFlags instanceof AbstractTransfer ? $this->csvFlags->toArray(true, false) : $this->csvFlags,
            'csv_escape' => $this->csvEscape instanceof AbstractTransfer ? $this->csvEscape->toArray(true, false) : $this->csvEscape,
            'csv_enclosure' => $this->csvEnclosure instanceof AbstractTransfer ? $this->csvEnclosure->toArray(true, false) : $this->csvEnclosure,
            'csv_delimiter' => $this->csvDelimiter instanceof AbstractTransfer ? $this->csvDelimiter->toArray(true, false) : $this->csvDelimiter,
            'limit' => $this->limit instanceof AbstractTransfer ? $this->limit->toArray(true, false) : $this->limit,
            'offset' => $this->offset instanceof AbstractTransfer ? $this->offset->toArray(true, false) : $this->offset,
            'directories' => $this->directories instanceof AbstractTransfer ? $this->directories->toArray(true, false) : $this->directories,
            'file_encoding' => $this->fileEncoding instanceof AbstractTransfer ? $this->fileEncoding->toArray(true, false) : $this->fileEncoding,
            'file_name' => $this->fileName instanceof AbstractTransfer ? $this->fileName->toArray(true, false) : $this->fileName,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'csvHasHeader' => $this->csvHasHeader instanceof AbstractTransfer ? $this->csvHasHeader->toArray(true, true) : $this->csvHasHeader,
            'csvFlags' => $this->csvFlags instanceof AbstractTransfer ? $this->csvFlags->toArray(true, true) : $this->csvFlags,
            'csvEscape' => $this->csvEscape instanceof AbstractTransfer ? $this->csvEscape->toArray(true, true) : $this->csvEscape,
            'csvEnclosure' => $this->csvEnclosure instanceof AbstractTransfer ? $this->csvEnclosure->toArray(true, true) : $this->csvEnclosure,
            'csvDelimiter' => $this->csvDelimiter instanceof AbstractTransfer ? $this->csvDelimiter->toArray(true, true) : $this->csvDelimiter,
            'limit' => $this->limit instanceof AbstractTransfer ? $this->limit->toArray(true, true) : $this->limit,
            'offset' => $this->offset instanceof AbstractTransfer ? $this->offset->toArray(true, true) : $this->offset,
            'directories' => $this->directories instanceof AbstractTransfer ? $this->directories->toArray(true, true) : $this->directories,
            'fileEncoding' => $this->fileEncoding instanceof AbstractTransfer ? $this->fileEncoding->toArray(true, true) : $this->fileEncoding,
            'fileName' => $this->fileName instanceof AbstractTransfer ? $this->fileName->toArray(true, true) : $this->fileName,
        ];
    }
}
