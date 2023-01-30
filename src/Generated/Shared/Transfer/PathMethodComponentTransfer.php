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
class PathMethodComponentTransfer extends AbstractTransfer
{
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
    public const TAGS = 'tags';

    /**
     * @var string
     */
    public const OPERATION_ID = 'operationId';

    /**
     * @var string
     */
    public const REF = 'ref';

    /**
     * @var string
     */
    public const PARAMETERS = 'parameters';

    /**
     * @var string
     */
    public const REQUEST = 'request';

    /**
     * @var string
     */
    public const SECURITY = 'security';

    /**
     * @var string
     */
    public const RESPONSES = 'responses';

    /**
     * @var string
     */
    public const DEPRECATED = 'deprecated';

    /**
     * @var string|null
     */
    protected $method;

    /**
     * @var string|null
     */
    protected $summary;

    /**
     * @var string[]
     */
    protected $tags = [];

    /**
     * @var string|null
     */
    protected $operationId;

    /**
     * @var string|null
     */
    protected $ref;

    /**
     * @var array
     */
    protected $parameters = [];

    /**
     * @var array
     */
    protected $request = [];

    /**
     * @var array
     */
    protected $security = [];

    /**
     * @var array
     */
    protected $responses = [];

    /**
     * @var bool|null
     */
    protected $deprecated;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'method' => 'method',
        'Method' => 'method',
        'summary' => 'summary',
        'Summary' => 'summary',
        'tags' => 'tags',
        'Tags' => 'tags',
        'operation_id' => 'operationId',
        'operationId' => 'operationId',
        'OperationId' => 'operationId',
        'ref' => 'ref',
        'Ref' => 'ref',
        'parameters' => 'parameters',
        'Parameters' => 'parameters',
        'request' => 'request',
        'Request' => 'request',
        'security' => 'security',
        'Security' => 'security',
        'responses' => 'responses',
        'Responses' => 'responses',
        'deprecated' => 'deprecated',
        'Deprecated' => 'deprecated',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
            'type' => 'string',
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
        self::TAGS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'tags',
            'is_collection' => false,
            'is_transfer' => false,
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
        self::REF => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'ref',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PARAMETERS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'parameters',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REQUEST => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'request',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SECURITY => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'security',
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
     * @param string|null $summary
     *
     * @return $this
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
        $this->modifiedProperties[self::SUMMARY] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @return string|null
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param string|null $summary
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSummaryOrFail($summary)
    {
        if ($summary === null) {
            $this->throwNullValueException(static::SUMMARY);
        }

        return $this->setSummary($summary);
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSummaryOrFail()
    {
        if ($this->summary === null) {
            $this->throwNullValueException(static::SUMMARY);
        }

        return $this->summary;
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
     * @param string[]|null $tags
     *
     * @return $this
     */
    public function setTags(array $tags = null)
    {
        if ($tags === null) {
            $tags = [];
        }

        $this->tags = $tags;
        $this->modifiedProperties[self::TAGS] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @return string[]
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param string $tag
     *
     * @return $this
     */
    public function addTag($tag)
    {
        $this->tags[] = $tag;
        $this->modifiedProperties[self::TAGS] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTags()
    {
        $this->assertPropertyIsSet(self::TAGS);

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
     * @param string|null $ref
     *
     * @return $this
     */
    public function setRef($ref)
    {
        $this->ref = $ref;
        $this->modifiedProperties[self::REF] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @return string|null
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param string|null $ref
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRefOrFail($ref)
    {
        if ($ref === null) {
            $this->throwNullValueException(static::REF);
        }

        return $this->setRef($ref);
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRefOrFail()
    {
        if ($this->ref === null) {
            $this->throwNullValueException(static::REF);
        }

        return $this->ref;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRef()
    {
        $this->assertPropertyIsSet(self::REF);

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param array|null $parameters
     *
     * @return $this
     */
    public function setParameters(array $parameters = null)
    {
        if ($parameters === null) {
            $parameters = [];
        }

        $this->parameters = $parameters;
        $this->modifiedProperties[self::PARAMETERS] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @return array
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param mixed $parameter
     *
     * @return $this
     */
    public function addParameter($parameter)
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
        $this->assertPropertyIsSet(self::PARAMETERS);

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param array|null $request
     *
     * @return $this
     */
    public function setRequest(array $request = null)
    {
        if ($request === null) {
            $request = [];
        }

        $this->request = $request;
        $this->modifiedProperties[self::REQUEST] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @return array
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param mixed $request
     *
     * @return $this
     */
    public function addRequest($request)
    {
        $this->request[] = $request;
        $this->modifiedProperties[self::REQUEST] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRequest()
    {
        $this->assertPropertyIsSet(self::REQUEST);

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param array|null $security
     *
     * @return $this
     */
    public function setSecurity(array $security = null)
    {
        if ($security === null) {
            $security = [];
        }

        $this->security = $security;
        $this->modifiedProperties[self::SECURITY] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @return array
     */
    public function getSecurity()
    {
        return $this->security;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @param mixed $security
     *
     * @return $this
     */
    public function addSecurity($security)
    {
        $this->security[] = $security;
        $this->modifiedProperties[self::SECURITY] = true;

        return $this;
    }

    /**
     * @module DocumentationGeneratorRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSecurity()
    {
        $this->assertPropertyIsSet(self::SECURITY);

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
                case 'method':
                case 'summary':
                case 'tags':
                case 'operationId':
                case 'ref':
                case 'parameters':
                case 'request':
                case 'security':
                case 'responses':
                case 'deprecated':
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
                case 'method':
                case 'summary':
                case 'tags':
                case 'operationId':
                case 'ref':
                case 'parameters':
                case 'request':
                case 'security':
                case 'responses':
                case 'deprecated':
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
                case 'method':
                case 'summary':
                case 'tags':
                case 'operationId':
                case 'ref':
                case 'parameters':
                case 'request':
                case 'security':
                case 'responses':
                case 'deprecated':
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
            'method' => $this->method,
            'summary' => $this->summary,
            'tags' => $this->tags,
            'operationId' => $this->operationId,
            'ref' => $this->ref,
            'parameters' => $this->parameters,
            'request' => $this->request,
            'security' => $this->security,
            'responses' => $this->responses,
            'deprecated' => $this->deprecated,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'method' => $this->method,
            'summary' => $this->summary,
            'tags' => $this->tags,
            'operation_id' => $this->operationId,
            'ref' => $this->ref,
            'parameters' => $this->parameters,
            'request' => $this->request,
            'security' => $this->security,
            'responses' => $this->responses,
            'deprecated' => $this->deprecated,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'method' => $this->method instanceof AbstractTransfer ? $this->method->toArray(true, false) : $this->method,
            'summary' => $this->summary instanceof AbstractTransfer ? $this->summary->toArray(true, false) : $this->summary,
            'tags' => $this->tags instanceof AbstractTransfer ? $this->tags->toArray(true, false) : $this->tags,
            'operation_id' => $this->operationId instanceof AbstractTransfer ? $this->operationId->toArray(true, false) : $this->operationId,
            'ref' => $this->ref instanceof AbstractTransfer ? $this->ref->toArray(true, false) : $this->ref,
            'parameters' => $this->parameters instanceof AbstractTransfer ? $this->parameters->toArray(true, false) : $this->parameters,
            'request' => $this->request instanceof AbstractTransfer ? $this->request->toArray(true, false) : $this->request,
            'security' => $this->security instanceof AbstractTransfer ? $this->security->toArray(true, false) : $this->security,
            'responses' => $this->responses instanceof AbstractTransfer ? $this->responses->toArray(true, false) : $this->responses,
            'deprecated' => $this->deprecated instanceof AbstractTransfer ? $this->deprecated->toArray(true, false) : $this->deprecated,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'method' => $this->method instanceof AbstractTransfer ? $this->method->toArray(true, true) : $this->method,
            'summary' => $this->summary instanceof AbstractTransfer ? $this->summary->toArray(true, true) : $this->summary,
            'tags' => $this->tags instanceof AbstractTransfer ? $this->tags->toArray(true, true) : $this->tags,
            'operationId' => $this->operationId instanceof AbstractTransfer ? $this->operationId->toArray(true, true) : $this->operationId,
            'ref' => $this->ref instanceof AbstractTransfer ? $this->ref->toArray(true, true) : $this->ref,
            'parameters' => $this->parameters instanceof AbstractTransfer ? $this->parameters->toArray(true, true) : $this->parameters,
            'request' => $this->request instanceof AbstractTransfer ? $this->request->toArray(true, true) : $this->request,
            'security' => $this->security instanceof AbstractTransfer ? $this->security->toArray(true, true) : $this->security,
            'responses' => $this->responses instanceof AbstractTransfer ? $this->responses->toArray(true, true) : $this->responses,
            'deprecated' => $this->deprecated instanceof AbstractTransfer ? $this->deprecated->toArray(true, true) : $this->deprecated,
        ];
    }
}
