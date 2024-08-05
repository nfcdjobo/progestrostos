
const tdaction = document.querySelectorAll('.tdaction');

if(tdaction.length){

    Array.from(tdaction).map(item => {

        item.addEventListener('click', (event, route='stocke_restauration') => {

            let id = item.id.split('_')[1];

            if(item.textContent === 'Choisir ?'){

                item.innerHTML = `<div class="col-span-1 relative">
                    <div x-data="{ isOpen: false }">
                        <button @click.prevent="isOpen = !isOpen" class="float-right inline-flex items-center gap-1.5 rounded-md px-3 py-1.5 text-sm text-black shadow-11 hover:text-primary dark:bg-meta-4 dark:text-white dark:shadow-none">
                            Choisir...
                            <svg class="fill-current" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.00039 11.4C7.85039 11.4 7.72539 11.35 7.60039 11.25L1.85039 5.60005C1.62539 5.37505 1.62539 5.02505 1.85039 4.80005C2.07539 4.57505 2.42539 4.57505 2.65039 4.80005L8.00039 10.025L13.3504 4.75005C13.5754 4.52505 13.9254 4.52505 14.1504 4.75005C14.3754 4.97505 14.3754 5.32505 14.1504 5.55005L8.40039 11.2C8.27539 11.325 8.15039 11.4 8.00039 11.4Z" fill=""></path>
                            </svg>
                        </button>
                        <div @click.outside="isOpen = false" x-show="isOpen" class="absolute right-0 top-full z-1 mt-1 w-full max-w-39.5 rounded-[5px] bg-white py-2.5 shadow-12 dark:bg-boxdark" style="">
                            <a href="{{route('show.${route}', ${id})}}" class="flex w-full px-4 py-2 text-sm hover:bg-whiter hover:text-primary dark:hover:bg-meta-4">
                                Details
                            </a>
                            <a href="{{route('edite.${route}', ${id})}}" class="flex w-full px-4 py-2 text-sm hover:bg-whiter hover:text-primary dark:hover:bg-meta-4">
                            Edit
                            </a>
                            <a href="{{route('delete.${route}', ${id})}}" class="flex w-full px-4 py-2 text-sm hover:bg-whiter hover:text-primary dark:hover:bg-meta-4">
                            Delete
                            </a>
                        </div>
                    </div>
                </div>`;

            }
            
        });
        //item.addEventListener('mouseleave', (event) => item.textContent = 'Choisir ?')
    } )
}
