<?php
	class Table_Post extends WebLab_Table {
		
		protected static $_fields = array( // Definitie van velden
				'id',
				'date',
				'title',
				'content',
				'user_id',
				'online',
				'deleted'
			);		
		protected static $_table = 'post';	
		protected static $_instance;
		
		
		/*
		public function doeEensZot() {
			$q = db('main')->newQuery(); 
			
			$q->addTable( $this->createTable() );
			$q->limit(10);
			
			$result = $q->select();
			
			return $result->fetch_all();
		}*/
		
	}