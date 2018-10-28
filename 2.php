<?php
namespace app\classes;
class Reviews 
{

	public function createReview($db , $product_id)
	{
	    $dataReview=$db->prepare('INSERT INTO tbl_review (name, date, photo, text, id_product) 
	    VALUES (:name, NOW(), :photo, :text, :id_product)');
	    $dataReview->execute(array(
	     	'name' => $_POST['name'],
 	        'photo' => $_FILES['filename']['tmp_name'],
 	        'text' => $_POST['text'] ?$_POST['text'] : 'No text' ,
 	        'id_product' => $product_id
 	   ));
 	   return true;
	}
	
	public function deleteReview($db , $review_id)
	{
	    $deleteRev=$db->prepare('DELETE FROM tbl_review WHERE id_review = :id');
	    $dataReview->execute(array('id' => $review_id));
 	   return true;
	}
	
	public function updateReview($db , $review_id , $field_update, $value_update)
	{
		$stmt=query("UPDATE tbl_review SET '$name' = $value_update WHERE id_review = '$review_id'");
 	    return true;
	}
	
}
