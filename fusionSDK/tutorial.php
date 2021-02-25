<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'fusion_wsdl_rev.xml',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => '../fusion_wsdl_rev.xml',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
);
/**
 * Samples for Format ServiceType
 */
$format = new \ServiceType\Format($options);
/**
 * Sample call for Format_GetAllGraphicFrameNames operation/method
 */
if ($format->Format_GetAllGraphicFrameNames(new \StructType\Format_GetAllGraphicFrameNames()) !== false) {
    print_r($format->getResult());
} else {
    print_r($format->getLastError());
}
/**
 * Sample call for Format_AddGraphicFrame operation/method
 */
if ($format->Format_AddGraphicFrame(new \StructType\Format_AddGraphicFrame()) !== false) {
    print_r($format->getResult());
} else {
    print_r($format->getLastError());
}
/**
 * Sample call for Format_GetFontArray operation/method
 */
if ($format->Format_GetFontArray(new \ArrayType\Format_GetFontArray()) !== false) {
    print_r($format->getResult());
} else {
    print_r($format->getLastError());
}
/**
 * Sample call for Format_GetGraphicFrame operation/method
 */
if ($format->Format_GetGraphicFrame(new \StructType\Format_GetGraphicFrame()) !== false) {
    print_r($format->getResult());
} else {
    print_r($format->getLastError());
}
/**
 * Sample call for Format_UpdateGraphicFrame operation/method
 */
if ($format->Format_UpdateGraphicFrame(new \StructType\Format_UpdateGraphicFrame()) !== false) {
    print_r($format->getResult());
} else {
    print_r($format->getLastError());
}
/**
 * Sample call for Format_DeleteGraphicFrame operation/method
 */
if ($format->Format_DeleteGraphicFrame(new \StructType\Format_DeleteGraphicFrame()) !== false) {
    print_r($format->getResult());
} else {
    print_r($format->getLastError());
}
/**
 * Sample call for Format_GetNumberOfBodyPages operation/method
 */
if ($format->Format_GetNumberOfBodyPages(new \StructType\Format_GetNumberOfBodyPages()) !== false) {
    print_r($format->getResult());
} else {
    print_r($format->getLastError());
}
/**
 * Sample call for Format_GetTextFramesOnPage operation/method
 */
if ($format->Format_GetTextFramesOnPage(new \StructType\Format_GetTextFramesOnPage()) !== false) {
    print_r($format->getResult());
} else {
    print_r($format->getLastError());
}
/**
 * Sample call for Format_GetAllTextFrames operation/method
 */
if ($format->Format_GetAllTextFrames(new \StructType\Format_GetAllTextFrames()) !== false) {
    print_r($format->getResult());
} else {
    print_r($format->getLastError());
}
/**
 * Sample call for Format_GetTextFrameNamesOnPage operation/method
 */
if ($format->Format_GetTextFrameNamesOnPage(new \StructType\Format_GetTextFrameNamesOnPage()) !== false) {
    print_r($format->getResult());
} else {
    print_r($format->getLastError());
}
/**
 * Sample call for Format_GetAllTextFrameNames operation/method
 */
if ($format->Format_GetAllTextFrameNames(new \StructType\Format_GetAllTextFrameNames()) !== false) {
    print_r($format->getResult());
} else {
    print_r($format->getLastError());
}
/**
 * Sample call for Format_AddTextFrame operation/method
 */
if ($format->Format_AddTextFrame(new \StructType\Format_AddTextFrame()) !== false) {
    print_r($format->getResult());
} else {
    print_r($format->getLastError());
}
/**
 * Sample call for Format_GetTextFrame operation/method
 */
if ($format->Format_GetTextFrame(new \StructType\Format_GetTextFrame()) !== false) {
    print_r($format->getResult());
} else {
    print_r($format->getLastError());
}
/**
 * Sample call for Format_UpdateTextFrame operation/method
 */
if ($format->Format_UpdateTextFrame(new \StructType\Format_UpdateTextFrame()) !== false) {
    print_r($format->getResult());
} else {
    print_r($format->getLastError());
}
/**
 * Sample call for Format_UpdateTextFrames operation/method
 */
if ($format->Format_UpdateTextFrames(new \StructType\Format_UpdateTextFrames()) !== false) {
    print_r($format->getResult());
} else {
    print_r($format->getLastError());
}
/**
 * Sample call for Format_DeleteTextFrame operation/method
 */
if ($format->Format_DeleteTextFrame(new \StructType\Format_DeleteTextFrame()) !== false) {
    print_r($format->getResult());
} else {
    print_r($format->getLastError());
}
/**
 * Sample call for Format_GetGraphicFramesOnPage operation/method
 */
