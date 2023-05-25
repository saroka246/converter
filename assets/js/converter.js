$('select').change(function (){
    if($('form').hasClass('reverse')){
        let nominal = Number($('select option:selected').data('nom'));
        let val = Number($('select option:selected').data('value'))/nominal;

        $('input[name="rub"]').val(1);
        $('input[name="cur"]').val((1/val).toFixed(4));
    } else {
        let nominal = Number($(this).find('option:selected').data('nom'));
        let val = Number($(this).find('option:selected').data('value'));
        let input = Number($('input[name="cur"]').val());
        $('input[name="cur"]').attr('step', nominal);
        $('input[name="cur"]').val(nominal);

        $('input[name="rub"]').val(val);
    }

});
$('form:not("reverse") input[name="cur"]').change(function (){
    let nominal = Number($('select option:selected').data('nom'));
    let val = Number($('select option:selected').data('value'))/nominal;
    let input = Number($('input[name="cur"]').val());

    $('input[name="rub"]').val((input*val).toFixed(4));
})
$('form:not("reverse") input[name="rub"]').change(function (){
    let nominal = Number($('select option:selected').data('nom'));
    let val = Number($('select option:selected').data('value'))/nominal;
    let input = Number($('input[name="rub"]').val());

    $('input[name="cur"]').val((input*(1/val)).toFixed(4));
})
$('.arrow').click(function (){
    $('form').toggleClass('reverse');
    if($('form').hasClass('reverse')){
        $('input[name="cur"]').attr('readonly',true)
        $('input[name="rub"]').attr('readonly',false)

        let nominal = Number($('select option:selected').data('nom'));
        let val = Number($('select option:selected').data('value'))/nominal;

        $('input[name="rub"]').val(1);
        $('input[name="cur"]').val((1/val).toFixed(4));

    } else {
        $('input[name="cur"]').attr('readonly',false)
        $('input[name="rub"]').attr('readonly',true)

        let nominal = Number($('select option:selected').data('nom'));
        let val = Number($('select option:selected').data('value'));
        let input = Number($('input[name="cur"]').val());
        $('input[name="cur"]').attr('step', nominal);
        $('input[name="cur"]').val(nominal);

        $('input[name="rub"]').val(val);
    }
});