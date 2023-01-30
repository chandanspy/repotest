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
class AvailabilityDataFeedTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_LOCALE = 'idLocale';

    /**
     * @var string
     */
    public const UPDATED_FROM = 'updatedFrom';

    /**
     * @var string
     */
    public const UPDATED_TO = 'updatedTo';

    /**
     * @var int|null
     */
    protected $idLocale;

    /**
     * @var string|null
     */
    protected $updatedFrom;

    /**
     * @var string|null
     */
    protected $updatedTo;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_locale' => 'idLocale',
        'idLocale' => 'idLocale',
        'IdLocale' => 'idLocale',
        'updated_from' => 'updatedFrom',
        'updatedFrom' => 'updatedFrom',
        'UpdatedFrom' => 'updatedFrom',
        'updated_to' => 'updatedTo',
        'updatedTo' => 'updatedTo',
        'UpdatedTo' => 'updatedTo',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_LOCALE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_locale',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::UPDATED_FROM => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'updated_from',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::UPDATED_TO => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'updated_to',
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
     * @module AvailabilityDataFeed
     *
     * @param int|null $idLocale
     *
     * @return $this
     */
    public function setIdLocale($idLocale)
    {
        $this->idLocale = $idLocale;
        $this->modifiedProperties[self::ID_LOCALE] = true;

        return $this;
    }

    /**
     * @module AvailabilityDataFeed
     *
     * @return int|null
     */
    public function getIdLocale()
    {
        return $this->idLocale;
    }

    /**
     * @module AvailabilityDataFeed
     *
     * @param int|null $idLocale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdLocaleOrFail($idLocale)
    {
        if ($idLocale === null) {
            $this->throwNullValueException(static::ID_LOCALE);
        }

        return $this->setIdLocale($idLocale);
    }

    /**
     * @module AvailabilityDataFeed
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdLocaleOrFail()
    {
        if ($this->idLocale === null) {
            $this->throwNullValueException(static::ID_LOCALE);
        }

        return $this->idLocale;
    }

    /**
     * @module AvailabilityDataFeed
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdLocale()
    {
        $this->assertPropertyIsSet(self::ID_LOCALE);

        return $this;
    }

    /**
     * @module AvailabilityDataFeed
     *
     * @param string|null $updatedFrom
     *
     * @return $this
     */
    public function setUpdatedFrom($updatedFrom)
    {
        $this->updatedFrom = $updatedFrom;
        $this->modifiedProperties[self::UPDATED_FROM] = true;

        return $this;
    }

    /**
     * @module AvailabilityDataFeed
     *
     * @return string|null
     */
    public function getUpdatedFrom()
    {
        return $this->updatedFrom;
    }

    /**
     * @module AvailabilityDataFeed
     *
     * @param string|null $updatedFrom
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUpdatedFromOrFail($updatedFrom)
    {
        if ($updatedFrom === null) {
            $this->throwNullValueException(static::UPDATED_FROM);
        }

        return $this->setUpdatedFrom($updatedFrom);
    }

    /**
     * @module AvailabilityDataFeed
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUpdatedFromOrFail()
    {
        if ($this->updatedFrom === null) {
            $this->throwNullValueException(static::UPDATED_FROM);
        }

        return $this->updatedFrom;
    }

    /**
     * @module AvailabilityDataFeed
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUpdatedFrom()
    {
        $this->assertPropertyIsSet(self::UPDATED_FROM);

        return $this;
    }

    /**
     * @module AvailabilityDataFeed
     *
     * @param string|null $updatedTo
     *
     * @return $this
     */
    public function setUpdatedTo($updatedTo)
    {
        $this->updatedTo = $updatedTo;
        $this->modifiedProperties[self::UPDATED_TO] = true;

        return $this;
    }

    /**
     * @module AvailabilityDataFeed
     *
     * @return string|null
     */
    public function getUpdatedTo()
    {
        return $this->updatedTo;
    }

    /**
     * @module AvailabilityDataFeed
     *
     * @param string|null $updatedTo
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUpdatedToOrFail($updatedTo)
    {
        if ($updatedTo === null) {
            $this->throwNullValueException(static::UPDATED_TO);
        }

        return $this->setUpdatedTo($updatedTo);
    }

    /**
     * @module AvailabilityDataFeed
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUpdatedToOrFail()
    {
        if ($this->updatedTo === null) {
            $this->throwNullValueException(static::UPDATED_TO);
        }

        return $this->updatedTo;
    }

    /**
     * @module AvailabilityDataFeed
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUpdatedTo()
    {
        $this->assertPropertyIsSet(self::UPDATED_TO);

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
                case 'idLocale':
                case 'updatedFrom':
                case 'updatedTo':
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
                case 'idLocale':
                case 'updatedFrom':
                case 'updatedTo':
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
                case 'idLocale':
                case 'updatedFrom':
                case 'updatedTo':
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
            'idLocale' => $this->idLocale,
            'updatedFrom' => $this->updatedFrom,
            'updatedTo' => $this->updatedTo,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_locale' => $this->idLocale,
            'updated_from' => $this->updatedFrom,
            'updated_to' => $this->updatedTo,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_locale' => $this->idLocale instanceof AbstractTransfer ? $this->idLocale->toArray(true, false) : $this->idLocale,
            'updated_from' => $this->updatedFrom instanceof AbstractTransfer ? $this->updatedFrom->toArray(true, false) : $this->updatedFrom,
            'updated_to' => $this->updatedTo instanceof AbstractTransfer ? $this->updatedTo->toArray(true, false) : $this->updatedTo,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idLocale' => $this->idLocale instanceof AbstractTransfer ? $this->idLocale->toArray(true, true) : $this->idLocale,
            'updatedFrom' => $this->updatedFrom instanceof AbstractTransfer ? $this->updatedFrom->toArray(true, true) : $this->updatedFrom,
            'updatedTo' => $this->updatedTo instanceof AbstractTransfer ? $this->updatedTo->toArray(true, true) : $this->updatedTo,
        ];
    }
}
