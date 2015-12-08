  $(function() {
    //при нажатии на кнопку с id="submit"
    $('#submit').click(function() {
      //переменная formValid
      var formValid = true;
      //перебрать все элементы управления input 
      $('input').each(function() {
      //найти предков, которые имеют класс .form-group, для установления success/error
      var formGroup = $(this).parents('.form-group');        
      //для валидации данных используем HTML5 функцию checkValidity
      var glyphicon = formGroup.find('.form-control-feedback');

      if (this.checkValidity()) {
        //добавить к formGroup класс .has-success, удалить has-error
        formGroup.addClass('has-success').removeClass('has-error');
        glyphicon.addClass('glyphicon-ok').removeClass('glyphicon-remove');
      } else {
        //добавить к formGroup класс .has-error, удалить .has-success
        formGroup.addClass('has-error').removeClass('has-success');
        glyphicon.addClass('glyphicon-remove').removeClass('glyphicon-ok');
       //отметить форму как невалидную 
        formValid = false;  
      }
    });
    //если форма валидна, то
    if (formValid) {
      //сркыть модальное окно
      $('#basicModal').modal('hide');
      $('.order').hide();
      $('input').val('');
      //отобразить сообщение об успехе
      $('#success-alert').removeClass('hidden');
    }
  });
});
