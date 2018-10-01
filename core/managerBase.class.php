<?php

interface ManagerBase{
    

	public function __construct();

	public function inserer($table, $valeur);
	public function modifier($table, $valeur);
	public function supprimer($table, $id);
	public function lister($table);	
    public function listerUneRangee($table, $id);
}