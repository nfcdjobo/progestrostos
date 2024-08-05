
const inputCheckedBox = (event) => {

    const target = event.target;

    const id = target.id.split('_')[1];

    const prix_ = document.getElementById('prix_'+id);

    const price = Number(prix_.textContent);

    const div_command_number = document.getElementById('div_command_number_'+id);

    const command_number = document.getElementById('command_number_'+id);

    const sousMontant = document.getElementById('values_'+id);

    const div_values = document.getElementById('div_values_'+id);

    const values = document.getElementById('values_'+id);

    const quantite = document.getElementById('quantite_'+id);

    const quantity = Number(quantite.textContent);

    if(target.checked){

        div_command_number.hidden = false;

        div_values.hidden = false;

        command_number.addEventListener('input', ev => {

            if(quantity * price >= Number(ev.target.value) * price){

                values.value = Number(ev.target.value) * price;

            }else{

                ev.target.value = Number(ev.target.value.toString().slice(0, ev.target.value.toString().length - 1));

            }

            calculMontant();

        });

        sousMontant.addEventListener('input', ev => {
            ev.target.value = Number(command_number.value) * price;
        });

    }else{

        div_command_number.hidden = true;

        div_values.hidden = true;

        command_number.value = '';

        values.value = (Number(price) || 0) * (Number(command_number.value) || 0);

    }
    calculMontant();
}

const calculMontant = () => {

    const sousMontants = document.querySelectorAll('.sous-montant');

    const montant = document.getElementById('montant');

    const total = Array.from(sousMontants).reduce((accumulator, element) => {

        return accumulator + Number(element.value);

    }, 0);

    montant.textContent = total;

}

const IsActive = () =>{

    const isactive = document.querySelectorAll('.is-active');

    if(isactive.length){

        Array.from(isactive).forEach(element => {

            if(element.href === window.location.href){

                element.classList.add('bg-primary/5', 'before:!h-full', 'text-primary');

            }

        });

    }

}

setTimeout(() => {
    IsActive();
}, 300);

