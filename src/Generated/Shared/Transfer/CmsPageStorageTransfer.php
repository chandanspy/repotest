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
class CmsPageStorageTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const CONTENT_WIDGET_PARAMETER_MAP = 'contentWidgetParameterMap';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const ID_CMS_PAGE = 'idCmsPage';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const TEMPLATE_PATH = 'templatePath';

    /**
     * @var string
     */
    public const PLACEHOLDERS = 'placeholders';

    /**
     * @var string
     */
    public const META_TITLE = 'metaTitle';

    /**
     * @var string
     */
    public const META_KEYWORDS = 'metaKeywords';

    /**
     * @var string
     */
    public const META_DESCRIPTION = 'metaDescription';

    /**
     * @var string
     */
    public const URL = 'url';

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
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const IS_SEARCHABLE = 'isSearchable';

    /**
     * @var array
     */
    protected $contentWidgetParameterMap = [];

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var int|null
     */
    protected $idCmsPage;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $templatePath;

    /**
     * @var array
     */
    protected $placeholders = [];

    /**
     * @var string|null
     */
    protected $metaTitle;

    /**
     * @var string|null
     */
    protected $metaKeywords;

    /**
     * @var string|null
     */
    protected $metaDescription;

    /**
     * @var string|null
     */
    protected $url;

    /**
     * @var string|null
     */
    protected $validFrom;

    /**
     * @var string|null
     */
    protected $validTo;

    /**
     * @var bool|null
     */
    protected $isActive;

    /**
     * @var bool|null
     */
    protected $isSearchable;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'content_widget_parameter_map' => 'contentWidgetParameterMap',
        'contentWidgetParameterMap' => 'contentWidgetParameterMap',
        'ContentWidgetParameterMap' => 'contentWidgetParameterMap',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'id_cms_page' => 'idCmsPage',
        'idCmsPage' => 'idCmsPage',
        'IdCmsPage' => 'idCmsPage',
        'name' => 'name',
        'Name' => 'name',
        'template_path' => 'templatePath',
        'templatePath' => 'templatePath',
        'TemplatePath' => 'templatePath',
        'placeholders' => 'placeholders',
        'Placeholders' => 'placeholders',
        'meta_title' => 'metaTitle',
        'metaTitle' => 'metaTitle',
        'MetaTitle' => 'metaTitle',
        'meta_keywords' => 'metaKeywords',
        'metaKeywords' => 'metaKeywords',
        'MetaKeywords' => 'metaKeywords',
        'meta_description' => 'metaDescription',
        'metaDescription' => 'metaDescription',
        'MetaDescription' => 'metaDescription',
        'url' => 'url',
        'Url' => 'url',
        'valid_from' => 'validFrom',
        'validFrom' => 'validFrom',
        'ValidFrom' => 'validFrom',
        'valid_to' => 'validTo',
        'validTo' => 'validTo',
        'ValidTo' => 'validTo',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'is_searchable' => 'isSearchable',
        'isSearchable' => 'isSearchable',
        'IsSearchable' => 'isSearchable',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::CONTENT_WIDGET_PARAMETER_MAP => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'content_widget_parameter_map',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::UUID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'uuid',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_CMS_PAGE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_cms_page',
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
        self::TEMPLATE_PATH => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'template_path',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PLACEHOLDERS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'placeholders',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::META_TITLE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'meta_title',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::META_KEYWORDS => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'meta_keywords',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::META_DESCRIPTION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'meta_description',
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
        self::IS_SEARCHABLE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_searchable',
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
     * @module CmsPagesContentBannersResourceRelationship|CmsPagesContentProductAbstractListsResourceRelationship|CmsStorage
     *
     * @param array|null $contentWidgetParameterMap
     *
     * @return $this
     */
    public function setContentWidgetParameterMap(array $contentWidgetParameterMap = null)
    {
        if ($contentWidgetParameterMap === null) {
            $contentWidgetParameterMap = [];
        }

        $this->contentWidgetParameterMap = $contentWidgetParameterMap;
        $this->modifiedProperties[self::CONTENT_WIDGET_PARAMETER_MAP] = true;

        return $this;
    }

    /**
     * @module CmsPagesContentBannersResourceRelationship|CmsPagesContentProductAbstractListsResourceRelationship|CmsStorage
     *
     * @return array
     */
    public function getContentWidgetParameterMap()
    {
        return $this->contentWidgetParameterMap;
    }

    /**
     * @module CmsPagesContentBannersResourceRelationship|CmsPagesContentProductAbstractListsResourceRelationship|CmsStorage
     *
     * @param mixed $contentWidgetParameterMap
     *
     * @return $this
     */
    public function addContentWidgetParameterMap($contentWidgetParameterMap)
    {
        $this->contentWidgetParameterMap[] = $contentWidgetParameterMap;
        $this->modifiedProperties[self::CONTENT_WIDGET_PARAMETER_MAP] = true;

        return $this;
    }

    /**
     * @module CmsPagesContentBannersResourceRelationship|CmsPagesContentProductAbstractListsResourceRelationship|CmsStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireContentWidgetParameterMap()
    {
        $this->assertPropertyIsSet(self::CONTENT_WIDGET_PARAMETER_MAP);

        return $this;
    }

    /**
     * @module CmsPagesContentBannersResourceRelationship|CmsPagesContentProductAbstractListsResourceRelationship|CmsPagesRestApi|CmsStorage
     *
     * @param string|null $uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        $this->modifiedProperties[self::UUID] = true;

        return $this;
    }

    /**
     * @module CmsPagesContentBannersResourceRelationship|CmsPagesContentProductAbstractListsResourceRelationship|CmsPagesRestApi|CmsStorage
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @module CmsPagesContentBannersResourceRelationship|CmsPagesContentProductAbstractListsResourceRelationship|CmsPagesRestApi|CmsStorage
     *
     * @param string|null $uuid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUuidOrFail($uuid)
    {
        if ($uuid === null) {
            $this->throwNullValueException(static::UUID);
        }

        return $this->setUuid($uuid);
    }

    /**
     * @module CmsPagesContentBannersResourceRelationship|CmsPagesContentProductAbstractListsResourceRelationship|CmsPagesRestApi|CmsStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUuidOrFail()
    {
        if ($this->uuid === null) {
            $this->throwNullValueException(static::UUID);
        }

        return $this->uuid;
    }

    /**
     * @module CmsPagesContentBannersResourceRelationship|CmsPagesContentProductAbstractListsResourceRelationship|CmsPagesRestApi|CmsStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUuid()
    {
        $this->assertPropertyIsSet(self::UUID);

        return $this;
    }

    /**
     * @module CmsStorage
     *
     * @param int|null $idCmsPage
     *
     * @return $this
     */
    public function setIdCmsPage($idCmsPage)
    {
        $this->idCmsPage = $idCmsPage;
        $this->modifiedProperties[self::ID_CMS_PAGE] = true;

        return $this;
    }

    /**
     * @module CmsStorage
     *
     * @return int|null
     */
    public function getIdCmsPage()
    {
        return $this->idCmsPage;
    }

    /**
     * @module CmsStorage
     *
     * @param int|null $idCmsPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCmsPageOrFail($idCmsPage)
    {
        if ($idCmsPage === null) {
            $this->throwNullValueException(static::ID_CMS_PAGE);
        }

        return $this->setIdCmsPage($idCmsPage);
    }

    /**
     * @module CmsStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCmsPageOrFail()
    {
        if ($this->idCmsPage === null) {
            $this->throwNullValueException(static::ID_CMS_PAGE);
        }

        return $this->idCmsPage;
    }

    /**
     * @module CmsStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCmsPage()
    {
        $this->assertPropertyIsSet(self::ID_CMS_PAGE);

        return $this;
    }

    /**
     * @module CmsStorage
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
     * @module CmsStorage
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module CmsStorage
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
     * @module CmsStorage
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
     * @module CmsStorage
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
     * @module CmsStorage
     *
     * @param string|null $templatePath
     *
     * @return $this
     */
    public function setTemplatePath($templatePath)
    {
        $this->templatePath = $templatePath;
        $this->modifiedProperties[self::TEMPLATE_PATH] = true;

        return $this;
    }

    /**
     * @module CmsStorage
     *
     * @return string|null
     */
    public function getTemplatePath()
    {
        return $this->templatePath;
    }

    /**
     * @module CmsStorage
     *
     * @param string|null $templatePath
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTemplatePathOrFail($templatePath)
    {
        if ($templatePath === null) {
            $this->throwNullValueException(static::TEMPLATE_PATH);
        }

        return $this->setTemplatePath($templatePath);
    }

    /**
     * @module CmsStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTemplatePathOrFail()
    {
        if ($this->templatePath === null) {
            $this->throwNullValueException(static::TEMPLATE_PATH);
        }

        return $this->templatePath;
    }

    /**
     * @module CmsStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTemplatePath()
    {
        $this->assertPropertyIsSet(self::TEMPLATE_PATH);

        return $this;
    }

    /**
     * @module CmsStorage
     *
     * @param array|null $placeholders
     *
     * @return $this
     */
    public function setPlaceholders(array $placeholders = null)
    {
        if ($placeholders === null) {
            $placeholders = [];
        }

        $this->placeholders = $placeholders;
        $this->modifiedProperties[self::PLACEHOLDERS] = true;

        return $this;
    }

    /**
     * @module CmsStorage
     *
     * @return array
     */
    public function getPlaceholders()
    {
        return $this->placeholders;
    }

    /**
     * @module CmsStorage
     *
     * @param mixed $placeholder
     *
     * @return $this
     */
    public function addPlaceholder($placeholder)
    {
        $this->placeholders[] = $placeholder;
        $this->modifiedProperties[self::PLACEHOLDERS] = true;

        return $this;
    }

    /**
     * @module CmsStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePlaceholders()
    {
        $this->assertPropertyIsSet(self::PLACEHOLDERS);

        return $this;
    }

    /**
     * @module CmsStorage
     *
     * @param string|null $metaTitle
     *
     * @return $this
     */
    public function setMetaTitle($metaTitle)
    {
        $this->metaTitle = $metaTitle;
        $this->modifiedProperties[self::META_TITLE] = true;

        return $this;
    }

    /**
     * @module CmsStorage
     *
     * @return string|null
     */
    public function getMetaTitle()
    {
        return $this->metaTitle;
    }

    /**
     * @module CmsStorage
     *
     * @param string|null $metaTitle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMetaTitleOrFail($metaTitle)
    {
        if ($metaTitle === null) {
            $this->throwNullValueException(static::META_TITLE);
        }

        return $this->setMetaTitle($metaTitle);
    }

    /**
     * @module CmsStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getMetaTitleOrFail()
    {
        if ($this->metaTitle === null) {
            $this->throwNullValueException(static::META_TITLE);
        }

        return $this->metaTitle;
    }

    /**
     * @module CmsStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMetaTitle()
    {
        $this->assertPropertyIsSet(self::META_TITLE);

        return $this;
    }

    /**
     * @module CmsStorage
     *
     * @param string|null $metaKeywords
     *
     * @return $this
     */
    public function setMetaKeywords($metaKeywords)
    {
        $this->metaKeywords = $metaKeywords;
        $this->modifiedProperties[self::META_KEYWORDS] = true;

        return $this;
    }

    /**
     * @module CmsStorage
     *
     * @return string|null
     */
    public function getMetaKeywords()
    {
        return $this->metaKeywords;
    }

    /**
     * @module CmsStorage
     *
     * @param string|null $metaKeywords
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMetaKeywordsOrFail($metaKeywords)
    {
        if ($metaKeywords === null) {
            $this->throwNullValueException(static::META_KEYWORDS);
        }

        return $this->setMetaKeywords($metaKeywords);
    }

    /**
     * @module CmsStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getMetaKeywordsOrFail()
    {
        if ($this->metaKeywords === null) {
            $this->throwNullValueException(static::META_KEYWORDS);
        }

        return $this->metaKeywords;
    }

    /**
     * @module CmsStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMetaKeywords()
    {
        $this->assertPropertyIsSet(self::META_KEYWORDS);

        return $this;
    }

    /**
     * @module CmsStorage
     *
     * @param string|null $metaDescription
     *
     * @return $this
     */
    public function setMetaDescription($metaDescription)
    {
        $this->metaDescription = $metaDescription;
        $this->modifiedProperties[self::META_DESCRIPTION] = true;

        return $this;
    }

    /**
     * @module CmsStorage
     *
     * @return string|null
     */
    public function getMetaDescription()
    {
        return $this->metaDescription;
    }

    /**
     * @module CmsStorage
     *
     * @param string|null $metaDescription
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMetaDescriptionOrFail($metaDescription)
    {
        if ($metaDescription === null) {
            $this->throwNullValueException(static::META_DESCRIPTION);
        }

        return $this->setMetaDescription($metaDescription);
    }

    /**
     * @module CmsStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getMetaDescriptionOrFail()
    {
        if ($this->metaDescription === null) {
            $this->throwNullValueException(static::META_DESCRIPTION);
        }

        return $this->metaDescription;
    }

    /**
     * @module CmsStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMetaDescription()
    {
        $this->assertPropertyIsSet(self::META_DESCRIPTION);

        return $this;
    }

    /**
     * @module CmsStorage
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
     * @module CmsStorage
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @module CmsStorage
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
     * @module CmsStorage
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
     * @module CmsStorage
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
     * @module CmsStorage
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
     * @module CmsStorage
     *
     * @return string|null
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * @module CmsStorage
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
     * @module CmsStorage
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
     * @module CmsStorage
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
     * @module CmsStorage
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
     * @module CmsStorage
     *
     * @return string|null
     */
    public function getValidTo()
    {
        return $this->validTo;
    }

    /**
     * @module CmsStorage
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
     * @module CmsStorage
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
     * @module CmsStorage
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
     * @module CmsStorage
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
     * @module CmsStorage
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module CmsStorage
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
     * @module CmsStorage
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
     * @module CmsStorage
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
     * @module CmsStorage
     *
     * @param bool|null $isSearchable
     *
     * @return $this
     */
    public function setIsSearchable($isSearchable)
    {
        $this->isSearchable = $isSearchable;
        $this->modifiedProperties[self::IS_SEARCHABLE] = true;

        return $this;
    }

    /**
     * @module CmsStorage
     *
     * @return bool|null
     */
    public function getIsSearchable()
    {
        return $this->isSearchable;
    }

    /**
     * @module CmsStorage
     *
     * @param bool|null $isSearchable
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsSearchableOrFail($isSearchable)
    {
        if ($isSearchable === null) {
            $this->throwNullValueException(static::IS_SEARCHABLE);
        }

        return $this->setIsSearchable($isSearchable);
    }

    /**
     * @module CmsStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsSearchableOrFail()
    {
        if ($this->isSearchable === null) {
            $this->throwNullValueException(static::IS_SEARCHABLE);
        }

        return $this->isSearchable;
    }

    /**
     * @module CmsStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsSearchable()
    {
        $this->assertPropertyIsSet(self::IS_SEARCHABLE);

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
                case 'contentWidgetParameterMap':
                case 'uuid':
                case 'idCmsPage':
                case 'name':
                case 'templatePath':
                case 'placeholders':
                case 'metaTitle':
                case 'metaKeywords':
                case 'metaDescription':
                case 'url':
                case 'validFrom':
                case 'validTo':
                case 'isActive':
                case 'isSearchable':
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
                case 'contentWidgetParameterMap':
                case 'uuid':
                case 'idCmsPage':
                case 'name':
                case 'templatePath':
                case 'placeholders':
                case 'metaTitle':
                case 'metaKeywords':
                case 'metaDescription':
                case 'url':
                case 'validFrom':
                case 'validTo':
                case 'isActive':
                case 'isSearchable':
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
                case 'contentWidgetParameterMap':
                case 'uuid':
                case 'idCmsPage':
                case 'name':
                case 'templatePath':
                case 'placeholders':
                case 'metaTitle':
                case 'metaKeywords':
                case 'metaDescription':
                case 'url':
                case 'validFrom':
                case 'validTo':
                case 'isActive':
                case 'isSearchable':
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
            'contentWidgetParameterMap' => $this->contentWidgetParameterMap,
            'uuid' => $this->uuid,
            'idCmsPage' => $this->idCmsPage,
            'name' => $this->name,
            'templatePath' => $this->templatePath,
            'placeholders' => $this->placeholders,
            'metaTitle' => $this->metaTitle,
            'metaKeywords' => $this->metaKeywords,
            'metaDescription' => $this->metaDescription,
            'url' => $this->url,
            'validFrom' => $this->validFrom,
            'validTo' => $this->validTo,
            'isActive' => $this->isActive,
            'isSearchable' => $this->isSearchable,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'content_widget_parameter_map' => $this->contentWidgetParameterMap,
            'uuid' => $this->uuid,
            'id_cms_page' => $this->idCmsPage,
            'name' => $this->name,
            'template_path' => $this->templatePath,
            'placeholders' => $this->placeholders,
            'meta_title' => $this->metaTitle,
            'meta_keywords' => $this->metaKeywords,
            'meta_description' => $this->metaDescription,
            'url' => $this->url,
            'valid_from' => $this->validFrom,
            'valid_to' => $this->validTo,
            'is_active' => $this->isActive,
            'is_searchable' => $this->isSearchable,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'content_widget_parameter_map' => $this->contentWidgetParameterMap instanceof AbstractTransfer ? $this->contentWidgetParameterMap->toArray(true, false) : $this->contentWidgetParameterMap,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'id_cms_page' => $this->idCmsPage instanceof AbstractTransfer ? $this->idCmsPage->toArray(true, false) : $this->idCmsPage,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'template_path' => $this->templatePath instanceof AbstractTransfer ? $this->templatePath->toArray(true, false) : $this->templatePath,
            'placeholders' => $this->placeholders instanceof AbstractTransfer ? $this->placeholders->toArray(true, false) : $this->placeholders,
            'meta_title' => $this->metaTitle instanceof AbstractTransfer ? $this->metaTitle->toArray(true, false) : $this->metaTitle,
            'meta_keywords' => $this->metaKeywords instanceof AbstractTransfer ? $this->metaKeywords->toArray(true, false) : $this->metaKeywords,
            'meta_description' => $this->metaDescription instanceof AbstractTransfer ? $this->metaDescription->toArray(true, false) : $this->metaDescription,
            'url' => $this->url instanceof AbstractTransfer ? $this->url->toArray(true, false) : $this->url,
            'valid_from' => $this->validFrom instanceof AbstractTransfer ? $this->validFrom->toArray(true, false) : $this->validFrom,
            'valid_to' => $this->validTo instanceof AbstractTransfer ? $this->validTo->toArray(true, false) : $this->validTo,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'is_searchable' => $this->isSearchable instanceof AbstractTransfer ? $this->isSearchable->toArray(true, false) : $this->isSearchable,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'contentWidgetParameterMap' => $this->contentWidgetParameterMap instanceof AbstractTransfer ? $this->contentWidgetParameterMap->toArray(true, true) : $this->contentWidgetParameterMap,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'idCmsPage' => $this->idCmsPage instanceof AbstractTransfer ? $this->idCmsPage->toArray(true, true) : $this->idCmsPage,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'templatePath' => $this->templatePath instanceof AbstractTransfer ? $this->templatePath->toArray(true, true) : $this->templatePath,
            'placeholders' => $this->placeholders instanceof AbstractTransfer ? $this->placeholders->toArray(true, true) : $this->placeholders,
            'metaTitle' => $this->metaTitle instanceof AbstractTransfer ? $this->metaTitle->toArray(true, true) : $this->metaTitle,
            'metaKeywords' => $this->metaKeywords instanceof AbstractTransfer ? $this->metaKeywords->toArray(true, true) : $this->metaKeywords,
            'metaDescription' => $this->metaDescription instanceof AbstractTransfer ? $this->metaDescription->toArray(true, true) : $this->metaDescription,
            'url' => $this->url instanceof AbstractTransfer ? $this->url->toArray(true, true) : $this->url,
            'validFrom' => $this->validFrom instanceof AbstractTransfer ? $this->validFrom->toArray(true, true) : $this->validFrom,
            'validTo' => $this->validTo instanceof AbstractTransfer ? $this->validTo->toArray(true, true) : $this->validTo,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'isSearchable' => $this->isSearchable instanceof AbstractTransfer ? $this->isSearchable->toArray(true, true) : $this->isSearchable,
        ];
    }
}
