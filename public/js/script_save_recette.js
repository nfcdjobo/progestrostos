const DumptHtml = () => {
    const InputChecbox = document.querySelectorAll('.inputChecbox');
    InputChecbox.forEach(item => {
        item.addEventListener('change', event => Activated(event));
    })
}

const Activated = el => {
    const id = el.target.id.split('_')[1];
    const quantite = document.getElementById(`quantite_${id}`);
    const prix = document.getElementById(`prix_unitaire_${id}`);
    const montant = document.getElementById(`montant_${id}`);
    if(el.target.checked){
        [quantite, prix, montant].map(item => item.hidden = false);
    }else{
        [quantite, prix, montant].map(item => item.hidden = true);
    }
    [quantite, prix].forEach(item => item.addEventListener('input', event => CalculerMontantTotal(event, id, quantite, montant)))
}

const CalculerMontantTotal = (event, ID, inputQuantite, inputMontant) => {
    const target = event.target;
    if(target.id.includes('quantite')){
        inputMontant.value = Math.ceil(Number(target.value) * Number(inputMontant.value)).toLocaleString('en-US', { minimumFractionDigits: 0 });
    }else{
        inputMontant.value = Math.ceil(Number(target.value) * Number(inputQuantite.value)).toLocaleString('en-US', { minimumFractionDigits: 0 });
    }
}

const SendData = () => {

    const Inputs = Array.from(document.querySelectorAll("tbody input:checked"));
    const DataInupt = [];

    Inputs.forEach(item => {
        const id = item.id.split("_")[1];
        const quantite = document.getElementById(`quantite_${id}`);
        const prix_unitaire = document.getElementById(`prix_unitaire_${id}`);
        if(Number(quantite.value) && Number(prix_unitaire.value)){
            DataInupt.push(item, quantite, prix_unitaire);
        }
        console.log(DataInupt);
    })

    if(DataInupt.length){
        const FormToSave = document.getElementById("FormToSave");
        DataInupt.forEach(item => {
            FormToSave.append(item);
        })

        FormToSave.submit()
    }

}

const InputSubmit = document.getElementById("submitData");

if(InputSubmit){
    InputSubmit.addEventListener("click", SendData);
}


DumptHtml();
