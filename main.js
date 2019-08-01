


var app = new Vue({
    el: '#app',
    data: {
        card_arrs: [[], [], [], [], [], [], [], []],
        color_arr: ['spade', 'heart', 'diamond', 'club'],
        temp_card_arrs: [[], [], [], []],
        finish_num: {spade: 0, heart: 0, diamond: 0, club: 0},
        last_move_id: 0,
        selectedObjs: [],
        countTime: '00:00',
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
            var range = this.now - this.start_time;
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
            console.log('0:deal');
            for (var i = 0; i < 52; i++) {
                var ran_num = this.getRandomNum(8);
                this.card_arrs[ran_num].push({
                    num: i,
                    color: this.color_arr[i % 4],
                    url: 'image/card/' + this.color_arr[i % 4] + '_' + (i % 13 + 1) + '@2x.png',
                    draggable: false,
                    arr_id: ran_num,
                    position: 0,
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
        checkDraggable: function () {
            console.log("1.checkDraggable");
            this.card_arrs.forEach(function (val, index) {
                val[val.length - 1].draggable = true;
            });
            this.setDrag();

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
                $this.css('z-index', 5001);
            })
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
                accept: function (draggable) {
                    if (this.classList.contains('card-place')) {
                        var temp_id = $(this).attr("id").slice(0, 1);
                        return app.temp_card_arrs[temp_id].length===0;
                    } else if (['spade', 'club'].includes($(draggable).data('color'))) {
                        return $(draggable).data('number') === $(this).data('number') - 1 && ['heart', 'diamond'].includes($(this).data('color'));
                    } else {
                        return $(draggable).data('number') === $(this).data('number') - 1 && ['spade', 'club'].includes($(this).data('color'));
                    }

                },
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




                        //todo function not defined問題
                        // if(item.draggable.data('arr_id').startsWith('t')){
                        //     //刪除暫存的
                        //     var arr_id= item.draggable.data('arr_id').slice(1);
                        //
                        //     app.temp_card_arrs[arr_id]=[];
                        //     item.draggable.remove();
                        //     app.checkDraggable();
                        //
                        // }else{
                        //刪除原本的

                        app.card_arrs[item.draggable.data('arr_id')].splice(item.draggable.data('position'), 1);
                        item.draggable.remove();
                        app.checkDraggable();

                        // }



                    } else {
                        //放到暫存區or終點區

                        console.log("4.setDrop放到暫存區");
                        var temp_id = $(this).attr("id").slice(0, 1);
                        app.temp_card_arrs[temp_id].push({
                            num: item_id,
                            color: app.color_arr[item_id % 4],
                            url: 'image/card/' + app.color_arr[item_id % 4] + '_' + (item_id % 13 + 1) + '@2x.png',
                            draggable: true,
                            arr_id: 't'+temp_id,
                            position: 0
                        });

                        //刪除原本的
                        app.card_arrs[item.draggable.data('arr_id')].splice(item.draggable.data('position'), 1);
                        item.draggable.remove();
                        app.checkDraggable();
                    }


                }
            });
        },
        setFinDrop: function () {
            console.log("5.setFinDrop");
            $('.fin_droppable').droppable({
                accept: function (draggable) {
                    var drop_place_id = this.id;
                    return $(draggable).data('color') === drop_place_id && $(draggable).data('number') === app.finish_num[drop_place_id] + 1;
                },
                activeClass: "ui-state-hover",
                hoverClass: "ui-state-active",
                drop: function (event, item) {
                    //console.log(item.draggable.data("uiDraggable").originalPosition);

                    var item_id = Number(item.draggable.attr("id"));


                    //放到終點區

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
                    console.log("4.setDrop放到終點區");

                    app.card_arrs[item.draggable.data('arr_id')].splice(item.draggable.data('position'), 1);
                    var fin_id = $(this).attr("id");
                    app.finish_num[fin_id]++;

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
    app.setFinDrop();

});
