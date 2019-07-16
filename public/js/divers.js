$(document).ready(function() {
    $("#searchdiv").hide();

    $('#search').click(function() {
        $("#searchdiv").slideToggle();
    });

    $("#searchform").submit(function(e) {
        e.preventDefault();
        window.location.href="/search/"+e.target.elements[0].value;
    })
})