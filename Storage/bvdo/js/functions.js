$(document).ready(function() {
    if (window.location.href.indexOf("index") > -1) {
        $('#menuItem1').addClass("active");
    } else if (window.location.href.indexOf("pages") > -1) {
        $('#menuItem2').addClass("active");
    } else if (window.location.href.indexOf("posts") > -1) {
        $('#menuItem3').addClass("active");
    } else if (window.location.href.indexOf("formulieroverview") > -1) {
        $('#menuItem4').addClass("active");
    } else if (window.location.href.indexOf("users") > -1) {
        $('#menuItem5').addClass("active");
    } else if (window.location.href.indexOf("formulier") > -1) {
        $('#menuItem4').addClass("active");
    } else if (window.location.href.indexOf("test") > -1) {
        $('#menuItem2').addClass("active");
    } else if (window.location.href.indexOf("test") > -1) {
        $('#menuItem6').addClass("active");
    }
});

$(document).ready(function() {
	/* This is basic - uses default settings */
	
	$("a#single_image").fancybox();
	
	/* Using custom settings */
	
	$("a#inline").fancybox({
		'hideOnContentClick': true
	});

	/* Apply fancybox to multiple items */
	
	$("a.group").fancybox({
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		'overlayShow'	:	false
	});
	
});

$(document).ready(function () {      
 $('tr').click(function (event) {
     var value=$(this).closest('tr').children('td:first').text();
     var value2=$(this).closest('tr').children('td:nth-of-type(2)').text();   
     var value3=$(this).closest('tr').children('td:nth-of-type(3)').text(); 
     $('#typeId').val(value);
     $('#typeNaam').val(value2);
     $('#typeWaarde').val(value3);
 });
});

$(document).ready(function () {      
 $('tr').click(function (event) {
     var value=$(this).closest('tr').children('td:first').text();
     var value2=$(this).closest('tr').children('td:nth-of-type(2)').text();   
     var value3=$(this).closest('tr').children('td:nth-of-type(3)').text(); 
     $('#kleurId').val(value);
     $('#kleurNaam').val(value2);
     $('#kleurWaarde').val(value3);
 });
});

$(document).ready(function () {      
 $('tr').click(function (event) {
     var value=$(this).closest('tr').children('td:first').text();
     var value2=$(this).closest('tr').children('td:nth-of-type(2)').text();   
     var value3=$(this).closest('tr').children('td:nth-of-type(3)').text(); 
     $('#dakbedekkingId').val(value);
     $('#dakbedekkingNaam').val(value2);
     $('#dakbedekkingWaarde').val(value3);
 });
});

$(document).ready(function () {      
 $('tr').click(function (event) {
     var value=$(this).closest('tr').children('td:first').text();
     var value2=$(this).closest('tr').children('td:nth-of-type(2)').text();   
     var value3=$(this).closest('tr').children('td:nth-of-type(3)').text(); 
     $('#zonweringId').val(value);
     $('#zonweringNaam').val(value2);
     $('#zonweringWaarde').val(value3);
 });
});

$(document).ready(function () {      
 $('tr').click(function (event) {
     var value=$(this).closest('tr').children('td:first').text();
     var value2=$(this).closest('tr').children('td:nth-of-type(2)').text();   
     var value3=$(this).closest('tr').children('td:nth-of-type(3)').text(); 
     $('#montageId').val(value);
     $('#montageNaam').val(value2);
     $('#montageWaarde').val(value3);
 });
});

$(document).ready(function () {      
 $('tr').click(function (event) {
     var value=$(this).closest('tr').children('td:first').text();
     var value2=$(this).closest('tr').children('td:nth-of-type(2)').text();   
     var value3=$(this).closest('tr').children('td:nth-of-type(3)').text(); 
     var value4=$(this).closest('tr').children('td:nth-of-type(4)').text();
     $('#instellingId').val(value);
     $('#emailOntvangerEdit').val(value2);
     var kleur = $("#kleurTekst").text();
     $('#inputKleurEdit').val(kleur);
     $('#inputBedanktpaginaEdit').val(value4);
 });
});

