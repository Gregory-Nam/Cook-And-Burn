<meta name="viewport" content="width=device-width, initial-scale=1">
<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
    position: relative;
    top: 89px;
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>

<h1>Les recettes : </h1>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Rechercher une recette" title="Type in a name">
<table id="myTable">
  <tr class="header">
    <th style="width:60%;">Recette</th>
    <th style="width:40%;"></th>
  </tr>
<?php
$this->_t = 'Recettes';

foreach($recette as $rec) :
            ?>
                <tr>
                    <td><a href="ContenuRecette?id=<?php print_r(urlencode($rec->getTitre()));?>"> <img src="./files/<?php echo $rec->getImage();?>" alt="" width ="170em" height ="270em"  /></a></td>
                    <td><?php echo $rec->getTitre(); ?></td>
                </tr>


<?php endforeach; ?>

                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>