if ($format->Format_GetGraphicFramesOnPage(new \StructType\Format_GetGraphicFramesOnPage()) !== false) {
    print_r($format->getResult());
} else {
    print_r($format->getLastError());
}
/**
 * Sample call for Format_GetAllGraphicFrames operation/method
 */
if ($format->Format_GetAllGraphicFrames(new \StructType\Format_GetAllGraphicFrames()) !== false) {
    print_r($format->getResult());
} else {
    print_r($format->getLastError());
}
/**
 * Sample call for Format_GetGraphicFrameNamesOnPage operation/method
 */
if ($format->Format_GetGraphicFrameNamesOnPage(new \StructType\Format_GetGraphicFrameNamesOnPage()) !== false) {
    print_r($format->getResult());
} else {
    print_r($format->getLastError());
}
/**
 * Samples for List ServiceType
 */
$list = new \ServiceType\_List($options);
/**
 * Sample call for ListGroups operation/method
 */
if ($list->ListGroups(new \StructType\ListGroups()) !== false) {
    print_r($list->getResult());
} else {
    print_r($list->getLastError());
}
/**
 * Sample call for ListTemplates operation/method
 */
if ($list->ListTemplates(new \StructType\ListTemplates()) !== false) {
    print_r($list->getResult());
} else {
    print_r($list->getLastError());
}
/**
 * Sample call for ListCompositionSessions operation/method
 */
