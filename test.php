<?php

require './cfTrabalhos.php';

$cf = new cfTrabalhos();

echo ($cf->dateToBR("2011-09-11"));
echo '<br />';
echo ($cf->dateToUS("11/12/2014"));



$db->RunQuery("insert into areas (nome_area) values ('Computação')");