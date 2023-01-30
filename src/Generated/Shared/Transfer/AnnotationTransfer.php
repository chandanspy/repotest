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
class AnnotationTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PATH = 'path';

    /**
     * @var string
     */
    public const SUMMARY = 'summary';

    /**
     * @var string
     */
    public const PARAMETERS = 'parameters';

    /**
     * @var string
     */
    public const RESPONSE_ATTRIBUTES_CLASS_NAME = 'responseAttributesClassName';

    /**
     * @var string
     */
    public const IS_EMPTY_RESPONSE = 'isEmptyResponse';

    /**
     * @var string
     */
    public const RESPONSES = 'responses';

    /**
     * @var string
     */
    public const IS_ID_NULLABLE = 'isIdNullable';

    /**
     * @var string
     */
    public const DEPRECATED = 'deprecated';

    /**
     * @var string|null
     */
    protected $path;

    /**
     * @var string[]
     */
    protected $summary = [];

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\PathParameterComponentTransfer[]
     */
    protected $parameters;

    /**
     * @var string|null
     */
    protected $responseAttributesClassName;

    /**
     * @var bool|null
     */
    protected $isEmptyResponse;

    /**
     * @var array
     */
    protected $responses = [];

    /**
     * @var bool|null
     */
    protected $isIdNullable;

    /**
     * @var bool|null
     */
    protected $deprecated;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'path' => 'path',
        'Path' => 'path',
        'summary' => 'summary',
        'Summary' => 'summary',
        'parameters' => 'parameters',
        'Parameters' => 'parameters',
        'response_attributes_class_name' => 'responseAttributesClassName',
        'responseAttributesClassName' => 'responseAttributesClassName',
        'ResponseAttributesClassName' => 'responseAttributesClassName',
        'is_empty_response' => 'isEmptyResponse',
        'isEmptyResponse' => 'isEmptyResponse',
        'IsEmptyResponse' => 'isEmptyResponse',
        'responses' => 'responses',
        'Responses' => 'responses',
        'is_id_nullable' => 'isIdNullable',
        'isIdNullable' => 'isIdNullable',
        'IsIdNullable' => 'isIdNullable',
        'deprecated' => 'deprecated',
        'Deprecated' => 'deprecated',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PATH => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'path',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SUMMARY => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'summary',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PARAMETERS => [
            'type' => 'Generated\Shared\Transfer\PathParameterComponentTransfer',
            'type_shim' => null,
            'name_underscore' => 'parameters',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::RESPONSE_ATTRIBUTES_CLASS_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'response_attributes_class_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_EMPTY_RESPONSE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_empty_response',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::RESPONSES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'responses',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_ID_NULLABLE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_id_nullable',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DEPRECATED => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'deprecated',
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
     * @module DocumentationGeneratorRestApi
     *
     * @param string|null $path
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->path = $path;
        $this->modifiedProperties[self::PATH] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @return string|null
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param string|null $path
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPathOrFail($path)
    {
        if ($path === null) {
            $this->throwNullValueException(static::PATH);
        }

        return $this->setPath($path);
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPathOrFail()
    {
        if ($this->path === null) {
            $this->throwNullValueException(static::PATH);
        }

        return $this->path;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePath()
    {
        $this->assertPropertyIsSet(self::PATH);

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param string[]|null $summary
     *
     * @return $this
     */
    public function setSummary(array $summary = null)
    {
        if ($summary === null) {
            $summary = [];
        }

        $this->summary = $summary;
        $this->modifiedProperties[self::SUMMARY] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @return string[]
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param string $summary
     *
     * @return $this
     */
    public function addSummary($summary)
    {
        $this->summary[] = $summary;
        $this->modifiedProperties[self::SUMMARY] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSummary()
    {
        $this->assertPropertyIsSet(self::SUMMARY);

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\PathParameterComponentTransfer[] $parameters
     *
     * @return $this
     */
    public function setParameters(ArrayObject $parameters)
    {
        $this->parameters = $parameters;
        $this->modifiedProperties[self::PARAMETERS] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\PathParameterComponentTransfer[]
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param \Generated\Shared\Transfer\PathParameterComponentTransfer $parameter
     *
     * @return $this
     */
    public function addParameter(PathParameterComponentTransfer $parameter)
    {
        $this->parameters[] = $parameter;
        $this->modifiedProperties[self::PARAMETERS] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireParameters()
    {
        $this->assertCollectionPropertyIsSet(self::PARAMETERS);

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param string|null $responseAttributesClassName
     *
     * @return $this
     */
    public function setResponseAttributesClassName($responseAttributesClassName)
    {
        $this->responseAttributesClassName = $responseAttributesClassName;
        $this->modifiedProperties[self::RESPONSE_ATTRIBUTES_CLASS_NAME] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @return string|null
     */
    public function getResponseAttributesClassName()
    {
        return $this->responseAttributesClassName;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param string|null $responseAttributesClassName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setResponseAttributesClassNameOrFail($responseAttributesClassName)
    {
        if ($responseAttributesClassName === null) {
            $this->throwNullValueException(static::RESPONSE_ATTRIBUTES_CLASS_NAME);
        }

        return $this->setResponseAttributesClassName($responseAttributesClassName);
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getResponseAttributesClassNameOrFail()
    {
        if ($this->responseAttributesClassName === null) {
            $this->throwNullValueException(static::RESPONSE_ATTRIBUTES_CLASS_NAME);
        }

        return $this->responseAttributesClassName;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireResponseAttributesClassName()
    {
        $this->assertPropertyIsSet(self::RESPONSE_ATTRIBUTES_CLASS_NAME);

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param bool|null $isEmptyResponse
     *
     * @return $this
     */
    public function setIsEmptyResponse($isEmptyResponse)
    {
        $this->isEmptyResponse = $isEmptyResponse;
        $this->modifiedProperties[self::IS_EMPTY_RESPONSE] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @return bool|null
     */
    public function getIsEmptyResponse()
    {
        return $this->isEmptyResponse;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param bool|null $isEmptyResponse
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsEmptyResponseOrFail($isEmptyResponse)
    {
        if ($isEmptyResponse === null) {
            $this->throwNullValueException(static::IS_EMPTY_RESPONSE);
        }

        return $this->setIsEmptyResponse($isEmptyResponse);
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsEmptyResponseOrFail()
    {
        if ($this->isEmptyResponse === null) {
            $this->throwNullValueException(static::IS_EMPTY_RESPONSE);
        }

        return $this->isEmptyResponse;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsEmptyResponse()
    {
        $this->assertPropertyIsSet(self::IS_EMPTY_RESPONSE);

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param array|null $responses
     *
     * @return $this
     */
    public function setResponses(array $responses = null)
    {
        if ($responses === null) {
            $responses = [];
        }

        $this->responses = $responses;
        $this->modifiedProperties[self::RESPONSES] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @return array
     */
    public function getResponses()
    {
        return $this->responses;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param mixed $response
     *
     * @return $this
     */
    public function addResponse($response)
    {
        $this->responses[] = $response;
        $this->modifiedProperties[self::RESPONSES] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireResponses()
    {
        $this->assertPropertyIsSet(self::RESPONSES);

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param bool|null $isIdNullable
     *
     * @return $this
     */
    public function setIsIdNullable($isIdNullable)
    {
        $this->isIdNullable = $isIdNullable;
        $this->modifiedProperties[self::IS_ID_NULLABLE] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @return bool|null
     */
    public function getIsIdNullable()
    {
        return $this->isIdNullable;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param bool|null $isIdNullable
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsIdNullableOrFail($isIdNullable)
    {
        if ($isIdNullable === null) {
            $this->throwNullValueException(static::IS_ID_NULLABLE);
        }

        return $this->setIsIdNullable($isIdNullable);
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsIdNullableOrFail()
    {
        if ($this->isIdNullable === null) {
            $this->throwNullValueException(static::IS_ID_NULLABLE);
        }

        return $this->isIdNullable;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsIdNullable()
    {
        $this->assertPropertyIsSet(self::IS_ID_NULLABLE);

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param bool|null $deprecated
     *
     * @return $this
     */
    public function setDeprecated($deprecated)
    {
        $this->deprecated = $deprecated;
        $this->modifiedProperties[self::DEPRECATED] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @return bool|null
     */
    public function getDeprecated()
    {
        return $this->deprecated;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param bool|null $deprecated
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDeprecatedOrFail($deprecated)
    {
        if ($deprecated === null) {
            $this->throwNullValueException(static::DEPRECATED);
        }

        return $this->setDeprecated($deprecated);
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getDeprecatedOrFail()
    {
        if ($this->deprecated === null) {
            $this->throwNullValueException(static::DEPRECATED);
        }

        return $this->deprecated;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDeprecated()
    {
        $this->assertPropertyIsSet(self::DEPRECATED);

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
                case 'path':
                case 'summary':
                case 'responseAttributesClassName':
                case 'isEmptyResponse':
                case 'responses':
                case 'isIdNullable':
                case 'deprecated':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'parameters':
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
                case 'path':
                case 'summary':
                case 'responseAttributesClassName':
                case 'isEmptyResponse':
                case 'responses':
                case 'isIdNullable':
                case 'deprecated':
                    $values[$arrayKey] = $value;

                    break;
                case 'parameters':
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
                case 'path':
                case 'summary':
                case 'responseAttributesClassName':
                case 'isEmptyResponse':
                case 'responses':
                case 'isIdNullable':
                case 'deprecated':
                    $values[$arrayKey] = $value;

                    break;
                case 'parameters':
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
        $this->parameters = $this->parameters ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'path' => $this->path,
            'summary' => $this->summary,
            'responseAttributesClassName' => $this->responseAttributesClassName,
            'isEmptyResponse' => $this->isEmptyResponse,
            'responses' => $this->responses,
            'isIdNullable' => $this->isIdNullable,
            'deprecated' => $this->deprecated,
            'parameters' => $this->parameters,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'path' => $this->path,
            'summary' => $this->summary,
            'response_attributes_class_name' => $this->responseAttributesClassName,
            'is_empty_response' => $this->isEmptyResponse,
            'responses' => $this->responses,
            'is_id_nullable' => $this->isIdNullable,
            'deprecated' => $this->deprecated,
            'parameters' => $this->parameters,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'path' => $this->path instanceof AbstractTransfer ? $this->path->toArray(true, false) : $this->path,
            'summary' => $this->summary instanceof AbstractTransfer ? $this->summary->toArray(true, false) : $this->summary,
            'response_attributes_class_name' => $this->responseAttributesClassName instanceof AbstractTransfer ? $this->responseAttributesClassName->toArray(true, false) : $this->responseAttributesClassName,
            'is_empty_response' => $this->isEmptyResponse instanceof AbstractTransfer ? $this->isEmptyResponse->toArray(true, false) : $this->isEmptyResponse,
            'responses' => $this->responses instanceof AbstractTransfer ? $this->responses->toArray(true, false) : $this->responses,
            'is_id_nullable' => $this->isIdNullable instanceof AbstractTransfer ? $this->isIdNullable->toArray(true, false) : $this->isIdNullable,
            'deprecated' => $this->deprecated instanceof AbstractTransfer ? $this->deprecated->toArray(true, false) : $this->deprecated,
            'parameters' => $this->parameters instanceof AbstractTransfer ? $this->parameters->toArray(true, false) : $this->addValuesToCollection($this->parameters, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'path' => $this->path instanceof AbstractTransfer ? $this->path->toArray(true, true) : $this->path,
            'summary' => $this->summary instanceof AbstractTransfer ? $this->summary->toArray(true, true) : $this->summary,
            'responseAttributesClassName' => $this->responseAttributesClassName instanceof AbstractTransfer ? $this->responseAttributesClassName->toArray(true, true) : $this->responseAttributesClassName,
            'isEmptyResponse' => $this->isEmptyResponse instanceof AbstractTransfer ? $this->isEmptyResponse->toArray(true, true) : $this->isEmptyResponse,
            'responses' => $this->responses instanceof AbstractTransfer ? $this->responses->toArray(true, true) : $this->responses,
            'isIdNullable' => $this->isIdNullable instanceof AbstractTransfer ? $this->isIdNullable->toArray(true, true) : $this->isIdNullable,
            'deprecated' => $this->deprecated instanceof AbstractTransfer ? $this->deprecated->toArray(true, true) : $this->deprecated,
            'parameters' => $this->parameters instanceof AbstractTransfer ? $this->parameters->toArray(true, true) : $this->addValuesToCollection($this->parameters, true, true),
        ];
    }
}