if ($list->ListCompositionSessions(new \StructType\ListCompositionSessions()) !== false) {
    print_r($list->getResult());
} else {
    print_r($list->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \ServiceType\Get($options);
/**
 * Sample call for GetTemplateInfo operation/method
 */
if ($get->GetTemplateInfo(new \StructType\GetTemplateInfo()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetTemplatePagesAndRecords operation/method
 */
if ($get->GetTemplatePagesAndRecords(new \StructType\GetTemplatePagesAndRecords()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetTemplateJobOptions operation/method
 */
if ($get->GetTemplateJobOptions(new \StructType\GetTemplateJobOptions()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetTemplates operation/method
 */
if ($get->GetTemplates(new \StructType\GetTemplates()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetTemplateFileURL operation/method
 */
if ($get->GetTemplateFileURL(new \StructType\GetTemplateFileURL()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetTemplateFilePath operation/method
 */
if ($get->GetTemplateFilePath(new \StructType\GetTemplateFilePath()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetTemplateFileBytes operation/method
 */
if ($get->GetTemplateFileBytes(new \StructType\GetTemplateFileBytes()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetTemplateResourceURL operation/method
 */
if ($get->GetTemplateResourceURL(new \StructType\GetTemplateResourceURL()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetTemplateResourceFilePath operation/method
 */
if ($get->GetTemplateResourceFilePath(new \StructType\GetTemplateResourceFilePath()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetTemplateResourceBytes operation/method
 */
if ($get->GetTemplateResourceBytes(new \StructType\GetTemplateResourceBytes()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetTemplateFormData operation/method
 */
if ($get->GetTemplateFormData(new \StructType\GetTemplateFormData()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetTemplateFieldNames operation/method
 */
if ($get->GetTemplateFieldNames(new \StructType\GetTemplateFieldNames()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetTemplateFields operation/method
 */
if ($get->GetTemplateFields(new \StructType\GetTemplateFields()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetTemplateRulesAndResources operation/method
 */
if ($get->GetTemplateRulesAndResources(new \StructType\GetTemplateRulesAndResources()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetWebConfigureSettings operation/method
 */
if ($get->GetWebConfigureSettings(new \StructType\GetWebConfigureSettings()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetCompositionFileURL operation/method
 */
if ($get->GetCompositionFileURL(new \StructType\GetCompositionFileURL()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetCompositionFilePath operation/method
 */
if ($get->GetCompositionFilePath(new \StructType\GetCompositionFilePath()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetCompositionFileBytes operation/method
 */
if ($get->GetCompositionFileBytes(new \StructType\GetCompositionFileBytes()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetCompositionResourceURL operation/method
 */
if ($get->GetCompositionResourceURL(new \StructType\GetCompositionResourceURL()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetCompositionResourceFilePath operation/method
 */
if ($get->GetCompositionResourceFilePath(new \StructType\GetCompositionResourceFilePath()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetCompositionResourceBytes operation/method
 */
if ($get->GetCompositionResourceBytes(new \StructType\GetCompositionResourceBytes()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetPreviewJPEG_URL operation/method
 */
if ($get->GetPreviewJPEG_URL(new \StructType\GetPreviewJPEG_URL()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetPreviewJPEG_Path operation/method
 */
if ($get->GetPreviewJPEG_Path(new \StructType\GetPreviewJPEG_Path()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetPreviewJPEG_Bytes operation/method
 */
if ($get->GetPreviewJPEG_Bytes(new \StructType\GetPreviewJPEG_Bytes()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetFusionProStatus operation/method
 */
if ($get->GetFusionProStatus(new \StructType\GetFusionProStatus()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetCompositionInfo operation/method
 */
if ($get->GetCompositionInfo(new \StructType\GetCompositionInfo()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetCompositionSessions operation/method
 */
if ($get->GetCompositionSessions(new \StructType\GetCompositionSessions()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetTargetActivity operation/method
 */
if ($get->GetTargetActivity(new \StructType\GetTargetActivity()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetEmailConfiguration operation/method
 */
if ($get->GetEmailConfiguration(new \StructType\GetEmailConfiguration()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetApplicationSettings operation/method
 */
if ($get->GetApplicationSettings(new \StructType\GetApplicationSettings()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetWatches operation/method
 */
if ($get->GetWatches(new \StructType\GetWatches()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetWatch operation/method
 */
if ($get->GetWatch(new \StructType\GetWatch()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Add ServiceType
 */
$add = new \ServiceType\Add($options);
/**
 * Sample call for AddTemplateFromFile operation/method
 */
if ($add->AddTemplateFromFile(new \StructType\AddTemplateFromFile()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddTemplateFromBytes operation/method
 */
if ($add->AddTemplateFromBytes(new \StructType\AddTemplateFromBytes()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddCompositionFile operation/method
 */
if ($add->AddCompositionFile(new \StructType\AddCompositionFile()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddCompositionResource operation/method
 */
if ($add->AddCompositionResource(new \StructType\AddCompositionResource()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddEmailConfiguration operation/method
 */
if ($add->AddEmailConfiguration(new \StructType\AddEmailConfiguration()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddWatch operation/method
 */
if ($add->AddWatch(new \StructType\AddWatch()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddWatchCondition operation/method
 */
if ($add->AddWatchCondition(new \StructType\AddWatchCondition()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddWatchTask operation/method
 */
if ($add->AddWatchTask(new \StructType\AddWatchTask()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Samples for Rename ServiceType
 */
$rename = new \ServiceType\Rename($options);
/**
 * Sample call for RenameTemplate operation/method
 */
if ($rename->RenameTemplate(new \StructType\RenameTemplate()) !== false) {
    print_r($rename->getResult());
} else {
    print_r($rename->getLastError());
}
/**
 * Samples for Duplicate ServiceType
 */
$duplicate = new \ServiceType\Duplicate($options);
/**
 * Sample call for DuplicateTemplate operation/method
 */
if ($duplicate->DuplicateTemplate(new \StructType\DuplicateTemplate()) !== false) {
    print_r($duplicate->getResult());
} else {
    print_r($duplicate->getLastError());
}
/**
 * Samples for Set ServiceType
 */
$set = new \ServiceType\Set($options);
/**
 * Sample call for SetWebConfigureSettings operation/method
 */
if ($set->SetWebConfigureSettings(new \StructType\SetWebConfigureSettings()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetApplicationSettings operation/method
 */
if ($set->SetApplicationSettings(new \StructType\SetApplicationSettings()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Samples for Delete ServiceType
 */
$delete = new \ServiceType\Delete($options);
/**
 * Sample call for DeleteTemplate operation/method
 */
if ($delete->DeleteTemplate(new \StructType\DeleteTemplate()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for DeleteGroup operation/method
 */
if ($delete->DeleteGroup(new \StructType\DeleteGroup()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for DeleteCompositionFile operation/method
 */
if ($delete->DeleteCompositionFile(new \StructType\DeleteCompositionFile()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for DeleteCompositionSession operation/method
 */
if ($delete->DeleteCompositionSession(new \StructType\DeleteCompositionSession()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for DeleteThisComposition operation/method
 */
if ($delete->DeleteThisComposition(new \StructType\DeleteThisComposition()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for DeleteWatch operation/method
 */
if ($delete->DeleteWatch(new \StructType\DeleteWatch()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for DeleteWatchCondition operation/method
 */
if ($delete->DeleteWatchCondition(new \StructType\DeleteWatchCondition()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for DeleteWatchTask operation/method
 */
if ($delete->DeleteWatchTask(new \StructType\DeleteWatchTask()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Samples for Create ServiceType
 */
$create = new \ServiceType\Create($options);
/**
 * Sample call for CreateCompositionSession operation/method
 */
if ($create->CreateCompositionSession(new \StructType\CreateCompositionSession()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateOnDemandCompositionSession operation/method
 */
if ($create->CreateOnDemandCompositionSession(new \StructType\CreateOnDemandCompositionSession()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Samples for Start ServiceType
 */
$start = new \ServiceType\Start($options);
/**
 * Sample call for StartComposition operation/method
 */
if ($start->StartComposition(new \StructType\StartComposition()) !== false) {
    print_r($start->getResult());
} else {
    print_r($start->getLastError());
}
/**
 * Sample call for StartCompositionFromSession operation/method
 */
if ($start->StartCompositionFromSession(new \StructType\StartCompositionFromSession()) !== false) {
    print_r($start->getResult());
} else {
    print_r($start->getLastError());
}
/**
 * Samples for Queue ServiceType
 */
$queue = new \ServiceType\Queue($options);
/**
 * Sample call for QueueCompositionFromSession operation/method
 */
if ($queue->QueueCompositionFromSession(new \StructType\QueueCompositionFromSession()) !== false) {
    print_r($queue->getResult());
} else {
    print_r($queue->getLastError());
}
/**
 * Samples for Check ServiceType
 */
$check = new \ServiceType\Check($options);
/**
 * Sample call for CheckCompositionStatus operation/method
 */
if ($check->CheckCompositionStatus(new \StructType\CheckCompositionStatus()) !== false) {
    print_r($check->getResult());
} else {
    print_r($check->getLastError());
}
/**
 * Sample call for CheckThisCompositionStatus operation/method
 */
if ($check->CheckThisCompositionStatus(new \StructType\CheckThisCompositionStatus()) !== false) {
    print_r($check->getResult());
} else {
    print_r($check->getLastError());
}
/**
 * Samples for Cancel ServiceType
 */
$cancel = new \ServiceType\Cancel($options);
/**
 * Sample call for CancelComposition operation/method
 */
if ($cancel->CancelComposition(new \StructType\CancelComposition()) !== false) {
    print_r($cancel->getResult());
} else {
    print_r($cancel->getLastError());
}
/**
 * Sample call for CancelThisComposition operation/method
 */
if ($cancel->CancelThisComposition(new \StructType\CancelThisComposition()) !== false) {
    print_r($cancel->getResult());
} else {
    print_r($cancel->getLastError());
}
/**
 * Samples for End ServiceType
 */
$end = new \ServiceType\End($options);
/**
 * Sample call for EndCompositionSession operation/method
 */
if ($end->EndCompositionSession(new \StructType\EndCompositionSession()) !== false) {
    print_r($end->getResult());
} else {
    print_r($end->getLastError());
}
/**
 * Samples for Init ServiceType
 */
$init = new \ServiceType\Init($options);
/**
 * Sample call for InitTargetStatus operation/method
 */
if ($init->InitTargetStatus(new \StructType\InitTargetStatus()) !== false) {
    print_r($init->getResult());
} else {
    print_r($init->getLastError());
}
/**
 * Samples for Target ServiceType
 */
$target = new \ServiceType\Target($options);
/**
 * Sample call for TargetCheck operation/method
 */
if ($target->TargetCheck(new \StructType\TargetCheck()) !== false) {
    print_r($target->getResult());
} else {
    print_r($target->getLastError());
}
/**
 * Samples for Report ServiceType
 */
$report = new \ServiceType\Report($options);
/**
 * Sample call for ReportBackToScheduler operation/method
 */
if ($report->ReportBackToScheduler(new \StructType\ReportBackToScheduler()) !== false) {
    print_r($report->getResult());
} else {
    print_r($report->getLastError());
}
/**
 * Samples for Send ServiceType
 */
$send = new \ServiceType\Send($options);
/**
 * Sample call for SendEmail operation/method
 */
if ($send->SendEmail(new \StructType\SendEmail()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Samples for Edit ServiceType
 */
$edit = new \ServiceType\Edit($options);
/**
 * Sample call for EditWatch operation/method
 */
if ($edit->EditWatch(new \StructType\EditWatch()) !== false) {
    print_r($edit->getResult());
} else {
    print_r($edit->getLastError());
}
/**
 * Samples for Update ServiceType
 */
$update = new \ServiceType\Update($options);
/**
 * Sample call for UpdateWatchCondition operation/method
 */
if ($update->UpdateWatchCondition(new \StructType\UpdateWatchCondition()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for UpdateWatchTask operation/method
 */
if ($update->UpdateWatchTask(new \StructType\UpdateWatchTask()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
