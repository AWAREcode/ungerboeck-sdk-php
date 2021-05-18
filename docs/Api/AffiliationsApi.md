# FomF\Ungerboeck\Client\AffiliationsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**affiliationsGetAffiliation**](AffiliationsApi.md#affiliationsGetAffiliation) | **GET** /api/v1/Affiliations/{OrgCode}/{AffiliationCode} | Basic - Get a single affiliation by its parameters
[**affiliationsGetAffiliationList**](AffiliationsApi.md#affiliationsGetAffiliationList) | **GET** /api/v1/Affiliations/{OrgCode} | Basic - Search for affiliations using OData.


# **affiliationsGetAffiliation**
> \FomF\Ungerboeck\Client\Model\AffiliationsModel affiliationsGetAffiliation($org_code, $affiliation_code)

Basic - Get a single affiliation by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\AffiliationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the affiliation.
$affiliation_code = "affiliation_code_example"; // string | The affiliation code of the affiliation.

try {
    $result = $apiInstance->affiliationsGetAffiliation($org_code, $affiliation_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliationsApi->affiliationsGetAffiliation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the affiliation. |
 **affiliation_code** | **string**| The affiliation code of the affiliation. |

### Return type

[**\FomF\Ungerboeck\Client\Model\AffiliationsModel**](../Model/AffiliationsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **affiliationsGetAffiliationList**
> \FomF\Ungerboeck\Client\Model\AffiliationsModel affiliationsGetAffiliationList($org_code, $search)

Basic - Search for affiliations using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\AffiliationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->affiliationsGetAffiliationList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliationsApi->affiliationsGetAffiliationList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\AffiliationsModel**](../Model/AffiliationsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

