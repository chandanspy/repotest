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
class ContentBannerTermTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const TITLE = 'title';

    /**
     * @var string
     */
    public const SUBTITLE = 'subtitle';

    /**
     * @var string
     */
    public const IMAGE_URL = 'imageUrl';

    /**
     * @var string
     */
    public const CLICK_URL = 'clickUrl';

    /**
     * @var string
     */
    public const ALT_TEXT = 'altText';

    /**
     * @var string|null
     */
    protected $title;

    /**
     * @var string|null
     */
    protected $subtitle;

    /**
     * @var string|null
     */
    protected $imageUrl;

    /**
     * @var string|null
     */
    protected $clickUrl;

    /**
     * @var string|null
     */
    protected $altText;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'title' => 'title',
        'Title' => 'title',
        'subtitle' => 'subtitle',
        'Subtitle' => 'subtitle',
        'image_url' => 'imageUrl',
        'imageUrl' => 'imageUrl',
        'ImageUrl' => 'imageUrl',
        'click_url' => 'clickUrl',
        'clickUrl' => 'clickUrl',
        'ClickUrl' => 'clickUrl',
        'alt_text' => 'altText',
        'altText' => 'altText',
        'AltText' => 'altText',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::TITLE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'title',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SUBTITLE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'subtitle',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IMAGE_URL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'image_url',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CLICK_URL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'click_url',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ALT_TEXT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'alt_text',
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
     * @module ContentBanner
     *
     * @param string|null $title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        $this->modifiedProperties[self::TITLE] = true;

        return $this;
    }

    /**
     * @module ContentBanner
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @module ContentBanner
     *
     * @param string|null $title
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTitleOrFail($title)
    {
        if ($title === null) {
            $this->throwNullValueException(static::TITLE);
        }

        return $this->setTitle($title);
    }

    /**
     * @module ContentBanner
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTitleOrFail()
    {
        if ($this->title === null) {
            $this->throwNullValueException(static::TITLE);
        }

        return $this->title;
    }

    /**
     * @module ContentBanner
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTitle()
    {
        $this->assertPropertyIsSet(self::TITLE);

        return $this;
    }

    /**
     * @module ContentBanner
     *
     * @param string|null $subtitle
     *
     * @return $this
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;
        $this->modifiedProperties[self::SUBTITLE] = true;

        return $this;
    }

    /**
     * @module ContentBanner
     *
     * @return string|null
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * @module ContentBanner
     *
     * @param string|null $subtitle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSubtitleOrFail($subtitle)
    {
        if ($subtitle === null) {
            $this->throwNullValueException(static::SUBTITLE);
        }

        return $this->setSubtitle($subtitle);
    }

    /**
     * @module ContentBanner
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSubtitleOrFail()
    {
        if ($this->subtitle === null) {
            $this->throwNullValueException(static::SUBTITLE);
        }

        return $this->subtitle;
    }

    /**
     * @module ContentBanner
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSubtitle()
    {
        $this->assertPropertyIsSet(self::SUBTITLE);

        return $this;
    }

    /**
     * @module ContentBanner
     *
     * @param string|null $imageUrl
     *
     * @return $this
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
        $this->modifiedProperties[self::IMAGE_URL] = true;

        return $this;
    }

    /**
     * @module ContentBanner
     *
     * @return string|null
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * @module ContentBanner
     *
     * @param string|null $imageUrl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setImageUrlOrFail($imageUrl)
    {
        if ($imageUrl === null) {
            $this->throwNullValueException(static::IMAGE_URL);
        }

        return $this->setImageUrl($imageUrl);
    }

    /**
     * @module ContentBanner
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getImageUrlOrFail()
    {
        if ($this->imageUrl === null) {
            $this->throwNullValueException(static::IMAGE_URL);
        }

        return $this->imageUrl;
    }

    /**
     * @module ContentBanner
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireImageUrl()
    {
        $this->assertPropertyIsSet(self::IMAGE_URL);

        return $this;
    }

    /**
     * @module ContentBanner
     *
     * @param string|null $clickUrl
     *
     * @return $this
     */
    public function setClickUrl($clickUrl)
    {
        $this->clickUrl = $clickUrl;
        $this->modifiedProperties[self::CLICK_URL] = true;

        return $this;
    }

    /**
     * @module ContentBanner
     *
     * @return string|null
     */
    public function getClickUrl()
    {
        return $this->clickUrl;
    }

    /**
     * @module ContentBanner
     *
     * @param string|null $clickUrl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setClickUrlOrFail($clickUrl)
    {
        if ($clickUrl === null) {
            $this->throwNullValueException(static::CLICK_URL);
        }

        return $this->setClickUrl($clickUrl);
    }

    /**
     * @module ContentBanner
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getClickUrlOrFail()
    {
        if ($this->clickUrl === null) {
            $this->throwNullValueException(static::CLICK_URL);
        }

        return $this->clickUrl;
    }

    /**
     * @module ContentBanner
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireClickUrl()
    {
        $this->assertPropertyIsSet(self::CLICK_URL);

        return $this;
    }

    /**
     * @module ContentBanner
     *
     * @param string|null $altText
     *
     * @return $this
     */
    public function setAltText($altText)
    {
        $this->altText = $altText;
        $this->modifiedProperties[self::ALT_TEXT] = true;

        return $this;
    }

    /**
     * @module ContentBanner
     *
     * @return string|null
     */
    public function getAltText()
    {
        return $this->altText;
    }

    /**
     * @module ContentBanner
     *
     * @param string|null $altText
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAltTextOrFail($altText)
    {
        if ($altText === null) {
            $this->throwNullValueException(static::ALT_TEXT);
        }

        return $this->setAltText($altText);
    }

    /**
     * @module ContentBanner
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getAltTextOrFail()
    {
        if ($this->altText === null) {
            $this->throwNullValueException(static::ALT_TEXT);
        }

        return $this->altText;
    }

    /**
     * @module ContentBanner
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAltText()
    {
        $this->assertPropertyIsSet(self::ALT_TEXT);

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
                case 'title':
                case 'subtitle':
                case 'imageUrl':
                case 'clickUrl':
                case 'altText':
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
                case 'title':
                case 'subtitle':
                case 'imageUrl':
                case 'clickUrl':
                case 'altText':
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
                case 'title':
                case 'subtitle':
                case 'imageUrl':
                case 'clickUrl':
                case 'altText':
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
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'imageUrl' => $this->imageUrl,
            'clickUrl' => $this->clickUrl,
            'altText' => $this->altText,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'image_url' => $this->imageUrl,
            'click_url' => $this->clickUrl,
            'alt_text' => $this->altText,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'title' => $this->title instanceof AbstractTransfer ? $this->title->toArray(true, false) : $this->title,
            'subtitle' => $this->subtitle instanceof AbstractTransfer ? $this->subtitle->toArray(true, false) : $this->subtitle,
            'image_url' => $this->imageUrl instanceof AbstractTransfer ? $this->imageUrl->toArray(true, false) : $this->imageUrl,
            'click_url' => $this->clickUrl instanceof AbstractTransfer ? $this->clickUrl->toArray(true, false) : $this->clickUrl,
            'alt_text' => $this->altText instanceof AbstractTransfer ? $this->altText->toArray(true, false) : $this->altText,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'title' => $this->title instanceof AbstractTransfer ? $this->title->toArray(true, true) : $this->title,
            'subtitle' => $this->subtitle instanceof AbstractTransfer ? $this->subtitle->toArray(true, true) : $this->subtitle,
            'imageUrl' => $this->imageUrl instanceof AbstractTransfer ? $this->imageUrl->toArray(true, true) : $this->imageUrl,
            'clickUrl' => $this->clickUrl instanceof AbstractTransfer ? $this->clickUrl->toArray(true, true) : $this->clickUrl,
            'altText' => $this->altText instanceof AbstractTransfer ? $this->altText->toArray(true, true) : $this->altText,
        ];
    }
}
