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
class ProductCategoryStorageTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const URL = 'url';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const CATEGORY_ID = 'categoryId';

    /**
     * @var string
     */
    public const CATEGORY_NODE_ID = 'categoryNodeId';

    /**
     * @var string|null
     */
    protected $url;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var int|null
     */
    protected $categoryId;

    /**
     * @var int|null
     */
    protected $categoryNodeId;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'url' => 'url',
        'Url' => 'url',
        'name' => 'name',
        'Name' => 'name',
        'category_id' => 'categoryId',
        'categoryId' => 'categoryId',
        'CategoryId' => 'categoryId',
        'category_node_id' => 'categoryNodeId',
        'categoryNodeId' => 'categoryNodeId',
        'CategoryNodeId' => 'categoryNodeId',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::URL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'url',
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
        self::CATEGORY_ID => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'category_id',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CATEGORY_NODE_ID => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'category_node_id',
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
     * @module ProductCategoryWidget|ProductCategoryStorage
     *
     * @param string|null $url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        $this->modifiedProperties[self::URL] = true;

        return $this;
    }

    /**
     * @module ProductCategoryWidget|ProductCategoryStorage
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @module ProductCategoryWidget|ProductCategoryStorage
     *
     * @param string|null $url
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUrlOrFail($url)
    {
        if ($url === null) {
            $this->throwNullValueException(static::URL);
        }

        return $this->setUrl($url);
    }

    /**
     * @module ProductCategoryWidget|ProductCategoryStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUrlOrFail()
    {
        if ($this->url === null) {
            $this->throwNullValueException(static::URL);
        }

        return $this->url;
    }

    /**
     * @module ProductCategoryWidget|ProductCategoryStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUrl()
    {
        $this->assertPropertyIsSet(self::URL);

        return $this;
    }

    /**
     * @module ProductCategoryWidget|ProductCategoryStorage
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
     * @module ProductCategoryWidget|ProductCategoryStorage
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module ProductCategoryWidget|ProductCategoryStorage
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
     * @module ProductCategoryWidget|ProductCategoryStorage
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
     * @module ProductCategoryWidget|ProductCategoryStorage
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
     * @module CmsSlotBlockProductCategoryConnector|ProductCategoryStorage
     *
     * @param int|null $categoryId
     *
     * @return $this
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
        $this->modifiedProperties[self::CATEGORY_ID] = true;

        return $this;
    }

    /**
     * @module CmsSlotBlockProductCategoryConnector|ProductCategoryStorage
     *
     * @return int|null
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @module CmsSlotBlockProductCategoryConnector|ProductCategoryStorage
     *
     * @param int|null $categoryId
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCategoryIdOrFail($categoryId)
    {
        if ($categoryId === null) {
            $this->throwNullValueException(static::CATEGORY_ID);
        }

        return $this->setCategoryId($categoryId);
    }

    /**
     * @module CmsSlotBlockProductCategoryConnector|ProductCategoryStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getCategoryIdOrFail()
    {
        if ($this->categoryId === null) {
            $this->throwNullValueException(static::CATEGORY_ID);
        }

        return $this->categoryId;
    }

    /**
     * @module CmsSlotBlockProductCategoryConnector|ProductCategoryStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCategoryId()
    {
        $this->assertPropertyIsSet(self::CATEGORY_ID);

        return $this;
    }

    /**
     * @module ProductCategoryStorage|ProductsCategoriesResourceRelationship
     *
     * @param int|null $categoryNodeId
     *
     * @return $this
     */
    public function setCategoryNodeId($categoryNodeId)
    {
        $this->categoryNodeId = $categoryNodeId;
        $this->modifiedProperties[self::CATEGORY_NODE_ID] = true;

        return $this;
    }

    /**
     * @module ProductCategoryStorage|ProductsCategoriesResourceRelationship
     *
     * @return int|null
     */
    public function getCategoryNodeId()
    {
        return $this->categoryNodeId;
    }

    /**
     * @module ProductCategoryStorage|ProductsCategoriesResourceRelationship
     *
     * @param int|null $categoryNodeId
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCategoryNodeIdOrFail($categoryNodeId)
    {
        if ($categoryNodeId === null) {
            $this->throwNullValueException(static::CATEGORY_NODE_ID);
        }

        return $this->setCategoryNodeId($categoryNodeId);
    }

    /**
     * @module ProductCategoryStorage|ProductsCategoriesResourceRelationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getCategoryNodeIdOrFail()
    {
        if ($this->categoryNodeId === null) {
            $this->throwNullValueException(static::CATEGORY_NODE_ID);
        }

        return $this->categoryNodeId;
    }

    /**
     * @module ProductCategoryStorage|ProductsCategoriesResourceRelationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCategoryNodeId()
    {
        $this->assertPropertyIsSet(self::CATEGORY_NODE_ID);

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
                case 'url':
                case 'name':
                case 'categoryId':
                case 'categoryNodeId':
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
                case 'url':
                case 'name':
                case 'categoryId':
                case 'categoryNodeId':
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
                case 'url':
                case 'name':
                case 'categoryId':
                case 'categoryNodeId':
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
            'url' => $this->url,
            'name' => $this->name,
            'categoryId' => $this->categoryId,
            'categoryNodeId' => $this->categoryNodeId,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'url' => $this->url,
            'name' => $this->name,
            'category_id' => $this->categoryId,
            'category_node_id' => $this->categoryNodeId,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'url' => $this->url instanceof AbstractTransfer ? $this->url->toArray(true, false) : $this->url,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'category_id' => $this->categoryId instanceof AbstractTransfer ? $this->categoryId->toArray(true, false) : $this->categoryId,
            'category_node_id' => $this->categoryNodeId instanceof AbstractTransfer ? $this->categoryNodeId->toArray(true, false) : $this->categoryNodeId,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'url' => $this->url instanceof AbstractTransfer ? $this->url->toArray(true, true) : $this->url,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'categoryId' => $this->categoryId instanceof AbstractTransfer ? $this->categoryId->toArray(true, true) : $this->categoryId,
            'categoryNodeId' => $this->categoryNodeId instanceof AbstractTransfer ? $this->categoryNodeId->toArray(true, true) : $this->categoryNodeId,
        ];
    }
}
