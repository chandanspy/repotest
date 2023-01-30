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
class CmsVersionDataTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const CMS_PAGE = 'cmsPage';

    /**
     * @var string
     */
    public const CMS_GLOSSARY = 'cmsGlossary';

    /**
     * @var string
     */
    public const CMS_TEMPLATE = 'cmsTemplate';

    /**
     * @var \Generated\Shared\Transfer\CmsPageTransfer|null
     */
    protected $cmsPage;

    /**
     * @var \Generated\Shared\Transfer\CmsGlossaryTransfer|null
     */
    protected $cmsGlossary;

    /**
     * @var \Generated\Shared\Transfer\CmsTemplateTransfer|null
     */
    protected $cmsTemplate;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'cms_page' => 'cmsPage',
        'cmsPage' => 'cmsPage',
        'CmsPage' => 'cmsPage',
        'cms_glossary' => 'cmsGlossary',
        'cmsGlossary' => 'cmsGlossary',
        'CmsGlossary' => 'cmsGlossary',
        'cms_template' => 'cmsTemplate',
        'cmsTemplate' => 'cmsTemplate',
        'CmsTemplate' => 'cmsTemplate',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::CMS_PAGE => [
            'type' => 'Generated\Shared\Transfer\CmsPageTransfer',
            'type_shim' => null,
            'name_underscore' => 'cms_page',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CMS_GLOSSARY => [
            'type' => 'Generated\Shared\Transfer\CmsGlossaryTransfer',
            'type_shim' => null,
            'name_underscore' => 'cms_glossary',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CMS_TEMPLATE => [
            'type' => 'Generated\Shared\Transfer\CmsTemplateTransfer',
            'type_shim' => null,
            'name_underscore' => 'cms_template',
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
     * @module CmsGui|Cms
     *
     * @param \Generated\Shared\Transfer\CmsPageTransfer|null $cmsPage
     *
     * @return $this
     */
    public function setCmsPage(CmsPageTransfer $cmsPage = null)
    {
        $this->cmsPage = $cmsPage;
        $this->modifiedProperties[self::CMS_PAGE] = true;

        return $this;
    }

    /**
     * @module CmsGui|Cms
     *
     * @return \Generated\Shared\Transfer\CmsPageTransfer|null
     */
    public function getCmsPage()
    {
        return $this->cmsPage;
    }

    /**
     * @module CmsGui|Cms
     *
     * @param \Generated\Shared\Transfer\CmsPageTransfer $cmsPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCmsPageOrFail(CmsPageTransfer $cmsPage)
    {
        return $this->setCmsPage($cmsPage);
    }

    /**
     * @module CmsGui|Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CmsPageTransfer
     */
    public function getCmsPageOrFail()
    {
        if ($this->cmsPage === null) {
            $this->throwNullValueException(static::CMS_PAGE);
        }

        return $this->cmsPage;
    }

    /**
     * @module CmsGui|Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCmsPage()
    {
        $this->assertPropertyIsSet(self::CMS_PAGE);

        return $this;
    }

    /**
     * @module CmsGui|Cms
     *
     * @param \Generated\Shared\Transfer\CmsGlossaryTransfer|null $cmsGlossary
     *
     * @return $this
     */
    public function setCmsGlossary(CmsGlossaryTransfer $cmsGlossary = null)
    {
        $this->cmsGlossary = $cmsGlossary;
        $this->modifiedProperties[self::CMS_GLOSSARY] = true;

        return $this;
    }

    /**
     * @module CmsGui|Cms
     *
     * @return \Generated\Shared\Transfer\CmsGlossaryTransfer|null
     */
    public function getCmsGlossary()
    {
        return $this->cmsGlossary;
    }

    /**
     * @module CmsGui|Cms
     *
     * @param \Generated\Shared\Transfer\CmsGlossaryTransfer $cmsGlossary
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCmsGlossaryOrFail(CmsGlossaryTransfer $cmsGlossary)
    {
        return $this->setCmsGlossary($cmsGlossary);
    }

    /**
     * @module CmsGui|Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CmsGlossaryTransfer
     */
    public function getCmsGlossaryOrFail()
    {
        if ($this->cmsGlossary === null) {
            $this->throwNullValueException(static::CMS_GLOSSARY);
        }

        return $this->cmsGlossary;
    }

    /**
     * @module CmsGui|Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCmsGlossary()
    {
        $this->assertPropertyIsSet(self::CMS_GLOSSARY);

        return $this;
    }

    /**
     * @module Cms
     *
     * @param \Generated\Shared\Transfer\CmsTemplateTransfer|null $cmsTemplate
     *
     * @return $this
     */
    public function setCmsTemplate(CmsTemplateTransfer $cmsTemplate = null)
    {
        $this->cmsTemplate = $cmsTemplate;
        $this->modifiedProperties[self::CMS_TEMPLATE] = true;

        return $this;
    }

    /**
     * @module Cms
     *
     * @return \Generated\Shared\Transfer\CmsTemplateTransfer|null
     */
    public function getCmsTemplate()
    {
        return $this->cmsTemplate;
    }

    /**
     * @module Cms
     *
     * @param \Generated\Shared\Transfer\CmsTemplateTransfer $cmsTemplate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCmsTemplateOrFail(CmsTemplateTransfer $cmsTemplate)
    {
        return $this->setCmsTemplate($cmsTemplate);
    }

    /**
     * @module Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CmsTemplateTransfer
     */
    public function getCmsTemplateOrFail()
    {
        if ($this->cmsTemplate === null) {
            $this->throwNullValueException(static::CMS_TEMPLATE);
        }

        return $this->cmsTemplate;
    }

    /**
     * @module Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCmsTemplate()
    {
        $this->assertPropertyIsSet(self::CMS_TEMPLATE);

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
                case 'cmsPage':
                case 'cmsGlossary':
                case 'cmsTemplate':
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
                case 'cmsPage':
                case 'cmsGlossary':
                case 'cmsTemplate':
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
                case 'cmsPage':
                case 'cmsGlossary':
                case 'cmsTemplate':
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
            'cmsPage' => $this->cmsPage,
            'cmsGlossary' => $this->cmsGlossary,
            'cmsTemplate' => $this->cmsTemplate,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'cms_page' => $this->cmsPage,
            'cms_glossary' => $this->cmsGlossary,
            'cms_template' => $this->cmsTemplate,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'cms_page' => $this->cmsPage instanceof AbstractTransfer ? $this->cmsPage->toArray(true, false) : $this->cmsPage,
            'cms_glossary' => $this->cmsGlossary instanceof AbstractTransfer ? $this->cmsGlossary->toArray(true, false) : $this->cmsGlossary,
            'cms_template' => $this->cmsTemplate instanceof AbstractTransfer ? $this->cmsTemplate->toArray(true, false) : $this->cmsTemplate,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'cmsPage' => $this->cmsPage instanceof AbstractTransfer ? $this->cmsPage->toArray(true, true) : $this->cmsPage,
            'cmsGlossary' => $this->cmsGlossary instanceof AbstractTransfer ? $this->cmsGlossary->toArray(true, true) : $this->cmsGlossary,
            'cmsTemplate' => $this->cmsTemplate instanceof AbstractTransfer ? $this->cmsTemplate->toArray(true, true) : $this->cmsTemplate,
        ];
    }
}
