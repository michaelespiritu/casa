//console.log(casaImageUploads);

var slideIndex = 1;
showImages();
showDivs(slideIndex);

function showImages(){

  var images = casaImageUploads.imageData;
  if (  casaImageUploads.imageData === "" || casaImageUploads.imageData.length == 0 ) {
      jQuery('.casa-slider-images').hide();
  } else {
      images.forEach(function(element) {
        console.log(element);
        jQuery('.casa-images').prepend( '<img src="'+element[0].url+'" class="casa-image" id="casa_image_'+element[0].id+'" >' );
      });
  }

}

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("casa-image");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}
