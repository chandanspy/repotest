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
class CmsSlotContextTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const CMS_SLOT_KEY = 'cmsSlotKey';

    /**
     * @var string
     */
    public const PROVIDED_DATA = 'providedData';

    /**
     * @var string
     */
    public const REQUIRED_KEYS = 'requiredKeys';

    /**
     * @var string
     */
    public const AUTO_FILLED_KEYS = 'autoFilledKeys';

    /**
     * @var string
     */
    public const CMS_SLOT_TEMPLATE_PATH = 'cmsSlotTemplatePath';

    /**
     * @var string|null
     */
    protected $cmsSlotKey;

    /**
     * @var array
     */
    protected $providedData = [];

    /**
     * @var string[]
     */
    protected $requiredKeys = [];

    /**
     * @var string[]
     */
    protected $autoFilledKeys = [];

    /**
     * @var string|null
     */
    protected $cmsSlotTemplatePath;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'cms_slot_key' => 'cmsSlotKey',
        'cmsSlotKey' => 'cmsSlotKey',
        'CmsSlotKey' => 'cmsSlotKey',
        'provided_data' => 'providedData',
        'providedData' => 'providedData',
        'ProvidedData' => 'providedData',
        'required_keys' => 'requiredKeys',
        'requiredKeys' => 'requiredKeys',
        'RequiredKeys' => 'requiredKeys',
        'auto_filled_keys' => 'autoFilledKeys',
        'autoFilledKeys' => 'autoFilledKeys',
        'AutoFilledKeys' => 'autoFilledKeys',
        'cms_slot_template_path' => 'cmsSlotTemplatePath',
        'cmsSlotTemplatePath' => 'cmsSlotTemplatePath',
        'CmsSlotTemplatePath' => 'cmsSlotTemplatePath',
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
        self::PROVIDED_DATA => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'provided_data',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REQUIRED_KEYS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'required_keys',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AUTO_FILLED_KEYS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'auto_filled_keys',
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
    ];

    /**
     * @module ShopCmsSlot
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
     * @module ShopCmsSlot
     *
     * @return string|null
     */
    public function getCmsSlotKey()
    {
        return $this->cmsSlotKey;
    }

    /**
     * @module ShopCmsSlot
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
     * @module ShopCmsSlot
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
     * @module ShopCmsSlot
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
     * @module ShopCmsSlot
     *
     * @param array|null $providedData
     *
     * @return $this
     */
    public function setProvidedData(array $providedData = null)
    {
        if ($providedData === null) {
            $providedData = [];
        }

        $this->providedData = $providedData;
        $this->modifiedProperties[self::PROVIDED_DATA] = true;

        return $this;
    }

    /**
     * @module ShopCmsSlot
     *
     * @return array
     */
    public function getProvidedData()
    {
        return $this->providedData;
    }

    /**
     * @module ShopCmsSlot
     *
     * @param mixed $providedData
     *
     * @return $this
     */
    public function addProvidedData($providedData)
    {
        $this->providedData[] = $providedData;
        $this->modifiedProperties[self::PROVIDED_DATA] = true;

        return $this;
    }

    /**
     * @module ShopCmsSlot
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProvidedData()
    {
        $this->assertPropertyIsSet(self::PROVIDED_DATA);

        return $this;
    }

    /**
     * @module ShopCmsSlot
     *
     * @param string[]|null $requiredKeys
     *
     * @return $this
     */
    public function setRequiredKeys(array $requiredKeys = null)
    {
        if ($requiredKeys === null) {
            $requiredKeys = [];
        }

        $this->requiredKeys = $requiredKeys;
        $this->modifiedProperties[self::REQUIRED_KEYS] = true;

        return $this;
    }

    /**
     * @module ShopCmsSlot
     *
     * @return string[]
     */
    public function getRequiredKeys()
    {
        return $this->requiredKeys;
    }

    /**
     * @module ShopCmsSlot
     *
     * @param string $requiredKeys
     *
     * @return $this
     */
    public function addRequiredKeys($requiredKeys)
    {
        $this->requiredKeys[] = $requiredKeys;
        $this->modifiedProperties[self::REQUIRED_KEYS] = true;

        return $this;
    }

    /**
     * @module ShopCmsSlot
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRequiredKeys()
    {
        $this->assertPropertyIsSet(self::REQUIRED_KEYS);

        return $this;
    }

    /**
     * @module ShopCmsSlot
     *
     * @param string[]|null $autoFilledKeys
     *
     * @return $this
     */
    public function setAutoFilledKeys(array $autoFilledKeys = null)
    {
        if ($autoFilledKeys === null) {
            $autoFilledKeys = [];
        }

        $this->autoFilledKeys = $autoFilledKeys;
        $this->modifiedProperties[self::AUTO_FILLED_KEYS] = true;

        return $this;
    }

    /**
     * @module ShopCmsSlot
     *
     * @return string[]
     */
    public function getAutoFilledKeys()
    {
        return $this->autoFilledKeys;
    }

    /**
     * @module ShopCmsSlot
     *
     * @param string $autoFilledKeys
     *
     * @return $this
     */
    public function addAutoFilledKeys($autoFilledKeys)
    {
        $this->autoFilledKeys[] = $autoFilledKeys;
        $this->modifiedProperties[self::AUTO_FILLED_KEYS] = true;

        return $this;
    }

    /**
     * @module ShopCmsSlot
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAutoFilledKeys()
    {
        $this->assertPropertyIsSet(self::AUTO_FILLED_KEYS);

        return $this;
    }

    /**
     * @module ShopCmsSlot
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
     * @module ShopCmsSlot
     *
     * @return string|null
     */
    public function getCmsSlotTemplatePath()
    {
        return $this->cmsSlotTemplatePath;
    }

    /**
     * @module ShopCmsSlot
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
     * @module ShopCmsSlot
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
     * @module ShopCmsSlot
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
                case 'providedData':
                case 'requiredKeys':
                case 'autoFilledKeys':
                case 'cmsSlotTemplatePath':
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
                case 'providedData':
                case 'requiredKeys':
                case 'autoFilledKeys':
                case 'cmsSlotTemplatePath':
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
                case 'cmsSlotKey':
                case 'providedData':
                case 'requiredKeys':
                case 'autoFilledKeys':
                case 'cmsSlotTemplatePath':
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
            'cmsSlotKey' => $this->cmsSlotKey,
            'providedData' => $this->providedData,
            'requiredKeys' => $this->requiredKeys,
            'autoFilledKeys' => $this->autoFilledKeys,
            'cmsSlotTemplatePath' => $this->cmsSlotTemplatePath,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'cms_slot_key' => $this->cmsSlotKey,
            'provided_data' => $this->providedData,
            'required_keys' => $this->requiredKeys,
            'auto_filled_keys' => $this->autoFilledKeys,
            'cms_slot_template_path' => $this->cmsSlotTemplatePath,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'cms_slot_key' => $this->cmsSlotKey instanceof AbstractTransfer ? $this->cmsSlotKey->toArray(true, false) : $this->cmsSlotKey,
            'provided_data' => $this->providedData instanceof AbstractTransfer ? $this->providedData->toArray(true, false) : $this->providedData,
            'required_keys' => $this->requiredKeys instanceof AbstractTransfer ? $this->requiredKeys->toArray(true, false) : $this->requiredKeys,
            'auto_filled_keys' => $this->autoFilledKeys instanceof AbstractTransfer ? $this->autoFilledKeys->toArray(true, false) : $this->autoFilledKeys,
            'cms_slot_template_path' => $this->cmsSlotTemplatePath instanceof AbstractTransfer ? $this->cmsSlotTemplatePath->toArray(true, false) : $this->cmsSlotTemplatePath,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'cmsSlotKey' => $this->cmsSlotKey instanceof AbstractTransfer ? $this->cmsSlotKey->toArray(true, true) : $this->cmsSlotKey,
            'providedData' => $this->providedData instanceof AbstractTransfer ? $this->providedData->toArray(true, true) : $this->providedData,
            'requiredKeys' => $this->requiredKeys instanceof AbstractTransfer ? $this->requiredKeys->toArray(true, true) : $this->requiredKeys,
            'autoFilledKeys' => $this->autoFilledKeys instanceof AbstractTransfer ? $this->autoFilledKeys->toArray(true, true) : $this->autoFilledKeys,
            'cmsSlotTemplatePath' => $this->cmsSlotTemplatePath instanceof AbstractTransfer ? $this->cmsSlotTemplatePath->toArray(true, true) : $this->cmsSlotTemplatePath,
        ];
    }
}
