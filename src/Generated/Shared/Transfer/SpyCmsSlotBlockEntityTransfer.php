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
class SpyCmsSlotBlockEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_CMS_SLOT_BLOCK = 'idCmsSlotBlock';

    /**
     * @var string
     */
    public const FK_CMS_BLOCK = 'fkCmsBlock';

    /**
     * @var string
     */
    public const FK_CMS_SLOT = 'fkCmsSlot';

    /**
     * @var string
     */
    public const FK_CMS_SLOT_TEMPLATE = 'fkCmsSlotTemplate';

    /**
     * @var string
     */
    public const CONDITIONS = 'conditions';

    /**
     * @var string
     */
    public const POSITION = 'position';

    /**
     * @var string
     */
    public const CMS_SLOT_TEMPLATE = 'cmsSlotTemplate';

    /**
     * @var string
     */
    public const CMS_SLOT = 'cmsSlot';

    /**
     * @var string
     */
    public const CMS_BLOCK = 'cmsBlock';

    /**
     * @var string|null
     */
    protected $idCmsSlotBlock;

    /**
     * @var integer|null
     */
    protected $fkCmsBlock;

    /**
     * @var integer|null
     */
    protected $fkCmsSlot;

    /**
     * @var integer|null
     */
    protected $fkCmsSlotTemplate;

    /**
     * @var string|null
     */
    protected $conditions;

    /**
     * @var integer|null
     */
    protected $position;

    /**
     * @var \Generated\Shared\Transfer\SpyCmsSlotTemplateEntityTransfer|null
     */
    protected $cmsSlotTemplate;

    /**
     * @var \Generated\Shared\Transfer\SpyCmsSlotEntityTransfer|null
     */
    protected $cmsSlot;

    /**
     * @var \Generated\Shared\Transfer\SpyCmsBlockEntityTransfer|null
     */
    protected $cmsBlock;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_cms_slot_block' => 'idCmsSlotBlock',
        'idCmsSlotBlock' => 'idCmsSlotBlock',
        'IdCmsSlotBlock' => 'idCmsSlotBlock',
        'fk_cms_block' => 'fkCmsBlock',
        'fkCmsBlock' => 'fkCmsBlock',
        'FkCmsBlock' => 'fkCmsBlock',
        'fk_cms_slot' => 'fkCmsSlot',
        'fkCmsSlot' => 'fkCmsSlot',
        'FkCmsSlot' => 'fkCmsSlot',
        'fk_cms_slot_template' => 'fkCmsSlotTemplate',
        'fkCmsSlotTemplate' => 'fkCmsSlotTemplate',
        'FkCmsSlotTemplate' => 'fkCmsSlotTemplate',
        'conditions' => 'conditions',
        'Conditions' => 'conditions',
        'position' => 'position',
        'Position' => 'position',
        'cms_slot_template' => 'cmsSlotTemplate',
        'cmsSlotTemplate' => 'cmsSlotTemplate',
        'CmsSlotTemplate' => 'cmsSlotTemplate',
        'cms_slot' => 'cmsSlot',
        'cmsSlot' => 'cmsSlot',
        'CmsSlot' => 'cmsSlot',
        'cms_block' => 'cmsBlock',
        'cmsBlock' => 'cmsBlock',
        'CmsBlock' => 'cmsBlock',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_CMS_SLOT_BLOCK => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'id_cms_slot_block',
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
        self::FK_CMS_SLOT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_cms_slot',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_CMS_SLOT_TEMPLATE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_cms_slot_template',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONDITIONS => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'conditions',
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
        self::CMS_SLOT_TEMPLATE => [
            'type' => 'Generated\Shared\Transfer\SpyCmsSlotTemplateEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'cms_slot_template',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CMS_SLOT => [
            'type' => 'Generated\Shared\Transfer\SpyCmsSlotEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'cms_slot',
            'is_collection' => false,
            'is_transfer' => true,
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
    ];
    /**
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\CmsSlotBlock\Persistence\SpyCmsSlotBlock';


    /**
     * @module 
     *
     * @param string|null $idCmsSlotBlock
     *
     * @return $this
     */
    public function setIdCmsSlotBlock($idCmsSlotBlock)
    {
        $this->idCmsSlotBlock = $idCmsSlotBlock;
        $this->modifiedProperties[self::ID_CMS_SLOT_BLOCK] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getIdCmsSlotBlock()
    {
        return $this->idCmsSlotBlock;
    }

    /**
     * @module 
     *
     * @param string|null $idCmsSlotBlock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCmsSlotBlockOrFail($idCmsSlotBlock)
    {
        if ($idCmsSlotBlock === null) {
            $this->throwNullValueException(static::ID_CMS_SLOT_BLOCK);
        }

        return $this->setIdCmsSlotBlock($idCmsSlotBlock);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIdCmsSlotBlockOrFail()
    {
        if ($this->idCmsSlotBlock === null) {
            $this->throwNullValueException(static::ID_CMS_SLOT_BLOCK);
        }

        return $this->idCmsSlotBlock;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCmsSlotBlock()
    {
        $this->assertPropertyIsSet(self::ID_CMS_SLOT_BLOCK);

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
     * @param integer|null $fkCmsSlot
     *
     * @return $this
     */
    public function setFkCmsSlot($fkCmsSlot)
    {
        $this->fkCmsSlot = $fkCmsSlot;
        $this->modifiedProperties[self::FK_CMS_SLOT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkCmsSlot()
    {
        return $this->fkCmsSlot;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCmsSlot
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCmsSlotOrFail($fkCmsSlot)
    {
        if ($fkCmsSlot === null) {
            $this->throwNullValueException(static::FK_CMS_SLOT);
        }

        return $this->setFkCmsSlot($fkCmsSlot);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCmsSlotOrFail()
    {
        if ($this->fkCmsSlot === null) {
            $this->throwNullValueException(static::FK_CMS_SLOT);
        }

        return $this->fkCmsSlot;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCmsSlot()
    {
        $this->assertPropertyIsSet(self::FK_CMS_SLOT);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCmsSlotTemplate
     *
     * @return $this
     */
    public function setFkCmsSlotTemplate($fkCmsSlotTemplate)
    {
        $this->fkCmsSlotTemplate = $fkCmsSlotTemplate;
        $this->modifiedProperties[self::FK_CMS_SLOT_TEMPLATE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkCmsSlotTemplate()
    {
        return $this->fkCmsSlotTemplate;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCmsSlotTemplate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCmsSlotTemplateOrFail($fkCmsSlotTemplate)
    {
        if ($fkCmsSlotTemplate === null) {
            $this->throwNullValueException(static::FK_CMS_SLOT_TEMPLATE);
        }

        return $this->setFkCmsSlotTemplate($fkCmsSlotTemplate);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCmsSlotTemplateOrFail()
    {
        if ($this->fkCmsSlotTemplate === null) {
            $this->throwNullValueException(static::FK_CMS_SLOT_TEMPLATE);
        }

        return $this->fkCmsSlotTemplate;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCmsSlotTemplate()
    {
        $this->assertPropertyIsSet(self::FK_CMS_SLOT_TEMPLATE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $conditions
     *
     * @return $this
     */
    public function setConditions($conditions)
    {
        $this->conditions = $conditions;
        $this->modifiedProperties[self::CONDITIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getConditions()
    {
        return $this->conditions;
    }

    /**
     * @module 
     *
     * @param string|null $conditions
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setConditionsOrFail($conditions)
    {
        if ($conditions === null) {
            $this->throwNullValueException(static::CONDITIONS);
        }

        return $this->setConditions($conditions);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getConditionsOrFail()
    {
        if ($this->conditions === null) {
            $this->throwNullValueException(static::CONDITIONS);
        }

        return $this->conditions;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConditions()
    {
        $this->assertPropertyIsSet(self::CONDITIONS);

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
     * @param \Generated\Shared\Transfer\SpyCmsSlotTemplateEntityTransfer|null $cmsSlotTemplate
     *
     * @return $this
     */
    public function setCmsSlotTemplate(SpyCmsSlotTemplateEntityTransfer $cmsSlotTemplate = null)
    {
        $this->cmsSlotTemplate = $cmsSlotTemplate;
        $this->modifiedProperties[self::CMS_SLOT_TEMPLATE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCmsSlotTemplateEntityTransfer|null
     */
    public function getCmsSlotTemplate()
    {
        return $this->cmsSlotTemplate;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCmsSlotTemplateEntityTransfer $cmsSlotTemplate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCmsSlotTemplateOrFail(SpyCmsSlotTemplateEntityTransfer $cmsSlotTemplate)
    {
        return $this->setCmsSlotTemplate($cmsSlotTemplate);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCmsSlotTemplateEntityTransfer
     */
    public function getCmsSlotTemplateOrFail()
    {
        if ($this->cmsSlotTemplate === null) {
            $this->throwNullValueException(static::CMS_SLOT_TEMPLATE);
        }

        return $this->cmsSlotTemplate;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCmsSlotTemplate()
    {
        $this->assertPropertyIsSet(self::CMS_SLOT_TEMPLATE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCmsSlotEntityTransfer|null $cmsSlot
     *
     * @return $this
     */
    public function setCmsSlot(SpyCmsSlotEntityTransfer $cmsSlot = null)
    {
        $this->cmsSlot = $cmsSlot;
        $this->modifiedProperties[self::CMS_SLOT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCmsSlotEntityTransfer|null
     */
    public function getCmsSlot()
    {
        return $this->cmsSlot;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCmsSlotEntityTransfer $cmsSlot
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCmsSlotOrFail(SpyCmsSlotEntityTransfer $cmsSlot)
    {
        return $this->setCmsSlot($cmsSlot);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCmsSlotEntityTransfer
     */
    public function getCmsSlotOrFail()
    {
        if ($this->cmsSlot === null) {
            $this->throwNullValueException(static::CMS_SLOT);
        }

        return $this->cmsSlot;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCmsSlot()
    {
        $this->assertPropertyIsSet(self::CMS_SLOT);

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
                case 'idCmsSlotBlock':
                case 'fkCmsBlock':
                case 'fkCmsSlot':
                case 'fkCmsSlotTemplate':
                case 'conditions':
                case 'position':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'cmsSlotTemplate':
                case 'cmsSlot':
                case 'cmsBlock':
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
                case 'idCmsSlotBlock':
                case 'fkCmsBlock':
                case 'fkCmsSlot':
                case 'fkCmsSlotTemplate':
                case 'conditions':
                case 'position':
                    $values[$arrayKey] = $value;

                    break;
                case 'cmsSlotTemplate':
                case 'cmsSlot':
                case 'cmsBlock':
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
                case 'idCmsSlotBlock':
                case 'fkCmsBlock':
                case 'fkCmsSlot':
                case 'fkCmsSlotTemplate':
                case 'conditions':
                case 'position':
                    $values[$arrayKey] = $value;

                    break;
                case 'cmsSlotTemplate':
                case 'cmsSlot':
                case 'cmsBlock':
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
            'idCmsSlotBlock' => $this->idCmsSlotBlock,
            'fkCmsBlock' => $this->fkCmsBlock,
            'fkCmsSlot' => $this->fkCmsSlot,
            'fkCmsSlotTemplate' => $this->fkCmsSlotTemplate,
            'conditions' => $this->conditions,
            'position' => $this->position,
            'cmsSlotTemplate' => $this->cmsSlotTemplate,
            'cmsSlot' => $this->cmsSlot,
            'cmsBlock' => $this->cmsBlock,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_cms_slot_block' => $this->idCmsSlotBlock,
            'fk_cms_block' => $this->fkCmsBlock,
            'fk_cms_slot' => $this->fkCmsSlot,
            'fk_cms_slot_template' => $this->fkCmsSlotTemplate,
            'conditions' => $this->conditions,
            'position' => $this->position,
            'cms_slot_template' => $this->cmsSlotTemplate,
            'cms_slot' => $this->cmsSlot,
            'cms_block' => $this->cmsBlock,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_cms_slot_block' => $this->idCmsSlotBlock instanceof AbstractTransfer ? $this->idCmsSlotBlock->toArray(true, false) : $this->idCmsSlotBlock,
            'fk_cms_block' => $this->fkCmsBlock instanceof AbstractTransfer ? $this->fkCmsBlock->toArray(true, false) : $this->fkCmsBlock,
            'fk_cms_slot' => $this->fkCmsSlot instanceof AbstractTransfer ? $this->fkCmsSlot->toArray(true, false) : $this->fkCmsSlot,
            'fk_cms_slot_template' => $this->fkCmsSlotTemplate instanceof AbstractTransfer ? $this->fkCmsSlotTemplate->toArray(true, false) : $this->fkCmsSlotTemplate,
            'conditions' => $this->conditions instanceof AbstractTransfer ? $this->conditions->toArray(true, false) : $this->conditions,
            'position' => $this->position instanceof AbstractTransfer ? $this->position->toArray(true, false) : $this->position,
            'cms_slot_template' => $this->cmsSlotTemplate instanceof AbstractTransfer ? $this->cmsSlotTemplate->toArray(true, false) : $this->cmsSlotTemplate,
            'cms_slot' => $this->cmsSlot instanceof AbstractTransfer ? $this->cmsSlot->toArray(true, false) : $this->cmsSlot,
            'cms_block' => $this->cmsBlock instanceof AbstractTransfer ? $this->cmsBlock->toArray(true, false) : $this->cmsBlock,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCmsSlotBlock' => $this->idCmsSlotBlock instanceof AbstractTransfer ? $this->idCmsSlotBlock->toArray(true, true) : $this->idCmsSlotBlock,
            'fkCmsBlock' => $this->fkCmsBlock instanceof AbstractTransfer ? $this->fkCmsBlock->toArray(true, true) : $this->fkCmsBlock,
            'fkCmsSlot' => $this->fkCmsSlot instanceof AbstractTransfer ? $this->fkCmsSlot->toArray(true, true) : $this->fkCmsSlot,
            'fkCmsSlotTemplate' => $this->fkCmsSlotTemplate instanceof AbstractTransfer ? $this->fkCmsSlotTemplate->toArray(true, true) : $this->fkCmsSlotTemplate,
            'conditions' => $this->conditions instanceof AbstractTransfer ? $this->conditions->toArray(true, true) : $this->conditions,
            'position' => $this->position instanceof AbstractTransfer ? $this->position->toArray(true, true) : $this->position,
            'cmsSlotTemplate' => $this->cmsSlotTemplate instanceof AbstractTransfer ? $this->cmsSlotTemplate->toArray(true, true) : $this->cmsSlotTemplate,
            'cmsSlot' => $this->cmsSlot instanceof AbstractTransfer ? $this->cmsSlot->toArray(true, true) : $this->cmsSlot,
            'cmsBlock' => $this->cmsBlock instanceof AbstractTransfer ? $this->cmsBlock->toArray(true, true) : $this->cmsBlock,
        ];
    }
}
