<meta name="viewport" content="width=device-width, initial-scale=1">

<script type="text/javascript" src="./js/recherche.js"></script>
<script type="text/javascript" src="./js/pagination.js"></script>

<h1><font color="white">Les recettes : </font></h1><br/>


<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Rechercher une recette" title="Type in a name">
<div class="container" style="margin-top: 35px">
    <h2>Selectionner affichage</h2>
    <div class="form-group">
        <select name="state" id="maxRows" class="form-control" style="width:150px">
            <option value="2">2</option>
            <option value="5" >5</option>
            <option value="10">10</option>
            <option value="15">15</option>
            <option value="20">20</option>
            <option value="2000">Tout voir</option>
        </select>
    </div>
</div>
<div class="menu-top-grids agileinfo">
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
                    <td><a href="ContenuRecette?id=<?php print_r(urlencode($rec->getTitre()));?>"> <img src="./files/<?php echo $rec->getImage();?>" alt="" width ="170em" height ="200em"  /></a></td>
                    <td><h1><?php echo $rec->getTitre(); ?></h1></td>
                </tr>


<?php endforeach; ?>
                </table>
                <div class="pagination-container">
                    <nav>
                        <a><ul class="pagination"></ul></a>
                    </nav>
                </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

    <script>
        var table = '#myTable'
        $('#maxRows').on('change',function(){
            $('.pagination').html('')
            var trnum = 0
            var maxRows = parseInt($(this).val())
            var totalRows = $(table+' tbody tr').length
            $(table+' tr:gt(0)').each(function(){
                trnum++
                if(trnum > maxRows){
                    $(this).hide()
                }
                if(trnum <= maxRows){
                    $(this).show()
                }
            })
            if(totalRows > maxRows){
                var pagenum = Math.ceil(totalRows/maxRows)
                for(var i=1; i<=pagenum;){
                    $('.pagination').append('<li data-page="'+i+'">\<span>'+ i++ +'<span class="sr-only">(current)</span></span>\</li>').show()
                }
            }
            $('.pagination li:first-child').addClass('active')
            $('.pagination li').on('click',function(){
                var pageNum = $(this).attr('data-page')
                var trIndex = 0;
                $('.pagination li').removeClass('active')
                $(this).addClass('active')
                $(table+' tr:get(0)').each(function(){
                    trIndex++
                    if(trIndex > (maxRows*pageNum) || trIndex <= ((maxRows*pageNum)-maxRows)){
                        $(this).hide()
                    }else{
                        $(this).show()
                    }
                })
            })
        })
        $(function(){
            $('table tr:eq(0)').prepend('<th>ID</th>')
            var id = 0;
            $('table tr:gt(0)').each(function(){
                id++
                $(this).prepend('<td>'+id+'</td>')
            })
        })
    </script>







