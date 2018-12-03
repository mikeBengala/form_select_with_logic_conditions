Main_spark_form_logic = {
    init:function(){
        Main_spark_form_logic.trigger_select2();
        Main_spark_form_logic.spark_trigger_list();
        Main_spark_form_logic.spark_set_form_submit();
    },
    spark_trigger_list:function(){
        if( $(".spark_trigger_list").length > 0 ){
            $(".spark_trigger_list").change(function(){
                var trigger_id = $(this).attr("data-triggerid"),
                    selected_option_data_trigger = $(this).find(":selected").attr("data-trigger");

                //console.log(trigger_id);
                //console.log($(".spark_triggerable[data-triggerid = '" + trigger_id + "'][student_option = '" + selected_option_data_trigger + "']"));

                $(".spark_triggerable[data-triggerid = '" + trigger_id + "']").removeClass("active");
                $(".spark_triggerable[data-trigger = '" + selected_option_data_trigger + "']").addClass("active");
            });
        }
    },
    spark_set_form_submit:function(){
        //form_submisssion logic goes here
    },
    trigger_select2:function(){
        $.fn.select2.defaults.set("theme", "classic");
        if($('.basic-multiple').length > 0){
            $('.basic-multiple').select2({
                width: 'resolve',
                placeholder: 'Sou'
            });
        }
    }
}

var $ = jQuery;
$(function(){
    Main_spark_form_logic.init();
});