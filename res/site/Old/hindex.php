<?php

require_once("config.php");

$novoManifestante = new Manifestante("Paulo Spiguel", "16/02/1986");

$novoManifestante->insert();

echo $novoManifestante;

?>