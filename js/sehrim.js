
let yerismi= document.getElementById('yerismi');
let ileriButton= document.getElementById('ileri');
let geriButton= document.getElementById('geri');
let description= document.getElementById('description');
let resim= document.getElementById('resim');
let konum= document.getElementById('konum');
let indis =0    
yerismi.innerText=yerler[indis].baslik
description.innerText=yerler[indis].description
resim.src=yerler[indis].resim
konum.src=yerler[indis].konum

ileriButton.addEventListener('click', function() {
    if(indis<3)
    {
        indis++
    }
    else{
        indis=0
    }
        
    yerismi.innerText=yerler[indis].baslik
    description.innerText=yerler[indis].description
    resim.src=yerler[indis].resim
    konum.src=yerler[indis].konum

})

geriButton.addEventListener('click', function() {
    if(indis>=1)
    {
        indis--
    }
    else{
        indis=3
    }
        
    yerismi.innerText=yerler[indis].baslik
    description.innerText=yerler[indis].description
    resim.src=yerler[indis].resim
    konum.src=yerler[indis].konum

})