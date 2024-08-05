

const my_buttons = document.querySelectorAll('.edited');

const action = event => {
    const id = event.target.id.split('_')[1];
    const formulaire = document.getElementById('formulaire_'+id);
    let inputs = event.target.closest('tr').querySelectorAll('input, select');

    inputs = Array.from(inputs).filter(item => item.value);
    if(inputs.length){
        inputs.forEach(item => {
            if(item.type === "checkbox"){
                if(item.checked){
                    item.value = "ACTIF";
                }else{
                    item.value = "INACTIF";
                }
            }
            formulaire.append(item);
        })
        formulaire.submit();
    }
}

my_buttons.forEach(item => item.addEventListener('click', action))
