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
class SpyCategoryNodeStorageEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_CATEGORY_NODE_STORAGE = 'idCategoryNodeStorage';

    /**
     * @var string
     */
    public const FK_CATEGORY_NODE = 'fkCategoryNode';

    /**
     * @var string|null
     */
    protected $idCategoryNodeStorage;

    /**
     * @var integer|null
     */
    protected $fkCategoryNode;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_category_node_storage' => 'idCategoryNodeStorage',
        'idCategoryNodeStorage' => 'idCategoryNodeStorage',
        'IdCategoryNodeStorage' => 'idCategoryNodeStorage',
        'fk_category_node' => 'fkCategoryNode',
        'fkCategoryNode' => 'fkCategoryNode',
        'FkCategoryNode' => 'fkCategoryNode',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_CATEGORY_NODE_STORAGE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'id_category_node_storage',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_CATEGORY_NODE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_category_node',
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
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\CategoryStorage\Persistence\SpyCategoryNodeStorage';


    /**
     * @module 
     *
     * @param string|null $idCategoryNodeStorage
     *
     * @return $this
     */
    public function setIdCategoryNodeStorage($idCategoryNodeStorage)
    {
        $this->idCategoryNodeStorage = $idCategoryNodeStorage;
        $this->modifiedProperties[self::ID_CATEGORY_NODE_STORAGE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getIdCategoryNodeStorage()
    {
        return $this->idCategoryNodeStorage;
    }

    /**
     * @module 
     *
     * @param string|null $idCategoryNodeStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCategoryNodeStorageOrFail($idCategoryNodeStorage)
    {
        if ($idCategoryNodeStorage === null) {
            $this->throwNullValueException(static::ID_CATEGORY_NODE_STORAGE);
        }

        return $this->setIdCategoryNodeStorage($idCategoryNodeStorage);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIdCategoryNodeStorageOrFail()
    {
        if ($this->idCategoryNodeStorage === null) {
            $this->throwNullValueException(static::ID_CATEGORY_NODE_STORAGE);
        }

        return $this->idCategoryNodeStorage;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCategoryNodeStorage()
    {
        $this->assertPropertyIsSet(self::ID_CATEGORY_NODE_STORAGE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCategoryNode
     *
     * @return $this
     */
    public function setFkCategoryNode($fkCategoryNode)
    {
        $this->fkCategoryNode = $fkCategoryNode;
        $this->modifiedProperties[self::FK_CATEGORY_NODE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkCategoryNode()
    {
        return $this->fkCategoryNode;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCategoryNode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCategoryNodeOrFail($fkCategoryNode)
    {
        if ($fkCategoryNode === null) {
            $this->throwNullValueException(static::FK_CATEGORY_NODE);
        }

        return $this->setFkCategoryNode($fkCategoryNode);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCategoryNodeOrFail()
    {
        if ($this->fkCategoryNode === null) {
            $this->throwNullValueException(static::FK_CATEGORY_NODE);
        }

        return $this->fkCategoryNode;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCategoryNode()
    {
        $this->assertPropertyIsSet(self::FK_CATEGORY_NODE);

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
                case 'idCategoryNodeStorage':
                case 'fkCategoryNode':
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
                case 'idCategoryNodeStorage':
                case 'fkCategoryNode':
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
                case 'idCategoryNodeStorage':
                case 'fkCategoryNode':
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
            'idCategoryNodeStorage' => $this->idCategoryNodeStorage,
            'fkCategoryNode' => $this->fkCategoryNode,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_category_node_storage' => $this->idCategoryNodeStorage,
            'fk_category_node' => $this->fkCategoryNode,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_category_node_storage' => $this->idCategoryNodeStorage instanceof AbstractTransfer ? $this->idCategoryNodeStorage->toArray(true, false) : $this->idCategoryNodeStorage,
            'fk_category_node' => $this->fkCategoryNode instanceof AbstractTransfer ? $this->fkCategoryNode->toArray(true, false) : $this->fkCategoryNode,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCategoryNodeStorage' => $this->idCategoryNodeStorage instanceof AbstractTransfer ? $this->idCategoryNodeStorage->toArray(true, true) : $this->idCategoryNodeStorage,
            'fkCategoryNode' => $this->fkCategoryNode instanceof AbstractTransfer ? $this->fkCategoryNode->toArray(true, true) : $this->fkCategoryNode,
        ];
    }
}
