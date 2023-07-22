function  openForm() {
    var cols = document.getElementsByClassName('form-popup');
    for(i = 0; i < cols.length; i++) {
      cols[i].style.display = "block";
    }
  }

function  closeForm() {
    var cols = document.getElementsByClassName('form-popup');
    for(i = 0; i < cols.length; i++) {
      cols[i].style.display = "none";
    }
}

function  buttonClick(e){
    e.stopPropagation()
}

var x = 0;

function  switchImageForward(block){
    var fatherBlock = block.parentNode.parentNode.parentNode.parentNode.parentNode;
    var name = fatherBlock.getAttribute('name');
    var blockImage = fatherBlock.querySelector(".productImageInside");
    var oldImage =  fatherBlock.querySelector(".smallImage" + x);
    oldImage.style.opacity = 0.5;
    x++;
    if (x>3)
        x = 0;
    var newImage =  fatherBlock.querySelector(".smallImage" + x);
    newImage.style.opacity = 1;
    blockImage.src = "../images/" + name + "_" + x + ".png";
}
function  switchImageBack(block){
  var fatherBlock = block.parentNode.parentNode.parentNode.parentNode.parentNode;
  var name = fatherBlock.getAttribute('name');
  var blockImage = fatherBlock.querySelector(".productImageInside");
  var oldImage =  fatherBlock.querySelector(".smallImage" + x);
  oldImage.style.opacity = 0.5;
  x--;
  if (x==-1)
      x = 3;
  var newImage =  fatherBlock.querySelector(".smallImage" + x);
  newImage.style.opacity = 1;
  blockImage.src = "../images/" + name + "_" + x + ".png";
}
function  switchImagePageForward(block){
  var fatherBlock = block.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode;
  var name = fatherBlock.getAttribute('name');
  var blockImage = fatherBlock.querySelector(".imageProductProductInside");
  var oldImage =  fatherBlock.querySelector(".productImageProduct2inside" + x);
  oldImage.style.opacity = 0.5;
  x++;
  if (x>3)
      x = 0;
  var newImage =  fatherBlock.querySelector(".productImageProduct2inside" + x);
  newImage.style.opacity = 1;
  blockImage.src = "../images/" + name + "_" + x + ".png";
}
function  switchImagePageBack(block){
var fatherBlock = block.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode;
var name = fatherBlock.getAttribute('name');
var blockImage = fatherBlock.querySelector(".imageProductProductInside");
var oldImage =  fatherBlock.querySelector(".productImageProduct2inside" + x);
oldImage.style.opacity = 0.5;
x--;
if (x==-1)
    x = 3;
var newImage =  fatherBlock.querySelector(".productImageProduct2inside" + x);
newImage.style.opacity = 1;
blockImage.src = "../images/" + name + "_" + x + ".png";
}

function  switchImagePage(block, i){
  var fatherBlock = block.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode;
  var name = fatherBlock.getAttribute('name');
  var blockImage = fatherBlock.querySelector(".imageProductProductInside");
  var oldImage =  fatherBlock.querySelector(".productImageProduct2inside" + x);
  oldImage.style.opacity = 0.5;
  x = i;
  var newImage =  fatherBlock.querySelector(".productImageProduct2inside" + x);
  newImage.style.opacity = 1;
  blockImage.src = "../images/" + name + "_" + x + ".png";
  }

function  switchImage(block, i){
  var fatherBlock = block.parentNode.parentNode.parentNode.parentNode.parentNode;
  var name = fatherBlock.getAttribute('name');
  var blockImage = fatherBlock.querySelector(".productImageInside");
  var oldImage =  fatherBlock.querySelector(".smallImage" + x);
  oldImage.style.opacity = 0.5;
  x = i;
  var newImage =  fatherBlock.querySelector(".smallImage" + x);
  newImage.style.opacity = 1;
  blockImage.src = "../images/" + name + "_" + x + ".png";
}