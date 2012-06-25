<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller {

	public function action_index()
	{
		$view = View::factory('home/imgtag');
		$view->imgTags = $this->getTags();		
		
		$this->response->body($view);
	}

	public function action_getGallerybyTag()
	{
		//print_r($_REQUEST);
		
		 $qry = "SELECT i.imageUrl, t.tagDesc
FROM imagetag it
INNER JOIN images i
ON it.imageId=i.imageId
INNER JOIN tags t
on it.tagId=t.tagId
where t.tagDesc like '%".$_REQUEST['tags']."%'";
		
		$db = Database::instance();
		$images = $db->query(Database::SELECT, $qry)->as_array();
		
		
		echo json_encode($images);
		
		//echo $this->array2json($images);
	}


	/* =========================== */
	/** Private Functions **/
	/* =========================== */
	private function getTags()
	{
		$db = Database::instance();
		$result = $db->query(Database::SELECT, 'SELECT tagId, tagDesc FROM tags')->as_array();
		return $result;
	}
	
	private function array2json($arr) { 
		if(function_exists('json_encode')) return json_encode($arr); //Lastest versions of PHP already has this functionality.
		$parts = array(); 
		$is_list = false; 
	
		//Find out if the given array is a numerical array 
		$keys = array_keys($arr); 
		$max_length = count($arr)-1; 
		if(($keys[0] == 0) and ($keys[$max_length] == $max_length)) {//See if the first key is 0 and last key is length - 1
			$is_list = true; 
			for($i=0; $i<count($keys); $i++) { //See if each key correspondes to its position
				if($i != $keys[$i]) { //A key fails at position check. 
					$is_list = false; //It is an associative array. 
					break; 
				} 
			} 
		} 
	
		foreach($arr as $key=>$value) { 
			if(is_array($value)) { //Custom handling for arrays 
				if($is_list) $parts[] = array2json($value); /* :RECURSION: */ 
				else $parts[] = '"' . $key . '":' . array2json($value); /* :RECURSION: */
			} else { 
				$str = ''; 
				if(!$is_list) $str = '"' . $key . '":'; 
	
				//Custom handling for multiple data types 
				if(is_numeric($value)) $str .= $value; //Numbers 
				elseif($value === false) $str .= 'false'; //The booleans 
				elseif($value === true) $str .= 'true'; 
				else $str .= '"' . addslashes($value) . '"'; //All other things 
				// :TODO: Is there any more datatype we should be in the lookout for? (Object?)
	
				$parts[] = $str; 
			} 
		} 
		$json = implode(',',$parts); 
		 
		if($is_list) return '[' . $json . ']';//Return numerical JSON 
		return '{' . $json . '}';//Return associative JSON 
	} 
	
} // End Welcome
