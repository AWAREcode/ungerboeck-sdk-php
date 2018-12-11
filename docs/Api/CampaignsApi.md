# FomF\Ungerboeck\Client\CampaignsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**campaignsGetCampaigns**](CampaignsApi.md#campaignsGetCampaigns) | **GET** /api/v1/Campaigns/{OrgCode}/{ID}/{Designation} | Get a campaign by its parameters
[**campaignsGetCampaignsList**](CampaignsApi.md#campaignsGetCampaignsList) | **GET** /api/v1/Campaigns/{OrgCode} | Search for campaign using OData.


# **campaignsGetCampaigns**
> \FomF\Ungerboeck\Client\Model\CampaignsModel campaignsGetCampaigns($org_code, $id, $designation)

Get a campaign by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the campaign.
$id = "id_example"; // string | The ID of the campaign.
$designation = "designation_example"; // string | The designation of the campaign.

try {
    $result = $apiInstance->campaignsGetCampaigns($org_code, $id, $designation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsGetCampaigns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the campaign. |
 **id** | **string**| The ID of the campaign. |
 **designation** | **string**| The designation of the campaign. |

### Return type

[**\FomF\Ungerboeck\Client\Model\CampaignsModel**](../Model/CampaignsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignsGetCampaignsList**
> \FomF\Ungerboeck\Client\Model\CampaignsModel[] campaignsGetCampaignsList($org_code, $search)

Search for campaign using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->campaignsGetCampaignsList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsGetCampaignsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\CampaignsModel[]**](../Model/CampaignsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

