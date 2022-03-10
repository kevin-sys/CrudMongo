<html>
<head>
    <title>CRUD MONGO DB</title>
    
</head>
<body>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>

    <h1>Gestión de usuarios en MongoDB</h1>
    <?php
    require 'user.php';
    ?>

    <p>
        <?php
        require_once __DIR__ . '../bd/Connect_Data.php';

        if ($users->count()>0)
        {
            $datos = $users->find();
            ?>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>USUARIO</th>
                                <th>CONTRASEÑA</th>
                                <th>ACCIÓN</th>

                            </tr>
                        </thead>
                        <?php
                        foreach ($datos as $dato) {
                        ?>      <tr>
                            <td><?php echo $dato["_id"]; ?></td>
                            <td><?php echo $dato["username"]; ?></td>
                            <td><?php echo $dato["password"]; ?></td>
                            <td>
                                <a href="editandousuario.php?id=<?php echo $dato['_id'] ?>" class="btn btn-secondary">
                                    <i class="fas fa-marker"></i>
                                </a>
                                <a href="controller/DeleteUser.php?id=<?php echo $dato['_id'] ?>" class="btn btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <?php
         }//foreach
         ?>
     </table>


     <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>

            </thead>
            <a href="controller/DeleteUser.php?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
            </a>
        </table>
    </div>
</div>
</div>
<?php
}else{
    ?>
    <h4></i>No hay registros en la Base de datos MongoDB</h4>
    <?php 
} ?>

</p>
</body>

</html>
