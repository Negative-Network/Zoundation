<?php

if (!defined("_ECRIRE_INC_VERSION")) return;

/**
 * Fonction d'appel pour le pipeline
 * @pipeline autoriser */
function zoundation_autoriser(){}


/**
* Fonction d'autorisation pour tester si une personne est connectée ou non
* On utilise ce système pour éviter de générer trop de cache sur les tests
* simple.
*
* Il suffit ensuite de faire [(#AUTORISER{connecter}|oui) ... ] oui [(#AUTORISER{connecter}|non) ... ]
*
* @param mixed $faire
* @param mixed $type
* @param mixed $id
* @param mixed $qui
* @param mixed $opt
* @access public
*/
function zoundation_connecter_dist($faire, $type, $id, $qui, $opt) {
    return ($qui['id_auteur'] !== 0);
}
