<h1>Edit New User</h1>
<?php
echo $this->Form->create('User');#<form>

echo $this->Form->input('id');
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->input('role');

echo $this->Form->end('Edit Post');#</form>
?>