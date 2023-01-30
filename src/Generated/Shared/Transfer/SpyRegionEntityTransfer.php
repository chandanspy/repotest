<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyRegionEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_REGION = 'idRegion';

    /**
     * @var string
     */
    public const FK_COUNTRY = 'fkCountry';

    /**
     * @var string
     */
    public const ISO2_CODE = 'iso2Code';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const SPY_COUNTRY = 'spyCountry';

    /**
     * @var string
     */
    public const SPY_STOCK_ADDRESSES = 'spyStockAddresses';

    /**
     * @var string
     */
    public const SPY_CUSTOMER_ADDRESSES = 'spyCustomerAddresses';

    /**
     * @var string
     */
    public const SPY_COMPANY_UNIT_ADDRESSES = 'spyCompanyUnitAddresses';

    /**
     * @var string
     */
    public const SPY_SALES_ORDER_ADDRESSES = 'spySalesOrderAddresses';

    /**
     * @var string
     */
    public const SPY_SALES_ORDER_ADDRESS_HISTORIES = 'spySalesOrderAddressHistories';

    /**
     * @var integer|null
     */
    protected $idRegion;

    /**
     * @var integer|null
     */
    protected $fkCountry;

    /**
     * @var string|null
     */
    protected $iso2Code;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var \Generated\Shared\Transfer\SpyCountryEntityTransfer|null
     */
    protected $spyCountry;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyStockAddressEntityTransfer[]
     */
    protected $spyStockAddresses;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCustomerAddressEntityTransfer[]
     */
    protected $spyCustomerAddresses;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCompanyUnitAddressEntityTransfer[]
     */
    protected $spyCompanyUnitAddresses;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderAddressEntityTransfer[]
     */
    protected $spySalesOrderAddresses;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderAddressHistoryEntityTransfer[]
     */
    protected $spySalesOrderAddressHistories;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_region' => 'idRegion',
        'idRegion' => 'idRegion',
        'IdRegion' => 'idRegion',
        'fk_country' => 'fkCountry',
        'fkCountry' => 'fkCountry',
        'FkCountry' => 'fkCountry',
        'iso2_code' => 'iso2Code',
        'iso2Code' => 'iso2Code',
        'Iso2Code' => 'iso2Code',
        'name' => 'name',
        'Name' => 'name',
        'spy_country' => 'spyCountry',
        'spyCountry' => 'spyCountry',
        'SpyCountry' => 'spyCountry',
        'spy_stock_addresses' => 'spyStockAddresses',
        'spyStockAddresses' => 'spyStockAddresses',
        'SpyStockAddresses' => 'spyStockAddresses',
        'spy_customer_addresses' => 'spyCustomerAddresses',
        'spyCustomerAddresses' => 'spyCustomerAddresses',
        'SpyCustomerAddresses' => 'spyCustomerAddresses',
        'spy_company_unit_addresses' => 'spyCompanyUnitAddresses',
        'spyCompanyUnitAddresses' => 'spyCompanyUnitAddresses',
        'SpyCompanyUnitAddresses' => 'spyCompanyUnitAddresses',
        'spy_sales_order_addresses' => 'spySalesOrderAddresses',
        'spySalesOrderAddresses' => 'spySalesOrderAddresses',
        'SpySalesOrderAddresses' => 'spySalesOrderAddresses',
        'spy_sales_order_address_histories' => 'spySalesOrderAddressHistories',
        'spySalesOrderAddressHistories' => 'spySalesOrderAddressHistories',
        'SpySalesOrderAddressHistories' => 'spySalesOrderAddressHistories',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_REGION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_region',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_COUNTRY => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_country',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ISO2_CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'iso2_code',
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
        self::SPY_COUNTRY => [
            'type' => 'Generated\Shared\Transfer\SpyCountryEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_country',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_STOCK_ADDRESSES => [
            'type' => 'Generated\Shared\Transfer\SpyStockAddressEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_stock_addresses',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_CUSTOMER_ADDRESSES => [
            'type' => 'Generated\Shared\Transfer\SpyCustomerAddressEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_customer_addresses',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_COMPANY_UNIT_ADDRESSES => [
            'type' => 'Generated\Shared\Transfer\SpyCompanyUnitAddressEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_company_unit_addresses',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SALES_ORDER_ADDRESSES => [
            'type' => 'Generated\Shared\Transfer\SpySalesOrderAddressEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_sales_order_addresses',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SALES_ORDER_ADDRESS_HISTORIES => [
            'type' => 'Generated\Shared\Transfer\SpySalesOrderAddressHistoryEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_sales_order_address_histories',
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
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\Country\Persistence\SpyRegion';


    /**
     * @module 
     *
     * @param integer|null $idRegion
     *
     * @return $this
     */
    public function setIdRegion($idRegion)
    {
        $this->idRegion = $idRegion;
        $this->modifiedProperties[self::ID_REGION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdRegion()
    {
        return $this->idRegion;
    }

    /**
     * @module 
     *
     * @param integer|null $idRegion
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdRegionOrFail($idRegion)
    {
        if ($idRegion === null) {
            $this->throwNullValueException(static::ID_REGION);
        }

        return $this->setIdRegion($idRegion);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdRegionOrFail()
    {
        if ($this->idRegion === null) {
            $this->throwNullValueException(static::ID_REGION);
        }

        return $this->idRegion;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdRegion()
    {
        $this->assertPropertyIsSet(self::ID_REGION);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCountry
     *
     * @return $this
     */
    public function setFkCountry($fkCountry)
    {
        $this->fkCountry = $fkCountry;
        $this->modifiedProperties[self::FK_COUNTRY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkCountry()
    {
        return $this->fkCountry;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCountry
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCountryOrFail($fkCountry)
    {
        if ($fkCountry === null) {
            $this->throwNullValueException(static::FK_COUNTRY);
        }

        return $this->setFkCountry($fkCountry);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCountryOrFail()
    {
        if ($this->fkCountry === null) {
            $this->throwNullValueException(static::FK_COUNTRY);
        }

        return $this->fkCountry;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCountry()
    {
        $this->assertPropertyIsSet(self::FK_COUNTRY);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $iso2Code
     *
     * @return $this
     */
    public function setIso2Code($iso2Code)
    {
        $this->iso2Code = $iso2Code;
        $this->modifiedProperties[self::ISO2_CODE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getIso2Code()
    {
        return $this->iso2Code;
    }

    /**
     * @module 
     *
     * @param string|null $iso2Code
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIso2CodeOrFail($iso2Code)
    {
        if ($iso2Code === null) {
            $this->throwNullValueException(static::ISO2_CODE);
        }

        return $this->setIso2Code($iso2Code);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIso2CodeOrFail()
    {
        if ($this->iso2Code === null) {
            $this->throwNullValueException(static::ISO2_CODE);
        }

        return $this->iso2Code;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIso2Code()
    {
        $this->assertPropertyIsSet(self::ISO2_CODE);

        return $this;
    }

    /**
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCountryEntityTransfer|null $spyCountry
     *
     * @return $this
     */
    public function setSpyCountry(SpyCountryEntityTransfer $spyCountry = null)
    {
        $this->spyCountry = $spyCountry;
        $this->modifiedProperties[self::SPY_COUNTRY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCountryEntityTransfer|null
     */
    public function getSpyCountry()
    {
        return $this->spyCountry;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCountryEntityTransfer $spyCountry
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyCountryOrFail(SpyCountryEntityTransfer $spyCountry)
    {
        return $this->setSpyCountry($spyCountry);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCountryEntityTransfer
     */
    public function getSpyCountryOrFail()
    {
        if ($this->spyCountry === null) {
            $this->throwNullValueException(static::SPY_COUNTRY);
        }

        return $this->spyCountry;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCountry()
    {
        $this->assertPropertyIsSet(self::SPY_COUNTRY);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyStockAddressEntityTransfer[] $spyStockAddresses
     *
     * @return $this
     */
    public function setSpyStockAddresses(ArrayObject $spyStockAddresses)
    {
        $this->spyStockAddresses = $spyStockAddresses;
        $this->modifiedProperties[self::SPY_STOCK_ADDRESSES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyStockAddressEntityTransfer[]
     */
    public function getSpyStockAddresses()
    {
        return $this->spyStockAddresses;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyStockAddressEntityTransfer $spyStockAddresses
     *
     * @return $this
     */
    public function addSpyStockAddresses(SpyStockAddressEntityTransfer $spyStockAddresses)
    {
        $this->spyStockAddresses[] = $spyStockAddresses;
        $this->modifiedProperties[self::SPY_STOCK_ADDRESSES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyStockAddresses()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_STOCK_ADDRESSES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCustomerAddressEntityTransfer[] $spyCustomerAddresses
     *
     * @return $this
     */
    public function setSpyCustomerAddresses(ArrayObject $spyCustomerAddresses)
    {
        $this->spyCustomerAddresses = $spyCustomerAddresses;
        $this->modifiedProperties[self::SPY_CUSTOMER_ADDRESSES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCustomerAddressEntityTransfer[]
     */
    public function getSpyCustomerAddresses()
    {
        return $this->spyCustomerAddresses;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCustomerAddressEntityTransfer $spyCustomerAddresses
     *
     * @return $this
     */
    public function addSpyCustomerAddresses(SpyCustomerAddressEntityTransfer $spyCustomerAddresses)
    {
        $this->spyCustomerAddresses[] = $spyCustomerAddresses;
        $this->modifiedProperties[self::SPY_CUSTOMER_ADDRESSES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCustomerAddresses()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_CUSTOMER_ADDRESSES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCompanyUnitAddressEntityTransfer[] $spyCompanyUnitAddresses
     *
     * @return $this
     */
    public function setSpyCompanyUnitAddresses(ArrayObject $spyCompanyUnitAddresses)
    {
        $this->spyCompanyUnitAddresses = $spyCompanyUnitAddresses;
        $this->modifiedProperties[self::SPY_COMPANY_UNIT_ADDRESSES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCompanyUnitAddressEntityTransfer[]
     */
    public function getSpyCompanyUnitAddresses()
    {
        return $this->spyCompanyUnitAddresses;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCompanyUnitAddressEntityTransfer $spyCompanyUnitAddresses
     *
     * @return $this
     */
    public function addSpyCompanyUnitAddresses(SpyCompanyUnitAddressEntityTransfer $spyCompanyUnitAddresses)
    {
        $this->spyCompanyUnitAddresses[] = $spyCompanyUnitAddresses;
        $this->modifiedProperties[self::SPY_COMPANY_UNIT_ADDRESSES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCompanyUnitAddresses()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_COMPANY_UNIT_ADDRESSES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderAddressEntityTransfer[] $spySalesOrderAddresses
     *
     * @return $this
     */
    public function setSpySalesOrderAddresses(ArrayObject $spySalesOrderAddresses)
    {
        $this->spySalesOrderAddresses = $spySalesOrderAddresses;
        $this->modifiedProperties[self::SPY_SALES_ORDER_ADDRESSES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderAddressEntityTransfer[]
     */
    public function getSpySalesOrderAddresses()
    {
        return $this->spySalesOrderAddresses;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderAddressEntityTransfer $spySalesOrderAddresses
     *
     * @return $this
     */
    public function addSpySalesOrderAddresses(SpySalesOrderAddressEntityTransfer $spySalesOrderAddresses)
    {
        $this->spySalesOrderAddresses[] = $spySalesOrderAddresses;
        $this->modifiedProperties[self::SPY_SALES_ORDER_ADDRESSES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpySalesOrderAddresses()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SALES_ORDER_ADDRESSES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderAddressHistoryEntityTransfer[] $spySalesOrderAddressHistories
     *
     * @return $this
     */
    public function setSpySalesOrderAddressHistories(ArrayObject $spySalesOrderAddressHistories)
    {
        $this->spySalesOrderAddressHistories = $spySalesOrderAddressHistories;
        $this->modifiedProperties[self::SPY_SALES_ORDER_ADDRESS_HISTORIES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderAddressHistoryEntityTransfer[]
     */
    public function getSpySalesOrderAddressHistories()
    {
        return $this->spySalesOrderAddressHistories;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderAddressHistoryEntityTransfer $spySalesOrderAddressHistories
     *
     * @return $this
     */
    public function addSpySalesOrderAddressHistories(SpySalesOrderAddressHistoryEntityTransfer $spySalesOrderAddressHistories)
    {
        $this->spySalesOrderAddressHistories[] = $spySalesOrderAddressHistories;
        $this->modifiedProperties[self::SPY_SALES_ORDER_ADDRESS_HISTORIES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpySalesOrderAddressHistories()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SALES_ORDER_ADDRESS_HISTORIES);

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
                case 'idRegion':
                case 'fkCountry':
                case 'iso2Code':
                case 'name':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyCountry':
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
                case 'spyStockAddresses':
                case 'spyCustomerAddresses':
                case 'spyCompanyUnitAddresses':
                case 'spySalesOrderAddresses':
                case 'spySalesOrderAddressHistories':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
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
                case 'idRegion':
                case 'fkCountry':
                case 'iso2Code':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyCountry':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyStockAddresses':
                case 'spyCustomerAddresses':
                case 'spyCompanyUnitAddresses':
                case 'spySalesOrderAddresses':
                case 'spySalesOrderAddressHistories':
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
                case 'idRegion':
                case 'fkCountry':
                case 'iso2Code':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyCountry':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyStockAddresses':
                case 'spyCustomerAddresses':
                case 'spyCompanyUnitAddresses':
                case 'spySalesOrderAddresses':
                case 'spySalesOrderAddressHistories':
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
        $this->spyStockAddresses = $this->spyStockAddresses ?: new ArrayObject();
        $this->spyCustomerAddresses = $this->spyCustomerAddresses ?: new ArrayObject();
        $this->spyCompanyUnitAddresses = $this->spyCompanyUnitAddresses ?: new ArrayObject();
        $this->spySalesOrderAddresses = $this->spySalesOrderAddresses ?: new ArrayObject();
        $this->spySalesOrderAddressHistories = $this->spySalesOrderAddressHistories ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idRegion' => $this->idRegion,
            'fkCountry' => $this->fkCountry,
            'iso2Code' => $this->iso2Code,
            'name' => $this->name,
            'spyCountry' => $this->spyCountry,
            'spyStockAddresses' => $this->spyStockAddresses,
            'spyCustomerAddresses' => $this->spyCustomerAddresses,
            'spyCompanyUnitAddresses' => $this->spyCompanyUnitAddresses,
            'spySalesOrderAddresses' => $this->spySalesOrderAddresses,
            'spySalesOrderAddressHistories' => $this->spySalesOrderAddressHistories,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_region' => $this->idRegion,
            'fk_country' => $this->fkCountry,
            'iso2_code' => $this->iso2Code,
            'name' => $this->name,
            'spy_country' => $this->spyCountry,
            'spy_stock_addresses' => $this->spyStockAddresses,
            'spy_customer_addresses' => $this->spyCustomerAddresses,
            'spy_company_unit_addresses' => $this->spyCompanyUnitAddresses,
            'spy_sales_order_addresses' => $this->spySalesOrderAddresses,
            'spy_sales_order_address_histories' => $this->spySalesOrderAddressHistories,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_region' => $this->idRegion instanceof AbstractTransfer ? $this->idRegion->toArray(true, false) : $this->idRegion,
            'fk_country' => $this->fkCountry instanceof AbstractTransfer ? $this->fkCountry->toArray(true, false) : $this->fkCountry,
            'iso2_code' => $this->iso2Code instanceof AbstractTransfer ? $this->iso2Code->toArray(true, false) : $this->iso2Code,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'spy_country' => $this->spyCountry instanceof AbstractTransfer ? $this->spyCountry->toArray(true, false) : $this->spyCountry,
            'spy_stock_addresses' => $this->spyStockAddresses instanceof AbstractTransfer ? $this->spyStockAddresses->toArray(true, false) : $this->addValuesToCollection($this->spyStockAddresses, true, false),
            'spy_customer_addresses' => $this->spyCustomerAddresses instanceof AbstractTransfer ? $this->spyCustomerAddresses->toArray(true, false) : $this->addValuesToCollection($this->spyCustomerAddresses, true, false),
            'spy_company_unit_addresses' => $this->spyCompanyUnitAddresses instanceof AbstractTransfer ? $this->spyCompanyUnitAddresses->toArray(true, false) : $this->addValuesToCollection($this->spyCompanyUnitAddresses, true, false),
            'spy_sales_order_addresses' => $this->spySalesOrderAddresses instanceof AbstractTransfer ? $this->spySalesOrderAddresses->toArray(true, false) : $this->addValuesToCollection($this->spySalesOrderAddresses, true, false),
            'spy_sales_order_address_histories' => $this->spySalesOrderAddressHistories instanceof AbstractTransfer ? $this->spySalesOrderAddressHistories->toArray(true, false) : $this->addValuesToCollection($this->spySalesOrderAddressHistories, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idRegion' => $this->idRegion instanceof AbstractTransfer ? $this->idRegion->toArray(true, true) : $this->idRegion,
            'fkCountry' => $this->fkCountry instanceof AbstractTransfer ? $this->fkCountry->toArray(true, true) : $this->fkCountry,
            'iso2Code' => $this->iso2Code instanceof AbstractTransfer ? $this->iso2Code->toArray(true, true) : $this->iso2Code,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'spyCountry' => $this->spyCountry instanceof AbstractTransfer ? $this->spyCountry->toArray(true, true) : $this->spyCountry,
            'spyStockAddresses' => $this->spyStockAddresses instanceof AbstractTransfer ? $this->spyStockAddresses->toArray(true, true) : $this->addValuesToCollection($this->spyStockAddresses, true, true),
            'spyCustomerAddresses' => $this->spyCustomerAddresses instanceof AbstractTransfer ? $this->spyCustomerAddresses->toArray(true, true) : $this->addValuesToCollection($this->spyCustomerAddresses, true, true),
            'spyCompanyUnitAddresses' => $this->spyCompanyUnitAddresses instanceof AbstractTransfer ? $this->spyCompanyUnitAddresses->toArray(true, true) : $this->addValuesToCollection($this->spyCompanyUnitAddresses, true, true),
            'spySalesOrderAddresses' => $this->spySalesOrderAddresses instanceof AbstractTransfer ? $this->spySalesOrderAddresses->toArray(true, true) : $this->addValuesToCollection($this->spySalesOrderAddresses, true, true),
            'spySalesOrderAddressHistories' => $this->spySalesOrderAddressHistories instanceof AbstractTransfer ? $this->spySalesOrderAddressHistories->toArray(true, true) : $this->addValuesToCollection($this->spySalesOrderAddressHistories, true, true),
        ];
    }
}
