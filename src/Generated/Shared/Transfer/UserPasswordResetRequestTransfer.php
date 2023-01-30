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
class UserPasswordResetRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const EMAIL = 'email';

    /**
     * @var string
     */
    public const USER = 'user';

    /**
     * @var string
     */
    public const RESET_PASSWORD_LINK = 'resetPasswordLink';

    /**
     * @var string
     */
    public const RESET_PASSWORD_BASE_URL = 'resetPasswordBaseUrl';

    /**
     * @var string
     */
    public const RESET_PASSWORD_PATH = 'resetPasswordPath';

    /**
     * @var string|null
     */
    protected $email;

    /**
     * @var \Generated\Shared\Transfer\UserTransfer|null
     */
    protected $user;

    /**
     * @var string|null
     */
    protected $resetPasswordLink;

    /**
     * @var string|null
     */
    protected $resetPasswordBaseUrl;

    /**
     * @var string|null
     */
    protected $resetPasswordPath;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'email' => 'email',
        'Email' => 'email',
        'user' => 'user',
        'User' => 'user',
        'reset_password_link' => 'resetPasswordLink',
        'resetPasswordLink' => 'resetPasswordLink',
        'ResetPasswordLink' => 'resetPasswordLink',
        'reset_password_base_url' => 'resetPasswordBaseUrl',
        'resetPasswordBaseUrl' => 'resetPasswordBaseUrl',
        'ResetPasswordBaseUrl' => 'resetPasswordBaseUrl',
        'reset_password_path' => 'resetPasswordPath',
        'resetPasswordPath' => 'resetPasswordPath',
        'ResetPasswordPath' => 'resetPasswordPath',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::EMAIL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'email',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::USER => [
            'type' => 'Generated\Shared\Transfer\UserTransfer',
            'type_shim' => null,
            'name_underscore' => 'user',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::RESET_PASSWORD_LINK => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'reset_password_link',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::RESET_PASSWORD_BASE_URL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'reset_password_base_url',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::RESET_PASSWORD_PATH => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'reset_password_path',
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
     * @module SecurityGui|UserPasswordReset
     *
     * @param string|null $email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;
        $this->modifiedProperties[self::EMAIL] = true;

        return $this;
    }

    /**
     * @module SecurityGui|UserPasswordReset
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @module SecurityGui|UserPasswordReset
     *
     * @param string|null $email
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setEmailOrFail($email)
    {
        if ($email === null) {
            $this->throwNullValueException(static::EMAIL);
        }

        return $this->setEmail($email);
    }

    /**
     * @module SecurityGui|UserPasswordReset
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getEmailOrFail()
    {
        if ($this->email === null) {
            $this->throwNullValueException(static::EMAIL);
        }

        return $this->email;
    }

    /**
     * @module SecurityGui|UserPasswordReset
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireEmail()
    {
        $this->assertPropertyIsSet(self::EMAIL);

        return $this;
    }

    /**
     * @module UserPasswordResetExtension|UserPasswordReset
     *
     * @param \Generated\Shared\Transfer\UserTransfer|null $user
     *
     * @return $this
     */
    public function setUser(UserTransfer $user = null)
    {
        $this->user = $user;
        $this->modifiedProperties[self::USER] = true;

        return $this;
    }

    /**
     * @module UserPasswordResetExtension|UserPasswordReset
     *
     * @return \Generated\Shared\Transfer\UserTransfer|null
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @module UserPasswordResetExtension|UserPasswordReset
     *
     * @param \Generated\Shared\Transfer\UserTransfer $user
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUserOrFail(UserTransfer $user)
    {
        return $this->setUser($user);
    }

    /**
     * @module UserPasswordResetExtension|UserPasswordReset
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\UserTransfer
     */
    public function getUserOrFail()
    {
        if ($this->user === null) {
            $this->throwNullValueException(static::USER);
        }

        return $this->user;
    }

    /**
     * @module UserPasswordResetExtension|UserPasswordReset
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUser()
    {
        $this->assertPropertyIsSet(self::USER);

        return $this;
    }

    /**
     * @module UserPasswordResetExtension|UserPasswordReset
     *
     * @param string|null $resetPasswordLink
     *
     * @return $this
     */
    public function setResetPasswordLink($resetPasswordLink)
    {
        $this->resetPasswordLink = $resetPasswordLink;
        $this->modifiedProperties[self::RESET_PASSWORD_LINK] = true;

        return $this;
    }

    /**
     * @module UserPasswordResetExtension|UserPasswordReset
     *
     * @return string|null
     */
    public function getResetPasswordLink()
    {
        return $this->resetPasswordLink;
    }

    /**
     * @module UserPasswordResetExtension|UserPasswordReset
     *
     * @param string|null $resetPasswordLink
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setResetPasswordLinkOrFail($resetPasswordLink)
    {
        if ($resetPasswordLink === null) {
            $this->throwNullValueException(static::RESET_PASSWORD_LINK);
        }

        return $this->setResetPasswordLink($resetPasswordLink);
    }

    /**
     * @module UserPasswordResetExtension|UserPasswordReset
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getResetPasswordLinkOrFail()
    {
        if ($this->resetPasswordLink === null) {
            $this->throwNullValueException(static::RESET_PASSWORD_LINK);
        }

        return $this->resetPasswordLink;
    }

    /**
     * @module UserPasswordResetExtension|UserPasswordReset
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireResetPasswordLink()
    {
        $this->assertPropertyIsSet(self::RESET_PASSWORD_LINK);

        return $this;
    }

    /**
     * @module UserPasswordReset
     *
     * @param string|null $resetPasswordBaseUrl
     *
     * @return $this
     */
    public function setResetPasswordBaseUrl($resetPasswordBaseUrl)
    {
        $this->resetPasswordBaseUrl = $resetPasswordBaseUrl;
        $this->modifiedProperties[self::RESET_PASSWORD_BASE_URL] = true;

        return $this;
    }

    /**
     * @module UserPasswordReset
     *
     * @return string|null
     */
    public function getResetPasswordBaseUrl()
    {
        return $this->resetPasswordBaseUrl;
    }

    /**
     * @module UserPasswordReset
     *
     * @param string|null $resetPasswordBaseUrl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setResetPasswordBaseUrlOrFail($resetPasswordBaseUrl)
    {
        if ($resetPasswordBaseUrl === null) {
            $this->throwNullValueException(static::RESET_PASSWORD_BASE_URL);
        }

        return $this->setResetPasswordBaseUrl($resetPasswordBaseUrl);
    }

    /**
     * @module UserPasswordReset
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getResetPasswordBaseUrlOrFail()
    {
        if ($this->resetPasswordBaseUrl === null) {
            $this->throwNullValueException(static::RESET_PASSWORD_BASE_URL);
        }

        return $this->resetPasswordBaseUrl;
    }

    /**
     * @module UserPasswordReset
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireResetPasswordBaseUrl()
    {
        $this->assertPropertyIsSet(self::RESET_PASSWORD_BASE_URL);

        return $this;
    }

    /**
     * @module UserPasswordReset
     *
     * @param string|null $resetPasswordPath
     *
     * @return $this
     */
    public function setResetPasswordPath($resetPasswordPath)
    {
        $this->resetPasswordPath = $resetPasswordPath;
        $this->modifiedProperties[self::RESET_PASSWORD_PATH] = true;

        return $this;
    }

    /**
     * @module UserPasswordReset
     *
     * @return string|null
     */
    public function getResetPasswordPath()
    {
        return $this->resetPasswordPath;
    }

    /**
     * @module UserPasswordReset
     *
     * @param string|null $resetPasswordPath
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setResetPasswordPathOrFail($resetPasswordPath)
    {
        if ($resetPasswordPath === null) {
            $this->throwNullValueException(static::RESET_PASSWORD_PATH);
        }

        return $this->setResetPasswordPath($resetPasswordPath);
    }

    /**
     * @module UserPasswordReset
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getResetPasswordPathOrFail()
    {
        if ($this->resetPasswordPath === null) {
            $this->throwNullValueException(static::RESET_PASSWORD_PATH);
        }

        return $this->resetPasswordPath;
    }

    /**
     * @module UserPasswordReset
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireResetPasswordPath()
    {
        $this->assertPropertyIsSet(self::RESET_PASSWORD_PATH);

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
                case 'email':
                case 'resetPasswordLink':
                case 'resetPasswordBaseUrl':
                case 'resetPasswordPath':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'user':
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
                case 'email':
                case 'resetPasswordLink':
                case 'resetPasswordBaseUrl':
                case 'resetPasswordPath':
                    $values[$arrayKey] = $value;

                    break;
                case 'user':
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
                case 'email':
                case 'resetPasswordLink':
                case 'resetPasswordBaseUrl':
                case 'resetPasswordPath':
                    $values[$arrayKey] = $value;

                    break;
                case 'user':
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
            'email' => $this->email,
            'resetPasswordLink' => $this->resetPasswordLink,
            'resetPasswordBaseUrl' => $this->resetPasswordBaseUrl,
            'resetPasswordPath' => $this->resetPasswordPath,
            'user' => $this->user,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'email' => $this->email,
            'reset_password_link' => $this->resetPasswordLink,
            'reset_password_base_url' => $this->resetPasswordBaseUrl,
            'reset_password_path' => $this->resetPasswordPath,
            'user' => $this->user,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'email' => $this->email instanceof AbstractTransfer ? $this->email->toArray(true, false) : $this->email,
            'reset_password_link' => $this->resetPasswordLink instanceof AbstractTransfer ? $this->resetPasswordLink->toArray(true, false) : $this->resetPasswordLink,
            'reset_password_base_url' => $this->resetPasswordBaseUrl instanceof AbstractTransfer ? $this->resetPasswordBaseUrl->toArray(true, false) : $this->resetPasswordBaseUrl,
            'reset_password_path' => $this->resetPasswordPath instanceof AbstractTransfer ? $this->resetPasswordPath->toArray(true, false) : $this->resetPasswordPath,
            'user' => $this->user instanceof AbstractTransfer ? $this->user->toArray(true, false) : $this->user,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'email' => $this->email instanceof AbstractTransfer ? $this->email->toArray(true, true) : $this->email,
            'resetPasswordLink' => $this->resetPasswordLink instanceof AbstractTransfer ? $this->resetPasswordLink->toArray(true, true) : $this->resetPasswordLink,
            'resetPasswordBaseUrl' => $this->resetPasswordBaseUrl instanceof AbstractTransfer ? $this->resetPasswordBaseUrl->toArray(true, true) : $this->resetPasswordBaseUrl,
            'resetPasswordPath' => $this->resetPasswordPath instanceof AbstractTransfer ? $this->resetPasswordPath->toArray(true, true) : $this->resetPasswordPath,
            'user' => $this->user instanceof AbstractTransfer ? $this->user->toArray(true, true) : $this->user,
        ];
    }
}
