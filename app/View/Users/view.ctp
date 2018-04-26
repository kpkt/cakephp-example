<ul>
    <li>Id : <?php echo $user['User']['id'] ?></li>
    <li>Username :  <?php echo $user['User']['username'] ?></li>
    <li>Password :  <?php echo $user['User']['password'] ?></li>
    <li>Role :  <?php echo $user['User']['role'] ?></li>
    <li>Created :  <?php echo date('d-m-Y', strtotime($user['User']['created'])) ?></li>
    <li>Modified :  <?php echo $user['User']['modified'] ?></li>
    <li>Modified :  <?php echo $this->Time->format('d-m-Y',$user['User']['modified']) ?></li>
</ul>