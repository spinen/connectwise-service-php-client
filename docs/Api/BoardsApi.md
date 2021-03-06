# Spinen\ConnectWise\Clients\Service\BoardsApi
Spinen&#39;s PHP ConnectWise Client for Service API generated by Swagger Code Generator.

All URIs are relative to *https://api-na.myconnectwise.net/v4_6_release/apis/3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**serviceBoardsCountGet**](BoardsApi.md#serviceBoardsCountGet) | **GET** /service/boards/count | 
[**serviceBoardsGet**](BoardsApi.md#serviceBoardsGet) | **GET** /service/boards | 
[**serviceBoardsIdDelete**](BoardsApi.md#serviceBoardsIdDelete) | **DELETE** /service/boards/{id} | 
[**serviceBoardsIdGet**](BoardsApi.md#serviceBoardsIdGet) | **GET** /service/boards/{id} | 
[**serviceBoardsIdPatch**](BoardsApi.md#serviceBoardsIdPatch) | **PATCH** /service/boards/{id} | 
[**serviceBoardsIdPut**](BoardsApi.md#serviceBoardsIdPut) | **PUT** /service/boards/{id} | 
[**serviceBoardsPost**](BoardsApi.md#serviceBoardsPost) | **POST** /service/boards | 


# **serviceBoardsCountGet**
> \Spinen\ConnectWise\Clients\Service\Model\Count serviceBoardsCountGet($conditions)



Get Boards Count

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Service\Api\BoardsApi();
$conditions = "conditions_example"; // string | 

try {
    $result = $api_instance->serviceBoardsCountGet($conditions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardsApi->serviceBoardsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conditions** | **string**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\Service\Model\Count**](../Model/Count.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceBoardsGet**
> \Spinen\ConnectWise\Clients\Service\Model\Board[] serviceBoardsGet($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size)



Get Boards

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Service\Api\BoardsApi();
$conditions = "conditions_example"; // string | 
$order_by = "order_by_example"; // string | 
$childconditions = "childconditions_example"; // string | 
$customfieldconditions = "customfieldconditions_example"; // string | 
$page = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $api_instance->serviceBoardsGet($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardsApi->serviceBoardsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conditions** | **string**|  | [optional]
 **order_by** | **string**|  | [optional]
 **childconditions** | **string**|  | [optional]
 **customfieldconditions** | **string**|  | [optional]
 **page** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\Service\Model\Board[]**](../Model/Board.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceBoardsIdDelete**
> serviceBoardsIdDelete($id)



Delete Board By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Service\Api\BoardsApi();
$id = 56; // int | 

try {
    $api_instance->serviceBoardsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling BoardsApi->serviceBoardsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceBoardsIdGet**
> \Spinen\ConnectWise\Clients\Service\Model\Board serviceBoardsIdGet($id)



Get Board By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Service\Api\BoardsApi();
$id = 56; // int | 

try {
    $result = $api_instance->serviceBoardsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardsApi->serviceBoardsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Spinen\ConnectWise\Clients\Service\Model\Board**](../Model/Board.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceBoardsIdPatch**
> \Spinen\ConnectWise\Clients\Service\Model\Board serviceBoardsIdPatch($id, $operations)



Update Board

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Service\Api\BoardsApi();
$id = 56; // int | 
$operations = array(new PatchOperation()); // \Spinen\ConnectWise\Clients\Service\Model\PatchOperation[] | 

try {
    $result = $api_instance->serviceBoardsIdPatch($id, $operations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardsApi->serviceBoardsIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **operations** | [**\Spinen\ConnectWise\Clients\Service\Model\PatchOperation[]**](../Model/PatchOperation.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Service\Model\Board**](../Model/Board.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceBoardsIdPut**
> \Spinen\ConnectWise\Clients\Service\Model\Board serviceBoardsIdPut($id, $board)



Replace Board

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Service\Api\BoardsApi();
$id = 56; // int | 
$board = new \Spinen\ConnectWise\Clients\Service\Model\Board(); // \Spinen\ConnectWise\Clients\Service\Model\Board | 

try {
    $result = $api_instance->serviceBoardsIdPut($id, $board);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardsApi->serviceBoardsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **board** | [**\Spinen\ConnectWise\Clients\Service\Model\Board**](../Model/\Spinen\ConnectWise\Clients\Service\Model\Board.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Service\Model\Board**](../Model/Board.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceBoardsPost**
> \Spinen\ConnectWise\Clients\Service\Model\Board serviceBoardsPost($board)



Create Board

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Service\Api\BoardsApi();
$board = new \Spinen\ConnectWise\Clients\Service\Model\Board(); // \Spinen\ConnectWise\Clients\Service\Model\Board | 

try {
    $result = $api_instance->serviceBoardsPost($board);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardsApi->serviceBoardsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **board** | [**\Spinen\ConnectWise\Clients\Service\Model\Board**](../Model/\Spinen\ConnectWise\Clients\Service\Model\Board.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Service\Model\Board**](../Model/Board.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

