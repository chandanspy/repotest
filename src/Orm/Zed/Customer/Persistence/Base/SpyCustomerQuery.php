<?php

namespace Orm\Zed\Customer\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\Comment\Persistence\SpyComment;
use Orm\Zed\CompanyUser\Persistence\SpyCompanyUser;
use Orm\Zed\CustomerGroup\Persistence\SpyCustomerGroupToCustomer;
use Orm\Zed\CustomerNote\Persistence\SpyCustomerNote;
use Orm\Zed\Customer\Persistence\SpyCustomer as ChildSpyCustomer;
use Orm\Zed\Customer\Persistence\SpyCustomerQuery as ChildSpyCustomerQuery;
use Orm\Zed\Customer\Persistence\Map\SpyCustomerTableMap;
use Orm\Zed\Locale\Persistence\SpyLocale;
use Orm\Zed\Newsletter\Persistence\SpyNewsletterSubscriber;
use Orm\Zed\ProductCustomerPermission\Persistence\SpyProductCustomerPermission;
use Orm\Zed\User\Persistence\SpyUser;
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
 * Base class that represents a query for the 'spy_customer' table.
 *
 *
 *
 * @method     ChildSpyCustomerQuery orderByIdCustomer($order = Criteria::ASC) Order by the id_customer column
 * @method     ChildSpyCustomerQuery orderByFkLocale($order = Criteria::ASC) Order by the fk_locale column
 * @method     ChildSpyCustomerQuery orderByFkUser($order = Criteria::ASC) Order by the fk_user column
 * @method     ChildSpyCustomerQuery orderByAnonymizedAt($order = Criteria::ASC) Order by the anonymized_at column
 * @method     ChildSpyCustomerQuery orderByCompany($order = Criteria::ASC) Order by the company column
 * @method     ChildSpyCustomerQuery orderByCustomerReference($order = Criteria::ASC) Order by the customer_reference column
 * @method     ChildSpyCustomerQuery orderByDateOfBirth($order = Criteria::ASC) Order by the date_of_birth column
 * @method     ChildSpyCustomerQuery orderByDefaultBillingAddress($order = Criteria::ASC) Order by the default_billing_address column
 * @method     ChildSpyCustomerQuery orderByDefaultShippingAddress($order = Criteria::ASC) Order by the default_shipping_address column
 * @method     ChildSpyCustomerQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     ChildSpyCustomerQuery orderByFirstName($order = Criteria::ASC) Order by the first_name column
 * @method     ChildSpyCustomerQuery orderByGender($order = Criteria::ASC) Order by the gender column
 * @method     ChildSpyCustomerQuery orderByLastName($order = Criteria::ASC) Order by the last_name column
 * @method     ChildSpyCustomerQuery orderByPassword($order = Criteria::ASC) Order by the password column
 * @method     ChildSpyCustomerQuery orderByPhone($order = Criteria::ASC) Order by the phone column
 * @method     ChildSpyCustomerQuery orderByRegistered($order = Criteria::ASC) Order by the registered column
 * @method     ChildSpyCustomerQuery orderByRegistrationKey($order = Criteria::ASC) Order by the registration_key column
 * @method     ChildSpyCustomerQuery orderByRestorePasswordDate($order = Criteria::ASC) Order by the restore_password_date column
 * @method     ChildSpyCustomerQuery orderByRestorePasswordKey($order = Criteria::ASC) Order by the restore_password_key column
 * @method     ChildSpyCustomerQuery orderBySalutation($order = Criteria::ASC) Order by the salutation column
 * @method     ChildSpyCustomerQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildSpyCustomerQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ChildSpyCustomerQuery groupByIdCustomer() Group by the id_customer column
 * @method     ChildSpyCustomerQuery groupByFkLocale() Group by the fk_locale column
 * @method     ChildSpyCustomerQuery groupByFkUser() Group by the fk_user column
 * @method     ChildSpyCustomerQuery groupByAnonymizedAt() Group by the anonymized_at column
 * @method     ChildSpyCustomerQuery groupByCompany() Group by the company column
 * @method     ChildSpyCustomerQuery groupByCustomerReference() Group by the customer_reference column
 * @method     ChildSpyCustomerQuery groupByDateOfBirth() Group by the date_of_birth column
 * @method     ChildSpyCustomerQuery groupByDefaultBillingAddress() Group by the default_billing_address column
 * @method     ChildSpyCustomerQuery groupByDefaultShippingAddress() Group by the default_shipping_address column
 * @method     ChildSpyCustomerQuery groupByEmail() Group by the email column
 * @method     ChildSpyCustomerQuery groupByFirstName() Group by the first_name column
 * @method     ChildSpyCustomerQuery groupByGender() Group by the gender column
 * @method     ChildSpyCustomerQuery groupByLastName() Group by the last_name column
 * @method     ChildSpyCustomerQuery groupByPassword() Group by the password column
 * @method     ChildSpyCustomerQuery groupByPhone() Group by the phone column
 * @method     ChildSpyCustomerQuery groupByRegistered() Group by the registered column
 * @method     ChildSpyCustomerQuery groupByRegistrationKey() Group by the registration_key column
 * @method     ChildSpyCustomerQuery groupByRestorePasswordDate() Group by the restore_password_date column
 * @method     ChildSpyCustomerQuery groupByRestorePasswordKey() Group by the restore_password_key column
 * @method     ChildSpyCustomerQuery groupBySalutation() Group by the salutation column
 * @method     ChildSpyCustomerQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildSpyCustomerQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ChildSpyCustomerQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyCustomerQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyCustomerQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyCustomerQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyCustomerQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyCustomerQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyCustomerQuery leftJoinSpyUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyUser relation
 * @method     ChildSpyCustomerQuery rightJoinSpyUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyUser relation
 * @method     ChildSpyCustomerQuery innerJoinSpyUser($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyUser relation
 *
 * @method     ChildSpyCustomerQuery joinWithSpyUser($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyUser relation
 *
 * @method     ChildSpyCustomerQuery leftJoinWithSpyUser() Adds a LEFT JOIN clause and with to the query using the SpyUser relation
 * @method     ChildSpyCustomerQuery rightJoinWithSpyUser() Adds a RIGHT JOIN clause and with to the query using the SpyUser relation
 * @method     ChildSpyCustomerQuery innerJoinWithSpyUser() Adds a INNER JOIN clause and with to the query using the SpyUser relation
 *
 * @method     ChildSpyCustomerQuery leftJoinBillingAddress($relationAlias = null) Adds a LEFT JOIN clause to the query using the BillingAddress relation
 * @method     ChildSpyCustomerQuery rightJoinBillingAddress($relationAlias = null) Adds a RIGHT JOIN clause to the query using the BillingAddress relation
 * @method     ChildSpyCustomerQuery innerJoinBillingAddress($relationAlias = null) Adds a INNER JOIN clause to the query using the BillingAddress relation
 *
 * @method     ChildSpyCustomerQuery joinWithBillingAddress($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the BillingAddress relation
 *
 * @method     ChildSpyCustomerQuery leftJoinWithBillingAddress() Adds a LEFT JOIN clause and with to the query using the BillingAddress relation
 * @method     ChildSpyCustomerQuery rightJoinWithBillingAddress() Adds a RIGHT JOIN clause and with to the query using the BillingAddress relation
 * @method     ChildSpyCustomerQuery innerJoinWithBillingAddress() Adds a INNER JOIN clause and with to the query using the BillingAddress relation
 *
 * @method     ChildSpyCustomerQuery leftJoinShippingAddress($relationAlias = null) Adds a LEFT JOIN clause to the query using the ShippingAddress relation
 * @method     ChildSpyCustomerQuery rightJoinShippingAddress($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ShippingAddress relation
 * @method     ChildSpyCustomerQuery innerJoinShippingAddress($relationAlias = null) Adds a INNER JOIN clause to the query using the ShippingAddress relation
 *
 * @method     ChildSpyCustomerQuery joinWithShippingAddress($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ShippingAddress relation
 *
 * @method     ChildSpyCustomerQuery leftJoinWithShippingAddress() Adds a LEFT JOIN clause and with to the query using the ShippingAddress relation
 * @method     ChildSpyCustomerQuery rightJoinWithShippingAddress() Adds a RIGHT JOIN clause and with to the query using the ShippingAddress relation
 * @method     ChildSpyCustomerQuery innerJoinWithShippingAddress() Adds a INNER JOIN clause and with to the query using the ShippingAddress relation
 *
 * @method     ChildSpyCustomerQuery leftJoinLocale($relationAlias = null) Adds a LEFT JOIN clause to the query using the Locale relation
 * @method     ChildSpyCustomerQuery rightJoinLocale($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Locale relation
 * @method     ChildSpyCustomerQuery innerJoinLocale($relationAlias = null) Adds a INNER JOIN clause to the query using the Locale relation
 *
 * @method     ChildSpyCustomerQuery joinWithLocale($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Locale relation
 *
 * @method     ChildSpyCustomerQuery leftJoinWithLocale() Adds a LEFT JOIN clause and with to the query using the Locale relation
 * @method     ChildSpyCustomerQuery rightJoinWithLocale() Adds a RIGHT JOIN clause and with to the query using the Locale relation
 * @method     ChildSpyCustomerQuery innerJoinWithLocale() Adds a INNER JOIN clause and with to the query using the Locale relation
 *
 * @method     ChildSpyCustomerQuery leftJoinSpyComment($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyComment relation
 * @method     ChildSpyCustomerQuery rightJoinSpyComment($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyComment relation
 * @method     ChildSpyCustomerQuery innerJoinSpyComment($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyComment relation
 *
 * @method     ChildSpyCustomerQuery joinWithSpyComment($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyComment relation
 *
 * @method     ChildSpyCustomerQuery leftJoinWithSpyComment() Adds a LEFT JOIN clause and with to the query using the SpyComment relation
 * @method     ChildSpyCustomerQuery rightJoinWithSpyComment() Adds a RIGHT JOIN clause and with to the query using the SpyComment relation
 * @method     ChildSpyCustomerQuery innerJoinWithSpyComment() Adds a INNER JOIN clause and with to the query using the SpyComment relation
 *
 * @method     ChildSpyCustomerQuery leftJoinCompanyUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the CompanyUser relation
 * @method     ChildSpyCustomerQuery rightJoinCompanyUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CompanyUser relation
 * @method     ChildSpyCustomerQuery innerJoinCompanyUser($relationAlias = null) Adds a INNER JOIN clause to the query using the CompanyUser relation
 *
 * @method     ChildSpyCustomerQuery joinWithCompanyUser($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the CompanyUser relation
 *
 * @method     ChildSpyCustomerQuery leftJoinWithCompanyUser() Adds a LEFT JOIN clause and with to the query using the CompanyUser relation
 * @method     ChildSpyCustomerQuery rightJoinWithCompanyUser() Adds a RIGHT JOIN clause and with to the query using the CompanyUser relation
 * @method     ChildSpyCustomerQuery innerJoinWithCompanyUser() Adds a INNER JOIN clause and with to the query using the CompanyUser relation
 *
 * @method     ChildSpyCustomerQuery leftJoinAddress($relationAlias = null) Adds a LEFT JOIN clause to the query using the Address relation
 * @method     ChildSpyCustomerQuery rightJoinAddress($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Address relation
 * @method     ChildSpyCustomerQuery innerJoinAddress($relationAlias = null) Adds a INNER JOIN clause to the query using the Address relation
 *
 * @method     ChildSpyCustomerQuery joinWithAddress($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Address relation
 *
 * @method     ChildSpyCustomerQuery leftJoinWithAddress() Adds a LEFT JOIN clause and with to the query using the Address relation
 * @method     ChildSpyCustomerQuery rightJoinWithAddress() Adds a RIGHT JOIN clause and with to the query using the Address relation
 * @method     ChildSpyCustomerQuery innerJoinWithAddress() Adds a INNER JOIN clause and with to the query using the Address relation
 *
 * @method     ChildSpyCustomerQuery leftJoinSpyCustomerGroupToCustomer($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyCustomerGroupToCustomer relation
 * @method     ChildSpyCustomerQuery rightJoinSpyCustomerGroupToCustomer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyCustomerGroupToCustomer relation
 * @method     ChildSpyCustomerQuery innerJoinSpyCustomerGroupToCustomer($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyCustomerGroupToCustomer relation
 *
 * @method     ChildSpyCustomerQuery joinWithSpyCustomerGroupToCustomer($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyCustomerGroupToCustomer relation
 *
 * @method     ChildSpyCustomerQuery leftJoinWithSpyCustomerGroupToCustomer() Adds a LEFT JOIN clause and with to the query using the SpyCustomerGroupToCustomer relation
 * @method     ChildSpyCustomerQuery rightJoinWithSpyCustomerGroupToCustomer() Adds a RIGHT JOIN clause and with to the query using the SpyCustomerGroupToCustomer relation
 * @method     ChildSpyCustomerQuery innerJoinWithSpyCustomerGroupToCustomer() Adds a INNER JOIN clause and with to the query using the SpyCustomerGroupToCustomer relation
 *
 * @method     ChildSpyCustomerQuery leftJoinCustomerNote($relationAlias = null) Adds a LEFT JOIN clause to the query using the CustomerNote relation
 * @method     ChildSpyCustomerQuery rightJoinCustomerNote($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CustomerNote relation
 * @method     ChildSpyCustomerQuery innerJoinCustomerNote($relationAlias = null) Adds a INNER JOIN clause to the query using the CustomerNote relation
 *
 * @method     ChildSpyCustomerQuery joinWithCustomerNote($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the CustomerNote relation
 *
 * @method     ChildSpyCustomerQuery leftJoinWithCustomerNote() Adds a LEFT JOIN clause and with to the query using the CustomerNote relation
 * @method     ChildSpyCustomerQuery rightJoinWithCustomerNote() Adds a RIGHT JOIN clause and with to the query using the CustomerNote relation
 * @method     ChildSpyCustomerQuery innerJoinWithCustomerNote() Adds a INNER JOIN clause and with to the query using the CustomerNote relation
 *
 * @method     ChildSpyCustomerQuery leftJoinSpyNewsletterSubscriber($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyNewsletterSubscriber relation
 * @method     ChildSpyCustomerQuery rightJoinSpyNewsletterSubscriber($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyNewsletterSubscriber relation
 * @method     ChildSpyCustomerQuery innerJoinSpyNewsletterSubscriber($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyNewsletterSubscriber relation
 *
 * @method     ChildSpyCustomerQuery joinWithSpyNewsletterSubscriber($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyNewsletterSubscriber relation
 *
 * @method     ChildSpyCustomerQuery leftJoinWithSpyNewsletterSubscriber() Adds a LEFT JOIN clause and with to the query using the SpyNewsletterSubscriber relation
 * @method     ChildSpyCustomerQuery rightJoinWithSpyNewsletterSubscriber() Adds a RIGHT JOIN clause and with to the query using the SpyNewsletterSubscriber relation
 * @method     ChildSpyCustomerQuery innerJoinWithSpyNewsletterSubscriber() Adds a INNER JOIN clause and with to the query using the SpyNewsletterSubscriber relation
 *
 * @method     ChildSpyCustomerQuery leftJoinSpyProductCustomerPermission($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyProductCustomerPermission relation
 * @method     ChildSpyCustomerQuery rightJoinSpyProductCustomerPermission($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyProductCustomerPermission relation
 * @method     ChildSpyCustomerQuery innerJoinSpyProductCustomerPermission($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyProductCustomerPermission relation
 *
 * @method     ChildSpyCustomerQuery joinWithSpyProductCustomerPermission($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyProductCustomerPermission relation
 *
 * @method     ChildSpyCustomerQuery leftJoinWithSpyProductCustomerPermission() Adds a LEFT JOIN clause and with to the query using the SpyProductCustomerPermission relation
 * @method     ChildSpyCustomerQuery rightJoinWithSpyProductCustomerPermission() Adds a RIGHT JOIN clause and with to the query using the SpyProductCustomerPermission relation
 * @method     ChildSpyCustomerQuery innerJoinWithSpyProductCustomerPermission() Adds a INNER JOIN clause and with to the query using the SpyProductCustomerPermission relation
 *
 * @method     \Orm\Zed\User\Persistence\SpyUserQuery|\Orm\Zed\Customer\Persistence\SpyCustomerAddressQuery|\Orm\Zed\Locale\Persistence\SpyLocaleQuery|\Orm\Zed\Comment\Persistence\SpyCommentQuery|\Orm\Zed\CompanyUser\Persistence\SpyCompanyUserQuery|\Orm\Zed\CustomerGroup\Persistence\SpyCustomerGroupToCustomerQuery|\Orm\Zed\CustomerNote\Persistence\SpyCustomerNoteQuery|\Orm\Zed\Newsletter\Persistence\SpyNewsletterSubscriberQuery|\Orm\Zed\ProductCustomerPermission\Persistence\SpyProductCustomerPermissionQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyCustomer|null findOne(ConnectionInterface $con = null) Return the first ChildSpyCustomer matching the query
 * @method     ChildSpyCustomer findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSpyCustomer matching the query, or a new ChildSpyCustomer object populated from the query conditions when no match is found
 *
 * @method     ChildSpyCustomer|null findOneByIdCustomer(int $id_customer) Return the first ChildSpyCustomer filtered by the id_customer column
 * @method     ChildSpyCustomer|null findOneByFkLocale(int $fk_locale) Return the first ChildSpyCustomer filtered by the fk_locale column
 * @method     ChildSpyCustomer|null findOneByFkUser(int $fk_user) Return the first ChildSpyCustomer filtered by the fk_user column
 * @method     ChildSpyCustomer|null findOneByAnonymizedAt(string $anonymized_at) Return the first ChildSpyCustomer filtered by the anonymized_at column
 * @method     ChildSpyCustomer|null findOneByCompany(string $company) Return the first ChildSpyCustomer filtered by the company column
 * @method     ChildSpyCustomer|null findOneByCustomerReference(string $customer_reference) Return the first ChildSpyCustomer filtered by the customer_reference column
 * @method     ChildSpyCustomer|null findOneByDateOfBirth(string $date_of_birth) Return the first ChildSpyCustomer filtered by the date_of_birth column
 * @method     ChildSpyCustomer|null findOneByDefaultBillingAddress(int $default_billing_address) Return the first ChildSpyCustomer filtered by the default_billing_address column
 * @method     ChildSpyCustomer|null findOneByDefaultShippingAddress(int $default_shipping_address) Return the first ChildSpyCustomer filtered by the default_shipping_address column
 * @method     ChildSpyCustomer|null findOneByEmail(string $email) Return the first ChildSpyCustomer filtered by the email column
 * @method     ChildSpyCustomer|null findOneByFirstName(string $first_name) Return the first ChildSpyCustomer filtered by the first_name column
 * @method     ChildSpyCustomer|null findOneByGender(int $gender) Return the first ChildSpyCustomer filtered by the gender column
 * @method     ChildSpyCustomer|null findOneByLastName(string $last_name) Return the first ChildSpyCustomer filtered by the last_name column
 * @method     ChildSpyCustomer|null findOneByPassword(string $password) Return the first ChildSpyCustomer filtered by the password column
 * @method     ChildSpyCustomer|null findOneByPhone(string $phone) Return the first ChildSpyCustomer filtered by the phone column
 * @method     ChildSpyCustomer|null findOneByRegistered(string $registered) Return the first ChildSpyCustomer filtered by the registered column
 * @method     ChildSpyCustomer|null findOneByRegistrationKey(string $registration_key) Return the first ChildSpyCustomer filtered by the registration_key column
 * @method     ChildSpyCustomer|null findOneByRestorePasswordDate(string $restore_password_date) Return the first ChildSpyCustomer filtered by the restore_password_date column
 * @method     ChildSpyCustomer|null findOneByRestorePasswordKey(string $restore_password_key) Return the first ChildSpyCustomer filtered by the restore_password_key column
 * @method     ChildSpyCustomer|null findOneBySalutation(int $salutation) Return the first ChildSpyCustomer filtered by the salutation column
 * @method     ChildSpyCustomer|null findOneByCreatedAt(string $created_at) Return the first ChildSpyCustomer filtered by the created_at column
 * @method     ChildSpyCustomer|null findOneByUpdatedAt(string $updated_at) Return the first ChildSpyCustomer filtered by the updated_at column *

 * @method     ChildSpyCustomer requirePk($key, ConnectionInterface $con = null) Return the ChildSpyCustomer by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCustomer requireOne(ConnectionInterface $con = null) Return the first ChildSpyCustomer matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyCustomer requireOneByIdCustomer(int $id_customer) Return the first ChildSpyCustomer filtered by the id_customer column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCustomer requireOneByFkLocale(int $fk_locale) Return the first ChildSpyCustomer filtered by the fk_locale column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCustomer requireOneByFkUser(int $fk_user) Return the first ChildSpyCustomer filtered by the fk_user column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCustomer requireOneByAnonymizedAt(string $anonymized_at) Return the first ChildSpyCustomer filtered by the anonymized_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCustomer requireOneByCompany(string $company) Return the first ChildSpyCustomer filtered by the company column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCustomer requireOneByCustomerReference(string $customer_reference) Return the first ChildSpyCustomer filtered by the customer_reference column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCustomer requireOneByDateOfBirth(string $date_of_birth) Return the first ChildSpyCustomer filtered by the date_of_birth column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCustomer requireOneByDefaultBillingAddress(int $default_billing_address) Return the first ChildSpyCustomer filtered by the default_billing_address column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCustomer requireOneByDefaultShippingAddress(int $default_shipping_address) Return the first ChildSpyCustomer filtered by the default_shipping_address column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCustomer requireOneByEmail(string $email) Return the first ChildSpyCustomer filtered by the email column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCustomer requireOneByFirstName(string $first_name) Return the first ChildSpyCustomer filtered by the first_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCustomer requireOneByGender(int $gender) Return the first ChildSpyCustomer filtered by the gender column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCustomer requireOneByLastName(string $last_name) Return the first ChildSpyCustomer filtered by the last_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCustomer requireOneByPassword(string $password) Return the first ChildSpyCustomer filtered by the password column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCustomer requireOneByPhone(string $phone) Return the first ChildSpyCustomer filtered by the phone column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCustomer requireOneByRegistered(string $registered) Return the first ChildSpyCustomer filtered by the registered column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCustomer requireOneByRegistrationKey(string $registration_key) Return the first ChildSpyCustomer filtered by the registration_key column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCustomer requireOneByRestorePasswordDate(string $restore_password_date) Return the first ChildSpyCustomer filtered by the restore_password_date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCustomer requireOneByRestorePasswordKey(string $restore_password_key) Return the first ChildSpyCustomer filtered by the restore_password_key column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCustomer requireOneBySalutation(int $salutation) Return the first ChildSpyCustomer filtered by the salutation column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCustomer requireOneByCreatedAt(string $created_at) Return the first ChildSpyCustomer filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCustomer requireOneByUpdatedAt(string $updated_at) Return the first ChildSpyCustomer filtered by the updated_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyCustomer[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSpyCustomer objects based on current ModelCriteria
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCustomer> find(ConnectionInterface $con = null) Return ChildSpyCustomer objects based on current ModelCriteria
 * @method     ChildSpyCustomer[]|ObjectCollection findByIdCustomer(int $id_customer) Return ChildSpyCustomer objects filtered by the id_customer column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCustomer> findByIdCustomer(int $id_customer) Return ChildSpyCustomer objects filtered by the id_customer column
 * @method     ChildSpyCustomer[]|ObjectCollection findByFkLocale(int $fk_locale) Return ChildSpyCustomer objects filtered by the fk_locale column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCustomer> findByFkLocale(int $fk_locale) Return ChildSpyCustomer objects filtered by the fk_locale column
 * @method     ChildSpyCustomer[]|ObjectCollection findByFkUser(int $fk_user) Return ChildSpyCustomer objects filtered by the fk_user column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCustomer> findByFkUser(int $fk_user) Return ChildSpyCustomer objects filtered by the fk_user column
 * @method     ChildSpyCustomer[]|ObjectCollection findByAnonymizedAt(string $anonymized_at) Return ChildSpyCustomer objects filtered by the anonymized_at column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCustomer> findByAnonymizedAt(string $anonymized_at) Return ChildSpyCustomer objects filtered by the anonymized_at column
 * @method     ChildSpyCustomer[]|ObjectCollection findByCompany(string $company) Return ChildSpyCustomer objects filtered by the company column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCustomer> findByCompany(string $company) Return ChildSpyCustomer objects filtered by the company column
 * @method     ChildSpyCustomer[]|ObjectCollection findByCustomerReference(string $customer_reference) Return ChildSpyCustomer objects filtered by the customer_reference column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCustomer> findByCustomerReference(string $customer_reference) Return ChildSpyCustomer objects filtered by the customer_reference column
 * @method     ChildSpyCustomer[]|ObjectCollection findByDateOfBirth(string $date_of_birth) Return ChildSpyCustomer objects filtered by the date_of_birth column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCustomer> findByDateOfBirth(string $date_of_birth) Return ChildSpyCustomer objects filtered by the date_of_birth column
 * @method     ChildSpyCustomer[]|ObjectCollection findByDefaultBillingAddress(int $default_billing_address) Return ChildSpyCustomer objects filtered by the default_billing_address column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCustomer> findByDefaultBillingAddress(int $default_billing_address) Return ChildSpyCustomer objects filtered by the default_billing_address column
 * @method     ChildSpyCustomer[]|ObjectCollection findByDefaultShippingAddress(int $default_shipping_address) Return ChildSpyCustomer objects filtered by the default_shipping_address column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCustomer> findByDefaultShippingAddress(int $default_shipping_address) Return ChildSpyCustomer objects filtered by the default_shipping_address column
 * @method     ChildSpyCustomer[]|ObjectCollection findByEmail(string $email) Return ChildSpyCustomer objects filtered by the email column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCustomer> findByEmail(string $email) Return ChildSpyCustomer objects filtered by the email column
 * @method     ChildSpyCustomer[]|ObjectCollection findByFirstName(string $first_name) Return ChildSpyCustomer objects filtered by the first_name column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCustomer> findByFirstName(string $first_name) Return ChildSpyCustomer objects filtered by the first_name column
 * @method     ChildSpyCustomer[]|ObjectCollection findByGender(int $gender) Return ChildSpyCustomer objects filtered by the gender column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCustomer> findByGender(int $gender) Return ChildSpyCustomer objects filtered by the gender column
 * @method     ChildSpyCustomer[]|ObjectCollection findByLastName(string $last_name) Return ChildSpyCustomer objects filtered by the last_name column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCustomer> findByLastName(string $last_name) Return ChildSpyCustomer objects filtered by the last_name column
 * @method     ChildSpyCustomer[]|ObjectCollection findByPassword(string $password) Return ChildSpyCustomer objects filtered by the password column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCustomer> findByPassword(string $password) Return ChildSpyCustomer objects filtered by the password column
 * @method     ChildSpyCustomer[]|ObjectCollection findByPhone(string $phone) Return ChildSpyCustomer objects filtered by the phone column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCustomer> findByPhone(string $phone) Return ChildSpyCustomer objects filtered by the phone column
 * @method     ChildSpyCustomer[]|ObjectCollection findByRegistered(string $registered) Return ChildSpyCustomer objects filtered by the registered column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCustomer> findByRegistered(string $registered) Return ChildSpyCustomer objects filtered by the registered column
 * @method     ChildSpyCustomer[]|ObjectCollection findByRegistrationKey(string $registration_key) Return ChildSpyCustomer objects filtered by the registration_key column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCustomer> findByRegistrationKey(string $registration_key) Return ChildSpyCustomer objects filtered by the registration_key column
 * @method     ChildSpyCustomer[]|ObjectCollection findByRestorePasswordDate(string $restore_password_date) Return ChildSpyCustomer objects filtered by the restore_password_date column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCustomer> findByRestorePasswordDate(string $restore_password_date) Return ChildSpyCustomer objects filtered by the restore_password_date column
 * @method     ChildSpyCustomer[]|ObjectCollection findByRestorePasswordKey(string $restore_password_key) Return ChildSpyCustomer objects filtered by the restore_password_key column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCustomer> findByRestorePasswordKey(string $restore_password_key) Return ChildSpyCustomer objects filtered by the restore_password_key column
 * @method     ChildSpyCustomer[]|ObjectCollection findBySalutation(int $salutation) Return ChildSpyCustomer objects filtered by the salutation column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCustomer> findBySalutation(int $salutation) Return ChildSpyCustomer objects filtered by the salutation column
 * @method     ChildSpyCustomer[]|ObjectCollection findByCreatedAt(string $created_at) Return ChildSpyCustomer objects filtered by the created_at column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCustomer> findByCreatedAt(string $created_at) Return ChildSpyCustomer objects filtered by the created_at column
 * @method     ChildSpyCustomer[]|ObjectCollection findByUpdatedAt(string $updated_at) Return ChildSpyCustomer objects filtered by the updated_at column
 * @psalm-method ObjectCollection&\Traversable<ChildSpyCustomer> findByUpdatedAt(string $updated_at) Return ChildSpyCustomer objects filtered by the updated_at column
 * @method     ChildSpyCustomer[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyCustomer> paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SpyCustomerQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\Customer\Persistence\Base\SpyCustomerQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\Customer\\Persistence\\SpyCustomer', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyCustomerQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyCustomerQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSpyCustomerQuery) {
            return $criteria;
        }
        $query = new ChildSpyCustomerQuery();
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
     * @return ChildSpyCustomer|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyCustomerTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyCustomer A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_customer, fk_locale, fk_user, anonymized_at, company, customer_reference, date_of_birth, default_billing_address, default_shipping_address, email, first_name, gender, last_name, password, phone, registered, registration_key, restore_password_date, restore_password_key, salutation, created_at, updated_at FROM spy_customer WHERE id_customer = :p0';
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
            /** @var ChildSpyCustomer $obj */
            $obj = new ChildSpyCustomer();
            $obj->hydrate($row);
            SpyCustomerTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyCustomer|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildSpyCustomerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpyCustomerTableMap::COL_ID_CUSTOMER, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSpyCustomerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpyCustomerTableMap::COL_ID_CUSTOMER, $keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idCustomer Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdCustomer_Between(array $idCustomer)
    {
        return $this->filterByIdCustomer($idCustomer, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idCustomers Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdCustomer_In(array $idCustomers)
    {
        return $this->filterByIdCustomer($idCustomers, Criteria::IN);
    }

    /**
     * Filter the query on the id_customer column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCustomer(1234); // WHERE id_customer = 1234
     * $query->filterByIdCustomer(array(12, 34), Criteria::IN); // WHERE id_customer IN (12, 34)
     * $query->filterByIdCustomer(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_customer > 12
     * </code>
     *
     * @param     mixed $idCustomer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdCustomer($idCustomer = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idCustomer)) {
            $useMinMax = false;
            if (isset($idCustomer['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCustomerTableMap::COL_ID_CUSTOMER, $idCustomer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCustomer['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCustomerTableMap::COL_ID_CUSTOMER, $idCustomer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idCustomer of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCustomerTableMap::COL_ID_CUSTOMER, $idCustomer, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkLocale Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkLocale_Between(array $fkLocale)
    {
        return $this->filterByFkLocale($fkLocale, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkLocales Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkLocale_In(array $fkLocales)
    {
        return $this->filterByFkLocale($fkLocales, Criteria::IN);
    }

    /**
     * Filter the query on the fk_locale column
     *
     * Example usage:
     * <code>
     * $query->filterByFkLocale(1234); // WHERE fk_locale = 1234
     * $query->filterByFkLocale(array(12, 34), Criteria::IN); // WHERE fk_locale IN (12, 34)
     * $query->filterByFkLocale(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_locale > 12
     * </code>
     *
     * @see       filterByLocale()
     *
     * @param     mixed $fkLocale The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkLocale($fkLocale = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkLocale)) {
            $useMinMax = false;
            if (isset($fkLocale['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCustomerTableMap::COL_FK_LOCALE, $fkLocale['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkLocale['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCustomerTableMap::COL_FK_LOCALE, $fkLocale['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkLocale of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCustomerTableMap::COL_FK_LOCALE, $fkLocale, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkUser Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkUser_Between(array $fkUser)
    {
        return $this->filterByFkUser($fkUser, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkUsers Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkUser_In(array $fkUsers)
    {
        return $this->filterByFkUser($fkUsers, Criteria::IN);
    }

    /**
     * Filter the query on the fk_user column
     *
     * Example usage:
     * <code>
     * $query->filterByFkUser(1234); // WHERE fk_user = 1234
     * $query->filterByFkUser(array(12, 34), Criteria::IN); // WHERE fk_user IN (12, 34)
     * $query->filterByFkUser(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_user > 12
     * </code>
     *
     * @see       filterBySpyUser()
     *
     * @param     mixed $fkUser The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkUser($fkUser = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkUser)) {
            $useMinMax = false;
            if (isset($fkUser['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCustomerTableMap::COL_FK_USER, $fkUser['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkUser['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCustomerTableMap::COL_FK_USER, $fkUser['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkUser of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCustomerTableMap::COL_FK_USER, $fkUser, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $anonymizedAt Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAnonymizedAt_Between(array $anonymizedAt)
    {
        return $this->filterByAnonymizedAt($anonymizedAt, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $anonymizedAts Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAnonymizedAt_In(array $anonymizedAts)
    {
        return $this->filterByAnonymizedAt($anonymizedAts, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $anonymizedAt Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAnonymizedAt_Like($anonymizedAt)
    {
        return $this->filterByAnonymizedAt($anonymizedAt, Criteria::LIKE);
    }

    /**
     * Filter the query on the anonymized_at column
     *
     * Example usage:
     * <code>
     * $query->filterByAnonymizedAt('2011-03-14'); // WHERE anonymized_at = '2011-03-14'
     * $query->filterByAnonymizedAt('now'); // WHERE anonymized_at = '2011-03-14'
     * $query->filterByAnonymizedAt(array('max' => 'yesterday'), SprykerCriteria::BETWEEN); // WHERE anonymized_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $anonymizedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByAnonymizedAt($anonymizedAt = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($anonymizedAt)) {
            $useMinMax = false;
            if (isset($anonymizedAt['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCustomerTableMap::COL_ANONYMIZED_AT, $anonymizedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($anonymizedAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCustomerTableMap::COL_ANONYMIZED_AT, $anonymizedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$anonymizedAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCustomerTableMap::COL_ANONYMIZED_AT, $anonymizedAt, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $companys Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCompany_In(array $companys)
    {
        return $this->filterByCompany($companys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $company Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCompany_Like($company)
    {
        return $this->filterByCompany($company, Criteria::LIKE);
    }

    /**
     * Filter the query on the company column
     *
     * Example usage:
     * <code>
     * $query->filterByCompany('fooValue');   // WHERE company = 'fooValue'
     * $query->filterByCompany('%fooValue%', Criteria::LIKE); // WHERE company LIKE '%fooValue%'
     * $query->filterByCompany([1, 'foo'], Criteria::IN); // WHERE company IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $company The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByCompany($company = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $company = str_replace('*', '%', $company);
        }

        if (is_array($company) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$company of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyCustomerTableMap::COL_COMPANY, $company, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $customerReferences Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCustomerReference_In(array $customerReferences)
    {
        return $this->filterByCustomerReference($customerReferences, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $customerReference Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCustomerReference_Like($customerReference)
    {
        return $this->filterByCustomerReference($customerReference, Criteria::LIKE);
    }

    /**
     * Filter the query on the customer_reference column
     *
     * Example usage:
     * <code>
     * $query->filterByCustomerReference('fooValue');   // WHERE customer_reference = 'fooValue'
     * $query->filterByCustomerReference('%fooValue%', Criteria::LIKE); // WHERE customer_reference LIKE '%fooValue%'
     * $query->filterByCustomerReference([1, 'foo'], Criteria::IN); // WHERE customer_reference IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $customerReference The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByCustomerReference($customerReference = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $customerReference = str_replace('*', '%', $customerReference);
        }

        if (is_array($customerReference) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$customerReference of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyCustomerTableMap::COL_CUSTOMER_REFERENCE, $customerReference, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $dateOfBirth Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDateOfBirth_Between(array $dateOfBirth)
    {
        return $this->filterByDateOfBirth($dateOfBirth, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $dateOfBirths Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDateOfBirth_In(array $dateOfBirths)
    {
        return $this->filterByDateOfBirth($dateOfBirths, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $dateOfBirth Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDateOfBirth_Like($dateOfBirth)
    {
        return $this->filterByDateOfBirth($dateOfBirth, Criteria::LIKE);
    }

    /**
     * Filter the query on the date_of_birth column
     *
     * Example usage:
     * <code>
     * $query->filterByDateOfBirth('2011-03-14'); // WHERE date_of_birth = '2011-03-14'
     * $query->filterByDateOfBirth('now'); // WHERE date_of_birth = '2011-03-14'
     * $query->filterByDateOfBirth(array('max' => 'yesterday'), SprykerCriteria::BETWEEN); // WHERE date_of_birth > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateOfBirth The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByDateOfBirth($dateOfBirth = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($dateOfBirth)) {
            $useMinMax = false;
            if (isset($dateOfBirth['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCustomerTableMap::COL_DATE_OF_BIRTH, $dateOfBirth['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateOfBirth['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCustomerTableMap::COL_DATE_OF_BIRTH, $dateOfBirth['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$dateOfBirth of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCustomerTableMap::COL_DATE_OF_BIRTH, $dateOfBirth, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $defaultBillingAddress Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDefaultBillingAddress_Between(array $defaultBillingAddress)
    {
        return $this->filterByDefaultBillingAddress($defaultBillingAddress, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $defaultBillingAddresss Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDefaultBillingAddress_In(array $defaultBillingAddresss)
    {
        return $this->filterByDefaultBillingAddress($defaultBillingAddresss, Criteria::IN);
    }

    /**
     * Filter the query on the default_billing_address column
     *
     * Example usage:
     * <code>
     * $query->filterByDefaultBillingAddress(1234); // WHERE default_billing_address = 1234
     * $query->filterByDefaultBillingAddress(array(12, 34), Criteria::IN); // WHERE default_billing_address IN (12, 34)
     * $query->filterByDefaultBillingAddress(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE default_billing_address > 12
     * </code>
     *
     * @see       filterByBillingAddress()
     *
     * @param     mixed $defaultBillingAddress The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByDefaultBillingAddress($defaultBillingAddress = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($defaultBillingAddress)) {
            $useMinMax = false;
            if (isset($defaultBillingAddress['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCustomerTableMap::COL_DEFAULT_BILLING_ADDRESS, $defaultBillingAddress['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($defaultBillingAddress['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCustomerTableMap::COL_DEFAULT_BILLING_ADDRESS, $defaultBillingAddress['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$defaultBillingAddress of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCustomerTableMap::COL_DEFAULT_BILLING_ADDRESS, $defaultBillingAddress, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $defaultShippingAddress Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDefaultShippingAddress_Between(array $defaultShippingAddress)
    {
        return $this->filterByDefaultShippingAddress($defaultShippingAddress, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $defaultShippingAddresss Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDefaultShippingAddress_In(array $defaultShippingAddresss)
    {
        return $this->filterByDefaultShippingAddress($defaultShippingAddresss, Criteria::IN);
    }

    /**
     * Filter the query on the default_shipping_address column
     *
     * Example usage:
     * <code>
     * $query->filterByDefaultShippingAddress(1234); // WHERE default_shipping_address = 1234
     * $query->filterByDefaultShippingAddress(array(12, 34), Criteria::IN); // WHERE default_shipping_address IN (12, 34)
     * $query->filterByDefaultShippingAddress(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE default_shipping_address > 12
     * </code>
     *
     * @see       filterByShippingAddress()
     *
     * @param     mixed $defaultShippingAddress The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByDefaultShippingAddress($defaultShippingAddress = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($defaultShippingAddress)) {
            $useMinMax = false;
            if (isset($defaultShippingAddress['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCustomerTableMap::COL_DEFAULT_SHIPPING_ADDRESS, $defaultShippingAddress['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($defaultShippingAddress['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCustomerTableMap::COL_DEFAULT_SHIPPING_ADDRESS, $defaultShippingAddress['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$defaultShippingAddress of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCustomerTableMap::COL_DEFAULT_SHIPPING_ADDRESS, $defaultShippingAddress, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $emails Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByEmail_In(array $emails)
    {
        return $this->filterByEmail($emails, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $email Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByEmail_Like($email)
    {
        return $this->filterByEmail($email, Criteria::LIKE);
    }

    /**
     * Filter the query on the email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
     * $query->filterByEmail('%fooValue%', Criteria::LIKE); // WHERE email LIKE '%fooValue%'
     * $query->filterByEmail([1, 'foo'], Criteria::IN); // WHERE email IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByEmail($email = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $email = str_replace('*', '%', $email);
        }

        if (is_array($email) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$email of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyCustomerTableMap::COL_EMAIL, $email, $comparison);

        /** @var \Propel\Runtime\ActiveQuery\Criterion\BasicCriterion $criterion */
        $criterion = $query->getCriterion(SpyCustomerTableMap::COL_EMAIL);
        $criterion->setIgnoreCase(true);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $firstNames Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFirstName_In(array $firstNames)
    {
        return $this->filterByFirstName($firstNames, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $firstName Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFirstName_Like($firstName)
    {
        return $this->filterByFirstName($firstName, Criteria::LIKE);
    }

    /**
     * Filter the query on the first_name column
     *
     * Example usage:
     * <code>
     * $query->filterByFirstName('fooValue');   // WHERE first_name = 'fooValue'
     * $query->filterByFirstName('%fooValue%', Criteria::LIKE); // WHERE first_name LIKE '%fooValue%'
     * $query->filterByFirstName([1, 'foo'], Criteria::IN); // WHERE first_name IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $firstName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFirstName($firstName = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $firstName = str_replace('*', '%', $firstName);
        }

        if (is_array($firstName) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$firstName of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyCustomerTableMap::COL_FIRST_NAME, $firstName, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $genders Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByGender_In(array $genders)
    {
        return $this->filterByGender($genders, Criteria::IN);
    }

    /**
     * Filter the query on the gender column
     *
     * @param     mixed $gender The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByGender($gender = null, $comparison = Criteria::EQUAL)
    {
        $valueSet = SpyCustomerTableMap::getValueSet(SpyCustomerTableMap::COL_GENDER);
        if (is_scalar($gender)) {
            if (!in_array($gender, $valueSet)) {
                throw new PropelException(sprintf('Value "%s" is not accepted in this enumerated column', $gender));
            }
            $gender = array_search($gender, $valueSet);
        } elseif (is_array($gender)) {
            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
            $convertedValues = array();
            foreach ($gender as $value) {
                if (!in_array($value, $valueSet)) {
                    throw new PropelException(sprintf('Value "%s" is not accepted in this enumerated column', $value));
                }
                $convertedValues []= array_search($value, $valueSet);
            }
            $gender = $convertedValues;
        }

        $query = $this->addUsingAlias(SpyCustomerTableMap::COL_GENDER, $gender, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $lastNames Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLastName_In(array $lastNames)
    {
        return $this->filterByLastName($lastNames, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $lastName Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLastName_Like($lastName)
    {
        return $this->filterByLastName($lastName, Criteria::LIKE);
    }

    /**
     * Filter the query on the last_name column
     *
     * Example usage:
     * <code>
     * $query->filterByLastName('fooValue');   // WHERE last_name = 'fooValue'
     * $query->filterByLastName('%fooValue%', Criteria::LIKE); // WHERE last_name LIKE '%fooValue%'
     * $query->filterByLastName([1, 'foo'], Criteria::IN); // WHERE last_name IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $lastName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByLastName($lastName = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $lastName = str_replace('*', '%', $lastName);
        }

        if (is_array($lastName) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$lastName of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyCustomerTableMap::COL_LAST_NAME, $lastName, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $passwords Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPassword_In(array $passwords)
    {
        return $this->filterByPassword($passwords, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $password Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPassword_Like($password)
    {
        return $this->filterByPassword($password, Criteria::LIKE);
    }

    /**
     * Filter the query on the password column
     *
     * Example usage:
     * <code>
     * $query->filterByPassword('fooValue');   // WHERE password = 'fooValue'
     * $query->filterByPassword('%fooValue%', Criteria::LIKE); // WHERE password LIKE '%fooValue%'
     * $query->filterByPassword([1, 'foo'], Criteria::IN); // WHERE password IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $password The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByPassword($password = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $password = str_replace('*', '%', $password);
        }

        if (is_array($password) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$password of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyCustomerTableMap::COL_PASSWORD, $password, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $phones Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPhone_In(array $phones)
    {
        return $this->filterByPhone($phones, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $phone Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPhone_Like($phone)
    {
        return $this->filterByPhone($phone, Criteria::LIKE);
    }

    /**
     * Filter the query on the phone column
     *
     * Example usage:
     * <code>
     * $query->filterByPhone('fooValue');   // WHERE phone = 'fooValue'
     * $query->filterByPhone('%fooValue%', Criteria::LIKE); // WHERE phone LIKE '%fooValue%'
     * $query->filterByPhone([1, 'foo'], Criteria::IN); // WHERE phone IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $phone The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByPhone($phone = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $phone = str_replace('*', '%', $phone);
        }

        if (is_array($phone) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$phone of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyCustomerTableMap::COL_PHONE, $phone, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $registered Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByRegistered_Between(array $registered)
    {
        return $this->filterByRegistered($registered, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $registereds Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByRegistered_In(array $registereds)
    {
        return $this->filterByRegistered($registereds, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $registered Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByRegistered_Like($registered)
    {
        return $this->filterByRegistered($registered, Criteria::LIKE);
    }

    /**
     * Filter the query on the registered column
     *
     * Example usage:
     * <code>
     * $query->filterByRegistered('2011-03-14'); // WHERE registered = '2011-03-14'
     * $query->filterByRegistered('now'); // WHERE registered = '2011-03-14'
     * $query->filterByRegistered(array('max' => 'yesterday'), SprykerCriteria::BETWEEN); // WHERE registered > '2011-03-13'
     * </code>
     *
     * @param     mixed $registered The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByRegistered($registered = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($registered)) {
            $useMinMax = false;
            if (isset($registered['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCustomerTableMap::COL_REGISTERED, $registered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($registered['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCustomerTableMap::COL_REGISTERED, $registered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$registered of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCustomerTableMap::COL_REGISTERED, $registered, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $registrationKeys Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByRegistrationKey_In(array $registrationKeys)
    {
        return $this->filterByRegistrationKey($registrationKeys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $registrationKey Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByRegistrationKey_Like($registrationKey)
    {
        return $this->filterByRegistrationKey($registrationKey, Criteria::LIKE);
    }

    /**
     * Filter the query on the registration_key column
     *
     * Example usage:
     * <code>
     * $query->filterByRegistrationKey('fooValue');   // WHERE registration_key = 'fooValue'
     * $query->filterByRegistrationKey('%fooValue%', Criteria::LIKE); // WHERE registration_key LIKE '%fooValue%'
     * $query->filterByRegistrationKey([1, 'foo'], Criteria::IN); // WHERE registration_key IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $registrationKey The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByRegistrationKey($registrationKey = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $registrationKey = str_replace('*', '%', $registrationKey);
        }

        if (is_array($registrationKey) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$registrationKey of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyCustomerTableMap::COL_REGISTRATION_KEY, $registrationKey, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $restorePasswordDate Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByRestorePasswordDate_Between(array $restorePasswordDate)
    {
        return $this->filterByRestorePasswordDate($restorePasswordDate, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $restorePasswordDates Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByRestorePasswordDate_In(array $restorePasswordDates)
    {
        return $this->filterByRestorePasswordDate($restorePasswordDates, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $restorePasswordDate Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByRestorePasswordDate_Like($restorePasswordDate)
    {
        return $this->filterByRestorePasswordDate($restorePasswordDate, Criteria::LIKE);
    }

    /**
     * Filter the query on the restore_password_date column
     *
     * Example usage:
     * <code>
     * $query->filterByRestorePasswordDate('2011-03-14'); // WHERE restore_password_date = '2011-03-14'
     * $query->filterByRestorePasswordDate('now'); // WHERE restore_password_date = '2011-03-14'
     * $query->filterByRestorePasswordDate(array('max' => 'yesterday'), SprykerCriteria::BETWEEN); // WHERE restore_password_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $restorePasswordDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByRestorePasswordDate($restorePasswordDate = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($restorePasswordDate)) {
            $useMinMax = false;
            if (isset($restorePasswordDate['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCustomerTableMap::COL_RESTORE_PASSWORD_DATE, $restorePasswordDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($restorePasswordDate['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCustomerTableMap::COL_RESTORE_PASSWORD_DATE, $restorePasswordDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$restorePasswordDate of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCustomerTableMap::COL_RESTORE_PASSWORD_DATE, $restorePasswordDate, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $restorePasswordKeys Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByRestorePasswordKey_In(array $restorePasswordKeys)
    {
        return $this->filterByRestorePasswordKey($restorePasswordKeys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $restorePasswordKey Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByRestorePasswordKey_Like($restorePasswordKey)
    {
        return $this->filterByRestorePasswordKey($restorePasswordKey, Criteria::LIKE);
    }

    /**
     * Filter the query on the restore_password_key column
     *
     * Example usage:
     * <code>
     * $query->filterByRestorePasswordKey('fooValue');   // WHERE restore_password_key = 'fooValue'
     * $query->filterByRestorePasswordKey('%fooValue%', Criteria::LIKE); // WHERE restore_password_key LIKE '%fooValue%'
     * $query->filterByRestorePasswordKey([1, 'foo'], Criteria::IN); // WHERE restore_password_key IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $restorePasswordKey The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByRestorePasswordKey($restorePasswordKey = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $restorePasswordKey = str_replace('*', '%', $restorePasswordKey);
        }

        if (is_array($restorePasswordKey) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$restorePasswordKey of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyCustomerTableMap::COL_RESTORE_PASSWORD_KEY, $restorePasswordKey, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $salutations Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySalutation_In(array $salutations)
    {
        return $this->filterBySalutation($salutations, Criteria::IN);
    }

    /**
     * Filter the query on the salutation column
     *
     * @param     mixed $salutation The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterBySalutation($salutation = null, $comparison = Criteria::EQUAL)
    {
        $valueSet = SpyCustomerTableMap::getValueSet(SpyCustomerTableMap::COL_SALUTATION);
        if (is_scalar($salutation)) {
            if (!in_array($salutation, $valueSet)) {
                throw new PropelException(sprintf('Value "%s" is not accepted in this enumerated column', $salutation));
            }
            $salutation = array_search($salutation, $valueSet);
        } elseif (is_array($salutation)) {
            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
            $convertedValues = array();
            foreach ($salutation as $value) {
                if (!in_array($value, $valueSet)) {
                    throw new PropelException(sprintf('Value "%s" is not accepted in this enumerated column', $value));
                }
                $convertedValues []= array_search($value, $valueSet);
            }
            $salutation = $convertedValues;
        }

        $query = $this->addUsingAlias(SpyCustomerTableMap::COL_SALUTATION, $salutation, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $createdAt Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCreatedAt_Between(array $createdAt)
    {
        return $this->filterByCreatedAt($createdAt, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $createdAts Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCreatedAt_In(array $createdAts)
    {
        return $this->filterByCreatedAt($createdAts, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $createdAt Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCreatedAt_Like($createdAt)
    {
        return $this->filterByCreatedAt($createdAt, Criteria::LIKE);
    }

    /**
     * Filter the query on the created_at column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedAt('2011-03-14'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt('now'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt(array('max' => 'yesterday'), SprykerCriteria::BETWEEN); // WHERE created_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $createdAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByCreatedAt($createdAt = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCustomerTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCustomerTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$createdAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCustomerTableMap::COL_CREATED_AT, $createdAt, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $updatedAt Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByUpdatedAt_Between(array $updatedAt)
    {
        return $this->filterByUpdatedAt($updatedAt, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $updatedAts Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByUpdatedAt_In(array $updatedAts)
    {
        return $this->filterByUpdatedAt($updatedAts, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $updatedAt Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByUpdatedAt_Like($updatedAt)
    {
        return $this->filterByUpdatedAt($updatedAt, Criteria::LIKE);
    }

    /**
     * Filter the query on the updated_at column
     *
     * Example usage:
     * <code>
     * $query->filterByUpdatedAt('2011-03-14'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt('now'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt(array('max' => 'yesterday'), SprykerCriteria::BETWEEN); // WHERE updated_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $updatedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCustomerTableMap::COL_UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCustomerTableMap::COL_UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$updatedAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCustomerTableMap::COL_UPDATED_AT, $updatedAt, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\User\Persistence\SpyUser object
     *
     * @param \Orm\Zed\User\Persistence\SpyUser|ObjectCollection $spyUser The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyCustomerQuery The current query, for fluid interface
     */
    public function filterBySpyUser($spyUser, $comparison = null)
    {
        if ($spyUser instanceof \Orm\Zed\User\Persistence\SpyUser) {
            return $this
                ->addUsingAlias(SpyCustomerTableMap::COL_FK_USER, $spyUser->getIdUser(), $comparison);
        } elseif ($spyUser instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyCustomerTableMap::COL_FK_USER, $spyUser->toKeyValue('PrimaryKey', 'IdUser'), $comparison);
        } else {
            throw new PropelException('filterBySpyUser() only accepts arguments of type \Orm\Zed\User\Persistence\SpyUser or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyUser relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyCustomerQuery The current query, for fluid interface
     */
    public function joinSpyUser($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyUser');

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
            $this->addJoinObject($join, 'SpyUser');
        }

        return $this;
    }

    /**
     * Use the SpyUser relation SpyUser object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\User\Persistence\SpyUserQuery A secondary query class using the current class as primary query
     */
    public function useSpyUserQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinSpyUser($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyUser', '\Orm\Zed\User\Persistence\SpyUserQuery');
    }

    /**
     * Use the SpyUser relation SpyUser object
     *
     * @param callable(\Orm\Zed\User\Persistence\SpyUserQuery):\Orm\Zed\User\Persistence\SpyUserQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyUserQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useSpyUserQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyUser table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\User\Persistence\SpyUserQuery The inner query object of the EXISTS statement
     */
    public function useSpyUserExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyUser', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyUser table for a NOT EXISTS query.
     *
     * @see useSpyUserExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\User\Persistence\SpyUserQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyUserNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyUser', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Customer\Persistence\SpyCustomerAddress object
     *
     * @param \Orm\Zed\Customer\Persistence\SpyCustomerAddress|ObjectCollection $spyCustomerAddress The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyCustomerQuery The current query, for fluid interface
     */
    public function filterByBillingAddress($spyCustomerAddress, $comparison = null)
    {
        if ($spyCustomerAddress instanceof \Orm\Zed\Customer\Persistence\SpyCustomerAddress) {
            return $this
                ->addUsingAlias(SpyCustomerTableMap::COL_DEFAULT_BILLING_ADDRESS, $spyCustomerAddress->getIdCustomerAddress(), $comparison);
        } elseif ($spyCustomerAddress instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyCustomerTableMap::COL_DEFAULT_BILLING_ADDRESS, $spyCustomerAddress->toKeyValue('PrimaryKey', 'IdCustomerAddress'), $comparison);
        } else {
            throw new PropelException('filterByBillingAddress() only accepts arguments of type \Orm\Zed\Customer\Persistence\SpyCustomerAddress or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the BillingAddress relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyCustomerQuery The current query, for fluid interface
     */
    public function joinBillingAddress($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('BillingAddress');

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
            $this->addJoinObject($join, 'BillingAddress');
        }

        return $this;
    }

    /**
     * Use the BillingAddress relation SpyCustomerAddress object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Customer\Persistence\SpyCustomerAddressQuery A secondary query class using the current class as primary query
     */
    public function useBillingAddressQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinBillingAddress($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'BillingAddress', '\Orm\Zed\Customer\Persistence\SpyCustomerAddressQuery');
    }

    /**
     * Use the BillingAddress relation SpyCustomerAddress object
     *
     * @param callable(\Orm\Zed\Customer\Persistence\SpyCustomerAddressQuery):\Orm\Zed\Customer\Persistence\SpyCustomerAddressQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withBillingAddressQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useBillingAddressQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the BillingAddress relation to the SpyCustomerAddress table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Customer\Persistence\SpyCustomerAddressQuery The inner query object of the EXISTS statement
     */
    public function useBillingAddressExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('BillingAddress', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the BillingAddress relation to the SpyCustomerAddress table for a NOT EXISTS query.
     *
     * @see useBillingAddressExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Customer\Persistence\SpyCustomerAddressQuery The inner query object of the NOT EXISTS statement
     */
    public function useBillingAddressNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('BillingAddress', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Customer\Persistence\SpyCustomerAddress object
     *
     * @param \Orm\Zed\Customer\Persistence\SpyCustomerAddress|ObjectCollection $spyCustomerAddress The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyCustomerQuery The current query, for fluid interface
     */
    public function filterByShippingAddress($spyCustomerAddress, $comparison = null)
    {
        if ($spyCustomerAddress instanceof \Orm\Zed\Customer\Persistence\SpyCustomerAddress) {
            return $this
                ->addUsingAlias(SpyCustomerTableMap::COL_DEFAULT_SHIPPING_ADDRESS, $spyCustomerAddress->getIdCustomerAddress(), $comparison);
        } elseif ($spyCustomerAddress instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyCustomerTableMap::COL_DEFAULT_SHIPPING_ADDRESS, $spyCustomerAddress->toKeyValue('PrimaryKey', 'IdCustomerAddress'), $comparison);
        } else {
            throw new PropelException('filterByShippingAddress() only accepts arguments of type \Orm\Zed\Customer\Persistence\SpyCustomerAddress or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ShippingAddress relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyCustomerQuery The current query, for fluid interface
     */
    public function joinShippingAddress($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ShippingAddress');

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
            $this->addJoinObject($join, 'ShippingAddress');
        }

        return $this;
    }

    /**
     * Use the ShippingAddress relation SpyCustomerAddress object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Customer\Persistence\SpyCustomerAddressQuery A secondary query class using the current class as primary query
     */
    public function useShippingAddressQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinShippingAddress($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ShippingAddress', '\Orm\Zed\Customer\Persistence\SpyCustomerAddressQuery');
    }

    /**
     * Use the ShippingAddress relation SpyCustomerAddress object
     *
     * @param callable(\Orm\Zed\Customer\Persistence\SpyCustomerAddressQuery):\Orm\Zed\Customer\Persistence\SpyCustomerAddressQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withShippingAddressQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useShippingAddressQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the ShippingAddress relation to the SpyCustomerAddress table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Customer\Persistence\SpyCustomerAddressQuery The inner query object of the EXISTS statement
     */
    public function useShippingAddressExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('ShippingAddress', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the ShippingAddress relation to the SpyCustomerAddress table for a NOT EXISTS query.
     *
     * @see useShippingAddressExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Customer\Persistence\SpyCustomerAddressQuery The inner query object of the NOT EXISTS statement
     */
    public function useShippingAddressNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('ShippingAddress', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Locale\Persistence\SpyLocale object
     *
     * @param \Orm\Zed\Locale\Persistence\SpyLocale|ObjectCollection $spyLocale The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyCustomerQuery The current query, for fluid interface
     */
    public function filterByLocale($spyLocale, $comparison = null)
    {
        if ($spyLocale instanceof \Orm\Zed\Locale\Persistence\SpyLocale) {
            return $this
                ->addUsingAlias(SpyCustomerTableMap::COL_FK_LOCALE, $spyLocale->getIdLocale(), $comparison);
        } elseif ($spyLocale instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SpyCustomerTableMap::COL_FK_LOCALE, $spyLocale->toKeyValue('PrimaryKey', 'IdLocale'), $comparison);
        } else {
            throw new PropelException('filterByLocale() only accepts arguments of type \Orm\Zed\Locale\Persistence\SpyLocale or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Locale relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyCustomerQuery The current query, for fluid interface
     */
    public function joinLocale($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Locale');

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
            $this->addJoinObject($join, 'Locale');
        }

        return $this;
    }

    /**
     * Use the Locale relation SpyLocale object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Locale\Persistence\SpyLocaleQuery A secondary query class using the current class as primary query
     */
    public function useLocaleQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinLocale($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Locale', '\Orm\Zed\Locale\Persistence\SpyLocaleQuery');
    }

    /**
     * Use the Locale relation SpyLocale object
     *
     * @param callable(\Orm\Zed\Locale\Persistence\SpyLocaleQuery):\Orm\Zed\Locale\Persistence\SpyLocaleQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withLocaleQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useLocaleQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the Locale relation to the SpyLocale table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Locale\Persistence\SpyLocaleQuery The inner query object of the EXISTS statement
     */
    public function useLocaleExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('Locale', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the Locale relation to the SpyLocale table for a NOT EXISTS query.
     *
     * @see useLocaleExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Locale\Persistence\SpyLocaleQuery The inner query object of the NOT EXISTS statement
     */
    public function useLocaleNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('Locale', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Comment\Persistence\SpyComment object
     *
     * @param \Orm\Zed\Comment\Persistence\SpyComment|ObjectCollection $spyComment the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyCustomerQuery The current query, for fluid interface
     */
    public function filterBySpyComment($spyComment, $comparison = null)
    {
        if ($spyComment instanceof \Orm\Zed\Comment\Persistence\SpyComment) {
            return $this
                ->addUsingAlias(SpyCustomerTableMap::COL_ID_CUSTOMER, $spyComment->getFkCustomer(), $comparison);
        } elseif ($spyComment instanceof ObjectCollection) {
            return $this
                ->useSpyCommentQuery()
                ->filterByPrimaryKeys($spyComment->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyComment() only accepts arguments of type \Orm\Zed\Comment\Persistence\SpyComment or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyComment relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyCustomerQuery The current query, for fluid interface
     */
    public function joinSpyComment($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyComment');

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
            $this->addJoinObject($join, 'SpyComment');
        }

        return $this;
    }

    /**
     * Use the SpyComment relation SpyComment object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Comment\Persistence\SpyCommentQuery A secondary query class using the current class as primary query
     */
    public function useSpyCommentQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinSpyComment($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyComment', '\Orm\Zed\Comment\Persistence\SpyCommentQuery');
    }

    /**
     * Use the SpyComment relation SpyComment object
     *
     * @param callable(\Orm\Zed\Comment\Persistence\SpyCommentQuery):\Orm\Zed\Comment\Persistence\SpyCommentQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyCommentQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useSpyCommentQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyComment table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Comment\Persistence\SpyCommentQuery The inner query object of the EXISTS statement
     */
    public function useSpyCommentExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyComment', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyComment table for a NOT EXISTS query.
     *
     * @see useSpyCommentExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Comment\Persistence\SpyCommentQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyCommentNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyComment', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\CompanyUser\Persistence\SpyCompanyUser object
     *
     * @param \Orm\Zed\CompanyUser\Persistence\SpyCompanyUser|ObjectCollection $spyCompanyUser the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyCustomerQuery The current query, for fluid interface
     */
    public function filterByCompanyUser($spyCompanyUser, $comparison = null)
    {
        if ($spyCompanyUser instanceof \Orm\Zed\CompanyUser\Persistence\SpyCompanyUser) {
            return $this
                ->addUsingAlias(SpyCustomerTableMap::COL_ID_CUSTOMER, $spyCompanyUser->getFkCustomer(), $comparison);
        } elseif ($spyCompanyUser instanceof ObjectCollection) {
            return $this
                ->useCompanyUserQuery()
                ->filterByPrimaryKeys($spyCompanyUser->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCompanyUser() only accepts arguments of type \Orm\Zed\CompanyUser\Persistence\SpyCompanyUser or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CompanyUser relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyCustomerQuery The current query, for fluid interface
     */
    public function joinCompanyUser($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CompanyUser');

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
            $this->addJoinObject($join, 'CompanyUser');
        }

        return $this;
    }

    /**
     * Use the CompanyUser relation SpyCompanyUser object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\CompanyUser\Persistence\SpyCompanyUserQuery A secondary query class using the current class as primary query
     */
    public function useCompanyUserQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCompanyUser($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CompanyUser', '\Orm\Zed\CompanyUser\Persistence\SpyCompanyUserQuery');
    }

    /**
     * Use the CompanyUser relation SpyCompanyUser object
     *
     * @param callable(\Orm\Zed\CompanyUser\Persistence\SpyCompanyUserQuery):\Orm\Zed\CompanyUser\Persistence\SpyCompanyUserQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withCompanyUserQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useCompanyUserQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the CompanyUser relation to the SpyCompanyUser table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\CompanyUser\Persistence\SpyCompanyUserQuery The inner query object of the EXISTS statement
     */
    public function useCompanyUserExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('CompanyUser', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the CompanyUser relation to the SpyCompanyUser table for a NOT EXISTS query.
     *
     * @see useCompanyUserExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\CompanyUser\Persistence\SpyCompanyUserQuery The inner query object of the NOT EXISTS statement
     */
    public function useCompanyUserNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('CompanyUser', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Customer\Persistence\SpyCustomerAddress object
     *
     * @param \Orm\Zed\Customer\Persistence\SpyCustomerAddress|ObjectCollection $spyCustomerAddress the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyCustomerQuery The current query, for fluid interface
     */
    public function filterByAddress($spyCustomerAddress, $comparison = null)
    {
        if ($spyCustomerAddress instanceof \Orm\Zed\Customer\Persistence\SpyCustomerAddress) {
            return $this
                ->addUsingAlias(SpyCustomerTableMap::COL_ID_CUSTOMER, $spyCustomerAddress->getFkCustomer(), $comparison);
        } elseif ($spyCustomerAddress instanceof ObjectCollection) {
            return $this
                ->useAddressQuery()
                ->filterByPrimaryKeys($spyCustomerAddress->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByAddress() only accepts arguments of type \Orm\Zed\Customer\Persistence\SpyCustomerAddress or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Address relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyCustomerQuery The current query, for fluid interface
     */
    public function joinAddress($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Address');

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
            $this->addJoinObject($join, 'Address');
        }

        return $this;
    }

    /**
     * Use the Address relation SpyCustomerAddress object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Customer\Persistence\SpyCustomerAddressQuery A secondary query class using the current class as primary query
     */
    public function useAddressQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAddress($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Address', '\Orm\Zed\Customer\Persistence\SpyCustomerAddressQuery');
    }

    /**
     * Use the Address relation SpyCustomerAddress object
     *
     * @param callable(\Orm\Zed\Customer\Persistence\SpyCustomerAddressQuery):\Orm\Zed\Customer\Persistence\SpyCustomerAddressQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withAddressQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useAddressQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the Address relation to the SpyCustomerAddress table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Customer\Persistence\SpyCustomerAddressQuery The inner query object of the EXISTS statement
     */
    public function useAddressExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('Address', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the Address relation to the SpyCustomerAddress table for a NOT EXISTS query.
     *
     * @see useAddressExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Customer\Persistence\SpyCustomerAddressQuery The inner query object of the NOT EXISTS statement
     */
    public function useAddressNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('Address', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\CustomerGroup\Persistence\SpyCustomerGroupToCustomer object
     *
     * @param \Orm\Zed\CustomerGroup\Persistence\SpyCustomerGroupToCustomer|ObjectCollection $spyCustomerGroupToCustomer the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyCustomerQuery The current query, for fluid interface
     */
    public function filterBySpyCustomerGroupToCustomer($spyCustomerGroupToCustomer, $comparison = null)
    {
        if ($spyCustomerGroupToCustomer instanceof \Orm\Zed\CustomerGroup\Persistence\SpyCustomerGroupToCustomer) {
            return $this
                ->addUsingAlias(SpyCustomerTableMap::COL_ID_CUSTOMER, $spyCustomerGroupToCustomer->getFkCustomer(), $comparison);
        } elseif ($spyCustomerGroupToCustomer instanceof ObjectCollection) {
            return $this
                ->useSpyCustomerGroupToCustomerQuery()
                ->filterByPrimaryKeys($spyCustomerGroupToCustomer->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyCustomerGroupToCustomer() only accepts arguments of type \Orm\Zed\CustomerGroup\Persistence\SpyCustomerGroupToCustomer or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyCustomerGroupToCustomer relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyCustomerQuery The current query, for fluid interface
     */
    public function joinSpyCustomerGroupToCustomer($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyCustomerGroupToCustomer');

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
            $this->addJoinObject($join, 'SpyCustomerGroupToCustomer');
        }

        return $this;
    }

    /**
     * Use the SpyCustomerGroupToCustomer relation SpyCustomerGroupToCustomer object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\CustomerGroup\Persistence\SpyCustomerGroupToCustomerQuery A secondary query class using the current class as primary query
     */
    public function useSpyCustomerGroupToCustomerQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyCustomerGroupToCustomer($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyCustomerGroupToCustomer', '\Orm\Zed\CustomerGroup\Persistence\SpyCustomerGroupToCustomerQuery');
    }

    /**
     * Use the SpyCustomerGroupToCustomer relation SpyCustomerGroupToCustomer object
     *
     * @param callable(\Orm\Zed\CustomerGroup\Persistence\SpyCustomerGroupToCustomerQuery):\Orm\Zed\CustomerGroup\Persistence\SpyCustomerGroupToCustomerQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyCustomerGroupToCustomerQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyCustomerGroupToCustomerQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyCustomerGroupToCustomer table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\CustomerGroup\Persistence\SpyCustomerGroupToCustomerQuery The inner query object of the EXISTS statement
     */
    public function useSpyCustomerGroupToCustomerExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyCustomerGroupToCustomer', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyCustomerGroupToCustomer table for a NOT EXISTS query.
     *
     * @see useSpyCustomerGroupToCustomerExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\CustomerGroup\Persistence\SpyCustomerGroupToCustomerQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyCustomerGroupToCustomerNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyCustomerGroupToCustomer', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\CustomerNote\Persistence\SpyCustomerNote object
     *
     * @param \Orm\Zed\CustomerNote\Persistence\SpyCustomerNote|ObjectCollection $spyCustomerNote the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyCustomerQuery The current query, for fluid interface
     */
    public function filterByCustomerNote($spyCustomerNote, $comparison = null)
    {
        if ($spyCustomerNote instanceof \Orm\Zed\CustomerNote\Persistence\SpyCustomerNote) {
            return $this
                ->addUsingAlias(SpyCustomerTableMap::COL_ID_CUSTOMER, $spyCustomerNote->getFkCustomer(), $comparison);
        } elseif ($spyCustomerNote instanceof ObjectCollection) {
            return $this
                ->useCustomerNoteQuery()
                ->filterByPrimaryKeys($spyCustomerNote->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCustomerNote() only accepts arguments of type \Orm\Zed\CustomerNote\Persistence\SpyCustomerNote or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CustomerNote relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyCustomerQuery The current query, for fluid interface
     */
    public function joinCustomerNote($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CustomerNote');

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
            $this->addJoinObject($join, 'CustomerNote');
        }

        return $this;
    }

    /**
     * Use the CustomerNote relation SpyCustomerNote object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\CustomerNote\Persistence\SpyCustomerNoteQuery A secondary query class using the current class as primary query
     */
    public function useCustomerNoteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCustomerNote($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CustomerNote', '\Orm\Zed\CustomerNote\Persistence\SpyCustomerNoteQuery');
    }

    /**
     * Use the CustomerNote relation SpyCustomerNote object
     *
     * @param callable(\Orm\Zed\CustomerNote\Persistence\SpyCustomerNoteQuery):\Orm\Zed\CustomerNote\Persistence\SpyCustomerNoteQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withCustomerNoteQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useCustomerNoteQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the CustomerNote relation to the SpyCustomerNote table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\CustomerNote\Persistence\SpyCustomerNoteQuery The inner query object of the EXISTS statement
     */
    public function useCustomerNoteExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('CustomerNote', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the CustomerNote relation to the SpyCustomerNote table for a NOT EXISTS query.
     *
     * @see useCustomerNoteExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\CustomerNote\Persistence\SpyCustomerNoteQuery The inner query object of the NOT EXISTS statement
     */
    public function useCustomerNoteNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('CustomerNote', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\Newsletter\Persistence\SpyNewsletterSubscriber object
     *
     * @param \Orm\Zed\Newsletter\Persistence\SpyNewsletterSubscriber|ObjectCollection $spyNewsletterSubscriber the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyCustomerQuery The current query, for fluid interface
     */
    public function filterBySpyNewsletterSubscriber($spyNewsletterSubscriber, $comparison = null)
    {
        if ($spyNewsletterSubscriber instanceof \Orm\Zed\Newsletter\Persistence\SpyNewsletterSubscriber) {
            return $this
                ->addUsingAlias(SpyCustomerTableMap::COL_ID_CUSTOMER, $spyNewsletterSubscriber->getFkCustomer(), $comparison);
        } elseif ($spyNewsletterSubscriber instanceof ObjectCollection) {
            return $this
                ->useSpyNewsletterSubscriberQuery()
                ->filterByPrimaryKeys($spyNewsletterSubscriber->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyNewsletterSubscriber() only accepts arguments of type \Orm\Zed\Newsletter\Persistence\SpyNewsletterSubscriber or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyNewsletterSubscriber relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyCustomerQuery The current query, for fluid interface
     */
    public function joinSpyNewsletterSubscriber($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyNewsletterSubscriber');

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
            $this->addJoinObject($join, 'SpyNewsletterSubscriber');
        }

        return $this;
    }

    /**
     * Use the SpyNewsletterSubscriber relation SpyNewsletterSubscriber object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Newsletter\Persistence\SpyNewsletterSubscriberQuery A secondary query class using the current class as primary query
     */
    public function useSpyNewsletterSubscriberQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinSpyNewsletterSubscriber($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyNewsletterSubscriber', '\Orm\Zed\Newsletter\Persistence\SpyNewsletterSubscriberQuery');
    }

    /**
     * Use the SpyNewsletterSubscriber relation SpyNewsletterSubscriber object
     *
     * @param callable(\Orm\Zed\Newsletter\Persistence\SpyNewsletterSubscriberQuery):\Orm\Zed\Newsletter\Persistence\SpyNewsletterSubscriberQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyNewsletterSubscriberQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useSpyNewsletterSubscriberQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyNewsletterSubscriber table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Newsletter\Persistence\SpyNewsletterSubscriberQuery The inner query object of the EXISTS statement
     */
    public function useSpyNewsletterSubscriberExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyNewsletterSubscriber', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyNewsletterSubscriber table for a NOT EXISTS query.
     *
     * @see useSpyNewsletterSubscriberExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Newsletter\Persistence\SpyNewsletterSubscriberQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyNewsletterSubscriberNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyNewsletterSubscriber', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Filter the query by a related \Orm\Zed\ProductCustomerPermission\Persistence\SpyProductCustomerPermission object
     *
     * @param \Orm\Zed\ProductCustomerPermission\Persistence\SpyProductCustomerPermission|ObjectCollection $spyProductCustomerPermission the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildSpyCustomerQuery The current query, for fluid interface
     */
    public function filterBySpyProductCustomerPermission($spyProductCustomerPermission, $comparison = null)
    {
        if ($spyProductCustomerPermission instanceof \Orm\Zed\ProductCustomerPermission\Persistence\SpyProductCustomerPermission) {
            return $this
                ->addUsingAlias(SpyCustomerTableMap::COL_ID_CUSTOMER, $spyProductCustomerPermission->getFkCustomer(), $comparison);
        } elseif ($spyProductCustomerPermission instanceof ObjectCollection) {
            return $this
                ->useSpyProductCustomerPermissionQuery()
                ->filterByPrimaryKeys($spyProductCustomerPermission->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySpyProductCustomerPermission() only accepts arguments of type \Orm\Zed\ProductCustomerPermission\Persistence\SpyProductCustomerPermission or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyProductCustomerPermission relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildSpyCustomerQuery The current query, for fluid interface
     */
    public function joinSpyProductCustomerPermission($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyProductCustomerPermission');

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
            $this->addJoinObject($join, 'SpyProductCustomerPermission');
        }

        return $this;
    }

    /**
     * Use the SpyProductCustomerPermission relation SpyProductCustomerPermission object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\ProductCustomerPermission\Persistence\SpyProductCustomerPermissionQuery A secondary query class using the current class as primary query
     */
    public function useSpyProductCustomerPermissionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyProductCustomerPermission($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyProductCustomerPermission', '\Orm\Zed\ProductCustomerPermission\Persistence\SpyProductCustomerPermissionQuery');
    }

    /**
     * Use the SpyProductCustomerPermission relation SpyProductCustomerPermission object
     *
     * @param callable(\Orm\Zed\ProductCustomerPermission\Persistence\SpyProductCustomerPermissionQuery):\Orm\Zed\ProductCustomerPermission\Persistence\SpyProductCustomerPermissionQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyProductCustomerPermissionQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyProductCustomerPermissionQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }
    /**
     * Use the relation to SpyProductCustomerPermission table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string $typeOfExists Either ExistsCriterion::TYPE_EXISTS or ExistsCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\ProductCustomerPermission\Persistence\SpyProductCustomerPermissionQuery The inner query object of the EXISTS statement
     */
    public function useSpyProductCustomerPermissionExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        return $this->useExistsQuery('SpyProductCustomerPermission', $modelAlias, $queryClass, $typeOfExists);
    }

    /**
     * Use the relation to SpyProductCustomerPermission table for a NOT EXISTS query.
     *
     * @see useSpyProductCustomerPermissionExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\ProductCustomerPermission\Persistence\SpyProductCustomerPermissionQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyProductCustomerPermissionNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        return $this->useExistsQuery('SpyProductCustomerPermission', $modelAlias, $queryClass, 'NOT EXISTS');
    }
    /**
     * Exclude object from result
     *
     * @param   ChildSpyCustomer $spyCustomer Object to remove from the list of results
     *
     * @return $this|ChildSpyCustomerQuery The current query, for fluid interface
     */
    public function prune($spyCustomer = null)
    {
        if ($spyCustomer) {
            $this->addUsingAlias(SpyCustomerTableMap::COL_ID_CUSTOMER, $spyCustomer->getIdCustomer(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_customer table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCustomerTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyCustomerTableMap::clearInstancePool();
            SpyCustomerTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCustomerTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyCustomerTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyCustomerTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyCustomerTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    // timestampable behavior

    /**
     * Filter by the latest updated
     *
     * @param      int $nbDays Maximum age of the latest update in days
     *
     * @return     $this|ChildSpyCustomerQuery The current query, for fluid interface
     */
    public function recentlyUpdated($nbDays = 7)
    {
        return $this->addUsingAlias(SpyCustomerTableMap::COL_UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by update date desc
     *
     * @return     $this|ChildSpyCustomerQuery The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        return $this->addDescendingOrderByColumn(SpyCustomerTableMap::COL_UPDATED_AT);
    }

    /**
     * Order by update date asc
     *
     * @return     $this|ChildSpyCustomerQuery The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        return $this->addAscendingOrderByColumn(SpyCustomerTableMap::COL_UPDATED_AT);
    }

    /**
     * Order by create date desc
     *
     * @return     $this|ChildSpyCustomerQuery The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        return $this->addDescendingOrderByColumn(SpyCustomerTableMap::COL_CREATED_AT);
    }

    /**
     * Filter by the latest created
     *
     * @param      int $nbDays Maximum age of in days
     *
     * @return     $this|ChildSpyCustomerQuery The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        return $this->addUsingAlias(SpyCustomerTableMap::COL_CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by create date asc
     *
     * @return     $this|ChildSpyCustomerQuery The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        return $this->addAscendingOrderByColumn(SpyCustomerTableMap::COL_CREATED_AT);
    }

} // SpyCustomerQuery
