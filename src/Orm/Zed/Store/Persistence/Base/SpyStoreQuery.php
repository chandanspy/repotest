<?php

namespace Orm\Zed\Store\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\Asset\Persistence\SpyAssetStore;
use Orm\Zed\AvailabilityNotification\Persistence\SpyAvailabilityNotificationSubscription;
use Orm\Zed\Availability\Persistence\SpyAvailability;
use Orm\Zed\Availability\Persistence\SpyAvailabilityAbstract;
use Orm\Zed\Category\Persistence\SpyCategoryStore;
use Orm\Zed\CmsBlock\Persistence\SpyCmsBlockStore;
use Orm\Zed\Cms\Persistence\SpyCmsPageStore;
use Orm\Zed\Company\Persistence\SpyCompanyStore;
use Orm\Zed\Discount\Persistence\SpyDiscount;
use Orm\Zed\Discount\Persistence\SpyDiscountStore;
use Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThreshold;
use Orm\Zed\Merchant\Persistence\SpyMerchantStore;
use Orm\Zed\Oms\Persistence\SpyOmsProductReservation;
use Orm\Zed\Payment\Persistence\SpyPaymentMethodStore;
use Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductSchedule;
use Orm\Zed\PriceProduct\Persistence\SpyPriceProductStore;
use Orm\Zed\ProductLabel\Persistence\SpyProductLabelStore;
use Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementSalesUnitStore;
use Orm\Zed\ProductOption\Persistence\SpyProductOptionValuePrice;
use Orm\Zed\ProductRelation\Persistence\SpyProductRelationStore;
use Orm\Zed\Product\Persistence\SpyProductAbstractStore;
use Orm\Zed\Quote\Persistence\SpyQuote;
use Orm\Zed\SalesOrderThreshold\Persistence\SpySalesOrderThreshold;
use Orm\Zed\Shipment\Persistence\SpyShipmentMethodPrice;
use Orm\Zed\Shipment\Persistence\SpyShipmentMethodStore;
use Orm\Zed\Stock\Persistence\SpyStockStore;
use Orm\Zed\Store\Persistence\SpyStore as ChildSpyStore;
use Orm\Zed\Store\Persistence\SpyStoreQuery as ChildSpyStoreQuery;
use Orm\Zed\Store\Persistence\Map\SpyStoreTableMap;
use Orm\Zed\Touch\Persistence\SpyTouchSearch;
use Orm\Zed\Touch\Persistence\SpyTouchStorage;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;
use Spryker\Zed\PropelOrm\Business\Runtime\ActiveQuery\Criteria as SprykerCriteria;
use Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException;