$(document).ready(function(){
  $("#exampleSelect1").change(function() {
      var val = $(this).val();
      $('#form-zonwering').css('display', 'none');
      $("select option").css("display","block");
      if(val == 'Greenline_Veranda') {
          $('#form-zonwering').css('display', 'block');
          $("select option:contains('Blauw Structuurlak')").css("display","none");
          $("select option:contains('Ral 9016')").css("display","none");
          $("select option:contains('Ral 9001')").css("display","none");
          $("select option:contains('Brons Structuurlak')").css("display","none");
          $("select option:contains('Silver Structuurlak')").css("display","none");
          $("select option:contains('Licht Eiken')").css("display","none");
          $("select option:contains('Donker Eiken')").css("display","none");
          $("select option:contains('Zwart Structuurlak')").css("display","none");
          $("select option:contains('Bruin Structuurlak')").css("display","none");
          $("select option:contains('Grijs Structuurlak')").css("display","none");
          $("select option:contains('Rood Structuurlak')").css("display","none");
          $("select option:contains('Groen Structuurlak')").css("display","none");
          $("select option:contains('Ral 9001 Structuurlak')").css("display","none");
          $("select option:contains('Eluxal EV-1')").css("display","none");
          $("select option:contains('HR++ Glas')").css("display","none");
          $(".Antraciet").css("display","none");
          $("select option:contains('Lichtbruin')").css("display","none");
      } else if (val == 'Profiline_Veranda') {
          $('#form-zonwering').css('display', 'block');
          $("select option:contains('Ral 9010 Structuurlak')").css("display","none");
          $("select option:contains('Eluxal EV-1')").css("display","none");
          $("select option:contains('HR++ Glas')").css("display","none");
          $(".Antraciet").css("display","none");
          $("select option:contains('Lichtbruin')").css("display","none");
      } else if (val == 'Highline_Veranda') {
          $('#form-zonwering').css('display', 'block');
          $("select option:contains('Ral 9010 Structuurlak')").css("display","none");
          $("select option:contains('Eluxal EV-1')").css("display","none");
          $("select option:contains('Helder X-structuur Polycarbonaat')").css("display","none");
          $("select option:contains('Warmtewerend X-structuur Polycarbonaat')").css("display","none");
          $("select option:contains('Opaal X-structuur Polycarbonaat')").css("display","none");
          $("select option:contains('Wide 32 helder Polycarbonaat')").css("display","none");
          $("select option:contains('Wide 32 warmtewerend Polycarbonaat')").css("display","none");
          $(".Antraciet").css("display","none");
          $("select option:contains('Lichtbruin')").css("display","none");
      } else if (val == 'Houten_Veranda') {
          $('#form-zonwering').css('display', 'block');
          $("#exampleSelect2 option").css("display","none");
          $("select option:contains('Weet niet')").css("display","block");
          $("select option:contains('Warmtewerend X-structuur Polycarbonaat')").css("display","none");
          $("select option:contains('Wide 32 helder Polycarbonaat')").css("display","none");
          $("select option:contains('Wide 32 warmtewerend Polycarbonaat')").css("display","none");
          $("select option:contains('HR++ Glas')").css("display","none");
          $(".Antraciet").css("display","none");
          $("select option:contains('Lichtbruin')").css("display","none");
      } else if (val == 'Aluminium_Tuinkamer') {
          $('#form-zonwering').css('display', 'block');
          $("select option:contains('Ral 9010 Structuurlak')").css("display","none");
          $("select option:contains('Eluxal EV-1')").css("display","none");
          $("select option:contains('Licht Eiken')").css("display","none");
          $("select option:contains('Donker Eiken')").css("display","none");
          $("select option:contains('Helder X-structuur Polycarbonaat')").css("display","none");
          $("select option:contains('HR++ Glas')").css("display","none");
          $(".Antraciet").css("display","none");
          $("select option:contains('Lichtbruin')").css("display","none");
      } else if (val == 'Glasschuifwanden') {
          $('#form-zonwering').css('display', 'block');
          $("select option:contains('Ral 9010 Structuurlak')").css("display","none");
          $("select option:contains('Helder X-structuur Polycarbonaat')").css("display","none");
          $(".Antraciet").css("display","none");
          $("select option:contains('Lichtbruin')").css("display","none");
      } else if (val == 'Carport_Gebogen' || val == 'Carport_Vlak') {
          $("select option:contains('Blauw Structuurlak')").css("display","none");
          $("select option:contains('Ral 9016')").css("display","none");
          $("select option:contains('Ral 9001')").css("display","none");
          $("select option:contains('Brons Structuurlak')").css("display","none");
          $("select option:contains('Silver Structuurlak')").css("display","none");
          $("select option:contains('Licht Eiken')").css("display","none");
          $("select option:contains('Donker Eiken')").css("display","none");
          $("select option:contains('Zwart Structuurlak')").css("display","none");
          $("select option:contains('Bruin Structuurlak')").css("display","none");
          $("select option:contains('Grijs Structuurlak')").css("display","none");
          $("select option:contains('Rood Structuurlak')").css("display","none");
          $("select option:contains('Groen Structuurlak')").css("display","none");
          $("select option:contains('Ral 9001 Structuurlak')").css("display","none");
          $("select option:contains('Eluxal EV-1')").css("display","none");
          $("select option:contains('Wide 32 helder Polycarbonaat')").css("display","none");
          $("select option:contains('Wide 32 warmtewerend Polycarbonaat')").css("display","none");
          $("select option:contains('Warmtewerend X-structuur Polycarbonaat')").css("display","none");
          $("select option:contains('HR++ Glas')").css("display","none");
          $("select option:contains('Warmtewerend Glas')").css("display","none");
          $("select option:contains('Helder Glas')").css("display","none");
          $(".Antraciet").css("display","none");
          $("select option:contains('Lichtbruin')").css("display","none");
      } else if (val == 'Aluminium_Schutting') {
          $("select option:contains('Blauw Structuurlak')").css("display","none");
          $("select option:contains('Antraciet Structuurlak')").css("display","none");
          $("select option:contains('Licht Eiken')").css("display","none");
          $("select option:contains('Donker Eiken')").css("display","none");
          $("select option:contains('Zwart Structuurlak')").css("display","none");
          $("select option:contains('Bruin Structuurlak')").css("display","none");
          $("select option:contains('Grijs Structuurlak')").css("display","none");
          $("select option:contains('Rood Structuurlak')").css("display","none");
          $("select option:contains('Groen Structuurlak')").css("display","none");
          $("select option:contains('Ral 9001 Structuurlak')").css("display","none");
          $("select option:contains('Ral 9010 Structuurlak')").css("display","none");
          $("select option:contains('Eluxal EV-1')").css("display","none");
          $("select option:contains('Wide 32 helder Polycarbonaat')").css("display","none");
          $("select option:contains('Wide 32 warmtewerend Polycarbonaat')").css("display","none");
          $("select option:contains('Warmtewerend X-structuur Polycarbonaat')").css("display","none");
          $("select option:contains('HR++ Glas')").css("display","none");
          $("select option:contains('Warmtewerend Glas')").css("display","none");
          $("select option:contains('Helder Glas')").css("display","none");
          $("select option:contains('Helder X-structuur Polycarbonaat')").css("display","none");
          $("select option:contains('Opaal X-structuur Polycarbonaat')").css("display","none");
          $("select option:contains('Weet niet')").css("display","block");
          $("select option:contains('Lichtbruin')").css("display","none");
      } else if (val == 'Composiet_Schutting') {
          $("select option:contains('Blauw Structuurlak')").css("display","none");
          $("select option:contains('Antraciet Structuurlak')").css("display","none");
          $("select option:contains('Licht Eiken')").css("display","none");
          $("select option:contains('Donker Eiken')").css("display","none");
          $("select option:contains('Zwart Structuurlak')").css("display","none");
          $("select option:contains('Bruin Structuurlak')").css("display","none");
          $("select option:contains('Grijs Structuurlak')").css("display","none");
          $("select option:contains('Rood Structuurlak')").css("display","none");
          $("select option:contains('Brons Structuurlak')").css("display","none");
          $("select option:contains('Groen Structuurlak')").css("display","none");
          $("select option:contains('Ral 9001 Structuurlak')").css("display","none");
          $("select option:contains('Ral 9010 Structuurlak')").css("display","none");
          $("select option:contains('Ral 9016')").css("display","none");
          $("select option:contains('Ral 9001')").css("display","none");
          $("select option:contains('Eluxal EV-1')").css("display","none");
          $("select option:contains('Wide 32 helder Polycarbonaat')").css("display","none");
          $("select option:contains('Wide 32 warmtewerend Polycarbonaat')").css("display","none");
          $("select option:contains('Warmtewerend X-structuur Polycarbonaat')").css("display","none");
          $("select option:contains('HR++ Glas')").css("display","none");
          $("select option:contains('Warmtewerend Glas')").css("display","none");
          $("select option:contains('Helder Glas')").css("display","none");
          $("select option:contains('Helder X-structuur Polycarbonaat')").css("display","none");
          $("select option:contains('Opaal X-structuur Polycarbonaat')").css("display","none");
          $("select option:contains('Weet niet')").css("display","block");
      }
      else {

      }
  });
});