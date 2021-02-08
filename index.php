<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <!-- Sweet Alert 2 -->
    <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="main.css">

    <title>Crud con Vue.js</title>
  </head>
  <body>

    <h1 class="text-center mt-5 display-4 text-primary pb-5">CRUD con Vue.js</h1>

    <div id="app">
      <div class="container">
        <div class="row">
          <div class="col">
            <button @click="btnAlta" class="btn btn-success text-white" title="Nuevo">Nuevo</button>
          </div>
          <div class="col text-right">
            <h5>Stock Total: <span class="badge badge-success">{{totalStock}}</span></h5>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-md-12">
            <table class="table table-stripe">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Marca</th>
                  <th scope="col">Modelo</th>
                  <th scope="col">Stock</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="(movil,indice) of moviles">
                  <td>{{movil.id}}</td>
                  <td>{{movil.marca}}</td>
                  <td>{{movil.modelo}}</td>
                  <td>{{movil.stock}}</td>

                  <!--
                  <td>
                    <div class="col-xs-12 col-md-8">
                      <input type="number" v-model.number="movil.stock" class="form-control text-right" disabled>
                    </div>
                  </td>
                  -->

                  <td>
                    <div class="btn-group" role="group">
                      <button class="btn btn-primary" title="Editar" @click="btnEditar(movil.id, movil.marca, movil.modelo, movil.stock)">
                        <i class="fas fa-pencil-alt"></i></button>
                        <button class="btn btn-danger" title="Eliminar" @click="btnBorrar(movil.id)"><i class="fas fa-trash-alt"></i></button>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>



    <!-- Jquery -->
    <script src="Jquery/jquery-3.5.1.min.js"></script>
    <!-- Popper -->
    <script src="https://unpkg.com/popper.js@1.15.0/dist/umd/popper.min.js"></script>
    <!-- Bootstrap Js -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <!-- Axios -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <!-- Sweet Alert 2 -->
    <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <!-- JS Main -->
    <script src="main.js"></script>
  </body>
</html>