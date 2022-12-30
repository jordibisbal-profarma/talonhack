<?php
/**
 * ManagementApiTest
 * PHP version 5
 *
 * @category Class
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Talon.One API
 *
 * Use the Talon.One API to integrate with your application and to manage applications and campaigns:  - Use the operations in the [Integration API section](#integration-api) are used to integrate with our platform - Use the operation in the [Management API section](#management-api) to manage applications and campaigns.  ## Determining the base URL of the endpoints  The API is available at the same hostname as your Campaign Manager deployment. For example, if you are reading this page at `https://mycompany.talon.one/docs/api/`, the URL for the [updateCustomerSession](https://docs.talon.one/integration-api/#operation/updateCustomerSessionV2) endpoint is `https://mycompany.talon.one/v2/customer_sessions/{Id}`
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the endpoint.
 */

namespace TalonOne\Client;

use \TalonOne\Client\Configuration;
use \TalonOne\Client\ApiException;
use \TalonOne\Client\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * ManagementApiTest Class Doc Comment
 *
 * @category Class
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ManagementApiTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for addLoyaltyPoints
     *
     * Add points in loyalty program for given customer.
     *
     */
    public function testAddLoyaltyPoints()
    {
    }

    /**
     * Test case for copyCampaignToApplications
     *
     * Copy the campaign into the specified application.
     *
     */
    public function testCopyCampaignToApplications()
    {
    }

    /**
     * Test case for createAccountCollection
     *
     * Create account-level collection.
     *
     */
    public function testCreateAccountCollection()
    {
    }

    /**
     * Test case for createAdditionalCost
     *
     * Create additional cost.
     *
     */
    public function testCreateAdditionalCost()
    {
    }

    /**
     * Test case for createAttribute
     *
     * Create custom attribute.
     *
     */
    public function testCreateAttribute()
    {
    }

    /**
     * Test case for createCampaignFromTemplate
     *
     * Create campaign from campaign template.
     *
     */
    public function testCreateCampaignFromTemplate()
    {
    }

    /**
     * Test case for createCollection
     *
     * Create collection.
     *
     */
    public function testCreateCollection()
    {
    }

    /**
     * Test case for createCoupons
     *
     * Create coupons.
     *
     */
    public function testCreateCoupons()
    {
    }

    /**
     * Test case for createCouponsAsync
     *
     * Create coupons asynchronously.
     *
     */
    public function testCreateCouponsAsync()
    {
    }

    /**
     * Test case for createCouponsForMultipleRecipients
     *
     * Create coupons for multiple recipients.
     *
     */
    public function testCreateCouponsForMultipleRecipients()
    {
    }

    /**
     * Test case for createNotificationWebhook
     *
     * Create notification webhook.
     *
     */
    public function testCreateNotificationWebhook()
    {
    }

    /**
     * Test case for createPasswordRecoveryEmail
     *
     * Request a password reset.
     *
     */
    public function testCreatePasswordRecoveryEmail()
    {
    }

    /**
     * Test case for createSession
     *
     * Create session.
     *
     */
    public function testCreateSession()
    {
    }

    /**
     * Test case for deleteAccountCollection
     *
     * Delete account-level collection.
     *
     */
    public function testDeleteAccountCollection()
    {
    }

    /**
     * Test case for deleteCampaign
     *
     * Delete campaign.
     *
     */
    public function testDeleteCampaign()
    {
    }

    /**
     * Test case for deleteCollection
     *
     * Delete collection.
     *
     */
    public function testDeleteCollection()
    {
    }

    /**
     * Test case for deleteCoupon
     *
     * Delete coupon.
     *
     */
    public function testDeleteCoupon()
    {
    }

    /**
     * Test case for deleteCoupons
     *
     * Delete coupons.
     *
     */
    public function testDeleteCoupons()
    {
    }

    /**
     * Test case for deleteNotificationWebhook
     *
     * Delete notification webhook.
     *
     */
    public function testDeleteNotificationWebhook()
    {
    }

    /**
     * Test case for deleteReferral
     *
     * Delete referral.
     *
     */
    public function testDeleteReferral()
    {
    }

    /**
     * Test case for destroySession
     *
     * Destroy session.
     *
     */
    public function testDestroySession()
    {
    }

    /**
     * Test case for exportAccountCollectionItems
     *
     * Export account-level collection's items.
     *
     */
    public function testExportAccountCollectionItems()
    {
    }

    /**
     * Test case for exportCollectionItems
     *
     * Export a collection's items.
     *
     */
    public function testExportCollectionItems()
    {
    }

    /**
     * Test case for exportCoupons
     *
     * Export coupons.
     *
     */
    public function testExportCoupons()
    {
    }

    /**
     * Test case for exportCustomerSessions
     *
     * Export customer sessions.
     *
     */
    public function testExportCustomerSessions()
    {
    }

    /**
     * Test case for exportEffects
     *
     * Export triggered effects.
     *
     */
    public function testExportEffects()
    {
    }

    /**
     * Test case for exportLoyaltyBalance
     *
     * Export customer loyalty balance to a CSV file.
     *
     */
    public function testExportLoyaltyBalance()
    {
    }

    /**
     * Test case for exportLoyaltyLedger
     *
     * Export a customer's loyalty ledger log.
     *
     */
    public function testExportLoyaltyLedger()
    {
    }

    /**
     * Test case for exportReferrals
     *
     * Export referrals.
     *
     */
    public function testExportReferrals()
    {
    }

    /**
     * Test case for getAccessLogsWithoutTotalCount
     *
     * Get access logs for Application.
     *
     */
    public function testGetAccessLogsWithoutTotalCount()
    {
    }

    /**
     * Test case for getAccount
     *
     * Get account details.
     *
     */
    public function testGetAccount()
    {
    }

    /**
     * Test case for getAccountAnalytics
     *
     * Get account analytics.
     *
     */
    public function testGetAccountAnalytics()
    {
    }

    /**
     * Test case for getAccountCollection
     *
     * Get account-level collection.
     *
     */
    public function testGetAccountCollection()
    {
    }

    /**
     * Test case for getAdditionalCost
     *
     * Get additional cost.
     *
     */
    public function testGetAdditionalCost()
    {
    }

    /**
     * Test case for getAdditionalCosts
     *
     * List additional costs.
     *
     */
    public function testGetAdditionalCosts()
    {
    }

    /**
     * Test case for getAllAccessLogs
     *
     * List access logs.
     *
     */
    public function testGetAllAccessLogs()
    {
    }

    /**
     * Test case for getAllRoles
     *
     * List roles.
     *
     */
    public function testGetAllRoles()
    {
    }

    /**
     * Test case for getApplication
     *
     * Get application.
     *
     */
    public function testGetApplication()
    {
    }

    /**
     * Test case for getApplicationApiHealth
     *
     * Get report of health of application API.
     *
     */
    public function testGetApplicationApiHealth()
    {
    }

    /**
     * Test case for getApplicationCustomer
     *
     * Get application's customer.
     *
     */
    public function testGetApplicationCustomer()
    {
    }

    /**
     * Test case for getApplicationCustomerFriends
     *
     * List friends referred by customer profile.
     *
     */
    public function testGetApplicationCustomerFriends()
    {
    }

    /**
     * Test case for getApplicationCustomers
     *
     * List application's customers.
     *
     */
    public function testGetApplicationCustomers()
    {
    }

    /**
     * Test case for getApplicationCustomersByAttributes
     *
     * List application customers matching the given attributes.
     *
     */
    public function testGetApplicationCustomersByAttributes()
    {
    }

    /**
     * Test case for getApplicationEventTypes
     *
     * List Applications event types.
     *
     */
    public function testGetApplicationEventTypes()
    {
    }

    /**
     * Test case for getApplicationEventsWithoutTotalCount
     *
     * List Applications events.
     *
     */
    public function testGetApplicationEventsWithoutTotalCount()
    {
    }

    /**
     * Test case for getApplicationSession
     *
     * Get Application session.
     *
     */
    public function testGetApplicationSession()
    {
    }

    /**
     * Test case for getApplicationSessions
     *
     * List Application sessions.
     *
     */
    public function testGetApplicationSessions()
    {
    }

    /**
     * Test case for getApplications
     *
     * List applications.
     *
     */
    public function testGetApplications()
    {
    }

    /**
     * Test case for getAttribute
     *
     * Get custom attribute.
     *
     */
    public function testGetAttribute()
    {
    }

    /**
     * Test case for getAttributes
     *
     * List custom attributes.
     *
     */
    public function testGetAttributes()
    {
    }

    /**
     * Test case for getAudiences
     *
     * List audiences.
     *
     */
    public function testGetAudiences()
    {
    }

    /**
     * Test case for getCampaign
     *
     * Get campaign.
     *
     */
    public function testGetCampaign()
    {
    }

    /**
     * Test case for getCampaignAnalytics
     *
     * Get analytics of campaigns.
     *
     */
    public function testGetCampaignAnalytics()
    {
    }

    /**
     * Test case for getCampaignByAttributes
     *
     * List campaigns that match the given attributes.
     *
     */
    public function testGetCampaignByAttributes()
    {
    }

    /**
     * Test case for getCampaigns
     *
     * List campaigns.
     *
     */
    public function testGetCampaigns()
    {
    }

    /**
     * Test case for getChanges
     *
     * Get audit logs for an account.
     *
     */
    public function testGetChanges()
    {
    }

    /**
     * Test case for getCollection
     *
     * Get collection.
     *
     */
    public function testGetCollection()
    {
    }

    /**
     * Test case for getCollectionItems
     *
     * Get collection items.
     *
     */
    public function testGetCollectionItems()
    {
    }

    /**
     * Test case for getCouponsWithoutTotalCount
     *
     * List coupons.
     *
     */
    public function testGetCouponsWithoutTotalCount()
    {
    }

    /**
     * Test case for getCustomerActivityReport
     *
     * Get customer's activity report.
     *
     */
    public function testGetCustomerActivityReport()
    {
    }

    /**
     * Test case for getCustomerActivityReportsWithoutTotalCount
     *
     * Get Activity Reports for Application Customers.
     *
     */
    public function testGetCustomerActivityReportsWithoutTotalCount()
    {
    }

    /**
     * Test case for getCustomerAnalytics
     *
     * Get customer's analytics report.
     *
     */
    public function testGetCustomerAnalytics()
    {
    }

    /**
     * Test case for getCustomerProfile
     *
     * Get customer profile.
     *
     */
    public function testGetCustomerProfile()
    {
    }

    /**
     * Test case for getCustomerProfiles
     *
     * List customer profiles.
     *
     */
    public function testGetCustomerProfiles()
    {
    }

    /**
     * Test case for getCustomersByAttributes
     *
     * List customer profiles matching the given attributes.
     *
     */
    public function testGetCustomersByAttributes()
    {
    }

    /**
     * Test case for getEventTypes
     *
     * List event types.
     *
     */
    public function testGetEventTypes()
    {
    }

    /**
     * Test case for getExports
     *
     * Get exports.
     *
     */
    public function testGetExports()
    {
    }

    /**
     * Test case for getLoyaltyPoints
     *
     * Get the Loyalty Ledger for this integrationID.
     *
     */
    public function testGetLoyaltyPoints()
    {
    }

    /**
     * Test case for getLoyaltyProgram
     *
     * Get loyalty program.
     *
     */
    public function testGetLoyaltyProgram()
    {
    }

    /**
     * Test case for getLoyaltyPrograms
     *
     * List loyalty programs.
     *
     */
    public function testGetLoyaltyPrograms()
    {
    }

    /**
     * Test case for getLoyaltyStatistics
     *
     * Get loyalty program statistics by loyalty program ID.
     *
     */
    public function testGetLoyaltyStatistics()
    {
    }

    /**
     * Test case for getNotificationWebhook
     *
     * Get notification webhook.
     *
     */
    public function testGetNotificationWebhook()
    {
    }

    /**
     * Test case for getNotificationWebhooks
     *
     * List notification webhooks.
     *
     */
    public function testGetNotificationWebhooks()
    {
    }

    /**
     * Test case for getReferralsWithoutTotalCount
     *
     * List referrals.
     *
     */
    public function testGetReferralsWithoutTotalCount()
    {
    }

    /**
     * Test case for getRole
     *
     * Get role.
     *
     */
    public function testGetRole()
    {
    }

    /**
     * Test case for getRuleset
     *
     * Get ruleset.
     *
     */
    public function testGetRuleset()
    {
    }

    /**
     * Test case for getRulesets
     *
     * List campaign rulesets.
     *
     */
    public function testGetRulesets()
    {
    }

    /**
     * Test case for getUser
     *
     * Get user.
     *
     */
    public function testGetUser()
    {
    }

    /**
     * Test case for getUsers
     *
     * List users in account.
     *
     */
    public function testGetUsers()
    {
    }

    /**
     * Test case for getWebhook
     *
     * Get webhook.
     *
     */
    public function testGetWebhook()
    {
    }

    /**
     * Test case for getWebhookActivationLogs
     *
     * List webhook activation log entries.
     *
     */
    public function testGetWebhookActivationLogs()
    {
    }

    /**
     * Test case for getWebhookLogs
     *
     * List webhook log entries.
     *
     */
    public function testGetWebhookLogs()
    {
    }

    /**
     * Test case for getWebhooks
     *
     * List webhooks.
     *
     */
    public function testGetWebhooks()
    {
    }

    /**
     * Test case for importAccountCollection
     *
     * Import data in existing account-level collection.
     *
     */
    public function testImportAccountCollection()
    {
    }

    /**
     * Test case for importAllowedList
     *
     * Import allowed values for attribute.
     *
     */
    public function testImportAllowedList()
    {
    }

    /**
     * Test case for importCollection
     *
     * Import data in existing collection.
     *
     */
    public function testImportCollection()
    {
    }

    /**
     * Test case for importCoupons
     *
     * Import coupons.
     *
     */
    public function testImportCoupons()
    {
    }

    /**
     * Test case for importLoyaltyPoints
     *
     * Import loyalty points.
     *
     */
    public function testImportLoyaltyPoints()
    {
    }

    /**
     * Test case for importPoolGiveaways
     *
     * Import giveaway codes into a giveaway pool.
     *
     */
    public function testImportPoolGiveaways()
    {
    }

    /**
     * Test case for importReferrals
     *
     * Import referrals.
     *
     */
    public function testImportReferrals()
    {
    }

    /**
     * Test case for listAccountCollections
     *
     * List collections in account.
     *
     */
    public function testListAccountCollections()
    {
    }

    /**
     * Test case for listCollections
     *
     * List collections.
     *
     */
    public function testListCollections()
    {
    }

    /**
     * Test case for listCollectionsInApplication
     *
     * List collections in application.
     *
     */
    public function testListCollectionsInApplication()
    {
    }

    /**
     * Test case for removeLoyaltyPoints
     *
     * Deduct points in loyalty program for given customer.
     *
     */
    public function testRemoveLoyaltyPoints()
    {
    }

    /**
     * Test case for resetPassword
     *
     * Reset password.
     *
     */
    public function testResetPassword()
    {
    }

    /**
     * Test case for searchCouponsAdvancedApplicationWideWithoutTotalCount
     *
     * List coupons that match the given attributes (without total count).
     *
     */
    public function testSearchCouponsAdvancedApplicationWideWithoutTotalCount()
    {
    }

    /**
     * Test case for searchCouponsAdvancedWithoutTotalCount
     *
     * List coupons that match the given attributes in campaign (without total count).
     *
     */
    public function testSearchCouponsAdvancedWithoutTotalCount()
    {
    }

    /**
     * Test case for updateAccountCollection
     *
     * Update account-level collection.
     *
     */
    public function testUpdateAccountCollection()
    {
    }

    /**
     * Test case for updateAdditionalCost
     *
     * Update additional cost.
     *
     */
    public function testUpdateAdditionalCost()
    {
    }

    /**
     * Test case for updateAttribute
     *
     * Update custom attribute.
     *
     */
    public function testUpdateAttribute()
    {
    }

    /**
     * Test case for updateCampaign
     *
     * Update campaign.
     *
     */
    public function testUpdateCampaign()
    {
    }

    /**
     * Test case for updateCollection
     *
     * Update collection description.
     *
     */
    public function testUpdateCollection()
    {
    }

    /**
     * Test case for updateCoupon
     *
     * Update coupon.
     *
     */
    public function testUpdateCoupon()
    {
    }

    /**
     * Test case for updateCouponBatch
     *
     * Update coupons.
     *
     */
    public function testUpdateCouponBatch()
    {
    }

    /**
     * Test case for updateNotificationWebhook
     *
     * Update notification webhook.
     *
     */
    public function testUpdateNotificationWebhook()
    {
    }

    /**
     * Test case for updateReferral
     *
     * Update referral.
     *
     */
    public function testUpdateReferral()
    {
    }
}