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
class GlueRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const LOCALE = 'locale';

    /**
     * @var string
     */
    public const CONTENT = 'content';

    /**
     * @var string
     */
    public const PATH = 'path';

    /**
     * @var string
     */
    public const META = 'meta';

    /**
     * @var string
     */
    public const CONVENTION = 'convention';

    /**
     * @var string
     */
    public const APPLICATION = 'application';

    /**
     * @var string
     */
    public const ATTRIBUTES = 'attributes';

    /**
     * @var string
     */
    public const RESOURCE = 'resource';

    /**
     * @var string
     */
    public const METHOD = 'method';

    /**
     * @var string
     */
    public const PARENT_RESOURCES = 'parentResources';

    /**
     * @var string
     */
    public const HOST = 'host';

    /**
     * @var string
     */
    public const PARAMETERS_STRING = 'parametersString';

    /**
     * @var string
     */
    public const QUERY_FIELDS = 'queryFields';

    /**
     * @var string|null
     */
    protected $locale;

    /**
     * @var string|null
     */
    protected $content;

    /**
     * @var string|null
     */
    protected $path;

    /**
     * @var array
     */
    protected $meta = [];

    /**
     * @var string|null
     */
    protected $convention;

    /**
     * @var string|null
     */
    protected $application;

    /**
     * @var array
     */
    protected $attributes = [];

    /**
     * @var \Generated\Shared\Transfer\GlueResourceTransfer|null
     */
    protected $resource;

    /**
     * @var string|null
     */
    protected $method;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\GlueResourceTransfer[]
     */
    protected $parentResources;

    /**
     * @var string|null
     */
    protected $host;

    /**
     * @var string|null
     */
    protected $parametersString;

    /**
     * @var array
     */
    protected $queryFields = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'locale' => 'locale',
        'Locale' => 'locale',
        'content' => 'content',
        'Content' => 'content',
        'path' => 'path',
        'Path' => 'path',
        'meta' => 'meta',
        'Meta' => 'meta',
        'convention' => 'convention',
        'Convention' => 'convention',
        'application' => 'application',
        'Application' => 'application',
        'attributes' => 'attributes',
        'Attributes' => 'attributes',
        'resource' => 'resource',
        'Resource' => 'resource',
        'method' => 'method',
        'Method' => 'method',
        'parent_resources' => 'parentResources',
        'parentResources' => 'parentResources',
        'ParentResources' => 'parentResources',
        'host' => 'host',
        'Host' => 'host',
        'parameters_string' => 'parametersString',
        'parametersString' => 'parametersString',
        'ParametersString' => 'parametersString',
        'query_fields' => 'queryFields',
        'queryFields' => 'queryFields',
        'QueryFields' => 'queryFields',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::LOCALE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'locale',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONTENT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'content',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
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
        self::META => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'meta',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => true,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONVENTION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'convention',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::APPLICATION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'application',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ATTRIBUTES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'attributes',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::RESOURCE => [
            'type' => 'Generated\Shared\Transfer\GlueResourceTransfer',
            'type_shim' => null,
            'name_underscore' => 'resource',
            'is_collection' => false,
            'is_transfer' => true,
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
        self::PARENT_RESOURCES => [
            'type' => 'Generated\Shared\Transfer\GlueResourceTransfer',
            'type_shim' => null,
            'name_underscore' => 'parent_resources',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => true,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::HOST => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'host',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PARAMETERS_STRING => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'parameters_string',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::QUERY_FIELDS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'query_fields',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => true,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @param string|null $locale
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
        $this->modifiedProperties[self::LOCALE] = true;

        return $this;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @return string|null
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @param string|null $locale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLocaleOrFail($locale)
    {
        if ($locale === null) {
            $this->throwNullValueException(static::LOCALE);
        }

        return $this->setLocale($locale);
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getLocaleOrFail()
    {
        if ($this->locale === null) {
            $this->throwNullValueException(static::LOCALE);
        }

        return $this->locale;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocale()
    {
        $this->assertPropertyIsSet(self::LOCALE);

        return $this;
    }

    /**
     * @module GlueApplication|GlueHttp
     *
     * @param string|null $content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->content = $content;
        $this->modifiedProperties[self::CONTENT] = true;

        return $this;
    }

    /**
     * @module GlueApplication|GlueHttp
     *
     * @return string|null
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @module GlueApplication|GlueHttp
     *
     * @param string|null $content
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setContentOrFail($content)
    {
        if ($content === null) {
            $this->throwNullValueException(static::CONTENT);
        }

        return $this->setContent($content);
    }

    /**
     * @module GlueApplication|GlueHttp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getContentOrFail()
    {
        if ($this->content === null) {
            $this->throwNullValueException(static::CONTENT);
        }

        return $this->content;
    }

    /**
     * @module GlueApplication|GlueHttp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireContent()
    {
        $this->assertPropertyIsSet(self::CONTENT);

        return $this;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueHttp|GlueStorefrontApiApplication
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
     * @module GlueApplication|GlueBackendApiApplication|GlueHttp|GlueStorefrontApiApplication
     *
     * @return string|null
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueHttp|GlueStorefrontApiApplication
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
     * @module GlueApplication|GlueBackendApiApplication|GlueHttp|GlueStorefrontApiApplication
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
     * @module GlueApplication|GlueBackendApiApplication|GlueHttp|GlueStorefrontApiApplication
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
     * @module GlueApplication|GlueBackendApiApplication|GlueHttp|GlueStorefrontApiApplication
     *
     * @param array $meta
     *
     * @return $this
     */
    public function setMeta($meta)
    {
        if ($meta === null) {
            $meta = [];
        }

        $this->meta = $meta;
        $this->modifiedProperties[self::META] = true;

        return $this;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueHttp|GlueStorefrontApiApplication
     *
     * @return array
     */
    public function getMeta()
    {
        return $this->meta;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueHttp|GlueStorefrontApiApplication
     *
     * @param string|int $metaKey
     * @param mixed $metaValue
     *
     * @return $this
     */
    public function addMeta($metaKey, $metaValue)
    {
        $this->meta[$metaKey] = $metaValue;
        $this->modifiedProperties[self::META] = true;

        return $this;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueHttp|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMeta()
    {
        $this->assertPropertyIsSet(self::META);

        return $this;
    }

    /**
     * @module GlueApplication
     *
     * @param string|null $convention
     *
     * @return $this
     */
    public function setConvention($convention)
    {
        $this->convention = $convention;
        $this->modifiedProperties[self::CONVENTION] = true;

        return $this;
    }

    /**
     * @module GlueApplication
     *
     * @return string|null
     */
    public function getConvention()
    {
        return $this->convention;
    }

    /**
     * @module GlueApplication
     *
     * @param string|null $convention
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setConventionOrFail($convention)
    {
        if ($convention === null) {
            $this->throwNullValueException(static::CONVENTION);
        }

        return $this->setConvention($convention);
    }

    /**
     * @module GlueApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getConventionOrFail()
    {
        if ($this->convention === null) {
            $this->throwNullValueException(static::CONVENTION);
        }

        return $this->convention;
    }

    /**
     * @module GlueApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConvention()
    {
        $this->assertPropertyIsSet(self::CONVENTION);

        return $this;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @param string|null $application
     *
     * @return $this
     */
    public function setApplication($application)
    {
        $this->application = $application;
        $this->modifiedProperties[self::APPLICATION] = true;

        return $this;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @return string|null
     */
    public function getApplication()
    {
        return $this->application;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @param string|null $application
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setApplicationOrFail($application)
    {
        if ($application === null) {
            $this->throwNullValueException(static::APPLICATION);
        }

        return $this->setApplication($application);
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getApplicationOrFail()
    {
        if ($this->application === null) {
            $this->throwNullValueException(static::APPLICATION);
        }

        return $this->application;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireApplication()
    {
        $this->assertPropertyIsSet(self::APPLICATION);

        return $this;
    }

    /**
     * @module GlueApplication
     *
     * @param array|null $attributes
     *
     * @return $this
     */
    public function setAttributes(array $attributes = null)
    {
        if ($attributes === null) {
            $attributes = [];
        }

        $this->attributes = $attributes;
        $this->modifiedProperties[self::ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module GlueApplication
     *
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @module GlueApplication
     *
     * @param mixed $attribute
     *
     * @return $this
     */
    public function addAttribute($attribute)
    {
        $this->attributes[] = $attribute;
        $this->modifiedProperties[self::ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module GlueApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAttributes()
    {
        $this->assertPropertyIsSet(self::ATTRIBUTES);

        return $this;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @param \Generated\Shared\Transfer\GlueResourceTransfer|null $resource
     *
     * @return $this
     */
    public function setResource(GlueResourceTransfer $resource = null)
    {
        $this->resource = $resource;
        $this->modifiedProperties[self::RESOURCE] = true;

        return $this;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @return \Generated\Shared\Transfer\GlueResourceTransfer|null
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @param \Generated\Shared\Transfer\GlueResourceTransfer $resource
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setResourceOrFail(GlueResourceTransfer $resource)
    {
        return $this->setResource($resource);
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\GlueResourceTransfer
     */
    public function getResourceOrFail()
    {
        if ($this->resource === null) {
            $this->throwNullValueException(static::RESOURCE);
        }

        return $this->resource;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueStorefrontApiApplication
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
     * @module GlueApplication|GlueBackendApiApplication|GlueHttp|GlueStorefrontApiApplication
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
     * @module GlueApplication|GlueBackendApiApplication|GlueHttp|GlueStorefrontApiApplication
     *
     * @return string|null
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @module GlueApplication|GlueBackendApiApplication|GlueHttp|GlueStorefrontApiApplication
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
     * @module GlueApplication|GlueBackendApiApplication|GlueHttp|GlueStorefrontApiApplication
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
     * @module GlueApplication|GlueBackendApiApplication|GlueHttp|GlueStorefrontApiApplication
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
     * @module GlueApplication
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\GlueResourceTransfer[] $parentResources
     *
     * @return $this
     */
    public function setParentResources(ArrayObject $parentResources)
    {
        $this->parentResources = $parentResources;
        $this->modifiedProperties[self::PARENT_RESOURCES] = true;

        return $this;
    }

    /**
     * @module GlueApplication
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\GlueResourceTransfer[]
     */
    public function getParentResources()
    {
        return $this->parentResources;
    }

    /**
     * @module GlueApplication
     *
     * @param string|int $parentResourceKey
     * @param \Generated\Shared\Transfer\GlueResourceTransfer $parentResourceValue
     *
     * @return $this
     */
    public function addParentResource($parentResourceKey, GlueResourceTransfer $parentResourceValue)
    {
        $this->parentResources[$parentResourceKey] = $parentResourceValue;
        $this->modifiedProperties[self::PARENT_RESOURCES] = true;

        return $this;
    }

    /**
     * @module GlueApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireParentResources()
    {
        $this->assertCollectionPropertyIsSet(self::PARENT_RESOURCES);

        return $this;
    }

    /**
     * @module GlueBackendApiApplication|GlueHttp|GlueStorefrontApiApplication
     *
     * @param string|null $host
     *
     * @return $this
     */
    public function setHost($host)
    {
        $this->host = $host;
        $this->modifiedProperties[self::HOST] = true;

        return $this;
    }

    /**
     * @module GlueBackendApiApplication|GlueHttp|GlueStorefrontApiApplication
     *
     * @return string|null
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @module GlueBackendApiApplication|GlueHttp|GlueStorefrontApiApplication
     *
     * @param string|null $host
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setHostOrFail($host)
    {
        if ($host === null) {
            $this->throwNullValueException(static::HOST);
        }

        return $this->setHost($host);
    }

    /**
     * @module GlueBackendApiApplication|GlueHttp|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getHostOrFail()
    {
        if ($this->host === null) {
            $this->throwNullValueException(static::HOST);
        }

        return $this->host;
    }

    /**
     * @module GlueBackendApiApplication|GlueHttp|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireHost()
    {
        $this->assertPropertyIsSet(self::HOST);

        return $this;
    }

    /**
     * @module GlueBackendApiApplication|GlueHttp|GlueStorefrontApiApplication
     *
     * @param string|null $parametersString
     *
     * @return $this
     */
    public function setParametersString($parametersString)
    {
        $this->parametersString = $parametersString;
        $this->modifiedProperties[self::PARAMETERS_STRING] = true;

        return $this;
    }

    /**
     * @module GlueBackendApiApplication|GlueHttp|GlueStorefrontApiApplication
     *
     * @return string|null
     */
    public function getParametersString()
    {
        return $this->parametersString;
    }

    /**
     * @module GlueBackendApiApplication|GlueHttp|GlueStorefrontApiApplication
     *
     * @param string|null $parametersString
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setParametersStringOrFail($parametersString)
    {
        if ($parametersString === null) {
            $this->throwNullValueException(static::PARAMETERS_STRING);
        }

        return $this->setParametersString($parametersString);
    }

    /**
     * @module GlueBackendApiApplication|GlueHttp|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getParametersStringOrFail()
    {
        if ($this->parametersString === null) {
            $this->throwNullValueException(static::PARAMETERS_STRING);
        }

        return $this->parametersString;
    }

    /**
     * @module GlueBackendApiApplication|GlueHttp|GlueStorefrontApiApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireParametersString()
    {
        $this->assertPropertyIsSet(self::PARAMETERS_STRING);

        return $this;
    }

    /**
     * @module GlueHttp
     *
     * @param array $queryFields
     *
     * @return $this
     */
    public function setQueryFields($queryFields)
    {
        if ($queryFields === null) {
            $queryFields = [];
        }

        $this->queryFields = $queryFields;
        $this->modifiedProperties[self::QUERY_FIELDS] = true;

        return $this;
    }

    /**
     * @module GlueHttp
     *
     * @return array
     */
    public function getQueryFields()
    {
        return $this->queryFields;
    }

    /**
     * @module GlueHttp
     *
     * @param string|int $queryFieldKey
     * @param mixed $queryFieldValue
     *
     * @return $this
     */
    public function addQueryField($queryFieldKey, $queryFieldValue)
    {
        $this->queryFields[$queryFieldKey] = $queryFieldValue;
        $this->modifiedProperties[self::QUERY_FIELDS] = true;

        return $this;
    }

    /**
     * @module GlueHttp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQueryFields()
    {
        $this->assertPropertyIsSet(self::QUERY_FIELDS);

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
                case 'locale':
                case 'content':
                case 'path':
                case 'meta':
                case 'convention':
                case 'application':
                case 'attributes':
                case 'method':
                case 'host':
                case 'parametersString':
                case 'queryFields':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'resource':
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
                case 'parentResources':
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
                case 'locale':
                case 'content':
                case 'path':
                case 'meta':
                case 'convention':
                case 'application':
                case 'attributes':
                case 'method':
                case 'host':
                case 'parametersString':
                case 'queryFields':
                    $values[$arrayKey] = $value;

                    break;
                case 'resource':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'parentResources':
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
                case 'locale':
                case 'content':
                case 'path':
                case 'meta':
                case 'convention':
                case 'application':
                case 'attributes':
                case 'method':
                case 'host':
                case 'parametersString':
                case 'queryFields':
                    $values[$arrayKey] = $value;

                    break;
                case 'resource':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'parentResources':
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
        $this->parentResources = $this->parentResources ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'locale' => $this->locale,
            'content' => $this->content,
            'path' => $this->path,
            'meta' => $this->meta,
            'convention' => $this->convention,
            'application' => $this->application,
            'attributes' => $this->attributes,
            'method' => $this->method,
            'host' => $this->host,
            'parametersString' => $this->parametersString,
            'queryFields' => $this->queryFields,
            'resource' => $this->resource,
            'parentResources' => $this->parentResources,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'locale' => $this->locale,
            'content' => $this->content,
            'path' => $this->path,
            'meta' => $this->meta,
            'convention' => $this->convention,
            'application' => $this->application,
            'attributes' => $this->attributes,
            'method' => $this->method,
            'host' => $this->host,
            'parameters_string' => $this->parametersString,
            'query_fields' => $this->queryFields,
            'resource' => $this->resource,
            'parent_resources' => $this->parentResources,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, false) : $this->locale,
            'content' => $this->content instanceof AbstractTransfer ? $this->content->toArray(true, false) : $this->content,
            'path' => $this->path instanceof AbstractTransfer ? $this->path->toArray(true, false) : $this->path,
            'meta' => $this->meta instanceof AbstractTransfer ? $this->meta->toArray(true, false) : $this->meta,
            'convention' => $this->convention instanceof AbstractTransfer ? $this->convention->toArray(true, false) : $this->convention,
            'application' => $this->application instanceof AbstractTransfer ? $this->application->toArray(true, false) : $this->application,
            'attributes' => $this->attributes instanceof AbstractTransfer ? $this->attributes->toArray(true, false) : $this->attributes,
            'method' => $this->method instanceof AbstractTransfer ? $this->method->toArray(true, false) : $this->method,
            'host' => $this->host instanceof AbstractTransfer ? $this->host->toArray(true, false) : $this->host,
            'parameters_string' => $this->parametersString instanceof AbstractTransfer ? $this->parametersString->toArray(true, false) : $this->parametersString,
            'query_fields' => $this->queryFields instanceof AbstractTransfer ? $this->queryFields->toArray(true, false) : $this->queryFields,
            'resource' => $this->resource instanceof AbstractTransfer ? $this->resource->toArray(true, false) : $this->resource,
            'parent_resources' => $this->parentResources instanceof AbstractTransfer ? $this->parentResources->toArray(true, false) : $this->addValuesToCollection($this->parentResources, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, true) : $this->locale,
            'content' => $this->content instanceof AbstractTransfer ? $this->content->toArray(true, true) : $this->content,
            'path' => $this->path instanceof AbstractTransfer ? $this->path->toArray(true, true) : $this->path,
            'meta' => $this->meta instanceof AbstractTransfer ? $this->meta->toArray(true, true) : $this->meta,
            'convention' => $this->convention instanceof AbstractTransfer ? $this->convention->toArray(true, true) : $this->convention,
            'application' => $this->application instanceof AbstractTransfer ? $this->application->toArray(true, true) : $this->application,
            'attributes' => $this->attributes instanceof AbstractTransfer ? $this->attributes->toArray(true, true) : $this->attributes,
            'method' => $this->method instanceof AbstractTransfer ? $this->method->toArray(true, true) : $this->method,
            'host' => $this->host instanceof AbstractTransfer ? $this->host->toArray(true, true) : $this->host,
            'parametersString' => $this->parametersString instanceof AbstractTransfer ? $this->parametersString->toArray(true, true) : $this->parametersString,
            'queryFields' => $this->queryFields instanceof AbstractTransfer ? $this->queryFields->toArray(true, true) : $this->queryFields,
            'resource' => $this->resource instanceof AbstractTransfer ? $this->resource->toArray(true, true) : $this->resource,
            'parentResources' => $this->parentResources instanceof AbstractTransfer ? $this->parentResources->toArray(true, true) : $this->addValuesToCollection($this->parentResources, true, true),
        ];
    }
}
