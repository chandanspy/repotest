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
class SpyProductOptionGroupEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_OPTION_GROUP = 'idProductOptionGroup';

    /**
     * @var string
     */
    public const FK_TAX_SET = 'fkTaxSet';

    /**
     * @var string
     */
    public const ACTIVE = 'active';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const SPY_TAX_SET = 'spyTaxSet';

    /**
     * @var string
     */
    public const SPY_PRODUCT_ABSTRACT_PRODUCT_OPTION_GROUPS = 'spyProductAbstractProductOptionGroups';

    /**
     * @var string
     */
    public const SPY_PRODUCT_OPTION_VALUES = 'spyProductOptionValues';

    /**
     * @var integer|null
     */
    protected $idProductOptionGroup;

    /**
     * @var integer|null
     */
    protected $fkTaxSet;

    /**
     * @var boolean|null
     */
    protected $active;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var \Generated\Shared\Transfer\SpyTaxSetEntityTransfer|null
     */
    protected $spyTaxSet;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductAbstractProductOptionGroupEntityTransfer[]
     */
    protected $spyProductAbstractProductOptionGroups;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductOptionValueEntityTransfer[]
     */
    protected $spyProductOptionValues;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_option_group' => 'idProductOptionGroup',
        'idProductOptionGroup' => 'idProductOptionGroup',
        'IdProductOptionGroup' => 'idProductOptionGroup',
        'fk_tax_set' => 'fkTaxSet',
        'fkTaxSet' => 'fkTaxSet',
        'FkTaxSet' => 'fkTaxSet',
        'active' => 'active',
        'Active' => 'active',
        'name' => 'name',
        'Name' => 'name',
        'spy_tax_set' => 'spyTaxSet',
        'spyTaxSet' => 'spyTaxSet',
        'SpyTaxSet' => 'spyTaxSet',
        'spy_product_abstract_product_option_groups' => 'spyProductAbstractProductOptionGroups',
        'spyProductAbstractProductOptionGroups' => 'spyProductAbstractProductOptionGroups',
        'SpyProductAbstractProductOptionGroups' => 'spyProductAbstractProductOptionGroups',
        'spy_product_option_values' => 'spyProductOptionValues',
        'spyProductOptionValues' => 'spyProductOptionValues',
        'SpyProductOptionValues' => 'spyProductOptionValues',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_OPTION_GROUP => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_product_option_group',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_TAX_SET => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_tax_set',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ACTIVE => [
            'type' => 'boolean',
            'type_shim' => null,
            'name_underscore' => 'active',
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
        self::SPY_TAX_SET => [
            'type' => 'Generated\Shared\Transfer\SpyTaxSetEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_tax_set',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_ABSTRACT_PRODUCT_OPTION_GROUPS => [
            'type' => 'Generated\Shared\Transfer\SpyProductAbstractProductOptionGroupEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_abstract_product_option_groups',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_OPTION_VALUES => [
            'type' => 'Generated\Shared\Transfer\SpyProductOptionValueEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_option_values',
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
    public static $entityNamespace = 'Orm\Zed\ProductOption\Persistence\SpyProductOptionGroup';


    /**
     * @module 
     *
     * @param integer|null $idProductOptionGroup
     *
     * @return $this
     */
    public function setIdProductOptionGroup($idProductOptionGroup)
    {
        $this->idProductOptionGroup = $idProductOptionGroup;
        $this->modifiedProperties[self::ID_PRODUCT_OPTION_GROUP] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdProductOptionGroup()
    {
        return $this->idProductOptionGroup;
    }

    /**
     * @module 
     *
     * @param integer|null $idProductOptionGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductOptionGroupOrFail($idProductOptionGroup)
    {
        if ($idProductOptionGroup === null) {
            $this->throwNullValueException(static::ID_PRODUCT_OPTION_GROUP);
        }

        return $this->setIdProductOptionGroup($idProductOptionGroup);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdProductOptionGroupOrFail()
    {
        if ($this->idProductOptionGroup === null) {
            $this->throwNullValueException(static::ID_PRODUCT_OPTION_GROUP);
        }

        return $this->idProductOptionGroup;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductOptionGroup()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_OPTION_GROUP);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkTaxSet
     *
     * @return $this
     */
    public function setFkTaxSet($fkTaxSet)
    {
        $this->fkTaxSet = $fkTaxSet;
        $this->modifiedProperties[self::FK_TAX_SET] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkTaxSet()
    {
        return $this->fkTaxSet;
    }

    /**
     * @module 
     *
     * @param integer|null $fkTaxSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkTaxSetOrFail($fkTaxSet)
    {
        if ($fkTaxSet === null) {
            $this->throwNullValueException(static::FK_TAX_SET);
        }

        return $this->setFkTaxSet($fkTaxSet);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkTaxSetOrFail()
    {
        if ($this->fkTaxSet === null) {
            $this->throwNullValueException(static::FK_TAX_SET);
        }

        return $this->fkTaxSet;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkTaxSet()
    {
        $this->assertPropertyIsSet(self::FK_TAX_SET);

        return $this;
    }

    /**
     * @module 
     *
     * @param boolean|null $active
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->active = $active;
        $this->modifiedProperties[self::ACTIVE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return boolean|null
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @module 
     *
     * @param boolean|null $active
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setActiveOrFail($active)
    {
        if ($active === null) {
            $this->throwNullValueException(static::ACTIVE);
        }

        return $this->setActive($active);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getActiveOrFail()
    {
        if ($this->active === null) {
            $this->throwNullValueException(static::ACTIVE);
        }

        return $this->active;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireActive()
    {
        $this->assertPropertyIsSet(self::ACTIVE);

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
     * @param \Generated\Shared\Transfer\SpyTaxSetEntityTransfer|null $spyTaxSet
     *
     * @return $this
     */
    public function setSpyTaxSet(SpyTaxSetEntityTransfer $spyTaxSet = null)
    {
        $this->spyTaxSet = $spyTaxSet;
        $this->modifiedProperties[self::SPY_TAX_SET] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyTaxSetEntityTransfer|null
     */
    public function getSpyTaxSet()
    {
        return $this->spyTaxSet;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyTaxSetEntityTransfer $spyTaxSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyTaxSetOrFail(SpyTaxSetEntityTransfer $spyTaxSet)
    {
        return $this->setSpyTaxSet($spyTaxSet);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyTaxSetEntityTransfer
     */
    public function getSpyTaxSetOrFail()
    {
        if ($this->spyTaxSet === null) {
            $this->throwNullValueException(static::SPY_TAX_SET);
        }

        return $this->spyTaxSet;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyTaxSet()
    {
        $this->assertPropertyIsSet(self::SPY_TAX_SET);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductAbstractProductOptionGroupEntityTransfer[] $spyProductAbstractProductOptionGroups
     *
     * @return $this
     */
    public function setSpyProductAbstractProductOptionGroups(ArrayObject $spyProductAbstractProductOptionGroups)
    {
        $this->spyProductAbstractProductOptionGroups = $spyProductAbstractProductOptionGroups;
        $this->modifiedProperties[self::SPY_PRODUCT_ABSTRACT_PRODUCT_OPTION_GROUPS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductAbstractProductOptionGroupEntityTransfer[]
     */
    public function getSpyProductAbstractProductOptionGroups()
    {
        return $this->spyProductAbstractProductOptionGroups;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductAbstractProductOptionGroupEntityTransfer $spyProductAbstractProductOptionGroups
     *
     * @return $this
     */
    public function addSpyProductAbstractProductOptionGroups(SpyProductAbstractProductOptionGroupEntityTransfer $spyProductAbstractProductOptionGroups)
    {
        $this->spyProductAbstractProductOptionGroups[] = $spyProductAbstractProductOptionGroups;
        $this->modifiedProperties[self::SPY_PRODUCT_ABSTRACT_PRODUCT_OPTION_GROUPS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductAbstractProductOptionGroups()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_ABSTRACT_PRODUCT_OPTION_GROUPS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductOptionValueEntityTransfer[] $spyProductOptionValues
     *
     * @return $this
     */
    public function setSpyProductOptionValues(ArrayObject $spyProductOptionValues)
    {
        $this->spyProductOptionValues = $spyProductOptionValues;
        $this->modifiedProperties[self::SPY_PRODUCT_OPTION_VALUES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductOptionValueEntityTransfer[]
     */
    public function getSpyProductOptionValues()
    {
        return $this->spyProductOptionValues;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductOptionValueEntityTransfer $spyProductOptionValues
     *
     * @return $this
     */
    public function addSpyProductOptionValues(SpyProductOptionValueEntityTransfer $spyProductOptionValues)
    {
        $this->spyProductOptionValues[] = $spyProductOptionValues;
        $this->modifiedProperties[self::SPY_PRODUCT_OPTION_VALUES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductOptionValues()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_OPTION_VALUES);

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
                case 'idProductOptionGroup':
                case 'fkTaxSet':
                case 'active':
                case 'name':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyTaxSet':
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
                case 'spyProductAbstractProductOptionGroups':
                case 'spyProductOptionValues':
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
                case 'idProductOptionGroup':
                case 'fkTaxSet':
                case 'active':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyTaxSet':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyProductAbstractProductOptionGroups':
                case 'spyProductOptionValues':
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
                case 'idProductOptionGroup':
                case 'fkTaxSet':
                case 'active':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyTaxSet':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyProductAbstractProductOptionGroups':
                case 'spyProductOptionValues':
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
        $this->spyProductAbstractProductOptionGroups = $this->spyProductAbstractProductOptionGroups ?: new ArrayObject();
        $this->spyProductOptionValues = $this->spyProductOptionValues ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idProductOptionGroup' => $this->idProductOptionGroup,
            'fkTaxSet' => $this->fkTaxSet,
            'active' => $this->active,
            'name' => $this->name,
            'spyTaxSet' => $this->spyTaxSet,
            'spyProductAbstractProductOptionGroups' => $this->spyProductAbstractProductOptionGroups,
            'spyProductOptionValues' => $this->spyProductOptionValues,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_option_group' => $this->idProductOptionGroup,
            'fk_tax_set' => $this->fkTaxSet,
            'active' => $this->active,
            'name' => $this->name,
            'spy_tax_set' => $this->spyTaxSet,
            'spy_product_abstract_product_option_groups' => $this->spyProductAbstractProductOptionGroups,
            'spy_product_option_values' => $this->spyProductOptionValues,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_option_group' => $this->idProductOptionGroup instanceof AbstractTransfer ? $this->idProductOptionGroup->toArray(true, false) : $this->idProductOptionGroup,
            'fk_tax_set' => $this->fkTaxSet instanceof AbstractTransfer ? $this->fkTaxSet->toArray(true, false) : $this->fkTaxSet,
            'active' => $this->active instanceof AbstractTransfer ? $this->active->toArray(true, false) : $this->active,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'spy_tax_set' => $this->spyTaxSet instanceof AbstractTransfer ? $this->spyTaxSet->toArray(true, false) : $this->spyTaxSet,
            'spy_product_abstract_product_option_groups' => $this->spyProductAbstractProductOptionGroups instanceof AbstractTransfer ? $this->spyProductAbstractProductOptionGroups->toArray(true, false) : $this->addValuesToCollection($this->spyProductAbstractProductOptionGroups, true, false),
            'spy_product_option_values' => $this->spyProductOptionValues instanceof AbstractTransfer ? $this->spyProductOptionValues->toArray(true, false) : $this->addValuesToCollection($this->spyProductOptionValues, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductOptionGroup' => $this->idProductOptionGroup instanceof AbstractTransfer ? $this->idProductOptionGroup->toArray(true, true) : $this->idProductOptionGroup,
            'fkTaxSet' => $this->fkTaxSet instanceof AbstractTransfer ? $this->fkTaxSet->toArray(true, true) : $this->fkTaxSet,
            'active' => $this->active instanceof AbstractTransfer ? $this->active->toArray(true, true) : $this->active,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'spyTaxSet' => $this->spyTaxSet instanceof AbstractTransfer ? $this->spyTaxSet->toArray(true, true) : $this->spyTaxSet,
            'spyProductAbstractProductOptionGroups' => $this->spyProductAbstractProductOptionGroups instanceof AbstractTransfer ? $this->spyProductAbstractProductOptionGroups->toArray(true, true) : $this->addValuesToCollection($this->spyProductAbstractProductOptionGroups, true, true),
            'spyProductOptionValues' => $this->spyProductOptionValues instanceof AbstractTransfer ? $this->spyProductOptionValues->toArray(true, true) : $this->addValuesToCollection($this->spyProductOptionValues, true, true),
        ];
    }
}
