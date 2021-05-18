# FomF\Ungerboeck\Client\JobsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**jobsGetJob**](JobsApi.md#jobsGetJob) | **GET** /api/v1/Jobs/{OrgCode}/{JobID} | Standard - Get a single job by its parameters
[**jobsGetJobList**](JobsApi.md#jobsGetJobList) | **GET** /api/v1/Jobs/{OrgCode} | Standard - Search for Jobs using OData.  This will also retrieve user fields matching the default user field class, configured in Job Management Configuration.
[**jobsPostJob**](JobsApi.md#jobsPostJob) | **POST** /api/v1/Jobs | Standard - Add an job
[**jobsPutJob**](JobsApi.md#jobsPutJob) | **PUT** /api/v1/Jobs/{OrgCode}/{JobID} | Standard - Edit an Job


# **jobsGetJob**
> \FomF\Ungerboeck\Client\Model\JobsModel jobsGetJob($org_code, $job_id)

Standard - Get a single job by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the job.
$job_id = 56; // int | The Job ID of the job.

try {
    $result = $apiInstance->jobsGetJob($org_code, $job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobsGetJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the job. |
 **job_id** | **int**| The Job ID of the job. |

### Return type

[**\FomF\Ungerboeck\Client\Model\JobsModel**](../Model/JobsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **jobsGetJobList**
> \FomF\Ungerboeck\Client\Model\JobsModel jobsGetJobList($org_code, $search)

Standard - Search for Jobs using OData.  This will also retrieve user fields matching the default user field class, configured in Job Management Configuration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->jobsGetJobList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobsGetJobList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\JobsModel**](../Model/JobsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **jobsPostJob**
> \FomF\Ungerboeck\Client\Model\JobsModel jobsPostJob($data)

Standard - Add an job

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\JobsModel(); // \FomF\Ungerboeck\Client\Model\JobsModel | (Include in the HTTP Body) An JobsModel entry to add.

try {
    $result = $apiInstance->jobsPostJob($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobsPostJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\JobsModel**](../Model/JobsModel.md)| (Include in the HTTP Body) An JobsModel entry to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\JobsModel**](../Model/JobsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **jobsPutJob**
> \FomF\Ungerboeck\Client\Model\JobsModel jobsPutJob($org_code, $job_id, $data)

Standard - Edit an Job

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\JobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the job.
$job_id = 56; // int | The Job ID of the job.
$data = new \FomF\Ungerboeck\Client\Model\JobsModel(); // \FomF\Ungerboeck\Client\Model\JobsModel | (Include in the HTTP Body) An JobsModel entry to edit.

try {
    $result = $apiInstance->jobsPutJob($org_code, $job_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobsPutJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the job. |
 **job_id** | **int**| The Job ID of the job. |
 **data** | [**\FomF\Ungerboeck\Client\Model\JobsModel**](../Model/JobsModel.md)| (Include in the HTTP Body) An JobsModel entry to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\JobsModel**](../Model/JobsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

