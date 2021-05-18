# FomF\Ungerboeck\Client\BulletinsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulletinsGetBulletin**](BulletinsApi.md#bulletinsGetBulletin) | **GET** /api/v1/Bulletins/{OrgCode}/{BulletinApplication}/{Meeting}/{Bulletin} | Standard - Get a single bulletin by its parameters
[**bulletinsGetBulletinList**](BulletinsApi.md#bulletinsGetBulletinList) | **GET** /api/v1/Bulletins/{OrgCode} | Standard - Search for bulletin using OData.


# **bulletinsGetBulletin**
> \FomF\Ungerboeck\Client\Model\BulletinsModel bulletinsGetBulletin($org_code, $bulletin_application, $meeting, $bulletin)

Standard - Get a single bulletin by its parameters

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
    $result = $apiInstance->bulletinsGetBulletin($org_code, $bulletin_application, $meeting, $bulletin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulletinsApi->bulletinsGetBulletin: ', $e->getMessage(), PHP_EOL;
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

# **bulletinsGetBulletinList**
> \FomF\Ungerboeck\Client\Model\BulletinsModel bulletinsGetBulletinList($org_code, $search)

Standard - Search for bulletin using OData.

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
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->bulletinsGetBulletinList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulletinsApi->bulletinsGetBulletinList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\BulletinsModel**](../Model/BulletinsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

