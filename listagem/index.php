<?php
    include('./functions.php');
    include('../database/connection.php');
    include('../components/header.php');
?>

<div class="container">
    <br/>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>E-mail</th>
                <th>Celular</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $users = getAllData($conn);
                foreach($users as $user) {
            ?>
                <tr>
                    <th><?= $user['id'] ?></th>
                    <th><?= $user['name'] ?></th>
                    <th><?= $user['surname'] ?></th>
                    <th><?= $user['email'] ?></th>
                    <th><?= $user['phone'] ?></th>
                    <th>
                        <button onclick="editUser(<?= $user['id'] ?>)" class="btn btn-warning">Editar</button>
                        <button onclick="confirmDeleteUser(<?= $user['id'] ?>)" class="btn btn-danger">Excluir</button>
                    </th>
                </tr>
            <?php
                }
            ?>
        </tbody>
        <ul>
            <?php if(!empty($_SESSION['errors'])) {
                    foreach($_SESSION['errors'] as $error) echo "<li class='message error'>$error</li>";
                    unset($_SESSION['errors']);
                }
            ?>
        </ul>
    </table>
    <form id="user-form" method="POST">
        <input type="hidden" name="user-id" id="user-id" />
    </form>
</div>

<script>
    function confirmDeleteUser(userId) {
        if(confirm('Deseja realmente excluir este usuário?')) {
            document.querySelector("#user-form").action = "../user/delete.php";
            document.querySelector("#user-id").value = userId;
            document.querySelector("#user-form").submit();
        }
    }
    function editUser(userId) {
        document.querySelector("#user-form").action = `../user/edit.php?id=${userId}`;
        document.querySelector("#user-id").value = userId;
        document.querySelector("#user-form").submit();
    }
</script>

<?php
    include('../components/footer.php');
?>