<?php

namespace Orm\Zed\Product\Persistence\Base;

use \DateTime;
use \Exception;
use \PDO;
use Orm\Zed\PriceProductMerchantRelationship\Persistence\SpyPriceProductMerchantRelationship;
use Orm\Zed\PriceProductMerchantRelationship\Persistence\SpyPriceProductMerchantRelationshipQuery;
use Orm\Zed\PriceProductMerchantRelationship\Persistence\Base\SpyPriceProductMerchantRelationship as BaseSpyPriceProductMerchantRelationship;
use Orm\Zed\PriceProductMerchantRelationship\Persistence\Map\SpyPriceProductMerchantRelationshipTableMap;
use Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductSchedule;
use Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductScheduleQuery;
use Orm\Zed\PriceProductSchedule\Persistence\Base\SpyPriceProductSchedule as BaseSpyPriceProductSchedule;
use Orm\Zed\PriceProductSchedule\Persistence\Map\SpyPriceProductScheduleTableMap;
use Orm\Zed\PriceProduct\Persistence\SpyPriceProduct;
use Orm\Zed\PriceProduct\Persistence\SpyPriceProductQuery;
use Orm\Zed\PriceProduct\Persistence\Base\SpyPriceProduct as BaseSpyPriceProduct;
use Orm\Zed\PriceProduct\Persistence\Map\SpyPriceProductTableMap;
use Orm\Zed\ProductAlternative\Persistence\SpyProductAlternative;
use Orm\Zed\ProductAlternative\Persistence\SpyProductAlternativeQuery;
use Orm\Zed\ProductAlternative\Persistence\Base\SpyProductAlternative as BaseSpyProductAlternative;
use Orm\Zed\ProductAlternative\Persistence\Map\SpyProductAlternativeTableMap;
use Orm\Zed\ProductBundle\Persistence\SpyProductBundle;
use Orm\Zed\ProductBundle\Persistence\SpyProductBundleQuery;
use Orm\Zed\ProductBundle\Persistence\Base\SpyProductBundle as BaseSpyProductBundle;
use Orm\Zed\ProductBundle\Persistence\Map\SpyProductBundleTableMap;
use Orm\Zed\ProductDiscontinued\Persistence\SpyProductDiscontinued;
use Orm\Zed\ProductDiscontinued\Persistence\SpyProductDiscontinuedQuery;
use Orm\Zed\ProductDiscontinued\Persistence\Base\SpyProductDiscontinued as BaseSpyProductDiscontinued;
use Orm\Zed\ProductDiscontinued\Persistence\Map\SpyProductDiscontinuedTableMap;
use Orm\Zed\ProductImage\Persistence\SpyProductImageSet;
use Orm\Zed\ProductImage\Persistence\SpyProductImageSetQuery;
use Orm\Zed\ProductImage\Persistence\Base\SpyProductImageSet as BaseSpyProductImageSet;
use Orm\Zed\ProductImage\Persistence\Map\SpyProductImageSetTableMap;
use Orm\Zed\ProductList\Persistence\SpyProductList;
use Orm\Zed\ProductList\Persistence\SpyProductListProductConcrete;
use Orm\Zed\ProductList\Persistence\SpyProductListProductConcreteQuery;
use Orm\Zed\ProductList\Persistence\SpyProductListQuery;
use Orm\Zed\ProductList\Persistence\Base\SpyProductListProductConcrete as BaseSpyProductListProductConcrete;
use Orm\Zed\ProductList\Persistence\Map\SpyProductListProductConcreteTableMap;
use Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementSalesUnit;
use Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementSalesUnitQuery;
use Orm\Zed\ProductMeasurementUnit\Persistence\Base\SpyProductMeasurementSalesUnit as BaseSpyProductMeasurementSalesUnit;
use Orm\Zed\ProductMeasurementUnit\Persistence\Map\SpyProductMeasurementSalesUnitTableMap;
use Orm\Zed\ProductPackagingUnit\Persistence\SpyProductPackagingUnit;
use Orm\Zed\ProductPackagingUnit\Persistence\SpyProductPackagingUnitQuery;
use Orm\Zed\ProductPackagingUnit\Persistence\Base\SpyProductPackagingUnit as BaseSpyProductPackagingUnit;
use Orm\Zed\ProductPackagingUnit\Persistence\Map\SpyProductPackagingUnitTableMap;
use Orm\Zed\ProductQuantity\Persistence\SpyProductQuantity;
use Orm\Zed\ProductQuantity\Persistence\SpyProductQuantityQuery;
use Orm\Zed\ProductQuantity\Persistence\Base\SpyProductQuantity as BaseSpyProductQuantity;
use Orm\Zed\ProductQuantity\Persistence\Map\SpyProductQuantityTableMap;
use Orm\Zed\ProductSearch\Persistence\SpyProductSearch;
use Orm\Zed\ProductSearch\Persistence\SpyProductSearchQuery;
use Orm\Zed\ProductSearch\Persistence\Base\SpyProductSearch as BaseSpyProductSearch;
use Orm\Zed\ProductSearch\Persistence\Map\SpyProductSearchTableMap;
use Orm\Zed\ProductValidity\Persistence\SpyProductValidity;
use Orm\Zed\ProductValidity\Persistence\SpyProductValidityQuery;
use Orm\Zed\ProductValidity\Persistence\Base\SpyProductValidity as BaseSpyProductValidity;
use Orm\Zed\ProductValidity\Persistence\Map\SpyProductValidityTableMap;
use Orm\Zed\Product\Persistence\SpyProduct as ChildSpyProduct;
use Orm\Zed\Product\Persistence\SpyProductAbstract as ChildSpyProductAbstract;
use Orm\Zed\Product\Persistence\SpyProductAbstractQuery as ChildSpyProductAbstractQuery;
use Orm\Zed\Product\Persistence\SpyProductLocalizedAttributes as ChildSpyProductLocalizedAttributes;
use Orm\Zed\Product\Persistence\SpyProductLocalizedAttributesQuery as ChildSpyProductLocalizedAttributesQuery;
use Orm\Zed\Product\Persistence\SpyProductQuery as ChildSpyProductQuery;
use Orm\Zed\Product\Persistence\Map\SpyProductLocalizedAttributesTableMap;
use Orm\Zed\Product\Persistence\Map\SpyProductTableMap;
use Orm\Zed\Stock\Persistence\SpyStockProduct;
use Orm\Zed\Stock\Persistence\SpyStockProductQuery;
use Orm\Zed\Stock\Persistence\Base\SpyStockProduct as BaseSpyStockProduct;
use Orm\Zed\Stock\Persistence\Map\SpyStockProductTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveRecord\ActiveRecordInterface;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\BadMethodCallException;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Parser\AbstractParser;
use Propel\Runtime\Util\PropelDateTime;

/**
 * Base class that represents a row from the 'spy_product' table.
 *
 *
 *
 * @package    propel.generator.src.Orm.Zed.Product.Persistence.Base
 */
