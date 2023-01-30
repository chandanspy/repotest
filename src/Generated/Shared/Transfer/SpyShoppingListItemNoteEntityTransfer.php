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
class SpyShoppingListItemNoteEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_SHOPPING_LIST_ITEM_NOTE = 'idShoppingListItemNote';

    /**
     * @var string
     */
    public const FK_SHOPPING_LIST_ITEM = 'fkShoppingListItem';

    /**
     * @var string
     */
    public const NOTE = 'note';

    /**
     * @var string
     */
    public const SPY_SHOPPING_LIST_ITEM = 'spyShoppingListItem';

    /**
     * @var integer|null
     */
    protected $idShoppingListItemNote;

    /**
     * @var integer|null
     */
    protected $fkShoppingListItem;

    /**
     * @var string|null
     */
    protected $note;

    /**
     * @var \Generated\Shared\Transfer\SpyShoppingListItemEntityTransfer|null
     */
    protected $spyShoppingListItem;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_shopping_list_item_note' => 'idShoppingListItemNote',
        'idShoppingListItemNote' => 'idShoppingListItemNote',
        'IdShoppingListItemNote' => 'idShoppingListItemNote',
        'fk_shopping_list_item' => 'fkShoppingListItem',
        'fkShoppingListItem' => 'fkShoppingListItem',
        'FkShoppingListItem' => 'fkShoppingListItem',
        'note' => 'note',
        'Note' => 'note',
        'spy_shopping_list_item' => 'spyShoppingListItem',
        'spyShoppingListItem' => 'spyShoppingListItem',
        'SpyShoppingListItem' => 'spyShoppingListItem',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_SHOPPING_LIST_ITEM_NOTE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_shopping_list_item_note',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_SHOPPING_LIST_ITEM => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_shopping_list_item',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NOTE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'note',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SHOPPING_LIST_ITEM => [
            'type' => 'Generated\Shared\Transfer\SpyShoppingListItemEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_shopping_list_item',
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
    public static $entityNamespace = 'Orm\Zed\ShoppingListNote\Persistence\SpyShoppingListItemNote';


    /**
     * @module 
     *
     * @param integer|null $idShoppingListItemNote
     *
     * @return $this
     */
    public function setIdShoppingListItemNote($idShoppingListItemNote)
    {
        $this->idShoppingListItemNote = $idShoppingListItemNote;
        $this->modifiedProperties[self::ID_SHOPPING_LIST_ITEM_NOTE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdShoppingListItemNote()
    {
        return $this->idShoppingListItemNote;
    }

    /**
     * @module 
     *
     * @param integer|null $idShoppingListItemNote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdShoppingListItemNoteOrFail($idShoppingListItemNote)
    {
        if ($idShoppingListItemNote === null) {
            $this->throwNullValueException(static::ID_SHOPPING_LIST_ITEM_NOTE);
        }

        return $this->setIdShoppingListItemNote($idShoppingListItemNote);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdShoppingListItemNoteOrFail()
    {
        if ($this->idShoppingListItemNote === null) {
            $this->throwNullValueException(static::ID_SHOPPING_LIST_ITEM_NOTE);
        }

        return $this->idShoppingListItemNote;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdShoppingListItemNote()
    {
        $this->assertPropertyIsSet(self::ID_SHOPPING_LIST_ITEM_NOTE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkShoppingListItem
     *
     * @return $this
     */
    public function setFkShoppingListItem($fkShoppingListItem)
    {
        $this->fkShoppingListItem = $fkShoppingListItem;
        $this->modifiedProperties[self::FK_SHOPPING_LIST_ITEM] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkShoppingListItem()
    {
        return $this->fkShoppingListItem;
    }

    /**
     * @module 
     *
     * @param integer|null $fkShoppingListItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkShoppingListItemOrFail($fkShoppingListItem)
    {
        if ($fkShoppingListItem === null) {
            $this->throwNullValueException(static::FK_SHOPPING_LIST_ITEM);
        }

        return $this->setFkShoppingListItem($fkShoppingListItem);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkShoppingListItemOrFail()
    {
        if ($this->fkShoppingListItem === null) {
            $this->throwNullValueException(static::FK_SHOPPING_LIST_ITEM);
        }

        return $this->fkShoppingListItem;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkShoppingListItem()
    {
        $this->assertPropertyIsSet(self::FK_SHOPPING_LIST_ITEM);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $note
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->note = $note;
        $this->modifiedProperties[self::NOTE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @module 
     *
     * @param string|null $note
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNoteOrFail($note)
    {
        if ($note === null) {
            $this->throwNullValueException(static::NOTE);
        }

        return $this->setNote($note);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNoteOrFail()
    {
        if ($this->note === null) {
            $this->throwNullValueException(static::NOTE);
        }

        return $this->note;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNote()
    {
        $this->assertPropertyIsSet(self::NOTE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyShoppingListItemEntityTransfer|null $spyShoppingListItem
     *
     * @return $this
     */
    public function setSpyShoppingListItem(SpyShoppingListItemEntityTransfer $spyShoppingListItem = null)
    {
        $this->spyShoppingListItem = $spyShoppingListItem;
        $this->modifiedProperties[self::SPY_SHOPPING_LIST_ITEM] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyShoppingListItemEntityTransfer|null
     */
    public function getSpyShoppingListItem()
    {
        return $this->spyShoppingListItem;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyShoppingListItemEntityTransfer $spyShoppingListItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyShoppingListItemOrFail(SpyShoppingListItemEntityTransfer $spyShoppingListItem)
    {
        return $this->setSpyShoppingListItem($spyShoppingListItem);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyShoppingListItemEntityTransfer
     */
    public function getSpyShoppingListItemOrFail()
    {
        if ($this->spyShoppingListItem === null) {
            $this->throwNullValueException(static::SPY_SHOPPING_LIST_ITEM);
        }

        return $this->spyShoppingListItem;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyShoppingListItem()
    {
        $this->assertPropertyIsSet(self::SPY_SHOPPING_LIST_ITEM);

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
                case 'idShoppingListItemNote':
                case 'fkShoppingListItem':
                case 'note':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyShoppingListItem':
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
                case 'idShoppingListItemNote':
                case 'fkShoppingListItem':
                case 'note':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyShoppingListItem':
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
                case 'idShoppingListItemNote':
                case 'fkShoppingListItem':
                case 'note':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyShoppingListItem':
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
            'idShoppingListItemNote' => $this->idShoppingListItemNote,
            'fkShoppingListItem' => $this->fkShoppingListItem,
            'note' => $this->note,
            'spyShoppingListItem' => $this->spyShoppingListItem,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_shopping_list_item_note' => $this->idShoppingListItemNote,
            'fk_shopping_list_item' => $this->fkShoppingListItem,
            'note' => $this->note,
            'spy_shopping_list_item' => $this->spyShoppingListItem,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_shopping_list_item_note' => $this->idShoppingListItemNote instanceof AbstractTransfer ? $this->idShoppingListItemNote->toArray(true, false) : $this->idShoppingListItemNote,
            'fk_shopping_list_item' => $this->fkShoppingListItem instanceof AbstractTransfer ? $this->fkShoppingListItem->toArray(true, false) : $this->fkShoppingListItem,
            'note' => $this->note instanceof AbstractTransfer ? $this->note->toArray(true, false) : $this->note,
            'spy_shopping_list_item' => $this->spyShoppingListItem instanceof AbstractTransfer ? $this->spyShoppingListItem->toArray(true, false) : $this->spyShoppingListItem,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idShoppingListItemNote' => $this->idShoppingListItemNote instanceof AbstractTransfer ? $this->idShoppingListItemNote->toArray(true, true) : $this->idShoppingListItemNote,
            'fkShoppingListItem' => $this->fkShoppingListItem instanceof AbstractTransfer ? $this->fkShoppingListItem->toArray(true, true) : $this->fkShoppingListItem,
            'note' => $this->note instanceof AbstractTransfer ? $this->note->toArray(true, true) : $this->note,
            'spyShoppingListItem' => $this->spyShoppingListItem instanceof AbstractTransfer ? $this->spyShoppingListItem->toArray(true, true) : $this->spyShoppingListItem,
        ];
    }
}
