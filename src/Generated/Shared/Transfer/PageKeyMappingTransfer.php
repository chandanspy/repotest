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
class PageKeyMappingTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_CMS_GLOSSARY_KEY_MAPPING = 'idCmsGlossaryKeyMapping';

    /**
     * @var string
     */
    public const FK_PAGE = 'fkPage';

    /**
     * @var string
     */
    public const FK_GLOSSARY_KEY = 'fkGlossaryKey';

    /**
     * @var string
     */
    public const PLACEHOLDER = 'placeholder';

    /**
     * @var int|null
     */
    protected $idCmsGlossaryKeyMapping;

    /**
     * @var int|null
     */
    protected $fkPage;

    /**
     * @var int|null
     */
    protected $fkGlossaryKey;

    /**
     * @var string|null
     */
    protected $placeholder;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_cms_glossary_key_mapping' => 'idCmsGlossaryKeyMapping',
        'idCmsGlossaryKeyMapping' => 'idCmsGlossaryKeyMapping',
        'IdCmsGlossaryKeyMapping' => 'idCmsGlossaryKeyMapping',
        'fk_page' => 'fkPage',
        'fkPage' => 'fkPage',
        'FkPage' => 'fkPage',
        'fk_glossary_key' => 'fkGlossaryKey',
        'fkGlossaryKey' => 'fkGlossaryKey',
        'FkGlossaryKey' => 'fkGlossaryKey',
        'placeholder' => 'placeholder',
        'Placeholder' => 'placeholder',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_CMS_GLOSSARY_KEY_MAPPING => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_cms_glossary_key_mapping',
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
    ];

    /**
     * @module Cms
     *
     * @param int|null $idCmsGlossaryKeyMapping
     *
     * @return $this
     */
    public function setIdCmsGlossaryKeyMapping($idCmsGlossaryKeyMapping)
    {
        $this->idCmsGlossaryKeyMapping = $idCmsGlossaryKeyMapping;
        $this->modifiedProperties[self::ID_CMS_GLOSSARY_KEY_MAPPING] = true;

        return $this;
    }

    /**
     * @module Cms
     *
     * @return int|null
     */
    public function getIdCmsGlossaryKeyMapping()
    {
        return $this->idCmsGlossaryKeyMapping;
    }

    /**
     * @module Cms
     *
     * @param int|null $idCmsGlossaryKeyMapping
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCmsGlossaryKeyMappingOrFail($idCmsGlossaryKeyMapping)
    {
        if ($idCmsGlossaryKeyMapping === null) {
            $this->throwNullValueException(static::ID_CMS_GLOSSARY_KEY_MAPPING);
        }

        return $this->setIdCmsGlossaryKeyMapping($idCmsGlossaryKeyMapping);
    }

    /**
     * @module Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCmsGlossaryKeyMappingOrFail()
    {
        if ($this->idCmsGlossaryKeyMapping === null) {
            $this->throwNullValueException(static::ID_CMS_GLOSSARY_KEY_MAPPING);
        }

        return $this->idCmsGlossaryKeyMapping;
    }

    /**
     * @module Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCmsGlossaryKeyMapping()
    {
        $this->assertPropertyIsSet(self::ID_CMS_GLOSSARY_KEY_MAPPING);

        return $this;
    }

    /**
     * @module Cms
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
     * @module Cms
     *
     * @return int|null
     */
    public function getFkPage()
    {
        return $this->fkPage;
    }

    /**
     * @module Cms
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
     * @module Cms
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
     * @module Cms
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
     * @module Cms
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
     * @module Cms
     *
     * @return int|null
     */
    public function getFkGlossaryKey()
    {
        return $this->fkGlossaryKey;
    }

    /**
     * @module Cms
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
     * @module Cms
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
     * @module Cms
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
     * @module Cms
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
     * @module Cms
     *
     * @return string|null
     */
    public function getPlaceholder()
    {
        return $this->placeholder;
    }

    /**
     * @module Cms
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
     * @module Cms
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
     * @module Cms
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
                case 'idCmsGlossaryKeyMapping':
                case 'fkPage':
                case 'fkGlossaryKey':
                case 'placeholder':
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
                case 'idCmsGlossaryKeyMapping':
                case 'fkPage':
                case 'fkGlossaryKey':
                case 'placeholder':
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
                case 'idCmsGlossaryKeyMapping':
                case 'fkPage':
                case 'fkGlossaryKey':
                case 'placeholder':
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
            'idCmsGlossaryKeyMapping' => $this->idCmsGlossaryKeyMapping,
            'fkPage' => $this->fkPage,
            'fkGlossaryKey' => $this->fkGlossaryKey,
            'placeholder' => $this->placeholder,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_cms_glossary_key_mapping' => $this->idCmsGlossaryKeyMapping,
            'fk_page' => $this->fkPage,
            'fk_glossary_key' => $this->fkGlossaryKey,
            'placeholder' => $this->placeholder,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_cms_glossary_key_mapping' => $this->idCmsGlossaryKeyMapping instanceof AbstractTransfer ? $this->idCmsGlossaryKeyMapping->toArray(true, false) : $this->idCmsGlossaryKeyMapping,
            'fk_page' => $this->fkPage instanceof AbstractTransfer ? $this->fkPage->toArray(true, false) : $this->fkPage,
            'fk_glossary_key' => $this->fkGlossaryKey instanceof AbstractTransfer ? $this->fkGlossaryKey->toArray(true, false) : $this->fkGlossaryKey,
            'placeholder' => $this->placeholder instanceof AbstractTransfer ? $this->placeholder->toArray(true, false) : $this->placeholder,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCmsGlossaryKeyMapping' => $this->idCmsGlossaryKeyMapping instanceof AbstractTransfer ? $this->idCmsGlossaryKeyMapping->toArray(true, true) : $this->idCmsGlossaryKeyMapping,
            'fkPage' => $this->fkPage instanceof AbstractTransfer ? $this->fkPage->toArray(true, true) : $this->fkPage,
            'fkGlossaryKey' => $this->fkGlossaryKey instanceof AbstractTransfer ? $this->fkGlossaryKey->toArray(true, true) : $this->fkGlossaryKey,
            'placeholder' => $this->placeholder instanceof AbstractTransfer ? $this->placeholder->toArray(true, true) : $this->placeholder,
        ];
    }
}
