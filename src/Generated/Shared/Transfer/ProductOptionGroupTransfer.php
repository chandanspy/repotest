<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ProductOptionGroupTransfer extends AbstractTransfer
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
    public const CREATED_AT = 'createdAt';

    /**
     * @var string
     */
    public const UPDATED_AT = 'updatedAt';

    /**
     * @var string
     */
    public const GROUP_NAME_TRANSLATIONS = 'groupNameTranslations';

    /**
     * @var string
     */
    public const PRODUCTS_TO_BE_ASSIGNED = 'productsToBeAssigned';

    /**
     * @var string
     */
    public const PRODUCTS_TO_BE_DE_ASSIGNED = 'productsToBeDeAssigned';

    /**
     * @var string
     */
    public const PRODUCT_OPTION_VALUES_TO_BE_REMOVED = 'productOptionValuesToBeRemoved';

    /**
     * @var string
     */
    public const PRODUCT_OPTION_VALUES = 'productOptionValues';

    /**
     * @var string
     */
    public const PRODUCT_OPTION_VALUE_TRANSLATIONS = 'productOptionValueTranslations';

    /**
     * @var int|null
     */
    protected $idProductOptionGroup;

    /**
     * @var int|null
     */
    protected $fkTaxSet;

    /**
     * @var bool|null
     */
    protected $active;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $createdAt;

    /**
     * @var string|null
     */
    protected $updatedAt;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ProductOptionTranslationTransfer[]
     */
    protected $groupNameTranslations;

    /**
     * @var array
     */
    protected $productsToBeAssigned = [];

    /**
     * @var array
     */
    protected $productsToBeDeAssigned = [];

    /**
     * @var array
     */
    protected $productOptionValuesToBeRemoved = [];

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ProductOptionValueTransfer[]
     */
    protected $productOptionValues;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ProductOptionTranslationTransfer[]
     */
    protected $productOptionValueTranslations;

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
        'created_at' => 'createdAt',
        'createdAt' => 'createdAt',
        'CreatedAt' => 'createdAt',
        'updated_at' => 'updatedAt',
        'updatedAt' => 'updatedAt',
        'UpdatedAt' => 'updatedAt',
        'group_name_translations' => 'groupNameTranslations',
        'groupNameTranslations' => 'groupNameTranslations',
        'GroupNameTranslations' => 'groupNameTranslations',
        'products_to_be_assigned' => 'productsToBeAssigned',
        'productsToBeAssigned' => 'productsToBeAssigned',
        'ProductsToBeAssigned' => 'productsToBeAssigned',
        'products_to_be_de_assigned' => 'productsToBeDeAssigned',
        'productsToBeDeAssigned' => 'productsToBeDeAssigned',
        'ProductsToBeDeAssigned' => 'productsToBeDeAssigned',
        'product_option_values_to_be_removed' => 'productOptionValuesToBeRemoved',
        'productOptionValuesToBeRemoved' => 'productOptionValuesToBeRemoved',
        'ProductOptionValuesToBeRemoved' => 'productOptionValuesToBeRemoved',
        'product_option_values' => 'productOptionValues',
        'productOptionValues' => 'productOptionValues',
        'ProductOptionValues' => 'productOptionValues',
        'product_option_value_translations' => 'productOptionValueTranslations',
        'productOptionValueTranslations' => 'productOptionValueTranslations',
        'ProductOptionValueTranslations' => 'productOptionValueTranslations',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_OPTION_GROUP => [
            'type' => 'int',
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
            'type' => 'int',
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
            'type' => 'bool',
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
        self::CREATED_AT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'created_at',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::UPDATED_AT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'updated_at',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::GROUP_NAME_TRANSLATIONS => [
            'type' => 'Generated\Shared\Transfer\ProductOptionTranslationTransfer',
            'type_shim' => null,
            'name_underscore' => 'group_name_translations',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCTS_TO_BE_ASSIGNED => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'products_to_be_assigned',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCTS_TO_BE_DE_ASSIGNED => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'products_to_be_de_assigned',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_OPTION_VALUES_TO_BE_REMOVED => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'product_option_values_to_be_removed',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_OPTION_VALUES => [
            'type' => 'Generated\Shared\Transfer\ProductOptionValueTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_option_values',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_OPTION_VALUE_TRANSLATIONS => [
            'type' => 'Generated\Shared\Transfer\ProductOptionTranslationTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_option_value_translations',
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
     * @module ProductOption
     *
     * @param int|null $idProductOptionGroup
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
     * @module ProductOption
     *
     * @return int|null
     */
    public function getIdProductOptionGroup()
    {
        return $this->idProductOptionGroup;
    }

    /**
     * @module ProductOption
     *
     * @param int|null $idProductOptionGroup
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
     * @module ProductOption
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductOptionGroupOrFail()
    {
        if ($this->idProductOptionGroup === null) {
            $this->throwNullValueException(static::ID_PRODUCT_OPTION_GROUP);
        }

        return $this->idProductOptionGroup;
    }

    /**
     * @module ProductOption
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
     * @module ProductOption
     *
     * @param int|null $fkTaxSet
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
     * @module ProductOption
     *
     * @return int|null
     */
    public function getFkTaxSet()
    {
        return $this->fkTaxSet;
    }

    /**
     * @module ProductOption
     *
     * @param int|null $fkTaxSet
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
     * @module ProductOption
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkTaxSetOrFail()
    {
        if ($this->fkTaxSet === null) {
            $this->throwNullValueException(static::FK_TAX_SET);
        }

        return $this->fkTaxSet;
    }

    /**
     * @module ProductOption
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
     * @module ProductOption
     *
     * @param bool|null $active
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
     * @module ProductOption
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @module ProductOption
     *
     * @param bool|null $active
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
     * @module ProductOption
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getActiveOrFail()
    {
        if ($this->active === null) {
            $this->throwNullValueException(static::ACTIVE);
        }

        return $this->active;
    }

    /**
     * @module ProductOption
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
     * @module ProductOption
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
     * @module ProductOption
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module ProductOption
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
     * @module ProductOption
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
     * @module ProductOption
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
     * @module ProductOption
     *
     * @param string|null $createdAt
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        $this->modifiedProperties[self::CREATED_AT] = true;

        return $this;
    }

    /**
     * @module ProductOption
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @module ProductOption
     *
     * @param string|null $createdAt
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCreatedAtOrFail($createdAt)
    {
        if ($createdAt === null) {
            $this->throwNullValueException(static::CREATED_AT);
        }

        return $this->setCreatedAt($createdAt);
    }

    /**
     * @module ProductOption
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCreatedAtOrFail()
    {
        if ($this->createdAt === null) {
            $this->throwNullValueException(static::CREATED_AT);
        }

        return $this->createdAt;
    }

    /**
     * @module ProductOption
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCreatedAt()
    {
        $this->assertPropertyIsSet(self::CREATED_AT);

        return $this;
    }

    /**
     * @module ProductOption
     *
     * @param string|null $updatedAt
     *
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
        $this->modifiedProperties[self::UPDATED_AT] = true;

        return $this;
    }

    /**
     * @module ProductOption
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @module ProductOption
     *
     * @param string|null $updatedAt
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUpdatedAtOrFail($updatedAt)
    {
        if ($updatedAt === null) {
            $this->throwNullValueException(static::UPDATED_AT);
        }

        return $this->setUpdatedAt($updatedAt);
    }

    /**
     * @module ProductOption
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUpdatedAtOrFail()
    {
        if ($this->updatedAt === null) {
            $this->throwNullValueException(static::UPDATED_AT);
        }

        return $this->updatedAt;
    }

    /**
     * @module ProductOption
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUpdatedAt()
    {
        $this->assertPropertyIsSet(self::UPDATED_AT);

        return $this;
    }

    /**
     * @module ProductOption
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ProductOptionTranslationTransfer[] $groupNameTranslations
     *
     * @return $this
     */
    public function setGroupNameTranslations(ArrayObject $groupNameTranslations)
    {
        $this->groupNameTranslations = $groupNameTranslations;
        $this->modifiedProperties[self::GROUP_NAME_TRANSLATIONS] = true;

        return $this;
    }

    /**
     * @module ProductOption
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ProductOptionTranslationTransfer[]
     */
    public function getGroupNameTranslations()
    {
        return $this->groupNameTranslations;
    }

    /**
     * @module ProductOption
     *
     * @param \Generated\Shared\Transfer\ProductOptionTranslationTransfer $groupNameTranslation
     *
     * @return $this
     */
    public function addGroupNameTranslation(ProductOptionTranslationTransfer $groupNameTranslation)
    {
        $this->groupNameTranslations[] = $groupNameTranslation;
        $this->modifiedProperties[self::GROUP_NAME_TRANSLATIONS] = true;

        return $this;
    }

    /**
     * @module ProductOption
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireGroupNameTranslations()
    {
        $this->assertCollectionPropertyIsSet(self::GROUP_NAME_TRANSLATIONS);

        return $this;
    }

    /**
     * @module ProductOption
     *
     * @param array|null $productsToBeAssigned
     *
     * @return $this
     */
    public function setProductsToBeAssigned(array $productsToBeAssigned = null)
    {
        if ($productsToBeAssigned === null) {
            $productsToBeAssigned = [];
        }

        $this->productsToBeAssigned = $productsToBeAssigned;
        $this->modifiedProperties[self::PRODUCTS_TO_BE_ASSIGNED] = true;

        return $this;
    }

    /**
     * @module ProductOption
     *
     * @return array
     */
    public function getProductsToBeAssigned()
    {
        return $this->productsToBeAssigned;
    }

    /**
     * @module ProductOption
     *
     * @param mixed $productsToBeAssigned
     *
     * @return $this
     */
    public function addProductsToBeAssigned($productsToBeAssigned)
    {
        $this->productsToBeAssigned[] = $productsToBeAssigned;
        $this->modifiedProperties[self::PRODUCTS_TO_BE_ASSIGNED] = true;

        return $this;
    }

    /**
     * @module ProductOption
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductsToBeAssigned()
    {
        $this->assertPropertyIsSet(self::PRODUCTS_TO_BE_ASSIGNED);

        return $this;
    }

    /**
     * @module ProductOption
     *
     * @param array|null $productsToBeDeAssigned
     *
     * @return $this
     */
    public function setProductsToBeDeAssigned(array $productsToBeDeAssigned = null)
    {
        if ($productsToBeDeAssigned === null) {
            $productsToBeDeAssigned = [];
        }

        $this->productsToBeDeAssigned = $productsToBeDeAssigned;
        $this->modifiedProperties[self::PRODUCTS_TO_BE_DE_ASSIGNED] = true;

        return $this;
    }

    /**
     * @module ProductOption
     *
     * @return array
     */
    public function getProductsToBeDeAssigned()
    {
        return $this->productsToBeDeAssigned;
    }

    /**
     * @module ProductOption
     *
     * @param mixed $productsToBeDeAssigned
     *
     * @return $this
     */
    public function addProductsToBeDeAssigned($productsToBeDeAssigned)
    {
        $this->productsToBeDeAssigned[] = $productsToBeDeAssigned;
        $this->modifiedProperties[self::PRODUCTS_TO_BE_DE_ASSIGNED] = true;

        return $this;
    }

    /**
     * @module ProductOption
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductsToBeDeAssigned()
    {
        $this->assertPropertyIsSet(self::PRODUCTS_TO_BE_DE_ASSIGNED);

        return $this;
    }

    /**
     * @module ProductOption|ShoppingListProductOptionConnector
     *
     * @param array|null $productOptionValuesToBeRemoved
     *
     * @return $this
     */
    public function setProductOptionValuesToBeRemoved(array $productOptionValuesToBeRemoved = null)
    {
        if ($productOptionValuesToBeRemoved === null) {
            $productOptionValuesToBeRemoved = [];
        }

        $this->productOptionValuesToBeRemoved = $productOptionValuesToBeRemoved;
        $this->modifiedProperties[self::PRODUCT_OPTION_VALUES_TO_BE_REMOVED] = true;

        return $this;
    }

    /**
     * @module ProductOption|ShoppingListProductOptionConnector
     *
     * @return array
     */
    public function getProductOptionValuesToBeRemoved()
    {
        return $this->productOptionValuesToBeRemoved;
    }

    /**
     * @module ProductOption|ShoppingListProductOptionConnector
     *
     * @param mixed $productOptionValuesToBeRemoved
     *
     * @return $this
     */
    public function addProductOptionValuesToBeRemoved($productOptionValuesToBeRemoved)
    {
        $this->productOptionValuesToBeRemoved[] = $productOptionValuesToBeRemoved;
        $this->modifiedProperties[self::PRODUCT_OPTION_VALUES_TO_BE_REMOVED] = true;

        return $this;
    }

    /**
     * @module ProductOption|ShoppingListProductOptionConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductOptionValuesToBeRemoved()
    {
        $this->assertPropertyIsSet(self::PRODUCT_OPTION_VALUES_TO_BE_REMOVED);

        return $this;
    }

    /**
     * @module ProductOption
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ProductOptionValueTransfer[] $productOptionValues
     *
     * @return $this
     */
    public function setProductOptionValues(ArrayObject $productOptionValues)
    {
        $this->productOptionValues = $productOptionValues;
        $this->modifiedProperties[self::PRODUCT_OPTION_VALUES] = true;

        return $this;
    }

    /**
     * @module ProductOption
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ProductOptionValueTransfer[]
     */
    public function getProductOptionValues()
    {
        return $this->productOptionValues;
    }

    /**
     * @module ProductOption
     *
     * @param \Generated\Shared\Transfer\ProductOptionValueTransfer $productOptionValue
     *
     * @return $this
     */
    public function addProductOptionValue(ProductOptionValueTransfer $productOptionValue)
    {
        $this->productOptionValues[] = $productOptionValue;
        $this->modifiedProperties[self::PRODUCT_OPTION_VALUES] = true;

        return $this;
    }

    /**
     * @module ProductOption
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductOptionValues()
    {
        $this->assertCollectionPropertyIsSet(self::PRODUCT_OPTION_VALUES);

        return $this;
    }

    /**
     * @module ProductOption
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ProductOptionTranslationTransfer[] $productOptionValueTranslations
     *
     * @return $this
     */
    public function setProductOptionValueTranslations(ArrayObject $productOptionValueTranslations)
    {
        $this->productOptionValueTranslations = $productOptionValueTranslations;
        $this->modifiedProperties[self::PRODUCT_OPTION_VALUE_TRANSLATIONS] = true;

        return $this;
    }

    /**
     * @module ProductOption
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ProductOptionTranslationTransfer[]
     */
    public function getProductOptionValueTranslations()
    {
        return $this->productOptionValueTranslations;
    }

    /**
     * @module ProductOption
     *
     * @param \Generated\Shared\Transfer\ProductOptionTranslationTransfer $productOptionValueTranslation
     *
     * @return $this
     */
    public function addProductOptionValueTranslation(ProductOptionTranslationTransfer $productOptionValueTranslation)
    {
        $this->productOptionValueTranslations[] = $productOptionValueTranslation;
        $this->modifiedProperties[self::PRODUCT_OPTION_VALUE_TRANSLATIONS] = true;

        return $this;
    }

    /**
     * @module ProductOption
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductOptionValueTranslations()
    {
        $this->assertCollectionPropertyIsSet(self::PRODUCT_OPTION_VALUE_TRANSLATIONS);

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
                case 'createdAt':
                case 'updatedAt':
                case 'productsToBeAssigned':
                case 'productsToBeDeAssigned':
                case 'productOptionValuesToBeRemoved':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'groupNameTranslations':
                case 'productOptionValues':
                case 'productOptionValueTranslations':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
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
                case 'idProductOptionGroup':
                case 'fkTaxSet':
                case 'active':
                case 'name':
                case 'createdAt':
                case 'updatedAt':
                case 'productsToBeAssigned':
                case 'productsToBeDeAssigned':
                case 'productOptionValuesToBeRemoved':
                    $values[$arrayKey] = $value;

                    break;
                case 'groupNameTranslations':
                case 'productOptionValues':
                case 'productOptionValueTranslations':
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
                case 'createdAt':
                case 'updatedAt':
                case 'productsToBeAssigned':
                case 'productsToBeDeAssigned':
                case 'productOptionValuesToBeRemoved':
                    $values[$arrayKey] = $value;

                    break;
                case 'groupNameTranslations':
                case 'productOptionValues':
                case 'productOptionValueTranslations':
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
        $this->groupNameTranslations = $this->groupNameTranslations ?: new ArrayObject();
        $this->productOptionValues = $this->productOptionValues ?: new ArrayObject();
        $this->productOptionValueTranslations = $this->productOptionValueTranslations ?: new ArrayObject();
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
            'createdAt' => $this->createdAt,
            'updatedAt' => $this->updatedAt,
            'productsToBeAssigned' => $this->productsToBeAssigned,
            'productsToBeDeAssigned' => $this->productsToBeDeAssigned,
            'productOptionValuesToBeRemoved' => $this->productOptionValuesToBeRemoved,
            'groupNameTranslations' => $this->groupNameTranslations,
            'productOptionValues' => $this->productOptionValues,
            'productOptionValueTranslations' => $this->productOptionValueTranslations,
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
            'created_at' => $this->createdAt,
            'updated_at' => $this->updatedAt,
            'products_to_be_assigned' => $this->productsToBeAssigned,
            'products_to_be_de_assigned' => $this->productsToBeDeAssigned,
            'product_option_values_to_be_removed' => $this->productOptionValuesToBeRemoved,
            'group_name_translations' => $this->groupNameTranslations,
            'product_option_values' => $this->productOptionValues,
            'product_option_value_translations' => $this->productOptionValueTranslations,
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
            'created_at' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, false) : $this->createdAt,
            'updated_at' => $this->updatedAt instanceof AbstractTransfer ? $this->updatedAt->toArray(true, false) : $this->updatedAt,
            'products_to_be_assigned' => $this->productsToBeAssigned instanceof AbstractTransfer ? $this->productsToBeAssigned->toArray(true, false) : $this->productsToBeAssigned,
            'products_to_be_de_assigned' => $this->productsToBeDeAssigned instanceof AbstractTransfer ? $this->productsToBeDeAssigned->toArray(true, false) : $this->productsToBeDeAssigned,
            'product_option_values_to_be_removed' => $this->productOptionValuesToBeRemoved instanceof AbstractTransfer ? $this->productOptionValuesToBeRemoved->toArray(true, false) : $this->productOptionValuesToBeRemoved,
            'group_name_translations' => $this->groupNameTranslations instanceof AbstractTransfer ? $this->groupNameTranslations->toArray(true, false) : $this->addValuesToCollection($this->groupNameTranslations, true, false),
            'product_option_values' => $this->productOptionValues instanceof AbstractTransfer ? $this->productOptionValues->toArray(true, false) : $this->addValuesToCollection($this->productOptionValues, true, false),
            'product_option_value_translations' => $this->productOptionValueTranslations instanceof AbstractTransfer ? $this->productOptionValueTranslations->toArray(true, false) : $this->addValuesToCollection($this->productOptionValueTranslations, true, false),
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
            'createdAt' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, true) : $this->createdAt,
            'updatedAt' => $this->updatedAt instanceof AbstractTransfer ? $this->updatedAt->toArray(true, true) : $this->updatedAt,
            'productsToBeAssigned' => $this->productsToBeAssigned instanceof AbstractTransfer ? $this->productsToBeAssigned->toArray(true, true) : $this->productsToBeAssigned,
            'productsToBeDeAssigned' => $this->productsToBeDeAssigned instanceof AbstractTransfer ? $this->productsToBeDeAssigned->toArray(true, true) : $this->productsToBeDeAssigned,
            'productOptionValuesToBeRemoved' => $this->productOptionValuesToBeRemoved instanceof AbstractTransfer ? $this->productOptionValuesToBeRemoved->toArray(true, true) : $this->productOptionValuesToBeRemoved,
            'groupNameTranslations' => $this->groupNameTranslations instanceof AbstractTransfer ? $this->groupNameTranslations->toArray(true, true) : $this->addValuesToCollection($this->groupNameTranslations, true, true),
            'productOptionValues' => $this->productOptionValues instanceof AbstractTransfer ? $this->productOptionValues->toArray(true, true) : $this->addValuesToCollection($this->productOptionValues, true, true),
            'productOptionValueTranslations' => $this->productOptionValueTranslations instanceof AbstractTransfer ? $this->productOptionValueTranslations->toArray(true, true) : $this->addValuesToCollection($this->productOptionValueTranslations, true, true),
        ];
    }
}
