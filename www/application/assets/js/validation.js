var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
validation = {
    
    checkSubmitData: function(){
        $('button[id="send"]').click(function(e){
            e.preventDefault();
            var is_error = false;
            var form = $(this).parents("form");
            form.find(".controls input.required").each(function(){
                var input = $(this);
                
                if(input.val() == ""){
                    var error = input.next(".error-message")
                    var name = input.attr("placeholder");
                    error.html('поле ' + name + ' не должно быть пустым').show();
                    input.parents('.control-group').addClass("has-error");
                    is_error = true;
                }
            });
            if(! is_error)
                form.submit();
        });
    },
    
    checkInputs: function(){
        $('input').keypress(function(){
            $(this).parents('.control-group').removeClass('has-error');
            $(this).next().hide();
        });
    },
    
    checkMail: function(){
      var mail = $('input[name="email"]');
      mail.blur(function(){
          if(mail.val() != ''){
              if(mail.val().search(pattern) != 0){
                  var error = mail.next(".error-message")
                  error.html("неверный формат Email").show();
                  mail.parents('.control-group').addClass("has-error");
              }
          }
      });
    }
}
$(function(){
    validation.checkMail();
    validation.checkInputs();
    validation.checkSubmitData();
});
