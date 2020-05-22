<?php
	class teste extends config{
		function listTeste() {
			$sql = "select * from Teste";
			
			$query = $this->mysqli->query($sql);
			
			while($result = $query->fetch_assoc()) {
				echo "Id: " . $result['id'];
				echo "<br />";
				echo "Nome: " . $result['name'];
				echo "<br />";
			}
		}
	}
?>
