//gallery filter
let filterText =  document.querySelectorAll('.liContainer');
let images = document.getElementsByClassName('fototGallery');

filterText.forEach(e =>
    e.addEventListener('click', ()=>{
        let text = e.innerText.toLowerCase();
        filterImages(text);
    })
);

function filterImages(imgAlt) {
     for(i of images){
         i.style.display='inline';
         if(i.alt !== imgAlt && imgAlt !== 'all'){
            i.style.display='none';
         }
     }

}


