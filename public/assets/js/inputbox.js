let formGroups = document.querySelectorAll('.form-group');
formGroups.forEach(formGroup => {
    let formGroupInput = formGroup.querySelector('.form-group-input');
    let formGroupIcon = formGroup.querySelector('.form-group-icon');

    if(formGroupInput.value != ""){
        formGroupIcon.classList.add('text-gray-600');
    }
    formGroupInput.addEventListener('focus',function(){
        formGroupIcon.classList.add('text-gray-600');
    });

    formGroupInput.addEventListener('blur',()=>{
        if(formGroupInput.value != ""){
            formGroupIcon.classList.add('text-gray-600');
        }else{
            formGroupIcon.classList.remove('text-gray-600');
        }
    });
});