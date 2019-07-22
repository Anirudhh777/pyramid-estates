$( document ).ready(function() {
	var values = [];
	var area = [];
  var bedrooms = [];
  var places = [];
  var images = [];

  $(".select-btn").click(function(){
    if($(this).attr('type') == "button"){
      name = $($(this)).attr("name");
      values[name] = $(this).val();
      if(name == "user_type_btn"){
      	$(".user_type").val($(this).val());
        if($(".user_type").val() == 'Rent' || $(".user_type").val() == 'Rent Out'){
          $("#slider-range-buy").hide();
          $("#slider-range-rent").show();
        }else{
           $("#slider-range-buy").show();
          $("#slider-range-rent").hide();
        }
      }else if(name == "res_comm_btn"){
      	$(".res_comm").val($(this).val());
      	if(values[name] == "residential"){
	      	$(".com-opts").attr("disabled",true).hide();
	      	$(".res-opts").attr("disabled",false).show();
	      }else if(values[name] == "commercial"){
	      	$(".com-opts").attr("disabled",false).removeClass('disabled com-hide').show();
	      	$(".com-opts button").removeClass('disabled').show();
	      	$(".res-opts").attr("disabled",true).hide();
          $(".opts-bedroom").hide();
	      }
      }
      $(this).siblings().removeClass('btn-active');
      $(this).addClass('btn-active');
    }
  });

  $(".prop_type_opts").change(function(e){
      prop_types = $(this).val();
      $('.prop_type_val').val(prop_types.toString());
      if($(this).val().includes("Appartment")){
        $(".opts-bedroom").show();
      }else{
        $(".opts-bedroom").hide();
      }
  });


  $(".select-btn-area").click(function(){
      name = $($(this)).attr("name");
      if(area.includes($(this).val())){
      	 area.splice(area.indexOf($(this).val()));
      }else{
      	 area.push($(this).val());
      }
      $('.selectarea').val(area);
      $(this).toggleClass('btn-active-area');
  });

   $(".select-btn-area-br").click(function(){
      name = $($(this)).attr("name");
      if(bedrooms.includes($(this).val())){
         bedrooms.splice(bedrooms.indexOf($(this).val()));
      }else{
         bedrooms.push($(this).val());
      }
      $('.selectarea-br').val(bedrooms);
      $(this).toggleClass('btn-active-area');
  });

    function calc_values(vals){
      calc_vals = [];
      for(i=0;i<2;i++){
        if(vals[i] > 10000000){
           amount =  vals[i] / 10000000;
           if (Math.ceil(amount) == 20) {addon = "cr +";}else{addon = "cr";}
         }else if(vals[i] < 10000000 && vals[i] >= 100000){
           amount =  vals[i] / 100000;
           if (Math.ceil(amount) == 4) {addon = "lakh +";}else{addon = "lakh";}
         }else{
          amount =  vals[i] / 1000;
           addon = "thousand";
         }
          calc_vals.push(Math.ceil(amount) + " " + addon);
      }
      return calc_vals;
    }

$( "#slider-range-buy" ).slider({
      range: true,
      min: 1000000,
      max: 200000000,
      values: [ 1000000, 120000000 ],
      slide: function( event, ui ) {
        vals = calc_values([ui.values[0], ui.values[1]]);
        $( "#amount" ).val(vals[0] + " - " + vals[1] );
      }
    }).draggable();

$( "#slider-range-rent" ).slider({
      range: true,
      min: 10000,
      max: 400000,
      values: [ 10000, 200000 ],
      slide: function( event, ui ) {
        vals = calc_values([ui.values[0], ui.values[1]]);
        $( "#amount" ).val(vals[0] + " - " + vals[1] );
      }
    }).draggable();
  
  $("#nav-icon3").click(function(){
      $( ".header-responsive" ).show( "slow", function() {
        $( "#nav-icon3" ).hide();
        $( ".responsivex" ).show();
     });
  });

  $(".responsivex").click(function(){
      $( ".header-responsive" ).hide( "slow", function() {
        $( "#nav-icon3" ).show();
        $( ".responsivex" ).hide();
     });
  });

  $(".nav-about").click(function(e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: $(".banner").offset().top
    }, 2000);
  })

  $(".nav-contact").click(function(e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: $(".forms").offset().top
    }, 2000);
  })

  if(window.location.pathname == '/' || window.location.pathname == '/list')
  {
    var input = document.getElementById('pac-input');
    var autocomplete = new google.maps.places.Autocomplete(input);
    autocomplete.setComponentRestrictions(
    {'country': ['in']});
     autocomplete.setFields(
    ['name', 'address_components']);
    autocomplete.addListener('place_changed', function() {
      var place = autocomplete.getPlace();
      if(!places.includes(place.name)){
        $('.loc-list').append('<input type="button" value="'+place.name+'" class="select-btn-loc">');
        places.push(place.name);
      }
      $(".glocval").val(places.toString());
       $(".gloc").val("");
    });
  }

    $(document).on('click', '.select-btn-loc', function(){ 
      places.splice(places.indexOf($(this).val()));
      $(".glocval").val(places.toString());
      $(this).remove();
    })

  $("#buyform").validate({
    ignore: [],
    rules: {
      name: {
        required: true
      },
      phone: {
          required: true,
          minlength: 10,
          maxlength: 10,
          number: true,
          remote: {
              url: "/buyer_validate_phone",
              type: "post"
            }
        },
        bedrooms_vals: {
            required: function(element){
              return $('.prop_type_val').val().includes("Appartment");
          }
        },
      },
      messages:
        {
              name: {
                required: "Please enter your name"
              },
              phone: {
                 required: "Please enter your number",
                remote: "This number has already been registered",
                number: "Only numbers allowed"
              }     
          },
      submitHandler: function(form) {
          grecaptcha.execute();
      }
  });

  $("#sellform").validate({
    ignore: [],
    rules: {
      name: {
        required: true
      },
      phone: {
          required: true,
          minlength: 10,
          maxlength: 10,
          number: true,
          remote: {
              url: "/seller_validate_phone",
              type: "post"
            }
        },
      },
      messages:
        {
              name: {
                required: "Please enter your name"
              },
              phone: {
                 required: "Please enter your number",
                remote: "This number has already been registered",
                number: "Only numbers allowed"
              }     
          },
      submitHandler: function(form) {
          grecaptcha.execute();
      }
  });

  $(".imgAdd").click(function(){
      if($(".image-label").length < 7){
        $(this).closest(".row").find('.imgAdd').before('<div class="col-sm-2 imgUp"><div class="imagePreview"></div><label class="btn btn-primary image-label">Upload<input type="file" class="uploadFile img" style="width:0px;height:0px;overflow:hidden;" name="imagelinks' + $(".image-label").length +'"></label><i class="fa fa-times del"></i></div>');
        if($(".image-label").length == 6){ $('.imgAdd').hide(); }
      }
    });

    $(document).on("click", "i.del" , function() {
    	console.log($(this).val());
      $(this).parent().remove();
    });

    $(function() {
        $(document).on("change",".uploadFile", function()
        {
            var uploadFile = $(this);
            var files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader) return; 
     
            if (/^image/.test( files[0].type)){ // only image file
                var reader = new FileReader(); // instance of the FileReader
                reader.readAsDataURL(files[0]); // read the local file
     
                reader.onloadend = function(){ // set image data as background of div
                   
                 uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url("+this.result+")");
                }
            }
          
        });
    });

});