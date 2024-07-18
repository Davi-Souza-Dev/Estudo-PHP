const btnNext = [...document.querySelectorAll(".btnNext")];
const infoContainer = [...document.querySelectorAll(".infoContainer")];
let indexInfo = 0;
btnNext.map((btn)=>{
    btn.addEventListener("click",(evt)=>{
        infoContainer[indexInfo].classList.toggle("hide");
        indexInfo++;
        // infoContainer.map((container,index)=>{
        //     if(index == indexInfo){
        //         container.classList.toggle("hide");
        //     }else{
        //         container.classList.toggle("hide");
        //     }
        // });
        infoContainer[indexInfo].classList.toggle("hide");
    });
});