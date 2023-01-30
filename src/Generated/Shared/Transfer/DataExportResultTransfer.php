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
class DataExportResultTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const IS_SUCCESSFUL = 'isSuccessful';

    /**
     * @var string
     */
    public const DATA_ENTITY = 'dataEntity';

    /**
     * @var string
     */
    public const FILE_NAME = 'fileName';

    /**
     * @var string
     */
    public const EXPORT_COUNT = 'exportCount';

    /**
     * @var bool|null
     */
    protected $isSuccessful;

    /**
     * @var string|null
     */
    protected $dataEntity;

    /**
     * @var string|null
     */
    protected $fileName;

    /**
     * @var int|null
     */
    protected $exportCount;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'is_successful' => 'isSuccessful',
        'isSuccessful' => 'isSuccessful',
        'IsSuccessful' => 'isSuccessful',
        'data_entity' => 'dataEntity',
        'dataEntity' => 'dataEntity',
        'DataEntity' => 'dataEntity',
        'file_name' => 'fileName',
        'fileName' => 'fileName',
        'FileName' => 'fileName',
        'export_count' => 'exportCount',
        'exportCount' => 'exportCount',
        'ExportCount' => 'exportCount',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::IS_SUCCESSFUL => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_successful',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
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
        self::EXPORT_COUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'export_count',
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
     * @module DataExport|SalesDataExport
     *
     * @param bool|null $isSuccessful
     *
     * @return $this
     */
    public function setIsSuccessful($isSuccessful)
    {
        $this->isSuccessful = $isSuccessful;
        $this->modifiedProperties[self::IS_SUCCESSFUL] = true;

        return $this;
    }

    /**
     * @module DataExport|SalesDataExport
     *
     * @return bool|null
     */
    public function getIsSuccessful()
    {
        return $this->isSuccessful;
    }

    /**
     * @module DataExport|SalesDataExport
     *
     * @param bool|null $isSuccessful
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsSuccessfulOrFail($isSuccessful)
    {
        if ($isSuccessful === null) {
            $this->throwNullValueException(static::IS_SUCCESSFUL);
        }

        return $this->setIsSuccessful($isSuccessful);
    }

    /**
     * @module DataExport|SalesDataExport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsSuccessfulOrFail()
    {
        if ($this->isSuccessful === null) {
            $this->throwNullValueException(static::IS_SUCCESSFUL);
        }

        return $this->isSuccessful;
    }

    /**
     * @module DataExport|SalesDataExport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsSuccessful()
    {
        $this->assertPropertyIsSet(self::IS_SUCCESSFUL);

        return $this;
    }

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
     * @module DataExport|SalesDataExport
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
     * @module DataExport|SalesDataExport
     *
     * @return string|null
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @module DataExport|SalesDataExport
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
     * @module DataExport|SalesDataExport
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
     * @module DataExport|SalesDataExport
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
     * @module DataExport|SalesDataExport
     *
     * @param int|null $exportCount
     *
     * @return $this
     */
    public function setExportCount($exportCount)
    {
        $this->exportCount = $exportCount;
        $this->modifiedProperties[self::EXPORT_COUNT] = true;

        return $this;
    }

    /**
     * @module DataExport|SalesDataExport
     *
     * @return int|null
     */
    public function getExportCount()
    {
        return $this->exportCount;
    }

    /**
     * @module DataExport|SalesDataExport
     *
     * @param int|null $exportCount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setExportCountOrFail($exportCount)
    {
        if ($exportCount === null) {
            $this->throwNullValueException(static::EXPORT_COUNT);
        }

        return $this->setExportCount($exportCount);
    }

    /**
     * @module DataExport|SalesDataExport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getExportCountOrFail()
    {
        if ($this->exportCount === null) {
            $this->throwNullValueException(static::EXPORT_COUNT);
        }

        return $this->exportCount;
    }

    /**
     * @module DataExport|SalesDataExport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireExportCount()
    {
        $this->assertPropertyIsSet(self::EXPORT_COUNT);

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
                case 'isSuccessful':
                case 'dataEntity':
                case 'fileName':
                case 'exportCount':
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
                case 'isSuccessful':
                case 'dataEntity':
                case 'fileName':
                case 'exportCount':
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
                case 'isSuccessful':
                case 'dataEntity':
                case 'fileName':
                case 'exportCount':
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
            'isSuccessful' => $this->isSuccessful,
            'dataEntity' => $this->dataEntity,
            'fileName' => $this->fileName,
            'exportCount' => $this->exportCount,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'is_successful' => $this->isSuccessful,
            'data_entity' => $this->dataEntity,
            'file_name' => $this->fileName,
            'export_count' => $this->exportCount,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'is_successful' => $this->isSuccessful instanceof AbstractTransfer ? $this->isSuccessful->toArray(true, false) : $this->isSuccessful,
            'data_entity' => $this->dataEntity instanceof AbstractTransfer ? $this->dataEntity->toArray(true, false) : $this->dataEntity,
            'file_name' => $this->fileName instanceof AbstractTransfer ? $this->fileName->toArray(true, false) : $this->fileName,
            'export_count' => $this->exportCount instanceof AbstractTransfer ? $this->exportCount->toArray(true, false) : $this->exportCount,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'isSuccessful' => $this->isSuccessful instanceof AbstractTransfer ? $this->isSuccessful->toArray(true, true) : $this->isSuccessful,
            'dataEntity' => $this->dataEntity instanceof AbstractTransfer ? $this->dataEntity->toArray(true, true) : $this->dataEntity,
            'fileName' => $this->fileName instanceof AbstractTransfer ? $this->fileName->toArray(true, true) : $this->fileName,
            'exportCount' => $this->exportCount instanceof AbstractTransfer ? $this->exportCount->toArray(true, true) : $this->exportCount,
        ];
    }
}
