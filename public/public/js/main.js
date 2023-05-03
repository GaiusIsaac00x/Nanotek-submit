
    let option = document.querySelector(".hiddena").innerHTML;

    choiced();
    
    
    
    function choiced (){
        let selectedArray= new Array();
        let selectOptions = document.getElementById('choice');
        let hidden = selectOptions.options[selectOptions.selectedIndex].text;
        let choice = document.getElementById("input")

        for (i = 0; i < selectOptions.options.length; i++) {
            selectedArray[i] = selectOptions.options[i].value;
        }

        if (selectedArray[1] == hidden) {
            choice.value = option;
        } else {
            choice.value = " ";
        }
    }
