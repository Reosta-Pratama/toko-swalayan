function showTooltip(id) {
    var tooltip = document.getElementById(id);
    tooltip.classList.remove('opacity-0', 'invisible');
    tooltip.classList.add('opacity-100', 'visible');
}

function hideTooltip(id) {
    var tooltip = document.getElementById(id);
    tooltip.classList.remove('opacity-100', 'visible');
    tooltip.classList.add('opacity-0', 'invisible');
}