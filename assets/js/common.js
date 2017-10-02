(function($) {
    // Header Gnb Menu
    $(document).on('mouseenter focusin', '#header #gnb > ul > li > a', function() {
        $('body').addClass('nav-expanded');
    });
    $(document).on('mouseleave', '#header', function() {
        $('body').removeClass('nav-expanded');
    });
    
    
    // 검색    
//    $(document).on('click', '.global-search .search-link', function(e) {
//        $('.global-search').addClass('on');
//        e.preventDefault();
//    });
//    $(document).on('click', '.global-search .btn-search', function() {
//        $('.global-search').removeClass('on');
//    });
})(jQuery);