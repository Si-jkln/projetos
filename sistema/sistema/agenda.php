<?php  
include 'conexao.php';
include "validacao.php";
include "conexao.php";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sistema</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="./recursos/style.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />

  </head>
<body>

    <?php include 'menusuperior.php'; ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 menu">
              <?php include 'menulateral.php'; ?>
            </div>

        <?php
           
            // Recupere os eventos da tabela 'agendamentos'
            $eventos = array();
            // $cpf = $_SESSION['cpf'];
            $sql = "SELECT recrutamento.id AS id, 
            recrutamento.nome AS funcionario, 
            data_entrevista,
            hora_inicio,
            hora_fim FROM recrutamento";
            $resultado = $conexao->query($sql);


            if ($resultado->num_rows > 0) {
                while ($linha = $resultado->fetch_assoc()) {
                    $eventos[] = array(
                        'id' => $linha['id'],
                        'title' => $linha['funcionario'],
                        'start' => $linha['data_entrevista'] . 'T' . $linha['hora_inicio'],
                        'end' => $linha['data_entrevista'] . 'T' . $linha['hora_fim'] ,
                    );
                }
            }else {
                echo "<p>Nenhuma mensagem encontrada!</p>";
            }
            $conexao->close();
        ?>
        
         <div  class="col-md-9">
        
         <div class="opcoes-visualizacao col-md-4">
                    <label for="visualizacao">Escolha a visualização:</label>
                    <select id="visualizacao" class="form-control">
                        <option value="dayGridMonth">Mês</option>
                        <option value="timeGridWeek">Semana</option>
                        <option value="timeGridDay">Dia</option>
                    </select> 
                </div>
                <div id='calendar'></div>


         </div>

            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/6.1.9/index.min.js" integrity="sha512-xCMh+IX6X2jqIgak2DBvsP6DNPne/t52lMbAUJSjr3+trFn14zlaryZlBcXbHKw8SbrpS0n3zlqSVmZPITRDSQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/6.1.9/index.global.js" integrity="sha512-lU5sd0e7f59Jia30P5oEI5zC3BzVJ4ao+xRA70IIJ2UBzek4PCkPk+MTLIYwXTXGErOqjJ/rLdB3gLK0E5hD0w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            events: <?php echo json_encode($eventos); ?>,
            eventClick: function(info) {
                if (confirm("Você deseja excluir esta mensagem?")) {
                    $.post("seuscript.php", { excluir: true, mensagem_id: info.event.id }, function(data_entrevista) {
                        location.reload();
                    });
                }
            },
            timeZone: 'local', // Configurar para o fuso horário local
            });
            calendar.setOption('locale', 'pt-br');
            calendar.render();

            // Selecionar visualização
            var visualizacaoSelect = document.getElementById('visualizacao');
            visualizacaoSelect.addEventListener('change', function() {
                calendar.changeView(visualizacaoSelect.value);
            });
        });
    </script>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.data_entrevistatables.net/1.13.6/js/jquery.data_entrevistaTables.js"></script>
    <script src="css/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



            </div>
        </div>
    </div>


    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.data_entrevistatables.net/2.1.5/js/data_entrevistaTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./recursos/script.js"></script>
</body>
</html>