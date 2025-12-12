<section id="lista-livros">
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
</section>