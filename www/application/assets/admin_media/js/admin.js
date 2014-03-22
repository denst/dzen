var admin = {
    
    setDatePicker: function(){
        $('.datetimepicker').datetimepicker({
            language: 'pt-BR'
        });
    },
    
    deleteDate: function(){
        $(document).on("click", '.btn-delete-date', function(){
            $('input[name="delete_date_id"]').val($(this).attr('id'));
        });
    },
            
    deletePage: function(){
        $(document).on("click", '.btn-delete-page', function(){
            $('input[name="delete_page_id"]').val($(this).attr('id'));
        });
    },
            
    deleteSubscriber: function(){
        $(document).on("click", '.btn-delete-subscriber', function(){
            $('input[name="delete_subscriber_id"]').val($(this).attr('id'));
        });
    }
}
$(function(){
    admin.setDatePicker();
    admin.deleteDate();
    admin.deletePage();
    admin.deleteSubscriber();
});
