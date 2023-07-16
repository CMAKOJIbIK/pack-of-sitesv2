"use strict"
let test = 0;
let move_left = 0;
let move_top = 0;

function map(coordination) {
    const img = document.querySelector(".img_test")
// if(){
// return;
// }

    switch (coordination) {
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

function anim() {
    const header_text = document.querySelectorAll(".head_text span")
    header_text.forEach((item) => {
        item.addEventListener("mouseover", () => {
            add_class(item)
        })

    })
}

function add_class(item) {
    item.classList.add("anim_text")
    setTimeout(() => {
        item.classList.remove("anim_text")
    }, 300)
}

anim();

function remove_site() {
    const skill_status = document.querySelectorAll(".skills_status .underline,.skills_status em")
    skill_status.forEach((item) => {
        item.classList.add("default")
    })
}

setTimeout(() => {
    remove_site();
    plus_number_first()
    plus_number_second()
    plus_number_third()
    plus_number_fourth()
}, 700)
// remove_site();
let first = document.querySelector(".skills_status .first em");
let first_number = 0;
let second = document.querySelector(".skills_status .second em");
let second_number = 0;
let third = document.querySelector(".skills_status .third em");
let third_number = 0;
let fourth = document.querySelector(".skills_status .fourth em");
let fourth_number = 0;

function plus_number_first() {
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
    if (first_number < 80) {
        setTimeout(() => {
            first_number++;
            first.innerHTML = first_number + "%";

            plus_number_first()
        }, 17.5)

        return false
    }

}
function plus_number_second(){
    if (second_number < 70) {
        setTimeout(() => {
            second_number++;
            second.innerHTML = second_number + "%";

            plus_number_second()
        }, 20)

        return false
    }
}
function plus_number_third(){
    if (third_number < 55) {
        setTimeout(() => {
            third_number++;
            third.innerHTML = third_number + "%";

            plus_number_third()
        }, 25.45)

        return false
    }
}

function plus_number_fourth(){
    if (fourth_number < 25) {
        setTimeout(() => {
            fourth_number++;
            fourth.innerHTML = fourth_number + "%";

            plus_number_fourth()
        }, 56)

        return false
    }
}


document.body.onload = function (){
    setTimeout(function (){
        let preloader = document.getElementById('page-preloader');
        if(!preloader.classList.contains('done')){
            preloader.classList.add('done');
        }
    }, 700);
};

(function() {
   const anim_chart = document.querySelector()
})();
















