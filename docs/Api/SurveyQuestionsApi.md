# Spinen\ConnectWise\Clients\Service\SurveyQuestionsApi
Spinen&#39;s PHP ConnectWise Client for Service API generated by Swagger Code Generator.

All URIs are relative to *https://api-na.myconnectwise.net/v4_6_release/apis/3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**serviceSurveysIdQuestionsCountGet**](SurveyQuestionsApi.md#serviceSurveysIdQuestionsCountGet) | **GET** /service/surveys/{id}/questions/count | 
[**serviceSurveysIdQuestionsGet**](SurveyQuestionsApi.md#serviceSurveysIdQuestionsGet) | **GET** /service/surveys/{id}/questions | 
[**serviceSurveysIdQuestionsPost**](SurveyQuestionsApi.md#serviceSurveysIdQuestionsPost) | **POST** /service/surveys/{id}/questions | 
[**serviceSurveysIdQuestionsQuestionIdDelete**](SurveyQuestionsApi.md#serviceSurveysIdQuestionsQuestionIdDelete) | **DELETE** /service/surveys/{id}/questions/{questionId} | 
[**serviceSurveysIdQuestionsQuestionIdGet**](SurveyQuestionsApi.md#serviceSurveysIdQuestionsQuestionIdGet) | **GET** /service/surveys/{id}/questions/{questionId} | 
[**serviceSurveysIdQuestionsQuestionIdPatch**](SurveyQuestionsApi.md#serviceSurveysIdQuestionsQuestionIdPatch) | **PATCH** /service/surveys/{id}/questions/{questionId} | 
[**serviceSurveysIdQuestionsQuestionIdPut**](SurveyQuestionsApi.md#serviceSurveysIdQuestionsQuestionIdPut) | **PUT** /service/surveys/{id}/questions/{questionId} | 


# **serviceSurveysIdQuestionsCountGet**
> \Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\Count serviceSurveysIdQuestionsCountGet($id, $conditions)



Get Survey Questions Count

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Service\Api\SurveyQuestionsApi();
$id = 56; // int | 
$conditions = "conditions_example"; // string | 

try {
    $result = $api_instance->serviceSurveysIdQuestionsCountGet($id, $conditions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyQuestionsApi->serviceSurveysIdQuestionsCountGet: ', $e->getMessage(), PHP_EOL;
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

# **serviceSurveysIdQuestionsGet**
> \Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion[] serviceSurveysIdQuestionsGet($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size)



Get Survey Questions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Service\Api\SurveyQuestionsApi();
$id = 56; // int | 
$conditions = "conditions_example"; // string | 
$order_by = "order_by_example"; // string | 
$childconditions = "childconditions_example"; // string | 
$customfieldconditions = "customfieldconditions_example"; // string | 
$page = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $api_instance->serviceSurveysIdQuestionsGet($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyQuestionsApi->serviceSurveysIdQuestionsGet: ', $e->getMessage(), PHP_EOL;
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

[**\Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion[]**](../Model/SurveyQuestion.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceSurveysIdQuestionsPost**
> \Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion serviceSurveysIdQuestionsPost($id, $survey_question)



Create Survey Question

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Service\Api\SurveyQuestionsApi();
$id = 56; // int | 
$survey_question = new \Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion(); // \Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion | 

try {
    $result = $api_instance->serviceSurveysIdQuestionsPost($id, $survey_question);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyQuestionsApi->serviceSurveysIdQuestionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **survey_question** | [**\Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion**](../Model/\Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion**](../Model/SurveyQuestion.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceSurveysIdQuestionsQuestionIdDelete**
> serviceSurveysIdQuestionsQuestionIdDelete($id, $question_id)



Delete Survey Question By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Service\Api\SurveyQuestionsApi();
$id = 56; // int | 
$question_id = 56; // int | 

try {
    $api_instance->serviceSurveysIdQuestionsQuestionIdDelete($id, $question_id);
} catch (Exception $e) {
    echo 'Exception when calling SurveyQuestionsApi->serviceSurveysIdQuestionsQuestionIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **question_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceSurveysIdQuestionsQuestionIdGet**
> \Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion serviceSurveysIdQuestionsQuestionIdGet($id, $question_id)



Get Survey Question By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Service\Api\SurveyQuestionsApi();
$id = 56; // int | 
$question_id = 56; // int | 

try {
    $result = $api_instance->serviceSurveysIdQuestionsQuestionIdGet($id, $question_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyQuestionsApi->serviceSurveysIdQuestionsQuestionIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **question_id** | **int**|  |

### Return type

[**\Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion**](../Model/SurveyQuestion.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceSurveysIdQuestionsQuestionIdPatch**
> \Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion serviceSurveysIdQuestionsQuestionIdPatch($id, $question_id, $operations)



Update Survey Question

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Service\Api\SurveyQuestionsApi();
$id = 56; // int | 
$question_id = 56; // int | 
$operations = array(new PatchOperation()); // \Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\PatchOperation[] | 

try {
    $result = $api_instance->serviceSurveysIdQuestionsQuestionIdPatch($id, $question_id, $operations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyQuestionsApi->serviceSurveysIdQuestionsQuestionIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **question_id** | **int**|  |
 **operations** | [**\Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\PatchOperation[]**](../Model/PatchOperation.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion**](../Model/SurveyQuestion.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceSurveysIdQuestionsQuestionIdPut**
> \Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion serviceSurveysIdQuestionsQuestionIdPut($id, $question_id, $survey_question)



Replace Survey Question

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Service\Api\SurveyQuestionsApi();
$id = 56; // int | 
$question_id = 56; // int | 
$survey_question = new \Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion(); // \Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion | 

try {
    $result = $api_instance->serviceSurveysIdQuestionsQuestionIdPut($id, $question_id, $survey_question);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyQuestionsApi->serviceSurveysIdQuestionsQuestionIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **question_id** | **int**|  |
 **survey_question** | [**\Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion**](../Model/\Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Service\Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion**](../Model/SurveyQuestion.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
