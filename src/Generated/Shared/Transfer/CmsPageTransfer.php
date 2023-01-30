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
class CmsPageTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const IS_SEARCHABLE = 'isSearchable';

    /**
     * @var string
     */
    public const FK_TEMPLATE = 'fkTemplate';

    /**
     * @var string
     */
    public const TEMPLATE_NAME = 'templateName';

    /**
     * @var string
     */
    public const FK_PAGE = 'fkPage';

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
    public const PAGE_ATTRIBUTES = 'pageAttributes';

    /**
     * @var string
     */
    public const META_ATTRIBUTES = 'metaAttributes';

    /**
     * @var string
     */
    public const STORE_RELATION = 'storeRelation';

    /**
     * @var string|null
     */
    protected $isActive;

    /**
     * @var bool|null
     */
    protected $isSearchable;

    /**
     * @var int|null
     */
    protected $fkTemplate;

    /**
     * @var string|null
     */
    protected $templateName;

    /**
     * @var int|null
     */
    protected $fkPage;

    /**
     * @var string|null
     */
    protected $validFrom;

    /**
     * @var string|null
     */
    protected $validTo;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\CmsPageAttributesTransfer[]
     */
    protected $pageAttributes;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\CmsPageMetaAttributesTransfer[]
     */
    protected $metaAttributes;

    /**
     * @var \Generated\Shared\Transfer\StoreRelationTransfer|null
     */
    protected $storeRelation;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'is_searchable' => 'isSearchable',
        'isSearchable' => 'isSearchable',
        'IsSearchable' => 'isSearchable',
        'fk_template' => 'fkTemplate',
        'fkTemplate' => 'fkTemplate',
        'FkTemplate' => 'fkTemplate',
        'template_name' => 'templateName',
        'templateName' => 'templateName',
        'TemplateName' => 'templateName',
        'fk_page' => 'fkPage',
        'fkPage' => 'fkPage',
        'FkPage' => 'fkPage',
        'valid_from' => 'validFrom',
        'validFrom' => 'validFrom',
        'ValidFrom' => 'validFrom',
        'valid_to' => 'validTo',
        'validTo' => 'validTo',
        'ValidTo' => 'validTo',
        'page_attributes' => 'pageAttributes',
        'pageAttributes' => 'pageAttributes',
        'PageAttributes' => 'pageAttributes',
        'meta_attributes' => 'metaAttributes',
        'metaAttributes' => 'metaAttributes',
        'MetaAttributes' => 'metaAttributes',
        'store_relation' => 'storeRelation',
        'storeRelation' => 'storeRelation',
        'StoreRelation' => 'storeRelation',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::IS_ACTIVE => [
            'type' => 'string',
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
        self::FK_TEMPLATE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_template',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TEMPLATE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'template_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PAGE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_page',
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
        self::PAGE_ATTRIBUTES => [
            'type' => 'Generated\Shared\Transfer\CmsPageAttributesTransfer',
            'type_shim' => null,
            'name_underscore' => 'page_attributes',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::META_ATTRIBUTES => [
            'type' => 'Generated\Shared\Transfer\CmsPageMetaAttributesTransfer',
            'type_shim' => null,
            'name_underscore' => 'meta_attributes',
            'is_collection' => true,
            'is_transfer' => true,
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
    ];

    /**
     * @module CmsGui|CmsNavigationConnector|Cms
     *
     * @param string|null $isActive
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
     * @module CmsGui|CmsNavigationConnector|Cms
     *
     * @return string|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module CmsGui|CmsNavigationConnector|Cms
     *
     * @param string|null $isActive
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
     * @module CmsGui|CmsNavigationConnector|Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIsActiveOrFail()
    {
        if ($this->isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->isActive;
    }

    /**
     * @module CmsGui|CmsNavigationConnector|Cms
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
     * @module CmsGui|Cms
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
     * @module CmsGui|Cms
     *
     * @return bool|null
     */
    public function getIsSearchable()
    {
        return $this->isSearchable;
    }

    /**
     * @module CmsGui|Cms
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
     * @module CmsGui|Cms
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
     * @module CmsGui|Cms
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
     * @module CmsGui|Cms
     *
     * @param int|null $fkTemplate
     *
     * @return $this
     */
    public function setFkTemplate($fkTemplate)
    {
        $this->fkTemplate = $fkTemplate;
        $this->modifiedProperties[self::FK_TEMPLATE] = true;

        return $this;
    }

    /**
     * @module CmsGui|Cms
     *
     * @return int|null
     */
    public function getFkTemplate()
    {
        return $this->fkTemplate;
    }

    /**
     * @module CmsGui|Cms
     *
     * @param int|null $fkTemplate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkTemplateOrFail($fkTemplate)
    {
        if ($fkTemplate === null) {
            $this->throwNullValueException(static::FK_TEMPLATE);
        }

        return $this->setFkTemplate($fkTemplate);
    }

    /**
     * @module CmsGui|Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkTemplateOrFail()
    {
        if ($this->fkTemplate === null) {
            $this->throwNullValueException(static::FK_TEMPLATE);
        }

        return $this->fkTemplate;
    }

    /**
     * @module CmsGui|Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkTemplate()
    {
        $this->assertPropertyIsSet(self::FK_TEMPLATE);

        return $this;
    }

    /**
     * @module CmsGui|Cms
     *
     * @param string|null $templateName
     *
     * @return $this
     */
    public function setTemplateName($templateName)
    {
        $this->templateName = $templateName;
        $this->modifiedProperties[self::TEMPLATE_NAME] = true;

        return $this;
    }

    /**
     * @module CmsGui|Cms
     *
     * @return string|null
     */
    public function getTemplateName()
    {
        return $this->templateName;
    }

    /**
     * @module CmsGui|Cms
     *
     * @param string|null $templateName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTemplateNameOrFail($templateName)
    {
        if ($templateName === null) {
            $this->throwNullValueException(static::TEMPLATE_NAME);
        }

        return $this->setTemplateName($templateName);
    }

    /**
     * @module CmsGui|Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTemplateNameOrFail()
    {
        if ($this->templateName === null) {
            $this->throwNullValueException(static::TEMPLATE_NAME);
        }

        return $this->templateName;
    }

    /**
     * @module CmsGui|Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTemplateName()
    {
        $this->assertPropertyIsSet(self::TEMPLATE_NAME);

        return $this;
    }

    /**
     * @module CmsGui|CmsNavigationConnector|Cms
     *
     * @param int|null $fkPage
     *
     * @return $this
     */
    public function setFkPage($fkPage)
    {
        $this->fkPage = $fkPage;
        $this->modifiedProperties[self::FK_PAGE] = true;

        return $this;
    }

    /**
     * @module CmsGui|CmsNavigationConnector|Cms
     *
     * @return int|null
     */
    public function getFkPage()
    {
        return $this->fkPage;
    }

    /**
     * @module CmsGui|CmsNavigationConnector|Cms
     *
     * @param int|null $fkPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkPageOrFail($fkPage)
    {
        if ($fkPage === null) {
            $this->throwNullValueException(static::FK_PAGE);
        }

        return $this->setFkPage($fkPage);
    }

    /**
     * @module CmsGui|CmsNavigationConnector|Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkPageOrFail()
    {
        if ($this->fkPage === null) {
            $this->throwNullValueException(static::FK_PAGE);
        }

        return $this->fkPage;
    }

    /**
     * @module CmsGui|CmsNavigationConnector|Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkPage()
    {
        $this->assertPropertyIsSet(self::FK_PAGE);

        return $this;
    }

    /**
     * @module CmsGui|Cms
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
     * @module CmsGui|Cms
     *
     * @return string|null
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * @module CmsGui|Cms
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
     * @module CmsGui|Cms
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
     * @module CmsGui|Cms
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
     * @module CmsGui|Cms
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
     * @module CmsGui|Cms
     *
     * @return string|null
     */
    public function getValidTo()
    {
        return $this->validTo;
    }

    /**
     * @module CmsGui|Cms
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
     * @module CmsGui|Cms
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
     * @module CmsGui|Cms
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
     * @module CmsGui|Cms
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\CmsPageAttributesTransfer[] $pageAttributes
     *
     * @return $this
     */
    public function setPageAttributes(ArrayObject $pageAttributes)
    {
        $this->pageAttributes = $pageAttributes;
        $this->modifiedProperties[self::PAGE_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module CmsGui|Cms
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\CmsPageAttributesTransfer[]
     */
    public function getPageAttributes()
    {
        return $this->pageAttributes;
    }

    /**
     * @module CmsGui|Cms
     *
     * @param \Generated\Shared\Transfer\CmsPageAttributesTransfer $pageAttribute
     *
     * @return $this
     */
    public function addPageAttribute(CmsPageAttributesTransfer $pageAttribute)
    {
        $this->pageAttributes[] = $pageAttribute;
        $this->modifiedProperties[self::PAGE_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module CmsGui|Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePageAttributes()
    {
        $this->assertCollectionPropertyIsSet(self::PAGE_ATTRIBUTES);

        return $this;
    }

    /**
     * @module CmsGui|Cms
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\CmsPageMetaAttributesTransfer[] $metaAttributes
     *
     * @return $this
     */
    public function setMetaAttributes(ArrayObject $metaAttributes)
    {
        $this->metaAttributes = $metaAttributes;
        $this->modifiedProperties[self::META_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module CmsGui|Cms
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\CmsPageMetaAttributesTransfer[]
     */
    public function getMetaAttributes()
    {
        return $this->metaAttributes;
    }

    /**
     * @module CmsGui|Cms
     *
     * @param \Generated\Shared\Transfer\CmsPageMetaAttributesTransfer $metaAttribute
     *
     * @return $this
     */
    public function addMetaAttribute(CmsPageMetaAttributesTransfer $metaAttribute)
    {
        $this->metaAttributes[] = $metaAttribute;
        $this->modifiedProperties[self::META_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module CmsGui|Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMetaAttributes()
    {
        $this->assertCollectionPropertyIsSet(self::META_ATTRIBUTES);

        return $this;
    }

    /**
     * @module CmsGui|Cms
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
     * @module CmsGui|Cms
     *
     * @return \Generated\Shared\Transfer\StoreRelationTransfer|null
     */
    public function getStoreRelation()
    {
        return $this->storeRelation;
    }

    /**
     * @module CmsGui|Cms
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
     * @module CmsGui|Cms
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
     * @module CmsGui|Cms
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
                case 'isActive':
                case 'isSearchable':
                case 'fkTemplate':
                case 'templateName':
                case 'fkPage':
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
                case 'pageAttributes':
                case 'metaAttributes':
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
                case 'isActive':
                case 'isSearchable':
                case 'fkTemplate':
                case 'templateName':
                case 'fkPage':
                case 'validFrom':
                case 'validTo':
                    $values[$arrayKey] = $value;

                    break;
                case 'storeRelation':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'pageAttributes':
                case 'metaAttributes':
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
                case 'isActive':
                case 'isSearchable':
                case 'fkTemplate':
                case 'templateName':
                case 'fkPage':
                case 'validFrom':
                case 'validTo':
                    $values[$arrayKey] = $value;

                    break;
                case 'storeRelation':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'pageAttributes':
                case 'metaAttributes':
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
        $this->pageAttributes = $this->pageAttributes ?: new ArrayObject();
        $this->metaAttributes = $this->metaAttributes ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'isActive' => $this->isActive,
            'isSearchable' => $this->isSearchable,
            'fkTemplate' => $this->fkTemplate,
            'templateName' => $this->templateName,
            'fkPage' => $this->fkPage,
            'validFrom' => $this->validFrom,
            'validTo' => $this->validTo,
            'storeRelation' => $this->storeRelation,
            'pageAttributes' => $this->pageAttributes,
            'metaAttributes' => $this->metaAttributes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'is_active' => $this->isActive,
            'is_searchable' => $this->isSearchable,
            'fk_template' => $this->fkTemplate,
            'template_name' => $this->templateName,
            'fk_page' => $this->fkPage,
            'valid_from' => $this->validFrom,
            'valid_to' => $this->validTo,
            'store_relation' => $this->storeRelation,
            'page_attributes' => $this->pageAttributes,
            'meta_attributes' => $this->metaAttributes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'is_searchable' => $this->isSearchable instanceof AbstractTransfer ? $this->isSearchable->toArray(true, false) : $this->isSearchable,
            'fk_template' => $this->fkTemplate instanceof AbstractTransfer ? $this->fkTemplate->toArray(true, false) : $this->fkTemplate,
            'template_name' => $this->templateName instanceof AbstractTransfer ? $this->templateName->toArray(true, false) : $this->templateName,
            'fk_page' => $this->fkPage instanceof AbstractTransfer ? $this->fkPage->toArray(true, false) : $this->fkPage,
            'valid_from' => $this->validFrom instanceof AbstractTransfer ? $this->validFrom->toArray(true, false) : $this->validFrom,
            'valid_to' => $this->validTo instanceof AbstractTransfer ? $this->validTo->toArray(true, false) : $this->validTo,
            'store_relation' => $this->storeRelation instanceof AbstractTransfer ? $this->storeRelation->toArray(true, false) : $this->storeRelation,
            'page_attributes' => $this->pageAttributes instanceof AbstractTransfer ? $this->pageAttributes->toArray(true, false) : $this->addValuesToCollection($this->pageAttributes, true, false),
            'meta_attributes' => $this->metaAttributes instanceof AbstractTransfer ? $this->metaAttributes->toArray(true, false) : $this->addValuesToCollection($this->metaAttributes, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'isSearchable' => $this->isSearchable instanceof AbstractTransfer ? $this->isSearchable->toArray(true, true) : $this->isSearchable,
            'fkTemplate' => $this->fkTemplate instanceof AbstractTransfer ? $this->fkTemplate->toArray(true, true) : $this->fkTemplate,
            'templateName' => $this->templateName instanceof AbstractTransfer ? $this->templateName->toArray(true, true) : $this->templateName,
            'fkPage' => $this->fkPage instanceof AbstractTransfer ? $this->fkPage->toArray(true, true) : $this->fkPage,
            'validFrom' => $this->validFrom instanceof AbstractTransfer ? $this->validFrom->toArray(true, true) : $this->validFrom,
            'validTo' => $this->validTo instanceof AbstractTransfer ? $this->validTo->toArray(true, true) : $this->validTo,
            'storeRelation' => $this->storeRelation instanceof AbstractTransfer ? $this->storeRelation->toArray(true, true) : $this->storeRelation,
            'pageAttributes' => $this->pageAttributes instanceof AbstractTransfer ? $this->pageAttributes->toArray(true, true) : $this->addValuesToCollection($this->pageAttributes, true, true),
            'metaAttributes' => $this->metaAttributes instanceof AbstractTransfer ? $this->metaAttributes->toArray(true, true) : $this->addValuesToCollection($this->metaAttributes, true, true),
        ];
    }
}
