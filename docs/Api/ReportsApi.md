# FomF\Ungerboeck\Client\ReportsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reportsGetParameters**](ReportsApi.md#reportsGetParameters) | **GET** /api/v1/Reports/{OrgCode}/{ReportSequence}/GetParameters | Standard - This returns a paramaters model with parameters needed to run the report
[**reportsRunReport**](ReportsApi.md#reportsRunReport) | **PUT** /api/v1/Reports/{OrgCode}/{ReportSequence}/RunReport | Standard - This runs a report


# **reportsGetParameters**
> \FomF\Ungerboeck\Client\Model\ParametersModel reportsGetParameters($org_code, $report_sequence)

Standard - This returns a paramaters model with parameters needed to run the report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | Specific Organization of to run the report from
$report_sequence = 56; // int | Report Master Sequence to use

try {
    $result = $apiInstance->reportsGetParameters($org_code, $report_sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsGetParameters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| Specific Organization of to run the report from |
 **report_sequence** | **int**| Report Master Sequence to use |

### Return type

[**\FomF\Ungerboeck\Client\Model\ParametersModel**](../Model/ParametersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsRunReport**
> \FomF\Ungerboeck\Client\Model\ReportResponseModel reportsRunReport($org_code, $report_sequence, $aobj_report_data)

Standard - This runs a report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | Specific Organization of to run the report from
$report_sequence = 56; // int | Report Master Sequence to use
$aobj_report_data = new \FomF\Ungerboeck\Client\Model\ReportRequestModel(); // \FomF\Ungerboeck\Client\Model\ReportRequestModel | Report data to run the report with

try {
    $result = $apiInstance->reportsRunReport($org_code, $report_sequence, $aobj_report_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsRunReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| Specific Organization of to run the report from |
 **report_sequence** | **int**| Report Master Sequence to use |
 **aobj_report_data** | [**\FomF\Ungerboeck\Client\Model\ReportRequestModel**](../Model/ReportRequestModel.md)| Report data to run the report with |

### Return type

[**\FomF\Ungerboeck\Client\Model\ReportResponseModel**](../Model/ReportResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

