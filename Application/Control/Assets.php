<?php
	class Control_Assets extends WebLab_Dispatcher_Module {
		
		public function _default(){
			$this->layout->content = new WebLab_Template( 'pages/assets-page' );
		}	
	}