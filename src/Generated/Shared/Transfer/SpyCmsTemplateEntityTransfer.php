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
class SpyCmsTemplateEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_CMS_TEMPLATE = 'idCmsTemplate';

    /**
     * @var string
     */
    public const TEMPLATE_NAME = 'templateName';

    /**
     * @var string
     */
    public const TEMPLATE_PATH = 'templatePath';

    /**
     * @var string
     */
    public const SPY_CMS_PAGES = 'spyCmsPages';

    /**
     * @var integer|null
     */
    protected $idCmsTemplate;

    /**
     * @var string|null
     */
    protected $templateName;

    /**
     * @var string|null
     */
    protected $templatePath;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCmsPageEntityTransfer[]
     */
    protected $spyCmsPages;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_cms_template' => 'idCmsTemplate',
        'idCmsTemplate' => 'idCmsTemplate',
        'IdCmsTemplate' => 'idCmsTemplate',
        'template_name' => 'templateName',
        'templateName' => 'templateName',
        'TemplateName' => 'templateName',
        'template_path' => 'templatePath',
        'templatePath' => 'templatePath',
        'TemplatePath' => 'templatePath',
        'spy_cms_pages' => 'spyCmsPages',
        'spyCmsPages' => 'spyCmsPages',
        'SpyCmsPages' => 'spyCmsPages',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_CMS_TEMPLATE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_cms_template',
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
        self::TEMPLATE_PATH => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'template_path',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_CMS_PAGES => [
            'type' => 'Generated\Shared\Transfer\SpyCmsPageEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_cms_pages',
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
    public static $entityNamespace = 'Orm\Zed\Cms\Persistence\SpyCmsTemplate';


    /**
     * @module 
     *
     * @param integer|null $idCmsTemplate
     *
     * @return $this
     */
    public function setIdCmsTemplate($idCmsTemplate)
    {
        $this->idCmsTemplate = $idCmsTemplate;
        $this->modifiedProperties[self::ID_CMS_TEMPLATE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdCmsTemplate()
    {
        return $this->idCmsTemplate;
    }

    /**
     * @module 
     *
     * @param integer|null $idCmsTemplate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCmsTemplateOrFail($idCmsTemplate)
    {
        if ($idCmsTemplate === null) {
            $this->throwNullValueException(static::ID_CMS_TEMPLATE);
        }

        return $this->setIdCmsTemplate($idCmsTemplate);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdCmsTemplateOrFail()
    {
        if ($this->idCmsTemplate === null) {
            $this->throwNullValueException(static::ID_CMS_TEMPLATE);
        }

        return $this->idCmsTemplate;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCmsTemplate()
    {
        $this->assertPropertyIsSet(self::ID_CMS_TEMPLATE);

        return $this;
    }

    /**
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getTemplateName()
    {
        return $this->templateName;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param string|null $templatePath
     *
     * @return $this
     */
    public function setTemplatePath($templatePath)
    {
        $this->templatePath = $templatePath;
        $this->modifiedProperties[self::TEMPLATE_PATH] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getTemplatePath()
    {
        return $this->templatePath;
    }

    /**
     * @module 
     *
     * @param string|null $templatePath
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTemplatePathOrFail($templatePath)
    {
        if ($templatePath === null) {
            $this->throwNullValueException(static::TEMPLATE_PATH);
        }

        return $this->setTemplatePath($templatePath);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTemplatePathOrFail()
    {
        if ($this->templatePath === null) {
            $this->throwNullValueException(static::TEMPLATE_PATH);
        }

        return $this->templatePath;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTemplatePath()
    {
        $this->assertPropertyIsSet(self::TEMPLATE_PATH);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCmsPageEntityTransfer[] $spyCmsPages
     *
     * @return $this
     */
    public function setSpyCmsPages(ArrayObject $spyCmsPages)
    {
        $this->spyCmsPages = $spyCmsPages;
        $this->modifiedProperties[self::SPY_CMS_PAGES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCmsPageEntityTransfer[]
     */
    public function getSpyCmsPages()
    {
        return $this->spyCmsPages;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCmsPageEntityTransfer $spyCmsPages
     *
     * @return $this
     */
    public function addSpyCmsPages(SpyCmsPageEntityTransfer $spyCmsPages)
    {
        $this->spyCmsPages[] = $spyCmsPages;
        $this->modifiedProperties[self::SPY_CMS_PAGES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCmsPages()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_CMS_PAGES);

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
                case 'idCmsTemplate':
                case 'templateName':
                case 'templatePath':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyCmsPages':
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
                case 'idCmsTemplate':
                case 'templateName':
                case 'templatePath':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyCmsPages':
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
                case 'idCmsTemplate':
                case 'templateName':
                case 'templatePath':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyCmsPages':
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
        $this->spyCmsPages = $this->spyCmsPages ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idCmsTemplate' => $this->idCmsTemplate,
            'templateName' => $this->templateName,
            'templatePath' => $this->templatePath,
            'spyCmsPages' => $this->spyCmsPages,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_cms_template' => $this->idCmsTemplate,
            'template_name' => $this->templateName,
            'template_path' => $this->templatePath,
            'spy_cms_pages' => $this->spyCmsPages,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_cms_template' => $this->idCmsTemplate instanceof AbstractTransfer ? $this->idCmsTemplate->toArray(true, false) : $this->idCmsTemplate,
            'template_name' => $this->templateName instanceof AbstractTransfer ? $this->templateName->toArray(true, false) : $this->templateName,
            'template_path' => $this->templatePath instanceof AbstractTransfer ? $this->templatePath->toArray(true, false) : $this->templatePath,
            'spy_cms_pages' => $this->spyCmsPages instanceof AbstractTransfer ? $this->spyCmsPages->toArray(true, false) : $this->addValuesToCollection($this->spyCmsPages, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCmsTemplate' => $this->idCmsTemplate instanceof AbstractTransfer ? $this->idCmsTemplate->toArray(true, true) : $this->idCmsTemplate,
            'templateName' => $this->templateName instanceof AbstractTransfer ? $this->templateName->toArray(true, true) : $this->templateName,
            'templatePath' => $this->templatePath instanceof AbstractTransfer ? $this->templatePath->toArray(true, true) : $this->templatePath,
            'spyCmsPages' => $this->spyCmsPages instanceof AbstractTransfer ? $this->spyCmsPages->toArray(true, true) : $this->addValuesToCollection($this->spyCmsPages, true, true),
        ];
    }
}
