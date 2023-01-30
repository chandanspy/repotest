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
class SpyProductLabelEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_LABEL = 'idProductLabel';

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
    public const IS_EXCLUSIVE = 'isExclusive';

    /**
     * @var string
     */
    public const IS_PUBLISHED = 'isPublished';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const POSITION = 'position';

    /**
     * @var string
     */
    public const VALID_FROM = 'validFrom';

    /**
     * @var string
     */
    public const VALID_TO = 'validTo';

    /**
     * @var string
     */
    public const SPY_PRODUCT_LABEL_PRODUCT_ABSTRACTS = 'spyProductLabelProductAbstracts';

    /**
     * @var string
     */
    public const SPY_PRODUCT_LABEL_STORES = 'spyProductLabelStores';

    /**
     * @var string
     */
    public const SPY_PRODUCT_LABEL_LOCALIZED_ATTRIBUTESS = 'spyProductLabelLocalizedAttributess';

    /**
     * @var integer|null
     */
    protected $idProductLabel;

    /**
     * @var string|null
     */
    protected $frontEndReference;

    /**
     * @var boolean|null
     */
    protected $isActive;

    /**
     * @var boolean|null
     */
    protected $isDynamic;

    /**
     * @var boolean|null
     */
    protected $isExclusive;

    /**
     * @var boolean|null
     */
    protected $isPublished;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var integer|null
     */
    protected $position;

    /**
     * @var string|null
     */
    protected $validFrom;

    /**
     * @var string|null
     */
    protected $validTo;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductLabelProductAbstractEntityTransfer[]
     */
    protected $spyProductLabelProductAbstracts;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductLabelStoreEntityTransfer[]
     */
    protected $spyProductLabelStores;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyProductLabelLocalizedAttributesEntityTransfer[]
     */
    protected $spyProductLabelLocalizedAttributess;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_label' => 'idProductLabel',
        'idProductLabel' => 'idProductLabel',
        'IdProductLabel' => 'idProductLabel',
        'front_end_reference' => 'frontEndReference',
        'frontEndReference' => 'frontEndReference',
        'FrontEndReference' => 'frontEndReference',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'is_dynamic' => 'isDynamic',
        'isDynamic' => 'isDynamic',
        'IsDynamic' => 'isDynamic',
        'is_exclusive' => 'isExclusive',
        'isExclusive' => 'isExclusive',
        'IsExclusive' => 'isExclusive',
        'is_published' => 'isPublished',
        'isPublished' => 'isPublished',
        'IsPublished' => 'isPublished',
        'name' => 'name',
        'Name' => 'name',
        'position' => 'position',
        'Position' => 'position',
        'valid_from' => 'validFrom',
        'validFrom' => 'validFrom',
        'ValidFrom' => 'validFrom',
        'valid_to' => 'validTo',
        'validTo' => 'validTo',
        'ValidTo' => 'validTo',
        'spy_product_label_product_abstracts' => 'spyProductLabelProductAbstracts',
        'spyProductLabelProductAbstracts' => 'spyProductLabelProductAbstracts',
        'SpyProductLabelProductAbstracts' => 'spyProductLabelProductAbstracts',
        'spy_product_label_stores' => 'spyProductLabelStores',
        'spyProductLabelStores' => 'spyProductLabelStores',
        'SpyProductLabelStores' => 'spyProductLabelStores',
        'spy_product_label_localized_attributess' => 'spyProductLabelLocalizedAttributess',
        'spyProductLabelLocalizedAttributess' => 'spyProductLabelLocalizedAttributess',
        'SpyProductLabelLocalizedAttributess' => 'spyProductLabelLocalizedAttributess',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_LABEL => [
            'type' => 'integer',
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
            'type' => 'boolean',
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
            'type' => 'boolean',
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
        self::IS_EXCLUSIVE => [
            'type' => 'boolean',
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
            'type' => 'boolean',
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
        self::POSITION => [
            'type' => 'integer',
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
        self::SPY_PRODUCT_LABEL_PRODUCT_ABSTRACTS => [
            'type' => 'Generated\Shared\Transfer\SpyProductLabelProductAbstractEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_label_product_abstracts',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_LABEL_STORES => [
            'type' => 'Generated\Shared\Transfer\SpyProductLabelStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_label_stores',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_LABEL_LOCALIZED_ATTRIBUTESS => [
            'type' => 'Generated\Shared\Transfer\SpyProductLabelLocalizedAttributesEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_label_localized_attributess',
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
    public static $entityNamespace = 'Orm\Zed\ProductLabel\Persistence\SpyProductLabel';


    /**
     * @module 
     *
     * @param integer|null $idProductLabel
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdProductLabel()
    {
        return $this->idProductLabel;
    }

    /**
     * @module 
     *
     * @param integer|null $idProductLabel
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdProductLabelOrFail()
    {
        if ($this->idProductLabel === null) {
            $this->throwNullValueException(static::ID_PRODUCT_LABEL);
        }

        return $this->idProductLabel;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getFrontEndReference()
    {
        return $this->frontEndReference;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param boolean|null $isActive
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
     * @module 
     *
     * @return boolean|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module 
     *
     * @param boolean|null $isActive
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsActiveOrFail()
    {
        if ($this->isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->isActive;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param boolean|null $isDynamic
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
     * @module 
     *
     * @return boolean|null
     */
    public function getIsDynamic()
    {
        return $this->isDynamic;
    }

    /**
     * @module 
     *
     * @param boolean|null $isDynamic
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsDynamicOrFail()
    {
        if ($this->isDynamic === null) {
            $this->throwNullValueException(static::IS_DYNAMIC);
        }

        return $this->isDynamic;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param boolean|null $isExclusive
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
     * @module 
     *
     * @return boolean|null
     */
    public function getIsExclusive()
    {
        return $this->isExclusive;
    }

    /**
     * @module 
     *
     * @param boolean|null $isExclusive
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsExclusiveOrFail()
    {
        if ($this->isExclusive === null) {
            $this->throwNullValueException(static::IS_EXCLUSIVE);
        }

        return $this->isExclusive;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param boolean|null $isPublished
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
     * @module 
     *
     * @return boolean|null
     */
    public function getIsPublished()
    {
        return $this->isPublished;
    }

    /**
     * @module 
     *
     * @param boolean|null $isPublished
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsPublishedOrFail()
    {
        if ($this->isPublished === null) {
            $this->throwNullValueException(static::IS_PUBLISHED);
        }

        return $this->isPublished;
    }

    /**
     * @module 
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
     * @param integer|null $position
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
     * @module 
     *
     * @return integer|null
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @module 
     *
     * @param integer|null $position
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getPositionOrFail()
    {
        if ($this->position === null) {
            $this->throwNullValueException(static::POSITION);
        }

        return $this->position;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getValidTo()
    {
        return $this->validTo;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductLabelProductAbstractEntityTransfer[] $spyProductLabelProductAbstracts
     *
     * @return $this
     */
    public function setSpyProductLabelProductAbstracts(ArrayObject $spyProductLabelProductAbstracts)
    {
        $this->spyProductLabelProductAbstracts = $spyProductLabelProductAbstracts;
        $this->modifiedProperties[self::SPY_PRODUCT_LABEL_PRODUCT_ABSTRACTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductLabelProductAbstractEntityTransfer[]
     */
    public function getSpyProductLabelProductAbstracts()
    {
        return $this->spyProductLabelProductAbstracts;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductLabelProductAbstractEntityTransfer $spyProductLabelProductAbstracts
     *
     * @return $this
     */
    public function addSpyProductLabelProductAbstracts(SpyProductLabelProductAbstractEntityTransfer $spyProductLabelProductAbstracts)
    {
        $this->spyProductLabelProductAbstracts[] = $spyProductLabelProductAbstracts;
        $this->modifiedProperties[self::SPY_PRODUCT_LABEL_PRODUCT_ABSTRACTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductLabelProductAbstracts()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_LABEL_PRODUCT_ABSTRACTS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductLabelStoreEntityTransfer[] $spyProductLabelStores
     *
     * @return $this
     */
    public function setSpyProductLabelStores(ArrayObject $spyProductLabelStores)
    {
        $this->spyProductLabelStores = $spyProductLabelStores;
        $this->modifiedProperties[self::SPY_PRODUCT_LABEL_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductLabelStoreEntityTransfer[]
     */
    public function getSpyProductLabelStores()
    {
        return $this->spyProductLabelStores;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductLabelStoreEntityTransfer $spyProductLabelStores
     *
     * @return $this
     */
    public function addSpyProductLabelStores(SpyProductLabelStoreEntityTransfer $spyProductLabelStores)
    {
        $this->spyProductLabelStores[] = $spyProductLabelStores;
        $this->modifiedProperties[self::SPY_PRODUCT_LABEL_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductLabelStores()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_LABEL_STORES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyProductLabelLocalizedAttributesEntityTransfer[] $spyProductLabelLocalizedAttributess
     *
     * @return $this
     */
    public function setSpyProductLabelLocalizedAttributess(ArrayObject $spyProductLabelLocalizedAttributess)
    {
        $this->spyProductLabelLocalizedAttributess = $spyProductLabelLocalizedAttributess;
        $this->modifiedProperties[self::SPY_PRODUCT_LABEL_LOCALIZED_ATTRIBUTESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyProductLabelLocalizedAttributesEntityTransfer[]
     */
    public function getSpyProductLabelLocalizedAttributess()
    {
        return $this->spyProductLabelLocalizedAttributess;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductLabelLocalizedAttributesEntityTransfer $spyProductLabelLocalizedAttributess
     *
     * @return $this
     */
    public function addSpyProductLabelLocalizedAttributess(SpyProductLabelLocalizedAttributesEntityTransfer $spyProductLabelLocalizedAttributess)
    {
        $this->spyProductLabelLocalizedAttributess[] = $spyProductLabelLocalizedAttributess;
        $this->modifiedProperties[self::SPY_PRODUCT_LABEL_LOCALIZED_ATTRIBUTESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductLabelLocalizedAttributess()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PRODUCT_LABEL_LOCALIZED_ATTRIBUTESS);

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
                case 'idProductLabel':
                case 'frontEndReference':
                case 'isActive':
                case 'isDynamic':
                case 'isExclusive':
                case 'isPublished':
                case 'name':
                case 'position':
                case 'validFrom':
                case 'validTo':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyProductLabelProductAbstracts':
                case 'spyProductLabelStores':
                case 'spyProductLabelLocalizedAttributess':
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
                case 'idProductLabel':
                case 'frontEndReference':
                case 'isActive':
                case 'isDynamic':
                case 'isExclusive':
                case 'isPublished':
                case 'name':
                case 'position':
                case 'validFrom':
                case 'validTo':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyProductLabelProductAbstracts':
                case 'spyProductLabelStores':
                case 'spyProductLabelLocalizedAttributess':
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
                case 'idProductLabel':
                case 'frontEndReference':
                case 'isActive':
                case 'isDynamic':
                case 'isExclusive':
                case 'isPublished':
                case 'name':
                case 'position':
                case 'validFrom':
                case 'validTo':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyProductLabelProductAbstracts':
                case 'spyProductLabelStores':
                case 'spyProductLabelLocalizedAttributess':
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
        $this->spyProductLabelProductAbstracts = $this->spyProductLabelProductAbstracts ?: new ArrayObject();
        $this->spyProductLabelStores = $this->spyProductLabelStores ?: new ArrayObject();
        $this->spyProductLabelLocalizedAttributess = $this->spyProductLabelLocalizedAttributess ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idProductLabel' => $this->idProductLabel,
            'frontEndReference' => $this->frontEndReference,
            'isActive' => $this->isActive,
            'isDynamic' => $this->isDynamic,
            'isExclusive' => $this->isExclusive,
            'isPublished' => $this->isPublished,
            'name' => $this->name,
            'position' => $this->position,
            'validFrom' => $this->validFrom,
            'validTo' => $this->validTo,
            'spyProductLabelProductAbstracts' => $this->spyProductLabelProductAbstracts,
            'spyProductLabelStores' => $this->spyProductLabelStores,
            'spyProductLabelLocalizedAttributess' => $this->spyProductLabelLocalizedAttributess,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_label' => $this->idProductLabel,
            'front_end_reference' => $this->frontEndReference,
            'is_active' => $this->isActive,
            'is_dynamic' => $this->isDynamic,
            'is_exclusive' => $this->isExclusive,
            'is_published' => $this->isPublished,
            'name' => $this->name,
            'position' => $this->position,
            'valid_from' => $this->validFrom,
            'valid_to' => $this->validTo,
            'spy_product_label_product_abstracts' => $this->spyProductLabelProductAbstracts,
            'spy_product_label_stores' => $this->spyProductLabelStores,
            'spy_product_label_localized_attributess' => $this->spyProductLabelLocalizedAttributess,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_label' => $this->idProductLabel instanceof AbstractTransfer ? $this->idProductLabel->toArray(true, false) : $this->idProductLabel,
            'front_end_reference' => $this->frontEndReference instanceof AbstractTransfer ? $this->frontEndReference->toArray(true, false) : $this->frontEndReference,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'is_dynamic' => $this->isDynamic instanceof AbstractTransfer ? $this->isDynamic->toArray(true, false) : $this->isDynamic,
            'is_exclusive' => $this->isExclusive instanceof AbstractTransfer ? $this->isExclusive->toArray(true, false) : $this->isExclusive,
            'is_published' => $this->isPublished instanceof AbstractTransfer ? $this->isPublished->toArray(true, false) : $this->isPublished,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'position' => $this->position instanceof AbstractTransfer ? $this->position->toArray(true, false) : $this->position,
            'valid_from' => $this->validFrom instanceof AbstractTransfer ? $this->validFrom->toArray(true, false) : $this->validFrom,
            'valid_to' => $this->validTo instanceof AbstractTransfer ? $this->validTo->toArray(true, false) : $this->validTo,
            'spy_product_label_product_abstracts' => $this->spyProductLabelProductAbstracts instanceof AbstractTransfer ? $this->spyProductLabelProductAbstracts->toArray(true, false) : $this->addValuesToCollection($this->spyProductLabelProductAbstracts, true, false),
            'spy_product_label_stores' => $this->spyProductLabelStores instanceof AbstractTransfer ? $this->spyProductLabelStores->toArray(true, false) : $this->addValuesToCollection($this->spyProductLabelStores, true, false),
            'spy_product_label_localized_attributess' => $this->spyProductLabelLocalizedAttributess instanceof AbstractTransfer ? $this->spyProductLabelLocalizedAttributess->toArray(true, false) : $this->addValuesToCollection($this->spyProductLabelLocalizedAttributess, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductLabel' => $this->idProductLabel instanceof AbstractTransfer ? $this->idProductLabel->toArray(true, true) : $this->idProductLabel,
            'frontEndReference' => $this->frontEndReference instanceof AbstractTransfer ? $this->frontEndReference->toArray(true, true) : $this->frontEndReference,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'isDynamic' => $this->isDynamic instanceof AbstractTransfer ? $this->isDynamic->toArray(true, true) : $this->isDynamic,
            'isExclusive' => $this->isExclusive instanceof AbstractTransfer ? $this->isExclusive->toArray(true, true) : $this->isExclusive,
            'isPublished' => $this->isPublished instanceof AbstractTransfer ? $this->isPublished->toArray(true, true) : $this->isPublished,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'position' => $this->position instanceof AbstractTransfer ? $this->position->toArray(true, true) : $this->position,
            'validFrom' => $this->validFrom instanceof AbstractTransfer ? $this->validFrom->toArray(true, true) : $this->validFrom,
            'validTo' => $this->validTo instanceof AbstractTransfer ? $this->validTo->toArray(true, true) : $this->validTo,
            'spyProductLabelProductAbstracts' => $this->spyProductLabelProductAbstracts instanceof AbstractTransfer ? $this->spyProductLabelProductAbstracts->toArray(true, true) : $this->addValuesToCollection($this->spyProductLabelProductAbstracts, true, true),
            'spyProductLabelStores' => $this->spyProductLabelStores instanceof AbstractTransfer ? $this->spyProductLabelStores->toArray(true, true) : $this->addValuesToCollection($this->spyProductLabelStores, true, true),
            'spyProductLabelLocalizedAttributess' => $this->spyProductLabelLocalizedAttributess instanceof AbstractTransfer ? $this->spyProductLabelLocalizedAttributess->toArray(true, true) : $this->addValuesToCollection($this->spyProductLabelLocalizedAttributess, true, true),
        ];
    }
}
