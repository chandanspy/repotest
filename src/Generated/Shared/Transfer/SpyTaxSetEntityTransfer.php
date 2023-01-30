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
class SpyTaxSetEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_TAX_SET = 'idTaxSet';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const SPY_PRODUCT_ABSTRACTS = 'spyProductAbstracts';

    /**
     * @var string
     */
    public const SPY_PRODUCT_OPTION_GROUPS = 'spyProductOptionGroups';

    /**
     * @var string
     */
    public const SPY_SHIPMENT_METHODS = 'spyShipmentMethods';

    /**
     * @var string
     */
    public const SPY_SALES_ORDER_THRESHOLD_TAX_SETS = 'spySalesOrderThresholdTaxSets';

    /**
     * @var string
     */
    public const SPY_TAX_SET_TAXES = 'spyTaxSetTaxes';

    /**
     * @var integer|null
     */
    protected $idTaxSet;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductAbstractEntityTransfer[]
     */
    protected $spyProductAbstracts;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductOptionGroupEntityTransfer[]
     */
    protected $spyProductOptionGroups;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyShipmentMethodEntityTransfer[]
     */
    protected $spyShipmentMethods;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderThresholdTaxSetEntityTransfer[]
     */
    protected $spySalesOrderThresholdTaxSets;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyTaxSetTaxEntityTransfer[]
     */
    protected $spyTaxSetTaxes;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_tax_set' => 'idTaxSet',
        'idTaxSet' => 'idTaxSet',
        'IdTaxSet' => 'idTaxSet',
        'name' => 'name',
        'Name' => 'name',
        'spy_product_abstracts' => 'spyProductAbstracts',
        'spyProductAbstracts' => 'spyProductAbstracts',
        'SpyProductAbstracts' => 'spyProductAbstracts',
        'spy_product_option_groups' => 'spyProductOptionGroups',
        'spyProductOptionGroups' => 'spyProductOptionGroups',
        'SpyProductOptionGroups' => 'spyProductOptionGroups',
        'spy_shipment_methods' => 'spyShipmentMethods',
        'spyShipmentMethods' => 'spyShipmentMethods',
        'SpyShipmentMethods' => 'spyShipmentMethods',
        'spy_sales_order_threshold_tax_sets' => 'spySalesOrderThresholdTaxSets',
        'spySalesOrderThresholdTaxSets' => 'spySalesOrderThresholdTaxSets',
        'SpySalesOrderThresholdTaxSets' => 'spySalesOrderThresholdTaxSets',
        'spy_tax_set_taxes' => 'spyTaxSetTaxes',
        'spyTaxSetTaxes' => 'spyTaxSetTaxes',
        'SpyTaxSetTaxes' => 'spyTaxSetTaxes',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_TAX_SET => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_tax_set',
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
        self::SPY_PRODUCT_ABSTRACTS => [
            'type' => 'Generated\Shared\Transfer\SpyProductAbstractEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_abstracts',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_OPTION_GROUPS => [
            'type' => 'Generated\Shared\Transfer\SpyProductOptionGroupEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_option_groups',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SHIPMENT_METHODS => [
            'type' => 'Generated\Shared\Transfer\SpyShipmentMethodEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_shipment_methods',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SALES_ORDER_THRESHOLD_TAX_SETS => [
            'type' => 'Generated\Shared\Transfer\SpySalesOrderThresholdTaxSetEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_sales_order_threshold_tax_sets',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_TAX_SET_TAXES => [
            'type' => 'Generated\Shared\Transfer\SpyTaxSetTaxEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_tax_set_taxes',
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
    public static $entityNamespace = 'Orm\Zed\Tax\Persistence\SpyTaxSet';


    /**
     * @module 
     *
     * @param integer|null $idTaxSet
     *
     * @return $this
     */
    public function setIdTaxSet($idTaxSet)
    {
        $this->idTaxSet = $idTaxSet;
        $this->modifiedProperties[self::ID_TAX_SET] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdTaxSet()
    {
        return $this->idTaxSet;
    }

    /**
     * @module 
     *
     * @param integer|null $idTaxSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdTaxSetOrFail($idTaxSet)
    {
        if ($idTaxSet === null) {
            $this->throwNullValueException(static::ID_TAX_SET);
        }

        return $this->setIdTaxSet($idTaxSet);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdTaxSetOrFail()
    {
        if ($this->idTaxSet === null) {
            $this->throwNullValueException(static::ID_TAX_SET);
        }

        return $this->idTaxSet;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdTaxSet()
    {
        $this->assertPropertyIsSet(self::ID_TAX_SET);

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
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductAbstractEntityTransfer[] $spyProductAbstracts
     *
     * @return $this
     */
    public function setSpyProductAbstracts(ArrayObject $spyProductAbstracts)
    {
        $this->spyProductAbstracts = $spyProductAbstracts;
        $this->modifiedProperties[self::SPY_PRODUCT_ABSTRACTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductAbstractEntityTransfer[]
     */
    public function getSpyProductAbstracts()
    {
        return $this->spyProductAbstracts;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer $spyProductAbstracts
     *
     * @return $this
     */
    public function addSpyProductAbstracts(SpyProductAbstractEntityTransfer $spyProductAbstracts)
    {
        $this->spyProductAbstracts[] = $spyProductAbstracts;
        $this->modifiedProperties[self::SPY_PRODUCT_ABSTRACTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductAbstracts()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_ABSTRACTS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductOptionGroupEntityTransfer[] $spyProductOptionGroups
     *
     * @return $this
     */
    public function setSpyProductOptionGroups(ArrayObject $spyProductOptionGroups)
    {
        $this->spyProductOptionGroups = $spyProductOptionGroups;
        $this->modifiedProperties[self::SPY_PRODUCT_OPTION_GROUPS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductOptionGroupEntityTransfer[]
     */
    public function getSpyProductOptionGroups()
    {
        return $this->spyProductOptionGroups;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductOptionGroupEntityTransfer $spyProductOptionGroups
     *
     * @return $this
     */
    public function addSpyProductOptionGroups(SpyProductOptionGroupEntityTransfer $spyProductOptionGroups)
    {
        $this->spyProductOptionGroups[] = $spyProductOptionGroups;
        $this->modifiedProperties[self::SPY_PRODUCT_OPTION_GROUPS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductOptionGroups()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_OPTION_GROUPS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyShipmentMethodEntityTransfer[] $spyShipmentMethods
     *
     * @return $this
     */
    public function setSpyShipmentMethods(ArrayObject $spyShipmentMethods)
    {
        $this->spyShipmentMethods = $spyShipmentMethods;
        $this->modifiedProperties[self::SPY_SHIPMENT_METHODS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyShipmentMethodEntityTransfer[]
     */
    public function getSpyShipmentMethods()
    {
        return $this->spyShipmentMethods;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyShipmentMethodEntityTransfer $spyShipmentMethods
     *
     * @return $this
     */
    public function addSpyShipmentMethods(SpyShipmentMethodEntityTransfer $spyShipmentMethods)
    {
        $this->spyShipmentMethods[] = $spyShipmentMethods;
        $this->modifiedProperties[self::SPY_SHIPMENT_METHODS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyShipmentMethods()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SHIPMENT_METHODS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderThresholdTaxSetEntityTransfer[] $spySalesOrderThresholdTaxSets
     *
     * @return $this
     */
    public function setSpySalesOrderThresholdTaxSets(ArrayObject $spySalesOrderThresholdTaxSets)
    {
        $this->spySalesOrderThresholdTaxSets = $spySalesOrderThresholdTaxSets;
        $this->modifiedProperties[self::SPY_SALES_ORDER_THRESHOLD_TAX_SETS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderThresholdTaxSetEntityTransfer[]
     */
    public function getSpySalesOrderThresholdTaxSets()
    {
        return $this->spySalesOrderThresholdTaxSets;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderThresholdTaxSetEntityTransfer $spySalesOrderThresholdTaxSets
     *
     * @return $this
     */
    public function addSpySalesOrderThresholdTaxSets(SpySalesOrderThresholdTaxSetEntityTransfer $spySalesOrderThresholdTaxSets)
    {
        $this->spySalesOrderThresholdTaxSets[] = $spySalesOrderThresholdTaxSets;
        $this->modifiedProperties[self::SPY_SALES_ORDER_THRESHOLD_TAX_SETS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpySalesOrderThresholdTaxSets()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SALES_ORDER_THRESHOLD_TAX_SETS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyTaxSetTaxEntityTransfer[] $spyTaxSetTaxes
     *
     * @return $this
     */
    public function setSpyTaxSetTaxes(ArrayObject $spyTaxSetTaxes)
    {
        $this->spyTaxSetTaxes = $spyTaxSetTaxes;
        $this->modifiedProperties[self::SPY_TAX_SET_TAXES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyTaxSetTaxEntityTransfer[]
     */
    public function getSpyTaxSetTaxes()
    {
        return $this->spyTaxSetTaxes;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyTaxSetTaxEntityTransfer $spyTaxSetTaxes
     *
     * @return $this
     */
    public function addSpyTaxSetTaxes(SpyTaxSetTaxEntityTransfer $spyTaxSetTaxes)
    {
        $this->spyTaxSetTaxes[] = $spyTaxSetTaxes;
        $this->modifiedProperties[self::SPY_TAX_SET_TAXES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyTaxSetTaxes()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_TAX_SET_TAXES);

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
                case 'idTaxSet':
                case 'name':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyProductAbstracts':
                case 'spyProductOptionGroups':
                case 'spyShipmentMethods':
                case 'spySalesOrderThresholdTaxSets':
                case 'spyTaxSetTaxes':
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
                case 'idTaxSet':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyProductAbstracts':
                case 'spyProductOptionGroups':
                case 'spyShipmentMethods':
                case 'spySalesOrderThresholdTaxSets':
                case 'spyTaxSetTaxes':
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
                case 'idTaxSet':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyProductAbstracts':
                case 'spyProductOptionGroups':
                case 'spyShipmentMethods':
                case 'spySalesOrderThresholdTaxSets':
                case 'spyTaxSetTaxes':
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
        $this->spyProductAbstracts = $this->spyProductAbstracts ?: new ArrayObject();
        $this->spyProductOptionGroups = $this->spyProductOptionGroups ?: new ArrayObject();
        $this->spyShipmentMethods = $this->spyShipmentMethods ?: new ArrayObject();
        $this->spySalesOrderThresholdTaxSets = $this->spySalesOrderThresholdTaxSets ?: new ArrayObject();
        $this->spyTaxSetTaxes = $this->spyTaxSetTaxes ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idTaxSet' => $this->idTaxSet,
            'name' => $this->name,
            'spyProductAbstracts' => $this->spyProductAbstracts,
            'spyProductOptionGroups' => $this->spyProductOptionGroups,
            'spyShipmentMethods' => $this->spyShipmentMethods,
            'spySalesOrderThresholdTaxSets' => $this->spySalesOrderThresholdTaxSets,
            'spyTaxSetTaxes' => $this->spyTaxSetTaxes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_tax_set' => $this->idTaxSet,
            'name' => $this->name,
            'spy_product_abstracts' => $this->spyProductAbstracts,
            'spy_product_option_groups' => $this->spyProductOptionGroups,
            'spy_shipment_methods' => $this->spyShipmentMethods,
            'spy_sales_order_threshold_tax_sets' => $this->spySalesOrderThresholdTaxSets,
            'spy_tax_set_taxes' => $this->spyTaxSetTaxes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_tax_set' => $this->idTaxSet instanceof AbstractTransfer ? $this->idTaxSet->toArray(true, false) : $this->idTaxSet,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'spy_product_abstracts' => $this->spyProductAbstracts instanceof AbstractTransfer ? $this->spyProductAbstracts->toArray(true, false) : $this->addValuesToCollection($this->spyProductAbstracts, true, false),
            'spy_product_option_groups' => $this->spyProductOptionGroups instanceof AbstractTransfer ? $this->spyProductOptionGroups->toArray(true, false) : $this->addValuesToCollection($this->spyProductOptionGroups, true, false),
            'spy_shipment_methods' => $this->spyShipmentMethods instanceof AbstractTransfer ? $this->spyShipmentMethods->toArray(true, false) : $this->addValuesToCollection($this->spyShipmentMethods, true, false),
            'spy_sales_order_threshold_tax_sets' => $this->spySalesOrderThresholdTaxSets instanceof AbstractTransfer ? $this->spySalesOrderThresholdTaxSets->toArray(true, false) : $this->addValuesToCollection($this->spySalesOrderThresholdTaxSets, true, false),
            'spy_tax_set_taxes' => $this->spyTaxSetTaxes instanceof AbstractTransfer ? $this->spyTaxSetTaxes->toArray(true, false) : $this->addValuesToCollection($this->spyTaxSetTaxes, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idTaxSet' => $this->idTaxSet instanceof AbstractTransfer ? $this->idTaxSet->toArray(true, true) : $this->idTaxSet,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'spyProductAbstracts' => $this->spyProductAbstracts instanceof AbstractTransfer ? $this->spyProductAbstracts->toArray(true, true) : $this->addValuesToCollection($this->spyProductAbstracts, true, true),
            'spyProductOptionGroups' => $this->spyProductOptionGroups instanceof AbstractTransfer ? $this->spyProductOptionGroups->toArray(true, true) : $this->addValuesToCollection($this->spyProductOptionGroups, true, true),
            'spyShipmentMethods' => $this->spyShipmentMethods instanceof AbstractTransfer ? $this->spyShipmentMethods->toArray(true, true) : $this->addValuesToCollection($this->spyShipmentMethods, true, true),
            'spySalesOrderThresholdTaxSets' => $this->spySalesOrderThresholdTaxSets instanceof AbstractTransfer ? $this->spySalesOrderThresholdTaxSets->toArray(true, true) : $this->addValuesToCollection($this->spySalesOrderThresholdTaxSets, true, true),
            'spyTaxSetTaxes' => $this->spyTaxSetTaxes instanceof AbstractTransfer ? $this->spyTaxSetTaxes->toArray(true, true) : $this->addValuesToCollection($this->spyTaxSetTaxes, true, true),
        ];
    }
}
