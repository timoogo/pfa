

var allParticles = [];
var maxSplitCount = 3;
var useFill = false;
var cnv;

function Particle(x, y, splitCount) {
	
  this.splitCount = splitCount;
  this.age = 0;
  this.pos = new p5.Vector(x, y);
  this.vel = p5.Vector.random2D();
  this.vel.mult(map(this.splitCount, 0, maxSplitCount, 5, 2));
	this.killme=0;

  this.move = function() {
    this.vel.mult(0.9);
    this.pos.add(this.vel);
    
    if (this.age % 10 == 0 && this.splitCount > 0) {
			allParticles.push(new Particle(this.pos.x, this.pos.y, this.splitCount - 1));
			this.splitCount -= 1;
    }
		
		this.age++;
  }
}


function setup() {
  cnv =   createCanvas(windowWidth, windowHeight);
  var x = (windowWidth - width) / 2;
  var y = (windowHeight - height) / 2;
  cnv.position(x, y);
	colorMode(HSB, 360);
} 


function draw() {	

	clear()
  for (let i = allParticles.length - 1; i > -1; i--) {
        allParticles[i].move();
        if (allParticles[i].vel.mag() < 0.01){
          allParticles.splice(i, 1);
        }
      }
	
	if (allParticles.length > 0) {
		let data = Delaunay.triangulate(
			allParticles.map(function(pt) {return [pt.pos.x, pt.pos.y];})
		);
		
		strokeWeight(0.5);
		
		let distThresh = 75;
		
    for (let i = 0; i < data.length; i += 3) {
      let particle1 = allParticles[data[i]];
      let particle2 = allParticles[data[i + 1]];
      let particle3 = allParticles[data[i + 2]];
			
      if (particle1.pos.dist(particle2.pos) > distThresh ||
				  particle2.pos.dist(particle3.pos) > distThresh ||
				  particle1.pos.dist(particle3.pos) > distThresh) {
        continue;
      }
			let particleColor = color(180+sin(particle1.age*0.02 )*180,300,360,50*particle1.vel.mag());
			
	
		
			
			
      if (useFill) {
        fill(particleColor);
      } else {
        noFill();
      }
			
			stroke(particleColor);
		

			triangle(
				particle1.pos.x, particle1.pos.y, 
				particle2.pos.x, particle2.pos.y, 
				particle3.pos.x, particle3.pos.y);
		}

    }	
	
}


function mouseMoved() {
  allParticles.push(new Particle(mouseX, mouseY, maxSplitCount));
}


function keyPressed() {
	useFill = !useFill;
}

function centerCanvas(height_offset) {
  cnv.position(0, height_offset );
}

function windowResized() {
  centerCanvas(0);
}

function mouseWheel(event) {
 
  console.log($(window).scrollTop());
  centerCanvas($(window).scrollTop());
}
/* -----------------------------------------------
On veut bloquer le scroll avec les touches 32 a 40
[(space)	32, page up	33, page down	34, end	35, home 36, left arrow	37, up arrow	38, right arrow	39, down arrow	40

  Liste complète disponible ici : [https://bit.ly/2zhnn3k]
 ----------------------------------------------- */

var keyToPrevent = new Array(32,33,34,35,36,37,38,39,40);
$(document).ready(() => {
  $(document).keydown(function(e) {
    var key = e.which;
     if($.inArray(key,keyToPrevent) > -1) {
         e.preventDefault();
         return false;
     }
     return true;
});
  });