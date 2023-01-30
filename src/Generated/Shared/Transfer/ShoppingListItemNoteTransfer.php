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
class ShoppingListItemNoteTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const NOTE = 'note';

    /**
     * @var string
     */
    public const ID_SHOPPING_LIST_ITEM_NOTE = 'idShoppingListItemNote';

    /**
     * @var string
     */
    public const FK_SHOPPING_LIST_ITEM = 'fkShoppingListItem';

    /**
     * @var string|null
     */
    protected $note;

    /**
     * @var int|null
     */
    protected $idShoppingListItemNote;

    /**
     * @var int|null
     */
    protected $fkShoppingListItem;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'note' => 'note',
        'Note' => 'note',
        'id_shopping_list_item_note' => 'idShoppingListItemNote',
        'idShoppingListItemNote' => 'idShoppingListItemNote',
        'IdShoppingListItemNote' => 'idShoppingListItemNote',
        'fk_shopping_list_item' => 'fkShoppingListItem',
        'fkShoppingListItem' => 'fkShoppingListItem',
        'FkShoppingListItem' => 'fkShoppingListItem',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::ID_SHOPPING_LIST_ITEM_NOTE => [
            'type' => 'int',
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
            'type' => 'int',
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
    ];

    /**
     * @module ShoppingListNoteWidget|ShoppingListNote
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
     * @module ShoppingListNoteWidget|ShoppingListNote
     *
     * @return string|null
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @module ShoppingListNoteWidget|ShoppingListNote
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
     * @module ShoppingListNoteWidget|ShoppingListNote
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
     * @module ShoppingListNoteWidget|ShoppingListNote
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
     * @module ShoppingListNote
     *
     * @param int|null $idShoppingListItemNote
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
     * @module ShoppingListNote
     *
     * @return int|null
     */
    public function getIdShoppingListItemNote()
    {
        return $this->idShoppingListItemNote;
    }

    /**
     * @module ShoppingListNote
     *
     * @param int|null $idShoppingListItemNote
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
     * @module ShoppingListNote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdShoppingListItemNoteOrFail()
    {
        if ($this->idShoppingListItemNote === null) {
            $this->throwNullValueException(static::ID_SHOPPING_LIST_ITEM_NOTE);
        }

        return $this->idShoppingListItemNote;
    }

    /**
     * @module ShoppingListNote
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
     * @module ShoppingListNote
     *
     * @param int|null $fkShoppingListItem
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
     * @module ShoppingListNote
     *
     * @return int|null
     */
    public function getFkShoppingListItem()
    {
        return $this->fkShoppingListItem;
    }

    /**
     * @module ShoppingListNote
     *
     * @param int|null $fkShoppingListItem
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
     * @module ShoppingListNote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkShoppingListItemOrFail()
    {
        if ($this->fkShoppingListItem === null) {
            $this->throwNullValueException(static::FK_SHOPPING_LIST_ITEM);
        }

        return $this->fkShoppingListItem;
    }

    /**
     * @module ShoppingListNote
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
                case 'note':
                case 'idShoppingListItemNote':
                case 'fkShoppingListItem':
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
                case 'note':
                case 'idShoppingListItemNote':
                case 'fkShoppingListItem':
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
                case 'note':
                case 'idShoppingListItemNote':
                case 'fkShoppingListItem':
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
            'note' => $this->note,
            'idShoppingListItemNote' => $this->idShoppingListItemNote,
            'fkShoppingListItem' => $this->fkShoppingListItem,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'note' => $this->note,
            'id_shopping_list_item_note' => $this->idShoppingListItemNote,
            'fk_shopping_list_item' => $this->fkShoppingListItem,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'note' => $this->note instanceof AbstractTransfer ? $this->note->toArray(true, false) : $this->note,
            'id_shopping_list_item_note' => $this->idShoppingListItemNote instanceof AbstractTransfer ? $this->idShoppingListItemNote->toArray(true, false) : $this->idShoppingListItemNote,
            'fk_shopping_list_item' => $this->fkShoppingListItem instanceof AbstractTransfer ? $this->fkShoppingListItem->toArray(true, false) : $this->fkShoppingListItem,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'note' => $this->note instanceof AbstractTransfer ? $this->note->toArray(true, true) : $this->note,
            'idShoppingListItemNote' => $this->idShoppingListItemNote instanceof AbstractTransfer ? $this->idShoppingListItemNote->toArray(true, true) : $this->idShoppingListItemNote,
            'fkShoppingListItem' => $this->fkShoppingListItem instanceof AbstractTransfer ? $this->fkShoppingListItem->toArray(true, true) : $this->fkShoppingListItem,
        ];
    }
}
