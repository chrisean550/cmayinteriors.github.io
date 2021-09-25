document.getElementById("scroll-button").addEventListener("click", scroll)

function scroll()
{
    var landingHeight = document.getElementById('landing').offsetHeight
    var navHeight = document.getElementById('nav').offsetHeight
    var height = landingHeight - navHeight
    var i = 0

    while(i*1 < height)
    {
        i++
        moveBy(i, height)
    }
    
}

function moveBy(y)
{
    setTimeout(() => window.scrollTo(0,y*1), .75 * y);
}