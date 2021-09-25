let images = document.getElementsByClassName("projects-image")
let overlay = document.getElementById("overlay")

overlay.addEventListener("click", shrink)

for(image in images){
    try{
        images[image].addEventListener("click", expand)
    }catch(e){        
        //do nothing
    }
}

function expand(e)
{
    if(document.body.clientWidth > 768)
    {
        e.target.classList.remove('projects-image')
        e.target.classList.add('projects-image-expanded')
        overlay.style.visibility = 'visible'
    }
}

function shrink()
{
    let expanded = document.getElementsByClassName('projects-image-expanded')[0]
    expanded.classList.remove('projects-image-expanded')
    expanded.classList.add('projects-image')
    overlay.style.visibility = 'hidden'
}