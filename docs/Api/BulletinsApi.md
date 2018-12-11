# FomF\Ungerboeck\Client\BulletinsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulletinsGetBulletins**](BulletinsApi.md#bulletinsGetBulletins) | **GET** /api/v1/Bulletins/{OrgCode}/{BulletinApplication}/{Meeting}/{Bulletin} | Get a bulletin by its parameters
[**bulletinsGetBulletinsList**](BulletinsApi.md#bulletinsGetBulletinsList) | **GET** /api/v1/Bulletins/{OrgCode} | Search for bulletin using OData.


# **bulletinsGetBulletins**
> \FomF\Ungerboeck\Client\Model\BulletinsModel bulletinsGetBulletins($org_code, $bulletin_application, $meeting, $bulletin)

Get a bulletin by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\BulletinsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the bulletin.
$bulletin_application = "bulletin_application_example"; // string | The bulletin application of the bulletin.
$meeting = 56; // int | The meeting ID of the bulletin.
$bulletin = 56; // int | The bulletin sequence number of the bulletin.

try {
    $result = $apiInstance->bulletinsGetBulletins($org_code, $bulletin_application, $meeting, $bulletin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulletinsApi->bulletinsGetBulletins: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the bulletin. |
 **bulletin_application** | **string**| The bulletin application of the bulletin. |
 **meeting** | **int**| The meeting ID of the bulletin. |
 **bulletin** | **int**| The bulletin sequence number of the bulletin. |

### Return type

[**\FomF\Ungerboeck\Client\Model\BulletinsModel**](../Model/BulletinsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bulletinsGetBulletinsList**
> \FomF\Ungerboeck\Client\Model\BulletinsModel[] bulletinsGetBulletinsList($org_code, $search)

Search for bulletin using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\BulletinsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->bulletinsGetBulletinsList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulletinsApi->bulletinsGetBulletinsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\BulletinsModel[]**](../Model/BulletinsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

