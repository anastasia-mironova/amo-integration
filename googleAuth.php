<?php
require_once 'vendor/autoload.php';
use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201809\cm\CampaignService;
use Google\AdsApi\AdWords\v201809\cm\OrderBy;
use Google\AdsApi\AdWords\v201809\cm\Paging;
use Google\AdsApi\AdWords\v201809\cm\Selector;
use Google\AdsApi\AdWords\v201809\cm\SortOrder;
use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\Auth\CredentialsLoader;
use Google\Auth\OAuth2;


const ADWORDS_API_SCOPE = 'https://www.googleapis.com/auth/adwords';

    /**
     * @var string the OAuth2 scope for the Ad Manger API
     * @see https://developers.google.com/ad-manager/docs/authentication#scope
     */
    const AD_MANAGER_API_SCOPE = 'https://www.googleapis.com/auth/dfp';

    /**
     * @var string the Google OAuth2 authorization URI for OAuth2 requests
     * @see https://developers.google.com/identity/protocols/OAuth2InstalledApp#formingtheurl
     */
    const AUTHORIZATION_URI = 'https://accounts.google.com/o/oauth2/v2/auth';

    /**
     * @var string the redirect URI for OAuth2 installed application flows
     * @see https://developers.google.com/identity/protocols/OAuth2InstalledApp#formingtheurl
     */
    const REDIRECT_URI = 'https://fea756039a48.ngrok.io/phptest/googleads-php-lib/examples/Auth/GetRefreshToken.php';

  
        $PRODUCTS = [
            ['AdWords API', ADWORDS_API_SCOPE],
            ['Ad Manager API', AD_MANAGER_API_SCOPE],
            ['AdWords API and Ad Manager API', ADWORDS_API_SCOPE . ' '
                . AD_MANAGER_API_SCOPE]
        ];

        $stdin = fopen('php://stdin', 'r');

        print 'Enter your OAuth2 client ID here: ';
        $clientId = trim(fgets($stdin));

        print 'Enter your OAuth2 client secret here: ';
        $clientSecret = trim(fgets($stdin));

        print "Select the API you're using: [0] AdWords API [1] Ad Manager API "
            . "[2] Both" . PHP_EOL;
        $api = trim(fgets($stdin));

        while (!is_numeric($api)
            || !(strval(intval($api)) === $api)
            || !(intval($api) >= 0 && intval($api) <= 2)) {
            print "Please enter a valid number for the API you're using: " .
                "[0] AdWords API [1] Ad Manager API [2] Both" . PHP_EOL;
            $api = trim(fgets($stdin));
        }
        $api = intval($api);

        if ($api === 2) {
            print '[OPTIONAL] enter any additional OAuth2 scopes as a space '
                . 'delimited string here (the AdWords API and Ad Manager API '
                . 'scopes are already included): ';
        } else {
            printf(
                '[OPTIONAL] enter any additional OAuth2 scopes as a space '
                . 'delimited string here (the %s scope is already included): ',
                $PRODUCTS[$api][0]
            );
        }
        $scopes = $PRODUCTS[$api][1] . ' ' . trim(fgets($stdin));

        $oauth2 = new OAuth2(
            [
                'authorizationUri' => AUTHORIZATION_URI,
                'redirectUri' => REDIRECT_URI,
                'tokenCredentialUri' => CredentialsLoader::TOKEN_CREDENTIAL_URI,
                'clientId' => $clientId,
                'clientSecret' => $clientSecret,
                'scope' => $scopes
            ]
        );

        printf(
            "Log into the Google account you use for %s and visit the following"
                . " URL:\n%s\n\n",
            $PRODUCTS[$api][0],
            $oauth2->buildFullAuthorizationUri()
        );
        print 'After approving the application, enter the authorization code '
            . 'here: ';
        $code = trim(fgets($stdin));
        fclose($stdin);
        print "\n";

        $oauth2->setCode($code);
        $authToken = $oauth2->fetchAuthToken();

        printf("Your refresh token is: %s\n\n", $authToken['refresh_token']);
        printf(
            "Copy the following lines to your 'adsapi_php.ini' file:\n"
            . "clientId = \"%s\"\nclientSecret = \"%s\"\n"
            . "refreshToken = \"%s\"\n",
            $clientId,
            $clientSecret,
            $authToken['refresh_token']
        );
    
// $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()->build();

//         // Construct an API session configured from a properties file and the
//         // OAuth2 credentials above.
//         $session = (new AdWordsSessionBuilder())->fromFile('adsapi_php.ini')->withOAuth2Credential($oAuth2Credential)->build();
//         $campaignService = $adWordsServices->get($session, CampaignService::class);

//         // Create selector.
//         $selector = new Selector();
//         $selector->setFields(['Id', 'Name']);
//         $selector->setOrdering([new OrderBy('Name', SortOrder::ASCENDING)]);
//         $selector->setPaging(new Paging(0, self::PAGE_LIMIT));

//         $totalNumEntries = 0;
//         do {
//             // Make the get request.
//             $page = $campaignService->get($selector);

//             // Display results.
//             if ($page->getEntries() !== null) {
//                 $totalNumEntries = $page->getTotalNumEntries();
//                 foreach ($page->getEntries() as $campaign) {
//                     printf(
//                         "Campaign with ID %d and name '%s' was found.\n",
//                         $campaign->getId(),
//                         $campaign->getName()
//                     );
//                 }
//             }

//             // Advance the paging index.
//             $selector->getPaging()->setStartIndex(
//                 $selector->getPaging()->getStartIndex() + self::PAGE_LIMIT
//             );
//         } while ($selector->getPaging()->getStartIndex() < $totalNumEntries);

//         printf("Number of results found: %d\n", $totalNumEntries);