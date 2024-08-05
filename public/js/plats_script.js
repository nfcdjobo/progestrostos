
const expect_elements = () => {

    const form_group_input = document.querySelectorAll('.form_group_input');

    Array.from(form_group_input).forEach(form_group => {

        const info_id = form_group.id.split('_');

        const plat_id = info_id[info_id.length - 1];

        const menu_id = info_id[info_id.length - 2];

        const quantite = document.getElementById('quantite_'+menu_id+'_'+plat_id);

        const prix = document.getElementById('prix_unitaire_'+menu_id+'_'+plat_id);

        const prix_total = document.getElementById('prix_total_'+menu_id+'_'+plat_id);

        quantite.addEventListener('input', (event) => calcul_sommes(event));

        prix.addEventListener('input', (event) => calcul_sommes(event));

        prix_total.addEventListener('input', (event) => calcul_sommes(event));

    })
}

const calcul_sommes = event => {

    const target = event.target;

    const info_id = target.id.split('_');

    const plat_id = info_id[info_id.length - 1];

    const menu_id = info_id[info_id.length - 2];

    const target_id = target.id;

    const value = target.value;

    const quantite = document.getElementById('quantite_'+menu_id+'_'+plat_id);

    const prix = document.getElementById('prix_unitaire_'+menu_id+'_'+plat_id);

    const prix_total = document.getElementById('prix_total_'+menu_id+'_'+plat_id);

    if(target_id.includes('quantite_')){

        prix_total.value = Number(prix.value) * Number(value);

    }else if(target_id.includes('prix_unitaire_')){

        prix_total.value = Number(quantite.value) * Number(value);

    }else{

        prix_total.value = Number(quantite.value) * Number(prix.value);
    }
}

const selectors = () => {

    const ajouter = document.querySelectorAll('.ajouter');

    Array.from(ajouter).forEach(element => {

        element.addEventListener('click', event => {

            const id_clicker = event.target.id;

            const id = id_clicker.split('_')[1];

            const form_for_menus = document.querySelectorAll('.form_for_menus');

            Array.from(form_for_menus).forEach(item => {

                if(item.id !== 'form_for_menus_'+id){

                    item.style.display = 'none';

                }else{

                    item.style.display = 'block';

                }
            });
        });
    });
}

setTimeout(() => {

    expect_elements();

    selectors();

}, 1000);

