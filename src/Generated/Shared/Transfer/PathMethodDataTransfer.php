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
class PathMethodDataTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PATH = 'path';

    /**
     * @var string
     */
    public const METHOD = 'method';

    /**
     * @var string
     */
    public const SUMMARY = 'summary';

    /**
     * @var string
     */
    public const RESOURCE = 'resource';

    /**
     * @var string
     */
    public const IS_PROTECTED = 'isProtected';

    /**
     * @var string
     */
    public const PARAMETERS = 'parameters';

    /**
     * @var string
     */
    public const REQUEST_SCHEMA = 'requestSchema';

    /**
     * @var string
     */
    public const IS_EMPTY_RESPONSE = 'isEmptyResponse';

    /**
     * @var string
     */
    public const RESPONSE_SCHEMAS = 'responseSchemas';

    /**
     * @var string
     */
    public const OPERATION_ID = 'operationId';

    /**
     * @var string
     */
    public const DEPRECATED = 'deprecated';

    /**
     * @var string|null
     */
    protected $path;

    /**
     * @var string|null
     */
    protected $method;

    /**
     * @var string[]
     */
    protected $summary = [];

    /**
     * @var string|null
     */
    protected $resource;

    /**
     * @var bool|null
     */
    protected $isProtected;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\PathParameterComponentTransfer[]
     */
    protected $parameters;

    /**
     * @var \Generated\Shared\Transfer\PathSchemaDataTransfer|null
     */
    protected $requestSchema;

    /**
     * @var bool|null
     */
    protected $isEmptyResponse;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\PathSchemaDataTransfer[]
     */
    protected $responseSchemas;

    /**
     * @var string|null
     */
    protected $operationId;

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
        'method' => 'method',
        'Method' => 'method',
        'summary' => 'summary',
        'Summary' => 'summary',
        'resource' => 'resource',
        'Resource' => 'resource',
        'is_protected' => 'isProtected',
        'isProtected' => 'isProtected',
        'IsProtected' => 'isProtected',
        'parameters' => 'parameters',
        'Parameters' => 'parameters',
        'request_schema' => 'requestSchema',
        'requestSchema' => 'requestSchema',
        'RequestSchema' => 'requestSchema',
        'is_empty_response' => 'isEmptyResponse',
        'isEmptyResponse' => 'isEmptyResponse',
        'IsEmptyResponse' => 'isEmptyResponse',
        'response_schemas' => 'responseSchemas',
        'responseSchemas' => 'responseSchemas',
        'ResponseSchemas' => 'responseSchemas',
        'operation_id' => 'operationId',
        'operationId' => 'operationId',
        'OperationId' => 'operationId',
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
        self::METHOD => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'method',
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
        self::RESOURCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'resource',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_PROTECTED => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_protected',
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
        self::REQUEST_SCHEMA => [
            'type' => 'Generated\Shared\Transfer\PathSchemaDataTransfer',
            'type_shim' => null,
            'name_underscore' => 'request_schema',
            'is_collection' => false,
            'is_transfer' => true,
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
        self::RESPONSE_SCHEMAS => [
            'type' => 'Generated\Shared\Transfer\PathSchemaDataTransfer',
            'type_shim' => null,
            'name_underscore' => 'response_schemas',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::OPERATION_ID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'operation_id',
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
     * @param string|null $method
     *
     * @return $this
     */
    public function setMethod($method)
    {
        $this->method = $method;
        $this->modifiedProperties[self::METHOD] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @return string|null
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param string|null $method
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMethodOrFail($method)
    {
        if ($method === null) {
            $this->throwNullValueException(static::METHOD);
        }

        return $this->setMethod($method);
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getMethodOrFail()
    {
        if ($this->method === null) {
            $this->throwNullValueException(static::METHOD);
        }

        return $this->method;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMethod()
    {
        $this->assertPropertyIsSet(self::METHOD);

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
     * @param string|null $resource
     *
     * @return $this
     */
    public function setResource($resource)
    {
        $this->resource = $resource;
        $this->modifiedProperties[self::RESOURCE] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @return string|null
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param string|null $resource
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setResourceOrFail($resource)
    {
        if ($resource === null) {
            $this->throwNullValueException(static::RESOURCE);
        }

        return $this->setResource($resource);
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getResourceOrFail()
    {
        if ($this->resource === null) {
            $this->throwNullValueException(static::RESOURCE);
        }

        return $this->resource;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireResource()
    {
        $this->assertPropertyIsSet(self::RESOURCE);

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param bool|null $isProtected
     *
     * @return $this
     */
    public function setIsProtected($isProtected)
    {
        $this->isProtected = $isProtected;
        $this->modifiedProperties[self::IS_PROTECTED] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @return bool|null
     */
    public function getIsProtected()
    {
        return $this->isProtected;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param bool|null $isProtected
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsProtectedOrFail($isProtected)
    {
        if ($isProtected === null) {
            $this->throwNullValueException(static::IS_PROTECTED);
        }

        return $this->setIsProtected($isProtected);
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsProtectedOrFail()
    {
        if ($this->isProtected === null) {
            $this->throwNullValueException(static::IS_PROTECTED);
        }

        return $this->isProtected;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsProtected()
    {
        $this->assertPropertyIsSet(self::IS_PROTECTED);

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
     * @param \Generated\Shared\Transfer\PathSchemaDataTransfer|null $requestSchema
     *
     * @return $this
     */
    public function setRequestSchema(PathSchemaDataTransfer $requestSchema = null)
    {
        $this->requestSchema = $requestSchema;
        $this->modifiedProperties[self::REQUEST_SCHEMA] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @return \Generated\Shared\Transfer\PathSchemaDataTransfer|null
     */
    public function getRequestSchema()
    {
        return $this->requestSchema;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param \Generated\Shared\Transfer\PathSchemaDataTransfer $requestSchema
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRequestSchemaOrFail(PathSchemaDataTransfer $requestSchema)
    {
        return $this->setRequestSchema($requestSchema);
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PathSchemaDataTransfer
     */
    public function getRequestSchemaOrFail()
    {
        if ($this->requestSchema === null) {
            $this->throwNullValueException(static::REQUEST_SCHEMA);
        }

        return $this->requestSchema;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRequestSchema()
    {
        $this->assertPropertyIsSet(self::REQUEST_SCHEMA);

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
     * @param \ArrayObject|\Generated\Shared\Transfer\PathSchemaDataTransfer[] $responseSchemas
     *
     * @return $this
     */
    public function setResponseSchemas(ArrayObject $responseSchemas)
    {
        $this->responseSchemas = $responseSchemas;
        $this->modifiedProperties[self::RESPONSE_SCHEMAS] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\PathSchemaDataTransfer[]
     */
    public function getResponseSchemas()
    {
        return $this->responseSchemas;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param \Generated\Shared\Transfer\PathSchemaDataTransfer $responseSchema
     *
     * @return $this
     */
    public function addResponseSchema(PathSchemaDataTransfer $responseSchema)
    {
        $this->responseSchemas[] = $responseSchema;
        $this->modifiedProperties[self::RESPONSE_SCHEMAS] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireResponseSchemas()
    {
        $this->assertCollectionPropertyIsSet(self::RESPONSE_SCHEMAS);

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param string|null $operationId
     *
     * @return $this
     */
    public function setOperationId($operationId)
    {
        $this->operationId = $operationId;
        $this->modifiedProperties[self::OPERATION_ID] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @return string|null
     */
    public function getOperationId()
    {
        return $this->operationId;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param string|null $operationId
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOperationIdOrFail($operationId)
    {
        if ($operationId === null) {
            $this->throwNullValueException(static::OPERATION_ID);
        }

        return $this->setOperationId($operationId);
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getOperationIdOrFail()
    {
        if ($this->operationId === null) {
            $this->throwNullValueException(static::OPERATION_ID);
        }

        return $this->operationId;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOperationId()
    {
        $this->assertPropertyIsSet(self::OPERATION_ID);

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
                case 'method':
                case 'summary':
                case 'resource':
                case 'isProtected':
                case 'isEmptyResponse':
                case 'operationId':
                case 'deprecated':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'requestSchema':
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
                case 'parameters':
                case 'responseSchemas':
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
                case 'method':
                case 'summary':
                case 'resource':
                case 'isProtected':
                case 'isEmptyResponse':
                case 'operationId':
                case 'deprecated':
                    $values[$arrayKey] = $value;

                    break;
                case 'requestSchema':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'parameters':
                case 'responseSchemas':
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
                case 'method':
                case 'summary':
                case 'resource':
                case 'isProtected':
                case 'isEmptyResponse':
                case 'operationId':
                case 'deprecated':
                    $values[$arrayKey] = $value;

                    break;
                case 'requestSchema':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'parameters':
                case 'responseSchemas':
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
        $this->responseSchemas = $this->responseSchemas ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'path' => $this->path,
            'method' => $this->method,
            'summary' => $this->summary,
            'resource' => $this->resource,
            'isProtected' => $this->isProtected,
            'isEmptyResponse' => $this->isEmptyResponse,
            'operationId' => $this->operationId,
            'deprecated' => $this->deprecated,
            'requestSchema' => $this->requestSchema,
            'parameters' => $this->parameters,
            'responseSchemas' => $this->responseSchemas,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'path' => $this->path,
            'method' => $this->method,
            'summary' => $this->summary,
            'resource' => $this->resource,
            'is_protected' => $this->isProtected,
            'is_empty_response' => $this->isEmptyResponse,
            'operation_id' => $this->operationId,
            'deprecated' => $this->deprecated,
            'request_schema' => $this->requestSchema,
            'parameters' => $this->parameters,
            'response_schemas' => $this->responseSchemas,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'path' => $this->path instanceof AbstractTransfer ? $this->path->toArray(true, false) : $this->path,
            'method' => $this->method instanceof AbstractTransfer ? $this->method->toArray(true, false) : $this->method,
            'summary' => $this->summary instanceof AbstractTransfer ? $this->summary->toArray(true, false) : $this->summary,
            'resource' => $this->resource instanceof AbstractTransfer ? $this->resource->toArray(true, false) : $this->resource,
            'is_protected' => $this->isProtected instanceof AbstractTransfer ? $this->isProtected->toArray(true, false) : $this->isProtected,
            'is_empty_response' => $this->isEmptyResponse instanceof AbstractTransfer ? $this->isEmptyResponse->toArray(true, false) : $this->isEmptyResponse,
            'operation_id' => $this->operationId instanceof AbstractTransfer ? $this->operationId->toArray(true, false) : $this->operationId,
            'deprecated' => $this->deprecated instanceof AbstractTransfer ? $this->deprecated->toArray(true, false) : $this->deprecated,
            'request_schema' => $this->requestSchema instanceof AbstractTransfer ? $this->requestSchema->toArray(true, false) : $this->requestSchema,
            'parameters' => $this->parameters instanceof AbstractTransfer ? $this->parameters->toArray(true, false) : $this->addValuesToCollection($this->parameters, true, false),
            'response_schemas' => $this->responseSchemas instanceof AbstractTransfer ? $this->responseSchemas->toArray(true, false) : $this->addValuesToCollection($this->responseSchemas, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'path' => $this->path instanceof AbstractTransfer ? $this->path->toArray(true, true) : $this->path,
            'method' => $this->method instanceof AbstractTransfer ? $this->method->toArray(true, true) : $this->method,
            'summary' => $this->summary instanceof AbstractTransfer ? $this->summary->toArray(true, true) : $this->summary,
            'resource' => $this->resource instanceof AbstractTransfer ? $this->resource->toArray(true, true) : $this->resource,
            'isProtected' => $this->isProtected instanceof AbstractTransfer ? $this->isProtected->toArray(true, true) : $this->isProtected,
            'isEmptyResponse' => $this->isEmptyResponse instanceof AbstractTransfer ? $this->isEmptyResponse->toArray(true, true) : $this->isEmptyResponse,
            'operationId' => $this->operationId instanceof AbstractTransfer ? $this->operationId->toArray(true, true) : $this->operationId,
            'deprecated' => $this->deprecated instanceof AbstractTransfer ? $this->deprecated->toArray(true, true) : $this->deprecated,
            'requestSchema' => $this->requestSchema instanceof AbstractTransfer ? $this->requestSchema->toArray(true, true) : $this->requestSchema,
            'parameters' => $this->parameters instanceof AbstractTransfer ? $this->parameters->toArray(true, true) : $this->addValuesToCollection($this->parameters, true, true),
            'responseSchemas' => $this->responseSchemas instanceof AbstractTransfer ? $this->responseSchemas->toArray(true, true) : $this->addValuesToCollection($this->responseSchemas, true, true),
        ];
    }
}
