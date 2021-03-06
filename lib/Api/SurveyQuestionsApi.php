<?php
/**
 * SurveyQuestionsApi
 * PHP version 5
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Service API
 *
 * ConnectWise Service API
 *
 * OpenAPI spec version: 1.0.0
 * Contact: platform@connectwise.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Spinen\ConnectWise\Clients\Service\Api;

use \Spinen\ConnectWise\Clients\Service\ApiClient;
use \Spinen\ConnectWise\Clients\Service\ApiException;
use \Spinen\ConnectWise\Clients\Service\Configuration;
use \Spinen\ConnectWise\Clients\Service\ObjectSerializer;

/**
 * SurveyQuestionsApi Class Doc Comment
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SurveyQuestionsApi
{
    /**
     * API Client
     *
     * @var \Spinen\ConnectWise\Clients\Service\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Spinen\ConnectWise\Clients\Service\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Spinen\ConnectWise\Clients\Service\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Spinen\ConnectWise\Clients\Service\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Spinen\ConnectWise\Clients\Service\ApiClient $apiClient set the API client
     *
     * @return SurveyQuestionsApi
     */
    public function setApiClient(\Spinen\ConnectWise\Clients\Service\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation serviceSurveysIdQuestionsCountGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Service API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param string $conditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\Service\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Service\Model\Count
     */
    public function serviceSurveysIdQuestionsCountGet($id, $conditions = null)
    {
        list($response) = $this->serviceSurveysIdQuestionsCountGetWithHttpInfo($id, $conditions);
        return $response;
    }

    /**
     * Operation serviceSurveysIdQuestionsCountGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Service API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param string $conditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\Service\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Service\Model\Count, HTTP status code, HTTP response headers (array of strings)
     */
    public function serviceSurveysIdQuestionsCountGetWithHttpInfo($id, $conditions = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling serviceSurveysIdQuestionsCountGet');
        }
        // parse inputs
        $resourcePath = "/service/surveys/{id}/questions/count";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($conditions !== null) {
            $queryParams['conditions'] = $this->apiClient->getSerializer()->toQueryValue($conditions);
        }
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Service\Model\Count',
                '/service/surveys/{id}/questions/count'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Service\Model\Count', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Service\Model\Count', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Service\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation serviceSurveysIdQuestionsGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Service API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param string $conditions  (optional)
     * @param string $order_by  (optional)
     * @param string $childconditions  (optional)
     * @param string $customfieldconditions  (optional)
     * @param int $page  (optional)
     * @param int $page_size  (optional)
     * @throws \Spinen\ConnectWise\Clients\Service\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion[]
     */
    public function serviceSurveysIdQuestionsGet($id, $conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        list($response) = $this->serviceSurveysIdQuestionsGetWithHttpInfo($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
        return $response;
    }

    /**
     * Operation serviceSurveysIdQuestionsGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Service API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param string $conditions  (optional)
     * @param string $order_by  (optional)
     * @param string $childconditions  (optional)
     * @param string $customfieldconditions  (optional)
     * @param int $page  (optional)
     * @param int $page_size  (optional)
     * @throws \Spinen\ConnectWise\Clients\Service\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion[], HTTP status code, HTTP response headers (array of strings)
     */
    public function serviceSurveysIdQuestionsGetWithHttpInfo($id, $conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling serviceSurveysIdQuestionsGet');
        }
        // parse inputs
        $resourcePath = "/service/surveys/{id}/questions";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($conditions !== null) {
            $queryParams['conditions'] = $this->apiClient->getSerializer()->toQueryValue($conditions);
        }
        // query params
        if ($order_by !== null) {
            $queryParams['orderBy'] = $this->apiClient->getSerializer()->toQueryValue($order_by);
        }
        // query params
        if ($childconditions !== null) {
            $queryParams['childconditions'] = $this->apiClient->getSerializer()->toQueryValue($childconditions);
        }
        // query params
        if ($customfieldconditions !== null) {
            $queryParams['customfieldconditions'] = $this->apiClient->getSerializer()->toQueryValue($customfieldconditions);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // query params
        if ($page_size !== null) {
            $queryParams['pageSize'] = $this->apiClient->getSerializer()->toQueryValue($page_size);
        }
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion[]',
                '/service/surveys/{id}/questions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Service\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation serviceSurveysIdQuestionsPost
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Service API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion $survey_question  (required)
     * @throws \Spinen\ConnectWise\Clients\Service\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion
     */
    public function serviceSurveysIdQuestionsPost($id, $survey_question)
    {
        list($response) = $this->serviceSurveysIdQuestionsPostWithHttpInfo($id, $survey_question);
        return $response;
    }

    /**
     * Operation serviceSurveysIdQuestionsPostWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Service API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion $survey_question  (required)
     * @throws \Spinen\ConnectWise\Clients\Service\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion, HTTP status code, HTTP response headers (array of strings)
     */
    public function serviceSurveysIdQuestionsPostWithHttpInfo($id, $survey_question)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling serviceSurveysIdQuestionsPost');
        }
        // verify the required parameter 'survey_question' is set
        if ($survey_question === null) {
            throw new \InvalidArgumentException('Missing the required parameter $survey_question when calling serviceSurveysIdQuestionsPost');
        }
        // parse inputs
        $resourcePath = "/service/surveys/{id}/questions";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($survey_question)) {
            $_tempBody = $survey_question;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion',
                '/service/surveys/{id}/questions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Service\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation serviceSurveysIdQuestionsQuestionIdDelete
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Service API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $question_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Service\ApiException on non-2xx response
     * @return void
     */
    public function serviceSurveysIdQuestionsQuestionIdDelete($id, $question_id)
    {
        list($response) = $this->serviceSurveysIdQuestionsQuestionIdDeleteWithHttpInfo($id, $question_id);
        return $response;
    }

    /**
     * Operation serviceSurveysIdQuestionsQuestionIdDeleteWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Service API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $question_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Service\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function serviceSurveysIdQuestionsQuestionIdDeleteWithHttpInfo($id, $question_id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling serviceSurveysIdQuestionsQuestionIdDelete');
        }
        // verify the required parameter 'question_id' is set
        if ($question_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $question_id when calling serviceSurveysIdQuestionsQuestionIdDelete');
        }
        // parse inputs
        $resourcePath = "/service/surveys/{id}/questions/{questionId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // path params
        if ($question_id !== null) {
            $resourcePath = str_replace(
                "{" . "questionId" . "}",
                $this->apiClient->getSerializer()->toPathValue($question_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/service/surveys/{id}/questions/{questionId}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Service\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation serviceSurveysIdQuestionsQuestionIdGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Service API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $question_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Service\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion
     */
    public function serviceSurveysIdQuestionsQuestionIdGet($id, $question_id)
    {
        list($response) = $this->serviceSurveysIdQuestionsQuestionIdGetWithHttpInfo($id, $question_id);
        return $response;
    }

    /**
     * Operation serviceSurveysIdQuestionsQuestionIdGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Service API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $question_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Service\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion, HTTP status code, HTTP response headers (array of strings)
     */
    public function serviceSurveysIdQuestionsQuestionIdGetWithHttpInfo($id, $question_id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling serviceSurveysIdQuestionsQuestionIdGet');
        }
        // verify the required parameter 'question_id' is set
        if ($question_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $question_id when calling serviceSurveysIdQuestionsQuestionIdGet');
        }
        // parse inputs
        $resourcePath = "/service/surveys/{id}/questions/{questionId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // path params
        if ($question_id !== null) {
            $resourcePath = str_replace(
                "{" . "questionId" . "}",
                $this->apiClient->getSerializer()->toPathValue($question_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion',
                '/service/surveys/{id}/questions/{questionId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Service\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation serviceSurveysIdQuestionsQuestionIdPatch
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Service API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $question_id  (required)
     * @param \Spinen\ConnectWise\Clients\Service\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\Service\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion
     */
    public function serviceSurveysIdQuestionsQuestionIdPatch($id, $question_id, $operations)
    {
        list($response) = $this->serviceSurveysIdQuestionsQuestionIdPatchWithHttpInfo($id, $question_id, $operations);
        return $response;
    }

    /**
     * Operation serviceSurveysIdQuestionsQuestionIdPatchWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Service API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $question_id  (required)
     * @param \Spinen\ConnectWise\Clients\Service\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\Service\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion, HTTP status code, HTTP response headers (array of strings)
     */
    public function serviceSurveysIdQuestionsQuestionIdPatchWithHttpInfo($id, $question_id, $operations)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling serviceSurveysIdQuestionsQuestionIdPatch');
        }
        // verify the required parameter 'question_id' is set
        if ($question_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $question_id when calling serviceSurveysIdQuestionsQuestionIdPatch');
        }
        // verify the required parameter 'operations' is set
        if ($operations === null) {
            throw new \InvalidArgumentException('Missing the required parameter $operations when calling serviceSurveysIdQuestionsQuestionIdPatch');
        }
        // parse inputs
        $resourcePath = "/service/surveys/{id}/questions/{questionId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // path params
        if ($question_id !== null) {
            $resourcePath = str_replace(
                "{" . "questionId" . "}",
                $this->apiClient->getSerializer()->toPathValue($question_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($operations)) {
            $_tempBody = $operations;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PATCH',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion',
                '/service/surveys/{id}/questions/{questionId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Service\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation serviceSurveysIdQuestionsQuestionIdPut
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Service API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $question_id  (required)
     * @param \Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion $survey_question  (required)
     * @throws \Spinen\ConnectWise\Clients\Service\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion
     */
    public function serviceSurveysIdQuestionsQuestionIdPut($id, $question_id, $survey_question)
    {
        list($response) = $this->serviceSurveysIdQuestionsQuestionIdPutWithHttpInfo($id, $question_id, $survey_question);
        return $response;
    }

    /**
     * Operation serviceSurveysIdQuestionsQuestionIdPutWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Service API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $question_id  (required)
     * @param \Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion $survey_question  (required)
     * @throws \Spinen\ConnectWise\Clients\Service\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion, HTTP status code, HTTP response headers (array of strings)
     */
    public function serviceSurveysIdQuestionsQuestionIdPutWithHttpInfo($id, $question_id, $survey_question)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling serviceSurveysIdQuestionsQuestionIdPut');
        }
        // verify the required parameter 'question_id' is set
        if ($question_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $question_id when calling serviceSurveysIdQuestionsQuestionIdPut');
        }
        // verify the required parameter 'survey_question' is set
        if ($survey_question === null) {
            throw new \InvalidArgumentException('Missing the required parameter $survey_question when calling serviceSurveysIdQuestionsQuestionIdPut');
        }
        // parse inputs
        $resourcePath = "/service/surveys/{id}/questions/{questionId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // path params
        if ($question_id !== null) {
            $resourcePath = str_replace(
                "{" . "questionId" . "}",
                $this->apiClient->getSerializer()->toPathValue($question_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($survey_question)) {
            $_tempBody = $survey_question;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion',
                '/service/surveys/{id}/questions/{questionId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Service\Model\SurveyQuestion', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Service\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
