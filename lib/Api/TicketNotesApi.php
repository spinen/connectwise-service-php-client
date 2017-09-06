<?php
/**
 * TicketNotesApi
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
 * TicketNotesApi Class Doc Comment
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TicketNotesApi
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
     * @return TicketNotesApi
     */
    public function setApiClient(\Spinen\ConnectWise\Clients\Service\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation serviceTicketsIdNotesCountGet
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
    public function serviceTicketsIdNotesCountGet($id, $conditions = null)
    {
        list($response) = $this->serviceTicketsIdNotesCountGetWithHttpInfo($id, $conditions);
        return $response;
    }

    /**
     * Operation serviceTicketsIdNotesCountGetWithHttpInfo
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
    public function serviceTicketsIdNotesCountGetWithHttpInfo($id, $conditions = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling serviceTicketsIdNotesCountGet');
        }
        // parse inputs
        $resourcePath = "/service/tickets/{id}/notes/count";
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
                '/service/tickets/{id}/notes/count'
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
     * Operation serviceTicketsIdNotesGet
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
     * @return \Spinen\ConnectWise\Clients\Service\Model\ServiceNote[]
     */
    public function serviceTicketsIdNotesGet($id, $conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        list($response) = $this->serviceTicketsIdNotesGetWithHttpInfo($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
        return $response;
    }

    /**
     * Operation serviceTicketsIdNotesGetWithHttpInfo
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
     * @return array of \Spinen\ConnectWise\Clients\Service\Model\ServiceNote[], HTTP status code, HTTP response headers (array of strings)
     */
    public function serviceTicketsIdNotesGetWithHttpInfo($id, $conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling serviceTicketsIdNotesGet');
        }
        // parse inputs
        $resourcePath = "/service/tickets/{id}/notes";
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
                '\Spinen\ConnectWise\Clients\Service\Model\ServiceNote[]',
                '/service/tickets/{id}/notes'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Service\Model\ServiceNote[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Service\Model\ServiceNote[]', $e->getResponseHeaders());
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
     * Operation serviceTicketsIdNotesNoteIdDelete
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Service API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $note_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Service\ApiException on non-2xx response
     * @return void
     */
    public function serviceTicketsIdNotesNoteIdDelete($id, $note_id)
    {
        list($response) = $this->serviceTicketsIdNotesNoteIdDeleteWithHttpInfo($id, $note_id);
        return $response;
    }

    /**
     * Operation serviceTicketsIdNotesNoteIdDeleteWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Service API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $note_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Service\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function serviceTicketsIdNotesNoteIdDeleteWithHttpInfo($id, $note_id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling serviceTicketsIdNotesNoteIdDelete');
        }
        // verify the required parameter 'note_id' is set
        if ($note_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $note_id when calling serviceTicketsIdNotesNoteIdDelete');
        }
        // parse inputs
        $resourcePath = "/service/tickets/{id}/notes/{noteId}";
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
        if ($note_id !== null) {
            $resourcePath = str_replace(
                "{" . "noteId" . "}",
                $this->apiClient->getSerializer()->toPathValue($note_id),
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
                '/service/tickets/{id}/notes/{noteId}'
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
     * Operation serviceTicketsIdNotesNoteIdGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Service API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $note_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Service\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Service\Model\ServiceNote
     */
    public function serviceTicketsIdNotesNoteIdGet($id, $note_id)
    {
        list($response) = $this->serviceTicketsIdNotesNoteIdGetWithHttpInfo($id, $note_id);
        return $response;
    }

    /**
     * Operation serviceTicketsIdNotesNoteIdGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Service API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $note_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Service\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Service\Model\ServiceNote, HTTP status code, HTTP response headers (array of strings)
     */
    public function serviceTicketsIdNotesNoteIdGetWithHttpInfo($id, $note_id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling serviceTicketsIdNotesNoteIdGet');
        }
        // verify the required parameter 'note_id' is set
        if ($note_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $note_id when calling serviceTicketsIdNotesNoteIdGet');
        }
        // parse inputs
        $resourcePath = "/service/tickets/{id}/notes/{noteId}";
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
        if ($note_id !== null) {
            $resourcePath = str_replace(
                "{" . "noteId" . "}",
                $this->apiClient->getSerializer()->toPathValue($note_id),
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
                '\Spinen\ConnectWise\Clients\Service\Model\ServiceNote',
                '/service/tickets/{id}/notes/{noteId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Service\Model\ServiceNote', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Service\Model\ServiceNote', $e->getResponseHeaders());
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
     * Operation serviceTicketsIdNotesNoteIdPatch
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Service API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $note_id  (required)
     * @param \Spinen\ConnectWise\Clients\Service\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\Service\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Service\Model\ServiceNote
     */
    public function serviceTicketsIdNotesNoteIdPatch($id, $note_id, $operations)
    {
        list($response) = $this->serviceTicketsIdNotesNoteIdPatchWithHttpInfo($id, $note_id, $operations);
        return $response;
    }

    /**
     * Operation serviceTicketsIdNotesNoteIdPatchWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Service API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $note_id  (required)
     * @param \Spinen\ConnectWise\Clients\Service\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\Service\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Service\Model\ServiceNote, HTTP status code, HTTP response headers (array of strings)
     */
    public function serviceTicketsIdNotesNoteIdPatchWithHttpInfo($id, $note_id, $operations)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling serviceTicketsIdNotesNoteIdPatch');
        }
        // verify the required parameter 'note_id' is set
        if ($note_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $note_id when calling serviceTicketsIdNotesNoteIdPatch');
        }
        // verify the required parameter 'operations' is set
        if ($operations === null) {
            throw new \InvalidArgumentException('Missing the required parameter $operations when calling serviceTicketsIdNotesNoteIdPatch');
        }
        // parse inputs
        $resourcePath = "/service/tickets/{id}/notes/{noteId}";
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
        if ($note_id !== null) {
            $resourcePath = str_replace(
                "{" . "noteId" . "}",
                $this->apiClient->getSerializer()->toPathValue($note_id),
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
                '\Spinen\ConnectWise\Clients\Service\Model\ServiceNote',
                '/service/tickets/{id}/notes/{noteId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Service\Model\ServiceNote', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Service\Model\ServiceNote', $e->getResponseHeaders());
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
     * Operation serviceTicketsIdNotesNoteIdPut
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Service API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $note_id  (required)
     * @param \Spinen\ConnectWise\Clients\Service\Model\ServiceNote $service_note  (required)
     * @throws \Spinen\ConnectWise\Clients\Service\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Service\Model\ServiceNote
     */
    public function serviceTicketsIdNotesNoteIdPut($id, $note_id, $service_note)
    {
        list($response) = $this->serviceTicketsIdNotesNoteIdPutWithHttpInfo($id, $note_id, $service_note);
        return $response;
    }

    /**
     * Operation serviceTicketsIdNotesNoteIdPutWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Service API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $note_id  (required)
     * @param \Spinen\ConnectWise\Clients\Service\Model\ServiceNote $service_note  (required)
     * @throws \Spinen\ConnectWise\Clients\Service\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Service\Model\ServiceNote, HTTP status code, HTTP response headers (array of strings)
     */
    public function serviceTicketsIdNotesNoteIdPutWithHttpInfo($id, $note_id, $service_note)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling serviceTicketsIdNotesNoteIdPut');
        }
        // verify the required parameter 'note_id' is set
        if ($note_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $note_id when calling serviceTicketsIdNotesNoteIdPut');
        }
        // verify the required parameter 'service_note' is set
        if ($service_note === null) {
            throw new \InvalidArgumentException('Missing the required parameter $service_note when calling serviceTicketsIdNotesNoteIdPut');
        }
        // parse inputs
        $resourcePath = "/service/tickets/{id}/notes/{noteId}";
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
        if ($note_id !== null) {
            $resourcePath = str_replace(
                "{" . "noteId" . "}",
                $this->apiClient->getSerializer()->toPathValue($note_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($service_note)) {
            $_tempBody = $service_note;
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
                '\Spinen\ConnectWise\Clients\Service\Model\ServiceNote',
                '/service/tickets/{id}/notes/{noteId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Service\Model\ServiceNote', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Service\Model\ServiceNote', $e->getResponseHeaders());
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
     * Operation serviceTicketsIdNotesPost
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Service API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Service\Model\ServiceNote $service_note  (required)
     * @throws \Spinen\ConnectWise\Clients\Service\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Service\Model\ServiceNote
     */
    public function serviceTicketsIdNotesPost($id, $service_note)
    {
        list($response) = $this->serviceTicketsIdNotesPostWithHttpInfo($id, $service_note);
        return $response;
    }

    /**
     * Operation serviceTicketsIdNotesPostWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Service API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Service\Model\ServiceNote $service_note  (required)
     * @throws \Spinen\ConnectWise\Clients\Service\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Service\Model\ServiceNote, HTTP status code, HTTP response headers (array of strings)
     */
    public function serviceTicketsIdNotesPostWithHttpInfo($id, $service_note)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling serviceTicketsIdNotesPost');
        }
        // verify the required parameter 'service_note' is set
        if ($service_note === null) {
            throw new \InvalidArgumentException('Missing the required parameter $service_note when calling serviceTicketsIdNotesPost');
        }
        // parse inputs
        $resourcePath = "/service/tickets/{id}/notes";
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
        if (isset($service_note)) {
            $_tempBody = $service_note;
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
                '\Spinen\ConnectWise\Clients\Service\Model\ServiceNote',
                '/service/tickets/{id}/notes'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Service\Model\ServiceNote', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Service\Model\ServiceNote', $e->getResponseHeaders());
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
