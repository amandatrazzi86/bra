<?php 
	
/***********************************
*	CRUD - CREATE
************************************/
function create($conn, $tabela, $campos, $values){

	$QrCreate = "INSERT INTO {$tabela} ({$campos}) VALUES ({$values})";
	$StCreate = mysqli_query($conn, $QrCreate);
	if($StCreate):
		return true;
	else:
		return false;
	endif;

}

/***********************************
*	CRUD - SELECT
************************************/
function read($conn, $tabela, $cond = NULL){

	$QrRead = "SELECT * FROM {$tabela} {$cond}";
	$StRead = mysqli_query($conn, $QrRead);
	$cFields = mysqli_num_fields($StRead);

	if(mysqli_num_rows($StRead) > 0):
		
		for($i = 0; $i < $cFields; $i++){
			$contar = 0;
			while($res = mysqli_fetch_assoc($StRead)):
				$resultado[$contar] = $res;
				$contar++;
			endwhile;	
		}
		return $resultado;
	else:
		return false;
	endif;	

}

/***********************************
*	CRUD - UPDATE
************************************/
function update($conn, $tabela, $values, $cond = NULL){
	$QrUpdate = "UPDATE {$tabela} SET {$values} {$cond}";
	$StUpdate = mysqli_query($conn, $QrUpdate);
	
	if($StUpdate):
		return true;
	else:
		return false;
	endif;
}

/***********************************
*	CRUD - DELETE
************************************/
function delete($conn, $tabela, $cond){
	$QrDelete = "DELETE FROM {$tabela} {$cond}";
	$StDelete = mysqli_query($conn, $QrDelete);
}

?>