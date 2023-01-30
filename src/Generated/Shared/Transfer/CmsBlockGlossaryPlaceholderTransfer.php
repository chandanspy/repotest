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
class CmsBlockGlossaryPlaceholderTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PLACEHOLDER = 'placeholder';

    /**
     * @var string
     */
    public const TRANSLATION_KEY = 'translationKey';

    /**
     * @var string
     */
    public const ID_CMS_BLOCK_GLOSSARY_KEY_MAPPING = 'idCmsBlockGlossaryKeyMapping';

    /**
     * @var string
     */
    public const FK_GLOSSARY_KEY = 'fkGlossaryKey';

    /**
     * @var string
     */
    public const FK_CMS_BLOCK = 'fkCmsBlock';

    /**
     * @var string
     */
    public const TEMPLATE_NAME = 'templateName';

    /**
     * @var string
     */
    public const TRANSLATIONS = 'translations';

    /**
     * @var string|null
     */
    protected $placeholder;

    /**
     * @var string|null
     */
    protected $translationKey;

    /**
     * @var int|null
     */
    protected $idCmsBlockGlossaryKeyMapping;

    /**
     * @var int|null
     */
    protected $fkGlossaryKey;

    /**
     * @var int|null
     */
    protected $fkCmsBlock;

    /**
     * @var string|null
     */
    protected $templateName;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\CmsBlockGlossaryPlaceholderTranslationTransfer[]
     */
    protected $translations;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'placeholder' => 'placeholder',
        'Placeholder' => 'placeholder',
        'translation_key' => 'translationKey',
        'translationKey' => 'translationKey',
        'TranslationKey' => 'translationKey',
        'id_cms_block_glossary_key_mapping' => 'idCmsBlockGlossaryKeyMapping',
        'idCmsBlockGlossaryKeyMapping' => 'idCmsBlockGlossaryKeyMapping',
        'IdCmsBlockGlossaryKeyMapping' => 'idCmsBlockGlossaryKeyMapping',
        'fk_glossary_key' => 'fkGlossaryKey',
        'fkGlossaryKey' => 'fkGlossaryKey',
        'FkGlossaryKey' => 'fkGlossaryKey',
        'fk_cms_block' => 'fkCmsBlock',
        'fkCmsBlock' => 'fkCmsBlock',
        'FkCmsBlock' => 'fkCmsBlock',
        'template_name' => 'templateName',
        'templateName' => 'templateName',
        'TemplateName' => 'templateName',
        'translations' => 'translations',
        'Translations' => 'translations',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::TRANSLATION_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'translation_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_CMS_BLOCK_GLOSSARY_KEY_MAPPING => [
            'type' => 'int',
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
        self::FK_GLOSSARY_KEY => [
            'type' => 'int',
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
        self::FK_CMS_BLOCK => [
            'type' => 'int',
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
        self::TEMPLATE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'template_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TRANSLATIONS => [
            'type' => 'Generated\Shared\Transfer\CmsBlockGlossaryPlaceholderTranslationTransfer',
            'type_shim' => null,
            'name_underscore' => 'translations',
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
     * @module CmsBlockWidget|CmsBlock|CmsContentWidgetCmsBlockConnector
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
     * @module CmsBlockWidget|CmsBlock|CmsContentWidgetCmsBlockConnector
     *
     * @return string|null
     */
    public function getPlaceholder()
    {
        return $this->placeholder;
    }

    /**
     * @module CmsBlockWidget|CmsBlock|CmsContentWidgetCmsBlockConnector
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
     * @module CmsBlockWidget|CmsBlock|CmsContentWidgetCmsBlockConnector
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
     * @module CmsBlockWidget|CmsBlock|CmsContentWidgetCmsBlockConnector
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
     * @module CmsBlockWidget|CmsBlock|CmsContentWidgetCmsBlockConnector
     *
     * @param string|null $translationKey
     *
     * @return $this
     */
    public function setTranslationKey($translationKey)
    {
        $this->translationKey = $translationKey;
        $this->modifiedProperties[self::TRANSLATION_KEY] = true;

        return $this;
    }

    /**
     * @module CmsBlockWidget|CmsBlock|CmsContentWidgetCmsBlockConnector
     *
     * @return string|null
     */
    public function getTranslationKey()
    {
        return $this->translationKey;
    }

    /**
     * @module CmsBlockWidget|CmsBlock|CmsContentWidgetCmsBlockConnector
     *
     * @param string|null $translationKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTranslationKeyOrFail($translationKey)
    {
        if ($translationKey === null) {
            $this->throwNullValueException(static::TRANSLATION_KEY);
        }

        return $this->setTranslationKey($translationKey);
    }

    /**
     * @module CmsBlockWidget|CmsBlock|CmsContentWidgetCmsBlockConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTranslationKeyOrFail()
    {
        if ($this->translationKey === null) {
            $this->throwNullValueException(static::TRANSLATION_KEY);
        }

        return $this->translationKey;
    }

    /**
     * @module CmsBlockWidget|CmsBlock|CmsContentWidgetCmsBlockConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTranslationKey()
    {
        $this->assertPropertyIsSet(self::TRANSLATION_KEY);

        return $this;
    }

    /**
     * @module CmsBlock
     *
     * @param int|null $idCmsBlockGlossaryKeyMapping
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
     * @module CmsBlock
     *
     * @return int|null
     */
    public function getIdCmsBlockGlossaryKeyMapping()
    {
        return $this->idCmsBlockGlossaryKeyMapping;
    }

    /**
     * @module CmsBlock
     *
     * @param int|null $idCmsBlockGlossaryKeyMapping
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
     * @module CmsBlock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCmsBlockGlossaryKeyMappingOrFail()
    {
        if ($this->idCmsBlockGlossaryKeyMapping === null) {
            $this->throwNullValueException(static::ID_CMS_BLOCK_GLOSSARY_KEY_MAPPING);
        }

        return $this->idCmsBlockGlossaryKeyMapping;
    }

    /**
     * @module CmsBlock
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
     * @module CmsBlock
     *
     * @param int|null $fkGlossaryKey
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
     * @module CmsBlock
     *
     * @return int|null
     */
    public function getFkGlossaryKey()
    {
        return $this->fkGlossaryKey;
    }

    /**
     * @module CmsBlock
     *
     * @param int|null $fkGlossaryKey
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
     * @module CmsBlock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkGlossaryKeyOrFail()
    {
        if ($this->fkGlossaryKey === null) {
            $this->throwNullValueException(static::FK_GLOSSARY_KEY);
        }

        return $this->fkGlossaryKey;
    }

    /**
     * @module CmsBlock
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
     * @module CmsBlock
     *
     * @param int|null $fkCmsBlock
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
     * @module CmsBlock
     *
     * @return int|null
     */
    public function getFkCmsBlock()
    {
        return $this->fkCmsBlock;
    }

    /**
     * @module CmsBlock
     *
     * @param int|null $fkCmsBlock
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
     * @module CmsBlock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkCmsBlockOrFail()
    {
        if ($this->fkCmsBlock === null) {
            $this->throwNullValueException(static::FK_CMS_BLOCK);
        }

        return $this->fkCmsBlock;
    }

    /**
     * @module CmsBlock
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
     * @module CmsBlock
     *
     * @param string|null $templateName
     *
     * @return $this
     */
    public function setTemplateName($templateName)
    {
        $this->templateName = $templateName;
        $this->modifiedProperties[self::TEMPLATE_NAME] = true;

        return $this;
    }

    /**
     * @module CmsBlock
     *
     * @return string|null
     */
    public function getTemplateName()
    {
        return $this->templateName;
    }

    /**
     * @module CmsBlock
     *
     * @param string|null $templateName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTemplateNameOrFail($templateName)
    {
        if ($templateName === null) {
            $this->throwNullValueException(static::TEMPLATE_NAME);
        }

        return $this->setTemplateName($templateName);
    }

    /**
     * @module CmsBlock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTemplateNameOrFail()
    {
        if ($this->templateName === null) {
            $this->throwNullValueException(static::TEMPLATE_NAME);
        }

        return $this->templateName;
    }

    /**
     * @module CmsBlock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTemplateName()
    {
        $this->assertPropertyIsSet(self::TEMPLATE_NAME);

        return $this;
    }

    /**
     * @module CmsBlock|ContentGui
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\CmsBlockGlossaryPlaceholderTranslationTransfer[] $translations
     *
     * @return $this
     */
    public function setTranslations(ArrayObject $translations)
    {
        $this->translations = $translations;
        $this->modifiedProperties[self::TRANSLATIONS] = true;

        return $this;
    }

    /**
     * @module CmsBlock|ContentGui
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\CmsBlockGlossaryPlaceholderTranslationTransfer[]
     */
    public function getTranslations()
    {
        return $this->translations;
    }

    /**
     * @module CmsBlock|ContentGui
     *
     * @param \Generated\Shared\Transfer\CmsBlockGlossaryPlaceholderTranslationTransfer $translation
     *
     * @return $this
     */
    public function addTranslation(CmsBlockGlossaryPlaceholderTranslationTransfer $translation)
    {
        $this->translations[] = $translation;
        $this->modifiedProperties[self::TRANSLATIONS] = true;

        return $this;
    }

    /**
     * @module CmsBlock|ContentGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTranslations()
    {
        $this->assertCollectionPropertyIsSet(self::TRANSLATIONS);

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
                case 'placeholder':
                case 'translationKey':
                case 'idCmsBlockGlossaryKeyMapping':
                case 'fkGlossaryKey':
                case 'fkCmsBlock':
                case 'templateName':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'translations':
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
                case 'placeholder':
                case 'translationKey':
                case 'idCmsBlockGlossaryKeyMapping':
                case 'fkGlossaryKey':
                case 'fkCmsBlock':
                case 'templateName':
                    $values[$arrayKey] = $value;

                    break;
                case 'translations':
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
                case 'placeholder':
                case 'translationKey':
                case 'idCmsBlockGlossaryKeyMapping':
                case 'fkGlossaryKey':
                case 'fkCmsBlock':
                case 'templateName':
                    $values[$arrayKey] = $value;

                    break;
                case 'translations':
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
        $this->translations = $this->translations ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'placeholder' => $this->placeholder,
            'translationKey' => $this->translationKey,
            'idCmsBlockGlossaryKeyMapping' => $this->idCmsBlockGlossaryKeyMapping,
            'fkGlossaryKey' => $this->fkGlossaryKey,
            'fkCmsBlock' => $this->fkCmsBlock,
            'templateName' => $this->templateName,
            'translations' => $this->translations,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'placeholder' => $this->placeholder,
            'translation_key' => $this->translationKey,
            'id_cms_block_glossary_key_mapping' => $this->idCmsBlockGlossaryKeyMapping,
            'fk_glossary_key' => $this->fkGlossaryKey,
            'fk_cms_block' => $this->fkCmsBlock,
            'template_name' => $this->templateName,
            'translations' => $this->translations,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'placeholder' => $this->placeholder instanceof AbstractTransfer ? $this->placeholder->toArray(true, false) : $this->placeholder,
            'translation_key' => $this->translationKey instanceof AbstractTransfer ? $this->translationKey->toArray(true, false) : $this->translationKey,
            'id_cms_block_glossary_key_mapping' => $this->idCmsBlockGlossaryKeyMapping instanceof AbstractTransfer ? $this->idCmsBlockGlossaryKeyMapping->toArray(true, false) : $this->idCmsBlockGlossaryKeyMapping,
            'fk_glossary_key' => $this->fkGlossaryKey instanceof AbstractTransfer ? $this->fkGlossaryKey->toArray(true, false) : $this->fkGlossaryKey,
            'fk_cms_block' => $this->fkCmsBlock instanceof AbstractTransfer ? $this->fkCmsBlock->toArray(true, false) : $this->fkCmsBlock,
            'template_name' => $this->templateName instanceof AbstractTransfer ? $this->templateName->toArray(true, false) : $this->templateName,
            'translations' => $this->translations instanceof AbstractTransfer ? $this->translations->toArray(true, false) : $this->addValuesToCollection($this->translations, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'placeholder' => $this->placeholder instanceof AbstractTransfer ? $this->placeholder->toArray(true, true) : $this->placeholder,
            'translationKey' => $this->translationKey instanceof AbstractTransfer ? $this->translationKey->toArray(true, true) : $this->translationKey,
            'idCmsBlockGlossaryKeyMapping' => $this->idCmsBlockGlossaryKeyMapping instanceof AbstractTransfer ? $this->idCmsBlockGlossaryKeyMapping->toArray(true, true) : $this->idCmsBlockGlossaryKeyMapping,
            'fkGlossaryKey' => $this->fkGlossaryKey instanceof AbstractTransfer ? $this->fkGlossaryKey->toArray(true, true) : $this->fkGlossaryKey,
            'fkCmsBlock' => $this->fkCmsBlock instanceof AbstractTransfer ? $this->fkCmsBlock->toArray(true, true) : $this->fkCmsBlock,
            'templateName' => $this->templateName instanceof AbstractTransfer ? $this->templateName->toArray(true, true) : $this->templateName,
            'translations' => $this->translations instanceof AbstractTransfer ? $this->translations->toArray(true, true) : $this->addValuesToCollection($this->translations, true, true),
        ];
    }
}
