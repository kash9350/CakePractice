<br/>
<br/>
<div >
	<div>
		
		<?php
			echo "<table>";
			foreach ($demos as $p) {
				echo "<div>";
				
				echo "<tr>";
					echo "<td>";
					echo "<span style='color:#979797'> ".$p['Demo']['id']."</td>";
					echo "<td>";
					echo $p['Demo']['counter']."</span>";

					
					echo "</td>";
					echo "<td>";
					echo $this->Html->link('Edit Post ',array('controller' => 'demos', 'action' => 'edit', $p['Demo']['id'])); 
					echo "</td><td>";
					echo $this->Html->link('Delete ',array('controller' => 'demos', 'action' => 'delete_id',$p['Demo']['id']));
					echo "</td>";
				echo "</tr>";
				
				echo "</div>";
			}
			echo "</table>";
			echo "<br/>";
			echo $this->Html->link('Add Post',array('controller' => 'demos', 'action' => 'add'));
		?>
	</div>
</div>