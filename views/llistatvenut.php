<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Borbadeen peru</title>
    <style>
  body {
    font-family: Arial, sans-serif;
    
  }

  h2 {
    color: #0066cc;
  }

  table {
    border-collapse: collapse;
    margin: 20px 0;
    width: 100%;
  }

  th, td {
    border: 1px solid #ccc;
    padding: 10px;
    text-align: left;
  }

  th {
    background-color: #f2f2f2;
    font-weight: bold;
  }

  a {
    background-color: #0066cc;
    border-radius: 3px;
    color: #fff;
    display: inline-block;
    margin-right: 10px;
    padding: 8px 16px;
    text-decoration: none;
  }

  a:hover {
    background-color: #004080;
  }

  .back-arrow {
  position: relative;
  left: 10px;
  top: 10px;
  font-size: 24px;
  cursor: pointer;
}
.bajar{
  background-color: #ddd;
  height: 3px;
}
footer{
  background-color: #ffff;
}
#searchContainer {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    margin-top: 20px;
    margin-bottom: 20px;
}

#searchInput {
    margin-right: 10px;
}

#searchContainer button {
    background-color: #0066cc;
    border-radius: 3px;
    color: #fff;
    margin-right: 10px;
    padding: 8px 16px;
    border: none;
    cursor: pointer;
}

#searchContainer button:hover {
    background-color: #004080;
}

#cartContainer {
    max-height: 50vh; /* Limita la altura del contenedor */
    overflow-y: auto; /* Agrega desplazamiento vertical si el contenido excede la altura máxima */
    background-color: #ddd;
    padding: 20px;
    margin-bottom: 20px;
}

#cartContainer h2 {
    margin-top: 0;
}

#cartContainer button {
    margin-top: 10px;
}

#bookList{
    overflow-y: scroll;
    max-height: 50vh;
    width: 90%;
    margin:auto;
    
}
#cartContainer{
    margin-top: 40px;
}
    </style>
</head>
<body>
    <h2 id="titol">Llistat llibres venuts</h2>
    <i class="back-arrow">Volver  </i>
    <br>
    <br>

    <div id="searchContainer">
        <input type="text" id="searchInput" placeholder="Busca llibre pel nom">
        <button onclick="searchBooks()">Buscar</button>
        <button onclick="resetSearch()">Eliminar filtres</button>
    </div>

    <br>

    <div id="bookList">
        <table border="1" id="bookTable">
            <thead>
                <tr>
                    <?php
                    $item = $listado->fetch();
                    foreach($item as $key=>$value) { ?>
                        <th><?php echo $key ?></th><?php
                    } ?>
                </tr>
            </thead>
            <tbody>
                <?php 
                do { ?>  
                    <tr><?php
                        foreach($item as $key=>$value) { ?>
                            <td><?php echo $value ?></td><?php
                        } ?>
                    </tr> <?php
                } while($item = $listado->fetch());  ?>
            </tbody>
        </table>   
        <!-- Queda pendent afegir i eliminar -->
    </div>

    <script>
        function searchBooks() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("bookTable");
            tr = table.getElementsByTagName("tr");
            
            // Itera sobre todas las filas y oculta aquellas que no coincidan con la búsqueda
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0]; // Cambia el índice al del campo donde está el nombre del libro
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }       
            }
        }

        function resetSearch() {
            var table = document.getElementById("bookTable");
            var rows = table.getElementsByTagName("tr");
            for (var i = 0; i < rows.length; i++) {
                rows[i].style.display = "";
            }
        }

        document.querySelector('.back-arrow').addEventListener('click', function() {
            window.history.back();
        });
    </script>
</body>
</html>
