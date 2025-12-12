<section id="explorar-livro">
    <h2>Explorar</h2>
    <form action="">
        <input type="text" name="pesquisar" placeholder="Pesquisar livro...">
        <button>Pesquisar</button>
    </form>
</section>
<section id="lista-livros">
    <?php foreach ($livros as $livro) : ?>
        <div class="card-livro-conteudo">
            <div class="card-livro">
                <div>Imagem</div>
                <div>
                    <a href="/livro?id=<?= $livro["id"]; ?>"><?= $livro["titulo"]; ?></a>
                    <div><?= $livro["autor"]; ?></div>
                    <div>Avaliações</div>
                </div>
            </div>
            <div><?= $livro["descricao"]; ?></div>
        </div>
    <?php endforeach; ?>
</section>