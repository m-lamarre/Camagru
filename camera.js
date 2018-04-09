var video = document.querySelector("#video");
var file = document.getElementById("file");
var canvas = document.getElementById("canvas");
var context = canvas.getContext('2d');
var fluttershy = document.getElementById("fluttershy");
var apple = document.getElementById("apple");
var rarity = document.getElementById("rarity");
var pinkie = document.getElementById("pinkie");
var rainbow = document.getElementById("rainbow");
var twilight = document.getElementById("twilight");
var horn = document.getElementById("horn");
var sunglasses = document.getElementById("sunglasses");

//tap into webcam without a plugin
navigator.getUserMedia = navigator.getUserMedia || 
                         navigator.webkitGetUserMedia || 
                         navigator.mozGetUserMedia || 
                         navigator.msGetUserMedia || 
                         navigator.oGetUserMedia;

//gaining access to an input device
if (navigator.getUserMedia) {
    navigator.getUserMedia({video: true}, video_feed, video_error);
}

//feed Blob URL obtained from feed representing the webcam
function video_feed(feed) {
    video.src = window.URL.createObjectURL(feed);
}

function video_error(e) {
    console.log('Error!', e);
}

function take_photo() {
    context.drawImage(video, 0, 0, canvas.width, canvas.height);
    console.log("Photo Taken");
}

function draw_fluttershy() {
    context.drawImage(fluttershy, 95, 10, 135, 135);
    console.log("Fluttershy!");
}

function draw_apple() {
    context.drawImage(apple, 95, 10, 135, 135);
    console.log("Apple Jack!");
}

function draw_rarity() {
    context.drawImage(rarity, 93, 10, 135, 135);
    console.log("Rarity!");
}

function draw_pinkie() {
    context.drawImage(pinkie, 86, 7, 140, 125);
    console.log("Pinkie-Pie!");
}

function draw_rainbow() {
    context.drawImage(rainbow, 90, 13, 145, 100);
    console.log("Rainbow Dash!");
}

function draw_twilight() {
    context.drawImage(twilight, 100, 4, 145, 115);
    console.log("Twilight Sparkle!");
}

function draw_horn() {
    context.drawImage(horn, 140, 3, 30, 40);
    console.log("Unicorn Horn!");
}

function draw_sunglasses() {
    context.drawImage(sunglasses, 125, 45, 80, 20);
    console.log("Sunglasses!");
}

function upload_photo() {
    context.drawImage(file, 0, 0, canvas,width, canvas.height);
    console.log("add");
}