# FomF\Ungerboeck\Client\OpportunityStatusesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**opportunityStatusesGetOpportunityStatus**](OpportunityStatusesApi.md#opportunityStatusesGetOpportunityStatus) | **GET** /api/v1/OpportunityStatuses/{OrgCode}/{Code}/{Designation} | Basic - Get a single Opportunity Status entry by its parameters
[**opportunityStatusesGetOpportunityStatusList**](OpportunityStatusesApi.md#opportunityStatusesGetOpportunityStatusList) | **GET** /api/v1/OpportunityStatuses/{OrgCode} | Basic - Search for opportunity status using OData.


# **opportunityStatusesGetOpportunityStatus**
> \FomF\Ungerboeck\Client\Model\OpportunityStatusesModel opportunityStatusesGetOpportunityStatus($org_code, $code, $designation)

Basic - Get a single Opportunity Status entry by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\OpportunityStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the opportunity status.
$code = "code_example"; // string | The code of the opportunity status.
$designation = "designation_example"; // string | The designation of the opportunity status.

try {
    $result = $apiInstance->opportunityStatusesGetOpportunityStatus($org_code, $code, $designation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityStatusesApi->opportunityStatusesGetOpportunityStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the opportunity status. |
 **code** | **string**| The code of the opportunity status. |
 **designation** | **string**| The designation of the opportunity status. |

### Return type

[**\FomF\Ungerboeck\Client\Model\OpportunityStatusesModel**](../Model/OpportunityStatusesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **opportunityStatusesGetOpportunityStatusList**
> \FomF\Ungerboeck\Client\Model\OpportunityStatusesModel opportunityStatusesGetOpportunityStatusList($org_code, $search)

Basic - Search for opportunity status using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\OpportunityStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->opportunityStatusesGetOpportunityStatusList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityStatusesApi->opportunityStatusesGetOpportunityStatusList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\OpportunityStatusesModel**](../Model/OpportunityStatusesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

