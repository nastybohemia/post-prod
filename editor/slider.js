/* Create a variable for the slider object 
var color_slider; 
// Create a variables for the images
let colorImg;
let rawImg;
//let value = alpha(rawImg);
  
function setup() { 
    
    // Create a canvas of given size 
    let canvas = createCanvas(windowWidth/1.5, windowHeight/1.5); 
    canvas.position(windowWidth/6, windowHeight/6);
      
    // Create the slider 
    color_slider = createSlider(0, 900, 450); 
      
    // Set the position of slider on the canvas 
    color_slider.position(0, 200); 
    color_slider.style('width', '900px');
    
    //images
    colorImg = loadImage ('works/model-2-color.png');
    rawImg = loadImage ('works/model-2-original.png');
    //colorImg.size(200px,200px);
    //fill(value);
    colorImg.mask(rawImg);
    imageMode(CENTER);
} 
  
function draw() { 
    // Get the value of the slider 
    // using .value() function 
    col = color_slider.value(); 
    image(colorImg,0,0);
    background(colorImg); 
    //color1.resize(col,550);
    imageMode(CENTER);
    image(colorImg, width/2, height/2);
    //image(colorImg, col, height/2);
} 

function windowResized() {
  resizeCanvas(windowWidth, windowHeight);
}*/

// Call & init
$(document).ready(function(){
  $('.ba-slider').each(function(){
    var cur = $(this);
    // Adjust the slider
    var width = cur.width()+'px';
    cur.find('.resize img').css('width', width);
    // Bind dragging events
    drags(cur.find('.handle'), cur.find('.resize'), cur);
  });
});

// Update sliders on resize. 
// Because we all do this: i.imgur.com/YkbaV.gif
$(window).resize(function(){
  $('.ba-slider').each(function(){
    var cur = $(this);
    var width = cur.width()+'px';
    cur.find('.resize img').css('width', width);
  });
});

function drags(dragElement, resizeElement, container) {
	
  // Initialize the dragging event on mousedown.
  dragElement.on('mousedown touchstart', function(e) {
    
    dragElement.addClass('draggable');
    resizeElement.addClass('resizable');
    
    // Check if it's a mouse or touch event and pass along the correct value
    var startX = (e.pageX) ? e.pageX : e.originalEvent.touches[0].pageX;
    
    // Get the initial position
    var dragWidth = dragElement.outerWidth(),
        posX = dragElement.offset().left + dragWidth - startX,
        containerOffset = container.offset().left,
        containerWidth = container.outerWidth();
 
    // Set limits
    minLeft = containerOffset + 10;
    maxLeft = containerOffset + containerWidth - dragWidth - 10;
    
    // Calculate the dragging distance on mousemove.
    dragElement.parents().on("mousemove touchmove", function(e) {
    	
      // Check if it's a mouse or touch event and pass along the correct value
      var moveX = (e.pageX) ? e.pageX : e.originalEvent.touches[0].pageX;
      
      leftValue = moveX + posX - dragWidth;
      
      // Prevent going off limits
      if ( leftValue < minLeft) {
        leftValue = minLeft;
      } else if (leftValue > maxLeft) {
        leftValue = maxLeft;
      }
      
      // Translate the handle's left value to masked divs width.
      widthValue = (leftValue + dragWidth/2 - containerOffset)*100/containerWidth+'%';
			
      // Set the new values for the slider and the handle. 
      // Bind mouseup events to stop dragging.
      $('.draggable').css('left', widthValue).on('mouseup touchend touchcancel', function () {
        $(this).removeClass('draggable');
        resizeElement.removeClass('resizable');
      });
      $('.resizable').css('width', widthValue);
    }).on('mouseup touchend touchcancel', function(){
      dragElement.removeClass('draggable');
      resizeElement.removeClass('resizable');
    });
    e.preventDefault();
  }).on('mouseup touchend touchcancel', function(e){
    dragElement.removeClass('draggable');
    resizeElement.removeClass('resizable');
  });
}