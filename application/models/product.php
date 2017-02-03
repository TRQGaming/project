<?php
class product extends CI_Model { //class must be the samw name as the file.

    function get_page($num)
    {
      $offset=($num-1)*4;
      $query = "SELECT * FROM products LIMIT 4 OFFSET ".$offset;
      return $this->db->query($query)->result_array();
    }

    function fetch_all()
{
 $query= "SELECT * FROM products";
 return $this->db->query($query)->result_array();
}


}

//every table should have a method within a class. the methods are the functions written inside of the class.
//this file connects the what the user puts into the browser to the database.
