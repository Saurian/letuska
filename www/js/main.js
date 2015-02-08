$(function(){

    // microsoft bing



    function bing ()
    {
        var from = "en", to = "es", text = "hello world";

        var s = document.createElement("script");
        s.src = "http://api.microsofttranslator.com/V2/Ajax.svc/Translate" +
        "?appId=Bearer " + encodeURIComponent(window.accessToken) +
        "&from=" + encodeURIComponent(from) +
        "&to=" + encodeURIComponent(to) +
        "&text=" + encodeURIComponent(text) +
        "&oncomplete=mycallback";
        document.body.appendChild(s);
    }

    function mycallback(response)
    {
        alert(response);
    }

    beforeCallback = function() {
        alert("Asd");
    };

    updateSnippet = function ($el, html, back) {
        alert($el);
        if (html === 'remove') {
            return $el.remove();
        }
    };


    $.nette.ext('snippets').applySnippet = function ($el, html) {
        $el.fadeTo("fast", 0.01, function () {
            $el.html(html).fadeTo("fast", 1);
        });

    };

    $.nette.ext('snippets').complete(function ($el) {
        $.nette.load();
    });




    $.nette.ext('spinner', {
        init: function () {

            spinner = $('<div></div>', { id: "ajax-spinner" });
            spinner.appendTo("body");
            $('.progress').hide();
        },
        before: function (settings, ui, e) {
            $('.progress').show();

            $("#ajax-spinner").css({
                visibility: "visible",
                left: e.pageX,
                top: e.pageY
            });
        },
        complete: function () {
            $('.progress').hide();
            $("#ajax-spinner").css({
                visibility: "hidden"
            });
        }
    });


    //$.nette.beforeQueue.add(beforeCallback());

    /*
        $.nette.ext('snippetA', {
            updateSnippet: function ($el, html, back) {
                if (html === 'remove') {
                    return $el.remove();
                }
            }
        });
    */

    $.nette.init();



});
