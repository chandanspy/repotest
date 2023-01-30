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
class CompanyUserResponseTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const IS_SUCCESSFUL = 'isSuccessful';

    /**
     * @var string
     */
    public const COMPANY_USER = 'companyUser';

    /**
     * @var string
     */
    public const MESSAGES = 'messages';

    /**
     * @var bool|null
     */
    protected $isSuccessful;

    /**
     * @var \Generated\Shared\Transfer\CompanyUserTransfer|null
     */
    protected $companyUser;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ResponseMessageTransfer[]
     */
    protected $messages;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'is_successful' => 'isSuccessful',
        'isSuccessful' => 'isSuccessful',
        'IsSuccessful' => 'isSuccessful',
        'company_user' => 'companyUser',
        'companyUser' => 'companyUser',
        'CompanyUser' => 'companyUser',
        'messages' => 'messages',
        'Messages' => 'messages',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::IS_SUCCESSFUL => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_successful',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COMPANY_USER => [
            'type' => 'Generated\Shared\Transfer\CompanyUserTransfer',
            'type_shim' => null,
            'name_underscore' => 'company_user',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MESSAGES => [
            'type' => 'Generated\Shared\Transfer\ResponseMessageTransfer',
            'type_shim' => null,
            'name_underscore' => 'messages',
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
     * @module CompanyPage|BusinessOnBehalfGui|CompanyBusinessUnit|CompanyRole|CompanyUserGui|CompanyUserInvitation|CompanyUser
     *
     * @param bool|null $isSuccessful
     *
     * @return $this
     */
    public function setIsSuccessful($isSuccessful)
    {
        $this->isSuccessful = $isSuccessful;
        $this->modifiedProperties[self::IS_SUCCESSFUL] = true;

        return $this;
    }

    /**
     * @module CompanyPage|BusinessOnBehalfGui|CompanyBusinessUnit|CompanyRole|CompanyUserGui|CompanyUserInvitation|CompanyUser
     *
     * @return bool|null
     */
    public function getIsSuccessful()
    {
        return $this->isSuccessful;
    }

    /**
     * @module CompanyPage|BusinessOnBehalfGui|CompanyBusinessUnit|CompanyRole|CompanyUserGui|CompanyUserInvitation|CompanyUser
     *
     * @param bool|null $isSuccessful
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsSuccessfulOrFail($isSuccessful)
    {
        if ($isSuccessful === null) {
            $this->throwNullValueException(static::IS_SUCCESSFUL);
        }

        return $this->setIsSuccessful($isSuccessful);
    }

    /**
     * @module CompanyPage|BusinessOnBehalfGui|CompanyBusinessUnit|CompanyRole|CompanyUserGui|CompanyUserInvitation|CompanyUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsSuccessfulOrFail()
    {
        if ($this->isSuccessful === null) {
            $this->throwNullValueException(static::IS_SUCCESSFUL);
        }

        return $this->isSuccessful;
    }

    /**
     * @module CompanyPage|BusinessOnBehalfGui|CompanyBusinessUnit|CompanyRole|CompanyUserGui|CompanyUserInvitation|CompanyUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsSuccessful()
    {
        $this->assertPropertyIsSet(self::IS_SUCCESSFUL);

        return $this;
    }

    /**
     * @module CompanyPage|BusinessOnBehalfGui|BusinessOnBehalf|CompanyBusinessUnit|CompanyRole|CompanyUserInvitation|CompanyUser
     *
     * @param \Generated\Shared\Transfer\CompanyUserTransfer|null $companyUser
     *
     * @return $this
     */
    public function setCompanyUser(CompanyUserTransfer $companyUser = null)
    {
        $this->companyUser = $companyUser;
        $this->modifiedProperties[self::COMPANY_USER] = true;

        return $this;
    }

    /**
     * @module CompanyPage|BusinessOnBehalfGui|BusinessOnBehalf|CompanyBusinessUnit|CompanyRole|CompanyUserInvitation|CompanyUser
     *
     * @return \Generated\Shared\Transfer\CompanyUserTransfer|null
     */
    public function getCompanyUser()
    {
        return $this->companyUser;
    }

    /**
     * @module CompanyPage|BusinessOnBehalfGui|BusinessOnBehalf|CompanyBusinessUnit|CompanyRole|CompanyUserInvitation|CompanyUser
     *
     * @param \Generated\Shared\Transfer\CompanyUserTransfer $companyUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCompanyUserOrFail(CompanyUserTransfer $companyUser)
    {
        return $this->setCompanyUser($companyUser);
    }

    /**
     * @module CompanyPage|BusinessOnBehalfGui|BusinessOnBehalf|CompanyBusinessUnit|CompanyRole|CompanyUserInvitation|CompanyUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CompanyUserTransfer
     */
    public function getCompanyUserOrFail()
    {
        if ($this->companyUser === null) {
            $this->throwNullValueException(static::COMPANY_USER);
        }

        return $this->companyUser;
    }

    /**
     * @module CompanyPage|BusinessOnBehalfGui|BusinessOnBehalf|CompanyBusinessUnit|CompanyRole|CompanyUserInvitation|CompanyUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompanyUser()
    {
        $this->assertPropertyIsSet(self::COMPANY_USER);

        return $this;
    }

    /**
     * @module BusinessOnBehalfGui|CompanyBusinessUnit|CompanyUserGui|CompanyUser
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ResponseMessageTransfer[] $messages
     *
     * @return $this
     */
    public function setMessages(ArrayObject $messages)
    {
        $this->messages = $messages;
        $this->modifiedProperties[self::MESSAGES] = true;

        return $this;
    }

    /**
     * @module BusinessOnBehalfGui|CompanyBusinessUnit|CompanyUserGui|CompanyUser
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ResponseMessageTransfer[]
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * @module BusinessOnBehalfGui|CompanyBusinessUnit|CompanyUserGui|CompanyUser
     *
     * @param \Generated\Shared\Transfer\ResponseMessageTransfer $message
     *
     * @return $this
     */
    public function addMessage(ResponseMessageTransfer $message)
    {
        $this->messages[] = $message;
        $this->modifiedProperties[self::MESSAGES] = true;

        return $this;
    }

    /**
     * @module BusinessOnBehalfGui|CompanyBusinessUnit|CompanyUserGui|CompanyUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMessages()
    {
        $this->assertCollectionPropertyIsSet(self::MESSAGES);

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
                case 'isSuccessful':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'companyUser':
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
                case 'messages':
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
                case 'isSuccessful':
                    $values[$arrayKey] = $value;

                    break;
                case 'companyUser':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'messages':
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
                case 'isSuccessful':
                    $values[$arrayKey] = $value;

                    break;
                case 'companyUser':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'messages':
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
        $this->messages = $this->messages ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'isSuccessful' => $this->isSuccessful,
            'companyUser' => $this->companyUser,
            'messages' => $this->messages,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'is_successful' => $this->isSuccessful,
            'company_user' => $this->companyUser,
            'messages' => $this->messages,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'is_successful' => $this->isSuccessful instanceof AbstractTransfer ? $this->isSuccessful->toArray(true, false) : $this->isSuccessful,
            'company_user' => $this->companyUser instanceof AbstractTransfer ? $this->companyUser->toArray(true, false) : $this->companyUser,
            'messages' => $this->messages instanceof AbstractTransfer ? $this->messages->toArray(true, false) : $this->addValuesToCollection($this->messages, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'isSuccessful' => $this->isSuccessful instanceof AbstractTransfer ? $this->isSuccessful->toArray(true, true) : $this->isSuccessful,
            'companyUser' => $this->companyUser instanceof AbstractTransfer ? $this->companyUser->toArray(true, true) : $this->companyUser,
            'messages' => $this->messages instanceof AbstractTransfer ? $this->messages->toArray(true, true) : $this->addValuesToCollection($this->messages, true, true),
        ];
    }
}
