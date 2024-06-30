$(document).ready(function () {

    $('.soundBtn').click( function() {
        let btnID = $(this).attr('id');
        let critterName = btnID.split('SoundBtn')[0];
        let audioName = '#' + critterName + 'Sound';

        var audioElement = $(audioName)[0];

        if (audioElement) {
            audioElement.play()
        }
        
    });

});