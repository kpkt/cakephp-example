<h1>Add New User</h1>
<?php
echo $this->Form->create('User', array('novalidate'));

echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->input('role');

echo $this->Form->end('Save Post');
?>