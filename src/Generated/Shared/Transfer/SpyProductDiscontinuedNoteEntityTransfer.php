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
class SpyProductDiscontinuedNoteEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_DISCONTINUED_NOTE = 'idProductDiscontinuedNote';

    /**
     * @var string
     */
    public const FK_LOCALE = 'fkLocale';

    /**
     * @var string
     */
    public const FK_PRODUCT_DISCONTINUED = 'fkProductDiscontinued';

    /**
     * @var string
     */
    public const NOTE = 'note';

    /**
     * @var string
     */
    public const PRODUCT_DISCONTINUED = 'productDiscontinued';

    /**
     * @var string
     */
    public const LOCALE = 'locale';

    /**
     * @var integer|null
     */
    protected $idProductDiscontinuedNote;

    /**
     * @var integer|null
     */
    protected $fkLocale;

    /**
     * @var integer|null
     */
    protected $fkProductDiscontinued;

    /**
     * @var string|null
     */
    protected $note;

    /**
     * @var \Generated\Shared\Transfer\SpyProductDiscontinuedEntityTransfer|null
     */
    protected $productDiscontinued;

    /**
     * @var \Generated\Shared\Transfer\SpyLocaleEntityTransfer|null
     */
    protected $locale;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_discontinued_note' => 'idProductDiscontinuedNote',
        'idProductDiscontinuedNote' => 'idProductDiscontinuedNote',
        'IdProductDiscontinuedNote' => 'idProductDiscontinuedNote',
        'fk_locale' => 'fkLocale',
        'fkLocale' => 'fkLocale',
        'FkLocale' => 'fkLocale',
        'fk_product_discontinued' => 'fkProductDiscontinued',
        'fkProductDiscontinued' => 'fkProductDiscontinued',
        'FkProductDiscontinued' => 'fkProductDiscontinued',
        'note' => 'note',
        'Note' => 'note',
        'product_discontinued' => 'productDiscontinued',
        'productDiscontinued' => 'productDiscontinued',
        'ProductDiscontinued' => 'productDiscontinued',
        'locale' => 'locale',
        'Locale' => 'locale',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_DISCONTINUED_NOTE => [
            'type' => 'integer',
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
        self::FK_LOCALE => [
            'type' => 'integer',
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
        self::FK_PRODUCT_DISCONTINUED => [
            'type' => 'integer',
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
        self::PRODUCT_DISCONTINUED => [
            'type' => 'Generated\Shared\Transfer\SpyProductDiscontinuedEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_discontinued',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LOCALE => [
            'type' => 'Generated\Shared\Transfer\SpyLocaleEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'locale',
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
    public static $entityNamespace = 'Orm\Zed\ProductDiscontinued\Persistence\SpyProductDiscontinuedNote';


    /**
     * @module 
     *
     * @param integer|null $idProductDiscontinuedNote
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdProductDiscontinuedNote()
    {
        return $this->idProductDiscontinuedNote;
    }

    /**
     * @module 
     *
     * @param integer|null $idProductDiscontinuedNote
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdProductDiscontinuedNoteOrFail()
    {
        if ($this->idProductDiscontinuedNote === null) {
            $this->throwNullValueException(static::ID_PRODUCT_DISCONTINUED_NOTE);
        }

        return $this->idProductDiscontinuedNote;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkLocale
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
     * @module 
     *
     * @return integer|null
     */
    public function getFkLocale()
    {
        return $this->fkLocale;
    }

    /**
     * @module 
     *
     * @param integer|null $fkLocale
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkLocaleOrFail()
    {
        if ($this->fkLocale === null) {
            $this->throwNullValueException(static::FK_LOCALE);
        }

        return $this->fkLocale;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkProductDiscontinued
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
     * @module 
     *
     * @return integer|null
     */
    public function getFkProductDiscontinued()
    {
        return $this->fkProductDiscontinued;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductDiscontinued
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkProductDiscontinuedOrFail()
    {
        if ($this->fkProductDiscontinued === null) {
            $this->throwNullValueException(static::FK_PRODUCT_DISCONTINUED);
        }

        return $this->fkProductDiscontinued;
    }

    /**
     * @module 
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
     * @param \Generated\Shared\Transfer\SpyProductDiscontinuedEntityTransfer|null $productDiscontinued
     *
     * @return $this
     */
    public function setProductDiscontinued(SpyProductDiscontinuedEntityTransfer $productDiscontinued = null)
    {
        $this->productDiscontinued = $productDiscontinued;
        $this->modifiedProperties[self::PRODUCT_DISCONTINUED] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyProductDiscontinuedEntityTransfer|null
     */
    public function getProductDiscontinued()
    {
        return $this->productDiscontinued;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductDiscontinuedEntityTransfer $productDiscontinued
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductDiscontinuedOrFail(SpyProductDiscontinuedEntityTransfer $productDiscontinued)
    {
        return $this->setProductDiscontinued($productDiscontinued);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyProductDiscontinuedEntityTransfer
     */
    public function getProductDiscontinuedOrFail()
    {
        if ($this->productDiscontinued === null) {
            $this->throwNullValueException(static::PRODUCT_DISCONTINUED);
        }

        return $this->productDiscontinued;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductDiscontinued()
    {
        $this->assertPropertyIsSet(self::PRODUCT_DISCONTINUED);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyLocaleEntityTransfer|null $locale
     *
     * @return $this
     */
    public function setLocale(SpyLocaleEntityTransfer $locale = null)
    {
        $this->locale = $locale;
        $this->modifiedProperties[self::LOCALE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyLocaleEntityTransfer|null
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyLocaleEntityTransfer $locale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLocaleOrFail(SpyLocaleEntityTransfer $locale)
    {
        return $this->setLocale($locale);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyLocaleEntityTransfer
     */
    public function getLocaleOrFail()
    {
        if ($this->locale === null) {
            $this->throwNullValueException(static::LOCALE);
        }

        return $this->locale;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocale()
    {
        $this->assertPropertyIsSet(self::LOCALE);

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
                case 'idProductDiscontinuedNote':
                case 'fkLocale':
                case 'fkProductDiscontinued':
                case 'note':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'productDiscontinued':
                case 'locale':
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
                case 'idProductDiscontinuedNote':
                case 'fkLocale':
                case 'fkProductDiscontinued':
                case 'note':
                    $values[$arrayKey] = $value;

                    break;
                case 'productDiscontinued':
                case 'locale':
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
                case 'idProductDiscontinuedNote':
                case 'fkLocale':
                case 'fkProductDiscontinued':
                case 'note':
                    $values[$arrayKey] = $value;

                    break;
                case 'productDiscontinued':
                case 'locale':
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
            'idProductDiscontinuedNote' => $this->idProductDiscontinuedNote,
            'fkLocale' => $this->fkLocale,
            'fkProductDiscontinued' => $this->fkProductDiscontinued,
            'note' => $this->note,
            'productDiscontinued' => $this->productDiscontinued,
            'locale' => $this->locale,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_discontinued_note' => $this->idProductDiscontinuedNote,
            'fk_locale' => $this->fkLocale,
            'fk_product_discontinued' => $this->fkProductDiscontinued,
            'note' => $this->note,
            'product_discontinued' => $this->productDiscontinued,
            'locale' => $this->locale,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_discontinued_note' => $this->idProductDiscontinuedNote instanceof AbstractTransfer ? $this->idProductDiscontinuedNote->toArray(true, false) : $this->idProductDiscontinuedNote,
            'fk_locale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, false) : $this->fkLocale,
            'fk_product_discontinued' => $this->fkProductDiscontinued instanceof AbstractTransfer ? $this->fkProductDiscontinued->toArray(true, false) : $this->fkProductDiscontinued,
            'note' => $this->note instanceof AbstractTransfer ? $this->note->toArray(true, false) : $this->note,
            'product_discontinued' => $this->productDiscontinued instanceof AbstractTransfer ? $this->productDiscontinued->toArray(true, false) : $this->productDiscontinued,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, false) : $this->locale,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductDiscontinuedNote' => $this->idProductDiscontinuedNote instanceof AbstractTransfer ? $this->idProductDiscontinuedNote->toArray(true, true) : $this->idProductDiscontinuedNote,
            'fkLocale' => $this->fkLocale instanceof AbstractTransfer ? $this->fkLocale->toArray(true, true) : $this->fkLocale,
            'fkProductDiscontinued' => $this->fkProductDiscontinued instanceof AbstractTransfer ? $this->fkProductDiscontinued->toArray(true, true) : $this->fkProductDiscontinued,
            'note' => $this->note instanceof AbstractTransfer ? $this->note->toArray(true, true) : $this->note,
            'productDiscontinued' => $this->productDiscontinued instanceof AbstractTransfer ? $this->productDiscontinued->toArray(true, true) : $this->productDiscontinued,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, true) : $this->locale,
        ];
    }
}
