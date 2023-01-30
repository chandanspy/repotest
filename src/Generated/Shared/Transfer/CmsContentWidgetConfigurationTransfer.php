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
class CmsContentWidgetConfigurationTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const TEMPLATES = 'templates';

    /**
     * @var string
     */
    public const USAGE_INFORMATION = 'usageInformation';

    /**
     * @var string
     */
    public const FUNCTION_NAME = 'functionName';

    /**
     * @var array
     */
    protected $templates = [];

    /**
     * @var string|null
     */
    protected $usageInformation;

    /**
     * @var string|null
     */
    protected $functionName;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'templates' => 'templates',
        'Templates' => 'templates',
        'usage_information' => 'usageInformation',
        'usageInformation' => 'usageInformation',
        'UsageInformation' => 'usageInformation',
        'function_name' => 'functionName',
        'functionName' => 'functionName',
        'FunctionName' => 'functionName',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::TEMPLATES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'templates',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::USAGE_INFORMATION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'usage_information',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FUNCTION_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'function_name',
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
     * @module CmsContentWidget
     *
     * @param array|null $templates
     *
     * @return $this
     */
    public function setTemplates(array $templates = null)
    {
        if ($templates === null) {
            $templates = [];
        }

        $this->templates = $templates;
        $this->modifiedProperties[self::TEMPLATES] = true;

        return $this;
    }

    /**
     * @module CmsContentWidget
     *
     * @return array
     */
    public function getTemplates()
    {
        return $this->templates;
    }

    /**
     * @module CmsContentWidget
     *
     * @param mixed $template
     *
     * @return $this
     */
    public function addTemplate($template)
    {
        $this->templates[] = $template;
        $this->modifiedProperties[self::TEMPLATES] = true;

        return $this;
    }

    /**
     * @module CmsContentWidget
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTemplates()
    {
        $this->assertPropertyIsSet(self::TEMPLATES);

        return $this;
    }

    /**
     * @module CmsContentWidget
     *
     * @param string|null $usageInformation
     *
     * @return $this
     */
    public function setUsageInformation($usageInformation)
    {
        $this->usageInformation = $usageInformation;
        $this->modifiedProperties[self::USAGE_INFORMATION] = true;

        return $this;
    }

    /**
     * @module CmsContentWidget
     *
     * @return string|null
     */
    public function getUsageInformation()
    {
        return $this->usageInformation;
    }

    /**
     * @module CmsContentWidget
     *
     * @param string|null $usageInformation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUsageInformationOrFail($usageInformation)
    {
        if ($usageInformation === null) {
            $this->throwNullValueException(static::USAGE_INFORMATION);
        }

        return $this->setUsageInformation($usageInformation);
    }

    /**
     * @module CmsContentWidget
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUsageInformationOrFail()
    {
        if ($this->usageInformation === null) {
            $this->throwNullValueException(static::USAGE_INFORMATION);
        }

        return $this->usageInformation;
    }

    /**
     * @module CmsContentWidget
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUsageInformation()
    {
        $this->assertPropertyIsSet(self::USAGE_INFORMATION);

        return $this;
    }

    /**
     * @module CmsContentWidget
     *
     * @param string|null $functionName
     *
     * @return $this
     */
    public function setFunctionName($functionName)
    {
        $this->functionName = $functionName;
        $this->modifiedProperties[self::FUNCTION_NAME] = true;

        return $this;
    }

    /**
     * @module CmsContentWidget
     *
     * @return string|null
     */
    public function getFunctionName()
    {
        return $this->functionName;
    }

    /**
     * @module CmsContentWidget
     *
     * @param string|null $functionName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFunctionNameOrFail($functionName)
    {
        if ($functionName === null) {
            $this->throwNullValueException(static::FUNCTION_NAME);
        }

        return $this->setFunctionName($functionName);
    }

    /**
     * @module CmsContentWidget
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getFunctionNameOrFail()
    {
        if ($this->functionName === null) {
            $this->throwNullValueException(static::FUNCTION_NAME);
        }

        return $this->functionName;
    }

    /**
     * @module CmsContentWidget
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFunctionName()
    {
        $this->assertPropertyIsSet(self::FUNCTION_NAME);

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
                case 'templates':
                case 'usageInformation':
                case 'functionName':
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
                case 'templates':
                case 'usageInformation':
                case 'functionName':
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
                case 'templates':
                case 'usageInformation':
                case 'functionName':
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
            'templates' => $this->templates,
            'usageInformation' => $this->usageInformation,
            'functionName' => $this->functionName,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'templates' => $this->templates,
            'usage_information' => $this->usageInformation,
            'function_name' => $this->functionName,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'templates' => $this->templates instanceof AbstractTransfer ? $this->templates->toArray(true, false) : $this->templates,
            'usage_information' => $this->usageInformation instanceof AbstractTransfer ? $this->usageInformation->toArray(true, false) : $this->usageInformation,
            'function_name' => $this->functionName instanceof AbstractTransfer ? $this->functionName->toArray(true, false) : $this->functionName,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'templates' => $this->templates instanceof AbstractTransfer ? $this->templates->toArray(true, true) : $this->templates,
            'usageInformation' => $this->usageInformation instanceof AbstractTransfer ? $this->usageInformation->toArray(true, true) : $this->usageInformation,
            'functionName' => $this->functionName instanceof AbstractTransfer ? $this->functionName->toArray(true, true) : $this->functionName,
        ];
    }
}
