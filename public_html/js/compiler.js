$('.modal').on('shown.bs.modal', function(e) {
    var url = '/jsemu.php?game=' + e.relatedTarget.dataset.game;
    var title = e.relatedTarget.dataset.title;
    if (e.relatedTarget.dataset.game == 'estar_guars') {
        url = '/EstarGuars/index.html';
    }
    var $target = $(this);
    $target.find('iframe').attr('src', url);
    $target.find('#js-emulator-title').html(title);
}).on('hidden.bs.modal', function() {
    $(this).find('iframe').attr('src', '');
});
