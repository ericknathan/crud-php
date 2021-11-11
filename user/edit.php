<?php
	include('../database/connection.php');
    include('./functions.php');
    include('../components/header.php');
?>
    <div class="container">
        <hr>
        <div class="card">
            <div class="card-header">
                <h2>Edição</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="userActions.php">
                    <?php
                        $id = $_GET['id'];
                        $user = getUser($conn, $id);
                    ?>
                    <input type="hidden" name="user-id" value="<?= $id; ?>">
                    <input type="hidden" name="action" value="edit">
                    <input class="form-control" type="text" placeholder="Digite o nome" name="user-name" id="user-name" value="<?= $user['name'] ?>" required>
                    <br />
                    <input class="form-control" type="text" placeholder="Digite o sobrenome" name="user-surname" id="user-surname" value="<?= $user['surname'] ?>" required>
                    <br />
                    <input class="form-control" type="text" placeholder="Digite o email" name="user-email" id="user-email" value="<?= $user['email'] ?>" required>
                    <br />
                    <input class="form-control" type="text" placeholder="Digite celular" name="user-phone" id="user-phone" value="<?= $user['phone'] ?>" required>
                    <br />
                    <button class="btn btn-success">EDITAR</button>
                </form>
            </div>
        </div>
    </div>
<?php
    include('../components/footer.php');
?>