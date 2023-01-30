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
class NavigationNodeTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const FK_NAVIGATION = 'fkNavigation';

    /**
     * @var string
     */
    public const FK_PARENT_NAVIGATION_NODE = 'fkParentNavigationNode';

    /**
     * @var string
     */
    public const NAVIGATION_NODE_LOCALIZED_ATTRIBUTES = 'navigationNodeLocalizedAttributes';

    /**
     * @var string
     */
    public const ID_NAVIGATION_NODE = 'idNavigationNode';

    /**
     * @var string
     */
    public const NODE_TYPE = 'nodeType';

    /**
     * @var string
     */
    public const VALID_FROM = 'validFrom';

    /**
     * @var string
     */
    public const VALID_TO = 'validTo';

    /**
     * @var string
     */
    public const POSITION = 'position';

    /**
     * @var bool|null
     */
    protected $isActive;

    /**
     * @var int|null
     */
    protected $fkNavigation;

    /**
     * @var int|null
     */
    protected $fkParentNavigationNode;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\NavigationNodeLocalizedAttributesTransfer[]
     */
    protected $navigationNodeLocalizedAttributes;

    /**
     * @var int|null
     */
    protected $idNavigationNode;

    /**
     * @var string|null
     */
    protected $nodeType;

    /**
     * @var string|null
     */
    protected $validFrom;

    /**
     * @var string|null
     */
    protected $validTo;

    /**
     * @var int|null
     */
    protected $position;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'fk_navigation' => 'fkNavigation',
        'fkNavigation' => 'fkNavigation',
        'FkNavigation' => 'fkNavigation',
        'fk_parent_navigation_node' => 'fkParentNavigationNode',
        'fkParentNavigationNode' => 'fkParentNavigationNode',
        'FkParentNavigationNode' => 'fkParentNavigationNode',
        'navigation_node_localized_attributes' => 'navigationNodeLocalizedAttributes',
        'navigationNodeLocalizedAttributes' => 'navigationNodeLocalizedAttributes',
        'NavigationNodeLocalizedAttributes' => 'navigationNodeLocalizedAttributes',
        'id_navigation_node' => 'idNavigationNode',
        'idNavigationNode' => 'idNavigationNode',
        'IdNavigationNode' => 'idNavigationNode',
        'node_type' => 'nodeType',
        'nodeType' => 'nodeType',
        'NodeType' => 'nodeType',
        'valid_from' => 'validFrom',
        'validFrom' => 'validFrom',
        'ValidFrom' => 'validFrom',
        'valid_to' => 'validTo',
        'validTo' => 'validTo',
        'ValidTo' => 'validTo',
        'position' => 'position',
        'Position' => 'position',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::IS_ACTIVE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_active',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_NAVIGATION => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_navigation',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PARENT_NAVIGATION_NODE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_parent_navigation_node',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NAVIGATION_NODE_LOCALIZED_ATTRIBUTES => [
            'type' => 'Generated\Shared\Transfer\NavigationNodeLocalizedAttributesTransfer',
            'type_shim' => null,
            'name_underscore' => 'navigation_node_localized_attributes',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_NAVIGATION_NODE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_navigation_node',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NODE_TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'node_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::VALID_FROM => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'valid_from',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::VALID_TO => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'valid_to',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::POSITION => [
            'type' => 'int',
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
    ];

    /**
     * @module CategoryNavigationConnector|CmsNavigationConnector|NavigationStorage|Navigation
     *
     * @param bool|null $isActive
     *
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        $this->modifiedProperties[self::IS_ACTIVE] = true;

        return $this;
    }

    /**
     * @module CategoryNavigationConnector|CmsNavigationConnector|NavigationStorage|Navigation
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module CategoryNavigationConnector|CmsNavigationConnector|NavigationStorage|Navigation
     *
     * @param bool|null $isActive
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsActiveOrFail($isActive)
    {
        if ($isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->setIsActive($isActive);
    }

    /**
     * @module CategoryNavigationConnector|CmsNavigationConnector|NavigationStorage|Navigation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsActiveOrFail()
    {
        if ($this->isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->isActive;
    }

    /**
     * @module CategoryNavigationConnector|CmsNavigationConnector|NavigationStorage|Navigation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsActive()
    {
        $this->assertPropertyIsSet(self::IS_ACTIVE);

        return $this;
    }

    /**
     * @module NavigationGui|Navigation
     *
     * @param int|null $fkNavigation
     *
     * @return $this
     */
    public function setFkNavigation($fkNavigation)
    {
        $this->fkNavigation = $fkNavigation;
        $this->modifiedProperties[self::FK_NAVIGATION] = true;

        return $this;
    }

    /**
     * @module NavigationGui|Navigation
     *
     * @return int|null
     */
    public function getFkNavigation()
    {
        return $this->fkNavigation;
    }

    /**
     * @module NavigationGui|Navigation
     *
     * @param int|null $fkNavigation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkNavigationOrFail($fkNavigation)
    {
        if ($fkNavigation === null) {
            $this->throwNullValueException(static::FK_NAVIGATION);
        }

        return $this->setFkNavigation($fkNavigation);
    }

    /**
     * @module NavigationGui|Navigation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkNavigationOrFail()
    {
        if ($this->fkNavigation === null) {
            $this->throwNullValueException(static::FK_NAVIGATION);
        }

        return $this->fkNavigation;
    }

    /**
     * @module NavigationGui|Navigation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkNavigation()
    {
        $this->assertPropertyIsSet(self::FK_NAVIGATION);

        return $this;
    }

    /**
     * @module NavigationGui|Navigation
     *
     * @param int|null $fkParentNavigationNode
     *
     * @return $this
     */
    public function setFkParentNavigationNode($fkParentNavigationNode)
    {
        $this->fkParentNavigationNode = $fkParentNavigationNode;
        $this->modifiedProperties[self::FK_PARENT_NAVIGATION_NODE] = true;

        return $this;
    }

    /**
     * @module NavigationGui|Navigation
     *
     * @return int|null
     */
    public function getFkParentNavigationNode()
    {
        return $this->fkParentNavigationNode;
    }

    /**
     * @module NavigationGui|Navigation
     *
     * @param int|null $fkParentNavigationNode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkParentNavigationNodeOrFail($fkParentNavigationNode)
    {
        if ($fkParentNavigationNode === null) {
            $this->throwNullValueException(static::FK_PARENT_NAVIGATION_NODE);
        }

        return $this->setFkParentNavigationNode($fkParentNavigationNode);
    }

    /**
     * @module NavigationGui|Navigation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkParentNavigationNodeOrFail()
    {
        if ($this->fkParentNavigationNode === null) {
            $this->throwNullValueException(static::FK_PARENT_NAVIGATION_NODE);
        }

        return $this->fkParentNavigationNode;
    }

    /**
     * @module NavigationGui|Navigation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkParentNavigationNode()
    {
        $this->assertPropertyIsSet(self::FK_PARENT_NAVIGATION_NODE);

        return $this;
    }

    /**
     * @module NavigationGui|NavigationStorage|Navigation
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\NavigationNodeLocalizedAttributesTransfer[] $navigationNodeLocalizedAttributes
     *
     * @return $this
     */
    public function setNavigationNodeLocalizedAttributes(ArrayObject $navigationNodeLocalizedAttributes)
    {
        $this->navigationNodeLocalizedAttributes = $navigationNodeLocalizedAttributes;
        $this->modifiedProperties[self::NAVIGATION_NODE_LOCALIZED_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module NavigationGui|NavigationStorage|Navigation
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\NavigationNodeLocalizedAttributesTransfer[]
     */
    public function getNavigationNodeLocalizedAttributes()
    {
        return $this->navigationNodeLocalizedAttributes;
    }

    /**
     * @module NavigationGui|NavigationStorage|Navigation
     *
     * @param \Generated\Shared\Transfer\NavigationNodeLocalizedAttributesTransfer $navigationNodeLocalizedAttribute
     *
     * @return $this
     */
    public function addNavigationNodeLocalizedAttribute(NavigationNodeLocalizedAttributesTransfer $navigationNodeLocalizedAttribute)
    {
        $this->navigationNodeLocalizedAttributes[] = $navigationNodeLocalizedAttribute;
        $this->modifiedProperties[self::NAVIGATION_NODE_LOCALIZED_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module NavigationGui|NavigationStorage|Navigation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNavigationNodeLocalizedAttributes()
    {
        $this->assertCollectionPropertyIsSet(self::NAVIGATION_NODE_LOCALIZED_ATTRIBUTES);

        return $this;
    }

    /**
     * @module NavigationGui|NavigationStorage|Navigation
     *
     * @param int|null $idNavigationNode
     *
     * @return $this
     */
    public function setIdNavigationNode($idNavigationNode)
    {
        $this->idNavigationNode = $idNavigationNode;
        $this->modifiedProperties[self::ID_NAVIGATION_NODE] = true;

        return $this;
    }

    /**
     * @module NavigationGui|NavigationStorage|Navigation
     *
     * @return int|null
     */
    public function getIdNavigationNode()
    {
        return $this->idNavigationNode;
    }

    /**
     * @module NavigationGui|NavigationStorage|Navigation
     *
     * @param int|null $idNavigationNode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdNavigationNodeOrFail($idNavigationNode)
    {
        if ($idNavigationNode === null) {
            $this->throwNullValueException(static::ID_NAVIGATION_NODE);
        }

        return $this->setIdNavigationNode($idNavigationNode);
    }

    /**
     * @module NavigationGui|NavigationStorage|Navigation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdNavigationNodeOrFail()
    {
        if ($this->idNavigationNode === null) {
            $this->throwNullValueException(static::ID_NAVIGATION_NODE);
        }

        return $this->idNavigationNode;
    }

    /**
     * @module NavigationGui|NavigationStorage|Navigation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdNavigationNode()
    {
        $this->assertPropertyIsSet(self::ID_NAVIGATION_NODE);

        return $this;
    }

    /**
     * @module NavigationGui|NavigationStorage|Navigation
     *
     * @param string|null $nodeType
     *
     * @return $this
     */
    public function setNodeType($nodeType)
    {
        $this->nodeType = $nodeType;
        $this->modifiedProperties[self::NODE_TYPE] = true;

        return $this;
    }

    /**
     * @module NavigationGui|NavigationStorage|Navigation
     *
     * @return string|null
     */
    public function getNodeType()
    {
        return $this->nodeType;
    }

    /**
     * @module NavigationGui|NavigationStorage|Navigation
     *
     * @param string|null $nodeType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNodeTypeOrFail($nodeType)
    {
        if ($nodeType === null) {
            $this->throwNullValueException(static::NODE_TYPE);
        }

        return $this->setNodeType($nodeType);
    }

    /**
     * @module NavigationGui|NavigationStorage|Navigation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNodeTypeOrFail()
    {
        if ($this->nodeType === null) {
            $this->throwNullValueException(static::NODE_TYPE);
        }

        return $this->nodeType;
    }

    /**
     * @module NavigationGui|NavigationStorage|Navigation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNodeType()
    {
        $this->assertPropertyIsSet(self::NODE_TYPE);

        return $this;
    }

    /**
     * @module NavigationStorage|Navigation
     *
     * @param string|null $validFrom
     *
     * @return $this
     */
    public function setValidFrom($validFrom)
    {
        $this->validFrom = $validFrom;
        $this->modifiedProperties[self::VALID_FROM] = true;

        return $this;
    }

    /**
     * @module NavigationStorage|Navigation
     *
     * @return string|null
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * @module NavigationStorage|Navigation
     *
     * @param string|null $validFrom
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setValidFromOrFail($validFrom)
    {
        if ($validFrom === null) {
            $this->throwNullValueException(static::VALID_FROM);
        }

        return $this->setValidFrom($validFrom);
    }

    /**
     * @module NavigationStorage|Navigation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getValidFromOrFail()
    {
        if ($this->validFrom === null) {
            $this->throwNullValueException(static::VALID_FROM);
        }

        return $this->validFrom;
    }

    /**
     * @module NavigationStorage|Navigation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireValidFrom()
    {
        $this->assertPropertyIsSet(self::VALID_FROM);

        return $this;
    }

    /**
     * @module NavigationStorage|Navigation
     *
     * @param string|null $validTo
     *
     * @return $this
     */
    public function setValidTo($validTo)
    {
        $this->validTo = $validTo;
        $this->modifiedProperties[self::VALID_TO] = true;

        return $this;
    }

    /**
     * @module NavigationStorage|Navigation
     *
     * @return string|null
     */
    public function getValidTo()
    {
        return $this->validTo;
    }

    /**
     * @module NavigationStorage|Navigation
     *
     * @param string|null $validTo
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setValidToOrFail($validTo)
    {
        if ($validTo === null) {
            $this->throwNullValueException(static::VALID_TO);
        }

        return $this->setValidTo($validTo);
    }

    /**
     * @module NavigationStorage|Navigation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getValidToOrFail()
    {
        if ($this->validTo === null) {
            $this->throwNullValueException(static::VALID_TO);
        }

        return $this->validTo;
    }

    /**
     * @module NavigationStorage|Navigation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireValidTo()
    {
        $this->assertPropertyIsSet(self::VALID_TO);

        return $this;
    }

    /**
     * @module Navigation
     *
     * @param int|null $position
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
     * @module Navigation
     *
     * @return int|null
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @module Navigation
     *
     * @param int|null $position
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
     * @module Navigation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getPositionOrFail()
    {
        if ($this->position === null) {
            $this->throwNullValueException(static::POSITION);
        }

        return $this->position;
    }

    /**
     * @module Navigation
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
                case 'isActive':
                case 'fkNavigation':
                case 'fkParentNavigationNode':
                case 'idNavigationNode':
                case 'nodeType':
                case 'validFrom':
                case 'validTo':
                case 'position':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'navigationNodeLocalizedAttributes':
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
                case 'isActive':
                case 'fkNavigation':
                case 'fkParentNavigationNode':
                case 'idNavigationNode':
                case 'nodeType':
                case 'validFrom':
                case 'validTo':
                case 'position':
                    $values[$arrayKey] = $value;

                    break;
                case 'navigationNodeLocalizedAttributes':
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
                case 'isActive':
                case 'fkNavigation':
                case 'fkParentNavigationNode':
                case 'idNavigationNode':
                case 'nodeType':
                case 'validFrom':
                case 'validTo':
                case 'position':
                    $values[$arrayKey] = $value;

                    break;
                case 'navigationNodeLocalizedAttributes':
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
        $this->navigationNodeLocalizedAttributes = $this->navigationNodeLocalizedAttributes ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'isActive' => $this->isActive,
            'fkNavigation' => $this->fkNavigation,
            'fkParentNavigationNode' => $this->fkParentNavigationNode,
            'idNavigationNode' => $this->idNavigationNode,
            'nodeType' => $this->nodeType,
            'validFrom' => $this->validFrom,
            'validTo' => $this->validTo,
            'position' => $this->position,
            'navigationNodeLocalizedAttributes' => $this->navigationNodeLocalizedAttributes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'is_active' => $this->isActive,
            'fk_navigation' => $this->fkNavigation,
            'fk_parent_navigation_node' => $this->fkParentNavigationNode,
            'id_navigation_node' => $this->idNavigationNode,
            'node_type' => $this->nodeType,
            'valid_from' => $this->validFrom,
            'valid_to' => $this->validTo,
            'position' => $this->position,
            'navigation_node_localized_attributes' => $this->navigationNodeLocalizedAttributes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'fk_navigation' => $this->fkNavigation instanceof AbstractTransfer ? $this->fkNavigation->toArray(true, false) : $this->fkNavigation,
            'fk_parent_navigation_node' => $this->fkParentNavigationNode instanceof AbstractTransfer ? $this->fkParentNavigationNode->toArray(true, false) : $this->fkParentNavigationNode,
            'id_navigation_node' => $this->idNavigationNode instanceof AbstractTransfer ? $this->idNavigationNode->toArray(true, false) : $this->idNavigationNode,
            'node_type' => $this->nodeType instanceof AbstractTransfer ? $this->nodeType->toArray(true, false) : $this->nodeType,
            'valid_from' => $this->validFrom instanceof AbstractTransfer ? $this->validFrom->toArray(true, false) : $this->validFrom,
            'valid_to' => $this->validTo instanceof AbstractTransfer ? $this->validTo->toArray(true, false) : $this->validTo,
            'position' => $this->position instanceof AbstractTransfer ? $this->position->toArray(true, false) : $this->position,
            'navigation_node_localized_attributes' => $this->navigationNodeLocalizedAttributes instanceof AbstractTransfer ? $this->navigationNodeLocalizedAttributes->toArray(true, false) : $this->addValuesToCollection($this->navigationNodeLocalizedAttributes, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'fkNavigation' => $this->fkNavigation instanceof AbstractTransfer ? $this->fkNavigation->toArray(true, true) : $this->fkNavigation,
            'fkParentNavigationNode' => $this->fkParentNavigationNode instanceof AbstractTransfer ? $this->fkParentNavigationNode->toArray(true, true) : $this->fkParentNavigationNode,
            'idNavigationNode' => $this->idNavigationNode instanceof AbstractTransfer ? $this->idNavigationNode->toArray(true, true) : $this->idNavigationNode,
            'nodeType' => $this->nodeType instanceof AbstractTransfer ? $this->nodeType->toArray(true, true) : $this->nodeType,
            'validFrom' => $this->validFrom instanceof AbstractTransfer ? $this->validFrom->toArray(true, true) : $this->validFrom,
            'validTo' => $this->validTo instanceof AbstractTransfer ? $this->validTo->toArray(true, true) : $this->validTo,
            'position' => $this->position instanceof AbstractTransfer ? $this->position->toArray(true, true) : $this->position,
            'navigationNodeLocalizedAttributes' => $this->navigationNodeLocalizedAttributes instanceof AbstractTransfer ? $this->navigationNodeLocalizedAttributes->toArray(true, true) : $this->addValuesToCollection($this->navigationNodeLocalizedAttributes, true, true),
        ];
    }
}
