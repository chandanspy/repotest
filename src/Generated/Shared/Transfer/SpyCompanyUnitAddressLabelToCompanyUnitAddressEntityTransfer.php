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
class SpyCompanyUnitAddressLabelToCompanyUnitAddressEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_COMPANY_UNIT_ADDRESS_LABEL_TO_COMPANY_UNIT_ADDRESS = 'idCompanyUnitAddressLabelToCompanyUnitAddress';

    /**
     * @var string
     */
    public const FK_COMPANY_UNIT_ADDRESS = 'fkCompanyUnitAddress';

    /**
     * @var string
     */
    public const FK_COMPANY_UNIT_ADDRESS_LABEL = 'fkCompanyUnitAddressLabel';

    /**
     * @var string
     */
    public const COMPANY_UNIT_ADDRESS = 'companyUnitAddress';

    /**
     * @var string
     */
    public const COMPANY_UNIT_ADDRESS_LABEL = 'companyUnitAddressLabel';

    /**
     * @var integer|null
     */
    protected $idCompanyUnitAddressLabelToCompanyUnitAddress;

    /**
     * @var integer|null
     */
    protected $fkCompanyUnitAddress;

    /**
     * @var integer|null
     */
    protected $fkCompanyUnitAddressLabel;

    /**
     * @var \Generated\Shared\Transfer\SpyCompanyUnitAddressEntityTransfer|null
     */
    protected $companyUnitAddress;

    /**
     * @var \Generated\Shared\Transfer\SpyCompanyUnitAddressLabelEntityTransfer|null
     */
    protected $companyUnitAddressLabel;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_company_unit_address_label_to_company_unit_address' => 'idCompanyUnitAddressLabelToCompanyUnitAddress',
        'idCompanyUnitAddressLabelToCompanyUnitAddress' => 'idCompanyUnitAddressLabelToCompanyUnitAddress',
        'IdCompanyUnitAddressLabelToCompanyUnitAddress' => 'idCompanyUnitAddressLabelToCompanyUnitAddress',
        'fk_company_unit_address' => 'fkCompanyUnitAddress',
        'fkCompanyUnitAddress' => 'fkCompanyUnitAddress',
        'FkCompanyUnitAddress' => 'fkCompanyUnitAddress',
        'fk_company_unit_address_label' => 'fkCompanyUnitAddressLabel',
        'fkCompanyUnitAddressLabel' => 'fkCompanyUnitAddressLabel',
        'FkCompanyUnitAddressLabel' => 'fkCompanyUnitAddressLabel',
        'company_unit_address' => 'companyUnitAddress',
        'companyUnitAddress' => 'companyUnitAddress',
        'CompanyUnitAddress' => 'companyUnitAddress',
        'company_unit_address_label' => 'companyUnitAddressLabel',
        'companyUnitAddressLabel' => 'companyUnitAddressLabel',
        'CompanyUnitAddressLabel' => 'companyUnitAddressLabel',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_COMPANY_UNIT_ADDRESS_LABEL_TO_COMPANY_UNIT_ADDRESS => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_company_unit_address_label_to_company_unit_address',
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
        self::FK_COMPANY_UNIT_ADDRESS_LABEL => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_company_unit_address_label',
            'is_collection' => false,
            'is_transfer' => false,
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
        self::COMPANY_UNIT_ADDRESS_LABEL => [
            'type' => 'Generated\Shared\Transfer\SpyCompanyUnitAddressLabelEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'company_unit_address_label',
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
    public static $entityNamespace = 'Orm\Zed\CompanyUnitAddressLabel\Persistence\SpyCompanyUnitAddressLabelToCompanyUnitAddress';


    /**
     * @module 
     *
     * @param integer|null $idCompanyUnitAddressLabelToCompanyUnitAddress
     *
     * @return $this
     */
    public function setIdCompanyUnitAddressLabelToCompanyUnitAddress($idCompanyUnitAddressLabelToCompanyUnitAddress)
    {
        $this->idCompanyUnitAddressLabelToCompanyUnitAddress = $idCompanyUnitAddressLabelToCompanyUnitAddress;
        $this->modifiedProperties[self::ID_COMPANY_UNIT_ADDRESS_LABEL_TO_COMPANY_UNIT_ADDRESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdCompanyUnitAddressLabelToCompanyUnitAddress()
    {
        return $this->idCompanyUnitAddressLabelToCompanyUnitAddress;
    }

    /**
     * @module 
     *
     * @param integer|null $idCompanyUnitAddressLabelToCompanyUnitAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCompanyUnitAddressLabelToCompanyUnitAddressOrFail($idCompanyUnitAddressLabelToCompanyUnitAddress)
    {
        if ($idCompanyUnitAddressLabelToCompanyUnitAddress === null) {
            $this->throwNullValueException(static::ID_COMPANY_UNIT_ADDRESS_LABEL_TO_COMPANY_UNIT_ADDRESS);
        }

        return $this->setIdCompanyUnitAddressLabelToCompanyUnitAddress($idCompanyUnitAddressLabelToCompanyUnitAddress);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdCompanyUnitAddressLabelToCompanyUnitAddressOrFail()
    {
        if ($this->idCompanyUnitAddressLabelToCompanyUnitAddress === null) {
            $this->throwNullValueException(static::ID_COMPANY_UNIT_ADDRESS_LABEL_TO_COMPANY_UNIT_ADDRESS);
        }

        return $this->idCompanyUnitAddressLabelToCompanyUnitAddress;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCompanyUnitAddressLabelToCompanyUnitAddress()
    {
        $this->assertPropertyIsSet(self::ID_COMPANY_UNIT_ADDRESS_LABEL_TO_COMPANY_UNIT_ADDRESS);

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
     * @param integer|null $fkCompanyUnitAddressLabel
     *
     * @return $this
     */
    public function setFkCompanyUnitAddressLabel($fkCompanyUnitAddressLabel)
    {
        $this->fkCompanyUnitAddressLabel = $fkCompanyUnitAddressLabel;
        $this->modifiedProperties[self::FK_COMPANY_UNIT_ADDRESS_LABEL] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkCompanyUnitAddressLabel()
    {
        return $this->fkCompanyUnitAddressLabel;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCompanyUnitAddressLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCompanyUnitAddressLabelOrFail($fkCompanyUnitAddressLabel)
    {
        if ($fkCompanyUnitAddressLabel === null) {
            $this->throwNullValueException(static::FK_COMPANY_UNIT_ADDRESS_LABEL);
        }

        return $this->setFkCompanyUnitAddressLabel($fkCompanyUnitAddressLabel);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCompanyUnitAddressLabelOrFail()
    {
        if ($this->fkCompanyUnitAddressLabel === null) {
            $this->throwNullValueException(static::FK_COMPANY_UNIT_ADDRESS_LABEL);
        }

        return $this->fkCompanyUnitAddressLabel;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCompanyUnitAddressLabel()
    {
        $this->assertPropertyIsSet(self::FK_COMPANY_UNIT_ADDRESS_LABEL);

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
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCompanyUnitAddressLabelEntityTransfer|null $companyUnitAddressLabel
     *
     * @return $this
     */
    public function setCompanyUnitAddressLabel(SpyCompanyUnitAddressLabelEntityTransfer $companyUnitAddressLabel = null)
    {
        $this->companyUnitAddressLabel = $companyUnitAddressLabel;
        $this->modifiedProperties[self::COMPANY_UNIT_ADDRESS_LABEL] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCompanyUnitAddressLabelEntityTransfer|null
     */
    public function getCompanyUnitAddressLabel()
    {
        return $this->companyUnitAddressLabel;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCompanyUnitAddressLabelEntityTransfer $companyUnitAddressLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCompanyUnitAddressLabelOrFail(SpyCompanyUnitAddressLabelEntityTransfer $companyUnitAddressLabel)
    {
        return $this->setCompanyUnitAddressLabel($companyUnitAddressLabel);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCompanyUnitAddressLabelEntityTransfer
     */
    public function getCompanyUnitAddressLabelOrFail()
    {
        if ($this->companyUnitAddressLabel === null) {
            $this->throwNullValueException(static::COMPANY_UNIT_ADDRESS_LABEL);
        }

        return $this->companyUnitAddressLabel;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompanyUnitAddressLabel()
    {
        $this->assertPropertyIsSet(self::COMPANY_UNIT_ADDRESS_LABEL);

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
                case 'idCompanyUnitAddressLabelToCompanyUnitAddress':
                case 'fkCompanyUnitAddress':
                case 'fkCompanyUnitAddressLabel':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'companyUnitAddress':
                case 'companyUnitAddressLabel':
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
                case 'idCompanyUnitAddressLabelToCompanyUnitAddress':
                case 'fkCompanyUnitAddress':
                case 'fkCompanyUnitAddressLabel':
                    $values[$arrayKey] = $value;

                    break;
                case 'companyUnitAddress':
                case 'companyUnitAddressLabel':
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
                case 'idCompanyUnitAddressLabelToCompanyUnitAddress':
                case 'fkCompanyUnitAddress':
                case 'fkCompanyUnitAddressLabel':
                    $values[$arrayKey] = $value;

                    break;
                case 'companyUnitAddress':
                case 'companyUnitAddressLabel':
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
            'idCompanyUnitAddressLabelToCompanyUnitAddress' => $this->idCompanyUnitAddressLabelToCompanyUnitAddress,
            'fkCompanyUnitAddress' => $this->fkCompanyUnitAddress,
            'fkCompanyUnitAddressLabel' => $this->fkCompanyUnitAddressLabel,
            'companyUnitAddress' => $this->companyUnitAddress,
            'companyUnitAddressLabel' => $this->companyUnitAddressLabel,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_company_unit_address_label_to_company_unit_address' => $this->idCompanyUnitAddressLabelToCompanyUnitAddress,
            'fk_company_unit_address' => $this->fkCompanyUnitAddress,
            'fk_company_unit_address_label' => $this->fkCompanyUnitAddressLabel,
            'company_unit_address' => $this->companyUnitAddress,
            'company_unit_address_label' => $this->companyUnitAddressLabel,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_company_unit_address_label_to_company_unit_address' => $this->idCompanyUnitAddressLabelToCompanyUnitAddress instanceof AbstractTransfer ? $this->idCompanyUnitAddressLabelToCompanyUnitAddress->toArray(true, false) : $this->idCompanyUnitAddressLabelToCompanyUnitAddress,
            'fk_company_unit_address' => $this->fkCompanyUnitAddress instanceof AbstractTransfer ? $this->fkCompanyUnitAddress->toArray(true, false) : $this->fkCompanyUnitAddress,
            'fk_company_unit_address_label' => $this->fkCompanyUnitAddressLabel instanceof AbstractTransfer ? $this->fkCompanyUnitAddressLabel->toArray(true, false) : $this->fkCompanyUnitAddressLabel,
            'company_unit_address' => $this->companyUnitAddress instanceof AbstractTransfer ? $this->companyUnitAddress->toArray(true, false) : $this->companyUnitAddress,
            'company_unit_address_label' => $this->companyUnitAddressLabel instanceof AbstractTransfer ? $this->companyUnitAddressLabel->toArray(true, false) : $this->companyUnitAddressLabel,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCompanyUnitAddressLabelToCompanyUnitAddress' => $this->idCompanyUnitAddressLabelToCompanyUnitAddress instanceof AbstractTransfer ? $this->idCompanyUnitAddressLabelToCompanyUnitAddress->toArray(true, true) : $this->idCompanyUnitAddressLabelToCompanyUnitAddress,
            'fkCompanyUnitAddress' => $this->fkCompanyUnitAddress instanceof AbstractTransfer ? $this->fkCompanyUnitAddress->toArray(true, true) : $this->fkCompanyUnitAddress,
            'fkCompanyUnitAddressLabel' => $this->fkCompanyUnitAddressLabel instanceof AbstractTransfer ? $this->fkCompanyUnitAddressLabel->toArray(true, true) : $this->fkCompanyUnitAddressLabel,
            'companyUnitAddress' => $this->companyUnitAddress instanceof AbstractTransfer ? $this->companyUnitAddress->toArray(true, true) : $this->companyUnitAddress,
            'companyUnitAddressLabel' => $this->companyUnitAddressLabel instanceof AbstractTransfer ? $this->companyUnitAddressLabel->toArray(true, true) : $this->companyUnitAddressLabel,
        ];
    }
}
