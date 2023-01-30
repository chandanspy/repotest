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
class CmsSlotBlockStorageTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_CMS_SLOT = 'idCmsSlot';

    /**
     * @var string
     */
    public const ID_CMS_SLOT_TEMPLATE = 'idCmsSlotTemplate';

    /**
     * @var string
     */
    public const SLOT_KEY = 'slotKey';

    /**
     * @var string
     */
    public const TEMPLATE_PATH = 'templatePath';

    /**
     * @var string
     */
    public const SLOT_TEMPLATE_KEY = 'slotTemplateKey';

    /**
     * @var string
     */
    public const DATA = 'data';

    /**
     * @var int|null
     */
    protected $idCmsSlot;

    /**
     * @var int|null
     */
    protected $idCmsSlotTemplate;

    /**
     * @var string|null
     */
    protected $slotKey;

    /**
     * @var string|null
     */
    protected $templatePath;

    /**
     * @var string|null
     */
    protected $slotTemplateKey;

    /**
     * @var \Generated\Shared\Transfer\CmsSlotBlockCollectionTransfer|null
     */
    protected $data;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_cms_slot' => 'idCmsSlot',
        'idCmsSlot' => 'idCmsSlot',
        'IdCmsSlot' => 'idCmsSlot',
        'id_cms_slot_template' => 'idCmsSlotTemplate',
        'idCmsSlotTemplate' => 'idCmsSlotTemplate',
        'IdCmsSlotTemplate' => 'idCmsSlotTemplate',
        'slot_key' => 'slotKey',
        'slotKey' => 'slotKey',
        'SlotKey' => 'slotKey',
        'template_path' => 'templatePath',
        'templatePath' => 'templatePath',
        'TemplatePath' => 'templatePath',
        'slot_template_key' => 'slotTemplateKey',
        'slotTemplateKey' => 'slotTemplateKey',
        'SlotTemplateKey' => 'slotTemplateKey',
        'data' => 'data',
        'Data' => 'data',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_CMS_SLOT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_cms_slot',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_CMS_SLOT_TEMPLATE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_cms_slot_template',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SLOT_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'slot_key',
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
        self::SLOT_TEMPLATE_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'slot_template_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DATA => [
            'type' => 'Generated\Shared\Transfer\CmsSlotBlockCollectionTransfer',
            'type_shim' => null,
            'name_underscore' => 'data',
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
     * @module CmsSlotBlockStorage
     *
     * @param int|null $idCmsSlot
     *
     * @return $this
     */
    public function setIdCmsSlot($idCmsSlot)
    {
        $this->idCmsSlot = $idCmsSlot;
        $this->modifiedProperties[self::ID_CMS_SLOT] = true;

        return $this;
    }

    /**
     * @module CmsSlotBlockStorage
     *
     * @return int|null
     */
    public function getIdCmsSlot()
    {
        return $this->idCmsSlot;
    }

    /**
     * @module CmsSlotBlockStorage
     *
     * @param int|null $idCmsSlot
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCmsSlotOrFail($idCmsSlot)
    {
        if ($idCmsSlot === null) {
            $this->throwNullValueException(static::ID_CMS_SLOT);
        }

        return $this->setIdCmsSlot($idCmsSlot);
    }

    /**
     * @module CmsSlotBlockStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCmsSlotOrFail()
    {
        if ($this->idCmsSlot === null) {
            $this->throwNullValueException(static::ID_CMS_SLOT);
        }

        return $this->idCmsSlot;
    }

    /**
     * @module CmsSlotBlockStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCmsSlot()
    {
        $this->assertPropertyIsSet(self::ID_CMS_SLOT);

        return $this;
    }

    /**
     * @module CmsSlotBlockStorage
     *
     * @param int|null $idCmsSlotTemplate
     *
     * @return $this
     */
    public function setIdCmsSlotTemplate($idCmsSlotTemplate)
    {
        $this->idCmsSlotTemplate = $idCmsSlotTemplate;
        $this->modifiedProperties[self::ID_CMS_SLOT_TEMPLATE] = true;

        return $this;
    }

    /**
     * @module CmsSlotBlockStorage
     *
     * @return int|null
     */
    public function getIdCmsSlotTemplate()
    {
        return $this->idCmsSlotTemplate;
    }

    /**
     * @module CmsSlotBlockStorage
     *
     * @param int|null $idCmsSlotTemplate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCmsSlotTemplateOrFail($idCmsSlotTemplate)
    {
        if ($idCmsSlotTemplate === null) {
            $this->throwNullValueException(static::ID_CMS_SLOT_TEMPLATE);
        }

        return $this->setIdCmsSlotTemplate($idCmsSlotTemplate);
    }

    /**
     * @module CmsSlotBlockStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCmsSlotTemplateOrFail()
    {
        if ($this->idCmsSlotTemplate === null) {
            $this->throwNullValueException(static::ID_CMS_SLOT_TEMPLATE);
        }

        return $this->idCmsSlotTemplate;
    }

    /**
     * @module CmsSlotBlockStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCmsSlotTemplate()
    {
        $this->assertPropertyIsSet(self::ID_CMS_SLOT_TEMPLATE);

        return $this;
    }

    /**
     * @module CmsSlotBlockStorage
     *
     * @param string|null $slotKey
     *
     * @return $this
     */
    public function setSlotKey($slotKey)
    {
        $this->slotKey = $slotKey;
        $this->modifiedProperties[self::SLOT_KEY] = true;

        return $this;
    }

    /**
     * @module CmsSlotBlockStorage
     *
     * @return string|null
     */
    public function getSlotKey()
    {
        return $this->slotKey;
    }

    /**
     * @module CmsSlotBlockStorage
     *
     * @param string|null $slotKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSlotKeyOrFail($slotKey)
    {
        if ($slotKey === null) {
            $this->throwNullValueException(static::SLOT_KEY);
        }

        return $this->setSlotKey($slotKey);
    }

    /**
     * @module CmsSlotBlockStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSlotKeyOrFail()
    {
        if ($this->slotKey === null) {
            $this->throwNullValueException(static::SLOT_KEY);
        }

        return $this->slotKey;
    }

    /**
     * @module CmsSlotBlockStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSlotKey()
    {
        $this->assertPropertyIsSet(self::SLOT_KEY);

        return $this;
    }

    /**
     * @module CmsSlotBlockStorage
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
     * @module CmsSlotBlockStorage
     *
     * @return string|null
     */
    public function getTemplatePath()
    {
        return $this->templatePath;
    }

    /**
     * @module CmsSlotBlockStorage
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
     * @module CmsSlotBlockStorage
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
     * @module CmsSlotBlockStorage
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
     * @module CmsSlotBlockStorage
     *
     * @param string|null $slotTemplateKey
     *
     * @return $this
     */
    public function setSlotTemplateKey($slotTemplateKey)
    {
        $this->slotTemplateKey = $slotTemplateKey;
        $this->modifiedProperties[self::SLOT_TEMPLATE_KEY] = true;

        return $this;
    }

    /**
     * @module CmsSlotBlockStorage
     *
     * @return string|null
     */
    public function getSlotTemplateKey()
    {
        return $this->slotTemplateKey;
    }

    /**
     * @module CmsSlotBlockStorage
     *
     * @param string|null $slotTemplateKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSlotTemplateKeyOrFail($slotTemplateKey)
    {
        if ($slotTemplateKey === null) {
            $this->throwNullValueException(static::SLOT_TEMPLATE_KEY);
        }

        return $this->setSlotTemplateKey($slotTemplateKey);
    }

    /**
     * @module CmsSlotBlockStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSlotTemplateKeyOrFail()
    {
        if ($this->slotTemplateKey === null) {
            $this->throwNullValueException(static::SLOT_TEMPLATE_KEY);
        }

        return $this->slotTemplateKey;
    }

    /**
     * @module CmsSlotBlockStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSlotTemplateKey()
    {
        $this->assertPropertyIsSet(self::SLOT_TEMPLATE_KEY);

        return $this;
    }

    /**
     * @module CmsSlotBlockStorage
     *
     * @param \Generated\Shared\Transfer\CmsSlotBlockCollectionTransfer|null $data
     *
     * @return $this
     */
    public function setData(CmsSlotBlockCollectionTransfer $data = null)
    {
        $this->data = $data;
        $this->modifiedProperties[self::DATA] = true;

        return $this;
    }

    /**
     * @module CmsSlotBlockStorage
     *
     * @return \Generated\Shared\Transfer\CmsSlotBlockCollectionTransfer|null
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @module CmsSlotBlockStorage
     *
     * @param \Generated\Shared\Transfer\CmsSlotBlockCollectionTransfer $data
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDataOrFail(CmsSlotBlockCollectionTransfer $data)
    {
        return $this->setData($data);
    }

    /**
     * @module CmsSlotBlockStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CmsSlotBlockCollectionTransfer
     */
    public function getDataOrFail()
    {
        if ($this->data === null) {
            $this->throwNullValueException(static::DATA);
        }

        return $this->data;
    }

    /**
     * @module CmsSlotBlockStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireData()
    {
        $this->assertPropertyIsSet(self::DATA);

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
                case 'idCmsSlot':
                case 'idCmsSlotTemplate':
                case 'slotKey':
                case 'templatePath':
                case 'slotTemplateKey':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'data':
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
                case 'idCmsSlot':
                case 'idCmsSlotTemplate':
                case 'slotKey':
                case 'templatePath':
                case 'slotTemplateKey':
                    $values[$arrayKey] = $value;

                    break;
                case 'data':
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
                case 'idCmsSlot':
                case 'idCmsSlotTemplate':
                case 'slotKey':
                case 'templatePath':
                case 'slotTemplateKey':
                    $values[$arrayKey] = $value;

                    break;
                case 'data':
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
            'idCmsSlot' => $this->idCmsSlot,
            'idCmsSlotTemplate' => $this->idCmsSlotTemplate,
            'slotKey' => $this->slotKey,
            'templatePath' => $this->templatePath,
            'slotTemplateKey' => $this->slotTemplateKey,
            'data' => $this->data,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_cms_slot' => $this->idCmsSlot,
            'id_cms_slot_template' => $this->idCmsSlotTemplate,
            'slot_key' => $this->slotKey,
            'template_path' => $this->templatePath,
            'slot_template_key' => $this->slotTemplateKey,
            'data' => $this->data,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_cms_slot' => $this->idCmsSlot instanceof AbstractTransfer ? $this->idCmsSlot->toArray(true, false) : $this->idCmsSlot,
            'id_cms_slot_template' => $this->idCmsSlotTemplate instanceof AbstractTransfer ? $this->idCmsSlotTemplate->toArray(true, false) : $this->idCmsSlotTemplate,
            'slot_key' => $this->slotKey instanceof AbstractTransfer ? $this->slotKey->toArray(true, false) : $this->slotKey,
            'template_path' => $this->templatePath instanceof AbstractTransfer ? $this->templatePath->toArray(true, false) : $this->templatePath,
            'slot_template_key' => $this->slotTemplateKey instanceof AbstractTransfer ? $this->slotTemplateKey->toArray(true, false) : $this->slotTemplateKey,
            'data' => $this->data instanceof AbstractTransfer ? $this->data->toArray(true, false) : $this->data,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCmsSlot' => $this->idCmsSlot instanceof AbstractTransfer ? $this->idCmsSlot->toArray(true, true) : $this->idCmsSlot,
            'idCmsSlotTemplate' => $this->idCmsSlotTemplate instanceof AbstractTransfer ? $this->idCmsSlotTemplate->toArray(true, true) : $this->idCmsSlotTemplate,
            'slotKey' => $this->slotKey instanceof AbstractTransfer ? $this->slotKey->toArray(true, true) : $this->slotKey,
            'templatePath' => $this->templatePath instanceof AbstractTransfer ? $this->templatePath->toArray(true, true) : $this->templatePath,
            'slotTemplateKey' => $this->slotTemplateKey instanceof AbstractTransfer ? $this->slotTemplateKey->toArray(true, true) : $this->slotTemplateKey,
            'data' => $this->data instanceof AbstractTransfer ? $this->data->toArray(true, true) : $this->data,
        ];
    }
}
