// ---------------------About animation--------------------

const circle = document.querySelector('.circle')
const plus = document.querySelector('.plus')
const team = document.querySelectorAll('.member')

let check = true;
plus.addEventListener('click', function () { 
	if (check == true) {
        plus.style.transform="rotate(45deg)"
      
        check = false
        team.forEach((member, i) => {
            let angle = (360/team.length) * i  
            console.log(angle);
            member.style.transform= `rotate(${angle}deg) translate(150px) rotate(-${angle}deg)`

        });
    } else {

        plus.style.transform="rotate(0deg)"
        check = true
        team.forEach((member, i) => {
            let angle = 360/team.length*i   
            member.style.transform= `rotate(0deg) translate(0)`

        });

    }
	
});



