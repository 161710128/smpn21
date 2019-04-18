"use strict";
$(document).ready(function () {
// Select2
    $(".select2").select2(
        {
            width: "100%"
        }
    );
    $(".tokenizer").select2({
        tags: true,
        width: "100%",
        tokenSeparators: [',', ' ']
    });
    $(".js-example-disabled-multi").select2();

    $(".js-example-disabled-multi").prop("disabled", false);
    //Date range picker
    $('#reservation').daterangepicker({
        autoUpdateInput: false,
        locale: {
            cancelLabel: 'Clear'
        }
    }).on('apply.daterangepicker', function (ev, picker) {
        $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
    }).on('cancel.daterangepicker', function (ev, picker) {
        $(this).val('');
    });
    //Date range picker with time picker
    $("#reservationtime").daterangepicker({
        timePicker: true,
        autoUpdateInput: false,
        timePickerIncrement: 30,
        locale: {
            cancelLabel: 'Clear'
        }
    }).on('apply.daterangepicker', function (ev, picker) {
        $(this).val(picker.startDate.format('MM/DD/YYYY h:mm A') + ' - ' + picker.endDate.format('MM/DD/YYYY h:mm A'));
    }).on('cancel.daterangepicker', function (ev, picker) {
        $(this).val('');
    });
    //clock pickers and call back

    $('.clockpicker').clockpicker({
        placement: 'bottom',
        align: 'left',
        donetext: 'Done'
    });
    var input = $('.clockpicker-with-callbacks').clockpicker({
        donetext: 'Done',
        placement: "bottom",
        init: function () {
            console.log("colorpicker initiated");
        },
        beforeShow: function () {
            console.log("before show");
        },
        afterShow: function () {
            console.log("after show");
        },
        beforeHide: function () {
            console.log("before hide");
        },
        afterHide: function () {
            console.log("after hide");
        },
        beforeHourSelect: function () {
            console.log("before hour selected");
        },
        afterHourSelect: function () {
            console.log("after hour selected");
        },
        beforeDone: function () {
            console.log("before done");
        },
        afterDone: function () {
            console.log("after done");
        }
    });
    // air datepicker code
    Date.prototype.addDays = function (days) {
        var dat = new Date(this.valueOf());
        dat.setDate(dat.getDate() + days);
        return dat;
    };
    var dat = new Date();
    $('#my-element').datepicker();
    $('#timepick').datepicker();
    $('#dateranges').datepicker();
    var disabledDays = [0, 6];

    // bootstrap switches
    $("[name='my-checkbox']").bootstrapSwitch();
//============button-size-change=======
    $(".changesize").on("click", function () {
        $("#switchsize").bootstrapSwitch("size", $(this).text());
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();

    $(".my-colorpicker2").colorpicker(
        {
            format: 'rgba'
        }
    );
    $("#cp3").colorpicker();
    $(".disable-button").on("click", function(e) {
        e.preventDefault();
        $("#cp10").colorpicker('disable');
    });

    $(".enable-button").on("click", function(e) {
        e.preventDefault();
        $("#cp10").colorpicker('enable');
    });
    $('#cp10').colorpicker();

    $("#input-43").fileinput({
        theme: "fa",
        browseClass: "btn btn-info",
        showPreview: false,
        allowedFileExtensions: ["zip", "rar", "gz", "tgz"],
        elErrorContainer: "#errorBlock43"
        // you can configure `msgErrorClass` and `msgInvalidFileExtension` as well
    });
    $("#input-42").fileinput({
        theme: "fa",
        browseClass: "btn btn-warning",
        maxFilesNum: 10,
        allowedFileExtensions: ["jpg", "gif", "png", "txt"]
    });
    $("#input-41").fileinput({
        theme: "fa",
        browseClass: "btn btn-danger",
        maxFileCount: 10,
        allowedFileTypes: ["image", "video"]
    });
    $("#input-40").fileinput({
        theme: "fa",
        browseClass: "btn btn-primary",
        maxFileCount: 10,
        allowedFileTypes: ["image", "video"]
    });
    $("#input-22").fileinput({
        theme: "fa",
        browseClass: "btn btn-primary",
        maxFileCount: 10,
        allowedFileTypes: ["text"]
    });

    $(".btn-modify").on("click", function () {

        var $btn = $(this);
        if ($btn.text() == "Modify") {
            $("#input-40").fileinput("disable");
            $btn.html("Revert");
            alert("Hurray! I have disabled the input and hidden the upload button.");
        } else {
            $("#input-40").fileinput("enable");
            $btn.html("Modify");
            alert("Hurray! I have reverted back the input to enabled with the upload button.");
        }
    });

    $("#input-23").fileinput({
        theme: "fa",
        browseClass: "btn btn-default",
        showUpload: false,
        mainTemplate: "{preview}\n" +
        "<div class='input-group {class}'>\n" +
        "   <div class='input-group-btn'>\n" +
        "       {browse}\n" +
        "       {upload}\n" +
        "       {remove}\n" +
        "   </div>\n" +
        "   {caption}\n" +
        "</div>"
    });
    $("#input-21").fileinput({
        // previewFileType: "image",
        // browseClass: "btn btn-success",
        // browseLabel: " Pick Image",
        // browseIcon: '<i class="fa fa-picture-o" aria-hidden="true"></i>',
        // removeClass: "btn btn-danger",
        // removeLabel: "Delete",
        // removeIcon: '<i class="fa fa-trash" aria-hidden="true"></i>\n',
        // uploadClass: "btn btn-info",
        // uploadLabel: " Upload",
        // uploadIcon: '<i class="fa fa-folder-open" aria-hidden="true"></i>',
        theme: "fa",
        previewFileType: "image",
        browseClass: "btn btn-success",
        browseLabel: "Pick Image",
        removeClass: "btn btn-danger",
        removeLabel: "Delete"
    });
    $("#input-20").fileinput({
        theme: "fa",
        browseClass: "btn btn-info btn-block",
        showCaption: false,
        showRemove: false,
        showUpload: false
    });
    $("#input-4").fileinput({browseClass: "btn btn-success", showCaption: false});
    $("#input-5").fileinput({
        theme: "fa",
        browseClass: "btn btn-warning",
        showUpload: false,
        maxFileCount: 10,
        mainClass: "input-group-lg"
    });

});
