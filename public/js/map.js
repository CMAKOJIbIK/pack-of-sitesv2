let test = 0;
let move_left = 0;
let move_top = 0;

function map(coordination) {
    const img = document.querySelector(".img_test")
// if(){
// return;
// }

switch (coordination){
    case 0:
        move_left -= 100
        break;
    case 1:
        move_top -= 100
        break;
    case 2:
        move_left += 100
        break;
    case 3:
        move_top += 100
        break;
}

    // if (coordination === 0) {
    //     move_left -= 100
    // }
    // if (coordination === 1) {
    //     move_top -= 100
    // }
    // if (coordination === 2) {
    //     move_left += 100
    // }
    // if (coordination === 3) {
    //     move_top+= 100
    // }
    img.style.top = move_top + "px"
    img.style.left = move_left + "px"
    console.log(coordination)
    // if(test >= 500){
    //     img.style.left = test+"px";
    //
    // }
    // else{
    //     img.style.left = 0+"px";
    // }

    console.log(move_left + 'px')



}
function anim(){
    const header_text = document.querySelectorAll(".head_text span")
    header_text.forEach( (item)=>{
       item.addEventListener("mouseover", ()=>{
           add_class(item)
       })

    })
}
function add_class(item){
    item.classList.add("anim_text")
    setTimeout(()=>{
        item.classList.remove("anim_text")
    },300)
}
anim();

