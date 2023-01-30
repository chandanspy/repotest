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
class ContentValidationResponseTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const IS_SUCCESS = 'isSuccess';

    /**
     * @var string
     */
    public const PARAMETER_MESSAGES = 'parameterMessages';

    /**
     * @var bool|null
     */
    protected $isSuccess;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ContentParameterMessageTransfer[]
     */
    protected $parameterMessages;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'is_success' => 'isSuccess',
        'isSuccess' => 'isSuccess',
        'IsSuccess' => 'isSuccess',
        'parameter_messages' => 'parameterMessages',
        'parameterMessages' => 'parameterMessages',
        'ParameterMessages' => 'parameterMessages',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::IS_SUCCESS => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_success',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PARAMETER_MESSAGES => [
            'type' => 'Generated\Shared\Transfer\ContentParameterMessageTransfer',
            'type_shim' => null,
            'name_underscore' => 'parameter_messages',
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
     * @module ContentBannerDataImport|ContentBannerGui|ContentBanner|ContentFileGui|ContentFile|ContentNavigationDataImport|ContentNavigationGui|ContentNavigation|ContentProductDataImport|ContentProductGui|ContentProductSetDataImport|ContentProduct|Content
     *
     * @param bool|null $isSuccess
     *
     * @return $this
     */
    public function setIsSuccess($isSuccess)
    {
        $this->isSuccess = $isSuccess;
        $this->modifiedProperties[self::IS_SUCCESS] = true;

        return $this;
    }

    /**
     * @module ContentBannerDataImport|ContentBannerGui|ContentBanner|ContentFileGui|ContentFile|ContentNavigationDataImport|ContentNavigationGui|ContentNavigation|ContentProductDataImport|ContentProductGui|ContentProductSetDataImport|ContentProduct|Content
     *
     * @return bool|null
     */
    public function getIsSuccess()
    {
        return $this->isSuccess;
    }

    /**
     * @module ContentBannerDataImport|ContentBannerGui|ContentBanner|ContentFileGui|ContentFile|ContentNavigationDataImport|ContentNavigationGui|ContentNavigation|ContentProductDataImport|ContentProductGui|ContentProductSetDataImport|ContentProduct|Content
     *
     * @param bool|null $isSuccess
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsSuccessOrFail($isSuccess)
    {
        if ($isSuccess === null) {
            $this->throwNullValueException(static::IS_SUCCESS);
        }

        return $this->setIsSuccess($isSuccess);
    }

    /**
     * @module ContentBannerDataImport|ContentBannerGui|ContentBanner|ContentFileGui|ContentFile|ContentNavigationDataImport|ContentNavigationGui|ContentNavigation|ContentProductDataImport|ContentProductGui|ContentProductSetDataImport|ContentProduct|Content
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsSuccessOrFail()
    {
        if ($this->isSuccess === null) {
            $this->throwNullValueException(static::IS_SUCCESS);
        }

        return $this->isSuccess;
    }

    /**
     * @module ContentBannerDataImport|ContentBannerGui|ContentBanner|ContentFileGui|ContentFile|ContentNavigationDataImport|ContentNavigationGui|ContentNavigation|ContentProductDataImport|ContentProductGui|ContentProductSetDataImport|ContentProduct|Content
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsSuccess()
    {
        $this->assertPropertyIsSet(self::IS_SUCCESS);

        return $this;
    }

    /**
     * @module ContentBannerDataImport|ContentBannerGui|ContentBanner|ContentFileGui|ContentFile|ContentNavigationDataImport|ContentNavigationGui|ContentNavigation|ContentProductDataImport|ContentProductGui|ContentProductSetDataImport|ContentProduct|Content
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ContentParameterMessageTransfer[] $parameterMessages
     *
     * @return $this
     */
    public function setParameterMessages(ArrayObject $parameterMessages)
    {
        $this->parameterMessages = $parameterMessages;
        $this->modifiedProperties[self::PARAMETER_MESSAGES] = true;

        return $this;
    }

    /**
     * @module ContentBannerDataImport|ContentBannerGui|ContentBanner|ContentFileGui|ContentFile|ContentNavigationDataImport|ContentNavigationGui|ContentNavigation|ContentProductDataImport|ContentProductGui|ContentProductSetDataImport|ContentProduct|Content
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ContentParameterMessageTransfer[]
     */
    public function getParameterMessages()
    {
        return $this->parameterMessages;
    }

    /**
     * @module ContentBannerDataImport|ContentBannerGui|ContentBanner|ContentFileGui|ContentFile|ContentNavigationDataImport|ContentNavigationGui|ContentNavigation|ContentProductDataImport|ContentProductGui|ContentProductSetDataImport|ContentProduct|Content
     *
     * @param \Generated\Shared\Transfer\ContentParameterMessageTransfer $parameterMessages
     *
     * @return $this
     */
    public function addParameterMessages(ContentParameterMessageTransfer $parameterMessages)
    {
        $this->parameterMessages[] = $parameterMessages;
        $this->modifiedProperties[self::PARAMETER_MESSAGES] = true;

        return $this;
    }

    /**
     * @module ContentBannerDataImport|ContentBannerGui|ContentBanner|ContentFileGui|ContentFile|ContentNavigationDataImport|ContentNavigationGui|ContentNavigation|ContentProductDataImport|ContentProductGui|ContentProductSetDataImport|ContentProduct|Content
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireParameterMessages()
    {
        $this->assertCollectionPropertyIsSet(self::PARAMETER_MESSAGES);

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
                case 'isSuccess':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'parameterMessages':
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
                case 'isSuccess':
                    $values[$arrayKey] = $value;

                    break;
                case 'parameterMessages':
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
                case 'isSuccess':
                    $values[$arrayKey] = $value;

                    break;
                case 'parameterMessages':
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
        $this->parameterMessages = $this->parameterMessages ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'isSuccess' => $this->isSuccess,
            'parameterMessages' => $this->parameterMessages,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'is_success' => $this->isSuccess,
            'parameter_messages' => $this->parameterMessages,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'is_success' => $this->isSuccess instanceof AbstractTransfer ? $this->isSuccess->toArray(true, false) : $this->isSuccess,
            'parameter_messages' => $this->parameterMessages instanceof AbstractTransfer ? $this->parameterMessages->toArray(true, false) : $this->addValuesToCollection($this->parameterMessages, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'isSuccess' => $this->isSuccess instanceof AbstractTransfer ? $this->isSuccess->toArray(true, true) : $this->isSuccess,
            'parameterMessages' => $this->parameterMessages instanceof AbstractTransfer ? $this->parameterMessages->toArray(true, true) : $this->addValuesToCollection($this->parameterMessages, true, true),
        ];
    }
}
