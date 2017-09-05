# connectwise-service-php-client
ConnectWise Service API

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Package version: 3.0.0-beta
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.6.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```bash
composer require spinen/connectwise-service-php-client
```

Or modify your `composer.json` file:

```json
{
    "require": {
        "spinen/connectwise-service-php-client": "^3.0.0-beta"
    }
}
```

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/connectwise-service-php-client/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Service\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Service\Api\BoardExcludedMembersApi();
$id = 56; // int | 
$conditions = "conditions_example"; // string | 

try {
    $result = $api_instance->serviceBoardsIdExcludedMembersCountGet($id, $conditions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardExcludedMembersApi->serviceBoardsIdExcludedMembersCountGet: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api-na.myconnectwise.net/v4_6_release/apis/3.0*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BoardExcludedMembersApi* | [**serviceBoardsIdExcludedMembersCountGet**](docs/Api/BoardExcludedMembersApi.md#serviceboardsidexcludedmemberscountget) | **GET** /service/boards/{id}/excludedMembers/count | 
*BoardExcludedMembersApi* | [**serviceBoardsIdExcludedMembersExcludedMemberIdDelete**](docs/Api/BoardExcludedMembersApi.md#serviceboardsidexcludedmembersexcludedmemberiddelete) | **DELETE** /service/boards/{id}/excludedMembers/{excludedMemberId} | 
*BoardExcludedMembersApi* | [**serviceBoardsIdExcludedMembersExcludedMemberIdGet**](docs/Api/BoardExcludedMembersApi.md#serviceboardsidexcludedmembersexcludedmemberidget) | **GET** /service/boards/{id}/excludedMembers/{excludedMemberId} | 
*BoardExcludedMembersApi* | [**serviceBoardsIdExcludedMembersGet**](docs/Api/BoardExcludedMembersApi.md#serviceboardsidexcludedmembersget) | **GET** /service/boards/{id}/excludedMembers | 
*BoardExcludedMembersApi* | [**serviceBoardsIdExcludedMembersPost**](docs/Api/BoardExcludedMembersApi.md#serviceboardsidexcludedmemberspost) | **POST** /service/boards/{id}/excludedMembers | 
*BoardItemsApi* | [**serviceBoardsIdItemsCountGet**](docs/Api/BoardItemsApi.md#serviceboardsiditemscountget) | **GET** /service/boards/{id}/items/count | 
*BoardItemsApi* | [**serviceBoardsIdItemsGet**](docs/Api/BoardItemsApi.md#serviceboardsiditemsget) | **GET** /service/boards/{id}/items | 
*BoardItemsApi* | [**serviceBoardsIdItemsItemIdDelete**](docs/Api/BoardItemsApi.md#serviceboardsiditemsitemiddelete) | **DELETE** /service/boards/{id}/items/{itemId} | 
*BoardItemsApi* | [**serviceBoardsIdItemsItemIdGet**](docs/Api/BoardItemsApi.md#serviceboardsiditemsitemidget) | **GET** /service/boards/{id}/items/{itemId} | 
*BoardItemsApi* | [**serviceBoardsIdItemsItemIdPatch**](docs/Api/BoardItemsApi.md#serviceboardsiditemsitemidpatch) | **PATCH** /service/boards/{id}/items/{itemId} | 
*BoardItemsApi* | [**serviceBoardsIdItemsItemIdPut**](docs/Api/BoardItemsApi.md#serviceboardsiditemsitemidput) | **PUT** /service/boards/{id}/items/{itemId} | 
*BoardItemsApi* | [**serviceBoardsIdItemsPost**](docs/Api/BoardItemsApi.md#serviceboardsiditemspost) | **POST** /service/boards/{id}/items | 
*BoardStatusesApi* | [**serviceBoardsIdStatusesCountGet**](docs/Api/BoardStatusesApi.md#serviceboardsidstatusescountget) | **GET** /service/boards/{id}/statuses/count | 
*BoardStatusesApi* | [**serviceBoardsIdStatusesGet**](docs/Api/BoardStatusesApi.md#serviceboardsidstatusesget) | **GET** /service/boards/{id}/statuses | 
*BoardStatusesApi* | [**serviceBoardsIdStatusesPost**](docs/Api/BoardStatusesApi.md#serviceboardsidstatusespost) | **POST** /service/boards/{id}/statuses | 
*BoardStatusesApi* | [**serviceBoardsIdStatusesStatusIdDelete**](docs/Api/BoardStatusesApi.md#serviceboardsidstatusesstatusiddelete) | **DELETE** /service/boards/{id}/statuses/{statusId} | 
*BoardStatusesApi* | [**serviceBoardsIdStatusesStatusIdGet**](docs/Api/BoardStatusesApi.md#serviceboardsidstatusesstatusidget) | **GET** /service/boards/{id}/statuses/{statusId} | 
*BoardStatusesApi* | [**serviceBoardsIdStatusesStatusIdPatch**](docs/Api/BoardStatusesApi.md#serviceboardsidstatusesstatusidpatch) | **PATCH** /service/boards/{id}/statuses/{statusId} | 
*BoardStatusesApi* | [**serviceBoardsIdStatusesStatusIdPut**](docs/Api/BoardStatusesApi.md#serviceboardsidstatusesstatusidput) | **PUT** /service/boards/{id}/statuses/{statusId} | 
*BoardSubTypesApi* | [**serviceBoardsIdSubtypesCountGet**](docs/Api/BoardSubTypesApi.md#serviceboardsidsubtypescountget) | **GET** /service/boards/{id}/subtypes/count | 
*BoardSubTypesApi* | [**serviceBoardsIdSubtypesGet**](docs/Api/BoardSubTypesApi.md#serviceboardsidsubtypesget) | **GET** /service/boards/{id}/subtypes | 
*BoardSubTypesApi* | [**serviceBoardsIdSubtypesPost**](docs/Api/BoardSubTypesApi.md#serviceboardsidsubtypespost) | **POST** /service/boards/{id}/subtypes | 
*BoardSubTypesApi* | [**serviceBoardsIdSubtypesSubtypeIdDelete**](docs/Api/BoardSubTypesApi.md#serviceboardsidsubtypessubtypeiddelete) | **DELETE** /service/boards/{id}/subtypes/{subtypeId} | 
*BoardSubTypesApi* | [**serviceBoardsIdSubtypesSubtypeIdGet**](docs/Api/BoardSubTypesApi.md#serviceboardsidsubtypessubtypeidget) | **GET** /service/boards/{id}/subtypes/{subtypeId} | 
*BoardSubTypesApi* | [**serviceBoardsIdSubtypesSubtypeIdPatch**](docs/Api/BoardSubTypesApi.md#serviceboardsidsubtypessubtypeidpatch) | **PATCH** /service/boards/{id}/subtypes/{subtypeId} | 
*BoardSubTypesApi* | [**serviceBoardsIdSubtypesSubtypeIdPut**](docs/Api/BoardSubTypesApi.md#serviceboardsidsubtypessubtypeidput) | **PUT** /service/boards/{id}/subtypes/{subtypeId} | 
*BoardSubtypeAssociationsApi* | [**serviceBoardsBoardIdSubTypesSubtypeIdAssociationsAssociationIdDelete**](docs/Api/BoardSubtypeAssociationsApi.md#serviceboardsboardidsubtypessubtypeidassociationsassociationiddelete) | **DELETE** /service/boards/{boardId}/subTypes/{subtypeId}/associations/{associationId} | 
*BoardSubtypeAssociationsApi* | [**serviceBoardsBoardIdSubTypesSubtypeIdAssociationsAssociationIdGet**](docs/Api/BoardSubtypeAssociationsApi.md#serviceboardsboardidsubtypessubtypeidassociationsassociationidget) | **GET** /service/boards/{boardId}/subTypes/{subtypeId}/associations/{associationId} | 
*BoardSubtypeAssociationsApi* | [**serviceBoardsBoardIdSubTypesSubtypeIdAssociationsCountGet**](docs/Api/BoardSubtypeAssociationsApi.md#serviceboardsboardidsubtypessubtypeidassociationscountget) | **GET** /service/boards/{boardId}/subTypes/{subtypeId}/associations/count | 
*BoardSubtypeAssociationsApi* | [**serviceBoardsBoardIdSubTypesSubtypeIdAssociationsGet**](docs/Api/BoardSubtypeAssociationsApi.md#serviceboardsboardidsubtypessubtypeidassociationsget) | **GET** /service/boards/{boardId}/subTypes/{subtypeId}/associations | 
*BoardSubtypeAssociationsApi* | [**serviceBoardsBoardIdSubTypesSubtypeIdAssociationsPost**](docs/Api/BoardSubtypeAssociationsApi.md#serviceboardsboardidsubtypessubtypeidassociationspost) | **POST** /service/boards/{boardId}/subTypes/{subtypeId}/associations | 
*BoardTeamsApi* | [**serviceBoardsIdTeamsCountGet**](docs/Api/BoardTeamsApi.md#serviceboardsidteamscountget) | **GET** /service/boards/{id}/teams/count | 
*BoardTeamsApi* | [**serviceBoardsIdTeamsGet**](docs/Api/BoardTeamsApi.md#serviceboardsidteamsget) | **GET** /service/boards/{id}/teams | 
*BoardTeamsApi* | [**serviceBoardsIdTeamsPost**](docs/Api/BoardTeamsApi.md#serviceboardsidteamspost) | **POST** /service/boards/{id}/teams | 
*BoardTeamsApi* | [**serviceBoardsIdTeamsTeamIdDelete**](docs/Api/BoardTeamsApi.md#serviceboardsidteamsteamiddelete) | **DELETE** /service/boards/{id}/teams/{teamId} | 
*BoardTeamsApi* | [**serviceBoardsIdTeamsTeamIdGet**](docs/Api/BoardTeamsApi.md#serviceboardsidteamsteamidget) | **GET** /service/boards/{id}/teams/{teamId} | 
*BoardTeamsApi* | [**serviceBoardsIdTeamsTeamIdPatch**](docs/Api/BoardTeamsApi.md#serviceboardsidteamsteamidpatch) | **PATCH** /service/boards/{id}/teams/{teamId} | 
*BoardTeamsApi* | [**serviceBoardsIdTeamsTeamIdPut**](docs/Api/BoardTeamsApi.md#serviceboardsidteamsteamidput) | **PUT** /service/boards/{id}/teams/{teamId} | 
*BoardTypesApi* | [**serviceBoardsIdTypesCountGet**](docs/Api/BoardTypesApi.md#serviceboardsidtypescountget) | **GET** /service/boards/{id}/types/count | 
*BoardTypesApi* | [**serviceBoardsIdTypesGet**](docs/Api/BoardTypesApi.md#serviceboardsidtypesget) | **GET** /service/boards/{id}/types | 
*BoardTypesApi* | [**serviceBoardsIdTypesPost**](docs/Api/BoardTypesApi.md#serviceboardsidtypespost) | **POST** /service/boards/{id}/types | 
*BoardTypesApi* | [**serviceBoardsIdTypesTypeIdDelete**](docs/Api/BoardTypesApi.md#serviceboardsidtypestypeiddelete) | **DELETE** /service/boards/{id}/types/{typeId} | 
*BoardTypesApi* | [**serviceBoardsIdTypesTypeIdGet**](docs/Api/BoardTypesApi.md#serviceboardsidtypestypeidget) | **GET** /service/boards/{id}/types/{typeId} | 
*BoardTypesApi* | [**serviceBoardsIdTypesTypeIdPatch**](docs/Api/BoardTypesApi.md#serviceboardsidtypestypeidpatch) | **PATCH** /service/boards/{id}/types/{typeId} | 
*BoardTypesApi* | [**serviceBoardsIdTypesTypeIdPut**](docs/Api/BoardTypesApi.md#serviceboardsidtypestypeidput) | **PUT** /service/boards/{id}/types/{typeId} | 
*BoardTypesApi* | [**serviceBoardsIdTypesTypeIdSubTypeAssociationGet**](docs/Api/BoardTypesApi.md#serviceboardsidtypestypeidsubtypeassociationget) | **GET** /service/boards/{id}/types/{typeId}/subTypeAssociation | 
*BoardsApi* | [**serviceBoardsCountGet**](docs/Api/BoardsApi.md#serviceboardscountget) | **GET** /service/boards/count | 
*BoardsApi* | [**serviceBoardsGet**](docs/Api/BoardsApi.md#serviceboardsget) | **GET** /service/boards | 
*BoardsApi* | [**serviceBoardsIdDelete**](docs/Api/BoardsApi.md#serviceboardsiddelete) | **DELETE** /service/boards/{id} | 
*BoardsApi* | [**serviceBoardsIdGet**](docs/Api/BoardsApi.md#serviceboardsidget) | **GET** /service/boards/{id} | 
*BoardsApi* | [**serviceBoardsIdPatch**](docs/Api/BoardsApi.md#serviceboardsidpatch) | **PATCH** /service/boards/{id} | 
*BoardsApi* | [**serviceBoardsIdPut**](docs/Api/BoardsApi.md#serviceboardsidput) | **PUT** /service/boards/{id} | 
*BoardsApi* | [**serviceBoardsPost**](docs/Api/BoardsApi.md#serviceboardspost) | **POST** /service/boards | 
*CodesApi* | [**serviceCodesCountGet**](docs/Api/CodesApi.md#servicecodescountget) | **GET** /service/codes/count | 
*CodesApi* | [**serviceCodesGet**](docs/Api/CodesApi.md#servicecodesget) | **GET** /service/codes | 
*CodesApi* | [**serviceCodesIdDelete**](docs/Api/CodesApi.md#servicecodesiddelete) | **DELETE** /service/codes/{id} | 
*CodesApi* | [**serviceCodesIdGet**](docs/Api/CodesApi.md#servicecodesidget) | **GET** /service/codes/{id} | 
*CodesApi* | [**serviceCodesIdPatch**](docs/Api/CodesApi.md#servicecodesidpatch) | **PATCH** /service/codes/{id} | 
*CodesApi* | [**serviceCodesIdPut**](docs/Api/CodesApi.md#servicecodesidput) | **PUT** /service/codes/{id} | 
*CodesApi* | [**serviceCodesPost**](docs/Api/CodesApi.md#servicecodespost) | **POST** /service/codes | 
*KnowledgeBaseArticlesApi* | [**serviceKnowledgeBaseArticlesCountGet**](docs/Api/KnowledgeBaseArticlesApi.md#serviceknowledgebasearticlescountget) | **GET** /service/knowledgeBaseArticles/count | 
*KnowledgeBaseArticlesApi* | [**serviceKnowledgeBaseArticlesGet**](docs/Api/KnowledgeBaseArticlesApi.md#serviceknowledgebasearticlesget) | **GET** /service/knowledgeBaseArticles | 
*KnowledgeBaseArticlesApi* | [**serviceKnowledgeBaseArticlesIdDelete**](docs/Api/KnowledgeBaseArticlesApi.md#serviceknowledgebasearticlesiddelete) | **DELETE** /service/knowledgeBaseArticles/{id} | 
*KnowledgeBaseArticlesApi* | [**serviceKnowledgeBaseArticlesIdGet**](docs/Api/KnowledgeBaseArticlesApi.md#serviceknowledgebasearticlesidget) | **GET** /service/knowledgeBaseArticles/{id} | 
*KnowledgeBaseArticlesApi* | [**serviceKnowledgeBaseArticlesIdPatch**](docs/Api/KnowledgeBaseArticlesApi.md#serviceknowledgebasearticlesidpatch) | **PATCH** /service/knowledgeBaseArticles/{id} | 
*KnowledgeBaseArticlesApi* | [**serviceKnowledgeBaseArticlesIdPut**](docs/Api/KnowledgeBaseArticlesApi.md#serviceknowledgebasearticlesidput) | **PUT** /service/knowledgeBaseArticles/{id} | 
*KnowledgeBaseArticlesApi* | [**serviceKnowledgeBaseArticlesPost**](docs/Api/KnowledgeBaseArticlesApi.md#serviceknowledgebasearticlespost) | **POST** /service/knowledgeBaseArticles | 
*LocationsApi* | [**serviceLocationsCountGet**](docs/Api/LocationsApi.md#servicelocationscountget) | **GET** /service/locations/count | 
*LocationsApi* | [**serviceLocationsGet**](docs/Api/LocationsApi.md#servicelocationsget) | **GET** /service/locations | 
*LocationsApi* | [**serviceLocationsIdDelete**](docs/Api/LocationsApi.md#servicelocationsiddelete) | **DELETE** /service/locations/{id} | 
*LocationsApi* | [**serviceLocationsIdGet**](docs/Api/LocationsApi.md#servicelocationsidget) | **GET** /service/locations/{id} | 
*LocationsApi* | [**serviceLocationsIdPatch**](docs/Api/LocationsApi.md#servicelocationsidpatch) | **PATCH** /service/locations/{id} | 
*LocationsApi* | [**serviceLocationsIdPut**](docs/Api/LocationsApi.md#servicelocationsidput) | **PUT** /service/locations/{id} | 
*LocationsApi* | [**serviceLocationsPost**](docs/Api/LocationsApi.md#servicelocationspost) | **POST** /service/locations | 
*PrioritiesApi* | [**servicePrioritiesCountGet**](docs/Api/PrioritiesApi.md#serviceprioritiescountget) | **GET** /service/priorities/count | 
*PrioritiesApi* | [**servicePrioritiesGet**](docs/Api/PrioritiesApi.md#serviceprioritiesget) | **GET** /service/priorities | 
*PrioritiesApi* | [**servicePrioritiesIdDelete**](docs/Api/PrioritiesApi.md#serviceprioritiesiddelete) | **DELETE** /service/priorities/{id} | 
*PrioritiesApi* | [**servicePrioritiesIdGet**](docs/Api/PrioritiesApi.md#serviceprioritiesidget) | **GET** /service/priorities/{id} | 
*PrioritiesApi* | [**servicePrioritiesIdImageGet**](docs/Api/PrioritiesApi.md#serviceprioritiesidimageget) | **GET** /service/priorities/{id}/image | 
*PrioritiesApi* | [**servicePrioritiesIdPatch**](docs/Api/PrioritiesApi.md#serviceprioritiesidpatch) | **PATCH** /service/priorities/{id} | 
*PrioritiesApi* | [**servicePrioritiesIdPut**](docs/Api/PrioritiesApi.md#serviceprioritiesidput) | **PUT** /service/priorities/{id} | 
*PrioritiesApi* | [**servicePrioritiesPost**](docs/Api/PrioritiesApi.md#serviceprioritiespost) | **POST** /service/priorities | 
*SourcesApi* | [**serviceSourcesCountGet**](docs/Api/SourcesApi.md#servicesourcescountget) | **GET** /service/sources/count | 
*SourcesApi* | [**serviceSourcesGet**](docs/Api/SourcesApi.md#servicesourcesget) | **GET** /service/sources | 
*SourcesApi* | [**serviceSourcesIdDelete**](docs/Api/SourcesApi.md#servicesourcesiddelete) | **DELETE** /service/sources/{id} | 
*SourcesApi* | [**serviceSourcesIdGet**](docs/Api/SourcesApi.md#servicesourcesidget) | **GET** /service/sources/{id} | 
*SourcesApi* | [**serviceSourcesIdPatch**](docs/Api/SourcesApi.md#servicesourcesidpatch) | **PATCH** /service/sources/{id} | 
*SourcesApi* | [**serviceSourcesIdPut**](docs/Api/SourcesApi.md#servicesourcesidput) | **PUT** /service/sources/{id} | 
*SourcesApi* | [**serviceSourcesPost**](docs/Api/SourcesApi.md#servicesourcespost) | **POST** /service/sources | 
*SurveyQuestionsApi* | [**serviceSurveysIdQuestionsCountGet**](docs/Api/SurveyQuestionsApi.md#servicesurveysidquestionscountget) | **GET** /service/surveys/{id}/questions/count | 
*SurveyQuestionsApi* | [**serviceSurveysIdQuestionsGet**](docs/Api/SurveyQuestionsApi.md#servicesurveysidquestionsget) | **GET** /service/surveys/{id}/questions | 
*SurveyQuestionsApi* | [**serviceSurveysIdQuestionsPost**](docs/Api/SurveyQuestionsApi.md#servicesurveysidquestionspost) | **POST** /service/surveys/{id}/questions | 
*SurveyQuestionsApi* | [**serviceSurveysIdQuestionsQuestionIdDelete**](docs/Api/SurveyQuestionsApi.md#servicesurveysidquestionsquestioniddelete) | **DELETE** /service/surveys/{id}/questions/{questionId} | 
*SurveyQuestionsApi* | [**serviceSurveysIdQuestionsQuestionIdGet**](docs/Api/SurveyQuestionsApi.md#servicesurveysidquestionsquestionidget) | **GET** /service/surveys/{id}/questions/{questionId} | 
*SurveyQuestionsApi* | [**serviceSurveysIdQuestionsQuestionIdPatch**](docs/Api/SurveyQuestionsApi.md#servicesurveysidquestionsquestionidpatch) | **PATCH** /service/surveys/{id}/questions/{questionId} | 
*SurveyQuestionsApi* | [**serviceSurveysIdQuestionsQuestionIdPut**](docs/Api/SurveyQuestionsApi.md#servicesurveysidquestionsquestionidput) | **PUT** /service/surveys/{id}/questions/{questionId} | 
*SurveyResultsApi* | [**serviceSurveysIdResultsCountGet**](docs/Api/SurveyResultsApi.md#servicesurveysidresultscountget) | **GET** /service/surveys/{id}/results/count | 
*SurveyResultsApi* | [**serviceSurveysIdResultsGet**](docs/Api/SurveyResultsApi.md#servicesurveysidresultsget) | **GET** /service/surveys/{id}/results | 
*SurveyResultsApi* | [**serviceSurveysIdResultsPost**](docs/Api/SurveyResultsApi.md#servicesurveysidresultspost) | **POST** /service/surveys/{id}/results | 
*SurveyResultsApi* | [**serviceSurveysIdResultsResultIdDelete**](docs/Api/SurveyResultsApi.md#servicesurveysidresultsresultiddelete) | **DELETE** /service/surveys/{id}/results/{resultId} | 
*SurveyResultsApi* | [**serviceSurveysIdResultsResultIdGet**](docs/Api/SurveyResultsApi.md#servicesurveysidresultsresultidget) | **GET** /service/surveys/{id}/results/{resultId} | 
*SurveyResultsApi* | [**serviceSurveysIdResultsResultIdPatch**](docs/Api/SurveyResultsApi.md#servicesurveysidresultsresultidpatch) | **PATCH** /service/surveys/{id}/results/{resultId} | 
*SurveyResultsApi* | [**serviceSurveysIdResultsResultIdPut**](docs/Api/SurveyResultsApi.md#servicesurveysidresultsresultidput) | **PUT** /service/surveys/{id}/results/{resultId} | 
*SurveysApi* | [**serviceSurveysCountGet**](docs/Api/SurveysApi.md#servicesurveyscountget) | **GET** /service/surveys/count | 
*SurveysApi* | [**serviceSurveysGet**](docs/Api/SurveysApi.md#servicesurveysget) | **GET** /service/surveys | 
*SurveysApi* | [**serviceSurveysIdDelete**](docs/Api/SurveysApi.md#servicesurveysiddelete) | **DELETE** /service/surveys/{id} | 
*SurveysApi* | [**serviceSurveysIdGet**](docs/Api/SurveysApi.md#servicesurveysidget) | **GET** /service/surveys/{id} | 
*SurveysApi* | [**serviceSurveysIdPatch**](docs/Api/SurveysApi.md#servicesurveysidpatch) | **PATCH** /service/surveys/{id} | 
*SurveysApi* | [**serviceSurveysIdPut**](docs/Api/SurveysApi.md#servicesurveysidput) | **PUT** /service/surveys/{id} | 
*SurveysApi* | [**serviceSurveysPost**](docs/Api/SurveysApi.md#servicesurveyspost) | **POST** /service/surveys | 
*TicketNotesApi* | [**serviceTicketsIdNotesCountGet**](docs/Api/TicketNotesApi.md#serviceticketsidnotescountget) | **GET** /service/tickets/{id}/notes/count | 
*TicketNotesApi* | [**serviceTicketsIdNotesGet**](docs/Api/TicketNotesApi.md#serviceticketsidnotesget) | **GET** /service/tickets/{id}/notes | 
*TicketNotesApi* | [**serviceTicketsIdNotesNoteIdDelete**](docs/Api/TicketNotesApi.md#serviceticketsidnotesnoteiddelete) | **DELETE** /service/tickets/{id}/notes/{noteId} | 
*TicketNotesApi* | [**serviceTicketsIdNotesNoteIdGet**](docs/Api/TicketNotesApi.md#serviceticketsidnotesnoteidget) | **GET** /service/tickets/{id}/notes/{noteId} | 
*TicketNotesApi* | [**serviceTicketsIdNotesNoteIdPatch**](docs/Api/TicketNotesApi.md#serviceticketsidnotesnoteidpatch) | **PATCH** /service/tickets/{id}/notes/{noteId} | 
*TicketNotesApi* | [**serviceTicketsIdNotesNoteIdPut**](docs/Api/TicketNotesApi.md#serviceticketsidnotesnoteidput) | **PUT** /service/tickets/{id}/notes/{noteId} | 
*TicketNotesApi* | [**serviceTicketsIdNotesPost**](docs/Api/TicketNotesApi.md#serviceticketsidnotespost) | **POST** /service/tickets/{id}/notes | 
*TicketTasksApi* | [**serviceTicketsIdTasksCountGet**](docs/Api/TicketTasksApi.md#serviceticketsidtaskscountget) | **GET** /service/tickets/{id}/tasks/count | 
*TicketTasksApi* | [**serviceTicketsIdTasksGet**](docs/Api/TicketTasksApi.md#serviceticketsidtasksget) | **GET** /service/tickets/{id}/tasks | 
*TicketTasksApi* | [**serviceTicketsIdTasksPost**](docs/Api/TicketTasksApi.md#serviceticketsidtaskspost) | **POST** /service/tickets/{id}/tasks | 
*TicketTasksApi* | [**serviceTicketsIdTasksTaskIdDelete**](docs/Api/TicketTasksApi.md#serviceticketsidtaskstaskiddelete) | **DELETE** /service/tickets/{id}/tasks/{taskId} | 
*TicketTasksApi* | [**serviceTicketsIdTasksTaskIdGet**](docs/Api/TicketTasksApi.md#serviceticketsidtaskstaskidget) | **GET** /service/tickets/{id}/tasks/{taskId} | 
*TicketTasksApi* | [**serviceTicketsIdTasksTaskIdPatch**](docs/Api/TicketTasksApi.md#serviceticketsidtaskstaskidpatch) | **PATCH** /service/tickets/{id}/tasks/{taskId} | 
*TicketTasksApi* | [**serviceTicketsIdTasksTaskIdPut**](docs/Api/TicketTasksApi.md#serviceticketsidtaskstaskidput) | **PUT** /service/tickets/{id}/tasks/{taskId} | 
*TicketsApi* | [**serviceTicketsCountGet**](docs/Api/TicketsApi.md#serviceticketscountget) | **GET** /service/tickets/count | 
*TicketsApi* | [**serviceTicketsGet**](docs/Api/TicketsApi.md#serviceticketsget) | **GET** /service/tickets | 
*TicketsApi* | [**serviceTicketsIdActivitiesCountGet**](docs/Api/TicketsApi.md#serviceticketsidactivitiescountget) | **GET** /service/tickets/{id}/activities/count | 
*TicketsApi* | [**serviceTicketsIdActivitiesGet**](docs/Api/TicketsApi.md#serviceticketsidactivitiesget) | **GET** /service/tickets/{id}/activities | 
*TicketsApi* | [**serviceTicketsIdConfigurationsConfigIdDelete**](docs/Api/TicketsApi.md#serviceticketsidconfigurationsconfigiddelete) | **DELETE** /service/tickets/{id}/configurations/{configId} | 
*TicketsApi* | [**serviceTicketsIdConfigurationsConfigIdGet**](docs/Api/TicketsApi.md#serviceticketsidconfigurationsconfigidget) | **GET** /service/tickets/{id}/configurations/{configId} | 
*TicketsApi* | [**serviceTicketsIdConfigurationsCountGet**](docs/Api/TicketsApi.md#serviceticketsidconfigurationscountget) | **GET** /service/tickets/{id}/configurations/count | 
*TicketsApi* | [**serviceTicketsIdConfigurationsGet**](docs/Api/TicketsApi.md#serviceticketsidconfigurationsget) | **GET** /service/tickets/{id}/configurations | 
*TicketsApi* | [**serviceTicketsIdConfigurationsPost**](docs/Api/TicketsApi.md#serviceticketsidconfigurationspost) | **POST** /service/tickets/{id}/configurations | 
*TicketsApi* | [**serviceTicketsIdDelete**](docs/Api/TicketsApi.md#serviceticketsiddelete) | **DELETE** /service/tickets/{id} | 
*TicketsApi* | [**serviceTicketsIdDocumentsCountGet**](docs/Api/TicketsApi.md#serviceticketsiddocumentscountget) | **GET** /service/tickets/{id}/documents/count | 
*TicketsApi* | [**serviceTicketsIdDocumentsGet**](docs/Api/TicketsApi.md#serviceticketsiddocumentsget) | **GET** /service/tickets/{id}/documents | 
*TicketsApi* | [**serviceTicketsIdGet**](docs/Api/TicketsApi.md#serviceticketsidget) | **GET** /service/tickets/{id} | 
*TicketsApi* | [**serviceTicketsIdMergePost**](docs/Api/TicketsApi.md#serviceticketsidmergepost) | **POST** /service/tickets/{id}/merge | 
*TicketsApi* | [**serviceTicketsIdPatch**](docs/Api/TicketsApi.md#serviceticketsidpatch) | **PATCH** /service/tickets/{id} | 
*TicketsApi* | [**serviceTicketsIdProductsCountGet**](docs/Api/TicketsApi.md#serviceticketsidproductscountget) | **GET** /service/tickets/{id}/products/count | 
*TicketsApi* | [**serviceTicketsIdProductsGet**](docs/Api/TicketsApi.md#serviceticketsidproductsget) | **GET** /service/tickets/{id}/products | 
*TicketsApi* | [**serviceTicketsIdPut**](docs/Api/TicketsApi.md#serviceticketsidput) | **PUT** /service/tickets/{id} | 
*TicketsApi* | [**serviceTicketsIdScheduleentriesCountGet**](docs/Api/TicketsApi.md#serviceticketsidscheduleentriescountget) | **GET** /service/tickets/{id}/scheduleentries/count | 
*TicketsApi* | [**serviceTicketsIdScheduleentriesGet**](docs/Api/TicketsApi.md#serviceticketsidscheduleentriesget) | **GET** /service/tickets/{id}/scheduleentries | 
*TicketsApi* | [**serviceTicketsIdTimeentriesCountGet**](docs/Api/TicketsApi.md#serviceticketsidtimeentriescountget) | **GET** /service/tickets/{id}/timeentries/count | 
*TicketsApi* | [**serviceTicketsIdTimeentriesGet**](docs/Api/TicketsApi.md#serviceticketsidtimeentriesget) | **GET** /service/tickets/{id}/timeentries | 
*TicketsApi* | [**serviceTicketsPost**](docs/Api/TicketsApi.md#serviceticketspost) | **POST** /service/tickets | 
*TicketsApi* | [**serviceTicketsSearchPost**](docs/Api/TicketsApi.md#serviceticketssearchpost) | **POST** /service/tickets/search | 


## Documentation For Models

 - [ActivityReference](docs/Model/ActivityReference.md)
 - [AgreementReference](docs/Model/AgreementReference.md)
 - [Board](docs/Model/Board.md)
 - [BoardReference](docs/Model/BoardReference.md)
 - [Code](docs/Model/Code.md)
 - [CompanyReference](docs/Model/CompanyReference.md)
 - [ConfigurationReference](docs/Model/ConfigurationReference.md)
 - [ContactReference](docs/Model/ContactReference.md)
 - [Count](docs/Model/Count.md)
 - [CountryReference](docs/Model/CountryReference.md)
 - [CustomFieldValue](docs/Model/CustomFieldValue.md)
 - [DocumentReference](docs/Model/DocumentReference.md)
 - [Error](docs/Model/Error.md)
 - [ExcludedMember](docs/Model/ExcludedMember.md)
 - [FilterValues](docs/Model/FilterValues.md)
 - [GenericIdIdentifierReference](docs/Model/GenericIdIdentifierReference.md)
 - [Guid](docs/Model/Guid.md)
 - [Item](docs/Model/Item.md)
 - [KnowledgeBaseArticle](docs/Model/KnowledgeBaseArticle.md)
 - [Location](docs/Model/Location.md)
 - [MemberReference](docs/Model/MemberReference.md)
 - [Metadata](docs/Model/Metadata.md)
 - [OpportunityReference](docs/Model/OpportunityReference.md)
 - [PatchOperation](docs/Model/PatchOperation.md)
 - [Priority](docs/Model/Priority.md)
 - [PriorityReference](docs/Model/PriorityReference.md)
 - [ProductReference](docs/Model/ProductReference.md)
 - [ProjectPhaseReference](docs/Model/ProjectPhaseReference.md)
 - [ProjectReference](docs/Model/ProjectReference.md)
 - [SLAReference](docs/Model/SLAReference.md)
 - [ScheduleEntryReference](docs/Model/ScheduleEntryReference.md)
 - [ServiceCodeReference](docs/Model/ServiceCodeReference.md)
 - [ServiceItemReference](docs/Model/ServiceItemReference.md)
 - [ServiceLocationReference](docs/Model/ServiceLocationReference.md)
 - [ServiceNote](docs/Model/ServiceNote.md)
 - [ServiceSignoffReference](docs/Model/ServiceSignoffReference.md)
 - [ServiceSourceReference](docs/Model/ServiceSourceReference.md)
 - [ServiceStatusReference](docs/Model/ServiceStatusReference.md)
 - [ServiceSubTypeReference](docs/Model/ServiceSubTypeReference.md)
 - [ServiceTeamReference](docs/Model/ServiceTeamReference.md)
 - [ServiceTypeReference](docs/Model/ServiceTypeReference.md)
 - [SiteReference](docs/Model/SiteReference.md)
 - [Source](docs/Model/Source.md)
 - [Status](docs/Model/Status.md)
 - [SubType](docs/Model/SubType.md)
 - [SubtypeAssociation](docs/Model/SubtypeAssociation.md)
 - [SuccessResponse](docs/Model/SuccessResponse.md)
 - [Survey](docs/Model/Survey.md)
 - [SurveyQuestion](docs/Model/SurveyQuestion.md)
 - [SurveyQuestionOption](docs/Model/SurveyQuestionOption.md)
 - [SurveyResult](docs/Model/SurveyResult.md)
 - [SurveyResultDetail](docs/Model/SurveyResultDetail.md)
 - [Task](docs/Model/Task.md)
 - [Team](docs/Model/Team.md)
 - [Ticket](docs/Model/Ticket.md)
 - [TicketMerge](docs/Model/TicketMerge.md)
 - [TimeEntryReference](docs/Model/TimeEntryReference.md)
 - [Type](docs/Model/Type.md)
 - [TypeAssociations](docs/Model/TypeAssociations.md)
 - [ValidationError](docs/Model/ValidationError.md)


## Documentation For Authorization


## BasicAuth

- **Type**: HTTP basic authentication

