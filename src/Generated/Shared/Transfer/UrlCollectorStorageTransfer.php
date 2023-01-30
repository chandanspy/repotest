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
class UrlCollectorStorageTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const REFERENCE_KEY = 'referenceKey';

    /**
     * @var string
     */
    public const TYPE = 'type';

    /**
     * @var string
     */
    public const LOCALE_URLS = 'localeUrls';

    /**
     * @var string|null
     */
    protected $referenceKey;

    /**
     * @var string|null
     */
    protected $type;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\UrlTransfer[]
     */
    protected $localeUrls;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'reference_key' => 'referenceKey',
        'referenceKey' => 'referenceKey',
        'ReferenceKey' => 'referenceKey',
        'type' => 'type',
        'Type' => 'type',
        'locale_urls' => 'localeUrls',
        'localeUrls' => 'localeUrls',
        'LocaleUrls' => 'localeUrls',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::REFERENCE_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'reference_key',
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
        self::LOCALE_URLS => [
            'type' => 'Generated\Shared\Transfer\UrlTransfer',
            'type_shim' => null,
            'name_underscore' => 'locale_urls',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module Url
     *
     * @param string|null $referenceKey
     *
     * @return $this
     */
    public function setReferenceKey($referenceKey)
    {
        $this->referenceKey = $referenceKey;
        $this->modifiedProperties[self::REFERENCE_KEY] = true;

        return $this;
    }

    /**
     * @module Url
     *
     * @return string|null
     */
    public function getReferenceKey()
    {
        return $this->referenceKey;
    }

    /**
     * @module Url
     *
     * @param string|null $referenceKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setReferenceKeyOrFail($referenceKey)
    {
        if ($referenceKey === null) {
            $this->throwNullValueException(static::REFERENCE_KEY);
        }

        return $this->setReferenceKey($referenceKey);
    }

    /**
     * @module Url
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getReferenceKeyOrFail()
    {
        if ($this->referenceKey === null) {
            $this->throwNullValueException(static::REFERENCE_KEY);
        }

        return $this->referenceKey;
    }

    /**
     * @module Url
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireReferenceKey()
    {
        $this->assertPropertyIsSet(self::REFERENCE_KEY);

        return $this;
    }

    /**
     * @module Url
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
     * @module Url
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @module Url
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
     * @module Url
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
     * @module Url
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
     * @module Url
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\UrlTransfer[] $localeUrls
     *
     * @return $this
     */
    public function setLocaleUrls(ArrayObject $localeUrls)
    {
        $this->localeUrls = $localeUrls;
        $this->modifiedProperties[self::LOCALE_URLS] = true;

        return $this;
    }

    /**
     * @module Url
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\UrlTransfer[]
     */
    public function getLocaleUrls()
    {
        return $this->localeUrls;
    }

    /**
     * @module Url
     *
     * @param \Generated\Shared\Transfer\UrlTransfer $localeUrls
     *
     * @return $this
     */
    public function addLocaleUrls(UrlTransfer $localeUrls)
    {
        $this->localeUrls[] = $localeUrls;
        $this->modifiedProperties[self::LOCALE_URLS] = true;

        return $this;
    }

    /**
     * @module Url
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocaleUrls()
    {
        $this->assertCollectionPropertyIsSet(self::LOCALE_URLS);

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
                case 'referenceKey':
                case 'type':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'localeUrls':
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
                case 'referenceKey':
                case 'type':
                    $values[$arrayKey] = $value;

                    break;
                case 'localeUrls':
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
                case 'referenceKey':
                case 'type':
                    $values[$arrayKey] = $value;

                    break;
                case 'localeUrls':
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
        $this->localeUrls = $this->localeUrls ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'referenceKey' => $this->referenceKey,
            'type' => $this->type,
            'localeUrls' => $this->localeUrls,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'reference_key' => $this->referenceKey,
            'type' => $this->type,
            'locale_urls' => $this->localeUrls,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'reference_key' => $this->referenceKey instanceof AbstractTransfer ? $this->referenceKey->toArray(true, false) : $this->referenceKey,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, false) : $this->type,
            'locale_urls' => $this->localeUrls instanceof AbstractTransfer ? $this->localeUrls->toArray(true, false) : $this->addValuesToCollection($this->localeUrls, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'referenceKey' => $this->referenceKey instanceof AbstractTransfer ? $this->referenceKey->toArray(true, true) : $this->referenceKey,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, true) : $this->type,
            'localeUrls' => $this->localeUrls instanceof AbstractTransfer ? $this->localeUrls->toArray(true, true) : $this->addValuesToCollection($this->localeUrls, true, true),
        ];
    }
}
