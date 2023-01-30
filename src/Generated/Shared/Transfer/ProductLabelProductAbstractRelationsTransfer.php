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
class ProductLabelProductAbstractRelationsTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_LABEL = 'idProductLabel';

    /**
     * @var string
     */
    public const IDS_PRODUCT_ABSTRACT_TO_ASSIGN = 'idsProductAbstractToAssign';

    /**
     * @var string
     */
    public const IDS_PRODUCT_ABSTRACT_TO_DE_ASSIGN = 'idsProductAbstractToDeAssign';

    /**
     * @var int|null
     */
    protected $idProductLabel;

    /**
     * @var array
     */
    protected $idsProductAbstractToAssign = [];

    /**
     * @var array
     */
    protected $idsProductAbstractToDeAssign = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_label' => 'idProductLabel',
        'idProductLabel' => 'idProductLabel',
        'IdProductLabel' => 'idProductLabel',
        'ids_product_abstract_to_assign' => 'idsProductAbstractToAssign',
        'idsProductAbstractToAssign' => 'idsProductAbstractToAssign',
        'IdsProductAbstractToAssign' => 'idsProductAbstractToAssign',
        'ids_product_abstract_to_de_assign' => 'idsProductAbstractToDeAssign',
        'idsProductAbstractToDeAssign' => 'idsProductAbstractToDeAssign',
        'IdsProductAbstractToDeAssign' => 'idsProductAbstractToDeAssign',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_LABEL => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_label',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IDS_PRODUCT_ABSTRACT_TO_ASSIGN => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'ids_product_abstract_to_assign',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IDS_PRODUCT_ABSTRACT_TO_DE_ASSIGN => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'ids_product_abstract_to_de_assign',
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
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabel|ProductNew
     *
     * @param int|null $idProductLabel
     *
     * @return $this
     */
    public function setIdProductLabel($idProductLabel)
    {
        $this->idProductLabel = $idProductLabel;
        $this->modifiedProperties[self::ID_PRODUCT_LABEL] = true;

        return $this;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabel|ProductNew
     *
     * @return int|null
     */
    public function getIdProductLabel()
    {
        return $this->idProductLabel;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabel|ProductNew
     *
     * @param int|null $idProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductLabelOrFail($idProductLabel)
    {
        if ($idProductLabel === null) {
            $this->throwNullValueException(static::ID_PRODUCT_LABEL);
        }

        return $this->setIdProductLabel($idProductLabel);
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabel|ProductNew
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductLabelOrFail()
    {
        if ($this->idProductLabel === null) {
            $this->throwNullValueException(static::ID_PRODUCT_LABEL);
        }

        return $this->idProductLabel;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabel|ProductNew
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductLabel()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_LABEL);

        return $this;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabel|ProductNew
     *
     * @param array|null $idsProductAbstractToAssign
     *
     * @return $this
     */
    public function setIdsProductAbstractToAssign(array $idsProductAbstractToAssign = null)
    {
        if ($idsProductAbstractToAssign === null) {
            $idsProductAbstractToAssign = [];
        }

        $this->idsProductAbstractToAssign = $idsProductAbstractToAssign;
        $this->modifiedProperties[self::IDS_PRODUCT_ABSTRACT_TO_ASSIGN] = true;

        return $this;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabel|ProductNew
     *
     * @return array
     */
    public function getIdsProductAbstractToAssign()
    {
        return $this->idsProductAbstractToAssign;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabel|ProductNew
     *
     * @param mixed $idsProductAbstractToAssign
     *
     * @return $this
     */
    public function addIdsProductAbstractToAssign($idsProductAbstractToAssign)
    {
        $this->idsProductAbstractToAssign[] = $idsProductAbstractToAssign;
        $this->modifiedProperties[self::IDS_PRODUCT_ABSTRACT_TO_ASSIGN] = true;

        return $this;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabel|ProductNew
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdsProductAbstractToAssign()
    {
        $this->assertPropertyIsSet(self::IDS_PRODUCT_ABSTRACT_TO_ASSIGN);

        return $this;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabel|ProductNew
     *
     * @param array|null $idsProductAbstractToDeAssign
     *
     * @return $this
     */
    public function setIdsProductAbstractToDeAssign(array $idsProductAbstractToDeAssign = null)
    {
        if ($idsProductAbstractToDeAssign === null) {
            $idsProductAbstractToDeAssign = [];
        }

        $this->idsProductAbstractToDeAssign = $idsProductAbstractToDeAssign;
        $this->modifiedProperties[self::IDS_PRODUCT_ABSTRACT_TO_DE_ASSIGN] = true;

        return $this;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabel|ProductNew
     *
     * @return array
     */
    public function getIdsProductAbstractToDeAssign()
    {
        return $this->idsProductAbstractToDeAssign;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabel|ProductNew
     *
     * @param mixed $idsProductAbstractToDeAssign
     *
     * @return $this
     */
    public function addIdsProductAbstractToDeAssign($idsProductAbstractToDeAssign)
    {
        $this->idsProductAbstractToDeAssign[] = $idsProductAbstractToDeAssign;
        $this->modifiedProperties[self::IDS_PRODUCT_ABSTRACT_TO_DE_ASSIGN] = true;

        return $this;
    }

    /**
     * @module ProductAlternativeProductLabelConnector|ProductDiscontinuedProductLabelConnector|ProductLabelGui|ProductLabel|ProductNew
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdsProductAbstractToDeAssign()
    {
        $this->assertPropertyIsSet(self::IDS_PRODUCT_ABSTRACT_TO_DE_ASSIGN);

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
                case 'idProductLabel':
                case 'idsProductAbstractToAssign':
                case 'idsProductAbstractToDeAssign':
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
                case 'idProductLabel':
                case 'idsProductAbstractToAssign':
                case 'idsProductAbstractToDeAssign':
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
                case 'idProductLabel':
                case 'idsProductAbstractToAssign':
                case 'idsProductAbstractToDeAssign':
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
            'idProductLabel' => $this->idProductLabel,
            'idsProductAbstractToAssign' => $this->idsProductAbstractToAssign,
            'idsProductAbstractToDeAssign' => $this->idsProductAbstractToDeAssign,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_label' => $this->idProductLabel,
            'ids_product_abstract_to_assign' => $this->idsProductAbstractToAssign,
            'ids_product_abstract_to_de_assign' => $this->idsProductAbstractToDeAssign,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_label' => $this->idProductLabel instanceof AbstractTransfer ? $this->idProductLabel->toArray(true, false) : $this->idProductLabel,
            'ids_product_abstract_to_assign' => $this->idsProductAbstractToAssign instanceof AbstractTransfer ? $this->idsProductAbstractToAssign->toArray(true, false) : $this->idsProductAbstractToAssign,
            'ids_product_abstract_to_de_assign' => $this->idsProductAbstractToDeAssign instanceof AbstractTransfer ? $this->idsProductAbstractToDeAssign->toArray(true, false) : $this->idsProductAbstractToDeAssign,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductLabel' => $this->idProductLabel instanceof AbstractTransfer ? $this->idProductLabel->toArray(true, true) : $this->idProductLabel,
            'idsProductAbstractToAssign' => $this->idsProductAbstractToAssign instanceof AbstractTransfer ? $this->idsProductAbstractToAssign->toArray(true, true) : $this->idsProductAbstractToAssign,
            'idsProductAbstractToDeAssign' => $this->idsProductAbstractToDeAssign instanceof AbstractTransfer ? $this->idsProductAbstractToDeAssign->toArray(true, true) : $this->idsProductAbstractToDeAssign,
        ];
    }
}
