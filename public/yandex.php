
<?php

use function Symfony\Component\String\b;

ini_set('display_errors', true);
ini_set('display_startup_errors', true);
ini_set('html_errors', true);
ini_set('log_errors', false);
ini_set('error_prepend_string', '<pre style="white-space:pre-wrap">');
ini_set('error_append_string', '</pre>');
error_reporting(E_ALL);
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

require __DIR__ . '/../marketintegration/vendor/autoload.php';

$configFile =  include __DIR__ . '/../config/config.php';

$alp_key = $configFile['yandex']['Api-Key'];
$clientId = $configFile['yandex']['clientId'];
$campaign_id = $configFile['yandex']['campaignId']; // int | Идентификатор кампании. Чтобы узнать идентификаторы, воспользуйтесь запросом [GET campaigns](../../reference/campaigns/getCampaigns.md#businessdto).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)
// $business_id = $configFile['yandex']['businessId']; // int | Идентификатор кабинета. Чтобы узнать идентификатор, воспользуйтесь запросом [GET campaigns](../../reference/campaigns/getCampaigns.md#businessdto).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)

echo 'Done1' . '<br>';


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', $alp_key);
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
echo 'Done2' . '<br>';


// $apiInstance = new OpenAPI\Client\Api\BidsApi(
//     // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
//     // This is optional, `GuzzleHttp\Client` will be used as default.
//     new GuzzleHttp\Client(),
//     $config
// );
$apiInstance = new OpenAPI\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
// $page_token = ''; // $page_token = 'eyBuZXh0SWQ6IDIzNDIgfQ=='; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуется передавать значение выходного параметра `nextPageToken`, полученное при последнем запросе.  Если задан `page_token` и в запросе есть параметры `page_number` и `page_size`, они игнорируются.
// $limit = 60; // int | Количество значений на одной странице. Минимум 50!!!
echo 'Done3' . '<br>';
// $get_bids_info_request = new \OpenAPI\Client\Model\GetBidsInfoRequest(); // \OpenAPI\Client\Model\GetBidsInfoRequest | description

// try {
//     // $result = $apiInstance->getBidsInfoForBusiness($business_id, $page_token, $limit, $get_bids_info_request);
//     $result = $apiInstance->getCampaign($campaign_id); // \OpenAPI\Client\Model\GetCampaignResponse

//     print_r($result);
// } catch (Exception $e) {
//     echo 'Exception when calling BidsApi->getBidsInfoForBusiness: ', $e->getMessage(), PHP_EOL;
// }

try {
    $result = $apiInstance->getCampaign($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->getCampaign: ', $e->getMessage(), PHP_EOL;
}


echo 'Done4' . '<br>';

