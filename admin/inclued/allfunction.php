<?php 


function fetchalldata($tablename)
{
	$sql="select * from $tablename";
	$result=mysqli_query($GLOBALS['conn'],$sql);
  
  if($result)
  {
	  return $result;
  }
  
  else 
  {
	  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

function insert($tablename,$data)
{
  $columns="";
  $values="";
  
  foreach($data as $column=>$value)
  {
	
	$columns .= ($columns == "") ? "" : ", ";
	$columns .= $column;
	
	$values .= ($values == "") ? "" : ", ";
	$values .= $value;
	 
  }
  
  $sql="insert into $tablename ($columns) values ($values)"; 
  
  $result=mysqli_query($GLOBALS['conn'],$sql);
  
  if($result)
  {
	  echo 'inserted';
  }
  
  else 
  {
	  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
}


function selectdatabyid($tablename,$id)
{
	$sql="select * from $tablename where id=$id";
	$result=mysqli_query($GLOBALS['conn'],$sql);
	
	if($result)
  {
	 $data=mysqli_fetch_array($result);
	 return $data;
  }
  
  else  
  {
	  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
	
	
}

function update($table,$data,$where)
{
   foreach ($data as $coloum => $value)
    {
    $update=("UPDATE $table SET $coloum = $value WHERE id= '$where'");
	//echo $update;
	mysqli_query($GLOBALS['conn'],$update);
    }	
}

function deletedata($tablename,$id)
{
	$sql="delete from $tablename where id=$id";
	$result=mysqli_query($GLOBALS['conn'],$sql);
  
  if($result)
  {
	 echo 'deleted';
  }
  
  else 
  {
	  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}


?>