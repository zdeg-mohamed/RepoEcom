<?php

/**
 *
 */
class Produit extends Model {

	var $table = 'produit';

	function getLast($num = 5) {

		return $this -> find(array('limit' => $num, 'order' => 'id DESC'));
	}

}
?>
