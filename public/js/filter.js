const classFilter = document.querySelectorAll(".card")

function filter(filter) {
    console.log(filter)
    const allElement = document.querySelectorAll(".season .card li")
    allElement.forEach((element)=>{
        element.classList.add('hidden');

    })

        const classAround = document.querySelectorAll('.season .card .' + filter)
        classAround.forEach((element)=>{
            element.classList.remove('hidden');
            console.log(element);

        })



    // console.log(classFilter)
}
