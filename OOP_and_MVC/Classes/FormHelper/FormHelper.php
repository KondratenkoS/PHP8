<?php
require_once '../TagHelper/TagHelper.php';

class FormHelper extends TagHelper
{
	public function openForm($attrs = [])
	{
		return $this->open('form', $attrs);
	}
	
	public function closeForm()
	{
		return $this->close('form');
	}
	
	public function input($attrs = [])
	{
		if (isset($attrs['name'])) {
			$name = $attrs['name'];
			
			if (isset($_REQUEST[$name])) {
				$attrs['value'] = $_REQUEST[$name];
			}
		}
		
		return $this->open('input', $attrs);
	}
	
	public function textarea($attrs = [])
	{
		if(isset($_REQUEST['text'])){
			$this->setText($_REQUEST['text']);
		} else {
			$this->setText('');
		}

		return $this->show('textarea', $attrs);
	}

	public function password($attrs = [])
	{
		$attrs['type'] = 'password';
		return $this->input($attrs);
	}
	
	public function hidden($attrs = [])
	{
		$attrs['type'] = 'hidden';
		return $this->open('input', $attrs);
	}
	
	public function submit($attrs = [])
	{
		$attrs['type'] = 'submit';
		return $this->open('input', $attrs);
	}
	
	public function checkbox($attrs = [])
	{
		$attrs['type'] = 'checkbox';
		$attrs['value'] = 1;
		
		if (isset($attrs['name'])) {
			$name = $attrs['name'];
			
			if (isset($_REQUEST[$name]) and $_REQUEST[$name] == 1) {
				$attrs['checked'] = true;
			}
			
			$hidden = $this->hidden(['name' 
				=> $name, 'value' => '0']); 
		} else {
			$hidden = '';
		}
		
		return $hidden . $this->open('input', $attrs);
	}
}