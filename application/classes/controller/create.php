<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Create extends Controller {

	public function action_index()
	{
		//echo 'this is create index';
		$this->response->body(View::factory('create/new'));
	}

	public function action_new()
	{
//echo URL::base().'<br>';
		//$this->getTags();
		$this->response->body(View::factory('create/new'));
	}

	public function action_tags()
	{
		if(isset($_POST['nameOfSelect']))
		{
			foreach($_POST['nameOfSelect'] as $item)
			{
				echo $item . '<br>';
			}
		}
		if($_POST)
		{
			$newUrl = "index.php/create/tags/?nm=".$_REQUEST['imgFileNm'].'&suc=1';
			Request::current()->redirect($newUrl);
		}else{
			$this->response->body(View::factory('create/tags'));
		}
	}

	public function action_savetags()
	{
		$tags = explode(",", $_POST['tags']);
		foreach($tags as $item)
		{
			//prevent duplicate tags
			$db = Database::instance();
			$result = $db->query(Database::SELECT, 'SELECT tagId, tagDesc FROM
				tags where tagDesc like "%'.$item.'%"')->as_array();
			if(count($result) < 1)
			{
				$this->insertTag($item);
			}
			$this->saveImageTag($_POST['imageFileNm'], $result[0]['tagId']);
		}
		echo 'success';
	}
	
	public function action_getTagsForImage()
	{
		$imageFileNm = $_REQUEST['imageFileNm'];
		$query = "SELECT t.tagId, t.tagDesc
FROM imagetag it
INNER JOIN  tags t
ON it.tagId=t.tagId
INNER JOIN images i
ON it.imageId=i.imageId
WHERE i.imageUrl like '%".$imageFileNm."%'";

		$db = Database::instance();
		$result = $db->query(Database::SELECT, $query)->as_array();
		
		echo json_encode($result);
	}
	
	public function action_upload()
    {
        $view = View::factory('create/new');
        $error_message = NULL;
        $filename = NULL;
		
        if ($this->request->method() == Request::POST)
        {
            if (isset($_FILES['avatar']))
            {
                $filename = $this->_save_image($_FILES['avatar']);
            }
        }
 
        if ( ! $filename)
        {
            $error_message = 'There was a problem while uploading the image.
                Make sure it is uploaded and must be JPG/PNG/GIF file.';
        }
 
        $view->uploaded_file = $filename;
        $view->error_message = $error_message;
		echo $filename;
		if($error_message == NULL){
			$db = Database::instance();
			$query = DB::insert('images', array('imageUrl'))
				->values(array($filename))->execute();
				
			$newUrl = "index.php/create/tags/?nm=".$filename;
			Request::current()->redirect($newUrl);
		}else
		{
			$this->response->body($view);	
		}
    }
	
	protected function _save_image($image)
    {
        if (
            ! Upload::valid($image) OR
            ! Upload::not_empty($image) OR
            ! Upload::type($image, array('jpg', 'jpeg', 'png', 'gif')))
        {
            return FALSE;
        }
 
        $directory = DOCROOT.'user_images/';
 
        if ($file = Upload::save($image, NULL, $directory))
        {
            $filename = strtolower(Text::random('alnum', 20)).'.jpg';
 
            Image::factory($file)
                ->resize(200, 200, Image::AUTO)
                ->save($directory.$filename);
 
            // Delete the temporary file
            unlink($file);
 
            return $filename;
        }
 
        return FALSE;
    }
	
	
	/* =========================== */
	/** Private Functions **/
	/* =========================== */
	private function getTags()
	{
		$db = Database::instance();
        $result = $db->query(Database::SELECT, 'SELECT tagDesc FROM tags');
		foreach ($result as $row)
		{
			echo $row['tagDesc'].'<br>';
		}
	}
	
	private function insertTag($tag)
	{
		$db = Database::instance();
		$query = DB::insert('tags', array('tagDesc'))
			->values(array($tag))->execute();
	}
	
	private function insertImageTag($imageId, $tagId)
	{
		$db = Database::instance();
		$imageTag = $db->query(Database::SELECT, "SELECT imageTagId FROM imagetag where imageId='".$imageId."' and tagId='".$tagId."'")->as_array();
		if(count($imageTag) < 1)
		{
			$query = DB::insert('imagetag', array('imageId', 'tagId'))
			->values(array($imageId, $tagId))->execute();	
		}
	}
	
	private function saveImageTag($image, $tagId)
	{
		$db = Database::instance();
		$image = $db->query(Database::SELECT, "SELECT imageId, imageUrl FROM images where imageUrl='".$image."'")->as_array();
		if(count($image) > 0)
		{
			/*
			foreach($tags as $item)
			{
				$this->insertImageTag($image[0]['imageId'], $this->getTagId($item));
			}
			*/
			$this->insertImageTag($image[0]['imageId'], $tagId);
		}
	}

	private function getTagId($tag)
	{
		$db = Database::instance();
        $result = $db->query(Database::SELECT, "SELECT tagId FROM tags WHERE tagDesc='".$tag."'")->as_array();
		if(count($result) > 0)
			return $result[0]['tagId'];
	}
	
	
	
	
	
} // End Welcome