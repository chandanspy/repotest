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
class SpyCmsSlotToCmsSlotTemplateEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_CMS_SLOT_TO_CMS_SLOT_TEMPLATE = 'idCmsSlotToCmsSlotTemplate';

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
    public const CMS_SLOT_TEMPLATE = 'cmsSlotTemplate';

    /**
     * @var string
     */
    public const CMS_SLOT = 'cmsSlot';

    /**
     * @var integer|null
     */
    protected $idCmsSlotToCmsSlotTemplate;

    /**
     * @var integer|null
     */
    protected $fkCmsSlot;

    /**
     * @var integer|null
     */
    protected $fkCmsSlotTemplate;

    /**
     * @var \Generated\Shared\Transfer\SpyCmsSlotTemplateEntityTransfer|null
     */
    protected $cmsSlotTemplate;

    /**
     * @var \Generated\Shared\Transfer\SpyCmsSlotEntityTransfer|null
     */
    protected $cmsSlot;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_cms_slot_to_cms_slot_template' => 'idCmsSlotToCmsSlotTemplate',
        'idCmsSlotToCmsSlotTemplate' => 'idCmsSlotToCmsSlotTemplate',
        'IdCmsSlotToCmsSlotTemplate' => 'idCmsSlotToCmsSlotTemplate',
        'fk_cms_slot' => 'fkCmsSlot',
        'fkCmsSlot' => 'fkCmsSlot',
        'FkCmsSlot' => 'fkCmsSlot',
        'fk_cms_slot_template' => 'fkCmsSlotTemplate',
        'fkCmsSlotTemplate' => 'fkCmsSlotTemplate',
        'FkCmsSlotTemplate' => 'fkCmsSlotTemplate',
        'cms_slot_template' => 'cmsSlotTemplate',
        'cmsSlotTemplate' => 'cmsSlotTemplate',
        'CmsSlotTemplate' => 'cmsSlotTemplate',
        'cms_slot' => 'cmsSlot',
        'cmsSlot' => 'cmsSlot',
        'CmsSlot' => 'cmsSlot',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_CMS_SLOT_TO_CMS_SLOT_TEMPLATE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_cms_slot_to_cms_slot_template',
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
    ];
    /**
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\CmsSlot\Persistence\SpyCmsSlotToCmsSlotTemplate';


    /**
     * @module 
     *
     * @param integer|null $idCmsSlotToCmsSlotTemplate
     *
     * @return $this
     */
    public function setIdCmsSlotToCmsSlotTemplate($idCmsSlotToCmsSlotTemplate)
    {
        $this->idCmsSlotToCmsSlotTemplate = $idCmsSlotToCmsSlotTemplate;
        $this->modifiedProperties[self::ID_CMS_SLOT_TO_CMS_SLOT_TEMPLATE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdCmsSlotToCmsSlotTemplate()
    {
        return $this->idCmsSlotToCmsSlotTemplate;
    }

    /**
     * @module 
     *
     * @param integer|null $idCmsSlotToCmsSlotTemplate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCmsSlotToCmsSlotTemplateOrFail($idCmsSlotToCmsSlotTemplate)
    {
        if ($idCmsSlotToCmsSlotTemplate === null) {
            $this->throwNullValueException(static::ID_CMS_SLOT_TO_CMS_SLOT_TEMPLATE);
        }

        return $this->setIdCmsSlotToCmsSlotTemplate($idCmsSlotToCmsSlotTemplate);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdCmsSlotToCmsSlotTemplateOrFail()
    {
        if ($this->idCmsSlotToCmsSlotTemplate === null) {
            $this->throwNullValueException(static::ID_CMS_SLOT_TO_CMS_SLOT_TEMPLATE);
        }

        return $this->idCmsSlotToCmsSlotTemplate;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCmsSlotToCmsSlotTemplate()
    {
        $this->assertPropertyIsSet(self::ID_CMS_SLOT_TO_CMS_SLOT_TEMPLATE);

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
                case 'idCmsSlotToCmsSlotTemplate':
                case 'fkCmsSlot':
                case 'fkCmsSlotTemplate':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'cmsSlotTemplate':
                case 'cmsSlot':
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
                case 'idCmsSlotToCmsSlotTemplate':
                case 'fkCmsSlot':
                case 'fkCmsSlotTemplate':
                    $values[$arrayKey] = $value;

                    break;
                case 'cmsSlotTemplate':
                case 'cmsSlot':
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
                case 'idCmsSlotToCmsSlotTemplate':
                case 'fkCmsSlot':
                case 'fkCmsSlotTemplate':
                    $values[$arrayKey] = $value;

                    break;
                case 'cmsSlotTemplate':
                case 'cmsSlot':
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
            'idCmsSlotToCmsSlotTemplate' => $this->idCmsSlotToCmsSlotTemplate,
            'fkCmsSlot' => $this->fkCmsSlot,
            'fkCmsSlotTemplate' => $this->fkCmsSlotTemplate,
            'cmsSlotTemplate' => $this->cmsSlotTemplate,
            'cmsSlot' => $this->cmsSlot,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_cms_slot_to_cms_slot_template' => $this->idCmsSlotToCmsSlotTemplate,
            'fk_cms_slot' => $this->fkCmsSlot,
            'fk_cms_slot_template' => $this->fkCmsSlotTemplate,
            'cms_slot_template' => $this->cmsSlotTemplate,
            'cms_slot' => $this->cmsSlot,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_cms_slot_to_cms_slot_template' => $this->idCmsSlotToCmsSlotTemplate instanceof AbstractTransfer ? $this->idCmsSlotToCmsSlotTemplate->toArray(true, false) : $this->idCmsSlotToCmsSlotTemplate,
            'fk_cms_slot' => $this->fkCmsSlot instanceof AbstractTransfer ? $this->fkCmsSlot->toArray(true, false) : $this->fkCmsSlot,
            'fk_cms_slot_template' => $this->fkCmsSlotTemplate instanceof AbstractTransfer ? $this->fkCmsSlotTemplate->toArray(true, false) : $this->fkCmsSlotTemplate,
            'cms_slot_template' => $this->cmsSlotTemplate instanceof AbstractTransfer ? $this->cmsSlotTemplate->toArray(true, false) : $this->cmsSlotTemplate,
            'cms_slot' => $this->cmsSlot instanceof AbstractTransfer ? $this->cmsSlot->toArray(true, false) : $this->cmsSlot,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCmsSlotToCmsSlotTemplate' => $this->idCmsSlotToCmsSlotTemplate instanceof AbstractTransfer ? $this->idCmsSlotToCmsSlotTemplate->toArray(true, true) : $this->idCmsSlotToCmsSlotTemplate,
            'fkCmsSlot' => $this->fkCmsSlot instanceof AbstractTransfer ? $this->fkCmsSlot->toArray(true, true) : $this->fkCmsSlot,
            'fkCmsSlotTemplate' => $this->fkCmsSlotTemplate instanceof AbstractTransfer ? $this->fkCmsSlotTemplate->toArray(true, true) : $this->fkCmsSlotTemplate,
            'cmsSlotTemplate' => $this->cmsSlotTemplate instanceof AbstractTransfer ? $this->cmsSlotTemplate->toArray(true, true) : $this->cmsSlotTemplate,
            'cmsSlot' => $this->cmsSlot instanceof AbstractTransfer ? $this->cmsSlot->toArray(true, true) : $this->cmsSlot,
        ];
    }
}
