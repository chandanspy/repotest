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
class TabsViewTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const TABS = 'tabs';

    /**
     * @var string
     */
    public const FOOTER_TEMPLATE = 'footerTemplate';

    /**
     * @var string
     */
    public const IS_NAVIGABLE = 'isNavigable';

    /**
     * @var string
     */
    public const ACTIVE_TAB_NAME = 'activeTabName';

    /**
     * @var string
     */
    public const AUTO_ERRORS = 'autoErrors';

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\TabItemTransfer[]
     */
    protected $tabs;

    /**
     * @var string|null
     */
    protected $footerTemplate;

    /**
     * @var bool|null
     */
    protected $isNavigable;

    /**
     * @var string|null
     */
    protected $activeTabName;

    /**
     * @var bool|null
     */
    protected $autoErrors;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'tabs' => 'tabs',
        'Tabs' => 'tabs',
        'footer_template' => 'footerTemplate',
        'footerTemplate' => 'footerTemplate',
        'FooterTemplate' => 'footerTemplate',
        'is_navigable' => 'isNavigable',
        'isNavigable' => 'isNavigable',
        'IsNavigable' => 'isNavigable',
        'active_tab_name' => 'activeTabName',
        'activeTabName' => 'activeTabName',
        'ActiveTabName' => 'activeTabName',
        'auto_errors' => 'autoErrors',
        'autoErrors' => 'autoErrors',
        'AutoErrors' => 'autoErrors',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::TABS => [
            'type' => 'Generated\Shared\Transfer\TabItemTransfer',
            'type_shim' => null,
            'name_underscore' => 'tabs',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FOOTER_TEMPLATE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'footer_template',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_NAVIGABLE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_navigable',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ACTIVE_TAB_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'active_tab_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AUTO_ERRORS => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'auto_errors',
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
     * @module CategoryGui|CategoryImageGui|Category|CmsBlockGui|CmsGui|ConfigurableBundleGui|ContentGui|CustomerGroup|Discount|FileManagerGui|Gui|MerchantGui|PaymentGui|PriceProductScheduleGui|ProductAlternativeGui|ProductDiscontinuedGui|ProductLabelGui|ProductListGui|ProductManagement|ProductOption|ProductRelationGui|ProductRelation|ProductSetGui|ShipmentGui|StockGui
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\TabItemTransfer[] $tabs
     *
     * @return $this
     */
    public function setTabs(ArrayObject $tabs)
    {
        $this->tabs = $tabs;
        $this->modifiedProperties[self::TABS] = true;

        return $this;
    }

    /**
     * @module CategoryGui|CategoryImageGui|Category|CmsBlockGui|CmsGui|ConfigurableBundleGui|ContentGui|CustomerGroup|Discount|FileManagerGui|Gui|MerchantGui|PaymentGui|PriceProductScheduleGui|ProductAlternativeGui|ProductDiscontinuedGui|ProductLabelGui|ProductListGui|ProductManagement|ProductOption|ProductRelationGui|ProductRelation|ProductSetGui|ShipmentGui|StockGui
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\TabItemTransfer[]
     */
    public function getTabs()
    {
        return $this->tabs;
    }

    /**
     * @module CategoryGui|CategoryImageGui|Category|CmsBlockGui|CmsGui|ConfigurableBundleGui|ContentGui|CustomerGroup|Discount|FileManagerGui|Gui|MerchantGui|PaymentGui|PriceProductScheduleGui|ProductAlternativeGui|ProductDiscontinuedGui|ProductLabelGui|ProductListGui|ProductManagement|ProductOption|ProductRelationGui|ProductRelation|ProductSetGui|ShipmentGui|StockGui
     *
     * @param \Generated\Shared\Transfer\TabItemTransfer $tab
     *
     * @return $this
     */
    public function addTab(TabItemTransfer $tab)
    {
        $this->tabs[] = $tab;
        $this->modifiedProperties[self::TABS] = true;

        return $this;
    }

    /**
     * @module CategoryGui|CategoryImageGui|Category|CmsBlockGui|CmsGui|ConfigurableBundleGui|ContentGui|CustomerGroup|Discount|FileManagerGui|Gui|MerchantGui|PaymentGui|PriceProductScheduleGui|ProductAlternativeGui|ProductDiscontinuedGui|ProductLabelGui|ProductListGui|ProductManagement|ProductOption|ProductRelationGui|ProductRelation|ProductSetGui|ShipmentGui|StockGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTabs()
    {
        $this->assertCollectionPropertyIsSet(self::TABS);

        return $this;
    }

    /**
     * @module CategoryGui|Category|CmsBlockGui|CmsGui|ConfigurableBundleGui|ContentGui|CustomerGroup|Discount|FileManagerGui|Gui|MerchantGui|PaymentGui|ProductLabelGui|ProductListGui|ProductManagement|ProductOption|ProductRelationGui|ProductRelation|ProductSetGui|ShipmentGui|StockGui
     *
     * @param string|null $footerTemplate
     *
     * @return $this
     */
    public function setFooterTemplate($footerTemplate)
    {
        $this->footerTemplate = $footerTemplate;
        $this->modifiedProperties[self::FOOTER_TEMPLATE] = true;

        return $this;
    }

    /**
     * @module CategoryGui|Category|CmsBlockGui|CmsGui|ConfigurableBundleGui|ContentGui|CustomerGroup|Discount|FileManagerGui|Gui|MerchantGui|PaymentGui|ProductLabelGui|ProductListGui|ProductManagement|ProductOption|ProductRelationGui|ProductRelation|ProductSetGui|ShipmentGui|StockGui
     *
     * @return string|null
     */
    public function getFooterTemplate()
    {
        return $this->footerTemplate;
    }

    /**
     * @module CategoryGui|Category|CmsBlockGui|CmsGui|ConfigurableBundleGui|ContentGui|CustomerGroup|Discount|FileManagerGui|Gui|MerchantGui|PaymentGui|ProductLabelGui|ProductListGui|ProductManagement|ProductOption|ProductRelationGui|ProductRelation|ProductSetGui|ShipmentGui|StockGui
     *
     * @param string|null $footerTemplate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFooterTemplateOrFail($footerTemplate)
    {
        if ($footerTemplate === null) {
            $this->throwNullValueException(static::FOOTER_TEMPLATE);
        }

        return $this->setFooterTemplate($footerTemplate);
    }

    /**
     * @module CategoryGui|Category|CmsBlockGui|CmsGui|ConfigurableBundleGui|ContentGui|CustomerGroup|Discount|FileManagerGui|Gui|MerchantGui|PaymentGui|ProductLabelGui|ProductListGui|ProductManagement|ProductOption|ProductRelationGui|ProductRelation|ProductSetGui|ShipmentGui|StockGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getFooterTemplateOrFail()
    {
        if ($this->footerTemplate === null) {
            $this->throwNullValueException(static::FOOTER_TEMPLATE);
        }

        return $this->footerTemplate;
    }

    /**
     * @module CategoryGui|Category|CmsBlockGui|CmsGui|ConfigurableBundleGui|ContentGui|CustomerGroup|Discount|FileManagerGui|Gui|MerchantGui|PaymentGui|ProductLabelGui|ProductListGui|ProductManagement|ProductOption|ProductRelationGui|ProductRelation|ProductSetGui|ShipmentGui|StockGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFooterTemplate()
    {
        $this->assertPropertyIsSet(self::FOOTER_TEMPLATE);

        return $this;
    }

    /**
     * @module CategoryGui|Category|CmsBlockGui|CmsGui|ConfigurableBundleGui|CustomerGroup|Discount|FileManagerGui|Gui|MerchantGui|PaymentGui|ProductLabelGui|ProductListGui|ProductManagement|ProductOption|ProductRelationGui|ProductRelation|ProductSetGui|ShipmentGui|StockGui
     *
     * @param bool|null $isNavigable
     *
     * @return $this
     */
    public function setIsNavigable($isNavigable)
    {
        $this->isNavigable = $isNavigable;
        $this->modifiedProperties[self::IS_NAVIGABLE] = true;

        return $this;
    }

    /**
     * @module CategoryGui|Category|CmsBlockGui|CmsGui|ConfigurableBundleGui|CustomerGroup|Discount|FileManagerGui|Gui|MerchantGui|PaymentGui|ProductLabelGui|ProductListGui|ProductManagement|ProductOption|ProductRelationGui|ProductRelation|ProductSetGui|ShipmentGui|StockGui
     *
     * @return bool|null
     */
    public function getIsNavigable()
    {
        return $this->isNavigable;
    }

    /**
     * @module CategoryGui|Category|CmsBlockGui|CmsGui|ConfigurableBundleGui|CustomerGroup|Discount|FileManagerGui|Gui|MerchantGui|PaymentGui|ProductLabelGui|ProductListGui|ProductManagement|ProductOption|ProductRelationGui|ProductRelation|ProductSetGui|ShipmentGui|StockGui
     *
     * @param bool|null $isNavigable
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsNavigableOrFail($isNavigable)
    {
        if ($isNavigable === null) {
            $this->throwNullValueException(static::IS_NAVIGABLE);
        }

        return $this->setIsNavigable($isNavigable);
    }

    /**
     * @module CategoryGui|Category|CmsBlockGui|CmsGui|ConfigurableBundleGui|CustomerGroup|Discount|FileManagerGui|Gui|MerchantGui|PaymentGui|ProductLabelGui|ProductListGui|ProductManagement|ProductOption|ProductRelationGui|ProductRelation|ProductSetGui|ShipmentGui|StockGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsNavigableOrFail()
    {
        if ($this->isNavigable === null) {
            $this->throwNullValueException(static::IS_NAVIGABLE);
        }

        return $this->isNavigable;
    }

    /**
     * @module CategoryGui|Category|CmsBlockGui|CmsGui|ConfigurableBundleGui|CustomerGroup|Discount|FileManagerGui|Gui|MerchantGui|PaymentGui|ProductLabelGui|ProductListGui|ProductManagement|ProductOption|ProductRelationGui|ProductRelation|ProductSetGui|ShipmentGui|StockGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsNavigable()
    {
        $this->assertPropertyIsSet(self::IS_NAVIGABLE);

        return $this;
    }

    /**
     * @module Gui|MerchantGui|PriceProductScheduleGui
     *
     * @param string|null $activeTabName
     *
     * @return $this
     */
    public function setActiveTabName($activeTabName)
    {
        $this->activeTabName = $activeTabName;
        $this->modifiedProperties[self::ACTIVE_TAB_NAME] = true;

        return $this;
    }

    /**
     * @module Gui|MerchantGui|PriceProductScheduleGui
     *
     * @return string|null
     */
    public function getActiveTabName()
    {
        return $this->activeTabName;
    }

    /**
     * @module Gui|MerchantGui|PriceProductScheduleGui
     *
     * @param string|null $activeTabName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setActiveTabNameOrFail($activeTabName)
    {
        if ($activeTabName === null) {
            $this->throwNullValueException(static::ACTIVE_TAB_NAME);
        }

        return $this->setActiveTabName($activeTabName);
    }

    /**
     * @module Gui|MerchantGui|PriceProductScheduleGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getActiveTabNameOrFail()
    {
        if ($this->activeTabName === null) {
            $this->throwNullValueException(static::ACTIVE_TAB_NAME);
        }

        return $this->activeTabName;
    }

    /**
     * @module Gui|MerchantGui|PriceProductScheduleGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireActiveTabName()
    {
        $this->assertPropertyIsSet(self::ACTIVE_TAB_NAME);

        return $this;
    }

    /**
     * @module Gui|MerchantGui
     *
     * @param bool|null $autoErrors
     *
     * @return $this
     */
    public function setAutoErrors($autoErrors)
    {
        $this->autoErrors = $autoErrors;
        $this->modifiedProperties[self::AUTO_ERRORS] = true;

        return $this;
    }

    /**
     * @module Gui|MerchantGui
     *
     * @return bool|null
     */
    public function getAutoErrors()
    {
        return $this->autoErrors;
    }

    /**
     * @module Gui|MerchantGui
     *
     * @param bool|null $autoErrors
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAutoErrorsOrFail($autoErrors)
    {
        if ($autoErrors === null) {
            $this->throwNullValueException(static::AUTO_ERRORS);
        }

        return $this->setAutoErrors($autoErrors);
    }

    /**
     * @module Gui|MerchantGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getAutoErrorsOrFail()
    {
        if ($this->autoErrors === null) {
            $this->throwNullValueException(static::AUTO_ERRORS);
        }

        return $this->autoErrors;
    }

    /**
     * @module Gui|MerchantGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAutoErrors()
    {
        $this->assertPropertyIsSet(self::AUTO_ERRORS);

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
                case 'footerTemplate':
                case 'isNavigable':
                case 'activeTabName':
                case 'autoErrors':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'tabs':
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
                case 'footerTemplate':
                case 'isNavigable':
                case 'activeTabName':
                case 'autoErrors':
                    $values[$arrayKey] = $value;

                    break;
                case 'tabs':
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
                case 'footerTemplate':
                case 'isNavigable':
                case 'activeTabName':
                case 'autoErrors':
                    $values[$arrayKey] = $value;

                    break;
                case 'tabs':
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
        $this->tabs = $this->tabs ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'footerTemplate' => $this->footerTemplate,
            'isNavigable' => $this->isNavigable,
            'activeTabName' => $this->activeTabName,
            'autoErrors' => $this->autoErrors,
            'tabs' => $this->tabs,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'footer_template' => $this->footerTemplate,
            'is_navigable' => $this->isNavigable,
            'active_tab_name' => $this->activeTabName,
            'auto_errors' => $this->autoErrors,
            'tabs' => $this->tabs,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'footer_template' => $this->footerTemplate instanceof AbstractTransfer ? $this->footerTemplate->toArray(true, false) : $this->footerTemplate,
            'is_navigable' => $this->isNavigable instanceof AbstractTransfer ? $this->isNavigable->toArray(true, false) : $this->isNavigable,
            'active_tab_name' => $this->activeTabName instanceof AbstractTransfer ? $this->activeTabName->toArray(true, false) : $this->activeTabName,
            'auto_errors' => $this->autoErrors instanceof AbstractTransfer ? $this->autoErrors->toArray(true, false) : $this->autoErrors,
            'tabs' => $this->tabs instanceof AbstractTransfer ? $this->tabs->toArray(true, false) : $this->addValuesToCollection($this->tabs, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'footerTemplate' => $this->footerTemplate instanceof AbstractTransfer ? $this->footerTemplate->toArray(true, true) : $this->footerTemplate,
            'isNavigable' => $this->isNavigable instanceof AbstractTransfer ? $this->isNavigable->toArray(true, true) : $this->isNavigable,
            'activeTabName' => $this->activeTabName instanceof AbstractTransfer ? $this->activeTabName->toArray(true, true) : $this->activeTabName,
            'autoErrors' => $this->autoErrors instanceof AbstractTransfer ? $this->autoErrors->toArray(true, true) : $this->autoErrors,
            'tabs' => $this->tabs instanceof AbstractTransfer ? $this->tabs->toArray(true, true) : $this->addValuesToCollection($this->tabs, true, true),
        ];
    }
}
