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
class ProductConcreteCriteriaFilterTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const REQUEST_PARAMS = 'requestParams';

    /**
     * @var string
     */
    public const EXCLUDED_PRODUCT_IDS = 'excludedProductIds';

    /**
     * @var string
     */
    public const SEARCH_STRING = 'searchString';

    /**
     * @var string
     */
    public const LIMIT = 'limit';

    /**
     * @var array
     */
    protected $requestParams = [];

    /**
     * @var int[]
     */
    protected $excludedProductIds = [];

    /**
     * @var string|null
     */
    protected $searchString;

    /**
     * @var int|null
     */
    protected $limit;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'request_params' => 'requestParams',
        'requestParams' => 'requestParams',
        'RequestParams' => 'requestParams',
        'excluded_product_ids' => 'excludedProductIds',
        'excludedProductIds' => 'excludedProductIds',
        'ExcludedProductIds' => 'excludedProductIds',
        'search_string' => 'searchString',
        'searchString' => 'searchString',
        'SearchString' => 'searchString',
        'limit' => 'limit',
        'Limit' => 'limit',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::REQUEST_PARAMS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'request_params',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::EXCLUDED_PRODUCT_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'excluded_product_ids',
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
    ];

    /**
     * @module ConfigurableBundlePage|ProductSearchWidget|Catalog|ConfigurableBundlesProductsResourceRelationship|ProductPageSearch
     *
     * @param array|null $requestParams
     *
     * @return $this
     */
    public function setRequestParams(array $requestParams = null)
    {
        if ($requestParams === null) {
            $requestParams = [];
        }

        $this->requestParams = $requestParams;
        $this->modifiedProperties[self::REQUEST_PARAMS] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlePage|ProductSearchWidget|Catalog|ConfigurableBundlesProductsResourceRelationship|ProductPageSearch
     *
     * @return array
     */
    public function getRequestParams()
    {
        return $this->requestParams;
    }

    /**
     * @module ConfigurableBundlePage|ProductSearchWidget|Catalog|ConfigurableBundlesProductsResourceRelationship|ProductPageSearch
     *
     * @param mixed $requestParams
     *
     * @return $this
     */
    public function addRequestParams($requestParams)
    {
        $this->requestParams[] = $requestParams;
        $this->modifiedProperties[self::REQUEST_PARAMS] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlePage|ProductSearchWidget|Catalog|ConfigurableBundlesProductsResourceRelationship|ProductPageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRequestParams()
    {
        $this->assertPropertyIsSet(self::REQUEST_PARAMS);

        return $this;
    }

    /**
     * @module ConfigurableBundlePage|ProductSearchWidget
     *
     * @param int[]|null $excludedProductIds
     *
     * @return $this
     */
    public function setExcludedProductIds(array $excludedProductIds = null)
    {
        if ($excludedProductIds === null) {
            $excludedProductIds = [];
        }

        $this->excludedProductIds = $excludedProductIds;
        $this->modifiedProperties[self::EXCLUDED_PRODUCT_IDS] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlePage|ProductSearchWidget
     *
     * @return int[]
     */
    public function getExcludedProductIds()
    {
        return $this->excludedProductIds;
    }

    /**
     * @module ConfigurableBundlePage|ProductSearchWidget
     *
     * @param int $excludedProductId
     *
     * @return $this
     */
    public function addExcludedProductId($excludedProductId)
    {
        $this->excludedProductIds[] = $excludedProductId;
        $this->modifiedProperties[self::EXCLUDED_PRODUCT_IDS] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlePage|ProductSearchWidget
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireExcludedProductIds()
    {
        $this->assertPropertyIsSet(self::EXCLUDED_PRODUCT_IDS);

        return $this;
    }

    /**
     * @module ProductSearchWidget|Catalog|ProductPageSearch
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
     * @module ProductSearchWidget|Catalog|ProductPageSearch
     *
     * @return string|null
     */
    public function getSearchString()
    {
        return $this->searchString;
    }

    /**
     * @module ProductSearchWidget|Catalog|ProductPageSearch
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
     * @module ProductSearchWidget|Catalog|ProductPageSearch
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
     * @module ProductSearchWidget|Catalog|ProductPageSearch
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
     * @module ProductSearchWidget|Catalog|ProductPageSearch
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
     * @module ProductSearchWidget|Catalog|ProductPageSearch
     *
     * @return int|null
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @module ProductSearchWidget|Catalog|ProductPageSearch
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
     * @module ProductSearchWidget|Catalog|ProductPageSearch
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
     * @module ProductSearchWidget|Catalog|ProductPageSearch
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
                case 'requestParams':
                case 'excludedProductIds':
                case 'searchString':
                case 'limit':
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
                case 'requestParams':
                case 'excludedProductIds':
                case 'searchString':
                case 'limit':
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
                case 'requestParams':
                case 'excludedProductIds':
                case 'searchString':
                case 'limit':
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
            'requestParams' => $this->requestParams,
            'excludedProductIds' => $this->excludedProductIds,
            'searchString' => $this->searchString,
            'limit' => $this->limit,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'request_params' => $this->requestParams,
            'excluded_product_ids' => $this->excludedProductIds,
            'search_string' => $this->searchString,
            'limit' => $this->limit,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'request_params' => $this->requestParams instanceof AbstractTransfer ? $this->requestParams->toArray(true, false) : $this->requestParams,
            'excluded_product_ids' => $this->excludedProductIds instanceof AbstractTransfer ? $this->excludedProductIds->toArray(true, false) : $this->excludedProductIds,
            'search_string' => $this->searchString instanceof AbstractTransfer ? $this->searchString->toArray(true, false) : $this->searchString,
            'limit' => $this->limit instanceof AbstractTransfer ? $this->limit->toArray(true, false) : $this->limit,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'requestParams' => $this->requestParams instanceof AbstractTransfer ? $this->requestParams->toArray(true, true) : $this->requestParams,
            'excludedProductIds' => $this->excludedProductIds instanceof AbstractTransfer ? $this->excludedProductIds->toArray(true, true) : $this->excludedProductIds,
            'searchString' => $this->searchString instanceof AbstractTransfer ? $this->searchString->toArray(true, true) : $this->searchString,
            'limit' => $this->limit instanceof AbstractTransfer ? $this->limit->toArray(true, true) : $this->limit,
        ];
    }
}
