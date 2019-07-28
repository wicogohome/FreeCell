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

        .ui-draggable-dragging {
            z-index: 5000;
        }

    </style>
</head>

<body>
<div class="container-fluid" id="app">
    <div class="row">
        <div class="col-11">
            <div class="row justify-content-center mt-4" id="droppable-place">
                <div class="col offset-1">
                    <div class="row  justify-content-center" id="temporarily">
                        <div id="0temp_drop" class="card-place droppable">
                        </div>
                        <div id="1temp_drop" class="card-place droppable">
                        </div>
                        <div id="2temp_drop" class="card-place droppable">
                        </div>
                        <div id="3temp_drop" class="card-place droppable">
                        </div>
                    </div>

                </div>
                <div class="col">
                    <div class="row">
                        <div class="card-place droppable"
                             v-for="(color,key) in color_arr"
                             :id="key+'fin_drop'"
                             :style="{background:'url(image/img_watermark_' + color + '.png)no-repeat center center' }"
                        >

                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4 row justify-content-center">
                <div class="cell" v-for="card_arr in card_arrs"
                     v-bind:key="card_arr.id">
                    <div class="card" v-for="(card,key) in card_arr"
                         :id="card.num"
                         :ref="card.num"
                         v-bind:style="{ top: key*30+'px',background:'url('+card.url+')no-repeat center center',backgroundSize:'100px 152px'}"
                         :draggable="card.draggable"
                         :data-arr_id="card.arr_id"
                         :data-position="card.position"
                    ></div>
                </div>
            </div>
        </div>
        <div class="col-1">
            <div class="text-right pr-3">TIME: {{countTime}}</div>
            <div class="text-right fixed-bottom">
                <div class="pr-3">HINT</div>
                <div class="pr-3">UNDO</div>
                <div class="pr-3">RESTART GAME</div>
                <div class="pr-3">NEW GAME</div>
            </div>
        </div>

    </div>

</div>


</body>

