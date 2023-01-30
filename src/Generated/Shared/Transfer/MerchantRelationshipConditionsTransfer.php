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
class MerchantRelationshipConditionsTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const MERCHANT_RELATIONSHIP_IDS = 'merchantRelationshipIds';

    /**
     * @var string
     */
    public const COMPANY_IDS = 'companyIds';

    /**
     * @var string
     */
    public const MERCHANT_IDS = 'merchantIds';

    /**
     * @var int[]
     */
    protected $merchantRelationshipIds = [];

    /**
     * @var int[]
     */
    protected $companyIds = [];

    /**
     * @var int[]
     */
    protected $merchantIds = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'merchant_relationship_ids' => 'merchantRelationshipIds',
        'merchantRelationshipIds' => 'merchantRelationshipIds',
        'MerchantRelationshipIds' => 'merchantRelationshipIds',
        'company_ids' => 'companyIds',
        'companyIds' => 'companyIds',
        'CompanyIds' => 'companyIds',
        'merchant_ids' => 'merchantIds',
        'merchantIds' => 'merchantIds',
        'MerchantIds' => 'merchantIds',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::MERCHANT_RELATIONSHIP_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'merchant_relationship_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COMPANY_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'company_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MERCHANT_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'merchant_ids',
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
     * @module MerchantRelationship
     *
     * @param int[]|null $merchantRelationshipIds
     *
     * @return $this
     */
    public function setMerchantRelationshipIds(array $merchantRelationshipIds = null)
    {
        if ($merchantRelationshipIds === null) {
            $merchantRelationshipIds = [];
        }

        $this->merchantRelationshipIds = $merchantRelationshipIds;
        $this->modifiedProperties[self::MERCHANT_RELATIONSHIP_IDS] = true;

        return $this;
    }

    /**
     * @module MerchantRelationship
     *
     * @return int[]
     */
    public function getMerchantRelationshipIds()
    {
        return $this->merchantRelationshipIds;
    }

    /**
     * @module MerchantRelationship
     *
     * @param int $idMerchantRelationship
     *
     * @return $this
     */
    public function addIdMerchantRelationship($idMerchantRelationship)
    {
        $this->merchantRelationshipIds[] = $idMerchantRelationship;
        $this->modifiedProperties[self::MERCHANT_RELATIONSHIP_IDS] = true;

        return $this;
    }

    /**
     * @module MerchantRelationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMerchantRelationshipIds()
    {
        $this->assertPropertyIsSet(self::MERCHANT_RELATIONSHIP_IDS);

        return $this;
    }

    /**
     * @module MerchantRelationship
     *
     * @param int[]|null $companyIds
     *
     * @return $this
     */
    public function setCompanyIds(array $companyIds = null)
    {
        if ($companyIds === null) {
            $companyIds = [];
        }

        $this->companyIds = $companyIds;
        $this->modifiedProperties[self::COMPANY_IDS] = true;

        return $this;
    }

    /**
     * @module MerchantRelationship
     *
     * @return int[]
     */
    public function getCompanyIds()
    {
        return $this->companyIds;
    }

    /**
     * @module MerchantRelationship
     *
     * @param int $idCompany
     *
     * @return $this
     */
    public function addIdCompany($idCompany)
    {
        $this->companyIds[] = $idCompany;
        $this->modifiedProperties[self::COMPANY_IDS] = true;

        return $this;
    }

    /**
     * @module MerchantRelationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompanyIds()
    {
        $this->assertPropertyIsSet(self::COMPANY_IDS);

        return $this;
    }

    /**
     * @module MerchantRelationship
     *
     * @param int[]|null $merchantIds
     *
     * @return $this
     */
    public function setMerchantIds(array $merchantIds = null)
    {
        if ($merchantIds === null) {
            $merchantIds = [];
        }

        $this->merchantIds = $merchantIds;
        $this->modifiedProperties[self::MERCHANT_IDS] = true;

        return $this;
    }

    /**
     * @module MerchantRelationship
     *
     * @return int[]
     */
    public function getMerchantIds()
    {
        return $this->merchantIds;
    }

    /**
     * @module MerchantRelationship
     *
     * @param int $idMerchant
     *
     * @return $this
     */
    public function addIdMerchant($idMerchant)
    {
        $this->merchantIds[] = $idMerchant;
        $this->modifiedProperties[self::MERCHANT_IDS] = true;

        return $this;
    }

    /**
     * @module MerchantRelationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMerchantIds()
    {
        $this->assertPropertyIsSet(self::MERCHANT_IDS);

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
                case 'merchantRelationshipIds':
                case 'companyIds':
                case 'merchantIds':
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
                case 'merchantRelationshipIds':
                case 'companyIds':
                case 'merchantIds':
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
                case 'merchantRelationshipIds':
                case 'companyIds':
                case 'merchantIds':
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
            'merchantRelationshipIds' => $this->merchantRelationshipIds,
            'companyIds' => $this->companyIds,
            'merchantIds' => $this->merchantIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'merchant_relationship_ids' => $this->merchantRelationshipIds,
            'company_ids' => $this->companyIds,
            'merchant_ids' => $this->merchantIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'merchant_relationship_ids' => $this->merchantRelationshipIds instanceof AbstractTransfer ? $this->merchantRelationshipIds->toArray(true, false) : $this->merchantRelationshipIds,
            'company_ids' => $this->companyIds instanceof AbstractTransfer ? $this->companyIds->toArray(true, false) : $this->companyIds,
            'merchant_ids' => $this->merchantIds instanceof AbstractTransfer ? $this->merchantIds->toArray(true, false) : $this->merchantIds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'merchantRelationshipIds' => $this->merchantRelationshipIds instanceof AbstractTransfer ? $this->merchantRelationshipIds->toArray(true, true) : $this->merchantRelationshipIds,
            'companyIds' => $this->companyIds instanceof AbstractTransfer ? $this->companyIds->toArray(true, true) : $this->companyIds,
            'merchantIds' => $this->merchantIds instanceof AbstractTransfer ? $this->merchantIds->toArray(true, true) : $this->merchantIds,
        ];
    }
}
