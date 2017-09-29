<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="/assets/bootstrap/js/bootstrap.min.js"></script>
<script>
    (function($) {
        $(document).on('mouseenter focusin', '#header #gnb', function() {
            $('body').addClass('nav-expanded');
        });
        $(document).on('mouseleave', '#header', function() {
            $('body').removeClass('nav-expanded');
        });

        /*$(document).on('mouseenter focus', '#header #gnb > ul > li > a', function(e) {
            if ($(this).parent().hasClass('active')) {
                $(this).parent().removeClass('active');
            } else {
                $(this).parent().siblings('.active').removeClass('active');
                $(this).parent().addClass('active');
            }
            e.preventDefault();
        });
        $(document).on('mouseleave', '#header #gnb > ul > li', function(e) {
            $(this).removeClass('active');
        });*/
    })(jQuery);
</script>