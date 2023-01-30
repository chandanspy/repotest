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
class FlattenedLocaleCmsPageDataRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_CMS_PAGE = 'idCmsPage';

    /**
     * @var string
     */
    public const FLATTENED_LOCALE_CMS_PAGE_DATA = 'flattenedLocaleCmsPageData';

    /**
     * @var string
     */
    public const LOCALE = 'locale';

    /**
     * @var int|null
     */
    protected $idCmsPage;

    /**
     * @var array
     */
    protected $flattenedLocaleCmsPageData = [];

    /**
     * @var \Generated\Shared\Transfer\LocaleTransfer|null
     */
    protected $locale;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_cms_page' => 'idCmsPage',
        'idCmsPage' => 'idCmsPage',
        'IdCmsPage' => 'idCmsPage',
        'flattened_locale_cms_page_data' => 'flattenedLocaleCmsPageData',
        'flattenedLocaleCmsPageData' => 'flattenedLocaleCmsPageData',
        'FlattenedLocaleCmsPageData' => 'flattenedLocaleCmsPageData',
        'locale' => 'locale',
        'Locale' => 'locale',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_CMS_PAGE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_cms_page',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FLATTENED_LOCALE_CMS_PAGE_DATA => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'flattened_locale_cms_page_data',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LOCALE => [
            'type' => 'Generated\Shared\Transfer\LocaleTransfer',
            'type_shim' => null,
            'name_underscore' => 'locale',
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
     * @module CmsPage|Cms
     *
     * @param int|null $idCmsPage
     *
     * @return $this
     */
    public function setIdCmsPage($idCmsPage)
    {
        $this->idCmsPage = $idCmsPage;
        $this->modifiedProperties[self::ID_CMS_PAGE] = true;

        return $this;
    }

    /**
     * @module CmsPage|Cms
     *
     * @return int|null
     */
    public function getIdCmsPage()
    {
        return $this->idCmsPage;
    }

    /**
     * @module CmsPage|Cms
     *
     * @param int|null $idCmsPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCmsPageOrFail($idCmsPage)
    {
        if ($idCmsPage === null) {
            $this->throwNullValueException(static::ID_CMS_PAGE);
        }

        return $this->setIdCmsPage($idCmsPage);
    }

    /**
     * @module CmsPage|Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCmsPageOrFail()
    {
        if ($this->idCmsPage === null) {
            $this->throwNullValueException(static::ID_CMS_PAGE);
        }

        return $this->idCmsPage;
    }

    /**
     * @module CmsPage|Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCmsPage()
    {
        $this->assertPropertyIsSet(self::ID_CMS_PAGE);

        return $this;
    }

    /**
     * @module CmsPage|Cms
     *
     * @param array|null $flattenedLocaleCmsPageData
     *
     * @return $this
     */
    public function setFlattenedLocaleCmsPageData(array $flattenedLocaleCmsPageData = null)
    {
        if ($flattenedLocaleCmsPageData === null) {
            $flattenedLocaleCmsPageData = [];
        }

        $this->flattenedLocaleCmsPageData = $flattenedLocaleCmsPageData;
        $this->modifiedProperties[self::FLATTENED_LOCALE_CMS_PAGE_DATA] = true;

        return $this;
    }

    /**
     * @module CmsPage|Cms
     *
     * @return array
     */
    public function getFlattenedLocaleCmsPageData()
    {
        return $this->flattenedLocaleCmsPageData;
    }

    /**
     * @module CmsPage|Cms
     *
     * @param mixed $flattenedLocaleCmsPageData
     *
     * @return $this
     */
    public function addFlattenedLocaleCmsPageData($flattenedLocaleCmsPageData)
    {
        $this->flattenedLocaleCmsPageData[] = $flattenedLocaleCmsPageData;
        $this->modifiedProperties[self::FLATTENED_LOCALE_CMS_PAGE_DATA] = true;

        return $this;
    }

    /**
     * @module CmsPage|Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFlattenedLocaleCmsPageData()
    {
        $this->assertPropertyIsSet(self::FLATTENED_LOCALE_CMS_PAGE_DATA);

        return $this;
    }

    /**
     * @module CmsPage|Cms
     *
     * @param \Generated\Shared\Transfer\LocaleTransfer|null $locale
     *
     * @return $this
     */
    public function setLocale(LocaleTransfer $locale = null)
    {
        $this->locale = $locale;
        $this->modifiedProperties[self::LOCALE] = true;

        return $this;
    }

    /**
     * @module CmsPage|Cms
     *
     * @return \Generated\Shared\Transfer\LocaleTransfer|null
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @module CmsPage|Cms
     *
     * @param \Generated\Shared\Transfer\LocaleTransfer $locale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLocaleOrFail(LocaleTransfer $locale)
    {
        return $this->setLocale($locale);
    }

    /**
     * @module CmsPage|Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\LocaleTransfer
     */
    public function getLocaleOrFail()
    {
        if ($this->locale === null) {
            $this->throwNullValueException(static::LOCALE);
        }

        return $this->locale;
    }

    /**
     * @module CmsPage|Cms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocale()
    {
        $this->assertPropertyIsSet(self::LOCALE);

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
                case 'idCmsPage':
                case 'flattenedLocaleCmsPageData':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'locale':
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
                case 'idCmsPage':
                case 'flattenedLocaleCmsPageData':
                    $values[$arrayKey] = $value;

                    break;
                case 'locale':
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
                case 'idCmsPage':
                case 'flattenedLocaleCmsPageData':
                    $values[$arrayKey] = $value;

                    break;
                case 'locale':
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
            'idCmsPage' => $this->idCmsPage,
            'flattenedLocaleCmsPageData' => $this->flattenedLocaleCmsPageData,
            'locale' => $this->locale,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_cms_page' => $this->idCmsPage,
            'flattened_locale_cms_page_data' => $this->flattenedLocaleCmsPageData,
            'locale' => $this->locale,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_cms_page' => $this->idCmsPage instanceof AbstractTransfer ? $this->idCmsPage->toArray(true, false) : $this->idCmsPage,
            'flattened_locale_cms_page_data' => $this->flattenedLocaleCmsPageData instanceof AbstractTransfer ? $this->flattenedLocaleCmsPageData->toArray(true, false) : $this->flattenedLocaleCmsPageData,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, false) : $this->locale,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCmsPage' => $this->idCmsPage instanceof AbstractTransfer ? $this->idCmsPage->toArray(true, true) : $this->idCmsPage,
            'flattenedLocaleCmsPageData' => $this->flattenedLocaleCmsPageData instanceof AbstractTransfer ? $this->flattenedLocaleCmsPageData->toArray(true, true) : $this->flattenedLocaleCmsPageData,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, true) : $this->locale,
        ];
    }
}
