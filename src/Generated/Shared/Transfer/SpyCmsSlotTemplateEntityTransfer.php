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
class SpyCmsSlotTemplateEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_CMS_SLOT_TEMPLATE = 'idCmsSlotTemplate';

    /**
     * @var string
     */
    public const DESCRIPTION = 'description';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const PATH = 'path';

    /**
     * @var string
     */
    public const PATH_HASH = 'pathHash';

    /**
     * @var string
     */
    public const SPY_CMS_SLOT_BLOCKS = 'spyCmsSlotBlocks';

    /**
     * @var string
     */
    public const SPY_CMS_SLOT_TO_CMS_SLOT_TEMPLATES = 'spyCmsSlotToCmsSlotTemplates';

    /**
     * @var integer|null
     */
    protected $idCmsSlotTemplate;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $path;

    /**
     * @var string|null
     */
    protected $pathHash;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCmsSlotBlockEntityTransfer[]
     */
    protected $spyCmsSlotBlocks;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCmsSlotToCmsSlotTemplateEntityTransfer[]
     */
    protected $spyCmsSlotToCmsSlotTemplates;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_cms_slot_template' => 'idCmsSlotTemplate',
        'idCmsSlotTemplate' => 'idCmsSlotTemplate',
        'IdCmsSlotTemplate' => 'idCmsSlotTemplate',
        'description' => 'description',
        'Description' => 'description',
        'name' => 'name',
        'Name' => 'name',
        'path' => 'path',
        'Path' => 'path',
        'path_hash' => 'pathHash',
        'pathHash' => 'pathHash',
        'PathHash' => 'pathHash',
        'spy_cms_slot_blocks' => 'spyCmsSlotBlocks',
        'spyCmsSlotBlocks' => 'spyCmsSlotBlocks',
        'SpyCmsSlotBlocks' => 'spyCmsSlotBlocks',
        'spy_cms_slot_to_cms_slot_templates' => 'spyCmsSlotToCmsSlotTemplates',
        'spyCmsSlotToCmsSlotTemplates' => 'spyCmsSlotToCmsSlotTemplates',
        'SpyCmsSlotToCmsSlotTemplates' => 'spyCmsSlotToCmsSlotTemplates',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_CMS_SLOT_TEMPLATE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_cms_slot_template',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DESCRIPTION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'description',
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
        self::PATH => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'path',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PATH_HASH => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'path_hash',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_CMS_SLOT_BLOCKS => [
            'type' => 'Generated\Shared\Transfer\SpyCmsSlotBlockEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_cms_slot_blocks',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_CMS_SLOT_TO_CMS_SLOT_TEMPLATES => [
            'type' => 'Generated\Shared\Transfer\SpyCmsSlotToCmsSlotTemplateEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_cms_slot_to_cms_slot_templates',
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
    public static $entityNamespace = 'Orm\Zed\CmsSlot\Persistence\SpyCmsSlotTemplate';


    /**
     * @module 
     *
     * @param integer|null $idCmsSlotTemplate
     *
     * @return $this
     */
    public function setIdCmsSlotTemplate($idCmsSlotTemplate)
    {
        $this->idCmsSlotTemplate = $idCmsSlotTemplate;
        $this->modifiedProperties[self::ID_CMS_SLOT_TEMPLATE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdCmsSlotTemplate()
    {
        return $this->idCmsSlotTemplate;
    }

    /**
     * @module 
     *
     * @param integer|null $idCmsSlotTemplate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCmsSlotTemplateOrFail($idCmsSlotTemplate)
    {
        if ($idCmsSlotTemplate === null) {
            $this->throwNullValueException(static::ID_CMS_SLOT_TEMPLATE);
        }

        return $this->setIdCmsSlotTemplate($idCmsSlotTemplate);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdCmsSlotTemplateOrFail()
    {
        if ($this->idCmsSlotTemplate === null) {
            $this->throwNullValueException(static::ID_CMS_SLOT_TEMPLATE);
        }

        return $this->idCmsSlotTemplate;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCmsSlotTemplate()
    {
        $this->assertPropertyIsSet(self::ID_CMS_SLOT_TEMPLATE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        $this->modifiedProperties[self::DESCRIPTION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @module 
     *
     * @param string|null $description
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDescriptionOrFail($description)
    {
        if ($description === null) {
            $this->throwNullValueException(static::DESCRIPTION);
        }

        return $this->setDescription($description);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDescriptionOrFail()
    {
        if ($this->description === null) {
            $this->throwNullValueException(static::DESCRIPTION);
        }

        return $this->description;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDescription()
    {
        $this->assertPropertyIsSet(self::DESCRIPTION);

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
     * @param string|null $path
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->path = $path;
        $this->modifiedProperties[self::PATH] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @module 
     *
     * @param string|null $path
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPathOrFail($path)
    {
        if ($path === null) {
            $this->throwNullValueException(static::PATH);
        }

        return $this->setPath($path);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPathOrFail()
    {
        if ($this->path === null) {
            $this->throwNullValueException(static::PATH);
        }

        return $this->path;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePath()
    {
        $this->assertPropertyIsSet(self::PATH);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $pathHash
     *
     * @return $this
     */
    public function setPathHash($pathHash)
    {
        $this->pathHash = $pathHash;
        $this->modifiedProperties[self::PATH_HASH] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getPathHash()
    {
        return $this->pathHash;
    }

    /**
     * @module 
     *
     * @param string|null $pathHash
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPathHashOrFail($pathHash)
    {
        if ($pathHash === null) {
            $this->throwNullValueException(static::PATH_HASH);
        }

        return $this->setPathHash($pathHash);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPathHashOrFail()
    {
        if ($this->pathHash === null) {
            $this->throwNullValueException(static::PATH_HASH);
        }

        return $this->pathHash;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePathHash()
    {
        $this->assertPropertyIsSet(self::PATH_HASH);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCmsSlotBlockEntityTransfer[] $spyCmsSlotBlocks
     *
     * @return $this
     */
    public function setSpyCmsSlotBlocks(ArrayObject $spyCmsSlotBlocks)
    {
        $this->spyCmsSlotBlocks = $spyCmsSlotBlocks;
        $this->modifiedProperties[self::SPY_CMS_SLOT_BLOCKS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCmsSlotBlockEntityTransfer[]
     */
    public function getSpyCmsSlotBlocks()
    {
        return $this->spyCmsSlotBlocks;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCmsSlotBlockEntityTransfer $spyCmsSlotBlocks
     *
     * @return $this
     */
    public function addSpyCmsSlotBlocks(SpyCmsSlotBlockEntityTransfer $spyCmsSlotBlocks)
    {
        $this->spyCmsSlotBlocks[] = $spyCmsSlotBlocks;
        $this->modifiedProperties[self::SPY_CMS_SLOT_BLOCKS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCmsSlotBlocks()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_CMS_SLOT_BLOCKS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCmsSlotToCmsSlotTemplateEntityTransfer[] $spyCmsSlotToCmsSlotTemplates
     *
     * @return $this
     */
    public function setSpyCmsSlotToCmsSlotTemplates(ArrayObject $spyCmsSlotToCmsSlotTemplates)
    {
        $this->spyCmsSlotToCmsSlotTemplates = $spyCmsSlotToCmsSlotTemplates;
        $this->modifiedProperties[self::SPY_CMS_SLOT_TO_CMS_SLOT_TEMPLATES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCmsSlotToCmsSlotTemplateEntityTransfer[]
     */
    public function getSpyCmsSlotToCmsSlotTemplates()
    {
        return $this->spyCmsSlotToCmsSlotTemplates;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCmsSlotToCmsSlotTemplateEntityTransfer $spyCmsSlotToCmsSlotTemplates
     *
     * @return $this
     */
    public function addSpyCmsSlotToCmsSlotTemplates(SpyCmsSlotToCmsSlotTemplateEntityTransfer $spyCmsSlotToCmsSlotTemplates)
    {
        $this->spyCmsSlotToCmsSlotTemplates[] = $spyCmsSlotToCmsSlotTemplates;
        $this->modifiedProperties[self::SPY_CMS_SLOT_TO_CMS_SLOT_TEMPLATES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCmsSlotToCmsSlotTemplates()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_CMS_SLOT_TO_CMS_SLOT_TEMPLATES);

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
                case 'idCmsSlotTemplate':
                case 'description':
                case 'name':
                case 'path':
                case 'pathHash':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyCmsSlotBlocks':
                case 'spyCmsSlotToCmsSlotTemplates':
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
                case 'idCmsSlotTemplate':
                case 'description':
                case 'name':
                case 'path':
                case 'pathHash':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyCmsSlotBlocks':
                case 'spyCmsSlotToCmsSlotTemplates':
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
                case 'idCmsSlotTemplate':
                case 'description':
                case 'name':
                case 'path':
                case 'pathHash':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyCmsSlotBlocks':
                case 'spyCmsSlotToCmsSlotTemplates':
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
        $this->spyCmsSlotBlocks = $this->spyCmsSlotBlocks ?: new ArrayObject();
        $this->spyCmsSlotToCmsSlotTemplates = $this->spyCmsSlotToCmsSlotTemplates ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idCmsSlotTemplate' => $this->idCmsSlotTemplate,
            'description' => $this->description,
            'name' => $this->name,
            'path' => $this->path,
            'pathHash' => $this->pathHash,
            'spyCmsSlotBlocks' => $this->spyCmsSlotBlocks,
            'spyCmsSlotToCmsSlotTemplates' => $this->spyCmsSlotToCmsSlotTemplates,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_cms_slot_template' => $this->idCmsSlotTemplate,
            'description' => $this->description,
            'name' => $this->name,
            'path' => $this->path,
            'path_hash' => $this->pathHash,
            'spy_cms_slot_blocks' => $this->spyCmsSlotBlocks,
            'spy_cms_slot_to_cms_slot_templates' => $this->spyCmsSlotToCmsSlotTemplates,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_cms_slot_template' => $this->idCmsSlotTemplate instanceof AbstractTransfer ? $this->idCmsSlotTemplate->toArray(true, false) : $this->idCmsSlotTemplate,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, false) : $this->description,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'path' => $this->path instanceof AbstractTransfer ? $this->path->toArray(true, false) : $this->path,
            'path_hash' => $this->pathHash instanceof AbstractTransfer ? $this->pathHash->toArray(true, false) : $this->pathHash,
            'spy_cms_slot_blocks' => $this->spyCmsSlotBlocks instanceof AbstractTransfer ? $this->spyCmsSlotBlocks->toArray(true, false) : $this->addValuesToCollection($this->spyCmsSlotBlocks, true, false),
            'spy_cms_slot_to_cms_slot_templates' => $this->spyCmsSlotToCmsSlotTemplates instanceof AbstractTransfer ? $this->spyCmsSlotToCmsSlotTemplates->toArray(true, false) : $this->addValuesToCollection($this->spyCmsSlotToCmsSlotTemplates, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCmsSlotTemplate' => $this->idCmsSlotTemplate instanceof AbstractTransfer ? $this->idCmsSlotTemplate->toArray(true, true) : $this->idCmsSlotTemplate,
            'description' => $this->description instanceof AbstractTransfer ? $this->description->toArray(true, true) : $this->description,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'path' => $this->path instanceof AbstractTransfer ? $this->path->toArray(true, true) : $this->path,
            'pathHash' => $this->pathHash instanceof AbstractTransfer ? $this->pathHash->toArray(true, true) : $this->pathHash,
            'spyCmsSlotBlocks' => $this->spyCmsSlotBlocks instanceof AbstractTransfer ? $this->spyCmsSlotBlocks->toArray(true, true) : $this->addValuesToCollection($this->spyCmsSlotBlocks, true, true),
            'spyCmsSlotToCmsSlotTemplates' => $this->spyCmsSlotToCmsSlotTemplates instanceof AbstractTransfer ? $this->spyCmsSlotToCmsSlotTemplates->toArray(true, true) : $this->addValuesToCollection($this->spyCmsSlotToCmsSlotTemplates, true, true),
        ];
    }
}
