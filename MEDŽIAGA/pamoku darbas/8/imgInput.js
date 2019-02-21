let imgInput = document.querySelector('#img-input');
let galleryContainer = document.querySelector('.gallery-container');
imgInput.addEventListener('change', (e) => {
  let input = e.target;
  let files = input.files;
  console.log(files);

  // FileReader objekto palaikymas
  if (FileReader && files && files.length) {
    
    for (let i = 0; i < files.length; i++) {
      let fr = new FileReader();
      fr.readAsDataURL(files[i]);
      fr.addEventListener('load', (event) => {
        let imageContainer = document.createElement('div');
        imageContainer.className = 'img-container col-4';

        let image = document.createElement('div');
        image.className = 'image';
        image.style.backgroundImage = 'url(' + event.target.result + ')';

        imageContainer.append(image);
        galleryContainer.insertBefore(imageContainer, null);
      });
    }
  } else {
    alert('Neužsikrovė, dėl kažkokios klaidos');
  }
});

