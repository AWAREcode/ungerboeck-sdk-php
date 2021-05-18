# FomF\Ungerboeck\Client\MailingListsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**mailingListsGetMailingList**](MailingListsApi.md#mailingListsGetMailingList) | **GET** /api/v1/MailingLists/{OrgCode}/{ID} | Standard - Get a single mailing list entry by its parameters
[**mailingListsGetMailingListList**](MailingListsApi.md#mailingListsGetMailingListList) | **GET** /api/v1/MailingLists/{OrgCode} | Standard - Search for mailing list using OData.


# **mailingListsGetMailingList**
> \FomF\Ungerboeck\Client\Model\MailingListsModel mailingListsGetMailingList($org_code, $id)

Standard - Get a single mailing list entry by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\MailingListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the mailing list.
$id = 56; // int | The ID of the mailing list.

try {
    $result = $apiInstance->mailingListsGetMailingList($org_code, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailingListsApi->mailingListsGetMailingList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the mailing list. |
 **id** | **int**| The ID of the mailing list. |

### Return type

[**\FomF\Ungerboeck\Client\Model\MailingListsModel**](../Model/MailingListsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mailingListsGetMailingListList**
> \FomF\Ungerboeck\Client\Model\MailingListsModel mailingListsGetMailingListList($org_code, $search)

Standard - Search for mailing list using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\MailingListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->mailingListsGetMailingListList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailingListsApi->mailingListsGetMailingListList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\MailingListsModel**](../Model/MailingListsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

