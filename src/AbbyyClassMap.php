<?php

namespace AbbyyBridge;

/**
 * Class which returns the class map definition
 * @package Abbyy
 */
class AbbyyClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'OpenSession' => '\\AbbyyBridge\\StructType\\AbbyyOpenSession',
            'OpenSessionResponse' => '\\AbbyyBridge\\StructType\\AbbyyOpenSessionResponse',
            'GetSessionInfo' => '\\AbbyyBridge\\StructType\\AbbyyGetSessionInfo',
            'GetSessionInfoResponse' => '\\AbbyyBridge\\StructType\\AbbyyGetSessionInfoResponse',
            'GetProjects' => '\\AbbyyBridge\\StructType\\AbbyyGetProjects',
            'GetProjectsResponse' => '\\AbbyyBridge\\StructType\\AbbyyGetProjectsResponse',
            'projects' => '\\AbbyyBridge\\StructType\\AbbyyProjects',
            'GetProjectsForUser' => '\\AbbyyBridge\\StructType\\AbbyyGetProjectsForUser',
            'GetProjectsForUserResponse' => '\\AbbyyBridge\\StructType\\AbbyyGetProjectsForUserResponse',
            'GetProjectsForStationType' => '\\AbbyyBridge\\StructType\\AbbyyGetProjectsForStationType',
            'GetProjectsForStationTypeResponse' => '\\AbbyyBridge\\StructType\\AbbyyGetProjectsForStationTypeResponse',
            'GetProcessingStages' => '\\AbbyyBridge\\StructType\\AbbyyGetProcessingStages',
            'GetProcessingStagesResponse' => '\\AbbyyBridge\\StructType\\AbbyyGetProcessingStagesResponse',
            'stages' => '\\AbbyyBridge\\StructType\\AbbyyStages',
            'GetTemplates' => '\\AbbyyBridge\\StructType\\AbbyyGetTemplates',
            'GetTemplatesResponse' => '\\AbbyyBridge\\StructType\\AbbyyGetTemplatesResponse',
            'templates' => '\\AbbyyBridge\\StructType\\AbbyyTemplates',
            'GetBatchTypeTemplates' => '\\AbbyyBridge\\StructType\\AbbyyGetBatchTypeTemplates',
            'GetBatchTypeTemplatesResponse' => '\\AbbyyBridge\\StructType\\AbbyyGetBatchTypeTemplatesResponse',
            'templateIds' => '\\AbbyyBridge\\StructType\\AbbyyTemplateIds',
            'CloseSession' => '\\AbbyyBridge\\StructType\\AbbyyCloseSession',
            'CloseSessionResponse' => '\\AbbyyBridge\\StructType\\AbbyyCloseSessionResponse',
            'OpenProject' => '\\AbbyyBridge\\StructType\\AbbyyOpenProject',
            'OpenProjectResponse' => '\\AbbyyBridge\\StructType\\AbbyyOpenProjectResponse',
            'CloseProject' => '\\AbbyyBridge\\StructType\\AbbyyCloseProject',
            'CloseProjectResponse' => '\\AbbyyBridge\\StructType\\AbbyyCloseProjectResponse',
            'GetBatchTypes' => '\\AbbyyBridge\\StructType\\AbbyyGetBatchTypes',
            'GetBatchTypesResponse' => '\\AbbyyBridge\\StructType\\AbbyyGetBatchTypesResponse',
            'batchTypes' => '\\AbbyyBridge\\StructType\\AbbyyBatchTypes',
            'GetAllowedBatchTypes' => '\\AbbyyBridge\\StructType\\AbbyyGetAllowedBatchTypes',
            'GetAllowedBatchTypesResponse' => '\\AbbyyBridge\\StructType\\AbbyyGetAllowedBatchTypesResponse',
            'batchTypeIds' => '\\AbbyyBridge\\StructType\\AbbyyBatchTypeIds',
            'AddNewBatch' => '\\AbbyyBridge\\StructType\\AbbyyAddNewBatch',
            'AddNewBatchResponse' => '\\AbbyyBridge\\StructType\\AbbyyAddNewBatchResponse',
            'DeleteBatch' => '\\AbbyyBridge\\StructType\\AbbyyDeleteBatch',
            'DeleteBatchResponse' => '\\AbbyyBridge\\StructType\\AbbyyDeleteBatchResponse',
            'AddNewImage' => '\\AbbyyBridge\\StructType\\AbbyyAddNewImage',
            'AddNewImageResponse' => '\\AbbyyBridge\\StructType\\AbbyyAddNewImageResponse',
            'GetBatchIdsRange' => '\\AbbyyBridge\\StructType\\AbbyyGetBatchIdsRange',
            'GetBatchIdsRangeResponse' => '\\AbbyyBridge\\StructType\\AbbyyGetBatchIdsRangeResponse',
            'AddNewDocument' => '\\AbbyyBridge\\StructType\\AbbyyAddNewDocument',
            'AddNewDocumentResponse' => '\\AbbyyBridge\\StructType\\AbbyyAddNewDocumentResponse',
            'AddNewPage' => '\\AbbyyBridge\\StructType\\AbbyyAddNewPage',
            'AddNewPageResponse' => '\\AbbyyBridge\\StructType\\AbbyyAddNewPageResponse',
            'MoveBatchItem' => '\\AbbyyBridge\\StructType\\AbbyyMoveBatchItem',
            'MoveBatchItemResponse' => '\\AbbyyBridge\\StructType\\AbbyyMoveBatchItemResponse',
            'ProcessBatch' => '\\AbbyyBridge\\StructType\\AbbyyProcessBatch',
            'ProcessBatchResponse' => '\\AbbyyBridge\\StructType\\AbbyyProcessBatchResponse',
            'GetBatchPercentCompleted' => '\\AbbyyBridge\\StructType\\AbbyyGetBatchPercentCompleted',
            'GetBatchPercentCompletedResponse' => '\\AbbyyBridge\\StructType\\AbbyyGetBatchPercentCompletedResponse',
            'GetDocuments' => '\\AbbyyBridge\\StructType\\AbbyyGetDocuments',
            'GetDocumentsResponse' => '\\AbbyyBridge\\StructType\\AbbyyGetDocumentsResponse',
            'documents' => '\\AbbyyBridge\\StructType\\AbbyyDocuments',
            'GetDocumentResultsList' => '\\AbbyyBridge\\StructType\\AbbyyGetDocumentResultsList',
            'GetDocumentResultsListResponse' => '\\AbbyyBridge\\StructType\\AbbyyGetDocumentResultsListResponse',
            'fileNames' => '\\AbbyyBridge\\StructType\\AbbyyFileNames',
            'LoadDocumentResult' => '\\AbbyyBridge\\StructType\\AbbyyLoadDocumentResult',
            'LoadDocumentResultResponse' => '\\AbbyyBridge\\StructType\\AbbyyLoadDocumentResultResponse',
            'IsSessionExists' => '\\AbbyyBridge\\StructType\\AbbyyIsSessionExists',
            'IsSessionExistsResponse' => '\\AbbyyBridge\\StructType\\AbbyyIsSessionExistsResponse',
            'GetBatchType' => '\\AbbyyBridge\\StructType\\AbbyyGetBatchType',
            'GetBatchTypeResponse' => '\\AbbyyBridge\\StructType\\AbbyyGetBatchTypeResponse',
            'GetBatches' => '\\AbbyyBridge\\StructType\\AbbyyGetBatches',
            'GetBatchesResponse' => '\\AbbyyBridge\\StructType\\AbbyyGetBatchesResponse',
            'batches' => '\\AbbyyBridge\\StructType\\AbbyyBatches',
            'GetFilteredBatches' => '\\AbbyyBridge\\StructType\\AbbyyGetFilteredBatches',
            'stageTypes' => '\\AbbyyBridge\\StructType\\AbbyyStageTypes',
            'stageExtIds' => '\\AbbyyBridge\\StructType\\AbbyyStageExtIds',
            'filterRegParams' => '\\AbbyyBridge\\StructType\\AbbyyFilterRegParams',
            'GetFilteredBatchesResponse' => '\\AbbyyBridge\\StructType\\AbbyyGetFilteredBatchesResponse',
            'GetBatch' => '\\AbbyyBridge\\StructType\\AbbyyGetBatch',
            'GetBatchResponse' => '\\AbbyyBridge\\StructType\\AbbyyGetBatchResponse',
            'UpdateBatch' => '\\AbbyyBridge\\StructType\\AbbyyUpdateBatch',
            'UpdateBatchResponse' => '\\AbbyyBridge\\StructType\\AbbyyUpdateBatchResponse',
            'OpenBatch' => '\\AbbyyBridge\\StructType\\AbbyyOpenBatch',
            'OpenBatchResponse' => '\\AbbyyBridge\\StructType\\AbbyyOpenBatchResponse',
            'CloseBatch' => '\\AbbyyBridge\\StructType\\AbbyyCloseBatch',
            'CloseBatchResponse' => '\\AbbyyBridge\\StructType\\AbbyyCloseBatchResponse',
            'GetDocument' => '\\AbbyyBridge\\StructType\\AbbyyGetDocument',
            'GetDocumentResponse' => '\\AbbyyBridge\\StructType\\AbbyyGetDocumentResponse',
            'DeletePage' => '\\AbbyyBridge\\StructType\\AbbyyDeletePage',
            'DeletePageResponse' => '\\AbbyyBridge\\StructType\\AbbyyDeletePageResponse',
            'DeleteDocument' => '\\AbbyyBridge\\StructType\\AbbyyDeleteDocument',
            'DeleteDocumentResponse' => '\\AbbyyBridge\\StructType\\AbbyyDeleteDocumentResponse',
            'ReplacePageImage' => '\\AbbyyBridge\\StructType\\AbbyyReplacePageImage',
            'ReplacePageImageResponse' => '\\AbbyyBridge\\StructType\\AbbyyReplacePageImageResponse',
            'SetDocumentProperties' => '\\AbbyyBridge\\StructType\\AbbyySetDocumentProperties',
            'properties' => '\\AbbyyBridge\\StructType\\AbbyyProperties',
            'SetDocumentPropertiesResponse' => '\\AbbyyBridge\\StructType\\AbbyySetDocumentPropertiesResponse',
            'LoadCustomFile' => '\\AbbyyBridge\\StructType\\AbbyyLoadCustomFile',
            'LoadCustomFileResponse' => '\\AbbyyBridge\\StructType\\AbbyyLoadCustomFileResponse',
            'SaveCustomFile' => '\\AbbyyBridge\\StructType\\AbbyySaveCustomFile',
            'SaveCustomFileResponse' => '\\AbbyyBridge\\StructType\\AbbyySaveCustomFileResponse',
            'RemoveCustomFile' => '\\AbbyyBridge\\StructType\\AbbyyRemoveCustomFile',
            'RemoveCustomFileResponse' => '\\AbbyyBridge\\StructType\\AbbyyRemoveCustomFileResponse',
            'GetCustomFileNames' => '\\AbbyyBridge\\StructType\\AbbyyGetCustomFileNames',
            'GetCustomFileNamesResponse' => '\\AbbyyBridge\\StructType\\AbbyyGetCustomFileNamesResponse',
            'LoadAttachment' => '\\AbbyyBridge\\StructType\\AbbyyLoadAttachment',
            'LoadAttachmentResponse' => '\\AbbyyBridge\\StructType\\AbbyyLoadAttachmentResponse',
            'SaveAttachment' => '\\AbbyyBridge\\StructType\\AbbyySaveAttachment',
            'SaveAttachmentResponse' => '\\AbbyyBridge\\StructType\\AbbyySaveAttachmentResponse',
            'RemoveAttachment' => '\\AbbyyBridge\\StructType\\AbbyyRemoveAttachment',
            'RemoveAttachmentResponse' => '\\AbbyyBridge\\StructType\\AbbyyRemoveAttachmentResponse',
            'GetAttachmentNames' => '\\AbbyyBridge\\StructType\\AbbyyGetAttachmentNames',
            'GetAttachmentNamesResponse' => '\\AbbyyBridge\\StructType\\AbbyyGetAttachmentNamesResponse',
            'WriteToLog' => '\\AbbyyBridge\\StructType\\AbbyyWriteToLog',
            'records' => '\\AbbyyBridge\\StructType\\AbbyyRecords',
            'WriteToLogResponse' => '\\AbbyyBridge\\StructType\\AbbyyWriteToLogResponse',
            'GetAvailableTasks' => '\\AbbyyBridge\\StructType\\AbbyyGetAvailableTasks',
            'GetAvailableTasksResponse' => '\\AbbyyBridge\\StructType\\AbbyyGetAvailableTasksResponse',
            'GetAvailableTasksByStageId' => '\\AbbyyBridge\\StructType\\AbbyyGetAvailableTasksByStageId',
            'stageIds' => '\\AbbyyBridge\\StructType\\AbbyyStageIds',
            'GetAvailableTasksByStageIdResponse' => '\\AbbyyBridge\\StructType\\AbbyyGetAvailableTasksByStageIdResponse',
            'GetTaskInfo' => '\\AbbyyBridge\\StructType\\AbbyyGetTaskInfo',
            'GetTaskInfoResponse' => '\\AbbyyBridge\\StructType\\AbbyyGetTaskInfoResponse',
            'CreateTask' => '\\AbbyyBridge\\StructType\\AbbyyCreateTask',
            'docIds' => '\\AbbyyBridge\\StructType\\AbbyyDocIds',
            'CreateTaskResponse' => '\\AbbyyBridge\\StructType\\AbbyyCreateTaskResponse',
            'OpenTask' => '\\AbbyyBridge\\StructType\\AbbyyOpenTask',
            'OpenTaskResponse' => '\\AbbyyBridge\\StructType\\AbbyyOpenTaskResponse',
            'GetTask' => '\\AbbyyBridge\\StructType\\AbbyyGetTask',
            'GetTaskResponse' => '\\AbbyyBridge\\StructType\\AbbyyGetTaskResponse',
            'GetTaskByStageId' => '\\AbbyyBridge\\StructType\\AbbyyGetTaskByStageId',
            'GetTaskByStageIdResponse' => '\\AbbyyBridge\\StructType\\AbbyyGetTaskByStageIdResponse',
            'GetCurrentTask' => '\\AbbyyBridge\\StructType\\AbbyyGetCurrentTask',
            'GetCurrentTaskResponse' => '\\AbbyyBridge\\StructType\\AbbyyGetCurrentTaskResponse',
            'GetTaskDocuments' => '\\AbbyyBridge\\StructType\\AbbyyGetTaskDocuments',
            'GetTaskDocumentsResponse' => '\\AbbyyBridge\\StructType\\AbbyyGetTaskDocumentsResponse',
            'CloseTask' => '\\AbbyyBridge\\StructType\\AbbyyCloseTask',
            'CloseTaskResponse' => '\\AbbyyBridge\\StructType\\AbbyyCloseTaskResponse',
            'CancelTask' => '\\AbbyyBridge\\StructType\\AbbyyCancelTask',
            'CancelTaskResponse' => '\\AbbyyBridge\\StructType\\AbbyyCancelTaskResponse',
            'PostponeTask' => '\\AbbyyBridge\\StructType\\AbbyyPostponeTask',
            'PostponeTaskResponse' => '\\AbbyyBridge\\StructType\\AbbyyPostponeTaskResponse',
            'GetPostponedTasks' => '\\AbbyyBridge\\StructType\\AbbyyGetPostponedTasks',
            'GetPostponedTasksResponse' => '\\AbbyyBridge\\StructType\\AbbyyGetPostponedTasksResponse',
            'SendTaskToException' => '\\AbbyyBridge\\StructType\\AbbyySendTaskToException',
            'SendTaskToExceptionResponse' => '\\AbbyyBridge\\StructType\\AbbyySendTaskToExceptionResponse',
            'SendTask' => '\\AbbyyBridge\\StructType\\AbbyySendTask',
            'SendTaskResponse' => '\\AbbyyBridge\\StructType\\AbbyySendTaskResponse',
            'GetNewTicket' => '\\AbbyyBridge\\StructType\\AbbyyGetNewTicket',
            'GetNewTicketResponse' => '\\AbbyyBridge\\StructType\\AbbyyGetNewTicketResponse',
            'UpdateTicket' => '\\AbbyyBridge\\StructType\\AbbyyUpdateTicket',
            'UpdateTicketResponse' => '\\AbbyyBridge\\StructType\\AbbyyUpdateTicketResponse',
            'ReleaseTicket' => '\\AbbyyBridge\\StructType\\AbbyyReleaseTicket',
            'ReleaseTicketResponse' => '\\AbbyyBridge\\StructType\\AbbyyReleaseTicketResponse',
            'HasRightsForBatchType' => '\\AbbyyBridge\\StructType\\AbbyyHasRightsForBatchType',
            'HasRightsForBatchTypeResponse' => '\\AbbyyBridge\\StructType\\AbbyyHasRightsForBatchTypeResponse',
            'GetSettingValue' => '\\AbbyyBridge\\StructType\\AbbyyGetSettingValue',
            'GetSettingValueResponse' => '\\AbbyyBridge\\StructType\\AbbyyGetSettingValueResponse',
            'SetSettingValue' => '\\AbbyyBridge\\StructType\\AbbyySetSettingValue',
            'SetSettingValueResponse' => '\\AbbyyBridge\\StructType\\AbbyySetSettingValueResponse',
            'FindUser' => '\\AbbyyBridge\\StructType\\AbbyyFindUser',
            'FindUserResponse' => '\\AbbyyBridge\\StructType\\AbbyyFindUserResponse',
            'AddUserIfNotExist' => '\\AbbyyBridge\\StructType\\AbbyyAddUserIfNotExist',
            'AddUserIfNotExistResponse' => '\\AbbyyBridge\\StructType\\AbbyyAddUserIfNotExistResponse',
            'GetUser' => '\\AbbyyBridge\\StructType\\AbbyyGetUser',
            'GetUserResponse' => '\\AbbyyBridge\\StructType\\AbbyyGetUserResponse',
            'GetUsers' => '\\AbbyyBridge\\StructType\\AbbyyGetUsers',
            'GetUsersResponse' => '\\AbbyyBridge\\StructType\\AbbyyGetUsersResponse',
            'GetAvailableUsers' => '\\AbbyyBridge\\StructType\\AbbyyGetAvailableUsers',
            'GetAvailableUsersResponse' => '\\AbbyyBridge\\StructType\\AbbyyGetAvailableUsersResponse',
            'CreateRequest' => '\\AbbyyBridge\\StructType\\AbbyyCreateRequest',
            'CreateRequestResponse' => '\\AbbyyBridge\\StructType\\AbbyyCreateRequestResponse',
            'DeleteRequest' => '\\AbbyyBridge\\StructType\\AbbyyDeleteRequest',
            'DeleteRequestResponse' => '\\AbbyyBridge\\StructType\\AbbyyDeleteRequestResponse',
            'GetRequestStatus' => '\\AbbyyBridge\\StructType\\AbbyyGetRequestStatus',
            'GetRequestStatusResponse' => '\\AbbyyBridge\\StructType\\AbbyyGetRequestStatusResponse',
            'SetRequestStatus' => '\\AbbyyBridge\\StructType\\AbbyySetRequestStatus',
            'SetRequestStatusResponse' => '\\AbbyyBridge\\StructType\\AbbyySetRequestStatusResponse',
            'GetRequests' => '\\AbbyyBridge\\StructType\\AbbyyGetRequests',
            'GetRequestsResponse' => '\\AbbyyBridge\\StructType\\AbbyyGetRequestsResponse',
            'requests' => '\\AbbyyBridge\\StructType\\AbbyyRequests',
            'GetAvailableQueues' => '\\AbbyyBridge\\StructType\\AbbyyGetAvailableQueues',
            'GetAvailableQueuesResponse' => '\\AbbyyBridge\\StructType\\AbbyyGetAvailableQueuesResponse',
            'queueInfo' => '\\AbbyyBridge\\StructType\\AbbyyQueueInfo',
            'GetUserStatistics' => '\\AbbyyBridge\\StructType\\AbbyyGetUserStatistics',
            'GetUserStatisticsResponse' => '\\AbbyyBridge\\StructType\\AbbyyGetUserStatisticsResponse',
            'GetRoles' => '\\AbbyyBridge\\StructType\\AbbyyGetRoles',
            'GetRolesResponse' => '\\AbbyyBridge\\StructType\\AbbyyGetRolesResponse',
            'roles' => '\\AbbyyBridge\\StructType\\AbbyyRoles',
            'GetUserRoles' => '\\AbbyyBridge\\StructType\\AbbyyGetUserRoles',
            'GetUserRolesResponse' => '\\AbbyyBridge\\StructType\\AbbyyGetUserRolesResponse',
            'roleIds' => '\\AbbyyBridge\\StructType\\AbbyyRoleIds',
            'SetTaskPriority' => '\\AbbyyBridge\\StructType\\AbbyySetTaskPriority',
            'SetTaskPriorityResponse' => '\\AbbyyBridge\\StructType\\AbbyySetTaskPriorityResponse',
            'SetDocumentPriority' => '\\AbbyyBridge\\StructType\\AbbyySetDocumentPriority',
            'SetDocumentPriorityResponse' => '\\AbbyyBridge\\StructType\\AbbyySetDocumentPriorityResponse',
            'GetCurrentUserIdentity' => '\\AbbyyBridge\\StructType\\AbbyyGetCurrentUserIdentity',
            'GetCurrentUserIdentityResponse' => '\\AbbyyBridge\\StructType\\AbbyyGetCurrentUserIdentityResponse',
            'UserIdentity' => '\\AbbyyBridge\\StructType\\AbbyyUserIdentity',
            'RegistrationPropertyDef' => '\\AbbyyBridge\\StructType\\AbbyyRegistrationPropertyDef',
            'Task' => '\\AbbyyBridge\\StructType\\AbbyyTask',
            'TaskList' => '\\AbbyyBridge\\StructType\\AbbyyTaskList',
            'UserStatistics' => '\\AbbyyBridge\\StructType\\AbbyyUserStatistics',
            'Batch' => '\\AbbyyBridge\\StructType\\AbbyyBatch',
            'Properties' => '\\AbbyyBridge\\StructType\\AbbyyProperties_1',
            'OrderItem' => '\\AbbyyBridge\\StructType\\AbbyyOrderItem',
            'Document' => '\\AbbyyBridge\\StructType\\AbbyyDocument',
            'Pages' => '\\AbbyyBridge\\StructType\\AbbyyPages',
            'ChildrenOrder' => '\\AbbyyBridge\\StructType\\AbbyyChildrenOrder',
            'LogRecord' => '\\AbbyyBridge\\StructType\\AbbyyLogRecord',
            'LicenseCustomFeature' => '\\AbbyyBridge\\StructType\\AbbyyLicenseCustomFeature',
            'TicketInfo' => '\\AbbyyBridge\\StructType\\AbbyyTicketInfo',
            'CustomFeatures' => '\\AbbyyBridge\\StructType\\AbbyyCustomFeatures',
            'File' => '\\AbbyyBridge\\StructType\\AbbyyFile',
            'Project' => '\\AbbyyBridge\\StructType\\AbbyyProject',
            'ProcessingStage' => '\\AbbyyBridge\\StructType\\AbbyyProcessingStage',
            'RegistrationProperty' => '\\AbbyyBridge\\StructType\\AbbyyRegistrationProperty',
            'BatchType' => '\\AbbyyBridge\\StructType\\AbbyyBatchType',
            'PropertyDefs' => '\\AbbyyBridge\\StructType\\AbbyyPropertyDefs',
            'BatchTypeIdentity' => '\\AbbyyBridge\\StructType\\AbbyyBatchTypeIdentity',
            'TaskDocumentList' => '\\AbbyyBridge\\StructType\\AbbyyTaskDocumentList',
            'Page' => '\\AbbyyBridge\\StructType\\AbbyyPage',
            'User' => '\\AbbyyBridge\\StructType\\AbbyyUser',
            'UserList' => '\\AbbyyBridge\\StructType\\AbbyyUserList',
            'ServerRequest' => '\\AbbyyBridge\\StructType\\AbbyyServerRequest',
            'Queue' => '\\AbbyyBridge\\StructType\\AbbyyQueue',
            'Template' => '\\AbbyyBridge\\StructType\\AbbyyTemplate',
            'Role' => '\\AbbyyBridge\\StructType\\AbbyyRole',
        );
    }
}
