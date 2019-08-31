<?php 

function RandomFile($folder='', $extensions='.*'){
   // fix path:
    $folder = trim($folder);
    $folder = ($folder == '') ? './' : $folder;
 
    // check folder:
    if (!is_dir($folder)){ die('invalid folder given!'); }
 
    // create files array
    $files = array();
 
    // open directory
    if ($dir = @opendir($folder)){
 
        // go trough all files:
        while($file = readdir($dir)){
 
            if (!preg_match('/^\.+$/', $file) and 
                preg_match('/\.('.$extensions.')$/', $file)){
 
                // feed the array:
                $files[] = $file;                
            }            
        }        
        // close directory
        closedir($dir);    
    }
    else {
        die('Could not open the folder "'.$folder.'"');
    }
 
    if (count($files) == 0){
        die('No files where found :-(');
    }
 
    // seed random function:
    mt_srand((double)microtime()*1000000);
 
    // get an random index:
    $rand = mt_rand(0, count($files)-1);
 
    // check again:
    if (!isset($files[$rand])){
        die('Array index was not found! very strange!');
    }
 
    // return the random file:
    return $folder . "/" . $files[$rand];
 
}
$random1 = "";
$random2 = "";
$random3 = "";
$random4 = "";


$random1 = RandomFile("images/footer");
while (!$random2 || $random2 == $random1) {
	$random2 = RandomFile("images/footer");
}
while (!$random3 || $random3 == $random1 || $random3 == $random2) {
	$random3 = RandomFile("images/footer");
}
while (!$random4 || $random4 == $random1 || $random4 == $random2 || $random4 == $random3) {
	$random4 = RandomFile("images/footer");
}
?>