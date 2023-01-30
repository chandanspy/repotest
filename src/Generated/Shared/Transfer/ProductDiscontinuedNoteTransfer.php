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
class ProductDiscontinuedNoteTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const FK_PRODUCT_DISCONTINUED = 'fkProductDiscontinued';

    /**
     * @var string
     */
    public const FK_LOCALE = 'fkLocale';

    /**
     * @var string
     */
    public const NOTE = 'note';

    /**
     * @var string
     */
    public const ID_PRODUCT_DISCONTINUED_NOTE = 'idProductDiscontinuedNote';

    /**
     * @var int|null
     */
    protected $fkProductDiscontinued;

    /**
     * @var int|null
     */
    protected $fkLocale;

    /**
     * @var string|null
     */
    protected $note;

    /**
     * @var int|null
     */
    protected $idProductDiscontinuedNote;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'fk_product_discontinued' => 'fkProductDiscontinued',
        'fkProductDiscontinued' => 'fkProductDiscontinued',
        'FkProductDiscontinued' => 'fkProductDiscontinued',
        'fk_locale' => 'fkLocale',
        'fkLocale' => 'fkLocale',
        'FkLocale' => 'fkLocale',
        'note' => 'note',
        'Note' => 'note',
        'id_product_discontinued_note' => 'idProductDiscontinuedNote',
        'idProductDiscontinuedNote' => 'idProductDiscontinuedNote',
        'IdProductDiscontinuedNote' => 'idProductDiscontinuedNote',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::FK_PRODUCT_DISCONTINUED => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_product_discontinued',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_LOCALE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_locale',
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
        self::ID_PRODUCT_DISCONTINUED_NOTE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_discontinued_note',
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
     * @module ProductDiscontinuedGui|ProductDiscontinued
     *
     * @param int|null $fkProductDiscontinued
     *
     * @return $this
     */
    public function setFkProductDiscontinued($fkProductDiscontinued)
    {
        $this->fkProductDiscontinued = $fkProductDiscontinued;
        $this->modifiedProperties[self::FK_PRODUCT_DISCONTINUED] = true;

        return $this;
    }

    /**
     * @module ProductDiscontinuedGui|ProductDiscontinued
     *
     * @return int|null
     */
    public function getFkProductDiscontinued()
    {
        return $this->fkProductDiscontinued;
    }

    /**
     * @module ProductDiscontinuedGui|ProductDiscontinued
     *
     * @param int|null $fkProductDiscontinued
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkProductDiscontinuedOrFail($fkProductDiscontinued)
    {
        if ($fkProductDiscontinued === null) {
            $this->throwNullValueException(static::FK_PRODUCT_DISCONTINUED);
        }

        return $this->setFkProductDiscontinued($fkProductDiscontinued);
    }

    /**
     * @module ProductDiscontinuedGui|ProductDiscontinued
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkProductDiscontinuedOrFail()
    {
        if ($this->fkProductDiscontinued === null) {
            $this->throwNullValueException(static::FK_PRODUCT_DISCONTINUED);
        }

        return $this->fkProductDiscontinued;
    }

    /**
     * @module ProductDiscontinuedGui|ProductDiscontinued
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkProductDiscontinued()
    {
        $this->assertPropertyIsSet(self::FK_PRODUCT_DISCONTINUED);

        return $this;
    }

    /**
     * @module ProductDiscontinuedGui|ProductDiscontinuedStorage|ProductDiscontinued
     *
     * @param int|null $fkLocale
     *
     * @return $this
     */
    public function setFkLocale($fkLocale)
    {
        $this->fkLocale = $fkLocale;
        $this->modifiedProperties[self::FK_LOCALE] = true;

        return $this;
    }

    /**
     * @module ProductDiscontinuedGui|ProductDiscontinuedStorage|ProductDiscontinued
     *
     * @return int|null
     */
    public function getFkLocale()
    {
        return $this->fkLocale;
    }

    /**
     * @module ProductDiscontinuedGui|ProductDiscontinuedStorage|ProductDiscontinued
     *
     * @param int|null $fkLocale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkLocaleOrFail($fkLocale)
    {
        if ($fkLocale === null) {
            $this->throwNullValueException(static::FK_LOCALE);
        }

        return $this->setFkLocale($fkLocale);
    }

    /**
     * @module ProductDiscontinuedGui|ProductDiscontinuedStorage|ProductDiscontinued
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkLocaleOrFail()
    {
        if ($this->fkLocale === null) {
            $this->throwNullValueException(static::FK_LOCALE);
        }

        return $this->fkLocale;
    }

    /**
     * @module ProductDiscontinuedGui|ProductDiscontinuedStorage|ProductDiscontinued
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkLocale()
    {
        $this->assertPropertyIsSet(self::FK_LOCALE);

        return $this;
    }

    /**
     * @module ProductDiscontinuedStorage|ProductDiscontinued
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
     * @module ProductDiscontinuedStorage|ProductDiscontinued
     *
     * @return string|null
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @module ProductDiscontinuedStorage|ProductDiscontinued
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
     * @module ProductDiscontinuedStorage|ProductDiscontinued
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
     * @module ProductDiscontinuedStorage|ProductDiscontinued
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
     * @module ProductDiscontinued
     *
     * @param int|null $idProductDiscontinuedNote
     *
     * @return $this
     */
    public function setIdProductDiscontinuedNote($idProductDiscontinuedNote)
    {
        $this->idProductDiscontinuedNote = $idProductDiscontinuedNote;
        $this->modifiedProperties[self::ID_PRODUCT_DISCONTINUED_NOTE] = true;

        return $this;
    }

    /**
     * @module ProductDiscontinued
     *
     * @return int|null
     */
    public function getIdProductDiscontinuedNote()
    {
        return $this->idProductDiscontinuedNote;
    }

    /**
     * @module ProductDiscontinued
     *
     * @param int|null $idProductDiscontinuedNote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductDiscontinuedNoteOrFail($idProductDiscontinuedNote)
    {
        if ($idProductDiscontinuedNote === null) {
            $this->throwNullValueException(static::ID_PRODUCT_DISCONTINUED_NOTE);
        }

        return $this->setIdProductDiscontinuedNote($idProductDiscontinuedNote);
    }

    /**
     * @module ProductDiscontinued
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductDiscontinuedNoteOrFail()
    {
        if ($this->idProductDiscontinuedNote === null) {
            $this->throwNullValueException(static::ID_PRODUCT_DISCONTINUED_NOTE);
        }

        return $this->idProductDiscontinuedNote;
    }

    /**
     * @module ProductDiscontinued
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductDiscontinuedNote()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_DISCONTINUED_NOTE);

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
                case 'fkProductDiscontinued':
                case 'fkLocale':
                case 'note':
                case 'idProductDiscontinuedNote':
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
                case 'fkProductDiscontinued':
                case 'fkLocale':
                case 'note':
                case 'idProductDiscontinuedNote':
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
                case 'fkProductDiscontinued':
                case 'fkLocale':
                case 'note':
                case 'idProductDiscontinuedNote':
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
            'fkProductDiscontinued' => $this->fkProductDiscontinued,
            'fkLocale' => $this->fkLocale,
            'note' => $this->note,
            'idProductDiscontinuedNote' => $this->idProductDiscontinuedNote,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'fk_product_discontinued' => $this->fkProductDiscontinued,
            'fk_locale' => $this->fkLocale,
            'note' => $this->note,
            'id_product_discontinued_note' => $this->idProductDiscontinuedNote,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'fk_product_discontinued' => $this->fkProductDiscontinued instanceof AbstractTransfer ? $this->fkProductDiscontinued->toArray(true, false) : $this->fkProductDiscontinued,
            'fk_locale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, false) : $this->fkLocale,
            'note' => $this->note instanceof AbstractTransfer ? $this->note->toArray(true, false) : $this->note,
            'id_product_discontinued_note' => $this->idProductDiscontinuedNote instanceof AbstractTransfer ? $this->idProductDiscontinuedNote->toArray(true, false) : $this->idProductDiscontinuedNote,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'fkProductDiscontinued' => $this->fkProductDiscontinued instanceof AbstractTransfer ? $this->fkProductDiscontinued->toArray(true, true) : $this->fkProductDiscontinued,
            'fkLocale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, true) : $this->fkLocale,
            'note' => $this->note instanceof AbstractTransfer ? $this->note->toArray(true, true) : $this->note,
            'idProductDiscontinuedNote' => $this->idProductDiscontinuedNote instanceof AbstractTransfer ? $this->idProductDiscontinuedNote->toArray(true, true) : $this->idProductDiscontinuedNote,
        ];
    }
}
