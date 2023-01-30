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
class ElasticsearchSearchContextTransfer extends AbstractTransfer
{
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
    public const SEARCH_STRING = 'searchString';

    /**
     * @var string
     */
    public const INDEX_NAME = 'indexName';

    /**
     * @var string
     */
    public const TYPE_NAME = 'typeName';

    /**
     * @var int|null
     */
    protected $limit;

    /**
     * @var int|null
     */
    protected $offset;

    /**
     * @var string|null
     */
    protected $searchString;

    /**
     * @var string|null
     */
    protected $indexName;

    /**
     * @var string|null
     */
    protected $typeName;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'limit' => 'limit',
        'Limit' => 'limit',
        'offset' => 'offset',
        'Offset' => 'offset',
        'search_string' => 'searchString',
        'searchString' => 'searchString',
        'SearchString' => 'searchString',
        'index_name' => 'indexName',
        'indexName' => 'indexName',
        'IndexName' => 'indexName',
        'type_name' => 'typeName',
        'typeName' => 'typeName',
        'TypeName' => 'typeName',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::SEARCH_STRING => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'search_string',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::INDEX_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'index_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TYPE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'type_name',
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
     * @module SearchElasticsearchGui
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
     * @module SearchElasticsearchGui
     *
     * @return int|null
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @module SearchElasticsearchGui
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
     * @module SearchElasticsearchGui
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
     * @module SearchElasticsearchGui
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
     * @module SearchElasticsearchGui
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
     * @module SearchElasticsearchGui
     *
     * @return int|null
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @module SearchElasticsearchGui
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
     * @module SearchElasticsearchGui
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
     * @module SearchElasticsearchGui
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
     * @module SearchElasticsearchGui
     *
     * @param string|null $searchString
     *
     * @return $this
     */
    public function setSearchString($searchString)
    {
        $this->searchString = $searchString;
        $this->modifiedProperties[self::SEARCH_STRING] = true;

        return $this;
    }

    /**
     * @module SearchElasticsearchGui
     *
     * @return string|null
     */
    public function getSearchString()
    {
        return $this->searchString;
    }

    /**
     * @module SearchElasticsearchGui
     *
     * @param string|null $searchString
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSearchStringOrFail($searchString)
    {
        if ($searchString === null) {
            $this->throwNullValueException(static::SEARCH_STRING);
        }

        return $this->setSearchString($searchString);
    }

    /**
     * @module SearchElasticsearchGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSearchStringOrFail()
    {
        if ($this->searchString === null) {
            $this->throwNullValueException(static::SEARCH_STRING);
        }

        return $this->searchString;
    }

    /**
     * @module SearchElasticsearchGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSearchString()
    {
        $this->assertPropertyIsSet(self::SEARCH_STRING);

        return $this;
    }

    /**
     * @module SearchElasticsearchGui|SearchElasticsearch
     *
     * @param string|null $indexName
     *
     * @return $this
     */
    public function setIndexName($indexName)
    {
        $this->indexName = $indexName;
        $this->modifiedProperties[self::INDEX_NAME] = true;

        return $this;
    }

    /**
     * @module SearchElasticsearchGui|SearchElasticsearch
     *
     * @return string|null
     */
    public function getIndexName()
    {
        return $this->indexName;
    }

    /**
     * @module SearchElasticsearchGui|SearchElasticsearch
     *
     * @param string|null $indexName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIndexNameOrFail($indexName)
    {
        if ($indexName === null) {
            $this->throwNullValueException(static::INDEX_NAME);
        }

        return $this->setIndexName($indexName);
    }

    /**
     * @module SearchElasticsearchGui|SearchElasticsearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIndexNameOrFail()
    {
        if ($this->indexName === null) {
            $this->throwNullValueException(static::INDEX_NAME);
        }

        return $this->indexName;
    }

    /**
     * @module SearchElasticsearchGui|SearchElasticsearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIndexName()
    {
        $this->assertPropertyIsSet(self::INDEX_NAME);

        return $this;
    }

    /**
     * @module SearchElasticsearchGui|SearchElasticsearch
     *
     * @param string|null $typeName
     *
     * @return $this
     */
    public function setTypeName($typeName)
    {
        $this->typeName = $typeName;
        $this->modifiedProperties[self::TYPE_NAME] = true;

        return $this;
    }

    /**
     * @module SearchElasticsearchGui|SearchElasticsearch
     *
     * @return string|null
     */
    public function getTypeName()
    {
        return $this->typeName;
    }

    /**
     * @module SearchElasticsearchGui|SearchElasticsearch
     *
     * @param string|null $typeName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTypeNameOrFail($typeName)
    {
        if ($typeName === null) {
            $this->throwNullValueException(static::TYPE_NAME);
        }

        return $this->setTypeName($typeName);
    }

    /**
     * @module SearchElasticsearchGui|SearchElasticsearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTypeNameOrFail()
    {
        if ($this->typeName === null) {
            $this->throwNullValueException(static::TYPE_NAME);
        }

        return $this->typeName;
    }

    /**
     * @module SearchElasticsearchGui|SearchElasticsearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTypeName()
    {
        $this->assertPropertyIsSet(self::TYPE_NAME);

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
                case 'limit':
                case 'offset':
                case 'searchString':
                case 'indexName':
                case 'typeName':
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
                case 'limit':
                case 'offset':
                case 'searchString':
                case 'indexName':
                case 'typeName':
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
                case 'limit':
                case 'offset':
                case 'searchString':
                case 'indexName':
                case 'typeName':
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
            'limit' => $this->limit,
            'offset' => $this->offset,
            'searchString' => $this->searchString,
            'indexName' => $this->indexName,
            'typeName' => $this->typeName,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'limit' => $this->limit,
            'offset' => $this->offset,
            'search_string' => $this->searchString,
            'index_name' => $this->indexName,
            'type_name' => $this->typeName,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'limit' => $this->limit instanceof AbstractTransfer ? $this->limit->toArray(true, false) : $this->limit,
            'offset' => $this->offset instanceof AbstractTransfer ? $this->offset->toArray(true, false) : $this->offset,
            'search_string' => $this->searchString instanceof AbstractTransfer ? $this->searchString->toArray(true, false) : $this->searchString,
            'index_name' => $this->indexName instanceof AbstractTransfer ? $this->indexName->toArray(true, false) : $this->indexName,
            'type_name' => $this->typeName instanceof AbstractTransfer ? $this->typeName->toArray(true, false) : $this->typeName,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'limit' => $this->limit instanceof AbstractTransfer ? $this->limit->toArray(true, true) : $this->limit,
            'offset' => $this->offset instanceof AbstractTransfer ? $this->offset->toArray(true, true) : $this->offset,
            'searchString' => $this->searchString instanceof AbstractTransfer ? $this->searchString->toArray(true, true) : $this->searchString,
            'indexName' => $this->indexName instanceof AbstractTransfer ? $this->indexName->toArray(true, true) : $this->indexName,
            'typeName' => $this->typeName instanceof AbstractTransfer ? $this->typeName->toArray(true, true) : $this->typeName,
        ];
    }
}
