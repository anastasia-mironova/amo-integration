<?php
/*
 * Copyright 2021 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was generated from the file
 * https://github.com/google/googleapis/blob/master/google/ads/googleads/v6/services/campaign_budget_service.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Ads\GoogleAds\V6\Services\Gapic;

use Google\Ads\GoogleAds\V6\Resources\CampaignBudget;
use Google\Ads\GoogleAds\V6\Services\CampaignBudgetOperation;
use Google\Ads\GoogleAds\V6\Services\GetCampaignBudgetRequest;

use Google\Ads\GoogleAds\V6\Services\MutateCampaignBudgetsRequest;
use Google\Ads\GoogleAds\V6\Services\MutateCampaignBudgetsResponse;
use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;



/**
 * Service Description: Service to manage campaign budgets.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $campaignBudgetServiceClient = new CampaignBudgetServiceClient();
 * try {
 *     $formattedResourceName = $campaignBudgetServiceClient->campaignBudgetName('[CUSTOMER_ID]', '[CAMPAIGN_BUDGET_ID]');
 *     $response = $campaignBudgetServiceClient->getCampaignBudget($formattedResourceName);
 * } finally {
 *     $campaignBudgetServiceClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assistwith these names, this class includes a format method for each type of
 * name, and additionallya parseName method to extract the individual identifiers
 * contained within formatted namesthat are returned by the API.
 */
class CampaignBudgetServiceGapicClient
{
    use GapicClientTrait;

    /** The name of the service. */
    const SERVICE_NAME = 'google.ads.googleads.v6.services.CampaignBudgetService';

    /** The default address of the service. */
    const SERVICE_ADDRESS = 'googleads.googleapis.com';

    /** The default port of the service. */
    const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/adwords',
    ];

    private static $campaignBudgetNameTemplate;

    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/campaign_budget_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/campaign_budget_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/campaign_budget_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/campaign_budget_service_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getCampaignBudgetNameTemplate()
    {
        if (self::$campaignBudgetNameTemplate == null) {
            self::$campaignBudgetNameTemplate = new PathTemplate('customers/{customer_id}/campaignBudgets/{campaign_budget_id}');
        }

        return self::$campaignBudgetNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (self::$pathTemplateMap == null) {
            self::$pathTemplateMap = [
                'campaignBudget' => self::getCampaignBudgetNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * campaign_budget resource.
     *
     * @param string $customerId
     * @param string $campaignBudgetId
     *
     * @return string The formatted campaign_budget resource.
     */
    public static function campaignBudgetName($customerId, $campaignBudgetId)
    {
        return self::getCampaignBudgetNameTemplate()->render([
            'customer_id' => $customerId,
            'campaign_budget_id' => $campaignBudgetId,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - campaignBudget: customers/{customer_id}/campaignBudgets/{campaign_budget_id}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName($formattedName, $template = null)
    {
        $templateMap = self::getPathTemplateMap();
        if ($template) {
            if (!isset($templateMap[$template])) {
                throw new ValidationException("Template name $template does not exist");
            }

            return $templateMap[$template]->match($formattedName);
        }

        foreach ($templateMap as $templateName => $pathTemplate) {
            try {
                return $pathTemplate->match($formattedName);
            } catch (ValidationException $ex) {
                // Swallow the exception to continue trying other path templates
            }
        }

        throw new ValidationException("Input did not match any known format. Input: $formattedName");
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $serviceAddress
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'googleads.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $serviceAddress setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /**
     * Returns the requested Campaign Budget in full detail.
     *
     * Sample code:
     * ```
     * $campaignBudgetServiceClient = new CampaignBudgetServiceClient();
     * try {
     *     $formattedResourceName = $campaignBudgetServiceClient->campaignBudgetName('[CUSTOMER_ID]', '[CAMPAIGN_BUDGET_ID]');
     *     $response = $campaignBudgetServiceClient->getCampaignBudget($formattedResourceName);
     * } finally {
     *     $campaignBudgetServiceClient->close();
     * }
     * ```
     *
     * @param string $resourceName Required. The resource name of the campaign budget to fetch.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Ads\GoogleAds\V6\Resources\CampaignBudget
     *
     * @throws ApiException if the remote call fails
     */
    public function getCampaignBudget($resourceName, array $optionalArgs = [])
    {
        $request = new GetCampaignBudgetRequest();
        $request->setResourceName($resourceName);
        $requestParams = new RequestParamsHeaderDescriptor([
            'resource_name' => $request->getResourceName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('GetCampaignBudget', CampaignBudget::class, $optionalArgs, $request)->wait();
    }

    /**
     * Creates, updates, or removes campaign budgets. Operation statuses are
     * returned.
     *
     * Sample code:
     * ```
     * $campaignBudgetServiceClient = new CampaignBudgetServiceClient();
     * try {
     *     $customerId = 'customer_id';
     *     $operations = [];
     *     $response = $campaignBudgetServiceClient->mutateCampaignBudgets($customerId, $operations);
     * } finally {
     *     $campaignBudgetServiceClient->close();
     * }
     * ```
     *
     * @param string                    $customerId   Required. The ID of the customer whose campaign budgets are being modified.
     * @param CampaignBudgetOperation[] $operations   Required. The list of operations to perform on individual campaign budgets.
     * @param array                     $optionalArgs {
     *     Optional.
     *
     *     @type bool $partialFailure
     *           If true, successful operations will be carried out and invalid
     *           operations will return errors. If false, all operations will be carried
     *           out in one transaction if and only if they are all valid.
     *           Default is false.
     *     @type bool $validateOnly
     *           If true, the request is validated but not executed. Only errors are
     *           returned, not results.
     *     @type int $responseContentType
     *           The response content type setting. Determines whether the mutable resource
     *           or just the resource name should be returned post mutation.
     *           For allowed values, use constants defined on {@see \Google\Ads\GoogleAds\V6\Enums\ResponseContentTypeEnum\ResponseContentType}
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Ads\GoogleAds\V6\Services\MutateCampaignBudgetsResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function mutateCampaignBudgets($customerId, $operations, array $optionalArgs = [])
    {
        $request = new MutateCampaignBudgetsRequest();
        $request->setCustomerId($customerId);
        $request->setOperations($operations);
        if (isset($optionalArgs['partialFailure'])) {
            $request->setPartialFailure($optionalArgs['partialFailure']);
        }

        if (isset($optionalArgs['validateOnly'])) {
            $request->setValidateOnly($optionalArgs['validateOnly']);
        }

        if (isset($optionalArgs['responseContentType'])) {
            $request->setResponseContentType($optionalArgs['responseContentType']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
            'customer_id' => $request->getCustomerId(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('MutateCampaignBudgets', MutateCampaignBudgetsResponse::class, $optionalArgs, $request)->wait();
    }
}