console.log('cargo script banner');

const arrowLeft = document.querySelector('.arrow--left');
const arrowRight = document.querySelector('.arrow--right');

const items = document.querySelectorAll('.banner-item');

const getActive  = function()
{
    let indexActive = -1;
    Array.prototype.forEach.call(items, function(item, index){
        if(item.classList.contains("active"))
        {
            indexActive = index;
        }
    })
    return indexActive;
}

const setAnimation = function(current,next)
{
    // quitamos la clase al elemento activo actual
    items[current].classList.remove('active')
    // asignamos clase activa al siguiente
    items[next].classList.add('active')
}

arrowRight.addEventListener('click',function(){
    // console.log('clic izq')
    // console.log('total de items', items.length)
    const indexActive = getActive()
    // console.log('index activo', indexActive)
    // console.log('elemento activo',items[indexActive])

    const nextIndex = 
        indexActive+1 >= items.length
            ? 0
            : indexActive+1
    // console.log('proximo indice', nextIndex)
    setAnimation(indexActive, nextIndex);
})
arrowLeft.addEventListener('click',function(){
    const indexActive = getActive()
    const prevIndex = 
    indexActive-1 <= 0
        ? items.length-1
        : indexActive-1
    setAnimation(indexActive, prevIndex);
})