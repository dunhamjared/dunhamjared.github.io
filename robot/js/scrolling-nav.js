
var robot = {
    emotion : {
        happy : function(){
            robot.action.reset();
            $('.robot').addClass('upper');
        },
        bored : function () {
            robot.action.reset();
            $('.robot').addClass('lower');
        },
        sad : function(){
            robot.action.reset();
            $('.robot').addClass('lower sad');
        },
        sad_very : function(){
            robot.action.reset();
            $('.robot').addClass('lower sad very');
        },
        mad : function(){
            robot.action.reset();
            $('.robot').addClass('lower mad');
        },
        mad_very : function () {
            robot.action.reset();
            $('.robot').addClass('lower mad very');
        }
    },
    action : {
        eyes_close : function(){
            $('.eyes').addClass('close');
        },
        eyes_open : function(){
            $('.eyes').removeClass('close');
        },
        blink : function(){
            if($('.eyes').hasClass('close')){
                console.error('Eyes must be open to blink.');
            } else {
                console.log('Blinking eyes.');
                robot.action.eyes_close();
                setTimeout(function(){robot.action.eyes_open()}, 100);
            }
        },
        sleep : function(){
            robot.emotion.bored();
            robot.action.eyes_close();
        },
        reset : function(){
            $('.robot').removeClass().addClass('robot');
            $('.eyes').removeClass('close');
        }
    }
};

(function loop() {
    var rand = Math.round(Math.random() * (10000 - 2000)) + 2000;
    setTimeout(function() {
        robot.action.blink();
        loop();
    }, rand);
}());

$(document).on('click','.robot-mod', function () {
    robot[$(this).attr('data-robot-mod')][$(this).attr('data-robot-value')]();
});