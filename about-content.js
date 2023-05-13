const boxes = document.querySelectorAll('.line, .about-part')
       window.addEventListener('scroll',checkBoxes)
       checkBoxes()
       
       function checkBoxes(callback){
         const triggerBottom = window.innerHeight / 5 * 4
         boxes.forEach(box =>{
           const boxTop = box.getBoundingClientRect().top
               if(boxTop < triggerBottom){
             box.classList.add('show')

           }  else{
             box.classList.remove('show')
           }
         }) }


// menu links responsive
     
function myFunction() {
  var x = document.getElementById("nav");
  if (x.className === "navigation") {
    x.className += " responsive";
  } else {
    x.className = "navigation";
  }

  var y = document.getElementById("lg");
  if (y.className === "logo") {
    y.className += " responsive";
  } else {
    y.className = "logo";
  }

  var z = document.getElementById("desc-head");
  if (z.className === "description_header") {
    z.className += " responsive";
  } else {
    z.className = "description_header";
  }

}
