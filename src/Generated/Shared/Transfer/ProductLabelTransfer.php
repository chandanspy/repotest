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
class ProductLabelTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const FRONT_END_REFERENCE = 'frontEndReference';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const IS_DYNAMIC = 'isDynamic';

    /**
     * @var string
     */
    public const ID_PRODUCT_LABEL = 'idProductLabel';

    /**
     * @var string
     */
    public const IS_EXCLUSIVE = 'isExclusive';

    /**
     * @var string
     */
    public const IS_PUBLISHED = 'isPublished';

    /**
     * @var string
     */
    public const LOCALIZED_ATTRIBUTES_COLLECTION = 'localizedAttributesCollection';

    /**
     * @var string
     */
    public const POSITION = 'position';

    /**
     * @var string
     */
    public const STORE_RELATION = 'storeRelation';

    /**
     * @var string
     */
    public const PRODUCT_LABEL_PRODUCT_ABSTRACTS = 'productLabelProductAbstracts';

    /**
     * @var string
     */
    public const VALID_FROM = 'validFrom';

    /**
     * @var string
     */
    public const VALID_TO = 'validTo';

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $frontEndReference;

    /**
     * @var bool|null
     */
    protected $isActive;

    /**
     * @var bool|null
     */
    protected $isDynamic;

    /**
     * @var int|null
     */
    protected $idProductLabel;

    /**
     * @var bool|null
     */
    protected $isExclusive;

    /**
     * @var bool|null
     */
    protected $isPublished;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ProductLabelLocalizedAttributesTransfer[]
     */
    protected $localizedAttributesCollection;

    /**
     * @var int|null
     */
    protected $position;

    /**
     * @var \Generated\Shared\Transfer\StoreRelationTransfer|null
     */
    protected $storeRelation;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ProductLabelProductAbstractTransfer[]
     */
    protected $productLabelProductAbstracts;

    /**
     * @var string|null
     */
    protected $validFrom;

    /**
     * @var string|null
     */
    protected $validTo;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'name' => 'name',
        'Name' => 'name',
        'front_end_reference' => 'frontEndReference',
        'frontEndReference' => 'frontEndReference',
        'FrontEndReference' => 'frontEndReference',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'is_dynamic' => 'isDynamic',
        'isDynamic' => 'isDynamic',
        'IsDynamic' => 'isDynamic',
        'id_product_label' => 'idProductLabel',
        'idProductLabel' => 'idProductLabel',
        'IdProductLabel' => 'idProductLabel',
        'is_exclusive' => 'isExclusive',
        'isExclusive' => 'isExclusive',
        'IsExclusive' => 'isExclusive',
        'is_published' => 'isPublished',
        'isPublished' => 'isPublished',
        'IsPublished' => 'isPublished',
        'localized_attributes_collection' => 'localizedAttributesCollection',
        'localizedAttributesCollection' => 'localizedAttributesCollection',
        'LocalizedAttributesCollection' => 'localizedAttributesCollection',
        'position' => 'position',
        'Position' => 'position',
        'store_relation' => 'storeRelation',
        'storeRelation' => 'storeRelation',
        'StoreRelation' => 'storeRelation',
        'product_label_product_abstracts' => 'productLabelProductAbstracts',
        'productLabelProductAbstracts' => 'productLabelProductAbstracts',
        'ProductLabelProductAbstracts' => 'productLabelProductAbstracts',
        'valid_from' => 'validFrom',
        'validFrom' => 'validFrom',
        'ValidFrom' => 'validFrom',
        'valid_to' => 'validTo',
        'validTo' => 'validTo',
        'ValidTo' => 'validTo',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::FRONT_END_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'front_end_reference',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_ACTIVE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_active',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_DYNAMIC => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_dynamic',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_PRODUCT_LABEL => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_label',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_EXCLUSIVE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_exclusive',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_PUBLISHED => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_published',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LOCALIZED_ATTRIBUTES_COLLECTION => [
            'type' => 'Generated\Shared\Transfer\ProductLabelLocalizedAttributesTransfer',
            'type_shim' => null,
            'name_underscore' => 'localized_attributes_collection',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::POSITION => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'position',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORE_RELATION => [
            'type' => 'Generated\Shared\Transfer\StoreRelationTransfer',
            'type_shim' => null,
            'name_underscore' => 'store_relation',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_LABEL_PRODUCT_ABSTRACTS => [
            'type' => 'Generated\Shared\Transfer\ProductLabelProductAbstractTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_label_product_abstracts',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::VALID_FROM => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'valid_from',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::VALID_TO => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'valid_to',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelDiscountConnector|ProductLabelGui|ProductLabelStorage|ProductLabel
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
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelDiscountConnector|ProductLabelGui|ProductLabelStorage|ProductLabel
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelDiscountConnector|ProductLabelGui|ProductLabelStorage|ProductLabel
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
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelDiscountConnector|ProductLabelGui|ProductLabelStorage|ProductLabel
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
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelDiscountConnector|ProductLabelGui|ProductLabelStorage|ProductLabel
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
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelStorage|ProductLabel
     *
     * @param string|null $frontEndReference
     *
     * @return $this
     */
    public function setFrontEndReference($frontEndReference)
    {
        $this->frontEndReference = $frontEndReference;
        $this->modifiedProperties[self::FRONT_END_REFERENCE] = true;

        return $this;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelStorage|ProductLabel
     *
     * @return string|null
     */
    public function getFrontEndReference()
    {
        return $this->frontEndReference;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelStorage|ProductLabel
     *
     * @param string|null $frontEndReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFrontEndReferenceOrFail($frontEndReference)
    {
        if ($frontEndReference === null) {
            $this->throwNullValueException(static::FRONT_END_REFERENCE);
        }

        return $this->setFrontEndReference($frontEndReference);
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelStorage|ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getFrontEndReferenceOrFail()
    {
        if ($this->frontEndReference === null) {
            $this->throwNullValueException(static::FRONT_END_REFERENCE);
        }

        return $this->frontEndReference;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelStorage|ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFrontEndReference()
    {
        $this->assertPropertyIsSet(self::FRONT_END_REFERENCE);

        return $this;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabel
     *
     * @param bool|null $isActive
     *
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        $this->modifiedProperties[self::IS_ACTIVE] = true;

        return $this;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabel
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabel
     *
     * @param bool|null $isActive
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsActiveOrFail($isActive)
    {
        if ($isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->setIsActive($isActive);
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsActiveOrFail()
    {
        if ($this->isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->isActive;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsActive()
    {
        $this->assertPropertyIsSet(self::IS_ACTIVE);

        return $this;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabel
     *
     * @param bool|null $isDynamic
     *
     * @return $this
     */
    public function setIsDynamic($isDynamic)
    {
        $this->isDynamic = $isDynamic;
        $this->modifiedProperties[self::IS_DYNAMIC] = true;

        return $this;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabel
     *
     * @return bool|null
     */
    public function getIsDynamic()
    {
        return $this->isDynamic;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabel
     *
     * @param bool|null $isDynamic
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsDynamicOrFail($isDynamic)
    {
        if ($isDynamic === null) {
            $this->throwNullValueException(static::IS_DYNAMIC);
        }

        return $this->setIsDynamic($isDynamic);
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsDynamicOrFail()
    {
        if ($this->isDynamic === null) {
            $this->throwNullValueException(static::IS_DYNAMIC);
        }

        return $this->isDynamic;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsDynamic()
    {
        $this->assertPropertyIsSet(self::IS_DYNAMIC);

        return $this;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabelSearch|ProductLabelStorage|ProductLabel
     *
     * @param int|null $idProductLabel
     *
     * @return $this
     */
    public function setIdProductLabel($idProductLabel)
    {
        $this->idProductLabel = $idProductLabel;
        $this->modifiedProperties[self::ID_PRODUCT_LABEL] = true;

        return $this;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabelSearch|ProductLabelStorage|ProductLabel
     *
     * @return int|null
     */
    public function getIdProductLabel()
    {
        return $this->idProductLabel;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabelSearch|ProductLabelStorage|ProductLabel
     *
     * @param int|null $idProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductLabelOrFail($idProductLabel)
    {
        if ($idProductLabel === null) {
            $this->throwNullValueException(static::ID_PRODUCT_LABEL);
        }

        return $this->setIdProductLabel($idProductLabel);
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabelSearch|ProductLabelStorage|ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductLabelOrFail()
    {
        if ($this->idProductLabel === null) {
            $this->throwNullValueException(static::ID_PRODUCT_LABEL);
        }

        return $this->idProductLabel;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabelSearch|ProductLabelStorage|ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductLabel()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_LABEL);

        return $this;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelStorage|ProductLabel
     *
     * @param bool|null $isExclusive
     *
     * @return $this
     */
    public function setIsExclusive($isExclusive)
    {
        $this->isExclusive = $isExclusive;
        $this->modifiedProperties[self::IS_EXCLUSIVE] = true;

        return $this;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelStorage|ProductLabel
     *
     * @return bool|null
     */
    public function getIsExclusive()
    {
        return $this->isExclusive;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelStorage|ProductLabel
     *
     * @param bool|null $isExclusive
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsExclusiveOrFail($isExclusive)
    {
        if ($isExclusive === null) {
            $this->throwNullValueException(static::IS_EXCLUSIVE);
        }

        return $this->setIsExclusive($isExclusive);
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelStorage|ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsExclusiveOrFail()
    {
        if ($this->isExclusive === null) {
            $this->throwNullValueException(static::IS_EXCLUSIVE);
        }

        return $this->isExclusive;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelStorage|ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsExclusive()
    {
        $this->assertPropertyIsSet(self::IS_EXCLUSIVE);

        return $this;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabel
     *
     * @param bool|null $isPublished
     *
     * @return $this
     */
    public function setIsPublished($isPublished)
    {
        $this->isPublished = $isPublished;
        $this->modifiedProperties[self::IS_PUBLISHED] = true;

        return $this;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabel
     *
     * @return bool|null
     */
    public function getIsPublished()
    {
        return $this->isPublished;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabel
     *
     * @param bool|null $isPublished
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsPublishedOrFail($isPublished)
    {
        if ($isPublished === null) {
            $this->throwNullValueException(static::IS_PUBLISHED);
        }

        return $this->setIsPublished($isPublished);
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsPublishedOrFail()
    {
        if ($this->isPublished === null) {
            $this->throwNullValueException(static::IS_PUBLISHED);
        }

        return $this->isPublished;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsPublished()
    {
        $this->assertPropertyIsSet(self::IS_PUBLISHED);

        return $this;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabelStorage|ProductLabel
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ProductLabelLocalizedAttributesTransfer[] $localizedAttributesCollection
     *
     * @return $this
     */
    public function setLocalizedAttributesCollection(ArrayObject $localizedAttributesCollection)
    {
        $this->localizedAttributesCollection = $localizedAttributesCollection;
        $this->modifiedProperties[self::LOCALIZED_ATTRIBUTES_COLLECTION] = true;

        return $this;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabelStorage|ProductLabel
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ProductLabelLocalizedAttributesTransfer[]
     */
    public function getLocalizedAttributesCollection()
    {
        return $this->localizedAttributesCollection;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabelStorage|ProductLabel
     *
     * @param \Generated\Shared\Transfer\ProductLabelLocalizedAttributesTransfer $localizedAttributes
     *
     * @return $this
     */
    public function addLocalizedAttributes(ProductLabelLocalizedAttributesTransfer $localizedAttributes)
    {
        $this->localizedAttributesCollection[] = $localizedAttributes;
        $this->modifiedProperties[self::LOCALIZED_ATTRIBUTES_COLLECTION] = true;

        return $this;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabelStorage|ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocalizedAttributesCollection()
    {
        $this->assertCollectionPropertyIsSet(self::LOCALIZED_ATTRIBUTES_COLLECTION);

        return $this;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabelStorage|ProductLabel
     *
     * @param int|null $position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->position = $position;
        $this->modifiedProperties[self::POSITION] = true;

        return $this;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabelStorage|ProductLabel
     *
     * @return int|null
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabelStorage|ProductLabel
     *
     * @param int|null $position
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPositionOrFail($position)
    {
        if ($position === null) {
            $this->throwNullValueException(static::POSITION);
        }

        return $this->setPosition($position);
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabelStorage|ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getPositionOrFail()
    {
        if ($this->position === null) {
            $this->throwNullValueException(static::POSITION);
        }

        return $this->position;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabelStorage|ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePosition()
    {
        $this->assertPropertyIsSet(self::POSITION);

        return $this;
    }

    /**
     * @module ProductLabelSearch|ProductLabelStorage|ProductLabel
     *
     * @param \Generated\Shared\Transfer\StoreRelationTransfer|null $storeRelation
     *
     * @return $this
     */
    public function setStoreRelation(StoreRelationTransfer $storeRelation = null)
    {
        $this->storeRelation = $storeRelation;
        $this->modifiedProperties[self::STORE_RELATION] = true;

        return $this;
    }

    /**
     * @module ProductLabelSearch|ProductLabelStorage|ProductLabel
     *
     * @return \Generated\Shared\Transfer\StoreRelationTransfer|null
     */
    public function getStoreRelation()
    {
        return $this->storeRelation;
    }

    /**
     * @module ProductLabelSearch|ProductLabelStorage|ProductLabel
     *
     * @param \Generated\Shared\Transfer\StoreRelationTransfer $storeRelation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreRelationOrFail(StoreRelationTransfer $storeRelation)
    {
        return $this->setStoreRelation($storeRelation);
    }

    /**
     * @module ProductLabelSearch|ProductLabelStorage|ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\StoreRelationTransfer
     */
    public function getStoreRelationOrFail()
    {
        if ($this->storeRelation === null) {
            $this->throwNullValueException(static::STORE_RELATION);
        }

        return $this->storeRelation;
    }

    /**
     * @module ProductLabelSearch|ProductLabelStorage|ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStoreRelation()
    {
        $this->assertPropertyIsSet(self::STORE_RELATION);

        return $this;
    }

    /**
     * @module ProductLabelSearch|ProductLabel
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ProductLabelProductAbstractTransfer[] $productLabelProductAbstracts
     *
     * @return $this
     */
    public function setProductLabelProductAbstracts(ArrayObject $productLabelProductAbstracts)
    {
        $this->productLabelProductAbstracts = $productLabelProductAbstracts;
        $this->modifiedProperties[self::PRODUCT_LABEL_PRODUCT_ABSTRACTS] = true;

        return $this;
    }

    /**
     * @module ProductLabelSearch|ProductLabel
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ProductLabelProductAbstractTransfer[]
     */
    public function getProductLabelProductAbstracts()
    {
        return $this->productLabelProductAbstracts;
    }

    /**
     * @module ProductLabelSearch|ProductLabel
     *
     * @param \Generated\Shared\Transfer\ProductLabelProductAbstractTransfer $productLabelProductAbstract
     *
     * @return $this
     */
    public function addProductLabelProductAbstract(ProductLabelProductAbstractTransfer $productLabelProductAbstract)
    {
        $this->productLabelProductAbstracts[] = $productLabelProductAbstract;
        $this->modifiedProperties[self::PRODUCT_LABEL_PRODUCT_ABSTRACTS] = true;

        return $this;
    }

    /**
     * @module ProductLabelSearch|ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductLabelProductAbstracts()
    {
        $this->assertCollectionPropertyIsSet(self::PRODUCT_LABEL_PRODUCT_ABSTRACTS);

        return $this;
    }

    /**
     * @module ProductLabelStorage|ProductLabel
     *
     * @param string|null $validFrom
     *
     * @return $this
     */
    public function setValidFrom($validFrom)
    {
        $this->validFrom = $validFrom;
        $this->modifiedProperties[self::VALID_FROM] = true;

        return $this;
    }

    /**
     * @module ProductLabelStorage|ProductLabel
     *
     * @return string|null
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * @module ProductLabelStorage|ProductLabel
     *
     * @param string|null $validFrom
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setValidFromOrFail($validFrom)
    {
        if ($validFrom === null) {
            $this->throwNullValueException(static::VALID_FROM);
        }

        return $this->setValidFrom($validFrom);
    }

    /**
     * @module ProductLabelStorage|ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getValidFromOrFail()
    {
        if ($this->validFrom === null) {
            $this->throwNullValueException(static::VALID_FROM);
        }

        return $this->validFrom;
    }

    /**
     * @module ProductLabelStorage|ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireValidFrom()
    {
        $this->assertPropertyIsSet(self::VALID_FROM);

        return $this;
    }

    /**
     * @module ProductLabelStorage|ProductLabel
     *
     * @param string|null $validTo
     *
     * @return $this
     */
    public function setValidTo($validTo)
    {
        $this->validTo = $validTo;
        $this->modifiedProperties[self::VALID_TO] = true;

        return $this;
    }

    /**
     * @module ProductLabelStorage|ProductLabel
     *
     * @return string|null
     */
    public function getValidTo()
    {
        return $this->validTo;
    }

    /**
     * @module ProductLabelStorage|ProductLabel
     *
     * @param string|null $validTo
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setValidToOrFail($validTo)
    {
        if ($validTo === null) {
            $this->throwNullValueException(static::VALID_TO);
        }

        return $this->setValidTo($validTo);
    }

    /**
     * @module ProductLabelStorage|ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getValidToOrFail()
    {
        if ($this->validTo === null) {
            $this->throwNullValueException(static::VALID_TO);
        }

        return $this->validTo;
    }

    /**
     * @module ProductLabelStorage|ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireValidTo()
    {
        $this->assertPropertyIsSet(self::VALID_TO);

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
                case 'name':
                case 'frontEndReference':
                case 'isActive':
                case 'isDynamic':
                case 'idProductLabel':
                case 'isExclusive':
                case 'isPublished':
                case 'position':
                case 'validFrom':
                case 'validTo':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'storeRelation':
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
                case 'localizedAttributesCollection':
                case 'productLabelProductAbstracts':
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
                case 'name':
                case 'frontEndReference':
                case 'isActive':
                case 'isDynamic':
                case 'idProductLabel':
                case 'isExclusive':
                case 'isPublished':
                case 'position':
                case 'validFrom':
                case 'validTo':
                    $values[$arrayKey] = $value;

                    break;
                case 'storeRelation':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'localizedAttributesCollection':
                case 'productLabelProductAbstracts':
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
                case 'name':
                case 'frontEndReference':
                case 'isActive':
                case 'isDynamic':
                case 'idProductLabel':
                case 'isExclusive':
                case 'isPublished':
                case 'position':
                case 'validFrom':
                case 'validTo':
                    $values[$arrayKey] = $value;

                    break;
                case 'storeRelation':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'localizedAttributesCollection':
                case 'productLabelProductAbstracts':
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
        $this->localizedAttributesCollection = $this->localizedAttributesCollection ?: new ArrayObject();
        $this->productLabelProductAbstracts = $this->productLabelProductAbstracts ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'name' => $this->name,
            'frontEndReference' => $this->frontEndReference,
            'isActive' => $this->isActive,
            'isDynamic' => $this->isDynamic,
            'idProductLabel' => $this->idProductLabel,
            'isExclusive' => $this->isExclusive,
            'isPublished' => $this->isPublished,
            'position' => $this->position,
            'validFrom' => $this->validFrom,
            'validTo' => $this->validTo,
            'storeRelation' => $this->storeRelation,
            'localizedAttributesCollection' => $this->localizedAttributesCollection,
            'productLabelProductAbstracts' => $this->productLabelProductAbstracts,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name,
            'front_end_reference' => $this->frontEndReference,
            'is_active' => $this->isActive,
            'is_dynamic' => $this->isDynamic,
            'id_product_label' => $this->idProductLabel,
            'is_exclusive' => $this->isExclusive,
            'is_published' => $this->isPublished,
            'position' => $this->position,
            'valid_from' => $this->validFrom,
            'valid_to' => $this->validTo,
            'store_relation' => $this->storeRelation,
            'localized_attributes_collection' => $this->localizedAttributesCollection,
            'product_label_product_abstracts' => $this->productLabelProductAbstracts,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'front_end_reference' => $this->frontEndReference instanceof AbstractTransfer ? $this->frontEndReference->toArray(true, false) : $this->frontEndReference,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'is_dynamic' => $this->isDynamic instanceof AbstractTransfer ? $this->isDynamic->toArray(true, false) : $this->isDynamic,
            'id_product_label' => $this->idProductLabel instanceof AbstractTransfer ? $this->idProductLabel->toArray(true, false) : $this->idProductLabel,
            'is_exclusive' => $this->isExclusive instanceof AbstractTransfer ? $this->isExclusive->toArray(true, false) : $this->isExclusive,
            'is_published' => $this->isPublished instanceof AbstractTransfer ? $this->isPublished->toArray(true, false) : $this->isPublished,
            'position' => $this->position instanceof AbstractTransfer ? $this->position->toArray(true, false) : $this->position,
            'valid_from' => $this->validFrom instanceof AbstractTransfer ? $this->validFrom->toArray(true, false) : $this->validFrom,
            'valid_to' => $this->validTo instanceof AbstractTransfer ? $this->validTo->toArray(true, false) : $this->validTo,
            'store_relation' => $this->storeRelation instanceof AbstractTransfer ? $this->storeRelation->toArray(true, false) : $this->storeRelation,
            'localized_attributes_collection' => $this->localizedAttributesCollection instanceof AbstractTransfer ? $this->localizedAttributesCollection->toArray(true, false) : $this->addValuesToCollection($this->localizedAttributesCollection, true, false),
            'product_label_product_abstracts' => $this->productLabelProductAbstracts instanceof AbstractTransfer ? $this->productLabelProductAbstracts->toArray(true, false) : $this->addValuesToCollection($this->productLabelProductAbstracts, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'frontEndReference' => $this->frontEndReference instanceof AbstractTransfer ? $this->frontEndReference->toArray(true, true) : $this->frontEndReference,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'isDynamic' => $this->isDynamic instanceof AbstractTransfer ? $this->isDynamic->toArray(true, true) : $this->isDynamic,
            'idProductLabel' => $this->idProductLabel instanceof AbstractTransfer ? $this->idProductLabel->toArray(true, true) : $this->idProductLabel,
            'isExclusive' => $this->isExclusive instanceof AbstractTransfer ? $this->isExclusive->toArray(true, true) : $this->isExclusive,
            'isPublished' => $this->isPublished instanceof AbstractTransfer ? $this->isPublished->toArray(true, true) : $this->isPublished,
            'position' => $this->position instanceof AbstractTransfer ? $this->position->toArray(true, true) : $this->position,
            'validFrom' => $this->validFrom instanceof AbstractTransfer ? $this->validFrom->toArray(true, true) : $this->validFrom,
            'validTo' => $this->validTo instanceof AbstractTransfer ? $this->validTo->toArray(true, true) : $this->validTo,
            'storeRelation' => $this->storeRelation instanceof AbstractTransfer ? $this->storeRelation->toArray(true, true) : $this->storeRelation,
            'localizedAttributesCollection' => $this->localizedAttributesCollection instanceof AbstractTransfer ? $this->localizedAttributesCollection->toArray(true, true) : $this->addValuesToCollection($this->localizedAttributesCollection, true, true),
            'productLabelProductAbstracts' => $this->productLabelProductAbstracts instanceof AbstractTransfer ? $this->productLabelProductAbstracts->toArray(true, true) : $this->addValuesToCollection($this->productLabelProductAbstracts, true, true),
        ];
    }
}
