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
class CmsBlockTemplateTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const TEMPLATE_PATH = 'templatePath';

    /**
     * @var string
     */
    public const ID_CMS_BLOCK_TEMPLATE = 'idCmsBlockTemplate';

    /**
     * @var string
     */
    public const TEMPLATE_NAME = 'templateName';

    /**
     * @var string|null
     */
    protected $templatePath;

    /**
     * @var int|null
     */
    protected $idCmsBlockTemplate;

    /**
     * @var string|null
     */
    protected $templateName;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'template_path' => 'templatePath',
        'templatePath' => 'templatePath',
        'TemplatePath' => 'templatePath',
        'id_cms_block_template' => 'idCmsBlockTemplate',
        'idCmsBlockTemplate' => 'idCmsBlockTemplate',
        'IdCmsBlockTemplate' => 'idCmsBlockTemplate',
        'template_name' => 'templateName',
        'templateName' => 'templateName',
        'TemplateName' => 'templateName',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::ID_CMS_BLOCK_TEMPLATE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_cms_block_template',
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
    ];

    /**
     * @module CmsBlockWidget|CmsBlock|CmsContentWidgetCmsBlockConnector
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
     * @module CmsBlockWidget|CmsBlock|CmsContentWidgetCmsBlockConnector
     *
     * @return string|null
     */
    public function getTemplatePath()
    {
        return $this->templatePath;
    }

    /**
     * @module CmsBlockWidget|CmsBlock|CmsContentWidgetCmsBlockConnector
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
     * @module CmsBlockWidget|CmsBlock|CmsContentWidgetCmsBlockConnector
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
     * @module CmsBlockWidget|CmsBlock|CmsContentWidgetCmsBlockConnector
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
     * @module CmsBlock
     *
     * @param int|null $idCmsBlockTemplate
     *
     * @return $this
     */
    public function setIdCmsBlockTemplate($idCmsBlockTemplate)
    {
        $this->idCmsBlockTemplate = $idCmsBlockTemplate;
        $this->modifiedProperties[self::ID_CMS_BLOCK_TEMPLATE] = true;

        return $this;
    }

    /**
     * @module CmsBlock
     *
     * @return int|null
     */
    public function getIdCmsBlockTemplate()
    {
        return $this->idCmsBlockTemplate;
    }

    /**
     * @module CmsBlock
     *
     * @param int|null $idCmsBlockTemplate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCmsBlockTemplateOrFail($idCmsBlockTemplate)
    {
        if ($idCmsBlockTemplate === null) {
            $this->throwNullValueException(static::ID_CMS_BLOCK_TEMPLATE);
        }

        return $this->setIdCmsBlockTemplate($idCmsBlockTemplate);
    }

    /**
     * @module CmsBlock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCmsBlockTemplateOrFail()
    {
        if ($this->idCmsBlockTemplate === null) {
            $this->throwNullValueException(static::ID_CMS_BLOCK_TEMPLATE);
        }

        return $this->idCmsBlockTemplate;
    }

    /**
     * @module CmsBlock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCmsBlockTemplate()
    {
        $this->assertPropertyIsSet(self::ID_CMS_BLOCK_TEMPLATE);

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
                case 'templatePath':
                case 'idCmsBlockTemplate':
                case 'templateName':
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
                case 'templatePath':
                case 'idCmsBlockTemplate':
                case 'templateName':
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
                case 'templatePath':
                case 'idCmsBlockTemplate':
                case 'templateName':
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
            'templatePath' => $this->templatePath,
            'idCmsBlockTemplate' => $this->idCmsBlockTemplate,
            'templateName' => $this->templateName,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'template_path' => $this->templatePath,
            'id_cms_block_template' => $this->idCmsBlockTemplate,
            'template_name' => $this->templateName,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'template_path' => $this->templatePath instanceof AbstractTransfer ? $this->templatePath->toArray(true, false) : $this->templatePath,
            'id_cms_block_template' => $this->idCmsBlockTemplate instanceof AbstractTransfer ? $this->idCmsBlockTemplate->toArray(true, false) : $this->idCmsBlockTemplate,
            'template_name' => $this->templateName instanceof AbstractTransfer ? $this->templateName->toArray(true, false) : $this->templateName,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'templatePath' => $this->templatePath instanceof AbstractTransfer ? $this->templatePath->toArray(true, true) : $this->templatePath,
            'idCmsBlockTemplate' => $this->idCmsBlockTemplate instanceof AbstractTransfer ? $this->idCmsBlockTemplate->toArray(true, true) : $this->idCmsBlockTemplate,
            'templateName' => $this->templateName instanceof AbstractTransfer ? $this->templateName->toArray(true, true) : $this->templateName,
        ];
    }
}
