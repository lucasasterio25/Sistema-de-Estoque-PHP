<?php

	//fazendo conexao
	$db = mysql_connect('localhost','root','root');
		if(!$db){
			echo "erro 1";
			erro_banco();
		}
		if(!mysql_select_db('teste1',$db)){
			echo "erro 2 ";
			erro_banco();
		}

		$result = @mysql_query("SELECT * FROM Pedido");

		while($row = mysql_fetch_array($result)){
            echo "ID Cliente = ";
            echo $row['id_cliente'];
			echo "<br />";
			echo "ID Produto = ";
            echo $row['id_produto'];
			echo "<br />";
			echo "<br />";
                     }
   
?>



<?php
function erro_banco(){
	echo mysql_errno().' : '.mysql_error();
die(0);
}
?>
