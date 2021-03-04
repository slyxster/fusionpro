<?php

use EnumType\OutputFormat;
use ServiceType\_List;
use ServiceType\Check;
use ServiceType\Create;
use ServiceType\Get;
use ServiceType\Start;
use StructType\CheckCompositionStatus;
use StructType\CompositionFilePathURLRequest;
use StructType\CompositionRequest;
use StructType\CreateCompositionSession;
use StructType\FieldInfoRequest;
use StructType\GetCompositionFileURL;
use StructType\GetPreviewJPEG_URL;
use StructType\GetTemplateFields;
use StructType\GetTemplateFileURL;
use StructType\JobOptions;
use StructType\ListGroups;
use StructType\Preview;
use StructType\StartCompositionFromSession;
use StructType\StartCompositionRequest;
use StructType\TemplateRequest;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

require_once './fusionSDK/vendor/autoload.php';

/**
 * Minimal options
 */
$options = array(
    AbstractSoapClientBase::WSDL_URL => 'fusion_wsdl_rev.xml',
 	AbstractSoapClientBase::WSDL_TRACE => true,
    AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
);


/**
 * create ServiceTypes
 */
$lister_service  = new _List($options);
$getter_service  = new Get($options);
$creator_service = new Create($options);
$starter_service = new Start($options);
$checker_service = new Check($options);


/**
 * Call for ListGroups 
 */
echo "GETTING GROUPS: \n";
if ($lister_service->ListGroups(new ListGroups())) {
    $result = $lister_service->getResult();
    $groups = $result->ListGroupsResult->Groups->string;
    foreach ($groups as $g) {
        echo $g . "\n";
    }
} else {
    echo "error \n";
//    echo $lister_service->getLastError();
}

/**
 * Get info for template
 */

echo "REQUESTING TEMPLATE INFO \n";
$templateRequest = new TemplateRequest();
$templateRequest->SetGroupName('Vision');
$templateRequest->SetTemplateName('VGI_BadgeCard_Fusion');

if ($getter_service->GetTemplateFileURL(new GetTemplateFileURL($templateRequest))) {
    $result = $getter_service->getResult();
    $template = $result->GetTemplateFileURLResult->Message;
    echo $template;
} else {
    echo "error \n";
//    echo $getter_service->getLastError()[0]->faultstring;
}

/**
 * Grab the fields we need
 */

echo "REQUESTING FIELD INFO \n";

$fieldInfoRequest = new FieldInfoRequest();
$fieldInfoRequest->SetGroupName('Vision');
$fieldInfoRequest->SetTemplateName('VGI_BadgeCard_Fusion');

if ($getter_service->GetTemplateFields(new GetTemplateFields($fieldInfoRequest))) {
	$result = $getter_service->getResult();
	$fields = $result->GetTemplateFieldsResult->FieldInfo;
	foreach ($fields as $field) {
		echo $field->Name . "\n";
	}
} else {
    echo "error \n";
//    echo $getter_service->getLastError()[0]->faultstring;
}

/**
 * Start the composition
 */

echo "CREATING COMPOSITION SESSION \n";
$compositionRequest = new CompositionRequest();
$compositionRequest->SetGroupName('Vision');
$compositionRequest->SetTemplateName('VGI_BadgeCard_Fusion');
$job_options = new JobOptions();
$job_options->OutputFormat = OutputFormat::VALUE_PDF;
$compositionRequest->setOptions($job_options);

$compositionId = 0;

if ($creator_service->CreateCompositionSession(new CreateCompositionSession($compositionRequest))) {
    $result = $creator_service->getResult();
	$compositionId = $result->CreateCompositionSessionResult->CompositionID;
	echo 'NEW SESSION COMP ID: '. $compositionId . "\n";
} else {
	echo "error \n";
//    echo $creator_service->getLastError()[0]->faultstring;
}

echo "GENERATING PREVIEW... \n";

$preview = new Preview();
$preview->setTimeoutSeconds(-1);
$preview->setCompositionID($compositionId);
$preview->setPageNumber(1);
$previewResponse = $getter_service->GetPreviewJPEG_URL(new GetPreviewJPEG_URL($preview));
$result = $getter_service->getResult();
echo "PREVIEW URL: " . $result->GetPreviewJPEG_URLResult->Output . "\n";

echo "STARTING COMPOSITION SESSION \n";

$startCompositionRequest = new StartCompositionFromSession(new StartCompositionRequest($compositionId));
$result = null;
if ($starter_service->StartCompositionFromSession($startCompositionRequest)) {
    $result = $starter_service->getResult();
    $server = $result->StartCompositionFromSessionResult->AssignedServer;
    echo "STARTED: " . $server . "\n";
} else {
    print_r($starter_service->getLastError());
    exit;
}
// Loop through until composition job status is done.


$loop_count = 0;

while (true) {
    $filepath = new CompositionFilePathURLRequest();
    $filepath->setCompositionID($compositionId);
    $status = $checker_service->CheckCompositionStatus(new CheckCompositionStatus($filepath));
    $job_status = $status->CheckCompositionStatusResult->JobStatus;
    echo "CURR JOB STATUS: " . $job_status . "\n";
    if ($job_status === \EnumType\JobStatus::VALUE_DONE) {
        $completed = new CompositionFilePathURLRequest();
        $completed->setCompositionID($compositionId);
        $completed->setType(\EnumType\FileType::VALUE_OUTPUT);
        $result = $getter_service->GetCompositionFileURL(new GetCompositionFileURL($completed));
        echo "FINAL PATH: " . $result->GetCompositionFileURLResult->Output . "\n";
        break;
    }
    if ($job_status === \EnumType\JobStatus::VALUE_FAILED ||
            $job_status === \EnumType\JobStatus::VALUE_CANCELLED ||
            $job_status === \EnumType\JobStatus::VALUE_NONE) {
       break;
    }
}

exit;
