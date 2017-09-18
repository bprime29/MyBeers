<?php
/**
 * Created by PhpStorm.
 * User: Bebzh
 * Date: 10/09/2017
 * Time: 22:45
 */
session_start();
$titre = "Calendrier";
$description = "Calendrier de brassage";
$keywords = "";
include("includes/config.php");
include("includes/identifiants.php");
include("includes/debut.php");
?>
<link rel="stylesheet" href="fullcalendar-3.5.1/fullcalendar.css">
<script src="fullcalendar-3.5.1/lib/moment.min.js"></script>
<script src="fullcalendar-3.5.1/lib/jquery-ui.min.js"></script>
<script src="fullcalendar-3.5.1/fullcalendar.js"></script>
<script src="fullcalendar-3.5.1/locale/fr.js"></script>

<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=MyBeers;charset=utf8', 'mybeers', 'Bebzh2912!');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
$sql_calendar="select * from calendrier order by id";
$data=$bdd->query($sql_calendar);
?>

<?php
print ROOTPATH + "/includes/add_events.php";
?>

<script type="text/javascript">
    $(document).ready(function() {

        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();

        var calendar = $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            editable: true,
            events: <?php echo json_encode($data->fetchAll(PDO::FETCH_ASSOC));?>,
            selectable: true,
            selectHelper: true,
            select: function(start, end, allDay) {
                var title = prompt('Titre de l evenements:');
                if (title) {
                    var start = moment(start, 'DD.MM.YYYY').format('YYYY-MM-DD');
                    var end = moment(end, 'DD.MM.YYYY').format('YYYY-MM-DD');
                    $.ajax({
                        url: '<?php echo ROOTPATH,"/includes/add_events.php"?>',
                        data: 'title='+ title+'&start='+ start +'&end='+ end ,
                        type: "POST",
                        success: function(json) {
                            alert('OK');
                        }
                    });
                    calendar.fullCalendar('renderEvent',
                        {
                            title: title,
                            start: start,
                            end: end,
                            allDay: allDay
                        },
                        true // make the event "stick"
                    );
                }
                calendar.fullCalendar('unselect');
            } //select function end here
        });

    });
</script>

<div class="container">
    <?php
    print ROOTPATH + "/includes/add_events.php";
    ?>

    <div id='calendar'></div>
</div>