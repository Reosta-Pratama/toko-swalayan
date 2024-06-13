document.addEventListener('DOMContentLoaded', function() {
    var filterBtn = document.getElementById('filterBtn');
    var filterBox = document.getElementById('filterBox');

    filterBtn.addEventListener('click', function() {
        toggleFilterBox();
        toggleButtonStyle();
    });

    function toggleFilterBox() {
        if (filterBox.classList.contains('hidden')) {
            filterBox.classList.remove('hidden');
            filterBox.classList.add('flex');
        } else {
            filterBox.classList.remove('flex');
            filterBox.classList.add('hidden');
        }
    }

    function toggleButtonStyle() {
        if (filterBtn.classList.contains('bg-bluePOS-1')) {
            filterBtn.classList.remove('bg-bluePOS-1', 'border-bluePOS-1/20');
            filterBtn.classList.add('bg-redPOS-1', 'border-redPOS-1/20');
        } else {
            filterBtn.classList.remove('bg-redPOS-1', 'border-redPOS-1/20');
            filterBtn.classList.add('bg-bluePOS-1', 'border-bluePOS-1/20');
        }
    }
});