/**
 * Base class that represents a query for the 'spy_store' table.
 *
 *
 *
 * @method     ChildSpyStoreQuery orderByIdStore($order = Criteria::ASC) Order by the id_store column
 * @method     ChildSpyStoreQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ChildSpyStoreQuery orderByStoreReference($order = Criteria::ASC) Order by the store_reference column
 *
 * @method     ChildSpyStoreQuery groupByIdStore() Group by the id_store column
 * @method     ChildSpyStoreQuery groupByName() Group by the name column
 * @method     ChildSpyStoreQuery groupByStoreReference() Group by the store_reference column
 *
 * @method     ChildSpyStoreQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyStoreQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyStoreQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyStoreQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyStoreQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyStoreQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyStoreQuery leftJoinSpyAssetStore($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyAssetStore relation
 * @method     ChildSpyStoreQuery rightJoinSpyAssetStore($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyAssetStore relation
 * @method     ChildSpyStoreQuery innerJoinSpyAssetStore($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyAssetStore relation
 *
 * @method     ChildSpyStoreQuery joinWithSpyAssetStore($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyAssetStore relation
 *
 * @method     ChildSpyStoreQuery leftJoinWithSpyAssetStore() Adds a LEFT JOIN clause and with to the query using the SpyAssetStore relation
 * @method     ChildSpyStoreQuery rightJoinWithSpyAssetStore() Adds a RIGHT JOIN clause and with to the query using the SpyAssetStore relation
 * @method     ChildSpyStoreQuery innerJoinWithSpyAssetStore() Adds a INNER JOIN clause and with to the query using the SpyAssetStore relation
 *
 * @method     ChildSpyStoreQuery leftJoinAvailabilityAbstract($relationAlias = null) Adds a LEFT JOIN clause to the query using the AvailabilityAbstract relation
 * @method     ChildSpyStoreQuery rightJoinAvailabilityAbstract($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AvailabilityAbstract relation
 * @method     ChildSpyStoreQuery innerJoinAvailabilityAbstract($relationAlias = null) Adds a INNER JOIN clause to the query using the AvailabilityAbstract relation
 *
 * @method     ChildSpyStoreQuery joinWithAvailabilityAbstract($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the AvailabilityAbstract relation
 *
 * @method     ChildSpyStoreQuery leftJoinWithAvailabilityAbstract() Adds a LEFT JOIN clause and with to the query using the AvailabilityAbstract relation
 * @method     ChildSpyStoreQuery rightJoinWithAvailabilityAbstract() Adds a RIGHT JOIN clause and with to the query using the AvailabilityAbstract relation
 * @method     ChildSpyStoreQuery innerJoinWithAvailabilityAbstract() Adds a INNER JOIN clause and with to the query using the AvailabilityAbstract relation
 *
 * @method     ChildSpyStoreQuery leftJoinAvailability($relationAlias = null) Adds a LEFT JOIN clause to the query using the Availability relation
 * @method     ChildSpyStoreQuery rightJoinAvailability($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Availability relation
 * @method     ChildSpyStoreQuery innerJoinAvailability($relationAlias = null) Adds a INNER JOIN clause to the query using the Availability relation
 *
 * @method     ChildSpyStoreQuery joinWithAvailability($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Availability relation
 *
 * @method     ChildSpyStoreQuery leftJoinWithAvailability() Adds a LEFT JOIN clause and with to the query using the Availability relation
 * @method     ChildSpyStoreQuery rightJoinWithAvailability() Adds a RIGHT JOIN clause and with to the query using the Availability relation
 * @method     ChildSpyStoreQuery innerJoinWithAvailability() Adds a INNER JOIN clause and with to the query using the Availability relation
 *
 * @method     ChildSpyStoreQuery leftJoinSpyAvailabilityNotificationSubscription($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyAvailabilityNotificationSubscription relation
 * @method     ChildSpyStoreQuery rightJoinSpyAvailabilityNotificationSubscription($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyAvailabilityNotificationSubscription relation
 * @method     ChildSpyStoreQuery innerJoinSpyAvailabilityNotificationSubscription($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyAvailabilityNotificationSubscription relation
 *
 * @method     ChildSpyStoreQuery joinWithSpyAvailabilityNotificationSubscription($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyAvailabilityNotificationSubscription relation
 *
 * @method     ChildSpyStoreQuery leftJoinWithSpyAvailabilityNotificationSubscription() Adds a LEFT JOIN clause and with to the query using the SpyAvailabilityNotificationSubscription relation
 * @method     ChildSpyStoreQuery rightJoinWithSpyAvailabilityNotificationSubscription() Adds a RIGHT JOIN clause and with to the query using the SpyAvailabilityNotificationSubscription relation
 * @method     ChildSpyStoreQuery innerJoinWithSpyAvailabilityNotificationSubscription() Adds a INNER JOIN clause and with to the query using the SpyAvailabilityNotificationSubscription relation
 *
 * @method     ChildSpyStoreQuery leftJoinSpyCategoryStore($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyCategoryStore relation
 * @method     ChildSpyStoreQuery rightJoinSpyCategoryStore($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyCategoryStore relation
 * @method     ChildSpyStoreQuery innerJoinSpyCategoryStore($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyCategoryStore relation
 *
 * @method     ChildSpyStoreQuery joinWithSpyCategoryStore($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyCategoryStore relation
 *
 * @method     ChildSpyStoreQuery leftJoinWithSpyCategoryStore() Adds a LEFT JOIN clause and with to the query using the SpyCategoryStore relation
 * @method     ChildSpyStoreQuery rightJoinWithSpyCategoryStore() Adds a RIGHT JOIN clause and with to the query using the SpyCategoryStore relation
 * @method     ChildSpyStoreQuery innerJoinWithSpyCategoryStore() Adds a INNER JOIN clause and with to the query using the SpyCategoryStore relation
 *
 * @method     ChildSpyStoreQuery leftJoinSpyCmsPageStore($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyCmsPageStore relation
 * @method     ChildSpyStoreQuery rightJoinSpyCmsPageStore($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyCmsPageStore relation
 * @method     ChildSpyStoreQuery innerJoinSpyCmsPageStore($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyCmsPageStore relation
 *
 * @method     ChildSpyStoreQuery joinWithSpyCmsPageStore($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyCmsPageStore relation
 *
 * @method     ChildSpyStoreQuery leftJoinWithSpyCmsPageStore() Adds a LEFT JOIN clause and with to the query using the SpyCmsPageStore relation
 * @method     ChildSpyStoreQuery rightJoinWithSpyCmsPageStore() Adds a RIGHT JOIN clause and with to the query using the SpyCmsPageStore relation
 * @method     ChildSpyStoreQuery innerJoinWithSpyCmsPageStore() Adds a INNER JOIN clause and with to the query using the SpyCmsPageStore relation
 *
 * @method     ChildSpyStoreQuery leftJoinSpyCmsBlockStore($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyCmsBlockStore relation
 * @method     ChildSpyStoreQuery rightJoinSpyCmsBlockStore($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyCmsBlockStore relation
 * @method     ChildSpyStoreQuery innerJoinSpyCmsBlockStore($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyCmsBlockStore relation
 *
 * @method     ChildSpyStoreQuery joinWithSpyCmsBlockStore($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyCmsBlockStore relation
 *
 * @method     ChildSpyStoreQuery leftJoinWithSpyCmsBlockStore() Adds a LEFT JOIN clause and with to the query using the SpyCmsBlockStore relation
 * @method     ChildSpyStoreQuery rightJoinWithSpyCmsBlockStore() Adds a RIGHT JOIN clause and with to the query using the SpyCmsBlockStore relation
 * @method     ChildSpyStoreQuery innerJoinWithSpyCmsBlockStore() Adds a INNER JOIN clause and with to the query using the SpyCmsBlockStore relation
 *
 * @method     ChildSpyStoreQuery leftJoinSpyCompanyStore($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyCompanyStore relation
 * @method     ChildSpyStoreQuery rightJoinSpyCompanyStore($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyCompanyStore relation
 * @method     ChildSpyStoreQuery innerJoinSpyCompanyStore($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyCompanyStore relation
 *
 * @method     ChildSpyStoreQuery joinWithSpyCompanyStore($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyCompanyStore relation
 *
 * @method     ChildSpyStoreQuery leftJoinWithSpyCompanyStore() Adds a LEFT JOIN clause and with to the query using the SpyCompanyStore relation
 * @method     ChildSpyStoreQuery rightJoinWithSpyCompanyStore() Adds a RIGHT JOIN clause and with to the query using the SpyCompanyStore relation
 * @method     ChildSpyStoreQuery innerJoinWithSpyCompanyStore() Adds a INNER JOIN clause and with to the query using the SpyCompanyStore relation
 *
 * @method     ChildSpyStoreQuery leftJoinDiscount($relationAlias = null) Adds a LEFT JOIN clause to the query using the Discount relation
 * @method     ChildSpyStoreQuery rightJoinDiscount($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Discount relation
 * @method     ChildSpyStoreQuery innerJoinDiscount($relationAlias = null) Adds a INNER JOIN clause to the query using the Discount relation
 *
 * @method     ChildSpyStoreQuery joinWithDiscount($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Discount relation
 *
 * @method     ChildSpyStoreQuery leftJoinWithDiscount() Adds a LEFT JOIN clause and with to the query using the Discount relation
 * @method     ChildSpyStoreQuery rightJoinWithDiscount() Adds a RIGHT JOIN clause and with to the query using the Discount relation
 * @method     ChildSpyStoreQuery innerJoinWithDiscount() Adds a INNER JOIN clause and with to the query using the Discount relation
 *
 * @method     ChildSpyStoreQuery leftJoinSpyDiscountStore($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyDiscountStore relation
 * @method     ChildSpyStoreQuery rightJoinSpyDiscountStore($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyDiscountStore relation
 * @method     ChildSpyStoreQuery innerJoinSpyDiscountStore($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyDiscountStore relation
 *
 * @method     ChildSpyStoreQuery joinWithSpyDiscountStore($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyDiscountStore relation
 *
 * @method     ChildSpyStoreQuery leftJoinWithSpyDiscountStore() Adds a LEFT JOIN clause and with to the query using the SpyDiscountStore relation
 * @method     ChildSpyStoreQuery rightJoinWithSpyDiscountStore() Adds a RIGHT JOIN clause and with to the query using the SpyDiscountStore relation
 * @method     ChildSpyStoreQuery innerJoinWithSpyDiscountStore() Adds a INNER JOIN clause and with to the query using the SpyDiscountStore relation
 *
 * @method     ChildSpyStoreQuery leftJoinSpyMerchantStore($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyMerchantStore relation
 * @method     ChildSpyStoreQuery rightJoinSpyMerchantStore($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyMerchantStore relation
 * @method     ChildSpyStoreQuery innerJoinSpyMerchantStore($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyMerchantStore relation
 *
 * @method     ChildSpyStoreQuery joinWithSpyMerchantStore($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyMerchantStore relation
 *
 * @method     ChildSpyStoreQuery leftJoinWithSpyMerchantStore() Adds a LEFT JOIN clause and with to the query using the SpyMerchantStore relation
 * @method     ChildSpyStoreQuery rightJoinWithSpyMerchantStore() Adds a RIGHT JOIN clause and with to the query using the SpyMerchantStore relation
 * @method     ChildSpyStoreQuery innerJoinWithSpyMerchantStore() Adds a INNER JOIN clause and with to the query using the SpyMerchantStore relation
 *
 * @method     ChildSpyStoreQuery leftJoinSpyMerchantRelationshipSalesOrderThreshold($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyMerchantRelationshipSalesOrderThreshold relation
 * @method     ChildSpyStoreQuery rightJoinSpyMerchantRelationshipSalesOrderThreshold($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyMerchantRelationshipSalesOrderThreshold relation
 * @method     ChildSpyStoreQuery innerJoinSpyMerchantRelationshipSalesOrderThreshold($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyMerchantRelationshipSalesOrderThreshold relation
 *
 * @method     ChildSpyStoreQuery joinWithSpyMerchantRelationshipSalesOrderThreshold($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyMerchantRelationshipSalesOrderThreshold relation
 *
 * @method     ChildSpyStoreQuery leftJoinWithSpyMerchantRelationshipSalesOrderThreshold() Adds a LEFT JOIN clause and with to the query using the SpyMerchantRelationshipSalesOrderThreshold relation
 * @method     ChildSpyStoreQuery rightJoinWithSpyMerchantRelationshipSalesOrderThreshold() Adds a RIGHT JOIN clause and with to the query using the SpyMerchantRelationshipSalesOrderThreshold relation
 * @method     ChildSpyStoreQuery innerJoinWithSpyMerchantRelationshipSalesOrderThreshold() Adds a INNER JOIN clause and with to the query using the SpyMerchantRelationshipSalesOrderThreshold relation
 *
 * @method     ChildSpyStoreQuery leftJoinOmsProductReservation($relationAlias = null) Adds a LEFT JOIN clause to the query using the OmsProductReservation relation
 * @method     ChildSpyStoreQuery rightJoinOmsProductReservation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OmsProductReservation relation
 * @method     ChildSpyStoreQuery innerJoinOmsProductReservation($relationAlias = null) Adds a INNER JOIN clause to the query using the OmsProductReservation relation
 *
 * @method     ChildSpyStoreQuery joinWithOmsProductReservation($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the OmsProductReservation relation
 *
 * @method     ChildSpyStoreQuery leftJoinWithOmsProductReservation() Adds a LEFT JOIN clause and with to the query using the OmsProductReservation relation
 * @method     ChildSpyStoreQuery rightJoinWithOmsProductReservation() Adds a RIGHT JOIN clause and with to the query using the OmsProductReservation relation
 * @method     ChildSpyStoreQuery innerJoinWithOmsProductReservation() Adds a INNER JOIN clause and with to the query using the OmsProductReservation relation
 *
 * @method     ChildSpyStoreQuery leftJoinSpyPaymentMethodStore($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyPaymentMethodStore relation
 * @method     ChildSpyStoreQuery rightJoinSpyPaymentMethodStore($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyPaymentMethodStore relation
 * @method     ChildSpyStoreQuery innerJoinSpyPaymentMethodStore($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyPaymentMethodStore relation
 *
 * @method     ChildSpyStoreQuery joinWithSpyPaymentMethodStore($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyPaymentMethodStore relation
 *
 * @method     ChildSpyStoreQuery leftJoinWithSpyPaymentMethodStore() Adds a LEFT JOIN clause and with to the query using the SpyPaymentMethodStore relation
 * @method     ChildSpyStoreQuery rightJoinWithSpyPaymentMethodStore() Adds a RIGHT JOIN clause and with to the query using the SpyPaymentMethodStore relation
 * @method     ChildSpyStoreQuery innerJoinWithSpyPaymentMethodStore() Adds a INNER JOIN clause and with to the query using the SpyPaymentMethodStore relation
 *
 * @method     ChildSpyStoreQuery leftJoinPriceProductStore($relationAlias = null) Adds a LEFT JOIN clause to the query using the PriceProductStore relation
 * @method     ChildSpyStoreQuery rightJoinPriceProductStore($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PriceProductStore relation
 * @method     ChildSpyStoreQuery innerJoinPriceProductStore($relationAlias = null) Adds a INNER JOIN clause to the query using the PriceProductStore relation
 *
 * @method     ChildSpyStoreQuery joinWithPriceProductStore($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the PriceProductStore relation
 *
 * @method     ChildSpyStoreQuery leftJoinWithPriceProductStore() Adds a LEFT JOIN clause and with to the query using the PriceProductStore relation
 * @method     ChildSpyStoreQuery rightJoinWithPriceProductStore() Adds a RIGHT JOIN clause and with to the query using the PriceProductStore relation
 * @method     ChildSpyStoreQuery innerJoinWithPriceProductStore() Adds a INNER JOIN clause and with to the query using the PriceProductStore relation
 *
 * @method     ChildSpyStoreQuery leftJoinPriceProductSchedule($relationAlias = null) Adds a LEFT JOIN clause to the query using the PriceProductSchedule relation
 * @method     ChildSpyStoreQuery rightJoinPriceProductSchedule($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PriceProductSchedule relation
 * @method     ChildSpyStoreQuery innerJoinPriceProductSchedule($relationAlias = null) Adds a INNER JOIN clause to the query using the PriceProductSchedule relation
 *
 * @method     ChildSpyStoreQuery joinWithPriceProductSchedule($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the PriceProductSchedule relation
 *
 * @method     ChildSpyStoreQuery leftJoinWithPriceProductSchedule() Adds a LEFT JOIN clause and with to the query using the PriceProductSchedule relation
 * @method     ChildSpyStoreQuery rightJoinWithPriceProductSchedule() Adds a RIGHT JOIN clause and with to the query using the PriceProductSchedule relation
 * @method     ChildSpyStoreQuery innerJoinWithPriceProductSchedule() Adds a INNER JOIN clause and with to the query using the PriceProductSchedule relation
 *
 * @method     ChildSpyStoreQuery leftJoinSpyProductAbstractStore($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyProductAbstractStore relation
 * @method     ChildSpyStoreQuery rightJoinSpyProductAbstractStore($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyProductAbstractStore relation
 * @method     ChildSpyStoreQuery innerJoinSpyProductAbstractStore($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyProductAbstractStore relation
 *
 * @method     ChildSpyStoreQuery joinWithSpyProductAbstractStore($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyProductAbstractStore relation
 *
 * @method     ChildSpyStoreQuery leftJoinWithSpyProductAbstractStore() Adds a LEFT JOIN clause and with to the query using the SpyProductAbstractStore relation
 * @method     ChildSpyStoreQuery rightJoinWithSpyProductAbstractStore() Adds a RIGHT JOIN clause and with to the query using the SpyProductAbstractStore relation
 * @method     ChildSpyStoreQuery innerJoinWithSpyProductAbstractStore() Adds a INNER JOIN clause and with to the query using the SpyProductAbstractStore relation
 *
 * @method     ChildSpyStoreQuery leftJoinProductLabelStore($relationAlias = null) Adds a LEFT JOIN clause to the query using the ProductLabelStore relation
 * @method     ChildSpyStoreQuery rightJoinProductLabelStore($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ProductLabelStore relation
 * @method     ChildSpyStoreQuery innerJoinProductLabelStore($relationAlias = null) Adds a INNER JOIN clause to the query using the ProductLabelStore relation
 *
 * @method     ChildSpyStoreQuery joinWithProductLabelStore($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ProductLabelStore relation
 *
 * @method     ChildSpyStoreQuery leftJoinWithProductLabelStore() Adds a LEFT JOIN clause and with to the query using the ProductLabelStore relation
 * @method     ChildSpyStoreQuery rightJoinWithProductLabelStore() Adds a RIGHT JOIN clause and with to the query using the ProductLabelStore relation
 * @method     ChildSpyStoreQuery innerJoinWithProductLabelStore() Adds a INNER JOIN clause and with to the query using the ProductLabelStore relation
 *
 * @method     ChildSpyStoreQuery leftJoinSpyProductMeasurementSalesUnitStore($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyProductMeasurementSalesUnitStore relation
 * @method     ChildSpyStoreQuery rightJoinSpyProductMeasurementSalesUnitStore($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyProductMeasurementSalesUnitStore relation
 * @method     ChildSpyStoreQuery innerJoinSpyProductMeasurementSalesUnitStore($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyProductMeasurementSalesUnitStore relation
 *
 * @method     ChildSpyStoreQuery joinWithSpyProductMeasurementSalesUnitStore($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyProductMeasurementSalesUnitStore relation
 *
 * @method     ChildSpyStoreQuery leftJoinWithSpyProductMeasurementSalesUnitStore() Adds a LEFT JOIN clause and with to the query using the SpyProductMeasurementSalesUnitStore relation
 * @method     ChildSpyStoreQuery rightJoinWithSpyProductMeasurementSalesUnitStore() Adds a RIGHT JOIN clause and with to the query using the SpyProductMeasurementSalesUnitStore relation
 * @method     ChildSpyStoreQuery innerJoinWithSpyProductMeasurementSalesUnitStore() Adds a INNER JOIN clause and with to the query using the SpyProductMeasurementSalesUnitStore relation
 *
 * @method     ChildSpyStoreQuery leftJoinProductOptionValuePrice($relationAlias = null) Adds a LEFT JOIN clause to the query using the ProductOptionValuePrice relation
 * @method     ChildSpyStoreQuery rightJoinProductOptionValuePrice($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ProductOptionValuePrice relation
 * @method     ChildSpyStoreQuery innerJoinProductOptionValuePrice($relationAlias = null) Adds a INNER JOIN clause to the query using the ProductOptionValuePrice relation
 *
 * @method     ChildSpyStoreQuery joinWithProductOptionValuePrice($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ProductOptionValuePrice relation
 *
 * @method     ChildSpyStoreQuery leftJoinWithProductOptionValuePrice() Adds a LEFT JOIN clause and with to the query using the ProductOptionValuePrice relation
 * @method     ChildSpyStoreQuery rightJoinWithProductOptionValuePrice() Adds a RIGHT JOIN clause and with to the query using the ProductOptionValuePrice relation
 * @method     ChildSpyStoreQuery innerJoinWithProductOptionValuePrice() Adds a INNER JOIN clause and with to the query using the ProductOptionValuePrice relation
 *
 * @method     ChildSpyStoreQuery leftJoinProductRelationStore($relationAlias = null) Adds a LEFT JOIN clause to the query using the ProductRelationStore relation
 * @method     ChildSpyStoreQuery rightJoinProductRelationStore($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ProductRelationStore relation
 * @method     ChildSpyStoreQuery innerJoinProductRelationStore($relationAlias = null) Adds a INNER JOIN clause to the query using the ProductRelationStore relation
 *
 * @method     ChildSpyStoreQuery joinWithProductRelationStore($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ProductRelationStore relation
 *
 * @method     ChildSpyStoreQuery leftJoinWithProductRelationStore() Adds a LEFT JOIN clause and with to the query using the ProductRelationStore relation
 * @method     ChildSpyStoreQuery rightJoinWithProductRelationStore() Adds a RIGHT JOIN clause and with to the query using the ProductRelationStore relation
 * @method     ChildSpyStoreQuery innerJoinWithProductRelationStore() Adds a INNER JOIN clause and with to the query using the ProductRelationStore relation
 *
 * @method     ChildSpyStoreQuery leftJoinSpyQuote($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyQuote relation
 * @method     ChildSpyStoreQuery rightJoinSpyQuote($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyQuote relation
 * @method     ChildSpyStoreQuery innerJoinSpyQuote($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyQuote relation
 *
 * @method     ChildSpyStoreQuery joinWithSpyQuote($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyQuote relation
 *
 * @method     ChildSpyStoreQuery leftJoinWithSpyQuote() Adds a LEFT JOIN clause and with to the query using the SpyQuote relation
 * @method     ChildSpyStoreQuery rightJoinWithSpyQuote() Adds a RIGHT JOIN clause and with to the query using the SpyQuote relation
 * @method     ChildSpyStoreQuery innerJoinWithSpyQuote() Adds a INNER JOIN clause and with to the query using the SpyQuote relation
 *
 * @method     ChildSpyStoreQuery leftJoinSpySalesOrderThreshold($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpySalesOrderThreshold relation
 * @method     ChildSpyStoreQuery rightJoinSpySalesOrderThreshold($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpySalesOrderThreshold relation
 * @method     ChildSpyStoreQuery innerJoinSpySalesOrderThreshold($relationAlias = null) Adds a INNER JOIN clause to the query using the SpySalesOrderThreshold relation
 *
 * @method     ChildSpyStoreQuery joinWithSpySalesOrderThreshold($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpySalesOrderThreshold relation
 *
 * @method     ChildSpyStoreQuery leftJoinWithSpySalesOrderThreshold() Adds a LEFT JOIN clause and with to the query using the SpySalesOrderThreshold relation
 * @method     ChildSpyStoreQuery rightJoinWithSpySalesOrderThreshold() Adds a RIGHT JOIN clause and with to the query using the SpySalesOrderThreshold relation
 * @method     ChildSpyStoreQuery innerJoinWithSpySalesOrderThreshold() Adds a INNER JOIN clause and with to the query using the SpySalesOrderThreshold relation
 *
 * @method     ChildSpyStoreQuery leftJoinShipmentMethodPrice($relationAlias = null) Adds a LEFT JOIN clause to the query using the ShipmentMethodPrice relation
 * @method     ChildSpyStoreQuery rightJoinShipmentMethodPrice($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ShipmentMethodPrice relation
 * @method     ChildSpyStoreQuery innerJoinShipmentMethodPrice($relationAlias = null) Adds a INNER JOIN clause to the query using the ShipmentMethodPrice relation
 *
 * @method     ChildSpyStoreQuery joinWithShipmentMethodPrice($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ShipmentMethodPrice relation
 *
 * @method     ChildSpyStoreQuery leftJoinWithShipmentMethodPrice() Adds a LEFT JOIN clause and with to the query using the ShipmentMethodPrice relation
 * @method     ChildSpyStoreQuery rightJoinWithShipmentMethodPrice() Adds a RIGHT JOIN clause and with to the query using the ShipmentMethodPrice relation
 * @method     ChildSpyStoreQuery innerJoinWithShipmentMethodPrice() Adds a INNER JOIN clause and with to the query using the ShipmentMethodPrice relation
 *
 * @method     ChildSpyStoreQuery leftJoinShipmentMethodStore($relationAlias = null) Adds a LEFT JOIN clause to the query using the ShipmentMethodStore relation
 * @method     ChildSpyStoreQuery rightJoinShipmentMethodStore($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ShipmentMethodStore relation
 * @method     ChildSpyStoreQuery innerJoinShipmentMethodStore($relationAlias = null) Adds a INNER JOIN clause to the query using the ShipmentMethodStore relation
 *
 * @method     ChildSpyStoreQuery joinWithShipmentMethodStore($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ShipmentMethodStore relation
 *
 * @method     ChildSpyStoreQuery leftJoinWithShipmentMethodStore() Adds a LEFT JOIN clause and with to the query using the ShipmentMethodStore relation
 * @method     ChildSpyStoreQuery rightJoinWithShipmentMethodStore() Adds a RIGHT JOIN clause and with to the query using the ShipmentMethodStore relation
 * @method     ChildSpyStoreQuery innerJoinWithShipmentMethodStore() Adds a INNER JOIN clause and with to the query using the ShipmentMethodStore relation
 *
 * @method     ChildSpyStoreQuery leftJoinStockStore($relationAlias = null) Adds a LEFT JOIN clause to the query using the StockStore relation
 * @method     ChildSpyStoreQuery rightJoinStockStore($relationAlias = null) Adds a RIGHT JOIN clause to the query using the StockStore relation
 * @method     ChildSpyStoreQuery innerJoinStockStore($relationAlias = null) Adds a INNER JOIN clause to the query using the StockStore relation
 *
 * @method     ChildSpyStoreQuery joinWithStockStore($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the StockStore relation
 *
 * @method     ChildSpyStoreQuery leftJoinWithStockStore() Adds a LEFT JOIN clause and with to the query using the StockStore relation
 * @method     ChildSpyStoreQuery rightJoinWithStockStore() Adds a RIGHT JOIN clause and with to the query using the StockStore relation
 * @method     ChildSpyStoreQuery innerJoinWithStockStore() Adds a INNER JOIN clause and with to the query using the StockStore relation
 *
 * @method     ChildSpyStoreQuery leftJoinTouchStorage($relationAlias = null) Adds a LEFT JOIN clause to the query using the TouchStorage relation
 * @method     ChildSpyStoreQuery rightJoinTouchStorage($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TouchStorage relation
 * @method     ChildSpyStoreQuery innerJoinTouchStorage($relationAlias = null) Adds a INNER JOIN clause to the query using the TouchStorage relation
 *
 * @method     ChildSpyStoreQuery joinWithTouchStorage($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the TouchStorage relation
 *
 * @method     ChildSpyStoreQuery leftJoinWithTouchStorage() Adds a LEFT JOIN clause and with to the query using the TouchStorage relation
 * @method     ChildSpyStoreQuery rightJoinWithTouchStorage() Adds a RIGHT JOIN clause and with to the query using the TouchStorage relation
 * @method     ChildSpyStoreQuery innerJoinWithTouchStorage() Adds a INNER JOIN clause and with to the query using the TouchStorage relation
 *
 * @method     ChildSpyStoreQuery leftJoinTouchSearch($relationAlias = null) Adds a LEFT JOIN clause to the query using the TouchSearch relation
 * @method     ChildSpyStoreQuery rightJoinTouchSearch($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TouchSearch relation
 * @method     ChildSpyStoreQuery innerJoinTouchSearch($relationAlias = null) Adds a INNER JOIN clause to the query using the TouchSearch relation
 *
 * @method     ChildSpyStoreQuery joinWithTouchSearch($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the TouchSearch relation
 *
 * @method     ChildSpyStoreQuery leftJoinWithTouchSearch() Adds a LEFT JOIN clause and with to the query using the TouchSearch relation
 * @method     ChildSpyStoreQuery rightJoinWithTouchSearch() Adds a RIGHT JOIN clause and with to the query using the TouchSearch relation
 * @method     ChildSpyStoreQuery innerJoinWithTouchSearch() Adds a INNER JOIN clause and with to the query using the TouchSearch relation
 *
 * @method     \Orm\Zed\Asset\Persistence\SpyAssetStoreQuery|\Orm\Zed\Availability\Persistence\SpyAvailabilityAbstractQuery|\Orm\Zed\Availability\Persistence\SpyAvailabilityQuery|\Orm\Zed\AvailabilityNotification\Persistence\SpyAvailabilityNotificationSubscriptionQuery|\Orm\Zed\Category\Persistence\SpyCategoryStoreQuery|\Orm\Zed\Cms\Persistence\SpyCmsPageStoreQuery|\Orm\Zed\CmsBlock\Persistence\SpyCmsBlockStoreQuery|\Orm\Zed\Company\Persistence\SpyCompanyStoreQuery|\Orm\Zed\Discount\Persistence\SpyDiscountQuery|\Orm\Zed\Discount\Persistence\SpyDiscountStoreQuery|\Orm\Zed\Merchant\Persistence\SpyMerchantStoreQuery|\Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThresholdQuery|\Orm\Zed\Oms\Persistence\SpyOmsProductReservationQuery|\Orm\Zed\Payment\Persistence\SpyPaymentMethodStoreQuery|\Orm\Zed\PriceProduct\Persistence\SpyPriceProductStoreQuery|\Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductScheduleQuery|\Orm\Zed\Product\Persistence\SpyProductAbstractStoreQuery|\Orm\Zed\ProductLabel\Persistence\SpyProductLabelStoreQuery|\Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementSalesUnitStoreQuery|\Orm\Zed\ProductOption\Persistence\SpyProductOptionValuePriceQuery|\Orm\Zed\ProductRelation\Persistence\SpyProductRelationStoreQuery|\Orm\Zed\Quote\Persistence\SpyQuoteQuery|\Orm\Zed\SalesOrderThreshold\Persistence\SpySalesOrderThresholdQuery|\Orm\Zed\Shipment\Persistence\SpyShipmentMethodPriceQuery|\Orm\Zed\Shipment\Persistence\SpyShipmentMethodStoreQuery|\Orm\Zed\Stock\Persistence\SpyStockStoreQuery|\Orm\Zed\Touch\Persistence\SpyTouchStorageQuery|\Orm\Zed\Touch\Persistence\SpyTouchSearchQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyStore|null findOne(ConnectionInterface $con = null) Return the first ChildSpyStore matching the query
 * @method     ChildSpyStore findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyStore matching the query, or a new ChildSpyStore object populated from the query conditions when no match is found
 *
 * @method     ChildSpyStore|null findOneByIdStore(int $id_store) Return the first ChildSpyStore filtered by the id_store column
 * @method     ChildSpyStore|null findOneByName(string $name) Return the first ChildSpyStore filtered by the name column
 * @method     ChildSpyStore|null findOneByStoreReference(string $store_reference) Return the first ChildSpyStore filtered by the store_reference column *

 * @method     ChildSpyStore requirePk($key, ConnectionInterface $con = null) Return the ChildSpyStore by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyStore requireOne(ConnectionInterface $con = null) Return the first ChildSpyStore matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyStore requireOneByIdStore(int $id_store) Return the first ChildSpyStore filtered by the id_store column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyStore requireOneByName(string $name) Return the first ChildSpyStore filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyStore requireOneByStoreReference(string $store_reference) Return the first ChildSpyStore filtered by the store_reference column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyStore[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyStore objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyStore> find(ConnectionInterface $con = null) Return ChildSpyStore objects based on current ModelCriteria
 * @method     ChildSpyStore[]|ObjectCollection findByIdStore(int $id_store) Return ChildSpyStore objects filtered by the id_store column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyStore> findByIdStore(int $id_store) Return ChildSpyStore objects filtered by the id_store column
 * @method     ChildSpyStore[]|ObjectCollection findByName(string $name) Return ChildSpyStore objects filtered by the name column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyStore> findByName(string $name) Return ChildSpyStore objects filtered by the name column
 * @method     ChildSpyStore[]|ObjectCollection findByStoreReference(string $store_reference) Return ChildSpyStore objects filtered by the store_reference column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyStore> findByStoreReference(string $store_reference) Return ChildSpyStore objects filtered by the store_reference column
 * @method     ChildSpyStore[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyStore> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyStoreQuery extends ModelCriteria
{

    /**
     * @var bool
     */
    protected $isForUpdateEnabled = false;

    /**
     * @param bool $isForUpdateEnabled
     *
     * @return $this The primary criteria object
     */
    public function forUpdate($isForUpdateEnabled)
    {
        $this->isForUpdateEnabled = $isForUpdateEnabled;

        return $this;
    }

    /**
     * @param array $params
     *
     * @return string
     */
    public function createSelectSql(&$params)
    {
        $sql = parent::createSelectSql($params);
        if ($this->isForUpdateEnabled) {
            $sql .= ' FOR UPDATE';
        }

        return $sql;
    }

    /**
     * Clear the conditions to allow the reuse of the query object.
     * The ModelCriteria's Model and alias 'all the properties set by construct) will remain.
     *
     * @return $this The primary criteria object
     */
    public function clear()
    {
        parent::clear();

        $this->isSelfSelected = false;
        $this->forUpdate(false);

        return $this;
    }


    /**
     * Issue a SELECT query based on the current ModelCriteria
     * and format the list of results with the current formatter
     * By default, returns an array of model objects
     *
     * @param \Propel\Runtime\Connection\ConnectionInterface|null $con an optional connection object
     *
     * @return \Propel\Runtime\Collection\ObjectCollection|\Propel\Runtime\ActiveRecord\ActiveRecordInterface[]|mixed the list of results, formatted by the current formatter
     */
    public function find(?ConnectionInterface $con = null)
    {
        return parent::find($con);
    }

    /**
     * Issue a SELECT ... LIMIT 1 query based on the current ModelCriteria
     * and format the result with the current formatter
     * By default, returns a model object.
     *
     * Does not work with ->with()s containing one-to-many relations.
     *
     * @param \Propel\Runtime\Connection\ConnectionInterface|null $con an optional connection object
     *
     * @return mixed the result, formatted by the current formatter
     */
    public function findOne(?ConnectionInterface $con = null)
    {
        return parent::findOne($con);
    }

    /**
     * Issue an existence check on the current ModelCriteria
     *
     * @param \Propel\Runtime\Connection\ConnectionInterface|null $con an optional connection object
     *
     * @return bool column existence
     */
    public function exists(?ConnectionInterface $con = null)
    {
        return parent::exists($con);
    }
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Orm\Zed\Store\Persistence\Base\SpyStoreQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\Store\\Persistence\\SpyStore', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyStoreQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyStoreQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyStoreQuery) {
            return $criteria;
        }
        $query = new ChildSpyStoreQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildSpyStore|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = SpyStoreTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
            // the object is already in the instance pool
            return $obj;
        }

        return $this->findPkSimple($key, $con);
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyStore A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_store, name, store_reference FROM spy_store WHERE id_store = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildSpyStore $obj */
            $obj = new ChildSpyStore();
            $obj->hydrate($row);
            SpyStoreTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @return ChildSpyStore|array|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, ConnectionInterface $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($dataFetcher);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
    {

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }

        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($dataFetcher);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildSpyStoreQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyStoreTableMap::COL_ID_STORE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyStoreQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyStoreTableMap::COL_ID_STORE, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idStore Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdStore_Between(array $idStore)
    {
        return $this->filterByIdStore($idStore, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idStores Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdStore_In(array $idStores)
    {
        return $this->filterByIdStore($idStores, Criteria::IN);
    }

    /**
     * Filter the query on the id_store column
     *
     * Example usage:
     * <code>
     * $query->filterByIdStore(1234); // WHERE id_store = 1234
     * $query->filterByIdStore(array(12, 34), Criteria::IN); // WHERE id_store IN (12, 34)
     * $query->filterByIdStore(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_store > 12
     * </code>
     *
     * @param     mixed $idStore The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdStore($idStore = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idStore)) {
            $useMinMax = false;
            if (isset($idStore['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyStoreTableMap::COL_ID_STORE, $idStore['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idStore['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyStoreTableMap::COL_ID_STORE, $idStore['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idStore of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyStoreTableMap::COL_ID_STORE, $idStore, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $names Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByName_In(array $names)
    {
        return $this->filterByName($names, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $name Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByName_Like($name)
    {
        return $this->filterByName($name, Criteria::LIKE);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%', Criteria::LIKE); // WHERE name LIKE '%fooValue%'
     * $query->filterByName([1, 'foo'], Criteria::IN); // WHERE name IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByName($name = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $name = str_replace('*', '%', $name);
        }

        if (is_array($name) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$name of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyStoreTableMap::COL_NAME, $name, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $storeReferences Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByStoreReference_In(array $storeReferences)
    {
        return $this->filterByStoreReference($storeReferences, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $storeReference Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByStoreReference_Like($storeReference)
    {
        return $this->filterByStoreReference($storeReference, Criteria::LIKE);
    }

    /**
     * Filter the query on the store_reference column
     *
     * Example usage:
     * <code>
     * $query->filterByStoreReference('fooValue');   // WHERE store_reference = 'fooValue'
     * $query->filterByStoreReference('%fooValue%', Criteria::LIKE); // WHERE store_reference LIKE '%fooValue%'
     * $query->filterByStoreReference([1, 'foo'], Criteria::IN); // WHERE store_reference IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $storeReference The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByStoreReference($storeReference = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $storeReference = str_replace('*', '%', $storeReference);
        }

        if (is_array($storeReference) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$storeReference of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyStoreTableMap::COL_STORE_REFERENCE, $storeReference, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\Asset\Persistence\SpyAssetStore object
     *
     * @param \Orm\Zed\Asset\Persistence\SpyAssetStore|ObjectCollection $spyAssetStore the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyStoreQuery The current query, for fluid interface
     */
    public function filterBySpyAssetStore($spyAssetStore, $comparison = null)
    {
        if ($spyAssetStore instanceof \Orm\Zed\Asset\Persistence\SpyAssetStore) {
            return $this
                ->addUsingAlias(SpyStoreTableMap::COL_ID_STORE, $spyAssetStore->getFkStore(), $comparison);
        } elseif ($spyAssetStore instanceof ObjectCollection) {
            return $this
                ->useSpyAssetStoreQuery()
                ->filterByPrimaryKeys($spyAssetStore->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyAssetStore() only accepts arguments of type \Orm\Zed\Asset\Persistence\SpyAssetStore or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyAssetStore relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyStoreQuery The current query, for fluid interface
     */
    public function joinSpyAssetStore($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyAssetStore');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'SpyAssetStore');
        }

        return $this;
    }

    /**
     * Use the SpyAssetStore relation SpyAssetStore object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Asset\Persistence\SpyAssetStoreQuery A secondary query class using the current class as primary query
     */
    public function useSpyAssetStoreQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyAssetStore($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyAssetStore', '\Orm\Zed\Asset\Persistence\SpyAssetStoreQuery');
    }

    /**
     * Use the SpyAssetStore relation SpyAssetStore object
     *
     * @param callable(\Orm\Zed\Asset\Persistence\SpyAssetStoreQuery):\Orm\Zed\Asset\Persistence\SpyAssetStoreQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyAssetStoreQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyAssetStoreQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyAssetStore table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Asset\Persistence\SpyAssetStoreQuery The inner query object of the EXISTS statement
     */
    public function useSpyAssetStoreExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyAssetStore', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyAssetStore table for a NOT EXISTS query.
     *
     * @see useSpyAssetStoreExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Asset\Persistence\SpyAssetStoreQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyAssetStoreNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyAssetStore', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Availability\Persistence\SpyAvailabilityAbstract object
     *
     * @param \Orm\Zed\Availability\Persistence\SpyAvailabilityAbstract|ObjectCollection $spyAvailabilityAbstract the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyStoreQuery The current query, for fluid interface
     */
    public function filterByAvailabilityAbstract($spyAvailabilityAbstract, $comparison = null)
    {
        if ($spyAvailabilityAbstract instanceof \Orm\Zed\Availability\Persistence\SpyAvailabilityAbstract) {
            return $this
                ->addUsingAlias(SpyStoreTableMap::COL_ID_STORE, $spyAvailabilityAbstract->getFkStore(), $comparison);
        } elseif ($spyAvailabilityAbstract instanceof ObjectCollection) {
            return $this
                ->useAvailabilityAbstractQuery()
                ->filterByPrimaryKeys($spyAvailabilityAbstract->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByAvailabilityAbstract() only accepts arguments of type \Orm\Zed\Availability\Persistence\SpyAvailabilityAbstract or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the AvailabilityAbstract relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyStoreQuery The current query, for fluid interface
     */
    public function joinAvailabilityAbstract($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('AvailabilityAbstract');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'AvailabilityAbstract');
        }

        return $this;
    }

    /**
     * Use the AvailabilityAbstract relation SpyAvailabilityAbstract object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Availability\Persistence\SpyAvailabilityAbstractQuery A secondary query class using the current class as primary query
     */
    public function useAvailabilityAbstractQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinAvailabilityAbstract($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'AvailabilityAbstract', '\Orm\Zed\Availability\Persistence\SpyAvailabilityAbstractQuery');
    }

    /**
     * Use the AvailabilityAbstract relation SpyAvailabilityAbstract object
     *
     * @param callable(\Orm\Zed\Availability\Persistence\SpyAvailabilityAbstractQuery):\Orm\Zed\Availability\Persistence\SpyAvailabilityAbstractQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withAvailabilityAbstractQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useAvailabilityAbstractQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the AvailabilityAbstract relation to the SpyAvailabilityAbstract table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Availability\Persistence\SpyAvailabilityAbstractQuery The inner query object of the EXISTS statement
     */
    public function useAvailabilityAbstractExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('AvailabilityAbstract', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the AvailabilityAbstract relation to the SpyAvailabilityAbstract table for a NOT EXISTS query.
     *
     * @see useAvailabilityAbstractExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Availability\Persistence\SpyAvailabilityAbstractQuery The inner query object of the NOT EXISTS statement
     */
    public function useAvailabilityAbstractNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('AvailabilityAbstract', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Availability\Persistence\SpyAvailability object
     *
     * @param \Orm\Zed\Availability\Persistence\SpyAvailability|ObjectCollection $spyAvailability the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyStoreQuery The current query, for fluid interface
     */
    public function filterByAvailability($spyAvailability, $comparison = null)
    {
        if ($spyAvailability instanceof \Orm\Zed\Availability\Persistence\SpyAvailability) {
            return $this
                ->addUsingAlias(SpyStoreTableMap::COL_ID_STORE, $spyAvailability->getFkStore(), $comparison);
        } elseif ($spyAvailability instanceof ObjectCollection) {
            return $this
                ->useAvailabilityQuery()
                ->filterByPrimaryKeys($spyAvailability->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByAvailability() only accepts arguments of type \Orm\Zed\Availability\Persistence\SpyAvailability or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Availability relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyStoreQuery The current query, for fluid interface
     */
    public function joinAvailability($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Availability');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Availability');
        }

        return $this;
    }

    /**
     * Use the Availability relation SpyAvailability object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Availability\Persistence\SpyAvailabilityQuery A secondary query class using the current class as primary query
     */
    public function useAvailabilityQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinAvailability($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Availability', '\Orm\Zed\Availability\Persistence\SpyAvailabilityQuery');
    }

    /**
     * Use the Availability relation SpyAvailability object
     *
     * @param callable(\Orm\Zed\Availability\Persistence\SpyAvailabilityQuery):\Orm\Zed\Availability\Persistence\SpyAvailabilityQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withAvailabilityQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useAvailabilityQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the Availability relation to the SpyAvailability table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Availability\Persistence\SpyAvailabilityQuery The inner query object of the EXISTS statement
     */
    public function useAvailabilityExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('Availability', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the Availability relation to the SpyAvailability table for a NOT EXISTS query.
     *
     * @see useAvailabilityExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Availability\Persistence\SpyAvailabilityQuery The inner query object of the NOT EXISTS statement
     */
    public function useAvailabilityNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('Availability', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\AvailabilityNotification\Persistence\SpyAvailabilityNotificationSubscription object
     *
     * @param \Orm\Zed\AvailabilityNotification\Persistence\SpyAvailabilityNotificationSubscription|ObjectCollection $spyAvailabilityNotificationSubscription the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyStoreQuery The current query, for fluid interface
     */
    public function filterBySpyAvailabilityNotificationSubscription($spyAvailabilityNotificationSubscription, $comparison = null)
    {
        if ($spyAvailabilityNotificationSubscription instanceof \Orm\Zed\AvailabilityNotification\Persistence\SpyAvailabilityNotificationSubscription) {
            return $this
                ->addUsingAlias(SpyStoreTableMap::COL_ID_STORE, $spyAvailabilityNotificationSubscription->getFkStore(), $comparison);
        } elseif ($spyAvailabilityNotificationSubscription instanceof ObjectCollection) {
            return $this
                ->useSpyAvailabilityNotificationSubscriptionQuery()
                ->filterByPrimaryKeys($spyAvailabilityNotificationSubscription->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyAvailabilityNotificationSubscription() only accepts arguments of type \Orm\Zed\AvailabilityNotification\Persistence\SpyAvailabilityNotificationSubscription or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyAvailabilityNotificationSubscription relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyStoreQuery The current query, for fluid interface
     */
    public function joinSpyAvailabilityNotificationSubscription($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyAvailabilityNotificationSubscription');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'SpyAvailabilityNotificationSubscription');
        }

        return $this;
    }

    /**
     * Use the SpyAvailabilityNotificationSubscription relation SpyAvailabilityNotificationSubscription object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\AvailabilityNotification\Persistence\SpyAvailabilityNotificationSubscriptionQuery A secondary query class using the current class as primary query
     */
    public function useSpyAvailabilityNotificationSubscriptionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyAvailabilityNotificationSubscription($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyAvailabilityNotificationSubscription', '\Orm\Zed\AvailabilityNotification\Persistence\SpyAvailabilityNotificationSubscriptionQuery');
    }

    /**
     * Use the SpyAvailabilityNotificationSubscription relation SpyAvailabilityNotificationSubscription object
     *
     * @param callable(\Orm\Zed\AvailabilityNotification\Persistence\SpyAvailabilityNotificationSubscriptionQuery):\Orm\Zed\AvailabilityNotification\Persistence\SpyAvailabilityNotificationSubscriptionQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyAvailabilityNotificationSubscriptionQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyAvailabilityNotificationSubscriptionQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyAvailabilityNotificationSubscription table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\AvailabilityNotification\Persistence\SpyAvailabilityNotificationSubscriptionQuery The inner query object of the EXISTS statement
     */
    public function useSpyAvailabilityNotificationSubscriptionExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyAvailabilityNotificationSubscription', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyAvailabilityNotificationSubscription table for a NOT EXISTS query.
     *
     * @see useSpyAvailabilityNotificationSubscriptionExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\AvailabilityNotification\Persistence\SpyAvailabilityNotificationSubscriptionQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyAvailabilityNotificationSubscriptionNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyAvailabilityNotificationSubscription', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Category\Persistence\SpyCategoryStore object
     *
     * @param \Orm\Zed\Category\Persistence\SpyCategoryStore|ObjectCollection $spyCategoryStore the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyStoreQuery The current query, for fluid interface
     */
    public function filterBySpyCategoryStore($spyCategoryStore, $comparison = null)
    {
        if ($spyCategoryStore instanceof \Orm\Zed\Category\Persistence\SpyCategoryStore) {
            return $this
                ->addUsingAlias(SpyStoreTableMap::COL_ID_STORE, $spyCategoryStore->getFkStore(), $comparison);
        } elseif ($spyCategoryStore instanceof ObjectCollection) {
            return $this
                ->useSpyCategoryStoreQuery()
                ->filterByPrimaryKeys($spyCategoryStore->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyCategoryStore() only accepts arguments of type \Orm\Zed\Category\Persistence\SpyCategoryStore or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyCategoryStore relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyStoreQuery The current query, for fluid interface
     */
    public function joinSpyCategoryStore($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyCategoryStore');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'SpyCategoryStore');
        }

        return $this;
    }

    /**
     * Use the SpyCategoryStore relation SpyCategoryStore object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Category\Persistence\SpyCategoryStoreQuery A secondary query class using the current class as primary query
     */
    public function useSpyCategoryStoreQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyCategoryStore($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyCategoryStore', '\Orm\Zed\Category\Persistence\SpyCategoryStoreQuery');
    }

    /**
     * Use the SpyCategoryStore relation SpyCategoryStore object
     *
     * @param callable(\Orm\Zed\Category\Persistence\SpyCategoryStoreQuery):\Orm\Zed\Category\Persistence\SpyCategoryStoreQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyCategoryStoreQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyCategoryStoreQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyCategoryStore table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Category\Persistence\SpyCategoryStoreQuery The inner query object of the EXISTS statement
     */
    public function useSpyCategoryStoreExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyCategoryStore', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyCategoryStore table for a NOT EXISTS query.
     *
     * @see useSpyCategoryStoreExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Category\Persistence\SpyCategoryStoreQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyCategoryStoreNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyCategoryStore', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Cms\Persistence\SpyCmsPageStore object
     *
     * @param \Orm\Zed\Cms\Persistence\SpyCmsPageStore|ObjectCollection $spyCmsPageStore the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyStoreQuery The current query, for fluid interface
     */
    public function filterBySpyCmsPageStore($spyCmsPageStore, $comparison = null)
    {
        if ($spyCmsPageStore instanceof \Orm\Zed\Cms\Persistence\SpyCmsPageStore) {
            return $this
                ->addUsingAlias(SpyStoreTableMap::COL_ID_STORE, $spyCmsPageStore->getFkStore(), $comparison);
        } elseif ($spyCmsPageStore instanceof ObjectCollection) {
            return $this
                ->useSpyCmsPageStoreQuery()
                ->filterByPrimaryKeys($spyCmsPageStore->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyCmsPageStore() only accepts arguments of type \Orm\Zed\Cms\Persistence\SpyCmsPageStore or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyCmsPageStore relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyStoreQuery The current query, for fluid interface
     */
    public function joinSpyCmsPageStore($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyCmsPageStore');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'SpyCmsPageStore');
        }

        return $this;
    }

    /**
     * Use the SpyCmsPageStore relation SpyCmsPageStore object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Cms\Persistence\SpyCmsPageStoreQuery A secondary query class using the current class as primary query
     */
    public function useSpyCmsPageStoreQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyCmsPageStore($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyCmsPageStore', '\Orm\Zed\Cms\Persistence\SpyCmsPageStoreQuery');
    }

    /**
     * Use the SpyCmsPageStore relation SpyCmsPageStore object
     *
     * @param callable(\Orm\Zed\Cms\Persistence\SpyCmsPageStoreQuery):\Orm\Zed\Cms\Persistence\SpyCmsPageStoreQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyCmsPageStoreQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyCmsPageStoreQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyCmsPageStore table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Cms\Persistence\SpyCmsPageStoreQuery The inner query object of the EXISTS statement
     */
    public function useSpyCmsPageStoreExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyCmsPageStore', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyCmsPageStore table for a NOT EXISTS query.
     *
     * @see useSpyCmsPageStoreExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Cms\Persistence\SpyCmsPageStoreQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyCmsPageStoreNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyCmsPageStore', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\CmsBlock\Persistence\SpyCmsBlockStore object
     *
     * @param \Orm\Zed\CmsBlock\Persistence\SpyCmsBlockStore|ObjectCollection $spyCmsBlockStore the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyStoreQuery The current query, for fluid interface
     */
    public function filterBySpyCmsBlockStore($spyCmsBlockStore, $comparison = null)
    {
        if ($spyCmsBlockStore instanceof \Orm\Zed\CmsBlock\Persistence\SpyCmsBlockStore) {
            return $this
                ->addUsingAlias(SpyStoreTableMap::COL_ID_STORE, $spyCmsBlockStore->getFkStore(), $comparison);
        } elseif ($spyCmsBlockStore instanceof ObjectCollection) {
            return $this
                ->useSpyCmsBlockStoreQuery()
                ->filterByPrimaryKeys($spyCmsBlockStore->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyCmsBlockStore() only accepts arguments of type \Orm\Zed\CmsBlock\Persistence\SpyCmsBlockStore or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyCmsBlockStore relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyStoreQuery The current query, for fluid interface
     */
    public function joinSpyCmsBlockStore($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyCmsBlockStore');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'SpyCmsBlockStore');
        }

        return $this;
    }

    /**
     * Use the SpyCmsBlockStore relation SpyCmsBlockStore object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\CmsBlock\Persistence\SpyCmsBlockStoreQuery A secondary query class using the current class as primary query
     */
    public function useSpyCmsBlockStoreQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyCmsBlockStore($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyCmsBlockStore', '\Orm\Zed\CmsBlock\Persistence\SpyCmsBlockStoreQuery');
    }

    /**
     * Use the SpyCmsBlockStore relation SpyCmsBlockStore object
     *
     * @param callable(\Orm\Zed\CmsBlock\Persistence\SpyCmsBlockStoreQuery):\Orm\Zed\CmsBlock\Persistence\SpyCmsBlockStoreQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyCmsBlockStoreQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyCmsBlockStoreQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyCmsBlockStore table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\CmsBlock\Persistence\SpyCmsBlockStoreQuery The inner query object of the EXISTS statement
     */
    public function useSpyCmsBlockStoreExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyCmsBlockStore', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyCmsBlockStore table for a NOT EXISTS query.
     *
     * @see useSpyCmsBlockStoreExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\CmsBlock\Persistence\SpyCmsBlockStoreQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyCmsBlockStoreNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyCmsBlockStore', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Company\Persistence\SpyCompanyStore object
     *
     * @param \Orm\Zed\Company\Persistence\SpyCompanyStore|ObjectCollection $spyCompanyStore the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyStoreQuery The current query, for fluid interface
     */
    public function filterBySpyCompanyStore($spyCompanyStore, $comparison = null)
    {
        if ($spyCompanyStore instanceof \Orm\Zed\Company\Persistence\SpyCompanyStore) {
            return $this
                ->addUsingAlias(SpyStoreTableMap::COL_ID_STORE, $spyCompanyStore->getFkStore(), $comparison);
        } elseif ($spyCompanyStore instanceof ObjectCollection) {
            return $this
                ->useSpyCompanyStoreQuery()
                ->filterByPrimaryKeys($spyCompanyStore->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyCompanyStore() only accepts arguments of type \Orm\Zed\Company\Persistence\SpyCompanyStore or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyCompanyStore relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyStoreQuery The current query, for fluid interface
     */
    public function joinSpyCompanyStore($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyCompanyStore');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'SpyCompanyStore');
        }

        return $this;
    }

    /**
     * Use the SpyCompanyStore relation SpyCompanyStore object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Company\Persistence\SpyCompanyStoreQuery A secondary query class using the current class as primary query
     */
    public function useSpyCompanyStoreQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyCompanyStore($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyCompanyStore', '\Orm\Zed\Company\Persistence\SpyCompanyStoreQuery');
    }

    /**
     * Use the SpyCompanyStore relation SpyCompanyStore object
     *
     * @param callable(\Orm\Zed\Company\Persistence\SpyCompanyStoreQuery):\Orm\Zed\Company\Persistence\SpyCompanyStoreQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyCompanyStoreQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyCompanyStoreQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyCompanyStore table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Company\Persistence\SpyCompanyStoreQuery The inner query object of the EXISTS statement
     */
    public function useSpyCompanyStoreExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyCompanyStore', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyCompanyStore table for a NOT EXISTS query.
     *
     * @see useSpyCompanyStoreExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Company\Persistence\SpyCompanyStoreQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyCompanyStoreNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyCompanyStore', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Discount\Persistence\SpyDiscount object
     *
     * @param \Orm\Zed\Discount\Persistence\SpyDiscount|ObjectCollection $spyDiscount the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyStoreQuery The current query, for fluid interface
     */
    public function filterByDiscount($spyDiscount, $comparison = null)
    {
        if ($spyDiscount instanceof \Orm\Zed\Discount\Persistence\SpyDiscount) {
            return $this
                ->addUsingAlias(SpyStoreTableMap::COL_ID_STORE, $spyDiscount->getFkStore(), $comparison);
        } elseif ($spyDiscount instanceof ObjectCollection) {
            return $this
                ->useDiscountQuery()
                ->filterByPrimaryKeys($spyDiscount->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByDiscount() only accepts arguments of type \Orm\Zed\Discount\Persistence\SpyDiscount or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Discount relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyStoreQuery The current query, for fluid interface
     */
    public function joinDiscount($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Discount');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Discount');
        }

        return $this;
    }

    /**
     * Use the Discount relation SpyDiscount object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Discount\Persistence\SpyDiscountQuery A secondary query class using the current class as primary query
     */
    public function useDiscountQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinDiscount($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Discount', '\Orm\Zed\Discount\Persistence\SpyDiscountQuery');
    }

    /**
     * Use the Discount relation SpyDiscount object
     *
     * @param callable(\Orm\Zed\Discount\Persistence\SpyDiscountQuery):\Orm\Zed\Discount\Persistence\SpyDiscountQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withDiscountQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useDiscountQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the Discount relation to the SpyDiscount table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Discount\Persistence\SpyDiscountQuery The inner query object of the EXISTS statement
     */
    public function useDiscountExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('Discount', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the Discount relation to the SpyDiscount table for a NOT EXISTS query.
     *
     * @see useDiscountExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Discount\Persistence\SpyDiscountQuery The inner query object of the NOT EXISTS statement
     */
    public function useDiscountNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('Discount', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Discount\Persistence\SpyDiscountStore object
     *
     * @param \Orm\Zed\Discount\Persistence\SpyDiscountStore|ObjectCollection $spyDiscountStore the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyStoreQuery The current query, for fluid interface
     */
    public function filterBySpyDiscountStore($spyDiscountStore, $comparison = null)
    {
        if ($spyDiscountStore instanceof \Orm\Zed\Discount\Persistence\SpyDiscountStore) {
            return $this
                ->addUsingAlias(SpyStoreTableMap::COL_ID_STORE, $spyDiscountStore->getFkStore(), $comparison);
        } elseif ($spyDiscountStore instanceof ObjectCollection) {
            return $this
                ->useSpyDiscountStoreQuery()
                ->filterByPrimaryKeys($spyDiscountStore->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyDiscountStore() only accepts arguments of type \Orm\Zed\Discount\Persistence\SpyDiscountStore or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyDiscountStore relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyStoreQuery The current query, for fluid interface
     */
    public function joinSpyDiscountStore($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyDiscountStore');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'SpyDiscountStore');
        }

        return $this;
    }

    /**
     * Use the SpyDiscountStore relation SpyDiscountStore object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Discount\Persistence\SpyDiscountStoreQuery A secondary query class using the current class as primary query
     */
    public function useSpyDiscountStoreQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyDiscountStore($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyDiscountStore', '\Orm\Zed\Discount\Persistence\SpyDiscountStoreQuery');
    }

    /**
     * Use the SpyDiscountStore relation SpyDiscountStore object
     *
     * @param callable(\Orm\Zed\Discount\Persistence\SpyDiscountStoreQuery):\Orm\Zed\Discount\Persistence\SpyDiscountStoreQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyDiscountStoreQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyDiscountStoreQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyDiscountStore table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Discount\Persistence\SpyDiscountStoreQuery The inner query object of the EXISTS statement
     */
    public function useSpyDiscountStoreExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyDiscountStore', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyDiscountStore table for a NOT EXISTS query.
     *
     * @see useSpyDiscountStoreExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Discount\Persistence\SpyDiscountStoreQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyDiscountStoreNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyDiscountStore', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Merchant\Persistence\SpyMerchantStore object
     *
     * @param \Orm\Zed\Merchant\Persistence\SpyMerchantStore|ObjectCollection $spyMerchantStore the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyStoreQuery The current query, for fluid interface
     */
    public function filterBySpyMerchantStore($spyMerchantStore, $comparison = null)
    {
        if ($spyMerchantStore instanceof \Orm\Zed\Merchant\Persistence\SpyMerchantStore) {
            return $this
                ->addUsingAlias(SpyStoreTableMap::COL_ID_STORE, $spyMerchantStore->getFkStore(), $comparison);
        } elseif ($spyMerchantStore instanceof ObjectCollection) {
            return $this
                ->useSpyMerchantStoreQuery()
                ->filterByPrimaryKeys($spyMerchantStore->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyMerchantStore() only accepts arguments of type \Orm\Zed\Merchant\Persistence\SpyMerchantStore or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyMerchantStore relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyStoreQuery The current query, for fluid interface
     */
    public function joinSpyMerchantStore($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyMerchantStore');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'SpyMerchantStore');
        }

        return $this;
    }

    /**
     * Use the SpyMerchantStore relation SpyMerchantStore object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Merchant\Persistence\SpyMerchantStoreQuery A secondary query class using the current class as primary query
     */
    public function useSpyMerchantStoreQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyMerchantStore($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyMerchantStore', '\Orm\Zed\Merchant\Persistence\SpyMerchantStoreQuery');
    }

    /**
     * Use the SpyMerchantStore relation SpyMerchantStore object
     *
     * @param callable(\Orm\Zed\Merchant\Persistence\SpyMerchantStoreQuery):\Orm\Zed\Merchant\Persistence\SpyMerchantStoreQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyMerchantStoreQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyMerchantStoreQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyMerchantStore table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Merchant\Persistence\SpyMerchantStoreQuery The inner query object of the EXISTS statement
     */
    public function useSpyMerchantStoreExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyMerchantStore', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyMerchantStore table for a NOT EXISTS query.
     *
     * @see useSpyMerchantStoreExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Merchant\Persistence\SpyMerchantStoreQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyMerchantStoreNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyMerchantStore', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThreshold object
     *
     * @param \Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThreshold|ObjectCollection $spyMerchantRelationshipSalesOrderThreshold the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyStoreQuery The current query, for fluid interface
     */
    public function filterBySpyMerchantRelationshipSalesOrderThreshold($spyMerchantRelationshipSalesOrderThreshold, $comparison = null)
    {
        if ($spyMerchantRelationshipSalesOrderThreshold instanceof \Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThreshold) {
            return $this
                ->addUsingAlias(SpyStoreTableMap::COL_ID_STORE, $spyMerchantRelationshipSalesOrderThreshold->getFkStore(), $comparison);
        } elseif ($spyMerchantRelationshipSalesOrderThreshold instanceof ObjectCollection) {
            return $this
                ->useSpyMerchantRelationshipSalesOrderThresholdQuery()
                ->filterByPrimaryKeys($spyMerchantRelationshipSalesOrderThreshold->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyMerchantRelationshipSalesOrderThreshold() only accepts arguments of type \Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThreshold or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyMerchantRelationshipSalesOrderThreshold relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyStoreQuery The current query, for fluid interface
     */
    public function joinSpyMerchantRelationshipSalesOrderThreshold($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyMerchantRelationshipSalesOrderThreshold');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'SpyMerchantRelationshipSalesOrderThreshold');
        }

        return $this;
    }

    /**
     * Use the SpyMerchantRelationshipSalesOrderThreshold relation SpyMerchantRelationshipSalesOrderThreshold object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThresholdQuery A secondary query class using the current class as primary query
     */
    public function useSpyMerchantRelationshipSalesOrderThresholdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyMerchantRelationshipSalesOrderThreshold($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyMerchantRelationshipSalesOrderThreshold', '\Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThresholdQuery');
    }

    /**
     * Use the SpyMerchantRelationshipSalesOrderThreshold relation SpyMerchantRelationshipSalesOrderThreshold object
     *
     * @param callable(\Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThresholdQuery):\Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThresholdQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyMerchantRelationshipSalesOrderThresholdQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyMerchantRelationshipSalesOrderThresholdQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyMerchantRelationshipSalesOrderThreshold table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThresholdQuery The inner query object of the EXISTS statement
     */
    public function useSpyMerchantRelationshipSalesOrderThresholdExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyMerchantRelationshipSalesOrderThreshold', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyMerchantRelationshipSalesOrderThreshold table for a NOT EXISTS query.
     *
     * @see useSpyMerchantRelationshipSalesOrderThresholdExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThresholdQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyMerchantRelationshipSalesOrderThresholdNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyMerchantRelationshipSalesOrderThreshold', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Oms\Persistence\SpyOmsProductReservation object
     *
     * @param \Orm\Zed\Oms\Persistence\SpyOmsProductReservation|ObjectCollection $spyOmsProductReservation the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyStoreQuery The current query, for fluid interface
     */
    public function filterByOmsProductReservation($spyOmsProductReservation, $comparison = null)
    {
        if ($spyOmsProductReservation instanceof \Orm\Zed\Oms\Persistence\SpyOmsProductReservation) {
            return $this
                ->addUsingAlias(SpyStoreTableMap::COL_ID_STORE, $spyOmsProductReservation->getFkStore(), $comparison);
        } elseif ($spyOmsProductReservation instanceof ObjectCollection) {
            return $this
                ->useOmsProductReservationQuery()
                ->filterByPrimaryKeys($spyOmsProductReservation->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByOmsProductReservation() only accepts arguments of type \Orm\Zed\Oms\Persistence\SpyOmsProductReservation or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OmsProductReservation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyStoreQuery The current query, for fluid interface
     */
    public function joinOmsProductReservation($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OmsProductReservation');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'OmsProductReservation');
        }

        return $this;
    }

    /**
     * Use the OmsProductReservation relation SpyOmsProductReservation object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Oms\Persistence\SpyOmsProductReservationQuery A secondary query class using the current class as primary query
     */
    public function useOmsProductReservationQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinOmsProductReservation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OmsProductReservation', '\Orm\Zed\Oms\Persistence\SpyOmsProductReservationQuery');
    }

    /**
     * Use the OmsProductReservation relation SpyOmsProductReservation object
     *
     * @param callable(\Orm\Zed\Oms\Persistence\SpyOmsProductReservationQuery):\Orm\Zed\Oms\Persistence\SpyOmsProductReservationQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withOmsProductReservationQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useOmsProductReservationQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the OmsProductReservation relation to the SpyOmsProductReservation table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Oms\Persistence\SpyOmsProductReservationQuery The inner query object of the EXISTS statement
     */
    public function useOmsProductReservationExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('OmsProductReservation', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the OmsProductReservation relation to the SpyOmsProductReservation table for a NOT EXISTS query.
     *
     * @see useOmsProductReservationExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Oms\Persistence\SpyOmsProductReservationQuery The inner query object of the NOT EXISTS statement
     */
    public function useOmsProductReservationNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('OmsProductReservation', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Payment\Persistence\SpyPaymentMethodStore object
     *
     * @param \Orm\Zed\Payment\Persistence\SpyPaymentMethodStore|ObjectCollection $spyPaymentMethodStore the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyStoreQuery The current query, for fluid interface
     */
    public function filterBySpyPaymentMethodStore($spyPaymentMethodStore, $comparison = null)
    {
        if ($spyPaymentMethodStore instanceof \Orm\Zed\Payment\Persistence\SpyPaymentMethodStore) {
            return $this
                ->addUsingAlias(SpyStoreTableMap::COL_ID_STORE, $spyPaymentMethodStore->getFkStore(), $comparison);
        } elseif ($spyPaymentMethodStore instanceof ObjectCollection) {
            return $this
                ->useSpyPaymentMethodStoreQuery()
                ->filterByPrimaryKeys($spyPaymentMethodStore->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyPaymentMethodStore() only accepts arguments of type \Orm\Zed\Payment\Persistence\SpyPaymentMethodStore or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyPaymentMethodStore relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyStoreQuery The current query, for fluid interface
     */
    public function joinSpyPaymentMethodStore($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyPaymentMethodStore');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'SpyPaymentMethodStore');
        }

        return $this;
    }

    /**
     * Use the SpyPaymentMethodStore relation SpyPaymentMethodStore object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Payment\Persistence\SpyPaymentMethodStoreQuery A secondary query class using the current class as primary query
     */
    public function useSpyPaymentMethodStoreQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyPaymentMethodStore($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyPaymentMethodStore', '\Orm\Zed\Payment\Persistence\SpyPaymentMethodStoreQuery');
    }

    /**
     * Use the SpyPaymentMethodStore relation SpyPaymentMethodStore object
     *
     * @param callable(\Orm\Zed\Payment\Persistence\SpyPaymentMethodStoreQuery):\Orm\Zed\Payment\Persistence\SpyPaymentMethodStoreQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyPaymentMethodStoreQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyPaymentMethodStoreQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyPaymentMethodStore table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Payment\Persistence\SpyPaymentMethodStoreQuery The inner query object of the EXISTS statement
     */
    public function useSpyPaymentMethodStoreExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyPaymentMethodStore', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyPaymentMethodStore table for a NOT EXISTS query.
     *
     * @see useSpyPaymentMethodStoreExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Payment\Persistence\SpyPaymentMethodStoreQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyPaymentMethodStoreNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyPaymentMethodStore', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\PriceProduct\Persistence\SpyPriceProductStore object
     *
     * @param \Orm\Zed\PriceProduct\Persistence\SpyPriceProductStore|ObjectCollection $spyPriceProductStore the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyStoreQuery The current query, for fluid interface
     */
    public function filterByPriceProductStore($spyPriceProductStore, $comparison = null)
    {
        if ($spyPriceProductStore instanceof \Orm\Zed\PriceProduct\Persistence\SpyPriceProductStore) {
            return $this
                ->addUsingAlias(SpyStoreTableMap::COL_ID_STORE, $spyPriceProductStore->getFkStore(), $comparison);
        } elseif ($spyPriceProductStore instanceof ObjectCollection) {
            return $this
                ->usePriceProductStoreQuery()
                ->filterByPrimaryKeys($spyPriceProductStore->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPriceProductStore() only accepts arguments of type \Orm\Zed\PriceProduct\Persistence\SpyPriceProductStore or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PriceProductStore relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyStoreQuery The current query, for fluid interface
     */
    public function joinPriceProductStore($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PriceProductStore');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'PriceProductStore');
        }

        return $this;
    }

    /**
     * Use the PriceProductStore relation SpyPriceProductStore object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\PriceProduct\Persistence\SpyPriceProductStoreQuery A secondary query class using the current class as primary query
     */
    public function usePriceProductStoreQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinPriceProductStore($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PriceProductStore', '\Orm\Zed\PriceProduct\Persistence\SpyPriceProductStoreQuery');
    }

    /**
     * Use the PriceProductStore relation SpyPriceProductStore object
     *
     * @param callable(\Orm\Zed\PriceProduct\Persistence\SpyPriceProductStoreQuery):\Orm\Zed\PriceProduct\Persistence\SpyPriceProductStoreQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withPriceProductStoreQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->usePriceProductStoreQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the PriceProductStore relation to the SpyPriceProductStore table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\PriceProduct\Persistence\SpyPriceProductStoreQuery The inner query object of the EXISTS statement
     */
    public function usePriceProductStoreExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('PriceProductStore', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the PriceProductStore relation to the SpyPriceProductStore table for a NOT EXISTS query.
     *
     * @see usePriceProductStoreExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\PriceProduct\Persistence\SpyPriceProductStoreQuery The inner query object of the NOT EXISTS statement
     */
    public function usePriceProductStoreNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('PriceProductStore', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductSchedule object
     *
     * @param \Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductSchedule|ObjectCollection $spyPriceProductSchedule the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyStoreQuery The current query, for fluid interface
     */
    public function filterByPriceProductSchedule($spyPriceProductSchedule, $comparison = null)
    {
        if ($spyPriceProductSchedule instanceof \Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductSchedule) {
            return $this
                ->addUsingAlias(SpyStoreTableMap::COL_ID_STORE, $spyPriceProductSchedule->getFkStore(), $comparison);
        } elseif ($spyPriceProductSchedule instanceof ObjectCollection) {
            return $this
                ->usePriceProductScheduleQuery()
                ->filterByPrimaryKeys($spyPriceProductSchedule->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPriceProductSchedule() only accepts arguments of type \Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductSchedule or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PriceProductSchedule relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyStoreQuery The current query, for fluid interface
     */
    public function joinPriceProductSchedule($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PriceProductSchedule');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'PriceProductSchedule');
        }

        return $this;
    }

    /**
     * Use the PriceProductSchedule relation SpyPriceProductSchedule object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductScheduleQuery A secondary query class using the current class as primary query
     */
    public function usePriceProductScheduleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPriceProductSchedule($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PriceProductSchedule', '\Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductScheduleQuery');
    }

    /**
     * Use the PriceProductSchedule relation SpyPriceProductSchedule object
     *
     * @param callable(\Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductScheduleQuery):\Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductScheduleQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withPriceProductScheduleQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->usePriceProductScheduleQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the PriceProductSchedule relation to the SpyPriceProductSchedule table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductScheduleQuery The inner query object of the EXISTS statement
     */
    public function usePriceProductScheduleExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('PriceProductSchedule', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the PriceProductSchedule relation to the SpyPriceProductSchedule table for a NOT EXISTS query.
     *
     * @see usePriceProductScheduleExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductScheduleQuery The inner query object of the NOT EXISTS statement
     */
    public function usePriceProductScheduleNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('PriceProductSchedule', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Product\Persistence\SpyProductAbstractStore object
     *
     * @param \Orm\Zed\Product\Persistence\SpyProductAbstractStore|ObjectCollection $spyProductAbstractStore the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyStoreQuery The current query, for fluid interface
     */
    public function filterBySpyProductAbstractStore($spyProductAbstractStore, $comparison = null)
    {
        if ($spyProductAbstractStore instanceof \Orm\Zed\Product\Persistence\SpyProductAbstractStore) {
            return $this
                ->addUsingAlias(SpyStoreTableMap::COL_ID_STORE, $spyProductAbstractStore->getFkStore(), $comparison);
        } elseif ($spyProductAbstractStore instanceof ObjectCollection) {
            return $this
                ->useSpyProductAbstractStoreQuery()
                ->filterByPrimaryKeys($spyProductAbstractStore->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyProductAbstractStore() only accepts arguments of type \Orm\Zed\Product\Persistence\SpyProductAbstractStore or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyProductAbstractStore relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyStoreQuery The current query, for fluid interface
     */
    public function joinSpyProductAbstractStore($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyProductAbstractStore');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'SpyProductAbstractStore');
        }

        return $this;
    }

    /**
     * Use the SpyProductAbstractStore relation SpyProductAbstractStore object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Product\Persistence\SpyProductAbstractStoreQuery A secondary query class using the current class as primary query
     */
    public function useSpyProductAbstractStoreQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyProductAbstractStore($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyProductAbstractStore', '\Orm\Zed\Product\Persistence\SpyProductAbstractStoreQuery');
    }

    /**
     * Use the SpyProductAbstractStore relation SpyProductAbstractStore object
     *
     * @param callable(\Orm\Zed\Product\Persistence\SpyProductAbstractStoreQuery):\Orm\Zed\Product\Persistence\SpyProductAbstractStoreQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyProductAbstractStoreQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyProductAbstractStoreQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyProductAbstractStore table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Product\Persistence\SpyProductAbstractStoreQuery The inner query object of the EXISTS statement
     */
    public function useSpyProductAbstractStoreExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyProductAbstractStore', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyProductAbstractStore table for a NOT EXISTS query.
     *
     * @see useSpyProductAbstractStoreExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Product\Persistence\SpyProductAbstractStoreQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyProductAbstractStoreNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyProductAbstractStore', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\ProductLabel\Persistence\SpyProductLabelStore object
     *
     * @param \Orm\Zed\ProductLabel\Persistence\SpyProductLabelStore|ObjectCollection $spyProductLabelStore the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyStoreQuery The current query, for fluid interface
     */
    public function filterByProductLabelStore($spyProductLabelStore, $comparison = null)
    {
        if ($spyProductLabelStore instanceof \Orm\Zed\ProductLabel\Persistence\SpyProductLabelStore) {
            return $this
                ->addUsingAlias(SpyStoreTableMap::COL_ID_STORE, $spyProductLabelStore->getFkStore(), $comparison);
        } elseif ($spyProductLabelStore instanceof ObjectCollection) {
            return $this
                ->useProductLabelStoreQuery()
                ->filterByPrimaryKeys($spyProductLabelStore->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByProductLabelStore() only accepts arguments of type \Orm\Zed\ProductLabel\Persistence\SpyProductLabelStore or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ProductLabelStore relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyStoreQuery The current query, for fluid interface
     */
    public function joinProductLabelStore($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ProductLabelStore');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'ProductLabelStore');
        }

        return $this;
    }

    /**
     * Use the ProductLabelStore relation SpyProductLabelStore object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\ProductLabel\Persistence\SpyProductLabelStoreQuery A secondary query class using the current class as primary query
     */
    public function useProductLabelStoreQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProductLabelStore($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ProductLabelStore', '\Orm\Zed\ProductLabel\Persistence\SpyProductLabelStoreQuery');
    }

    /**
     * Use the ProductLabelStore relation SpyProductLabelStore object
     *
     * @param callable(\Orm\Zed\ProductLabel\Persistence\SpyProductLabelStoreQuery):\Orm\Zed\ProductLabel\Persistence\SpyProductLabelStoreQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withProductLabelStoreQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useProductLabelStoreQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the ProductLabelStore relation to the SpyProductLabelStore table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\ProductLabel\Persistence\SpyProductLabelStoreQuery The inner query object of the EXISTS statement
     */
    public function useProductLabelStoreExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('ProductLabelStore', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the ProductLabelStore relation to the SpyProductLabelStore table for a NOT EXISTS query.
     *
     * @see useProductLabelStoreExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\ProductLabel\Persistence\SpyProductLabelStoreQuery The inner query object of the NOT EXISTS statement
     */
    public function useProductLabelStoreNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('ProductLabelStore', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementSalesUnitStore object
     *
     * @param \Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementSalesUnitStore|ObjectCollection $spyProductMeasurementSalesUnitStore the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyStoreQuery The current query, for fluid interface
     */
    public function filterBySpyProductMeasurementSalesUnitStore($spyProductMeasurementSalesUnitStore, $comparison = null)
    {
        if ($spyProductMeasurementSalesUnitStore instanceof \Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementSalesUnitStore) {
            return $this
                ->addUsingAlias(SpyStoreTableMap::COL_ID_STORE, $spyProductMeasurementSalesUnitStore->getFkStore(), $comparison);
        } elseif ($spyProductMeasurementSalesUnitStore instanceof ObjectCollection) {
            return $this
                ->useSpyProductMeasurementSalesUnitStoreQuery()
                ->filterByPrimaryKeys($spyProductMeasurementSalesUnitStore->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyProductMeasurementSalesUnitStore() only accepts arguments of type \Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementSalesUnitStore or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyProductMeasurementSalesUnitStore relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyStoreQuery The current query, for fluid interface
     */
    public function joinSpyProductMeasurementSalesUnitStore($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyProductMeasurementSalesUnitStore');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'SpyProductMeasurementSalesUnitStore');
        }

        return $this;
    }

    /**
     * Use the SpyProductMeasurementSalesUnitStore relation SpyProductMeasurementSalesUnitStore object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementSalesUnitStoreQuery A secondary query class using the current class as primary query
     */
    public function useSpyProductMeasurementSalesUnitStoreQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyProductMeasurementSalesUnitStore($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyProductMeasurementSalesUnitStore', '\Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementSalesUnitStoreQuery');
    }

    /**
     * Use the SpyProductMeasurementSalesUnitStore relation SpyProductMeasurementSalesUnitStore object
     *
     * @param callable(\Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementSalesUnitStoreQuery):\Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementSalesUnitStoreQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyProductMeasurementSalesUnitStoreQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyProductMeasurementSalesUnitStoreQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyProductMeasurementSalesUnitStore table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementSalesUnitStoreQuery The inner query object of the EXISTS statement
     */
    public function useSpyProductMeasurementSalesUnitStoreExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyProductMeasurementSalesUnitStore', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyProductMeasurementSalesUnitStore table for a NOT EXISTS query.
     *
     * @see useSpyProductMeasurementSalesUnitStoreExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementSalesUnitStoreQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyProductMeasurementSalesUnitStoreNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyProductMeasurementSalesUnitStore', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\ProductOption\Persistence\SpyProductOptionValuePrice object
     *
     * @param \Orm\Zed\ProductOption\Persistence\SpyProductOptionValuePrice|ObjectCollection $spyProductOptionValuePrice the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyStoreQuery The current query, for fluid interface
     */
    public function filterByProductOptionValuePrice($spyProductOptionValuePrice, $comparison = null)
    {
        if ($spyProductOptionValuePrice instanceof \Orm\Zed\ProductOption\Persistence\SpyProductOptionValuePrice) {
            return $this
                ->addUsingAlias(SpyStoreTableMap::COL_ID_STORE, $spyProductOptionValuePrice->getFkStore(), $comparison);
        } elseif ($spyProductOptionValuePrice instanceof ObjectCollection) {
            return $this
                ->useProductOptionValuePriceQuery()
                ->filterByPrimaryKeys($spyProductOptionValuePrice->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByProductOptionValuePrice() only accepts arguments of type \Orm\Zed\ProductOption\Persistence\SpyProductOptionValuePrice or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ProductOptionValuePrice relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyStoreQuery The current query, for fluid interface
     */
    public function joinProductOptionValuePrice($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ProductOptionValuePrice');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'ProductOptionValuePrice');
        }

        return $this;
    }

    /**
     * Use the ProductOptionValuePrice relation SpyProductOptionValuePrice object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\ProductOption\Persistence\SpyProductOptionValuePriceQuery A secondary query class using the current class as primary query
     */
    public function useProductOptionValuePriceQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinProductOptionValuePrice($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ProductOptionValuePrice', '\Orm\Zed\ProductOption\Persistence\SpyProductOptionValuePriceQuery');
    }

    /**
     * Use the ProductOptionValuePrice relation SpyProductOptionValuePrice object
     *
     * @param callable(\Orm\Zed\ProductOption\Persistence\SpyProductOptionValuePriceQuery):\Orm\Zed\ProductOption\Persistence\SpyProductOptionValuePriceQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withProductOptionValuePriceQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useProductOptionValuePriceQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the ProductOptionValuePrice relation to the SpyProductOptionValuePrice table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\ProductOption\Persistence\SpyProductOptionValuePriceQuery The inner query object of the EXISTS statement
     */
    public function useProductOptionValuePriceExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('ProductOptionValuePrice', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the ProductOptionValuePrice relation to the SpyProductOptionValuePrice table for a NOT EXISTS query.
     *
     * @see useProductOptionValuePriceExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\ProductOption\Persistence\SpyProductOptionValuePriceQuery The inner query object of the NOT EXISTS statement
     */
    public function useProductOptionValuePriceNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('ProductOptionValuePrice', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\ProductRelation\Persistence\SpyProductRelationStore object
     *
     * @param \Orm\Zed\ProductRelation\Persistence\SpyProductRelationStore|ObjectCollection $spyProductRelationStore the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyStoreQuery The current query, for fluid interface
     */
    public function filterByProductRelationStore($spyProductRelationStore, $comparison = null)
    {
        if ($spyProductRelationStore instanceof \Orm\Zed\ProductRelation\Persistence\SpyProductRelationStore) {
            return $this
                ->addUsingAlias(SpyStoreTableMap::COL_ID_STORE, $spyProductRelationStore->getFkStore(), $comparison);
        } elseif ($spyProductRelationStore instanceof ObjectCollection) {
            return $this
                ->useProductRelationStoreQuery()
                ->filterByPrimaryKeys($spyProductRelationStore->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByProductRelationStore() only accepts arguments of type \Orm\Zed\ProductRelation\Persistence\SpyProductRelationStore or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ProductRelationStore relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyStoreQuery The current query, for fluid interface
     */
    public function joinProductRelationStore($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ProductRelationStore');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'ProductRelationStore');
        }

        return $this;
    }

    /**
     * Use the ProductRelationStore relation SpyProductRelationStore object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\ProductRelation\Persistence\SpyProductRelationStoreQuery A secondary query class using the current class as primary query
     */
    public function useProductRelationStoreQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProductRelationStore($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ProductRelationStore', '\Orm\Zed\ProductRelation\Persistence\SpyProductRelationStoreQuery');
    }

    /**
     * Use the ProductRelationStore relation SpyProductRelationStore object
     *
     * @param callable(\Orm\Zed\ProductRelation\Persistence\SpyProductRelationStoreQuery):\Orm\Zed\ProductRelation\Persistence\SpyProductRelationStoreQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withProductRelationStoreQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useProductRelationStoreQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the ProductRelationStore relation to the SpyProductRelationStore table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\ProductRelation\Persistence\SpyProductRelationStoreQuery The inner query object of the EXISTS statement
     */
    public function useProductRelationStoreExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('ProductRelationStore', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the ProductRelationStore relation to the SpyProductRelationStore table for a NOT EXISTS query.
     *
     * @see useProductRelationStoreExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\ProductRelation\Persistence\SpyProductRelationStoreQuery The inner query object of the NOT EXISTS statement
     */
    public function useProductRelationStoreNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('ProductRelationStore', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Quote\Persistence\SpyQuote object
     *
     * @param \Orm\Zed\Quote\Persistence\SpyQuote|ObjectCollection $spyQuote the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyStoreQuery The current query, for fluid interface
     */
    public function filterBySpyQuote($spyQuote, $comparison = null)
    {
        if ($spyQuote instanceof \Orm\Zed\Quote\Persistence\SpyQuote) {
            return $this
                ->addUsingAlias(SpyStoreTableMap::COL_ID_STORE, $spyQuote->getFkStore(), $comparison);
        } elseif ($spyQuote instanceof ObjectCollection) {
            return $this
                ->useSpyQuoteQuery()
                ->filterByPrimaryKeys($spyQuote->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyQuote() only accepts arguments of type \Orm\Zed\Quote\Persistence\SpyQuote or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyQuote relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyStoreQuery The current query, for fluid interface
     */
    public function joinSpyQuote($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyQuote');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'SpyQuote');
        }

        return $this;
    }

    /**
     * Use the SpyQuote relation SpyQuote object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Quote\Persistence\SpyQuoteQuery A secondary query class using the current class as primary query
     */
    public function useSpyQuoteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyQuote($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyQuote', '\Orm\Zed\Quote\Persistence\SpyQuoteQuery');
    }

    /**
     * Use the SpyQuote relation SpyQuote object
     *
     * @param callable(\Orm\Zed\Quote\Persistence\SpyQuoteQuery):\Orm\Zed\Quote\Persistence\SpyQuoteQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyQuoteQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyQuoteQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyQuote table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Quote\Persistence\SpyQuoteQuery The inner query object of the EXISTS statement
     */
    public function useSpyQuoteExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyQuote', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyQuote table for a NOT EXISTS query.
     *
     * @see useSpyQuoteExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Quote\Persistence\SpyQuoteQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyQuoteNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyQuote', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\SalesOrderThreshold\Persistence\SpySalesOrderThreshold object
     *
     * @param \Orm\Zed\SalesOrderThreshold\Persistence\SpySalesOrderThreshold|ObjectCollection $spySalesOrderThreshold the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyStoreQuery The current query, for fluid interface
     */
    public function filterBySpySalesOrderThreshold($spySalesOrderThreshold, $comparison = null)
    {
        if ($spySalesOrderThreshold instanceof \Orm\Zed\SalesOrderThreshold\Persistence\SpySalesOrderThreshold) {
            return $this
                ->addUsingAlias(SpyStoreTableMap::COL_ID_STORE, $spySalesOrderThreshold->getFkStore(), $comparison);
        } elseif ($spySalesOrderThreshold instanceof ObjectCollection) {
            return $this
                ->useSpySalesOrderThresholdQuery()
                ->filterByPrimaryKeys($spySalesOrderThreshold->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpySalesOrderThreshold() only accepts arguments of type \Orm\Zed\SalesOrderThreshold\Persistence\SpySalesOrderThreshold or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpySalesOrderThreshold relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyStoreQuery The current query, for fluid interface
     */
    public function joinSpySalesOrderThreshold($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpySalesOrderThreshold');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'SpySalesOrderThreshold');
        }

        return $this;
    }

    /**
     * Use the SpySalesOrderThreshold relation SpySalesOrderThreshold object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\SalesOrderThreshold\Persistence\SpySalesOrderThresholdQuery A secondary query class using the current class as primary query
     */
    public function useSpySalesOrderThresholdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpySalesOrderThreshold($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpySalesOrderThreshold', '\Orm\Zed\SalesOrderThreshold\Persistence\SpySalesOrderThresholdQuery');
    }

    /**
     * Use the SpySalesOrderThreshold relation SpySalesOrderThreshold object
     *
     * @param callable(\Orm\Zed\SalesOrderThreshold\Persistence\SpySalesOrderThresholdQuery):\Orm\Zed\SalesOrderThreshold\Persistence\SpySalesOrderThresholdQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpySalesOrderThresholdQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpySalesOrderThresholdQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpySalesOrderThreshold table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\SalesOrderThreshold\Persistence\SpySalesOrderThresholdQuery The inner query object of the EXISTS statement
     */
    public function useSpySalesOrderThresholdExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpySalesOrderThreshold', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpySalesOrderThreshold table for a NOT EXISTS query.
     *
     * @see useSpySalesOrderThresholdExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\SalesOrderThreshold\Persistence\SpySalesOrderThresholdQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpySalesOrderThresholdNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpySalesOrderThreshold', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Shipment\Persistence\SpyShipmentMethodPrice object
     *
     * @param \Orm\Zed\Shipment\Persistence\SpyShipmentMethodPrice|ObjectCollection $spyShipmentMethodPrice the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyStoreQuery The current query, for fluid interface
     */
    public function filterByShipmentMethodPrice($spyShipmentMethodPrice, $comparison = null)
    {
        if ($spyShipmentMethodPrice instanceof \Orm\Zed\Shipment\Persistence\SpyShipmentMethodPrice) {
            return $this
                ->addUsingAlias(SpyStoreTableMap::COL_ID_STORE, $spyShipmentMethodPrice->getFkStore(), $comparison);
        } elseif ($spyShipmentMethodPrice instanceof ObjectCollection) {
            return $this
                ->useShipmentMethodPriceQuery()
                ->filterByPrimaryKeys($spyShipmentMethodPrice->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByShipmentMethodPrice() only accepts arguments of type \Orm\Zed\Shipment\Persistence\SpyShipmentMethodPrice or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ShipmentMethodPrice relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyStoreQuery The current query, for fluid interface
     */
    public function joinShipmentMethodPrice($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ShipmentMethodPrice');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'ShipmentMethodPrice');
        }

        return $this;
    }

    /**
     * Use the ShipmentMethodPrice relation SpyShipmentMethodPrice object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Shipment\Persistence\SpyShipmentMethodPriceQuery A secondary query class using the current class as primary query
     */
    public function useShipmentMethodPriceQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinShipmentMethodPrice($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ShipmentMethodPrice', '\Orm\Zed\Shipment\Persistence\SpyShipmentMethodPriceQuery');
    }

    /**
     * Use the ShipmentMethodPrice relation SpyShipmentMethodPrice object
     *
     * @param callable(\Orm\Zed\Shipment\Persistence\SpyShipmentMethodPriceQuery):\Orm\Zed\Shipment\Persistence\SpyShipmentMethodPriceQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withShipmentMethodPriceQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useShipmentMethodPriceQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the ShipmentMethodPrice relation to the SpyShipmentMethodPrice table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Shipment\Persistence\SpyShipmentMethodPriceQuery The inner query object of the EXISTS statement
     */
    public function useShipmentMethodPriceExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('ShipmentMethodPrice', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the ShipmentMethodPrice relation to the SpyShipmentMethodPrice table for a NOT EXISTS query.
     *
     * @see useShipmentMethodPriceExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Shipment\Persistence\SpyShipmentMethodPriceQuery The inner query object of the NOT EXISTS statement
     */
    public function useShipmentMethodPriceNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('ShipmentMethodPrice', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Shipment\Persistence\SpyShipmentMethodStore object
     *
     * @param \Orm\Zed\Shipment\Persistence\SpyShipmentMethodStore|ObjectCollection $spyShipmentMethodStore the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyStoreQuery The current query, for fluid interface
     */
    public function filterByShipmentMethodStore($spyShipmentMethodStore, $comparison = null)
    {
        if ($spyShipmentMethodStore instanceof \Orm\Zed\Shipment\Persistence\SpyShipmentMethodStore) {
            return $this
                ->addUsingAlias(SpyStoreTableMap::COL_ID_STORE, $spyShipmentMethodStore->getFkStore(), $comparison);
        } elseif ($spyShipmentMethodStore instanceof ObjectCollection) {
            return $this
                ->useShipmentMethodStoreQuery()
                ->filterByPrimaryKeys($spyShipmentMethodStore->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByShipmentMethodStore() only accepts arguments of type \Orm\Zed\Shipment\Persistence\SpyShipmentMethodStore or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ShipmentMethodStore relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyStoreQuery The current query, for fluid interface
     */
    public function joinShipmentMethodStore($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ShipmentMethodStore');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'ShipmentMethodStore');
        }

        return $this;
    }

    /**
     * Use the ShipmentMethodStore relation SpyShipmentMethodStore object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Shipment\Persistence\SpyShipmentMethodStoreQuery A secondary query class using the current class as primary query
     */
    public function useShipmentMethodStoreQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinShipmentMethodStore($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ShipmentMethodStore', '\Orm\Zed\Shipment\Persistence\SpyShipmentMethodStoreQuery');
    }

    /**
     * Use the ShipmentMethodStore relation SpyShipmentMethodStore object
     *
     * @param callable(\Orm\Zed\Shipment\Persistence\SpyShipmentMethodStoreQuery):\Orm\Zed\Shipment\Persistence\SpyShipmentMethodStoreQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withShipmentMethodStoreQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useShipmentMethodStoreQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the ShipmentMethodStore relation to the SpyShipmentMethodStore table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Shipment\Persistence\SpyShipmentMethodStoreQuery The inner query object of the EXISTS statement
     */
    public function useShipmentMethodStoreExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('ShipmentMethodStore', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the ShipmentMethodStore relation to the SpyShipmentMethodStore table for a NOT EXISTS query.
     *
     * @see useShipmentMethodStoreExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Shipment\Persistence\SpyShipmentMethodStoreQuery The inner query object of the NOT EXISTS statement
     */
    public function useShipmentMethodStoreNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('ShipmentMethodStore', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Stock\Persistence\SpyStockStore object
     *
     * @param \Orm\Zed\Stock\Persistence\SpyStockStore|ObjectCollection $spyStockStore the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyStoreQuery The current query, for fluid interface
     */
    public function filterByStockStore($spyStockStore, $comparison = null)
    {
        if ($spyStockStore instanceof \Orm\Zed\Stock\Persistence\SpyStockStore) {
            return $this
                ->addUsingAlias(SpyStoreTableMap::COL_ID_STORE, $spyStockStore->getFkStore(), $comparison);
        } elseif ($spyStockStore instanceof ObjectCollection) {
            return $this
                ->useStockStoreQuery()
                ->filterByPrimaryKeys($spyStockStore->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByStockStore() only accepts arguments of type \Orm\Zed\Stock\Persistence\SpyStockStore or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the StockStore relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyStoreQuery The current query, for fluid interface
     */
    public function joinStockStore($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('StockStore');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'StockStore');
        }

        return $this;
    }

    /**
     * Use the StockStore relation SpyStockStore object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Stock\Persistence\SpyStockStoreQuery A secondary query class using the current class as primary query
     */
    public function useStockStoreQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinStockStore($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'StockStore', '\Orm\Zed\Stock\Persistence\SpyStockStoreQuery');
    }

    /**
     * Use the StockStore relation SpyStockStore object
     *
     * @param callable(\Orm\Zed\Stock\Persistence\SpyStockStoreQuery):\Orm\Zed\Stock\Persistence\SpyStockStoreQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withStockStoreQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useStockStoreQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the StockStore relation to the SpyStockStore table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Stock\Persistence\SpyStockStoreQuery The inner query object of the EXISTS statement
     */
    public function useStockStoreExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('StockStore', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the StockStore relation to the SpyStockStore table for a NOT EXISTS query.
     *
     * @see useStockStoreExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Stock\Persistence\SpyStockStoreQuery The inner query object of the NOT EXISTS statement
     */
    public function useStockStoreNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('StockStore', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Touch\Persistence\SpyTouchStorage object
     *
     * @param \Orm\Zed\Touch\Persistence\SpyTouchStorage|ObjectCollection $spyTouchStorage the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyStoreQuery The current query, for fluid interface
     */
    public function filterByTouchStorage($spyTouchStorage, $comparison = null)
    {
        if ($spyTouchStorage instanceof \Orm\Zed\Touch\Persistence\SpyTouchStorage) {
            return $this
                ->addUsingAlias(SpyStoreTableMap::COL_ID_STORE, $spyTouchStorage->getFkStore(), $comparison);
        } elseif ($spyTouchStorage instanceof ObjectCollection) {
            return $this
                ->useTouchStorageQuery()
                ->filterByPrimaryKeys($spyTouchStorage->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTouchStorage() only accepts arguments of type \Orm\Zed\Touch\Persistence\SpyTouchStorage or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TouchStorage relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyStoreQuery The current query, for fluid interface
     */
    public function joinTouchStorage($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TouchStorage');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'TouchStorage');
        }

        return $this;
    }

    /**
     * Use the TouchStorage relation SpyTouchStorage object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Touch\Persistence\SpyTouchStorageQuery A secondary query class using the current class as primary query
     */
    public function useTouchStorageQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinTouchStorage($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TouchStorage', '\Orm\Zed\Touch\Persistence\SpyTouchStorageQuery');
    }

    /**
     * Use the TouchStorage relation SpyTouchStorage object
     *
     * @param callable(\Orm\Zed\Touch\Persistence\SpyTouchStorageQuery):\Orm\Zed\Touch\Persistence\SpyTouchStorageQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withTouchStorageQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useTouchStorageQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the TouchStorage relation to the SpyTouchStorage table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Touch\Persistence\SpyTouchStorageQuery The inner query object of the EXISTS statement
     */
    public function useTouchStorageExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('TouchStorage', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the TouchStorage relation to the SpyTouchStorage table for a NOT EXISTS query.
     *
     * @see useTouchStorageExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Touch\Persistence\SpyTouchStorageQuery The inner query object of the NOT EXISTS statement
     */
    public function useTouchStorageNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('TouchStorage', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Touch\Persistence\SpyTouchSearch object
     *
     * @param \Orm\Zed\Touch\Persistence\SpyTouchSearch|ObjectCollection $spyTouchSearch the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyStoreQuery The current query, for fluid interface
     */
    public function filterByTouchSearch($spyTouchSearch, $comparison = null)
    {
        if ($spyTouchSearch instanceof \Orm\Zed\Touch\Persistence\SpyTouchSearch) {
            return $this
                ->addUsingAlias(SpyStoreTableMap::COL_ID_STORE, $spyTouchSearch->getFkStore(), $comparison);
        } elseif ($spyTouchSearch instanceof ObjectCollection) {
            return $this
                ->useTouchSearchQuery()
                ->filterByPrimaryKeys($spyTouchSearch->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTouchSearch() only accepts arguments of type \Orm\Zed\Touch\Persistence\SpyTouchSearch or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TouchSearch relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyStoreQuery The current query, for fluid interface
     */
    public function joinTouchSearch($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TouchSearch');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'TouchSearch');
        }

        return $this;
    }

    /**
     * Use the TouchSearch relation SpyTouchSearch object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Touch\Persistence\SpyTouchSearchQuery A secondary query class using the current class as primary query
     */
    public function useTouchSearchQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinTouchSearch($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TouchSearch', '\Orm\Zed\Touch\Persistence\SpyTouchSearchQuery');
    }

    /**
     * Use the TouchSearch relation SpyTouchSearch object
     *
     * @param callable(\Orm\Zed\Touch\Persistence\SpyTouchSearchQuery):\Orm\Zed\Touch\Persistence\SpyTouchSearchQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withTouchSearchQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useTouchSearchQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the TouchSearch relation to the SpyTouchSearch table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Touch\Persistence\SpyTouchSearchQuery The inner query object of the EXISTS statement
     */
    public function useTouchSearchExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('TouchSearch', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the TouchSearch relation to the SpyTouchSearch table for a NOT EXISTS query.
     *
     * @see useTouchSearchExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Touch\Persistence\SpyTouchSearchQuery The inner query object of the NOT EXISTS statement
     */
    public function useTouchSearchNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('TouchSearch', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Exclude object from result
     *
     * @param   ChildSpyStore $spyStore Object to remove from the list of results
     *
     * @return $this|ChildSpyStoreQuery The current query, for fluid interface
     */
    public function prune($spyStore = null)
    {
        if ($spyStore) {
            $this->addUsingAlias(SpyStoreTableMap::COL_ID_STORE, $spyStore->getIdStore(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_store table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyStoreTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyStoreTableMap::clearInstancePool();
            SpyStoreTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    /**
     * Performs a DELETE on the database based on the current ModelCriteria
     *
     * @param ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyStoreTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyStoreTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyStoreTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyStoreTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SpyStoreQuery
