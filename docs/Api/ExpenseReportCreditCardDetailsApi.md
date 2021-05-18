# FomF\Ungerboeck\Client\ExpenseReportCreditCardDetailsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**expenseReportCreditCardDetailsGetExpenseReportCreditCardDetail**](ExpenseReportCreditCardDetailsApi.md#expenseReportCreditCardDetailsGetExpenseReportCreditCardDetail) | **GET** /api/v1/ExpenseReportCreditCardDetails/{CardTransactionDetailID} | Standard - Get a single Card Transaction Detail by its parameters
[**expenseReportCreditCardDetailsGetExpenseReportCreditCardDetailList**](ExpenseReportCreditCardDetailsApi.md#expenseReportCreditCardDetailsGetExpenseReportCreditCardDetailList) | **GET** /api/v1/ExpenseReportCreditCardDetails | Standard - Search for Expense Report Credit Card Details using OData. Note that this search endpoint does not use OrgCode.
[**expenseReportCreditCardDetailsPostExpenseReportCreditCardDetail**](ExpenseReportCreditCardDetailsApi.md#expenseReportCreditCardDetailsPostExpenseReportCreditCardDetail) | **POST** /api/v1/ExpenseReportCreditCardDetails | Standard - Add a Expense Report Credit Card Details
[**expenseReportCreditCardDetailsPutExpenseReportCreditCardDetail**](ExpenseReportCreditCardDetailsApi.md#expenseReportCreditCardDetailsPutExpenseReportCreditCardDetail) | **PUT** /api/v1/ExpenseReportCreditCardDetails/{cardTransactionDetailID} | Standard - Edit a Expense Report Credit Card Details


# **expenseReportCreditCardDetailsGetExpenseReportCreditCardDetail**
> \FomF\Ungerboeck\Client\Model\ExpenseReportCreditCardDetailsModel expenseReportCreditCardDetailsGetExpenseReportCreditCardDetail($card_transaction_detail_id)

Standard - Get a single Card Transaction Detail by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ExpenseReportCreditCardDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$card_transaction_detail_id = 56; // int | The Card Transaction Detail ID of the Expense Report Credit Card Details.  Note that since the '\\*' character is one of the reserved characters for a URL, the default code (\\*\\*\\*) can't be used here.  Instead, use it as a query string parameter: \".../api/v1/ExpenseReportCreditCardDetails?code=***\"

try {
    $result = $apiInstance->expenseReportCreditCardDetailsGetExpenseReportCreditCardDetail($card_transaction_detail_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseReportCreditCardDetailsApi->expenseReportCreditCardDetailsGetExpenseReportCreditCardDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_transaction_detail_id** | **int**| The Card Transaction Detail ID of the Expense Report Credit Card Details.  Note that since the &#39;\\*&#39; character is one of the reserved characters for a URL, the default code (\\*\\*\\*) can&#39;t be used here.  Instead, use it as a query string parameter: \&quot;.../api/v1/ExpenseReportCreditCardDetails?code&#x3D;***\&quot; |

### Return type

[**\FomF\Ungerboeck\Client\Model\ExpenseReportCreditCardDetailsModel**](../Model/ExpenseReportCreditCardDetailsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **expenseReportCreditCardDetailsGetExpenseReportCreditCardDetailList**
> \FomF\Ungerboeck\Client\Model\ExpenseReportCreditCardDetailsModel expenseReportCreditCardDetailsGetExpenseReportCreditCardDetailList($search)

Standard - Search for Expense Report Credit Card Details using OData. Note that this search endpoint does not use OrgCode.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ExpenseReportCreditCardDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search = "search_example"; // string | Search string using OData with model properties for the filter, Page and Page_Size to navigate

try {
    $result = $apiInstance->expenseReportCreditCardDetailsGetExpenseReportCreditCardDetailList($search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseReportCreditCardDetailsApi->expenseReportCreditCardDetailsGetExpenseReportCreditCardDetailList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Search string using OData with model properties for the filter, Page and Page_Size to navigate |

### Return type

[**\FomF\Ungerboeck\Client\Model\ExpenseReportCreditCardDetailsModel**](../Model/ExpenseReportCreditCardDetailsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **expenseReportCreditCardDetailsPostExpenseReportCreditCardDetail**
> \FomF\Ungerboeck\Client\Model\ExpenseReportCreditCardDetailsModel expenseReportCreditCardDetailsPostExpenseReportCreditCardDetail($data)

Standard - Add a Expense Report Credit Card Details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ExpenseReportCreditCardDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \FomF\Ungerboeck\Client\Model\ExpenseReportCreditCardDetailsModel(); // \FomF\Ungerboeck\Client\Model\ExpenseReportCreditCardDetailsModel | (Include in the HTTP Body) A ExpenseReportCreditCardDetailsModel to add.

try {
    $result = $apiInstance->expenseReportCreditCardDetailsPostExpenseReportCreditCardDetail($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseReportCreditCardDetailsApi->expenseReportCreditCardDetailsPostExpenseReportCreditCardDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FomF\Ungerboeck\Client\Model\ExpenseReportCreditCardDetailsModel**](../Model/ExpenseReportCreditCardDetailsModel.md)| (Include in the HTTP Body) A ExpenseReportCreditCardDetailsModel to add. |

### Return type

[**\FomF\Ungerboeck\Client\Model\ExpenseReportCreditCardDetailsModel**](../Model/ExpenseReportCreditCardDetailsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **expenseReportCreditCardDetailsPutExpenseReportCreditCardDetail**
> \FomF\Ungerboeck\Client\Model\ExpenseReportCreditCardDetailsModel expenseReportCreditCardDetailsPutExpenseReportCreditCardDetail($card_transaction_detail_id, $data)

Standard - Edit a Expense Report Credit Card Details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\ExpenseReportCreditCardDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$card_transaction_detail_id = 56; // int | CardTransactionDetailID of the Expense Report Credit Card Details.
$data = new \FomF\Ungerboeck\Client\Model\ExpenseReportCreditCardDetailsModel(); // \FomF\Ungerboeck\Client\Model\ExpenseReportCreditCardDetailsModel | (Include in the HTTP Body) A ExpenseReportCreditCardDetails to edit.

try {
    $result = $apiInstance->expenseReportCreditCardDetailsPutExpenseReportCreditCardDetail($card_transaction_detail_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseReportCreditCardDetailsApi->expenseReportCreditCardDetailsPutExpenseReportCreditCardDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_transaction_detail_id** | **int**| CardTransactionDetailID of the Expense Report Credit Card Details. |
 **data** | [**\FomF\Ungerboeck\Client\Model\ExpenseReportCreditCardDetailsModel**](../Model/ExpenseReportCreditCardDetailsModel.md)| (Include in the HTTP Body) A ExpenseReportCreditCardDetails to edit. |

### Return type

[**\FomF\Ungerboeck\Client\Model\ExpenseReportCreditCardDetailsModel**](../Model/ExpenseReportCreditCardDetailsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

