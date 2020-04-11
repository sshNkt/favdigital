$(document).ready(function() {
    $.fn.minimalForm = function(options) {
        var defaults = {
            fadeSpeed: 1000
        };

        options = $.extend(defaults, options);

        return this.each(function() {
            //THE SETUP

            //grab the el
            var el = $(this);

            //add the plugin class
            el.addClass("minimal");

            //grab the inputs
            var inputs = el.find("input");

            //grab the submit button
            var button = el.find("button");

            //grab the success message
            var success = el.find(".alert-success");

            //grab the error message
            var error = el.find(".alert-warning");

            var emptyForm = el.find(".empty-form");
            //hide the submit button
            button.hide();

            //hide all inputs bar the first
            inputs.hide();
            inputs.eq(0).show();

            //add the progress bar
            var progress = $("<div class='progress'></div>");
            var progressBar = $("<div class='progress-bar'></div>");
            progress.append(progressBar);
            el.append(progress);

            //THE EVENTS

            //on key up
            inputs.on("keydown", function(e) {
                var key = e.keyCode || e.which;
                //console.log(key);
                switch (key) {
                    //the enter key and tab key and forward key
                    case 13:
                    case 9:
                    case 39:
                        e.preventDefault();
                        showNext(this);
                        break;
                    //the back key
                    case 37:
                        showPrev(this);
                        break;
                }
            });

            //show the next input
            function showNext(input) {
                input = $(input);
                let inputValue = input[0].value;
                if (inputValue == "") {
                    emptyForm.fadeIn(options.fadeSpeed);
                } else {
                    var emptyFormAlert = $(".empty-form").css(
                        "display",
                        "block"
                    );
                    if (emptyFormAlert) {
                        $(".empty-form").css("display", "none");
                    }
                    var next = input.next("input");
                    if (next.length) {
                        input.fadeOut(options.fadeSpeed, function() {
                            next.fadeIn(options.fadeSpeed).focus();
                        });
                    } else {
                        input.fadeOut(options.fadeSpeed, function() {
                            var data = el.serialize();
                            var action =
                                el.attr("action") || window.location.href;
                            $.ajax({
                                type: "post",
                                data: data,
                                url: action,
                                error: function(a, b, c) {
                                    console.log(a, b, c);
                                    error.fadeIn(options.fadeSpeed);
                                },
                                success: function() {
                                    success.fadeIn(options.fadeSpeed);
                                }
                            });
                        });
                    }
                    updateProgress(input.index("input"));
                }
            }

            //show the prev input
            function showPrev(input) {
                input = $(input);
                var prev = input.prev("input");
                if (prev.length) {
                    input.fadeOut(options.fadeSpeed, function() {
                        prev.fadeIn(options.fadeSpeed).focus();
                    });
                    updateProgress(prev.index("input") - 1);
                }
            }

            //update the progress
            function updateProgress(no) {
                var percent = ((no + 1) / inputs.length) * 100;

                progressBar.css("width", percent + "%");
            }
        });
    };
    //init the plugin
    $("#minimal").minimalForm({
        fadeSpeed: 500
    });
});
