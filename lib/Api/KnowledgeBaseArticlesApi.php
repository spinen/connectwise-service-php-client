<?php
/**
 * KnowledgeBaseArticlesApi
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
 * KnowledgeBaseArticlesApi Class Doc Comment
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class KnowledgeBaseArticlesApi
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
     * @return KnowledgeBaseArticlesApi
     */
    public function setApiClient(\Spinen\ConnectWise\Clients\Service\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation serviceKnowledgeBaseArticlesCountGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Service API generated by Swagger Code Generator.
     *
     * @param string $conditions  (optional)
     * @param string $custom_field_conditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\Service\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Service\Model\Count
     */
    public function serviceKnowledgeBaseArticlesCountGet($conditions = null, $custom_field_conditions = null)
    {
        list($response) = $this->serviceKnowledgeBaseArticlesCountGetWithHttpInfo($conditions, $custom_field_conditions);
        return $response;
    }

    /**
     * Operation serviceKnowledgeBaseArticlesCountGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Service API generated by Swagger Code Generator.
     *
     * @param string $conditions  (optional)
     * @param string $custom_field_conditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\Service\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Service\Model\Count, HTTP status code, HTTP response headers (array of strings)
     */
    public function serviceKnowledgeBaseArticlesCountGetWithHttpInfo($conditions = null, $custom_field_conditions = null)
    {
        // parse inputs
        $resourcePath = "/service/knowledgeBaseArticles/count";
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
        if ($custom_field_conditions !== null) {
            $queryParams['customFieldConditions'] = $this->apiClient->getSerializer()->toQueryValue($custom_field_conditions);
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
                '/service/knowledgeBaseArticles/count'
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
     * Operation serviceKnowledgeBaseArticlesGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Service API generated by Swagger Code Generator.
     *
     * @param string $conditions  (optional)
     * @param string $order_by  (optional)
     * @param string $childconditions  (optional)
     * @param string $customfieldconditions  (optional)
     * @param int $page  (optional)
     * @param int $page_size  (optional)
     * @throws \Spinen\ConnectWise\Clients\Service\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Service\Model\KnowledgeBaseArticle[]
     */
    public function serviceKnowledgeBaseArticlesGet($conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        list($response) = $this->serviceKnowledgeBaseArticlesGetWithHttpInfo($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
        return $response;
    }

    /**
     * Operation serviceKnowledgeBaseArticlesGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Service API generated by Swagger Code Generator.
     *
     * @param string $conditions  (optional)
     * @param string $order_by  (optional)
     * @param string $childconditions  (optional)
     * @param string $customfieldconditions  (optional)
     * @param int $page  (optional)
     * @param int $page_size  (optional)
     * @throws \Spinen\ConnectWise\Clients\Service\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Service\Model\KnowledgeBaseArticle[], HTTP status code, HTTP response headers (array of strings)
     */
    public function serviceKnowledgeBaseArticlesGetWithHttpInfo($conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        // parse inputs
        $resourcePath = "/service/knowledgeBaseArticles";
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
                '\Spinen\ConnectWise\Clients\Service\Model\KnowledgeBaseArticle[]',
                '/service/knowledgeBaseArticles'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Service\Model\KnowledgeBaseArticle[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Service\Model\KnowledgeBaseArticle[]', $e->getResponseHeaders());
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
     * Operation serviceKnowledgeBaseArticlesIdDelete
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Service API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\Service\ApiException on non-2xx response
     * @return void
     */
    public function serviceKnowledgeBaseArticlesIdDelete($id)
    {
        list($response) = $this->serviceKnowledgeBaseArticlesIdDeleteWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation serviceKnowledgeBaseArticlesIdDeleteWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Service API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\Service\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function serviceKnowledgeBaseArticlesIdDeleteWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling serviceKnowledgeBaseArticlesIdDelete');
        }
        // parse inputs
        $resourcePath = "/service/knowledgeBaseArticles/{id}";
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
                '/service/knowledgeBaseArticles/{id}'
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
     * Operation serviceKnowledgeBaseArticlesIdGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Service API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\Service\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Service\Model\KnowledgeBaseArticle
     */
    public function serviceKnowledgeBaseArticlesIdGet($id)
    {
        list($response) = $this->serviceKnowledgeBaseArticlesIdGetWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation serviceKnowledgeBaseArticlesIdGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Service API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\Service\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Service\Model\KnowledgeBaseArticle, HTTP status code, HTTP response headers (array of strings)
     */
    public function serviceKnowledgeBaseArticlesIdGetWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling serviceKnowledgeBaseArticlesIdGet');
        }
        // parse inputs
        $resourcePath = "/service/knowledgeBaseArticles/{id}";
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
                '\Spinen\ConnectWise\Clients\Service\Model\KnowledgeBaseArticle',
                '/service/knowledgeBaseArticles/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Service\Model\KnowledgeBaseArticle', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Service\Model\KnowledgeBaseArticle', $e->getResponseHeaders());
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
     * Operation serviceKnowledgeBaseArticlesIdPatch
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Service API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Service\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\Service\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Service\Model\KnowledgeBaseArticle
     */
    public function serviceKnowledgeBaseArticlesIdPatch($id, $operations)
    {
        list($response) = $this->serviceKnowledgeBaseArticlesIdPatchWithHttpInfo($id, $operations);
        return $response;
    }

    /**
     * Operation serviceKnowledgeBaseArticlesIdPatchWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Service API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Service\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\Service\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Service\Model\KnowledgeBaseArticle, HTTP status code, HTTP response headers (array of strings)
     */
    public function serviceKnowledgeBaseArticlesIdPatchWithHttpInfo($id, $operations)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling serviceKnowledgeBaseArticlesIdPatch');
        }
        // verify the required parameter 'operations' is set
        if ($operations === null) {
            throw new \InvalidArgumentException('Missing the required parameter $operations when calling serviceKnowledgeBaseArticlesIdPatch');
        }
        // parse inputs
        $resourcePath = "/service/knowledgeBaseArticles/{id}";
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
                '\Spinen\ConnectWise\Clients\Service\Model\KnowledgeBaseArticle',
                '/service/knowledgeBaseArticles/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Service\Model\KnowledgeBaseArticle', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Service\Model\KnowledgeBaseArticle', $e->getResponseHeaders());
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
     * Operation serviceKnowledgeBaseArticlesIdPut
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Service API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Service\Model\KnowledgeBaseArticle $knowledge_base_article  (required)
     * @throws \Spinen\ConnectWise\Clients\Service\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Service\Model\KnowledgeBaseArticle
     */
    public function serviceKnowledgeBaseArticlesIdPut($id, $knowledge_base_article)
    {
        list($response) = $this->serviceKnowledgeBaseArticlesIdPutWithHttpInfo($id, $knowledge_base_article);
        return $response;
    }

    /**
     * Operation serviceKnowledgeBaseArticlesIdPutWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Service API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Service\Model\KnowledgeBaseArticle $knowledge_base_article  (required)
     * @throws \Spinen\ConnectWise\Clients\Service\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Service\Model\KnowledgeBaseArticle, HTTP status code, HTTP response headers (array of strings)
     */
    public function serviceKnowledgeBaseArticlesIdPutWithHttpInfo($id, $knowledge_base_article)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling serviceKnowledgeBaseArticlesIdPut');
        }
        // verify the required parameter 'knowledge_base_article' is set
        if ($knowledge_base_article === null) {
            throw new \InvalidArgumentException('Missing the required parameter $knowledge_base_article when calling serviceKnowledgeBaseArticlesIdPut');
        }
        // parse inputs
        $resourcePath = "/service/knowledgeBaseArticles/{id}";
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
        if (isset($knowledge_base_article)) {
            $_tempBody = $knowledge_base_article;
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
                '\Spinen\ConnectWise\Clients\Service\Model\KnowledgeBaseArticle',
                '/service/knowledgeBaseArticles/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Service\Model\KnowledgeBaseArticle', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Service\Model\KnowledgeBaseArticle', $e->getResponseHeaders());
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
     * Operation serviceKnowledgeBaseArticlesPost
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Service API generated by Swagger Code Generator.
     *
     * @param \Spinen\ConnectWise\Clients\Service\Model\KnowledgeBaseArticle $knowledge_base_article  (required)
     * @throws \Spinen\ConnectWise\Clients\Service\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Service\Model\KnowledgeBaseArticle
     */
    public function serviceKnowledgeBaseArticlesPost($knowledge_base_article)
    {
        list($response) = $this->serviceKnowledgeBaseArticlesPostWithHttpInfo($knowledge_base_article);
        return $response;
    }

    /**
     * Operation serviceKnowledgeBaseArticlesPostWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Service API generated by Swagger Code Generator.
     *
     * @param \Spinen\ConnectWise\Clients\Service\Model\KnowledgeBaseArticle $knowledge_base_article  (required)
     * @throws \Spinen\ConnectWise\Clients\Service\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Service\Model\KnowledgeBaseArticle, HTTP status code, HTTP response headers (array of strings)
     */
    public function serviceKnowledgeBaseArticlesPostWithHttpInfo($knowledge_base_article)
    {
        // verify the required parameter 'knowledge_base_article' is set
        if ($knowledge_base_article === null) {
            throw new \InvalidArgumentException('Missing the required parameter $knowledge_base_article when calling serviceKnowledgeBaseArticlesPost');
        }
        // parse inputs
        $resourcePath = "/service/knowledgeBaseArticles";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($knowledge_base_article)) {
            $_tempBody = $knowledge_base_article;
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
                '\Spinen\ConnectWise\Clients\Service\Model\KnowledgeBaseArticle',
                '/service/knowledgeBaseArticles'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Service\Model\KnowledgeBaseArticle', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Service\Model\KnowledgeBaseArticle', $e->getResponseHeaders());
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
