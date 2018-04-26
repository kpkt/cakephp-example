<?php
echo $this->Form->create('User');

echo $this->Form->input('keyword');


echo $this->Form->button('Reset', array('type'=>'reset'));//optional
echo $this->Form->submit('Search');
echo $this->Form->end();
?>

<?php
echo '<ul>';
foreach ($users as $user) {
    echo "<li>";
    echo $user['User']['id'] . ' ';
    echo $user['User']['username'] . '';
    echo $this->Html->link("Papar", array(
        'action' => 'view', $user['User']['id'], $user['User']['role']
    ));
    echo $this->Html->link("Kemaskini", array(
        'action' => 'edit', $user['User']['id']
    ));
    echo $this->Form->postLink("Hapus", array(
        'action' => 'delete', $user['User']['id']
    ),array('confirm'=>'Betul ke nak delete?'));

    echo "</li>";
}
echo '<ul>';
