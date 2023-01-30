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
class SpyCompanyUnitAddressLabelEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_COMPANY_UNIT_ADDRESS_LABEL = 'idCompanyUnitAddressLabel';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const SPY_COMPANY_UNIT_ADDRESS_LABEL_TO_COMPANY_UNIT_ADDRESSES = 'spyCompanyUnitAddressLabelToCompanyUnitAddresses';

    /**
     * @var integer|null
     */
    protected $idCompanyUnitAddressLabel;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCompanyUnitAddressLabelToCompanyUnitAddressEntityTransfer[]
     */
    protected $spyCompanyUnitAddressLabelToCompanyUnitAddresses;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_company_unit_address_label' => 'idCompanyUnitAddressLabel',
        'idCompanyUnitAddressLabel' => 'idCompanyUnitAddressLabel',
        'IdCompanyUnitAddressLabel' => 'idCompanyUnitAddressLabel',
        'name' => 'name',
        'Name' => 'name',
        'spy_company_unit_address_label_to_company_unit_addresses' => 'spyCompanyUnitAddressLabelToCompanyUnitAddresses',
        'spyCompanyUnitAddressLabelToCompanyUnitAddresses' => 'spyCompanyUnitAddressLabelToCompanyUnitAddresses',
        'SpyCompanyUnitAddressLabelToCompanyUnitAddresses' => 'spyCompanyUnitAddressLabelToCompanyUnitAddresses',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_COMPANY_UNIT_ADDRESS_LABEL => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_company_unit_address_label',
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
        self::SPY_COMPANY_UNIT_ADDRESS_LABEL_TO_COMPANY_UNIT_ADDRESSES => [
            'type' => 'Generated\Shared\Transfer\SpyCompanyUnitAddressLabelToCompanyUnitAddressEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_company_unit_address_label_to_company_unit_addresses',
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
    public static $entityNamespace = 'Orm\Zed\CompanyUnitAddressLabel\Persistence\SpyCompanyUnitAddressLabel';


    /**
     * @module 
     *
     * @param integer|null $idCompanyUnitAddressLabel
     *
     * @return $this
     */
    public function setIdCompanyUnitAddressLabel($idCompanyUnitAddressLabel)
    {
        $this->idCompanyUnitAddressLabel = $idCompanyUnitAddressLabel;
        $this->modifiedProperties[self::ID_COMPANY_UNIT_ADDRESS_LABEL] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdCompanyUnitAddressLabel()
    {
        return $this->idCompanyUnitAddressLabel;
    }

    /**
     * @module 
     *
     * @param integer|null $idCompanyUnitAddressLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCompanyUnitAddressLabelOrFail($idCompanyUnitAddressLabel)
    {
        if ($idCompanyUnitAddressLabel === null) {
            $this->throwNullValueException(static::ID_COMPANY_UNIT_ADDRESS_LABEL);
        }

        return $this->setIdCompanyUnitAddressLabel($idCompanyUnitAddressLabel);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdCompanyUnitAddressLabelOrFail()
    {
        if ($this->idCompanyUnitAddressLabel === null) {
            $this->throwNullValueException(static::ID_COMPANY_UNIT_ADDRESS_LABEL);
        }

        return $this->idCompanyUnitAddressLabel;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCompanyUnitAddressLabel()
    {
        $this->assertPropertyIsSet(self::ID_COMPANY_UNIT_ADDRESS_LABEL);

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
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCompanyUnitAddressLabelToCompanyUnitAddressEntityTransfer[] $spyCompanyUnitAddressLabelToCompanyUnitAddresses
     *
     * @return $this
     */
    public function setSpyCompanyUnitAddressLabelToCompanyUnitAddresses(ArrayObject $spyCompanyUnitAddressLabelToCompanyUnitAddresses)
    {
        $this->spyCompanyUnitAddressLabelToCompanyUnitAddresses = $spyCompanyUnitAddressLabelToCompanyUnitAddresses;
        $this->modifiedProperties[self::SPY_COMPANY_UNIT_ADDRESS_LABEL_TO_COMPANY_UNIT_ADDRESSES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCompanyUnitAddressLabelToCompanyUnitAddressEntityTransfer[]
     */
    public function getSpyCompanyUnitAddressLabelToCompanyUnitAddresses()
    {
        return $this->spyCompanyUnitAddressLabelToCompanyUnitAddresses;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCompanyUnitAddressLabelToCompanyUnitAddressEntityTransfer $spyCompanyUnitAddressLabelToCompanyUnitAddresses
     *
     * @return $this
     */
    public function addSpyCompanyUnitAddressLabelToCompanyUnitAddresses(SpyCompanyUnitAddressLabelToCompanyUnitAddressEntityTransfer $spyCompanyUnitAddressLabelToCompanyUnitAddresses)
    {
        $this->spyCompanyUnitAddressLabelToCompanyUnitAddresses[] = $spyCompanyUnitAddressLabelToCompanyUnitAddresses;
        $this->modifiedProperties[self::SPY_COMPANY_UNIT_ADDRESS_LABEL_TO_COMPANY_UNIT_ADDRESSES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCompanyUnitAddressLabelToCompanyUnitAddresses()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_COMPANY_UNIT_ADDRESS_LABEL_TO_COMPANY_UNIT_ADDRESSES);

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
                case 'idCompanyUnitAddressLabel':
                case 'name':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyCompanyUnitAddressLabelToCompanyUnitAddresses':
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
                case 'idCompanyUnitAddressLabel':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyCompanyUnitAddressLabelToCompanyUnitAddresses':
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
                case 'idCompanyUnitAddressLabel':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyCompanyUnitAddressLabelToCompanyUnitAddresses':
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
        $this->spyCompanyUnitAddressLabelToCompanyUnitAddresses = $this->spyCompanyUnitAddressLabelToCompanyUnitAddresses ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idCompanyUnitAddressLabel' => $this->idCompanyUnitAddressLabel,
            'name' => $this->name,
            'spyCompanyUnitAddressLabelToCompanyUnitAddresses' => $this->spyCompanyUnitAddressLabelToCompanyUnitAddresses,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_company_unit_address_label' => $this->idCompanyUnitAddressLabel,
            'name' => $this->name,
            'spy_company_unit_address_label_to_company_unit_addresses' => $this->spyCompanyUnitAddressLabelToCompanyUnitAddresses,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_company_unit_address_label' => $this->idCompanyUnitAddressLabel instanceof AbstractTransfer ? $this->idCompanyUnitAddressLabel->toArray(true, false) : $this->idCompanyUnitAddressLabel,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'spy_company_unit_address_label_to_company_unit_addresses' => $this->spyCompanyUnitAddressLabelToCompanyUnitAddresses instanceof AbstractTransfer ? $this->spyCompanyUnitAddressLabelToCompanyUnitAddresses->toArray(true, false) : $this->addValuesToCollection($this->spyCompanyUnitAddressLabelToCompanyUnitAddresses, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCompanyUnitAddressLabel' => $this->idCompanyUnitAddressLabel instanceof AbstractTransfer ? $this->idCompanyUnitAddressLabel->toArray(true, true) : $this->idCompanyUnitAddressLabel,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'spyCompanyUnitAddressLabelToCompanyUnitAddresses' => $this->spyCompanyUnitAddressLabelToCompanyUnitAddresses instanceof AbstractTransfer ? $this->spyCompanyUnitAddressLabelToCompanyUnitAddresses->toArray(true, true) : $this->addValuesToCollection($this->spyCompanyUnitAddressLabelToCompanyUnitAddresses, true, true),
        ];
    }
}
