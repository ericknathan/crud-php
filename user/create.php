<?php
    include('../components/header.php');
?>
    <div class="container">
        <hr>
        <div class="card">
            <div class="card-header">
                <h2>Cadastro</h2>
            </div>
            <div class="card-body">
                <form method="post" action="userActions.php">
                    <input type="hidden" name="action" value="create">
                    <input class="form-control" type="text" placeholder="Digite o nome" name="user-name" id="user-name" required>
                    <br />
                    <input class="form-control" type="text" placeholder="Digite o sobrenome" name="user-surname" id="user-surname" required>
                    <br />
                    <input class="form-control" type="text" placeholder="Digite o email" name="user-email" id="user-email" required>
                    <br />
                    <input class="form-control" type="text" placeholder="Digite celular" name="user-phone" id="user-phone" required>
                    <br />
                    <input type="checkbox" name="user-is-admin" id="user-is-admin">
                    <label for="user-is-admin">Administrador</label>
                    <br />
                    <div class="is-admin-form">
                        <input class="form-control" type="text" placeholder="Digite o username do usuário" name="user-username" id="user-username">
                        <br />
                        <input class="form-control" type="text" placeholder="Digite a senha do usuário" name="user-password" id="user-password">
                        <br />
                    </div>
                    <button class="btn btn-success">CADASTRAR</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        const adminCheckbox = document.getElementById('user-is-admin');
        const adminForm = document.querySelector('.is-admin-form');
        adminCheckbox.addEventListener('change', () => {
            console.log(adminForm)
            if (adminCheckbox.checked) {
                adminForm.style.display = 'initial';
            } else {
                adminForm.style.display = 'none';
            }
        });
    </script>
<?php
    include('../components/footer.php');
?>