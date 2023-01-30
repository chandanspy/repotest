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
class RestRangeSearchResultTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const LOCALIZED_NAME = 'localizedName';

    /**
     * @var string
     */
    public const MIN = 'min';

    /**
     * @var string
     */
    public const MAX = 'max';

    /**
     * @var string
     */
    public const ACTIVE_MIN = 'activeMin';

    /**
     * @var string
     */
    public const ACTIVE_MAX = 'activeMax';

    /**
     * @var string
     */
    public const DOC_COUNT = 'docCount';

    /**
     * @var string
     */
    public const CONFIG = 'config';

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $localizedName;

    /**
     * @var float|null
     */
    protected $min;

    /**
     * @var float|null
     */
    protected $max;

    /**
     * @var float|null
     */
    protected $activeMin;

    /**
     * @var float|null
     */
    protected $activeMax;

    /**
     * @var int|null
     */
    protected $docCount;

    /**
     * @var \Generated\Shared\Transfer\RestFacetConfigTransfer|null
     */
    protected $config;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'name' => 'name',
        'Name' => 'name',
        'localized_name' => 'localizedName',
        'localizedName' => 'localizedName',
        'LocalizedName' => 'localizedName',
        'min' => 'min',
        'Min' => 'min',
        'max' => 'max',
        'Max' => 'max',
        'active_min' => 'activeMin',
        'activeMin' => 'activeMin',
        'ActiveMin' => 'activeMin',
        'active_max' => 'activeMax',
        'activeMax' => 'activeMax',
        'ActiveMax' => 'activeMax',
        'doc_count' => 'docCount',
        'docCount' => 'docCount',
        'DocCount' => 'docCount',
        'config' => 'config',
        'Config' => 'config',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::LOCALIZED_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'localized_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MIN => [
            'type' => 'float',
            'type_shim' => null,
            'name_underscore' => 'min',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MAX => [
            'type' => 'float',
            'type_shim' => null,
            'name_underscore' => 'max',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ACTIVE_MIN => [
            'type' => 'float',
            'type_shim' => null,
            'name_underscore' => 'active_min',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ACTIVE_MAX => [
            'type' => 'float',
            'type_shim' => null,
            'name_underscore' => 'active_max',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DOC_COUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'doc_count',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONFIG => [
            'type' => 'Generated\Shared\Transfer\RestFacetConfigTransfer',
            'type_shim' => null,
            'name_underscore' => 'config',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module CatalogSearchRestApi
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
     * @module CatalogSearchRestApi
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module CatalogSearchRestApi
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
     * @module CatalogSearchRestApi
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
     * @module CatalogSearchRestApi
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
     * @module CatalogSearchRestApi
     *
     * @param string|null $localizedName
     *
     * @return $this
     */
    public function setLocalizedName($localizedName)
    {
        $this->localizedName = $localizedName;
        $this->modifiedProperties[self::LOCALIZED_NAME] = true;

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @return string|null
     */
    public function getLocalizedName()
    {
        return $this->localizedName;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @param string|null $localizedName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLocalizedNameOrFail($localizedName)
    {
        if ($localizedName === null) {
            $this->throwNullValueException(static::LOCALIZED_NAME);
        }

        return $this->setLocalizedName($localizedName);
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getLocalizedNameOrFail()
    {
        if ($this->localizedName === null) {
            $this->throwNullValueException(static::LOCALIZED_NAME);
        }

        return $this->localizedName;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocalizedName()
    {
        $this->assertPropertyIsSet(self::LOCALIZED_NAME);

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @param float|null $min
     *
     * @return $this
     */
    public function setMin($min)
    {
        $this->min = $min;
        $this->modifiedProperties[self::MIN] = true;

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @return float|null
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @param float|null $min
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMinOrFail($min)
    {
        if ($min === null) {
            $this->throwNullValueException(static::MIN);
        }

        return $this->setMin($min);
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return float
     */
    public function getMinOrFail()
    {
        if ($this->min === null) {
            $this->throwNullValueException(static::MIN);
        }

        return $this->min;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMin()
    {
        $this->assertPropertyIsSet(self::MIN);

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @param float|null $max
     *
     * @return $this
     */
    public function setMax($max)
    {
        $this->max = $max;
        $this->modifiedProperties[self::MAX] = true;

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @return float|null
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @param float|null $max
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMaxOrFail($max)
    {
        if ($max === null) {
            $this->throwNullValueException(static::MAX);
        }

        return $this->setMax($max);
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return float
     */
    public function getMaxOrFail()
    {
        if ($this->max === null) {
            $this->throwNullValueException(static::MAX);
        }

        return $this->max;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMax()
    {
        $this->assertPropertyIsSet(self::MAX);

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @param float|null $activeMin
     *
     * @return $this
     */
    public function setActiveMin($activeMin)
    {
        $this->activeMin = $activeMin;
        $this->modifiedProperties[self::ACTIVE_MIN] = true;

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @return float|null
     */
    public function getActiveMin()
    {
        return $this->activeMin;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @param float|null $activeMin
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setActiveMinOrFail($activeMin)
    {
        if ($activeMin === null) {
            $this->throwNullValueException(static::ACTIVE_MIN);
        }

        return $this->setActiveMin($activeMin);
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return float
     */
    public function getActiveMinOrFail()
    {
        if ($this->activeMin === null) {
            $this->throwNullValueException(static::ACTIVE_MIN);
        }

        return $this->activeMin;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireActiveMin()
    {
        $this->assertPropertyIsSet(self::ACTIVE_MIN);

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @param float|null $activeMax
     *
     * @return $this
     */
    public function setActiveMax($activeMax)
    {
        $this->activeMax = $activeMax;
        $this->modifiedProperties[self::ACTIVE_MAX] = true;

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @return float|null
     */
    public function getActiveMax()
    {
        return $this->activeMax;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @param float|null $activeMax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setActiveMaxOrFail($activeMax)
    {
        if ($activeMax === null) {
            $this->throwNullValueException(static::ACTIVE_MAX);
        }

        return $this->setActiveMax($activeMax);
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return float
     */
    public function getActiveMaxOrFail()
    {
        if ($this->activeMax === null) {
            $this->throwNullValueException(static::ACTIVE_MAX);
        }

        return $this->activeMax;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireActiveMax()
    {
        $this->assertPropertyIsSet(self::ACTIVE_MAX);

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @param int|null $docCount
     *
     * @return $this
     */
    public function setDocCount($docCount)
    {
        $this->docCount = $docCount;
        $this->modifiedProperties[self::DOC_COUNT] = true;

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @return int|null
     */
    public function getDocCount()
    {
        return $this->docCount;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @param int|null $docCount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDocCountOrFail($docCount)
    {
        if ($docCount === null) {
            $this->throwNullValueException(static::DOC_COUNT);
        }

        return $this->setDocCount($docCount);
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getDocCountOrFail()
    {
        if ($this->docCount === null) {
            $this->throwNullValueException(static::DOC_COUNT);
        }

        return $this->docCount;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDocCount()
    {
        $this->assertPropertyIsSet(self::DOC_COUNT);

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @param \Generated\Shared\Transfer\RestFacetConfigTransfer|null $config
     *
     * @return $this
     */
    public function setConfig(RestFacetConfigTransfer $config = null)
    {
        $this->config = $config;
        $this->modifiedProperties[self::CONFIG] = true;

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @return \Generated\Shared\Transfer\RestFacetConfigTransfer|null
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @param \Generated\Shared\Transfer\RestFacetConfigTransfer $config
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setConfigOrFail(RestFacetConfigTransfer $config)
    {
        return $this->setConfig($config);
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\RestFacetConfigTransfer
     */
    public function getConfigOrFail()
    {
        if ($this->config === null) {
            $this->throwNullValueException(static::CONFIG);
        }

        return $this->config;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConfig()
    {
        $this->assertPropertyIsSet(self::CONFIG);

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
                case 'name':
                case 'localizedName':
                case 'min':
                case 'max':
                case 'activeMin':
                case 'activeMax':
                case 'docCount':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'config':
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
                case 'name':
                case 'localizedName':
                case 'min':
                case 'max':
                case 'activeMin':
                case 'activeMax':
                case 'docCount':
                    $values[$arrayKey] = $value;

                    break;
                case 'config':
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
                case 'name':
                case 'localizedName':
                case 'min':
                case 'max':
                case 'activeMin':
                case 'activeMax':
                case 'docCount':
                    $values[$arrayKey] = $value;

                    break;
                case 'config':
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
            'name' => $this->name,
            'localizedName' => $this->localizedName,
            'min' => $this->min,
            'max' => $this->max,
            'activeMin' => $this->activeMin,
            'activeMax' => $this->activeMax,
            'docCount' => $this->docCount,
            'config' => $this->config,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name,
            'localized_name' => $this->localizedName,
            'min' => $this->min,
            'max' => $this->max,
            'active_min' => $this->activeMin,
            'active_max' => $this->activeMax,
            'doc_count' => $this->docCount,
            'config' => $this->config,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'localized_name' => $this->localizedName instanceof AbstractTransfer ? $this->localizedName->toArray(true, false) : $this->localizedName,
            'min' => $this->min instanceof AbstractTransfer ? $this->min->toArray(true, false) : $this->min,
            'max' => $this->max instanceof AbstractTransfer ? $this->max->toArray(true, false) : $this->max,
            'active_min' => $this->activeMin instanceof AbstractTransfer ? $this->activeMin->toArray(true, false) : $this->activeMin,
            'active_max' => $this->activeMax instanceof AbstractTransfer ? $this->activeMax->toArray(true, false) : $this->activeMax,
            'doc_count' => $this->docCount instanceof AbstractTransfer ? $this->docCount->toArray(true, false) : $this->docCount,
            'config' => $this->config instanceof AbstractTransfer ? $this->config->toArray(true, false) : $this->config,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'localizedName' => $this->localizedName instanceof AbstractTransfer ? $this->localizedName->toArray(true, true) : $this->localizedName,
            'min' => $this->min instanceof AbstractTransfer ? $this->min->toArray(true, true) : $this->min,
            'max' => $this->max instanceof AbstractTransfer ? $this->max->toArray(true, true) : $this->max,
            'activeMin' => $this->activeMin instanceof AbstractTransfer ? $this->activeMin->toArray(true, true) : $this->activeMin,
            'activeMax' => $this->activeMax instanceof AbstractTransfer ? $this->activeMax->toArray(true, true) : $this->activeMax,
            'docCount' => $this->docCount instanceof AbstractTransfer ? $this->docCount->toArray(true, true) : $this->docCount,
            'config' => $this->config instanceof AbstractTransfer ? $this->config->toArray(true, true) : $this->config,
        ];
    }
}
