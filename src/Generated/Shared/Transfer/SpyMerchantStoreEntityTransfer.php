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
class SpyMerchantStoreEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_MERCHANT_STORE = 'idMerchantStore';

    /**
     * @var string
     */
    public const FK_MERCHANT = 'fkMerchant';

    /**
     * @var string
     */
    public const FK_STORE = 'fkStore';

    /**
     * @var string
     */
    public const SPY_MERCHANT = 'spyMerchant';

    /**
     * @var string
     */
    public const SPY_STORE = 'spyStore';

    /**
     * @var integer|null
     */
    protected $idMerchantStore;

    /**
     * @var integer|null
     */
    protected $fkMerchant;

    /**
     * @var integer|null
     */
    protected $fkStore;

    /**
     * @var \Generated\Shared\Transfer\SpyMerchantEntityTransfer|null
     */
    protected $spyMerchant;

    /**
     * @var \Generated\Shared\Transfer\SpyStoreEntityTransfer|null
     */
    protected $spyStore;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_merchant_store' => 'idMerchantStore',
        'idMerchantStore' => 'idMerchantStore',
        'IdMerchantStore' => 'idMerchantStore',
        'fk_merchant' => 'fkMerchant',
        'fkMerchant' => 'fkMerchant',
        'FkMerchant' => 'fkMerchant',
        'fk_store' => 'fkStore',
        'fkStore' => 'fkStore',
        'FkStore' => 'fkStore',
        'spy_merchant' => 'spyMerchant',
        'spyMerchant' => 'spyMerchant',
        'SpyMerchant' => 'spyMerchant',
        'spy_store' => 'spyStore',
        'spyStore' => 'spyStore',
        'SpyStore' => 'spyStore',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_MERCHANT_STORE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_merchant_store',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_MERCHANT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_merchant',
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
        self::SPY_MERCHANT => [
            'type' => 'Generated\Shared\Transfer\SpyMerchantEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_merchant',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_STORE => [
            'type' => 'Generated\Shared\Transfer\SpyStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_store',
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
    public static $entityNamespace = 'Orm\Zed\Merchant\Persistence\SpyMerchantStore';


    /**
     * @module 
     *
     * @param integer|null $idMerchantStore
     *
     * @return $this
     */
    public function setIdMerchantStore($idMerchantStore)
    {
        $this->idMerchantStore = $idMerchantStore;
        $this->modifiedProperties[self::ID_MERCHANT_STORE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdMerchantStore()
    {
        return $this->idMerchantStore;
    }

    /**
     * @module 
     *
     * @param integer|null $idMerchantStore
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdMerchantStoreOrFail($idMerchantStore)
    {
        if ($idMerchantStore === null) {
            $this->throwNullValueException(static::ID_MERCHANT_STORE);
        }

        return $this->setIdMerchantStore($idMerchantStore);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdMerchantStoreOrFail()
    {
        if ($this->idMerchantStore === null) {
            $this->throwNullValueException(static::ID_MERCHANT_STORE);
        }

        return $this->idMerchantStore;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdMerchantStore()
    {
        $this->assertPropertyIsSet(self::ID_MERCHANT_STORE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkMerchant
     *
     * @return $this
     */
    public function setFkMerchant($fkMerchant)
    {
        $this->fkMerchant = $fkMerchant;
        $this->modifiedProperties[self::FK_MERCHANT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkMerchant()
    {
        return $this->fkMerchant;
    }

    /**
     * @module 
     *
     * @param integer|null $fkMerchant
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkMerchantOrFail($fkMerchant)
    {
        if ($fkMerchant === null) {
            $this->throwNullValueException(static::FK_MERCHANT);
        }

        return $this->setFkMerchant($fkMerchant);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkMerchantOrFail()
    {
        if ($this->fkMerchant === null) {
            $this->throwNullValueException(static::FK_MERCHANT);
        }

        return $this->fkMerchant;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkMerchant()
    {
        $this->assertPropertyIsSet(self::FK_MERCHANT);

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
     * @param \Generated\Shared\Transfer\SpyMerchantEntityTransfer|null $spyMerchant
     *
     * @return $this
     */
    public function setSpyMerchant(SpyMerchantEntityTransfer $spyMerchant = null)
    {
        $this->spyMerchant = $spyMerchant;
        $this->modifiedProperties[self::SPY_MERCHANT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyMerchantEntityTransfer|null
     */
    public function getSpyMerchant()
    {
        return $this->spyMerchant;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyMerchantEntityTransfer $spyMerchant
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyMerchantOrFail(SpyMerchantEntityTransfer $spyMerchant)
    {
        return $this->setSpyMerchant($spyMerchant);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyMerchantEntityTransfer
     */
    public function getSpyMerchantOrFail()
    {
        if ($this->spyMerchant === null) {
            $this->throwNullValueException(static::SPY_MERCHANT);
        }

        return $this->spyMerchant;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyMerchant()
    {
        $this->assertPropertyIsSet(self::SPY_MERCHANT);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyStoreEntityTransfer|null $spyStore
     *
     * @return $this
     */
    public function setSpyStore(SpyStoreEntityTransfer $spyStore = null)
    {
        $this->spyStore = $spyStore;
        $this->modifiedProperties[self::SPY_STORE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyStoreEntityTransfer|null
     */
    public function getSpyStore()
    {
        return $this->spyStore;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyStoreEntityTransfer $spyStore
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyStoreOrFail(SpyStoreEntityTransfer $spyStore)
    {
        return $this->setSpyStore($spyStore);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyStoreEntityTransfer
     */
    public function getSpyStoreOrFail()
    {
        if ($this->spyStore === null) {
            $this->throwNullValueException(static::SPY_STORE);
        }

        return $this->spyStore;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyStore()
    {
        $this->assertPropertyIsSet(self::SPY_STORE);

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
                case 'idMerchantStore':
                case 'fkMerchant':
                case 'fkStore':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyMerchant':
                case 'spyStore':
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
                case 'idMerchantStore':
                case 'fkMerchant':
                case 'fkStore':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyMerchant':
                case 'spyStore':
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
                case 'idMerchantStore':
                case 'fkMerchant':
                case 'fkStore':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyMerchant':
                case 'spyStore':
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
            'idMerchantStore' => $this->idMerchantStore,
            'fkMerchant' => $this->fkMerchant,
            'fkStore' => $this->fkStore,
            'spyMerchant' => $this->spyMerchant,
            'spyStore' => $this->spyStore,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_merchant_store' => $this->idMerchantStore,
            'fk_merchant' => $this->fkMerchant,
            'fk_store' => $this->fkStore,
            'spy_merchant' => $this->spyMerchant,
            'spy_store' => $this->spyStore,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_merchant_store' => $this->idMerchantStore instanceof AbstractTransfer ? $this->idMerchantStore->toArray(true, false) : $this->idMerchantStore,
            'fk_merchant' => $this->fkMerchant instanceof AbstractTransfer ? $this->fkMerchant->toArray(true, false) : $this->fkMerchant,
            'fk_store' => $this->fkStore instanceof AbstractTransfer ? $this->fkStore->toArray(true, false) : $this->fkStore,
            'spy_merchant' => $this->spyMerchant instanceof AbstractTransfer ? $this->spyMerchant->toArray(true, false) : $this->spyMerchant,
            'spy_store' => $this->spyStore instanceof AbstractTransfer ? $this->spyStore->toArray(true, false) : $this->spyStore,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idMerchantStore' => $this->idMerchantStore instanceof AbstractTransfer ? $this->idMerchantStore->toArray(true, true) : $this->idMerchantStore,
            'fkMerchant' => $this->fkMerchant instanceof AbstractTransfer ? $this->fkMerchant->toArray(true, true) : $this->fkMerchant,
            'fkStore' => $this->fkStore instanceof AbstractTransfer ? $this->fkStore->toArray(true, true) : $this->fkStore,
            'spyMerchant' => $this->spyMerchant instanceof AbstractTransfer ? $this->spyMerchant->toArray(true, true) : $this->spyMerchant,
            'spyStore' => $this->spyStore instanceof AbstractTransfer ? $this->spyStore->toArray(true, true) : $this->spyStore,
        ];
    }
}
