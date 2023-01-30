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
class SpyProductLabelStoreEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_LABEL_STORE = 'idProductLabelStore';

    /**
     * @var string
     */
    public const FK_PRODUCT_LABEL = 'fkProductLabel';

    /**
     * @var string
     */
    public const FK_STORE = 'fkStore';

    /**
     * @var string
     */
    public const PRODUCT_LABEL = 'productLabel';

    /**
     * @var string
     */
    public const STORE = 'store';

    /**
     * @var integer|null
     */
    protected $idProductLabelStore;

    /**
     * @var integer|null
     */
    protected $fkProductLabel;

    /**
     * @var integer|null
     */
    protected $fkStore;

    /**
     * @var \Generated\Shared\Transfer\SpyProductLabelEntityTransfer|null
     */
    protected $productLabel;

    /**
     * @var \Generated\Shared\Transfer\SpyStoreEntityTransfer|null
     */
    protected $store;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_label_store' => 'idProductLabelStore',
        'idProductLabelStore' => 'idProductLabelStore',
        'IdProductLabelStore' => 'idProductLabelStore',
        'fk_product_label' => 'fkProductLabel',
        'fkProductLabel' => 'fkProductLabel',
        'FkProductLabel' => 'fkProductLabel',
        'fk_store' => 'fkStore',
        'fkStore' => 'fkStore',
        'FkStore' => 'fkStore',
        'product_label' => 'productLabel',
        'productLabel' => 'productLabel',
        'ProductLabel' => 'productLabel',
        'store' => 'store',
        'Store' => 'store',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_LABEL_STORE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_product_label_store',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PRODUCT_LABEL => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_product_label',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_STORE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_store',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_LABEL => [
            'type' => 'Generated\Shared\Transfer\SpyProductLabelEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_label',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORE => [
            'type' => 'Generated\Shared\Transfer\SpyStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'store',
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
    public static $entityNamespace = 'Orm\Zed\ProductLabel\Persistence\SpyProductLabelStore';


    /**
     * @module 
     *
     * @param integer|null $idProductLabelStore
     *
     * @return $this
     */
    public function setIdProductLabelStore($idProductLabelStore)
    {
        $this->idProductLabelStore = $idProductLabelStore;
        $this->modifiedProperties[self::ID_PRODUCT_LABEL_STORE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdProductLabelStore()
    {
        return $this->idProductLabelStore;
    }

    /**
     * @module 
     *
     * @param integer|null $idProductLabelStore
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductLabelStoreOrFail($idProductLabelStore)
    {
        if ($idProductLabelStore === null) {
            $this->throwNullValueException(static::ID_PRODUCT_LABEL_STORE);
        }

        return $this->setIdProductLabelStore($idProductLabelStore);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdProductLabelStoreOrFail()
    {
        if ($this->idProductLabelStore === null) {
            $this->throwNullValueException(static::ID_PRODUCT_LABEL_STORE);
        }

        return $this->idProductLabelStore;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductLabelStore()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_LABEL_STORE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductLabel
     *
     * @return $this
     */
    public function setFkProductLabel($fkProductLabel)
    {
        $this->fkProductLabel = $fkProductLabel;
        $this->modifiedProperties[self::FK_PRODUCT_LABEL] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkProductLabel()
    {
        return $this->fkProductLabel;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkProductLabelOrFail($fkProductLabel)
    {
        if ($fkProductLabel === null) {
            $this->throwNullValueException(static::FK_PRODUCT_LABEL);
        }

        return $this->setFkProductLabel($fkProductLabel);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkProductLabelOrFail()
    {
        if ($this->fkProductLabel === null) {
            $this->throwNullValueException(static::FK_PRODUCT_LABEL);
        }

        return $this->fkProductLabel;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkProductLabel()
    {
        $this->assertPropertyIsSet(self::FK_PRODUCT_LABEL);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkStore
     *
     * @return $this
     */
    public function setFkStore($fkStore)
    {
        $this->fkStore = $fkStore;
        $this->modifiedProperties[self::FK_STORE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkStore()
    {
        return $this->fkStore;
    }

    /**
     * @module 
     *
     * @param integer|null $fkStore
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkStoreOrFail($fkStore)
    {
        if ($fkStore === null) {
            $this->throwNullValueException(static::FK_STORE);
        }

        return $this->setFkStore($fkStore);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkStoreOrFail()
    {
        if ($this->fkStore === null) {
            $this->throwNullValueException(static::FK_STORE);
        }

        return $this->fkStore;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkStore()
    {
        $this->assertPropertyIsSet(self::FK_STORE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductLabelEntityTransfer|null $productLabel
     *
     * @return $this
     */
    public function setProductLabel(SpyProductLabelEntityTransfer $productLabel = null)
    {
        $this->productLabel = $productLabel;
        $this->modifiedProperties[self::PRODUCT_LABEL] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyProductLabelEntityTransfer|null
     */
    public function getProductLabel()
    {
        return $this->productLabel;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductLabelEntityTransfer $productLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductLabelOrFail(SpyProductLabelEntityTransfer $productLabel)
    {
        return $this->setProductLabel($productLabel);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyProductLabelEntityTransfer
     */
    public function getProductLabelOrFail()
    {
        if ($this->productLabel === null) {
            $this->throwNullValueException(static::PRODUCT_LABEL);
        }

        return $this->productLabel;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductLabel()
    {
        $this->assertPropertyIsSet(self::PRODUCT_LABEL);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyStoreEntityTransfer|null $store
     *
     * @return $this
     */
    public function setStore(SpyStoreEntityTransfer $store = null)
    {
        $this->store = $store;
        $this->modifiedProperties[self::STORE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyStoreEntityTransfer|null
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyStoreEntityTransfer $store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreOrFail(SpyStoreEntityTransfer $store)
    {
        return $this->setStore($store);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyStoreEntityTransfer
     */
    public function getStoreOrFail()
    {
        if ($this->store === null) {
            $this->throwNullValueException(static::STORE);
        }

        return $this->store;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStore()
    {
        $this->assertPropertyIsSet(self::STORE);

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
                case 'idProductLabelStore':
                case 'fkProductLabel':
                case 'fkStore':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'productLabel':
                case 'store':
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
                case 'idProductLabelStore':
                case 'fkProductLabel':
                case 'fkStore':
                    $values[$arrayKey] = $value;

                    break;
                case 'productLabel':
                case 'store':
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
                case 'idProductLabelStore':
                case 'fkProductLabel':
                case 'fkStore':
                    $values[$arrayKey] = $value;

                    break;
                case 'productLabel':
                case 'store':
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
            'idProductLabelStore' => $this->idProductLabelStore,
            'fkProductLabel' => $this->fkProductLabel,
            'fkStore' => $this->fkStore,
            'productLabel' => $this->productLabel,
            'store' => $this->store,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_label_store' => $this->idProductLabelStore,
            'fk_product_label' => $this->fkProductLabel,
            'fk_store' => $this->fkStore,
            'product_label' => $this->productLabel,
            'store' => $this->store,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_label_store' => $this->idProductLabelStore instanceof AbstractTransfer ? $this->idProductLabelStore->toArray(true, false) : $this->idProductLabelStore,
            'fk_product_label' => $this->fkProductLabel instanceof AbstractTransfer ? $this->fkProductLabel->toArray(true, false) : $this->fkProductLabel,
            'fk_store' => $this->fkStore instanceof AbstractTransfer ? $this->fkStore->toArray(true, false) : $this->fkStore,
            'product_label' => $this->productLabel instanceof AbstractTransfer ? $this->productLabel->toArray(true, false) : $this->productLabel,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, false) : $this->store,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductLabelStore' => $this->idProductLabelStore instanceof AbstractTransfer ? $this->idProductLabelStore->toArray(true, true) : $this->idProductLabelStore,
            'fkProductLabel' => $this->fkProductLabel instanceof AbstractTransfer ? $this->fkProductLabel->toArray(true, true) : $this->fkProductLabel,
            'fkStore' => $this->fkStore instanceof AbstractTransfer ? $this->fkStore->toArray(true, true) : $this->fkStore,
            'productLabel' => $this->productLabel instanceof AbstractTransfer ? $this->productLabel->toArray(true, true) : $this->productLabel,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, true) : $this->store,
        ];
    }
}
