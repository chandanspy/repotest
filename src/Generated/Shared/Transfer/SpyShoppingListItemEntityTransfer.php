<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyShoppingListItemEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_SHOPPING_LIST_ITEM = 'idShoppingListItem';

    /**
     * @var string
     */
    public const FK_SHOPPING_LIST = 'fkShoppingList';

    /**
     * @var string
     */
    public const KEY = 'key';

    /**
     * @var string
     */
    public const QUANTITY = 'quantity';

    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const SPY_SHOPPING_LIST = 'spyShoppingList';

    /**
     * @var string
     */
    public const SPY_SHOPPING_LIST_PRODUCT_OPTIONS = 'spyShoppingListProductOptions';

    /**
     * @var string
     */
    public const SPY_SHOPPING_LIST_ITEM_NOTES = 'spyShoppingListItemNotes';

    /**
     * @var integer|null
     */
    protected $idShoppingListItem;

    /**
     * @var integer|null
     */
    protected $fkShoppingList;

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var integer|null
     */
    protected $quantity;

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var \Generated\Shared\Transfer\SpyShoppingListEntityTransfer|null
     */
    protected $spyShoppingList;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyShoppingListProductOptionEntityTransfer[]
     */
    protected $spyShoppingListProductOptions;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyShoppingListItemNoteEntityTransfer[]
     */
    protected $spyShoppingListItemNotes;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_shopping_list_item' => 'idShoppingListItem',
        'idShoppingListItem' => 'idShoppingListItem',
        'IdShoppingListItem' => 'idShoppingListItem',
        'fk_shopping_list' => 'fkShoppingList',
        'fkShoppingList' => 'fkShoppingList',
        'FkShoppingList' => 'fkShoppingList',
        'key' => 'key',
        'Key' => 'key',
        'quantity' => 'quantity',
        'Quantity' => 'quantity',
        'sku' => 'sku',
        'Sku' => 'sku',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'spy_shopping_list' => 'spyShoppingList',
        'spyShoppingList' => 'spyShoppingList',
        'SpyShoppingList' => 'spyShoppingList',
        'spy_shopping_list_product_options' => 'spyShoppingListProductOptions',
        'spyShoppingListProductOptions' => 'spyShoppingListProductOptions',
        'SpyShoppingListProductOptions' => 'spyShoppingListProductOptions',
        'spy_shopping_list_item_notes' => 'spyShoppingListItemNotes',
        'spyShoppingListItemNotes' => 'spyShoppingListItemNotes',
        'SpyShoppingListItemNotes' => 'spyShoppingListItemNotes',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SHOPPING_LIST_ITEM => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_shopping_list_item',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_SHOPPING_LIST => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_shopping_list',
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
        self::QUANTITY => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'quantity',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SKU => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'sku',
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
        self::SPY_SHOPPING_LIST => [
            'type' => 'Generated\Shared\Transfer\SpyShoppingListEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_shopping_list',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SHOPPING_LIST_PRODUCT_OPTIONS => [
            'type' => 'Generated\Shared\Transfer\SpyShoppingListProductOptionEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_shopping_list_product_options',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SHOPPING_LIST_ITEM_NOTES => [
            'type' => 'Generated\Shared\Transfer\SpyShoppingListItemNoteEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_shopping_list_item_notes',
            'is_collection' => true,
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
    public static $entityNamespace = 'Orm\Zed\ShoppingList\Persistence\SpyShoppingListItem';


    /**
     * @module 
     *
     * @param integer|null $idShoppingListItem
     *
     * @return $this
     */
    public function setIdShoppingListItem($idShoppingListItem)
    {
        $this->idShoppingListItem = $idShoppingListItem;
        $this->modifiedProperties[self::ID_SHOPPING_LIST_ITEM] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdShoppingListItem()
    {
        return $this->idShoppingListItem;
    }

    /**
     * @module 
     *
     * @param integer|null $idShoppingListItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdShoppingListItemOrFail($idShoppingListItem)
    {
        if ($idShoppingListItem === null) {
            $this->throwNullValueException(static::ID_SHOPPING_LIST_ITEM);
        }

        return $this->setIdShoppingListItem($idShoppingListItem);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdShoppingListItemOrFail()
    {
        if ($this->idShoppingListItem === null) {
            $this->throwNullValueException(static::ID_SHOPPING_LIST_ITEM);
        }

        return $this->idShoppingListItem;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdShoppingListItem()
    {
        $this->assertPropertyIsSet(self::ID_SHOPPING_LIST_ITEM);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkShoppingList
     *
     * @return $this
     */
    public function setFkShoppingList($fkShoppingList)
    {
        $this->fkShoppingList = $fkShoppingList;
        $this->modifiedProperties[self::FK_SHOPPING_LIST] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkShoppingList()
    {
        return $this->fkShoppingList;
    }

    /**
     * @module 
     *
     * @param integer|null $fkShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkShoppingListOrFail($fkShoppingList)
    {
        if ($fkShoppingList === null) {
            $this->throwNullValueException(static::FK_SHOPPING_LIST);
        }

        return $this->setFkShoppingList($fkShoppingList);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkShoppingListOrFail()
    {
        if ($this->fkShoppingList === null) {
            $this->throwNullValueException(static::FK_SHOPPING_LIST);
        }

        return $this->fkShoppingList;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkShoppingList()
    {
        $this->assertPropertyIsSet(self::FK_SHOPPING_LIST);

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
     * @param integer|null $quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        $this->modifiedProperties[self::QUANTITY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @module 
     *
     * @param integer|null $quantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuantityOrFail($quantity)
    {
        if ($quantity === null) {
            $this->throwNullValueException(static::QUANTITY);
        }

        return $this->setQuantity($quantity);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getQuantityOrFail()
    {
        if ($this->quantity === null) {
            $this->throwNullValueException(static::QUANTITY);
        }

        return $this->quantity;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuantity()
    {
        $this->assertPropertyIsSet(self::QUANTITY);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $sku
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
        $this->modifiedProperties[self::SKU] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module 
     *
     * @param string|null $sku
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSkuOrFail($sku)
    {
        if ($sku === null) {
            $this->throwNullValueException(static::SKU);
        }

        return $this->setSku($sku);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSkuOrFail()
    {
        if ($this->sku === null) {
            $this->throwNullValueException(static::SKU);
        }

        return $this->sku;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSku()
    {
        $this->assertPropertyIsSet(self::SKU);

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
     * @param \Generated\Shared\Transfer\SpyShoppingListEntityTransfer|null $spyShoppingList
     *
     * @return $this
     */
    public function setSpyShoppingList(SpyShoppingListEntityTransfer $spyShoppingList = null)
    {
        $this->spyShoppingList = $spyShoppingList;
        $this->modifiedProperties[self::SPY_SHOPPING_LIST] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyShoppingListEntityTransfer|null
     */
    public function getSpyShoppingList()
    {
        return $this->spyShoppingList;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyShoppingListEntityTransfer $spyShoppingList
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyShoppingListOrFail(SpyShoppingListEntityTransfer $spyShoppingList)
    {
        return $this->setSpyShoppingList($spyShoppingList);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyShoppingListEntityTransfer
     */
    public function getSpyShoppingListOrFail()
    {
        if ($this->spyShoppingList === null) {
            $this->throwNullValueException(static::SPY_SHOPPING_LIST);
        }

        return $this->spyShoppingList;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyShoppingList()
    {
        $this->assertPropertyIsSet(self::SPY_SHOPPING_LIST);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyShoppingListProductOptionEntityTransfer[] $spyShoppingListProductOptions
     *
     * @return $this
     */
    public function setSpyShoppingListProductOptions(ArrayObject $spyShoppingListProductOptions)
    {
        $this->spyShoppingListProductOptions = $spyShoppingListProductOptions;
        $this->modifiedProperties[self::SPY_SHOPPING_LIST_PRODUCT_OPTIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyShoppingListProductOptionEntityTransfer[]
     */
    public function getSpyShoppingListProductOptions()
    {
        return $this->spyShoppingListProductOptions;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyShoppingListProductOptionEntityTransfer $spyShoppingListProductOptions
     *
     * @return $this
     */
    public function addSpyShoppingListProductOptions(SpyShoppingListProductOptionEntityTransfer $spyShoppingListProductOptions)
    {
        $this->spyShoppingListProductOptions[] = $spyShoppingListProductOptions;
        $this->modifiedProperties[self::SPY_SHOPPING_LIST_PRODUCT_OPTIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyShoppingListProductOptions()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SHOPPING_LIST_PRODUCT_OPTIONS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyShoppingListItemNoteEntityTransfer[] $spyShoppingListItemNotes
     *
     * @return $this
     */
    public function setSpyShoppingListItemNotes(ArrayObject $spyShoppingListItemNotes)
    {
        $this->spyShoppingListItemNotes = $spyShoppingListItemNotes;
        $this->modifiedProperties[self::SPY_SHOPPING_LIST_ITEM_NOTES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyShoppingListItemNoteEntityTransfer[]
     */
    public function getSpyShoppingListItemNotes()
    {
        return $this->spyShoppingListItemNotes;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyShoppingListItemNoteEntityTransfer $spyShoppingListItemNotes
     *
     * @return $this
     */
    public function addSpyShoppingListItemNotes(SpyShoppingListItemNoteEntityTransfer $spyShoppingListItemNotes)
    {
        $this->spyShoppingListItemNotes[] = $spyShoppingListItemNotes;
        $this->modifiedProperties[self::SPY_SHOPPING_LIST_ITEM_NOTES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyShoppingListItemNotes()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SHOPPING_LIST_ITEM_NOTES);

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
                case 'idShoppingListItem':
                case 'fkShoppingList':
                case 'key':
                case 'quantity':
                case 'sku':
                case 'uuid':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyShoppingList':
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
                case 'spyShoppingListProductOptions':
                case 'spyShoppingListItemNotes':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
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
                case 'idShoppingListItem':
                case 'fkShoppingList':
                case 'key':
                case 'quantity':
                case 'sku':
                case 'uuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyShoppingList':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyShoppingListProductOptions':
                case 'spyShoppingListItemNotes':
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
                case 'idShoppingListItem':
                case 'fkShoppingList':
                case 'key':
                case 'quantity':
                case 'sku':
                case 'uuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyShoppingList':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyShoppingListProductOptions':
                case 'spyShoppingListItemNotes':
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
        $this->spyShoppingListProductOptions = $this->spyShoppingListProductOptions ?: new ArrayObject();
        $this->spyShoppingListItemNotes = $this->spyShoppingListItemNotes ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idShoppingListItem' => $this->idShoppingListItem,
            'fkShoppingList' => $this->fkShoppingList,
            'key' => $this->key,
            'quantity' => $this->quantity,
            'sku' => $this->sku,
            'uuid' => $this->uuid,
            'spyShoppingList' => $this->spyShoppingList,
            'spyShoppingListProductOptions' => $this->spyShoppingListProductOptions,
            'spyShoppingListItemNotes' => $this->spyShoppingListItemNotes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_shopping_list_item' => $this->idShoppingListItem,
            'fk_shopping_list' => $this->fkShoppingList,
            'key' => $this->key,
            'quantity' => $this->quantity,
            'sku' => $this->sku,
            'uuid' => $this->uuid,
            'spy_shopping_list' => $this->spyShoppingList,
            'spy_shopping_list_product_options' => $this->spyShoppingListProductOptions,
            'spy_shopping_list_item_notes' => $this->spyShoppingListItemNotes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_shopping_list_item' => $this->idShoppingListItem instanceof AbstractTransfer ? $this->idShoppingListItem->toArray(true, false) : $this->idShoppingListItem,
            'fk_shopping_list' => $this->fkShoppingList instanceof AbstractTransfer ? $this->fkShoppingList->toArray(true, false) : $this->fkShoppingList,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, false) : $this->quantity,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'spy_shopping_list' => $this->spyShoppingList instanceof AbstractTransfer ? $this->spyShoppingList->toArray(true, false) : $this->spyShoppingList,
            'spy_shopping_list_product_options' => $this->spyShoppingListProductOptions instanceof AbstractTransfer ? $this->spyShoppingListProductOptions->toArray(true, false) : $this->addValuesToCollection($this->spyShoppingListProductOptions, true, false),
            'spy_shopping_list_item_notes' => $this->spyShoppingListItemNotes instanceof AbstractTransfer ? $this->spyShoppingListItemNotes->toArray(true, false) : $this->addValuesToCollection($this->spyShoppingListItemNotes, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idShoppingListItem' => $this->idShoppingListItem instanceof AbstractTransfer ? $this->idShoppingListItem->toArray(true, true) : $this->idShoppingListItem,
            'fkShoppingList' => $this->fkShoppingList instanceof AbstractTransfer ? $this->fkShoppingList->toArray(true, true) : $this->fkShoppingList,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, true) : $this->quantity,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'spyShoppingList' => $this->spyShoppingList instanceof AbstractTransfer ? $this->spyShoppingList->toArray(true, true) : $this->spyShoppingList,
            'spyShoppingListProductOptions' => $this->spyShoppingListProductOptions instanceof AbstractTransfer ? $this->spyShoppingListProductOptions->toArray(true, true) : $this->addValuesToCollection($this->spyShoppingListProductOptions, true, true),
            'spyShoppingListItemNotes' => $this->spyShoppingListItemNotes instanceof AbstractTransfer ? $this->spyShoppingListItemNotes->toArray(true, true) : $this->addValuesToCollection($this->spyShoppingListItemNotes, true, true),
        ];
    }
}
