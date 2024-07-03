$(document).ready(function () {

    $('.soundBtn').click(function () {
        var audioElement = $('audio')[0];

        if (audioElement) {
            audioElement.play()
        }
        
    });

});