<!DOCTYPE HTML>
<html>
<head>
<style>
#div1, #div2, #div3 ,#div4, #div5, #div6 , #div7 , #div8 , #div9 , #div10 , #div11 , #div12 , #div13 , #div14 , #div15 , #div16 , #div17 , #div18 , #div19 , #div20 , #div21 , #div22 , #div23 , #div24 , #div25 , #div26 , #div27 , #div28 , #div29 , #div30 , #div31 , #div32 , #div33 , #div34 , #div35 , #div36 , #div37 , #div38 , #div39 , #div40 , #div41 , #div42 , #div43 , #div44 , #div45 , #div46 , #div47 , #div48{
  width: 350px;
  height: 70px;
  padding: 10px;
  border: 1px solid #aaaaaa;
}

#drag1{
  width: 200px;
  height: 40px;
}

th{
  color: whitesmoke;
  background-color:  #463e3e  ;
  border: black 2px solid;
  text-align: center;
  width: 240px;
  height: 50px;
}

tr{
  border: black 2px solid;
  text-align: center;
  width: 240px;
  height: 50px;
}


td{

  text-align: center;
  width: 240px;
  height: 50px;
  border: black 2px solid;

  }

table{
  border: black 2px solid;

}




</style>
<script>




function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  ev.target.appendChild(document.getElementById(data));
  //ev.target.innerHTML+="<div>"+document.getElementById(data).innerHTML+"</div>";



  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    if(this.readyState==4) {
        alert(this.responseText);
    }
  };
  xhr.open("GET","index.php?controlador=Horari&accion=gravar_assignacio&id_ocupacio="+document.getElementById(data).getAttribute("id_ocupacio")+"&id_treballador="+ev.target.getAttribute("id_treballador"),true);
  xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  xhr.send();
}


</script>
</head>
<body>

<div class=base_treballadors>
    <?php
  while($treballador = $treballadors->fetch()) { ?>
      <div class="treballadors"  id_treballador=<?= $treballador["id_treballador"]?> id="treballador_<?= $treballador["id_treballador"] ?>" ondrop="drop(event)" ondragover="allowDrop(event)" draggable="true" ondragstart="drag(event)" >   <?= $treballador["nom"] ?> </div><?php
  } ?>
</div>

<br>


<div class=basse_ocupacions ondrop="drop(event)" ondragover="allowDrop(event)">
<?php
  while($ocupacio = $ocupacions->fetch()){?>
      <div class=ocupacio  id_ocupacio=<?= $ocupacio["id_ocupacio"]?>  id="ocupacio_<?= $ocupacio["ocupacio"] ?>"  draggable="true" ondragstart="drag(event)"><?= $ocupacio["ocupacio"] ?> </div><?php
  } ?>
</div>

<table border="1">
  <tr>
    <th>Hora</th>
    <th>Lunes</th>
    <th>Martes</th>
    <th>Miércoles</th>
    <th>Jueves</th>
    <th>Viernes</th>
  </tr>

  <?php
    $horas = array("8:00 - 9:00","9:00 - 10:00", "10:00 - 11:00", "11:00 - 12:00", "12:00 - 13:00", "14:00 - 15:00", "15:00 - 16:00", "16:00 - 17:00","17:00 - 18:00","18:00 - 19:00","19:00 - 20:00","20:00 - 21:00");
    for ($i = 0; $i < count($horas); $i++) {
      echo "<tr>";
      echo "<td style='background-color:#463e3e ; color:whitesmoke; '  >$horas[$i]</td>";
      for ($j = 1; $j <= 5; $j++) {
        echo '<td style="background-color: #a7a1a1  " ; ondrop="drop(event)" ondragover="allowDrop(event)"   ></td>';
      }
      echo "</tr>";
    }
  ?>

</table>




</body>
</html>

