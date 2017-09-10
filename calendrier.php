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
            events: [{"id":"1","title":"VoIP Modem","start":"2016-08-31 00:00:00","end":null,"className":"","backgroundColor":""},{"id":"2","title":"Ajout NAS en ethernet","start":"2016-08-28 00:00:00","end":null,"className":"","backgroundColor":""},{"id":"3","title":"Ajout CatIQ non pilot\u00e9","start":"2016-08-23 00:00:00","end":null,"className":"","backgroundColor":""},{"id":"7","title":"VM Phantomas","start":"2016-09-13 00:00:00","end":null,"className":"[red]","backgroundColor":""},{"id":"9","title":"FTP v2","start":"2016-09-01 00:00:00","end":null,"className":"","backgroundColor":""},{"id":"10","title":"VM DECT01","start":"2016-08-01 00:00:00","end":"2016-08-31 00:00:00","className":"","backgroundColor":""},{"id":"11","title":"VM stb01 et stbpi01","start":"2016-08-01 00:00:00","end":null,"className":"","backgroundColor":""},{"id":"12","title":"Monitoring LB et STB","start":"2016-08-26 00:00:00","end":null,"className":"","backgroundColor":"green"},{"id":"13","title":"D\u00e9ploiement du P2P","start":"2016-11-25 00:00:00","end":"2016-11-26 00:00:00","className":"","backgroundColor":"green"},{"id":"16","title":"Freeze LB3","start":"2017-01-04 21:00:00","end":"2017-01-05 00:00:00","className":"","backgroundColor":"red"},{"id":"17","title":"Freeze LB3","start":"2016-12-31 00:00:00","end":"2017-01-01 00:00:00","className":"","backgroundColor":"red"},{"id":"18","title":"Arr\u00eat du P2P pour voir si le pb vient de la.","start":"2017-01-05 00:00:00","end":"2017-01-06 00:00:00","className":"","backgroundColor":""},{"id":"19","title":"D\u00e9ploiement Navigation sur Mobile","start":"2017-01-18 00:00:00","end":"2017-01-19 00:00:00","className":"","backgroundColor":"green"},{"id":"20","title":"D\u00e9sactivation de Figaro","start":"2017-01-10 00:00:00","end":"2017-01-11 00:00:00","className":"","backgroundColor":""},{"id":"21","title":"Freeze STB Play","start":"2017-01-12 00:00:00","end":"2017-01-13 00:00:00","className":"","backgroundColor":"red"},{"id":"22","title":"Freeze STB Play 2","start":"2017-01-12 00:00:00","end":"2017-01-13 00:00:00","className":"","backgroundColor":"red"},{"id":"23","title":"D\u00e9ploiement correctif TV (mise en veille)","start":"2017-01-12 00:00:00","end":"2017-01-13 00:00:00","className":"","backgroundColor":"green"},{"id":"24","title":"G5R3 Sprint 4","start":"2016-10-25 00:00:00","end":"2017-03-01 12:00:00","className":"","backgroundColor":""},{"id":"25","title":"Reboot de la Livebox 3 : kernel panic","start":"2017-01-22 00:00:00","end":"2017-01-23 00:00:00","className":"","backgroundColor":"red"},{"id":"26","title":"Reboot de la Livebox: Kernel panic - not syncing: Fatal exception","start":"2017-01-24 18:00:00","end":"2017-01-25 00:00:00","className":"","backgroundColor":"red"},{"id":"27","title":"D\u00e9ploiement Mail Mobile","start":"2017-01-24 00:00:00","end":"2017-01-25 00:00:00","className":"","backgroundColor":"green"},{"id":"29","title":"STB Polaris 2.0 lot 3","start":"2017-01-30 00:00:00","end":"2017-01-31 00:00:00","className":"","backgroundColor":""},{"id":"30","title":"Perte voip vers 19h","start":"2017-01-31 00:00:00","end":"2017-02-01 00:00:00","className":"","backgroundColor":"red"},{"id":"31","title":"reboot auto: kernel panic: QC 1772","start":"2017-02-02 22:55:00","end":"2017-02-03 00:00:00","className":"","backgroundColor":"red"},{"id":"32","title":"Reboot auto: kernel panic","start":"2017-02-06 00:00:00","end":"2017-02-07 00:00:00","className":"","backgroundColor":"red"},{"id":"33","title":"Freeze de la Livebox","start":"2017-02-10 00:00:00","end":"2017-02-11 00:00:00","className":"","backgroundColor":"red"},{"id":"34","title":"D\u00e9ploiement Macbook Air Nav Web Selenium","start":"2017-02-15 12:00:00","end":null,"className":"","backgroundColor":"green"},{"id":"36","title":"Reboot auto: kernel panic","start":"2017-02-14 20:10:11","end":null,"className":"","backgroundColor":"red"},{"id":"37","title":"Freeze LB3","start":"2017-02-15 02:54:00","end":"2017-02-15 13:53:27","className":"","backgroundColor":"red"},{"id":"38","title":"canal 2.4GHz fix\u00e9 \u00e0 11","start":"2017-02-21 00:00:00","end":"2017-02-22 00:00:00","className":"","backgroundColor":"orange"},{"id":"39","title":"crash voip et reboot auto: QC 1763","start":"2017-02-22 00:00:00","end":"2017-02-23 00:00:00","className":"","backgroundColor":"red"},{"id":"40","title":"ajout ipv6.google.com","start":"2017-02-21 00:00:00","end":"2017-02-22 00:00:00","className":"","backgroundColor":"green"},{"id":"41","title":"connexion\/deco wifi sur Mac","start":"2017-02-22 00:00:00","end":"2017-02-23 00:00:00","className":"","backgroundColor":"green"},{"id":"42","title":"Reboot auto : kernel panic - not syncing: softlockup","start":"2017-02-25 00:00:00","end":"2017-02-26 00:00:00","className":"","backgroundColor":"red"},{"id":"43","title":"Reboot auto : kernel panic - not syncing: softlockup","start":"2017-02-26 00:00:00","end":"2017-02-27 00:00:00","className":"","backgroundColor":"red"},{"id":"44","title":"G6R0 Sprint 5","start":"2017-03-01 12:01:00","end":"2017-05-02 15:00:00","className":"","backgroundColor":""},{"id":"45","title":"Probl\u00e8me suite \u00e0 migration - QC413","start":"2017-03-01 12:02:00","end":"2017-03-01 14:00:00","className":"","backgroundColor":"red"},{"id":"46","title":"relance de la Livebox","start":"2017-03-30 00:00:00","end":"2017-03-31 00:00:00","className":"","backgroundColor":""},{"id":"47","title":"D\u00e9ploiement Sticktv","start":"2017-04-05 00:00:00","end":"2017-04-06 00:00:00","className":"","backgroundColor":"green"},{"id":"48","title":"reboot auto: kernel panic","start":"2017-04-03 00:00:00","end":"2017-04-04 00:00:00","className":"","backgroundColor":"red"},{"id":"49","title":"D\u00e9ploiement Cloud Web","start":"2017-04-12 00:00:00","end":"2017-04-13 00:00:00","className":"","backgroundColor":"green"},{"id":"50","title":"crash Livebox: reboot auto - pas de kernel panic...","start":"2017-04-14 00:00:00","end":"2017-04-15 00:00:00","className":"","backgroundColor":"red"},{"id":"51","title":"Reboot auto STB Play","start":"2017-04-20 00:00:00","end":"2017-04-21 00:00:00","className":"","backgroundColor":"red"},{"id":"52","title":"freeze STB Play","start":"2017-04-15 00:00:00","end":"2017-04-16 00:00:00","className":"","backgroundColor":"red"},{"id":"53","title":"G6R0 sprint6","start":"2017-05-02 17:00:00","end":"2017-08-31 09:00:00","className":"","backgroundColor":""},{"id":"54","title":"D\u00e9ploiement MOS","start":"2017-05-08 00:00:00","end":"2017-05-09 00:00:00","className":"","backgroundColor":"green"},{"id":"55","title":"Coupure de courant","start":"2017-05-08 00:00:00","end":"2017-05-09 00:00:00","className":"","backgroundColor":"orange"},{"id":"56","title":"Mise en place AudiTV","start":"2017-05-09 00:00:00","end":"2017-05-10 00:00:00","className":"","backgroundColor":"green"},{"id":"57","title":"Reboot auto apr\u00e8s 1.8j","start":"2017-05-11 00:00:00","end":"2017-05-12 00:00:00","className":"","backgroundColor":"red"},{"id":"58","title":"Reboot auto: kernel panic","start":"2017-05-27 00:00:00","end":"2017-05-28 00:00:00","className":"","backgroundColor":"red"},{"id":"59","title":"D\u00e9ploiement TV Multi univers","start":"2017-05-30 00:00:00","end":"2017-05-31 00:00:00","className":"","backgroundColor":"green"},{"id":"60","title":"Crash LB3 au bout de 18h","start":"2017-05-31 00:00:00","end":"2017-06-01 00:00:00","className":"","backgroundColor":"red"},{"id":"61","title":"Freeze STB Play","start":"2017-06-07 00:00:00","end":"2017-06-08 00:00:00","className":"","backgroundColor":"red"},{"id":"62","title":"D\u00e9m\u00e9nagement du banc en FA041","start":"2017-07-11 00:00:00","end":"2017-07-12 00:00:00","className":"","backgroundColor":"green"},{"id":"63","title":"BME crash: QC653","start":"2017-07-20 00:00:00","end":"2017-07-21 00:00:00","className":"","backgroundColor":"red"},{"id":"64","title":"BME crash: QC653","start":"2017-07-11 00:00:00","end":"2017-07-12 00:00:00","className":"","backgroundColor":"red"},{"id":"65","title":"BME crash: QC653","start":"2017-07-22 00:00:00","end":"2017-07-23 00:00:00","className":"","backgroundColor":"red"},{"id":"66","title":"D\u00e9ploiement iPhone 6S","start":"2017-07-21 00:00:00","end":"2017-07-22 00:00:00","className":"","backgroundColor":"green"},{"id":"67","title":"D\u00e9ploiement Youtube sur iPad","start":"2017-08-01 00:00:00","end":"2017-08-02 00:00:00","className":"","backgroundColor":"green"},{"id":"68","title":"Crash - QC758","start":"2017-07-30 00:00:00","end":"2017-07-31 00:00:00","className":"","backgroundColor":"red"},{"id":"69","title":"Reboot auto stb play","start":"2017-07-29 00:00:00","end":"2017-07-30 00:00:00","className":"","backgroundColor":"red"},{"id":"70","title":"G6R0 patch\u00e9 (6.4.19)","start":"2017-08-31 10:00:00","end":"2017-10-01 00:00:00","className":"","backgroundColor":""},{"id":"71","title":"Coupure \u00e9lectrique","start":"2017-09-06 00:00:00","end":"2017-09-07 00:00:00","className":"","backgroundColor":"red"},{"id":"72","title":"BME crash","start":"2017-09-07 00:00:00","end":"2017-09-08 00:00:00","className":"","backgroundColor":"red"}],
            selectable: true,
            selectHelper: true,
            select: function(start, end, allDay) {
                var title = prompt('Titre de l evenements:');
                if (title) {
                    var start = moment(start, 'DD.MM.YYYY').format('YYYY-MM-DD');
                    var end = moment(end, 'DD.MM.YYYY').format('YYYY-MM-DD');
                    $.ajax({
                        url: 'https://results.laboms.lbtesting.fr/add_events.php?livebox=lb3',
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
    <div id='calendar'></div>
</div>