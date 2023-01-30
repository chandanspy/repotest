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
class SpyPriceProductDefaultEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_PRICE_PRODUCT_DEFAULT = 'idPriceProductDefault';

    /**
     * @var string
     */
    public const FK_PRICE_PRODUCT_STORE = 'fkPriceProductStore';

    /**
     * @var string
     */
    public const PRICE_PRODUCT_STORE = 'priceProductStore';

    /**
     * @var string|null
     */
    protected $idPriceProductDefault;

    /**
     * @var string|null
     */
    protected $fkPriceProductStore;

    /**
     * @var \Generated\Shared\Transfer\SpyPriceProductStoreEntityTransfer|null
     */
    protected $priceProductStore;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_price_product_default' => 'idPriceProductDefault',
        'idPriceProductDefault' => 'idPriceProductDefault',
        'IdPriceProductDefault' => 'idPriceProductDefault',
        'fk_price_product_store' => 'fkPriceProductStore',
        'fkPriceProductStore' => 'fkPriceProductStore',
        'FkPriceProductStore' => 'fkPriceProductStore',
        'price_product_store' => 'priceProductStore',
        'priceProductStore' => 'priceProductStore',
        'PriceProductStore' => 'priceProductStore',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRICE_PRODUCT_DEFAULT => [
            'type' => 'string',
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
        self::FK_PRICE_PRODUCT_STORE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'fk_price_product_store',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRICE_PRODUCT_STORE => [
            'type' => 'Generated\Shared\Transfer\SpyPriceProductStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'price_product_store',
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
    public static $entityNamespace = 'Orm\Zed\PriceProduct\Persistence\SpyPriceProductDefault';


    /**
     * @module 
     *
     * @param string|null $idPriceProductDefault
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
     * @module 
     *
     * @return string|null
     */
    public function getIdPriceProductDefault()
    {
        return $this->idPriceProductDefault;
    }

    /**
     * @module 
     *
     * @param string|null $idPriceProductDefault
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIdPriceProductDefaultOrFail()
    {
        if ($this->idPriceProductDefault === null) {
            $this->throwNullValueException(static::ID_PRICE_PRODUCT_DEFAULT);
        }

        return $this->idPriceProductDefault;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param string|null $fkPriceProductStore
     *
     * @return $this
     */
    public function setFkPriceProductStore($fkPriceProductStore)
    {
        $this->fkPriceProductStore = $fkPriceProductStore;
        $this->modifiedProperties[self::FK_PRICE_PRODUCT_STORE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getFkPriceProductStore()
    {
        return $this->fkPriceProductStore;
    }

    /**
     * @module 
     *
     * @param string|null $fkPriceProductStore
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkPriceProductStoreOrFail($fkPriceProductStore)
    {
        if ($fkPriceProductStore === null) {
            $this->throwNullValueException(static::FK_PRICE_PRODUCT_STORE);
        }

        return $this->setFkPriceProductStore($fkPriceProductStore);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getFkPriceProductStoreOrFail()
    {
        if ($this->fkPriceProductStore === null) {
            $this->throwNullValueException(static::FK_PRICE_PRODUCT_STORE);
        }

        return $this->fkPriceProductStore;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkPriceProductStore()
    {
        $this->assertPropertyIsSet(self::FK_PRICE_PRODUCT_STORE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPriceProductStoreEntityTransfer|null $priceProductStore
     *
     * @return $this
     */
    public function setPriceProductStore(SpyPriceProductStoreEntityTransfer $priceProductStore = null)
    {
        $this->priceProductStore = $priceProductStore;
        $this->modifiedProperties[self::PRICE_PRODUCT_STORE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyPriceProductStoreEntityTransfer|null
     */
    public function getPriceProductStore()
    {
        return $this->priceProductStore;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPriceProductStoreEntityTransfer $priceProductStore
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPriceProductStoreOrFail(SpyPriceProductStoreEntityTransfer $priceProductStore)
    {
        return $this->setPriceProductStore($priceProductStore);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyPriceProductStoreEntityTransfer
     */
    public function getPriceProductStoreOrFail()
    {
        if ($this->priceProductStore === null) {
            $this->throwNullValueException(static::PRICE_PRODUCT_STORE);
        }

        return $this->priceProductStore;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePriceProductStore()
    {
        $this->assertPropertyIsSet(self::PRICE_PRODUCT_STORE);

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
                case 'idPriceProductDefault':
                case 'fkPriceProductStore':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'priceProductStore':
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
                case 'idPriceProductDefault':
                case 'fkPriceProductStore':
                    $values[$arrayKey] = $value;

                    break;
                case 'priceProductStore':
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
                case 'idPriceProductDefault':
                case 'fkPriceProductStore':
                    $values[$arrayKey] = $value;

                    break;
                case 'priceProductStore':
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
            'idPriceProductDefault' => $this->idPriceProductDefault,
            'fkPriceProductStore' => $this->fkPriceProductStore,
            'priceProductStore' => $this->priceProductStore,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_price_product_default' => $this->idPriceProductDefault,
            'fk_price_product_store' => $this->fkPriceProductStore,
            'price_product_store' => $this->priceProductStore,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_price_product_default' => $this->idPriceProductDefault instanceof AbstractTransfer ? $this->idPriceProductDefault->toArray(true, false) : $this->idPriceProductDefault,
            'fk_price_product_store' => $this->fkPriceProductStore instanceof AbstractTransfer ? $this->fkPriceProductStore->toArray(true, false) : $this->fkPriceProductStore,
            'price_product_store' => $this->priceProductStore instanceof AbstractTransfer ? $this->priceProductStore->toArray(true, false) : $this->priceProductStore,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idPriceProductDefault' => $this->idPriceProductDefault instanceof AbstractTransfer ? $this->idPriceProductDefault->toArray(true, true) : $this->idPriceProductDefault,
            'fkPriceProductStore' => $this->fkPriceProductStore instanceof AbstractTransfer ? $this->fkPriceProductStore->toArray(true, true) : $this->fkPriceProductStore,
            'priceProductStore' => $this->priceProductStore instanceof AbstractTransfer ? $this->priceProductStore->toArray(true, true) : $this->priceProductStore,
        ];
    }
}
