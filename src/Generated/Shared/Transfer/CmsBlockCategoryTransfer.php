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
class CmsBlockCategoryTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const POSITION = 'position';

    /**
     * @var string
     */
    public const BLOCK_NAMES = 'blockNames';

    /**
     * @var string
     */
    public const BLOCK_KEYS = 'blockKeys';

    /**
     * @var string|null
     */
    protected $position;

    /**
     * @var array
     */
    protected $blockNames = [];

    /**
     * @var array
     */
    protected $blockKeys = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'position' => 'position',
        'Position' => 'position',
        'block_names' => 'blockNames',
        'blockNames' => 'blockNames',
        'BlockNames' => 'blockNames',
        'block_keys' => 'blockKeys',
        'blockKeys' => 'blockKeys',
        'BlockKeys' => 'blockKeys',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::POSITION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'position',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::BLOCK_NAMES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'block_names',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::BLOCK_KEYS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'block_keys',
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
     * @module CmsBlockCategoryStorage
     *
     * @param string|null $position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->position = $position;
        $this->modifiedProperties[self::POSITION] = true;

        return $this;
    }

    /**
     * @module CmsBlockCategoryStorage
     *
     * @return string|null
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @module CmsBlockCategoryStorage
     *
     * @param string|null $position
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPositionOrFail($position)
    {
        if ($position === null) {
            $this->throwNullValueException(static::POSITION);
        }

        return $this->setPosition($position);
    }

    /**
     * @module CmsBlockCategoryStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPositionOrFail()
    {
        if ($this->position === null) {
            $this->throwNullValueException(static::POSITION);
        }

        return $this->position;
    }

    /**
     * @module CmsBlockCategoryStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePosition()
    {
        $this->assertPropertyIsSet(self::POSITION);

        return $this;
    }

    /**
     * @module CmsBlockCategoryStorage
     *
     * @param array|null $blockNames
     *
     * @return $this
     */
    public function setBlockNames(array $blockNames = null)
    {
        if ($blockNames === null) {
            $blockNames = [];
        }

        $this->blockNames = $blockNames;
        $this->modifiedProperties[self::BLOCK_NAMES] = true;

        return $this;
    }

    /**
     * @module CmsBlockCategoryStorage
     *
     * @return array
     */
    public function getBlockNames()
    {
        return $this->blockNames;
    }

    /**
     * @module CmsBlockCategoryStorage
     *
     * @param mixed $blockNames
     *
     * @return $this
     */
    public function addBlockNames($blockNames)
    {
        $this->blockNames[] = $blockNames;
        $this->modifiedProperties[self::BLOCK_NAMES] = true;

        return $this;
    }

    /**
     * @module CmsBlockCategoryStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireBlockNames()
    {
        $this->assertPropertyIsSet(self::BLOCK_NAMES);

        return $this;
    }

    /**
     * @module CmsBlockCategoryStorage
     *
     * @param array|null $blockKeys
     *
     * @return $this
     */
    public function setBlockKeys(array $blockKeys = null)
    {
        if ($blockKeys === null) {
            $blockKeys = [];
        }

        $this->blockKeys = $blockKeys;
        $this->modifiedProperties[self::BLOCK_KEYS] = true;

        return $this;
    }

    /**
     * @module CmsBlockCategoryStorage
     *
     * @return array
     */
    public function getBlockKeys()
    {
        return $this->blockKeys;
    }

    /**
     * @module CmsBlockCategoryStorage
     *
     * @param mixed $blockKeys
     *
     * @return $this
     */
    public function addBlockKeys($blockKeys)
    {
        $this->blockKeys[] = $blockKeys;
        $this->modifiedProperties[self::BLOCK_KEYS] = true;

        return $this;
    }

    /**
     * @module CmsBlockCategoryStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireBlockKeys()
    {
        $this->assertPropertyIsSet(self::BLOCK_KEYS);

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
                case 'position':
                case 'blockNames':
                case 'blockKeys':
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
                case 'position':
                case 'blockNames':
                case 'blockKeys':
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
                case 'position':
                case 'blockNames':
                case 'blockKeys':
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
            'position' => $this->position,
            'blockNames' => $this->blockNames,
            'blockKeys' => $this->blockKeys,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'position' => $this->position,
            'block_names' => $this->blockNames,
            'block_keys' => $this->blockKeys,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'position' => $this->position instanceof AbstractTransfer ? $this->position->toArray(true, false) : $this->position,
            'block_names' => $this->blockNames instanceof AbstractTransfer ? $this->blockNames->toArray(true, false) : $this->blockNames,
            'block_keys' => $this->blockKeys instanceof AbstractTransfer ? $this->blockKeys->toArray(true, false) : $this->blockKeys,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'position' => $this->position instanceof AbstractTransfer ? $this->position->toArray(true, true) : $this->position,
            'blockNames' => $this->blockNames instanceof AbstractTransfer ? $this->blockNames->toArray(true, true) : $this->blockNames,
            'blockKeys' => $this->blockKeys instanceof AbstractTransfer ? $this->blockKeys->toArray(true, true) : $this->blockKeys,
        ];
    }
}
