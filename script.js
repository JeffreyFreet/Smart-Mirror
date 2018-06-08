var interval = 1000;
function liveClock() {
    $.ajax({
        url: 'getTime.php',
        success: function(data) {
            $('#time').html(data);
        },
        complete: function(data) {
            setTimeout(liveClock, interval);    
        }
    });
}
setTimeout(liveClock, interval);

$.ajax({
    url: 'getWeather.php',
    success: function(data){
        $('#weather').html(data);
    }
});