function formInit() {
    "use strict";

    $('.with-tooltip').tooltip({
        selector: ".input-tooltip"
    });

    /*----------- BEGIN autosize CODE -------------------------*/
    $('#autosize').autosize();
    /*----------- END autosize CODE -------------------------*/

    /*----------- BEGIN inputlimiter CODE -------------------------*/
    $('#limiter').inputlimiter({
        limit: 140,
        remText: 'You only have %n character%s remaining...',
        limitText: 'You\'re allowed to input %n character%s into this field.'
    });
    /*----------- END inputlimiter CODE -------------------------*/

    /*----------- BEGIN tagsInput CODE -------------------------*/
    $('#tags').tagsInput();
    /*----------- END tagsInput CODE -------------------------*/
    $('.btn-group').button();
    /*----------- BEGIN chosen CODE -------------------------*/
    
    $(".chzn-select").chosen();
    $(".chzn-select-deselect").chosen({
        allow_single_deselect: true
    });
    /*----------- END chosen CODE -------------------------*/

    /*----------- BEGIN spinner CODE -------------------------*/

    $('.spin1').spinner();
    $(".spin2").spinner({
        step: 1,
        numberFormat: "n"
    });
    $(".spin3").spinner({
        start: 30,
        min: 1,
        max: 1000,
        step: 1
    });
    /*----------- END spinner CODE -------------------------*/

    /*----------- BEGIN uniform CODE -------------------------*/
    $('.uniform').uniform();
    /*----------- END uniform CODE -------------------------*/

    /*----------- BEGIN validVal CODE -------------------------*/
    $('#validVal').validVal();
    /*----------- END validVal CODE -------------------------*/

    /*----------- BEGIN colorpicker CODE -------------------------*/
    $('#cp1').colorpicker({
        format: 'hex'
    });
    $('#cp2').colorpicker();
    $('#cp3').colorpicker();
    $('#cp4').colorpicker().on('changeColor', function (ev) {
        $('#colorPickerBlock').css('background-color', ev.color.toHex());
    });
    /*----------- END colorpicker CODE -------------------------*/

    /*----------- BEGIN datepicker CODE -------------------------*/
    $('#dp1').datepicker({
        format: 'dd/mm/yyyy'
    });
    $('#dp2').datepicker({
        format: 'dd/mm/yyyy'
    });
    $('#dp3').datepicker({
        format: 'dd/mm/yyyy'
    });
    $('#dp4').datepicker({
        format: 'dd/mm/yyyy'
    });
    $('#dp5').datepicker({
        format: 'dd/mm/yyyy'
    });
    $('#dpYears').datepicker();
    $('#dpMonths').datepicker();
    /*----------- END datepicker CODE -------------------------*/

    /*----------- BEGIN daterangepicker CODE -------------------------*/
    $('#reservation').daterangepicker();
    $('#reservation1').daterangepicker();
    $('#reservation2').daterangepicker();
    $('#reportrange').daterangepicker(
            {
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                    'Last 7 Days': [moment().subtract('days', 6), moment()],
                    'Last 30 Days': [moment().subtract('days', 29), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                }
            },
    function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }
    );
    /*----------- END daterangepicker CODE -------------------------*/

    /*----------- BEGIN toggleButtons CODE -------------------------*/
    // Resets to the regular style
    $('#dimension-switch').bootstrapSwitch('setSizeClass', '');
    // Sets a mini switch
    $('#dimension-switch').bootstrapSwitch('setSizeClass', 'switch-mini');
    // Sets a small switch
    $('#dimension-switch').bootstrapSwitch('setSizeClass', 'switch-small');
    // Sets a large switch
    $('#dimension-switch').bootstrapSwitch('setSizeClass', 'switch-large');
    /*----------- END toggleButtons CODE -------------------------*/

    /*----------- BEGIN dualListBox CODE -------------------------*/
    $.configureBoxes();
    /*----------- END dualListBox CODE -------------------------*/
}