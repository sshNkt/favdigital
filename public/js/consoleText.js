$(document).ready(function() {
    "use strict";

    //CONSOLE TEXT
    consoleText(
        ["/*Hello World.*/", "/*Digital Agency*/", "/*Favdigital*/"],
        "text",
        ["#282828"]
    );

    function consoleText(words, id, colors) {
        if (colors === undefined) colors = ["#fff"];
        var visible = true;
        var con = document.getElementById("console");
        var letterCount = 1;
        var x = 1;
        var waiting = false;
        var target = document.getElementById(id);
        target.setAttribute("style", "color:" + colors[0]);
        window.setInterval(function() {
            if (letterCount === 0 && waiting === false) {
                waiting = true;
                target.innerHTML = words[0].substring(0, letterCount);
                window.setTimeout(function() {
                    var usedColor = colors.shift();
                    colors.push(usedColor);
                    var usedWord = words.shift();
                    words.push(usedWord);
                    x = 1;
                    target.setAttribute("style", "color:" + colors[0]);
                    letterCount += x;
                    waiting = false;
                }, 1000);
            } else if (
                letterCount === words[0].length + 1 &&
                waiting === false
            ) {
                waiting = true;
                window.setTimeout(function() {
                    x = -1;
                    letterCount += x;
                    waiting = false;
                }, 1000);
            } else if (waiting === false) {
                target.innerHTML = words[0].substring(0, letterCount);
                letterCount += x;
            }
        }, 120);
        window.setInterval(function() {
            if (visible === true) {
                con.className = "console-underscore hidden";
                visible = false;
            } else {
                con.className = "console-underscore";

                visible = true;
            }
        }, 400);
    }
    //lets work pop up
    var modal = document.getElementById("workForm");

    // Get the button that opens the modal
    var btn = document.getElementById("letsWork");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    };

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    };

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };
    window.onblur = function() {
        document.title = "Come back :)";
    };

    window.onfocus = function() {
        document.title = "Favdigital";
    };
});
