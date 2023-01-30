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
class SpyCompanyUnitAddressToCompanyBusinessUnitEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_COMPANY_UNIT_ADDRESS_TO_COMPANY_BUSINESS_UNIT = 'idCompanyUnitAddressToCompanyBusinessUnit';

    /**
     * @var string
     */
    public const FK_COMPANY_BUSINESS_UNIT = 'fkCompanyBusinessUnit';

    /**
     * @var string
     */
    public const FK_COMPANY_UNIT_ADDRESS = 'fkCompanyUnitAddress';

    /**
     * @var string
     */
    public const COMPANY_BUSINESS_UNIT = 'companyBusinessUnit';

    /**
     * @var string
     */
    public const COMPANY_UNIT_ADDRESS = 'companyUnitAddress';

    /**
     * @var integer|null
     */
    protected $idCompanyUnitAddressToCompanyBusinessUnit;

    /**
     * @var integer|null
     */
    protected $fkCompanyBusinessUnit;

    /**
     * @var integer|null
     */
    protected $fkCompanyUnitAddress;

    /**
     * @var \Generated\Shared\Transfer\SpyCompanyBusinessUnitEntityTransfer|null
     */
    protected $companyBusinessUnit;

    /**
     * @var \Generated\Shared\Transfer\SpyCompanyUnitAddressEntityTransfer|null
     */
    protected $companyUnitAddress;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_company_unit_address_to_company_business_unit' => 'idCompanyUnitAddressToCompanyBusinessUnit',
        'idCompanyUnitAddressToCompanyBusinessUnit' => 'idCompanyUnitAddressToCompanyBusinessUnit',
        'IdCompanyUnitAddressToCompanyBusinessUnit' => 'idCompanyUnitAddressToCompanyBusinessUnit',
        'fk_company_business_unit' => 'fkCompanyBusinessUnit',
        'fkCompanyBusinessUnit' => 'fkCompanyBusinessUnit',
        'FkCompanyBusinessUnit' => 'fkCompanyBusinessUnit',
        'fk_company_unit_address' => 'fkCompanyUnitAddress',
        'fkCompanyUnitAddress' => 'fkCompanyUnitAddress',
        'FkCompanyUnitAddress' => 'fkCompanyUnitAddress',
        'company_business_unit' => 'companyBusinessUnit',
        'companyBusinessUnit' => 'companyBusinessUnit',
        'CompanyBusinessUnit' => 'companyBusinessUnit',
        'company_unit_address' => 'companyUnitAddress',
        'companyUnitAddress' => 'companyUnitAddress',
        'CompanyUnitAddress' => 'companyUnitAddress',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_COMPANY_UNIT_ADDRESS_TO_COMPANY_BUSINESS_UNIT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_company_unit_address_to_company_business_unit',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_COMPANY_BUSINESS_UNIT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_company_business_unit',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_COMPANY_UNIT_ADDRESS => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_company_unit_address',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COMPANY_BUSINESS_UNIT => [
            'type' => 'Generated\Shared\Transfer\SpyCompanyBusinessUnitEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'company_business_unit',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COMPANY_UNIT_ADDRESS => [
            'type' => 'Generated\Shared\Transfer\SpyCompanyUnitAddressEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'company_unit_address',
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
    public static $entityNamespace = 'Orm\Zed\CompanyUnitAddress\Persistence\SpyCompanyUnitAddressToCompanyBusinessUnit';


    /**
     * @module 
     *
     * @param integer|null $idCompanyUnitAddressToCompanyBusinessUnit
     *
     * @return $this
     */
    public function setIdCompanyUnitAddressToCompanyBusinessUnit($idCompanyUnitAddressToCompanyBusinessUnit)
    {
        $this->idCompanyUnitAddressToCompanyBusinessUnit = $idCompanyUnitAddressToCompanyBusinessUnit;
        $this->modifiedProperties[self::ID_COMPANY_UNIT_ADDRESS_TO_COMPANY_BUSINESS_UNIT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdCompanyUnitAddressToCompanyBusinessUnit()
    {
        return $this->idCompanyUnitAddressToCompanyBusinessUnit;
    }

    /**
     * @module 
     *
     * @param integer|null $idCompanyUnitAddressToCompanyBusinessUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCompanyUnitAddressToCompanyBusinessUnitOrFail($idCompanyUnitAddressToCompanyBusinessUnit)
    {
        if ($idCompanyUnitAddressToCompanyBusinessUnit === null) {
            $this->throwNullValueException(static::ID_COMPANY_UNIT_ADDRESS_TO_COMPANY_BUSINESS_UNIT);
        }

        return $this->setIdCompanyUnitAddressToCompanyBusinessUnit($idCompanyUnitAddressToCompanyBusinessUnit);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdCompanyUnitAddressToCompanyBusinessUnitOrFail()
    {
        if ($this->idCompanyUnitAddressToCompanyBusinessUnit === null) {
            $this->throwNullValueException(static::ID_COMPANY_UNIT_ADDRESS_TO_COMPANY_BUSINESS_UNIT);
        }

        return $this->idCompanyUnitAddressToCompanyBusinessUnit;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCompanyUnitAddressToCompanyBusinessUnit()
    {
        $this->assertPropertyIsSet(self::ID_COMPANY_UNIT_ADDRESS_TO_COMPANY_BUSINESS_UNIT);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCompanyBusinessUnit
     *
     * @return $this
     */
    public function setFkCompanyBusinessUnit($fkCompanyBusinessUnit)
    {
        $this->fkCompanyBusinessUnit = $fkCompanyBusinessUnit;
        $this->modifiedProperties[self::FK_COMPANY_BUSINESS_UNIT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkCompanyBusinessUnit()
    {
        return $this->fkCompanyBusinessUnit;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCompanyBusinessUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCompanyBusinessUnitOrFail($fkCompanyBusinessUnit)
    {
        if ($fkCompanyBusinessUnit === null) {
            $this->throwNullValueException(static::FK_COMPANY_BUSINESS_UNIT);
        }

        return $this->setFkCompanyBusinessUnit($fkCompanyBusinessUnit);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCompanyBusinessUnitOrFail()
    {
        if ($this->fkCompanyBusinessUnit === null) {
            $this->throwNullValueException(static::FK_COMPANY_BUSINESS_UNIT);
        }

        return $this->fkCompanyBusinessUnit;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCompanyBusinessUnit()
    {
        $this->assertPropertyIsSet(self::FK_COMPANY_BUSINESS_UNIT);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCompanyUnitAddress
     *
     * @return $this
     */
    public function setFkCompanyUnitAddress($fkCompanyUnitAddress)
    {
        $this->fkCompanyUnitAddress = $fkCompanyUnitAddress;
        $this->modifiedProperties[self::FK_COMPANY_UNIT_ADDRESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkCompanyUnitAddress()
    {
        return $this->fkCompanyUnitAddress;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCompanyUnitAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCompanyUnitAddressOrFail($fkCompanyUnitAddress)
    {
        if ($fkCompanyUnitAddress === null) {
            $this->throwNullValueException(static::FK_COMPANY_UNIT_ADDRESS);
        }

        return $this->setFkCompanyUnitAddress($fkCompanyUnitAddress);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCompanyUnitAddressOrFail()
    {
        if ($this->fkCompanyUnitAddress === null) {
            $this->throwNullValueException(static::FK_COMPANY_UNIT_ADDRESS);
        }

        return $this->fkCompanyUnitAddress;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCompanyUnitAddress()
    {
        $this->assertPropertyIsSet(self::FK_COMPANY_UNIT_ADDRESS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCompanyBusinessUnitEntityTransfer|null $companyBusinessUnit
     *
     * @return $this
     */
    public function setCompanyBusinessUnit(SpyCompanyBusinessUnitEntityTransfer $companyBusinessUnit = null)
    {
        $this->companyBusinessUnit = $companyBusinessUnit;
        $this->modifiedProperties[self::COMPANY_BUSINESS_UNIT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCompanyBusinessUnitEntityTransfer|null
     */
    public function getCompanyBusinessUnit()
    {
        return $this->companyBusinessUnit;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCompanyBusinessUnitEntityTransfer $companyBusinessUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCompanyBusinessUnitOrFail(SpyCompanyBusinessUnitEntityTransfer $companyBusinessUnit)
    {
        return $this->setCompanyBusinessUnit($companyBusinessUnit);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCompanyBusinessUnitEntityTransfer
     */
    public function getCompanyBusinessUnitOrFail()
    {
        if ($this->companyBusinessUnit === null) {
            $this->throwNullValueException(static::COMPANY_BUSINESS_UNIT);
        }

        return $this->companyBusinessUnit;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompanyBusinessUnit()
    {
        $this->assertPropertyIsSet(self::COMPANY_BUSINESS_UNIT);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCompanyUnitAddressEntityTransfer|null $companyUnitAddress
     *
     * @return $this
     */
    public function setCompanyUnitAddress(SpyCompanyUnitAddressEntityTransfer $companyUnitAddress = null)
    {
        $this->companyUnitAddress = $companyUnitAddress;
        $this->modifiedProperties[self::COMPANY_UNIT_ADDRESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCompanyUnitAddressEntityTransfer|null
     */
    public function getCompanyUnitAddress()
    {
        return $this->companyUnitAddress;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCompanyUnitAddressEntityTransfer $companyUnitAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCompanyUnitAddressOrFail(SpyCompanyUnitAddressEntityTransfer $companyUnitAddress)
    {
        return $this->setCompanyUnitAddress($companyUnitAddress);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCompanyUnitAddressEntityTransfer
     */
    public function getCompanyUnitAddressOrFail()
    {
        if ($this->companyUnitAddress === null) {
            $this->throwNullValueException(static::COMPANY_UNIT_ADDRESS);
        }

        return $this->companyUnitAddress;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompanyUnitAddress()
    {
        $this->assertPropertyIsSet(self::COMPANY_UNIT_ADDRESS);

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
                case 'idCompanyUnitAddressToCompanyBusinessUnit':
                case 'fkCompanyBusinessUnit':
                case 'fkCompanyUnitAddress':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'companyBusinessUnit':
                case 'companyUnitAddress':
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
                case 'idCompanyUnitAddressToCompanyBusinessUnit':
                case 'fkCompanyBusinessUnit':
                case 'fkCompanyUnitAddress':
                    $values[$arrayKey] = $value;

                    break;
                case 'companyBusinessUnit':
                case 'companyUnitAddress':
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
                case 'idCompanyUnitAddressToCompanyBusinessUnit':
                case 'fkCompanyBusinessUnit':
                case 'fkCompanyUnitAddress':
                    $values[$arrayKey] = $value;

                    break;
                case 'companyBusinessUnit':
                case 'companyUnitAddress':
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
            'idCompanyUnitAddressToCompanyBusinessUnit' => $this->idCompanyUnitAddressToCompanyBusinessUnit,
            'fkCompanyBusinessUnit' => $this->fkCompanyBusinessUnit,
            'fkCompanyUnitAddress' => $this->fkCompanyUnitAddress,
            'companyBusinessUnit' => $this->companyBusinessUnit,
            'companyUnitAddress' => $this->companyUnitAddress,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_company_unit_address_to_company_business_unit' => $this->idCompanyUnitAddressToCompanyBusinessUnit,
            'fk_company_business_unit' => $this->fkCompanyBusinessUnit,
            'fk_company_unit_address' => $this->fkCompanyUnitAddress,
            'company_business_unit' => $this->companyBusinessUnit,
            'company_unit_address' => $this->companyUnitAddress,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_company_unit_address_to_company_business_unit' => $this->idCompanyUnitAddressToCompanyBusinessUnit instanceof AbstractTransfer ? $this->idCompanyUnitAddressToCompanyBusinessUnit->toArray(true, false) : $this->idCompanyUnitAddressToCompanyBusinessUnit,
            'fk_company_business_unit' => $this->fkCompanyBusinessUnit instanceof AbstractTransfer ? $this->fkCompanyBusinessUnit->toArray(true, false) : $this->fkCompanyBusinessUnit,
            'fk_company_unit_address' => $this->fkCompanyUnitAddress instanceof AbstractTransfer ? $this->fkCompanyUnitAddress->toArray(true, false) : $this->fkCompanyUnitAddress,
            'company_business_unit' => $this->companyBusinessUnit instanceof AbstractTransfer ? $this->companyBusinessUnit->toArray(true, false) : $this->companyBusinessUnit,
            'company_unit_address' => $this->companyUnitAddress instanceof AbstractTransfer ? $this->companyUnitAddress->toArray(true, false) : $this->companyUnitAddress,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCompanyUnitAddressToCompanyBusinessUnit' => $this->idCompanyUnitAddressToCompanyBusinessUnit instanceof AbstractTransfer ? $this->idCompanyUnitAddressToCompanyBusinessUnit->toArray(true, true) : $this->idCompanyUnitAddressToCompanyBusinessUnit,
            'fkCompanyBusinessUnit' => $this->fkCompanyBusinessUnit instanceof AbstractTransfer ? $this->fkCompanyBusinessUnit->toArray(true, true) : $this->fkCompanyBusinessUnit,
            'fkCompanyUnitAddress' => $this->fkCompanyUnitAddress instanceof AbstractTransfer ? $this->fkCompanyUnitAddress->toArray(true, true) : $this->fkCompanyUnitAddress,
            'companyBusinessUnit' => $this->companyBusinessUnit instanceof AbstractTransfer ? $this->companyBusinessUnit->toArray(true, true) : $this->companyBusinessUnit,
            'companyUnitAddress' => $this->companyUnitAddress instanceof AbstractTransfer ? $this->companyUnitAddress->toArray(true, true) : $this->companyUnitAddress,
        ];
    }
}
