# Swagger\Client\DefaultApi

All URIs are relative to *https://dev.foo.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**employeesGet**](DefaultApi.md#employeesget) | **GET** /employees | 
[**employeesIdGet**](DefaultApi.md#employeesidget) | **GET** /employees/{id} | 
[**employeesPost**](DefaultApi.md#employeespost) | **POST** /employees | 

# **employeesGet**
> \Swagger\Client\Model\Employees employeesGet($body_limit, $page_limit)



Obtain information about all employees from the HR database

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body_limit = 56; // int | The amount of employees returned
$page_limit = 56; // int | The pages to return employees info

try {
    $result = $apiInstance->employeesGet($body_limit, $page_limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->employeesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body_limit** | **int**| The amount of employees returned | [optional]
 **page_limit** | **int**| The pages to return employees info | [optional]

### Return type

[**\Swagger\Client\Model\Employees**](../Model/Employees.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **employeesIdGet**
> \Swagger\Client\Model\Employee employeesIdGet($id)



Obtain information about specific employee

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | The ID of the employee

try {
    $result = $apiInstance->employeesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->employeesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the employee |

### Return type

[**\Swagger\Client\Model\Employee**](../Model/Employee.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **employeesPost**
> employeesPost($body)



Create a new employee in the database

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Employee(); // \Swagger\Client\Model\Employee | 

try {
    $apiInstance->employeesPost($body);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->employeesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Employee**](../Model/Employee.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

