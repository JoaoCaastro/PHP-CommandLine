<main>
    <br />
    <section>
        <a href="index.php">
            <button class="btn btn-success">Voltar</button>
        </a>
    </section>

    <h2 class="mt-3">Usuário</h2>

    <form method="post">

        <div class="mb-3">
            <label class="form-label">Nome do HOST</label>
            <input type="text" class="form-control" name="nome" value="<?= $computador->nome ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Número de registro</label>
            <input type="text" class="form-control" name="registro" value="<?= $computador->os ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Função</label>
            <input type="text" class="form-control" name="funcao" value="<?= $computador->fabricante ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Salário</label>
            <input type="number" class="form-control" name="salario" value="<?= $computador->ram ?>">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>
    </form>

</main>