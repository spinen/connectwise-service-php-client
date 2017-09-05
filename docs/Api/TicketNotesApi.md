# Spinen\ConnectWise\Clients\Service\TicketNotesApi
Spinen&#39;s PHP ConnectWise Client for Service API generated by Swagger Code Generator.

All URIs are relative to *https://api-na.myconnectwise.net/v4_6_release/apis/3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**serviceTicketsIdNotesCountGet**](TicketNotesApi.md#serviceTicketsIdNotesCountGet) | **GET** /service/tickets/{id}/notes/count | 
[**serviceTicketsIdNotesGet**](TicketNotesApi.md#serviceTicketsIdNotesGet) | **GET** /service/tickets/{id}/notes | 
[**serviceTicketsIdNotesNoteIdDelete**](TicketNotesApi.md#serviceTicketsIdNotesNoteIdDelete) | **DELETE** /service/tickets/{id}/notes/{noteId} | 
[**serviceTicketsIdNotesNoteIdGet**](TicketNotesApi.md#serviceTicketsIdNotesNoteIdGet) | **GET** /service/tickets/{id}/notes/{noteId} | 
[**serviceTicketsIdNotesNoteIdPatch**](TicketNotesApi.md#serviceTicketsIdNotesNoteIdPatch) | **PATCH** /service/tickets/{id}/notes/{noteId} | 
[**serviceTicketsIdNotesNoteIdPut**](TicketNotesApi.md#serviceTicketsIdNotesNoteIdPut) | **PUT** /service/tickets/{id}/notes/{noteId} | 
[**serviceTicketsIdNotesPost**](TicketNotesApi.md#serviceTicketsIdNotesPost) | **POST** /service/tickets/{id}/notes | 


# **serviceTicketsIdNotesCountGet**
> \Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\Count serviceTicketsIdNotesCountGet($id, $conditions)



Get Service Notes Count

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Service\Api\TicketNotesApi();
$id = 56; // int | 
$conditions = "conditions_example"; // string | 

try {
    $result = $api_instance->serviceTicketsIdNotesCountGet($id, $conditions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketNotesApi->serviceTicketsIdNotesCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **conditions** | **string**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\Count**](../Model/Count.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceTicketsIdNotesGet**
> \Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\ServiceNote[] serviceTicketsIdNotesGet($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size)



Get Service Notes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Service\Api\TicketNotesApi();
$id = 56; // int | 
$conditions = "conditions_example"; // string | 
$order_by = "order_by_example"; // string | 
$childconditions = "childconditions_example"; // string | 
$customfieldconditions = "customfieldconditions_example"; // string | 
$page = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $api_instance->serviceTicketsIdNotesGet($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketNotesApi->serviceTicketsIdNotesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **conditions** | **string**|  | [optional]
 **order_by** | **string**|  | [optional]
 **childconditions** | **string**|  | [optional]
 **customfieldconditions** | **string**|  | [optional]
 **page** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\ServiceNote[]**](../Model/ServiceNote.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceTicketsIdNotesNoteIdDelete**
> serviceTicketsIdNotesNoteIdDelete($id, $note_id)



Delete Service Note By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Service\Api\TicketNotesApi();
$id = 56; // int | 
$note_id = 56; // int | 

try {
    $api_instance->serviceTicketsIdNotesNoteIdDelete($id, $note_id);
} catch (Exception $e) {
    echo 'Exception when calling TicketNotesApi->serviceTicketsIdNotesNoteIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **note_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceTicketsIdNotesNoteIdGet**
> \Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\ServiceNote serviceTicketsIdNotesNoteIdGet($id, $note_id)



Get Service Note By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Service\Api\TicketNotesApi();
$id = 56; // int | 
$note_id = 56; // int | 

try {
    $result = $api_instance->serviceTicketsIdNotesNoteIdGet($id, $note_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketNotesApi->serviceTicketsIdNotesNoteIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **note_id** | **int**|  |

### Return type

[**\Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\ServiceNote**](../Model/ServiceNote.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceTicketsIdNotesNoteIdPatch**
> \Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\ServiceNote serviceTicketsIdNotesNoteIdPatch($id, $note_id, $operations)



Update Service Note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Service\Api\TicketNotesApi();
$id = 56; // int | 
$note_id = 56; // int | 
$operations = array(new PatchOperation()); // \Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\PatchOperation[] | 

try {
    $result = $api_instance->serviceTicketsIdNotesNoteIdPatch($id, $note_id, $operations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketNotesApi->serviceTicketsIdNotesNoteIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **note_id** | **int**|  |
 **operations** | [**\Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\PatchOperation[]**](../Model/PatchOperation.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\ServiceNote**](../Model/ServiceNote.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceTicketsIdNotesNoteIdPut**
> \Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\ServiceNote serviceTicketsIdNotesNoteIdPut($id, $note_id, $service_note)



Replace Service Note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Service\Api\TicketNotesApi();
$id = 56; // int | 
$note_id = 56; // int | 
$service_note = new \Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\ServiceNote(); // \Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\ServiceNote | 

try {
    $result = $api_instance->serviceTicketsIdNotesNoteIdPut($id, $note_id, $service_note);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketNotesApi->serviceTicketsIdNotesNoteIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **note_id** | **int**|  |
 **service_note** | [**\Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\ServiceNote**](../Model/\Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\ServiceNote.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\ServiceNote**](../Model/ServiceNote.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceTicketsIdNotesPost**
> \Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\ServiceNote serviceTicketsIdNotesPost($id, $service_note)



Create Service Note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Service\Api\TicketNotesApi();
$id = 56; // int | 
$service_note = new \Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\ServiceNote(); // \Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\ServiceNote | 

try {
    $result = $api_instance->serviceTicketsIdNotesPost($id, $service_note);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketNotesApi->serviceTicketsIdNotesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **service_note** | [**\Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\ServiceNote**](../Model/\Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\ServiceNote.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\ServiceNote**](../Model/ServiceNote.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