abstract class SpyProduct implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Orm\\Zed\\Product\\Persistence\\Map\\SpyProductTableMap';


    /**
     * attribute to determine if this object has previously been saved.
     * @var boolean
     */
    protected $new = true;

    /**
     * attribute to determine whether this object has been deleted.
     * @var boolean
     */
    protected $deleted = false;

    /**
     * The columns that have been modified in current object.
     * Tracking modified columns allows us to only update modified columns.
     * @var array
     */
    protected $modifiedColumns = array();

    /**
     * The (virtual) columns that are added at runtime
     * The formatters can add supplementary columns based on a resultset
     * @var array
     */
    protected $virtualColumns = array();

    /**
     * The value for the id_product field.
     *
     * @var        int
     */
    protected $id_product;

    /**
     * The value for the fk_product_abstract field.
     *
     * @var        int
     */
    protected $fk_product_abstract;

    /**
     * The value for the attributes field.
     *
     * @var        string
     */
    protected $attributes;

    /**
     * The value for the is_active field.
     *
     * Note: this column has a database default value of: true
     * @var        boolean
     */
    protected $is_active;

    /**
     * The value for the is_quantity_splittable field.
     *
     * Note: this column has a database default value of: true
     * @var        boolean
     */
    protected $is_quantity_splittable;

    /**
     * The value for the sku field.
     *
     * @var        string
     */
    protected $sku;

    /**
     * The value for the created_at field.
     *
     * @var        DateTime|null
     */
    protected $created_at;

    /**
     * The value for the updated_at field.
     *
     * @var        DateTime|null
     */
    protected $updated_at;

    /**
     * @var        ChildSpyProductAbstract
     */
    protected $aSpyProductAbstract;

    /**
     * @var        ObjectCollection|SpyPriceProduct[] Collection to store aggregation of SpyPriceProduct objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyPriceProduct> Collection to store aggregation of SpyPriceProduct objects.
     */
    protected $collPriceProducts;
    protected $collPriceProductsPartial;

    /**
     * @var        ObjectCollection|SpyPriceProductMerchantRelationship[] Collection to store aggregation of SpyPriceProductMerchantRelationship objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyPriceProductMerchantRelationship> Collection to store aggregation of SpyPriceProductMerchantRelationship objects.
     */
    protected $collPriceProductMerchantRelationships;
    protected $collPriceProductMerchantRelationshipsPartial;

    /**
     * @var        ObjectCollection|SpyPriceProductSchedule[] Collection to store aggregation of SpyPriceProductSchedule objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyPriceProductSchedule> Collection to store aggregation of SpyPriceProductSchedule objects.
     */
    protected $collPriceProductSchedules;
    protected $collPriceProductSchedulesPartial;

    /**
     * @var        ObjectCollection|ChildSpyProductLocalizedAttributes[] Collection to store aggregation of ChildSpyProductLocalizedAttributes objects.
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyProductLocalizedAttributes> Collection to store aggregation of ChildSpyProductLocalizedAttributes objects.
     */
    protected $collSpyProductLocalizedAttributess;
    protected $collSpyProductLocalizedAttributessPartial;

    /**
     * @var        ObjectCollection|SpyProductAlternative[] Collection to store aggregation of SpyProductAlternative objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyProductAlternative> Collection to store aggregation of SpyProductAlternative objects.
     */
    protected $collSpyProductAlternativesRelatedByFkProduct;
    protected $collSpyProductAlternativesRelatedByFkProductPartial;

    /**
     * @var        ObjectCollection|SpyProductAlternative[] Collection to store aggregation of SpyProductAlternative objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyProductAlternative> Collection to store aggregation of SpyProductAlternative objects.
     */
    protected $collSpyProductAlternativesRelatedByFkProductConcreteAlternative;
    protected $collSpyProductAlternativesRelatedByFkProductConcreteAlternativePartial;

    /**
     * @var        ObjectCollection|SpyProductBundle[] Collection to store aggregation of SpyProductBundle objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyProductBundle> Collection to store aggregation of SpyProductBundle objects.
     */
    protected $collSpyProductBundlesRelatedByFkBundledProduct;
    protected $collSpyProductBundlesRelatedByFkBundledProductPartial;

    /**
     * @var        ObjectCollection|SpyProductBundle[] Collection to store aggregation of SpyProductBundle objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyProductBundle> Collection to store aggregation of SpyProductBundle objects.
     */
    protected $collSpyProductBundlesRelatedByFkProduct;
    protected $collSpyProductBundlesRelatedByFkProductPartial;

    /**
     * @var        ObjectCollection|SpyProductDiscontinued[] Collection to store aggregation of SpyProductDiscontinued objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyProductDiscontinued> Collection to store aggregation of SpyProductDiscontinued objects.
     */
    protected $collSpyProductDiscontinueds;
    protected $collSpyProductDiscontinuedsPartial;

    /**
     * @var        ObjectCollection|SpyProductImageSet[] Collection to store aggregation of SpyProductImageSet objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyProductImageSet> Collection to store aggregation of SpyProductImageSet objects.
     */
    protected $collSpyProductImageSets;
    protected $collSpyProductImageSetsPartial;

    /**
     * @var        ObjectCollection|SpyProductListProductConcrete[] Collection to store aggregation of SpyProductListProductConcrete objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyProductListProductConcrete> Collection to store aggregation of SpyProductListProductConcrete objects.
     */
    protected $collSpyProductListProductConcretes;
    protected $collSpyProductListProductConcretesPartial;

    /**
     * @var        ObjectCollection|SpyProductMeasurementSalesUnit[] Collection to store aggregation of SpyProductMeasurementSalesUnit objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyProductMeasurementSalesUnit> Collection to store aggregation of SpyProductMeasurementSalesUnit objects.
     */
    protected $collSpyProductMeasurementSalesUnits;
    protected $collSpyProductMeasurementSalesUnitsPartial;

    /**
     * @var        ObjectCollection|SpyProductPackagingUnit[] Collection to store aggregation of SpyProductPackagingUnit objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyProductPackagingUnit> Collection to store aggregation of SpyProductPackagingUnit objects.
     */
    protected $collSpyProductPackagingUnitsRelatedByFkProduct;
    protected $collSpyProductPackagingUnitsRelatedByFkProductPartial;

    /**
     * @var        ObjectCollection|SpyProductPackagingUnit[] Collection to store aggregation of SpyProductPackagingUnit objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyProductPackagingUnit> Collection to store aggregation of SpyProductPackagingUnit objects.
     */
    protected $collSpyProductPackagingUnitsRelatedByFkLeadProduct;
    protected $collSpyProductPackagingUnitsRelatedByFkLeadProductPartial;

    /**
     * @var        ObjectCollection|SpyProductQuantity[] Collection to store aggregation of SpyProductQuantity objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyProductQuantity> Collection to store aggregation of SpyProductQuantity objects.
     */
    protected $collSpyProductQuantities;
    protected $collSpyProductQuantitiesPartial;

    /**
     * @var        ObjectCollection|SpyProductSearch[] Collection to store aggregation of SpyProductSearch objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyProductSearch> Collection to store aggregation of SpyProductSearch objects.
     */
    protected $collSpyProductSearches;
    protected $collSpyProductSearchesPartial;

    /**
     * @var        ObjectCollection|SpyProductValidity[] Collection to store aggregation of SpyProductValidity objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyProductValidity> Collection to store aggregation of SpyProductValidity objects.
     */
    protected $collSpyProductValidities;
    protected $collSpyProductValiditiesPartial;

    /**
     * @var        ObjectCollection|SpyStockProduct[] Collection to store aggregation of SpyStockProduct objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyStockProduct> Collection to store aggregation of SpyStockProduct objects.
     */
    protected $collStockProducts;
    protected $collStockProductsPartial;

    /**
     * @var        ObjectCollection|SpyProductList[] Cross Collection to store aggregation of SpyProductList objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyProductList> Cross Collection to store aggregation of SpyProductList objects.
     */
    protected $collSpyProductLists;

    /**
     * @var bool
     */
    protected $collSpyProductListsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    // event behavior

    /**
     * @var string
     */
    private $_eventName;

    /**
     * @var bool
     */
    private $_isModified;

    /**
     * @var array
     */
    private $_modifiedColumns;

    /**
     * @var array
     */
    private $_initialValues;

    /**
     * @var bool
     */
    private $_isEventDisabled;

    /**
     * @var array
     */
    private $_foreignKeys = [
        'spy_product.fk_product_abstract' => 'fk_product_abstract',
    ];

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyProductList[]
     * @phpstan-var ObjectCollection&\Traversable<SpyProductList>
     */
    protected $spyProductListsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyPriceProduct[]
     * @phpstan-var ObjectCollection&\Traversable<SpyPriceProduct>
     */
    protected $priceProductsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyPriceProductMerchantRelationship[]
     * @phpstan-var ObjectCollection&\Traversable<SpyPriceProductMerchantRelationship>
     */
    protected $priceProductMerchantRelationshipsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyPriceProductSchedule[]
     * @phpstan-var ObjectCollection&\Traversable<SpyPriceProductSchedule>
     */
    protected $priceProductSchedulesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSpyProductLocalizedAttributes[]
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyProductLocalizedAttributes>
     */
    protected $spyProductLocalizedAttributessScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyProductAlternative[]
     * @phpstan-var ObjectCollection&\Traversable<SpyProductAlternative>
     */
    protected $spyProductAlternativesRelatedByFkProductScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyProductAlternative[]
     * @phpstan-var ObjectCollection&\Traversable<SpyProductAlternative>
     */
    protected $spyProductAlternativesRelatedByFkProductConcreteAlternativeScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyProductBundle[]
     * @phpstan-var ObjectCollection&\Traversable<SpyProductBundle>
     */
    protected $spyProductBundlesRelatedByFkBundledProductScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyProductBundle[]
     * @phpstan-var ObjectCollection&\Traversable<SpyProductBundle>
     */
    protected $spyProductBundlesRelatedByFkProductScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyProductDiscontinued[]
     * @phpstan-var ObjectCollection&\Traversable<SpyProductDiscontinued>
     */
    protected $spyProductDiscontinuedsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyProductImageSet[]
     * @phpstan-var ObjectCollection&\Traversable<SpyProductImageSet>
     */
    protected $spyProductImageSetsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyProductListProductConcrete[]
     * @phpstan-var ObjectCollection&\Traversable<SpyProductListProductConcrete>
     */
    protected $spyProductListProductConcretesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyProductMeasurementSalesUnit[]
     * @phpstan-var ObjectCollection&\Traversable<SpyProductMeasurementSalesUnit>
     */
    protected $spyProductMeasurementSalesUnitsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyProductPackagingUnit[]
     * @phpstan-var ObjectCollection&\Traversable<SpyProductPackagingUnit>
     */
    protected $spyProductPackagingUnitsRelatedByFkProductScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyProductPackagingUnit[]
     * @phpstan-var ObjectCollection&\Traversable<SpyProductPackagingUnit>
     */
    protected $spyProductPackagingUnitsRelatedByFkLeadProductScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyProductQuantity[]
     * @phpstan-var ObjectCollection&\Traversable<SpyProductQuantity>
     */
    protected $spyProductQuantitiesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyProductSearch[]
     * @phpstan-var ObjectCollection&\Traversable<SpyProductSearch>
     */
    protected $spyProductSearchesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyProductValidity[]
     * @phpstan-var ObjectCollection&\Traversable<SpyProductValidity>
     */
    protected $spyProductValiditiesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyStockProduct[]
     * @phpstan-var ObjectCollection&\Traversable<SpyStockProduct>
     */
    protected $stockProductsScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see __construct()
     */
    public function applyDefaultValues()
    {
        $this->is_active = true;
        $this->is_quantity_splittable = true;
    }

    /**
     * Initializes internal state of Orm\Zed\Product\Persistence\Base\SpyProduct object.
     * @see applyDefaults()
     */
    public function __construct()
    {
        $this->applyDefaultValues();
    }

    /**
     * Returns whether the object has been modified.
     *
     * @return boolean True if the object has been modified.
     */
    public function isModified()
    {
        return !!$this->modifiedColumns;
    }

    /**
     * Has specified column been modified?
     *
     * @param  string  $col column fully qualified name (TableMap::TYPE_COLNAME), e.g. Book::AUTHOR_ID
     * @return boolean True if $col has been modified.
     */
    public function isColumnModified($col)
    {
        return $this->modifiedColumns && isset($this->modifiedColumns[$col]);
    }

    /**
     * Get the columns that have been modified in this object.
     * @return array A unique list of the modified column names for this object.
     */
    public function getModifiedColumns()
    {
        return $this->modifiedColumns ? array_keys($this->modifiedColumns) : [];
    }

    /**
     * Returns whether the object has ever been saved.  This will
     * be false, if the object was retrieved from storage or was created
     * and then saved.
     *
     * @return boolean true, if the object has never been persisted.
     */
    public function isNew()
    {
        return $this->new;
    }

    /**
     * Setter for the isNew attribute.  This method will be called
     * by Propel-generated children and objects.
     *
     * @param boolean $b the state of the object.
     */
    public function setNew($b)
    {
        $this->new = (boolean) $b;
    }

    /**
     * Whether this object has been deleted.
     * @return boolean The deleted state of this object.
     */
    public function isDeleted()
    {
        return $this->deleted;
    }

    /**
     * Specify whether this object has been deleted.
     * @param  boolean $b The deleted state of this object.
     * @return void
     */
    public function setDeleted($b)
    {
        $this->deleted = (boolean) $b;
    }

    /**
     * Sets the modified state for the object to be false.
     * @param  string $col If supplied, only the specified column is reset.
     * @return void
     */
    public function resetModified($col = null)
    {
        if (null !== $col) {
            unset($this->modifiedColumns[$col]);
        } else {
            $this->modifiedColumns = array();
        }
    }

    /**
     * Compares this with another <code>SpyProduct</code> instance.  If
     * <code>obj</code> is an instance of <code>SpyProduct</code>, delegates to
     * <code>equals(SpyProduct)</code>.  Otherwise, returns <code>false</code>.
     *
     * @param  mixed   $obj The object to compare to.
     * @return boolean Whether equal to the object specified.
     */
    public function equals($obj)
    {
        if (!$obj instanceof static) {
            return false;
        }

        if ($this === $obj) {
            return true;
        }

        if (null === $this->getPrimaryKey() || null === $obj->getPrimaryKey()) {
            return false;
        }

        return $this->getPrimaryKey() === $obj->getPrimaryKey();
    }

    /**
     * Get the associative array of the virtual columns in this object
     *
     * @return array
     */
    public function getVirtualColumns()
    {
        return $this->virtualColumns;
    }

    /**
     * Checks the existence of a virtual column in this object
     *
     * @param  string  $name The virtual column name
     * @return boolean
     */
    public function hasVirtualColumn($name)
    {
        return array_key_exists($name, $this->virtualColumns);
    }

    /**
     * Get the value of a virtual column in this object
     *
     * @param  string $name The virtual column name
     * @return mixed
     *
     * @throws PropelException
     */
    public function getVirtualColumn($name)
    {
        if (!$this->hasVirtualColumn($name)) {
            throw new PropelException(sprintf('Cannot get value of inexistent virtual column %s.', $name));
        }

        return $this->virtualColumns[$name];
    }

    /**
     * Set the value of a virtual column in this object
     *
     * @param string $name  The virtual column name
     * @param mixed  $value The value to give to the virtual column
     *
     * @return $this The current object, for fluid interface
     */
    public function setVirtualColumn($name, $value)
    {
        $this->virtualColumns[$name] = $value;

        return $this;
    }

    /**
     * Logs a message using Propel::log().
     *
     * @param  string  $msg
     * @param  int     $priority One of the Propel::LOG_* logging levels
     * @return void
     */
    protected function log($msg, $priority = Propel::LOG_INFO)
    {
        Propel::log(get_class($this) . ': ' . $msg, $priority);
    }

    /**
     * Export the current object properties to a string, using a given parser format
     * <code>
     * $book = BookQuery::create()->findPk(9012);
     * echo $book->exportTo('JSON');
     *  => {"Id":9012,"Title":"Don Juan","ISBN":"0140422161","Price":12.99,"PublisherId":1234,"AuthorId":5678}');
     * </code>
     *
     * @param  mixed   $parser                 A AbstractParser instance, or a format name ('XML', 'YAML', 'JSON', 'CSV')
     * @param  boolean $includeLazyLoadColumns (optional) Whether to include lazy load(ed) columns. Defaults to TRUE.
     * @param  string  $keyType                (optional) One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME, TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM. Defaults to TableMap::TYPE_PHPNAME.
     * @return string  The exported data
     */
    public function exportTo($parser, $includeLazyLoadColumns = true, $keyType = TableMap::TYPE_PHPNAME)
    {
        if (!$parser instanceof AbstractParser) {
            $parser = AbstractParser::getParser($parser);
        }

        return $parser->fromArray($this->toArray($keyType, $includeLazyLoadColumns, array(), true));
    }

    /**
     * Clean up internal collections prior to serializing
     * Avoids recursive loops that turn into segmentation faults when serializing
     */
    public function __sleep()
    {
        $this->clearAllReferences();

        $cls = new \ReflectionClass($this);
        $propertyNames = [];
        $serializableProperties = array_diff($cls->getProperties(), $cls->getProperties(\ReflectionProperty::IS_STATIC));

        foreach($serializableProperties as $property) {
            $propertyNames[] = $property->getName();
        }

        return $propertyNames;
    }

    /**
     * Get the [id_product] column value.
     *
     * @return int
     */
    public function getIdProduct()
    {
        return $this->id_product;
    }

    /**
     * Get the [fk_product_abstract] column value.
     *
     * @return int
     */
    public function getFkProductAbstract()
    {
        return $this->fk_product_abstract;
    }

    /**
     * Get the [attributes] column value.
     *
     * @return string
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Get the [is_active] column value.
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->is_active;
    }

    /**
     * Get the [is_active] column value.
     *
     * @return boolean
     */
    public function isActive()
    {
        return $this->getIsActive();
    }

    /**
     * Get the [is_quantity_splittable] column value.
     *
     * @return boolean
     */
    public function getIsQuantitySplittable()
    {
        return $this->is_quantity_splittable;
    }

    /**
     * Get the [is_quantity_splittable] column value.
     *
     * @return boolean
     */
    public function isQuantitySplittable()
    {
        return $this->getIsQuantitySplittable();
    }

    /**
     * Get the [sku] column value.
     *
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Get the [optionally formatted] temporal [created_at] column value.
     *
     *
     * @param string|null $format The date/time format string (either date()-style or strftime()-style).
     *   If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime|null Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     *
     * @psalm-return ($format is null ? DateTime|null : string|null)
     */
    public function getCreatedAt($format = null)
    {
        if ($format === null) {
            return $this->created_at;
        } else {
            return $this->created_at instanceof \DateTimeInterface ? $this->created_at->format($format) : null;
        }
    }

    /**
     * Get the [optionally formatted] temporal [updated_at] column value.
     *
     *
     * @param string|null $format The date/time format string (either date()-style or strftime()-style).
     *   If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime|null Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     *
     * @psalm-return ($format is null ? DateTime|null : string|null)
     */
    public function getUpdatedAt($format = null)
    {
        if ($format === null) {
            return $this->updated_at;
        } else {
            return $this->updated_at instanceof \DateTimeInterface ? $this->updated_at->format($format) : null;
        }
    }

    /**
     * Set the value of [id_product] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\Product\Persistence\SpyProduct The current object (for fluent API support)
     */
    public function setIdProduct($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->id_product !== $v) {
            $this->id_product = $v;
            $this->modifiedColumns[SpyProductTableMap::COL_ID_PRODUCT] = true;
        }

        return $this;
    } // setIdProduct()

    /**
     * Set the value of [fk_product_abstract] column.
     *
     * @param int $v New value
     * @return $this|\Orm\Zed\Product\Persistence\SpyProduct The current object (for fluent API support)
     */
    public function setFkProductAbstract($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->fk_product_abstract !== $v) {
            $this->fk_product_abstract = $v;
            $this->modifiedColumns[SpyProductTableMap::COL_FK_PRODUCT_ABSTRACT] = true;
        }

        if ($this->aSpyProductAbstract !== null && $this->aSpyProductAbstract->getIdProductAbstract() !== $v) {
            $this->aSpyProductAbstract = null;
        }

        return $this;
    } // setFkProductAbstract()

    /**
     * Set the value of [attributes] column.
     *
     * @param string $v New value
     * @return $this|\Orm\Zed\Product\Persistence\SpyProduct The current object (for fluent API support)
     */
    public function setAttributes($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->attributes !== $v) {
            $this->attributes = $v;
            $this->modifiedColumns[SpyProductTableMap::COL_ATTRIBUTES] = true;
        }

        return $this;
    } // setAttributes()

    /**
     * Sets the value of the [is_active] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\Orm\Zed\Product\Persistence\SpyProduct The current object (for fluent API support)
     */
    public function setIsActive($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (bool) $v;
            }
        }

        $allowNullValues = false;

        if ($v === null && !$allowNullValues) {
            return $this;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = true;

        if (($this->isNew() && $hasDefaultValue) || $this->is_active !== $v) {
            $this->is_active = $v;
            $this->modifiedColumns[SpyProductTableMap::COL_IS_ACTIVE] = true;
        }

        return $this;
    } // setIsActive()

    /**
     * Sets the value of the [is_quantity_splittable] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\Orm\Zed\Product\Persistence\SpyProduct The current object (for fluent API support)
     */
    public function setIsQuantitySplittable($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (bool) $v;
            }
        }

        $allowNullValues = false;

        if ($v === null && !$allowNullValues) {
            return $this;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = true;

        if (($this->isNew() && $hasDefaultValue) || $this->is_quantity_splittable !== $v) {
            $this->is_quantity_splittable = $v;
            $this->modifiedColumns[SpyProductTableMap::COL_IS_QUANTITY_SPLITTABLE] = true;
        }

        return $this;
    } // setIsQuantitySplittable()

    /**
     * Set the value of [sku] column.
     *
     * @param string $v New value
     * @return $this|\Orm\Zed\Product\Persistence\SpyProduct The current object (for fluent API support)
     */
    public function setSku($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->sku !== $v) {
            $this->sku = $v;
            $this->modifiedColumns[SpyProductTableMap::COL_SKU] = true;
        }

        return $this;
    } // setSku()

    /**
     * Sets the value of [created_at] column to a normalized version of the date/time value specified.
     *
     * @param  string|integer|\DateTimeInterface|null $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\Orm\Zed\Product\Persistence\SpyProduct The current object (for fluent API support)
     */
    public function setCreatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->created_at !== null || $dt !== null) {
            if ($this->created_at === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->created_at->format("Y-m-d H:i:s.u")) {
                $this->created_at = $dt === null ? null : clone $dt;
                $this->modifiedColumns[SpyProductTableMap::COL_CREATED_AT] = true;
            }
        } // if either are not null

        return $this;
    } // setCreatedAt()

    /**
     * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
     *
     * @param  string|integer|\DateTimeInterface|null $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\Orm\Zed\Product\Persistence\SpyProduct The current object (for fluent API support)
     */
    public function setUpdatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->updated_at !== null || $dt !== null) {
            if ($this->updated_at === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->updated_at->format("Y-m-d H:i:s.u")) {
                $this->updated_at = $dt === null ? null : clone $dt;
                $this->modifiedColumns[SpyProductTableMap::COL_UPDATED_AT] = true;
            }
        } // if either are not null

        return $this;
    } // setUpdatedAt()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
            if ($this->is_active !== true) {
                return false;
            }

            if ($this->is_quantity_splittable !== true) {
                return false;
            }

        // otherwise, everything was equal, so return TRUE
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array   $row       The row returned by DataFetcher->fetch().
     * @param int     $startcol  0-based offset column which indicates which restultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @param string  $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                  One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                            TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false, $indexType = TableMap::TYPE_NUM)
    {
        try {

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : SpyProductTableMap::translateFieldName('IdProduct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id_product = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : SpyProductTableMap::translateFieldName('FkProductAbstract', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fk_product_abstract = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : SpyProductTableMap::translateFieldName('Attributes', TableMap::TYPE_PHPNAME, $indexType)];
            $this->attributes = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : SpyProductTableMap::translateFieldName('IsActive', TableMap::TYPE_PHPNAME, $indexType)];
            $this->is_active = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : SpyProductTableMap::translateFieldName('IsQuantitySplittable', TableMap::TYPE_PHPNAME, $indexType)];
            $this->is_quantity_splittable = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : SpyProductTableMap::translateFieldName('Sku', TableMap::TYPE_PHPNAME, $indexType)];
            $this->sku = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : SpyProductTableMap::translateFieldName('CreatedAt', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->created_at = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : SpyProductTableMap::translateFieldName('UpdatedAt', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->updated_at = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 8; // 8 = SpyProductTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Orm\\Zed\\Product\\Persistence\\SpyProduct'), 0, $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {
        if ($this->aSpyProductAbstract !== null && $this->fk_product_abstract !== $this->aSpyProductAbstract->getIdProductAbstract()) {
            $this->aSpyProductAbstract = null;
        }
    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param      boolean $deep (optional) Whether to also de-associated any related objects.
     * @param      ConnectionInterface $con (optional) The ConnectionInterface connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(SpyProductTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildSpyProductQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aSpyProductAbstract = null;
            $this->collPriceProducts = null;

            $this->collPriceProductMerchantRelationships = null;

            $this->collPriceProductSchedules = null;

            $this->collSpyProductLocalizedAttributess = null;

            $this->collSpyProductAlternativesRelatedByFkProduct = null;

            $this->collSpyProductAlternativesRelatedByFkProductConcreteAlternative = null;

            $this->collSpyProductBundlesRelatedByFkBundledProduct = null;

            $this->collSpyProductBundlesRelatedByFkProduct = null;

            $this->collSpyProductDiscontinueds = null;

            $this->collSpyProductImageSets = null;

            $this->collSpyProductListProductConcretes = null;

            $this->collSpyProductMeasurementSalesUnits = null;

            $this->collSpyProductPackagingUnitsRelatedByFkProduct = null;

            $this->collSpyProductPackagingUnitsRelatedByFkLeadProduct = null;

            $this->collSpyProductQuantities = null;

            $this->collSpyProductSearches = null;

            $this->collSpyProductValidities = null;

            $this->collStockProducts = null;

            $this->collSpyProductLists = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see SpyProduct::setDeleted()
     * @see SpyProduct::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildSpyProductQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                // event behavior

                $this->addDeleteEventToMemory();

                $this->setDeleted(true);
            }
        });
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param      ConnectionInterface $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see doSave()
     */
    public function save(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($this->alreadyInSave) {
            return 0;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductTableMap::DATABASE_NAME);
        }

        return $con->transaction(function () use ($con) {
            $ret = $this->preSave($con);
            $isInsert = $this->isNew();
            // event behavior

            $this->prepareSaveEventName();

            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // timestampable behavior
                $time = time();
                $highPrecision = \Propel\Runtime\Util\PropelDateTime::createHighPrecision();
                if (!$this->isColumnModified(SpyProductTableMap::COL_CREATED_AT)) {
                    $this->setCreatedAt($highPrecision);
                }
                if (!$this->isColumnModified(SpyProductTableMap::COL_UPDATED_AT)) {
                    $this->setUpdatedAt($highPrecision);
                }
            } else {
                $ret = $ret && $this->preUpdate($con);
                // timestampable behavior
                if ($this->isModified() && !$this->isColumnModified(SpyProductTableMap::COL_UPDATED_AT)) {
                    $this->setUpdatedAt(\Propel\Runtime\Util\PropelDateTime::createHighPrecision());
                }
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                // event behavior

                if ($affectedRows) {
                    $this->addSaveEventToMemory();
                }

                SpyProductTableMap::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }

            return $affectedRows;
        });
    }

     /**
     * Code to be run after persisting the object
     * @param \Propel\Runtime\Connection\ConnectionInterface $con
     */
     public function postSave(?ConnectionInterface $con = null)
     {
     }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param      ConnectionInterface $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see save()
     */
    protected function doSave(ConnectionInterface $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aSpyProductAbstract !== null) {
                if ($this->aSpyProductAbstract->isModified() || $this->aSpyProductAbstract->isNew()) {
                    $affectedRows += $this->aSpyProductAbstract->save($con);
                }
                $this->setSpyProductAbstract($this->aSpyProductAbstract);
            }

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                    $affectedRows += 1;
                } else {
                    $affectedRows += $this->doUpdate($con);
                }
                $this->resetModified();
            }

            if ($this->spyProductListsScheduledForDeletion !== null) {
                if (!$this->spyProductListsScheduledForDeletion->isEmpty()) {
                    $pks = array();
                    foreach ($this->spyProductListsScheduledForDeletion as $entry) {
                        $entryPk = [];

                        $entryPk[0] = $this->getIdProduct();
                        $entryPk[1] = $entry->getIdProductList();
                        $pks[] = $entryPk;
                    }

                    \Orm\Zed\ProductList\Persistence\SpyProductListProductConcreteQuery::create()
                        ->filterByPrimaryKeys($pks)
                        ->delete($con);

                    $this->spyProductListsScheduledForDeletion = null;
                }

            }

            if ($this->collSpyProductLists) {
                foreach ($this->collSpyProductLists as $spyProductList) {
                    if (!$spyProductList->isDeleted() && ($spyProductList->isNew() || $spyProductList->isModified())) {
                        $spyProductList->save($con);
                    }
                }
            }


            if ($this->priceProductsScheduledForDeletion !== null) {
                if (!$this->priceProductsScheduledForDeletion->isEmpty()) {
                    foreach ($this->priceProductsScheduledForDeletion as $priceProduct) {
                        // need to save related object because we set the relation to null
                        $priceProduct->save($con);
                    }
                    $this->priceProductsScheduledForDeletion = null;
                }
            }

            if ($this->collPriceProducts !== null) {
                foreach ($this->collPriceProducts as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->priceProductMerchantRelationshipsScheduledForDeletion !== null) {
                if (!$this->priceProductMerchantRelationshipsScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\PriceProductMerchantRelationship\Persistence\SpyPriceProductMerchantRelationshipQuery::create()
                        ->filterByPrimaryKeys($this->priceProductMerchantRelationshipsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->priceProductMerchantRelationshipsScheduledForDeletion = null;
                }
            }

            if ($this->collPriceProductMerchantRelationships !== null) {
                foreach ($this->collPriceProductMerchantRelationships as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->priceProductSchedulesScheduledForDeletion !== null) {
                if (!$this->priceProductSchedulesScheduledForDeletion->isEmpty()) {
                    foreach ($this->priceProductSchedulesScheduledForDeletion as $priceProductSchedule) {
                        // need to save related object because we set the relation to null
                        $priceProductSchedule->save($con);
                    }
                    $this->priceProductSchedulesScheduledForDeletion = null;
                }
            }

            if ($this->collPriceProductSchedules !== null) {
                foreach ($this->collPriceProductSchedules as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->spyProductLocalizedAttributessScheduledForDeletion !== null) {
                if (!$this->spyProductLocalizedAttributessScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\Product\Persistence\SpyProductLocalizedAttributesQuery::create()
                        ->filterByPrimaryKeys($this->spyProductLocalizedAttributessScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spyProductLocalizedAttributessScheduledForDeletion = null;
                }
            }

            if ($this->collSpyProductLocalizedAttributess !== null) {
                foreach ($this->collSpyProductLocalizedAttributess as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->spyProductAlternativesRelatedByFkProductScheduledForDeletion !== null) {
                if (!$this->spyProductAlternativesRelatedByFkProductScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\ProductAlternative\Persistence\SpyProductAlternativeQuery::create()
                        ->filterByPrimaryKeys($this->spyProductAlternativesRelatedByFkProductScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spyProductAlternativesRelatedByFkProductScheduledForDeletion = null;
                }
            }

            if ($this->collSpyProductAlternativesRelatedByFkProduct !== null) {
                foreach ($this->collSpyProductAlternativesRelatedByFkProduct as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->spyProductAlternativesRelatedByFkProductConcreteAlternativeScheduledForDeletion !== null) {
                if (!$this->spyProductAlternativesRelatedByFkProductConcreteAlternativeScheduledForDeletion->isEmpty()) {
                    foreach ($this->spyProductAlternativesRelatedByFkProductConcreteAlternativeScheduledForDeletion as $spyProductAlternativeRelatedByFkProductConcreteAlternative) {
                        // need to save related object because we set the relation to null
                        $spyProductAlternativeRelatedByFkProductConcreteAlternative->save($con);
                    }
                    $this->spyProductAlternativesRelatedByFkProductConcreteAlternativeScheduledForDeletion = null;
                }
            }

            if ($this->collSpyProductAlternativesRelatedByFkProductConcreteAlternative !== null) {
                foreach ($this->collSpyProductAlternativesRelatedByFkProductConcreteAlternative as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->spyProductBundlesRelatedByFkBundledProductScheduledForDeletion !== null) {
                if (!$this->spyProductBundlesRelatedByFkBundledProductScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\ProductBundle\Persistence\SpyProductBundleQuery::create()
                        ->filterByPrimaryKeys($this->spyProductBundlesRelatedByFkBundledProductScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spyProductBundlesRelatedByFkBundledProductScheduledForDeletion = null;
                }
            }

            if ($this->collSpyProductBundlesRelatedByFkBundledProduct !== null) {
                foreach ($this->collSpyProductBundlesRelatedByFkBundledProduct as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->spyProductBundlesRelatedByFkProductScheduledForDeletion !== null) {
                if (!$this->spyProductBundlesRelatedByFkProductScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\ProductBundle\Persistence\SpyProductBundleQuery::create()
                        ->filterByPrimaryKeys($this->spyProductBundlesRelatedByFkProductScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spyProductBundlesRelatedByFkProductScheduledForDeletion = null;
                }
            }

            if ($this->collSpyProductBundlesRelatedByFkProduct !== null) {
                foreach ($this->collSpyProductBundlesRelatedByFkProduct as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->spyProductDiscontinuedsScheduledForDeletion !== null) {
                if (!$this->spyProductDiscontinuedsScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\ProductDiscontinued\Persistence\SpyProductDiscontinuedQuery::create()
                        ->filterByPrimaryKeys($this->spyProductDiscontinuedsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spyProductDiscontinuedsScheduledForDeletion = null;
                }
            }

            if ($this->collSpyProductDiscontinueds !== null) {
                foreach ($this->collSpyProductDiscontinueds as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->spyProductImageSetsScheduledForDeletion !== null) {
                if (!$this->spyProductImageSetsScheduledForDeletion->isEmpty()) {
                    foreach ($this->spyProductImageSetsScheduledForDeletion as $spyProductImageSet) {
                        // need to save related object because we set the relation to null
                        $spyProductImageSet->save($con);
                    }
                    $this->spyProductImageSetsScheduledForDeletion = null;
                }
            }

            if ($this->collSpyProductImageSets !== null) {
                foreach ($this->collSpyProductImageSets as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->spyProductListProductConcretesScheduledForDeletion !== null) {
                if (!$this->spyProductListProductConcretesScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\ProductList\Persistence\SpyProductListProductConcreteQuery::create()
                        ->filterByPrimaryKeys($this->spyProductListProductConcretesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spyProductListProductConcretesScheduledForDeletion = null;
                }
            }

            if ($this->collSpyProductListProductConcretes !== null) {
                foreach ($this->collSpyProductListProductConcretes as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->spyProductMeasurementSalesUnitsScheduledForDeletion !== null) {
                if (!$this->spyProductMeasurementSalesUnitsScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementSalesUnitQuery::create()
                        ->filterByPrimaryKeys($this->spyProductMeasurementSalesUnitsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spyProductMeasurementSalesUnitsScheduledForDeletion = null;
                }
            }

            if ($this->collSpyProductMeasurementSalesUnits !== null) {
                foreach ($this->collSpyProductMeasurementSalesUnits as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->spyProductPackagingUnitsRelatedByFkProductScheduledForDeletion !== null) {
                if (!$this->spyProductPackagingUnitsRelatedByFkProductScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\ProductPackagingUnit\Persistence\SpyProductPackagingUnitQuery::create()
                        ->filterByPrimaryKeys($this->spyProductPackagingUnitsRelatedByFkProductScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spyProductPackagingUnitsRelatedByFkProductScheduledForDeletion = null;
                }
            }

            if ($this->collSpyProductPackagingUnitsRelatedByFkProduct !== null) {
                foreach ($this->collSpyProductPackagingUnitsRelatedByFkProduct as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->spyProductPackagingUnitsRelatedByFkLeadProductScheduledForDeletion !== null) {
                if (!$this->spyProductPackagingUnitsRelatedByFkLeadProductScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\ProductPackagingUnit\Persistence\SpyProductPackagingUnitQuery::create()
                        ->filterByPrimaryKeys($this->spyProductPackagingUnitsRelatedByFkLeadProductScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spyProductPackagingUnitsRelatedByFkLeadProductScheduledForDeletion = null;
                }
            }

            if ($this->collSpyProductPackagingUnitsRelatedByFkLeadProduct !== null) {
                foreach ($this->collSpyProductPackagingUnitsRelatedByFkLeadProduct as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->spyProductQuantitiesScheduledForDeletion !== null) {
                if (!$this->spyProductQuantitiesScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\ProductQuantity\Persistence\SpyProductQuantityQuery::create()
                        ->filterByPrimaryKeys($this->spyProductQuantitiesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spyProductQuantitiesScheduledForDeletion = null;
                }
            }

            if ($this->collSpyProductQuantities !== null) {
                foreach ($this->collSpyProductQuantities as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->spyProductSearchesScheduledForDeletion !== null) {
                if (!$this->spyProductSearchesScheduledForDeletion->isEmpty()) {
                    foreach ($this->spyProductSearchesScheduledForDeletion as $spyProductSearch) {
                        // need to save related object because we set the relation to null
                        $spyProductSearch->save($con);
                    }
                    $this->spyProductSearchesScheduledForDeletion = null;
                }
            }

            if ($this->collSpyProductSearches !== null) {
                foreach ($this->collSpyProductSearches as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->spyProductValiditiesScheduledForDeletion !== null) {
                if (!$this->spyProductValiditiesScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\ProductValidity\Persistence\SpyProductValidityQuery::create()
                        ->filterByPrimaryKeys($this->spyProductValiditiesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spyProductValiditiesScheduledForDeletion = null;
                }
            }

            if ($this->collSpyProductValidities !== null) {
                foreach ($this->collSpyProductValidities as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->stockProductsScheduledForDeletion !== null) {
                if (!$this->stockProductsScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\Stock\Persistence\SpyStockProductQuery::create()
                        ->filterByPrimaryKeys($this->stockProductsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->stockProductsScheduledForDeletion = null;
                }
            }

            if ($this->collStockProducts !== null) {
                foreach ($this->collStockProducts as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param      ConnectionInterface $con
     *
     * @throws PropelException
     * @see doSave()
     */
    protected function doInsert(ConnectionInterface $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[SpyProductTableMap::COL_ID_PRODUCT] = true;

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SpyProductTableMap::COL_ID_PRODUCT)) {
            $modifiedColumns[':p' . $index++]  = '`id_product`';
        }
        if ($this->isColumnModified(SpyProductTableMap::COL_FK_PRODUCT_ABSTRACT)) {
            $modifiedColumns[':p' . $index++]  = '`fk_product_abstract`';
        }
        if ($this->isColumnModified(SpyProductTableMap::COL_ATTRIBUTES)) {
            $modifiedColumns[':p' . $index++]  = '`attributes`';
        }
        if ($this->isColumnModified(SpyProductTableMap::COL_IS_ACTIVE)) {
            $modifiedColumns[':p' . $index++]  = '`is_active`';
        }
        if ($this->isColumnModified(SpyProductTableMap::COL_IS_QUANTITY_SPLITTABLE)) {
            $modifiedColumns[':p' . $index++]  = '`is_quantity_splittable`';
        }
        if ($this->isColumnModified(SpyProductTableMap::COL_SKU)) {
            $modifiedColumns[':p' . $index++]  = '`sku`';
        }
        if ($this->isColumnModified(SpyProductTableMap::COL_CREATED_AT)) {
            $modifiedColumns[':p' . $index++]  = '`created_at`';
        }
        if ($this->isColumnModified(SpyProductTableMap::COL_UPDATED_AT)) {
            $modifiedColumns[':p' . $index++]  = '`updated_at`';
        }

        $sql = sprintf(
            'INSERT INTO `spy_product` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_product`':
                        $stmt->bindValue($identifier, $this->id_product, PDO::PARAM_INT);
                        break;
                    case '`fk_product_abstract`':
                        $stmt->bindValue($identifier, $this->fk_product_abstract, PDO::PARAM_INT);
                        break;
                    case '`attributes`':
                        $stmt->bindValue($identifier, $this->attributes, PDO::PARAM_STR);
                        break;
                    case '`is_active`':
                        $stmt->bindValue($identifier, (int) $this->is_active, PDO::PARAM_INT);
                        break;
                    case '`is_quantity_splittable`':
                        $stmt->bindValue($identifier, (int) $this->is_quantity_splittable, PDO::PARAM_INT);
                        break;
                    case '`sku`':
                        $stmt->bindValue($identifier, $this->sku, PDO::PARAM_STR);
                        break;
                    case '`created_at`':
                        $stmt->bindValue($identifier, $this->created_at ? $this->created_at->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case '`updated_at`':
                        $stmt->bindValue($identifier, $this->updated_at ? $this->updated_at->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), 0, $e);
        }

        try {
            $pk = $con->lastInsertId('spy_product_pk_seq');
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        if ($pk !== null) {
            $this->setIdProduct($pk);
        }

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param      ConnectionInterface $con
     *
     * @return Integer Number of updated rows
     * @see doSave()
     */
    protected function doUpdate(ConnectionInterface $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();

        return $selectCriteria->doUpdate($valuesCriteria, $con);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param      string $name name
     * @param      string $type The type of fieldname the $name is of:
     *                     one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                     TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                     Defaults to TableMap::TYPE_FIELDNAME.
     * @return mixed Value of field.
     */
    public function getByName($name, $type = TableMap::TYPE_FIELDNAME)
    {
        $pos = SpyProductTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param      int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getIdProduct();
                break;
            case 1:
                return $this->getFkProductAbstract();
                break;
            case 2:
                return $this->getAttributes();
                break;
            case 3:
                return $this->getIsActive();
                break;
            case 4:
                return $this->getIsQuantitySplittable();
                break;
            case 5:
                return $this->getSku();
                break;
            case 6:
                return $this->getCreatedAt();
                break;
            case 7:
                return $this->getUpdatedAt();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     *                    TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                    Defaults to TableMap::TYPE_FIELDNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = TableMap::TYPE_FIELDNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {

        if (isset($alreadyDumpedObjects['SpyProduct'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SpyProduct'][$this->hashCode()] = true;
        $keys = SpyProductTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdProduct(),
            $keys[1] => $this->getFkProductAbstract(),
            $keys[2] => $this->getAttributes(),
            $keys[3] => $this->getIsActive(),
            $keys[4] => $this->getIsQuantitySplittable(),
            $keys[5] => $this->getSku(),
            $keys[6] => $this->getCreatedAt(),
            $keys[7] => $this->getUpdatedAt(),
        );
        if ($result[$keys[6]] instanceof \DateTimeInterface) {
            $result[$keys[6]] = $result[$keys[6]]->format('Y-m-d H:i:s.u');
        }

        if ($result[$keys[7]] instanceof \DateTimeInterface) {
            $result[$keys[7]] = $result[$keys[7]]->format('Y-m-d H:i:s.u');
        }

        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aSpyProductAbstract) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyProductAbstract';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_product_abstract';
                        break;
                    default:
                        $key = 'SpyProductAbstract';
                }

                $result[$key] = $this->aSpyProductAbstract->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collPriceProducts) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyPriceProducts';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_price_products';
                        break;
                    default:
                        $key = 'PriceProducts';
                }

                $result[$key] = $this->collPriceProducts->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collPriceProductMerchantRelationships) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyPriceProductMerchantRelationships';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_price_product_merchant_relationships';
                        break;
                    default:
                        $key = 'PriceProductMerchantRelationships';
                }

                $result[$key] = $this->collPriceProductMerchantRelationships->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collPriceProductSchedules) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyPriceProductSchedules';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_price_product_schedules';
                        break;
                    default:
                        $key = 'PriceProductSchedules';
                }

                $result[$key] = $this->collPriceProductSchedules->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSpyProductLocalizedAttributess) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyProductLocalizedAttributess';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_product_localized_attributess';
                        break;
                    default:
                        $key = 'SpyProductLocalizedAttributess';
                }

                $result[$key] = $this->collSpyProductLocalizedAttributess->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSpyProductAlternativesRelatedByFkProduct) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyProductAlternatives';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_product_alternatives';
                        break;
                    default:
                        $key = 'SpyProductAlternatives';
                }

                $result[$key] = $this->collSpyProductAlternativesRelatedByFkProduct->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSpyProductAlternativesRelatedByFkProductConcreteAlternative) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyProductAlternatives';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_product_alternatives';
                        break;
                    default:
                        $key = 'SpyProductAlternatives';
                }

                $result[$key] = $this->collSpyProductAlternativesRelatedByFkProductConcreteAlternative->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSpyProductBundlesRelatedByFkBundledProduct) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyProductBundles';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_product_bundles';
                        break;
                    default:
                        $key = 'SpyProductBundles';
                }

                $result[$key] = $this->collSpyProductBundlesRelatedByFkBundledProduct->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSpyProductBundlesRelatedByFkProduct) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyProductBundles';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_product_bundles';
                        break;
                    default:
                        $key = 'SpyProductBundles';
                }

                $result[$key] = $this->collSpyProductBundlesRelatedByFkProduct->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSpyProductDiscontinueds) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyProductDiscontinueds';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_product_discontinueds';
                        break;
                    default:
                        $key = 'SpyProductDiscontinueds';
                }

                $result[$key] = $this->collSpyProductDiscontinueds->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSpyProductImageSets) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyProductImageSets';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_product_image_sets';
                        break;
                    default:
                        $key = 'SpyProductImageSets';
                }

                $result[$key] = $this->collSpyProductImageSets->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSpyProductListProductConcretes) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyProductListProductConcretes';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_product_list_product_concretes';
                        break;
                    default:
                        $key = 'SpyProductListProductConcretes';
                }

                $result[$key] = $this->collSpyProductListProductConcretes->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSpyProductMeasurementSalesUnits) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyProductMeasurementSalesUnits';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_product_measurement_sales_units';
                        break;
                    default:
                        $key = 'SpyProductMeasurementSalesUnits';
                }

                $result[$key] = $this->collSpyProductMeasurementSalesUnits->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSpyProductPackagingUnitsRelatedByFkProduct) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyProductPackagingUnits';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_product_packaging_units';
                        break;
                    default:
                        $key = 'SpyProductPackagingUnits';
                }

                $result[$key] = $this->collSpyProductPackagingUnitsRelatedByFkProduct->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSpyProductPackagingUnitsRelatedByFkLeadProduct) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyProductPackagingUnits';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_product_packaging_units';
                        break;
                    default:
                        $key = 'SpyProductPackagingUnits';
                }

                $result[$key] = $this->collSpyProductPackagingUnitsRelatedByFkLeadProduct->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSpyProductQuantities) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyProductQuantities';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_product_quantities';
                        break;
                    default:
                        $key = 'SpyProductQuantities';
                }

                $result[$key] = $this->collSpyProductQuantities->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSpyProductSearches) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyProductSearches';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_product_searches';
                        break;
                    default:
                        $key = 'SpyProductSearches';
                }

                $result[$key] = $this->collSpyProductSearches->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSpyProductValidities) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyProductValidities';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_product_validities';
                        break;
                    default:
                        $key = 'SpyProductValidities';
                }

                $result[$key] = $this->collSpyProductValidities->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collStockProducts) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyStockProducts';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_stock_products';
                        break;
                    default:
                        $key = 'StockProducts';
                }

                $result[$key] = $this->collStockProducts->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param  string $name
     * @param  mixed  $value field value
     * @param  string $type The type of fieldname the $name is of:
     *                one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                Defaults to TableMap::TYPE_FIELDNAME.
     * @return $this|\Orm\Zed\Product\Persistence\SpyProduct
     */
    public function setByName($name, $value, $type = TableMap::TYPE_FIELDNAME)
    {
        $pos = SpyProductTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\Orm\Zed\Product\Persistence\SpyProduct
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdProduct($value);
                break;
            case 1:
                $this->setFkProductAbstract($value);
                break;
            case 2:
                $this->setAttributes($value);
                break;
            case 3:
                $this->setIsActive($value);
                break;
            case 4:
                $this->setIsQuantitySplittable($value);
                break;
            case 5:
                $this->setSku($value);
                break;
            case 6:
                $this->setCreatedAt($value);
                break;
            case 7:
                $this->setUpdatedAt($value);
                break;
        } // switch()

        return $this;
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     * TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     * The default key type is the column's TableMap::TYPE_FIELDNAME.
     *
     * @param      array  $arr     An array to populate the object from.
     * @param      string $keyType The type of keys the array uses.
     * @return     $this|\Orm\Zed\Product\Persistence\SpyProduct
     */
    public function fromArray($arr, $keyType = TableMap::TYPE_FIELDNAME)
    {
        $keys = SpyProductTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setIdProduct($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setFkProductAbstract($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setAttributes($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setIsActive($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setIsQuantitySplittable($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setSku($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setCreatedAt($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setUpdatedAt($arr[$keys[7]]);
        }

        return $this;
    }

     /**
     * Populate the current object from a string, using a given parser format
     * <code>
     * $book = new Book();
     * $book->importFrom('JSON', '{"Id":9012,"Title":"Don Juan","ISBN":"0140422161","Price":12.99,"PublisherId":1234,"AuthorId":5678}');
     * </code>
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     * TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     * The default key type is the column's TableMap::TYPE_FIELDNAME.
     *
     * @param mixed $parser A AbstractParser instance,
     *                       or a format name ('XML', 'YAML', 'JSON', 'CSV')
     * @param string $data The source data to import from
     * @param string $keyType The type of keys the array uses.
     *
     * @return $this|\Orm\Zed\Product\Persistence\SpyProduct The current object, for fluid interface
     */
    public function importFrom($parser, $data, $keyType = TableMap::TYPE_FIELDNAME)
    {
        if (!$parser instanceof AbstractParser) {
            $parser = AbstractParser::getParser($parser);
        }

        $this->fromArray($parser->toArray($data), $keyType);

        return $this;
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(SpyProductTableMap::DATABASE_NAME);

        if ($this->isColumnModified(SpyProductTableMap::COL_ID_PRODUCT)) {
            $criteria->add(SpyProductTableMap::COL_ID_PRODUCT, $this->id_product);
        }
        if ($this->isColumnModified(SpyProductTableMap::COL_FK_PRODUCT_ABSTRACT)) {
            $criteria->add(SpyProductTableMap::COL_FK_PRODUCT_ABSTRACT, $this->fk_product_abstract);
        }
        if ($this->isColumnModified(SpyProductTableMap::COL_ATTRIBUTES)) {
            $criteria->add(SpyProductTableMap::COL_ATTRIBUTES, $this->attributes);
        }
        if ($this->isColumnModified(SpyProductTableMap::COL_IS_ACTIVE)) {
            $criteria->add(SpyProductTableMap::COL_IS_ACTIVE, $this->is_active);
        }
        if ($this->isColumnModified(SpyProductTableMap::COL_IS_QUANTITY_SPLITTABLE)) {
            $criteria->add(SpyProductTableMap::COL_IS_QUANTITY_SPLITTABLE, $this->is_quantity_splittable);
        }
        if ($this->isColumnModified(SpyProductTableMap::COL_SKU)) {
            $criteria->add(SpyProductTableMap::COL_SKU, $this->sku);
        }
        if ($this->isColumnModified(SpyProductTableMap::COL_CREATED_AT)) {
            $criteria->add(SpyProductTableMap::COL_CREATED_AT, $this->created_at);
        }
        if ($this->isColumnModified(SpyProductTableMap::COL_UPDATED_AT)) {
            $criteria->add(SpyProductTableMap::COL_UPDATED_AT, $this->updated_at);
        }

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @throws LogicException if no primary key is defined
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = ChildSpyProductQuery::create();
        $criteria->add(SpyProductTableMap::COL_ID_PRODUCT, $this->id_product);

        return $criteria;
    }

    /**
     * If the primary key is not null, return the hashcode of the
     * primary key. Otherwise, return the hash code of the object.
     *
     * @return int Hashcode
     */
    public function hashCode()
    {
        $validPk = null !== $this->getIdProduct();

        $validPrimaryKeyFKs = 0;
        $primaryKeyFKs = [];

        if ($validPk) {
            return crc32(json_encode($this->getPrimaryKey(), JSON_UNESCAPED_UNICODE));
        } elseif ($validPrimaryKeyFKs) {
            return crc32(json_encode($primaryKeyFKs, JSON_UNESCAPED_UNICODE));
        }

        return spl_object_hash($this);
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdProduct();
    }

    /**
     * Generic method to set the primary key (id_product column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdProduct($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getIdProduct();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \Orm\Zed\Product\Persistence\SpyProduct (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFkProductAbstract($this->getFkProductAbstract());
        $copyObj->setAttributes($this->getAttributes());
        $copyObj->setIsActive($this->getIsActive());
        $copyObj->setIsQuantitySplittable($this->getIsQuantitySplittable());
        $copyObj->setSku($this->getSku());
        $copyObj->setCreatedAt($this->getCreatedAt());
        $copyObj->setUpdatedAt($this->getUpdatedAt());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getPriceProducts() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPriceProduct($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getPriceProductMerchantRelationships() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPriceProductMerchantRelationship($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getPriceProductSchedules() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPriceProductSchedule($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSpyProductLocalizedAttributess() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyProductLocalizedAttributes($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSpyProductAlternativesRelatedByFkProduct() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyProductAlternativeRelatedByFkProduct($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSpyProductAlternativesRelatedByFkProductConcreteAlternative() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyProductAlternativeRelatedByFkProductConcreteAlternative($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSpyProductBundlesRelatedByFkBundledProduct() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyProductBundleRelatedByFkBundledProduct($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSpyProductBundlesRelatedByFkProduct() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyProductBundleRelatedByFkProduct($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSpyProductDiscontinueds() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyProductDiscontinued($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSpyProductImageSets() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyProductImageSet($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSpyProductListProductConcretes() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyProductListProductConcrete($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSpyProductMeasurementSalesUnits() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyProductMeasurementSalesUnit($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSpyProductPackagingUnitsRelatedByFkProduct() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyProductPackagingUnitRelatedByFkProduct($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSpyProductPackagingUnitsRelatedByFkLeadProduct() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyProductPackagingUnitRelatedByFkLeadProduct($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSpyProductQuantities() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyProductQuantity($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSpyProductSearches() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyProductSearch($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSpyProductValidities() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyProductValidity($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getStockProducts() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addStockProduct($relObj->copy($deepCopy));
                }
            }

        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdProduct(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param  boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return \Orm\Zed\Product\Persistence\SpyProduct Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Declares an association between this object and a ChildSpyProductAbstract object.
     *
     * @param  ChildSpyProductAbstract $v
     * @return $this|\Orm\Zed\Product\Persistence\SpyProduct The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSpyProductAbstract(ChildSpyProductAbstract $v = null)
    {
        if ($v === null) {
            $this->setFkProductAbstract(NULL);
        } else {
            $this->setFkProductAbstract($v->getIdProductAbstract());
        }

        $this->aSpyProductAbstract = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildSpyProductAbstract object, it will not be re-added.
        if ($v !== null) {
            $v->addSpyProduct($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildSpyProductAbstract object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildSpyProductAbstract The associated ChildSpyProductAbstract object.
     * @throws PropelException
     */
    public function getSpyProductAbstract(ConnectionInterface $con = null)
    {
        if ($this->aSpyProductAbstract === null && ($this->fk_product_abstract != 0)) {
            $this->aSpyProductAbstract = ChildSpyProductAbstractQuery::create()->findPk($this->fk_product_abstract, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSpyProductAbstract->addSpyProducts($this);
             */
        }

        return $this->aSpyProductAbstract;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param      string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('PriceProduct' === $relationName) {
            $this->initPriceProducts();
            return;
        }
        if ('PriceProductMerchantRelationship' === $relationName) {
            $this->initPriceProductMerchantRelationships();
            return;
        }
        if ('PriceProductSchedule' === $relationName) {
            $this->initPriceProductSchedules();
            return;
        }
        if ('SpyProductLocalizedAttributes' === $relationName) {
            $this->initSpyProductLocalizedAttributess();
            return;
        }
        if ('SpyProductAlternativeRelatedByFkProduct' === $relationName) {
            $this->initSpyProductAlternativesRelatedByFkProduct();
            return;
        }
        if ('SpyProductAlternativeRelatedByFkProductConcreteAlternative' === $relationName) {
            $this->initSpyProductAlternativesRelatedByFkProductConcreteAlternative();
            return;
        }
        if ('SpyProductBundleRelatedByFkBundledProduct' === $relationName) {
            $this->initSpyProductBundlesRelatedByFkBundledProduct();
            return;
        }
        if ('SpyProductBundleRelatedByFkProduct' === $relationName) {
            $this->initSpyProductBundlesRelatedByFkProduct();
            return;
        }
        if ('SpyProductDiscontinued' === $relationName) {
            $this->initSpyProductDiscontinueds();
            return;
        }
        if ('SpyProductImageSet' === $relationName) {
            $this->initSpyProductImageSets();
            return;
        }
        if ('SpyProductListProductConcrete' === $relationName) {
            $this->initSpyProductListProductConcretes();
            return;
        }
        if ('SpyProductMeasurementSalesUnit' === $relationName) {
            $this->initSpyProductMeasurementSalesUnits();
            return;
        }
        if ('SpyProductPackagingUnitRelatedByFkProduct' === $relationName) {
            $this->initSpyProductPackagingUnitsRelatedByFkProduct();
            return;
        }
        if ('SpyProductPackagingUnitRelatedByFkLeadProduct' === $relationName) {
            $this->initSpyProductPackagingUnitsRelatedByFkLeadProduct();
            return;
        }
        if ('SpyProductQuantity' === $relationName) {
            $this->initSpyProductQuantities();
            return;
        }
        if ('SpyProductSearch' === $relationName) {
            $this->initSpyProductSearches();
            return;
        }
        if ('SpyProductValidity' === $relationName) {
            $this->initSpyProductValidities();
            return;
        }
        if ('StockProduct' === $relationName) {
            $this->initStockProducts();
            return;
        }
    }

    /**
     * Clears out the collPriceProducts collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addPriceProducts()
     */
    public function clearPriceProducts()
    {
        $this->collPriceProducts = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collPriceProducts collection loaded partially.
     */
    public function resetPartialPriceProducts($v = true)
    {
        $this->collPriceProductsPartial = $v;
    }

    /**
     * Initializes the collPriceProducts collection.
     *
     * By default this just sets the collPriceProducts collection to an empty array (like clearcollPriceProducts());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPriceProducts($overrideExisting = true)
    {
        if (null !== $this->collPriceProducts && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyPriceProductTableMap::getTableMap()->getCollectionClassName();

        $this->collPriceProducts = new $collectionClassName;
        $this->collPriceProducts->setModel('\Orm\Zed\PriceProduct\Persistence\SpyPriceProduct');
    }

    /**
     * Gets an array of SpyPriceProduct objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyProduct is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyPriceProduct[] List of SpyPriceProduct objects
     * @phpstan-return ObjectCollection&\Traversable<SpyPriceProduct> List of SpyPriceProduct objects
     * @throws PropelException
     */
    public function getPriceProducts(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collPriceProductsPartial && !$this->isNew();
        if (null === $this->collPriceProducts || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collPriceProducts) {
                    $this->initPriceProducts();
                } else {
                    $collectionClassName = SpyPriceProductTableMap::getTableMap()->getCollectionClassName();

                    $collPriceProducts = new $collectionClassName;
                    $collPriceProducts->setModel('\Orm\Zed\PriceProduct\Persistence\SpyPriceProduct');

                    return $collPriceProducts;
                }
            } else {
                $collPriceProducts = SpyPriceProductQuery::create(null, $criteria)
                    ->filterByProduct($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collPriceProductsPartial && count($collPriceProducts)) {
                        $this->initPriceProducts(false);

                        foreach ($collPriceProducts as $obj) {
                            if (false == $this->collPriceProducts->contains($obj)) {
                                $this->collPriceProducts->append($obj);
                            }
                        }

                        $this->collPriceProductsPartial = true;
                    }

                    return $collPriceProducts;
                }

                if ($partial && $this->collPriceProducts) {
                    foreach ($this->collPriceProducts as $obj) {
                        if ($obj->isNew()) {
                            $collPriceProducts[] = $obj;
                        }
                    }
                }

                $this->collPriceProducts = $collPriceProducts;
                $this->collPriceProductsPartial = false;
            }
        }

        return $this->collPriceProducts;
    }

    /**
     * Sets a collection of SpyPriceProduct objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $priceProducts A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyProduct The current object (for fluent API support)
     */
    public function setPriceProducts(Collection $priceProducts, ConnectionInterface $con = null)
    {
        /** @var SpyPriceProduct[] $priceProductsToDelete */
        $priceProductsToDelete = $this->getPriceProducts(new Criteria(), $con)->diff($priceProducts);


        $this->priceProductsScheduledForDeletion = $priceProductsToDelete;

        foreach ($priceProductsToDelete as $priceProductRemoved) {
            $priceProductRemoved->setProduct(null);
        }

        $this->collPriceProducts = null;
        foreach ($priceProducts as $priceProduct) {
            $this->addPriceProduct($priceProduct);
        }

        $this->collPriceProducts = $priceProducts;
        $this->collPriceProductsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyPriceProduct objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyPriceProduct objects.
     * @throws PropelException
     */
    public function countPriceProducts(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collPriceProductsPartial && !$this->isNew();
        if (null === $this->collPriceProducts || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPriceProducts) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPriceProducts());
            }

            $query = SpyPriceProductQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByProduct($this)
                ->count($con);
        }

        return count($this->collPriceProducts);
    }

    /**
     * Method called to associate a SpyPriceProduct object to this object
     * through the SpyPriceProduct foreign key attribute.
     *
     * @param  SpyPriceProduct $l SpyPriceProduct
     * @return $this|\Orm\Zed\Product\Persistence\SpyProduct The current object (for fluent API support)
     */
    public function addPriceProduct(SpyPriceProduct $l)
    {
        if ($this->collPriceProducts === null) {
            $this->initPriceProducts();
            $this->collPriceProductsPartial = true;
        }

        if (!$this->collPriceProducts->contains($l)) {
            $this->doAddPriceProduct($l);

            if ($this->priceProductsScheduledForDeletion and $this->priceProductsScheduledForDeletion->contains($l)) {
                $this->priceProductsScheduledForDeletion->remove($this->priceProductsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyPriceProduct $priceProduct The SpyPriceProduct object to add.
     */
    protected function doAddPriceProduct(SpyPriceProduct $priceProduct)
    {
        $this->collPriceProducts[]= $priceProduct;
        $priceProduct->setProduct($this);
    }

    /**
     * @param  SpyPriceProduct $priceProduct The SpyPriceProduct object to remove.
     * @return $this|ChildSpyProduct The current object (for fluent API support)
     */
    public function removePriceProduct(SpyPriceProduct $priceProduct)
    {
        if ($this->getPriceProducts()->contains($priceProduct)) {
            $pos = $this->collPriceProducts->search($priceProduct);
            $this->collPriceProducts->remove($pos);
            if (null === $this->priceProductsScheduledForDeletion) {
                $this->priceProductsScheduledForDeletion = clone $this->collPriceProducts;
                $this->priceProductsScheduledForDeletion->clear();
            }
            $this->priceProductsScheduledForDeletion[]= $priceProduct;
            $priceProduct->setProduct(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyProduct is new, it will return
     * an empty collection; or if this SpyProduct has previously
     * been saved, it will retrieve related PriceProducts from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyProduct.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyPriceProduct[] List of SpyPriceProduct objects
     * @phpstan-return ObjectCollection&\Traversable<SpyPriceProduct}> List of SpyPriceProduct objects
     */
    public function getPriceProductsJoinPriceType(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyPriceProductQuery::create(null, $criteria);
        $query->joinWith('PriceType', $joinBehavior);

        return $this->getPriceProducts($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyProduct is new, it will return
     * an empty collection; or if this SpyProduct has previously
     * been saved, it will retrieve related PriceProducts from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyProduct.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyPriceProduct[] List of SpyPriceProduct objects
     * @phpstan-return ObjectCollection&\Traversable<SpyPriceProduct}> List of SpyPriceProduct objects
     */
    public function getPriceProductsJoinSpyProductAbstract(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyPriceProductQuery::create(null, $criteria);
        $query->joinWith('SpyProductAbstract', $joinBehavior);

        return $this->getPriceProducts($query, $con);
    }

    /**
     * Clears out the collPriceProductMerchantRelationships collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addPriceProductMerchantRelationships()
     */
    public function clearPriceProductMerchantRelationships()
    {
        $this->collPriceProductMerchantRelationships = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collPriceProductMerchantRelationships collection loaded partially.
     */
    public function resetPartialPriceProductMerchantRelationships($v = true)
    {
        $this->collPriceProductMerchantRelationshipsPartial = $v;
    }

    /**
     * Initializes the collPriceProductMerchantRelationships collection.
     *
     * By default this just sets the collPriceProductMerchantRelationships collection to an empty array (like clearcollPriceProductMerchantRelationships());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPriceProductMerchantRelationships($overrideExisting = true)
    {
        if (null !== $this->collPriceProductMerchantRelationships && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyPriceProductMerchantRelationshipTableMap::getTableMap()->getCollectionClassName();

        $this->collPriceProductMerchantRelationships = new $collectionClassName;
        $this->collPriceProductMerchantRelationships->setModel('\Orm\Zed\PriceProductMerchantRelationship\Persistence\SpyPriceProductMerchantRelationship');
    }

    /**
     * Gets an array of SpyPriceProductMerchantRelationship objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyProduct is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyPriceProductMerchantRelationship[] List of SpyPriceProductMerchantRelationship objects
     * @phpstan-return ObjectCollection&\Traversable<SpyPriceProductMerchantRelationship> List of SpyPriceProductMerchantRelationship objects
     * @throws PropelException
     */
    public function getPriceProductMerchantRelationships(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collPriceProductMerchantRelationshipsPartial && !$this->isNew();
        if (null === $this->collPriceProductMerchantRelationships || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collPriceProductMerchantRelationships) {
                    $this->initPriceProductMerchantRelationships();
                } else {
                    $collectionClassName = SpyPriceProductMerchantRelationshipTableMap::getTableMap()->getCollectionClassName();

                    $collPriceProductMerchantRelationships = new $collectionClassName;
                    $collPriceProductMerchantRelationships->setModel('\Orm\Zed\PriceProductMerchantRelationship\Persistence\SpyPriceProductMerchantRelationship');

                    return $collPriceProductMerchantRelationships;
                }
            } else {
                $collPriceProductMerchantRelationships = SpyPriceProductMerchantRelationshipQuery::create(null, $criteria)
                    ->filterByProduct($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collPriceProductMerchantRelationshipsPartial && count($collPriceProductMerchantRelationships)) {
                        $this->initPriceProductMerchantRelationships(false);

                        foreach ($collPriceProductMerchantRelationships as $obj) {
                            if (false == $this->collPriceProductMerchantRelationships->contains($obj)) {
                                $this->collPriceProductMerchantRelationships->append($obj);
                            }
                        }

                        $this->collPriceProductMerchantRelationshipsPartial = true;
                    }

                    return $collPriceProductMerchantRelationships;
                }

                if ($partial && $this->collPriceProductMerchantRelationships) {
                    foreach ($this->collPriceProductMerchantRelationships as $obj) {
                        if ($obj->isNew()) {
                            $collPriceProductMerchantRelationships[] = $obj;
                        }
                    }
                }

                $this->collPriceProductMerchantRelationships = $collPriceProductMerchantRelationships;
                $this->collPriceProductMerchantRelationshipsPartial = false;
            }
        }

        return $this->collPriceProductMerchantRelationships;
    }

    /**
     * Sets a collection of SpyPriceProductMerchantRelationship objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $priceProductMerchantRelationships A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyProduct The current object (for fluent API support)
     */
    public function setPriceProductMerchantRelationships(Collection $priceProductMerchantRelationships, ConnectionInterface $con = null)
    {
        /** @var SpyPriceProductMerchantRelationship[] $priceProductMerchantRelationshipsToDelete */
        $priceProductMerchantRelationshipsToDelete = $this->getPriceProductMerchantRelationships(new Criteria(), $con)->diff($priceProductMerchantRelationships);


        $this->priceProductMerchantRelationshipsScheduledForDeletion = $priceProductMerchantRelationshipsToDelete;

        foreach ($priceProductMerchantRelationshipsToDelete as $priceProductMerchantRelationshipRemoved) {
            $priceProductMerchantRelationshipRemoved->setProduct(null);
        }

        $this->collPriceProductMerchantRelationships = null;
        foreach ($priceProductMerchantRelationships as $priceProductMerchantRelationship) {
            $this->addPriceProductMerchantRelationship($priceProductMerchantRelationship);
        }

        $this->collPriceProductMerchantRelationships = $priceProductMerchantRelationships;
        $this->collPriceProductMerchantRelationshipsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyPriceProductMerchantRelationship objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyPriceProductMerchantRelationship objects.
     * @throws PropelException
     */
    public function countPriceProductMerchantRelationships(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collPriceProductMerchantRelationshipsPartial && !$this->isNew();
        if (null === $this->collPriceProductMerchantRelationships || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPriceProductMerchantRelationships) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPriceProductMerchantRelationships());
            }

            $query = SpyPriceProductMerchantRelationshipQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByProduct($this)
                ->count($con);
        }

        return count($this->collPriceProductMerchantRelationships);
    }

    /**
     * Method called to associate a SpyPriceProductMerchantRelationship object to this object
     * through the SpyPriceProductMerchantRelationship foreign key attribute.
     *
     * @param  SpyPriceProductMerchantRelationship $l SpyPriceProductMerchantRelationship
     * @return $this|\Orm\Zed\Product\Persistence\SpyProduct The current object (for fluent API support)
     */
    public function addPriceProductMerchantRelationship(SpyPriceProductMerchantRelationship $l)
    {
        if ($this->collPriceProductMerchantRelationships === null) {
            $this->initPriceProductMerchantRelationships();
            $this->collPriceProductMerchantRelationshipsPartial = true;
        }

        if (!$this->collPriceProductMerchantRelationships->contains($l)) {
            $this->doAddPriceProductMerchantRelationship($l);

            if ($this->priceProductMerchantRelationshipsScheduledForDeletion and $this->priceProductMerchantRelationshipsScheduledForDeletion->contains($l)) {
                $this->priceProductMerchantRelationshipsScheduledForDeletion->remove($this->priceProductMerchantRelationshipsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyPriceProductMerchantRelationship $priceProductMerchantRelationship The SpyPriceProductMerchantRelationship object to add.
     */
    protected function doAddPriceProductMerchantRelationship(SpyPriceProductMerchantRelationship $priceProductMerchantRelationship)
    {
        $this->collPriceProductMerchantRelationships[]= $priceProductMerchantRelationship;
        $priceProductMerchantRelationship->setProduct($this);
    }

    /**
     * @param  SpyPriceProductMerchantRelationship $priceProductMerchantRelationship The SpyPriceProductMerchantRelationship object to remove.
     * @return $this|ChildSpyProduct The current object (for fluent API support)
     */
    public function removePriceProductMerchantRelationship(SpyPriceProductMerchantRelationship $priceProductMerchantRelationship)
    {
        if ($this->getPriceProductMerchantRelationships()->contains($priceProductMerchantRelationship)) {
            $pos = $this->collPriceProductMerchantRelationships->search($priceProductMerchantRelationship);
            $this->collPriceProductMerchantRelationships->remove($pos);
            if (null === $this->priceProductMerchantRelationshipsScheduledForDeletion) {
                $this->priceProductMerchantRelationshipsScheduledForDeletion = clone $this->collPriceProductMerchantRelationships;
                $this->priceProductMerchantRelationshipsScheduledForDeletion->clear();
            }
            $this->priceProductMerchantRelationshipsScheduledForDeletion[]= $priceProductMerchantRelationship;
            $priceProductMerchantRelationship->setProduct(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyProduct is new, it will return
     * an empty collection; or if this SpyProduct has previously
     * been saved, it will retrieve related PriceProductMerchantRelationships from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyProduct.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyPriceProductMerchantRelationship[] List of SpyPriceProductMerchantRelationship objects
     * @phpstan-return ObjectCollection&\Traversable<SpyPriceProductMerchantRelationship}> List of SpyPriceProductMerchantRelationship objects
     */
    public function getPriceProductMerchantRelationshipsJoinPriceProductStore(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyPriceProductMerchantRelationshipQuery::create(null, $criteria);
        $query->joinWith('PriceProductStore', $joinBehavior);

        return $this->getPriceProductMerchantRelationships($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyProduct is new, it will return
     * an empty collection; or if this SpyProduct has previously
     * been saved, it will retrieve related PriceProductMerchantRelationships from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyProduct.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyPriceProductMerchantRelationship[] List of SpyPriceProductMerchantRelationship objects
     * @phpstan-return ObjectCollection&\Traversable<SpyPriceProductMerchantRelationship}> List of SpyPriceProductMerchantRelationship objects
     */
    public function getPriceProductMerchantRelationshipsJoinMerchantRelationship(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyPriceProductMerchantRelationshipQuery::create(null, $criteria);
        $query->joinWith('MerchantRelationship', $joinBehavior);

        return $this->getPriceProductMerchantRelationships($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyProduct is new, it will return
     * an empty collection; or if this SpyProduct has previously
     * been saved, it will retrieve related PriceProductMerchantRelationships from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyProduct.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyPriceProductMerchantRelationship[] List of SpyPriceProductMerchantRelationship objects
     * @phpstan-return ObjectCollection&\Traversable<SpyPriceProductMerchantRelationship}> List of SpyPriceProductMerchantRelationship objects
     */
    public function getPriceProductMerchantRelationshipsJoinProductAbstract(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyPriceProductMerchantRelationshipQuery::create(null, $criteria);
        $query->joinWith('ProductAbstract', $joinBehavior);

        return $this->getPriceProductMerchantRelationships($query, $con);
    }

    /**
     * Clears out the collPriceProductSchedules collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addPriceProductSchedules()
     */
    public function clearPriceProductSchedules()
    {
        $this->collPriceProductSchedules = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collPriceProductSchedules collection loaded partially.
     */
    public function resetPartialPriceProductSchedules($v = true)
    {
        $this->collPriceProductSchedulesPartial = $v;
    }

    /**
     * Initializes the collPriceProductSchedules collection.
     *
     * By default this just sets the collPriceProductSchedules collection to an empty array (like clearcollPriceProductSchedules());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPriceProductSchedules($overrideExisting = true)
    {
        if (null !== $this->collPriceProductSchedules && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyPriceProductScheduleTableMap::getTableMap()->getCollectionClassName();

        $this->collPriceProductSchedules = new $collectionClassName;
        $this->collPriceProductSchedules->setModel('\Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductSchedule');
    }

    /**
     * Gets an array of SpyPriceProductSchedule objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyProduct is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyPriceProductSchedule[] List of SpyPriceProductSchedule objects
     * @phpstan-return ObjectCollection&\Traversable<SpyPriceProductSchedule> List of SpyPriceProductSchedule objects
     * @throws PropelException
     */
    public function getPriceProductSchedules(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collPriceProductSchedulesPartial && !$this->isNew();
        if (null === $this->collPriceProductSchedules || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collPriceProductSchedules) {
                    $this->initPriceProductSchedules();
                } else {
                    $collectionClassName = SpyPriceProductScheduleTableMap::getTableMap()->getCollectionClassName();

                    $collPriceProductSchedules = new $collectionClassName;
                    $collPriceProductSchedules->setModel('\Orm\Zed\PriceProductSchedule\Persistence\SpyPriceProductSchedule');

                    return $collPriceProductSchedules;
                }
            } else {
                $collPriceProductSchedules = SpyPriceProductScheduleQuery::create(null, $criteria)
                    ->filterByProduct($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collPriceProductSchedulesPartial && count($collPriceProductSchedules)) {
                        $this->initPriceProductSchedules(false);

                        foreach ($collPriceProductSchedules as $obj) {
                            if (false == $this->collPriceProductSchedules->contains($obj)) {
                                $this->collPriceProductSchedules->append($obj);
                            }
                        }

                        $this->collPriceProductSchedulesPartial = true;
                    }

                    return $collPriceProductSchedules;
                }

                if ($partial && $this->collPriceProductSchedules) {
                    foreach ($this->collPriceProductSchedules as $obj) {
                        if ($obj->isNew()) {
                            $collPriceProductSchedules[] = $obj;
                        }
                    }
                }

                $this->collPriceProductSchedules = $collPriceProductSchedules;
                $this->collPriceProductSchedulesPartial = false;
            }
        }

        return $this->collPriceProductSchedules;
    }

    /**
     * Sets a collection of SpyPriceProductSchedule objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $priceProductSchedules A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyProduct The current object (for fluent API support)
     */
    public function setPriceProductSchedules(Collection $priceProductSchedules, ConnectionInterface $con = null)
    {
        /** @var SpyPriceProductSchedule[] $priceProductSchedulesToDelete */
        $priceProductSchedulesToDelete = $this->getPriceProductSchedules(new Criteria(), $con)->diff($priceProductSchedules);


        $this->priceProductSchedulesScheduledForDeletion = $priceProductSchedulesToDelete;

        foreach ($priceProductSchedulesToDelete as $priceProductScheduleRemoved) {
            $priceProductScheduleRemoved->setProduct(null);
        }

        $this->collPriceProductSchedules = null;
        foreach ($priceProductSchedules as $priceProductSchedule) {
            $this->addPriceProductSchedule($priceProductSchedule);
        }

        $this->collPriceProductSchedules = $priceProductSchedules;
        $this->collPriceProductSchedulesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyPriceProductSchedule objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyPriceProductSchedule objects.
     * @throws PropelException
     */
    public function countPriceProductSchedules(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collPriceProductSchedulesPartial && !$this->isNew();
        if (null === $this->collPriceProductSchedules || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPriceProductSchedules) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPriceProductSchedules());
            }

            $query = SpyPriceProductScheduleQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByProduct($this)
                ->count($con);
        }

        return count($this->collPriceProductSchedules);
    }

    /**
     * Method called to associate a SpyPriceProductSchedule object to this object
     * through the SpyPriceProductSchedule foreign key attribute.
     *
     * @param  SpyPriceProductSchedule $l SpyPriceProductSchedule
     * @return $this|\Orm\Zed\Product\Persistence\SpyProduct The current object (for fluent API support)
     */
    public function addPriceProductSchedule(SpyPriceProductSchedule $l)
    {
        if ($this->collPriceProductSchedules === null) {
            $this->initPriceProductSchedules();
            $this->collPriceProductSchedulesPartial = true;
        }

        if (!$this->collPriceProductSchedules->contains($l)) {
            $this->doAddPriceProductSchedule($l);

            if ($this->priceProductSchedulesScheduledForDeletion and $this->priceProductSchedulesScheduledForDeletion->contains($l)) {
                $this->priceProductSchedulesScheduledForDeletion->remove($this->priceProductSchedulesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyPriceProductSchedule $priceProductSchedule The SpyPriceProductSchedule object to add.
     */
    protected function doAddPriceProductSchedule(SpyPriceProductSchedule $priceProductSchedule)
    {
        $this->collPriceProductSchedules[]= $priceProductSchedule;
        $priceProductSchedule->setProduct($this);
    }

    /**
     * @param  SpyPriceProductSchedule $priceProductSchedule The SpyPriceProductSchedule object to remove.
     * @return $this|ChildSpyProduct The current object (for fluent API support)
     */
    public function removePriceProductSchedule(SpyPriceProductSchedule $priceProductSchedule)
    {
        if ($this->getPriceProductSchedules()->contains($priceProductSchedule)) {
            $pos = $this->collPriceProductSchedules->search($priceProductSchedule);
            $this->collPriceProductSchedules->remove($pos);
            if (null === $this->priceProductSchedulesScheduledForDeletion) {
                $this->priceProductSchedulesScheduledForDeletion = clone $this->collPriceProductSchedules;
                $this->priceProductSchedulesScheduledForDeletion->clear();
            }
            $this->priceProductSchedulesScheduledForDeletion[]= $priceProductSchedule;
            $priceProductSchedule->setProduct(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyProduct is new, it will return
     * an empty collection; or if this SpyProduct has previously
     * been saved, it will retrieve related PriceProductSchedules from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyProduct.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyPriceProductSchedule[] List of SpyPriceProductSchedule objects
     * @phpstan-return ObjectCollection&\Traversable<SpyPriceProductSchedule}> List of SpyPriceProductSchedule objects
     */
    public function getPriceProductSchedulesJoinProductAbstract(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyPriceProductScheduleQuery::create(null, $criteria);
        $query->joinWith('ProductAbstract', $joinBehavior);

        return $this->getPriceProductSchedules($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyProduct is new, it will return
     * an empty collection; or if this SpyProduct has previously
     * been saved, it will retrieve related PriceProductSchedules from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyProduct.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyPriceProductSchedule[] List of SpyPriceProductSchedule objects
     * @phpstan-return ObjectCollection&\Traversable<SpyPriceProductSchedule}> List of SpyPriceProductSchedule objects
     */
    public function getPriceProductSchedulesJoinCurrency(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyPriceProductScheduleQuery::create(null, $criteria);
        $query->joinWith('Currency', $joinBehavior);

        return $this->getPriceProductSchedules($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyProduct is new, it will return
     * an empty collection; or if this SpyProduct has previously
     * been saved, it will retrieve related PriceProductSchedules from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyProduct.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyPriceProductSchedule[] List of SpyPriceProductSchedule objects
     * @phpstan-return ObjectCollection&\Traversable<SpyPriceProductSchedule}> List of SpyPriceProductSchedule objects
     */
    public function getPriceProductSchedulesJoinStore(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyPriceProductScheduleQuery::create(null, $criteria);
        $query->joinWith('Store', $joinBehavior);

        return $this->getPriceProductSchedules($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyProduct is new, it will return
     * an empty collection; or if this SpyProduct has previously
     * been saved, it will retrieve related PriceProductSchedules from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyProduct.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyPriceProductSchedule[] List of SpyPriceProductSchedule objects
     * @phpstan-return ObjectCollection&\Traversable<SpyPriceProductSchedule}> List of SpyPriceProductSchedule objects
     */
    public function getPriceProductSchedulesJoinPriceType(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyPriceProductScheduleQuery::create(null, $criteria);
        $query->joinWith('PriceType', $joinBehavior);

        return $this->getPriceProductSchedules($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyProduct is new, it will return
     * an empty collection; or if this SpyProduct has previously
     * been saved, it will retrieve related PriceProductSchedules from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyProduct.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyPriceProductSchedule[] List of SpyPriceProductSchedule objects
     * @phpstan-return ObjectCollection&\Traversable<SpyPriceProductSchedule}> List of SpyPriceProductSchedule objects
     */
    public function getPriceProductSchedulesJoinPriceProductScheduleList(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyPriceProductScheduleQuery::create(null, $criteria);
        $query->joinWith('PriceProductScheduleList', $joinBehavior);

        return $this->getPriceProductSchedules($query, $con);
    }

    /**
     * Clears out the collSpyProductLocalizedAttributess collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyProductLocalizedAttributess()
     */
    public function clearSpyProductLocalizedAttributess()
    {
        $this->collSpyProductLocalizedAttributess = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyProductLocalizedAttributess collection loaded partially.
     */
    public function resetPartialSpyProductLocalizedAttributess($v = true)
    {
        $this->collSpyProductLocalizedAttributessPartial = $v;
    }

    /**
     * Initializes the collSpyProductLocalizedAttributess collection.
     *
     * By default this just sets the collSpyProductLocalizedAttributess collection to an empty array (like clearcollSpyProductLocalizedAttributess());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyProductLocalizedAttributess($overrideExisting = true)
    {
        if (null !== $this->collSpyProductLocalizedAttributess && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyProductLocalizedAttributesTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyProductLocalizedAttributess = new $collectionClassName;
        $this->collSpyProductLocalizedAttributess->setModel('\Orm\Zed\Product\Persistence\SpyProductLocalizedAttributes');
    }

    /**
     * Gets an array of ChildSpyProductLocalizedAttributes objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyProduct is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSpyProductLocalizedAttributes[] List of ChildSpyProductLocalizedAttributes objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyProductLocalizedAttributes> List of ChildSpyProductLocalizedAttributes objects
     * @throws PropelException
     */
    public function getSpyProductLocalizedAttributess(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyProductLocalizedAttributessPartial && !$this->isNew();
        if (null === $this->collSpyProductLocalizedAttributess || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyProductLocalizedAttributess) {
                    $this->initSpyProductLocalizedAttributess();
                } else {
                    $collectionClassName = SpyProductLocalizedAttributesTableMap::getTableMap()->getCollectionClassName();

                    $collSpyProductLocalizedAttributess = new $collectionClassName;
                    $collSpyProductLocalizedAttributess->setModel('\Orm\Zed\Product\Persistence\SpyProductLocalizedAttributes');

                    return $collSpyProductLocalizedAttributess;
                }
            } else {
                $collSpyProductLocalizedAttributess = ChildSpyProductLocalizedAttributesQuery::create(null, $criteria)
                    ->filterBySpyProduct($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyProductLocalizedAttributessPartial && count($collSpyProductLocalizedAttributess)) {
                        $this->initSpyProductLocalizedAttributess(false);

                        foreach ($collSpyProductLocalizedAttributess as $obj) {
                            if (false == $this->collSpyProductLocalizedAttributess->contains($obj)) {
                                $this->collSpyProductLocalizedAttributess->append($obj);
                            }
                        }

                        $this->collSpyProductLocalizedAttributessPartial = true;
                    }

                    return $collSpyProductLocalizedAttributess;
                }

                if ($partial && $this->collSpyProductLocalizedAttributess) {
                    foreach ($this->collSpyProductLocalizedAttributess as $obj) {
                        if ($obj->isNew()) {
                            $collSpyProductLocalizedAttributess[] = $obj;
                        }
                    }
                }

                $this->collSpyProductLocalizedAttributess = $collSpyProductLocalizedAttributess;
                $this->collSpyProductLocalizedAttributessPartial = false;
            }
        }

        return $this->collSpyProductLocalizedAttributess;
    }

    /**
     * Sets a collection of ChildSpyProductLocalizedAttributes objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyProductLocalizedAttributess A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyProduct The current object (for fluent API support)
     */
    public function setSpyProductLocalizedAttributess(Collection $spyProductLocalizedAttributess, ConnectionInterface $con = null)
    {
        /** @var ChildSpyProductLocalizedAttributes[] $spyProductLocalizedAttributessToDelete */
        $spyProductLocalizedAttributessToDelete = $this->getSpyProductLocalizedAttributess(new Criteria(), $con)->diff($spyProductLocalizedAttributess);


        $this->spyProductLocalizedAttributessScheduledForDeletion = $spyProductLocalizedAttributessToDelete;

        foreach ($spyProductLocalizedAttributessToDelete as $spyProductLocalizedAttributesRemoved) {
            $spyProductLocalizedAttributesRemoved->setSpyProduct(null);
        }

        $this->collSpyProductLocalizedAttributess = null;
        foreach ($spyProductLocalizedAttributess as $spyProductLocalizedAttributes) {
            $this->addSpyProductLocalizedAttributes($spyProductLocalizedAttributes);
        }

        $this->collSpyProductLocalizedAttributess = $spyProductLocalizedAttributess;
        $this->collSpyProductLocalizedAttributessPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SpyProductLocalizedAttributes objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related SpyProductLocalizedAttributes objects.
     * @throws PropelException
     */
    public function countSpyProductLocalizedAttributess(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyProductLocalizedAttributessPartial && !$this->isNew();
        if (null === $this->collSpyProductLocalizedAttributess || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyProductLocalizedAttributess) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyProductLocalizedAttributess());
            }

            $query = ChildSpyProductLocalizedAttributesQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySpyProduct($this)
                ->count($con);
        }

        return count($this->collSpyProductLocalizedAttributess);
    }

    /**
     * Method called to associate a ChildSpyProductLocalizedAttributes object to this object
     * through the ChildSpyProductLocalizedAttributes foreign key attribute.
     *
     * @param  ChildSpyProductLocalizedAttributes $l ChildSpyProductLocalizedAttributes
     * @return $this|\Orm\Zed\Product\Persistence\SpyProduct The current object (for fluent API support)
     */
    public function addSpyProductLocalizedAttributes(ChildSpyProductLocalizedAttributes $l)
    {
        if ($this->collSpyProductLocalizedAttributess === null) {
            $this->initSpyProductLocalizedAttributess();
            $this->collSpyProductLocalizedAttributessPartial = true;
        }

        if (!$this->collSpyProductLocalizedAttributess->contains($l)) {
            $this->doAddSpyProductLocalizedAttributes($l);

            if ($this->spyProductLocalizedAttributessScheduledForDeletion and $this->spyProductLocalizedAttributessScheduledForDeletion->contains($l)) {
                $this->spyProductLocalizedAttributessScheduledForDeletion->remove($this->spyProductLocalizedAttributessScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSpyProductLocalizedAttributes $spyProductLocalizedAttributes The ChildSpyProductLocalizedAttributes object to add.
     */
    protected function doAddSpyProductLocalizedAttributes(ChildSpyProductLocalizedAttributes $spyProductLocalizedAttributes)
    {
        $this->collSpyProductLocalizedAttributess[]= $spyProductLocalizedAttributes;
        $spyProductLocalizedAttributes->setSpyProduct($this);
    }

    /**
     * @param  ChildSpyProductLocalizedAttributes $spyProductLocalizedAttributes The ChildSpyProductLocalizedAttributes object to remove.
     * @return $this|ChildSpyProduct The current object (for fluent API support)
     */
    public function removeSpyProductLocalizedAttributes(ChildSpyProductLocalizedAttributes $spyProductLocalizedAttributes)
    {
        if ($this->getSpyProductLocalizedAttributess()->contains($spyProductLocalizedAttributes)) {
            $pos = $this->collSpyProductLocalizedAttributess->search($spyProductLocalizedAttributes);
            $this->collSpyProductLocalizedAttributess->remove($pos);
            if (null === $this->spyProductLocalizedAttributessScheduledForDeletion) {
                $this->spyProductLocalizedAttributessScheduledForDeletion = clone $this->collSpyProductLocalizedAttributess;
                $this->spyProductLocalizedAttributessScheduledForDeletion->clear();
            }
            $this->spyProductLocalizedAttributessScheduledForDeletion[]= clone $spyProductLocalizedAttributes;
            $spyProductLocalizedAttributes->setSpyProduct(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyProduct is new, it will return
     * an empty collection; or if this SpyProduct has previously
     * been saved, it will retrieve related SpyProductLocalizedAttributess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyProduct.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSpyProductLocalizedAttributes[] List of ChildSpyProductLocalizedAttributes objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyProductLocalizedAttributes}> List of ChildSpyProductLocalizedAttributes objects
     */
    public function getSpyProductLocalizedAttributessJoinLocale(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSpyProductLocalizedAttributesQuery::create(null, $criteria);
        $query->joinWith('Locale', $joinBehavior);

        return $this->getSpyProductLocalizedAttributess($query, $con);
    }

    /**
     * Clears out the collSpyProductAlternativesRelatedByFkProduct collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyProductAlternativesRelatedByFkProduct()
     */
    public function clearSpyProductAlternativesRelatedByFkProduct()
    {
        $this->collSpyProductAlternativesRelatedByFkProduct = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyProductAlternativesRelatedByFkProduct collection loaded partially.
     */
    public function resetPartialSpyProductAlternativesRelatedByFkProduct($v = true)
    {
        $this->collSpyProductAlternativesRelatedByFkProductPartial = $v;
    }

    /**
     * Initializes the collSpyProductAlternativesRelatedByFkProduct collection.
     *
     * By default this just sets the collSpyProductAlternativesRelatedByFkProduct collection to an empty array (like clearcollSpyProductAlternativesRelatedByFkProduct());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyProductAlternativesRelatedByFkProduct($overrideExisting = true)
    {
        if (null !== $this->collSpyProductAlternativesRelatedByFkProduct && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyProductAlternativeTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyProductAlternativesRelatedByFkProduct = new $collectionClassName;
        $this->collSpyProductAlternativesRelatedByFkProduct->setModel('\Orm\Zed\ProductAlternative\Persistence\SpyProductAlternative');
    }

    /**
     * Gets an array of SpyProductAlternative objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyProduct is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyProductAlternative[] List of SpyProductAlternative objects
     * @phpstan-return ObjectCollection&\Traversable<SpyProductAlternative> List of SpyProductAlternative objects
     * @throws PropelException
     */
    public function getSpyProductAlternativesRelatedByFkProduct(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyProductAlternativesRelatedByFkProductPartial && !$this->isNew();
        if (null === $this->collSpyProductAlternativesRelatedByFkProduct || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyProductAlternativesRelatedByFkProduct) {
                    $this->initSpyProductAlternativesRelatedByFkProduct();
                } else {
                    $collectionClassName = SpyProductAlternativeTableMap::getTableMap()->getCollectionClassName();

                    $collSpyProductAlternativesRelatedByFkProduct = new $collectionClassName;
                    $collSpyProductAlternativesRelatedByFkProduct->setModel('\Orm\Zed\ProductAlternative\Persistence\SpyProductAlternative');

                    return $collSpyProductAlternativesRelatedByFkProduct;
                }
            } else {
                $collSpyProductAlternativesRelatedByFkProduct = SpyProductAlternativeQuery::create(null, $criteria)
                    ->filterByProductConcrete($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyProductAlternativesRelatedByFkProductPartial && count($collSpyProductAlternativesRelatedByFkProduct)) {
                        $this->initSpyProductAlternativesRelatedByFkProduct(false);

                        foreach ($collSpyProductAlternativesRelatedByFkProduct as $obj) {
                            if (false == $this->collSpyProductAlternativesRelatedByFkProduct->contains($obj)) {
                                $this->collSpyProductAlternativesRelatedByFkProduct->append($obj);
                            }
                        }

                        $this->collSpyProductAlternativesRelatedByFkProductPartial = true;
                    }

                    return $collSpyProductAlternativesRelatedByFkProduct;
                }

                if ($partial && $this->collSpyProductAlternativesRelatedByFkProduct) {
                    foreach ($this->collSpyProductAlternativesRelatedByFkProduct as $obj) {
                        if ($obj->isNew()) {
                            $collSpyProductAlternativesRelatedByFkProduct[] = $obj;
                        }
                    }
                }

                $this->collSpyProductAlternativesRelatedByFkProduct = $collSpyProductAlternativesRelatedByFkProduct;
                $this->collSpyProductAlternativesRelatedByFkProductPartial = false;
            }
        }

        return $this->collSpyProductAlternativesRelatedByFkProduct;
    }

    /**
     * Sets a collection of SpyProductAlternative objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyProductAlternativesRelatedByFkProduct A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyProduct The current object (for fluent API support)
     */
    public function setSpyProductAlternativesRelatedByFkProduct(Collection $spyProductAlternativesRelatedByFkProduct, ConnectionInterface $con = null)
    {
        /** @var SpyProductAlternative[] $spyProductAlternativesRelatedByFkProductToDelete */
        $spyProductAlternativesRelatedByFkProductToDelete = $this->getSpyProductAlternativesRelatedByFkProduct(new Criteria(), $con)->diff($spyProductAlternativesRelatedByFkProduct);


        $this->spyProductAlternativesRelatedByFkProductScheduledForDeletion = $spyProductAlternativesRelatedByFkProductToDelete;

        foreach ($spyProductAlternativesRelatedByFkProductToDelete as $spyProductAlternativeRelatedByFkProductRemoved) {
            $spyProductAlternativeRelatedByFkProductRemoved->setProductConcrete(null);
        }

        $this->collSpyProductAlternativesRelatedByFkProduct = null;
        foreach ($spyProductAlternativesRelatedByFkProduct as $spyProductAlternativeRelatedByFkProduct) {
            $this->addSpyProductAlternativeRelatedByFkProduct($spyProductAlternativeRelatedByFkProduct);
        }

        $this->collSpyProductAlternativesRelatedByFkProduct = $spyProductAlternativesRelatedByFkProduct;
        $this->collSpyProductAlternativesRelatedByFkProductPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyProductAlternative objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyProductAlternative objects.
     * @throws PropelException
     */
    public function countSpyProductAlternativesRelatedByFkProduct(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyProductAlternativesRelatedByFkProductPartial && !$this->isNew();
        if (null === $this->collSpyProductAlternativesRelatedByFkProduct || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyProductAlternativesRelatedByFkProduct) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyProductAlternativesRelatedByFkProduct());
            }

            $query = SpyProductAlternativeQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByProductConcrete($this)
                ->count($con);
        }

        return count($this->collSpyProductAlternativesRelatedByFkProduct);
    }

    /**
     * Method called to associate a SpyProductAlternative object to this object
     * through the SpyProductAlternative foreign key attribute.
     *
     * @param  SpyProductAlternative $l SpyProductAlternative
     * @return $this|\Orm\Zed\Product\Persistence\SpyProduct The current object (for fluent API support)
     */
    public function addSpyProductAlternativeRelatedByFkProduct(SpyProductAlternative $l)
    {
        if ($this->collSpyProductAlternativesRelatedByFkProduct === null) {
            $this->initSpyProductAlternativesRelatedByFkProduct();
            $this->collSpyProductAlternativesRelatedByFkProductPartial = true;
        }

        if (!$this->collSpyProductAlternativesRelatedByFkProduct->contains($l)) {
            $this->doAddSpyProductAlternativeRelatedByFkProduct($l);

            if ($this->spyProductAlternativesRelatedByFkProductScheduledForDeletion and $this->spyProductAlternativesRelatedByFkProductScheduledForDeletion->contains($l)) {
                $this->spyProductAlternativesRelatedByFkProductScheduledForDeletion->remove($this->spyProductAlternativesRelatedByFkProductScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyProductAlternative $spyProductAlternativeRelatedByFkProduct The SpyProductAlternative object to add.
     */
    protected function doAddSpyProductAlternativeRelatedByFkProduct(SpyProductAlternative $spyProductAlternativeRelatedByFkProduct)
    {
        $this->collSpyProductAlternativesRelatedByFkProduct[]= $spyProductAlternativeRelatedByFkProduct;
        $spyProductAlternativeRelatedByFkProduct->setProductConcrete($this);
    }

    /**
     * @param  SpyProductAlternative $spyProductAlternativeRelatedByFkProduct The SpyProductAlternative object to remove.
     * @return $this|ChildSpyProduct The current object (for fluent API support)
     */
    public function removeSpyProductAlternativeRelatedByFkProduct(SpyProductAlternative $spyProductAlternativeRelatedByFkProduct)
    {
        if ($this->getSpyProductAlternativesRelatedByFkProduct()->contains($spyProductAlternativeRelatedByFkProduct)) {
            $pos = $this->collSpyProductAlternativesRelatedByFkProduct->search($spyProductAlternativeRelatedByFkProduct);
            $this->collSpyProductAlternativesRelatedByFkProduct->remove($pos);
            if (null === $this->spyProductAlternativesRelatedByFkProductScheduledForDeletion) {
                $this->spyProductAlternativesRelatedByFkProductScheduledForDeletion = clone $this->collSpyProductAlternativesRelatedByFkProduct;
                $this->spyProductAlternativesRelatedByFkProductScheduledForDeletion->clear();
            }
            $this->spyProductAlternativesRelatedByFkProductScheduledForDeletion[]= clone $spyProductAlternativeRelatedByFkProduct;
            $spyProductAlternativeRelatedByFkProduct->setProductConcrete(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyProduct is new, it will return
     * an empty collection; or if this SpyProduct has previously
     * been saved, it will retrieve related SpyProductAlternativesRelatedByFkProduct from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyProduct.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyProductAlternative[] List of SpyProductAlternative objects
     * @phpstan-return ObjectCollection&\Traversable<SpyProductAlternative}> List of SpyProductAlternative objects
     */
    public function getSpyProductAlternativesRelatedByFkProductJoinProductAbstractAlternative(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyProductAlternativeQuery::create(null, $criteria);
        $query->joinWith('ProductAbstractAlternative', $joinBehavior);

        return $this->getSpyProductAlternativesRelatedByFkProduct($query, $con);
    }

    /**
     * Clears out the collSpyProductAlternativesRelatedByFkProductConcreteAlternative collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyProductAlternativesRelatedByFkProductConcreteAlternative()
     */
    public function clearSpyProductAlternativesRelatedByFkProductConcreteAlternative()
    {
        $this->collSpyProductAlternativesRelatedByFkProductConcreteAlternative = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyProductAlternativesRelatedByFkProductConcreteAlternative collection loaded partially.
     */
    public function resetPartialSpyProductAlternativesRelatedByFkProductConcreteAlternative($v = true)
    {
        $this->collSpyProductAlternativesRelatedByFkProductConcreteAlternativePartial = $v;
    }

    /**
     * Initializes the collSpyProductAlternativesRelatedByFkProductConcreteAlternative collection.
     *
     * By default this just sets the collSpyProductAlternativesRelatedByFkProductConcreteAlternative collection to an empty array (like clearcollSpyProductAlternativesRelatedByFkProductConcreteAlternative());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyProductAlternativesRelatedByFkProductConcreteAlternative($overrideExisting = true)
    {
        if (null !== $this->collSpyProductAlternativesRelatedByFkProductConcreteAlternative && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyProductAlternativeTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyProductAlternativesRelatedByFkProductConcreteAlternative = new $collectionClassName;
        $this->collSpyProductAlternativesRelatedByFkProductConcreteAlternative->setModel('\Orm\Zed\ProductAlternative\Persistence\SpyProductAlternative');
    }

    /**
     * Gets an array of SpyProductAlternative objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyProduct is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyProductAlternative[] List of SpyProductAlternative objects
     * @phpstan-return ObjectCollection&\Traversable<SpyProductAlternative> List of SpyProductAlternative objects
     * @throws PropelException
     */
    public function getSpyProductAlternativesRelatedByFkProductConcreteAlternative(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyProductAlternativesRelatedByFkProductConcreteAlternativePartial && !$this->isNew();
        if (null === $this->collSpyProductAlternativesRelatedByFkProductConcreteAlternative || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyProductAlternativesRelatedByFkProductConcreteAlternative) {
                    $this->initSpyProductAlternativesRelatedByFkProductConcreteAlternative();
                } else {
                    $collectionClassName = SpyProductAlternativeTableMap::getTableMap()->getCollectionClassName();

                    $collSpyProductAlternativesRelatedByFkProductConcreteAlternative = new $collectionClassName;
                    $collSpyProductAlternativesRelatedByFkProductConcreteAlternative->setModel('\Orm\Zed\ProductAlternative\Persistence\SpyProductAlternative');

                    return $collSpyProductAlternativesRelatedByFkProductConcreteAlternative;
                }
            } else {
                $collSpyProductAlternativesRelatedByFkProductConcreteAlternative = SpyProductAlternativeQuery::create(null, $criteria)
                    ->filterByProductConcreteAlternative($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyProductAlternativesRelatedByFkProductConcreteAlternativePartial && count($collSpyProductAlternativesRelatedByFkProductConcreteAlternative)) {
                        $this->initSpyProductAlternativesRelatedByFkProductConcreteAlternative(false);

                        foreach ($collSpyProductAlternativesRelatedByFkProductConcreteAlternative as $obj) {
                            if (false == $this->collSpyProductAlternativesRelatedByFkProductConcreteAlternative->contains($obj)) {
                                $this->collSpyProductAlternativesRelatedByFkProductConcreteAlternative->append($obj);
                            }
                        }

                        $this->collSpyProductAlternativesRelatedByFkProductConcreteAlternativePartial = true;
                    }

                    return $collSpyProductAlternativesRelatedByFkProductConcreteAlternative;
                }

                if ($partial && $this->collSpyProductAlternativesRelatedByFkProductConcreteAlternative) {
                    foreach ($this->collSpyProductAlternativesRelatedByFkProductConcreteAlternative as $obj) {
                        if ($obj->isNew()) {
                            $collSpyProductAlternativesRelatedByFkProductConcreteAlternative[] = $obj;
                        }
                    }
                }

                $this->collSpyProductAlternativesRelatedByFkProductConcreteAlternative = $collSpyProductAlternativesRelatedByFkProductConcreteAlternative;
                $this->collSpyProductAlternativesRelatedByFkProductConcreteAlternativePartial = false;
            }
        }

        return $this->collSpyProductAlternativesRelatedByFkProductConcreteAlternative;
    }

    /**
     * Sets a collection of SpyProductAlternative objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyProductAlternativesRelatedByFkProductConcreteAlternative A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyProduct The current object (for fluent API support)
     */
    public function setSpyProductAlternativesRelatedByFkProductConcreteAlternative(Collection $spyProductAlternativesRelatedByFkProductConcreteAlternative, ConnectionInterface $con = null)
    {
        /** @var SpyProductAlternative[] $spyProductAlternativesRelatedByFkProductConcreteAlternativeToDelete */
        $spyProductAlternativesRelatedByFkProductConcreteAlternativeToDelete = $this->getSpyProductAlternativesRelatedByFkProductConcreteAlternative(new Criteria(), $con)->diff($spyProductAlternativesRelatedByFkProductConcreteAlternative);


        $this->spyProductAlternativesRelatedByFkProductConcreteAlternativeScheduledForDeletion = $spyProductAlternativesRelatedByFkProductConcreteAlternativeToDelete;

        foreach ($spyProductAlternativesRelatedByFkProductConcreteAlternativeToDelete as $spyProductAlternativeRelatedByFkProductConcreteAlternativeRemoved) {
            $spyProductAlternativeRelatedByFkProductConcreteAlternativeRemoved->setProductConcreteAlternative(null);
        }

        $this->collSpyProductAlternativesRelatedByFkProductConcreteAlternative = null;
        foreach ($spyProductAlternativesRelatedByFkProductConcreteAlternative as $spyProductAlternativeRelatedByFkProductConcreteAlternative) {
            $this->addSpyProductAlternativeRelatedByFkProductConcreteAlternative($spyProductAlternativeRelatedByFkProductConcreteAlternative);
        }

        $this->collSpyProductAlternativesRelatedByFkProductConcreteAlternative = $spyProductAlternativesRelatedByFkProductConcreteAlternative;
        $this->collSpyProductAlternativesRelatedByFkProductConcreteAlternativePartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyProductAlternative objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyProductAlternative objects.
     * @throws PropelException
     */
    public function countSpyProductAlternativesRelatedByFkProductConcreteAlternative(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyProductAlternativesRelatedByFkProductConcreteAlternativePartial && !$this->isNew();
        if (null === $this->collSpyProductAlternativesRelatedByFkProductConcreteAlternative || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyProductAlternativesRelatedByFkProductConcreteAlternative) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyProductAlternativesRelatedByFkProductConcreteAlternative());
            }

            $query = SpyProductAlternativeQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByProductConcreteAlternative($this)
                ->count($con);
        }

        return count($this->collSpyProductAlternativesRelatedByFkProductConcreteAlternative);
    }

    /**
     * Method called to associate a SpyProductAlternative object to this object
     * through the SpyProductAlternative foreign key attribute.
     *
     * @param  SpyProductAlternative $l SpyProductAlternative
     * @return $this|\Orm\Zed\Product\Persistence\SpyProduct The current object (for fluent API support)
     */
    public function addSpyProductAlternativeRelatedByFkProductConcreteAlternative(SpyProductAlternative $l)
    {
        if ($this->collSpyProductAlternativesRelatedByFkProductConcreteAlternative === null) {
            $this->initSpyProductAlternativesRelatedByFkProductConcreteAlternative();
            $this->collSpyProductAlternativesRelatedByFkProductConcreteAlternativePartial = true;
        }

        if (!$this->collSpyProductAlternativesRelatedByFkProductConcreteAlternative->contains($l)) {
            $this->doAddSpyProductAlternativeRelatedByFkProductConcreteAlternative($l);

            if ($this->spyProductAlternativesRelatedByFkProductConcreteAlternativeScheduledForDeletion and $this->spyProductAlternativesRelatedByFkProductConcreteAlternativeScheduledForDeletion->contains($l)) {
                $this->spyProductAlternativesRelatedByFkProductConcreteAlternativeScheduledForDeletion->remove($this->spyProductAlternativesRelatedByFkProductConcreteAlternativeScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyProductAlternative $spyProductAlternativeRelatedByFkProductConcreteAlternative The SpyProductAlternative object to add.
     */
    protected function doAddSpyProductAlternativeRelatedByFkProductConcreteAlternative(SpyProductAlternative $spyProductAlternativeRelatedByFkProductConcreteAlternative)
    {
        $this->collSpyProductAlternativesRelatedByFkProductConcreteAlternative[]= $spyProductAlternativeRelatedByFkProductConcreteAlternative;
        $spyProductAlternativeRelatedByFkProductConcreteAlternative->setProductConcreteAlternative($this);
    }

    /**
     * @param  SpyProductAlternative $spyProductAlternativeRelatedByFkProductConcreteAlternative The SpyProductAlternative object to remove.
     * @return $this|ChildSpyProduct The current object (for fluent API support)
     */
    public function removeSpyProductAlternativeRelatedByFkProductConcreteAlternative(SpyProductAlternative $spyProductAlternativeRelatedByFkProductConcreteAlternative)
    {
        if ($this->getSpyProductAlternativesRelatedByFkProductConcreteAlternative()->contains($spyProductAlternativeRelatedByFkProductConcreteAlternative)) {
            $pos = $this->collSpyProductAlternativesRelatedByFkProductConcreteAlternative->search($spyProductAlternativeRelatedByFkProductConcreteAlternative);
            $this->collSpyProductAlternativesRelatedByFkProductConcreteAlternative->remove($pos);
            if (null === $this->spyProductAlternativesRelatedByFkProductConcreteAlternativeScheduledForDeletion) {
                $this->spyProductAlternativesRelatedByFkProductConcreteAlternativeScheduledForDeletion = clone $this->collSpyProductAlternativesRelatedByFkProductConcreteAlternative;
                $this->spyProductAlternativesRelatedByFkProductConcreteAlternativeScheduledForDeletion->clear();
            }
            $this->spyProductAlternativesRelatedByFkProductConcreteAlternativeScheduledForDeletion[]= $spyProductAlternativeRelatedByFkProductConcreteAlternative;
            $spyProductAlternativeRelatedByFkProductConcreteAlternative->setProductConcreteAlternative(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyProduct is new, it will return
     * an empty collection; or if this SpyProduct has previously
     * been saved, it will retrieve related SpyProductAlternativesRelatedByFkProductConcreteAlternative from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyProduct.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyProductAlternative[] List of SpyProductAlternative objects
     * @phpstan-return ObjectCollection&\Traversable<SpyProductAlternative}> List of SpyProductAlternative objects
     */
    public function getSpyProductAlternativesRelatedByFkProductConcreteAlternativeJoinProductAbstractAlternative(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyProductAlternativeQuery::create(null, $criteria);
        $query->joinWith('ProductAbstractAlternative', $joinBehavior);

        return $this->getSpyProductAlternativesRelatedByFkProductConcreteAlternative($query, $con);
    }

    /**
     * Clears out the collSpyProductBundlesRelatedByFkBundledProduct collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyProductBundlesRelatedByFkBundledProduct()
     */
    public function clearSpyProductBundlesRelatedByFkBundledProduct()
    {
        $this->collSpyProductBundlesRelatedByFkBundledProduct = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyProductBundlesRelatedByFkBundledProduct collection loaded partially.
     */
    public function resetPartialSpyProductBundlesRelatedByFkBundledProduct($v = true)
    {
        $this->collSpyProductBundlesRelatedByFkBundledProductPartial = $v;
    }

    /**
     * Initializes the collSpyProductBundlesRelatedByFkBundledProduct collection.
     *
     * By default this just sets the collSpyProductBundlesRelatedByFkBundledProduct collection to an empty array (like clearcollSpyProductBundlesRelatedByFkBundledProduct());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyProductBundlesRelatedByFkBundledProduct($overrideExisting = true)
    {
        if (null !== $this->collSpyProductBundlesRelatedByFkBundledProduct && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyProductBundleTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyProductBundlesRelatedByFkBundledProduct = new $collectionClassName;
        $this->collSpyProductBundlesRelatedByFkBundledProduct->setModel('\Orm\Zed\ProductBundle\Persistence\SpyProductBundle');
    }

    /**
     * Gets an array of SpyProductBundle objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyProduct is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyProductBundle[] List of SpyProductBundle objects
     * @phpstan-return ObjectCollection&\Traversable<SpyProductBundle> List of SpyProductBundle objects
     * @throws PropelException
     */
    public function getSpyProductBundlesRelatedByFkBundledProduct(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyProductBundlesRelatedByFkBundledProductPartial && !$this->isNew();
        if (null === $this->collSpyProductBundlesRelatedByFkBundledProduct || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyProductBundlesRelatedByFkBundledProduct) {
                    $this->initSpyProductBundlesRelatedByFkBundledProduct();
                } else {
                    $collectionClassName = SpyProductBundleTableMap::getTableMap()->getCollectionClassName();

                    $collSpyProductBundlesRelatedByFkBundledProduct = new $collectionClassName;
                    $collSpyProductBundlesRelatedByFkBundledProduct->setModel('\Orm\Zed\ProductBundle\Persistence\SpyProductBundle');

                    return $collSpyProductBundlesRelatedByFkBundledProduct;
                }
            } else {
                $collSpyProductBundlesRelatedByFkBundledProduct = SpyProductBundleQuery::create(null, $criteria)
                    ->filterBySpyProductRelatedByFkBundledProduct($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyProductBundlesRelatedByFkBundledProductPartial && count($collSpyProductBundlesRelatedByFkBundledProduct)) {
                        $this->initSpyProductBundlesRelatedByFkBundledProduct(false);

                        foreach ($collSpyProductBundlesRelatedByFkBundledProduct as $obj) {
                            if (false == $this->collSpyProductBundlesRelatedByFkBundledProduct->contains($obj)) {
                                $this->collSpyProductBundlesRelatedByFkBundledProduct->append($obj);
                            }
                        }

                        $this->collSpyProductBundlesRelatedByFkBundledProductPartial = true;
                    }

                    return $collSpyProductBundlesRelatedByFkBundledProduct;
                }

                if ($partial && $this->collSpyProductBundlesRelatedByFkBundledProduct) {
                    foreach ($this->collSpyProductBundlesRelatedByFkBundledProduct as $obj) {
                        if ($obj->isNew()) {
                            $collSpyProductBundlesRelatedByFkBundledProduct[] = $obj;
                        }
                    }
                }

                $this->collSpyProductBundlesRelatedByFkBundledProduct = $collSpyProductBundlesRelatedByFkBundledProduct;
                $this->collSpyProductBundlesRelatedByFkBundledProductPartial = false;
            }
        }

        return $this->collSpyProductBundlesRelatedByFkBundledProduct;
    }

    /**
     * Sets a collection of SpyProductBundle objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyProductBundlesRelatedByFkBundledProduct A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyProduct The current object (for fluent API support)
     */
    public function setSpyProductBundlesRelatedByFkBundledProduct(Collection $spyProductBundlesRelatedByFkBundledProduct, ConnectionInterface $con = null)
    {
        /** @var SpyProductBundle[] $spyProductBundlesRelatedByFkBundledProductToDelete */
        $spyProductBundlesRelatedByFkBundledProductToDelete = $this->getSpyProductBundlesRelatedByFkBundledProduct(new Criteria(), $con)->diff($spyProductBundlesRelatedByFkBundledProduct);


        $this->spyProductBundlesRelatedByFkBundledProductScheduledForDeletion = $spyProductBundlesRelatedByFkBundledProductToDelete;

        foreach ($spyProductBundlesRelatedByFkBundledProductToDelete as $spyProductBundleRelatedByFkBundledProductRemoved) {
            $spyProductBundleRelatedByFkBundledProductRemoved->setSpyProductRelatedByFkBundledProduct(null);
        }

        $this->collSpyProductBundlesRelatedByFkBundledProduct = null;
        foreach ($spyProductBundlesRelatedByFkBundledProduct as $spyProductBundleRelatedByFkBundledProduct) {
            $this->addSpyProductBundleRelatedByFkBundledProduct($spyProductBundleRelatedByFkBundledProduct);
        }

        $this->collSpyProductBundlesRelatedByFkBundledProduct = $spyProductBundlesRelatedByFkBundledProduct;
        $this->collSpyProductBundlesRelatedByFkBundledProductPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyProductBundle objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyProductBundle objects.
     * @throws PropelException
     */
    public function countSpyProductBundlesRelatedByFkBundledProduct(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyProductBundlesRelatedByFkBundledProductPartial && !$this->isNew();
        if (null === $this->collSpyProductBundlesRelatedByFkBundledProduct || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyProductBundlesRelatedByFkBundledProduct) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyProductBundlesRelatedByFkBundledProduct());
            }

            $query = SpyProductBundleQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySpyProductRelatedByFkBundledProduct($this)
                ->count($con);
        }

        return count($this->collSpyProductBundlesRelatedByFkBundledProduct);
    }

    /**
     * Method called to associate a SpyProductBundle object to this object
     * through the SpyProductBundle foreign key attribute.
     *
     * @param  SpyProductBundle $l SpyProductBundle
     * @return $this|\Orm\Zed\Product\Persistence\SpyProduct The current object (for fluent API support)
     */
    public function addSpyProductBundleRelatedByFkBundledProduct(SpyProductBundle $l)
    {
        if ($this->collSpyProductBundlesRelatedByFkBundledProduct === null) {
            $this->initSpyProductBundlesRelatedByFkBundledProduct();
            $this->collSpyProductBundlesRelatedByFkBundledProductPartial = true;
        }

        if (!$this->collSpyProductBundlesRelatedByFkBundledProduct->contains($l)) {
            $this->doAddSpyProductBundleRelatedByFkBundledProduct($l);

            if ($this->spyProductBundlesRelatedByFkBundledProductScheduledForDeletion and $this->spyProductBundlesRelatedByFkBundledProductScheduledForDeletion->contains($l)) {
                $this->spyProductBundlesRelatedByFkBundledProductScheduledForDeletion->remove($this->spyProductBundlesRelatedByFkBundledProductScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyProductBundle $spyProductBundleRelatedByFkBundledProduct The SpyProductBundle object to add.
     */
    protected function doAddSpyProductBundleRelatedByFkBundledProduct(SpyProductBundle $spyProductBundleRelatedByFkBundledProduct)
    {
        $this->collSpyProductBundlesRelatedByFkBundledProduct[]= $spyProductBundleRelatedByFkBundledProduct;
        $spyProductBundleRelatedByFkBundledProduct->setSpyProductRelatedByFkBundledProduct($this);
    }

    /**
     * @param  SpyProductBundle $spyProductBundleRelatedByFkBundledProduct The SpyProductBundle object to remove.
     * @return $this|ChildSpyProduct The current object (for fluent API support)
     */
    public function removeSpyProductBundleRelatedByFkBundledProduct(SpyProductBundle $spyProductBundleRelatedByFkBundledProduct)
    {
        if ($this->getSpyProductBundlesRelatedByFkBundledProduct()->contains($spyProductBundleRelatedByFkBundledProduct)) {
            $pos = $this->collSpyProductBundlesRelatedByFkBundledProduct->search($spyProductBundleRelatedByFkBundledProduct);
            $this->collSpyProductBundlesRelatedByFkBundledProduct->remove($pos);
            if (null === $this->spyProductBundlesRelatedByFkBundledProductScheduledForDeletion) {
                $this->spyProductBundlesRelatedByFkBundledProductScheduledForDeletion = clone $this->collSpyProductBundlesRelatedByFkBundledProduct;
                $this->spyProductBundlesRelatedByFkBundledProductScheduledForDeletion->clear();
            }
            $this->spyProductBundlesRelatedByFkBundledProductScheduledForDeletion[]= clone $spyProductBundleRelatedByFkBundledProduct;
            $spyProductBundleRelatedByFkBundledProduct->setSpyProductRelatedByFkBundledProduct(null);
        }

        return $this;
    }

    /**
     * Clears out the collSpyProductBundlesRelatedByFkProduct collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyProductBundlesRelatedByFkProduct()
     */
    public function clearSpyProductBundlesRelatedByFkProduct()
    {
        $this->collSpyProductBundlesRelatedByFkProduct = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyProductBundlesRelatedByFkProduct collection loaded partially.
     */
    public function resetPartialSpyProductBundlesRelatedByFkProduct($v = true)
    {
        $this->collSpyProductBundlesRelatedByFkProductPartial = $v;
    }

    /**
     * Initializes the collSpyProductBundlesRelatedByFkProduct collection.
     *
     * By default this just sets the collSpyProductBundlesRelatedByFkProduct collection to an empty array (like clearcollSpyProductBundlesRelatedByFkProduct());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyProductBundlesRelatedByFkProduct($overrideExisting = true)
    {
        if (null !== $this->collSpyProductBundlesRelatedByFkProduct && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyProductBundleTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyProductBundlesRelatedByFkProduct = new $collectionClassName;
        $this->collSpyProductBundlesRelatedByFkProduct->setModel('\Orm\Zed\ProductBundle\Persistence\SpyProductBundle');
    }

    /**
     * Gets an array of SpyProductBundle objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyProduct is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyProductBundle[] List of SpyProductBundle objects
     * @phpstan-return ObjectCollection&\Traversable<SpyProductBundle> List of SpyProductBundle objects
     * @throws PropelException
     */
    public function getSpyProductBundlesRelatedByFkProduct(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyProductBundlesRelatedByFkProductPartial && !$this->isNew();
        if (null === $this->collSpyProductBundlesRelatedByFkProduct || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyProductBundlesRelatedByFkProduct) {
                    $this->initSpyProductBundlesRelatedByFkProduct();
                } else {
                    $collectionClassName = SpyProductBundleTableMap::getTableMap()->getCollectionClassName();

                    $collSpyProductBundlesRelatedByFkProduct = new $collectionClassName;
                    $collSpyProductBundlesRelatedByFkProduct->setModel('\Orm\Zed\ProductBundle\Persistence\SpyProductBundle');

                    return $collSpyProductBundlesRelatedByFkProduct;
                }
            } else {
                $collSpyProductBundlesRelatedByFkProduct = SpyProductBundleQuery::create(null, $criteria)
                    ->filterBySpyProductRelatedByFkProduct($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyProductBundlesRelatedByFkProductPartial && count($collSpyProductBundlesRelatedByFkProduct)) {
                        $this->initSpyProductBundlesRelatedByFkProduct(false);

                        foreach ($collSpyProductBundlesRelatedByFkProduct as $obj) {
                            if (false == $this->collSpyProductBundlesRelatedByFkProduct->contains($obj)) {
                                $this->collSpyProductBundlesRelatedByFkProduct->append($obj);
                            }
                        }

                        $this->collSpyProductBundlesRelatedByFkProductPartial = true;
                    }

                    return $collSpyProductBundlesRelatedByFkProduct;
                }

                if ($partial && $this->collSpyProductBundlesRelatedByFkProduct) {
                    foreach ($this->collSpyProductBundlesRelatedByFkProduct as $obj) {
                        if ($obj->isNew()) {
                            $collSpyProductBundlesRelatedByFkProduct[] = $obj;
                        }
                    }
                }

                $this->collSpyProductBundlesRelatedByFkProduct = $collSpyProductBundlesRelatedByFkProduct;
                $this->collSpyProductBundlesRelatedByFkProductPartial = false;
            }
        }

        return $this->collSpyProductBundlesRelatedByFkProduct;
    }

    /**
     * Sets a collection of SpyProductBundle objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyProductBundlesRelatedByFkProduct A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyProduct The current object (for fluent API support)
     */
    public function setSpyProductBundlesRelatedByFkProduct(Collection $spyProductBundlesRelatedByFkProduct, ConnectionInterface $con = null)
    {
        /** @var SpyProductBundle[] $spyProductBundlesRelatedByFkProductToDelete */
        $spyProductBundlesRelatedByFkProductToDelete = $this->getSpyProductBundlesRelatedByFkProduct(new Criteria(), $con)->diff($spyProductBundlesRelatedByFkProduct);


        $this->spyProductBundlesRelatedByFkProductScheduledForDeletion = $spyProductBundlesRelatedByFkProductToDelete;

        foreach ($spyProductBundlesRelatedByFkProductToDelete as $spyProductBundleRelatedByFkProductRemoved) {
            $spyProductBundleRelatedByFkProductRemoved->setSpyProductRelatedByFkProduct(null);
        }

        $this->collSpyProductBundlesRelatedByFkProduct = null;
        foreach ($spyProductBundlesRelatedByFkProduct as $spyProductBundleRelatedByFkProduct) {
            $this->addSpyProductBundleRelatedByFkProduct($spyProductBundleRelatedByFkProduct);
        }

        $this->collSpyProductBundlesRelatedByFkProduct = $spyProductBundlesRelatedByFkProduct;
        $this->collSpyProductBundlesRelatedByFkProductPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyProductBundle objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyProductBundle objects.
     * @throws PropelException
     */
    public function countSpyProductBundlesRelatedByFkProduct(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyProductBundlesRelatedByFkProductPartial && !$this->isNew();
        if (null === $this->collSpyProductBundlesRelatedByFkProduct || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyProductBundlesRelatedByFkProduct) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyProductBundlesRelatedByFkProduct());
            }

            $query = SpyProductBundleQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySpyProductRelatedByFkProduct($this)
                ->count($con);
        }

        return count($this->collSpyProductBundlesRelatedByFkProduct);
    }

    /**
     * Method called to associate a SpyProductBundle object to this object
     * through the SpyProductBundle foreign key attribute.
     *
     * @param  SpyProductBundle $l SpyProductBundle
     * @return $this|\Orm\Zed\Product\Persistence\SpyProduct The current object (for fluent API support)
     */
    public function addSpyProductBundleRelatedByFkProduct(SpyProductBundle $l)
    {
        if ($this->collSpyProductBundlesRelatedByFkProduct === null) {
            $this->initSpyProductBundlesRelatedByFkProduct();
            $this->collSpyProductBundlesRelatedByFkProductPartial = true;
        }

        if (!$this->collSpyProductBundlesRelatedByFkProduct->contains($l)) {
            $this->doAddSpyProductBundleRelatedByFkProduct($l);

            if ($this->spyProductBundlesRelatedByFkProductScheduledForDeletion and $this->spyProductBundlesRelatedByFkProductScheduledForDeletion->contains($l)) {
                $this->spyProductBundlesRelatedByFkProductScheduledForDeletion->remove($this->spyProductBundlesRelatedByFkProductScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyProductBundle $spyProductBundleRelatedByFkProduct The SpyProductBundle object to add.
     */
    protected function doAddSpyProductBundleRelatedByFkProduct(SpyProductBundle $spyProductBundleRelatedByFkProduct)
    {
        $this->collSpyProductBundlesRelatedByFkProduct[]= $spyProductBundleRelatedByFkProduct;
        $spyProductBundleRelatedByFkProduct->setSpyProductRelatedByFkProduct($this);
    }

    /**
     * @param  SpyProductBundle $spyProductBundleRelatedByFkProduct The SpyProductBundle object to remove.
     * @return $this|ChildSpyProduct The current object (for fluent API support)
     */
    public function removeSpyProductBundleRelatedByFkProduct(SpyProductBundle $spyProductBundleRelatedByFkProduct)
    {
        if ($this->getSpyProductBundlesRelatedByFkProduct()->contains($spyProductBundleRelatedByFkProduct)) {
            $pos = $this->collSpyProductBundlesRelatedByFkProduct->search($spyProductBundleRelatedByFkProduct);
            $this->collSpyProductBundlesRelatedByFkProduct->remove($pos);
            if (null === $this->spyProductBundlesRelatedByFkProductScheduledForDeletion) {
                $this->spyProductBundlesRelatedByFkProductScheduledForDeletion = clone $this->collSpyProductBundlesRelatedByFkProduct;
                $this->spyProductBundlesRelatedByFkProductScheduledForDeletion->clear();
            }
            $this->spyProductBundlesRelatedByFkProductScheduledForDeletion[]= clone $spyProductBundleRelatedByFkProduct;
            $spyProductBundleRelatedByFkProduct->setSpyProductRelatedByFkProduct(null);
        }

        return $this;
    }

    /**
     * Clears out the collSpyProductDiscontinueds collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyProductDiscontinueds()
     */
    public function clearSpyProductDiscontinueds()
    {
        $this->collSpyProductDiscontinueds = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyProductDiscontinueds collection loaded partially.
     */
    public function resetPartialSpyProductDiscontinueds($v = true)
    {
        $this->collSpyProductDiscontinuedsPartial = $v;
    }

    /**
     * Initializes the collSpyProductDiscontinueds collection.
     *
     * By default this just sets the collSpyProductDiscontinueds collection to an empty array (like clearcollSpyProductDiscontinueds());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyProductDiscontinueds($overrideExisting = true)
    {
        if (null !== $this->collSpyProductDiscontinueds && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyProductDiscontinuedTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyProductDiscontinueds = new $collectionClassName;
        $this->collSpyProductDiscontinueds->setModel('\Orm\Zed\ProductDiscontinued\Persistence\SpyProductDiscontinued');
    }

    /**
     * Gets an array of SpyProductDiscontinued objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyProduct is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyProductDiscontinued[] List of SpyProductDiscontinued objects
     * @phpstan-return ObjectCollection&\Traversable<SpyProductDiscontinued> List of SpyProductDiscontinued objects
     * @throws PropelException
     */
    public function getSpyProductDiscontinueds(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyProductDiscontinuedsPartial && !$this->isNew();
        if (null === $this->collSpyProductDiscontinueds || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyProductDiscontinueds) {
                    $this->initSpyProductDiscontinueds();
                } else {
                    $collectionClassName = SpyProductDiscontinuedTableMap::getTableMap()->getCollectionClassName();

                    $collSpyProductDiscontinueds = new $collectionClassName;
                    $collSpyProductDiscontinueds->setModel('\Orm\Zed\ProductDiscontinued\Persistence\SpyProductDiscontinued');

                    return $collSpyProductDiscontinueds;
                }
            } else {
                $collSpyProductDiscontinueds = SpyProductDiscontinuedQuery::create(null, $criteria)
                    ->filterByProduct($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyProductDiscontinuedsPartial && count($collSpyProductDiscontinueds)) {
                        $this->initSpyProductDiscontinueds(false);

                        foreach ($collSpyProductDiscontinueds as $obj) {
                            if (false == $this->collSpyProductDiscontinueds->contains($obj)) {
                                $this->collSpyProductDiscontinueds->append($obj);
                            }
                        }

                        $this->collSpyProductDiscontinuedsPartial = true;
                    }

                    return $collSpyProductDiscontinueds;
                }

                if ($partial && $this->collSpyProductDiscontinueds) {
                    foreach ($this->collSpyProductDiscontinueds as $obj) {
                        if ($obj->isNew()) {
                            $collSpyProductDiscontinueds[] = $obj;
                        }
                    }
                }

                $this->collSpyProductDiscontinueds = $collSpyProductDiscontinueds;
                $this->collSpyProductDiscontinuedsPartial = false;
            }
        }

        return $this->collSpyProductDiscontinueds;
    }

    /**
     * Sets a collection of SpyProductDiscontinued objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyProductDiscontinueds A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyProduct The current object (for fluent API support)
     */
    public function setSpyProductDiscontinueds(Collection $spyProductDiscontinueds, ConnectionInterface $con = null)
    {
        /** @var SpyProductDiscontinued[] $spyProductDiscontinuedsToDelete */
        $spyProductDiscontinuedsToDelete = $this->getSpyProductDiscontinueds(new Criteria(), $con)->diff($spyProductDiscontinueds);


        $this->spyProductDiscontinuedsScheduledForDeletion = $spyProductDiscontinuedsToDelete;

        foreach ($spyProductDiscontinuedsToDelete as $spyProductDiscontinuedRemoved) {
            $spyProductDiscontinuedRemoved->setProduct(null);
        }

        $this->collSpyProductDiscontinueds = null;
        foreach ($spyProductDiscontinueds as $spyProductDiscontinued) {
            $this->addSpyProductDiscontinued($spyProductDiscontinued);
        }

        $this->collSpyProductDiscontinueds = $spyProductDiscontinueds;
        $this->collSpyProductDiscontinuedsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyProductDiscontinued objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyProductDiscontinued objects.
     * @throws PropelException
     */
    public function countSpyProductDiscontinueds(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyProductDiscontinuedsPartial && !$this->isNew();
        if (null === $this->collSpyProductDiscontinueds || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyProductDiscontinueds) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyProductDiscontinueds());
            }

            $query = SpyProductDiscontinuedQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByProduct($this)
                ->count($con);
        }

        return count($this->collSpyProductDiscontinueds);
    }

    /**
     * Method called to associate a SpyProductDiscontinued object to this object
     * through the SpyProductDiscontinued foreign key attribute.
     *
     * @param  SpyProductDiscontinued $l SpyProductDiscontinued
     * @return $this|\Orm\Zed\Product\Persistence\SpyProduct The current object (for fluent API support)
     */
    public function addSpyProductDiscontinued(SpyProductDiscontinued $l)
    {
        if ($this->collSpyProductDiscontinueds === null) {
            $this->initSpyProductDiscontinueds();
            $this->collSpyProductDiscontinuedsPartial = true;
        }

        if (!$this->collSpyProductDiscontinueds->contains($l)) {
            $this->doAddSpyProductDiscontinued($l);

            if ($this->spyProductDiscontinuedsScheduledForDeletion and $this->spyProductDiscontinuedsScheduledForDeletion->contains($l)) {
                $this->spyProductDiscontinuedsScheduledForDeletion->remove($this->spyProductDiscontinuedsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyProductDiscontinued $spyProductDiscontinued The SpyProductDiscontinued object to add.
     */
    protected function doAddSpyProductDiscontinued(SpyProductDiscontinued $spyProductDiscontinued)
    {
        $this->collSpyProductDiscontinueds[]= $spyProductDiscontinued;
        $spyProductDiscontinued->setProduct($this);
    }

    /**
     * @param  SpyProductDiscontinued $spyProductDiscontinued The SpyProductDiscontinued object to remove.
     * @return $this|ChildSpyProduct The current object (for fluent API support)
     */
    public function removeSpyProductDiscontinued(SpyProductDiscontinued $spyProductDiscontinued)
    {
        if ($this->getSpyProductDiscontinueds()->contains($spyProductDiscontinued)) {
            $pos = $this->collSpyProductDiscontinueds->search($spyProductDiscontinued);
            $this->collSpyProductDiscontinueds->remove($pos);
            if (null === $this->spyProductDiscontinuedsScheduledForDeletion) {
                $this->spyProductDiscontinuedsScheduledForDeletion = clone $this->collSpyProductDiscontinueds;
                $this->spyProductDiscontinuedsScheduledForDeletion->clear();
            }
            $this->spyProductDiscontinuedsScheduledForDeletion[]= clone $spyProductDiscontinued;
            $spyProductDiscontinued->setProduct(null);
        }

        return $this;
    }

    /**
     * Clears out the collSpyProductImageSets collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyProductImageSets()
     */
    public function clearSpyProductImageSets()
    {
        $this->collSpyProductImageSets = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyProductImageSets collection loaded partially.
     */
    public function resetPartialSpyProductImageSets($v = true)
    {
        $this->collSpyProductImageSetsPartial = $v;
    }

    /**
     * Initializes the collSpyProductImageSets collection.
     *
     * By default this just sets the collSpyProductImageSets collection to an empty array (like clearcollSpyProductImageSets());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyProductImageSets($overrideExisting = true)
    {
        if (null !== $this->collSpyProductImageSets && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyProductImageSetTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyProductImageSets = new $collectionClassName;
        $this->collSpyProductImageSets->setModel('\Orm\Zed\ProductImage\Persistence\SpyProductImageSet');
    }

    /**
     * Gets an array of SpyProductImageSet objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyProduct is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyProductImageSet[] List of SpyProductImageSet objects
     * @phpstan-return ObjectCollection&\Traversable<SpyProductImageSet> List of SpyProductImageSet objects
     * @throws PropelException
     */
    public function getSpyProductImageSets(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyProductImageSetsPartial && !$this->isNew();
        if (null === $this->collSpyProductImageSets || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyProductImageSets) {
                    $this->initSpyProductImageSets();
                } else {
                    $collectionClassName = SpyProductImageSetTableMap::getTableMap()->getCollectionClassName();

                    $collSpyProductImageSets = new $collectionClassName;
                    $collSpyProductImageSets->setModel('\Orm\Zed\ProductImage\Persistence\SpyProductImageSet');

                    return $collSpyProductImageSets;
                }
            } else {
                $collSpyProductImageSets = SpyProductImageSetQuery::create(null, $criteria)
                    ->filterBySpyProduct($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyProductImageSetsPartial && count($collSpyProductImageSets)) {
                        $this->initSpyProductImageSets(false);

                        foreach ($collSpyProductImageSets as $obj) {
                            if (false == $this->collSpyProductImageSets->contains($obj)) {
                                $this->collSpyProductImageSets->append($obj);
                            }
                        }

                        $this->collSpyProductImageSetsPartial = true;
                    }

                    return $collSpyProductImageSets;
                }

                if ($partial && $this->collSpyProductImageSets) {
                    foreach ($this->collSpyProductImageSets as $obj) {
                        if ($obj->isNew()) {
                            $collSpyProductImageSets[] = $obj;
                        }
                    }
                }

                $this->collSpyProductImageSets = $collSpyProductImageSets;
                $this->collSpyProductImageSetsPartial = false;
            }
        }

        return $this->collSpyProductImageSets;
    }

    /**
     * Sets a collection of SpyProductImageSet objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyProductImageSets A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyProduct The current object (for fluent API support)
     */
    public function setSpyProductImageSets(Collection $spyProductImageSets, ConnectionInterface $con = null)
    {
        /** @var SpyProductImageSet[] $spyProductImageSetsToDelete */
        $spyProductImageSetsToDelete = $this->getSpyProductImageSets(new Criteria(), $con)->diff($spyProductImageSets);


        $this->spyProductImageSetsScheduledForDeletion = $spyProductImageSetsToDelete;

        foreach ($spyProductImageSetsToDelete as $spyProductImageSetRemoved) {
            $spyProductImageSetRemoved->setSpyProduct(null);
        }

        $this->collSpyProductImageSets = null;
        foreach ($spyProductImageSets as $spyProductImageSet) {
            $this->addSpyProductImageSet($spyProductImageSet);
        }

        $this->collSpyProductImageSets = $spyProductImageSets;
        $this->collSpyProductImageSetsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyProductImageSet objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyProductImageSet objects.
     * @throws PropelException
     */
    public function countSpyProductImageSets(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyProductImageSetsPartial && !$this->isNew();
        if (null === $this->collSpyProductImageSets || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyProductImageSets) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyProductImageSets());
            }

            $query = SpyProductImageSetQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySpyProduct($this)
                ->count($con);
        }

        return count($this->collSpyProductImageSets);
    }

    /**
     * Method called to associate a SpyProductImageSet object to this object
     * through the SpyProductImageSet foreign key attribute.
     *
     * @param  SpyProductImageSet $l SpyProductImageSet
     * @return $this|\Orm\Zed\Product\Persistence\SpyProduct The current object (for fluent API support)
     */
    public function addSpyProductImageSet(SpyProductImageSet $l)
    {
        if ($this->collSpyProductImageSets === null) {
            $this->initSpyProductImageSets();
            $this->collSpyProductImageSetsPartial = true;
        }

        if (!$this->collSpyProductImageSets->contains($l)) {
            $this->doAddSpyProductImageSet($l);

            if ($this->spyProductImageSetsScheduledForDeletion and $this->spyProductImageSetsScheduledForDeletion->contains($l)) {
                $this->spyProductImageSetsScheduledForDeletion->remove($this->spyProductImageSetsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyProductImageSet $spyProductImageSet The SpyProductImageSet object to add.
     */
    protected function doAddSpyProductImageSet(SpyProductImageSet $spyProductImageSet)
    {
        $this->collSpyProductImageSets[]= $spyProductImageSet;
        $spyProductImageSet->setSpyProduct($this);
    }

    /**
     * @param  SpyProductImageSet $spyProductImageSet The SpyProductImageSet object to remove.
     * @return $this|ChildSpyProduct The current object (for fluent API support)
     */
    public function removeSpyProductImageSet(SpyProductImageSet $spyProductImageSet)
    {
        if ($this->getSpyProductImageSets()->contains($spyProductImageSet)) {
            $pos = $this->collSpyProductImageSets->search($spyProductImageSet);
            $this->collSpyProductImageSets->remove($pos);
            if (null === $this->spyProductImageSetsScheduledForDeletion) {
                $this->spyProductImageSetsScheduledForDeletion = clone $this->collSpyProductImageSets;
                $this->spyProductImageSetsScheduledForDeletion->clear();
            }
            $this->spyProductImageSetsScheduledForDeletion[]= $spyProductImageSet;
            $spyProductImageSet->setSpyProduct(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyProduct is new, it will return
     * an empty collection; or if this SpyProduct has previously
     * been saved, it will retrieve related SpyProductImageSets from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyProduct.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyProductImageSet[] List of SpyProductImageSet objects
     * @phpstan-return ObjectCollection&\Traversable<SpyProductImageSet}> List of SpyProductImageSet objects
     */
    public function getSpyProductImageSetsJoinSpyConfigurableBundleTemplate(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyProductImageSetQuery::create(null, $criteria);
        $query->joinWith('SpyConfigurableBundleTemplate', $joinBehavior);

        return $this->getSpyProductImageSets($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyProduct is new, it will return
     * an empty collection; or if this SpyProduct has previously
     * been saved, it will retrieve related SpyProductImageSets from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyProduct.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyProductImageSet[] List of SpyProductImageSet objects
     * @phpstan-return ObjectCollection&\Traversable<SpyProductImageSet}> List of SpyProductImageSet objects
     */
    public function getSpyProductImageSetsJoinSpyLocale(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyProductImageSetQuery::create(null, $criteria);
        $query->joinWith('SpyLocale', $joinBehavior);

        return $this->getSpyProductImageSets($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyProduct is new, it will return
     * an empty collection; or if this SpyProduct has previously
     * been saved, it will retrieve related SpyProductImageSets from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyProduct.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyProductImageSet[] List of SpyProductImageSet objects
     * @phpstan-return ObjectCollection&\Traversable<SpyProductImageSet}> List of SpyProductImageSet objects
     */
    public function getSpyProductImageSetsJoinSpyProductAbstract(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyProductImageSetQuery::create(null, $criteria);
        $query->joinWith('SpyProductAbstract', $joinBehavior);

        return $this->getSpyProductImageSets($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyProduct is new, it will return
     * an empty collection; or if this SpyProduct has previously
     * been saved, it will retrieve related SpyProductImageSets from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyProduct.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyProductImageSet[] List of SpyProductImageSet objects
     * @phpstan-return ObjectCollection&\Traversable<SpyProductImageSet}> List of SpyProductImageSet objects
     */
    public function getSpyProductImageSetsJoinSpyProductSet(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyProductImageSetQuery::create(null, $criteria);
        $query->joinWith('SpyProductSet', $joinBehavior);

        return $this->getSpyProductImageSets($query, $con);
    }

    /**
     * Clears out the collSpyProductListProductConcretes collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyProductListProductConcretes()
     */
    public function clearSpyProductListProductConcretes()
    {
        $this->collSpyProductListProductConcretes = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyProductListProductConcretes collection loaded partially.
     */
    public function resetPartialSpyProductListProductConcretes($v = true)
    {
        $this->collSpyProductListProductConcretesPartial = $v;
    }

    /**
     * Initializes the collSpyProductListProductConcretes collection.
     *
     * By default this just sets the collSpyProductListProductConcretes collection to an empty array (like clearcollSpyProductListProductConcretes());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyProductListProductConcretes($overrideExisting = true)
    {
        if (null !== $this->collSpyProductListProductConcretes && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyProductListProductConcreteTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyProductListProductConcretes = new $collectionClassName;
        $this->collSpyProductListProductConcretes->setModel('\Orm\Zed\ProductList\Persistence\SpyProductListProductConcrete');
    }

    /**
     * Gets an array of SpyProductListProductConcrete objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyProduct is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyProductListProductConcrete[] List of SpyProductListProductConcrete objects
     * @phpstan-return ObjectCollection&\Traversable<SpyProductListProductConcrete> List of SpyProductListProductConcrete objects
     * @throws PropelException
     */
    public function getSpyProductListProductConcretes(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyProductListProductConcretesPartial && !$this->isNew();
        if (null === $this->collSpyProductListProductConcretes || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyProductListProductConcretes) {
                    $this->initSpyProductListProductConcretes();
                } else {
                    $collectionClassName = SpyProductListProductConcreteTableMap::getTableMap()->getCollectionClassName();

                    $collSpyProductListProductConcretes = new $collectionClassName;
                    $collSpyProductListProductConcretes->setModel('\Orm\Zed\ProductList\Persistence\SpyProductListProductConcrete');

                    return $collSpyProductListProductConcretes;
                }
            } else {
                $collSpyProductListProductConcretes = SpyProductListProductConcreteQuery::create(null, $criteria)
                    ->filterBySpyProduct($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyProductListProductConcretesPartial && count($collSpyProductListProductConcretes)) {
                        $this->initSpyProductListProductConcretes(false);

                        foreach ($collSpyProductListProductConcretes as $obj) {
                            if (false == $this->collSpyProductListProductConcretes->contains($obj)) {
                                $this->collSpyProductListProductConcretes->append($obj);
                            }
                        }

                        $this->collSpyProductListProductConcretesPartial = true;
                    }

                    return $collSpyProductListProductConcretes;
                }

                if ($partial && $this->collSpyProductListProductConcretes) {
                    foreach ($this->collSpyProductListProductConcretes as $obj) {
                        if ($obj->isNew()) {
                            $collSpyProductListProductConcretes[] = $obj;
                        }
                    }
                }

                $this->collSpyProductListProductConcretes = $collSpyProductListProductConcretes;
                $this->collSpyProductListProductConcretesPartial = false;
            }
        }

        return $this->collSpyProductListProductConcretes;
    }

    /**
     * Sets a collection of SpyProductListProductConcrete objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyProductListProductConcretes A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyProduct The current object (for fluent API support)
     */
    public function setSpyProductListProductConcretes(Collection $spyProductListProductConcretes, ConnectionInterface $con = null)
    {
        /** @var SpyProductListProductConcrete[] $spyProductListProductConcretesToDelete */
        $spyProductListProductConcretesToDelete = $this->getSpyProductListProductConcretes(new Criteria(), $con)->diff($spyProductListProductConcretes);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->spyProductListProductConcretesScheduledForDeletion = clone $spyProductListProductConcretesToDelete;

        foreach ($spyProductListProductConcretesToDelete as $spyProductListProductConcreteRemoved) {
            $spyProductListProductConcreteRemoved->setSpyProduct(null);
        }

        $this->collSpyProductListProductConcretes = null;
        foreach ($spyProductListProductConcretes as $spyProductListProductConcrete) {
            $this->addSpyProductListProductConcrete($spyProductListProductConcrete);
        }

        $this->collSpyProductListProductConcretes = $spyProductListProductConcretes;
        $this->collSpyProductListProductConcretesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyProductListProductConcrete objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyProductListProductConcrete objects.
     * @throws PropelException
     */
    public function countSpyProductListProductConcretes(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyProductListProductConcretesPartial && !$this->isNew();
        if (null === $this->collSpyProductListProductConcretes || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyProductListProductConcretes) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyProductListProductConcretes());
            }

            $query = SpyProductListProductConcreteQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySpyProduct($this)
                ->count($con);
        }

        return count($this->collSpyProductListProductConcretes);
    }

    /**
     * Method called to associate a SpyProductListProductConcrete object to this object
     * through the SpyProductListProductConcrete foreign key attribute.
     *
     * @param  SpyProductListProductConcrete $l SpyProductListProductConcrete
     * @return $this|\Orm\Zed\Product\Persistence\SpyProduct The current object (for fluent API support)
     */
    public function addSpyProductListProductConcrete(SpyProductListProductConcrete $l)
    {
        if ($this->collSpyProductListProductConcretes === null) {
            $this->initSpyProductListProductConcretes();
            $this->collSpyProductListProductConcretesPartial = true;
        }

        if (!$this->collSpyProductListProductConcretes->contains($l)) {
            $this->doAddSpyProductListProductConcrete($l);

            if ($this->spyProductListProductConcretesScheduledForDeletion and $this->spyProductListProductConcretesScheduledForDeletion->contains($l)) {
                $this->spyProductListProductConcretesScheduledForDeletion->remove($this->spyProductListProductConcretesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyProductListProductConcrete $spyProductListProductConcrete The SpyProductListProductConcrete object to add.
     */
    protected function doAddSpyProductListProductConcrete(SpyProductListProductConcrete $spyProductListProductConcrete)
    {
        $this->collSpyProductListProductConcretes[]= $spyProductListProductConcrete;
        $spyProductListProductConcrete->setSpyProduct($this);
    }

    /**
     * @param  SpyProductListProductConcrete $spyProductListProductConcrete The SpyProductListProductConcrete object to remove.
     * @return $this|ChildSpyProduct The current object (for fluent API support)
     */
    public function removeSpyProductListProductConcrete(SpyProductListProductConcrete $spyProductListProductConcrete)
    {
        if ($this->getSpyProductListProductConcretes()->contains($spyProductListProductConcrete)) {
            $pos = $this->collSpyProductListProductConcretes->search($spyProductListProductConcrete);
            $this->collSpyProductListProductConcretes->remove($pos);
            if (null === $this->spyProductListProductConcretesScheduledForDeletion) {
                $this->spyProductListProductConcretesScheduledForDeletion = clone $this->collSpyProductListProductConcretes;
                $this->spyProductListProductConcretesScheduledForDeletion->clear();
            }
            $this->spyProductListProductConcretesScheduledForDeletion[]= clone $spyProductListProductConcrete;
            $spyProductListProductConcrete->setSpyProduct(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyProduct is new, it will return
     * an empty collection; or if this SpyProduct has previously
     * been saved, it will retrieve related SpyProductListProductConcretes from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyProduct.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyProductListProductConcrete[] List of SpyProductListProductConcrete objects
     * @phpstan-return ObjectCollection&\Traversable<SpyProductListProductConcrete}> List of SpyProductListProductConcrete objects
     */
    public function getSpyProductListProductConcretesJoinSpyProductList(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyProductListProductConcreteQuery::create(null, $criteria);
        $query->joinWith('SpyProductList', $joinBehavior);

        return $this->getSpyProductListProductConcretes($query, $con);
    }

    /**
     * Clears out the collSpyProductMeasurementSalesUnits collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyProductMeasurementSalesUnits()
     */
    public function clearSpyProductMeasurementSalesUnits()
    {
        $this->collSpyProductMeasurementSalesUnits = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyProductMeasurementSalesUnits collection loaded partially.
     */
    public function resetPartialSpyProductMeasurementSalesUnits($v = true)
    {
        $this->collSpyProductMeasurementSalesUnitsPartial = $v;
    }

    /**
     * Initializes the collSpyProductMeasurementSalesUnits collection.
     *
     * By default this just sets the collSpyProductMeasurementSalesUnits collection to an empty array (like clearcollSpyProductMeasurementSalesUnits());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyProductMeasurementSalesUnits($overrideExisting = true)
    {
        if (null !== $this->collSpyProductMeasurementSalesUnits && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyProductMeasurementSalesUnitTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyProductMeasurementSalesUnits = new $collectionClassName;
        $this->collSpyProductMeasurementSalesUnits->setModel('\Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementSalesUnit');
    }

    /**
     * Gets an array of SpyProductMeasurementSalesUnit objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyProduct is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyProductMeasurementSalesUnit[] List of SpyProductMeasurementSalesUnit objects
     * @phpstan-return ObjectCollection&\Traversable<SpyProductMeasurementSalesUnit> List of SpyProductMeasurementSalesUnit objects
     * @throws PropelException
     */
    public function getSpyProductMeasurementSalesUnits(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyProductMeasurementSalesUnitsPartial && !$this->isNew();
        if (null === $this->collSpyProductMeasurementSalesUnits || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyProductMeasurementSalesUnits) {
                    $this->initSpyProductMeasurementSalesUnits();
                } else {
                    $collectionClassName = SpyProductMeasurementSalesUnitTableMap::getTableMap()->getCollectionClassName();

                    $collSpyProductMeasurementSalesUnits = new $collectionClassName;
                    $collSpyProductMeasurementSalesUnits->setModel('\Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementSalesUnit');

                    return $collSpyProductMeasurementSalesUnits;
                }
            } else {
                $collSpyProductMeasurementSalesUnits = SpyProductMeasurementSalesUnitQuery::create(null, $criteria)
                    ->filterByProduct($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyProductMeasurementSalesUnitsPartial && count($collSpyProductMeasurementSalesUnits)) {
                        $this->initSpyProductMeasurementSalesUnits(false);

                        foreach ($collSpyProductMeasurementSalesUnits as $obj) {
                            if (false == $this->collSpyProductMeasurementSalesUnits->contains($obj)) {
                                $this->collSpyProductMeasurementSalesUnits->append($obj);
                            }
                        }

                        $this->collSpyProductMeasurementSalesUnitsPartial = true;
                    }

                    return $collSpyProductMeasurementSalesUnits;
                }

                if ($partial && $this->collSpyProductMeasurementSalesUnits) {
                    foreach ($this->collSpyProductMeasurementSalesUnits as $obj) {
                        if ($obj->isNew()) {
                            $collSpyProductMeasurementSalesUnits[] = $obj;
                        }
                    }
                }

                $this->collSpyProductMeasurementSalesUnits = $collSpyProductMeasurementSalesUnits;
                $this->collSpyProductMeasurementSalesUnitsPartial = false;
            }
        }

        return $this->collSpyProductMeasurementSalesUnits;
    }

    /**
     * Sets a collection of SpyProductMeasurementSalesUnit objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyProductMeasurementSalesUnits A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyProduct The current object (for fluent API support)
     */
    public function setSpyProductMeasurementSalesUnits(Collection $spyProductMeasurementSalesUnits, ConnectionInterface $con = null)
    {
        /** @var SpyProductMeasurementSalesUnit[] $spyProductMeasurementSalesUnitsToDelete */
        $spyProductMeasurementSalesUnitsToDelete = $this->getSpyProductMeasurementSalesUnits(new Criteria(), $con)->diff($spyProductMeasurementSalesUnits);


        $this->spyProductMeasurementSalesUnitsScheduledForDeletion = $spyProductMeasurementSalesUnitsToDelete;

        foreach ($spyProductMeasurementSalesUnitsToDelete as $spyProductMeasurementSalesUnitRemoved) {
            $spyProductMeasurementSalesUnitRemoved->setProduct(null);
        }

        $this->collSpyProductMeasurementSalesUnits = null;
        foreach ($spyProductMeasurementSalesUnits as $spyProductMeasurementSalesUnit) {
            $this->addSpyProductMeasurementSalesUnit($spyProductMeasurementSalesUnit);
        }

        $this->collSpyProductMeasurementSalesUnits = $spyProductMeasurementSalesUnits;
        $this->collSpyProductMeasurementSalesUnitsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyProductMeasurementSalesUnit objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyProductMeasurementSalesUnit objects.
     * @throws PropelException
     */
    public function countSpyProductMeasurementSalesUnits(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyProductMeasurementSalesUnitsPartial && !$this->isNew();
        if (null === $this->collSpyProductMeasurementSalesUnits || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyProductMeasurementSalesUnits) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyProductMeasurementSalesUnits());
            }

            $query = SpyProductMeasurementSalesUnitQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByProduct($this)
                ->count($con);
        }

        return count($this->collSpyProductMeasurementSalesUnits);
    }

    /**
     * Method called to associate a SpyProductMeasurementSalesUnit object to this object
     * through the SpyProductMeasurementSalesUnit foreign key attribute.
     *
     * @param  SpyProductMeasurementSalesUnit $l SpyProductMeasurementSalesUnit
     * @return $this|\Orm\Zed\Product\Persistence\SpyProduct The current object (for fluent API support)
     */
    public function addSpyProductMeasurementSalesUnit(SpyProductMeasurementSalesUnit $l)
    {
        if ($this->collSpyProductMeasurementSalesUnits === null) {
            $this->initSpyProductMeasurementSalesUnits();
            $this->collSpyProductMeasurementSalesUnitsPartial = true;
        }

        if (!$this->collSpyProductMeasurementSalesUnits->contains($l)) {
            $this->doAddSpyProductMeasurementSalesUnit($l);

            if ($this->spyProductMeasurementSalesUnitsScheduledForDeletion and $this->spyProductMeasurementSalesUnitsScheduledForDeletion->contains($l)) {
                $this->spyProductMeasurementSalesUnitsScheduledForDeletion->remove($this->spyProductMeasurementSalesUnitsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyProductMeasurementSalesUnit $spyProductMeasurementSalesUnit The SpyProductMeasurementSalesUnit object to add.
     */
    protected function doAddSpyProductMeasurementSalesUnit(SpyProductMeasurementSalesUnit $spyProductMeasurementSalesUnit)
    {
        $this->collSpyProductMeasurementSalesUnits[]= $spyProductMeasurementSalesUnit;
        $spyProductMeasurementSalesUnit->setProduct($this);
    }

    /**
     * @param  SpyProductMeasurementSalesUnit $spyProductMeasurementSalesUnit The SpyProductMeasurementSalesUnit object to remove.
     * @return $this|ChildSpyProduct The current object (for fluent API support)
     */
    public function removeSpyProductMeasurementSalesUnit(SpyProductMeasurementSalesUnit $spyProductMeasurementSalesUnit)
    {
        if ($this->getSpyProductMeasurementSalesUnits()->contains($spyProductMeasurementSalesUnit)) {
            $pos = $this->collSpyProductMeasurementSalesUnits->search($spyProductMeasurementSalesUnit);
            $this->collSpyProductMeasurementSalesUnits->remove($pos);
            if (null === $this->spyProductMeasurementSalesUnitsScheduledForDeletion) {
                $this->spyProductMeasurementSalesUnitsScheduledForDeletion = clone $this->collSpyProductMeasurementSalesUnits;
                $this->spyProductMeasurementSalesUnitsScheduledForDeletion->clear();
            }
            $this->spyProductMeasurementSalesUnitsScheduledForDeletion[]= clone $spyProductMeasurementSalesUnit;
            $spyProductMeasurementSalesUnit->setProduct(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyProduct is new, it will return
     * an empty collection; or if this SpyProduct has previously
     * been saved, it will retrieve related SpyProductMeasurementSalesUnits from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyProduct.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyProductMeasurementSalesUnit[] List of SpyProductMeasurementSalesUnit objects
     * @phpstan-return ObjectCollection&\Traversable<SpyProductMeasurementSalesUnit}> List of SpyProductMeasurementSalesUnit objects
     */
    public function getSpyProductMeasurementSalesUnitsJoinProductMeasurementUnit(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyProductMeasurementSalesUnitQuery::create(null, $criteria);
        $query->joinWith('ProductMeasurementUnit', $joinBehavior);

        return $this->getSpyProductMeasurementSalesUnits($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyProduct is new, it will return
     * an empty collection; or if this SpyProduct has previously
     * been saved, it will retrieve related SpyProductMeasurementSalesUnits from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyProduct.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyProductMeasurementSalesUnit[] List of SpyProductMeasurementSalesUnit objects
     * @phpstan-return ObjectCollection&\Traversable<SpyProductMeasurementSalesUnit}> List of SpyProductMeasurementSalesUnit objects
     */
    public function getSpyProductMeasurementSalesUnitsJoinProductMeasurementBaseUnit(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyProductMeasurementSalesUnitQuery::create(null, $criteria);
        $query->joinWith('ProductMeasurementBaseUnit', $joinBehavior);

        return $this->getSpyProductMeasurementSalesUnits($query, $con);
    }

    /**
     * Clears out the collSpyProductPackagingUnitsRelatedByFkProduct collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyProductPackagingUnitsRelatedByFkProduct()
     */
    public function clearSpyProductPackagingUnitsRelatedByFkProduct()
    {
        $this->collSpyProductPackagingUnitsRelatedByFkProduct = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyProductPackagingUnitsRelatedByFkProduct collection loaded partially.
     */
    public function resetPartialSpyProductPackagingUnitsRelatedByFkProduct($v = true)
    {
        $this->collSpyProductPackagingUnitsRelatedByFkProductPartial = $v;
    }

    /**
     * Initializes the collSpyProductPackagingUnitsRelatedByFkProduct collection.
     *
     * By default this just sets the collSpyProductPackagingUnitsRelatedByFkProduct collection to an empty array (like clearcollSpyProductPackagingUnitsRelatedByFkProduct());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyProductPackagingUnitsRelatedByFkProduct($overrideExisting = true)
    {
        if (null !== $this->collSpyProductPackagingUnitsRelatedByFkProduct && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyProductPackagingUnitTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyProductPackagingUnitsRelatedByFkProduct = new $collectionClassName;
        $this->collSpyProductPackagingUnitsRelatedByFkProduct->setModel('\Orm\Zed\ProductPackagingUnit\Persistence\SpyProductPackagingUnit');
    }

    /**
     * Gets an array of SpyProductPackagingUnit objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyProduct is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyProductPackagingUnit[] List of SpyProductPackagingUnit objects
     * @phpstan-return ObjectCollection&\Traversable<SpyProductPackagingUnit> List of SpyProductPackagingUnit objects
     * @throws PropelException
     */
    public function getSpyProductPackagingUnitsRelatedByFkProduct(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyProductPackagingUnitsRelatedByFkProductPartial && !$this->isNew();
        if (null === $this->collSpyProductPackagingUnitsRelatedByFkProduct || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyProductPackagingUnitsRelatedByFkProduct) {
                    $this->initSpyProductPackagingUnitsRelatedByFkProduct();
                } else {
                    $collectionClassName = SpyProductPackagingUnitTableMap::getTableMap()->getCollectionClassName();

                    $collSpyProductPackagingUnitsRelatedByFkProduct = new $collectionClassName;
                    $collSpyProductPackagingUnitsRelatedByFkProduct->setModel('\Orm\Zed\ProductPackagingUnit\Persistence\SpyProductPackagingUnit');

                    return $collSpyProductPackagingUnitsRelatedByFkProduct;
                }
            } else {
                $collSpyProductPackagingUnitsRelatedByFkProduct = SpyProductPackagingUnitQuery::create(null, $criteria)
                    ->filterByProduct($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyProductPackagingUnitsRelatedByFkProductPartial && count($collSpyProductPackagingUnitsRelatedByFkProduct)) {
                        $this->initSpyProductPackagingUnitsRelatedByFkProduct(false);

                        foreach ($collSpyProductPackagingUnitsRelatedByFkProduct as $obj) {
                            if (false == $this->collSpyProductPackagingUnitsRelatedByFkProduct->contains($obj)) {
                                $this->collSpyProductPackagingUnitsRelatedByFkProduct->append($obj);
                            }
                        }

                        $this->collSpyProductPackagingUnitsRelatedByFkProductPartial = true;
                    }

                    return $collSpyProductPackagingUnitsRelatedByFkProduct;
                }

                if ($partial && $this->collSpyProductPackagingUnitsRelatedByFkProduct) {
                    foreach ($this->collSpyProductPackagingUnitsRelatedByFkProduct as $obj) {
                        if ($obj->isNew()) {
                            $collSpyProductPackagingUnitsRelatedByFkProduct[] = $obj;
                        }
                    }
                }

                $this->collSpyProductPackagingUnitsRelatedByFkProduct = $collSpyProductPackagingUnitsRelatedByFkProduct;
                $this->collSpyProductPackagingUnitsRelatedByFkProductPartial = false;
            }
        }

        return $this->collSpyProductPackagingUnitsRelatedByFkProduct;
    }

    /**
     * Sets a collection of SpyProductPackagingUnit objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyProductPackagingUnitsRelatedByFkProduct A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyProduct The current object (for fluent API support)
     */
    public function setSpyProductPackagingUnitsRelatedByFkProduct(Collection $spyProductPackagingUnitsRelatedByFkProduct, ConnectionInterface $con = null)
    {
        /** @var SpyProductPackagingUnit[] $spyProductPackagingUnitsRelatedByFkProductToDelete */
        $spyProductPackagingUnitsRelatedByFkProductToDelete = $this->getSpyProductPackagingUnitsRelatedByFkProduct(new Criteria(), $con)->diff($spyProductPackagingUnitsRelatedByFkProduct);


        $this->spyProductPackagingUnitsRelatedByFkProductScheduledForDeletion = $spyProductPackagingUnitsRelatedByFkProductToDelete;

        foreach ($spyProductPackagingUnitsRelatedByFkProductToDelete as $spyProductPackagingUnitRelatedByFkProductRemoved) {
            $spyProductPackagingUnitRelatedByFkProductRemoved->setProduct(null);
        }

        $this->collSpyProductPackagingUnitsRelatedByFkProduct = null;
        foreach ($spyProductPackagingUnitsRelatedByFkProduct as $spyProductPackagingUnitRelatedByFkProduct) {
            $this->addSpyProductPackagingUnitRelatedByFkProduct($spyProductPackagingUnitRelatedByFkProduct);
        }

        $this->collSpyProductPackagingUnitsRelatedByFkProduct = $spyProductPackagingUnitsRelatedByFkProduct;
        $this->collSpyProductPackagingUnitsRelatedByFkProductPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyProductPackagingUnit objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyProductPackagingUnit objects.
     * @throws PropelException
     */
    public function countSpyProductPackagingUnitsRelatedByFkProduct(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyProductPackagingUnitsRelatedByFkProductPartial && !$this->isNew();
        if (null === $this->collSpyProductPackagingUnitsRelatedByFkProduct || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyProductPackagingUnitsRelatedByFkProduct) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyProductPackagingUnitsRelatedByFkProduct());
            }

            $query = SpyProductPackagingUnitQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByProduct($this)
                ->count($con);
        }

        return count($this->collSpyProductPackagingUnitsRelatedByFkProduct);
    }

    /**
     * Method called to associate a SpyProductPackagingUnit object to this object
     * through the SpyProductPackagingUnit foreign key attribute.
     *
     * @param  SpyProductPackagingUnit $l SpyProductPackagingUnit
     * @return $this|\Orm\Zed\Product\Persistence\SpyProduct The current object (for fluent API support)
     */
    public function addSpyProductPackagingUnitRelatedByFkProduct(SpyProductPackagingUnit $l)
    {
        if ($this->collSpyProductPackagingUnitsRelatedByFkProduct === null) {
            $this->initSpyProductPackagingUnitsRelatedByFkProduct();
            $this->collSpyProductPackagingUnitsRelatedByFkProductPartial = true;
        }

        if (!$this->collSpyProductPackagingUnitsRelatedByFkProduct->contains($l)) {
            $this->doAddSpyProductPackagingUnitRelatedByFkProduct($l);

            if ($this->spyProductPackagingUnitsRelatedByFkProductScheduledForDeletion and $this->spyProductPackagingUnitsRelatedByFkProductScheduledForDeletion->contains($l)) {
                $this->spyProductPackagingUnitsRelatedByFkProductScheduledForDeletion->remove($this->spyProductPackagingUnitsRelatedByFkProductScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyProductPackagingUnit $spyProductPackagingUnitRelatedByFkProduct The SpyProductPackagingUnit object to add.
     */
    protected function doAddSpyProductPackagingUnitRelatedByFkProduct(SpyProductPackagingUnit $spyProductPackagingUnitRelatedByFkProduct)
    {
        $this->collSpyProductPackagingUnitsRelatedByFkProduct[]= $spyProductPackagingUnitRelatedByFkProduct;
        $spyProductPackagingUnitRelatedByFkProduct->setProduct($this);
    }

    /**
     * @param  SpyProductPackagingUnit $spyProductPackagingUnitRelatedByFkProduct The SpyProductPackagingUnit object to remove.
     * @return $this|ChildSpyProduct The current object (for fluent API support)
     */
    public function removeSpyProductPackagingUnitRelatedByFkProduct(SpyProductPackagingUnit $spyProductPackagingUnitRelatedByFkProduct)
    {
        if ($this->getSpyProductPackagingUnitsRelatedByFkProduct()->contains($spyProductPackagingUnitRelatedByFkProduct)) {
            $pos = $this->collSpyProductPackagingUnitsRelatedByFkProduct->search($spyProductPackagingUnitRelatedByFkProduct);
            $this->collSpyProductPackagingUnitsRelatedByFkProduct->remove($pos);
            if (null === $this->spyProductPackagingUnitsRelatedByFkProductScheduledForDeletion) {
                $this->spyProductPackagingUnitsRelatedByFkProductScheduledForDeletion = clone $this->collSpyProductPackagingUnitsRelatedByFkProduct;
                $this->spyProductPackagingUnitsRelatedByFkProductScheduledForDeletion->clear();
            }
            $this->spyProductPackagingUnitsRelatedByFkProductScheduledForDeletion[]= clone $spyProductPackagingUnitRelatedByFkProduct;
            $spyProductPackagingUnitRelatedByFkProduct->setProduct(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyProduct is new, it will return
     * an empty collection; or if this SpyProduct has previously
     * been saved, it will retrieve related SpyProductPackagingUnitsRelatedByFkProduct from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyProduct.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyProductPackagingUnit[] List of SpyProductPackagingUnit objects
     * @phpstan-return ObjectCollection&\Traversable<SpyProductPackagingUnit}> List of SpyProductPackagingUnit objects
     */
    public function getSpyProductPackagingUnitsRelatedByFkProductJoinProductPackagingUnitType(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyProductPackagingUnitQuery::create(null, $criteria);
        $query->joinWith('ProductPackagingUnitType', $joinBehavior);

        return $this->getSpyProductPackagingUnitsRelatedByFkProduct($query, $con);
    }

    /**
     * Clears out the collSpyProductPackagingUnitsRelatedByFkLeadProduct collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyProductPackagingUnitsRelatedByFkLeadProduct()
     */
    public function clearSpyProductPackagingUnitsRelatedByFkLeadProduct()
    {
        $this->collSpyProductPackagingUnitsRelatedByFkLeadProduct = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyProductPackagingUnitsRelatedByFkLeadProduct collection loaded partially.
     */
    public function resetPartialSpyProductPackagingUnitsRelatedByFkLeadProduct($v = true)
    {
        $this->collSpyProductPackagingUnitsRelatedByFkLeadProductPartial = $v;
    }

    /**
     * Initializes the collSpyProductPackagingUnitsRelatedByFkLeadProduct collection.
     *
     * By default this just sets the collSpyProductPackagingUnitsRelatedByFkLeadProduct collection to an empty array (like clearcollSpyProductPackagingUnitsRelatedByFkLeadProduct());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyProductPackagingUnitsRelatedByFkLeadProduct($overrideExisting = true)
    {
        if (null !== $this->collSpyProductPackagingUnitsRelatedByFkLeadProduct && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyProductPackagingUnitTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyProductPackagingUnitsRelatedByFkLeadProduct = new $collectionClassName;
        $this->collSpyProductPackagingUnitsRelatedByFkLeadProduct->setModel('\Orm\Zed\ProductPackagingUnit\Persistence\SpyProductPackagingUnit');
    }

    /**
     * Gets an array of SpyProductPackagingUnit objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyProduct is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyProductPackagingUnit[] List of SpyProductPackagingUnit objects
     * @phpstan-return ObjectCollection&\Traversable<SpyProductPackagingUnit> List of SpyProductPackagingUnit objects
     * @throws PropelException
     */
    public function getSpyProductPackagingUnitsRelatedByFkLeadProduct(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyProductPackagingUnitsRelatedByFkLeadProductPartial && !$this->isNew();
        if (null === $this->collSpyProductPackagingUnitsRelatedByFkLeadProduct || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyProductPackagingUnitsRelatedByFkLeadProduct) {
                    $this->initSpyProductPackagingUnitsRelatedByFkLeadProduct();
                } else {
                    $collectionClassName = SpyProductPackagingUnitTableMap::getTableMap()->getCollectionClassName();

                    $collSpyProductPackagingUnitsRelatedByFkLeadProduct = new $collectionClassName;
                    $collSpyProductPackagingUnitsRelatedByFkLeadProduct->setModel('\Orm\Zed\ProductPackagingUnit\Persistence\SpyProductPackagingUnit');

                    return $collSpyProductPackagingUnitsRelatedByFkLeadProduct;
                }
            } else {
                $collSpyProductPackagingUnitsRelatedByFkLeadProduct = SpyProductPackagingUnitQuery::create(null, $criteria)
                    ->filterByLeadProduct($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyProductPackagingUnitsRelatedByFkLeadProductPartial && count($collSpyProductPackagingUnitsRelatedByFkLeadProduct)) {
                        $this->initSpyProductPackagingUnitsRelatedByFkLeadProduct(false);

                        foreach ($collSpyProductPackagingUnitsRelatedByFkLeadProduct as $obj) {
                            if (false == $this->collSpyProductPackagingUnitsRelatedByFkLeadProduct->contains($obj)) {
                                $this->collSpyProductPackagingUnitsRelatedByFkLeadProduct->append($obj);
                            }
                        }

                        $this->collSpyProductPackagingUnitsRelatedByFkLeadProductPartial = true;
                    }

                    return $collSpyProductPackagingUnitsRelatedByFkLeadProduct;
                }

                if ($partial && $this->collSpyProductPackagingUnitsRelatedByFkLeadProduct) {
                    foreach ($this->collSpyProductPackagingUnitsRelatedByFkLeadProduct as $obj) {
                        if ($obj->isNew()) {
                            $collSpyProductPackagingUnitsRelatedByFkLeadProduct[] = $obj;
                        }
                    }
                }

                $this->collSpyProductPackagingUnitsRelatedByFkLeadProduct = $collSpyProductPackagingUnitsRelatedByFkLeadProduct;
                $this->collSpyProductPackagingUnitsRelatedByFkLeadProductPartial = false;
            }
        }

        return $this->collSpyProductPackagingUnitsRelatedByFkLeadProduct;
    }

    /**
     * Sets a collection of SpyProductPackagingUnit objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyProductPackagingUnitsRelatedByFkLeadProduct A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyProduct The current object (for fluent API support)
     */
    public function setSpyProductPackagingUnitsRelatedByFkLeadProduct(Collection $spyProductPackagingUnitsRelatedByFkLeadProduct, ConnectionInterface $con = null)
    {
        /** @var SpyProductPackagingUnit[] $spyProductPackagingUnitsRelatedByFkLeadProductToDelete */
        $spyProductPackagingUnitsRelatedByFkLeadProductToDelete = $this->getSpyProductPackagingUnitsRelatedByFkLeadProduct(new Criteria(), $con)->diff($spyProductPackagingUnitsRelatedByFkLeadProduct);


        $this->spyProductPackagingUnitsRelatedByFkLeadProductScheduledForDeletion = $spyProductPackagingUnitsRelatedByFkLeadProductToDelete;

        foreach ($spyProductPackagingUnitsRelatedByFkLeadProductToDelete as $spyProductPackagingUnitRelatedByFkLeadProductRemoved) {
            $spyProductPackagingUnitRelatedByFkLeadProductRemoved->setLeadProduct(null);
        }

        $this->collSpyProductPackagingUnitsRelatedByFkLeadProduct = null;
        foreach ($spyProductPackagingUnitsRelatedByFkLeadProduct as $spyProductPackagingUnitRelatedByFkLeadProduct) {
            $this->addSpyProductPackagingUnitRelatedByFkLeadProduct($spyProductPackagingUnitRelatedByFkLeadProduct);
        }

        $this->collSpyProductPackagingUnitsRelatedByFkLeadProduct = $spyProductPackagingUnitsRelatedByFkLeadProduct;
        $this->collSpyProductPackagingUnitsRelatedByFkLeadProductPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyProductPackagingUnit objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyProductPackagingUnit objects.
     * @throws PropelException
     */
    public function countSpyProductPackagingUnitsRelatedByFkLeadProduct(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyProductPackagingUnitsRelatedByFkLeadProductPartial && !$this->isNew();
        if (null === $this->collSpyProductPackagingUnitsRelatedByFkLeadProduct || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyProductPackagingUnitsRelatedByFkLeadProduct) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyProductPackagingUnitsRelatedByFkLeadProduct());
            }

            $query = SpyProductPackagingUnitQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByLeadProduct($this)
                ->count($con);
        }

        return count($this->collSpyProductPackagingUnitsRelatedByFkLeadProduct);
    }

    /**
     * Method called to associate a SpyProductPackagingUnit object to this object
     * through the SpyProductPackagingUnit foreign key attribute.
     *
     * @param  SpyProductPackagingUnit $l SpyProductPackagingUnit
     * @return $this|\Orm\Zed\Product\Persistence\SpyProduct The current object (for fluent API support)
     */
    public function addSpyProductPackagingUnitRelatedByFkLeadProduct(SpyProductPackagingUnit $l)
    {
        if ($this->collSpyProductPackagingUnitsRelatedByFkLeadProduct === null) {
            $this->initSpyProductPackagingUnitsRelatedByFkLeadProduct();
            $this->collSpyProductPackagingUnitsRelatedByFkLeadProductPartial = true;
        }

        if (!$this->collSpyProductPackagingUnitsRelatedByFkLeadProduct->contains($l)) {
            $this->doAddSpyProductPackagingUnitRelatedByFkLeadProduct($l);

            if ($this->spyProductPackagingUnitsRelatedByFkLeadProductScheduledForDeletion and $this->spyProductPackagingUnitsRelatedByFkLeadProductScheduledForDeletion->contains($l)) {
                $this->spyProductPackagingUnitsRelatedByFkLeadProductScheduledForDeletion->remove($this->spyProductPackagingUnitsRelatedByFkLeadProductScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyProductPackagingUnit $spyProductPackagingUnitRelatedByFkLeadProduct The SpyProductPackagingUnit object to add.
     */
    protected function doAddSpyProductPackagingUnitRelatedByFkLeadProduct(SpyProductPackagingUnit $spyProductPackagingUnitRelatedByFkLeadProduct)
    {
        $this->collSpyProductPackagingUnitsRelatedByFkLeadProduct[]= $spyProductPackagingUnitRelatedByFkLeadProduct;
        $spyProductPackagingUnitRelatedByFkLeadProduct->setLeadProduct($this);
    }

    /**
     * @param  SpyProductPackagingUnit $spyProductPackagingUnitRelatedByFkLeadProduct The SpyProductPackagingUnit object to remove.
     * @return $this|ChildSpyProduct The current object (for fluent API support)
     */
    public function removeSpyProductPackagingUnitRelatedByFkLeadProduct(SpyProductPackagingUnit $spyProductPackagingUnitRelatedByFkLeadProduct)
    {
        if ($this->getSpyProductPackagingUnitsRelatedByFkLeadProduct()->contains($spyProductPackagingUnitRelatedByFkLeadProduct)) {
            $pos = $this->collSpyProductPackagingUnitsRelatedByFkLeadProduct->search($spyProductPackagingUnitRelatedByFkLeadProduct);
            $this->collSpyProductPackagingUnitsRelatedByFkLeadProduct->remove($pos);
            if (null === $this->spyProductPackagingUnitsRelatedByFkLeadProductScheduledForDeletion) {
                $this->spyProductPackagingUnitsRelatedByFkLeadProductScheduledForDeletion = clone $this->collSpyProductPackagingUnitsRelatedByFkLeadProduct;
                $this->spyProductPackagingUnitsRelatedByFkLeadProductScheduledForDeletion->clear();
            }
            $this->spyProductPackagingUnitsRelatedByFkLeadProductScheduledForDeletion[]= clone $spyProductPackagingUnitRelatedByFkLeadProduct;
            $spyProductPackagingUnitRelatedByFkLeadProduct->setLeadProduct(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyProduct is new, it will return
     * an empty collection; or if this SpyProduct has previously
     * been saved, it will retrieve related SpyProductPackagingUnitsRelatedByFkLeadProduct from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyProduct.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyProductPackagingUnit[] List of SpyProductPackagingUnit objects
     * @phpstan-return ObjectCollection&\Traversable<SpyProductPackagingUnit}> List of SpyProductPackagingUnit objects
     */
    public function getSpyProductPackagingUnitsRelatedByFkLeadProductJoinProductPackagingUnitType(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyProductPackagingUnitQuery::create(null, $criteria);
        $query->joinWith('ProductPackagingUnitType', $joinBehavior);

        return $this->getSpyProductPackagingUnitsRelatedByFkLeadProduct($query, $con);
    }

    /**
     * Clears out the collSpyProductQuantities collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyProductQuantities()
     */
    public function clearSpyProductQuantities()
    {
        $this->collSpyProductQuantities = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyProductQuantities collection loaded partially.
     */
    public function resetPartialSpyProductQuantities($v = true)
    {
        $this->collSpyProductQuantitiesPartial = $v;
    }

    /**
     * Initializes the collSpyProductQuantities collection.
     *
     * By default this just sets the collSpyProductQuantities collection to an empty array (like clearcollSpyProductQuantities());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyProductQuantities($overrideExisting = true)
    {
        if (null !== $this->collSpyProductQuantities && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyProductQuantityTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyProductQuantities = new $collectionClassName;
        $this->collSpyProductQuantities->setModel('\Orm\Zed\ProductQuantity\Persistence\SpyProductQuantity');
    }

    /**
     * Gets an array of SpyProductQuantity objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyProduct is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyProductQuantity[] List of SpyProductQuantity objects
     * @phpstan-return ObjectCollection&\Traversable<SpyProductQuantity> List of SpyProductQuantity objects
     * @throws PropelException
     */
    public function getSpyProductQuantities(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyProductQuantitiesPartial && !$this->isNew();
        if (null === $this->collSpyProductQuantities || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyProductQuantities) {
                    $this->initSpyProductQuantities();
                } else {
                    $collectionClassName = SpyProductQuantityTableMap::getTableMap()->getCollectionClassName();

                    $collSpyProductQuantities = new $collectionClassName;
                    $collSpyProductQuantities->setModel('\Orm\Zed\ProductQuantity\Persistence\SpyProductQuantity');

                    return $collSpyProductQuantities;
                }
            } else {
                $collSpyProductQuantities = SpyProductQuantityQuery::create(null, $criteria)
                    ->filterByProduct($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyProductQuantitiesPartial && count($collSpyProductQuantities)) {
                        $this->initSpyProductQuantities(false);

                        foreach ($collSpyProductQuantities as $obj) {
                            if (false == $this->collSpyProductQuantities->contains($obj)) {
                                $this->collSpyProductQuantities->append($obj);
                            }
                        }

                        $this->collSpyProductQuantitiesPartial = true;
                    }

                    return $collSpyProductQuantities;
                }

                if ($partial && $this->collSpyProductQuantities) {
                    foreach ($this->collSpyProductQuantities as $obj) {
                        if ($obj->isNew()) {
                            $collSpyProductQuantities[] = $obj;
                        }
                    }
                }

                $this->collSpyProductQuantities = $collSpyProductQuantities;
                $this->collSpyProductQuantitiesPartial = false;
            }
        }

        return $this->collSpyProductQuantities;
    }

    /**
     * Sets a collection of SpyProductQuantity objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyProductQuantities A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyProduct The current object (for fluent API support)
     */
    public function setSpyProductQuantities(Collection $spyProductQuantities, ConnectionInterface $con = null)
    {
        /** @var SpyProductQuantity[] $spyProductQuantitiesToDelete */
        $spyProductQuantitiesToDelete = $this->getSpyProductQuantities(new Criteria(), $con)->diff($spyProductQuantities);


        $this->spyProductQuantitiesScheduledForDeletion = $spyProductQuantitiesToDelete;

        foreach ($spyProductQuantitiesToDelete as $spyProductQuantityRemoved) {
            $spyProductQuantityRemoved->setProduct(null);
        }

        $this->collSpyProductQuantities = null;
        foreach ($spyProductQuantities as $spyProductQuantity) {
            $this->addSpyProductQuantity($spyProductQuantity);
        }

        $this->collSpyProductQuantities = $spyProductQuantities;
        $this->collSpyProductQuantitiesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyProductQuantity objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyProductQuantity objects.
     * @throws PropelException
     */
    public function countSpyProductQuantities(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyProductQuantitiesPartial && !$this->isNew();
        if (null === $this->collSpyProductQuantities || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyProductQuantities) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyProductQuantities());
            }

            $query = SpyProductQuantityQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByProduct($this)
                ->count($con);
        }

        return count($this->collSpyProductQuantities);
    }

    /**
     * Method called to associate a SpyProductQuantity object to this object
     * through the SpyProductQuantity foreign key attribute.
     *
     * @param  SpyProductQuantity $l SpyProductQuantity
     * @return $this|\Orm\Zed\Product\Persistence\SpyProduct The current object (for fluent API support)
     */
    public function addSpyProductQuantity(SpyProductQuantity $l)
    {
        if ($this->collSpyProductQuantities === null) {
            $this->initSpyProductQuantities();
            $this->collSpyProductQuantitiesPartial = true;
        }

        if (!$this->collSpyProductQuantities->contains($l)) {
            $this->doAddSpyProductQuantity($l);

            if ($this->spyProductQuantitiesScheduledForDeletion and $this->spyProductQuantitiesScheduledForDeletion->contains($l)) {
                $this->spyProductQuantitiesScheduledForDeletion->remove($this->spyProductQuantitiesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyProductQuantity $spyProductQuantity The SpyProductQuantity object to add.
     */
    protected function doAddSpyProductQuantity(SpyProductQuantity $spyProductQuantity)
    {
        $this->collSpyProductQuantities[]= $spyProductQuantity;
        $spyProductQuantity->setProduct($this);
    }

    /**
     * @param  SpyProductQuantity $spyProductQuantity The SpyProductQuantity object to remove.
     * @return $this|ChildSpyProduct The current object (for fluent API support)
     */
    public function removeSpyProductQuantity(SpyProductQuantity $spyProductQuantity)
    {
        if ($this->getSpyProductQuantities()->contains($spyProductQuantity)) {
            $pos = $this->collSpyProductQuantities->search($spyProductQuantity);
            $this->collSpyProductQuantities->remove($pos);
            if (null === $this->spyProductQuantitiesScheduledForDeletion) {
                $this->spyProductQuantitiesScheduledForDeletion = clone $this->collSpyProductQuantities;
                $this->spyProductQuantitiesScheduledForDeletion->clear();
            }
            $this->spyProductQuantitiesScheduledForDeletion[]= clone $spyProductQuantity;
            $spyProductQuantity->setProduct(null);
        }

        return $this;
    }

    /**
     * Clears out the collSpyProductSearches collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyProductSearches()
     */
    public function clearSpyProductSearches()
    {
        $this->collSpyProductSearches = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyProductSearches collection loaded partially.
     */
    public function resetPartialSpyProductSearches($v = true)
    {
        $this->collSpyProductSearchesPartial = $v;
    }

    /**
     * Initializes the collSpyProductSearches collection.
     *
     * By default this just sets the collSpyProductSearches collection to an empty array (like clearcollSpyProductSearches());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyProductSearches($overrideExisting = true)
    {
        if (null !== $this->collSpyProductSearches && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyProductSearchTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyProductSearches = new $collectionClassName;
        $this->collSpyProductSearches->setModel('\Orm\Zed\ProductSearch\Persistence\SpyProductSearch');
    }

    /**
     * Gets an array of SpyProductSearch objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyProduct is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyProductSearch[] List of SpyProductSearch objects
     * @phpstan-return ObjectCollection&\Traversable<SpyProductSearch> List of SpyProductSearch objects
     * @throws PropelException
     */
    public function getSpyProductSearches(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyProductSearchesPartial && !$this->isNew();
        if (null === $this->collSpyProductSearches || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyProductSearches) {
                    $this->initSpyProductSearches();
                } else {
                    $collectionClassName = SpyProductSearchTableMap::getTableMap()->getCollectionClassName();

                    $collSpyProductSearches = new $collectionClassName;
                    $collSpyProductSearches->setModel('\Orm\Zed\ProductSearch\Persistence\SpyProductSearch');

                    return $collSpyProductSearches;
                }
            } else {
                $collSpyProductSearches = SpyProductSearchQuery::create(null, $criteria)
                    ->filterBySpyProduct($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyProductSearchesPartial && count($collSpyProductSearches)) {
                        $this->initSpyProductSearches(false);

                        foreach ($collSpyProductSearches as $obj) {
                            if (false == $this->collSpyProductSearches->contains($obj)) {
                                $this->collSpyProductSearches->append($obj);
                            }
                        }

                        $this->collSpyProductSearchesPartial = true;
                    }

                    return $collSpyProductSearches;
                }

                if ($partial && $this->collSpyProductSearches) {
                    foreach ($this->collSpyProductSearches as $obj) {
                        if ($obj->isNew()) {
                            $collSpyProductSearches[] = $obj;
                        }
                    }
                }

                $this->collSpyProductSearches = $collSpyProductSearches;
                $this->collSpyProductSearchesPartial = false;
            }
        }

        return $this->collSpyProductSearches;
    }

    /**
     * Sets a collection of SpyProductSearch objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyProductSearches A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyProduct The current object (for fluent API support)
     */
    public function setSpyProductSearches(Collection $spyProductSearches, ConnectionInterface $con = null)
    {
        /** @var SpyProductSearch[] $spyProductSearchesToDelete */
        $spyProductSearchesToDelete = $this->getSpyProductSearches(new Criteria(), $con)->diff($spyProductSearches);


        $this->spyProductSearchesScheduledForDeletion = $spyProductSearchesToDelete;

        foreach ($spyProductSearchesToDelete as $spyProductSearchRemoved) {
            $spyProductSearchRemoved->setSpyProduct(null);
        }

        $this->collSpyProductSearches = null;
        foreach ($spyProductSearches as $spyProductSearch) {
            $this->addSpyProductSearch($spyProductSearch);
        }

        $this->collSpyProductSearches = $spyProductSearches;
        $this->collSpyProductSearchesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyProductSearch objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyProductSearch objects.
     * @throws PropelException
     */
    public function countSpyProductSearches(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyProductSearchesPartial && !$this->isNew();
        if (null === $this->collSpyProductSearches || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyProductSearches) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyProductSearches());
            }

            $query = SpyProductSearchQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySpyProduct($this)
                ->count($con);
        }

        return count($this->collSpyProductSearches);
    }

    /**
     * Method called to associate a SpyProductSearch object to this object
     * through the SpyProductSearch foreign key attribute.
     *
     * @param  SpyProductSearch $l SpyProductSearch
     * @return $this|\Orm\Zed\Product\Persistence\SpyProduct The current object (for fluent API support)
     */
    public function addSpyProductSearch(SpyProductSearch $l)
    {
        if ($this->collSpyProductSearches === null) {
            $this->initSpyProductSearches();
            $this->collSpyProductSearchesPartial = true;
        }

        if (!$this->collSpyProductSearches->contains($l)) {
            $this->doAddSpyProductSearch($l);

            if ($this->spyProductSearchesScheduledForDeletion and $this->spyProductSearchesScheduledForDeletion->contains($l)) {
                $this->spyProductSearchesScheduledForDeletion->remove($this->spyProductSearchesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyProductSearch $spyProductSearch The SpyProductSearch object to add.
     */
    protected function doAddSpyProductSearch(SpyProductSearch $spyProductSearch)
    {
        $this->collSpyProductSearches[]= $spyProductSearch;
        $spyProductSearch->setSpyProduct($this);
    }

    /**
     * @param  SpyProductSearch $spyProductSearch The SpyProductSearch object to remove.
     * @return $this|ChildSpyProduct The current object (for fluent API support)
     */
    public function removeSpyProductSearch(SpyProductSearch $spyProductSearch)
    {
        if ($this->getSpyProductSearches()->contains($spyProductSearch)) {
            $pos = $this->collSpyProductSearches->search($spyProductSearch);
            $this->collSpyProductSearches->remove($pos);
            if (null === $this->spyProductSearchesScheduledForDeletion) {
                $this->spyProductSearchesScheduledForDeletion = clone $this->collSpyProductSearches;
                $this->spyProductSearchesScheduledForDeletion->clear();
            }
            $this->spyProductSearchesScheduledForDeletion[]= $spyProductSearch;
            $spyProductSearch->setSpyProduct(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyProduct is new, it will return
     * an empty collection; or if this SpyProduct has previously
     * been saved, it will retrieve related SpyProductSearches from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyProduct.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyProductSearch[] List of SpyProductSearch objects
     * @phpstan-return ObjectCollection&\Traversable<SpyProductSearch}> List of SpyProductSearch objects
     */
    public function getSpyProductSearchesJoinSpyLocale(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyProductSearchQuery::create(null, $criteria);
        $query->joinWith('SpyLocale', $joinBehavior);

        return $this->getSpyProductSearches($query, $con);
    }

    /**
     * Clears out the collSpyProductValidities collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyProductValidities()
     */
    public function clearSpyProductValidities()
    {
        $this->collSpyProductValidities = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSpyProductValidities collection loaded partially.
     */
    public function resetPartialSpyProductValidities($v = true)
    {
        $this->collSpyProductValiditiesPartial = $v;
    }

    /**
     * Initializes the collSpyProductValidities collection.
     *
     * By default this just sets the collSpyProductValidities collection to an empty array (like clearcollSpyProductValidities());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyProductValidities($overrideExisting = true)
    {
        if (null !== $this->collSpyProductValidities && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyProductValidityTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyProductValidities = new $collectionClassName;
        $this->collSpyProductValidities->setModel('\Orm\Zed\ProductValidity\Persistence\SpyProductValidity');
    }

    /**
     * Gets an array of SpyProductValidity objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyProduct is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyProductValidity[] List of SpyProductValidity objects
     * @phpstan-return ObjectCollection&\Traversable<SpyProductValidity> List of SpyProductValidity objects
     * @throws PropelException
     */
    public function getSpyProductValidities(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyProductValiditiesPartial && !$this->isNew();
        if (null === $this->collSpyProductValidities || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyProductValidities) {
                    $this->initSpyProductValidities();
                } else {
                    $collectionClassName = SpyProductValidityTableMap::getTableMap()->getCollectionClassName();

                    $collSpyProductValidities = new $collectionClassName;
                    $collSpyProductValidities->setModel('\Orm\Zed\ProductValidity\Persistence\SpyProductValidity');

                    return $collSpyProductValidities;
                }
            } else {
                $collSpyProductValidities = SpyProductValidityQuery::create(null, $criteria)
                    ->filterBySpyProduct($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyProductValiditiesPartial && count($collSpyProductValidities)) {
                        $this->initSpyProductValidities(false);

                        foreach ($collSpyProductValidities as $obj) {
                            if (false == $this->collSpyProductValidities->contains($obj)) {
                                $this->collSpyProductValidities->append($obj);
                            }
                        }

                        $this->collSpyProductValiditiesPartial = true;
                    }

                    return $collSpyProductValidities;
                }

                if ($partial && $this->collSpyProductValidities) {
                    foreach ($this->collSpyProductValidities as $obj) {
                        if ($obj->isNew()) {
                            $collSpyProductValidities[] = $obj;
                        }
                    }
                }

                $this->collSpyProductValidities = $collSpyProductValidities;
                $this->collSpyProductValiditiesPartial = false;
            }
        }

        return $this->collSpyProductValidities;
    }

    /**
     * Sets a collection of SpyProductValidity objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $spyProductValidities A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyProduct The current object (for fluent API support)
     */
    public function setSpyProductValidities(Collection $spyProductValidities, ConnectionInterface $con = null)
    {
        /** @var SpyProductValidity[] $spyProductValiditiesToDelete */
        $spyProductValiditiesToDelete = $this->getSpyProductValidities(new Criteria(), $con)->diff($spyProductValidities);


        $this->spyProductValiditiesScheduledForDeletion = $spyProductValiditiesToDelete;

        foreach ($spyProductValiditiesToDelete as $spyProductValidityRemoved) {
            $spyProductValidityRemoved->setSpyProduct(null);
        }

        $this->collSpyProductValidities = null;
        foreach ($spyProductValidities as $spyProductValidity) {
            $this->addSpyProductValidity($spyProductValidity);
        }

        $this->collSpyProductValidities = $spyProductValidities;
        $this->collSpyProductValiditiesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyProductValidity objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyProductValidity objects.
     * @throws PropelException
     */
    public function countSpyProductValidities(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyProductValiditiesPartial && !$this->isNew();
        if (null === $this->collSpyProductValidities || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyProductValidities) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyProductValidities());
            }

            $query = SpyProductValidityQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySpyProduct($this)
                ->count($con);
        }

        return count($this->collSpyProductValidities);
    }

    /**
     * Method called to associate a SpyProductValidity object to this object
     * through the SpyProductValidity foreign key attribute.
     *
     * @param  SpyProductValidity $l SpyProductValidity
     * @return $this|\Orm\Zed\Product\Persistence\SpyProduct The current object (for fluent API support)
     */
    public function addSpyProductValidity(SpyProductValidity $l)
    {
        if ($this->collSpyProductValidities === null) {
            $this->initSpyProductValidities();
            $this->collSpyProductValiditiesPartial = true;
        }

        if (!$this->collSpyProductValidities->contains($l)) {
            $this->doAddSpyProductValidity($l);

            if ($this->spyProductValiditiesScheduledForDeletion and $this->spyProductValiditiesScheduledForDeletion->contains($l)) {
                $this->spyProductValiditiesScheduledForDeletion->remove($this->spyProductValiditiesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyProductValidity $spyProductValidity The SpyProductValidity object to add.
     */
    protected function doAddSpyProductValidity(SpyProductValidity $spyProductValidity)
    {
        $this->collSpyProductValidities[]= $spyProductValidity;
        $spyProductValidity->setSpyProduct($this);
    }

    /**
     * @param  SpyProductValidity $spyProductValidity The SpyProductValidity object to remove.
     * @return $this|ChildSpyProduct The current object (for fluent API support)
     */
    public function removeSpyProductValidity(SpyProductValidity $spyProductValidity)
    {
        if ($this->getSpyProductValidities()->contains($spyProductValidity)) {
            $pos = $this->collSpyProductValidities->search($spyProductValidity);
            $this->collSpyProductValidities->remove($pos);
            if (null === $this->spyProductValiditiesScheduledForDeletion) {
                $this->spyProductValiditiesScheduledForDeletion = clone $this->collSpyProductValidities;
                $this->spyProductValiditiesScheduledForDeletion->clear();
            }
            $this->spyProductValiditiesScheduledForDeletion[]= clone $spyProductValidity;
            $spyProductValidity->setSpyProduct(null);
        }

        return $this;
    }

    /**
     * Clears out the collStockProducts collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addStockProducts()
     */
    public function clearStockProducts()
    {
        $this->collStockProducts = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collStockProducts collection loaded partially.
     */
    public function resetPartialStockProducts($v = true)
    {
        $this->collStockProductsPartial = $v;
    }

    /**
     * Initializes the collStockProducts collection.
     *
     * By default this just sets the collStockProducts collection to an empty array (like clearcollStockProducts());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initStockProducts($overrideExisting = true)
    {
        if (null !== $this->collStockProducts && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyStockProductTableMap::getTableMap()->getCollectionClassName();

        $this->collStockProducts = new $collectionClassName;
        $this->collStockProducts->setModel('\Orm\Zed\Stock\Persistence\SpyStockProduct');
    }

    /**
     * Gets an array of SpyStockProduct objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyProduct is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyStockProduct[] List of SpyStockProduct objects
     * @phpstan-return ObjectCollection&\Traversable<SpyStockProduct> List of SpyStockProduct objects
     * @throws PropelException
     */
    public function getStockProducts(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collStockProductsPartial && !$this->isNew();
        if (null === $this->collStockProducts || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collStockProducts) {
                    $this->initStockProducts();
                } else {
                    $collectionClassName = SpyStockProductTableMap::getTableMap()->getCollectionClassName();

                    $collStockProducts = new $collectionClassName;
                    $collStockProducts->setModel('\Orm\Zed\Stock\Persistence\SpyStockProduct');

                    return $collStockProducts;
                }
            } else {
                $collStockProducts = SpyStockProductQuery::create(null, $criteria)
                    ->filterBySpyProduct($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collStockProductsPartial && count($collStockProducts)) {
                        $this->initStockProducts(false);

                        foreach ($collStockProducts as $obj) {
                            if (false == $this->collStockProducts->contains($obj)) {
                                $this->collStockProducts->append($obj);
                            }
                        }

                        $this->collStockProductsPartial = true;
                    }

                    return $collStockProducts;
                }

                if ($partial && $this->collStockProducts) {
                    foreach ($this->collStockProducts as $obj) {
                        if ($obj->isNew()) {
                            $collStockProducts[] = $obj;
                        }
                    }
                }

                $this->collStockProducts = $collStockProducts;
                $this->collStockProductsPartial = false;
            }
        }

        return $this->collStockProducts;
    }

    /**
     * Sets a collection of SpyStockProduct objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $stockProducts A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyProduct The current object (for fluent API support)
     */
    public function setStockProducts(Collection $stockProducts, ConnectionInterface $con = null)
    {
        /** @var SpyStockProduct[] $stockProductsToDelete */
        $stockProductsToDelete = $this->getStockProducts(new Criteria(), $con)->diff($stockProducts);


        $this->stockProductsScheduledForDeletion = $stockProductsToDelete;

        foreach ($stockProductsToDelete as $stockProductRemoved) {
            $stockProductRemoved->setSpyProduct(null);
        }

        $this->collStockProducts = null;
        foreach ($stockProducts as $stockProduct) {
            $this->addStockProduct($stockProduct);
        }

        $this->collStockProducts = $stockProducts;
        $this->collStockProductsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyStockProduct objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BaseSpyStockProduct objects.
     * @throws PropelException
     */
    public function countStockProducts(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collStockProductsPartial && !$this->isNew();
        if (null === $this->collStockProducts || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collStockProducts) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getStockProducts());
            }

            $query = SpyStockProductQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySpyProduct($this)
                ->count($con);
        }

        return count($this->collStockProducts);
    }

    /**
     * Method called to associate a SpyStockProduct object to this object
     * through the SpyStockProduct foreign key attribute.
     *
     * @param  SpyStockProduct $l SpyStockProduct
     * @return $this|\Orm\Zed\Product\Persistence\SpyProduct The current object (for fluent API support)
     */
    public function addStockProduct(SpyStockProduct $l)
    {
        if ($this->collStockProducts === null) {
            $this->initStockProducts();
            $this->collStockProductsPartial = true;
        }

        if (!$this->collStockProducts->contains($l)) {
            $this->doAddStockProduct($l);

            if ($this->stockProductsScheduledForDeletion and $this->stockProductsScheduledForDeletion->contains($l)) {
                $this->stockProductsScheduledForDeletion->remove($this->stockProductsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyStockProduct $stockProduct The SpyStockProduct object to add.
     */
    protected function doAddStockProduct(SpyStockProduct $stockProduct)
    {
        $this->collStockProducts[]= $stockProduct;
        $stockProduct->setSpyProduct($this);
    }

    /**
     * @param  SpyStockProduct $stockProduct The SpyStockProduct object to remove.
     * @return $this|ChildSpyProduct The current object (for fluent API support)
     */
    public function removeStockProduct(SpyStockProduct $stockProduct)
    {
        if ($this->getStockProducts()->contains($stockProduct)) {
            $pos = $this->collStockProducts->search($stockProduct);
            $this->collStockProducts->remove($pos);
            if (null === $this->stockProductsScheduledForDeletion) {
                $this->stockProductsScheduledForDeletion = clone $this->collStockProducts;
                $this->stockProductsScheduledForDeletion->clear();
            }
            $this->stockProductsScheduledForDeletion[]= clone $stockProduct;
            $stockProduct->setSpyProduct(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyProduct is new, it will return
     * an empty collection; or if this SpyProduct has previously
     * been saved, it will retrieve related StockProducts from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyProduct.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|SpyStockProduct[] List of SpyStockProduct objects
     * @phpstan-return ObjectCollection&\Traversable<SpyStockProduct}> List of SpyStockProduct objects
     */
    public function getStockProductsJoinStock(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = SpyStockProductQuery::create(null, $criteria);
        $query->joinWith('Stock', $joinBehavior);

        return $this->getStockProducts($query, $con);
    }

    /**
     * Clears out the collSpyProductLists collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSpyProductLists()
     */
    public function clearSpyProductLists()
    {
        $this->collSpyProductLists = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Initializes the collSpyProductLists crossRef collection.
     *
     * By default this just sets the collSpyProductLists collection to an empty collection (like clearSpyProductLists());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @return void
     */
    public function initSpyProductLists()
    {
        $collectionClassName = SpyProductListProductConcreteTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyProductLists = new $collectionClassName;
        $this->collSpyProductListsPartial = true;
        $this->collSpyProductLists->setModel('\Orm\Zed\ProductList\Persistence\SpyProductList');
    }

    /**
     * Checks if the collSpyProductLists collection is loaded.
     *
     * @return bool
     */
    public function isSpyProductListsLoaded()
    {
        return null !== $this->collSpyProductLists;
    }

    /**
     * Gets a collection of SpyProductList objects related by a many-to-many relationship
     * to the current object by way of the spy_product_list_product_concrete cross-reference table.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyProduct is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria Optional query object to filter the query
     * @param      ConnectionInterface $con Optional connection object
     *
     * @return ObjectCollection|SpyProductList[] List of SpyProductList objects
     * @phpstan-return ObjectCollection&\Traversable<SpyProductList> List of SpyProductList objects
     */
    public function getSpyProductLists(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyProductListsPartial && !$this->isNew();
        if (null === $this->collSpyProductLists || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyProductLists) {
                    $this->initSpyProductLists();
                }
            } else {

                $query = SpyProductListQuery::create(null, $criteria)
                    ->filterBySpyProduct($this);
                $collSpyProductLists = $query->find($con);
                if (null !== $criteria) {
                    return $collSpyProductLists;
                }

                if ($partial && $this->collSpyProductLists) {
                    //make sure that already added objects gets added to the list of the database.
                    foreach ($this->collSpyProductLists as $obj) {
                        if (!$collSpyProductLists->contains($obj)) {
                            $collSpyProductLists[] = $obj;
                        }
                    }
                }

                $this->collSpyProductLists = $collSpyProductLists;
                $this->collSpyProductListsPartial = false;
            }
        }

        return $this->collSpyProductLists;
    }

    /**
     * Sets a collection of SpyProductList objects related by a many-to-many relationship
     * to the current object by way of the spy_product_list_product_concrete cross-reference table.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param  Collection $spyProductLists A Propel collection.
     * @param  ConnectionInterface $con Optional connection object
     * @return $this|ChildSpyProduct The current object (for fluent API support)
     */
    public function setSpyProductLists(Collection $spyProductLists, ConnectionInterface $con = null)
    {
        $this->clearSpyProductLists();
        $currentSpyProductLists = $this->getSpyProductLists();

        $spyProductListsScheduledForDeletion = $currentSpyProductLists->diff($spyProductLists);

        foreach ($spyProductListsScheduledForDeletion as $toDelete) {
            $this->removeSpyProductList($toDelete);
        }

        foreach ($spyProductLists as $spyProductList) {
            if (!$currentSpyProductLists->contains($spyProductList)) {
                $this->doAddSpyProductList($spyProductList);
            }
        }

        $this->collSpyProductListsPartial = false;
        $this->collSpyProductLists = $spyProductLists;

        return $this;
    }

    /**
     * Gets the number of SpyProductList objects related by a many-to-many relationship
     * to the current object by way of the spy_product_list_product_concrete cross-reference table.
     *
     * @param      Criteria $criteria Optional query object to filter the query
     * @param      boolean $distinct Set to true to force count distinct
     * @param      ConnectionInterface $con Optional connection object
     *
     * @return int the number of related SpyProductList objects
     */
    public function countSpyProductLists(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSpyProductListsPartial && !$this->isNew();
        if (null === $this->collSpyProductLists || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyProductLists) {
                return 0;
            } else {

                if ($partial && !$criteria) {
                    return count($this->getSpyProductLists());
                }

                $query = SpyProductListQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterBySpyProduct($this)
                    ->count($con);
            }
        } else {
            return count($this->collSpyProductLists);
        }
    }

    /**
     * Associate a SpyProductList to this object
     * through the spy_product_list_product_concrete cross reference table.
     *
     * @param SpyProductList $spyProductList
     * @return ChildSpyProduct The current object (for fluent API support)
     */
    public function addSpyProductList(SpyProductList $spyProductList)
    {
        if ($this->collSpyProductLists === null) {
            $this->initSpyProductLists();
        }

        if (!$this->getSpyProductLists()->contains($spyProductList)) {
            // only add it if the **same** object is not already associated
            $this->collSpyProductLists->push($spyProductList);
            $this->doAddSpyProductList($spyProductList);
        }

        return $this;
    }

    /**
     *
     * @param SpyProductList $spyProductList
     */
    protected function doAddSpyProductList(SpyProductList $spyProductList)
    {
        $spyProductListProductConcrete = new SpyProductListProductConcrete();

        $spyProductListProductConcrete->setSpyProductList($spyProductList);

        $spyProductListProductConcrete->setSpyProduct($this);

        $this->addSpyProductListProductConcrete($spyProductListProductConcrete);

        // set the back reference to this object directly as using provided method either results
        // in endless loop or in multiple relations
        if (!$spyProductList->isSpyProductsLoaded()) {
            $spyProductList->initSpyProducts();
            $spyProductList->getSpyProducts()->push($this);
        } elseif (!$spyProductList->getSpyProducts()->contains($this)) {
            $spyProductList->getSpyProducts()->push($this);
        }

    }

    /**
     * Remove spyProductList of this object
     * through the spy_product_list_product_concrete cross reference table.
     *
     * @param SpyProductList $spyProductList
     * @return ChildSpyProduct The current object (for fluent API support)
     */
    public function removeSpyProductList(SpyProductList $spyProductList)
    {
        if ($this->getSpyProductLists()->contains($spyProductList)) {
            $spyProductListProductConcrete = new SpyProductListProductConcrete();
            $spyProductListProductConcrete->setSpyProductList($spyProductList);
            if ($spyProductList->isSpyProductsLoaded()) {
                //remove the back reference if available
                $spyProductList->getSpyProducts()->removeObject($this);
            }

            $spyProductListProductConcrete->setSpyProduct($this);
            $this->removeSpyProductListProductConcrete(clone $spyProductListProductConcrete);
            $spyProductListProductConcrete->clear();

            $this->collSpyProductLists->remove($this->collSpyProductLists->search($spyProductList));

            if (null === $this->spyProductListsScheduledForDeletion) {
                $this->spyProductListsScheduledForDeletion = clone $this->collSpyProductLists;
                $this->spyProductListsScheduledForDeletion->clear();
            }

            $this->spyProductListsScheduledForDeletion->push($spyProductList);
        }


        return $this;
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aSpyProductAbstract) {
            $this->aSpyProductAbstract->removeSpyProduct($this);
        }
        $this->id_product = null;
        $this->fk_product_abstract = null;
        $this->attributes = null;
        $this->is_active = null;
        $this->is_quantity_splittable = null;
        $this->sku = null;
        $this->created_at = null;
        $this->updated_at = null;
        $this->alreadyInSave = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references and back-references to other model objects or collections of model objects.
     *
     * This method is used to reset all php object references (not the actual reference in the database).
     * Necessary for object serialisation.
     *
     * @param      boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep) {
            if ($this->collPriceProducts) {
                foreach ($this->collPriceProducts as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collPriceProductMerchantRelationships) {
                foreach ($this->collPriceProductMerchantRelationships as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collPriceProductSchedules) {
                foreach ($this->collPriceProductSchedules as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSpyProductLocalizedAttributess) {
                foreach ($this->collSpyProductLocalizedAttributess as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSpyProductAlternativesRelatedByFkProduct) {
                foreach ($this->collSpyProductAlternativesRelatedByFkProduct as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSpyProductAlternativesRelatedByFkProductConcreteAlternative) {
                foreach ($this->collSpyProductAlternativesRelatedByFkProductConcreteAlternative as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSpyProductBundlesRelatedByFkBundledProduct) {
                foreach ($this->collSpyProductBundlesRelatedByFkBundledProduct as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSpyProductBundlesRelatedByFkProduct) {
                foreach ($this->collSpyProductBundlesRelatedByFkProduct as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSpyProductDiscontinueds) {
                foreach ($this->collSpyProductDiscontinueds as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSpyProductImageSets) {
                foreach ($this->collSpyProductImageSets as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSpyProductListProductConcretes) {
                foreach ($this->collSpyProductListProductConcretes as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSpyProductMeasurementSalesUnits) {
                foreach ($this->collSpyProductMeasurementSalesUnits as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSpyProductPackagingUnitsRelatedByFkProduct) {
                foreach ($this->collSpyProductPackagingUnitsRelatedByFkProduct as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSpyProductPackagingUnitsRelatedByFkLeadProduct) {
                foreach ($this->collSpyProductPackagingUnitsRelatedByFkLeadProduct as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSpyProductQuantities) {
                foreach ($this->collSpyProductQuantities as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSpyProductSearches) {
                foreach ($this->collSpyProductSearches as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSpyProductValidities) {
                foreach ($this->collSpyProductValidities as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collStockProducts) {
                foreach ($this->collStockProducts as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSpyProductLists) {
                foreach ($this->collSpyProductLists as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collPriceProducts = null;
        $this->collPriceProductMerchantRelationships = null;
        $this->collPriceProductSchedules = null;
        $this->collSpyProductLocalizedAttributess = null;
        $this->collSpyProductAlternativesRelatedByFkProduct = null;
        $this->collSpyProductAlternativesRelatedByFkProductConcreteAlternative = null;
        $this->collSpyProductBundlesRelatedByFkBundledProduct = null;
        $this->collSpyProductBundlesRelatedByFkProduct = null;
        $this->collSpyProductDiscontinueds = null;
        $this->collSpyProductImageSets = null;
        $this->collSpyProductListProductConcretes = null;
        $this->collSpyProductMeasurementSalesUnits = null;
        $this->collSpyProductPackagingUnitsRelatedByFkProduct = null;
        $this->collSpyProductPackagingUnitsRelatedByFkLeadProduct = null;
        $this->collSpyProductQuantities = null;
        $this->collSpyProductSearches = null;
        $this->collSpyProductValidities = null;
        $this->collStockProducts = null;
        $this->collSpyProductLists = null;
        $this->aSpyProductAbstract = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SpyProductTableMap::DEFAULT_STRING_FORMAT);
    }

    // timestampable behavior

    /**
     * Mark the current object so that the update date doesn't get updated during next save
     *
     * @return     $this|ChildSpyProduct The current object (for fluent API support)
     */
    public function keepUpdateDateUnchanged()
    {
        $this->modifiedColumns[SpyProductTableMap::COL_UPDATED_AT] = true;

        return $this;
    }

    // event behavior

    /**
     * @return void
     */
    protected function prepareSaveEventName()
    {
        if ($this->isNew()) {
            $this->_eventName = 'Entity.spy_product.create';
        } else {
            $this->_eventName = 'Entity.spy_product.update';
        }

        $this->_modifiedColumns = $this->getModifiedColumns();
        $this->_isModified = $this->isModified();
    }

    /**
     * @return void
     */
    public function disableEvent()
    {
        $this->_isEventDisabled = true;
    }

    /**
     * @return void
     */
    public function enableEvent()
    {
        $this->_isEventDisabled = false;
    }

    /**
     * @return void
     */
    protected function addSaveEventToMemory()
    {
        if ($this->_isEventDisabled) {
            return;
        }

        if ($this->_eventName !== 'Entity.spy_product.create') {
            if (!$this->_isModified) {
                return;
            }

            if (!$this->isEventColumnsModified()) {
                return;
            }
        }

        $data = [
            'name' => 'spy_product',
            'id' => $this->getPrimaryKey(),
            'event' => $this->_eventName,
            'foreignKeys' => $this->getForeignKeys(),
            'modifiedColumns' => $this->_modifiedColumns,
            'originalValues' => $this->getOriginalValues(),
            'additionalValues' => $this->getAdditionalValues(),
        ];

        $this->saveEventBehaviorEntityChange($data);

        unset($this->_eventName);
        unset($this->_modifiedColumns);
        unset($this->_isModified);
    }

    /**
     * @return void
     */
    protected function addDeleteEventToMemory()
    {
        if ($this->_isEventDisabled) {
            return;
        }

        $data = [
            'name' => 'spy_product',
            'id' => $this->getPrimaryKey(),
            'event' => 'Entity.spy_product.delete',
            'foreignKeys' => $this->getForeignKeys(),
            'additionalValues' => $this->getAdditionalValues(),
        ];

        $this->saveEventBehaviorEntityChange($data);
    }

    /**
     * @return array
     */
    protected function getForeignKeys()
    {
        $foreignKeysWithValue = [];
        foreach ($this->_foreignKeys as $key => $value) {
            $foreignKeysWithValue[$key] = $this->getByName($value);
        }

        return $foreignKeysWithValue;
    }

    /**
     * @param array $data
     *
     * @return void
     */
    protected function saveEventBehaviorEntityChange(array $data)
    {
        $isInstancePoolingDisabledSuccessfully = \Propel\Runtime\Propel::disableInstancePooling();

        $spyEventBehaviorEntityChange = new \Orm\Zed\EventBehavior\Persistence\SpyEventBehaviorEntityChange();
        $spyEventBehaviorEntityChange->setData(json_encode($data));
        $spyEventBehaviorEntityChange->setProcessId(\Spryker\Zed\Kernel\RequestIdentifier::getRequestId());
        $spyEventBehaviorEntityChange->save();

        if ($isInstancePoolingDisabledSuccessfully) {
            \Propel\Runtime\Propel::enableInstancePooling();
        }
    }

    /**
     * @return bool
     */
    protected function isEventColumnsModified()
    {
        /* There is a wildcard(*) property for this event */
        return true;
    }

    /**
     * @return array
     */
    protected function getOriginalValueColumnNames(): array
    {
        return [

        ];
    }

    /**
     * @return array
     */
    protected function getOriginalValues(): array
    {
        if ($this->isNew()) {
            return [];
        }

        $originalValues = [];
        foreach ($this->_modifiedColumns as $modifiedColumn) {
            if (!in_array($modifiedColumn, $this->getOriginalValueColumnNames())) {
                continue;
            }

            $before = $this->_initialValues[$modifiedColumn];
            $field = str_replace('spy_product.', '', $modifiedColumn);
            $after = $this->$field;

            if ($before !== $after) {
                $originalValues[$modifiedColumn] = $before;
            }
        }

        return $originalValues;
    }

    /**
     * @return array
     */
    protected function getAdditionalValueColumnNames(): array
    {
        return [

        ];
    }

    /**
     * @return array
     */
    protected function getAdditionalValues(): array
    {
        $additionalValues = [];
        foreach ($this->getAdditionalValueColumnNames() as $additionalValueColumnName) {
            $field = str_replace('spy_product.', '', $additionalValueColumnName);
            $additionalValues[$additionalValueColumnName] = $this->$field;
        }

        return $additionalValues;
    }

    /**
     * @param string $xmlValue
     * @param string $column
     *
     * @return array|bool|\DateTime|float|int|object
     */
    protected function getPhpType($xmlValue, $column)
    {
        $columnType = SpyProductTableMap::getTableMap()->getColumn($column)->getType();
        if (in_array(strtoupper($columnType), ['INTEGER', 'TINYINT', 'SMALLINT'])) {
            $xmlValue = (int) $xmlValue;
        } else if (in_array(strtoupper($columnType), ['REAL', 'FLOAT', 'DOUBLE', 'BINARY', 'VARBINARY', 'LONGVARBINARY'])) {
            $xmlValue = (double) $xmlValue;
        } else if (strtoupper($columnType) === 'ARRAY') {
            $xmlValue = (array) $xmlValue;
        } else if (strtoupper($columnType) === 'BOOLEAN') {
            $xmlValue = filter_var($xmlValue,  FILTER_VALIDATE_BOOLEAN);
        } else if (strtoupper($columnType) === 'OBJECT') {
            $xmlValue = (object) $xmlValue;
        } else if (in_array(strtoupper($columnType), ['DATE', 'TIME', 'TIMESTAMP', 'BU_DATE', 'BU_TIMESTAMP'])) {
            $xmlValue = \DateTime::createFromFormat('Y-m-d H:i:s', $xmlValue);
        }

        return $xmlValue;
    }

    /**
     * Code to be run before persisting the object
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preSave(ConnectionInterface $con = null)
    {
                return true;
    }

    /**
     * Code to be run before inserting to database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preInsert(ConnectionInterface $con = null)
    {
                return true;
    }

    /**
     * Code to be run after inserting to database
     * @param ConnectionInterface $con
     */
    public function postInsert(ConnectionInterface $con = null)
    {
            }

    /**
     * Code to be run before updating the object in database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preUpdate(ConnectionInterface $con = null)
    {
                return true;
    }

    /**
     * Code to be run after updating the object in database
     * @param ConnectionInterface $con
     */
    public function postUpdate(ConnectionInterface $con = null)
    {
            }

    /**
     * Code to be run before deleting the object in database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preDelete(ConnectionInterface $con = null)
    {
                return true;
    }

    /**
     * Code to be run after deleting the object in database
     * @param ConnectionInterface $con
     */
    public function postDelete(ConnectionInterface $con = null)
    {
            }


    /**
     * Derived method to catches calls to undefined methods.
     *
     * Provides magic import/export method support (fromXML()/toXML(), fromYAML()/toYAML(), etc.).
     * Allows to define default __call() behavior if you overwrite __call()
     *
     * @param string $name
     * @param mixed  $params
     *
     * @return array|string
     */
    public function __call($name, $params)
    {
        if (0 === strpos($name, 'get')) {
            $virtualColumn = substr($name, 3);
            if ($this->hasVirtualColumn($virtualColumn)) {
                return $this->getVirtualColumn($virtualColumn);
            }

            $virtualColumn = lcfirst($virtualColumn);
            if ($this->hasVirtualColumn($virtualColumn)) {
                return $this->getVirtualColumn($virtualColumn);
            }
        }

        if (0 === strpos($name, 'from')) {
            $format = substr($name, 4);
            $inputData = $params[0];
            $keyType = $params[1] ?? TableMap::TYPE_PHPNAME;

            return $this->importFrom($format, $inputData, $keyType);
        }

        if (0 === strpos($name, 'to')) {
            $format = substr($name, 2);
            $includeLazyLoadColumns = $params[0] ?? true;
            $keyType = $params[1] ?? TableMap::TYPE_PHPNAME;

            return $this->exportTo($format, $includeLazyLoadColumns, $keyType);
        }

        throw new BadMethodCallException(sprintf('Call to undefined method: %s.', $name));
    }

}
