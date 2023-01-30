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
class FacetConfigTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PARAMETER_NAME = 'parameterName';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const TYPE = 'type';

    /**
     * @var string
     */
    public const FIELD_NAME = 'fieldName';

    /**
     * @var string
     */
    public const AGGREGATION_PARAMS = 'aggregationParams';

    /**
     * @var string
     */
    public const IS_MULTI_VALUED = 'isMultiValued';

    /**
     * @var string
     */
    public const VALUE_TRANSFORMER = 'valueTransformer';

    /**
     * @var string
     */
    public const SHORT_PARAMETER_NAME = 'shortParameterName';

    /**
     * @deprecated Use aggregationParams instead
     */
    public const SIZE = 'size';

    /**
     * @var string|null
     */
    protected $parameterName;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $type;

    /**
     * @var string|null
     */
    protected $fieldName;

    /**
     * @var array
     */
    protected $aggregationParams = [];

    /**
     * @var bool|null
     */
    protected $isMultiValued;

    /**
     * @var string|null
     */
    protected $valueTransformer;

    /**
     * @var string|null
     */
    protected $shortParameterName;

    /**
     * @var int|null
     */
    protected $size;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'parameter_name' => 'parameterName',
        'parameterName' => 'parameterName',
        'ParameterName' => 'parameterName',
        'name' => 'name',
        'Name' => 'name',
        'type' => 'type',
        'Type' => 'type',
        'field_name' => 'fieldName',
        'fieldName' => 'fieldName',
        'FieldName' => 'fieldName',
        'aggregation_params' => 'aggregationParams',
        'aggregationParams' => 'aggregationParams',
        'AggregationParams' => 'aggregationParams',
        'is_multi_valued' => 'isMultiValued',
        'isMultiValued' => 'isMultiValued',
        'IsMultiValued' => 'isMultiValued',
        'value_transformer' => 'valueTransformer',
        'valueTransformer' => 'valueTransformer',
        'ValueTransformer' => 'valueTransformer',
        'short_parameter_name' => 'shortParameterName',
        'shortParameterName' => 'shortParameterName',
        'ShortParameterName' => 'shortParameterName',
        'size' => 'size',
        'Size' => 'size',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PARAMETER_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'parameter_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FIELD_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'field_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AGGREGATION_PARAMS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'aggregation_params',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_MULTI_VALUED => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_multi_valued',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::VALUE_TRANSFORMER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'value_transformer',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SHORT_PARAMETER_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'short_parameter_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SIZE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'size',
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
     * @module CatalogPage|ProductReviewWidget|CatalogPriceProductConnector|Catalog|ProductLabelStorage|ProductLabel|ProductReview|ProductSearchConfigStorage|ProductSearch|SearchElasticsearch|Search
     *
     * @param string|null $parameterName
     *
     * @return $this
     */
    public function setParameterName($parameterName)
    {
        $this->parameterName = $parameterName;
        $this->modifiedProperties[self::PARAMETER_NAME] = true;

        return $this;
    }

    /**
     * @module CatalogPage|ProductReviewWidget|CatalogPriceProductConnector|Catalog|ProductLabelStorage|ProductLabel|ProductReview|ProductSearchConfigStorage|ProductSearch|SearchElasticsearch|Search
     *
     * @return string|null
     */
    public function getParameterName()
    {
        return $this->parameterName;
    }

    /**
     * @module CatalogPage|ProductReviewWidget|CatalogPriceProductConnector|Catalog|ProductLabelStorage|ProductLabel|ProductReview|ProductSearchConfigStorage|ProductSearch|SearchElasticsearch|Search
     *
     * @param string|null $parameterName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setParameterNameOrFail($parameterName)
    {
        if ($parameterName === null) {
            $this->throwNullValueException(static::PARAMETER_NAME);
        }

        return $this->setParameterName($parameterName);
    }

    /**
     * @module CatalogPage|ProductReviewWidget|CatalogPriceProductConnector|Catalog|ProductLabelStorage|ProductLabel|ProductReview|ProductSearchConfigStorage|ProductSearch|SearchElasticsearch|Search
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getParameterNameOrFail()
    {
        if ($this->parameterName === null) {
            $this->throwNullValueException(static::PARAMETER_NAME);
        }

        return $this->parameterName;
    }

    /**
     * @module CatalogPage|ProductReviewWidget|CatalogPriceProductConnector|Catalog|ProductLabelStorage|ProductLabel|ProductReview|ProductSearchConfigStorage|ProductSearch|SearchElasticsearch|Search
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireParameterName()
    {
        $this->assertPropertyIsSet(self::PARAMETER_NAME);

        return $this;
    }

    /**
     * @module CatalogPage|CatalogPriceProductConnector|Catalog|ProductLabelStorage|ProductLabel|ProductReview|ProductSearchConfigStorage|ProductSearch|SearchElasticsearch|Search
     *
     * @param string|null $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        $this->modifiedProperties[self::NAME] = true;

        return $this;
    }

    /**
     * @module CatalogPage|CatalogPriceProductConnector|Catalog|ProductLabelStorage|ProductLabel|ProductReview|ProductSearchConfigStorage|ProductSearch|SearchElasticsearch|Search
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module CatalogPage|CatalogPriceProductConnector|Catalog|ProductLabelStorage|ProductLabel|ProductReview|ProductSearchConfigStorage|ProductSearch|SearchElasticsearch|Search
     *
     * @param string|null $name
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNameOrFail($name)
    {
        if ($name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->setName($name);
    }

    /**
     * @module CatalogPage|CatalogPriceProductConnector|Catalog|ProductLabelStorage|ProductLabel|ProductReview|ProductSearchConfigStorage|ProductSearch|SearchElasticsearch|Search
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNameOrFail()
    {
        if ($this->name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->name;
    }

    /**
     * @module CatalogPage|CatalogPriceProductConnector|Catalog|ProductLabelStorage|ProductLabel|ProductReview|ProductSearchConfigStorage|ProductSearch|SearchElasticsearch|Search
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireName()
    {
        $this->assertPropertyIsSet(self::NAME);

        return $this;
    }

    /**
     * @module CatalogPage|CatalogPriceProductConnector|Catalog|ProductLabelStorage|ProductLabel|ProductReview|ProductSearch|SearchElasticsearch|Search
     *
     * @param string|null $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        $this->modifiedProperties[self::TYPE] = true;

        return $this;
    }

    /**
     * @module CatalogPage|CatalogPriceProductConnector|Catalog|ProductLabelStorage|ProductLabel|ProductReview|ProductSearch|SearchElasticsearch|Search
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @module CatalogPage|CatalogPriceProductConnector|Catalog|ProductLabelStorage|ProductLabel|ProductReview|ProductSearch|SearchElasticsearch|Search
     *
     * @param string|null $type
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTypeOrFail($type)
    {
        if ($type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->setType($type);
    }

    /**
     * @module CatalogPage|CatalogPriceProductConnector|Catalog|ProductLabelStorage|ProductLabel|ProductReview|ProductSearch|SearchElasticsearch|Search
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTypeOrFail()
    {
        if ($this->type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->type;
    }

    /**
     * @module CatalogPage|CatalogPriceProductConnector|Catalog|ProductLabelStorage|ProductLabel|ProductReview|ProductSearch|SearchElasticsearch|Search
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireType()
    {
        $this->assertPropertyIsSet(self::TYPE);

        return $this;
    }

    /**
     * @module CatalogPriceProductConnector|Catalog|ProductLabelStorage|ProductLabel|ProductReview|ProductSearch|SearchElasticsearch|Search
     *
     * @param string|null $fieldName
     *
     * @return $this
     */
    public function setFieldName($fieldName)
    {
        $this->fieldName = $fieldName;
        $this->modifiedProperties[self::FIELD_NAME] = true;

        return $this;
    }

    /**
     * @module CatalogPriceProductConnector|Catalog|ProductLabelStorage|ProductLabel|ProductReview|ProductSearch|SearchElasticsearch|Search
     *
     * @return string|null
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * @module CatalogPriceProductConnector|Catalog|ProductLabelStorage|ProductLabel|ProductReview|ProductSearch|SearchElasticsearch|Search
     *
     * @param string|null $fieldName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFieldNameOrFail($fieldName)
    {
        if ($fieldName === null) {
            $this->throwNullValueException(static::FIELD_NAME);
        }

        return $this->setFieldName($fieldName);
    }

    /**
     * @module CatalogPriceProductConnector|Catalog|ProductLabelStorage|ProductLabel|ProductReview|ProductSearch|SearchElasticsearch|Search
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getFieldNameOrFail()
    {
        if ($this->fieldName === null) {
            $this->throwNullValueException(static::FIELD_NAME);
        }

        return $this->fieldName;
    }

    /**
     * @module CatalogPriceProductConnector|Catalog|ProductLabelStorage|ProductLabel|ProductReview|ProductSearch|SearchElasticsearch|Search
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFieldName()
    {
        $this->assertPropertyIsSet(self::FIELD_NAME);

        return $this;
    }

    /**
     * @module Catalog|SearchElasticsearch|Search
     *
     * @param array|null $aggregationParams
     *
     * @return $this
     */
    public function setAggregationParams(array $aggregationParams = null)
    {
        if ($aggregationParams === null) {
            $aggregationParams = [];
        }

        $this->aggregationParams = $aggregationParams;
        $this->modifiedProperties[self::AGGREGATION_PARAMS] = true;

        return $this;
    }

    /**
     * @module Catalog|SearchElasticsearch|Search
     *
     * @return array
     */
    public function getAggregationParams()
    {
        return $this->aggregationParams;
    }

    /**
     * @module Catalog|SearchElasticsearch|Search
     *
     * @param mixed $aggregationParams
     *
     * @return $this
     */
    public function addAggregationParams($aggregationParams)
    {
        $this->aggregationParams[] = $aggregationParams;
        $this->modifiedProperties[self::AGGREGATION_PARAMS] = true;

        return $this;
    }

    /**
     * @module Catalog|SearchElasticsearch|Search
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAggregationParams()
    {
        $this->assertPropertyIsSet(self::AGGREGATION_PARAMS);

        return $this;
    }

    /**
     * @module ProductLabelStorage|ProductLabel|ProductSearch|SearchElasticsearch|Search
     *
     * @param bool|null $isMultiValued
     *
     * @return $this
     */
    public function setIsMultiValued($isMultiValued)
    {
        $this->isMultiValued = $isMultiValued;
        $this->modifiedProperties[self::IS_MULTI_VALUED] = true;

        return $this;
    }

    /**
     * @module ProductLabelStorage|ProductLabel|ProductSearch|SearchElasticsearch|Search
     *
     * @return bool|null
     */
    public function getIsMultiValued()
    {
        return $this->isMultiValued;
    }

    /**
     * @module ProductLabelStorage|ProductLabel|ProductSearch|SearchElasticsearch|Search
     *
     * @param bool|null $isMultiValued
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsMultiValuedOrFail($isMultiValued)
    {
        if ($isMultiValued === null) {
            $this->throwNullValueException(static::IS_MULTI_VALUED);
        }

        return $this->setIsMultiValued($isMultiValued);
    }

    /**
     * @module ProductLabelStorage|ProductLabel|ProductSearch|SearchElasticsearch|Search
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsMultiValuedOrFail()
    {
        if ($this->isMultiValued === null) {
            $this->throwNullValueException(static::IS_MULTI_VALUED);
        }

        return $this->isMultiValued;
    }

    /**
     * @module ProductLabelStorage|ProductLabel|ProductSearch|SearchElasticsearch|Search
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsMultiValued()
    {
        $this->assertPropertyIsSet(self::IS_MULTI_VALUED);

        return $this;
    }

    /**
     * @module ProductLabelStorage|ProductLabel|ProductReview|SearchElasticsearch|Search
     *
     * @param string|null $valueTransformer
     *
     * @return $this
     */
    public function setValueTransformer($valueTransformer)
    {
        $this->valueTransformer = $valueTransformer;
        $this->modifiedProperties[self::VALUE_TRANSFORMER] = true;

        return $this;
    }

    /**
     * @module ProductLabelStorage|ProductLabel|ProductReview|SearchElasticsearch|Search
     *
     * @return string|null
     */
    public function getValueTransformer()
    {
        return $this->valueTransformer;
    }

    /**
     * @module ProductLabelStorage|ProductLabel|ProductReview|SearchElasticsearch|Search
     *
     * @param string|null $valueTransformer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setValueTransformerOrFail($valueTransformer)
    {
        if ($valueTransformer === null) {
            $this->throwNullValueException(static::VALUE_TRANSFORMER);
        }

        return $this->setValueTransformer($valueTransformer);
    }

    /**
     * @module ProductLabelStorage|ProductLabel|ProductReview|SearchElasticsearch|Search
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getValueTransformerOrFail()
    {
        if ($this->valueTransformer === null) {
            $this->throwNullValueException(static::VALUE_TRANSFORMER);
        }

        return $this->valueTransformer;
    }

    /**
     * @module ProductLabelStorage|ProductLabel|ProductReview|SearchElasticsearch|Search
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireValueTransformer()
    {
        $this->assertPropertyIsSet(self::VALUE_TRANSFORMER);

        return $this;
    }

    /**
     * @module SearchElasticsearch|Search
     *
     * @param string|null $shortParameterName
     *
     * @return $this
     */
    public function setShortParameterName($shortParameterName)
    {
        $this->shortParameterName = $shortParameterName;
        $this->modifiedProperties[self::SHORT_PARAMETER_NAME] = true;

        return $this;
    }

    /**
     * @module SearchElasticsearch|Search
     *
     * @return string|null
     */
    public function getShortParameterName()
    {
        return $this->shortParameterName;
    }

    /**
     * @module SearchElasticsearch|Search
     *
     * @param string|null $shortParameterName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setShortParameterNameOrFail($shortParameterName)
    {
        if ($shortParameterName === null) {
            $this->throwNullValueException(static::SHORT_PARAMETER_NAME);
        }

        return $this->setShortParameterName($shortParameterName);
    }

    /**
     * @module SearchElasticsearch|Search
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getShortParameterNameOrFail()
    {
        if ($this->shortParameterName === null) {
            $this->throwNullValueException(static::SHORT_PARAMETER_NAME);
        }

        return $this->shortParameterName;
    }

    /**
     * @module SearchElasticsearch|Search
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireShortParameterName()
    {
        $this->assertPropertyIsSet(self::SHORT_PARAMETER_NAME);

        return $this;
    }

    /**
     * @module Search
     *
     * @deprecated Use aggregationParams instead
     *
     * @param int|null $size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->size = $size;
        $this->modifiedProperties[self::SIZE] = true;

        return $this;
    }

    /**
     * @module Search
     *
     * @deprecated Use aggregationParams instead
     *
     * @return int|null
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @module Search
     *
     * @deprecated Use aggregationParams instead
     *
     * @param int|null $size
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSizeOrFail($size)
    {
        if ($size === null) {
            $this->throwNullValueException(static::SIZE);
        }

        return $this->setSize($size);
    }

    /**
     * @module Search
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use aggregationParams instead
     *
     * @return int
     */
    public function getSizeOrFail()
    {
        if ($this->size === null) {
            $this->throwNullValueException(static::SIZE);
        }

        return $this->size;
    }

    /**
     * @module Search
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use aggregationParams instead
     *
     * @return $this
     */
    public function requireSize()
    {
        $this->assertPropertyIsSet(self::SIZE);

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
                case 'parameterName':
                case 'name':
                case 'type':
                case 'fieldName':
                case 'aggregationParams':
                case 'isMultiValued':
                case 'valueTransformer':
                case 'shortParameterName':
                case 'size':
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
                case 'parameterName':
                case 'name':
                case 'type':
                case 'fieldName':
                case 'aggregationParams':
                case 'isMultiValued':
                case 'valueTransformer':
                case 'shortParameterName':
                case 'size':
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
                case 'parameterName':
                case 'name':
                case 'type':
                case 'fieldName':
                case 'aggregationParams':
                case 'isMultiValued':
                case 'valueTransformer':
                case 'shortParameterName':
                case 'size':
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
            'parameterName' => $this->parameterName,
            'name' => $this->name,
            'type' => $this->type,
            'fieldName' => $this->fieldName,
            'aggregationParams' => $this->aggregationParams,
            'isMultiValued' => $this->isMultiValued,
            'valueTransformer' => $this->valueTransformer,
            'shortParameterName' => $this->shortParameterName,
            'size' => $this->size,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'parameter_name' => $this->parameterName,
            'name' => $this->name,
            'type' => $this->type,
            'field_name' => $this->fieldName,
            'aggregation_params' => $this->aggregationParams,
            'is_multi_valued' => $this->isMultiValued,
            'value_transformer' => $this->valueTransformer,
            'short_parameter_name' => $this->shortParameterName,
            'size' => $this->size,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'parameter_name' => $this->parameterName instanceof AbstractTransfer ? $this->parameterName->toArray(true, false) : $this->parameterName,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, false) : $this->type,
            'field_name' => $this->fieldName instanceof AbstractTransfer ? $this->fieldName->toArray(true, false) : $this->fieldName,
            'aggregation_params' => $this->aggregationParams instanceof AbstractTransfer ? $this->aggregationParams->toArray(true, false) : $this->aggregationParams,
            'is_multi_valued' => $this->isMultiValued instanceof AbstractTransfer ? $this->isMultiValued->toArray(true, false) : $this->isMultiValued,
            'value_transformer' => $this->valueTransformer instanceof AbstractTransfer ? $this->valueTransformer->toArray(true, false) : $this->valueTransformer,
            'short_parameter_name' => $this->shortParameterName instanceof AbstractTransfer ? $this->shortParameterName->toArray(true, false) : $this->shortParameterName,
            'size' => $this->size instanceof AbstractTransfer ? $this->size->toArray(true, false) : $this->size,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'parameterName' => $this->parameterName instanceof AbstractTransfer ? $this->parameterName->toArray(true, true) : $this->parameterName,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, true) : $this->type,
            'fieldName' => $this->fieldName instanceof AbstractTransfer ? $this->fieldName->toArray(true, true) : $this->fieldName,
            'aggregationParams' => $this->aggregationParams instanceof AbstractTransfer ? $this->aggregationParams->toArray(true, true) : $this->aggregationParams,
            'isMultiValued' => $this->isMultiValued instanceof AbstractTransfer ? $this->isMultiValued->toArray(true, true) : $this->isMultiValued,
            'valueTransformer' => $this->valueTransformer instanceof AbstractTransfer ? $this->valueTransformer->toArray(true, true) : $this->valueTransformer,
            'shortParameterName' => $this->shortParameterName instanceof AbstractTransfer ? $this->shortParameterName->toArray(true, true) : $this->shortParameterName,
            'size' => $this->size instanceof AbstractTransfer ? $this->size->toArray(true, true) : $this->size,
        ];
    }
}
