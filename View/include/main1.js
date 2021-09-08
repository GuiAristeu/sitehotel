let time = 5000,
currentImageIndex = 0,
images = document
      .querySelectorAll("#banner-principal img")
      max = images.length;
    
function nextImage(){
    images[currentImageIndex]
      .classList.remove("selected")
    
    currentImageIndex++

    if(currentImageIndex >= max)
      currentImageIndex = 0

      images[currentImageIndex]
      .classList.add("selected")
    }

function start() {
  setInterval(() =>{
      //troca de imagem
    nextImage()
  }, time)
}

window.addEventListener("load", start)




