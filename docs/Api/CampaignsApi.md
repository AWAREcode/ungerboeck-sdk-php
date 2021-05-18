# FomF\Ungerboeck\Client\CampaignsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**campaignsGetCampaignList**](CampaignsApi.md#campaignsGetCampaignList) | **GET** /api/v1/Campaigns/{OrgCode} | Standard - Search for campaign using OData.
[**campaignsGetCampaigns**](CampaignsApi.md#campaignsGetCampaigns) | **GET** /api/v1/Campaigns/{OrgCode}/{ID}/{Designation} | Standard - Get a single campaign by its parameters
[**campaignsPostCampaign**](CampaignsApi.md#campaignsPostCampaign) | **POST** /api/v1/Campaigns | Standard - Add new Campaign entry
[**campaignsPutCampaign**](CampaignsApi.md#campaignsPutCampaign) | **PUT** /api/v1/Campaigns/{OrgCode}/{ID}/{Designation} | Standard - Edit Campaign


# **campaignsGetCampaignList**
> \FomF\Ungerboeck\Client\Model\CampaignsModel campaignsGetCampaignList($org_code, $search)

Standard - Search for campaign using OData.

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
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->campaignsGetCampaignList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsGetCampaignList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\CampaignsModel**](../Model/CampaignsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignsGetCampaigns**
> \FomF\Ungerboeck\Client\Model\CampaignsModel campaignsGetCampaigns($org_code, $id, $designation)

Standard - Get a single campaign by its parameters

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

# **campaignsPostCampaign**
> \FomF\Ungerboeck\Client\Model\CampaignsModel campaignsPostCampaign($data)

Standard - Add new Campaign entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\CampaignsModel(); // \FomF\Ungerboeck\Client\Model\CampaignsModel | (Include in the HTTP Body) A CampaignsModel entry to add.

try {
    $result = $apiInstance->campaignsPostCampaign($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsPostCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\CampaignsModel**](../Model/CampaignsModel.md)| (Include in the HTTP Body) A CampaignsModel entry to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\CampaignsModel**](../Model/CampaignsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignsPutCampaign**
> \FomF\Ungerboeck\Client\Model\CampaignsModel campaignsPutCampaign($org_code, $id, $designation, $data)

Standard - Edit Campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the Campaign.
$id = "id_example"; // string | ID for the Campaign.
$designation = "designation_example"; // string | The Designation for the Campaign.
$data = new \FomF\Ungerboeck\Client\Model\CampaignsModel(); // \FomF\Ungerboeck\Client\Model\CampaignsModel | (Include in the HTTP Body) A CampaignsModel entry to edit.

try {
    $result = $apiInstance->campaignsPutCampaign($org_code, $id, $designation, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsPutCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the Campaign. |
 **id** | **string**| ID for the Campaign. |
 **designation** | **string**| The Designation for the Campaign. |
 **data** | [**\FomF\Ungerboeck\Client\Model\CampaignsModel**](../Model/CampaignsModel.md)| (Include in the HTTP Body) A CampaignsModel entry to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\CampaignsModel**](../Model/CampaignsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

