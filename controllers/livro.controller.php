<?php

require "dados.php";

$id = $_REQUEST["id"];

$livroFiltrado = array_filter($livros, function ($li) use ($id) {
    return $li["id"] == $id;
});

$livro = array_pop($livroFiltrado);

$view = "livro";
require "views/template/app.php";