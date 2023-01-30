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
class CmsGlossaryAttributesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const TEMPLATE_NAME = 'templateName';

    /**
     * @var string
     */
    public const PLACEHOLDER = 'placeholder';

    /**
     * @var string
     */
    public const SEARCH_OPTION = 'searchOption';

    /**
     * @var string
     */
    public const FK_PAGE = 'fkPage';

    /**
     * @var string
     */
    public const FK_CMS_GLOSSARY_MAPPING = 'fkCmsGlossaryMapping';

    /**
     * @var string
     */
    public const TRANSLATIONS = 'translations';

    /**
     * @var string
     */
    public const TRANSLATION_KEY = 'translationKey';

    /**
     * @var string
     */
    public const FK_GLOSSARY_KEY = 'fkGlossaryKey';

    /**
     * @var string|null
     */
    protected $templateName;

    /**
     * @var string|null
     */
    protected $placeholder;

    /**
     * @var string|null
     */
    protected $searchOption;

    /**
     * @var int|null
     */
    protected $fkPage;

    /**
     * @var int|null
     */
    protected $fkCmsGlossaryMapping;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\CmsPlaceholderTranslationTransfer[]
     */
    protected $translations;

    /**
     * @var string|null
     */
    protected $translationKey;

    /**
     * @var int|null
     */
    protected $fkGlossaryKey;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'template_name' => 'templateName',
        'templateName' => 'templateName',
        'TemplateName' => 'templateName',
        'placeholder' => 'placeholder',
        'Placeholder' => 'placeholder',
        'search_option' => 'searchOption',
        'searchOption' => 'searchOption',
        'SearchOption' => 'searchOption',
        'fk_page' => 'fkPage',
        'fkPage' => 'fkPage',
        'FkPage' => 'fkPage',
        'fk_cms_glossary_mapping' => 'fkCmsGlossaryMapping',
        'fkCmsGlossaryMapping' => 'fkCmsGlossaryMapping',
        'FkCmsGlossaryMapping' => 'fkCmsGlossaryMapping',
        'translations' => 'translations',
        'Translations' => 'translations',
        'translation_key' => 'translationKey',
        'translationKey' => 'translationKey',
        'TranslationKey' => 'translationKey',
        'fk_glossary_key' => 'fkGlossaryKey',
        'fkGlossaryKey' => 'fkGlossaryKey',
        'FkGlossaryKey' => 'fkGlossaryKey',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::SEARCH_OPTION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'search_option',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PAGE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_page',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_CMS_GLOSSARY_MAPPING => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_cms_glossary_mapping',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TRANSLATIONS => [
            'type' => 'Generated\Shared\Transfer\CmsPlaceholderTranslationTransfer',
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
    ];

    /**
     * @module CmsGui|Cms
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
     * @module CmsGui|Cms
     *
     * @return string|null
     */
    public function getTemplateName()
    {
        return $this->templateName;
    }

    /**
     * @module CmsGui|Cms
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
     * @module CmsGui|Cms
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
     * @module CmsGui|Cms
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
     * @module CmsGui|Cms
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
     * @module CmsGui|Cms
     *
     * @return string|null
     */
    public function getPlaceholder()
    {
        return $this->placeholder;
    }

    /**
     * @module CmsGui|Cms
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
     * @module CmsGui|Cms
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
     * @module CmsGui|Cms
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
     * @module CmsGui|Cms
     *
     * @param string|null $searchOption
     *
     * @return $this
     */
    public function setSearchOption($searchOption)
    {
        $this->searchOption = $searchOption;
        $this->modifiedProperties[self::SEARCH_OPTION] = true;

        return $this;
    }

    /**
     * @module CmsGui|Cms
     *
     * @return string|null
     */
    public function getSearchOption()
    {
        return $this->searchOption;
    }

    /**
     * @module CmsGui|Cms
     *
     * @param string|null $searchOption
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSearchOptionOrFail($searchOption)
    {
        if ($searchOption === null) {
            $this->throwNullValueException(static::SEARCH_OPTION);
        }

        return $this->setSearchOption($searchOption);
    }

    /**
     * @module CmsGui|Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSearchOptionOrFail()
    {
        if ($this->searchOption === null) {
            $this->throwNullValueException(static::SEARCH_OPTION);
        }

        return $this->searchOption;
    }

    /**
     * @module CmsGui|Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSearchOption()
    {
        $this->assertPropertyIsSet(self::SEARCH_OPTION);

        return $this;
    }

    /**
     * @module CmsGui|Cms
     *
     * @param int|null $fkPage
     *
     * @return $this
     */
    public function setFkPage($fkPage)
    {
        $this->fkPage = $fkPage;
        $this->modifiedProperties[self::FK_PAGE] = true;

        return $this;
    }

    /**
     * @module CmsGui|Cms
     *
     * @return int|null
     */
    public function getFkPage()
    {
        return $this->fkPage;
    }

    /**
     * @module CmsGui|Cms
     *
     * @param int|null $fkPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkPageOrFail($fkPage)
    {
        if ($fkPage === null) {
            $this->throwNullValueException(static::FK_PAGE);
        }

        return $this->setFkPage($fkPage);
    }

    /**
     * @module CmsGui|Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkPageOrFail()
    {
        if ($this->fkPage === null) {
            $this->throwNullValueException(static::FK_PAGE);
        }

        return $this->fkPage;
    }

    /**
     * @module CmsGui|Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkPage()
    {
        $this->assertPropertyIsSet(self::FK_PAGE);

        return $this;
    }

    /**
     * @module CmsGui|Cms
     *
     * @param int|null $fkCmsGlossaryMapping
     *
     * @return $this
     */
    public function setFkCmsGlossaryMapping($fkCmsGlossaryMapping)
    {
        $this->fkCmsGlossaryMapping = $fkCmsGlossaryMapping;
        $this->modifiedProperties[self::FK_CMS_GLOSSARY_MAPPING] = true;

        return $this;
    }

    /**
     * @module CmsGui|Cms
     *
     * @return int|null
     */
    public function getFkCmsGlossaryMapping()
    {
        return $this->fkCmsGlossaryMapping;
    }

    /**
     * @module CmsGui|Cms
     *
     * @param int|null $fkCmsGlossaryMapping
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCmsGlossaryMappingOrFail($fkCmsGlossaryMapping)
    {
        if ($fkCmsGlossaryMapping === null) {
            $this->throwNullValueException(static::FK_CMS_GLOSSARY_MAPPING);
        }

        return $this->setFkCmsGlossaryMapping($fkCmsGlossaryMapping);
    }

    /**
     * @module CmsGui|Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkCmsGlossaryMappingOrFail()
    {
        if ($this->fkCmsGlossaryMapping === null) {
            $this->throwNullValueException(static::FK_CMS_GLOSSARY_MAPPING);
        }

        return $this->fkCmsGlossaryMapping;
    }

    /**
     * @module CmsGui|Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCmsGlossaryMapping()
    {
        $this->assertPropertyIsSet(self::FK_CMS_GLOSSARY_MAPPING);

        return $this;
    }

    /**
     * @module CmsGui|Cms|ContentGui
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\CmsPlaceholderTranslationTransfer[] $translations
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
     * @module CmsGui|Cms|ContentGui
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\CmsPlaceholderTranslationTransfer[]
     */
    public function getTranslations()
    {
        return $this->translations;
    }

    /**
     * @module CmsGui|Cms|ContentGui
     *
     * @param \Generated\Shared\Transfer\CmsPlaceholderTranslationTransfer $translation
     *
     * @return $this
     */
    public function addTranslation(CmsPlaceholderTranslationTransfer $translation)
    {
        $this->translations[] = $translation;
        $this->modifiedProperties[self::TRANSLATIONS] = true;

        return $this;
    }

    /**
     * @module CmsGui|Cms|ContentGui
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
     * @module CmsGui|Cms
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
     * @module CmsGui|Cms
     *
     * @return string|null
     */
    public function getTranslationKey()
    {
        return $this->translationKey;
    }

    /**
     * @module CmsGui|Cms
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
     * @module CmsGui|Cms
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
     * @module CmsGui|Cms
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
     * @module CmsGui|Cms
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
     * @module CmsGui|Cms
     *
     * @return int|null
     */
    public function getFkGlossaryKey()
    {
        return $this->fkGlossaryKey;
    }

    /**
     * @module CmsGui|Cms
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
     * @module CmsGui|Cms
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
     * @module CmsGui|Cms
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
                case 'templateName':
                case 'placeholder':
                case 'searchOption':
                case 'fkPage':
                case 'fkCmsGlossaryMapping':
                case 'translationKey':
                case 'fkGlossaryKey':
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
                case 'templateName':
                case 'placeholder':
                case 'searchOption':
                case 'fkPage':
                case 'fkCmsGlossaryMapping':
                case 'translationKey':
                case 'fkGlossaryKey':
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
                case 'templateName':
                case 'placeholder':
                case 'searchOption':
                case 'fkPage':
                case 'fkCmsGlossaryMapping':
                case 'translationKey':
                case 'fkGlossaryKey':
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
            'templateName' => $this->templateName,
            'placeholder' => $this->placeholder,
            'searchOption' => $this->searchOption,
            'fkPage' => $this->fkPage,
            'fkCmsGlossaryMapping' => $this->fkCmsGlossaryMapping,
            'translationKey' => $this->translationKey,
            'fkGlossaryKey' => $this->fkGlossaryKey,
            'translations' => $this->translations,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'template_name' => $this->templateName,
            'placeholder' => $this->placeholder,
            'search_option' => $this->searchOption,
            'fk_page' => $this->fkPage,
            'fk_cms_glossary_mapping' => $this->fkCmsGlossaryMapping,
            'translation_key' => $this->translationKey,
            'fk_glossary_key' => $this->fkGlossaryKey,
            'translations' => $this->translations,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'template_name' => $this->templateName instanceof AbstractTransfer ? $this->templateName->toArray(true, false) : $this->templateName,
            'placeholder' => $this->placeholder instanceof AbstractTransfer ? $this->placeholder->toArray(true, false) : $this->placeholder,
            'search_option' => $this->searchOption instanceof AbstractTransfer ? $this->searchOption->toArray(true, false) : $this->searchOption,
            'fk_page' => $this->fkPage instanceof AbstractTransfer ? $this->fkPage->toArray(true, false) : $this->fkPage,
            'fk_cms_glossary_mapping' => $this->fkCmsGlossaryMapping instanceof AbstractTransfer ? $this->fkCmsGlossaryMapping->toArray(true, false) : $this->fkCmsGlossaryMapping,
            'translation_key' => $this->translationKey instanceof AbstractTransfer ? $this->translationKey->toArray(true, false) : $this->translationKey,
            'fk_glossary_key' => $this->fkGlossaryKey instanceof AbstractTransfer ? $this->fkGlossaryKey->toArray(true, false) : $this->fkGlossaryKey,
            'translations' => $this->translations instanceof AbstractTransfer ? $this->translations->toArray(true, false) : $this->addValuesToCollection($this->translations, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'templateName' => $this->templateName instanceof AbstractTransfer ? $this->templateName->toArray(true, true) : $this->templateName,
            'placeholder' => $this->placeholder instanceof AbstractTransfer ? $this->placeholder->toArray(true, true) : $this->placeholder,
            'searchOption' => $this->searchOption instanceof AbstractTransfer ? $this->searchOption->toArray(true, true) : $this->searchOption,
            'fkPage' => $this->fkPage instanceof AbstractTransfer ? $this->fkPage->toArray(true, true) : $this->fkPage,
            'fkCmsGlossaryMapping' => $this->fkCmsGlossaryMapping instanceof AbstractTransfer ? $this->fkCmsGlossaryMapping->toArray(true, true) : $this->fkCmsGlossaryMapping,
            'translationKey' => $this->translationKey instanceof AbstractTransfer ? $this->translationKey->toArray(true, true) : $this->translationKey,
            'fkGlossaryKey' => $this->fkGlossaryKey instanceof AbstractTransfer ? $this->fkGlossaryKey->toArray(true, true) : $this->fkGlossaryKey,
            'translations' => $this->translations instanceof AbstractTransfer ? $this->translations->toArray(true, true) : $this->addValuesToCollection($this->translations, true, true),
        ];
    }
}
