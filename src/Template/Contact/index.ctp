<?php 

echo $this->Form->create($contact);
echo $this->Form->input('name', ['required' => false]);
echo $this->Form->input('email', ['required' => false, 'type' => 'text']);
echo $this->Form->input('body', ['required' => false]);
echo $this->Form->button('Submit');
echo $this->Form->end(); 

?>