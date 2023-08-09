$(document).ready(function() {
    $(".tabs-blog a").click(function() {
        $(".tabs-blog a").removeClass('active');
        $(this).addClass('active');
        $('.tab-content').hide();
        var ids = $(this).attr('href');
        $(ids).show();
    });
    $('#responsiveTabsDemo').responsiveTabs({
        startCollapsed: 'accordion'
    });

});