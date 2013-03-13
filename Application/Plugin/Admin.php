<?php
	class Admin {
		
		public static function edit( $content_id ) {
			$html = '<span class="admin-edit">'.
					'<a href="#adminModal" data-toggle="modal" content-id="'.$content_id.'">Edit</a>'.
					'</span>';
		
			if( Admin::checkSession() ) {
				return $html;		
			}
		} 

		public static function checkSession() {
			if($_SESSION['auth'] = 'authOk') {
				return true;
			}
		}

	}