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
class SpyCategoryClosureTableEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_CATEGORY_CLOSURE_TABLE = 'idCategoryClosureTable';

    /**
     * @var string
     */
    public const FK_CATEGORY_NODE = 'fkCategoryNode';

    /**
     * @var string
     */
    public const FK_CATEGORY_NODE_DESCENDANT = 'fkCategoryNodeDescendant';

    /**
     * @var string
     */
    public const DEPTH = 'depth';

    /**
     * @var string
     */
    public const NODE = 'node';

    /**
     * @var string
     */
    public const DESCENDANT_NODE = 'descendantNode';

    /**
     * @var integer|null
     */
    protected $idCategoryClosureTable;

    /**
     * @var integer|null
     */
    protected $fkCategoryNode;

    /**
     * @var integer|null
     */
    protected $fkCategoryNodeDescendant;

    /**
     * @var integer|null
     */
    protected $depth;

    /**
     * @var \Generated\Shared\Transfer\SpyCategoryNodeEntityTransfer|null
     */
    protected $node;

    /**
     * @var \Generated\Shared\Transfer\SpyCategoryNodeEntityTransfer|null
     */
    protected $descendantNode;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_category_closure_table' => 'idCategoryClosureTable',
        'idCategoryClosureTable' => 'idCategoryClosureTable',
        'IdCategoryClosureTable' => 'idCategoryClosureTable',
        'fk_category_node' => 'fkCategoryNode',
        'fkCategoryNode' => 'fkCategoryNode',
        'FkCategoryNode' => 'fkCategoryNode',
        'fk_category_node_descendant' => 'fkCategoryNodeDescendant',
        'fkCategoryNodeDescendant' => 'fkCategoryNodeDescendant',
        'FkCategoryNodeDescendant' => 'fkCategoryNodeDescendant',
        'depth' => 'depth',
        'Depth' => 'depth',
        'node' => 'node',
        'Node' => 'node',
        'descendant_node' => 'descendantNode',
        'descendantNode' => 'descendantNode',
        'DescendantNode' => 'descendantNode',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_CATEGORY_CLOSURE_TABLE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_category_closure_table',
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
        self::FK_CATEGORY_NODE_DESCENDANT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_category_node_descendant',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DEPTH => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'depth',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NODE => [
            'type' => 'Generated\Shared\Transfer\SpyCategoryNodeEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'node',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DESCENDANT_NODE => [
            'type' => 'Generated\Shared\Transfer\SpyCategoryNodeEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'descendant_node',
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
    public static $entityNamespace = 'Orm\Zed\Category\Persistence\SpyCategoryClosureTable';


    /**
     * @module 
     *
     * @param integer|null $idCategoryClosureTable
     *
     * @return $this
     */
    public function setIdCategoryClosureTable($idCategoryClosureTable)
    {
        $this->idCategoryClosureTable = $idCategoryClosureTable;
        $this->modifiedProperties[self::ID_CATEGORY_CLOSURE_TABLE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdCategoryClosureTable()
    {
        return $this->idCategoryClosureTable;
    }

    /**
     * @module 
     *
     * @param integer|null $idCategoryClosureTable
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCategoryClosureTableOrFail($idCategoryClosureTable)
    {
        if ($idCategoryClosureTable === null) {
            $this->throwNullValueException(static::ID_CATEGORY_CLOSURE_TABLE);
        }

        return $this->setIdCategoryClosureTable($idCategoryClosureTable);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdCategoryClosureTableOrFail()
    {
        if ($this->idCategoryClosureTable === null) {
            $this->throwNullValueException(static::ID_CATEGORY_CLOSURE_TABLE);
        }

        return $this->idCategoryClosureTable;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCategoryClosureTable()
    {
        $this->assertPropertyIsSet(self::ID_CATEGORY_CLOSURE_TABLE);

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
     * @module 
     *
     * @param integer|null $fkCategoryNodeDescendant
     *
     * @return $this
     */
    public function setFkCategoryNodeDescendant($fkCategoryNodeDescendant)
    {
        $this->fkCategoryNodeDescendant = $fkCategoryNodeDescendant;
        $this->modifiedProperties[self::FK_CATEGORY_NODE_DESCENDANT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkCategoryNodeDescendant()
    {
        return $this->fkCategoryNodeDescendant;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCategoryNodeDescendant
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCategoryNodeDescendantOrFail($fkCategoryNodeDescendant)
    {
        if ($fkCategoryNodeDescendant === null) {
            $this->throwNullValueException(static::FK_CATEGORY_NODE_DESCENDANT);
        }

        return $this->setFkCategoryNodeDescendant($fkCategoryNodeDescendant);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCategoryNodeDescendantOrFail()
    {
        if ($this->fkCategoryNodeDescendant === null) {
            $this->throwNullValueException(static::FK_CATEGORY_NODE_DESCENDANT);
        }

        return $this->fkCategoryNodeDescendant;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCategoryNodeDescendant()
    {
        $this->assertPropertyIsSet(self::FK_CATEGORY_NODE_DESCENDANT);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $depth
     *
     * @return $this
     */
    public function setDepth($depth)
    {
        $this->depth = $depth;
        $this->modifiedProperties[self::DEPTH] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * @module 
     *
     * @param integer|null $depth
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDepthOrFail($depth)
    {
        if ($depth === null) {
            $this->throwNullValueException(static::DEPTH);
        }

        return $this->setDepth($depth);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getDepthOrFail()
    {
        if ($this->depth === null) {
            $this->throwNullValueException(static::DEPTH);
        }

        return $this->depth;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDepth()
    {
        $this->assertPropertyIsSet(self::DEPTH);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCategoryNodeEntityTransfer|null $node
     *
     * @return $this
     */
    public function setNode(SpyCategoryNodeEntityTransfer $node = null)
    {
        $this->node = $node;
        $this->modifiedProperties[self::NODE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCategoryNodeEntityTransfer|null
     */
    public function getNode()
    {
        return $this->node;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCategoryNodeEntityTransfer $node
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNodeOrFail(SpyCategoryNodeEntityTransfer $node)
    {
        return $this->setNode($node);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCategoryNodeEntityTransfer
     */
    public function getNodeOrFail()
    {
        if ($this->node === null) {
            $this->throwNullValueException(static::NODE);
        }

        return $this->node;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNode()
    {
        $this->assertPropertyIsSet(self::NODE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCategoryNodeEntityTransfer|null $descendantNode
     *
     * @return $this
     */
    public function setDescendantNode(SpyCategoryNodeEntityTransfer $descendantNode = null)
    {
        $this->descendantNode = $descendantNode;
        $this->modifiedProperties[self::DESCENDANT_NODE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCategoryNodeEntityTransfer|null
     */
    public function getDescendantNode()
    {
        return $this->descendantNode;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCategoryNodeEntityTransfer $descendantNode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDescendantNodeOrFail(SpyCategoryNodeEntityTransfer $descendantNode)
    {
        return $this->setDescendantNode($descendantNode);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCategoryNodeEntityTransfer
     */
    public function getDescendantNodeOrFail()
    {
        if ($this->descendantNode === null) {
            $this->throwNullValueException(static::DESCENDANT_NODE);
        }

        return $this->descendantNode;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDescendantNode()
    {
        $this->assertPropertyIsSet(self::DESCENDANT_NODE);

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
                case 'idCategoryClosureTable':
                case 'fkCategoryNode':
                case 'fkCategoryNodeDescendant':
                case 'depth':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'node':
                case 'descendantNode':
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
                case 'idCategoryClosureTable':
                case 'fkCategoryNode':
                case 'fkCategoryNodeDescendant':
                case 'depth':
                    $values[$arrayKey] = $value;

                    break;
                case 'node':
                case 'descendantNode':
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
                case 'idCategoryClosureTable':
                case 'fkCategoryNode':
                case 'fkCategoryNodeDescendant':
                case 'depth':
                    $values[$arrayKey] = $value;

                    break;
                case 'node':
                case 'descendantNode':
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
            'idCategoryClosureTable' => $this->idCategoryClosureTable,
            'fkCategoryNode' => $this->fkCategoryNode,
            'fkCategoryNodeDescendant' => $this->fkCategoryNodeDescendant,
            'depth' => $this->depth,
            'node' => $this->node,
            'descendantNode' => $this->descendantNode,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_category_closure_table' => $this->idCategoryClosureTable,
            'fk_category_node' => $this->fkCategoryNode,
            'fk_category_node_descendant' => $this->fkCategoryNodeDescendant,
            'depth' => $this->depth,
            'node' => $this->node,
            'descendant_node' => $this->descendantNode,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_category_closure_table' => $this->idCategoryClosureTable instanceof AbstractTransfer ? $this->idCategoryClosureTable->toArray(true, false) : $this->idCategoryClosureTable,
            'fk_category_node' => $this->fkCategoryNode instanceof AbstractTransfer ? $this->fkCategoryNode->toArray(true, false) : $this->fkCategoryNode,
            'fk_category_node_descendant' => $this->fkCategoryNodeDescendant instanceof AbstractTransfer ? $this->fkCategoryNodeDescendant->toArray(true, false) : $this->fkCategoryNodeDescendant,
            'depth' => $this->depth instanceof AbstractTransfer ? $this->depth->toArray(true, false) : $this->depth,
            'node' => $this->node instanceof AbstractTransfer ? $this->node->toArray(true, false) : $this->node,
            'descendant_node' => $this->descendantNode instanceof AbstractTransfer ? $this->descendantNode->toArray(true, false) : $this->descendantNode,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCategoryClosureTable' => $this->idCategoryClosureTable instanceof AbstractTransfer ? $this->idCategoryClosureTable->toArray(true, true) : $this->idCategoryClosureTable,
            'fkCategoryNode' => $this->fkCategoryNode instanceof AbstractTransfer ? $this->fkCategoryNode->toArray(true, true) : $this->fkCategoryNode,
            'fkCategoryNodeDescendant' => $this->fkCategoryNodeDescendant instanceof AbstractTransfer ? $this->fkCategoryNodeDescendant->toArray(true, true) : $this->fkCategoryNodeDescendant,
            'depth' => $this->depth instanceof AbstractTransfer ? $this->depth->toArray(true, true) : $this->depth,
            'node' => $this->node instanceof AbstractTransfer ? $this->node->toArray(true, true) : $this->node,
            'descendantNode' => $this->descendantNode instanceof AbstractTransfer ? $this->descendantNode->toArray(true, true) : $this->descendantNode,
        ];
    }
}
