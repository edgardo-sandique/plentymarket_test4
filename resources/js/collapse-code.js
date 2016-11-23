(function($){
    $(document).ready(function(){
        $(".toggle-code-example").each(function(idx, el){
            var button = $(this);
            var pre = button.parent().find("pre");
            var height = pre.height() + 18; // top and bottom padding is 8 px each and top and bottom border is 1 px each
            var minHeight = 300;
            var buttonOffset = 0;

            if (height < minHeight) {
                button.hide();
                return;
            }

            pre.toggleClass("example-code-expand");
            pre.css('height', minHeight);
            pre.css('overflow', "hidden");

            buttonOffset = button.offset().top;

            $(el).on("click", function(){

                pre.toggleClass("example-code-expand");

                if (pre.hasClass("example-code-expand")) {
                    button.html("Expand");
                    pre.css('height', minHeight);
                    pre.css('overflow', "hidden");
                    $('html, body').animate({
                        scrollTop: buttonOffset - 500 // scroll to code example title
                    }, 500);
                }
                else {
                    button.html("Collapse");
                    pre.css('height', height);
                    pre.css('overflow', "auto");
                }
            });
        });
    });
})(jQuery);