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
class SpyAclRuleEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_ACL_RULE = 'idAclRule';

    /**
     * @var string
     */
    public const FK_ACL_ROLE = 'fkAclRole';

    /**
     * @var string
     */
    public const BUNDLE = 'bundle';

    /**
     * @var string
     */
    public const CONTROLLER = 'controller';

    /**
     * @var string
     */
    public const ACTION = 'action';

    /**
     * @var string
     */
    public const TYPE = 'type';

    /**
     * @var string
     */
    public const ACL_ROLE = 'aclRole';

    /**
     * @var integer|null
     */
    protected $idAclRule;

    /**
     * @var integer|null
     */
    protected $fkAclRole;

    /**
     * @var string|null
     */
    protected $bundle;

    /**
     * @var string|null
     */
    protected $controller;

    /**
     * @var string|null
     */
    protected $action;

    /**
     * @var string|null
     */
    protected $type;

    /**
     * @var \Generated\Shared\Transfer\SpyAclRoleEntityTransfer|null
     */
    protected $aclRole;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_acl_rule' => 'idAclRule',
        'idAclRule' => 'idAclRule',
        'IdAclRule' => 'idAclRule',
        'fk_acl_role' => 'fkAclRole',
        'fkAclRole' => 'fkAclRole',
        'FkAclRole' => 'fkAclRole',
        'bundle' => 'bundle',
        'Bundle' => 'bundle',
        'controller' => 'controller',
        'Controller' => 'controller',
        'action' => 'action',
        'Action' => 'action',
        'type' => 'type',
        'Type' => 'type',
        'acl_role' => 'aclRole',
        'aclRole' => 'aclRole',
        'AclRole' => 'aclRole',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_ACL_RULE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_acl_rule',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_ACL_ROLE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_acl_role',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::BUNDLE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'bundle',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONTROLLER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'controller',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ACTION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'action',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ACL_ROLE => [
            'type' => 'Generated\Shared\Transfer\SpyAclRoleEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'acl_role',
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
    public static $entityNamespace = 'Orm\Zed\Acl\Persistence\SpyAclRule';


    /**
     * @module 
     *
     * @param integer|null $idAclRule
     *
     * @return $this
     */
    public function setIdAclRule($idAclRule)
    {
        $this->idAclRule = $idAclRule;
        $this->modifiedProperties[self::ID_ACL_RULE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdAclRule()
    {
        return $this->idAclRule;
    }

    /**
     * @module 
     *
     * @param integer|null $idAclRule
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdAclRuleOrFail($idAclRule)
    {
        if ($idAclRule === null) {
            $this->throwNullValueException(static::ID_ACL_RULE);
        }

        return $this->setIdAclRule($idAclRule);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdAclRuleOrFail()
    {
        if ($this->idAclRule === null) {
            $this->throwNullValueException(static::ID_ACL_RULE);
        }

        return $this->idAclRule;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdAclRule()
    {
        $this->assertPropertyIsSet(self::ID_ACL_RULE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkAclRole
     *
     * @return $this
     */
    public function setFkAclRole($fkAclRole)
    {
        $this->fkAclRole = $fkAclRole;
        $this->modifiedProperties[self::FK_ACL_ROLE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkAclRole()
    {
        return $this->fkAclRole;
    }

    /**
     * @module 
     *
     * @param integer|null $fkAclRole
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkAclRoleOrFail($fkAclRole)
    {
        if ($fkAclRole === null) {
            $this->throwNullValueException(static::FK_ACL_ROLE);
        }

        return $this->setFkAclRole($fkAclRole);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkAclRoleOrFail()
    {
        if ($this->fkAclRole === null) {
            $this->throwNullValueException(static::FK_ACL_ROLE);
        }

        return $this->fkAclRole;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkAclRole()
    {
        $this->assertPropertyIsSet(self::FK_ACL_ROLE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $bundle
     *
     * @return $this
     */
    public function setBundle($bundle)
    {
        $this->bundle = $bundle;
        $this->modifiedProperties[self::BUNDLE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getBundle()
    {
        return $this->bundle;
    }

    /**
     * @module 
     *
     * @param string|null $bundle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setBundleOrFail($bundle)
    {
        if ($bundle === null) {
            $this->throwNullValueException(static::BUNDLE);
        }

        return $this->setBundle($bundle);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getBundleOrFail()
    {
        if ($this->bundle === null) {
            $this->throwNullValueException(static::BUNDLE);
        }

        return $this->bundle;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireBundle()
    {
        $this->assertPropertyIsSet(self::BUNDLE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $controller
     *
     * @return $this
     */
    public function setController($controller)
    {
        $this->controller = $controller;
        $this->modifiedProperties[self::CONTROLLER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * @module 
     *
     * @param string|null $controller
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setControllerOrFail($controller)
    {
        if ($controller === null) {
            $this->throwNullValueException(static::CONTROLLER);
        }

        return $this->setController($controller);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getControllerOrFail()
    {
        if ($this->controller === null) {
            $this->throwNullValueException(static::CONTROLLER);
        }

        return $this->controller;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireController()
    {
        $this->assertPropertyIsSet(self::CONTROLLER);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $action
     *
     * @return $this
     */
    public function setAction($action)
    {
        $this->action = $action;
        $this->modifiedProperties[self::ACTION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @module 
     *
     * @param string|null $action
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setActionOrFail($action)
    {
        if ($action === null) {
            $this->throwNullValueException(static::ACTION);
        }

        return $this->setAction($action);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getActionOrFail()
    {
        if ($this->action === null) {
            $this->throwNullValueException(static::ACTION);
        }

        return $this->action;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAction()
    {
        $this->assertPropertyIsSet(self::ACTION);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        $this->modifiedProperties[self::TYPE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @module 
     *
     * @param string|null $type
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTypeOrFail($type)
    {
        if ($type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->setType($type);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTypeOrFail()
    {
        if ($this->type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->type;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireType()
    {
        $this->assertPropertyIsSet(self::TYPE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyAclRoleEntityTransfer|null $aclRole
     *
     * @return $this
     */
    public function setAclRole(SpyAclRoleEntityTransfer $aclRole = null)
    {
        $this->aclRole = $aclRole;
        $this->modifiedProperties[self::ACL_ROLE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyAclRoleEntityTransfer|null
     */
    public function getAclRole()
    {
        return $this->aclRole;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyAclRoleEntityTransfer $aclRole
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAclRoleOrFail(SpyAclRoleEntityTransfer $aclRole)
    {
        return $this->setAclRole($aclRole);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyAclRoleEntityTransfer
     */
    public function getAclRoleOrFail()
    {
        if ($this->aclRole === null) {
            $this->throwNullValueException(static::ACL_ROLE);
        }

        return $this->aclRole;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAclRole()
    {
        $this->assertPropertyIsSet(self::ACL_ROLE);

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
                case 'idAclRule':
                case 'fkAclRole':
                case 'bundle':
                case 'controller':
                case 'action':
                case 'type':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'aclRole':
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
                case 'idAclRule':
                case 'fkAclRole':
                case 'bundle':
                case 'controller':
                case 'action':
                case 'type':
                    $values[$arrayKey] = $value;

                    break;
                case 'aclRole':
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
                case 'idAclRule':
                case 'fkAclRole':
                case 'bundle':
                case 'controller':
                case 'action':
                case 'type':
                    $values[$arrayKey] = $value;

                    break;
                case 'aclRole':
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
            'idAclRule' => $this->idAclRule,
            'fkAclRole' => $this->fkAclRole,
            'bundle' => $this->bundle,
            'controller' => $this->controller,
            'action' => $this->action,
            'type' => $this->type,
            'aclRole' => $this->aclRole,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_acl_rule' => $this->idAclRule,
            'fk_acl_role' => $this->fkAclRole,
            'bundle' => $this->bundle,
            'controller' => $this->controller,
            'action' => $this->action,
            'type' => $this->type,
            'acl_role' => $this->aclRole,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_acl_rule' => $this->idAclRule instanceof AbstractTransfer ? $this->idAclRule->toArray(true, false) : $this->idAclRule,
            'fk_acl_role' => $this->fkAclRole instanceof AbstractTransfer ? $this->fkAclRole->toArray(true, false) : $this->fkAclRole,
            'bundle' => $this->bundle instanceof AbstractTransfer ? $this->bundle->toArray(true, false) : $this->bundle,
            'controller' => $this->controller instanceof AbstractTransfer ? $this->controller->toArray(true, false) : $this->controller,
            'action' => $this->action instanceof AbstractTransfer ? $this->action->toArray(true, false) : $this->action,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, false) : $this->type,
            'acl_role' => $this->aclRole instanceof AbstractTransfer ? $this->aclRole->toArray(true, false) : $this->aclRole,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idAclRule' => $this->idAclRule instanceof AbstractTransfer ? $this->idAclRule->toArray(true, true) : $this->idAclRule,
            'fkAclRole' => $this->fkAclRole instanceof AbstractTransfer ? $this->fkAclRole->toArray(true, true) : $this->fkAclRole,
            'bundle' => $this->bundle instanceof AbstractTransfer ? $this->bundle->toArray(true, true) : $this->bundle,
            'controller' => $this->controller instanceof AbstractTransfer ? $this->controller->toArray(true, true) : $this->controller,
            'action' => $this->action instanceof AbstractTransfer ? $this->action->toArray(true, true) : $this->action,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, true) : $this->type,
            'aclRole' => $this->aclRole instanceof AbstractTransfer ? $this->aclRole->toArray(true, true) : $this->aclRole,
        ];
    }
}
