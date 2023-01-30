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
class ForeignKeyFileTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const FILENAME = 'filename';

    /**
     * @var string
     */
    public const NAMESPACE = 'namespace';

    /**
     * @var string
     */
    public const PACKAGE = 'package';

    /**
     * @var string
     */
    public const FOREIGN_KEY_TABLES = 'foreignKeyTables';

    /**
     * @var string|null
     */
    protected $filename;

    /**
     * @var string|null
     */
    protected $namespace;

    /**
     * @var string|null
     */
    protected $package;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ForeignKeyTableTransfer[]
     */
    protected $foreignKeyTables;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'filename' => 'filename',
        'Filename' => 'filename',
        'namespace' => 'namespace',
        'Namespace' => 'namespace',
        'package' => 'package',
        'Package' => 'package',
        'foreign_key_tables' => 'foreignKeyTables',
        'foreignKeyTables' => 'foreignKeyTables',
        'ForeignKeyTables' => 'foreignKeyTables',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::FILENAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'filename',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NAMESPACE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'namespace',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PACKAGE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'package',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FOREIGN_KEY_TABLES => [
            'type' => 'Generated\Shared\Transfer\ForeignKeyTableTransfer',
            'type_shim' => null,
            'name_underscore' => 'foreign_key_tables',
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
     * @module IndexGenerator
     *
     * @param string|null $filename
     *
     * @return $this
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;
        $this->modifiedProperties[self::FILENAME] = true;

        return $this;
    }

    /**
     * @module IndexGenerator
     *
     * @return string|null
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * @module IndexGenerator
     *
     * @param string|null $filename
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFilenameOrFail($filename)
    {
        if ($filename === null) {
            $this->throwNullValueException(static::FILENAME);
        }

        return $this->setFilename($filename);
    }

    /**
     * @module IndexGenerator
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getFilenameOrFail()
    {
        if ($this->filename === null) {
            $this->throwNullValueException(static::FILENAME);
        }

        return $this->filename;
    }

    /**
     * @module IndexGenerator
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFilename()
    {
        $this->assertPropertyIsSet(self::FILENAME);

        return $this;
    }

    /**
     * @module IndexGenerator
     *
     * @param string|null $namespace
     *
     * @return $this
     */
    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;
        $this->modifiedProperties[self::NAMESPACE] = true;

        return $this;
    }

    /**
     * @module IndexGenerator
     *
     * @return string|null
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * @module IndexGenerator
     *
     * @param string|null $namespace
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNamespaceOrFail($namespace)
    {
        if ($namespace === null) {
            $this->throwNullValueException(static::NAMESPACE);
        }

        return $this->setNamespace($namespace);
    }

    /**
     * @module IndexGenerator
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNamespaceOrFail()
    {
        if ($this->namespace === null) {
            $this->throwNullValueException(static::NAMESPACE);
        }

        return $this->namespace;
    }

    /**
     * @module IndexGenerator
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNamespace()
    {
        $this->assertPropertyIsSet(self::NAMESPACE);

        return $this;
    }

    /**
     * @module IndexGenerator
     *
     * @param string|null $package
     *
     * @return $this
     */
    public function setPackage($package)
    {
        $this->package = $package;
        $this->modifiedProperties[self::PACKAGE] = true;

        return $this;
    }

    /**
     * @module IndexGenerator
     *
     * @return string|null
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * @module IndexGenerator
     *
     * @param string|null $package
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPackageOrFail($package)
    {
        if ($package === null) {
            $this->throwNullValueException(static::PACKAGE);
        }

        return $this->setPackage($package);
    }

    /**
     * @module IndexGenerator
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPackageOrFail()
    {
        if ($this->package === null) {
            $this->throwNullValueException(static::PACKAGE);
        }

        return $this->package;
    }

    /**
     * @module IndexGenerator
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePackage()
    {
        $this->assertPropertyIsSet(self::PACKAGE);

        return $this;
    }

    /**
     * @module IndexGenerator
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ForeignKeyTableTransfer[] $foreignKeyTables
     *
     * @return $this
     */
    public function setForeignKeyTables(ArrayObject $foreignKeyTables)
    {
        $this->foreignKeyTables = $foreignKeyTables;
        $this->modifiedProperties[self::FOREIGN_KEY_TABLES] = true;

        return $this;
    }

    /**
     * @module IndexGenerator
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ForeignKeyTableTransfer[]
     */
    public function getForeignKeyTables()
    {
        return $this->foreignKeyTables;
    }

    /**
     * @module IndexGenerator
     *
     * @param \Generated\Shared\Transfer\ForeignKeyTableTransfer $foreignKeyTable
     *
     * @return $this
     */
    public function addForeignKeyTable(ForeignKeyTableTransfer $foreignKeyTable)
    {
        $this->foreignKeyTables[] = $foreignKeyTable;
        $this->modifiedProperties[self::FOREIGN_KEY_TABLES] = true;

        return $this;
    }

    /**
     * @module IndexGenerator
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireForeignKeyTables()
    {
        $this->assertCollectionPropertyIsSet(self::FOREIGN_KEY_TABLES);

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
                case 'filename':
                case 'namespace':
                case 'package':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'foreignKeyTables':
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
                case 'filename':
                case 'namespace':
                case 'package':
                    $values[$arrayKey] = $value;

                    break;
                case 'foreignKeyTables':
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
                case 'filename':
                case 'namespace':
                case 'package':
                    $values[$arrayKey] = $value;

                    break;
                case 'foreignKeyTables':
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
        $this->foreignKeyTables = $this->foreignKeyTables ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'filename' => $this->filename,
            'namespace' => $this->namespace,
            'package' => $this->package,
            'foreignKeyTables' => $this->foreignKeyTables,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'filename' => $this->filename,
            'namespace' => $this->namespace,
            'package' => $this->package,
            'foreign_key_tables' => $this->foreignKeyTables,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'filename' => $this->filename instanceof AbstractTransfer ? $this->filename->toArray(true, false) : $this->filename,
            'namespace' => $this->namespace instanceof AbstractTransfer ? $this->namespace->toArray(true, false) : $this->namespace,
            'package' => $this->package instanceof AbstractTransfer ? $this->package->toArray(true, false) : $this->package,
            'foreign_key_tables' => $this->foreignKeyTables instanceof AbstractTransfer ? $this->foreignKeyTables->toArray(true, false) : $this->addValuesToCollection($this->foreignKeyTables, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'filename' => $this->filename instanceof AbstractTransfer ? $this->filename->toArray(true, true) : $this->filename,
            'namespace' => $this->namespace instanceof AbstractTransfer ? $this->namespace->toArray(true, true) : $this->namespace,
            'package' => $this->package instanceof AbstractTransfer ? $this->package->toArray(true, true) : $this->package,
            'foreignKeyTables' => $this->foreignKeyTables instanceof AbstractTransfer ? $this->foreignKeyTables->toArray(true, true) : $this->addValuesToCollection($this->foreignKeyTables, true, true),
        ];
    }
}
