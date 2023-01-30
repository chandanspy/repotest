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
class PriceProductDimensionTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_MERCHANT_RELATIONSHIP = 'idMerchantRelationship';

    /**
     * @var string
     */
    public const TYPE = 'type';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const IS_MERCHANT_ACTIVE = 'isMerchantActive';

    /**
     * @var string
     */
    public const ID_PRICE_PRODUCT_DEFAULT = 'idPriceProductDefault';

    /**
     * @var int|null
     */
    protected $idMerchantRelationship;

    /**
     * @var string|null
     */
    protected $type;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var bool|null
     */
    protected $isMerchantActive;

    /**
     * @var int|null
     */
    protected $idPriceProductDefault;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_merchant_relationship' => 'idMerchantRelationship',
        'idMerchantRelationship' => 'idMerchantRelationship',
        'IdMerchantRelationship' => 'idMerchantRelationship',
        'type' => 'type',
        'Type' => 'type',
        'name' => 'name',
        'Name' => 'name',
        'is_merchant_active' => 'isMerchantActive',
        'isMerchantActive' => 'isMerchantActive',
        'IsMerchantActive' => 'isMerchantActive',
        'id_price_product_default' => 'idPriceProductDefault',
        'idPriceProductDefault' => 'idPriceProductDefault',
        'IdPriceProductDefault' => 'idPriceProductDefault',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_MERCHANT_RELATIONSHIP => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_merchant_relationship',
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
        self::NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_MERCHANT_ACTIVE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_merchant_active',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_PRICE_PRODUCT_DEFAULT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_price_product_default',
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
     * @module MerchantRelationshipSalesOrderThreshold|PriceProductMerchantRelationshipGui|PriceProductMerchantRelationshipStorage|PriceProductMerchantRelationship
     *
     * @param int|null $idMerchantRelationship
     *
     * @return $this
     */
    public function setIdMerchantRelationship($idMerchantRelationship)
    {
        $this->idMerchantRelationship = $idMerchantRelationship;
        $this->modifiedProperties[self::ID_MERCHANT_RELATIONSHIP] = true;

        return $this;
    }

    /**
     * @module MerchantRelationshipSalesOrderThreshold|PriceProductMerchantRelationshipGui|PriceProductMerchantRelationshipStorage|PriceProductMerchantRelationship
     *
     * @return int|null
     */
    public function getIdMerchantRelationship()
    {
        return $this->idMerchantRelationship;
    }

    /**
     * @module MerchantRelationshipSalesOrderThreshold|PriceProductMerchantRelationshipGui|PriceProductMerchantRelationshipStorage|PriceProductMerchantRelationship
     *
     * @param int|null $idMerchantRelationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdMerchantRelationshipOrFail($idMerchantRelationship)
    {
        if ($idMerchantRelationship === null) {
            $this->throwNullValueException(static::ID_MERCHANT_RELATIONSHIP);
        }

        return $this->setIdMerchantRelationship($idMerchantRelationship);
    }

    /**
     * @module MerchantRelationshipSalesOrderThreshold|PriceProductMerchantRelationshipGui|PriceProductMerchantRelationshipStorage|PriceProductMerchantRelationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdMerchantRelationshipOrFail()
    {
        if ($this->idMerchantRelationship === null) {
            $this->throwNullValueException(static::ID_MERCHANT_RELATIONSHIP);
        }

        return $this->idMerchantRelationship;
    }

    /**
     * @module MerchantRelationshipSalesOrderThreshold|PriceProductMerchantRelationshipGui|PriceProductMerchantRelationshipStorage|PriceProductMerchantRelationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdMerchantRelationship()
    {
        $this->assertPropertyIsSet(self::ID_MERCHANT_RELATIONSHIP);

        return $this;
    }

    /**
     * @module PriceProductMerchantRelationshipGui|PriceProductMerchantRelationshipStorage|PriceProductMerchantRelationship|PriceProductSchedule|PriceProductStorage|PriceProductVolumeGui|PriceProduct|ProductManagement|ProductPageSearch
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
     * @module PriceProductMerchantRelationshipGui|PriceProductMerchantRelationshipStorage|PriceProductMerchantRelationship|PriceProductSchedule|PriceProductStorage|PriceProductVolumeGui|PriceProduct|ProductManagement|ProductPageSearch
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @module PriceProductMerchantRelationshipGui|PriceProductMerchantRelationshipStorage|PriceProductMerchantRelationship|PriceProductSchedule|PriceProductStorage|PriceProductVolumeGui|PriceProduct|ProductManagement|ProductPageSearch
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
     * @module PriceProductMerchantRelationshipGui|PriceProductMerchantRelationshipStorage|PriceProductMerchantRelationship|PriceProductSchedule|PriceProductStorage|PriceProductVolumeGui|PriceProduct|ProductManagement|ProductPageSearch
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
     * @module PriceProductMerchantRelationshipGui|PriceProductMerchantRelationshipStorage|PriceProductMerchantRelationship|PriceProductSchedule|PriceProductStorage|PriceProductVolumeGui|PriceProduct|ProductManagement|ProductPageSearch
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
     * @module PriceProductMerchantRelationship|PriceProduct
     *
     * @param string|null $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        $this->modifiedProperties[self::NAME] = true;

        return $this;
    }

    /**
     * @module PriceProductMerchantRelationship|PriceProduct
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module PriceProductMerchantRelationship|PriceProduct
     *
     * @param string|null $name
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNameOrFail($name)
    {
        if ($name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->setName($name);
    }

    /**
     * @module PriceProductMerchantRelationship|PriceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNameOrFail()
    {
        if ($this->name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->name;
    }

    /**
     * @module PriceProductMerchantRelationship|PriceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireName()
    {
        $this->assertPropertyIsSet(self::NAME);

        return $this;
    }

    /**
     * @module PriceProductMerchantRelationship
     *
     * @param bool|null $isMerchantActive
     *
     * @return $this
     */
    public function setIsMerchantActive($isMerchantActive)
    {
        $this->isMerchantActive = $isMerchantActive;
        $this->modifiedProperties[self::IS_MERCHANT_ACTIVE] = true;

        return $this;
    }

    /**
     * @module PriceProductMerchantRelationship
     *
     * @return bool|null
     */
    public function getIsMerchantActive()
    {
        return $this->isMerchantActive;
    }

    /**
     * @module PriceProductMerchantRelationship
     *
     * @param bool|null $isMerchantActive
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsMerchantActiveOrFail($isMerchantActive)
    {
        if ($isMerchantActive === null) {
            $this->throwNullValueException(static::IS_MERCHANT_ACTIVE);
        }

        return $this->setIsMerchantActive($isMerchantActive);
    }

    /**
     * @module PriceProductMerchantRelationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsMerchantActiveOrFail()
    {
        if ($this->isMerchantActive === null) {
            $this->throwNullValueException(static::IS_MERCHANT_ACTIVE);
        }

        return $this->isMerchantActive;
    }

    /**
     * @module PriceProductMerchantRelationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsMerchantActive()
    {
        $this->assertPropertyIsSet(self::IS_MERCHANT_ACTIVE);

        return $this;
    }

    /**
     * @module PriceProductSchedule|PriceProduct
     *
     * @param int|null $idPriceProductDefault
     *
     * @return $this
     */
    public function setIdPriceProductDefault($idPriceProductDefault)
    {
        $this->idPriceProductDefault = $idPriceProductDefault;
        $this->modifiedProperties[self::ID_PRICE_PRODUCT_DEFAULT] = true;

        return $this;
    }

    /**
     * @module PriceProductSchedule|PriceProduct
     *
     * @return int|null
     */
    public function getIdPriceProductDefault()
    {
        return $this->idPriceProductDefault;
    }

    /**
     * @module PriceProductSchedule|PriceProduct
     *
     * @param int|null $idPriceProductDefault
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdPriceProductDefaultOrFail($idPriceProductDefault)
    {
        if ($idPriceProductDefault === null) {
            $this->throwNullValueException(static::ID_PRICE_PRODUCT_DEFAULT);
        }

        return $this->setIdPriceProductDefault($idPriceProductDefault);
    }

    /**
     * @module PriceProductSchedule|PriceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdPriceProductDefaultOrFail()
    {
        if ($this->idPriceProductDefault === null) {
            $this->throwNullValueException(static::ID_PRICE_PRODUCT_DEFAULT);
        }

        return $this->idPriceProductDefault;
    }

    /**
     * @module PriceProductSchedule|PriceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdPriceProductDefault()
    {
        $this->assertPropertyIsSet(self::ID_PRICE_PRODUCT_DEFAULT);

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
                case 'idMerchantRelationship':
                case 'type':
                case 'name':
                case 'isMerchantActive':
                case 'idPriceProductDefault':
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
                case 'idMerchantRelationship':
                case 'type':
                case 'name':
                case 'isMerchantActive':
                case 'idPriceProductDefault':
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
                case 'idMerchantRelationship':
                case 'type':
                case 'name':
                case 'isMerchantActive':
                case 'idPriceProductDefault':
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
            'idMerchantRelationship' => $this->idMerchantRelationship,
            'type' => $this->type,
            'name' => $this->name,
            'isMerchantActive' => $this->isMerchantActive,
            'idPriceProductDefault' => $this->idPriceProductDefault,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_merchant_relationship' => $this->idMerchantRelationship,
            'type' => $this->type,
            'name' => $this->name,
            'is_merchant_active' => $this->isMerchantActive,
            'id_price_product_default' => $this->idPriceProductDefault,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_merchant_relationship' => $this->idMerchantRelationship instanceof AbstractTransfer ? $this->idMerchantRelationship->toArray(true, false) : $this->idMerchantRelationship,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, false) : $this->type,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'is_merchant_active' => $this->isMerchantActive instanceof AbstractTransfer ? $this->isMerchantActive->toArray(true, false) : $this->isMerchantActive,
            'id_price_product_default' => $this->idPriceProductDefault instanceof AbstractTransfer ? $this->idPriceProductDefault->toArray(true, false) : $this->idPriceProductDefault,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idMerchantRelationship' => $this->idMerchantRelationship instanceof AbstractTransfer ? $this->idMerchantRelationship->toArray(true, true) : $this->idMerchantRelationship,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, true) : $this->type,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'isMerchantActive' => $this->isMerchantActive instanceof AbstractTransfer ? $this->isMerchantActive->toArray(true, true) : $this->isMerchantActive,
            'idPriceProductDefault' => $this->idPriceProductDefault instanceof AbstractTransfer ? $this->idPriceProductDefault->toArray(true, true) : $this->idPriceProductDefault,
        ];
    }
}
