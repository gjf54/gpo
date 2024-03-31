var en = $('#en');
var he = $('#he');

en.on('click', function () {
    en.attr('active', "");
    he.removeAttr('active');

    $('#he-text').hide();
    $('#en-text').show();
});

he.on('click', function () {
    he.attr('active', "");
    en.removeAttr('active');

    $('#en-text').hide();
    $('#he-text').show();
});
