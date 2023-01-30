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
class UrlRedirectStorageTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_URL_REDIRECT = 'idUrlRedirect';

    /**
     * @var string
     */
    public const SOURCE = 'source';

    /**
     * @var string
     */
    public const TO_URL = 'toUrl';

    /**
     * @var string
     */
    public const STATUS = 'status';

    /**
     * @var int|null
     */
    protected $idUrlRedirect;

    /**
     * @var \Generated\Shared\Transfer\UrlTransfer|null
     */
    protected $source;

    /**
     * @var string|null
     */
    protected $toUrl;

    /**
     * @var int|null
     */
    protected $status;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_url_redirect' => 'idUrlRedirect',
        'idUrlRedirect' => 'idUrlRedirect',
        'IdUrlRedirect' => 'idUrlRedirect',
        'source' => 'source',
        'Source' => 'source',
        'to_url' => 'toUrl',
        'toUrl' => 'toUrl',
        'ToUrl' => 'toUrl',
        'status' => 'status',
        'Status' => 'status',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_URL_REDIRECT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_url_redirect',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SOURCE => [
            'type' => 'Generated\Shared\Transfer\UrlTransfer',
            'type_shim' => null,
            'name_underscore' => 'source',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TO_URL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'to_url',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STATUS => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'status',
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
     * @module UrlStorage
     *
     * @param int|null $idUrlRedirect
     *
     * @return $this
     */
    public function setIdUrlRedirect($idUrlRedirect)
    {
        $this->idUrlRedirect = $idUrlRedirect;
        $this->modifiedProperties[self::ID_URL_REDIRECT] = true;

        return $this;
    }

    /**
     * @module UrlStorage
     *
     * @return int|null
     */
    public function getIdUrlRedirect()
    {
        return $this->idUrlRedirect;
    }

    /**
     * @module UrlStorage
     *
     * @param int|null $idUrlRedirect
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdUrlRedirectOrFail($idUrlRedirect)
    {
        if ($idUrlRedirect === null) {
            $this->throwNullValueException(static::ID_URL_REDIRECT);
        }

        return $this->setIdUrlRedirect($idUrlRedirect);
    }

    /**
     * @module UrlStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdUrlRedirectOrFail()
    {
        if ($this->idUrlRedirect === null) {
            $this->throwNullValueException(static::ID_URL_REDIRECT);
        }

        return $this->idUrlRedirect;
    }

    /**
     * @module UrlStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdUrlRedirect()
    {
        $this->assertPropertyIsSet(self::ID_URL_REDIRECT);

        return $this;
    }

    /**
     * @module UrlStorage
     *
     * @param \Generated\Shared\Transfer\UrlTransfer|null $source
     *
     * @return $this
     */
    public function setSource(UrlTransfer $source = null)
    {
        $this->source = $source;
        $this->modifiedProperties[self::SOURCE] = true;

        return $this;
    }

    /**
     * @module UrlStorage
     *
     * @return \Generated\Shared\Transfer\UrlTransfer|null
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @module UrlStorage
     *
     * @param \Generated\Shared\Transfer\UrlTransfer $source
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSourceOrFail(UrlTransfer $source)
    {
        return $this->setSource($source);
    }

    /**
     * @module UrlStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\UrlTransfer
     */
    public function getSourceOrFail()
    {
        if ($this->source === null) {
            $this->throwNullValueException(static::SOURCE);
        }

        return $this->source;
    }

    /**
     * @module UrlStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSource()
    {
        $this->assertPropertyIsSet(self::SOURCE);

        return $this;
    }

    /**
     * @module UrlStorage|UrlsRestApi
     *
     * @param string|null $toUrl
     *
     * @return $this
     */
    public function setToUrl($toUrl)
    {
        $this->toUrl = $toUrl;
        $this->modifiedProperties[self::TO_URL] = true;

        return $this;
    }

    /**
     * @module UrlStorage|UrlsRestApi
     *
     * @return string|null
     */
    public function getToUrl()
    {
        return $this->toUrl;
    }

    /**
     * @module UrlStorage|UrlsRestApi
     *
     * @param string|null $toUrl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setToUrlOrFail($toUrl)
    {
        if ($toUrl === null) {
            $this->throwNullValueException(static::TO_URL);
        }

        return $this->setToUrl($toUrl);
    }

    /**
     * @module UrlStorage|UrlsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getToUrlOrFail()
    {
        if ($this->toUrl === null) {
            $this->throwNullValueException(static::TO_URL);
        }

        return $this->toUrl;
    }

    /**
     * @module UrlStorage|UrlsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireToUrl()
    {
        $this->assertPropertyIsSet(self::TO_URL);

        return $this;
    }

    /**
     * @module UrlStorage
     *
     * @param int|null $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        $this->modifiedProperties[self::STATUS] = true;

        return $this;
    }

    /**
     * @module UrlStorage
     *
     * @return int|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @module UrlStorage
     *
     * @param int|null $status
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStatusOrFail($status)
    {
        if ($status === null) {
            $this->throwNullValueException(static::STATUS);
        }

        return $this->setStatus($status);
    }

    /**
     * @module UrlStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getStatusOrFail()
    {
        if ($this->status === null) {
            $this->throwNullValueException(static::STATUS);
        }

        return $this->status;
    }

    /**
     * @module UrlStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStatus()
    {
        $this->assertPropertyIsSet(self::STATUS);

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
                case 'idUrlRedirect':
                case 'toUrl':
                case 'status':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'source':
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
                case 'idUrlRedirect':
                case 'toUrl':
                case 'status':
                    $values[$arrayKey] = $value;

                    break;
                case 'source':
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
                case 'idUrlRedirect':
                case 'toUrl':
                case 'status':
                    $values[$arrayKey] = $value;

                    break;
                case 'source':
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
            'idUrlRedirect' => $this->idUrlRedirect,
            'toUrl' => $this->toUrl,
            'status' => $this->status,
            'source' => $this->source,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_url_redirect' => $this->idUrlRedirect,
            'to_url' => $this->toUrl,
            'status' => $this->status,
            'source' => $this->source,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_url_redirect' => $this->idUrlRedirect instanceof AbstractTransfer ? $this->idUrlRedirect->toArray(true, false) : $this->idUrlRedirect,
            'to_url' => $this->toUrl instanceof AbstractTransfer ? $this->toUrl->toArray(true, false) : $this->toUrl,
            'status' => $this->status instanceof AbstractTransfer ? $this->status->toArray(true, false) : $this->status,
            'source' => $this->source instanceof AbstractTransfer ? $this->source->toArray(true, false) : $this->source,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idUrlRedirect' => $this->idUrlRedirect instanceof AbstractTransfer ? $this->idUrlRedirect->toArray(true, true) : $this->idUrlRedirect,
            'toUrl' => $this->toUrl instanceof AbstractTransfer ? $this->toUrl->toArray(true, true) : $this->toUrl,
            'status' => $this->status instanceof AbstractTransfer ? $this->status->toArray(true, true) : $this->status,
            'source' => $this->source instanceof AbstractTransfer ? $this->source->toArray(true, true) : $this->source,
        ];
    }
}
