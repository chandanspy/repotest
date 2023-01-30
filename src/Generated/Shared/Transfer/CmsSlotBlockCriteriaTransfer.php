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
class CmsSlotBlockCriteriaTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_CMS_SLOT_TEMPLATE = 'idCmsSlotTemplate';

    /**
     * @var string
     */
    public const ID_CMS_SLOT = 'idCmsSlot';

    /**
     * @var string
     */
    public const FILTER = 'filter';

    /**
     * @var int|null
     */
    protected $idCmsSlotTemplate;

    /**
     * @var int|null
     */
    protected $idCmsSlot;

    /**
     * @var \Generated\Shared\Transfer\FilterTransfer|null
     */
    protected $filter;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_cms_slot_template' => 'idCmsSlotTemplate',
        'idCmsSlotTemplate' => 'idCmsSlotTemplate',
        'IdCmsSlotTemplate' => 'idCmsSlotTemplate',
        'id_cms_slot' => 'idCmsSlot',
        'idCmsSlot' => 'idCmsSlot',
        'IdCmsSlot' => 'idCmsSlot',
        'filter' => 'filter',
        'Filter' => 'filter',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::FILTER => [
            'type' => 'Generated\Shared\Transfer\FilterTransfer',
            'type_shim' => null,
            'name_underscore' => 'filter',
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
     * @module CmsSlotBlockGui|CmsSlotBlockStorage|CmsSlotBlock
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
     * @module CmsSlotBlockGui|CmsSlotBlockStorage|CmsSlotBlock
     *
     * @return int|null
     */
    public function getIdCmsSlotTemplate()
    {
        return $this->idCmsSlotTemplate;
    }

    /**
     * @module CmsSlotBlockGui|CmsSlotBlockStorage|CmsSlotBlock
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
     * @module CmsSlotBlockGui|CmsSlotBlockStorage|CmsSlotBlock
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
     * @module CmsSlotBlockGui|CmsSlotBlockStorage|CmsSlotBlock
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
     * @module CmsSlotBlockGui|CmsSlotBlockStorage|CmsSlotBlock
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
     * @module CmsSlotBlockGui|CmsSlotBlockStorage|CmsSlotBlock
     *
     * @return int|null
     */
    public function getIdCmsSlot()
    {
        return $this->idCmsSlot;
    }

    /**
     * @module CmsSlotBlockGui|CmsSlotBlockStorage|CmsSlotBlock
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
     * @module CmsSlotBlockGui|CmsSlotBlockStorage|CmsSlotBlock
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
     * @module CmsSlotBlockGui|CmsSlotBlockStorage|CmsSlotBlock
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
     * @module CmsSlotBlockStorage|CmsSlotBlock
     *
     * @param \Generated\Shared\Transfer\FilterTransfer|null $filter
     *
     * @return $this
     */
    public function setFilter(FilterTransfer $filter = null)
    {
        $this->filter = $filter;
        $this->modifiedProperties[self::FILTER] = true;

        return $this;
    }

    /**
     * @module CmsSlotBlockStorage|CmsSlotBlock
     *
     * @return \Generated\Shared\Transfer\FilterTransfer|null
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * @module CmsSlotBlockStorage|CmsSlotBlock
     *
     * @param \Generated\Shared\Transfer\FilterTransfer $filter
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFilterOrFail(FilterTransfer $filter)
    {
        return $this->setFilter($filter);
    }

    /**
     * @module CmsSlotBlockStorage|CmsSlotBlock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\FilterTransfer
     */
    public function getFilterOrFail()
    {
        if ($this->filter === null) {
            $this->throwNullValueException(static::FILTER);
        }

        return $this->filter;
    }

    /**
     * @module CmsSlotBlockStorage|CmsSlotBlock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFilter()
    {
        $this->assertPropertyIsSet(self::FILTER);

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
                case 'idCmsSlotTemplate':
                case 'idCmsSlot':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'filter':
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
                case 'idCmsSlotTemplate':
                case 'idCmsSlot':
                    $values[$arrayKey] = $value;

                    break;
                case 'filter':
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
                case 'idCmsSlotTemplate':
                case 'idCmsSlot':
                    $values[$arrayKey] = $value;

                    break;
                case 'filter':
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
            'idCmsSlotTemplate' => $this->idCmsSlotTemplate,
            'idCmsSlot' => $this->idCmsSlot,
            'filter' => $this->filter,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_cms_slot_template' => $this->idCmsSlotTemplate,
            'id_cms_slot' => $this->idCmsSlot,
            'filter' => $this->filter,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_cms_slot_template' => $this->idCmsSlotTemplate instanceof AbstractTransfer ? $this->idCmsSlotTemplate->toArray(true, false) : $this->idCmsSlotTemplate,
            'id_cms_slot' => $this->idCmsSlot instanceof AbstractTransfer ? $this->idCmsSlot->toArray(true, false) : $this->idCmsSlot,
            'filter' => $this->filter instanceof AbstractTransfer ? $this->filter->toArray(true, false) : $this->filter,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCmsSlotTemplate' => $this->idCmsSlotTemplate instanceof AbstractTransfer ? $this->idCmsSlotTemplate->toArray(true, true) : $this->idCmsSlotTemplate,
            'idCmsSlot' => $this->idCmsSlot instanceof AbstractTransfer ? $this->idCmsSlot->toArray(true, true) : $this->idCmsSlot,
            'filter' => $this->filter instanceof AbstractTransfer ? $this->filter->toArray(true, true) : $this->filter,
        ];
    }
}
