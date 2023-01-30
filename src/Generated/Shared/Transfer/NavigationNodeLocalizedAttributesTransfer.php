<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class NavigationNodeLocalizedAttributesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const FK_LOCALE = 'fkLocale';

    /**
     * @var string
     */
    public const FK_URL = 'fkUrl';

    /**
     * @var string
     */
    public const CMS_PAGE_URL = 'cmsPageUrl';

    /**
     * @var string
     */
    public const CATEGORY_URL = 'categoryUrl';

    /**
     * @var string
     */
    public const TITLE = 'title';

    /**
     * @var string
     */
    public const CSS_CLASS = 'cssClass';

    /**
     * @var string
     */
    public const LINK = 'link';

    /**
     * @var string
     */
    public const EXTERNAL_URL = 'externalUrl';

    /**
     * @var string
     */
    public const URL = 'url';

    /**
     * @var string
     */
    public const ID_NAVIGATION_NODE_LOCALIZED_ATTRIBUTES = 'idNavigationNodeLocalizedAttributes';

    /**
     * @var string
     */
    public const FK_NAVIGATION_NODE = 'fkNavigationNode';

    /**
     * @var int|null
     */
    protected $fkLocale;

    /**
     * @var int|null
     */
    protected $fkUrl;

    /**
     * @var string|null
     */
    protected $cmsPageUrl;

    /**
     * @var string|null
     */
    protected $categoryUrl;

    /**
     * @var string|null
     */
    protected $title;

    /**
     * @var string|null
     */
    protected $cssClass;

    /**
     * @var string|null
     */
    protected $link;

    /**
     * @var string|null
     */
    protected $externalUrl;

    /**
     * @var string|null
     */
    protected $url;

    /**
     * @var int|null
     */
    protected $idNavigationNodeLocalizedAttributes;

    /**
     * @var int|null
     */
    protected $fkNavigationNode;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'fk_locale' => 'fkLocale',
        'fkLocale' => 'fkLocale',
        'FkLocale' => 'fkLocale',
        'fk_url' => 'fkUrl',
        'fkUrl' => 'fkUrl',
        'FkUrl' => 'fkUrl',
        'cms_page_url' => 'cmsPageUrl',
        'cmsPageUrl' => 'cmsPageUrl',
        'CmsPageUrl' => 'cmsPageUrl',
        'category_url' => 'categoryUrl',
        'categoryUrl' => 'categoryUrl',
        'CategoryUrl' => 'categoryUrl',
        'title' => 'title',
        'Title' => 'title',
        'css_class' => 'cssClass',
        'cssClass' => 'cssClass',
        'CssClass' => 'cssClass',
        'link' => 'link',
        'Link' => 'link',
        'external_url' => 'externalUrl',
        'externalUrl' => 'externalUrl',
        'ExternalUrl' => 'externalUrl',
        'url' => 'url',
        'Url' => 'url',
        'id_navigation_node_localized_attributes' => 'idNavigationNodeLocalizedAttributes',
        'idNavigationNodeLocalizedAttributes' => 'idNavigationNodeLocalizedAttributes',
        'IdNavigationNodeLocalizedAttributes' => 'idNavigationNodeLocalizedAttributes',
        'fk_navigation_node' => 'fkNavigationNode',
        'fkNavigationNode' => 'fkNavigationNode',
        'FkNavigationNode' => 'fkNavigationNode',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::FK_LOCALE => [
            'type' => 'int',
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
        self::FK_URL => [
            'type' => 'int',
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
        self::CMS_PAGE_URL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'cms_page_url',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CATEGORY_URL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'category_url',
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
        self::ID_NAVIGATION_NODE_LOCALIZED_ATTRIBUTES => [
            'type' => 'int',
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
        self::FK_NAVIGATION_NODE => [
            'type' => 'int',
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
    ];

    /**
     * @module NavigationGui|Navigation
     *
     * @param int|null $fkLocale
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
     * @module NavigationGui|Navigation
     *
     * @return int|null
     */
    public function getFkLocale()
    {
        return $this->fkLocale;
    }

    /**
     * @module NavigationGui|Navigation
     *
     * @param int|null $fkLocale
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
     * @module NavigationGui|Navigation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkLocaleOrFail()
    {
        if ($this->fkLocale === null) {
            $this->throwNullValueException(static::FK_LOCALE);
        }

        return $this->fkLocale;
    }

    /**
     * @module NavigationGui|Navigation
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
     * @module NavigationGui|Navigation
     *
     * @param int|null $fkUrl
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
     * @module NavigationGui|Navigation
     *
     * @return int|null
     */
    public function getFkUrl()
    {
        return $this->fkUrl;
    }

    /**
     * @module NavigationGui|Navigation
     *
     * @param int|null $fkUrl
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
     * @module NavigationGui|Navigation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkUrlOrFail()
    {
        if ($this->fkUrl === null) {
            $this->throwNullValueException(static::FK_URL);
        }

        return $this->fkUrl;
    }

    /**
     * @module NavigationGui|Navigation
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
     * @module NavigationGui|NavigationStorage
     *
     * @param string|null $cmsPageUrl
     *
     * @return $this
     */
    public function setCmsPageUrl($cmsPageUrl)
    {
        $this->cmsPageUrl = $cmsPageUrl;
        $this->modifiedProperties[self::CMS_PAGE_URL] = true;

        return $this;
    }

    /**
     * @module NavigationGui|NavigationStorage
     *
     * @return string|null
     */
    public function getCmsPageUrl()
    {
        return $this->cmsPageUrl;
    }

    /**
     * @module NavigationGui|NavigationStorage
     *
     * @param string|null $cmsPageUrl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCmsPageUrlOrFail($cmsPageUrl)
    {
        if ($cmsPageUrl === null) {
            $this->throwNullValueException(static::CMS_PAGE_URL);
        }

        return $this->setCmsPageUrl($cmsPageUrl);
    }

    /**
     * @module NavigationGui|NavigationStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCmsPageUrlOrFail()
    {
        if ($this->cmsPageUrl === null) {
            $this->throwNullValueException(static::CMS_PAGE_URL);
        }

        return $this->cmsPageUrl;
    }

    /**
     * @module NavigationGui|NavigationStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCmsPageUrl()
    {
        $this->assertPropertyIsSet(self::CMS_PAGE_URL);

        return $this;
    }

    /**
     * @module NavigationGui|NavigationStorage
     *
     * @param string|null $categoryUrl
     *
     * @return $this
     */
    public function setCategoryUrl($categoryUrl)
    {
        $this->categoryUrl = $categoryUrl;
        $this->modifiedProperties[self::CATEGORY_URL] = true;

        return $this;
    }

    /**
     * @module NavigationGui|NavigationStorage
     *
     * @return string|null
     */
    public function getCategoryUrl()
    {
        return $this->categoryUrl;
    }

    /**
     * @module NavigationGui|NavigationStorage
     *
     * @param string|null $categoryUrl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCategoryUrlOrFail($categoryUrl)
    {
        if ($categoryUrl === null) {
            $this->throwNullValueException(static::CATEGORY_URL);
        }

        return $this->setCategoryUrl($categoryUrl);
    }

    /**
     * @module NavigationGui|NavigationStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCategoryUrlOrFail()
    {
        if ($this->categoryUrl === null) {
            $this->throwNullValueException(static::CATEGORY_URL);
        }

        return $this->categoryUrl;
    }

    /**
     * @module NavigationGui|NavigationStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCategoryUrl()
    {
        $this->assertPropertyIsSet(self::CATEGORY_URL);

        return $this;
    }

    /**
     * @module NavigationStorage|Navigation
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
     * @module NavigationStorage|Navigation
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @module NavigationStorage|Navigation
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
     * @module NavigationStorage|Navigation
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
     * @module NavigationStorage|Navigation
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
     * @module NavigationStorage|Navigation
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
     * @module NavigationStorage|Navigation
     *
     * @return string|null
     */
    public function getCssClass()
    {
        return $this->cssClass;
    }

    /**
     * @module NavigationStorage|Navigation
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
     * @module NavigationStorage|Navigation
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
     * @module NavigationStorage|Navigation
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
     * @module NavigationStorage|Navigation
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
     * @module NavigationStorage|Navigation
     *
     * @return string|null
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @module NavigationStorage|Navigation
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
     * @module NavigationStorage|Navigation
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
     * @module NavigationStorage|Navigation
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
     * @module NavigationStorage|Navigation
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
     * @module NavigationStorage|Navigation
     *
     * @return string|null
     */
    public function getExternalUrl()
    {
        return $this->externalUrl;
    }

    /**
     * @module NavigationStorage|Navigation
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
     * @module NavigationStorage|Navigation
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
     * @module NavigationStorage|Navigation
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
     * @module NavigationStorage|Navigation
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
     * @module NavigationStorage|Navigation
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @module NavigationStorage|Navigation
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
     * @module NavigationStorage|Navigation
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
     * @module NavigationStorage|Navigation
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
     * @module Navigation
     *
     * @param int|null $idNavigationNodeLocalizedAttributes
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
     * @module Navigation
     *
     * @return int|null
     */
    public function getIdNavigationNodeLocalizedAttributes()
    {
        return $this->idNavigationNodeLocalizedAttributes;
    }

    /**
     * @module Navigation
     *
     * @param int|null $idNavigationNodeLocalizedAttributes
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
     * @module Navigation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdNavigationNodeLocalizedAttributesOrFail()
    {
        if ($this->idNavigationNodeLocalizedAttributes === null) {
            $this->throwNullValueException(static::ID_NAVIGATION_NODE_LOCALIZED_ATTRIBUTES);
        }

        return $this->idNavigationNodeLocalizedAttributes;
    }

    /**
     * @module Navigation
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
     * @module Navigation
     *
     * @param int|null $fkNavigationNode
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
     * @module Navigation
     *
     * @return int|null
     */
    public function getFkNavigationNode()
    {
        return $this->fkNavigationNode;
    }

    /**
     * @module Navigation
     *
     * @param int|null $fkNavigationNode
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
     * @module Navigation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkNavigationNodeOrFail()
    {
        if ($this->fkNavigationNode === null) {
            $this->throwNullValueException(static::FK_NAVIGATION_NODE);
        }

        return $this->fkNavigationNode;
    }

    /**
     * @module Navigation
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
                case 'fkLocale':
                case 'fkUrl':
                case 'cmsPageUrl':
                case 'categoryUrl':
                case 'title':
                case 'cssClass':
                case 'link':
                case 'externalUrl':
                case 'url':
                case 'idNavigationNodeLocalizedAttributes':
                case 'fkNavigationNode':
                    $this->$normalizedPropertyName = $value;
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
                case 'fkLocale':
                case 'fkUrl':
                case 'cmsPageUrl':
                case 'categoryUrl':
                case 'title':
                case 'cssClass':
                case 'link':
                case 'externalUrl':
                case 'url':
                case 'idNavigationNodeLocalizedAttributes':
                case 'fkNavigationNode':
                    $values[$arrayKey] = $value;

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
                case 'fkLocale':
                case 'fkUrl':
                case 'cmsPageUrl':
                case 'categoryUrl':
                case 'title':
                case 'cssClass':
                case 'link':
                case 'externalUrl':
                case 'url':
                case 'idNavigationNodeLocalizedAttributes':
                case 'fkNavigationNode':
                    $values[$arrayKey] = $value;

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
            'fkLocale' => $this->fkLocale,
            'fkUrl' => $this->fkUrl,
            'cmsPageUrl' => $this->cmsPageUrl,
            'categoryUrl' => $this->categoryUrl,
            'title' => $this->title,
            'cssClass' => $this->cssClass,
            'link' => $this->link,
            'externalUrl' => $this->externalUrl,
            'url' => $this->url,
            'idNavigationNodeLocalizedAttributes' => $this->idNavigationNodeLocalizedAttributes,
            'fkNavigationNode' => $this->fkNavigationNode,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'fk_locale' => $this->fkLocale,
            'fk_url' => $this->fkUrl,
            'cms_page_url' => $this->cmsPageUrl,
            'category_url' => $this->categoryUrl,
            'title' => $this->title,
            'css_class' => $this->cssClass,
            'link' => $this->link,
            'external_url' => $this->externalUrl,
            'url' => $this->url,
            'id_navigation_node_localized_attributes' => $this->idNavigationNodeLocalizedAttributes,
            'fk_navigation_node' => $this->fkNavigationNode,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'fk_locale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, false) : $this->fkLocale,
            'fk_url' => $this->fkUrl instanceof AbstractTransfer ? $this->fkUrl->toArray(true, false) : $this->fkUrl,
            'cms_page_url' => $this->cmsPageUrl instanceof AbstractTransfer ? $this->cmsPageUrl->toArray(true, false) : $this->cmsPageUrl,
            'category_url' => $this->categoryUrl instanceof AbstractTransfer ? $this->categoryUrl->toArray(true, false) : $this->categoryUrl,
            'title' => $this->title instanceof AbstractTransfer ? $this->title->toArray(true, false) : $this->title,
            'css_class' => $this->cssClass instanceof AbstractTransfer ? $this->cssClass->toArray(true, false) : $this->cssClass,
            'link' => $this->link instanceof AbstractTransfer ? $this->link->toArray(true, false) : $this->link,
            'external_url' => $this->externalUrl instanceof AbstractTransfer ? $this->externalUrl->toArray(true, false) : $this->externalUrl,
            'url' => $this->url instanceof AbstractTransfer ? $this->url->toArray(true, false) : $this->url,
            'id_navigation_node_localized_attributes' => $this->idNavigationNodeLocalizedAttributes instanceof AbstractTransfer ? $this->idNavigationNodeLocalizedAttributes->toArray(true, false) : $this->idNavigationNodeLocalizedAttributes,
            'fk_navigation_node' => $this->fkNavigationNode instanceof AbstractTransfer ? $this->fkNavigationNode->toArray(true, false) : $this->fkNavigationNode,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'fkLocale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, true) : $this->fkLocale,
            'fkUrl' => $this->fkUrl instanceof AbstractTransfer ? $this->fkUrl->toArray(true, true) : $this->fkUrl,
            'cmsPageUrl' => $this->cmsPageUrl instanceof AbstractTransfer ? $this->cmsPageUrl->toArray(true, true) : $this->cmsPageUrl,
            'categoryUrl' => $this->categoryUrl instanceof AbstractTransfer ? $this->categoryUrl->toArray(true, true) : $this->categoryUrl,
            'title' => $this->title instanceof AbstractTransfer ? $this->title->toArray(true, true) : $this->title,
            'cssClass' => $this->cssClass instanceof AbstractTransfer ? $this->cssClass->toArray(true, true) : $this->cssClass,
            'link' => $this->link instanceof AbstractTransfer ? $this->link->toArray(true, true) : $this->link,
            'externalUrl' => $this->externalUrl instanceof AbstractTransfer ? $this->externalUrl->toArray(true, true) : $this->externalUrl,
            'url' => $this->url instanceof AbstractTransfer ? $this->url->toArray(true, true) : $this->url,
            'idNavigationNodeLocalizedAttributes' => $this->idNavigationNodeLocalizedAttributes instanceof AbstractTransfer ? $this->idNavigationNodeLocalizedAttributes->toArray(true, true) : $this->idNavigationNodeLocalizedAttributes,
            'fkNavigationNode' => $this->fkNavigationNode instanceof AbstractTransfer ? $this->fkNavigationNode->toArray(true, true) : $this->fkNavigationNode,
        ];
    }
}
