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

function remove_site(){
    const skill_status = document.querySelectorAll(".skills_status .underline,.skills_status em")
    skill_status.forEach((item)=>{
        item.classList.add("default")
    })
}

setTimeout(()=>{
    remove_site();
}, 700)
// remove_site();
let first = document.querySelector(".skills_status .first .number");
let second = 15;
let third = 15;
let fourth = 15;
function plus_number(){
    // if (first === 80 ){
    //     setTimeout(()=>{
    //         first++;
    //         second++;
    //         third++;
    //         fourth++;
    //         plus_number()
    //     }, 300)
    //     return false
    // }
    if (first === 80 ){
        console.log("hahha")
        setTimeout(()=>{
            first++;
            plus_number()

        }, 300)

        return false
    }
}
plus_number()
document.body.onload = function (){
    setTimeout(function (){
        var preloader = document.getElementById('page-preloader');
        if(!preloader.classList.contains('done')){
            preloader.classList.add('done');
        }
    }, 700);
};

(function() {
   const anim_chart = document.querySelector()
})();
















