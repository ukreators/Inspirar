
var slide = new Array() // create new array to preload images
slide[0] = new Image() // create new instance of image object
slide[0].src = "images/102.jpg"

slide[1] = new Image()
slide[1].src = "images/101.jpg"

slide[2] = new Image()
slide[2].src = "images/121204113925_building.jpg"

slide[3] = new Image()
slide[3].src ="images/maxresdefault.jpg"

slide[4] = new Image()
slide[4].src ="images/maxresdefault (1).jpg"

slide[5] = new Image()
slide[5].src = "images/104.jpg"

slide[6] = new Image()
slide[6].src = "images/105.jpg"

slide[7] = new Image()
slide[7].src = "images/106.jpg"

slide[8] = new Image()
slide[8].src = "images/107.jpg"

slide[9] = new Image()
slide[9].src = "images/108.jpg"

var i=0

function slider()
{
 document.getElementById("frame").src = slide[i].src //change source
 i++
 if (i>9)
  i=0
 

 setTimeout("slider()",2500) //timer of 2.5s
}

slider()