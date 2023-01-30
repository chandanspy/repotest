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
class RestFacetConfigTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PARAMETER_NAME = 'parameterName';

    /**
     * @var string
     */
    public const IS_MULTI_VALUED = 'isMultiValued';

    /**
     * @var string|null
     */
    protected $parameterName;

    /**
     * @var bool|null
     */
    protected $isMultiValued;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'parameter_name' => 'parameterName',
        'parameterName' => 'parameterName',
        'ParameterName' => 'parameterName',
        'is_multi_valued' => 'isMultiValued',
        'isMultiValued' => 'isMultiValued',
        'IsMultiValued' => 'isMultiValued',
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
    ];

    /**
     * @module CatalogSearchRestApi
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
     * @module CatalogSearchRestApi
     *
     * @return string|null
     */
    public function getParameterName()
    {
        return $this->parameterName;
    }

    /**
     * @module CatalogSearchRestApi
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
     * @module CatalogSearchRestApi
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
     * @module CatalogSearchRestApi
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
     * @module CatalogSearchRestApi
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
     * @module CatalogSearchRestApi
     *
     * @return bool|null
     */
    public function getIsMultiValued()
    {
        return $this->isMultiValued;
    }

    /**
     * @module CatalogSearchRestApi
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
     * @module CatalogSearchRestApi
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
     * @module CatalogSearchRestApi
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
                case 'isMultiValued':
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
                case 'isMultiValued':
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
                case 'isMultiValued':
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
            'isMultiValued' => $this->isMultiValued,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'parameter_name' => $this->parameterName,
            'is_multi_valued' => $this->isMultiValued,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'parameter_name' => $this->parameterName instanceof AbstractTransfer ? $this->parameterName->toArray(true, false) : $this->parameterName,
            'is_multi_valued' => $this->isMultiValued instanceof AbstractTransfer ? $this->isMultiValued->toArray(true, false) : $this->isMultiValued,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'parameterName' => $this->parameterName instanceof AbstractTransfer ? $this->parameterName->toArray(true, true) : $this->parameterName,
            'isMultiValued' => $this->isMultiValued instanceof AbstractTransfer ? $this->isMultiValued->toArray(true, true) : $this->isMultiValued,
        ];
    }
}
