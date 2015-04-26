<?php 

echo $this->Form->create( 'User' );
echo $this->Form->input( 'username', ['placeholder' => 'usuário', 'label' => false] );
echo $this->Form->input( 'password', ['placeholder' => 'senha', 'label' => false] );
echo $this->Form->button( '<i class="fa fa-lock"></i> Entrar', [
  'type' => 'submit', 
  'class' => 'button success expand radius', 
  'escape' => false, 
]); 
echo $this->Form->end(); 

?>