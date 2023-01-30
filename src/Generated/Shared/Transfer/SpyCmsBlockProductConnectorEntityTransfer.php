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
class SpyCmsBlockProductConnectorEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_CMS_BLOCK_PRODUCT_CONNECTOR = 'idCmsBlockProductConnector';

    /**
     * @var string
     */
    public const FK_CMS_BLOCK = 'fkCmsBlock';

    /**
     * @var string
     */
    public const FK_PRODUCT_ABSTRACT = 'fkProductAbstract';

    /**
     * @var string
     */
    public const CMS_BLOCK = 'cmsBlock';

    /**
     * @var string
     */
    public const PRODUCT_ABSTRACT = 'productAbstract';

    /**
     * @var integer|null
     */
    protected $idCmsBlockProductConnector;

    /**
     * @var integer|null
     */
    protected $fkCmsBlock;

    /**
     * @var integer|null
     */
    protected $fkProductAbstract;

    /**
     * @var \Generated\Shared\Transfer\SpyCmsBlockEntityTransfer|null
     */
    protected $cmsBlock;

    /**
     * @var \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer|null
     */
    protected $productAbstract;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_cms_block_product_connector' => 'idCmsBlockProductConnector',
        'idCmsBlockProductConnector' => 'idCmsBlockProductConnector',
        'IdCmsBlockProductConnector' => 'idCmsBlockProductConnector',
        'fk_cms_block' => 'fkCmsBlock',
        'fkCmsBlock' => 'fkCmsBlock',
        'FkCmsBlock' => 'fkCmsBlock',
        'fk_product_abstract' => 'fkProductAbstract',
        'fkProductAbstract' => 'fkProductAbstract',
        'FkProductAbstract' => 'fkProductAbstract',
        'cms_block' => 'cmsBlock',
        'cmsBlock' => 'cmsBlock',
        'CmsBlock' => 'cmsBlock',
        'product_abstract' => 'productAbstract',
        'productAbstract' => 'productAbstract',
        'ProductAbstract' => 'productAbstract',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_CMS_BLOCK_PRODUCT_CONNECTOR => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_cms_block_product_connector',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_CMS_BLOCK => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_cms_block',
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
        self::CMS_BLOCK => [
            'type' => 'Generated\Shared\Transfer\SpyCmsBlockEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'cms_block',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_ABSTRACT => [
            'type' => 'Generated\Shared\Transfer\SpyProductAbstractEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_abstract',
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
    public static $entityNamespace = 'Orm\Zed\CmsBlockProductConnector\Persistence\SpyCmsBlockProductConnector';


    /**
     * @module 
     *
     * @param integer|null $idCmsBlockProductConnector
     *
     * @return $this
     */
    public function setIdCmsBlockProductConnector($idCmsBlockProductConnector)
    {
        $this->idCmsBlockProductConnector = $idCmsBlockProductConnector;
        $this->modifiedProperties[self::ID_CMS_BLOCK_PRODUCT_CONNECTOR] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdCmsBlockProductConnector()
    {
        return $this->idCmsBlockProductConnector;
    }

    /**
     * @module 
     *
     * @param integer|null $idCmsBlockProductConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCmsBlockProductConnectorOrFail($idCmsBlockProductConnector)
    {
        if ($idCmsBlockProductConnector === null) {
            $this->throwNullValueException(static::ID_CMS_BLOCK_PRODUCT_CONNECTOR);
        }

        return $this->setIdCmsBlockProductConnector($idCmsBlockProductConnector);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdCmsBlockProductConnectorOrFail()
    {
        if ($this->idCmsBlockProductConnector === null) {
            $this->throwNullValueException(static::ID_CMS_BLOCK_PRODUCT_CONNECTOR);
        }

        return $this->idCmsBlockProductConnector;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCmsBlockProductConnector()
    {
        $this->assertPropertyIsSet(self::ID_CMS_BLOCK_PRODUCT_CONNECTOR);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCmsBlock
     *
     * @return $this
     */
    public function setFkCmsBlock($fkCmsBlock)
    {
        $this->fkCmsBlock = $fkCmsBlock;
        $this->modifiedProperties[self::FK_CMS_BLOCK] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkCmsBlock()
    {
        return $this->fkCmsBlock;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCmsBlock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCmsBlockOrFail($fkCmsBlock)
    {
        if ($fkCmsBlock === null) {
            $this->throwNullValueException(static::FK_CMS_BLOCK);
        }

        return $this->setFkCmsBlock($fkCmsBlock);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCmsBlockOrFail()
    {
        if ($this->fkCmsBlock === null) {
            $this->throwNullValueException(static::FK_CMS_BLOCK);
        }

        return $this->fkCmsBlock;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCmsBlock()
    {
        $this->assertPropertyIsSet(self::FK_CMS_BLOCK);

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
     * @param \Generated\Shared\Transfer\SpyCmsBlockEntityTransfer|null $cmsBlock
     *
     * @return $this
     */
    public function setCmsBlock(SpyCmsBlockEntityTransfer $cmsBlock = null)
    {
        $this->cmsBlock = $cmsBlock;
        $this->modifiedProperties[self::CMS_BLOCK] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCmsBlockEntityTransfer|null
     */
    public function getCmsBlock()
    {
        return $this->cmsBlock;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCmsBlockEntityTransfer $cmsBlock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCmsBlockOrFail(SpyCmsBlockEntityTransfer $cmsBlock)
    {
        return $this->setCmsBlock($cmsBlock);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCmsBlockEntityTransfer
     */
    public function getCmsBlockOrFail()
    {
        if ($this->cmsBlock === null) {
            $this->throwNullValueException(static::CMS_BLOCK);
        }

        return $this->cmsBlock;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCmsBlock()
    {
        $this->assertPropertyIsSet(self::CMS_BLOCK);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer|null $productAbstract
     *
     * @return $this
     */
    public function setProductAbstract(SpyProductAbstractEntityTransfer $productAbstract = null)
    {
        $this->productAbstract = $productAbstract;
        $this->modifiedProperties[self::PRODUCT_ABSTRACT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer|null
     */
    public function getProductAbstract()
    {
        return $this->productAbstract;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer $productAbstract
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductAbstractOrFail(SpyProductAbstractEntityTransfer $productAbstract)
    {
        return $this->setProductAbstract($productAbstract);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer
     */
    public function getProductAbstractOrFail()
    {
        if ($this->productAbstract === null) {
            $this->throwNullValueException(static::PRODUCT_ABSTRACT);
        }

        return $this->productAbstract;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductAbstract()
    {
        $this->assertPropertyIsSet(self::PRODUCT_ABSTRACT);

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
                case 'idCmsBlockProductConnector':
                case 'fkCmsBlock':
                case 'fkProductAbstract':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'cmsBlock':
                case 'productAbstract':
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
                case 'idCmsBlockProductConnector':
                case 'fkCmsBlock':
                case 'fkProductAbstract':
                    $values[$arrayKey] = $value;

                    break;
                case 'cmsBlock':
                case 'productAbstract':
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
                case 'idCmsBlockProductConnector':
                case 'fkCmsBlock':
                case 'fkProductAbstract':
                    $values[$arrayKey] = $value;

                    break;
                case 'cmsBlock':
                case 'productAbstract':
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
            'idCmsBlockProductConnector' => $this->idCmsBlockProductConnector,
            'fkCmsBlock' => $this->fkCmsBlock,
            'fkProductAbstract' => $this->fkProductAbstract,
            'cmsBlock' => $this->cmsBlock,
            'productAbstract' => $this->productAbstract,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_cms_block_product_connector' => $this->idCmsBlockProductConnector,
            'fk_cms_block' => $this->fkCmsBlock,
            'fk_product_abstract' => $this->fkProductAbstract,
            'cms_block' => $this->cmsBlock,
            'product_abstract' => $this->productAbstract,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_cms_block_product_connector' => $this->idCmsBlockProductConnector instanceof AbstractTransfer ? $this->idCmsBlockProductConnector->toArray(true, false) : $this->idCmsBlockProductConnector,
            'fk_cms_block' => $this->fkCmsBlock instanceof AbstractTransfer ? $this->fkCmsBlock->toArray(true, false) : $this->fkCmsBlock,
            'fk_product_abstract' => $this->fkProductAbstract instanceof AbstractTransfer ? $this->fkProductAbstract->toArray(true, false) : $this->fkProductAbstract,
            'cms_block' => $this->cmsBlock instanceof AbstractTransfer ? $this->cmsBlock->toArray(true, false) : $this->cmsBlock,
            'product_abstract' => $this->productAbstract instanceof AbstractTransfer ? $this->productAbstract->toArray(true, false) : $this->productAbstract,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCmsBlockProductConnector' => $this->idCmsBlockProductConnector instanceof AbstractTransfer ? $this->idCmsBlockProductConnector->toArray(true, true) : $this->idCmsBlockProductConnector,
            'fkCmsBlock' => $this->fkCmsBlock instanceof AbstractTransfer ? $this->fkCmsBlock->toArray(true, true) : $this->fkCmsBlock,
            'fkProductAbstract' => $this->fkProductAbstract instanceof AbstractTransfer ? $this->fkProductAbstract->toArray(true, true) : $this->fkProductAbstract,
            'cmsBlock' => $this->cmsBlock instanceof AbstractTransfer ? $this->cmsBlock->toArray(true, true) : $this->cmsBlock,
            'productAbstract' => $this->productAbstract instanceof AbstractTransfer ? $this->productAbstract->toArray(true, true) : $this->productAbstract,
        ];
    }
}
