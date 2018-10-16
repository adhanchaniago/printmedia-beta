<?php 

echo form_open('user/prosestest');

$data = array('type' => 'text', 'name' => 'nama');
echo form_input($data);
echo form_error('nama');

echo form_submit('submit', 'Submit');

echo form_close();

?>