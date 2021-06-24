$(function () {

    $('input[name=total]').on('change', function () {
        let $this = $(this);
        let $label = $this.parent('label');

        if (!($label.hasClass('label-checked-durasi'))) {
            $('label').removeClass('label-checked-durasi');
            $('label').find('.radio-check-durasi').hide();
            $label.addClass('label-checked-durasi');
            $label.find('.radio-check-durasi').show();
        }

    });

});


$(function () {

    $('input[name=kabel]').on('change', function () {
        let $this = $(this);
        let $label = $this.parent('label');

        if (!($label.hasClass('label-checked'))) {
            $('label').removeClass('label-checked');
            $('label').find('.radio-check').hide();
            $label.addClass('label-checked');
            $label.find('.radio-check').show();
        }

    });

});