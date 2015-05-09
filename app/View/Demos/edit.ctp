<br/>
<br/>
<div>
<h3>Edit Post</h3>
<?php
echo $this->Form->create('Demo',array('controller'=>'demos','action'=>'edit'));
echo $this->Form->input('counter');
echo $this->Form->end('Save Post');
?>
</div>