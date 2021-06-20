$(function () {

    $('input[name=plan]').on('change', function () {
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