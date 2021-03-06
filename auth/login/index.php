<?php
    session_start();
    if(isset($_SESSION["user_id"])) {
        $root = "/ericknathan/crud-php";
        return header("Location: $root");
        exit();
    }
    
    include('../../components/header.php');
?>
    <div class="container-geral">
        <div class="container-form">
                <form action="../authActions.php" method="POST">
                    <input type="hidden" value="login" name="action">

                    <div class="form-group">
                        <label for="username">USUÁRIO</label>
                        <input type="text" class="form-control" name="username" id="username" required>
                    </div>

                    <div class="form-group">
                        <label for="password">SENHA</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                    </div>

                    <div class="form-group">
                      <button class="btn btn-primary" type="submit">LOGAR</button>
                    </div>

                    <ul>
                        <?php if(!empty($_SESSION['errors'])) {
								foreach($_SESSION['errors'] as $error) echo "<li class='message error'>$error</li>";
								unset($_SESSION['errors']);
							}
						?>
					</ul>
                </form>
            </div>
        </div>
    </div>
<?php
    include('../../components/footer.php');
?>