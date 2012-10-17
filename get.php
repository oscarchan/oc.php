<?php 
  function array_map_string($params, $prefix="[", $postfix="]", $separator=", ")
  {
    echo $prefix;
    $keys = array_keys($params) ;

    reset($keys);
    for($key=next($keys);$key==TRUE;) {
      echo $key, "=", $params[$key];

      $key=next($keys);

      if($key==TRUE)
	echo $separator;
    }
    echo $postfix;

  } 

 $http_post_params = $_POST;

  echo "<p> count = ", count($http_post_params), " </p>\n";

  echo "implode=[", implode(", ",  $http_post_params), "]";
  echo "json=", array_map_string($http_post_params), "\n";

  print_r($http_post_params);

  echo "<p> keys = ", print_r(array_keys($http_post_params)), "</p>\n";

//   if (isset($_GET['city'])) {
//    echo "<p> {$_GET['city']}</p>\n";
//  }
?>

