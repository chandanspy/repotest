<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class RestShoppingListCollectionResponseTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SHOPPING_LISTS = 'shoppingLists';

    /**
     * @var string
     */
    public const ERROR_IDENTIFIERS = 'errorIdentifiers';

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ShoppingListTransfer[]
     */
    protected $shoppingLists;

    /**
     * @var string[]
     */
    protected $errorIdentifiers = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'shopping_lists' => 'shoppingLists',
        'shoppingLists' => 'shoppingLists',
        'ShoppingLists' => 'shoppingLists',
        'error_identifiers' => 'errorIdentifiers',
        'errorIdentifiers' => 'errorIdentifiers',
        'ErrorIdentifiers' => 'errorIdentifiers',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::SHOPPING_LISTS => [
            'type' => 'Generated\Shared\Transfer\ShoppingListTransfer',
            'type_shim' => null,
            'name_underscore' => 'shopping_lists',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ERROR_IDENTIFIERS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'error_identifiers',
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
     * @module ShoppingListsRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ShoppingListTransfer[] $shoppingLists
     *
     * @return $this
     */
    public function setShoppingLists(ArrayObject $shoppingLists)
    {
        $this->shoppingLists = $shoppingLists;
        $this->modifiedProperties[self::SHOPPING_LISTS] = true;

        return $this;
    }

    /**
     * @module ShoppingListsRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ShoppingListTransfer[]
     */
    public function getShoppingLists()
    {
        return $this->shoppingLists;
    }

    /**
     * @module ShoppingListsRestApi
     *
     * @param \Generated\Shared\Transfer\ShoppingListTransfer $shoppingList
     *
     * @return $this
     */
    public function addShoppingList(ShoppingListTransfer $shoppingList)
    {
        $this->shoppingLists[] = $shoppingList;
        $this->modifiedProperties[self::SHOPPING_LISTS] = true;

        return $this;
    }

    /**
     * @module ShoppingListsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireShoppingLists()
    {
        $this->assertCollectionPropertyIsSet(self::SHOPPING_LISTS);

        return $this;
    }

    /**
     * @module ShoppingListsRestApi
     *
     * @param string[]|null $errorIdentifiers
     *
     * @return $this
     */
    public function setErrorIdentifiers(array $errorIdentifiers = null)
    {
        if ($errorIdentifiers === null) {
            $errorIdentifiers = [];
        }

        $this->errorIdentifiers = $errorIdentifiers;
        $this->modifiedProperties[self::ERROR_IDENTIFIERS] = true;

        return $this;
    }

    /**
     * @module ShoppingListsRestApi
     *
     * @return string[]
     */
    public function getErrorIdentifiers()
    {
        return $this->errorIdentifiers;
    }

    /**
     * @module ShoppingListsRestApi
     *
     * @param string $errorIdentifier
     *
     * @return $this
     */
    public function addErrorIdentifier($errorIdentifier)
    {
        $this->errorIdentifiers[] = $errorIdentifier;
        $this->modifiedProperties[self::ERROR_IDENTIFIERS] = true;

        return $this;
    }

    /**
     * @module ShoppingListsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireErrorIdentifiers()
    {
        $this->assertPropertyIsSet(self::ERROR_IDENTIFIERS);

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
                case 'errorIdentifiers':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'shoppingLists':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
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
                case 'errorIdentifiers':
                    $values[$arrayKey] = $value;

                    break;
                case 'shoppingLists':
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
                case 'errorIdentifiers':
                    $values[$arrayKey] = $value;

                    break;
                case 'shoppingLists':
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
        $this->shoppingLists = $this->shoppingLists ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'errorIdentifiers' => $this->errorIdentifiers,
            'shoppingLists' => $this->shoppingLists,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'error_identifiers' => $this->errorIdentifiers,
            'shopping_lists' => $this->shoppingLists,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'error_identifiers' => $this->errorIdentifiers instanceof AbstractTransfer ? $this->errorIdentifiers->toArray(true, false) : $this->errorIdentifiers,
            'shopping_lists' => $this->shoppingLists instanceof AbstractTransfer ? $this->shoppingLists->toArray(true, false) : $this->addValuesToCollection($this->shoppingLists, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'errorIdentifiers' => $this->errorIdentifiers instanceof AbstractTransfer ? $this->errorIdentifiers->toArray(true, true) : $this->errorIdentifiers,
            'shoppingLists' => $this->shoppingLists instanceof AbstractTransfer ? $this->shoppingLists->toArray(true, true) : $this->addValuesToCollection($this->shoppingLists, true, true),
        ];
    }
}
