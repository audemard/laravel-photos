$(document).ready(function() {
    // RECHERCHE
    $("#searchdiv").hide();

    $('#search').click(function() {
        $("#searchdiv").slideToggle();
    });

    $("#searchform").submit(function(e) {
        e.preventDefault();
        window.location.href="/search/"+e.target.elements[0].value;
    })

    // MODIF OVERVIEW
    $("#overviewform button").hide();


    $("#overview").on('input', function(e) {
        $("#overviewform button").fadeIn();
    });

    $("#overviewform").submit(function(e) {
        e.target.elements['overview'].value = $("#overview").html();
    });


    $("#overview").keydown(function(e) {
        // trap the return key being pressed
        if (e.keyCode === 13) {
            // insert 2 br tags (if only one br tag is inserted the cursor won't go to the next line)
            document.execCommand('insertHTML', false, '<br><br>');
            // prevent the default behaviour of return key pressed
            return false;
        }
    });
})


