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
class SpyProductAbstractSetEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_ABSTRACT_SET = 'idProductAbstractSet';

    /**
     * @var string
     */
    public const FK_PRODUCT_ABSTRACT = 'fkProductAbstract';

    /**
     * @var string
     */
    public const FK_PRODUCT_SET = 'fkProductSet';

    /**
     * @var string
     */
    public const POSITION = 'position';

    /**
     * @var string
     */
    public const SPY_PRODUCT_SET = 'spyProductSet';

    /**
     * @var string
     */
    public const SPY_PRODUCT_ABSTRACT = 'spyProductAbstract';

    /**
     * @var integer|null
     */
    protected $idProductAbstractSet;

    /**
     * @var integer|null
     */
    protected $fkProductAbstract;

    /**
     * @var integer|null
     */
    protected $fkProductSet;

    /**
     * @var integer|null
     */
    protected $position;

    /**
     * @var \Generated\Shared\Transfer\SpyProductSetEntityTransfer|null
     */
    protected $spyProductSet;

    /**
     * @var \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer|null
     */
    protected $spyProductAbstract;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_abstract_set' => 'idProductAbstractSet',
        'idProductAbstractSet' => 'idProductAbstractSet',
        'IdProductAbstractSet' => 'idProductAbstractSet',
        'fk_product_abstract' => 'fkProductAbstract',
        'fkProductAbstract' => 'fkProductAbstract',
        'FkProductAbstract' => 'fkProductAbstract',
        'fk_product_set' => 'fkProductSet',
        'fkProductSet' => 'fkProductSet',
        'FkProductSet' => 'fkProductSet',
        'position' => 'position',
        'Position' => 'position',
        'spy_product_set' => 'spyProductSet',
        'spyProductSet' => 'spyProductSet',
        'SpyProductSet' => 'spyProductSet',
        'spy_product_abstract' => 'spyProductAbstract',
        'spyProductAbstract' => 'spyProductAbstract',
        'SpyProductAbstract' => 'spyProductAbstract',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_ABSTRACT_SET => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_product_abstract_set',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PRODUCT_ABSTRACT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_product_abstract',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PRODUCT_SET => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_product_set',
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
        self::SPY_PRODUCT_SET => [
            'type' => 'Generated\Shared\Transfer\SpyProductSetEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_set',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_ABSTRACT => [
            'type' => 'Generated\Shared\Transfer\SpyProductAbstractEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_abstract',
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
    public static $entityNamespace = 'Orm\Zed\ProductSet\Persistence\SpyProductAbstractSet';


    /**
     * @module 
     *
     * @param integer|null $idProductAbstractSet
     *
     * @return $this
     */
    public function setIdProductAbstractSet($idProductAbstractSet)
    {
        $this->idProductAbstractSet = $idProductAbstractSet;
        $this->modifiedProperties[self::ID_PRODUCT_ABSTRACT_SET] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdProductAbstractSet()
    {
        return $this->idProductAbstractSet;
    }

    /**
     * @module 
     *
     * @param integer|null $idProductAbstractSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductAbstractSetOrFail($idProductAbstractSet)
    {
        if ($idProductAbstractSet === null) {
            $this->throwNullValueException(static::ID_PRODUCT_ABSTRACT_SET);
        }

        return $this->setIdProductAbstractSet($idProductAbstractSet);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdProductAbstractSetOrFail()
    {
        if ($this->idProductAbstractSet === null) {
            $this->throwNullValueException(static::ID_PRODUCT_ABSTRACT_SET);
        }

        return $this->idProductAbstractSet;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductAbstractSet()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_ABSTRACT_SET);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductAbstract
     *
     * @return $this
     */
    public function setFkProductAbstract($fkProductAbstract)
    {
        $this->fkProductAbstract = $fkProductAbstract;
        $this->modifiedProperties[self::FK_PRODUCT_ABSTRACT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkProductAbstract()
    {
        return $this->fkProductAbstract;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductAbstract
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkProductAbstractOrFail($fkProductAbstract)
    {
        if ($fkProductAbstract === null) {
            $this->throwNullValueException(static::FK_PRODUCT_ABSTRACT);
        }

        return $this->setFkProductAbstract($fkProductAbstract);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkProductAbstractOrFail()
    {
        if ($this->fkProductAbstract === null) {
            $this->throwNullValueException(static::FK_PRODUCT_ABSTRACT);
        }

        return $this->fkProductAbstract;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkProductAbstract()
    {
        $this->assertPropertyIsSet(self::FK_PRODUCT_ABSTRACT);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductSet
     *
     * @return $this
     */
    public function setFkProductSet($fkProductSet)
    {
        $this->fkProductSet = $fkProductSet;
        $this->modifiedProperties[self::FK_PRODUCT_SET] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkProductSet()
    {
        return $this->fkProductSet;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkProductSetOrFail($fkProductSet)
    {
        if ($fkProductSet === null) {
            $this->throwNullValueException(static::FK_PRODUCT_SET);
        }

        return $this->setFkProductSet($fkProductSet);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkProductSetOrFail()
    {
        if ($this->fkProductSet === null) {
            $this->throwNullValueException(static::FK_PRODUCT_SET);
        }

        return $this->fkProductSet;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkProductSet()
    {
        $this->assertPropertyIsSet(self::FK_PRODUCT_SET);

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
     * @param \Generated\Shared\Transfer\SpyProductSetEntityTransfer|null $spyProductSet
     *
     * @return $this
     */
    public function setSpyProductSet(SpyProductSetEntityTransfer $spyProductSet = null)
    {
        $this->spyProductSet = $spyProductSet;
        $this->modifiedProperties[self::SPY_PRODUCT_SET] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyProductSetEntityTransfer|null
     */
    public function getSpyProductSet()
    {
        return $this->spyProductSet;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductSetEntityTransfer $spyProductSet
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyProductSetOrFail(SpyProductSetEntityTransfer $spyProductSet)
    {
        return $this->setSpyProductSet($spyProductSet);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyProductSetEntityTransfer
     */
    public function getSpyProductSetOrFail()
    {
        if ($this->spyProductSet === null) {
            $this->throwNullValueException(static::SPY_PRODUCT_SET);
        }

        return $this->spyProductSet;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductSet()
    {
        $this->assertPropertyIsSet(self::SPY_PRODUCT_SET);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer|null $spyProductAbstract
     *
     * @return $this
     */
    public function setSpyProductAbstract(SpyProductAbstractEntityTransfer $spyProductAbstract = null)
    {
        $this->spyProductAbstract = $spyProductAbstract;
        $this->modifiedProperties[self::SPY_PRODUCT_ABSTRACT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer|null
     */
    public function getSpyProductAbstract()
    {
        return $this->spyProductAbstract;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer $spyProductAbstract
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyProductAbstractOrFail(SpyProductAbstractEntityTransfer $spyProductAbstract)
    {
        return $this->setSpyProductAbstract($spyProductAbstract);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer
     */
    public function getSpyProductAbstractOrFail()
    {
        if ($this->spyProductAbstract === null) {
            $this->throwNullValueException(static::SPY_PRODUCT_ABSTRACT);
        }

        return $this->spyProductAbstract;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductAbstract()
    {
        $this->assertPropertyIsSet(self::SPY_PRODUCT_ABSTRACT);

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
                case 'idProductAbstractSet':
                case 'fkProductAbstract':
                case 'fkProductSet':
                case 'position':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyProductSet':
                case 'spyProductAbstract':
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
                case 'idProductAbstractSet':
                case 'fkProductAbstract':
                case 'fkProductSet':
                case 'position':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyProductSet':
                case 'spyProductAbstract':
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
                case 'idProductAbstractSet':
                case 'fkProductAbstract':
                case 'fkProductSet':
                case 'position':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyProductSet':
                case 'spyProductAbstract':
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
            'idProductAbstractSet' => $this->idProductAbstractSet,
            'fkProductAbstract' => $this->fkProductAbstract,
            'fkProductSet' => $this->fkProductSet,
            'position' => $this->position,
            'spyProductSet' => $this->spyProductSet,
            'spyProductAbstract' => $this->spyProductAbstract,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_abstract_set' => $this->idProductAbstractSet,
            'fk_product_abstract' => $this->fkProductAbstract,
            'fk_product_set' => $this->fkProductSet,
            'position' => $this->position,
            'spy_product_set' => $this->spyProductSet,
            'spy_product_abstract' => $this->spyProductAbstract,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_abstract_set' => $this->idProductAbstractSet instanceof AbstractTransfer ? $this->idProductAbstractSet->toArray(true, false) : $this->idProductAbstractSet,
            'fk_product_abstract' => $this->fkProductAbstract instanceof AbstractTransfer ? $this->fkProductAbstract->toArray(true, false) : $this->fkProductAbstract,
            'fk_product_set' => $this->fkProductSet instanceof AbstractTransfer ? $this->fkProductSet->toArray(true, false) : $this->fkProductSet,
            'position' => $this->position instanceof AbstractTransfer ? $this->position->toArray(true, false) : $this->position,
            'spy_product_set' => $this->spyProductSet instanceof AbstractTransfer ? $this->spyProductSet->toArray(true, false) : $this->spyProductSet,
            'spy_product_abstract' => $this->spyProductAbstract instanceof AbstractTransfer ? $this->spyProductAbstract->toArray(true, false) : $this->spyProductAbstract,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductAbstractSet' => $this->idProductAbstractSet instanceof AbstractTransfer ? $this->idProductAbstractSet->toArray(true, true) : $this->idProductAbstractSet,
            'fkProductAbstract' => $this->fkProductAbstract instanceof AbstractTransfer ? $this->fkProductAbstract->toArray(true, true) : $this->fkProductAbstract,
            'fkProductSet' => $this->fkProductSet instanceof AbstractTransfer ? $this->fkProductSet->toArray(true, true) : $this->fkProductSet,
            'position' => $this->position instanceof AbstractTransfer ? $this->position->toArray(true, true) : $this->position,
            'spyProductSet' => $this->spyProductSet instanceof AbstractTransfer ? $this->spyProductSet->toArray(true, true) : $this->spyProductSet,
            'spyProductAbstract' => $this->spyProductAbstract instanceof AbstractTransfer ? $this->spyProductAbstract->toArray(true, true) : $this->spyProductAbstract,
        ];
    }
}
