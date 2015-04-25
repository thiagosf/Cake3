<?php 

echo $this->Form->create( 'User' );
echo $this->Form->input( 'username' );
echo $this->Form->input( 'password' );
echo $this->Form->submit( 'Entrar', ['class' => 'button success expand radius'] ); 
echo $this->Form->end(); 

?>