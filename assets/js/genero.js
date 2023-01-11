function predictGender($this){
    var $gender = 'Indeterminado';
    var $inputNombre = $this;
    const formulario = $inputNombre.closest('form');
    console.log(formulario);
    var inputs = formulario.querySelectorAll('input');
    $completeName = $inputNombre.value;
    $name = $completeName.split(' ');
    $fName = $name[0];
    console.log($fName);
    fetch('https://api.genderize.io/?name=' + $fName).then(rep => rep.json()).then(json => predict = json).then(function(predict){
        if(predict.gender == 'male'){
            $gender = "Masculino";
        } else if(predict.gender == 'female'){
            $gender = "Femenino";
        }
    console.log($gender);

    // <input type="hidden" name="predictedGender" class="predictedGender" value="notDefined">
    var added = 0;
    inputs.forEach((item)=>{
        if(item.name == 'predictedGender'){
            item.value = $gender;
        }else if (added == 0){
            var genderInput = document.createElement('input');
            genderInput.type = "hidden";
            genderInput.name = "predictedGender";
            genderInput.value = $gender;
            formulario.appendChild(genderInput);
            added ++;
        }
    });


    //add it to a hidden value gender. (if exists) else create it.
    //FormulariosZ Should be able te detect whether exists or not and add it to formulario payload.

    return $gender;
});

}
