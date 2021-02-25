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
require_once '/home/rickpotratz/Desktop/coding/a2z/fusionpro/fusionSDK/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'fusion_wsdl_rev.xml',
 	\WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
);

/**
 * create ServiceTypes
 */
$list = new \ServiceType\_List($options);
$get = new \ServiceType\Get($options);
$create = new \ServiceType\Create($options);
$start = new \ServiceType\Start($options);
$check = new \ServiceType\Check($options);

/**
 * Call for ListGroups 
 */
if ($list->ListGroups(new \StructType\ListGroups()) !== false) {
    $result = $list->getResult();
    $groups = $result->ListGroupsResult->Groups->string;

	print_r($groups);
} else {
    print_r($list->getLastError());
}

$params = new \StructType\TemplateRequest;
	$params->SetGroupName('Vision');
	$params->SetTemplateName('VGI_BadgeCard_Fusion');

if ($get->GetTemplateFileURL(new \StructType\GetTemplateFileURL($params)) !== false) {
    $template = $get->getResult();
} else {
    print_r($get->getLastError());
}

// Grab the fields we need
$req = new \StructType\FieldInfoRequest;
	$req->SetGroupName('Vision');
	$req->SetTemplateName('VGI_BadgeCard_Fusion');

if ($get->GetTemplateFields(new \StructType\GetTemplateFields($req)) !== false) {
	$result = $get->getResult();
	$fields = $result->GetTemplateFieldsResult->getFieldInfo()->FieldInfo;

	foreach ($fields as $field) {
		print_r($field->Name);
			echo "\n";
	}
} else {
    print_r($get->getLastError());
}

// Start the composition
$cr = new \StructType\CompositionRequest();
	$cr->SetGroupName('Vision');
	$cr->SetTemplateName('VGI_BadgeCard_Fusion');

if ($create->CreateCompositionSession(new \StructType\CreateCompositionSession($cr)) !== false) {
    	$result = $create->getResult();
	$compositionId = $result->CreateCompositionSessionResult->getCompositionID();

		print_r($compositionId);
} else {
	echo "error \n";
    print_r($create->getLastError());
}

$loopcount = 0;

// Loop through until composition job status is done.
while ($loopcount < 1) {
	$compreq = new \StructType\StartCompositionRequest();
	$compreq->SetCompositionID($compositionId);

	if ($start->StartCompositionFromSession(new \StructType\StartCompositionFromSession($compreq)) !== false) {
    		$result = $start->getResult();

		$preview = new \StructType\Preview();
		$preview->setTimeoutSeconds(-1);
		$preview->setCompositionID($compositionId);
		$preview->setPageNumber(1);

		$previewResponse = $get->GetPreviewJPEG_URL(new \StructType\GetPreviewJPEG_URL($preview));

		$filepath = new \StructType\CompositionFilePathURLRequest();
		$filepath->setCompositionID($compositionId);
		$status = $check->CheckCompositionStatus(new \StructType\CheckCompositionStatus($filepath));
		$jobstatus = $status->CheckCompositionStatusResult->getJobStatus();
			print_r($jobstatus);

		if ($jobstatus == "Done") {
			$completed = new \StructType\CompositionFilePathURLRequest();
			$completed->setCompositionID($compositionId);
			$completed->setType('Output');
			$completedResponse = $get->GetCompositionFileURL(new \StructType\GetCompositionFileURL($completed));

			print_r($completedResponse);

			$loopcount = 1;
		}
	} else {
    		print_r($start->getLastError());
	}
}

exit;
