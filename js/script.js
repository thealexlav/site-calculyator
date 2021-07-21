//глобальные переменные
let nums = document.querySelectorAll('.btn_key_num');
let displayInfo = document.getElementById('displayInfo');
let oper = document.querySelectorAll('.btn_key_oper')
let tbl= document.getElementById('tbl')
let g=0;
let calcImg = document.getElementById('calculate');
let step = 0;
let flag =true;




//перебираем кнопки с цифрами и операциями , добавляем слушетеля  на нажатие  по кнопокам
for(let y=0; y<nums.length;y++){
    nums[y].addEventListener("click",()=>{
    displayInfo.innerHTML += +nums[y].value;
    });
}

for(let i=0;i<oper.length;i++){
    oper[i].addEventListener("click", ()=>{
        displayInfo.innerHTML += oper[i].value;
    });
}
// чистим поле результата
function cleanValue() {
    return displayInfo.innerHTML = " ";
    
}
//вычисляем операцию
function calcValue() {
   return  displayInfo.innerHTML=eval(displayInfo.innerHTML);
    
}
//выводим в таблицу последнюю операцию
function getLastValue() {
    g++;
    tbl.lastElementChild.innerHTML+=`<th>${g}</th><td>${displayInfo.innerHTML}</td>`
}

//вычисляем логарифмы
function calcLog(){
    let result= Math.log(Number(displayInfo.innerHTML));
    displayInfo.innerHTML = result;
}

//вычисляем квадратный корень
function calcSqrt(){
    let result= Math.sqrt(Number(displayInfo.innerHTML));
    displayInfo.innerHTML = result;
}

//Очистка истории операций
function cleanHistory(){  
    document.getElementById('history').lastChild.remove();
}

//анимация
function animation(){
    // условие разворота изображение по горизонтальной оси
    if(window.innerWidth - 300>step && flag){
        calcImg.style.transform = "scaleX(-1)";
        step +=1;
    }else{
        calcImg.style.transform = "scaleX(1)";
        step -=1;
        flag = step ==0 ? true: false;
    }
    //движение картинки
    calcImg.style.left = step + "px";
}
setInterval(animation, 10);


// прокрутка до элемента

function scrollToBtn(){
	document.getElementById('btn_jum').scrollIntoView({
		block: "center", 
		behavior: "smooth",
		inline:"nearest"
	});
}

