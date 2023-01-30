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
class NavigationNodeStorageTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const HAS_CHILDREN = 'hasChildren';

    /**
     * @var string
     */
    public const IS_VALID_TO = 'isValidTo';

    /**
     * @var string
     */
    public const IS_VALID_FROM = 'isValidFrom';

    /**
     * @var string
     */
    public const IS_ACTIVE_AND_VALID = 'isActiveAndValid';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const VALID_TO = 'validTo';

    /**
     * @var string
     */
    public const VALID_FROM = 'validFrom';

    /**
     * @var string
     */
    public const CHILDREN = 'children';

    /**
     * @var string
     */
    public const CSS_CLASS = 'cssClass';

    /**
     * @var string
     */
    public const URL = 'url';

    /**
     * @var string
     */
    public const TITLE = 'title';

    /**
     * @var string
     */
    public const NODE_TYPE = 'nodeType';

    /**
     * @var string
     */
    public const ID = 'id';

    /**
     * @var bool|null
     */
    protected $hasChildren;

    /**
     * @var bool|null
     */
    protected $isValidTo;

    /**
     * @var bool|null
     */
    protected $isValidFrom;

    /**
     * @var bool|null
     */
    protected $isActiveAndValid;

    /**
     * @var bool|null
     */
    protected $isActive;

    /**
     * @var string|null
     */
    protected $validTo;

    /**
     * @var string|null
     */
    protected $validFrom;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\NavigationNodeStorageTransfer[]
     */
    protected $children;

    /**
     * @var string|null
     */
    protected $cssClass;

    /**
     * @var string|null
     */
    protected $url;

    /**
     * @var string|null
     */
    protected $title;

    /**
     * @var string|null
     */
    protected $nodeType;

    /**
     * @var int|null
     */
    protected $id;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'has_children' => 'hasChildren',
        'hasChildren' => 'hasChildren',
        'HasChildren' => 'hasChildren',
        'is_valid_to' => 'isValidTo',
        'isValidTo' => 'isValidTo',
        'IsValidTo' => 'isValidTo',
        'is_valid_from' => 'isValidFrom',
        'isValidFrom' => 'isValidFrom',
        'IsValidFrom' => 'isValidFrom',
        'is_active_and_valid' => 'isActiveAndValid',
        'isActiveAndValid' => 'isActiveAndValid',
        'IsActiveAndValid' => 'isActiveAndValid',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'valid_to' => 'validTo',
        'validTo' => 'validTo',
        'ValidTo' => 'validTo',
        'valid_from' => 'validFrom',
        'validFrom' => 'validFrom',
        'ValidFrom' => 'validFrom',
        'children' => 'children',
        'Children' => 'children',
        'css_class' => 'cssClass',
        'cssClass' => 'cssClass',
        'CssClass' => 'cssClass',
        'url' => 'url',
        'Url' => 'url',
        'title' => 'title',
        'Title' => 'title',
        'node_type' => 'nodeType',
        'nodeType' => 'nodeType',
        'NodeType' => 'nodeType',
        'id' => 'id',
        'Id' => 'id',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::HAS_CHILDREN => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'has_children',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_VALID_TO => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_valid_to',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_VALID_FROM => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_valid_from',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_ACTIVE_AND_VALID => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_active_and_valid',
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
        self::CHILDREN => [
            'type' => 'Generated\Shared\Transfer\NavigationNodeStorageTransfer',
            'type_shim' => null,
            'name_underscore' => 'children',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CSS_CLASS => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'css_class',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::URL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'url',
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
        self::NODE_TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'node_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id',
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
     * @module ContentNavigationWidget
     *
     * @param bool|null $hasChildren
     *
     * @return $this
     */
    public function setHasChildren($hasChildren)
    {
        $this->hasChildren = $hasChildren;
        $this->modifiedProperties[self::HAS_CHILDREN] = true;

        return $this;
    }

    /**
     * @module ContentNavigationWidget
     *
     * @return bool|null
     */
    public function getHasChildren()
    {
        return $this->hasChildren;
    }

    /**
     * @module ContentNavigationWidget
     *
     * @param bool|null $hasChildren
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setHasChildrenOrFail($hasChildren)
    {
        if ($hasChildren === null) {
            $this->throwNullValueException(static::HAS_CHILDREN);
        }

        return $this->setHasChildren($hasChildren);
    }

    /**
     * @module ContentNavigationWidget
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getHasChildrenOrFail()
    {
        if ($this->hasChildren === null) {
            $this->throwNullValueException(static::HAS_CHILDREN);
        }

        return $this->hasChildren;
    }

    /**
     * @module ContentNavigationWidget
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireHasChildren()
    {
        $this->assertPropertyIsSet(self::HAS_CHILDREN);

        return $this;
    }

    /**
     * @module ContentNavigationWidget
     *
     * @param bool|null $isValidTo
     *
     * @return $this
     */
    public function setIsValidTo($isValidTo)
    {
        $this->isValidTo = $isValidTo;
        $this->modifiedProperties[self::IS_VALID_TO] = true;

        return $this;
    }

    /**
     * @module ContentNavigationWidget
     *
     * @return bool|null
     */
    public function getIsValidTo()
    {
        return $this->isValidTo;
    }

    /**
     * @module ContentNavigationWidget
     *
     * @param bool|null $isValidTo
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsValidToOrFail($isValidTo)
    {
        if ($isValidTo === null) {
            $this->throwNullValueException(static::IS_VALID_TO);
        }

        return $this->setIsValidTo($isValidTo);
    }

    /**
     * @module ContentNavigationWidget
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsValidToOrFail()
    {
        if ($this->isValidTo === null) {
            $this->throwNullValueException(static::IS_VALID_TO);
        }

        return $this->isValidTo;
    }

    /**
     * @module ContentNavigationWidget
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsValidTo()
    {
        $this->assertPropertyIsSet(self::IS_VALID_TO);

        return $this;
    }

    /**
     * @module ContentNavigationWidget
     *
     * @param bool|null $isValidFrom
     *
     * @return $this
     */
    public function setIsValidFrom($isValidFrom)
    {
        $this->isValidFrom = $isValidFrom;
        $this->modifiedProperties[self::IS_VALID_FROM] = true;

        return $this;
    }

    /**
     * @module ContentNavigationWidget
     *
     * @return bool|null
     */
    public function getIsValidFrom()
    {
        return $this->isValidFrom;
    }

    /**
     * @module ContentNavigationWidget
     *
     * @param bool|null $isValidFrom
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsValidFromOrFail($isValidFrom)
    {
        if ($isValidFrom === null) {
            $this->throwNullValueException(static::IS_VALID_FROM);
        }

        return $this->setIsValidFrom($isValidFrom);
    }

    /**
     * @module ContentNavigationWidget
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsValidFromOrFail()
    {
        if ($this->isValidFrom === null) {
            $this->throwNullValueException(static::IS_VALID_FROM);
        }

        return $this->isValidFrom;
    }

    /**
     * @module ContentNavigationWidget
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsValidFrom()
    {
        $this->assertPropertyIsSet(self::IS_VALID_FROM);

        return $this;
    }

    /**
     * @module ContentNavigationWidget
     *
     * @param bool|null $isActiveAndValid
     *
     * @return $this
     */
    public function setIsActiveAndValid($isActiveAndValid)
    {
        $this->isActiveAndValid = $isActiveAndValid;
        $this->modifiedProperties[self::IS_ACTIVE_AND_VALID] = true;

        return $this;
    }

    /**
     * @module ContentNavigationWidget
     *
     * @return bool|null
     */
    public function getIsActiveAndValid()
    {
        return $this->isActiveAndValid;
    }

    /**
     * @module ContentNavigationWidget
     *
     * @param bool|null $isActiveAndValid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsActiveAndValidOrFail($isActiveAndValid)
    {
        if ($isActiveAndValid === null) {
            $this->throwNullValueException(static::IS_ACTIVE_AND_VALID);
        }

        return $this->setIsActiveAndValid($isActiveAndValid);
    }

    /**
     * @module ContentNavigationWidget
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsActiveAndValidOrFail()
    {
        if ($this->isActiveAndValid === null) {
            $this->throwNullValueException(static::IS_ACTIVE_AND_VALID);
        }

        return $this->isActiveAndValid;
    }

    /**
     * @module ContentNavigationWidget
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsActiveAndValid()
    {
        $this->assertPropertyIsSet(self::IS_ACTIVE_AND_VALID);

        return $this;
    }

    /**
     * @module ContentNavigationWidget|NavigationStorage
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
     * @module ContentNavigationWidget|NavigationStorage
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module ContentNavigationWidget|NavigationStorage
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
     * @module ContentNavigationWidget|NavigationStorage
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
     * @module ContentNavigationWidget|NavigationStorage
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
     * @module ContentNavigationWidget|NavigationStorage
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
     * @module ContentNavigationWidget|NavigationStorage
     *
     * @return string|null
     */
    public function getValidTo()
    {
        return $this->validTo;
    }

    /**
     * @module ContentNavigationWidget|NavigationStorage
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
     * @module ContentNavigationWidget|NavigationStorage
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
     * @module ContentNavigationWidget|NavigationStorage
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
     * @module ContentNavigationWidget|NavigationStorage
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
     * @module ContentNavigationWidget|NavigationStorage
     *
     * @return string|null
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * @module ContentNavigationWidget|NavigationStorage
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
     * @module ContentNavigationWidget|NavigationStorage
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
     * @module ContentNavigationWidget|NavigationStorage
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
     * @module ContentNavigationWidget|ShopUi|NavigationStorage
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\NavigationNodeStorageTransfer[] $children
     *
     * @return $this
     */
    public function setChildren(ArrayObject $children)
    {
        $this->children = $children;
        $this->modifiedProperties[self::CHILDREN] = true;

        return $this;
    }

    /**
     * @module ContentNavigationWidget|ShopUi|NavigationStorage
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\NavigationNodeStorageTransfer[]
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @module ContentNavigationWidget|ShopUi|NavigationStorage
     *
     * @param \Generated\Shared\Transfer\NavigationNodeStorageTransfer $children
     *
     * @return $this
     */
    public function addChildren(NavigationNodeStorageTransfer $children)
    {
        $this->children[] = $children;
        $this->modifiedProperties[self::CHILDREN] = true;

        return $this;
    }

    /**
     * @module ContentNavigationWidget|ShopUi|NavigationStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireChildren()
    {
        $this->assertCollectionPropertyIsSet(self::CHILDREN);

        return $this;
    }

    /**
     * @module ContentNavigationWidget|ShopUi|NavigationStorage
     *
     * @param string|null $cssClass
     *
     * @return $this
     */
    public function setCssClass($cssClass)
    {
        $this->cssClass = $cssClass;
        $this->modifiedProperties[self::CSS_CLASS] = true;

        return $this;
    }

    /**
     * @module ContentNavigationWidget|ShopUi|NavigationStorage
     *
     * @return string|null
     */
    public function getCssClass()
    {
        return $this->cssClass;
    }

    /**
     * @module ContentNavigationWidget|ShopUi|NavigationStorage
     *
     * @param string|null $cssClass
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCssClassOrFail($cssClass)
    {
        if ($cssClass === null) {
            $this->throwNullValueException(static::CSS_CLASS);
        }

        return $this->setCssClass($cssClass);
    }

    /**
     * @module ContentNavigationWidget|ShopUi|NavigationStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCssClassOrFail()
    {
        if ($this->cssClass === null) {
            $this->throwNullValueException(static::CSS_CLASS);
        }

        return $this->cssClass;
    }

    /**
     * @module ContentNavigationWidget|ShopUi|NavigationStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCssClass()
    {
        $this->assertPropertyIsSet(self::CSS_CLASS);

        return $this;
    }

    /**
     * @module ContentNavigationWidget|ShopUi|NavigationStorage
     *
     * @param string|null $url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        $this->modifiedProperties[self::URL] = true;

        return $this;
    }

    /**
     * @module ContentNavigationWidget|ShopUi|NavigationStorage
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @module ContentNavigationWidget|ShopUi|NavigationStorage
     *
     * @param string|null $url
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUrlOrFail($url)
    {
        if ($url === null) {
            $this->throwNullValueException(static::URL);
        }

        return $this->setUrl($url);
    }

    /**
     * @module ContentNavigationWidget|ShopUi|NavigationStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUrlOrFail()
    {
        if ($this->url === null) {
            $this->throwNullValueException(static::URL);
        }

        return $this->url;
    }

    /**
     * @module ContentNavigationWidget|ShopUi|NavigationStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUrl()
    {
        $this->assertPropertyIsSet(self::URL);

        return $this;
    }

    /**
     * @module ContentNavigationWidget|ShopUi|NavigationStorage
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
     * @module ContentNavigationWidget|ShopUi|NavigationStorage
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @module ContentNavigationWidget|ShopUi|NavigationStorage
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
     * @module ContentNavigationWidget|ShopUi|NavigationStorage
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
     * @module ContentNavigationWidget|ShopUi|NavigationStorage
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
     * @module NavigationStorage
     *
     * @param string|null $nodeType
     *
     * @return $this
     */
    public function setNodeType($nodeType)
    {
        $this->nodeType = $nodeType;
        $this->modifiedProperties[self::NODE_TYPE] = true;

        return $this;
    }

    /**
     * @module NavigationStorage
     *
     * @return string|null
     */
    public function getNodeType()
    {
        return $this->nodeType;
    }

    /**
     * @module NavigationStorage
     *
     * @param string|null $nodeType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNodeTypeOrFail($nodeType)
    {
        if ($nodeType === null) {
            $this->throwNullValueException(static::NODE_TYPE);
        }

        return $this->setNodeType($nodeType);
    }

    /**
     * @module NavigationStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNodeTypeOrFail()
    {
        if ($this->nodeType === null) {
            $this->throwNullValueException(static::NODE_TYPE);
        }

        return $this->nodeType;
    }

    /**
     * @module NavigationStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNodeType()
    {
        $this->assertPropertyIsSet(self::NODE_TYPE);

        return $this;
    }

    /**
     * @module NavigationStorage
     *
     * @param int|null $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        $this->modifiedProperties[self::ID] = true;

        return $this;
    }

    /**
     * @module NavigationStorage
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @module NavigationStorage
     *
     * @param int|null $id
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdOrFail($id)
    {
        if ($id === null) {
            $this->throwNullValueException(static::ID);
        }

        return $this->setId($id);
    }

    /**
     * @module NavigationStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdOrFail()
    {
        if ($this->id === null) {
            $this->throwNullValueException(static::ID);
        }

        return $this->id;
    }

    /**
     * @module NavigationStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireId()
    {
        $this->assertPropertyIsSet(self::ID);

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
                case 'hasChildren':
                case 'isValidTo':
                case 'isValidFrom':
                case 'isActiveAndValid':
                case 'isActive':
                case 'validTo':
                case 'validFrom':
                case 'cssClass':
                case 'url':
                case 'title':
                case 'nodeType':
                case 'id':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'children':
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
                case 'hasChildren':
                case 'isValidTo':
                case 'isValidFrom':
                case 'isActiveAndValid':
                case 'isActive':
                case 'validTo':
                case 'validFrom':
                case 'cssClass':
                case 'url':
                case 'title':
                case 'nodeType':
                case 'id':
                    $values[$arrayKey] = $value;

                    break;
                case 'children':
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
                case 'hasChildren':
                case 'isValidTo':
                case 'isValidFrom':
                case 'isActiveAndValid':
                case 'isActive':
                case 'validTo':
                case 'validFrom':
                case 'cssClass':
                case 'url':
                case 'title':
                case 'nodeType':
                case 'id':
                    $values[$arrayKey] = $value;

                    break;
                case 'children':
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
        $this->children = $this->children ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'hasChildren' => $this->hasChildren,
            'isValidTo' => $this->isValidTo,
            'isValidFrom' => $this->isValidFrom,
            'isActiveAndValid' => $this->isActiveAndValid,
            'isActive' => $this->isActive,
            'validTo' => $this->validTo,
            'validFrom' => $this->validFrom,
            'cssClass' => $this->cssClass,
            'url' => $this->url,
            'title' => $this->title,
            'nodeType' => $this->nodeType,
            'id' => $this->id,
            'children' => $this->children,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'has_children' => $this->hasChildren,
            'is_valid_to' => $this->isValidTo,
            'is_valid_from' => $this->isValidFrom,
            'is_active_and_valid' => $this->isActiveAndValid,
            'is_active' => $this->isActive,
            'valid_to' => $this->validTo,
            'valid_from' => $this->validFrom,
            'css_class' => $this->cssClass,
            'url' => $this->url,
            'title' => $this->title,
            'node_type' => $this->nodeType,
            'id' => $this->id,
            'children' => $this->children,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'has_children' => $this->hasChildren instanceof AbstractTransfer ? $this->hasChildren->toArray(true, false) : $this->hasChildren,
            'is_valid_to' => $this->isValidTo instanceof AbstractTransfer ? $this->isValidTo->toArray(true, false) : $this->isValidTo,
            'is_valid_from' => $this->isValidFrom instanceof AbstractTransfer ? $this->isValidFrom->toArray(true, false) : $this->isValidFrom,
            'is_active_and_valid' => $this->isActiveAndValid instanceof AbstractTransfer ? $this->isActiveAndValid->toArray(true, false) : $this->isActiveAndValid,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'valid_to' => $this->validTo instanceof AbstractTransfer ? $this->validTo->toArray(true, false) : $this->validTo,
            'valid_from' => $this->validFrom instanceof AbstractTransfer ? $this->validFrom->toArray(true, false) : $this->validFrom,
            'css_class' => $this->cssClass instanceof AbstractTransfer ? $this->cssClass->toArray(true, false) : $this->cssClass,
            'url' => $this->url instanceof AbstractTransfer ? $this->url->toArray(true, false) : $this->url,
            'title' => $this->title instanceof AbstractTransfer ? $this->title->toArray(true, false) : $this->title,
            'node_type' => $this->nodeType instanceof AbstractTransfer ? $this->nodeType->toArray(true, false) : $this->nodeType,
            'id' => $this->id instanceof AbstractTransfer ? $this->id->toArray(true, false) : $this->id,
            'children' => $this->children instanceof AbstractTransfer ? $this->children->toArray(true, false) : $this->addValuesToCollection($this->children, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'hasChildren' => $this->hasChildren instanceof AbstractTransfer ? $this->hasChildren->toArray(true, true) : $this->hasChildren,
            'isValidTo' => $this->isValidTo instanceof AbstractTransfer ? $this->isValidTo->toArray(true, true) : $this->isValidTo,
            'isValidFrom' => $this->isValidFrom instanceof AbstractTransfer ? $this->isValidFrom->toArray(true, true) : $this->isValidFrom,
            'isActiveAndValid' => $this->isActiveAndValid instanceof AbstractTransfer ? $this->isActiveAndValid->toArray(true, true) : $this->isActiveAndValid,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'validTo' => $this->validTo instanceof AbstractTransfer ? $this->validTo->toArray(true, true) : $this->validTo,
            'validFrom' => $this->validFrom instanceof AbstractTransfer ? $this->validFrom->toArray(true, true) : $this->validFrom,
            'cssClass' => $this->cssClass instanceof AbstractTransfer ? $this->cssClass->toArray(true, true) : $this->cssClass,
            'url' => $this->url instanceof AbstractTransfer ? $this->url->toArray(true, true) : $this->url,
            'title' => $this->title instanceof AbstractTransfer ? $this->title->toArray(true, true) : $this->title,
            'nodeType' => $this->nodeType instanceof AbstractTransfer ? $this->nodeType->toArray(true, true) : $this->nodeType,
            'id' => $this->id instanceof AbstractTransfer ? $this->id->toArray(true, true) : $this->id,
            'children' => $this->children instanceof AbstractTransfer ? $this->children->toArray(true, true) : $this->addValuesToCollection($this->children, true, true),
        ];
    }
}
