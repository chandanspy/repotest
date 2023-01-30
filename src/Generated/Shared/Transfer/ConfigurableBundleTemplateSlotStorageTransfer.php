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
class ConfigurableBundleTemplateSlotStorageTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_LIST = 'idProductList';

    /**
     * @var string
     */
    public const ID_CONFIGURABLE_BUNDLE_TEMPLATE_SLOT = 'idConfigurableBundleTemplateSlot';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var int|null
     */
    protected $idProductList;

    /**
     * @var int|null
     */
    protected $idConfigurableBundleTemplateSlot;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_list' => 'idProductList',
        'idProductList' => 'idProductList',
        'IdProductList' => 'idProductList',
        'id_configurable_bundle_template_slot' => 'idConfigurableBundleTemplateSlot',
        'idConfigurableBundleTemplateSlot' => 'idConfigurableBundleTemplateSlot',
        'IdConfigurableBundleTemplateSlot' => 'idConfigurableBundleTemplateSlot',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'name' => 'name',
        'Name' => 'name',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_LIST => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_list',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_CONFIGURABLE_BUNDLE_TEMPLATE_SLOT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_configurable_bundle_template_slot',
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
    ];

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleStorage|ConfigurableBundlesProductsResourceRelationship
     *
     * @param int|null $idProductList
     *
     * @return $this
     */
    public function setIdProductList($idProductList)
    {
        $this->idProductList = $idProductList;
        $this->modifiedProperties[self::ID_PRODUCT_LIST] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleStorage|ConfigurableBundlesProductsResourceRelationship
     *
     * @return int|null
     */
    public function getIdProductList()
    {
        return $this->idProductList;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleStorage|ConfigurableBundlesProductsResourceRelationship
     *
     * @param int|null $idProductList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductListOrFail($idProductList)
    {
        if ($idProductList === null) {
            $this->throwNullValueException(static::ID_PRODUCT_LIST);
        }

        return $this->setIdProductList($idProductList);
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleStorage|ConfigurableBundlesProductsResourceRelationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductListOrFail()
    {
        if ($this->idProductList === null) {
            $this->throwNullValueException(static::ID_PRODUCT_LIST);
        }

        return $this->idProductList;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleStorage|ConfigurableBundlesProductsResourceRelationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductList()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_LIST);

        return $this;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleStorage
     *
     * @param int|null $idConfigurableBundleTemplateSlot
     *
     * @return $this
     */
    public function setIdConfigurableBundleTemplateSlot($idConfigurableBundleTemplateSlot)
    {
        $this->idConfigurableBundleTemplateSlot = $idConfigurableBundleTemplateSlot;
        $this->modifiedProperties[self::ID_CONFIGURABLE_BUNDLE_TEMPLATE_SLOT] = true;

        return $this;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleStorage
     *
     * @return int|null
     */
    public function getIdConfigurableBundleTemplateSlot()
    {
        return $this->idConfigurableBundleTemplateSlot;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleStorage
     *
     * @param int|null $idConfigurableBundleTemplateSlot
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdConfigurableBundleTemplateSlotOrFail($idConfigurableBundleTemplateSlot)
    {
        if ($idConfigurableBundleTemplateSlot === null) {
            $this->throwNullValueException(static::ID_CONFIGURABLE_BUNDLE_TEMPLATE_SLOT);
        }

        return $this->setIdConfigurableBundleTemplateSlot($idConfigurableBundleTemplateSlot);
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdConfigurableBundleTemplateSlotOrFail()
    {
        if ($this->idConfigurableBundleTemplateSlot === null) {
            $this->throwNullValueException(static::ID_CONFIGURABLE_BUNDLE_TEMPLATE_SLOT);
        }

        return $this->idConfigurableBundleTemplateSlot;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdConfigurableBundleTemplateSlot()
    {
        $this->assertPropertyIsSet(self::ID_CONFIGURABLE_BUNDLE_TEMPLATE_SLOT);

        return $this;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleStorage|ConfigurableBundlesRestApi
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
     * @module ConfigurableBundlePage|ConfigurableBundleStorage|ConfigurableBundlesRestApi
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleStorage|ConfigurableBundlesRestApi
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
     * @module ConfigurableBundlePage|ConfigurableBundleStorage|ConfigurableBundlesRestApi
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
     * @module ConfigurableBundlePage|ConfigurableBundleStorage|ConfigurableBundlesRestApi
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
     * @module ConfigurableBundlePage|ConfigurableBundleStorage|ConfigurableBundlesRestApi
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
     * @module ConfigurableBundlePage|ConfigurableBundleStorage|ConfigurableBundlesRestApi
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module ConfigurableBundlePage|ConfigurableBundleStorage|ConfigurableBundlesRestApi
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
     * @module ConfigurableBundlePage|ConfigurableBundleStorage|ConfigurableBundlesRestApi
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
     * @module ConfigurableBundlePage|ConfigurableBundleStorage|ConfigurableBundlesRestApi
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
                case 'idProductList':
                case 'idConfigurableBundleTemplateSlot':
                case 'uuid':
                case 'name':
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
                case 'idProductList':
                case 'idConfigurableBundleTemplateSlot':
                case 'uuid':
                case 'name':
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
                case 'idProductList':
                case 'idConfigurableBundleTemplateSlot':
                case 'uuid':
                case 'name':
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
            'idProductList' => $this->idProductList,
            'idConfigurableBundleTemplateSlot' => $this->idConfigurableBundleTemplateSlot,
            'uuid' => $this->uuid,
            'name' => $this->name,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_list' => $this->idProductList,
            'id_configurable_bundle_template_slot' => $this->idConfigurableBundleTemplateSlot,
            'uuid' => $this->uuid,
            'name' => $this->name,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_list' => $this->idProductList instanceof AbstractTransfer ? $this->idProductList->toArray(true, false) : $this->idProductList,
            'id_configurable_bundle_template_slot' => $this->idConfigurableBundleTemplateSlot instanceof AbstractTransfer ? $this->idConfigurableBundleTemplateSlot->toArray(true, false) : $this->idConfigurableBundleTemplateSlot,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductList' => $this->idProductList instanceof AbstractTransfer ? $this->idProductList->toArray(true, true) : $this->idProductList,
            'idConfigurableBundleTemplateSlot' => $this->idConfigurableBundleTemplateSlot instanceof AbstractTransfer ? $this->idConfigurableBundleTemplateSlot->toArray(true, true) : $this->idConfigurableBundleTemplateSlot,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
        ];
    }
}
