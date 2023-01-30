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
class ProductGroupTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_GROUP = 'idProductGroup';

    /**
     * @var string
     */
    public const ID_PRODUCT_ABSTRACTS = 'idProductAbstracts';

    /**
     * @var int|null
     */
    protected $idProductGroup;

    /**
     * @var array
     */
    protected $idProductAbstracts = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_group' => 'idProductGroup',
        'idProductGroup' => 'idProductGroup',
        'IdProductGroup' => 'idProductGroup',
        'id_product_abstracts' => 'idProductAbstracts',
        'idProductAbstracts' => 'idProductAbstracts',
        'IdProductAbstracts' => 'idProductAbstracts',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_GROUP => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_group',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_PRODUCT_ABSTRACTS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'id_product_abstracts',
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
     * @module ProductGroup
     *
     * @param int|null $idProductGroup
     *
     * @return $this
     */
    public function setIdProductGroup($idProductGroup)
    {
        $this->idProductGroup = $idProductGroup;
        $this->modifiedProperties[self::ID_PRODUCT_GROUP] = true;

        return $this;
    }

    /**
     * @module ProductGroup
     *
     * @return int|null
     */
    public function getIdProductGroup()
    {
        return $this->idProductGroup;
    }

    /**
     * @module ProductGroup
     *
     * @param int|null $idProductGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductGroupOrFail($idProductGroup)
    {
        if ($idProductGroup === null) {
            $this->throwNullValueException(static::ID_PRODUCT_GROUP);
        }

        return $this->setIdProductGroup($idProductGroup);
    }

    /**
     * @module ProductGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductGroupOrFail()
    {
        if ($this->idProductGroup === null) {
            $this->throwNullValueException(static::ID_PRODUCT_GROUP);
        }

        return $this->idProductGroup;
    }

    /**
     * @module ProductGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductGroup()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_GROUP);

        return $this;
    }

    /**
     * @module ProductGroup
     *
     * @param array|null $idProductAbstracts
     *
     * @return $this
     */
    public function setIdProductAbstracts(array $idProductAbstracts = null)
    {
        if ($idProductAbstracts === null) {
            $idProductAbstracts = [];
        }

        $this->idProductAbstracts = $idProductAbstracts;
        $this->modifiedProperties[self::ID_PRODUCT_ABSTRACTS] = true;

        return $this;
    }

    /**
     * @module ProductGroup
     *
     * @return array
     */
    public function getIdProductAbstracts()
    {
        return $this->idProductAbstracts;
    }

    /**
     * @module ProductGroup
     *
     * @param mixed $idProductAbstract
     *
     * @return $this
     */
    public function addIdProductAbstract($idProductAbstract)
    {
        $this->idProductAbstracts[] = $idProductAbstract;
        $this->modifiedProperties[self::ID_PRODUCT_ABSTRACTS] = true;

        return $this;
    }

    /**
     * @module ProductGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductAbstracts()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_ABSTRACTS);

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
                case 'idProductGroup':
                case 'idProductAbstracts':
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
                case 'idProductGroup':
                case 'idProductAbstracts':
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
                case 'idProductGroup':
                case 'idProductAbstracts':
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
            'idProductGroup' => $this->idProductGroup,
            'idProductAbstracts' => $this->idProductAbstracts,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_group' => $this->idProductGroup,
            'id_product_abstracts' => $this->idProductAbstracts,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_group' => $this->idProductGroup instanceof AbstractTransfer ? $this->idProductGroup->toArray(true, false) : $this->idProductGroup,
            'id_product_abstracts' => $this->idProductAbstracts instanceof AbstractTransfer ? $this->idProductAbstracts->toArray(true, false) : $this->idProductAbstracts,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductGroup' => $this->idProductGroup instanceof AbstractTransfer ? $this->idProductGroup->toArray(true, true) : $this->idProductGroup,
            'idProductAbstracts' => $this->idProductAbstracts instanceof AbstractTransfer ? $this->idProductAbstracts->toArray(true, true) : $this->idProductAbstracts,
        ];
    }
}
