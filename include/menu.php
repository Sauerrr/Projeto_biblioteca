<body>
    <header>

    <div class="logo">
            <a href="index.php"> "Conexão de Livros"</a>
        </div>

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Autores

            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="autor_listagem.php">Listagem</a></li>
            </ul>
        </div>

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Empréstimos

            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="emprestimo_listagem.php">Listagem</a></li>
                <li><a class="dropdown-item" href="emprestimo_ativo.php">Listagem - Ativos</a></li>
                <li><a class="dropdown-item" href="emprestimo_devolvido.php">Listagem - Devolvidos</a></li>
                <li><a class="dropdown-item" href="emprestimo_vencido.php">Listagem - Vencidos</a></li>
                <li><a class="dropdown-item" href="emprestimo_renovado.php">Listagem - Renovados</a></li>
                <li><a class="dropdown-item" href="emprestimo_naoRenovado.php">Listagem - Não Renovados</a></li>




            </ul>
        </div>


            </button>
            
     

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Funcionários

            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="funcionario_listagem.php">Listagem</a></li>

            </ul>
        </div>

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Livros

            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="livro_listagem.php">Listagem</a></li>
            </ul>
        </div>

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Clientes

            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="cliente_listagem.php">Listagem</a></li>
            </ul>
        </div>

        <a href="logout.php" class="btn btn-danger">Sair</a>
    

    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>