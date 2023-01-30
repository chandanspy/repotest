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
class UpdateCategoryStoreRelationRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_CATEGORY = 'idCategory';

    /**
     * @var string
     */
    public const NEW_STORE_ASSIGNMENT = 'newStoreAssignment';

    /**
     * @var string
     */
    public const CURRENT_STORE_ASSIGNMENT = 'currentStoreAssignment';

    /**
     * @var int|null
     */
    protected $idCategory;

    /**
     * @var \Generated\Shared\Transfer\StoreRelationTransfer|null
     */
    protected $newStoreAssignment;

    /**
     * @var \Generated\Shared\Transfer\StoreRelationTransfer|null
     */
    protected $currentStoreAssignment;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_category' => 'idCategory',
        'idCategory' => 'idCategory',
        'IdCategory' => 'idCategory',
        'new_store_assignment' => 'newStoreAssignment',
        'newStoreAssignment' => 'newStoreAssignment',
        'NewStoreAssignment' => 'newStoreAssignment',
        'current_store_assignment' => 'currentStoreAssignment',
        'currentStoreAssignment' => 'currentStoreAssignment',
        'CurrentStoreAssignment' => 'currentStoreAssignment',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_CATEGORY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_category',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NEW_STORE_ASSIGNMENT => [
            'type' => 'Generated\Shared\Transfer\StoreRelationTransfer',
            'type_shim' => null,
            'name_underscore' => 'new_store_assignment',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CURRENT_STORE_ASSIGNMENT => [
            'type' => 'Generated\Shared\Transfer\StoreRelationTransfer',
            'type_shim' => null,
            'name_underscore' => 'current_store_assignment',
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
     * @module CategoryDataImport|Category
     *
     * @param int|null $idCategory
     *
     * @return $this
     */
    public function setIdCategory($idCategory)
    {
        $this->idCategory = $idCategory;
        $this->modifiedProperties[self::ID_CATEGORY] = true;

        return $this;
    }

    /**
     * @module CategoryDataImport|Category
     *
     * @return int|null
     */
    public function getIdCategory()
    {
        return $this->idCategory;
    }

    /**
     * @module CategoryDataImport|Category
     *
     * @param int|null $idCategory
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCategoryOrFail($idCategory)
    {
        if ($idCategory === null) {
            $this->throwNullValueException(static::ID_CATEGORY);
        }

        return $this->setIdCategory($idCategory);
    }

    /**
     * @module CategoryDataImport|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCategoryOrFail()
    {
        if ($this->idCategory === null) {
            $this->throwNullValueException(static::ID_CATEGORY);
        }

        return $this->idCategory;
    }

    /**
     * @module CategoryDataImport|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCategory()
    {
        $this->assertPropertyIsSet(self::ID_CATEGORY);

        return $this;
    }

    /**
     * @module CategoryDataImport|Category
     *
     * @param \Generated\Shared\Transfer\StoreRelationTransfer|null $newStoreAssignment
     *
     * @return $this
     */
    public function setNewStoreAssignment(StoreRelationTransfer $newStoreAssignment = null)
    {
        $this->newStoreAssignment = $newStoreAssignment;
        $this->modifiedProperties[self::NEW_STORE_ASSIGNMENT] = true;

        return $this;
    }

    /**
     * @module CategoryDataImport|Category
     *
     * @return \Generated\Shared\Transfer\StoreRelationTransfer|null
     */
    public function getNewStoreAssignment()
    {
        return $this->newStoreAssignment;
    }

    /**
     * @module CategoryDataImport|Category
     *
     * @param \Generated\Shared\Transfer\StoreRelationTransfer $newStoreAssignment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNewStoreAssignmentOrFail(StoreRelationTransfer $newStoreAssignment)
    {
        return $this->setNewStoreAssignment($newStoreAssignment);
    }

    /**
     * @module CategoryDataImport|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\StoreRelationTransfer
     */
    public function getNewStoreAssignmentOrFail()
    {
        if ($this->newStoreAssignment === null) {
            $this->throwNullValueException(static::NEW_STORE_ASSIGNMENT);
        }

        return $this->newStoreAssignment;
    }

    /**
     * @module CategoryDataImport|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNewStoreAssignment()
    {
        $this->assertPropertyIsSet(self::NEW_STORE_ASSIGNMENT);

        return $this;
    }

    /**
     * @module CategoryDataImport|Category
     *
     * @param \Generated\Shared\Transfer\StoreRelationTransfer|null $currentStoreAssignment
     *
     * @return $this
     */
    public function setCurrentStoreAssignment(StoreRelationTransfer $currentStoreAssignment = null)
    {
        $this->currentStoreAssignment = $currentStoreAssignment;
        $this->modifiedProperties[self::CURRENT_STORE_ASSIGNMENT] = true;

        return $this;
    }

    /**
     * @module CategoryDataImport|Category
     *
     * @return \Generated\Shared\Transfer\StoreRelationTransfer|null
     */
    public function getCurrentStoreAssignment()
    {
        return $this->currentStoreAssignment;
    }

    /**
     * @module CategoryDataImport|Category
     *
     * @param \Generated\Shared\Transfer\StoreRelationTransfer $currentStoreAssignment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCurrentStoreAssignmentOrFail(StoreRelationTransfer $currentStoreAssignment)
    {
        return $this->setCurrentStoreAssignment($currentStoreAssignment);
    }

    /**
     * @module CategoryDataImport|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\StoreRelationTransfer
     */
    public function getCurrentStoreAssignmentOrFail()
    {
        if ($this->currentStoreAssignment === null) {
            $this->throwNullValueException(static::CURRENT_STORE_ASSIGNMENT);
        }

        return $this->currentStoreAssignment;
    }

    /**
     * @module CategoryDataImport|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCurrentStoreAssignment()
    {
        $this->assertPropertyIsSet(self::CURRENT_STORE_ASSIGNMENT);

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
                case 'idCategory':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'newStoreAssignment':
                case 'currentStoreAssignment':
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
                case 'idCategory':
                    $values[$arrayKey] = $value;

                    break;
                case 'newStoreAssignment':
                case 'currentStoreAssignment':
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
                case 'idCategory':
                    $values[$arrayKey] = $value;

                    break;
                case 'newStoreAssignment':
                case 'currentStoreAssignment':
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
            'idCategory' => $this->idCategory,
            'newStoreAssignment' => $this->newStoreAssignment,
            'currentStoreAssignment' => $this->currentStoreAssignment,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_category' => $this->idCategory,
            'new_store_assignment' => $this->newStoreAssignment,
            'current_store_assignment' => $this->currentStoreAssignment,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_category' => $this->idCategory instanceof AbstractTransfer ? $this->idCategory->toArray(true, false) : $this->idCategory,
            'new_store_assignment' => $this->newStoreAssignment instanceof AbstractTransfer ? $this->newStoreAssignment->toArray(true, false) : $this->newStoreAssignment,
            'current_store_assignment' => $this->currentStoreAssignment instanceof AbstractTransfer ? $this->currentStoreAssignment->toArray(true, false) : $this->currentStoreAssignment,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCategory' => $this->idCategory instanceof AbstractTransfer ? $this->idCategory->toArray(true, true) : $this->idCategory,
            'newStoreAssignment' => $this->newStoreAssignment instanceof AbstractTransfer ? $this->newStoreAssignment->toArray(true, true) : $this->newStoreAssignment,
            'currentStoreAssignment' => $this->currentStoreAssignment instanceof AbstractTransfer ? $this->currentStoreAssignment->toArray(true, true) : $this->currentStoreAssignment,
        ];
    }
}
