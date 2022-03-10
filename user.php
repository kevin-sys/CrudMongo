<!DOCTYPE html>
<html>

<head>
    <title>Registrar usuario</title>
</head>
<body>
    <link href="css/styles.css" rel="stylesheet" />

    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />

    <div class="card card-body">
        <form action="controller/PostUser.php" method="POST">
            <div class="form-group">
                <label><b>Usuario</b></label>
                <input type="text" name="user" class="form-control" placeholder="Digite usuario" autofocus required="">
            </div>

            <div class="form-group">
                <label><b>Contraseña</b></label>
                <input type="password" name="pwd" class="form-control" placeholder="Digite la Contraseña" autofocus required="">
            </div>
            <button type="submit" name="PostUser" class="btn btn-success"><i
                class="fa fa-fw fa-lg fa-check-circle"></i>Registrar</button>
            </form>
        </div>
    </body>
    </html>