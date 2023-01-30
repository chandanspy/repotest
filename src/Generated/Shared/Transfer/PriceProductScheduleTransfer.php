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
class PriceProductScheduleTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PRICE_PRODUCT = 'priceProduct';

    /**
     * @var string
     */
    public const ID_PRICE_PRODUCT_SCHEDULE = 'idPriceProductSchedule';

    /**
     * @var string
     */
    public const ACTIVE_FROM = 'activeFrom';

    /**
     * @var string
     */
    public const ACTIVE_TO = 'activeTo';

    /**
     * @var string
     */
    public const STORE = 'store';

    /**
     * @var string
     */
    public const IS_CURRENT = 'isCurrent';

    /**
     * @var string
     */
    public const PRICE_PRODUCT_SCHEDULE_LIST = 'priceProductScheduleList';

    /**
     * @var string
     */
    public const CURRENCY = 'currency';

    /**
     * @var \Generated\Shared\Transfer\PriceProductTransfer|null
     */
    protected $priceProduct;

    /**
     * @var int|null
     */
    protected $idPriceProductSchedule;

    /**
     * @var string|null
     */
    protected $activeFrom;

    /**
     * @var string|null
     */
    protected $activeTo;

    /**
     * @var \Generated\Shared\Transfer\StoreTransfer|null
     */
    protected $store;

    /**
     * @var bool|null
     */
    protected $isCurrent;

    /**
     * @var \Generated\Shared\Transfer\PriceProductScheduleListTransfer|null
     */
    protected $priceProductScheduleList;

    /**
     * @var \Generated\Shared\Transfer\CurrencyTransfer|null
     */
    protected $currency;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'price_product' => 'priceProduct',
        'priceProduct' => 'priceProduct',
        'PriceProduct' => 'priceProduct',
        'id_price_product_schedule' => 'idPriceProductSchedule',
        'idPriceProductSchedule' => 'idPriceProductSchedule',
        'IdPriceProductSchedule' => 'idPriceProductSchedule',
        'active_from' => 'activeFrom',
        'activeFrom' => 'activeFrom',
        'ActiveFrom' => 'activeFrom',
        'active_to' => 'activeTo',
        'activeTo' => 'activeTo',
        'ActiveTo' => 'activeTo',
        'store' => 'store',
        'Store' => 'store',
        'is_current' => 'isCurrent',
        'isCurrent' => 'isCurrent',
        'IsCurrent' => 'isCurrent',
        'price_product_schedule_list' => 'priceProductScheduleList',
        'priceProductScheduleList' => 'priceProductScheduleList',
        'PriceProductScheduleList' => 'priceProductScheduleList',
        'currency' => 'currency',
        'Currency' => 'currency',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PRICE_PRODUCT => [
            'type' => 'Generated\Shared\Transfer\PriceProductTransfer',
            'type_shim' => null,
            'name_underscore' => 'price_product',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_PRICE_PRODUCT_SCHEDULE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_price_product_schedule',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ACTIVE_FROM => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'active_from',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ACTIVE_TO => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'active_to',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORE => [
            'type' => 'Generated\Shared\Transfer\StoreTransfer',
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
        self::IS_CURRENT => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_current',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRICE_PRODUCT_SCHEDULE_LIST => [
            'type' => 'Generated\Shared\Transfer\PriceProductScheduleListTransfer',
            'type_shim' => null,
            'name_underscore' => 'price_product_schedule_list',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CURRENCY => [
            'type' => 'Generated\Shared\Transfer\CurrencyTransfer',
            'type_shim' => null,
            'name_underscore' => 'currency',
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
     * @module PriceProductScheduleGui|PriceProductSchedule
     *
     * @param \Generated\Shared\Transfer\PriceProductTransfer|null $priceProduct
     *
     * @return $this
     */
    public function setPriceProduct(PriceProductTransfer $priceProduct = null)
    {
        $this->priceProduct = $priceProduct;
        $this->modifiedProperties[self::PRICE_PRODUCT] = true;

        return $this;
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule
     *
     * @return \Generated\Shared\Transfer\PriceProductTransfer|null
     */
    public function getPriceProduct()
    {
        return $this->priceProduct;
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule
     *
     * @param \Generated\Shared\Transfer\PriceProductTransfer $priceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPriceProductOrFail(PriceProductTransfer $priceProduct)
    {
        return $this->setPriceProduct($priceProduct);
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PriceProductTransfer
     */
    public function getPriceProductOrFail()
    {
        if ($this->priceProduct === null) {
            $this->throwNullValueException(static::PRICE_PRODUCT);
        }

        return $this->priceProduct;
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePriceProduct()
    {
        $this->assertPropertyIsSet(self::PRICE_PRODUCT);

        return $this;
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule
     *
     * @param int|null $idPriceProductSchedule
     *
     * @return $this
     */
    public function setIdPriceProductSchedule($idPriceProductSchedule)
    {
        $this->idPriceProductSchedule = $idPriceProductSchedule;
        $this->modifiedProperties[self::ID_PRICE_PRODUCT_SCHEDULE] = true;

        return $this;
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule
     *
     * @return int|null
     */
    public function getIdPriceProductSchedule()
    {
        return $this->idPriceProductSchedule;
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule
     *
     * @param int|null $idPriceProductSchedule
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdPriceProductScheduleOrFail($idPriceProductSchedule)
    {
        if ($idPriceProductSchedule === null) {
            $this->throwNullValueException(static::ID_PRICE_PRODUCT_SCHEDULE);
        }

        return $this->setIdPriceProductSchedule($idPriceProductSchedule);
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdPriceProductScheduleOrFail()
    {
        if ($this->idPriceProductSchedule === null) {
            $this->throwNullValueException(static::ID_PRICE_PRODUCT_SCHEDULE);
        }

        return $this->idPriceProductSchedule;
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdPriceProductSchedule()
    {
        $this->assertPropertyIsSet(self::ID_PRICE_PRODUCT_SCHEDULE);

        return $this;
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule
     *
     * @param string|null $activeFrom
     *
     * @return $this
     */
    public function setActiveFrom($activeFrom)
    {
        $this->activeFrom = $activeFrom;
        $this->modifiedProperties[self::ACTIVE_FROM] = true;

        return $this;
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule
     *
     * @return string|null
     */
    public function getActiveFrom()
    {
        return $this->activeFrom;
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule
     *
     * @param string|null $activeFrom
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setActiveFromOrFail($activeFrom)
    {
        if ($activeFrom === null) {
            $this->throwNullValueException(static::ACTIVE_FROM);
        }

        return $this->setActiveFrom($activeFrom);
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getActiveFromOrFail()
    {
        if ($this->activeFrom === null) {
            $this->throwNullValueException(static::ACTIVE_FROM);
        }

        return $this->activeFrom;
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireActiveFrom()
    {
        $this->assertPropertyIsSet(self::ACTIVE_FROM);

        return $this;
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule
     *
     * @param string|null $activeTo
     *
     * @return $this
     */
    public function setActiveTo($activeTo)
    {
        $this->activeTo = $activeTo;
        $this->modifiedProperties[self::ACTIVE_TO] = true;

        return $this;
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule
     *
     * @return string|null
     */
    public function getActiveTo()
    {
        return $this->activeTo;
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule
     *
     * @param string|null $activeTo
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setActiveToOrFail($activeTo)
    {
        if ($activeTo === null) {
            $this->throwNullValueException(static::ACTIVE_TO);
        }

        return $this->setActiveTo($activeTo);
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getActiveToOrFail()
    {
        if ($this->activeTo === null) {
            $this->throwNullValueException(static::ACTIVE_TO);
        }

        return $this->activeTo;
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireActiveTo()
    {
        $this->assertPropertyIsSet(self::ACTIVE_TO);

        return $this;
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule
     *
     * @param \Generated\Shared\Transfer\StoreTransfer|null $store
     *
     * @return $this
     */
    public function setStore(StoreTransfer $store = null)
    {
        $this->store = $store;
        $this->modifiedProperties[self::STORE] = true;

        return $this;
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule
     *
     * @return \Generated\Shared\Transfer\StoreTransfer|null
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule
     *
     * @param \Generated\Shared\Transfer\StoreTransfer $store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreOrFail(StoreTransfer $store)
    {
        return $this->setStore($store);
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\StoreTransfer
     */
    public function getStoreOrFail()
    {
        if ($this->store === null) {
            $this->throwNullValueException(static::STORE);
        }

        return $this->store;
    }

    /**
     * @module PriceProductScheduleGui|PriceProductSchedule
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
     * @module PriceProductSchedule
     *
     * @param bool|null $isCurrent
     *
     * @return $this
     */
    public function setIsCurrent($isCurrent)
    {
        $this->isCurrent = $isCurrent;
        $this->modifiedProperties[self::IS_CURRENT] = true;

        return $this;
    }

    /**
     * @module PriceProductSchedule
     *
     * @return bool|null
     */
    public function getIsCurrent()
    {
        return $this->isCurrent;
    }

    /**
     * @module PriceProductSchedule
     *
     * @param bool|null $isCurrent
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsCurrentOrFail($isCurrent)
    {
        if ($isCurrent === null) {
            $this->throwNullValueException(static::IS_CURRENT);
        }

        return $this->setIsCurrent($isCurrent);
    }

    /**
     * @module PriceProductSchedule
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsCurrentOrFail()
    {
        if ($this->isCurrent === null) {
            $this->throwNullValueException(static::IS_CURRENT);
        }

        return $this->isCurrent;
    }

    /**
     * @module PriceProductSchedule
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsCurrent()
    {
        $this->assertPropertyIsSet(self::IS_CURRENT);

        return $this;
    }

    /**
     * @module PriceProductSchedule
     *
     * @param \Generated\Shared\Transfer\PriceProductScheduleListTransfer|null $priceProductScheduleList
     *
     * @return $this
     */
    public function setPriceProductScheduleList(PriceProductScheduleListTransfer $priceProductScheduleList = null)
    {
        $this->priceProductScheduleList = $priceProductScheduleList;
        $this->modifiedProperties[self::PRICE_PRODUCT_SCHEDULE_LIST] = true;

        return $this;
    }

    /**
     * @module PriceProductSchedule
     *
     * @return \Generated\Shared\Transfer\PriceProductScheduleListTransfer|null
     */
    public function getPriceProductScheduleList()
    {
        return $this->priceProductScheduleList;
    }

    /**
     * @module PriceProductSchedule
     *
     * @param \Generated\Shared\Transfer\PriceProductScheduleListTransfer $priceProductScheduleList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPriceProductScheduleListOrFail(PriceProductScheduleListTransfer $priceProductScheduleList)
    {
        return $this->setPriceProductScheduleList($priceProductScheduleList);
    }

    /**
     * @module PriceProductSchedule
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PriceProductScheduleListTransfer
     */
    public function getPriceProductScheduleListOrFail()
    {
        if ($this->priceProductScheduleList === null) {
            $this->throwNullValueException(static::PRICE_PRODUCT_SCHEDULE_LIST);
        }

        return $this->priceProductScheduleList;
    }

    /**
     * @module PriceProductSchedule
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePriceProductScheduleList()
    {
        $this->assertPropertyIsSet(self::PRICE_PRODUCT_SCHEDULE_LIST);

        return $this;
    }

    /**
     * @module PriceProductSchedule
     *
     * @param \Generated\Shared\Transfer\CurrencyTransfer|null $currency
     *
     * @return $this
     */
    public function setCurrency(CurrencyTransfer $currency = null)
    {
        $this->currency = $currency;
        $this->modifiedProperties[self::CURRENCY] = true;

        return $this;
    }

    /**
     * @module PriceProductSchedule
     *
     * @return \Generated\Shared\Transfer\CurrencyTransfer|null
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @module PriceProductSchedule
     *
     * @param \Generated\Shared\Transfer\CurrencyTransfer $currency
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCurrencyOrFail(CurrencyTransfer $currency)
    {
        return $this->setCurrency($currency);
    }

    /**
     * @module PriceProductSchedule
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CurrencyTransfer
     */
    public function getCurrencyOrFail()
    {
        if ($this->currency === null) {
            $this->throwNullValueException(static::CURRENCY);
        }

        return $this->currency;
    }

    /**
     * @module PriceProductSchedule
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCurrency()
    {
        $this->assertPropertyIsSet(self::CURRENCY);

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
                case 'idPriceProductSchedule':
                case 'activeFrom':
                case 'activeTo':
                case 'isCurrent':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'priceProduct':
                case 'store':
                case 'priceProductScheduleList':
                case 'currency':
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
                case 'idPriceProductSchedule':
                case 'activeFrom':
                case 'activeTo':
                case 'isCurrent':
                    $values[$arrayKey] = $value;

                    break;
                case 'priceProduct':
                case 'store':
                case 'priceProductScheduleList':
                case 'currency':
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
                case 'idPriceProductSchedule':
                case 'activeFrom':
                case 'activeTo':
                case 'isCurrent':
                    $values[$arrayKey] = $value;

                    break;
                case 'priceProduct':
                case 'store':
                case 'priceProductScheduleList':
                case 'currency':
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
            'idPriceProductSchedule' => $this->idPriceProductSchedule,
            'activeFrom' => $this->activeFrom,
            'activeTo' => $this->activeTo,
            'isCurrent' => $this->isCurrent,
            'priceProduct' => $this->priceProduct,
            'store' => $this->store,
            'priceProductScheduleList' => $this->priceProductScheduleList,
            'currency' => $this->currency,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_price_product_schedule' => $this->idPriceProductSchedule,
            'active_from' => $this->activeFrom,
            'active_to' => $this->activeTo,
            'is_current' => $this->isCurrent,
            'price_product' => $this->priceProduct,
            'store' => $this->store,
            'price_product_schedule_list' => $this->priceProductScheduleList,
            'currency' => $this->currency,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_price_product_schedule' => $this->idPriceProductSchedule instanceof AbstractTransfer ? $this->idPriceProductSchedule->toArray(true, false) : $this->idPriceProductSchedule,
            'active_from' => $this->activeFrom instanceof AbstractTransfer ? $this->activeFrom->toArray(true, false) : $this->activeFrom,
            'active_to' => $this->activeTo instanceof AbstractTransfer ? $this->activeTo->toArray(true, false) : $this->activeTo,
            'is_current' => $this->isCurrent instanceof AbstractTransfer ? $this->isCurrent->toArray(true, false) : $this->isCurrent,
            'price_product' => $this->priceProduct instanceof AbstractTransfer ? $this->priceProduct->toArray(true, false) : $this->priceProduct,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, false) : $this->store,
            'price_product_schedule_list' => $this->priceProductScheduleList instanceof AbstractTransfer ? $this->priceProductScheduleList->toArray(true, false) : $this->priceProductScheduleList,
            'currency' => $this->currency instanceof AbstractTransfer ? $this->currency->toArray(true, false) : $this->currency,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idPriceProductSchedule' => $this->idPriceProductSchedule instanceof AbstractTransfer ? $this->idPriceProductSchedule->toArray(true, true) : $this->idPriceProductSchedule,
            'activeFrom' => $this->activeFrom instanceof AbstractTransfer ? $this->activeFrom->toArray(true, true) : $this->activeFrom,
            'activeTo' => $this->activeTo instanceof AbstractTransfer ? $this->activeTo->toArray(true, true) : $this->activeTo,
            'isCurrent' => $this->isCurrent instanceof AbstractTransfer ? $this->isCurrent->toArray(true, true) : $this->isCurrent,
            'priceProduct' => $this->priceProduct instanceof AbstractTransfer ? $this->priceProduct->toArray(true, true) : $this->priceProduct,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, true) : $this->store,
            'priceProductScheduleList' => $this->priceProductScheduleList instanceof AbstractTransfer ? $this->priceProductScheduleList->toArray(true, true) : $this->priceProductScheduleList,
            'currency' => $this->currency instanceof AbstractTransfer ? $this->currency->toArray(true, true) : $this->currency,
        ];
    }
}
