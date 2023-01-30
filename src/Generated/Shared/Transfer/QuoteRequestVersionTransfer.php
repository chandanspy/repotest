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
class QuoteRequestVersionTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_QUOTE_REQUEST_VERSION = 'idQuoteRequestVersion';

    /**
     * @var string
     */
    public const VERSION_REFERENCE = 'versionReference';

    /**
     * @var string
     */
    public const QUOTE = 'quote';

    /**
     * @var string
     */
    public const METADATA = 'metadata';

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
    public const CREATED_AT = 'createdAt';

    /**
     * @var int|null
     */
    protected $idQuoteRequestVersion;

    /**
     * @var string|null
     */
    protected $versionReference;

    /**
     * @var \Generated\Shared\Transfer\QuoteTransfer|null
     */
    protected $quote;

    /**
     * @var array
     */
    protected $metadata = [];

    /**
     * @var int|null
     */
    protected $fkQuoteRequest;

    /**
     * @var int|null
     */
    protected $version;

    /**
     * @var string|null
     */
    protected $createdAt;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_quote_request_version' => 'idQuoteRequestVersion',
        'idQuoteRequestVersion' => 'idQuoteRequestVersion',
        'IdQuoteRequestVersion' => 'idQuoteRequestVersion',
        'version_reference' => 'versionReference',
        'versionReference' => 'versionReference',
        'VersionReference' => 'versionReference',
        'quote' => 'quote',
        'Quote' => 'quote',
        'metadata' => 'metadata',
        'Metadata' => 'metadata',
        'fk_quote_request' => 'fkQuoteRequest',
        'fkQuoteRequest' => 'fkQuoteRequest',
        'FkQuoteRequest' => 'fkQuoteRequest',
        'version' => 'version',
        'Version' => 'version',
        'created_at' => 'createdAt',
        'createdAt' => 'createdAt',
        'CreatedAt' => 'createdAt',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_QUOTE_REQUEST_VERSION => [
            'type' => 'int',
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
        self::QUOTE => [
            'type' => 'Generated\Shared\Transfer\QuoteTransfer',
            'type_shim' => null,
            'name_underscore' => 'quote',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::METADATA => [
            'type' => 'array',
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
        self::FK_QUOTE_REQUEST => [
            'type' => 'int',
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
            'type' => 'int',
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
        self::CREATED_AT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'created_at',
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
     * @module QuoteRequestAgentPage|QuoteRequest
     *
     * @param int|null $idQuoteRequestVersion
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
     * @module QuoteRequestAgentPage|QuoteRequest
     *
     * @return int|null
     */
    public function getIdQuoteRequestVersion()
    {
        return $this->idQuoteRequestVersion;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequest
     *
     * @param int|null $idQuoteRequestVersion
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
     * @module QuoteRequestAgentPage|QuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdQuoteRequestVersionOrFail()
    {
        if ($this->idQuoteRequestVersion === null) {
            $this->throwNullValueException(static::ID_QUOTE_REQUEST_VERSION);
        }

        return $this->idQuoteRequestVersion;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequest
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
     * @module QuoteRequestAgentPage|QuoteRequestPage|QuoteRequestAgent|QuoteRequest
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
     * @module QuoteRequestAgentPage|QuoteRequestPage|QuoteRequestAgent|QuoteRequest
     *
     * @return string|null
     */
    public function getVersionReference()
    {
        return $this->versionReference;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestPage|QuoteRequestAgent|QuoteRequest
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
     * @module QuoteRequestAgentPage|QuoteRequestPage|QuoteRequestAgent|QuoteRequest
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
     * @module QuoteRequestAgentPage|QuoteRequestPage|QuoteRequestAgent|QuoteRequest
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
     * @module QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|QuoteRequestWidget|ConfigurableBundlesRestApi|ProductMeasurementUnitsRestApi|ProductOptionsRestApi|QuoteApproval|QuoteRequestAgent|QuoteRequest|ShipmentsRestApi
     *
     * @param \Generated\Shared\Transfer\QuoteTransfer|null $quote
     *
     * @return $this
     */
    public function setQuote(QuoteTransfer $quote = null)
    {
        $this->quote = $quote;
        $this->modifiedProperties[self::QUOTE] = true;

        return $this;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|QuoteRequestWidget|ConfigurableBundlesRestApi|ProductMeasurementUnitsRestApi|ProductOptionsRestApi|QuoteApproval|QuoteRequestAgent|QuoteRequest|ShipmentsRestApi
     *
     * @return \Generated\Shared\Transfer\QuoteTransfer|null
     */
    public function getQuote()
    {
        return $this->quote;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|QuoteRequestWidget|ConfigurableBundlesRestApi|ProductMeasurementUnitsRestApi|ProductOptionsRestApi|QuoteApproval|QuoteRequestAgent|QuoteRequest|ShipmentsRestApi
     *
     * @param \Generated\Shared\Transfer\QuoteTransfer $quote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuoteOrFail(QuoteTransfer $quote)
    {
        return $this->setQuote($quote);
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|QuoteRequestWidget|ConfigurableBundlesRestApi|ProductMeasurementUnitsRestApi|ProductOptionsRestApi|QuoteApproval|QuoteRequestAgent|QuoteRequest|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\QuoteTransfer
     */
    public function getQuoteOrFail()
    {
        if ($this->quote === null) {
            $this->throwNullValueException(static::QUOTE);
        }

        return $this->quote;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|QuoteRequestWidget|ConfigurableBundlesRestApi|ProductMeasurementUnitsRestApi|ProductOptionsRestApi|QuoteApproval|QuoteRequestAgent|QuoteRequest|ShipmentsRestApi
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
     * @module QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|QuoteRequestAgent|QuoteRequest
     *
     * @param array|null $metadata
     *
     * @return $this
     */
    public function setMetadata(array $metadata = null)
    {
        if ($metadata === null) {
            $metadata = [];
        }

        $this->metadata = $metadata;
        $this->modifiedProperties[self::METADATA] = true;

        return $this;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|QuoteRequestAgent|QuoteRequest
     *
     * @return array
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|QuoteRequestAgent|QuoteRequest
     *
     * @param mixed $metadata
     *
     * @return $this
     */
    public function addMetadata($metadata)
    {
        $this->metadata[] = $metadata;
        $this->modifiedProperties[self::METADATA] = true;

        return $this;
    }

    /**
     * @module QuoteRequestAgentPage|QuoteRequestAgentWidget|QuoteRequestPage|QuoteRequestAgent|QuoteRequest
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
     * @module QuoteRequest
     *
     * @param int|null $fkQuoteRequest
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
     * @module QuoteRequest
     *
     * @return int|null
     */
    public function getFkQuoteRequest()
    {
        return $this->fkQuoteRequest;
    }

    /**
     * @module QuoteRequest
     *
     * @param int|null $fkQuoteRequest
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
     * @module QuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkQuoteRequestOrFail()
    {
        if ($this->fkQuoteRequest === null) {
            $this->throwNullValueException(static::FK_QUOTE_REQUEST);
        }

        return $this->fkQuoteRequest;
    }

    /**
     * @module QuoteRequest
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
     * @module QuoteRequest
     *
     * @param int|null $version
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
     * @module QuoteRequest
     *
     * @return int|null
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @module QuoteRequest
     *
     * @param int|null $version
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
     * @module QuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getVersionOrFail()
    {
        if ($this->version === null) {
            $this->throwNullValueException(static::VERSION);
        }

        return $this->version;
    }

    /**
     * @module QuoteRequest
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
     * @module QuoteRequest
     *
     * @param string|null $createdAt
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        $this->modifiedProperties[self::CREATED_AT] = true;

        return $this;
    }

    /**
     * @module QuoteRequest
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @module QuoteRequest
     *
     * @param string|null $createdAt
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCreatedAtOrFail($createdAt)
    {
        if ($createdAt === null) {
            $this->throwNullValueException(static::CREATED_AT);
        }

        return $this->setCreatedAt($createdAt);
    }

    /**
     * @module QuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCreatedAtOrFail()
    {
        if ($this->createdAt === null) {
            $this->throwNullValueException(static::CREATED_AT);
        }

        return $this->createdAt;
    }

    /**
     * @module QuoteRequest
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCreatedAt()
    {
        $this->assertPropertyIsSet(self::CREATED_AT);

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
                case 'versionReference':
                case 'metadata':
                case 'fkQuoteRequest':
                case 'version':
                case 'createdAt':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'quote':
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
                case 'idQuoteRequestVersion':
                case 'versionReference':
                case 'metadata':
                case 'fkQuoteRequest':
                case 'version':
                case 'createdAt':
                    $values[$arrayKey] = $value;

                    break;
                case 'quote':
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
                case 'versionReference':
                case 'metadata':
                case 'fkQuoteRequest':
                case 'version':
                case 'createdAt':
                    $values[$arrayKey] = $value;

                    break;
                case 'quote':
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
            'versionReference' => $this->versionReference,
            'metadata' => $this->metadata,
            'fkQuoteRequest' => $this->fkQuoteRequest,
            'version' => $this->version,
            'createdAt' => $this->createdAt,
            'quote' => $this->quote,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_quote_request_version' => $this->idQuoteRequestVersion,
            'version_reference' => $this->versionReference,
            'metadata' => $this->metadata,
            'fk_quote_request' => $this->fkQuoteRequest,
            'version' => $this->version,
            'created_at' => $this->createdAt,
            'quote' => $this->quote,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_quote_request_version' => $this->idQuoteRequestVersion instanceof AbstractTransfer ? $this->idQuoteRequestVersion->toArray(true, false) : $this->idQuoteRequestVersion,
            'version_reference' => $this->versionReference instanceof AbstractTransfer ? $this->versionReference->toArray(true, false) : $this->versionReference,
            'metadata' => $this->metadata instanceof AbstractTransfer ? $this->metadata->toArray(true, false) : $this->metadata,
            'fk_quote_request' => $this->fkQuoteRequest instanceof AbstractTransfer ? $this->fkQuoteRequest->toArray(true, false) : $this->fkQuoteRequest,
            'version' => $this->version instanceof AbstractTransfer ? $this->version->toArray(true, false) : $this->version,
            'created_at' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, false) : $this->createdAt,
            'quote' => $this->quote instanceof AbstractTransfer ? $this->quote->toArray(true, false) : $this->quote,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idQuoteRequestVersion' => $this->idQuoteRequestVersion instanceof AbstractTransfer ? $this->idQuoteRequestVersion->toArray(true, true) : $this->idQuoteRequestVersion,
            'versionReference' => $this->versionReference instanceof AbstractTransfer ? $this->versionReference->toArray(true, true) : $this->versionReference,
            'metadata' => $this->metadata instanceof AbstractTransfer ? $this->metadata->toArray(true, true) : $this->metadata,
            'fkQuoteRequest' => $this->fkQuoteRequest instanceof AbstractTransfer ? $this->fkQuoteRequest->toArray(true, true) : $this->fkQuoteRequest,
            'version' => $this->version instanceof AbstractTransfer ? $this->version->toArray(true, true) : $this->version,
            'createdAt' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, true) : $this->createdAt,
            'quote' => $this->quote instanceof AbstractTransfer ? $this->quote->toArray(true, true) : $this->quote,
        ];
    }
}
