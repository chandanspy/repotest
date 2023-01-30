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
class ProductConcreteProductListStorageTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_CONCRETE = 'idProductConcrete';

    /**
     * @var string
     */
    public const ID_BLACKLISTS = 'idBlacklists';

    /**
     * @var string
     */
    public const ID_WHITELISTS = 'idWhitelists';

    /**
     * @var int|null
     */
    protected $idProductConcrete;

    /**
     * @var array
     */
    protected $idBlacklists = [];

    /**
     * @var array
     */
    protected $idWhitelists = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_concrete' => 'idProductConcrete',
        'idProductConcrete' => 'idProductConcrete',
        'IdProductConcrete' => 'idProductConcrete',
        'id_blacklists' => 'idBlacklists',
        'idBlacklists' => 'idBlacklists',
        'IdBlacklists' => 'idBlacklists',
        'id_whitelists' => 'idWhitelists',
        'idWhitelists' => 'idWhitelists',
        'IdWhitelists' => 'idWhitelists',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_CONCRETE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_concrete',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_BLACKLISTS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'id_blacklists',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_WHITELISTS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'id_whitelists',
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
     * @module ProductListStorage
     *
     * @param int|null $idProductConcrete
     *
     * @return $this
     */
    public function setIdProductConcrete($idProductConcrete)
    {
        $this->idProductConcrete = $idProductConcrete;
        $this->modifiedProperties[self::ID_PRODUCT_CONCRETE] = true;

        return $this;
    }

    /**
     * @module ProductListStorage
     *
     * @return int|null
     */
    public function getIdProductConcrete()
    {
        return $this->idProductConcrete;
    }

    /**
     * @module ProductListStorage
     *
     * @param int|null $idProductConcrete
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductConcreteOrFail($idProductConcrete)
    {
        if ($idProductConcrete === null) {
            $this->throwNullValueException(static::ID_PRODUCT_CONCRETE);
        }

        return $this->setIdProductConcrete($idProductConcrete);
    }

    /**
     * @module ProductListStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductConcreteOrFail()
    {
        if ($this->idProductConcrete === null) {
            $this->throwNullValueException(static::ID_PRODUCT_CONCRETE);
        }

        return $this->idProductConcrete;
    }

    /**
     * @module ProductListStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductConcrete()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_CONCRETE);

        return $this;
    }

    /**
     * @module ProductListStorage
     *
     * @param array|null $idBlacklists
     *
     * @return $this
     */
    public function setIdBlacklists(array $idBlacklists = null)
    {
        if ($idBlacklists === null) {
            $idBlacklists = [];
        }

        $this->idBlacklists = $idBlacklists;
        $this->modifiedProperties[self::ID_BLACKLISTS] = true;

        return $this;
    }

    /**
     * @module ProductListStorage
     *
     * @return array
     */
    public function getIdBlacklists()
    {
        return $this->idBlacklists;
    }

    /**
     * @module ProductListStorage
     *
     * @param mixed $idBlacklists
     *
     * @return $this
     */
    public function addIdBlacklists($idBlacklists)
    {
        $this->idBlacklists[] = $idBlacklists;
        $this->modifiedProperties[self::ID_BLACKLISTS] = true;

        return $this;
    }

    /**
     * @module ProductListStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdBlacklists()
    {
        $this->assertPropertyIsSet(self::ID_BLACKLISTS);

        return $this;
    }

    /**
     * @module ProductListStorage
     *
     * @param array|null $idWhitelists
     *
     * @return $this
     */
    public function setIdWhitelists(array $idWhitelists = null)
    {
        if ($idWhitelists === null) {
            $idWhitelists = [];
        }

        $this->idWhitelists = $idWhitelists;
        $this->modifiedProperties[self::ID_WHITELISTS] = true;

        return $this;
    }

    /**
     * @module ProductListStorage
     *
     * @return array
     */
    public function getIdWhitelists()
    {
        return $this->idWhitelists;
    }

    /**
     * @module ProductListStorage
     *
     * @param mixed $idWhitelists
     *
     * @return $this
     */
    public function addIdWhitelists($idWhitelists)
    {
        $this->idWhitelists[] = $idWhitelists;
        $this->modifiedProperties[self::ID_WHITELISTS] = true;

        return $this;
    }

    /**
     * @module ProductListStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdWhitelists()
    {
        $this->assertPropertyIsSet(self::ID_WHITELISTS);

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
                case 'idProductConcrete':
                case 'idBlacklists':
                case 'idWhitelists':
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
                case 'idProductConcrete':
                case 'idBlacklists':
                case 'idWhitelists':
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
                case 'idProductConcrete':
                case 'idBlacklists':
                case 'idWhitelists':
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
            'idProductConcrete' => $this->idProductConcrete,
            'idBlacklists' => $this->idBlacklists,
            'idWhitelists' => $this->idWhitelists,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_concrete' => $this->idProductConcrete,
            'id_blacklists' => $this->idBlacklists,
            'id_whitelists' => $this->idWhitelists,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_concrete' => $this->idProductConcrete instanceof AbstractTransfer ? $this->idProductConcrete->toArray(true, false) : $this->idProductConcrete,
            'id_blacklists' => $this->idBlacklists instanceof AbstractTransfer ? $this->idBlacklists->toArray(true, false) : $this->idBlacklists,
            'id_whitelists' => $this->idWhitelists instanceof AbstractTransfer ? $this->idWhitelists->toArray(true, false) : $this->idWhitelists,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductConcrete' => $this->idProductConcrete instanceof AbstractTransfer ? $this->idProductConcrete->toArray(true, true) : $this->idProductConcrete,
            'idBlacklists' => $this->idBlacklists instanceof AbstractTransfer ? $this->idBlacklists->toArray(true, true) : $this->idBlacklists,
            'idWhitelists' => $this->idWhitelists instanceof AbstractTransfer ? $this->idWhitelists->toArray(true, true) : $this->idWhitelists,
        ];
    }
}
