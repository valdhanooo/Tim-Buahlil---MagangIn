const modal = document.getElementById('rekomendasiModal');
const formState = document.getElementById('modalFormState');
const successState = document.getElementById('modalSuccessState');

function openModal() {
    modal.classList.remove('hidden');
    formState.classList.remove('hidden');
    successState.classList.add('hidden');
    document.body.style.overflow = 'hidden'; 
}

function closeModal() {
    modal.classList.add('hidden');
    document.body.style.overflow = 'auto';
}

function submitRekomendasi(e) {
    e.preventDefault(); 
    formState.classList.add('hidden');
    successState.classList.remove('hidden');

    setTimeout(() => {
        closeModal();
    }, 3000); 
}