<script src="https://cdn.jsdelivr.net/npm/vue"></script>
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

    var app = new Vue({
        el: '#app',
        data: {
            card_arrs: [[], [], [], [], [], [], [], []],

            color_arr: ['spade', 'heart', 'diamond', 'club'],
            temp_card_arrs: [0, 0, 0, 0],
            finish_num: {spade: 0, heart: 0, diamond: 0, club: 0},
            last_move_id: 0,
            selectedObjs: [],
            countTime:'00:00',
            start_time: new Date(),
        },
        mounted() {
            this.deal();
            this.countDownTime();
        }
        ,
        methods: {
            //計時細節
            countDownTime: function () {

                this.now = new Date();
                var range = this.now-this.start_time;
                console.log(range);
                var sec = range % (60 * 1000);
                if (sec.toString().length > 3) {
                    sec = sec.toString().length > 4 ? sec.toString().substr(0, 2) : sec.toString().substr(0, 1);
                    sec = '0' + sec;
                } else {
                    sec = '00';
                }
                var min = '0' + Math.floor(range / (60 * 1000));
                this.countTime = min.substr(-2) + ':' + sec.substr(-2);

                //迴圈跑起來

                    this.t = setTimeout(() => {
                        this.countDownTime();
                    }, 10);



            },
            deal: function () {
                for (var i = 0; i < 52; i++) {
                    var ran_num = this.getRandomNum(8);
                    this.card_arrs[ran_num].push({
                        num: i,
                        color: this.color_arr[i % 4],
                        url: 'image/card/' + this.color_arr[i % 4] + '_' + (i % 13 + 1) + '@2x.png',
                        draggable: false,
                        arr_id: ran_num,
                        position: 0
                    });
                }
                for (var j = 0; j < this.card_arrs.length; j++) {
                    this.shuffle(this.card_arrs[j]);
                    this.card_arrs[j].forEach(function (val, ind) {
                        val.position = ind;
                    });
                }
            },
            getRandomNum: function (num) {
                return Math.floor(Math.random() * num);
            },
            shuffle: function (array) {
                for (let i = array.length - 1; i > 0; i--) {
                    let j = Math.floor(Math.random() * (i + 1));
                    [array[i], array[j]] = [array[j], array[i]];
                }
                return array;
            },
            setDrag: function () {
                console.log("2.setDrag");
                var cards = $(".card");
                cards.draggable({
                        disabled: true,
                        snap: '.card-place',
                        scroll: false,
                        revert: "invalid",
                        start: function (event, ui) {

                            var others_id = ui.helper.data('position') + 1;
                            var others_arr_id = ui.helper.data('arr_id');
                            app.selectedObjs = $('.card[data-position=' + others_id + '][data-arr_id=' + others_arr_id + ']');

                            console.log(app.endOfCardArr);
                        },
                        drag: function (event, ui) {
                            var currentLoc = $(this).position();
                            var orig = ui.originalPosition;
                            var offsetLeft = currentLoc.left;
                            var offsetTop = currentLoc.top;

                            app.moveSelected(offsetLeft, offsetTop);
                        },
                        stop: function () {
                            app.last_move_id = $(this).attr('id');

                        }
                    }
                );

                cards.each(function (val, ind) {
                    $(this).attr("draggable") === 'true' ? $(this).draggable("option", "disabled", false) : null;
                });
                console.log("2-5.setDrag-true");
            },
            moveSelected: function (ol, ot) {
                app.selectedObjs.each(function () {
                    $this = $(this);
                    $this.css('left', ol);
                    $this.css('top', 30 + ot);

                })
            },
            checkDraggable: function () {
                console.log("1.checkDraggable");
                this.card_arrs.forEach(function (val, index) {
                    val[val.length - 1].draggable = true;
                });
                this.setDrag();

            },
            checkDroppable: function () {
                console.log("3.checkDroppable");
                this.endOfCardArr.forEach(function (val, index) {
                    app.$refs[val.num][0].className += ' droppable';
                });
            },
            setDrop: function () {
                this.checkDroppable();
                console.log("4.setDrop");
                $(".droppable").droppable({
                    accept: ".card",
                    activeClass: "ui-state-hover",
                    hoverClass: "ui-state-active",
                    drop: function (event, item) {
                        //console.log(item.draggable.data("uiDraggable").originalPosition);

                        var item_id = Number(item.draggable.attr("id"));

                        if (event.target.classList.contains('card')) {
                            //放到卡片上

                            app.card_arrs[event.target.dataset.arr_id].push({
                                num: item_id,
                                color: app.color_arr[item_id % 4],
                                url: 'image/card/' + app.color_arr[item_id % 4] + '_' + (item_id % 13 + 1) + '@2x.png',
                                draggable: true,
                                arr_id: event.target.dataset.arr_id,
                                position: app.card_arrs[event.target.dataset.arr_id].length
                            });

                            //刪除原本的

                            app.card_arrs[item.draggable.data('arr_id')].splice(item.draggable.data('position'), 1);

                            item.draggable.remove();
                            app.checkDraggable();

                        } else {
                            //放到暫存區or終點區

                            //複製到牌組
                            item.draggable.css({
                                top: 0,
                                left: 0,
                                right: 0,
                                bottom: 0,
                                inset: "auto"
                            });
                            item.draggable.clone().appendTo($(this));
                            item.draggable.remove();
                            //刪除原本的
                            console.log("4.setDrop放到暫存區or終點區");

                            app.card_arrs[item.draggable.data('arr_id')].splice(item.draggable.data('position'), 1);
                            var temp_id = $(this).attr("id").slice(0, 1);
                            app.temp_card_arrs[temp_id] = item_id;
                        }


                    }
                });
            }

        },
        computed: {
            endOfCardArr: function () {
                console.log('computed:endOfCardArr');
                var result = [];
                this.card_arrs.forEach(function (val, ind) {
                    result.push(val[val.length - 1]);
                });
                return result;
            }
        },
        watch: {
            endOfCardArr: function () {
                console.log('watch:endOfCardArr');
                //把endOfCardArr的draggable = true
                this.endOfCardArr.forEach(function (val, ind) {

                    return app.card_arrs[val.arr_id][val.position].draggable = true;
                });

                this.checkDroppable();
            }, card_arrs: function (before, after) {
                console.log('card_arrs');
                //todo 無法連續移動同一列的牌
                $('.card').draggable();
                $('.card').each(function (val, ind) {
                    $(this).attr("draggable") === 'true' ? $(this).draggable("option", "disabled", false) : null;
                });
                this.setDrop();
            },


        }
    });

    Vue.nextTick(function () {
        app.checkDraggable();
        app.setDrag();
        app.setDrop();

    });


</script>

</html>