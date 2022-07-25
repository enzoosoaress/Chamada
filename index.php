<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="css/chamada.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="js/script.js" defer></script>
</head>

<body>
    <h1>CHAMADA PPI 2022</h1>
    <main class="container">
        <button  data-toggle="modal" data-target="#chamada" class="btn-padrao">Marcar Presença</button>
        <h2>REGISTROS</h2>
        <table>
            <thead>
                <tr>
                    <th>NOMES: </th>
                    <th>04/17</th>
                    <th>09/07</th>
                    <th>11/07</th>
                    <th>18/07</th>
                    <th>25/07</th>
                    <th>01/08</th>
                </tr>
            </thead>

            <tbody id="dados">
                <tr>
                    <td>Jose Enzo Soares dos Santos</td>
                    <td>x</td>
                    <td> </td>
                    <td>x</td>
                    <td>x</td>
                    <td> </td>
                    <td>x</td>
                </tr>
                <tr>
                    <td>Ana Leticia Muniz da Silva</td>
                    <td>x</td>
                    <td> </td>
                    <td>x</td>
                    <td>x</td>
                    <td> </td>
                    <td>x</td>
                </tr>
                <tr>
                    <td>Laura de Lima Camilo</td>
                    <td>x</td>
                    <td> </td>
                    <td>x</td>
                    <td>x</td>
                    <td> </td>
                    <td>x</td>
                </tr>
            </tbody>

        </table>
    </main>
    
    <div class="modal" tabindex="-1" id="chamada">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Marcar Presença</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="" method="post">
                  <div class="form-group">
                      <label for="txt_nome">NOME </label>
                      <input type="text" name="txt_nome" id="txt_nome" CLASS="form-control">
                  </div>

                  <div class="form-group">
                     <label for="txt_senha">SENHA </label>
                     <input type="password" name="txt_senha" id="txt_senha" CLASS="form-control">
                  </div>
                  <div class="text-center">
                    <button type="button" class="btn-padrao" onclick="marcar()">Marcar Presença</button>
                  </div>
              </form>
            </div>
            <div class="modal-footer">
              
              
            </div>
          </div>
        </div>
    </div>
</body>
</html>