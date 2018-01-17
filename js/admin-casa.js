var casa_type_form = jQuery("[name=casa_type]");
var casa_style_form = jQuery("[name=casa_style]");
var casa_floor_area_form = jQuery("[name=casa_floor_area]");
var casa_lot_area_form = jQuery("[name=casa_lot_area]");
var casa_room_form = jQuery("[name=casa_room]");
var casa_toilet_form = jQuery("[name=casa_toilet]");

var casa_type_div = jQuery("#casa_type");
var casa_style_div = jQuery("#casa_style");
var casa_floor_area_div = jQuery("#casa_floor_area");
var casa_lot_area_div = jQuery("#casa_lot_area");
var casa_room_div = jQuery("#casa_room");
var casa_toilet_div = jQuery("#casa_toilet");

jQuery(document).ready(function() {



  casa_type_form.change(function(){
    var type = casa_type_form.val();
    console.log(type);
    selectType(type);
  });




});

function selectType(type){

  switch (type) {

    case 'House and Lot':
        casa_style_div.show('slow');
        casa_floor_area_div.show('slow');
        casa_room_div.show('slow');
        casa_toilet_div.show('slow');
      break;

    case 'Lot Only (Residential)':
        casa_style_div.hide('slow');
        casa_style_form.val('');
        casa_floor_area_div.hide('slow');
        casa_floor_area_form.val('');
        casa_room_div.hide('slow');
        casa_room_form.val('');
        casa_toilet_div.hide('slow');
        casa_toilet_form.val('');
      break;

    case 'Lot Only (Agricultural)':
        casa_style_div.hide('slow');
        casa_style_form.val('');
        casa_floor_area_div.hide('slow');
        casa_floor_area_form.val('');
        casa_room_div.hide('slow');
        casa_room_form.val('');
        casa_toilet_div.hide('slow');
        casa_toilet_form.val('');
      break;

    default:
        casa_style_div.hide('slow');
        casa_style_form.val('');
        casa_floor_area_div.hide('slow');
        casa_floor_area_form.val('');
        casa_room_div.hide('slow');
        casa_room_form.val('');
        casa_toilet_div.hide('slow');
        casa_toilet_form.val('');

  }

}
