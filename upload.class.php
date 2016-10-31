<?php
	
	class upload
	{
		
		// Création des variables

		private $_file              = "";
		private $_fichier           = "";
		private $_dossier           = "";
		private $_extension         = "";
		private $_taille            = "";
		private $_erreur            = "";
		public  $_taille_max        = "";
		public  $_extensions_accept = array();

		// Création de la function construct

		public function __construct($directory, $fichier)
		{
			$this->_file      = $fichier;
			$this->_fichier   = basename($_FILES[$this->_file]['name']);
			$extensionFichier = strrchr($_FILES[$this->cl_file]['name'], '.');
			$this->_extension = strtolower($extensionFichier);
			$this->_dossier   = $directory;
		}
	}

?>