
const create_html_form = ()=>{

    let addInputForm = document.querySelectorAll('.form_group_input');

    let delete_form = document.querySelectorAll('.delete_form');

    if (Array.from(document.getElementById('in_the_div').querySelectorAll('input')).every(item => item.value)){

        const new_balise = document.createElement('div');

        new_balise.className = "mb-4.5 flex flex-col gap-6 xl:flex-row form_group_input";

        const new_element_id = addInputForm.length+1;

        new_balise.id = `form_group_input_${new_element_id}`;

        const format_html = `
            <div class="w-full xl:w-1/2">
                <label for="libelle_${new_element_id}" class="mb-3 block text-sm font-medium text-black dark:text-white"> Nom du Plat </label>
                <input type="text" id="libelle_${new_element_id}" name="libelle_${new_element_id}" required="" placeholder="Libelle produit" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
            </div>
            <div class="w-full xl:w-1/2">
                <label for="prix_unitaire_${new_element_id}" class="mb-3 block text-sm font-medium text-black dark:text-white"> Prix Unitaire <sup style="color: blue;">(XOF)</sup></label>
                <input type="number" min="1" id="prix_unitaire_${new_element_id}" name="prix_unitaire_${new_element_id}" required="" placeholder="Entrer le prix unitaire " class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
            </div>`;

        new_balise.innerHTML = format_html;

        const btn_delete = document.createElement('div');

        btn_delete.className = "flex flex-col mb-6 border-b border-gray-300 pb-6 rounded-sm bg-white dark:bg-boxdark sm:flex-row sm:items-center sm:justify-between delete_form";

        btn_delete.id = `delete_form_${new_element_id}`;

        btn_delete.innerHTML = `<button type="button" class="text-meta-1 hover:text-primary btn-deleted" id="btn-delete-form_${new_element_id}">
            <svg class="mx-auto fill-current" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.8094 3.02498H14.1625V2.4406C14.1625 1.40935 13.3375 0.584351 12.3062 0.584351H9.65935C8.6281 0.584351 7.8031 1.40935 7.8031 2.4406V3.02498H5.15623C4.15935 3.02498 3.33435 3.84998 3.33435 4.84685V5.8781C3.33435 6.63435 3.78123 7.2531 4.43435 7.5281L4.98435 18.9062C5.0531 20.3156 6.22185 21.4156 7.63123 21.4156H14.3C15.7093 21.4156 16.8781 20.3156 16.9469 18.9062L17.5312 7.49372C18.1844 7.21872 18.6312 6.5656 18.6312 5.84373V4.81248C18.6312 3.84998 17.8062 3.02498 16.8094 3.02498ZM9.38435 2.4406C9.38435 2.26873 9.52185 2.13123 9.69373 2.13123H12.3406C12.5125 2.13123 12.65 2.26873 12.65 2.4406V3.02498H9.41873V2.4406H9.38435ZM4.9156 4.84685C4.9156 4.70935 5.01873 4.57185 5.1906 4.57185H16.8094C16.9469 4.57185 17.0844 4.67498 17.0844 4.84685V5.8781C17.0844 6.0156 16.9812 6.1531 16.8094 6.1531H5.1906C5.0531 6.1531 4.9156 6.04998 4.9156 5.8781V4.84685V4.84685ZM14.3344 19.8687H7.6656C7.08123 19.8687 6.59998 19.4218 6.5656 18.8031L6.04998 7.6656H15.9844L15.4687 18.8031C15.4 19.3875 14.9187 19.8687 14.3344 19.8687Z" fill=""></path>
                <path d="M11 11.1375C10.5875 11.1375 10.2094 11.4812 10.2094 11.9281V16.2937C10.2094 16.7062 10.5531 17.0843 11 17.0843C11.4125 17.0843 11.7906 16.7406 11.7906 16.2937V11.9281C11.7906 11.4812 11.4125 11.1375 11 11.1375Z" fill=""></path>
                <path d="M13.7499 11.825C13.303 11.7906 12.9593 12.1 12.9249 12.5469L12.7187 15.5719C12.6843 15.9844 12.9937 16.3625 13.4405 16.3969C13.4749 16.3969 13.4749 16.3969 13.5093 16.3969C13.9218 16.3969 14.2655 16.0875 14.2655 15.675L14.4718 12.65C14.4718 12.2031 14.1624 11.8594 13.7499 11.825Z" fill=""></path>
                <path d="M8.21558 11.825C7.80308 11.8594 7.45933 12.2375 7.49371 12.65L7.73433 15.675C7.76871 16.0875 8.11246 16.3969 8.49058 16.3969C8.52496 16.3969 8.52496 16.3969 8.55933 16.3969C8.97183 16.3625 9.31558 15.9844 9.28121 15.5719L9.04058 12.5469C9.04058 12.1 8.66246 11.7906 8.21558 11.825Z" fill=""></path>
            </svg>
        </button>`;


        delete_form[delete_form.length-1].parentNode.insertBefore(new_balise, delete_form[delete_form.length-1].nextSibling);

        new_balise.parentNode.insertBefore(btn_delete, new_balise.nextSibling);

        new_balise.scrollIntoView({behavior: 'smooth', block: 'start'});

        delete_html_form();

        document.getElementById('form_for_menus').scrollIntoView({behavior: 'smooth', block: 'end'});
    }
};

const delete_html_form = () => {

    const btn_deleted = document.querySelectorAll('.btn-deleted');

    Array.from(btn_deleted).map(item => {

        const composer_id = item.id.split("_");

        const id = composer_id[composer_id.length - 1];

        item.addEventListener('click', event => {

            const form_group_input = document.querySelectorAll('.form_group_input');

            if(form_group_input.length > 1){

                const delete_form = event.target.closest('div');

                const form_group_input_id = document.getElementById(`form_group_input_${id}`);

                form_group_input_id.remove();

                delete_form.remove();

            }

        });

    });
}

if(document.getElementById('dynamicButton')){
    document.getElementById('dynamicButton').addEventListener('click', create_html_form);
}

const btn_submited1 = document.getElementById('btn-submited1');
const btn_submited2 = document.getElementById('btn-submited2');

const data_formulare = document.getElementById('data_formulare');

const getRequiredFields = form => {
    return Array.from(form.querySelectorAll('input, select, textarea')).filter(field => field.required);
}

const save_form = (button, form) => {
    if(button && form) {
        button.addEventListener('click', () => {
            const requireds = getRequiredFields(form);
            if((requireds.length && requireds.every(item => item.value)) || !requireds.length){
                form.submit();
                // data_formulare.submit();
            }
        });
    }
}

const show_or_close_listing = event => {
    const target = event.target;

    const text_content_of_target = target.textContent;

    const listing = document.getElementById('listing');

    if(text_content_of_target.includes('Voir la Liste des Menus')){

        listing.style.display = 'block';

    }else{

        listing.style.display = 'none';

    }

    listing.scrollIntoView({ behavior: 'smooth', block: 'end' });
}

const toggle_button = document.getElementById('toggle_button');

const toggle_button_close = document.getElementById('toggle_button_close');



if(toggle_button){
    toggle_button.addEventListener('click', event => show_or_close_listing(event));
}

if(toggle_button_close){
    toggle_button_close.addEventListener('click', event => show_or_close_listing(event));
}


save_form(btn_submited1, data_formulare);
save_form(btn_submited2, data_formulare);

delete_html_form();




