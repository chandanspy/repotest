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
class RestCheckoutResponseTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const IS_SUCCESS = 'isSuccess';

    /**
     * @var string
     */
    public const ERRORS = 'errors';

    /**
     * @var string
     */
    public const ORDER_REFERENCE = 'orderReference';

    /**
     * @var string
     */
    public const REDIRECT_URL = 'redirectUrl';

    /**
     * @var string
     */
    public const IS_EXTERNAL_REDIRECT = 'isExternalRedirect';

    /**
     * @var string
     */
    public const CHECKOUT_RESPONSE = 'checkoutResponse';

    /**
     * @var string
     */
    public const CHECKOUT_DATA = 'checkoutData';

    /**
     * @var bool|null
     */
    protected $isSuccess;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\RestCheckoutErrorTransfer[]
     */
    protected $errors;

    /**
     * @var string|null
     */
    protected $orderReference;

    /**
     * @var string|null
     */
    protected $redirectUrl;

    /**
     * @var bool|null
     */
    protected $isExternalRedirect;

    /**
     * @var \Generated\Shared\Transfer\CheckoutResponseTransfer|null
     */
    protected $checkoutResponse;

    /**
     * @var \Generated\Shared\Transfer\CheckoutDataTransfer|null
     */
    protected $checkoutData;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'is_success' => 'isSuccess',
        'isSuccess' => 'isSuccess',
        'IsSuccess' => 'isSuccess',
        'errors' => 'errors',
        'Errors' => 'errors',
        'order_reference' => 'orderReference',
        'orderReference' => 'orderReference',
        'OrderReference' => 'orderReference',
        'redirect_url' => 'redirectUrl',
        'redirectUrl' => 'redirectUrl',
        'RedirectUrl' => 'redirectUrl',
        'is_external_redirect' => 'isExternalRedirect',
        'isExternalRedirect' => 'isExternalRedirect',
        'IsExternalRedirect' => 'isExternalRedirect',
        'checkout_response' => 'checkoutResponse',
        'checkoutResponse' => 'checkoutResponse',
        'CheckoutResponse' => 'checkoutResponse',
        'checkout_data' => 'checkoutData',
        'checkoutData' => 'checkoutData',
        'CheckoutData' => 'checkoutData',
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
        self::ERRORS => [
            'type' => 'Generated\Shared\Transfer\RestCheckoutErrorTransfer',
            'type_shim' => null,
            'name_underscore' => 'errors',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ORDER_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'order_reference',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REDIRECT_URL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'redirect_url',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_EXTERNAL_REDIRECT => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_external_redirect',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CHECKOUT_RESPONSE => [
            'type' => 'Generated\Shared\Transfer\CheckoutResponseTransfer',
            'type_shim' => null,
            'name_underscore' => 'checkout_response',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CHECKOUT_DATA => [
            'type' => 'Generated\Shared\Transfer\CheckoutDataTransfer',
            'type_shim' => null,
            'name_underscore' => 'checkout_data',
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
     * @module CheckoutRestApi
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
     * @module CheckoutRestApi
     *
     * @return bool|null
     */
    public function getIsSuccess()
    {
        return $this->isSuccess;
    }

    /**
     * @module CheckoutRestApi
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
     * @module CheckoutRestApi
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
     * @module CheckoutRestApi
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
     * @module CheckoutRestApi
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\RestCheckoutErrorTransfer[] $errors
     *
     * @return $this
     */
    public function setErrors(ArrayObject $errors)
    {
        $this->errors = $errors;
        $this->modifiedProperties[self::ERRORS] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\RestCheckoutErrorTransfer[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @module CheckoutRestApi
     *
     * @param \Generated\Shared\Transfer\RestCheckoutErrorTransfer $error
     *
     * @return $this
     */
    public function addError(RestCheckoutErrorTransfer $error)
    {
        $this->errors[] = $error;
        $this->modifiedProperties[self::ERRORS] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireErrors()
    {
        $this->assertCollectionPropertyIsSet(self::ERRORS);

        return $this;
    }

    /**
     * @module CheckoutRestApi
     *
     * @param string|null $orderReference
     *
     * @return $this
     */
    public function setOrderReference($orderReference)
    {
        $this->orderReference = $orderReference;
        $this->modifiedProperties[self::ORDER_REFERENCE] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi
     *
     * @return string|null
     */
    public function getOrderReference()
    {
        return $this->orderReference;
    }

    /**
     * @module CheckoutRestApi
     *
     * @param string|null $orderReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOrderReferenceOrFail($orderReference)
    {
        if ($orderReference === null) {
            $this->throwNullValueException(static::ORDER_REFERENCE);
        }

        return $this->setOrderReference($orderReference);
    }

    /**
     * @module CheckoutRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getOrderReferenceOrFail()
    {
        if ($this->orderReference === null) {
            $this->throwNullValueException(static::ORDER_REFERENCE);
        }

        return $this->orderReference;
    }

    /**
     * @module CheckoutRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOrderReference()
    {
        $this->assertPropertyIsSet(self::ORDER_REFERENCE);

        return $this;
    }

    /**
     * @module CheckoutRestApi
     *
     * @param string|null $redirectUrl
     *
     * @return $this
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;
        $this->modifiedProperties[self::REDIRECT_URL] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi
     *
     * @return string|null
     */
    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }

    /**
     * @module CheckoutRestApi
     *
     * @param string|null $redirectUrl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRedirectUrlOrFail($redirectUrl)
    {
        if ($redirectUrl === null) {
            $this->throwNullValueException(static::REDIRECT_URL);
        }

        return $this->setRedirectUrl($redirectUrl);
    }

    /**
     * @module CheckoutRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRedirectUrlOrFail()
    {
        if ($this->redirectUrl === null) {
            $this->throwNullValueException(static::REDIRECT_URL);
        }

        return $this->redirectUrl;
    }

    /**
     * @module CheckoutRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRedirectUrl()
    {
        $this->assertPropertyIsSet(self::REDIRECT_URL);

        return $this;
    }

    /**
     * @module CheckoutRestApi
     *
     * @param bool|null $isExternalRedirect
     *
     * @return $this
     */
    public function setIsExternalRedirect($isExternalRedirect)
    {
        $this->isExternalRedirect = $isExternalRedirect;
        $this->modifiedProperties[self::IS_EXTERNAL_REDIRECT] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi
     *
     * @return bool|null
     */
    public function getIsExternalRedirect()
    {
        return $this->isExternalRedirect;
    }

    /**
     * @module CheckoutRestApi
     *
     * @param bool|null $isExternalRedirect
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsExternalRedirectOrFail($isExternalRedirect)
    {
        if ($isExternalRedirect === null) {
            $this->throwNullValueException(static::IS_EXTERNAL_REDIRECT);
        }

        return $this->setIsExternalRedirect($isExternalRedirect);
    }

    /**
     * @module CheckoutRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsExternalRedirectOrFail()
    {
        if ($this->isExternalRedirect === null) {
            $this->throwNullValueException(static::IS_EXTERNAL_REDIRECT);
        }

        return $this->isExternalRedirect;
    }

    /**
     * @module CheckoutRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsExternalRedirect()
    {
        $this->assertPropertyIsSet(self::IS_EXTERNAL_REDIRECT);

        return $this;
    }

    /**
     * @module CheckoutRestApi
     *
     * @param \Generated\Shared\Transfer\CheckoutResponseTransfer|null $checkoutResponse
     *
     * @return $this
     */
    public function setCheckoutResponse(CheckoutResponseTransfer $checkoutResponse = null)
    {
        $this->checkoutResponse = $checkoutResponse;
        $this->modifiedProperties[self::CHECKOUT_RESPONSE] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi
     *
     * @return \Generated\Shared\Transfer\CheckoutResponseTransfer|null
     */
    public function getCheckoutResponse()
    {
        return $this->checkoutResponse;
    }

    /**
     * @module CheckoutRestApi
     *
     * @param \Generated\Shared\Transfer\CheckoutResponseTransfer $checkoutResponse
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCheckoutResponseOrFail(CheckoutResponseTransfer $checkoutResponse)
    {
        return $this->setCheckoutResponse($checkoutResponse);
    }

    /**
     * @module CheckoutRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CheckoutResponseTransfer
     */
    public function getCheckoutResponseOrFail()
    {
        if ($this->checkoutResponse === null) {
            $this->throwNullValueException(static::CHECKOUT_RESPONSE);
        }

        return $this->checkoutResponse;
    }

    /**
     * @module CheckoutRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCheckoutResponse()
    {
        $this->assertPropertyIsSet(self::CHECKOUT_RESPONSE);

        return $this;
    }

    /**
     * @module CheckoutRestApi
     *
     * @param \Generated\Shared\Transfer\CheckoutDataTransfer|null $checkoutData
     *
     * @return $this
     */
    public function setCheckoutData(CheckoutDataTransfer $checkoutData = null)
    {
        $this->checkoutData = $checkoutData;
        $this->modifiedProperties[self::CHECKOUT_DATA] = true;

        return $this;
    }

    /**
     * @module CheckoutRestApi
     *
     * @return \Generated\Shared\Transfer\CheckoutDataTransfer|null
     */
    public function getCheckoutData()
    {
        return $this->checkoutData;
    }

    /**
     * @module CheckoutRestApi
     *
     * @param \Generated\Shared\Transfer\CheckoutDataTransfer $checkoutData
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCheckoutDataOrFail(CheckoutDataTransfer $checkoutData)
    {
        return $this->setCheckoutData($checkoutData);
    }

    /**
     * @module CheckoutRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CheckoutDataTransfer
     */
    public function getCheckoutDataOrFail()
    {
        if ($this->checkoutData === null) {
            $this->throwNullValueException(static::CHECKOUT_DATA);
        }

        return $this->checkoutData;
    }

    /**
     * @module CheckoutRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCheckoutData()
    {
        $this->assertPropertyIsSet(self::CHECKOUT_DATA);

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
                case 'orderReference':
                case 'redirectUrl':
                case 'isExternalRedirect':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'checkoutResponse':
                case 'checkoutData':
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
                case 'errors':
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
                case 'orderReference':
                case 'redirectUrl':
                case 'isExternalRedirect':
                    $values[$arrayKey] = $value;

                    break;
                case 'checkoutResponse':
                case 'checkoutData':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'errors':
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
                case 'orderReference':
                case 'redirectUrl':
                case 'isExternalRedirect':
                    $values[$arrayKey] = $value;

                    break;
                case 'checkoutResponse':
                case 'checkoutData':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'errors':
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
        $this->errors = $this->errors ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'isSuccess' => $this->isSuccess,
            'orderReference' => $this->orderReference,
            'redirectUrl' => $this->redirectUrl,
            'isExternalRedirect' => $this->isExternalRedirect,
            'checkoutResponse' => $this->checkoutResponse,
            'checkoutData' => $this->checkoutData,
            'errors' => $this->errors,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'is_success' => $this->isSuccess,
            'order_reference' => $this->orderReference,
            'redirect_url' => $this->redirectUrl,
            'is_external_redirect' => $this->isExternalRedirect,
            'checkout_response' => $this->checkoutResponse,
            'checkout_data' => $this->checkoutData,
            'errors' => $this->errors,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'is_success' => $this->isSuccess instanceof AbstractTransfer ? $this->isSuccess->toArray(true, false) : $this->isSuccess,
            'order_reference' => $this->orderReference instanceof AbstractTransfer ? $this->orderReference->toArray(true, false) : $this->orderReference,
            'redirect_url' => $this->redirectUrl instanceof AbstractTransfer ? $this->redirectUrl->toArray(true, false) : $this->redirectUrl,
            'is_external_redirect' => $this->isExternalRedirect instanceof AbstractTransfer ? $this->isExternalRedirect->toArray(true, false) : $this->isExternalRedirect,
            'checkout_response' => $this->checkoutResponse instanceof AbstractTransfer ? $this->checkoutResponse->toArray(true, false) : $this->checkoutResponse,
            'checkout_data' => $this->checkoutData instanceof AbstractTransfer ? $this->checkoutData->toArray(true, false) : $this->checkoutData,
            'errors' => $this->errors instanceof AbstractTransfer ? $this->errors->toArray(true, false) : $this->addValuesToCollection($this->errors, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'isSuccess' => $this->isSuccess instanceof AbstractTransfer ? $this->isSuccess->toArray(true, true) : $this->isSuccess,
            'orderReference' => $this->orderReference instanceof AbstractTransfer ? $this->orderReference->toArray(true, true) : $this->orderReference,
            'redirectUrl' => $this->redirectUrl instanceof AbstractTransfer ? $this->redirectUrl->toArray(true, true) : $this->redirectUrl,
            'isExternalRedirect' => $this->isExternalRedirect instanceof AbstractTransfer ? $this->isExternalRedirect->toArray(true, true) : $this->isExternalRedirect,
            'checkoutResponse' => $this->checkoutResponse instanceof AbstractTransfer ? $this->checkoutResponse->toArray(true, true) : $this->checkoutResponse,
            'checkoutData' => $this->checkoutData instanceof AbstractTransfer ? $this->checkoutData->toArray(true, true) : $this->checkoutData,
            'errors' => $this->errors instanceof AbstractTransfer ? $this->errors->toArray(true, true) : $this->addValuesToCollection($this->errors, true, true),
        ];
    }
}
