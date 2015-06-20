<?php
class Model_User extends Model
{
	public function get_data()
	{
//$sql = 'SELECT * FROM main';
//$query = DB::query($sql);
//$result = $query->execute();
//$result_array = $result->as_array();


		$result_array = DB::query('SELCT * from main')->execute()->as_array();
		return $resutl_array;
	}
}
