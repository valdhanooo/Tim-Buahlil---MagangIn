function filterLamaran(status) {
    const buttons = document.querySelectorAll('.filter-btn');
    const cards = document.querySelectorAll('.kartu-lamaran');
    const emptyMessage = document.getElementById('pesan-kosong');
    let countVisible = 0;

    buttons.forEach(btn => {
        btn.className = "filter-btn flex items-center px-5 py-2.5 rounded-full font-bold text-gray-500 bg-white border-2 border-gray-200 hover:bg-gray-50 transition text-sm";
        const badge = btn.querySelector('span');
        badge.className = "ml-2 bg-gray-100 text-gray-500 px-2 py-0.5 rounded-full text-xs";
    });

    const activeBtn = document.getElementById('btn-' + status);
    activeBtn.className = "filter-btn active flex items-center px-5 py-2.5 rounded-full font-bold text-white bg-[#10367D] border-2 border-[#10367D] transition shadow-sm text-sm";
    const activeBadge = activeBtn.querySelector('span');
    activeBadge.className = "ml-2 bg-white text-[#10367D] px-2 py-0.5 rounded-full text-xs";

    cards.forEach(card => {
        if (status === 'semua') {
            card.style.display = 'flex';
            countVisible++;
        } else {
            if (card.classList.contains(status)) {
                card.style.display = 'flex';
                countVisible++;
            } else {
                card.style.display = 'none';
            }
        }
    });

    if (countVisible === 0) {
        emptyMessage.classList.remove('hidden');
    } else {
        emptyMessage.classList.add('hidden');
    }
}