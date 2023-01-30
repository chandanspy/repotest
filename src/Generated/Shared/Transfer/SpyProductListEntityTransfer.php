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
class SpyProductListEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_LIST = 'idProductList';

    /**
     * @var string
     */
    public const FK_MERCHANT_RELATIONSHIP = 'fkMerchantRelationship';

    /**
     * @var string
     */
    public const KEY = 'key';

    /**
     * @var string
     */
    public const TITLE = 'title';

    /**
     * @var string
     */
    public const TYPE = 'type';

    /**
     * @var string
     */
    public const SPY_MERCHANT_RELATIONSHIP = 'spyMerchantRelationship';

    /**
     * @var string
     */
    public const SPY_PRODUCT_LIST_PRODUCT_CONCRETES = 'spyProductListProductConcretes';

    /**
     * @var string
     */
    public const SPY_PRODUCT_LIST_CATEGORIES = 'spyProductListCategories';

    /**
     * @var string
     */
    public const SPY_CONFIGURABLE_BUNDLE_TEMPLATE_SLOTS = 'spyConfigurableBundleTemplateSlots';

    /**
     * @var integer|null
     */
    protected $idProductList;

    /**
     * @var integer|null
     */
    protected $fkMerchantRelationship;

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var string|null
     */
    protected $title;

    /**
     * @var string|null
     */
    protected $type;

    /**
     * @var \Generated\Shared\Transfer\SpyMerchantRelationshipEntityTransfer|null
     */
    protected $spyMerchantRelationship;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductListProductConcreteEntityTransfer[]
     */
    protected $spyProductListProductConcretes;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductListCategoryEntityTransfer[]
     */
    protected $spyProductListCategories;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyConfigurableBundleTemplateSlotEntityTransfer[]
     */
    protected $spyConfigurableBundleTemplateSlots;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_list' => 'idProductList',
        'idProductList' => 'idProductList',
        'IdProductList' => 'idProductList',
        'fk_merchant_relationship' => 'fkMerchantRelationship',
        'fkMerchantRelationship' => 'fkMerchantRelationship',
        'FkMerchantRelationship' => 'fkMerchantRelationship',
        'key' => 'key',
        'Key' => 'key',
        'title' => 'title',
        'Title' => 'title',
        'type' => 'type',
        'Type' => 'type',
        'spy_merchant_relationship' => 'spyMerchantRelationship',
        'spyMerchantRelationship' => 'spyMerchantRelationship',
        'SpyMerchantRelationship' => 'spyMerchantRelationship',
        'spy_product_list_product_concretes' => 'spyProductListProductConcretes',
        'spyProductListProductConcretes' => 'spyProductListProductConcretes',
        'SpyProductListProductConcretes' => 'spyProductListProductConcretes',
        'spy_product_list_categories' => 'spyProductListCategories',
        'spyProductListCategories' => 'spyProductListCategories',
        'SpyProductListCategories' => 'spyProductListCategories',
        'spy_configurable_bundle_template_slots' => 'spyConfigurableBundleTemplateSlots',
        'spyConfigurableBundleTemplateSlots' => 'spyConfigurableBundleTemplateSlots',
        'SpyConfigurableBundleTemplateSlots' => 'spyConfigurableBundleTemplateSlots',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_LIST => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_product_list',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_MERCHANT_RELATIONSHIP => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_merchant_relationship',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TITLE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'title',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_MERCHANT_RELATIONSHIP => [
            'type' => 'Generated\Shared\Transfer\SpyMerchantRelationshipEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_merchant_relationship',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_LIST_PRODUCT_CONCRETES => [
            'type' => 'Generated\Shared\Transfer\SpyProductListProductConcreteEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_list_product_concretes',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_LIST_CATEGORIES => [
            'type' => 'Generated\Shared\Transfer\SpyProductListCategoryEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_list_categories',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_CONFIGURABLE_BUNDLE_TEMPLATE_SLOTS => [
            'type' => 'Generated\Shared\Transfer\SpyConfigurableBundleTemplateSlotEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_configurable_bundle_template_slots',
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
    public static $entityNamespace = 'Orm\Zed\ProductList\Persistence\SpyProductList';


    /**
     * @module 
     *
     * @param integer|null $idProductList
     *
     * @return $this
     */
    public function setIdProductList($idProductList)
    {
        $this->idProductList = $idProductList;
        $this->modifiedProperties[self::ID_PRODUCT_LIST] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdProductList()
    {
        return $this->idProductList;
    }

    /**
     * @module 
     *
     * @param integer|null $idProductList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductListOrFail($idProductList)
    {
        if ($idProductList === null) {
            $this->throwNullValueException(static::ID_PRODUCT_LIST);
        }

        return $this->setIdProductList($idProductList);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdProductListOrFail()
    {
        if ($this->idProductList === null) {
            $this->throwNullValueException(static::ID_PRODUCT_LIST);
        }

        return $this->idProductList;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductList()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_LIST);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkMerchantRelationship
     *
     * @return $this
     */
    public function setFkMerchantRelationship($fkMerchantRelationship)
    {
        $this->fkMerchantRelationship = $fkMerchantRelationship;
        $this->modifiedProperties[self::FK_MERCHANT_RELATIONSHIP] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkMerchantRelationship()
    {
        return $this->fkMerchantRelationship;
    }

    /**
     * @module 
     *
     * @param integer|null $fkMerchantRelationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkMerchantRelationshipOrFail($fkMerchantRelationship)
    {
        if ($fkMerchantRelationship === null) {
            $this->throwNullValueException(static::FK_MERCHANT_RELATIONSHIP);
        }

        return $this->setFkMerchantRelationship($fkMerchantRelationship);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkMerchantRelationshipOrFail()
    {
        if ($this->fkMerchantRelationship === null) {
            $this->throwNullValueException(static::FK_MERCHANT_RELATIONSHIP);
        }

        return $this->fkMerchantRelationship;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkMerchantRelationship()
    {
        $this->assertPropertyIsSet(self::FK_MERCHANT_RELATIONSHIP);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $key
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->key = $key;
        $this->modifiedProperties[self::KEY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @module 
     *
     * @param string|null $key
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setKeyOrFail($key)
    {
        if ($key === null) {
            $this->throwNullValueException(static::KEY);
        }

        return $this->setKey($key);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getKeyOrFail()
    {
        if ($this->key === null) {
            $this->throwNullValueException(static::KEY);
        }

        return $this->key;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireKey()
    {
        $this->assertPropertyIsSet(self::KEY);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        $this->modifiedProperties[self::TITLE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @module 
     *
     * @param string|null $title
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTitleOrFail($title)
    {
        if ($title === null) {
            $this->throwNullValueException(static::TITLE);
        }

        return $this->setTitle($title);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTitleOrFail()
    {
        if ($this->title === null) {
            $this->throwNullValueException(static::TITLE);
        }

        return $this->title;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTitle()
    {
        $this->assertPropertyIsSet(self::TITLE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        $this->modifiedProperties[self::TYPE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @module 
     *
     * @param string|null $type
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTypeOrFail($type)
    {
        if ($type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->setType($type);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTypeOrFail()
    {
        if ($this->type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->type;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireType()
    {
        $this->assertPropertyIsSet(self::TYPE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyMerchantRelationshipEntityTransfer|null $spyMerchantRelationship
     *
     * @return $this
     */
    public function setSpyMerchantRelationship(SpyMerchantRelationshipEntityTransfer $spyMerchantRelationship = null)
    {
        $this->spyMerchantRelationship = $spyMerchantRelationship;
        $this->modifiedProperties[self::SPY_MERCHANT_RELATIONSHIP] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyMerchantRelationshipEntityTransfer|null
     */
    public function getSpyMerchantRelationship()
    {
        return $this->spyMerchantRelationship;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyMerchantRelationshipEntityTransfer $spyMerchantRelationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyMerchantRelationshipOrFail(SpyMerchantRelationshipEntityTransfer $spyMerchantRelationship)
    {
        return $this->setSpyMerchantRelationship($spyMerchantRelationship);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyMerchantRelationshipEntityTransfer
     */
    public function getSpyMerchantRelationshipOrFail()
    {
        if ($this->spyMerchantRelationship === null) {
            $this->throwNullValueException(static::SPY_MERCHANT_RELATIONSHIP);
        }

        return $this->spyMerchantRelationship;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyMerchantRelationship()
    {
        $this->assertPropertyIsSet(self::SPY_MERCHANT_RELATIONSHIP);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductListProductConcreteEntityTransfer[] $spyProductListProductConcretes
     *
     * @return $this
     */
    public function setSpyProductListProductConcretes(ArrayObject $spyProductListProductConcretes)
    {
        $this->spyProductListProductConcretes = $spyProductListProductConcretes;
        $this->modifiedProperties[self::SPY_PRODUCT_LIST_PRODUCT_CONCRETES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductListProductConcreteEntityTransfer[]
     */
    public function getSpyProductListProductConcretes()
    {
        return $this->spyProductListProductConcretes;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductListProductConcreteEntityTransfer $spyProductListProductConcretes
     *
     * @return $this
     */
    public function addSpyProductListProductConcretes(SpyProductListProductConcreteEntityTransfer $spyProductListProductConcretes)
    {
        $this->spyProductListProductConcretes[] = $spyProductListProductConcretes;
        $this->modifiedProperties[self::SPY_PRODUCT_LIST_PRODUCT_CONCRETES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductListProductConcretes()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_LIST_PRODUCT_CONCRETES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductListCategoryEntityTransfer[] $spyProductListCategories
     *
     * @return $this
     */
    public function setSpyProductListCategories(ArrayObject $spyProductListCategories)
    {
        $this->spyProductListCategories = $spyProductListCategories;
        $this->modifiedProperties[self::SPY_PRODUCT_LIST_CATEGORIES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductListCategoryEntityTransfer[]
     */
    public function getSpyProductListCategories()
    {
        return $this->spyProductListCategories;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductListCategoryEntityTransfer $spyProductListCategories
     *
     * @return $this
     */
    public function addSpyProductListCategories(SpyProductListCategoryEntityTransfer $spyProductListCategories)
    {
        $this->spyProductListCategories[] = $spyProductListCategories;
        $this->modifiedProperties[self::SPY_PRODUCT_LIST_CATEGORIES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductListCategories()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_LIST_CATEGORIES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyConfigurableBundleTemplateSlotEntityTransfer[] $spyConfigurableBundleTemplateSlots
     *
     * @return $this
     */
    public function setSpyConfigurableBundleTemplateSlots(ArrayObject $spyConfigurableBundleTemplateSlots)
    {
        $this->spyConfigurableBundleTemplateSlots = $spyConfigurableBundleTemplateSlots;
        $this->modifiedProperties[self::SPY_CONFIGURABLE_BUNDLE_TEMPLATE_SLOTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyConfigurableBundleTemplateSlotEntityTransfer[]
     */
    public function getSpyConfigurableBundleTemplateSlots()
    {
        return $this->spyConfigurableBundleTemplateSlots;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyConfigurableBundleTemplateSlotEntityTransfer $spyConfigurableBundleTemplateSlots
     *
     * @return $this
     */
    public function addSpyConfigurableBundleTemplateSlots(SpyConfigurableBundleTemplateSlotEntityTransfer $spyConfigurableBundleTemplateSlots)
    {
        $this->spyConfigurableBundleTemplateSlots[] = $spyConfigurableBundleTemplateSlots;
        $this->modifiedProperties[self::SPY_CONFIGURABLE_BUNDLE_TEMPLATE_SLOTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyConfigurableBundleTemplateSlots()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_CONFIGURABLE_BUNDLE_TEMPLATE_SLOTS);

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
                case 'idProductList':
                case 'fkMerchantRelationship':
                case 'key':
                case 'title':
                case 'type':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyMerchantRelationship':
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
                case 'spyProductListProductConcretes':
                case 'spyProductListCategories':
                case 'spyConfigurableBundleTemplateSlots':
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
                case 'idProductList':
                case 'fkMerchantRelationship':
                case 'key':
                case 'title':
                case 'type':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyMerchantRelationship':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyProductListProductConcretes':
                case 'spyProductListCategories':
                case 'spyConfigurableBundleTemplateSlots':
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
                case 'idProductList':
                case 'fkMerchantRelationship':
                case 'key':
                case 'title':
                case 'type':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyMerchantRelationship':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyProductListProductConcretes':
                case 'spyProductListCategories':
                case 'spyConfigurableBundleTemplateSlots':
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
        $this->spyProductListProductConcretes = $this->spyProductListProductConcretes ?: new ArrayObject();
        $this->spyProductListCategories = $this->spyProductListCategories ?: new ArrayObject();
        $this->spyConfigurableBundleTemplateSlots = $this->spyConfigurableBundleTemplateSlots ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idProductList' => $this->idProductList,
            'fkMerchantRelationship' => $this->fkMerchantRelationship,
            'key' => $this->key,
            'title' => $this->title,
            'type' => $this->type,
            'spyMerchantRelationship' => $this->spyMerchantRelationship,
            'spyProductListProductConcretes' => $this->spyProductListProductConcretes,
            'spyProductListCategories' => $this->spyProductListCategories,
            'spyConfigurableBundleTemplateSlots' => $this->spyConfigurableBundleTemplateSlots,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_list' => $this->idProductList,
            'fk_merchant_relationship' => $this->fkMerchantRelationship,
            'key' => $this->key,
            'title' => $this->title,
            'type' => $this->type,
            'spy_merchant_relationship' => $this->spyMerchantRelationship,
            'spy_product_list_product_concretes' => $this->spyProductListProductConcretes,
            'spy_product_list_categories' => $this->spyProductListCategories,
            'spy_configurable_bundle_template_slots' => $this->spyConfigurableBundleTemplateSlots,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_list' => $this->idProductList instanceof AbstractTransfer ? $this->idProductList->toArray(true, false) : $this->idProductList,
            'fk_merchant_relationship' => $this->fkMerchantRelationship instanceof AbstractTransfer ? $this->fkMerchantRelationship->toArray(true, false) : $this->fkMerchantRelationship,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
            'title' => $this->title instanceof AbstractTransfer ? $this->title->toArray(true, false) : $this->title,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, false) : $this->type,
            'spy_merchant_relationship' => $this->spyMerchantRelationship instanceof AbstractTransfer ? $this->spyMerchantRelationship->toArray(true, false) : $this->spyMerchantRelationship,
            'spy_product_list_product_concretes' => $this->spyProductListProductConcretes instanceof AbstractTransfer ? $this->spyProductListProductConcretes->toArray(true, false) : $this->addValuesToCollection($this->spyProductListProductConcretes, true, false),
            'spy_product_list_categories' => $this->spyProductListCategories instanceof AbstractTransfer ? $this->spyProductListCategories->toArray(true, false) : $this->addValuesToCollection($this->spyProductListCategories, true, false),
            'spy_configurable_bundle_template_slots' => $this->spyConfigurableBundleTemplateSlots instanceof AbstractTransfer ? $this->spyConfigurableBundleTemplateSlots->toArray(true, false) : $this->addValuesToCollection($this->spyConfigurableBundleTemplateSlots, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductList' => $this->idProductList instanceof AbstractTransfer ? $this->idProductList->toArray(true, true) : $this->idProductList,
            'fkMerchantRelationship' => $this->fkMerchantRelationship instanceof AbstractTransfer ? $this->fkMerchantRelationship->toArray(true, true) : $this->fkMerchantRelationship,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
            'title' => $this->title instanceof AbstractTransfer ? $this->title->toArray(true, true) : $this->title,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, true) : $this->type,
            'spyMerchantRelationship' => $this->spyMerchantRelationship instanceof AbstractTransfer ? $this->spyMerchantRelationship->toArray(true, true) : $this->spyMerchantRelationship,
            'spyProductListProductConcretes' => $this->spyProductListProductConcretes instanceof AbstractTransfer ? $this->spyProductListProductConcretes->toArray(true, true) : $this->addValuesToCollection($this->spyProductListProductConcretes, true, true),
            'spyProductListCategories' => $this->spyProductListCategories instanceof AbstractTransfer ? $this->spyProductListCategories->toArray(true, true) : $this->addValuesToCollection($this->spyProductListCategories, true, true),
            'spyConfigurableBundleTemplateSlots' => $this->spyConfigurableBundleTemplateSlots instanceof AbstractTransfer ? $this->spyConfigurableBundleTemplateSlots->toArray(true, true) : $this->addValuesToCollection($this->spyConfigurableBundleTemplateSlots, true, true),
        ];
    }
}
