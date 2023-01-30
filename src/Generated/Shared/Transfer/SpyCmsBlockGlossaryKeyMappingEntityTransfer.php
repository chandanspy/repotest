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
class SpyCmsBlockGlossaryKeyMappingEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_CMS_BLOCK_GLOSSARY_KEY_MAPPING = 'idCmsBlockGlossaryKeyMapping';

    /**
     * @var string
     */
    public const FK_CMS_BLOCK = 'fkCmsBlock';

    /**
     * @var string
     */
    public const FK_GLOSSARY_KEY = 'fkGlossaryKey';

    /**
     * @var string
     */
    public const PLACEHOLDER = 'placeholder';

    /**
     * @var string
     */
    public const CMS_BLOCK = 'cmsBlock';

    /**
     * @var string
     */
    public const GLOSSARY_KEY = 'glossaryKey';

    /**
     * @var integer|null
     */
    protected $idCmsBlockGlossaryKeyMapping;

    /**
     * @var integer|null
     */
    protected $fkCmsBlock;

    /**
     * @var integer|null
     */
    protected $fkGlossaryKey;

    /**
     * @var string|null
     */
    protected $placeholder;

    /**
     * @var \Generated\Shared\Transfer\SpyCmsBlockEntityTransfer|null
     */
    protected $cmsBlock;

    /**
     * @var \Generated\Shared\Transfer\SpyGlossaryKeyEntityTransfer|null
     */
    protected $glossaryKey;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_cms_block_glossary_key_mapping' => 'idCmsBlockGlossaryKeyMapping',
        'idCmsBlockGlossaryKeyMapping' => 'idCmsBlockGlossaryKeyMapping',
        'IdCmsBlockGlossaryKeyMapping' => 'idCmsBlockGlossaryKeyMapping',
        'fk_cms_block' => 'fkCmsBlock',
        'fkCmsBlock' => 'fkCmsBlock',
        'FkCmsBlock' => 'fkCmsBlock',
        'fk_glossary_key' => 'fkGlossaryKey',
        'fkGlossaryKey' => 'fkGlossaryKey',
        'FkGlossaryKey' => 'fkGlossaryKey',
        'placeholder' => 'placeholder',
        'Placeholder' => 'placeholder',
        'cms_block' => 'cmsBlock',
        'cmsBlock' => 'cmsBlock',
        'CmsBlock' => 'cmsBlock',
        'glossary_key' => 'glossaryKey',
        'glossaryKey' => 'glossaryKey',
        'GlossaryKey' => 'glossaryKey',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_CMS_BLOCK_GLOSSARY_KEY_MAPPING => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_cms_block_glossary_key_mapping',
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
        self::FK_GLOSSARY_KEY => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_glossary_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PLACEHOLDER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'placeholder',
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
        self::GLOSSARY_KEY => [
            'type' => 'Generated\Shared\Transfer\SpyGlossaryKeyEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'glossary_key',
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
    public static $entityNamespace = 'Orm\Zed\CmsBlock\Persistence\SpyCmsBlockGlossaryKeyMapping';


    /**
     * @module 
     *
     * @param integer|null $idCmsBlockGlossaryKeyMapping
     *
     * @return $this
     */
    public function setIdCmsBlockGlossaryKeyMapping($idCmsBlockGlossaryKeyMapping)
    {
        $this->idCmsBlockGlossaryKeyMapping = $idCmsBlockGlossaryKeyMapping;
        $this->modifiedProperties[self::ID_CMS_BLOCK_GLOSSARY_KEY_MAPPING] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdCmsBlockGlossaryKeyMapping()
    {
        return $this->idCmsBlockGlossaryKeyMapping;
    }

    /**
     * @module 
     *
     * @param integer|null $idCmsBlockGlossaryKeyMapping
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCmsBlockGlossaryKeyMappingOrFail($idCmsBlockGlossaryKeyMapping)
    {
        if ($idCmsBlockGlossaryKeyMapping === null) {
            $this->throwNullValueException(static::ID_CMS_BLOCK_GLOSSARY_KEY_MAPPING);
        }

        return $this->setIdCmsBlockGlossaryKeyMapping($idCmsBlockGlossaryKeyMapping);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdCmsBlockGlossaryKeyMappingOrFail()
    {
        if ($this->idCmsBlockGlossaryKeyMapping === null) {
            $this->throwNullValueException(static::ID_CMS_BLOCK_GLOSSARY_KEY_MAPPING);
        }

        return $this->idCmsBlockGlossaryKeyMapping;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCmsBlockGlossaryKeyMapping()
    {
        $this->assertPropertyIsSet(self::ID_CMS_BLOCK_GLOSSARY_KEY_MAPPING);

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
     * @param integer|null $fkGlossaryKey
     *
     * @return $this
     */
    public function setFkGlossaryKey($fkGlossaryKey)
    {
        $this->fkGlossaryKey = $fkGlossaryKey;
        $this->modifiedProperties[self::FK_GLOSSARY_KEY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkGlossaryKey()
    {
        return $this->fkGlossaryKey;
    }

    /**
     * @module 
     *
     * @param integer|null $fkGlossaryKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkGlossaryKeyOrFail($fkGlossaryKey)
    {
        if ($fkGlossaryKey === null) {
            $this->throwNullValueException(static::FK_GLOSSARY_KEY);
        }

        return $this->setFkGlossaryKey($fkGlossaryKey);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkGlossaryKeyOrFail()
    {
        if ($this->fkGlossaryKey === null) {
            $this->throwNullValueException(static::FK_GLOSSARY_KEY);
        }

        return $this->fkGlossaryKey;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkGlossaryKey()
    {
        $this->assertPropertyIsSet(self::FK_GLOSSARY_KEY);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $placeholder
     *
     * @return $this
     */
    public function setPlaceholder($placeholder)
    {
        $this->placeholder = $placeholder;
        $this->modifiedProperties[self::PLACEHOLDER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getPlaceholder()
    {
        return $this->placeholder;
    }

    /**
     * @module 
     *
     * @param string|null $placeholder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPlaceholderOrFail($placeholder)
    {
        if ($placeholder === null) {
            $this->throwNullValueException(static::PLACEHOLDER);
        }

        return $this->setPlaceholder($placeholder);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPlaceholderOrFail()
    {
        if ($this->placeholder === null) {
            $this->throwNullValueException(static::PLACEHOLDER);
        }

        return $this->placeholder;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePlaceholder()
    {
        $this->assertPropertyIsSet(self::PLACEHOLDER);

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
     * @param \Generated\Shared\Transfer\SpyGlossaryKeyEntityTransfer|null $glossaryKey
     *
     * @return $this
     */
    public function setGlossaryKey(SpyGlossaryKeyEntityTransfer $glossaryKey = null)
    {
        $this->glossaryKey = $glossaryKey;
        $this->modifiedProperties[self::GLOSSARY_KEY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyGlossaryKeyEntityTransfer|null
     */
    public function getGlossaryKey()
    {
        return $this->glossaryKey;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyGlossaryKeyEntityTransfer $glossaryKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setGlossaryKeyOrFail(SpyGlossaryKeyEntityTransfer $glossaryKey)
    {
        return $this->setGlossaryKey($glossaryKey);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyGlossaryKeyEntityTransfer
     */
    public function getGlossaryKeyOrFail()
    {
        if ($this->glossaryKey === null) {
            $this->throwNullValueException(static::GLOSSARY_KEY);
        }

        return $this->glossaryKey;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireGlossaryKey()
    {
        $this->assertPropertyIsSet(self::GLOSSARY_KEY);

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
                case 'idCmsBlockGlossaryKeyMapping':
                case 'fkCmsBlock':
                case 'fkGlossaryKey':
                case 'placeholder':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'cmsBlock':
                case 'glossaryKey':
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
                case 'idCmsBlockGlossaryKeyMapping':
                case 'fkCmsBlock':
                case 'fkGlossaryKey':
                case 'placeholder':
                    $values[$arrayKey] = $value;

                    break;
                case 'cmsBlock':
                case 'glossaryKey':
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
                case 'idCmsBlockGlossaryKeyMapping':
                case 'fkCmsBlock':
                case 'fkGlossaryKey':
                case 'placeholder':
                    $values[$arrayKey] = $value;

                    break;
                case 'cmsBlock':
                case 'glossaryKey':
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
            'idCmsBlockGlossaryKeyMapping' => $this->idCmsBlockGlossaryKeyMapping,
            'fkCmsBlock' => $this->fkCmsBlock,
            'fkGlossaryKey' => $this->fkGlossaryKey,
            'placeholder' => $this->placeholder,
            'cmsBlock' => $this->cmsBlock,
            'glossaryKey' => $this->glossaryKey,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_cms_block_glossary_key_mapping' => $this->idCmsBlockGlossaryKeyMapping,
            'fk_cms_block' => $this->fkCmsBlock,
            'fk_glossary_key' => $this->fkGlossaryKey,
            'placeholder' => $this->placeholder,
            'cms_block' => $this->cmsBlock,
            'glossary_key' => $this->glossaryKey,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_cms_block_glossary_key_mapping' => $this->idCmsBlockGlossaryKeyMapping instanceof AbstractTransfer ? $this->idCmsBlockGlossaryKeyMapping->toArray(true, false) : $this->idCmsBlockGlossaryKeyMapping,
            'fk_cms_block' => $this->fkCmsBlock instanceof AbstractTransfer ? $this->fkCmsBlock->toArray(true, false) : $this->fkCmsBlock,
            'fk_glossary_key' => $this->fkGlossaryKey instanceof AbstractTransfer ? $this->fkGlossaryKey->toArray(true, false) : $this->fkGlossaryKey,
            'placeholder' => $this->placeholder instanceof AbstractTransfer ? $this->placeholder->toArray(true, false) : $this->placeholder,
            'cms_block' => $this->cmsBlock instanceof AbstractTransfer ? $this->cmsBlock->toArray(true, false) : $this->cmsBlock,
            'glossary_key' => $this->glossaryKey instanceof AbstractTransfer ? $this->glossaryKey->toArray(true, false) : $this->glossaryKey,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCmsBlockGlossaryKeyMapping' => $this->idCmsBlockGlossaryKeyMapping instanceof AbstractTransfer ? $this->idCmsBlockGlossaryKeyMapping->toArray(true, true) : $this->idCmsBlockGlossaryKeyMapping,
            'fkCmsBlock' => $this->fkCmsBlock instanceof AbstractTransfer ? $this->fkCmsBlock->toArray(true, true) : $this->fkCmsBlock,
            'fkGlossaryKey' => $this->fkGlossaryKey instanceof AbstractTransfer ? $this->fkGlossaryKey->toArray(true, true) : $this->fkGlossaryKey,
            'placeholder' => $this->placeholder instanceof AbstractTransfer ? $this->placeholder->toArray(true, true) : $this->placeholder,
            'cmsBlock' => $this->cmsBlock instanceof AbstractTransfer ? $this->cmsBlock->toArray(true, true) : $this->cmsBlock,
            'glossaryKey' => $this->glossaryKey instanceof AbstractTransfer ? $this->glossaryKey->toArray(true, true) : $this->glossaryKey,
        ];
    }
}
