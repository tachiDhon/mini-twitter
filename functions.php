<?php

include_once 'connect.php';

class search extends Connexion_BDD {
  public function search_user() {
    $search_query = htmlentities($_POST['search_users']);
    // $query= "SELECT * FROM users WHERE pseudo LIKE '%$search_query%' ";
    $query = "SELECT * FROM houses WHERE postcode like ?";  // ? placeholder in query
    $stmt = $this->mysqli->prepare($query);
    $stmt->bind_param("s", "%$search_query%");       // insert your variable into the placeholder (still need to add % wildcards)
    $stmt->execute();

      // $result = $this->->query($query);
      // var_dump($result);
      // $count_result = $result->count_rows;
      //
      //   if($count_result > 0){
      //       while($rows =$result->fetch_assoc()){
      //           $this->data[]=$rows;
      //           //print_r($rows);
      //       }
      //       return $this->data;
      //   }
      //    else {
      //     echo 'No Records Found';
      //   }
  }
}

$var = new Connexion_BDD();
