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
class SpyProductLabelProductAbstractEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_LABEL_PRODUCT_ABSTRACT = 'idProductLabelProductAbstract';

    /**
     * @var string
     */
    public const FK_PRODUCT_ABSTRACT = 'fkProductAbstract';

    /**
     * @var string
     */
    public const FK_PRODUCT_LABEL = 'fkProductLabel';

    /**
     * @var string
     */
    public const SPY_PRODUCT_LABEL = 'spyProductLabel';

    /**
     * @var string
     */
    public const SPY_PRODUCT_ABSTRACT = 'spyProductAbstract';

    /**
     * @var integer|null
     */
    protected $idProductLabelProductAbstract;

    /**
     * @var integer|null
     */
    protected $fkProductAbstract;

    /**
     * @var integer|null
     */
    protected $fkProductLabel;

    /**
     * @var \Generated\Shared\Transfer\SpyProductLabelEntityTransfer|null
     */
    protected $spyProductLabel;

    /**
     * @var \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer|null
     */
    protected $spyProductAbstract;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_label_product_abstract' => 'idProductLabelProductAbstract',
        'idProductLabelProductAbstract' => 'idProductLabelProductAbstract',
        'IdProductLabelProductAbstract' => 'idProductLabelProductAbstract',
        'fk_product_abstract' => 'fkProductAbstract',
        'fkProductAbstract' => 'fkProductAbstract',
        'FkProductAbstract' => 'fkProductAbstract',
        'fk_product_label' => 'fkProductLabel',
        'fkProductLabel' => 'fkProductLabel',
        'FkProductLabel' => 'fkProductLabel',
        'spy_product_label' => 'spyProductLabel',
        'spyProductLabel' => 'spyProductLabel',
        'SpyProductLabel' => 'spyProductLabel',
        'spy_product_abstract' => 'spyProductAbstract',
        'spyProductAbstract' => 'spyProductAbstract',
        'SpyProductAbstract' => 'spyProductAbstract',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_LABEL_PRODUCT_ABSTRACT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_product_label_product_abstract',
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
        self::FK_PRODUCT_LABEL => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_product_label',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_LABEL => [
            'type' => 'Generated\Shared\Transfer\SpyProductLabelEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_label',
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
    public static $entityNamespace = 'Orm\Zed\ProductLabel\Persistence\SpyProductLabelProductAbstract';


    /**
     * @module 
     *
     * @param integer|null $idProductLabelProductAbstract
     *
     * @return $this
     */
    public function setIdProductLabelProductAbstract($idProductLabelProductAbstract)
    {
        $this->idProductLabelProductAbstract = $idProductLabelProductAbstract;
        $this->modifiedProperties[self::ID_PRODUCT_LABEL_PRODUCT_ABSTRACT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdProductLabelProductAbstract()
    {
        return $this->idProductLabelProductAbstract;
    }

    /**
     * @module 
     *
     * @param integer|null $idProductLabelProductAbstract
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductLabelProductAbstractOrFail($idProductLabelProductAbstract)
    {
        if ($idProductLabelProductAbstract === null) {
            $this->throwNullValueException(static::ID_PRODUCT_LABEL_PRODUCT_ABSTRACT);
        }

        return $this->setIdProductLabelProductAbstract($idProductLabelProductAbstract);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdProductLabelProductAbstractOrFail()
    {
        if ($this->idProductLabelProductAbstract === null) {
            $this->throwNullValueException(static::ID_PRODUCT_LABEL_PRODUCT_ABSTRACT);
        }

        return $this->idProductLabelProductAbstract;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductLabelProductAbstract()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_LABEL_PRODUCT_ABSTRACT);

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
     * @param integer|null $fkProductLabel
     *
     * @return $this
     */
    public function setFkProductLabel($fkProductLabel)
    {
        $this->fkProductLabel = $fkProductLabel;
        $this->modifiedProperties[self::FK_PRODUCT_LABEL] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkProductLabel()
    {
        return $this->fkProductLabel;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkProductLabelOrFail($fkProductLabel)
    {
        if ($fkProductLabel === null) {
            $this->throwNullValueException(static::FK_PRODUCT_LABEL);
        }

        return $this->setFkProductLabel($fkProductLabel);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkProductLabelOrFail()
    {
        if ($this->fkProductLabel === null) {
            $this->throwNullValueException(static::FK_PRODUCT_LABEL);
        }

        return $this->fkProductLabel;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkProductLabel()
    {
        $this->assertPropertyIsSet(self::FK_PRODUCT_LABEL);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductLabelEntityTransfer|null $spyProductLabel
     *
     * @return $this
     */
    public function setSpyProductLabel(SpyProductLabelEntityTransfer $spyProductLabel = null)
    {
        $this->spyProductLabel = $spyProductLabel;
        $this->modifiedProperties[self::SPY_PRODUCT_LABEL] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyProductLabelEntityTransfer|null
     */
    public function getSpyProductLabel()
    {
        return $this->spyProductLabel;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductLabelEntityTransfer $spyProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyProductLabelOrFail(SpyProductLabelEntityTransfer $spyProductLabel)
    {
        return $this->setSpyProductLabel($spyProductLabel);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyProductLabelEntityTransfer
     */
    public function getSpyProductLabelOrFail()
    {
        if ($this->spyProductLabel === null) {
            $this->throwNullValueException(static::SPY_PRODUCT_LABEL);
        }

        return $this->spyProductLabel;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductLabel()
    {
        $this->assertPropertyIsSet(self::SPY_PRODUCT_LABEL);

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
                case 'idProductLabelProductAbstract':
                case 'fkProductAbstract':
                case 'fkProductLabel':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyProductLabel':
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
                case 'idProductLabelProductAbstract':
                case 'fkProductAbstract':
                case 'fkProductLabel':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyProductLabel':
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
                case 'idProductLabelProductAbstract':
                case 'fkProductAbstract':
                case 'fkProductLabel':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyProductLabel':
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
            'idProductLabelProductAbstract' => $this->idProductLabelProductAbstract,
            'fkProductAbstract' => $this->fkProductAbstract,
            'fkProductLabel' => $this->fkProductLabel,
            'spyProductLabel' => $this->spyProductLabel,
            'spyProductAbstract' => $this->spyProductAbstract,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_label_product_abstract' => $this->idProductLabelProductAbstract,
            'fk_product_abstract' => $this->fkProductAbstract,
            'fk_product_label' => $this->fkProductLabel,
            'spy_product_label' => $this->spyProductLabel,
            'spy_product_abstract' => $this->spyProductAbstract,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_label_product_abstract' => $this->idProductLabelProductAbstract instanceof AbstractTransfer ? $this->idProductLabelProductAbstract->toArray(true, false) : $this->idProductLabelProductAbstract,
            'fk_product_abstract' => $this->fkProductAbstract instanceof AbstractTransfer ? $this->fkProductAbstract->toArray(true, false) : $this->fkProductAbstract,
            'fk_product_label' => $this->fkProductLabel instanceof AbstractTransfer ? $this->fkProductLabel->toArray(true, false) : $this->fkProductLabel,
            'spy_product_label' => $this->spyProductLabel instanceof AbstractTransfer ? $this->spyProductLabel->toArray(true, false) : $this->spyProductLabel,
            'spy_product_abstract' => $this->spyProductAbstract instanceof AbstractTransfer ? $this->spyProductAbstract->toArray(true, false) : $this->spyProductAbstract,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductLabelProductAbstract' => $this->idProductLabelProductAbstract instanceof AbstractTransfer ? $this->idProductLabelProductAbstract->toArray(true, true) : $this->idProductLabelProductAbstract,
            'fkProductAbstract' => $this->fkProductAbstract instanceof AbstractTransfer ? $this->fkProductAbstract->toArray(true, true) : $this->fkProductAbstract,
            'fkProductLabel' => $this->fkProductLabel instanceof AbstractTransfer ? $this->fkProductLabel->toArray(true, true) : $this->fkProductLabel,
            'spyProductLabel' => $this->spyProductLabel instanceof AbstractTransfer ? $this->spyProductLabel->toArray(true, true) : $this->spyProductLabel,
            'spyProductAbstract' => $this->spyProductAbstract instanceof AbstractTransfer ? $this->spyProductAbstract->toArray(true, true) : $this->spyProductAbstract,
        ];
    }
}
