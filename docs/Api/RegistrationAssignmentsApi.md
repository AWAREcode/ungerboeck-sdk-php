# FomF\Ungerboeck\Client\RegistrationAssignmentsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**registrationAssignmentsDeleteRegistrationAssignment**](RegistrationAssignmentsApi.md#registrationAssignmentsDeleteRegistrationAssignment) | **DELETE** /api/v1/RegistrationAssignments/{OrgCode}/{SequenceNumber} | Standard - Delete a Registration Assignment from an order.
[**registrationAssignmentsGetRegistrationAssignment**](RegistrationAssignmentsApi.md#registrationAssignmentsGetRegistrationAssignment) | **GET** /api/v1/RegistrationAssignments/{OrgCode}/{SequenceNumber} | Basic - Get a single Registration Assignment by sequence number
[**registrationAssignmentsGetRegistrationAssignmentList**](RegistrationAssignmentsApi.md#registrationAssignmentsGetRegistrationAssignmentList) | **GET** /api/v1/RegistrationAssignments/{OrgCode} | Basic - Gets a list of all Registration Assignments on the provided Organization.
[**registrationAssignmentsPostRegistrationAssignment**](RegistrationAssignmentsApi.md#registrationAssignmentsPostRegistrationAssignment) | **POST** /api/v1/RegistrationAssignments | Standard - Add a Registration Assignment
[**registrationAssignmentsPutRegistrationAssignment**](RegistrationAssignmentsApi.md#registrationAssignmentsPutRegistrationAssignment) | **PUT** /api/v1/RegistrationAssignments/{OrgCode}/{SequenceNumber} | Standard - Edit a Registration Assignment


# **registrationAssignmentsDeleteRegistrationAssignment**
> registrationAssignmentsDeleteRegistrationAssignment($org_code, $sequence_number)

Standard - Delete a Registration Assignment from an order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RegistrationAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | Organization Code
$sequence_number = 56; // int | Registration Assignment Primary key

try {
    $apiInstance->registrationAssignmentsDeleteRegistrationAssignment($org_code, $sequence_number);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationAssignmentsApi->registrationAssignmentsDeleteRegistrationAssignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| Organization Code |
 **sequence_number** | **int**| Registration Assignment Primary key |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrationAssignmentsGetRegistrationAssignment**
> \FomF\Ungerboeck\Client\Model\RegistrationAssignmentsModel registrationAssignmentsGetRegistrationAssignment($org_code, $sequence_number)

Basic - Get a single Registration Assignment by sequence number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RegistrationAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | Organization Code
$sequence_number = 56; // int | Registration Assignment Primary key

try {
    $result = $apiInstance->registrationAssignmentsGetRegistrationAssignment($org_code, $sequence_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationAssignmentsApi->registrationAssignmentsGetRegistrationAssignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| Organization Code |
 **sequence_number** | **int**| Registration Assignment Primary key |

### Return type

[**\FomF\Ungerboeck\Client\Model\RegistrationAssignmentsModel**](../Model/RegistrationAssignmentsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrationAssignmentsGetRegistrationAssignmentList**
> \FomF\Ungerboeck\Client\Model\RegistrationAssignmentsModel registrationAssignmentsGetRegistrationAssignmentList($org_code, $search)

Basic - Gets a list of all Registration Assignments on the provided Organization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RegistrationAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | Organization Code
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->registrationAssignmentsGetRegistrationAssignmentList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationAssignmentsApi->registrationAssignmentsGetRegistrationAssignmentList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| Organization Code |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\RegistrationAssignmentsModel**](../Model/RegistrationAssignmentsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrationAssignmentsPostRegistrationAssignment**
> \FomF\Ungerboeck\Client\Model\RegistrationAssignmentsModel registrationAssignmentsPostRegistrationAssignment($data)

Standard - Add a Registration Assignment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RegistrationAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\RegistrationAssignmentsModel(); // \FomF\Ungerboeck\Client\Model\RegistrationAssignmentsModel | RegistrationAssignmentsModel data field. Any parameter on the model can be set here in JSON form.

try {
    $result = $apiInstance->registrationAssignmentsPostRegistrationAssignment($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationAssignmentsApi->registrationAssignmentsPostRegistrationAssignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\RegistrationAssignmentsModel**](../Model/RegistrationAssignmentsModel.md)| RegistrationAssignmentsModel data field. Any parameter on the model can be set here in JSON form. |

### Return type

[**\FomF\Ungerboeck\Client\Model\RegistrationAssignmentsModel**](../Model/RegistrationAssignmentsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrationAssignmentsPutRegistrationAssignment**
> \FomF\Ungerboeck\Client\Model\RegistrationAssignmentsModel registrationAssignmentsPutRegistrationAssignment($org_code, $sequence_number, $data)

Standard - Edit a Registration Assignment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\RegistrationAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | Organization Code
$sequence_number = 56; // int | Registration Assignment Primary key
$data = new \FomF\Ungerboeck\Client\Model\RegistrationAssignmentsModel(); // \FomF\Ungerboeck\Client\Model\RegistrationAssignmentsModel | 

try {
    $result = $apiInstance->registrationAssignmentsPutRegistrationAssignment($org_code, $sequence_number, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationAssignmentsApi->registrationAssignmentsPutRegistrationAssignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| Organization Code |
 **sequence_number** | **int**| Registration Assignment Primary key |
 **data** | [**\FomF\Ungerboeck\Client\Model\RegistrationAssignmentsModel**](../Model/RegistrationAssignmentsModel.md)|  |

### Return type

[**\FomF\Ungerboeck\Client\Model\RegistrationAssignmentsModel**](../Model/RegistrationAssignmentsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

