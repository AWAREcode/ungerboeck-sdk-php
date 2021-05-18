# FomF\Ungerboeck\Client\ChecklistsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checklistsGetChecklist**](ChecklistsApi.md#checklistsGetChecklist) | **GET** /api/v1/Checklists/{OrgCode}/{Code} | Standard - Get a single Checklist entry by its parameters
[**checklistsGetChecklistList**](ChecklistsApi.md#checklistsGetChecklistList) | **GET** /api/v1/Checklists/{OrgCode} | Standard - Search for Checklist using OData.
[**checklistsPostChecklist**](ChecklistsApi.md#checklistsPostChecklist) | **POST** /api/v1/Checklists | Standard - Add new Checklist entry
[**checklistsPutChecklist**](ChecklistsApi.md#checklistsPutChecklist) | **PUT** /api/v1/Checklists/{OrgCode}/{Code} | Standard - Edit Checklist


# **checklistsGetChecklist**
> \FomF\Ungerboeck\Client\Model\ChecklistsModel checklistsGetChecklist($org_code, $code)

Standard - Get a single Checklist entry by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ChecklistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the Checklist entry.
$code = "code_example"; // string | The code of the Checklist entry.

try {
    $result = $apiInstance->checklistsGetChecklist($org_code, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChecklistsApi->checklistsGetChecklist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the Checklist entry. |
 **code** | **string**| The code of the Checklist entry. |

### Return type

[**\FomF\Ungerboeck\Client\Model\ChecklistsModel**](../Model/ChecklistsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checklistsGetChecklistList**
> \FomF\Ungerboeck\Client\Model\ChecklistsModel checklistsGetChecklistList($org_code, $search)

Standard - Search for Checklist using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ChecklistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->checklistsGetChecklistList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChecklistsApi->checklistsGetChecklistList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\ChecklistsModel**](../Model/ChecklistsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checklistsPostChecklist**
> \FomF\Ungerboeck\Client\Model\ChecklistsModel checklistsPostChecklist($data)

Standard - Add new Checklist entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ChecklistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\ChecklistsModel(); // \FomF\Ungerboeck\Client\Model\ChecklistsModel | (Include in the HTTP Body) A ChecklistsModel entry to add.

try {
    $result = $apiInstance->checklistsPostChecklist($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChecklistsApi->checklistsPostChecklist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\ChecklistsModel**](../Model/ChecklistsModel.md)| (Include in the HTTP Body) A ChecklistsModel entry to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\ChecklistsModel**](../Model/ChecklistsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checklistsPutChecklist**
> \FomF\Ungerboeck\Client\Model\ChecklistsModel checklistsPutChecklist($org_code, $code, $data)

Standard - Edit Checklist

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ChecklistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the Checklist.
$code = "code_example"; // string | The code for the Checklist.
$data = new \FomF\Ungerboeck\Client\Model\ChecklistsModel(); // \FomF\Ungerboeck\Client\Model\ChecklistsModel | (Include in the HTTP Body) A ChecklistsModel entry to edit.

try {
    $result = $apiInstance->checklistsPutChecklist($org_code, $code, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChecklistsApi->checklistsPutChecklist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the Checklist. |
 **code** | **string**| The code for the Checklist. |
 **data** | [**\FomF\Ungerboeck\Client\Model\ChecklistsModel**](../Model/ChecklistsModel.md)| (Include in the HTTP Body) A ChecklistsModel entry to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\ChecklistsModel**](../Model/ChecklistsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

