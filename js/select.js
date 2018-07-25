// configurer le HTML de la scrollbar
box.ui('scroll').configure({
    bar: '<a href="#" class="{$barCls}"><span class="start"></span><span class="end"></span></a>'
});

// configurer l'offset des scrollbar dans les faux select
box.ui('form').configure({
    fauxOptionsScrollbarOffset: 1
});

box.dom(function() {

    box.ui('form').create({
        element: '#mainRight'
    }).addReplacement();
    $('.fauxSelect').each(function(i, n) {

        var newWidth = $(n).parent().children('select').width();
        $(n).width(newWidth - 31);
    });

});