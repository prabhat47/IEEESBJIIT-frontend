<?php

//header("Access-Control-Allow-Origin: *");

	

	$imageBankPath = "post/imageBank/";
	$downloadsPath = "post/downloads/";

	$internalAPIPath = "../internal/vmanager/";			

/*
$myfile = fopen("myfile.txt", "w") ord ie("Unable to open file!");
$txt = $_POST['data'];
fwrite($myfile, $txt);
*/
echo 'hello';
	/*
	
		if(isset($_POST['action']))
		{
			if($_POST['action']=='createUser')
			{
			
			$signup=insertUser($normalCon,$_POST['firstname'],$_POST['lastname'],$_POST['industryname'],$_POST['companyname'],$_POST['contact'],$_POST['timezone'],$_POST['email'],$_POST['password'],$_POST['captcha']);
			
			echo json_encode($signup);	
			
			}
			else if($_POST['action']=='login')
			{
			
			$login=checkUser($normalCon,$_POST['email'],$_POST['password']);
			
			echo json_encode($login);	
			
			}
			else if($_POST['action']=='reAuthorize')
			{
			
			$auth = reAuthorize($normalCon,$_POST['email'],$_POST['Id']);
			
			echo json_encode($auth);	
			
			}
			else if($_POST['action']=='forgotpassword')
			{
			
			$forgot = forgotpassword($normalCon,$_POST['email']);
			
			echo json_encode($forgot);	
			
			}

			else if(middleware($normalCon, $_POST['authemail'], $_POST['authToken']))
			{	

			if( $_POST['action']=='logout' )
			{
		
			$logout=logout($_POST['authToken'],$_POST['authemail'],$normalCon);
			
			echo json_encode($logout);	
		
			}
		
			else if($_POST['action']=='createProject')
			{
			$project = createProject($normalCon,$_POST['name'],$_POST['preselection'],$_POST['captureTimestamp'],$_POST['dataSize'],$_POST['totalImages'],$_POST['deviceName'],$_POST['deviceModel'],$_POST['quality'],$_POST['outputType']);
			
			echo json_encode($project);	
			
			}
			
			else if($_POST['action']=='uploadImage')
			{
			
			$image = uploadImage($imageBankPath,$normalCon,$_FILES['file']['tmp_name'],$_FILES['file']['name'],$_POST['lat'],$_POST['lng'],$_POST['size'],$_POST['imageId'],$_POST['deviceModel'],$_POST['deviceName'],$_POST['projectId']);
			
			echo json_encode($image);	
			
			}
			else if($_POST['action']=='listProjects')
			{
			
			$projects=listProjects($normalCon);
			
			echo json_encode($projects);	
			
			
			}
			else if($_POST['action']=='getProjectById')
			{
				
				$project=getProjectById($normalCon,$_POST['Id']);
			
			echo json_encode($project);	
			
			}
			else if($_POST['action']=='updateProjectById')
			{
			
			$project=updateProjectById($normalCon,$_POST['projectId'],$_POST['name'],$_POST['quality'],$_POST['outputType']);
			
			echo json_encode($project);	
			
			}
			else if($_POST['action']=='getMarkers')
			{
			
			$markers=getMarkersByProjectId($normalCon,$_POST['projectId']);
			
			echo json_encode($markers);	
			
			}
			else if($_POST['action']=='getImagesById')
			{
			
			$images=getImagesByProjectId($normalCon,$_POST['projectId'],$_POST['upperLimit'],$_POST['lowerLimit']);
			
			echo json_encode($images);	
			
			}
			else if($_POST['action']=='deleteImageById')
			{
			
			$image=deleteImageById($imageBankPath,$normalCon,$_POST['projectId'],$_POST['imageId'],$_POST['imageName']);
			
			echo json_encode($image);	
			
			}
			else if($_POST['action']=='getImageById')
			{
			
			$image=getImageById($normalCon,$_POST['imageId']);
			
			echo json_encode($image);	
			
			}
			
			else if($_POST['action']=='deleteProject')
			{
			
			$project=deleteProjectById($imageBankPath,$normalCon,$_POST['projectId'],$_POST['authemail'], $_POST['password']);
			
			echo json_encode($project);	
			
			}
			
			else if($_POST['action']=='getClientById')
			{
			
			$client = getClientById($normalCon);
			
			echo json_encode($client);	
			
			}
			else if($_POST['action']=='updateClientById')
			{
			
			$client = updateClientById($normalCon,$_POST['firstname'],$_POST['lastname'],$_POST['industryname'],$_POST['companyname'],$_POST['contactno'],$_POST['timezone'],$_POST['email']);
			
			echo json_encode($client);	
			
			}
			else if($_POST['action']=='downloadData')
			{
			
			$response = downloadData($normalCon, $downloadsPath,$internalAPIPath , $_POST['path'], $_POST['projectId']);
			
			echo json_encode($response);	
			
			}
			
			else if($_POST['action']=='listCollectors')
			{
			
			$collectors = listCollectors($_POST['authToken'],$normalCon);
			
			echo json_encode($collectors);	
			
			}
			
			else if($_POST['action']=='createCollector')
			{
			
			$collector = createCollector($_POST['authToken'],$normalCon,$_POST['name'],$_POST['email'],$_POST['password']);
			
			echo json_encode($collector);	
			
			}
			
			else if($_POST['action']=='resetpassword')
			{
			
			$reset = resetpassword($normalCon,$_POST['email'], $_POST['key'], $_POST['password']);
			
			echo json_encode($reset);	
			
			}
			else if($_POST['action']=='startProjectProcessing')
			{
			
			$process = startProcess($normalCon, $internalAPIPath, $_POST['authToken'], $_POST['projectId']);
			
			echo json_encode($process);	
			}
			else if($_POST['action']=='checkProcessingStatus')
			{
			
			$process = checkProcess($normalCon, $processingCon, $imageBankPath, $internalAPIPath, $_POST['authToken'], $_POST['projectId']);
			
			echo json_encode($process);	
			}
			else
			{
			echo json_encode(array("status"=>"false"));
			}

			}
			else
			{
			echo json_encode(array("reason"=>"authentication failed","status"=>"false"));	
			}

			}
		else
		{
			echo json_encode(array("status"=>"false"));
		}
*/				
?>
