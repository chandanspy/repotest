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
class CartItemReplaceTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const CART_CHANGE_FOR_REMOVAL = 'cartChangeForRemoval';

    /**
     * @var string
     */
    public const CART_CHANGE_FOR_ADDING = 'cartChangeForAdding';

    /**
     * @var \Generated\Shared\Transfer\CartChangeTransfer|null
     */
    protected $cartChangeForRemoval;

    /**
     * @var \Generated\Shared\Transfer\CartChangeTransfer|null
     */
    protected $cartChangeForAdding;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'cart_change_for_removal' => 'cartChangeForRemoval',
        'cartChangeForRemoval' => 'cartChangeForRemoval',
        'CartChangeForRemoval' => 'cartChangeForRemoval',
        'cart_change_for_adding' => 'cartChangeForAdding',
        'cartChangeForAdding' => 'cartChangeForAdding',
        'CartChangeForAdding' => 'cartChangeForAdding',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::CART_CHANGE_FOR_REMOVAL => [
            'type' => 'Generated\Shared\Transfer\CartChangeTransfer',
            'type_shim' => null,
            'name_underscore' => 'cart_change_for_removal',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CART_CHANGE_FOR_ADDING => [
            'type' => 'Generated\Shared\Transfer\CartChangeTransfer',
            'type_shim' => null,
            'name_underscore' => 'cart_change_for_adding',
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
     * @module Cart
     *
     * @param \Generated\Shared\Transfer\CartChangeTransfer|null $cartChangeForRemoval
     *
     * @return $this
     */
    public function setCartChangeForRemoval(CartChangeTransfer $cartChangeForRemoval = null)
    {
        $this->cartChangeForRemoval = $cartChangeForRemoval;
        $this->modifiedProperties[self::CART_CHANGE_FOR_REMOVAL] = true;

        return $this;
    }

    /**
     * @module Cart
     *
     * @return \Generated\Shared\Transfer\CartChangeTransfer|null
     */
    public function getCartChangeForRemoval()
    {
        return $this->cartChangeForRemoval;
    }

    /**
     * @module Cart
     *
     * @param \Generated\Shared\Transfer\CartChangeTransfer $cartChangeForRemoval
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCartChangeForRemovalOrFail(CartChangeTransfer $cartChangeForRemoval)
    {
        return $this->setCartChangeForRemoval($cartChangeForRemoval);
    }

    /**
     * @module Cart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CartChangeTransfer
     */
    public function getCartChangeForRemovalOrFail()
    {
        if ($this->cartChangeForRemoval === null) {
            $this->throwNullValueException(static::CART_CHANGE_FOR_REMOVAL);
        }

        return $this->cartChangeForRemoval;
    }

    /**
     * @module Cart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCartChangeForRemoval()
    {
        $this->assertPropertyIsSet(self::CART_CHANGE_FOR_REMOVAL);

        return $this;
    }

    /**
     * @module Cart
     *
     * @param \Generated\Shared\Transfer\CartChangeTransfer|null $cartChangeForAdding
     *
     * @return $this
     */
    public function setCartChangeForAdding(CartChangeTransfer $cartChangeForAdding = null)
    {
        $this->cartChangeForAdding = $cartChangeForAdding;
        $this->modifiedProperties[self::CART_CHANGE_FOR_ADDING] = true;

        return $this;
    }

    /**
     * @module Cart
     *
     * @return \Generated\Shared\Transfer\CartChangeTransfer|null
     */
    public function getCartChangeForAdding()
    {
        return $this->cartChangeForAdding;
    }

    /**
     * @module Cart
     *
     * @param \Generated\Shared\Transfer\CartChangeTransfer $cartChangeForAdding
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCartChangeForAddingOrFail(CartChangeTransfer $cartChangeForAdding)
    {
        return $this->setCartChangeForAdding($cartChangeForAdding);
    }

    /**
     * @module Cart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CartChangeTransfer
     */
    public function getCartChangeForAddingOrFail()
    {
        if ($this->cartChangeForAdding === null) {
            $this->throwNullValueException(static::CART_CHANGE_FOR_ADDING);
        }

        return $this->cartChangeForAdding;
    }

    /**
     * @module Cart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCartChangeForAdding()
    {
        $this->assertPropertyIsSet(self::CART_CHANGE_FOR_ADDING);

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
                case 'cartChangeForRemoval':
                case 'cartChangeForAdding':
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
                case 'cartChangeForRemoval':
                case 'cartChangeForAdding':
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
                case 'cartChangeForRemoval':
                case 'cartChangeForAdding':
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
            'cartChangeForRemoval' => $this->cartChangeForRemoval,
            'cartChangeForAdding' => $this->cartChangeForAdding,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'cart_change_for_removal' => $this->cartChangeForRemoval,
            'cart_change_for_adding' => $this->cartChangeForAdding,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'cart_change_for_removal' => $this->cartChangeForRemoval instanceof AbstractTransfer ? $this->cartChangeForRemoval->toArray(true, false) : $this->cartChangeForRemoval,
            'cart_change_for_adding' => $this->cartChangeForAdding instanceof AbstractTransfer ? $this->cartChangeForAdding->toArray(true, false) : $this->cartChangeForAdding,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'cartChangeForRemoval' => $this->cartChangeForRemoval instanceof AbstractTransfer ? $this->cartChangeForRemoval->toArray(true, true) : $this->cartChangeForRemoval,
            'cartChangeForAdding' => $this->cartChangeForAdding instanceof AbstractTransfer ? $this->cartChangeForAdding->toArray(true, true) : $this->cartChangeForAdding,
        ];
    }
}
