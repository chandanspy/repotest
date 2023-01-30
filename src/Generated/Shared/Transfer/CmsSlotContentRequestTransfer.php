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
class CmsSlotContentRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const CMS_SLOT_KEY = 'cmsSlotKey';

    /**
     * @var string
     */
    public const CMS_SLOT_TEMPLATE_PATH = 'cmsSlotTemplatePath';

    /**
     * @var string
     */
    public const CMS_SLOT_PARAMS = 'cmsSlotParams';

    /**
     * @var string|null
     */
    protected $cmsSlotKey;

    /**
     * @var string|null
     */
    protected $cmsSlotTemplatePath;

    /**
     * @var \Generated\Shared\Transfer\CmsSlotParamsTransfer|null
     */
    protected $cmsSlotParams;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'cms_slot_key' => 'cmsSlotKey',
        'cmsSlotKey' => 'cmsSlotKey',
        'CmsSlotKey' => 'cmsSlotKey',
        'cms_slot_template_path' => 'cmsSlotTemplatePath',
        'cmsSlotTemplatePath' => 'cmsSlotTemplatePath',
        'CmsSlotTemplatePath' => 'cmsSlotTemplatePath',
        'cms_slot_params' => 'cmsSlotParams',
        'cmsSlotParams' => 'cmsSlotParams',
        'CmsSlotParams' => 'cmsSlotParams',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::CMS_SLOT_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'cms_slot_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CMS_SLOT_TEMPLATE_PATH => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'cms_slot_template_path',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CMS_SLOT_PARAMS => [
            'type' => 'Generated\Shared\Transfer\CmsSlotParamsTransfer',
            'type_shim' => null,
            'name_underscore' => 'cms_slot_params',
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
     * @module CmsSlotBlockWidget|ShopCmsSlot
     *
     * @param string|null $cmsSlotKey
     *
     * @return $this
     */
    public function setCmsSlotKey($cmsSlotKey)
    {
        $this->cmsSlotKey = $cmsSlotKey;
        $this->modifiedProperties[self::CMS_SLOT_KEY] = true;

        return $this;
    }

    /**
     * @module CmsSlotBlockWidget|ShopCmsSlot
     *
     * @return string|null
     */
    public function getCmsSlotKey()
    {
        return $this->cmsSlotKey;
    }

    /**
     * @module CmsSlotBlockWidget|ShopCmsSlot
     *
     * @param string|null $cmsSlotKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCmsSlotKeyOrFail($cmsSlotKey)
    {
        if ($cmsSlotKey === null) {
            $this->throwNullValueException(static::CMS_SLOT_KEY);
        }

        return $this->setCmsSlotKey($cmsSlotKey);
    }

    /**
     * @module CmsSlotBlockWidget|ShopCmsSlot
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCmsSlotKeyOrFail()
    {
        if ($this->cmsSlotKey === null) {
            $this->throwNullValueException(static::CMS_SLOT_KEY);
        }

        return $this->cmsSlotKey;
    }

    /**
     * @module CmsSlotBlockWidget|ShopCmsSlot
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCmsSlotKey()
    {
        $this->assertPropertyIsSet(self::CMS_SLOT_KEY);

        return $this;
    }

    /**
     * @module CmsSlotBlockWidget|ShopCmsSlot
     *
     * @param string|null $cmsSlotTemplatePath
     *
     * @return $this
     */
    public function setCmsSlotTemplatePath($cmsSlotTemplatePath)
    {
        $this->cmsSlotTemplatePath = $cmsSlotTemplatePath;
        $this->modifiedProperties[self::CMS_SLOT_TEMPLATE_PATH] = true;

        return $this;
    }

    /**
     * @module CmsSlotBlockWidget|ShopCmsSlot
     *
     * @return string|null
     */
    public function getCmsSlotTemplatePath()
    {
        return $this->cmsSlotTemplatePath;
    }

    /**
     * @module CmsSlotBlockWidget|ShopCmsSlot
     *
     * @param string|null $cmsSlotTemplatePath
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCmsSlotTemplatePathOrFail($cmsSlotTemplatePath)
    {
        if ($cmsSlotTemplatePath === null) {
            $this->throwNullValueException(static::CMS_SLOT_TEMPLATE_PATH);
        }

        return $this->setCmsSlotTemplatePath($cmsSlotTemplatePath);
    }

    /**
     * @module CmsSlotBlockWidget|ShopCmsSlot
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCmsSlotTemplatePathOrFail()
    {
        if ($this->cmsSlotTemplatePath === null) {
            $this->throwNullValueException(static::CMS_SLOT_TEMPLATE_PATH);
        }

        return $this->cmsSlotTemplatePath;
    }

    /**
     * @module CmsSlotBlockWidget|ShopCmsSlot
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCmsSlotTemplatePath()
    {
        $this->assertPropertyIsSet(self::CMS_SLOT_TEMPLATE_PATH);

        return $this;
    }

    /**
     * @module CmsSlotBlockWidget|ShopCmsSlot
     *
     * @param \Generated\Shared\Transfer\CmsSlotParamsTransfer|null $cmsSlotParams
     *
     * @return $this
     */
    public function setCmsSlotParams(CmsSlotParamsTransfer $cmsSlotParams = null)
    {
        $this->cmsSlotParams = $cmsSlotParams;
        $this->modifiedProperties[self::CMS_SLOT_PARAMS] = true;

        return $this;
    }

    /**
     * @module CmsSlotBlockWidget|ShopCmsSlot
     *
     * @return \Generated\Shared\Transfer\CmsSlotParamsTransfer|null
     */
    public function getCmsSlotParams()
    {
        return $this->cmsSlotParams;
    }

    /**
     * @module CmsSlotBlockWidget|ShopCmsSlot
     *
     * @param \Generated\Shared\Transfer\CmsSlotParamsTransfer $cmsSlotParams
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCmsSlotParamsOrFail(CmsSlotParamsTransfer $cmsSlotParams)
    {
        return $this->setCmsSlotParams($cmsSlotParams);
    }

    /**
     * @module CmsSlotBlockWidget|ShopCmsSlot
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CmsSlotParamsTransfer
     */
    public function getCmsSlotParamsOrFail()
    {
        if ($this->cmsSlotParams === null) {
            $this->throwNullValueException(static::CMS_SLOT_PARAMS);
        }

        return $this->cmsSlotParams;
    }

    /**
     * @module CmsSlotBlockWidget|ShopCmsSlot
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCmsSlotParams()
    {
        $this->assertPropertyIsSet(self::CMS_SLOT_PARAMS);

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
                case 'cmsSlotKey':
                case 'cmsSlotTemplatePath':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'cmsSlotParams':
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
                case 'cmsSlotKey':
                case 'cmsSlotTemplatePath':
                    $values[$arrayKey] = $value;

                    break;
                case 'cmsSlotParams':
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
                case 'cmsSlotKey':
                case 'cmsSlotTemplatePath':
                    $values[$arrayKey] = $value;

                    break;
                case 'cmsSlotParams':
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
            'cmsSlotKey' => $this->cmsSlotKey,
            'cmsSlotTemplatePath' => $this->cmsSlotTemplatePath,
            'cmsSlotParams' => $this->cmsSlotParams,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'cms_slot_key' => $this->cmsSlotKey,
            'cms_slot_template_path' => $this->cmsSlotTemplatePath,
            'cms_slot_params' => $this->cmsSlotParams,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'cms_slot_key' => $this->cmsSlotKey instanceof AbstractTransfer ? $this->cmsSlotKey->toArray(true, false) : $this->cmsSlotKey,
            'cms_slot_template_path' => $this->cmsSlotTemplatePath instanceof AbstractTransfer ? $this->cmsSlotTemplatePath->toArray(true, false) : $this->cmsSlotTemplatePath,
            'cms_slot_params' => $this->cmsSlotParams instanceof AbstractTransfer ? $this->cmsSlotParams->toArray(true, false) : $this->cmsSlotParams,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'cmsSlotKey' => $this->cmsSlotKey instanceof AbstractTransfer ? $this->cmsSlotKey->toArray(true, true) : $this->cmsSlotKey,
            'cmsSlotTemplatePath' => $this->cmsSlotTemplatePath instanceof AbstractTransfer ? $this->cmsSlotTemplatePath->toArray(true, true) : $this->cmsSlotTemplatePath,
            'cmsSlotParams' => $this->cmsSlotParams instanceof AbstractTransfer ? $this->cmsSlotParams->toArray(true, true) : $this->cmsSlotParams,
        ];
    }
}
