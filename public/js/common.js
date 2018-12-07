jQuery(document).ready(function($) {
 $(".dt_rating_button li").click(function() {
    $(".dt_rating_button li").removeClass('active');
    $(this).addClass('active');
    });

   $('.tooltip_dt').tooltipster({
    contentCloning: true,
    contentAsHTML: true,
    maxWidth: 450,
    distance: 0,
    interactive : true,
  });
  $('.tooltip_matrix').tooltipster({
    contentCloning: true,
    contentAsHTML: true,
    maxWidth: 500,
    distance: 0,
    interactive : true,
  });
  $('.tooltip_impact').tooltipster({
     contentCloning: true,
     contentAsHTML: true,
     maxWidth: 500,
     interactive : true,
    });
    $('#edit-dt-step3-ques1 input.form-checkbox').on('change', function() {
    $('#edit-dt-step3-ques1 input.form-checkbox').not(this).prop('checked', false);  
  });
  
  $('#edit-dt-step3-ques2 input.form-checkbox').on('change', function() {
    $('#edit-dt-step3-ques2 input.form-checkbox').not(this).prop('checked', false);  
  });
  
  $('#edit-dt-step3-ques3 input.form-checkbox').on('change', function() {
    $('#edit-dt-step3-ques3 input.form-checkbox').not(this).prop('checked', false);  
  });
  
  $('#edit-dt-step4-ques1 input.form-checkbox').on('change', function() {
    $('#edit-dt-step4-ques1 input.form-checkbox').not(this).prop('checked', false);  
  });

  $('#edit-matrix-step3-ques1 input.form-checkbox').on('change', function() { // for non phy Ques1
    $('#edit-matrix-step3-ques1 input.form-checkbox').not(this).prop('checked', false); 
  });

  $('#edit-matrix-step3-ques2 input.form-checkbox').on('change', function() { // for non phy Ques2
    $('#edit-matrix-step3-ques2 input.form-checkbox').not(this).prop('checked', false);  
  });
  
  $('#edit-matrix-step3-ques3 input.form-checkbox').on('change', function() { // for non phy Ques3
    $('#edit-matrix-step3-ques3 input.form-checkbox').not(this).prop('checked', false);  
  });

  $('#edit-matrix-step3-ws-ques1 input.form-checkbox').on('change', function() { // for water sector Ques1
    $('#edit-matrix-step3-ws-ques1 input.form-checkbox').not(this).prop('checked', false);  
  });

  $('#edit-matrix-step3-sep-ques1 input.form-checkbox').on('change', function() { // for social Ques1
    $('#edit-matrix-step3-sep-ques1 input.form-checkbox').not(this).prop('checked', false);  
  });

jQuery(document).on('click','#edit-water-checkbox',function(){
 if (jQuery('#edit-water-checkbox').is(':checked')){
  jQuery('.checkbox-subsector .form-checkbox').attr('disabled','true');
 }
 else {
    jQuery('.checkbox-subsector .form-checkbox').removeAttr('disabled');
 }
});


 $('.geo-check').change(function() {
    var id = $(this).attr('id');
    if ($(this).is(':checked')){
      if(id == 'edit-hazard-other'){
        $('#others-title-txt').css('display','block');
        $('#others-title-txt-error').show();
      }

      $('.'+id).removeClass('hide');
    }
    else {
      if(id == 'edit-hazard-other'){
        $('#others-title-txt').css('display','none');
        $('#others-title-txt-error').hide();
      }
      $('.'+id).addClass('hide');
    }
  });


});