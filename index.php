<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste - Nambbu Desenvolvimento</title>

    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .texto{
            font-size: 12px;
        }
    </style>

</head>
<body>
    
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Teste</h1>
            <p class="lead">A aplicação dessa prova serve para medir o conhecimento básico em html, css e js para o programa estágio Nambbu.</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="texto">O teste consiste em alimentar a tabela com as informações disponibilizadas pelo arquivo <strong>array.json</strong> na raiz desse projeto. Se atentar pois nem todas informações serão incluídas na tabela, apenas alguns dados pontuais. Em cada <u>row</u> da tabela o botão de <u>detalhes</u> deve realizar a ação do <strong>click</strong> mostrando um alert, com os dados alimentados idem da tabela.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr id="lista">
                            <th scope="col">Nome</th>
                            <th scope="col">Data</th>
                            <th scope="col">CPF</th>
                            <th scope="col">RG</th>
                            <th scope="col">Email</th>
                            <th scope="col">Celular</th>
                            <th scope="col">Ação</th>
                        </tr>
                    </thead>
                    <tbody id="tabela">
                        <tr >
                            <th scope="row">...</th>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm">Detalhes</button>
                            </td>
                        </tr>
                    </tbody>
                </table>                
            </div>
        </div>
    </div>
    <!-- JS Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        var xmlhttp = new XMLHttpRequest();     
        var str = "";
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                myObj = JSON.parse(this.responseText);
                for(var i = 0;i < myObj.length;i++)
                {
                    str += "<tr><th scope=\"row\" id=\"nm_cliente\">"+myObj[i].nome+"</th>"+
                            "<td scope=\"\" id=\"dt_nasc\">"+myObj[i].data_nasc+"</td>"+
                            "<td scope=\"\" id=\"nr_cpf\">"+myObj[i].cpf+"</td>"+
                            "<td scope=\"\" id=\"nr_rg\">"+myObj[i].rg+"</td>"+
                            "<td scope=\"\" id=\"nm_email\">"+myObj[i].email+"</td>"+
                            "<td scope=\"\" id=\"nr_celular\">"+myObj[i].celular+"</td>"+
                            "<td><button type=\"button\" class=\"btn btn-primary btn-sm\" onclick=\"detalhes("+i+")\">Detalhes</button></td></tr><br><br>";
                    

                }
                document.getElementById("tabela").innerHTML = str;
            }
        };
        xmlhttp.open("GET", "array.json", true);
        xmlhttp.send();

        function detalhes(id)
       {
           switch(id)
           {
               case 0: 
                    mostrarClientes(0);
               break
               case 1: 
                    mostrarClientes(1);
               break
               case 2: 
                mostrarClientes(2);
               break
               case 3: 
                mostrarClientes(3);
               break
               case 4: 
                mostrarClientes(4);
               break
               case 5: 
                mostrarClientes(5);
               break
               case 6: 
                mostrarClientes(6);
               break
               case 7: 
                mostrarClientes(7);
               break
               case 8: 
                mostrarClientes(8);
               break
               case 9: 
                mostrarClientes(9);
               break
               default: alert("ERROR");
           }
       }

       function mostrarClientes(nr)
       {
           alert("Nome: " + myObj[nr].nome + " \nData Nasc: "+myObj[nr].data_nasc+"\n CPF: "+myObj[nr].cpf
           +"\n RG: "+myObj[nr].rg+"\n Email: "+myObj[nr].email+"\n Cel: "+myObj[nr].celular);
       }
    </script>
</body>
</html>