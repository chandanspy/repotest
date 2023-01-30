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
class DocumentTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const HEADER = 'header';

    /**
     * @var string
     */
    public const FILE_NAME = 'fileName';

    /**
     * @var string
     */
    public const FILE_PATH = 'filePath';

    /**
     * @var string|null
     */
    protected $header;

    /**
     * @var string|null
     */
    protected $fileName;

    /**
     * @var string|null
     */
    protected $filePath;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'header' => 'header',
        'Header' => 'header',
        'file_name' => 'fileName',
        'fileName' => 'fileName',
        'FileName' => 'fileName',
        'file_path' => 'filePath',
        'filePath' => 'filePath',
        'FilePath' => 'filePath',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::HEADER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'header',
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
        self::FILE_PATH => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'file_path',
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
     * @module CustomerPage|Sales
     *
     * @param string|null $header
     *
     * @return $this
     */
    public function setHeader($header)
    {
        $this->header = $header;
        $this->modifiedProperties[self::HEADER] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @return string|null
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $header
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setHeaderOrFail($header)
    {
        if ($header === null) {
            $this->throwNullValueException(static::HEADER);
        }

        return $this->setHeader($header);
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getHeaderOrFail()
    {
        if ($this->header === null) {
            $this->throwNullValueException(static::HEADER);
        }

        return $this->header;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireHeader()
    {
        $this->assertPropertyIsSet(self::HEADER);

        return $this;
    }

    /**
     * @module CustomerPage|Sales
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
     * @module CustomerPage|Sales
     *
     * @return string|null
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @module CustomerPage|Sales
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
     * @module CustomerPage|Sales
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
     * @module CustomerPage|Sales
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
     * @module CustomerPage|Sales
     *
     * @param string|null $filePath
     *
     * @return $this
     */
    public function setFilePath($filePath)
    {
        $this->filePath = $filePath;
        $this->modifiedProperties[self::FILE_PATH] = true;

        return $this;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @return string|null
     */
    public function getFilePath()
    {
        return $this->filePath;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @param string|null $filePath
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFilePathOrFail($filePath)
    {
        if ($filePath === null) {
            $this->throwNullValueException(static::FILE_PATH);
        }

        return $this->setFilePath($filePath);
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getFilePathOrFail()
    {
        if ($this->filePath === null) {
            $this->throwNullValueException(static::FILE_PATH);
        }

        return $this->filePath;
    }

    /**
     * @module CustomerPage|Sales
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFilePath()
    {
        $this->assertPropertyIsSet(self::FILE_PATH);

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
                case 'header':
                case 'fileName':
                case 'filePath':
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
                case 'header':
                case 'fileName':
                case 'filePath':
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
                case 'header':
                case 'fileName':
                case 'filePath':
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
            'header' => $this->header,
            'fileName' => $this->fileName,
            'filePath' => $this->filePath,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'header' => $this->header,
            'file_name' => $this->fileName,
            'file_path' => $this->filePath,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'header' => $this->header instanceof AbstractTransfer ? $this->header->toArray(true, false) : $this->header,
            'file_name' => $this->fileName instanceof AbstractTransfer ? $this->fileName->toArray(true, false) : $this->fileName,
            'file_path' => $this->filePath instanceof AbstractTransfer ? $this->filePath->toArray(true, false) : $this->filePath,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'header' => $this->header instanceof AbstractTransfer ? $this->header->toArray(true, true) : $this->header,
            'fileName' => $this->fileName instanceof AbstractTransfer ? $this->fileName->toArray(true, true) : $this->fileName,
            'filePath' => $this->filePath instanceof AbstractTransfer ? $this->filePath->toArray(true, true) : $this->filePath,
        ];
    }
}
