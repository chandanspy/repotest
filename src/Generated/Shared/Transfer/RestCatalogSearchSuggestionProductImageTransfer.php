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
class RestCatalogSearchSuggestionProductImageTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const EXTERNAL_URL_SMALL = 'externalUrlSmall';

    /**
     * @var string
     */
    public const EXTERNAL_URL_LARGE = 'externalUrlLarge';

    /**
     * @var string|null
     */
    protected $externalUrlSmall;

    /**
     * @var string|null
     */
    protected $externalUrlLarge;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'external_url_small' => 'externalUrlSmall',
        'externalUrlSmall' => 'externalUrlSmall',
        'ExternalUrlSmall' => 'externalUrlSmall',
        'external_url_large' => 'externalUrlLarge',
        'externalUrlLarge' => 'externalUrlLarge',
        'ExternalUrlLarge' => 'externalUrlLarge',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::EXTERNAL_URL_SMALL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'external_url_small',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::EXTERNAL_URL_LARGE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'external_url_large',
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
     * @param string|null $externalUrlSmall
     *
     * @return $this
     */
    public function setExternalUrlSmall($externalUrlSmall)
    {
        $this->externalUrlSmall = $externalUrlSmall;
        $this->modifiedProperties[self::EXTERNAL_URL_SMALL] = true;

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @return string|null
     */
    public function getExternalUrlSmall()
    {
        return $this->externalUrlSmall;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @param string|null $externalUrlSmall
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setExternalUrlSmallOrFail($externalUrlSmall)
    {
        if ($externalUrlSmall === null) {
            $this->throwNullValueException(static::EXTERNAL_URL_SMALL);
        }

        return $this->setExternalUrlSmall($externalUrlSmall);
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getExternalUrlSmallOrFail()
    {
        if ($this->externalUrlSmall === null) {
            $this->throwNullValueException(static::EXTERNAL_URL_SMALL);
        }

        return $this->externalUrlSmall;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireExternalUrlSmall()
    {
        $this->assertPropertyIsSet(self::EXTERNAL_URL_SMALL);

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @param string|null $externalUrlLarge
     *
     * @return $this
     */
    public function setExternalUrlLarge($externalUrlLarge)
    {
        $this->externalUrlLarge = $externalUrlLarge;
        $this->modifiedProperties[self::EXTERNAL_URL_LARGE] = true;

        return $this;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @return string|null
     */
    public function getExternalUrlLarge()
    {
        return $this->externalUrlLarge;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @param string|null $externalUrlLarge
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setExternalUrlLargeOrFail($externalUrlLarge)
    {
        if ($externalUrlLarge === null) {
            $this->throwNullValueException(static::EXTERNAL_URL_LARGE);
        }

        return $this->setExternalUrlLarge($externalUrlLarge);
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getExternalUrlLargeOrFail()
    {
        if ($this->externalUrlLarge === null) {
            $this->throwNullValueException(static::EXTERNAL_URL_LARGE);
        }

        return $this->externalUrlLarge;
    }

    /**
     * @module CatalogSearchRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireExternalUrlLarge()
    {
        $this->assertPropertyIsSet(self::EXTERNAL_URL_LARGE);

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
                case 'externalUrlSmall':
                case 'externalUrlLarge':
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
                case 'externalUrlSmall':
                case 'externalUrlLarge':
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
                case 'externalUrlSmall':
                case 'externalUrlLarge':
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
            'externalUrlSmall' => $this->externalUrlSmall,
            'externalUrlLarge' => $this->externalUrlLarge,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'external_url_small' => $this->externalUrlSmall,
            'external_url_large' => $this->externalUrlLarge,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'external_url_small' => $this->externalUrlSmall instanceof AbstractTransfer ? $this->externalUrlSmall->toArray(true, false) : $this->externalUrlSmall,
            'external_url_large' => $this->externalUrlLarge instanceof AbstractTransfer ? $this->externalUrlLarge->toArray(true, false) : $this->externalUrlLarge,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'externalUrlSmall' => $this->externalUrlSmall instanceof AbstractTransfer ? $this->externalUrlSmall->toArray(true, true) : $this->externalUrlSmall,
            'externalUrlLarge' => $this->externalUrlLarge instanceof AbstractTransfer ? $this->externalUrlLarge->toArray(true, true) : $this->externalUrlLarge,
        ];
    }
}
