<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css'><link rel="stylesheet" href="./style.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
<style>
body{
  overflow-x: hidden;
  overflow-y: hidden;
}

  .botao2 {
    background-color: #000367; 
    color: white; 
    border: 2px solid #fff;
    padding: 4px 8px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
    border-radius: 12px;
}


.botao2:hover {
    background-color: #fff;
    color: #0707ab;
}


</style>


</head>
<body style="color:#fff">

    
<!-- partial:index.partial.html -->
<script>
  // fill the month table with column headings
function day_title(day_name) {
    document.write("<div class='c-cal__col'>" + day_name + "</div>");
  }
  // fills the month table with numbers
function fill_table(month, month_length, indexMonth) {
    day = 1;
    // begin the new month table
    document.write("<div class='c-main c-main-" + indexMonth + "'>");
    //document.write("<b>"+month+" "+year+"</b>")

    // column headings
    document.write("<div class='c-cal__row'>");
    day_title("Dom");
    day_title("Seg");
    day_title("Ter");
    day_title("Qua");
    day_title("Qui");
    day_title("Sex");
    day_title("Sab");
    document.write("</div>");

    // pad cells before first day of month
    document.write("<div class='c-cal__row'>");
    for (var i = 1; i < start_day; i++) {
      if (start_day > 7) {
      } else {
        document.write("<div class='c-cal__cel'></div>");
      }
    }

    // fill the first week of days
    for (var i = start_day; i < 8; i++) {
      document.write(
        "<div data-day='2020-" +
          indexMonth +
          "-0" +
          day +
          "'class='c-cal__cel'><p>" +
          day +
          "</p></div>"
      );
      day++;
    }
    document.write("</div>");

    // fill the remaining weeks
    while (day <= month_length) {
      document.write("<div class='c-cal__row'>");
      for (var i = 1; i <= 7 && day <= month_length; i++) {
        if (day >= 1 && day <= 9) {
          document.write(
            "<div data-day='2020-" +
              indexMonth +
              "-0" +
              day +
              "'class='c-cal__cel'><p>" +
              day +
              "</p></div>"
          );
          day++;
        } else {
          document.write(
            "<div data-day='2020-" +
              indexMonth +
              "-" +
              day +
              "' class='c-cal__cel'><p>" +
              day +
              "</p></div>"
          );
          day++;
        }
      }
      document.write("</div>");
      // the first day of the next month
      start_day = i;
    }

    document.write("</div>");
  }
</script>
<header style="background-color: #000367">

  <div class="wrapper">
<div class="mr-3" style="width: 180px; margin-left: -10px"><a href="/index.php" style ="background-color: white; color:black; " class="btn btn-outline-dark btn-sm btn-block">Voltar pro menu</a></div> 
    <div class="c-monthyear">
    <div class="c-month">
        <span id="prev" class="prev fa fa-angle-left" aria-hidden="true"></span>
        <div id="c-paginator">
          <span class="c-paginator__month">Janeiro</span>
          <span class="c-paginator__month">Fevereiro</span>
          <span class="c-paginator__month">Março</span>
          <span class="c-paginator__month">Abril</span>
          <span class="c-paginator__month">Maio</span>
          <span class="c-paginator__month">Junho</span>
          <span class="c-paginator__month">Julho</span>
          <span class="c-paginator__month">Agosto</span>
          <span class="c-paginator__month">Setembro</span>
          <span class="c-paginator__month">Outubro</span>
          <span class="c-paginator__month">Novembro</span>
          <span class="c-paginator__month">Dezembro</span>
        </div>
        <span id="next" class="next fa fa-angle-right" aria-hidden="true"></span>
      </div>
      <span class="c-paginator__year">2020</span>
    </div>
    <div class="c-sort">
      <a class="o-btn c-today__btn" href="javascript:;">Hoje</a>
    </div>
  </div>
</header>
<div class="wrapper">
  <div class="c-calendar" style="background-color: #fff">
    <div class="c-calendar__style c-aside" style="background-color:#000367">
      <a class="c-add o-btn js-event__add" href="javascript:;">Adcionar Evento <span class="fa fa-plus"></span></a>
      <div class="c-aside__day">
        <span class="c-aside__num"></span> <span class="c-aside__month"></span>
      </div>
      <div class="c-aside__eventList">
      </div>
    </div>
    <div class="c-cal__container c-calendar__style" style="background-color:#000367">
      <script>
      
      // CAHNGE the below variable to the CURRENT YEAR
      year = 2020;

      // first day of the week of the new year
      today = new Date("January 1, " + year);
      start_day = today.getDay() + 1;
      fill_table("January", 31, "01");
      fill_table("February", 29, "02");
      fill_table("March", 31, "03");
      fill_table("April", 30, "04");
      fill_table("May", 31, "05");
      fill_table("June", 30, "06");
      fill_table("July", 31, "07");
      fill_table("August", 31, "08");
      fill_table("September", 30, "09");
      fill_table("October", 31, "10");
      fill_table("November", 30, "11");
      fill_table("December", 31, "12");
      </script>
    </div>
  </div>

  <div class="c-event__creator c-calendar__style js-event__creator" style="max-height: 520px; background-color: #000367">
    <a href="javascript:;" class="o-btn js-event__close">Fechar <span class="fa fa-close"></span></a><br>

    <form id="addEvent" action="registrar_evento.php" method="post"><br>

      <input placeholder="Nome do Evento" type="text" name="campo1"><br>
      <input type="date" name="campo2"><br>
      <textarea placeholder="Descrição" name="campo3" cols="30" rows="10"></textarea><br>
      <select name="campo4">
          <option value="event">Treino</option>
        </select>   
            <button class="botao2">Salvar <span class="fa fa-save"></span></button>
    </form>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/2.1.6/jquery.cycle2.core.min.js'></script>
<?php
include ('script.php');
?>

</body>
</html>
