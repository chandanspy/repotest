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
class TwigExpressionTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const CONTENT = 'content';

    /**
     * @var string
     */
    public const CONTENT_WIDGET_TEMPLATE = 'contentWidgetTemplate';

    /**
     * @var string
     */
    public const TWIG_EXPRESSION = 'twigExpression';

    /**
     * @var \Generated\Shared\Transfer\ContentTransfer|null
     */
    protected $content;

    /**
     * @var \Generated\Shared\Transfer\ContentWidgetTemplateTransfer|null
     */
    protected $contentWidgetTemplate;

    /**
     * @var string|null
     */
    protected $twigExpression;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'content' => 'content',
        'Content' => 'content',
        'content_widget_template' => 'contentWidgetTemplate',
        'contentWidgetTemplate' => 'contentWidgetTemplate',
        'ContentWidgetTemplate' => 'contentWidgetTemplate',
        'twig_expression' => 'twigExpression',
        'twigExpression' => 'twigExpression',
        'TwigExpression' => 'twigExpression',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::CONTENT => [
            'type' => 'Generated\Shared\Transfer\ContentTransfer',
            'type_shim' => null,
            'name_underscore' => 'content',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONTENT_WIDGET_TEMPLATE => [
            'type' => 'Generated\Shared\Transfer\ContentWidgetTemplateTransfer',
            'type_shim' => null,
            'name_underscore' => 'content_widget_template',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TWIG_EXPRESSION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'twig_expression',
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
     * @module ContentGui
     *
     * @param \Generated\Shared\Transfer\ContentTransfer|null $content
     *
     * @return $this
     */
    public function setContent(ContentTransfer $content = null)
    {
        $this->content = $content;
        $this->modifiedProperties[self::CONTENT] = true;

        return $this;
    }

    /**
     * @module ContentGui
     *
     * @return \Generated\Shared\Transfer\ContentTransfer|null
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @module ContentGui
     *
     * @param \Generated\Shared\Transfer\ContentTransfer $content
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setContentOrFail(ContentTransfer $content)
    {
        return $this->setContent($content);
    }

    /**
     * @module ContentGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ContentTransfer
     */
    public function getContentOrFail()
    {
        if ($this->content === null) {
            $this->throwNullValueException(static::CONTENT);
        }

        return $this->content;
    }

    /**
     * @module ContentGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireContent()
    {
        $this->assertPropertyIsSet(self::CONTENT);

        return $this;
    }

    /**
     * @module ContentGui
     *
     * @param \Generated\Shared\Transfer\ContentWidgetTemplateTransfer|null $contentWidgetTemplate
     *
     * @return $this
     */
    public function setContentWidgetTemplate(ContentWidgetTemplateTransfer $contentWidgetTemplate = null)
    {
        $this->contentWidgetTemplate = $contentWidgetTemplate;
        $this->modifiedProperties[self::CONTENT_WIDGET_TEMPLATE] = true;

        return $this;
    }

    /**
     * @module ContentGui
     *
     * @return \Generated\Shared\Transfer\ContentWidgetTemplateTransfer|null
     */
    public function getContentWidgetTemplate()
    {
        return $this->contentWidgetTemplate;
    }

    /**
     * @module ContentGui
     *
     * @param \Generated\Shared\Transfer\ContentWidgetTemplateTransfer $contentWidgetTemplate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setContentWidgetTemplateOrFail(ContentWidgetTemplateTransfer $contentWidgetTemplate)
    {
        return $this->setContentWidgetTemplate($contentWidgetTemplate);
    }

    /**
     * @module ContentGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ContentWidgetTemplateTransfer
     */
    public function getContentWidgetTemplateOrFail()
    {
        if ($this->contentWidgetTemplate === null) {
            $this->throwNullValueException(static::CONTENT_WIDGET_TEMPLATE);
        }

        return $this->contentWidgetTemplate;
    }

    /**
     * @module ContentGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireContentWidgetTemplate()
    {
        $this->assertPropertyIsSet(self::CONTENT_WIDGET_TEMPLATE);

        return $this;
    }

    /**
     * @module ContentGui
     *
     * @param string|null $twigExpression
     *
     * @return $this
     */
    public function setTwigExpression($twigExpression)
    {
        $this->twigExpression = $twigExpression;
        $this->modifiedProperties[self::TWIG_EXPRESSION] = true;

        return $this;
    }

    /**
     * @module ContentGui
     *
     * @return string|null
     */
    public function getTwigExpression()
    {
        return $this->twigExpression;
    }

    /**
     * @module ContentGui
     *
     * @param string|null $twigExpression
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTwigExpressionOrFail($twigExpression)
    {
        if ($twigExpression === null) {
            $this->throwNullValueException(static::TWIG_EXPRESSION);
        }

        return $this->setTwigExpression($twigExpression);
    }

    /**
     * @module ContentGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTwigExpressionOrFail()
    {
        if ($this->twigExpression === null) {
            $this->throwNullValueException(static::TWIG_EXPRESSION);
        }

        return $this->twigExpression;
    }

    /**
     * @module ContentGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTwigExpression()
    {
        $this->assertPropertyIsSet(self::TWIG_EXPRESSION);

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
                case 'twigExpression':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'content':
                case 'contentWidgetTemplate':
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
                case 'twigExpression':
                    $values[$arrayKey] = $value;

                    break;
                case 'content':
                case 'contentWidgetTemplate':
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
                case 'twigExpression':
                    $values[$arrayKey] = $value;

                    break;
                case 'content':
                case 'contentWidgetTemplate':
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
            'twigExpression' => $this->twigExpression,
            'content' => $this->content,
            'contentWidgetTemplate' => $this->contentWidgetTemplate,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'twig_expression' => $this->twigExpression,
            'content' => $this->content,
            'content_widget_template' => $this->contentWidgetTemplate,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'twig_expression' => $this->twigExpression instanceof AbstractTransfer ? $this->twigExpression->toArray(true, false) : $this->twigExpression,
            'content' => $this->content instanceof AbstractTransfer ? $this->content->toArray(true, false) : $this->content,
            'content_widget_template' => $this->contentWidgetTemplate instanceof AbstractTransfer ? $this->contentWidgetTemplate->toArray(true, false) : $this->contentWidgetTemplate,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'twigExpression' => $this->twigExpression instanceof AbstractTransfer ? $this->twigExpression->toArray(true, true) : $this->twigExpression,
            'content' => $this->content instanceof AbstractTransfer ? $this->content->toArray(true, true) : $this->content,
            'contentWidgetTemplate' => $this->contentWidgetTemplate instanceof AbstractTransfer ? $this->contentWidgetTemplate->toArray(true, true) : $this->contentWidgetTemplate,
        ];
    }
}
