# FomF\Ungerboeck\Client\ExhibitorsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**exhibitorsGetExhibitor**](ExhibitorsApi.md#exhibitorsGetExhibitor) | **GET** /api/v1/Exhibitors/{OrgCode}/{ExhibitorID} | Get an Exhibitor by its parameters
[**exhibitorsGetExhibitorsList**](ExhibitorsApi.md#exhibitorsGetExhibitorsList) | **GET** /api/v1/Exhibitors/{OrgCode} | Search for Exhibitors using OData.  Note, this will not return user fields.  Use the single GET endpoint to retrieve user fields.


# **exhibitorsGetExhibitor**
> \FomF\Ungerboeck\Client\Model\ExhibitorsModel exhibitorsGetExhibitor($org_code, $exhibitor_id)

Get an Exhibitor by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ExhibitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the Exhibitor.
$exhibitor_id = 56; // int | The Exhibitor ID of the Exhibitor.

try {
    $result = $apiInstance->exhibitorsGetExhibitor($org_code, $exhibitor_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExhibitorsApi->exhibitorsGetExhibitor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the Exhibitor. |
 **exhibitor_id** | **int**| The Exhibitor ID of the Exhibitor. |

### Return type

[**\FomF\Ungerboeck\Client\Model\ExhibitorsModel**](../Model/ExhibitorsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exhibitorsGetExhibitorsList**
> \FomF\Ungerboeck\Client\Model\ExhibitorsModel[] exhibitorsGetExhibitorsList($org_code, $search)

Search for Exhibitors using OData.  Note, this will not return user fields.  Use the single GET endpoint to retrieve user fields.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ExhibitorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->exhibitorsGetExhibitorsList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExhibitorsApi->exhibitorsGetExhibitorsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\ExhibitorsModel[]**](../Model/ExhibitorsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

