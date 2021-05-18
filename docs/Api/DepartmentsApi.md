# FomF\Ungerboeck\Client\DepartmentsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**departmentsGetDepartment**](DepartmentsApi.md#departmentsGetDepartment) | **GET** /api/v1/Departments/{OrgCode}/{Code} | Basic - Get a single department by its parameters
[**departmentsGetDepartmentList**](DepartmentsApi.md#departmentsGetDepartmentList) | **GET** /api/v1/Departments/{OrgCode} | Basic - Search for department using OData.


# **departmentsGetDepartment**
> \FomF\Ungerboeck\Client\Model\DepartmentsModel departmentsGetDepartment($org_code, $code)

Basic - Get a single department by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\DepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the department.
$code = "code_example"; // string | The code of the department.

try {
    $result = $apiInstance->departmentsGetDepartment($org_code, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DepartmentsApi->departmentsGetDepartment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the department. |
 **code** | **string**| The code of the department. |

### Return type

[**\FomF\Ungerboeck\Client\Model\DepartmentsModel**](../Model/DepartmentsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **departmentsGetDepartmentList**
> \FomF\Ungerboeck\Client\Model\DepartmentsModel departmentsGetDepartmentList($org_code, $search)

Basic - Search for department using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\DepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->departmentsGetDepartmentList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DepartmentsApi->departmentsGetDepartmentList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\DepartmentsModel**](../Model/DepartmentsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

