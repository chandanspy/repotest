<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyNavigationNodeEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_NAVIGATION_NODE = 'idNavigationNode';

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
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const NODE_KEY = 'nodeKey';

    /**
     * @var string
     */
    public const NODE_TYPE = 'nodeType';

    /**
     * @var string
     */
    public const POSITION = 'position';

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
    public const PARENT_NAVIGATION_NODE = 'parentNavigationNode';

    /**
     * @var string
     */
    public const SPY_NAVIGATION = 'spyNavigation';

    /**
     * @var string
     */
    public const SPY_NAVIGATION_NODES = 'spyNavigationNodes';

    /**
     * @var string
     */
    public const SPY_NAVIGATION_NODE_LOCALIZED_ATTRIBUTESS = 'spyNavigationNodeLocalizedAttributess';

    /**
     * @var integer|null
     */
    protected $idNavigationNode;

    /**
     * @var integer|null
     */
    protected $fkNavigation;

    /**
     * @var integer|null
     */
    protected $fkParentNavigationNode;

    /**
     * @var boolean|null
     */
    protected $isActive;

    /**
     * @var string|null
     */
    protected $nodeKey;

    /**
     * @var string|null
     */
    protected $nodeType;

    /**
     * @var integer|null
     */
    protected $position;

    /**
     * @var string|null
     */
    protected $validFrom;

    /**
     * @var string|null
     */
    protected $validTo;

    /**
     * @var \Generated\Shared\Transfer\SpyNavigationNodeEntityTransfer|null
     */
    protected $parentNavigationNode;

    /**
     * @var \Generated\Shared\Transfer\SpyNavigationEntityTransfer|null
     */
    protected $spyNavigation;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyNavigationNodeEntityTransfer[]
     */
    protected $spyNavigationNodes;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyNavigationNodeLocalizedAttributesEntityTransfer[]
     */
    protected $spyNavigationNodeLocalizedAttributess;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_navigation_node' => 'idNavigationNode',
        'idNavigationNode' => 'idNavigationNode',
        'IdNavigationNode' => 'idNavigationNode',
        'fk_navigation' => 'fkNavigation',
        'fkNavigation' => 'fkNavigation',
        'FkNavigation' => 'fkNavigation',
        'fk_parent_navigation_node' => 'fkParentNavigationNode',
        'fkParentNavigationNode' => 'fkParentNavigationNode',
        'FkParentNavigationNode' => 'fkParentNavigationNode',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'node_key' => 'nodeKey',
        'nodeKey' => 'nodeKey',
        'NodeKey' => 'nodeKey',
        'node_type' => 'nodeType',
        'nodeType' => 'nodeType',
        'NodeType' => 'nodeType',
        'position' => 'position',
        'Position' => 'position',
        'valid_from' => 'validFrom',
        'validFrom' => 'validFrom',
        'ValidFrom' => 'validFrom',
        'valid_to' => 'validTo',
        'validTo' => 'validTo',
        'ValidTo' => 'validTo',
        'parent_navigation_node' => 'parentNavigationNode',
        'parentNavigationNode' => 'parentNavigationNode',
        'ParentNavigationNode' => 'parentNavigationNode',
        'spy_navigation' => 'spyNavigation',
        'spyNavigation' => 'spyNavigation',
        'SpyNavigation' => 'spyNavigation',
        'spy_navigation_nodes' => 'spyNavigationNodes',
        'spyNavigationNodes' => 'spyNavigationNodes',
        'SpyNavigationNodes' => 'spyNavigationNodes',
        'spy_navigation_node_localized_attributess' => 'spyNavigationNodeLocalizedAttributess',
        'spyNavigationNodeLocalizedAttributess' => 'spyNavigationNodeLocalizedAttributess',
        'SpyNavigationNodeLocalizedAttributess' => 'spyNavigationNodeLocalizedAttributess',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_NAVIGATION_NODE => [
            'type' => 'integer',
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
        self::FK_NAVIGATION => [
            'type' => 'integer',
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
            'type' => 'integer',
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
        self::IS_ACTIVE => [
            'type' => 'boolean',
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
        self::NODE_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'node_key',
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
        self::POSITION => [
            'type' => 'integer',
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
        self::PARENT_NAVIGATION_NODE => [
            'type' => 'Generated\Shared\Transfer\SpyNavigationNodeEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'parent_navigation_node',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_NAVIGATION => [
            'type' => 'Generated\Shared\Transfer\SpyNavigationEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_navigation',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_NAVIGATION_NODES => [
            'type' => 'Generated\Shared\Transfer\SpyNavigationNodeEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_navigation_nodes',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_NAVIGATION_NODE_LOCALIZED_ATTRIBUTESS => [
            'type' => 'Generated\Shared\Transfer\SpyNavigationNodeLocalizedAttributesEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_navigation_node_localized_attributess',
            'is_collection' => true,
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
    public static $entityNamespace = 'Orm\Zed\Navigation\Persistence\SpyNavigationNode';


    /**
     * @module 
     *
     * @param integer|null $idNavigationNode
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
     * @module 
     *
     * @return integer|null
     */
    public function getIdNavigationNode()
    {
        return $this->idNavigationNode;
    }

    /**
     * @module 
     *
     * @param integer|null $idNavigationNode
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdNavigationNodeOrFail()
    {
        if ($this->idNavigationNode === null) {
            $this->throwNullValueException(static::ID_NAVIGATION_NODE);
        }

        return $this->idNavigationNode;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkNavigation
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
     * @module 
     *
     * @return integer|null
     */
    public function getFkNavigation()
    {
        return $this->fkNavigation;
    }

    /**
     * @module 
     *
     * @param integer|null $fkNavigation
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkNavigationOrFail()
    {
        if ($this->fkNavigation === null) {
            $this->throwNullValueException(static::FK_NAVIGATION);
        }

        return $this->fkNavigation;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param integer|null $fkParentNavigationNode
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
     * @module 
     *
     * @return integer|null
     */
    public function getFkParentNavigationNode()
    {
        return $this->fkParentNavigationNode;
    }

    /**
     * @module 
     *
     * @param integer|null $fkParentNavigationNode
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkParentNavigationNodeOrFail()
    {
        if ($this->fkParentNavigationNode === null) {
            $this->throwNullValueException(static::FK_PARENT_NAVIGATION_NODE);
        }

        return $this->fkParentNavigationNode;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param boolean|null $isActive
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
     * @module 
     *
     * @return boolean|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module 
     *
     * @param boolean|null $isActive
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsActiveOrFail()
    {
        if ($this->isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->isActive;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param string|null $nodeKey
     *
     * @return $this
     */
    public function setNodeKey($nodeKey)
    {
        $this->nodeKey = $nodeKey;
        $this->modifiedProperties[self::NODE_KEY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getNodeKey()
    {
        return $this->nodeKey;
    }

    /**
     * @module 
     *
     * @param string|null $nodeKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNodeKeyOrFail($nodeKey)
    {
        if ($nodeKey === null) {
            $this->throwNullValueException(static::NODE_KEY);
        }

        return $this->setNodeKey($nodeKey);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNodeKeyOrFail()
    {
        if ($this->nodeKey === null) {
            $this->throwNullValueException(static::NODE_KEY);
        }

        return $this->nodeKey;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNodeKey()
    {
        $this->assertPropertyIsSet(self::NODE_KEY);

        return $this;
    }

    /**
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getNodeType()
    {
        return $this->nodeType;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param integer|null $position
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
     * @module 
     *
     * @return integer|null
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @module 
     *
     * @param integer|null $position
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
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getPositionOrFail()
    {
        if ($this->position === null) {
            $this->throwNullValueException(static::POSITION);
        }

        return $this->position;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getValidTo()
    {
        return $this->validTo;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyNavigationNodeEntityTransfer|null $parentNavigationNode
     *
     * @return $this
     */
    public function setParentNavigationNode(SpyNavigationNodeEntityTransfer $parentNavigationNode = null)
    {
        $this->parentNavigationNode = $parentNavigationNode;
        $this->modifiedProperties[self::PARENT_NAVIGATION_NODE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyNavigationNodeEntityTransfer|null
     */
    public function getParentNavigationNode()
    {
        return $this->parentNavigationNode;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyNavigationNodeEntityTransfer $parentNavigationNode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setParentNavigationNodeOrFail(SpyNavigationNodeEntityTransfer $parentNavigationNode)
    {
        return $this->setParentNavigationNode($parentNavigationNode);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyNavigationNodeEntityTransfer
     */
    public function getParentNavigationNodeOrFail()
    {
        if ($this->parentNavigationNode === null) {
            $this->throwNullValueException(static::PARENT_NAVIGATION_NODE);
        }

        return $this->parentNavigationNode;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireParentNavigationNode()
    {
        $this->assertPropertyIsSet(self::PARENT_NAVIGATION_NODE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyNavigationEntityTransfer|null $spyNavigation
     *
     * @return $this
     */
    public function setSpyNavigation(SpyNavigationEntityTransfer $spyNavigation = null)
    {
        $this->spyNavigation = $spyNavigation;
        $this->modifiedProperties[self::SPY_NAVIGATION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyNavigationEntityTransfer|null
     */
    public function getSpyNavigation()
    {
        return $this->spyNavigation;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyNavigationEntityTransfer $spyNavigation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyNavigationOrFail(SpyNavigationEntityTransfer $spyNavigation)
    {
        return $this->setSpyNavigation($spyNavigation);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyNavigationEntityTransfer
     */
    public function getSpyNavigationOrFail()
    {
        if ($this->spyNavigation === null) {
            $this->throwNullValueException(static::SPY_NAVIGATION);
        }

        return $this->spyNavigation;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyNavigation()
    {
        $this->assertPropertyIsSet(self::SPY_NAVIGATION);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyNavigationNodeEntityTransfer[] $spyNavigationNodes
     *
     * @return $this
     */
    public function setSpyNavigationNodes(ArrayObject $spyNavigationNodes)
    {
        $this->spyNavigationNodes = $spyNavigationNodes;
        $this->modifiedProperties[self::SPY_NAVIGATION_NODES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyNavigationNodeEntityTransfer[]
     */
    public function getSpyNavigationNodes()
    {
        return $this->spyNavigationNodes;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyNavigationNodeEntityTransfer $spyNavigationNodes
     *
     * @return $this
     */
    public function addSpyNavigationNodes(SpyNavigationNodeEntityTransfer $spyNavigationNodes)
    {
        $this->spyNavigationNodes[] = $spyNavigationNodes;
        $this->modifiedProperties[self::SPY_NAVIGATION_NODES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyNavigationNodes()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_NAVIGATION_NODES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyNavigationNodeLocalizedAttributesEntityTransfer[] $spyNavigationNodeLocalizedAttributess
     *
     * @return $this
     */
    public function setSpyNavigationNodeLocalizedAttributess(ArrayObject $spyNavigationNodeLocalizedAttributess)
    {
        $this->spyNavigationNodeLocalizedAttributess = $spyNavigationNodeLocalizedAttributess;
        $this->modifiedProperties[self::SPY_NAVIGATION_NODE_LOCALIZED_ATTRIBUTESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyNavigationNodeLocalizedAttributesEntityTransfer[]
     */
    public function getSpyNavigationNodeLocalizedAttributess()
    {
        return $this->spyNavigationNodeLocalizedAttributess;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyNavigationNodeLocalizedAttributesEntityTransfer $spyNavigationNodeLocalizedAttributess
     *
     * @return $this
     */
    public function addSpyNavigationNodeLocalizedAttributess(SpyNavigationNodeLocalizedAttributesEntityTransfer $spyNavigationNodeLocalizedAttributess)
    {
        $this->spyNavigationNodeLocalizedAttributess[] = $spyNavigationNodeLocalizedAttributess;
        $this->modifiedProperties[self::SPY_NAVIGATION_NODE_LOCALIZED_ATTRIBUTESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyNavigationNodeLocalizedAttributess()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_NAVIGATION_NODE_LOCALIZED_ATTRIBUTESS);

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
                case 'idNavigationNode':
                case 'fkNavigation':
                case 'fkParentNavigationNode':
                case 'isActive':
                case 'nodeKey':
                case 'nodeType':
                case 'position':
                case 'validFrom':
                case 'validTo':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'parentNavigationNode':
                case 'spyNavigation':
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
                case 'spyNavigationNodes':
                case 'spyNavigationNodeLocalizedAttributess':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
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
                case 'idNavigationNode':
                case 'fkNavigation':
                case 'fkParentNavigationNode':
                case 'isActive':
                case 'nodeKey':
                case 'nodeType':
                case 'position':
                case 'validFrom':
                case 'validTo':
                    $values[$arrayKey] = $value;

                    break;
                case 'parentNavigationNode':
                case 'spyNavigation':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyNavigationNodes':
                case 'spyNavigationNodeLocalizedAttributess':
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
                case 'idNavigationNode':
                case 'fkNavigation':
                case 'fkParentNavigationNode':
                case 'isActive':
                case 'nodeKey':
                case 'nodeType':
                case 'position':
                case 'validFrom':
                case 'validTo':
                    $values[$arrayKey] = $value;

                    break;
                case 'parentNavigationNode':
                case 'spyNavigation':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyNavigationNodes':
                case 'spyNavigationNodeLocalizedAttributess':
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
        $this->spyNavigationNodes = $this->spyNavigationNodes ?: new ArrayObject();
        $this->spyNavigationNodeLocalizedAttributess = $this->spyNavigationNodeLocalizedAttributess ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idNavigationNode' => $this->idNavigationNode,
            'fkNavigation' => $this->fkNavigation,
            'fkParentNavigationNode' => $this->fkParentNavigationNode,
            'isActive' => $this->isActive,
            'nodeKey' => $this->nodeKey,
            'nodeType' => $this->nodeType,
            'position' => $this->position,
            'validFrom' => $this->validFrom,
            'validTo' => $this->validTo,
            'parentNavigationNode' => $this->parentNavigationNode,
            'spyNavigation' => $this->spyNavigation,
            'spyNavigationNodes' => $this->spyNavigationNodes,
            'spyNavigationNodeLocalizedAttributess' => $this->spyNavigationNodeLocalizedAttributess,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_navigation_node' => $this->idNavigationNode,
            'fk_navigation' => $this->fkNavigation,
            'fk_parent_navigation_node' => $this->fkParentNavigationNode,
            'is_active' => $this->isActive,
            'node_key' => $this->nodeKey,
            'node_type' => $this->nodeType,
            'position' => $this->position,
            'valid_from' => $this->validFrom,
            'valid_to' => $this->validTo,
            'parent_navigation_node' => $this->parentNavigationNode,
            'spy_navigation' => $this->spyNavigation,
            'spy_navigation_nodes' => $this->spyNavigationNodes,
            'spy_navigation_node_localized_attributess' => $this->spyNavigationNodeLocalizedAttributess,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_navigation_node' => $this->idNavigationNode instanceof AbstractTransfer ? $this->idNavigationNode->toArray(true, false) : $this->idNavigationNode,
            'fk_navigation' => $this->fkNavigation instanceof AbstractTransfer ? $this->fkNavigation->toArray(true, false) : $this->fkNavigation,
            'fk_parent_navigation_node' => $this->fkParentNavigationNode instanceof AbstractTransfer ? $this->fkParentNavigationNode->toArray(true, false) : $this->fkParentNavigationNode,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'node_key' => $this->nodeKey instanceof AbstractTransfer ? $this->nodeKey->toArray(true, false) : $this->nodeKey,
            'node_type' => $this->nodeType instanceof AbstractTransfer ? $this->nodeType->toArray(true, false) : $this->nodeType,
            'position' => $this->position instanceof AbstractTransfer ? $this->position->toArray(true, false) : $this->position,
            'valid_from' => $this->validFrom instanceof AbstractTransfer ? $this->validFrom->toArray(true, false) : $this->validFrom,
            'valid_to' => $this->validTo instanceof AbstractTransfer ? $this->validTo->toArray(true, false) : $this->validTo,
            'parent_navigation_node' => $this->parentNavigationNode instanceof AbstractTransfer ? $this->parentNavigationNode->toArray(true, false) : $this->parentNavigationNode,
            'spy_navigation' => $this->spyNavigation instanceof AbstractTransfer ? $this->spyNavigation->toArray(true, false) : $this->spyNavigation,
            'spy_navigation_nodes' => $this->spyNavigationNodes instanceof AbstractTransfer ? $this->spyNavigationNodes->toArray(true, false) : $this->addValuesToCollection($this->spyNavigationNodes, true, false),
            'spy_navigation_node_localized_attributess' => $this->spyNavigationNodeLocalizedAttributess instanceof AbstractTransfer ? $this->spyNavigationNodeLocalizedAttributess->toArray(true, false) : $this->addValuesToCollection($this->spyNavigationNodeLocalizedAttributess, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idNavigationNode' => $this->idNavigationNode instanceof AbstractTransfer ? $this->idNavigationNode->toArray(true, true) : $this->idNavigationNode,
            'fkNavigation' => $this->fkNavigation instanceof AbstractTransfer ? $this->fkNavigation->toArray(true, true) : $this->fkNavigation,
            'fkParentNavigationNode' => $this->fkParentNavigationNode instanceof AbstractTransfer ? $this->fkParentNavigationNode->toArray(true, true) : $this->fkParentNavigationNode,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'nodeKey' => $this->nodeKey instanceof AbstractTransfer ? $this->nodeKey->toArray(true, true) : $this->nodeKey,
            'nodeType' => $this->nodeType instanceof AbstractTransfer ? $this->nodeType->toArray(true, true) : $this->nodeType,
            'position' => $this->position instanceof AbstractTransfer ? $this->position->toArray(true, true) : $this->position,
            'validFrom' => $this->validFrom instanceof AbstractTransfer ? $this->validFrom->toArray(true, true) : $this->validFrom,
            'validTo' => $this->validTo instanceof AbstractTransfer ? $this->validTo->toArray(true, true) : $this->validTo,
            'parentNavigationNode' => $this->parentNavigationNode instanceof AbstractTransfer ? $this->parentNavigationNode->toArray(true, true) : $this->parentNavigationNode,
            'spyNavigation' => $this->spyNavigation instanceof AbstractTransfer ? $this->spyNavigation->toArray(true, true) : $this->spyNavigation,
            'spyNavigationNodes' => $this->spyNavigationNodes instanceof AbstractTransfer ? $this->spyNavigationNodes->toArray(true, true) : $this->addValuesToCollection($this->spyNavigationNodes, true, true),
            'spyNavigationNodeLocalizedAttributess' => $this->spyNavigationNodeLocalizedAttributess instanceof AbstractTransfer ? $this->spyNavigationNodeLocalizedAttributess->toArray(true, true) : $this->addValuesToCollection($this->spyNavigationNodeLocalizedAttributess, true, true),
        ];
    }
}
