
const checkedInput = () => {
    Array.from(document.querySelectorAll("input[type='checkbox']")).map(item => {
        item.addEventListener("change", (event) => displayInput(event));
    })
}

const displayInput = (e) => {
    const id = e.target.id.split('_')[1];
    const isChecked = e.target.checked;
    const quantite_ = document.getElementById(`quantite_${id}`);
    const montant_ = document.getElementById(`montant_${id}`);
    if(!isChecked){
        quantite_.value = '';
        quantite_.hidden = true;
        montant_.value = '';
        montant_.hidden = true;
        e.target.required = false;
        montant_.required = false;
        quantite_.required = false;
    }else{
        quantite_.hidden = false;
        montant_.hidden = false;
        e.target.required = true;
        quantite_.addEventListener("input", event => varifyAndCalculValueOfInput(event))
    }
}

const varifyAndCalculValueOfInput = (e) => {
    const id = e.target.id.split('_')[1];
    const max = e.target.max;
    const value = e.target.value;
    const montant_ = document.getElementById(`montant_${id}`);
    const prix_ = document.getElementById(`prix_${id}`);
    if(Number(value) > Number(max)){
        e.target.value = value.slice(0, value.length - 1);
    }

    montant_.value = Number(prix_.textContent) * Number(e.target.value);

    if(Number(e.target.value)){
        e.target.required = true;
        montant_.required = true;
    }else{
        e.target.required = false;
        montant_.required = false;
    }

}

const submitAction = () => {
    const submitData = document.getElementById('submitData');
    submitData.addEventListener("click", espectInputInReqired)
}

const espectInputInReqired = () => {
    const allInputInRequired = document.querySelectorAll("input:required, select:required");
    const formData = Array.from(allInputInRequired).filter(item => item.value);

    if(formData.length > 2 && formData.some(item => item.id.includes('quantite')) && formData.some(item => item.id.includes('montant')) && formData.some(item => item.id.includes('date')) && formData.some(item => item.id.includes('espace')) && formData.some(item => item.id.includes('repas'))){
        const selectForm = document.getElementById("formToSave");
        formData.forEach(item => {
            selectForm.append(item);
        })

        selectForm.submit()
    }
}

checkedInput();

submitAction();



// [
//    "espace" => "1",
//    "date" => "Jun 24, 2024",
//    "detail" => [
//         [
//             "quantite" => "12",
//             "montant" => "11998800",
//             "article" => "1"
//         ],
//         [
//             "quantite" => "4",
//             "montant" => "6000",
//             "article" => "2"
//         ],
//         [
//             "quantite" => "5",
//             "montant" => "10000",
//             "article" => "3"
//         ]
//    ]
// ]
