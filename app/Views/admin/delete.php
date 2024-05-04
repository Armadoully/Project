<?php
    require_once('../app/Views/template/header.php');
    $usrs = $data['usrs'];
    // var_dump($usrs);
?>
<style>
    body {
      font-family: sans-serif;
    }

    form {
      width: 500px;
      margin: 0 auto;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
    }

    button {
      width: 100%;
      padding: 10px;
      background-color: #000;
      color: #fff;
      border: none;
      cursor: pointer;
    }
    button:hover {
      background: #a391ff;
      color: #fff;
      font-weight: bold;
    }

    .bg-purple950 {
      background: #120033;
    }

    .bg-purple {
      background: #4a00ff;
    }
    
  </style>

  <h1 class="text-center mt-3">Datos del usuario</h1>

  
  <form action="<?= APP_URL_PUBLIC ?>admin/deleteUsr" method="POST" class="bg-purple950 p-5 rounded">
  <div class="alert alert-danger d-flex align-items-center justify-content-center container-fluid" role="alert">
    <div class="fw-bold flex-fill">
        Si elimina el usuario no se pueden volver a recuperar esos datos.
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

  <div class="alert alert-warning d-flex align-items-center justify-content-center container-fluid" role="alert">
    <div class="fw-bold flex-fill">
        Si lo devolvio a esta página despues de eliminar su cuenta es que ocurrio un error.
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

  <h2 class="text-center text-withe">Eliminar</h2>  

    <label for="usr_id" class=" px-4 py-2 mb-3 text-withe rounded fw-bold w-100">
        Elija el usuario a eliminar:
    </label>
    
    <div class="w-100 d-flex justify-content-center mb-3">
        
        <select name="usr_id" id="usr_id" class="form-select bg-purple text-withe fw-bold">
            <option selected disabled>Usuarios</option>

            <?php
                foreach ($usrs as $id_row => $row):
                extract($row);

            ?>
                <option value="<?= $usr_id ?>" >
                    <span style="white-space: nowrap; overflow: hidden;text-overflow: ellipsis;">
                        Nombre: "<?= $usr_nm ?>", Correo: "<?= $usr_ema ?>", Rol: "<?= $rol_nm ?>, Estado: <?= $sta_nm ?>
                    </span>
                </option>
            <?php
                endforeach;
            ?>

        </select>
    </div>
      <button type="submit" class="rounded">
        Eliminar
      </button>
</form>