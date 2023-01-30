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
class SpyConfigurableBundleTemplateSlotEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_CONFIGURABLE_BUNDLE_TEMPLATE_SLOT = 'idConfigurableBundleTemplateSlot';

    /**
     * @var string
     */
    public const FK_CONFIGURABLE_BUNDLE_TEMPLATE = 'fkConfigurableBundleTemplate';

    /**
     * @var string
     */
    public const FK_PRODUCT_LIST = 'fkProductList';

    /**
     * @var string
     */
    public const KEY = 'key';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const SPY_CONFIGURABLE_BUNDLE_TEMPLATE = 'spyConfigurableBundleTemplate';

    /**
     * @var string
     */
    public const SPY_PRODUCT_LIST = 'spyProductList';

    /**
     * @var integer|null
     */
    protected $idConfigurableBundleTemplateSlot;

    /**
     * @var integer|null
     */
    protected $fkConfigurableBundleTemplate;

    /**
     * @var integer|null
     */
    protected $fkProductList;

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var \Generated\Shared\Transfer\SpyConfigurableBundleTemplateEntityTransfer|null
     */
    protected $spyConfigurableBundleTemplate;

    /**
     * @var \Generated\Shared\Transfer\SpyProductListEntityTransfer|null
     */
    protected $spyProductList;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_configurable_bundle_template_slot' => 'idConfigurableBundleTemplateSlot',
        'idConfigurableBundleTemplateSlot' => 'idConfigurableBundleTemplateSlot',
        'IdConfigurableBundleTemplateSlot' => 'idConfigurableBundleTemplateSlot',
        'fk_configurable_bundle_template' => 'fkConfigurableBundleTemplate',
        'fkConfigurableBundleTemplate' => 'fkConfigurableBundleTemplate',
        'FkConfigurableBundleTemplate' => 'fkConfigurableBundleTemplate',
        'fk_product_list' => 'fkProductList',
        'fkProductList' => 'fkProductList',
        'FkProductList' => 'fkProductList',
        'key' => 'key',
        'Key' => 'key',
        'name' => 'name',
        'Name' => 'name',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'spy_configurable_bundle_template' => 'spyConfigurableBundleTemplate',
        'spyConfigurableBundleTemplate' => 'spyConfigurableBundleTemplate',
        'SpyConfigurableBundleTemplate' => 'spyConfigurableBundleTemplate',
        'spy_product_list' => 'spyProductList',
        'spyProductList' => 'spyProductList',
        'SpyProductList' => 'spyProductList',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_CONFIGURABLE_BUNDLE_TEMPLATE_SLOT => [
            'type' => 'integer',
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
        self::FK_CONFIGURABLE_BUNDLE_TEMPLATE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_configurable_bundle_template',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PRODUCT_LIST => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_product_list',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'key',
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
        self::SPY_CONFIGURABLE_BUNDLE_TEMPLATE => [
            'type' => 'Generated\Shared\Transfer\SpyConfigurableBundleTemplateEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_configurable_bundle_template',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_LIST => [
            'type' => 'Generated\Shared\Transfer\SpyProductListEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_list',
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
    public static $entityNamespace = 'Orm\Zed\ConfigurableBundle\Persistence\SpyConfigurableBundleTemplateSlot';


    /**
     * @module 
     *
     * @param integer|null $idConfigurableBundleTemplateSlot
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdConfigurableBundleTemplateSlot()
    {
        return $this->idConfigurableBundleTemplateSlot;
    }

    /**
     * @module 
     *
     * @param integer|null $idConfigurableBundleTemplateSlot
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdConfigurableBundleTemplateSlotOrFail()
    {
        if ($this->idConfigurableBundleTemplateSlot === null) {
            $this->throwNullValueException(static::ID_CONFIGURABLE_BUNDLE_TEMPLATE_SLOT);
        }

        return $this->idConfigurableBundleTemplateSlot;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkConfigurableBundleTemplate
     *
     * @return $this
     */
    public function setFkConfigurableBundleTemplate($fkConfigurableBundleTemplate)
    {
        $this->fkConfigurableBundleTemplate = $fkConfigurableBundleTemplate;
        $this->modifiedProperties[self::FK_CONFIGURABLE_BUNDLE_TEMPLATE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkConfigurableBundleTemplate()
    {
        return $this->fkConfigurableBundleTemplate;
    }

    /**
     * @module 
     *
     * @param integer|null $fkConfigurableBundleTemplate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkConfigurableBundleTemplateOrFail($fkConfigurableBundleTemplate)
    {
        if ($fkConfigurableBundleTemplate === null) {
            $this->throwNullValueException(static::FK_CONFIGURABLE_BUNDLE_TEMPLATE);
        }

        return $this->setFkConfigurableBundleTemplate($fkConfigurableBundleTemplate);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkConfigurableBundleTemplateOrFail()
    {
        if ($this->fkConfigurableBundleTemplate === null) {
            $this->throwNullValueException(static::FK_CONFIGURABLE_BUNDLE_TEMPLATE);
        }

        return $this->fkConfigurableBundleTemplate;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkConfigurableBundleTemplate()
    {
        $this->assertPropertyIsSet(self::FK_CONFIGURABLE_BUNDLE_TEMPLATE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductList
     *
     * @return $this
     */
    public function setFkProductList($fkProductList)
    {
        $this->fkProductList = $fkProductList;
        $this->modifiedProperties[self::FK_PRODUCT_LIST] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkProductList()
    {
        return $this->fkProductList;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkProductListOrFail($fkProductList)
    {
        if ($fkProductList === null) {
            $this->throwNullValueException(static::FK_PRODUCT_LIST);
        }

        return $this->setFkProductList($fkProductList);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkProductListOrFail()
    {
        if ($this->fkProductList === null) {
            $this->throwNullValueException(static::FK_PRODUCT_LIST);
        }

        return $this->fkProductList;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkProductList()
    {
        $this->assertPropertyIsSet(self::FK_PRODUCT_LIST);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $key
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->key = $key;
        $this->modifiedProperties[self::KEY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @module 
     *
     * @param string|null $key
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setKeyOrFail($key)
    {
        if ($key === null) {
            $this->throwNullValueException(static::KEY);
        }

        return $this->setKey($key);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getKeyOrFail()
    {
        if ($this->key === null) {
            $this->throwNullValueException(static::KEY);
        }

        return $this->key;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireKey()
    {
        $this->assertPropertyIsSet(self::KEY);

        return $this;
    }

    /**
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyConfigurableBundleTemplateEntityTransfer|null $spyConfigurableBundleTemplate
     *
     * @return $this
     */
    public function setSpyConfigurableBundleTemplate(SpyConfigurableBundleTemplateEntityTransfer $spyConfigurableBundleTemplate = null)
    {
        $this->spyConfigurableBundleTemplate = $spyConfigurableBundleTemplate;
        $this->modifiedProperties[self::SPY_CONFIGURABLE_BUNDLE_TEMPLATE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyConfigurableBundleTemplateEntityTransfer|null
     */
    public function getSpyConfigurableBundleTemplate()
    {
        return $this->spyConfigurableBundleTemplate;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyConfigurableBundleTemplateEntityTransfer $spyConfigurableBundleTemplate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyConfigurableBundleTemplateOrFail(SpyConfigurableBundleTemplateEntityTransfer $spyConfigurableBundleTemplate)
    {
        return $this->setSpyConfigurableBundleTemplate($spyConfigurableBundleTemplate);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyConfigurableBundleTemplateEntityTransfer
     */
    public function getSpyConfigurableBundleTemplateOrFail()
    {
        if ($this->spyConfigurableBundleTemplate === null) {
            $this->throwNullValueException(static::SPY_CONFIGURABLE_BUNDLE_TEMPLATE);
        }

        return $this->spyConfigurableBundleTemplate;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyConfigurableBundleTemplate()
    {
        $this->assertPropertyIsSet(self::SPY_CONFIGURABLE_BUNDLE_TEMPLATE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductListEntityTransfer|null $spyProductList
     *
     * @return $this
     */
    public function setSpyProductList(SpyProductListEntityTransfer $spyProductList = null)
    {
        $this->spyProductList = $spyProductList;
        $this->modifiedProperties[self::SPY_PRODUCT_LIST] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyProductListEntityTransfer|null
     */
    public function getSpyProductList()
    {
        return $this->spyProductList;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductListEntityTransfer $spyProductList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyProductListOrFail(SpyProductListEntityTransfer $spyProductList)
    {
        return $this->setSpyProductList($spyProductList);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyProductListEntityTransfer
     */
    public function getSpyProductListOrFail()
    {
        if ($this->spyProductList === null) {
            $this->throwNullValueException(static::SPY_PRODUCT_LIST);
        }

        return $this->spyProductList;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductList()
    {
        $this->assertPropertyIsSet(self::SPY_PRODUCT_LIST);

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
                case 'idConfigurableBundleTemplateSlot':
                case 'fkConfigurableBundleTemplate':
                case 'fkProductList':
                case 'key':
                case 'name':
                case 'uuid':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyConfigurableBundleTemplate':
                case 'spyProductList':
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
                case 'idConfigurableBundleTemplateSlot':
                case 'fkConfigurableBundleTemplate':
                case 'fkProductList':
                case 'key':
                case 'name':
                case 'uuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyConfigurableBundleTemplate':
                case 'spyProductList':
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
                case 'idConfigurableBundleTemplateSlot':
                case 'fkConfigurableBundleTemplate':
                case 'fkProductList':
                case 'key':
                case 'name':
                case 'uuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyConfigurableBundleTemplate':
                case 'spyProductList':
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
            'idConfigurableBundleTemplateSlot' => $this->idConfigurableBundleTemplateSlot,
            'fkConfigurableBundleTemplate' => $this->fkConfigurableBundleTemplate,
            'fkProductList' => $this->fkProductList,
            'key' => $this->key,
            'name' => $this->name,
            'uuid' => $this->uuid,
            'spyConfigurableBundleTemplate' => $this->spyConfigurableBundleTemplate,
            'spyProductList' => $this->spyProductList,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_configurable_bundle_template_slot' => $this->idConfigurableBundleTemplateSlot,
            'fk_configurable_bundle_template' => $this->fkConfigurableBundleTemplate,
            'fk_product_list' => $this->fkProductList,
            'key' => $this->key,
            'name' => $this->name,
            'uuid' => $this->uuid,
            'spy_configurable_bundle_template' => $this->spyConfigurableBundleTemplate,
            'spy_product_list' => $this->spyProductList,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_configurable_bundle_template_slot' => $this->idConfigurableBundleTemplateSlot instanceof AbstractTransfer ? $this->idConfigurableBundleTemplateSlot->toArray(true, false) : $this->idConfigurableBundleTemplateSlot,
            'fk_configurable_bundle_template' => $this->fkConfigurableBundleTemplate instanceof AbstractTransfer ? $this->fkConfigurableBundleTemplate->toArray(true, false) : $this->fkConfigurableBundleTemplate,
            'fk_product_list' => $this->fkProductList instanceof AbstractTransfer ? $this->fkProductList->toArray(true, false) : $this->fkProductList,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'spy_configurable_bundle_template' => $this->spyConfigurableBundleTemplate instanceof AbstractTransfer ? $this->spyConfigurableBundleTemplate->toArray(true, false) : $this->spyConfigurableBundleTemplate,
            'spy_product_list' => $this->spyProductList instanceof AbstractTransfer ? $this->spyProductList->toArray(true, false) : $this->spyProductList,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idConfigurableBundleTemplateSlot' => $this->idConfigurableBundleTemplateSlot instanceof AbstractTransfer ? $this->idConfigurableBundleTemplateSlot->toArray(true, true) : $this->idConfigurableBundleTemplateSlot,
            'fkConfigurableBundleTemplate' => $this->fkConfigurableBundleTemplate instanceof AbstractTransfer ? $this->fkConfigurableBundleTemplate->toArray(true, true) : $this->fkConfigurableBundleTemplate,
            'fkProductList' => $this->fkProductList instanceof AbstractTransfer ? $this->fkProductList->toArray(true, true) : $this->fkProductList,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'spyConfigurableBundleTemplate' => $this->spyConfigurableBundleTemplate instanceof AbstractTransfer ? $this->spyConfigurableBundleTemplate->toArray(true, true) : $this->spyConfigurableBundleTemplate,
            'spyProductList' => $this->spyProductList instanceof AbstractTransfer ? $this->spyProductList->toArray(true, true) : $this->spyProductList,
        ];
    }
}
