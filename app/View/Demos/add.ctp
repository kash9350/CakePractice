<br/>
<br/>
<div>
	<h3>Add Post</h3>
	<?php
	echo $this->Form->create('Demo',array('controller'=>'demos','action'=>'add'))	;
	echo $this->Form->input('id');
	echo $this->Form->input('counter');
	echo $this->Form->end('Save Post');
	?>
</div>