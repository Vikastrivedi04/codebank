$(function() {

    $(".draggable").draggable();
    $(".droppable").droppable({
        drop: function(event, ui) {
            $(this)
                .addClass("bg")
                //   .find( "p" )
                .html("Dropped!");
        }
    });
    var availableTags = [
        "ActionScript",
        "AppleScript",
        "Asp",
        "BASIC",
        "C",
        "C++",
        "Clojure",
        "COBOL",
        "ColdFusion",
        "Erlang",
        "Fortran",
        "Groovy",
        "Haskell",
        "Java",
        "JavaScript",
        "Lisp",
        "Perl",
        "PHP",
        "Python",
        "Ruby",
        "Scala",
        "Scheme"
    ];
    $("#tags").autocomplete({
        source: availableTags
    });
    $("#resizable").resizable();
    $("#selectable").selectable();
    $(".widget input[type=submit], .widget a, .widget button").button();
    $("button, input, a").on("click", function(event) {
        event.preventDefault();
    });
    $("#slider").slider();

    $("#datepicker").datepicker();
});