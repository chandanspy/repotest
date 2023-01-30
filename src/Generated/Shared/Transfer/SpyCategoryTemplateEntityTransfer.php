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
class SpyCategoryTemplateEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_CATEGORY_TEMPLATE = 'idCategoryTemplate';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const TEMPLATE_PATH = 'templatePath';

    /**
     * @var string
     */
    public const SPY_CMS_BLOCK_CATEGORY_CONNECTORS = 'spyCmsBlockCategoryConnectors';

    /**
     * @var string
     */
    public const SPY_CATEGORIES = 'spyCategories';

    /**
     * @var integer|null
     */
    protected $idCategoryTemplate;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $templatePath;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCmsBlockCategoryConnectorEntityTransfer[]
     */
    protected $spyCmsBlockCategoryConnectors;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCategoryEntityTransfer[]
     */
    protected $spyCategories;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_category_template' => 'idCategoryTemplate',
        'idCategoryTemplate' => 'idCategoryTemplate',
        'IdCategoryTemplate' => 'idCategoryTemplate',
        'name' => 'name',
        'Name' => 'name',
        'template_path' => 'templatePath',
        'templatePath' => 'templatePath',
        'TemplatePath' => 'templatePath',
        'spy_cms_block_category_connectors' => 'spyCmsBlockCategoryConnectors',
        'spyCmsBlockCategoryConnectors' => 'spyCmsBlockCategoryConnectors',
        'SpyCmsBlockCategoryConnectors' => 'spyCmsBlockCategoryConnectors',
        'spy_categories' => 'spyCategories',
        'spyCategories' => 'spyCategories',
        'SpyCategories' => 'spyCategories',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_CATEGORY_TEMPLATE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_category_template',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'name',
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
        self::SPY_CMS_BLOCK_CATEGORY_CONNECTORS => [
            'type' => 'Generated\Shared\Transfer\SpyCmsBlockCategoryConnectorEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_cms_block_category_connectors',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_CATEGORIES => [
            'type' => 'Generated\Shared\Transfer\SpyCategoryEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_categories',
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
    public static $entityNamespace = 'Orm\Zed\Category\Persistence\SpyCategoryTemplate';


    /**
     * @module 
     *
     * @param integer|null $idCategoryTemplate
     *
     * @return $this
     */
    public function setIdCategoryTemplate($idCategoryTemplate)
    {
        $this->idCategoryTemplate = $idCategoryTemplate;
        $this->modifiedProperties[self::ID_CATEGORY_TEMPLATE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdCategoryTemplate()
    {
        return $this->idCategoryTemplate;
    }

    /**
     * @module 
     *
     * @param integer|null $idCategoryTemplate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCategoryTemplateOrFail($idCategoryTemplate)
    {
        if ($idCategoryTemplate === null) {
            $this->throwNullValueException(static::ID_CATEGORY_TEMPLATE);
        }

        return $this->setIdCategoryTemplate($idCategoryTemplate);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdCategoryTemplateOrFail()
    {
        if ($this->idCategoryTemplate === null) {
            $this->throwNullValueException(static::ID_CATEGORY_TEMPLATE);
        }

        return $this->idCategoryTemplate;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCategoryTemplate()
    {
        $this->assertPropertyIsSet(self::ID_CATEGORY_TEMPLATE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        $this->modifiedProperties[self::NAME] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module 
     *
     * @param string|null $name
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNameOrFail($name)
    {
        if ($name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->setName($name);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNameOrFail()
    {
        if ($this->name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->name;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireName()
    {
        $this->assertPropertyIsSet(self::NAME);

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
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCmsBlockCategoryConnectorEntityTransfer[] $spyCmsBlockCategoryConnectors
     *
     * @return $this
     */
    public function setSpyCmsBlockCategoryConnectors(ArrayObject $spyCmsBlockCategoryConnectors)
    {
        $this->spyCmsBlockCategoryConnectors = $spyCmsBlockCategoryConnectors;
        $this->modifiedProperties[self::SPY_CMS_BLOCK_CATEGORY_CONNECTORS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCmsBlockCategoryConnectorEntityTransfer[]
     */
    public function getSpyCmsBlockCategoryConnectors()
    {
        return $this->spyCmsBlockCategoryConnectors;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCmsBlockCategoryConnectorEntityTransfer $spyCmsBlockCategoryConnectors
     *
     * @return $this
     */
    public function addSpyCmsBlockCategoryConnectors(SpyCmsBlockCategoryConnectorEntityTransfer $spyCmsBlockCategoryConnectors)
    {
        $this->spyCmsBlockCategoryConnectors[] = $spyCmsBlockCategoryConnectors;
        $this->modifiedProperties[self::SPY_CMS_BLOCK_CATEGORY_CONNECTORS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCmsBlockCategoryConnectors()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_CMS_BLOCK_CATEGORY_CONNECTORS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCategoryEntityTransfer[] $spyCategories
     *
     * @return $this
     */
    public function setSpyCategories(ArrayObject $spyCategories)
    {
        $this->spyCategories = $spyCategories;
        $this->modifiedProperties[self::SPY_CATEGORIES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCategoryEntityTransfer[]
     */
    public function getSpyCategories()
    {
        return $this->spyCategories;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCategoryEntityTransfer $spyCategories
     *
     * @return $this
     */
    public function addSpyCategories(SpyCategoryEntityTransfer $spyCategories)
    {
        $this->spyCategories[] = $spyCategories;
        $this->modifiedProperties[self::SPY_CATEGORIES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCategories()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_CATEGORIES);

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
                case 'idCategoryTemplate':
                case 'name':
                case 'templatePath':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyCmsBlockCategoryConnectors':
                case 'spyCategories':
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
                case 'idCategoryTemplate':
                case 'name':
                case 'templatePath':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyCmsBlockCategoryConnectors':
                case 'spyCategories':
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
                case 'idCategoryTemplate':
                case 'name':
                case 'templatePath':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyCmsBlockCategoryConnectors':
                case 'spyCategories':
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
        $this->spyCmsBlockCategoryConnectors = $this->spyCmsBlockCategoryConnectors ?: new ArrayObject();
        $this->spyCategories = $this->spyCategories ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idCategoryTemplate' => $this->idCategoryTemplate,
            'name' => $this->name,
            'templatePath' => $this->templatePath,
            'spyCmsBlockCategoryConnectors' => $this->spyCmsBlockCategoryConnectors,
            'spyCategories' => $this->spyCategories,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_category_template' => $this->idCategoryTemplate,
            'name' => $this->name,
            'template_path' => $this->templatePath,
            'spy_cms_block_category_connectors' => $this->spyCmsBlockCategoryConnectors,
            'spy_categories' => $this->spyCategories,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_category_template' => $this->idCategoryTemplate instanceof AbstractTransfer ? $this->idCategoryTemplate->toArray(true, false) : $this->idCategoryTemplate,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'template_path' => $this->templatePath instanceof AbstractTransfer ? $this->templatePath->toArray(true, false) : $this->templatePath,
            'spy_cms_block_category_connectors' => $this->spyCmsBlockCategoryConnectors instanceof AbstractTransfer ? $this->spyCmsBlockCategoryConnectors->toArray(true, false) : $this->addValuesToCollection($this->spyCmsBlockCategoryConnectors, true, false),
            'spy_categories' => $this->spyCategories instanceof AbstractTransfer ? $this->spyCategories->toArray(true, false) : $this->addValuesToCollection($this->spyCategories, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCategoryTemplate' => $this->idCategoryTemplate instanceof AbstractTransfer ? $this->idCategoryTemplate->toArray(true, true) : $this->idCategoryTemplate,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'templatePath' => $this->templatePath instanceof AbstractTransfer ? $this->templatePath->toArray(true, true) : $this->templatePath,
            'spyCmsBlockCategoryConnectors' => $this->spyCmsBlockCategoryConnectors instanceof AbstractTransfer ? $this->spyCmsBlockCategoryConnectors->toArray(true, true) : $this->addValuesToCollection($this->spyCmsBlockCategoryConnectors, true, true),
            'spyCategories' => $this->spyCategories instanceof AbstractTransfer ? $this->spyCategories->toArray(true, true) : $this->addValuesToCollection($this->spyCategories, true, true),
        ];
    }
}
