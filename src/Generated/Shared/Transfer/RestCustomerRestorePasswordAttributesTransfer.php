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
class RestCustomerRestorePasswordAttributesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const RESTORE_PASSWORD_KEY = 'restorePasswordKey';

    /**
     * @var string
     */
    public const PASSWORD = 'password';

    /**
     * @var string
     */
    public const CONFIRM_PASSWORD = 'confirmPassword';

    /**
     * @var string|null
     */
    protected $restorePasswordKey;

    /**
     * @var string|null
     */
    protected $password;

    /**
     * @var string|null
     */
    protected $confirmPassword;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'restore_password_key' => 'restorePasswordKey',
        'restorePasswordKey' => 'restorePasswordKey',
        'RestorePasswordKey' => 'restorePasswordKey',
        'password' => 'password',
        'Password' => 'password',
        'confirm_password' => 'confirmPassword',
        'confirmPassword' => 'confirmPassword',
        'ConfirmPassword' => 'confirmPassword',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::RESTORE_PASSWORD_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'restore_password_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'required',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PASSWORD => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'password',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'required',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONFIRM_PASSWORD => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'confirm_password',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'required',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module CustomersRestApi
     *
     * @param string|null $restorePasswordKey
     *
     * @return $this
     */
    public function setRestorePasswordKey($restorePasswordKey)
    {
        $this->restorePasswordKey = $restorePasswordKey;
        $this->modifiedProperties[self::RESTORE_PASSWORD_KEY] = true;

        return $this;
    }

    /**
     * @module CustomersRestApi
     *
     * @return string|null
     */
    public function getRestorePasswordKey()
    {
        return $this->restorePasswordKey;
    }

    /**
     * @module CustomersRestApi
     *
     * @param string|null $restorePasswordKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRestorePasswordKeyOrFail($restorePasswordKey)
    {
        if ($restorePasswordKey === null) {
            $this->throwNullValueException(static::RESTORE_PASSWORD_KEY);
        }

        return $this->setRestorePasswordKey($restorePasswordKey);
    }

    /**
     * @module CustomersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRestorePasswordKeyOrFail()
    {
        if ($this->restorePasswordKey === null) {
            $this->throwNullValueException(static::RESTORE_PASSWORD_KEY);
        }

        return $this->restorePasswordKey;
    }

    /**
     * @module CustomersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRestorePasswordKey()
    {
        $this->assertPropertyIsSet(self::RESTORE_PASSWORD_KEY);

        return $this;
    }

    /**
     * @module CustomersRestApi
     *
     * @param string|null $password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;
        $this->modifiedProperties[self::PASSWORD] = true;

        return $this;
    }

    /**
     * @module CustomersRestApi
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @module CustomersRestApi
     *
     * @param string|null $password
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPasswordOrFail($password)
    {
        if ($password === null) {
            $this->throwNullValueException(static::PASSWORD);
        }

        return $this->setPassword($password);
    }

    /**
     * @module CustomersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPasswordOrFail()
    {
        if ($this->password === null) {
            $this->throwNullValueException(static::PASSWORD);
        }

        return $this->password;
    }

    /**
     * @module CustomersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePassword()
    {
        $this->assertPropertyIsSet(self::PASSWORD);

        return $this;
    }

    /**
     * @module CustomersRestApi
     *
     * @param string|null $confirmPassword
     *
     * @return $this
     */
    public function setConfirmPassword($confirmPassword)
    {
        $this->confirmPassword = $confirmPassword;
        $this->modifiedProperties[self::CONFIRM_PASSWORD] = true;

        return $this;
    }

    /**
     * @module CustomersRestApi
     *
     * @return string|null
     */
    public function getConfirmPassword()
    {
        return $this->confirmPassword;
    }

    /**
     * @module CustomersRestApi
     *
     * @param string|null $confirmPassword
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setConfirmPasswordOrFail($confirmPassword)
    {
        if ($confirmPassword === null) {
            $this->throwNullValueException(static::CONFIRM_PASSWORD);
        }

        return $this->setConfirmPassword($confirmPassword);
    }

    /**
     * @module CustomersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getConfirmPasswordOrFail()
    {
        if ($this->confirmPassword === null) {
            $this->throwNullValueException(static::CONFIRM_PASSWORD);
        }

        return $this->confirmPassword;
    }

    /**
     * @module CustomersRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConfirmPassword()
    {
        $this->assertPropertyIsSet(self::CONFIRM_PASSWORD);

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
                case 'restorePasswordKey':
                case 'password':
                case 'confirmPassword':
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
                case 'restorePasswordKey':
                case 'password':
                case 'confirmPassword':
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
                case 'restorePasswordKey':
                case 'password':
                case 'confirmPassword':
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
            'restorePasswordKey' => $this->restorePasswordKey,
            'password' => $this->password,
            'confirmPassword' => $this->confirmPassword,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'restore_password_key' => $this->restorePasswordKey,
            'password' => $this->password,
            'confirm_password' => $this->confirmPassword,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'restore_password_key' => $this->restorePasswordKey instanceof AbstractTransfer ? $this->restorePasswordKey->toArray(true, false) : $this->restorePasswordKey,
            'password' => $this->password instanceof AbstractTransfer ? $this->password->toArray(true, false) : $this->password,
            'confirm_password' => $this->confirmPassword instanceof AbstractTransfer ? $this->confirmPassword->toArray(true, false) : $this->confirmPassword,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'restorePasswordKey' => $this->restorePasswordKey instanceof AbstractTransfer ? $this->restorePasswordKey->toArray(true, true) : $this->restorePasswordKey,
            'password' => $this->password instanceof AbstractTransfer ? $this->password->toArray(true, true) : $this->password,
            'confirmPassword' => $this->confirmPassword instanceof AbstractTransfer ? $this->confirmPassword->toArray(true, true) : $this->confirmPassword,
        ];
    }
}
