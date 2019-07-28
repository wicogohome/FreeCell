<html>
<head>

    <title>FreeCell</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=DM+Serif+Text&display=swap"
          rel="stylesheet">
    <style>
        body {
            background-color: #dbd3ca;
            font-family: 'DM Serif Text', serif;

        }

        .card-place {
            width: 100px;
            height: 150px;
            border-radius: 5px;
            border: solid 1px rgba(77, 77, 77, 0.2);
            margin: 0 8px;
        }

        .cell {
            width: 99px;
            height: 150px;
            border-radius: 5px;
            border: solid 1px rgba(77, 77, 77, 0.2);
            margin: 0 8px;
            position: relative;
            box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.3);
        }

        .card {
            position: absolute;
            box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.3);
            background-color: transparent;
            width: 100px;
            height: 150px;
            /*transition: all 0.3s ease 0s;*/
        }

    </style>
</head>

<body>
<div id="app" class="container-fluid"><div class="row"><div class="col-11"><div id="droppable-place" class="row justify-content-center mt-4"><div class="col offset-1"><div id="temporarily" class="row  justify-content-center"><div data-role="drag-drop-container" class="card-place"></div> <div data-role="drag-drop-container" class="card-place"></div> <div data-role="drag-drop-container" class="card-place"></div> <div data-role="drag-drop-container" class="card-place"></div></div></div> <div class="col"><div class="row"><div data-role="drag-drop-container" class="card-place" style="background: rgba(0, 0, 0, 0) url(&quot;image/img_watermark_spade.png&quot;) no-repeat scroll center center;"></div><div data-role="drag-drop-container" class="card-place" style="background: rgba(0, 0, 0, 0) url(&quot;image/img_watermark_heart.png&quot;) no-repeat scroll center center;"></div><div data-role="drag-drop-container" class="card-place" style="background: rgba(0, 0, 0, 0) url(&quot;image/img_watermark_diamond.png&quot;) no-repeat scroll center center;"></div><div data-role="drag-drop-container" class="card-place" style="background: rgba(0, 0, 0, 0) url(&quot;image/img_watermark_club.png&quot;) no-repeat scroll center center;"></div></div></div></div> <div class="mt-4 row justify-content-center"><div class="cell"><div id="28" draggable="false" class="card" style="top: -2px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/spade_3@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div><div id="29" draggable="false" class="card" style="top: 28px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/heart_4@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div><div id="16" draggable="false" class="card" style="top: 58px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/spade_4@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div><div id="26" draggable="false" class="card" style="top: 88px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/diamond_1@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div><div id="13" class="card" style="top: 118px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/heart_1@2x.png&quot;) no-repeat scroll center center / 100px 152px;" draggable="true"></div></div><div class="cell"><div id="18" draggable="false" class="card" style="top: -2px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/diamond_6@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div><div id="43" draggable="false" class="card" style="top: 28px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/club_5@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div><div id="36" draggable="false" class="card" style="top: 58px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/spade_11@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div><div id="32" draggable="false" class="card" style="top: 88px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/spade_7@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div><div id="21" draggable="true" class="card" style="top: 118px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/heart_9@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div></div><div class="cell"><div id="51" draggable="false" class="card" style="top: -2px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/club_13@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div><div id="46" draggable="false" class="card" style="top: 28px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/diamond_8@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div><div id="37" draggable="true" class="card" style="top: 58px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/heart_12@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div></div><div class="cell"><div id="3" draggable="false" class="card" style="top: -2px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/club_4@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div><div id="48" draggable="false" class="card" style="top: 28px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/spade_10@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div><div id="45" draggable="false" class="card" style="top: 58px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/heart_7@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div><div id="49" draggable="false" class="card" style="top: 88px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/heart_11@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div><div id="34" draggable="false" class="card" style="top: 118px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/diamond_9@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div><div id="35" draggable="false" class="card" style="top: 148px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/club_10@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div><div id="42" draggable="false" class="card" style="top: 178px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/diamond_4@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div><div id="2" draggable="false" class="card" style="top: 208px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/diamond_3@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div><div id="27" draggable="false" class="card" style="top: 238px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/club_2@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div><div id="14" draggable="false" class="card" style="top: 268px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/diamond_2@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div><div id="11" draggable="true" class="card" style="top: 298px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/club_12@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div></div><div class="cell"><div id="39" draggable="false" class="card" style="top: -2px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/club_1@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div><div id="23" draggable="false" class="card" style="top: 28px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/club_11@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div><div id="47" draggable="false" class="card" style="top: 58px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/club_9@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div><div id="24" draggable="false" class="card" style="top: 88px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/spade_12@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div><div id="38" draggable="false" class="card" style="top: 118px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/diamond_13@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div><div id="10" draggable="true" class="card" style="top: 148px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/diamond_11@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div></div><div class="cell"><div id="50" draggable="false" class="card" style="top: -2px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/diamond_12@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div><div id="19" draggable="false" class="card" style="top: 28px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/club_7@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div><div id="17" draggable="false" class="card" style="top: 58px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/heart_5@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div><div id="5" draggable="false" class="card" style="top: 88px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/heart_6@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div><div id="30" draggable="false" class="card" style="top: 118px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/diamond_5@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div><div id="33" draggable="false" class="card" style="top: 148px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/heart_8@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div><div id="40" draggable="true" class="card" style="top: 178px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/spade_2@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div></div><div class="cell"><div id="44" draggable="false" class="card" style="top: -2px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/spade_6@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div><div id="20" draggable="false" class="card" style="top: 28px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/spade_8@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div><div id="7" draggable="false" class="card" style="top: 58px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/club_8@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div><div id="31" draggable="false" class="card" style="top: 88px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/club_6@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div><div id="0" draggable="false" class="card" style="top: 118px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/spade_1@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div><div id="15" draggable="false" class="card" style="top: 148px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/club_3@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div><div id="6" draggable="true" class="card" style="top: 178px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/diamond_7@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div></div><div class="cell"><div id="12" draggable="false" class="card" style="top: -2px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/spade_13@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div><div id="9" draggable="false" class="card" style="top: 28px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/heart_10@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div><div id="8" draggable="false" class="card" style="top: 58px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/spade_9@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div><div id="4" draggable="false" class="card" style="top: 88px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/spade_5@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div><div id="25" draggable="false" class="card" style="top: 118px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/heart_13@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div><div id="41" draggable="false" class="card" style="top: 148px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/heart_3@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div><div id="22" draggable="false" class="card" style="top: 178px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/diamond_10@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div><div id="1" draggable="true" class="card" style="top: 208px; right: -2px; background: rgba(0, 0, 0, 0) url(&quot;image/card/heart_2@2x.png&quot;) no-repeat scroll center center / 100px 152px;"></div></div></div></div> <div class="col-1"><div class="text-right">TIME:<p id="time"></p></div> <div class="text-right fixed-bottom"><div>HINT</div> <div>UNDO</div> <div>RESTART GAME</div> <div>NEW GAME</div></div></div></div></div>

</body>

<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<!-- JQuery -->
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script
        src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
        integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
        crossorigin="anonymous"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>


<script>
    $('.card').draggable({ scroll: false,snap: ".ui-widget-header"  });
    </script>