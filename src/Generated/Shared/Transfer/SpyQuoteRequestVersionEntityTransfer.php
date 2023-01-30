<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyQuoteRequestVersionEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_QUOTE_REQUEST_VERSION = 'idQuoteRequestVersion';

    /**
     * @var string
     */
    public const FK_QUOTE_REQUEST = 'fkQuoteRequest';

    /**
     * @var string
     */
    public const VERSION = 'version';

    /**
     * @var string
     */
    public const VERSION_REFERENCE = 'versionReference';

    /**
     * @var string
     */
    public const METADATA = 'metadata';

    /**
     * @var string
     */
    public const QUOTE = 'quote';

    /**
     * @var string
     */
    public const SPY_QUOTE_REQUEST = 'spyQuoteRequest';

    /**
     * @var integer|null
     */
    protected $idQuoteRequestVersion;

    /**
     * @var integer|null
     */
    protected $fkQuoteRequest;

    /**
     * @var integer|null
     */
    protected $version;

    /**
     * @var string|null
     */
    protected $versionReference;

    /**
     * @var string|null
     */
    protected $metadata;

    /**
     * @var string|null
     */
    protected $quote;

    /**
     * @var \Generated\Shared\Transfer\SpyQuoteRequestEntityTransfer|null
     */
    protected $spyQuoteRequest;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_quote_request_version' => 'idQuoteRequestVersion',
        'idQuoteRequestVersion' => 'idQuoteRequestVersion',
        'IdQuoteRequestVersion' => 'idQuoteRequestVersion',
        'fk_quote_request' => 'fkQuoteRequest',
        'fkQuoteRequest' => 'fkQuoteRequest',
        'FkQuoteRequest' => 'fkQuoteRequest',
        'version' => 'version',
        'Version' => 'version',
        'version_reference' => 'versionReference',
        'versionReference' => 'versionReference',
        'VersionReference' => 'versionReference',
        'metadata' => 'metadata',
        'Metadata' => 'metadata',
        'quote' => 'quote',
        'Quote' => 'quote',
        'spy_quote_request' => 'spyQuoteRequest',
        'spyQuoteRequest' => 'spyQuoteRequest',
        'SpyQuoteRequest' => 'spyQuoteRequest',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_QUOTE_REQUEST_VERSION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_quote_request_version',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_QUOTE_REQUEST => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_quote_request',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::VERSION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'version',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::VERSION_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'version_reference',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::METADATA => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'metadata',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::QUOTE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'quote',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_QUOTE_REQUEST => [
            'type' => 'Generated\Shared\Transfer\SpyQuoteRequestEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_quote_request',
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
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\QuoteRequest\Persistence\SpyQuoteRequestVersion';


    /**
     * @module 
     *
     * @param integer|null $idQuoteRequestVersion
     *
     * @return $this
     */
    public function setIdQuoteRequestVersion($idQuoteRequestVersion)
    {
        $this->idQuoteRequestVersion = $idQuoteRequestVersion;
        $this->modifiedProperties[self::ID_QUOTE_REQUEST_VERSION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdQuoteRequestVersion()
    {
        return $this->idQuoteRequestVersion;
    }

    /**
     * @module 
     *
     * @param integer|null $idQuoteRequestVersion
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdQuoteRequestVersionOrFail($idQuoteRequestVersion)
    {
        if ($idQuoteRequestVersion === null) {
            $this->throwNullValueException(static::ID_QUOTE_REQUEST_VERSION);
        }

        return $this->setIdQuoteRequestVersion($idQuoteRequestVersion);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdQuoteRequestVersionOrFail()
    {
        if ($this->idQuoteRequestVersion === null) {
            $this->throwNullValueException(static::ID_QUOTE_REQUEST_VERSION);
        }

        return $this->idQuoteRequestVersion;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdQuoteRequestVersion()
    {
        $this->assertPropertyIsSet(self::ID_QUOTE_REQUEST_VERSION);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkQuoteRequest
     *
     * @return $this
     */
    public function setFkQuoteRequest($fkQuoteRequest)
    {
        $this->fkQuoteRequest = $fkQuoteRequest;
        $this->modifiedProperties[self::FK_QUOTE_REQUEST] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkQuoteRequest()
    {
        return $this->fkQuoteRequest;
    }

    /**
     * @module 
     *
     * @param integer|null $fkQuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkQuoteRequestOrFail($fkQuoteRequest)
    {
        if ($fkQuoteRequest === null) {
            $this->throwNullValueException(static::FK_QUOTE_REQUEST);
        }

        return $this->setFkQuoteRequest($fkQuoteRequest);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkQuoteRequestOrFail()
    {
        if ($this->fkQuoteRequest === null) {
            $this->throwNullValueException(static::FK_QUOTE_REQUEST);
        }

        return $this->fkQuoteRequest;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkQuoteRequest()
    {
        $this->assertPropertyIsSet(self::FK_QUOTE_REQUEST);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        $this->modifiedProperties[self::VERSION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @module 
     *
     * @param integer|null $version
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setVersionOrFail($version)
    {
        if ($version === null) {
            $this->throwNullValueException(static::VERSION);
        }

        return $this->setVersion($version);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getVersionOrFail()
    {
        if ($this->version === null) {
            $this->throwNullValueException(static::VERSION);
        }

        return $this->version;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireVersion()
    {
        $this->assertPropertyIsSet(self::VERSION);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $versionReference
     *
     * @return $this
     */
    public function setVersionReference($versionReference)
    {
        $this->versionReference = $versionReference;
        $this->modifiedProperties[self::VERSION_REFERENCE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getVersionReference()
    {
        return $this->versionReference;
    }

    /**
     * @module 
     *
     * @param string|null $versionReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setVersionReferenceOrFail($versionReference)
    {
        if ($versionReference === null) {
            $this->throwNullValueException(static::VERSION_REFERENCE);
        }

        return $this->setVersionReference($versionReference);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getVersionReferenceOrFail()
    {
        if ($this->versionReference === null) {
            $this->throwNullValueException(static::VERSION_REFERENCE);
        }

        return $this->versionReference;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireVersionReference()
    {
        $this->assertPropertyIsSet(self::VERSION_REFERENCE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $metadata
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->metadata = $metadata;
        $this->modifiedProperties[self::METADATA] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @module 
     *
     * @param string|null $metadata
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMetadataOrFail($metadata)
    {
        if ($metadata === null) {
            $this->throwNullValueException(static::METADATA);
        }

        return $this->setMetadata($metadata);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getMetadataOrFail()
    {
        if ($this->metadata === null) {
            $this->throwNullValueException(static::METADATA);
        }

        return $this->metadata;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMetadata()
    {
        $this->assertPropertyIsSet(self::METADATA);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $quote
     *
     * @return $this
     */
    public function setQuote($quote)
    {
        $this->quote = $quote;
        $this->modifiedProperties[self::QUOTE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getQuote()
    {
        return $this->quote;
    }

    /**
     * @module 
     *
     * @param string|null $quote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuoteOrFail($quote)
    {
        if ($quote === null) {
            $this->throwNullValueException(static::QUOTE);
        }

        return $this->setQuote($quote);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getQuoteOrFail()
    {
        if ($this->quote === null) {
            $this->throwNullValueException(static::QUOTE);
        }

        return $this->quote;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuote()
    {
        $this->assertPropertyIsSet(self::QUOTE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyQuoteRequestEntityTransfer|null $spyQuoteRequest
     *
     * @return $this
     */
    public function setSpyQuoteRequest(SpyQuoteRequestEntityTransfer $spyQuoteRequest = null)
    {
        $this->spyQuoteRequest = $spyQuoteRequest;
        $this->modifiedProperties[self::SPY_QUOTE_REQUEST] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyQuoteRequestEntityTransfer|null
     */
    public function getSpyQuoteRequest()
    {
        return $this->spyQuoteRequest;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyQuoteRequestEntityTransfer $spyQuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyQuoteRequestOrFail(SpyQuoteRequestEntityTransfer $spyQuoteRequest)
    {
        return $this->setSpyQuoteRequest($spyQuoteRequest);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyQuoteRequestEntityTransfer
     */
    public function getSpyQuoteRequestOrFail()
    {
        if ($this->spyQuoteRequest === null) {
            $this->throwNullValueException(static::SPY_QUOTE_REQUEST);
        }

        return $this->spyQuoteRequest;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyQuoteRequest()
    {
        $this->assertPropertyIsSet(self::SPY_QUOTE_REQUEST);

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
                case 'idQuoteRequestVersion':
                case 'fkQuoteRequest':
                case 'version':
                case 'versionReference':
                case 'metadata':
                case 'quote':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyQuoteRequest':
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
                    $this->virtualProperties[$property] = $value;
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
                case 'idQuoteRequestVersion':
                case 'fkQuoteRequest':
                case 'version':
                case 'versionReference':
                case 'metadata':
                case 'quote':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyQuoteRequest':
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
                case 'idQuoteRequestVersion':
                case 'fkQuoteRequest':
                case 'version':
                case 'versionReference':
                case 'metadata':
                case 'quote':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyQuoteRequest':
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
            'idQuoteRequestVersion' => $this->idQuoteRequestVersion,
            'fkQuoteRequest' => $this->fkQuoteRequest,
            'version' => $this->version,
            'versionReference' => $this->versionReference,
            'metadata' => $this->metadata,
            'quote' => $this->quote,
            'spyQuoteRequest' => $this->spyQuoteRequest,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_quote_request_version' => $this->idQuoteRequestVersion,
            'fk_quote_request' => $this->fkQuoteRequest,
            'version' => $this->version,
            'version_reference' => $this->versionReference,
            'metadata' => $this->metadata,
            'quote' => $this->quote,
            'spy_quote_request' => $this->spyQuoteRequest,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_quote_request_version' => $this->idQuoteRequestVersion instanceof AbstractTransfer ? $this->idQuoteRequestVersion->toArray(true, false) : $this->idQuoteRequestVersion,
            'fk_quote_request' => $this->fkQuoteRequest instanceof AbstractTransfer ? $this->fkQuoteRequest->toArray(true, false) : $this->fkQuoteRequest,
            'version' => $this->version instanceof AbstractTransfer ? $this->version->toArray(true, false) : $this->version,
            'version_reference' => $this->versionReference instanceof AbstractTransfer ? $this->versionReference->toArray(true, false) : $this->versionReference,
            'metadata' => $this->metadata instanceof AbstractTransfer ? $this->metadata->toArray(true, false) : $this->metadata,
            'quote' => $this->quote instanceof AbstractTransfer ? $this->quote->toArray(true, false) : $this->quote,
            'spy_quote_request' => $this->spyQuoteRequest instanceof AbstractTransfer ? $this->spyQuoteRequest->toArray(true, false) : $this->spyQuoteRequest,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idQuoteRequestVersion' => $this->idQuoteRequestVersion instanceof AbstractTransfer ? $this->idQuoteRequestVersion->toArray(true, true) : $this->idQuoteRequestVersion,
            'fkQuoteRequest' => $this->fkQuoteRequest instanceof AbstractTransfer ? $this->fkQuoteRequest->toArray(true, true) : $this->fkQuoteRequest,
            'version' => $this->version instanceof AbstractTransfer ? $this->version->toArray(true, true) : $this->version,
            'versionReference' => $this->versionReference instanceof AbstractTransfer ? $this->versionReference->toArray(true, true) : $this->versionReference,
            'metadata' => $this->metadata instanceof AbstractTransfer ? $this->metadata->toArray(true, true) : $this->metadata,
            'quote' => $this->quote instanceof AbstractTransfer ? $this->quote->toArray(true, true) : $this->quote,
            'spyQuoteRequest' => $this->spyQuoteRequest instanceof AbstractTransfer ? $this->spyQuoteRequest->toArray(true, true) : $this->spyQuoteRequest,
        ];
    }
}
