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
class SpyNavigationNodeLocalizedAttributesEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_NAVIGATION_NODE_LOCALIZED_ATTRIBUTES = 'idNavigationNodeLocalizedAttributes';

    /**
     * @var string
     */
    public const FK_LOCALE = 'fkLocale';

    /**
     * @var string
     */
    public const FK_NAVIGATION_NODE = 'fkNavigationNode';

    /**
     * @var string
     */
    public const FK_URL = 'fkUrl';

    /**
     * @var string
     */
    public const CSS_CLASS = 'cssClass';

    /**
     * @var string
     */
    public const EXTERNAL_URL = 'externalUrl';

    /**
     * @var string
     */
    public const LINK = 'link';

    /**
     * @var string
     */
    public const TITLE = 'title';

    /**
     * @var string
     */
    public const SPY_NAVIGATION_NODE = 'spyNavigationNode';

    /**
     * @var string
     */
    public const SPY_LOCALE = 'spyLocale';

    /**
     * @var string
     */
    public const SPY_URL = 'spyUrl';

    /**
     * @var integer|null
     */
    protected $idNavigationNodeLocalizedAttributes;

    /**
     * @var integer|null
     */
    protected $fkLocale;

    /**
     * @var integer|null
     */
    protected $fkNavigationNode;

    /**
     * @var integer|null
     */
    protected $fkUrl;

    /**
     * @var string|null
     */
    protected $cssClass;

    /**
     * @var string|null
     */
    protected $externalUrl;

    /**
     * @var string|null
     */
    protected $link;

    /**
     * @var string|null
     */
    protected $title;

    /**
     * @var \Generated\Shared\Transfer\SpyNavigationNodeEntityTransfer|null
     */
    protected $spyNavigationNode;

    /**
     * @var \Generated\Shared\Transfer\SpyLocaleEntityTransfer|null
     */
    protected $spyLocale;

    /**
     * @var \Generated\Shared\Transfer\SpyUrlEntityTransfer|null
     */
    protected $spyUrl;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_navigation_node_localized_attributes' => 'idNavigationNodeLocalizedAttributes',
        'idNavigationNodeLocalizedAttributes' => 'idNavigationNodeLocalizedAttributes',
        'IdNavigationNodeLocalizedAttributes' => 'idNavigationNodeLocalizedAttributes',
        'fk_locale' => 'fkLocale',
        'fkLocale' => 'fkLocale',
        'FkLocale' => 'fkLocale',
        'fk_navigation_node' => 'fkNavigationNode',
        'fkNavigationNode' => 'fkNavigationNode',
        'FkNavigationNode' => 'fkNavigationNode',
        'fk_url' => 'fkUrl',
        'fkUrl' => 'fkUrl',
        'FkUrl' => 'fkUrl',
        'css_class' => 'cssClass',
        'cssClass' => 'cssClass',
        'CssClass' => 'cssClass',
        'external_url' => 'externalUrl',
        'externalUrl' => 'externalUrl',
        'ExternalUrl' => 'externalUrl',
        'link' => 'link',
        'Link' => 'link',
        'title' => 'title',
        'Title' => 'title',
        'spy_navigation_node' => 'spyNavigationNode',
        'spyNavigationNode' => 'spyNavigationNode',
        'SpyNavigationNode' => 'spyNavigationNode',
        'spy_locale' => 'spyLocale',
        'spyLocale' => 'spyLocale',
        'SpyLocale' => 'spyLocale',
        'spy_url' => 'spyUrl',
        'spyUrl' => 'spyUrl',
        'SpyUrl' => 'spyUrl',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_NAVIGATION_NODE_LOCALIZED_ATTRIBUTES => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_navigation_node_localized_attributes',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_LOCALE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_locale',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_NAVIGATION_NODE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_navigation_node',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_URL => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_url',
            'is_collection' => false,
            'is_transfer' => false,
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
        self::EXTERNAL_URL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'external_url',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LINK => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'link',
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
        self::SPY_NAVIGATION_NODE => [
            'type' => 'Generated\Shared\Transfer\SpyNavigationNodeEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_navigation_node',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_LOCALE => [
            'type' => 'Generated\Shared\Transfer\SpyLocaleEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_locale',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_URL => [
            'type' => 'Generated\Shared\Transfer\SpyUrlEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_url',
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
    public static $entityNamespace = 'Orm\Zed\Navigation\Persistence\SpyNavigationNodeLocalizedAttributes';


    /**
     * @module 
     *
     * @param integer|null $idNavigationNodeLocalizedAttributes
     *
     * @return $this
     */
    public function setIdNavigationNodeLocalizedAttributes($idNavigationNodeLocalizedAttributes)
    {
        $this->idNavigationNodeLocalizedAttributes = $idNavigationNodeLocalizedAttributes;
        $this->modifiedProperties[self::ID_NAVIGATION_NODE_LOCALIZED_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdNavigationNodeLocalizedAttributes()
    {
        return $this->idNavigationNodeLocalizedAttributes;
    }

    /**
     * @module 
     *
     * @param integer|null $idNavigationNodeLocalizedAttributes
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdNavigationNodeLocalizedAttributesOrFail($idNavigationNodeLocalizedAttributes)
    {
        if ($idNavigationNodeLocalizedAttributes === null) {
            $this->throwNullValueException(static::ID_NAVIGATION_NODE_LOCALIZED_ATTRIBUTES);
        }

        return $this->setIdNavigationNodeLocalizedAttributes($idNavigationNodeLocalizedAttributes);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdNavigationNodeLocalizedAttributesOrFail()
    {
        if ($this->idNavigationNodeLocalizedAttributes === null) {
            $this->throwNullValueException(static::ID_NAVIGATION_NODE_LOCALIZED_ATTRIBUTES);
        }

        return $this->idNavigationNodeLocalizedAttributes;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdNavigationNodeLocalizedAttributes()
    {
        $this->assertPropertyIsSet(self::ID_NAVIGATION_NODE_LOCALIZED_ATTRIBUTES);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkLocale
     *
     * @return $this
     */
    public function setFkLocale($fkLocale)
    {
        $this->fkLocale = $fkLocale;
        $this->modifiedProperties[self::FK_LOCALE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkLocale()
    {
        return $this->fkLocale;
    }

    /**
     * @module 
     *
     * @param integer|null $fkLocale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkLocaleOrFail($fkLocale)
    {
        if ($fkLocale === null) {
            $this->throwNullValueException(static::FK_LOCALE);
        }

        return $this->setFkLocale($fkLocale);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkLocaleOrFail()
    {
        if ($this->fkLocale === null) {
            $this->throwNullValueException(static::FK_LOCALE);
        }

        return $this->fkLocale;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkLocale()
    {
        $this->assertPropertyIsSet(self::FK_LOCALE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkNavigationNode
     *
     * @return $this
     */
    public function setFkNavigationNode($fkNavigationNode)
    {
        $this->fkNavigationNode = $fkNavigationNode;
        $this->modifiedProperties[self::FK_NAVIGATION_NODE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkNavigationNode()
    {
        return $this->fkNavigationNode;
    }

    /**
     * @module 
     *
     * @param integer|null $fkNavigationNode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkNavigationNodeOrFail($fkNavigationNode)
    {
        if ($fkNavigationNode === null) {
            $this->throwNullValueException(static::FK_NAVIGATION_NODE);
        }

        return $this->setFkNavigationNode($fkNavigationNode);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkNavigationNodeOrFail()
    {
        if ($this->fkNavigationNode === null) {
            $this->throwNullValueException(static::FK_NAVIGATION_NODE);
        }

        return $this->fkNavigationNode;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkNavigationNode()
    {
        $this->assertPropertyIsSet(self::FK_NAVIGATION_NODE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkUrl
     *
     * @return $this
     */
    public function setFkUrl($fkUrl)
    {
        $this->fkUrl = $fkUrl;
        $this->modifiedProperties[self::FK_URL] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkUrl()
    {
        return $this->fkUrl;
    }

    /**
     * @module 
     *
     * @param integer|null $fkUrl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkUrlOrFail($fkUrl)
    {
        if ($fkUrl === null) {
            $this->throwNullValueException(static::FK_URL);
        }

        return $this->setFkUrl($fkUrl);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkUrlOrFail()
    {
        if ($this->fkUrl === null) {
            $this->throwNullValueException(static::FK_URL);
        }

        return $this->fkUrl;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkUrl()
    {
        $this->assertPropertyIsSet(self::FK_URL);

        return $this;
    }

    /**
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getCssClass()
    {
        return $this->cssClass;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param string|null $externalUrl
     *
     * @return $this
     */
    public function setExternalUrl($externalUrl)
    {
        $this->externalUrl = $externalUrl;
        $this->modifiedProperties[self::EXTERNAL_URL] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getExternalUrl()
    {
        return $this->externalUrl;
    }

    /**
     * @module 
     *
     * @param string|null $externalUrl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setExternalUrlOrFail($externalUrl)
    {
        if ($externalUrl === null) {
            $this->throwNullValueException(static::EXTERNAL_URL);
        }

        return $this->setExternalUrl($externalUrl);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getExternalUrlOrFail()
    {
        if ($this->externalUrl === null) {
            $this->throwNullValueException(static::EXTERNAL_URL);
        }

        return $this->externalUrl;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireExternalUrl()
    {
        $this->assertPropertyIsSet(self::EXTERNAL_URL);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $link
     *
     * @return $this
     */
    public function setLink($link)
    {
        $this->link = $link;
        $this->modifiedProperties[self::LINK] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @module 
     *
     * @param string|null $link
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLinkOrFail($link)
    {
        if ($link === null) {
            $this->throwNullValueException(static::LINK);
        }

        return $this->setLink($link);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getLinkOrFail()
    {
        if ($this->link === null) {
            $this->throwNullValueException(static::LINK);
        }

        return $this->link;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLink()
    {
        $this->assertPropertyIsSet(self::LINK);

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
     * @param \Generated\Shared\Transfer\SpyNavigationNodeEntityTransfer|null $spyNavigationNode
     *
     * @return $this
     */
    public function setSpyNavigationNode(SpyNavigationNodeEntityTransfer $spyNavigationNode = null)
    {
        $this->spyNavigationNode = $spyNavigationNode;
        $this->modifiedProperties[self::SPY_NAVIGATION_NODE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyNavigationNodeEntityTransfer|null
     */
    public function getSpyNavigationNode()
    {
        return $this->spyNavigationNode;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyNavigationNodeEntityTransfer $spyNavigationNode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyNavigationNodeOrFail(SpyNavigationNodeEntityTransfer $spyNavigationNode)
    {
        return $this->setSpyNavigationNode($spyNavigationNode);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyNavigationNodeEntityTransfer
     */
    public function getSpyNavigationNodeOrFail()
    {
        if ($this->spyNavigationNode === null) {
            $this->throwNullValueException(static::SPY_NAVIGATION_NODE);
        }

        return $this->spyNavigationNode;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyNavigationNode()
    {
        $this->assertPropertyIsSet(self::SPY_NAVIGATION_NODE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyLocaleEntityTransfer|null $spyLocale
     *
     * @return $this
     */
    public function setSpyLocale(SpyLocaleEntityTransfer $spyLocale = null)
    {
        $this->spyLocale = $spyLocale;
        $this->modifiedProperties[self::SPY_LOCALE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyLocaleEntityTransfer|null
     */
    public function getSpyLocale()
    {
        return $this->spyLocale;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyLocaleEntityTransfer $spyLocale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyLocaleOrFail(SpyLocaleEntityTransfer $spyLocale)
    {
        return $this->setSpyLocale($spyLocale);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyLocaleEntityTransfer
     */
    public function getSpyLocaleOrFail()
    {
        if ($this->spyLocale === null) {
            $this->throwNullValueException(static::SPY_LOCALE);
        }

        return $this->spyLocale;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyLocale()
    {
        $this->assertPropertyIsSet(self::SPY_LOCALE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyUrlEntityTransfer|null $spyUrl
     *
     * @return $this
     */
    public function setSpyUrl(SpyUrlEntityTransfer $spyUrl = null)
    {
        $this->spyUrl = $spyUrl;
        $this->modifiedProperties[self::SPY_URL] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyUrlEntityTransfer|null
     */
    public function getSpyUrl()
    {
        return $this->spyUrl;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyUrlEntityTransfer $spyUrl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyUrlOrFail(SpyUrlEntityTransfer $spyUrl)
    {
        return $this->setSpyUrl($spyUrl);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyUrlEntityTransfer
     */
    public function getSpyUrlOrFail()
    {
        if ($this->spyUrl === null) {
            $this->throwNullValueException(static::SPY_URL);
        }

        return $this->spyUrl;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyUrl()
    {
        $this->assertPropertyIsSet(self::SPY_URL);

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
                case 'idNavigationNodeLocalizedAttributes':
                case 'fkLocale':
                case 'fkNavigationNode':
                case 'fkUrl':
                case 'cssClass':
                case 'externalUrl':
                case 'link':
                case 'title':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyNavigationNode':
                case 'spyLocale':
                case 'spyUrl':
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
                case 'idNavigationNodeLocalizedAttributes':
                case 'fkLocale':
                case 'fkNavigationNode':
                case 'fkUrl':
                case 'cssClass':
                case 'externalUrl':
                case 'link':
                case 'title':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyNavigationNode':
                case 'spyLocale':
                case 'spyUrl':
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
                case 'idNavigationNodeLocalizedAttributes':
                case 'fkLocale':
                case 'fkNavigationNode':
                case 'fkUrl':
                case 'cssClass':
                case 'externalUrl':
                case 'link':
                case 'title':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyNavigationNode':
                case 'spyLocale':
                case 'spyUrl':
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
            'idNavigationNodeLocalizedAttributes' => $this->idNavigationNodeLocalizedAttributes,
            'fkLocale' => $this->fkLocale,
            'fkNavigationNode' => $this->fkNavigationNode,
            'fkUrl' => $this->fkUrl,
            'cssClass' => $this->cssClass,
            'externalUrl' => $this->externalUrl,
            'link' => $this->link,
            'title' => $this->title,
            'spyNavigationNode' => $this->spyNavigationNode,
            'spyLocale' => $this->spyLocale,
            'spyUrl' => $this->spyUrl,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_navigation_node_localized_attributes' => $this->idNavigationNodeLocalizedAttributes,
            'fk_locale' => $this->fkLocale,
            'fk_navigation_node' => $this->fkNavigationNode,
            'fk_url' => $this->fkUrl,
            'css_class' => $this->cssClass,
            'external_url' => $this->externalUrl,
            'link' => $this->link,
            'title' => $this->title,
            'spy_navigation_node' => $this->spyNavigationNode,
            'spy_locale' => $this->spyLocale,
            'spy_url' => $this->spyUrl,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_navigation_node_localized_attributes' => $this->idNavigationNodeLocalizedAttributes instanceof AbstractTransfer ? $this->idNavigationNodeLocalizedAttributes->toArray(true, false) : $this->idNavigationNodeLocalizedAttributes,
            'fk_locale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, false) : $this->fkLocale,
            'fk_navigation_node' => $this->fkNavigationNode instanceof AbstractTransfer ? $this->fkNavigationNode->toArray(true, false) : $this->fkNavigationNode,
            'fk_url' => $this->fkUrl instanceof AbstractTransfer ? $this->fkUrl->toArray(true, false) : $this->fkUrl,
            'css_class' => $this->cssClass instanceof AbstractTransfer ? $this->cssClass->toArray(true, false) : $this->cssClass,
            'external_url' => $this->externalUrl instanceof AbstractTransfer ? $this->externalUrl->toArray(true, false) : $this->externalUrl,
            'link' => $this->link instanceof AbstractTransfer ? $this->link->toArray(true, false) : $this->link,
            'title' => $this->title instanceof AbstractTransfer ? $this->title->toArray(true, false) : $this->title,
            'spy_navigation_node' => $this->spyNavigationNode instanceof AbstractTransfer ? $this->spyNavigationNode->toArray(true, false) : $this->spyNavigationNode,
            'spy_locale' => $this->spyLocale instanceof AbstractTransfer ? $this->spyLocale->toArray(true, false) : $this->spyLocale,
            'spy_url' => $this->spyUrl instanceof AbstractTransfer ? $this->spyUrl->toArray(true, false) : $this->spyUrl,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idNavigationNodeLocalizedAttributes' => $this->idNavigationNodeLocalizedAttributes instanceof AbstractTransfer ? $this->idNavigationNodeLocalizedAttributes->toArray(true, true) : $this->idNavigationNodeLocalizedAttributes,
            'fkLocale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, true) : $this->fkLocale,
            'fkNavigationNode' => $this->fkNavigationNode instanceof AbstractTransfer ? $this->fkNavigationNode->toArray(true, true) : $this->fkNavigationNode,
            'fkUrl' => $this->fkUrl instanceof AbstractTransfer ? $this->fkUrl->toArray(true, true) : $this->fkUrl,
            'cssClass' => $this->cssClass instanceof AbstractTransfer ? $this->cssClass->toArray(true, true) : $this->cssClass,
            'externalUrl' => $this->externalUrl instanceof AbstractTransfer ? $this->externalUrl->toArray(true, true) : $this->externalUrl,
            'link' => $this->link instanceof AbstractTransfer ? $this->link->toArray(true, true) : $this->link,
            'title' => $this->title instanceof AbstractTransfer ? $this->title->toArray(true, true) : $this->title,
            'spyNavigationNode' => $this->spyNavigationNode instanceof AbstractTransfer ? $this->spyNavigationNode->toArray(true, true) : $this->spyNavigationNode,
            'spyLocale' => $this->spyLocale instanceof AbstractTransfer ? $this->spyLocale->toArray(true, true) : $this->spyLocale,
            'spyUrl' => $this->spyUrl instanceof AbstractTransfer ? $this->spyUrl->toArray(true, true) : $this->spyUrl,
        ];
    }
}
