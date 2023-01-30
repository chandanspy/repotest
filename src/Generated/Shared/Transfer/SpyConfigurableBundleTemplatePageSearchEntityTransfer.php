<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyConfigurableBundleTemplatePageSearchEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_CONFIGURABLE_BUNDLE_TEMPLATE_PAGE_SEARCH = 'idConfigurableBundleTemplatePageSearch';

    /**
     * @var string
     */
    public const FK_CONFIGURABLE_BUNDLE_TEMPLATE = 'fkConfigurableBundleTemplate';

    /**
     * @var string
     */
    public const STRUCTURED_DATA = 'structuredData';

    /**
     * @var string|null
     */
    protected $idConfigurableBundleTemplatePageSearch;

    /**
     * @var integer|null
     */
    protected $fkConfigurableBundleTemplate;

    /**
     * @var string|null
     */
    protected $structuredData;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_configurable_bundle_template_page_search' => 'idConfigurableBundleTemplatePageSearch',
        'idConfigurableBundleTemplatePageSearch' => 'idConfigurableBundleTemplatePageSearch',
        'IdConfigurableBundleTemplatePageSearch' => 'idConfigurableBundleTemplatePageSearch',
        'fk_configurable_bundle_template' => 'fkConfigurableBundleTemplate',
        'fkConfigurableBundleTemplate' => 'fkConfigurableBundleTemplate',
        'FkConfigurableBundleTemplate' => 'fkConfigurableBundleTemplate',
        'structured_data' => 'structuredData',
        'structuredData' => 'structuredData',
        'StructuredData' => 'structuredData',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_CONFIGURABLE_BUNDLE_TEMPLATE_PAGE_SEARCH => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'id_configurable_bundle_template_page_search',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_CONFIGURABLE_BUNDLE_TEMPLATE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_configurable_bundle_template',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STRUCTURED_DATA => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'structured_data',
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
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\ConfigurableBundlePageSearch\Persistence\SpyConfigurableBundleTemplatePageSearch';


    /**
     * @module 
     *
     * @param string|null $idConfigurableBundleTemplatePageSearch
     *
     * @return $this
     */
    public function setIdConfigurableBundleTemplatePageSearch($idConfigurableBundleTemplatePageSearch)
    {
        $this->idConfigurableBundleTemplatePageSearch = $idConfigurableBundleTemplatePageSearch;
        $this->modifiedProperties[self::ID_CONFIGURABLE_BUNDLE_TEMPLATE_PAGE_SEARCH] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getIdConfigurableBundleTemplatePageSearch()
    {
        return $this->idConfigurableBundleTemplatePageSearch;
    }

    /**
     * @module 
     *
     * @param string|null $idConfigurableBundleTemplatePageSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdConfigurableBundleTemplatePageSearchOrFail($idConfigurableBundleTemplatePageSearch)
    {
        if ($idConfigurableBundleTemplatePageSearch === null) {
            $this->throwNullValueException(static::ID_CONFIGURABLE_BUNDLE_TEMPLATE_PAGE_SEARCH);
        }

        return $this->setIdConfigurableBundleTemplatePageSearch($idConfigurableBundleTemplatePageSearch);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIdConfigurableBundleTemplatePageSearchOrFail()
    {
        if ($this->idConfigurableBundleTemplatePageSearch === null) {
            $this->throwNullValueException(static::ID_CONFIGURABLE_BUNDLE_TEMPLATE_PAGE_SEARCH);
        }

        return $this->idConfigurableBundleTemplatePageSearch;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdConfigurableBundleTemplatePageSearch()
    {
        $this->assertPropertyIsSet(self::ID_CONFIGURABLE_BUNDLE_TEMPLATE_PAGE_SEARCH);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkConfigurableBundleTemplate
     *
     * @return $this
     */
    public function setFkConfigurableBundleTemplate($fkConfigurableBundleTemplate)
    {
        $this->fkConfigurableBundleTemplate = $fkConfigurableBundleTemplate;
        $this->modifiedProperties[self::FK_CONFIGURABLE_BUNDLE_TEMPLATE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkConfigurableBundleTemplate()
    {
        return $this->fkConfigurableBundleTemplate;
    }

    /**
     * @module 
     *
     * @param integer|null $fkConfigurableBundleTemplate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkConfigurableBundleTemplateOrFail($fkConfigurableBundleTemplate)
    {
        if ($fkConfigurableBundleTemplate === null) {
            $this->throwNullValueException(static::FK_CONFIGURABLE_BUNDLE_TEMPLATE);
        }

        return $this->setFkConfigurableBundleTemplate($fkConfigurableBundleTemplate);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkConfigurableBundleTemplateOrFail()
    {
        if ($this->fkConfigurableBundleTemplate === null) {
            $this->throwNullValueException(static::FK_CONFIGURABLE_BUNDLE_TEMPLATE);
        }

        return $this->fkConfigurableBundleTemplate;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkConfigurableBundleTemplate()
    {
        $this->assertPropertyIsSet(self::FK_CONFIGURABLE_BUNDLE_TEMPLATE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $structuredData
     *
     * @return $this
     */
    public function setStructuredData($structuredData)
    {
        $this->structuredData = $structuredData;
        $this->modifiedProperties[self::STRUCTURED_DATA] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getStructuredData()
    {
        return $this->structuredData;
    }

    /**
     * @module 
     *
     * @param string|null $structuredData
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStructuredDataOrFail($structuredData)
    {
        if ($structuredData === null) {
            $this->throwNullValueException(static::STRUCTURED_DATA);
        }

        return $this->setStructuredData($structuredData);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStructuredDataOrFail()
    {
        if ($this->structuredData === null) {
            $this->throwNullValueException(static::STRUCTURED_DATA);
        }

        return $this->structuredData;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStructuredData()
    {
        $this->assertPropertyIsSet(self::STRUCTURED_DATA);

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
                case 'idConfigurableBundleTemplatePageSearch':
                case 'fkConfigurableBundleTemplate':
                case 'structuredData':
                    $this->$normalizedPropertyName = $value;
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
                case 'idConfigurableBundleTemplatePageSearch':
                case 'fkConfigurableBundleTemplate':
                case 'structuredData':
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
                case 'idConfigurableBundleTemplatePageSearch':
                case 'fkConfigurableBundleTemplate':
                case 'structuredData':
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
            'idConfigurableBundleTemplatePageSearch' => $this->idConfigurableBundleTemplatePageSearch,
            'fkConfigurableBundleTemplate' => $this->fkConfigurableBundleTemplate,
            'structuredData' => $this->structuredData,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_configurable_bundle_template_page_search' => $this->idConfigurableBundleTemplatePageSearch,
            'fk_configurable_bundle_template' => $this->fkConfigurableBundleTemplate,
            'structured_data' => $this->structuredData,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_configurable_bundle_template_page_search' => $this->idConfigurableBundleTemplatePageSearch instanceof AbstractTransfer ? $this->idConfigurableBundleTemplatePageSearch->toArray(true, false) : $this->idConfigurableBundleTemplatePageSearch,
            'fk_configurable_bundle_template' => $this->fkConfigurableBundleTemplate instanceof AbstractTransfer ? $this->fkConfigurableBundleTemplate->toArray(true, false) : $this->fkConfigurableBundleTemplate,
            'structured_data' => $this->structuredData instanceof AbstractTransfer ? $this->structuredData->toArray(true, false) : $this->structuredData,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idConfigurableBundleTemplatePageSearch' => $this->idConfigurableBundleTemplatePageSearch instanceof AbstractTransfer ? $this->idConfigurableBundleTemplatePageSearch->toArray(true, true) : $this->idConfigurableBundleTemplatePageSearch,
            'fkConfigurableBundleTemplate' => $this->fkConfigurableBundleTemplate instanceof AbstractTransfer ? $this->fkConfigurableBundleTemplate->toArray(true, true) : $this->fkConfigurableBundleTemplate,
            'structuredData' => $this->structuredData instanceof AbstractTransfer ? $this->structuredData->toArray(true, true) : $this->structuredData,
        ];
    }
}
