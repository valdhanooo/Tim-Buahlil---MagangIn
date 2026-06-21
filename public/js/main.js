function openModal() {
    const modal = document.getElementById('rekomendasiModal');
    const formState = document.getElementById('modalFormState');
    const successState = document.getElementById('modalSuccessState');

    if (modal) modal.classList.remove('hidden');
    if (formState) formState.classList.remove('hidden');
    if (successState) successState.classList.add('hidden');
    
    document.body.style.overflow = 'hidden'; 
}

function closeModal() {
    const modal = document.getElementById('rekomendasiModal');
    if (modal) modal.classList.add('hidden');
    
    document.body.style.overflow = 'auto';
}

function submitRekomendasi(e) {
    e.preventDefault(); 
    
    const formState = document.getElementById('modalFormState');
    const successState = document.getElementById('modalSuccessState');

    if (formState) formState.classList.add('hidden');
    if (successState) successState.classList.remove('hidden');

    // Menutup modal otomatis setelah 3 detik
    setTimeout(() => {
        closeModal();
    }, 3000); 
}