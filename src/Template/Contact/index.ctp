<?php 

pr("Token via cell:");
echo $this->cell('Inbox', [], ['cache' => true]);

pr("Dados via requestAction:");
pr($this->requestAction("/contact/get_data"));

echo $this->Form->create($contact);
echo $this->Form->input('name', ['required' => false]);
echo $this->Form->input('email', ['required' => false, 'type' => 'text']);
echo $this->Form->input('message', ['required' => false]);
echo $this->Form->button('Submit');
echo $this->Form->end(); 

?>