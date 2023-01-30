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
class ValidationResponseTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const IS_SUCCESS = 'isSuccess';

    /**
     * @var string
     */
    public const ERROR_MESSAGES = 'errorMessages';

    /**
     * @var string
     */
    public const CONSTRAINT_VIOLATIONS = 'constraintViolations';

    /**
     * @var string
     */
    public const VALIDATION_ERRORS = 'validationErrors';

    /**
     * @var bool|null
     */
    protected $isSuccess;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\MessageTransfer[]
     */
    protected $errorMessages;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ConstraintViolationTransfer[]
     */
    protected $constraintViolations;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ValidationErrorTransfer[]
     */
    protected $validationErrors;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'is_success' => 'isSuccess',
        'isSuccess' => 'isSuccess',
        'IsSuccess' => 'isSuccess',
        'error_messages' => 'errorMessages',
        'errorMessages' => 'errorMessages',
        'ErrorMessages' => 'errorMessages',
        'constraint_violations' => 'constraintViolations',
        'constraintViolations' => 'constraintViolations',
        'ConstraintViolations' => 'constraintViolations',
        'validation_errors' => 'validationErrors',
        'validationErrors' => 'validationErrors',
        'ValidationErrors' => 'validationErrors',
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
        self::ERROR_MESSAGES => [
            'type' => 'Generated\Shared\Transfer\MessageTransfer',
            'type_shim' => null,
            'name_underscore' => 'error_messages',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONSTRAINT_VIOLATIONS => [
            'type' => 'Generated\Shared\Transfer\ConstraintViolationTransfer',
            'type_shim' => null,
            'name_underscore' => 'constraint_violations',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::VALIDATION_ERRORS => [
            'type' => 'Generated\Shared\Transfer\ValidationErrorTransfer',
            'type_shim' => null,
            'name_underscore' => 'validation_errors',
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
     * @module CmsSlotBlock|CmsSlotDataImport|CmsSlot|PriceProductVolume|PriceProduct
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
     * @module CmsSlotBlock|CmsSlotDataImport|CmsSlot|PriceProductVolume|PriceProduct
     *
     * @return bool|null
     */
    public function getIsSuccess()
    {
        return $this->isSuccess;
    }

    /**
     * @module CmsSlotBlock|CmsSlotDataImport|CmsSlot|PriceProductVolume|PriceProduct
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
     * @module CmsSlotBlock|CmsSlotDataImport|CmsSlot|PriceProductVolume|PriceProduct
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
     * @module CmsSlotBlock|CmsSlotDataImport|CmsSlot|PriceProductVolume|PriceProduct
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
     * @module CmsSlotBlock
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\MessageTransfer[] $errorMessages
     *
     * @return $this
     */
    public function setErrorMessages(ArrayObject $errorMessages)
    {
        $this->errorMessages = $errorMessages;
        $this->modifiedProperties[self::ERROR_MESSAGES] = true;

        return $this;
    }

    /**
     * @module CmsSlotBlock
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\MessageTransfer[]
     */
    public function getErrorMessages()
    {
        return $this->errorMessages;
    }

    /**
     * @module CmsSlotBlock
     *
     * @param \Generated\Shared\Transfer\MessageTransfer $errorMessage
     *
     * @return $this
     */
    public function addErrorMessage(MessageTransfer $errorMessage)
    {
        $this->errorMessages[] = $errorMessage;
        $this->modifiedProperties[self::ERROR_MESSAGES] = true;

        return $this;
    }

    /**
     * @module CmsSlotBlock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireErrorMessages()
    {
        $this->assertCollectionPropertyIsSet(self::ERROR_MESSAGES);

        return $this;
    }

    /**
     * @module CmsSlotDataImport|CmsSlot
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ConstraintViolationTransfer[] $constraintViolations
     *
     * @return $this
     */
    public function setConstraintViolations(ArrayObject $constraintViolations)
    {
        $this->constraintViolations = $constraintViolations;
        $this->modifiedProperties[self::CONSTRAINT_VIOLATIONS] = true;

        return $this;
    }

    /**
     * @module CmsSlotDataImport|CmsSlot
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ConstraintViolationTransfer[]
     */
    public function getConstraintViolations()
    {
        return $this->constraintViolations;
    }

    /**
     * @module CmsSlotDataImport|CmsSlot
     *
     * @param \Generated\Shared\Transfer\ConstraintViolationTransfer $constraintViolations
     *
     * @return $this
     */
    public function addConstraintViolations(ConstraintViolationTransfer $constraintViolations)
    {
        $this->constraintViolations[] = $constraintViolations;
        $this->modifiedProperties[self::CONSTRAINT_VIOLATIONS] = true;

        return $this;
    }

    /**
     * @module CmsSlotDataImport|CmsSlot
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConstraintViolations()
    {
        $this->assertCollectionPropertyIsSet(self::CONSTRAINT_VIOLATIONS);

        return $this;
    }

    /**
     * @module PriceProductVolume|PriceProduct
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ValidationErrorTransfer[] $validationErrors
     *
     * @return $this
     */
    public function setValidationErrors(ArrayObject $validationErrors)
    {
        $this->validationErrors = $validationErrors;
        $this->modifiedProperties[self::VALIDATION_ERRORS] = true;

        return $this;
    }

    /**
     * @module PriceProductVolume|PriceProduct
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ValidationErrorTransfer[]
     */
    public function getValidationErrors()
    {
        return $this->validationErrors;
    }

    /**
     * @module PriceProductVolume|PriceProduct
     *
     * @param \Generated\Shared\Transfer\ValidationErrorTransfer $validationError
     *
     * @return $this
     */
    public function addValidationError(ValidationErrorTransfer $validationError)
    {
        $this->validationErrors[] = $validationError;
        $this->modifiedProperties[self::VALIDATION_ERRORS] = true;

        return $this;
    }

    /**
     * @module PriceProductVolume|PriceProduct
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireValidationErrors()
    {
        $this->assertCollectionPropertyIsSet(self::VALIDATION_ERRORS);

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
                case 'errorMessages':
                case 'constraintViolations':
                case 'validationErrors':
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
                case 'errorMessages':
                case 'constraintViolations':
                case 'validationErrors':
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
                case 'errorMessages':
                case 'constraintViolations':
                case 'validationErrors':
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
        $this->errorMessages = $this->errorMessages ?: new ArrayObject();
        $this->constraintViolations = $this->constraintViolations ?: new ArrayObject();
        $this->validationErrors = $this->validationErrors ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'isSuccess' => $this->isSuccess,
            'errorMessages' => $this->errorMessages,
            'constraintViolations' => $this->constraintViolations,
            'validationErrors' => $this->validationErrors,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'is_success' => $this->isSuccess,
            'error_messages' => $this->errorMessages,
            'constraint_violations' => $this->constraintViolations,
            'validation_errors' => $this->validationErrors,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'is_success' => $this->isSuccess instanceof AbstractTransfer ? $this->isSuccess->toArray(true, false) : $this->isSuccess,
            'error_messages' => $this->errorMessages instanceof AbstractTransfer ? $this->errorMessages->toArray(true, false) : $this->addValuesToCollection($this->errorMessages, true, false),
            'constraint_violations' => $this->constraintViolations instanceof AbstractTransfer ? $this->constraintViolations->toArray(true, false) : $this->addValuesToCollection($this->constraintViolations, true, false),
            'validation_errors' => $this->validationErrors instanceof AbstractTransfer ? $this->validationErrors->toArray(true, false) : $this->addValuesToCollection($this->validationErrors, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'isSuccess' => $this->isSuccess instanceof AbstractTransfer ? $this->isSuccess->toArray(true, true) : $this->isSuccess,
            'errorMessages' => $this->errorMessages instanceof AbstractTransfer ? $this->errorMessages->toArray(true, true) : $this->addValuesToCollection($this->errorMessages, true, true),
            'constraintViolations' => $this->constraintViolations instanceof AbstractTransfer ? $this->constraintViolations->toArray(true, true) : $this->addValuesToCollection($this->constraintViolations, true, true),
            'validationErrors' => $this->validationErrors instanceof AbstractTransfer ? $this->validationErrors->toArray(true, true) : $this->addValuesToCollection($this->validationErrors, true, true),
        ];
    }
}
