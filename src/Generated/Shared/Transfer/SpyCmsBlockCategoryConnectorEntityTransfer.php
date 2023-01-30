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
class SpyCmsBlockCategoryConnectorEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_CMS_BLOCK_CATEGORY_CONNECTOR = 'idCmsBlockCategoryConnector';

    /**
     * @var string
     */
    public const FK_CATEGORY = 'fkCategory';

    /**
     * @var string
     */
    public const FK_CATEGORY_TEMPLATE = 'fkCategoryTemplate';

    /**
     * @var string
     */
    public const FK_CMS_BLOCK = 'fkCmsBlock';

    /**
     * @var string
     */
    public const FK_CMS_BLOCK_CATEGORY_POSITION = 'fkCmsBlockCategoryPosition';

    /**
     * @var string
     */
    public const CMS_BLOCK = 'cmsBlock';

    /**
     * @var string
     */
    public const CATEGORY = 'category';

    /**
     * @var string
     */
    public const CATEGORY_TEMPLATE = 'categoryTemplate';

    /**
     * @var string
     */
    public const CMS_BLOCK_CATEGORY_POSITION = 'cmsBlockCategoryPosition';

    /**
     * @var integer|null
     */
    protected $idCmsBlockCategoryConnector;

    /**
     * @var integer|null
     */
    protected $fkCategory;

    /**
     * @var integer|null
     */
    protected $fkCategoryTemplate;

    /**
     * @var integer|null
     */
    protected $fkCmsBlock;

    /**
     * @var integer|null
     */
    protected $fkCmsBlockCategoryPosition;

    /**
     * @var \Generated\Shared\Transfer\SpyCmsBlockEntityTransfer|null
     */
    protected $cmsBlock;

    /**
     * @var \Generated\Shared\Transfer\SpyCategoryEntityTransfer|null
     */
    protected $category;

    /**
     * @var \Generated\Shared\Transfer\SpyCategoryTemplateEntityTransfer|null
     */
    protected $categoryTemplate;

    /**
     * @var \Generated\Shared\Transfer\SpyCmsBlockCategoryPositionEntityTransfer|null
     */
    protected $cmsBlockCategoryPosition;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_cms_block_category_connector' => 'idCmsBlockCategoryConnector',
        'idCmsBlockCategoryConnector' => 'idCmsBlockCategoryConnector',
        'IdCmsBlockCategoryConnector' => 'idCmsBlockCategoryConnector',
        'fk_category' => 'fkCategory',
        'fkCategory' => 'fkCategory',
        'FkCategory' => 'fkCategory',
        'fk_category_template' => 'fkCategoryTemplate',
        'fkCategoryTemplate' => 'fkCategoryTemplate',
        'FkCategoryTemplate' => 'fkCategoryTemplate',
        'fk_cms_block' => 'fkCmsBlock',
        'fkCmsBlock' => 'fkCmsBlock',
        'FkCmsBlock' => 'fkCmsBlock',
        'fk_cms_block_category_position' => 'fkCmsBlockCategoryPosition',
        'fkCmsBlockCategoryPosition' => 'fkCmsBlockCategoryPosition',
        'FkCmsBlockCategoryPosition' => 'fkCmsBlockCategoryPosition',
        'cms_block' => 'cmsBlock',
        'cmsBlock' => 'cmsBlock',
        'CmsBlock' => 'cmsBlock',
        'category' => 'category',
        'Category' => 'category',
        'category_template' => 'categoryTemplate',
        'categoryTemplate' => 'categoryTemplate',
        'CategoryTemplate' => 'categoryTemplate',
        'cms_block_category_position' => 'cmsBlockCategoryPosition',
        'cmsBlockCategoryPosition' => 'cmsBlockCategoryPosition',
        'CmsBlockCategoryPosition' => 'cmsBlockCategoryPosition',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_CMS_BLOCK_CATEGORY_CONNECTOR => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_cms_block_category_connector',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_CATEGORY => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_category',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_CATEGORY_TEMPLATE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_category_template',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_CMS_BLOCK => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_cms_block',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_CMS_BLOCK_CATEGORY_POSITION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_cms_block_category_position',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CMS_BLOCK => [
            'type' => 'Generated\Shared\Transfer\SpyCmsBlockEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'cms_block',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CATEGORY => [
            'type' => 'Generated\Shared\Transfer\SpyCategoryEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'category',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CATEGORY_TEMPLATE => [
            'type' => 'Generated\Shared\Transfer\SpyCategoryTemplateEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'category_template',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CMS_BLOCK_CATEGORY_POSITION => [
            'type' => 'Generated\Shared\Transfer\SpyCmsBlockCategoryPositionEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'cms_block_category_position',
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
    public static $entityNamespace = 'Orm\Zed\CmsBlockCategoryConnector\Persistence\SpyCmsBlockCategoryConnector';


    /**
     * @module 
     *
     * @param integer|null $idCmsBlockCategoryConnector
     *
     * @return $this
     */
    public function setIdCmsBlockCategoryConnector($idCmsBlockCategoryConnector)
    {
        $this->idCmsBlockCategoryConnector = $idCmsBlockCategoryConnector;
        $this->modifiedProperties[self::ID_CMS_BLOCK_CATEGORY_CONNECTOR] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdCmsBlockCategoryConnector()
    {
        return $this->idCmsBlockCategoryConnector;
    }

    /**
     * @module 
     *
     * @param integer|null $idCmsBlockCategoryConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCmsBlockCategoryConnectorOrFail($idCmsBlockCategoryConnector)
    {
        if ($idCmsBlockCategoryConnector === null) {
            $this->throwNullValueException(static::ID_CMS_BLOCK_CATEGORY_CONNECTOR);
        }

        return $this->setIdCmsBlockCategoryConnector($idCmsBlockCategoryConnector);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdCmsBlockCategoryConnectorOrFail()
    {
        if ($this->idCmsBlockCategoryConnector === null) {
            $this->throwNullValueException(static::ID_CMS_BLOCK_CATEGORY_CONNECTOR);
        }

        return $this->idCmsBlockCategoryConnector;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCmsBlockCategoryConnector()
    {
        $this->assertPropertyIsSet(self::ID_CMS_BLOCK_CATEGORY_CONNECTOR);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCategory
     *
     * @return $this
     */
    public function setFkCategory($fkCategory)
    {
        $this->fkCategory = $fkCategory;
        $this->modifiedProperties[self::FK_CATEGORY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkCategory()
    {
        return $this->fkCategory;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCategory
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCategoryOrFail($fkCategory)
    {
        if ($fkCategory === null) {
            $this->throwNullValueException(static::FK_CATEGORY);
        }

        return $this->setFkCategory($fkCategory);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCategoryOrFail()
    {
        if ($this->fkCategory === null) {
            $this->throwNullValueException(static::FK_CATEGORY);
        }

        return $this->fkCategory;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCategory()
    {
        $this->assertPropertyIsSet(self::FK_CATEGORY);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCategoryTemplate
     *
     * @return $this
     */
    public function setFkCategoryTemplate($fkCategoryTemplate)
    {
        $this->fkCategoryTemplate = $fkCategoryTemplate;
        $this->modifiedProperties[self::FK_CATEGORY_TEMPLATE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkCategoryTemplate()
    {
        return $this->fkCategoryTemplate;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCategoryTemplate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCategoryTemplateOrFail($fkCategoryTemplate)
    {
        if ($fkCategoryTemplate === null) {
            $this->throwNullValueException(static::FK_CATEGORY_TEMPLATE);
        }

        return $this->setFkCategoryTemplate($fkCategoryTemplate);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCategoryTemplateOrFail()
    {
        if ($this->fkCategoryTemplate === null) {
            $this->throwNullValueException(static::FK_CATEGORY_TEMPLATE);
        }

        return $this->fkCategoryTemplate;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCategoryTemplate()
    {
        $this->assertPropertyIsSet(self::FK_CATEGORY_TEMPLATE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCmsBlock
     *
     * @return $this
     */
    public function setFkCmsBlock($fkCmsBlock)
    {
        $this->fkCmsBlock = $fkCmsBlock;
        $this->modifiedProperties[self::FK_CMS_BLOCK] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkCmsBlock()
    {
        return $this->fkCmsBlock;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCmsBlock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCmsBlockOrFail($fkCmsBlock)
    {
        if ($fkCmsBlock === null) {
            $this->throwNullValueException(static::FK_CMS_BLOCK);
        }

        return $this->setFkCmsBlock($fkCmsBlock);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCmsBlockOrFail()
    {
        if ($this->fkCmsBlock === null) {
            $this->throwNullValueException(static::FK_CMS_BLOCK);
        }

        return $this->fkCmsBlock;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCmsBlock()
    {
        $this->assertPropertyIsSet(self::FK_CMS_BLOCK);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCmsBlockCategoryPosition
     *
     * @return $this
     */
    public function setFkCmsBlockCategoryPosition($fkCmsBlockCategoryPosition)
    {
        $this->fkCmsBlockCategoryPosition = $fkCmsBlockCategoryPosition;
        $this->modifiedProperties[self::FK_CMS_BLOCK_CATEGORY_POSITION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkCmsBlockCategoryPosition()
    {
        return $this->fkCmsBlockCategoryPosition;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCmsBlockCategoryPosition
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCmsBlockCategoryPositionOrFail($fkCmsBlockCategoryPosition)
    {
        if ($fkCmsBlockCategoryPosition === null) {
            $this->throwNullValueException(static::FK_CMS_BLOCK_CATEGORY_POSITION);
        }

        return $this->setFkCmsBlockCategoryPosition($fkCmsBlockCategoryPosition);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCmsBlockCategoryPositionOrFail()
    {
        if ($this->fkCmsBlockCategoryPosition === null) {
            $this->throwNullValueException(static::FK_CMS_BLOCK_CATEGORY_POSITION);
        }

        return $this->fkCmsBlockCategoryPosition;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCmsBlockCategoryPosition()
    {
        $this->assertPropertyIsSet(self::FK_CMS_BLOCK_CATEGORY_POSITION);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCmsBlockEntityTransfer|null $cmsBlock
     *
     * @return $this
     */
    public function setCmsBlock(SpyCmsBlockEntityTransfer $cmsBlock = null)
    {
        $this->cmsBlock = $cmsBlock;
        $this->modifiedProperties[self::CMS_BLOCK] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCmsBlockEntityTransfer|null
     */
    public function getCmsBlock()
    {
        return $this->cmsBlock;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCmsBlockEntityTransfer $cmsBlock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCmsBlockOrFail(SpyCmsBlockEntityTransfer $cmsBlock)
    {
        return $this->setCmsBlock($cmsBlock);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCmsBlockEntityTransfer
     */
    public function getCmsBlockOrFail()
    {
        if ($this->cmsBlock === null) {
            $this->throwNullValueException(static::CMS_BLOCK);
        }

        return $this->cmsBlock;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCmsBlock()
    {
        $this->assertPropertyIsSet(self::CMS_BLOCK);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCategoryEntityTransfer|null $category
     *
     * @return $this
     */
    public function setCategory(SpyCategoryEntityTransfer $category = null)
    {
        $this->category = $category;
        $this->modifiedProperties[self::CATEGORY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCategoryEntityTransfer|null
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCategoryEntityTransfer $category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCategoryOrFail(SpyCategoryEntityTransfer $category)
    {
        return $this->setCategory($category);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCategoryEntityTransfer
     */
    public function getCategoryOrFail()
    {
        if ($this->category === null) {
            $this->throwNullValueException(static::CATEGORY);
        }

        return $this->category;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCategory()
    {
        $this->assertPropertyIsSet(self::CATEGORY);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCategoryTemplateEntityTransfer|null $categoryTemplate
     *
     * @return $this
     */
    public function setCategoryTemplate(SpyCategoryTemplateEntityTransfer $categoryTemplate = null)
    {
        $this->categoryTemplate = $categoryTemplate;
        $this->modifiedProperties[self::CATEGORY_TEMPLATE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCategoryTemplateEntityTransfer|null
     */
    public function getCategoryTemplate()
    {
        return $this->categoryTemplate;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCategoryTemplateEntityTransfer $categoryTemplate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCategoryTemplateOrFail(SpyCategoryTemplateEntityTransfer $categoryTemplate)
    {
        return $this->setCategoryTemplate($categoryTemplate);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCategoryTemplateEntityTransfer
     */
    public function getCategoryTemplateOrFail()
    {
        if ($this->categoryTemplate === null) {
            $this->throwNullValueException(static::CATEGORY_TEMPLATE);
        }

        return $this->categoryTemplate;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCategoryTemplate()
    {
        $this->assertPropertyIsSet(self::CATEGORY_TEMPLATE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCmsBlockCategoryPositionEntityTransfer|null $cmsBlockCategoryPosition
     *
     * @return $this
     */
    public function setCmsBlockCategoryPosition(SpyCmsBlockCategoryPositionEntityTransfer $cmsBlockCategoryPosition = null)
    {
        $this->cmsBlockCategoryPosition = $cmsBlockCategoryPosition;
        $this->modifiedProperties[self::CMS_BLOCK_CATEGORY_POSITION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCmsBlockCategoryPositionEntityTransfer|null
     */
    public function getCmsBlockCategoryPosition()
    {
        return $this->cmsBlockCategoryPosition;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCmsBlockCategoryPositionEntityTransfer $cmsBlockCategoryPosition
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCmsBlockCategoryPositionOrFail(SpyCmsBlockCategoryPositionEntityTransfer $cmsBlockCategoryPosition)
    {
        return $this->setCmsBlockCategoryPosition($cmsBlockCategoryPosition);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCmsBlockCategoryPositionEntityTransfer
     */
    public function getCmsBlockCategoryPositionOrFail()
    {
        if ($this->cmsBlockCategoryPosition === null) {
            $this->throwNullValueException(static::CMS_BLOCK_CATEGORY_POSITION);
        }

        return $this->cmsBlockCategoryPosition;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCmsBlockCategoryPosition()
    {
        $this->assertPropertyIsSet(self::CMS_BLOCK_CATEGORY_POSITION);

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
                case 'idCmsBlockCategoryConnector':
                case 'fkCategory':
                case 'fkCategoryTemplate':
                case 'fkCmsBlock':
                case 'fkCmsBlockCategoryPosition':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'cmsBlock':
                case 'category':
                case 'categoryTemplate':
                case 'cmsBlockCategoryPosition':
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
                case 'idCmsBlockCategoryConnector':
                case 'fkCategory':
                case 'fkCategoryTemplate':
                case 'fkCmsBlock':
                case 'fkCmsBlockCategoryPosition':
                    $values[$arrayKey] = $value;

                    break;
                case 'cmsBlock':
                case 'category':
                case 'categoryTemplate':
                case 'cmsBlockCategoryPosition':
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
                case 'idCmsBlockCategoryConnector':
                case 'fkCategory':
                case 'fkCategoryTemplate':
                case 'fkCmsBlock':
                case 'fkCmsBlockCategoryPosition':
                    $values[$arrayKey] = $value;

                    break;
                case 'cmsBlock':
                case 'category':
                case 'categoryTemplate':
                case 'cmsBlockCategoryPosition':
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
            'idCmsBlockCategoryConnector' => $this->idCmsBlockCategoryConnector,
            'fkCategory' => $this->fkCategory,
            'fkCategoryTemplate' => $this->fkCategoryTemplate,
            'fkCmsBlock' => $this->fkCmsBlock,
            'fkCmsBlockCategoryPosition' => $this->fkCmsBlockCategoryPosition,
            'cmsBlock' => $this->cmsBlock,
            'category' => $this->category,
            'categoryTemplate' => $this->categoryTemplate,
            'cmsBlockCategoryPosition' => $this->cmsBlockCategoryPosition,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_cms_block_category_connector' => $this->idCmsBlockCategoryConnector,
            'fk_category' => $this->fkCategory,
            'fk_category_template' => $this->fkCategoryTemplate,
            'fk_cms_block' => $this->fkCmsBlock,
            'fk_cms_block_category_position' => $this->fkCmsBlockCategoryPosition,
            'cms_block' => $this->cmsBlock,
            'category' => $this->category,
            'category_template' => $this->categoryTemplate,
            'cms_block_category_position' => $this->cmsBlockCategoryPosition,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_cms_block_category_connector' => $this->idCmsBlockCategoryConnector instanceof AbstractTransfer ? $this->idCmsBlockCategoryConnector->toArray(true, false) : $this->idCmsBlockCategoryConnector,
            'fk_category' => $this->fkCategory instanceof AbstractTransfer ? $this->fkCategory->toArray(true, false) : $this->fkCategory,
            'fk_category_template' => $this->fkCategoryTemplate instanceof AbstractTransfer ? $this->fkCategoryTemplate->toArray(true, false) : $this->fkCategoryTemplate,
            'fk_cms_block' => $this->fkCmsBlock instanceof AbstractTransfer ? $this->fkCmsBlock->toArray(true, false) : $this->fkCmsBlock,
            'fk_cms_block_category_position' => $this->fkCmsBlockCategoryPosition instanceof AbstractTransfer ? $this->fkCmsBlockCategoryPosition->toArray(true, false) : $this->fkCmsBlockCategoryPosition,
            'cms_block' => $this->cmsBlock instanceof AbstractTransfer ? $this->cmsBlock->toArray(true, false) : $this->cmsBlock,
            'category' => $this->category instanceof AbstractTransfer ? $this->category->toArray(true, false) : $this->category,
            'category_template' => $this->categoryTemplate instanceof AbstractTransfer ? $this->categoryTemplate->toArray(true, false) : $this->categoryTemplate,
            'cms_block_category_position' => $this->cmsBlockCategoryPosition instanceof AbstractTransfer ? $this->cmsBlockCategoryPosition->toArray(true, false) : $this->cmsBlockCategoryPosition,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCmsBlockCategoryConnector' => $this->idCmsBlockCategoryConnector instanceof AbstractTransfer ? $this->idCmsBlockCategoryConnector->toArray(true, true) : $this->idCmsBlockCategoryConnector,
            'fkCategory' => $this->fkCategory instanceof AbstractTransfer ? $this->fkCategory->toArray(true, true) : $this->fkCategory,
            'fkCategoryTemplate' => $this->fkCategoryTemplate instanceof AbstractTransfer ? $this->fkCategoryTemplate->toArray(true, true) : $this->fkCategoryTemplate,
            'fkCmsBlock' => $this->fkCmsBlock instanceof AbstractTransfer ? $this->fkCmsBlock->toArray(true, true) : $this->fkCmsBlock,
            'fkCmsBlockCategoryPosition' => $this->fkCmsBlockCategoryPosition instanceof AbstractTransfer ? $this->fkCmsBlockCategoryPosition->toArray(true, true) : $this->fkCmsBlockCategoryPosition,
            'cmsBlock' => $this->cmsBlock instanceof AbstractTransfer ? $this->cmsBlock->toArray(true, true) : $this->cmsBlock,
            'category' => $this->category instanceof AbstractTransfer ? $this->category->toArray(true, true) : $this->category,
            'categoryTemplate' => $this->categoryTemplate instanceof AbstractTransfer ? $this->categoryTemplate->toArray(true, true) : $this->categoryTemplate,
            'cmsBlockCategoryPosition' => $this->cmsBlockCategoryPosition instanceof AbstractTransfer ? $this->cmsBlockCategoryPosition->toArray(true, true) : $this->cmsBlockCategoryPosition,
        ];
    }
}
