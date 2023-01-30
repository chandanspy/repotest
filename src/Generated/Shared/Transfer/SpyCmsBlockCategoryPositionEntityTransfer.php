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
class SpyCmsBlockCategoryPositionEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_CMS_BLOCK_CATEGORY_POSITION = 'idCmsBlockCategoryPosition';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const SPY_CMS_BLOCK_CATEGORY_CONNECTORS = 'spyCmsBlockCategoryConnectors';

    /**
     * @var integer|null
     */
    protected $idCmsBlockCategoryPosition;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCmsBlockCategoryConnectorEntityTransfer[]
     */
    protected $spyCmsBlockCategoryConnectors;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_cms_block_category_position' => 'idCmsBlockCategoryPosition',
        'idCmsBlockCategoryPosition' => 'idCmsBlockCategoryPosition',
        'IdCmsBlockCategoryPosition' => 'idCmsBlockCategoryPosition',
        'name' => 'name',
        'Name' => 'name',
        'spy_cms_block_category_connectors' => 'spyCmsBlockCategoryConnectors',
        'spyCmsBlockCategoryConnectors' => 'spyCmsBlockCategoryConnectors',
        'SpyCmsBlockCategoryConnectors' => 'spyCmsBlockCategoryConnectors',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_CMS_BLOCK_CATEGORY_POSITION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_cms_block_category_position',
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
    ];
    /**
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\CmsBlockCategoryConnector\Persistence\SpyCmsBlockCategoryPosition';


    /**
     * @module 
     *
     * @param integer|null $idCmsBlockCategoryPosition
     *
     * @return $this
     */
    public function setIdCmsBlockCategoryPosition($idCmsBlockCategoryPosition)
    {
        $this->idCmsBlockCategoryPosition = $idCmsBlockCategoryPosition;
        $this->modifiedProperties[self::ID_CMS_BLOCK_CATEGORY_POSITION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdCmsBlockCategoryPosition()
    {
        return $this->idCmsBlockCategoryPosition;
    }

    /**
     * @module 
     *
     * @param integer|null $idCmsBlockCategoryPosition
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCmsBlockCategoryPositionOrFail($idCmsBlockCategoryPosition)
    {
        if ($idCmsBlockCategoryPosition === null) {
            $this->throwNullValueException(static::ID_CMS_BLOCK_CATEGORY_POSITION);
        }

        return $this->setIdCmsBlockCategoryPosition($idCmsBlockCategoryPosition);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdCmsBlockCategoryPositionOrFail()
    {
        if ($this->idCmsBlockCategoryPosition === null) {
            $this->throwNullValueException(static::ID_CMS_BLOCK_CATEGORY_POSITION);
        }

        return $this->idCmsBlockCategoryPosition;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCmsBlockCategoryPosition()
    {
        $this->assertPropertyIsSet(self::ID_CMS_BLOCK_CATEGORY_POSITION);

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
                case 'idCmsBlockCategoryPosition':
                case 'name':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyCmsBlockCategoryConnectors':
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
                case 'idCmsBlockCategoryPosition':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyCmsBlockCategoryConnectors':
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
                case 'idCmsBlockCategoryPosition':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyCmsBlockCategoryConnectors':
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
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idCmsBlockCategoryPosition' => $this->idCmsBlockCategoryPosition,
            'name' => $this->name,
            'spyCmsBlockCategoryConnectors' => $this->spyCmsBlockCategoryConnectors,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_cms_block_category_position' => $this->idCmsBlockCategoryPosition,
            'name' => $this->name,
            'spy_cms_block_category_connectors' => $this->spyCmsBlockCategoryConnectors,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_cms_block_category_position' => $this->idCmsBlockCategoryPosition instanceof AbstractTransfer ? $this->idCmsBlockCategoryPosition->toArray(true, false) : $this->idCmsBlockCategoryPosition,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'spy_cms_block_category_connectors' => $this->spyCmsBlockCategoryConnectors instanceof AbstractTransfer ? $this->spyCmsBlockCategoryConnectors->toArray(true, false) : $this->addValuesToCollection($this->spyCmsBlockCategoryConnectors, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCmsBlockCategoryPosition' => $this->idCmsBlockCategoryPosition instanceof AbstractTransfer ? $this->idCmsBlockCategoryPosition->toArray(true, true) : $this->idCmsBlockCategoryPosition,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'spyCmsBlockCategoryConnectors' => $this->spyCmsBlockCategoryConnectors instanceof AbstractTransfer ? $this->spyCmsBlockCategoryConnectors->toArray(true, true) : $this->addValuesToCollection($this->spyCmsBlockCategoryConnectors, true, true),
        ];
    }
}
