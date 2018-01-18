var addButton = jQuery( '#image-upload-button' );
var deleteButton = jQuery( '#image-delete-button' );
var img = jQuery( '#image-tag' );
var hidden = jQuery( '#img-hidden-field' );

var casaImageUploader = wp.media({
    title: 'Select an Image',
    button: {
        text: 'Use this Image'
    },
    multiple: true
});
addButton.click(function(){
  if ( casaImageUploader ) {
      casaImageUploader.open();
  }
});


function toggleVisibility( action ) {
    if ( 'ADD' === action ) {
        addButton.hide();
        deleteButton.show();
    }

    if ( 'DELETE' === action ) {
        addButton.show();
        deleteButton.hide();
    }
};

casaImageUploader.on( 'select', function() {
    var attachment = casaImageUploader.state().get('selection').toJSON();
    var data = [];
    attachment.forEach(function(element) {

        console.log(element.url);
        img.append( '<img src="'+element.url+'" class="casa-image" id="casa_image_'+element.id+'" style="width: 100%;">' );

        data.push([{
          'id': element.id,
          'url': element.url
        }]);

    });
    console.log(JSON.stringify(data));
    hidden.attr( 'value', JSON.stringify(data) ).removeAttr('disabled');
    toggleVisibility( 'ADD' );
} );


deleteButton.click(function(){

  jQuery( '.casa-image' ).remove();
  hidden.val( '' );
  toggleVisibility( 'DELETE' );
});

window.addEventListener( 'DOMContentLoaded', function() {
  //console.log(casaImageUploads);
  var images = casaImageUploads.imageData;
  if (  casaImageUploads.imageData === "" || casaImageUploads.imageData.length == 0 ) {
      toggleVisibility( 'DELETE' );
  } else {
      images.forEach(function(element) {
        console.log(element);
        img.append( '<img src="'+element[0].url+'" class="casa-image" id="casa_image_'+element[0].id+'" style="width: 100%;">' );

      });
      hidden.val( JSON.stringify([ casaImageUploads.imageData ]) ).attr('disabled', 'disabled');

      toggleVisibility( 'ADD' );
  }
});
