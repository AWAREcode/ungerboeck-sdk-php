# FomF\Ungerboeck\Client\CampaignDetailsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**campaignDetailsGetCampaignDetail**](CampaignDetailsApi.md#campaignDetailsGetCampaignDetail) | **GET** /api/v1/CampaignDetails/{OrgCode}/{CampaignDesignation}/{Campaign}/{SequenceNumber} | Standard - Get a single campaign by its parameters
[**campaignDetailsGetCampaignDetailList**](CampaignDetailsApi.md#campaignDetailsGetCampaignDetailList) | **GET** /api/v1/CampaignDetails/{OrgCode} | Standard - Search for campaign using OData.


# **campaignDetailsGetCampaignDetail**
> \FomF\Ungerboeck\Client\Model\CampaignDetailsModel campaignDetailsGetCampaignDetail($org_code, $campaign_designation, $campaign, $sequence_number)

Standard - Get a single campaign by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\CampaignDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the campaign.
$campaign_designation = "campaign_designation_example"; // string | The designation of the campaign.
$campaign = "campaign_example"; // string | The ID of the campaign.
$sequence_number = 56; // int | Contains a system-generated sequence number used to enforce record uniqueness.

try {
    $result = $apiInstance->campaignDetailsGetCampaignDetail($org_code, $campaign_designation, $campaign, $sequence_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignDetailsApi->campaignDetailsGetCampaignDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the campaign. |
 **campaign_designation** | **string**| The designation of the campaign. |
 **campaign** | **string**| The ID of the campaign. |
 **sequence_number** | **int**| Contains a system-generated sequence number used to enforce record uniqueness. |

### Return type

[**\FomF\Ungerboeck\Client\Model\CampaignDetailsModel**](../Model/CampaignDetailsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignDetailsGetCampaignDetailList**
> \FomF\Ungerboeck\Client\Model\CampaignDetailsModel campaignDetailsGetCampaignDetailList($org_code, $search)

Standard - Search for campaign using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\CampaignDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->campaignDetailsGetCampaignDetailList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignDetailsApi->campaignDetailsGetCampaignDetailList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\CampaignDetailsModel**](../Model/CampaignDetailsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

